<?php
/** Interlingua (interlingua)
 *
 * See MessagesQqq.php for message documentation incl. usage of parameters
 * To improve a translation please visit http://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Julian Mendez
 * @author Kaganer
 * @author Malafaya
 * @author McDutchie
 * @author Reedy
 * @author לערי ריינהארט
 */

$separatorTransformTable = array( ',' => "\xc2\xa0", '.' => ',' );

$namespaceNames = array(
	NS_MEDIA            => 'Multimedia',
	NS_SPECIAL          => 'Special',
	NS_TALK             => 'Discussion',
	NS_USER             => 'Usator',
	NS_USER_TALK        => 'Discussion_Usator',
	NS_PROJECT_TALK     => 'Discussion_$1',
	NS_FILE             => 'File',
	NS_FILE_TALK        => 'Discussion_File',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'Discussion_MediaWiki',
	NS_TEMPLATE         => 'Patrono',
	NS_TEMPLATE_TALK    => 'Discussion_Patrono',
	NS_HELP             => 'Adjuta',
	NS_HELP_TALK        => 'Discussion_Adjuta',
	NS_CATEGORY         => 'Categoria',
	NS_CATEGORY_TALK    => 'Discussion_Categoria',
);

$namespaceAliases = array(
	'Imagine' => NS_FILE,
	'Discussion_Imagine' => NS_FILE_TALK,
);

$specialPageAliases = array(
	'Activeusers'               => array( 'Usatores_active' ),
	'Allmessages'               => array( 'Tote_le_messages' ),
	'Allpages'                  => array( 'Tote_le_paginas' ),
	'Ancientpages'              => array( 'Paginas_ancian' ),
	'Badtitle'                  => array( 'Titulo_invalide' ),
	'Blankpage'                 => array( 'Pagina_vacue' ),
	'Block'                     => array( 'Blocar', 'Blocar_IP', 'Blocar_usator' ),
	'Blockme'                   => array( 'Blocar_me' ),
	'Booksources'               => array( 'Fontes_de_libros' ),
	'BrokenRedirects'           => array( 'Redirectiones_rupte' ),
	'Categories'                => array( 'Categorias' ),
	'ChangeEmail'               => array( 'Cambiar_e-mail' ),
	'ChangePassword'            => array( 'Cambiar_contrasigno' ),
	'ComparePages'              => array( 'Comparar_paginas' ),
	'Confirmemail'              => array( 'Confirmar_e-mail' ),
	'Contributions'             => array( 'Contributiones' ),
	'CreateAccount'             => array( 'Crear_conto' ),
	'Deadendpages'              => array( 'Paginas_sin_exito' ),
	'DeletedContributions'      => array( 'Contributiones_delite' ),
	'Disambiguations'           => array( 'Disambiguationes' ),
	'DoubleRedirects'           => array( 'Redirectiones_duple' ),
	'EditWatchlist'             => array( 'Modificar_observatorio' ),
	'Emailuser'                 => array( 'Inviar_e-mail_a_un_usator' ),
	'Export'                    => array( 'Exportar' ),
	'Fewestrevisions'           => array( 'Le_minus_versiones' ),
	'FileDuplicateSearch'       => array( 'Recerca_de_files_duplice' ),
	'Filepath'                  => array( 'Cammino_al_file' ),
	'Import'                    => array( 'Importar' ),
	'Invalidateemail'           => array( 'Invalidar_e-mail' ),
	'BlockList'                 => array( 'Lista_de_blocadas', 'Lista_de_blocadas_IP' ),
	'LinkSearch'                => array( 'Recerca_de_ligamines' ),
	'Listadmins'                => array( 'Lista_de_administratores' ),
	'Listbots'                  => array( 'Lista_de_robots' ),
	'Listfiles'                 => array( 'Lista_de_files', 'Lista_de_imagines' ),
	'Listgrouprights'           => array( 'Lista_del_derectos_de_gruppos' ),
	'Listredirects'             => array( 'Lista_de_redirectiones' ),
	'Listusers'                 => array( 'Lista_de_usatores' ),
	'Lockdb'                    => array( 'Blocar_BDD' ),
	'Log'                       => array( 'Registro', 'Registros' ),
	'Lonelypages'               => array( 'Paginas_orphanate' ),
	'Longpages'                 => array( 'Paginas_longe' ),
	'MergeHistory'              => array( 'Fusionar_historia' ),
	'MIMEsearch'                => array( 'Recerca_MIME' ),
	'Mostcategories'            => array( 'Le_plus_categorias' ),
	'Mostimages'                => array( 'Files_le_plus_ligate', 'Le_plus_files', 'Le_plus_imagines' ),
	'Mostlinked'                => array( 'Paginas_le_plus_ligate', 'Le_plus_ligate' ),
	'Mostlinkedcategories'      => array( 'Categorias_le_plus_ligate', 'Categorias_le_plus_usate' ),
	'Mostlinkedtemplates'       => array( 'Patronos_le_plus_ligate', 'Patronos_le_plus_usate' ),
	'Mostrevisions'             => array( 'Le_plus_versiones' ),
	'Movepage'                  => array( 'Renominar_pagina' ),
	'Mycontributions'           => array( 'Mi_contributiones' ),
	'Mypage'                    => array( 'Mi_pagina' ),
	'Mytalk'                    => array( 'Mi_discussion' ),
	'Myuploads'                 => array( 'Mi_files_incargate' ),
	'Newimages'                 => array( 'Nove_files', 'Nove_imagines' ),
	'Newpages'                  => array( 'Paginas_nove', 'Nove_paginas' ),
	'PasswordReset'             => array( 'Reinitialisar_contrasigno' ),
	'PermanentLink'             => array( 'Ligamine_permanente' ),
	'Popularpages'              => array( 'Paginas_popular' ),
	'Preferences'               => array( 'Preferentias' ),
	'Prefixindex'               => array( 'Indice_de_prefixos' ),
	'Protectedpages'            => array( 'Paginas_protegite' ),
	'Protectedtitles'           => array( 'Titulos_protegite' ),
	'Randompage'                => array( 'Aleatori', 'Pagina_aleatori' ),
	'Randomredirect'            => array( 'Redirection_aleatori' ),
	'Recentchanges'             => array( 'Modificationes_recente' ),
	'Recentchangeslinked'       => array( 'Modificationes_recente_ligate', 'Modificationes_connexe' ),
	'Revisiondelete'            => array( 'Deletion_de_versiones' ),
	'Search'                    => array( 'Recerca' ),
	'Shortpages'                => array( 'Paginas_curte' ),
	'Specialpages'              => array( 'Paginas_special' ),
	'Statistics'                => array( 'Statisticas' ),
	'Tags'                      => array( 'Etiquettas' ),
	'Unblock'                   => array( 'Disblocar' ),
	'Uncategorizedcategories'   => array( 'Categorias_non_categorisate' ),
	'Uncategorizedimages'       => array( 'Files_non_categorisate', 'Imagines_non_categorisate' ),
	'Uncategorizedpages'        => array( 'Paginas_non_categorisate' ),
	'Uncategorizedtemplates'    => array( 'Patronos_non_categorisate' ),
	'Undelete'                  => array( 'Restaurar' ),
	'Unlockdb'                  => array( 'Disblocar_BDD' ),
	'Unusedcategories'          => array( 'Categorias_non_usate' ),
	'Unusedimages'              => array( 'Files_non_usate', 'Imagines_non_usate' ),
	'Unusedtemplates'           => array( 'Patronos_non_usate' ),
	'Unwatchedpages'            => array( 'Paginas_non_observate' ),
	'Upload'                    => array( 'Incargar', 'Cargar' ),
	'UploadStash'               => array( 'Pila_de_files_incargate' ),
	'Userlogin'                 => array( 'Aperir_session', 'Identificar' ),
	'Userlogout'                => array( 'Clauder_session', 'Disconnecter' ),
	'Userrights'                => array( 'Derectos_de_usatores' ),
	'Wantedcategories'          => array( 'Categorias_desirate' ),
	'Wantedfiles'               => array( 'Files_desirate' ),
	'Wantedpages'               => array( 'Paginas_desirate', 'Ligamines_rupte' ),
	'Wantedtemplates'           => array( 'Patronos_desirate' ),
	'Watchlist'                 => array( 'Observatorio' ),
	'Whatlinkshere'             => array( 'Referentias_a_iste_pagina' ),
	'Withoutinterwiki'          => array( 'Sin_interwiki' ),
);

$messages = array(
# User preference toggles
'tog-underline' => 'Sublinear ligamines:',
'tog-justify' => 'Justificar paragraphos',
'tog-hideminor' => 'Celar le modificationes minor in le modificationes recente',
'tog-hidepatrolled' => 'Celar le modificationes patruliate in le modificationes recente',
'tog-newpageshidepatrolled' => 'Celar le paginas patruliate del lista de nove paginas',
'tog-extendwatchlist' => 'Displicar le observatorio pro monstrar tote le modificationes, non solmente les plus recente',
'tog-usenewrc' => 'Gruppar modificationes per pagina in modificationes recente e observatorio (require JavaScript)',
'tog-numberheadings' => 'Numerar titulos automaticamente',
'tog-showtoolbar' => 'Monstrar instrumentario de modification (require JavaScript)',
'tog-editondblclick' => 'Duple clic pro modificar un pagina (require JavaScript)',
'tog-editsection' => 'Activar le modification de sectiones con ligamines "[modificar]"',
'tog-editsectiononrightclick' => 'Activar modification de sectiones con clic-a-dextra super lor titulos (require JavaScript)',
'tog-showtoc' => 'Monstrar tabula de contento (in paginas con plus de 3 sectiones)',
'tog-rememberpassword' => 'Memorar mi contrasigno in iste navigator (pro un maximo de $1 {{PLURAL:$1|die|dies}})',
'tog-watchcreations' => 'Adder le paginas que io crea e le files que io incarga a mi observatorio',
'tog-watchdefault' => 'Adder le paginas e files que io modifica a mi observatorio',
'tog-watchmoves' => 'Adder le paginas e files que io renomina a mi observatorio',
'tog-watchdeletion' => 'Adder le paginas e files que io dele a mi observatorio',
'tog-minordefault' => 'Marcar omne modificationes initialmente como minor',
'tog-previewontop' => 'Monstrar previsualisation ante le quadro de modification',
'tog-previewonfirst' => 'Monstrar previsualisation al prime modification',
'tog-nocache' => "Disactivar le ''cache'' de paginas in le navigator",
'tog-enotifwatchlistpages' => 'Notificar me per e-mail quando un pagina o file in mi observatorio es modificate',
'tog-enotifusertalkpages' => 'Notificar me via e-mail quando mi pagina de discussion es modificate',
'tog-enotifminoredits' => 'Notificar me etiam de modificationes minor de paginas e files',
'tog-enotifrevealaddr' => 'Revelar mi adresse de e-mail in messages de notification',
'tog-shownumberswatching' => 'Monstrar le numero de usatores que observa le pagina',
'tog-oldsig' => 'Signatura existente:',
'tog-fancysig' => 'Tractar signatura como wikitexto (sin ligamine automatic)',
'tog-externaleditor' => 'Usar un editor externe qua standard (pro expertos solmente, necessita configuration special in tu computator. [//www.mediawiki.org/wiki/Manual:External_editors Plus informationes.])',
'tog-externaldiff' => "Usar un programma ''diff'' externe qua standard (pro expertos solmente, necessita configuration special in tu computator. [//www.mediawiki.org/wiki/Manual:External_editors Plus informationes.])",
'tog-showjumplinks' => 'Activar ligamines de accessibilitate "saltar a"',
'tog-uselivepreview' => 'Usar previsualisation in directo (require JavaScript) (experimental)',
'tog-forceeditsummary' => 'Avisar me si io non entra un summario de modification',
'tog-watchlisthideown' => 'Celar mi proprie modificationes in le observatorio',
'tog-watchlisthidebots' => 'Celar le modificationes de robots in le observatorio',
'tog-watchlisthideminor' => 'Celar modificationes minor in le observatorio',
'tog-watchlisthideliu' => 'Celar modificationes de usatores registrate in le observatorio',
'tog-watchlisthideanons' => 'Celar modificationes de usatores anonyme in le observatorio',
'tog-watchlisthidepatrolled' => 'Celar le modificationes patruliate in le observatorio',
'tog-ccmeonemails' => 'Inviar me copias del messages de e-mail que io invia a altere usatores',
'tog-diffonly' => 'Non monstrar le contento del pagina sub le comparation de duo versiones',
'tog-showhiddencats' => 'Monstrar categorias celate',
'tog-noconvertlink' => 'Disactivar conversion de titulos de ligamines',
'tog-norollbackdiff' => 'Omitter le diff post le execution de un revocation',

'underline-always' => 'Sempre',
'underline-never' => 'Nunquam',
'underline-default' => 'Como definite per tu navigator o apparentia',

# Font style option in Special:Preferences
'editfont-style' => 'Stilo de litteras del area de modification:',
'editfont-default' => 'Predefinite del navigator',
'editfont-monospace' => 'Typo de litteras monospatial',
'editfont-sansserif' => 'Typo de litteras sans-serif',
'editfont-serif' => 'Typo de litteras serif',

# Dates
'sunday' => 'dominica',
'monday' => 'lunedi',
'tuesday' => 'martedi',
'wednesday' => 'mercuridi',
'thursday' => 'jovedi',
'friday' => 'venerdi',
'saturday' => 'sabbato',
'sun' => 'dom',
'mon' => 'lun',
'tue' => 'mar',
'wed' => 'mer',
'thu' => 'jov',
'fri' => 'ven',
'sat' => 'sab',
'january' => 'januario',
'february' => 'februario',
'march' => 'martio',
'april' => 'april',
'may_long' => 'maio',
'june' => 'junio',
'july' => 'julio',
'august' => 'augusto',
'september' => 'septembre',
'october' => 'octobre',
'november' => 'novembre',
'december' => 'decembre',
'january-gen' => 'januario',
'february-gen' => 'februario',
'march-gen' => 'martio',
'april-gen' => 'april',
'may-gen' => 'maio',
'june-gen' => 'junio',
'july-gen' => 'julio',
'august-gen' => 'augusto',
'september-gen' => 'septembre',
'october-gen' => 'octobre',
'november-gen' => 'novembre',
'december-gen' => 'decembre',
'jan' => 'jan',
'feb' => 'feb',
'mar' => 'mar',
'apr' => 'apr',
'may' => 'mai',
'jun' => 'jun',
'jul' => 'jul',
'aug' => 'aug',
'sep' => 'sep',
'oct' => 'oct',
'nov' => 'nov',
'dec' => 'dec',

# Categories related messages
'pagecategories' => '{{PLURAL:$1|Categoria|Categorias}}',
'category_header' => 'Articulos in le categoria "$1"',
'subcategories' => 'Subcategorias',
'category-media-header' => 'Multimedia in categoria "$1"',
'category-empty' => "''Iste categoria non contine alcun pagina o file multimedia al momento.''",
'hidden-categories' => '{{PLURAL:$1|Categoria celate|Categorias celate}}',
'hidden-category-category' => 'Categorias celate',
'category-subcat-count' => '{{PLURAL:$2|Iste categoria ha solmente le sequente subcategoria.|Iste categoria ha le sequente {{PLURAL:$1|subcategoria|$1 subcategorias}}, ex $2 in total.}}',
'category-subcat-count-limited' => 'Iste categoria ha le sequente {{PLURAL:$1|subcategoria|$1 subcategorias}}.',
'category-article-count' => '{{PLURAL:$2|Iste categoria contine solmente le sequente pagina.|Le sequente {{PLURAL:$1|pagina es|$1 paginas es}} in iste categoria, ex $2 in total.}}',
'category-article-count-limited' => 'Le sequente {{PLURAL:$1|pagina es|$1 paginas es}} in le categoria actual.',
'category-file-count' => '{{PLURAL:$2|Iste categoria contine solmente le sequente file.|Le sequente {{PLURAL:$1|file es|$1 files es}} in iste categoria, ex $2 in total.}}',
'category-file-count-limited' => 'Le sequente {{PLURAL:$1|file es|$1 files es}} in le categoria actual.',
'listingcontinuesabbrev' => 'cont.',
'index-category' => 'Paginas indexate',
'noindex-category' => 'Paginas non indexate',
'broken-file-category' => 'Paginas con ligamines rupte a files',

'about' => 'A proposito',
'article' => 'Pagina de contento',
'newwindow' => '(se aperi in un nove fenestra)',
'cancel' => 'Cancellar',
'moredotdotdot' => 'Plus...',
'mypage' => 'Mi pagina',
'mytalk' => 'Mi discussion',
'anontalk' => 'Discussion pro iste adresse IP',
'navigation' => 'Navigation',
'and' => '&#32;e',

# Cologne Blue skin
'qbfind' => 'Cercar',
'qbbrowse' => 'Foliar',
'qbedit' => 'Modificar',
'qbpageoptions' => 'Iste pagina',
'qbmyoptions' => 'Mi paginas',
'qbspecialpages' => 'Paginas special',
'faq' => 'FAQ',
'faqpage' => 'Project:FAQ',

# Vector skin
'vector-action-addsection' => 'Adder topico',
'vector-action-delete' => 'Deler',
'vector-action-move' => 'Renominar',
'vector-action-protect' => 'Proteger',
'vector-action-undelete' => 'Restaurar',
'vector-action-unprotect' => 'Cambiar protection',
'vector-simplesearch-preference' => 'Activar le barra de recerca simplificate (solmente in apparentia Vector)',
'vector-view-create' => 'Crear',
'vector-view-edit' => 'Modificar',
'vector-view-history' => 'Vider historia',
'vector-view-view' => 'Leger',
'vector-view-viewsource' => 'Vider texto fonte',
'actions' => 'Actiones',
'namespaces' => 'Spatios de nomines',
'variants' => 'Variantes',

'errorpagetitle' => 'Error',
'returnto' => 'Retornar a $1.',
'tagline' => 'De {{SITENAME}}',
'help' => 'Adjuta',
'search' => 'Recerca',
'searchbutton' => 'Cercar',
'go' => 'Va',
'searcharticle' => 'Va',
'history' => 'Historia del pagina',
'history_short' => 'Historia',
'updatedmarker' => 'actualisate post mi ultime visita',
'printableversion' => 'Version pro imprimer',
'permalink' => 'Ligamine permanente',
'print' => 'Imprimer',
'view' => 'Leger',
'edit' => 'Modificar',
'create' => 'Crear',
'editthispage' => 'Modificar iste pagina',
'create-this-page' => 'Crear iste pagina',
'delete' => 'Deler',
'deletethispage' => 'Deler iste pagina',
'undelete_short' => 'Restaurar {{PLURAL:$1|un modification|$1 modificationes}}',
'viewdeleted_short' => 'Vider {{PLURAL:$1|un modification|$1 modificationes}} delite',
'protect' => 'Proteger',
'protect_change' => 'cambiar',
'protectthispage' => 'Proteger iste pagina',
'unprotect' => 'Cambiar protection',
'unprotectthispage' => 'Cambiar le protection de iste pagina',
'newpage' => 'Nove pagina',
'talkpage' => 'Discuter iste pagina',
'talkpagelinktext' => 'Discussion',
'specialpage' => 'Pagina special',
'personaltools' => 'Instrumentos personal',
'postcomment' => 'Nove section',
'articlepage' => 'Vider pagina de contento',
'talk' => 'Discussion',
'views' => 'Representationes',
'toolbox' => 'Instrumentario',
'userpage' => 'Vider pagina del usator',
'projectpage' => 'Vider pagina de projecto',
'imagepage' => 'Vider le pagina del file',
'mediawikipage' => 'Vider pagina de message',
'templatepage' => 'Vider pagina de patrono',
'viewhelppage' => 'Vider pagina de adjuta',
'categorypage' => 'Vider pagina de categoria',
'viewtalkpage' => 'Vider discussion',
'otherlanguages' => 'In altere linguas',
'redirectedfrom' => '(Redirigite ab $1)',
'redirectpagesub' => 'Pagina de redirection',
'lastmodifiedat' => 'Ultime modification de iste pagina: le $1 a $2.',
'viewcount' => 'Iste pagina ha essite visitate {{PLURAL:$1|un vice|$1 vices}}.',
'protectedpage' => 'Pagina protegite',
'jumpto' => 'Saltar a:',
'jumptonavigation' => 'navigation',
'jumptosearch' => 'cercar',
'view-pool-error' => 'Pardono, le servitores es supercargate in iste momento.
Troppo de usatores tenta vider iste pagina.
Per favor attende un momento ante que tu essaya acceder novemente a iste pagina.

$1',
'pool-timeout' => 'Tempore limite excedite durante le serratura',
'pool-queuefull' => 'Le cauda commun de processos es plen',
'pool-errorunknown' => 'Error incognite',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage) and the disambiguation template definition (see disambiguations).
'aboutsite' => 'A proposito de {{SITENAME}}',
'aboutpage' => 'Project:A proposito',
'copyright' => 'Le contento es disponibile sub $1.',
'copyrightpage' => '{{ns:project}}:Copyright',
'currentevents' => 'Actualitates',
'currentevents-url' => 'Project:Actualitates',
'disclaimers' => 'Declaration de non-responsabilitate',
'disclaimerpage' => 'Project:Declaration general de non-responsabilitate',
'edithelp' => 'Adjuta de modification',
'edithelppage' => 'Help:Modification',
'helppage' => 'Help:Contento',
'mainpage' => 'Pagina principal',
'mainpage-description' => 'Pagina principal',
'policy-url' => 'Project:Politica',
'portal' => 'Portal del communitate',
'portal-url' => 'Project:Portal del communitate',
'privacy' => 'Politica de confidentialitate',
'privacypage' => 'Project:Politica de confidentialitate',

'badaccess' => 'Error de permission',
'badaccess-group0' => 'Tu non ha le permission de executar le action que tu ha requestate.',
'badaccess-groups' => 'Le action que tu ha requestate es limitate al usatores in {{PLURAL:$2|le gruppo|un del gruppos}}: $1.',

'versionrequired' => 'Version $1 de MediaWiki requirite',
'versionrequiredtext' => 'Le version $1 de MediaWiki es requirite pro usar iste pagina. Vide [[Special:Version|le pagina de version]].',

'ok' => 'OK',
'retrievedfrom' => 'Obtenite de "$1"',
'youhavenewmessages' => 'Tu ha $1 ($2).',
'newmessageslink' => 'nove messages',
'newmessagesdifflink' => 'ultime modification',
'youhavenewmessagesfromusers' => 'Tu ha $1 de {{PLURAL:$3|un altere usator|$3 usatores}} ($2).',
'youhavenewmessagesmanyusers' => 'Tu ha $1 de multe usatores ($2).',
'newmessageslinkplural' => '{{PLURAL:$1|un nove message|$1 nove messages}}',
'newmessagesdifflinkplural' => 'ultime {{PLURAL:$1|modification|modificationes}}',
'youhavenewmessagesmulti' => 'Tu ha nove messages in $1',
'editsection' => 'modificar',
'editold' => 'modificar',
'viewsourceold' => 'vider codice-fonte',
'editlink' => 'modificar',
'viewsourcelink' => 'vider codice-fonte',
'editsectionhint' => 'Modificar section: $1',
'toc' => 'Contento',
'showtoc' => 'revelar',
'hidetoc' => 'celar',
'collapsible-collapse' => 'Plicar',
'collapsible-expand' => 'Displicar',
'thisisdeleted' => 'Vider o restaurar $1?',
'viewdeleted' => 'Vider $1?',
'restorelink' => '{{PLURAL:$1|un modification|$1 modificationes}} delite',
'feedlinks' => 'Syndication:',
'feed-invalid' => 'Typo de syndication invalide.',
'feed-unavailable' => 'Le syndicationes non es disponibile',
'site-rss-feed' => 'Syndication RSS de $1',
'site-atom-feed' => 'Syndication Atom de $1',
'page-rss-feed' => 'Syndication RSS de "$1"',
'page-atom-feed' => 'Syndication Atom de "$1"',
'red-link-title' => '$1 (pagina non existe)',
'sort-descending' => 'Mitter in ordine descendente',
'sort-ascending' => 'Mitter in ordine ascendente',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main' => 'Pagina',
'nstab-user' => 'Pagina de usator',
'nstab-media' => 'Pagina multimedia',
'nstab-special' => 'Pagina special',
'nstab-project' => 'Pagina de projecto',
'nstab-image' => 'File',
'nstab-mediawiki' => 'Message',
'nstab-template' => 'Patrono',
'nstab-help' => 'Pagina de adjuta',
'nstab-category' => 'Categoria',

# Main script and global functions
'nosuchaction' => 'Non existe tal action',
'nosuchactiontext' => 'Le action specificate in le adresse URL non es valide.
Es possibile que tu ha mal entrate le URL o sequite un ligamine incorrecte.
Isto poterea equalmente indicar un defecto in le software usate per {{SITENAME}}.',
'nosuchspecialpage' => 'Pagina special invalide',
'nospecialpagetext' => '<strong>Tu ha requestate un pagina special que es non es valide.</strong>

Un lista de paginas special valide se trova a [[Special:SpecialPages|{{int:specialpages}}]].',

# General errors
'error' => 'Error',
'databaseerror' => 'Error del base de datos',
'dberrortext' => 'Un error de syntaxe occurreva durante un consulta del base de datos.
Isto pote indicar le presentia de un defecto in le software.
Le ultime consulta que esseva tentate es:
<blockquote><code>$1</code></blockquote>
effectuate per le function "<code>$2</code>".
Le base de datos retornava le error "<samp>$3: $4</samp>".',
'dberrortextcl' => 'Un error de syntaxe occurreva durante un consulta del base de datos.
Le ultime consulta que esseva tentate es:
"$1"
effectuate per le function "$2".
Le base de datos retornava le error "$3: $4"',
'laggedslavemode' => 'Attention: Es possibile que le pagina non contine actualisationes recente.',
'readonly' => 'Base de datos blocate',
'enterlockreason' => 'Describe le motivo del blocada, includente un estimation
de quando illo essera terminate',
'readonlytext' => 'Al momento, le base de datos es blocate contra nove entratas e altere modificationes, probabilemente pro mantenentia routinari del base de datos, post le qual illo retornara al normal.

Le administrator responsabile dava iste explication: $1',
'missing-article' => 'Le base de datos non ha trovate le texto de un pagina que illo deberea haber trovate, nominate "$1" $2.

Causas normal de iste problema es: tu ha consultate un \'\'diff\'\' obsolete, o tu sequeva un ligamine de historia verso un pagina que ha essite delite.

Si isto non es le caso, es possibile que tu ha trovate un error in le software.
Per favor reporta isto a un [[Special:ListUsers/sysop|administrator]], faciente nota del adresse URL.',
'missingarticle-rev' => '(numero del version: $1)',
'missingarticle-diff' => '(Diff: $1, $2)',
'readonly_lag' => 'Le base de datos ha essite automaticamente blocate durante que le servitores de base de datos secundari se synchronisa con le servitor principal.',
'internalerror' => 'Error interne',
'internalerror_info' => 'Error interne: $1',
'fileappenderrorread' => 'Non poteva leger "$1" durante le adjunction.',
'fileappenderror' => 'Non poteva adjunger "$1" a "$2".',
'filecopyerror' => 'Impossibile copiar file "$1" a "$2".',
'filerenameerror' => 'Impossibile renominar file "$1" a "$2".',
'filedeleteerror' => 'Impossibile deler file "$1".',
'directorycreateerror' => 'Impossibile crear le directorio "$1".',
'filenotfound' => 'Impossibile trovar file "$1".',
'fileexistserror' => 'Impossibile scriber in le file "$1": le file ja existe',
'unexpected' => 'Valor impreviste: "$1"="$2".',
'formerror' => 'Error: impossibile submitter formulario',
'badarticleerror' => 'Iste action non pote esser effectuate super iste pagina.',
'cannotdelete' => 'Le pagina o file "$1" non poteva esser delite.
Es possibile que un altere persona lo ha ja delite.',
'cannotdelete-title' => 'Non pote deler le pagina "$1"',
'delete-hook-aborted' => 'Le deletion ha essite abortate per un extension.
Nulle explication es disponibile.',
'badtitle' => 'Titulo invalide',
'badtitletext' => 'Le titulo de pagina requestate es invalide, vacue, o un titulo interlingual o interwiki incorrectemente ligate.
Es possibile que illo contine un o plure characteres que non pote esser usate in titulos.',
'perfcached' => 'Le sequente datos esseva recuperate del cache e possibilemente non es actual. Un maximo de {{PLURAL:$1|un resultato|$1 resultatos}} es disponibile in le cache.',
'perfcachedts' => 'Le sequente datos esseva recuperate del cache e ha essite actualisate le $3 a $4. Un maximo de {{PLURAL:$4|un resultato|$4 resultatos}} es disponibile in le cache.',
'querypage-no-updates' => 'Le actualisationes pro iste pagina es disactivate. Pro le momento, le datos hic non se cambiara.',
'wrong_wfQuery_params' => 'Parametros incorrecte a wfQuery()<br />
Function: $1<br />
Consulta: $2',
'viewsource' => 'Vider codice-fonte',
'viewsource-title' => 'Le texto fonte de $1',
'actionthrottled' => 'Action limitate',
'actionthrottledtext' => 'Como mesura anti-spam, tu es limitate de executar iste action troppo de vices durante un curte periodo de tempore, e tu ha excedite iste limite.
Per favor reprova post alcun minutas.',
'protectedpagetext' => 'Iste pagina ha essite protegite contra modificationes.',
'viewsourcetext' => 'Tu pote vider e copiar le codice-fonte de iste pagina:',
'viewyourtext' => "Tu pote vider e copiar le fonte de '''tu modificationes''' de iste pagina:",
'protectedinterface' => 'Iste pagina contine texto pro le interfacie del software de iste wiki, e es protegite pro impedir le abuso. Pro adder o modificar traductiones pro tote le wikis, per favor usa [//translatewiki.net/ translatewiki.net], le projecto de traduction de MediaWiki.',
'editinginterface' => "'''Attention:''' Le texto de iste pagina face parte del interfacie pro le software.
Omne modification a iste pagina cambiara le apparentia del interfacie pro altere usatores de iste wiki.
Pro adder o modificar traductiones pro tote le wikis, per favor usa [//translatewiki.net/ translatewiki.net], le projecto de traduction de MediaWiki.",
'sqlhidden' => '(Consulta SQL non monstrate)',
'cascadeprotected' => 'Iste pagina ha essite protegite contra modificationes, proque illo es includite in le sequente {{PLURAL:$1|pagina, le qual|paginas, le quales}} es protegite usante le option "cascada":
$2',
'namespaceprotected' => "Tu non ha le permission de modificar paginas in le spatio de nomines '''$1'''.",
'customcssprotected' => 'Tu non ha le permission de modificar iste pagina de CSS perque illo contine le configuration personal de un altere usator.',
'customjsprotected' => 'Tu non ha le permission de modificar iste pagina de JavaScript perque illo contine le configuration personal de un altere usator.',
'ns-specialprotected' => 'Le paginas special non es modificabile.',
'titleprotected' => "Iste titulo ha essite protegite contra creation per [[User:$1|$1]].
Le motivo specificate es ''$2''.",
'filereadonlyerror' => 'Impossibile modificar le file "$1" perque le repositorio de files "$2" es in modo de lectura sol.

Le administrator qui lo blocava offereva iste explication: "$3".',
'invalidtitle-knownnamespace' => 'Titulo invalide con spatio de nomines "$2" e texto "$3"',
'invalidtitle-unknownnamespace' => 'Titulo invalide con spatio de nomines incognite $1 e texto "$2"',
'exception-nologin' => 'Non identificate',
'exception-nologin-text' => 'Iste pagina o action necessita que tu aperi session in iste wiki.',

# Virus scanner
'virus-badscanner' => "Configuration incorrecte: programma antivirus non cognoscite: ''$1''",
'virus-scanfailed' => 'scannamento fallite (codice $1)',
'virus-unknownscanner' => 'antivirus non cognoscite:',

# Login and logout pages
'logouttext' => "'''Tu ha claudite le session.'''

Tu pote continuar a usar {{SITENAME}} anonymemente, o tu pote <span class='plainlinks'>[$1 aperir un nove session]</span> con le mesme nomine de usator o con un altere.
Nota que alcun paginas pote continuar a apparer como si tu esserea ancora authenticate. Pro remediar isto, tu pote vacuar le cache de tu navigator.",
'welcomecreation' => '== Benvenite, $1! ==
Tu conto ha essite create.
Non oblida personalisar tu [[Special:Preferences|preferentias in {{SITENAME}}]].',
'yourname' => 'Nomine de usator:',
'yourpassword' => 'Contrasigno:',
'yourpasswordagain' => 'Repete contrasigno:',
'remembermypassword' => 'Memorar mi contrasigno in iste navigator (pro un maximo de $1 {{PLURAL:$1|die|dies}})',
'securelogin-stick-https' => 'Remaner connectite via HTTPS post apertura de session',
'yourdomainname' => 'Tu dominio:',
'password-change-forbidden' => 'Non es possibile cambiar le contrasigno in iste wiki.',
'externaldberror' => 'O il occurreva un error in le base de datos de authentication, o tu non ha le autorisation de actualisar tu conto externe.',
'login' => 'Aperir session',
'nav-login-createaccount' => 'Aperir session / crear conto',
'loginprompt' => 'Tu debe haber activate le cookies pro poter aperir un session in {{SITENAME}}.',
'userlogin' => 'Aperir session / crear conto',
'userloginnocreate' => 'Aperir session',
'logout' => 'Clauder session',
'userlogout' => 'Clauder session',
'notloggedin' => 'Tu non ha aperite un session',
'nologin' => "Tu non ha un conto? '''$1'''.",
'nologinlink' => 'Crear un conto',
'createaccount' => 'Crear conto',
'gotaccount' => "Tu jam ha un conto? '''$1'''.",
'gotaccountlink' => 'Aperir session',
'userlogin-resetlink' => 'Datos de authentication oblidate?',
'createaccountmail' => 'per e-mail',
'createaccountreason' => 'Motivo:',
'badretype' => 'Le duo contrasignos que tu scribeva non es identic.',
'userexists' => 'Iste nomine de usator es jam in uso.
Selige un altere nomine.',
'loginerror' => 'Error in le apertura del session',
'createaccounterror' => 'Non poteva crear le conto: $1',
'nocookiesnew' => "Le conto de usator ha essite create, sed tu non ha aperite un session.
{{SITENAME}} usa ''cookies'' pro mantener le sessiones del usatores.
Tu ha disactivate le functionalitate del ''cookies''.
Per favor activa lo, postea aperi un session con tu nove nomine de usator e contrasigno.",
'nocookieslogin' => "{{SITENAME}} usa ''cookies'' pro mantener le sessiones del usatores.
Tu ha disactivate le functionalitate del ''cookies''.
Per favor activa lo e reprova.",
'nocookiesfornew' => 'Le conto de usator non esseva create, proque nos non poteva confirmar su origine.
Verifica que tu ha activate le "cookies", recarga iste pagina e reproba.',
'noname' => 'Tu non specificava un nomine de usator valide.',
'loginsuccesstitle' => 'Session aperite con successo',
'loginsuccess' => "'''Tu es ora authenticate in {{SITENAME}} como \"\$1\".'''",
'nosuchuser' => 'Non existe un usator con le nomine "$1".
In le nomines de usator se distingue inter majusculas e minusculas.
Verifica le orthographia, o [[Special:UserLogin/signup|crea un nove conto]].',
'nosuchusershort' => 'Non existe un usator con le nomine "$1".
Verifica le orthographia.',
'nouserspecified' => 'Tu debe specificar un nomine de usator.',
'login-userblocked' => 'Iste usator es blocate. Apertura de session non permittite.',
'wrongpassword' => 'Le contrasigno que tu entrava es incorrecte. Per favor reprova.',
'wrongpasswordempty' => 'Tu non entrava un contrasigno. Per favor reprova.',
'passwordtooshort' => 'Le contrasignos debe continer al minus {{PLURAL:$1|1 character|$1 characteres}}.',
'password-name-match' => 'Tu contrasigno debe esser differente de tu nomine de usator.',
'password-login-forbidden' => 'Le uso de iste nomine de usator e contrasigno ha essite prohibite.',
'mailmypassword' => 'Inviar un nove contrasigno in e-mail',
'passwordremindertitle' => 'Nove contrasigno temporari pro {{SITENAME}}',
'passwordremindertext' => 'Alcuno (probabilemente tu, ab le adresse IP $1) requestava un nove
contrasigno pro {{SITENAME}} ($4).
Un contrasigno temporari pro le usator "$2" ha essite create; iste
contrasigno es "$3". Si isto esseva le intention, tu debe ora
aperir un session e eliger un nove contrasigno. Le contrasigno temporari
expirara post {{PLURAL:$5|un die|$5 dies}}.

Si un altere persona ha facite iste requesta, o si tu te ha rememorate
le contrasigno e non plus vole cambiar lo, tu pote ignorar iste message
e continuar a usar le contrasigno original.',
'noemail' => 'Il non ha un adresse de e-mail registrate pro le usator "$1".',
'noemailcreate' => 'Es necessari fornir un adresse de e-mail valide',
'passwordsent' => 'Un nove contrasigno ha essite inviate al adresse de e-mail registrate pro "$1".
Per favor aperi session de novo post reciper lo.',
'blocked-mailpassword' => 'Tu adresse IP es blocate de facer modificationes, e pro impedir le abuso, le uso del function pro recuperar contrasignos es equalmente blocate.',
'eauthentsent' => 'Un e-mail de confirmation ha essite inviate al adresse de e-mail nominate.
Ante que alcun altere e-mail se invia al conto, tu debera sequer le instructiones in le e-mail, pro confirmar que le conto es de facto tue.',
'throttled-mailpassword' => 'Un rememoration del contrasigno ha jam essite inviate intra le ultime {{PLURAL:$1|hora|$1 horas}}.
Pro prevenir le abuso, solmente un rememoration de contrasigno essera inviate per {{PLURAL:$1|hora|$1 horas}}.',
'mailerror' => 'Error de inviar e-mail: $1',
'acct_creation_throttle_hit' => 'Le visitatores de iste wiki usante tu adresse IP ha create {{PLURAL:$1|1 conto|$1 contos}} durante le ultime die, e isto es le maximo permittite in iste periodo de tempore.
A causa de isto, le visitatores usante iste adresse IP non pote crear nove contos al momento.',
'emailauthenticated' => 'Tu adresse de e-mail esseva authentificate le $2 a $3.',
'emailnotauthenticated' => 'Tu adresse de e-mail non ha essite authentificate ancora.
Nos non inviara e-mail pro alcun del sequente functiones.',
'noemailprefs' => 'Es necessari specificar un adresse de e-mail in tu preferentias pro poter executar iste functiones.',
'emailconfirmlink' => 'Confirmar tu adresse de e-mail',
'invalidemailaddress' => 'Le adresse de e-mail ha un formato invalide e non pote esser acceptate.
Entra un adresse ben formatate, o vacua ille campo.',
'cannotchangeemail' => 'Le adresses de e-mail associate al contos non pote esser cambiate in iste wiki.',
'emaildisabled' => 'Iste sito non pote inviar e-mail.',
'accountcreated' => 'Conto create',
'accountcreatedtext' => 'Le conto del usator $1 ha essite create.',
'createaccount-title' => 'Creation de un conto pro {{SITENAME}}',
'createaccount-text' => 'Un persona ha create un conto in tu adresse de e-mail a {{SITENAME}} ($4) denominate "$2", con le contrasigno "$3".
Tu deberea aperir un session e cambiar tu contrasigno ora.

Tu pote ignorar iste message si iste conto ha essite create in error.',
'usernamehasherror' => 'Le nomine de usator non pote continer grillias/cardinales/signos de numero ("#")',
'login-throttled' => 'Tu ha facite troppo de tentativas de identification.
Per favor attende ante de probar lo novemente.',
'login-abort-generic' => 'Apertura de session non succedite - Abortate',
'loginlanguagelabel' => 'Lingua: $1',
'suspicious-userlogout' => 'Le requesta de clauder le session ha essite refusate proque illo pare haber essite inviate per un navigator o proxy de cache defectuose.',

# E-mail sending
'php-mail-error-unknown' => 'Error incognite in le function mail() de PHP',
'user-mail-no-addy' => 'Tentava inviar e-mail sin adresse de e-mail.',

# Change password dialog
'resetpass' => 'Cambiar contrasigno',
'resetpass_announce' => 'Tu ha aperite un session con un codice temporari que tu recipeva in e-mail.
Pro completar le accesso, tu debe definir un nove contrasigno hic:',
'resetpass_text' => '<!-- Adde texto hic -->',
'resetpass_header' => 'Cambiar le contrasigno del conto',
'oldpassword' => 'Contrasigno actual:',
'newpassword' => 'Nove contrasigno:',
'retypenew' => 'Repete le nove contrasigno:',
'resetpass_submit' => 'Definir contrasigno e aperir un session',
'resetpass_success' => 'Tu contrasigno ha essite cambiate! Ora se aperi tu session...',
'resetpass_forbidden' => 'Le contrasignos non pote esser cambiate',
'resetpass-no-info' => 'Tu debe aperir un session pro poter acceder directemente a iste pagina.',
'resetpass-submit-loggedin' => 'Cambiar contrasigno',
'resetpass-submit-cancel' => 'Cancellar',
'resetpass-wrong-oldpass' => 'Le contrasigno temporari o actual es invalide.
Es possibile que tu ha ja cambiate tu contrasigno o requestate un nove contrasigno temporari.',
'resetpass-temp-password' => 'Contrasigno temporari:',

# Special:PasswordReset
'passwordreset' => 'Reinitialisar contrasigno',
'passwordreset-text' => 'Complete iste formulario pro reciper un rememoration in e-mail del datos de tu conto.',
'passwordreset-legend' => 'Reinitialisar contrasigno',
'passwordreset-disabled' => 'Le reinitialisation de contrasignos ha essite disactivate in iste wiki.',
'passwordreset-pretext' => '{{PLURAL:$1||Entra un del elementos de datos hic infra}}',
'passwordreset-username' => 'Nomine de usator:',
'passwordreset-domain' => 'Dominio:',
'passwordreset-capture' => 'Vider le e-mail resultante?',
'passwordreset-capture-help' => 'Si tu marca iste quadrato, le e-mail (con le contrasigno temporari) non solmente essera inviate al usator, ma anque monstrate a te.',
'passwordreset-email' => 'Adresse de e-mail:',
'passwordreset-emailtitle' => 'Detalios del conto in {{SITENAME}}',
'passwordreset-emailtext-ip' => 'Un persona (probabilemente tu, ab le adresse IP $1) requestava un rememoration del
detalios de tu conto in {{SITENAME}} ($4). Le {{PLURAL:$3|conto|contos}} de usator sequente es
associate con iste adresse de e-mail:

$2

Iste {{PLURAL:$3|contrasigno|contrasignos}} temporari expirara post {{PLURAL:$5|un die|$5 dies}}.
Tu deberea ora aperir session e eliger un nove contrasigno. Si un altere persona faceva iste
requesta, o si tu te ha rememorate tu contrasigno original e non plus
vole cambiar lo, tu pote ignorar iste message e continuar a usar le ancian
contrasigno.',
'passwordreset-emailtext-user' => 'Le usator $1 in {{SITENAME}} requestava un rememoration del detalios de tu conto in {{SITENAME}}
($4). Le {{PLURAL:$3|conto|contos}} de usator sequente es associate con iste adresse de e-mail:

$2

Iste {{PLURAL:$3|contrasigno|contrasignos}} temporari expirara post {{PLURAL:$5|un die|$5 dies}}.
Tu deberea ora aperir session e eliger un nove contrasigno. Si un altere persona faceva iste
requesta, o si tu te ha rememorate tu contrasigno original e non plus
vole cambiar lo, tu pote ignorar iste message e continuar a usar le ancian
contrasigno.',
'passwordreset-emailelement' => 'Nomine de usator: $1
Contrasigno temporari: $2',
'passwordreset-emailsent' => 'Un e-mail de rememoration ha essite inviate.',
'passwordreset-emailsent-capture' => 'Un e-mail de rememoration ha essite inviate; iste message es monstrate hic infra.',
'passwordreset-emailerror-capture' => 'Un e-mail de rememoration ha essite generate; iste message es monstrate hic infra, ma le invio al usator ha fallite: $1',

# Special:ChangeEmail
'changeemail' => 'Cambiar adresse de e-mail',
'changeemail-header' => 'Cambiar le adresse de e-mail del conto',
'changeemail-text' => 'Completa iste formulario pro cambiar tu adresse de e-mail. Essera necessari entrar tu contrasigno pro confirmar iste cambio.',
'changeemail-no-info' => 'Tu debe aperir un session pro poter acceder directemente a iste pagina.',
'changeemail-oldemail' => 'Adresse de e-mail actual:',
'changeemail-newemail' => 'Adresse de e-mail nove:',
'changeemail-none' => '(nulle)',
'changeemail-submit' => 'Cambiar e-mail',
'changeemail-cancel' => 'Cancellar',

# Edit page toolbar
'bold_sample' => 'Texto grasse',
'bold_tip' => 'Texto grasse',
'italic_sample' => 'Texto italic',
'italic_tip' => 'Texto italic',
'link_sample' => 'Titulo del ligamine',
'link_tip' => 'Ligamine interne',
'extlink_sample' => 'http://www.example.com titulo del ligamine',
'extlink_tip' => 'Ligamine externe (non oblida le prefixo http://)',
'headline_sample' => 'Texto del titulo',
'headline_tip' => 'Titulo de nivello 2',
'nowiki_sample' => 'Inserer texto non formatate hic',
'nowiki_tip' => 'Ignorar formatation wiki',
'image_sample' => 'Exemplo.jpg',
'image_tip' => 'File incastrate',
'media_sample' => 'Exemplo.ogg',
'media_tip' => 'Ligamine a un file',
'sig_tip' => 'Tu signatura con data e hora',
'hr_tip' => 'Linea horizontal (usa con moderation)',

# Edit pages
'summary' => 'Summario:',
'subject' => 'Subjecto/titulo:',
'minoredit' => 'Isto es un modification minor',
'watchthis' => 'Observar iste pagina',
'savearticle' => 'Publicar pagina',
'preview' => 'Previsualisation',
'showpreview' => 'Monstrar previsualisation',
'showlivepreview' => 'Previsualisation directe',
'showdiff' => 'Detaliar modificationes',
'anoneditwarning' => "'''Attention:''' Tu non ha aperite un session.
Tu adresse IP essera registrate in le historia de modificationes de iste pagina.",
'anonpreviewwarning' => "''Tu non ha aperite un session. Salveguardar registrara tu adresse IP in le historia de modificationes de iste pagina.''",
'missingsummary' => "'''Rememoration:''' Tu non ha specificate un summario del modification.
Si tu clicca super \"{{int:savearticle}}\" de novo, le modification essera publicate sin summario.",
'missingcommenttext' => 'Per favor entra un commento infra.',
'missingcommentheader' => "'''Rememoration:''' Tu non ha specificate un subjecto/titulo pro iste commento.
Si tu clicca super \"{{int:savearticle}}\" de novo, le modification essera publicate sin titulo.",
'summary-preview' => 'Previsualisation del summario:',
'subject-preview' => 'Previsualisation del subjecto/titulo:',
'blockedtitle' => 'Le usator es blocate',
'blockedtext' => "'''Tu nomine de usator o adresse IP ha essite blocate.'''

Le blocada esseva facite per $1.
Le motivo presentate es ''$2''.

* Initio del blocada: $8
* Expiration del blocada: $6
* Le blocato intendite: $7

Tu pote contactar $1 o un altere [[{{MediaWiki:Grouppage-sysop}}|administrator]] pro discuter le blocada.
Tu non pote usar le function 'inviar e-mail a iste usator' salvo que un adresse de e-mail valide es specificate in le
[[Special:Preferences|preferentias de tu conto]] e que tu non ha essite blocate de usar lo.
Tu adresse IP actual es $3, e le ID del blocada es #$5.
Per favor include tote le detalios supra specificate in omne correspondentia.",
'autoblockedtext' => 'Tu adresse de IP ha essite automaticamente blocate proque un altere usator lo usava qui esseva blocate per $1.
Le motivo presentate es:

:\'\'$2\'\'

* Initio del blocada: $8
* Expiration del blocada: $6
* Blocato intendite: $7

Tu pote contactar $1 o un del altere [[{{MediaWiki:Grouppage-sysop}}|administratores]] pro discuter le blocada.

Nota que tu non pote utilisar le function "inviar e-mail a iste usator" salvo que tu ha registrate un adresse de e-mail valide in tu [[Special:Preferences|preferentias de usator]] e que tu non ha essite blocate de usar lo.

Tu adresse IP actual es $3, e le ID del blocada es #$5.
Per favor include tote le detalios supra specificate in omne correspondentia.',
'blockednoreason' => 'nulle motivo specificate',
'whitelistedittext' => 'Tu debe $1 pro poter modificar paginas.',
'confirmedittext' => 'Tu debe confirmar tu adresse de e-mail pro poter modificar paginas.
Per favor entra e valida tu adresse de e-mail per medio de tu [[Special:Preferences|preferentias de usator]].',
'nosuchsectiontitle' => 'Section non trovate',
'nosuchsectiontext' => 'Tu ha tentate modificar un section que non existe.
Illo pote haber essite displaciate o delite durante que tu legeva le pagina.',
'loginreqtitle' => 'Identification necessari',
'loginreqlink' => 'aperir un session',
'loginreqpagetext' => 'Tu debe $1 pro poter vider altere paginas.',
'accmailtitle' => 'Contrasigno inviate.',
'accmailtext' => "Un contrasigno generate aleatorimente pro [[User talk:$1|$1]] ha essite inviate a $2.

Le contrasigno de iste nove conto pote esser cambiate in le pagina ''[[Special:ChangePassword|Cambiar contrasigno]]'' post que tu ha aperite un session.",
'newarticle' => '(Nove)',
'newarticletext' => "Tu ha sequite un ligamine verso un pagina que non existe ancora.
Pro crear iste pagina, comencia a scriber in le quadro infra (consulta le [[{{MediaWiki:Helppage}}|pagina de adjuta]] pro plus informationes).
Si tu ha arrivate a iste pagina per error, clicca le button '''Retornar''' de tu navigator.",
'anontalkpagetext' => "---- ''Isto es le pagina de discussion pro un usator anonyme qui non ha ancora create un conto, o qui non lo usa. Consequentemente nos debe usar le adresse IP numeric pro identificar le/la.
Un tal adresse IP pote esser usate in commun per varie personas.
Si tu es un usator anonyme e pensa que commentos irrelevante ha essite dirigite a te, per favor [[Special:UserLogin/signup|crea un conto]] o [[Special:UserLogin|aperi un session]] pro evitar futur confusiones con altere usatores anonyme.''",
'noarticletext' => 'Al momento il non ha texto in iste pagina.
Tu pote [[Special:Search/{{PAGENAME}}|cercar le titulo de iste pagina]] in altere paginas,
<span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} cercar in le registros pertinente],
o [{{fullurl:{{FULLPAGENAME}}|action=edit}} modificar iste pagina]</span>.',
'noarticletext-nopermission' => 'In iste momento il non ha texto in iste pagina.
Tu pote [[Special:Search/{{PAGENAME}}|cercar le titulo de iste pagina]] in altere paginas,
o <span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} cercar in le registros pertinente], ma tu non ha le permission de crear iste pagina.</span>',
'missing-revision' => 'Le version №$1 del pagina nominate "{{PAGENAME}}" non existe.

Isto es generalmente causate per sequer un ligamine de historia obsolete a un pagina que ha essite delite.
Detalios se trova in le [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} registro de deletiones].',
'userpage-userdoesnotexist' => 'Le conto de usator "<nowiki>$1</nowiki>" non es registrate. Per favor verifica que tu vole crear/modificar iste pagina.',
'userpage-userdoesnotexist-view' => 'Le conto de usator "$1" non es registrate.',
'blocked-notice-logextract' => 'Iste usator es actualmente blocate.
Le ultime entrata del registro de blocadas es reproducite ci infra pro information:',
'clearyourcache' => "'''Nota:''' Post confirmar, il pote esser necessari refrescar le ''cache'' de tu navigator pro vider le cambiamentos.
* '''Firefox / Safari:''' Tenente ''Shift'' clicca ''Reload (Recargar)'', o preme ''Ctrl-F5'' o ''Ctrl-R'' (''⌘-R'' sur Mac)
* '''Google Chrome:''' Preme ''Ctrl-Shift-R'' (''⌘-Shift-R'' sur Mac)
* '''Internet Explorer:''' Tenente ''Ctrl'' clicca ''Refresh (Refrescar)'', o preme ''Ctrl-F5'' 
* '''Opera:''' Vacua le ''cache'' in ''Tools → Preferences (Utensiles → Preferentias)''",
'usercssyoucanpreview' => "'''Consilio:''' Usa le button \"{{int:showpreview}}\" pro testar tu nove CSS ante de salveguardar lo.",
'userjsyoucanpreview' => "'''Consilio:''' Usa le button \"{{int:showpreview}}\" pro testar tu nove JavaScript ante de salveguardar lo.",
'usercsspreview' => "'''Non oblida que isto es solmente un previsualisation de tu CSS personalisate.'''
'''Le modificationes non ha ancora essite salveguardate!'''",
'userjspreview' => "'''Non oblida que isto es solmente un test/previsualisation de tu JavaScript personalisate.'''
'''Illo non ha ancora essite salveguardate!'''",
'sitecsspreview' => "'''Non oblida que isto es solmente un previsualisation de iste CSS.'''
'''Le modificationes non ha ancora essite salveguardate!'''",
'sitejspreview' => "'''Non oblida que isto es solmente un previsualisation de iste codice JavaScript.'''
'''Le modificationes non ha ancora essite salveguardate!'''",
'userinvalidcssjstitle' => "'''Attention:''' Le apparentia \"\$1\" non existe.
Memora que le paginas .css and .js personalisate usa un titulo in minusculas, p.ex. {{ns:user}}:Foo/vector.css e non {{ns:user}}:Foo/Vector.css.",
'updated' => '(Actualisate)',
'note' => "'''Nota:'''",
'previewnote' => "'''Isto es solmente un previsualisation.'''
Le modificationes non ha ancora essite publicate!",
'continue-editing' => 'Saltar al quadro de modification',
'previewconflict' => 'Iste previsualisation reflecte le apparentia final del texto in le area de modification superior
si tu opta pro publicar lo.',
'session_fail_preview' => "'''Nos non poteva processar tu modification proque nos perdeva le datos del session.
Per favor reprova.
Si illo ancora non va, prova [[Special:UserLogout|clauder tu session]] e aperir un nove session.'''",
'session_fail_preview_html' => "'''Nos non poteva processar tu modification proque nos perdeva le datos del session.'''

''Post que HTML crude es active in {{SITENAME}}, le previsualisation es celate como precaution contra attaccos via JavaScript.''

'''Si isto es un tentativa de modification legitime, per favor reprova lo.
Si illo ancora non va, prova [[Special:UserLogout|clauder tu session]] e aperir un nove session.'''",
'token_suffix_mismatch' => "'''Tu modification ha essite refusate proque tu cliente corrumpeva le characteres de punctuation in le indicio de modification.
Iste refusa es pro evitar le corruption del texto del pagina.
Isto pote occurrer quando tu usa un servicio problematic de ''proxy'' anonyme a base de web.'''",
'edit_form_incomplete' => "'''Certe partes del formulario de modification non attingeva le servitor; re-verifica que tu modificationes es intacte e reproba.'''",
'editing' => 'Modification de $1',
'creating' => 'Creation de $1',
'editingsection' => 'Modification de $1 (section)',
'editingcomment' => 'Modification de $1 (nove section)',
'editconflict' => 'Conflicto de modification: $1',
'explainconflict' => "Alicuno ha modificate iste pagina post que tu
ha comenciate a modificar lo.
Le area de texto superior contine le texto del pagina como illo existe actualmente.
Tu modificationes se monstra in le area de texto inferior.
Tu debera incorporar tu modificationes in le texto existente.
'''Solmente''' le texto del area superior essera publicate quando tu clicca super \"{{int:savearticle}}\".",
'yourtext' => 'Tu texto',
'storedversion' => 'Version immagazinate',
'nonunicodebrowser' => "'''Attention: Tu utilisa un navigator non compatibile con le characteres Unicode.'''
Un systema de modification alternative ha essite activate, que te permitte modificar articulos con securitate: le characteres non ASCII apparera in le quadro de modification como codices hexadecimal.",
'editingold' => "'''Attention: Tu modifica un version ancian de iste pagina.'''
Si tu lo publica, tote le modificationes facite post iste version essera perdite.",
'yourdiff' => 'Differentias',
'copyrightwarning' => "Nota ben que tote le contributiones a {{SITENAME}} se considera publicate sub le $2 (vide plus detalios in $1).
Si tu non vole que tu scripto sia modificate impietosemente e redistribuite a voluntate, alora non lo submitte hic.<br />
In addition, tu nos garanti que tu es le autor de isto, o que tu lo ha copiate de un ressource a dominio public o alteremente libere de derectos.
'''Non submitte material subjecte a copyright sin autorisation expresse!'''",
'copyrightwarning2' => "Nota ben que tote le contributiones a {{SITENAME}} pote esser redigite, alterate, o eliminate per altere contributores.
Si tu non vole que tu scripto sia modificate impietosemente, alora non lo submitte hic.<br />
In addition, tu nos garanti que tu es le autor de isto, o que tu lo ha copiate de un ressource a dominio public o alteremente libere de derectos (vide $1 pro detalios).
'''Non submitte material subjecte a copyright sin autorisation expresse!'''",
'longpageerror' => "'''Error: Le texto que tu submitteva occupa {{PLURAL:$1|un kilobyte|$1 kilobytes}}, excedente le maximo de {{PLURAL:$2|un kilobyte|$2 kilobytes}}.'''
Illo non pote esser salveguardate.",
'readonlywarning' => "'''Attention: Le base de datos ha essite blocate pro mantenentia, ergo tu non pote salveguardar tu modificationes in iste momento.'''
Nos recommenda copiar-e-collar le texto in un file de texto e salveguardar lo pro plus tarde.

Le administrator qui lo blocava dava iste explication: $1",
'protectedpagewarning' => "'''Attention:  Iste pagina ha essite protegite de sorta que solmente usatores con privilegios de administrator pote modificar lo.''' Le ultime entrata del registro es fornite hic infra pro referentia:",
'semiprotectedpagewarning' => "'''Nota:''' Iste pagina ha essite protegite de maniera que solmente usatores registrate pote modificar lo. Le ultime entrata del registro es fornite hic infra pro referentia:",
'cascadeprotectedwarning' => "'''Attention:''' Iste pagina ha essite protegite de maniera que solmente administratores pote modificar lo, proque illo es includite in le protection in cascada del sequente {{PLURAL:$1|pagina|paginas}}:",
'titleprotectedwarning' => "'''Attention:  Iste pagina ha essite protegite de maniera que [[Special:ListGroupRights|permissiones specific]] es requirite pro crear lo.''' Le ultime entrata del registro es fornite hic infra pro referentia:",
'templatesused' => '{{PLURAL:$1|Patrono|Patronos}} usate in iste pagina:',
'templatesusedpreview' => '{{PLURAL:$1|Patrono|Patronos}} usate in iste previsualisation:',
'templatesusedsection' => '{{PLURAL:$1|Patrono|Patronos}} usate in iste section:',
'template-protected' => '(protegite)',
'template-semiprotected' => '(semi-protegite)',
'hiddencategories' => 'Iste pagina es membro de {{PLURAL:$1|1 categoria|$1 categorias}} celate:',
'edittools' => '<!-- Iste texto se monstrara sub le formularios de modificar articulos e de incargar files. -->',
'nocreatetitle' => 'Creation de paginas limitate',
'nocreatetext' => '{{SITENAME}} ha restringite le possibilitate de crear nove paginas.
Tu pote retornar e modificar un pagina existente, o [[Special:UserLogin|aperir un session, o crear un conto]].',
'nocreate-loggedin' => 'Tu non ha le permission de crear nove paginas.',
'sectioneditnotsupported-title' => 'Modification de sectiones non supportate',
'sectioneditnotsupported-text' => 'Non es possibile modificar sectiones individual in iste pagina de modification.',
'permissionserrors' => 'Errores de permissiones',
'permissionserrorstext' => 'Tu non ha le permission de facer isto, pro le sequente {{PLURAL:$1|motivo|motivos}}:',
'permissionserrorstext-withaction' => 'Tu non ha le permission de $2, pro le sequente {{PLURAL:$1|motivo|motivos}}:',
'recreate-moveddeleted-warn' => "'''Attention: Tu es sur le puncto de recrear un pagina que esseva anteriormente delite.'''

Tu deberea considerar si il es appropriate continuar a modificar iste pagina.
Ecce le registro de deletiones e de renominationes pro iste pagina:",
'moveddeleted-notice' => 'Iste pagina ha essite delite.
In basso se revela le registro de deletiones e de modificationes del pagina pro ulterior informationes.',
'log-fulllog' => 'Vider le registro complete',
'edit-hook-aborted' => 'Modification abortate per un extension.
Nulle explication disponibile.',
'edit-gone-missing' => 'Impossibile actualisar le pagina.
Pare que illo ha essite delite.',
'edit-conflict' => 'Conflicto inter modificationes.',
'edit-no-change' => 'Tu modification ha essite ignorate, proque nulle cambio esseva facite in le texto.',
'edit-already-exists' => 'Non poteva crear un nove pagina.
Illo existe ja.',
'defaultmessagetext' => 'Texto predefinite del message',
'content-failed-to-parse' => 'Impossibile processar le contento $2 pro le modello $1: $3',
'invalid-content-data' => 'Datos de contento invalide',
'content-not-allowed-here' => 'Le contento "$1" non es permittite in le pagina [[$2]]',

# Content models
'content-model-wikitext' => 'wikitexto',
'content-model-text' => 'texto simple',
'content-model-javascript' => 'JavaScript',
'content-model-css' => 'CSS',

# Parser/template warnings
'expensive-parserfunction-warning' => 'Attention: Iste pagina contine troppo de appellos costose al functiones del analysator syntactic.

Illo debe haber minus de $2 {{PLURAL:$2|appello|appellos}}, sed al momento ha $1 {{PLURAL:$1|appello|appellos}}.',
'expensive-parserfunction-category' => 'Paginas con troppo de appellos costose al functiones del analysator syntactic',
'post-expand-template-inclusion-warning' => "'''Attention:''' Le grandor del patronos includite ha excedite le maximo.
Alcun patronos non essera includite.",
'post-expand-template-inclusion-category' => 'Paginas excedente le grandor maximal del patronos includite',
'post-expand-template-argument-warning' => "'''Attention:''' Iste pagina contine al minus un parametro de patrono que ha un grandor de expansion excessive.
Iste parametros ha essite omittite.",
'post-expand-template-argument-category' => 'Paginas que omitte alcun parametros de patrono',
'parser-template-loop-warning' => 'Recursion infinite detegite in patrono: [[$1]]',
'parser-template-recursion-depth-warning' => 'Limite de recursion del patrono excedite ($1)',
'language-converter-depth-warning' => 'Limite de profunditate del conversor de lingua excedite ($1)',
'node-count-exceeded-category' => 'Paginas in que le numero de nodos excede le limite',
'node-count-exceeded-warning' => 'Le numero de nodos in iste pagina excede le limite',
'expansion-depth-exceeded-category' => 'Paginas in que le profunditate de expansion excede le limite',
'expansion-depth-exceeded-warning' => 'Le profunditate de expansion in iste pagina excede le limite',
'parser-unstrip-loop-warning' => 'Bucla de "unstrip" detegite',
'parser-unstrip-recursion-limit' => 'Limite de recursion de "unstrip" excedite ($1)',
'converter-manual-rule-error' => 'Error detegite in le regula manual de conversion de lingua',

# "Undo" feature
'undo-success' => 'Le modification pote esser disfacite.
Per favor controla le comparation infra pro verificar que tu vole facer isto, e postea salveguarda le modificationes infra pro assi disfacer le modification.',
'undo-failure' => 'Le modification non poteva esser annullate a causa de conflicto con modificationes intermedie.',
'undo-norev' => 'Impossibile annullar le modification proque illo non existe o esseva delite.',
'undo-summary' => 'Annullava le version $1 per [[Special:Contributions/$2|$2]] ([[User talk:$2|Discussion]] | [[Special:Contributions/$2|{{MediaWiki:Contribslink}}]])',

# Account creation failure
'cantcreateaccounttitle' => 'Non pote crear conto',
'cantcreateaccount-text' => "Le creation de contos desde iste adresse IP ('''$1''') ha essite blocate per [[User:$3|$3]].

Le motivo que $3 dava es ''$2''",

# History pages
'viewpagelogs' => 'Vider le entratas del registro pro iste pagina',
'nohistory' => 'Non existe un historia de modificationes pro iste pagina.',
'currentrev' => 'Version actual',
'currentrev-asof' => 'Version actual del $1',
'revisionasof' => 'Version del $1',
'revision-info' => 'Version del $1 per $2',
'previousrevision' => '← Version precedente',
'nextrevision' => 'Version sequente →',
'currentrevisionlink' => 'Version actual',
'cur' => 'actu',
'next' => 'seq',
'last' => 'prec',
'page_first' => 'prime',
'page_last' => 'ultime',
'histlegend' => "Pro comparar duo versiones: marca lor circulos correspondente, e preme <code>Enter</code> o clicca le button in basso.<br />
Legenda: '''({{int:cur}})''' = comparar con le version actual,
'''({{int:last}})''' = comparar con le version precedente, '''{{int:minoreditletter}}''' = modification minor.",
'history-fieldset-title' => 'Examinar historia',
'history-show-deleted' => 'Delite solmente',
'histfirst' => 'Prime',
'histlast' => 'Ultime',
'historysize' => '({{PLURAL:$1|1 byte|$1 bytes}})',
'historyempty' => '(vacue)',

# Revision feed
'history-feed-title' => 'Historia de versiones',
'history-feed-description' => 'Historia del versiones de iste pagina in le wiki',
'history-feed-item-nocomment' => '$1 a $2',
'history-feed-empty' => 'Le pagina que tu requestava non existe.
Es possibile que illo esseva delite del wiki, o renominate.
Prova [[Special:Search|cercar nove paginas relevante]] in le wiki.',

# Revision deletion
'rev-deleted-comment' => '(summario del modification removite)',
'rev-deleted-user' => '(nomine de usator eliminate)',
'rev-deleted-event' => '(entrata eliminate)',
'rev-deleted-user-contribs' => '[nomine de usator o adresse IP removite - modification celate ab contributiones]',
'rev-deleted-text-permission' => "Iste version del pagina ha essite '''delite'''.
Es possibile que se trova detalios in le [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} registro de deletiones].",
'rev-deleted-text-unhide' => "Iste version del pagina ha essite '''delite'''.
Detalios se trova in le [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} registro de deletiones].
Tu pote totevia [$1 vider iste version] si tu vole.",
'rev-suppressed-text-unhide' => "Iste version del pagina ha essite '''supprimite'''.
Detalios se trova in le [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} registro de suppressiones].
Tu pote totevia [$1 vider iste version] si tu vole.",
'rev-deleted-text-view' => "Iste version del pagina ha essite '''delite'''.
Tu pote vider lo;
detalios se trova in le [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} registro de deletiones].",
'rev-suppressed-text-view' => "Iste version del pagina ha essite '''supprimite'''.
Tu pote vider lo; detalios se trova in le [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} registro de suppressiones].",
'rev-deleted-no-diff' => "Tu non pote vider iste diff proque un del versiones ha essite '''delite'''.
Es possibile que se trova detalios in le [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} registro de deletiones].",
'rev-suppressed-no-diff' => "Tu non pote vider iste diff proque un del versiones ha essite '''delite'''.",
'rev-deleted-unhide-diff' => "Un del versiones de iste diff ha essite '''delite'''.
Detalios se trova in le [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} registro de deletiones].
Tu pote totevia [$1 vider iste diff] si tu vole.",
'rev-suppressed-unhide-diff' => "Un del versiones de iste diff ha essite '''supprimite'''.
Detalios se trova in le [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} registro de suppressiones].
Tu pote totevia [$1 vider iste diff] si tu vole.",
'rev-deleted-diff-view' => "Un del versiones de iste diff ha essite '''delite'''.
Tu pote vider iste diff; detalios se trova in le [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} registro de deletiones].",
'rev-suppressed-diff-view' => "Un del versiones de iste diff ha essite '''supprimite'''.
Tu pote vider iste diff; detalios se trova in le [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} registro de suppressiones].",
'rev-delundel' => 'revelar/celar',
'rev-showdeleted' => 'monstrar',
'revisiondelete' => 'Deler/restaurar versiones',
'revdelete-nooldid-title' => 'Le version de destination es invalide',
'revdelete-nooldid-text' => 'O tu non ha specificate alcun version(es) de destination pro executar iste
function, o le version specificate non existe, o tu essaya celar le version actual.',
'revdelete-nologtype-title' => 'Typo de registro non specificate',
'revdelete-nologtype-text' => 'Tu non ha specificate un typo de registro super le qual iste action debe esser executate.',
'revdelete-nologid-title' => 'Entrata de registro invalide',
'revdelete-nologid-text' => 'O tu non ha specificate un evento de registro de destination super le qual iste action debe esser executate, o le entrata specificate non existe.',
'revdelete-no-file' => 'Le file specificate non existe.',
'revdelete-show-file-confirm' => 'Es tu secur de voler vider un version delite del file  "<nowiki>$1</nowiki>" del $2 a $3?',
'revdelete-show-file-submit' => 'Si',
'revdelete-selected' => "'''{{PLURAL:$2|Version seligite|Versiones seligite}} de [[:$1]]:'''",
'logdelete-selected' => "'''{{PLURAL:$1|Evento|Eventos}} de registro seligite:'''",
'revdelete-text' => "'''Le versiones e eventos delite continuara a apparer in le historia e registro del pagina, sed partes de lor contento essera inaccessibile al publico.'''
Altere administratores in {{SITENAME}} continuara a poter acceder al contento celate e pote restaurar lo per medio de iste mesme interfacie, si non se ha definite restrictiones additional.",
'revdelete-confirm' => 'Per favor confirma que tu ha le intention de facer isto, que tu comprende le consequentias, e que tu face isto in accordo con [[{{MediaWiki:Policy-url}}|le politica]].',
'revdelete-suppress-text' => "Le suppression debe '''solmente''' esser usate pro le sequente casos:
* Informationes personal inappropriate
*: ''adresses de domicilio e numeros de telephono, numeros de securitate social, etc.''",
'revdelete-legend' => 'Definir restrictiones de visibilitate',
'revdelete-hide-text' => 'Celar le texto del version',
'revdelete-hide-image' => 'Celar le contento del file',
'revdelete-hide-name' => 'Celar action e objectivo',
'revdelete-hide-comment' => 'Celar le summario del modification',
'revdelete-hide-user' => 'Celar le nomine de usator o adresse IP del modificator',
'revdelete-hide-restricted' => 'Supprimer le datos a administratores assi como a alteres',
'revdelete-radio-same' => '(non cambiar)',
'revdelete-radio-set' => 'Si',
'revdelete-radio-unset' => 'No',
'revdelete-suppress' => 'Supprimer le datos a administratores assi como a alteres',
'revdelete-unsuppress' => 'Eliminar restrictiones super versiones restaurate',
'revdelete-log' => 'Motivo:',
'revdelete-submit' => 'Applicar al {{PLURAL:$1|version|versiones}} seligite',
'revdelete-success' => "'''Le visibilitate del version ha essite actualisate con successo.'''",
'revdelete-failure' => "'''Le visibilitate del version non poteva esser actualisate:'''
$1",
'logdelete-success' => "'''Le visibilitate del registro ha essite definite con successo.'''",
'logdelete-failure' => "'''Le visibilitate del registro non poteva esser cambiate:'''
$1",
'revdel-restore' => 'Cambiar visibilitate',
'revdel-restore-deleted' => 'versiones delite',
'revdel-restore-visible' => 'versiones visibile',
'pagehist' => 'Historia del pagina',
'deletedhist' => 'Historia delite',
'revdelete-hide-current' => 'Error de celar le entrata del $2 a $1: iste es le version actual.
Illo non pote esser celate.',
'revdelete-show-no-access' => 'Error de revelar le entrata del $2 a $1: iste entrata ha essite marcate como "restringite".
Tu non ha accesso a illo.',
'revdelete-modify-no-access' => 'Error de modificar le entrata del $2 a $1: iste entrata ha essite marcate como "restringite".
Tu non ha accesso a illo.',
'revdelete-modify-missing' => 'Error de modificar le entrata con ID $1: illo manca in le base de datos!',
'revdelete-no-change' => "'''Attention:''' le entrata del $2, $1 jam habeva le configuration requestate de visibilitate.",
'revdelete-concurrent-change' => 'Error de modificar le entrata del $2, $1: il pare que alcuno altere ha cambiate su stato durante que tu tentava modificar lo.
Per favor verifica le registros.',
'revdelete-only-restricted' => 'Error de celar le entrata del $1 a $2: tu non pote render entratas invisibile a administratores sin seliger tamben un del altere optiones de visibilitate.',
'revdelete-reason-dropdown' => '*Motivos commun pro deletion
** Violation de copyright
** Information personal o commento inappropriate
** Nomine de usator inappropriate
** Information que pote esser diffamatori',
'revdelete-otherreason' => 'Altere/additional motivo:',
'revdelete-reasonotherlist' => 'Altere motivo',
'revdelete-edit-reasonlist' => 'Modificar motivos pro deletion',
'revdelete-offender' => 'Autor del version:',

# Suppression log
'suppressionlog' => 'Registro de suppressiones',
'suppressionlogtext' => 'Infra es un lista de deletiones e blocadas que involve contento que es celate de administratores.
Vide le [[Special:BlockList|lista de blocadas]] pro le lista de bannimentos e blocadas actualmente in operation.',

# History merging
'mergehistory' => 'Fusionar historias del paginas',
'mergehistory-header' => 'Iste pagina te permitte fusionar versiones del historia de un pagina de origine in un pagina plus nove.
Assecura te que iste cambio mantenera le continuitate historic del pagina.',
'mergehistory-box' => 'Fusionar le versiones de duo paginas:',
'mergehistory-from' => 'Pagina de origine:',
'mergehistory-into' => 'Pagina de destination:',
'mergehistory-list' => 'Historia de modificationes fusionabile',
'mergehistory-merge' => 'Le sequente versiones de [[:$1]] pote esser fusionate in [[:$2]].
Usa le columna de buttones radio pro fusionar solmente le versiones create in e ante le tempore specificate.
Nota que le uso del ligamines de navigation causara le perdita de tote cambios in iste columna.',
'mergehistory-go' => 'Revelar modificationes fusionabile',
'mergehistory-submit' => 'Fusionar versiones',
'mergehistory-empty' => 'Nulle versiones pote esser fusionate.',
'mergehistory-success' => '$3 {{PLURAL:$3|version|versiones}} de [[:$1]] fusionate in [[:$2]] con successo.',
'mergehistory-fail' => 'Impossibile executar le fusion del historia. Per favor reverifica le parametros del pagina e del tempore.',
'mergehistory-no-source' => 'Le pagina de origine $1 non existe.',
'mergehistory-no-destination' => 'Le pagina de destination $1 non existe.',
'mergehistory-invalid-source' => 'Le pagina de origine debe esser un titulo valide.',
'mergehistory-invalid-destination' => 'Le pagina de destination debe esser un titulo valide.',
'mergehistory-autocomment' => 'Fusionava [[:$1]] in [[:$2]]',
'mergehistory-comment' => 'Fusionava [[:$1]] in [[:$2]]: $3',
'mergehistory-same-destination' => 'Le paginas de origine e de destination non pote esser le mesme',
'mergehistory-reason' => 'Motivo:',

# Merge log
'mergelog' => 'Registro de fusiones',
'pagemerge-logentry' => 'fusionava [[$1]] in [[$2]] (versiones usque a $3)',
'revertmerge' => 'Disfusionar',
'mergelogpagetext' => 'Infra es un lista del fusiones le plus recente de un historia de pagina in un altere.',

# Diffs
'history-title' => '$1: Historia de versiones',
'difference-title' => '$1: Differentia inter versiones',
'difference-title-multipage' => '$1 e $2: Differentia inter paginas',
'difference-multipage' => '(Differentia inter paginas)',
'lineno' => 'Linea $1:',
'compareselectedversions' => 'Comparar versiones seligite',
'showhideselectedversions' => 'Revelar/celar le versiones seligite',
'editundo' => 'disfacer',
'diff-multi' => '({{PLURAL:$1|Un version intermedie|$1 versiones intermedie}} facite per {{PLURAL:$2|un usator|$2 usatores}} non es monstrate)',
'diff-multi-manyusers' => '({{PLURAL:$1|Un version intermedie|$1 versiones intermedie}} facite per plus de $2 {{PLURAL:$2|usator|usatores}} non es monstrate)',
'difference-missing-revision' => '{{PLURAL:$2|Un version|$2 versiones}} de iste differentia ($1) non ha essite trovate.

Isto es generalmente causate per sequer un ligamine de diff obsolete a un pagina que ha essite delite.
Detalios se trova in le [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} registro de deletiones].',

# Search results
'searchresults' => 'Resultatos del recerca',
'searchresults-title' => 'Resultatos del recerca de "$1"',
'searchresulttext' => 'Pro plus informationes super le recerca in {{SITENAME}}, vide [[{{MediaWiki:Helppage}}|{{int:help}}]].',
'searchsubtitle' => 'Tu cercava \'\'\'[[:$1]]\'\'\' ([[Special:Prefixindex/$1|tote le paginas que comencia con "$1"]]{{int:pipe-separator}}[[Special:WhatLinksHere/$1|tote le paginas con ligamines a "$1"]])',
'searchsubtitleinvalid' => "Tu cercava '''$1'''",
'toomanymatches' => 'Se retornava troppo de resultatos. Per favor prova un altere consulta.',
'titlematches' => 'Correspondentias in le titulos de paginas',
'notitlematches' => 'Nulle correspondentias in le titulos de paginas',
'textmatches' => 'Resultatos in le texto de paginas',
'notextmatches' => 'Nulle resultato in le texto de paginas',
'prevn' => '$1 {{PLURAL:$1|precedente|precedentes}}',
'nextn' => '$1 {{PLURAL:$1|sequente|sequentes}}',
'prevn-title' => '$1 {{PLURAL:$1|resultato|resultatos}} precedente',
'nextn-title' => '$1 {{PLURAL:$1|resultato|resultatos}} sequente',
'shown-title' => 'Monstrar $1 {{PLURAL:$1|resultato|resultatos}} per pagina',
'viewprevnext' => 'Vider ($1 {{int:pipe-separator}} $2) ($3).',
'searchmenu-legend' => 'Optiones de recerca',
'searchmenu-exists' => "'''Existe un pagina nominate \"[[\$1]]\" in iste wiki'''",
'searchmenu-new' => "'''Crea le pagina \"[[:\$1]]\" in iste wiki!'''",
'searchhelp-url' => 'Help:Contento',
'searchmenu-prefix' => '[[Special:PrefixIndex/$1|Navigar per le paginas con iste prefixo]]',
'searchprofile-articles' => 'Paginas de contento',
'searchprofile-project' => 'Paginas de adjuta e del projecto',
'searchprofile-images' => 'Multimedia',
'searchprofile-everything' => 'Toto',
'searchprofile-advanced' => 'Avantiate',
'searchprofile-articles-tooltip' => 'Cercar in $1',
'searchprofile-project-tooltip' => 'Cercar in $1',
'searchprofile-images-tooltip' => 'Cercar files',
'searchprofile-everything-tooltip' => 'Cercar in tote le contento (includente le paginas de discussion)',
'searchprofile-advanced-tooltip' => 'Cercar in spatios de nomines personalisate',
'search-result-size' => '$1 ({{PLURAL:$2|1 parola|$2 parolas}})',
'search-result-category-size' => '{{PLURAL:$1|1 membro|$1 membros}} ({{PLURAL:$2|1 subcategoria|$2 subcategorias}}, {{PLURAL:$3|1 file|$3 files}})',
'search-result-score' => 'Relevantia: $1%',
'search-redirect' => '(redirection ab $1)',
'search-section' => '(section $1)',
'search-suggest' => 'Esque tu vole dicer: $1',
'search-interwiki-caption' => 'Projectos fratres',
'search-interwiki-default' => 'Resultatos de $1:',
'search-interwiki-more' => '(plus)',
'search-relatedarticle' => 'Connexe',
'mwsuggest-disable' => 'Disactivar suggestiones via AJAX',
'searcheverything-enable' => 'Cercar in tote le spatios de nomines',
'searchrelated' => 'connexe',
'searchall' => 'totes',
'showingresults' => "Infra se monstra non plus de {{PLURAL:$1|'''1''' resultato|'''$1''' resultatos}} a partir del numero '''$2'''.",
'showingresultsnum' => "Infra se monstra {{PLURAL:$3|'''1''' resultato|'''$3''' resultatos}} a partir del numero '''$2'''.",
'showingresultsheader' => "{{PLURAL:$5|Resultato '''$1'''|Resultatos '''$1 - $2'''}} de '''$3''' pro '''$4'''",
'nonefound' => "'''Nota:''' Normalmente, es cercate solmente in alcun spatios de nomines.
Tenta prefixar tu consulta con ''all:'' pro cercar in tote le contento (includente paginas de discussion, patronos, etc.), o usa le spatio de nomines desirate como prefixo.",
'search-nonefound' => 'Le recerca non ha producite resultatos.',
'powersearch' => 'Recerca avantiate',
'powersearch-legend' => 'Recerca avantiate',
'powersearch-ns' => 'Cercar in spatios de nomines:',
'powersearch-redir' => 'Listar redirectiones',
'powersearch-field' => 'Cercar',
'powersearch-togglelabel' => 'Seliger:',
'powersearch-toggleall' => 'Totes',
'powersearch-togglenone' => 'Nihil',
'search-external' => 'Recerca externe',
'searchdisabled' => 'Le recerca in {{SITENAME}} es disactivate.
Tu pote cercar via Google in le interim.
Nota que lor indices del contento de {{SITENAME}} pote esser obsolete.',

# Quickbar
'qbsettings' => 'Barra rapide',
'qbsettings-none' => 'Necun',
'qbsettings-fixedleft' => 'Fixe a sinistra',
'qbsettings-fixedright' => 'Fixe a dextra',
'qbsettings-floatingleft' => 'Flottante a sinistra',
'qbsettings-floatingright' => 'Flottante a dextra',
'qbsettings-directionality' => 'Fixe, dependente del direction de scriptura de tu lingua',

# Preferences page
'preferences' => 'Preferentias',
'mypreferences' => 'Mi preferentias',
'prefs-edits' => 'Numero de modificationes:',
'prefsnologin' => 'Tu non ha aperite un session',
'prefsnologintext' => 'Tu debe <span class="plainlinks">[{{fullurl:{{#Special:UserLogin}}|returnto=$1}} aperir session]</span> pro configurar preferentias de usator.',
'changepassword' => 'Cambiar contrasigno',
'prefs-skin' => 'Apparentia',
'skin-preview' => 'Previsualisation',
'datedefault' => 'Nulle preferentia',
'prefs-beta' => 'Functiones beta',
'prefs-datetime' => 'Data e hora',
'prefs-labs' => 'Functiones experimental',
'prefs-user-pages' => 'Paginas de usator',
'prefs-personal' => 'Profilo del usator',
'prefs-rc' => 'Modificationes recente',
'prefs-watchlist' => 'Observatorio',
'prefs-watchlist-days' => 'Numero de dies a monstrar in le observatorio:',
'prefs-watchlist-days-max' => 'Maximo $1 {{PLURAL:$1|die|dies}}',
'prefs-watchlist-edits' => 'Numero maxime de modificationes a monstrar in le observatorio expandite:',
'prefs-watchlist-edits-max' => 'Numero maxime: 1000',
'prefs-watchlist-token' => 'Indicio pro le observatorio:',
'prefs-misc' => 'Misc',
'prefs-resetpass' => 'Cambiar contrasigno',
'prefs-changeemail' => 'Cambiar e-mail',
'prefs-setemail' => 'Definir un adresse de e-mail',
'prefs-email' => 'Optiones de e-mail',
'prefs-rendering' => 'Apparentia',
'saveprefs' => 'Confirmar',
'resetprefs' => 'Reverter cambios',
'restoreprefs' => 'Restaurar tote le configurationes predefinite',
'prefs-editing' => 'Modification',
'prefs-edit-boxsize' => 'Dimensiones del fenestra de modification.',
'rows' => 'Lineas:',
'columns' => 'Columnas:',
'searchresultshead' => 'Recerca',
'resultsperpage' => 'Resultatos per pagina:',
'stub-threshold' => 'Limite pro formatar le ligamines in <a href="#" class="stub">stilo de peciettas</a> (bytes):',
'stub-threshold-disabled' => 'Disactivate',
'recentchangesdays' => 'Numero de dies a monstrar in modificationes recente:',
'recentchangesdays-max' => '(non plus de $1 {{PLURAL:$1|die|dies}})',
'recentchangescount' => 'Numero de modificationes a monstrar per predefinition:',
'prefs-help-recentchangescount' => 'Isto include modificationes recente, historias de paginas, e registros.',
'prefs-help-watchlist-token' => 'Le insertion de un clave secrete in iste campo generara un syndication RSS de tu observatorio.
Omnes persona cognoscente le clave in iste campo potera leger tu observatorio. Selige ergo un valor secur!
Ecce un valor aleatorimente generate que tu pote usar: $1',
'savedprefs' => 'Tu preferentias ha essite confirmate.',
'timezonelegend' => 'Fuso horari:',
'localtime' => 'Hora local:',
'timezoneuseserverdefault' => 'Usar le valor predefinite del wiki ($1)',
'timezoneuseoffset' => 'Altere (specifica le differentia)',
'timezoneoffset' => 'Differentia¹:',
'servertime' => 'Hora del servitor:',
'guesstimezone' => 'Obtener del navigator',
'timezoneregion-africa' => 'Africa',
'timezoneregion-america' => 'America',
'timezoneregion-antarctica' => 'Antarctica',
'timezoneregion-arctic' => 'Arctico',
'timezoneregion-asia' => 'Asia',
'timezoneregion-atlantic' => 'Oceano Atlantic',
'timezoneregion-australia' => 'Australia',
'timezoneregion-europe' => 'Europa',
'timezoneregion-indian' => 'Oceano Indian',
'timezoneregion-pacific' => 'Oceano Pacific',
'allowemail' => 'Activar reception de e-mail de altere usatores',
'prefs-searchoptions' => 'Recerca',
'prefs-namespaces' => 'Spatios de nomines',
'defaultns' => 'Alteremente cercar in iste spatios de nomines:',
'default' => 'predefinite',
'prefs-files' => 'Files',
'prefs-custom-css' => 'CSS personalisate',
'prefs-custom-js' => 'JS personalisate',
'prefs-common-css-js' => 'CSS/JS commun a tote le apparentias:',
'prefs-reset-intro' => 'Iste pagina es pro reinitialisar tu preferentias al valores predefinite del sito.
Le operation non pote esser disfacite.',
'prefs-emailconfirm-label' => 'Confirmation del e-mail:',
'prefs-textboxsize' => 'Dimension del fenestra de modification',
'youremail' => 'E-mail:',
'username' => 'Nomine de usator:',
'uid' => 'ID del usator:',
'prefs-memberingroups' => 'Membro de {{PLURAL:$1|gruppo|gruppos}}:',
'prefs-registration' => 'Data de registration:',
'yourrealname' => 'Nomine real:',
'yourlanguage' => 'Lingua:',
'yourvariant' => 'Variante de lingua de contento:',
'prefs-help-variant' => 'Le variante o orthographia preferite pro le paginas de contento de iste wiki.',
'yournick' => 'Signatura:',
'prefs-help-signature' => 'Commentos in paginas de discussion debe esser signate con "<nowiki>~~~~</nowiki>" que essera convertite in tu signatura e un indication del data e hora.',
'badsig' => 'Signatura crude invalide; verificar le etiquettas HTML.',
'badsiglength' => 'Tu signatura es troppo longe.
Illo debe haber minus de $1 {{PLURAL:$1|character|characteres}}.',
'yourgender' => 'Sexo:',
'gender-unknown' => 'Non specificate',
'gender-male' => 'Masculin',
'gender-female' => 'Feminin',
'prefs-help-gender' => 'Optional: usate pro facer le software adressar te correctemente secundo tu sexo. Iste information es public.',
'email' => 'E-mail',
'prefs-help-realname' => 'Le nomine real es optional.
Si tu opta pro dar lo, isto essera usate pro dar te attribution pro tu contributiones.',
'prefs-help-email' => 'Le adresse de e-mail es optional, ma es necessari pro le reinitialisation de tu contrasigno, in caso que tu lo oblida.',
'prefs-help-email-others' => 'Tu pote etiam optar pro permitter que altere personas te contacta via tu pagina de usator o de discussion, sin necessitate de revelar tu identitate.',
'prefs-help-email-required' => 'Le adresse de e-mail es requirite.',
'prefs-info' => 'Informationes de base',
'prefs-i18n' => 'Internationalisation',
'prefs-signature' => 'Signatura',
'prefs-dateformat' => 'Formato de data',
'prefs-timeoffset' => 'Differentia de tempore',
'prefs-advancedediting' => 'Optiones avantiate',
'prefs-advancedrc' => 'Optiones avantiate',
'prefs-advancedrendering' => 'Optiones avantiate',
'prefs-advancedsearchoptions' => 'Optiones avantiate',
'prefs-advancedwatchlist' => 'Optiones avantiate',
'prefs-displayrc' => 'Optiones de presentation',
'prefs-displaysearchoptions' => 'Optiones de presentation',
'prefs-displaywatchlist' => 'Optiones de presentation',
'prefs-diffs' => 'Differentias',

# User preference: e-mail validation using jQuery
'email-address-validity-valid' => 'Sembla valide',
'email-address-validity-invalid' => 'Un adresse valide es obligatori!',

# User rights
'userrights' => 'Gestion de derectos de usator',
'userrights-lookup-user' => 'Gerer gruppos de usatores',
'userrights-user-editname' => 'Entra un nomine de usator:',
'editusergroup' => 'Modificar gruppos de usatores',
'editinguser' => "Cambia le derectos del usator '''[[User:$1|$1]]''' $2",
'userrights-editusergroup' => 'Modificar gruppos de usatores',
'saveusergroups' => 'Salveguardar gruppos de usatores',
'userrights-groupsmember' => 'Membro de:',
'userrights-groupsmember-auto' => 'Membro implicite de:',
'userrights-groups-help' => 'Tu pote alterar le gruppos del quales iste usator es membro:
* Un quadrato marcate significa que le usator es membro del gruppo in question.
* Un non marcate significa que ille non es membro de illo.
* Un * indica que tu non potera eliminar le gruppo quando tu lo ha addite, o vice versa.',
'userrights-reason' => 'Motivo:',
'userrights-no-interwiki' => 'Tu non ha le permission de modificar le derectos de usatores in altere wikis.',
'userrights-nodatabase' => 'Le base de datos $1 non existe o non es local.',
'userrights-nologin' => 'Tu debe [[Special:UserLogin|aperir un session]] con un conto de administrator pro poter assignar derectos de usator.',
'userrights-notallowed' => 'Tu conto non ha le permission de adder o remover derectos de usator.',
'userrights-changeable-col' => 'Gruppos que tu pote modificar',
'userrights-unchangeable-col' => 'Gruppos que tu non pote modificar',

# Groups
'group' => 'Gruppo:',
'group-user' => 'Usatores',
'group-autoconfirmed' => 'Usatores autoconfirmate',
'group-bot' => 'Bots',
'group-sysop' => 'Administratores',
'group-bureaucrat' => 'Bureaucrates',
'group-suppress' => 'Supervisores',
'group-all' => '(totes)',

'group-user-member' => '{{GENDER:$1|usator|usatrice|usator}}',
'group-autoconfirmed-member' => '{{GENDER:$1|usator|usatrice|usator}} autoconfirmate',
'group-bot-member' => '{{GENDER:$1|robot}}',
'group-sysop-member' => '{{GENDER:$1|administrator|administratrice|administrator}}',
'group-bureaucrat-member' => '{{GENDER:$1|bureaucrate}}',
'group-suppress-member' => '{{GENDER:$1|supervisor|supervisora}}',

'grouppage-user' => '{{ns:project}}:Usatores',
'grouppage-autoconfirmed' => '{{ns:project}}:Usatores autoconfirmate',
'grouppage-bot' => '{{ns:project}}:Bots',
'grouppage-sysop' => '{{ns:project}}:Administratores',
'grouppage-bureaucrat' => '{{ns:project}}:Bureaucrates',
'grouppage-suppress' => '{{ns:project}}:Supervisores',

# Rights
'right-read' => 'Leger paginas',
'right-edit' => 'Modificar paginas',
'right-createpage' => 'Crear paginas (non discussion)',
'right-createtalk' => 'Crear paginas de discussion',
'right-createaccount' => 'Crear nove contos de usator',
'right-minoredit' => 'Marcar modificationes como minor',
'right-move' => 'Renominar paginas',
'right-move-subpages' => 'Renominar paginas con lor subpaginas',
'right-move-rootuserpages' => 'Renominar le paginas radice de usator',
'right-movefile' => 'Renominar files',
'right-suppressredirect' => 'Non rediriger le ancian nomine verso le nove quando se renomina un pagina',
'right-upload' => 'Incargar files',
'right-reupload' => 'Superscriber un file existente',
'right-reupload-own' => 'Superscriber un file anteriormente incargate per uno mesme',
'right-reupload-shared' => 'Supplantar localmente le files del respositorio commun de media',
'right-upload_by_url' => 'Incargar un file ab un adresse URL',
'right-purge' => 'Purgar le cache de un pagina in le sito sin confirmation',
'right-autoconfirmed' => 'Modificar paginas semiprotegite',
'right-bot' => 'Esser tractate como processo automatic',
'right-nominornewtalk' => 'Non reciper notification de nove messages quando se face modificationes minor in le pagina de discussion',
'right-apihighlimits' => 'Usar limites plus alte in consultas via API',
'right-writeapi' => 'Uso del API pro modificar le wiki',
'right-delete' => 'Deler paginas',
'right-bigdelete' => 'Deler paginas con historias longe',
'right-deletelogentry' => 'Deler e restaurar specific entratas del registro',
'right-deleterevision' => 'Deler e restaurar versiones specific de paginas',
'right-deletedhistory' => 'Vider entratas de historia delite, sin lor texto associate',
'right-deletedtext' => 'Vider texto delite e differentias inter versiones delite',
'right-browsearchive' => 'Cercar in paginas delite',
'right-undelete' => 'Restaurar un pagina',
'right-suppressrevision' => 'Revider e restaurar versiones celate ab administratores',
'right-suppressionlog' => 'Vider registros private',
'right-block' => 'Blocar altere usatores de facer modificationes',
'right-blockemail' => 'Blocar un usator de inviar e-mail',
'right-hideuser' => 'Blocar un nomine de usator, celante lo del publico',
'right-ipblock-exempt' => 'Contornar le blocadas de adresses IP, blocadas automatic e blocadas de intervallos IP',
'right-proxyunbannable' => 'Contornar le blocadas automatic de proxy',
'right-unblockself' => 'Disblocar se mesme',
'right-protect' => 'Cambiar nivellos de protection e modificar paginas protegite',
'right-editprotected' => 'Modificar paginas protegite (sin cascada)',
'right-editinterface' => 'Modificar le interfacie de usator',
'right-editusercssjs' => 'Modificar le files CSS e JS de altere usatores',
'right-editusercss' => 'Modificar le files CSS de altere usatores',
'right-edituserjs' => 'Modificar le files JS de altere usatores',
'right-rollback' => 'Rapidemente revocar le modificationes del ultime usator que modificava un pagina particular',
'right-markbotedits' => 'Marcar modificationes de reversion como facite per un bot',
'right-noratelimit' => 'Non esser subjecte al limites de frequentia de actiones',
'right-import' => 'Importar paginas de altere wikis',
'right-importupload' => 'Importar paginas ex un file incargate',
'right-patrol' => 'Marcar le modificationes de alteres como patruliate',
'right-autopatrol' => 'Marcar automaticamente le proprie modificationes como patruliate',
'right-patrolmarks' => 'Vider marcas de patrulia in le modificationes recente',
'right-unwatchedpages' => 'Vider un lista de paginas non observate',
'right-mergehistory' => 'Fusionar le historia de paginas',
'right-userrights' => 'Modificar tote le derectos de usator',
'right-userrights-interwiki' => 'Modificar le derectos de usatores in altere wikis',
'right-siteadmin' => 'Blocar e disblocar le base de datos',
'right-override-export-depth' => 'Exportar paginas includente paginas ligate usque a un profunditate de 5',
'right-sendemail' => 'Inviar e-mail a altere usatores',
'right-passwordreset' => 'Vider le e-mails pro reinitialisar le contrasigno',

# User rights log
'rightslog' => 'Registro de derectos de usator',
'rightslogtext' => 'Isto es un registro de cambios in derectos de usator.',
'rightslogentry' => 'cambiava le gruppos del quales $1 es membro de $2 a $3',
'rightslogentry-autopromote' => 'ha essite automaticamente promovite de $2 a $3',
'logentry-rights-rights' => '$1 cambiava le appertinentia a gruppos pro $3 de $4 a $5',
'logentry-rights-rights-legacy' => '$1 cambiava le appertinentia a gruppos pro $3',
'logentry-rights-autopromote' => '$1 ha essite automaticamente promovite de $4 a $5',
'rightsnone' => '(nulle)',

# Associated actions - in the sentence "You do not have permission to X"
'action-read' => 'leger iste pagina',
'action-edit' => 'modificar iste pagina',
'action-createpage' => 'crear paginas',
'action-createtalk' => 'crear paginas de discussion',
'action-createaccount' => 'crear iste conto de usator',
'action-minoredit' => 'marcar iste modification como minor',
'action-move' => 'renominar iste pagina',
'action-move-subpages' => 'renominar iste pagina e su subpaginas',
'action-move-rootuserpages' => 'renominar le paginas radice de usator',
'action-movefile' => 'renominar iste file',
'action-upload' => 'incargar iste file',
'action-reupload' => 'superscriber iste file existente',
'action-reupload-shared' => 'supplantar iste file in un repositorio commun',
'action-upload_by_url' => 'incargar iste file ab un adresse URL',
'action-writeapi' => 'usar le API de scriptura',
'action-delete' => 'deler iste pagina',
'action-deleterevision' => 'deler iste version',
'action-deletedhistory' => 'vider le historia delite de iste pagina',
'action-browsearchive' => 'cercar in paginas delite',
'action-undelete' => 'restaurar iste pagina',
'action-suppressrevision' => 'revider e restaurar iste version celate',
'action-suppressionlog' => 'vider iste registro private',
'action-block' => 'blocar iste usator de facer modificationes',
'action-protect' => 'cambiar le nivellos de protection pro iste pagina',
'action-rollback' => 'revocar rapidemente le modificationes del ultime usator qui modificava un particular pagina',
'action-import' => 'importar iste pagina ab un altere wiki',
'action-importupload' => 'importar iste pagina ex un file incargate',
'action-patrol' => 'marcar le modificationes de alteros como patruliate',
'action-autopatrol' => 'haber tu modification marcate como patruliate',
'action-unwatchedpages' => 'vider le lista de paginas non observate',
'action-mergehistory' => 'fusionar le historia de iste pagina',
'action-userrights' => 'modificar tote le derectos de usator',
'action-userrights-interwiki' => 'modificar le derectos de usatores in altere wikis',
'action-siteadmin' => 'blocar e disblocar le base de datos',
'action-sendemail' => 'inviar e-mail',

# Recent changes
'nchanges' => '$1 {{PLURAL:$1|modification|modificationes}}',
'recentchanges' => 'Modificationes recente',
'recentchanges-legend' => 'Optiones del modificationes recente',
'recentchanges-summary' => 'Seque le plus recente modificationes a {{SITENAME}} in iste pagina.',
'recentchanges-feed-description' => 'Seque le modificationes le plus recente al wiki in iste syndication.',
'recentchanges-label-newpage' => 'Iste modification creava un nove pagina',
'recentchanges-label-minor' => 'Isto es un modification minor',
'recentchanges-label-bot' => 'Iste modification ha essite effectuate per un robot',
'recentchanges-label-unpatrolled' => 'Iste modification non ha ancora essite patruliate',
'rcnote' => "Infra es {{PLURAL:$1|'''1''' modification|le ultime '''$1''' modificationes}} in le ultime {{PLURAL:$2|die|'''$2''' dies}}, actualisate le $4 a $5.",
'rcnotefrom' => 'infra es le modificationes a partir de <b>$2</b> (usque a <b>$1</b>).',
'rclistfrom' => 'Monstrar nove modificationes a partir de $1',
'rcshowhideminor' => '$1 modificationes minor',
'rcshowhidebots' => '$1 bots',
'rcshowhideliu' => '$1 usatores registrate',
'rcshowhideanons' => '$1 usatores anonyme',
'rcshowhidepatr' => '$1 modificationes patruliate',
'rcshowhidemine' => '$1 mi modificationes',
'rclinks' => 'Monstrar le $1 ultime modificationes in le $2 ultime dies<br />$3',
'diff' => 'diff',
'hist' => 'hist',
'hide' => 'Celar',
'show' => 'Revelar',
'minoreditletter' => 'm',
'newpageletter' => 'N',
'boteditletter' => 'b',
'number_of_watching_users_pageview' => '[observate per $1 {{PLURAL:$1|usator|usatores}}]',
'rc_categories' => 'Limite a categorias (separar con "|")',
'rc_categories_any' => 'Qualcunque',
'rc-change-size-new' => '$1 {{PLURAL:$1|byte|bytes}} post cambio',
'newsectionsummary' => '/* $1 */ nove section',
'rc-enhanced-expand' => 'Revelar detalios (require JavaScript)',
'rc-enhanced-hide' => 'Celar detalios',
'rc-old-title' => 'originalmente create como "$1"',

# Recent changes linked
'recentchangeslinked' => 'Modificationes ligate',
'recentchangeslinked-feed' => 'Modificationes ligate',
'recentchangeslinked-toolbox' => 'Modificationes ligate',
'recentchangeslinked-title' => 'Modificationes associate a "$1"',
'recentchangeslinked-noresult' => 'Nulle modificationes in paginas ligate durante iste periodo.',
'recentchangeslinked-summary' => "Isto es un lista de modificationes facite recentemente in paginas ligate ab un pagina specific (o in membros de un categoria specific).
Le paginas presente in [[Special:Watchlist|tu observatorio]] appare in litteras '''grasse'''.",
'recentchangeslinked-page' => 'Nomine del pagina:',
'recentchangeslinked-to' => 'Monstrar modificationes in paginas con ligamines al pagina specificate',

# Upload
'upload' => 'Incargar file',
'uploadbtn' => 'Incargar file',
'reuploaddesc' => 'Cancellar e retornar al formulario de incargamento',
'upload-tryagain' => 'Submitter description modificate del file',
'uploadnologin' => 'Tu non ha aperite un session',
'uploadnologintext' => 'Tu debe [[Special:UserLogin|aperir un session]] pro poter incargar files.',
'upload_directory_missing' => 'Le directorio de incargamento ($1) manca, e le servitor de web non poteva crear lo.',
'upload_directory_read_only' => 'Le servitor web non ha le permission de scriber in le directorio de incargamento ($1).',
'uploaderror' => 'Error de incargamento',
'upload-recreate-warning' => "'''Attention: Un file con iste nomine ha ja essite delite o renominate.'''

Le registro de deletiones e renominationes pro iste pagina es fornite hic pro major commoditate:",
'uploadtext' => "Con le formulario sequente tu pote incargar un nove file in le wiki.
Pro vider o cercar files ja incargate, visita le [[Special:FileList|lista de files incargate]]. In ultra, le (re)incargamentos es registrate in le [[Special:Log/upload|registro de incargamentos]], le deletiones in le [[Special:Log/delete|registro de deletiones]].

Pro includer un file in un pagina, usa un ligamine in un del sequente formas:
* '''<code><nowiki>[[</nowiki>{{ns:file}}<nowiki>:File.jpg]]</nowiki></code>''' pro usar le version complete del file
* '''<code><nowiki>[[</nowiki>{{ns:file}}<nowiki>:File.png|200px|thumb|left|texto alternative]]</nowiki></code>''' pro usar un rendition a latitude de 200 pixel in un quadro in le margine sinistre con 'texto alternative' qua description
* '''<code><nowiki>[[</nowiki>{{ns:media}}<nowiki>:File.ogg]]</nowiki></code>''' pro facer un ligamine directe al file sin monstrar le file",
'upload-permitted' => 'Typos de file permittite: $1.',
'upload-preferred' => 'Typos de file preferite: $1.',
'upload-prohibited' => 'Typos de file prohibite: $1.',
'uploadlog' => 'registro de incargamentos',
'uploadlogpage' => 'Registro de incargamentos',
'uploadlogpagetext' => 'Infra es un lista de files recentemente incargate.
Vide le [[Special:NewFiles|galeria de nove files]] pro un presentation plus visual.',
'filename' => 'Nomine del file',
'filedesc' => 'Summario',
'fileuploadsummary' => 'Summario:',
'filereuploadsummary' => 'Modificationes al file:',
'filestatus' => 'Stato de copyright:',
'filesource' => 'Origine:',
'uploadedfiles' => 'Files incargate',
'ignorewarning' => 'Ignorar le advertimento e salveguardar totevia le file',
'ignorewarnings' => 'Ignorar omne advertimentos',
'minlength1' => 'Le nomines de file debe haber al minus un littera.',
'illegalfilename' => 'Le nomine de file "$1" contine characteres que non es permittite in le titulos de paginas.
Per favor renomina le file e tenta re-incargar lo.',
'filename-toolong' => 'Nomines de file non pote esser plus longe de 240 bytes.',
'badfilename' => 'Le nomine del imagine esseva cambiate a "$1".',
'filetype-mime-mismatch' => 'Le extension del nomine del file ".$1" non corresponde a su typo MIME detegite ($2).',
'filetype-badmime' => 'Non es permittite incargar files del typo MIME "$1".',
'filetype-bad-ie-mime' => 'Non pote incargar iste file proque Internet Explorer lo detegerea como "$1", le qual es un typo de file prohibite e potentialmente periculose.',
'filetype-unwanted-type' => "'''\".\$1\"''' es un typo de file non desirate.
Le {{PLURAL:\$3|typo|typos}} de file preferite es \$2.",
'filetype-banned-type' => '\'\'\'".$1"\'\'\' non es {{PLURAL:$4|un typo|typos}} de file permittite.
Le {{PLURAL:$3|typo|typos}} de file permittite es $2.',
'filetype-missing' => 'Le nomine del file non ha un extension (como ".jpg").',
'empty-file' => 'Le file submittite es vacue',
'file-too-large' => 'Le file submittite es troppo grande',
'filename-tooshort' => 'Le nomine del file es troppo curte',
'filetype-banned' => 'Iste typo de file es prohibite',
'verification-error' => 'Iste file non passava le verification de files',
'hookaborted' => 'Le modification que tu ha tentate facer ha essite abortate per un extension.',
'illegal-filename' => 'Le nomine del file non es permittite.',
'overwrite' => 'Superscriber un file existente non es permittite.',
'unknown-error' => 'Un error incognite ha occurrite.',
'tmp-create-error' => 'Non poteva crear file temporari.',
'tmp-write-error' => 'Error durante le scriptura in le file temporari.',
'large-file' => 'Es recommendate que le files non sia plus grande de $1;
iste file occupa $2.',
'largefileserver' => 'Le grandor de iste file excede le limite configurate in le servitor.',
'emptyfile' => 'Le file que tu incargava pare esser vacue.
Isto pote esser debite a un error in le nomine del file.
Per favor verifica que tu realmente vole incargar iste file.',
'windows-nonascii-filename' => 'Iste wiki non supporta nomines de file con characteres special.',
'fileexists' => 'Un file con iste nomine existe ja.
Per favor verifica <strong>[[:$1]]</strong> si tu non es secur de voler cambiar lo.
[[$1|thumb]]',
'filepageexists' => 'Le pagina de description correspondente a iste file ha ja essite create a <strong>[[:$1]]</strong>, ma nulle file con iste nomine existe al momento.
Le summario que tu entra non apparera in le pagina de description.
Si tu vole que illo appare, tu debe inserer lo manualmente.
[[$1|thumb]]',
'fileexists-extension' => 'Un file con un nomine similar existe ja: [[$2|thumb]]
* Nomine del file a incargar: <strong>[[:$1]]</strong>
* Nomine del file existente: <strong>[[:$2]]</strong>
Per favor selige un altere nomine.',
'fileexists-thumbnail-yes' => "Iste file pare esser un imagine a grandor reducite ''(miniatura)''. [[$1|thumb]]
Per favor verifica le file <strong>[[:$1]]</strong>.
Si le file verificate es le mesme imagine a grandor original, non es necessari incargar un miniatura additional.",
'file-thumbnail-no' => "Le nomine del file comencia con <strong>$1</strong>.
Illo pare esser un imagine a grandor reducite ''(miniatura)''.
Si tu possede iste imagine in plen resolution, incarga lo, alteremente cambia le nomine del file per favor.",
'fileexists-forbidden' => 'Un file con iste nomine existe ja, e non pote esser superscribite.
Si tu vole ancora incargar iste file, per favor retorna e usa un nove nomine. [[File:$1|thumb|center|$1]]',
'fileexists-shared-forbidden' => 'Un file con iste nomine existe ja in le repositorio de files commun.
Si tu vole totevia incargar iste file, per favor retorna e usa un nove nomine. [[File:$1|thumb|center|$1]]',
'file-exists-duplicate' => 'Iste file es un duplicato del sequente {{PLURAL:$1|file|files}}:',
'file-deleted-duplicate' => 'Un file identic a iste file ([[:$1]]) esseva ja delite anteriormente. Tu deberea verificar le registro de deletiones concernente iste file ante de re-incargar lo.',
'uploadwarning' => 'Advertimento de incargamento',
'uploadwarning-text' => 'Per favor modifica le description del file ci infra e reproba.',
'savefile' => 'Salveguardar file',
'uploadedimage' => 'incargava "[[$1]]"',
'overwroteimage' => 'incargava un nove version de "[[$1]]"',
'uploaddisabled' => 'Incargamento de files disactivate',
'copyuploaddisabled' => 'Incargamento per URL disactivate.',
'uploadfromurl-queued' => 'Tu incargamento ha essite mittite in cauda.',
'uploaddisabledtext' => 'Le incargamento de files es disactivate.',
'php-uploaddisabledtext' => 'Le incargamento de files PHP es disactivate. Per favor verifica le configuration file_uploads.',
'uploadscripted' => 'Iste file contine codice de HTML o de script que pote esser interpretate erroneemente per un navigator del web.',
'uploadvirus' => 'Le file contine un virus! Detalios: $1',
'uploadjava' => 'Iste file es un archivo ZIP que contine un file .class de Java.
Non es permittite incargar files Java, proque istes pote contornar le restrictiones de securitate.',
'upload-source' => 'File de origine',
'sourcefilename' => 'Nomine del file de origine:',
'sourceurl' => 'URL de origine:',
'destfilename' => 'Nomine del file de destination:',
'upload-maxfilesize' => 'Grandor maximal del files: $1',
'upload-description' => 'Description del file',
'upload-options' => 'Optiones de incargamento',
'watchthisupload' => 'Observar iste file',
'filewasdeleted' => 'Un file con iste nomine ha anteriormente essite incargate e postea delite.
Tu debe verificar le $1 ante de re-incargar lo de novo.',
'filename-bad-prefix' => "Le nomine del file que tu es super le puncto de incargar comencia con '''\"\$1\"''', le qual es un nomine non descriptive, typicamente assignate automaticamente per le cameras digital.
Per favor selige un nomine plus descriptive pro tu file.",
'filename-prefix-blacklist' => ' #<!-- non modificar de alcun modo iste linea --> <pre>
# Le syntaxe es como seque:
#   * Toto a partir de un character "#" usque al fin del linea es un commento
#   * Cata linea non vacue es un prefixo pro tal nomines de file como automaticamente assignate per cameras digital
CIMG # Casio
DSC_ # Nikon
DSCF # Fuji
DSCN # Nikon
DUW # alcun telephonos mobile
IMG # generic
JD # Jenoptik
MGP # Pentax
PICT # misc.
 #</pre> <!-- non modificar de alcun modo iste linea -->',
'upload-success-subj' => 'Incargamento succedite',
'upload-success-msg' => 'Le incargamento de [$2] ha succedite. Illo es disponibile hic: [[:{{ns:file}}:$1]]',
'upload-failure-subj' => 'Problema de incargamento',
'upload-failure-msg' => 'Il ha occurrite un problema con tu incargamento ab [$2]:

$1',
'upload-warning-subj' => 'Advertimento de incargamento',
'upload-warning-msg' => 'Occurreva un problema con le incargamento de [$2]. Tu pote retornar al [[Special:Upload/stash/$1|formulario de incargamento]] pro corriger iste problema.',

'upload-proto-error' => 'Protocollo incorrecte',
'upload-proto-error-text' => 'Le incargamento remote require que le adresses URL comencia con <code>http://</code> o <code>ftp://</code>.',
'upload-file-error' => 'Error interne',
'upload-file-error-text' => 'Un error interne occurreva quando se tentava crear un file temporari in le servitor.
Per favor contacta un [[Special:ListUsers/sysop|administrator]].',
'upload-misc-error' => 'Error incognite de incargamento',
'upload-misc-error-text' => 'Un error non cognoscite occurreva durante le incargamento.
Per favor verifica que le adresse URL sia valide e accessibile, e reproba.
Si le problema persiste, contacta un [[Special:ListUsers/sysop|administrator]].',
'upload-too-many-redirects' => 'Le URL contineva troppo de redirectiones',
'upload-unknown-size' => 'Dimension incognite',
'upload-http-error' => 'Un error HTTP occurreva: $1',
'upload-copy-upload-invalid-domain' => 'Le incargamento de copias non es disponibile ab iste dominio.',

# File backend
'backend-fail-stream' => 'Non poteva transmitter le file $1.',
'backend-fail-backup' => 'Non poteva facer un copia de reserva del file $1.',
'backend-fail-notexists' => 'Le file $1 non existe.',
'backend-fail-hashes' => 'Non poteva obtener le "hashes" (summas de controlo) del files pro comparation.',
'backend-fail-notsame' => 'Un file non identic jam existe a $1.',
'backend-fail-invalidpath' => '$1 non es un cammino valide de immagazinage.',
'backend-fail-delete' => 'Impossibile deler file $1.',
'backend-fail-alreadyexists' => 'Le file $1 jam existe.',
'backend-fail-store' => 'Non poteva immagazinar le file $1 a $2',
'backend-fail-copy' => 'Impossibile copiar file $1 a $2',
'backend-fail-move' => 'Impossibile displaciar file $1 a $2',
'backend-fail-opentemp' => 'Non poteva aperir file temporari.',
'backend-fail-writetemp' => 'Non poteva scriber in file temporari.',
'backend-fail-closetemp' => 'Non poteva clauder file temporari.',
'backend-fail-read' => 'Non poteva leger le file $1',
'backend-fail-create' => 'Non poteva crear le file $1.',
'backend-fail-maxsize' => 'Impossibile scriber le file $1 perque illo es plus grande que {{PLURAL:$2|un byte|$2 bytes}}.',
'backend-fail-readonly' => 'Le systema de immagazinage "$1" es actualmente in lectura sol. Le sequente motivo esseva specificate: "$2"',
'backend-fail-synced' => 'Le file "$1" es in un stato inconsistente inter le systemas interne de immagazinage',
'backend-fail-connect' => 'Impossibile connecter al systema de immagazinage "$1".',
'backend-fail-internal' => 'Un error incognite occurreva in le systema de immagazinage "$1".',
'backend-fail-contenttype' => 'Non poteva determinar le typo de contento del file a immagazinar in "$1".',
'backend-fail-batchsize' => 'Le systema de immagazinage ha recipite un lot de $1 {{PLURAL:$1|operation|operationes}} de file; le limite es $2 {{PLURAL:$2|operation|operationes}}.',
'backend-fail-usable' => 'Non poteva leger o scriber le file "$1" a causa de permissiones insufficiente o directorios/contentores mancante.',

# File journal errors
'filejournal-fail-dbconnect' => 'Non poteva connecter al base de datos de jornal pro le systema de immagazinage "$1".',
'filejournal-fail-dbquery' => 'Non poteva actualisar le base de datos de jornal pro le systema de immagazinage "$1".',

# Lock manager
'lockmanager-notlocked' => 'Impossibile disblocar "$1"; illo non es blocate.',
'lockmanager-fail-closelock' => 'Non poteva clauder le file de serratura pro "$1".',
'lockmanager-fail-deletelock' => 'Non poteva deler le file de serratura pro "$1".',
'lockmanager-fail-acquirelock' => 'Non poteva acquirer un serratura pro "$1".',
'lockmanager-fail-openlock' => 'Non poteva aperir le file de serratura pro "$1".',
'lockmanager-fail-releaselock' => 'Non poteva liberar le file de serratura pro "$1".',
'lockmanager-fail-db-bucket' => 'Non poteva contactar sufficiente bases de datos de serratura in situla $1.',
'lockmanager-fail-db-release' => 'Non poteva liberar le serraturas sur le base de datos $1.',
'lockmanager-fail-svr-acquire' => 'Non poteva acquirer le serraturas sur le servitor $1.',
'lockmanager-fail-svr-release' => 'Non poteva liberar le serraturas sur le servitor $1.',

# ZipDirectoryReader
'zip-file-open-error' => 'Un error esseva incontrate durante le apertura del file pro verification de ZIP.',
'zip-wrong-format' => 'Le file specificate non es un file ZIP.',
'zip-bad' => 'Iste file es un archivo ZIP defectuose o alteremente illegibile.
Un verification correcte de su securitate es impossibile.',
'zip-unsupported' => 'Iste file es un archivo ZIP que usa functionalitate de ZIP non supportate per MediaWiki.
Un verification correcte de su securitate es impossibile.',

# Special:UploadStash
'uploadstash' => 'Pila de files incargate',
'uploadstash-summary' => 'Iste pagina forni accesso al files que ha essite incargate (o que es in le processo de incargamento) ma non es ancora publicate in le wiki. Iste files es solmente visibile pro le usator qui los incargava.',
'uploadstash-clear' => 'Rader le pila de files incargate',
'uploadstash-nofiles' => 'Il non ha files in le pila.',
'uploadstash-badtoken' => 'Le execution de iste action non succedeva, forsan proque le datos del session expirava. Tenta lo de novo.',
'uploadstash-errclear' => 'Le radimento del files non succedeva.',
'uploadstash-refresh' => 'Refrescar le lista de files',
'invalid-chunk-offset' => 'Position de segmento invalide',

# img_auth script messages
'img-auth-accessdenied' => 'Accesso refusate',
'img-auth-nopathinfo' => 'PATH_INFO manca.
Le servitor non ha essite configurate pro passar iste information.
Illo pote esser basate super CGI e non pote supportar img_auth.
Vide https://www.mediawiki.org/wiki/Manual:Image_Authorization.',
'img-auth-notindir' => 'Le cammino requestate non es in le directorio de incargamentos configurate.',
'img-auth-badtitle' => 'Impossibile construer un titulo valide ex "$1".',
'img-auth-nologinnWL' => 'Tu non ha aperite un session e "$1" non es in le lista blanc.',
'img-auth-nofile' => 'File "$1" non existe.',
'img-auth-isdir' => 'Tu tenta acceder a un directorio "$1".
Solmente le accesso a files es permittite.',
'img-auth-streaming' => 'Fluxo de "$1" comenciate.',
'img-auth-public' => 'Le function de img_auth.php es de reproducer files ex un wiki private.
Iste wiki es configurate como un wiki public.
Pro securitate optimal, img_auth.php es disactivate.',
'img-auth-noread' => 'Le usator non ha accesso pro leger "$1".',
'img-auth-bad-query-string' => 'Le URL include un consulta con formato invalide.',

# HTTP errors
'http-invalid-url' => 'URL invalide: $1',
'http-invalid-scheme' => 'URLs con le schema "$1" non es supportate',
'http-request-error' => 'Error incognite durante le invio del requesta.',
'http-read-error' => 'Error de lectura HTTP.',
'http-timed-out' => 'Le requesta HTTP ha expirate.',
'http-curl-error' => 'Error al obtener datos del URL: $1',
'http-host-unreachable' => 'Non poteva acceder al URL',
'http-bad-status' => 'Un problema occurreva durante le requesta HTTP: $1 $2',

# Some likely curl errors. More could be added from <http://curl.haxx.se/libcurl/c/libcurl-errors.html>
'upload-curl-error6' => 'Non poteva acceder al URL',
'upload-curl-error6-text' => 'Le adresse URL fornite es inaccessibile.
Per favor reverifica que le adresse URL sia correcte e que le sito sia in operation.',
'upload-curl-error28' => 'Le incargamento se prolongava troppo',
'upload-curl-error28-text' => 'Le sito non respondeva intra le limite de tempore.
Per favor controla que le sito sia in operation, attende un poco e reprova.
Pote esser preferite reprovar quando le sito es minus occupate.',

'license' => 'Licentia:',
'license-header' => 'Licentia',
'nolicense' => 'Nulle licentia seligite',
'license-nopreview' => '(Previsualisation non disponibile)',
'upload_source_url' => ' (un adresse URL valide e publicamente accessibile)',
'upload_source_file' => ' (un file in tu computator)',

# Special:ListFiles
'listfiles-summary' => 'Iste pagina special monstra tote le files incargate.
Si un filtro per usator es active, es monstrate solmente le files del quales le usator in question ha incargate le version le plus recente.',
'listfiles_search_for' => 'Cercar un nomine de media:',
'imgfile' => 'file',
'listfiles' => 'Lista de files',
'listfiles_thumb' => 'Miniatura',
'listfiles_date' => 'Data',
'listfiles_name' => 'Nomine',
'listfiles_user' => 'Usator',
'listfiles_size' => 'Grandor',
'listfiles_description' => 'Description',
'listfiles_count' => 'Versiones',

# File description page
'file-anchor-link' => 'File',
'filehist' => 'Historia del file',
'filehist-help' => 'Clicca super un data/hora pro vider le file como appareva a ille tempore.',
'filehist-deleteall' => 'deler totes',
'filehist-deleteone' => 'deler',
'filehist-revert' => 'reverter',
'filehist-current' => 'actual',
'filehist-datetime' => 'Data/Hora',
'filehist-thumb' => 'Miniatura',
'filehist-thumbtext' => 'Miniatura pro le version de $1',
'filehist-nothumb' => 'Nulle miniatura',
'filehist-user' => 'Usator',
'filehist-dimensions' => 'Dimensiones',
'filehist-filesize' => 'Dimension del file',
'filehist-comment' => 'Commento',
'filehist-missing' => 'File mancante',
'imagelinks' => 'Uso de iste file',
'linkstoimage' => 'Le sequente {{PLURAL:$1|pagina ha un ligamine|$1 paginas ha ligamines}} verso iste file:',
'linkstoimage-more' => 'Plus de $1 {{PLURAL:$1|pagina ha un ligamine|paginas ha ligamines}} verso iste file.
Le sequente lista monstra le {{PLURAL:$1|prime pagina|prime $1 paginas}} que puncta a iste file specific.
Un [[Special:WhatLinksHere/$2|lista complete]] es disponibile.',
'nolinkstoimage' => 'Nulle pagina usa iste file.',
'morelinkstoimage' => 'Vider [[Special:WhatLinksHere/$1|plus ligamines]] a iste file.',
'linkstoimage-redirect' => '$1 (redirection de file) $2',
'duplicatesoffile' => 'Le sequente {{PLURAL:$1|file es un duplicato|$1 files es duplicatos}} de iste file ([[Special:FileDuplicateSearch/$2|plus detalios]]):',
'sharedupload' => 'Iste file proveni de $1 e pote esser usate per altere projectos.',
'sharedupload-desc-there' => 'Iste file proveni de $1 e pote esser usate per altere projectos.
Vide le [$2 pagina de description del file] pro ulterior informationes.',
'sharedupload-desc-here' => 'Iste file proveni de $1 e pote esser usate per altere projectos.
Le description de su [$2 pagina de description] ibi es monstrate in basso.',
'sharedupload-desc-edit' => 'Iste file proveni de $1 e pote esser usate per altere projectos.
Tu vole forsan modificar le description in le [$2 pagina de description del file] in ille sito.',
'sharedupload-desc-create' => 'Iste file proveni de $1 e pote esser usate per altere projectos.
Tu vole forsan modificar le description in le [$2 pagina de description del file] in ille sito.',
'filepage-nofile' => 'Nulle file con iste nomine existe.',
'filepage-nofile-link' => 'Nulle file con iste nomine existe, ma tu pote [$1 incargar lo].',
'uploadnewversion-linktext' => 'Incargar un nove version de iste file',
'shared-repo-from' => 'ab $1',
'shared-repo' => 'un repositorio partite',
'upload-disallowed-here' => 'Tu non pote superscriber iste file.',

# File reversion
'filerevert' => 'Reverter $1',
'filerevert-legend' => 'Reverter file',
'filerevert-intro' => "Tu reverte '''[[Media:$1|$1]]''' al [$4 version del $3 a $2].",
'filerevert-comment' => 'Motivo:',
'filerevert-defaultcomment' => 'Revertite al version del $2 a $1',
'filerevert-submit' => 'Reverter',
'filerevert-success' => "'''[[Media:$1|$1]]''' ha essite revertite al [$4 version del $3 a $2].",
'filerevert-badversion' => 'Non existe un version local anterior de iste file con le data e hora providite.',

# File deletion
'filedelete' => 'Deler $1',
'filedelete-legend' => 'Deler file',
'filedelete-intro' => "Tu es super le puncto de deler le file '''[[Media:$1|$1]]''' con tote su historia.",
'filedelete-intro-old' => "Tu va deler le version de '''[[Media:$1|$1]]''' del [$4 $3 a $2].",
'filedelete-comment' => 'Motivo:',
'filedelete-submit' => 'Deler',
'filedelete-success' => "'''$1''' ha essite delite.",
'filedelete-success-old' => "Le version de '''[[Media:$1|$1]]''' del $3 a $2 ha essite delite.",
'filedelete-nofile' => "'''$1''' non existe.",
'filedelete-nofile-old' => "Non existe un version archivate de '''$1''' con le attributos specificate.",
'filedelete-otherreason' => 'Motivo altere/additional:',
'filedelete-reason-otherlist' => 'Altere motivo',
'filedelete-reason-dropdown' => '*Motivos habitual pro deletion
** Violation de copyright
** File duplicate',
'filedelete-edit-reasonlist' => 'Modificar motivos pro deletion',
'filedelete-maintenance' => 'Deletion e restauration de files temporarimente disactivate durante mantenentia.',
'filedelete-maintenance-title' => 'Non pote deler file',

# MIME search
'mimesearch' => 'Recerca de typo MIME',
'mimesearch-summary' => 'Iste pagina permitte filtrar le files a base de lor typos MIME.
Syntaxe: typo/subtypo, p.ex. <code>image/jpeg</code>.',
'mimetype' => 'Typo MIME:',
'download' => 'discargar',

# Unwatched pages
'unwatchedpages' => 'Paginas non observate',

# List redirects
'listredirects' => 'Listar redirectiones',

# Unused templates
'unusedtemplates' => 'Patronos non usate',
'unusedtemplatestext' => 'Iste pagina es un lista de tote le paginas in le spatio de nomines "{{ns:template}}" que non es includite in un altere pagina.
Memora verificar que non existe altere ligamines al patronos ante que tu los dele.',
'unusedtemplateswlh' => 'altere ligamines',

# Random page
'randompage' => 'Pagina aleatori',
'randompage-nopages' => 'Il non ha paginas in le sequente {{PLURAL:$2|spatio|spatios}} de nomines: $1.',

# Random redirect
'randomredirect' => 'Redirection aleatori',
'randomredirect-nopages' => 'Il non ha redirectiones in le spatio de nomines "$1".',

# Statistics
'statistics' => 'Statisticas',
'statistics-header-pages' => 'Statisticas de paginas',
'statistics-header-edits' => 'Statisticas de modificationes',
'statistics-header-views' => 'Statisticas de visitas',
'statistics-header-users' => 'Statisticas de usatores',
'statistics-header-hooks' => 'Altere statisticas',
'statistics-articles' => 'Paginas de contento',
'statistics-pages' => 'Paginas',
'statistics-pages-desc' => 'Tote le paginas del wiki, includente paginas de discussion, redirectiones, etc.',
'statistics-files' => 'Files incargate',
'statistics-edits' => 'Modificationes de paginas depost le installation de {{SITENAME}}',
'statistics-edits-average' => 'Media del modificationes per pagina',
'statistics-views-total' => 'Visitas total',
'statistics-views-total-desc' => 'Le visitas a paginas inexistente e special non es includite',
'statistics-views-peredit' => 'Visitas per modification',
'statistics-users' => '[[Special:ListUsers|Usatores]] registrate',
'statistics-users-active' => 'Usatores active',
'statistics-users-active-desc' => 'Usatores qui ha facite un action durante le {{PLURAL:$1|die|$1 dies}} passate',
'statistics-mostpopular' => 'Le paginas plus visitate',

'disambiguations' => 'Paginas con ligamines a paginas de disambiguation',
'disambiguationspage' => 'Template:Disambiguation',
'disambiguations-text' => "Le sequente paginas contine al minus un ligamine a un '''pagina de disambiguation'''.
Istes debe forsan ligar directemente al articulo sur le thema in question.<br />
Un pagina se tracta como pagina de disambiguation si illo usa un patrono que es ligate ab [[MediaWiki:Disambiguationspage]].",

'doubleredirects' => 'Redirectiones duple',
'doubleredirectstext' => 'Iste pagina lista paginas de redirection verso altere paginas de redirection.
Cata linea contine ligamines al prime e al secunde redirection, con le destination del secunde redirection. Iste es normalmente le "ver" pagina de destination, al qual le prime redirection tamben deberea punctar.
Le entratas <del>cancellate</del> ha essite resolvite.',
'double-redirect-fixed-move' => '[[$1]] ha essite renominate, illo es ora un redirection verso [[$2]]',
'double-redirect-fixed-maintenance' => 'Corrige redirection duple de [[$1]] a [[$2]].',
'double-redirect-fixer' => 'Corrector de redirectiones',

'brokenredirects' => 'Redirectiones rupte',
'brokenredirectstext' => 'Le sequente redirectiones mena a paginas non existente:',
'brokenredirects-edit' => 'modificar',
'brokenredirects-delete' => 'deler',

'withoutinterwiki' => 'Paginas sin ligamines de linguas',
'withoutinterwiki-summary' => 'Le sequente paginas non ha ligamines a versiones in altere linguas:',
'withoutinterwiki-legend' => 'Prefixo',
'withoutinterwiki-submit' => 'Revelar',

'fewestrevisions' => 'Paginas le minus modificate',

# Miscellaneous special pages
'nbytes' => '$1 {{PLURAL:$1|byte|bytes}}',
'ncategories' => '$1 {{PLURAL:$1|categoria|categorias}}',
'ninterwikis' => '$1 {{PLURAL:$1|interwiki|interwikis}}',
'nlinks' => '$1 {{PLURAL:$1|ligamine|ligamines}}',
'nmembers' => '$1 {{PLURAL:$1|membro|membros}}',
'nrevisions' => '$1 {{PLURAL:$1|version|versiones}}',
'nviews' => '$1 {{PLURAL:$1|visita|visitas}}',
'nimagelinks' => 'Usate in $1 {{PLURAL:$1|pagina|paginas}}',
'ntransclusions' => 'usate in $1 {{PLURAL:$1|pagina|paginas}}',
'specialpage-empty' => 'Il non ha resultatos pro iste reporto.',
'lonelypages' => 'Paginas orphanate',
'lonelypagestext' => 'Le sequente paginas non es ligate ni transcludite in altere paginas in {{SITENAME}}.',
'uncategorizedpages' => 'Paginas sin categoria',
'uncategorizedcategories' => 'Categorias sin categoria',
'uncategorizedimages' => 'Files non categorisate',
'uncategorizedtemplates' => 'Patronos sin categoria',
'unusedcategories' => 'Categorias non usate',
'unusedimages' => 'Imagines non usate',
'popularpages' => 'Paginas popular',
'wantedcategories' => 'Categorias plus demandate',
'wantedpages' => 'Paginas plus demandate',
'wantedpages-badtitle' => 'Titulo invalide in le gruppo de resultatos: $1',
'wantedfiles' => 'Files desirate',
'wantedfiletext-cat' => 'Le sequente files es usate ma non existe. Le files ab repositorios externe pote esser listate malgrado que illos existe. Omne tal false positivos essera <del>cancellate</del>. In addition, paginas que incorpora files que non existe es listate in [[:$1]].',
'wantedfiletext-nocat' => 'Le sequente files es usate ma non existe. Files ab repositorios externe pote esser listate malgrado que illos existe. Omne tal false positivos essera <del>cancellate</del>.',
'wantedtemplates' => 'Patronos desirate',
'mostlinked' => 'Paginas le plus ligate',
'mostlinkedcategories' => 'Categorias le plus ligate',
'mostlinkedtemplates' => 'Patronos le plus utilisate',
'mostcategories' => 'Paginas con le plus categorias',
'mostimages' => 'Files le plus utilisate',
'mostinterwikis' => 'Paginas con le plus interwikis',
'mostrevisions' => 'Paginas le plus modificate',
'prefixindex' => 'Tote le paginas con prefixo',
'prefixindex-namespace' => 'Tote le paginas con prefixo (spatio de nomines $1)',
'shortpages' => 'Paginas curte',
'longpages' => 'Paginas longe',
'deadendpages' => 'Paginas sin exito',
'deadendpagestext' => 'Le sequente paginas non ha ligamines a altere paginas in {{SITENAME}}.',
'protectedpages' => 'Paginas protegite',
'protectedpages-indef' => 'Solmente protectiones infinite',
'protectedpages-cascade' => 'Protectiones in cascada solmente',
'protectedpagestext' => 'Le sequente paginas es protegite de esser renominate o modificate',
'protectedpagesempty' => 'Nulle paginas es actualmente protegite con iste parametros.',
'protectedtitles' => 'Titulos protegite',
'protectedtitlestext' => 'Le sequente titulos es protegite de esser create',
'protectedtitlesempty' => 'Nulle titulos es actualmente protegite con iste parametros.',
'listusers' => 'Lista de usatores',
'listusers-editsonly' => 'Monstrar solmente usatores con modificationes',
'listusers-creationsort' => 'Ordinar per data de creation',
'usereditcount' => '$1 {{PLURAL:$1|modification|modificationes}}',
'usercreated' => '{{GENDER:$3|Create}} le $1 a $2',
'newpages' => 'Nove paginas',
'newpages-username' => 'Nomine de usator:',
'ancientpages' => 'Paginas le plus ancian',
'move' => 'Renominar',
'movethispage' => 'Renominar iste pagina',
'unusedimagestext' => 'Le sequente files existe ma non ha essite inserite in alcun pagina.
Per favor nota que altere sitos web pote ligar se a un file con un adresse URL directe. Ergo, tal files pote figurar hic malgrado esser in uso active.',
'unusedcategoriestext' => 'Le sequente paginas de categoria existe ben que nulle altere pagina o categoria los utilisa.',
'notargettitle' => 'Sin scopo',
'notargettext' => 'Tu non ha specificate un pagina o usator super le qual
executar iste function.',
'nopagetitle' => 'Le pagina de destination non existe',
'nopagetext' => 'Le pagina de destination que tu ha specificate non existe.',
'pager-newer-n' => '{{PLURAL:$1|1 plus recente|$1 plus recente}}',
'pager-older-n' => '{{PLURAL:$1|1 minus recente|$1 minus recente}}',
'suppress' => 'Supervisor',
'querypage-disabled' => 'Iste pagina special es disactivate pro evitar de supercargar le systema.',

# Book sources
'booksources' => 'Fontes de libros',
'booksources-search-legend' => 'Cercar fontes de libros',
'booksources-go' => 'Va',
'booksources-text' => 'Infra es un lista de ligamines a altere sitos que vende libros nove e usate, e pote etiam haber altere informationes super libros que tu cerca:',
'booksources-invalid-isbn' => 'Le ISBN date non pare esser valide; verifica que tu non ha facite errores copiante lo del fonte original.',

# Special:Log
'specialloguserlabel' => 'Executor:',
'speciallogtitlelabel' => 'Objectivo (titulo o usator):',
'log' => 'Registros',
'all-logs-page' => 'Tote le registros public',
'alllogstext' => 'Presentation combinate de tote le registros disponibile de {{SITENAME}}.
Pro restringer le presentation, selige un typo de registro, le nomine de usator (sensibile al majusculas e minusculas), o le pagina in question (etiam sensibile al majusculas e minusculas).',
'logempty' => 'Le registro contine nihil pro iste pagina.',
'log-title-wildcard' => 'Cercar titulos que comencia con iste texto',
'showhideselectedlogentries' => 'Monstrar/celar le entratas de registro seligite',

# Special:AllPages
'allpages' => 'Tote le paginas',
'alphaindexline' => '$1 a $2',
'nextpage' => 'Sequente pagina ($1)',
'prevpage' => 'Precedente pagina ($1)',
'allpagesfrom' => 'Monstrar le paginas a partir de:',
'allpagesto' => 'Monstrar le paginas usque a:',
'allarticles' => 'Tote le paginas',
'allinnamespace' => 'Tote le paginas (del spatio de nomines $1)',
'allnotinnamespace' => 'Tote le paginas (non in le spatio de nomines $1)',
'allpagesprev' => 'Previe',
'allpagesnext' => 'Sequente',
'allpagessubmit' => 'Va',
'allpagesprefix' => 'Monstrar le paginas con prefixo:',
'allpagesbadtitle' => 'Le titulo de pagina date es invalide o ha un prefixo interlingual o interwiki.
Es possibile que illo contine un o plus characteres que non pote esser usate in titulos.',
'allpages-bad-ns' => '{{SITENAME}} non ha un spatio e nomines "$1".',
'allpages-hide-redirects' => 'Celar redirectiones',

# SpecialCachedPage
'cachedspecial-viewing-cached-ttl' => 'Tu vide un version in cache de iste pagina, que pote haber usque a $1 de etate.',
'cachedspecial-viewing-cached-ts' => 'Tu vide un version in cache de iste pagina, que pote non esser completemente actual.',
'cachedspecial-refresh-now' => 'Vider le plus recente.',

# Special:Categories
'categories' => 'Categorias',
'categoriespagetext' => 'Le sequente {{PLURAL:$1|categoria|categorias}} contine paginas o multimedia.
Le [[Special:UnusedCategories|categorias non usate]] non se monstra hic.
Vide etiam le [[Special:WantedCategories|categorias desirate]].',
'categoriesfrom' => 'Monstrar categorias a partir de:',
'special-categories-sort-count' => 'ordinar per numero',
'special-categories-sort-abc' => 'ordinar alphabeticamente',

# Special:DeletedContributions
'deletedcontributions' => 'Contributiones delite de usatores',
'deletedcontributions-title' => 'Contributiones delite de usatores',
'sp-deletedcontributions-contribs' => 'contributiones',

# Special:LinkSearch
'linksearch' => 'Recerca de ligamines externe',
'linksearch-pat' => 'Patrono a cercar:',
'linksearch-ns' => 'Spatio de nomines:',
'linksearch-ok' => 'Cercar',
'linksearch-text' => 'Es possibile usar metacharacteres como in "*.wikipedia.org".
Necessita al minus un dominio de nivello superior, per exemplo "*.org".<br />
Protocollos supportate: <code>$1</code> (non include alcun de istes in tu recerca).',
'linksearch-line' => '$1 ligate ab $2',
'linksearch-error' => 'Le metacharacteres pote apparer solmente al initio del nomine de host.',

# Special:ListUsers
'listusersfrom' => 'Monstrar usatores a partir de:',
'listusers-submit' => 'Revelar',
'listusers-noresult' => 'Nulle usator trovate.',
'listusers-blocked' => '(blocate)',

# Special:ActiveUsers
'activeusers' => 'Lista de usatores active',
'activeusers-intro' => 'Isto es un lista de usatores que habeva alcun typo de activitate intra le ultime $1 {{PLURAL:$1|die|dies}}.',
'activeusers-count' => '$1 {{PLURAL:$1|modification|modificationes}} in le ultime {{PLURAL:$3|die|$3 dies}}',
'activeusers-from' => 'Presentar usatores a partir de:',
'activeusers-hidebots' => 'Celar bots',
'activeusers-hidesysops' => 'Celar administratores',
'activeusers-noresult' => 'Nulle usator trovate.',

# Special:Log/newusers
'newuserlogpage' => 'Registro de creation de usatores',
'newuserlogpagetext' => 'Isto es un registro de creation de usatores.',

# Special:ListGroupRights
'listgrouprights' => 'Derectos del gruppos de usatores',
'listgrouprights-summary' => 'Lo sequente es un lista de gruppos de usatores definite in iste wiki, con lor derectos de accesso associate.
Il pote haber [[{{MediaWiki:Listgrouprights-helppage}}|informationes additional]] super derectos individual.',
'listgrouprights-key' => '* <span class="listgrouprights-granted">Derecto concedite</span>
* <span class="listgrouprights-revoked">Derecto revocate</span>',
'listgrouprights-group' => 'Gruppo',
'listgrouprights-rights' => 'Derectos',
'listgrouprights-helppage' => 'Help:Derectos de gruppos',
'listgrouprights-members' => '(lista de membros)',
'listgrouprights-addgroup' => 'Pote adder {{PLURAL:$2|gruppo|gruppos}}: $1',
'listgrouprights-removegroup' => 'Pote remover {{PLURAL:$2|gruppo|gruppos}}: $1',
'listgrouprights-addgroup-all' => 'Pote adder tote le gruppos',
'listgrouprights-removegroup-all' => 'Pote eliminar tote le gruppos',
'listgrouprights-addgroup-self' => 'Pote adder {{PLURAL:$2|gruppo|gruppos}} al proprie conto: $1',
'listgrouprights-removegroup-self' => 'Pote remover {{PLURAL:$2|gruppo|gruppos}} del proprie conto: $1',
'listgrouprights-addgroup-self-all' => 'Pote adder tote le gruppos al proprie conto',
'listgrouprights-removegroup-self-all' => 'Pote remover tote le gruppos del proprie conto',

# E-mail user
'mailnologin' => 'Necun adresse de invio',
'mailnologintext' => 'Tu debe [[Special:UserLogin|aperir un session]]
e haber un adresse de e-mail valide in tu [[Special:Preferences|preferentias]]
pro inviar e-mail a altere usatores.',
'emailuser' => 'Inviar e-mail a iste usator',
'emailuser-title-target' => 'Inviar e-mail a iste {{GENDER:$1|usator|usatrice}}',
'emailuser-title-notarget' => 'Inviar e-mail al usator',
'emailpage' => 'Inviar e-mail al usator',
'emailpagetext' => 'Le formulario sequente es pro inviar un message de e-mail a iste {{GENDER:$1|usator}}.
Le adresse de e-mail que tu specificava in [[Special:Preferences|tu preferentias de usator]] apparera
como le adresse del expeditor, de sorta que le destinatario potera responder te directemente.',
'usermailererror' => 'Le objecto de e-mail retornava le error:',
'defemailsubject' => 'E-mail del usator "$1" de {{SITENAME}}',
'usermaildisabled' => 'E-mail a usatores disactivate',
'usermaildisabledtext' => 'Tu non pote inviar e-mail a altere usatores in iste wiki',
'noemailtitle' => 'Nulle adresse de e-mail',
'noemailtext' => 'Iste usator non ha specificate un adresse de e-mail valide.',
'nowikiemailtitle' => 'E-mail non permittite',
'nowikiemailtext' => 'Iste usator ha optate pro non reciper e-mail de altere usatores.',
'emailnotarget' => 'Nomine de usator inexistente o invalide pro le destinatario.',
'emailtarget' => 'Specifica le nomine de usator del destinatario.',
'emailusername' => 'Nomine de usator:',
'emailusernamesubmit' => 'Submitter',
'email-legend' => 'Inviar e-mail a un altere usator de {{SITENAME}}',
'emailfrom' => 'Expeditor:',
'emailto' => 'Destinatario:',
'emailsubject' => 'Subjecto:',
'emailmessage' => 'Message:',
'emailsend' => 'Inviar',
'emailccme' => 'Inviar me un copia de mi message.',
'emailccsubject' => 'Copia de tu message a $1: $2',
'emailsent' => 'E-mail inviate',
'emailsenttext' => 'Tu message de e-mail ha essite inviate.',
'emailuserfooter' => 'Iste e-mail esseva inviate per $1 a $2 con le function "Inviar e-mail al usator" a {{SITENAME}}.',

# User Messenger
'usermessage-summary' => 'Lassante un message de systema.',
'usermessage-editor' => 'Messagero del systema',

# Watchlist
'watchlist' => 'Mi observatorio',
'mywatchlist' => 'Mi observatorio',
'watchlistfor2' => 'De $1 $2',
'nowatchlist' => 'Tu non ha paginas sub observation.',
'watchlistanontext' => 'Tu debe $1 pro poter vider o modificar entratas in tu observatorio.',
'watchnologin' => 'Tu non ha aperite un session',
'watchnologintext' => 'Tu debe [[Special:UserLogin|aperir un session]] pro modificar tu observatorio.',
'addwatch' => 'Adder al observatorio',
'addedwatchtext' => "Le pagina \"[[:\$1]]\" ha essite addite a tu [[Special:Watchlist|observatorio]].
Le modificationes futur in iste pagina e in su pagina de discussion essera listate ibi,
e le pagina apparera '''in litteras grasse''' in le [[Special:RecentChanges|lista de modificationes recente]] pro
render lo plus facile de deteger.",
'removewatch' => 'Remover del observatorio',
'removedwatchtext' => 'Le pagina "[[:$1]]" ha essite removite de [[Special:Watchlist|tu observatorio]].',
'watch' => 'Observar',
'watchthispage' => 'Observar iste pagina',
'unwatch' => 'Disobservar',
'unwatchthispage' => 'Disobservar',
'notanarticle' => 'Non es un articulo',
'notvisiblerev' => 'Le version ha essite delite',
'watchnochange' => 'Nulle articulo que tu observa esseva modificate durante le periodo de tempore indicate.',
'watchlist-details' => '{{PLURAL:$1|$1 pagina|$1 paginas}} es in tu observatorio, sin contar le paginas de discussion.',
'wlheader-enotif' => '* Le notificationes via e-mail es active.',
'wlheader-showupdated' => "* Le paginas que ha essite modificate post tu ultime visita se monstra in litteras '''grasse'''",
'watchmethod-recent' => 'cerca paginas sub observation in modificationes recente',
'watchmethod-list' => 'cerca modificationes recente in paginas sub observation',
'watchlistcontains' => 'Tu observatorio contine $1 {{PLURAL:$1|pagina|paginas}}.',
'iteminvalidname' => "Problema con entrata '$1', nomine invalide...",
'wlnote' => "Ecce le ultime {{PLURAL:$1|modification|'''$1''' modificationes}} durante le ultime {{PLURAL:$2|hora|'''$2''' horas}}, a partir del $3 a $4.",
'wlshowlast' => 'Revelar ultime $1 horas $2 dies $3',
'watchlist-options' => 'Optiones del observatorio',

# Displayed when you click the "watch" button and it is in the process of watching
'watching' => 'Observation in curso...',
'unwatching' => 'Disobservation in curso...',
'watcherrortext' => 'Un error occurreva durante le modification del configuration de tu observatorio pro "$1".',

'enotif_mailer' => 'Systema de notification via e-mail de {{SITENAME}}',
'enotif_reset' => 'Marcar tote le paginas como visitate',
'enotif_newpagetext' => 'Isto es un nove pagina.',
'enotif_impersonal_salutation' => 'Usator de {{SITENAME}}',
'changed' => 'modificate',
'created' => 'create',
'enotif_subject' => 'Le pagina $PAGETITLE de {{SITENAME}} ha essite $CHANGEDORCREATED per $PAGEEDITOR',
'enotif_lastvisited' => 'Vide $1 pro tote le modificationes depost tu ultime visita.',
'enotif_lastdiff' => 'Vide $1 pro revider iste modification.',
'enotif_anon_editor' => 'usator anonyme $1',
'enotif_body' => 'Car $WATCHINGUSERNAME,


Le pagina de {{SITENAME}} titulate $PAGETITLE ha essite $CHANGEDORCREATED le $PAGEEDITDATE per $PAGEEDITOR. Vide $PAGETITLE_URL pro le version actual.

$NEWPAGE

Summario del redactor: $PAGESUMMARY $PAGEMINOREDIT

Pro contactar le redactor:
e-mail: $PAGEEDITOR_EMAIL
wiki: $PAGEEDITOR_WIKI

Si tu non visita iste pagina, tu non recipera altere notificationes in caso de modificationes ulterior.
Como alternativa tu pote reinitialisar le optiones de notification pro tote le paginas in tu observatorio.

             Le systema de notification de {{SITENAME}}, a tu servicio

-- 
Pro configurar le notification per e-mail, visita
{{canonicalurl:{{#special:Preferences}}}}

Pro configurar le observatorio, visita
{{canonicalurl:{{#special:EditWatchlist}}}}

Pro retirar le pagina de tu observatorio, visita
$UNWATCHURL

Feedback e ulterior assistentia:
{{canonicalurl:{{MediaWiki:Helppage}}}}',

# Delete
'deletepage' => 'Deler pagina',
'confirm' => 'Confirmar',
'excontent' => "contento esseva: '$1'",
'excontentauthor' => "contento esseva: '$1' (e le sol contributor esseva '[[Special:Contributions/$2|$2]]')",
'exbeforeblank' => "contento ante radimento esseva: '$1'",
'exblank' => 'pagina esseva vacue',
'delete-confirm' => 'Deler "$1"',
'delete-legend' => 'Deler',
'historywarning' => "'''Attention:''' Le pagina que tu vole deler ha un historia de circa $1 {{PLURAL:$1|version|versiones}}:",
'confirmdeletetext' => 'Tu va deler un pagina con tote su historia.
Per favor confirma que tu ha le intention de facer isto, que tu comprende le consequentias, e que tu face isto in accordo con [[{{MediaWiki:Policy-url}}|le politicas]].',
'actioncomplete' => 'Action complete',
'actionfailed' => 'Action fallite',
'deletedtext' => '"$1" ha essite delite.
Vide $2 pro un registro de deletiones recente.',
'dellogpage' => 'Registro de deletiones',
'dellogpagetext' => 'Infra es un lista del plus recente deletiones.
Tote le horas es in le fuso horari del servitor.',
'deletionlog' => 'registro de deletiones',
'reverted' => 'Revertite al version anterior',
'deletecomment' => 'Motivo:',
'deleteotherreason' => 'Motivo altere/additional:',
'deletereasonotherlist' => 'Altere motivo',
'deletereason-dropdown' => '*Motivos habitual pro deler paginas
** Requesta del autor
** Violation de copyright
** Vandalismo',
'delete-edit-reasonlist' => 'Modificar le motivos pro deletion',
'delete-toobig' => 'Iste pagina ha un grande historia de modificationes con plus de $1 {{PLURAL:$1|version|versiones}}.
Le deletion de tal paginas ha essite restringite pro impedir le disruption accidental de {{SITENAME}}.',
'delete-warning-toobig' => 'Iste pagina ha un grande historia de modificationes con plus de $1 {{PLURAL:$1|version|versiones}}.
Le deletion de illo pote disrumper le operationes del base de datos de {{SITENAME}};
procede con caution.',

# Rollback
'rollback' => 'Revocar modificationes',
'rollback_short' => 'Revocar',
'rollbacklink' => 'revocar',
'rollbacklinkcount' => 'revocar $1 {{PLURAL:$1|modification|modificationes}}',
'rollbacklinkcount-morethan' => 'revocar plus de $1 {{PLURAL:$1|modification|modificationes}}',
'rollbackfailed' => 'Revocation fallite',
'cantrollback' => 'Impossibile revocar le modification;
le ultime contributor es le sol autor de iste pagina.',
'alreadyrolled' => 'Non pote revocar le ultime modification de [[:$1]] per [[User:$2|$2]] ([[User talk:$2|discussion]]{{int:pipe-separator}}[[Special:Contributions/$2|{{int:contribslink}}]]);
un altere persona ha ja modificate o revocate le pagina.

Le ultime modification esseva facite per [[User:$3|$3]] ([[User talk:$3|discussion]]{{int:pipe-separator}}[[Special:Contributions/$3|{{int:contribslink}}]]).',
'editcomment' => "Le summario del modification esseva: \"''\$1''\".",
'revertpage' => 'Reverteva modificationes per [[Special:Contributions/$2|$2]] ([[User talk:$2|Discussion]]) al ultime version per [[User:$1|$1]]',
'revertpage-nouser' => 'Reverteva modificationes per (nomine de usator removite) al ultime version per [[User:$1|$1]]',
'rollback-success' => 'Revocava modificationes per $1;
retornava al version per $2.',

# Edit tokens
'sessionfailure-title' => 'Error de session',
'sessionfailure' => 'Il pare haber un problema con tu session de conto;
iste action ha essite cancellate como precaution contra le sequestramento de sessiones.
Per favor preme "retro" e recarga le pagina de ubi tu ha venite, postea reprova.',

# Protect
'protectlogpage' => 'Registro de protectiones',
'protectlogtext' => 'Ecce un lista de cambios de protection de paginas.
Vide le [[Special:ProtectedPages|lista de paginas protegite]] pro le lista de protectiones de paginas actualmente in operation.',
'protectedarticle' => 'protegeva "[[$1]]"',
'modifiedarticleprotection' => 'cambiava nivello de protection de "[[$1]]"',
'unprotectedarticle' => 'removeva le protection de "[[$1]]"',
'movedarticleprotection' => 'displaciava le configurationes de protection ab "[[$2]]" verso "[[$1]]"',
'protect-title' => 'Cambiar nivello de protection de "$1"',
'protect-title-notallowed' => 'Vider nivello de protection de "$1"',
'prot_1movedto2' => 'displaciava [[$1]] verso [[$2]]',
'protect-badnamespace-title' => 'Spatio de nomines non protegibile',
'protect-badnamespace-text' => 'Le paginas in iste spatio de nomines non pote esser protegite.',
'protect-legend' => 'Confirmar protection',
'protectcomment' => 'Motivo:',
'protectexpiry' => 'Expiration:',
'protect_expiry_invalid' => 'Le tempore de expiration es invalide.',
'protect_expiry_old' => 'Le tempore de expiration es in le passato.',
'protect-unchain-permissions' => 'Disblocar ulterior optiones de protection',
'protect-text' => "In basso tu pote vider e modificar le nivello de protection del pagina '''$1'''.",
'protect-locked-blocked' => "Tu non pote cambiar le nivellos de protection durante que tu es blocate.
Ecce le configurationes actual del pagina '''$1''':",
'protect-locked-dblock' => "Le nivellos de protection non pote esser cambiate proque es active un blocada del base de datos.
Ecce le configurationes actual del pagina '''$1''':",
'protect-locked-access' => "Tu conto non ha le permission de cambiar le nivellos de protection de paginas.
Ecce le configurationes actual del pagina '''$1''':",
'protect-cascadeon' => 'Iste pagina es actualmente protegite proque illo es includite in le sequente {{PLURAL:$1|pagina, le qual|paginas, le quales}} ha activate le protection in cascada.
Tu pote cambiar le nivello de protection de iste pagina, ma isto non cambiara le effecto del protection in cascada.',
'protect-default' => 'Permitter tote le usatores',
'protect-fallback' => 'Requirer permission de "$1"',
'protect-level-autoconfirmed' => 'Blocar usatores nove e non registrate',
'protect-level-sysop' => 'Administratores solmente',
'protect-summary-cascade' => 'in cascada',
'protect-expiring' => 'expira le $1 (UTC)',
'protect-expiring-local' => 'expira le $1',
'protect-expiry-indefinite' => 'infinite',
'protect-cascade' => 'Proteger le paginas includite in iste pagina (protection in cascada)',
'protect-cantedit' => 'Tu non pote cambiar le nivellos de protection de iste pagina proque tu non ha le permission de modificar lo.',
'protect-othertime' => 'Altere duration:',
'protect-othertime-op' => 'altere duration',
'protect-existing-expiry' => 'Expiration existente: le $2 a $3',
'protect-otherreason' => 'Motivo altere/additional:',
'protect-otherreason-op' => 'Altere motivo',
'protect-dropdown' => '*Motivos commun de protection
** Vandalismo excessive
** Spam excessive
** Guerra de modificationes contraproductive
** Pagina frequentemente visitate',
'protect-edit-reasonlist' => 'Modificar le motivos pro protection',
'protect-expiry-options' => '1 hora:1 hour,1 die:1 day,1 septimana:1 week,2 septimanas:2 weeks,1 mense:1 month,3 menses:3 months,6 menses:6 months,1 anno:1 year,infinite:infinite',
'restriction-type' => 'Permission:',
'restriction-level' => 'Nivello de restriction:',
'minimum-size' => 'Grandor minime',
'maximum-size' => 'Grandor maxime:',
'pagesize' => '(bytes)',

# Restrictions (nouns)
'restriction-edit' => 'Modificar',
'restriction-move' => 'Renominar',
'restriction-create' => 'Crear',
'restriction-upload' => 'Incargar',

# Restriction levels
'restriction-level-sysop' => 'completemente protegite',
'restriction-level-autoconfirmed' => 'semiprotegite',
'restriction-level-all' => 'omne nivello',

# Undelete
'undelete' => 'Vider paginas delite',
'undeletepage' => 'Vider e restaurar paginas delite',
'undeletepagetitle' => "'''Le lista sequente contine le versiones delite de [[:$1|$1]]'''.",
'viewdeletedpage' => 'Vider paginas delite',
'undeletepagetext' => 'Le {{PLURAL:$1|pagina|paginas}} sequente ha essite delite, sed es ancora in le archivo e pote esser restaurate.
Le archivo pote esser vacuate periodicamente.',
'undelete-fieldset-title' => 'Restaurar versiones',
'undeleteextrahelp' => "Pro restaurar le historia integre del pagina, lassa tote le quadratos dismarcate e clicca super '''''{{int:undeletebtn}}'''''.
Pro executar un restauration selective, marca le quadratos correspondente al versiones a restaurar, e clicca super '''''{{int:undeletebtn}}'''''.",
'undeleterevisions' => '$1 {{PLURAL:$1|version|versiones}} archivate',
'undeletehistory' => 'Si tu restaura un pagina, tote le versiones essera restaurate al historia.
Si un nove pagina con le mesme nomine ha essite create post le deletion, le versiones
restaurate apparera in le historia anterior.',
'undeleterevdel' => 'Le restauration non essera executate si illo resultara in le deletion partial del version le plus recente del pagina o del file.
In tal casos, tu debe dismarcar o revelar le version delite le plus recente.',
'undeletehistorynoadmin' => 'Iste pagina ha essite delite.
Le motivo del deletion se monstra in le summario infra, con le detalios del usatores que habeva modificate iste pagina ante le deletion.
Le texto complete de iste versiones delite es solmente disponibile al administratores.',
'undelete-revision' => 'Version delite de $1 (facite le $4 a $5) per $3:',
'undeleterevision-missing' => 'Version invalide o mancante.
Es possibile que le adresse URL es invalide, o que le version ha essite restaurate o eliminate del archivo.',
'undelete-nodiff' => 'Nulle version precedente trovate.',
'undeletebtn' => 'Restaurar',
'undeletelink' => 'vider/restaurar',
'undeleteviewlink' => 'vider',
'undeletereset' => 'Reinitialisar',
'undeleteinvert' => 'Inverter selection',
'undeletecomment' => 'Motivo:',
'undeletedrevisions' => '{{PLURAL:$1|1 version|$1 versiones}} restaurate',
'undeletedrevisions-files' => '{{PLURAL:$1|1 version|$1 versiones}} e {{PLURAL:$2|1 file|$2 files}} restaurate',
'undeletedfiles' => '$1 {{PLURAL:$1|archivo|archivos}} restaurate',
'cannotundelete' => 'Le restauration ha fallite:
$1',
'undeletedpage' => "'''$1 ha essite restaurate'''

Consulta le [[Special:Log/delete|registro de deletiones]] pro un lista de deletiones e restaurationes recente.",
'undelete-header' => 'Vide [[Special:Log/delete|le registro de deletiones]] pro un lista de paginas recentemente delite.',
'undelete-search-title' => 'Cercar in paginas delite',
'undelete-search-box' => 'Cercar paginas delite',
'undelete-search-prefix' => 'Monstrar paginas que comencia con:',
'undelete-search-submit' => 'Cercar',
'undelete-no-results' => 'Nulle paginas correspondente trovate in le archivo de deletiones.',
'undelete-filename-mismatch' => 'Non pote restaurar le version del file con data e hora $1: le nomine del file non corresponde',
'undelete-bad-store-key' => 'Non pote restaurar le version del file con data e hora $1: le file mancava ja ante le deletion.',
'undelete-cleanup-error' => 'Error durante le deletion del file de archivo non usate "$1".',
'undelete-missing-filearchive' => 'Impossibile restaurar le file con ID de archvo $1 proque illo non es presente in le base de datos.
Es possibile que illo ha ja essite restaurate.',
'undelete-error' => 'Error durante le restauration del pagina',
'undelete-error-short' => 'Error durante le restauration del file: $1',
'undelete-error-long' => 'Se incontrava errores durante le restauration del file:

$1',
'undelete-show-file-confirm' => 'Es tu secur de voler vider un version delite del file "<nowiki>$1</nowiki>" del $2 a $3?',
'undelete-show-file-submit' => 'Si',

# Namespace form on various pages
'namespace' => 'Spatio de nomine:',
'invert' => 'Inverter selection',
'tooltip-invert' => 'Marca iste quadrato pro celar le modificationes in paginas intra le spatio de nomines seligite (e le spatio de nomines associate, si tal option es seligite)',
'namespace_association' => 'Spatio de nomines associate',
'tooltip-namespace_association' => 'Marca iste quadrato pro includer anque le spatio de nomines de discussion o de subjecto associate al spatio de nomines seligite',
'blanknamespace' => '(Principal)',

# Contributions
'contributions' => 'Contributiones del usator',
'contributions-title' => 'Contributiones del usator $1',
'mycontris' => 'Mi contributiones',
'contribsub2' => 'Pro $1 ($2)',
'nocontribs' => 'Necun modification ha essite trovate secundo iste criterios.',
'uctop' => '(ultime)',
'month' => 'A partir del mense (e anterior):',
'year' => 'A partir del anno (e anterior):',

'sp-contributions-newbies' => 'Monstrar contributiones de nove contos solmente',
'sp-contributions-newbies-sub' => 'Pro nove contos',
'sp-contributions-newbies-title' => 'Contributiones de nove contos de usator',
'sp-contributions-blocklog' => 'Registro de blocadas',
'sp-contributions-deleted' => 'contributiones delite de usatores',
'sp-contributions-uploads' => 'incargamentos',
'sp-contributions-logs' => 'registros',
'sp-contributions-talk' => 'discussion',
'sp-contributions-userrights' => 'gestion de derectos de usator',
'sp-contributions-blocked-notice' => 'Iste usator es actualmente blocate. Le ultime entrata del registro de blocadas es reproducite ci infra pro information:',
'sp-contributions-blocked-notice-anon' => 'Iste adresse IP es actualmente blocate.
Le ultime entrata del registro de blocadas es reproducite hic infra pro information:',
'sp-contributions-search' => 'Cercar contributiones',
'sp-contributions-username' => 'Adresse IP o nomine de usator:',
'sp-contributions-toponly' => 'Monstrar solmente le versiones recente',
'sp-contributions-submit' => 'Cercar',

# What links here
'whatlinkshere' => 'Referentias a iste pagina',
'whatlinkshere-title' => 'Paginas con ligamines verso $1',
'whatlinkshere-page' => 'Pagina:',
'linkshere' => "Le sequente paginas contine ligamines a '''[[:$1]]''':",
'nolinkshere' => "Nulle pagina contine un ligamine verso '''[[:$1]]'''.",
'nolinkshere-ns' => "Nulle pagina liga a '''[[:$1]]''' in le spatio de nomines seligite.",
'isredirect' => 'pagina de redirection',
'istemplate' => 'transclusion',
'isimage' => 'ligamine al file',
'whatlinkshere-prev' => '{{PLURAL:$1|precedente|precedente $1}}',
'whatlinkshere-next' => '{{PLURAL:$1|sequente|sequente $1}}',
'whatlinkshere-links' => '← ligamines',
'whatlinkshere-hideredirs' => '$1 redirectiones',
'whatlinkshere-hidetrans' => '$1 transclusiones',
'whatlinkshere-hidelinks' => '$1 ligamines',
'whatlinkshere-hideimages' => '$1 ligamines verso imagines',
'whatlinkshere-filters' => 'Filtros',

# Block/unblock
'autoblockid' => 'Auto-blocada №$1',
'block' => 'Blocar usator',
'unblock' => 'Disblocar usator',
'blockip' => 'Blocar usator',
'blockip-title' => 'Blocar usator',
'blockip-legend' => 'Blocar usator',
'blockiptext' => 'Usa le formulario infra pro blocar le accesso de scriptura
a partir de un adresse IP specific.
Isto debe esser facite solmente pro impedir vandalismo, e de
accordo con le [[{{MediaWiki:Policy-url}}|politica de {{SITENAME}}]].
Scribe un motivo specific infra (per exemplo, citante paginas
specific que ha essite vandalisate).',
'ipadressorusername' => 'Adresse IP o nomine de usator:',
'ipbexpiry' => 'Expiration:',
'ipbreason' => 'Motivo:',
'ipbreasonotherlist' => 'Altere motivo',
'ipbreason-dropdown' => "*Motivos frequente pro blocar
** Insertion de informationes false
** Elimination de contento de paginas
** Ligamines ''spam'' verso sitos externe
** Insertion de nonsenso/absurditates in paginas
** Comportamento intimidatori/molestation
** Abuso de contos multiple
** Nomine de usator inacceptabile",
'ipb-hardblock' => 'Impedir le usatores authenticate de facer modificationes ab iste adresse IP',
'ipbcreateaccount' => 'Impedir creation de contos',
'ipbemailban' => 'Impedir que le usator invia e-mail',
'ipbenableautoblock' => 'Blocar automaticamente le adresse IP usate le plus recentemente per iste usator, e omne IPs successive desde le quales ille/-a tenta facer modificationes',
'ipbsubmit' => 'Blocar iste usator',
'ipbother' => 'Altere durata:',
'ipboptions' => '2 horas:2 hours,1 die:1 day,3 dies:3 days,1 septimana:1 week,2 septimanas:2 weeks,1 mense:1 month,3 menses:3 months,6 menses:6 months,1 anno:1 year,infinite:infinite',
'ipbotheroption' => 'altere',
'ipbotherreason' => 'Motivo altere/additional:',
'ipbhidename' => 'Celar le nomine del usator del modificationes e del listas',
'ipbwatchuser' => 'Observar le paginas de usator e de discussion de iste usator',
'ipb-disableusertalk' => 'Impedir iste usator de modificar su proprie pagina de discussion durante que ille es blocate',
'ipb-change-block' => 'Reblocar le usator con iste configurationes',
'ipb-confirm' => 'Confirmar blocada',
'badipaddress' => 'Adresse IP mal formate.',
'blockipsuccesssub' => 'Blocada succedite',
'blockipsuccesstext' => '[[Special:Contributions/$1|$1]] ha essite blocate.<br />
Vide le [[Special:BlockList|lista de blocadas]] pro revider le blocadas.',
'ipb-blockingself' => 'Tu sta super le puncto de blocar te mesme! Es tu secur de voler facer isto?',
'ipb-confirmhideuser' => 'Tu es super le puncto de blocar un usator con le option "celar usator" activate. Isto supprimera le nomine del usator in tote le listas e entratas de registro. Es tu secur de voler facer isto?',
'ipb-edit-dropdown' => 'Modificar le motivos pro blocar',
'ipb-unblock-addr' => 'Disblocar $1',
'ipb-unblock' => 'Disblocar un nomine de usator o un adresse IP',
'ipb-blocklist' => 'Vider blocadas existente',
'ipb-blocklist-contribs' => 'Contributiones de $1',
'unblockip' => 'Disblocar adresse IP',
'unblockiptext' => 'Usa le formulario infra pro restaurar le accesso de scriptura
a un adresse IP blocate previemente.',
'ipusubmit' => 'Cancellar iste blocada',
'unblocked' => '[[User:$1|$1]] ha essite disblocate',
'unblocked-range' => '$1 ha essite disblocate',
'unblocked-id' => 'Le blocada $1 ha essite eliminate',
'blocklist' => 'Usatores blocate',
'ipblocklist' => 'Usatores blocate',
'ipblocklist-legend' => 'Cercar un usator blocate',
'blocklist-userblocks' => 'Celar blocadas de conto',
'blocklist-tempblocks' => 'Celar blocadas temporari',
'blocklist-addressblocks' => 'Celar blocadas de singule adresse IP',
'blocklist-rangeblocks' => 'Celar blocadas de gruppos de adresses IP',
'blocklist-timestamp' => 'Data e hora',
'blocklist-target' => 'Objectivo',
'blocklist-expiry' => 'Expira',
'blocklist-by' => 'Blocate per',
'blocklist-params' => 'Parametros del blocada',
'blocklist-reason' => 'Motivo',
'ipblocklist-submit' => 'Cercar',
'ipblocklist-localblock' => 'Blocada local',
'ipblocklist-otherblocks' => 'Altere {{PLURAL:$1|blocada|blocadas}}',
'infiniteblock' => 'infinite',
'expiringblock' => 'expira le $1 a $2',
'anononlyblock' => 'anon. solmente',
'noautoblockblock' => 'autoblocadas disactivate',
'createaccountblock' => 'creation de contos blocate',
'emailblock' => 'e-mail blocate',
'blocklist-nousertalk' => 'non pote modificar su proprie pagina de discussion',
'ipblocklist-empty' => 'Le lista de blocadas es vacue.',
'ipblocklist-no-results' => 'Le adresse IP o nomine de usator que tu requestava non es blocate.',
'blocklink' => 'blocar',
'unblocklink' => 'disblocar',
'change-blocklink' => 'cambiar blocada',
'contribslink' => 'contributiones',
'emaillink' => 'inviar e-mail',
'autoblocker' => 'Automaticamente blocate proque tu adresse IP ha recentemente essite usate per "[[User:$1|$1]]".
Le motivo specificate pro le blocada de $1 es: "$2"',
'blocklogpage' => 'Registro de blocadas',
'blocklog-showlog' => 'Iste usator ha essite blocate previemente. Le registro de blocadas es providite ci infra pro referentia:',
'blocklog-showsuppresslog' => 'Iste usator ha essite blocate e celate previemente. Le registro de suppressiones es providite ci infra pro referentia:',
'blocklogentry' => 'blocava [[$1]] con un tempore de expiration de $2 $3',
'reblock-logentry' => 'cambiava configurationes de blocada pro [[$1]] con un tempore de expiration de $2 $3',
'blocklogtext' => 'Isto es un registro de blocadas e disblocadas de usatores.
Le adresses IP automaticamente blocate non es includite.
Vide le [[Special:BlockList|lista de blocadas]] pro le lista de bannimentos e blocadas actualmente in operation.',
'unblocklogentry' => 'disblocava $1',
'block-log-flags-anononly' => 'usatores anonyme solmente',
'block-log-flags-nocreate' => 'creation de contos disactivate',
'block-log-flags-noautoblock' => 'autoblocadas disactivate',
'block-log-flags-noemail' => 'e-mail blocate',
'block-log-flags-nousertalk' => 'non pote modificar su proprie pagina de discussion',
'block-log-flags-angry-autoblock' => 'autoblocadas avantiate activate',
'block-log-flags-hiddenname' => 'nomine de usator celate',
'range_block_disabled' => 'Le capacitate del administratores a blocar intervallos de adresses IP es disactivate.',
'ipb_expiry_invalid' => 'Tempore de expiration invalide.',
'ipb_expiry_temp' => 'Le blocadas de nomines de usator celate debe esser permanente.',
'ipb_hide_invalid' => 'Impossibile supprimer iste conto; illo pote haber troppo de modificationes.',
'ipb_already_blocked' => '"$1" es ja blocate',
'ipb-needreblock' => '$1 es ja blocate. Esque tu vole cambiar le configurationes?',
'ipb-otherblocks-header' => 'Altere {{PLURAL:$1|blocada|blocadas}}',
'unblock-hideuser' => 'Tu non pote disblocar iste usator, proque su nomine de usator ha essite celate.',
'ipb_cant_unblock' => 'Error: ID de blocada $1 non trovate. Es possibile que illo ha ja essite disblocate.',
'ipb_blocked_as_range' => 'Error: Le IP $1 non es blocate directemente e non pote esser disblocate.
Illo es, nonobstante, blocate como parte del intervallo $2, le qual pote esser disblocate.',
'ip_range_invalid' => 'Intervallo de adresses IP invalide.',
'ip_range_toolarge' => 'Non es permittite blocar un gamma de adresses IP plus grande que /$1.',
'blockme' => 'Blocar me',
'proxyblocker' => 'Blocator de proxy',
'proxyblocker-disabled' => 'Iste function es disactivate.',
'proxyblockreason' => 'Tu adresse IP ha essite blocate proque illo es un proxy aperte.
Per favor contacta tu providitor de servicio internet o supporto technic e informa les de iste problema grave de securitate.',
'proxyblocksuccess' => 'Succedite.',
'sorbsreason' => 'Tu adresse IP es listate como proxy aperte in le DNSBL usate per {{SITENAME}}.',
'sorbs_create_account_reason' => 'Tu adresse IP es listate como proxy aperte in le DNSBL usate per {{SITENAME}}.
Tu non pote crear un conto',
'cant-block-while-blocked' => 'Tu non pote blocar altere usatores durante que tu mesme es blocate.',
'cant-see-hidden-user' => 'Le usator que tu tenta blocar ha ja essite blocate e celate. Post que tu non ha le derecto hideuser, tu non pote vider o modificar le blocada del usator.',
'ipbblocked' => 'Tu non pote blocar o disblocar altere usatores, proque tu mesme es blocate',
'ipbnounblockself' => 'Tu non ha le permission de disblocar te mesme',

# Developer tools
'lockdb' => 'Blocar base de datos',
'unlockdb' => 'Disblocar base de datos',
'lockdbtext' => 'Le blocada del base de datos suspendera le capacitate de tote
le usatores de modificar paginas, modificar lor preferentias e observatorios,
e altere actiones que require modificationes in le base de datos.
Per favor confirma que isto es tu intention, e que tu disblocara le
base de datos immediatemente post completar tu mantenentia.',
'unlockdbtext' => 'Le disblocada del base de datos restaurara le capacitate de tote
le usatores de modificar paginas, modificar lor preferentias e observatorios,
e altere actiones que require modificationes in le base de datos.
Per favor confirma que isto es tu intention.',
'lockconfirm' => 'Si, io realmente vole blocar le base de datos.',
'unlockconfirm' => 'Si, io realmente vole disblocar le base de datos.',
'lockbtn' => 'Blocar base de datos',
'unlockbtn' => 'Disblocar base de datos',
'locknoconfirm' => 'Tu non ha marcate le quadrato de confirmation.',
'lockdbsuccesssub' => 'Base de datos blocate con successo',
'unlockdbsuccesssub' => 'Base de datos disblocate con successo',
'lockdbsuccesstext' => 'Le base de datos de {{SITENAME}} ha essite blocate.
<br />Rememora te de disblocar lo post completar tu mantenentia.',
'unlockdbsuccesstext' => 'Le base de datos de {{SITENAME}} ha essite disblocate.',
'lockfilenotwritable' => 'Impossibile scriber al file de blocada del base de datos.
Pro blocar o disblocar le base de datos, le servitor web debe poter scriber a iste file.',
'databasenotlocked' => 'Le base de datos non es blocate.',
'lockedbyandtime' => '(per $1 le $2 a $3)',

# Move page
'move-page' => 'Renominar $1',
'move-page-legend' => 'Renominar pagina',
'movepagetext' => "Per medio del formulario infra tu pote renominar un pagina, transferente tote su historia al nove nomine.
Le titulo anterior devenira un pagina de redirection verso le nove titulo.
Tu pote actualisar automaticamente le redirectiones que puncta verso le titulo original.
Si tu prefere non facer isto, assecura te de reparar omne redirectiones [[Special:DoubleRedirects|duple]] o [[Special:BrokenRedirects|rupte]].
Tu ha le responsabilitate de assecurar que le ligamines continua a punctar verso le paginas correcte.

Nota que le pagina '''non''' essera renominate si existe ja un pagina sub le nove titulo, salvo si illo es vacue o un redirection e non ha un historia de modificationes passate.
Isto vole dicer que tu pote renominar un pagina retro a su titulo original si tu ha committite un error, ben que tu non pote superscriber un pagina existente.

'''ATTENTION!'''
Isto pote esser un cambio drastic e inexpectate pro un pagina popular;
per favor assecura te de haber comprendite le consequentias de isto ante de continuar.",
'movepagetext-noredirectfixer' => "Per medio del formulario infra tu pote renominar un pagina, transferente tote su historia al nove nomine.
Le titulo anterior devenira un pagina de redirection verso le nove titulo.
Assecura te de reparar omne redirectiones [[Special:DoubleRedirects|duple]] o [[Special:BrokenRedirects|rupte]].
Tu ha le responsabilitate de assecurar que le ligamines continua a punctar verso le paginas correcte.

Nota que le pagina '''non''' essera renominate si existe ja un pagina sub le nove titulo, salvo si illo es vacue o un redirection e non ha un historia de modificationes passate.
Isto vole dicer que tu pote renominar un pagina retro a su titulo original si tu ha committite un error, ben que tu non pote superscriber un pagina existente.

'''Attention!'''
Isto pote esser un cambio drastic e inexpectate pro un pagina popular;
per favor assecura te de haber comprendite le consequentias de isto ante de continuar.",
'movepagetalktext' => "Le pagina de discussion associate essera automaticamente renominate conjunctemente con illo '''a minus que''':
*Un pagina de discussion non vacue ja existe sub le nove nomine, o
*Tu dismarca le quadrato infra.

Il tal casos, tu debera renominar o fusionar le pagina manualmente si desirate.",
'movearticle' => 'Renominar pagina:',
'moveuserpage-warning' => "'''Attention:''' Tu es super le puncto de renominar un pagina de usator. Nota ben que solmente le pagina, e ''non'' le usator, essera renominate.",
'movenologin' => 'Tu non ha aperite un session',
'movenologintext' => 'Tu debe esser un usator registrate e [[Special:UserLogin|aperir un session]] pro poter renominar un pagina.',
'movenotallowed' => 'Tu non ha le permission de renominar paginas.',
'movenotallowedfile' => 'Tu non ha le permission de renominar files.',
'cant-move-user-page' => 'Tu non ha le permission de renominar paginas principal de usatores.',
'cant-move-to-user-page' => 'Tu non ha le permission de renominar un pagina verso un pagina de usator (excepte un subpagina de usator).',
'newtitle' => 'Al nove titulo:',
'move-watch' => 'Observar le paginas de origine e de destination',
'movepagebtn' => 'Renominar pagina',
'pagemovedsub' => 'Renomination succedite',
'movepage-moved' => '\'\'\'"$1" ha essite renominate a "$2"\'\'\'',
'movepage-moved-redirect' => 'Un redirection ha essite create.',
'movepage-moved-noredirect' => 'Le creation de un redirection ha essite supprimite.',
'articleexists' => 'Un pagina con iste nomine ja existe, o le nomine seligite non es valide.
Per favor selige un altere nomine.',
'cantmove-titleprotected' => 'Tu non pote renominar un pagina a iste titulo, proque le nove titulo ha essite protegite contra creation',
'talkexists' => "'''Le pagina mesme ha essite renominate con successo, ma su pagina de discussion non poteva esser renominate proque il ja existe un con le nove titulo.
Per favor fusiona los manualmente.'''",
'movedto' => 'renominate a',
'movetalk' => 'Renominar le pagina de discussion associate',
'move-subpages' => 'Renominar le subpaginas (usque a $1)',
'move-talk-subpages' => 'Renominar le subpaginas del pagina de discussion (usque a $1)',
'movepage-page-exists' => 'Le pagina $1 existe ja e non pote esser automaticamente superscribite.',
'movepage-page-moved' => 'Le pagina $1 ha essite renominate a $2.',
'movepage-page-unmoved' => 'Le pagina $1 non poteva esser renominate a $2.',
'movepage-max-pages' => 'Le maximo de $1 {{PLURAL:$1|pagina|paginas}} ha essite renominate e nulle altere pagina pote esser renominate automaticamente.',
'movelogpage' => 'Registro de renominationes',
'movelogpagetext' => 'Infra es un lista de paginas renominate.',
'movesubpage' => '{{PLURAL:$1|Subpagina|Subpaginas}}',
'movesubpagetext' => 'Iste pagina ha $1 {{PLURAL:$1|subpagina, le qual|subpaginas, le quales}} se monstra infra.',
'movenosubpage' => 'Iste pagina non ha subpaginas.',
'movereason' => 'Motivo:',
'revertmove' => 'reverter',
'delete_and_move' => 'Deler e renominar',
'delete_and_move_text' => '==Deletion requirite==
Le pagina de destination "[[:$1]]" existe ja.
Esque tu vole deler lo pro permitter le renomination?',
'delete_and_move_confirm' => 'Si, deler le pagina',
'delete_and_move_reason' => 'Delite pro permitter le renomination de "[[$1]]"',
'selfmove' => 'Le titulos de origine e de destination es identic;
non pote renominar un pagina al mesme titulo.',
'immobile-source-namespace' => 'Non pote renominar paginas in le spatio de nomines "$1"',
'immobile-target-namespace' => 'Non pote renominar paginas verso le spatio de nomines "$1"',
'immobile-target-namespace-iw' => 'Un ligamine interwiki non es un destination valide pro le renomination de un pagina.',
'immobile-source-page' => 'Iste pagina non es renominabile.',
'immobile-target-page' => 'Non pote renominar a iste titulo de destination.',
'bad-target-model' => 'Le destination desirate usa un altere modello de contento. Non es possibile converter de $1 a $2.',
'imagenocrossnamespace' => 'Impossibile renominar un file verso un spatio de nomines non-file',
'nonfile-cannot-move-to-file' => 'Impossibile renominar un non-file verso le spatio de nomines file',
'imagetypemismatch' => 'Le nove extension del nomine del file non corresponde al typo del file',
'imageinvalidfilename' => 'Le nomine del file de destination es invalide',
'fix-double-redirects' => 'Actualisar tote le redirectiones que puncta verso le titulo original',
'move-leave-redirect' => 'Lassar un redirection',
'protectedpagemovewarning' => "'''Attention:''' Iste pagina ha essite protegite de sorta que solmente usatores con privilegios de administrator pote renominar lo. Le ultime entrata del registro es fornite hic infra pro referentia:",
'semiprotectedpagemovewarning' => "'''Nota:''' Iste pagina ha essite protegite de sorta que solmente usatores registrate pote renominar lo. Le ultime entrata del registro es fornite hic infra pro referentia:",
'move-over-sharedrepo' => '== File existe ==
[[:$1]] existe in un repositorio partite. Si le file es renominate a iste titulo, illo supplantara le file partite.',
'file-exists-sharedrepo' => 'Le nomine de file seligite es ja in uso in un repositorio partite.
Per favor selige un altere nomine.',

# Export
'export' => 'Exportar paginas',
'exporttext' => 'Tu pote exportar le texto e historia de modificationes de un pagina particular o collection de paginas, incapsulate in un poco de XML.
Isto pote esser importate in un altere wiki que usa MediaWiki via le [[Special:Import|pagina pro importar]].

Pro exportar paginas, entra le titulos in le quadro de texto infra, un titulo per linea, e indica si tu vole haber le version currente con tote le versiones ancian, con le lineas de historia de paginas, o simplemente le version actual con le informationes super le ultime modification.

In le secunde caso tu pote etiam usar un ligamine, p.ex. [[{{#Special:Export}}/{{MediaWiki:Mainpage}}]] pro le pagina "[[{{MediaWiki:Mainpage}}]]".',
'exportall' => 'Exportar tote le paginas',
'exportcuronly' => 'Includer solmente le version actual, non le historia complete',
'exportnohistory' => "----
'''Nota:''' Le exportation del historia de paginas complete per medio de iste formulario ha essite disactivate pro motivos concernente le prestationes del servitor.",
'exportlistauthors' => 'Includer un lista complete de contributores pro cata pagina',
'export-submit' => 'Exportar',
'export-addcattext' => 'Adder paginas del categoria:',
'export-addcat' => 'Adder',
'export-addnstext' => 'Adder paginas ab le spatio de nomines:',
'export-addns' => 'Adder',
'export-download' => 'Salveguardar como file',
'export-templates' => 'Includer patronos',
'export-pagelinks' => 'Includer paginas ligate a un profunditate de:',

# Namespace 8 related
'allmessages' => 'Messages del systema',
'allmessagesname' => 'Nomine',
'allmessagesdefault' => 'Texto predefinite',
'allmessagescurrent' => 'Texto actual',
'allmessagestext' => 'Isto es un lista de messages de systema disponibile in le spatio de nomines MediaWiki.
Per favor visita [//www.mediawiki.org/wiki/Localisation MediaWiki Localisation] e [//translatewiki.net translatewiki.net] si tu desira contribuer al localisation general de MediaWiki.',
'allmessagesnotsupportedDB' => "Iste pagina non pote esser usate proque '''\$wgUseDatabaseMessages''' ha essite disactivate.",
'allmessages-filter-legend' => 'Filtro',
'allmessages-filter' => 'Filtrar per stato de personalisation:',
'allmessages-filter-unmodified' => 'Non modificate',
'allmessages-filter-all' => 'Totes',
'allmessages-filter-modified' => 'Modificate',
'allmessages-prefix' => 'Filtrar per prefixo:',
'allmessages-language' => 'Lingua:',
'allmessages-filter-submit' => 'Va',

# Thumbnails
'thumbnail-more' => 'Aggrandir',
'filemissing' => 'File manca',
'thumbnail_error' => 'Error durante le creation del miniatura: $1',
'djvu_page_error' => 'Pagina DjVu foras de limite',
'djvu_no_xml' => 'Impossibile obtener XML pro file DjVu',
'thumbnail-temp-create' => 'Impossibile crear un file temporari de miniatura',
'thumbnail-dest-create' => 'Impossibile salveguardar le miniatura in su destination',
'thumbnail_invalid_params' => 'Parametros de miniatura invalide',
'thumbnail_dest_directory' => 'Impossibile crear directorio de destination',
'thumbnail_image-type' => 'typo de imagine non supportate',
'thumbnail_gd-library' => 'le configuration del bibliotheca GD es incomplete: manca le function $1',
'thumbnail_image-missing' => 'le file pare mancar: $1',

# Special:Import
'import' => 'Importar paginas',
'importinterwiki' => 'Importation transwiki',
'import-interwiki-text' => 'Selige le wiki e le titulo del pagina a importar.
Le datas del versiones e nomines del contributores essera preservate.
Tote le actiones de importation transwiki se registra in le [[Special:Log/import|registro de importationes]].',
'import-interwiki-source' => 'Wiki/pagina de origine:',
'import-interwiki-history' => 'Copiar tote le versiones del historia de iste pagina',
'import-interwiki-templates' => 'Includer tote le patronos',
'import-interwiki-submit' => 'Importar',
'import-interwiki-namespace' => 'Spatio de nomines de destination:',
'import-interwiki-rootpage' => 'Pagina radice de destination (optional):',
'import-upload-filename' => 'Nomine del file:',
'import-comment' => 'Commento:',
'importtext' => 'Per favor exporta le file del wiki de origine con le [[Special:Export|facilitate de exportation]].
Salveguarda lo in tu computator e incarga lo hic.',
'importstart' => 'Importation de paginas in curso…',
'import-revision-count' => '$1 {{PLURAL:$1|version|versiones}}',
'importnopages' => 'Nulle paginas a importar.',
'imported-log-entries' => '$1 {{PLURAL:$1|entrata|entratas}} del registro importate.',
'importfailed' => 'Importation fallite: <nowiki>$1</nowiki>',
'importunknownsource' => 'Typo del origine de importation non cognoscite',
'importcantopen' => 'Impossibile aperir le file de importation',
'importbadinterwiki' => 'Ligamine interwiki invalide',
'importnotext' => 'Texto vacue o mancante',
'importsuccess' => 'Importation complete!',
'importhistoryconflict' => 'Existe un conflicto in le historia de versiones (es possibile que iste pagina ha essite importate anteriormente)',
'importnosources' => 'Nulle origine de importation transwiki ha essite definite e le incargamento directe de historias es disactivate.',
'importnofile' => 'Nulle file de importation esseva incargate.',
'importuploaderrorsize' => 'Le incargamento del file de importation ha fallite. Le grandor del file excede le limite pro incargamentos.',
'importuploaderrorpartial' => 'Le incargamento del file de importation ha fallite. Le file esseva incargate solmente in parte.',
'importuploaderrortemp' => 'Le incargamento del file de importation ha fallite. Un directorio temporari manca.',
'import-parse-failure' => 'Error syntactic durante importation XML',
'import-noarticle' => 'Nulle pagina a importar!',
'import-nonewrevisions' => 'Tote le versiones habeva ja essite importate anteriormente.',
'xml-error-string' => '$1 al linea $2, col $3 (byte $4): $5',
'import-upload' => 'Incargar datos XML',
'import-token-mismatch' => 'Perdita del datos del session. Per favor reprova.',
'import-invalid-interwiki' => 'Non pote importar ab le wiki specificate.',
'import-error-edit' => 'Le pagina "$1" non es importate perque tu non ha le permission de modificar lo.',
'import-error-create' => 'Le pagina "$1" non es importate perque tu non ha le permission de crear lo.',
'import-error-interwiki' => 'Le pagina "$1" non es importate perque su nomine es reservate pro ligation externe (interwiki).',
'import-error-special' => 'Le pagina "$1" non es importate perque illo pertine a un spatio de nomines special que non permitte paginas.',
'import-error-invalid' => 'Le pagina "$1" non es importate perque su nomine es invalide.',
'import-options-wrong' => 'Mal {{PLURAL:$2|option|optiones}}: <nowiki>$1</nowiki>',
'import-rootpage-invalid' => 'Le pagina radice specificate es un titulo invalide.',
'import-rootpage-nosubpage' => 'Le spatio de nomines "$1" del pagina radice non permitte subpaginas.',

# Import log
'importlogpage' => 'Registro de importationes',
'importlogpagetext' => 'Importationes administrative de paginas con historia de modificationes desde altere wikis.',
'import-logentry-upload' => 'importava [[$1]] per incargamento de file',
'import-logentry-upload-detail' => '$1 {{PLURAL:$1|version|versiones}}',
'import-logentry-interwiki' => 'importava $1 transwiki',
'import-logentry-interwiki-detail' => '$1 {{PLURAL:$1|version|versiones}} desde $2',

# JavaScriptTest
'javascripttest' => 'Test de JavaScript',
'javascripttest-title' => 'Execution de $1 tests',
'javascripttest-pagetext-noframework' => 'Iste pagina es reservate pro le execution de tests de JavaScript.',
'javascripttest-pagetext-unknownframework' => 'Structura de test "$1" incognite.',
'javascripttest-pagetext-frameworks' => 'Per favor selige un del sequente structuras de test: $1',
'javascripttest-pagetext-skins' => 'Selige un apparentia con le qual executar le tests:',
'javascripttest-qunit-intro' => 'Vide [$1 documentation de tests] sur mediawiki.org.',
'javascripttest-qunit-heading' => 'Programmas de test QUnit de JavaScript de MediaWiki',

# Tooltip help for the actions
'tooltip-pt-userpage' => 'Tu pagina de usator',
'tooltip-pt-anonuserpage' => 'Le pagina de usator pro le adresse IP desde le qual tu face modificationes',
'tooltip-pt-mytalk' => 'Tu pagina de discussion',
'tooltip-pt-anontalk' => 'Discussion super le modificationes facite desde iste adresse IP',
'tooltip-pt-preferences' => 'Mi preferentias',
'tooltip-pt-watchlist' => 'Le lista de paginas del quales tu seque le modificationes',
'tooltip-pt-mycontris' => 'Lista de tu contributiones',
'tooltip-pt-login' => 'Nos recommenda que tu te authentica, ma non es obligatori.',
'tooltip-pt-anonlogin' => 'Nos recommenda que tu te authentica, ma non es obligatori.',
'tooltip-pt-logout' => 'Clauder session',
'tooltip-ca-talk' => 'Discussiones a proposito del pagina de contento',
'tooltip-ca-edit' => 'Tu pote modificar iste pagina.
Per favor usa le previsualisation ante de publicar.',
'tooltip-ca-addsection' => 'Initiar un nove section',
'tooltip-ca-viewsource' => 'Iste pagina es protegite. Tu pote vider su codice fonte.',
'tooltip-ca-history' => 'Versiones anterior de iste pagina',
'tooltip-ca-protect' => 'Proteger iste pagina',
'tooltip-ca-unprotect' => 'Cambiar le protection de iste pagina',
'tooltip-ca-delete' => 'Deler iste pagina',
'tooltip-ca-undelete' => 'Restaurar le modificationes facite a iste pagina ante que illo esseva delite',
'tooltip-ca-move' => 'Renominar iste pagina',
'tooltip-ca-watch' => 'Adder iste pagina a tu observatorio',
'tooltip-ca-unwatch' => 'Remover iste pagina de tu observatorio',
'tooltip-search' => 'Cercar in {{SITENAME}}',
'tooltip-search-go' => 'Visitar un pagina con iste nomine exacte si existe',
'tooltip-search-fulltext' => 'Cercar iste texto in le paginas',
'tooltip-p-logo' => 'Pagina principal',
'tooltip-n-mainpage' => 'Visitar le pagina principal',
'tooltip-n-mainpage-description' => 'Visitar le pagina principal',
'tooltip-n-portal' => 'A proposito del projecto, que tu pote facer, ubi trovar cosas',
'tooltip-n-currentevents' => 'Informationes de fundo a proposito de eventos actual',
'tooltip-n-recentchanges' => 'Le lista de modificationes recente in le wiki.',
'tooltip-n-randompage' => 'Visitar un pagina qualcunque',
'tooltip-n-help' => 'Le solutiones de vostre problemas',
'tooltip-t-whatlinkshere' => 'Lista de tote le paginas wiki con ligamines a iste pagina',
'tooltip-t-recentchangeslinked' => 'Modificationes recente in le paginas al quales iste pagina contine ligamines',
'tooltip-feed-rss' => 'Syndication RSS pro iste pagina',
'tooltip-feed-atom' => 'Syndication Atom pro iste pagina',
'tooltip-t-contributions' => 'Vider le lista de contributiones de iste usator',
'tooltip-t-emailuser' => 'Inviar un e-mail a iste usator',
'tooltip-t-upload' => 'Incargar files',
'tooltip-t-specialpages' => 'Lista de tote le paginas special',
'tooltip-t-print' => 'Version imprimibile de iste pagina',
'tooltip-t-permalink' => 'Ligamine permanente a iste version del pagina',
'tooltip-ca-nstab-main' => 'Vider le pagina de contento',
'tooltip-ca-nstab-user' => 'Vider le pagina de usator',
'tooltip-ca-nstab-media' => 'Vider le pagina de media',
'tooltip-ca-nstab-special' => 'Isto es un pagina special, tu non pote modificar le pagina mesme',
'tooltip-ca-nstab-project' => 'Vider le pagina de projecto',
'tooltip-ca-nstab-image' => 'Vider le pagina del file',
'tooltip-ca-nstab-mediawiki' => 'Vider le message del systema',
'tooltip-ca-nstab-template' => 'Vider le patrono',
'tooltip-ca-nstab-help' => 'Vider le pagina de adjuta',
'tooltip-ca-nstab-category' => 'Vider le pagina del categoria',
'tooltip-minoredit' => 'Marcar iste modification como minor',
'tooltip-save' => 'Confirmar tu modificationes',
'tooltip-preview' => 'Per favor verifica tu modificationes ante que tu los publica!',
'tooltip-diff' => 'Detaliar le modificationes que tu ha facite in le texto.',
'tooltip-compareselectedversions' => 'Vider le differentias inter le seligite duo versiones de iste pagina.',
'tooltip-watch' => 'Adder iste pagina a tu observatorio',
'tooltip-watchlistedit-normal-submit' => 'Remover titulos',
'tooltip-watchlistedit-raw-submit' => 'Actualisar observatorio',
'tooltip-recreate' => 'Recrear le pagina nonobstante que illo ha essite delite',
'tooltip-upload' => 'Comenciar le incargamento',
'tooltip-rollback' => '"Revocar" reverte le modification(es) de iste pagina del ultime contributor con un singule clic.',
'tooltip-undo' => '"Disfacer" reverte iste modification e aperi le formulario de modification in modo de previsualisation.
Es possibile adder un motivo in le summario.',
'tooltip-preferences-save' => 'Confirmar preferentias',
'tooltip-summary' => 'Entra un curte summario',

# Stylesheets
'common.css' => '/* Le CSS placiate hic se applicara a tote le stilos */',
'standard.css' => '/* Le CSS placiate hic afficera le usatores del apparentia Classic */',
'nostalgia.css' => '/* Le CSS placiate hic afficera le usatores del apparentia Nostalgia */',
'cologneblue.css' => '/* Le CSS placiate hic afficera le usatores del apparentia Colonia Blau */',
'monobook.css' => '/* Le CSS placiate hic afficera le usatores del apparentia MonoBook */',
'myskin.css' => '/* Le CSS placiate hic afficera le usatores del apparentia "Mi apparentia" */',
'chick.css' => '/* Le CSS placiate hic afficera le usatores del apparentia Chique */',
'simple.css' => '/* Le CSS placiate hic afficera le usatores del apparentia Simple */',
'modern.css' => '/* Le CSS placiate hic afficera le usatores del apparentia Moderne */',
'vector.css' => '/* Le CSS placiate hic afficera le usatores del apparentia Vector */',
'print.css' => '/* Le CSS placiate hic influentiara le apparentia del paginas imprimite */',
'handheld.css' => '/* Le CSS placiate hic afficera le apparatos mobile basate super le apparentia configurate in $wgHandheldStyle */',

# Scripts
'common.js' => '/* Omne JavaScript hic se executara pro tote le usatores a cata cargamento de pagina. */',
'standard.js' => '/* Omne JavaScript hic se executara pro le usatores del apparentia Classic */',
'nostalgia.js' => '/* Omne JavaScript hic se executara pro le usatores del apparentia Nostalgia */',
'cologneblue.js' => '/* Omne JavaScript hic se executara pro le usatores del apparentia Colonia Blau */',
'monobook.js' => '/* Omne JavaScript hic se executara pro le usatores del apparentia MonoBook */',
'myskin.js' => '/* Omne JavaScript hic se executara pro le usatores del apparentia "Mi apparentia" */',
'chick.js' => '/* Omne JavaScript hic se executara pro le usatores del apparentia Chique */',
'simple.js' => '/* Omne JavaScript hic se executara pro le usatores del apparentia Simple */',
'modern.js' => '/* Omne JavaScript hic se executara pro le usatores del apparentia Moderne */',
'vector.js' => '/* Omne JavaScript hic se executara pro le usatores del apparentia Vector */',

# Metadata
'notacceptable' => 'Le servitor wiki non pote provider datos in un formato que tu cliente sape leger.',

# Attribution
'anonymous' => '{{PLURAL:$1|Usator|Usatores}} anonyme de {{SITENAME}}',
'siteuser' => 'Usator $1 de {{SITENAME}}',
'anonuser' => 'le usator anonyme $1 de {{SITENAME}}',
'lastmodifiedatby' => 'Le modification le plus recente de iste pagina esseva facite le $1 a $2 per $3.',
'othercontribs' => 'A base de contributiones per $1.',
'others' => 'alteres',
'siteusers' => 'le {{PLURAL:$2|usator|usatores}} $1 de {{SITENAME}}',
'anonusers' => 'le {{PLURAL:$2|usator|usatores}} anonyme $1 de {{SITENAME}}',
'creditspage' => 'Autores del pagina',
'nocredits' => 'Nulle information es disponibile super le autores de iste pagina.',

# Spam protection
'spamprotectiontitle' => 'Filtro de protection antispam',
'spamprotectiontext' => 'Le pagina que tu voleva salveguardar esseva blocate per le filtro antispam.
Le causa es probabilemente un ligamine verso un sito externe que es presente in un lista nigre.',
'spamprotectionmatch' => 'Le sequente texto es lo que activava nostre filtro antispam: $1',
'spambot_username' => 'Nettamento de spam in MediaWiki',
'spam_reverting' => 'Revertite al ultime version que non contine ligamines a $1',
'spam_blanking' => 'Tote le versiones contineva ligamines a $1. Le pagina es vacuate.',
'spam_deleting' => 'Tote le versiones contineva ligamines a $1. Le pagina es delite.',

# Info page
'pageinfo-title' => 'Informationes pro "$1"',
'pageinfo-not-current' => 'Regrettabilemente, il es impossibile fornir iste information pro versiones ancian.',
'pageinfo-header-basic' => 'Information de base',
'pageinfo-header-edits' => 'Historia de modificationes',
'pageinfo-header-restrictions' => 'Protection del pagina',
'pageinfo-header-properties' => 'Proprietates del pagina',
'pageinfo-display-title' => 'Titulo monstrate',
'pageinfo-default-sort' => 'Clave de ordination predefinite',
'pageinfo-length' => 'Dimension del pagina (in bytes)',
'pageinfo-article-id' => 'ID del pagina',
'pageinfo-language' => 'Lingua del contento del pagina',
'pageinfo-robot-policy' => 'Stato del motor de recerca',
'pageinfo-robot-index' => 'Indexabile',
'pageinfo-robot-noindex' => 'Non indexabile',
'pageinfo-views' => 'Numero de visitas',
'pageinfo-watchers' => 'Numero de observatores del pagina',
'pageinfo-redirects-name' => 'Redirectiones verso iste pagina',
'pageinfo-subpages-name' => 'Subpaginas de iste pagina',
'pageinfo-subpages-value' => '$1 ($2 {{PLURAL:$2|redirection|redirectiones}}; $3 {{PLURAL:$3|non-redirection|non-redirectiones}})',
'pageinfo-firstuser' => 'Creator del pagina',
'pageinfo-firsttime' => 'Data de creation del pagina',
'pageinfo-lastuser' => 'Ultime contributor',
'pageinfo-lasttime' => 'Data del ultime modification',
'pageinfo-edits' => 'Numero total de modificationes',
'pageinfo-authors' => 'Numero total de autores distincte',
'pageinfo-recent-edits' => 'Numero de modificationes recente (intra le ultime $1)',
'pageinfo-recent-authors' => 'Numero de autores distincte recente',
'pageinfo-magic-words' => '{{PLURAL:$1|Parola|Parolas}} magic ($1)',
'pageinfo-hidden-categories' => '{{PLURAL:$1|Categoria|Categorias}} celate ($1)',
'pageinfo-templates' => '{{PLURAL:$1|Patrono|Patronos}} transcludite ($1)',
'pageinfo-toolboxlink' => 'Information sur le pagina',
'pageinfo-redirectsto' => 'Redirige a',
'pageinfo-redirectsto-info' => 'info',
'pageinfo-contentpage' => 'Contate como pagina de contento',
'pageinfo-contentpage-yes' => 'Si',
'pageinfo-protect-cascading' => 'Protection in cascada a partir de hic',
'pageinfo-protect-cascading-yes' => 'Si',
'pageinfo-protect-cascading-from' => 'Protection in cascada a partir de',

# Skin names
'skinname-standard' => 'Classic',
'skinname-nostalgia' => 'Nostalgia',
'skinname-cologneblue' => 'Colonia Blau',
'skinname-monobook' => 'MonoBook',
'skinname-myskin' => 'Mi apparentia',
'skinname-chick' => 'Chique',
'skinname-simple' => 'Simple',
'skinname-modern' => 'Moderne',

# Patrolling
'markaspatrolleddiff' => 'Marcar como patruliate',
'markaspatrolledtext' => 'Marcar iste pagina como patruliate',
'markedaspatrolled' => 'Marcate como patruliate',
'markedaspatrolledtext' => 'Le version seligite de [[:$1]] ha essite marcate como patruliate.',
'rcpatroldisabled' => 'Patrulia de modificationes recente disactivate',
'rcpatroldisabledtext' => 'Le functionalitate de patrulia de modificationes recente es disactivate al momento.',
'markedaspatrollederror' => 'Impossibile marcar como patruliate',
'markedaspatrollederrortext' => 'Tu debe specificar un version a marcar como patruliate.',
'markedaspatrollederror-noautopatrol' => 'Tu non es permittite a marcar tu proprie modificationes como patruliate.',

# Patrol log
'patrol-log-page' => 'Registro de patrulia',
'patrol-log-header' => 'Isto es un registro de versiones patruliate.',
'log-show-hide-patrol' => '$1 le registro de versiones patruliate',

# Image deletion
'deletedrevision' => 'Deleva le ancian version $1',
'filedeleteerror-short' => 'Error durante le deletion del file: $1',
'filedeleteerror-long' => 'Se incontrava errores durante le deletion del file:

$1',
'filedelete-missing' => 'Le file "$1" non pote esser delite, proque illo non existe.',
'filedelete-old-unregistered' => 'Le version del file specificate "$1" non existe in le base de datos.',
'filedelete-current-unregistered' => 'Le file specificate "$1" non existe in le base de datos.',
'filedelete-archive-read-only' => 'Le servitor de web non pote scriber al directorio de archivo "$1".',

# Browsing diffs
'previousdiff' => '← Version plus ancian',
'nextdiff' => 'Version plus nove →',

# Media information
'mediawarning' => "'''Attention''': Iste typo de file pote continer codice maligne.
Le execution de illo pote compromitter le securitate de tu systema.",
'imagemaxsize' => "Dimension maxime de imagines:<br />''(pro paginas de description de files)''",
'thumbsize' => 'Dimension del miniaturas:',
'widthheightpage' => '$1 × $2, $3 {{PLURAL:$3|pagina|paginas}}',
'file-info' => 'grandor del file: $1, typo MIME: $2',
'file-info-size' => '$1 × $2 pixel, grandor del file: $3, typo MIME: $4',
'file-info-size-pages' => '$1 × $2 pixels, dimension del file: $3, typo MIME: $4, $5 {{PLURAL:$5|pagina|paginas}}',
'file-nohires' => 'Non disponibile in resolution plus alte.',
'svg-long-desc' => 'File SVG, dimensiones nominal: $1 × $2 pixels, grandor del file: $3',
'svg-long-desc-animated' => 'File SVG animate, dimensiones nominal: $1 × $2 pixels, grandor del file: $3',
'show-big-image' => 'Plen resolution',
'show-big-image-preview' => ' Dimension de iste previsualisation: $1.',
'show-big-image-other' => 'Altere {{PLURAL:$2|resolution|resolutiones}}: $1.',
'show-big-image-size' => '$1 × $2 pixels',
'file-info-gif-looped' => 'repetente',
'file-info-gif-frames' => '$1 {{PLURAL:$1|photogramma|photogrammas}}',
'file-info-png-looped' => 'repetente',
'file-info-png-repeat' => 'repetite $1 {{PLURAL:$1|vice|vices}}',
'file-info-png-frames' => '$1 {{PLURAL:$1|photogramma|photogrammas}}',
'file-no-thumb-animation' => "'''Note: A causa de limitationes technic, le miniaturas de iste file non essera animate.'''",
'file-no-thumb-animation-gif' => "'''Nota: A causa de limitationes technic, le miniaturas de imagines GIF in alte resolution como iste non essera animate.'''",

# Special:NewFiles
'newimages' => 'Galeria de nove files',
'imagelisttext' => "Infra es un lista de '''$1''' {{PLURAL:$1|imagine|imagines}} ordinate $2.",
'newimages-summary' => 'Iste pagina special detalia le recente files incargate.',
'newimages-legend' => 'Filtro',
'newimages-label' => 'Nomine del file (o un parte de illo):',
'showhidebots' => '($1 bots)',
'noimages' => 'Nihil a vider.',
'ilsubmit' => 'Cercar',
'bydate' => 'per data',
'sp-newimages-showfrom' => 'Monstrar nove files a partir del $1 a $2',

# Video information, used by Language::formatTimePeriod() to format lengths in the above messages
'seconds' => '{{PLURAL:$1|$1 secunda|$1 secundas}}',
'minutes' => '{{PLURAL:$1|$1 minuta|$1 minutas}}',
'hours' => '{{PLURAL:$1|$1 hora|$1 horas}}',
'days' => '{{PLURAL:$1|$1 die|$1 dies}}',
'ago' => '$1 retro',

# Bad image list
'bad_image_list' => 'Le formato es como seque:

Solmente punctos de lista (lineas que comencia con *) es considerate.
Le prime ligamine in un linea debe esser un ligamine a un file invalide.
Omne ligamines posterior in le mesme linea es considerate como exceptiones, i.e. paginas in que le file pote esser directemente incorporate.',

# Metadata
'metadata' => 'Metadatos',
'metadata-help' => 'Iste file contine informationes additional, probabilemente addite per le camera digital o scanner usate pro crear o digitalisar lo.
Si le file ha essite modificate ab su stato original, es possibile que alcun detalios non reflecte completemente le file modificate.',
'metadata-expand' => 'Revelar detalios extense',
'metadata-collapse' => 'Celar detalios extense',
'metadata-fields' => 'Le campos de metadatos de imagine listate in iste message essera includite in le visualisation del pagina de imagine quando le tabula de metadatos es plicate.
Le alteres essera initialmente celate.
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
'exif-imagewidth' => 'Latitude',
'exif-imagelength' => 'Altitude',
'exif-bitspersample' => 'Bits per componente',
'exif-compression' => 'Schema de compression',
'exif-photometricinterpretation' => 'Composition de pixel',
'exif-orientation' => 'Orientation',
'exif-samplesperpixel' => 'Numero de componentes',
'exif-planarconfiguration' => 'Arrangiamento del datos',
'exif-ycbcrsubsampling' => 'Ration de reduction de Y a C',
'exif-ycbcrpositioning' => 'Positionamento Y e C',
'exif-xresolution' => 'Resolution horizontal',
'exif-yresolution' => 'Resolution vertical',
'exif-stripoffsets' => 'Location del datos del imagine',
'exif-rowsperstrip' => 'Numero de lineas per banda',
'exif-stripbytecounts' => 'Bytes per banda comprimite',
'exif-jpeginterchangeformat' => 'Position de JPEG SOI',
'exif-jpeginterchangeformatlength' => 'Bytes del datos JPEG',
'exif-whitepoint' => 'Chromaticitate del puncto blanc',
'exif-primarychromaticities' => 'Chromaticitates del colores primari',
'exif-ycbcrcoefficients' => 'Coefficientes del matrice de transformation del spatio de colores',
'exif-referenceblackwhite' => 'Par de valores de referentia nigre e blanc',
'exif-datetime' => 'Data e hora de modification del file',
'exif-imagedescription' => 'Titulo del imagine',
'exif-make' => 'Fabricante del camera',
'exif-model' => 'Modello del camera',
'exif-software' => 'Software usate',
'exif-artist' => 'Autor',
'exif-copyright' => 'Titular del copyright',
'exif-exifversion' => 'Version de Exif',
'exif-flashpixversion' => 'Version supportate de Flashpix',
'exif-colorspace' => 'Spatio de colores',
'exif-componentsconfiguration' => 'Significato de cata componente',
'exif-compressedbitsperpixel' => 'Modo de compression del imagine',
'exif-pixelydimension' => 'Latitude del imagine',
'exif-pixelxdimension' => 'Altitude del imagine',
'exif-usercomment' => 'Commentos del usator',
'exif-relatedsoundfile' => 'File audio connexe',
'exif-datetimeoriginal' => 'Data e hora del generation del datos',
'exif-datetimedigitized' => 'Data e hora del digitalisation',
'exif-subsectime' => 'Fractiones de secundas DateTime',
'exif-subsectimeoriginal' => 'Fractiones de secundas DateTimeOriginal',
'exif-subsectimedigitized' => 'Fractiones de secundas DateTimeDigitized',
'exif-exposuretime' => 'Tempore de exposition',
'exif-exposuretime-format' => '$1 sec ($2)',
'exif-fnumber' => 'Numero F',
'exif-exposureprogram' => 'Programma de exposition',
'exif-spectralsensitivity' => 'Sensibilitate spectral',
'exif-isospeedratings' => 'Classification de velocitate ISO',
'exif-shutterspeedvalue' => 'Velocitate del obturator in unitates APEX',
'exif-aperturevalue' => 'Latitude del apertura in unitates APEX',
'exif-brightnessvalue' => 'Luminositate in unitates APEX',
'exif-exposurebiasvalue' => 'Correction de exposition',
'exif-maxaperturevalue' => 'Apertura maxime pro terra',
'exif-subjectdistance' => 'Distantia del subjecto',
'exif-meteringmode' => 'Modo de mesura',
'exif-lightsource' => 'Fonte de lumine',
'exif-flash' => 'Flash',
'exif-focallength' => 'Longitude focal del lente',
'exif-subjectarea' => 'Area de subjecto',
'exif-flashenergy' => 'Energia del flash',
'exif-focalplanexresolution' => 'Resolution X del plano focal',
'exif-focalplaneyresolution' => 'Resolution Y del plano focal',
'exif-focalplaneresolutionunit' => 'Unitate del resolution del plano focal',
'exif-subjectlocation' => 'Location del subjecto',
'exif-exposureindex' => 'Indice de exposition',
'exif-sensingmethod' => 'Methodo de sensor',
'exif-filesource' => 'Origine del file',
'exif-scenetype' => 'Typo de scena',
'exif-customrendered' => 'Processamento de imagines personalisate',
'exif-exposuremode' => 'Modo de exposition',
'exif-whitebalance' => 'Balancia de blanc',
'exif-digitalzoomratio' => 'Ration de zoom digital',
'exif-focallengthin35mmfilm' => 'Longitude focal in film de 35 mm',
'exif-scenecapturetype' => 'Typo de captura de scena',
'exif-gaincontrol' => 'Controlo de scena',
'exif-contrast' => 'Contrasto',
'exif-saturation' => 'Saturation',
'exif-sharpness' => 'Nitiditate',
'exif-devicesettingdescription' => 'Description del configurationes del apparato',
'exif-subjectdistancerange' => 'Intervallo de distantia del subjecto',
'exif-imageuniqueid' => 'ID unic del imagine',
'exif-gpsversionid' => 'Version del etiquetta GPS',
'exif-gpslatituderef' => 'Latitude nord o sud',
'exif-gpslatitude' => 'Latitude',
'exif-gpslongituderef' => 'Longitude est o west',
'exif-gpslongitude' => 'Longitude',
'exif-gpsaltituderef' => 'Referentia de altitude',
'exif-gpsaltitude' => 'Altitude',
'exif-gpstimestamp' => 'Hora GPS (horologio atomic)',
'exif-gpssatellites' => 'Satellites usate pro mesura',
'exif-gpsstatus' => 'Stato del receptor',
'exif-gpsmeasuremode' => 'Modo de mesura',
'exif-gpsdop' => 'Precision de mesura',
'exif-gpsspeedref' => 'Unitate de velocitate',
'exif-gpsspeed' => 'Velocitate del receptor GPS',
'exif-gpstrackref' => 'Referentia pro direction de movimento',
'exif-gpstrack' => 'Direction de movimento',
'exif-gpsimgdirectionref' => 'Referentia pro direction de imagine',
'exif-gpsimgdirection' => 'Direction de imagine',
'exif-gpsmapdatum' => 'Datos de examination geodesic usate',
'exif-gpsdestlatituderef' => 'Referentia pro latitude de destination',
'exif-gpsdestlatitude' => 'Latitude de destination',
'exif-gpsdestlongituderef' => 'Referentia pro longitude de destination',
'exif-gpsdestlongitude' => 'Longitude de destination',
'exif-gpsdestbearingref' => 'Referentia pro relevamento de destination',
'exif-gpsdestbearing' => 'Relevamento de destination',
'exif-gpsdestdistanceref' => 'Referentia pro distantia a destination',
'exif-gpsdestdistance' => 'Distantia a destination',
'exif-gpsprocessingmethod' => 'Nomine de methodo de processamento GPS',
'exif-gpsareainformation' => 'Nomine de area GPS',
'exif-gpsdatestamp' => 'Data GPS',
'exif-gpsdifferential' => 'Correction differential GPS',
'exif-jpegfilecomment' => 'Commento del file JPEG',
'exif-keywords' => 'Parolas-clave',
'exif-worldregioncreated' => 'Region del mundo ubi le photo esseva prendite',
'exif-countrycreated' => 'Pais ubi le photo esseva prendite',
'exif-countrycodecreated' => 'Codice pro le pais ubi le photo esseva prendite',
'exif-provinceorstatecreated' => 'Provincia o stato ubi le photo esseva prendite',
'exif-citycreated' => 'Citate ubi le photo esseva prendite',
'exif-sublocationcreated' => 'Sublocalitate del citate ubi le photo esseva prendite',
'exif-worldregiondest' => 'Region del mundo monstrate',
'exif-countrydest' => 'Pais monstrate',
'exif-countrycodedest' => 'Codice pro pais monstrate',
'exif-provinceorstatedest' => 'Provincia o stato monstrate',
'exif-citydest' => 'Citate monstrate',
'exif-sublocationdest' => 'Sublocalitate del citate monstrate',
'exif-objectname' => 'Titulo curte',
'exif-specialinstructions' => 'Instructiones special',
'exif-headline' => 'Titulo',
'exif-credit' => 'Credito/Fornitor',
'exif-source' => 'Origine',
'exif-editstatus' => 'Stato redactorial del imagine',
'exif-urgency' => 'Urgentia',
'exif-fixtureidentifier' => 'Nomine del rubrica',
'exif-locationdest' => 'Loco representate',
'exif-locationdestcode' => 'Codice del loco representate',
'exif-objectcycle' => 'Horas del die a que iste objecto es destinate',
'exif-contact' => 'Informationes de contacto',
'exif-writer' => 'Scriptor',
'exif-languagecode' => 'Lingua',
'exif-iimversion' => 'Version de IIM',
'exif-iimcategory' => 'Categoria',
'exif-iimsupplementalcategory' => 'Categorias supplementari',
'exif-datetimeexpires' => 'Non usar post',
'exif-datetimereleased' => 'Data de publication',
'exif-originaltransmissionref' => 'Codice de localitate del transmission original',
'exif-identifier' => 'Identificator',
'exif-lens' => 'Objectivo usate',
'exif-serialnumber' => 'Numero de serie del camera',
'exif-cameraownername' => 'Proprietario del camera',
'exif-label' => 'Etiquetta',
'exif-datetimemetadata' => 'Data del ultime modification del metadatos',
'exif-nickname' => 'Nomine informal del imagine',
'exif-rating' => 'Evalutation (1-5)',
'exif-rightscertificate' => 'Certificato de gestion de derectos',
'exif-copyrighted' => 'Stato de copyright',
'exif-copyrightowner' => 'Titular del copyright',
'exif-usageterms' => 'Conditiones de uso',
'exif-webstatement' => 'Declaration in linea de copyright',
'exif-originaldocumentid' => 'ID unic del documento original',
'exif-licenseurl' => 'URL pro licentia de copyright',
'exif-morepermissionsurl' => 'Information alternative de licentia',
'exif-attributionurl' => 'Si tu re-usa iste obra, per favor insere un ligamine a',
'exif-preferredattributionname' => 'Si tu re-usa iste obra, per favor da recognoscentia a',
'exif-pngfilecomment' => 'Commento del file PNG',
'exif-disclaimer' => 'Repudiation',
'exif-contentwarning' => 'Advertimento de contento',
'exif-giffilecomment' => 'Commento del file GIF',
'exif-intellectualgenre' => 'Typo de elemento',
'exif-subjectnewscode' => 'Codice de subjecto',
'exif-scenecode' => 'Codice de scena IPTC',
'exif-event' => 'Evento representate',
'exif-organisationinimage' => 'Organisation representate',
'exif-personinimage' => 'Persona representate',
'exif-originalimageheight' => 'Altitude del imagine ante taliar',
'exif-originalimagewidth' => 'Latitude del imagine ante taliar',

# EXIF attributes
'exif-compression-1' => 'Non comprimite',
'exif-compression-2' => 'CCITT Group 3 1-Dimensional Modified Huffman run length encoding',
'exif-compression-3' => 'CCITT Group 3 codification fax',
'exif-compression-4' => 'CCITT Group 4 codification fax',

'exif-copyrighted-true' => 'Sub copyright',
'exif-copyrighted-false' => 'Dominio public',

'exif-unknowndate' => 'Data incognite',

'exif-orientation-1' => 'Normal',
'exif-orientation-2' => 'Invertite horizontalmente',
'exif-orientation-3' => 'Rotate 180°',
'exif-orientation-4' => 'Invertite verticalmente',
'exif-orientation-5' => 'Rotate 90° in senso antihorologic e invertite verticalmente',
'exif-orientation-6' => 'Rotate 90° in senso antihorologic',
'exif-orientation-7' => 'Rotate 90° in senso horologic e invertite verticalmente',
'exif-orientation-8' => 'Rotate 90° in senso horologic',

'exif-planarconfiguration-1' => 'formato a blocos (chunky)',
'exif-planarconfiguration-2' => 'formato planar',

'exif-colorspace-65535' => 'Non calibrate',

'exif-componentsconfiguration-0' => 'non existe',

'exif-exposureprogram-0' => 'Non definite',
'exif-exposureprogram-1' => 'Manual',
'exif-exposureprogram-2' => 'Programma normal',
'exif-exposureprogram-3' => 'Prioritate del apertura',
'exif-exposureprogram-4' => 'Prioritate del obturator',
'exif-exposureprogram-5' => 'Programma creative (preferentia verso profunditate de campo)',
'exif-exposureprogram-6' => 'Programma de action (preferentia verso rapiditate del obturator)',
'exif-exposureprogram-7' => 'Modo de portrait (pro subjectos vicin con fundo foras de foco)',
'exif-exposureprogram-8' => 'Modo panorama (pro photos de panoramas con fundo in foco)',

'exif-subjectdistance-value' => '$1 metros',

'exif-meteringmode-0' => 'Incognite',
'exif-meteringmode-1' => 'Media',
'exif-meteringmode-2' => 'Media pesate in centro',
'exif-meteringmode-3' => 'Puncto',
'exif-meteringmode-4' => 'MultiPuncto',
'exif-meteringmode-5' => 'Patrono',
'exif-meteringmode-6' => 'Partial',
'exif-meteringmode-255' => 'Altere',

'exif-lightsource-0' => 'Incognite',
'exif-lightsource-1' => 'Lumine diurne',
'exif-lightsource-2' => 'Fluorescente',
'exif-lightsource-3' => 'Tungsten (lumine incandescente)',
'exif-lightsource-4' => 'Flash',
'exif-lightsource-9' => 'Tempore clar',
'exif-lightsource-10' => 'Tempore nubilose',
'exif-lightsource-11' => 'Umbra',
'exif-lightsource-12' => 'Fluorescente de lumine diurne (D 5700 – 7100K)',
'exif-lightsource-13' => 'Fluorescente blanc diurne (N 4600 – 5400K)',
'exif-lightsource-14' => 'Fluorescente blanc fresc (W 3900 – 4500K)',
'exif-lightsource-15' => 'Fluorescente blanc (WW 3200 – 3700K)',
'exif-lightsource-17' => 'Lumine standard A',
'exif-lightsource-18' => 'Lumine standard B',
'exif-lightsource-19' => 'Lumine standard C',
'exif-lightsource-24' => 'Tungsten de studio ISO',
'exif-lightsource-255' => 'Altere origine de lumine',

# Flash modes
'exif-flash-fired-0' => 'Flash non fulgurava',
'exif-flash-fired-1' => 'Flash fulgurava',
'exif-flash-return-0' => 'nulle function pro deteger stroboscopio',
'exif-flash-return-2' => 'stroboscopio non detegite',
'exif-flash-return-3' => 'stroboscopio detegite',
'exif-flash-mode-1' => 'fulguration flash compulsori',
'exif-flash-mode-2' => 'suppression del flash compulsori',
'exif-flash-mode-3' => 'modo automatic',
'exif-flash-function-1' => 'Nulle function de flash',
'exif-flash-redeye-1' => 'modo de reduction de oculos rubie',

'exif-focalplaneresolutionunit-2' => 'uncias',

'exif-sensingmethod-1' => 'Non definite',
'exif-sensingmethod-2' => 'Sensor de area de colores a singule chip',
'exif-sensingmethod-3' => 'Sensor de area de colores a duo chips',
'exif-sensingmethod-4' => 'Sensor de area de colores a tres chips',
'exif-sensingmethod-5' => 'Sensor de area sequential de colores',
'exif-sensingmethod-7' => 'Sensor trilinear',
'exif-sensingmethod-8' => 'Sensor de color linear sequential',

'exif-filesource-3' => 'Camera photographic digital',

'exif-scenetype-1' => 'Un imagine directemente photographiate',

'exif-customrendered-0' => 'Processo normal',
'exif-customrendered-1' => 'Processo personalisate',

'exif-exposuremode-0' => 'Exposition automatic',
'exif-exposuremode-1' => 'Exposition manual',
'exif-exposuremode-2' => 'Bracketing automatic',

'exif-whitebalance-0' => 'Balancia de blanc automatic',
'exif-whitebalance-1' => 'Balancia de blanc manual',

'exif-scenecapturetype-0' => 'Standard',
'exif-scenecapturetype-1' => 'Paisage',
'exif-scenecapturetype-2' => 'Portrait',
'exif-scenecapturetype-3' => 'Scena nocturne',

'exif-gaincontrol-0' => 'Nulle',
'exif-gaincontrol-1' => 'Basse ganio positive',
'exif-gaincontrol-2' => 'Alte ganio positive',
'exif-gaincontrol-3' => 'Basse ganio negative',
'exif-gaincontrol-4' => 'Alte ganio negative',

'exif-contrast-0' => 'Normal',
'exif-contrast-1' => 'Suave',
'exif-contrast-2' => 'Forte',

'exif-saturation-0' => 'Normal',
'exif-saturation-1' => 'Basse saturation',
'exif-saturation-2' => 'Alte saturation',

'exif-sharpness-0' => 'Normal',
'exif-sharpness-1' => 'Dulce',
'exif-sharpness-2' => 'Dur',

'exif-subjectdistancerange-0' => 'Incognite',
'exif-subjectdistancerange-1' => 'Macro',
'exif-subjectdistancerange-2' => 'Vista proxime',
'exif-subjectdistancerange-3' => 'Vista distante',

# Pseudotags used for GPSLatitudeRef and GPSDestLatitudeRef
'exif-gpslatitude-n' => 'Latitude nord',
'exif-gpslatitude-s' => 'Latitude sud',

# Pseudotags used for GPSLongitudeRef and GPSDestLongitudeRef
'exif-gpslongitude-e' => 'Longitude est',
'exif-gpslongitude-w' => 'Longitude west',

# Pseudotags used for GPSAltitudeRef
'exif-gpsaltitude-above-sealevel' => '$1 {{PLURAL:$1|metro|metros}} super le nivello del mar',
'exif-gpsaltitude-below-sealevel' => '$1 {{PLURAL:$1|metro|metros}} sub le nivello del mar',

'exif-gpsstatus-a' => 'Mesura in curso',
'exif-gpsstatus-v' => 'Interoperabilitate del mesura',

'exif-gpsmeasuremode-2' => 'Mesura bidimensional',
'exif-gpsmeasuremode-3' => 'Mesura tridimensional',

# Pseudotags used for GPSSpeedRef
'exif-gpsspeed-k' => 'Kilometros per hora',
'exif-gpsspeed-m' => 'Millias per hora',
'exif-gpsspeed-n' => 'Nodos',

# Pseudotags used for GPSDestDistanceRef
'exif-gpsdestdistance-k' => 'Kilometros',
'exif-gpsdestdistance-m' => 'Millias',
'exif-gpsdestdistance-n' => 'Millias nautic',

'exif-gpsdop-excellent' => 'Excellente ($1)',
'exif-gpsdop-good' => 'Bon ($1)',
'exif-gpsdop-moderate' => 'Moderate ($1)',
'exif-gpsdop-fair' => 'Acceptabile ($1)',
'exif-gpsdop-poor' => 'Mal ($1)',

'exif-objectcycle-a' => 'Matino solmente',
'exif-objectcycle-p' => 'Vespere solmente',
'exif-objectcycle-b' => 'Matino e vespere',

# Pseudotags used for GPSTrackRef, GPSImgDirectionRef and GPSDestBearingRef
'exif-gpsdirection-t' => 'Direction real',
'exif-gpsdirection-m' => 'Direction magnetic',

'exif-ycbcrpositioning-1' => 'Centrate',
'exif-ycbcrpositioning-2' => 'Co-situate',

'exif-dc-contributor' => 'Contributores',
'exif-dc-coverage' => 'Scopo spatial o temporal del objecto',
'exif-dc-date' => 'Data(s)',
'exif-dc-publisher' => 'Editor',
'exif-dc-relation' => 'Objectos connexe',
'exif-dc-rights' => 'Derectos',
'exif-dc-source' => 'Objecto original',
'exif-dc-type' => 'Typo de objecto',

'exif-rating-rejected' => 'Rejectate',

'exif-isospeedratings-overflow' => 'Superior a 65535',

'exif-iimcategory-ace' => 'Arte, cultura e intertenimento',
'exif-iimcategory-clj' => 'Crimine e lege',
'exif-iimcategory-dis' => 'Catastrophes e accidentes',
'exif-iimcategory-fin' => 'Economia e negotios',
'exif-iimcategory-edu' => 'Education',
'exif-iimcategory-evn' => 'Ambiente',
'exif-iimcategory-hth' => 'Sanitate',
'exif-iimcategory-hum' => 'Interesse human',
'exif-iimcategory-lab' => 'Labor',
'exif-iimcategory-lif' => 'Stilo de vita e tempore libere',
'exif-iimcategory-pol' => 'Politica',
'exif-iimcategory-rel' => 'Religion e credentia',
'exif-iimcategory-sci' => 'Scientia e technologia',
'exif-iimcategory-soi' => 'Questiones social',
'exif-iimcategory-spo' => 'Sport',
'exif-iimcategory-war' => 'Guerra, conflicto e perturbation',
'exif-iimcategory-wea' => 'Meteo',

'exif-urgency-normal' => 'Normal ($1)',
'exif-urgency-low' => 'Basse ($1)',
'exif-urgency-high' => 'Alte ($1)',
'exif-urgency-other' => 'Prioritate definite per usator ($1)',

# External editor support
'edit-externally' => 'Modificar iste file con un programma externe',
'edit-externally-help' => '(Vide le [//www.mediawiki.org/wiki/Manual:External_editors instructiones de configuration] pro ulterior informationes)',

# 'all' in various places, this might be different for inflected languages
'watchlistall2' => 'totes',
'namespacesall' => 'totes',
'monthsall' => 'totes',
'limitall' => 'totes',

# E-mail address confirmation
'confirmemail' => 'Confirmar adresse de e-mail',
'confirmemail_noemail' => 'Tu non ha configurate un adresse de e-mail valide in tu [[Special:Preferences|preferentias de usator]].',
'confirmemail_text' => '{{SITENAME}} require que tu valida tu adresse de e-mail ante que tu usa functiones involvente e-mail.
Activa le button infra pro inviar un message de confirmation a tu adresse.
Le message includera un ligamine continente un codice;
visita le ligamine in tu navigator pro confirmar que tu adresse de e-mail es valide.',
'confirmemail_pending' => 'Un codice de confirmation ha ja essite inviate a te;
si tu ha recentemente create tu conto, es recommendate attender le arrivata de illo durante alcun minutas ante de provar requestar un nove codice.',
'confirmemail_send' => 'Inviar un codice de confirmation',
'confirmemail_sent' => 'Message de confirmation inviate.',
'confirmemail_oncreate' => 'Un codice de confirmation ha essite inviate a tu adresse de e-mail.
Iste codice non es necessari pro aperir un session, ma es requirite pro activar omne functiones a base de e-mail in le wiki.',
'confirmemail_sendfailed' => '{{SITENAME}} non poteva inviar te le message de confirmation.
Per favor verifica que tu adresse de e-mail non ha characteres invalide.

Le servitor de e-mail retornava: $1',
'confirmemail_invalid' => 'Codice de confirmation invalide.
Es possibile que le codice ha expirate.',
'confirmemail_needlogin' => 'Tu debe $1 pro confirmar tu adresse de e-mail.',
'confirmemail_success' => 'Tu adresse de e-mail ha essite confirmate.
Tu pote ora aperir un session e fruer te del wiki.',
'confirmemail_loggedin' => 'Tu adresse de e-mail ha ora essite confirmate.',
'confirmemail_error' => 'Un problema occurreva durante le salveguarda de tu confirmation.',
'confirmemail_subject' => 'Confirmation del adresse de e-mail pro {{SITENAME}}',
'confirmemail_body' => 'Un persona, probabilemente tu, usante le adresse IP $1,
ha registrate un conto "$2" con iste adresse de e-mail in {{SITENAME}}.

Pro confirmar que iste conto es de facto tue, e pro activar le functiones
de e-mail in {{SITENAME}}, visita iste ligamine in tu navigator:

$3

Si tu *non* ha registrate le conto, seque iste ligamine
pro cancellar le confirmation del adresse de e-mail:

$5

Iste codice de confirmation expirara a $4.',
'confirmemail_body_changed' => 'Un persona, probabilemente tu, usante le adresse IP $1,
ha cambiate le adresse de e-mail del conto "$2" a iste adresse in {{SITENAME}}.

Pro confirmar que iste conto es de facto tue, e pro reactivar le functiones
de e-mail in {{SITENAME}}, visita iste ligamine in tu navigator:

$3

Si le conto *non* pertine a te, seque iste ligamine
pro cancellar le confirmation del adresse de e-mail:

$5

Iste codice de confirmation expirara a $4.',
'confirmemail_body_set' => 'Un persona, probabilemente tu, usante le adresse IP $1,
ha specificate que iste adresse de e-mail pertine al conto "$2" in {{SITENAME}}.

Pro confirmar que iste conto es de facto tue, e pro reactivar le functiones
de e-mail in {{SITENAME}}, visita iste ligamine in tu navigator:

$3

Si le conto *non* pertine a te, seque iste ligamine
pro cancellar le confirmation del adresse de e-mail:

$5

Iste codice de confirmation expirara a $4.',
'confirmemail_invalidated' => 'Confirmation del adresse de e-mail cancellate',
'invalidateemail' => 'Cancellar confirmation del adresse de e-mail',

# Scary transclusion
'scarytranscludedisabled' => '[Le transclusion interwiki es disactivate]',
'scarytranscludefailed' => '[Falleva de obtener le patrono pro $1]',
'scarytranscludefailed-httpstatus' => '[Obtention de patrono fallite pro $1: HTTP $2]',
'scarytranscludetoolong' => '[URL es troppo longe]',

# Delete conflict
'deletedwhileediting' => "'''Attention:''' Iste pagina esseva delite post que tu comenciava a modificar lo!",
'confirmrecreate' => "Le usator [[User:$1|$1]] ([[User talk:$1|discussion]]) ha delite iste pagina post que tu comenciava a modificar lo, dante le motivo:
: ''$2''
Per favor confirma que tu realmente vole recrear iste pagina.",
'confirmrecreate-noreason' => 'Le usator [[User:$1|$1]] ([[User talk:$1|discussion]]) ha delite iste pagina post que tu comenciava a modificar lo. Per favor confirma que tu realmente vole recrear iste pagina.',
'recreate' => 'Recrear',

# action=purge
'confirm_purge_button' => 'OK',
'confirm-purge-top' => 'Rader le cache de iste pagina?',
'confirm-purge-bottom' => 'Purgar un pagina vacua le cache e fortia que appare le version le plus recente.',

# action=watch/unwatch
'confirm-watch-button' => 'OK',
'confirm-watch-top' => 'Adder iste pagina a tu observatorio?',
'confirm-unwatch-button' => 'OK',
'confirm-unwatch-top' => 'Remover iste pagina de tu observatorio?',

# Multipage image navigation
'imgmultipageprev' => '← precedente pagina',
'imgmultipagenext' => 'sequente pagina →',
'imgmultigo' => 'Ir!',
'imgmultigoto' => 'Visitar pagina $1',

# Table pager
'ascending_abbrev' => 'asc',
'descending_abbrev' => 'desc',
'table_pager_next' => 'Sequente pagina',
'table_pager_prev' => 'Precedente pagina',
'table_pager_first' => 'Prime pagina',
'table_pager_last' => 'Ultime pagina',
'table_pager_limit' => 'Monstrar $1 entratas per pagina',
'table_pager_limit_label' => 'Elementos per pagina:',
'table_pager_limit_submit' => 'Va',
'table_pager_empty' => 'Nulle resultato',

# Auto-summaries
'autosumm-blank' => 'Pagina vacuate',
'autosumm-replace' => "Contento reimplaciate per '$1'",
'autoredircomment' => 'Redirection verso [[$1]]',
'autosumm-new' => "Pagina create con '$1'",

# Live preview
'livepreview-loading' => 'Cargamento in curso…',
'livepreview-ready' => 'Cargamento in curso… Preste!',
'livepreview-failed' => 'Le previsualisation directe ha fallite! Prova le previsualisation normal.',
'livepreview-error' => 'Impossibile connecter: $1 "$2". Prova le previsualisation normal.',

# Friendlier slave lag warnings
'lag-warn-normal' => 'Le modificationes plus nove que $1 {{PLURAL:$1|secunda|secundas}} possibilemente non se revela in iste lista.',
'lag-warn-high' => 'Le servitor del base de datos es in retardo; modificationes facite durante le ultime $1 {{PLURAL:$1|secunda|secundas}} possibilemente non appare in iste lista.',

# Watchlist editor
'watchlistedit-numitems' => 'Tu observatorio contine {{PLURAL:$1|1 titulo|$1 titulos}}, excludente le paginas de discussion.',
'watchlistedit-noitems' => 'Tu observatorio contine nulle titulos.',
'watchlistedit-normal-title' => 'Modificar observatorio',
'watchlistedit-normal-legend' => 'Remover titulos del observatorio',
'watchlistedit-normal-explain' => 'Le titulos in tu observatorio es monstrate hic infra.
Pro eliminar un titulo, marca le quadrato correspondente, e clicca "{{int:Watchlistedit-normal-submit}}".
Tu pote etiam [[Special:EditWatchlist/raw|modificar le lista in forma crude]].',
'watchlistedit-normal-submit' => 'Remover titulos',
'watchlistedit-normal-done' => '{{PLURAL:$1|1 titulo|$1 titulos}} ha essite removite de tu observatorio:',
'watchlistedit-raw-title' => 'Modification del observatorio in forma crude',
'watchlistedit-raw-legend' => 'Modification del observatorio in forma de un lista simple de titulos',
'watchlistedit-raw-explain' => 'Le titulos in tu observatorio es monstrate hic infra, e pote esser modificate per adder e eliminar entratas del lista;
un titulo per linea.
Quando tu ha finite, clicca super "{{int:Watchlistedit-raw-submit}}".
Tu pote etiam [[Special:EditWatchlist|usar le editor standard]].',
'watchlistedit-raw-titles' => 'Titulos:',
'watchlistedit-raw-submit' => 'Actualisar observatorio',
'watchlistedit-raw-done' => 'Tu observatorio ha essite actualisate.',
'watchlistedit-raw-added' => '{{PLURAL:$1|1 titulo|$1 titulos}} ha essite addite:',
'watchlistedit-raw-removed' => '{{PLURAL:$1|1 titulo|$1 titulos}} ha essite removite:',

# Watchlist editing tools
'watchlisttools-view' => 'Vider modificationes pertinente',
'watchlisttools-edit' => 'Vider e modificar le observatorio',
'watchlisttools-raw' => 'Modificar observatorio crude',

# Signatures
'signature' => '[[{{ns:user}}:$1|$2]] ([[{{ns:user_talk}}:$1|discussion]])',

# Core parser functions
'unknown_extension_tag' => 'Etiquetta de extension incognite "$1"',
'duplicate-defaultsort' => 'Attention: Le clave de ordination predefinite "$2" supplanta le anterior clave de ordination predefinite "$1".',

# Special:Version
'version' => 'Version',
'version-extensions' => 'Extensiones installate',
'version-specialpages' => 'Paginas special',
'version-parserhooks' => 'Uncinos del analysator syntactic',
'version-variables' => 'Variabiles',
'version-antispam' => 'Prevention de spam',
'version-skins' => 'Apparentias',
'version-other' => 'Altere',
'version-mediahandlers' => 'Executores de media',
'version-hooks' => 'Uncinos',
'version-extension-functions' => 'Functiones de extensiones',
'version-parser-extensiontags' => 'Etiquettas de extension del analysator syntactic',
'version-parser-function-hooks' => 'Uncinos de functiones del analysator syntactic',
'version-hook-name' => 'Nomine del uncino',
'version-hook-subscribedby' => 'Subscribite per',
'version-version' => '(Version $1)',
'version-license' => 'Licentia',
'version-poweredby-credits' => "Iste wiki es actionate per '''[//www.mediawiki.org/ MediaWiki]''', copyright © 2001-$1 $2.",
'version-poweredby-others' => 'alteres',
'version-credits-summary' => 'Nos vole recognoscer le sequente personas pro lor contribution a [[Special:Version|MediaWiki]].',
'version-license-info' => 'MediaWiki es software libere; vos pote redistribuer lo e/o modificar lo sub le conditiones del Licentia Public General de GNU publicate per le Free Software Foundation; version 2 del Licentia, o (a vostre option) qualcunque version posterior.

Iste programma es distribuite in le sperantia que illo sia utile, ma SIN GARANTIA; sin mesmo le implicite garantia de COMMERCIALISATION o APTITUDE PRO UN PROPOSITO PARTICULAR. Vide le Licentia Public General de GNU pro plus detalios.

Vos deberea haber recipite [{{SERVER}}{{SCRIPTPATH}}/COPYING un exemplar del Licentia Public General de GNU] con iste programma; si non, scribe al Free Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA, o [//www.gnu.org/copyleft/gpl.html lege lo in linea].',
'version-software' => 'Software installate',
'version-software-product' => 'Producto',
'version-software-version' => 'Version',
'version-entrypoints' => 'URL del puncto de entrata',
'version-entrypoints-header-entrypoint' => 'Puncto de entrata',
'version-entrypoints-header-url' => 'URL',
'version-entrypoints-articlepath' => '[https://www.mediawiki.org/wiki/Manual:$wgArticlePath Cammino al articulo]',
'version-entrypoints-scriptpath' => '[https://www.mediawiki.org/wiki/Manual:$wgScriptPath Cammino al script]',

# Special:FilePath
'filepath' => 'Cammino del file',
'filepath-page' => 'File:',
'filepath-submit' => 'Va',
'filepath-summary' => 'Iste pagina special retorna le cammino complete de un file.
Le imagines se monstra in plen resolution, le altere typos de file se executa directemente con lor programmas associate.',

# Special:FileDuplicateSearch
'fileduplicatesearch' => 'Cercar files duplicate',
'fileduplicatesearch-summary' => "Cercar files duplicate a base de lor summas de verification ''(hash).''",
'fileduplicatesearch-legend' => 'Cercar un duplicato',
'fileduplicatesearch-filename' => 'Nomine del file:',
'fileduplicatesearch-submit' => 'Cercar',
'fileduplicatesearch-info' => '$1 × $2 pixel<br />Grandor del file: $3<br />Typo MIME: $4',
'fileduplicatesearch-result-1' => 'Le file "$1" ha nulle duplicato identic.',
'fileduplicatesearch-result-n' => 'Le file "$1" ha {{PLURAL:$2|1 duplicato|$2 duplicatos}} identic.',
'fileduplicatesearch-noresults' => 'Nulle file con nomine "$1" trovate.',

# Special:SpecialPages
'specialpages' => 'Paginas special',
'specialpages-note' => '----
* Paginas special normal.
* <span class="mw-specialpagerestricted">Paginas special restringite.</span>
* <span class="mw-specialpagecached">Paginas special del cache (poterea esser obsolete).</span>',
'specialpages-group-maintenance' => 'Reportos de mantenentia',
'specialpages-group-other' => 'Altere paginas special',
'specialpages-group-login' => 'Aperir session / crear conto',
'specialpages-group-changes' => 'Modificationes recente e registros',
'specialpages-group-media' => 'Reportos e incargamentos de multimedia',
'specialpages-group-users' => 'Usatores e derectos',
'specialpages-group-highuse' => 'Paginas multo usate',
'specialpages-group-pages' => 'Listas de paginas',
'specialpages-group-pagetools' => 'Instrumentos pro paginas',
'specialpages-group-wiki' => 'Datos e instrumentos pro Wiki',
'specialpages-group-redirects' => 'Redirection de paginas special',
'specialpages-group-spam' => 'Instrumentos antispam',

# Special:BlankPage
'blankpage' => 'Pagina vacue',
'intentionallyblankpage' => 'Iste pagina es intentionalmente vacue',

# External image whitelist
'external_image_whitelist' => '  #Lassa iste linea exactemente como illo es<pre>
#Pone fragmentos de expressiones regular (solmente le parte que va inter //) infra
#Istes correspondera con le adresses URL de imagines externe (a ligamine directe)
#Le correspondentes se monstrara como imagines, le alteres solmente como ligamines a imagines
#Le lineas comenciante con # essera tractate como commentos
#Isto non es sensibile al differentia inter majusculas e minusculas

#Insere omne fragmentos regex super iste linea. Lassa iste linea exactemente como illo es</pre>',

# Special:Tags
'tags' => 'Etiquettas valide de modification',
'tag-filter' => 'Filtro de [[Special:Tags|etiquettas]]:',
'tag-filter-submit' => 'Filtrar',
'tags-title' => 'Etiquettas',
'tags-intro' => 'Iste pagina lista le etiquettas con le quales le software pote marcar un modification, e lor significato.',
'tags-tag' => 'Nomine del etiquetta',
'tags-display-header' => 'Apparentia in listas de modificationes',
'tags-description-header' => 'Description complete del significato',
'tags-hitcount-header' => 'Modificationes etiquettate',
'tags-edit' => 'modificar',
'tags-hitcount' => '$1 {{PLURAL:$1|modification|modificationes}}',

# Special:ComparePages
'comparepages' => 'Comparar paginas',
'compare-selector' => 'Comparar versiones de pagina',
'compare-page1' => 'Pagina 1',
'compare-page2' => 'Pagina 2',
'compare-rev1' => 'Version 1',
'compare-rev2' => 'Version 2',
'compare-submit' => 'Comparar',
'compare-invalid-title' => 'Le titulo que tu specificava es invalide.',
'compare-title-not-exists' => 'Le titulo que tu specificava non existe.',
'compare-revision-not-exists' => 'Le version que tu specificava non existe.',

# Database error messages
'dberr-header' => 'Iste wiki ha un problema',
'dberr-problems' => 'Pardono! Iste sito ha incontrate difficultates technic.',
'dberr-again' => 'Proba attender alcun minutas e recargar.',
'dberr-info' => '(Non pote contactar le servitor del base de datos: $1)',
'dberr-usegoogle' => 'Tu pote probar cercar con Google intertanto.',
'dberr-outofdate' => 'Nota que lor indices de nostre contento pote esser obsolete.',
'dberr-cachederror' => 'Lo sequente es un copia del cache del pagina requestate, e pote esser obsolete.',

# HTML forms
'htmlform-invalid-input' => 'Il ha problemas con un parte del datos que tu ha entrate',
'htmlform-select-badoption' => 'Le valor que tu specificava non es un option valide.',
'htmlform-int-invalid' => 'Le valor que tu specificava non es un numero integre.',
'htmlform-float-invalid' => 'Le valor que tu specificava non es un numero.',
'htmlform-int-toolow' => 'Le valor que tu specificava es sub le minimo de $1',
'htmlform-int-toohigh' => 'Le valor que tu specificava es super le maximo de $1',
'htmlform-required' => 'Iste valor es obligatori',
'htmlform-submit' => 'Submitter',
'htmlform-reset' => 'Disfacer modificationes',
'htmlform-selectorother-other' => 'Altere',

# SQLite database support
'sqlite-has-fts' => '$1 con supporto de recerca de texto integre',
'sqlite-no-fts' => '$1 sin supporto de recerca de texto integre',

# New logging system
'logentry-delete-delete' => '$1 deleva le pagina $3',
'logentry-delete-restore' => '$1 restaurava le pagina $3',
'logentry-delete-event' => '$1 cambiava le visibilitate de {{PLURAL:$5|un entrata|$5 entratas}} de registro in $3: $4',
'logentry-delete-revision' => '$1 cambiava le visibilitate de {{PLURAL:$5|un version|$5 versiones}} del pagina $3: $4',
'logentry-delete-event-legacy' => '$1 cambiava le visibilitate de entratas de registro in $3',
'logentry-delete-revision-legacy' => '$1 cambiava le visibilitate de versiones del pagina $3',
'logentry-suppress-delete' => '$1 supprimeva le pagina $3',
'logentry-suppress-event' => '$1 secretemente cambiava le visibilitate de {{PLURAL:$5|un entrata|$5 entratas}} de registro in $3: $4',
'logentry-suppress-revision' => '$1 secretemente cambiava le visibilitate de {{PLURAL:$5|un version|$5 versiones}} del pagina $3: $4',
'logentry-suppress-event-legacy' => '$1 secretemente cambiava le visibilitate de entratas de registro in $3',
'logentry-suppress-revision-legacy' => '$1 secretemente cambiava le visibilitate de versiones del pagina $3',
'revdelete-content-hid' => 'contento celate',
'revdelete-summary-hid' => 'summario del modification celate',
'revdelete-uname-hid' => 'nomine de usator celate',
'revdelete-content-unhid' => 'contento non plus celate',
'revdelete-summary-unhid' => 'summario del modification non plus celate',
'revdelete-uname-unhid' => 'nomine de usator non plus celate',
'revdelete-restricted' => 'restrictiones applicate al administratores',
'revdelete-unrestricted' => 'restrictiones eliminate pro administratores',
'logentry-move-move' => '$1 renominava le pagina $3 a $4',
'logentry-move-move-noredirect' => '$1 renominava le pagina $3 a $4 sin lassar un redirection',
'logentry-move-move_redir' => '$1 renominava le pagina $3 a $4, superscribente un redirection',
'logentry-move-move_redir-noredirect' => '$1 renominava le pagina $3 a $4, superscribente un redirection sin lassar un nove redirection',
'logentry-patrol-patrol' => '$1 marcava le version $4 del pagina $3 como patruliate',
'logentry-patrol-patrol-auto' => '$1 automaticamente marcava le version $4 del pagina $3 como patruliate',
'logentry-newusers-newusers' => '$1 creava un conto de usator',
'logentry-newusers-create' => '$1 creava un conto de usator',
'logentry-newusers-create2' => '$1 creava un conto de usator $3',
'logentry-newusers-autocreate' => 'Le conto $1 ha essite create automaticamente',
'newuserlog-byemail' => 'contrasigno inviate per e-mail',

# Feedback
'feedback-bugornote' => 'Si tu es preste a describer un problema technic in detalio, per favor [$1 reporta un falta].
Si non, tu pote usar le formulario facile hic infra. Tu commento essera addite al pagina "[$3 $2]", con tu nomine de usator e le navigator del web que tu usa.',
'feedback-subject' => 'Subjecto:',
'feedback-message' => 'Message:',
'feedback-cancel' => 'Cancellar',
'feedback-submit' => 'Submitter opinion',
'feedback-adding' => 'Le responsa es addite al pagina...',
'feedback-error1' => 'Error: Resultato del API non recognoscite',
'feedback-error2' => 'Error: Modification fallite',
'feedback-error3' => 'Error: Nulle responsa del API',
'feedback-thanks' => 'Gratias! Tu evalutation ha essite publicate in le pagina "[$2 $1]".',
'feedback-close' => 'Finite',
'feedback-bugcheck' => 'Bon! Ma per favor verifica que iste falta non es [$1 jam cognoscite].',
'feedback-bugnew' => 'Si, io lo ha verificate; reportar un nove falta',

# Search suggestions
'searchsuggest-search' => 'Cercar',
'searchsuggest-containing' => 'continente...',

# API errors
'api-error-badaccess-groups' => 'Tu non ha le permission de incargar files in iste wiki.',
'api-error-badtoken' => 'Error interne: indicio invalide.',
'api-error-copyuploaddisabled' => 'Le incargamentos per URL es disactivate in iste servitor.',
'api-error-duplicate' => 'Existe jam [$2 {{PLURAL:$1|un altere file|altere files}}] in le wiki con le mesme contento.',
'api-error-duplicate-archive' => 'Il habeva jam {{PLURAL:$1|[$2 un altere file]|[$2 altere files]}} in le sito con le mesme contento, ma {{PLURAL:$1|illo|illos}} ha essite delite.',
'api-error-duplicate-archive-popup-title' => '{{PLURAL:$1|File|Files}} duplicate que ha jam essite delite',
'api-error-duplicate-popup-title' => '{{PLURAL:$1|File|Files}} duplicate',
'api-error-empty-file' => 'Le file que tu submitteva es vacue.',
'api-error-emptypage' => 'Le creation de nove paginas vacue non es permittite.',
'api-error-fetchfileerror' => 'Error interne: qualcosa errava durante le obtention del file.',
'api-error-fileexists-forbidden' => 'Un file con le nomine "$1" jam existe, e non pote esser superscribite.',
'api-error-fileexists-shared-forbidden' => 'Un file con le nomine "$1" jam existe in le repositorio commun de files, e non pote esser superscribite.',
'api-error-file-too-large' => 'Le file que tu submitteva es troppo grande.',
'api-error-filename-tooshort' => 'Le nomine del file es troppo curte.',
'api-error-filetype-banned' => 'Iste typo de file es prohibite.',
'api-error-filetype-banned-type' => '$1 non es {{PLURAL:$4|un typo|typos}} de file permittite. Le {{PLURAL:$3|typo|typos}} de file permittite es $2.',
'api-error-filetype-missing' => 'Le nomine del file non ha un extension.',
'api-error-hookaborted' => 'Le modification que tu ha tentate facer ha essite abortate per un extension.',
'api-error-http' => 'Error interne: impossibile connecter al servitor.',
'api-error-illegal-filename' => 'Iste nomine de file non es permittite.',
'api-error-internal-error' => 'Error interne: qualcosa errava durante le processamento de tu file incargate in le wiki.',
'api-error-invalid-file-key' => 'Error interne: file non trovate in le spatio de immagazinage temporari.',
'api-error-missingparam' => 'Error interne: certe parametros mancava al requesta.',
'api-error-missingresult' => 'Error interne: non poteva determinar si le copia succedeva.',
'api-error-mustbeloggedin' => 'Es necessari aperir session pro incargar files.',
'api-error-mustbeposted' => 'Error interne: le requesta require HTTP POST.',
'api-error-noimageinfo' => 'Le incargamento succedeva, ma le servitor non forniva alcun information super le file.',
'api-error-nomodule' => 'Error interne: nulle modulo de incargamento definite.',
'api-error-ok-but-empty' => 'Error interne: nulle responsa del servitor.',
'api-error-overwrite' => 'Superscriber un file existente non es permittite.',
'api-error-stashfailed' => 'Error interne: le servitor non poteva immagazinar le file temporari.',
'api-error-timeout' => 'Le servitor non ha respondite intra le tempore expectate.',
'api-error-unclassified' => 'Un error incognite ha occurrite.',
'api-error-unknown-code' => 'Error incognite: "$1"',
'api-error-unknown-error' => 'Error interne: qualcosa errava durante le tentativa de incargar le file.',
'api-error-unknown-warning' => 'Advertimento incognite: $1',
'api-error-unknownerror' => 'Error incognite: "$1".',
'api-error-uploaddisabled' => 'Le incargamento es disactivate in iste wiki.',
'api-error-verification-error' => 'Le file pote esser corrumpite o su nomine pote haber un extension errate.',

# Durations
'duration-seconds' => '$1 {{PLURAL:$1|secunda|secundas}}',
'duration-minutes' => '$1 {{PLURAL:$1|minuta|minutas}}',
'duration-hours' => '$1 {{PLURAL:$1|hora|horas}}',
'duration-days' => '$1 {{PLURAL:$1|die|dies}} retro',
'duration-weeks' => '$1 {{PLURAL:$1|septimana|septimanas}}',
'duration-years' => '$1 {{PLURAL:$1|anno|annos}}',
'duration-decades' => '$1 {{PLURAL:$1|decennio|decennios}}',
'duration-centuries' => '$1 {{PLURAL:$1|seculo|seculos}}',
'duration-millennia' => '$1 {{PLURAL:$1|millennio|millennios}}',

);
