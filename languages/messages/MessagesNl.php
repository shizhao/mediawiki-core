<?php
/** Dutch (Nederlands)
 *
 * See MessagesQqq.php for message documentation incl. usage of parameters
 * To improve a translation please visit http://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Annabel
 * @author AvatarTeam
 * @author B4bol4t
 * @author DasRakel
 * @author Effeietsanders
 * @author Erwin
 * @author Erwin85
 * @author Extended by Hendrik Maryns <hendrik.maryns@uni-tuebingen.de>, March 2007.
 * @author Fryed-peach
 * @author Galwaygirl
 * @author GerardM
 * @author Hamaryns
 * @author Jens Liebenau
 * @author Kaganer
 * @author Krinkle
 * @author MarkvA
 * @author McDutchie
 * @author Mihxil
 * @author Multichill
 * @author Mwpnl
 * @author Naudefj
 * @author Niels
 * @author Paul B
 * @author Romaine
 * @author SPQRobin
 * @author Saruman
 * @author Servien
 * @author Siebrand
 * @author Slomox
 * @author TBloemink
 * @author Tedjuh10
 * @author Tjcool007
 * @author Trijnstel
 * @author Troefkaart
 * @author Tvdm
 * @author Wiki13
 * @author לערי ריינהארט
 */

$separatorTransformTable = array( ',' => '.', '.' => ',' );

$namespaceNames = array(
	NS_MEDIA            => 'Media',
	NS_SPECIAL          => 'Speciaal',
	NS_TALK             => 'Overleg',
	NS_USER             => 'Gebruiker',
	NS_USER_TALK        => 'Overleg_gebruiker',
	NS_PROJECT_TALK     => 'Overleg_$1',
	NS_FILE             => 'Bestand',
	NS_FILE_TALK        => 'Overleg_bestand',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'Overleg_MediaWiki',
	NS_TEMPLATE         => 'Sjabloon',
	NS_TEMPLATE_TALK    => 'Overleg_sjabloon',
	NS_HELP             => 'Help',
	NS_HELP_TALK        => 'Overleg_help',
	NS_CATEGORY         => 'Categorie',
	NS_CATEGORY_TALK    => 'Overleg_categorie',
);

$namespaceAliases = array(
	'Afbeelding' => NS_FILE,
	'Overleg_afbeelding' => NS_FILE_TALK,
);

$datePreferences = array(
	'default',
	'dmy',
	'ymd',
	'ISO 8601',
);

$defaultDateFormat = 'dmy';

$dateFormats = array(
	'dmy time' => 'H:i',
	'dmy date' => 'j M Y',
	'dmy both' => 'j M Y H:i',

	'ymd time' => 'H:i',
	'ymd date' => 'Y M j',
	'ymd both' => 'Y M j H:i',
);

$bookstoreList = array(
	'Koninklijke Bibliotheek' => 'http://opc4.kb.nl/DB=1/SET=5/TTL=1/CMD?ACT=SRCH&IKT=1007&SRT=RLV&TRM=$1'
);

$magicWords = array(
	'redirect'                  => array( '0', '#DOORVERWIJZING', '#REDIRECT' ),
	'notoc'                     => array( '0', '__GEENINHOUD__', '__NOTOC__' ),
	'nogallery'                 => array( '0', '__GEEN_GALERIJ__', '__NOGALLERY__' ),
	'forcetoc'                  => array( '0', '__INHOUD_DWINGEN__', '__FORCEERINHOUD__', '__FORCETOC__' ),
	'toc'                       => array( '0', '__INHOUD__', '__TOC__' ),
	'noeditsection'             => array( '0', '__NIETBEWERKBARESECTIE__', '__NOEDITSECTION__' ),
	'currentmonth'              => array( '1', 'HUIDIGEMAAND', 'HUIDIGEMAAND2', 'CURRENTMONTH', 'CURRENTMONTH2' ),
	'currentmonth1'             => array( '1', 'HUIDIGEMAAND1', 'CURRENTMONTH1' ),
	'currentmonthname'          => array( '1', 'HUIDIGEMAANDNAAM', 'CURRENTMONTHNAME' ),
	'currentmonthnamegen'       => array( '1', 'HUIDIGEMAANDGEN', 'CURRENTMONTHNAMEGEN' ),
	'currentmonthabbrev'        => array( '1', 'HUIDIGEMAANDAFK', 'CURRENTMONTHABBREV' ),
	'currentday'                => array( '1', 'HUIDIGEDAG', 'CURRENTDAY' ),
	'currentday2'               => array( '1', 'HUIDIGEDAG2', 'CURRENTDAY2' ),
	'currentdayname'            => array( '1', 'HUIDIGEDAGNAAM', 'CURRENTDAYNAME' ),
	'currentyear'               => array( '1', 'HUIDIGJAAR', 'CURRENTYEAR' ),
	'currenttime'               => array( '1', 'HUIDIGETIJD', 'CURRENTTIME' ),
	'currenthour'               => array( '1', 'HUIDIGUUR', 'CURRENTHOUR' ),
	'localmonth'                => array( '1', 'PLAATSELIJKEMAAND', 'LOKALEMAAND', 'LOKALEMAAND2', 'LOCALMONTH', 'LOCALMONTH2' ),
	'localmonth1'               => array( '1', 'LOKALEMAAND1', 'LOCALMONTH1' ),
	'localmonthname'            => array( '1', 'PLAATSELIJKEMAANDNAAM', 'LOKALEMAANDNAAM', 'LOCALMONTHNAME' ),
	'localmonthnamegen'         => array( '1', 'PLAATSELIJKEMAANDNAAMGEN', 'LOKALEMAANDNAAMGEN', 'LOCALMONTHNAMEGEN' ),
	'localmonthabbrev'          => array( '1', 'PLAATSELIJKEMAANDAFK', 'LOKALEMAANDAFK', 'LOCALMONTHABBREV' ),
	'localday'                  => array( '1', 'PLAATSELIJKEDAG', 'LOKALEDAG', 'LOCALDAY' ),
	'localday2'                 => array( '1', 'PLAATSELIJKEDAG2', 'LOKALEDAG2', 'LOCALDAY2' ),
	'localdayname'              => array( '1', 'PLAATSELIJKEDAGNAAM', 'LOKALEDAGNAAM', 'LOCALDAYNAME' ),
	'localyear'                 => array( '1', 'PLAATSELIJKJAAR', 'LOKAALJAAR', 'LOCALYEAR' ),
	'localtime'                 => array( '1', 'PLAATSELIJKETIJD', 'LOKALETIJD', 'LOCALTIME' ),
	'localhour'                 => array( '1', 'PLAATSELIJKUUR', 'LOKAALUUR', 'LOCALHOUR' ),
	'numberofpages'             => array( '1', 'AANTALPAGINAS', 'AANTALPAGINA\'S', 'AANTALPAGINA’S', 'NUMBEROFPAGES' ),
	'numberofarticles'          => array( '1', 'AANTALARTIKELEN', 'NUMBEROFARTICLES' ),
	'numberoffiles'             => array( '1', 'AANTALBESTANDEN', 'NUMBEROFFILES' ),
	'numberofusers'             => array( '1', 'AANTALGEBRUIKERS', 'NUMBEROFUSERS' ),
	'numberofactiveusers'       => array( '1', 'AANTALACTIEVEGEBRUIKERS', 'ACTIEVEGEBRUIKERS', 'NUMBEROFACTIVEUSERS' ),
	'numberofedits'             => array( '1', 'AANTALBEWERKINGEN', 'NUMBEROFEDITS' ),
	'numberofviews'             => array( '1', 'AANTALKERENBEKEKEN', 'NUMBEROFVIEWS' ),
	'pagename'                  => array( '1', 'PAGINANAAM', 'PAGENAME' ),
	'pagenamee'                 => array( '1', 'PAGINANAAME', 'PAGENAMEE' ),
	'namespace'                 => array( '1', 'NAAMRUIMTE', 'NAMESPACE' ),
	'namespacee'                => array( '1', 'NAAMRUIMTEE', 'NAMESPACEE' ),
	'namespacenumber'           => array( '1', 'NAAMRUIMTENUMMER', 'NAMESPACENUMBER' ),
	'talkspace'                 => array( '1', 'OVERLEGRUIMTE', 'TALKSPACE' ),
	'talkspacee'                => array( '1', 'OVERLEGRUIMTEE', 'TALKSPACEE' ),
	'subjectspace'              => array( '1', 'ONDERWERPRUIMTE', 'ARTIKELRUIMTE', 'SUBJECTSPACE', 'ARTICLESPACE' ),
	'subjectspacee'             => array( '1', 'ONDERWERPRUIMTEE', 'ARTIKELRUIMTEE', 'SUBJECTSPACEE', 'ARTICLESPACEE' ),
	'fullpagename'              => array( '1', 'VOLLEDIGEPAGINANAAM', 'FULLPAGENAME' ),
	'fullpagenamee'             => array( '1', 'VOLLEDIGEPAGINANAAME', 'FULLPAGENAMEE' ),
	'subpagename'               => array( '1', 'DEELPAGINANAAM', 'SUBPAGENAME' ),
	'subpagenamee'              => array( '1', 'DEELPAGINANAAME', 'SUBPAGENAMEE' ),
	'basepagename'              => array( '1', 'BASISPAGINANAAM', 'BASEPAGENAME' ),
	'basepagenamee'             => array( '1', 'BASISPAGINANAAME', 'BASEPAGENAMEE' ),
	'talkpagename'              => array( '1', 'OVERLEGPAGINANAAM', 'TALKPAGENAME' ),
	'talkpagenamee'             => array( '1', 'OVERLEGPAGINANAAME', 'TALKPAGENAMEE' ),
	'subjectpagename'           => array( '1', 'ONDERWERPPAGINANAAM', 'ARTIKELPAGINANAAM', 'SUBJECTPAGENAME', 'ARTICLEPAGENAME' ),
	'subjectpagenamee'          => array( '1', 'ONDERWERPPAGINANAAME', 'ARTIKELPAGINANAAME', 'SUBJECTPAGENAMEE', 'ARTICLEPAGENAMEE' ),
	'msg'                       => array( '0', 'BERICHT:', 'MSG:' ),
	'subst'                     => array( '0', 'VERV:', 'SUBST:' ),
	'safesubst'                 => array( '0', 'VEILIGVERV:', 'SAFESUBST:' ),
	'msgnw'                     => array( '0', 'BERICHTNW', 'MSGNW:' ),
	'img_thumbnail'             => array( '1', 'miniatuur', 'thumbnail', 'thumb' ),
	'img_manualthumb'           => array( '1', 'miniatuur=$1', 'thumbnail=$1', 'thumb=$1' ),
	'img_right'                 => array( '1', 'rechts', 'right' ),
	'img_left'                  => array( '1', 'links', 'left' ),
	'img_none'                  => array( '1', 'geen', 'none' ),
	'img_center'                => array( '1', 'gecentreerd', 'center', 'centre' ),
	'img_framed'                => array( '1', 'omkaderd', 'framed', 'enframed', 'frame' ),
	'img_frameless'             => array( '1', 'kaderloos', 'frameless' ),
	'img_page'                  => array( '1', 'pagina=$1', 'pagina $1', 'page=$1', 'page $1' ),
	'img_upright'               => array( '1', 'rechtop', 'rechtop=$1', 'rechtop$1', 'upright', 'upright=$1', 'upright $1' ),
	'img_border'                => array( '1', 'rand', 'border' ),
	'img_baseline'              => array( '1', 'grondlijn', 'baseline' ),
	'img_top'                   => array( '1', 'boven', 'top' ),
	'img_text_top'              => array( '1', 'tekst-boven', 'text-top' ),
	'img_middle'                => array( '1', 'midden', 'middle' ),
	'img_bottom'                => array( '1', 'beneden', 'bottom' ),
	'img_text_bottom'           => array( '1', 'tekst-beneden', 'text-bottom' ),
	'img_link'                  => array( '1', 'verwijzing=$1', 'link=$1' ),
	'sitename'                  => array( '1', 'SITENAAM', 'SITENAME' ),
	'ns'                        => array( '0', 'NR:', 'NS:' ),
	'nse'                       => array( '0', 'NRE:', 'NSE:' ),
	'localurl'                  => array( '0', 'LOKALEURL', 'LOCALURL:' ),
	'localurle'                 => array( '0', 'LOKALEURLE', 'LOCALURLE:' ),
	'articlepath'               => array( '0', 'ARTIKELPAD', 'ARTICLEPATH' ),
	'pageid'                    => array( '0', 'PAGINAID', 'PAGEID' ),
	'servername'                => array( '0', 'SERVERNAAM', 'SERVERNAME' ),
	'scriptpath'                => array( '0', 'SCRIPTPAD', 'SCRIPTPATH' ),
	'stylepath'                 => array( '0', 'STIJLPAD', 'STYLEPATH' ),
	'grammar'                   => array( '0', 'GRAMMATICA:', 'GRAMMAR:' ),
	'gender'                    => array( '0', 'GESLACHT:', 'GENDER:' ),
	'notitleconvert'            => array( '0', '__GEENPAGINANAAMCONVERSIE__', '__GEENTITELCONVERSIE__', '__GEENTC__', '__NOTITLECONVERT__', '__NOTC__' ),
	'nocontentconvert'          => array( '0', '__GEENINHOUDCONVERSIE__', '__GEENIC__', '__NOCONTENTCONVERT__', '__NOCC__' ),
	'currentweek'               => array( '1', 'HUIDIGEWEEK', 'CURRENTWEEK' ),
	'currentdow'                => array( '1', 'HUIDIGEDVDW', 'CURRENTDOW' ),
	'localweek'                 => array( '1', 'PLAATSELIJKEWEEK', 'LOKALEWEEK', 'LOCALWEEK' ),
	'localdow'                  => array( '1', 'PLAATSELIJKEDVDW', 'LOKALEDVDW', 'LOCALDOW' ),
	'revisionid'                => array( '1', 'VERSIEID', 'REVISIONID' ),
	'revisionday'               => array( '1', 'VERSIEDAG', 'REVISIONDAY' ),
	'revisionday2'              => array( '1', 'VERSIEDAG2', 'REVISIONDAY2' ),
	'revisionmonth'             => array( '1', 'VERSIEMAAND', 'REVISIONMONTH' ),
	'revisionmonth1'            => array( '1', 'VERSIEMAAND1', 'REVISIONMONTH1' ),
	'revisionyear'              => array( '1', 'VERSIEJAAR', 'REVISIONYEAR' ),
	'revisiontimestamp'         => array( '1', 'VERSIETIJD', 'REVISIONTIMESTAMP' ),
	'revisionuser'              => array( '1', 'VERSIEGEBRUIKER', 'REVISIONUSER' ),
	'plural'                    => array( '0', 'MEERVOUD:', 'PLURAL:' ),
	'fullurl'                   => array( '0', 'VOLLEDIGEURL:', 'FULLURL:' ),
	'fullurle'                  => array( '0', 'VOLLEDIGEURLE:', 'FULLURLE:' ),
	'canonicalurl'              => array( '0', 'CANOIEKEURL:', 'CANONICALURL:' ),
	'canonicalurle'             => array( '0', 'CANONIEKEURLE:', 'CANONICALURLE:' ),
	'lcfirst'                   => array( '0', 'KLEERSTE:', 'LCFIRST:' ),
	'ucfirst'                   => array( '0', 'GLEERSTE:', 'HLEERSTE:', 'UCFIRST:' ),
	'lc'                        => array( '0', 'KL:', 'LC:' ),
	'uc'                        => array( '0', 'HL:', 'UC:' ),
	'raw'                       => array( '0', 'RAUW:', 'RUW:', 'RAW:' ),
	'displaytitle'              => array( '1', 'WEERGEGEVENTITEL', 'TOONTITEL', 'DISPLAYTITLE' ),
	'rawsuffix'                 => array( '1', 'V', 'R' ),
	'newsectionlink'            => array( '1', '__NIEUWESECTIELINK__', '__NIEUWESECTIEKOPPELING__', '__NEWSECTIONLINK__' ),
	'nonewsectionlink'          => array( '1', '__GEENNIEUWESECTIELINK__', '__GEENNIEUWKOPJEVERWIJZING__', '__NONEWSECTIONLINK__' ),
	'currentversion'            => array( '1', 'HUIDIGEVERSIE', 'CURRENTVERSION' ),
	'urlencode'                 => array( '0', 'URLCODEREN', 'CODEERURL', 'URLENCODE:' ),
	'anchorencode'              => array( '0', 'ANKERCODEREN', 'CODEERANKER', 'ANCHORENCODE' ),
	'currenttimestamp'          => array( '1', 'HUIDIGETIJDSTEMPEL', 'CURRENTTIMESTAMP' ),
	'localtimestamp'            => array( '1', 'PLAATSELIJKETIJDSTEMPEL', 'LOKALETIJDSTEMPEL', 'LOCALTIMESTAMP' ),
	'directionmark'             => array( '1', 'RICHTINGMARKERING', 'RICHTINGSMARKERING', 'DIRECTIONMARK', 'DIRMARK' ),
	'language'                  => array( '0', '#TAAL:', '#LANGUAGE:' ),
	'contentlanguage'           => array( '1', 'INHOUDSTAAL', 'INHOUDTAAL', 'CONTENTLANGUAGE', 'CONTENTLANG' ),
	'pagesinnamespace'          => array( '1', 'PAGINASINNAAMRUIMTE', 'PAGINA’SINNAAMRUIMTE', 'PAGINA\'SINNAAMRUIMTE', 'PAGESINNAMESPACE:', 'PAGESINNS:' ),
	'numberofadmins'            => array( '1', 'AANTALBEHEERDERS', 'AANTALADMINS', 'NUMBEROFADMINS' ),
	'formatnum'                 => array( '0', 'FORMATTEERNUM', 'NUMFORMATTEREN', 'FORMATNUM' ),
	'padleft'                   => array( '0', 'LINKSOPVULLEN', 'PADLEFT' ),
	'padright'                  => array( '0', 'RECHTSOPVULLEN', 'PADRIGHT' ),
	'special'                   => array( '0', 'speciaal', 'special' ),
	'speciale'                  => array( '0', 'speciaale', 'speciale' ),
	'defaultsort'               => array( '1', 'STANDAARDSORTERING:', 'DEFAULTSORT:', 'DEFAULTSORTKEY:', 'DEFAULTCATEGORYSORT:' ),
	'filepath'                  => array( '0', 'BESTANDSPAD:', 'FILEPATH:' ),
	'tag'                       => array( '0', 'label', 'tag' ),
	'hiddencat'                 => array( '1', '__VERBORGENCAT__', '__HIDDENCAT__' ),
	'pagesincategory'           => array( '1', 'PAGINASINCATEGORIE', 'PAGINASINCAT', 'PAGESINCATEGORY', 'PAGESINCAT' ),
	'pagesize'                  => array( '1', 'PAGINAGROOTTE', 'PAGESIZE' ),
	'noindex'                   => array( '1', '__GEENINDEX__', '__NOINDEX__' ),
	'numberingroup'             => array( '1', 'AANTALINGROEP', 'NUMBERINGROUP', 'NUMINGROUP' ),
	'staticredirect'            => array( '1', '__STATISCHEDOORVERWIJZING__', '__STATISCHEREDIRECT__', '__STATICREDIRECT__' ),
	'protectionlevel'           => array( '1', 'BEVEILIGINGSNIVEAU', 'PROTECTIONLEVEL' ),
	'formatdate'                => array( '0', 'datumopmaak', 'formatdate', 'dateformat' ),
	'url_path'                  => array( '0', 'PAD', 'PATH' ),
	'url_query'                 => array( '0', 'ZOEKOPDRACHT', 'QUERY' ),
	'defaultsort_noerror'       => array( '0', 'geenfout', 'noerror' ),
	'defaultsort_noreplace'     => array( '0', 'nietvervangen', 'noreplace' ),
	'pagesincategory_all'       => array( '0', 'alle', 'all' ),
	'pagesincategory_pages'     => array( '0', 'paginas', 'pages' ),
	'pagesincategory_subcats'   => array( '0', 'ondercategorieen', 'subcats' ),
	'pagesincategory_files'     => array( '0', 'bestanden', 'files' ),
);

$specialPageAliases = array(
	'Activeusers'               => array( 'ActieveGebruikers' ),
	'Allmessages'               => array( 'AlleBerichten', 'Systeemberichten' ),
	'Allpages'                  => array( 'AllePaginas', 'AllePagina’s', 'AllePagina\'s' ),
	'Ancientpages'              => array( 'OudstePaginas', 'OudstePagina’s', 'OudstePagina\'s' ),
	'Badtitle'                  => array( 'OnjuistePaginanaam' ),
	'Blankpage'                 => array( 'LegePagina' ),
	'Block'                     => array( 'Blokkeren', 'IPblokkeren', 'BlokkeerIP', 'BlokkeerIp' ),
	'Blockme'                   => array( 'BlokkeerMij', 'MijBlokkeren' ),
	'Booksources'               => array( 'Boekbronnen', 'Boekinformatie' ),
	'BrokenRedirects'           => array( 'GebrokenDoorverwijzingen' ),
	'Categories'                => array( 'Categorieën' ),
	'ChangeEmail'               => array( 'E-mailWijzigen' ),
	'ChangePassword'            => array( 'WachtwoordWijzigen', 'WachtwoordHerinitialiseren' ),
	'ComparePages'              => array( 'PaginasVergelijken', 'Pagina\'sVergelijken' ),
	'Confirmemail'              => array( 'Emailbevestigen', 'E-mailbevestigen' ),
	'Contributions'             => array( 'Bijdragen' ),
	'CreateAccount'             => array( 'GebruikerAanmaken' ),
	'Deadendpages'              => array( 'VerwijslozePaginas', 'VerwijslozePagina’s', 'VerwijslozePagina\'s' ),
	'DeletedContributions'      => array( 'VerwijderdeBijdragen' ),
	'Disambiguations'           => array( 'Doorverwijspagina\'s', 'Doorverwijspaginas' ),
	'DoubleRedirects'           => array( 'DubbeleDoorverwijzingen' ),
	'EditWatchlist'             => array( 'VolglijstBewerken' ),
	'Emailuser'                 => array( 'GebruikerE-mailen', 'E-mailGebruiker' ),
	'Export'                    => array( 'Exporteren' ),
	'Fewestrevisions'           => array( 'MinsteVersies', 'MinsteHerzieningen', 'MinsteRevisies' ),
	'FileDuplicateSearch'       => array( 'BestandsduplicatenZoeken' ),
	'Filepath'                  => array( 'Bestandspad' ),
	'Import'                    => array( 'Importeren' ),
	'Invalidateemail'           => array( 'EmailAnnuleren' ),
	'BlockList'                 => array( 'Blokkeerlijst', 'IP-blokkeerlijst', 'IPblokkeerlijst', 'IpBlokkeerlijst' ),
	'LinkSearch'                => array( 'VerwijzingenZoeken', 'LinksZoeken' ),
	'Listadmins'                => array( 'Beheerderlijst', 'Administratorlijst', 'Adminlijst', 'Beheerderslijst' ),
	'Listbots'                  => array( 'Botlijst', 'Lijstbots' ),
	'Listfiles'                 => array( 'Bestandenlijst', 'Afbeeldingenlijst' ),
	'Listgrouprights'           => array( 'GroepsrechtenWeergeven' ),
	'Listredirects'             => array( 'Doorverwijzinglijst', 'Redirectlijst' ),
	'Listusers'                 => array( 'Gebruikerslijst', 'Gebruikerlijst' ),
	'Lockdb'                    => array( 'DBblokkeren', 'DbBlokkeren', 'BlokkeerDB' ),
	'Log'                       => array( 'Logboeken', 'Logboek' ),
	'Lonelypages'               => array( 'Weespaginas', 'Weespagina\'s' ),
	'Longpages'                 => array( 'LangePaginas', 'LangePagina’s', 'LangePagina\'s' ),
	'MergeHistory'              => array( 'GeschiedenisSamenvoegen' ),
	'MIMEsearch'                => array( 'MIMEzoeken', 'MIME-zoeken' ),
	'Mostcategories'            => array( 'MeesteCategorieën' ),
	'Mostimages'                => array( 'MeesteVerwezenBestanden', 'MeesteBestanden', 'MeesteAfbeeldingen' ),
	'Mostinterwikis'            => array( 'MeesteInterwikiverwijzingen' ),
	'Mostlinked'                => array( 'MeestVerwezenPaginas', 'MeestVerwezenPagina\'s', 'MeestVerwezen' ),
	'Mostlinkedcategories'      => array( 'MeestVerwezenCategorieën' ),
	'Mostlinkedtemplates'       => array( 'MeestVerwezenSjablonen' ),
	'Mostrevisions'             => array( 'MeesteVersies', 'MeesteHerzieningen', 'MeesteRevisies' ),
	'Movepage'                  => array( 'PaginaHernoemen', 'PaginaVerplaatsen', 'TitelWijzigen', 'VerplaatsPagina' ),
	'Mycontributions'           => array( 'MijnBijdragen' ),
	'Mypage'                    => array( 'MijnPagina' ),
	'Mytalk'                    => array( 'MijnOverleg' ),
	'Myuploads'                 => array( 'MijnUploads' ),
	'Newimages'                 => array( 'NieuweBestanden', 'NieuweAfbeeldingen' ),
	'Newpages'                  => array( 'NieuwePaginas', 'NieuwePagina’s', 'NieuwePagina\'s' ),
	'PasswordReset'             => array( 'WachtwoordOpnieuwInstellen' ),
	'PermanentLink'             => array( 'PermanenteVerwijzing' ),
	'Popularpages'              => array( 'PopulairePaginas', 'PopulairePagina’s', 'PopulairePagina\'s' ),
	'Preferences'               => array( 'Voorkeuren' ),
	'Prefixindex'               => array( 'Voorvoegselindex' ),
	'Protectedpages'            => array( 'BeveiligdePaginas', 'BeveiligdePagina\'s', 'BeschermdePaginas', 'BeschermdePagina’s', 'BeschermdePagina\'s' ),
	'Protectedtitles'           => array( 'BeveiligdeTitels', 'BeschermdeTitels' ),
	'Randompage'                => array( 'Willekeurig', 'WillekeurigePagina' ),
	'Randomredirect'            => array( 'WillekeurigeDoorverwijzing' ),
	'Recentchanges'             => array( 'RecenteWijzigingen' ),
	'Recentchangeslinked'       => array( 'RecenteWijzigingenGelinkt', 'VerwanteWijzigingen' ),
	'Revisiondelete'            => array( 'VersieVerwijderen', 'HerzieningVerwijderen', 'RevisieVerwijderen' ),
	'Search'                    => array( 'Zoeken' ),
	'Shortpages'                => array( 'KortePaginas', 'KortePagina’s', 'KortePagina\'s' ),
	'Specialpages'              => array( 'SpecialePaginas', 'SpecialePagina’s', 'SpecialePagina\'s' ),
	'Statistics'                => array( 'Statistieken' ),
	'Tags'                      => array( 'Labels' ),
	'Unblock'                   => array( 'Deblokkeren' ),
	'Uncategorizedcategories'   => array( 'NietGecategoriseerdeCategorieën', 'Niet-GecategoriseerdeCategorieën' ),
	'Uncategorizedimages'       => array( 'NietGecategoriseerdeBestanden', 'NietGecategoriseerdeAfbeeldingen', 'Niet-GecategoriseerdeAfbeeldingen' ),
	'Uncategorizedpages'        => array( 'NietGecategoriseerdePaginas', 'Niet-GecategoriseerdePagina’s', 'Niet-GecategoriseerdePagina\'s' ),
	'Uncategorizedtemplates'    => array( 'NietGecategoriseerdeSjablonen' ),
	'Undelete'                  => array( 'Terugplaatsen', 'Herstellen', 'VerwijderenOngedaanMaken' ),
	'Unlockdb'                  => array( 'DBvrijgeven', 'DbVrijgeven', 'GeefDbVrij' ),
	'Unusedcategories'          => array( 'OngebruikteCategorieën' ),
	'Unusedimages'              => array( 'OngebruikteBestanden', 'OngebruikteAfbeeldingen' ),
	'Unusedtemplates'           => array( 'OngebruikteSjablonen' ),
	'Unwatchedpages'            => array( 'NietGevolgdePaginas', 'Niet-GevolgdePagina’s', 'Niet-GevolgdePagina\'s' ),
	'Upload'                    => array( 'Uploaden' ),
	'UploadStash'               => array( 'TijdelijkeUpload' ),
	'Userlogin'                 => array( 'Aanmelden', 'Inloggen' ),
	'Userlogout'                => array( 'Afmelden', 'Uitloggen' ),
	'Userrights'                => array( 'Gebruikersrechten', 'Gebruikerrechten' ),
	'Version'                   => array( 'Softwareversie', 'Versie' ),
	'Wantedcategories'          => array( 'GevraagdeCategorieën' ),
	'Wantedfiles'               => array( 'GevraagdeBestanden' ),
	'Wantedpages'               => array( 'GevraagdePaginas', 'GevraagdePagina\'s', 'GevraagdePagina’s' ),
	'Wantedtemplates'           => array( 'GevraagdeSjablonen' ),
	'Watchlist'                 => array( 'Volglijst' ),
	'Whatlinkshere'             => array( 'VerwijzingenNaarHier', 'Verwijzingen', 'LinksNaarHier' ),
	'Withoutinterwiki'          => array( 'ZonderInterwiki' ),
);

$linkTrail = '/^([a-zäöüïëéèà]+)(.*)$/sDu';

$messages = array(
# User preference toggles
'tog-underline' => 'Verwijzingen onderstrepen:',
'tog-justify' => "Alinea's uitvullen",
'tog-hideminor' => 'Kleine wijzigingen verbergen in recente wijzigingen',
'tog-hidepatrolled' => 'Gemarkeerde wijzigingen verbergen in recente wijzigingen',
'tog-newpageshidepatrolled' => "Gemarkeerde pagina's verbergen in de lijst met nieuwe pagina's",
'tog-extendwatchlist' => 'Uitgebreide volglijst gebruiken om alle wijzigingen te bekijken, en niet alleen de laatste',
'tog-usenewrc' => 'Wijzigingen per pagina weergeven in recente wijzigingen en volglijst (vereist JavaScript)',
'tog-numberheadings' => 'Koppen automatisch nummeren',
'tog-showtoolbar' => 'Bewerkingswerkbalk weergeven (vereist JavaScript)',
'tog-editondblclick' => 'Dubbelklikken voor bewerken (vereist JavaScript)',
'tog-editsection' => 'Bewerken van deelpagina’s mogelijk maken via [bewerken]-koppelingen',
'tog-editsectiononrightclick' => 'Bewerken van deelpagina’s mogelijk maken met een rechtermuisklik op een tussenkop (vereist JavaScript)',
'tog-showtoc' => 'Inhoudsopgave weergeven (voor pagina’s met minstens 3 tussenkoppen)',
'tog-rememberpassword' => 'Aanmeldgegevens onthouden (maximaal $1 {{PLURAL:$1|dag|dagen}})',
'tog-watchcreations' => "Pagina's die ik aanmaak en bestanden die ik upload automatisch volgen",
'tog-watchdefault' => 'Pagina’s en bestanden die ik bewerk automatisch volgen',
'tog-watchmoves' => 'Pagina’s en bestanden die ik hernoem automatisch volgen',
'tog-watchdeletion' => 'Pagina’s en bestanden die ik verwijder automatisch volgen',
'tog-minordefault' => 'Mijn bewerkingen als ‘klein’ markeren',
'tog-previewontop' => 'Voorvertoning boven bewerkingsveld weergeven',
'tog-previewonfirst' => 'Voorvertoning bij eerste bewerking weergeven',
'tog-nocache' => "Cachen van pagina's door de browser uitschakelen",
'tog-enotifwatchlistpages' => 'Mij e-mailen bij bewerkingen van pagina’s of bestanden op mijn volglijst',
'tog-enotifusertalkpages' => 'Mij e-mailen als iemand mijn overlegpagina wijzigt',
'tog-enotifminoredits' => 'Mij e-mailen bij kleine bewerkingen van pagina’s en bestanden op mijn volglijst',
'tog-enotifrevealaddr' => 'Mijn e-mailadres weergeven in e-mailberichten',
'tog-shownumberswatching' => 'Het aantal gebruikers weergeven dat deze pagina volgt',
'tog-oldsig' => 'Bestaande ondertekening:',
'tog-fancysig' => 'Als wikitekst behandelen (zonder automatische verwijzing)',
'tog-externaleditor' => 'Standaard een externe tekstbewerker gebruiken (alleen voor experts - voor deze functie zijn speciale instellingen nodig. [//www.mediawiki.org/wiki/Manual:External_editors Meer informatie]).',
'tog-externaldiff' => 'Standaard een extern vergelijkingsprogramma gebruiken (alleen voor experts - voor deze functie zijn speciale instellingen nodig. [//www.mediawiki.org/wiki/Manual:External_editors Meer informatie]).',
'tog-showjumplinks' => '"ga naar"-toegankelijkheidsverwijzingen inschakelen',
'tog-uselivepreview' => '"live voorvertoning" gebruiken (vereist JavaScript – experimenteel)',
'tog-forceeditsummary' => 'Een melding geven bij een lege bewerkingssamenvatting',
'tog-watchlisthideown' => 'Eigen bewerkingen op mijn volglijst verbergen',
'tog-watchlisthidebots' => 'Botbewerkingen op mijn volglijst verbergen',
'tog-watchlisthideminor' => 'Kleine bewerkingen op mijn volglijst verbergen',
'tog-watchlisthideliu' => 'Bewerkingen van aangemelde gebruikers op mijn volglijst verbergen',
'tog-watchlisthideanons' => 'Bewerkingen van anonieme gebruikers op mijn volglijst verbergen',
'tog-watchlisthidepatrolled' => 'Gemarkeerde wijzigingen op mijn volglijst verbergen',
'tog-ccmeonemails' => 'Mij een kopie zenden van e-mails die ik naar andere gebruikers stuur',
'tog-diffonly' => 'Pagina-inhoud onder wijzigingen niet weergeven',
'tog-showhiddencats' => 'Verborgen categorieën weergeven',
'tog-noconvertlink' => 'Paginanaamconversie uitschakelen',
'tog-norollbackdiff' => 'Wijzigingen weglaten na terugdraaien',

'underline-always' => 'Altijd',
'underline-never' => 'Nooit',
'underline-default' => 'Standaard in uw vormgeving of webbrowser',

# Font style option in Special:Preferences
'editfont-style' => 'Lettertypestijl bewerkingsvenster:',
'editfont-default' => 'Webbrowser-standaard',
'editfont-monospace' => 'Monospaced lettertype',
'editfont-sansserif' => 'Sans-serif lettertype',
'editfont-serif' => 'Serif lettertype',

# Dates
'sunday' => 'zondag',
'monday' => 'maandag',
'tuesday' => 'dinsdag',
'wednesday' => 'woensdag',
'thursday' => 'donderdag',
'friday' => 'vrijdag',
'saturday' => 'zaterdag',
'sun' => 'zo',
'mon' => 'ma',
'tue' => 'di',
'wed' => 'wo',
'thu' => 'do',
'fri' => 'vr',
'sat' => 'za',
'january' => 'januari',
'february' => 'februari',
'march' => 'maart',
'april' => 'april',
'may_long' => 'mei',
'june' => 'juni',
'july' => 'juli',
'august' => 'augustus',
'september' => 'september',
'october' => 'oktober',
'november' => 'november',
'december' => 'december',
'january-gen' => 'januari',
'february-gen' => 'februari',
'march-gen' => 'maart',
'april-gen' => 'april',
'may-gen' => 'mei',
'june-gen' => 'juni',
'july-gen' => 'juli',
'august-gen' => 'augustus',
'september-gen' => 'september',
'october-gen' => 'oktober',
'november-gen' => 'november',
'december-gen' => 'december',
'jan' => 'jan',
'feb' => 'feb',
'mar' => 'mrt',
'apr' => 'apr',
'may' => 'mei',
'jun' => 'jun',
'jul' => 'jul',
'aug' => 'aug',
'sep' => 'sep',
'oct' => 'okt',
'nov' => 'nov',
'dec' => 'dec',

# Categories related messages
'pagecategories' => '{{PLURAL:$1|Categorie|Categorieën}}',
'category_header' => 'Pagina’s in categorie "$1"',
'subcategories' => 'Ondercategorieën',
'category-media-header' => 'Media in categorie "$1"',
'category-empty' => "''Deze categorie bevat geen pagina’s of media.''",
'hidden-categories' => 'Verborgen {{PLURAL:$1|categorie|categorieën}}',
'hidden-category-category' => 'Verborgen categorieën',
'category-subcat-count' => '{{PLURAL:$2|Deze categorie bevat de volgende ondercategorie.|Deze categorie bevat de volgende {{PLURAL:$1|ondercategorie|$1 ondercategorieën}}, van een totaal van $2.}}',
'category-subcat-count-limited' => 'Deze categorie bevat de volgende {{PLURAL:$1|ondercategorie|$1 ondercategorieën}}.',
'category-article-count' => '{{PLURAL:$2|Deze categorie bevat de volgende pagina.|Deze categorie bevat de volgende {{PLURAL:$1|pagina|$1 pagina’s}}, van in totaal $2.}}',
'category-article-count-limited' => "Deze categorie bevat de volgende {{PLURAL:$1|pagina|$1 pagina's}}.",
'category-file-count' => '{{PLURAL:$2|Deze categorie bevat het volgende bestand.|Deze categorie bevat {{PLURAL:$1|het volgende bestand|de volgende $1 bestanden}}, van in totaal $2.}}',
'category-file-count-limited' => 'Deze categorie bevat {{PLURAL:$1|het volgende bestand|de volgende $1 bestanden}}.',
'listingcontinuesabbrev' => 'meer',
'index-category' => "Te indexeren pagina's",
'noindex-category' => "Niet te indexeren pagina's",
'broken-file-category' => "Pagina's met onjuiste bestandsverwijzingen",

'about' => 'Over',
'article' => 'Pagina',
'newwindow' => '(opent in een nieuw venster)',
'cancel' => 'Annuleren',
'moredotdotdot' => 'Meer…',
'mypage' => 'Mijn gebruikerspagina',
'mytalk' => 'Mijn overleg',
'anontalk' => 'Overlegpagina voor dit IP-adres',
'navigation' => 'Navigatie',
'and' => '&#32;en',

# Cologne Blue skin
'qbfind' => 'Zoeken',
'qbbrowse' => 'Bladeren',
'qbedit' => 'Bewerken',
'qbpageoptions' => 'Deze pagina',
'qbmyoptions' => "Mijn pagina's",
'qbspecialpages' => 'Speciale pagina’s',
'faq' => 'Veel gestelde vragen',
'faqpage' => 'Project:Veelgestelde vragen',

# Vector skin
'vector-action-addsection' => 'Kopje toevoegen',
'vector-action-delete' => 'Verwijderen',
'vector-action-move' => 'Hernoemen',
'vector-action-protect' => 'Beveiligen',
'vector-action-undelete' => 'Terugplaatsen',
'vector-action-unprotect' => 'Beveiliging wijzigen',
'vector-simplesearch-preference' => 'Vereenvoudigd zoeken inschakelen (alleen voor het uiterlijk Vector)',
'vector-view-create' => 'Aanmaken',
'vector-view-edit' => 'Bewerken',
'vector-view-history' => 'Geschiedenis weergeven',
'vector-view-view' => 'Lezen',
'vector-view-viewsource' => 'Brontekst bekijken',
'actions' => 'Handelingen',
'namespaces' => 'Naamruimten',
'variants' => 'Varianten',

'errorpagetitle' => 'Fout',
'returnto' => 'Terug naar $1.',
'tagline' => 'Uit {{SITENAME}}',
'help' => 'Hulp',
'search' => 'Zoeken',
'searchbutton' => 'Zoeken',
'go' => 'OK',
'searcharticle' => 'OK',
'history' => 'Geschiedenis',
'history_short' => 'Geschiedenis',
'updatedmarker' => 'bewerkt sinds mijn laatste bezoek',
'printableversion' => 'Printervriendelijke versie',
'permalink' => 'Permanente verwijzing',
'print' => 'Afdrukken',
'view' => 'Lezen',
'edit' => 'Bewerken',
'create' => 'Aanmaken',
'editthispage' => 'Deze pagina bewerken',
'create-this-page' => 'Deze pagina aanmaken',
'delete' => 'Verwijderen',
'deletethispage' => 'Deze pagina verwijderen',
'undelete_short' => '$1 {{PLURAL:$1|bewerking|bewerkingen}} terugplaatsen',
'viewdeleted_short' => '{{PLURAL: $1|Eén geschrapte bewerking |$1 geschrapte bewerkingen}} bekijken',
'protect' => 'Beveiligen',
'protect_change' => 'wijzigen',
'protectthispage' => 'Deze pagina beveiligen',
'unprotect' => 'Beveiliging wijzigen',
'unprotectthispage' => 'Beveiliging van deze pagina wijzigen',
'newpage' => 'Nieuwe pagina',
'talkpage' => 'Overlegpagina',
'talkpagelinktext' => 'Overleg',
'specialpage' => 'Speciale pagina',
'personaltools' => 'Persoonlijke instellingen',
'postcomment' => 'Nieuw kopje',
'articlepage' => 'Pagina bekijken',
'talk' => 'Overleg',
'views' => 'Weergaven',
'toolbox' => 'Hulpmiddelen',
'userpage' => 'Gebruikerspagina bekijken',
'projectpage' => 'Projectpagina bekijken',
'imagepage' => 'Bestandspagina bekijken',
'mediawikipage' => 'Berichtpagina bekijken',
'templatepage' => 'Sjabloonpagina bekijken',
'viewhelppage' => 'Hulppagina bekijken',
'categorypage' => 'Categoriepagina bekijken',
'viewtalkpage' => 'Overlegpagina bekijken',
'otherlanguages' => 'In andere talen',
'redirectedfrom' => '(Doorverwezen vanaf $1)',
'redirectpagesub' => 'Doorverwijspagina',
'lastmodifiedat' => 'Deze pagina is het laatst bewerkt op $1 om $2.',
'viewcount' => 'Deze pagina is {{PLURAL:$1|één keer|$1 keer}} bekeken.',
'protectedpage' => 'Beveiligde pagina',
'jumpto' => 'Ga naar:',
'jumptonavigation' => 'navigatie',
'jumptosearch' => 'zoeken',
'view-pool-error' => 'Sorry, de servers zijn op het moment overbelast.
Te veel gebruikers proberen deze pagina te bekijken.
Wacht alstublieft even voordat u opnieuw toegang probeert te krijgen tot deze pagina.

$1',
'pool-timeout' => 'De maximaal te wachten tijd voor het wachten op een lock is verstreken',
'pool-queuefull' => 'De wachtrij van de poel is vol',
'pool-errorunknown' => 'Er is een onbekende fout opgetreden',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage) and the disambiguation template definition (see disambiguations).
'aboutsite' => 'Over {{SITENAME}}',
'aboutpage' => 'Project:Info',
'copyright' => 'De inhoud is beschikbaar onder de $1.',
'copyrightpage' => '{{ns:project}}:Auteursrechten',
'currentevents' => 'In het nieuws',
'currentevents-url' => 'Project:In het nieuws',
'disclaimers' => 'Voorbehoud',
'disclaimerpage' => 'Project:Algemeen voorbehoud',
'edithelp' => 'Hulp bij bewerken',
'edithelppage' => 'Help:Bewerken',
'helppage' => 'Help:Inhoud',
'mainpage' => 'Hoofdpagina',
'mainpage-description' => 'Hoofdpagina',
'policy-url' => 'Project:Beleid',
'portal' => 'Gebruikersportaal',
'portal-url' => 'Project:Gebruikersportaal',
'privacy' => 'Privacybeleid',
'privacypage' => 'Project:Privacybeleid',

'badaccess' => 'Geen toestemming',
'badaccess-group0' => 'U hebt geen rechten om de gevraagde handeling uit te voeren.',
'badaccess-groups' => 'De gevraagde handeling is voorbehouden aan gebruikers in {{PLURAL:$2|de groep $1|een van de volgende groepen: $1}}.',

'versionrequired' => 'Versie $1 van MediaWiki is vereist',
'versionrequiredtext' => 'Versie $1 van MediaWiki is vereist om deze pagina te gebruiken.
Meer informatie is beschikbaar op de pagina [[Special:Version|softwareversie]].',

'ok' => 'OK',
'retrievedfrom' => 'Overgenomen van "$1"',
'youhavenewmessages' => 'U hebt $1 ($2).',
'newmessageslink' => 'nieuwe berichten',
'newmessagesdifflink' => 'laatste wijziging',
'youhavenewmessagesfromusers' => 'U heeft $1 van {{PLURAL:$3|een andere gebruiker|$3 gebruikers}} ($2).',
'youhavenewmessagesmanyusers' => 'U heeft $1 van een groot aantal gebruikers ($2).',
'newmessageslinkplural' => '{{PLURAL:$1|een nieuw bericht|nieuwe berichten}}',
'newmessagesdifflinkplural' => 'laatste {{PLURAL:$1|wijziging|wijzigingen}}',
'youhavenewmessagesmulti' => 'U hebt nieuwe berichten op $1',
'editsection' => 'bewerken',
'editold' => 'bewerken',
'viewsourceold' => 'brontekst bekijken',
'editlink' => 'bewerken',
'viewsourcelink' => 'brontekst bekijken',
'editsectionhint' => 'Deelpagina bewerken: $1',
'toc' => 'Inhoud',
'showtoc' => 'weergeven',
'hidetoc' => 'verbergen',
'collapsible-collapse' => 'Inklappen',
'collapsible-expand' => 'Uitvouwen',
'thisisdeleted' => '$1 bekijken of terugplaatsen?',
'viewdeleted' => '$1 bekijken?',
'restorelink' => '$1 verwijderde {{PLURAL:$1|versie|versies}}',
'feedlinks' => 'Feed:',
'feed-invalid' => 'Feedtype wordt niet ondersteund.',
'feed-unavailable' => 'Syndicatiefeeds zijn niet beschikbaar',
'site-rss-feed' => '$1 RSS-feed',
'site-atom-feed' => '$1 Atom-feed',
'page-rss-feed' => '"$1" RSS-feed',
'page-atom-feed' => '"$1" Atom-feed',
'red-link-title' => '$1 (de pagina bestaat niet)',
'sort-descending' => 'Aflopend sorteren',
'sort-ascending' => 'Oplopend sorteren',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main' => 'Pagina',
'nstab-user' => 'Gebruikerspagina',
'nstab-media' => 'Mediapagina',
'nstab-special' => 'Speciale pagina',
'nstab-project' => 'Projectpagina',
'nstab-image' => 'Bestand',
'nstab-mediawiki' => 'Bericht',
'nstab-template' => 'Sjabloon',
'nstab-help' => 'Hulppagina',
'nstab-category' => 'Categorie',

# Main script and global functions
'nosuchaction' => 'Opgegeven handeling bestaat niet',
'nosuchactiontext' => 'De opdracht in de URL is ongeldig.
Mogelijk heeft u een typefout gemaakt in de URL of een onjuiste verwijzing gevolgd.
Het kan ook wijzen op een fout in de software van {{SITENAME}}.',
'nosuchspecialpage' => 'Deze speciale pagina bestaat niet',
'nospecialpagetext' => '<strong>U hebt een onbestaande speciale pagina opgevraagd.</strong>

Een lijst met bestaande speciale pagina’s staat op [[Special:SpecialPages|{{int:specialpages}}]].',

# General errors
'error' => 'Fout',
'databaseerror' => 'Databasefout',
'dberrortext' => 'Er is een syntaxisfout in het databaseverzoek opgetreden.
Mogelijk zit er een fout in de software.
Het laatste verzoek aan de database was:
<blockquote><code>$1</code></blockquote>
vanuit de functie "<code>$2</code>".
De database gaf de volgende foutmelding "<samp>$3: $4</samp>".',
'dberrortextcl' => 'Er is een syntaxisfout in het databaseverzoek opgetreden.
Het laatste verzoek aan de database was:
"$1"
vanuit de functie "$2".
De database gaf de volgende foutmelding: "$3: $4"',
'laggedslavemode' => "'''Waarschuwing:''' in deze pagina zijn recente wijzigingen mogelijk nog niet verwerkt.",
'readonly' => 'Database geblokkeerd',
'enterlockreason' => 'Geef een reden op voor de blokkade en geef op wanneer die waarschijnlijk wordt opgeheven',
'readonlytext' => 'De database is geblokkeerd voor bewerkingen, waarschijnlijk voor regulier databaseonderhoud. Na afronding wordt de functionaliteit hersteld.

De beheerder heeft de volgende reden opgegeven: $1',
'missing-article' => 'In de database is geen inhoud aangetroffen voor de pagina "$1" die er wel zou moeten zijn ($2).

Dit kan voorkomen als u een verouderde verwijzing naar het verschil tussen twee versies van een pagina volgt of een versie opvraagt die is verwijderd.

Als dit niet het geval is, hebt u wellicht een fout in de software gevonden.
Maak hiervan melding bij een [[Special:ListUsers/sysop|beheerder]] van {{SITENAME}} en vermeld daarbij de URL van deze pagina.',
'missingarticle-rev' => '(versienummer: $1)',
'missingarticle-diff' => '(Wijziging: $1, $2)',
'readonly_lag' => 'De database is automatisch vergrendeld terwijl de ondergeschikte databaseservers synchroniseren met de hoofdserver.',
'internalerror' => 'Interne fout',
'internalerror_info' => 'Interne fout: $1',
'fileappenderrorread' => '"$1" kon niet gelezen worden tijdens het toevoegen.',
'fileappenderror' => 'Het was niet mogelijk "$1" toe te voegen aan "$2".',
'filecopyerror' => 'Bestand "$1" kon niet naar "$2" gekopieerd worden.',
'filerenameerror' => '"$1" kon niet hernoemd worden naar "$2".',
'filedeleteerror' => 'Bestand "$1" kon niet verwijderd worden.',
'directorycreateerror' => 'De map "$1" kon niet aangemaakt worden.',
'filenotfound' => 'Bestand "$1" kon niet gevonden worden.',
'fileexistserror' => 'Schrijven naar bestand "$1" onmogelijk: het bestand bestaat al.',
'unexpected' => 'Onverwachte waarde: "$1"="$2".',
'formerror' => 'Fout: formulier kon niet verzonden worden',
'badarticleerror' => 'Deze handeling kan niet op deze pagina worden uitgevoerd.',
'cannotdelete' => 'De pagina of het bestand "$1" kon niet verwijderd worden.
Mogelijk is deze al door iemand anders verwijderd.',
'cannotdelete-title' => 'Pagina "$1" kan niet verwijderd worden',
'delete-hook-aborted' => 'Het verwijderen is afgebroken door een hook.
Er is geen toelichting beschikbaar.',
'badtitle' => 'Ongeldige paginanaam',
'badtitletext' => 'De naam van de opgevraagde pagina was ongeldig, leeg of bevatte een verkeerde intertaal- of interwikinaamverwijzing.
Wellicht bevat de paginanaam niet toegestane tekens.',
'perfcached' => 'Deze gegevens komen uit een cache en zijn mogelijk niet actueel. Er {{PLURAL:$1|is maximaal één resultaat|zijn maximaal $1 resultaten}} beschikbaar in de cache.',
'perfcachedts' => 'Deze gegevens komen uit een cache die voor het laatst is bijgewerkt op $2 om $3. Er {{PLURAL:$4|is maximaal één resultaat|zijn maximaal $4 resultaten}} beschikbaar in de cache.',
'querypage-no-updates' => 'Deze pagina wordt niet bijgewerkt.
Gegevens op deze pagina worden niet ververst.',
'wrong_wfQuery_params' => 'Verkeerde parameters voor wfQuery()<br />
Functie: $1<br />
Zoekopdracht: $2',
'viewsource' => 'Brontekst bekijken',
'viewsource-title' => 'Brontekst bekijken van $1',
'actionthrottled' => 'Handeling tegengehouden',
'actionthrottledtext' => 'Als maatregel tegen spam is het aantal keren per tijdseenheid dat u deze handeling kunt verrichten beperkt.
De limiet is overschreden.
Probeer het over een aantal minuten opnieuw.',
'protectedpagetext' => 'Deze pagina is beveiligd.
Bewerken is niet mogelijk.',
'viewsourcetext' => 'U kunt de brontekst van deze pagina bekijken en kopiëren:',
'viewyourtext' => "U kunt '''uw bewerkingen''' aan de brontekst van deze pagina bekijken en kopiëren:",
'protectedinterface' => "Deze pagina bevat tekst voor berichten van de software op deze wiki en is beveiligd om misbruik te voorkomen.
Gebruik [//translatewiki.net/ translatewiki.net], het vertaalproject voor MediaWiki, om vertalingen voor alle wiki's toe te voegen of te wijzigen.",
'editinginterface' => "'''Waarschuwing:''' u bewerkt een pagina die interfacetekst voor de software bevat.
Bewerkingen op deze pagina beïnvloeden de gebruikersinterface van iedereen op deze wiki.
Om vertalingen toe te voegen of te wijzigen voor alle wiki's, gebruik [//translatewiki.net/ translatewiki.net], het vertaalproject voor MediaWiki.",
'sqlhidden' => '(SQL-zoekopdracht verborgen)',
'cascadeprotected' => "Deze pagina kan niet bewerkt worden, omdat die is opgenomen in de volgende {{PLURAL:$1|pagina|pagina's}} die beveiligd {{PLURAL:$1|is|zijn}} met de cascade-optie:
$2",
'namespaceprotected' => "U hebt geen rechten om pagina's in de naamruimte '''$1''' te bewerken.",
'customcssprotected' => 'U kunt deze CSS-pagina niet bewerken, omdat die persoonlijke instellingen van een andere gebruiker bevat.',
'customjsprotected' => 'U kunt deze JavaScriptpagina niet bewerken, omdat die persoonlijke instellingen van een andere gebruiker bevat.',
'ns-specialprotected' => 'Pagina\'s in de naamruimte "{{ns:special}}" kunnen niet bewerkt worden.',
'titleprotected' => "Het aanmaken van deze pagina is beveiligd door [[User:$1|$1]].
De gegeven reden is ''$2''.",
'filereadonlyerror' => 'Het was niet mogelijk het bestand "$1" aan te passen omdat de bestandsrepository "$2" op dit moment alleen-lezen is.

De opgegeven reden is "\'\'$3\'\'".',
'invalidtitle-knownnamespace' => 'Ongeldige titel met naamruimte "$2" en tekst "$3"',
'invalidtitle-unknownnamespace' => 'Ongeldige titel met onbekend naamruimtenummer $1 en tekst "$2"',
'exception-nologin' => 'Niet aangemeld',
'exception-nologin-text' => 'Om deze pagina te bekijken of deze handeling uit te kunnen voeren moet u aangemeld zijn bij deze wiki.',

# Virus scanner
'virus-badscanner' => "Onjuiste configuratie: onbekende virusscanner: ''$1''.",
'virus-scanfailed' => 'scannen is mislukt (code $1)',
'virus-unknownscanner' => 'onbekend antivirusprogramma:',

# Login and logout pages
'logouttext' => "'''U bent nu afgemeld.'''

U kunt {{SITENAME}} nu anoniem gebruiken of weer <span class='plainlinks'>[$1 aanmelden]</span> als dezelfde of een andere gebruiker.
Mogelijk worden nog een aantal pagina's weergegeven alsof u aangemeld bent totdat u de cache van uw browser leegt.",
'welcomecreation' => '== Welkom, $1! ==
Uw gebruiker is geregistreerd.
Vergeet niet uw [[Special:Preferences|voorkeuren voor {{SITENAME}}]] aan te passen.',
'yourname' => 'Gebruikersnaam:',
'yourpassword' => 'Wachtwoord:',
'yourpasswordagain' => 'Geef uw wachtwoord opnieuw in:',
'remembermypassword' => 'Aanmeldgegevens onthouden (maximaal $1 {{PLURAL:$1|dag|dagen}})',
'securelogin-stick-https' => 'Verbonden blijven via HTTPS na aanmelden',
'yourdomainname' => 'Uw domein:',
'password-change-forbidden' => 'U kunt uw wachtwoord niet wijzigen in deze wiki.',
'externaldberror' => 'Er is een fout opgetreden bij het aanmelden bij de database of u hebt geen toestemming uw externe gebruiker bij te werken.',
'login' => 'Aanmelden',
'nav-login-createaccount' => 'Aanmelden / registreren',
'loginprompt' => 'U moet cookies ingeschakeld hebben om u te kunnen aanmelden bij {{SITENAME}}.',
'userlogin' => 'Aanmelden / registreren',
'userloginnocreate' => 'Aanmelden',
'logout' => 'Afmelden',
'userlogout' => 'Afmelden',
'notloggedin' => 'Niet aangemeld',
'nologin' => 'Nog geen gebruikersnaam? $1.',
'nologinlink' => 'Registreren',
'createaccount' => 'Registreren',
'gotaccount' => 'Hebt u al een gebruikersnaam? $1.',
'gotaccountlink' => 'Aanmelden',
'userlogin-resetlink' => 'Bent u uw aanmeldgegevens vergeten?',
'createaccountmail' => 'Per e-mail',
'createaccountreason' => 'Reden:',
'badretype' => 'De ingevoerde wachtwoorden verschillen van elkaar.',
'userexists' => 'De gekozen gebruikersnaam is al in gebruik.
Kies een andere naam.',
'loginerror' => 'Aanmeldfout',
'createaccounterror' => 'Het was niet mogelijk de gebruiker aan te maken: $1',
'nocookiesnew' => 'De gebruiker is geregistreerd, maar niet aangemeld.
{{SITENAME}} gebruikt cookies voor het aanmelden van gebruikers.
Schakel die in en meld daarna aan met uw nieuwe gebruikersnaam en wachtwoord.',
'nocookieslogin' => '{{SITENAME}} gebruikt cookies voor het aanmelden van gebruikers.
Cookies zijn uitgeschakeld in uw browser.
Schakel deze optie aan en probeer het opnieuw.',
'nocookiesfornew' => 'De gebruiker is niet gemaakt omdat de bron niet bevestigd kon worden.
Zorg ervoor dat u cookies hebt ingeschakeld, herlaad deze pagina en probeer het opnieuw.',
'noname' => 'U hebt geen geldige gebruikersnaam opgegeven.',
'loginsuccesstitle' => 'Aanmelden geslaagd',
'loginsuccess' => "'''U bent nu aangemeld bij {{SITENAME}} als \"\$1\".'''",
'nosuchuser' => 'De gebruiker "$1" bestaat niet.
Gebruikersnamen zijn hoofdlettergevoelig.
Controleer de schrijfwijze of [[Special:UserLogin/signup|maak een nieuwe gebruiker aan]].',
'nosuchusershort' => 'De gebruiker "$1" bestaat niet.
Controleer de schrijfwijze.',
'nouserspecified' => 'U dient een gebruikersnaam op te geven.',
'login-userblocked' => 'Deze gebruiker is geblokkeerd.
Aanmelden is niet mogelijk.',
'wrongpassword' => 'Het ingegeven wachtwoord is onjuist.
Probeer het opnieuw.',
'wrongpasswordempty' => 'Het opgegeven wachtwoord was leeg.
Probeer het opnieuw.',
'passwordtooshort' => 'Wachtwoorden moeten uit minstens {{PLURAL:$1|$1 teken|$1 tekens}} bestaan.',
'password-name-match' => 'Uw wachtwoord en uw gebruikersnaam mogen niet overeenkomen.',
'password-login-forbidden' => 'Het gebruik van deze gebruikersnaam met dit wachtwoord is niet toegestaan.',
'mailmypassword' => 'Nieuw wachtwoord e-mailen',
'passwordremindertitle' => 'Nieuw tijdelijk wachtwoord voor {{SITENAME}}',
'passwordremindertext' => 'Iemand, waarschijnlijk u, heeft vanaf IP-adres $1 een verzoek
gedaan tot het toezenden van een nieuw wachtwoord voor {{SITENAME}}
($4). Er is een tijdelijk wachtwoord aangemaakt voor gebruiker "$2":
"$3". Als dat uw bedoeling was, meld u dan nu aan en kies een nieuw
wachtwoord.
Uw tijdelijke wachtwoord vervalt over {{PLURAL:$5|$5 dag|$5 dagen}}.

Als iemand anders dan u dit verzoek heeft gedaan of als u zich inmiddels het
wachtwoord herinnert en het niet langer wilt wijzigen, negeer dit bericht
dan en blijf uw bestaande wachtwoord gebruiken.',
'noemail' => 'Er is geen e-mailadres bekend voor gebruiker "$1".',
'noemailcreate' => 'U moet een geldig e-mailadres opgeven',
'passwordsent' => 'Het wachtwoord is verzonden naar het e-mailadres voor "$1".
Meld u aan nadat u het hebt ontvangen.',
'blocked-mailpassword' => 'Uw IP-adres is geblokkeerd voor het maken van wijzigingen.
Om misbruik te voorkomen is het niet mogelijk om een nieuw wachtwoord aan te vragen.',
'eauthentsent' => 'Er is een bevestigingse-mail naar het opgegeven e-mailadres gezonden.
Volg de aanwijzingen in de e-mail om aan te geven dat het uw e-mailadres is.
Tot die tijd kunnen er geen e-mails naar het e-mailadres gezonden worden.',
'throttled-mailpassword' => 'In {{PLURAL:$1|het laatste uur|de laatste $1 uur}} is er al een wachtwoordherinnering verzonden.
Om misbruik te voorkomen wordt er slechts één wachtwoordherinnering per {{PLURAL:$1|uur|$1 uur}} verzonden.',
'mailerror' => 'Fout bij het verzenden van e-mail: $1',
'acct_creation_throttle_hit' => 'Bezoekers van deze wiki met hetzelfde IP-adres als u hebben de afgelopen dag {{PLURAL:$1|al 1 gebruiker|al $1 gebruikers}} geregistreerd, wat het maximale aantal in deze periode is.
Daarom kunt u als vanaf uw IP-adres op dit moment geen nieuwe gebruiker registreren.',
'emailauthenticated' => 'Uw e-mailadres is bevestigd op $2 om $3.',
'emailnotauthenticated' => 'Uw e-mailadres is niet bevestigd.
U ontvangt geen e-mail voor de onderstaande functies.',
'noemailprefs' => 'Geef een e-mailadres op in uw voorkeuren om deze functies te gebruiken.',
'emailconfirmlink' => 'Bevestig uw e-mailadres',
'invalidemailaddress' => 'Het e-mailadres is niet aanvaard, omdat het een ongeldige opmaak heeft.
Geef een geldig e-mailadres op of laat het veld leeg.',
'cannotchangeemail' => 'Het e-mailadres voor een gebruiker kan op deze wiki niet gewijzigd worden.',
'emaildisabled' => 'Deze site kan geen e-mails verzenden.',
'accountcreated' => 'Gebruiker aangemaakt',
'accountcreatedtext' => 'De gebruiker $1 is aangemaakt.',
'createaccount-title' => 'Gebruikers registreren voor {{SITENAME}}',
'createaccount-text' => 'Iemand heeft een gebruiker op {{SITENAME}} ($4) aangemaakt met de naam "$2" en uw e-mailadres.
Het wachtwoord voor "$2" is "$3".
Meld u aan en wijzig uw wachtwoord.

Negeer dit bericht als deze gebruiker zonder uw medeweten is aangemaakt.',
'usernamehasherror' => 'Een gebruikersnaam mag het teken hekje ("#") niet bevatten.',
'login-throttled' => 'U hebt recentelijk te vaak geprobeerd aan te melden met een onjuist wachtwoord.
Wacht even voordat u het opnieuw probeert.',
'login-abort-generic' => 'U bent niet aangemeld. De procedure is afgebroken.',
'loginlanguagelabel' => 'Taal: $1',
'suspicious-userlogout' => 'Uw verzoek om af te melden is genegeerd, omdat het lijkt alsof het verzoek is verzonden door een browser of cacheproxy die stuk is.',

# E-mail sending
'php-mail-error-unknown' => 'Er is een onbekende fout opgetreden in de mail()-functie van PHP',
'user-mail-no-addy' => 'Geprobeerd een e-mail te verzenden zonder een e-mailadres.',

# Change password dialog
'resetpass' => 'Wachtwoord wijzigen',
'resetpass_announce' => 'U bent aangemeld met een tijdelijke code die u per e-mail is toegezonden.
Voer een nieuw wachtwoord in om het aanmelden te voltooien:',
'resetpass_text' => '<!-- Voeg hier tekst toe -->',
'resetpass_header' => 'Wachtwoord wijzigen',
'oldpassword' => 'Huidige wachtwoord:',
'newpassword' => 'Nieuw wachtwoord:',
'retypenew' => 'Herhaling nieuwe wachtwoord:',
'resetpass_submit' => 'Wachtwoord instellen en aanmelden',
'resetpass_success' => 'Uw wachtwoord is gewijzigd.
Bezig met aanmelden…',
'resetpass_forbidden' => 'Wachtwoorden kunnen niet gewijzigd worden',
'resetpass-no-info' => 'U dient aangemeld zijn voordat u deze pagina kunt gebruiken.',
'resetpass-submit-loggedin' => 'Wachtwoord wijzigen',
'resetpass-submit-cancel' => 'Annuleren',
'resetpass-wrong-oldpass' => 'Het huidige of tijdelijke wachtwoord is ongeldig.
Mogelijk hebt u uw wachtwoord al gewijzigd of een nieuw tijdelijk wachtwoord aangevraagd.',
'resetpass-temp-password' => 'Tijdelijk wachtwoord:',

# Special:PasswordReset
'passwordreset' => 'Wachtwoord opnieuw instellen',
'passwordreset-text' => 'Vul dit formulier in zodat we u een e-mail kunnen sturen met uw gebruikersgegevens.',
'passwordreset-legend' => 'Wachtwoord opnieuw instellen',
'passwordreset-disabled' => 'Het is in deze wiki niet mogelijk uw wachtwoord opnieuw in te stellen.',
'passwordreset-pretext' => '{{PLURAL:$1||Voer één van de onderstaande velden in}}',
'passwordreset-username' => 'Gebruiker:',
'passwordreset-domain' => 'Domein:',
'passwordreset-capture' => 'De resulterende e-mail bekijken?',
'passwordreset-capture-help' => 'Als u dit vakje aanvinkt, wordt de e-mail (met het tijdelijke wachtwoord) naar de gebruiker verzonden en ook aan u weergegeven.',
'passwordreset-email' => 'E-mailadres:',
'passwordreset-emailtitle' => 'Gebruikersgegevens op {{SITENAME}}',
'passwordreset-emailtext-ip' => 'Iemand, waarschijnlijk u, heeft vanaf het IP-adres $1 uw gebruikersgegevens voor {{SITENAME}} ($4) opgevraagd.
De volgende {{PLURAL:$3|gebruiker is|gebruikers zijn}} gekoppeld aan dit e-mailadres:

$2

{{PLURAL:$3|Dit tijdelijke wachtwoord vervalt|Deze tijdelijke wachtwoorden vervallen}} over {{PLURAL:$5|een dag|$5 dagen}}.
Meld u aan en wijzig het wachtwoord nu. Als u dit verzoek niet zelf heeft gedaan, of als u het oorspronkelijke wachtwoord nog kent en het niet wilt wijzigen, negeer dit bericht dan en blijf uw oude wachtwoord gebruiken.',
'passwordreset-emailtext-user' => 'Gebruiker $1 op de site {{SITENAME}} heeft uw gebruikersgegevens voor {{SITENAME}} ($4) opgevraagd.
De volgende {{PLURAL:$3|gebruiker is|gebruikers zijn}} gekoppeld aan dit e-mailadres:

$2

{{PLURAL:$3|Dit tijdelijke wachtwoord vervalt|Deze tijdelijke wachtwoorden vervallen}} over {{PLURAL:$5|een dag|$5 dagen}}.
Meld u aan en wijzig het wachtwoord nu. Als u dit verzoek niet zelf heeft gedaan, of als u het oorspronkelijke wachtwoord nog kent en het niet wilt wijzigen, negeer dit bericht dan en blijf uw oude wachtwoord gebruiken.',
'passwordreset-emailelement' => 'Gebruikersnaam: $1
Tijdelijk wachtwoord: $2',
'passwordreset-emailsent' => 'Er is per e-mail een herinnering verzonden.',
'passwordreset-emailsent-capture' => 'Er is een herinneringse-mail verzonden. Deze wordt hieronder weergegeven.',
'passwordreset-emailerror-capture' => 'Er is een herinneringse-mail aangemaakt. Deze wordt hieronder weergegeven. Het verzonden naar de gebruiker is mislukt om de volgende reden: $1',

# Special:ChangeEmail
'changeemail' => 'E-mailadres wijzigen',
'changeemail-header' => 'Het e-mailadres van mijn gebruiker wijzigen',
'changeemail-text' => 'Vul dit formulier in om uw e-mailadres te wijzigen. U moet uw wachtwoord invoeren om deze wijziging te bevestigen.',
'changeemail-no-info' => 'U moet aangemeld zijn om rechtstreeks toegang te hebben tot deze pagina.',
'changeemail-oldemail' => 'Huidig e-mailadres:',
'changeemail-newemail' => 'Nieuw e-mailadres:',
'changeemail-none' => '(geen)',
'changeemail-submit' => 'E-mailadres wijzigen',
'changeemail-cancel' => 'Annuleren',

# Edit page toolbar
'bold_sample' => 'Vetgedrukte tekst',
'bold_tip' => 'Vet',
'italic_sample' => 'Schuingedrukte tekst',
'italic_tip' => 'Schuin',
'link_sample' => 'Onderwerp',
'link_tip' => 'Interne verwijzing',
'extlink_sample' => 'http://www.example.com verwijzingstekst',
'extlink_tip' => 'Externe verwijzing (vergeet http:// niet)',
'headline_sample' => 'Deelonderwerp',
'headline_tip' => 'Tussenkopje (hoogste niveau)',
'nowiki_sample' => 'Voer hier de niet op te maken tekst in',
'nowiki_tip' => 'Wiki-opmaak negeren',
'image_sample' => 'Voorbeeld.png',
'image_tip' => 'Mediabestand',
'media_sample' => 'Voorbeeld.ogg',
'media_tip' => 'Verwijzing naar bestand',
'sig_tip' => 'Uw handtekening met datum en tijd',
'hr_tip' => 'Horizontale lijn (gebruik spaarzaam)',

# Edit pages
'summary' => 'Samenvatting:',
'subject' => 'Onderwerp/kop:',
'minoredit' => 'Dit is een kleine bewerking',
'watchthis' => 'Deze pagina volgen',
'savearticle' => 'Pagina opslaan',
'preview' => 'Voorvertoning',
'showpreview' => 'Bewerking ter controle bekijken',
'showlivepreview' => 'Bewerking ter controle bekijken',
'showdiff' => 'Wijzigingen bekijken',
'anoneditwarning' => "'''Waarschuwing:''' u bent niet aangemeld.
Uw IP-adres wordt opgeslagen als u wijzigingen op deze pagina maakt.",
'anonpreviewwarning' => "''U bent niet aangemeld.''
''Door uw bewerking op te slaan wordt uw IP-adres opgeslagen in de paginageschiedenis.''",
'missingsummary' => "'''Herinnering:''' u hebt geen bewerkingssamenvatting opgegeven.
Als u nogmaals op \"{{int:savearticle}}\" klikt wordt de bewerking zonder samenvatting opgeslagen.",
'missingcommenttext' => 'Plaats uw opmerking hieronder.',
'missingcommentheader' => "'''Let op:''' u hebt geen onderwerp/kop voor deze opmerking opgegeven.
Als u opnieuw op \"{{int:savearticle}}\" klikt, wordt uw wijziging zonder een onderwerp/kop opgeslagen.",
'summary-preview' => 'Bewerkingssamenvatting nakijken:',
'subject-preview' => 'Onderwerp/kop nakijken:',
'blockedtitle' => 'Gebruiker is geblokkeerd',
'blockedtext' => '\'\'\'Uw gebruiker of IP-adres is geblokkeerd.\'\'\'

De blokkade is uitgevoerd door $1.
De opgegeven reden is \'\'$2\'\'.

* Aanvang blokkade: $8
* Einde blokkade: $6
* Bedoeld te blokkeren: $7

U kunt contact opnemen met $1 of een andere [[{{MediaWiki:Grouppage-sysop}}|beheerder]] om de blokkade te bespreken.
U kunt geen gebruik maken van de functie "Deze gebruiker e-mailen", tenzij u een geldig e-mailadres hebt opgegeven in uw [[Special:Preferences|voorkeuren]] en het gebruik van deze functie niet geblokkeerd is.
Uw huidige IP-adres is $3 en het blokkadenummer is #$5.
Vermeld alle bovenstaande gegevens als u ergens op deze blokkade reageert.',
'autoblockedtext' => 'Uw IP-adres is automatisch geblokkeerd, omdat het is gebruikt door een andere gebruiker, die is geblokkeerd door $1.
De opgegeven reden is:

:\'\'$2\'\'

* Aanvang blokkade: $8
* Einde blokkade: $6
* Bedoeld te blokkeren: $7

U kunt deze blokkade bespreken met $1 of een andere [[{{MediaWiki:Grouppage-sysop}}|beheerder]].

U kunt geen gebruik maken van de functie "Deze gebruiker e-mailen", tenzij u een geldig e-mailadres hebt opgegeven in uw [[Special:Preferences|voorkeuren]] en het gebruik van deze functie niet is geblokkeerd.

Uw huidige IP-adres is $3 en het blokkadenummer is #$5.
Vermeld alle bovenstaande gegevens als u ergens op deze blokkade reageert.',
'blockednoreason' => 'geen reden opgegeven',
'whitelistedittext' => "U moet $1 om pagina's te bewerken.",
'confirmedittext' => 'U moet uw e-mailadres bevestigen voor u kunt bewerken.
Voer uw e-mailadres in en bevestig het via [[Special:Preferences|uw voorkeuren]].',
'nosuchsectiontitle' => 'Deze subkop bestaat niet',
'nosuchsectiontext' => 'U probeerde een subkopje te bewerken dat niet bestaat.
Wellicht is het verplaatst of verwijderd terwijl u de pagina aan het bekijken was.',
'loginreqtitle' => 'Aanmelden verplicht',
'loginreqlink' => 'aanmelden',
'loginreqpagetext' => "U moet zich $1 om andere pagina's te kunnen bekijken.",
'accmailtitle' => 'Wachtwoord verzonden.',
'accmailtext' => "Een willekeurig wachtwoord voor [[User talk:$1|$1]] is naar $2 gestuurd.

Het wachtwoord voor deze nieuwe gebruiker kan gewijzigd worden via de pagina ''[[Special:ChangePassword|Wachtwoord wijzigen]]'' na het aanmelden.",
'newarticle' => '(Nieuw)',
'newarticletext' => "Deze pagina bestaat niet.
Typ in het onderstaande veld om de pagina aan te maken (meer informatie staat op de [[{{MediaWiki:Helppage}}|hulppagina]]).
Gebruik de knop '''vorige''' in uw browser als u hier per ongeluk terecht bent gekomen.",
'anontalkpagetext' => "----''Deze overlegpagina hoort bij een anonieme gebruiker die hetzij geen gebruikersnaam heeft, hetzij deze niet gebruikt.
Daarom wordt het IP-adres ter identificatie gebruikt.
Het is mogelijk dat meerdere personen hetzelfde IP-adres gebruiken.
Mogelijk ontvangt u hier berichten die niet voor u bedoeld zijn.
Als u dat wilt voorkomen, [[Special:UserLogin/signup|registreer u]] of [[Special:UserLogin|meld u aan]] om verwarring met andere anonieme gebruikers te voorkomen.''",
'noarticletext' => 'Deze pagina bevat geen tekst.
U kunt [[Special:Search/{{PAGENAME}}|naar deze term zoeken]] in andere pagina\'s, <span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} de logboeken doorzoeken] of [{{fullurl:{{FULLPAGENAME}}|action=edit}} deze pagina bewerken]</span>.',
'noarticletext-nopermission' => 'Deze pagina bevat geen tekst.
U kunt [[Special:Search/{{PAGENAME}}|naar deze term zoeken]] in andere pagina\'s of
<span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} de logboeken doorzoeken]</span>, maar u mag de pagina niet aanmaken.',
'missing-revision' => 'De versie #$1 van de pagina "{{PAGENAME}} bestaat niet.

Dit wordt meestal veroorzaakt door het volgen van een verouderde verwijzing naar een pagina die is verwijderd.
Meer gegevens zijn mogelijk te vinden in het [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} verwijderlogboek].',
'userpage-userdoesnotexist' => 'U bewerkt een gebruikerspagina van een gebruiker die niet bestaat (gebruiker "<nowiki>$1</nowiki>").
Controleer of u deze pagina wel wilt aanmaken of bewerken.',
'userpage-userdoesnotexist-view' => 'De gebruiker "$1" is niet geregistreerd.',
'blocked-notice-logextract' => 'Deze gebruiker is op het moment geblokkeerd.
De laatste regel uit het blokkeerlogboek wordt hieronder ter referentie weergegeven:',
'clearyourcache' => "'''Let op!''' Nadat u de wijzigingen hebt opgeslagen is het wellicht nodig uw browsercache te legen.
* '''Firefox / Safari:''' houd ''Shift'' ingedrukt terwijl u op ''Vernieuwen'' klikt of druk op ''Ctrl-F5'' of ''Ctrl-R'' (''⌘-Shift-R'' op een Mac)
* '''Google Chrome:''' druk op ''Ctrl-Shift-R'' (''⌘-Shift-R'' op een Mac)
* '''Internet Explorer:''' houd ''Ctrl'' ingedrukt terwijl u op ''Vernieuwen'' klikt of druk op ''Ctrl-F5''
* '''Opera:''' leeg uw cache in ''Extra → Voorkeuren''",
'usercssyoucanpreview' => "'''Tip:''' gebruik de knop \"{{int:showpreview}}\" om uw nieuwe CSS te testen alvorens op te slaan.",
'userjsyoucanpreview' => "'''Tip:''' gebruik de knop \"{{int:showpreview}}\" om uw nieuwe JavaScript te testen alvorens op te slaan.",
'usercsspreview' => "'''Dit is alleen een voorvertoning van uw persoonlijke CSS.'''
'''Deze is nog niet opgeslagen!'''",
'userjspreview' => "'''Let op: u test nu uw persoonlijke JavaScript.'''
'''De pagina is niet opgeslagen!'''",
'sitecsspreview' => "'''Dit is alleen een voorvertoning van de CSS.'''
'''Deze is nog niet opgeslagen!'''",
'sitejspreview' => "'''Dit is alleen een voorvertoning van de JavaScriptcode.'''
'''Deze is nog niet opgeslagen!'''",
'userinvalidcssjstitle' => "'''Waarschuwing:''' er is geen uiterlijk \"\$1\".
Uw eigen .css- en .js-pagina's beginnen met een kleine letter, bijvoorbeeld {{ns:user}}:Naam/vector.css in plaats van {{ns:user}}:Naam/Vector.css.",
'updated' => '(Bijgewerkt)',
'note' => "'''Opmerking:'''",
'previewnote' => "'''Let op: dit is een controlepagina.'''
Uw tekst is niet opgeslagen!",
'continue-editing' => 'Naar het bewerkingsvenster gaan',
'previewconflict' => 'Deze voorvertoning geeft aan hoe de tekst in het bovenste veld eruit ziet als u deze opslaat.',
'session_fail_preview' => "'''Uw bewerking is niet verwerkt, omdat de sessiegegevens verloren zijn gegaan.
Probeer het opnieuw.
Als het dan nog niet lukt, [[Special:UserLogout|meld u zich dan af]] en weer aan.'''",
'session_fail_preview_html' => "'''Uw bewerking is niet verwerkt, omdat de sessiegegevens verloren zijn gegaan.'''

''Omdat in {{SITENAME}} ruwe HTML is ingeschakeld, is een voorvertoning niet mogelijk als bescherming tegen aanvallen met JavaScript.''

'''Als dit een legitieme bewerking is, probeer het dan opnieuw.'''
Als het dan nog niet lukt, [[Special:UserLogout|meld u zich dan af]] en weer aan.",
'token_suffix_mismatch' => "'''Uw bewerking is geweigerd, omdat uw browser de leestekens in het bewerkingstoken onjuist heeft behandeld.'''
De bewerking is geweigerd om verminking van de paginatekst te voorkomen.
Dit gebeurt soms als er een webgebaseerde proxydienst wordt gebruikt die fouten bevat.",
'edit_form_incomplete' => "'''Sommige onderdelen van het bewerkingsformulier hebben de server niet bereikt. Controleer of uw bewerkingen intact zijn en probeer het opnieuw.'''",
'editing' => 'Bezig met bewerken van $1',
'creating' => 'Bezig met het aanmaken van $1',
'editingsection' => 'Bezig met bewerken van $1 (deelpagina)',
'editingcomment' => 'Bezig met bewerken van $1 (nieuw kopje)',
'editconflict' => 'Bewerkingsconflict: $1',
'explainconflict' => "Een andere gebruiker heeft deze pagina bewerkt sinds u met uw bewerking bent begonnen.
In het bovenste deel van het venster staat de tekst van de huidige pagina.
Uw bewerking staat in het onderste gedeelte.
U dient uw bewerkingen in te voegen in de bestaande tekst.
'''Alleen''' de tekst in het bovenste gedeelte wordt opgeslagen als u op \"{{int:savearticle}}\" klikt.",
'yourtext' => 'Uw tekst',
'storedversion' => 'Opgeslagen versie',
'nonunicodebrowser' => "'''Waarschuwing: uw browser kan niet goed overweg met Unicode.'''
Hiermee wordt door de MediaWiki-software rekening gehouden zodat u toch zonder problemen pagina's kunt bewerken: niet-ASCII tekens worden in het bewerkingsveld weergegeven als hexadecimale codes.",
'editingold' => "'''Waarschuwing: u bewerkt een oude versie van deze pagina.'''
Als u uw bewerking opslaat, gaan alle wijzigingen verloren die na deze versie zijn gemaakt.",
'yourdiff' => 'Wijzigingen',
'copyrightwarning' => "Let op: alle bijdragen aan {{SITENAME}} worden geacht te zijn vrijgegeven onder de \$2 (zie \$1 voor details).
Als u niet wilt dat uw tekst door anderen naar believen bewerkt en verspreid kan worden, kies dan niet voor \"Pagina opslaan\".<br />
Hierbij belooft u ons tevens dat u deze tekst zelf hebt geschreven of overgenomen uit een vrije, openbare bron.<br />
'''Gebruik geen materiaal dat beschermd wordt door auteursrecht, tenzij u daarvoor toestemming hebt!'''",
'copyrightwarning2' => "Al uw bijdragen aan {{SITENAME}} kunnen bewerkt, gewijzigd of verwijderd worden door andere gebruikers.
Als u niet wilt dat uw teksten rigoureus aangepast worden door anderen, plaats ze hier dan niet.<br />
U belooft ook dat u de oorspronkelijke auteur bent van dit materiaal of dat u het hebt gekopieerd uit een bron in het publieke domein of een soortgelijke vrije bron (zie $1 voor details).
'''Gebruik geen materiaal dat beschermd wordt door auteursrecht, tenzij u daarvoor toestemming hebt!'''",
'longpageerror' => "'''Fout: de tekst die u hebt toegevoegd is {{PLURAL:$1|één kilobyte|$1 kilobyte}} groot, wat groter is dan het maximum van {{PLURAL:$2|één kilobyte|$2 kilobyte}}.'''
Opslaan is niet mogelijk.",
'readonlywarning' => "'''Waarschuwing: u kunt deze bewerking nu niet opslaan omdat de database is geblokkeerd voor bewerkingen wegens onderhoudswerkzaamheden.'''
Het is misschien verstandig om uw tekst tijdelijk in een tekstbestand op te slaan om dit te bewaren voor wanneer de blokkering van de database opgeheven is.

Een beheerder heeft de database geblokkeerd om de volgende reden: $1",
'protectedpagewarning' => "'''Waarschuwing: deze beveiligde pagina kan alleen door gebruikers met beheerdersrechten bewerkt worden.'''
De laatste logboekregel staat hieronder:",
'semiprotectedpagewarning' => "'''Let op:''' deze pagina is beveiligd en kan alleen door geregistreerde gebruikers bewerkt worden.
De laatste logboekregel staat hieronder:",
'cascadeprotectedwarning' => "'''Waarschuwing:''' deze pagina is beveiligd en kan alleen door beheerders bewerkt worden, omdat deze is opgenomen in de volgende {{PLURAL:$1|pagina|pagina's}} die beveiligd {{PLURAL:$1|is|zijn}} met de cascade-optie:",
'titleprotectedwarning' => "'''Waarschuwing: Deze pagina is beveiligd. Er zijn [[Special:ListGroupRights|speciale rechten]] nodig om de pagina aan te kunnen maken.'''
De laatste logboekregel staat hieronder:",
'templatesused' => 'Op deze pagina {{PLURAL:$1|gebruikt sjabloon|gebruikte sjablonen}}:',
'templatesusedpreview' => '{{PLURAL:$1|Sjabloon|Sjablonen}} gebruikt in deze voorvertoning:',
'templatesusedsection' => 'In dit subkopje {{PLURAL:$1|wordt het volgende sjabloon|worden de volgende sjablonen}} gebruikt:',
'template-protected' => '(beveiligd)',
'template-semiprotected' => '(semibeveiligd)',
'hiddencategories' => 'Deze pagina valt in de volgende verborgen {{PLURAL:$1|categorie|categorieën}}:',
'edittools' => '<!-- Deze tekst wordt weergegeven onder bewerkings- en uploadformulieren. -->',
'nocreatetitle' => "Het aanmaken van pagina's is beperkt",
'nocreatetext' => "{{SITENAME}} heeft de mogelijkheid om nieuwe pagina's te maken beperkt.
U kunt reeds bestaande pagina's wijzigen of u kunt [[Special:UserLogin|zich aanmelden of registreren]].",
'nocreate-loggedin' => "U hebt geen rechten om nieuwe pagina's te maken.",
'sectioneditnotsupported-title' => 'Het is niet mogelijk om paragrafen te bewerken',
'sectioneditnotsupported-text' => 'Het is op deze pagina niet mogelijk om paragrafen te bewerken.',
'permissionserrors' => 'Fouten in rechten',
'permissionserrorstext' => 'U hebt geen rechten om dit te doen om de volgende {{PLURAL:$1|reden|redenen}}:',
'permissionserrorstext-withaction' => 'U hebt geen rechten om $2 om de volgende {{PLURAL:$1|reden|redenen}}:',
'recreate-moveddeleted-warn' => "'''Waarschuwing: u bent bezig met het aanmaken van een pagina die in het verleden verwijderd is.'''

Overweeg of het terecht is dat u verder werkt aan deze pagina.
Voor uw gemak staan hieronder het verwijderingslogboek en het hernoemingslogboek voor deze pagina:",
'moveddeleted-notice' => 'Deze pagina is verwijderd.
Ter informatie worden het verwijderingslogboek en het hernoemingslogboek van deze pagina hieronder weergegeven.',
'log-fulllog' => 'Het volledige logboek bekijken',
'edit-hook-aborted' => 'De bewerking is afgebroken door een hook.
Er is geen toelichting beschikbaar.',
'edit-gone-missing' => 'De pagina is niet bijgewerkt.
Deze lijkt verwijderd te zijn.',
'edit-conflict' => 'Bewerkingsconflict.',
'edit-no-change' => 'Uw bewerking is genegeerd, omdat er geen wijziging aan de tekst is gemaakt.',
'edit-already-exists' => 'De pagina is niet aangemaakt.
Deze bestaat al.',
'defaultmessagetext' => 'Standaardinhoud',
'content-failed-to-parse' => 'Het was niet mogelijk de inhoud van het MIME-type $2 voor het model $1 te verwerken: $3.',
'invalid-content-data' => 'Ongeldige inhoudsgegevens',
'content-not-allowed-here' => 'De inhoud "$1" is niet toegestaan op pagina [[$2]].',

# Content models
'content-model-wikitext' => 'wikitekst',
'content-model-text' => 'platte tekst',
'content-model-javascript' => 'JavaScript',
'content-model-css' => 'CSS',

# Parser/template warnings
'expensive-parserfunction-warning' => "'''Waarschuwing:''' deze pagina gebruikt te veel kostbare parserfuncties.

Nu {{PLURAL:$1|is|zijn}} het er $1, terwijl het er minder dan $2 {{PLURAL:$2|moet|moeten}} zijn.",
'expensive-parserfunction-category' => "Pagina's die te veel kostbare parserfuncties gebruiken",
'post-expand-template-inclusion-warning' => 'Waarschuwing: de maximale transclusiegrootte voor sjablonen is overschreden.
Sommige sjablonen worden niet getranscludeerd.',
'post-expand-template-inclusion-category' => "Pagina's waarvoor de maximale transclusiegrootte is overschreden",
'post-expand-template-argument-warning' => 'Waarschuwing: deze pagina bevat tenminste een sjabloonparameter met een te grote transclusiegrootte.
Deze parameters zijn weggelaten.',
'post-expand-template-argument-category' => "Pagina's die missende sjabloonparameters bevatten",
'parser-template-loop-warning' => 'Er is een kringloop in sjablonen geconstateerd: [[$1]]',
'parser-template-recursion-depth-warning' => 'De recursiediepte voor sjablonen is overschreden ($1)',
'language-converter-depth-warning' => 'De dieptelimiet voor de taalconvertor is overschreden ($1)',
'node-count-exceeded-category' => "Pagina's waar het maximaal aantal nodes is overschreden",
'node-count-exceeded-warning' => 'Op de pagina is het maximale aantal nodes overschreden',
'expansion-depth-exceeded-category' => "Pagina's waar de expansiediepte is overschreden",
'expansion-depth-exceeded-warning' => 'De pagina bevat te veel sjablonen',
'parser-unstrip-loop-warning' => 'Er is een "unstrip"-lus gedetecteerd',
'parser-unstrip-recursion-limit' => 'De recursielimiet ($1) voor "unstrip" is overschreden',
'converter-manual-rule-error' => 'Er is een fout gedetecteerd in een handmatig toegevoegde taalconversieregel.',

# "Undo" feature
'undo-success' => 'Deze bewerking kan ongedaan gemaakt worden.
Hieronder staat de tekst waarin de wijziging ongedaan is gemaakt.
Controleer voor het opslaan of het resultaat gewenst is.',
'undo-failure' => 'De wijziging kan niet ongedaan gemaakt worden vanwege andere strijdige wijzigingen.',
'undo-norev' => 'De bewerking kon niet ongedaan gemaakt worden, omdat die niet bestaat of is verwijderd.',
'undo-summary' => 'Versie $1 van [[Special:Contributions/$2|$2]] ([[User talk:$2|overleg]]) ongedaan gemaakt',

# Account creation failure
'cantcreateaccounttitle' => 'Registreren is mislukt.',
'cantcreateaccount-text' => "Registreren vanaf dit IP-adres ('''$1''') is geblokkeerd door [[User:$3|$3]].

De door $3 opgegeven reden is ''$2''",

# History pages
'viewpagelogs' => 'Logboek voor deze pagina bekijken',
'nohistory' => 'Deze pagina is niet bewerkt.',
'currentrev' => 'Huidige versie',
'currentrev-asof' => 'Huidige versie van $2 om $3',
'revisionasof' => 'Versie van $2 om $3',
'revision-info' => 'Versie door $2 op $4 om $5',
'previousrevision' => '← Oudere versie',
'nextrevision' => 'Nieuwere versie →',
'currentrevisionlink' => 'Huidige versie',
'cur' => 'huidig',
'next' => 'volgende',
'last' => 'vorige',
'page_first' => 'eerste',
'page_last' => 'laatste',
'histlegend' => "Selectie voor verschillen: selecteer de te vergelijken versies en toets ENTER of de knop onderaan.<br />
Verklaring afkortingen: '''({{int:cur}})''' = verschil met huidige versie, '''({{int:last}})''' = verschil met voorgaande versie, '''{{int:minoreditletter}}''' = kleine wijziging",
'history-fieldset-title' => 'Door geschiedenis bladeren',
'history-show-deleted' => 'Alleen verwijderd',
'histfirst' => 'Oudste',
'histlast' => 'Nieuwste',
'historysize' => '({{PLURAL:$1|1 byte|$1 bytes}})',
'historyempty' => '(leeg)',

# Revision feed
'history-feed-title' => 'Bewerkingsoverzicht',
'history-feed-description' => 'Bewerkingsoverzicht voor deze pagina op de wiki',
'history-feed-item-nocomment' => '$1 op $3 om $4',
'history-feed-empty' => "De gevraagde pagina bestaat niet.
Wellicht is die verwijderd of hernoemd.
[[Special:Search|Doorzoek de wiki]] voor relevante pagina's.",

# Revision deletion
'rev-deleted-comment' => '(bewerkingssamenvatting verwijderd)',
'rev-deleted-user' => '(gebruikersnaam verwijderd)',
'rev-deleted-event' => '(logboekregel verwijderd)',
'rev-deleted-user-contribs' => '[gebruikersnaam of IP-adres verwijderd - bewerking verborgen in bijdragen]',
'rev-deleted-text-permission' => "Deze bewerking is '''verwijderd'''.
Er kunnen details aanwezig zijn in het [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} verwijderingslogboek].",
'rev-deleted-text-unhide' => "Deze paginaversie is '''verwijderd'''.
Er kunnen details te vinden zijn in het [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} verwijderingslogboek].
Als u wilt kunt u [$1 deze versie bekijken].",
'rev-suppressed-text-unhide' => "Deze paginaversie is '''onderdrukt'''.
Er kunnen details te vinden zijn in het [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} logboek onderdrukte versies].
Als u wilt kunt u [$1 deze versie bekijken].",
'rev-deleted-text-view' => "Deze paginaversie is '''verwijderd'''.
U kunt deze bekijken; er kunnen details te vinden zijn in het [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} verwijderingslogboek].",
'rev-suppressed-text-view' => "Deze paginaversie is '''onderdrukt'''.
U kunt deze bekijken; er kunnen details te vinden zijn in het [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} logboek onderdrukte versies].",
'rev-deleted-no-diff' => "U kunt de verschillen niet bekijken, omdat een van de versies is '''verwijderd'''.
Achtergronden zijn mogelijk te vinden in het [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} verwijderingslogboek].",
'rev-suppressed-no-diff' => "U kunt de verschillen niet bekijken, omdat een van de versies is '''verwijderd'''.",
'rev-deleted-unhide-diff' => "Een van de bewerkingen voor de verschillen die u hebt opgevraagd is '''verwijderd'''.
Er kunnen details te vinden zijn in het [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} verwijderingslogboek].
Als u wilt kunt u [$1 de verschillen bekijken].",
'rev-suppressed-unhide-diff' => "Een van de versies in deze verschillen is '''onderdrukt'''.
Er kunnen details te vinden zijn in het [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} verbergingslogboek].
Als u wilt kunt u [$1 deze versie bekijken].",
'rev-deleted-diff-view' => "Een van de versies voor de verschillen die u hebt opgevraagd, is '''verwijderd'''.
U kunt deze verschillen bekijken. Er kunnen details te vinden zijn in het [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} verwijderlogboek].",
'rev-suppressed-diff-view' => "Een van de bewerkingen voor de verschillen die u hebt opgevraagd, is '''onderdrukt'''.
U kunt deze verschillen bekijken. Er kunnen details te vinden zijn in het [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} verbergingslogboek].",
'rev-delundel' => 'weergeven/verbergen',
'rev-showdeleted' => 'weergeven',
'revisiondelete' => 'Versies verwijderen of terugplaatsen',
'revdelete-nooldid-title' => 'Ongeldige doelversie',
'revdelete-nooldid-text' => 'U hebt geen doelversie(s) voor deze handeling opgegeven. De aangegeven versie bestaat niet of u probeert de laatste versie te verbergen.',
'revdelete-nologtype-title' => 'Er is geen logboektype opgegeven',
'revdelete-nologtype-text' => 'U hebt geen logboektype opgegeven om deze handeling op uit te voeren.',
'revdelete-nologid-title' => 'Ongeldige logboekregel',
'revdelete-nologid-text' => 'U hebt ofwel geen doellogboekregel opgegeven of de aangegeven logboekregel bestaat niet.',
'revdelete-no-file' => 'Het aangegeven bestand bestaat niet.',
'revdelete-show-file-confirm' => 'Weet u zeker dat u de verwijderde versie van het bestand "<nowiki>$1</nowiki>" van $2 om $3 wilt bekijken?',
'revdelete-show-file-submit' => 'Ja',
'revdelete-selected' => "'''Geselecteerde {{PLURAL:$2|bewerking|bewerkingen}} van [[:$1]]:'''",
'logdelete-selected' => "'''{{PLURAL:$1|Geselecteerde logboekhandeling|Geselecteerde logboekhandelingen}}:'''",
'revdelete-text' => "'''Verwijderde bewerkingen zijn zichtbaar in de geschiedenis en logboeken, maar delen van de inhoud zijn niet langer publiek toegankelijk.'''
Andere beheerders van {{SITENAME}} kunnen de verborgen inhoud benaderen en de verwijdering ongedaan maken met behulp van dit formulier, tenzij er aanvullende beperkingen gelden die zijn ingesteld door de systeembeheerder.",
'revdelete-confirm' => 'Bevestig dat u dit wilde doen, dat u de consequenties begrijpt en dat u dit doet in overeenstemming met het geldende [[{{MediaWiki:Policy-url}}|beleid]].',
'revdelete-suppress-text' => "Versies verbergen dient '''alleen''' gebruikt te worden in de volgende gevallen:
* Ongepaste persoonlijke informatie
*: ''woonadres, telefoonnummers, Burger Service Nummers, enzovoort.''",
'revdelete-legend' => 'Zichtbaarheidsbeperkingen instellen',
'revdelete-hide-text' => 'Bewerkte tekst verbergen',
'revdelete-hide-image' => 'Bestandsinhoud verbergen',
'revdelete-hide-name' => 'Handeling en doel verbergen',
'revdelete-hide-comment' => 'Bewerkingssamenvatting verbergen',
'revdelete-hide-user' => 'Gebruikersnaam/IP-adres van de gebruiker verbergen',
'revdelete-hide-restricted' => 'Deze beperkingen ook op beheerders toepassen',
'revdelete-radio-same' => '(niet wijzigen)',
'revdelete-radio-set' => 'Ja',
'revdelete-radio-unset' => 'Nee',
'revdelete-suppress' => 'Gegevens voor zowel beheerders als anderen onderdrukken',
'revdelete-unsuppress' => 'Beperkingen op teruggeplaatste wijzigingen verwijderen',
'revdelete-log' => 'Reden:',
'revdelete-submit' => 'Toepassen op de geselecteerde {{PLURAL:$1|bewerking|bewerkingen}}',
'revdelete-success' => "'''De zichtbaarheid van de wijziging is bijgewerkt.'''",
'revdelete-failure' => "'''De zichtbaarheid van de wijziging kon niet bijgewerkt worden:'''
$1",
'logdelete-success' => "'''Zichtbaarheid van de gebeurtenis succesvol ingesteld.'''",
'logdelete-failure' => "'''De zichtbaarheid van de logboekregel kon niet ingesteld worden:'''
$1",
'revdel-restore' => 'Zichtbaarheid wijzigen',
'revdel-restore-deleted' => 'verwijderde versies',
'revdel-restore-visible' => 'zichtbare versies',
'pagehist' => 'Geschiedenis',
'deletedhist' => 'verwijderde geschiedenis',
'revdelete-hide-current' => 'Er is een fout opgetreden bij het verbergen van het object van $1 om $2 uur: dit is de huidige versie.
Deze versie kan niet verborgen worden.',
'revdelete-show-no-access' => 'Er is een fout opgetreden bij het weergeven van het object van $1 om $2 uur: dit object is gemarkeerd als "beschermd".
U hebt geen toegang tot dit object.',
'revdelete-modify-no-access' => 'Er is een fout opgetreden bij het wijzigen van het object van $1 om $2 uur: dit object is gemarkeerd als "beschermd".
U hebt geen toegang tot dit object.',
'revdelete-modify-missing' => 'Er is een fout opgetreden bij het wijzigen van versienummer $1: het komt niet voor in de database!',
'revdelete-no-change' => "'''Waarschuwing:''' het object van $1 om $2 uur had al de aangegeven zichtbaarheidsinstellingen.",
'revdelete-concurrent-change' => 'Er is een fout opgetreden bij het wijzigen van het object van $1 om $2 uur: de status is inmiddels gewijzigd door iemand anders.
Controleer de logboeken.',
'revdelete-only-restricted' => 'Er is een fout opgetreden bij het verbergen van het item van $1, $2: u kunt geen items onderdrukken uit het zicht van beheerders zonder ook een van de andere zichtbaarheidsopties te selecteren.',
'revdelete-reason-dropdown' => '* Veel voorkomende redenen voor verwijderen
** Auteursrechtenschending
** Onbetamelijke reactie of persoonlijke gegevens
** Onbetamelijke gebruikersnaam
** Potentieel lasterlijke gegevens',
'revdelete-otherreason' => 'Andere reden:',
'revdelete-reasonotherlist' => 'Andere reden',
'revdelete-edit-reasonlist' => 'Redenen voor verwijderen bewerken',
'revdelete-offender' => 'Auteur versie:',

# Suppression log
'suppressionlog' => 'Verbergingslogboek',
'suppressionlogtext' => 'De onderstaande lijst bevat de verwijderingen en blokkades die voor beheerders verborgen zijn.
In de [[Special:BlockList|blokkadelijst]] zijn de huidige blokkades te bekijken.',

# History merging
'mergehistory' => "Geschiedenis van pagina's samenvoegen",
'mergehistory-header' => 'Via deze pagina kunt u versies van de geschiedenis van een bronpagina naar een nieuwere pagina samenvoegen.
Zorg dat deze wijziging de geschiedenisdoorlopendheid van de pagina behoudt.',
'mergehistory-box' => "Versies van twee pagina's samenvoegen:",
'mergehistory-from' => 'Bronpagina:',
'mergehistory-into' => 'Bestemmingspagina:',
'mergehistory-list' => 'Samenvoegbare bewerkingsgeschiedenis',
'mergehistory-merge' => 'De volgende versies van [[:$1]] kunnen samengevoegd worden naar [[:$2]].
Gebruik de kolom met keuzerondjes om alleen de versies gemaakt op en voor de aangegeven tijd samen te voegen.
Let op dat het gebruiken van de navigatieverwijzingen deze kolom opnieuw instelt.',
'mergehistory-go' => 'Samenvoegbare bewerkingen bekijken',
'mergehistory-submit' => 'Versies samenvoegen',
'mergehistory-empty' => 'Er zijn geen versies die samengevoegd kunnen worden.',
'mergehistory-success' => '$3 {{PLURAL:$3|versie|versies}} van [[:$1]] zijn succesvol samengevoegd naar [[:$2]].',
'mergehistory-fail' => 'Kan geen geschiedenis samenvoegen, controleer opnieuw de pagina- en tijdinstellingen.',
'mergehistory-no-source' => 'De bronpagina $1 bestaat niet.',
'mergehistory-no-destination' => 'De bestemmingspagina $1 bestaat niet.',
'mergehistory-invalid-source' => 'De bronpagina moet een geldige paginanaam zijn.',
'mergehistory-invalid-destination' => 'De bestemmingspagina moet een geldige paginanaam zijn.',
'mergehistory-autocomment' => '[[:$1]] samengevoegd naar [[:$2]]',
'mergehistory-comment' => '[[:$1]] samengevoegd naar [[:$2]]: $3',
'mergehistory-same-destination' => 'De bronpagina en doelpagina kunnen niet hetzelfde zijn',
'mergehistory-reason' => 'Reden:',

# Merge log
'mergelog' => 'Samenvoegingslogboek',
'pagemerge-logentry' => 'heeft [[$1]] naar [[$2]] samengevoegd (versies tot en met $3)',
'revertmerge' => 'Samenvoeging ongedaan maken',
'mergelogpagetext' => 'Hieronder ziet u een lijst van recente samenvoegingen van een paginageschiedenis naar een andere.',

# Diffs
'history-title' => '$1: versiegeschiedenis',
'difference-title' => '$1: verschil tussen versies',
'difference-title-multipage' => "$1 en $2: verschil tussen pagina's",
'difference-multipage' => "(Verschil tussen pagina's)",
'lineno' => 'Regel $1:',
'compareselectedversions' => 'Geselecteerde versies vergelijken',
'showhideselectedversions' => 'Geselecteerde versies weergeven/verbergen',
'editundo' => 'ongedaan maken',
'diff-multi' => '({{PLURAL:$1|Eén tussenliggende versie|$1 tussenliggende versies}} door {{PLURAL:$2|één gebruiker|$2 gebruikers}} {{PLURAL:$1|wordt|worden}} niet weergegeven)',
'diff-multi-manyusers' => '($1 tussenliggende {{PLURAL:$1|versie|versies}} door meer dan $2 {{PLURAL:$2|gebruiker|gebruikers}}  worden niet weergegeven)',
'difference-missing-revision' => '{{PLURAL:$2|Eén versie|$2 versies}} van deze verschillen ($1) {{PLURAL:$2|is|zijn}} niet aangetroffen.

Dit wordt meestal veroorzaakt door het volgen van een verouderde verwijzing verschillen voor een pagina die is verwijderd.
Meer gegevens zijn mogelijk te vinden in het [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} verwijderlogboek].',

# Search results
'searchresults' => 'Zoekresultaten',
'searchresults-title' => 'Zoekresultaten voor "$1"',
'searchresulttext' => 'Voor meer informatie over zoeken op {{SITENAME}}, zie [[{{MediaWiki:Helppage}}|{{int:help}}]].',
'searchsubtitle' => 'U hebt gezocht naar \'\'\'[[:$1]]\'\'\' ([[Special:Prefixindex/$1|pagina\'s die beginnen met "$1"]] {{int:pipe-separator}}[[Special:WhatLinksHere/$1|pagina\'s die verwijzen naar "$1"]])',
'searchsubtitleinvalid' => "U hebt gezocht naar '''$1'''",
'toomanymatches' => 'Er waren te veel resultaten.
Probeer een andere zoekopdracht.',
'titlematches' => 'Overeenkomst met onderwerp',
'notitlematches' => 'Geen resultaten gevonden',
'textmatches' => 'Overeenkomst met inhoud',
'notextmatches' => "Geen pagina's gevonden",
'prevn' => 'vorige {{PLURAL:$1|$1}}',
'nextn' => 'volgende {{PLURAL:$1|$1}}',
'prevn-title' => 'Vorige {{PLURAL:$1|resultaat|$1 resultaten}}',
'nextn-title' => 'Volgende {{PLURAL:$1|resultaat|$1 resultaten}}',
'shown-title' => '$1 {{PLURAL:$1|resultaat|resultaten}} per pagina weergeven',
'viewprevnext' => '($1 {{int:pipe-separator}} $2) ($3) bekijken.',
'searchmenu-legend' => 'Zoekopties',
'searchmenu-exists' => "* Pagina '''[[$1]]'''",
'searchmenu-new' => "'''De pagina \"[[:\$1]]\" aanmaken op deze wiki.'''",
'searchhelp-url' => 'Help:Inhoud',
'searchmenu-prefix' => '[[Special:PrefixIndex/$1|Paginanamen met dit voorvoegsel weergeven]]',
'searchprofile-articles' => "Inhoudelijke pagina's",
'searchprofile-project' => "Hulp- en projectpagina's",
'searchprofile-images' => 'Multimedia',
'searchprofile-everything' => 'Alles',
'searchprofile-advanced' => 'Uitgebreid',
'searchprofile-articles-tooltip' => 'Zoeken in $1',
'searchprofile-project-tooltip' => 'Zoeken in $1',
'searchprofile-images-tooltip' => 'Zoeken naar bestanden',
'searchprofile-everything-tooltip' => "Alle inhoud doorzoeken (inclusief overlegpagina's)",
'searchprofile-advanced-tooltip' => 'Zoeken in aangegeven naamruimten',
'search-result-size' => '$1 ({{PLURAL:$2|1 woord|$2 woorden}})',
'search-result-category-size' => '{{PLURAL:$1|1 categorielid|$1 categorieleden}} ({{PLURAL:$2|1 ondercategorie|$2 ondercategorieën}}, {{PLURAL:$3|1 bestand|$3 bestanden}})',
'search-result-score' => 'Relevantie: $1%',
'search-redirect' => '(doorverwijzing $1)',
'search-section' => '(subkop $1)',
'search-suggest' => 'Bedoelde u: $1',
'search-interwiki-caption' => 'Zusterprojecten',
'search-interwiki-default' => '$1 resultaten:',
'search-interwiki-more' => '(meer)',
'search-relatedarticle' => 'Gerelateerd',
'mwsuggest-disable' => 'Suggesties via AJAX uitschakelen',
'searcheverything-enable' => 'In alle naamruimten zoeken',
'searchrelated' => 'gerelateerd',
'searchall' => 'alle',
'showingresults' => "Hieronder {{PLURAL:$1|staat '''1''' resultaat|staan '''$1''' resultaten}} vanaf #'''$2'''.",
'showingresultsnum' => "Hieronder {{PLURAL:$3|staat '''1''' resultaat|staan '''$3''' resultaten}} vanaf #'''$2'''.",
'showingresultsheader' => "{{PLURAL:$5|Resultaat '''$1''' van '''$3'''|Resultaten '''$1 - $2''' van '''$3'''}} voor '''$4'''",
'nonefound' => "'''Opmerking''': standaard worden niet alle naamruimten doorzocht.
Als u in uw zoekopdracht als voorvoegsel \"''all:''\" gebruikt, worden alle pagina's doorzocht (inclusief overlegpagina's, sjablonen, enzovoort).
U kunt ook een naamruimte als voorvoegsel gebruiken.",
'search-nonefound' => 'Er zijn geen resultaten voor uw zoekopdracht.',
'powersearch' => 'Uitgebreid zoeken',
'powersearch-legend' => 'Uitgebreid zoeken',
'powersearch-ns' => 'Zoeken in naamruimten:',
'powersearch-redir' => 'Doorverwijzingen weergeven',
'powersearch-field' => 'Zoeken naar',
'powersearch-togglelabel' => 'Selecteren:',
'powersearch-toggleall' => 'Alle',
'powersearch-togglenone' => 'Geen',
'search-external' => 'Extern zoeken',
'searchdisabled' => 'Zoeken in {{SITENAME}} is niet mogelijk.
U kunt gebruik maken van Google.
De gegevens over {{SITENAME}} zijn mogelijk niet bijgewerkt.',

# Quickbar
'qbsettings' => 'Menubalk',
'qbsettings-none' => 'Uitgeschakeld',
'qbsettings-fixedleft' => 'Links vast',
'qbsettings-fixedright' => 'Rechts vast',
'qbsettings-floatingleft' => 'Links zwevend',
'qbsettings-floatingright' => 'Rechts zwevend',
'qbsettings-directionality' => 'Vast, afhankelijk van de schrijfrichting van uw taal',

# Preferences page
'preferences' => 'Voorkeuren',
'mypreferences' => 'Mijn voorkeuren',
'prefs-edits' => 'Aantal bewerkingen:',
'prefsnologin' => 'Niet aangemeld',
'prefsnologintext' => 'U moet <span class="plainlinks">[{{fullurl:{{#Special:UserLogin}}|returnto=$1}} aangemeld]</span> zijn om uw voorkeuren te kunnen instellen.',
'changepassword' => 'Wachtwoord wijzigen',
'prefs-skin' => 'Vormgeving',
'skin-preview' => 'Voorvertoning',
'datedefault' => 'Geen voorkeur',
'prefs-beta' => 'Bètafunctionaliteit',
'prefs-datetime' => 'Datum en tijd',
'prefs-labs' => 'Alphafunctionaliteit',
'prefs-user-pages' => "Gebruikerspagina's",
'prefs-personal' => 'Gebruikersprofiel',
'prefs-rc' => 'Recente wijzigingen',
'prefs-watchlist' => 'Volglijst',
'prefs-watchlist-days' => 'Dagen weer te geven in de volglijst:',
'prefs-watchlist-days-max' => 'Maximaal $1 {{PLURAL:$1|dag|dagen}}',
'prefs-watchlist-edits' => 'Maximaal aantal bewerkingen in de uitgebreide volglijst:',
'prefs-watchlist-edits-max' => 'Maximale aantal: 1000',
'prefs-watchlist-token' => 'Volglijstsleutel:',
'prefs-misc' => 'Diversen',
'prefs-resetpass' => 'Wachtwoord wijzigen',
'prefs-changeemail' => 'E-mailadres wijzigen',
'prefs-setemail' => 'Een e-mailadres instellen',
'prefs-email' => 'E-mail',
'prefs-rendering' => 'Uiterlijk',
'saveprefs' => 'Opslaan',
'resetprefs' => 'Niet opgeslagen wijzigingen herstellen',
'restoreprefs' => 'Voorkeuren herstellen',
'prefs-editing' => 'Bewerken',
'prefs-edit-boxsize' => 'Afmetingen van het bewerkingsvenster.',
'rows' => 'Regels:',
'columns' => 'Kolommen:',
'searchresultshead' => 'Zoekresultaten',
'resultsperpage' => 'Resultaten per pagina:',
'stub-threshold' => 'Drempel voor markering als <a href="#" class="stub">beginnetje</a>:',
'stub-threshold-disabled' => 'Uitgeschakeld',
'recentchangesdays' => 'Aantal dagen weer te geven in de recente wijzigingen:',
'recentchangesdays-max' => '(maximaal $1 {{PLURAL:$1|dag|dagen}})',
'recentchangescount' => 'Standaard aantal weer te geven bewerkingen:',
'prefs-help-recentchangescount' => "Dit geldt voor recente wijzigingen, paginageschiedenis en logboekpagina's.",
'prefs-help-watchlist-token' => 'Door hier een geheime sleutel in te vullen wordt een RSS-feed voor uw volglijst aangemaakt.
Iedereen die deze sleutel kent, kan uw volglijst lezen. Kies dus een veilige sleutel.
Hier volgt een willekeurig gegenereerde waarde die u kunt gebruiken: $1',
'savedprefs' => 'Uw voorkeuren zijn opgeslagen.',
'timezonelegend' => 'Tijdzone:',
'localtime' => 'Plaatselijke tijd:',
'timezoneuseserverdefault' => 'Wikistandaard gebruiken ($1)',
'timezoneuseoffset' => 'Anders (tijdverschil aangeven)',
'timezoneoffset' => 'Tijdsverschil¹:',
'servertime' => 'Servertijd:',
'guesstimezone' => 'Vanuit de browser toevoegen',
'timezoneregion-africa' => 'Afrika',
'timezoneregion-america' => 'Amerika',
'timezoneregion-antarctica' => 'Antarctica',
'timezoneregion-arctic' => 'Noordpool',
'timezoneregion-asia' => 'Azië',
'timezoneregion-atlantic' => 'Atlantische Oceaan',
'timezoneregion-australia' => 'Australië',
'timezoneregion-europe' => 'Europa',
'timezoneregion-indian' => 'Indische Oceaan',
'timezoneregion-pacific' => 'Stille Oceaan',
'allowemail' => 'E-mail van andere gebruikers toestaan',
'prefs-searchoptions' => 'Zoeken',
'prefs-namespaces' => 'Naamruimten',
'defaultns' => 'Anders in de volgende naamruimten zoeken:',
'default' => 'standaard',
'prefs-files' => 'Bestanden',
'prefs-custom-css' => 'persoonlijke CSS',
'prefs-custom-js' => 'persoonlijke JS',
'prefs-common-css-js' => 'Gedeelde CSS/JS voor elke vormgeving:',
'prefs-reset-intro' => 'Gebruik deze functie om uw voorkeuren te herstellen naar de standaardinstellingen.
Deze handeling kan niet ongedaan gemaakt worden.',
'prefs-emailconfirm-label' => 'E-mailbevestiging:',
'prefs-textboxsize' => 'Afmetingen bewerkingsscherm',
'youremail' => 'Uw e-mailadres:',
'username' => 'Gebruikersnaam:',
'uid' => 'Gebruikersnummer:',
'prefs-memberingroups' => 'Lid van {{PLURAL:$1|groep|groepen}}:',
'prefs-registration' => 'Registratiedatum:',
'yourrealname' => 'Uw echte naam:',
'yourlanguage' => 'Taal:',
'yourvariant' => 'Taalvariant voor inhoud:',
'prefs-help-variant' => "Uw voorkeursvariant of -spelling om de inhoudspagina's van deze wiki in weer te geven.",
'yournick' => 'Tekst voor ondertekening:',
'prefs-help-signature' => 'Reacties op de overlegpagina\'s worden meestal ondertekend met "<nowiki>~~~~</nowiki>".
De tildes worden omgezet in uw ondertekening en een datum en tijd van de bewerking.',
'badsig' => 'Ongeldige ondertekening; controleer de HTML-tags.',
'badsiglength' => 'Uw ondertekening is te lang.
Deze moet minder dan $1 {{PLURAL:$1|karakters|karakters}} bevatten.',
'yourgender' => 'Geslacht:',
'gender-unknown' => 'Niet aangegeven',
'gender-male' => 'Man',
'gender-female' => 'Vrouw',
'prefs-help-gender' => 'Optioneel: dit wordt gebruikt om gebruikers correct aan te spreken in de software.
Deze informatie is zichtbaar voor andere gebruikers.',
'email' => 'E-mail',
'prefs-help-realname' => 'Echte naam is optioneel.
Als u deze opgeeft, kan deze naam gebruikt worden om u erkenning te geven voor uw werk.',
'prefs-help-email' => 'E-mailadres is optioneel, maar maakt het mogelijk om u uw wachtwoord te e-mailen als u het bent vergeten.',
'prefs-help-email-others' => 'U kunt ook anderen in staat stellen per e-mail contact met u op te nemen via een verwijzing op uw gebruikers- en overlegpagina zonder dat u uw identiteit prijsgeeft.',
'prefs-help-email-required' => 'Hiervoor is een e-mailadres nodig.',
'prefs-info' => 'Basisinformatie',
'prefs-i18n' => 'Taalinstellingen',
'prefs-signature' => 'Ondertekening',
'prefs-dateformat' => 'Datumopmaak:',
'prefs-timeoffset' => 'Tijdverschil',
'prefs-advancedediting' => 'Gevorderde instellingen',
'prefs-advancedrc' => 'Gevorderde instellingen',
'prefs-advancedrendering' => 'Gevorderde instellingen',
'prefs-advancedsearchoptions' => 'Gevorderde instellingen',
'prefs-advancedwatchlist' => 'Gevorderde instellingen',
'prefs-displayrc' => 'Weergaveopties',
'prefs-displaysearchoptions' => 'Weergaveopties',
'prefs-displaywatchlist' => 'Weergaveopties',
'prefs-diffs' => 'Verschillen',

# User preference: e-mail validation using jQuery
'email-address-validity-valid' => 'Het e-mailadres lijkt geldig',
'email-address-validity-invalid' => 'Geef een geldig e-mailadres op',

# User rights
'userrights' => 'Gebruikersrechtenbeheer',
'userrights-lookup-user' => 'Gebruikersgroepen beheren',
'userrights-user-editname' => 'Voer een gebruikersnaam in:',
'editusergroup' => 'Gebruikersgroepen wijzigen',
'editinguser' => "Bezig met wijzigen van de gebruikersrechten van gebruiker '''[[User:$1|$1]]''' $2",
'userrights-editusergroup' => 'Gebruikersgroepen wijzigen',
'saveusergroups' => 'Gebruikersgroepen opslaan',
'userrights-groupsmember' => 'Lid van:',
'userrights-groupsmember-auto' => 'Impliciet lid van:',
'userrights-groups-help' => 'U kunt de groepen wijzigen waar deze gebruiker lid van is.
* Een aangekruist vakje betekent dat de gebruiker lid is van de groep.
* Een niet aangekruist vakje betekent dat de gebruiker geen lid is van de groep.
* Een "*" betekent dat u een gebruiker niet uit een groep kunt verwijderen nadat u die hebt toegevoegd of vice versa.',
'userrights-reason' => 'Reden:',
'userrights-no-interwiki' => "U hebt geen rechten om gebruikersrechten op andere wiki's te wijzigen.",
'userrights-nodatabase' => 'De database $1 bestaat niet of is geen lokale database.',
'userrights-nologin' => 'U moet [[Special:UserLogin|aangemeld]] zijn met een gebruiker met de juiste rechten om gebruikersrechten toe te wijzen.',
'userrights-notallowed' => 'U hebt geen rechten om gebruikersrechten toe te voegen of te verwijderen.',
'userrights-changeable-col' => 'Groepen die u kunt beheren',
'userrights-unchangeable-col' => 'Groepen die u niet kunt beheren',

# Groups
'group' => 'Groep:',
'group-user' => 'gebruikers',
'group-autoconfirmed' => 'autobevestigde gebruikers',
'group-bot' => 'bots',
'group-sysop' => 'beheerders',
'group-bureaucrat' => 'bureaucraten',
'group-suppress' => 'toezichthouders',
'group-all' => '(iedereen)',

'group-user-member' => '{{GENDER:$1|gebruiker}}',
'group-autoconfirmed-member' => '{{GENDER:$1|autobevestigde gebruiker}}',
'group-bot-member' => '{{GENDER:$1|bot}}',
'group-sysop-member' => '{{GENDER:$1|beheerder}}',
'group-bureaucrat-member' => '{{GENDER:$1|bureaucraat}}',
'group-suppress-member' => '{{GENDER:$1|toezichthouder}}',

'grouppage-user' => '{{ns:project}}:Gebruikers',
'grouppage-autoconfirmed' => '{{ns:project}}:Geregistreerde gebruikers',
'grouppage-bot' => '{{ns:project}}:Bots',
'grouppage-sysop' => '{{ns:project}}:Beheerders',
'grouppage-bureaucrat' => '{{ns:project}}:Bureaucraten',
'grouppage-suppress' => '{{ns:project}}:Toezicht',

# Rights
'right-read' => "Pagina's bekijken",
'right-edit' => "Pagina's bewerken",
'right-createpage' => "Pagina's aanmaken",
'right-createtalk' => "Overlegpagina's aanmaken",
'right-createaccount' => 'Nieuwe gebruikers aanmaken',
'right-minoredit' => 'Bewerkingen als klein markeren',
'right-move' => "Pagina's hernoemen",
'right-move-subpages' => "Pagina's inclusief subpagina's verplaatsen",
'right-move-rootuserpages' => "Gebruikerspagina's van het hoogste niveau hernoemen",
'right-movefile' => 'Bestanden hernoemen',
'right-suppressredirect' => "Geen doorverwijzingen achterlaten bij het hernoemen van pagina's",
'right-upload' => 'Bestanden uploaden',
'right-reupload' => 'Bestaande bestanden overschrijven',
'right-reupload-own' => 'Eigen bestandsuploads overschrijven',
'right-reupload-shared' => 'Media uit de gedeelde mediadatabank lokaal overschrijven',
'right-upload_by_url' => 'Bestanden uploaden via een URL',
'right-purge' => 'De cache voor een pagina legen',
'right-autoconfirmed' => 'Behandeld worden als een geregistreerde gebruiker',
'right-bot' => 'Behandeld worden als een geautomatiseerd proces',
'right-nominornewtalk' => "Kleine bewerkingen aan een overlegpagina leiden niet tot een melding 'nieuwe berichten'",
'right-apihighlimits' => 'Hogere limieten in API-zoekopdrachten gebruiken',
'right-writeapi' => 'Bewerken via de API',
'right-delete' => "Pagina's verwijderen",
'right-bigdelete' => "Pagina's met een grote geschiedenis verwijderen",
'right-deletelogentry' => 'Specifieke logboekregels verwijderen en terugplaatsen',
'right-deleterevision' => "Versies van pagina's verbergen",
'right-deletedhistory' => 'Verwijderde versies bekijken, zonder te kunnen zien wat verwijderd is',
'right-deletedtext' => 'Verwijderde tekst en wijzigingen tussen verwijderde versies bekijken',
'right-browsearchive' => "Verwijderde pagina's zoeken",
'right-undelete' => "Verwijderde pagina's terugplaatsen",
'right-suppressrevision' => 'Verborgen versies bekijken en terugplaatsen',
'right-suppressionlog' => 'Niet-openbare logboeken bekijken',
'right-block' => 'Andere gebruikers de mogelijkheid ontnemen te bewerken',
'right-blockemail' => 'Een gebruiker het recht ontnemen om e-mail te versturen',
'right-hideuser' => 'Een gebruiker voor de overige gebruikers verbergen',
'right-ipblock-exempt' => 'IP-blokkades omzeilen',
'right-proxyunbannable' => "Blokkades voor proxy's gelden niet",
'right-unblockself' => 'Eigen gebruiker deblokkeren',
'right-protect' => 'Beveiligingsniveaus wijzigen',
'right-editprotected' => "Beveiligde pagina's bewerken",
'right-editinterface' => 'De gebruikersinterface bewerken',
'right-editusercssjs' => 'De CSS- en JS-bestanden van andere gebruikers bewerken',
'right-editusercss' => 'De CSS-bestanden van andere gebruikers bewerken',
'right-edituserjs' => 'De JavaScriptbestanden van andere gebruikers bewerken',
'right-rollback' => 'Snel de laatste bewerking(en) van een gebruiker van een pagina terugdraaien',
'right-markbotedits' => 'Teruggedraaide bewerkingen markeren als botbewerkingen',
'right-noratelimit' => 'Tijdsafhankelijke beperkingen negeren',
'right-import' => "Pagina's uit andere wiki's importeren",
'right-importupload' => "Pagina's importeren uit een bestandsupload",
'right-patrol' => 'Bewerkingen als gecontroleerd markeren',
'right-autopatrol' => 'Bewerkingen automatisch als gecontroleerd gemarkeerd krijgen',
'right-patrolmarks' => 'Controletekens in recente wijzigingen bekijken',
'right-unwatchedpages' => "Een lijst met pagina's die niet op een volglijst staan bekijken",
'right-mergehistory' => "De geschiedenis van pagina's samenvoegen",
'right-userrights' => 'Alle gebruikersrechten bewerken',
'right-userrights-interwiki' => "Gebruikersrechten van gebruikers in andere wiki's wijzigen",
'right-siteadmin' => 'De database blokkeren en weer vrijgeven',
'right-override-export-depth' => "Pagina's exporteren inclusief pagina's waarnaar verwezen wordt tot een diepte van vijf",
'right-sendemail' => 'E-mail versturen aan andere gebruikers',
'right-passwordreset' => 'E-mails voor wachtwoord opnieuw instellen bekijken',

# User rights log
'rightslog' => 'Gebruikersrechtenlogboek',
'rightslogtext' => 'Hieronder staan de wijzigingen in gebruikersrechten.',
'rightslogentry' => 'heeft de gebruikersrechten voor $1 gewijzigd van $2 naar $3',
'rightslogentry-autopromote' => 'is automatisch gepromoveerd van de groepen "$2" naar de groepen "$3"',
'logentry-rights-rights' => '$1 heeft groepslidmaatschap voor $3 gewijzigd van $4 naar $5',
'logentry-rights-rights-legacy' => '$1 heeft groepslidmaatschap voor $3 gewijzigd',
'logentry-rights-autopromote' => '$1 is automatisch gepromoveerd van $4 naar $5',
'rightsnone' => '(geen)',

# Associated actions - in the sentence "You do not have permission to X"
'action-read' => 'deze pagina te bekijken',
'action-edit' => 'deze pagina te bewerken',
'action-createpage' => "pagina's aan te maken",
'action-createtalk' => "overlegpagina's aan te maken",
'action-createaccount' => 'deze gebruiker aan te maken',
'action-minoredit' => 'deze bewerking als klein te markeren',
'action-move' => 'deze pagina te hernoemen',
'action-move-subpages' => "deze pagina en bijbehorende subpagina's te hernoemen",
'action-move-rootuserpages' => "gebruikerspagina's van het hoogste niveau te hernoemen",
'action-movefile' => 'dit bestand te hernoemen',
'action-upload' => 'dit bestand te uploaden',
'action-reupload' => 'dit bestaande bestand te overschrijven',
'action-reupload-shared' => 'dit bestand te uploaden, terwijl er al een bestand met dezelfde naam in de gedeelde mediadatabank staat',
'action-upload_by_url' => 'dit bestand vanaf een URL te uploaden',
'action-writeapi' => 'via de API te bewerken',
'action-delete' => 'deze pagina te verwijderen',
'action-deleterevision' => 'deze versie te verwijderen',
'action-deletedhistory' => 'de verwijderde versies van deze pagina te bekijken',
'action-browsearchive' => "verwijderde pagina's te zoeken",
'action-undelete' => 'deze pagina terug te plaatsen',
'action-suppressrevision' => 'deze verborgen versie te bekijken en terug te plaatsen',
'action-suppressionlog' => 'dit beschermde logboek te bekijken',
'action-block' => 'deze gebruiker een bewerkingsblokkade op te leggen',
'action-protect' => 'het beveiligingsniveau van deze pagina aan te passen',
'action-rollback' => 'bewerkingen van de laatste gebruiker die een pagina heeft bewerkt snel terugdraaien',
'action-import' => 'deze pagina van een andere wiki te importeren',
'action-importupload' => 'deze pagina van een bestandsupload te importeren',
'action-patrol' => 'bewerkingen van anderen als gecontroleerd te markeren',
'action-autopatrol' => 'eigen bewerkingen als gecontroleerd te laten markeren',
'action-unwatchedpages' => "de lijst met pagina's die niet op een volglijst staan te bekijken",
'action-mergehistory' => 'de geschiedenis van deze pagina samen te voegen',
'action-userrights' => 'alle gebruikersrechten te bewerken',
'action-userrights-interwiki' => "gebruikersrechten van gebruikers van andere wiki's te bewerken",
'action-siteadmin' => 'de database af te sluiten of open te stellen',
'action-sendemail' => 'e-mails te verzenden',

# Recent changes
'nchanges' => '$1 {{PLURAL:$1|bewerking|bewerkingen}}',
'recentchanges' => 'Recente wijzigingen',
'recentchanges-legend' => 'Opties voor recente wijzigingen',
'recentchanges-summary' => 'Op deze pagina kunt u de recentste wijzigingen in deze wiki bekijken.',
'recentchanges-feed-description' => 'Met deze feed kunt u de recentste wijzigingen in deze wiki bekijken.',
'recentchanges-label-newpage' => 'Met deze bewerking is een nieuwe pagina aangemaakt',
'recentchanges-label-minor' => 'Dit is een kleine bewerking',
'recentchanges-label-bot' => 'Deze bewerking is uitgevoerd door een bot',
'recentchanges-label-unpatrolled' => 'Deze bewerking is nog niet gecontroleerd',
'rcnote' => "Hieronder {{PLURAL:$1|staat de laatste bewerking|staan de laatste '''$1''' bewerkingen}} in de laatste {{PLURAL:$2|dag|'''$2''' dagen}}, op $4 om $5.",
'rcnotefrom' => "Wijzigingen sinds '''$2''' (met een maximum van '''$1''' wijzigingen).",
'rclistfrom' => 'Wijzigingen bekijken vanaf $1',
'rcshowhideminor' => 'Kleine wijzigingen $1',
'rcshowhidebots' => 'bots $1',
'rcshowhideliu' => 'aangemelde gebruikers $1',
'rcshowhideanons' => 'anonieme gebruikers $1',
'rcshowhidepatr' => 'gecontroleerde bewerkingen $1',
'rcshowhidemine' => 'mijn bewerkingen $1',
'rclinks' => 'De $1 laatste wijzigingen bekijken in de laatste $2 dagen<br />$3',
'diff' => 'wijz',
'hist' => 'gesch',
'hide' => 'verbergen',
'show' => 'weergeven',
'minoreditletter' => 'k',
'newpageletter' => 'N',
'boteditletter' => 'b',
'number_of_watching_users_pageview' => '[$1 {{PLURAL:$1|keer|keer}} op een volglijst]',
'rc_categories' => 'Beperken tot categorieën (scheiden met een "|")',
'rc_categories_any' => 'Elke',
'rc-change-size-new' => '$1 {{PLURAL:$1|byte|bytes}} na de wijziging',
'newsectionsummary' => '/* $1 */ nieuwe subkop',
'rc-enhanced-expand' => 'Details weergeven (JavaScript verplicht)',
'rc-enhanced-hide' => 'Details verbergen',
'rc-old-title' => 'oorspronkelijk aangemaakt als "$1"',

# Recent changes linked
'recentchangeslinked' => 'Verwante wijzigingen',
'recentchangeslinked-feed' => 'Verwante wijzigingen',
'recentchangeslinked-toolbox' => 'Verwante wijzigingen',
'recentchangeslinked-title' => 'Wijzigingen verwant aan "$1"',
'recentchangeslinked-noresult' => "Er zijn in de opgegeven periode geen bewerkingen geweest op de pagina's waarheen vanaf hier verwezen wordt.",
'recentchangeslinked-summary' => "Deze speciale pagina geeft de laatste bewerkingen weer op pagina's waarheen verwezen wordt vanaf een aangegeven pagina of op pagina's in een aangegeven categorie.
Pagina's die op [[Special:Watchlist|uw volglijst]] staan worden '''vet''' weergegeven.",
'recentchangeslinked-page' => 'Paginanaam:',
'recentchangeslinked-to' => "Wijzigingen aan pagina's met verwijzingen naar deze pagina bekijken",

# Upload
'upload' => 'Bestand uploaden',
'uploadbtn' => 'Bestand uploaden',
'reuploaddesc' => 'Upload annuleren en terugkeren naar het uploadformulier',
'upload-tryagain' => 'Bestandsbeschrijving bijwerken',
'uploadnologin' => 'Niet aangemeld',
'uploadnologintext' => 'U moet [[Special:UserLogin|aangemeld]] zijn om bestanden te kunnen uploaden.',
'upload_directory_missing' => 'De uploadmap ($1) is niet aanwezig en kon niet aangemaakt worden door de webserver.',
'upload_directory_read_only' => 'De webserver kan niet schrijven in de uploadmap ($1).',
'uploaderror' => 'Uploadfout',
'upload-recreate-warning' => "'''Waarschuwing: er is een bestand met deze naam verwijderd of hernoemd.'''

Hieronder worden het verwijderlogboek en het hernoemingslogboek voor deze pagina weergegeven:",
'uploadtext' => "Gebruik het onderstaande formulier om bestanden te uploaden.
Om eerder toegevoegde bestanden te bekijken of te zoeken kunt u naar de [[Special:FileList|bestandslijst]] gaan.
Uploads en bestanden die na verwijdering opnieuw worden toegevoegd zijn na te zien in het [[Special:Log/upload|uploadlogboek]].
Verwijderde bestanden worden bijgehouden in het [[Special:Log/delete|verwijderingslogboek]].

Om het bestand in te voegen in een pagina kunt u een van de volgende vormen gebruiken, al naar gelang het bestandsformaat dat van toepassing is:
* '''<nowiki>[[</nowiki>{{ns:file}}<nowiki>:Bestand.jpg]]</nowiki>''' om de volledige versie van het bestand te gebruiken;
* '''<nowiki>[[</nowiki>{{ns:file}}<nowiki>:Bestand.png|200px|thumb|left|alternatieve tekst]]</nowiki>''' om een 200-pixels brede afbeelding links weer te geven met een rand en met \"alternatieve tekst\" als beschrijving;
* '''<nowiki>[[</nowiki>{{ns:media}}<nowiki>:Bestand.ogg]]</nowiki>''' om naar het bestand te verwijzen zonder het weer te geven.",
'upload-permitted' => 'Toegelaten bestandstypes: $1.',
'upload-preferred' => 'Aangewezen bestandstypes: $1.',
'upload-prohibited' => 'Verboden bestandstypes: $1.',
'uploadlog' => 'uploadlogboek',
'uploadlogpage' => 'Uploadlogboek',
'uploadlogpagetext' => 'Hieronder staan de nieuwste bestanden.
Zie de [[Special:NewFiles|galerij met nieuwe bestanden]] voor een visueler overzicht.',
'filename' => 'Bestandsnaam',
'filedesc' => 'Beschrijving',
'fileuploadsummary' => 'Samenvatting:',
'filereuploadsummary' => 'Bestandswijzigingen:',
'filestatus' => 'Auteursrechtenstatus:',
'filesource' => 'Bron:',
'uploadedfiles' => 'Geüploade bestanden',
'ignorewarning' => 'Deze waarschuwing negeren en het bestand toch opslaan',
'ignorewarnings' => 'Alle waarschuwingen negeren',
'minlength1' => 'Bestandsnamen moeten minstens één letter bevatten.',
'illegalfilename' => 'De bestandsnaam "$1" bevat ongeldige tekens die niet gebruikt mogen worden in paginanamen.
Geef het bestand een andere naam, en probeer het dan opnieuw te uploaden.',
'filename-toolong' => 'Bestandsnamen mogen niet langer zijn dan 240 bytes.',
'badfilename' => 'De naam van het bestand is gewijzigd in "$1".',
'filetype-mime-mismatch' => 'De bestandsextensie ".$1" hoort niet bij het MIME-type van het bestand ($2).',
'filetype-badmime' => 'Het is niet toegestaan om bestanden van MIME-type "$1" te uploaden.',
'filetype-bad-ie-mime' => 'Dit bestand kan niet toegevoegd worden, omdat Internet Explorer het zou identificeren als "$1", een niet toegelaten bestandstype dat potentieel schadelijk is.',
'filetype-unwanted-type' => "'''\".\$1\"''' is een ongewenst bestandstype.
Aangewezen {{PLURAL:\$3|bestandstype is|bestandstypes zijn}} \$2.",
'filetype-banned-type' => "{{PLURAL:\$4|Het bestandstype '''\".\$1\"''' wordt|De bestandstypes '''\".\$1\"''' worden}} niet toegelaten.
{{PLURAL:\$3|Het toegelaten bestandstype is|De toegelaten bestandstypes zijn}} \$2.",
'filetype-missing' => 'Dit bestand heeft geen extensie (zoals ".jpg").',
'empty-file' => 'Het bestand dat u probeerde te uploaden had geen inhoud.',
'file-too-large' => 'Het bestand dat u probeerde te uploaden was te groot.',
'filename-tooshort' => 'Het bestand dat u probeerde te uploaden had een te korte bestandsnaam.',
'filetype-banned' => 'Het bestand dat u probeerde te uploaden was van een niet toegelaten bestandstype.',
'verification-error' => 'De verificatie van het bestand dat u probeerde te uploaden is mislukt.',
'hookaborted' => 'De wijziging die u probeerde te maken is afgebroken door een uitbreidingshook.',
'illegal-filename' => 'Deze bestandsnaam is niet toegestaan.',
'overwrite' => 'Het overschrijven van een bestand bestand is niet toegestaan.',
'unknown-error' => 'Er is een onbekende fout opgetreden.',
'tmp-create-error' => 'Het was niet mogelijk een tijdelijk bestand aan te maken.',
'tmp-write-error' => 'Er is een fout opgetreden bij het schrijven van het tijdelijke bestand.',
'large-file' => 'Aanbeveling: maak bestanden niet groter dan $1, dit bestand is $2.',
'largefileserver' => 'Het bestand is groter dan de instelling van de server toestaat.',
'emptyfile' => 'Het bestand dat u hebt geüpload lijkt leeg te zijn.
Dit zou kunnen komen door een typefout in de bestandsnaam.
Ga na of u dit bestand werkelijk bedoelde te uploaden.',
'windows-nonascii-filename' => 'Deze wiki ondersteunt geen bestandsnamen met speciale tekens.',
'fileexists' => 'Er bestaat al een bestand met deze naam.
Controleer <strong>[[:$1]]</strong> als u niet zeker weet of u het huidige bestand wilt overschrijven.
[[$1|thumb]]',
'filepageexists' => 'De beschrijvingspagina voor dit bestand bestaat al op <strong>[[:$1]]</strong>, maar er bestaat geen bestand met deze naam.
De samenvatting die u hebt opgegeven zal niet op de beschrijvingspagina verschijnen.
Bewerk de pagina handmatig om uw beschrijving daar weer te geven. [[$1|miniatuur]]',
'fileexists-extension' => 'Een bestand met dezelfde naam bestaat al: [[$2|thumb]]
* Naam van het geüploade bestand: <strong>[[:$1]]</strong>
* Naam van het bestaande bestand: <strong>[[:$2]]</strong>
Kies een andere naam.',
'fileexists-thumbnail-yes' => "Het bestand lijkt een verkleinde versie te zijn ''(miniatuurafbeelding)''. [[$1|thumb]]
Controleer het bestand <strong>[[:$1]]</strong>.
Als het gecontroleerde bestand dezelfde afbeelding van oorspronkelijke grootte is, is het niet noodzakelijk een extra miniatuurafbeelding te uploaden.",
'file-thumbnail-no' => "De bestandsnaam begint met <strong>$1</strong>.
Het lijkt een verkleinde afbeelding te zijn ''(miniatuurafbeelding)''.
Als u deze afbeelding in volledige resolutie hebt, upload die afbeelding dan.
Wijzig anders de bestandsnaam.",
'fileexists-forbidden' => 'Er bestaat al een bestand met deze naam, en dat kan niet overschreven worden.
Upload uw bestand onder een andere naam.
[[File:$1|thumb|center|$1]]',
'fileexists-shared-forbidden' => 'Er bestaat al een bestand met deze naam bij de gedeelde bestanden.
Als u het bestand alsnog wilt uploaden, ga dan terug en kies een andere naam.
[[File:$1|thumb|center|$1]]',
'file-exists-duplicate' => 'Dit bestand is indentiek aan {{PLURAL:$1|het volgende bestand|de volgende bestanden}}:',
'file-deleted-duplicate' => 'Een bestand dat identiek is aan dit bestand ([[:$1]]) is voorheen verwijderd.
Raadpleeg het verwijderingslogboek voordat u verder gaat.',
'uploadwarning' => 'Uploadwaarschuwing',
'uploadwarning-text' => 'Pas de onderstaande bestandsbeschrijving aan en probeer het daarna opnieuw.',
'savefile' => 'Bestand opslaan',
'uploadedimage' => 'heeft "[[$1]]" geüpload',
'overwroteimage' => 'heeft een nieuwe versie van "[[$1]]" toegevoegd',
'uploaddisabled' => 'Uploaden is uitgeschakeld',
'copyuploaddisabled' => 'Het uploaden van bestanden via een URL is uitgeschakeld.',
'uploadfromurl-queued' => 'Uw upload is in de wachtrij geplaatst.',
'uploaddisabledtext' => 'Het uploaden van bestanden is uitgeschakeld.',
'php-uploaddisabledtext' => 'Het uploaden van bestanden is uitgeschakeld in PHP.
Controleer de instelling "file_uploads".',
'uploadscripted' => 'Dit bestand bevat HTML- of scriptcode die foutief door uw browser kan worden weergegeven.',
'uploadvirus' => 'Het bestand bevat een virus! Details: $1',
'uploadjava' => 'Het bestand is een ZIP-bestand dat een Java .class-bestand bevat.
Het uploaden van Java-bestanden is niet toegestaan omdat hiermee beveiligingsinstellingen omzeild kunnen worden.',
'upload-source' => 'Bronbestand',
'sourcefilename' => 'Oorspronkelijke bestandsnaam:',
'sourceurl' => 'Bron-URL:',
'destfilename' => 'Opslaan als:',
'upload-maxfilesize' => 'Maximale bestandsgrootte: $1',
'upload-description' => 'Bestandsbeschrijving',
'upload-options' => 'Uploadinstellingen',
'watchthisupload' => 'Dit bestand volgen',
'filewasdeleted' => 'Er is eerder een bestand met deze naam verwijderd.
Raadpleeg het $1 voordat u het opnieuw toevoegt.',
'filename-bad-prefix' => "De naam van het bestand dat u aan het uploaden bent begint met '''\"\$1\"''', wat een niet-beschrijvende naam is die meestal automatisch door een digitale camera wordt gegeven.
Kies een duidelijke naam voor uw bestand.",
'filename-prefix-blacklist' => ' #<!-- leave this line exactly as it is --> <pre>
# De syntaxis is als volgt:
#   * Alle tekst vanaf het karakter "#" tot het einde van de regel wordt gezien als opmerking
#   * Iedere niet-lege regel is een voorvoegsel voor bestandsnamen die vaak automatisch worden toegekend door digitale camera\'s
CIMG # Casio
DSC_ # Nikon
DSCF # Fuji
DSCN # Nikon
DUW # sommige mobiele telefoons
IMG # algemeen
JD # Jenoptik
MGP # Pentax
PICT # overig
 #</pre> <!-- leave this line exactly as it is -->',
'upload-success-subj' => 'Het bestand is toegevoegd',
'upload-success-msg' => 'Uw upload van [$2] is geslaagd en is beschikbaar: [[:{{ns:file}}:$1]]',
'upload-failure-subj' => 'Uploadprobleem',
'upload-failure-msg' => 'Er was een probleem met uw upload van [$2]:

$1',
'upload-warning-subj' => 'Uploadwaarschuwing',
'upload-warning-msg' => 'Er was een probleem met uw upload van [$2].
Ga terug naar het [[Special:Upload/stash/$1|uploadformulier]] om dit probleem te verhelpen.',

'upload-proto-error' => 'Verkeerd protocol',
'upload-proto-error-text' => "Uploads via deze methode vereisen URL's die beginnen met <code>http://</code> of <code>ftp://</code>.",
'upload-file-error' => 'Interne fout',
'upload-file-error-text' => 'Er is een interne fout opgetreden tijdens het aanmaken van een tijdelijk bestaan op de server.
Neem contact op met een [[Special:ListUsers/sysop|systeembeheerder]].',
'upload-misc-error' => 'Onbekende uploadfout',
'upload-misc-error-text' => 'Er is tijdens het uploaden een onbekende fout opgetreden.
Controleer of de URL correct en beschikbaar is en probeer het opnieuw.
Als het probleem aanhoudt, neem dan contact op met een [[Special:ListUsers/sysop|systeembeheerder]].',
'upload-too-many-redirects' => 'De URL bevatte te veel doorverwijzingen',
'upload-unknown-size' => 'Onbekende grootte',
'upload-http-error' => 'Er is een HTTP-fout opgetreden: $1',
'upload-copy-upload-invalid-domain' => 'Uploaden per kopie is niet beschikbaar vanuit dit domein.',

# File backend
'backend-fail-stream' => 'Het was niet mogelijk het bestand $1 te streamen.',
'backend-fail-backup' => 'Het was niet mogelijk een reservekopie van het bestand $1 te maken.',
'backend-fail-notexists' => 'Het bestand $1 bestaat niet.',
'backend-fail-hashes' => 'Het was niet mogelijk de hashes voor het bestand op te halen om ze te vergelijken.',
'backend-fail-notsame' => 'Er staat al een niet-identiek bestand op de plaats $1.',
'backend-fail-invalidpath' => '$1 is geen geldig opslagpad.',
'backend-fail-delete' => 'Het bestand $1 kon niet verwijderd worden.',
'backend-fail-alreadyexists' => 'Het bestand $1 bestaat al.',
'backend-fail-store' => 'Het was niet mogelijk het bestand $1 op te slaan op locatie $2.',
'backend-fail-copy' => 'Het was niet mogelijk het bestand $1 te kopiëren naar $2.',
'backend-fail-move' => 'Het was niet mogelijk het bestand $1 te verplaatsen naar $2.',
'backend-fail-opentemp' => 'Het was niet mogelijk een tijdelijk bestand te openen.',
'backend-fail-writetemp' => 'Het was niet mogelijk naar een tijdelijk bestand te schrijven.',
'backend-fail-closetemp' => 'Het was niet mogelijk een tijdelijk bestand te sluiten.',
'backend-fail-read' => 'Het was niet mogelijk het bestand $1 te lezen.',
'backend-fail-create' => 'Het was niet mogelijk naar het bestand $1 te schrijven.',
'backend-fail-maxsize' => 'Het was niet mogelijk naar het bestand $1 te schrijven omdat het groter is dan {{PLURAL:$2|één byte|$2 bytes}}.',
'backend-fail-readonly' => 'Het opslagbackend "$1" kan op dit moment alleen gelezen worden. De opgegeven reden was: "$2"',
'backend-fail-synced' => 'Het bestand "$1" bevindt zich in een inconsistente toestand in de interne opslagbackends.',
'backend-fail-connect' => 'Het was niet mogelijk een verbinding te maken met het opslagbackend "$1".',
'backend-fail-internal' => 'Er is een onbekende fout opgetreden in het opslagbackend "$1".',
'backend-fail-contenttype' => 'Het inhoudstype van het bestand om in de opslag "$1" op te slaan kon niet bepaald worden.',
'backend-fail-batchsize' => 'Taak met $1 {{PLURAL:$1|bestandshandeling|bestandshandelingen}} in het opslagbackend; de limiet is $2 {{PLURAL:$2|handeling|handelingen}}.',
'backend-fail-usable' => 'Het was niet mogelijk naar het bestand $1 te schrijven of eruit te lezen vanwege onvoldoende rechten of niet-aanwezige mappen of containers.',

# File journal errors
'filejournal-fail-dbconnect' => 'Het was niet mogelijk een verbinding te maken met de journaldatabase voor het opslagbackend "$1".',
'filejournal-fail-dbquery' => 'Het was niet mogelijk de journaldatabase bij te werken voor het opslagbackend "$1".',

# Lock manager
'lockmanager-notlocked' => 'Het was niet mogelijk "$1" vrij te geven; dit object is niet vergrendeld.',
'lockmanager-fail-closelock' => 'Het was niet mogelijk het vergrendelingsbestand voor "$1" te sluiten.',
'lockmanager-fail-deletelock' => 'Het was niet mogelijk het vergrendelingsbestand voor "$1" te verwijderen.',
'lockmanager-fail-acquirelock' => 'Het was niet mogelijk "$1" te vergrendelen.',
'lockmanager-fail-openlock' => 'Het was niet mogelijk het vergrendelingsbestand voor "$1" te openen.',
'lockmanager-fail-releaselock' => 'Het was niet mogelijk vergrendeling van "$1" op te heffen.',
'lockmanager-fail-db-bucket' => 'Het was niet mogelijk om in contact te komen met voldoende vergrendelingsdatabases in de bucket $1.',
'lockmanager-fail-db-release' => 'Het was niet mogelijk om de vergrendeling voor de database $1 op te heffen.',
'lockmanager-fail-svr-acquire' => 'Het was niet mogelijk een vergrendeling te krijgen op server $1.',
'lockmanager-fail-svr-release' => 'Het was niet mogelijk om de vergrendeling voor de server $1 op te heffen.',

# ZipDirectoryReader
'zip-file-open-error' => 'Er is een fout opgetreden bij het openen van het bestand voor de ZIP-controle.',
'zip-wrong-format' => 'Het opgegeven bestand was geen ZIP-bestand.',
'zip-bad' => 'Het bestand is een corrupt of onleesbare ZIP-bestand.
De veiligheid kan niet worden gecontroleerd.',
'zip-unsupported' => 'Het bestand is een ZIP-bestand dat gebruik maakt van ZIP-mogelijkheden die MediaWiki niet ondersteunt.
De veiligheid kan niet worden gecontroleerd.',

# Special:UploadStash
'uploadstash' => 'Verborgen uploads',
'uploadstash-summary' => 'Deze pagina biedt toegang tot bestanden die geüpload zijn of nog geüpload worden maar nog niet beschikbaar gemaakt zijn in de wiki. Deze bestanden zijn alleen zichtbaar voor de gebruiker die ze uploadt.',
'uploadstash-clear' => 'Verborgen bestanden weggooien',
'uploadstash-nofiles' => 'Er zijn geen verborgen bestanden.',
'uploadstash-badtoken' => 'Het uitvoeren van de handeling is mislukt. Dit komt mogelijk doordat uw bewerkingsreferenties zijn verlopen. Probeer het opnieuw.',
'uploadstash-errclear' => 'Het verwijderen van de bestanden is mislukt.',
'uploadstash-refresh' => 'Lijst met bestanden bijwerken',
'invalid-chunk-offset' => 'Ongeldige chunkoffset',

# img_auth script messages
'img-auth-accessdenied' => 'Toegang geweigerd',
'img-auth-nopathinfo' => 'PATH_INFO mist.
Uw server is niet ingesteld om deze gegevens door te geven.
Misschien gebruikt deze CGI, en dan wordt img_auth niet ondersteund.
Zie https://www.mediawiki.org/wiki/Manual:Image_Authorization voor meer informatie.',
'img-auth-notindir' => 'Het opgevraagde pad is niet de ingestelde uploadmap.',
'img-auth-badtitle' => 'Het was niet mogelijk een geldige paginanaam te maken van "$1".',
'img-auth-nologinnWL' => 'U bent niet aangemeld en "$1" staat niet op de witte lijst.',
'img-auth-nofile' => 'Bestand "$1" bestaat niet.',
'img-auth-isdir' => 'U probeert de map "$1" te benaderen.
Alleen toegang tot bestanden is toegestaan.',
'img-auth-streaming' => 'Bezig met het streamen van "$1".',
'img-auth-public' => 'Het doel van img_auth.php is de uitvoer van bestanden van een besloten wiki.
Deze wiki is ingesteld als publieke wiki.
Om beveiligingsreden is img_auth.php uitgeschakeld.',
'img-auth-noread' => 'De gebruiker heeft geen leestoegang tot "$1".',
'img-auth-bad-query-string' => 'De URL bevat een ongeldige querystring.',

# HTTP errors
'http-invalid-url' => 'Ongeldige URL: $1',
'http-invalid-scheme' => 'URL\'s met de opmaak "$1" worden niet ondersteund',
'http-request-error' => 'Fout bij het verzenden van het verzoek.',
'http-read-error' => 'Fout bij het lezen van HTTP.',
'http-timed-out' => 'Timeout bij het HTTP-verzoek.',
'http-curl-error' => 'Fout bij het ophalen van URL: $1',
'http-host-unreachable' => 'De URL is niet bereikbaar.',
'http-bad-status' => 'Er is een probleem opgetreden bij het HTTP-verzoek: $1 $2',

# Some likely curl errors. More could be added from <http://curl.haxx.se/libcurl/c/libcurl-errors.html>
'upload-curl-error6' => 'Kon de URL niet bereiken',
'upload-curl-error6-text' => 'De opgegeven URL is niet bereikbaar.
Controleer of de URL juist is, en of de website beschikbaar is.',
'upload-curl-error28' => 'Uploadtime-out',
'upload-curl-error28-text' => 'Het duurde te lang voordat de website antwoordde.
Controleer of de website beschikbaar is, wacht even en probeer het dan opnieuw.
U kunt het misschien proberen als het minder druk is.',

'license' => 'Licentie:',
'license-header' => 'Licentie',
'nolicense' => 'Maak een keuze',
'license-nopreview' => '(Voorvertoning niet beschikbaar)',
'upload_source_url' => ' (een geldige, publiek toegankelijke URL)',
'upload_source_file' => ' (een bestand op uw computer)',

# Special:ListFiles
'listfiles-summary' => 'Op deze speciale pagina zijn alle toegevoegde bestanden te bekijken.
Als deze pagina wordt gefilterd op gebruiker, worden alleen bestanden waar de gebruiker de laatste versie van heeft geüpload weergegeven.',
'listfiles_search_for' => 'Zoeken naar bestand:',
'imgfile' => 'bestand',
'listfiles' => 'Bestandslijst',
'listfiles_thumb' => 'Miniatuur',
'listfiles_date' => 'Datum',
'listfiles_name' => 'Naam',
'listfiles_user' => 'Gebruiker',
'listfiles_size' => 'Grootte',
'listfiles_description' => 'Beschrijving',
'listfiles_count' => 'Versies',

# File description page
'file-anchor-link' => 'Bestand',
'filehist' => 'Bestandsgeschiedenis',
'filehist-help' => 'Klik op een datum/tijd om het bestand te zien zoals het destijds was.',
'filehist-deleteall' => 'alle versies verwijderen',
'filehist-deleteone' => 'verwijderen',
'filehist-revert' => 'terugdraaien',
'filehist-current' => 'huidige versie',
'filehist-datetime' => 'Datum/tijd',
'filehist-thumb' => 'Miniatuur',
'filehist-thumbtext' => 'Miniatuurafbeelding voor de versie van $2 om $3',
'filehist-nothumb' => 'Geen miniatuurafbeelding',
'filehist-user' => 'Gebruiker',
'filehist-dimensions' => 'Afmetingen',
'filehist-filesize' => 'Bestandsgrootte',
'filehist-comment' => 'Opmerking',
'filehist-missing' => 'Het bestand is niet aangetroffen',
'imagelinks' => 'Bestandsgebruik',
'linkstoimage' => "Dit bestand wordt op de volgende {{PLURAL:$1|pagina|$1 pagina's}} gebruikt:",
'linkstoimage-more' => 'Er {{PLURAL:$2|is|zijn}} meer dan $1 {{PLURAL:$1|verwijzing|verwijzingen}} naar dit bestand.
De volgende lijst geeft alleen de eerste {{PLURAL:$1|verwijzing|$1 verwijzingen}} naar dit bestand weer.
Er is ook een [[Special:WhatLinksHere/$2|volledige lijst]].',
'nolinkstoimage' => 'Geen enkele pagina gebruikt dit bestand.',
'morelinkstoimage' => '[[Special:WhatLinksHere/$1|Meer verwijzingen]] naar dit bestand bekijken.',
'linkstoimage-redirect' => '$1 (bestandsdoorverwijzing) $2',
'duplicatesoffile' => '{{PLURAL:$1|Het volgende bestand is|De volgende $1 bestanden zijn}} identiek aan dit bestand ([[Special:FileDuplicateSearch/$2|meer details]]):',
'sharedupload' => 'Dit bestand komt van $1 en kan ook door andere projecten gebruikt worden.',
'sharedupload-desc-there' => 'Dit bestand komt van $1 en kan ook in andere projecten gebruikt worden.
Zie de [$2 pagina met de bestandsbeschrijving] voor meer informatie.',
'sharedupload-desc-here' => 'Dit bestand komt van $1 en kan ook in andere projecten gebruikt worden.
De [$2 pagina met de bestandsbeschrijving] wordt hieronder weergegeven.',
'sharedupload-desc-edit' => 'Dit bestand komt van $1 en kan ook in andere projecten gebruikt worden.
U kunt de [$2 pagina met de bestandsbeschrijving] daar bewerken.',
'sharedupload-desc-create' => 'Dit bestand komt van $1 en kan ook in andere projecten gebruikt worden.
U kunt de beschrijving bewerken op de [$2 pagina met de bestandsbeschrijving].',
'filepage-nofile' => 'Er bestaat geen bestand met deze naam.',
'filepage-nofile-link' => 'Er bestaat geen bestand met deze naam, maar u kunt het [$1 uploaden].',
'uploadnewversion-linktext' => 'Een nieuwe versie van dit bestand uploaden',
'shared-repo-from' => 'van $1',
'shared-repo' => 'een gedeelde mediadatabank',
'shared-repo-name-wikimediacommons' => 'Wikimedia Commons',
'filepage.css' => "/ * De CSS die hier geplaatst wordt, wordt opgenomen in de bestandsbeschrijvingspagina en wordt ook opgenomen op externe wiki's (via externe repositories) * /",
'upload-disallowed-here' => 'U kunt dit bestand niet overschrijven.',

# File reversion
'filerevert' => '$1 terugdraaien',
'filerevert-legend' => 'Bestand terugdraaien',
'filerevert-intro' => "U bent '''[[Media:$1|$1]]''' aan het terugdraaien tot de [$4 versie op $2, $3].",
'filerevert-comment' => 'Reden:',
'filerevert-defaultcomment' => 'Teruggedraaid tot de versie op $1 om $2',
'filerevert-submit' => 'Terugdraaien',
'filerevert-success' => "'''[[Media:$1|$1]]''' is teruggedraaid tot de [$4 versie op $2, $3].",
'filerevert-badversion' => 'Er is geen vorige lokale versie van dit bestand met het opgegeven tijdstip.',

# File deletion
'filedelete' => '"$1" verwijderen',
'filedelete-legend' => 'Bestand verwijderen',
'filedelete-intro' => "U staat op het punt om het bestand '''[[Media:$1|$1]]''' te verwijderen, inclusief alle eerdere versies.",
'filedelete-intro-old' => "U bent de versie van '''[[Media:$1|$1]]''' van [$4 $3, $2] aan het verwijderen.",
'filedelete-comment' => 'Reden:',
'filedelete-submit' => 'Verwijderen',
'filedelete-success' => "'''$1''' is verwijderd.",
'filedelete-success-old' => "De versie van '''[[Media:$1|$1]]''' van $3, $2 is verwijderd.",
'filedelete-nofile' => "'''$1''' bestaat niet.",
'filedelete-nofile-old' => "Er is geen versie van '''$1''' in het archief met de aangegeven eigenschappen.",
'filedelete-otherreason' => 'Andere reden:',
'filedelete-reason-otherlist' => 'Andere reden',
'filedelete-reason-dropdown' => '*Veel voorkomende redenen voor verwijderen
** Auteursrechtenschending
** Duplicaatbestand',
'filedelete-edit-reasonlist' => 'Redenen voor verwijderen bewerken',
'filedelete-maintenance' => 'Het verwijderen en terugplaatsen is tijdelijk niet mogelijk wegens onderhoudswerkzaamheden.',
'filedelete-maintenance-title' => 'Bestand verwijderen is niet mogelijk',

# MIME search
'mimesearch' => 'Zoeken op MIME-type',
'mimesearch-summary' => 'Deze pagina maakt het filteren van bestanden voor het MIME-type mogelijk.
Invoer: inhoudstype/subtype, bijvoorbeeld <code>image/jpeg</code>.',
'mimetype' => 'MIME-type:',
'download' => 'downloaden',

# Unwatched pages
'unwatchedpages' => "Pagina's die niet op een volglijst staan",

# List redirects
'listredirects' => 'Doorverwijzingenlijst',

# Unused templates
'unusedtemplates' => 'Ongebruikte sjablonen',
'unusedtemplatestext' => 'Deze pagina geeft alle pagina\'s weer in de naamruimte {{ns:template}} die op geen enkele pagina gebruikt worden.
Vergeet niet de "Verwijzingen naar deze pagina" te controleren alvorens dit sjabloon te verwijderen.',
'unusedtemplateswlh' => 'andere verwijzingen',

# Random page
'randompage' => 'Willekeurige pagina',
'randompage-nopages' => "Er zijn geen pagina's in de volgende {{PLURAL:$2|naamruimte|naamruimten}}: $1.",

# Random redirect
'randomredirect' => 'Willekeurige doorverwijzing',
'randomredirect-nopages' => 'Er zijn geen doorverwijzingen in de naamruimte "$1".',

# Statistics
'statistics' => 'Statistieken',
'statistics-header-pages' => 'Paginastatistieken',
'statistics-header-edits' => 'Bewerkingsstatistieken',
'statistics-header-views' => 'Paginaweergavestatistieken',
'statistics-header-users' => 'Gebruikersstatistieken',
'statistics-header-hooks' => 'Overige statistieken',
'statistics-articles' => "Inhoudelijke pagina's",
'statistics-pages' => "Pagina's",
'statistics-pages-desc' => "Alle pagina's in de wiki, inclusief overlegpagina's, doorverwijzingen, enzovoort.",
'statistics-files' => 'Bestanden',
'statistics-edits' => 'Paginabewerkingen sinds het begin van {{SITENAME}}',
'statistics-edits-average' => 'Gemiddeld aantal bewerkingen per pagina',
'statistics-views-total' => "Totaal aantal weergegeven pagina's",
'statistics-views-total-desc' => "Het bekijken van niet-bestaande pagina's en speciale pagina's is niet inbegrepen",
'statistics-views-peredit' => "Weergegeven pagina's per bewerking",
'statistics-users' => 'Geregistreerde [[Special:ListUsers|gebruikers]]',
'statistics-users-active' => 'Actieve gebruikers',
'statistics-users-active-desc' => 'Gebruikers die in de afgelopen {{PLURAL:$1|dag|$1 dagen}} een handeling hebben uitgevoerd',
'statistics-mostpopular' => "Meest bekeken pagina's",

'disambiguations' => "Pagina's die verwijzen naar doorverwijspagina's",
'disambiguationspage' => 'Template:Doorverwijspagina',
'disambiguations-text' => "Hieronder staan pagina's met tenminste één verwijzing naar een '''doorverwijspagina'''.
Deze horen waarschijnlijk direct naar een meer toepasselijke pagina te verwijzen.<br />
Een pagina wordt gezien als doorverwijspagina als er een sjabloon op staat dat opgenomen is op [[MediaWiki:Disambiguationspage]].",

'doubleredirects' => 'Dubbele doorverwijzingen',
'doubleredirectstext' => "Deze lijst bevat pagina's die doorverwijzen naar andere doorverwijspagina's.
Elke rij bevat verwijzingen naar de eerste en de tweede doorverwijspagina en een verwijzing naar de doelpagina van de tweede doorverwijspagina.
Meestal is de laatste pagina het eigenlijke doel, waar de eerste pagina naar zou moeten doorverwijzen.
<del>Doorgehaalde regels</del> geven aan dat het probleem al is opgelost.",
'double-redirect-fixed-move' => '[[$1]] is verplaatst en is nu een doorverwijzing naar [[$2]]',
'double-redirect-fixed-maintenance' => 'Correctie dubbele doorverwijzing van [[$1]] naar [[$2]].',
'double-redirect-fixer' => 'Doorverwijzingen opschonen',

'brokenredirects' => 'Defecte doorverwijzingen',
'brokenredirectstext' => "De onderstaande doorverwijzigingen verwijzen naar niet-bestaande pagina's.",
'brokenredirects-edit' => 'bewerken',
'brokenredirects-delete' => 'verwijderen',

'withoutinterwiki' => "Pagina's zonder taalverwijzingen",
'withoutinterwiki-summary' => "De volgende pagina's verwijzen niet naar versies in een andere taal.",
'withoutinterwiki-legend' => 'Voorvoegsel',
'withoutinterwiki-submit' => 'Bekijken',

'fewestrevisions' => "Pagina's met de minste bewerkingen",

# Miscellaneous special pages
'nbytes' => '$1 {{PLURAL:$1|byte|bytes}}',
'ncategories' => '$1 {{PLURAL:$1|categorie|categorieën}}',
'ninterwikis' => '$1 {{PLURAL:$1|interwikiverwijzing|interwikiverwijzingen}}',
'nlinks' => '$1 {{PLURAL:$1|verwijzing|verwijzingen}}',
'nmembers' => '$1 {{PLURAL:$1|item|items}}',
'nrevisions' => '$1 {{PLURAL:$1|versie|versies}}',
'nviews' => '{{PLURAL:$1|1 keer|$1 keer}} bekeken',
'nimagelinks' => "Gebruikt op {{PLURAL:$1|één pagina|$1 pagina's}}",
'ntransclusions' => "gebruikt op {{PLURAL:$1|één pagina|$1 pagina's}}",
'specialpage-empty' => 'Er zijn geen resultaten voor deze rapportage.',
'lonelypages' => "Weespagina's",
'lonelypagestext' => "Naar de onderstaande pagina's wordt vanuit {{SITENAME}} niet verwezen.
De pagina's zijn ook niet als sjabloon opgenomen.",
'uncategorizedpages' => "Niet-gecategoriseerde pagina's",
'uncategorizedcategories' => 'Niet-gecategoriseerde categorieën',
'uncategorizedimages' => 'Niet-gecategoriseerde bestanden',
'uncategorizedtemplates' => 'Niet-gecategoriseerde sjablonen',
'unusedcategories' => 'Ongebruikte categorieën',
'unusedimages' => 'Ongebruikte bestanden',
'popularpages' => "Veel bekeken pagina's",
'wantedcategories' => 'Niet-bestaande categorieën met de meeste verwijzingen',
'wantedpages' => "Niet-bestaande pagina's met verwijzingen",
'wantedpages-badtitle' => 'Ongeldige paginanaam in resultaat: $1',
'wantedfiles' => 'Niet-bestaande bestanden met verwijzingen',
'wantedfiletext-cat' => "De volgende bestanden worden gebruikt maar bestaan niet. Bestanden van externe repositories kunnen zijn opgenomen in de lijst, ondanks dat ze bestaan. Dergelijke vals positieven worden <del>doorgehaald weergegeven</del>. Pagina's die niet-bestaande bestanden insluiten staan op de pagina [[:$1]].",
'wantedfiletext-nocat' => 'De volgende bestanden worden gebruikt maar bestaan niet. Bestanden van externe repositories kunnen zijn opgenomen in de lijst, ondanks dat ze bestaan. Dergelijke vals positieven worden <del>doorgehaald weergegeven</del>.',
'wantedtemplates' => 'Niet-bestaande sjablonen met verwijzingen',
'mostlinked' => "Pagina's waar het meest naar verwezen wordt",
'mostlinkedcategories' => 'Categorieën waar het meest naar verwezen wordt',
'mostlinkedtemplates' => 'Meestgebruikte sjablonen',
'mostcategories' => "Pagina's met de meeste categorieën",
'mostimages' => 'Meestgebruikte bestanden',
'mostinterwikis' => "Pagina's met de meeste interwikiverwijzingen",
'mostrevisions' => "Pagina's met de meeste bewerkingen",
'prefixindex' => "Alle pagina's op voorvoegsel",
'prefixindex-namespace' => "Alle pagina's met het voorvoegsel (naamruimte $1)",
'shortpages' => "Korte pagina's",
'longpages' => "Lange pagina's",
'deadendpages' => "Pagina's zonder verwijzingen",
'deadendpagestext' => "De onderstaande pagina's verwijzen niet naar andere pagina's in deze wiki.",
'protectedpages' => "Beveiligde pagina's",
'protectedpages-indef' => 'Alleen blokkades zonder vervaldatum',
'protectedpages-cascade' => 'Alleen beveiligingen met de cascade-optie',
'protectedpagestext' => "De volgende pagina's zijn beveiligd en kunnen niet bewerkt of hernoemd worden",
'protectedpagesempty' => "Er zijn momenteel geen pagina's beveiligd die aan deze voorwaarden voldoen.",
'protectedtitles' => 'Beveiligde paginanamen',
'protectedtitlestext' => 'De volgende paginanamen zijn beveiligd en kunnen niet aangemaakt worden',
'protectedtitlesempty' => 'Er zijn momenteel geen paginannamen beveiligd die aan deze voorwaarden voldoen.',
'listusers' => 'Gebruikerslijst',
'listusers-editsonly' => 'Alleen gebruikers met bewerkingen weergeven',
'listusers-creationsort' => 'Sorteren op registratiedatum',
'usereditcount' => '$1 {{PLURAL:$1|bewerking|bewerkingen}}',
'usercreated' => '{{GENDER:$3|Geregistreerd}} op $1 om $2',
'newpages' => "Nieuwe pagina's",
'newpages-username' => 'Gebruikersnaam:',
'ancientpages' => "Oudste pagina's",
'move' => 'Hernoemen',
'movethispage' => 'Deze pagina hernoemen',
'unusedimagestext' => 'De volgende bestanden zijn aanwezig maar worden nergens gebruikt.
Het is mogelijk dat er direct verwezen wordt naar een bestand.
Een bestand kan hier dus ten onrechte opgenomen zijn.',
'unusedcategoriestext' => 'Hieronder staan categorieën die zijn aangemaakt, maar door geen enkele pagina of andere categorie gebruikt worden.',
'notargettitle' => 'Geen doelpagina',
'notargettext' => 'U hebt niet opgegeven voor welke pagina of gebruiker u deze handeling wilt uitvoeren.',
'nopagetitle' => 'Te hernoemen pagina bestaat niet',
'nopagetext' => 'De doelpagina die u hebt opgegeven bestaat niet.',
'pager-newer-n' => '{{PLURAL:$1|1 nieuwere|$1 nieuwere}}',
'pager-older-n' => '{{PLURAL:$1|1 oudere|$1 oudere}}',
'suppress' => 'Toezicht',
'querypage-disabled' => 'Deze speciale pagina is uitgeschakeld om performanceredenen.',

# Book sources
'booksources' => 'Boekinformatie',
'booksources-search-legend' => 'Bronnen en gegevens over een boek zoeken',
'booksources-go' => 'OK',
'booksources-text' => 'Hieronder staat een lijst met koppelingen naar andere websites die nieuwe of gebruikte boeken verkopen, en die wellicht meer informatie over het boek dat u zoekt hebben:',
'booksources-invalid-isbn' => 'Het ingegeven ISBN lijkt niet geldig te zijn.
Controleer of u wellicht een fout hebt gemaakt bij de invoer.',

# Special:Log
'specialloguserlabel' => 'Uitvoerende gebruiker:',
'speciallogtitlelabel' => 'Doel (paginanaam of gebruiker):',
'log' => 'Logboeken',
'all-logs-page' => 'Alle openbare logboeken',
'alllogstext' => 'Dit is het gecombineerde logboek van {{SITENAME}}.
U kunt ook kiezen voor specifieke logboeken en filteren op gebruiker (hoofdlettergevoelig) en paginanaam (hoofdlettergevoelig).',
'logempty' => 'Er zijn geen regels in het logboek die voldoen aan deze criteria.',
'log-title-wildcard' => "Pagina's zoeken die met deze tekens beginnen",
'showhideselectedlogentries' => 'Geselecteerde logboekregels weergeven of verbergen',

# Special:AllPages
'allpages' => "Alle pagina's",
'alphaindexline' => '$1 tot $2',
'nextpage' => 'Volgende pagina ($1)',
'prevpage' => 'Vorige pagina ($1)',
'allpagesfrom' => "Pagina's bekijken vanaf:",
'allpagesto' => "Pagina's bekijken tot:",
'allarticles' => "Alle pagina's",
'allinnamespace' => "Alle pagina's (naamruimte $1)",
'allnotinnamespace' => "Alle pagina's (niet in naamruimte $1)",
'allpagesprev' => 'Vorige',
'allpagesnext' => 'Volgende',
'allpagessubmit' => 'OK',
'allpagesprefix' => "Pagina's bekijken die beginnen met:",
'allpagesbadtitle' => 'De opgegeven paginanaam is ongeldig of had een intertaal- of interwikivoorvoegsel.
Mogelijk bevatte de naam tekens die niet gebruikt mogen worden in paginanamen.',
'allpages-bad-ns' => '{{SITENAME}} heeft geen naamruimte "$1".',
'allpages-hide-redirects' => 'Doorverwijzingen verbergen',

# SpecialCachedPage
'cachedspecial-viewing-cached-ttl' => 'U bekijkt een cacheversie van deze pagina, die maximaal $1 oud is.',
'cachedspecial-viewing-cached-ts' => 'U bekijkt een cacheversie van deze pagina, die mogelijk niet volledig is bijgewerkt.',
'cachedspecial-refresh-now' => 'Meest recente weergeven.',

# Special:Categories
'categories' => 'Categorieën',
'categoriespagetext' => "De volgende {{PLURAL:$1|categorie bevat|categorieën bevatten}} pagina's of mediabestanden.
[[Special:UnusedCategories|Ongebruikte categorieën]] worden hier niet weergegeven.
Zie ook [[Special:WantedCategories|niet-bestaande categorieën met verwijzingen]].",
'categoriesfrom' => 'Categorieën weergeven vanaf:',
'special-categories-sort-count' => 'op aantal sorteren',
'special-categories-sort-abc' => 'alfabetisch sorteren',

# Special:DeletedContributions
'deletedcontributions' => 'Verwijderde bijdragen',
'deletedcontributions-title' => 'Verwijderde gebruikersbijdragen',
'sp-deletedcontributions-contribs' => 'bijdragen',

# Special:LinkSearch
'linksearch' => 'Externe verwijzingen zoeken',
'linksearch-pat' => 'Zoekpatroon:',
'linksearch-ns' => 'Naamruimte:',
'linksearch-ok' => 'Zoeken',
'linksearch-text' => 'Wildcards zoals "*.wikipedia.org" of "*.org" zijn toegestaan.
Heeft tenminste een topleveldomein nodig, zoals bijvoorbeeld "*.org".<br />
Ondersteunde protocollen: <code>$1</code> (wordt "http://"als er geen protocol wordt opgegeven).',
'linksearch-line' => '$1 heeft een verwijzing in $2',
'linksearch-error' => 'Wildcards zijn alleen toegestaan aan het begin van een hostnaam.',

# Special:ListUsers
'listusersfrom' => 'Gebruikers bekijken vanaf:',
'listusers-submit' => 'Weergeven',
'listusers-noresult' => 'Geen gebruiker gevonden.',
'listusers-blocked' => '(geblokkeerd)',

# Special:ActiveUsers
'activeusers' => 'Aanwezige gebruikers',
'activeusers-intro' => 'Dit is een lijst met gebruikers die enige activiteit hebben laten zien in de afgelopen {{PLURAL:$1|dag|$1 dagen}}.',
'activeusers-count' => '$1 recente {{PLURAL:$1|bewerking|bewerkingen}} in de {{PLURAL:$3|afgelopen dag|laatste $3 dagen}}',
'activeusers-from' => 'Gebruikers worden weergegeven vanaf:',
'activeusers-hidebots' => 'Bots verbergen',
'activeusers-hidesysops' => 'Beheerders verbergen',
'activeusers-noresult' => 'Geen actieve gebruikers gevonden.',

# Special:Log/newusers
'newuserlogpage' => 'Logboek nieuwe gebruikers',
'newuserlogpagetext' => 'Hieronder staan de nieuw ingeschreven gebruikers',

# Special:ListGroupRights
'listgrouprights' => 'Rechten van gebruikersgroepen',
'listgrouprights-summary' => 'Op deze pagina staan de gebruikersgroepen in deze wiki beschreven, met hun bijbehorende rechten.
Er kan [[{{MediaWiki:Listgrouprights-helppage}}|extra informatie]] over individuele rechten aanwezig zijn.',
'listgrouprights-key' => '* <span class="listgrouprights-granted">Toegewezen recht</span>
* <span class="listgrouprights-revoked">Ingetrokken recht</span>',
'listgrouprights-group' => 'Groep',
'listgrouprights-rights' => 'Rechten',
'listgrouprights-helppage' => 'Help:Gebruikersrechten',
'listgrouprights-members' => '(ledenlijst)',
'listgrouprights-addgroup' => 'Gebruikers aan de volgende {{PLURAL:$2|groep|groepen}} toevoegen: $1',
'listgrouprights-removegroup' => 'Gebruikers uit de volgende {{PLURAL:$2|groep|groepen}} verwijderen: $1',
'listgrouprights-addgroup-all' => 'Gebruikers aan alle groepen toevoegen',
'listgrouprights-removegroup-all' => 'Gebruikers uit alle groepen verwijderen',
'listgrouprights-addgroup-self' => 'De volgende {{PLURAL:$2|groep|groepen}} toevoegen aan eigen gebruiker: $1',
'listgrouprights-removegroup-self' => 'De volgende {{PLURAL:$2|groep|groepen}} verwijderen van eigen gebruiker: $1',
'listgrouprights-addgroup-self-all' => 'Alle groepen toevoegen aan eigen gebruiker',
'listgrouprights-removegroup-self-all' => 'Alle groepen verwijderen van eigen gebruiker',

# E-mail user
'mailnologin' => 'Geen verzendadres beschikbaar',
'mailnologintext' => 'U moet [[Special:UserLogin|aangemeld]] zijn en een geldig e-mailadres in uw [[Special:Preferences|voorkeuren]] vermelden om andere gebruikers te kunnen e-mailen.',
'emailuser' => 'Deze gebruiker e-mailen',
'emailuser-title-target' => 'Deze {{GENDER:$1|gebruiker}} e-mailen',
'emailuser-title-notarget' => 'Gebruiker e-mailen',
'emailpage' => 'Gebruiker e-mailen',
'emailpagetext' => 'Via dit formulier kunt u een e-mail aan {{GENDER:$1|deze gebruiker}} verzenden.
Het e-mailadres dat u hebt opgegeven bij [[Special:Preferences|uw voorkeuren]] wordt als afzender gebruikt.
De ontvanger kan dus direct naar u reageren.',
'usermailererror' => 'Foutmelding bij het verzenden:',
'defemailsubject' => 'E-mail van {{SITENAME}}-gebruiker "$1"',
'usermaildisabled' => 'Gebruikerse-mail uitgeschakeld',
'usermaildisabledtext' => 'U kunt geen e-mail verzenden naar andere gebruikers op deze wiki',
'noemailtitle' => 'Van deze gebruiker is geen e-mailadres bekend',
'noemailtext' => 'Deze gebruiker heeft geen geldig e-mailadres opgegeven.',
'nowikiemailtitle' => 'E-mail is niet toegestaan',
'nowikiemailtext' => 'Deze gebruiker wil geen e-mail ontvangen van andere gebruikers.',
'emailnotarget' => 'Niet-bestaande of ongeldige ontvanger.',
'emailtarget' => 'Voer de geadresseerde in',
'emailusername' => 'Gebruikersnaam:',
'emailusernamesubmit' => 'Opslaan',
'email-legend' => 'Een e-mail verzenden naar een andere gebruiker van {{SITENAME}}',
'emailfrom' => 'Van:',
'emailto' => 'Aan:',
'emailsubject' => 'Onderwerp:',
'emailmessage' => 'Bericht:',
'emailsend' => 'Verzenden',
'emailccme' => 'Een kopie van dit bericht naar mijn e-mailadres zenden.',
'emailccsubject' => 'Kopie van uw bericht aan $1: $2',
'emailsent' => 'E-mail verzonden',
'emailsenttext' => 'Uw e-mail is verzonden.',
'emailuserfooter' => 'Deze e-mail is verstuurd door $1 aan $2 door de functie "Deze gebruiker e-mailen" van {{SITENAME}}.',

# User Messenger
'usermessage-summary' => 'Systeembericht achtergelaten',
'usermessage-editor' => 'Systeembericht',

# Watchlist
'watchlist' => 'Volglijst',
'mywatchlist' => 'Mijn volglijst',
'watchlistfor2' => 'Voor $1 $2',
'nowatchlist' => 'Uw volglijst is leeg.',
'watchlistanontext' => 'Om uw volglijst te bekijken of te bewerken moet u zich $1.',
'watchnologin' => 'U bent niet aangemeld',
'watchnologintext' => 'U dient [[Special:UserLogin|aangemeld]] te zijn om uw volglijst te bewerken.',
'addwatch' => 'Toevoegen aan volglijst',
'addedwatchtext' => "De pagina \"[[:\$1]]\" is toegevoegd aan uw [[Special:Watchlist|volglijst]].
Toekomstige bewerkingen van deze pagina en de bijbehorende overlegpagina worden op [[Special:Watchlist|uw volglijst]] vermeld en worden '''vet''' weergegeven in de [[Special:RecentChanges|lijst van recente wijzigingen]].",
'removewatch' => 'Verwijderen uit volglijst',
'removedwatchtext' => 'De pagina "[[:$1]]" is van [[Special:Watchlist|uw volglijst]] verwijderd.',
'watch' => 'Volgen',
'watchthispage' => 'Pagina volgen',
'unwatch' => 'Niet volgen',
'unwatchthispage' => 'Niet meer volgen',
'notanarticle' => 'Is geen pagina',
'notvisiblerev' => 'De laatste versie van een andere gebruiker is verwijderd',
'watchnochange' => "Geen van de pagina's op uw volglijst is in deze periode bewerkt.",
'watchlist-details' => "Er {{PLURAL:$1|staat één pagina|staan $1 pagina's}} op uw volglijst, exclusief overlegpagina's.",
'wlheader-enotif' => '* U wordt per e-mail gewaarschuwd',
'wlheader-showupdated' => "* Pagina's die zijn bewerkt sinds uw laatste bezoek worden '''vet''' weergegeven",
'watchmethod-recent' => "controleer recente wijzigingen op pagina's op volglijst",
'watchmethod-list' => "controleer pagina's op volglijst op wijzigingen",
'watchlistcontains' => "Er {{PLURAL:$1|staat 1 pagina|staan $1 pagina's}} op uw volglijst.",
'iteminvalidname' => "Probleem met object '$1', ongeldige naam…",
'wlnote' => 'Hieronder {{PLURAL:$1|staat de laaste wijziging|staan de laatste $1 wijzigingen}} in {{PLURAL:$2|het laatste uur|de laatste $2 uur}} per $3 om $4.',
'wlshowlast' => 'Laatste $1 uur, $2 dagen bekijken ($3)',
'watchlist-options' => 'Opties voor volglijst',

# Displayed when you click the "watch" button and it is in the process of watching
'watching' => 'Bezig met plaatsen op volglijst…',
'unwatching' => 'Bezig met verwijderen van volglijst…',
'watcherrortext' => 'Er is een fout opgetreden tijdens het wijzigen van uw volglijstinstellingen voor "$1".',

'enotif_mailer' => '{{SITENAME}}-berichtensysteem',
'enotif_reset' => "Alle pagina's markeren als bezocht",
'enotif_newpagetext' => 'Dit is een nieuwe pagina.',
'enotif_impersonal_salutation' => 'gebruiker van {{SITENAME}}',
'changed' => 'gewijzigd',
'created' => 'aangemaakt',
'enotif_subject' => 'Pagina $PAGETITLE op {{SITENAME}} is $CHANGEDORCREATED door $PAGEEDITOR',
'enotif_lastvisited' => 'Zie $1 voor alle wijzigingen sinds uw laatste bezoek.',
'enotif_lastdiff' => 'Ga naar $1 om deze wijziging te bekijken.',
'enotif_anon_editor' => 'anonieme gebruiker $1',
'enotif_body' => 'Beste $WATCHINGUSERNAME,

De pagina $PAGETITLE op {{SITENAME}} is $CHANGEDORCREATED op $PAGEEDITDATE door $PAGEEDITOR. Zie $PAGETITLE_URL voor de huidige versie.

$NEWPAGE

Samenvatting van de wijziging: $PAGESUMMARY $PAGEMINOREDIT

Contactgegevens van de auteur:
E-mailadres: $PAGEEDITOR_EMAIL
Wiki: $PAGEEDITOR_WIKI

Tenzij u deze pagina bezoekt, komen er geen verdere berichten. Op uw volglijst kunt u voor alle gevolgde pagina\'s de waarschuwingsinstellingen opschonen.

Groet van uw {{SITENAME}}-waarschuwingssysteem.

--
U kunt uw e-mailinstellingen wijzigen op:
{{canonicalurl:{{#special:Preferences}}}}

U kunt uw volglijstinstellingen wijzigen op:
{{canonicalurl:Special:Watchlist/edit}}

U kunt de pagina van uw volglijst verwijderen via de volgende verwijzing:
$UNWATCHURL

Terugkoppeling en verdere assistentie:
{{canonicalurl:{{MediaWiki:Helppage}}}}',

# Delete
'deletepage' => 'Pagina verwijderen',
'confirm' => 'Bevestigen',
'excontent' => 'De inhoud was: "$1"',
'excontentauthor' => 'De inhoud was: "$1" ([[Special:Contributions/$2|$2]] was de enige auteur)',
'exbeforeblank' => 'De inhoud was: "$1"',
'exblank' => 'pagina was leeg',
'delete-confirm' => '"$1" verwijderen',
'delete-legend' => 'Verwijderen',
'historywarning' => "'''Waarschuwing:''' de pagina die u wilt verwijderen heeft ongeveer $1 {{PLURAL:$1|versie|versies}}:",
'confirmdeletetext' => 'U staat op het punt een pagina te verwijderen, inclusief de geschiedenis.
Bevestig hieronder dat dit inderdaad uw bedoeling is, dat u de gevolgen begrijpt en dat de verwijdering overeenstemt met het [[{{MediaWiki:Policy-url}}|beleid]].',
'actioncomplete' => 'Handeling voltooid',
'actionfailed' => 'De handeling is mislukt.',
'deletedtext' => '"$1" is verwijderd.
Zie het $2 voor een overzicht van recente verwijderingen.',
'dellogpage' => 'Verwijderingslogboek',
'dellogpagetext' => "Hieronder wordt een lijst met recent verwijderde pagina's en bestanden weergegeven.",
'deletionlog' => 'verwijderingslogboek',
'reverted' => 'Eerdere versie hersteld',
'deletecomment' => 'Reden:',
'deleteotherreason' => 'Andere reden:',
'deletereasonotherlist' => 'Andere reden',
'deletereason-dropdown' => '*Veel voorkomende verwijderredenen
** Op aanvraag van auteur
** Schending van auteursrechten
** Vandalisme',
'delete-edit-reasonlist' => 'Redenen voor verwijderen bewerken',
'delete-toobig' => "Deze pagina heeft een lange bewerkingsgeschiedenis, meer dan $1 {{PLURAL:$1|versie|versies}}.
Het verwijderen van dit soort pagina's is met rechten beperkt om het per ongeluk verstoren van de werking van {{SITENAME}} te voorkomen.",
'delete-warning-toobig' => 'Deze pagina heeft een lange bewerkingsgeschiedenis, meer dan $1 {{PLURAL:$1|versie|versies}}.
Het verwijderen van deze pagina kan de werking van de database van {{SITENAME}} verstoren.
Wees voorzichtig.',

# Rollback
'rollback' => 'Wijzigingen ongedaan maken',
'rollback_short' => 'Terugdraaien',
'rollbacklink' => 'terugdraaien',
'rollbacklinkcount' => '{{PLURAL:$1|één bewerking|$1 bewerkingen}} terugdraaien',
'rollbacklinkcount-morethan' => 'Meer dan {{PLURAL:$1|één bewerking|$1 bewerkingen}} terugdraaien',
'rollbackfailed' => 'Ongedaan maken van wijzigingen mislukt.',
'cantrollback' => 'Ongedaan maken van wijzigingen onmogelijk: deze pagina heeft slechts 1 auteur.',
'alreadyrolled' => 'Het is niet mogelijk om de bewerking van de pagina [[:$1]] door [[User:$2|$2]] ([[User talk:$2|overleg]]{{int:pipe-separator}}[[Special:Contributions/$2|bijdragen]]) ongedaan te maken.
Iemand anders heeft deze pagina al bewerkt of hersteld naar een eerdere versie.

De meest recente bewerking is gemaakt door [[User:$3|$3]] ([[User talk:$3|overleg]]{{int:pipe-separator}}[[Special:Contributions/$3|bijdragen]]).',
'editcomment' => "De bewerkingssamenvatting was: \"''\$1''\".",
'revertpage' => 'Wijzigingen door [[Special:Contributions/$2|$2]] ([[User talk:$2|Overleg]]) hersteld tot de laatste versie door [[User:$1|$1]]',
'revertpage-nouser' => 'Wijzigingen door (gebruikersnaam verwijderd) teruggedraaid naar de laatste versie door [[User:$1|$1]]',
'rollback-success' => 'De wijzigingen door $1 zijn teruggedraaid.
De laatste versie van $2 is hersteld.',

# Edit tokens
'sessionfailure-title' => 'Sessiefout',
'sessionfailure' => 'Er lijkt een probleem te zijn met uw aanmeldsessie.
Uw handeling is gestopt uit voorzorg tegen een beveiligingsrisico (dat bestaat uit mogelijke "hijacking" van deze sessie).
Ga een pagina terug, laad die pagina opnieuw en probeer het nog eens.',

# Protect
'protectlogpage' => 'Beveiligingslogboek',
'protectlogtext' => "Hieronder staan pagina's waarvan de beveiliging recentelijk gewijzigd is.
Zie de [[Special:ProtectedPages|lijst met beveiligde pagina's]] voor alle beveiligde pagina's.",
'protectedarticle' => 'heeft "[[$1]]" beveiligd',
'modifiedarticleprotection' => 'heeft het beveiligingsniveau voor "[[$1]]" gewijzigd',
'unprotectedarticle' => 'heeft de beveiliging van "[[$1]]" opgeheven',
'movedarticleprotection' => 'heeft beveiligingsinstellingen verplaatst van "[[$2]]" naar "[[$1]]"',
'protect-title' => 'Beveiligingsniveau instellen voor "$1"',
'protect-title-notallowed' => 'Beveiligingsniveau voor "$1" bekijken',
'prot_1movedto2' => '[[$1]] is hernoemd naar [[$2]]',
'protect-badnamespace-title' => 'Niet te beveiligen naamruimte',
'protect-badnamespace-text' => "Pagina's in deze naamruimte kunnen niet beveiligd worden.",
'protect-legend' => 'Beveiliging bevestigen',
'protectcomment' => 'Reden:',
'protectexpiry' => 'Duur:',
'protect_expiry_invalid' => 'De aangegeven duur is ongeldig.',
'protect_expiry_old' => 'Vervaldatum is in het verleden.',
'protect-unchain-permissions' => 'Overige beveiligingsinstellingen beschikbaar maken',
'protect-text' => "Hier kunt u het beveiligingsniveau voor de pagina '''$1''' bekijken en wijzigen.",
'protect-locked-blocked' => "U kunt het beveiligingsniveau niet wijzigen terwijl u geblokkeerd bent.
Dit zijn de huidige instellingen voor de pagina '''$1''':",
'protect-locked-dblock' => "Het beveiligingsniveau kan niet worden gewijzigd, omdat de database gesloten is.
Hier zijn de huidige instellingen voor de pagina '''$1''':",
'protect-locked-access' => "U hebt geen rechten om het beveiligingsniveau te wijzigen.
Dit zijn de huidige instellingen voor de pagina '''$1''':",
'protect-cascadeon' => "Deze pagina is beveiligd, omdat die in de volgende {{PLURAL:$1|pagina|pagina's}} is opgenomen, die beveiligd {{PLURAL:$1|is|zijn}} met de cascade-optie.
Het beveiligingsniveau wijzigen heeft geen enkel effect.",
'protect-default' => 'Toestaan voor alle gebruikers',
'protect-fallback' => 'Hiervoor is het recht "$1" nodig',
'protect-level-autoconfirmed' => 'Blokkeren voor nieuwe en anonieme gebruikers',
'protect-level-sysop' => 'Alleen beheerders',
'protect-summary-cascade' => 'cascade',
'protect-expiring' => 'vervalt op $2 om $3 (UTC)',
'protect-expiring-local' => 'vervalt op $1',
'protect-expiry-indefinite' => 'vervalt niet',
'protect-cascade' => "Cascadebeveiliging: hiermee worden alle pagina's en sjablonen die in deze pagina opgenomen zijn beveiligd (let op: dit kan grote gevolgen hebben)",
'protect-cantedit' => 'U kunt het beveiligingsniveau van deze pagina niet wijzigen, omdat u geen rechten hebt om het te bewerken.',
'protect-othertime' => 'Andere duur:',
'protect-othertime-op' => 'andere duur',
'protect-existing-expiry' => 'Bestaande vervaldatum: $2 om $3',
'protect-otherreason' => 'Overige/additionele reden:',
'protect-otherreason-op' => 'andere reden',
'protect-dropdown' => '*Veel voorkomende redenen voor beveiliging
** Vandalisme
** Spam
** Bewerkingsoorlog
** Preventieve beveiliging veelbezochte pagina',
'protect-edit-reasonlist' => 'Redenen voor beveiliging bewerken',
'protect-expiry-options' => '1 uur:1 hour,1 dag:1 day,1 week:1 week,2 weken:2 weeks,1 maand:1 month,3 maanden:3 months,6 maanden:6 months,1 jaar:1 year,onbeperkt:infinite',
'restriction-type' => 'Machtiging:',
'restriction-level' => 'Beperkingsniveau:',
'minimum-size' => 'Min. grootte',
'maximum-size' => 'Max. grootte:',
'pagesize' => '(bytes)',

# Restrictions (nouns)
'restriction-edit' => 'Bewerken',
'restriction-move' => 'Hernoemen',
'restriction-create' => 'Aanmaken',
'restriction-upload' => 'Uploaden',

# Restriction levels
'restriction-level-sysop' => 'volledig beveiligd',
'restriction-level-autoconfirmed' => 'semibeveiligd',
'restriction-level-all' => 'elk niveau',

# Undelete
'undelete' => "Verwijderde pagina's bekijken",
'undeletepage' => "Verwijderde pagina's bekijken en terugplaatsen",
'undeletepagetitle' => "'''Hieronder staan de verwijderde bewerkingen van [[:$1]]'''.",
'viewdeletedpage' => "Verwijderde pagina's bekijken",
'undeletepagetext' => "Hieronder {{PLURAL:$1|staat de pagina die verwijderd is|staan pagina's die zijn verwijderd}} en vanuit het archief teruggeplaatst {{PLURAL:$1|kan|kunnen}} worden.",
'undelete-fieldset-title' => 'Versies terugplaatsen',
'undeleteextrahelp' => "Laat alle vakjess leeg en klik op '''''Terugplaatsen''''' om de hele pagina inclusief alle eerdere versies terug te plaatsen.
Vink de terug te plaatsen versies aan en klik op '''''Terugplaatsen''''' om bepaalde versies terug te plaatsen.",
'undeleterevisions' => '$1 {{PLURAL:$1|versie|versies}} gearchiveerd',
'undeletehistory' => 'Als u een pagina terugplaatst, worden alle versies hersteld.
Als er al een nieuwe pagina met dezelfde naam is aangemaakt sinds de pagina is verwijderd, worden de eerder verwijderde versies teruggeplaatst en blijft de huidige versie intact.',
'undeleterevdel' => 'Herstellen is niet mogelijk als daardoor de meest recente versie van de pagina of het bestand gedeeltelijk wordt verwijderd.
Verwijder in die gevallen de meest recent verwijderde versie uit de selectie.',
'undeletehistorynoadmin' => 'Deze pagina is verwijderd.
De reden hiervoor staat hieronder, samen met de details van de gebruikers die deze pagina hebben bewerkt vóór de verwijdering.
De verwijderde inhoud van de pagina is alleen zichtbaar voor beheerders.',
'undelete-revision' => 'Dit is de verwijderde versie van $1 van $4 om $5 gemaakt door $3:',
'undeleterevision-missing' => 'Ongeldige of missende versie.
Mogelijk hebt u een verkeerde verwijzing of is de versie hersteld of verwijderd uit het archief.',
'undelete-nodiff' => 'Geen eerdere versie gevonden.',
'undeletebtn' => 'Terugplaatsen',
'undeletelink' => 'bekijken/terugplaatsen',
'undeleteviewlink' => 'bekijken',
'undeletereset' => 'Fomulier wissen',
'undeleteinvert' => 'Selectie omkeren',
'undeletecomment' => 'Reden:',
'undeletedrevisions' => '$1 {{PLURAL:$1|versie|versies}} teruggeplaatst',
'undeletedrevisions-files' => '{{PLURAL:$1|1 versie|$1 versies}} en {{PLURAL:$2|1 bestand|$2 bestanden}} teruggeplaatst',
'undeletedfiles' => '{{PLURAL:$1|1 bestand|$1 bestanden}} teruggeplaatst',
'cannotundelete' => 'Het terugplaatsen is mislukt:
$1',
'undeletedpage' => "'''$1 is teruggeplaatst'''

In het [[Special:Log/delete|verwijderingslogboek]] staan recente verwijderingen en herstelhandelingen.",
'undelete-header' => "Zie het [[Special:Log/delete|verwijderingslogboek]] voor recent verwijderde pagina's.",
'undelete-search-title' => "Verwijderde pagina's zoeken",
'undelete-search-box' => "Verwijderde pagina's doorzoeken",
'undelete-search-prefix' => "Pagina's bekijken die beginnen met:",
'undelete-search-submit' => 'Zoeken',
'undelete-no-results' => "Geen pagina's gevonden in het archief met verwijderde pagina's.",
'undelete-filename-mismatch' => 'Bestandsversie van tijdstip $1 kon niet hersteld worden: bestandsnaam klopte niet',
'undelete-bad-store-key' => 'Bestandsversie van tijdstip $1 kon niet hersteld worden: het bestand miste al voordat het werd verwijderd.',
'undelete-cleanup-error' => 'Fout bij het herstellen van ongebruikt archiefbestand "$1".',
'undelete-missing-filearchive' => 'Het is niet mogelijk om ID $1 terug te plaatsen, omdat deze niet in de database te vinden is.
Misschien is deze versie al teruggeplaatst.',
'undelete-error' => 'Er is een fout opgetreden tijdens het verwijderen van de pagina',
'undelete-error-short' => 'Fout bij het herstellen van bestand: $1',
'undelete-error-long' => 'Er zijn fouten opgetreden bij het herstellen van het bestand:

$1',
'undelete-show-file-confirm' => 'Weet u zeker dat u een verwijderde versie van het bestand "<nowiki>$1</nowiki>" van $2 om $3 wilt bekijken?',
'undelete-show-file-submit' => 'Ja',

# Namespace form on various pages
'namespace' => 'Naamruimte:',
'invert' => 'Selectie omkeren',
'tooltip-invert' => 'Vink dit aan om wijzigingen te verbergen in de geselecteerde naamruimte (en de gekoppelde naamruimte indien aangevinkt)',
'namespace_association' => 'Gekoppelde naamruimte',
'tooltip-namespace_association' => 'Vink dit aan om ook wijzigingen weer te geven in de overleg- of onderwerpnaamruimte die bij de geselecteerde naamruimte hoort',
'blanknamespace' => '(Hoofdnaamruimte)',

# Contributions
'contributions' => 'Gebruikersbijdragen',
'contributions-title' => 'Bijdragen van $1',
'mycontris' => 'Mijn bijdragen',
'contribsub2' => 'Voor $1 ($2)',
'nocontribs' => 'Geen wijzigingen gevonden die aan de gestelde criteria voldoen.',
'uctop' => '(laatste wijziging)',
'month' => 'Van maand (en eerder):',
'year' => 'Van jaar (en eerder):',

'sp-contributions-newbies' => 'Alleen de bijdragen van nieuwe gebruikers bekijken',
'sp-contributions-newbies-sub' => 'Voor nieuwelingen',
'sp-contributions-newbies-title' => 'Bijdragen van nieuwe gebruikers',
'sp-contributions-blocklog' => 'blokkeerlogboek',
'sp-contributions-deleted' => 'verwijderde bijdragen',
'sp-contributions-uploads' => 'uploads',
'sp-contributions-logs' => 'logboeken',
'sp-contributions-talk' => 'overleg',
'sp-contributions-userrights' => 'gebruikersrechtenbeheer',
'sp-contributions-blocked-notice' => 'Deze gebruiker is op het moment geblokkeerd.
De laatste regel uit het blokkeerlogboek wordt hieronder ter referentie weergegeven:',
'sp-contributions-blocked-notice-anon' => 'Dit IP-adres is geblokkeerd.
De laatste regel uit het blokkeerlogboek wordt hieronder ter referentie weergegeven:',
'sp-contributions-search' => 'Zoeken naar bijdragen',
'sp-contributions-username' => 'IP-adres of gebruikersnaam:',
'sp-contributions-toponly' => 'Alleen nieuwste versies weergeven',
'sp-contributions-submit' => 'Bekijken',

# What links here
'whatlinkshere' => 'Verwijzingen naar deze pagina',
'whatlinkshere-title' => 'Pagina\'s die verwijzen naar "$1"',
'whatlinkshere-page' => 'Pagina:',
'linkshere' => "De volgende pagina's verwijzen naar '''[[:$1]]''':",
'nolinkshere' => "Geen enkele pagina verwijst naar '''[[:$1]]'''.",
'nolinkshere-ns' => "Geen enkele pagina in de gekozen naamruimte verwijst naar '''[[:$1]]'''.",
'isredirect' => 'doorverwijspagina',
'istemplate' => 'ingevoegd als sjabloon',
'isimage' => 'bestandsverwijzing',
'whatlinkshere-prev' => '{{PLURAL:$1|vorige|vorige $1}}',
'whatlinkshere-next' => '{{PLURAL:$1|volgende|volgende $1}}',
'whatlinkshere-links' => '← verwijzingen naar deze pagina',
'whatlinkshere-hideredirs' => 'doorverwijzingen $1',
'whatlinkshere-hidetrans' => 'Transclusies $1',
'whatlinkshere-hidelinks' => 'verwijzingen $1',
'whatlinkshere-hideimages' => 'bestandsverwijzingen $1',
'whatlinkshere-filters' => 'Filters',

# Block/unblock
'autoblockid' => 'Automatische blokkade #$1',
'block' => 'Gebruiker blokkeren',
'unblock' => 'Gebruiker deblokkeren',
'blockip' => 'Gebruiker blokkeren',
'blockip-title' => 'Gebruiker blokkeren',
'blockip-legend' => 'Gebruiker blokkeren',
'blockiptext' => "Gebruik het onderstaande formulier om schrijftoegang voor een gebruiker of IP-adres in te trekken.
Doe dit alleen als bescherming tegen vandalisme en in overeenstemming met het [[{{MediaWiki:Policy-url}}|beleid]].
Geef hieronder een reden op (bijvoorbeeld welke pagina's gevandaliseerd zijn).",
'ipadressorusername' => 'IP-adres of gebruikersnaam:',
'ipbexpiry' => 'Vervalt (maak een keuze):',
'ipbreason' => 'Reden:',
'ipbreasonotherlist' => 'Andere reden',
'ipbreason-dropdown' => "*Veel voorkomende redenen voor blokkades
** Foutieve informatie invoeren
** Verwijderen van informatie uit pagina's
** Spamverwijzing naar externe websites
** Invoegen van nonsens in pagina's
** Intimiderend gedrag
** Misbruik door meerdere gebruikers
** Onaanvaardbare gebruikersnaam",
'ipb-hardblock' => 'Voorkomen dat aangemelde gebruikers vanaf dit IP-adres kunnen bewerken',
'ipbcreateaccount' => 'Registreren gebruikers blokkeren',
'ipbemailban' => 'Gebruiker weerhouden van het sturen van e-mail',
'ipbenableautoblock' => 'Automatisch de IP-adressen van deze gebruiker blokkeren',
'ipbsubmit' => 'Deze gebruiker blokkeren',
'ipbother' => 'Andere duur:',
'ipboptions' => '2 uur:2 hours,1 dag:1 day,3 dagen:3 days,1 week:1 week,2 weken:2 weeks,1 maand:1 month,3 maanden:3 months,6 maanden:6 months,1 jaar:1 year,onbepaald:infinite',
'ipbotheroption' => 'ander verval',
'ipbotherreason' => 'Andere/extra reden:',
'ipbhidename' => 'Gebruiker in bewerkingen en lijsten verbergen',
'ipbwatchuser' => 'Gebruikerspagina en overlegpagina op volglijst plaatsen',
'ipb-disableusertalk' => 'Voorkomen dat deze gebruiker tijdens de blokkade de eigen overlegpagina kan bewerken',
'ipb-change-block' => 'De gebruiker opnieuw blokkeren met deze instellingen',
'ipb-confirm' => 'Blokkade bevestigen',
'badipaddress' => 'Geen geldig IP-adres',
'blockipsuccesssub' => 'De blokkering is ingesteld',
'blockipsuccesstext' => '[[Special:Contributions/$1|$1]] is geblokkeerd.<br />
Zie de [[Special:BlockList|blokkadelijst]] voor recente blokkades.',
'ipb-blockingself' => 'U staat op het punt uzelf te blokkeren. Weet u zeker dat u dat wilt doen?',
'ipb-confirmhideuser' => 'U staat op het punt een verborgen gebruiker te blokkeren. Hiervoor worden gebruikersnamen in alle lijsten en logboekregels verborgen. Weet u het zeker?',
'ipb-edit-dropdown' => 'Lijst van redenen bewerken',
'ipb-unblock-addr' => '$1 deblokkeren',
'ipb-unblock' => 'Een gebruiker of IP-adres deblokkeren',
'ipb-blocklist' => 'Bestaande blokkades bekijken',
'ipb-blocklist-contribs' => 'Bijdragen van $1',
'unblockip' => 'Gebruiker deblokkeren',
'unblockiptext' => 'Gebruik het onderstaande formulier om opnieuw schrijftoegang te geven aan een geblokkeerde gebruiker of IP-adres.',
'ipusubmit' => 'Blokkade opheffen',
'unblocked' => 'Blokkade van [[User:$1|$1]] is opgeheven',
'unblocked-range' => '$1 is gedeblokkeerd',
'unblocked-id' => 'Blokkade $1 is opgeheven',
'blocklist' => 'Geblokkeerde gebruikers',
'ipblocklist' => 'Geblokkeerde gebruikers',
'ipblocklist-legend' => 'Een geblokkeerde gebruiker zoeken',
'blocklist-userblocks' => 'Geblokkeerde gebruikers verbergen',
'blocklist-tempblocks' => 'Tijdelijke blokkades verbergen',
'blocklist-addressblocks' => 'Blokkades van één IP-adres verbergen',
'blocklist-rangeblocks' => 'IP-adresblokken verbergen',
'blocklist-timestamp' => 'Tijdstip',
'blocklist-target' => 'Doel',
'blocklist-expiry' => 'Vervalt',
'blocklist-by' => 'Geblokkeerd door',
'blocklist-params' => 'Blokkadeparameters',
'blocklist-reason' => 'Reden',
'ipblocklist-submit' => 'Zoeken',
'ipblocklist-localblock' => 'Lokale blokkade',
'ipblocklist-otherblocks' => 'Andere {{PLURAL:$1|blokkade|blokkades}}',
'infiniteblock' => 'onbeperkt',
'expiringblock' => 'vervalt op $1 om $2',
'anononlyblock' => 'alleen anoniemen',
'noautoblockblock' => 'autoblokkeren uitgeschakeld',
'createaccountblock' => 'registreren gebruikers uitgeschakeld',
'emailblock' => 'e-mail uitgeschakeld',
'blocklist-nousertalk' => 'kan eigen overlegpagina niet bewerken',
'ipblocklist-empty' => 'De blokkeerlijst is leeg.',
'ipblocklist-no-results' => 'Dit IP-adres of deze gebruikersnaam is niet geblokkeerd.',
'blocklink' => 'blokkeren',
'unblocklink' => 'blokkade opheffen',
'change-blocklink' => 'blokkade wijzigen',
'contribslink' => 'bijdragen',
'emaillink' => 'e-mail verzenden',
'autoblocker' => "Automatisch geblokkeerd omdat het IP-adres overeenkomt met dat van [[User:\$1|\$1]], die geblokkeerd is om de volgende reden: \"'''\$2'''\"",
'blocklogpage' => 'Blokkeerlogboek',
'blocklog-showlog' => 'Deze gebruiker is voorheen geblokkeerd geweest.
Het blokkeerlogboek wordt hieronder ter referentie weergegeven:',
'blocklog-showsuppresslog' => 'Deze gebruiker is voorheen geblokkeerd geweest en er zijn (delen van) bewerkingen van deze gebruiker verborgen.
Het verbergingslogboek wordt hieronder ter referentie weergegeven:',
'blocklogentry' => 'heeft [[$1]] geblokkeerd met als vervaltijd $2 $3',
'reblock-logentry' => 'heeft de blokkade voor [[$1]] gewijzigd met als vervaldatum $2 $3',
'blocklogtext' => 'Hier ziet u een lijst van de recente blokkeringen en deblokkeringen.
Automatische blokkeringen en deblokkeringen komen niet in het logboek.
Zie ook de [[Special:BlockList|blokkadelijst]] voor de op dit moment actieve blokkades.',
'unblocklogentry' => 'heeft de blokkade van $1 opgeheven',
'block-log-flags-anononly' => 'alleen anoniemen',
'block-log-flags-nocreate' => 'registreren gebruikers geblokkeerd',
'block-log-flags-noautoblock' => 'autoblokkeren is uitgeschakeld',
'block-log-flags-noemail' => 'e-mail uitgeschakeld',
'block-log-flags-nousertalk' => 'kan eigen overlegpagina niet bewerken',
'block-log-flags-angry-autoblock' => 'uitgebreide automatische blokkade ingeschakeld',
'block-log-flags-hiddenname' => 'gebruiker verborgen',
'range_block_disabled' => 'De mogelijkheid voor beheerders om een groep IP-addressen te blokkeren is uitgeschakeld.',
'ipb_expiry_invalid' => 'Ongeldige duur.',
'ipb_expiry_temp' => 'Blokkades voor verborgen gebruikers moeten permanent zijn.',
'ipb_hide_invalid' => 'Het is niet mogelijk deze gebruiker te verbergen; mogelijk heeft deze te veel bewerkingen gemaakt.',
'ipb_already_blocked' => '"$1" is al geblokkeerd',
'ipb-needreblock' => '$1 is al geblokkeerd.
Wilt u de instellingen wijzigen?',
'ipb-otherblocks-header' => 'Andere {{PLURAL:$1|blokkade|blokkades}}',
'unblock-hideuser' => 'U kunt deze gebruiker niet deblokkeeren, omdat de gebruikersnaam verborgen is.',
'ipb_cant_unblock' => 'Fout: blokkadenummer $1 is niet gevonden.
Misschien is de blokkade al opgeheven.',
'ipb_blocked_as_range' => 'Fout: het IP-adres $1 is niet direct geblokkeerd en de blokkade kan niet opgeheven worden.
De blokkade is onderdeel van de reeks $2, waarvan de blokkade wel opgeheven kan worden.',
'ip_range_invalid' => 'Ongeldige IP-reeks.',
'ip_range_toolarge' => 'Reeksblokkades groter dan /$1 zijn niet toegestaan.',
'blockme' => 'Mij blokkeren',
'proxyblocker' => 'Proxyblocker',
'proxyblocker-disabled' => 'Deze functie is uitgeschakeld.',
'proxyblockreason' => 'Uw IP-adres is geblokkeerd, omdat u gebruik maakt van een open proxyserver.
Neem contact op met uw Internet-provider of uw helpdesk en stel die op de hoogte van dit ernstige beveiligingsprobleem.',
'proxyblocksuccess' => 'Afgerond.',
'sorbsreason' => 'Uw IP-adres staat bekend als open proxyserver in de DNS-blacklist die {{SITENAME}} gebruikt.',
'sorbs_create_account_reason' => 'Uw IP-adres staat bekend als open proxyserver in de DNS-blacklist die {{SITENAME}} gebruikt.
U kunt geen gebruiker registreren.',
'cant-block-while-blocked' => 'U kunt andere gebruikers niet blokkeren terwijl u zelf geblokkeerd bent.',
'cant-see-hidden-user' => "De gebruiker die u probeert te blokken is al geblokkeerd en verborgen.
Omdat u het recht 'hideuser' niet hebt, kunt u de blokkade van de gebruiker niet bekijken of bewerken.",
'ipbblocked' => 'U kunt geen andere gebruikers (de)blokkeren, omdat u zelf geblokkeerd bent',
'ipbnounblockself' => 'U mag uzelf niet deblokkeren',

# Developer tools
'lockdb' => 'Database blokkeren',
'unlockdb' => 'Blokkering van de database opheffen',
'lockdbtext' => "Als u de database blokkeert, kunnen gebruikers geen pagina's meer bewerken, geen voorkeuren wijzigen of iets anders te doen waarvoor wijzigingen in de database nodig zijn.
Bevestig dat u deze handeling wilt uitvoeren en dat u de database vrijgeeft nadat het onderhoud is uitgevoerd.",
'unlockdbtext' => "Na het vrijgeven van de database kunnen gebruikers weer pagina's bewerken, hun voorkeuren wijzigen of iets anders te doen waarvoor er wijzigingen in de database nodig zijn.

Bevestig dat u deze handeling wilt uitvoeren.",
'lockconfirm' => 'Ja, ik wil de database blokkeren.',
'unlockconfirm' => 'Ja, ik wil de database vrijgeven.',
'lockbtn' => 'Database blokkeren',
'unlockbtn' => 'Database vrijgeven',
'locknoconfirm' => 'U hebt uw keuze niet bevestigd via het vinkvakje.',
'lockdbsuccesssub' => 'De database is afgesloten',
'unlockdbsuccesssub' => 'De database is vrijgegeven',
'lockdbsuccesstext' => 'De database is afgesloten.<br />
Vergeet niet de [[Special:UnlockDB|database vrij te geven]] zodra u klaar bent met uw onderhoud.',
'unlockdbsuccesstext' => 'De database is vrijgegeven.',
'lockfilenotwritable' => 'Geen schrijfrechten op het databaselockbestand.
Om de database te kunnen blokkeren of vrij te geven, dient de webserver schrijfrechten op dit bestand te hebben.',
'databasenotlocked' => 'De database is niet geblokkeerd.',
'lockedbyandtime' => '(door $1 om $3 op $2)',

# Move page
'move-page' => '"$1" hernoemen',
'move-page-legend' => 'Pagina hernoemen',
'movepagetext' => "Door middel van het onderstaande formulier kunt u een pagina hernoemen.
De geschiedenis gaat mee naar de nieuwe pagina.
* De oude naam wordt automatisch een doorverwijzing naar de nieuwe pagina.
* Verwijzingen naar de oude pagina worden niet aangepast.
* De pagina's die doorverwijzen naar de oorspronkelijke paginanaam worden automatisch bijgewerkt.
Als u dit niet wenst, controleer dan of er geen [[Special:DoubleRedirects|dubbele]] of [[Special:BrokenRedirects|onjuiste doorverwijzingen]] zijn ontstaan.

Een pagina kan '''alleen''' hernoemd worden als de nieuwe paginanaam niet bestaat of een doorverwijspagina zonder verdere geschiedenis is.

'''WAARSCHUWING!'''
Voor veel bekeken pagina's kan het hernoemen drastische en onvoorziene gevolgen hebben.
Zorg ervoor dat u die gevolgen overziet voordat u deze handeling uitvoert.",
'movepagetext-noredirectfixer' => "Door middel van het onderstaande formulier kunt u een pagina en alle bijbehorende oude versies hernoemen.
De oude naam wordt automatisch een doorverwijzing naar de nieuwe pagina.
Controleer dan of er geen [[Special:DoubleRedirects|dubbele]] of [[Special:BrokenRedirects|onjuiste doorverwijzingen]] zijn ontstaan.

Een pagina kan '''alleen''' hernoemd worden als de nieuwe paginanaam niet bestaat of een doorverwijspagina zonder verdere geschiedenis is.
U kunt dus een pagina die abusievelijk is hernoemd terug hernoemen en u kunt een bestaande pagina niet overschrijven. 

'''Waarschuwing!'''
Voor veel bekeken pagina's kan het hernoemen drastische en onvoorziene gevolgen hebben.
Zorg ervoor dat u die gevolgen overziet voordat u deze handeling uitvoert.",
'movepagetalktext' => "De bijbehorende overlegpagina krijgt automatisch een andere naam, '''tenzij''':
* De overlegpagina onder de nieuwe naam al bestaat;
* U het onderstaande vinkje deselecteert.",
'movearticle' => 'Te hernoemen pagina:',
'moveuserpage-warning' => "'''Waarschuwing:''' u gaat een gebruikerspagina hernoemen. Houd er rekening mee dat alleen de pagina wordt hernoemd, ''niet'' de gebruiker.",
'movenologin' => 'Niet aangemeld',
'movenologintext' => 'U moet [[Special:UserLogin|aangemeld]] zijn om een pagina te hernoemen.',
'movenotallowed' => "U hebt geen rechten om pagina's te hernoemen.",
'movenotallowedfile' => 'U hebt geen rechten om bestanden te hernoemen.',
'cant-move-user-page' => "U hebt geen rechten om gebruikerspagina's te hernoemen (met uitzondering van subpagina's).",
'cant-move-to-user-page' => 'U hebt geen rechten om een pagina naar een gebruikerspagina te hernoemen. Hernoemen naar een subpagina is wel mogelijk.',
'newtitle' => 'Naar de nieuwe paginanaam:',
'move-watch' => 'Bronpagina en doelpagina volgen',
'movepagebtn' => 'Pagina hernoemen',
'pagemovedsub' => 'De pagina is hernoemd',
'movepage-moved' => '\'\'\'"$1" is hernoemd naar "$2"\'\'\'',
'movepage-moved-redirect' => 'Er is een doorverwijzing aangemaakt.',
'movepage-moved-noredirect' => 'Er is geen doorverwijzing aangemaakt.',
'articleexists' => 'De pagina bestaat al of de paginanaam is ongeldig.
Kies een andere paginanaam.',
'cantmove-titleprotected' => 'U kunt geen pagina naar deze paginanaam hernoemen, omdat deze paginaam beveiligd is tegen het aanmaken ervan.',
'talkexists' => "'''De pagina is hernoemd, maar de overlegpagina kon niet hernoemd worden omdat er al een pagina met de nieuwe naam bestaat.
Combineer de overlegpagina's handmatig.'''",
'movedto' => 'hernoemd naar',
'movetalk' => 'Bijbehorende overlegpagina hernoemen',
'move-subpages' => "Subpagina's hernoemen (maximaal $1)",
'move-talk-subpages' => "Subpagina's van overlegpagina's hernoemen (maximaal $1)",
'movepage-page-exists' => 'De pagina $1 bestaat al en kan niet automatisch verwijderd worden.',
'movepage-page-moved' => 'De pagina $1 is hernoemd naar $2.',
'movepage-page-unmoved' => 'De pagina $1 kon niet hernoemd worden naar $2.',
'movepage-max-pages' => "Het maximale aantal automatisch te hernoemen pagina's is bereikt ({{PLURAL:$1|$1|$1}}).
De overige pagina's worden niet automatisch hernoemd.",
'movelogpage' => 'Hernoemingslogboek',
'movelogpagetext' => "Hieronder staan hernoemde pagina's.",
'movesubpage' => "{{PLURAL:$1|Subpagina|Subpagina's}}",
'movesubpagetext' => "De {{PLURAL:$1|subpagina|$1 subpagina's}} van deze pagina {{PLURAL:$1|wordt|worden}} hieronder weergegeven.",
'movenosubpage' => "Deze pagina heeft geen subpagina's.",
'movereason' => 'Reden:',
'revertmove' => 'terugdraaien',
'delete_and_move' => 'Verwijderen en hernoemen',
'delete_and_move_text' => '==Verwijdering nodig==
Onder de naam "[[:$1]]" bestaat al een pagina.
Wilt u deze verwijderen om plaats te maken voor de te hernoemen pagina?',
'delete_and_move_confirm' => 'Ja, de pagina verwijderen',
'delete_and_move_reason' => 'Verwijderd in verband met hernoeming van "[[$1]]"',
'selfmove' => 'U kunt een pagina niet hernoemen naar dezelfde paginanaam.',
'immobile-source-namespace' => 'Pagina\'s in de naamruimte "$1" kunnen niet hernoemd worden',
'immobile-target-namespace' => 'Pagina\'s kunnen niet hernoemd worden naar de naamruimte "$1"',
'immobile-target-namespace-iw' => 'Een interwikiverwijzing is geen geldige bestemming voor het hernoemen van een pagina.',
'immobile-source-page' => 'Deze pagina kan niet hernoemd worden.',
'immobile-target-page' => 'Het is niet mogelijk te hernoemen naar die paginanaam.',
'bad-target-model' => 'De gewenste bestemming gebruikt een ander inhoudsmodel. Het is niet mogelijk om te zetten van $1 naar $2.',
'imagenocrossnamespace' => 'Een mediabestand kan niet naar een andere naamruimte verplaatst worden',
'nonfile-cannot-move-to-file' => 'Het is niet mogelijk te hernoemen van en naar de bestandsnaamruimte',
'imagetypemismatch' => 'De nieuwe bestandsextensie is niet gelijk aan het bestandstype',
'imageinvalidfilename' => 'De nieuwe bestandsnaam is ongeldig',
'fix-double-redirects' => 'Alle doorverwijzingen bijwerken die verwijzen naar de originele paginanaam',
'move-leave-redirect' => 'Een doorverwijzing achterlaten',
'protectedpagemovewarning' => "'''Waarschuwing:''' deze pagina kan alleen door beheerders hernoemd worden.
De laatste logboekregel staat hieronder:",
'semiprotectedpagemovewarning' => "'''Let op:''' deze pagina kan alleen door geregistreerde gebruikers hernoemd worden.
De laatste logboekregel staat hieronder:",
'move-over-sharedrepo' => '== Het bestand bestaat al ==
[[:$1]] bestaat al in een gedeelde mediadatabank.
Door een bestand te hernoemen naar deze naam, is het bestand uit de gedeelde mediadatabank niet langer te gebruiken.',
'file-exists-sharedrepo' => 'Deze bestandsnaam bestaat al in een gedeelde mediadatabank.
Kies een andere bestandsnaam.',

# Export
'export' => 'Exporteren',
'exporttext' => 'U kunt de tekst en geschiedenis van een pagina of pagina\'s exporteren naar XML.
Dit exportbestand is daarna te importeren in een andere MediaWiki via de [[Special:Import|importpagina]].

Geef in het onderstaande veld de namen van de te exporteren pagina\'s op, één pagina per regel, en geef aan of u alle versies met de bewerkingssamenvatting of alleen de huidige versies met de bewerkingssamenvatting wilt exporteren.

In het laatste geval kunt u ook een verwijzing gebruiken, bijvoorbeeld [[{{#Special:Export}}/{{MediaWiki:Mainpage}}]] voor de pagina "[[{{MediaWiki:Mainpage}}]]".',
'exportall' => "Alle pagina's exporteren",
'exportcuronly' => 'Alleen de laatste versie, niet de volledige geschiedenis',
'exportnohistory' => "----
'''Let op:''' het exporteren van de gehele geschiedenis is uitgeschakeld wegens prestatieredenen.",
'exportlistauthors' => 'Volledige auteurslijst opnemen voor iedere pagina',
'export-submit' => 'Exporteren',
'export-addcattext' => "Pagina's toevoegen van categorie:",
'export-addcat' => 'Toevoegen',
'export-addnstext' => "Pagina's uit de volgende naamruimte toevoegen:",
'export-addns' => 'Toevoegen',
'export-download' => 'Als bestand opslaan',
'export-templates' => 'Sjablonen toevoegen',
'export-pagelinks' => "Pagina's waarnaar verwezen wordt toevoegen tot een diepte van:",

# Namespace 8 related
'allmessages' => 'Systeemteksten',
'allmessagesname' => 'Naam',
'allmessagesdefault' => 'Standaardinhoud',
'allmessagescurrent' => 'Huidige inhoud',
'allmessagestext' => 'Hieronder staan de systeemberichten uit de MediaWiki-naamruimte.
Ga naar [//www.mediawiki.org/wiki/Localisation MediaWiki-lokalisatie] en [//translatewiki.net translatewiki.net] als u wilt bijdragen aan de algemene vertaling voor MediaWiki.',
'allmessagesnotsupportedDB' => "Deze pagina kan niet worden gebruikt, omdat '''\$wgUseDatabaseMessages''' is uitgeschakeld.",
'allmessages-filter-legend' => 'Filter',
'allmessages-filter' => 'Filteren op aangepast:',
'allmessages-filter-unmodified' => 'Ongewijzigd',
'allmessages-filter-all' => 'Alle',
'allmessages-filter-modified' => 'Gewijzigd',
'allmessages-prefix' => 'Filteren op voorvoegsel:',
'allmessages-language' => 'Taal:',
'allmessages-filter-submit' => 'OK',

# Thumbnails
'thumbnail-more' => 'Vergroten',
'filemissing' => 'Bestand is zoek',
'thumbnail_error' => 'Fout bij het aanmaken van de miniatuurafbeelding: $1',
'djvu_page_error' => 'DjVu-pagina buiten bereik',
'djvu_no_xml' => 'De XML voor het DjVu-bestand kon niet opgehaald worden',
'thumbnail-temp-create' => 'Het was niet mogelijk een tijdelijk miniatuurbestand aan te maken.',
'thumbnail-dest-create' => 'Het was niet mogelijk het miniatuurbestand op de doellocatie op te slaan.',
'thumbnail_invalid_params' => 'Onjuiste parameters voor miniatuurafbeelding',
'thumbnail_dest_directory' => 'Niet in staat doelmap aan te maken',
'thumbnail_image-type' => 'Dit bestandstype wordt niet ondersteund',
'thumbnail_gd-library' => 'De instellingen voor de GD-bibliotheek zijn incompleet. De functie $1 mist',
'thumbnail_image-missing' => 'Het bestand lijkt niet aanwezig te zijn: $1',

# Special:Import
'import' => "Pagina's importeren",
'importinterwiki' => 'Transwiki-import',
'import-interwiki-text' => 'Selecteer een wiki en paginanaam om te importeren.
Versie- en auteursgegevens blijven hierbij bewaard.
Alle transwiki-importhandelingen worden opgeslagen in het [[Special:Log/import|importlogboek]].',
'import-interwiki-source' => 'Bronwiki/pagina:',
'import-interwiki-history' => 'Volledige geschiedenis van deze pagina ook kopiëren',
'import-interwiki-templates' => 'Alle sjablonen opnemen',
'import-interwiki-submit' => 'Importeren',
'import-interwiki-namespace' => 'Doelnaamruimte:',
'import-interwiki-rootpage' => 'Basispagina voor doel (optioneel):',
'import-upload-filename' => 'Bestandsnaam:',
'import-comment' => 'Opmerking:',
'importtext' => 'Gebruik de [[Special:Export|exportfunctie]] in de wiki waar de informatie vandaan komt.
Sla de uitvoer op uw eigen computer op, en voeg die daarna hier toe.',
'importstart' => "Pagina's aan het importeren…",
'import-revision-count' => '$1 {{PLURAL:$1|versie|versies}}',
'importnopages' => "Geen pagina's te importeren.",
'imported-log-entries' => '$1 {{PLURAL:$1|logboekregel|logboekregels}} geïmporteerd.',
'importfailed' => 'Import is mislukt: $1',
'importunknownsource' => 'Onbekend importbrontype',
'importcantopen' => 'Kon het importbestand niet openen',
'importbadinterwiki' => 'Verkeerde interwikiverwijzing',
'importnotext' => 'Leeg of geen tekst',
'importsuccess' => 'Import afgerond!',
'importhistoryconflict' => 'Er zijn conflicten in de geschiedenis van de pagina (is misschien eerder geïmporteerd)',
'importnosources' => 'Er zijn geen transwiki-importbronnen gedefinieerd en directe geschiedenis-uploads zijn uitgeschakeld.',
'importnofile' => 'Er is geen importbestand geüpload.',
'importuploaderrorsize' => 'Upload van het importbestand in mislukt.
Het bestand is groter dan de ingestelde limiet.',
'importuploaderrorpartial' => 'Upload van het importbestand in mislukt.
Het bestand is slechts gedeeltelijk aangekomen.',
'importuploaderrortemp' => 'Upload van het importbestand in mislukt.
Een tijdelijke map is niet aanwezig.',
'import-parse-failure' => 'Fout bij het verwerken van de XML-import',
'import-noarticle' => "Er zijn geen te importeren pagina's!",
'import-nonewrevisions' => 'Alle versies zijn al eerder geïmporteerd.',
'xml-error-string' => '$1 op regel $2, kolom $3 (byte $4): $5',
'import-upload' => 'XML-gegevens uploaden',
'import-token-mismatch' => 'De sessiegegevens zijn verloren gegaan. Probeer het opnieuw.',
'import-invalid-interwiki' => 'Het is niet mogelijk van de aangegeven wiki te importeren.',
'import-error-edit' => 'De pagina "$1" is niet geïmporteerd omdat u niet de rechten hebt om die te bewerken.',
'import-error-create' => 'De pagina "$1" is niet geïmporteerd omdat u niet de rechten hebt om die aan te maken.',
'import-error-interwiki' => 'De pagina "$1" is niet geïmporteerd omdat deze naam is gereserveerd voor externe verwijzingen (interwiki).',
'import-error-special' => 'Pagina "$1" is niet geïmporteerd omdat deze is geplaatst in een speciale naamruimte waar geen pagina\'s in geplaatst kunnen worden.',
'import-error-invalid' => 'De pagina" "$1" is niet geïmporteerd omdat de naam ongeldig is.',
'import-options-wrong' => 'Verkeerde {{PLURAL:$2|optie|opties}}: <nowiki>$1</nowiki>',
'import-rootpage-invalid' => 'De opgegeven basispagina is ongeldig.',
'import-rootpage-nosubpage' => 'In de naamruimte "$1" van de basispagina is het aanmaken van subpagina\'s niet mogelijk.',

# Import log
'importlogpage' => 'Importlogboek',
'importlogpagetext' => "Administratieve import van pagina's met geschiedenis van andere wiki's.",
'import-logentry-upload' => 'heeft [[$1]] geïmporteerd via een bestandsupload',
'import-logentry-upload-detail' => '$1 {{PLURAL:$1|versie|versies}}',
'import-logentry-interwiki' => 'importeerde $1 via transwiki',
'import-logentry-interwiki-detail' => '$1 {{PLURAL:$1|versie|versies}} van $2',

# JavaScriptTest
'javascripttest' => 'JavaScript testen',
'javascripttest-title' => 'Tests uitvoeren voor $1',
'javascripttest-pagetext-noframework' => 'Deze pagina is gereserveerd voor het uitvoeren van JavaScripttesten.',
'javascripttest-pagetext-unknownframework' => 'Onbekend testframework "$1".',
'javascripttest-pagetext-frameworks' => 'Kies een van de volgende testframeworks: $1',
'javascripttest-pagetext-skins' => 'Kies een vormgeving om de tests mee uit te voeren:',
'javascripttest-qunit-intro' => 'Zie de [$1 testdocumentatie] op mediawiki.org.',
'javascripttest-qunit-heading' => 'QUnit testsuite voor MediaWiki JavaScript',

# Tooltip help for the actions
'tooltip-pt-userpage' => 'Uw gebruikerspagina',
'tooltip-pt-anonuserpage' => 'Gebruikerspagina voor uw IP-adres',
'tooltip-pt-mytalk' => 'Uw overlegpagina',
'tooltip-pt-anontalk' => 'Overlegpagina van de anonieme gebruiker van dit IP-adres',
'tooltip-pt-preferences' => 'Mijn voorkeuren',
'tooltip-pt-watchlist' => "Overzicht van pagina's die u volgt",
'tooltip-pt-mycontris' => 'Overzicht van uw bijdragen',
'tooltip-pt-login' => 'U wordt van harte uitgenodigd om u aan te melden als gebruiker, maar dit is niet verplicht',
'tooltip-pt-anonlogin' => 'U wordt van harte uitgenodigd om u aan te melden als gebruiker, maar dit is niet verplicht',
'tooltip-pt-logout' => 'Afmelden',
'tooltip-ca-talk' => 'Overleg over deze pagina',
'tooltip-ca-edit' => 'U kunt deze pagina bewerken. Gebruik de knop "Bewerking ter controle bekijken" voordat u de pagina opslaat',
'tooltip-ca-addsection' => 'Nieuw kopje toevoegen',
'tooltip-ca-viewsource' => 'Deze pagina is beveiligd.
U kunt wel de broncode bekijken.',
'tooltip-ca-history' => 'Eerdere versies van deze pagina',
'tooltip-ca-protect' => 'Deze pagina beveiligen',
'tooltip-ca-unprotect' => 'De beveiliging voor deze pagina wijzigen',
'tooltip-ca-delete' => 'Deze pagina verwijderen',
'tooltip-ca-undelete' => 'Verwijderde bewerkingen van deze pagina terugplaatsen',
'tooltip-ca-move' => 'Deze pagina hernoemen',
'tooltip-ca-watch' => 'Deze pagina aan mijn volglijst toevoegen',
'tooltip-ca-unwatch' => 'Deze pagina van mijn volglijst verwijderen',
'tooltip-search' => 'Zoeken in {{SITENAME}}',
'tooltip-search-go' => 'Naar een pagina met deze naam gaan als die bestaat',
'tooltip-search-fulltext' => "Alle pagina's op deze tekst doorzoeken",
'tooltip-p-logo' => 'Naar de hoofdpagina gaan',
'tooltip-n-mainpage' => 'Naar de hoofdpagina gaan',
'tooltip-n-mainpage-description' => 'Naar de hoofdpagina gaan',
'tooltip-n-portal' => 'Informatie over het project: wie, wat, hoe en waarom',
'tooltip-n-currentevents' => 'Achtergrondinformatie over actuele zaken',
'tooltip-n-recentchanges' => 'De lijst met recente wijzigingen in deze wiki.',
'tooltip-n-randompage' => 'Een willekeurige pagina bekijken',
'tooltip-n-help' => 'Hulpinformatie over deze wiki',
'tooltip-t-whatlinkshere' => "Lijst met alle pagina's die naar deze pagina verwijzen",
'tooltip-t-recentchangeslinked' => "Recente wijzigingen in pagina's waar deze pagina naar verwijst",
'tooltip-feed-rss' => 'RSS-feed voor deze pagina',
'tooltip-feed-atom' => 'Atom-feed voor deze pagina',
'tooltip-t-contributions' => 'Een lijst met bijdragen van deze gebruiker',
'tooltip-t-emailuser' => 'Een e-mail naar deze gebruiker verzenden',
'tooltip-t-upload' => 'Bestanden uploaden',
'tooltip-t-specialpages' => "Lijst met alle speciale pagina's",
'tooltip-t-print' => 'Printvriendelijke versie van deze pagina',
'tooltip-t-permalink' => 'Permanente verwijzing naar deze versie van de pagina',
'tooltip-ca-nstab-main' => 'Inhoudspagina bekijken',
'tooltip-ca-nstab-user' => 'Gebruikerspagina bekijken',
'tooltip-ca-nstab-media' => 'Mediapagina bekijken',
'tooltip-ca-nstab-special' => 'Dit is een speciale pagina, u kunt de pagina zelf niet bewerken',
'tooltip-ca-nstab-project' => 'Projectpagina bekijken',
'tooltip-ca-nstab-image' => 'Bestandspagina bekijken',
'tooltip-ca-nstab-mediawiki' => 'Systeembericht bekijken',
'tooltip-ca-nstab-template' => 'Sjabloon bekijken',
'tooltip-ca-nstab-help' => 'Hulppagina bekijken',
'tooltip-ca-nstab-category' => 'Categoriepagina bekijken',
'tooltip-minoredit' => 'Deze wijziging als een kleine wijziging markeren',
'tooltip-save' => 'Uw wijzigingen opslaan',
'tooltip-preview' => 'Een voorvertoning maken. Gebruik dit voordat u opslaat!',
'tooltip-diff' => 'Gemaakte wijzigingen bekijken (zoals het in de geschiedenis zal te zien zijn)',
'tooltip-compareselectedversions' => 'De verschillen tussen de geselecteerde versies van deze pagina bekijken.',
'tooltip-watch' => 'Deze pagina aan uw volglijst toevoegen',
'tooltip-watchlistedit-normal-submit' => "Pagina's verwijderen",
'tooltip-watchlistedit-raw-submit' => 'Volglijst bijwerken',
'tooltip-recreate' => 'Deze pagina opnieuw aanmaken ondanks eerdere verwijdering',
'tooltip-upload' => 'Uploaden',
'tooltip-rollback' => 'Met "terugdraaien" draait u met één klik de bewerking(en) terug van de laatste gebruiker die deze pagina heeft bewerkt.',
'tooltip-undo' => 'Met "ongedaan maken" draait u deze bewerking terug en komt in het bewerkingsvenster. U kunt in de bewerkingssamenvatting een reden opgeven.',
'tooltip-preferences-save' => 'Voorkeuren opslaan',
'tooltip-summary' => 'Voer een korte samenvatting in',

# Stylesheets
'common.css' => '/** CSS die hier wordt geplaatst heeft invloed op alle skins */',
'standard.css' => '/* CSS die hier wordt geplaatst heeft alleen invloed op de skin Standard */',
'nostalgia.css' => '/* CSS die hier wordt geplaatst heeft alleen invloed op de skin Nostalgie */',
'cologneblue.css' => '/* CSS die hier wordt geplaatst heeft alleen invloed op de skin Keuls blauw */',
'monobook.css' => '/* CSS die hier wordt geplaatst heeft alleen invloed op de skin Monobook */',
'myskin.css' => '/* CSS die hier wordt geplaatst heeft alleen invloed op de skin MijnSkin */',
'chick.css' => '/* CSS die hier wordt geplaatst heeft alleen invloed op de skin Chick */',
'simple.css' => '/* CSS die hier wordt geplaatst heeft alleen invloed op de skin Eenvoudig */',
'modern.css' => '/* CSS die hier wordt geplaatst heeft alleen invloed op de skin Modern */',
'vector.css' => '/* CSS die hier wordt geplaatst heeft alleen invloed op de skin Vector */',
'print.css' => '/* CSS die hier wordt geplaatst heeft alleen invloed op de printuitvoer */',
'handheld.css' => '/* CSS die hier wordt geplaatst heeft alleen invloed op handheldapparaten gebaseerd op de skin die is ingesteld in $wgHandheldStyle */',
'noscript.css' => '/ * CSS die hier wordt geplaatst heeft invloed voor gebruikers die JavaScript hebben uitgeschakeld * /',
'group-autoconfirmed.css' => '/* CSS die hier wordt geplaatst heeft alleen invloed op automatisch bevestigde gebruikers */',
'group-bot.css' => '/* CSS die hier wordt geplaatst heeft alleen invloed op robots */',
'group-sysop.css' => '/* CSS die hier wordt geplaatst heeft alleen invloed op beheerders */',
'group-bureaucrat.css' => '/* CSS die hier wordt geplaatst heeft alleen invloed op bureaucraten */',

# Scripts
'common.js' => "/* JavaScript die hier wordt geplaatst heeft invloed op alle pagina's voor alle gebruikers */",
'standard.js' => '/* JavaScript die hier wordt geplaatst heeft alleen invloed op gebruikers die de skin Standaard gebruiken */',
'nostalgia.js' => '/* JavaScript die hier wordt geplaatst heeft alleen invloed op gebruikers die de skin Nostalgie gebruiken */',
'cologneblue.js' => '/* JavaScript die hier wordt geplaatst heeft alleen invloed op gebruikers die de skin Keuls blauw gebruiken */',
'monobook.js' => '/* JavaScript die hier wordt geplaatst heeft alleen invloed op gebruikers die de skin Monobook gebruiken */',
'myskin.js' => '/* JavaScript die hier wordt geplaatst heeft alleen invloed op gebruikers die de skin MijnSkin gebruiken */',
'chick.js' => '/* JavaScript die hier wordt geplaatst heeft alleen invloed op gebruikers die de skin Chick gebruiken */',
'simple.js' => '/* JavaScript die hier wordt geplaatst heeft alleen invloed op gebruikers die de skin Eenvoudig gebruiken */',
'modern.js' => '/* JavaScript die hier wordt geplaatst heeft alleen invloed op gebruikers die de skin Modern gebruiken */',
'vector.js' => '/* JavaScript die hier wordt geplaatst heeft alleen invloed op gebruikers die de skin Vector gebruiken */',
'group-autoconfirmed.js' => '/* JavaScript die hier wordt geplaatst heeft alleen invloed op automatisch bevestigde gebruikers */',
'group-bot.js' => '/* JavaScript die hier wordt geplaatst heeft alleen invloed op robots */',
'group-sysop.js' => '/* JavaScript die hier wordt geplaatst heeft alleen invloed op beheerders */',
'group-bureaucrat.js' => '/* JavaScript die hier wordt geplaatst heeft alleen invloed op bureaucraten */',

# Metadata
'notacceptable' => 'De wikiserver kan de gegevens niet leveren in een vorm die uw browser kan lezen.',

# Attribution
'anonymous' => 'Anonieme {{PLURAL:$1|gebruiker|gebruikers}} van {{SITENAME}}',
'siteuser' => '{{SITENAME}}-gebruiker $1',
'anonuser' => 'anonieme {{SITENAME}}-gebruiker $1',
'lastmodifiedatby' => 'Deze pagina is het laatst bewerkt op $1 om $2 door $3.',
'othercontribs' => 'Gebaseerd op werk van $1.',
'others' => 'anderen',
'siteusers' => '{{SITENAME}}-{{PLURAL:$2|gebruiker|gebruikers}} $1',
'anonusers' => 'Anonieme {{SITENAME}}-{{PLURAL:$2|gebruiker|gebruikers}} $1',
'creditspage' => 'Auteurspagina',
'nocredits' => 'Er is geen auteursinformatie beschikbaar voor deze pagina.',

# Spam protection
'spamprotectiontitle' => 'Spamfilter',
'spamprotectiontext' => 'De pagina die u wilde opslaan is geblokkeerd door het spamfilter.
Meestal wordt dit door een externe verwijzing op een zwarte lijst veroorzaakt.',
'spamprotectionmatch' => 'De volgende tekst veroorzaakte een alarm van de spamfilter: $1',
'spambot_username' => 'MediaWiki opschoning spam',
'spam_reverting' => 'Teruggedraaid naar de laatste versie die geen verwijzing bevat naar $1',
'spam_blanking' => 'Alle versies bevatten een verwijzing naar $1. Pagina leeggemaakt',
'spam_deleting' => 'Alle versies bevatten verwijzingen naar $1. Pagina verwijderd',

# Info page
'pageinfo-title' => 'Informatie over "$1"',
'pageinfo-not-current' => 'Deze gegevens zijn alleen beschikbaar voor de huidige versie.',
'pageinfo-header-basic' => 'Basisgegevens',
'pageinfo-header-edits' => 'Bewerkingsgeschiedenis',
'pageinfo-header-restrictions' => 'Paginabeveiliging',
'pageinfo-header-properties' => 'Pagina-eigenschappen',
'pageinfo-display-title' => 'Weergegeven paginanaam',
'pageinfo-default-sort' => 'Standaard sorteerwijze',
'pageinfo-length' => 'Paginalengte (in bytes)',
'pageinfo-article-id' => 'Paginanummer',
'pageinfo-language' => 'Pagina-inhoudstaal',
'pageinfo-robot-policy' => 'Status voor de zoekmachine',
'pageinfo-robot-index' => 'Indexeerbaar',
'pageinfo-robot-noindex' => 'Niet indexeerbaar',
'pageinfo-views' => 'Aantal weergaven',
'pageinfo-watchers' => 'Aantal paginavolgers',
'pageinfo-redirects-name' => 'Doorverwijzingen naar deze pagina',
'pageinfo-subpages-name' => "Subpagina's van deze pagina",
'pageinfo-subpages-value' => '$1 ($2 {{PLURAL:$2|doorverwijzing|doorverwijzingen}}; $3 {{PLURAL:$3|niet-doorverwijzing|niet-doorverwijzingen}})',
'pageinfo-firstuser' => 'Gebruiker die de pagina heeft aangemaakt',
'pageinfo-firsttime' => 'Datum waarop de pagina is aangemaakt',
'pageinfo-lastuser' => 'Laatste bewerker',
'pageinfo-lasttime' => 'Datum van laatste bewerking',
'pageinfo-edits' => 'Totaal aantal bewerkingen',
'pageinfo-authors' => 'Totaal aantal verschillende auteurs',
'pageinfo-recent-edits' => 'Recent aantal bewerkingen (binnen de afgelopen $1).',
'pageinfo-recent-authors' => 'Recent aantal verschillende auteurs',
'pageinfo-magic-words' => '{{PLURAL:$1|Magisch woord|Magische woorden}} ($1)',
'pageinfo-hidden-categories' => 'Verborgen {{PLURAL:$1|categorie|categorieën}} ($1)',
'pageinfo-templates' => '{{PLURAL:$1|Gebruikt sjabloon|Gebruikte sjablonen}} ($1)',
'pageinfo-toolboxlink' => 'Paginagegevens',
'pageinfo-redirectsto' => 'Verwijst door naar',
'pageinfo-redirectsto-info' => 'informatie',
'pageinfo-contentpage' => 'Geteld als pagina met inhoud',
'pageinfo-contentpage-yes' => 'Ja',
'pageinfo-protect-cascading' => 'Beveiligingen werken vanaf hier door',
'pageinfo-protect-cascading-yes' => 'Ja',
'pageinfo-protect-cascading-from' => 'Pagina is beveiligd vanuit een andere pagina',

# Skin names
'skinname-standard' => 'Klassiek',
'skinname-nostalgia' => 'Nostalgie',
'skinname-cologneblue' => 'Keuls blauw',
'skinname-monobook' => 'Monobook',
'skinname-myskin' => 'MijnSkin',
'skinname-chick' => 'Chick',
'skinname-simple' => 'Eenvoudig',
'skinname-modern' => 'Modern',
'skinname-vector' => 'Vector',

# Patrolling
'markaspatrolleddiff' => 'Als gecontroleerd markeren',
'markaspatrolledtext' => 'Deze pagina als gecontroleerd markeren',
'markedaspatrolled' => 'Gemarkeerd als gecontroleerd',
'markedaspatrolledtext' => 'De geselecteerde bewerking van [[:$1]] is gemarkeerd als gecontroleerd.',
'rcpatroldisabled' => 'De controlemogelijkheid op recente wijzigingen is uitgeschakeld.',
'rcpatroldisabledtext' => 'De mogelijkheid om recente wijzigingen als gecontroleerd aan te merken is op dit ogenblik uitgeschakeld.',
'markedaspatrollederror' => 'Kan niet als gecontroleerd worden aangemerkt',
'markedaspatrollederrortext' => 'Selecteer een versie om als gecontroleerd aan te merken.',
'markedaspatrollederror-noautopatrol' => 'U kunt uw eigen wijzigingen niet als gecontroleerd markeren.',

# Patrol log
'patrol-log-page' => 'Markeerlogboek',
'patrol-log-header' => 'Dit logboek bevat versies die gemarkeerd zijn als gecontroleerd.',
'log-show-hide-patrol' => 'Markeerlogboek $1',

# Image deletion
'deletedrevision' => 'De oude versie $1 is verwijderd',
'filedeleteerror-short' => 'Fout bij het verwijderen van bestand: $1',
'filedeleteerror-long' => 'Er zijn fouten opgetreden bij het verwijderen van het bestand:

$1',
'filedelete-missing' => 'Het bestand "$1" kan niet verwijderd worden, omdat het niet bestaat.',
'filedelete-old-unregistered' => 'De aangegeven bestandsversie "$1" staat niet in de database`.',
'filedelete-current-unregistered' => 'Het aangegeven bestand "$1" staat niet in de database.',
'filedelete-archive-read-only' => 'De webserver kan niet in de archiefmap "$1" schrijven.',

# Browsing diffs
'previousdiff' => '← Oudere bewerking',
'nextdiff' => 'Nieuwere bewerking →',

# Media information
'mediawarning' => "'''Waarschuwing''': dit bestandstype bevat mogelijk programmacode die uw systeem schade kan berokkenen.",
'imagemaxsize' => "Maximale afmetingen van afbeeldingen:<br />''(voor op de beschrijvingspagina)''",
'thumbsize' => 'Grootte miniatuurafbeelding:',
'widthheight' => '$1 × $2',
'widthheightpage' => "$1 × $2, $3 {{PLURAL:$3|pagina|pagina's}}",
'file-info' => 'bestandsgrootte: $1, MIME-type: $2',
'file-info-size' => '$1 × $2 pixels, bestandsgrootte: $3, MIME-type: $4',
'file-info-size-pages' => "$1 × $2 pixels, bestandsgrootte: $3, MIME-type: $4, $5 {{PLURAL:$5|pagina|pagina's}}",
'file-nohires' => 'Geen hogere resolutie beschikbaar.',
'svg-long-desc' => 'SVG-bestand, nominaal $1 × $2 pixels, bestandsgrootte: $3',
'svg-long-desc-animated' => 'Bewegend SVG-bestand, nominaal $1 × $2 pixels, bestandsgrootte: $3',
'show-big-image' => 'Volledige resolutie',
'show-big-image-preview' => 'Grootte van deze voorvertoning: $1.',
'show-big-image-other' => 'Andere {{PLURAL:$2|resolutie|resoluties}}: $1.',
'show-big-image-size' => '$1 × $2 pixels',
'file-info-gif-looped' => 'herhalend',
'file-info-gif-frames' => '$1 {{PLURAL:$1|frame|frames}}',
'file-info-png-looped' => 'herhalend',
'file-info-png-repeat' => '$1 {{PLURAL:$1|keer|keer}} afgespeeld',
'file-info-png-frames' => '$1 {{PLURAL:$1|frame|frames}}',
'file-no-thumb-animation' => "'''Let op: vanwege technische beperkingen, kunnen miniaturen van dit bestand niet geanimeerd worden weergegeven.''",
'file-no-thumb-animation-gif' => "'''Let op: vanwege technische beperkingen, kunnen miniaturen van GIF-afbeeldingen met een hoge resolutie niet geanimeerd worden weergegeven.''",

# Special:NewFiles
'newimages' => 'Nieuwe bestanden',
'imagelisttext' => "Hier volgt een lijst met '''$1''' {{PLURAL:$1|bestand|bestanden}} gesorteerd $2.",
'newimages-summary' => 'Op deze speciale pagina worden de meest recent toegevoegde bestanden weergegeven.',
'newimages-legend' => 'Bestandsnaam',
'newimages-label' => 'Bestandsnaam (of deel daarvan):',
'showhidebots' => '(Bots $1)',
'noimages' => 'Er is niets te zien.',
'ilsubmit' => 'Zoeken',
'bydate' => 'op datum',
'sp-newimages-showfrom' => 'Nieuwe bestanden bekijken vanaf $1 om $2.',

# Video information, used by Language::formatTimePeriod() to format lengths in the above messages
'hours-abbrev' => '$1u',
'seconds' => '{{PLURAL:$1|$1 seconde|$1 seconden}}',
'minutes' => '{{PLURAL:$1|$1 minuut|$1 minuten}}',
'hours' => '{{PLURAL:$1|$1 uur|$1 uur}}',
'days' => '{{PLURAL:$1|$1 dag|$1 dagen}}',
'ago' => '$1 geleden',

# Bad image list
'bad_image_list' => "De opmaak is als volgt:

Alleen regels in een lijst (regels die beginnen met *) worden verwerkt.
De eerste verwijzing op een regel moet een verwijzing zijn naar een ongewenst bestand.
Alle volgende verwijzingen die op dezelfde regel staan, worden behandeld als uitzondering, zoals bijvoorbeeld pagina's waarop het bestand in de tekst is opgenomen.",

# Metadata
'metadata' => 'Metadata',
'metadata-help' => 'Dit bestand bevat aanvullende gegevens, die waarschijnlijk door een fotocamera, scanner of fotobewerkingsprogramma toegevoegd zijn.
Als het bestand is aangepast, komen sommige details mogelijk niet overeen met het gewijzigde bestand.',
'metadata-expand' => 'Uitgebreide gegevens bekijken',
'metadata-collapse' => 'Uitgebreide gegevens verbergen',
'metadata-fields' => 'De afbeeldingsmetadatavelden in dit bericht worden ook weergegeven op een afbeeldingspagina als de metadatatabel ingeklapt is.
Andere velden worden verborgen.
* make
* model
* datetimeoriginal
* exposuretime
* fnumber
* isospeedratings
* focallength
* artist
* copyright
* imagedescription
* gpslatitude
* gpslongitude
* gpsaltitude',

# EXIF tags
'exif-imagewidth' => 'Breedte',
'exif-imagelength' => 'Hoogte',
'exif-bitspersample' => 'Bits per component',
'exif-compression' => 'Compressiemethode',
'exif-photometricinterpretation' => 'Pixelcompositie',
'exif-orientation' => 'Oriëntatie',
'exif-samplesperpixel' => 'Aantal componenten',
'exif-planarconfiguration' => 'Gegevensstructuur',
'exif-ycbcrsubsampling' => 'Subsampleverhouding van Y tot C',
'exif-ycbcrpositioning' => 'Y- en C-positionering',
'exif-xresolution' => 'Horizontale resolutie',
'exif-yresolution' => 'Verticale resolutie',
'exif-stripoffsets' => 'Locatie afbeeldingsgegevens',
'exif-rowsperstrip' => 'Rijen per strip',
'exif-stripbytecounts' => 'Bytes per gecomprimeerde strip',
'exif-jpeginterchangeformat' => 'Afstand tot JPEG SOI',
'exif-jpeginterchangeformatlength' => 'Bytes JPEG-gegevens',
'exif-whitepoint' => 'Witpuntchromaticiteit',
'exif-primarychromaticities' => 'Chromaciteit van primaire kleuren',
'exif-ycbcrcoefficients' => 'Transformatiematrixcoëfficiënten voor de kleurruimte',
'exif-referenceblackwhite' => 'Paar zwart en wit referentiewaarden',
'exif-datetime' => 'Tijdstip laatste bestandswijziging',
'exif-imagedescription' => 'Omschrijving afbeelding',
'exif-make' => 'Merk camera',
'exif-model' => 'Cameramodel',
'exif-software' => 'Gebruikte software',
'exif-artist' => 'Auteur',
'exif-copyright' => 'Auteursrechtenhouder',
'exif-exifversion' => 'Exif-versie',
'exif-flashpixversion' => 'Ondersteunde Flashpix-versie',
'exif-colorspace' => 'Kleurruimte',
'exif-componentsconfiguration' => 'Betekenis van elke component',
'exif-compressedbitsperpixel' => 'Beeldcompressiemethode',
'exif-pixelydimension' => 'Afbeeldingsbreedte',
'exif-pixelxdimension' => 'Afbeeldingshoogte',
'exif-usercomment' => 'Opmerkingen',
'exif-relatedsoundfile' => 'Bijbehorend audiobestand',
'exif-datetimeoriginal' => 'Tijdstip gegevensaanmaak',
'exif-datetimedigitized' => 'Tijdstip digitalisering',
'exif-subsectime' => 'Datum tijd subseconden',
'exif-subsectimeoriginal' => 'Subseconden tijdstip datageneratie',
'exif-subsectimedigitized' => 'Subseconden tijdstip digitalisatie',
'exif-exposuretime' => 'Belichtingstijd',
'exif-exposuretime-format' => '$1 sec ($2)',
'exif-fnumber' => 'F-getal',
'exif-exposureprogram' => 'Belichtingsprogramma',
'exif-spectralsensitivity' => 'Spectrale gevoeligheid',
'exif-isospeedratings' => 'ISO/ASA-waarde',
'exif-shutterspeedvalue' => 'Sluitersnelheid in APEX',
'exif-aperturevalue' => 'Diafragma in APEX',
'exif-brightnessvalue' => 'Helderheid in APEX',
'exif-exposurebiasvalue' => 'Belichtingscompensatie',
'exif-maxaperturevalue' => 'Maximale diafragma-opening',
'exif-subjectdistance' => 'Afstand tot onderwerp',
'exif-meteringmode' => 'Methode lichtmeting',
'exif-lightsource' => 'Lichtbron',
'exif-flash' => 'Flitser',
'exif-focallength' => 'Brandpuntsafstand',
'exif-subjectarea' => 'Objectruimte',
'exif-flashenergy' => 'Flitssterkte',
'exif-focalplanexresolution' => 'Brandpuntsvlak-X-resolutie',
'exif-focalplaneyresolution' => 'Brandpuntsvlak-Y-resolutie',
'exif-focalplaneresolutionunit' => 'Eenheid CCD-resolutie',
'exif-subjectlocation' => 'Objectlocatie',
'exif-exposureindex' => 'Belichtingsindex',
'exif-sensingmethod' => 'Meetmethode',
'exif-filesource' => 'Bestandsbron',
'exif-scenetype' => 'Scènetype',
'exif-customrendered' => 'Aangepaste beeldverwerking',
'exif-exposuremode' => 'Belichtingsinstelling',
'exif-whitebalance' => 'Witbalans',
'exif-digitalzoomratio' => 'Digitale zoomfactor',
'exif-focallengthin35mmfilm' => 'Brandpuntsafstand (35mm-equivalent)',
'exif-scenecapturetype' => 'Soort opname',
'exif-gaincontrol' => 'Piekbeheersing',
'exif-contrast' => 'Contrast',
'exif-saturation' => 'Verzadiging',
'exif-sharpness' => 'Scherpte',
'exif-devicesettingdescription' => 'Omschrijving apparaatinstellingen',
'exif-subjectdistancerange' => 'Bereik objectafstand',
'exif-imageuniqueid' => 'Uniek ID afbeelding',
'exif-gpsversionid' => 'GPS-versienummer',
'exif-gpslatituderef' => 'Noorder- of zuiderbreedte',
'exif-gpslatitude' => 'Breedtegraad',
'exif-gpslongituderef' => 'Ooster- of westerlengte',
'exif-gpslongitude' => 'Lengtegraad',
'exif-gpsaltituderef' => 'Hoogtereferentie',
'exif-gpsaltitude' => 'Hoogte',
'exif-gpstimestamp' => 'GPS-tijd (atoomklok)',
'exif-gpssatellites' => 'Gebruikte satellieten voor meting',
'exif-gpsstatus' => 'Ontvangerstatus',
'exif-gpsmeasuremode' => 'Meetmodus',
'exif-gpsdop' => 'Meetprecisie',
'exif-gpsspeedref' => 'Snelheid eenheid',
'exif-gpsspeed' => 'Snelheid van GPS-ontvanger',
'exif-gpstrackref' => 'Referentie voor bewegingsrichting',
'exif-gpstrack' => 'Bewegingsrichting',
'exif-gpsimgdirectionref' => 'Referentie voor afbeeldingsrichting',
'exif-gpsimgdirection' => 'Afbeeldingsrichting',
'exif-gpsmapdatum' => 'Gebruikte geodetische onderzoeksgegevens',
'exif-gpsdestlatituderef' => 'Referentie voor breedtegraad bestemming',
'exif-gpsdestlatitude' => 'Breedtegraad bestemming',
'exif-gpsdestlongituderef' => 'Referentie voor lengtegraad bestemming',
'exif-gpsdestlongitude' => 'Lengtegraad bestemming',
'exif-gpsdestbearingref' => 'Referentie voor richting naar bestemming',
'exif-gpsdestbearing' => 'Richting naar bestemming',
'exif-gpsdestdistanceref' => 'Referentie voor afstand tot bestemming',
'exif-gpsdestdistance' => 'Afstand tot bestemming',
'exif-gpsprocessingmethod' => 'GPS-verwerkingsmethode',
'exif-gpsareainformation' => 'Naam GPS-gebied',
'exif-gpsdatestamp' => 'GPS-datum',
'exif-gpsdifferential' => 'Differentiele GPS-correctie',
'exif-jpegfilecomment' => 'Opmerking bij JPEG-bestand',
'exif-keywords' => 'Trefwoorden',
'exif-worldregioncreated' => 'Regio in de wereld waar de afbeelding is gemaakt',
'exif-countrycreated' => 'Land waar de afbeelding is gemaakt',
'exif-countrycodecreated' => 'Code voor het land waar de afbeelding is gemaakt',
'exif-provinceorstatecreated' => 'Provincie of staat waar de afbeelding is gemaakt',
'exif-citycreated' => 'Plaats waar de afbeelding is gemaakt',
'exif-sublocationcreated' => 'Wijk van de plaats waar de afbeelding is gemaakt',
'exif-worldregiondest' => 'Weergegeven wereldregio',
'exif-countrydest' => 'Weergegeven land',
'exif-countrycodedest' => 'Code voor het weergegeven land',
'exif-provinceorstatedest' => 'Weergegeven provincie of staat',
'exif-citydest' => 'Weergegeven plaats',
'exif-sublocationdest' => 'Weergegeven wijk in plaats',
'exif-objectname' => 'Korte naam',
'exif-specialinstructions' => 'Speciale instructies',
'exif-headline' => 'Koptekst',
'exif-credit' => 'Credit/Leverancier',
'exif-source' => 'Bron',
'exif-editstatus' => 'Bewerkingsstatus van de afbeelding',
'exif-urgency' => 'Urgentie',
'exif-fixtureidentifier' => 'Groepsnaam',
'exif-locationdest' => 'Weergegeven locatie',
'exif-locationdestcode' => 'Code voor de weergegeven locatie',
'exif-objectcycle' => 'Tijd van de dag waar de media voor bedoeld is',
'exif-contact' => 'Contactgegevens',
'exif-writer' => 'Schrijver',
'exif-languagecode' => 'Taal',
'exif-iimversion' => 'IIM-versie',
'exif-iimcategory' => 'Categorie',
'exif-iimsupplementalcategory' => 'Aanvullende categorieën',
'exif-datetimeexpires' => 'Niet te gebruiken na',
'exif-datetimereleased' => 'Gepubliceerd op',
'exif-originaltransmissionref' => 'Originele taaklocatiecode',
'exif-identifier' => 'Id',
'exif-lens' => 'Gebruikte lens',
'exif-serialnumber' => 'Serienummer van de camera',
'exif-cameraownername' => 'Eigenaar van camera',
'exif-label' => 'Label',
'exif-datetimemetadata' => 'Datum waarop de metadata het laatst zijn bewerkt',
'exif-nickname' => 'Informele naam van de afbeelding',
'exif-rating' => 'Waardering (schaal van 5)',
'exif-rightscertificate' => 'Rechtenbeheercertificaat',
'exif-copyrighted' => 'Auteursrechtenstatus',
'exif-copyrightowner' => 'Auteursrechtenhouder',
'exif-usageterms' => 'Gebruiksvoorwaarden',
'exif-webstatement' => 'Online auteursrechtenverklaring',
'exif-originaldocumentid' => 'Uniek ID van het originele document',
'exif-licenseurl' => 'URL voor auteursrechtenlicentie',
'exif-morepermissionsurl' => 'Alternatieve licentiegegevens',
'exif-attributionurl' => 'Gebruik de volgende verwijzing bij hergebruik van dit werk',
'exif-preferredattributionname' => 'Gebruik de volgende credits bij hergebruik van dit werk',
'exif-pngfilecomment' => 'Opmerking bij PNG-bestand',
'exif-disclaimer' => 'Voorbehoud',
'exif-contentwarning' => 'Waarschuwing over inhoud',
'exif-giffilecomment' => 'Opmerking bij GIF-bestand',
'exif-intellectualgenre' => 'Itemtype',
'exif-subjectnewscode' => 'Onderwerpcode',
'exif-scenecode' => 'IPTC-scènecode',
'exif-event' => 'Afgebeelde gebeurtenis',
'exif-organisationinimage' => 'Afgebeelde organisatie',
'exif-personinimage' => 'Afgebeelde persoon',
'exif-originalimageheight' => 'Hoogte van de afbeelding voor bijsnijden',
'exif-originalimagewidth' => 'Breedte van de afbeelding voor bijsnijden',

# EXIF attributes
'exif-compression-1' => 'Ongecomprimeerd',
'exif-compression-2' => 'CCITT Groep 3 1-dimensionale aangepaste "Huffman run length"-codering',
'exif-compression-3' => 'CCITT Groep 3 faxcodering',
'exif-compression-4' => 'CCITT Groep 4 faxcodering',

'exif-copyrighted-true' => 'Auteursrechtelijk beschermd',
'exif-copyrighted-false' => 'Publiek domein',

'exif-unknowndate' => 'Datum onbekend',

'exif-orientation-1' => 'Normaal',
'exif-orientation-2' => 'Horizontaal gespiegeld',
'exif-orientation-3' => '180° gedraaid',
'exif-orientation-4' => 'Verticaal gespiegeld',
'exif-orientation-5' => 'Gespiegeld om as linksboven-rechtsonder',
'exif-orientation-6' => '90° linksom gedraaid',
'exif-orientation-7' => 'Gespiegeld om as linksonder-rechtsboven',
'exif-orientation-8' => '90° rechtsom gedraaid',

'exif-planarconfiguration-1' => 'chunky gegevensformaat',
'exif-planarconfiguration-2' => 'planar gegevensformaat',

'exif-colorspace-65535' => 'Ongekalibreerd',

'exif-componentsconfiguration-0' => 'bestaat niet',

'exif-exposureprogram-0' => 'Niet bepaald',
'exif-exposureprogram-1' => 'Handmatig',
'exif-exposureprogram-2' => 'Normaal programma',
'exif-exposureprogram-3' => 'Diafragmaprioriteit',
'exif-exposureprogram-4' => 'Sluiterprioriteit',
'exif-exposureprogram-5' => 'Creatief (voorkeur voor grote scherptediepte)',
'exif-exposureprogram-6' => 'Actie (voorkeur voor hoge sluitersnelheid)',
'exif-exposureprogram-7' => 'Portret (detailopname met onscherpe achtergrond)',
'exif-exposureprogram-8' => 'Landschap (scherpe achtergrond)',

'exif-subjectdistance-value' => '$1 meter',

'exif-meteringmode-0' => 'Onbekend',
'exif-meteringmode-1' => 'Gemiddeld',
'exif-meteringmode-2' => 'Centrumgewogen',
'exif-meteringmode-3' => 'Spot',
'exif-meteringmode-4' => 'Multi-spot',
'exif-meteringmode-5' => 'Multi-segment (patroon)',
'exif-meteringmode-6' => 'Deelmeting',
'exif-meteringmode-255' => 'Anders',

'exif-lightsource-0' => 'Onbekend',
'exif-lightsource-1' => 'Daglicht',
'exif-lightsource-2' => 'TL-licht',
'exif-lightsource-3' => 'Tungsten (lamplicht)',
'exif-lightsource-4' => 'Flits',
'exif-lightsource-9' => 'Mooi weer',
'exif-lightsource-10' => 'Bewolkt',
'exif-lightsource-11' => 'Schaduw',
'exif-lightsource-12' => 'Daglicht fluorescerend (D 5700 – 7100K)',
'exif-lightsource-13' => 'Dagwit fluorescerend (N 4600 - 5400K)',
'exif-lightsource-14' => 'Koel wit fluorescerend (W 3900 - 4500K)',
'exif-lightsource-15' => 'Wit fluorescerend (WW 3200 - 3700K)',
'exif-lightsource-17' => 'Standaard licht A',
'exif-lightsource-18' => 'Standaard licht B',
'exif-lightsource-19' => 'Standaard licht C',
'exif-lightsource-24' => 'ISO-studiotungsten',
'exif-lightsource-255' => 'Andere lichtbron',

# Flash modes
'exif-flash-fired-0' => 'Flits is niet afgegaan',
'exif-flash-fired-1' => 'Met flitser',
'exif-flash-return-0' => 'geen stroboscoopontvangstfunctie',
'exif-flash-return-2' => 'geen stroboscoopontvangst gedetecteerd',
'exif-flash-return-3' => 'stroboscoopontvangst gedetecteerd',
'exif-flash-mode-1' => 'verplicht met flitser',
'exif-flash-mode-2' => 'flitser verplicht onderdrukt',
'exif-flash-mode-3' => 'automatische modus',
'exif-flash-function-1' => 'Geen flitserfunctie',
'exif-flash-redeye-1' => 'filter rode ogen verwijderen',

'exif-focalplaneresolutionunit-2' => 'inch',

'exif-sensingmethod-1' => 'Niet gedefiniëerd',
'exif-sensingmethod-2' => 'Eén-chip-kleursensor',
'exif-sensingmethod-3' => 'Twee-chip-kleursensor',
'exif-sensingmethod-4' => 'Drie-chip-kleursensor',
'exif-sensingmethod-5' => 'Kleurvolgende gebiedssensor',
'exif-sensingmethod-7' => 'Drielijnige sensor',
'exif-sensingmethod-8' => 'Kleurvolgende lijnsensor',

'exif-filesource-3' => 'Digitale fotocamera',

'exif-scenetype-1' => 'Een direct gefotografeerde afbeelding',

'exif-customrendered-0' => 'Normale verwerking',
'exif-customrendered-1' => 'Aangepaste verwerking',

'exif-exposuremode-0' => 'Automatische belichting',
'exif-exposuremode-1' => 'Handmatige belichting',
'exif-exposuremode-2' => 'Auto-Bracket',

'exif-whitebalance-0' => 'Automatische witbalans',
'exif-whitebalance-1' => 'Handmatige witbalans',

'exif-scenecapturetype-0' => 'Standaard',
'exif-scenecapturetype-1' => 'Landschap',
'exif-scenecapturetype-2' => 'Portret',
'exif-scenecapturetype-3' => 'Nachtscène',

'exif-gaincontrol-0' => 'Geen',
'exif-gaincontrol-1' => 'Lage pieken omhoog',
'exif-gaincontrol-2' => 'Hoge pieken omhoog',
'exif-gaincontrol-3' => 'Lage pieken omlaag',
'exif-gaincontrol-4' => 'Hoge pieken omlaag',

'exif-contrast-0' => 'Normaal',
'exif-contrast-1' => 'Zacht',
'exif-contrast-2' => 'Hard',

'exif-saturation-0' => 'Normaal',
'exif-saturation-1' => 'Laag',
'exif-saturation-2' => 'Hoog',

'exif-sharpness-0' => 'Normaal',
'exif-sharpness-1' => 'Zacht',
'exif-sharpness-2' => 'Hard',

'exif-subjectdistancerange-0' => 'Onbekend',
'exif-subjectdistancerange-1' => 'Macro',
'exif-subjectdistancerange-2' => 'Dichtbij',
'exif-subjectdistancerange-3' => 'Ver weg',

# Pseudotags used for GPSLatitudeRef and GPSDestLatitudeRef
'exif-gpslatitude-n' => 'Noorderbreedte',
'exif-gpslatitude-s' => 'Zuiderbreedte',

# Pseudotags used for GPSLongitudeRef and GPSDestLongitudeRef
'exif-gpslongitude-e' => 'Oosterlengte',
'exif-gpslongitude-w' => 'Westerlengte',

# Pseudotags used for GPSAltitudeRef
'exif-gpsaltitude-above-sealevel' => '$1 {{PLURAL:$1|meter|meter}} boven de zeespiegel',
'exif-gpsaltitude-below-sealevel' => '$1 {{PLURAL:$1|meter|meter}} onder de zeespiegel',

'exif-gpsstatus-a' => 'Bezig met meten',
'exif-gpsstatus-v' => 'Meetinteroperabiliteit',

'exif-gpsmeasuremode-2' => '2-dimensionale meting',
'exif-gpsmeasuremode-3' => '3-dimensionale meting',

# Pseudotags used for GPSSpeedRef
'exif-gpsspeed-k' => 'Kilometer per uur',
'exif-gpsspeed-m' => 'Mijl per uur',
'exif-gpsspeed-n' => 'Knopen',

# Pseudotags used for GPSDestDistanceRef
'exif-gpsdestdistance-k' => 'Kilometers',
'exif-gpsdestdistance-m' => 'Mijlen',
'exif-gpsdestdistance-n' => 'Knopen',

'exif-gpsdop-excellent' => 'Uitstekend ($1)',
'exif-gpsdop-good' => 'Goed ($1)',
'exif-gpsdop-moderate' => 'Gemiddeld ($1)',
'exif-gpsdop-fair' => 'Redelijk ($1)',
'exif-gpsdop-poor' => 'Slecht ($1)',

'exif-objectcycle-a' => "Alleen 's ochtends",
'exif-objectcycle-p' => "Alleen 's avonds",
'exif-objectcycle-b' => "Zowel 's ochtends als 's avonds",

# Pseudotags used for GPSTrackRef, GPSImgDirectionRef and GPSDestBearingRef
'exif-gpsdirection-t' => 'Eigenlijke richting',
'exif-gpsdirection-m' => 'Magnetische richting',

'exif-ycbcrpositioning-1' => 'Gecentreerd',
'exif-ycbcrpositioning-2' => 'Gecositueerd',

'exif-dc-contributor' => 'Medewerkers',
'exif-dc-coverage' => 'Ruimtelijke of temporele scope van media',
'exif-dc-date' => 'Datum(s)',
'exif-dc-publisher' => 'Uitgever',
'exif-dc-relation' => 'Gerelateerde media',
'exif-dc-rights' => 'Rechten',
'exif-dc-source' => 'Bronmedia',
'exif-dc-type' => 'Mediatype',

'exif-rating-rejected' => 'Afgewezen',

'exif-isospeedratings-overflow' => 'Groter dan 65535',

'exif-iimcategory-ace' => 'Kunst, cultuur en vermaak',
'exif-iimcategory-clj' => 'Misdaad en recht',
'exif-iimcategory-dis' => 'Rampen en ongevallen',
'exif-iimcategory-fin' => 'Economie en bedrijfsleven',
'exif-iimcategory-edu' => 'Onderwijs',
'exif-iimcategory-evn' => 'Milieu',
'exif-iimcategory-hth' => 'Gezondheid',
'exif-iimcategory-hum' => 'Human interest',
'exif-iimcategory-lab' => 'Arbeid',
'exif-iimcategory-lif' => 'Lifestyle en vrije tijd',
'exif-iimcategory-pol' => 'Politiek',
'exif-iimcategory-rel' => 'Godsdienst en overtuiging',
'exif-iimcategory-sci' => 'Wetenschap en technologie',
'exif-iimcategory-soi' => 'Sociale kwesties',
'exif-iimcategory-spo' => 'Sport',
'exif-iimcategory-war' => 'Oorlog, conflict en onrust',
'exif-iimcategory-wea' => 'Weer',

'exif-urgency-normal' => 'Normaal ($1)',
'exif-urgency-low' => 'Laag ($1)',
'exif-urgency-high' => 'Hoog ($1)',
'exif-urgency-other' => 'Door gebruiker gedefinieerde prioriteit ($1)',

# External editor support
'edit-externally' => 'Dit bestand in een extern programma bewerken',
'edit-externally-help' => '(zie de [//www.mediawiki.org/wiki/Manual:External_editors handleiding voor instellingen] voor meer informatie)',

# 'all' in various places, this might be different for inflected languages
'watchlistall2' => 'alles',
'namespacesall' => 'alle',
'monthsall' => 'alle',
'limitall' => 'alle',

# E-mail address confirmation
'confirmemail' => 'E-mailadres bevestigen',
'confirmemail_noemail' => 'U hebt geen geldig e-mailadres ingegeven in uw [[Special:Preferences|gebruikersvoorkeuren]].',
'confirmemail_text' => '{{SITENAME}} eist bevestiging van uw e-mailadres voordat u de e-mailmogelijkheden kunt gebruiken.
Klik op de onderstaande knop om een bevestigingsbericht te ontvangen.
Dit bericht bevat een verwijzing met een code.
Open die verwijzing om uw e-mailadres te bevestigen.',
'confirmemail_pending' => 'Er is al een bevestigingsbericht aan u verzonden.
Als u recentelijk uw gebruiker hebt aangemaakt, wacht dan een paar minuten totdat die aankomt voordat u opnieuw een e-mail laat sturen.',
'confirmemail_send' => 'Een bevestigingscode verzenden',
'confirmemail_sent' => 'Bevestigingscode verzonden.',
'confirmemail_oncreate' => 'Er is een bevestigingscode naar uw e-mailadres verzonden.
Deze code is niet nodig om u aan te melden, maar u dient deze wel te bevestigen voordat u de e-mailmogelijkheden van deze wiki kunt gebruiken.',
'confirmemail_sendfailed' => '{{SITENAME}} kon uw bevestigingscode niet verzenden.
Controleer uw e-mailadres op ongeldige tekens.

Het e-mailprogramma meldde: $1',
'confirmemail_invalid' => 'Ongeldige bevestigingscode.
Mogelijk is de code verlopen.',
'confirmemail_needlogin' => 'U moet $1 om uw e-mailadres te bevestigen.',
'confirmemail_success' => 'Uw e-mailadres is bevestigd.
U kunt zich nu [[Special:UserLogin|aanmelden]] en de wiki gebruiken.',
'confirmemail_loggedin' => 'Uw e-mailadres is nu bevestigd.',
'confirmemail_error' => 'Er is iets verkeerd gegaan tijdens het opslaan van uw bevestiging.',
'confirmemail_subject' => 'Bevestiging e-mailadres voor {{SITENAME}}',
'confirmemail_body' => 'Iemand, waarschijnlijk u, met het IP-adres $1,
heeft zich met dit e-mailadres geregistreerd als gebruiker "$2" op {{SITENAME}}.

Open de volgende verwijzing in uw webbrowser om te bevestigen dat u deze gebruiker bent en om de e-mailmogelijkheden op {{SITENAME}} te activeren:

$3

Als u uzelf *niet* hebt aangemeld, volg dan de volgende verwijzing om de bevestiging van uw e-mailadres te annuleren:

$5

De bevestigingscode vervalt op $4.',
'confirmemail_body_changed' => 'Iemand, waarschijnlijk u, met het IP-adres $1,
heeft het het e-mailadres geregistreerd voor gebruiker "$2" op {{SITENAME}} gewijzigd naar dit e-mailadres.

Open de volgende verwijzing in uw webbrowser om te bevestigen dat u deze gebruiker bent en om de e-mailmogelijkheden op {{SITENAME}} opnieuw te activeren:

$3

Als u uzelf *niet* hebt aangemeld, volg dan de volgende verwijzing om de bevestiging van uw e-mailadres te annuleren:

$5

De bevestigingscode vervalt op $4.',
'confirmemail_body_set' => 'Iemand, waarschijnlijk u, met het IP-adres $1,
heeft het het e-mailadres voor gebruiker "$2" op {{SITENAME}} ingesteld op dit e-mailadres.

Open de volgende verwijzing in uw webbrowser om te bevestigen dat u deze gebruiker bent en om de e-mailmogelijkheden op {{SITENAME}} opnieuw te activeren:

$3

Als u zelf deze wijziging *niet* hebt gemaakt, volg dan de volgende verwijzing om de bevestiging van uw e-mailadres te annuleren:

$5

De bevestigingscode vervalt op $4.',
'confirmemail_invalidated' => 'De e-mailbevestiging is geannuleerd',
'invalidateemail' => 'E-mailbevestiging annuleren',

# Scary transclusion
'scarytranscludedisabled' => '[Interwiki-invoeging van sjablonen is uitgeschakeld]',
'scarytranscludefailed' => '[Het sjabloon $1 kon niet opgehaald worden]',
'scarytranscludefailed-httpstatus' => '[Het sjabloon $1 kon niet opgehaald worden: HTTP $2]',
'scarytranscludetoolong' => '[De URL is te lang]',

# Delete conflict
'deletedwhileediting' => "'''Let op''': deze pagina is verwijderd terwijl u bezig was met uw bewerking!",
'confirmrecreate' => "Nadat u begonnen bent met uw wijziging heeft [[User:$1|$1]] ([[User talk:$1|overleg]]) deze pagina verwijderd met opgave van de volgende reden:
: ''$2''
Bevestig dat u de pagina opnieuw wilt aanmaken.",
'confirmrecreate-noreason' => 'Nadat u begonnen bent met uw wijziging heeft [[User:$1|$1]] ([[User talk:$1|overleg]]) deze pagina verwijderd.
Bevestig dat u de pagina opnieuw wilt aanmaken.',
'recreate' => 'Opnieuw aanmaken',

# action=purge
'confirm_purge_button' => 'OK',
'confirm-purge-top' => 'De cache van deze pagina legen?',
'confirm-purge-bottom' => 'Het opschonen van de cache zorgt ervoor dat de meest recente versie van een pagina wordt weergegeven.',

# action=watch/unwatch
'confirm-watch-button' => 'OK',
'confirm-watch-top' => 'Deze pagina toevoegen aan uw volglijst?',
'confirm-unwatch-button' => 'OK',
'confirm-unwatch-top' => 'Deze pagina verwijderen uit uw volglijst?',

# Multipage image navigation
'imgmultipageprev' => '← vorige pagina',
'imgmultipagenext' => 'volgende pagina →',
'imgmultigo' => 'OK',
'imgmultigoto' => 'Ga naar pagina $1',

# Table pager
'ascending_abbrev' => 'opl.',
'descending_abbrev' => 'afl.',
'table_pager_next' => 'Volgende pagina',
'table_pager_prev' => 'Vorige pagina',
'table_pager_first' => 'Eerste pagina',
'table_pager_last' => 'Laatste pagina',
'table_pager_limit' => '$1 resultaten per pagina bekijken',
'table_pager_limit_label' => 'Items per pagina:',
'table_pager_limit_submit' => 'OK',
'table_pager_empty' => 'Geen resultaten',

# Auto-summaries
'autosumm-blank' => 'De pagina is leeggehaald',
'autosumm-replace' => 'Tekst vervangen door "$1"',
'autoredircomment' => 'Verwijst door naar [[$1]]',
'autosumm-new' => "Nieuwe pagina aangemaakt met '$1'",

# Size units
'size-kilobytes' => '$1 kB',

# Live preview
'livepreview-loading' => 'Bezig met laden…',
'livepreview-ready' => 'Bezig met laden… Klaar!',
'livepreview-failed' => 'Live voorvertoning mislukt!
Probeer de normale voorvertoning.',
'livepreview-error' => 'Verbinden mislukt: $1 "$2".
Probeer normale voorvertoning te gebruiken.',

# Friendlier slave lag warnings
'lag-warn-normal' => 'Wijzigingen in de afgelopen {{PLURAL:$1|seconde|$1 seconden}} worden misschien niet weergegeven in deze lijst.',
'lag-warn-high' => 'Door een hoge database-servertoevoer zijn wijzigingen nieuwer dan $1 {{PLURAL:$1|seconde|seconden}} mogelijk niet beschikbaar in de lijst.',

# Watchlist editor
'watchlistedit-numitems' => 'Uw volglijst bevat {{PLURAL:$1|1 pagina|$1 pagina’s}}, zonder overlegpagina’s.',
'watchlistedit-noitems' => 'Uw volglijst bevat geen pagina’s.',
'watchlistedit-normal-title' => 'Volglijst bewerken',
'watchlistedit-normal-legend' => 'Pagina’s van uw volglijst verwijderen',
'watchlistedit-normal-explain' => 'Hieronder worden de pagina’s op uw volglijst weergegeven.
Klik op het vinkvakje ernaast en daarna op "{{int:Watchlistedit-normal-submit}}" om een pagina te verwijderen.
U kunt ook de [[Special:EditWatchlist/raw|ruwe lijst bewerken]].',
'watchlistedit-normal-submit' => "Pagina's verwijderen",
'watchlistedit-normal-done' => 'Er {{PLURAL:$1|is 1 pagina|zijn $1 pagina’s}} verwijderd van uw volglijst:',
'watchlistedit-raw-title' => 'Ruwe volglijst bewerken',
'watchlistedit-raw-legend' => 'Ruwe volglijst bewerken',
'watchlistedit-raw-explain' => 'Hieronder staan pagina’s op uw volglijst.
U kunt de lijst bewerken door pagina’s te verwijderen en toe te voegen.
Eén pagina per regel.
Als u klaar bent, klik dan op "{{int:Watchlistedit-raw-submit}}".
U kunt ook [[Special:EditWatchlist|het standaard bewerkingsscherm gebruiken]].',
'watchlistedit-raw-titles' => 'Pagina’s:',
'watchlistedit-raw-submit' => 'Volglijst bijwerken',
'watchlistedit-raw-done' => 'Uw volglijst is bijgewerkt.',
'watchlistedit-raw-added' => 'Er {{PLURAL:$1|is 1 pagina|zijn $1 pagina’s}} toegevoegd:',
'watchlistedit-raw-removed' => 'Er {{PLURAL:$1|is 1 pagina|zijn $1 pagina’s}} verwijderd:',

# Watchlist editing tools
'watchlisttools-view' => 'Relevante wijzigingen bekijken',
'watchlisttools-edit' => 'Volglijst bekijken en bewerken',
'watchlisttools-raw' => 'Ruwe volglijst bewerken',

# Iranian month names
'iranian-calendar-m1' => 'Eerste Perzische maand',
'iranian-calendar-m2' => 'Tweede Perzische maand',
'iranian-calendar-m3' => 'Derde Perzische maand',
'iranian-calendar-m4' => 'Vierde Perzische maand',
'iranian-calendar-m5' => 'Vijfde Perzische maand',
'iranian-calendar-m6' => 'Zesde Perzische maand',
'iranian-calendar-m7' => 'Zevende Perzische maand',
'iranian-calendar-m8' => 'Achtste Perzische maand',
'iranian-calendar-m9' => 'Negende Perzische maand',
'iranian-calendar-m10' => 'Tiende Perzische maand',
'iranian-calendar-m11' => 'Elfde Perzische maand',
'iranian-calendar-m12' => 'Twaalfde Perzische maand',

# Signatures
'signature' => '[[{{ns:user}}:$1|$2]] ([[{{ns:user_talk}}:$1|overleg]])',

# Core parser functions
'unknown_extension_tag' => 'Onbekende tag "$1"',
'duplicate-defaultsort' => '\'\'\'Waarschuwing:\'\'\' de standaardsortering "$2" krijgt voorrang voor de sortering "$1".',

# Special:Version
'version' => 'Versie',
'version-extensions' => 'Geïnstalleerde uitbreidingen',
'version-specialpages' => "Speciale pagina's",
'version-parserhooks' => 'Parserhooks',
'version-variables' => 'Variabelen',
'version-antispam' => 'Spampreventie',
'version-skins' => 'Vormgevingen',
'version-other' => 'Overige',
'version-mediahandlers' => 'Mediaverwerkers',
'version-hooks' => 'Hooks',
'version-extension-functions' => 'Uitbreidingsfuncties',
'version-parser-extensiontags' => 'Parseruitbreidingstags',
'version-parser-function-hooks' => 'Parserfunctiehooks',
'version-hook-name' => 'Hooknaam',
'version-hook-subscribedby' => 'Geabonneerd door',
'version-version' => '(Versie $1)',
'version-license' => 'Licentie',
'version-poweredby-credits' => "Deze wiki wordt aangedreven door '''[//www.mediawiki.org/ MediaWiki]''', copyright © 2001-$1 $2.",
'version-poweredby-others' => 'anderen',
'version-credits-summary' => 'We zouden graag de volgende personen erkennen voor hun bijdrage aan [[Special:Version|MediaWiki]].',
'version-license-info' => 'MediaWiki is vrije software; u kunt MediaWiki verspreiden en/of aanpassen onder de voorwaarden van de GNU General Public License zoals gepubliceerd door de Free Software Foundation; ofwel versie 2 van de Licentie, of - naar uw wens - enige latere versie.

MediaWiki wordt verspreid in de hoop dat het nuttig is, maar ZONDER ENIGE GARANTIE; zonder zelfs de impliciete garantie van VERKOOPBAARHEID of GESCHIKTHEID VOOR ENIG DOEL IN HET BIJZONDER. Zie de GNU General Public License voor meer informatie.

Samen met dit programma hoort u een [{{SERVER}}{{SCRIPTPATH}}/COPYING kopie van de GNU General Public License] te hebben ontvangen; zo niet, schrijf dan naar de Free Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA of [//www.gnu.org/licenses/old-licenses/gpl-2.0.html lees de licentie online].',
'version-software' => 'Geïnstalleerde software',
'version-software-product' => 'Product',
'version-software-version' => 'Versie',
'version-entrypoints' => "URL's voor ingangen",
'version-entrypoints-header-entrypoint' => 'Ingang',
'version-entrypoints-header-url' => 'URL',
'version-entrypoints-articlepath' => '[https://www.mediawiki.org/wiki/Manual:$wgArticlePath Article path]',
'version-entrypoints-scriptpath' => '[https://www.mediawiki.org/wiki/Manual:$wgScriptPath Script path]',

# Special:FilePath
'filepath' => 'Bestandslocatie',
'filepath-page' => 'Bestand:',
'filepath-submit' => 'OK',
'filepath-summary' => 'Deze speciale pagina geeft het volledige pad voor een bestand.
Afbeeldingen worden in hun volledige resolutie weergegeven.
Andere bestandstypen worden direct in het met het MIME-type verbonden programma geopend.',

# Special:FileDuplicateSearch
'fileduplicatesearch' => 'Duplicaatbestanden zoeken',
'fileduplicatesearch-summary' => 'Duplicaatbestanden zoeken op basis van de hashwaarde.',
'fileduplicatesearch-legend' => 'Duplicaatbestanden zoeken',
'fileduplicatesearch-filename' => 'Bestandsnaam:',
'fileduplicatesearch-submit' => 'Zoeken',
'fileduplicatesearch-info' => '$1 × $2 pixels<br />Bestandsgrootte: $3<br />MIME-type: $4',
'fileduplicatesearch-result-1' => 'Het bestand "$1" heeft geen duplicaten.',
'fileduplicatesearch-result-n' => 'Het bestand "$1" heeft {{PLURAL:$2|één duplicaat|$2 duplicaten}}.',
'fileduplicatesearch-noresults' => 'Er is geen bestand met de naam "$1" gevonden.',

# Special:SpecialPages
'specialpages' => "Speciale pagina's",
'specialpages-note' => '----
* Normale speciale pagina\'s
* <strong class="mw-specialpagerestricted">Beperkt toegankelijke speciale pagina\'s</strong>
* <span class="mw-specialpagecached">Speciale pagina\'s met alleen gegevens uit de cache (mogelijk verouderd)</span>',
'specialpages-group-maintenance' => 'Onderhoudsrapporten',
'specialpages-group-other' => "Overige speciale pagina's",
'specialpages-group-login' => 'Aanmelden / registreren',
'specialpages-group-changes' => 'Recente wijzigingen en logboeken',
'specialpages-group-media' => 'Mediaoverzichten en uploads',
'specialpages-group-users' => 'Gebruikers en rechten',
'specialpages-group-highuse' => "Veelgebruikte pagina's",
'specialpages-group-pages' => 'Paginalijsten',
'specialpages-group-pagetools' => 'Paginahulpmiddelen',
'specialpages-group-wiki' => 'Wikigegevens en -hulpmiddelen',
'specialpages-group-redirects' => "Doorverwijzende speciale pagina's",
'specialpages-group-spam' => 'Spamhulpmiddelen',

# Special:BlankPage
'blankpage' => 'Lege pagina',
'intentionallyblankpage' => 'Deze pagina is bewust leeg gelaten en wordt gebruikt voor benchmarks, enzovoort.',

# External image whitelist
'external_image_whitelist' => ' #Laat deze regel onveranderd<pre>
#Zet hieronder reguliere expressiefragmenten (alleen het deel dat tussen de // staat)
#Deze worden gehouden tegen de URL\'s van externe (gehotlinkte) afbeeldingen
#Als de reguliere expressie van toegang is, wordt een afbeelding weergegeven, anders wordt alleen een verwijzing weergegeven
#Regels die beginnen met "#" worden als opmerking behandeld
#Regels in de witte lijst zijn niet hoofdlettergevoelig.

#Zet alle reguliere expressiefragmenten boven deze regel. Laat deze regel onveranderd</pre>',

# Special:Tags
'tags' => 'Geldige wijzigingslabels',
'tag-filter' => '[[Special:Tags|Labelfilter]]:',
'tag-filter-submit' => 'Filteren',
'tags-title' => 'Labels',
'tags-intro' => 'Op deze pagina staan de labels waarmee de software iedere bewerking kan markeren, en hun betekenis.',
'tags-tag' => 'Labelnaam',
'tags-display-header' => 'Weergave in wijzigingslijsten',
'tags-description-header' => 'Volledige beschrijving van betekenis',
'tags-hitcount-header' => 'Gelabelde bewerkingen',
'tags-edit' => 'bewerken',
'tags-hitcount' => '$1 {{PLURAL:$1|wijziging|wijzigingen}}',

# Special:ComparePages
'comparepages' => "Pagina's vergelijken",
'compare-selector' => 'Paginaversies vergelijken',
'compare-page1' => 'Pagina 1',
'compare-page2' => 'Pagina 2',
'compare-rev1' => 'Versie 1',
'compare-rev2' => 'Versie 2',
'compare-submit' => 'Vergelijken',
'compare-invalid-title' => 'De titel die u hebt opgegeven is ongeldig.',
'compare-title-not-exists' => 'De titel die u hebt opgegeven bestaat niet.',
'compare-revision-not-exists' => 'De versie die u hebt opgegeven bestaat niet.',

# Database error messages
'dberr-header' => 'Deze wiki heeft een probleem',
'dberr-problems' => 'Onze excuses. Deze site ondervindt op het moment technische problemen.',
'dberr-again' => 'Wacht een aantal minuten en probeer het daarna opnieuw.',
'dberr-info' => '(Kan geen verbinding maken met de databaseserver: $1)',
'dberr-usegoogle' => 'Wellicht kunt u in de tussentijd zoeken via Google.',
'dberr-outofdate' => "Let op: hun indexen van onze pagina's zijn wellicht niet recent.",
'dberr-cachederror' => 'Deze pagina is een kopie uit de cache en is wellicht niet de meest recente versie.',

# HTML forms
'htmlform-invalid-input' => 'Er zijn problemen met enkele ingegeven waarden',
'htmlform-select-badoption' => 'De ingegeven waarde is ongeldig.',
'htmlform-int-invalid' => 'De ingegeven waarde is geen geheel getal.',
'htmlform-float-invalid' => 'De waarde die u hebt opgegeven is geen getal.',
'htmlform-int-toolow' => 'De ingegeven waarde ligt onder de minimumwaarde van $1',
'htmlform-int-toohigh' => 'De ingegeven waarde ligt boven de maximumwaarde van $1',
'htmlform-required' => 'Deze waarde is verplicht',
'htmlform-submit' => 'Opslaan',
'htmlform-reset' => 'Wijzigingen ongedaan maken',
'htmlform-selectorother-other' => 'Anders',

# SQLite database support
'sqlite-has-fts' => 'Versie $1 met ondersteuning voor "full-text" zoeken',
'sqlite-no-fts' => 'Versie $1 zonder ondersteuning voor "full-text" zoeken',

# New logging system
'logentry-delete-delete' => '$1 heeft de pagina $3 verwijderd',
'logentry-delete-restore' => '$1 heeft de pagina $3 teruggeplaatst',
'logentry-delete-event' => '$1 heeft de zichtbaarheid van {{PLURAL:$5|een logboekregel|$5 logboekregels}} van $3 gewijzigd: $4',
'logentry-delete-revision' => '$1 heeft de zichtbaarheid van {{PLURAL:$5|een versie|$5 versies}} van de pagina $3 gewijzigd: $4',
'logentry-delete-event-legacy' => '$1 heeft de zichtbaarheid van logboekregels van $3 gewijzigd',
'logentry-delete-revision-legacy' => '$1 heeft de zichtbaarheid van versies van de pagina $3 gewijzigd',
'logentry-suppress-delete' => '$1 heeft de pagina $3 onderdrukt',
'logentry-suppress-event' => '$1 heeft heimelijk de zichtbaarheid van {{PLURAL:$5|een logboekregel|$5 logboekregels}} van $3 gewijzigd: $4',
'logentry-suppress-revision' => '$1 heeft heimelijk de zichtbaarheid van {{PLURAL:$5|een versie|$5 versies}} van de pagina $3 gewijzigd: $4',
'logentry-suppress-event-legacy' => '$1 heeft heimelijk de zichtbaarheid van logboekregels van $3 gewijzigd',
'logentry-suppress-revision-legacy' => '$1 heeft heimelijk de zichtbaarheid van versies van de pagina $3 gewijzigd.',
'revdelete-content-hid' => 'inhoud verborgen',
'revdelete-summary-hid' => 'bewerkingssamenvatting verborgen',
'revdelete-uname-hid' => 'gebruikersnaam verborgen',
'revdelete-content-unhid' => 'inhoud zichtbaar gemaakt',
'revdelete-summary-unhid' => 'bewerkingssamenvatting zichtbaar gemaakt',
'revdelete-uname-unhid' => 'gebruikersnaam zichtbaar gemaakt',
'revdelete-restricted' => 'heeft beperkingen aan beheerders opgelegd',
'revdelete-unrestricted' => 'heeft beperkingen voor beheerders opgeheven',
'logentry-move-move' => '$1 heeft pagina $3 naar $4 hernoemd',
'logentry-move-move-noredirect' => '$1 heeft de pagina $3 hernoemd naar $4 zonder een doorverwijzing achter te laten',
'logentry-move-move_redir' => '$1 heeft pagina $3 hernoemd naar $4 over een doorverwijzing',
'logentry-move-move_redir-noredirect' => '$1 heeft pagina $3 naar $4 hernoemd over een doorverwijzing zonder een doorverwijzing achter te laten',
'logentry-patrol-patrol' => '$1 heeft versie $4 van pagina $3 als gecontroleerd gemarkeerd',
'logentry-patrol-patrol-auto' => '$1 heeft versie $4 van pagina $3 automatisch als gecontroleerd gemarkeerd',
'logentry-newusers-newusers' => '$1 heeft een gebruiker aangemaakt',
'logentry-newusers-create' => '$1 is als gebruiker aangemaakt',
'logentry-newusers-create2' => '$1 heeft een gebruiker $3 aangemaakt',
'logentry-newusers-autocreate' => 'De gebruiker $1 is automatisch aangemaakt',
'newuserlog-byemail' => 'wachtwoord is verzonden per e-mail',

# Feedback
'feedback-bugornote' => 'Als u zover bent om een technisch probleem in detail te beschrijven, [$1 rapporteer dan een bug].
Anders kunt u ook het eenvoudige formulier hieronder gebruiken. Uw reactie wordt dan toegevoegd aan de pagina "[$3 $2]", samen met uw gebruikersnaam en de browser die u gebruikt.',
'feedback-subject' => 'Onderwerp:',
'feedback-message' => 'Bericht:',
'feedback-cancel' => 'Annuleren',
'feedback-submit' => 'Terugkoppeling opslaan',
'feedback-adding' => 'Uw terugkoppeling wordt aan de pagina toegevoegd...',
'feedback-error1' => 'Fout: onbekend resultaat uit de API',
'feedback-error2' => 'Fout: de bewerking is mislukt',
'feedback-error3' => 'Fout: geen reactie van de API',
'feedback-thanks' => 'Bedankt! Uw terugkoppeling is op de pagina "[$2 $1]" geplaatst.',
'feedback-close' => 'Afgerond',
'feedback-bugcheck' => 'Geweldig! Controleer even of het niet al één van de [$1 bekende problemen] is.',
'feedback-bugnew' => 'Heb ik gecontroleerd; nieuw probleem melden',

# Search suggestions
'searchsuggest-search' => 'Zoeken',
'searchsuggest-containing' => 'bevat...',

# API errors
'api-error-badaccess-groups' => 'U mag geen bestanden uploaden in deze wiki.',
'api-error-badtoken' => 'Interne fout: het token klopt niet.',
'api-error-copyuploaddisabled' => 'Uploaden via URL is uitgeschakeld op deze server.',
'api-error-duplicate' => 'Er {{PLURAL:$1|staat al [$2 een bestand]|staan al [$2 bestanden]}} met dezelfde inhoud in de wiki.',
'api-error-duplicate-archive' => 'Er {{PLURAL:$1|was al [$2 een ander bestand]|waren al [$2 $1 andere bestanden]}}  op de site met dezelfde inhoud, maar {{PLURAL:$1|dat is|die zijn}} verwijderd.',
'api-error-duplicate-archive-popup-title' => '{{PLURAL:$1|Duplicaatbestand dat al verwijderd is|Duplicaatbestanden die al verwijderd zijn}}',
'api-error-duplicate-popup-title' => 'Zelfde {{PLURAL:$1|bestand|bestanden}}',
'api-error-empty-file' => 'Het bestand dat u hebt geüpload is leeg.',
'api-error-emptypage' => "Het aanmaken van nieuwe, lege pagina's is niet toegestaan.",
'api-error-fetchfileerror' => 'Interne fout: er is iets misgegaan bij het ophalen van het bestand.',
'api-error-fileexists-forbidden' => 'Er bestaat al een bestand met de naam "$1" dat niet overschreven kan worden.',
'api-error-fileexists-shared-forbidden' => 'Er bestaat al een bestand met de naam "$1" in de gedeelde repository dat niet overschreven kan worden.',
'api-error-file-too-large' => 'Het bestand dat u hebt geüpload is te groot.',
'api-error-filename-tooshort' => 'De bestandsnaam is te kort.',
'api-error-filetype-banned' => 'Dit bestandstype mag niet geüpload worden.',
'api-error-filetype-banned-type' => '{{PLURAL:$4|Het bestandstype $1 wordt|De bestandstypes $1 worden}} niet toegelaten. {{PLURAL:$3|Het toegelaten bestandstype is|De toegelaten bestandstypes zijn}} $2.',
'api-error-filetype-missing' => 'Het bestand heeft geen extensie.',
'api-error-hookaborted' => 'De wijziging die u probeert te maken is afgebroken door een uitbreiding.',
'api-error-http' => 'Interne fout: er kon geen verbinding gemaakt worden met de server.',
'api-error-illegal-filename' => 'Deze bestandsnaam is niet toegestaan.',
'api-error-internal-error' => 'Interne fout: er is iets misgegaan tijdens het verwerken van uw upload door de wiki.',
'api-error-invalid-file-key' => 'Interne fout: het bestand is niet aangetroffen in de tijdelijke opslag.',
'api-error-missingparam' => 'Interne fout: niet alle parameters zijn in het verzoek meegeleverd.',
'api-error-missingresult' => 'Interne fout: het was niet mogelijk vast te stellen of het kopiëren is geslaagd.',
'api-error-mustbeloggedin' => 'U moet aangemeld zijn om bestanden te kunnen uploaden.',
'api-error-mustbeposted' => 'Er zit een fout in de software. Er wordt geen gebruik gemaakt van de juiste HTTP-methode.',
'api-error-noimageinfo' => 'De upload is afgerond, maar de server heeft geen gegevens over het bestand verstrekt.',
'api-error-nomodule' => 'Interne fout: er is geen uploadmodule ingesteld.',
'api-error-ok-but-empty' => 'Interne fout: de server heeft geen gegevens teruggeleverd.',
'api-error-overwrite' => 'Het overschrijven van een bestand bestand is niet toegestaan.',
'api-error-stashfailed' => 'Interne fout: de server kon het tijdelijke bestand niet opslaan.',
'api-error-timeout' => 'De server heeft niet binnen de verwachte tijd geantwoord.',
'api-error-unclassified' => 'Er is een onbekende fout opgetreden',
'api-error-unknown-code' => 'Interne fout: "$1"',
'api-error-unknown-error' => 'Interne fout: er is iets misgegaan tijdens het uploaden van uw bestand.',
'api-error-unknown-warning' => 'Onbekende waarschuwing: $1',
'api-error-unknownerror' => 'Onbekende fout: "$1"',
'api-error-uploaddisabled' => 'Uploaden is niet mogelijk in deze wiki.',
'api-error-verification-error' => 'Dit bestand is mogelijk beschadigd of heeft een onjuiste extensie.',

# Durations
'duration-seconds' => '$1 {{PLURAL:$1|seconde|seconden}}',
'duration-minutes' => '$1 {{PLURAL:$1|minuut|minuten}}',
'duration-hours' => '$1 {{PLURAL:$1|uur|uren}}',
'duration-days' => '$1 {{PLURAL:$1|dag|dagen}}',
'duration-weeks' => '$1 {{PLURAL:$1|week|weken}}',
'duration-years' => '$1 {{PLURAL:$1|jaar|jaar}}',
'duration-decades' => '$1 {{PLURAL:$1|decennium|decennia}}',
'duration-centuries' => '$1 {{PLURAL:$1|eeuw|eeuwen}}',
'duration-millennia' => '$1 {{PLURAL:$1|millennium|millennia}}',

);
