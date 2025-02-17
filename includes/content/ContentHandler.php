<?php

/**
 * Exception representing a failure to serialize or unserialize a content object.
 */
class MWContentSerializationException extends MWException {

}

/**
 * A content handler knows how do deal with a specific type of content on a wiki
 * page. Content is stored in the database in a serialized form (using a
 * serialization format a.k.a. MIME type) and is unserialized into its native
 * PHP representation (the content model), which is wrapped in an instance of
 * the appropriate subclass of Content.
 *
 * ContentHandler instances are stateless singletons that serve, among other
 * things, as a factory for Content objects. Generally, there is one subclass
 * of ContentHandler and one subclass of Content for every type of content model.
 *
 * Some content types have a flat model, that is, their native representation
 * is the same as their serialized form. Examples would be JavaScript and CSS
 * code. As of now, this also applies to wikitext (MediaWiki's default content
 * type), but wikitext content may be represented by a DOM or AST structure in
 * the future.
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @since 1.21
 *
 * @file
 * @ingroup Content
 *
 * @author Daniel Kinzler
 */
abstract class ContentHandler {

	/**
	 * Switch for enabling deprecation warnings. Used by ContentHandler::deprecated()
	 * and ContentHandler::runLegacyHooks().
	 *
	 * Once the ContentHandler code has settled in a bit, this should be set to true to
	 * make extensions etc. show warnings when using deprecated functions and hooks.
	 */
	protected static $enableDeprecationWarnings = false;

	/**
	 * Convenience function for getting flat text from a Content object. This
	 * should only be used in the context of backwards compatibility with code
	 * that is not yet able to handle Content objects!
	 *
	 * If $content is null, this method returns the empty string.
	 *
	 * If $content is an instance of TextContent, this method returns the flat
	 * text as returned by $content->getNativeData().
	 *
	 * If $content is not a TextContent object, the behavior of this method
	 * depends on the global $wgContentHandlerTextFallback:
	 * - If $wgContentHandlerTextFallback is 'fail' and $content is not a
	 *   TextContent object, an MWException is thrown.
	 * - If $wgContentHandlerTextFallback is 'serialize' and $content is not a
	 *   TextContent object, $content->serialize() is called to get a string
	 *   form of the content.
	 * - If $wgContentHandlerTextFallback is 'ignore' and $content is not a
	 *   TextContent object, this method returns null.
	 * - otherwise, the behaviour is undefined.
	 *
	 * @since 1.21
	 *
	 * @param $content Content|null
	 * @return null|string the textual form of $content, if available
	 * @throws MWException if $content is not an instance of TextContent and
	 *   $wgContentHandlerTextFallback was set to 'fail'.
	 */
	public static function getContentText( Content $content = null ) {
		global $wgContentHandlerTextFallback;

		if ( is_null( $content ) ) {
			return '';
		}

		if ( $content instanceof TextContent ) {
			return $content->getNativeData();
		}

		wfDebugLog( 'ContentHandler', 'Accessing ' . $content->getModel() . ' content as text!' );

		if ( $wgContentHandlerTextFallback == 'fail' ) {
			throw new MWException(
				"Attempt to get text from Content with model " .
				$content->getModel()
			);
		}

		if ( $wgContentHandlerTextFallback == 'serialize' ) {
			return $content->serialize();
		}

		return null;
	}

	/**
	 * Convenience function for creating a Content object from a given textual
	 * representation.
	 *
	 * $text will be deserialized into a Content object of the model specified
	 * by $modelId (or, if that is not given, $title->getContentModel()) using
	 * the given format.
	 *
	 * @since 1.21
	 *
	 * @param $text string the textual representation, will be
	 *    unserialized to create the Content object
	 * @param $title null|Title the title of the page this text belongs to.
	 *    Required if $modelId is not provided.
	 * @param $modelId null|string the model to deserialize to. If not provided,
	 *    $title->getContentModel() is used.
	 * @param $format null|string the format to use for deserialization. If not
	 *    given, the model's default format is used.
	 *
	 * @return Content a Content object representing $text
	 *
	 * @throw MWException if $model or $format is not supported or if $text can
	 *    not be unserialized using $format.
	 */
	public static function makeContent( $text, Title $title = null,
		$modelId = null, $format = null )
	{
		if ( is_null( $modelId ) ) {
			if ( is_null( $title ) ) {
				throw new MWException( "Must provide a Title object or a content model ID." );
			}

			$modelId = $title->getContentModel();
		}

		$handler = ContentHandler::getForModelID( $modelId );
		return $handler->unserializeContent( $text, $format );
	}

	/**
	 * Returns the name of the default content model to be used for the page
	 * with the given title.
	 *
	 * Note: There should rarely be need to call this method directly.
	 * To determine the actual content model for a given page, use
	 * Title::getContentModel().
	 *
	 * Which model is to be used by default for the page is determined based
	 * on several factors:
	 * - The global setting $wgNamespaceContentModels specifies a content model
	 *   per namespace.
	 * - The hook ContentHandlerDefaultModelFor may be used to override the page's default
	 *   model.
	 * - Pages in NS_MEDIAWIKI and NS_USER default to the CSS or JavaScript
	 *   model if they end in .js or .css, respectively.
	 * - Pages in NS_MEDIAWIKI default to the wikitext model otherwise.
	 * - The hook TitleIsCssOrJsPage may be used to force a page to use the CSS
	 *   or JavaScript model. This is a compatibility feature. The ContentHandlerDefaultModelFor
	 *   hook should be used instead if possible.
	 * - The hook TitleIsWikitextPage may be used to force a page to use the
	 *   wikitext model. This is a compatibility feature. The ContentHandlerDefaultModelFor
	 *   hook should be used instead if possible.
	 *
	 * If none of the above applies, the wikitext model is used.
	 *
	 * Note: this is used by, and may thus not use, Title::getContentModel()
	 *
	 * @since 1.21
	 *
	 * @param $title Title
	 * @return null|string default model name for the page given by $title
	 */
	public static function getDefaultModelFor( Title $title ) {
		global $wgNamespaceContentModels;

		// NOTE: this method must not rely on $title->getContentModel() directly or indirectly,
		//       because it is used to initialize the mContentModel member.

		$ns = $title->getNamespace();

		$ext = false;
		$m = null;
		$model = null;

		if ( !empty( $wgNamespaceContentModels[ $ns ] ) ) {
			$model = $wgNamespaceContentModels[ $ns ];
		}

		// Hook can determine default model
		if ( !wfRunHooks( 'ContentHandlerDefaultModelFor', array( $title, &$model ) ) ) {
			if ( !is_null( $model ) ) {
				return $model;
			}
		}

		// Could this page contain custom CSS or JavaScript, based on the title?
		$isCssOrJsPage = NS_MEDIAWIKI == $ns && preg_match( '!\.(css|js)$!u', $title->getText(), $m );
		if ( $isCssOrJsPage ) {
			$ext = $m[1];
		}

		// Hook can force JS/CSS
		wfRunHooks( 'TitleIsCssOrJsPage', array( $title, &$isCssOrJsPage ) );

		// Is this a .css subpage of a user page?
		$isJsCssSubpage = NS_USER == $ns
			&& !$isCssOrJsPage
			&& preg_match( "/\\/.*\\.(js|css)$/", $title->getText(), $m );
		if ( $isJsCssSubpage ) {
			$ext = $m[1];
		}

		// Is this wikitext, according to $wgNamespaceContentModels or the DefaultModelFor hook?
		$isWikitext = is_null( $model ) || $model == CONTENT_MODEL_WIKITEXT;
		$isWikitext = $isWikitext && !$isCssOrJsPage && !$isJsCssSubpage;

		// Hook can override $isWikitext
		wfRunHooks( 'TitleIsWikitextPage', array( $title, &$isWikitext ) );

		if ( !$isWikitext ) {
			switch ( $ext ) {
				case 'js':
					return CONTENT_MODEL_JAVASCRIPT;
				case 'css':
					return CONTENT_MODEL_CSS;
				default:
					return is_null( $model ) ? CONTENT_MODEL_TEXT : $model;
			}
		}

		// We established that it must be wikitext

		return CONTENT_MODEL_WIKITEXT;
	}

	/**
	 * Returns the appropriate ContentHandler singleton for the given title.
	 *
	 * @since 1.21
	 *
	 * @param $title Title
	 * @return ContentHandler
	 */
	public static function getForTitle( Title $title ) {
		$modelId = $title->getContentModel();
		return ContentHandler::getForModelID( $modelId );
	}

	/**
	 * Returns the appropriate ContentHandler singleton for the given Content
	 * object.
	 *
	 * @since 1.21
	 *
	 * @param $content Content
	 * @return ContentHandler
	 */
	public static function getForContent( Content $content ) {
		$modelId = $content->getModel();
		return ContentHandler::getForModelID( $modelId );
	}

	/**
	 * @var Array A Cache of ContentHandler instances by model id
	 */
	static $handlers;

	/**
	 * Returns the ContentHandler singleton for the given model ID. Use the
	 * CONTENT_MODEL_XXX constants to identify the desired content model.
	 *
	 * ContentHandler singletons are taken from the global $wgContentHandlers
	 * array. Keys in that array are model names, the values are either
	 * ContentHandler singleton objects, or strings specifying the appropriate
	 * subclass of ContentHandler.
	 *
	 * If a class name is encountered when looking up the singleton for a given
	 * model name, the class is instantiated and the class name is replaced by
	 * the resulting singleton in $wgContentHandlers.
	 *
	 * If no ContentHandler is defined for the desired $modelId, the
	 * ContentHandler may be provided by the ContentHandlerForModelID hook.
	 * If no ContentHandler can be determined, an MWException is raised.
	 *
	 * @since 1.21
	 *
	 * @param $modelId String The ID of the content model for which to get a
	 *    handler. Use CONTENT_MODEL_XXX constants.
	 * @return ContentHandler The ContentHandler singleton for handling the
	 *    model given by $modelId
	 * @throws MWException if no handler is known for $modelId.
	 */
	public static function getForModelID( $modelId ) {
		global $wgContentHandlers;

		if ( isset( ContentHandler::$handlers[$modelId] ) ) {
			return ContentHandler::$handlers[$modelId];
		}

		if ( empty( $wgContentHandlers[$modelId] ) ) {
			$handler = null;

			wfRunHooks( 'ContentHandlerForModelID', array( $modelId, &$handler ) );

			if ( $handler === null ) {
				throw new MWException( "No handler for model '$modelId'' registered in \$wgContentHandlers" );
			}

			if ( !( $handler instanceof ContentHandler ) ) {
				throw new MWException( "ContentHandlerForModelID must supply a ContentHandler instance" );
			}
		} else {
			$class = $wgContentHandlers[$modelId];
			$handler = new $class( $modelId );

			if ( !( $handler instanceof ContentHandler ) ) {
				throw new MWException( "$class from \$wgContentHandlers is not compatible with ContentHandler" );
			}
		}

		wfDebugLog( 'ContentHandler', 'Created handler for ' . $modelId
					. ': ' . get_class( $handler ) );

		ContentHandler::$handlers[$modelId] = $handler;
		return ContentHandler::$handlers[$modelId];
	}

	/**
	 * Returns the localized name for a given content model.
	 *
	 * Model names are localized using system messages. Message keys
	 * have the form content-model-$name, where $name is getContentModelName( $id ).
	 *
	 * @param $name String The content model ID, as given by a CONTENT_MODEL_XXX
	 *    constant or returned by Revision::getContentModel().
	 *
	 * @return string The content format's localized name.
	 * @throws MWException if the model id isn't known.
	 */
	public static function getLocalizedName( $name ) {
		$key = "content-model-$name";

		$msg = wfMessage( $key );

		return $msg->exists() ? $msg->plain() : $name;
	}

	public static function getContentModels() {
		global $wgContentHandlers;

		return array_keys( $wgContentHandlers );
	}

	public static function getAllContentFormats() {
		global $wgContentHandlers;

		$formats = array();

		foreach ( $wgContentHandlers as $model => $class ) {
			$handler = ContentHandler::getForModelID( $model );
			$formats = array_merge( $formats, $handler->getSupportedFormats() );
		}

		$formats = array_unique( $formats );
		return $formats;
	}

	// ------------------------------------------------------------------------

	protected $mModelID;
	protected $mSupportedFormats;

	/**
	 * Constructor, initializing the ContentHandler instance with its model ID
	 * and a list of supported formats. Values for the parameters are typically
	 * provided as literals by subclass's constructors.
	 *
	 * @param $modelId String (use CONTENT_MODEL_XXX constants).
	 * @param $formats array List for supported serialization formats
	 *    (typically as MIME types)
	 */
	public function __construct( $modelId, $formats ) {
		$this->mModelID = $modelId;
		$this->mSupportedFormats = $formats;

		$this->mModelName = preg_replace( '/(Content)?Handler$/', '', get_class( $this ) );
		$this->mModelName = preg_replace( '/[_\\\\]/', '', $this->mModelName );
		$this->mModelName = strtolower( $this->mModelName );
	}

	/**
	 * Serializes a Content object of the type supported by this ContentHandler.
	 *
	 * @since 1.21
	 *
	 * @param $content Content The Content object to serialize
	 * @param $format null|String The desired serialization format
	 * @return string Serialized form of the content
	 */
	public abstract function serializeContent( Content $content, $format = null );

	/**
	 * Unserializes a Content object of the type supported by this ContentHandler.
	 *
	 * @since 1.21
	 *
	 * @param $blob string serialized form of the content
	 * @param $format null|String the format used for serialization
	 * @return Content the Content object created by deserializing $blob
	 */
	public abstract function unserializeContent( $blob, $format = null );

	/**
	 * Creates an empty Content object of the type supported by this
	 * ContentHandler.
	 *
	 * @since 1.21
	 *
	 * @return Content
	 */
	public abstract function makeEmptyContent();

	/**
	 * Creates a new Content object that acts as a redirect to the given page,
	 * or null of redirects are not supported by this content model.
	 *
	 * This default implementation always returns null. Subclasses supporting redirects
	 * must override this method.
	 *
	 * @since 1.21
	 *
	 * @param Title $destination the page to redirect to.
	 *
	 * @return Content
	 */
	public function makeRedirectContent( Title $destination ) {
		return null;
	}

	/**
	 * Returns the model id that identifies the content model this
	 * ContentHandler can handle. Use with the CONTENT_MODEL_XXX constants.
	 *
	 * @since 1.21
	 *
	 * @return String The model ID
	 */
	public function getModelID() {
		return $this->mModelID;
	}

	/**
	 * Throws an MWException if $model_id is not the ID of the content model
	 * supported by this ContentHandler.
	 *
	 * @since 1.21
	 *
	 * @param String $model_id The model to check
	 *
	 * @throws MWException
	 */
	protected function checkModelID( $model_id ) {
		if ( $model_id !== $this->mModelID ) {
			throw new MWException( "Bad content model: " .
				"expected {$this->mModelID} " .
				"but got $model_id." );
		}
	}

	/**
	 * Returns a list of serialization formats supported by the
	 * serializeContent() and unserializeContent() methods of this
	 * ContentHandler.
	 *
	 * @since 1.21
	 *
	 * @return array of serialization formats as MIME type like strings
	 */
	public function getSupportedFormats() {
		return $this->mSupportedFormats;
	}

	/**
	 * The format used for serialization/deserialization by default by this
	 * ContentHandler.
	 *
	 * This default implementation will return the first element of the array
	 * of formats that was passed to the constructor.
	 *
	 * @since 1.21
	 *
	 * @return string the name of the default serialization format as a MIME type
	 */
	public function getDefaultFormat() {
		return $this->mSupportedFormats[0];
	}

	/**
	 * Returns true if $format is a serialization format supported by this
	 * ContentHandler, and false otherwise.
	 *
	 * Note that if $format is null, this method always returns true, because
	 * null means "use the default format".
	 *
	 * @since 1.21
	 *
	 * @param $format string the serialization format to check
	 * @return bool
	 */
	public function isSupportedFormat( $format ) {

		if ( !$format ) {
			return true; // this means "use the default"
		}

		return in_array( $format, $this->mSupportedFormats );
	}

	/**
	 * Throws an MWException if isSupportedFormat( $format ) is not true.
	 * Convenient for checking whether a format provided as a parameter is
	 * actually supported.
	 *
	 * @param $format string the serialization format to check
	 *
	 * @throws MWException
	 */
	protected function checkFormat( $format ) {
		if ( !$this->isSupportedFormat( $format ) ) {
			throw new MWException(
				"Format $format is not supported for content model "
				. $this->getModelID()
			);
		}
	}

	/**
	 * Returns overrides for action handlers.
	 * Classes listed here will be used instead of the default one when
	 * (and only when) $wgActions[$action] === true. This allows subclasses
	 * to override the default action handlers.
	 *
	 * @since 1.21
	 *
	 * @return Array
	 */
	public function getActionOverrides() {
		return array();
	}

	/**
	 * Factory for creating an appropriate DifferenceEngine for this content model.
	 *
	 * @since 1.21
	 *
	 * @param $context IContextSource context to use, anything else will be
	 *    ignored
	 * @param $old Integer Old ID we want to show and diff with.
	 * @param $new int|string String either 'prev' or 'next'.
	 * @param $rcid Integer ??? FIXME (default 0)
	 * @param $refreshCache boolean If set, refreshes the diff cache
	 * @param $unhide boolean If set, allow viewing deleted revs
	 *
	 * @return DifferenceEngine
	 */
	public function createDifferenceEngine( IContextSource $context,
		$old = 0, $new = 0,
		$rcid = 0, # FIXME: use everywhere!
		$refreshCache = false, $unhide = false
	) {
		$this->checkModelID( $context->getTitle()->getContentModel() );

		$diffEngineClass = $this->getDiffEngineClass();

		return new $diffEngineClass( $context, $old, $new, $rcid, $refreshCache, $unhide );
	}

	/**
	 * Get the language in which the content of the given page is written.
	 *
	 * This default implementation just returns $wgContLang (except for pages in the MediaWiki namespace)
	 *
	 * Note that the pages language is not cacheable, since it may in some cases depend on user settings.
	 *
	 * Also note that the page language may or may not depend on the actual content of the page,
	 * that is, this method may load the content in order to determine the language.
	 *
	 * @since 1.21
	 *
	 * @param Title        $title the page to determine the language for.
	 * @param Content|null $content the page's content, if you have it handy, to avoid reloading it.
	 *
	 * @return Language the page's language
	 */
	public function getPageLanguage( Title $title, Content $content = null ) {
		global $wgContLang, $wgLang;
		$pageLang = $wgContLang;

		if ( $title->getNamespace() == NS_MEDIAWIKI ) {
			// Parse mediawiki messages with correct target language
			list( /* $unused */, $lang ) = MessageCache::singleton()->figureMessage( $title->getText() );
			$pageLang = wfGetLangObj( $lang );
		}

		wfRunHooks( 'PageContentLanguage', array( $title, &$pageLang, $wgLang ) );
		return wfGetLangObj( $pageLang );
	}

	/**
	 * Get the language in which the content of this page is written when
	 * viewed by user. Defaults to $this->getPageLanguage(), but if the user
	 * specified a preferred variant, the variant will be used.
	 *
	 * This default implementation just returns $this->getPageLanguage( $title, $content ) unless
	 * the user specified a preferred variant.
	 *
	 * Note that the pages view language is not cacheable, since it depends on user settings.
	 *
	 * Also note that the page language may or may not depend on the actual content of the page,
	 * that is, this method may load the content in order to determine the language.
	 *
	 * @since 1.21
	 *
	 * @param Title        $title the page to determine the language for.
	 * @param Content|null $content the page's content, if you have it handy, to avoid reloading it.
	 *
	 * @return Language the page's language for viewing
	 */
	public function getPageViewLanguage( Title $title, Content $content = null ) {
		$pageLang = $this->getPageLanguage( $title, $content );

		if ( $title->getNamespace() !== NS_MEDIAWIKI ) {
			// If the user chooses a variant, the content is actually
			// in a language whose code is the variant code.
			$variant = $pageLang->getPreferredVariant();
			if ( $pageLang->getCode() !== $variant ) {
				$pageLang = Language::factory( $variant );
			}
		}

		return $pageLang;
	}

	/**
	 * Determines whether the content type handled by this ContentHandler
	 * can be used on the given page.
	 *
	 * This default implementation always returns true.
	 * Subclasses may override this to restrict the use of this content model to specific locations,
	 * typically based on the namespace or some other aspect of the title, such as a special suffix
	 * (e.g. ".svg" for SVG content).
	 *
	 * @param Title $title the page's title.
	 *
	 * @return bool true if content of this kind can be used on the given page, false otherwise.
	 */
	public function canBeUsedOn( Title $title ) {
		return true;
	}

	/**
	 * Returns the name of the diff engine to use.
	 *
	 * @since 1.21
	 *
	 * @return string
	 */
	protected function getDiffEngineClass() {
		return 'DifferenceEngine';
	}

	/**
	 * Attempts to merge differences between three versions.
	 * Returns a new Content object for a clean merge and false for failure or
	 * a conflict.
	 *
	 * This default implementation always returns false.
	 *
	 * @since 1.21
	 *
	 * @param $oldContent Content|string  String
	 * @param $myContent Content|string   String
	 * @param $yourContent Content|string String
	 *
	 * @return Content|Bool
	 */
	public function merge3( Content $oldContent, Content $myContent, Content $yourContent ) {
		return false;
	}

	/**
	 * Return an applicable auto-summary if one exists for the given edit.
	 *
	 * @since 1.21
	 *
	 * @param $oldContent Content|null: the previous text of the page.
	 * @param $newContent Content|null: The submitted text of the page.
	 * @param $flags int Bit mask: a bit mask of flags submitted for the edit.
	 *
	 * @return string An appropriate auto-summary, or an empty string.
	 */
	public function getAutosummary( Content $oldContent = null, Content $newContent = null, $flags ) {
		global $wgContLang;

		// Decide what kind of auto-summary is needed.

		// Redirect auto-summaries

		/**
		 * @var $ot Title
		 * @var $rt Title
		 */

		$ot = !is_null( $oldContent ) ? $oldContent->getRedirectTarget() : null;
		$rt = !is_null( $newContent ) ? $newContent->getRedirectTarget() : null;

		if ( is_object( $rt ) ) {
			if ( !is_object( $ot )
				|| !$rt->equals( $ot )
				|| $ot->getFragment() != $rt->getFragment() )
			{
				$truncatedtext = $newContent->getTextForSummary(
					250
						- strlen( wfMessage( 'autoredircomment' )->inContentLanguage()->text() )
						- strlen( $rt->getFullText() ) );

				return wfMessage( 'autoredircomment', $rt->getFullText() )
						->rawParams( $truncatedtext )->inContentLanguage()->text();
			}
		}

		// New page auto-summaries
		if ( $flags & EDIT_NEW && $newContent->getSize() > 0 ) {
			// If they're making a new article, give its text, truncated, in
			// the summary.

			$truncatedtext = $newContent->getTextForSummary(
				200 - strlen( wfMessage( 'autosumm-new' )->inContentLanguage()->text() ) );

			return wfMessage( 'autosumm-new' )->rawParams( $truncatedtext )
					->inContentLanguage()->text();
		}

		// Blanking auto-summaries
		if ( !empty( $oldContent ) && $oldContent->getSize() > 0 && $newContent->getSize() == 0 ) {
			return wfMessage( 'autosumm-blank' )->inContentLanguage()->text();
		} elseif ( !empty( $oldContent )
			&& $oldContent->getSize() > 10 * $newContent->getSize()
			&& $newContent->getSize() < 500 )
		{
			// Removing more than 90% of the article

			$truncatedtext = $newContent->getTextForSummary(
				200 - strlen( wfMessage( 'autosumm-replace' )->inContentLanguage()->text() ) );

			return wfMessage( 'autosumm-replace' )->rawParams( $truncatedtext )
					->inContentLanguage()->text();
		}

		// If we reach this point, there's no applicable auto-summary for our
		// case, so our auto-summary is empty.
		return '';
	}

	/**
	 * Auto-generates a deletion reason
	 *
	 * @since 1.21
	 *
	 * @param $title Title: the page's title
	 * @param &$hasHistory Boolean: whether the page has a history
	 * @return mixed String containing deletion reason or empty string, or
	 *    boolean false if no revision occurred
	 *
	 * @XXX &$hasHistory is extremely ugly, it's here because
	 * WikiPage::getAutoDeleteReason() and Article::getReason()
	 * have it / want it.
	 */
	public function getAutoDeleteReason( Title $title, &$hasHistory ) {
		$dbw = wfGetDB( DB_MASTER );

		// Get the last revision
		$rev = Revision::newFromTitle( $title );

		if ( is_null( $rev ) ) {
			return false;
		}

		// Get the article's contents
		$content = $rev->getContent();
		$blank = false;

		// If the page is blank, use the text from the previous revision,
		// which can only be blank if there's a move/import/protect dummy
		// revision involved
		if ( !$content || $content->isEmpty() ) {
			$prev = $rev->getPrevious();

			if ( $prev ) {
				$rev = $prev;
				$content = $rev->getContent();
				$blank = true;
			}
		}

		$this->checkModelID( $rev->getContentModel() );

		// Find out if there was only one contributor
		// Only scan the last 20 revisions
		$res = $dbw->select( 'revision', 'rev_user_text',
			array(
				'rev_page' => $title->getArticleID(),
				$dbw->bitAnd( 'rev_deleted', Revision::DELETED_USER ) . ' = 0'
			),
			__METHOD__,
			array( 'LIMIT' => 20 )
		);

		if ( $res === false ) {
			// This page has no revisions, which is very weird
			return false;
		}

		$hasHistory = ( $res->numRows() > 1 );
		$row = $dbw->fetchObject( $res );

		if ( $row ) { // $row is false if the only contributor is hidden
			$onlyAuthor = $row->rev_user_text;
			// Try to find a second contributor
			foreach ( $res as $row ) {
				if ( $row->rev_user_text != $onlyAuthor ) { // Bug 22999
					$onlyAuthor = false;
					break;
				}
			}
		} else {
			$onlyAuthor = false;
		}

		// Generate the summary with a '$1' placeholder
		if ( $blank ) {
			// The current revision is blank and the one before is also
			// blank. It's just not our lucky day
			$reason = wfMessage( 'exbeforeblank', '$1' )->inContentLanguage()->text();
		} else {
			if ( $onlyAuthor ) {
				$reason = wfMessage(
					'excontentauthor',
					'$1',
					$onlyAuthor
				)->inContentLanguage()->text();
			} else {
				$reason = wfMessage( 'excontent', '$1' )->inContentLanguage()->text();
			}
		}

		if ( $reason == '-' ) {
			// Allow these UI messages to be blanked out cleanly
			return '';
		}

		// Max content length = max comment length - length of the comment (excl. $1)
		$text = $content ? $content->getTextForSummary( 255 - ( strlen( $reason ) - 2 ) ) : '';

		// Now replace the '$1' placeholder
		$reason = str_replace( '$1', $text, $reason );

		return $reason;
	}

	/**
	 * Get the Content object that needs to be saved in order to undo all revisions
	 * between $undo and $undoafter. Revisions must belong to the same page,
	 * must exist and must not be deleted.
	 *
	 * @since 1.21
	 *
	 * @param $current Revision The current text
	 * @param $undo Revision The revision to undo
	 * @param $undoafter Revision Must be an earlier revision than $undo
	 *
	 * @return mixed String on success, false on failure
	 */
	public function getUndoContent( Revision $current, Revision $undo, Revision $undoafter ) {
		$cur_content = $current->getContent();

		if ( empty( $cur_content ) ) {
			return false; // no page
		}

		$undo_content = $undo->getContent();
		$undoafter_content = $undoafter->getContent();

		$this->checkModelID( $cur_content->getModel() );
		$this->checkModelID( $undo_content->getModel() );
		$this->checkModelID( $undoafter_content->getModel() );

		if ( $cur_content->equals( $undo_content ) ) {
			// No use doing a merge if it's just a straight revert.
			return $undoafter_content;
		}

		$undone_content = $this->merge3( $undo_content, $undoafter_content, $cur_content );

		return $undone_content;
	}

	/**
	 * Get parser options suitable for rendering the primary article wikitext
	 *
	 * @param IContextSource|User|string $context One of the following:
	 *        - IContextSource: Use the User and the Language of the provided
	 *                                            context
	 *        - User: Use the provided User object and $wgLang for the language,
	 *                                            so use an IContextSource object if possible.
	 *        - 'canonical': Canonical options (anonymous user with default
	 *                                            preferences and content language).
	 *
	 * @param IContextSource|User|string $context
	 *
	 * @throws MWException
	 * @return ParserOptions
	 */
	public function makeParserOptions( $context ) {
		global $wgContLang;

		if ( $context instanceof IContextSource ) {
			$options = ParserOptions::newFromContext( $context );
		} elseif ( $context instanceof User ) { // settings per user (even anons)
			$options = ParserOptions::newFromUser( $context );
		} elseif ( $context === 'canonical' ) { // canonical settings
			$options = ParserOptions::newFromUserAndLang( new User, $wgContLang );
		} else {
			throw new MWException( "Bad context for parser options: $context" );
		}

		$options->enableLimitReport(); // show inclusion/loop reports
		$options->setTidy( true ); // fix bad HTML

		return $options;
	}

	/**
	 * Returns true for content models that support caching using the
	 * ParserCache mechanism. See WikiPage::isParserCacheUsed().
	 *
	 * @since 1.21
	 *
	 * @return bool
	 */
	public function isParserCacheSupported() {
		return false;
	}

	/**
	 * Returns true if this content model supports sections.
	 *
	 * This default implementation returns false.
	 *
	 * @return boolean whether sections are supported.
	 */
	public function supportsSections() {
		return false;
	}

	/**
	 * Logs a deprecation warning, visible if $wgDevelopmentWarnings, but only if
	 * self::$enableDeprecationWarnings is set to true.
	 *
	 * @param String      $func The name of the deprecated function
	 * @param string      $version The version since the method is deprecated. Usually 1.21
	 *                    for ContentHandler related stuff.
	 * @param String|bool $component: Component to which the function belongs.
	 *                                If false, it is assumed the function is in MediaWiki core.
	 *
	 * @see ContentHandler::$enableDeprecationWarnings
	 * @see wfDeprecated
	 */
	public static function deprecated( $func, $version, $component = false ) {
		if ( self::$enableDeprecationWarnings ) {
			wfDeprecated( $func, $version, $component, 3 );
		}
	}

	/**
	 * Call a legacy hook that uses text instead of Content objects.
	 * Will log a warning when a matching hook function is registered.
	 * If the textual representation of the content is changed by the
	 * hook function, a new Content object is constructed from the new
	 * text.
	 *
	 * @param $event String: event name
	 * @param $args Array: parameters passed to hook functions
	 * @param $warn bool: whether to log a warning.
	 *                    Default to self::$enableDeprecationWarnings.
	 *                    May be set to false for testing.
	 *
	 * @return Boolean True if no handler aborted the hook
	 *
	 * @see ContentHandler::$enableDeprecationWarnings
	 */
	public static function runLegacyHooks( $event, $args = array(),
			$warn = null ) {

		if ( $warn === null ) {
			$warn = self::$enableDeprecationWarnings;
		}

		if ( !Hooks::isRegistered( $event ) ) {
			return true; // nothing to do here
		}

		if ( $warn ) {
			// Log information about which handlers are registered for the legacy hook,
			// so we can find and fix them.

			$handlers = Hooks::getHandlers( $event );
			$handlerInfo = array();

			wfSuppressWarnings();

			foreach ( $handlers as $handler ) {
				$info = '';

				if ( is_array( $handler ) ) {
					if ( is_object( $handler[0] ) ) {
						$info = get_class( $handler[0] );
					} else {
						$info = $handler[0];
					}

					if ( isset( $handler[1] ) ) {
						$info .= '::' . $handler[1];
					}
				} else if ( is_object( $handler ) ) {
					$info = get_class( $handler[0] );
					$info .= '::on' . $event;
				} else {
					$info = $handler;
				}

				$handlerInfo[] = $info;
			}

			wfRestoreWarnings();

			wfWarn( "Using obsolete hook $event via ContentHandler::runLegacyHooks()! Handlers: " . implode(', ', $handlerInfo), 2 );
		}

		// convert Content objects to text
		$contentObjects = array();
		$contentTexts = array();

		foreach ( $args as $k => $v ) {
			if ( $v instanceof Content ) {
				/* @var Content $v */

				$contentObjects[$k] = $v;

				$v = $v->serialize();
				$contentTexts[ $k ] = $v;
				$args[ $k ] = $v;
			}
		}

		// call the hook functions
		$ok = wfRunHooks( $event, $args );

		// see if the hook changed the text
		foreach ( $contentTexts as $k => $orig ) {
			/* @var Content $content */

			$modified = $args[ $k ];
			$content = $contentObjects[$k];

			if ( $modified !== $orig ) {
				// text was changed, create updated Content object
				$content = $content->getContentHandler()->unserializeContent( $modified );
			}

			$args[ $k ] = $content;
		}

		return $ok;
	}
}

