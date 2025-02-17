<?php
/** Catalan (català)
 *
 * See MessagesQqq.php for message documentation incl. usage of parameters
 * To improve a translation please visit http://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Aleator
 * @author Arnaugir
 * @author Avm99963
 * @author BroOk
 * @author Cedric31
 * @author Davidpar
 * @author El libre
 * @author Gemmaa
 * @author Grondin
 * @author Iradigalesc
 * @author Jordi Roqué
 * @author Juanpabl
 * @author Kaganer
 * @author Martorell
 * @author McDutchie
 * @author Pasqual (ca)
 * @author Paucabot
 * @author PerroVerd
 * @author Pérez
 * @author Qllach
 * @author SMP
 * @author Smeira
 * @author Solde
 * @author Spacebirdy
 * @author Ssola
 * @author Toniher
 * @author Vriullop
 * @author לערי ריינהארט
 */

$namespaceNames = array(
	NS_MEDIA            => 'Media',
	NS_SPECIAL          => 'Especial',
	NS_TALK             => 'Discussió',
	NS_USER             => 'Usuari',
	NS_USER_TALK        => 'Usuari_Discussió',
	NS_PROJECT_TALK     => '$1_Discussió',
	NS_FILE             => 'Fitxer',
	NS_FILE_TALK        => 'Fitxer_Discussió',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'MediaWiki_Discussió',
	NS_TEMPLATE         => 'Plantilla',
	NS_TEMPLATE_TALK    => 'Plantilla_Discussió',
	NS_HELP             => 'Ajuda',
	NS_HELP_TALK        => 'Ajuda_Discussió',
	NS_CATEGORY         => 'Categoria',
	NS_CATEGORY_TALK    => 'Categoria_Discussió',
);

$namespaceAliases = array(
	'Imatge' => NS_FILE,
	'Imatge_Discussió' => NS_FILE_TALK,
);

$specialPageAliases = array(
	'Activeusers'               => array( 'Usuaris_actius' ),
	'Allmessages'               => array( 'Missatges', 'MediaWiki' ),
	'Allpages'                  => array( 'Llista_de_pàgines' ),
	'Ancientpages'              => array( 'Pàgines_velles' ),
	'Badtitle'                  => array( 'Títol_incorrecte' ),
	'Blankpage'                 => array( 'Pàgina_en_blanc', 'Blanc' ),
	'Block'                     => array( 'Bloca' ),
	'Blockme'                   => array( 'Bloca\'m' ),
	'Booksources'               => array( 'Fonts_bibliogràfiques' ),
	'BrokenRedirects'           => array( 'Redireccions_rompudes' ),
	'ChangeEmail'               => array( 'Canvia_adreça_electrònica' ),
	'ChangePassword'            => array( 'Reinicia_contrasenya' ),
	'Confirmemail'              => array( 'Confirma_adreça' ),
	'Contributions'             => array( 'Contribucions' ),
	'CreateAccount'             => array( 'Crea_compte' ),
	'Deadendpages'              => array( 'Atzucacs' ),
	'DeletedContributions'      => array( 'Contribucions_esborrades' ),
	'Disambiguations'           => array( 'Desambiguacions' ),
	'DoubleRedirects'           => array( 'Redireccions_dobles' ),
	'Emailuser'                 => array( 'Envia_missatge' ),
	'Export'                    => array( 'Exporta' ),
	'Fewestrevisions'           => array( 'Pàgines_menys_editades' ),
	'FileDuplicateSearch'       => array( 'Cerca_fitxers_duplicats' ),
	'Import'                    => array( 'Importa' ),
	'BlockList'                 => array( 'Usuaris_blocats' ),
	'LinkSearch'                => array( 'Enllaços_web', 'Busca_enllaços', 'Recerca_d\'enllaços_web' ),
	'Listadmins'                => array( 'Administradors' ),
	'Listbots'                  => array( 'Bots' ),
	'Listfiles'                 => array( 'Imatges' ),
	'Listgrouprights'           => array( 'Drets_dels_grups_d\'usuaris' ),
	'Listredirects'             => array( 'Redireccions' ),
	'Listusers'                 => array( 'Usuaris' ),
	'Lockdb'                    => array( 'Bloca_bd' ),
	'Log'                       => array( 'Registre' ),
	'Lonelypages'               => array( 'Pàgines_òrfenes' ),
	'Longpages'                 => array( 'Pàgines_llargues' ),
	'MergeHistory'              => array( 'Fusiona_historial' ),
	'MIMEsearch'                => array( 'Cerca_MIME' ),
	'Mostcategories'            => array( 'Pàgines_amb_més_categories' ),
	'Mostimages'                => array( 'Imatges_més_útils' ),
	'Mostlinked'                => array( 'Pàgines_més_enllaçades' ),
	'Mostlinkedcategories'      => array( 'Categories_més_útils' ),
	'Mostlinkedtemplates'       => array( 'Plantilles_més_útils' ),
	'Mostrevisions'             => array( 'Pàgines_més_editades' ),
	'Movepage'                  => array( 'Reanomena' ),
	'Mycontributions'           => array( 'Contribucions_pròpies' ),
	'Mypage'                    => array( 'Pàgina_personal' ),
	'Mytalk'                    => array( 'Discussió_personal' ),
	'Newimages'                 => array( 'Imatges_noves' ),
	'Newpages'                  => array( 'Pàgines_noves' ),
	'Popularpages'              => array( 'Pàgines_populars' ),
	'Preferences'               => array( 'Preferències' ),
	'Prefixindex'               => array( 'Cerca_per_prefix' ),
	'Protectedpages'            => array( 'Pàgines_protegides' ),
	'Protectedtitles'           => array( 'Títols_protegits' ),
	'Randompage'                => array( 'Article_aleatori', 'Atzar', 'Aleatori' ),
	'Randomredirect'            => array( 'Redirecció_aleatòria' ),
	'Recentchanges'             => array( 'Canvis_recents' ),
	'Recentchangeslinked'       => array( 'Seguiment' ),
	'Revisiondelete'            => array( 'Esborra_versió' ),
	'Search'                    => array( 'Cerca' ),
	'Shortpages'                => array( 'Pàgines_curtes' ),
	'Specialpages'              => array( 'Pàgines_especials' ),
	'Statistics'                => array( 'Estadístiques' ),
	'Unblock'                   => array( 'Desbloca', 'Desbloqueja' ),
	'Uncategorizedcategories'   => array( 'Categories_sense_categoria' ),
	'Uncategorizedimages'       => array( 'Imatges_sense_categoria' ),
	'Uncategorizedpages'        => array( 'Pàgines_sense_categoria' ),
	'Uncategorizedtemplates'    => array( 'Plantilles_sense_categoria' ),
	'Undelete'                  => array( 'Restaura' ),
	'Unlockdb'                  => array( 'Desbloca_bd' ),
	'Unusedcategories'          => array( 'Categories_no_usades' ),
	'Unusedimages'              => array( 'Imatges_no_usades' ),
	'Unusedtemplates'           => array( 'Plantilles_no_usades' ),
	'Unwatchedpages'            => array( 'Pàgines_desateses' ),
	'Upload'                    => array( 'Carrega' ),
	'Userlogin'                 => array( 'Registre_i_entrada' ),
	'Userlogout'                => array( 'Finalitza_sessió' ),
	'Userrights'                => array( 'Drets' ),
	'Version'                   => array( 'Versió' ),
	'Wantedcategories'          => array( 'Categories_demanades' ),
	'Wantedfiles'               => array( 'Arxius_demanats' ),
	'Wantedpages'               => array( 'Pàgines_demanades' ),
	'Wantedtemplates'           => array( 'Plantilles_demanades' ),
	'Watchlist'                 => array( 'Llista_de_seguiment' ),
	'Whatlinkshere'             => array( 'Enllaços' ),
	'Withoutinterwiki'          => array( 'Sense_interwiki' ),
);

$magicWords = array(
	'numberofarticles'          => array( '1', 'NOMBRED\'ARTICLES', 'NUMBEROFARTICLES' ),
	'numberoffiles'             => array( '1', 'NOMBRED\'ARXIUS', 'NUMBEROFFILES' ),
	'numberofusers'             => array( '1', 'NOMBRED\'USUARIS', 'NUMBEROFUSERS' ),
	'numberofedits'             => array( '1', 'NOMBRED\'EDICIONS', 'NUMBEROFEDITS' ),
	'pagename'                  => array( '1', 'NOMDELAPLANA', 'PAGENAME' ),
	'img_right'                 => array( '1', 'dreta', 'right' ),
	'img_left'                  => array( '1', 'esquerra', 'left' ),
	'img_border'                => array( '1', 'vora', 'border' ),
	'img_link'                  => array( '1', 'enllaç=$1', 'link=$1' ),
	'displaytitle'              => array( '1', 'TÍTOL', 'DISPLAYTITLE' ),
	'language'                  => array( '0', '#IDIOMA:', '#LANGUAGE:' ),
	'special'                   => array( '0', 'especial', 'special' ),
	'defaultsort'               => array( '1', 'ORDENA:', 'DEFAULTSORT:', 'DEFAULTSORTKEY:', 'DEFAULTCATEGORYSORT:' ),
	'pagesize'                  => array( '1', 'MIDADELAPLANA', 'PAGESIZE' ),
);

$separatorTransformTable = array( ',' => '.', '.' => ',' );

$dateFormats = array(
	'mdy time' => 'H:i',
	'mdy date' => 'M j, Y',
	'mdy both' => 'H:i, M j, Y',

	'dmy time' => 'H:i',
	'dmy date' => 'j M Y',
	'dmy both' => 'H:i, j M Y',

	'ymd time' => 'H:i',
	'ymd date' => 'Y M j',
	'ymd both' => 'H:i, Y M j',
);

$bookstoreList = array(
	'Catàleg Col·lectiu de les Universitats de Catalunya' => 'http://ccuc.cbuc.es/cgi-bin/vtls.web.gateway?searchtype=control+numcard&searcharg=$1',
	'Totselsllibres.com' => 'http://www.totselsllibres.com/tel/publi/busquedaAvanzadaLibros.do?ISBN=$1',
	'inherit' => true,
);

$linkTrail = "/^((?:[a-zàèéíòóúç·ïü]|'(?!'))+)(.*)$/sDu";

$messages = array(
# User preference toggles
'tog-underline' => 'Subratlla els enllaços:',
'tog-justify' => 'Alineació justificada dels paràgrafs',
'tog-hideminor' => 'Amaga les edicions menors en la pàgina de canvis recents',
'tog-hidepatrolled' => 'Amaga edicions patrullades als canvis recents',
'tog-newpageshidepatrolled' => 'Amaga pàgines patrullades de la llista de pàgines noves',
'tog-extendwatchlist' => 'Desplega la llista de seguiment per a mostrar tots els canvis afectats, no només els més recents',
'tog-usenewrc' => 'Utilitza una presentació millorada dels canvis recents (cal JavaScript)',
'tog-numberheadings' => 'Enumera automàticament els encapçalaments',
'tog-showtoolbar' => "Mostra la barra d'eines d'edició (cal JavaScript)",
'tog-editondblclick' => 'Edita les pàgines amb un doble clic (cal JavaScript)',
'tog-editsection' => 'Activa la modificació de seccions mitjançant els enllaços [modifica]',
'tog-editsectiononrightclick' => "Habilita l'edició per seccions en clicar amb el botó dret sobre els títols de les seccions (cal JavaScript)",
'tog-showtoc' => 'Mostra la taula de continguts (per pàgines amb més de 3 seccions)',
'tog-rememberpassword' => 'Recorda la sessió al navegador (per un màxim de {{PLURAL:$1|dia|dies}})',
'tog-watchcreations' => 'Afegeix les pàgines que vagi creant a la llista de seguiment',
'tog-watchdefault' => 'Afegeix les pàgines que vagi creant a la llista de seguiment',
'tog-watchmoves' => 'Afegeix les pàgines que reanomeni a la llista de seguiment',
'tog-watchdeletion' => 'Afegeix les pàgines que elimini a la llista de seguiment',
'tog-minordefault' => 'Marca totes les contribucions com a edicions menors per defecte',
'tog-previewontop' => "Mostra una previsualització abans del quadre d'edició",
'tog-previewonfirst' => 'Mostra una previsualització en la primera modificació',
'tog-nocache' => 'Inhabilita la memòria cau de les pàgines',
'tog-enotifwatchlistpages' => "Envia'm un correu electrònic quan es modifiqui una pàgina de la meva llista de seguiment",
'tog-enotifusertalkpages' => "Envia'm un correu electrònic quan es modifiqui la meva pàgina de discussió",
'tog-enotifminoredits' => "Notifica'm per correu també en casos d'edicions menors",
'tog-enotifrevealaddr' => "Mostra la meua adreça electrònica en els missatges d'avís per correu",
'tog-shownumberswatching' => "Mostra el nombre d'usuaris que hi vigilen",
'tog-oldsig' => 'Signatura actual:',
'tog-fancysig' => 'Tractar la signatura com a text wiki (sense enllaç automàtic)',
'tog-externaleditor' => "Utilitza per defecte un editor extern (opció per a experts, requereix la configuració adient de l'ordinador, [//www.mediawiki.org/wiki/Manual:External_editors consulteu-ho al manual])",
'tog-externaldiff' => "Utilitza per defecte un altre visualitzador de diferències (opció per a experts, requereix la configuració adient de l'ordinador, [//www.mediawiki.org/wiki/Manual:External_editors consulteu-ho al manual])",
'tog-showjumplinks' => "Habilita els enllaços de dreceres d'accessibilitat",
'tog-uselivepreview' => 'Utilitza la previsualització automàtica (cal JavaScript) (experimental)',
'tog-forceeditsummary' => "Avisa'm en introduir un camp de resum en blanc",
'tog-watchlisthideown' => 'Amaga les meues edicions de la llista de seguiment',
'tog-watchlisthidebots' => 'Amaga de la llista de seguiment les edicions fetes per usuaris bots',
'tog-watchlisthideminor' => 'Amaga les edicions menors de la llista de seguiment',
'tog-watchlisthideliu' => "Amaga a la llista les edicions d'usuaris registrats",
'tog-watchlisthideanons' => "Amaga a la llista les edicions d'usuaris anònims",
'tog-watchlisthidepatrolled' => 'Amaga edicions patrullades de la llista de seguiment',
'tog-ccmeonemails' => "Envia'm còpia dels missatges que enviï als altres usuaris",
'tog-diffonly' => 'Amaga el contingut de la pàgina davall de la taula de diferències',
'tog-showhiddencats' => 'Mostra les categories ocultes',
'tog-noconvertlink' => 'Inhabilita la conversió dels títols dels enllaços',
'tog-norollbackdiff' => 'Omet la pàgina de diferències després de realitzar una reversió',

'underline-always' => 'Sempre',
'underline-never' => 'Mai',
'underline-default' => 'Per defecte del navegador',

# Font style option in Special:Preferences
'editfont-style' => "Editeu l'estil de la lletra:",
'editfont-default' => 'Per defecte del navegador',
'editfont-monospace' => 'Font monoespaiada',
'editfont-sansserif' => 'Font de pal sec',
'editfont-serif' => 'Lletra amb gràcia',

# Dates
'sunday' => 'diumenge',
'monday' => 'dilluns',
'tuesday' => 'dimarts',
'wednesday' => 'dimecres',
'thursday' => 'dijous',
'friday' => 'divendres',
'saturday' => 'dissabte',
'sun' => 'dg',
'mon' => 'dl',
'tue' => 'dt',
'wed' => 'dc',
'thu' => 'dj',
'fri' => 'dv',
'sat' => 'ds',
'january' => 'gener',
'february' => 'febrer',
'march' => 'març',
'april' => 'abril',
'may_long' => 'maig',
'june' => 'juny',
'july' => 'juliol',
'august' => 'agost',
'september' => 'setembre',
'october' => 'octubre',
'november' => 'novembre',
'december' => 'desembre',
'january-gen' => 'de gener',
'february-gen' => 'de febrer',
'march-gen' => 'de març',
'april-gen' => "d'abril",
'may-gen' => 'de maig',
'june-gen' => 'de juny',
'july-gen' => 'de juliol',
'august-gen' => "d'agost",
'september-gen' => 'de setembre',
'october-gen' => "d'octubre",
'november-gen' => 'de novembre',
'december-gen' => 'de desembre',
'jan' => 'gen',
'feb' => 'feb',
'mar' => 'març',
'apr' => 'abr',
'may' => 'maig',
'jun' => 'juny',
'jul' => 'jul',
'aug' => 'ago',
'sep' => 'set',
'oct' => 'oct',
'nov' => 'nov',
'dec' => 'des',

# Categories related messages
'pagecategories' => '{{PLURAL:$1|Categoria|Categories}}',
'category_header' => 'Pàgines a la categoria «$1»',
'subcategories' => 'Subcategories',
'category-media-header' => 'Contingut multimèdia en la categoria «$1»',
'category-empty' => "''Aquesta categoria no té cap pàgina ni fitxer.''",
'hidden-categories' => '{{PLURAL:$1|Categoria oculta|Categories ocultes}}',
'hidden-category-category' => 'Categories ocultes',
'category-subcat-count' => "{{PLURAL:$2|Aquesta categoria només té la següent subcategoria.|Aquesta categoria conté {{PLURAL:$1|la següent subcategoria|les següents $1 subcategories}}, d'un total de $2.}}",
'category-subcat-count-limited' => 'Aquesta categoria conté {{PLURAL:$1|la següent subcategoria|les següents $1 subcategories}}.',
'category-article-count' => "{{PLURAL:$2|Aquesta categoria només té la següent pàgina.|{{PLURAL:$1|La següent pàgina és|Les següents $1 pàgines són}} dins d'aquesta categoria, d'un total de $2.}}",
'category-article-count-limited' => '{{PLURAL:$1|La següent pàgina és|Les següents $1 pàgines són}} dins la categoria actual.',
'category-file-count' => "{{PLURAL:$2|Aquesta categoria només té el següent fitxer.|{{PLURAL:$1|El següent fitxer és|Els següents $1 fitxers són}} dins d'aquesta categoria, d'un total de $2.}}",
'category-file-count-limited' => '{{PLURAL:$1|El següent fitxer és|Els següents $1 fitxers són}} dins la categoria actual.',
'listingcontinuesabbrev' => ' cont.',
'index-category' => 'Pàgines indexades',
'noindex-category' => 'Pàgines no indexades',
'broken-file-category' => 'Pàgines amb enllaços a fitxer trencats',
'categoryviewer-pagedlinks' => '($1) ($2)',

'about' => 'Quant a',
'article' => 'Pàgina de contingut',
'newwindow' => '(obre en una nova finestra)',
'cancel' => 'Anuŀla',
'moredotdotdot' => 'Més...',
'mypage' => 'Pàgina personal',
'mytalk' => 'Discussió',
'anontalk' => "Discussió d'aquesta IP",
'navigation' => 'Navegació',
'and' => '&#32;i',

# Cologne Blue skin
'qbfind' => 'Cerca',
'qbbrowse' => 'Navega',
'qbedit' => 'Modifica',
'qbpageoptions' => 'Opcions de pàgina',
'qbmyoptions' => 'Pàgines pròpies',
'qbspecialpages' => 'Pàgines especials',
'faq' => 'PMF',
'faqpage' => 'Project:PMF',

# Vector skin
'vector-action-addsection' => 'Nova secció',
'vector-action-delete' => 'Esborra',
'vector-action-move' => 'Reanomena',
'vector-action-protect' => 'Protegeix',
'vector-action-undelete' => 'Restaura',
'vector-action-unprotect' => 'Desprotegeix',
'vector-simplesearch-preference' => 'Activar la barra de cerca simplificada (només aparença Vector)',
'vector-view-create' => 'Inicia',
'vector-view-edit' => 'Modifica',
'vector-view-history' => "Mostra l'historial",
'vector-view-view' => 'Mostra',
'vector-view-viewsource' => 'Mostra la font',
'actions' => 'Accions',
'namespaces' => 'Espais de noms',
'variants' => 'Variants',

'errorpagetitle' => 'Error',
'returnto' => 'Torna cap a $1.',
'tagline' => 'De {{SITENAME}}',
'help' => 'Ajuda',
'search' => 'Cerca',
'searchbutton' => 'Cerca',
'go' => 'Vés-hi',
'searcharticle' => 'Vés-hi',
'history' => 'Historial de canvis',
'history_short' => 'Historial',
'updatedmarker' => 'actualitzat des de la darrera visita',
'printableversion' => 'Versió per a impressora',
'permalink' => 'Enllaç permanent',
'print' => 'Imprimir',
'view' => 'Mostra',
'edit' => 'Modifica',
'create' => 'Crea',
'editthispage' => 'Modifica la pàgina',
'create-this-page' => 'Crea aquesta pàgina',
'delete' => 'Elimina',
'deletethispage' => 'Elimina la pàgina',
'undelete_short' => "Restaura {{PLURAL:$1|l'edició eliminada|$1 edicions eliminades}}",
'viewdeleted_short' => 'Mostra {{PLURAL:$1|una edició eliminada|$1 edicions eliminades}}',
'protect' => 'Protecció',
'protect_change' => 'canvia',
'protectthispage' => 'Protecció de la pàgina',
'unprotect' => 'Desprotecció',
'unprotectthispage' => 'Desprotegeix aquesta pàgina',
'newpage' => 'Pàgina nova',
'talkpage' => 'Discussió',
'talkpagelinktext' => 'Discussió',
'specialpage' => 'Pàgina especial',
'personaltools' => "Eines de l'usuari",
'postcomment' => 'Nova secció',
'articlepage' => 'Mostra la pàgina',
'talk' => 'Discussió',
'views' => 'Vistes',
'toolbox' => 'Eines',
'userpage' => "Visualitza la pàgina d'usuari",
'projectpage' => 'Visualitza la pàgina del projecte',
'imagepage' => 'Visualitza la pàgina del fitxer',
'mediawikipage' => 'Visualitza la pàgina de missatges',
'templatepage' => 'Visualitza la pàgina de plantilla',
'viewhelppage' => "Visualitza la pàgina d'ajuda",
'categorypage' => 'Visualitza la pàgina de la categoria',
'viewtalkpage' => 'Visualitza la pàgina de discussió',
'otherlanguages' => 'En altres llengües',
'redirectedfrom' => "(S'ha redirigit des de: $1)",
'redirectpagesub' => 'Pàgina de redirecció',
'lastmodifiedat' => 'Darrera modificació de la pàgina: $1 a les $2.',
'viewcount' => 'Aquesta pàgina ha estat visitada {{PLURAL:$1|una vegada|$1 vegades}}.',
'protectedpage' => 'Pàgina protegida',
'jumpto' => 'Dreceres ràpides:',
'jumptonavigation' => 'navegació',
'jumptosearch' => 'cerca',
'view-pool-error' => "Disculpeu, els servidors es troben sobrecarregats.
Massa usuaris estan tractant d'accedir a aquesta pàgina.
Per favor, esperau una mica abans de tornar a accedir a aquesta pàgina.

$1",
'pool-timeout' => "Temps d'espera per al blocatge",
'pool-queuefull' => 'La cua de treball és plena',
'pool-errorunknown' => 'Error desconegut',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage) and the disambiguation template definition (see disambiguations).
'aboutsite' => 'Quant al projecte {{SITENAME}}',
'aboutpage' => 'Project:Quant a',
'copyright' => 'El contingut està disponible sota els termes de la $1.',
'copyrightpage' => "{{ns:project}}:Drets d'autor",
'currentevents' => 'Actualitat',
'currentevents-url' => 'Project:Actualitat',
'disclaimers' => 'Avís general',
'disclaimerpage' => 'Project:Avís general',
'edithelp' => 'Ajuda',
'edithelppage' => "Help:Com s'edita una pàgina",
'helppage' => 'Help:Ajuda',
'mainpage' => 'Pàgina principal',
'mainpage-description' => 'Pàgina principal',
'policy-url' => 'Project:Polítiques',
'portal' => 'Portal comunitari',
'portal-url' => 'Project:Portal',
'privacy' => 'Política de privadesa',
'privacypage' => 'Project:Política de privadesa',

'badaccess' => 'Error de permisos',
'badaccess-group0' => "No teniu permís per a executar l'acció que heu soŀlicitat.",
'badaccess-groups' => "L'acció que heu soŀlicitat es limita als usuaris {{PLURAL:$2|del grup|dels grups}}: $1.",

'versionrequired' => 'Cal la versió $1 del MediaWiki',
'versionrequiredtext' => 'Cal la versió $1 del MediaWiki per a utilitzar aquesta pàgina. Vegeu [[Special:Version]]',

'ok' => 'OK',
'retrievedfrom' => 'Obtingut de «$1»',
'youhavenewmessages' => 'Tens $1 ($2).',
'newmessageslink' => 'nous missatges',
'newmessagesdifflink' => 'últims canvis',
'youhavenewmessagesfromusers' => "Tens $1 {{PLURAL:$3|d'un altre usuari|de $3 usuaris}} ($2).",
'youhavenewmessagesmanyusers' => 'Tens $1 de molts usuaris ($2).',
'newmessageslinkplural' => '{{PLURAL:$1|un nou missatge|nous missatges}}',
'newmessagesdifflinkplural' => '{{PLURAL:$1|darrer canvi|darrers canvis}}',
'youhavenewmessagesmulti' => 'Teniu nous missatges a $1',
'editsection' => 'modifica',
'editold' => 'modifica',
'viewsourceold' => 'mostra codi font',
'editlink' => 'modifica',
'viewsourcelink' => 'mostra codi font',
'editsectionhint' => 'Modifica la secció: $1',
'toc' => 'Contingut',
'showtoc' => 'desplega',
'hidetoc' => 'amaga',
'collapsible-collapse' => 'Tanca',
'collapsible-expand' => 'Amplia',
'thisisdeleted' => 'Voleu mostrar o restaurar $1?',
'viewdeleted' => 'Voleu mostrar $1?',
'restorelink' => '{{PLURAL:$1|una versió esborrada|$1 versions esborrades}}',
'feedlinks' => 'Sindicament:',
'feed-invalid' => 'La subscripció no és vàlida pel tipus de sindicament.',
'feed-unavailable' => 'Els canals de sindicació no estan disponibles',
'site-rss-feed' => 'Canal RSS $1',
'site-atom-feed' => 'Canal Atom $1',
'page-rss-feed' => '«$1» RSS Feed',
'page-atom-feed' => 'Canal Atom «$1»',
'red-link-title' => '$1 (encara no existeix)',
'sort-descending' => 'Ordena descendentment',
'sort-ascending' => 'Ordena ascendentment',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main' => 'Pàgina',
'nstab-user' => "Pàgina d'usuari",
'nstab-media' => 'Pàgina de multimèdia',
'nstab-special' => 'Pàgina especial',
'nstab-project' => 'Pàgina del projecte',
'nstab-image' => 'Fitxer',
'nstab-mediawiki' => 'Missatge',
'nstab-template' => 'Plantilla',
'nstab-help' => 'Ajuda',
'nstab-category' => 'Categoria',

# Main script and global functions
'nosuchaction' => 'No es reconeix aquesta operació',
'nosuchactiontext' => "L'acció especificada per la URL no és vàlida.
Potser heu escrit malament la URL o heu seguit un enllaç incorrecte.
Això també pot ser causat per un error al programari utilitzat pel projecte {{SITENAME}}.",
'nosuchspecialpage' => 'No es troba la pàgina especial que busqueu',
'nospecialpagetext' => '<strong>La pàgina especial que demaneu no és vàlida.</strong>

Vegeu la llista de pàgines especials a [[Special:SpecialPages]].',

# General errors
'error' => 'Error',
'databaseerror' => "S'ha produït un error en la base de dades",
'dberrortext' => "S'ha produït un error de sintaxi en una consulta a la base de dades.
Açò podria indicar un error en el programari.
La darrera consulta que s'ha intentat fer ha estat:
<blockquote><code>$1</code></blockquote>
des de la funció «<code>$2</code>».
L'error de retorn ha estat «<samp>$3: $4</samp>».",
'dberrortextcl' => "S'ha produït un error de sintaxi en una consulta a la base de dades.
La darrera consulta que s'ha intentat fer ha estat:
<blockquote><tt>$1</tt></blockquote>
des de la funció «<tt>$2</tt>».
L'error de retorn ha estat «<tt>$3: $4</tt>».",
'laggedslavemode' => 'Avís: La pàgina podria mancar de modificacions recents.',
'readonly' => 'La base de dades es troba bloquejada',
'enterlockreason' => 'Escriviu una raó pel bloqueig, així com una estimació de quan tindrà lloc el desbloqueig',
'readonlytext' => "La base de dades està temporalment bloquejada segurament per tasques de manteniment, després de les quals es tornarà a la normalitat.

L'administrador que l'ha bloquejada ha donat aquesta explicació: $1",
'missing-article' => "La base de dades no ha trobat el text d'una pàgina que hauria d'haver trobat, anomenada «$1» $2.

Normalment això passa perquè s'ha seguit una diferència desactualitzada o un enllaç d'historial a una pàgina que s'ha suprimit.

Si no fos el cas, podríeu haver trobat un error en el programari.
Aviseu-ho llavors a un [[Special:ListUsers/sysop|administrador]], deixant-li clar l'adreça URL causant del problema.",
'missingarticle-rev' => '(revisió#: $1)',
'missingarticle-diff' => '(dif: $1, $2)',
'readonly_lag' => "La base de dades s'ha bloquejat automàticament mentre els servidors esclaus se sincronitzen amb el mestre",
'internalerror' => 'Error intern',
'internalerror_info' => 'Error intern: $1',
'fileappenderrorread' => 'No s\'ha pogut llegir "$1" durant la inserció.',
'fileappenderror' => 'No he pogut afegir "$1" a "$2".',
'filecopyerror' => "No s'ha pogut copiar el fitxer «$1» com «$2».",
'filerenameerror' => "No s'ha pogut reanomenar el fitxer «$1» com «$2».",
'filedeleteerror' => "No s'ha pogut eliminar el fitxer «$1».",
'directorycreateerror' => "No s'ha pogut crear el directori «$1».",
'filenotfound' => "No s'ha pogut trobar el fitxer «$1».",
'fileexistserror' => "No s'ha pogut escriure al fitxer «$1»: ja existeix",
'unexpected' => "S'ha trobat un valor imprevist: «$1»=«$2».",
'formerror' => "Error: no s'ha pogut enviar les dades del formulari",
'badarticleerror' => 'Aquesta operació no es pot dur a terme en aquesta pàgina',
'cannotdelete' => "No s'ha pogut esborrar la pàgina o fitxer «$1».
Potser ja ha estat esborrat per algú altre.",
'cannotdelete-title' => 'No es pot suprimir la pàgina " $1 "',
'delete-hook-aborted' => 'Un «hook» ha interromput la supressió.
No ha donat cap explicació.',
'badtitle' => 'El títol no és correcte',
'badtitletext' => 'El títol de la pàgina que heu introduït no és correcte, és en blanc o conté un enllaç trencat amb un altre projecte. També podria contenir algun caràcter no acceptat als títols de pàgina.',
'perfcached' => "Les dades següents es troben a la memòria cau i podrien no estar al dia. Hi ha un màxim {{PLURAL:$1|d'un resultat|de $1 resultats}} disponibles a la memòria cau.",
'perfcachedts' => "Les dades següents es troben a la memòria cau i es van actualitzar per darrera vegada el $1. Hi ha un màxim {{PLURAL:$4|d'un resultat|de $4 resultats}} disponibles a la memòria cau.",
'querypage-no-updates' => "S'ha inhabilitat l'actualització d'aquesta pàgina. Les dades que hi contenen podrien no estar al dia.",
'wrong_wfQuery_params' => 'Paràmetres incorrectes per a wfQuery()<br />
Funció: $1<br />
Consulta: $2',
'viewsource' => 'Mostra la font',
'viewsource-title' => 'Mostra la font per a $1',
'actionthrottled' => 'Acció limitada',
'actionthrottledtext' => "Com a mesura per a prevenir la propaganda indiscriminada (spam), no podeu fer aquesta acció tantes vegades en un període de temps tan curt. Torneu-ho a intentar d'ací uns minuts.",
'protectedpagetext' => 'Aquesta pàgina està protegida per evitar modificacions.',
'viewsourcetext' => "Podeu visualitzar i copiar la font d'aquesta pàgina:",
'viewyourtext' => "Vostè pot veure i copiar la font de ' ' les modificacions ' ' d'aquesta pàgina:",
'protectedinterface' => "Aquesta pàgina proporciona el text de la interfície del software d'aquest wiki i està protegida per evitar els abusos.
Per agregar o canviar les traduccions per a tots els wikis, si us plau fes servir [//translatewiki.net/ translatewiki.net], el projecte de localització de MediaWiki.",
'editinginterface' => "'''Avís:''' Esteu editant una pàgina que conté cadenes de text per a la interfície d'aquest programari. Tingueu en compte que els canvis que es fan a aquesta pàgina afecten a l'aparença de la interfície d'altres usuaris. Per afegir o modificar traduccions a totes les wikis, plantegeu-vos utilitzar la [//translatewiki.net/ translatewiki.net], el projecte de localització de MediaWiki.",
'sqlhidden' => '(consulta SQL oculta)',
'cascadeprotected' => "Aquesta pàgina està protegida i no es pot modificar perquè està inclosa en {{PLURAL:$1|la següent pàgina, que té|les següents pàgines, que tenen}} activada l'opció de «protecció en cascada»:
$2",
'namespaceprotected' => "No teniu permís per a modificar pàgines en l'espai de noms '''$1'''.",
'customcssprotected' => "No teniu permisos per editar la pàgina CSS perquè conté els paràmetres personals d'un altre usuari.",
'customjsprotected' => "No teniu permisos per editar la pàgina JavaScript perquè conté els paràmetres personals d'un altre usuari.",
'ns-specialprotected' => 'No es poden modificar les pàgines especials.',
'titleprotected' => "La creació d'aquesta pàgina està protegida per [[User:$1|$1]].
Els seus motius han estat: «''$2''».",
'filereadonlyerror' => 'No s\'ha pogut modificar el fitxer «$1» perquè el repositori de fitxers "$2" està en mode només de lectura.
L\'administrador que l\'ha bloquejat ha donat aquesta explicació: "$3".',
'invalidtitle-knownnamespace' => "El títol amb l'espai de noms «$2» i text «$3» no és vàlid",
'invalidtitle-unknownnamespace' => 'Títol no vàlid amb espai de noms desconegut de número «$1» i text «$2»',
'exception-nologin' => 'No has iniciat sessió',
'exception-nologin-text' => 'Aquesta pàgina o acció requereix que iniciïs sessió a aquest wiki.',

# Virus scanner
'virus-badscanner' => "Mala configuració: antivirus desconegut: ''$1''",
'virus-scanfailed' => 'escaneig fallit (codi $1)',
'virus-unknownscanner' => 'antivirus desconegut:',

# Login and logout pages
'logouttext' => "'''Heu finalitzat la vostra sessió.'''

Podeu continuar utilitzant {{SITENAME}} de forma anònima, o podeu <span class='plainlinks'>[$1 iniciar una sessió una altra vegada]</span> amb el mateix o un altre usuari.
Tingueu en compte que algunes pàgines poden continuar mostrant-se com si encara estiguéssiu en una sessió, fins que buideu la memòria cau del vostre navegador.",
'welcomecreation' => "== Us donem la benvinguda, $1! ==

S'ha creat el vostre compte.
No oblideu de canviar les vostres [[Special:Preferences|preferències de {{SITENAME}}]].",
'yourname' => "Nom d'usuari",
'yourpassword' => 'Contrasenya',
'yourpasswordagain' => 'Escriviu una altra vegada la contrasenya',
'remembermypassword' => 'Recorda la contrasenya entre sessions (per un màxim de $1 {{PLURAL:$1|dia|dies}})',
'securelogin-stick-https' => "Roman connectat via HTTPS desprès d'autenticar-se",
'yourdomainname' => 'El vostre domini',
'password-change-forbidden' => 'No podeu canviar les contrasenyes en aquest wiki.',
'externaldberror' => "Hi ha hagut una fallida en el servidor d'autenticació externa de la base de dades i no teniu permís per a actualitzar el vostre compte d'accès extern.",
'login' => 'Inici de sessió',
'nav-login-createaccount' => 'Inicia una sessió / crea un compte',
'loginprompt' => 'Heu de tenir les galetes habilitades per a poder iniciar una sessió a {{SITENAME}}.',
'userlogin' => 'Inicia una sessió / crea un compte',
'userloginnocreate' => 'Inici de sessió',
'logout' => 'Finalitza la sessió',
'userlogout' => 'Finalitza la sessió',
'notloggedin' => 'No us heu identificat',
'nologin' => "No teniu un compte? '''$1'''.",
'nologinlink' => 'Crea un compte',
'createaccount' => 'Crea un compte',
'gotaccount' => 'Ja teniu un compte? $1.',
'gotaccountlink' => 'Inicia una sessió',
'userlogin-resetlink' => "Heu oblidat les vostres dades d'accés?",
'createaccountmail' => 'per correu electrònic',
'createaccountreason' => 'Motiu:',
'badretype' => 'Les contrasenyes que heu introduït no coincideixen.',
'userexists' => 'El nom que heu entrat ja és en ús.
Escolliu-ne un de diferent.',
'loginerror' => "Error d'inici de sessió",
'createaccounterror' => "No s'ha pogut crear el compte: $1",
'nocookiesnew' => "S'ha creat el compte d'usuari, però no esteu enregistrat. El projecte {{SITENAME}} usa galetes per enregistrar els usuaris. Si us plau activeu-les, per a poder enregistrar-vos amb el vostre nom d'usuari i la clau.",
'nocookieslogin' => 'El programari {{SITENAME}} utilitza galetes per enregistrar usuaris. Teniu les galetes desactivades. Activeu-les i torneu a provar.',
'nocookiesfornew' => "No s'ha creat el compte d'usuari, ja que no es podia confirmar el seu origen.
Verifiqueu que teniu habilitades les galetes al vostre navegador, torneu a carregar aquesta pàgina i intenteu-lo de nou.",
'noname' => "No heu especificat un nom vàlid d'usuari.",
'loginsuccesstitle' => "S'ha iniciat la sessió amb èxit",
'loginsuccess' => 'Heu iniciat la sessió a {{SITENAME}} com a «$1».',
'nosuchuser' => "No hi ha cap usuari anomenat «$1».
Reviseu-ne l'ortografia (recordeu que es distingeixen les majúscules i minúscules), o [[Special:UserLogin/signup|creeu un compte d'usuari nou]].",
'nosuchusershort' => 'No hi ha cap usuari anomenat «$1». Comproveu que ho hàgiu escrit correctament.',
'nouserspecified' => "Heu d'especificar un nom d'usuari.",
'login-userblocked' => 'Aquest usuari està bloquejat. Inici de sessió no permès.',
'wrongpassword' => 'La contrasenya que heu introduït és incorrecta. Torneu-ho a provar.',
'wrongpasswordempty' => "La contrasenya que s'ha introduït estava en blanc. Torneu-ho a provar.",
'passwordtooshort' => "La contrasenya ha de tenir un mínim {{PLURAL:$1|d'un caràcter|de $1 caràcters}}.",
'password-name-match' => "La contrasenya ha de ser diferent al vostre nom d'usuari.",
'password-login-forbidden' => "No és permès d'utilitzar aquest nom d'usuari i contrasenya.",
'mailmypassword' => "Envia'm una nova contrasenya per correu electrònic",
'passwordremindertitle' => 'Nova contrasenya temporal per al projecte {{SITENAME}}',
'passwordremindertext' => "Algú (vós mateix segurament, des de l'adreça l'IP $1) ha soŀlicitat que us enviéssim una nova contrasenya per a iniciar la sessió al projecte {{SITENAME}} ($4).
La nova contrasenya temporal per a l'usuari «$2» és ara «$3». Si aquesta fou la vostra intenció, ara hauríeu d'iniciar la sessió i canviar-la. Tingueu present que és temporal i caducarà d'aquí {{PLURAL:$5|un dia|$5 dies}}.

Si algú altre hagués fet aquesta soŀlicitud o si ja haguéssiu recordat la vostra contrasenya i
no volguéssiu canviar-la, ignoreu aquest missatge i continueu utilitzant
la vostra antiga contrasenya.",
'noemail' => "No hi ha cap adreça electrònica registrada de l'usuari «$1».",
'noemailcreate' => "Has d'indicar una adreça de correu electrònic vàlida",
'passwordsent' => "S'ha enviat una nova contrasenya a l'adreça electrònica registrada per «$1».
Inicieu una sessió després que la rebeu.",
'blocked-mailpassword' => 'La vostra adreça IP ha estat blocada. Se us ha desactivat la funció de recuperació de contrasenya per a prevenir abusos.',
'eauthentsent' => "S'ha enviat un correu electrònic a la direcció especificada. Abans no s'envïi cap altre correu electrònic a aquesta adreça, cal verificar que és realment vostra. Per tant, cal que seguiu les instruccions presents en el correu electrònic que se us ha enviat.",
'throttled-mailpassword' => "Ja se us ha enviat un recordatori de contrasenya en {{PLURAL:$1|l'última hora|les últimes $1 hores}}. Per a prevenir abusos, només s'envia un recordatori de contrasenya cada {{PLURAL:$1|hora|$1 hores}}.",
'mailerror' => "S'ha produït un error en enviar el missatge: $1",
'acct_creation_throttle_hit' => "Des de la vostra adreça IP ja {{PLURAL:$1|s'ha creat un compte|s'han creat $1 comptes}} en l'últim dia i aquest és el màxim permès en aquest wiki per aquest període de temps.
Així, des d'aquesta adreça IP no es poden crear més comptes actualment.",
'emailauthenticated' => "S'ha autenticat la vostra adreça electrònica el $2 a les $3.",
'emailnotauthenticated' => 'La vostra adreça de correu electrònic <strong>encara no està autenticada</strong>. No rebrà cap missatge de correu electrònic per a cap de les següents funcionalitats.',
'noemailprefs' => 'Especifiqueu una adreça electrònica per a activar aquestes característiques.',
'emailconfirmlink' => 'Confirmeu la vostra adreça electrònica',
'invalidemailaddress' => "No es pot acceptar l'adreça electrònica perquè sembla que té un format no vàlid.
Introduïu una adreça amb un format adequat o bé buideu el camp.",
'cannotchangeemail' => 'No podeu canviar adreces de correu electrònic en aquest wiki.',
'emaildisabled' => 'El lloc no pot enviar correus electrònics.',
'accountcreated' => "S'ha creat el compte",
'accountcreatedtext' => "S'ha creat el compte d'usuari de $1.",
'createaccount-title' => "Creació d'un compte a {{SITENAME}}",
'createaccount-text' => "Algú ha creat un compte d'usuari anomenat $2 al projecte {{SITENAME}}
($4) amb la vostra adreça de correu electrònic. La contrasenya per a l'usuari «$2» és «$3». Hauríeu d'accedir al compte i canviar-vos aquesta contrasenya quan abans millor.

Si no hi teniu cap relació i aquest compte ha estat creat per error, simplement ignoreu el missatge.",
'usernamehasherror' => "El nom d'usuari no pot contenir caràcters hash",
'login-throttled' => "Heu realitzat massa intents d'accés a la sessió.
Si us plau, esperi abans de tornar-ho a intentar.",
'login-abort-generic' => "L'entrada al compte d'usuari no ha reeixit - Abortada",
'loginlanguagelabel' => 'Llengua: $1',
'suspicious-userlogout' => "S'ha denegat la vostra petició per tancar la sessió ja què sembla que va ser enviada per un navegador defectuós o un proxy cau.",

# E-mail sending
'php-mail-error-unknown' => 'Error desconegut en la funció mail() de PHP',
'user-mail-no-addy' => "S'ha intentat enviar un missatge de correu electrònic sense adreça.",

# Change password dialog
'resetpass' => 'Canvia la contrasenya',
'resetpass_announce' => 'Heu iniciat la sessió amb un codi temporal enviat per correu electrònic. Per a finalitzar-la, heu de definir una nova contrasenya ací:',
'resetpass_text' => '<!-- Afegiu-hi un text -->',
'resetpass_header' => 'Canvia la contrasenya del compte',
'oldpassword' => 'Contrasenya antiga',
'newpassword' => 'Contrasenya nova',
'retypenew' => 'Torneu a escriure la nova contrasenya:',
'resetpass_submit' => 'Definiu una contrasenya i inicieu una sessió',
'resetpass_success' => "S'ha canviat la vostra contrasenya amb èxit! Ara ja podeu iniciar-hi una sessió...",
'resetpass_forbidden' => 'No poden canviar-se les contrasenyes',
'resetpass-no-info' => "Heu d'estar registrats en un compte per a poder accedir directament a aquesta pàgina.",
'resetpass-submit-loggedin' => 'Canvia la contrasenya',
'resetpass-submit-cancel' => 'Canceŀla',
'resetpass-wrong-oldpass' => 'Contrasenya actual o temporal no vàlida.
Deveu haver canviat la vostra contrasenya o demanat una nova contrasenya temporal.',
'resetpass-temp-password' => 'Contrasenya temporal:',

# Special:PasswordReset
'passwordreset' => 'Restablir contrasenya',
'passwordreset-text' => 'Completeu el següent formulari per rebre un recordatori per correu electrònic amb els detalls del vostre compte.',
'passwordreset-legend' => 'Restablir contrasenya',
'passwordreset-disabled' => "S'ha desactivat el restabliment de contranyes en aquest wiki.",
'passwordreset-pretext' => '{{PLURAL:$1||Introduïu un dels elements de dades següents}}',
'passwordreset-username' => "Nom d'usuari:",
'passwordreset-domain' => 'Domini',
'passwordreset-capture' => 'Veure el missatge de correu electrònic?',
'passwordreset-capture-help' => "Si marqueu aquesta casella, el missatge de correu electrònic (amb la contrasenya temporal) es mostrarà al mateix moment que sigui enviat a l'usuari.",
'passwordreset-email' => 'Adreça de correu electrònic:',
'passwordreset-emailtitle' => 'Detalls del compte a {{SITENAME}}',
'passwordreset-emailtext-ip' => "Algú (vós mateix segurament, des de l'adreça IP $1) ha demanat un recordatori dels detalls dels vostres comptes al projecte {{SITENAME}} ($4). {{PLURAL:$3|El següent compte d'usuari està associat|Els següents comptes d'usuari estan associats}} amb aquesta adreça de correu electrònic:

$2

{{PLURAL:$3|Aquesta contrasenya temporal caducarà|Aquestes contrasenyes temporals caducaran}} en {{PLURAL:$5|un dia|$5 dies}}.
Hauríeu d'entrar al compte per a fixar-hi una nova contrasenya al més aviat possible. Si algú que no sou vós és qui ha fet aquesta petició o si heu recordat la contrasenya original i ja no la voleu canviar, podeu ignorar aquest missatge i seguir utilitzant la vostra antiga contrasenya.",
'passwordreset-emailtext-user' => "L'usuari $1 de {{SITENAME}} ha demanat un recordatori dels detalls dels vostres comptes al projecte {{SITENAME}} <$4>. {{PLURAL:$3|El següent compte d'usuari està associat|Els següents comptes d'usuari estan associats}} amb aquesta adreça de correu electrònic:

$2

{{PLURAL:$3|Aquesta contrasenya temporal caducarà|Aquestes contrasenyes temporals caducaran}} en {{PLURAL:$5|un dia|$5 dies}}.
Hauríeu d'entrar {{PLURAL:$3|al compte per a fixar-hi una nova contrasenya|als comptes per a fixar-hi noves contrasenyes}} al més aviat possible. Si algú que no sou vós és qui ha fet aquesta petició o si heu recordat la contrasenya original i ja no la voleu canviar, podeu ignorar aquest missatge i seguir utilitzant la vostra antiga contrasenya.",
'passwordreset-emailelement' => "Nom d'usuari: $1
Contrasenya temporal: $2",
'passwordreset-emailsent' => "S'ha enviat un correu de recordatori.",
'passwordreset-emailsent-capture' => "S'ha enviat un recordatori per correu electrònic, tal com es mostra a continuació.",
'passwordreset-emailerror-capture' => "S'ha generat un missatge recordatori de correu electrònic, que es mostra a continuació, però ha fallat l'enviament a l'usuari: $1",

# Special:ChangeEmail
'changeemail' => 'Canvi de correu electrònic',
'changeemail-header' => "Canvi de l'adreça de correu electrònic del compte",
'changeemail-text' => "Completeu el següent formulari per canviar la vostra adreça de correu electrònic. Haureu d'introduir la contrasenya per confirmar el canvi.",
'changeemail-no-info' => "Heu d'entrar en un compte d'usuari per accedir directament a aquesta pàgina.",
'changeemail-oldemail' => 'Adreça de correu electrònic actual:',
'changeemail-newemail' => 'Nova adreça de correu electrònic:',
'changeemail-none' => '(cap)',
'changeemail-submit' => 'Canvia de correu electrònic',
'changeemail-cancel' => 'Cancel·la',

# Edit page toolbar
'bold_sample' => 'Text en negreta',
'bold_tip' => 'Text en negreta',
'italic_sample' => 'Text en cursiva',
'italic_tip' => 'Text en cursiva',
'link_sample' => "Títol de l'enllaç",
'link_tip' => 'Enllaç intern',
'extlink_sample' => "http://www.example.com títol de l'enllaç",
'extlink_tip' => 'Enllaç extern (recordeu el prefix http://)',
'headline_sample' => "Text per a l'encapçalament",
'headline_tip' => 'Encapçalat de secció de 2n nivell',
'nowiki_sample' => 'Inseriu ací text sense format',
'nowiki_tip' => 'Ignora el format wiki',
'image_sample' => 'Exemple.jpg',
'image_tip' => 'Fitxer incrustat',
'media_sample' => 'Exemple.ogg',
'media_tip' => 'Enllaç del fitxer',
'sig_tip' => 'La vostra signatura amb marca horària',
'hr_tip' => 'Línia horitzontal (feu-la servir amb moderació)',

# Edit pages
'summary' => 'Resum:',
'subject' => 'Tema/capçalera:',
'minoredit' => 'Aquesta és una modificació menor',
'watchthis' => 'Vigila aquesta pàgina',
'savearticle' => 'Desa la pàgina',
'preview' => 'Previsualització',
'showpreview' => 'Mostra una previsualització',
'showlivepreview' => 'Vista ràpida',
'showdiff' => 'Mostra els canvis',
'anoneditwarning' => "'''Avís:''' No esteu identificats amb un compte d'usuari. Es mostrarà la vostra adreça IP en l'historial d'aquesta pàgina.",
'anonpreviewwarning' => "''No us heu identificat amb un compte d'usuari. La vostra adreça IP quedarà registrada a l'historial d'aquesta pàgina.''",
'missingsummary' => "'''Recordatori''': Heu deixat en blanc el resum de l'edició. Si torneu a clicar al botó de desar, l'edició es guardarà sense resum.",
'missingcommenttext' => 'Introduïu un comentari a continuació.',
'missingcommentheader' => "'''Recordatori:''' No heu proporcionat un assumpte/encapçalament per al comentari. Si cliqueu de nou al botó \"{{int:savearticle}}\", la vostra contribució se desarà sense cap.",
'summary-preview' => 'Previsualització del resum:',
'subject-preview' => 'Previsualització de tema/capçalera:',
'blockedtitle' => "L'usuari està blocat",
'blockedtext' => "'''S'ha procedit al blocatge del vostre compte d'usuari o la vostra adreça IP.'''

El blocatge l'ha dut a terme l'usuari $1.
El motiu donat és ''$2''.

* Inici del blocatge: $8
* Final del blocatge: $6
* Compte blocat: $7

Podeu contactar amb $1 o un dels [[{{MediaWiki:Grouppage-sysop}}|administradors]] per a discutir-ho.

Tingueu en compte que no podeu fer servir el formulari d'enviament de missatges de correu electrònic a cap usuari, a menys que tingueu una adreça de correu vàlida registrada a les vostres [[Special:Preferences|preferències d'usuari]] i no ho tingueu tampoc blocat.

La vostra adreça IP actual és $3, i el número d'identificació del blocatge és #$5.
Si us plau, incloeu aquestes dades en totes les consultes que feu.",
'autoblockedtext' => "La vostra adreça IP ha estat blocada automàticament perquè va ser usada per un usuari actualment bloquejat. Aquest usuari va ser blocat per l'{{GENDER:$1|administrador|administradora}} $1. El motiu donat per al bloqueig ha estat:

:''$2''

* Inici del bloqueig: $8
* Final del bloqueig: $6
* Usuari bloquejat: $7

Podeu contactar l'usuari $1 o algun altre dels [[{{MediaWiki:Grouppage-sysop}}|administradors]] per a discutir el bloqueig.

Recordeu que per a poder usar l'opció «Envia un missatge de correu electrònic a aquest usuari» haureu d'haver validat una adreça de correu electrònic a les vostres [[Special:Preferences|preferències]].

El número d'identificació de la vostra adreça IP és $3, i l'ID del bloqueig és #$5. Si us plau, incloeu aquestes dades en totes les consultes que feu.",
'blockednoreason' => "no s'ha donat cap motiu",
'whitelistedittext' => 'Heu de $1 per modificar pàgines.',
'confirmedittext' => "Heu de confirmar la vostra adreça electrònica abans de poder modificar les pàgines. Definiu i valideu la vostra adreça electrònica a través de les vostres [[Special:Preferences|preferències d'usuari]].",
'nosuchsectiontitle' => 'No es pot trobar la secció',
'nosuchsectiontext' => 'Heu intentat editar una secció que no existeix.
Potser ha estat moguda o eliminada mentre estàveu veient la pàgina.',
'loginreqtitle' => 'Cal que inicieu una sessió',
'loginreqlink' => 'inicia una sessió',
'loginreqpagetext' => 'Heu de ser $1 per a visualitzar altres pàgines.',
'accmailtitle' => "S'ha enviat una contrasenya.",
'accmailtext' => "S'ha enviat una contrasenya aleatòria a $2 per a l'{{GENDER:$1|usuari|usuària}} [[User talk:$1|$1]].

La contrasenya per aquest nou compte pot ser canviada a la pàgina de ''[[Special:ChangePassword|canvi de contrasenya]]'' un cop connectat.",
'newarticle' => '(Nou)',
'newarticletext' => "Heu seguit un enllaç a una pàgina que encara no existeix.
Per a crear-la, comenceu a escriure en l'espai de sota
(vegeu l'[[{{MediaWiki:Helppage}}|ajuda]] per a més informació).
Si sou ací per error, simplement cliqueu al botó «Enrere» del vostre navegador.",
'anontalkpagetext' => "----''Aquesta és la pàgina de discussió d'un usuari anònim que encara no ha creat un compte o que no fa servir el seu nom registrat. Per tant, hem de fer servir la seua adreça IP numèrica per a identificar-lo. Una adreça IP pot ser compartida per molts usuaris. Si sou un usuari anònim, i trobeu que us han adreçat comentaris inoportuns, si us plau, [[Special:UserLogin/signup|creeu-vos un compte]], o [[Special:UserLogin|entreu en el vostre compte]] si ja en teniu un, per a evitar futures confusions amb altres usuaris anònims.''",
'noarticletext' => 'Actualment no hi ha text en aquesta pàgina.
Podeu [[Special:Search/{{PAGENAME}}|cercar aquest títol]] en altres pàgines,
<span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} cercar en els registres]
o [{{fullurl:{{FULLPAGENAME}}|action=edit}} crear-la ara]</span>.',
'noarticletext-nopermission' => 'Actualment no hi ha text en aquesta pàgina.
Podeu [[Special:Search/{{PAGENAME}}|cercar aquest títol]] en altres pàgines o bé <span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} cercar en els registres relacionats]</span>, però no teniu permisos per crear la pàgina.',
'missing-revision' => 'La revisió # $1  de la pàgina anomenada "{{PAGENAME}}" no existeix.

Això és normalment provocat per després d\'un enllaç d\'història antiquat a una pàgina que s\'ha suprimit.
Detalls es poden trobar en el [{{fullurl: {{# especial: registre}} / delete|page = {{FULLPAGENAMEE}}}} registre de supressió].',
'userpage-userdoesnotexist' => "Atenció: El compte d'usuari «<nowiki>$1</nowiki>» no està registrat. En principi no hauríeu de crear ni editar aquesta pàgina.",
'userpage-userdoesnotexist-view' => 'El compte d\'usuari "$1" no està registrat.',
'blocked-notice-logextract' => "En aquests moments aquest compte d'usuari es troba blocat.
Per més detalls, la darrera entrada del registre es mostra a continuació:",
'clearyourcache' => "'''Nota:''' Després de desar, possiblement necessiteu refrescar la memòria cau del vostre navegador per a veure'n els canvis.
* '''Firefox / Safari:''' Premeu ''Shift'' mentre cliqueu el botó ''Actualitzar'', o pressioneu ''Ctrl+F5'' o ''Ctrl+R'' (''⌘+R'' a Mac)
* '''Google Chrome:''' Premeu ''Ctrl+Shift+R'' (''⌘+Shift+R'' a Mac)
* '''Internet Explorer:''' Premeu la tecla ''Ctrl'' mentre cliqueu a ''Actualitzar'' o pressioneu ''Ctrl+F5''
* '''Opera:''' Netegeu la memòria cau ''Eines → Preferències''",
'usercssyoucanpreview' => "'''Consell:''' Utilitzeu el botó \"{{int:showpreview}}\" per provar el vostre nou CSS abans de desar-lo.",
'userjsyoucanpreview' => "'''Consell:''' Utilitzeu el botó \"{{int:showpreview}}\" per provar el vostre nou JavaScript abans de desar-lo.",
'usercsspreview' => "'''Recordeu que esteu previsualitzant el vostre CSS d'usuari.'''
'''Encara no s'ha desat!'''",
'userjspreview' => "'''Recordeu que només estau provant/previsualitzant el vostre JavaScript, encara no ho heu desat!'''",
'sitecsspreview' => "'''Adoneu-vos que esteu veient una vista prèvia d'aquest full d'estil CSS.'''
'''No n'hi ha estat encara gravada!'''",
'sitejspreview' => "'''Adoneu-vos que esteu veient una vista prèvia d'aquest codi Javascript.'''
'''No n'hi ha estat encara gravat!'''",
'userinvalidcssjstitle' => "'''Atenció:''' No existeix l'aparença «$1». Recordeu que les subpàgines personalitzades amb extensions .css i .js utilitzen el títol en minúscules, per exemple, {{ns:user}}:NOM/vector.css no és el mateix que {{ns:user}}:NOM/Vector.css.",
'updated' => '(Actualitzat)',
'note' => "'''Nota:'''",
'previewnote' => "'''Recorda que això és només una previsualització.'''
Els vostres canvis encara no s'han desat!",
'continue-editing' => "Aneu a l'àrea d'edició",
'previewconflict' => "Aquesta previsualització reflecteix, a l'àrea
d'edició superior, el text tal i com apareixerà si trieu desar-lo.",
'session_fail_preview' => "'''No s'ha pogut processar la vostra modificació a causa d'una pèrdua de dades de la sessió.
Si us plau, proveu-ho una altra vegada. Si continués sense funcionar, proveu de [[Special:UserLogout|finalitzar la sessió]] i torneu a iniciar-ne una.'''",
'session_fail_preview_html' => "'''Ho sentim, no s'han pogut processar les vostres modificacions a causa d'una pèrdua de dades de la sessió.'''

''Com que el projecte {{SITENAME}} té habilitat l'ús de codi HTML cru, s'ha amagat la previsualització com a prevenció contra atacs mitjançant codis JavaScript.''

'''Si es tracta d'una contribució legítima, si us plau, intenteu-ho una altra vegada. Si continua havent-hi problemes, [[Special:UserLogout|finalitzeu la sessió]] i torneu a iniciar-ne una.'''",
'token_suffix_mismatch' => "'''S'ha rebutjat la vostra modificació perquè el vostre client ha fet malbé els caràcters de puntuació en el testimoni d'edició. S'ha rebutjat la modificació per a evitar la corrupció del text de la pàgina. Açò passa a vegades quan s'utilitza un servei web de servidor intermediari anònim amb problemes.'''",
'edit_form_incomplete' => "'''Certes parts del formulari de modificació no han arribat al servidor, verifiqueu que les vostres modificacions estan intactes i proveu-ho de nou.'''",
'editing' => "S'està editant $1",
'creating' => "S'està creant $1",
'editingsection' => "S'està editant $1 (secció)",
'editingcomment' => "S'està editant $1 (nova secció)",
'editconflict' => "Conflicte d'edició: $1",
'explainconflict' => "Algú més ha canviat aquesta pàgina des que l'heu editada.
L'àrea de text superior conté el text de la pàgina com existeix actualment.
Els vostres canvis es mostren en l'àrea de text inferior.
Haureu de fusionar els vostres canvis en el text existent.
'''Només''' el text de l'àrea superior es desarà quan premeu el botó «{{int:savearticle}}».",
'yourtext' => 'El vostre text',
'storedversion' => 'Versió emmagatzemada',
'nonunicodebrowser' => "'''Alerta: El vostre navegador no és compatible amb unicode.'''
S'ha activat una alternativa que us permetrà modificar pàgines amb seguretat: el caràcters que no són ASCII us apareixeran en la caixa d'edició com a codis hexadecimals.",
'editingold' => "'''AVÍS: Esteu editant una revisió desactualitzada de la pàgina.
Si la deseu, es perdran els canvis que hàgiu fet des de llavors.'''",
'yourdiff' => 'Diferències',
'copyrightwarning' => "Si us plau, tingueu en compte que totes les contribucions per al projecte {{SITENAME}} es consideren com a publicades sota els termes de la llicència $2 (vegeu-ne més detalls a $1). Si no desitgeu la modificació i distribució lliure dels vostres escrits sense el vostre consentiment, no els poseu ací.<br />
A més a més, en enviar el vostre text, doneu fe que és vostra l'autoria, o bé de fonts en el domini públic o recursos lliures similars. Heu de saber que aquest '''no''' és el cas de la majoria de pàgines que hi ha a Internet.
'''No feu servir textos amb drets d'autor sense permís!'''",
'copyrightwarning2' => "Si us plau, tingueu en compte que totes les contribucions al projecte {{SITENAME}} poden ser corregides, alterades o esborrades per altres usuaris. Si no desitgeu la modificació i distribució lliure dels vostres escrits sense el vostre consentiment, no els poseu ací.<br />
A més a més, en enviar el vostre text, doneu fe que és vostra l'autoria, o bé de fonts en el domini públic o altres recursos lliures similars (consulteu $1 per a més detalls).
'''No feu servir textos amb drets d'autor sense permís!'''",
'longpageerror' => "'''Error: El text que heu introduït és {{PLURAL:$1|d'un kilobyte|de $1 kilobytes}} i sobrepassa el màxim permès de {{PLURAL:$2|one kilobyte|$2 kilobytes}}.'''
No es pot desar.",
'readonlywarning' => "'''ADVERTÈNCIA: La base de dades està tancada per manteniment
i no podeu desar les vostres contribucions en aquests moments. Podeu retallar i enganxar el codi
en un fitxer de text i desar-lo més tard.'''

L'administrador que l'ha tancada n'ha donat aquesta justificació: $1",
'protectedpagewarning' => "'''ATENCIÓ: Aquesta pàgina està bloquejada i només els usuaris amb drets d'administrador la poden modificar.
A continuació es mostra la darrera entrada del registre com a referència:",
'semiprotectedpagewarning' => "'''Avís:''' Aquesta pàgina està bloquejada i només pot ser modificada per usuaris registrats.
A continuació es mostra la darrera entrada del registre com a referència:",
'cascadeprotectedwarning' => "'''Atenció:''' Aquesta pàgina està protegida de forma que només la poden modificar els administradors, ja que està inclosa a {{PLURAL:$1|la següent pàgina|les següents pàgines}} amb l'opció de «protecció en cascada» activada:",
'titleprotectedwarning' => "'''ATENCIÓ: Aquesta pàgina està protegida de tal manera que es necessiten uns [[Special:ListGroupRights|drets específics]] per a poder crear-la.'''
A continuació es mostra la darrera entrada del registre com a referència:",
'templatesused' => 'Aquesta pàgina fa servir {{PLURAL:$1|la següent plantilla|les següents plantilles}}:',
'templatesusedpreview' => '{{PLURAL:$1|Plantilla usada|Plantilles usades}} en aquesta previsualització:',
'templatesusedsection' => '{{PLURAL:$1|Plantilla usada|Plantilles usades}} en aquesta secció:',
'template-protected' => '(protegida)',
'template-semiprotected' => '(semiprotegida)',
'hiddencategories' => 'Aquesta pàgina forma part de {{PLURAL:$1|la següent categoria oculta|les següents categories ocultes}}:',
'edittools' => "<!-- Es mostrarà als formularis d'edició i de càrrega el text que hi haja després d'aquesta línia. -->",
'nocreatetitle' => "S'ha limitat la creació de pàgines",
'nocreatetext' => "El projecte {{SITENAME}} ha restringit la possibilitat de crear noves pàgines.
Podeu modificar les planes ja existents o bé [[Special:UserLogin|entrar en un compte d'usuari]].",
'nocreate-loggedin' => 'No teniu permisos per a crear pàgines noves.',
'sectioneditnotsupported-title' => 'Edició de la secció no suportada',
'sectioneditnotsupported-text' => "L'edició de la secció no està suportada en aquesta pàgina.",
'permissionserrors' => 'Error de permisos',
'permissionserrorstext' => 'No teniu permisos per a fer-ho, {{PLURAL:$1|pel següent motiu|pels següents motius}}:',
'permissionserrorstext-withaction' => 'No teniu permís per a $2, {{PLURAL:$1|pel motiu següent|pels motius següents}}:',
'recreate-moveddeleted-warn' => "'''Avís: Esteu creant una pàgina que ha estat prèviament esborrada.'''

Hauríeu de considerar si és realment necessari continuar editant aquesta pàgina.
A continuació s'ofereix el registre d'esborraments i de reanomenaments de la pàgina:",
'moveddeleted-notice' => "Aquesta pàgina ha estat esborrada.
A continuació us mostrem com a referència el registre d'esborraments i reanomenaments de la pàgina.",
'log-fulllog' => 'Veure tot el registre',
'edit-hook-aborted' => "Modificació avortada pel hook.
No s'ha donat cap explicació.",
'edit-gone-missing' => "No s'ha pogut actualitzar la pàgina.
Sembla haver estat esborrada.",
'edit-conflict' => "Conflicte d'edició.",
'edit-no-change' => 'La vostra modificació ha estat ignorada perquè no feia cap canvi al text.',
'edit-already-exists' => "No s'ha pogut crear una pàgina.
Ja existeix.",
'defaultmessagetext' => 'Missatge per defecte',
'content-failed-to-parse' => "Ha fallat l'anàlisi del contingut de $2 per al model $1: $3",
'invalid-content-data' => 'Dades de contingut no vàlides',
'content-not-allowed-here' => 'No és permés el contingut "$1" a la pàgina [[$2]]',

# Content models
'content-model-wikitext' => 'wikitext',
'content-model-text' => 'text net',
'content-model-javascript' => 'JavaScript',
'content-model-css' => 'CSS',

# Parser/template warnings
'expensive-parserfunction-warning' => "Atenció: Aquesta pàgina conté massa crides a funcions parserfunction complexes.

Actualment n'hi ha {{PLURAL:$1|$1|$1}} i, com a molt, {{PLURAL:$2|hauria|haurien}} de ser $2.",
'expensive-parserfunction-category' => 'Pàgines amb massa crides de parser function',
'post-expand-template-inclusion-warning' => "Avís: La mida d'inclusió de la plantilla és massa gran.
No s'inclouran algunes plantilles.",
'post-expand-template-inclusion-category' => "Pàgines on s'excedeix la mida d'inclusió de les plantilles",
'post-expand-template-argument-warning' => "Avís: Aquesta pàgina conté com a mínim un argument de plantilla que té una mida d'expansió massa llarga.
Se n'han omès els arguments.",
'post-expand-template-argument-category' => "Pàgines que contenen arguments de plantilla que s'han omès",
'parser-template-loop-warning' => "S'ha detectat un bucle de plantilla: [[$1]]",
'parser-template-recursion-depth-warning' => "S'ha excedit el límit de recursivitat de plantilles ($1)",
'language-converter-depth-warning' => "El límit de la profunditat del conversor d'idiomes ha excedit ($1)",
'node-count-exceeded-category' => "Pàgines on s'ha excedit el recompte de nodes",
'node-count-exceeded-warning' => 'La pàgina ha excedit el recompte de nodes',
'expansion-depth-exceeded-category' => "Pàgines on s'ha excedit la profunditat d'expansió",
'expansion-depth-exceeded-warning' => "La pàgina ha excedit la profunditat d'expansió",
'parser-unstrip-loop-warning' => "S'ha detectat un bucle no desmuntable",
'parser-unstrip-recursion-limit' => "S'ha excedit el límit ($1) de recursivitat no desmuntable",
'converter-manual-rule-error' => 'Error detectat a la norma de conversió de llengua manual',

# "Undo" feature
'undo-success' => "Pot desfer-se la modificació. Si us plau, reviseu la comparació de sota per a assegurar-vos que és el que voleu fer; llavors deseu els canvis per a finalitzar la desfeta de l'edició.",
'undo-failure' => 'No pot desfer-se la modificació perquè hi ha edicions entre mig que hi entren en conflicte.',
'undo-norev' => "No s'ha pogut desfer l'edició perquè no existeix o ha estat esborrada.",
'undo-summary' => 'Es desfà la revisió $1 de [[Special:Contributions/$2|$2]] ([[User talk:$2|Discussió]])',

# Account creation failure
'cantcreateaccounttitle' => 'No es pot crear el compte',
'cantcreateaccount-text' => "[[User:$3|$3]] ha bloquejat la creació de comptes des d'aquesta adreça IP ('''$1''').

El motiu donat per $3 és ''$2''",

# History pages
'viewpagelogs' => "Visualitza els registres d'aquesta pàgina",
'nohistory' => 'No hi ha un historial de revisions per a aquesta pàgina.',
'currentrev' => 'Revisió actual',
'currentrev-asof' => 'Revisió de $1',
'revisionasof' => 'Revisió de $1',
'revision-info' => 'Revisió de $1; $2',
'previousrevision' => '←Versió més antiga',
'nextrevision' => 'Versió més nova→',
'currentrevisionlink' => 'Versió actual',
'cur' => 'act',
'next' => 'seg',
'last' => 'prev',
'page_first' => 'primera',
'page_last' => 'última',
'histlegend' => 'Simbologia: (act) = diferència amb la versió actual,
(prev) = diferència amb la versió anterior, m = modificació menor',
'history-fieldset-title' => "Cerca a l'historial",
'history-show-deleted' => 'Només esborrats',
'histfirst' => 'Primeres',
'histlast' => 'Últimes',
'historysize' => '({{PLURAL:$1|1 octet|$1 octets}})',
'historyempty' => '(buit)',

# Revision feed
'history-feed-title' => 'Historial de revisió',
'history-feed-description' => 'Historial de revisió per a aquesta pàgina del wiki',
'history-feed-item-nocomment' => '$1 a $2',
'history-feed-empty' => 'La pàgina demanada no existeix.
Potser ha estat esborrada o reanomenada.
Intenteu [[Special:Search|cercar al mateix wiki]] per a noves pàgines rellevants.',

# Revision deletion
'rev-deleted-comment' => "(resum d'edició eliminat)",
'rev-deleted-user' => "(s'ha suprimit el nom d'usuari)",
'rev-deleted-event' => "(s'ha suprimit el registre d'accions)",
'rev-deleted-user-contribs' => "[nom d'usuari o adreça IP esborrada - modificació ocultada de les contribucions]",
'rev-deleted-text-permission' => "Aquesta versió de la pàgina ha estat '''eliminada'''.
Hi poden haver més detalls al [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} registre d'esborrats].",
'rev-deleted-text-unhide' => "La revisió d'aquesta pàgina ha estat '''eliminada'''.
Hi poden haver més detalls al [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} registre d'esborrats].
Encara podeu [$1 veure aquesta revisió] si així ho desitgeu.",
'rev-suppressed-text-unhide' => "Aquesta versió de la pàgina ha estat '''eliminada'''.
Hi poden haver més detalls al [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} registre d'esborrats].
Encara podeu [$1 veure aquesta revisió] si així ho desitgeu.",
'rev-deleted-text-view' => "Aquesta versió de la pàgina ha estat '''eliminada'''.
Podeu veure-la; vegeu-ne més detalls al [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} registre d'esborrats].",
'rev-suppressed-text-view' => "Aquesta versió de la pàgina ha estat '''eliminada'''.
Podeu veure-la; vegeu-ne més detalls al [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} registre d'esborrats].",
'rev-deleted-no-diff' => "No podeu veure aquesta comparativa perquè una de les versions ha estat '''esborrada'''.
Potser trobareu detalls al [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} registre d'esborrats].",
'rev-suppressed-no-diff' => "No podeu veure aquesta diferència perquè una de les revisions ha estat '''esborrada'''.",
'rev-deleted-unhide-diff' => "Una de les revisions d'aquesta comparativa ha estat '''eliminada'''.
Potser trobareu detalls al [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} registre d'esborrats].
Encara podeu [$1 veure aquesta comparativa] si així ho desitgeu.",
'rev-suppressed-unhide-diff' => "Una de les revisions d'aquesta comparativa ha estat '''esborrada'''.
Podeu veure'n més detalls al [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} registre de supressions].
Podeu seguir [$1 veient aquesta comparativa] si així ho desitgeu.",
'rev-deleted-diff-view' => "Una de les revisions d'aquesta comparativa ha estat '''esborrada'''.
Podeu veure aquesta comparativa; poden haver-hi més detalls al [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} registre d'esborraments].",
'rev-suppressed-diff-view' => "Una de les revisions d'aquesta comparativa ha estat '''esborrada'''.
Podeu veure aquesta comparativa; pot haver-hi més detalls al [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} registre de supressions].",
'rev-delundel' => 'mostra/amaga',
'rev-showdeleted' => 'mostra',
'revisiondelete' => 'Esborrar/restaurar revisions',
'revdelete-nooldid-title' => 'La revisió objectiu no és vàlida',
'revdelete-nooldid-text' => "No heu especificat unes revisions objectius per a realitzar aquesta
funció, la revisió especificada no existeix, o bé esteu provant d'amagar l'actual revisió.",
'revdelete-nologtype-title' => "No s'ha donat el tipus de registre",
'revdelete-nologtype-text' => 'No heu especificat un tipus de registre on dur a terme aquesta acció.',
'revdelete-nologid-title' => 'Entrada de registre no vàlida',
'revdelete-nologid-text' => 'Heu especificat un esdeveniment del registre que no existeix o al que no se li pot aplicar aquesta funció.',
'revdelete-no-file' => 'El fitxer especificat no existeix.',
'revdelete-show-file-confirm' => 'Esteu segurs que voleu veure una revisió esborrada del fitxer «<nowiki>$1</nowiki>» de $2 a $3?',
'revdelete-show-file-submit' => 'Sí',
'revdelete-selected' => "'''{{PLURAL:$2|Revisió seleccionada|Revisions seleccionades}} de [[:$1]]:'''",
'logdelete-selected' => "'''{{PLURAL:$1|Esdeveniment del registre seleccionat|Esdeveniments del registre seleccionats}}:'''",
'revdelete-text' => "'''Les revisions esborrades es mostraran encara als historials de les pàgines i als registres, si bé part del seu contingut serà inaccessible al públic.'''
Els altres administradors de {{SITENAME}} encara podran accedir al contingut amagat i restituir-lo de nou mitjançant aquesta mateixa interfície, si no hi ha cap altra restricció addicional.",
'revdelete-confirm' => "Si us plau, confirmeu que és això el que desitgeu fer, que enteneu les conseqüències, i que esteu fent-ho d'acord amb [[{{MediaWiki:Policy-url}}|les polítiques acordades]].",
'revdelete-suppress-text' => "Les supressions '''només''' han de ser portades a terme en els següents casos:
* Informació personal inapropiada
*: ''adreces personals, números de telèfon, números de la seguretat social, etc.''",
'revdelete-legend' => 'Defineix restriccions en la visibilitat',
'revdelete-hide-text' => 'Amaga el text de revisió',
'revdelete-hide-image' => 'Amaga el contingut del fitxer',
'revdelete-hide-name' => "Acció d'amagar i objectiu",
'revdelete-hide-comment' => "Amaga el comentari de l'edició",
'revdelete-hide-user' => "Amaga el nom d'usuari o la IP de l'editor",
'revdelete-hide-restricted' => 'Suprimir les dades als administradors així com a la resta.',
'revdelete-radio-same' => '(no modificar)',
'revdelete-radio-set' => 'Si',
'revdelete-radio-unset' => 'No',
'revdelete-suppress' => 'Suprimeix també les dades dels administradors',
'revdelete-unsuppress' => 'Suprimir les restriccions de les revisions restaurades',
'revdelete-log' => 'Motiu:',
'revdelete-submit' => 'Aplica a {{PLURAL:$1|la revisió seleccionada|les revisions seleccionades}}',
'revdelete-success' => "'''La visibilitat d'aquesta revisió s'ha actualitzat correctament.'''",
'revdelete-failure' => "'''La visibilitat de la revisió no ha pogut actualitzar-se:'''
$1",
'logdelete-success' => "'''S'ha establert correctament la visibilitat d'aquest element.'''",
'logdelete-failure' => "'''No s'ha pogut establir la visibilitat del registre:'''
$1",
'revdel-restore' => "Canvia'n la visibilitat",
'revdel-restore-deleted' => 'revisions esborrades',
'revdel-restore-visible' => 'revisions visibles',
'pagehist' => 'Historial',
'deletedhist' => "Historial d'esborrat",
'revdelete-hide-current' => "Error en amagar l'edició del $1 a les $2: és la revisió actual.
No es pot amagar.",
'revdelete-show-no-access' => "Error en mostrar l'element del $1 a les $2: està marcat com a ''restringit''.
No hi tens accés.",
'revdelete-modify-no-access' => "Error en modificar l'element del $1 a les $2: aquest element ha estat marcat com a ''restringit''.
No hi tens accés.",
'revdelete-modify-missing' => "Error en modificar l'element ID $1: no figura a la base de dades!",
'revdelete-no-change' => "'''Atenció:''' la revisió del $1 a les $2 ja té les restriccions de visibilitat sol·licitades.",
'revdelete-concurrent-change' => "Error en modificar l'element del $1 a les $2: el seu estat sembla haver estat canviat per algú altre quan intentaves modificar-lo.
Si us plau, verifica els registres.",
'revdelete-only-restricted' => 'Error amagant els ítems $2, $1: no pots suprimir elements a la vista dels administradors sense seleccionar alhora una de les altres opcions de supressió.',
'revdelete-reason-dropdown' => "*Raons d'esborrament comunes
** Violació del copyright
** Comentari o informació personal inapropiada
** Nom d'usuari inapropiat
** Informació potencialment calumniosa",
'revdelete-otherreason' => 'Altre motiu / motiu suplementari:',
'revdelete-reasonotherlist' => 'Altres raons',
'revdelete-edit-reasonlist' => "Editar el motiu d'esborrament",
'revdelete-offender' => 'Autor de la revisió:',

# Suppression log
'suppressionlog' => 'Registre de supressió',
'suppressionlogtext' => 'A continuació es mostra una llista de les supressions i blocs que impliquen contingut ocult per administradors.
Veure la [[Special:BlockList|llista de bloqueigs]] per a la llista de prohibicions actualment operatives i bloqueigs.',

# History merging
'mergehistory' => 'Fusiona els historials de les pàgines',
'mergehistory-header' => "Aquesta pàgina us permet fusionar les revisions de l'historial d'una pàgina origen en una més nova.
Assegureu-vos que aquest canvi mantindrà la continuïtat històrica de la pàgina.",
'mergehistory-box' => 'Fusiona les revisions de dues pàgines:',
'mergehistory-from' => "Pàgina d'origen:",
'mergehistory-into' => 'Pàgina de destinació:',
'mergehistory-list' => "Historial d'edició que es pot fusionar",
'mergehistory-merge' => "Les revisions següents de [[:$1]] poden fusionar-se en [[:$2]]. Feu servir la columna de botó d'opció per a fusionar només les revisions creades en el moment especificat o anteriors. Teniu en comptes que els enllaços de navegació reiniciaran aquesta columna.",
'mergehistory-go' => 'Mostra les edicions que es poden fusionar',
'mergehistory-submit' => 'Fusiona les revisions',
'mergehistory-empty' => 'No pot fusionar-se cap revisió.',
'mergehistory-success' => "$3 {{PLURAL:$3|revisió|revisions}} de [[:$1]] s'han fusionat amb èxit a [[:$2]].",
'mergehistory-fail' => "No s'ha pogut realitzar la fusió de l'historial, comproveu la pàgina i els paràmetres horaris.",
'mergehistory-no-source' => "La pàgina d'origen $1 no existeix.",
'mergehistory-no-destination' => 'La pàgina de destinació $1 no existeix.',
'mergehistory-invalid-source' => "La pàgina d'origen ha de tenir un títol vàlid.",
'mergehistory-invalid-destination' => 'La pàgina de destinació ha de tenir un títol vàlid.',
'mergehistory-autocomment' => '[[:$1]] fusionat en [[:$2]]',
'mergehistory-comment' => '[[:$1]] fusionat en [[:$2]]: $3',
'mergehistory-same-destination' => "Les pàgines d'origen i de destinació no poden ser la mateixa",
'mergehistory-reason' => 'Motiu:',

# Merge log
'mergelog' => 'Registre de fusions',
'pagemerge-logentry' => "s'ha fusionat [[$1]] en [[$2]] (revisions fins a $3)",
'revertmerge' => 'Desfusiona',
'mergelogpagetext' => "A sota hi ha una llista de les fusions més recents d'una pàgina d'historial en una altra.",

# Diffs
'history-title' => '$1: Historial de revisions',
'difference-title' => '$1: Diferència entre les revisions',
'difference-title-multipage' => '$1 i $2: Diferència entre les pàgines',
'difference-multipage' => '(Diferència entre pàgines)',
'lineno' => 'Línia $1:',
'compareselectedversions' => 'Compara les versions seleccionades',
'showhideselectedversions' => 'Mostra/oculta les versions seleccionades',
'editundo' => 'desfés',
'diff-multi' => '({{PLURAL:$1|Hi ha una revisió intermèdia |Hi ha $1 revisions intermèdies}} sense mostrar fetes per {{PLURAL:$2|un usuari|$2 usuaris}})',
'diff-multi-manyusers' => "({{PLURAL:$1|Hi ha una revisió intermèdia|Hi ha $1 revisions intermèdies}} sense mostrar fetes per més {{PLURAL:$2|d'un usuari|de $2 usuaris}})",
'difference-missing-revision' => "{{PLURAL:$2|Una revisió|$2 revisions}} d'aquesta diferència ($1) no {{PLURAL:$2|s'ha|s'han}} trobat.

Això passa generalment en seguir un enllaç obsolet de diferències a una pàgina que ha estat esborrada.
Es pot trobar més informació en el [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} registre de supressions].",

# Search results
'searchresults' => 'Resultats de la cerca',
'searchresults-title' => 'Resultats de la recerca de «$1»',
'searchresulttext' => 'Per a més informació de les cerques del projecte {{SITENAME}}, aneu a [[{{MediaWiki:Helppage}}|{{int:help}}]].',
'searchsubtitle' => "Heu cercat '''[[:$1]]'''  ([[Special:Prefixindex/$1|totes les pàgines que comencen amb «$1»]]{{int:pipe-separator}}[[Special:WhatLinksHere/$1|totes les pàgines que enllacen amb «$1»]])",
'searchsubtitleinvalid' => "Heu cercat '''$1'''",
'toomanymatches' => "S'han retornat masses coincidències. Proveu-ho amb una consulta diferent.",
'titlematches' => 'Coincidències de títol de la pàgina',
'notitlematches' => 'No hi ha cap coincidència de títol de pàgina',
'textmatches' => 'Coincidències de text de pàgina',
'notextmatches' => 'No hi ha cap coincidència de text de pàgina',
'prevn' => 'anteriors {{PLURAL:$1|$1}}',
'nextn' => 'següents {{PLURAL:$1|$1}}',
'prevn-title' => '$1 {{PLURAL:$1|resultat|resultats}} anteriors',
'nextn-title' => '$1 {{PLURAL:$1|resultat|resultats}} següents',
'shown-title' => 'Mostra $1 {{PLURAL:$1|resultat|resultats}} per pàgina',
'viewprevnext' => 'Vés a ($1 {{int:pipe-separator}} $2) ($3).',
'searchmenu-legend' => 'Opcions de cerca',
'searchmenu-exists' => "'''Hi ha una pàgina anomenada «[[:$1]]» en aquest wiki'''",
'searchmenu-new' => "'''Creeu la pàgina «[[:$1]]» en aquest wiki!'''",
'searchhelp-url' => 'Help:Ajuda',
'searchmenu-prefix' => '[[Special:PrefixIndex/$1|Mostra pàgines amb aquest prefix]]',
'searchprofile-articles' => 'Pàgines de contingut',
'searchprofile-project' => "Pàgines d'ajuda i de projecte",
'searchprofile-images' => 'Multimèdia',
'searchprofile-everything' => 'Tot',
'searchprofile-advanced' => 'Avançat',
'searchprofile-articles-tooltip' => 'Cerca a $1',
'searchprofile-project-tooltip' => 'Cerca a $1',
'searchprofile-images-tooltip' => 'Cerca fitxers',
'searchprofile-everything-tooltip' => "Cerca tot tipus de contingut (s'hi inclouen pàgines de discussió)",
'searchprofile-advanced-tooltip' => 'Cerca als espais de noms predefinits',
'search-result-size' => '$1 ({{PLURAL:$2|1 paraula|$2 paraules}})',
'search-result-category-size' => '{{PLURAL:$1|1 membre|$1 membres}} ({{PLURAL:$2|1 subcategoria|$2 subcategories}}, {{PLURAL:$3|1 fitxer|$3 fitxers}})',
'search-result-score' => 'Rellevància: $1%',
'search-redirect' => '(redirigit des de $1)',
'search-section' => '(secció $1)',
'search-suggest' => 'Volíeu dir: $1',
'search-interwiki-caption' => 'Projectes germans',
'search-interwiki-default' => '$1 resultats:',
'search-interwiki-more' => '(més)',
'search-relatedarticle' => 'Relacionat',
'mwsuggest-disable' => 'Inhabilita els suggeriments en AJAX',
'searcheverything-enable' => 'Cerca a tots els espais de noms',
'searchrelated' => 'relacionat',
'searchall' => 'tots',
'showingresults' => 'Tot seguit es {{PLURAL:$1|mostra el resultat|mostren els <b>$1</b> resultats començant pel número <b>$2</b>}}.',
'showingresultsnum' => 'Tot seguit es {{PLURAL:$3|llista el resultat|llisten els <b>$3</b> resultats començant pel número <b>$2</b>}}.',
'showingresultsheader' => "{{PLURAL:$5|Resultat '''$1''' de '''$3'''|Resultats '''$1 - $2''' de '''$3'''}} per '''$4'''",
'nonefound' => "'''Nota''': Només se cerca en alguns espais de noms per defecte. Proveu d'afegir el prefix ''all:'' a la vostra consulta per a cercar a tot el contingut (incloent-hi les pàgines de discussió, les plantilles, etc.), o feu servir l'espai de noms on vulgueu cercar com a prefix.",
'search-nonefound' => 'La cerca no ha donat cap resultat.',
'powersearch' => 'Cerca avançada',
'powersearch-legend' => 'Cerca avançada',
'powersearch-ns' => 'Cerca als espais de noms:',
'powersearch-redir' => 'Mostra redireccions',
'powersearch-field' => 'Cerca',
'powersearch-togglelabel' => 'Activar:',
'powersearch-toggleall' => 'Tots',
'powersearch-togglenone' => 'Cap',
'search-external' => 'Cerca externa',
'searchdisabled' => 'La cerca dins el projecte {{SITENAME}} està inhabilitada. Mentrestant, podeu cercar a través de Google, però tingueu en compte que la seua base de dades no estarà actualitzada.',

# Quickbar
'qbsettings' => 'Quickbar',
'qbsettings-none' => 'Cap',
'qbsettings-fixedleft' => "Fixa a l'esquerra",
'qbsettings-fixedright' => 'Fixa a la dreta',
'qbsettings-floatingleft' => "Surant a l'esquerra",
'qbsettings-floatingright' => 'Surant a la dreta',
'qbsettings-directionality' => "Fix, segons la direcció d'escriptura del vostre idioma",

# Preferences page
'preferences' => 'Preferències',
'mypreferences' => 'Preferències',
'prefs-edits' => "Nombre d'edicions:",
'prefsnologin' => 'No heu iniciat cap sessió',
'prefsnologintext' => 'Heu d\'estar <span class="plainlinks">[{{fullurl:{{#Special:UserLogin}}|returnto=$1}} autenticats]</span> per a seleccionar les preferències d\'usuari.',
'changepassword' => 'Canvia la contrasenya',
'prefs-skin' => 'Aparença',
'skin-preview' => 'prova',
'datedefault' => 'Cap preferència',
'prefs-beta' => 'Característiques beta',
'prefs-datetime' => 'Data i hora',
'prefs-labs' => 'Característiques de laboratori',
'prefs-user-pages' => "Pàgines d'usuari",
'prefs-personal' => "Perfil d'usuari",
'prefs-rc' => 'Canvis recents',
'prefs-watchlist' => 'Llista de seguiment',
'prefs-watchlist-days' => 'Nombre de dies per mostrar en la llista de seguiment:',
'prefs-watchlist-days-max' => 'Màxim $1 {{PLURAL:$1|dia|dies}}',
'prefs-watchlist-edits' => 'Nombre de modificacions a mostrar en una llista estesa de seguiment:',
'prefs-watchlist-edits-max' => 'Nombre màxim: 1000',
'prefs-watchlist-token' => 'Fitxa de llista de seguiment:',
'prefs-misc' => 'Altres preferències',
'prefs-resetpass' => 'Canvia la contrasenya',
'prefs-changeemail' => 'Canvia de correu electrònic',
'prefs-setemail' => 'Indiqueu una adreça de correu electrònic',
'prefs-email' => 'Opcions de correu electrònic',
'prefs-rendering' => 'Aparença',
'saveprefs' => 'Desa les preferències',
'resetprefs' => 'Esborra els canvis no guardats',
'restoreprefs' => 'Restaura les preferències per defecte',
'prefs-editing' => "Caixa d'edició",
'prefs-edit-boxsize' => "Mida de la finestra d'edició.",
'rows' => 'Files',
'columns' => 'Columnes',
'searchresultshead' => 'Preferències de la cerca',
'resultsperpage' => 'Resultats a mostrar per pàgina',
'stub-threshold' => 'Límit per a formatar l\'enllaç com <a href="#" class="stub">esborrany</a> (en octets):',
'stub-threshold-disabled' => 'Deshabilitat',
'recentchangesdays' => 'Dies a mostrar en els canvis recents:',
'recentchangesdays-max' => '(màxim $1 {{PLURAL:$1|dia|dies}})',
'recentchangescount' => "Nombre d'edicions a mostrar per defecte:",
'prefs-help-recentchangescount' => 'Inclou els canvis recents, els historials de pàgines i els registres.',
'prefs-help-watchlist-token' => 'Si ompliu aquest camp amb una clau secreta es generarà un fil RSS per a la vostra llista de seguiment.
Aquell qui conegui aquesta clau serà capaç de llegir la vostra llista de seguiment, per tant esculliu un valor segur.
A continuació es mostra un valor generat de forma aleatòria que podeu fer servir: $1',
'savedprefs' => "S'han desat les vostres preferències",
'timezonelegend' => 'Fus horari:',
'localtime' => 'Hora local:',
'timezoneuseserverdefault' => "Utilitza l'hora per defecte del wiki ($1)",
'timezoneuseoffset' => 'Altres (especifiqueu la diferència)',
'timezoneoffset' => 'Diferència¹:',
'servertime' => 'Hora del servidor:',
'guesstimezone' => 'Omple-ho des del navegador',
'timezoneregion-africa' => 'Àfrica',
'timezoneregion-america' => 'Amèrica',
'timezoneregion-antarctica' => 'Antàrtida',
'timezoneregion-arctic' => 'Àrtic',
'timezoneregion-asia' => 'Àsia',
'timezoneregion-atlantic' => 'Oceà Atlàntic',
'timezoneregion-australia' => 'Austràlia',
'timezoneregion-europe' => 'Europa',
'timezoneregion-indian' => 'Oceà Índic',
'timezoneregion-pacific' => 'Oceà Pacífic',
'allowemail' => 'Permet que altres usuaris puguin enviar-me correus electrònics',
'prefs-searchoptions' => 'Cerca',
'prefs-namespaces' => 'Espais de noms',
'defaultns' => 'Cerca per defecte en els següents espais de noms:',
'default' => 'per defecte',
'prefs-files' => 'Fitxers',
'prefs-custom-css' => 'CSS personalitzat',
'prefs-custom-js' => 'JS personalitzat',
'prefs-common-css-js' => 'CSS/JS compartit per tots els skins:',
'prefs-reset-intro' => 'Podeu usar aquesta pàgina per a restablir les vostres preferències als valors per defecte.
No es podrà desfer el canvi.',
'prefs-emailconfirm-label' => 'Confirmació de correu electrònic:',
'prefs-textboxsize' => "Mida de la caixa d'edició",
'youremail' => 'Correu electrònic:',
'username' => "Nom d'usuari:",
'uid' => "Identificador d'usuari:",
'prefs-memberingroups' => 'Membre dels {{PLURAL:$1|grup|grups}}:',
'prefs-registration' => 'Hora de registre:',
'yourrealname' => 'Nom real *',
'yourlanguage' => 'Idioma:',
'yourvariant' => 'Variant lingüística:',
'prefs-help-variant' => "La variant lingüística o ortogràfica que preferiu a l'hora de mostrar el contingut d'aquest wiki.",
'yournick' => 'Signatura:',
'prefs-help-signature' => "Els comentaris a les pàgines d'usuari s'han de signar amb \"<nowiki>~~~~</nowiki>\", que serà convertit en la vostra signatura i la data i l'hora.",
'badsig' => 'La signatura que heu inserit no és vàlida; verifiqueu les etiquetes HTML que heu emprat.',
'badsiglength' => 'La signatura és massa llarga.
Ha de tenir com a molt {{PLURAL:$1|un caràcter|$1 caràcters}}.',
'yourgender' => 'Sexe:',
'gender-unknown' => 'No especificat',
'gender-male' => 'Masculí',
'gender-female' => 'Femení',
'prefs-help-gender' => "Opcional: s'usa perquè el programari se us adreci amb missatges amb el gènere adient. Aquesta informació serà pública.",
'email' => 'Correu electrònic',
'prefs-help-realname' => "* Nom real (opcional): si escolliu donar aquesta informació serà utilitzada per a donar-vos l'atribució de la vostra feina.",
'prefs-help-email' => "L'adreça electrònica és opcional, però permet l'enviament d'una nova contrasenya en cas que oblideu l'actual.",
'prefs-help-email-others' => 'També podeu optar per deixar que els altres contactin amb vós a través de la pàgina personal de discussió, sense necessitat de desvetllar la vostra identitat.',
'prefs-help-email-required' => 'Cal una adreça de correu electrònic.',
'prefs-info' => 'Informació bàsica',
'prefs-i18n' => 'Internacionalització',
'prefs-signature' => 'Signatura',
'prefs-dateformat' => 'Format de la data',
'prefs-timeoffset' => 'Decalatge horari',
'prefs-advancedediting' => 'Opcions avançades',
'prefs-advancedrc' => 'Opcions avançades',
'prefs-advancedrendering' => 'Opcions avançades',
'prefs-advancedsearchoptions' => 'Opcions avançades',
'prefs-advancedwatchlist' => 'Opcions avançades',
'prefs-displayrc' => "Opcions d'aparença",
'prefs-displaysearchoptions' => 'Opcions de visualització',
'prefs-displaywatchlist' => 'Opcions de visualització',
'prefs-diffs' => 'Difs',

# User preference: e-mail validation using jQuery
'email-address-validity-valid' => "L'adreça de correu electrònic sembla vàlida",
'email-address-validity-invalid' => 'Escriviu una adreça vàlida de correu electrònic',

# User rights
'userrights' => "Gestió dels permisos d'usuari",
'userrights-lookup-user' => "Gestiona els grups d'usuari",
'userrights-user-editname' => "Introduïu un nom d'usuari:",
'editusergroup' => "Edita els grups d'usuaris",
'editinguser' => "S'està canviant els permisos de l'usuari '''[[User:$1|$1]]''' $2",
'userrights-editusergroup' => "Edita els grups d'usuaris",
'saveusergroups' => "Desa els grups d'usuari",
'userrights-groupsmember' => 'Membre de:',
'userrights-groupsmember-auto' => 'Membre implícit de:',
'userrights-groups-help' => "Podeu modificar els grups als quals pertany aquest usuari.
* Els requadres marcats indiquen que l'usuari és dins del grup.
* Els requadres sense marcar indiquen que l'usuari no hi pertany.
* Un asterisc (*) indica que no el podreu treure del grup una vegada l'hàgiu afegit o viceversa.",
'userrights-reason' => 'Motiu:',
'userrights-no-interwiki' => "No teniu permisos per a editar els permisos d'usuari d'altres wikis.",
'userrights-nodatabase' => 'La base de dades $1 no existeix o no és local.',
'userrights-nologin' => "Heu [[Special:UserLogin|d'iniciar una sessió]] amb un compte d'administrador per a poder assignar permisos d'usuari.",
'userrights-notallowed' => "El vostre compte no té permisos per a assignar o desassignar permisos d'usuari.",
'userrights-changeable-col' => 'Grups que podeu canviar',
'userrights-unchangeable-col' => 'Grups que no podeu canviar',

# Groups
'group' => 'Grup:',
'group-user' => 'Usuaris',
'group-autoconfirmed' => 'Usuaris autoconfirmats',
'group-bot' => 'Bots',
'group-sysop' => 'Administradors',
'group-bureaucrat' => 'Buròcrates',
'group-suppress' => 'Oversights',
'group-all' => '(tots)',

'group-user-member' => '{{GENDER:$1|usuari|usuària}}',
'group-autoconfirmed-member' => '{{GENDER:$1|usuari autoconfirmat|usuària autoconfirmada}}',
'group-bot-member' => '{{GENDER:$1|bot}}',
'group-sysop-member' => '{{GENDER:$1|administrador|administradora}}',
'group-bureaucrat-member' => '{{GENDER:$1|buròcrata}}',
'group-suppress-member' => '{{GENDER:$1|supervisió}}',

'grouppage-user' => '{{ns:project}}:Usuaris',
'grouppage-autoconfirmed' => '{{ns:project}}:Usuaris autoconfirmats',
'grouppage-bot' => '{{ns:project}}:Bots',
'grouppage-sysop' => '{{ns:project}}:Administradors',
'grouppage-bureaucrat' => '{{ns:project}}:Buròcrates',
'grouppage-suppress' => '{{ns:project}}:Oversight',

# Rights
'right-read' => 'Llegir pàgines',
'right-edit' => 'Modificar pàgines',
'right-createpage' => 'Crear pàgines (que no són de discussió)',
'right-createtalk' => 'Crear pàgines de discussió',
'right-createaccount' => 'Crear nous comptes',
'right-minoredit' => 'Marcar les edicions com a menors',
'right-move' => 'Moure pàgines',
'right-move-subpages' => 'Moure pàgines amb les seves subpàgines',
'right-move-rootuserpages' => "Reanomenar la pàgina principal d'un usuari",
'right-movefile' => 'Moure fitxers',
'right-suppressredirect' => 'No crear redireccions quan es reanomena una pàgina',
'right-upload' => 'Carregar fitxers',
'right-reupload' => "Carregar al damunt d'un fitxer existent",
'right-reupload-own' => "Carregar al damunt d'un fitxer que havia carregat el propi usuari",
'right-reupload-shared' => 'Carregar localment fitxers amb un nom usat en el repostori multimèdia compartit',
'right-upload_by_url' => "Carregar un fitxer des de l'adreça URL",
'right-purge' => 'Purgar la memòria cau del lloc web sense pàgina de confirmació',
'right-autoconfirmed' => 'Modificar pàgines semi-protegides',
'right-bot' => 'Ésser tractat com a procés automatitzat',
'right-nominornewtalk' => "Que les modificacions menors que facin en pàgines de discussió d'usuari no generin l'avís de nous missatges",
'right-apihighlimits' => "Tenir límits més alts en les consultes a l'API",
'right-writeapi' => "Fer servir l'escriptura a l'API",
'right-delete' => 'Esborrar pàgines',
'right-bigdelete' => 'Esborrar pàgines amb historials grans',
'right-deletelogentry' => "Suprimeix o desfés la supressió d'entrades de registre específiques",
'right-deleterevision' => 'Esborrar i restaurar versions específiques de pàgines',
'right-deletedhistory' => 'Veure els historials esborrats sense consultar-ne el text',
'right-deletedtext' => 'Veure el text esborrat i els canvis entre revisions esborrades',
'right-browsearchive' => 'Cercar pàgines esborrades',
'right-undelete' => 'Restaurar pàgines esborrades',
'right-suppressrevision' => 'Revisar i restaurar les versions amagades als administradors',
'right-suppressionlog' => 'Veure registres privats',
'right-block' => "Blocar altres usuaris per a impedir-los l'edició",
'right-blockemail' => 'Impedir que un usuari envii correu electrònic',
'right-hideuser' => "Blocar un nom d'usuari amagant-lo del públic",
'right-ipblock-exempt' => "Evitar blocatges d'IP, de rang i automàtics",
'right-proxyunbannable' => 'Evitar els blocatges automàtics a proxies',
'right-unblockself' => 'Desblocar-se a si mateixos',
'right-protect' => 'Canviar el nivell de protecció i modificar pàgines protegides',
'right-editprotected' => 'Editar pàgines protegides (sense protecció de cascada)',
'right-editinterface' => "Editar la interfície d'usuari",
'right-editusercssjs' => "Editar els fitxers de configuració CSS i JS d'altres usuaris",
'right-editusercss' => "Editar els fitxers de configuració CSS d'altres usuaris",
'right-edituserjs' => "Editar els fitxers de configuració JS d'altres usuaris",
'right-rollback' => "Revertir ràpidament l'últim editor d'una pàgina particular",
'right-markbotedits' => 'Marcar les reversions com a edicions de bot',
'right-noratelimit' => "No veure's afectat pels límits d'accions",
'right-import' => "Importar pàgines d'altres wikis",
'right-importupload' => "Importar pàgines carregant-les d'un fitxer",
'right-patrol' => 'Marcar com a patrullades les edicions',
'right-autopatrol' => 'Que les edicions pròpies es marquin automàticament com a patrullades',
'right-patrolmarks' => 'Veure les marques de patrulla als canvis recents',
'right-unwatchedpages' => 'Veure la llista de les pàgines no vigilades',
'right-mergehistory' => "Fusionar l'historial de les pàgines",
'right-userrights' => 'Editar els drets dels usuaris',
'right-userrights-interwiki' => "Editar els drets dels usuaris d'altres wikis",
'right-siteadmin' => 'Blocar i desblocar la base de dades',
'right-override-export-depth' => 'Exportar pàgines incloent aquelles enllaçades fins a una fondària de 5',
'right-sendemail' => 'Enviar missatges de correu electrònic a altres usuaris',
'right-passwordreset' => 'Veure les soŀlicituds de restabliment de contrasenya per correu electrònic',

# User rights log
'rightslog' => "Registre dels permisos d'usuari",
'rightslogtext' => "Aquest és un registre de canvis dels permisos d'usuari.",
'rightslogentry' => 'ha modificat els drets de $1 del grup $2 a $3',
'rightslogentry-autopromote' => 'ha estat promogut automàticament de $2 a $3',
'rightsnone' => '(cap)',

# Associated actions - in the sentence "You do not have permission to X"
'action-read' => 'llegir aquesta pàgina',
'action-edit' => 'modificar aquesta pàgina',
'action-createpage' => 'crear pàgines',
'action-createtalk' => 'crear pàgines de discussió',
'action-createaccount' => "crear aquest compte d'usuari",
'action-minoredit' => 'marcar aquesta modificació com a menor',
'action-move' => 'moure aquesta pàgina',
'action-move-subpages' => 'moure aquesta pàgina, i llurs subpàgines',
'action-move-rootuserpages' => "reanomenar la pàgina principal d'un usuari",
'action-movefile' => 'moure aquest fitxer',
'action-upload' => 'carregar aquest fitxer',
'action-reupload' => 'substituir aquest fitxer',
'action-reupload-shared' => 'substituir aquest fitxer en un dipòsit compartit',
'action-upload_by_url' => "carregar aquest fitxer des d'una adreça URL",
'action-writeapi' => "fer servir l'API d'escriptura",
'action-delete' => 'esborrar aquesta pàgina',
'action-deleterevision' => 'esborrar aquesta revisió',
'action-deletedhistory' => "visualitzar l'historial esborrat d'aquesta pàgina",
'action-browsearchive' => 'cercar pàgines esborrades',
'action-undelete' => 'recuperar aquesta pàgina',
'action-suppressrevision' => 'revisar i recuperar aquesta revisió oculta',
'action-suppressionlog' => 'visualitzar aquest registre privat',
'action-block' => 'blocar aquest usuari per a què no pugui editar',
'action-protect' => "canviar els nivells de protecció d'aquesta pàgina",
'action-rollback' => "desfer ràpidament les modificacions de l'últim usuari que va editar una determinada pàgina",
'action-import' => "importar aquesta pàgina des d'un altre wiki",
'action-importupload' => "importar aquesta pàgina mitjançant la càrrega des d'un fitxer",
'action-patrol' => 'marcar les edicions dels altres com a supervisades',
'action-autopatrol' => 'marcar les vostres edicions com a supervisades',
'action-unwatchedpages' => 'visualitzar la llista de pàgines no vigilades',
'action-mergehistory' => "fusionar l'historial d'aquesta pàgina",
'action-userrights' => "modificar tots els permisos d'usuari",
'action-userrights-interwiki' => "modificar permisos d'usuari en altres wikis",
'action-siteadmin' => 'bloquejar o desbloquejar la base de dades',
'action-sendemail' => 'envia missatges de correu',

# Recent changes
'nchanges' => '$1 {{PLURAL:$1|canvi|canvis}}',
'recentchanges' => 'Canvis recents',
'recentchanges-legend' => 'Opcions de canvis recents',
'recentchanges-summary' => 'Seguiu els canvis recents del projecte {{SITENAME}} en aquesta pàgina.',
'recentchanges-feed-description' => 'Segueix en aquest canal els canvis més recents del wiki.',
'recentchanges-label-newpage' => 'Aquesta modificació inicià una pàgina',
'recentchanges-label-minor' => 'Aquesta és una modificació menor',
'recentchanges-label-bot' => 'Aquesta modificació fou feta per un bot',
'recentchanges-label-unpatrolled' => 'Aquesta modificació encara no ha estat patrullada',
'rcnote' => 'A continuació hi ha {{PLURAL:$1|el darrer canvi|els darrers <strong>$1</strong> canvis}} en {{PLURAL:$2|el darrer dia|els darrers <strong>$2</strong> dies}}, actualitzats a les $5 del $4.',
'rcnotefrom' => 'A sota hi ha els canvis des de <b>$2</b> (es mostren fins <b>$1</b>).',
'rclistfrom' => 'Mostra els canvis nous des de $1',
'rcshowhideminor' => '$1 edicions menors',
'rcshowhidebots' => '$1 bots',
'rcshowhideliu' => '$1 usuaris identificats',
'rcshowhideanons' => '$1 usuaris anònims',
'rcshowhidepatr' => '$1 edicions supervisades',
'rcshowhidemine' => '$1 edicions pròpies',
'rclinks' => 'Mostra els darrers $1 canvis en els darrers $2 dies<br />$3',
'diff' => 'dif',
'hist' => 'hist',
'hide' => 'amaga',
'show' => 'mostra',
'minoreditletter' => 'm',
'newpageletter' => 'N',
'boteditletter' => 'b',
'number_of_watching_users_pageview' => '[{{PLURAL:$1|Un usuari vigila|$1 usuaris vigilen}} aquesta pàgina]',
'rc_categories' => 'Limita a les categories (separades amb "|")',
'rc_categories_any' => 'Qualsevol',
'rc-change-size-new' => '$1 {{PLURAL:$1|byte|bytes}} després del canvi',
'newsectionsummary' => '/* $1 */ secció nova',
'rc-enhanced-expand' => 'Mostra detalls (requereix JavaScript)',
'rc-enhanced-hide' => 'Amagar detalls',
'rc-old-title' => 'originàriament creada com «$1»',

# Recent changes linked
'recentchangeslinked' => "Seguiment d'enllaços",
'recentchangeslinked-feed' => 'Canvis relacionats',
'recentchangeslinked-toolbox' => "Seguiment d'enllaços",
'recentchangeslinked-title' => 'Canvis relacionats amb «$1»',
'recentchangeslinked-noresult' => 'No ha hagut cap canvi a les pàgines enllaçades durant el període de temps.',
'recentchangeslinked-summary' => "A continuació trobareu una llista dels canvis recents a les pàgines enllaçades des de la pàgina donada (o entre els membres d'una categoria especificada).
Les pàgines de la vostra [[Special:Watchlist|llista de seguiment]] apareixen en '''negreta'''.",
'recentchangeslinked-page' => 'Nom de la pàgina:',
'recentchangeslinked-to' => 'Mostra els canvis de les pàgines enllaçades amb la pàgina donada',

# Upload
'upload' => 'Carrega',
'uploadbtn' => 'Carrega un fitxer',
'reuploaddesc' => 'Torna al formulari per apujar.',
'upload-tryagain' => 'Envia la descripció del fitxer modificat',
'uploadnologin' => 'No heu iniciat una sessió',
'uploadnologintext' => "Heu d'[[Special:UserLogin|iniciar una sessió]]
per a penjar-hi fitxers.",
'upload_directory_missing' => "No s'ha trobat el directori de càrrega ($1) i tampoc no ha pogut ser creat pel servidor web.",
'upload_directory_read_only' => 'El servidor web no pot escriure al directori de càrrega ($1)',
'uploaderror' => "S'ha produït un error en l'intent de carregar",
'upload-recreate-warning' => "'''Atenció: S'ha eliminat o reanomenat un fitxer amb aquest mateix nom.'''

A continuació es mostren els registres de supressió i reanomenament d'aquesta pàgina:",
'uploadtext' => "Feu servir el formulari de sota per a carregar fitxers.
Per a visualitzar o cercar fitxers que s'hagen carregat prèviament, aneu a la [[Special:FileList|llista de fitxers carregats]]. Les càrregues es registren en el [[Special:Log/upload|registre de càrregues]] i els fitxers esborrats en el [[Special:Log/delete|registre d'esborrats]].

Per a incloure una imatge en una pàgina, feu un enllaç en una de les formes següents:
* '''<code><nowiki>[[</nowiki>{{ns:file}}<nowiki>:Fitxer.jpg]]</nowiki></code>''' per a usar la versió completa del fitxer;
* '''<code><nowiki>[[</nowiki>{{ns:file}}<nowiki>:Fitxer.png|200px|thumb|esquerra|text alternatiu]]</nowiki></code>''' per una presentació de 200 píxels d'amplada en un requadre justificat a l'esquerra amb «text alternatiu» com a descripció;
* '''<code><nowiki>[[</nowiki>{{ns:media}}<nowiki>:Fitxer.ogg]]</nowiki></code>''' per a enllaçar directament amb un fitxer de so.",
'upload-permitted' => 'Tipus de fitxer permesos: $1.',
'upload-preferred' => 'Tipus de fitxer preferits: $1.',
'upload-prohibited' => 'Tipus de fitxer prohibits: $1.',
'uploadlog' => 'registre de càrregues',
'uploadlogpage' => 'Registre de càrregues',
'uploadlogpagetext' => "A sota hi ha una llista dels fitxers que s'han carregat més recentment.
Vegeu la [[Special:NewFiles|galeria de nous fitxers]] per a una presentació més visual.",
'filename' => 'Nom de fitxer',
'filedesc' => 'Resum',
'fileuploadsummary' => 'Resum:',
'filereuploadsummary' => 'Canvis al fitxer:',
'filestatus' => "Situació dels drets d'autor:",
'filesource' => 'Font:',
'uploadedfiles' => 'Fitxers carregats',
'ignorewarning' => 'Ignora qualsevol avís i desa el fitxer igualment',
'ignorewarnings' => 'Ignora qualsevol avís',
'minlength1' => "Els noms de fitxer han de ser de com a mínim d'una lletra.",
'illegalfilename' => 'El nom del fitxer «$1» conté caràcters que no estan permesos en els títols de pàgines. Si us plau, canvieu el nom al fitxer i torneu a carregar-lo.',
'filename-toolong' => 'Els noms de fitxer no poden fer més de 240 bytes.',
'badfilename' => "El nom de la imatge s'ha canviat a «$1».",
'filetype-mime-mismatch' => "L'extensió de fitxer «.$1» no coincideix amb el tipus MIME del fitxer ($2).",
'filetype-badmime' => 'No es poden carregar fitxers del tipus MIME «$1».',
'filetype-bad-ie-mime' => 'No es pot carregar aquest fitxer perquè Internet Explorer el detectaria com a «$1», que és un tipus de fitxer prohibit i potencialment perillós.',
'filetype-unwanted-type' => "Els fitxers del tipus «'''.$1'''» no són desitjats. {{PLURAL:$3|Es prefereix el tipus de fitxer|Els tipus de fitxer preferits són}} $2.",
'filetype-banned-type' => "{{PLURAL:$4|Els fitxers del tipus «'''.$1'''»|Els fitxers dels tipus '''$1'''}} no estan permesos. {{PLURAL:$3|Només s'admeten els fitxers del tipus|Els tipus de fitxer permesos són}} $2.",
'filetype-missing' => 'El fitxer no té extensió (com ara «.jpg»).',
'empty-file' => 'El fitxer que heu tramès està buit.',
'file-too-large' => 'El fitxer que heu tramès és massa gran.',
'filename-tooshort' => 'El nom del fitxer és massa curt.',
'filetype-banned' => 'Aquest tipus de fitxer està prohibit.',
'verification-error' => 'Aquest fitxer no ha passat la verificació de fitxers.',
'hookaborted' => "La modificació que vau tractar de fer ha estat canceŀlada per un lligam d'extensió.",
'illegal-filename' => 'El nom del fitxer no està permès.',
'overwrite' => 'No es permet sobreescriure un fitxer existent.',
'unknown-error' => "S'ha produït un error desconegut.",
'tmp-create-error' => "No s'ha pogut crear el fitxer temporal.",
'tmp-write-error' => 'Error en escriure el fitxer temporal.',
'large-file' => 'Els fitxers importants no haurien de ser més grans de $1; aquest fitxer ocupa $2.',
'largefileserver' => 'Aquest fitxer és més gran del que el servidor permet.',
'emptyfile' => 'El fitxer que heu carregat sembla estar buit.
Açò por ser degut a un mal caràcter en el nom del fitxer.
Comproveu si realment voleu carregar aquest fitxer.',
'windows-nonascii-filename' => 'Aquest wiki no permet noms de fitxer amb caràcters especials.',
'fileexists' => 'Ja hi existeix un fitxer amb aquest nom, si us plau, verifiqueu <strong>[[:$1]]</strong> si no esteu segurs de voler substituir-lo.
[[$1|thumb]]',
'filepageexists' => "La pàgina de descripció d'aquest fitxer ja ha estat creada (<strong>[[:$1]]</strong>), però de moment no hi ha cap fitxer amb aquest nom. La descripció que heu posat no apareixerà a la pàgina de descripció. Si voleu que hi aparegui haureu d'editar-la manualment.
[[$1|thumb]]",
'fileexists-extension' => 'Ja existeix un fitxer amb un nom semblant: [[$2|thumb]]
* Nom del fitxer que es puja: <strong>[[:$1]]</strong>
* Nom del fitxer existent: <strong>[[:$2]]</strong>
Si us plau, trieu un nom diferent.',
'fileexists-thumbnail-yes' => 'Aquest fitxer sembla ser una imatge en mida reduïda (<em>miniatura</em>). [[$1|thumb]]
Comproveu si us plau el fitxer <strong>[[:$1]]</strong>.
Si el fitxer és la mateixa imatge a mida original, no cal carregar cap miniatura més.',
'file-thumbnail-no' => "El nom del fitxer comença per <strong>$1</strong>.
Sembla ser una imatge de mida reduïda ''(miniatura)''.
Si teniu la imatge en resolució completa, pugeu-la, sinó mireu de canviar-li el nom, si us plau.",
'fileexists-forbidden' => 'Ja hi existeix un fitxer amb aquest nom i no es pot sobreescriure.
Si us plau, torneu enrere i carregueu aquest fitxer sota un altre nom. [[File:$1|thumb|center|$1]]',
'fileexists-shared-forbidden' => 'Ja hi ha un fitxer amb aquest nom al fons comú de fitxers.
Si us plau, si encara desitgeu carregar el vostre fitxer, torneu enrera i carregueu-ne una còpia amb un altre nom. [[File:$1|thumb|center|$1]]',
'file-exists-duplicate' => 'Aquest fitxer és un duplicat {{PLURAL:$1|del fitxer |dels següents fitxers:}}',
'file-deleted-duplicate' => "Un fitxer idèntic a aquest ([[:$1]]) ha estat esborrat amb anterioritat. Hauríeu de comprovar el registre d'esborrat del fitxer abans de tornar-lo a carregar.",
'uploadwarning' => 'Avís de càrrega',
'uploadwarning-text' => 'Modifiqueu la descripció de la imatge i torneu a intentar-ho.',
'savefile' => 'Desa el fitxer',
'uploadedimage' => 'ha carregat [[$1]]',
'overwroteimage' => 'ha carregat una nova versió de «[[$1]]»',
'uploaddisabled' => "S'ha inhabilitat la càrrega",
'copyuploaddisabled' => 'Càrrega per URL deshabilitada.',
'uploadfromurl-queued' => "S'ha encuat la vostra càrrega.",
'uploaddisabledtext' => "S'ha inhabilitat la càrrega de fitxers.",
'php-uploaddisabledtext' => 'La càrrega de fitxer està desactivada al PHP. Comproveu les opcions del fitxer file_uploads.',
'uploadscripted' => 'Aquest fitxer conté codi HTML o de seqüències que pot ser interpretat equivocadament per un navegador.',
'uploadvirus' => 'El fitxer conté un virus! Detalls: $1',
'uploadjava' => 'El fitxer és un arxiu ZIP que conté un fitxer .class de Java. No està permesa la càrrega de fitxers Java, perquè poden passar per alt les restriccions de seguretat.',
'upload-source' => 'Fitxer font',
'sourcefilename' => 'Nom del fitxer font:',
'sourceurl' => "URL d'origen:",
'destfilename' => 'Nom del fitxer de destinació:',
'upload-maxfilesize' => 'Mida màxima de fitxer: $1',
'upload-description' => 'Descripció del fitxer',
'upload-options' => 'Opcions de càrrega',
'watchthisupload' => 'Vigila aquest fitxer',
'filewasdeleted' => "Prèviament es va carregar un fitxer d'aquest nom i després va ser esborrat. Hauríeu de verificar $1 abans de procedir a carregar-lo una altra vegada.",
'filename-bad-prefix' => "El nom del fitxer que esteu penjant comença amb '''«$1»''', que és un nom no descriptiu que les càmeres digitals normalment assignen de forma automàtica. Trieu un de més descriptiu per al vostre fitxer.",
'upload-success-subj' => "El fitxer s'ha carregat amb èxit",
'upload-success-msg' => 'El material carregat de [$2] està disponible ací: [[:{{ns:file}}:$1]]',
'upload-failure-subj' => 'Problema en la càrrega',
'upload-failure-msg' => 'Hi ha hagut un problema amb la vostra càrrega des de [$2]:

$1',
'upload-warning-subj' => 'Avís de càrrega',
'upload-warning-msg' => 'Hi ha hagut un problema amb la teva càrrega de [$2]. Pots tornar a [[Special:Upload/stash/$1|formulari de càrrega]] per corregir aquest problema.',

'upload-proto-error' => 'El protocol és incorrecte',
'upload-proto-error-text' => 'Per a les càrregues remotes cal que els URL comencin amb <code>http://</code> o <code>ftp://</code>.',
'upload-file-error' => "S'ha produït un error intern",
'upload-file-error-text' => "S'ha produït un error de càrrega desconegut quan s'intentava crear un fitxer temporal al servidor. Poseu-vos en contacte amb un [[Special:ListUsers/sysop|administrador]].",
'upload-misc-error' => "S'ha produït un error de càrrega desconegut",
'upload-misc-error-text' => "S'ha produït un error desconegut durant la càrrega. Verifiqueu que l'URL és vàlid i accessible, i torneu-ho a provar. Si el problema persisteix, adreceu-vos a un [[Special:ListUsers/sysop|administrador]].",
'upload-too-many-redirects' => 'La URL conté massa redireccions',
'upload-unknown-size' => 'Mida desconeguda',
'upload-http-error' => 'Ha ocorregut un error HTTP: $1',
'upload-copy-upload-invalid-domain' => "Les càrregues de còpia no són disponibles des d'aquest domini.",

# File backend
'backend-fail-stream' => "No s'ha pogut transmetre el fitxer $1.",
'backend-fail-backup' => "No s'ha pogut fer una còpia de seguretat del fitxer $1.",
'backend-fail-notexists' => 'El fitxer $1 no existeix.',
'backend-fail-hashes' => "No s'han pogut obtenir els resums dels fitxer per fer-ne comparació.",
'backend-fail-notsame' => 'Ja existeix un fitxer no idèntic a $1.',
'backend-fail-invalidpath' => "$1 no és un camí d'emmagatzemament vàlid.",
'backend-fail-delete' => "No s'ha pogut suprimir el fitxer $1.",
'backend-fail-alreadyexists' => 'El fitxer $1 ja existeix.',
'backend-fail-store' => "No s'ha pogut emmagatzemar el fitxer $1 a $2.",
'backend-fail-copy' => "No s'ha pogut copiar el fitxer $1 a $2.",
'backend-fail-move' => "No s'ha pogut moure el fitxer $1 a $2.",
'backend-fail-opentemp' => "No s'ha pogut obrir el fitxer temporal.",
'backend-fail-writetemp' => "No s'ha pogut escriure el fitxer temporal.",
'backend-fail-closetemp' => "No s'ha pogut tancar el fitxer temporal.",
'backend-fail-read' => "No s'ha pogut llegir el fitxer $1.",
'backend-fail-create' => "No s'ha pogut crear el fitxer $1.",
'backend-fail-maxsize' => "No s'ha pogut escriure el fitxer $1 perquè és més gran que {{PLURAL:$2|un byte|$2 bytes}}.",
'backend-fail-readonly' => "El rerefons d'emmagatzemament «$1» actualment només és de lectura. Es va donar el motiu: «$2»",
'backend-fail-synced' => "El fitxer «$1» es troba en un estat inconsistent amb els rerefons d'emmagatzemament interns.",
'backend-fail-connect' => "No s'ha pogut connectar al fitxer de rerefons d'emmagatzemament «$1».",
'backend-fail-internal' => "S'ha produït un error desconegut en el fitxer de rerefons d'emmagatzemament «$1».",
'backend-fail-contenttype' => 'No es pot determinar el tipus de contingut del fitxer per emmagatzemar a «$1».',
'backend-fail-batchsize' => "El rerefons d'emmagatzemament ha rebut un lot {{PLURAL:$1|d'$1 operació|de $1 operacions}} de fitxer; el límit és $2 {{PLURAL:$2|operació|operacions}}.",
'backend-fail-usable' => 'No s\'ha pogut llegir ni escriure el fitxer "$1" a causa de permisos insuficients o perquè hi manquen directoris/contenidors.',

# File journal errors
'filejournal-fail-dbconnect' => 'No es pot connectar amb la base de dades per emmagatzemar el backend "$1".',
'filejournal-fail-dbquery' => 'No es pot actualitzat la base de dades per a emmagatzemar el backend "$1".',

# Lock manager
'lockmanager-notlocked' => "No s'ha pogut desbloquejar «$1»; no és bloquejat.",
'lockmanager-fail-closelock' => "No s'ha pogut bloquejar el fitxer per «$1».",
'lockmanager-fail-deletelock' => "No s'ha pogut suprimir el fitxer de bloqueig per «$1».",
'lockmanager-fail-acquirelock' => "No s'ha pogut adquirir el bloqueig de «$1».",
'lockmanager-fail-openlock' => "No s'ha pogut obrir el fitxer de bloqueig de «$1».",
'lockmanager-fail-releaselock' => "No s'ha pogut alliberar el bloqueig de «$1».",
'lockmanager-fail-db-bucket' => "No s'han pogut contactar un nombre suficient de bases de bloqueig en el cubell $1.",
'lockmanager-fail-db-release' => "No s'han pogut alliberar els bloquejos a la base de dades $1.",
'lockmanager-fail-svr-acquire' => "No s'han pogut aconseguir els bloquejos al servidor $1.",
'lockmanager-fail-svr-release' => "No s'han pogut alliberar els bloquejos al servidor $1.",

# ZipDirectoryReader
'zip-file-open-error' => "S'ha trobat un error en obrir l'arxiu ZIP per a fer-hi comprovacions.",
'zip-wrong-format' => 'El fitxer especificat no és un arxiu ZIP.',
'zip-bad' => "El fitxer està corrupte o és un arxiu ZIP iŀlegible.
No s'hi ha pogut comprovar la seguretat.",
'zip-unsupported' => "El fitxer és un arxiu ZIP que utilitza facilitats no acceptades pel MediaWiki. No s'hi ha pogut realitzar la comprovació de seguretat.",

# Special:UploadStash
'uploadstash' => 'Carrega fitxers en reserva',
'uploadstash-summary' => "Aquesta pàgina permet accedir als fitxers que han estat carregats (o estan en procés de ser carregats), però que encara no s'han publicat al wiki. Aquests fitxers només són visibles per a l'usuari que els ha carregats.",
'uploadstash-clear' => 'Esborra els fitxers en reserva',
'uploadstash-nofiles' => 'No teniu fitxers en reserva',
'uploadstash-badtoken' => "No s'ha pogut realitzar l'acció, possiblement perquè han caducat la vostra identificació. Intenteu-ho de nou.",
'uploadstash-errclear' => "No ha estat possible l'esborrat dels fitxers.",
'uploadstash-refresh' => 'Actualitza la llista de fitxers',
'invalid-chunk-offset' => 'El desplaçament del fragment no és vàlid',

# img_auth script messages
'img-auth-accessdenied' => 'Accés denegat',
'img-auth-nopathinfo' => 'Hi manca PATH_INFO.
El servidor no està configurat per passar aquesta informació.
Pot estar basat en CGI i no ser compatible amb img_auth.
Consulteu https://www.mediawiki.org/wiki/Manual:Image_Authorization',
'img-auth-notindir' => "No s'ha trobat la ruta sol·licitada al directori de càrrega configurat.",
'img-auth-badtitle' => 'No s\'ha pogut construir un títol vàlid a partir de "$1".',
'img-auth-nologinnWL' => 'No has iniciat sessió i "$1" no està a la llista blanca.',
'img-auth-nofile' => 'No existeix el fitxer "$1".',
'img-auth-isdir' => 'Esteu intentant accedir al directori «$1».
Només teniu permès accedir als fitxers.',
'img-auth-streaming' => 'Lectura corrent de "$1".',
'img-auth-public' => "La funció de img_auth.php és de sortida de fitxers d'un lloc wiki privat.
Aquest wiki està configurat com a wiki públic.
Per seguretat, img_auth.php està desactivat.",
'img-auth-noread' => 'L\'usuari no té accés a la lectura de "$1".',
'img-auth-bad-query-string' => 'La direcció té una cadena de consulta invàlid.',

# HTTP errors
'http-invalid-url' => 'URL incorrecta: $1',
'http-invalid-scheme' => 'Les URLs amb l\'esquema "$1" no són compatibles.',
'http-request-error' => 'La petició HTTP ha fallat per un error desconegut.',
'http-read-error' => 'Error de lectura HTTP.',
'http-timed-out' => 'La petició HTTP ha expirat.',
'http-curl-error' => "Error en recuperar l'URL: $1",
'http-host-unreachable' => "No s'ha pogut accedir a l'URL.",
'http-bad-status' => 'Hi ha hagut un problema durant la petició HTTP: $1 $2',

# Some likely curl errors. More could be added from <http://curl.haxx.se/libcurl/c/libcurl-errors.html>
'upload-curl-error6' => "No s'ha pogut accedir a l'URL",
'upload-curl-error6-text' => "No s'ha pogut accedir a l'URL que s'ha proporcionat. Torneu a comprovar que sigui correcte i que el lloc estigui funcionant.",
'upload-curl-error28' => "S'ha excedit el temps d'espera de la càrrega",
'upload-curl-error28-text' => "El lloc ha trigat massa a respondre. Comproveu que està funcionant, espereu una estona i torneu-ho a provar. Podeu mirar d'intentar-ho quan hi hagi menys trànsit a la xarxa.",

'license' => 'Llicència:',
'license-header' => 'Llicència',
'nolicense' => "No se n'ha seleccionat cap",
'license-nopreview' => '(La previsualització no està disponible)',
'upload_source_url' => ' (un URL vàlid i accessible públicament)',
'upload_source_file' => ' (un fitxer en el vostre ordinador)',

# Special:ListFiles
'listfiles-summary' => 'Aquesta pàgina especial mostra tots els fitxers carregats.
Si filtreu per usuari només es mostraran els fitxers la versió més recent dels quals hagi estat carregada per aquell.',
'listfiles_search_for' => "Cerca el nom d'un fitxer de medis:",
'imgfile' => 'fitxer',
'listfiles' => 'Llista de fitxers',
'listfiles_thumb' => 'Miniatura',
'listfiles_date' => 'Data',
'listfiles_name' => 'Nom',
'listfiles_user' => 'Usuari',
'listfiles_size' => 'Mida (octets)',
'listfiles_description' => 'Descripció',
'listfiles_count' => 'Versions',

# File description page
'file-anchor-link' => 'Fitxer',
'filehist' => 'Historial del fitxer',
'filehist-help' => 'Cliqueu una data/hora per veure el fitxer tal com era aleshores.',
'filehist-deleteall' => 'elimina-ho tot',
'filehist-deleteone' => 'elimina',
'filehist-revert' => 'reverteix',
'filehist-current' => 'actual',
'filehist-datetime' => 'Data/hora',
'filehist-thumb' => 'Miniatura',
'filehist-thumbtext' => 'Miniatura per a la versió de $1',
'filehist-nothumb' => 'Sense miniatura',
'filehist-user' => 'Usuari',
'filehist-dimensions' => 'Dimensions',
'filehist-filesize' => 'Mida del fitxer',
'filehist-comment' => 'Comentari',
'filehist-missing' => 'Fitxer que falta',
'imagelinks' => 'Ús del fitxer',
'linkstoimage' => '{{PLURAL:$1|La següent pàgina enllaça|Les següents pàgines enllacen}} a aquesta imatge:',
'linkstoimage-more' => "Hi ha més de $1 {{PLURAL:$1|pàgina que enllaça|pàgines que enllaçen}} a aquest fitxer.
La següent llista només mostra {{PLURAL:$1|la primera d'elles|les primeres $1 d'aquestes pàgines}}.
Podeu consultar la [[Special:WhatLinksHere/$2|llista completa]].",
'nolinkstoimage' => 'No hi ha pàgines que enllacin aquesta imatge.',
'morelinkstoimage' => 'Visualitza [[Special:WhatLinksHere/$1|més enllaços]] que porten al fitxer.',
'linkstoimage-redirect' => '$1 (fitxer redirigit) $2',
'duplicatesoffile' => "{{PLURAL:$1|Aquest fitxer és un duplicat del que apareix a continuació|A continuació s'indiquen els $1 duplicats d'aquest fitxer}} ([[Special:FileDuplicateSearch/$2|vegeu-ne més detalls]]):",
'sharedupload' => 'Aquest fitxer prové de $1 i pot ser utilitzat per altres projectes.',
'sharedupload-desc-there' => 'Aquest fitxer prové de $1 i pot ser utilitzat per altres projectes.
Si us plau vegeu la [$2 pàgina de descripció del fitxer] per a més informació.',
'sharedupload-desc-here' => 'Aquest fitxer prové de $1 i pot ser usat per altres projectes.
La descripció de la seva [$2 pàgina de descripció] es mostra a continuació.',
'sharedupload-desc-edit' => 'Aquest fitxer és de $1 i potser el fan servir altres projectes.
Potser voleu modificar-ne la descripció en la seva [$2 pàgina de descripció].',
'sharedupload-desc-create' => 'Aquest fitxer és de $1 i potser el fan servir altres projectes.
Potser voleu modificar-ne la descripció en la seva [$2 pàgina de descripció].',
'filepage-nofile' => 'No hi ha cap fitxer amb aquest nom.',
'filepage-nofile-link' => 'No existeix cap fitxer amb aquest nom, però podeu [$1 carregar-lo].',
'uploadnewversion-linktext' => "Carrega una nova versió d'aquest fitxer",
'shared-repo-from' => 'des de $1',
'shared-repo' => 'un repositori compartit',
'upload-disallowed-here' => 'No pot sobreescriure aquest fitxer.',

# File reversion
'filerevert' => 'Reverteix $1',
'filerevert-legend' => 'Reverteix el fitxer',
'filerevert-intro' => "Esteu revertint '''[[Media:$1|$1]]''' a la [$4 versió de  $3, $2].",
'filerevert-comment' => 'Motiu:',
'filerevert-defaultcomment' => "S'ha revertit a la versió com de $2, $1",
'filerevert-submit' => 'Reverteix',
'filerevert-success' => "'''[[Media:$1|$1]]''' ha estat revertit a la [$4 versió de $3, $2].",
'filerevert-badversion' => "No hi ha cap versió local anterior d'aquest fitxer amb la marca horària que es proporciona.",

# File deletion
'filedelete' => 'Suprimeix $1',
'filedelete-legend' => 'Suprimeix el fitxer',
'filedelete-intro' => "Esteu eliminant el fitxer '''[[Media:$1|$1]]''' juntament amb el seu historial.",
'filedelete-intro-old' => "Esteu eliminant la versió de '''[[Media:$1|$1]]''' com de [$4 $3, $2].",
'filedelete-comment' => 'Motiu:',
'filedelete-submit' => 'Suprimeix',
'filedelete-success' => "'''$1''' s'ha eliminat.",
'filedelete-success-old' => "<span class=\"plainlinks\">La versió de '''[[Media:\$1|\$1]]''' s'ha eliminat el \$2 a les \$3.</span>",
'filedelete-nofile' => "'''$1''' no existeix.",
'filedelete-nofile-old' => "No hi ha cap versió arxivada de '''$1''' amb els atributs especificats.",
'filedelete-otherreason' => 'Motius alternatius/addicionals:',
'filedelete-reason-otherlist' => 'Altres motius',
'filedelete-reason-dropdown' => "*Motius d'eliminació comuns
** Violació dels drets d'autor / copyright
** Fitxer duplicat",
'filedelete-edit-reasonlist' => "Edita els motius d'eliminació",
'filedelete-maintenance' => "L'esborrament i recuperació de fitxers està temporalment deshabilitada durant el manteniment.",
'filedelete-maintenance-title' => 'No pot suprimir arxiu',

# MIME search
'mimesearch' => 'Cerca per MIME',
'mimesearch-summary' => 'Aquesta pàgina habilita el filtratge de fitxers per llur tipus MIME. Contingut: contenttype/subtype, ex. <code>image/jpeg</code>.',
'mimetype' => 'Tipus MIME:',
'download' => 'baixada',

# Unwatched pages
'unwatchedpages' => 'Pàgines desateses',

# List redirects
'listredirects' => 'Llista de redireccions',

# Unused templates
'unusedtemplates' => 'Plantilles no utilitzades',
'unusedtemplatestext' => "Aquesta pàgina mostra les pàgines en l'espai de noms {{ns:template}}, que no estan incloses en cap altra pàgina. Recordeu de comprovar les pàgines que hi enllacen abans d'esborrar-les.",
'unusedtemplateswlh' => 'altres enllaços',

# Random page
'randompage' => "Pàgina a l'atzar",
'randompage-nopages' => "No hi ha cap pàgina en {{PLURAL:$2|l'espai de noms següent|els espais de noms següents}}: $1.",

# Random redirect
'randomredirect' => "Redirecció a l'atzar",
'randomredirect-nopages' => "No hi ha cap redirecció a l'espai de noms «$1».",

# Statistics
'statistics' => 'Estadístiques',
'statistics-header-pages' => 'Estadístiques de pàgines',
'statistics-header-edits' => "Estadístiques d'edicions",
'statistics-header-views' => 'Visualitza estadístiques',
'statistics-header-users' => "Estadístiques d'usuari",
'statistics-header-hooks' => 'Altres estadístiques',
'statistics-articles' => 'Pàgines de contingut',
'statistics-pages' => 'Pàgines',
'statistics-pages-desc' => 'Totes les pàgines del wiki, incloent les pàgines de discussió, redireccions, etc.',
'statistics-files' => 'Fitxers carregats',
'statistics-edits' => 'Edicions en pàgines des que el projecte {{SITENAME}} fou instaŀlat',
'statistics-edits-average' => 'Edicions per pàgina de mitjana',
'statistics-views-total' => 'Visualitzacions totals',
'statistics-views-total-desc' => "No hom inclou l'accès a pàgines inexistents o pàgines especials",
'statistics-views-peredit' => 'Visualitzacions per modificació',
'statistics-users' => '[[Special:ListUsers|Usuaris]] registrats',
'statistics-users-active' => 'Usuaris actius',
'statistics-users-active-desc' => "Usuaris que han dut a terme alguna acció en {{PLURAL:$1|l'últim dia|els últims $1 dies}}",
'statistics-mostpopular' => 'Pàgines més visualitzades',

'disambiguations' => 'Pàgines que enllacen a pàgines de desambiguació',
'disambiguationspage' => 'Template:Desambiguació',
'disambiguations-text' => "Les següents pàgines tenen algun enllaç a una '''pàgina de desambiguació'''.
És possible que hagin d'enllaçar a una altra pàgina més apropiada.<br />
Una pàgina es tracta com de desambiguació si utilitza una plantilla que està enllaçada a [[MediaWiki:Disambiguationspage]].",

'doubleredirects' => 'Redireccions dobles',
'doubleredirectstext' => 'Aquesta pàgina llista les pàgines que redirigeixen a altres pàgines de redirecció.
Cada fila conté enllaços a la primera i segona redireccions, així com el destí de la segona redirecció, què generalment és la pàgina destí "real", a la què hauria d\'apuntar la primera redirecció.
Les entrades <del>ratllades</del> s\'han resolt.',
'double-redirect-fixed-move' => "S'ha reanomenat [[$1]], ara és una redirecció a [[$2]]",
'double-redirect-fixed-maintenance' => "S'ha arreglat la redirecció doble [[$1]] - [[$2]].",
'double-redirect-fixer' => 'Supressor de dobles redireccions',

'brokenredirects' => 'Redireccions rompudes',
'brokenredirectstext' => 'Les següents redireccions enllacen a pàgines inexistents:',
'brokenredirects-edit' => 'modifica',
'brokenredirects-delete' => 'elimina',

'withoutinterwiki' => 'Pàgines sense enllaços a altres llengües',
'withoutinterwiki-summary' => "Les pàgines següents no enllacen a versions d'altres llengües:",
'withoutinterwiki-legend' => 'Prefix',
'withoutinterwiki-submit' => 'Mostra',

'fewestrevisions' => 'Pàgines amb menys revisions',

# Miscellaneous special pages
'nbytes' => '$1 {{PLURAL:$1|octet|octets}}',
'ncategories' => '$1 {{PLURAL:$1|categoria|categories}}',
'ninterwikis' => '$1 {{PLURAL:$1|interwiki|interwikis}}',
'nlinks' => '$1 {{PLURAL:$1|enllaç|enllaços}}',
'nmembers' => '$1 {{PLURAL:$1|membre|membres}}',
'nrevisions' => '$1 {{PLURAL:$1|revisió|revisions}}',
'nviews' => '$1 {{PLURAL:$1|visita|visites}}',
'nimagelinks' => "S'utilitza en {{PLURAL:$1|una pàgina|$1 pàgines}}",
'ntransclusions' => 'utilitzada en {{PLURAL:$1|una pàgina|$1 pàgines}}',
'specialpage-empty' => 'Aquesta pàgina és buida.',
'lonelypages' => 'Pàgines òrfenes',
'lonelypagestext' => "Les següents pàgines no s'enllacen ni s'inclouen en cap altra pàgina del projecte {{SITENAME}}.",
'uncategorizedpages' => 'Pàgines sense categoria',
'uncategorizedcategories' => 'Categories sense categoria',
'uncategorizedimages' => 'Fitxers sense categoria',
'uncategorizedtemplates' => 'Plantilles sense categoria',
'unusedcategories' => 'Categories sense cap ús',
'unusedimages' => 'Fitxers no utilitzats',
'popularpages' => 'Pàgines populars',
'wantedcategories' => 'Categories demanades',
'wantedpages' => 'Pàgines demanades',
'wantedpages-badtitle' => 'Títol invàlid al conjunt de resultats: $1',
'wantedfiles' => 'Fitxers demanats',
'wantedfiletext-cat' => "Els fitxers següents s'utilitzen per no existeixen. Els fitxers de repositoris aliens poden ser llistats encara que existeixin. Aquells que siguin fals positius es <del>tatxaran</del>. A més, les pàgines que tinguin fitxers incrustats que no existeixin es llistaran a [[:$1]].",
'wantedfiletext-nocat' => "Els fitxers següents es fan servir però no existeixen. Els fitxers d'un repositori aliè poden ser llistats encara que existeixin. Tots aquells fals positius es <del>tatxaran</del>.",
'wantedtemplates' => 'Plantilles demanades',
'mostlinked' => 'Pàgines més enllaçades',
'mostlinkedcategories' => 'Categories més utilitzades',
'mostlinkedtemplates' => 'Plantilles més usades',
'mostcategories' => 'Pàgines amb més categories',
'mostimages' => 'Fitxers més enllaçats',
'mostinterwikis' => 'Pàgines amb més interwikis',
'mostrevisions' => 'Pàgines més modificades',
'prefixindex' => 'Totes les pàgines per prefix',
'prefixindex-namespace' => 'Totes les pàgines amb prefix (espai de noms $1)',
'shortpages' => 'Pàgines curtes',
'longpages' => 'Pàgines llargues',
'deadendpages' => 'Pàgines atzucac',
'deadendpagestext' => "Aquestes pàgines no tenen enllaços a d'altres pàgines del projecte {{SITENAME}}.",
'protectedpages' => 'Pàgines protegides',
'protectedpages-indef' => 'Només proteccions indefinides',
'protectedpages-cascade' => 'Només proteccions en cascada',
'protectedpagestext' => 'Les pàgines següents estan protegides perquè no es puguin modificar o reanomenar',
'protectedpagesempty' => 'No hi ha cap pàgina protegida per ara',
'protectedtitles' => 'Títols protegits',
'protectedtitlestext' => 'Els títols següents estan protegits de crear-se',
'protectedtitlesempty' => 'No hi ha cap títol protegit actualment amb aquests paràmetres.',
'listusers' => "Llista d'usuaris",
'listusers-editsonly' => 'Mostra només usuaris amb edicions',
'listusers-creationsort' => 'Ordena per data de creació',
'usereditcount' => '$1 {{PLURAL:$1|modificació|modificacions}}',
'usercreated' => '{{GENDER:$3|Creat}}: $1 a les $2',
'newpages' => 'Pàgines noves',
'newpages-username' => "Nom d'usuari:",
'ancientpages' => 'Pàgines més antigues',
'move' => 'Reanomena',
'movethispage' => 'Trasllada la pàgina',
'unusedimagestext' => 'Els següents fitxers existeixen però estan incorporats en cap altra pàgina.
Tingueu en compte que altres llocs web poden enllaçar un fitxer amb un URL directe i estar llistat ací tot i estar en ús actiu.',
'unusedcategoriestext' => 'Les pàgines de categoria següents existeixen encara que cap altra pàgina o categoria les utilitza.',
'notargettitle' => 'No hi ha pàgina en blanc',
'notargettext' => 'No heu especificat a quina pàgina dur a terme aquesta funció.',
'nopagetitle' => 'No existeix aquesta pàgina',
'nopagetext' => 'La pàgina que heu especificat no existeix.',
'pager-newer-n' => '{{PLURAL:$1|1 posterior|$1 posteriors}}',
'pager-older-n' => '{{PLURAL:$1|anterior|$1 anteriors}}',
'suppress' => 'Oversight',
'querypage-disabled' => 'Aquesta pàgina especial està desactivada per a no perjudicar el rendiment.',

# Book sources
'booksources' => 'Obres de referència',
'booksources-search-legend' => 'Cerca fonts de llibres',
'booksources-go' => 'Vés-hi',
'booksources-text' => "A sota hi ha una llista d'enllaços d'altres llocs que venen llibres nous i de segona mà, i també podrien tenir més informació dels llibres que esteu cercant:",
'booksources-invalid-isbn' => "El codi ISBN donat no és vàlid. Comproveu si l'heu copiat correctament.",

# Special:Log
'specialloguserlabel' => 'Realitzador:',
'speciallogtitlelabel' => "L'objectiu (títol o usuari):",
'log' => 'Registres',
'all-logs-page' => 'Tots els registres públics',
'alllogstext' => "Presentació combinada de tots els registres disponibles de {{SITENAME}}.
Podeu reduir l'extensió seleccionant el tipus de registre, el nom d'usuari realitzador (distingeix entre majúscules i minúscules), o la pàgina objectiu (també en distingeix).",
'logempty' => 'No hi ha cap coincidència en el registre.',
'log-title-wildcard' => 'Cerca els títols que comencin amb aquest text',
'showhideselectedlogentries' => 'Mostra/amaga les entrades de registre seleccionades',

# Special:AllPages
'allpages' => 'Totes les pàgines',
'alphaindexline' => '$1 a $2',
'nextpage' => 'Pàgina següent ($1)',
'prevpage' => 'Pàgina anterior ($1)',
'allpagesfrom' => 'Mostra les pàgines que comencin per:',
'allpagesto' => 'Mostra pàgines que acabin en:',
'allarticles' => 'Totes les pàgines',
'allinnamespace' => "Totes les pàgines (de l'espai de noms $1)",
'allnotinnamespace' => "Totes les pàgines (que no són a l'espai de noms $1)",
'allpagesprev' => 'Anterior',
'allpagesnext' => 'Següent',
'allpagessubmit' => 'Vés-hi',
'allpagesprefix' => 'Mostra les pàgines amb prefix:',
'allpagesbadtitle' => "El títol de la pàgina que heu inserit no és vàlid o conté un prefix d'enllaç amb un altre projecte. També pot passar que contingui un o més caràcters que no es puguin fer servir en títols de pàgina.",
'allpages-bad-ns' => "El projecte {{SITENAME}} no disposa de l'espai de noms «$1».",
'allpages-hide-redirects' => 'Amaga les redireccions',

# SpecialCachedPage
'cachedspecial-viewing-cached-ttl' => 'Esteu veient una versió a la memòria cau de la pàgina, que pot tenir fins a $1.',
'cachedspecial-viewing-cached-ts' => 'Esteu veient una versió a la memòria cau de la pàgina, que podria no ser completament actual.',
'cachedspecial-refresh-now' => 'Mostra la darrera.',

# Special:Categories
'categories' => 'Categories',
'categoriespagetext' => "{{PLURAL:$1|La següent categoria conté|Les següents categories contenen}} pàgines, o fitxers multimèdia.
[[Special:UnusedCategories|Les categories no usades]] no s'hi mostren.
Vegeu també [[Special:WantedCategories|les categories soŀlicitades]].",
'categoriesfrom' => 'Mostra les categories que comencen a:',
'special-categories-sort-count' => 'ordena per recompte',
'special-categories-sort-abc' => 'ordena alfabèticament',

# Special:DeletedContributions
'deletedcontributions' => 'Contribucions esborrades',
'deletedcontributions-title' => 'Contribucions esborrades',
'sp-deletedcontributions-contribs' => 'contribucions',

# Special:LinkSearch
'linksearch' => "Cerca d'enllaços externs",
'linksearch-pat' => 'Patró de cerca:',
'linksearch-ns' => 'Espai de noms:',
'linksearch-ok' => 'Cerca',
'linksearch-text' => 'Podeu fer servir caràcters comodí com "*.wikipedia.org".
Necessita com a mínim un domini de primer nivell, per exemple "*.org".<br />
Protocols admesos: <code> $1 </code> (no els afegiu en la vostra recerca).',
'linksearch-line' => '$1 enllaçat a $2',
'linksearch-error' => "Els caràcters comodí només poden aparèixer a l'inici de l'url.",

# Special:ListUsers
'listusersfrom' => 'Mostra usuaris començant per:',
'listusers-submit' => 'Mostra',
'listusers-noresult' => "No s'han trobat coincidències de noms d'usuaris. Si us plau, busqueu també amb variacions per majúscules i minúscules.",
'listusers-blocked' => '({{GENDER:$1|blocat|blocada}})',

# Special:ActiveUsers
'activeusers' => "Llista d'usuaris actius",
'activeusers-intro' => "Aquí hi ha una llista d'usuaris que han tingut algun tipus d'activitat en {{PLURAL:$1|el darrer dia|els darrers $1 dies}}.",
'activeusers-count' => '$1 {{PLURAL:$1|modificació|modificacions}} en {{PLURAL:$3|el darrer dia|els $3 darrers dies}}',
'activeusers-from' => 'Mostra els usuaris començant per:',
'activeusers-hidebots' => 'Amaga bots',
'activeusers-hidesysops' => 'Amaga administradors',
'activeusers-noresult' => "No s'han trobat usuaris.",

# Special:Log/newusers
'newuserlogpage' => "Registre de creació de l'usuari",
'newuserlogpagetext' => 'Aquest és un registre de creació de nous usuaris.',

# Special:ListGroupRights
'listgrouprights' => "Drets dels grups d'usuaris",
'listgrouprights-summary' => "A continuació hi ha una llista dels grups d'usuaris definits en aquest wiki, així com dels seus drets d'accés associats.
Pot ser que hi hagi més informació sobre drets individuals [[{{MediaWiki:Listgrouprights-helppage}}|aquí]].",
'listgrouprights-key' => '* <span class="listgrouprights-granted">Drets concedits</span>
* <span class="listgrouprights-revoked">Drets revocats</span>',
'listgrouprights-group' => 'Grup',
'listgrouprights-rights' => 'Drets',
'listgrouprights-helppage' => 'Help:Drets del grup',
'listgrouprights-members' => '(llista de membres)',
'listgrouprights-addgroup' => 'Pot afegir {{PLURAL:$2|grup|grups}}: $1',
'listgrouprights-removegroup' => 'Treu membres {{PLURAL:$2|grup|grups}}: $1',
'listgrouprights-addgroup-all' => 'Poder afegir tots els grups',
'listgrouprights-removegroup-all' => 'Poder treure tots els grups',
'listgrouprights-addgroup-self' => 'Entrar {{PLURAL:$2|al grup|als grups}} $1',
'listgrouprights-removegroup-self' => 'Abandona {{PLURAL:$2|el grup|els grups:}} $1',
'listgrouprights-addgroup-self-all' => 'Afegir-se a qualsevol grup',
'listgrouprights-removegroup-self-all' => 'Abandona tots els grups',

# E-mail user
'mailnologin' => "No enviïs l'adreça",
'mailnologintext' => "Heu d'haver [[Special:UserLogin|entrat]]
i tenir una direcció electrònica vàlida en les vostres [[Special:Preferences|preferències]]
per enviar un correu electrònic a altres usuaris.",
'emailuser' => 'Envia un missatge de correu electrònic a aquest usuari',
'emailuser-title-target' => 'Enviar un correu electrònic a {{GENDER:$1|aquest usuari|aquesta usuària}}',
'emailuser-title-notarget' => "Enviar un correu electrònic a l'usuari",
'emailpage' => 'Correu electrònic a usuari',
'emailpagetext' => "Podeu usar el següent formulari per a enviar un missatge de correu electrònic a aquest usuari.
L'adreça electrònica que heu entrat en [[Special:Preferences|les vostres preferències d'usuari]] apareixerà com a remitent del correu electrònic, de manera que el destinatari us podrà respondre directament.",
'usermailererror' => "L'objecte de correu ha retornat un error:",
'defemailsubject' => 'Correu electrònic de l\'usuari "$1" de {{SITENAME}}',
'usermaildisabled' => "Correu electrònic d'usuaris deshabilitat",
'usermaildisabledtext' => 'No podeu enviar correus electrònics a altres usuaris en aquest wiki',
'noemailtitle' => 'No hi ha cap adreça electrònica',
'noemailtext' => 'Aquest usuari no ha especificat una adreça electrònica vàlida.',
'nowikiemailtitle' => 'No es permet el correu electrònic',
'nowikiemailtext' => "Aquest usuari ha escollit no rebre missatges electrònics d'altres usuaris.",
'emailnotarget' => "Nom d'usuari inexistent o no vàlid per al destinatari.",
'emailtarget' => "Introduïu el nom d'usuari del destinatari",
'emailusername' => "Nom d'usuari:",
'emailusernamesubmit' => 'Enviar',
'email-legend' => 'Enviar un correu electrònic a un altre usuari de {{SITENAME}}',
'emailfrom' => 'De:',
'emailto' => 'Per a:',
'emailsubject' => 'Assumpte:',
'emailmessage' => 'Missatge:',
'emailsend' => 'Envia',
'emailccme' => "Envia'm una còpia del meu missatge.",
'emailccsubject' => 'Còpia del vostre missatge a $1: $2',
'emailsent' => 'Correu electrònic enviat',
'emailsenttext' => 'El vostre correu electrònic ha estat enviat.',
'emailuserfooter' => "Aquest missatge de correu electrònic l'ha enviat $1 a $2 amb la funció «e-mail» del projecte {{SITENAME}}.",

# User Messenger
'usermessage-summary' => 'Deixant missatges de sistema.',
'usermessage-editor' => 'Missatger del sistema',

# Watchlist
'watchlist' => 'Llista de seguiment',
'mywatchlist' => 'Llista de seguiment',
'watchlistfor2' => 'Per $1 $2',
'nowatchlist' => 'No teniu cap element en la vostra llista de seguiment.',
'watchlistanontext' => 'Premeu $1 per a visualitzar o modificar elements de la vostra llista de seguiment.',
'watchnologin' => 'No heu iniciat la sessió',
'watchnologintext' => "Heu d'[[Special:UserLogin|entrar]]
per modificar el vostre llistat de seguiment.",
'addwatch' => 'Afegeix a llista de seguiment',
'addedwatchtext' => "S'ha afegit la pàgina «[[:$1]]» a la vostra [[Special:Watchlist|llista de seguiment]].
S'hi mostraran els canvis futurs que tinguin lloc en aquesta pàgina i la corresponent discussió. A més la pàgina estarà ressaltada '''en negreta''' a la [[Special:RecentChanges|llista de canvis recents]] perquè pugueu adonar-vos dels canvis amb més facilitat.",
'removewatch' => 'Treu de la llista de seguiment',
'removedwatchtext' => "S'ha tret la pàgina «[[:$1]]» de la vostra [[Special:Watchlist|llista de seguiment]].",
'watch' => 'Vigila',
'watchthispage' => 'Vigila aquesta pàgina',
'unwatch' => 'Desatén',
'unwatchthispage' => 'Desatén',
'notanarticle' => 'No és una pàgina amb contingut',
'notvisiblerev' => 'La versió ha estat esborrada',
'watchnochange' => "No s'ha editat cap dels elements que vigileu en el període de temps que es mostra.",
'watchlist-details' => 'Teniu $1 {{PLURAL:$1|pàgina vigilada|pàgines vigilades}}, sense comptar les pàgines de discussió.',
'wlheader-enotif' => "* S'ha habilitat la notificació per correu electrònic.",
'wlheader-showupdated' => "* Les pàgines que s'han canviat des de la vostra darrera visita es mostren '''en negreta'''",
'watchmethod-recent' => "s'està comprovant si hi ha pàgines vigilades en les edicions recents",
'watchmethod-list' => "s'està comprovant si hi ha edicions recents en les pàgines vigilades",
'watchlistcontains' => 'La vostra llista de seguiment conté {{PLURAL:$1|una única pàgina|$1 pàgines}}.',
'iteminvalidname' => "Hi ha un problema amb l'element '$1': el nom no és vàlid...",
'wlnote' => "A sota hi ha {{PLURAL:$1|el darrer canvi|els darrers '''$1''' canvis}} en {{PLURAL:$2|la darrera hora|les  '''$2''' darreres hores}}, a $4 del $3.",
'wlshowlast' => '<small>- Mostra les darreres $1 hores, els darrers $2 dies o $3</small>',
'watchlist-options' => 'Opcions de la llista de seguiment',

# Displayed when you click the "watch" button and it is in the process of watching
'watching' => "S'està vigilant...",
'unwatching' => "S'està desatenent...",
'watcherrortext' => "S'ha produït un error en canviar els paràmetres de la vostra llista de seguiment de «$1».",

'enotif_mailer' => 'Sistema de notificació per correl de {{SITENAME}}',
'enotif_reset' => 'Marca totes les pàgines com a visitades',
'enotif_newpagetext' => 'Aquesta és una nova pàgina.',
'enotif_impersonal_salutation' => 'usuari de la {{SITENAME}}',
'changed' => 'modificada',
'created' => 'creada',
'enotif_subject' => 'La pàgina $PAGETITLE a {{SITENAME}} ha estat $CHANGEDORCREATED per $PAGEEDITOR',
'enotif_lastvisited' => "Vegeu $1 per a tots els canvis que s'han fet d'ença de la vostra darrera visita.",
'enotif_lastdiff' => 'Consulteu $1 per a visualitzar aquest canvi.',
'enotif_anon_editor' => 'usuari anònim $1',
'enotif_body' => 'Benvolgut $WATCHINGUSERNAME,

La pàgina $PAGETITLE del projecte {{SITENAME}} ha estat $CHANGEDORCREATED el dia $PAGEEDITDATE per $PAGEEDITOR, vegeu la versió actual a $PAGETITLE_URL.

$NEWPAGE

Resum de l\'editor: $PAGESUMMARY $PAGEMINOREDIT

Contacteu amb l\'editor:
correu: $PAGEEDITOR_EMAIL
wiki: $PAGEEDITOR_WIKI

No rebreu més notificacions de futurs canvis si no visiteu la pàgina.
També podeu canviar el mode de notificació de les pàgines que vigileu en la vostra llista de seguiment.

			 El servei de notificacions del projecte {{SITENAME}}

--
Per a canviar les opcions de notificació per correu electrònic aneu a
{{canonicalurl:{{#special:Preferences}}}}

Per a canviar les opcions de la vostra llista de seguiment aneu a
{{canonicalurl:{{#special:EditWatchlist}}}}

Per eliminar la pàgina de la vostra llista de seguiment aneu a
$UNWATCHURL

Suggeriments i ajuda:
{{canonicalurl:{{MediaWiki:Helppage}}}}',

# Delete
'deletepage' => 'Elimina la pàgina',
'confirm' => 'Confirma',
'excontent' => 'el contingut era: «$1»',
'excontentauthor' => "el contingut era: «$1» (i l'únic coŀlaborador era [[Special:Contributions/$2|$2]])",
'exbeforeblank' => "el contingut abans de buidar era: '$1'",
'exblank' => 'la pàgina estava en blanc',
'delete-confirm' => 'Elimina «$1»',
'delete-legend' => 'Elimina',
'historywarning' => "'''Avís:''' La pàgina que eliminareu té un historial amb aproximadament {{PLURAL:$1|una modificació|$1 modificacions}}:",
'confirmdeletetext' => "Esteu a punt d'esborrar de forma permanent una pàgina o imatge i tot el seu historial de la base de dades.
Confirmeu que realment ho voleu fer, que enteneu les
conseqüències, i que el que esteu fent està d'acord amb la [[{{MediaWiki:Policy-url}}|política]] del projecte.",
'actioncomplete' => "S'ha realitzat l'acció de manera satisfactòria.",
'actionfailed' => "L'acció ha fallat",
'deletedtext' => '«$1» ha estat esborrat.
Vegeu $2 per a un registre dels esborrats més recents.',
'dellogpage' => "Registre d'eliminació",
'dellogpagetext' => 'Davall hi ha una llista dels esborraments més recents.',
'deletionlog' => "Registre d'esborrats",
'reverted' => 'Invertit amb una revisió anterior',
'deletecomment' => 'Motiu:',
'deleteotherreason' => 'Motius diferents o addicionals:',
'deletereasonotherlist' => 'Altres motius',
'deletereason-dropdown' => "*Motius freqüents d'esborrat
** Demanada per l'autor
** Violació del copyright
** Vandalisme",
'delete-edit-reasonlist' => "Edita els motius d'eliminació",
'delete-toobig' => "Aquesta pàgina té un historial d'edicions molt gran, amb més de $1 {{PLURAL:$1|canvi|canvis}}. L'eliminació d'aquestes pàgines està restringida per a prevenir que hi pugui haver un desajustament seriós de la base de dades de tot el projecte {{SITENAME}} per accident.",
'delete-warning-toobig' => "Aquesta pàgina té un historial d'edicions molt gran, amb més de $1 {{PLURAL:$1|canvi|canvis}}. Eliminar-la podria suposar un seriós desajustament de la base de dades de tot el projecte {{SITENAME}}; aneu en compte abans dur a terme l'acció.",

# Rollback
'rollback' => 'Reverteix edicions',
'rollback_short' => 'Revoca',
'rollbacklink' => 'Reverteix',
'rollbacklinkcount' => 'reverteix $1 {{PLURAL:$1|edició|edicions}}',
'rollbacklinkcount-morethan' => 'reverteix més de $1 {{PLURAL:$1|edició|edicions}}',
'rollbackfailed' => "No s'ha pogut revocar",
'cantrollback' => "No s'ha pogut revertir les edicions; el darrer coŀlaborador és l'únic autor de la pàgina.",
'alreadyrolled' => "No es pot revertir la darrera modificació de [[:$1]]
de l'usuari [[User:$2|$2]] ([[User talk:$2|Discussió]]{{int:pipe-separator}}[[Special:Contributions/$2|{{int:contribslink}}]]). Algú altre ja ha modificat o revertit la pàgina.

La darrera modificació ha estat feta per l'usuari [[User:$3|$3]] ([[User talk:$3|Discussió]]{{int:pipe-separator}}[[Special:Contributions/$3|{{int:contribslink}}]]).",
'editcomment' => "El resum d'edició ha estat: «$1».",
'revertpage' => "Revertides les edicions de [[Special:Contributions/$2|$2]] ([[User talk:$2|discussió]]). S'ha recuperat la darrera versió de l'usuari [[User:$1|$1]]",
'revertpage-nouser' => "Desfetes les edicions de (nom d'usuari eliminat) a l'última revisió feta per [[User:$1|$1]]",
'rollback-success' => "Edicions revertides de $1; s'ha canviat a la darrera versió de $2.",

# Edit tokens
'sessionfailure-title' => 'Error de sessió',
'sessionfailure' => "Sembla que hi ha problema amb la vostra sessió. Aquesta acció ha estat anuŀlada en prevenció de pirateig de sessió. Si us plau, pitgeu «Torna», i recarregueu la pàgina des d'on veniu, després intenteu-ho de nou.",

# Protect
'protectlogpage' => 'Registre de protecció',
'protectlogtext' => 'A continuació es mostra un registre amb els canvis de protecció de pàgines.
Vegeu la [[Special:ProtectedPages|llista de pàgines protegides]] per a la llista de les pàgines que actualment tenen alguna protecció.',
'protectedarticle' => 'ha protegit «[[$1]]»',
'modifiedarticleprotection' => 'ha canviat el nivell de protecció de «[[$1]]»',
'unprotectedarticle' => 'ha desprotegit "[[$1]]"',
'movedarticleprotection' => 'ha traslladat els ajustaments de protecció des de «[[$2]]» a «[[$1]]»',
'protect-title' => 'Canviant la protecció de «$1»',
'protect-title-notallowed' => 'Mostra el nivell de protecció de " $1 "',
'prot_1movedto2' => '[[$1]] mogut a [[$2]]',
'protect-badnamespace-title' => 'Espai de nom no-protectable',
'protect-badnamespace-text' => 'Les pàgines en aquest espai de nom no pot ser protegit.',
'protect-legend' => 'Confirmeu la protecció',
'protectcomment' => 'Motiu:',
'protectexpiry' => "Data d'expiració",
'protect_expiry_invalid' => "Data d'expiració no vàlida",
'protect_expiry_old' => 'El temps de termini ja ha passat.',
'protect-unchain-permissions' => 'Desbloqueja les opcions de protecció avançades',
'protect-text' => 'Aquí podeu visualitzar i canviar el nivell de protecció de la pàgina «$1». Assegureu-vos de seguir les polítiques existents.',
'protect-locked-blocked' => "No podeu canviar els nivells de protecció mentre estigueu bloquejats. Ací hi ha els
paràmetres actuals de la pàgina '''$1''':",
'protect-locked-dblock' => "No poden canviar-se els nivells de protecció a casa d'un bloqueig actiu de la base de dades.
Ací hi ha els paràmetres actuals de la pàgina '''$1''':",
'protect-locked-access' => "El vostre compte no té permisos per a canviar els nivells de protecció de la pàgina.
Ací es troben els paràmetres actuals de la pàgina '''$1''':",
'protect-cascadeon' => "Aquesta pàgina es troba protegida perquè està inclosa en {{PLURAL:$1|la següent pàgina que té|les següents pàgines que tenen}} activada una protecció en cascada. Podeu canviar el nivell de protecció d'aquesta pàgina però això no afectarà la protecció en cascada.",
'protect-default' => 'Permet tots els usuaris',
'protect-fallback' => 'Cal el permís de «$1»',
'protect-level-autoconfirmed' => 'Bloca els usuaris novells i no registrats',
'protect-level-sysop' => 'Bloqueja tots els usuaris excepte administradors',
'protect-summary-cascade' => 'en cascada',
'protect-expiring' => 'expira el dia $1 (UTC)',
'protect-expiring-local' => 'caduca el $1',
'protect-expiry-indefinite' => 'indefinit',
'protect-cascade' => 'Protecció en cascada: protegeix totes les pàgines i plantilles incloses en aquesta.',
'protect-cantedit' => "No podeu canviar els nivells de protecció d'aquesta pàgina, perquè no teniu permisos per a editar-la.",
'protect-othertime' => 'Un altre termini:',
'protect-othertime-op' => 'un altre termini',
'protect-existing-expiry' => "Data d'expiració existent: $2 a les $3",
'protect-otherreason' => 'Altres motius:',
'protect-otherreason-op' => 'Altres motius',
'protect-dropdown' => "*Motius comuns de protecció
** Vandalisme excessiu
** Spam excessiu
** Guerra d'edicions improductiva
** Pàgina amb alt trànsit",
'protect-edit-reasonlist' => 'Edita motius de protecció',
'protect-expiry-options' => '1 hora:1 hour,1 dia:1 day,1 setmana:1 week,2 setmanes:2 weeks,1 mes:1 month,3 mesos:3 months,6 mesos:6 months,1 any:1 year,infinit:infinite',
'restriction-type' => 'Permís:',
'restriction-level' => 'Nivell de restricció:',
'minimum-size' => 'Mida mínima',
'maximum-size' => 'Mida màxima:',
'pagesize' => '(bytes)',

# Restrictions (nouns)
'restriction-edit' => 'Modifica',
'restriction-move' => 'Reanomena',
'restriction-create' => 'Crea',
'restriction-upload' => 'Carrega',

# Restriction levels
'restriction-level-sysop' => 'protegida',
'restriction-level-autoconfirmed' => 'semiprotegida',
'restriction-level-all' => 'qualsevol nivell',

# Undelete
'undelete' => 'Restaura una pàgina esborrada',
'undeletepage' => 'Mostra i restaura pàgines esborrades',
'undeletepagetitle' => "'''A continuació teniu revisions eliminades de [[:$1]]'''.",
'viewdeletedpage' => 'Visualitza les pàgines eliminades',
'undeletepagetext' => "S'ha eliminat {{PLURAL:|la pàgina $1, però encara és a l'arxiu i pot ser restaurada|les pàgines $1, però encara són a l'arxiu i poden ser restaurades}}. Es Pot netejar l'arxiu periòdicament.",
'undelete-fieldset-title' => 'Restaura revisions',
'undeleteextrahelp' => "Per a restaurar l'historial sencer de la pàgina, deixeu totes les caselles sense seleccionar i feu clic a '''''{{int:undeletebtn}}'''''.
Per a realitzar una restauració selectiva, marqueu les caselles que corresponguin a les revisions que voleu recuperar, i feu clic a '''''{{int:undeletebtn}}'''''.",
'undeleterevisions' => '{{PLURAL:$1|Una revisió arxivada|$1 revisions arxivades}}',
'undeletehistory' => "Si restaureu la pàgina, totes les revisions seran restaurades a l'historial.

Si s'hagués creat una nova pàgina amb el mateix nom d'ençà que la vàreu esborrar, les versions restaurades apareixeran abans a l'historial.",
'undeleterevdel' => "No es revertirà l'eliminació si això provoca la supressió parcial de la pàgina superior.

En aqueixos casos, heu de desmarcar o mostrar les revisions eliminades més noves.",
'undeletehistorynoadmin' => "S'ha eliminat la pàgina. El motiu es mostra
al resum a continuació, juntament amb detalls dels usuaris que l'havien editat abans de la seua eliminació. El text de les revisions eliminades només és accessible als administradors.",
'undelete-revision' => "S'ha eliminat la revisió de $1 (des del dia $4 a les $5), revisat per $3:",
'undeleterevision-missing' => "La revisió no és vàlida o no hi és. Podeu tenir-hi un enllaç incorrecte, o bé pot haver-se restaurat o eliminat de l'arxiu.",
'undelete-nodiff' => "No s'ha trobat cap revisió anterior.",
'undeletebtn' => 'Restaura!',
'undeletelink' => 'mira/restaura',
'undeleteviewlink' => 'veure',
'undeletereset' => 'Reinicia',
'undeleteinvert' => 'Invertir selecció',
'undeletecomment' => 'Motiu:',
'undeletedrevisions' => '{{PLURAL:$1|Una revisió restaurada|$1 revisions restaurades}}',
'undeletedrevisions-files' => '{{PLURAL:$1|Una revisió|$1 revisions}} i {{PLURAL:$2|un fitxer|$2 fitxers}} restaurats',
'undeletedfiles' => '$1 {{PLURAL:$1|fitxer restaurat|fitxers restaurats}}',
'cannotundelete' => 'Hi ha hagut un error en el procés de restauració:
$1',
'undeletedpage' => "'''S'ha restaurat «$1»'''

Consulteu el [[Special:Log/delete|registre d'esborraments]] per a veure els esborraments i els restauraments més recents.",
'undelete-header' => "Vegeu [[Special:Log/delete|el registre d'eliminació]] per a veure les pàgines eliminades recentment.",
'undelete-search-title' => 'Cerca de pàgines esborrades',
'undelete-search-box' => 'Cerca pàgines esborrades',
'undelete-search-prefix' => 'Mostra pàgines que comencin:',
'undelete-search-submit' => 'Cerca',
'undelete-no-results' => "Amb aquest criteri de cerca, no s'ha trobat cap pàgina a l'arxiu de supressions",
'undelete-filename-mismatch' => "No es pot revertir l'eliminació de la revisió de fitxer amb marca horària $1: no coincideix el nom de fitxer",
'undelete-bad-store-key' => 'No es pot revertir la revisió de fitxer amb marca horària $1: el fitxer no hi era abans i tot de ser eliminat.',
'undelete-cleanup-error' => "S'ha produït un error en eliminar el fitxer d'arxiu sense utilitzar «$1».",
'undelete-missing-filearchive' => "No s'ha pogut restaurar l'identificador $1 d'arxiu de fitxers perquè no es troba a la base de dades. Podria ser que ja s'hagués revertit l'eliminació.",
'undelete-error' => 'Error recuperant pàgina',
'undelete-error-short' => "S'ha produït un error en revertir l'eliminació del fitxer: $1",
'undelete-error-long' => "S'han produït errors en revertir la supressió del fitxer:

$1",
'undelete-show-file-confirm' => 'Segur que voleu veure la revisió esborrada del fitxer «<nowiki>$1</nowiki>» corresponent a les $3 del $2?',
'undelete-show-file-submit' => 'Sí',

# Namespace form on various pages
'namespace' => 'Espai de noms:',
'invert' => 'Inverteix la selecció',
'tooltip-invert' => "Marqueu aquesta casella per ocultar els canvis a les pàgines de l'espai de noms seleccionat (i l'espai de noms associat si està activat)",
'namespace_association' => 'Espai de noms associat',
'tooltip-namespace_association' => "Marqueu aquesta casella per incloure l'espai de noms de discussió o de no discussió associat a l'espai de noms seleccionat",
'blanknamespace' => '(Principal)',

# Contributions
'contributions' => "Contribucions de l'usuari",
'contributions-title' => "Contribucions de l'usuari $1",
'mycontris' => 'Contribucions',
'contribsub2' => 'Per $1 ($2)',
'nocontribs' => "No s'ha trobat canvis que encaixessin amb aquests criteris.",
'uctop' => '(actual)',
'month' => 'Mes (i anteriors):',
'year' => 'Any (i anteriors):',

'sp-contributions-newbies' => 'Mostra les contribucions dels usuaris novells',
'sp-contributions-newbies-sub' => 'Per a novells',
'sp-contributions-newbies-title' => "Contribucions dels comptes d'usuari més nous",
'sp-contributions-blocklog' => 'Registre de bloquejos',
'sp-contributions-deleted' => "contribucions d'usuari esborrades",
'sp-contributions-uploads' => 'pujades',
'sp-contributions-logs' => 'registres',
'sp-contributions-talk' => 'discussió',
'sp-contributions-userrights' => "gestió de drets d'usuari",
'sp-contributions-blocked-notice' => "En aquests moments, aquest compte d'usuari es troba blocat.
Per més detalls, la última entrada del registre es mostra a continuació:",
'sp-contributions-blocked-notice-anon' => 'En aquests moments, aquesta adreça IP es troba blocada.
Per més detalls, la última entrada del registre es mostra a continuació:',
'sp-contributions-search' => 'Cerca les contribucions',
'sp-contributions-username' => "Adreça IP o nom d'usuari:",
'sp-contributions-toponly' => 'Mostra només revisions superiors',
'sp-contributions-submit' => 'Cerca',

# What links here
'whatlinkshere' => 'Què hi enllaça',
'whatlinkshere-title' => 'Pàgines que enllacen amb $1',
'whatlinkshere-page' => 'Pàgina:',
'linkshere' => "Les següents pàgines enllacen amb '''[[:$1]]''':",
'nolinkshere' => "Cap pàgina no enllaça amb '''[[:$1]]'''.",
'nolinkshere-ns' => "No s'enllaça cap pàgina a '''[[:$1]]''' en l'espai de noms triat.",
'isredirect' => 'pàgina redirigida',
'istemplate' => 'inclosa',
'isimage' => 'enllaç a fitxer',
'whatlinkshere-prev' => '{{PLURAL:$1|anterior|anteriors $1}}',
'whatlinkshere-next' => '{{PLURAL:$1|següent|següents $1}}',
'whatlinkshere-links' => '← enllaços',
'whatlinkshere-hideredirs' => '$1 redireccions',
'whatlinkshere-hidetrans' => '$1 inclusions',
'whatlinkshere-hidelinks' => '$1 enllaços',
'whatlinkshere-hideimages' => '$1 enllaços a imatge',
'whatlinkshere-filters' => 'Filtres',

# Block/unblock
'autoblockid' => 'Autoblocatge #$1',
'block' => "Blocatge d'usuaris",
'unblock' => "Desblocatge d'usuaris",
'blockip' => "Bloqueig d'usuaris",
'blockip-title' => "Bloquejar l'usuari",
'blockip-legend' => "Bloca l'usuari",
'blockiptext' => "Empreu el següent formulari per blocar l'accés
d'escriptura des d'una adreça IP específica o des d'un usuari determinat.
això només s'hauria de fer per prevenir el vandalisme, i
d'acord amb la [[{{MediaWiki:Policy-url}}|política del projecte]].
Empleneu el diàleg de sota amb un motiu específic (per exemple, citant
quines pàgines en concret estan sent vandalitzades).",
'ipadressorusername' => "Adreça IP o nom de l'usuari",
'ipbexpiry' => 'Venciment',
'ipbreason' => 'Motiu:',
'ipbreasonotherlist' => 'Un altre motiu',
'ipbreason-dropdown' => "*Motius de bloqueig més freqüents
** Inserció d'informació falsa
** Supressió de contingut sense justificació
** Inserció d'enllaços promocionals (spam)
** Inserció de contingut sense cap sentit
** Conducta intimidatòria o hostil
** Abús de comptes d'usuari múltiples
** Nom d'usuari no acceptable",
'ipb-hardblock' => "Impedeix que els usuaris registrats puguin editar des d'aquesta adreça IP",
'ipbcreateaccount' => 'Evita la creació de comptes',
'ipbemailban' => "Evita que l'usuari enviï correu electrònic",
'ipbenableautoblock' => "Bloca l'adreça IP d'aquest usuari, i totes les subseqüents adreces des de les quals intenti registrar-se",
'ipbsubmit' => 'Bloqueja aquesta adreça',
'ipbother' => 'Un altre termini',
'ipboptions' => '2 hores:2 hours,1 dia:1 day,3 dies:3 days,1 setmana:1 week,2 setmanes:2 weeks,1 mes:1 month,3 mesos:3 months,6 mesos:6 months,1 any:1 year,infinit:infinite',
'ipbotheroption' => 'un altre',
'ipbotherreason' => 'Altres motius o addicionals:',
'ipbhidename' => "Amaga el nom d'usuari de les edicions i llistes",
'ipbwatchuser' => "Vigila les pàgines d'usuari i de discussió de l'usuari",
'ipb-disableusertalk' => 'Impedeix que aquest usuari pugui modificar la seva pàgina de discussió mentre dura el blocatge',
'ipb-change-block' => "Torna a blocar l'usuari amb aquests paràmetres",
'ipb-confirm' => 'Confirma el blocatge',
'badipaddress' => "L'adreça IP no té el format correcte.",
'blockipsuccesssub' => "S'ha blocat amb èxit",
'blockipsuccesstext' => "[[Special:Contributions/$1|$1]] ha estat {{GENDER:$1|bloquejat|bloquejada|bloquejat/da}}.<br />
Vegeu la [[Special:BlockList|llista d'IP blocades]] per revisar els bloqueigs.",
'ipb-blockingself' => 'Esteu a punt de blocar-vos a vós mateix! Esteu segurs de voler-ho fer?',
'ipb-confirmhideuser' => "Esteu a punt de bloquejar un usuari que està marcat amb l'opció «amaga l'usuari». Això suprimirà el seu nom a totes les llistes i registres. Esteu segurs de voler-ho fer?",
'ipb-edit-dropdown' => 'Edita les raons per a blocar',
'ipb-unblock-addr' => 'Desbloca $1',
'ipb-unblock' => 'Desbloca un usuari o una adreça IP',
'ipb-blocklist' => 'Llista els bloquejos existents',
'ipb-blocklist-contribs' => 'Contribucions de $1',
'unblockip' => "Desbloca l'usuari",
'unblockiptext' => "Empreu el següent formulari per restaurar
l'accés a l'escriptura a una adreça IP o un usuari prèviament bloquejat.",
'ipusubmit' => 'Desbloca aquesta adreça',
'unblocked' => "S'ha desbloquejat l'{{GENDER:$1|usuari|usuària}} [[User:$1|$1]]",
'unblocked-range' => '$1 ha estat desblocat',
'unblocked-id' => "S'ha eliminat el bloqueig de $1",
'blocklist' => 'Usuaris blocats',
'ipblocklist' => 'Usuaris blocats',
'ipblocklist-legend' => 'Cerca un usuari blocat',
'blocklist-userblocks' => 'Amaga bloquejos de compte',
'blocklist-tempblocks' => 'Amaga bloquejos temporals',
'blocklist-addressblocks' => "Amaga bloquejos d'una sola IP",
'blocklist-rangeblocks' => 'Amaga els blocatges de rang',
'blocklist-timestamp' => 'Marca horària',
'blocklist-target' => 'Usuari blocat',
'blocklist-expiry' => 'Caduca',
'blocklist-by' => 'Administrador del blocatge',
'blocklist-params' => 'Paràmetres del blocatge',
'blocklist-reason' => 'Motiu',
'ipblocklist-submit' => 'Cerca',
'ipblocklist-localblock' => 'Bloqueig local',
'ipblocklist-otherblocks' => 'Altres {{PLURAL:$1|bloquejos|bloquejos}}',
'infiniteblock' => 'infinit',
'expiringblock' => 'venç el $1 a $2',
'anononlyblock' => 'només usuari anònim',
'noautoblockblock' => "S'ha inhabilitat el bloqueig automàtic",
'createaccountblock' => "s'ha blocat la creació de nous comptes",
'emailblock' => "s'ha blocat l'enviament de correus electrònics",
'blocklist-nousertalk' => 'no podeu modificar la pàgina de discussió pròpia',
'ipblocklist-empty' => 'La llista de bloqueig està buida.',
'ipblocklist-no-results' => "L'adreça IP o nom d'usuari soŀlicitat no està bloquejat.",
'blocklink' => 'bloca',
'unblocklink' => 'desbloca',
'change-blocklink' => 'canvia el blocatge',
'contribslink' => 'contribucions',
'emaillink' => 'correu electrònic',
'autoblocker' => "Heu estat blocat automàticament perquè la vostra adreça IP ha estat recentment utilitzada per l'usuari ''[[User:$1|$1]]''.
El motiu del bloqueig de $1 és: ''$2''.",
'blocklogpage' => 'Registre de bloquejos',
'blocklog-showlog' => 'Aquest usuari ha estat blocat prèviament.
Per més detalls, a sota es mostra el registre de bloquejos:',
'blocklog-showsuppresslog' => 'Aquest usuari ha estat blocat i amagat prèviament.
Per més detalls, a sota es mostra el registre de supressions:',
'blocklogentry' => "ha blocat l'{{GENDER:$1|usuari|usuària}} [[$1]] per un període de: $2 $3",
'reblock-logentry' => 'canviades les opcions del blocatge a [[$1]] amb caducitat a $2, $3',
'blocklogtext' => 'Això és una relació de accions de bloqueig i desbloqueig. Les adreces IP bloquejades automàticament no apareixen. Vegeu la [[Special:BlockList|llista de bloqueigs]] per veure una llista dels actuals bloqueigs operatius.',
'unblocklogentry' => 'ha desblocat $1',
'block-log-flags-anononly' => 'només els usuaris anònims',
'block-log-flags-nocreate' => "s'ha desactivat la creació de comptes",
'block-log-flags-noautoblock' => 'sense bloqueig automàtic',
'block-log-flags-noemail' => 'correu-e blocat',
'block-log-flags-nousertalk' => 'no podeu modificar la pàgina de discussió pròpia',
'block-log-flags-angry-autoblock' => 'autoblocatge avançat activat',
'block-log-flags-hiddenname' => "nom d'usuari ocult",
'range_block_disabled' => 'La facultat dels administradors per a crear bloquejos de rang està desactivada.',
'ipb_expiry_invalid' => "Data d'acabament no vàlida.",
'ipb_expiry_temp' => "Els blocatges amb ocultació de nom d'usuari haurien de ser permanents.",
'ipb_hide_invalid' => "No s'ha pogut eliminar el compte; potser té massa edicions.",
'ipb_already_blocked' => '«$1» ja està blocat',
'ipb-needreblock' => "L'usuari $1 ja està blocat. Voleu canviar-ne els paràmetres del blocatge?",
'ipb-otherblocks-header' => 'Altres {{PLURAL:$1|bloquejos|bloquejos}}',
'unblock-hideuser' => "No podeu desblocar aquest usuari, perquè el seu nom d'usuari està ocult.",
'ipb_cant_unblock' => "Errada: No s'ha trobat el núm. ID de bloqueig $1. És possible que ja s'haguera desblocat.",
'ipb_blocked_as_range' => "Error: L'adreça IP $1 no està blocada directament i per tant no pot ésser desbloquejada. Ara bé, sí que ho està per formar part del rang $2 que sí que pot ser desblocat.",
'ip_range_invalid' => 'Rang de IP no vàlid.',
'ip_range_toolarge' => 'No estan permesos el bloquejos de rangs més grans que /$1.',
'blockme' => "Bloca'm",
'proxyblocker' => 'Bloqueig de proxy',
'proxyblocker-disabled' => "S'ha inhabilitat la funció.",
'proxyblockreason' => "La vostra adreça IP ha estat bloquejada perquè és un proxy obert. Si us plau contactau el vostre proveïdor d'Internet o servei tècnic i informau-los d'aquest seriós problema de seguretat.",
'proxyblocksuccess' => 'Fet.',
'sorbsreason' => "La vostra adreça IP està llistada com a servidor intermediari (''proxy'') obert dins la llista negra de DNS que fa servir el projecte {{SITENAME}}.",
'sorbs_create_account_reason' => "La vostra adreça IP està llistada com a servidor intermediari (''proxy'') obert a la llista negra de DNS que utilitza el projecte {{SITENAME}}. No podeu crear-vos-hi un compte",
'cant-block-while-blocked' => 'No podeu blocar altres usuaris quan esteu bloquejat.',
'cant-see-hidden-user' => "L'usuari que esteu intentant blocar ja ha estat blocat i ocultat. Com que no teniu el permís hideuser no podeu veure ni modificar el seu blocatge.",
'ipbblocked' => 'No podeu blocar o desblocar altres usuaris, perquè vós {{GENDER:|mateix|mateixa|mateix}} esteu {{GENDER:|blocat|blocada|blocat}}.',
'ipbnounblockself' => 'No teniu permís per a treure el vostre bloqueig',

# Developer tools
'lockdb' => 'Bloca la base de dades',
'unlockdb' => 'Desbloca la base de dades',
'lockdbtext' => "Si es bloca la base de dades impedirà la capacitat a tots els usuaris d'editar pàgines, canviar les preferències, editar la llista de seguiment i altres canvis que calen de modificacions a la base de dades.
Confirmeu que això és el que voleu fer, i sobretot no us oblideu de desblocar la base de dades quan acabeu el manteniment.",
'unlockdbtext' => "Desblocant la base de dades es restaurarà l'habilitat de tots
els usuaris d'editar pàgines, canviar les preferències, editar els llistats de seguiment, i
altres accions que requereixen canvis en la base de dades.
Confirmeu que això és el que voleu fer.",
'lockconfirm' => 'Sí, realment vull blocar la base de dades.',
'unlockconfirm' => 'Sí, realment vull desblocar la base dades.',
'lockbtn' => 'Bloca la base de dades',
'unlockbtn' => 'Desbloca la base de dades',
'locknoconfirm' => 'No heu respost al diàleg de confirmació.',
'lockdbsuccesssub' => "S'ha bloquejat la base de dades",
'unlockdbsuccesssub' => "S'ha eliminat el bloqueig de la base de dades",
'lockdbsuccesstext' => "S'ha bloquejat la base de dades.<br />
Recordeu-vos de [[Special:UnlockDB|treure el bloqueig]] quan hàgiu acabat el manteniment.",
'unlockdbsuccesstext' => "S'ha desbloquejat la base de dades del projecte {{SITENAME}}.",
'lockfilenotwritable' => 'No es pot modificar el fitxer de la base de dades de bloquejos. Per a blocar o desblocar la base de dades, heu de donar-ne permís de modificació al servidor web.',
'databasenotlocked' => 'La base de dades no està bloquejada.',
'lockedbyandtime' => '(per $1 el $2 a les $3)',

# Move page
'move-page' => 'Mou $1',
'move-page-legend' => 'Reanomena la pàgina',
'movepagetext' => "Amb el formulari següent reanomenareu una pàgina, movent tot el seu historial al nou nom.
El títol anterior es convertirà en una redirecció al títol que hàgiu creat.
Podeu actualitzar automàticament els enllaços a l'antic títol de la pàgina.
Si no ho feu, assegureu-vos de verificar que no deixeu redireccions [[Special:DoubleRedirects|dobles]] o [[Special:BrokenRedirects|trencades]].
Serà de la vostra responsabilitat verificar que els enllaços seguirien apuntant cap a on se suposa que ho han de fer.

Tingueu en compte que la pàgina '''no''' serà traslladada si ja existeix una pàgina amb el títol nou, a no ser que sigui una pàgina buida o una ''redirecció'' sense historial.
Això significa que podeu reanomenar de nou una pàgina al seu títol original si cometeu un error, i que no podeu sobreescriure una pàgina existent.

'''ADVERTÈNCIA!'''
Açò pot ser un canvi dràstic i inesperat en una pàgina que sigui popular; assegureu-vos d'entendre les conseqüències que comporta abans de seguir endavant.",
'movepagetext-noredirectfixer' => "El títol anterior es convertirà en un redireccionament al nou títol. 

Assegureu-vos de verificar els redireccionaments [[Special:DoubleRedirects|doble]]s i els [[Special:BrokenRedirects|trencat]]s.

Sigueu responsable de fer que els enllaços continuen apuntant cap a on se suposa que han d'anar. 

Tingueu en compte que la pàgina '''no''' serà traslladada si ja existeix una pàgina amb el títol nou proposat, tret del cas que la pàgina és buida o no n'hi ha un historial de redireccionaments. 

Això significa que si reanomeneu per equivocació una pàgina amb el seu nom anterior no ho podreu fer, ja que no es pot sobreescriure una pàgina existent.
 
'''Avís:''' Això pot ser un canvi dràstic i inesperat per una pàgina popular; si us plau, assegureu-vos que sabeu el que feu abans de continuar.",
'movepagetalktext' => "La pàgina de discussió associada, si existeix, serà traslladada automàticament '''tret dels següents casos''':
* Ja hi existeix una pàgina de discussió no buida amb el nou nom, o si
* la opció de davall es troba desactivada

En aquests casos, haureu de traslladar o fusionar la pàgina manualment si ho desitgeu.",
'movearticle' => 'Reanomena la pàgina',
'moveuserpage-warning' => "'''Atenció:''' Esteu a punt de moure una pàgina d'usuari. Tingueu en compte que només la pàgina es desplaçarà i que el compte d'usuari ''no'' canviarà de nom.",
'movenologin' => "No sou a dins d'una sessió",
'movenologintext' => "Heu de ser un usuari registrat i estar [[Special:UserLogin|dintre d'una sessió]]
per reanomenar una pàgina.",
'movenotallowed' => 'No teniu permís per a moure pàgines.',
'movenotallowedfile' => 'No teniu el permís per a moure fitxers.',
'cant-move-user-page' => "No teniu permís per a moure pàgines d'usuari (independentment de les subpàgines).",
'cant-move-to-user-page' => "No teniu permís per a moure una pàgina a una pàgina d'usuari (independentment de poder fer-ho cap a una subpàgina d'usuari).",
'newtitle' => 'A títol nou',
'move-watch' => 'Vigila aquesta pàgina',
'movepagebtn' => 'Reanomena la pàgina',
'pagemovedsub' => 'Reanomenament amb èxit',
'movepage-moved' => "'''«$1» s'ha mogut a «$2»'''",
'movepage-moved-redirect' => "S'ha creat una redirecció.",
'movepage-moved-noredirect' => "La creació d'una redirecció s'ha suprimit.",
'articleexists' => 'Ja existeix una pàgina amb aquest nom, o el nom que heu triat no és vàlid.
Trieu-ne un altre, si us plau.',
'cantmove-titleprotected' => "No podeu moure una pàgina a aquesta ubicació, perquè s'ha protegit la creació del títol nou",
'talkexists' => "S'ha reanomenat la pàgina amb èxit, però la pàgina de discussió no s'ha pogut moure car ja no existeix en el títol nou.

Incorporeu-les manualment, si us plau.",
'movedto' => 'reanomenat a',
'movetalk' => 'Mou la pàgina de discussió associada',
'move-subpages' => "Desplaça'n també les subpàgines (fins a $1)",
'move-talk-subpages' => 'Desplaça també les subpàgines de la pàgina de discussió (fins un màxim de $1)',
'movepage-page-exists' => "La pàgina $1 ja existeix i no pot sobreescriure's automàticament.",
'movepage-page-moved' => 'La pàgina $1 ha estat traslladada a $2.',
'movepage-page-unmoved' => "La pàgina $1 no s'ha pogut moure a $2.",
'movepage-max-pages' => "{{PLURAL:$1|S'ha mogut una pàgina|S'han mogut $1 pàgines}} que és el nombre màxim, i per tant no se'n mourà automàticament cap més.",
'movelogpage' => 'Registre de reanomenaments',
'movelogpagetext' => 'Vegeu la llista de les darreres pàgines reanomenades.',
'movesubpage' => '{{PLURAL:$1|Subpàgina|Subpàgines}}',
'movesubpagetext' => 'Aquesta pàgina té {{PLURAL:$1|una subpàgina|$1 subpàgines}} que es mostren a continuació.',
'movenosubpage' => 'Aquesta pàgina no té subpàgines.',
'movereason' => 'Motiu:',
'revertmove' => 'reverteix',
'delete_and_move' => 'Elimina i trasllada',
'delete_and_move_text' => "==Cal l'eliminació==

La pàgina de destinació, «[[:$1]]», ja existeix. Voleu eliminar-la per a fer lloc al trasllat?",
'delete_and_move_confirm' => 'Sí, esborra la pàgina',
'delete_and_move_reason' => 'S\'ha eliminat per a permetre el reanomenament de " [[$1]] "',
'selfmove' => "Els títols d'origen i de destinació coincideixen: no és possible de reanomenar una pàgina a si mateixa.",
'immobile-source-namespace' => 'No es poden moure pàgines de l\'espai de noms "$1"',
'immobile-target-namespace' => 'No es poden moure pàgines cap a l\'espai de noms "$1"',
'immobile-target-namespace-iw' => "No es poden moure pàgines a l'enllaç interwiki",
'immobile-source-page' => 'Aquesta pàgina no es pot moure.',
'immobile-target-page' => 'No es pot moure cap a una destinació amb aquest títol.',
'bad-target-model' => 'El destí desitjat utilitza un model de contingut diferent. No es pot convertir de $1 a $2.',
'imagenocrossnamespace' => 'No es pot moure la imatge a un espai de noms on no li correspon',
'nonfile-cannot-move-to-file' => 'No es pot moure la imatge a un espai de noms on no li correspon',
'imagetypemismatch' => 'La nova extensió de fitxer no coincideix amb el seu tipus',
'imageinvalidfilename' => 'El nom de fitxer indicat no és vàlid',
'fix-double-redirects' => "Actualitza també les redireccions que apuntin a l'article original",
'move-leave-redirect' => 'Deixa enrere una redirecció',
'protectedpagemovewarning' => "'''AVÍS: Aquesta pàgina està bloquejada i només els usuaris que tenen drets d'administrador la poden reanomenar.
A continuació es mostra la darrera entrada del registre com a referència:",
'semiprotectedpagemovewarning' => "'''Nota:''' Aquesta pàgina està bloquejada i només els usuaris registrats la poden moure.
A continuació es mostra la darrera entrada del registre com a referència:",
'move-over-sharedrepo' => "== El fitxer ja existeix ==
[[:$1]] ja existeix al dipòsit compartit. Moure un fitxer a aquest títol impedirà d'ús del fitxer compartit.",
'file-exists-sharedrepo' => "El nom de fitxer escollit ja s'utilitza al dipòsit compartit. Escolliu un altre nom.",

# Export
'export' => 'Exporta les pàgines',
'exporttext' => "Podeu exportar a XML el text i l'historial d'una pàgina en concret o d'un conjunt de pàgines; aleshores el resultat pot importar-se en un altre lloc web basat en wiki amb programari de MediaWiki mitjançant la [[Special:Import|pàgina d'importació]].

Per a exportar pàgines, escriviu els títols que desitgeu al quadre de text de sota, un títol per línia, i seleccioneu si desitgeu o no la versió actual juntament amb totes les versions antigues, amb la pàgina d'historial, o només la pàgina actual amb la informació de la darrera modificació.

En el darrer cas, podeu fer servir un enllaç com ara [[{{#Special:Export}}/{{MediaWiki:Mainpage}}]] per a la pàgina «[[{{MediaWiki:Mainpage}}]]».",
'exportall' => 'Exporta totes les pàgines',
'exportcuronly' => "Exporta únicament la versió actual en voltes de l'historial sencer",
'exportnohistory' => "----
'''Nota:''' s'ha inhabilitat l'exportació sencera d'historial de pàgines mitjançant aquest formulari a causa de problemes de rendiment del servidor.",
'exportlistauthors' => 'Inclouen una llista completa dels contribuents per a cada pàgina',
'export-submit' => 'Exporta',
'export-addcattext' => 'Afegeix pàgines de la categoria:',
'export-addcat' => 'Afegeix',
'export-addnstext' => "Afegeix pàgines de l'espai de noms:",
'export-addns' => 'Afegir',
'export-download' => 'Ofereix desar com a fitxer',
'export-templates' => 'Inclou les plantilles',
'export-pagelinks' => 'Inclou pàgines enllaçades fins una profunditat de:',

# Namespace 8 related
'allmessages' => 'Tots els missatges del sistema',
'allmessagesname' => 'Nom',
'allmessagesdefault' => 'Text per defecte',
'allmessagescurrent' => 'Text actual',
'allmessagestext' => "Tot seguit hi ha una llista dels missatges del sistema que es troben a l'espai de noms ''MediaWiki''. La traducció genèrica d'aquests missatges no s'hauria de fer localment sinó a la traducció del programari MediaWiki. Si voleu ajudar-hi visiteu [//www.mediawiki.org/wiki/Localisation MediaWiki Localisation] i [//translatewiki.net translatewiki.net].",
'allmessagesnotsupportedDB' => "No es pot processar '''{{ns:special}}:Allmessages''' perquè la variable '''\$wgUseDatabaseMessages''' està desactivada.",
'allmessages-filter-legend' => 'Filtre',
'allmessages-filter' => "Filtra per l'estat de personalització:",
'allmessages-filter-unmodified' => 'Sense modificar',
'allmessages-filter-all' => 'Tots',
'allmessages-filter-modified' => 'Modificat',
'allmessages-prefix' => 'Filtra per prefix:',
'allmessages-language' => 'Idioma:',
'allmessages-filter-submit' => 'Vés-hi',

# Thumbnails
'thumbnail-more' => 'Amplia',
'filemissing' => 'Fitxer inexistent',
'thumbnail_error' => "S'ha produït un error en crear la miniatura: $1",
'djvu_page_error' => "La pàgina DjVu està fora de l'abast",
'djvu_no_xml' => "No s'ha pogut recollir l'XML per al fitxer DjVu",
'thumbnail-temp-create' => "No s'ha pogut creat el fitxer de miniatura temporal",
'thumbnail-dest-create' => 'No es pot desar la miniatura a la destinació',
'thumbnail_invalid_params' => 'Els paràmetres de les miniatures no són vàlids',
'thumbnail_dest_directory' => "No s'ha pogut crear el directori de destinació",
'thumbnail_image-type' => "Tipus d'imatge no contemplat",
'thumbnail_gd-library' => 'Configuració de la biblioteca GD incompleta: falta la funció $1',
'thumbnail_image-missing' => 'Sembla que falta el fitxer: $1',

# Special:Import
'import' => 'Importa les pàgines',
'importinterwiki' => 'Importa interwiki',
'import-interwiki-text' => "Trieu un web basat en wiki i un títol de pàgina per a importar.
Es conservaran les dates de les versions i els noms dels editors.
Totes les accions d'importació interwiki es conserven al [[Special:Log/import|registre d'importacions]].",
'import-interwiki-source' => "Pàgina/wiki d'origen:",
'import-interwiki-history' => "Copia totes les versions de l'historial d'aquesta pàgina",
'import-interwiki-templates' => 'Inclou totes les plantilles',
'import-interwiki-submit' => 'Importa',
'import-interwiki-namespace' => 'Espai de noms de destinació:',
'import-interwiki-rootpage' => 'Pàgina arrel de destí (opcional):',
'import-upload-filename' => 'Nom de fitxer:',
'import-comment' => 'Comentari:',
'importtext' => "Exporteu el fitxer des del wiki d'origen utilitzant l'[[Special:Export|eina d'exportació]].
Deseu-lo al vostre ordinador i carregueu-ne una còpia ací.",
'importstart' => "S'estan important pàgines...",
'import-revision-count' => '$1 {{PLURAL:$1|revisió|revisions}}',
'importnopages' => 'No hi ha cap pàgina per importar.',
'imported-log-entries' => "{{PLURAL:$1|S'ha importat una entrada del registre|S'han importat $1 entrades del registre}}.",
'importfailed' => 'La importació ha fallat: $1',
'importunknownsource' => "No es reconeix el tipus de la font d'importació",
'importcantopen' => "No ha estat possible d'obrir el fitxer a importar",
'importbadinterwiki' => "Enllaç d'interwiki incorrecte",
'importnotext' => 'Buit o sense text',
'importsuccess' => "S'ha acabat d'importar.",
'importhistoryconflict' => "Hi ha un conflicte de versions en l'historial (la pàgina podria haver sigut importada abans)",
'importnosources' => "No s'ha definit cap font d'origen interwiki i s'ha inhabilitat la càrrega directa d'una còpia de l'historial",
'importnofile' => "No s'ha pujat cap fitxer d'importació.",
'importuploaderrorsize' => "La càrrega del fitxer d'importació ha fallat. El fitxer és més gran que la mida de càrrega permesa.",
'importuploaderrorpartial' => "La càrrega del fitxer d'importació ha fallat. El fitxer s'ha penjat només parcialment.",
'importuploaderrortemp' => "La càrrega del fitxer d'importació ha fallat. Manca una carpeta temporal.",
'import-parse-failure' => "error a en importar l'XML",
'import-noarticle' => 'No hi ha cap pàgina per importar!',
'import-nonewrevisions' => "Totes les revisions s'havien importat abans.",
'xml-error-string' => '$1 a la línia $2, columna $3 (byte $4): $5',
'import-upload' => 'Carrega dades XML',
'import-token-mismatch' => 'Pèrdua de dades de sessió. Torneu-ho a intentar.',
'import-invalid-interwiki' => 'No es pot importar des del wiki especificat.',
'import-error-edit' => "La pàgina «$1» no s'ha importat perquè no teniu permís per modificar-la.",
'import-error-create' => "La pàgina «$1» no s'ha importat perquè no teniu permís per crear-la.",
'import-error-interwiki' => "No s'importa la pàgina «$1» perquè el seu nom està reservat a l'enllaçament extern (interwiki).",
'import-error-special' => "No s'importa la pàgina «$1» perquè el seu nom pertany a l'espai de noms especial que no permet pàgines.",
'import-error-invalid' => "No s'importa la pàgina «$1» perquè el seu nom no és vàlid.",
'import-options-wrong' => '{{PLURAL:$2|Opció equivocada|Opcions equivocades}}: <nowiki>$1</nowiki>',
'import-rootpage-invalid' => 'La pàgina arrel donada és un títol no vàlid.',
'import-rootpage-nosubpage' => 'L\'espai de noms "$1" de la pàgina arrel no permet subpàgines.',

# Import log
'importlogpage' => "Registre d'importació",
'importlogpagetext' => "Importacions administratives de pàgines amb l'historial des d'altres wikis.",
'import-logentry-upload' => 'ha importat [[$1]] per càrrega de fitxers',
'import-logentry-upload-detail' => '$1 {{PLURAL:$1|revisió|revisions}}',
'import-logentry-interwiki' => "s'ha importat $1 via interwiki",
'import-logentry-interwiki-detail' => '$1 {{PLURAL:$1|revisió|revisions}} de $2',

# JavaScriptTest
'javascripttest' => 'Proves de JavaScript',
'javascripttest-title' => "S'estan executant $1 proves",
'javascripttest-pagetext-noframework' => "Es reserva la pàgina per a l'execució de tests amb JavaScript.",
'javascripttest-pagetext-unknownframework' => "L'entorn de proves «$1» és desconegut.",
'javascripttest-pagetext-frameworks' => 'Trieu un dels següents entorns de prova: $1',
'javascripttest-pagetext-skins' => 'Trieu un tema on executar-hi els tests:',
'javascripttest-qunit-intro' => 'Consulteu la [documentació de tests de $1] a mediawiki.org.',
'javascripttest-qunit-heading' => 'Entorn de proves JavaScript QUnit per al MediaWiki',

# Tooltip help for the actions
'tooltip-pt-userpage' => "La vostra pàgina d'usuari",
'tooltip-pt-anonuserpage' => "La pàgina d'usuari per la ip que utilitzeu",
'tooltip-pt-mytalk' => 'La vostra pàgina de discussió.',
'tooltip-pt-anontalk' => 'Discussió sobre les edicions per aquesta adreça ip.',
'tooltip-pt-preferences' => 'Les vostres preferències.',
'tooltip-pt-watchlist' => 'La llista de pàgines de les que estau vigilant els canvis.',
'tooltip-pt-mycontris' => 'Llista de les vostres contribucions.',
'tooltip-pt-login' => 'Us animem a registrar-vos, però no és obligatori.',
'tooltip-pt-anonlogin' => 'Us animem a registrar-vos, però no és obligatori.',
'tooltip-pt-logout' => "Finalitza la sessió d'usuari",
'tooltip-ca-talk' => "Discussió sobre el contingut d'aquesta pàgina.",
'tooltip-ca-edit' => 'Podeu modificar aquesta pàgina. Si us plau, previsualitzeu-la abans de desar.',
'tooltip-ca-addsection' => 'Comença una nova secció',
'tooltip-ca-viewsource' => 'Aquesta pàgina està protegida. Podeu veure el seu codi font.',
'tooltip-ca-history' => "Versions antigues d'aquesta pàgina.",
'tooltip-ca-protect' => 'Protegeix aquesta pàgina.',
'tooltip-ca-unprotect' => 'Desprotegeix aquesta pàgina',
'tooltip-ca-delete' => 'Elimina aquesta pàgina',
'tooltip-ca-undelete' => 'Restaura les edicions fetes a aquesta pàgina abans de que fos esborrada.',
'tooltip-ca-move' => 'Reanomena aquesta pàgina',
'tooltip-ca-watch' => 'Afegiu aquesta pàgina a la vostra llista de seguiment.',
'tooltip-ca-unwatch' => 'Suprimiu aquesta pàgina de la vostra llista de seguiment',
'tooltip-search' => 'Cerca a {{SITENAME}}',
'tooltip-search-go' => 'Vés a una pàgina amb aquest nom exacte si existeix',
'tooltip-search-fulltext' => 'Cerca a les pàgines aquest text',
'tooltip-p-logo' => 'Pàgina principal',
'tooltip-n-mainpage' => 'Visiteu la pàgina principal.',
'tooltip-n-mainpage-description' => 'Vegeu la pàgina principal',
'tooltip-n-portal' => 'Sobre el projecte, què podeu fer, on podeu trobar coses.',
'tooltip-n-currentevents' => "Per trobar informació general sobre l'actualitat.",
'tooltip-n-recentchanges' => 'La llista de canvis recents a la wiki.',
'tooltip-n-randompage' => 'Vés a una pàgina aleatòria.',
'tooltip-n-help' => 'El lloc per esbrinar.',
'tooltip-t-whatlinkshere' => 'Llista de totes les pàgines viqui que enllacen ací.',
'tooltip-t-recentchangeslinked' => 'Canvis recents a pàgines que enllacen amb aquesta pàgina.',
'tooltip-feed-rss' => "Canal RSS d'aquesta pàgina",
'tooltip-feed-atom' => "Canal Atom d'aquesta pàgina",
'tooltip-t-contributions' => "Vegeu la llista de contribucions d'aquest usuari.",
'tooltip-t-emailuser' => 'Envia un correu en aquest usuari.',
'tooltip-t-upload' => "Càrrega d'imatges o altres fitxers.",
'tooltip-t-specialpages' => 'Llista de totes les pàgines especials.',
'tooltip-t-print' => "Versió per a impressió d'aquesta pàgina",
'tooltip-t-permalink' => 'Enllaç permanent a aquesta versió de la pàgina',
'tooltip-ca-nstab-main' => 'Vegeu el contingut de la pàgina.',
'tooltip-ca-nstab-user' => "Vegeu la pàgina de l'usuari.",
'tooltip-ca-nstab-media' => "Vegeu la pàgina de l'element multimèdia",
'tooltip-ca-nstab-special' => 'Aquesta és una pàgina especial, no podeu modificar-la',
'tooltip-ca-nstab-project' => 'Vegeu la pàgina del projecte',
'tooltip-ca-nstab-image' => 'Visualitza la pàgina del fitxer',
'tooltip-ca-nstab-mediawiki' => 'Vegeu el missatge de sistema',
'tooltip-ca-nstab-template' => 'Vegeu la plantilla',
'tooltip-ca-nstab-help' => "Vegeu la pàgina d'ajuda",
'tooltip-ca-nstab-category' => 'Vegeu la pàgina de la categoria',
'tooltip-minoredit' => 'Marca-ho com una modificació menor',
'tooltip-save' => 'Desa els vostres canvis',
'tooltip-preview' => 'Reviseu els vostres canvis, feu-ho abans de desar res!',
'tooltip-diff' => 'Mostra quins canvis heu fet al text',
'tooltip-compareselectedversions' => "Vegeu les diferències entre les dues versions seleccionades d'aquesta pàgina.",
'tooltip-watch' => 'Afegiu aquesta pàgina a la vostra llista de seguiment',
'tooltip-watchlistedit-normal-submit' => 'Suprimeix els títols',
'tooltip-watchlistedit-raw-submit' => 'Actualitza la llista de seguiment',
'tooltip-recreate' => 'Recrea la pàgina malgrat hagi estat suprimida',
'tooltip-upload' => 'Inicia la càrrega',
'tooltip-rollback' => "«Revertir» reverteix totes les edicions de l'últim usuari en un clic.",
'tooltip-undo' => '«Desfés» reverteix aquesta modificació i obre un formulari de previsualització.
Permet afegir un motiu al resum.',
'tooltip-preferences-save' => 'Desa preferències',
'tooltip-summary' => 'Afegiu un breu resum',

# Stylesheets
'common.css' => '/* Editeu aquest fitxer per personalitzar totes les aparences per al lloc sencer */',
'monobook.css' => "/* Editeu aquest fitxer per personalitzar l'aparença del monobook per a tot el lloc sencer */",

# Scripts
'common.js' => "/* Es carregarà per a tots els usuaris, i per a qualsevol pàgina, el codi JavaScript que hi haja després d'aquesta línia. */",

# Metadata
'notacceptable' => 'El servidor wiki no pot oferir dades en un format que el client no pot llegir.',

# Attribution
'anonymous' => 'Usuari{{PLURAL:$1| anònim|s anònims}} del projecte {{SITENAME}}',
'siteuser' => "{{GENDER:$2|l'usuari|la usuària}} $1 del projecte {{SITENAME}}",
'anonuser' => '$1, usuari anònim de {{SITENAME}}',
'lastmodifiedatby' => "Aquesta pàgina s'ha modificat per darrera vegada el dia $1 a les $2 per $3.",
'othercontribs' => 'Basat en les contribucions de $1.',
'others' => 'altres',
'siteusers' => 'Usuari{{PLURAL:$2||s}} $1 de {{SITENAME}}',
'anonusers' => '$1, {{PLURAL:$2|usuari anònim|usuaris anònims}} de {{SITENAME}}',
'creditspage' => 'Crèdits de la pàgina',
'nocredits' => 'No hi ha títols disponibles per aquesta pàgina.',

# Spam protection
'spamprotectiontitle' => 'Filtre de protecció de brossa',
'spamprotectiontext' => 'La pàgina que volíeu desar va ser blocada pel filtre de brossa.
Això deu ser degut per un enllaç a un lloc extern inclòs a la llista negra.',
'spamprotectionmatch' => 'El següent text és el que va disparar el nostre filtre de brossa: $1',
'spambot_username' => 'Neteja de brossa del MediaWiki',
'spam_reverting' => 'Es reverteix a la darrera versió que no conté enllaços a $1',
'spam_blanking' => "Totes les revisions contenien enllaços $1, s'està deixant en blanc",
'spam_deleting' => "S'estan suprimint totes les revisions que contenien enllaços a $1",

# Info page
'pageinfo-title' => 'Informació de «$1»',
'pageinfo-not-current' => 'Només es pot visualitzar la informació de la revisió actual.',
'pageinfo-header-basic' => 'Informació bàsica',
'pageinfo-header-edits' => "Historial d'edicions",
'pageinfo-header-restrictions' => 'Protecció de pàgina',
'pageinfo-header-properties' => 'Propietats de la pàgina',
'pageinfo-display-title' => 'Títol mostrat',
'pageinfo-default-sort' => "Clau d'ordenació predeterminada",
'pageinfo-length' => 'Mida de la pàgina (en bytes)',
'pageinfo-article-id' => 'ID de la pàgina',
'pageinfo-robot-policy' => 'Estat del motor de cerca',
'pageinfo-robot-index' => 'Indexable',
'pageinfo-robot-noindex' => 'No indexable',
'pageinfo-views' => 'Número de visites',
'pageinfo-watchers' => "Número d'usuaris que vigilen la pàgina",
'pageinfo-redirects-name' => 'Redireccions a aquesta pàgina',
'pageinfo-subpages-name' => "Subpàgines d'aquesta pàgina",
'pageinfo-subpages-value' => '$1 ($2 {{PLURAL:$2|redirecció|redireccions}}; $3 {{PLURAL:$3|no redireció|no redireccions}})',
'pageinfo-firstuser' => 'Creador de la pàgina',
'pageinfo-firsttime' => 'Data de la creació de la pàgina',
'pageinfo-lastuser' => 'Últim editor',
'pageinfo-lasttime' => "Data de l'última edició",
'pageinfo-edits' => "Número total d'edicions",
'pageinfo-authors' => "Número total d'autors diferents",
'pageinfo-recent-edits' => "Número d'edicions recents (en els darrers $1)",
'pageinfo-recent-authors' => "Número recent d'autors diferents",
'pageinfo-magic-words' => '{{PLURAL:$1|Paraula clau|Paraules clau}} ($1)',
'pageinfo-hidden-categories' => '{{PLURAL:$1|Categoria oculta|Categories ocultes}} ($1)',
'pageinfo-templates' => '{{PLURAL:$1|plantilla inclosa|plantilles incloses}} ($1)',
'pageinfo-toolboxlink' => 'Informació de la pàgina',
'pageinfo-redirectsto' => 'Redirigeix a',
'pageinfo-redirectsto-info' => 'info',
'pageinfo-contentpage' => 'Comptat com una pàgina de contingut',
'pageinfo-contentpage-yes' => 'Sí',
'pageinfo-protect-cascading' => "Proteccions en cascada des d'aquí",
'pageinfo-protect-cascading-yes' => 'Sí',
'pageinfo-protect-cascading-from' => 'Proteccions en cascada des de',

# Skin names
'skinname-standard' => 'Clàssic',
'skinname-nostalgia' => 'Nostàlgia',
'skinname-cologneblue' => 'Colònia blava',

# Patrolling
'markaspatrolleddiff' => 'Marca com a supervisat',
'markaspatrolledtext' => 'Marca la pàgina com a supervisada',
'markedaspatrolled' => 'Marca com a supervisat',
'markedaspatrolledtext' => 'La revisió seleccionada de [[:$1]] ha estat marcada com a patrullada.',
'rcpatroldisabled' => "S'ha inhabilitat la supervisió dels canvis recents",
'rcpatroldisabledtext' => 'La funció de supervisió de canvis recents està actualment inhabilitada.',
'markedaspatrollederror' => 'No es pot marcar com a supervisat',
'markedaspatrollederrortext' => 'Cal que especifiqueu una versió per a marcar-la com a supervisada.',
'markedaspatrollederror-noautopatrol' => 'No podeu marcar les vostres pròpies modificacions com a supervisades.',

# Patrol log
'patrol-log-page' => 'Registre de supervisió',
'patrol-log-header' => 'Això és un registre de les revisions patrullades.',
'log-show-hide-patrol' => '$1 el registre de patrulla',

# Image deletion
'deletedrevision' => "S'ha eliminat la revisió antiga $1.",
'filedeleteerror-short' => "S'ha produït un error en suprimir el fitxer: $1",
'filedeleteerror-long' => "S'han produït errors en suprimir el fitxer:

$1",
'filedelete-missing' => 'No es pot suprimir el fitxer «$1», perquè no existeix.',
'filedelete-old-unregistered' => 'La revisió de fitxer especificada «$1» no es troba a la base de dades.',
'filedelete-current-unregistered' => 'El fitxer especificat «$1» no es troba a la base de dades.',
'filedelete-archive-read-only' => "El directori d'arxiu «$1» no té permisos d'escriptura per al servidor web.",

# Browsing diffs
'previousdiff' => "← Vés a l'edició anterior",
'nextdiff' => "Vés a l'edició següent →",

# Media information
'mediawarning' => "'''Advertència''': Aquest fitxer podria contenir codi maliciós.
Si l'executeu, podeu comprometre la seguretat del vostre sistema.",
'imagemaxsize' => "Límit de mida d'imatges:<br />''(per a pàgines de descripció de fitxers)''",
'thumbsize' => 'Mida de la miniatura:',
'widthheightpage' => '$1 × $2, $3 {{PLURAL:$3|pàgina|pàgines}}',
'file-info' => 'mida: $1, tipus MIME: $2',
'file-info-size' => '$1 × $2 píxels, mida del fitxer: $3, tipus MIME: $4',
'file-info-size-pages' => '$1 × $2 píxels, mida del fitxer: $3, tipus MIME: $4, $5 {{PLURAL:$5|pàgina|pàgines}}',
'file-nohires' => 'No hi ha cap versió amb una resolució més gran.',
'svg-long-desc' => 'fitxer SVG, nominalment $1 × $2 píxels, mida del fitxer: $3',
'svg-long-desc-animated' => 'Fitxer SVG animat, nominalment $1 × $2 píxels, mida del fitxer: $3',
'show-big-image' => 'Imatge en màxima resolució',
'show-big-image-preview' => "Mida d'aquesta previsualització: $1.",
'show-big-image-other' => '{{PLURAL:$2|Altra resolució|Altres resolucions}}: $1.',
'show-big-image-size' => '$1 × $2 píxels',
'file-info-gif-looped' => 'embuclat',
'file-info-gif-frames' => '$1 {{PLURAL:$1|fotograma|fotogrames}}',
'file-info-png-looped' => 'embuclat',
'file-info-png-repeat' => "s'ha reproduït $1 {{PLURAL:$1|vegada|vegades}}",
'file-info-png-frames' => '$1 {{PLURAL:$1|fotograma|fotogrames}}',
'file-no-thumb-animation' => "'''Nota: degut a limitacions tècniques no s'animaran les miniatures per aquest fitxer.'''",
'file-no-thumb-animation-gif' => "''' Nota: degut a limitacions tècniques no s'animaran les miniatures d'alta resolució d'imatges GIF com aquesta.'''",

# Special:NewFiles
'newimages' => 'Galeria de nous fitxers',
'imagelisttext' => "Llista {{PLURAL:$1|d'un sol fitxer|de '''$1''' fitxers ordenats $2}}.",
'newimages-summary' => 'Aquesta pàgina especial mostra els darrers fitxers carregats.',
'newimages-legend' => 'Nom del fitxer',
'newimages-label' => "Nom de fitxer (o part d'ell):",
'showhidebots' => '($1 bots)',
'noimages' => 'Res per veure.',
'ilsubmit' => 'Cerca',
'bydate' => 'per data',
'sp-newimages-showfrom' => 'Mostra fitxers nous des del $1 a les $2',

# Video information, used by Language::formatTimePeriod() to format lengths in the above messages
'minutes-abbrev' => '$1 min',
'seconds' => '{{PLURAL:$1|$1 segon|$1 segons}}',
'minutes' => '{{PLURAL:$1|$1 minut|$1 minuts}}',
'hours' => '{{PLURAL:$1|$1 hora|$1 hores}}',
'days' => '{{PLURAL:$1|$1 dia|$1 dies}}',
'ago' => 'fa $1',

# Bad image list
'bad_image_list' => "El format ha de ser el següent:

Només els elements de llista (les línies que comencin amb un *) es prenen en consideració. El primer enllaç de cada línia ha de ser el d'un fitxer dolent.
La resta d'enllaços de la línia són les excepcions, és a dir, les pàgines on s'hi pot encabir el fitxer.",

# Metadata
'metadata' => 'Metadades',
'metadata-help' => "Aquest fitxer conté informació addicional, probablement afegida per la càmera digital o l'escàner utilitzat per a crear-lo o digitalitzar-lo. Si s'ha modificat posteriorment, alguns detalls poden no reflectir les dades reals del fitxer modificat.",
'metadata-expand' => 'Mostra els detalls estesos',
'metadata-collapse' => 'Amaga els detalls estesos',
'metadata-fields' => "Els camps de metadades de la imatge llistats en aquest missatge s'inclouran en la pàgina de descripció de la imatge fins i tot quan la taula estigui plegada. La resta estaran ocults però es podran desplegar.
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
* gpsaltitude",

# EXIF tags
'exif-imagewidth' => 'Amplada',
'exif-imagelength' => 'Alçada',
'exif-bitspersample' => 'Octets per component',
'exif-compression' => 'Esquema de compressió',
'exif-photometricinterpretation' => 'Composició dels píxels',
'exif-orientation' => 'Orientació',
'exif-samplesperpixel' => 'Nombre de components',
'exif-planarconfiguration' => 'Ordenament de dades',
'exif-ycbcrsubsampling' => 'Proporció de mostreig secundari de Y amb C',
'exif-ycbcrpositioning' => 'Posició YCbCr',
'exif-xresolution' => 'Resolució horitzontal',
'exif-yresolution' => 'Resolució vertical',
'exif-stripoffsets' => 'Ubicació de les dades de la imatge',
'exif-rowsperstrip' => 'Nombre de fileres per franja',
'exif-stripbytecounts' => 'Octets per franja comprimida',
'exif-jpeginterchangeformat' => 'Ancorament del JPEG SOI',
'exif-jpeginterchangeformatlength' => 'Octets de dades JPEG',
'exif-whitepoint' => 'Cromositat del punt blanc',
'exif-primarychromaticities' => 'Coordenada cromàtica del color primari',
'exif-ycbcrcoefficients' => "Quoficients de la matriu de transformació de l'espai colorimètric",
'exif-referenceblackwhite' => 'Valors de referència negre i blanc',
'exif-datetime' => 'Data i hora de modificació del fitxer',
'exif-imagedescription' => 'Títol de la imatge',
'exif-make' => 'Fabricant de la càmera',
'exif-model' => 'Model de càmera',
'exif-software' => 'Programari utilitzat',
'exif-artist' => 'Autor',
'exif-copyright' => "Titular dels drets d'autor",
'exif-exifversion' => 'Versió Exif',
'exif-flashpixversion' => 'Versió Flashpix admesa',
'exif-colorspace' => 'Espai de color',
'exif-componentsconfiguration' => 'Significat de cada component',
'exif-compressedbitsperpixel' => "Mode de compressió d'imatge",
'exif-pixelydimension' => 'Amplada de la imatge',
'exif-pixelxdimension' => 'Alçada de la imatge',
'exif-usercomment' => "Comentaris de l'usuari",
'exif-relatedsoundfile' => "Fitxer d'àudio relacionat",
'exif-datetimeoriginal' => 'Dia i hora de generació de les dades',
'exif-datetimedigitized' => 'Dia i hora de digitalització',
'exif-subsectime' => 'Data i hora, fraccions de segon',
'exif-subsectimeoriginal' => 'Data i hora de creació, fraccions de segon',
'exif-subsectimedigitized' => 'Data i hora de digitalització, fraccions de segon',
'exif-exposuretime' => "Temps d'exposició",
'exif-exposuretime-format' => '$1 s ($2)',
'exif-fnumber' => 'Obertura del diafragma',
'exif-exposureprogram' => "Programa d'exposició",
'exif-spectralsensitivity' => 'Sensibilitat espectral',
'exif-isospeedratings' => 'Sensibilitat ISO',
'exif-shutterspeedvalue' => "APEX velocitat d'obturació",
'exif-aperturevalue' => 'APEX obertura',
'exif-brightnessvalue' => 'APEX brillantor',
'exif-exposurebiasvalue' => "Correcció d'exposició",
'exif-maxaperturevalue' => "Camp d'obertura màxim",
'exif-subjectdistance' => 'Distància del subjecte',
'exif-meteringmode' => 'Mode de mesura',
'exif-lightsource' => 'Font de llum',
'exif-flash' => 'Flaix',
'exif-focallength' => 'Longitud focal de la lent',
'exif-subjectarea' => 'Enquadre del subjecte',
'exif-flashenergy' => 'Energia del flaix',
'exif-focalplanexresolution' => 'Resolució X del pla focal',
'exif-focalplaneyresolution' => 'Resolució Y del pla focal',
'exif-focalplaneresolutionunit' => 'Unitat de resolució del pla focal',
'exif-subjectlocation' => 'Posició del subjecte',
'exif-exposureindex' => "Índex d'exposició",
'exif-sensingmethod' => 'Mètode de detecció',
'exif-filesource' => 'Font del fitxer',
'exif-scenetype' => "Tipus d'escena",
'exif-customrendered' => "Processament d'imatge personalitzat",
'exif-exposuremode' => "Mode d'exposició",
'exif-whitebalance' => 'Balanç de blancs',
'exif-digitalzoomratio' => "Escala d'ampliació digital (zoom)",
'exif-focallengthin35mmfilm' => 'Distància focal per a peŀlícula de 35 mm',
'exif-scenecapturetype' => "Tipus de captura d'escena",
'exif-gaincontrol' => "Control d'escena",
'exif-contrast' => 'Contrast',
'exif-saturation' => 'Saturació',
'exif-sharpness' => 'Nitidesa',
'exif-devicesettingdescription' => 'Descripció dels paràmetres del dispositiu',
'exif-subjectdistancerange' => 'Escala de distància del subjecte',
'exif-imageuniqueid' => 'Identificador únic de la imatge',
'exif-gpsversionid' => 'Versió del tag GPS',
'exif-gpslatituderef' => 'Latitud nord o sud',
'exif-gpslatitude' => 'Latitud',
'exif-gpslongituderef' => 'Longitud est o oest',
'exif-gpslongitude' => 'Longitud',
'exif-gpsaltituderef' => "Referència d'altitud",
'exif-gpsaltitude' => 'Altitud',
'exif-gpstimestamp' => 'Hora GPS (rellotge atòmic)',
'exif-gpssatellites' => 'Satèŀlits utilitzats en la mesura',
'exif-gpsstatus' => 'Estat del receptor',
'exif-gpsmeasuremode' => 'Mode de mesura',
'exif-gpsdop' => 'Precisió de la mesura',
'exif-gpsspeedref' => 'Unitats de velocitat',
'exif-gpsspeed' => 'Velocitat del receptor GPS',
'exif-gpstrackref' => 'Referència per la direcció del moviment',
'exif-gpstrack' => 'Direcció del moviment',
'exif-gpsimgdirectionref' => 'Referència per la direcció de la imatge',
'exif-gpsimgdirection' => 'Direcció de la imatge',
'exif-gpsmapdatum' => "S'han utilitzat dades d'informes geodètics",
'exif-gpsdestlatituderef' => 'Referència per a la latitud de la destinació',
'exif-gpsdestlatitude' => 'Latitud de la destinació',
'exif-gpsdestlongituderef' => 'Referència per a la longitud de la destinació',
'exif-gpsdestlongitude' => 'Longitud de la destinació',
'exif-gpsdestbearingref' => "Referència per a l'orientació de la destinació",
'exif-gpsdestbearing' => 'Orientació de la destinació',
'exif-gpsdestdistanceref' => 'Referència de la distància a la destinació',
'exif-gpsdestdistance' => 'Distància a la destinació',
'exif-gpsprocessingmethod' => 'Nom del mètode de processament GPS',
'exif-gpsareainformation' => "Nom de l'àrea GPS",
'exif-gpsdatestamp' => 'Data GPS',
'exif-gpsdifferential' => 'Correcció diferencial GPS',
'exif-jpegfilecomment' => 'Comentari del fitxer JPEG',
'exif-keywords' => 'Paraules clau',
'exif-worldregioncreated' => 'Regió del món on la foto va ser presa',
'exif-countrycreated' => 'País on la foto va ser presa',
'exif-countrycodecreated' => 'Codi del país on la foto va ser presa',
'exif-provinceorstatecreated' => 'Província o estat on la foto va ser presa',
'exif-citycreated' => 'Ciutat on la foto va ser presa',
'exif-sublocationcreated' => 'Sublocalització de la ciutat on la foto va ser presa',
'exif-worldregiondest' => 'Regió del món que mostra',
'exif-countrydest' => 'País que mostra',
'exif-countrycodedest' => 'Codi del país que mostra',
'exif-provinceorstatedest' => 'Província o estat que mostra',
'exif-citydest' => 'Ciutat que mostra',
'exif-sublocationdest' => 'Sublocalització de la ciutat que mostra',
'exif-objectname' => 'Títol abreujat',
'exif-specialinstructions' => 'Instruccions especials',
'exif-headline' => 'Encapçalament',
'exif-credit' => 'Crèdit / Proveïdor',
'exif-source' => 'Font',
'exif-editstatus' => 'Estat de redacció de la imatge',
'exif-urgency' => 'Urgència',
'exif-fixtureidentifier' => "Nom de l'accessori",
'exif-locationdest' => 'Ubicació representada',
'exif-locationdestcode' => 'Codi de la ubicació que mostra',
'exif-objectcycle' => 'Moment del dia al qual va destinat el mitjà de comunicació',
'exif-contact' => 'Informació de contacte',
'exif-writer' => 'Escriptor',
'exif-languagecode' => 'Idioma',
'exif-iimversion' => 'IIM versió',
'exif-iimcategory' => 'Categoria',
'exif-iimsupplementalcategory' => 'Categories suplementàries',
'exif-datetimeexpires' => 'No utilitzar després',
'exif-datetimereleased' => 'Data de llançament',
'exif-originaltransmissionref' => 'Transmissió original del codi de la ubicació',
'exif-identifier' => 'Identificador',
'exif-lens' => 'Objectiu utilitzat',
'exif-serialnumber' => 'Número de sèrie de la càmera',
'exif-cameraownername' => 'Propietari de la càmera',
'exif-label' => 'Etiqueta',
'exif-datetimemetadata' => 'Data que la metadata ha estat modificada per última vegada',
'exif-nickname' => "Nom informal de l'imatge",
'exif-rating' => 'Valoració (sobre 5)',
'exif-rightscertificate' => 'Certificat de gestió de drets',
'exif-copyrighted' => "Estat dels drets d'autor",
'exif-copyrightowner' => "Propietari dels drets d'autor",
'exif-usageterms' => "Termes d'ús",
'exif-webstatement' => "Declaració de drets d'autor en línia",
'exif-originaldocumentid' => 'ID únic del document original',
'exif-licenseurl' => "Direcció de llicències de drets d'autor",
'exif-morepermissionsurl' => 'Alternativa informació de llicència',
'exif-attributionurl' => 'Quan re-utilitzis aquest treball, si us plau posa un enllaç a',
'exif-preferredattributionname' => 'Quan re-utilitzis aquest treball, si us plau posa un credit a',
'exif-pngfilecomment' => 'Comentari del fitxer PNG',
'exif-disclaimer' => 'Avís general',
'exif-contentwarning' => 'Advertència de contingut',
'exif-giffilecomment' => 'Comentari del fitxer GIF',
'exif-intellectualgenre' => "Tipus d'article",
'exif-subjectnewscode' => 'Codi del subjecte',
'exif-scenecode' => "Codi d'escena IPTC",
'exif-event' => 'Esdeveniment representat',
'exif-organisationinimage' => 'Organització representada',
'exif-personinimage' => 'Persona representada',
'exif-originalimageheight' => 'Alçada de la imatge abans que fos retallada',
'exif-originalimagewidth' => 'Amplada de la imatge abans que fos retallada',

# EXIF attributes
'exif-compression-1' => 'Sense compressió',
'exif-compression-2' => 'Codificació CCITT Grup 3 longitud monodimensional de Huffman modificat',
'exif-compression-3' => 'Codificació de fax CCITT grup 3',
'exif-compression-4' => 'Codificació de fax CCITT grup 4',

'exif-copyrighted-true' => "Sotmesa a drets d'autor",
'exif-copyrighted-false' => 'de domini públic',

'exif-unknowndate' => 'Data desconeguda',

'exif-orientation-1' => 'Normal',
'exif-orientation-2' => 'Invertit horitzontalment',
'exif-orientation-3' => 'Girat 180°',
'exif-orientation-4' => 'Invertit verticalment',
'exif-orientation-5' => 'Rotat 90° en sentit antihorari i invertit verticalment',
'exif-orientation-6' => 'Rotat 90° en sentit antihorari',
'exif-orientation-7' => 'Rotat 90° en sentit horari i invertit verticalment',
'exif-orientation-8' => 'Rotat 90° en sentit horari',

'exif-planarconfiguration-1' => 'a blocs densos (chunky)',
'exif-planarconfiguration-2' => 'format pla',

'exif-xyresolution-i' => '$1 ppp',
'exif-xyresolution-c' => '$1 ppc',

'exif-colorspace-65535' => 'Sense calibrar',

'exif-componentsconfiguration-0' => 'no existeix',

'exif-exposureprogram-0' => 'No definit',
'exif-exposureprogram-1' => 'Manual',
'exif-exposureprogram-2' => 'Programa normal',
'exif-exposureprogram-3' => "amb prioritat d'obertura",
'exif-exposureprogram-4' => "amb prioritat de velocitat d'obturació",
'exif-exposureprogram-5' => 'Programa creatiu (preferència a la profunditat de camp)',
'exif-exposureprogram-6' => "Programa acció (preferència a la velocitat d'obturació)",
'exif-exposureprogram-7' => 'Mode retrat (per primers plans amb fons desenfocat)',
'exif-exposureprogram-8' => 'Mode paisatge (per fotos de paisatges amb el fons enfocat)',

'exif-subjectdistance-value' => '$1 metres',

'exif-meteringmode-0' => 'Desconegut',
'exif-meteringmode-1' => 'Mitjana',
'exif-meteringmode-2' => 'Mesura central mitjana',
'exif-meteringmode-3' => 'Puntual',
'exif-meteringmode-4' => 'Multipuntual',
'exif-meteringmode-5' => 'Patró',
'exif-meteringmode-6' => 'Parcial',
'exif-meteringmode-255' => 'Altres',

'exif-lightsource-0' => 'Desconegut',
'exif-lightsource-1' => 'Llum de dia',
'exif-lightsource-2' => 'Fluorescent',
'exif-lightsource-3' => 'Tungstè (llum incandescent)',
'exif-lightsource-4' => 'Flaix',
'exif-lightsource-9' => 'Clar',
'exif-lightsource-10' => 'Ennuvolat',
'exif-lightsource-11' => 'Ombra',
'exif-lightsource-12' => 'Fluorescent de llum del dia (D 5700 – 7100K)',
'exif-lightsource-13' => 'Fluorescent de llum blanca (N 4600 – 5400K)',
'exif-lightsource-14' => 'Fluorescent blanc fred (W 3900 – 4500K)',
'exif-lightsource-15' => 'Fluorescent blanc (WW 3200 – 3700K)',
'exif-lightsource-17' => 'Llum estàndard A',
'exif-lightsource-18' => 'Llum estàndard B',
'exif-lightsource-19' => 'Llum estàndard C',
'exif-lightsource-24' => "Bombeta de tungstè d'estudi ISO",
'exif-lightsource-255' => 'Altre font de llum',

# Flash modes
'exif-flash-fired-0' => "No s'ha disparat el flaix",
'exif-flash-fired-1' => 'Flaix disparat',
'exif-flash-return-0' => 'no hi ha funció de detecció del retorn de la llum estroboscòpica',
'exif-flash-return-2' => "no s'ha detectat retorn de llum estroboscòpica",
'exif-flash-return-3' => "s'ha detectat retorn de llum estroboscòpica",
'exif-flash-mode-1' => 'disparada de flaix obligatòria',
'exif-flash-mode-2' => 'tret de flash suprimit',
'exif-flash-mode-3' => 'mode automàtic',
'exif-flash-function-1' => 'Sense funció de flaix',
'exif-flash-redeye-1' => "reducció d'ulls vermells",

'exif-focalplaneresolutionunit-2' => 'polzades',

'exif-sensingmethod-1' => 'Indefinit',
'exif-sensingmethod-2' => "Sensor d'àrea de color a un xip",
'exif-sensingmethod-3' => "Sensor d'àrea de color a dos xips",
'exif-sensingmethod-4' => "Sensor d'àrea de color a tres xips",
'exif-sensingmethod-5' => "Sensor d'àrea de color per seqüències",
'exif-sensingmethod-7' => 'Sensor trilineal',
'exif-sensingmethod-8' => 'Sensor linear de color per seqüències',

'exif-filesource-3' => 'Càmera fotogràfica digital',

'exif-scenetype-1' => 'Una imatge fotografiada directament',

'exif-customrendered-0' => 'Procés normal',
'exif-customrendered-1' => 'Processament personalitzat',

'exif-exposuremode-0' => 'Exposició automàtica',
'exif-exposuremode-1' => 'Exposició manual',
'exif-exposuremode-2' => 'Bracketting automàtic',

'exif-whitebalance-0' => 'Balanç automàtic de blancs',
'exif-whitebalance-1' => 'Balanç manual de blancs',

'exif-scenecapturetype-0' => 'Estàndard',
'exif-scenecapturetype-1' => 'Paisatge',
'exif-scenecapturetype-2' => 'Retrat',
'exif-scenecapturetype-3' => 'Escena nocturna',

'exif-gaincontrol-0' => 'Cap',
'exif-gaincontrol-1' => 'Baix augment del guany',
'exif-gaincontrol-2' => 'Fort augment del guany',
'exif-gaincontrol-3' => 'Baixa reducció del guany',
'exif-gaincontrol-4' => 'Fort augment del guany',

'exif-contrast-0' => 'Normal',
'exif-contrast-1' => 'Suau',
'exif-contrast-2' => 'Fort',

'exif-saturation-0' => 'Normal',
'exif-saturation-1' => 'Baixa saturació',
'exif-saturation-2' => 'Alta saturació',

'exif-sharpness-0' => 'Normal',
'exif-sharpness-1' => 'Suau',
'exif-sharpness-2' => 'Fort',

'exif-subjectdistancerange-0' => 'Desconeguda',
'exif-subjectdistancerange-1' => 'Macro',
'exif-subjectdistancerange-2' => 'Subjecte a prop',
'exif-subjectdistancerange-3' => 'Subjecte lluny',

# Pseudotags used for GPSLatitudeRef and GPSDestLatitudeRef
'exif-gpslatitude-n' => 'Latitud nord',
'exif-gpslatitude-s' => 'Latitud sud',

# Pseudotags used for GPSLongitudeRef and GPSDestLongitudeRef
'exif-gpslongitude-e' => 'Longitud est',
'exif-gpslongitude-w' => 'Longitud oest',

# Pseudotags used for GPSAltitudeRef
'exif-gpsaltitude-above-sealevel' => '$1 {{PLURAL:$1|metre|metres}} sobre el nivell del mar',
'exif-gpsaltitude-below-sealevel' => '$1 {{PLURAL:$1|metre|metres}} sota el nivell del mar',

'exif-gpsstatus-a' => 'Mesura en curs',
'exif-gpsstatus-v' => 'Interoperabilitat de mesura',

'exif-gpsmeasuremode-2' => 'Mesura bidimensional',
'exif-gpsmeasuremode-3' => 'Mesura tridimensional',

# Pseudotags used for GPSSpeedRef
'exif-gpsspeed-k' => 'Quilòmetres per hora',
'exif-gpsspeed-m' => 'Milles per hora',
'exif-gpsspeed-n' => 'Nusos',

# Pseudotags used for GPSDestDistanceRef
'exif-gpsdestdistance-k' => 'Quilòmetres',
'exif-gpsdestdistance-m' => 'Milles',
'exif-gpsdestdistance-n' => 'Milles nàutiques',

'exif-gpsdop-excellent' => 'Exceŀlent ($1)',
'exif-gpsdop-good' => 'Bona ($1)',
'exif-gpsdop-moderate' => 'Moderada ($1)',
'exif-gpsdop-fair' => 'Justa ($1)',
'exif-gpsdop-poor' => 'Pobra ($1)',

'exif-objectcycle-a' => 'Només al matí',
'exif-objectcycle-p' => 'Només al vespre',
'exif-objectcycle-b' => 'Tant al matí com al vespre',

# Pseudotags used for GPSTrackRef, GPSImgDirectionRef and GPSDestBearingRef
'exif-gpsdirection-t' => 'Direcció real',
'exif-gpsdirection-m' => 'Direcció magnètica',

'exif-ycbcrpositioning-1' => 'Centrat',
'exif-ycbcrpositioning-2' => 'co-localitzats',

'exif-dc-contributor' => 'Coŀlaboradors',
'exif-dc-coverage' => 'Abast espacial o temporal del contingut',
'exif-dc-date' => 'Data(es)',
'exif-dc-publisher' => 'Editorial',
'exif-dc-relation' => 'Fitxers multimèdia relacionats',
'exif-dc-rights' => 'Drets',
'exif-dc-source' => "Fitxer d'origen",
'exif-dc-type' => 'Tipus de contingut',

'exif-rating-rejected' => 'Rebutjat',

'exif-isospeedratings-overflow' => 'Superior a 65535',

'exif-iimcategory-ace' => 'Art, cultura i entreteniment',
'exif-iimcategory-clj' => 'Crim i dret',
'exif-iimcategory-dis' => 'Desastres i accidents',
'exif-iimcategory-fin' => 'Economia i negocis',
'exif-iimcategory-edu' => 'Educació',
'exif-iimcategory-evn' => 'Medi ambient',
'exif-iimcategory-hth' => 'Salut',
'exif-iimcategory-hum' => 'Interès humà',
'exif-iimcategory-lab' => 'Treball',
'exif-iimcategory-lif' => "Estil de vida i d'oci",
'exif-iimcategory-pol' => 'Política',
'exif-iimcategory-rel' => 'Religió i creences',
'exif-iimcategory-sci' => 'Ciència i tecnologia',
'exif-iimcategory-soi' => 'Qüestions socials',
'exif-iimcategory-spo' => 'Esport',
'exif-iimcategory-war' => 'Guerra, conflictes i disturbis',
'exif-iimcategory-wea' => 'Meteorologia',

'exif-urgency-normal' => 'Normal ($1)',
'exif-urgency-low' => 'Baixa ($1)',
'exif-urgency-high' => 'Alta ($1)',
'exif-urgency-other' => "Prioritat definida per l'usuari ($1)",

# External editor support
'edit-externally' => 'Edita aquest fitxer fent servir una aplicació externa',
'edit-externally-help' => '(Vegeu les [//www.mediawiki.org/wiki/Manual:External_editors instruccions de configuració] per a més informació)',

# 'all' in various places, this might be different for inflected languages
'watchlistall2' => 'totes',
'namespacesall' => 'tots',
'monthsall' => 'tots',
'limitall' => 'tots',

# E-mail address confirmation
'confirmemail' => "Confirma l'adreça de correu electrònic",
'confirmemail_noemail' => "No heu introduït una direcció vàlida de correu electrònic en les vostres [[Special:Preferences|preferències d'usuari]].",
'confirmemail_text' => "El projecte {{SITENAME}} necessita que valideu la vostra adreça de correu
electrònic per a poder gaudir d'algunes facilitats. Cliqueu el botó inferior
per a enviar un codi de confirmació a la vostra adreça. Seguiu l'enllaç que
hi haurà al missatge enviat per a confirmar que el vostre correu és correcte.",
'confirmemail_pending' => "Ja s'ha enviat el vostre codi de confirmació per correu electrònic; si
fa poc hi heu creat el vostre compte, abans de mirar de demanar un nou
codi, primer hauríeu d'esperar alguns minuts per a rebre'l.",
'confirmemail_send' => 'Envia per correu electrònic un codi de confirmació',
'confirmemail_sent' => "S'ha enviat un missatge de confirmació.",
'confirmemail_oncreate' => "S'ha enviat un codi de confirmació a la vostra adreça de correu electrònic.
No es requereix aquest codi per a autenticar-s'hi, però vos caldrà proporcionar-lo
abans d'activar qualsevol funcionalitat del wiki basada en missatges
de correu electrònic.",
'confirmemail_sendfailed' => "{{SITENAME}} no ha pogut enviar el vostre missatge de confirmació.
Comproveu que l'adreça no tingui caràcters no vàlids.

El programari de correu retornà el següent missatge: $1",
'confirmemail_invalid' => 'El codi de confirmació no és vàlid. Aquest podria haver vençut.',
'confirmemail_needlogin' => 'Necessiteu $1 per a confirmar la vostra adreça electrònica.',
'confirmemail_success' => "S'ha confirmat la vostra adreça electrònica.
Ara podeu [[Special:UserLogin|iniciar una sessió]] i gaudir del wiki.",
'confirmemail_loggedin' => "Ja s'ha confirmat la vostra adreça electrònica.",
'confirmemail_error' => 'Quelcom ha fallat en desar la vostra confirmació.',
'confirmemail_subject' => "Confirmació de l'adreça electrònica del projecte {{SITENAME}}",
'confirmemail_body' => "Algú, segurament vós, ha registrat el compte «$2» al projecte {{SITENAME}}
amb aquesta adreça electrònica des de l'adreça IP $1.

Per a confirmar que aquesta adreça electrònica us pertany realment
i així activar les opcions de correu del programari, seguiu aquest enllaç:

$3

Si *no* heu estat qui ho ha fet, seguiu aquest altre enllaç per a canceŀlar la confirmació demanada:

$5

Aquest codi de confirmació caducarà a $4.",
'confirmemail_body_changed' => 'Algú, segurament vós, des de l\'adreça IP $1, ha canviat al projecte {{SITENAME}} l\'adreça de correu del compte "$2" a aquesta adreça.

Per confirmar que aquest compte realment us pertany i per reactivar
les opcions de correu a {{SITENAME}}, obriu el següent enllaç al vostre navegador:

$3

Si el compte *no* us pertany, seguiu l\'enllaç següent
per a cancel·lar la confirmació d\'adreça de correu:

$5

Aquest codi de confirmació expirarà el $4.',
'confirmemail_body_set' => "Algú, probablement vós, des de l'adreça IP $1, 
ha establert aquesta adreça de correu electrònic com la del compte «$2» del lloc {{SITENAME}}. 

Per confirmar que aquest compte realment us pertany i reactivar 
les facilitats de correu electrònic a {{SITENAME}}, cal que obriu al navegador aquest enllaç:

$3

Si el compte *no* us pertany, canceŀleu l'adreça de correu electrònic seguint aquest enllaç: 

$5

Aquest codi de confirmació caducarà el $4.",
'confirmemail_invalidated' => "Confirmació d'adreça electrònica canceŀlada",
'invalidateemail' => "Canceŀlació d'adreça electrònica",

# Scary transclusion
'scarytranscludedisabled' => "[S'ha inhabilitat la transclusió interwiki]",
'scarytranscludefailed' => '[Ha fallat la recuperació de la plantilla per a $1]',
'scarytranscludetoolong' => "[L'URL és massa llarg]",

# Delete conflict
'deletedwhileediting' => "'''Avís''': S'ha eliminat aquesta pàgina després que haguéssiu començat a modificar-la!",
'confirmrecreate' => "L'usuari [[User:$1|$1]] ([[User talk:$1|discussió]]) va eliminar aquesta pàgina que havíeu creat donant-ne el següent motiu:
: ''$2''
Confirmeu que realment voleu tornar-la a crear.",
'confirmrecreate-noreason' => "L'{{GENDER:$1|usuari|usuària}} [[User:$1|$1]] ([[User talk:$1|discussió]]) va esborrar aquesta pàgina després que la comencéssiu a modificar. Si us plau, confirmeu que realment voleu tornar-la a crear.",
'recreate' => 'Torna a crear',

# action=purge
'confirm_purge_button' => 'OK',
'confirm-purge-top' => "Voleu buidar la memòria cau d'aquesta pàgina?",
'confirm-purge-bottom' => "Purgar una pàgina força que hi aparegui la versió més actual i n'esborra la memòria cau.",

# action=watch/unwatch
'confirm-watch-button' => "D'acord",
'confirm-watch-top' => 'Voleu afegir aquesta pàgina a la llista de seguiment?',
'confirm-unwatch-button' => "D'acord",
'confirm-unwatch-top' => 'Voleu treure aquesta pàgina de la llista de seguiment?',

# Multipage image navigation
'imgmultipageprev' => '← pàgina anterior',
'imgmultipagenext' => 'pàgina següent →',
'imgmultigo' => 'Vés-hi!',
'imgmultigoto' => 'Vés a la pàgina $1',

# Table pager
'ascending_abbrev' => 'asc',
'descending_abbrev' => 'desc',
'table_pager_next' => 'Pàgina següent',
'table_pager_prev' => 'Pàgina anterior',
'table_pager_first' => 'Primera pàgina',
'table_pager_last' => 'Darrera pàgina',
'table_pager_limit' => 'Mostra $1 elements per pàgina',
'table_pager_limit_label' => 'Ítems per pàgina:',
'table_pager_limit_submit' => 'Vés-hi',
'table_pager_empty' => 'Sense resultats',

# Auto-summaries
'autosumm-blank' => 'Pàgina blanquejada',
'autosumm-replace' => 'Contingut canviat per «$1».',
'autoredircomment' => 'Redirecció a [[$1]]',
'autosumm-new' => 'Es crea la pàgina amb «$1».',

# Live preview
'livepreview-loading' => "S'està carregant…",
'livepreview-ready' => "S'està carregant… Preparat!",
'livepreview-failed' => 'Ha fallat la vista ràpida!
Proveu-ho amb la previsualització normal.',
'livepreview-error' => 'La connexió no ha estat possible: $1 «$2»
Proveu-ho amb la previsualització normal.',

# Friendlier slave lag warnings
'lag-warn-normal' => 'Els canvis més nous de $1 {{PLURAL:$1|segon|segons}} podrien no mostrar-se a la llista.',
'lag-warn-high' => 'A causa de la lenta resposta del servidor de base de dades, els canvis més nous de $1 {{PLURAL:$1|segon|segons}} potser no es mostren aquesta llista.',

# Watchlist editor
'watchlistedit-numitems' => 'La vostra llista de seguiment conté {{PLURAL:$1|1 títol|$1 títols}}, excloent-ne les pàgines de discussió.',
'watchlistedit-noitems' => 'La vostra llista de seguiment no té cap títol.',
'watchlistedit-normal-title' => 'Edita la llista de seguiment',
'watchlistedit-normal-legend' => 'Esborra els títols de la llista de seguiment',
'watchlistedit-normal-explain' => 'Els títols de les pàgines que estan en la vostra llista de seguiment es mostren a continuació.
Per a eliminar algun element, marqueu el quadre del seu costat, i feu clic al botó «{{int:Watchlistedit-normal-submit}}». També podeu [[Special:EditWatchlist/raw|editar-ne la llista en text pla]].',
'watchlistedit-normal-submit' => 'Elimina entrades',
'watchlistedit-normal-done' => "{{PLURAL:$1|1 títol s'ha|$1 títols s'han}} eliminat de la vostra llista de seguiment:",
'watchlistedit-raw-title' => 'Edita la llista de seguiment crua',
'watchlistedit-raw-legend' => 'Edita la llista de seguiment crua',
'watchlistedit-raw-explain' => "Els títols de la vostra llista de seguiment es mostren a continuació, i poden modificar-se afegint-los o suprimint-los de la llista;
un títol per línia.
En acabar, feu clic a «{{int:Watchlistedit-raw-submit}}».
També podeu [[Special:EditWatchlist|utilitzar l'editor estàndard]].",
'watchlistedit-raw-titles' => 'Títols:',
'watchlistedit-raw-submit' => 'Actualitza la llista de seguiment',
'watchlistedit-raw-done' => "S'ha actualitzat la vostra llista de seguiment.",
'watchlistedit-raw-added' => "{{PLURAL:$1|1 títol s'ha|$1 títols s'han}} afegit:",
'watchlistedit-raw-removed' => "{{PLURAL:$1|1 títol s'ha|$1 títols s'han}} eliminat:",

# Watchlist editing tools
'watchlisttools-view' => 'Visualitza els canvis rellevants',
'watchlisttools-edit' => 'Visualitza i edita la llista de seguiment',
'watchlisttools-raw' => 'Edita la llista de seguiment sense format',

# Signatures
'signature' => '[[{{ns:user}}:$1|$2]] ([[{{ns:user_talk}}:$1|discussió]])',

# Core parser functions
'unknown_extension_tag' => "Etiqueta d'extensió desconeguda «$1»",
'duplicate-defaultsort' => 'Atenció: La clau d\'ordenació per defecte "$2" invalida l\'anterior clau "$1".',

# Special:Version
'version' => 'Versió',
'version-extensions' => 'Extensions instaŀlades',
'version-specialpages' => 'Pàgines especials',
'version-parserhooks' => "Extensions de l'analitzador",
'version-variables' => 'Variables',
'version-antispam' => 'Prevenció spam',
'version-skins' => 'Aparences',
'version-other' => 'Altres',
'version-mediahandlers' => 'Connectors multimèdia',
'version-hooks' => 'Lligams',
'version-extension-functions' => "Funcions d'extensió",
'version-parser-extensiontags' => "Etiquetes d'extensió de l'analitzador",
'version-parser-function-hooks' => "Lligams funcionals de l'analitzador",
'version-hook-name' => 'Nom del lligam',
'version-hook-subscribedby' => 'Subscrit per',
'version-version' => '(Versió $1)',
'version-license' => 'Llicència',
'version-poweredby-credits' => "El wiki funciona gràcies a '''[//www.mediawiki.org/ MediaWiki]''', copyright © 2001-$1 $2.",
'version-poweredby-others' => 'altres',
'version-license-info' => "MediaWiki és programari lliure, podeu redistribuir-lo i/o modificar-lo sota els termes de la Llicència Pública General GNU publicada per la Free Software Foundation, ja sigui de la seva versió 2 o (a elecció vostra) qualsevol versió posterior. 

MediaWiki es distribueix en l'esperança de ser d'utilitat, però SENSE CAP GARANTIA; ni tan sols la garantia implícita de COMERCIALITZACIÓ o ADEQUACIÓ A UNA FINALITAT DETERMINADA. En trobareu més detalls a  la Llicència Pública General GNU.

Amb aquest programa heu d'haver rebut [{{SERVER}}{{SCRIPTPATH}}/COPYING una còpia de la Llicència Pública General GNU]; si no és així, adreceu-vos a la Free Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA o bé [//www.gnu.org/licenses/old-licenses/gpl-2.0.html llegiu-la en línia].",
'version-software' => 'Programari instaŀlat',
'version-software-product' => 'Producte',
'version-software-version' => 'Versió',
'version-entrypoints' => "URL de punts d'entrada",
'version-entrypoints-header-entrypoint' => "Punt d'entrada",
'version-entrypoints-header-url' => 'URL',

# Special:FilePath
'filepath' => 'Camí del fitxer',
'filepath-page' => 'Fitxer:',
'filepath-submit' => 'Vés-hi',
'filepath-summary' => "Aquesta pàgina especial retorna un camí complet d'un fitxer.
Les imatges es mostren en plena resolució; altres tipus de fitxer s'inicien directament amb el seu programa associat.",

# Special:FileDuplicateSearch
'fileduplicatesearch' => 'Cerca fitxers duplicats',
'fileduplicatesearch-summary' => "Cerca fitxers duplicats d'acord amb el seu valor de resum.",
'fileduplicatesearch-legend' => 'Cerca duplicats',
'fileduplicatesearch-filename' => 'Nom del fitxer:',
'fileduplicatesearch-submit' => 'Cerca',
'fileduplicatesearch-info' => '$1 × $2 píxels<br />Mida del fitxer: $3<br />Tipus MIME: $4',
'fileduplicatesearch-result-1' => 'El fitxer «$1» no té cap duplicació idèntica.',
'fileduplicatesearch-result-n' => 'El fitxer «$1» té {{PLURAL:$2|1 duplicació idèntica|$2 duplicacions idèntiques}}.',
'fileduplicatesearch-noresults' => "No s'ha trobat cap fitxer anomenat «$1».",

# Special:SpecialPages
'specialpages' => 'Pàgines especials',
'specialpages-note' => '----
* Pàgines especials normals.
* <span class="mw-specialpagerestricted">Pàgines especials restringides.</span>
* <span class="mw-specialpagecached">Pàgines especials en memòria cau (poden ser obsoletes).</span>',
'specialpages-group-maintenance' => 'Informes de manteniment',
'specialpages-group-other' => 'Altres pàgines especials',
'specialpages-group-login' => 'Iniciar sessió / Crear un compte',
'specialpages-group-changes' => 'Canvis recents i registres',
'specialpages-group-media' => 'Informes multimèdia i càrregues',
'specialpages-group-users' => 'Usuaris i drets',
'specialpages-group-highuse' => "Pàgines d'alt ús",
'specialpages-group-pages' => 'Llistes de pàgines',
'specialpages-group-pagetools' => "Pàgines d'eines",
'specialpages-group-wiki' => 'Eines i dades del wiki',
'specialpages-group-redirects' => 'Pàgines especials de redirecció',
'specialpages-group-spam' => 'Eines de spam',

# Special:BlankPage
'blankpage' => 'Pàgina en blanc',
'intentionallyblankpage' => 'Pàgina intencionadament en blanc',

# External image whitelist
'external_image_whitelist' => " #Deixeu aquesta línia exactament igual com està<pre>
#Poseu fragments d'expressions regulars (regexps) (només la part entre els //) a sota
#Aquests fragments es correspondran amb les URL d'imatges externes
#Se'n mostraran com a imatges si coincideixen, i sinó es mostraran com a enllaços
#Les línies que comencen amb un # es tracten com a comentaris
#S'hi distingeixen majúscules i minúscules

#Poseu tots els fragments regex al damunt d'aquesta línia. Deixeu aquesta línia exactament com està</pre>",

# Special:Tags
'tags' => 'Etiquetes de canvi vàlides',
'tag-filter' => "Filtre d'[[Special:Tags|etiquetes]]:",
'tag-filter-submit' => 'Filtra',
'tags-title' => 'Etiquetes',
'tags-intro' => 'Aquesta pàgina llista les etiquetes amb les què el programari pot marcar una modificació, i llur significat.',
'tags-tag' => "Nom de l'etiqueta",
'tags-display-header' => 'Aparença de la llista de canvis',
'tags-description-header' => 'Descripció completa del significat',
'tags-hitcount-header' => 'Canvis etiquetats',
'tags-edit' => 'modifica',
'tags-hitcount' => '$1 {{PLURAL:$1|canvi|canvis}}',

# Special:ComparePages
'comparepages' => 'Comparar pàgines',
'compare-selector' => 'Comparar revisions de pàgines',
'compare-page1' => 'Pàgina 1',
'compare-page2' => 'Pàgina 2',
'compare-rev1' => 'Revisió 1',
'compare-rev2' => 'Revisió 2',
'compare-submit' => 'Compara',
'compare-invalid-title' => 'El títol que heu especificat no és vàlid.',
'compare-title-not-exists' => 'El títol que heu especificat no existeix.',
'compare-revision-not-exists' => 'La revisió que heu especificat no existeix.',

# Database error messages
'dberr-header' => 'Aquest wiki té un problema',
'dberr-problems' => 'Ho sentim. Aquest lloc web està experimentant dificultats tècniques.',
'dberr-again' => 'Intenteu esperar uns minuts i tornar a carregar.',
'dberr-info' => '(No es pot contactar amb el servidor de dades: $1)',
'dberr-usegoogle' => 'Podeu intentar fer la cerca via Google mentrestant.',
'dberr-outofdate' => 'Tingueu en compte que la seva indexació del nostre contingut pot no estar actualitzada.',
'dberr-cachederror' => 'A continuació hi ha una còpia emmagatzemada de la pàgina demanada, que pot no estar actualitzada.',

# HTML forms
'htmlform-invalid-input' => 'Hi ha problemes amb alguna de les seves entrades',
'htmlform-select-badoption' => 'El valor que heu especificat no és una opció vàlida.',
'htmlform-int-invalid' => 'El valor que heu especificat no és un nombre enter.',
'htmlform-float-invalid' => 'El valor especificat no és un nombre.',
'htmlform-int-toolow' => 'El valor que heu especifcat està per sota del mínim de $1',
'htmlform-int-toohigh' => 'El valor que heu especificat està per sobre del màxim de $1',
'htmlform-required' => 'Aquest valor és necessari',
'htmlform-submit' => 'Tramet',
'htmlform-reset' => 'Desfés els canvis',
'htmlform-selectorother-other' => 'Altres',

# SQLite database support
'sqlite-has-fts' => '$1, amb suport de búsqueda de text íntegre',
'sqlite-no-fts' => '$1, sense supor de búsqueda de text íntegre',

# New logging system
'logentry-delete-delete' => '$1 ha esborrat la pàgina $3',
'logentry-delete-restore' => '$1 ha restaurat la pàgina $3',
'logentry-delete-event' => "$1 ha canviat la visibilitat {{PLURAL:$5|d'un esdeveniment al registre|de $5 esdeveniments al registre}} de $3: $4",
'logentry-delete-revision' => "$1 ha canviat la visibilitat {{PLURAL:$5|d'una revisió|de $5 revisions}} a la pàgina $3: $4",
'logentry-delete-event-legacy' => "$1 ha canviat la visibilitat d'esdeveniments al registre de $3",
'logentry-delete-revision-legacy' => '$1 ha canviat la visibilitat de revisions a la pàgina $3',
'logentry-suppress-delete' => '$1 ha suprimit la pàgina $3',
'logentry-suppress-event' => "$1 secretament ha canviat la visibilitat {{PLURAL:$5|d'un esdeveniment al registre|de $5 esdeveniments al registre}} de $3: $4",
'logentry-suppress-revision' => "$1 secretament ha canviat la visibilitat {{PLURAL:$5|d'una revisió|de $5 revisions}} a la pàgina $3: $4",
'logentry-suppress-event-legacy' => "$1 secretament ha canviat la visibilitat d'esdeveniments al registre de $3",
'logentry-suppress-revision-legacy' => '$1 secretament ha canviat la visibilitat de revisions a la pàgina $3',
'revdelete-content-hid' => 'ha ocultat contingut',
'revdelete-summary-hid' => "ha ocultat el resum d'edició",
'revdelete-uname-hid' => "ha ocultat el nom d'usuari",
'revdelete-content-unhid' => 'ha revelat contingut que era ocult',
'revdelete-summary-unhid' => "ha revelat el resum d'edició que era ocult",
'revdelete-uname-unhid' => "ha revelat un nom d'usuari que era ocult",
'revdelete-restricted' => 'ha aplicat restriccions als administradors',
'revdelete-unrestricted' => 'ha tret les restriccions als administradors',
'logentry-move-move' => '$1 ha desplaçat la pàgina $3 a $4',
'logentry-move-move-noredirect' => '$1 ha desplaçat la pàgina $3 a $4 sense deixar cap redirecció',
'logentry-move-move_redir' => '$1 ha desplaçat la pàgina $3 a $4, on hi havia una redirecció',
'logentry-move-move_redir-noredirect' => '$1 ha desplaçat la pàgina $3 a $4 on hi havia una redirecció i sense crear una nova redirecció',
'logentry-patrol-patrol' => '$1 ha marcat la versió $4 de la pàgina $3 com a patrullada',
'logentry-patrol-patrol-auto' => '$1 ha marcat automàticament la versió $4 de la pàgina $3 com a patrullada',
'logentry-newusers-newusers' => "$1 ha creat un compte d'usuari",
'logentry-newusers-create' => "$1 ha creat un compte d'usuari",
'logentry-newusers-create2' => "$1 ha creat el compte d'usuari $3",
'logentry-newusers-autocreate' => "El compte d'usuari $1 ha estat creat de manera automàtica",
'newuserlog-byemail' => 'contrasenya enviada per correu electrònic',

# Feedback
'feedback-bugornote' => "Si podeu descriure un problema tècnic en detall, [$1 informeu-ne].
Altrament, podeu fer servir un senzill formulari a continuació. El vostre comentari s'afegirà a la pàgina «[$3 $2]», juntament amb el vostre nom d'usuari i el navegador que esteu emprant.",
'feedback-subject' => 'Assumpte:',
'feedback-message' => 'Missatge:',
'feedback-cancel' => 'Canceŀla',
'feedback-submit' => 'Envieu la vostra opinió',
'feedback-adding' => "S'està afegint el comentari a la pàgina...",
'feedback-error1' => "Error: Resultat de l'API no reconegut",
'feedback-error2' => 'Error: Edició fallida',
'feedback-error3' => "Error: No hi ha resposta de l'API",
'feedback-thanks' => "Gràcies! S'ha publicat la vostra opinió a la pàgina «[$2 $1]».",
'feedback-close' => 'Fet',
'feedback-bugcheck' => 'Fantàstic! Comproveu que no sigui un dels [$1 problemes ja coneguts].',
'feedback-bugnew' => "Ja ho he comprovat. Informeu d'un nou problema",

# Search suggestions
'searchsuggest-search' => 'Cerca',
'searchsuggest-containing' => 'que conté ...',

# API errors
'api-error-badaccess-groups' => 'No teniu permís per a carregar fitxers en aquest wiki.',
'api-error-badtoken' => 'Error intern: argument incorrecte.',
'api-error-copyuploaddisabled' => 'Les càrregues via URL estan desactivades en aquest servidor.',
'api-error-duplicate' => 'Ja hi ha {{PLURAL:$1|[$2 un altre fitxer]|[$2 altres fitxers]}} en aquest lloc web amb el mateix contingut.',
'api-error-duplicate-archive' => 'Aquí ja hi ha hagut {{PLURAL:$1|[$2 un altre fitxer]|[$2 altres fitxers]}} amb el mateix contingut, i {{PLURAL:$1|va ser esborrat|varen ser esborrats}}.',
'api-error-duplicate-archive-popup-title' => "Duplica {{PLURAL:$1|el fitxer|els fitxers}} que ja s'han eliminat",
'api-error-duplicate-popup-title' => '{{PLURAL:$1|Fitxer duplicat|Fitxers duplicats}}',
'api-error-empty-file' => 'El fitxer que heu tramès està buit.',
'api-error-emptypage' => 'No es permet la creació de pàgines noves en blanc.',
'api-error-fetchfileerror' => 'Error intern: quelcom no ha funcionat en accedir al fitxer.',
'api-error-fileexists-forbidden' => "Ja existeix un fitxer amb el nom «$1» i no pot sobreescriure's.",
'api-error-fileexists-shared-forbidden' => "Ja existeix un fitxer amb el nom «$1» al repositori de fitxers compartits i no pot sobreescriure's.",
'api-error-file-too-large' => 'El fitxer que heu tramès és massa gran.',
'api-error-filename-tooshort' => 'El nom del fitxer és massa curt.',
'api-error-filetype-banned' => 'Aquest tipus de fitxer està prohibit.',
'api-error-filetype-banned-type' => '$1 {{PLURAL:$4|no és un tipus de fitxer permès|no són tipus de fitxer permesos}}. {{PLURAL:$3|El tipus de fitxer permès és|Els tipus de fitxer permesos són}} $2.',
'api-error-filetype-missing' => 'El nom de fitxer no té extensió.',
'api-error-hookaborted' => "La modificació que heu intentat fer ha estat canceŀlada per un mòdul d'extensió.",
'api-error-http' => 'Error intern: no es pot connectar al servidor.',
'api-error-illegal-filename' => 'El nom del fitxer no està permès.',
'api-error-internal-error' => 'Error intern: el procés de càrrega en el wiki no ha funcionat.',
'api-error-invalid-file-key' => "Error intern: no s'ha trobat el fitxer al dipòsit temporal.",
'api-error-missingparam' => 'Error intern: falten paràmetres a la petició.',
'api-error-missingresult' => "Error intern: no s'ha pogut determinar si la còpia ha reeixit.",
'api-error-mustbeloggedin' => "Cal que estigueu autenticats en un compte d'usuari per a poder carregar fitxers.",
'api-error-mustbeposted' => 'Error intern: la sol·licitud necessita HTTP POST.',
'api-error-noimageinfo' => "La pujada s'ha realitzat amb èxit, però el servidor no ha proporcionat cap informació del fitxer.",
'api-error-nomodule' => 'Error intern: no està definit el mòdul de càrregues.',
'api-error-ok-but-empty' => 'Error intern: no hi ha resposta del servidor.',
'api-error-overwrite' => 'No està permès sobreescriure un fitxer existent.',
'api-error-stashfailed' => 'Error intern: el servidor no ha pogut emmagatzemar fitxers temporals.',
'api-error-timeout' => 'El servidor no ha respost en el temps esperat.',
'api-error-unclassified' => "S'ha produït un error desconegut",
'api-error-unknown-code' => 'Error desconegut: «$1»',
'api-error-unknown-error' => 'Error intern: quelcom no ha funcionat en intentar carregar el fitxer.',
'api-error-unknown-warning' => 'Avís desconegut: $1',
'api-error-unknownerror' => 'Error desconegut: «$1».',
'api-error-uploaddisabled' => 'Estan desactivades les càrregues en aquest wiki',
'api-error-verification-error' => 'Aquest fitxer pot estar danyat, o tenir una extensió incorrecta.',

# Durations
'duration-seconds' => '$1 {{PLURAL:$1|segon|segons}}',
'duration-minutes' => '$1 {{PLURAL:$1|minut|minuts}}',
'duration-hours' => '$1 {{PLURAL:$1|hora|hores}}',
'duration-days' => '$1 {{PLURAL:$1|dia|dies}}',
'duration-weeks' => '$1 {{PLURAL:$1|setmana|setmanes}}',
'duration-years' => '$1 {{PLURAL:$1|any|anys}}',
'duration-decades' => '$1 {{PLURAL:$1|dècada|dècades}}',
'duration-centuries' => '$1 {{PLURAL:$1|segle|segles}}',
'duration-millennia' => '$1 {{PLURAL:$1|mil·leni|mil·lenis}}',

);
