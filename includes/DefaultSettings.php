<?php
/**
 * Default values for MediaWiki configuration settings.
 *
 *
 *                 NEVER EDIT THIS FILE
 *
 *
 * To customize your installation, edit "LocalSettings.php". If you make
 * changes here, they will be lost on next upgrade of MediaWiki!
 *
 * In this file, variables whose default values depend on other
 * variables are set to false. The actual default value of these variables
 * will only be set in Setup.php, taking into account any custom settings
 * performed in LocalSettings.php.
 *
 * Documentation is in the source and on:
 * http://www.mediawiki.org/wiki/Manual:Configuration_settings
 *
 * @warning  Note: this (and other things) will break if the autoloader is not
 * enabled. Please include includes/AutoLoader.php before including this file.
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
 * @file
 */

/**
 * @defgroup Globalsettings Global settings
 */

/**
 * @cond file_level_code
 * This is not a valid entry point, perform no further processing unless
 * MEDIAWIKI is defined
 */
if( !defined( 'MEDIAWIKI' ) ) {
	echo "This file is part of MediaWiki and is not a valid entry point\n";
	die( 1 );
}

/**
 * wgConf hold the site configuration.
 * Not used for much in a default install.
 */
$wgConf = new SiteConfiguration;

/** MediaWiki version number */
$wgVersion = '1.21alpha';

/** Name of the site. It must be changed in LocalSettings.php */
$wgSitename = 'MediaWiki';

/**
 * URL of the server.
 *
 * @par Example:
 * @code
 * $wgServer = 'http://example.com';
 * @endcode
 *
 * This is usually detected correctly by MediaWiki. If MediaWiki detects the
 * wrong server, it will redirect incorrectly after you save a page. In that
 * case, set this variable to fix it.
 *
 * If you want to use protocol-relative URLs on your wiki, set this to a
 * protocol-relative URL like '//example.com' and set $wgCanonicalServer
 * to a fully qualified URL.
 */
$wgServer = WebRequest::detectServer();

/**
 * Canonical URL of the server, to use in IRC feeds and notification e-mails.
 * Must be fully qualified, even if $wgServer is protocol-relative.
 *
 * Defaults to $wgServer, expanded to a fully qualified http:// URL if needed.
 */
$wgCanonicalServer = false;

/************************************************************************//**
 * @name   Script path settings
 * @{
 */

/**
 * The path we should point to.
 * It might be a virtual path in case with use apache mod_rewrite for example.
 *
 * This *needs* to be set correctly.
 *
 * Other paths will be set to defaults based on it unless they are directly
 * set in LocalSettings.php
 */
$wgScriptPath       = '/wiki';

/**
 * Whether to support URLs like index.php/Page_title These often break when PHP
 * is set up in CGI mode. PATH_INFO *may* be correct if cgi.fix_pathinfo is set,
 * but then again it may not; lighttpd converts incoming path data to lowercase
 * on systems with case-insensitive filesystems, and there have been reports of
 * problems on Apache as well.
 *
 * To be safe we'll continue to keep it off by default.
 *
 * Override this to false if $_SERVER['PATH_INFO'] contains unexpectedly
 * incorrect garbage, or to true if it is really correct.
 *
 * The default $wgArticlePath will be set based on this value at runtime, but if
 * you have customized it, having this incorrectly set to true can cause
 * redirect loops when "pretty URLs" are used.
 */
$wgUsePathInfo =
	( strpos( php_sapi_name(), 'cgi' ) === false ) &&
	( strpos( php_sapi_name(), 'apache2filter' ) === false ) &&
	( strpos( php_sapi_name(), 'isapi' ) === false );

/**
 * The extension to append to script names by default. This can either be .php
 * or .php5.
 *
 * Some hosting providers use PHP 4 for *.php files, and PHP 5 for *.php5. This
 * variable is provided to support those providers.
 */
$wgScriptExtension  = '.php';


/**@}*/

/************************************************************************//**
 * @name   URLs and file paths
 *
 * These various web and file path variables are set to their defaults
 * in Setup.php if they are not explicitly set from LocalSettings.php.
 *
 * These will relatively rarely need to be set manually, unless you are
 * splitting style sheets or images outside the main document root.
 *
 * In this section, a "path" is usually a host-relative URL, i.e. a URL without
 * the host part, that starts with a slash. In most cases a full URL is also
 * acceptable. A "directory" is a local file path.
 *
 * In both paths and directories, trailing slashes should not be included.
 *
 * @{
 */

/**
 * The URL path to index.php.
 *
 * Defaults to "{$wgScriptPath}/index{$wgScriptExtension}".
 */
$wgScript = false;

/**
 * The URL path to redirect.php. This is a script that is used by the Nostalgia
 * skin.
 *
 * Defaults to "{$wgScriptPath}/redirect{$wgScriptExtension}".
 */
$wgRedirectScript = false;

/**
 * The URL path to load.php.
 *
 * Defaults to "{$wgScriptPath}/load{$wgScriptExtension}".
 */
$wgLoadScript = false;

/**
 * The URL path of the skins directory.
 * Defaults to "{$wgScriptPath}/skins".
 */
$wgStylePath = false;
$wgStyleSheetPath = &$wgStylePath;

/**
 * The URL path of the skins directory. Should not point to an external domain.
 * Defaults to "{$wgScriptPath}/skins".
 */
$wgLocalStylePath = false;

/**
 * The URL path of the extensions directory.
 * Defaults to "{$wgScriptPath}/extensions".
 * @since 1.16
 */
$wgExtensionAssetsPath = false;

/**
 * Filesystem stylesheets directory.
 * Defaults to "{$IP}/skins".
 */
$wgStyleDirectory = false;

/**
 * The URL path for primary article page views. This path should contain $1,
 * which is replaced by the article title.
 *
 * Defaults to "{$wgScript}/$1" or "{$wgScript}?title=$1",
 * depending on $wgUsePathInfo.
 */
$wgArticlePath = false;

/**
 * The URL path for the images directory.
 * Defaults to "{$wgScriptPath}/images".
 */
$wgUploadPath = false;

/**
 * The filesystem path of the images directory. Defaults to "{$IP}/images".
 */
$wgUploadDirectory = false;

/**
 * Directory where the cached page will be saved.
 * Defaults to "{$wgUploadDirectory}/cache".
 */
$wgFileCacheDirectory = false;

/**
 * The URL path of the wiki logo. The logo size should be 135x135 pixels.
 * Defaults to "{$wgStylePath}/common/images/wiki.png".
 */
$wgLogo = false;

/**
 * The URL path of the shortcut icon.
 */
$wgFavicon = '/favicon.ico';

/**
 * The URL path of the icon for iPhone and iPod Touch web app bookmarks.
 * Defaults to no icon.
 */
$wgAppleTouchIcon = false;

/**
 * The local filesystem path to a temporary directory. This is not required to
 * be web accessible.
 *
 * When this setting is set to false, its value will be set through a call
 * to wfTempDir(). See that methods implementation for the actual detection
 * logic.
 *
 * Developers should use the global function wfTempDir() instead of this
 * variable.
 *
 * @see wfTempDir()
 * @note Default changed to false in MediaWiki 1.20.
 *
 */
$wgTmpDirectory = false;

/**
 * If set, this URL is added to the start of $wgUploadPath to form a complete
 * upload URL.
 */
$wgUploadBaseUrl = '';

/**
 * To enable remote on-demand scaling, set this to the thumbnail base URL.
 * Full thumbnail URL will be like $wgUploadStashScalerBaseUrl/e/e6/Foo.jpg/123px-Foo.jpg
 * where 'e6' are the first two characters of the MD5 hash of the file name.
 * If $wgUploadStashScalerBaseUrl is set to false, thumbs are rendered locally as needed.
 */
$wgUploadStashScalerBaseUrl = false;

/**
 * To set 'pretty' URL paths for actions other than
 * plain page views, add to this array.
 *
 * @par Example:
 * Set pretty URL for the edit action:
 * @code
 *   'edit' => "$wgScriptPath/edit/$1"
 * @endcode
 *
 * There must be an appropriate script or rewrite rule in place to handle these
 * URLs.
 */
$wgActionPaths = array();

/**@}*/

/************************************************************************//**
 * @name   Files and file uploads
 * @{
 */

/** Uploads have to be specially set up to be secure */
$wgEnableUploads = false;

/**
 * The maximum age of temporary (incomplete) uploaded files
 */
$wgUploadStashMaxAge = 6 * 3600; // 6 hours

/** Allows to move images and other media files */
$wgAllowImageMoving = true;

/**
 * These are additional characters that should be replaced with '-' in filenames
 */
$wgIllegalFileChars = ":";

/**
 * @deprecated since 1.17 use $wgDeletedDirectory
 */
$wgFileStore = array();

/**
 * What directory to place deleted uploads in.
 * Defaults to "{$wgUploadDirectory}/deleted".
 */
$wgDeletedDirectory = false;

/**
 * Set this to true if you use img_auth and want the user to see details on why access failed.
 */
$wgImgAuthDetails = false;

/**
 * If this is enabled, img_auth.php will not allow image access unless the wiki
 * is private. This improves security when image uploads are hosted on a
 * separate domain.
 */
$wgImgAuthPublicTest = true;

/**
 * File repository structures
 *
 * $wgLocalFileRepo is a single repository structure, and $wgForeignFileRepos is
 * an array of such structures. Each repository structure is an associative
 * array of properties configuring the repository.
 *
 * Properties required for all repos:
 *   - class            The class name for the repository. May come from the core or an extension.
 *                      The core repository classes are FileRepo, LocalRepo, ForeignDBRepo.
 *                      FSRepo is also supported for backwards compatibility.
 *
 *   - name             A unique name for the repository (but $wgLocalFileRepo should be 'local').
 *                      The name should consist of alpha-numberic characters.
 *   - backend          A file backend name (see $wgFileBackends).
 *
 * For most core repos:
 *   - zones            Associative array of zone names that each map to an array with:
 *                          container  : backend container name the zone is in
 *                          directory  : root path within container for the zone
 *                          url        : base URL to the root of the zone
 *                          handlerUrl : base script handled URL to the root of the zone
 *                                       (see FileRepo::getZoneHandlerUrl() function)
 *                      Zones default to using "<repo name>-<zone name>" as the container name
 *                      and default to using the container root as the zone's root directory.
 *                      Nesting of zone locations within other zones should be avoided.
 *   - url              Public zone URL. The 'zones' settings take precedence.
 *   - hashLevels       The number of directory levels for hash-based division of files
 *   - thumbScriptUrl   The URL for thumb.php (optional, not recommended)
 *   - transformVia404  Whether to skip media file transformation on parse and rely on a 404
 *                      handler instead.
 *   - initialCapital   Equivalent to $wgCapitalLinks (or $wgCapitalLinkOverrides[NS_FILE],
 *                      determines whether filenames implicitly start with a capital letter.
 *                      The current implementation may give incorrect description page links
 *                      when the local $wgCapitalLinks and initialCapital are mismatched.
 *   - pathDisclosureProtection
 *                      May be 'paranoid' to remove all parameters from error messages, 'none' to
 *                      leave the paths in unchanged, or 'simple' to replace paths with
 *                      placeholders. Default for LocalRepo is 'simple'.
 *   - fileMode         This allows wikis to set the file mode when uploading/moving files. Default
 *                      is 0644.
 *   - directory        The local filesystem directory where public files are stored. Not used for
 *                      some remote repos.
 *   - thumbDir         The base thumbnail directory. Defaults to "<directory>/thumb".
 *   - thumbUrl         The base thumbnail URL. Defaults to "<url>/thumb".
 *   - isPrivate        Set this if measures should always be taken to keep the files private.
 *                      One should not trust this to assure that the files are not web readable;
 *                      the server configuration should be done manually depending on the backend.
 *
 * These settings describe a foreign MediaWiki installation. They are optional, and will be ignored
 * for local repositories:
 *   - descBaseUrl       URL of image description pages, e.g. http://en.wikipedia.org/wiki/File:
 *   - scriptDirUrl      URL of the MediaWiki installation, equivalent to $wgScriptPath, e.g.
 *                       http://en.wikipedia.org/w
 *   - scriptExtension   Script extension of the MediaWiki installation, equivalent to
 *                       $wgScriptExtension, e.g. .php5 defaults to .php
 *
 *   - articleUrl        Equivalent to $wgArticlePath, e.g. http://en.wikipedia.org/wiki/$1
 *   - fetchDescription  Fetch the text of the remote file description page. Equivalent to
 *                       $wgFetchCommonsDescriptions.
 *   - abbrvThreshold    File names over this size will use the short form of thumbnail names.
 *                       Short thumbnail names only have the width, parameters, and the extension.
 *
 * ForeignDBRepo:
 *   - dbType, dbServer, dbUser, dbPassword, dbName, dbFlags
 *                      equivalent to the corresponding member of $wgDBservers
 *   - tablePrefix       Table prefix, the foreign wiki's $wgDBprefix
 *   - hasSharedCache    True if the wiki's shared cache is accessible via the local $wgMemc
 *
 * ForeignAPIRepo:
 *   - apibase              Use for the foreign API's URL
 *   - apiThumbCacheExpiry  How long to locally cache thumbs for
 *
 * If you leave $wgLocalFileRepo set to false, Setup will fill in appropriate values.
 * Otherwise, set $wgLocalFileRepo to a repository structure as described above.
 * If you set $wgUseInstantCommons to true, it will add an entry for Commons.
 * If you set $wgForeignFileRepos to an array of repostory structures, those will
 * be searched after the local file repo.
 * Otherwise, you will only have access to local media files.
 *
 * @see Setup.php for an example usage and default initialization.
 */
$wgLocalFileRepo = false;

/** @see $wgLocalFileRepo */
$wgForeignFileRepos = array();

/**
 * Use Commons as a remote file repository. Essentially a wrapper, when this
 * is enabled $wgForeignFileRepos will point at Commons with a set of default
 * settings
 */
$wgUseInstantCommons = false;

/**
 * File backend structure configuration.
 * This is an array of file backend configuration arrays.
 * Each backend configuration has the following parameters:
 *  - 'name'        : A unique name for the backend
 *  - 'class'       : The file backend class to use
 *  - 'wikiId'      : A unique string that identifies the wiki (container prefix)
 *  - 'lockManager' : The name of a lock manager (see $wgLockManagers)
 *
 * Additional parameters are specific to the class used.
 */
$wgFileBackends = array();

/**
 * Array of configuration arrays for each lock manager.
 * Each backend configuration has the following parameters:
 *  - 'name'        : A unique name for the lock manager
 *  - 'class'       : The lock manger class to use
 * Additional parameters are specific to the class used.
 */
$wgLockManagers = array();

/**
 * Show EXIF data, on by default if available.
 * Requires PHP's EXIF extension: http://www.php.net/manual/en/ref.exif.php
 *
 * @note FOR WINDOWS USERS:
 * To enable EXIF functions, add the following lines to the "Windows
 * extensions" section of php.ini:
 * @code{.ini}
 * extension=extensions/php_mbstring.dll
 * extension=extensions/php_exif.dll
 * @endcode
 */
$wgShowEXIF = function_exists( 'exif_read_data' );

/**
 * If to automatically update the img_metadata field
 * if the metadata field is outdated but compatible with the current version.
 * Defaults to false.
 */
$wgUpdateCompatibleMetadata = false;

/**
 * If you operate multiple wikis, you can define a shared upload path here.
 * Uploads to this wiki will NOT be put there - they will be put into
 * $wgUploadDirectory.
 * If $wgUseSharedUploads is set, the wiki will look in the shared repository if
 * no file of the given name is found in the local repository (for [[File:..]],
 * [[Media:..]] links). Thumbnails will also be looked for and generated in this
 * directory.
 *
 * Note that these configuration settings can now be defined on a per-
 * repository basis for an arbitrary number of file repositories, using the
 * $wgForeignFileRepos variable.
 */
$wgUseSharedUploads = false;

/** Full path on the web server where shared uploads can be found */
$wgSharedUploadPath = "http://commons.wikimedia.org/shared/images";

/** Fetch commons image description pages and display them on the local wiki? */
$wgFetchCommonsDescriptions = false;

/** Path on the file system where shared uploads can be found. */
$wgSharedUploadDirectory = "/var/www/wiki3/images";

/** DB name with metadata about shared directory. Set this to false if the uploads do not come from a wiki. */
$wgSharedUploadDBname = false;

/** Optional table prefix used in database. */
$wgSharedUploadDBprefix = '';

/** Cache shared metadata in memcached. Don't do this if the commons wiki is in a different memcached domain */
$wgCacheSharedUploads = true;

/**
 * Allow for upload to be copied from an URL.
 * The timeout for copy uploads is set by $wgHTTPTimeout.
 * You have to assign the user right 'upload_by_url' to a user group, to use this.
 */
$wgAllowCopyUploads = false;

/**
 * Allow asynchronous copy uploads.
 * This feature is experimental and broken as of r81612.
 */
$wgAllowAsyncCopyUploads = false;

/**
 * A list of domains copy uploads can come from
 *
 * @since 1.20
 */
$wgCopyUploadsDomains = array();

/**
 * Enable copy uploads from Special:Upload. $wgAllowCopyUploads must also be
 * true. If $wgAllowCopyUploads is true, but this is false, you will only be
 * able to perform copy uploads from the API or extensions (e.g. UploadWizard).
 */
$wgCopyUploadsFromSpecialUpload = false;

/**
 * Proxy to use for copy upload requests.
 * @since 1.20
 */
$wgCopyUploadProxy = false;

/**
 * Max size for uploads, in bytes. If not set to an array, applies to all
 * uploads. If set to an array, per upload type maximums can be set, using the
 * file and url keys. If the * key is set this value will be used as maximum
 * for non-specified types.
 *
 * @par Example:
 * @code
 * $wgMaxUploadSize = array(
 *     '*' => 250 * 1024,
 *     'url' => 500 * 1024,
 * );
 * @endcode
 * Sets the maximum for all uploads to 250 kB except for upload-by-url, which
 * will have a maximum of 500 kB.
 *
 */
$wgMaxUploadSize = 1024*1024*100; # 100MB

/**
 * Point the upload navigation link to an external URL
 * Useful if you want to use a shared repository by default
 * without disabling local uploads (use $wgEnableUploads = false for that).
 *
 * @par Example:
 * @code
 * $wgUploadNavigationUrl = 'http://commons.wikimedia.org/wiki/Special:Upload';
 * @endcode
 */
$wgUploadNavigationUrl = false;

/**
 * Point the upload link for missing files to an external URL, as with
 * $wgUploadNavigationUrl. The URL will get "(?|&)wpDestFile=<filename>"
 * appended to it as appropriate.
 */
$wgUploadMissingFileUrl = false;

/**
 * Give a path here to use thumb.php for thumbnail generation on client
 * request, instead of generating them on render and outputting a static URL.
 * This is necessary if some of your apache servers don't have read/write
 * access to the thumbnail path.
 *
 * @par Example:
 * @code
 *   $wgThumbnailScriptPath = "{$wgScriptPath}/thumb{$wgScriptExtension}";
 * @endcode
 */
$wgThumbnailScriptPath = false;
/**
 * @see $wgThumbnailScriptPath
 */
$wgSharedThumbnailScriptPath = false;

/**
 * Set this to false if you do not want MediaWiki to divide your images
 * directory into many subdirectories, for improved performance.
 *
 * It's almost always good to leave this enabled. In previous versions of
 * MediaWiki, some users set this to false to allow images to be added to the
 * wiki by simply copying them into $wgUploadDirectory and then running
 * maintenance/rebuildImages.php to register them in the database. This is no
 * longer recommended, use maintenance/importImages.php instead.
 *
 * @note That this variable may be ignored if $wgLocalFileRepo is set.
 * @todo Deprecate the setting and ultimately remove it from Core.
 */
$wgHashedUploadDirectory = true;

/**
 * Set the following to false especially if you have a set of files that need to
 * be accessible by all wikis, and you do not want to use the hash (path/a/aa/)
 * directory layout.
 */
$wgHashedSharedUploadDirectory = true;

/**
 * Base URL for a repository wiki. Leave this blank if uploads are just stored
 * in a shared directory and not meant to be accessible through a separate wiki.
 * Otherwise the image description pages on the local wiki will link to the
 * image description page on this wiki.
 *
 * Please specify the namespace, as in the example below.
 */
$wgRepositoryBaseUrl = "http://commons.wikimedia.org/wiki/File:";

/**
 * This is the list of preferred extensions for uploading files. Uploading files
 * with extensions not in this list will trigger a warning.
 *
 * @warning If you add any OpenOffice or Microsoft Office file formats here,
 * such as odt or doc, and untrusted users are allowed to upload files, then
 * your wiki will be vulnerable to cross-site request forgery (CSRF).
 */
$wgFileExtensions = array( 'png', 'gif', 'jpg', 'jpeg' );

/**
 * Files with these extensions will never be allowed as uploads.
 * An array of file extensions to blacklist. You should append to this array
 * if you want to blacklist additional files.
 * */
$wgFileBlacklist = array(
	# HTML may contain cookie-stealing JavaScript and web bugs
	'html', 'htm', 'js', 'jsb', 'mhtml', 'mht', 'xhtml', 'xht',
	# PHP scripts may execute arbitrary code on the server
	'php', 'phtml', 'php3', 'php4', 'php5', 'phps',
	# Other types that may be interpreted by some servers
	'shtml', 'jhtml', 'pl', 'py', 'cgi',
	# May contain harmful executables for Windows victims
	'exe', 'scr', 'dll', 'msi', 'vbs', 'bat', 'com', 'pif', 'cmd', 'vxd', 'cpl' );

/**
 * Files with these mime types will never be allowed as uploads
 * if $wgVerifyMimeType is enabled.
 */
$wgMimeTypeBlacklist = array(
	# HTML may contain cookie-stealing JavaScript and web bugs
	'text/html', 'text/javascript', 'text/x-javascript',  'application/x-shellscript',
	# PHP scripts may execute arbitrary code on the server
	'application/x-php', 'text/x-php',
	# Other types that may be interpreted by some servers
	'text/x-python', 'text/x-perl', 'text/x-bash', 'text/x-sh', 'text/x-csh',
	# Client-side hazards on Internet Explorer
	'text/scriptlet', 'application/x-msdownload',
	# Windows metafile, client-side vulnerability on some systems
	'application/x-msmetafile',
);

/**
 * Allow Java archive uploads.
 * This is not recommended for public wikis since a maliciously-constructed
 * applet running on the same domain as the wiki can steal the user's cookies.
 */
$wgAllowJavaUploads = false;

/**
 * This is a flag to determine whether or not to check file extensions on upload.
 *
 * @warning Setting this to false is insecure for public wikis.
 */
$wgCheckFileExtensions = true;

/**
 * If this is turned off, users may override the warning for files not covered
 * by $wgFileExtensions.
 *
 * @warning Setting this to false is insecure for public wikis.
 */
$wgStrictFileExtensions = true;

/**
 * Setting this to true will disable the upload system's checks for HTML/JavaScript.
 *
 * @warning THIS IS VERY DANGEROUS on a publicly editable site, so USE
 * $wgGroupPermissions TO RESTRICT UPLOADING to only those that you trust
 */
$wgDisableUploadScriptChecks = false;

/**
 * Warn if uploaded files are larger than this (in bytes), or false to disable
 */
$wgUploadSizeWarning = false;

/**
 * list of trusted media-types and mime types.
 * Use the MEDIATYPE_xxx constants to represent media types.
 * This list is used by File::isSafeFile
 *
 * Types not listed here will have a warning about unsafe content
 * displayed on the images description page. It would also be possible
 * to use this for further restrictions, like disabling direct
 * [[media:...]] links for non-trusted formats.
 */
$wgTrustedMediaFormats = array(
	MEDIATYPE_BITMAP, //all bitmap formats
	MEDIATYPE_AUDIO,  //all audio formats
	MEDIATYPE_VIDEO,  //all plain video formats
	"image/svg+xml",  //svg (only needed if inline rendering of svg is not supported)
	"application/pdf",  //PDF files
	#"application/x-shockwave-flash", //flash/shockwave movie
);

/**
 * Plugins for media file type handling.
 * Each entry in the array maps a MIME type to a class name
 */
$wgMediaHandlers = array(
	'image/jpeg'     => 'JpegHandler',
	'image/png'      => 'PNGHandler',
	'image/gif'      => 'GIFHandler',
	'image/tiff'     => 'TiffHandler',
	'image/x-ms-bmp' => 'BmpHandler',
	'image/x-bmp'    => 'BmpHandler',
	'image/x-xcf'    => 'XCFHandler',
	'image/svg+xml'  => 'SvgHandler', // official
	'image/svg'      => 'SvgHandler', // compat
	'image/vnd.djvu' => 'DjVuHandler', // official
	'image/x.djvu'   => 'DjVuHandler', // compat
	'image/x-djvu'   => 'DjVuHandler', // compat
);

/**
 * Plugins for page content model handling.
 * Each entry in the array maps a model id to a class name.
 *
 * @since 1.21
 */
$wgContentHandlers = array(
	// the usual case
	CONTENT_MODEL_WIKITEXT => 'WikitextContentHandler',
	// dumb version, no syntax highlighting
	CONTENT_MODEL_JAVASCRIPT => 'JavaScriptContentHandler',
	// dumb version, no syntax highlighting
	CONTENT_MODEL_CSS => 'CssContentHandler',
	// plain text, for use by extensions etc
	CONTENT_MODEL_TEXT => 'TextContentHandler',
);

/**
 * Resizing can be done using PHP's internal image libraries or using
 * ImageMagick or another third-party converter, e.g. GraphicMagick.
 * These support more file formats than PHP, which only supports PNG,
 * GIF, JPG, XBM and WBMP.
 *
 * Use Image Magick instead of PHP builtin functions.
 */
$wgUseImageMagick = false;
/** The convert command shipped with ImageMagick */
$wgImageMagickConvertCommand = '/usr/bin/convert';
/** The identify command shipped with ImageMagick */
$wgImageMagickIdentifyCommand = '/usr/bin/identify';

/** Sharpening parameter to ImageMagick */
$wgSharpenParameter = '0x0.4';

/** Reduction in linear dimensions below which sharpening will be enabled */
$wgSharpenReductionThreshold = 0.85;

/**
 * Temporary directory used for ImageMagick. The directory must exist. Leave
 * this set to false to let ImageMagick decide for itself.
 */
$wgImageMagickTempDir = false;

/**
 * Use another resizing converter, e.g. GraphicMagick
 * %s will be replaced with the source path, %d with the destination
 * %w and %h will be replaced with the width and height.
 *
 * @par Example for GraphicMagick:
 * @code
 * $wgCustomConvertCommand = "gm convert %s -resize %wx%h %d"
 * @endcode
 *
 * Leave as false to skip this.
 */
$wgCustomConvertCommand = false;

/**
 * Some tests and extensions use exiv2 to manipulate the EXIF metadata in some
 * image formats.
 */
$wgExiv2Command = '/usr/bin/exiv2';

/**
 * Scalable Vector Graphics (SVG) may be uploaded as images.
 * Since SVG support is not yet standard in browsers, it is
 * necessary to rasterize SVGs to PNG as a fallback format.
 *
 * An external program is required to perform this conversion.
 * If set to an array, the first item is a PHP callable and any further items
 * are passed as parameters after $srcPath, $dstPath, $width, $height
 */
$wgSVGConverters = array(
	'ImageMagick' => '$path/convert -background white -thumbnail $widthx$height\! $input PNG:$output',
	'sodipodi' => '$path/sodipodi -z -w $width -f $input -e $output',
	'inkscape' => '$path/inkscape -z -w $width -f $input -e $output',
	'batik' => 'java -Djava.awt.headless=true -jar $path/batik-rasterizer.jar -w $width -d $output $input',
	'rsvg' => '$path/rsvg -w$width -h$height $input $output',
	'imgserv' => '$path/imgserv-wrapper -i svg -o png -w$width $input $output',
	'ImagickExt' => array( 'SvgHandler::rasterizeImagickExt' ),
	);

/** Pick a converter defined in $wgSVGConverters */
$wgSVGConverter = 'ImageMagick';

/** If not in the executable PATH, specify the SVG converter path. */
$wgSVGConverterPath = '';

/** Don't scale a SVG larger than this */
$wgSVGMaxSize = 2048;

/** Don't read SVG metadata beyond this point.
 * Default is 1024*256 bytes
 */
$wgSVGMetadataCutoff = 262144;

/**
 * Disallow <title> element in SVG files.
 *
 * MediaWiki will reject HTMLesque tags in uploaded files due to idiotic
 * browsers which can not perform basic stuff like MIME detection and which are
 * vulnerable to further idiots uploading crap files as images.
 *
 * When this directive is on, "<title>" will be allowed in files with an
 * "image/svg+xml" MIME type. You should leave this disabled if your web server
 * is misconfigured and doesn't send appropriate MIME types for SVG images.
 */
$wgAllowTitlesInSVG = false;

/**
 * The maximum number of pixels a source image can have if it is to be scaled
 * down by a scaler that requires the full source image to be decompressed
 * and stored in decompressed form, before the thumbnail is generated.
 *
 * This provides a limit on memory usage for the decompression side of the
 * image scaler. The limit is used when scaling PNGs with any of the
 * built-in image scalers, such as ImageMagick or GD. It is ignored for
 * JPEGs with ImageMagick, and when using the VipsScaler extension.
 *
 * The default is 50 MB if decompressed to RGBA form, which corresponds to
 * 12.5 million pixels or 3500x3500.
 */
$wgMaxImageArea = 1.25e7;
/**
 * Force thumbnailing of animated GIFs above this size to a single
 * frame instead of an animated thumbnail.  As of MW 1.17 this limit
 * is checked against the total size of all frames in the animation.
 * It probably makes sense to keep this equal to $wgMaxImageArea.
 */
$wgMaxAnimatedGifArea = 1.25e7;
/**
 * Browsers don't support TIFF inline generally...
 * For inline display, we need to convert to PNG or JPEG.
 * Note scaling should work with ImageMagick, but may not with GD scaling.
 *
 * @par Example:
 * @code
 *  // PNG is lossless, but inefficient for photos
 *  $wgTiffThumbnailType = array( 'png', 'image/png' );
 *  // JPEG is good for photos, but has no transparency support. Bad for diagrams.
 *  $wgTiffThumbnailType = array( 'jpg', 'image/jpeg' );
 * @endcode
 */
 $wgTiffThumbnailType = false;

/**
 * If rendered thumbnail files are older than this timestamp, they
 * will be rerendered on demand as if the file didn't already exist.
 * Update if there is some need to force thumbs and SVG rasterizations
 * to rerender, such as fixes to rendering bugs.
 */
$wgThumbnailEpoch = '20030516000000';

/**
 * If set, inline scaled images will still produce "<img>" tags ready for
 * output instead of showing an error message.
 *
 * This may be useful if errors are transitory, especially if the site
 * is configured to automatically render thumbnails on request.
 *
 * On the other hand, it may obscure error conditions from debugging.
 * Enable the debug log or the 'thumbnail' log group to make sure errors
 * are logged to a file for review.
 */
$wgIgnoreImageErrors = false;

/**
 * Allow thumbnail rendering on page view. If this is false, a valid
 * thumbnail URL is still output, but no file will be created at
 * the target location. This may save some time if you have a
 * thumb.php or 404 handler set up which is faster than the regular
 * webserver(s).
 */
$wgGenerateThumbnailOnParse = true;

/**
* Show thumbnails for old images on the image description page
*/
$wgShowArchiveThumbnails = true;

/** Obsolete, always true, kept for compatibility with extensions */
$wgUseImageResize = true;

/**
 * If set to true, images that contain certain the exif orientation tag will
 * be rotated accordingly. If set to null, try to auto-detect whether a scaler
 * is available that can rotate.
 */
$wgEnableAutoRotation = null;

/**
 * Internal name of virus scanner. This servers as a key to the
 * $wgAntivirusSetup array. Set this to NULL to disable virus scanning. If not
 * null, every file uploaded will be scanned for viruses.
 */
$wgAntivirus = null;

/**
 * Configuration for different virus scanners. This an associative array of
 * associative arrays. It contains one setup array per known scanner type.
 * The entry is selected by $wgAntivirus, i.e.
 * valid values for $wgAntivirus are the keys defined in this array.
 *
 * The configuration array for each scanner contains the following keys:
 * "command", "codemap", "messagepattern":
 *
 * "command" is the full command to call the virus scanner - %f will be
 * replaced with the name of the file to scan. If not present, the filename
 * will be appended to the command. Note that this must be overwritten if the
 * scanner is not in the system path; in that case, plase set
 * $wgAntivirusSetup[$wgAntivirus]['command'] to the desired command with full
 * path.
 *
 * "codemap" is a mapping of exit code to return codes of the detectVirus
 * function in SpecialUpload.
 *   - An exit code mapped to AV_SCAN_FAILED causes the function to consider
 *     the scan to be failed. This will pass the file if $wgAntivirusRequired
 *     is not set.
 *   - An exit code mapped to AV_SCAN_ABORTED causes the function to consider
 *     the file to have an usupported format, which is probably imune to
 *     virusses. This causes the file to pass.
 *   - An exit code mapped to AV_NO_VIRUS will cause the file to pass, meaning
 *     no virus was found.
 *   - All other codes (like AV_VIRUS_FOUND) will cause the function to report
 *     a virus.
 *   - You may use "*" as a key in the array to catch all exit codes not mapped otherwise.
 *
 * "messagepattern" is a perl regular expression to extract the meaningful part of the scanners
 * output. The relevant part should be matched as group one (\1).
 * If not defined or the pattern does not match, the full message is shown to the user.
 */
$wgAntivirusSetup = array(

	#setup for clamav
	'clamav' => array (
		'command' => "clamscan --no-summary ",

		'codemap' => array (
			"0" =>  AV_NO_VIRUS, # no virus
			"1" =>  AV_VIRUS_FOUND, # virus found
			"52" => AV_SCAN_ABORTED, # unsupported file format (probably imune)
			"*" =>  AV_SCAN_FAILED, # else scan failed
		),

		'messagepattern' => '/.*?:(.*)/sim',
	),
);


/** Determines if a failed virus scan (AV_SCAN_FAILED) will cause the file to be rejected. */
$wgAntivirusRequired = true;

/** Determines if the mime type of uploaded files should be checked */
$wgVerifyMimeType = true;

/** Sets the mime type definition file to use by MimeMagic.php. */
$wgMimeTypeFile = "includes/mime.types";
#$wgMimeTypeFile= "/etc/mime.types";
#$wgMimeTypeFile= null; #use built-in defaults only.

/** Sets the mime type info file to use by MimeMagic.php. */
$wgMimeInfoFile= "includes/mime.info";
#$wgMimeInfoFile= null; #use built-in defaults only.

/**
 * Switch for loading the FileInfo extension by PECL at runtime.
 * This should be used only if fileinfo is installed as a shared object
 * or a dynamic library.
 */
$wgLoadFileinfoExtension = false;

/** Sets an external mime detector program. The command must print only
 * the mime type to standard output.
 * The name of the file to process will be appended to the command given here.
 * If not set or NULL, mime_content_type will be used if available.
 *
 * @par Example:
 * @code
 * #$wgMimeDetectorCommand = "file -bi"; # use external mime detector (Linux)
 * @endcode
 */
$wgMimeDetectorCommand = null;

/**
 * Switch for trivial mime detection. Used by thumb.php to disable all fancy
 * things, because only a few types of images are needed and file extensions
 * can be trusted.
 */
$wgTrivialMimeDetection = false;

/**
 * Additional XML types we can allow via mime-detection.
 * array = ( 'rootElement' => 'associatedMimeType' )
 */
$wgXMLMimeTypes = array(
	'http://www.w3.org/2000/svg:svg'               => 'image/svg+xml',
	'svg'                                          => 'image/svg+xml',
	'http://www.lysator.liu.se/~alla/dia/:diagram' => 'application/x-dia-diagram',
	'http://www.w3.org/1999/xhtml:html'            => 'text/html', // application/xhtml+xml?
	'html'                                         => 'text/html', // application/xhtml+xml?
);

/**
 * Limit images on image description pages to a user-selectable limit. In order
 * to reduce disk usage, limits can only be selected from a list.
 * The user preference is saved as an array offset in the database, by default
 * the offset is set with $wgDefaultUserOptions['imagesize']. Make sure you
 * change it if you alter the array (see bug 8858).
 * This is the list of settings the user can choose from:
 */
$wgImageLimits = array(
	array( 320, 240 ),
	array( 640, 480 ),
	array( 800, 600 ),
	array( 1024, 768 ),
	array( 1280, 1024 )
);

/**
 * Adjust thumbnails on image pages according to a user setting. In order to
 * reduce disk usage, the values can only be selected from a list. This is the
 * list of settings the user can choose from:
 */
$wgThumbLimits = array(
	120,
	150,
	180,
	200,
	250,
	300
);

/**
 * Default parameters for the "<gallery>" tag
 */
$wgGalleryOptions = array (
	'imagesPerRow' => 0, // Default number of images per-row in the gallery. 0 -> Adapt to screensize
	'imageWidth' => 120, // Width of the cells containing images in galleries (in "px")
	'imageHeight' => 120, // Height of the cells containing images in galleries (in "px")
	'captionLength' => 25, // Length of caption to truncate (in characters)
	'showBytes' => true, // Show the filesize in bytes in categories
);

/**
 * Adjust width of upright images when parameter 'upright' is used
 * This allows a nicer look for upright images without the need to fix the width
 * by hardcoded px in wiki sourcecode.
 */
$wgThumbUpright = 0.75;

/**
 * Default value for chmoding of new directories.
 */
$wgDirectoryMode = 0777;

/**
 * Generate and use thumbnails suitable for screens with 1.5 and 2.0 pixel densities.
 *
 * This means a 320x240 use of an image on the wiki will also generate 480x360 and 640x480
 * thumbnails, output via data-src-1-5 and data-src-2-0. Runtime JavaScript switches the
 * images in after loading the original low-resolution versions depending on the reported
 * window.devicePixelRatio.
 */
$wgResponsiveImages = true;

/**
 * @name DJVU settings
 * @{
 */
/**
 * Path of the djvudump executable
 * Enable this and $wgDjvuRenderer to enable djvu rendering
 */
# $wgDjvuDump = 'djvudump';
$wgDjvuDump = null;

/**
 * Path of the ddjvu DJVU renderer
 * Enable this and $wgDjvuDump to enable djvu rendering
 */
# $wgDjvuRenderer = 'ddjvu';
$wgDjvuRenderer = null;

/**
 * Path of the djvutxt DJVU text extraction utility
 * Enable this and $wgDjvuDump to enable text layer extraction from djvu files
 */
# $wgDjvuTxt = 'djvutxt';
$wgDjvuTxt = null;

/**
 * Path of the djvutoxml executable
 * This works like djvudump except much, much slower as of version 3.5.
 *
 * For now we  recommend you use djvudump instead. The djvuxml output is
 * probably more stable, so we'll switch back to it as soon as they fix
 * the efficiency problem.
 * http://sourceforge.net/tracker/index.php?func=detail&aid=1704049&group_id=32953&atid=406583
 *
 * @par Example:
 * @code
 * $wgDjvuToXML = 'djvutoxml';
 * @endcode
 */
$wgDjvuToXML = null;

/**
 * Shell command for the DJVU post processor
 * Default: pnmtopng, since ddjvu generates ppm output
 * Set this to false to output the ppm file directly.
 */
$wgDjvuPostProcessor = 'pnmtojpeg';
/**
 * File extension for the DJVU post processor output
 */
$wgDjvuOutputExtension = 'jpg';
/** @} */ # end of DJvu }

/** @} */ # end of file uploads }

/************************************************************************//**
 * @name   Email settings
 * @{
 */

$serverName = substr( $wgServer, strrpos( $wgServer, '/' ) + 1 );

/**
 * Site admin email address.
 */
$wgEmergencyContact = 'wikiadmin@' . $serverName;

/**
 * Password reminder email address.
 *
 * The address we should use as sender when a user is requesting his password.
 */
$wgPasswordSender = 'apache@' . $serverName;

unset( $serverName ); # Don't leak local variables to global scope

/**
 * Password reminder name
 */
$wgPasswordSenderName = 'MediaWiki Mail';

/**
 * Dummy address which should be accepted during mail send action.
 * It might be necessary to adapt the address or to set it equal
 * to the $wgEmergencyContact address.
 */
$wgNoReplyAddress = 'reply@not.possible';

/**
 * Set to true to enable the e-mail basic features:
 * Password reminders, etc. If sending e-mail on your
 * server doesn't work, you might want to disable this.
 */
$wgEnableEmail = true;

/**
 * Set to true to enable user-to-user e-mail.
 * This can potentially be abused, as it's hard to track.
 */
$wgEnableUserEmail = true;

/**
 * Set to true to put the sending user's email in a Reply-To header
 * instead of From. ($wgEmergencyContact will be used as From.)
 *
 * Some mailers (eg sSMTP) set the SMTP envelope sender to the From value,
 * which can cause problems with SPF validation and leak recipient addressses
 * when bounces are sent to the sender.
 */
$wgUserEmailUseReplyTo = false;

/**
 * Minimum time, in hours, which must elapse between password reminder
 * emails for a given account. This is to prevent abuse by mail flooding.
 */
$wgPasswordReminderResendTime = 24;

/**
 * The time, in seconds, when an emailed temporary password expires.
 */
$wgNewPasswordExpiry = 3600 * 24 * 7;

/**
 * The time, in seconds, when an email confirmation email expires
 */
$wgUserEmailConfirmationTokenExpiry = 7 * 24 * 60 * 60;

/**
 * SMTP Mode.
 *
 * For using a direct (authenticated) SMTP server connection.
 * Default to false or fill an array :
 *
 * @code
 * $wgSMTP = array(
 * 	'host'     => 'SMTP domain',
 * 	'IDHost'   => 'domain for MessageID',
 * 	'port'     => '25',
 * 	'auth'     => [true|false],
 * 	'username' => [SMTP username],
 * 	'password' => [SMTP password],
 * );
 * @endcode
 */
$wgSMTP = false;

/**
 * Additional email parameters, will be passed as the last argument to mail() call.
 * If using safe_mode this has no effect
 */
$wgAdditionalMailParams = null;

/**
 * True: from page editor if s/he opted-in. False: Enotif mails appear to come
 * from $wgEmergencyContact
 */
$wgEnotifFromEditor = false;

// TODO move UPO to preferences probably ?
# If set to true, users get a corresponding option in their preferences and can choose to enable or disable at their discretion
# If set to false, the corresponding input form on the user preference page is suppressed
# It call this to be a "user-preferences-option (UPO)"

/**
 * Require email authentication before sending mail to an email address.
 * This is highly recommended. It prevents MediaWiki from being used as an open
 * spam relay.
 */
$wgEmailAuthentication = true;

/**
 * Allow users to enable email notification ("enotif") on watchlist changes.
 */
$wgEnotifWatchlist = false;

/**
 * Allow users to enable email notification ("enotif") when someone edits their
 * user talk page.
 */
$wgEnotifUserTalk = false;

/**
 * Set the Reply-to address in notifications to the editor's address, if user
 * allowed this in the preferences.
 */
$wgEnotifRevealEditorAddress = false;

/**
 * Send notification mails on minor edits to watchlist pages. This is enabled
 * by default. Does not affect user talk notifications.
 */
$wgEnotifMinorEdits = true;

/**
 * Send a generic mail instead of a personalised mail for each user.  This
 * always uses UTC as the time zone, and doesn't include the username.
 *
 * For pages with many users watching, this can significantly reduce mail load.
 * Has no effect when using sendmail rather than SMTP.
 */
$wgEnotifImpersonal = false;

/**
 * Maximum number of users to mail at once when using impersonal mail. Should
 * match the limit on your mail server.
 */
$wgEnotifMaxRecips = 500;

/**
 * Send mails via the job queue. This can be useful to reduce the time it
 * takes to save a page that a lot of people are watching.
 */
$wgEnotifUseJobQ = false;

/**
 * Use real name instead of username in e-mail "from" field.
 */
$wgEnotifUseRealName = false;

/**
 * Array of usernames who will be sent a notification email for every change
 * which occurs on a wiki. Users will not be notified of their own changes.
 */
$wgUsersNotifiedOnAllChanges = array();


/** @} */ # end of email settings

/************************************************************************//**
 * @name   Database settings
 * @{
 */
/** Database host name or IP address */
$wgDBserver = 'localhost';
/** Database port number (for PostgreSQL) */
$wgDBport = 5432;
/** Name of the database */
$wgDBname = 'my_wiki';
/** Database username */
$wgDBuser = 'wikiuser';
/** Database user's password */
$wgDBpassword = '';
/** Database type */
$wgDBtype = 'mysql';
/** Whether to use SSL in DB connection. */
$wgDBssl = false;
/** Whether to use compression in DB connection. */
$wgDBcompress = false;

/** Separate username for maintenance tasks. Leave as null to use the default. */
$wgDBadminuser = null;
/** Separate password for maintenance tasks. Leave as null to use the default. */
$wgDBadminpassword = null;

/**
 * Search type.
 * Leave as null to select the default search engine for the
 * selected database type (eg SearchMySQL), or set to a class
 * name to override to a custom search engine.
 */
$wgSearchType = null;

/** Table name prefix */
$wgDBprefix = '';
/** MySQL table options to use during installation or update */
$wgDBTableOptions = 'ENGINE=InnoDB';

/**
 * SQL Mode - default is turning off all modes, including strict, if set.
 * null can be used to skip the setting for performance reasons and assume
 * DBA has done his best job.
 * String override can be used for some additional fun :-)
 */
$wgSQLMode = '';

/** Mediawiki schema */
$wgDBmwschema = 'mediawiki';

/** To override default SQLite data directory ($docroot/../data) */
$wgSQLiteDataDir = '';

/**
 * Make all database connections secretly go to localhost. Fool the load balancer
 * thinking there is an arbitrarily large cluster of servers to connect to.
 * Useful for debugging.
 */
$wgAllDBsAreLocalhost = false;

/**
 * Shared database for multiple wikis. Commonly used for storing a user table
 * for single sign-on. The server for this database must be the same as for the
 * main database.
 *
 * For backwards compatibility the shared prefix is set to the same as the local
 * prefix, and the user table is listed in the default list of shared tables.
 * The user_properties table is also added so that users will continue to have their
 * preferences shared (preferences were stored in the user table prior to 1.16)
 *
 * $wgSharedTables may be customized with a list of tables to share in the shared
 * datbase. However it is advised to limit what tables you do share as many of
 * MediaWiki's tables may have side effects if you try to share them.
 *
 * $wgSharedPrefix is the table prefix for the shared database. It defaults to
 * $wgDBprefix.
 *
 * @deprecated In new code, use the $wiki parameter to wfGetLB() to access
 *   remote databases. Using wfGetLB() allows the shared database to reside on
 *   separate servers to the wiki's own database, with suitable configuration
 *   of $wgLBFactoryConf.
 */
$wgSharedDB = null;

/** @see $wgSharedDB */
$wgSharedPrefix = false;
/** @see $wgSharedDB */
$wgSharedTables = array( 'user', 'user_properties' );

/**
 * Database load balancer
 * This is a two-dimensional array, an array of server info structures
 * Fields are:
 *   - host:        Host name
 *   - dbname:      Default database name
 *   - user:        DB user
 *   - password:    DB password
 *   - type:        "mysql" or "postgres"
 *   - load:        ratio of DB_SLAVE load, must be >=0, the sum of all loads must be >0
 *   - groupLoads:  array of load ratios, the key is the query group name. A query may belong
 *                  to several groups, the most specific group defined here is used.
 *
 *   - flags:       bit field
 *                  - DBO_DEFAULT -- turns on DBO_TRX only if !$wgCommandLineMode (recommended)
 *                  - DBO_DEBUG -- equivalent of $wgDebugDumpSql
 *                  - DBO_TRX -- wrap entire request in a transaction
 *                  - DBO_IGNORE -- ignore errors (not useful in LocalSettings.php)
 *                  - DBO_NOBUFFER -- turn off buffering (not useful in LocalSettings.php)
 *                  - DBO_PERSISTENT -- enables persistent database connections
 *                  - DBO_SSL -- uses SSL/TLS encryption in database connections, if available
 *                  - DBO_COMPRESS -- uses internal compression in database connections, if available
 *
 *   - max lag:     (optional) Maximum replication lag before a slave will taken out of rotation
 *   - max threads: (optional) Maximum number of running threads
 *
 *   These and any other user-defined properties will be assigned to the mLBInfo member
 *   variable of the Database object.
 *
 * Leave at false to use the single-server variables above. If you set this
 * variable, the single-server variables will generally be ignored (except
 * perhaps in some command-line scripts).
 *
 * The first server listed in this array (with key 0) will be the master. The
 * rest of the servers will be slaves. To prevent writes to your slaves due to
 * accidental misconfiguration or MediaWiki bugs, set read_only=1 on all your
 * slaves in my.cnf. You can set read_only mode at runtime using:
 *
 * @code
 *     SET @@read_only=1;
 * @endcode
 *
 * Since the effect of writing to a slave is so damaging and difficult to clean
 * up, we at Wikimedia set read_only=1 in my.cnf on all our DB servers, even
 * our masters, and then set read_only=0 on masters at runtime.
 */
$wgDBservers = false;

/**
 * Load balancer factory configuration
 * To set up a multi-master wiki farm, set the class here to something that
 * can return a LoadBalancer with an appropriate master on a call to getMainLB().
 * The class identified here is responsible for reading $wgDBservers,
 * $wgDBserver, etc., so overriding it may cause those globals to be ignored.
 *
 * The LBFactory_Multi class is provided for this purpose, please see
 * includes/db/LBFactory_Multi.php for configuration information.
 */
$wgLBFactoryConf = array( 'class' => 'LBFactory_Simple' );

/** How long to wait for a slave to catch up to the master */
$wgMasterWaitTimeout = 10;

/** File to log database errors to */
$wgDBerrorLog = false;

/**
 * Timezone to use in the error log.
 * Defaults to the wiki timezone ($wgLocaltimezone).
 *
 * A list of useable timezones can found at:
 * http://php.net/manual/en/timezones.php
 *
 * @par Examples:
 * @code
 * $wgLocaltimezone = 'UTC';
 * $wgLocaltimezone = 'GMT';
 * $wgLocaltimezone = 'PST8PDT';
 * $wgLocaltimezone = 'Europe/Sweden';
 * $wgLocaltimezone = 'CET';
 * @endcode
 *
 * @since 1.20
 */
$wgDBerrorLogTZ = false;

/** When to give an error message */
$wgDBClusterTimeout = 10;

/**
 * Scale load balancer polling time so that under overload conditions, the
 * database server receives a SHOW STATUS query at an average interval of this
 * many microseconds
 */
$wgDBAvgStatusPoll = 2000;

/**
 * Set to true to engage MySQL 4.1/5.0 charset-related features;
 * for now will just cause sending of 'SET NAMES=utf8' on connect.
 *
 * @warning THIS IS EXPERIMENTAL!
 *
 * May break if you're not using the table defs from mysql5/tables.sql.
 * May break if you're upgrading an existing wiki if set differently.
 * Broken symptoms likely to include incorrect behavior with page titles,
 * usernames, comments etc containing non-ASCII characters.
 * Might also cause failures on the object cache and other things.
 *
 * Even correct usage may cause failures with Unicode supplementary
 * characters (those not in the Basic Multilingual Plane) unless MySQL
 * has enhanced their Unicode support.
 */
$wgDBmysql5 = false;

/**
 * Other wikis on this site, can be administered from a single developer
 * account.
 * Array numeric key => database name
 */
$wgLocalDatabases = array();

/**
 * If lag is higher than $wgSlaveLagWarning, show a warning in some special
 * pages (like watchlist).  If the lag is higher than $wgSlaveLagCritical,
 * show a more obvious warning.
 */
$wgSlaveLagWarning = 10;
/** @see $wgSlaveLagWarning */
$wgSlaveLagCritical = 30;

/**
 * Use old names for change_tags indices.
 */
$wgOldChangeTagsIndex = false;

/**@}*/ # End of DB settings }


/************************************************************************//**
 * @name   Text storage
 * @{
 */

/**
 * We can also compress text stored in the 'text' table. If this is set on, new
 * revisions will be compressed on page save if zlib support is available. Any
 * compressed revisions will be decompressed on load regardless of this setting
 * *but will not be readable at all* if zlib support is not available.
 */
$wgCompressRevisions = false;

/**
 * External stores allow including content
 * from non database sources following URL links.
 *
 * Short names of ExternalStore classes may be specified in an array here:
 * @code
 * $wgExternalStores = array("http","file","custom")...
 * @endcode
 *
 * CAUTION: Access to database might lead to code execution
 */
$wgExternalStores = false;

/**
 * An array of external MySQL servers.
 *
 * @par Example:
 * Create a cluster named 'cluster1' containing three servers:
 * @code
 * $wgExternalServers = array(
 * 	'cluster1' => array( 'srv28', 'srv29', 'srv30' )
 * );
 * @endcode
 *
 * Used by LBFactory_Simple, may be ignored if $wgLBFactoryConf is set to
 * another class.
 */
$wgExternalServers = array();

/**
 * The place to put new revisions, false to put them in the local text table.
 * Part of a URL, e.g. DB://cluster1
 *
 * Can be an array instead of a single string, to enable data distribution. Keys
 * must be consecutive integers, starting at zero.
 *
 * @par Example:
 * @code
 * $wgDefaultExternalStore = array( 'DB://cluster1', 'DB://cluster2' );
 * @endcode
 *
 * @var array
 */
$wgDefaultExternalStore = false;

/**
 * Revision text may be cached in $wgMemc to reduce load on external storage
 * servers and object extraction overhead for frequently-loaded revisions.
 *
 * Set to 0 to disable, or number of seconds before cache expiry.
 */
$wgRevisionCacheExpiry = 0;

/** @} */ # end text storage }

/************************************************************************//**
 * @name   Performance hacks and limits
 * @{
 */
/** Disable database-intensive features */
$wgMiserMode = false;
/** Disable all query pages if miser mode is on, not just some */
$wgDisableQueryPages = false;
/** Number of rows to cache in 'querycache' table when miser mode is on */
$wgQueryCacheLimit = 1000;
/** Number of links to a page required before it is deemed "wanted" */
$wgWantedPagesThreshold = 1;
/** Enable slow parser functions */
$wgAllowSlowParserFunctions = false;
/** Allow schema updates */
$wgAllowSchemaUpdates = true;

/**
 * Do DELETE/INSERT for link updates instead of incremental
 */
$wgUseDumbLinkUpdate = false;

/**
 * Anti-lock flags - bitfield
 *   - ALF_NO_LINK_LOCK:
 *       Don't use locking reads when updating the link table. This is
 *       necessary for wikis with a high edit rate for performance
 *       reasons, but may cause link table inconsistency
 */
$wgAntiLockFlags = 0;

/**
 * Maximum article size in kilobytes
 */
$wgMaxArticleSize = 2048;

/**
 * The minimum amount of memory that MediaWiki "needs"; MediaWiki will try to
 * raise PHP's memory limit if it's below this amount.
 */
$wgMemoryLimit = "50M";

/** @} */ # end performance hacks }

/************************************************************************//**
 * @name   Cache settings
 * @{
 */

/**
 * Directory for caching data in the local filesystem. Should not be accessible
 * from the web. Set this to false to not use any local caches.
 *
 * Note: if multiple wikis share the same localisation cache directory, they
 * must all have the same set of extensions. You can set a directory just for
 * the localisation cache using $wgLocalisationCacheConf['storeDirectory'].
 */
$wgCacheDirectory = false;

/**
 * Main cache type. This should be a cache with fast access, but it may have
 * limited space. By default, it is disabled, since the database is not fast
 * enough to make it worthwhile.
 *
 * The options are:
 *
 *   - CACHE_ANYTHING:   Use anything, as long as it works
 *   - CACHE_NONE:       Do not cache
 *   - CACHE_DB:         Store cache objects in the DB
 *   - CACHE_MEMCACHED:  MemCached, must specify servers in $wgMemCachedServers
 *   - CACHE_ACCEL:      APC, XCache or WinCache
 *   - CACHE_DBA:        Use PHP's DBA extension to store in a DBM-style
 *                       database. This is slow, and is not recommended for
 *                       anything other than debugging.
 *   - (other):          A string may be used which identifies a cache
 *                       configuration in $wgObjectCaches.
 *
 * @see $wgMessageCacheType, $wgParserCacheType
 */
$wgMainCacheType = CACHE_NONE;

/**
 * The cache type for storing the contents of the MediaWiki namespace. This
 * cache is used for a small amount of data which is expensive to regenerate.
 *
 * For available types see $wgMainCacheType.
 */
$wgMessageCacheType = CACHE_ANYTHING;

/**
 * The cache type for storing article HTML. This is used to store data which
 * is expensive to regenerate, and benefits from having plenty of storage space.
 *
 * For available types see $wgMainCacheType.
 */
$wgParserCacheType = CACHE_ANYTHING;

/**
 * The cache type for storing session data. Used if $wgSessionsInObjectCache is true.
 *
 * For available types see $wgMainCacheType.
 */
$wgSessionCacheType = CACHE_ANYTHING;

/**
 * The cache type for storing language conversion tables,
 * which are used when parsing certain text and interface messages.
 *
 * For available types see $wgMainCacheType.
 *
 * @since 1.20
 */
$wgLanguageConverterCacheType = CACHE_ANYTHING;

/**
 * Advanced object cache configuration.
 *
 * Use this to define the class names and constructor parameters which are used
 * for the various cache types. Custom cache types may be defined here and
 * referenced from $wgMainCacheType, $wgMessageCacheType, $wgParserCacheType,
 * or $wgLanguageConverterCacheType.
 *
 * The format is an associative array where the key is a cache identifier, and
 * the value is an associative array of parameters. The "class" parameter is the
 * class name which will be used. Alternatively, a "factory" parameter may be
 * given, giving a callable function which will generate a suitable cache object.
 *
 * The other parameters are dependent on the class used.
 * - CACHE_DBA uses $wgTmpDirectory by default. The 'dir' parameter let you
 *   overrides that.
 */
$wgObjectCaches = array(
	CACHE_NONE => array( 'class' => 'EmptyBagOStuff' ),
	CACHE_DB => array( 'class' => 'SqlBagOStuff', 'table' => 'objectcache' ),
	CACHE_DBA => array( 'class' => 'DBABagOStuff' ),

	CACHE_ANYTHING => array( 'factory' => 'ObjectCache::newAnything' ),
	CACHE_ACCEL => array( 'factory' => 'ObjectCache::newAccelerator' ),
	CACHE_MEMCACHED => array( 'factory' => 'ObjectCache::newMemcached' ),

	'apc' => array( 'class' => 'APCBagOStuff' ),
	'xcache' => array( 'class' => 'XCacheBagOStuff' ),
	'wincache' => array( 'class' => 'WinCacheBagOStuff' ),
	'memcached-php' => array( 'class' => 'MemcachedPhpBagOStuff' ),
	'memcached-pecl' => array( 'class' => 'MemcachedPeclBagOStuff' ),
	'hash' => array( 'class' => 'HashBagOStuff' ),
);

/**
 * The expiry time for the parser cache, in seconds.
 * The default is 86400 (one day).
 */
$wgParserCacheExpireTime = 86400;

/**
 * Select which DBA handler <http://www.php.net/manual/en/dba.requirements.php>
 * to use as CACHE_DBA backend.
 */
$wgDBAhandler = 'db3';

/**
 * Deprecated alias for $wgSessionsInObjectCache.
 *
 * @deprecated since 1.20; Use $wgSessionsInObjectCache
 */
$wgSessionsInMemcached = false;

/**
 * Store sessions in an object cache, configured by $wgSessionCacheType. This
 * can be useful to improve performance, or to avoid the locking behaviour of
 * PHP's default session handler, which tends to prevent multiple requests for
 * the same user from acting concurrently.
 */
$wgSessionsInObjectCache = false;

/**
 * The expiry time to use for session storage when $wgSessionsInObjectCache is
 * enabled, in seconds.
 */
$wgObjectCacheSessionExpiry = 3600;

/**
 * This is used for setting php's session.save_handler. In practice, you will
 * almost never need to change this ever. Other options might be 'user' or
 * 'session_mysql.' Setting to null skips setting this entirely (which might be
 * useful if you're doing cross-application sessions, see bug 11381)
 */
$wgSessionHandler = null;

/** If enabled, will send MemCached debugging information to $wgDebugLogFile */
$wgMemCachedDebug = false;

/** The list of MemCached servers and port numbers */
$wgMemCachedServers = array( '127.0.0.1:11000' );

/**
 * Use persistent connections to MemCached, which are shared across multiple
 * requests.
 */
$wgMemCachedPersistent = false;

/**
 * Read/write timeout for MemCached server communication, in microseconds.
 */
$wgMemCachedTimeout = 500000;

/**
 * Set this to true to make a local copy of the message cache, for use in
 * addition to memcached. The files will be put in $wgCacheDirectory.
 */
$wgUseLocalMessageCache = false;

/**
 * Defines format of local cache.
 *  - true: Serialized object
 *  - false: PHP source file (Warning - security risk)
 */
$wgLocalMessageCacheSerialized = true;

/**
 * Instead of caching everything, only cache those messages which have
 * been customised in the site content language. This means that
 * MediaWiki:Foo/ja is ignored if MediaWiki:Foo doesn't exist.
 * This option is probably only useful for translatewiki.net.
 */
$wgAdaptiveMessageCache = false;

/**
 * Localisation cache configuration. Associative array with keys:
 * class:       The class to use. May be overridden by extensions.
 *
 * store:       The location to store cache data. May be 'files', 'db' or
 *              'detect'. If set to "files", data will be in CDB files. If set
 *              to "db", data will be stored to the database. If set to
 *              "detect", files will be used if $wgCacheDirectory is set,
 *              otherwise the database will be used.
 *
 * storeClass:  The class name for the underlying storage. If set to a class
 *              name, it overrides the "store" setting.
 *
 * storeDirectory:  If the store class puts its data in files, this is the
 *                  directory it will use. If this is false, $wgCacheDirectory
 *                  will be used.
 *
 * manualRecache:   Set this to true to disable cache updates on web requests.
 *                  Use maintenance/rebuildLocalisationCache.php instead.
 */
$wgLocalisationCacheConf = array(
	'class' => 'LocalisationCache',
	'store' => 'detect',
	'storeClass' => false,
	'storeDirectory' => false,
	'manualRecache' => false,
);

/** Allow client-side caching of pages */
$wgCachePages = true;

/**
 * Set this to current time to invalidate all prior cached pages. Affects both
 * client-side and server-side caching.
 * You can get the current date on your server by using the command:
 * @verbatim
 *   date +%Y%m%d%H%M%S
 * @endverbatim
 */
$wgCacheEpoch = '20030516000000';

/**
 * Bump this number when changing the global style sheets and JavaScript.
 *
 * It should be appended in the query string of static CSS and JS includes,
 * to ensure that client-side caches do not keep obsolete copies of global
 * styles.
 */
$wgStyleVersion = '303';

/**
 * This will cache static pages for non-logged-in users to reduce
 * database traffic on public sites.
 * Must set $wgShowIPinHeader = false
 * ResourceLoader requests to default language and skins are cached
 * as well as single module requests.
 */
$wgUseFileCache = false;

/**
 * Depth of the subdirectory hierarchy to be created under
 * $wgFileCacheDirectory.  The subdirectories will be named based on
 * the MD5 hash of the title.  A value of 0 means all cache files will
 * be put directly into the main file cache directory.
 */
$wgFileCacheDepth = 2;

/**
 * Keep parsed pages in a cache (objectcache table or memcached)
 * to speed up output of the same page viewed by another user with the
 * same options.
 *
 * This can provide a significant speedup for medium to large pages,
 * so you probably want to keep it on. Extensions that conflict with the
 * parser cache should disable the cache on a per-page basis instead.
 */
$wgEnableParserCache = true;

/**
 * Append a configured value to the parser cache and the sitenotice key so
 * that they can be kept separate for some class of activity.
 */
$wgRenderHashAppend = '';

/**
 * If on, the sidebar navigation links are cached for users with the
 * current language set. This can save a touch of load on a busy site
 * by shaving off extra message lookups.
 *
 * However it is also fragile: changing the site configuration, or
 * having a variable $wgArticlePath, can produce broken links that
 * don't update as expected.
 */
$wgEnableSidebarCache = false;

/**
 * Expiry time for the sidebar cache, in seconds
 */
$wgSidebarCacheExpiry = 86400;

/**
 * When using the file cache, we can store the cached HTML gzipped to save disk
 * space. Pages will then also be served compressed to clients that support it.
 *
 * Requires zlib support enabled in PHP.
 */
$wgUseGzip = false;

/**
 * Whether MediaWiki should send an ETag header. Seems to cause
 * broken behavior with Squid 2.6, see bug 7098.
 */
$wgUseETag = false;

/** Clock skew or the one-second resolution of time() can occasionally cause cache
 * problems when the user requests two pages within a short period of time. This
 * variable adds a given number of seconds to vulnerable timestamps, thereby giving
 * a grace period.
 */
$wgClockSkewFudge = 5;

/**
 * Invalidate various caches when LocalSettings.php changes. This is equivalent
 * to setting $wgCacheEpoch to the modification time of LocalSettings.php, as
 * was previously done in the default LocalSettings.php file.
 *
 * On high-traffic wikis, this should be set to false, to avoid the need to
 * check the file modification time, and to avoid the performance impact of
 * unnecessary cache invalidations.
 */
$wgInvalidateCacheOnLocalSettingsChange = true;

/** @} */ # end of cache settings

/************************************************************************//**
 * @name   HTTP proxy (Squid) settings
 *
 * Many of these settings apply to any HTTP proxy used in front of MediaWiki,
 * although they are referred to as Squid settings for historical reasons.
 *
 * Achieving a high hit ratio with an HTTP proxy requires special
 * configuration. See http://www.mediawiki.org/wiki/Manual:Squid_caching for
 * more details.
 *
 * @{
 */

/**
 * Enable/disable Squid.
 * See http://www.mediawiki.org/wiki/Manual:Squid_caching
 */
$wgUseSquid = false;

/** If you run Squid3 with ESI support, enable this (default:false): */
$wgUseESI = false;

/** Send X-Vary-Options header for better caching (requires patched Squid) */
$wgUseXVO = false;

/** Add X-Forwarded-Proto to the Vary and X-Vary-Options headers for API
 * requests and RSS/Atom feeds. Use this if you have an SSL termination setup
 * and need to split the cache between HTTP and HTTPS for API requests,
 * feed requests and HTTP redirect responses in order to prevent cache
 * pollution. This does not affect 'normal' requests to index.php other than
 * HTTP redirects.
 */
$wgVaryOnXFP = false;

/**
 * Internal server name as known to Squid, if different.
 *
 * @par Example:
 * @code
 * $wgInternalServer = 'http://yourinternal.tld:8000';
 * @endcode
 */
$wgInternalServer = false;

/**
 * Cache timeout for the squid, will be sent as s-maxage (without ESI) or
 * Surrogate-Control (with ESI). Without ESI, you should strip out s-maxage in
 * the Squid config. 18000 seconds = 5 hours, more cache hits with 2678400 = 31
 * days
 */
$wgSquidMaxage = 18000;

/**
 * Default maximum age for raw CSS/JS accesses
 */
$wgForcedRawSMaxage = 300;

/**
 * List of proxy servers to purge on changes; default port is 80. Use IP addresses.
 *
 * When MediaWiki is running behind a proxy, it will trust X-Forwarded-For
 * headers sent/modified from these proxies when obtaining the remote IP address
 *
 * For a list of trusted servers which *aren't* purged, see $wgSquidServersNoPurge.
 */
$wgSquidServers = array();

/**
 * As above, except these servers aren't purged on page changes; use to set a
 * list of trusted proxies, etc.
 */
$wgSquidServersNoPurge = array();

/** Maximum number of titles to purge in any one client operation */
$wgMaxSquidPurgeTitles = 400;

/**
 * Whether to use a Host header in purge requests sent to the proxy servers
 * configured in $wgSquidServers. Set this to false to support Squid
 * configured in forward-proxy mode.
 *
 * If this is set to true, a Host header will be sent, and only the path
 * component of the URL will appear on the request line, as if the request
 * were a non-proxy HTTP 1.1 request. Varnish only supports this style of
 * request. Squid supports this style of request only if reverse-proxy mode
 * (http_port ... accel) is enabled.
 *
 * If this is set to false, no Host header will be sent, and the absolute URL
 * will be sent in the request line, as is the standard for an HTTP proxy
 * request in both HTTP 1.0 and 1.1. This style of request is not supported
 * by Varnish, but is supported by Squid in either configuration (forward or
 * reverse).
 *
 * @since 1.21
 */
$wgSquidPurgeUseHostHeader = true;

/**
 * Routing configuration for HTCP multicast purging. Add elements here to
 * enable HTCP and determine which purges are sent where. If set to an empty
 * array, HTCP is disabled.
 *
 * Each key in this array is a regular expression to match against the purged
 * URL, or an empty string to match all URLs. The purged URL is matched against
 * the regexes in the order specified, and the first rule whose regex matches
 * is used.
 *
 * Example configuration to send purges for upload.wikimedia.org to one
 * multicast group and all other purges to another:
 * @code
 * $wgHTCPMulticastRouting = array(
 *         '|^https?://upload\.wikimedia\.org|' => array(
 *                 'host' => '239.128.0.113',
 *                 'port' => 4827,
 *         ),
 *         '' => array(
 *                 'host' => '239.128.0.112',
 *                 'port' => 4827,
 *         ),
 * );
 * @endcode
 *
 * @since 1.20
 *
 * @see $wgHTCPMulticastTTL
 */
$wgHTCPMulticastRouting = array();

/**
 * HTCP multicast address. Set this to a multicast IP address to enable HTCP.
 *
 * Note that MediaWiki uses the old non-RFC compliant HTCP format, which was
 * present in the earliest Squid implementations of the protocol.
 *
 * This setting is DEPRECATED in favor of $wgHTCPMulticastRouting , and kept
 * for backwards compatibility only. If $wgHTCPMulticastRouting is set, this
 * setting is ignored. If $wgHTCPMulticastRouting is not set and this setting
 * is, it is used to populate $wgHTCPMulticastRouting.
 *
 * @deprecated since 1.20 in favor of $wgHTCPMulticastRouting
 */
$wgHTCPMulticastAddress = false;

/**
 * HTCP multicast port.
 * @deprecated since 1.20 in favor of $wgHTCPMulticastRouting
 * @see $wgHTCPMulticastAddress
 */
$wgHTCPPort = 4827;

/**
 * HTCP multicast TTL.
 * @see $wgHTCPMulticastRouting
 */
$wgHTCPMulticastTTL = 1;

/** Should forwarded Private IPs be accepted? */
$wgUsePrivateIPs = false;

/** @} */ # end of HTTP proxy settings

/************************************************************************//**
 * @name   Language, regional and character encoding settings
 * @{
 */

/** Site language code, should be one of ./languages/Language(.*).php */
$wgLanguageCode = 'en';

/**
 * Some languages need different word forms, usually for different cases.
 * Used in Language::convertGrammar().
 *
 * @par Example:
 * @code
 * $wgGrammarForms['en']['genitive']['car'] = 'car\'s';
 * @endcode
 */
$wgGrammarForms = array();

/** Treat language links as magic connectors, not inline links */
$wgInterwikiMagic = true;

/** Hide interlanguage links from the sidebar */
$wgHideInterlanguageLinks = false;

/** List of language names or overrides for default names in Names.php */
$wgExtraLanguageNames = array();

/**
 * List of language codes that don't correspond to an actual language.
 * These codes are mostly leftoffs from renames, or other legacy things.
 * This array makes them not appear as a selectable language on the installer,
 * and excludes them when running the transstat.php script.
 */
$wgDummyLanguageCodes = array(
	'als' => 'gsw',
	'bat-smg' => 'sgs',
	'be-x-old' => 'be-tarask',
	'bh' => 'bho',
	'fiu-vro' => 'vro',
	'no' => 'nb',
	'qqq' => 'qqq', # Used for message documentation.
	'qqx' => 'qqx', # Used for viewing message keys.
	'roa-rup' => 'rup',
	'simple' => 'en',
	'zh-classical' => 'lzh',
	'zh-min-nan' => 'nan',
	'zh-yue' => 'yue',
);

/**
 * Character set for use in the article edit box. Language-specific encodings
 * may be defined.
 *
 * This historic feature is one of the first that was added by former MediaWiki
 * team leader Brion Vibber, and is used to support the Esperanto x-system.
 */
$wgEditEncoding = '';

/**
 * Set this to true to replace Arabic presentation forms with their standard
 * forms in the U+0600-U+06FF block. This only works if $wgLanguageCode is
 * set to "ar".
 *
 * Note that pages with titles containing presentation forms will become
 * inaccessible, run maintenance/cleanupTitles.php to fix this.
 */
$wgFixArabicUnicode = true;

/**
 * Set this to true to replace ZWJ-based chillu sequences in Malayalam text
 * with their Unicode 5.1 equivalents. This only works if $wgLanguageCode is
 * set to "ml". Note that some clients (even new clients as of 2010) do not
 * support these characters.
 *
 * If you enable this on an existing wiki, run maintenance/cleanupTitles.php to
 * fix any ZWJ sequences in existing page titles.
 */
$wgFixMalayalamUnicode = true;

/**
 * Set this to always convert certain Unicode sequences to modern ones
 * regardless of the content language. This has a small performance
 * impact.
 *
 * See $wgFixArabicUnicode and $wgFixMalayalamUnicode for conversion
 * details.
 *
 * @since 1.17
 */
$wgAllUnicodeFixes = false;

/**
 * Set this to eg 'ISO-8859-1' to perform character set conversion when
 * loading old revisions not marked with "utf-8" flag. Use this when
 * converting a wiki from MediaWiki 1.4 or earlier to UTF-8 without the
 * burdensome mass conversion of old text data.
 *
 * @note This DOES NOT touch any fields other than old_text. Titles, comments,
 * user names, etc still must be converted en masse in the database before
 * continuing as a UTF-8 wiki.
 */
$wgLegacyEncoding = false;

/**
 * Browser Blacklist for unicode non compliant browsers. Contains a list of
 * regexps : "/regexp/"  matching problematic browsers. These browsers will
 * be served encoded unicode in the edit box instead of real unicode.
 */
$wgBrowserBlackList = array(
	/**
	 * Netscape 2-4 detection
	 * The minor version may contain strings such as "Gold" or "SGoldC-SGI"
	 * Lots of non-netscape user agents have "compatible", so it's useful to check for that
	 * with a negative assertion. The [UIN] identifier specifies the level of security
	 * in a Netscape/Mozilla browser, checking for it rules out a number of fakers.
	 * The language string is unreliable, it is missing on NS4 Mac.
	 *
	 * Reference: http://www.psychedelix.com/agents/index.shtml
	 */
	'/^Mozilla\/2\.[^ ]+ [^(]*?\((?!compatible).*; [UIN]/',
	'/^Mozilla\/3\.[^ ]+ [^(]*?\((?!compatible).*; [UIN]/',
	'/^Mozilla\/4\.[^ ]+ [^(]*?\((?!compatible).*; [UIN]/',

	/**
	 * MSIE on Mac OS 9 is teh sux0r, converts þ to <thorn>, ð to <eth>, Þ to <THORN> and Ð to <ETH>
	 *
	 * Known useragents:
	 * - Mozilla/4.0 (compatible; MSIE 5.0; Mac_PowerPC)
	 * - Mozilla/4.0 (compatible; MSIE 5.15; Mac_PowerPC)
	 * - Mozilla/4.0 (compatible; MSIE 5.23; Mac_PowerPC)
	 * - [...]
	 *
	 * @link http://en.wikipedia.org/w/index.php?title=User%3A%C6var_Arnfj%F6r%F0_Bjarmason%2Ftestme&diff=12356041&oldid=12355864
	 * @link http://en.wikipedia.org/wiki/Template%3AOS9
	 */
	'/^Mozilla\/4\.0 \(compatible; MSIE \d+\.\d+; Mac_PowerPC\)/',

	/**
	 * Google wireless transcoder, seems to eat a lot of chars alive
	 * http://it.wikipedia.org/w/index.php?title=Luciano_Ligabue&diff=prev&oldid=8857361
	 */
	'/^Mozilla\/4\.0 \(compatible; MSIE 6.0; Windows NT 5.0; Google Wireless Transcoder;\)/'
);

/**
 * If set to true, the MediaWiki 1.4 to 1.5 schema conversion will
 * create stub reference rows in the text table instead of copying
 * the full text of all current entries from 'cur' to 'text'.
 *
 * This will speed up the conversion step for large sites, but
 * requires that the cur table be kept around for those revisions
 * to remain viewable.
 *
 * maintenance/migrateCurStubs.php can be used to complete the
 * migration in the background once the wiki is back online.
 *
 * This option affects the updaters *only*. Any present cur stub
 * revisions will be readable at runtime regardless of this setting.
 */
$wgLegacySchemaConversion = false;

/**
 * Enable to allow rewriting dates in page text.
 * DOES NOT FORMAT CORRECTLY FOR MOST LANGUAGES.
 */
$wgUseDynamicDates  = false;
/**
 * Enable dates like 'May 12' instead of '12 May', this only takes effect if
 * the interface is set to English.
 */
$wgAmericanDates    = false;
/**
 * For Hindi and Arabic use local numerals instead of Western style (0-9)
 * numerals in interface.
 */
$wgTranslateNumerals = true;

/**
 * Translation using MediaWiki: namespace.
 * Interface messages will be loaded from the database.
 */
$wgUseDatabaseMessages = true;

/**
 * Expiry time for the message cache key
 */
$wgMsgCacheExpiry = 86400;

/**
 * Maximum entry size in the message cache, in bytes
 */
$wgMaxMsgCacheEntrySize = 10000;

/** Whether to enable language variant conversion. */
$wgDisableLangConversion = false;

/** Whether to enable language variant conversion for links. */
$wgDisableTitleConversion = false;

/** Whether to enable cononical language links in meta data. */
$wgCanonicalLanguageLinks = true;

/** Default variant code, if false, the default will be the language code */
$wgDefaultLanguageVariant = false;

/**
 * Disabled variants array of language variant conversion.
 *
 * @par Example:
 * @code
 *  $wgDisabledVariants[] = 'zh-mo';
 *  $wgDisabledVariants[] = 'zh-my';
 * @endcode
 */
$wgDisabledVariants = array();

/**
 * Like $wgArticlePath, but on multi-variant wikis, this provides a
 * path format that describes which parts of the URL contain the
 * language variant.
 *
 * @par Example:
 * @code
 * 	$wgLanguageCode = 'sr';
 * 	$wgVariantArticlePath = '/$2/$1';
 * 	$wgArticlePath = '/wiki/$1';
 * @endcode
 *
 * A link to /wiki/ would be redirected to /sr/Главна_страна
 *
 * It is important that $wgArticlePath not overlap with possible values
 * of $wgVariantArticlePath.
 */
$wgVariantArticlePath = false;

/**
 * Show a bar of language selection links in the user login and user
 * registration forms; edit the "loginlanguagelinks" message to
 * customise these.
 */
$wgLoginLanguageSelector = false;

/**
 * When translating messages with wfMessage(), it is not always clear what
 * should be considered UI messages and what should be content messages.
 *
 * For example, for the English Wikipedia, there should be only one 'mainpage',
 * so when getting the link for 'mainpage', we should treat it as site content
 * and call ->inContentLanguage()->text(), but for rendering the text of the
 * link, we call ->text(). The code behaves this way by default. However,
 * sites like the Wikimedia Commons do offer different versions of 'mainpage'
 * and the like for different languages. This array provides a way to override
 * the default behavior.
 *
 * @par Example:
 * To allow language-specific main page and community
 * portal:
 * @code
 * 	$wgForceUIMsgAsContentMsg = array( 'mainpage', 'portal-url' );
 * @endcode
 */
$wgForceUIMsgAsContentMsg = array();

/**
 * Fake out the timezone that the server thinks it's in. This will be used for
 * date display and not for what's stored in the DB. Leave to null to retain
 * your server's OS-based timezone value.
 *
 * This variable is currently used only for signature formatting and for local
 * time/date parser variables ({{LOCALTIME}} etc.)
 *
 * Timezones can be translated by editing MediaWiki messages of type
 * timezone-nameinlowercase like timezone-utc.
 *
 * A list of useable timezones can found at:
 * http://php.net/manual/en/timezones.php
 *
 * @par Examples:
 * @code
 * $wgLocaltimezone = 'UTC';
 * $wgLocaltimezone = 'GMT';
 * $wgLocaltimezone = 'PST8PDT';
 * $wgLocaltimezone = 'Europe/Sweden';
 * $wgLocaltimezone = 'CET';
 * @endcode
 */
$wgLocaltimezone = null;

/**
 * Set an offset from UTC in minutes to use for the default timezone setting
 * for anonymous users and new user accounts.
 *
 * This setting is used for most date/time displays in the software, and is
 * overrideable in user preferences. It is *not* used for signature timestamps.
 *
 * By default, this will be set to match $wgLocaltimezone.
 */
$wgLocalTZoffset = null;

/**
 * If set to true, this will roll back a few bug fixes introduced in 1.19,
 * emulating the 1.18 behaviour, to avoid introducing bug 34832. In 1.19,
 * language variant conversion is disabled in interface messages. Setting this
 * to true re-enables it.
 *
 * @todo This variable should be removed (implicitly false) in 1.20 or earlier.
 */
$wgBug34832TransitionalRollback = true;


/** @} */ # End of language/charset settings

/*************************************************************************//**
 * @name   Output format and skin settings
 * @{
 */

/** The default Content-Type header. */
$wgMimeType = 'text/html';

/**
 * The content type used in script tags.  This is mostly going to be ignored if
 * $wgHtml5 is true, at least for actual HTML output, since HTML5 doesn't
 * require a MIME type for JavaScript or CSS (those are the default script and
 * style languages).
 */
$wgJsMimeType = 'text/javascript';

/**
 * The HTML document type.  Ignored if $wgHtml5 is true, since <!DOCTYPE html>
 * doesn't actually have a doctype part to put this variable's contents in.
 */
$wgDocType = '-//W3C//DTD XHTML 1.0 Transitional//EN';

/**
 * The URL of the document type declaration.  Ignored if $wgHtml5 is true,
 * since HTML5 has no DTD, and <!DOCTYPE html> doesn't actually have a DTD part
 * to put this variable's contents in.
 */
$wgDTD = 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd';

/**
 * The default xmlns attribute.  Ignored if $wgHtml5 is true (or it's supposed
 * to be), since we don't currently support XHTML5, and in HTML5 (i.e., served
 * as text/html) the attribute has no effect, so why bother?
 */
$wgXhtmlDefaultNamespace = 'http://www.w3.org/1999/xhtml';

/**
 * Should we output an HTML5 doctype?  If false, use XHTML 1.0 Transitional
 * instead, and disable HTML5 features.  This may eventually be removed and set
 * to always true.  If it's true, a number of other settings will be irrelevant
 * and have no effect.
 */
$wgHtml5 = true;

/**
 * Defines the value of the version attribute in the &lt;html&gt; tag, if any.
 * This is ignored if $wgHtml5 is false.  If $wgAllowRdfaAttributes and
 * $wgHtml5 are both true, and this evaluates to boolean false (like if it's
 * left at the default null value), it will be auto-initialized to the correct
 * value for RDFa+HTML5.  As such, you should have no reason to ever actually
 * set this to anything.
 */
$wgHtml5Version = null;

/**
 * Enabled RDFa attributes for use in wikitext.
 * NOTE: Interaction with HTML5 is somewhat underspecified.
 */
$wgAllowRdfaAttributes = false;

/**
 * Enabled HTML5 microdata attributes for use in wikitext, if $wgHtml5 is also true.
 */
$wgAllowMicrodataAttributes = false;

/**
 * Cleanup as much presentational html like valign -> css vertical-align as we can
 */
$wgCleanupPresentationalAttributes = true;

/**
 * Should we try to make our HTML output well-formed XML?  If set to false,
 * output will be a few bytes shorter, and the HTML will arguably be more
 * readable.  If set to true, life will be much easier for the authors of
 * screen-scraping bots, and the HTML will arguably be more readable.
 *
 * Setting this to false may omit quotation marks on some attributes, omit
 * slashes from some self-closing tags, omit some ending tags, etc., where
 * permitted by HTML5.  Setting it to true will not guarantee that all pages
 * will be well-formed, although non-well-formed pages should be rare and it's
 * a bug if you find one.  Conversely, setting it to false doesn't mean that
 * all XML-y constructs will be omitted, just that they might be.
 *
 * Because of compatibility with screen-scraping bots, and because it's
 * controversial, this is currently left to true by default.
 */
$wgWellFormedXml = true;

/**
 * Permit other namespaces in addition to the w3.org default.
 *
 * Use the prefix for the key and the namespace for the value.
 *
 * @par Example:
 * @code
 * $wgXhtmlNamespaces['svg'] = 'http://www.w3.org/2000/svg';
 * @endCode
 * Normally we wouldn't have to define this in the root "<html>"
 * element, but IE needs it there in some circumstances.
 *
 * This is ignored if $wgHtml5 is true, for the same reason as
 * $wgXhtmlDefaultNamespace.
 */
$wgXhtmlNamespaces = array();

/**
 * Show IP address, for non-logged in users. It's necessary to switch this off
 * for some forms of caching.
 * @warning Will disable file cache.
 */
$wgShowIPinHeader = true;

/**
 * Site notice shown at the top of each page
 *
 * MediaWiki:Sitenotice page, which will override this. You can also
 * provide a separate message for logged-out users using the
 * MediaWiki:Anonnotice page.
 */
$wgSiteNotice = '';

/**
 * A subtitle to add to the tagline, for skins that have it/
 */
$wgExtraSubtitle = '';

/**
 * If this is set, a "donate" link will appear in the sidebar. Set it to a URL.
 */
$wgSiteSupportPage = '';

/**
 * Validate the overall output using tidy and refuse
 * to display the page if it's not valid.
 */
$wgValidateAllHtml = false;

/**
 * Default skin, for new users and anonymous visitors. Registered users may
 * change this to any one of the other available skins in their preferences.
 * This has to be completely lowercase; see the "skins" directory for the list
 * of available skins.
 */
$wgDefaultSkin = 'vector';

/**
 * Specify the name of a skin that should not be presented in the list of
 * available skins.  Use for blacklisting a skin which you do not want to
 * remove from the .../skins/ directory
 */
$wgSkipSkin = '';
/** Array for more like $wgSkipSkin. */
$wgSkipSkins = array();

/**
 * Optionally, we can specify a stylesheet to use for media="handheld".
 * This is recognized by some, but not all, handheld/mobile/PDA browsers.
 * If left empty, compliant handheld browsers won't pick up the skin
 * stylesheet, which is specified for 'screen' media.
 *
 * Can be a complete URL, base-relative path, or $wgStylePath-relative path.
 * Try 'chick/main.css' to apply the Chick styles to the MonoBook HTML.
 *
 * Will also be switched in when 'handheld=yes' is added to the URL, like
 * the 'printable=yes' mode for print media.
 */
$wgHandheldStyle = false;

/**
 * If set, 'screen' and 'handheld' media specifiers for stylesheets are
 * transformed such that they apply to the iPhone/iPod Touch Mobile Safari,
 * which doesn't recognize 'handheld' but does support media queries on its
 * screen size.
 *
 * Consider only using this if you have a *really good* handheld stylesheet,
 * as iPhone users won't have any way to disable it and use the "grown-up"
 * styles instead.
 */
$wgHandheldForIPhone = false;

/**
 * Allow user Javascript page?
 * This enables a lot of neat customizations, but may
 * increase security risk to users and server load.
 */
$wgAllowUserJs = false;

/**
 * Allow user Cascading Style Sheets (CSS)?
 * This enables a lot of neat customizations, but may
 * increase security risk to users and server load.
 */
$wgAllowUserCss = false;

/**
 * Allow user-preferences implemented in CSS?
 * This allows users to customise the site appearance to a greater
 * degree; disabling it will improve page load times.
 */
$wgAllowUserCssPrefs = true;

/** Use the site's Javascript page? */
$wgUseSiteJs = true;

/** Use the site's Cascading Style Sheets (CSS)? */
$wgUseSiteCss = true;

/**
 * Break out of framesets. This can be used to prevent clickjacking attacks,
 * or to prevent external sites from framing your site with ads.
 */
$wgBreakFrames = false;

/**
 * The X-Frame-Options header to send on pages sensitive to clickjacking
 * attacks, such as edit pages. This prevents those pages from being displayed
 * in a frame or iframe. The options are:
 *
 *   - 'DENY': Do not allow framing. This is recommended for most wikis.
 *
 *   - 'SAMEORIGIN': Allow framing by pages on the same domain. This can be used
 *         to allow framing within a trusted domain. This is insecure if there
 *         is a page on the same domain which allows framing of arbitrary URLs.
 *
 *   - false: Allow all framing. This opens up the wiki to XSS attacks and thus
 *         full compromise of local user accounts. Private wikis behind a
 *         corporate firewall are especially vulnerable. This is not
 *         recommended.
 *
 * For extra safety, set $wgBreakFrames = true, to prevent framing on all pages,
 * not just edit pages.
 */
$wgEditPageFrameOptions = 'DENY';

/**
 * Disallow framing of API pages directly, by setting the X-Frame-Options
 * header. Since the API returns CSRF tokens, allowing the results to be
 * framed can compromise your user's account security.
 * Options are:
 *   - 'DENY': Do not allow framing. This is recommended for most wikis.
 *   - 'SAMEORIGIN': Allow framing by pages on the same domain.
 *   - false: Allow all framing.
 */

$wgApiFrameOptions = 'DENY';

/**
 * Disable output compression (enabled by default if zlib is available)
 */
$wgDisableOutputCompression = false;

/**
 * Should we allow a broader set of characters in id attributes, per HTML5?  If
 * not, use only HTML 4-compatible IDs.  This option is for testing -- when the
 * functionality is ready, it will be on by default with no option.
 *
 * Currently this appears to work fine in all browsers, but it's disabled by
 * default because it normalizes id's a bit too aggressively, breaking preexisting
 * content (particularly Cite).  See bug 27733, bug 27694, bug 27474.
 */
$wgExperimentalHtmlIds = false;

/**
 * Abstract list of footer icons for skins in place of old copyrightico and poweredbyico code
 * You can add new icons to the built in copyright or poweredby, or you can create
 * a new block. Though note that you may need to add some custom css to get good styling
 * of new blocks in monobook. vector and modern should work without any special css.
 *
 * $wgFooterIcons itself is a key/value array.
 * The key is the name of a block that the icons will be wrapped in. The final id varies
 * by skin; Monobook and Vector will turn poweredby into f-poweredbyico while Modern
 * turns it into mw_poweredby.
 * The value is either key/value array of icons or a string.
 * In the key/value array the key may or may not be used by the skin but it can
 * be used to find the icon and unset it or change the icon if needed.
 * This is useful for disabling icons that are set by extensions.
 * The value should be either a string or an array. If it is a string it will be output
 * directly as html, however some skins may choose to ignore it. An array is the preferred format
 * for the icon, the following keys are used:
 *  - src: An absolute url to the image to use for the icon, this is recommended
 *        but not required, however some skins will ignore icons without an image
 * - url: The url to use in the a element arround the text or icon, if not set an a element will not be outputted
 * - alt: This is the text form of the icon, it will be displayed without an image in
 *        skins like Modern or if src is not set, and will otherwise be used as
 *        the alt="" for the image. This key is required.
 * - width and height: If the icon specified by src is not of the standard size
 *                     you can specify the size of image to use with these keys.
 *                     Otherwise they will default to the standard 88x31.
 * @todo Reformat documentation.
 */
$wgFooterIcons = array(
	"copyright" => array(
		"copyright" => array(), // placeholder for the built in copyright icon
	),
	"poweredby" => array(
		"mediawiki" => array(
			"src" => null, // Defaults to "$wgStylePath/common/images/poweredby_mediawiki_88x31.png"
			"url" => "//www.mediawiki.org/",
			"alt" => "Powered by MediaWiki",
		)
	),
);

/**
 * Login / create account link behavior when it's possible for anonymous users
 * to create an account.
 *  - true = use a combined login / create account link
 *  - false = split login and create account into two separate links
 */
$wgUseCombinedLoginLink = false;

/**
 * Search form look for Vector skin only.
 *  - true = use an icon search button
 *  - false = use Go & Search buttons
 */
$wgVectorUseSimpleSearch = true;

/**
 * Watch and unwatch as an icon rather than a link for Vector skin only.
 *  - true = use an icon watch/unwatch button
 *  - false = use watch/unwatch text link
 */
$wgVectorUseIconWatch = false;

/**
 * Display user edit counts in various prominent places.
 */
$wgEdititis = false;

/**
 * Better directionality support (bug 6100 and related).
 * Removed in 1.18, still kept here for LiquidThreads backwards compatibility.
 *
 * @deprecated since 1.18
 */
$wgBetterDirectionality = true;

/**
 * Some web hosts attempt to rewrite all responses with a 404 (not found)
 * status code, mangling or hiding MediaWiki's output. If you are using such a
 * host, you should start looking for a better one. While you're doing that,
 * set this to false to convert some of MediaWiki's 404 responses to 200 so
 * that the generated error pages can be seen.
 *
 * In cases where for technical reasons it is more important for MediaWiki to
 * send the correct status code than for the body to be transmitted intact,
 * this configuration variable is ignored.
 */
$wgSend404Code = true;


/**
 * The $wgShowRollbackEditCount variable is used to show how many edits will be
 * rollback. The numeric value of the varible are the limit up to are counted.
 * If the value is false or 0, the edits are not counted.
 *
 * @since 1.20
 */
$wgShowRollbackEditCount = 10;

/** @} */ # End of output format settings }

/*************************************************************************//**
 * @name   Resource loader settings
 * @{
 */

/**
 * Client-side resource modules.
 *
 * Extensions should add their resource loader module definitions
 * to the $wgResourceModules variable.
 *
 * @par Example:
 * @code
 *   $wgResourceModules['ext.myExtension'] = array(
 *      'scripts' => 'myExtension.js',
 *      'styles' => 'myExtension.css',
 *      'dependencies' => array( 'jquery.cookie', 'jquery.tabIndex' ),
 *      'localBasePath' => __DIR__,
 *      'remoteExtPath' => 'MyExtension',
 *   );
 * @endcode
 */
$wgResourceModules = array();

/**
 * Extensions should register foreign module sources here. 'local' is a
 * built-in source that is not in this array, but defined by
 * ResourceLoader::__construct() so that it cannot be unset.
 *
 * @par Example:
 * @code
 *   $wgResourceLoaderSources['foo'] = array(
 *       'loadScript' => 'http://example.org/w/load.php',
 *       'apiScript' => 'http://example.org/w/api.php'
 *   );
 * @endcode
 */
$wgResourceLoaderSources = array();

/**
 * Default 'remoteBasePath' value for instances of ResourceLoaderFileModule.
 * If not set, then $wgScriptPath will be used as a fallback.
 */
$wgResourceBasePath = null;

/**
 * Maximum time in seconds to cache resources served by the resource loader.
 *
 * @todo Document array structure
 */
$wgResourceLoaderMaxage = array(
	'versioned' => array(
		// Squid/Varnish but also any other public proxy cache between the client and MediaWiki
		'server' => 30 * 24 * 60 * 60, // 30 days
		// On the client side (e.g. in the browser cache).
		'client' => 30 * 24 * 60 * 60, // 30 days
	),
	'unversioned' => array(
		'server' => 5 * 60, // 5 minutes
		'client' => 5 * 60, // 5 minutes
	),
);

/**
 * The default debug mode (on/off) for of ResourceLoader requests.
 *
 * This will still be overridden when the debug URL parameter is used.
 */
$wgResourceLoaderDebug = false;

/**
 * Enable embedding of certain resources using Edge Side Includes. This will
 * improve performance but only works if there is something in front of the
 * web server (e..g a Squid or Varnish server) configured to process the ESI.
 */
$wgResourceLoaderUseESI = false;

/**
 * Put each statement on its own line when minifying JavaScript. This makes
 * debugging in non-debug mode a bit easier.
 */
$wgResourceLoaderMinifierStatementsOnOwnLine = false;

/**
 * Maximum line length when minifying JavaScript. This is not a hard maximum:
 * the minifier will try not to produce lines longer than this, but may be
 * forced to do so in certain cases.
 */
$wgResourceLoaderMinifierMaxLineLength = 1000;

/**
 * Whether to include the mediawiki.legacy JS library (old wikibits.js), and its
 * dependencies.
 */
$wgIncludeLegacyJavaScript = true;

/**
 * Whether to preload the mediawiki.util module as blocking module in the top
 * queue.
 *
 * Before MediaWiki 1.19, modules used to load slower/less asynchronous which
 * allowed modules to lack dependencies on 'popular' modules that were likely
 * loaded already.
 *
 * This setting is to aid scripts during migration by providing mediawiki.util
 * unconditionally (which was the most commonly missed dependency).
 * It doesn't cover all missing dependencies obviously but should fix most of
 * them.
 *
 * This should be removed at some point after site/user scripts have been fixed.
 * Enable this if your wiki has a large amount of user/site scripts that are
 * lacking dependencies.
 * @todo Deprecate
 */
$wgPreloadJavaScriptMwUtil = false;

/**
 * Whether or not to assign configuration variables to the global window object.
 *
 * If this is set to false, old code using deprecated variables will no longer
 * work.
 *
 * @par Example of legacy code:
 * @code{,js}
 * 	if ( window.wgRestrictionEdit ) { ... }
 * @endcode
 * or:
 * @code{,js}
 * 	if ( wgIsArticle ) { ... }
 * @endcode
 *
 * Instead, one needs to use mw.config.
 * @par Example using mw.config global configuration:
 * @code{,js}
 * 	if ( mw.config.exists('wgRestrictionEdit') ) { ... }
 * @endcode
 * or:
 * @code{,js}
 * 	if ( mw.config.get('wgIsArticle') ) { ... }
 * @endcode
 */
$wgLegacyJavaScriptGlobals = true;

/**
 * If set to a positive number, ResourceLoader will not generate URLs whose
 * query string is more than this many characters long, and will instead use
 * multiple requests with shorter query strings. This degrades performance,
 * but may be needed if your web server has a low (less than, say 1024)
 * query string length limit or a low value for suhosin.get.max_value_length
 * that you can't increase.
 *
 * If set to a negative number, ResourceLoader will assume there is no query
 * string length limit.
 */
$wgResourceLoaderMaxQueryLength = -1;

/**
 * If set to true, JavaScript modules loaded from wiki pages will be parsed
 * prior to minification to validate it.
 *
 * Parse errors will result in a JS exception being thrown during module load,
 * which avoids breaking other modules loaded in the same request.
 */
$wgResourceLoaderValidateJS = true;

/**
 * If set to true, statically-sourced (file-backed) JavaScript resources will
 * be parsed for validity before being bundled up into ResourceLoader modules.
 *
 * This can be helpful for development by providing better error messages in
 * default (non-debug) mode, but JavaScript parsing is slow and memory hungry
 * and may fail on large pre-bundled frameworks.
 */
$wgResourceLoaderValidateStaticJS = false;

/**
 * If set to true, asynchronous loading of bottom-queue scripts in the "<head>"
 * will be enabled. This is an experimental feature that's supposed to make
 * JavaScript load faster.
 */
$wgResourceLoaderExperimentalAsyncLoading = false;

/** @} */ # End of resource loader settings }


/*************************************************************************//**
 * @name   Page title and interwiki link settings
 * @{
 */

/**
 * Name of the project namespace. If left set to false, $wgSitename will be
 * used instead.
 */
$wgMetaNamespace = false;

/**
 * Name of the project talk namespace.
 *
 * Normally you can ignore this and it will be something like
 * $wgMetaNamespace . "_talk". In some languages, you may want to set this
 * manually for grammatical reasons.
 */
$wgMetaNamespaceTalk = false;

/**
 * Additional namespaces. If the namespaces defined in Language.php and
 * Namespace.php are insufficient, you can create new ones here, for example,
 * to import Help files in other languages. You can also override the namespace
 * names of existing namespaces. Extensions developers should use
 * $wgCanonicalNamespaceNames.
 *
 * @warning Once you delete a namespace, the pages in that namespace will
 * no longer be accessible. If you rename it, then you can access them through
 * the new namespace name.
 *
 * Custom namespaces should start at 100 to avoid conflicting with standard
 * namespaces, and should always follow the even/odd main/talk pattern.
 *
 * @par Example:
 * @code
 * $wgExtraNamespaces = array(
 *    100 => "Hilfe",
 *    101 => "Hilfe_Diskussion",
 *    102 => "Aide",
 *    103 => "Discussion_Aide"
 * );
 * @endcode
 *
 * @todo Add a note about maintenance/namespaceDupes.php
 */
$wgExtraNamespaces = array();

/**
 * Same as above, but for namespaces with gender distinction.
 * Note: the default form for the namespace should also be set
 * using $wgExtraNamespaces for the same index.
 * @since 1.18
 */
$wgExtraGenderNamespaces = array();

/**
 * Namespace aliases.
 *
 * These are alternate names for the primary localised namespace names, which
 * are defined by $wgExtraNamespaces and the language file. If a page is
 * requested with such a prefix, the request will be redirected to the primary
 * name.
 *
 * Set this to a map from namespace names to IDs.
 *
 * @par Example:
 * @code
 *    $wgNamespaceAliases = array(
 *        'Wikipedian' => NS_USER,
 *        'Help' => 100,
 *    );
 * @endcode
 */
$wgNamespaceAliases = array();

/**
 * Allowed title characters -- regex character class
 * Don't change this unless you know what you're doing
 *
 * Problematic punctuation:
 *   -  []{}|#    Are needed for link syntax, never enable these
 *   -  <>        Causes problems with HTML escaping, don't use
 *   -  %         Enabled by default, minor problems with path to query rewrite rules, see below
 *   -  +         Enabled by default, but doesn't work with path to query rewrite rules, corrupted by apache
 *   -  ?         Enabled by default, but doesn't work with path to PATH_INFO rewrites
 *
 * All three of these punctuation problems can be avoided by using an alias,
 * instead of a rewrite rule of either variety.
 *
 * The problem with % is that when using a path to query rewrite rule, URLs are
 * double-unescaped: once by Apache's path conversion code, and again by PHP. So
 * %253F, for example, becomes "?". Our code does not double-escape to compensate
 * for this, indeed double escaping would break if the double-escaped title was
 * passed in the query string rather than the path. This is a minor security issue
 * because articles can be created such that they are hard to view or edit.
 *
 * In some rare cases you may wish to remove + for compatibility with old links.
 *
 * Theoretically 0x80-0x9F of ISO 8859-1 should be disallowed, but
 * this breaks interlanguage links
 */
$wgLegalTitleChars = " %!\"$&'()*,\\-.\\/0-9:;=?@A-Z\\\\^_`a-z~\\x80-\\xFF+";

/**
 * The interwiki prefix of the current wiki, or false if it doesn't have one.
 */
$wgLocalInterwiki = false;

/**
 * Expiry time for cache of interwiki table
 */
$wgInterwikiExpiry = 10800;

/**
 * @name Interwiki caching settings.
 * @{
 */
/**
 *$wgInterwikiCache specifies path to constant database file.
 *
 * This cdb database is generated by dumpInterwiki from maintenance and has
 * such key formats:
 *  - dbname:key - a simple key (e.g. enwiki:meta)
 *  - _sitename:key - site-scope key (e.g. wiktionary:meta)
 *  - __global:key - global-scope key (e.g. __global:meta)
 *  - __sites:dbname - site mapping (e.g. __sites:enwiki)
 *
 * Sites mapping just specifies site name, other keys provide "local url"
 * data layout.
 */
$wgInterwikiCache = false;
/**
 * Specify number of domains to check for messages.
 *	- 1: Just wiki(db)-level
 *	- 2: wiki and global levels
 *	- 3: site levels
 */
$wgInterwikiScopes = 3;
/**
 *	$wgInterwikiFallbackSite - if unable to resolve from cache
 */
$wgInterwikiFallbackSite = 'wiki';
/** @} */ # end of Interwiki caching settings.

/**
 * If local interwikis are set up which allow redirects,
 * set this regexp to restrict URLs which will be displayed
 * as 'redirected from' links.
 *
 * @par Example:
 * It might look something like this:
 * @code
 * $wgRedirectSources = '!^https?://[a-z-]+\.wikipedia\.org/!';
 * @endcode
 *
 * Leave at false to avoid displaying any incoming redirect markers.
 * This does not affect intra-wiki redirects, which don't change
 * the URL.
 */
$wgRedirectSources = false;

/**
 * Set this to false to avoid forcing the first letter of links to capitals.
 *
 * @warning may break links! This makes links COMPLETELY case-sensitive. Links
 * appearing with a capital at the beginning of a sentence will *not* go to the
 * same place as links in the middle of a sentence using a lowercase initial.
 */
$wgCapitalLinks = true;

/**
 * @since 1.16 - This can now be set per-namespace. Some special namespaces (such
 * as Special, see MWNamespace::$alwaysCapitalizedNamespaces for the full list) must be
 * true by default (and setting them has no effect), due to various things that
 * require them to be so. Also, since Talk namespaces need to directly mirror their
 * associated content namespaces, the values for those are ignored in favor of the
 * subject namespace's setting. Setting for NS_MEDIA is taken automatically from
 * NS_FILE.
 *
 * @par Example:
 * @code
 * 	$wgCapitalLinkOverrides[ NS_FILE ] = false;
 * @endcode
 */
$wgCapitalLinkOverrides = array();

/** Which namespaces should support subpages?
 * See Language.php for a list of namespaces.
 */
$wgNamespacesWithSubpages = array(
	NS_TALK           => true,
	NS_USER           => true,
	NS_USER_TALK      => true,
	NS_PROJECT_TALK   => true,
	NS_FILE_TALK      => true,
	NS_MEDIAWIKI      => true,
	NS_MEDIAWIKI_TALK => true,
	NS_TEMPLATE_TALK  => true,
	NS_HELP_TALK      => true,
	NS_CATEGORY_TALK  => true
);

/**
 * Array of namespaces which can be deemed to contain valid "content", as far
 * as the site statistics are concerned. Useful if additional namespaces also
 * contain "content" which should be considered when generating a count of the
 * number of articles in the wiki.
 */
$wgContentNamespaces = array( NS_MAIN );

/**
 * Max number of redirects to follow when resolving redirects.
 * 1 means only the first redirect is followed (default behavior).
 * 0 or less means no redirects are followed.
 */
$wgMaxRedirects = 1;

/**
 * Array of invalid page redirect targets.
 * Attempting to create a redirect to any of the pages in this array
 * will make the redirect fail.
 * Userlogout is hard-coded, so it does not need to be listed here.
 * (bug 10569) Disallow Mypage and Mytalk as well.
 *
 * As of now, this only checks special pages. Redirects to pages in
 * other namespaces cannot be invalidated by this variable.
 */
$wgInvalidRedirectTargets = array( 'Filepath', 'Mypage', 'Mytalk' );

/** @} */ # End of title and interwiki settings }

/************************************************************************//**
 * @name   Parser settings
 * These settings configure the transformation from wikitext to HTML.
 * @{
 */

/**
 * Parser configuration. Associative array with the following members:
 *
 *  class             The class name
 *
 *  preprocessorClass The preprocessor class. Two classes are currently available:
 *                    Preprocessor_Hash, which uses plain PHP arrays for tempoarary
 *                    storage, and Preprocessor_DOM, which uses the DOM module for
 *                    temporary storage. Preprocessor_DOM generally uses less memory;
 *                    the speed of the two is roughly the same.
 *
 *                    If this parameter is not given, it uses Preprocessor_DOM if the
 *                    DOM module is available, otherwise it uses Preprocessor_Hash.
 *
 * The entire associative array will be passed through to the constructor as
 * the first parameter. Note that only Setup.php can use this variable --
 * the configuration will change at runtime via $wgParser member functions, so
 * the contents of this variable will be out-of-date. The variable can only be
 * changed during LocalSettings.php, in particular, it can't be changed during
 * an extension setup function.
 */
$wgParserConf = array(
	'class' => 'Parser',
	#'preprocessorClass' => 'Preprocessor_Hash',
);

/** Maximum indent level of toc. */
$wgMaxTocLevel = 999;

/**
 * A complexity limit on template expansion: the maximum number of nodes visited
 * by PPFrame::expand()
 */
$wgMaxPPNodeCount = 1000000;

/**
 * A complexity limit on template expansion: the maximum number of elements
 * generated by Preprocessor::preprocessToObj(). This allows you to limit the
 * amount of memory used by the Preprocessor_DOM node cache: testing indicates
 * that each element uses about 160 bytes of memory on a 64-bit processor, so
 * this default corresponds to about 155 MB.
 *
 * When the limit is exceeded, an exception is thrown.
 */
$wgMaxGeneratedPPNodeCount = 1000000;


/**
 * Maximum recursion depth for templates within templates.
 * The current parser adds two levels to the PHP call stack for each template,
 * and xdebug limits the call stack to 100 by default. So this should hopefully
 * stop the parser before it hits the xdebug limit.
 */
$wgMaxTemplateDepth = 40;

/** @see $wgMaxTemplateDepth */
$wgMaxPPExpandDepth = 40;

/** The external URL protocols */
$wgUrlProtocols = array(
	'http://',
	'https://',
	'ftp://',
	'irc://',
	'ircs://',  // @bug 28503
	'gopher://',
	'telnet://', // Well if we're going to support the above.. -ævar
	'nntp://', // @bug 3808 RFC 1738
	'worldwind://',
	'mailto:',
	'news:',
	'svn://',
	'git://',
	'mms://',
	'//', // for protocol-relative URLs
);

/**
 * If true, removes (substitutes) templates in "~~~~" signatures.
 */
$wgCleanSignatures = true;

/**  Whether to allow inline image pointing to other websites */
$wgAllowExternalImages = false;

/**
 * If the above is false, you can specify an exception here. Image URLs
 * that start with this string are then rendered, while all others are not.
 * You can use this to set up a trusted, simple repository of images.
 * You may also specify an array of strings to allow multiple sites
 *
 * @par Examples:
 * @code
 * $wgAllowExternalImagesFrom = 'http://127.0.0.1/';
 * $wgAllowExternalImagesFrom = array( 'http://127.0.0.1/', 'http://example.com' );
 * @endcode
 */
$wgAllowExternalImagesFrom = '';

/** If $wgAllowExternalImages is false, you can allow an on-wiki
 * whitelist of regular expression fragments to match the image URL
 * against. If the image matches one of the regular expression fragments,
 * The image will be displayed.
 *
 * Set this to true to enable the on-wiki whitelist (MediaWiki:External image whitelist)
 * Or false to disable it
 */
$wgEnableImageWhitelist = true;

/**
 * A different approach to the above: simply allow the "<img>" tag to be used.
 * This allows you to specify alt text and other attributes, copy-paste HTML to
 * your wiki more easily, etc.  However, allowing external images in any manner
 * will allow anyone with editing rights to snoop on your visitors' IP
 * addresses and so forth, if they wanted to, by inserting links to images on
 * sites they control.
 */
$wgAllowImageTag = false;

/**
 * $wgUseTidy: use tidy to make sure HTML output is sane.
 * Tidy is a free tool that fixes broken HTML.
 * See http://www.w3.org/People/Raggett/tidy/
 *
 * - $wgTidyBin should be set to the path of the binary and
 * - $wgTidyConf to the path of the configuration file.
 * - $wgTidyOpts can include any number of parameters.
 * - $wgTidyInternal controls the use of the PECL extension or the
 *   libtidy (PHP >= 5) extension to use an in-process tidy library instead
 *   of spawning a separate program.
 *   Normally you shouldn't need to override the setting except for
 *   debugging. To install, use 'pear install tidy' and add a line
 *   'extension=tidy.so' to php.ini.
 */
$wgUseTidy = false;
/** @see $wgUseTidy */
$wgAlwaysUseTidy = false;
/** @see $wgUseTidy */
$wgTidyBin = 'tidy';
/** @see $wgUseTidy */
$wgTidyConf = $IP.'/includes/tidy.conf';
/** @see $wgUseTidy */
$wgTidyOpts = '';
/** @see $wgUseTidy */
$wgTidyInternal = extension_loaded( 'tidy' );

/**
 * Put tidy warnings in HTML comments
 * Only works for internal tidy.
 */
$wgDebugTidy = false;

/** Allow raw, unchecked HTML in "<html>...</html>" sections.
 * THIS IS VERY DANGEROUS on a publicly editable site, so USE wgGroupPermissions
 * TO RESTRICT EDITING to only those that you trust
 */
$wgRawHtml = false;

/**
 * Set a default target for external links, e.g. _blank to pop up a new window
 */
$wgExternalLinkTarget = false;

/**
 * If true, external URL links in wiki text will be given the
 * rel="nofollow" attribute as a hint to search engines that
 * they should not be followed for ranking purposes as they
 * are user-supplied and thus subject to spamming.
 */
$wgNoFollowLinks = true;

/**
 * Namespaces in which $wgNoFollowLinks doesn't apply.
 * See Language.php for a list of namespaces.
 */
$wgNoFollowNsExceptions = array();

/**
 * If this is set to an array of domains, external links to these domain names
 * (or any subdomains) will not be set to rel="nofollow" regardless of the
 * value of $wgNoFollowLinks.  For instance:
 *
 * $wgNoFollowDomainExceptions = array( 'en.wikipedia.org', 'wiktionary.org' );
 *
 * This would add rel="nofollow" to links to de.wikipedia.org, but not
 * en.wikipedia.org, wiktionary.org, en.wiktionary.org, us.en.wikipedia.org,
 * etc.
 */
$wgNoFollowDomainExceptions = array();

/**
 * Allow DISPLAYTITLE to change title display
 */
$wgAllowDisplayTitle = true;

/**
 * For consistency, restrict DISPLAYTITLE to titles that normalize to the same
 * canonical DB key.
 */
$wgRestrictDisplayTitle = true;

/**
 * Maximum number of calls per parse to expensive parser functions such as
 * PAGESINCATEGORY.
 */
$wgExpensiveParserFunctionLimit = 100;

/**
 * Preprocessor caching threshold
 * Setting it to 'false' will disable the preprocessor cache.
 */
$wgPreprocessorCacheThreshold = 1000;

/**
 * Enable interwiki transcluding.  Only when iw_trans=1.
 */
$wgEnableScaryTranscluding = false;

/**
 * (see next option $wgGlobalDatabase).
 */
$wgTranscludeCacheExpiry = 3600;

/** @} */ # end of parser settings }

/************************************************************************//**
 * @name   Statistics
 * @{
 */

/**
 * Method used to determine if a page in a content namespace should be counted
 * as a valid article.
 *
 * Redirect pages will never be counted as valid articles.
 *
 * This variable can have the following values:
 * - 'any': all pages as considered as valid articles
 * - 'comma': the page must contain a comma to be considered valid
 * - 'link': the page must contain a [[wiki link]] to be considered valid
 * - null: the value will be set at run time depending on $wgUseCommaCount:
 *         if $wgUseCommaCount is false, it will be 'link', if it is true
 *         it will be 'comma'
 *
 * See also See http://www.mediawiki.org/wiki/Manual:Article_count
 *
 * Retroactively changing this variable will not affect the existing count,
 * to update it, you will need to run the maintenance/updateArticleCount.php
 * script.
 */
$wgArticleCountMethod = null;

/**
 * Backward compatibility setting, will set $wgArticleCountMethod if it is null.
 * @deprecated since 1.18; use $wgArticleCountMethod instead
 */
$wgUseCommaCount = false;

/**
 * wgHitcounterUpdateFreq sets how often page counters should be updated, higher
 * values are easier on the database. A value of 1 causes the counters to be
 * updated on every hit, any higher value n cause them to update *on average*
 * every n hits. Should be set to either 1 or something largish, eg 1000, for
 * maximum efficiency.
 */
$wgHitcounterUpdateFreq = 1;

/**
 * How many days user must be idle before he is considered inactive. Will affect
 * the number shown on Special:Statistics and Special:ActiveUsers special page.
 * You might want to leave this as the default value, to provide comparable
 * numbers between different wikis.
 */
$wgActiveUserDays = 30;

/** @} */ # End of statistics }

/************************************************************************//**
 * @name   User accounts, authentication
 * @{
 */

/** For compatibility with old installations set to false */
$wgPasswordSalt = true;

/**
 * Specifies the minimal length of a user password. If set to 0, empty pass-
 * words are allowed.
 */
$wgMinimalPasswordLength = 1;

/**
 * Whether to allow password resets ("enter some identifying data, and we'll send an email
 * with a temporary password you can use to get back into the account") identified by
 * various bits of data.  Setting all of these to false (or the whole variable to false)
 * has the effect of disabling password resets entirely
 */
$wgPasswordResetRoutes = array(
	'username' => true,
	'email' => false,
);

/**
 * Maximum number of Unicode characters in signature
 */
$wgMaxSigChars = 255;

/**
 * Maximum number of bytes in username. You want to run the maintenance
 * script ./maintenance/checkUsernames.php once you have changed this value.
 */
$wgMaxNameChars = 255;

/**
 * Array of usernames which may not be registered or logged in from
 * Maintenance scripts can still use these
 */
$wgReservedUsernames = array(
	'MediaWiki default', // Default 'Main Page' and MediaWiki: message pages
	'Conversion script', // Used for the old Wikipedia software upgrade
	'Maintenance script', // Maintenance scripts which perform editing, image import script
	'Template namespace initialisation script', // Used in 1.2->1.3 upgrade
	'ScriptImporter', // Default user name used by maintenance/importSiteScripts.php
	'msg:double-redirect-fixer', // Automatic double redirect fix
	'msg:usermessage-editor', // Default user for leaving user messages
	'msg:proxyblocker', // For Special:Blockme
);

/**
 * Settings added to this array will override the default globals for the user
 * preferences used by anonymous visitors and newly created accounts.
 * For instance, to disable section editing links:
 * $wgDefaultUserOptions ['editsection'] = 0;
 *
 */
$wgDefaultUserOptions = array(
	'ccmeonemails'            => 0,
	'cols'                    => 80,
	'date'                    => 'default',
	'diffonly'                => 0,
	'disablemail'             => 0,
	'disablesuggest'          => 0,
	'editfont'                => 'default',
	'editondblclick'          => 0,
	'editsection'             => 1,
	'editsectiononrightclick' => 0,
	'enotifminoredits'        => 0,
	'enotifrevealaddr'        => 0,
	'enotifusertalkpages'     => 1,
	'enotifwatchlistpages'    => 0,
	'extendwatchlist'         => 0,
	'externaldiff'            => 0,
	'externaleditor'          => 0,
	'fancysig'                => 0,
	'forceeditsummary'        => 0,
	'gender'                  => 'unknown',
	'hideminor'               => 0,
	'hidepatrolled'           => 0,
	'imagesize'               => 2,
	'justify'                 => 0,
	'math'                    => 1,
	'minordefault'            => 0,
	'newpageshidepatrolled'   => 0,
	'nocache'                 => 0,
	'noconvertlink'           => 0,
	'norollbackdiff'          => 0,
	'numberheadings'          => 0,
	'previewonfirst'          => 0,
	'previewontop'            => 1,
	'quickbar'                => 5,
	'rcdays'                  => 7,
	'rclimit'                 => 50,
	'rememberpassword'        => 0,
	'rows'                    => 25,
	'searchlimit'             => 20,
	'showhiddencats'          => 0,
	'showjumplinks'           => 1,
	'shownumberswatching'     => 1,
	'showtoc'                 => 1,
	'showtoolbar'             => 1,
	'skin'                    => false,
	'stubthreshold'           => 0,
	'thumbsize'               => 2,
	'underline'               => 2,
	'uselivepreview'          => 0,
	'usenewrc'                => 0,
	'watchcreations'          => 0,
	'watchdefault'            => 0,
	'watchdeletion'           => 0,
	'watchlistdays'           => 3.0,
	'watchlisthideanons'      => 0,
	'watchlisthidebots'       => 0,
	'watchlisthideliu'        => 0,
	'watchlisthideminor'      => 0,
	'watchlisthideown'        => 0,
	'watchlisthidepatrolled'  => 0,
	'watchmoves'              => 0,
	'wllimit'                 => 250,
);

/** An array of preferences to not show for the user */
$wgHiddenPrefs = array();

/**
 * Characters to prevent during new account creations.
 * This is used in a regular expression character class during
 * registration (regex metacharacters like / are escaped).
 */
$wgInvalidUsernameCharacters = '@';

/**
 * Character used as a delimiter when testing for interwiki userrights
 * (In Special:UserRights, it is possible to modify users on different
 * databases if the delimiter is used, e.g. "Someuser@enwiki").
 *
 * It is recommended that you have this delimiter in
 * $wgInvalidUsernameCharacters above, or you will not be able to
 * modify the user rights of those users via Special:UserRights
 */
$wgUserrightsInterwikiDelimiter = '@';

/**
 * Use some particular type of external authentication.  The specific
 * authentication module you use will normally require some extra settings to
 * be specified.
 *
 * null indicates no external authentication is to be used.  Otherwise,
 * $wgExternalAuthType must be the name of a non-abstract class that extends
 * ExternalUser.
 *
 * Core authentication modules can be found in includes/extauth/.
 */
$wgExternalAuthType = null;

/**
 * Configuration for the external authentication.  This may include arbitrary
 * keys that depend on the authentication mechanism.  For instance,
 * authentication against another web app might require that the database login
 * info be provided.  Check the file where your auth mechanism is defined for
 * info on what to put here.
 */
$wgExternalAuthConf = array();

/**
 * When should we automatically create local accounts when external accounts
 * already exist, if using ExternalAuth?  Can have three values: 'never',
 * 'login', 'view'.  'view' requires the external database to support cookies,
 * and implies 'login'.
 *
 * TODO: Implement 'view' (currently behaves like 'login').
 */
$wgAutocreatePolicy = 'login';

/**
 * Policies for how each preference is allowed to be changed, in the presence
 * of external authentication.  The keys are preference keys, e.g., 'password'
 * or 'emailaddress' (see Preferences.php et al.).  The value can be one of the
 * following:
 *
 * - local: Allow changes to this pref through the wiki interface but only
 * apply them locally (default).
 * - semiglobal: Allow changes through the wiki interface and try to apply them
 * to the foreign database, but continue on anyway if that fails.
 * - global: Allow changes through the wiki interface, but only let them go
 * through if they successfully update the foreign database.
 * - message: Allow no local changes for linked accounts; replace the change
 * form with a message provided by the auth plugin, telling the user how to
 * change the setting externally (maybe providing a link, etc.).  If the auth
 * plugin provides no message for this preference, hide it entirely.
 *
 * Accounts that are not linked to an external account are never affected by
 * this setting.  You may want to look at $wgHiddenPrefs instead.
 * $wgHiddenPrefs supersedes this option.
 *
 * TODO: Implement message, global.
 */
$wgAllowPrefChange = array();

/**
 * This is to let user authenticate using https when they come from http.
 * Based on an idea by George Herbert on wikitech-l:
 * http://lists.wikimedia.org/pipermail/wikitech-l/2010-October/050039.html
 * @since 1.17
 */
$wgSecureLogin = false;

/** @} */ # end user accounts }

/************************************************************************//**
 * @name   User rights, access control and monitoring
 * @{
 */

/**
 * Number of seconds before autoblock entries expire. Default 86400 = 1 day.
 */
$wgAutoblockExpiry = 86400;

/**
 * Set this to true to allow blocked users to edit their own user talk page.
 */
$wgBlockAllowsUTEdit = false;

/** Allow sysops to ban users from accessing Emailuser */
$wgSysopEmailBans = true;

/**
 * Limits on the possible sizes of range blocks.
 *
 * CIDR notation is hard to understand, it's easy to mistakenly assume that a
 * /1 is a small range and a /31 is a large range. For IPv4, setting a limit of
 * half the number of bits avoids such errors, and allows entire ISPs to be
 * blocked using a small number of range blocks.
 *
 * For IPv6, RFC 3177 recommends that a /48 be allocated to every residential
 * customer, so range blocks larger than /64 (half the number of bits) will
 * plainly be required. RFC 4692 implies that a very large ISP may be
 * allocated a /19 if a generous HD-Ratio of 0.8 is used, so we will use that
 * as our limit. As of 2012, blocking the whole world would require a /4 range.
 */
$wgBlockCIDRLimit = array(
	'IPv4' => 16, # Blocks larger than a /16 (64k addresses) will not be allowed
	'IPv6' => 19,
);

/**
 * If true, blocked users will not be allowed to login. When using this with
 * a public wiki, the effect of logging out blocked users may actually be
 * avers: unless the user's address is also blocked (e.g. auto-block),
 * logging the user out will again allow reading and editing, just as for
 * anonymous visitors.
 */
$wgBlockDisablesLogin = false;

/**
 * Pages anonymous user may see, set as an array of pages titles.
 *
 * @par Example:
 * @code
 * $wgWhitelistRead = array ( "Main Page", "Wikipedia:Help");
 * @endcode
 *
 * Special:Userlogin and Special:ChangePassword are always whitelisted.
 *
 * @note This will only work if $wgGroupPermissions['*']['read'] is false --
 * see below. Otherwise, ALL pages are accessible, regardless of this setting.
 *
 * @note Also that this will only protect _pages in the wiki_. Uploaded files
 * will remain readable. You can use img_auth.php to protect uploaded files,
 * see http://www.mediawiki.org/wiki/Manual:Image_Authorization
 */
$wgWhitelistRead = false;

/**
 * Should editors be required to have a validated e-mail
 * address before being allowed to edit?
 */
$wgEmailConfirmToEdit = false;

/**
 * Permission keys given to users in each group.
 *
 * This is an array where the keys are all groups and each value is an
 * array of the format (right => boolean).
 *
 * The second format is used to support per-namespace permissions.
 * Note that this feature does not fully work for all permission types.
 *
 * All users are implicitly in the '*' group including anonymous visitors;
 * logged-in users are all implicitly in the 'user' group. These will be
 * combined with the permissions of all groups that a given user is listed
 * in in the user_groups table.
 *
 * Note: Don't set $wgGroupPermissions = array(); unless you know what you're
 * doing! This will wipe all permissions, and may mean that your users are
 * unable to perform certain essential tasks or access new functionality
 * when new permissions are introduced and default grants established.
 *
 * Functionality to make pages inaccessible has not been extensively tested
 * for security. Use at your own risk!
 *
 * This replaces $wgWhitelistAccount and $wgWhitelistEdit
 */
$wgGroupPermissions = array();

/** @cond file_level_code */
// Implicit group for all visitors
$wgGroupPermissions['*']['createaccount']    = true;
$wgGroupPermissions['*']['read']             = true;
$wgGroupPermissions['*']['edit']             = true;
$wgGroupPermissions['*']['createpage']       = true;
$wgGroupPermissions['*']['createtalk']       = true;
$wgGroupPermissions['*']['writeapi']         = true;
//$wgGroupPermissions['*']['patrolmarks']      = false; // let anons see what was patrolled

// Implicit group for all logged-in accounts
$wgGroupPermissions['user']['move']             = true;
$wgGroupPermissions['user']['move-subpages']    = true;
$wgGroupPermissions['user']['move-rootuserpages'] = true; // can move root userpages
$wgGroupPermissions['user']['movefile']         = true;
$wgGroupPermissions['user']['read']             = true;
$wgGroupPermissions['user']['edit']             = true;
$wgGroupPermissions['user']['createpage']       = true;
$wgGroupPermissions['user']['createtalk']       = true;
$wgGroupPermissions['user']['writeapi']         = true;
$wgGroupPermissions['user']['upload']           = true;
$wgGroupPermissions['user']['reupload']         = true;
$wgGroupPermissions['user']['reupload-shared']  = true;
$wgGroupPermissions['user']['minoredit']        = true;
$wgGroupPermissions['user']['purge']            = true; // can use ?action=purge without clicking "ok"
$wgGroupPermissions['user']['sendemail']        = true;

// Implicit group for accounts that pass $wgAutoConfirmAge
$wgGroupPermissions['autoconfirmed']['autoconfirmed'] = true;

// Users with bot privilege can have their edits hidden
// from various log pages by default
$wgGroupPermissions['bot']['bot']              = true;
$wgGroupPermissions['bot']['autoconfirmed']    = true;
$wgGroupPermissions['bot']['nominornewtalk']   = true;
$wgGroupPermissions['bot']['autopatrol']       = true;
$wgGroupPermissions['bot']['suppressredirect'] = true;
$wgGroupPermissions['bot']['apihighlimits']    = true;
$wgGroupPermissions['bot']['writeapi']         = true;
#$wgGroupPermissions['bot']['editprotected']    = true; // can edit all protected pages without cascade protection enabled

// Most extra permission abilities go to this group
$wgGroupPermissions['sysop']['block']            = true;
$wgGroupPermissions['sysop']['createaccount']    = true;
$wgGroupPermissions['sysop']['delete']           = true;
$wgGroupPermissions['sysop']['bigdelete']        = true; // can be separately configured for pages with > $wgDeleteRevisionsLimit revs
$wgGroupPermissions['sysop']['deletedhistory']   = true; // can view deleted history entries, but not see or restore the text
$wgGroupPermissions['sysop']['deletedtext']      = true; // can view deleted revision text
$wgGroupPermissions['sysop']['undelete']         = true;
$wgGroupPermissions['sysop']['editinterface']    = true;
$wgGroupPermissions['sysop']['editusercss']      = true;
$wgGroupPermissions['sysop']['edituserjs']       = true;
$wgGroupPermissions['sysop']['import']           = true;
$wgGroupPermissions['sysop']['importupload']     = true;
$wgGroupPermissions['sysop']['move']             = true;
$wgGroupPermissions['sysop']['move-subpages']    = true;
$wgGroupPermissions['sysop']['move-rootuserpages'] = true;
$wgGroupPermissions['sysop']['patrol']           = true;
$wgGroupPermissions['sysop']['autopatrol']       = true;
$wgGroupPermissions['sysop']['protect']          = true;
$wgGroupPermissions['sysop']['proxyunbannable']  = true;
$wgGroupPermissions['sysop']['rollback']         = true;
$wgGroupPermissions['sysop']['upload']           = true;
$wgGroupPermissions['sysop']['reupload']         = true;
$wgGroupPermissions['sysop']['reupload-shared']  = true;
$wgGroupPermissions['sysop']['unwatchedpages']   = true;
$wgGroupPermissions['sysop']['autoconfirmed']    = true;
$wgGroupPermissions['sysop']['ipblock-exempt']   = true;
$wgGroupPermissions['sysop']['blockemail']       = true;
$wgGroupPermissions['sysop']['markbotedits']     = true;
$wgGroupPermissions['sysop']['apihighlimits']    = true;
$wgGroupPermissions['sysop']['browsearchive']    = true;
$wgGroupPermissions['sysop']['noratelimit']      = true;
$wgGroupPermissions['sysop']['movefile']         = true;
$wgGroupPermissions['sysop']['unblockself']      = true;
$wgGroupPermissions['sysop']['suppressredirect'] = true;
#$wgGroupPermissions['sysop']['upload_by_url']    = true;
#$wgGroupPermissions['sysop']['mergehistory']     = true;

// Permission to change users' group assignments
$wgGroupPermissions['bureaucrat']['userrights']  = true;
$wgGroupPermissions['bureaucrat']['noratelimit'] = true;
// Permission to change users' groups assignments across wikis
#$wgGroupPermissions['bureaucrat']['userrights-interwiki'] = true;
// Permission to export pages including linked pages regardless of $wgExportMaxLinkDepth
#$wgGroupPermissions['bureaucrat']['override-export-depth'] = true;

#$wgGroupPermissions['sysop']['deletelogentry']  = true;
#$wgGroupPermissions['sysop']['deleterevision']  = true;
// To hide usernames from users and Sysops
#$wgGroupPermissions['suppress']['hideuser'] = true;
// To hide revisions/log items from users and Sysops
#$wgGroupPermissions['suppress']['suppressrevision'] = true;
// For private suppression log access
#$wgGroupPermissions['suppress']['suppressionlog'] = true;

/**
 * The developer group is deprecated, but can be activated if need be
 * to use the 'lockdb' and 'unlockdb' special pages. Those require
 * that a lock file be defined and creatable/removable by the web
 * server.
 */
# $wgGroupPermissions['developer']['siteadmin'] = true;

/** @endcond */

/**
 * Permission keys revoked from users in each group.
 *
 * This acts the same way as wgGroupPermissions above, except that
 * if the user is in a group here, the permission will be removed from them.
 *
 * Improperly setting this could mean that your users will be unable to perform
 * certain essential tasks, so use at your own risk!
 */
$wgRevokePermissions = array();

/**
 * Implicit groups, aren't shown on Special:Listusers or somewhere else
 */
$wgImplicitGroups = array( '*', 'user', 'autoconfirmed' );

/**
 * A map of group names that the user is in, to group names that those users
 * are allowed to add or revoke.
 *
 * Setting the list of groups to add or revoke to true is equivalent to "any
 * group".
 *
 * @par Example:
 * To allow sysops to add themselves to the "bot" group:
 * @code
 *    $wgGroupsAddToSelf = array( 'sysop' => array( 'bot' ) );
 * @endcode
 *
 * @par Example:
 * Implicit groups may be used for the source group, for instance:
 * @code
 *    $wgGroupsRemoveFromSelf = array( '*' => true );
 * @endcode
 * This allows users in the '*' group (i.e. any user) to remove themselves from
 * any group that they happen to be in.
 *
 */
$wgGroupsAddToSelf = array();

/** @see $wgGroupsAddToSelf */
$wgGroupsRemoveFromSelf = array();

/**
 * Set of available actions that can be restricted via action=protect
 * You probably shouldn't change this.
 * Translated through restriction-* messages.
 * Title::getRestrictionTypes() will remove restrictions that are not
 * applicable to a specific title (create and upload)
 */
$wgRestrictionTypes = array( 'create', 'edit', 'move', 'upload' );

/**
 * Rights which can be required for each protection level (via action=protect)
 *
 * You can add a new protection level that requires a specific
 * permission by manipulating this array. The ordering of elements
 * dictates the order on the protection form's lists.
 *
 *   - '' will be ignored (i.e. unprotected)
 *   - 'sysop' is quietly rewritten to 'protect' for backwards compatibility
 */
$wgRestrictionLevels = array( '', 'autoconfirmed', 'sysop' );

/**
 * Set the minimum permissions required to edit pages in each
 * namespace.  If you list more than one permission, a user must
 * have all of them to edit pages in that namespace.
 *
 * @note NS_MEDIAWIKI is implicitly restricted to 'editinterface'.
 */
$wgNamespaceProtection = array();

/**
 * Pages in namespaces in this array can not be used as templates.
 *
 * Elements MUST be numeric namespace ids, you can safely use the MediaWiki
 * namespaces constants (NS_USER, NS_MAIN...).
 *
 * Among other things, this may be useful to enforce read-restrictions
 * which may otherwise be bypassed by using the template machanism.
 */
$wgNonincludableNamespaces = array();

/**
 * Number of seconds an account is required to age before it's given the
 * implicit 'autoconfirm' group membership. This can be used to limit
 * privileges of new accounts.
 *
 * Accounts created by earlier versions of the software may not have a
 * recorded creation date, and will always be considered to pass the age test.
 *
 * When left at 0, all registered accounts will pass.
 *
 * @par Example:
 * Set automatic confirmation to 10 minutes (which is 600 seconds):
 * @code
 *  $wgAutoConfirmAge = 600;     // ten minutes
 * @endcode
 * Set age to one day:
 * @code
 *  $wgAutoConfirmAge = 3600*24; // one day
 * @endcode
 */
$wgAutoConfirmAge = 0;

/**
 * Number of edits an account requires before it is autoconfirmed.
 * Passing both this AND the time requirement is needed. Example:
 *
 * @par Example:
 * @code
 * $wgAutoConfirmCount = 50;
 * @endcode
 */
$wgAutoConfirmCount = 0;

/**
 * Automatically add a usergroup to any user who matches certain conditions.
 *
 * @todo Redocument $wgAutopromote
 *
 * The format is
 *   array( '&' or '|' or '^' or '!', cond1, cond2, ... )
 * where cond1, cond2, ... are themselves conditions; *OR*
 *   APCOND_EMAILCONFIRMED, *OR*
 *   array( APCOND_EMAILCONFIRMED ), *OR*
 *   array( APCOND_EDITCOUNT, number of edits ), *OR*
 *   array( APCOND_AGE, seconds since registration ), *OR*
 *   array( APCOND_INGROUPS, group1, group2, ... ), *OR*
 *   array( APCOND_ISIP, ip ), *OR*
 *   array( APCOND_IPINRANGE, range ), *OR*
 *   array( APCOND_AGE_FROM_EDIT, seconds since first edit ), *OR*
 *   array( APCOND_BLOCKED ), *OR*
 *   array( APCOND_ISBOT ), *OR*
 *   similar constructs defined by extensions.
 *
 * If $wgEmailAuthentication is off, APCOND_EMAILCONFIRMED will be true for any
 * user who has provided an e-mail address.
 */
$wgAutopromote = array(
	'autoconfirmed' => array( '&',
		array( APCOND_EDITCOUNT, &$wgAutoConfirmCount ),
		array( APCOND_AGE, &$wgAutoConfirmAge ),
	),
);

/**
 * Automatically add a usergroup to any user who matches certain conditions.
 *
 * Does not add the user to the group again if it has been removed.
 * Also, does not remove the group if the user no longer meets the criteria.
 *
 * The format is:
 * @code
 *	array( event => criteria, ... )
 * @endcode
 * Where event is either:
 *	- 'onEdit' (when user edits)
 *	- 'onView' (when user views the wiki)
 *
 * Criteria has the same format as $wgAutopromote
 *
 * @see $wgAutopromote
 * @since 1.18
 */
$wgAutopromoteOnce = array(
	'onEdit' => array(),
	'onView' => array()
);

/**
 * Put user rights log entries for autopromotion in recent changes?
 * @since 1.18
 */
$wgAutopromoteOnceLogInRC = true;

/**
 * $wgAddGroups and $wgRemoveGroups can be used to give finer control over who
 * can assign which groups at Special:Userrights.
 *
 * @par Example:
 * Bureaucrats can add any group:
 * @code
 * $wgAddGroups['bureaucrat'] = true;
 * @endcode
 * Bureaucrats can only remove bots and sysops:
 * @code
 * $wgRemoveGroups['bureaucrat'] = array( 'bot', 'sysop' );
 * @endcode
 * Sysops can make bots:
 * @code
 * $wgAddGroups['sysop'] = array( 'bot' );
 * @endcode
 * Sysops can disable other sysops in an emergency, and disable bots:
 * @code
 * $wgRemoveGroups['sysop'] = array( 'sysop', 'bot' );
 * @endcode
 */
$wgAddGroups = array();
/** @see $wgAddGroups */
$wgRemoveGroups = array();

/**
 * A list of available rights, in addition to the ones defined by the core.
 * For extensions only.
 */
$wgAvailableRights = array();

/**
 * Optional to restrict deletion of pages with higher revision counts
 * to users with the 'bigdelete' permission. (Default given to sysops.)
 */
$wgDeleteRevisionsLimit = 0;

/**
 * Number of accounts each IP address may create, 0 to disable.
 *
 * @warning Requires memcached */
$wgAccountCreationThrottle = 0;

/**
 * Edits matching these regular expressions in body text
 * will be recognised as spam and rejected automatically.
 *
 * There's no administrator override on-wiki, so be careful what you set. :)
 * May be an array of regexes or a single string for backwards compatibility.
 *
 * @see http://en.wikipedia.org/wiki/Regular_expression
 *
 * @note Each regex needs a beginning/end delimiter, eg: # or /
 */
$wgSpamRegex = array();

/** Same as the above except for edit summaries */
$wgSummarySpamRegex = array();

/**
 * Whether to use DNS blacklists in $wgDnsBlacklistUrls to check for open
 * proxies
 * @since 1.16
 */
$wgEnableDnsBlacklist = false;

/**
 * @deprecated since 1.17 Use $wgEnableDnsBlacklist instead, only kept for
 * backward compatibility.
 */
$wgEnableSorbs = false;

/**
 * List of DNS blacklists to use, if $wgEnableDnsBlacklist is true.
 *
 * This is an array of either a URL or an array with the URL and a key (should
 * the blacklist require a key).
 *
 * @par Example:
 * @code
 * $wgDnsBlacklistUrls = array(
 *   // String containing URL
 *   'http.dnsbl.sorbs.net.',
 *   // Array with URL and key, for services that require a key
 *   array( 'dnsbl.httpbl.net.', 'mykey' ),
 *   // Array with just the URL. While this works, it is recommended that you
 *   // just use a string as shown above
 *   array( 'opm.tornevall.org.' )
 * );
 * @endcode
 *
 * @note You should end the domain name with a . to avoid searching your
 * eventual domain search suffixes.
 * @since 1.16
 */
$wgDnsBlacklistUrls = array( 'http.dnsbl.sorbs.net.' );

/**
 * @deprecated since 1.17 Use $wgDnsBlacklistUrls instead, only kept for
 * backward compatibility.
 */
$wgSorbsUrl = array();

/**
 * Proxy whitelist, list of addresses that are assumed to be non-proxy despite
 * what the other methods might say.
 */
$wgProxyWhitelist = array();

/**
 * Simple rate limiter options to brake edit floods.
 *
 * Maximum number actions allowed in the given number of seconds; after that
 * the violating client receives HTTP 500 error pages until the period
 * elapses.
 *
 * @par Example:
 * To set a generic maximum of 4 hits in 60 seconds:
 * @code
 * $wgRateLimits = array( 4, 60 );
 * @endcode
 *
 * You could also limit per action and then type of users. See the inline
 * code for a template to use.
 *
 * This option set is experimental and likely to change.
 *
 * @warning Requires memcached.
 */
$wgRateLimits = array(
	'edit' => array(
		'anon'   => null, // for any and all anonymous edits (aggregate)
		'user'   => null, // for each logged-in user
		'newbie' => null, // for each recent (autoconfirmed) account; overrides 'user'
		'ip'     => null, // for each anon and recent account
		'subnet' => null, // ... with final octet removed
		),
	'move' => array(
		'user'   => null,
		'newbie' => null,
		'ip'     => null,
		'subnet' => null,
		),
	'mailpassword' => array(
		'anon' => null,
		),
	'emailuser' => array(
		'user' => null,
		),
	);

/**
 * Set to a filename to log rate limiter hits.
 */
$wgRateLimitLog = null;

/**
 * Array of IPs which should be excluded from rate limits.
 * This may be useful for whitelisting NAT gateways for conferences, etc.
 */
$wgRateLimitsExcludedIPs = array();

/**
 * Log IP addresses in the recentchanges table; can be accessed only by
 * extensions (e.g. CheckUser) or a DB admin
 */
$wgPutIPinRC = true;

/**
 * Integer defining default number of entries to show on
 * special pages which are query-pages such as Special:Whatlinkshere.
 */
$wgQueryPageDefaultLimit = 50;

/**
 * Limit password attempts to X attempts per Y seconds per IP per account.
 *
 * @warning Requires memcached.
 */
$wgPasswordAttemptThrottle = array( 'count' => 5, 'seconds' => 300 );

/** @} */ # end of user rights settings

/************************************************************************//**
 * @name   Proxy scanner settings
 * @{
 */

/**
 * If you enable this, every editor's IP address will be scanned for open HTTP
 * proxies.
 *
 * @warning Don't enable this. Many sysops will report "hostile TCP port scans"
 * to your ISP and ask for your server to be shut down.
 * You have been warned.
 *
 */
$wgBlockOpenProxies = false;
/** Port we want to scan for a proxy */
$wgProxyPorts = array( 80, 81, 1080, 3128, 6588, 8000, 8080, 8888, 65506 );
/** Script used to scan */
$wgProxyScriptPath = "$IP/maintenance/proxy_check.php";
/** */
$wgProxyMemcExpiry = 86400;
/** This should always be customised in LocalSettings.php */
$wgSecretKey = false;

/**
 * Big list of banned IP addresses.
 *
 * This can have the following formats:
 * - An array of addresses, either in the values
 *   or the keys (for backward compatibility)
 * - A string, in that case this is the path to a file
 *   containing the list of IP addresses, one per line
 */
$wgProxyList = array();

/**
 * @deprecated since 1.14
 */
$wgProxyKey = false;

/** @} */ # end of proxy scanner settings

/************************************************************************//**
 * @name   Cookie settings
 * @{
 */

/**
 * Default cookie expiration time. Setting to 0 makes all cookies session-only.
 */
$wgCookieExpiration = 180*86400;

/**
 * Set to set an explicit domain on the login cookies eg, "justthis.domain.org"
 * or ".any.subdomain.net"
 */
$wgCookieDomain = '';


/**
 * Set this variable if you want to restrict cookies to a certain path within
 * the domain specified by $wgCookieDomain.
 */
$wgCookiePath = '/';

/**
 * Whether the "secure" flag should be set on the cookie. This can be:
 *   - true:      Set secure flag
 *   - false:     Don't set secure flag
 *   - "detect":  Set the secure flag if $wgServer is set to an HTTPS URL
 */
$wgCookieSecure = 'detect';

/**
 * By default, MediaWiki checks if the client supports cookies during the
 * login process, so that it can display an informative error message if
 * cookies are disabled. Set this to true if you want to disable this cookie
 * check.
 */
$wgDisableCookieCheck = false;

/**
 * Cookies generated by MediaWiki have names starting with this prefix. Set it
 * to a string to use a custom prefix. Setting it to false causes the database
 * name to be used as a prefix.
 */
$wgCookiePrefix = false;

/**
 * Set authentication cookies to HttpOnly to prevent access by JavaScript,
 * in browsers that support this feature. This can mitigates some classes of
 * XSS attack.
 */
$wgCookieHttpOnly = true;

/**
 * If the requesting browser matches a regex in this blacklist, we won't
 * send it cookies with HttpOnly mode, even if $wgCookieHttpOnly is on.
 */
$wgHttpOnlyBlacklist = array(
	// Internet Explorer for Mac; sometimes the cookies work, sometimes
	// they don't. It's difficult to predict, as combinations of path
	// and expiration options affect its parsing.
	'/^Mozilla\/4\.0 \(compatible; MSIE \d+\.\d+; Mac_PowerPC\)/',
);

/** A list of cookies that vary the cache (for use by extensions) */
$wgCacheVaryCookies = array();

/** Override to customise the session name */
$wgSessionName = false;

/** @} */  # end of cookie settings }

/************************************************************************//**
 * @name   LaTeX (mathematical formulas)
 * @{
 */

/**
 * To use inline TeX, you need to compile 'texvc' (in the 'math' subdirectory of
 * the MediaWiki package and have latex, dvips, gs (ghostscript), andconvert
 * (ImageMagick) installed and available in the PATH.
 * Please see math/README for more information.
 */
$wgUseTeX = false;

/* @} */ # end LaTeX }

/************************************************************************//**
 * @name   Profiling, testing and debugging
 *
 * To enable profiling, edit StartProfiler.php
 *
 * @{
 */

/**
 * Filename for debug logging. See http://www.mediawiki.org/wiki/How_to_debug
 * The debug log file should be not be publicly accessible if it is used, as it
 * may contain private data.
 */
$wgDebugLogFile = '';

/**
 * Prefix for debug log lines
 */
$wgDebugLogPrefix = '';

/**
 * If true, instead of redirecting, show a page with a link to the redirect
 * destination. This allows for the inspection of PHP error messages, and easy
 * resubmission of form data. For developer use only.
 */
$wgDebugRedirects = false;

/**
 * If true, log debugging data from action=raw and load.php.
 * This is normally false to avoid overlapping debug entries due to gen=css
 * and gen=js requests.
 */
$wgDebugRawPage = false;

/**
 * Send debug data to an HTML comment in the output.
 *
 * This may occasionally be useful when supporting a non-technical end-user.
 * It's more secure than exposing the debug log file to the web, since the
 * output only contains private data for the current user. But it's not ideal
 * for development use since data is lost on fatal errors and redirects.
 */
$wgDebugComments = false;

/**
 * Extensive database transaction state debugging
 *
 * @since 1.20
 */
$wgDebugDBTransactions = false;

/**
 * Write SQL queries to the debug log
 */
$wgDebugDumpSql = false;

/**
 * Set to an array of log group keys to filenames.
 * If set, wfDebugLog() output for that group will go to that file instead
 * of the regular $wgDebugLogFile. Useful for enabling selective logging
 * in production.
 */
$wgDebugLogGroups = array();

/**
 * Display debug data at the bottom of the main content area.
 *
 * Useful for developers and technical users trying to working on a closed wiki.
 */
$wgShowDebug = false;

/**
 * Prefix debug messages with relative timestamp. Very-poor man's profiler.
 * Since 1.19 also includes memory usage.
 */
$wgDebugTimestamps = false;

/**
 * Print HTTP headers for every request in the debug information.
 */
$wgDebugPrintHttpHeaders = true;

/**
 * Show the contents of $wgHooks in Special:Version
 */
$wgSpecialVersionShowHooks = false;

/**
 * Whether to show "we're sorry, but there has been a database error" pages.
 * Displaying errors aids in debugging, but may display information useful
 * to an attacker.
 */
$wgShowSQLErrors = false;

/**
 * If set to true, uncaught exceptions will print a complete stack trace
 * to output. This should only be used for debugging, as it may reveal
 * private information in function parameters due to PHP's backtrace
 * formatting.
 */
$wgShowExceptionDetails = false;

/**
 * If true, show a backtrace for database errors
 */
$wgShowDBErrorBacktrace = false;

/**
 * If true, send the exception backtrace to the error log
 */
$wgLogExceptionBacktrace = true;

/**
 * Expose backend server host names through the API and various HTML comments
 */
$wgShowHostnames = false;

/**
 * Override server hostname detection with a hardcoded value.
 * Should be a string, default false.
 * @since 1.20
 */
$wgOverrideHostname = false;

/**
 * If set to true MediaWiki will throw notices for some possible error
 * conditions and for deprecated functions.
 */
$wgDevelopmentWarnings = false;

/**
 * Release limitation to wfDeprecated warnings, if set to a release number
 * development warnings will not be generated for deprecations added in releases
 * after the limit.
 */
$wgDeprecationReleaseLimit = false;

/** Only record profiling info for pages that took longer than this */
$wgProfileLimit = 0.0;

/** Don't put non-profiling info into log file */
$wgProfileOnly = false;

/**
 * Log sums from profiling into "profiling" table in db.
 *
 * You have to create a 'profiling' table in your database before using
 * this feature, see maintenance/archives/patch-profiling.sql
 *
 * To enable profiling, edit StartProfiler.php
 */
$wgProfileToDatabase = false;

/** If true, print a raw call tree instead of per-function report */
$wgProfileCallTree = false;

/** Should application server host be put into profiling table */
$wgProfilePerHost = false;

/**
 * Host for UDP profiler.
 *
 * The host should be running a daemon which can be obtained from MediaWiki
 * Subversion at: http://svn.wikimedia.org/svnroot/mediawiki/trunk/udpprofile
 */
$wgUDPProfilerHost = '127.0.0.1';

/**
 * Port for UDP profiler.
 * @see $wgUDPProfilerHost
 */
$wgUDPProfilerPort = '3811';

/** Detects non-matching wfProfileIn/wfProfileOut calls */
$wgDebugProfiling = false;

/** Output debug message on every wfProfileIn/wfProfileOut */
$wgDebugFunctionEntry = false;

/**
 * Destination for wfIncrStats() data...
 * 'cache' to go into the system cache, if enabled (memcached)
 * 'udp' to be sent to the UDP profiler (see $wgUDPProfilerHost)
 * false to disable
 */
$wgStatsMethod = 'cache';

/**
 * When $wgStatsMethod is 'udp', setting this to a string allows statistics to
 * be aggregated over more than one wiki. The string will be used in place of
 * the DB name in outgoing UDP packets. If this is set to false, the DB name
 * will be used.
 */
$wgAggregateStatsID = false;

/** Whereas to count the number of time an article is viewed.
 * Does not work if pages are cached (for example with squid).
 */
$wgDisableCounters = false;

/**
 * Set this to an integer to only do synchronous site_stats updates
 * one every *this many* updates. The other requests go into pending
 * delta values in $wgMemc. Make sure that $wgMemc is a global cache.
 * If set to -1, updates *only* go to $wgMemc (useful for daemons).
 */
$wgSiteStatsAsyncFactor = false;

/**
 * Parser test suite files to be run by parserTests.php when no specific
 * filename is passed to it.
 *
 * Extensions may add their own tests to this array, or site-local tests
 * may be added via LocalSettings.php
 *
 * Use full paths.
 */
$wgParserTestFiles = array(
	"$IP/tests/parser/parserTests.txt",
	"$IP/tests/parser/extraParserTests.txt"
);

/**
 * If configured, specifies target CodeReview installation to send test
 * result data from 'parserTests.php --upload'
 *
 * Something like this:
 * $wgParserTestRemote = array(
 *     'api-url' => 'http://www.mediawiki.org/w/api.php',
 *     'repo'    => 'MediaWiki',
 *     'suite'   => 'ParserTests',
 *     'path'    => '/trunk/phase3', // not used client-side; for reference
 *     'secret'  => 'qmoicj3mc4mcklmqw', // Shared secret used in HMAC validation
 * );
 */
$wgParserTestRemote = false;

/**
 * Allow running of javascript test suites via [[Special:JavaScriptTest]] (such as QUnit).
 */
$wgEnableJavaScriptTest = false;

/**
 * Configuration for javascript testing.
 */
$wgJavaScriptTestConfig = array(
	'qunit' => array(
		// Page where documentation can be found relevant to the QUnit test suite being ran.
		// Used in the intro paragraph on [[Special:JavaScriptTest/qunit]] for the
		// documentation link in the "javascripttest-qunit-intro" message.
		'documentation' => '//www.mediawiki.org/wiki/Manual:JavaScript_unit_testing',
		// If you are submitting the QUnit test suite to a TestSwarm instance,
		// point this to the "inject.js" script of that instance. This is was registers
		// the QUnit hooks to extract the test results and push them back up into the
		// TestSwarm database.
		// @example 'http://localhost/testswarm/js/inject.js'
		// @example '//integration.mediawiki.org/testswarm/js/inject.js'
		'testswarm-injectjs' => false,
	),
);


/**
 * Overwrite the caching key prefix with custom value.
 * @since 1.19
 */
$wgCachePrefix = false;

/**
 * Display the new debugging toolbar. This also enables profiling on database
 * queries and other useful output.
 * Will disable file cache.
 *
 * @since 1.19
 */
$wgDebugToolbar = false;

/** @} */ # end of profiling, testing and debugging }

/************************************************************************//**
 * @name   Search
 * @{
 */

/**
 * Set this to true to disable the full text search feature.
 */
$wgDisableTextSearch = false;

/**
 * Set to true to have nicer highligted text in search results,
 * by default off due to execution overhead
 */
$wgAdvancedSearchHighlighting = false;

/**
 * Regexp to match word boundaries, defaults for non-CJK languages
 * should be empty for CJK since the words are not separate
 */
$wgSearchHighlightBoundaries = '[\p{Z}\p{P}\p{C}]';

/**
 * Set to true to have the search engine count total
 * search matches to present in the Special:Search UI.
 * Not supported by every search engine shipped with MW.
 *
 * This could however be slow on larger wikis, and is pretty flaky
 * with the current title vs content split. Recommend avoiding until
 * that's been worked out cleanly; but this may aid in testing the
 * search UI and API to confirm that the result count works.
 */
$wgCountTotalSearchHits = false;

/**
 * Template for OpenSearch suggestions, defaults to API action=opensearch
 *
 * Sites with heavy load would tipically have these point to a custom
 * PHP wrapper to avoid firing up mediawiki for every keystroke
 *
 * Placeholders: {searchTerms}
 *
 */
$wgOpenSearchTemplate = false;

/**
 * Enable OpenSearch suggestions requested by MediaWiki. Set this to
 * false if you've disabled scripts that use api?action=opensearch and
 * want reduce load caused by cached scripts still pulling suggestions.
 * It will let the API fallback by responding with an empty array.
 */
$wgEnableOpenSearchSuggest = true;

/**
 * Expiry time for search suggestion responses
 */
$wgSearchSuggestCacheExpiry = 1200;

/**
 * If you've disabled search semi-permanently, this also disables updates to the
 * table. If you ever re-enable, be sure to rebuild the search table.
 */
$wgDisableSearchUpdate = false;

/**
 * List of namespaces which are searched by default.
 *
 * @par Example:
 * @code
 * $wgNamespacesToBeSearchedDefault[NS_MAIN] = true;
 * $wgNamespacesToBeSearchedDefault[NS_PROJECT] = true;
 * @endcode
 */
$wgNamespacesToBeSearchedDefault = array(
	NS_MAIN => true,
);

/**
 * Namespaces to be searched when user clicks the "Help" tab
 * on Special:Search.
 *
 * Same format as $wgNamespacesToBeSearchedDefault.
 */
$wgNamespacesToBeSearchedHelp = array(
	NS_PROJECT => true,
	NS_HELP    => true,
);

/**
 * If set to true the 'searcheverything' preference will be effective only for
 * logged-in users.
 * Useful for big wikis to maintain different search profiles for anonymous and
 * logged-in users.
 *
 */
$wgSearchEverythingOnlyLoggedIn = false;

/**
 * Disable the internal MySQL-based search, to allow it to be
 * implemented by an extension instead.
 */
$wgDisableInternalSearch = false;

/**
 * Set this to a URL to forward search requests to some external location.
 * If the URL includes '$1', this will be replaced with the URL-encoded
 * search term.
 *
 * @par Example:
 * To forward to Google you'd have something like:
 * @code
 * $wgSearchForwardUrl =
 * 	'http://www.google.com/search?q=$1' .
 * 	'&domains=http://example.com' .
 * 	'&sitesearch=http://example.com' .
 * 	'&ie=utf-8&oe=utf-8';
 * @endcode
 */
$wgSearchForwardUrl = null;

/**
 * Search form behavior.
 * - true = use Go & Search buttons
 * - false = use Go button & Advanced search link
 */
$wgUseTwoButtonsSearchForm = true;

/**
 * Array of namespaces to generate a Google sitemap for when the
 * maintenance/generateSitemap.php script is run, or false if one is to be ge-
 * nerated for all namespaces.
 */
$wgSitemapNamespaces = false;

/**
 * Custom namespace priorities for sitemaps. Setting this will allow you to
 * set custom priorities to namsepaces when sitemaps are generated using the
 * maintenance/generateSitemap.php script.
 *
 * This should be a map of namespace IDs to priority
 * @par Example:
 * @code
 *  $wgSitemapNamespacesPriorities = array(
 *      NS_USER => '0.9',
 *      NS_HELP => '0.0',
 *  );
 * @endcode
 */
$wgSitemapNamespacesPriorities = false;

/**
 * If true, searches for IP addresses will be redirected to that IP's
 * contributions page. E.g. searching for "1.2.3.4" will redirect to
 * [[Special:Contributions/1.2.3.4]]
 */
$wgEnableSearchContributorsByIP = true;

/** @} */ # end of search settings

/************************************************************************//**
 * @name   Edit user interface
 * @{
 */

/**
 * Path to the GNU diff3 utility. If the file doesn't exist, edit conflicts will
 * fall back to the old behaviour (no merging).
 */
$wgDiff3 = '/usr/bin/diff3';

/**
 * Path to the GNU diff utility.
 */
$wgDiff = '/usr/bin/diff';

/**
 * Which namespaces have special treatment where they should be preview-on-open
 * Internaly only Category: pages apply, but using this extensions (e.g. Semantic MediaWiki)
 * can specify namespaces of pages they have special treatment for
 */
$wgPreviewOnOpenNamespaces = array(
	NS_CATEGORY => true
);

/**
 * Activate external editor interface for files and pages
 * See http://www.mediawiki.org/wiki/Manual:External_editors
 */
$wgUseExternalEditor = true;

/** Go button goes straight to the edit screen if the article doesn't exist. */
$wgGoToEdit = false;

/**
 * Enable the UniversalEditButton for browsers that support it
 * (currently only Firefox with an extension)
 * See http://universaleditbutton.org for more background information
 */
$wgUniversalEditButton = true;

/**
 * If user doesn't specify any edit summary when making a an edit, MediaWiki
 * will try to automatically create one. This feature can be disabled by set-
 * ting this variable false.
 */
$wgUseAutomaticEditSummaries = true;

/** @} */ # end edit UI }

/************************************************************************//**
 * @name   Maintenance
 * See also $wgSiteNotice
 * @{
 */

/**
 * @cond file_level_code
 * Set $wgCommandLineMode if it's not set already, to avoid notices
 */
if( !isset( $wgCommandLineMode ) ) {
	$wgCommandLineMode = false;
}
/** @endcond */

/** For colorized maintenance script output, is your terminal background dark ? */
$wgCommandLineDarkBg = false;

/**
 * Array for extensions to register their maintenance scripts with the
 * system. The key is the name of the class and the value is the full
 * path to the file
 */
$wgMaintenanceScripts = array();

/**
 * Set this to a string to put the wiki into read-only mode. The text will be
 * used as an explanation to users.
 *
 * This prevents most write operations via the web interface. Cache updates may
 * still be possible. To prevent database writes completely, use the read_only
 * option in MySQL.
 */
$wgReadOnly = null;

/**
 * If this lock file exists (size > 0), the wiki will be forced into read-only mode.
 * Its contents will be shown to users as part of the read-only warning
 * message.
 *
 * Will default to "{$wgUploadDirectory}/lock_yBgMBwiR" in Setup.php
 */
$wgReadOnlyFile = false;

/**
 * When you run the web-based upgrade utility, it will tell you what to set
 * this to in order to authorize the upgrade process. It will subsequently be
 * used as a password, to authorize further upgrades.
 *
 * For security, do not set this to a guessable string. Use the value supplied
 * by the install/upgrade process. To cause the upgrader to generate a new key,
 * delete the old key from LocalSettings.php.
 */
$wgUpgradeKey = false;

/**
 * Map GIT repository URLs to viewer URLs to provide links in Special:Version
 *
 * Key is a pattern passed to preg_match() and preg_replace(),
 * without the delimiters (which are #) and must match the whole URL.
 * The value is the replacement for the key (it can contain $1, etc.)
 * %h will be replaced by the short SHA-1 (7 first chars) and %H by the
 * full SHA-1 of the HEAD revision.
 *
 * @since 1.20
 */
$wgGitRepositoryViewers = array(
    'https://gerrit.wikimedia.org/r/p/(.*)' => 'https://gerrit.wikimedia.org/r/gitweb?p=$1;h=%H',
    'ssh://(?:[a-z0-9_]+@)?gerrit.wikimedia.org:29418/(.*)' => 'https://gerrit.wikimedia.org/r/gitweb?p=$1;h=%H',
);

/** @} */ # End of maintenance }

/************************************************************************//**
 * @name   Recent changes, new pages, watchlist and history
 * @{
 */

/**
 * Recentchanges items are periodically purged; entries older than this many
 * seconds will go.
 * Default: 13 weeks = about three months
 */
$wgRCMaxAge = 13 * 7 * 24 * 3600;

/**
 * Filter $wgRCLinkDays by $wgRCMaxAge to avoid showing links for numbers
 * higher than what will be stored. Note that this is disabled by default
 * because we sometimes do have RC data which is beyond the limit for some
 * reason, and some users may use the high numbers to display that data which
 * is still there.
 */
$wgRCFilterByAge = false;

/**
 * List of Days and Limits options to list in the Special:Recentchanges and
 * Special:Recentchangeslinked pages.
 */
$wgRCLinkLimits = array( 50, 100, 250, 500 );
$wgRCLinkDays = array( 1, 3, 7, 14, 30 );

/**
 * Send recent changes updates via UDP. The updates will be formatted for IRC.
 * Set this to the IP address of the receiver.
 */
$wgRC2UDPAddress = false;

/**
 * Port number for RC updates
 */
$wgRC2UDPPort = false;

/**
 * Prefix to prepend to each UDP packet.
 * This can be used to identify the wiki. A script is available called
 * mxircecho.py which listens on a UDP port, and uses a prefix ending in a
 * tab to identify the IRC channel to send the log line to.
 */
$wgRC2UDPPrefix = '';

/**
 * If this is set to true, $wgLocalInterwiki will be prepended to links in the
 * IRC feed. If this is set to a string, that string will be used as the prefix.
 */
$wgRC2UDPInterwikiPrefix = false;

/**
 * Set to true to omit "bot" edits (by users with the bot permission) from the
 * UDP feed.
 */
$wgRC2UDPOmitBots = false;

/**
 * Enable user search in Special:Newpages
 * This is really a temporary hack around an index install bug on some Wikipedias.
 * Kill it once fixed.
 */
$wgEnableNewpagesUserFilter = true;

/** Use RC Patrolling to check for vandalism */
$wgUseRCPatrol = true;

/** Use new page patrolling to check new pages on Special:Newpages */
$wgUseNPPatrol = true;

/** Provide syndication feeds (RSS, Atom) for, e.g., Recentchanges, Newpages */
$wgFeed = true;

/** Set maximum number of results to return in syndication feeds (RSS, Atom) for
 * eg Recentchanges, Newpages. */
$wgFeedLimit = 50;

/** _Minimum_ timeout for cached Recentchanges feed, in seconds.
 * A cached version will continue to be served out even if changes
 * are made, until this many seconds runs out since the last render.
 *
 * If set to 0, feed caching is disabled. Use this for debugging only;
 * feed generation can be pretty slow with diffs.
 */
$wgFeedCacheTimeout = 60;

/** When generating Recentchanges RSS/Atom feed, diffs will not be generated for
 * pages larger than this size. */
$wgFeedDiffCutoff = 32768;

/** Override the site's default RSS/ATOM feed for recentchanges that appears on
 * every page. Some sites might have a different feed they'd like to promote
 * instead of the RC feed (maybe like a "Recent New Articles" or "Breaking news" one).
 * Should be a format as key (either 'rss' or 'atom') and an URL to the feed
 * as value.
 * @par Example:
 * Configure the 'atom' feed to http://example.com/somefeed.xml
 * @code
 * $wgSiteFeed['atom'] = "http://example.com/somefeed.xml";
 * @endcode
 */
$wgOverrideSiteFeed = array();

/**
 * Available feeds objects.
 * Should probably only be defined when a page is syndicated ie when
 * $wgOut->isSyndicated() is true.
 */
$wgFeedClasses = array(
	'rss'  => 'RSSFeed',
	'atom' => 'AtomFeed',
);

/**
 * Which feed types should we provide by default?  This can include 'rss',
 * 'atom', neither, or both.
 */
$wgAdvertisedFeedTypes = array( 'atom' );

/** Show watching users in recent changes, watchlist and page history views */
$wgRCShowWatchingUsers = false; # UPO
/** Show watching users in Page views */
$wgPageShowWatchingUsers = false;
/** Show the amount of changed characters in recent changes */
$wgRCShowChangedSize = true;

/**
 * If the difference between the character counts of the text
 * before and after the edit is below that value, the value will be
 * highlighted on the RC page.
 */
$wgRCChangedSizeThreshold = 500;

/**
 * Show "Updated (since my last visit)" marker in RC view, watchlist and history
 * view for watched pages with new changes */
$wgShowUpdatedMarker = true;

/**
 * Disable links to talk pages of anonymous users (IPs) in listings on special
 * pages like page history, Special:Recentchanges, etc.
 */
$wgDisableAnonTalk = false;

/**
 * Enable filtering of categories in Recentchanges
 */
$wgAllowCategorizedRecentChanges = false;

/**
 * Allow filtering by change tag in recentchanges, history, etc
 * Has no effect if no tags are defined in valid_tag.
 */
$wgUseTagFilter = true;

/** @} */ # end RC/watchlist }

/************************************************************************//**
 * @name   Copyright and credits settings
 * @{
 */

/**
 * Override for copyright metadata.
 *
 * This is the name of the page containing information about the wiki's copyright status,
 * which will be added as a link in the footer if it is specified. It overrides
 * $wgRightsUrl if both are specified.
 */
$wgRightsPage = null;

/**
 * Set this to specify an external URL containing details about the content license used on your wiki.
 * If $wgRightsPage is set then this setting is ignored.
 */
$wgRightsUrl = null;

/**
 * If either $wgRightsUrl or $wgRightsPage is specified then this variable gives the text for the link.
 * If using $wgRightsUrl then this value must be specified. If using $wgRightsPage then the name of the
 * page will also be used as the link if this variable is not set.
 */
$wgRightsText = null;

/**
 * Override for copyright metadata.
 */
$wgRightsIcon = null;

/**
 * Set to an array of metadata terms. Else they will be loaded based on $wgRightsUrl
 */
$wgLicenseTerms = false;

/**
 * Set this to some HTML to override the rights icon with an arbitrary logo
 * @deprecated since 1.18 Use $wgFooterIcons['copyright']['copyright']
 */
$wgCopyrightIcon = null;

/** Set this to true if you want detailed copyright information forms on Upload. */
$wgUseCopyrightUpload = false;

/**
 * Set this to the number of authors that you want to be credited below an
 * article text. Set it to zero to hide the attribution block, and a negative
 * number (like -1) to show all authors. Note that this will require 2-3 extra
 * database hits, which can have a not insignificant impact on performance for
 * large wikis.
 */
$wgMaxCredits = 0;

/** If there are more than $wgMaxCredits authors, show $wgMaxCredits of them.
 * Otherwise, link to a separate credits page. */
$wgShowCreditsIfMax = true;

/** @} */ # end of copyright and credits settings }

/************************************************************************//**
 * @name   Import / Export
 * @{
 */

/**
 * List of interwiki prefixes for wikis we'll accept as sources for
 * Special:Import (for sysops). Since complete page history can be imported,
 * these should be 'trusted'.
 *
 * If a user has the 'import' permission but not the 'importupload' permission,
 * they will only be able to run imports through this transwiki interface.
 */
$wgImportSources = array();

/**
 * Optional default target namespace for interwiki imports.
 * Can use this to create an incoming "transwiki"-style queue.
 * Set to numeric key, not the name.
 *
 * Users may override this in the Special:Import dialog.
 */
$wgImportTargetNamespace = null;

/**
 * If set to false, disables the full-history option on Special:Export.
 * This is currently poorly optimized for long edit histories, so is
 * disabled on Wikimedia's sites.
 */
$wgExportAllowHistory = true;

/**
 * If set nonzero, Special:Export requests for history of pages with
 * more revisions than this will be rejected. On some big sites things
 * could get bogged down by very very long pages.
 */
$wgExportMaxHistory = 0;

/**
* Return distinct author list (when not returning full history)
*/
$wgExportAllowListContributors = false;

/**
 * If non-zero, Special:Export accepts a "pagelink-depth" parameter
 * up to this specified level, which will cause it to include all
 * pages linked to from the pages you specify. Since this number
 * can become *insanely large* and could easily break your wiki,
 * it's disabled by default for now.
 *
 * @warning There's a HARD CODED limit of 5 levels of recursion to prevent a
 * crazy-big export from being done by someone setting the depth number too
 * high. In other words, last resort safety net.
 */
$wgExportMaxLinkDepth = 0;

/**
* Whether to allow the "export all pages in namespace" option
*/
$wgExportFromNamespaces = false;

/**
* Whether to allow exporting the entire wiki into a single file
*/
$wgExportAllowAll = false;

/** @} */ # end of import/export }

/*************************************************************************//**
 * @name   Extensions
 * @{
 */

/**
 * A list of callback functions which are called once MediaWiki is fully
 * initialised
 */
$wgExtensionFunctions = array();

/**
 * Extension messages files.
 *
 * Associative array mapping extension name to the filename where messages can be
 * found. The file should contain variable assignments. Any of the variables
 * present in languages/messages/MessagesEn.php may be defined, but $messages
 * is the most common.
 *
 * Variables defined in extensions will override conflicting variables defined
 * in the core.
 *
 * @par Example:
 * @code
 *    $wgExtensionMessagesFiles['ConfirmEdit'] = __DIR__.'/ConfirmEdit.i18n.php';
 * @endcode
 */
$wgExtensionMessagesFiles = array();

/**
 * Parser output hooks.
 * This is an associative array where the key is an extension-defined tag
 * (typically the extension name), and the value is a PHP callback.
 * These will be called as an OutputPageParserOutput hook, if the relevant
 * tag has been registered with the parser output object.
 *
 * Registration is done with $pout->addOutputHook( $tag, $data ).
 *
 * The callback has the form:
 * @code
 *    function outputHook( $outputPage, $parserOutput, $data ) { ... }
 * @endcode
 */
$wgParserOutputHooks = array();

/**
 * List of valid skin names.
 * The key should be the name in all lower case, the value should be a properly
 * cased name for the skin. This value will be prefixed with "Skin" to create the
 * class name of the skin to load, and if the skin's class cannot be found through
 * the autoloader it will be used to load a .php file by that name in the skins directory.
 * The default skins will be added later, by Skin::getSkinNames(). Use
 * Skin::getSkinNames() as an accessor if you wish to have access to the full list.
 */
$wgValidSkinNames = array();

/**
 * Special page list.
 * See the top of SpecialPage.php for documentation.
 */
$wgSpecialPages = array();

/**
 * Array mapping class names to filenames, for autoloading.
 */
$wgAutoloadClasses = array();

/**
 * An array of extension types and inside that their names, versions, authors,
 * urls, descriptions and pointers to localized description msgs. Note that
 * the version, url, description and descriptionmsg key can be omitted.
 *
 * @code
 * $wgExtensionCredits[$type][] = array(
 *     'name' => 'Example extension',
 *     'version' => 1.9,
 *     'path' => __FILE__,
 *     'author' => 'Foo Barstein',
 *     'url' => 'http://wwww.example.com/Example%20Extension/',
 *     'description' => 'An example extension',
 *     'descriptionmsg' => 'exampleextension-desc',
 * );
 * @endcode
 *
 * Where $type is 'specialpage', 'parserhook', 'variable', 'media' or 'other'.
 * Where 'descriptionmsg' can be an array with message key and parameters:
 * 'descriptionmsg' => array( 'exampleextension-desc', param1, param2, ... ),
 */
$wgExtensionCredits = array();

/**
 * Authentication plugin.
 * @var $wgAuth AuthPlugin
 */
$wgAuth = null;

/**
 * Global list of hooks.
 *
 * The key is one of the events made available by MediaWiki, you can find
 * a description for most of them in docs/hooks.txt. The array is used
 * internally by Hook:run().
 *
 * The value can be one of:
 *
 * - A function name:
 * @code
 *     $wgHooks['event_name'][] = $function;
 * @endcode
 * - A function with some data:
 * @code
 *     $wgHooks['event_name'][] = array($function, $data);
 * @endcode
 * - A an object method:
 * @code
 *     $wgHooks['event_name'][] = array($object, 'method');
 * @endcode
 *
 * @warning You should always append to an event array or you will end up
 * deleting a previous registered hook.
 *
 * @todo Does it support PHP closures?
 */
$wgHooks = array();

/**
 * Maps jobs to their handling classes; extensions
 * can add to this to provide custom jobs
 */
$wgJobClasses = array(
	'refreshLinks'      => 'RefreshLinksJob',
	'refreshLinks2'     => 'RefreshLinksJob2',
	'htmlCacheUpdate'   => 'HTMLCacheUpdateJob',
	'html_cache_update' => 'HTMLCacheUpdateJob', // backwards-compatible
	'sendMail'          => 'EmaillingJob',
	'enotifNotify'      => 'EnotifNotifyJob',
	'fixDoubleRedirect' => 'DoubleRedirectJob',
	'uploadFromUrl'     => 'UploadFromUrlJob',
	'null'              => 'NullJob'
);

/**

 * Jobs that must be explicitly requested, i.e. aren't run by job runners unless special flags are set.
 *
 * These can be:
 * - Very long-running jobs.
 * - Jobs that you would never want to run as part of a page rendering request.
 * - Jobs that you want to run on specialized machines ( like transcoding, or a particular
 *   machine on your cluster has 'outside' web access you could restrict uploadFromUrl )
 */
$wgJobTypesExcludedFromDefaultQueue = array();

/**
 * Map of job types to configuration arrays.
 * These settings should be global to all wikis.
 */
$wgJobTypeConf = array(
	'default' => array( 'class' => 'JobQueueDB', 'order' => 'random' ),
);

/**
 * Additional functions to be performed with updateSpecialPages.
 * Expensive Querypages are already updated.
 */
$wgSpecialPageCacheUpdates = array(
	'Statistics' => array( 'SiteStatsUpdate', 'cacheUpdate' )
);

/**
 * Hooks that are used for outputting exceptions.  Format is:
 *   $wgExceptionHooks[] = $funcname
 * or:
 *   $wgExceptionHooks[] = array( $class, $funcname )
 * Hooks should return strings or false
 */
$wgExceptionHooks = array();

/**
 * Page property link table invalidation lists. When a page property
 * changes, this may require other link tables to be updated (eg
 * adding __HIDDENCAT__ means the hiddencat tracking category will
 * have been added, so the categorylinks table needs to be rebuilt).
 * This array can be added to by extensions.
 */
$wgPagePropLinkInvalidations = array(
	'hiddencat' => 'categorylinks',
);

/** @} */ # End extensions }

/*************************************************************************//**
 * @name   Categories
 * @{
 */

/**
 * Use experimental, DMOZ-like category browser
 */
$wgUseCategoryBrowser = false;

/**
 *  On  category pages, show thumbnail gallery for images belonging to that
 * category instead of listing them as articles.
 */
$wgCategoryMagicGallery = true;

/**
 * Paging limit for categories
 */
$wgCategoryPagingLimit = 200;

/**
 * Specify how category names should be sorted, when listed on a category page.
 * A sorting scheme is also known as a collation.
 *
 * Available values are:
 *
 *   - uppercase: Converts the category name to upper case, and sorts by that.
 *
 *   - identity: Does no conversion. Sorts by binary value of the string.
 *
 *   - uca-default: Provides access to the Unicode Collation Algorithm with
 *     the default element table. This is a compromise collation which sorts
 *     all languages in a mediocre way. However, it is better than "uppercase".
 *
 * To use the uca-default collation, you must have PHP's intl extension
 * installed. See http://php.net/manual/en/intl.setup.php . The details of the
 * resulting collation will depend on the version of ICU installed on the
 * server.
 *
 * After you change this, you must run maintenance/updateCollation.php to fix
 * the sort keys in the database.
 *
 * Extensions can define there own collations by subclassing Collation
 * and using the Collation::factory hook.
 */
$wgCategoryCollation = 'uppercase';

/** @} */ # End categories }

/*************************************************************************//**
 * @name   Logging
 * @{
 */

/**
 * The logging system has two levels: an event type, which describes the
 * general category and can be viewed as a named subset of all logs; and
 * an action, which is a specific kind of event that can exist in that
 * log type.
 */
$wgLogTypes = array(
	'',
	'block',
	'protect',
	'rights',
	'delete',
	'upload',
	'move',
	'import',
	'patrol',
	'merge',
	'suppress',
);

/**
 * This restricts log access to those who have a certain right
 * Users without this will not see it in the option menu and can not view it
 * Restricted logs are not added to recent changes
 * Logs should remain non-transcludable
 * Format: logtype => permissiontype
 */
$wgLogRestrictions = array(
	'suppress' => 'suppressionlog'
);

/**
 * Show/hide links on Special:Log will be shown for these log types.
 *
 * This is associative array of log type => boolean "hide by default"
 *
 * See $wgLogTypes for a list of available log types.
 *
 * @par Example:
 * @code
 *   $wgFilterLogTypes => array(
 *      'move' => true,
 *      'import' => false,
 *   );
 * @endcode
 *
 * Will display show/hide links for the move and import logs. Move logs will be
 * hidden by default unless the link is clicked. Import logs will be shown by
 * default, and hidden when the link is clicked.
 *
 * A message of the form log-show-hide-[type] should be added, and will be used
 * for the link text.
 */
$wgFilterLogTypes = array(
	'patrol' => true
);

/**
 * Lists the message key string for each log type. The localized messages
 * will be listed in the user interface.
 *
 * Extensions with custom log types may add to this array.
 *
 * @since 1.19, if you follow the naming convention log-name-TYPE,
 * where TYPE is your log type, yoy don't need to use this array.
 */
$wgLogNames = array(
	''        => 'all-logs-page',
	'block'   => 'blocklogpage',
	'protect' => 'protectlogpage',
	'rights'  => 'rightslog',
	'delete'  => 'dellogpage',
	'upload'  => 'uploadlogpage',
	'move'    => 'movelogpage',
	'import'  => 'importlogpage',
	'patrol'  => 'patrol-log-page',
	'merge'   => 'mergelog',
	'suppress' => 'suppressionlog',
);

/**
 * Lists the message key string for descriptive text to be shown at the
 * top of each log type.
 *
 * Extensions with custom log types may add to this array.
 *
 * @since 1.19, if you follow the naming convention log-description-TYPE,
 * where TYPE is your log type, yoy don't need to use this array.
 */
$wgLogHeaders = array(
	''        => 'alllogstext',
	'block'   => 'blocklogtext',
	'protect' => 'protectlogtext',
	'rights'  => 'rightslogtext',
	'delete'  => 'dellogpagetext',
	'upload'  => 'uploadlogpagetext',
	'move'    => 'movelogpagetext',
	'import'  => 'importlogpagetext',
	'patrol'  => 'patrol-log-header',
	'merge'   => 'mergelogpagetext',
	'suppress' => 'suppressionlogtext',
);

/**
 * Lists the message key string for formatting individual events of each
 * type and action when listed in the logs.
 *
 * Extensions with custom log types may add to this array.
 */
$wgLogActions = array(
	'block/block'        => 'blocklogentry',
	'block/unblock'      => 'unblocklogentry',
	'block/reblock'      => 'reblock-logentry',
	'protect/protect'    => 'protectedarticle',
	'protect/modify'     => 'modifiedarticleprotection',
	'protect/unprotect'  => 'unprotectedarticle',
	'protect/move_prot'  => 'movedarticleprotection',
	'upload/upload'      => 'uploadedimage',
	'upload/overwrite'   => 'overwroteimage',
	'upload/revert'      => 'uploadedimage',
	'import/upload'      => 'import-logentry-upload',
	'import/interwiki'   => 'import-logentry-interwiki',
	'merge/merge'        => 'pagemerge-logentry',
	'suppress/block'     => 'blocklogentry',
	'suppress/reblock'   => 'reblock-logentry',
);

/**
 * The same as above, but here values are names of functions,
 * not messages.
 * @see LogPage::actionText
 * @see LogFormatter
 */
$wgLogActionsHandlers = array(
	'move/move'          => 'MoveLogFormatter',
	'move/move_redir'    => 'MoveLogFormatter',
	'delete/delete'      => 'DeleteLogFormatter',
	'delete/restore'     => 'DeleteLogFormatter',
	'delete/revision'    => 'DeleteLogFormatter',
	'delete/event'       => 'DeleteLogFormatter',
	'suppress/revision'  => 'DeleteLogFormatter',
	'suppress/event'     => 'DeleteLogFormatter',
	'suppress/delete'    => 'DeleteLogFormatter',
	'patrol/patrol'      => 'PatrolLogFormatter',
	'rights/rights'      => 'RightsLogFormatter',
	'rights/autopromote' => 'RightsLogFormatter',
);

/**
 * Maintain a log of newusers at Log/newusers?
 */
$wgNewUserLog = true;

/** @} */ # end logging }

/*************************************************************************//**
 * @name   Special pages (general and miscellaneous)
 * @{
 */

/**
 * Allow special page inclusions such as {{Special:Allpages}}
 */
$wgAllowSpecialInclusion = true;

/**
 * Set this to an array of special page names to prevent
 * maintenance/updateSpecialPages.php from updating those pages.
 */
$wgDisableQueryPageUpdate = false;

/**
 * List of special pages, followed by what subtitle they should go under
 * at Special:SpecialPages
 */
$wgSpecialPageGroups = array(
	'DoubleRedirects'           => 'maintenance',
	'BrokenRedirects'           => 'maintenance',
	'Lonelypages'               => 'maintenance',
	'Uncategorizedpages'        => 'maintenance',
	'Uncategorizedcategories'   => 'maintenance',
	'Uncategorizedimages'       => 'maintenance',
	'Uncategorizedtemplates'    => 'maintenance',
	'Unusedcategories'          => 'maintenance',
	'Unusedimages'              => 'maintenance',
	'Protectedpages'            => 'maintenance',
	'Protectedtitles'           => 'maintenance',
	'Unusedtemplates'           => 'maintenance',
	'Withoutinterwiki'          => 'maintenance',
	'Longpages'                 => 'maintenance',
	'Shortpages'                => 'maintenance',
	'Ancientpages'              => 'maintenance',
	'Deadendpages'              => 'maintenance',
	'Wantedpages'               => 'maintenance',
	'Wantedcategories'          => 'maintenance',
	'Wantedfiles'               => 'maintenance',
	'Wantedtemplates'           => 'maintenance',
	'Unwatchedpages'            => 'maintenance',
	'Fewestrevisions'           => 'maintenance',

	'Userlogin'                 => 'login',
	'Userlogout'                => 'login',
	'CreateAccount'             => 'login',

	'Recentchanges'             => 'changes',
	'Recentchangeslinked'       => 'changes',
	'Watchlist'                 => 'changes',
	'Newimages'                 => 'changes',
	'Newpages'                  => 'changes',
	'Log'                       => 'changes',
	'Tags'                      => 'changes',

	'Upload'                    => 'media',
	'Listfiles'                 => 'media',
	'MIMEsearch'                => 'media',
	'FileDuplicateSearch'       => 'media',
	'Filepath'                  => 'media',

	'Listusers'                 => 'users',
	'Activeusers'               => 'users',
	'Listgrouprights'           => 'users',
	'BlockList'                 => 'users',
	'Contributions'             => 'users',
	'Emailuser'                 => 'users',
	'Listadmins'                => 'users',
	'Listbots'                  => 'users',
	'Userrights'                => 'users',
	'Block'                     => 'users',
	'Unblock'                   => 'users',
	'Preferences'               => 'users',
	'ChangeEmail'               => 'users',
	'ChangePassword'            => 'users',
	'DeletedContributions'      => 'users',
	'PasswordReset'             => 'users',

	'Mostlinked'                => 'highuse',
	'Mostlinkedcategories'      => 'highuse',
	'Mostlinkedtemplates'       => 'highuse',
	'Mostcategories'            => 'highuse',
	'Mostimages'                => 'highuse',
	'Mostinterwikis'            => 'highuse',
	'Mostrevisions'             => 'highuse',

	'Allpages'                  => 'pages',
	'Prefixindex'               => 'pages',
	'Listredirects'             => 'pages',
	'Categories'                => 'pages',
	'Disambiguations'           => 'pages',

	'Randompage'                => 'redirects',
	'Randomredirect'            => 'redirects',
	'Mypage'                    => 'redirects',
	'Mytalk'                    => 'redirects',
	'Mycontributions'           => 'redirects',
	'Search'                    => 'redirects',
	'LinkSearch'                => 'redirects',

	'ComparePages'              => 'pagetools',
	'Movepage'                  => 'pagetools',
	'MergeHistory'              => 'pagetools',
	'Revisiondelete'            => 'pagetools',
	'Undelete'                  => 'pagetools',
	'Export'                    => 'pagetools',
	'Import'                    => 'pagetools',
	'Whatlinkshere'             => 'pagetools',

	'Statistics'                => 'wiki',
	'Version'                   => 'wiki',
	'Lockdb'                    => 'wiki',
	'Unlockdb'                  => 'wiki',
	'Allmessages'               => 'wiki',
	'Popularpages'              => 'wiki',

	'Specialpages'              => 'other',
	'Blockme'                   => 'other',
	'Booksources'               => 'other',
	'JavaScriptTest'            => 'other',
);

/** Whether or not to sort special pages in Special:Specialpages */

$wgSortSpecialPages = true;

/**
 * On Special:Unusedimages, consider images "used", if they are put
 * into a category. Default (false) is not to count those as used.
 */
$wgCountCategorizedImagesAsUsed = false;

/**
 * Maximum number of links to a redirect page listed on
 * Special:Whatlinkshere/RedirectDestination
 */
$wgMaxRedirectLinksRetrieved = 500;

/** @} */ # end special pages }

/*************************************************************************//**
 * @name   Actions
 * @{
 */

/**
 * Array of allowed values for the "title=foo&action=<action>" parameter. Syntax is:
 *     'foo' => 'ClassName'    Load the specified class which subclasses Action
 *     'foo' => true           Load the class FooAction which subclasses Action
 *                             If something is specified in the getActionOverrides()
 *                             of the relevant Page object it will be used
 *                             instead of the default class.
 *     'foo' => false          The action is disabled; show an error message
 * Unsetting core actions will probably cause things to complain loudly.
 */
$wgActions = array(
	'credits'        => true,
	'delete'         => true,
	'edit'           => true,
	'history'        => true,
	'info'           => true,
	'markpatrolled'  => true,
	'protect'        => true,
	'purge'          => true,
	'raw'            => true,
	'render'         => true,
	'revert'         => true,
	'revisiondelete' => true,
	'rollback'       => true,
	'submit'         => true,
	'unprotect'      => true,
	'unwatch'        => true,
	'view'           => true,
	'watch'          => true,
);

/**
 * Array of disabled article actions, e.g. view, edit, delete, etc.
 * @deprecated since 1.18; just set $wgActions['action'] = false instead
 */
$wgDisabledActions = array();

/** @} */ # end actions }

/*************************************************************************//**
 * @name   Robot (search engine crawler) policy
 * See also $wgNoFollowLinks.
 * @{
 */

/**
 * Default robot policy.  The default policy is to encourage indexing and fol-
 * lowing of links.  It may be overridden on a per-namespace and/or per-page
 * basis.
 */
$wgDefaultRobotPolicy = 'index,follow';

/**
 * Robot policies per namespaces. The default policy is given above, the array
 * is made of namespace constants as defined in includes/Defines.php.  You can-
 * not specify a different default policy for NS_SPECIAL: it is always noindex,
 * nofollow.  This is because a number of special pages (e.g., ListPages) have
 * many permutations of options that display the same data under redundant
 * URLs, so search engine spiders risk getting lost in a maze of twisty special
 * pages, all alike, and never reaching your actual content.
 *
 * @par Example:
 * @code
 *   $wgNamespaceRobotPolicies = array( NS_TALK => 'noindex' );
 * @endcode
 */
$wgNamespaceRobotPolicies = array();

/**
 * Robot policies per article. These override the per-namespace robot policies.
 * Must be in the form of an array where the key part is a properly canonical-
 * ised text form title and the value is a robot policy.
 *
 * @par Example:
 * @code
 * $wgArticleRobotPolicies = array(
 * 		'Main Page' => 'noindex,follow',
 * 		'User:Bob' => 'index,follow',
 * );
 * @endcode
 *
 * @par Example that DOES NOT WORK because the names are not canonical text
 * forms:
 * @code
 *   $wgArticleRobotPolicies = array(
 *     # Underscore, not space!
 *     'Main_Page' => 'noindex,follow',
 *     # "Project", not the actual project name!
 *     'Project:X' => 'index,follow',
 *     # Needs to be "Abc", not "abc" (unless $wgCapitalLinks is false for that namespace)!
 *     'abc' => 'noindex,nofollow'
 *   );
 * @endcode
 */
$wgArticleRobotPolicies = array();

/**
 * An array of namespace keys in which the __INDEX__/__NOINDEX__ magic words
 * will not function, so users can't decide whether pages in that namespace are
 * indexed by search engines.  If set to null, default to $wgContentNamespaces.
 *
 * @par Example:
 * @code
 *   $wgExemptFromUserRobotsControl = array( NS_MAIN, NS_TALK, NS_PROJECT );
 * @endcode
 */
$wgExemptFromUserRobotsControl = null;

/** @} */ # End robot policy }

/************************************************************************//**
 * @name   AJAX and API
 * Note: The AJAX entry point which this section refers to is gradually being
 * replaced by the API entry point, api.php. They are essentially equivalent.
 * Both of them are used for dynamic client-side features, via XHR.
 * @{
 */

/**
 * Enable the MediaWiki API for convenient access to
 * machine-readable data via api.php
 *
 * See http://www.mediawiki.org/wiki/API
 */
$wgEnableAPI = true;

/**
 * Allow the API to be used to perform write operations
 * (page edits, rollback, etc.) when an authorised user
 * accesses it
 */
$wgEnableWriteAPI = true;

/**
 * API module extensions.
 * Associative array mapping module name to class name.
 * Extension modules may override the core modules.
 * @todo Describe each of the variables, group them and add examples
 */
$wgAPIModules = array();
$wgAPIMetaModules = array();
$wgAPIPropModules = array();
$wgAPIListModules = array();
$wgAPIGeneratorModules = array();

/**
 * Maximum amount of rows to scan in a DB query in the API
 * The default value is generally fine
 */
$wgAPIMaxDBRows = 5000;

/**
 * The maximum size (in bytes) of an API result.
 * @warning Do not set this lower than $wgMaxArticleSize*1024
 */
$wgAPIMaxResultSize = 8388608;

/**
 * The maximum number of uncached diffs that can be retrieved in one API
 * request. Set this to 0 to disable API diffs altogether
 */
$wgAPIMaxUncachedDiffs = 1;

/**
 * Log file or URL (TCP or UDP) to log API requests to, or false to disable
 * API request logging
 */
$wgAPIRequestLog = false;

/**
 * Set the timeout for the API help text cache. If set to 0, caching disabled
 */
$wgAPICacheHelpTimeout = 60*60;

/**
 * Enable AJAX framework
 */
$wgUseAjax = true;

/**
 * List of Ajax-callable functions.
 * Extensions acting as Ajax callbacks must register here
 */
$wgAjaxExportList = array();

/**
 * Enable watching/unwatching pages using AJAX.
 * Requires $wgUseAjax to be true too.
 */
$wgAjaxWatch = true;

/**
 * Enable AJAX check for file overwrite, pre-upload
 */
$wgAjaxUploadDestCheck = true;

/**
 * Enable previewing licences via AJAX. Also requires $wgEnableAPI to be true.
 */
$wgAjaxLicensePreview = true;

/**
 * Settings for incoming cross-site AJAX requests:
 * Newer browsers support cross-site AJAX when the target resource allows requests
 * from the origin domain by the Access-Control-Allow-Origin header.
 * This is currently only used by the API (requests to api.php)
 * $wgCrossSiteAJAXdomains can be set using a wildcard syntax:
 *
 * - '*' matches any number of characters
 * - '?' matches any 1 character
 *
 * @par Example:
 * @code
 * $wgCrossSiteAJAXdomains = array(
 * 	'www.mediawiki.org',
 * 	'*.wikipedia.org',
 * 	'*.wikimedia.org',
 * 	'*.wiktionary.org',
 * );
 * @endcode
 */
$wgCrossSiteAJAXdomains = array();

/**
 * Domains that should not be allowed to make AJAX requests,
 * even if they match one of the domains allowed by $wgCrossSiteAJAXdomains
 * Uses the same syntax as $wgCrossSiteAJAXdomains
 */

$wgCrossSiteAJAXdomainExceptions = array();

/** @} */ # End AJAX and API }

/************************************************************************//**
 * @name   Shell and process control
 * @{
 */

/**
 * Maximum amount of virtual memory available to shell processes under linux, in KB.
 */
$wgMaxShellMemory = 102400;

/**
 * Maximum file size created by shell processes under linux, in KB
 * ImageMagick convert for example can be fairly hungry for scratch space
 */
$wgMaxShellFileSize = 102400;

/**
 * Maximum CPU time in seconds for shell processes under linux
 */
$wgMaxShellTime = 180;

/**
 * Executable path of the PHP cli binary (php/php5). Should be set up on install.
 */
$wgPhpCli = '/usr/bin/php';

/**
 * Locale for LC_CTYPE, to work around http://bugs.php.net/bug.php?id=45132
 * For Unix-like operating systems, set this to to a locale that has a UTF-8
 * character set. Only the character set is relevant.
 */
$wgShellLocale = 'en_US.utf8';

/** @} */ # End shell }

/************************************************************************//**
 * @name   HTTP client
 * @{
 */

/**
 * Timeout for HTTP requests done internally
 */
$wgHTTPTimeout = 25;

/**
 * Timeout for Asynchronous (background) HTTP requests
 */
$wgAsyncHTTPTimeout = 25;

/**
 * Proxy to use for CURL requests.
 */
$wgHTTPProxy = false;

/** @} */ # End HTTP client }

/************************************************************************//**
 * @name   Job queue
 * See also $wgEnotifUseJobQ.
 * @{
 */

/**
 * Number of jobs to perform per request. May be less than one in which case
 * jobs are performed probabalistically. If this is zero, jobs will not be done
 * during ordinary apache requests. In this case, maintenance/runJobs.php should
 * be run periodically.
 */
$wgJobRunRate = 1;

/**
 * Number of rows to update per job
 */
$wgUpdateRowsPerJob = 500;

/**
 * Number of rows to update per query
 */
$wgUpdateRowsPerQuery = 100;

/** @} */ # End job queue }

/************************************************************************//**
 * @name   HipHop compilation
 * @{
 */

/**
 * The build directory for HipHop compilation.
 * Defaults to '$IP/maintenance/hiphop/build'.
 */
$wgHipHopBuildDirectory = false;

/**
 * The HipHop build type. Can be either "Debug" or "Release".
 */
$wgHipHopBuildType = 'Debug';

/**
 * Number of parallel processes to use during HipHop compilation, or "detect"
 * to guess from system properties.
 */
$wgHipHopCompilerProcs = 'detect';

/**
 * Filesystem extensions directory. Defaults to $IP/../extensions.
 *
 * To compile extensions with HipHop, set $wgExtensionsDirectory correctly,
 * and use code like:
 * @code
 *    require( MWInit::extensionSetupPath( 'Extension/Extension.php' ) );
 * @endcode
 *
 * to include the extension setup file from LocalSettings.php. It is not
 * necessary to set this variable unless you use MWInit::extensionSetupPath().
 */
$wgExtensionsDirectory = false;

/**
 * A list of files that should be compiled into a HipHop build, in addition to
 * those listed in $wgAutoloadClasses. Add to this array in an extension setup
 * file in order to add files to the build.
 *
 * The files listed here must either be either absolute paths under $IP or
 * under $wgExtensionsDirectory, or paths relative to the virtual source root
 * "$IP/..", i.e. starting with "phase3" for core files, and "extensions" for
 * extension files.
 */
$wgCompiledFiles = array();

/** @} */ # End of HipHop compilation }


/************************************************************************//**
 * @name   Mobile support
 * @{
 */

/**
 * Name of the class used for mobile device detection, must be inherited from
 * IDeviceDetector.
 */
$wgDeviceDetectionClass = 'DeviceDetection';

/** @} */ # End of Mobile support }

/************************************************************************//**
 * @name   Miscellaneous
 * @{
 */

/** Name of the external diff engine to use */
$wgExternalDiffEngine = false;

/**
 * Disable redirects to special pages and interwiki redirects, which use a 302
 * and have no "redirected from" link.
 *
 * @note This is only for articles with #REDIRECT in them. URL's containing a
 * local interwiki prefix (or a non-canonical special page name) are still hard
 * redirected regardless of this setting.
 */
$wgDisableHardRedirects = false;

/**
 * LinkHolderArray batch size
 * For debugging
 */
$wgLinkHolderBatchSize = 1000;

/**
 * By default MediaWiki does not register links pointing to same server in
 * externallinks dataset, use this value to override:
 */
$wgRegisterInternalExternals = false;

/**
 * Maximum number of pages to move at once when moving subpages with a page.
 */
$wgMaximumMovedPages = 100;

/**
 * Fix double redirects after a page move.
 * Tends to conflict with page move vandalism, use only on a private wiki.
 */
$wgFixDoubleRedirects = false;

/**
 * Allow redirection to another page when a user logs in.
 * To enable, set to a string like 'Main Page'
 */
$wgRedirectOnLogin = null;

/**
 * Configuration for processing pool control, for use in high-traffic wikis.
 * An implementation is provided in the PoolCounter extension.
 *
 * This configuration array maps pool types to an associative array. The only
 * defined key in the associative array is "class", which gives the class name.
 * The remaining elements are passed through to the class as constructor
 * parameters.
 *
 * @par Example:
 * @code
 *   $wgPoolCounterConf = array( 'ArticleView' => array(
 *     'class' => 'PoolCounter_Client',
 *     'timeout' => 15, // wait timeout in seconds
 *     'workers' => 5, // maximum number of active threads in each pool
 *     'maxqueue' => 50, // maximum number of total threads in each pool
 *     ... any extension-specific options...
 *   );
 * @endcode
 */
$wgPoolCounterConf = null;

/**
 * To disable file delete/restore temporarily
 */
$wgUploadMaintenance = false;

/**
 * Allows running of selenium tests via maintenance/tests/RunSeleniumTests.php
 */
$wgEnableSelenium = false;
$wgSeleniumTestConfigs = array();
$wgSeleniumConfigFile = null;
$wgDBtestuser = ''; //db user that has permission to create and drop the test databases only
$wgDBtestpassword = '';

/**
 * Associative array mapping namespace IDs to the name of the content model pages in that namespace should have by
 * default (use the CONTENT_MODEL_XXX constants). If no special content type is defined for a given namespace,
 * pages in that namespace will  use the CONTENT_MODEL_WIKITEXT (except for the special case of JS and CS pages).
 *
 * @since 1.21
 */
$wgNamespaceContentModels = array();

/**
 * How to react if a plain text version of a non-text Content object is requested using ContentHandler::getContentText():
 *
 * * 'ignore': return null
 * * 'fail': throw an MWException
 * * 'serialize': serialize to default format
 *
 * @since 1.21
 */
$wgContentHandlerTextFallback = 'ignore';

/**
 * Set to false to disable use of the database fields introduced by the ContentHandler facility.
 * This way, the ContentHandler facility can be used without any additional information in the database.
 * A page's content model is then derived solely from the page's title. This however means that changing
 * a page's default model (e.g. using $wgNamespaceContentModels) will break the page and/or make the content
 * inaccessible. This also means that pages can not be moved to a title that would default to a different
 * content model.
 *
 * Overall, with $wgContentHandlerUseDB = false, no database updates are needed, but content handling
 * is less robust and less flexible.
 *
 * @since 1.21
 */
$wgContentHandlerUseDB = false;

/**
 * Determines which types of text are parsed as wikitext. This does not imply that these kinds
 * of texts are also rendered as wikitext, it only means that links, magic words, etc will have
 * the effect on the database they would have on a wikitext page.
 *
 * @todo: On the long run, it would be nice to put categories etc into a separate structure,
 * or at least parse only the contents of comments in the scripts.
 *
 * @since 1.21
 */
$wgTextModelsToParse = array(
	CONTENT_MODEL_WIKITEXT,    // Just for completeness, wikitext will always be parsed.
	CONTENT_MODEL_JAVASCRIPT,  // Make categories etc work, people put them into comments.
	CONTENT_MODEL_CSS,         // Make categories etc work, people put them into comments.
);

/**
 * Whether the user must enter their password to change their e-mail address
 *
 * @since 1.20
 */
$wgRequirePasswordforEmailChange = true;

/**
 * Register handlers for specific types of sites.
 *
 * @since 1.20
 */
$wgSiteTypes = array();
$wgSiteTypes['mediawiki'] = 'MediaWikiSite';

/**
 * For really cool vim folding this needs to be at the end:
 * vim: foldmarker=@{,@} foldmethod=marker
 * @}
 */
