<?php
/** Luxembourgish (Lëtzebuergesch)
 *
 * See MessagesQqq.php for message documentation incl. usage of parameters
 * To improve a translation please visit http://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Hercule
 * @author Kaffi
 * @author Kaganer
 * @author Les Meloures
 * @author Purodha
 * @author Reedy
 * @author Robby
 * @author Urhixidur
 * @author Zinneke
 * @author לערי ריינהארט
 */

$fallback = 'de';

$namespaceNames = array(
	NS_MEDIA            => 'Media',
	NS_SPECIAL          => 'Spezial',
	NS_TALK             => 'Diskussioun',
	NS_USER             => 'Benotzer',
	NS_USER_TALK        => 'Benotzer_Diskussioun',
	NS_PROJECT_TALK     => '$1_Diskussioun',
	NS_FILE             => 'Fichier',
	NS_FILE_TALK        => 'Fichier_Diskussioun',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'MediaWiki_Diskussioun',
	NS_TEMPLATE         => 'Schabloun',
	NS_TEMPLATE_TALK    => 'Schabloun_Diskussioun',
	NS_HELP             => 'Hëllef',
	NS_HELP_TALK        => 'Hëllef_Diskussioun',
	NS_CATEGORY         => 'Kategorie',
	NS_CATEGORY_TALK    => 'Kategorie_Diskussioun',
);

$namespaceAliases = array(
	'Bild' => NS_FILE,
	'Bild_Diskussioun' => NS_FILE_TALK,
);

$specialPageAliases = array(
	'Activeusers'               => array( 'Aktiv_Benotzer' ),
	'Allmessages'               => array( 'All_Systemmessagen' ),
	'Allpages'                  => array( 'All_Säiten' ),
	'Ancientpages'              => array( 'Al_Säiten' ),
	'Badtitle'                  => array( 'Falschen_Titel' ),
	'Blankpage'                 => array( 'Eidel_Säit' ),
	'Block'                     => array( 'Spären' ),
	'Blockme'                   => array( 'Mech_spären' ),
	'Booksources'               => array( 'Bicher_mat_hirer_ISBN_sichen' ),
	'BrokenRedirects'           => array( 'Futtis_Viruleedungen' ),
	'Categories'                => array( 'Kategorien' ),
	'ChangeEmail'               => array( 'E-Mailadress_änneren' ),
	'ChangePassword'            => array( 'Passwuert_zrécksetzen' ),
	'ComparePages'              => array( 'Säite_vergkäichen' ),
	'Confirmemail'              => array( 'E-Mail_confirméieren' ),
	'Contributions'             => array( 'Kontributiounen' ),
	'CreateAccount'             => array( 'Benotzerkont_opmaachen' ),
	'Deadendpages'              => array( 'Sakgaasse-Säiten' ),
	'DeletedContributions'      => array( 'Geläschte_Kontributiounen' ),
	'Disambiguations'           => array( 'Homonymie' ),
	'DoubleRedirects'           => array( 'Duebel_Viruleedungen' ),
	'EditWatchlist'             => array( 'Iwwerwaachungslëscht_änneren' ),
	'Emailuser'                 => array( 'Dësem_Benotzer_eng_E-Mail_schécken' ),
	'Export'                    => array( 'Exportéieren' ),
	'Fewestrevisions'           => array( 'Säite_mat_de_mannsten_Ännerungen' ),
	'FileDuplicateSearch'       => array( 'No_duebele_Fichieren_sichen' ),
	'Filepath'                  => array( 'Pad_bäi_de_Fichier' ),
	'Import'                    => array( 'Importéieren' ),
	'Invalidateemail'           => array( 'E-Mailadress_net_confirméieren' ),
	'JavaScriptTest'            => array( 'JavaScript-Test' ),
	'BlockList'                 => array( 'Lëscht_vu_gespaarten_IPen_a_Benotzer' ),
	'LinkSearch'                => array( 'Weblink-Sichen' ),
	'Listadmins'                => array( 'Lëscht_vun_den_Administrateuren' ),
	'Listbots'                  => array( 'Botten' ),
	'Listfiles'                 => array( 'Billerlëscht' ),
	'Listgrouprights'           => array( 'Lëscht_vun_de_Grupperechter' ),
	'Listredirects'             => array( 'Viruleedungen' ),
	'Listusers'                 => array( 'Lëscht_vun_de_Benotzer' ),
	'Lockdb'                    => array( 'Datebank_spären' ),
	'Log'                       => array( 'Logbicher' ),
	'Lonelypages'               => array( 'Weesesäiten' ),
	'Longpages'                 => array( 'Laang_Säiten' ),
	'MergeHistory'              => array( 'Versiounen_zesummeleeën' ),
	'MIMEsearch'                => array( 'No_MIME-Zorte_sichen' ),
	'Mostcategories'            => array( 'Säite_mat_de_meeschte_Kategorien' ),
	'Mostimages'                => array( 'Dacks_benotzte_Biller' ),
	'Mostinterwikis'            => array( 'Meescht_Interwikien' ),
	'Mostlinked'                => array( 'Dacks_verlinkte_Säiten' ),
	'Mostlinkedcategories'      => array( 'Dacks_benotzte_Kategorien' ),
	'Mostlinkedtemplates'       => array( 'Dacks_benotzte_Schablounen' ),
	'Mostrevisions'             => array( 'Säite_mat_de_meeschten_Ännerungen' ),
	'Movepage'                  => array( 'Säit_réckelen' ),
	'Mycontributions'           => array( 'Meng_Kontributiounen' ),
	'Mypage'                    => array( 'Meng_Benotzersäit' ),
	'Mytalk'                    => array( 'Meng_Diskussiounssäit' ),
	'Myuploads'                 => array( 'Meng_eropgeluede_Fichieren' ),
	'Newimages'                 => array( 'Nei_Biller' ),
	'Newpages'                  => array( 'Nei_Säiten' ),
	'PasswordReset'             => array( 'Zrécksetze_vum_Passwuert' ),
	'PermanentLink'             => array( 'Permanente_Link' ),
	'Popularpages'              => array( 'Beléifste_Säiten' ),
	'Preferences'               => array( 'Astellungen' ),
	'Prefixindex'               => array( 'Indexsich' ),
	'Protectedpages'            => array( 'Protegéiert_Säiten' ),
	'Protectedtitles'           => array( 'Gespaarte_Säiten' ),
	'Randompage'                => array( 'Zoufälleg_Säit' ),
	'Randomredirect'            => array( 'Zoufälleg_Viruleedung' ),
	'Recentchanges'             => array( 'Rezent_Ännerungen' ),
	'Recentchangeslinked'       => array( 'Ännerungen_op_verlinkte_Säiten' ),
	'Revisiondelete'            => array( 'Versioun_läschen' ),
	'Search'                    => array( 'Sichen' ),
	'Shortpages'                => array( 'Kuerz_Säiten' ),
	'Specialpages'              => array( 'Spezialsäiten' ),
	'Statistics'                => array( 'Statistik' ),
	'Tags'                      => array( 'Taggen' ),
	'Unblock'                   => array( 'Spär_ophiewen' ),
	'Uncategorizedcategories'   => array( 'Kategorien_ouni_Kategorie' ),
	'Uncategorizedimages'       => array( 'Biller_ouni_Kategorie' ),
	'Uncategorizedpages'        => array( 'Säiten_ouni_Kategorie' ),
	'Uncategorizedtemplates'    => array( 'Schablounen_ouni_Kategorie' ),
	'Undelete'                  => array( 'Restauréieren' ),
	'Unlockdb'                  => array( 'Spär_vun_der_Datebank_ophiewen' ),
	'Unusedcategories'          => array( 'Onbenotze_Kategorien' ),
	'Unusedimages'              => array( 'Onbenotzte_Biller' ),
	'Unusedtemplates'           => array( 'Onbenotzte_Schablounen' ),
	'Unwatchedpages'            => array( 'Säiten_déi_net_iwwerwaacht_ginn' ),
	'Upload'                    => array( 'Eroplueden' ),
	'Userlogin'                 => array( 'Umellen' ),
	'Userlogout'                => array( 'Ofmellen' ),
	'Userrights'                => array( 'Benotzerrechter' ),
	'Version'                   => array( 'Versioun' ),
	'Wantedcategories'          => array( 'Gewënschte_Kategorien' ),
	'Wantedfiles'               => array( 'Gewënschte_Fichieren' ),
	'Wantedpages'               => array( 'Gewënschte_Säiten' ),
	'Wantedtemplates'           => array( 'Gewënschte_Schablounen' ),
	'Watchlist'                 => array( 'Iwwerwaachungslëscht' ),
	'Whatlinkshere'             => array( 'Linken_op_dës_Säit' ),
	'Withoutinterwiki'          => array( 'Säiten_ouni_Interwiki-Linken' ),
);

$magicWords = array(
	'redirect'                  => array( '0', '#VIRULEEDUNG', '#WEITERLEITUNG', '#REDIRECT' ),
	'numberofpages'             => array( '1', 'Säitenzuel', 'SEITENANZAHL', 'NUMBEROFPAGES' ),
	'numberofarticles'          => array( '1', 'Artikelen', 'ARTIKELANZAHL', 'NUMBEROFARTICLES' ),
	'numberoffiles'             => array( '1', 'Zuel_vu_Fichieren', 'DATEIANZAHL', 'NUMBEROFFILES' ),
	'numberofusers'             => array( '1', 'Benotzerzuel', 'BENUTZERANZAHL', 'NUMBEROFUSERS' ),
	'numberofactiveusers'       => array( '1', 'Aktiv_Benotzer', 'AKTIVE_BENUTZER', 'NUMBEROFACTIVEUSERS' ),
	'pagename'                  => array( '1', 'Säitennumm', 'SEITENNAME', 'PAGENAME' ),
	'namespace'                 => array( '1', 'Nummraum', 'NAMENSRAUM', 'NAMESPACE' ),
	'subjectspace'              => array( '1', 'Haaptnummraum', 'HAUPTNAMENSRAUM', 'SUBJECTSPACE', 'ARTICLESPACE' ),
	'subjectpagename'           => array( '1', 'Haaptsäit', 'HAUPTSEITE', 'SUBJECTPAGENAME', 'ARTICLEPAGENAME' ),
	'img_thumbnail'             => array( '1', 'Miniatur', 'miniatur', 'mini', 'thumbnail', 'thumb' ),
	'img_right'                 => array( '1', 'riets', 'rechts', 'right' ),
	'img_left'                  => array( '1', 'lénks', 'links', 'left' ),
	'img_none'                  => array( '1', 'ouni', 'ohne', 'none' ),
	'img_center'                => array( '1', 'zentréiert', 'zentriert', 'center', 'centre' ),
	'img_framed'                => array( '1', 'gerummt', 'gerahmt', 'framed', 'enframed', 'frame' ),
	'img_frameless'             => array( '1', 'net_gerummt', 'rahmenlos', 'frameless' ),
	'img_page'                  => array( '1', 'Säit=$1', 'Säit_$1', 'seite=$1', 'seite $1', 'page=$1', 'page $1' ),
	'img_border'                => array( '1', 'bord', 'rand', 'border' ),
	'img_top'                   => array( '1', 'uewen', 'oben', 'top' ),
	'img_bottom'                => array( '1', 'ënnen', 'unten', 'bottom' ),
	'grammar'                   => array( '0', 'GRAMMAIRE', 'GRAMMATIK:', 'GRAMMAR:' ),
	'plural'                    => array( '0', 'PLURAL', 'PLURAL:' ),
	'currentversion'            => array( '1', 'AKTUELL_VERSIOUN', 'JETZIGE_VERSION', 'CURRENTVERSION' ),
	'language'                  => array( '0', '#SPROOCH:', '#SPRACHE:', '#LANGUAGE:' ),
	'formatnum'                 => array( '0', 'ZUELEFORMAT', 'ZAHLENFORMAT', 'FORMATNUM' ),
	'special'                   => array( '0', 'spezial', 'special' ),
	'hiddencat'                 => array( '1', '__VERSTOPPT_KATEGORIE__', '__VERSTECKTE_KATEGORIE__', '__WARTUNGSKATEGORIE__', '__HIDDENCAT__' ),
	'pagesincategory_pages'     => array( '0', 'Säiten', 'pages' ),
	'pagesincategory_files'     => array( '0', 'Fichieren', 'files' ),
);

$messages = array(
# User preference toggles
'tog-underline' => 'Linken ënnersträichen:',
'tog-justify' => "Ränner vum Text riichten (''justify'')",
'tog-hideminor' => 'Verstopp kleng Ännerungen an de rezenten Ännerungen',
'tog-hidepatrolled' => 'Iwwerkuckten Ännerungen an de "Rezenten Ännerungen" verstoppen',
'tog-newpageshidepatrolled' => 'Iwwerkuckte Säiten op der Lëscht vun den "Neie Säite" verstoppen',
'tog-extendwatchlist' => 'Iwwerwaachungslëscht op all Ännerungen ausbreeden, net nëmmen op déi rezentst',
'tog-usenewrc' => 'Erweidert rezent Ännerunge benotzen (verlaangt JavaScript)',
'tog-numberheadings' => 'Iwwerschrëften automatesch numeréieren',
'tog-showtoolbar' => 'Ännerungstoolbar weisen (JavaScript)',
'tog-editondblclick' => 'Säite mat Duebelklick veränneren (JavaScript)',
'tog-editsection' => "Linke fir d'Ännere vun eenzelnen Abschnitter weisen",
'tog-editsectiononrightclick' => 'Eenzel Abschnitter mat Rietsklick änneren (JavaScript)',
'tog-showtoc' => 'Inhaltsverzeechnes weise bei Säite mat méi wéi dräi Iwwerschrëften',
'tog-rememberpassword' => 'Meng Umeldung mat dësem Browser(fir maximal $1 {{PLURAL:$1|Dag|Deeg}}) verhalen',
'tog-watchcreations' => 'Säiten déi ech uleeën a Fichieren déi ech eroplueden op meng Iwwerwaachungslëscht derbäisetzen',
'tog-watchdefault' => 'Säiten a Fichieren déi ech änneren op meng Iwwerwaachungslëscht derbäisetzen',
'tog-watchmoves' => 'Säiten a Fichieren déi ech réckelen automatesch op meng Iwwerwaachungslëscht derbäisetzen',
'tog-watchdeletion' => 'Säiten a Fichieren déi ech läschen op meng Iwwerwaachungslëscht derbäisetzen',
'tog-minordefault' => "All Ännerungen automatesch als 'Kleng Ännerungen' markéieren.",
'tog-previewontop' => "Déi ''nach-net gespäichert Versioun'' iwwer der Ännerungsfënster weisen",
'tog-previewonfirst' => "Beim éischten Änneren déi  ''nach net gespäichert Versioun'' weisen.",
'tog-nocache' => 'Säitecache vum Browser desaktivéieren',
'tog-enotifwatchlistpages' => 'Schéckt mir eng E-Mail wann eng Säit oder e Fichier op menger Iwwerwaachungslëscht geännert gëtt',
'tog-enotifusertalkpages' => 'Schéckt mir E-Maile wa meng Diskussiounssäit geännert gëtt.',
'tog-enotifminoredits' => 'Schéckt mir och bei klengen Ännerungen op vu mir iwwerwaachte Säiten oder Fichieren eng E-Mail.',
'tog-enotifrevealaddr' => 'Meng E-Mailadress an de Benoriichtigungsmaile weisen.',
'tog-shownumberswatching' => "D'Zuel vun de Benotzer déi dës Säit iwwerwaache weisen",
'tog-oldsig' => 'Aktuell Ënnerschrëft:',
'tog-fancysig' => 'Ënnerschrëft als Wiki-Text behandelen (Ouni automatesche Link)',
'tog-externaleditor' => 'Externen Editeur als Standard benotzen (Nëmme fir Experten, et musse speziell Astellungen op ärem Computer gemaach ginn. [//www.mediawiki.org/wiki/Manual:External_editors Méi Informatiounen.])',
'tog-externaldiff' => 'En Externen Diff-Programm als Standard benotzen (nëmme fir Experten, et musse speziell Astellungen op ärem Computer gemaach ginn. [//www.mediawiki.org/wiki/Manual:External_editors Méi Informatiounen])',
'tog-showjumplinks' => 'Aktivéiere vun de "Sprang op"-Linken',
'tog-uselivepreview' => 'Live-Preview benotzen (JavaScript) (experimentell)',
'tog-forceeditsummary' => 'Warnen, wa beim Späicheren de Resumé feelt',
'tog-watchlisthideown' => 'Meng Ännerungen op menger Iwwerwaachungslëscht verstoppen',
'tog-watchlisthidebots' => 'Ännerunge vu Botten op menger Iwwerwaachungslëscht verstoppen',
'tog-watchlisthideminor' => 'Kleng Ännerungen op menger Iwwerwaachungslëscht verstoppen',
'tog-watchlisthideliu' => 'Ännerunge vun ugemellte Benotzer verstoppen',
'tog-watchlisthideanons' => 'Ännerunge vun anonyme Benotzer (IP-Adressen) verstoppen',
'tog-watchlisthidepatrolled' => 'Iwwerkuckten Ännerungen op der Iwwerwaachungslëscht verstoppen',
'tog-ccmeonemails' => 'Schéck mir eng Kopie vun de Mailen, déi ech anere Benotzer schécken.',
'tog-diffonly' => "Weis bei Versiounsvergläicher just d'Ënnerscheeder an net déi ganz Säit",
'tog-showhiddencats' => 'Verstoppt Kategorië weisen',
'tog-noconvertlink' => 'Ëmwandlung vum Titel desaktivéieren',
'tog-norollbackdiff' => 'Ënnerscheed nom Zrécksetzen ënnerdrécken',

'underline-always' => 'Ëmmer',
'underline-never' => 'Ni',
'underline-default' => 'Skin oder Standard vum Browser',

# Font style option in Special:Preferences
'editfont-style' => "Schrëftfamill fir d'Ännerungsfënster:",
'editfont-default' => 'Standard vum Browser',
'editfont-monospace' => 'Schrëft mat enger fixer Breet (fir all Zeechen)',
'editfont-sansserif' => 'Schrëft ouni Serifen',
'editfont-serif' => 'Schrëft mat Serifen',

# Dates
'sunday' => 'Sonndeg',
'monday' => 'Méindeg',
'tuesday' => 'Dënschdeg',
'wednesday' => 'Mëttwoch',
'thursday' => 'Donneschdeg',
'friday' => 'Freideg',
'saturday' => 'Samschdeg',
'sun' => 'Son',
'mon' => 'Méi',
'tue' => 'Dën',
'wed' => 'Mët',
'thu' => 'Don',
'fri' => 'Fre',
'sat' => 'Sam',
'january' => 'Januar',
'february' => 'Februar',
'march' => 'Mäerz',
'april' => 'Abrëll',
'may_long' => 'Mee',
'june' => 'Juni',
'july' => 'Juli',
'august' => 'August',
'september' => 'September',
'october' => 'Oktober',
'november' => 'November',
'december' => 'Dezember',
'january-gen' => 'Januar',
'february-gen' => 'Februar',
'march-gen' => 'Mäerz',
'april-gen' => 'Abrëll',
'may-gen' => 'Mee',
'june-gen' => 'Juni',
'july-gen' => 'Juli',
'august-gen' => 'August',
'september-gen' => 'September',
'october-gen' => 'Oktober',
'november-gen' => 'November',
'december-gen' => 'Dezember',
'jan' => 'Jan.',
'feb' => 'Feb.',
'mar' => 'Mäe.',
'apr' => 'Abr.',
'may' => 'Mee',
'jun' => 'Jun.',
'jul' => 'Jul.',
'aug' => 'Aug.',
'sep' => 'Sep.',
'oct' => 'Okt.',
'nov' => 'Nov.',
'dec' => 'Dez.',

# Categories related messages
'pagecategories' => '{{PLURAL:$1|Kategorie|Kategorien}}',
'category_header' => 'Säiten an der Kategorie "$1"',
'subcategories' => 'Ënnerkategorien',
'category-media-header' => 'Medien an der Kategorie "$1"',
'category-empty' => "''Dës Kategorie ass fir den Ament eidel''",
'hidden-categories' => '{{PLURAL:$1|Verstoppt Kategorie|Verstoppt Kategorien}}',
'hidden-category-category' => 'Verstoppt Kategorien',
'category-subcat-count' => 'Dës Kategorie huet {{PLURAL:$2|nëmmen dës Ënnerkategorie.|dës {{PLURAL:$1|Ënnerkategorie|$1 Ënnerkategorien}}, vu(n) $2 am Ganzen.}}',
'category-subcat-count-limited' => 'Dës Kategorie huet dës {{PLURAL:$1|Ënnerkategorie|$1 Ënnerkategorien}}.',
'category-article-count' => 'An dëser Kategorie {{PLURAL:$2|ass just dës Säit.|{{PLURAL:$1|ass just dës Säit|si(nn) $1 Säiten}}, vu(n) $2 am Ganzen.}}',
'category-article-count-limited' => 'Dës {{PLURAL:$1|Säit ass|$1 Säite sinn}} an dëser Kategorie.',
'category-file-count' => '{{PLURAL:$2|Just dëse Fichier ass an dëser Kategorie.|{{PLURAL:$1|Just dëse Fichier ass|Dës $1 Fichiere sinn}} an dëser Kategorie, vu(n) $2 am Ganzen.}}',
'category-file-count-limited' => '{{PLURAL:$1|Dëse Fichier ass|Dës $1 Fichiere sinn}} an dëser Kategorie.',
'listingcontinuesabbrev' => '(Fortsetzung)',
'index-category' => 'Indexéiert Säiten',
'noindex-category' => 'Net-indexéiert Säiten',
'broken-file-category' => 'Säite mat futtisse Linken op Fichieren',

'about' => 'Iwwer',
'article' => 'Säit mat Inhalt',
'newwindow' => '(geet an enger neier Fënster op)',
'cancel' => 'Zréck',
'moredotdotdot' => 'Méi …',
'mypage' => 'Meng Säit',
'mytalk' => 'Meng Diskussioun',
'anontalk' => 'Diskussioun fir dës IP Adress',
'navigation' => 'Navigatioun',
'and' => '&#32;a(n)',

# Cologne Blue skin
'qbfind' => 'Fannen',
'qbbrowse' => 'Duerchsichen',
'qbedit' => 'Änneren',
'qbpageoptions' => 'Säitenoptiounen',
'qbmyoptions' => 'Meng Säiten',
'qbspecialpages' => 'Spezialsäiten',
'faq' => 'FAQ',
'faqpage' => 'Project:FAQ',

# Vector skin
'vector-action-addsection' => 'Sujet derbäisetzen',
'vector-action-delete' => 'Läschen',
'vector-action-move' => 'Réckelen',
'vector-action-protect' => 'Spären',
'vector-action-undelete' => 'Restauréieren',
'vector-action-unprotect' => 'Spär änneren',
'vector-simplesearch-preference' => 'Vereinfacht Sichleescht aktivéieren (nëmme beim Ausgesinn Vector)',
'vector-view-create' => 'Uleeën',
'vector-view-edit' => 'Änneren',
'vector-view-history' => 'Versioune weisen',
'vector-view-view' => 'Liesen',
'vector-view-viewsource' => 'Quellcode weisen',
'actions' => 'Aktiounen',
'namespaces' => 'Nummraim',
'variants' => 'Varianten',

'errorpagetitle' => 'Feeler',
'returnto' => 'Zréck op $1.',
'tagline' => 'Vu {{SITENAME}}',
'help' => 'Hëllef',
'search' => 'Sichen',
'searchbutton' => 'Volltext-Sich',
'go' => 'Lass',
'searcharticle' => 'Säit',
'history' => 'Historique vun der Säit',
'history_short' => 'Versiounen',
'updatedmarker' => "geännert zënter ech d'Säit fir d'lescht gekuckt hunn",
'printableversion' => 'Drockversioun',
'permalink' => 'Zitéierfäege Link',
'print' => 'Drécken',
'view' => 'Weisen',
'edit' => 'Änneren',
'create' => 'Uleeën',
'editthispage' => 'Dës Säit änneren',
'create-this-page' => 'Dës Säit uleeën',
'delete' => 'Läschen',
'deletethispage' => 'Dës Säit läschen',
'undelete_short' => '$1 {{PLURAL:$1|Versioun|Versioune}} restauréieren',
'viewdeleted_short' => '{{PLURAL:$1|Eng geläschte Versioun|$1 geläschte Versioune}} weisen',
'protect' => 'Spären',
'protect_change' => 'änneren',
'protectthispage' => 'Dës Säit schützen',
'unprotect' => 'Spär änneren',
'unprotectthispage' => "D'Spär vun dëser Säit änneren",
'newpage' => 'Nei Säit',
'talkpage' => 'Diskussioun',
'talkpagelinktext' => 'Diskussioun',
'specialpage' => 'Spezialsäit',
'personaltools' => 'Perséinlech Tools',
'postcomment' => 'Neien Abschnitt',
'articlepage' => 'Säit',
'talk' => 'Diskussioun',
'views' => 'Affichagen',
'toolbox' => 'Geschirkëscht',
'userpage' => 'Benotzersäit',
'projectpage' => 'Meta-Text',
'imagepage' => 'Billersäit kucken',
'mediawikipage' => 'Säit mat de Message weisen',
'templatepage' => 'Schabloune(säit) weisen',
'viewhelppage' => 'Hëllefssäit weisen',
'categorypage' => 'Kategoriesäit weisen',
'viewtalkpage' => 'Diskussioun weisen',
'otherlanguages' => 'An anere Sproochen',
'redirectedfrom' => '(Virugeleet vu(n) $1)',
'redirectpagesub' => 'Viruleedungssäit',
'lastmodifiedat' => "Dës Säit gouf den $1 ëm $2 Auer fir d'lescht geännert.",
'viewcount' => 'Dës Säit gouf bis elo {{PLURAL:$1|emol|$1-mol}} ofgefrot.',
'protectedpage' => 'Gespaarte Säit',
'jumpto' => 'Wiesselen op:',
'jumptonavigation' => 'Navigatioun',
'jumptosearch' => 'sichen',
'view-pool-error' => "Pardon, d'Servere si fir de Moment iwwerlaascht.
Zevill Benotzer versichen dës Säit ze gesinn.
Waart w.e.g. e bëssen ier Dir versicht dës Säit nach emol opzeruffen.

$1",
'pool-timeout' => "Timeout bis d'Spär opgehuewen ass",
'pool-queuefull' => 'Pool-Queue ass voll',
'pool-errorunknown' => 'Onbekannte Feeler',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage) and the disambiguation template definition (see disambiguations).
'aboutsite' => 'Iwwer {{SITENAME}}',
'aboutpage' => 'Project:Iwwer',
'copyright' => 'Inhalt ass zur Verfügung gestallt ënnert der $1.<br />',
'copyrightpage' => '{{ns:project}}:Copyright',
'currentevents' => 'Aktualitéit',
'currentevents-url' => 'Project:Aktualitéit',
'disclaimers' => 'Impressum',
'disclaimerpage' => 'Project:Impressum',
'edithelp' => 'Hëllef beim Änneren',
'edithelppage' => 'Help:Wéi änneren ech eng Säit',
'helppage' => 'Help:Hëllef',
'mainpage' => 'Haaptsäit',
'mainpage-description' => 'Haaptsäit',
'policy-url' => 'Project:Richtlinnen',
'portal' => '{{SITENAME}}-Portal',
'portal-url' => 'Project:Communautéitssäit',
'privacy' => 'Dateschutz',
'privacypage' => 'Project:Dateschutz',

'badaccess' => 'Net genuch Rechter',
'badaccess-group0' => 'Dir hutt net déi néideg Rechter fir dës Aktioun duerchzeféieren.',
'badaccess-groups' => "D'Aktioun déi dir gewielt hutt, kann nëmme vu Benotzer aus {{PLURAL:$2|der Grupp|enger vun de Gruppen}} $1 duerchgefouert ginn.",

'versionrequired' => 'Versioun $1 vu MediaWiki gëtt gebraucht',
'versionrequiredtext' => "D'Versioun $1 vu MediaWiki ass néideg, fir dës Säit ze benotzen.
Kuckt d'[[Special:Version|Versiounssäit]].",

'ok' => 'OK',
'retrievedfrom' => 'Vun „$1“',
'youhavenewmessages' => 'Dir hutt $1 ($2).',
'newmessageslink' => 'nei Messagen',
'newmessagesdifflink' => 'Lescht Ännerung',
'youhavenewmessagesfromusers' => 'Dir hutt $1 vu(n) {{PLURAL:$3|engem anere Benotzer|$3 anere Benotzer}} ($2).',
'youhavenewmessagesmanyusers' => 'Dir hutt $1 vu ville Benotzer ($2)',
'newmessageslinkplural' => '{{PLURAL:$1|een neie Message|nei Message}}',
'newmessagesdifflinkplural' => 'lescht {{PLURAL:$1|Ännerung|Ännerungen}}',
'youhavenewmessagesmulti' => 'Dir hutt nei Messagen op $1',
'editsection' => 'änneren',
'editold' => 'änneren',
'viewsourceold' => 'Quellcode kucken',
'editlink' => 'änneren',
'viewsourcelink' => 'Quelltext weisen',
'editsectionhint' => 'Abschnitt änneren: $1',
'toc' => 'Inhaltsverzeechnes',
'showtoc' => 'weisen',
'hidetoc' => 'verstoppen',
'collapsible-collapse' => 'Zesummeklappen',
'collapsible-expand' => 'Opklappen',
'thisisdeleted' => '$1 kucken oder zrécksetzen?',
'viewdeleted' => 'Weis $1?',
'restorelink' => '$1 geläscht {{PLURAL:$1|Versioun|Versiounen}}',
'feedlinks' => 'Feed:',
'feed-invalid' => 'Net valabelen Typ vun Abonnements-Feed',
'feed-unavailable' => "''Syndication Feeds'' stinn net zur Verfügung.",
'site-rss-feed' => 'RSS-Feed fir $1',
'site-atom-feed' => 'Atom-Feed fir $1',
'page-rss-feed' => 'RSS-Feed fir "$1"',
'page-atom-feed' => 'Atom-Feed fir "$1"',
'red-link-title' => '$1 (Säit gëtt et net)',
'sort-descending' => 'Vu grouss op kleng zortéieren',
'sort-ascending' => 'Vu kleng op grouss zortéieren',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main' => 'Säit',
'nstab-user' => 'Benotzersäit',
'nstab-media' => 'Media Säit',
'nstab-special' => 'Spezialsäit',
'nstab-project' => 'Projetssäit:',
'nstab-image' => 'Fichier',
'nstab-mediawiki' => 'Systemmessage',
'nstab-template' => 'Schabloun',
'nstab-help' => 'Hëllef-Säit',
'nstab-category' => 'Kategorie',

# Main script and global functions
'nosuchaction' => 'Dës Aktioun gëtt et net',
'nosuchactiontext' => 'Déi Aktioun, déi an der URL ugi war, ass net valabel.
Méiglecherweis hutt dir Iech bei der URL vertippt, oder Dir hutt op en net korrekte Link geklickt.
Et kann awer och sinn datt et e Bug a(n) der Software op {{SITENAME}} gëtt.',
'nosuchspecialpage' => 'Spezialsäit gëtt et net',
'nospecialpagetext' => '<strong>Dir hutt eng Spezialsäit ofgefrot déi et net gëtt.</strong>

All Spezialsäiten déi et gëtt, sinn op der [[Special:SpecialPages|Lëscht vun de Spezialsäiten]] ze fannen.',

# General errors
'error' => 'Feeler',
'databaseerror' => 'Datebank Feeler',
'dberrortext' => 'En Datebank Syntax Feeler ass opgetrueden.
Dëst kann op e Feeler an der Software hiweisen.
De leschte versichten Datebank Query war:
<blockquote><code>$1</code></blockquote>
vun der Funktioun "<code>$2</code>".
D\'Datebank huet de Feeler "<samp>$3: $4</samp>" gemellt.',
'dberrortextcl' => 'En Datebank Syntax Feeler ass opgetrueden.
De leschten Datebank Query war:
"$1"
vun der Funktioun "$2".
D\'Datebank huet de Feeler "$3: $4" gemellt.',
'laggedslavemode' => "'''Opgepasst:''' Dës Säit ass net onbedéngt um neiste Stand.",
'readonly' => "D'Datebank ass gespaart",
'enterlockreason' => "Gitt w.e.g. e Grond u firwat d'Datebak gespaart ass, a wéi laang dës Spär ongeféier bestoe soll.",
'readonlytext' => "D'Datebank ass elo fir all Ännerunge gespaart, wahrscheinlech wéinst Maintenance vun der Datebank, duerno ass erëm alles beim alen.

Den Administrateur huet dës Erklärung uginn: $1",
'missing-article' => "Den Text „$1“ $2 gouf net an der Datebank fonnt.

Dat geschitt normalerweis duerch e Link op eng Säit déi geläscht oder geréckelt gouf.

Wann dat net de Fall ass, hutt Dir eventuell e Feeler an der Software fonnt.
Mellt dëst w.e.g. bei engem [[Special:ListUsers/sysop|Administrateur]] a vergiesst net d'URL unzeginn.",
'missingarticle-rev' => '(Versiounsnummer: $1)',
'missingarticle-diff' => '(Ënnerscheed tëscht Versiounen: $1, $2)',
'readonly_lag' => "D'Datebank gouf automatesch gespaart fir datt d'Zweetserveren (slaves) nees mat dem Haaptserver (master) synchron geschalt kënne ginn.",
'internalerror' => 'Interne Feeler',
'internalerror_info' => 'Interne Feeler: $1',
'fileappenderrorread' => '"$1" konnt während dem Derbäisetze net gelies ginn.',
'fileappenderror' => '"$1" konnt net bäi "$2" derbäigesat ginn.',
'filecopyerror' => 'De Fichier "$1" konnt net op "$2" kopéiert ginn.',
'filerenameerror' => 'De Fichier "$1" konnt net op "$2" ëmbenannt ginn.',
'filedeleteerror' => 'De Fichier "$1" konnt net geläscht ginn.',
'directorycreateerror' => 'De Repertoire "$1" konnt net geschafe ginn.',
'filenotfound' => 'De Fichier "$1" gouf net fonnt.',
'fileexistserror' => 'De Fichier "$1" konnt net geschriwwe ginn, well et dee Fichier scho gëtt.',
'unexpected' => 'Onerwaarte Wäert: "$1"="$2".',
'formerror' => 'Feeler: Dat wat Dir aginn hutt konnt net verschafft ginn.',
'badarticleerror' => 'Dës Aktioun kann net op dëser Säit duerchgefouert ginn.',
'cannotdelete' => 'D\'Bild oder d\'Säit "$1" konnt net geläscht ginn.
Et ka sinn datt et scho vun engem Anere geläscht gouf.',
'cannotdelete-title' => 'D\'Säit "$1" kann net geläscht ginn',
'delete-hook-aborted' => "D'Läsche gouf vun enger Schnëttstell (hook) ofgebrach.
Eng Erklärung gouf net ginn.",
'badtitle' => 'Schlechten Titel',
'badtitletext' => 'De gewënschten Titel ass net valabel, eidel, oder een net korrekten Interwiki Link.',
'perfcached' => 'Dës Date kommen aus dem Tëschespäicher a si méiglecherweis net aktuell. Maximal {{PLURAL:$1|ee Resultat ass|$1 Resultater sinn}} am Tësche späicher disponibel.',
'perfcachedts' => "Dës Donnéeë kommen aus dem Tëschespäicher, a goufe fir d'lescht den $1 aktualiséiert. Maximal {{PLURAL:$4|ee Resultat ass|$4 Resultater sinn}} am Tëschespäicher disponibel.",
'querypage-no-updates' => "D'Aktualiséierung vun dëser Säit ass zur Zäit ausgeschalt. D'Date gi bis op weideres net aktualiséiert.'''",
'wrong_wfQuery_params' => 'Falsche Parameter fir wfQuery()<br />
Funktioun: $1<br />
Ufro: $2',
'viewsource' => 'Quelltext kucken',
'viewsource-title' => 'Quelltext vun der Säit $1 weisen',
'actionthrottled' => 'Dës Aktioun gouf gebremst',
'actionthrottledtext' => 'Fir géint de Spam virzegoen, ass dës Aktioun esou programméiert datt Dir se an enger kuerzer Zäit nëmme limitéiert dacks maache kënnt. Dir hutt dës Limite iwwerschratt. Versicht et w.e.g. an e puer Minutten nach eng Kéier.',
'protectedpagetext' => 'Dës Säit ass fir Ännerunge gespaart.',
'viewsourcetext' => 'Dir kënnt de Quelltext vun dëser Säit kucken a kopéieren:',
'viewyourtext' => "Dir kënnt de Quelltext vun '''Ären Ännerungen''' op dëser Säit kucken a kopéieren:",
'protectedinterface' => "Op dëser Säit fannt Dir Text fir de Sprooch-Interface vun der Software op dëser Wiki an dofir ass si gespaart fir Mëssbrauch ze verhënneren.

Fir Iwwersetzungen fir all Wikien bäizesetzen oder z'änneren gitt w.e.g. op [//translatewiki.net/ translatewiki.net], de MediaWiki-Lokalisatiouns-Projet.",
'editinginterface' => "'''Opgepasst:''' Dir sidd am Gaang, eng Säit z'änneren, déi do ass, fir Interface-Text fir d'Software ze liwweren. 
Ännerungen op dëser Säit änneren den Interface-Text, jee no Kontext, op allen oder verschiddene Säiten, déi vun alle Benotzer op dëser Wiki gesi ginn. 
Fir d'Iwwersetzungen fir all Wikien derbäizesetzen oder z'änneren gitt w.e.g. op [//translatewiki.net translatewiki.net], de MediaWiki-Lokalisatiouns-Projet.",
'sqlhidden' => '(SQL-Offro verstoppt)',
'cascadeprotected' => 'Dës Säit gouf fir Ännerunge gespaart, well se duerch Cascadeprotectioun vun {{PLURAL:$1|dëser Säit|dëse Säite}} gespaart ass mat der Cascadenoptioun:
$2',
'namespaceprotected' => "Dir hutt net déi néideg Rechter fir d'Säiten am Nummraum '''$1''' ze änneren.",
'customcssprotected' => "Dir hutt net d'Recht dës CSS-Säit z'änneren, well dorop déi perséinlech Astellunge vun engem anere Benotzer gespäichert sinn.",
'customjsprotected' => "Dir hutt net d'Recht dës JavaScript-Säit z'änneren, well dorop déi perséinlech Astellunge vun engem anere Benotzer gespäichert sinn.",
'ns-specialprotected' => 'Spezialsäite kënnen net verännert ginn.',
'titleprotected' => "Eng Säit mat dësem Numm kann net ugeluecht ginn. Dës Spär gouf vum [[User:$1|$1]] gemaach deen als Grond ''$2'' uginn huet.",
'invalidtitle-knownnamespace' => 'Net valabelen Titel mam Nummraum "$2" a mam Text "$3"',
'invalidtitle-unknownnamespace' => 'Net valabelen Titel mat der onbekannter Nummraum-Zuel $1 a mam Text "$2"',
'exception-nologin' => 'Net ageloggt',
'exception-nologin-text' => 'Dës Säit oder Aktioun erfuerdert datt Dir op dëser Wiki ageloggt sidd.',

# Virus scanner
'virus-badscanner' => "Schlecht Configuratioun: onbekannte  Virescanner: ''$1''",
'virus-scanfailed' => 'De Scan huet net fonctionnéiert (Code $1)',
'virus-unknownscanner' => 'onbekannten Antivirus:',

# Login and logout pages
'logouttext' => "'''Dir sidd elo ausgeloggt.'''

Dir kënnt {{SITENAME}} elo anonym benotzen, oder Iech <span class='plainlinks'>[$1 erëm aloggen]</span>.

Opgepasst: Op verschiddene Säite kann et nach esou aus gesinn, wéi wann Dir nach ageloggt wiert, bis Dir Ärem Browser säin Tëschespäicher (cache) eidel maacht.",
'welcomecreation' => '== Wëllkomm, $1! ==
Äre Kont gouf kreéiert.
Denkt drun, Är [[Special:Preferences|{{SITENAME}}-Astellungen]] unzepassen.',
'yourname' => 'Benotzernumm:',
'yourpassword' => 'Passwuert:',
'yourpasswordagain' => 'Passwuert nach eemol antippen:',
'remembermypassword' => 'Meng Umeldung op dësem Computer (fir maximal $1 {{PLURAL:$1|Dag|Deeg}}) verhalen',
'securelogin-stick-https' => 'Nom Umelle mat HTTPS verbonn bleiwen',
'yourdomainname' => 'Ären Domain',
'password-change-forbidden' => 'Dir däerft op dëser Wiki Passwierder net änneren.',
'externaldberror' => 'Entweder ass e Feeler bei der externer Authentifizéierung geschitt, oder Dir däerft Ären externe Benotzerkont net aktualiséieren.',
'login' => 'Aloggen',
'nav-login-createaccount' => 'Aloggen / Benotzerkont uleeën',
'loginprompt' => "Fir sech op {{SITENAME}} aloggen ze kënnen, mussen d'Cookien aktivéiert sinn.",
'userlogin' => 'Aloggen / Benotzerkont uleeën',
'userloginnocreate' => 'Umellen',
'logout' => 'Ofmellen',
'userlogout' => 'Ausloggen',
'notloggedin' => 'Net ageloggt',
'nologin' => "Hutt Dir kee Benotzerkont? '''$1'''.",
'nologinlink' => 'Neie Benotzerkont maachen',
'createaccount' => 'Neie Kont opmaachen',
'gotaccount' => "Dir hutt schonn e Benotzerkont? '''$1'''.",
'gotaccountlink' => 'Umellen',
'userlogin-resetlink' => "Hutt Dir d'Detailer vun Ärem Login vergiess?",
'createaccountmail' => 'Via E-Mail',
'createaccountreason' => 'Grond:',
'badretype' => 'Är Passwierder stëmmen net iwwerdeneen.',
'userexists' => 'De Benotzernumm deen agi gouf gëtt scho benotzt.
Sicht Iech een anere Benotzernumm.',
'loginerror' => 'Feeler beim Aloggen',
'createaccounterror' => 'Benotzerkont konnt net opgemaach ginn: $1',
'nocookiesnew' => "De Benotzerkont gouf ugeluecht, awer Dir sidd net ageloggt.
{{SITENAME}} brauch fir dës Funktioun Cookien.
Dir hutt d'Cookien desaktivéiert.
Aktivéiert déi w.e.g. a loggt Iech da mat Ärem neie Benotzernomm a mat dem respektive Passwuert an.",
'nocookieslogin' => "{{SITENAME}} benotzt Cookië beim Umelle vun de Benotzer.
Dir hutt Cookien ausgeschalt.
Aktivéiert d'Cookien w.e.g. a versicht et nach eng Kéier.",
'nocookiesfornew' => 'De Benotzerkont gouf net ugeluecht, well mir seng Quell net bestëmme konnten.
Vergewëssert Iech datt Dir Cookien zouloosst, luet dës Säit nei a probéiert nach emol.',
'noname' => 'Dir hutt kee gëltege Benotzernumm uginn.',
'loginsuccesstitle' => 'Umeldung huet geklappt',
'loginsuccess' => "'''Dir sidd elo als \"\$1\" op {{SITENAME}} ugemellt.'''",
'nosuchuser' => 'Et gëtt kee Benotzernumm mam Numm "$1".
Beim Benotzernumm gëtt tëschent groussen a klenge Buschtawen ënnerscheet (casesensitive).
Kuckt w.e.g. op d\'Schreifweis richteg ass, oder [[Special:UserLogin/signup|maacht en neie Benotzerkont op]].',
'nosuchusershort' => 'De Benotzernumm "$1" gëtt et net.
Kuckt w.e.g. op d\'Schreifweis richteg ass.',
'nouserspecified' => 'Gitt w.e.g. e Benotzernumm un.',
'login-userblocked' => 'Dëse Benotzer ass gespaart. Aloggen ass net erlaabt.',
'wrongpassword' => 'Dir hutt e falscht (oder kee) Passwuert aginn. Probéiert w.e.g. nach eng Kéier.',
'wrongpasswordempty' => "D'Passwuert dat Dir aginn hutt war eidel.
Probéiert w.e.g. nach eng Kéier.",
'passwordtooshort' => 'Passwierder musse mindestens {{PLURAL:$1|1 Zeeche|$1 Zeeche}} laang sinn.',
'password-name-match' => 'Äert Passwuert muss verschidde vun Ärem Benotzernumm sinn.',
'password-login-forbidden' => "D'Benotze vun dësem Benotzernumm a Passwuert gouf verbueden.",
'mailmypassword' => 'Neit Passwuert per E-Mail kréien',
'passwordremindertitle' => 'Neit Passwuert fir ee {{SITENAME}}-Benotzerkont',
'passwordremindertext' => 'Iergendeen (waarscheinlech Dir, mat der IP-Adress $1) huet en neit Passwuert fir {{SITENAME}} ($4) gefrot. Een temporäert Passwuert fir de Benotzer $2 gouf ugeluecht an et ass: $3. Wann et dat ass, wat Dir wollt, da sollt Dir Iech elo aloggen an en neit Passwuert eraussichen. Äert temporäert Passwuert leeft a(n) {{PLURAL:$5|engem Dag| $5 Deeg}} of.

Wann een aneren dës Ufro sollt gemaach hunn oder wann Dir Iech an der Zwëschenzäit nees un Äert Passwuert erënnere kënnt, an Dir Äert Passwuert net ännere wëllt, da kënnt Dir weider Äert aalt Passwuert benotzen.',
'noemail' => 'De Benotzer "$1" huet keng E-Mailadress uginn.',
'noemailcreate' => 'Dir musst eng valabel E-Mailadress uginn',
'passwordsent' => 'Een neit Passwuert gouf un déi fir de Benotzer "$1" gespäichert E-Mailadress geschéckt.
Mellt Iech w.e.g. domat un, soubal Dir et kritt hutt.',
'blocked-mailpassword' => "Déi vun Iech benotzten IP-Adress ass fir d'Ännere vu Säite gespaart. Fir Mëssbrauch ze verhënneren, gouf d'Méiglechkeet fir een neit Passwuert unzefroen och gespaart.",
'eauthentsent' => "Eng Confirmatiouns-E-Mail gouf un déi Adress geschéckt déi Dir uginn hutt.<br />
Ier iergendeng E-Mail vun anere Benotzer op dee Kont geschéckt ka ginn, musst Dir als éischt d'Instructiounen an der Confirmatiouns-E-Mail befollegen, fir ze bestätegen datt de Kont wierklech Ären eegenen ass.",
'throttled-mailpassword' => "An {{PLURAL:$1|der leschter Stonn|de leschte(n) $1 Stonnen}} gouf eng Erënenrung un d'Passwuert verschéckt.
Fir de Mëssbrauch vun dëser Funktioun ze verhënneren kann nëmmen all {{PLURAL:$1|Stonn|$1 Stonnen}} esou eng Erënnerung verschéckt ginn.",
'mailerror' => 'Feeler beim Schécke vun der E-Mail: $1',
'acct_creation_throttle_hit' => 'Visiteure vun dëser Wiki déi Är IP-Adress hu {{PLURAL:$1|schonn $1 Benotzerkont|scho(nn) $1 Benotzerkonten}} an de leschten Deeg opgemaach, dëst ass déi maximal Zuel déi an dësem Zäitraum erlaabt ass.
Dofir kënne Visiteure déi dës IP-Adress benotzen den Ament keng Benotzerkonten opmaachen.',
'emailauthenticated' => 'Är E-Mailadress gouf den $2 ëm $3 Auer bestätegt.',
'emailnotauthenticated' => 'Är E-Mail Adress gouf <strong>nach net confirméiert</strong>.<br />
Dowéinst ass et bis ewell net méiglech, fir déi folgend Funktiounen E-Mailen ze schécken oder ze kréien.',
'noemailprefs' => 'Gitt eng E-Mailadress bei Ären Astellungen un, fir datt déi Funktioune funktionéieren.',
'emailconfirmlink' => 'Confirméiert är E-Mailadress w.e.g..',
'invalidemailaddress' => 'Dës E-Mailadress gëtt net akzeptéiert well se en ongëltegt Format (z.B. ongëlteg Zeechen) ze hu schéngt.
Gitt eng valabel E-Mailadress an oder loosst dëst Feld eidel.',
'cannotchangeemail' => 'Mailadresse vu Benotzerkonte kënnen op dëser Wiki net geännert ginn.',
'emaildisabled' => 'Dëse Site ka keng Maile schécken.',
'accountcreated' => 'De Kont gouf geschaf',
'accountcreatedtext' => 'De Benotzerkont fir $1 gouf geschaf.',
'createaccount-title' => 'Opmaache vun engem Benotzerkont op {{SITENAME}}',
'createaccount-text' => 'Et gouf e Benotzerkont "$2" fir Iech op {{SITENAME}} ($4) ugeluecht mat dem Passwuert "$3".
Dir sollt Iech aloggen an Äert Passwuert elo änneren.

Wann dëse Benotzerkont ongewollt ugeluecht gouf, kënnt Dir dës Noriicht einfach ignoréieren.',
'usernamehasherror' => "Am Benotzernumm däerfe keng ''hash'' Zeeche sinn",
'login-throttled' => "Dir hutt zevill dacks versicht d'Passwuert vun dësem Benotzerkont anzeginn.
Waart w.e.g. ier Dir et nach eng Kéier versicht.",
'login-abort-generic' => 'Dir sidd net ageloggt - Aloggen ofgebrach',
'loginlanguagelabel' => 'Sprooch: $1',
'suspicious-userlogout' => 'Är Ufro fir Iech auszeloggen gouf refuséiert well et esou ausgesäit wéi wann se vun engem Futtise Browser oder Proxy-Tëschespäicher kënnt.',

# E-mail sending
'php-mail-error-unknown' => 'Onbekannte Feeler an der PHP-Mail-Fonctioun',
'user-mail-no-addy' => 'Huet versicht eng Mail ouni Mailadress ze schécken',

# Change password dialog
'resetpass' => 'Passwuert änneren',
'resetpass_announce' => 'Dir sidd mat engem temporären , per E-Mail geschéckte Code ageloggt.
Fir är Umeldung ofzeschléissen, musst Dir elo hei een neit Passwuert uginn:',
'resetpass_text' => '<!-- Schreiwt ären Text heihin-->',
'resetpass_header' => 'Passwuert vum Benotzerkont änneren',
'oldpassword' => 'Aalt Passwuert:',
'newpassword' => 'Neit Passwuert:',
'retypenew' => 'Neit Passwuert nach eemol antippen:',
'resetpass_submit' => 'Passwuert aginn an aloggen',
'resetpass_success' => 'Äert Passwuert gouf geännert!
Loggt Iech elo an ...',
'resetpass_forbidden' => 'Passwierder kënnen net geännert ginn.',
'resetpass-no-info' => 'Dir musst ageloggt sinn, fir direkt op dës Säit ze kommen.',
'resetpass-submit-loggedin' => 'Passwuert änneren',
'resetpass-submit-cancel' => 'Annulléieren',
'resetpass-wrong-oldpass' => 'Net valabelt temporäert oder aktuellt Passwuert.
Vläicht hutt Dir Äert Passwuert scho geännert oder en neit temporäert Passwuert ugefrot.',
'resetpass-temp-password' => 'Temporäert Passwuert:',

# Special:PasswordReset
'passwordreset' => 'Passwuert zrécksetzen',
'passwordreset-text' => 'Fëllt dëse Formulaire aus fir eng E-Mail Erënnerung vun den Detailer vun Ärem Benotzerkont ze kréien.',
'passwordreset-legend' => 'Passwuert zrécksetzen',
'passwordreset-disabled' => "D'Zerécksetze vum Passwuert ass op dëser Wiki ausgeschalt.",
'passwordreset-pretext' => '{{PLURAL:$1||Gitt eng vun dësen Donnéeën an}}',
'passwordreset-username' => 'Benotzernumm:',
'passwordreset-domain' => 'Domaine:',
'passwordreset-capture' => "D'Mail kucken?",
'passwordreset-capture-help' => 'Wann Dir dës Këscht ukräizt, gëtt de Mail (mam temporäre Passwuert) Iech gewisen an dem Benotzer geschéckt.',
'passwordreset-email' => 'E-Mailadress:',
'passwordreset-emailtitle' => 'Detailer vum Benotzerkont op{{SITENAME}}',
'passwordreset-emailelement' => 'Benotzernumm: $1
Temporärt Passwuert: $2',
'passwordreset-emailsent' => 'Eng Erënnerungs-Mail gouf geschéckt.',
'passwordreset-emailsent-capture' => "D'Erënnerungsmail gouf esou geschéckt wéi Dir se hei drënner gesitt.",
'passwordreset-emailerror-capture' => "D'Erënnerungsmail gouf esou geschéckt wéi Dir se hei drënner gesitt, awer de Benotzer konnt se net kréien: $1",

# Special:ChangeEmail
'changeemail' => 'Mailadress änneren',
'changeemail-header' => 'Mailadress vum Benotzerkont änneren',
'changeemail-text' => "Fëllt dëse Formulaire aus fir Är Mailadress z'änneren. Dir musst Äert Passwuert aginn fir dës Ännerung ze confirméieren.",
'changeemail-no-info' => 'Dir musst ageloggt sinn, fir direkt op dës Säit ze kommen.',
'changeemail-oldemail' => 'Aktuell Mailadress:',
'changeemail-newemail' => 'Nei Mailadress:',
'changeemail-none' => '(keng)',
'changeemail-submit' => 'Mailadress änneren',
'changeemail-cancel' => 'Ofbriechen',

# Edit page toolbar
'bold_sample' => 'Fettgedréckten Text',
'bold_tip' => 'Fettgedréckten Text',
'italic_sample' => 'Kursiven Text',
'italic_tip' => 'Kursiven Text',
'link_sample' => 'Link-Text',
'link_tip' => 'Interne Link',
'extlink_sample' => 'http://www.example.com Link Titel',
'extlink_tip' => 'Externe Link (Vergiesst net den http:// Prefix)',
'headline_sample' => 'Titel Text',
'headline_tip' => 'Iwwerschrëft vum Niveau 2',
'nowiki_sample' => 'Net-formatéierten Text hei androen',
'nowiki_tip' => 'Wiki-Format ignoréieren',
'image_sample' => 'Beispill.jpg',
'image_tip' => 'Bildlink',
'media_sample' => 'Beispill.ogg',
'media_tip' => 'Link op e Medieichier',
'sig_tip' => 'Är Ënnerschrëft mat Zäitstempel',
'hr_tip' => 'Horizontal Linn (mat Mooss gebrauchen)',

# Edit pages
'summary' => 'Resumé:',
'subject' => 'Sujet/Iwwerschrëft:',
'minoredit' => 'Dëst ass eng kleng Ännerung',
'watchthis' => 'Dës Säit iwwerwaachen',
'savearticle' => 'Säit späicheren',
'preview' => 'Kucken ouni ofzespäicheren',
'showpreview' => 'Kucken ouni ofzespäicheren',
'showlivepreview' => 'Live-Kucken ouni ofzespäicheren',
'showdiff' => 'Ännerunge weisen',
'anoneditwarning' => "'''Opgepasst:''' Dir sidd net ageloggt. Dowéinst gëtt amplaz vun engem Benotzernumm Är IP Adress am Historique vun dëser Säit gespäichert.",
'anonpreviewwarning' => "''Dir sidd net ageloggt. Wann Dir ofspäichert gëtt Är IP-Adress an der Lëscht vun de Versioune vun dëser Säit enregistréiert.''",
'missingsummary' => "'''Erënnerung:''' Dir hutt kee Resumé aginn.
Wann Dir nacheemol op \"{{int:savearticle}}\" klickt, gëtt Är Ännerung ouni Resumé ofgespäichert.",
'missingcommenttext' => 'Gitt w.e.g. eng Bemierkung an.',
'missingcommentheader' => "'''Denkt drun:''' Dir hutt keen Titel/Sujet fir dës Bemierkung aginn.
Wann Dir nach en Kéier op \"{{int:savearticle}}\" klickt da gëtt Är Ännerung ouni Titel gespäichert.",
'summary-preview' => 'Resumé kucken ouni ofzespäicheren:',
'subject-preview' => 'Sujet/Iwwerschrëft kucken:',
'blockedtitle' => 'Benotzer ass gespaart',
'blockedtext' => "Äre Benotzernumm oder är IP Adress gouf gespaart.

D'Spär gouf vum \$1 gemaach. Als Grond gouf ''\$2'' uginn.

* Ufank vun der Spär: \$8
* Enn vun der Spär: \$6
* Spär betrëfft: \$7

Dir kënnt den/d' \$1 kontaktéieren oder ee vun den aneren [[{{MediaWiki:Grouppage-sysop}}|Administrateure]] fir iwwer d'Spär ze schwätzen.

Dëst sollt Der besonnesch maachen, wann Der d'Gefill hutt, datt de Grond fir d'Spären net bei Iech läit.
D'Ursaach dofir ass an deem Fall, datt der eng dynamesch IP hutt, iwwert en Access-Provider, iwwer deen och aner Leit fueren.
Aus deem Grond ass et recommandéiert, sech e Benotzernumm zouzeleeën, fir all Mëssverständnes z'evitéieren.

Dir kënnt d'Funktioun \"Dësem Benotzer eng E-Mail schécken\" nëmme benotzen, wann Dir eng gëlteg E-Mail Adress bei Ären [[Special:Preferences|Astellungen]] aginn hutt.
Är aktuell-IP Adress ass \$3 an d'Nummer vun der Spär ass #\$5.
Schreift all dës Informatioune w.e.g. bei all Ufro derbäi.",
'autoblockedtext' => 'Är IP-Adress gouf automatesch gespaart, well se vun engem anere Benotzer gebraucht gouf, an dee vum $1 gespaart gouf.
De Grond dofir war:

:\'\'$2\'\'

* Ufank vun der Spär: $8
* Dauer vun der Spär: $6
* D\'Spär leeft of: $7

Dir kënnt de(n) $1 oder soss een [[{{MediaWiki:Grouppage-sysop}}|Administrateur]] kontaktéieren, fir iwwer déi Spär ze diskutéieren.

Bedenkt datt Dir d\'Fonctioun "Dësem Benotzer eng E-Mail schécken" benotze kënnt wann Dir eng gëlteg E-Mailadress an Ären [[Special:Preferences|Astellungen]] uginn hutt a wann dat net fir Iech gespaart gouf.

Är aktuell IP-Adress ass $3 an d\'Nummer vun Ärer Spär ass $5.
Gitt dës Donnéeë w.e.g bei allen Ufroen zu dëser Spär un.',
'blockednoreason' => 'Kee Grond uginn',
'whitelistedittext' => 'Dir musst Iech $1, fir Säiten änneren ze kënnen.',
'confirmedittext' => 'Dir musst är E-Mail-Adress confirméieren, ier Dir Ännerunge maache kënnt.
Gitt w.e.g. eng E-Mailadrss a validéiert se op äre [[Special:Preferences|Benotzerastellungen]].',
'nosuchsectiontitle' => 'Et gëtt keen esou en Abschnitt',
'nosuchsectiontext' => "Dir hutt versicht en Abschnitt z'änneren deen et net gëtt.
Et ka sinn datt e geännert oder geläscht gouf iwwerdeems wou Dir d'Säit gekuckt hutt.",
'loginreqtitle' => 'Umeldung néideg',
'loginreqlink' => 'aloggen',
'loginreqpagetext' => 'Dir musst Iech $1, fir aner Säite liesen zu kënnen.',
'accmailtitle' => 'Passwuert gouf geschéckt.',
'accmailtext' => "En zoufällegt Passwuert fir [[User talk:$1|$1]] gouf op $2 geschéckt.

D'Passwuert fir dësen neie Benotzerkont kann op der ''[[Special:ChangePassword|Passwuert ännere]]'' Säit beim Alogge geännert ginn.",
'newarticle' => '(Nei)',
'newarticletext' => "Dir hutt op e Link vun enger Säit geklickt, déi et nach net gëtt. Fir déi Säit unzeleeën, gitt w.e.g. Ären Text an déi Këscht hei drënner an (kuckt d'[[{{MediaWiki:Helppage}}|Hëllef Säit]] fir méi Informatiounen). Wann Dir duerch een Iertum heihi komm sidd, da klickt einfach op de Knäppchen '''Zréck''' vun Ärem Browser.",
'anontalkpagetext' => "---- ''Dëst ass d'Diskussiounssäit fir en anonyme Benotzer deen nach kee Kont opgemaach huet oder en net benotzt. Dowéinst musse mir d'IP Adress benotzen, fir de Benotzer z'identifizéieren.
Sou eng IP Adress ka vun e puer Benotzer gedeelt ginn.
Wann Dir en anonyme Benotzer sidd an Dir irrelevant Kommentäre krut, [[Special:UserLogin/signup|maacht w.e.g. e Kont op]] oder [[Special:UserLogin|loggt Iech an]], fir weider Verwiesselunge mat aneren anonyme Benotzer ze verhënneren.''",
'noarticletext' => 'Dës Säit huet momentan keen Text.
Dir kënnt op anere Säiten no [[Special:Search/{{PAGENAME}}|dësem Säitentitel sichen]],
<span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} an den entspriechende Logbicher nokucken] oder [{{fullurl:{{FULLPAGENAME}}|action=edit}} esou eng Säit uleeën]</span>.',
'noarticletext-nopermission' => 'Elo ass keen Text op dëser Säit.
Dir kënnt op anere Säiten [[Special:Search/{{PAGENAME}}|no dësem Sàitentitel sichen]], oder <span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} an de Logbicher sichen]</span>, mä Dir hutt net déi néideg Rechter fir dës Säit unzeleeën.',
'missing-revision' => 'D\'Versioun #$1 vun der Säit mam Numm "{{PAGENAME}}" gëtt et net.

Dat geschitt normalerweis wann Dir op e vereelste Link vun enger Versioun vun enger Säit klickt déi geläscht ginn ass.
Detailer fannt Dir am [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} Logbuch vum Läschen].',
'userpage-userdoesnotexist' => 'De Benotzerkont "<nowiki>$1</nowiki>" ass net registréiert.
Iwwerpréift w.e.g. op Dir dës Säit uleeën/ännere wëllt.',
'userpage-userdoesnotexist-view' => 'De Benotzerkont "$1" ass net registréiert.',
'blocked-notice-logextract' => 'Dëse Benotzer ass elo gespaart.
Déi lescht Entrée am Logbuch vun de Späre steet als Referenz hei drënner:',
'clearyourcache' => "'''Opgepasst - Nom Späichere muss der Ärem Browser seng Cache eidel maachen, fir d'Ännerungen ze gesinn.'''
* '''Firefox / Safari:''' Halt ''Shift'' während Dir ''Reload'' klickt oder dréckt entweder ''Ctrl-F5'' oder ''Ctrl-R'' (''⌘-R'' op engem Mac);
* '''Google Chrome:''' Dréckt ''Ctrl-Shift-R'' (''⌘-Shift-R'' op engem Mac)
* '''Internet Explorer:''' dréckt ''Ctrl'' während Dir op ''Refresh'' klickt oder dréckt ''Ctrl-F5.''
* '''Opera:''' maacht de Cache eidel an ''Tools → Preferences;''",
'usercssyoucanpreview' => "'''Tipp:''' Benotzt de \"{{int:showpreview}}\"-Knäppchen, fir Ären neien CSS virum Späicheren ze testen.",
'userjsyoucanpreview' => "'''Tipp:''' Benotzt de ''{{int:showpreview}}''-Knäppchen, fir Ären neie JavaScript virum Späicheren ze testen.",
'usercsspreview' => "'''Bedenkt: Dir kuckt just är Benotzer CSS.
Si gouf nach net gespäichert!'''",
'userjspreview' => "'''Denkt drun datt Dir Äre Javascript nëmmen test.'''
'''En ass nach net gespäichert!'''",
'sitecsspreview' => "'''Denkt drun datt Dir dësen CSS just kuckt.
E gouf nach net gespäichert!'''",
'sitejspreview' => "'''Denkt drun datt Dir dëse JavaScript-Code just kuckt.
E gouf nach net gespäichert!'''",
'userinvalidcssjstitle' => "'''Opgepasst:''' Et gëtt keen Ausgesinn (skin) \"\$1\".
Denkt drun datt eegen .css an .js Säiten e kleng geschriwwenen Titel benotzen, z. Bsp. {{ns:user}}:Foo/vector.css am Géigesaz zu {{ns:user}}:Foo/Vector.css.",
'updated' => '(Geännert)',
'note' => "'''Notiz:'''",
'previewnote' => "'''Denkt drun datt dëst nëmmen eng net gespäichert Versioun ass.'''
Är Ännerunge sinn nach net gespäichert!",
'continue-editing' => "Gitt weider an de Beräich fir z'änneren",
'previewconflict' => 'Dir gesitt an dem ieweschten Textfeld wéi den Text ausgesi wäert, wann Dir späichert.',
'session_fail_preview' => "'''Är Ännerung konnt net gespäichert gi well d'Date vun Ärer Sessioun verluergaange sinn.
Versicht et w.e.g. nach eng Kéier.
Wann de Problem dann ëmmer nach bestoe sollt, da versicht Iech [[Special:UserLogout|auszeloggen]] an dann erëm anzeloggen.'''",
'session_fail_preview_html' => "'''Är Ännerung konnt net gespäichert gi well d'Date vun Ärer Sessioun verluergaange sinn.'''

''Well op {{SITENAME}} ''raw HTML'' aktivéiert ass, gouf d'Uweise vun der nach net gespäicherter Versioun ausgeblennt fir JavaScript-Attacken ze vermeiden.''

'''Wann dir eng berechtegt Ännerung maache wëllt, da versicht et w.e.g. nach eng Kéier.
Wann de Problem dann ëmmer nach bestoe sollt, versicht Iech [[Special:UserLogout|auszeloggen]] an dann erëm anzeloggen.'''",
'token_suffix_mismatch' => "'''Är Ännerung gouf refuséiert, well Äre Browser Zeechen am Ännerungs-Identifiant verännert huet.'''
D'Ännerung gouf refuséiert, fir ze verhënneren datt den Text op der Säit onliesbar gëtt.
Dëst geschitt heiandsdo wann Dir en anonyme Proxy-Service um Internet benotzt.",
'edit_form_incomplete' => "'''En Deel vum Ännerungsformulaire koum net um Server un; iwwerpréift w.e.g ob Är Ännerunge komplett sinn a probéiert nach emol.'''",
'editing' => 'Ännere vu(n) $1',
'creating' => '$1 gëtt ugeluecht',
'editingsection' => 'Ännere vu(n) $1 (Abschnitt)',
'editingcomment' => 'Ännere vu(n) $1 (neien Abschnitt)',
'editconflict' => 'Ännerungskonflikt: $1',
'explainconflict' => "En anere Benotzer huet un dëser Säit geschafft, während Dir amgaange waart, se z'änneren.
Dat iewescht Textfeld weist Iech den aktuellen Text.
Är Ännerunge gesitt Dir am ënneschten Textfeld.
Dir musst Är Ännerungen an dat iewescht Textfeld androen.
'''Nëmmen''' den Text aus dem ieweschten Textfeld gëtt gehale wann Dir op \"{{int:savearticle}}\" klickt.",
'yourtext' => 'Ären Text',
'storedversion' => 'Gespäichert Versioun',
'nonunicodebrowser' => "'''OPGEPASST:''' Äre Browser ass net Unicode kompatibel. Ännert dat w.e.g. éier Dir eng Säit ännert.",
'editingold' => "'''OPGEPASST: Dir ännert eng al Versioun vun dëser Säit. Wann Dir späichert, sinn all rezent Versioune vun dëser Säit verluer.'''",
'yourdiff' => 'Ënnerscheeder',
'copyrightwarning' => "W.e.g. notéiert datt all Kontributiounen op {{SITENAME}} automatesch ënnert der $2 (kuckt $1 fir méi Informatiounen) verëffentlecht sinn.
Wann Dir net wëllt datt är Texter vun anere Mataarbechter verännert, geläscht a weiderverdeelt kënne ginn, da setzt näischt heihinner.<br />
Dir verspriecht ausserdeem datt Dir dësen Text selwer verfaasst hutt, oder aus dem Domaine public oder ähnleche Ressource kopéiert hutt.
'''DROT KEE COPYRECHTLECH GESCHÜTZTE CONTENU OUNI ERLAABNES AN!'''",
'copyrightwarning2' => "W.e.g. notéiert datt all Kontributiounen op {{SITENAME}} vun anere Benotzer verännert oder geläscht kënne ginn. Wann dir dat net wëllt, da setzt näischt heihinner.<br />
Dir verspriecht ausserdeem datt dir dësen Text selwer verfaasst hutt, oder aus dem Domaine public oder anere fräie Quelle kopéiert hutt. (cf. $1 fir méi Detailler). '''DROT KEE COPYRECHTLECH GESCHÜTZTE CONTENU AN!'''",
'longpageerror' => "'''FEELER: Den Text, den Dir Versicht ze späicheren, huet {{PLURAL:$1|1 Kilobyte|$1 Kilobytes}}. Dëst ass méi wéi den erlaabte Maximum vun  {{PLURAL:$2|1 Kilobyte|$2 Kilobytes}}''' Dofir kann den Text net gespäichert ginn.",
'readonlywarning' => "'''OPGEPASST: D'Datebank gouf wéinst Maintenanceaarbechte fir Säitenännerunge gespaart, dofir kënnt Dir déi Säit den Ament net ofspäicheren. Versuergt den Text a versicht d'Ännerunge méi spéit nach emol ze maachen.'''

Den Administrateur den d'Datebank gespaart huet, huet dës Erklärung ginn: $1",
'protectedpagewarning' => "'''OPGEPASST: Dës Säit gouf gespaart a kann nëmme vun engem Administrateur geännert ginn.''' Déi lescht Zeil aus de Logbicher fannt Dir zu Ärer Informatioun hei ënnendrënner.",
'semiprotectedpagewarning' => "'''Bemierkung:''' Dës Säit gouf esou gespaart, datt nëmme ugemellte Benotzer s'ännere kënnen. Déi lescht Zeil aus de Logbicher fannt Dir zu Ärer Informatioun hei ënnendrënner.",
'cascadeprotectedwarning' => "'''Passt op:''' Dës Säit gouf gespaart a kann nëmme vu Benotzer mat Administreursrechter geännert ginn. Si ass an dës {{PLURAL:$1|Säit|Säiten}} agebonnen, déi duerch Cascadespäroptioun gespaart {{PLURAL:$1|ass|sinn}}:'''",
'titleprotectedwarning' => "'''OPGEPASST: Dës Säit gouf gespaart sou datt [[Special:ListGroupRights|spezifesch Rechter]] gebraucht gi fir se uleeën ze kënnen.''' Déi lescht Zeil aus de Logbicher fannt Dir zu Ärer Informatioun hei ënnendrënner.",
'templatesused' => '{{PLURAL:$1|Schabloun|Schablounen}} déi op dëser Säit am Gebrauch sinn:',
'templatesusedpreview' => '{{PLURAL:$1|Schabloun|Schablounen}} déi an dëser nach net gespäicherter Versioun benotzt {{PLURAL:$1|gëtt|ginn}}:',
'templatesusedsection' => '{{PLURAL:$1|Schabloun|Schablounen}} déi an dësem Abschnitt benotzt {{PLURAL:$1|gëtt|ginn}}:',
'template-protected' => '(gespaart)',
'template-semiprotected' => '(gespaart fir net-ugemellten an nei Benotzer)',
'hiddencategories' => 'Dës Säit gehéiert zu {{PLURAL:$1|1 verstoppter Kategorie|$1 verstoppte Kategorien}}:',
'edittools' => '<!-- Dësen Text gëtt ënnert dem "Ännere"-Formulair esouwéi dem "Eropluede"-Formulair ugewisen. -->',
'nocreatetitle' => "D'Uleeë vun neie Säiten ass limitéiert.",
'nocreatetext' => "Op {{SITENAME}} gouf d'Schafe vun neie Säite limitéiert. Dir kënnt Säiten déi scho bestinn änneren oder Iech [[Special:UserLogin|umellen]].",
'nocreate-loggedin' => 'Dir hutt keng Berechtigung fir nei Säiten unzeleeën.',
'sectioneditnotsupported-title' => 'Ännere vum Abschnitt gëtt net ënnerstëtzt',
'sectioneditnotsupported-text' => "D'Ännere vun Abschnitten gëtt op dëser Ännerungssäit net ënnertstetzt.",
'permissionserrors' => 'Berechtigungs-Feeler',
'permissionserrorstext' => 'Dir hutt net genuch Rechter fir déi Aktioun auszeféieren. {{PLURAL:$1|Grond|Grënn}}:',
'permissionserrorstext-withaction' => 'Dir sidd, aus {{PLURAL:$1|dësem Grond|dëse Grënn}}, net berechtegt $2 :',
'recreate-moveddeleted-warn' => "'''Opgepasst: Dir sidd amgaang eng Säit unzeleeën déi schonn eng Kéier geläscht gouf.'''

Frot Iech ob et wierklech sënnvoll ass dës Säit nees nei ze schafen.
Fir Iech z'informéieren fannt Dir hei d'Logbuch vum Läsche mam Grond:",
'moveddeleted-notice' => 'Dës Säit gouf geläscht.
Hei ass den Extrait aus dem Logbuch vum Réckelen a Läsche fir déi Säit.',
'log-fulllog' => 'Dat ganzt Logbuch weisen',
'edit-hook-aborted' => "D'Ännerung gouf ouni Erklärung vun enger Schnëttstell (hook) ofgebrach.",
'edit-gone-missing' => "D'Säit konnt net aktualiséiert ginn.
Si gouf anscheinend geläscht.",
'edit-conflict' => 'Ännerungskonflikt.',
'edit-no-change' => 'Är ännerung gouf ignoréiert, well Dir näischt um Text geännert hutt.',
'edit-already-exists' => 'Déi nei Säit konnt net ugeluecht ginn, well et se scho gëtt.',
'defaultmessagetext' => 'Standardtext',
'invalid-content-data' => 'Donnéeë vum Inhalt sinn net valabel',
'content-not-allowed-here' => '"$1"-Inhalt ass op der Säit [[$2]] net erlaabt',

# Content models
'content-model-wikitext' => 'Wikitext',
'content-model-text' => 'Kloertext',
'content-model-javascript' => 'JavaScript',
'content-model-css' => 'CSS',

# Parser/template warnings
'expensive-parserfunction-warning' => "'''Opgepasst:'' Dës Säit huet ze vill Ufroe vu komplexe Parserfunktiounen.

Et däerfen net méi wéi $2 {{PLURAL:$2|Ufro|Ufroe}} sinn, aktuell {{PLURAL:$2|ass et $1 Ufro|sinn et $1 Ufroe}}.",
'expensive-parserfunction-category' => 'Säiten, déi komplex Parserfunktiounen ze dacks opruffen',
'post-expand-template-inclusion-warning' => "Opgepasst: D'Gréisst vun den agebonnene Schablounen ass ze grouss, e puer Schabloune kënnen net agebonne ginn.",
'post-expand-template-inclusion-category' => "Säiten, op denen d'maximal Gréist vun agebonnene Schablounen iwwerschratt ass",
'post-expand-template-argument-warning' => "'''Warnung: Op dëser Säit ass mindestens een Argument an enger Schabloun dat eng ze grouss Expansiounsgréisst huet. Dës Argumenter goufen ewechgelooss.",
'post-expand-template-argument-category' => 'Säiten, op dene mindestens e Parameter vun enger Schabloun vergiess ginn ass',
'parser-template-loop-warning' => 'Endlos Schleef an der Schabloun: [[$1]] entdeckt',
'parser-template-recursion-depth-warning' => "D'Limit vun der Zuel vun de Verschachtelunge vu Schabloune gouf iwwerschratt ($1)",
'language-converter-depth-warning' => "D'Limite vun der déift vun der Sproochëmwandlung gouf iwwerschratt ($1)",
'parser-unstrip-loop-warning' => 'Endlos Schleef entdeckt',
'converter-manual-rule-error' => 'An der Regel iwwer déi manuell Ëmwandlung vun der Sprooch gouf e Feeler fonnt',

# "Undo" feature
'undo-success' => "D'Ännerung gëtt réckgängeg gemaach. Iwwerpréift w.e.g. de Verglach ënnendrënner fir nozekuckeen ob et esou richteg ass, duerno späichert w.e.g d'Ännerungen of, fir dës Aktioun ofzeschléissen.",
'undo-failure' => "D'Ännerung konnt net réckgängeg gemaach ginn, wëll de betraffenen Abschnitt an der Tëschenzäit geännert gouf.",
'undo-norev' => "D'Ännerung kann net zréckgesat ginn, well et se net gëtt oder well se scho geläscht ass.",
'undo-summary' => 'Ännerung $1 vu(n) [[Special:Contributions/$2|$2]] ([[User talk:$2|Diskussioun]] | [[Special:Contributions/$2|{{MediaWiki:Contribslink}}]]) annulléieren.',

# Account creation failure
'cantcreateaccounttitle' => 'Benotzerkont konnt net opgemaach ginn',
'cantcreateaccount-text' => 'D\'Opmaache vu Benotzerkonten vun dëser IP Adress (\'\'\'$1\'\'\') gouf vum [[User:$3|$3]] gespaart.

De Benotzer $3 huet "$2" als Grond uginn.',

# History pages
'viewpagelogs' => 'Logbicher fir dës Säit weisen',
'nohistory' => 'Et gëtt keng al Versioune vun dëser Säit.',
'currentrev' => 'Aktuell Versioun',
'currentrev-asof' => 'Aktuell Versioun vum $1',
'revisionasof' => 'Versioun vum $1',
'revision-info' => 'Versioun vum $1 vum $2.',
'previousrevision' => '← Méi al Versioun',
'nextrevision' => 'Méi rezent Versioun →',
'currentrevisionlink' => 'Aktuell Versioun',
'cur' => 'aktuell',
'next' => 'nächst',
'last' => 'lescht',
'page_first' => 'éischt',
'page_last' => 'lescht',
'histlegend' => "Fir d'Ännerungen unzeweisen: Klickt déi zwou Versiounen un, déi solle verglach ginn.<br />
*(aktuell) = Ënnerscheed mat der aktueller Versioun,
*(lescht) = Ënnerscheed mat der aler Versioun,
*k = Kleng Ännerung.",
'history-fieldset-title' => 'An de Versioune sichen',
'history-show-deleted' => 'nëmmen déi geläschten',
'histfirst' => 'Eelsten',
'histlast' => 'Neisten',
'historysize' => '({{PLURAL:$1|1 Byte|$1 Byten}})',
'historyempty' => '(eidel)',

# Revision feed
'history-feed-title' => 'Historique vun de Versiounen',
'history-feed-description' => 'Versiounshistorique fir dës Säit op {{SITENAME}}',
'history-feed-item-nocomment' => '$1 ëm $2',
'history-feed-empty' => 'Déi ugefrote Säit gëtt et net.
Vläicht gouf se geläscht oder geréckelt.
[[Special:Search|Sicht]] op {{SITENAME}} no relevanten neie Säiten.',

# Revision deletion
'rev-deleted-comment' => '(Resumé vun der Ännerung ewechgeholl)',
'rev-deleted-user' => '(Benotzernumm ewechgeholl)',
'rev-deleted-event' => '(Aktioun aus dem Logbuch erausgeholl)',
'rev-deleted-user-contribs' => '[Benotzernumm oder IP-Adress ewechgeholl - Ännerung an der Lescht vun de Kontributioune verstoppt]',
'rev-deleted-text-permission' => "Dës Versioun vun der Säit gouf '''geläscht'''.
Dir fannt eventuell méi Informatiounen an der [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} Läsch-Logbuch].",
'rev-deleted-text-unhide' => "Dës Versioun vun der Säit gouf '''geläscht'''.
Detailer kënnen am [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} Läsch-Logbuch] fonnt ginn.
Dir kënnt [$1 dës Versioun nach ëmmer kucke] wann Dir weiderfuere wëllt.",
'rev-suppressed-text-unhide' => "Dës Versioun vun der Säit gouf '''geläscht'''.
Detailer kënnen am  [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} Läschlogbuch] sinn.
Dir kënnt [$1 dës Versioun gesi] wann Dir weiderfuere wëllt.",
'rev-deleted-text-view' => "Dës Versioun vun der Säit gouf '''geläscht'''.
Dir kënnt se gesinn; Dir fannt Detailer am  [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} Läsch-Logbuch].",
'rev-suppressed-text-view' => "Dës Versioun vun der Säit gouf '''geläscht'''.
Dir kënnt se gesinn; méi Detailer fannt Dir am [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} Läsch-Logbuch].",
'rev-deleted-no-diff' => "Dir kënnt dësen Ënnerscheed net gesinn, well eng vun de Versiounen '''geläscht gouf'''.
Detailer stinn eventuell am [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} Läsch-Logbuch].",
'rev-suppressed-no-diff' => "Dir kënnt dësen Diff (Ënnerscheed) net gesinn well eng vun de Versioune '''geläscht''' gouf.",
'rev-deleted-unhide-diff' => "Eng vun de Versioune vun dësem Ënnerscheed gouf '''geläscht'''.
Detailer stinn am [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} Läsch-Logbuch].
Dir kënnt [$1 mat dësem Link de Versiounsënnerscheed kucke] wann Dir weiderfuere wëllt.",
'rev-suppressed-unhide-diff' => "Eng vun de Versioune vun dësem Ënnerscheed gouf '''geläscht'''.
Detailer stinn am [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} Läsch-Logbuch].
Dir kënnt [$1 mat dësem Link de Versiounsënnerscheed kucke] wann Dir weiderfuere wëllt.",
'rev-deleted-diff-view' => "Eng Versioun vun dësem Versiounsënnerscheed gouf '''geläscht'''.
Dir kënnt dësen Ënnerscheed gesinn; méi Detailer fannt Dir am [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} Logbuch vum Läschen].",
'rev-suppressed-diff-view' => "Eng vun de Versioune vun dësem Ënnerscheed gouf '''ënnerdréckt.
Dir kënnt dësen Ënnerscheed gesinn; Detailer fannt Dir am [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} Logbuch vun den Ënnerdréckunge].",
'rev-delundel' => 'weisen/verstoppen',
'rev-showdeleted' => 'Weisen',
'revisiondelete' => 'Versioune läschen/restauréieren',
'revdelete-nooldid-title' => 'Ongülteg Zilversioun',
'revdelete-nooldid-text' => 'Dir hutt entweder keng Versioun uginn fir dës Funktioun ze benotzen, déi Versioun déi Dir uginn hutt gëtt et net, oder dir versicht déi aktuell Versioun ze verstoppen.',
'revdelete-nologtype-title' => 'Keen Typ vu Logbuch uginn',
'revdelete-nologtype-text' => 'Dir hutt keen Typ vu Logbuch ugi fir dës Aktioun ze maachen.',
'revdelete-nologid-title' => 'Net valabele Wäert am Logbuch',
'revdelete-nologid-text' => 'Dir hutt kee Logtyp erausgesicht oder de gewielte Logtyp gëtt et net.',
'revdelete-no-file' => 'De Fichier deen ugi war gëtt et net.',
'revdelete-show-file-confirm' => 'Sidd Dir sécher datt Dir déi geläschte Versioun vum Fichier "<nowiki>$1</nowiki>" vum $2 ëm $3 gesi wëllt?',
'revdelete-show-file-submit' => 'Jo',
'revdelete-selected' => "'''{{PLURAL:$2|Gewielt Versioun|Gewielt Versioune}} vu(n) [[:$1]] :'''",
'logdelete-selected' => "'''Ausgewielten {{PLURAL:$1|Evenement|Evenementer}} aus dem Logbuch:'''",
'revdelete-text' => "'''Geläschte Versiounen oder aner geläschte Bestanddeeler sinn net méi ëffentlech zougänglech, si stinn awer weiderhin an der Versiounsgeschicht vun der Säit.'''
Aner {{SITENAME}}-Administrateure kënnen de geläschten Inhalt oder aner geläschte Bestanddeeler weiderhi gesinn a restauréieren, et sief, et gouf festgeluecht, datt déi Limitatioune vum Accès och fir Administrateure gëllen.",
'revdelete-confirm' => "Confirméiert w.e.g. datt Dir dat maache wëllt, datt Dir d'Konsequenze verstitt an datt Dir dëst an Aklang mat de [[{{MediaWiki:Policy-url}}|Richtlinne]] maacht.",
'revdelete-suppress-text' => "Ënnerdréckung sollt '''nëmmen''' an dëse Fäll benotzt ginn:
* Net ubruechte perséinlechen Informatiounen
*: ''Adressen, Telefonsnummeren, Sozialversécherungsnummeren asw.''",
'revdelete-legend' => "Limitatioune fir d'Sichtbarkeet festleeën",
'revdelete-hide-text' => 'Text vun der Versioun verstoppen',
'revdelete-hide-image' => 'Bildinhalt verstoppen',
'revdelete-hide-name' => 'Logbuch-Aktioun verstoppen',
'revdelete-hide-comment' => 'Bemierkung verstoppen',
'revdelete-hide-user' => 'Dem Auteur säi Benotzernumm/IP verstoppen',
'revdelete-hide-restricted' => 'Donnéeën och fir Administrateuren suppriméieren geneesou wéi fir déi Aner',
'revdelete-radio-same' => '(net änneren)',
'revdelete-radio-set' => 'Jo',
'revdelete-radio-unset' => 'Neen',
'revdelete-suppress' => 'Grond vum Läschen och fir Administrateure verstoppt',
'revdelete-unsuppress' => 'Limitatiounen fir restauréiert Versiounen ophiewen',
'revdelete-log' => 'Grond:',
'revdelete-submit' => 'Op déi gewielt {{PLURAL:$1|Versioun|Versiounen}} uwenden',
'revdelete-success' => "'''Sichtbarkeet vun de Versioune gouf aktualiséiert.''''",
'revdelete-failure' => "'''Sichtbarkeet vun der Versioun konnt net aktualiséiert ginn:'''
$1",
'logdelete-success' => "'''Sichbarkeet vum Logbuch geännert.'''",
'logdelete-failure' => "'''D'Sichtbarkeet vum Logbuch konnt net agestllt ginn:'''
$1",
'revdel-restore' => 'Sichtbarkeet änneren',
'revdel-restore-deleted' => 'geläschte Versiounen',
'revdel-restore-visible' => 'sichtbar Versiounen',
'pagehist' => 'Versioune vun dëser Säit',
'deletedhist' => 'Geläschte Versiounen',
'revdelete-hide-current' => 'Feeler beim Verstoppe vum Objet vum $2 ëm $1: et ass déi aktuell Versioun.
Si kann net verstoppt ginn.',
'revdelete-show-no-access' => 'Feeler beim Weise vum Objet vum $1 ëm $2 Auer: dësen Objet gouf als "limitéiert2 markéiert.
Dir hutt keen Zougang zu dësem Objet.',
'revdelete-modify-no-access' => 'Feeler beim Ännere vum Objet vum $1 ëm $2 Auer: dësen Objet gouf als "limitéiert" markéiert.
Dir hutt keen Zougang dozou.',
'revdelete-modify-missing' => 'Feeler beim Ännere vun der ID $1: si feelt an der Datebank!',
'revdelete-no-change' => "'''Opgepasst:''' D'Element vum $2 ëm $1 Auer huet schonn déi ugefrote Sichtbarkeetsastellung.",
'revdelete-concurrent-change' => "Feeler beim Ännere vum Element vum $1 ëm $2 Auer: säit Statut schéngt geännert ginn ze si während Dir vericht hutt et z'änneren.
Kuckt w.e.g. an de Logbicher no.",
'revdelete-only-restricted' => 'Feler beim verstoppe vum Objet vum $2, $1: Dir kënnt keng Objete virun den Administrateure verstoppen ouni och eng vun den aneren Optiounen vum weisen erauszesichen.',
'revdelete-reason-dropdown' => "* Generell Läschgrënn
** Verletzung vun den Droits d'Auteur
** Net ubruechte perséinlech Informatioun
** Inadequate Benotzernumm
** Informatioun déi beleidege kann",
'revdelete-otherreason' => 'Aneren/zousätzleche Grond:',
'revdelete-reasonotherlist' => 'Anere Grond:',
'revdelete-edit-reasonlist' => 'Läschgrënn änneren',
'revdelete-offender' => 'Auteur vun der Versioun:',

# Suppression log
'suppressionlog' => 'Lëscht vun de verstoppten a geläschte Säiten',
'suppressionlogtext' => 'Ënnendrënner ass eng Lëscht vun de geläschte Säiten a Spären a vun den Administrateuren verstopptem Inhalt.
Kuckt [[Special:BlockList|Lëscht vun Späre]] fir déi aktuell Spären.',

# History merging
'mergehistory' => 'Historiquë fusionéieren',
'mergehistory-header' => "Mat dëser Spezialsäit kënnt Dir d'Versiounsgeschicht vun enger Ursprungssäit mat der Versiounsgeschicht vun enger Zilsäit zesummeleeën.
Passt op, datt d'Versiounsgeschicht der Säit historesch korrekt ass.

'''Als Minimum muss déi aktuell Versioun vun der Ursprungssäit bestoe bleiwen.'''",
'mergehistory-box' => 'Historiquë vun zwou Säite fusionéieren',
'mergehistory-from' => 'Originalsäit:',
'mergehistory-into' => 'Zilsäit:',
'mergehistory-list' => 'Versiounen, déi zesummegeluecht kënne ginn',
'mergehistory-merge' => "Dës Versioune vun [[:$1]] kënnen matt [[:$2]] zesummegeluecht ginn.
Benotzt d'Radio-Knäppecher fir nëmmen déi Versiunen ze fusonnéieren déi zu engem spezifischen Zäitpunkt oder virdrun ugeluecht goufen.
Denkt w.e.g drunn datt d'Navigatiounslinken d'Wiel vun de Versiounen nees zrécksetzen.",
'mergehistory-go' => 'Weis déi Versiounen, déi zesummegeluecht kënne ginn',
'mergehistory-submit' => 'Versioune verschmelzen',
'mergehistory-empty' => 'Et kënne keng Versioune zesummegeluecht ginn.',
'mergehistory-success' => '{{PLURAL:$3|1 Versioun gouf|$3 Versioune goufe}} vun [[:$1]] op [[:$2]] zesummegeluecht.',
'mergehistory-fail' => "Versiounszesummeleeung war net méiglech, kuckt w.e.g. d'Säiten an d'Zäit-Parameter no.",
'mergehistory-no-source' => 'Originalsäit "$1" gëtt et net.',
'mergehistory-no-destination' => 'Zilsäit "$1" gëtt et net.',
'mergehistory-invalid-source' => "D'Originalsäit muss ee gültege Säitennumm hunn.",
'mergehistory-invalid-destination' => 'Zilsäit muss e gültege Säitennumm sinn.',
'mergehistory-autocomment' => '[[:$1]] zesummegeluecht an [[:$2]]',
'mergehistory-comment' => '[[:$1]] zesummegeluecht an [[:$2]]: $3',
'mergehistory-same-destination' => 'Ausgangs- an Zilsäit däerfen net déi selwescht sinn',
'mergehistory-reason' => 'Grond:',

# Merge log
'mergelog' => 'Fusiouns-Logbuch',
'pagemerge-logentry' => '[[$1]] zesummegeluecht an [[$2]] (Versioune bis $3)',
'revertmerge' => 'Zesummeféieren ophiewen',
'mergelogpagetext' => 'Lëscht vun de rezenten Zesummeféierunge vu Versiounsgeschichten.',

# Diffs
'history-title' => '$1: Historique vun de Versiounen',
'difference-title' => '$1: Ënnerscheed tëschent de Versiounen',
'difference-title-multipage' => '$1 a(n) $2: Ënnerscheed tëschent de Säiten',
'difference-multipage' => '(Ënnerscheed tëschent Säiten)',
'lineno' => 'Linn $1:',
'compareselectedversions' => 'Ausgewielte Versioune vergläichen',
'showhideselectedversions' => 'Erausgesichte Versioune weisen/verstoppen',
'editundo' => 'zréck',
'diff-multi' => '({{PLURAL:$1|Eng Tëscheversioun|$1 Tëscheversioune}} vun {{PLURAL:$2|engem|$2}} Benotzer {{PLURAL:$1|gëtt|ginn}} net gewisen)',
'diff-multi-manyusers' => '({{PLURAL:$1|Eng Tëscheversioun|$1 Tëscheversioune}} vu méi wéi $2 {{PLURAL:$2|Benotzer|Benotzer}} ginn net gewisen)',

# Search results
'searchresults' => 'Resultat vum Sichen',
'searchresults-title' => 'Resultater vum Sichen no "$1"',
'searchresulttext' => "Fir méi Informatiounen iwwer d'Sichfunktiounen op {{SITENAME}}, kuckt w.e.g op [[{{MediaWiki:Helppage}}|{{int:help}}]].",
'searchsubtitle' => 'Dir hutt no "[[:$1]]" gesicht ([[Special:Prefixindex/$1|all Säiten déi mat "$1" ufänken]]{{int:pipe-separator}}[[Special:WhatLinksHere/$1|all Säiten déi op "$1" linken]])',
'searchsubtitleinvalid' => 'Dir hutt no "$1" gesicht.',
'toomanymatches' => 'Zevill Resultater goufe fonnt, versicht w.e.g. eng aner Ufro',
'titlematches' => 'Iwwereneestëmmungen am Säitentitel',
'notitlematches' => 'Keng Iwwereneestëmmunge mat Säitentitelen',
'textmatches' => 'Iwwereneestëmmungen am Säitentext',
'notextmatches' => 'Keng Iwwereneestëmmungen',
'prevn' => 'vireg {{PLURAL:$1|$1}}',
'nextn' => 'nächst {{PLURAL:$1|$1}}',
'prevn-title' => 'Vireg $1 {{PLURAL:$1|Resultat|Resultater}}',
'nextn-title' => 'Nächst $1 {{PLURAL:$1|Resultat|Resultater}}',
'shown-title' => '$1 {{PLURAL:$1|Resultat|Resultater}} pro Säit weisen',
'viewprevnext' => 'Weis ($1 {{int:pipe-separator}} $2) ($3)',
'searchmenu-legend' => 'Sichoptiounen',
'searchmenu-exists' => "* Säit '''[[$1]]'''",
'searchmenu-new' => "'''Opmaache vun der Säit ''[[:$1|$1]]'' op dëser Wiki!'''",
'searchhelp-url' => 'Help:Inhalter',
'searchmenu-prefix' => '[[Special:PrefixIndex/$1|All Säite weisen, déi mat dem Begrëff ufänken nodeem Dir sicht]]',
'searchprofile-articles' => 'Säite mat Inhalt',
'searchprofile-project' => 'Hëllef a Projetssäiten',
'searchprofile-images' => 'Multimedia',
'searchprofile-everything' => 'Alles',
'searchprofile-advanced' => 'Erweidert',
'searchprofile-articles-tooltip' => 'Sichen a(n) $1',
'searchprofile-project-tooltip' => 'Sichen a(n) $1',
'searchprofile-images-tooltip' => 'No Fichiere sichen',
'searchprofile-everything-tooltip' => 'Op alle Säiten nom Inhalt sichen  (inklusiv Diskussiounssäiten)',
'searchprofile-advanced-tooltip' => 'Sich an den Nummraim déi an de perséinlichen Astellungen festgeluecht sinn',
'search-result-size' => '$1 ({{PLURAL:$2|1 Wuert|$2 Wierder}})',
'search-result-category-size' => '{{PLURAL:$1|1 Säit|$1 Säiten}} ({{PLURAL:$2|1 Ënnerkategorie|$2 Ënnerkategorien}}, {{PLURAL:$3|1 Fichier|$3 Fichieren}})',
'search-result-score' => 'Relevanz: $1 %',
'search-redirect' => '(Viruleedung $1)',
'search-section' => '(Abschnitt $1)',
'search-suggest' => 'Mengt Dir: $1',
'search-interwiki-caption' => 'Schwësterprojeten',
'search-interwiki-default' => '$1 Resultater:',
'search-interwiki-more' => '(méi)',
'search-relatedarticle' => 'A Verbindung',
'mwsuggest-disable' => 'Ajax-Virschléi ausschalten',
'searcheverything-enable' => 'An allen Nummraim sichen',
'searchrelated' => 'a Verbindng',
'searchall' => 'all',
'showingresults' => "Hei gesitt der  {{PLURAL:$1| '''1''' Resultat|'''$1''' Resultater}}, ugefaang mat #'''$2'''.",
'showingresultsnum' => "Hei gesitt der  {{PLURAL:$3|'''1''' Resultat|'''$3''' Resultater}}, ugefaange mat #'''$2'''.",
'showingresultsheader' => "{{PLURAL:$5|Resultat '''$1''' vu(n) '''$3'''|Resultater '''$1 - $2''' vu(n) '''$3'''}} fir '''$4'''",
'nonefound' => "'''Opgepasst''': Nëmmen e puer Nummraim gi ''par default'' duerchsicht. Versicht an ärer Ufro ''all:'' anzestellen fir de gesamten Inhalt (inklusiv Diskussiounssäiten, Schablonen, ...), oder benotzt déi gwënschten Nummraim als Virastellung.",
'search-nonefound' => 'Fir är Ufro gouf näischt fonnt.',
'powersearch' => 'Erweidert Sich',
'powersearch-legend' => 'Erweidert Sich',
'powersearch-ns' => 'Sichen an den Nummraim:',
'powersearch-redir' => 'Viruleedunge weisen',
'powersearch-field' => 'Sichen no:',
'powersearch-togglelabel' => 'Markéieren:',
'powersearch-toggleall' => 'All',
'powersearch-togglenone' => 'Keen',
'search-external' => 'Extern sichen',
'searchdisabled' => "D'Sichfunktioun op {{SITENAME}} ass ausgeschalt. Dir kënnt iwwerdeems mat Hëllef vu Google sichen. Bedenkt awer, datt deenen hire  Sichindex fir {{SITENAME}} eventuell net dem aktuellste Stand entsprecht.",

# Quickbar
'qbsettings' => 'Geschirläischt',
'qbsettings-none' => 'Keen',
'qbsettings-fixedleft' => 'Lénks, fest',
'qbsettings-fixedright' => 'Riets, fest',
'qbsettings-floatingleft' => 'schwiewt lenks',
'qbsettings-floatingright' => 'Schwiewt riets',
'qbsettings-directionality' => 'Fix, ofhängeg vun der Schreiwrichtung vun Ärer Sprooch',

# Preferences page
'preferences' => 'Astellungen',
'mypreferences' => 'Meng Astellungen',
'prefs-edits' => 'Zuel vun den Ännerungen:',
'prefsnologin' => 'Net ageloggt',
'prefsnologintext' => 'Dir musst <span class="plainlinks">[{{fullurl:{{#Special:UserLogin}}|returnto=$1}}ageloggt]</span> sinn, fir Är Astellungen änneren ze kënnen.',
'changepassword' => 'Passwuert änneren',
'prefs-skin' => 'Skin',
'skin-preview' => 'Kucken',
'datedefault' => 'Egal (Standard)',
'prefs-beta' => 'Beta-Fonctiounen',
'prefs-datetime' => 'Datum an Auerzäit',
'prefs-labs' => '"Labs"-Fonctiounen',
'prefs-user-pages' => 'Benotzersäiten',
'prefs-personal' => 'Benotzerprofil',
'prefs-rc' => 'Rezent Ännerungen',
'prefs-watchlist' => 'Iwwerwaachungslëscht',
'prefs-watchlist-days' => 'Zuel vun den Deeg, déi an der Iwwerwaachungslëscht ugewise solle ginn:',
'prefs-watchlist-days-max' => 'Maximal $1 {{PLURAL:$1|Dag|Deeg}}',
'prefs-watchlist-edits' => 'Maximal Zuel vun den Ännerungen déi an der erweiderter Iwwerwaachungslëscht ugewise solle ginn:',
'prefs-watchlist-edits-max' => 'Maximal Zuel: 1000',
'prefs-watchlist-token' => 'Iwwerwaachungslëscht-Token:',
'prefs-misc' => 'Verschiddenes',
'prefs-resetpass' => 'Passwuert änneren',
'prefs-changeemail' => 'Mailadress änneren',
'prefs-setemail' => 'Eng Mailadress festleeën',
'prefs-email' => 'E-Mail-Optiounen',
'prefs-rendering' => 'Ausgesinn',
'saveprefs' => 'Späicheren',
'resetprefs' => 'Net gespäichert Ännerungen zrécksetzen',
'restoreprefs' => 'All Standardastellungen zrécksetzen',
'prefs-editing' => 'Änneren',
'prefs-edit-boxsize' => 'Gréisst vun der Ännerungsfënster:',
'rows' => 'Zeilen',
'columns' => 'Kolonnen',
'searchresultshead' => 'Sichen',
'resultsperpage' => 'Zuel vun de Resultater pro Säit:',
'stub-threshold' => 'Maximum (a Byte) bei deem e Link nach ëmmer am <a href="#" class="stub">Skizze-Format</a> gewise gëtt:',
'stub-threshold-disabled' => 'Desaktivéiert',
'recentchangesdays' => 'Deeg déi an de Rezenten Ännerungen ugewise ginn:',
'recentchangesdays-max' => '(Maximal $1 {{PLURAL:$1|Dag|Deeg}})',
'recentchangescount' => 'Zuel vun den Ännerungen déi als Standard gewise ginn:',
'prefs-help-recentchangescount' => 'Inklusiv Rezent Ännerungen, Versiounshistoriquen a Logbicher.',
'prefs-help-watchlist-token' => 'Wann dir dëst Feld mat engem Geheimcode ausfëllt gëtt en RSS-Feed fir Är Iwwerwaachungslëscht generéiert.
Jiddereen deen de Geheimcode aus dësem Feld kennt kann Är Iwwerwaachungslëscht liesen, wielt dofir e séchere Wäert.
Hei ass een zoufälleg generéierte Wäert deen Dir benotze kënnt: $1',
'savedprefs' => 'Är Astellunge goufe gespäichert.',
'timezonelegend' => 'Zäitzon:',
'localtime' => 'Lokalzäit:',
'timezoneuseserverdefault' => 'De Standardwäert vun der Wiki ($1) benotzen',
'timezoneuseoffset' => 'Aner (Differenz uginn)',
'timezoneoffset' => 'Zäit-Differenz¹:',
'servertime' => 'Serverzäit:',
'guesstimezone' => 'Vum Browser iwwerhuelen',
'timezoneregion-africa' => 'Afrika',
'timezoneregion-america' => 'Amerika',
'timezoneregion-antarctica' => 'Antarktis',
'timezoneregion-arctic' => 'Arktis',
'timezoneregion-asia' => 'Asien',
'timezoneregion-atlantic' => 'Atlanteschen Ozean',
'timezoneregion-australia' => 'Australien',
'timezoneregion-europe' => 'Europa',
'timezoneregion-indian' => 'Indeschen Ozean',
'timezoneregion-pacific' => 'Pazifeschen Ozean',
'allowemail' => 'E-Maile vun anere Benotzer kréien.',
'prefs-searchoptions' => 'Sichen',
'prefs-namespaces' => 'Nummraim',
'defaultns' => 'Soss an dësen Nummraim sichen:',
'default' => 'Standard',
'prefs-files' => 'Fichieren',
'prefs-custom-css' => 'Benotzerdefinéierten CSS',
'prefs-custom-js' => 'Benotzerdefinéierte JS',
'prefs-common-css-js' => 'Gemeinsam CSS/JS fir all Ausgesinn (skins):',
'prefs-reset-intro' => "Dir kënnt dës Säit benotze fir Är Astellungen zréck op d'Standard-Astllungen ze setzen.
Dëst kann net réckgängeg gemaach ginn.",
'prefs-emailconfirm-label' => 'E-Mail Confirmatioun:',
'prefs-textboxsize' => 'Gréisst vun der Ännerungsfënster',
'youremail' => 'E-Mailadress:',
'username' => 'Benotzernumm:',
'uid' => 'Benotzer ID:',
'prefs-memberingroups' => 'Member vun {{PLURAL:$1|der Benotzergrupp|de Benotzergruppen}}:',
'prefs-registration' => 'Zäitpunkt vum Opmaache vum Benotzerkont:',
'yourrealname' => 'Richtegen Numm:',
'yourlanguage' => 'Sprooch:',
'yourvariant' => 'Sproochvariant fir den Inhalt:',
'prefs-help-variant' => 'Är léifste Variant oder Orthographie an där Inhaltssäite vun dëser Wiki gewise solle ginn.',
'yournick' => 'Ënnerschrëft:',
'prefs-help-signature' => 'Bemierkungen op Diskussiounssäite solle mat "<nowiki>~~~~</nowiki>" ënnerschriwwe ginn. Dëst gëtt dann an Är Ënnerschrëft an en Zäitstempel ëmgewandelt.',
'badsig' => "D'Syntax vun ärer Ënnerschëft ass net korrekt; iwwerpréift w.e.g. ären HTML Code.",
'badsiglength' => 'Är Ënnerschrëft ass ze laang.
Si muss manner wéi $1 {{PLURAL:$1|Zeechen|Zeechen}} hunn.',
'yourgender' => 'Geschlecht:',
'gender-unknown' => 'Net uginn',
'gender-male' => 'Männlech',
'gender-female' => 'Weiblech',
'prefs-help-gender' => "Fakultativ: gëtt benotzt fir eng ''Gender-korrekt'' Uried duerch d'Software. Dës Informatioun ass ëffentlech.",
'email' => 'E-Mail',
'prefs-help-realname' => 'Äre richtegen Numm ass fakultativ. Wann Dir en ugitt, gëtt e benotzt fir Iech Är Kontributiounen zouzeuerdnen.',
'prefs-help-email' => "D'E-Mailadress ass fakultativ, awer si gëtt gebraucht fir Iech Äert Passwuert ze mailen, wann Dir et géift vergiessen.",
'prefs-help-email-others' => 'Dir kënnt Iech och dofir decidéieren datt Anerer Iech iwwer Är Diskussiounssäit kontaktéieren ouni datt Dir dobäi Är Identitéit verrode musst.',
'prefs-help-email-required' => 'Eng gëlteg E-Mailadress gëtt heifir gebraucht.',
'prefs-info' => 'Grondinformatioun',
'prefs-i18n' => 'Internationalisatioun',
'prefs-signature' => 'Ënnerschrëft',
'prefs-dateformat' => 'Format vum Datum',
'prefs-timeoffset' => 'Zäitënnerscheed',
'prefs-advancedediting' => 'Méi Optiounen',
'prefs-advancedrc' => 'Méi Optiounen',
'prefs-advancedrendering' => 'Méi Optiounen',
'prefs-advancedsearchoptions' => 'Méi Optiounen',
'prefs-advancedwatchlist' => 'Méi Optiounen',
'prefs-displayrc' => 'Optioune vun deem wat gewise gëtt',
'prefs-displaysearchoptions' => 'Optioune vum Affichage',
'prefs-displaywatchlist' => 'Optioune vun deem wat gewise gëtt',
'prefs-diffs' => 'Ënnerscheeder',

# User preference: e-mail validation using jQuery
'email-address-validity-valid' => "D'E-Mailadress schéngt valabel ze sinn",
'email-address-validity-invalid' => 'Gitt eng valabel e-Mailadress an',

# User rights
'userrights' => 'Benotzerrechterverwaltung',
'userrights-lookup-user' => 'Benotzergrupp verwalten',
'userrights-user-editname' => 'Benotzernumm uginn:',
'editusergroup' => 'Benotzergruppen änneren',
'editinguser' => "Ännere vun de Rechter vum Benotzer '''[[User:$1|$1]]''' $2",
'userrights-editusergroup' => 'Benotzergruppen änneren',
'saveusergroups' => 'Benotzergruppe späicheren',
'userrights-groupsmember' => 'Member vun:',
'userrights-groupsmember-auto' => 'Implizit Member vun:',
'userrights-groups-help' => "Dir kënnt d'Gruppen zu deenen dëse Benotzer gehéiert änneren.
* Een ugekräizt Haische bedeit, datt de Benotzer Member vun dëser Grupp ass.
* Een net ugekräizt Haische bedeit, datt de Benotzer net Member vun dëser Grupp ass.
* E Stäerchen (*) bedeit datt Dir d'Grupp net méi ewechhuele kënnt wann e bis eemol derbäigesat ass oder gouf.",
'userrights-reason' => 'Grond:',
'userrights-no-interwiki' => "Dir hutt net déi néideg Rechter, fir d'Rechter vu Benoutzer op anere Wikien z'änneren.",
'userrights-nodatabase' => "D'Datebank $1 gëtt et net oder se ass net lokal.",
'userrights-nologin' => 'Dir musst mat engem Administrateurs-Benotzerkont [[Special:UserLogin|ageloggt sinn]], fir Benotzerrechter änneren ze kënnen.',
'userrights-notallowed' => "Äre Benotzerkont hutt net déi néideg Rechter fir d'Rechter vun anere Benotzer z'änneren.",
'userrights-changeable-col' => 'Gruppen déi Dir ännere kënnt',
'userrights-unchangeable-col' => 'Gruppen déi Dir net ännere kënnt',

# Groups
'group' => 'Grupp:',
'group-user' => 'Benotzer',
'group-autoconfirmed' => 'Registréiert Benotzer',
'group-bot' => 'Botten',
'group-sysop' => 'Administrateuren',
'group-bureaucrat' => 'Bürokraten',
'group-suppress' => 'Iwwersiicht',
'group-all' => '(all)',

'group-user-member' => '{{GENDER:$1|Benotzer}}',
'group-autoconfirmed-member' => '{{GENDER:$1|automatesch confirméiert Benotzer}}',
'group-bot-member' => '{{GENDER:$1|Bot}}',
'group-sysop-member' => '{{GENDER:$1|Administrateur|Administratrice}}',
'group-bureaucrat-member' => '{{GENDER:$1|Bürokrat|Bürokratin}}',
'group-suppress-member' => '{{GENDER:$1|Iwwersiicht}}',

'grouppage-user' => '{{ns:project}}:Benotzer',
'grouppage-autoconfirmed' => '{{ns:project}}:Registréiert Benotzer',
'grouppage-bot' => '{{ns:project}}:Botten',
'grouppage-sysop' => '{{ns:project}}:Administrateuren',
'grouppage-bureaucrat' => '{{ns:project}}:Bürokraten',
'grouppage-suppress' => '{{ns:project}}:Iwwersiicht',

# Rights
'right-read' => 'Säite liesen',
'right-edit' => 'Säiten änneren',
'right-createpage' => 'Säiten uleeën (déi keng Diskussiounssäite sinn)',
'right-createtalk' => 'Diskussiounssäiten uleeën',
'right-createaccount' => 'Nei Benotzerkonten uleeën',
'right-minoredit' => 'Ännerungen als kleng markéieren',
'right-move' => 'Säite réckelen',
'right-move-subpages' => 'Säiten zesumme mat hiren Ënnersäite réckelen',
'right-move-rootuserpages' => 'Haapt-Benotzersäite réckelen',
'right-movefile' => 'Fichiere réckelen',
'right-suppressredirect' => 'Keng Viruleedung vum alen Numm aus uleeë wann eng Säit geréckelt gëtt',
'right-upload' => 'Fichieren eroplueden',
'right-reupload' => 'E Fichier iwwerschreiwen',
'right-reupload-own' => 'E Fichier iwwerschreiwen deen Dir selwer eropgelueden hutt',
'right-reupload-shared' => 'Lokalt Iwwerschreiwe vun engem Fichier deen an engem gemeinsam benotzte Repertoire steet',
'right-upload_by_url' => 'Fichiere vun enger URL-Adress eroplueden',
'right-purge' => 'De Säitecache eidel maachen ouni nozefroen',
'right-autoconfirmed' => 'Hallef-gespaarte Säiten änneren',
'right-bot' => 'Als automatesche Prozess behandelen (Bot)',
'right-nominornewtalk' => 'Kleng Ännerungen op Diskussiounssäite léisen de Banner vun de neie Messagen net aus',
'right-apihighlimits' => 'Benotzt méi héich Limite bei den API Ufroen',
'right-writeapi' => "API benotze fir d'Wiki z'änneren",
'right-delete' => 'Säite läschen',
'right-bigdelete' => 'Säite mat engem groussen Historique läschen',
'right-deleterevision' => 'Spezifesch Versioune vu Säite läschen a restauréieren',
'right-deletedhistory' => 'Weis geläschte Versiounen am Historique, ouni den assoziéierten Text',
'right-deletedtext' => "Geläschten Text an d'Ännerungen tëschent de geläschte Versioune weisen",
'right-browsearchive' => 'Geläschte Säite sichen',
'right-undelete' => 'Eng Säit restauréieren',
'right-suppressrevision' => 'Virun den Administrateure verstoppte Versiounen nokucken a restauréieren',
'right-suppressionlog' => 'Privat Lëschte kucken',
'right-block' => 'Aner Benotzer fir Ännerunge spären',
'right-blockemail' => 'E Benotzer spären esou datt hie keng Maile verschécke kann',
'right-hideuser' => 'E Benotzernumm spären, an deem e virun der Ëffentlechkeet verstoppt gëtt',
'right-ipblock-exempt' => 'Ausname vun IP-Spären, automatesche Spären a vu Späre vu Plage vun IPen',
'right-proxyunbannable' => 'Automatesche Proxyspären ëmgoen',
'right-unblockself' => 'Seng eege Spär ophiewen',
'right-protect' => 'Protectiounsniveauen änneren a gespaarte Säiten änneren',
'right-editprotected' => 'Protegéiert Säiten (ouni Kaskadeprotectioun) änneren',
'right-editinterface' => 'De Benotzerinterface änneren',
'right-editusercssjs' => 'Anere Benotzer hir CSS a JS Fichieren änneren',
'right-editusercss' => 'Anere Benotzer hir CSS Fichieren änneren',
'right-edituserjs' => 'Anere Benotzer hir JavaScript Fichieren änneren',
'right-rollback' => "Ännerunge vum läschte Benotzer vun enger spezieller Säit séier z'récksetzen ''(rollback)''",
'right-markbotedits' => 'Annuléiert Ännerungen als Botännerunge weisen',
'right-noratelimit' => 'Net limitéiert duerch Zäitlimitatiounen um Server',
'right-import' => 'Säite vun anere Wikien importéieren',
'right-importupload' => 'Säite vun engem eropgeluedene Fichier importéieren',
'right-patrol' => 'Aneren hir Ännerungen als nogekuckt markéieren',
'right-autopatrol' => 'Déi eegen Ännerungen automatesch als nogekuckt markéieren',
'right-patrolmarks' => 'Markéierung "nogekuckt" an de rezenten Ännerunge weisen',
'right-unwatchedpages' => 'Lëscht vun den net iwwerwaachte Säite weisen',
'right-mergehistory' => 'Zesummeféierung vum Historique vun de Versioune vu Säiten',
'right-userrights' => 'All Benotzerrechter änneren',
'right-userrights-interwiki' => 'Benotzerrechter vu Benotzer op anere Wiki-Siten änneren',
'right-siteadmin' => "Datebank spären an d'Spär ophiewen",
'right-override-export-depth' => 'Säiten exportéieren inklusiv de verlinkte Säite bis zu enger Déift vu 5',
'right-sendemail' => 'Anere Benotzer E-Maile schécken',
'right-passwordreset' => 'Maile vum Zrécksetze vum Passwuert weisen',

# User rights log
'rightslog' => 'Logbuch vun de Benotzerrechter',
'rightslogtext' => "Dëst ass d'Lëscht vun den Ännerunge vu Benotzerrechter.",
'rightslogentry' => "huet d'Benotzerrechter vum $1 vun $2 op $3 geännert.",
'rightslogentry-autopromote' => 'gouf automatesch aus dem Grupp $2 an de Grupp $3 gesat',
'rightsnone' => '(keen)',

# Associated actions - in the sentence "You do not have permission to X"
'action-read' => 'dës Säit ze liesen',
'action-edit' => "dës Säit z'änneren",
'action-createpage' => 'Säiten unzelleeën',
'action-createtalk' => 'Diskussiounssäiten unzeleeën',
'action-createaccount' => 'dëse Benotzerkont unzeleeën',
'action-minoredit' => 'dës Ännerung als kleng Ännerung ze markéieren',
'action-move' => 'dës Säit ze réckelen',
'action-move-subpages' => 'dës Säit an déi Ënnersäiten déi dozou gehéieren ze réckelen',
'action-move-rootuserpages' => 'Haapt-Benotzersäite réckelen',
'action-movefile' => 'Dëse Fichier réckelen',
'action-upload' => 'dëse Fichier eropzelueden',
'action-reupload' => "dëse Fichier (deen et scho gëtt) z'iwwerschreiwen",
'action-reupload-shared' => "dëse Fichier op dem gemeinsam benotzte Repertoire z'iwwerschreiwen",
'action-upload_by_url' => 'Fichiere vun enger Internetadress (URL) eropzelueden',
'action-writeapi' => "d'API mat Schreifzougrëff ze benotzen",
'action-delete' => 'dës Säit ze läschen',
'action-deleterevision' => 'dës Versioun ze läschen',
'action-deletedhistory' => "d'Lëscht vun de geläschte Versiounen ze gesinn",
'action-browsearchive' => 'no geläschte Säiten ze sichen',
'action-undelete' => 'dës Säit ze restauréieren',
'action-suppressrevision' => 'déi verstoppt Versioun kucken a restauréieren',
'action-suppressionlog' => 'dës privat Lëscht ze kucken',
'action-block' => 'dëse Benotzer fir Ännerungen ze spären',
'action-protect' => 'de Protectiounsstatus vun dëser Säit änneren',
'action-rollback' => "Ännerunge vum läschte Benotzer vun enger spezieller Säit séier z'récksetzen ''(rollback)''",
'action-import' => "dës Säit aus enger anerer Wiki z'importéieren",
'action-importupload' => "dës Säit duerch d'Eropluede vun engem Fichier importéieren",
'action-patrol' => "d'Ännerunge vun Aneren als nogekuckt markéieren",
'action-autopatrol' => 'eegen Ännerungen als nogekuckt ze markéieren',
'action-unwatchedpages' => "d'Lëscht vun den net iwwerwaachte Säiten ze kucken",
'action-mergehistory' => "d'Versiounsgeschicht vun dëser Säit zesummenzeféieren",
'action-userrights' => "all Benotzerrechter z'änneren",
'action-userrights-interwiki' => "d'Rechter vu Benotzer vun anere Wikien z'änneren",
'action-siteadmin' => "d'Datebank ze spären oder d'Spär opzehiewen",
'action-sendemail' => 'Maile schécken',

# Recent changes
'nchanges' => '$1 {{PLURAL:$1|Ännerung|Ännerungen}}',
'recentchanges' => 'Rezent Ännerungen',
'recentchanges-legend' => 'Optioune vun de rezenten Ännerungen',
'recentchanges-summary' => "Op dëser Säit kënnt Dir déi rezent Ännerungen op '''{{SITENAME}}''' gesinn.",
'recentchanges-feed-description' => 'Verfollegt mat dësem Feed déi rezent Ännerungen op {{SITENAME}}.',
'recentchanges-label-newpage' => 'Dës Ännerung huet eng nei Säit ugeluecht',
'recentchanges-label-minor' => 'Dëst ass eng kleng Ännerung',
'recentchanges-label-bot' => 'Dës Ännerung gouf vun engem Bot gemaacht',
'recentchanges-label-unpatrolled' => 'Dës Ännerung gouf nach net nogekuckt',
'rcnote' => "Hei {{PLURAL:$1|ass déi lescht Ännerung|sinn déi lescht '''$1''' Ännerungen}} {{PLURAL:$2|vum leschten Dag|vun de leschten '''$2''' Deeg}}, Stand: $4 ëm $5 Auer.",
'rcnotefrom' => "Ugewise ginn d'Ännerunge vum '''$2''' un (maximal '''$1''' Ännerunge gi gewisen).",
'rclistfrom' => 'Nei Ännerunge vu(n) $1 u weisen',
'rcshowhideminor' => 'Kleng Ännerunge $1',
'rcshowhidebots' => 'Botte $1',
'rcshowhideliu' => 'Ugemellte Benotzer $1',
'rcshowhideanons' => 'Anonym Benotzer $1',
'rcshowhidepatr' => 'iwwerwaacht Ännerunge $1',
'rcshowhidemine' => 'Meng Ännerunge $1',
'rclinks' => 'Déi lescht $1 Ännerunge vun de leschten $2 Deeg weisen.<br />$3',
'diff' => 'Ënnerscheed',
'hist' => 'Versiounen',
'hide' => 'verstoppen',
'show' => 'weisen',
'minoreditletter' => 'k',
'newpageletter' => 'N',
'boteditletter' => 'B',
'number_of_watching_users_pageview' => '[$1 Benotzer {{PLURAL:$1|iwwerwaacht|iwwerwaachen}}]',
'rc_categories' => 'Nëmme Säiten aus de Kategorien (getrennt mat "|"):',
'rc_categories_any' => 'All',
'rc-change-size' => '$1 {{PLURAL:$1|Byte|Bytes}}',
'rc-change-size-new' => '$1 {{PLURAL:$1|Byte|Bytes}} no der Ännerung',
'newsectionsummary' => 'Neien Abschnitt /* $1 */',
'rc-enhanced-expand' => 'Detailer weisen (erfuedert JavaScript)',
'rc-enhanced-hide' => 'Detailer verstoppen',
'rc-old-title' => 'original als "$1" ugeluecht',

# Recent changes linked
'recentchangeslinked' => 'Ännerungen op verlinkte Säiten',
'recentchangeslinked-feed' => 'Ännerungen op verlinkte Säiten',
'recentchangeslinked-toolbox' => 'Ännerungen op verlinkte Säiten',
'recentchangeslinked-title' => 'Ännerungen a Verbindung mat "$1"',
'recentchangeslinked-noresult' => 'Am ausgewielten Zäitraum goufen op de verlinkte Säite keng Ännerunge gemaach.',
'recentchangeslinked-summary' => "Dëst ass eng Lëscht mat Ännerunge vu verlinkte Säiten op eng bestëmmte Säit (oder vu Membersäite vun der spezifizéierter Kategorie).
Säite vun [[Special:Watchlist|Ärer Iwwerwaachungslëscht]] si '''fett''' geschriwwen.",
'recentchangeslinked-page' => 'Säitennumm:',
'recentchangeslinked-to' => 'Weis Ännerungen zu de verlinkte Säiten aplaz vun der gefroter Säit',

# Upload
'upload' => 'Eroplueden',
'uploadbtn' => 'Fichier eroplueden',
'reuploaddesc' => 'Eroplueden ofbriechen an zréck op de Formulaire fir Eropzelueden',
'upload-tryagain' => 'Déi geännert Beschreiwung vum Fichier schécken',
'uploadnologin' => 'Net ageloggt',
'uploadnologintext' => 'Dir musst [[Special:UserLogin|ageloggt sinn]], fir Fichieren eroplueden zu kënnen.',
'upload_directory_missing' => 'De Repertoire an deen Dir eropluede wollt ($1) feelt a konnt net vum Webserver ugeluecht ginn.',
'upload_directory_read_only' => 'De Webserver kann net an den Upload-Repertoire ($1) schreiwen.',
'uploaderror' => 'Feeler bäim Eroplueden',
'upload-recreate-warning' => "'''Opgepasst: E Fichier mat deem Numm gouf scho geläscht oder geréckelt.'''

Hei fannt Dir en Extrait aus dem Läsch- a Réckel-Logbuch fir dëse Fichier.",
'uploadtext' => "Benotzt dëse Formulaire, fir nei Fichieren eropzelueden.
Gitt op d'[[Special:FileList|Lëscht vun den eropgeluedene Fichieren]], fir no Fichieren ze sichen déi virdrun eropgeluede goufen, Eropluedunge fannt dir an der [[Special:Log/upload|Lëscht vun den eropgeluedene Fichieren]], geläschte Fichieren am [[Special:Log/delete|Läschlog]].

Fir e '''Bild''' op enger Säit zu benotzen, schreift amplaz vum Bild eng vun dëse Formelen:
* '''<code><nowiki>[[</nowiki>{{ns:file}}<nowiki>:Fichier.jpg]]</nowiki></code>''' fir déi ganz Versioun vum Fichier ze benotzen
* '''<code><nowiki>[[</nowiki>{{ns:file}}<nowiki>:Fichier.png|200px|thumb|left|alt text]]</nowiki></code>''' fir eng 200 Pixel breet Versioun an enger Këscht am lénke Rand mat 'alt text' als Beschreiwung
* '''<code><nowiki>[[</nowiki>{{ns:media}}<nowiki>:Fichier.ogg]]</nowiki></code>''' fir e Fichier direkt ze verlinken ouni de Fichier ze weisen",
'upload-permitted' => 'Erlaabte Formater vun de Fichieren: $1.',
'upload-preferred' => 'Fichierszorten déi am beschte funktionéieren: $1.',
'upload-prohibited' => 'Verbuede Fichiers Formater: $1.',
'uploadlog' => 'Lëscht vun den eropgeluedene Fichieren',
'uploadlogpage' => 'Logbuch vum Eroplueden',
'uploadlogpagetext' => "Dëst ass d'Lëscht vun de rezente Fichieren déi eropgeluede goufen.
Kuckt [[Special:NewFiles|d'Gallerie vun de neie Fichieren]] wann Dir méi e visuellen Iwwerbléck wëllt",
'filename' => 'Numm vum Fichier',
'filedesc' => 'Resumé',
'fileuploadsummary' => 'Resumé/Quell:',
'filereuploadsummary' => 'Ännerunge vum Fichier:',
'filestatus' => 'Copyright Status:',
'filesource' => 'Quell:',
'uploadedfiles' => 'Eropgeluede Fichieren',
'ignorewarning' => 'Warnung ignoréieren an de Fichier nawell späicheren',
'ignorewarnings' => 'Ignoréier all Iwwerschreiwungswarnungen',
'minlength1' => "D'Nimm vu Fichiere musse mindestens e Buschtaf am Numm hunn.",
'illegalfilename' => 'Am Fichiersnumm "$1" sti Schrëftzeechen, déi net am Numm vun enger Säit erlaabt sinn. W.e.g. nennt de Fichier anescht, a probéiert dann nach eng Kéier.',
'filename-toolong' => 'Nimm vu Fichieren däerfen net méi laang si wéi 240 Byten.',
'badfilename' => 'Den Numm vum Fichier gouf an "$1" ëmgeännert.',
'filetype-mime-mismatch' => 'Dateierweiderung ".$1" passt net op de MIME-Typ vum Fichier ($2).',
'filetype-badmime' => 'Fichiere vum MIME-Typ "$1" kënnen net eropgeluede ginn.',
'filetype-bad-ie-mime' => 'Dëse Fichier kann net eropgeluede ginn, well den Internet Explorer en als „$1“ erkennt, deen net erlaabt ass well et e potentiell geféierleche Fichierstyp ass.',
'filetype-unwanted-type' => "'''\".\$1\"''' ass een onerwënschte Fichiersformat.
Erwënschte {{PLURAL:\$3|Format ass|Formater sinn}}: \$2.",
'filetype-banned-type' => '\'\'\'".$1"\'\'\' {{PLURAL:$4|is not a permitted file type|si Fichiersformater déi net erlaabt sinn}}.
Erlaabt {{PLURAL:$3|ass|sinn}}: $2.',
'filetype-missing' => 'De Fichier huet keng Erweiderung (wéi z. B. ".jpg").',
'empty-file' => 'De Fichier deen Dir geschéckt hutt war eidel.',
'file-too-large' => 'De Fichier deen Dir geschéckt hutt war ze grouss.',
'filename-tooshort' => 'Den Numm vum Fichier ass ze kuerz.',
'filetype-banned' => 'Dësen Typ vu Fichier kann net eropgeluede ginn.',
'verification-error' => "Dëse Fichier huet d'Fichiers-Iwwerpréifung net passéiert.",
'hookaborted' => "D'Ännerung déi Dir versicht hutt ze maachen ass duerch en 'extension-hook' ofgebrach ginn.",
'illegal-filename' => 'Den Numm vum Fichier ass net erlaabt.',
'overwrite' => "D'Iwwerschreiwe vun engem Fichier ass net erlaabt.",
'unknown-error' => 'En onbekannte Feeler ass geschitt.',
'tmp-create-error' => 'Den temporäre Fichier konnt net ugeluecht ginn.',
'tmp-write-error' => 'Feeler beim Schreiwe vum temporäre Fichier.',
'large-file' => "D'Fichiere sollen no Méiglechkeet net méi grouss wéi $1 sinn. Dëse Fichier huet $2.",
'largefileserver' => 'Dëse Fichier ass méi grouss wéi déi um Server agestallte Maximalgréisst.',
'emptyfile' => 'De Fichier deen Dir eropgelueden hutt, schéngt eidel ze sinn. Dëst kann duerch en Tippfeeler am Numm vum Fichier kommen. Préift w.e.g. no, op Dir dëse Fichier wierklech eropluede wëllt.',
'windows-nonascii-filename' => "Dës Wiki ënnerstëtzt d'Spezialzeechen an de Fichiersnimm net.",
'fileexists' => 'Et gëtt schonn e Fichier mat dësem Numm, kuckt w.e.g.
<strong>[[:$1]]</strong> wann Dir net sécher sidd, ob Dir den Numm ännere wëllt.
[[$1|thumb]]',
'filepageexists' => "D'Beschreiwungssäit fir dëse Fichier gouf schonns als <strong>[[:$1]]</strong> ugeluecht, et gëtt awer kee Fichier mat deem Numm.

De Resumé deen Dir agitt, gëtt net op d'Beschreiwungssäit iwwerholl.
Fir datt äre Resumé do opdaucht musst Dir e manuell änneren.
[[$1|thumb]]",
'fileexists-extension' => 'E Fichier mat engem ähnlechen Numm gëtt et schonn: [[$2|thumb]]
* Numm vum Fichier deen Dir versicht eropzelueden: <strong>[[:$1]]</strong>
* Numm vum Fichier deen et scho gëtt: <strong>[[:$2]]</strong>
Wielt w.e.g. en aneren Numm.',
'fileexists-thumbnail-yes' => "Beim Fichier schéngt et sech ëm e klengt Bild ''(Miniatur)'' ze handelen. [[$1|thumb]]
Kuckt de Fichier <strong>[[:$1]]</strong> w.e.g. no.
Wann et sech ëm d'Bild an der Originalgréisst handelt, da brauch kee separat Bild als Minitaur eropgelueden ze ginn.",
'file-thumbnail-no' => "Den Numm vum Fichier fänkt mat <strong>$1</strong> un.
Da deit drop hin datt et eng Minitaur ''(thumbnail)'' ass.
Wann Dir dat Bild a méi enger grousser Opléisung hutt, da luet dëst erop, soss ännert den Numm vum Fichier w.e.g.",
'fileexists-forbidden' => 'Et gëtt schonn e Fichier mat dësem Numm an dee kann net iwwerschriwwe ginn.
Wann Dir de Fichier nach ëmmer eropluede wëllt, da gitt w.e.g. zréck a benotzt en neien Numm. [[File:$1|thumb|center|$1]]',
'fileexists-shared-forbidden' => 'E Fichier mat dësem Numm gëtt et schonn an dem gedeelte Repertoire.
Wann Dir dëse Fichier trotzdeem eropluede wëllt da gitt w.e.g. zréck a luet dëse Fichier ënner engem aneren Numm erop. [[File:$1|thumb|center|$1]]',
'file-exists-duplicate' => 'Dëse Fichier schéngt een Doublon vun {{PLURAL:$1|dësem Fichier|dëse Fichieren}} ze sinn:',
'file-deleted-duplicate' => 'En identesche Fichier ([[:$1]]) gouf virdru geläscht. Kuckt w.e.g. an der Lëscht vum Läschen no, Ier Dir en nach emol eropluet.',
'uploadwarning' => 'Opgepasst',
'uploadwarning-text' => "Ännert d'Beschreiwung hei ënnedrënner w.e.g. a versicht et nach eng Kéier.",
'savefile' => 'Fichier späicheren',
'uploadedimage' => 'huet "[[$1]]" eropgelueden',
'overwroteimage' => 'huet eng nei Versioun vun "[[$1]]" eropgelueden',
'uploaddisabled' => "Pardon, d'Eropluede vu Fichieren ass ausgeschalt.",
'copyuploaddisabled' => "D'Eroplueden iwwer URL ass desaktivéiert.",
'uploadfromurl-queued' => "Dat wat Dir eropgelueden hutt gouf an d'Waardelëscht agedroen.",
'uploaddisabledtext' => "D'Eropluede vu Fichieren ass ausgeschalt.",
'php-uploaddisabledtext' => "D'Eropluede vu Fichieren ass am PHP desaktivéiert. Kuckt w.e.g. d'Astellung ''file_uploads'' no.",
'uploadscripted' => 'An dësem Fichier ass HTML- oder Scriptcode, dee vun engem Webbrowser falsch interpretéiert kéint ginn.',
'uploadvirus' => 'An dësem Fichier ass ee Virus! Detailer: $1',
'uploadjava' => "An dësem ZIP-Fichier ass e JAVA CLASS-Fichier dran.
D'Eropluede vu JAVA-Fichieren ass net erlaabt, well si d'Ëmgoe vu Sécherheetsmoossnamen erméigleche kënnen.",
'upload-source' => 'Quell-Fichier',
'sourcefilename' => 'Numm vum Originalfichier:',
'sourceurl' => 'Quell-URL:',
'destfilename' => 'Numm ënner deem de Fichier gespäichert gëtt:',
'upload-maxfilesize' => 'Maximal Fichiersgréisst: $1',
'upload-description' => 'Beschreiwung vum Fichier',
'upload-options' => 'Optioune vum Eroplueden',
'watchthisupload' => 'Dëse Fichier iwwerwaachen',
'filewasdeleted' => 'E Fichier mat dësem Numm gouf schonn eemol eropgelueden an duerno nees geläscht. Kuckt w.e.g op $1 no, ier Dir dee Fichier nach eng Kéier eropluet.',
'filename-bad-prefix' => "Den Numm vum Fichier fänkt mat '''„$1“''' un. Dësen Numm krut en automatesch vun der Kamera a seet näischt iwwer dat aus, wat drop ass. Gitt dem Fichier w.e.gl. en Numm, deen den Inhalt besser beschreift, an deen net verwiesselt ka ginn.",
'upload-success-subj' => 'Eroplueden erfollegräich',
'upload-success-msg' => 'Ärt Eropluede vun [$2] huet fonctionnéiert. De Fichier ass hei disponibel: [[:{{ns:file}}:$1]]',
'upload-failure-subj' => 'Problem beim Eroplueden',
'upload-failure-msg' => 'Et gouf e Problem mam Fichier vu(n) [$2] deen Dir eropgelueden hutt:

$1',
'upload-warning-subj' => 'Warnung beim Eroplueden',
'upload-warning-msg' => 'Et gouf e Problem beim Eropluede vun [$2]. Dir kënnt op de [[Special:Upload/stash/$1|Formulaire fir eropzelueden]] goe fir de Problem ze léisen.',

'upload-proto-error' => 'Falsche Protokoll',
'upload-proto-error-text' => "D'URL muss mat <code>http://</code> oder <code>ftp://</code> ufänken.",
'upload-file-error' => 'Interne Feeler',
'upload-file-error-text' => 'Beim Erstelle vun engem temporäre Fichier um Server ass een interne Feeler geschitt.
Informéiert w.e.g. e vun den [[Special:ListUsers/sysop|Administrateuren]].',
'upload-misc-error' => 'Onbekannte Feeler beim Eroplueden',
'upload-misc-error-text' => "Beim Eroplueden ass en onbekannte Feeler geschitt.
Kuckt d'URL w.e.g. no, a vergewëssert iech datt d'Säit online ass a probéiert et dann nach eng Kéier.
Wann de Problem weider besteet, dann un de [[Special:ListUsers/sysop|Administrateuren]].",
'upload-too-many-redirects' => "Et waren zevill Viruleedungen fir d'URL do",
'upload-unknown-size' => 'Onbekannte Gréisst',
'upload-http-error' => 'Et ass en HTTP-Feeler geschitt: $1',
'upload-copy-upload-invalid-domain' => "Vun dësem Domain ass d'Eropluede vu Kopien net méiglech.",

# File backend
'backend-fail-stream' => 'De Fichier $1 konnt net iwwerdroe ginn.',
'backend-fail-backup' => 'De Fichier $1 konnt net geséchert ginn.',
'backend-fail-notexists' => 'De Fichier $1 gëtt et net.',
'backend-fail-notsame' => 'Et gëtt schonn en net-identesche Fichier op $1.',
'backend-fail-invalidpath' => '$1 ass keng valabel Plaz fir ze späicheren.',
'backend-fail-delete' => 'De Fichier $1 konnt net geläscht ginn.',
'backend-fail-alreadyexists' => 'De Fichier $1 gëtt et schonn.',
'backend-fail-store' => 'De Fichier $1 konnt net op $2 gespäichert ginn.',
'backend-fail-copy' => 'De Fichier $1 konnt net op $2 kopéiert ginn.',
'backend-fail-move' => 'De Fichier $1 konnt net op $2 geréckelt ginn.',
'backend-fail-opentemp' => 'Den temporäre Fichier konnt net opgemaach ginn.',
'backend-fail-writetemp' => 'Den temporäre Fichier konnt net geännert ginn.',
'backend-fail-closetemp' => 'Den temporäre Fichier konnt net zougemaach ginn.',
'backend-fail-read' => 'De Fichier $1 konnt net geliest ginn.',
'backend-fail-create' => 'De Fichier $1 konnt net geschriwwe ginn.',
'backend-fail-maxsize' => 'De Fichier $1 konnt net geschriwwe gi well e méi grouss ass wéi {{PLURAL:$2|ee Byte|$2 Byten}}.',
'backend-fail-readonly' => 'De Späicher-Backend "$1" kann elo nëmme geliest ginn (read-only). De Grond deen ugi gouf war: "$2"',

# Lock manager
'lockmanager-notlocked' => '"$1" konnt net fräigeschalt ginn; $1 ass net gespaart.',
'lockmanager-fail-closelock' => 'De Spärfichier fir "$1" konnt net zougemaach ginn.',
'lockmanager-fail-deletelock' => 'De Spärfichier fir "$1" konnt net geläscht ginn.',
'lockmanager-fail-acquirelock' => '"$1" konnt net gespaart ginn.',
'lockmanager-fail-openlock' => 'De Spärfichier fir "$1" konnt net opgemaach ginn.',
'lockmanager-fail-releaselock' => 'D\'Spär fir "$1" konnt net opgehuewe ginn.',
'lockmanager-fail-db-release' => "D'Spären op der Datebank $1 konnten net fräigeschalt ginn.",
'lockmanager-fail-svr-acquire' => "D'Spären um Server $1 konnten net ofgefrot ginn.",
'lockmanager-fail-svr-release' => "D'Spären um Server $1 konnten net fräigeschalt ginn.",

# ZipDirectoryReader
'zip-file-open-error' => 'Beim Opmaache vum ZIP-Fichier ass e Feeler geschitt.',
'zip-wrong-format' => 'De Fichier deen Dir uginn hutt war kee ZIP Fichier.',
'zip-bad' => 'De Fichier ass korrupt oder ass aus anere Grënn en net liesbare ZIP-Fichier.
E kann net uerdentlech op seng Sécherheet nogekuckt ginn.',
'zip-unsupported' => "Dëse ZIP-Fichier benotzt ZIP-Fonctiounen déi MediaWiki net ënnerstëtzt.
E kann net op d'Sécherheet nogekuckt ginn.",

# Special:UploadStash
'uploadstash' => 'Um Server späichere virum Eroplueden',
'uploadstash-summary' => 'Op dëser Säit huet en Zougrëff op Fichieren déi eropgeluede sinn (oder am Gaang sinn eropgelueden ze ginn) déi awer nach net op der Wiki publizéiert sinn. Dës Fichier kënnen eenzeg an eleng vun deem Benotzer deen se eropgelueden huet gesi ginn.',
'uploadstash-clear' => 'Um Server gespäichert Fichieren déi nach net eropgeluede si läschen',
'uploadstash-nofiles' => 'Dir hutt keng gespäichert Fichieren déi Dir nach net eropgelueden hutt.',
'uploadstash-badtoken' => "D'Ausféiere vun dëser Aktioun huet net fonctionnéiert, vläicht well d'Informatiounen iwwer Är Rechter ofgelaf sinn. Probéiert et nach emol.",
'uploadstash-errclear' => "D'Läsche vun de Fichieren huet net fonctionnéiert.",
'uploadstash-refresh' => 'Lëscht vun de Fichieren aktualiséieren',

# img_auth script messages
'img-auth-accessdenied' => 'Zougang refuséiert',
'img-auth-nopathinfo' => 'PATH_INFO feelt.
Äre Server ass net agestallt fir déi Informatioun weiderzeginn.
Et kann u CGI leien an datt imag_auth net ënnerstëtzt gëtt.
Kuckt  https://www.mediawiki.org/wiki/Manual:Image_Authorization',
'img-auth-notindir' => 'De gefrote Pad ass net am Upload-Repertoire agestallt.',
'img-auth-badtitle' => 'Aus "$1" ka kee valabelen Titel gemaach ginn.',
'img-auth-nologinnWL' => 'Dir sidd net ageloggt a(n) "$1" ass net op der Wäisser Lëscht.',
'img-auth-nofile' => 'De Fichier "$1" gëtt et net.',
'img-auth-isdir' => 'Dir versicht op de Repertoire "$1" zouzegräifen.
Nèemmen Datenofruff ass erlaabt.',
'img-auth-streaming' => '"$1" lueden.',
'img-auth-public' => "D'Fonctioun img_auth.php erlaabt et fir Fichieren vun enger privater Wiki erauszeginn.
Dës Wiki ass als ëffentlech Wiki configuréiert.
Fir eng oprimal Sécherheet ass img_auth.php ausgeschalt.",
'img-auth-noread' => 'De Benotzer hut keen Zougang fir "$1" ze liesen',
'img-auth-bad-query-string' => "D'URL huet eng net valabel Rei vun Zeechen.",

# HTTP errors
'http-invalid-url' => 'Net-valabel URL: $1',
'http-invalid-scheme' => 'URLe mam Schema "$1" ginn net ënnerstëtzt',
'http-request-error' => "D'HTTP-Ufro huet wéinst engem onbekannte Feeler net fonctionnéiert.",
'http-read-error' => 'HTTP-Feeler beim Liesen.',
'http-timed-out' => 'HTTP-Ufro huet ze laang gebraucht (time out).',
'http-curl-error' => 'Feeler beim Ofruff vun der URL: $1',
'http-host-unreachable' => "D'URL konnt net erreecht ginn.",
'http-bad-status' => 'Et gouf e Problem bäi der HTTP-Ufro: $1 $2',

# Some likely curl errors. More could be added from <http://curl.haxx.se/libcurl/c/libcurl-errors.html>
'upload-curl-error6' => "URL ass net z'erreechen",
'upload-curl-error6-text' => 'Déi URL déi Dir uginn hutt kann net erreecht ginn.
Kuckt w.e.g. no op kee Feeler an der URL ass an op de Site och online ass.',
'upload-curl-error28' => "D'Eroplueden huet ze laang gedauert (timeout)",
'upload-curl-error28-text' => "Dëse Site huet ze laang gebraucht fir z'äntwerten. Kuckt w. e. g. no, ob dëse Site online ass, waart een Ament a probéiert et dann nach eng Kéier. Et ka sënnvoll sinn, et nach eng Kéier méi spéit ze versichen.",

'license' => 'Lizenz',
'license-header' => 'Lizenz',
'nolicense' => 'Keng Lizenz ausgewielt',
'license-nopreview' => '(Kucken ouni ofzespäichere geet net)',
'upload_source_url' => ' (gëlteg, ëffentlech zougänglech URL)',
'upload_source_file' => ' (e Fichier op Ärem Computer)',

# Special:ListFiles
'listfiles-summary' => 'Op dëser Spezialsäit stinn all déi eropgeluede Fichieren.

Wa se pro Benotzer gefiltert sinn, ginn nëmmen déi Fichiere gewise wou dee Benotzer déi lescht Versioun vum Fichier eropgelueden huet.',
'listfiles_search_for' => 'Sicht nom Fichier:',
'imgfile' => 'Fichier',
'listfiles' => 'Lëscht vun de Fichieren',
'listfiles_thumb' => 'Miniaturbild',
'listfiles_date' => 'Datum',
'listfiles_name' => 'Numm',
'listfiles_user' => 'Benotzer',
'listfiles_size' => 'Gréisst',
'listfiles_description' => 'Beschreiwung',
'listfiles_count' => 'Versiounen',

# File description page
'file-anchor-link' => 'Fichier',
'filehist' => 'Versiounen',
'filehist-help' => 'Klickt op e bestëmmten Zäitpunkt fir déi respektiv Versioun vum Fichier ze kucken.',
'filehist-deleteall' => 'All Versioune läschen',
'filehist-deleteone' => 'Läschen',
'filehist-revert' => 'zrécksetzen',
'filehist-current' => 'aktuell',
'filehist-datetime' => 'Versioun vum',
'filehist-thumb' => 'Miniaturbild',
'filehist-thumbtext' => "Miniaturbild fir d'Versioun vum $1",
'filehist-nothumb' => 'Kee Miniaturbild do',
'filehist-user' => 'Benotzer',
'filehist-dimensions' => 'Dimensiounen',
'filehist-filesize' => 'Gréisst vum Fichier',
'filehist-comment' => 'Bemierkung',
'filehist-missing' => 'Fichier feelt',
'imagelinks' => 'Benotze vu Fichieren',
'linkstoimage' => 'Dës {{PLURAL:$1|Säit benotzt|Säite benotzen}} dëse Fichier:',
'linkstoimage-more' => 'Méi wéi {{PLURAL:$1|eng Säit ass|$1 Säite si}} mat dësem Fichier verlinkt.
Dës Lëscht weist nëmmen {{PLURAL:$1|den éischte Link|déi éischt $1 Linken}} op dëse Fichier.
Eng [[Special:WhatLinksHere/$2|komplett Lëscht]] ass disponibel.',
'nolinkstoimage' => 'Keng Säit benotzt dëse Fichier.',
'morelinkstoimage' => 'Weis [[Special:WhatLinksHere/$1|méi Linken]] op dëse Fichier.',
'linkstoimage-redirect' => '$1 (Fichier-Viruleedung) $2',
'duplicatesoffile' => '{{PLURAL:$1|De Fichier ass een Doublon|Dës Fichiere sinn Doublone}} vum Fichier ([[Special:FileDuplicateSearch/$2|méi Detailer]]):',
'sharedupload' => 'Dëse Fichier ass vu(n) $1 a ka vun anere Projete benotzt ginn.',
'sharedupload-desc-there' => "Dëse Fichier ass vu(n) $1 a kann an anere Projete benotzt ginn.
Kuckt w.e.g. d'[$2 Säit mat der Beschreiwung vum Fichier] fir méi Informatiounen.",
'sharedupload-desc-here' => "Dëse Fichier ass vu(n) $1 an däerf vun anere Projete benotzt ginn.
D'Beschreiwung op senger [$2 Beschreiwungssäit] steet hei ënnendrënner.",
'sharedupload-desc-edit' => 'Dëse Fichier ass vu(n) $1 a ka vun anere Projete benotzt ginn.
Dir kënnt seng Beschreiwung op senger [$2 Beschreiwungssäit] änneren.',
'sharedupload-desc-create' => 'Dëse Fichier ass vu(n) $1 a ka vun anere Projete benotzt ginn.
Dir kënnt seng Beschreiwung op senger [$2 Beschreiwungssäit] änneren.',
'filepage-nofile' => 'Et gëtt kee Fichier mat deem Numm.',
'filepage-nofile-link' => 'Et gëtt kee Fichier mat deem Numm, awer Dir kënnt [$1 en eroplueden].',
'uploadnewversion-linktext' => 'Eng nei Versioun vun dësem Fichier eroplueden',
'shared-repo-from' => 'vu(n) $1',
'shared-repo' => 'e gemeinsam genotzte Medienarchiv',
'shared-repo-name-wikimediacommons' => 'Wikimedia-Commons',
'upload-disallowed-here' => 'Dir kënnt Dir dëse Fichier net iwwerschreiwen.',

# File reversion
'filerevert' => '"$1" zrécksetzen',
'filerevert-legend' => 'De Fichier zrécksetzen.',
'filerevert-intro' => "Dir setzt de Fichier '''[[Media:$1|$1]]''' op d'[$4 Versioun vum $2, $3 Auer] zréck.",
'filerevert-comment' => 'Bemierkung:',
'filerevert-defaultcomment' => "zréckgesat op d'Versioun vum $1, $2 Auer",
'filerevert-submit' => 'Zrécksetzen',
'filerevert-success' => "'''[[Media:$1|$1]]''' gouf op d'[$4 Versioun vum $2, $3 Auer] zréckgesat.",
'filerevert-badversion' => 'Et gëtt keng Versioun vun deem Fichier mat der Zäitinformatioun déi Dir uginn hutt.',

# File deletion
'filedelete' => 'Läsch "$1"',
'filedelete-legend' => 'Fichier läschen',
'filedelete-intro' => "Dir läscht de Fichier '''[[Media:$1|$1]]''' mat all senge Versiounen (Historique).",
'filedelete-intro-old' => "Dir läscht  d'Versioun $4  vum $2, $3 Auer vum Fichier '''„[[Media:$1|$1]]“'''.",
'filedelete-comment' => 'Grond:',
'filedelete-submit' => 'Läschen',
'filedelete-success' => "'''$1''' gouf geläscht.",
'filedelete-success-old' => "D'Versioun vu(n) '''[[Media:$1|$1]]''' vum $2, $3 Auer gouf geläscht.",
'filedelete-nofile' => "'''$1''' gëtt et net.",
'filedelete-nofile-old' => "Et gëtt vun '''$1''' keng archivéiert Versioun mat den Attributer déi dir uginn hutt.",
'filedelete-otherreason' => 'Aneren/zousätzleche Grond:',
'filedelete-reason-otherlist' => 'Anere Grond',
'filedelete-reason-dropdown' => "* Allgemeng Läschgrënn
** Verletzung vun den Droits d'auteur
** De Fichier gëtt et nach eng Kéier an der Datebank",
'filedelete-edit-reasonlist' => 'Läschgrënn änneren',
'filedelete-maintenance' => 'Läschen a Restauréiere vu Fichieren temporär ausgeschalt wéinst Maintenance.',
'filedelete-maintenance-title' => 'De Fichier kann net geläscht ginn',

# MIME search
'mimesearch' => 'No MIME-Zort sichen',
'mimesearch-summary' => "Op dëser Spezialsäit kënnen d'Fichieren no hirem MIME-Typ gefiltert ginn.
Dir musst ëmmer de Medien- a Subtyp aginn: z. Bsp. <code>image/jpeg</code>.",
'mimetype' => 'MIME-Typ:',
'download' => 'eroflueden',

# Unwatched pages
'unwatchedpages' => 'Nët iwwerwaachte Säiten',

# List redirects
'listredirects' => 'Lëscht vun de Viruleedungen',

# Unused templates
'unusedtemplates' => 'Onbenotzte Schablounen',
'unusedtemplatestext' => 'Op dëser Säit stinn all Säiten aus dem {{ns:template}} Nummraum, déi a kenger anerer Säit benotzt ginn. Vergiesst net nozekucken, ob et keng aner Linken op dës Schabloune gëtt, ier Dir eng Schabloun läscht.',
'unusedtemplateswlh' => 'Aner Linken',

# Random page
'randompage' => 'Zoufallssäit',
'randompage-nopages' => 'Et gëtt keng Säiten {{PLURAL:$2|am Nummraum|an den Nummraim}}: $1.',

# Random redirect
'randomredirect' => 'Zoufälleg Viruleedung',
'randomredirect-nopages' => 'Am Nummraum $1 gëtt et keng Viruleedungen.',

# Statistics
'statistics' => 'Statistik',
'statistics-header-pages' => 'Säitestatistiken',
'statistics-header-edits' => 'Statistik vun den Ännerungen',
'statistics-header-views' => "Statistiken iwwert d'Visiten",
'statistics-header-users' => 'Benotzerstatistik',
'statistics-header-hooks' => 'Aner Statistiken',
'statistics-articles' => 'Säite mat Inhalt',
'statistics-pages' => 'Säiten',
'statistics-pages-desc' => 'All Säiten an der Wiki, inklusiv Diskussiounssäiten, Viruleedungen, asw.',
'statistics-files' => 'Eropgeluede Fichieren',
'statistics-edits' => 'Säitenännerungen zënter datt et {{SITENAME}} gëtt',
'statistics-edits-average' => 'Duerchschnëttlech Zuel vun Ännerunge pro Säit',
'statistics-views-total' => 'Total vun den Oprif',
'statistics-views-total-desc' => 'Kucke vu Säiten déi et net gëtt a vu Spezialsäite sinn net mat dran',
'statistics-views-peredit' => 'Affichage pro Ännerung',
'statistics-users' => 'Registréiert [[Special:ListUsers|Benotzer]]',
'statistics-users-active' => 'Aktiv Benotzer',
'statistics-users-active-desc' => 'Benotzer déi während {{PLURAL:$1|dem leschten Dag|de leschten $1 Deeg}} eppes gemaach hunn',
'statistics-mostpopular' => 'Am meeschte gekuckte Säiten',

'disambiguations' => 'Säiten déi op Homonymie-Säite linken',
'disambiguationspage' => 'Template:Homonymie',
'disambiguations-text' => "Dës Säite ass mat mindestens enger '''Homonymie-Säit''' verlinkt.
Si sollte am beschten op déi eigentlech gemengte Säit verlinkt sinn.<br />
Eng Säite gëtt als Homonymie-Säit behandelt, wa si eng Schabloun benotzt déi vu [[MediaWiki:Disambiguationspage]] verlinkt ass.",

'doubleredirects' => 'Duebel Viruleedungen',
'doubleredirectstext' => 'Op dëser Säit stinn déi Säiten déi op aner Viruleedungssäite viruleeden.
An all Rei sti Linken zur éischter an zweeter Viruleedung, souwéi d\'Zil vun der zweeter Viruleedung, déi normalerweis déi "richteg" Zilsäit ass, op déi déi éischt Viruleedung hilinke soll.
<del>Duerchgestrachen</del> Linke goufe schonn esou verännert datt déi duebel Viruleedung opgeléist ass.',
'double-redirect-fixed-move' => '[[$1]] gouf geréckelt, et ass elo eng Viruleedung op [[$2]]',
'double-redirect-fixed-maintenance' => 'Flécke vun der duebeler Viruleedung vu(n) [[$1]] op [[$2]].',
'double-redirect-fixer' => 'Verbesserung vu Viruleedungen',

'brokenredirects' => 'Futtis Viruleedungen',
'brokenredirectstext' => 'Dës Viruleedunge linken op Säiten déi et net gëtt.',
'brokenredirects-edit' => 'änneren',
'brokenredirects-delete' => 'läschen',

'withoutinterwiki' => 'Säiten ouni Interwiki-Linken',
'withoutinterwiki-summary' => 'Op dëser Spezialsäit stinn all déi Säiten déi keng Interwikilinken hunn.',
'withoutinterwiki-legend' => 'Prefix',
'withoutinterwiki-submit' => 'Weisen',

'fewestrevisions' => 'Säite mat de mannsten Ännerungen',

# Miscellaneous special pages
'nbytes' => '$1 {{PLURAL:$1|Byte|Byten}}',
'ncategories' => '$1 {{PLURAL:$1|Kategorie|Kategorien}}',
'ninterwikis' => '$1 {{PLURAL:$1|Interwiki-Link|Interwiki-Linken}}',
'nlinks' => '$1 {{PLURAL:$1|Link|Linken}}',
'nmembers' => '$1 {{PLURAL:$1|Member|Memberen}}',
'nrevisions' => '$1 {{PLURAL:$1|Versioun|Versiounen}}',
'nviews' => '$1 {{PLURAL:$1|Offro|Offroen}}',
'nimagelinks' => 'Benotzt op {{PLURAL:$1|enger Säit|$1 Säiten}}',
'ntransclusions' => 'benotzt op {{PLURAL:$1|enger Säit|$1 Säiten}}',
'specialpage-empty' => 'Dës Säit ass eidel.',
'lonelypages' => 'Weesesäiten',
'lonelypagestext' => 'Dës Säite sinn net vun anere Säite vu(n) {{SITENAME}} verlinkt respektiv a kenger Säit vu(n) {{SITENAME}} agebonn.',
'uncategorizedpages' => 'Säiten ouni Kategorie',
'uncategorizedcategories' => 'Kategorien déi selwer nach keng Kategorie hunn',
'uncategorizedimages' => 'Biller ouni Kategorie',
'uncategorizedtemplates' => 'Schablounen ouni Kategorie',
'unusedcategories' => 'Onbenotzte Kategorien',
'unusedimages' => 'Onbenotzte Biller',
'popularpages' => 'Populär Säiten',
'wantedcategories' => 'Gewënscht Kategorien',
'wantedpages' => 'Gewënschte Säiten',
'wantedpages-badtitle' => 'Net valabelen Titel am Resultat: $1',
'wantedfiles' => 'Gewënschte Fichieren',
'wantedfiletext-cat' => 'Dës Fichiere gi benotzt awer et gëtt se net. Fichiere aus frieme Repositorie kënnen hei gewise ginn och wann et se gëtt. All esou falsch Positiver ginn <del>duerchgestrach</del>. Zousätzlech gi Säiten an deene Fichieren dra sinn déi et net gëtt op [[:$1]] gewisen.',
'wantedtemplates' => 'Gewënschte Schablounen',
'mostlinked' => 'Dacks verlinkte Säiten',
'mostlinkedcategories' => 'Dacks benotzte Kategorien',
'mostlinkedtemplates' => 'Dacks benotzte Schablounen',
'mostcategories' => 'Säite mat de meeschte Kategorien',
'mostimages' => 'Dacks benotzte Biller',
'mostinterwikis' => 'Säite mat de meeschten Interwikilinken',
'mostrevisions' => 'Säite mat de meeschte Versiounen',
'prefixindex' => 'All Säite mat Prefix',
'prefixindex-namespace' => 'All Säite mat Prefix (Nummraum $1)',
'shortpages' => 'Kuerz Säiten',
'longpages' => 'Laang Säiten',
'deadendpages' => 'Sakgaasse-Säiten',
'deadendpagestext' => 'Dës Säite si mat kenger anerer Säit op {{SITENAME}} verlinkt.',
'protectedpages' => 'Gespaarte Säiten',
'protectedpages-indef' => 'Nëmme onbegrenzt-gespaarte Säite weisen',
'protectedpages-cascade' => 'Nëmme Säiten déi duerch Kaskade gespaart sinn',
'protectedpagestext' => 'Dës Säite si gespaart esou datt si weder geännert nach geréckelt kënne ginn',
'protectedpagesempty' => 'Elo si keng Säite mat dëse Parameteren gespaart.',
'protectedtitles' => 'Gespaarten Titel',
'protectedtitlestext' => 'Dës Titele si gespaart an et ka keng Säit mat deenen Titelen ugeluecht ginn',
'protectedtitlesempty' => 'Zur Zäit si mat de Parameteren déi Dir uginn hutt keng Säite fir neit Uleeë gespaart.',
'listusers' => 'Benotzerlëscht',
'listusers-editsonly' => 'Nëmme Benotzer mat Ännerunge weisen',
'listusers-creationsort' => 'Nom Datum vum Uleeën zortéieren',
'usereditcount' => '$1 {{PLURAL:$1|Ännerung|Ännerungen}}',
'usercreated' => "{{GENDER:$3|De(n)|D'}} $1 ëm $2 Auer ugeluecht",
'newpages' => 'Nei Säiten',
'newpages-username' => 'Benotzernumm:',
'ancientpages' => 'Eelste Säiten',
'move' => 'Réckelen',
'movethispage' => 'Dës Säit réckelen',
'unusedimagestext' => 'Dës Fichieren gëtt et, si sinn awer a kenger Säit agebonn.
Denkt w.e.g. drunn datt aner Internetsäiten dëse Fichier mat enger direkter URL verlinke kënnen. An dem Fall gëtt de Fichier hei opgelëscht obwuel en aktiv gebraucht gëtt.',
'unusedcategoriestext' => 'Dës Kategoriesäiten existéieren, mä weder en Artikel nach eng Kategorie maachen dovunner Gebrauch.',
'notargettitle' => 'Dir hutt keng Säit uginn.',
'notargettext' => 'Dir hutt keng Zilsäit oder keen Zilbenotzer uginn fir déi dës Funktioun ausgeféiert soll ginn.',
'nopagetitle' => 'Zilsäit gëtt et net',
'nopagetext' => 'Déi Zilsäit déi dir uginn hutt gëtt et net.',
'pager-newer-n' => '{{PLURAL:$1|nächsten|nächst $1}}',
'pager-older-n' => '{{PLURAL:$1|vireg|vireg $1}}',
'suppress' => 'Iwwersiicht',
'querypage-disabled' => 'Dës Spezialsäit ass aus Performance-Grënn ausgeschalt.',

# Book sources
'booksources' => 'Bicherreferenzen',
'booksources-search-legend' => 'No Bicherreferenze sichen',
'booksources-go' => 'Sichen',
'booksources-text' => 'Hei ass eng Lëscht mat Linken op Internetsäiten, déi nei a gebraucht Bicher verkafen. Do kann et sinn datt Dir méi Informatiounen iwwer déi Bicher fannt déi Dir sicht.',
'booksources-invalid-isbn' => "D'ISBN-Nummer déi Dir uginn hutt schéngt net gëlteg ze sinn. Kuckt w.e.g. no ob beim Kopéiere kee Feeler geschitt ass.",

# Special:Log
'specialloguserlabel' => 'Aktive Benotzer:',
'speciallogtitlelabel' => 'Zil (Titel oder Benotzer):',
'log' => 'Logbicher',
'all-logs-page' => 'All ëffentlech Logbicher',
'alllogstext' => "Dëst ass eng kombinéiert Lëscht vu Logbicher op {{SITENAME}}.
Dir kënnt d'Siche limitéieren wann Dir e Log-Typ, e Benotzernumm (case-senisitive) oder déi gefrote Säit (och case-senisitive) agitt.",
'logempty' => 'Näischt fonnt.',
'log-title-wildcard' => 'Titel fänkt mat dësem Text un',
'showhideselectedlogentries' => 'Déi erausgesichte Entréeën am Logbuch weisen/verstoppen',

# Special:AllPages
'allpages' => 'All Säiten',
'alphaindexline' => '$1 bis $2',
'nextpage' => 'Nächst Säit ($1)',
'prevpage' => 'Säit viru(n) ($1)',
'allpagesfrom' => 'Säite weisen, ugefaange mat:',
'allpagesto' => 'Weis Säite bis:',
'allarticles' => 'All Säiten',
'allinnamespace' => "All d'Säiten ($1 Nummraum)",
'allnotinnamespace' => "All d'Säiten (net am $1 Nummraum)",
'allpagesprev' => 'Vireg',
'allpagesnext' => 'Nächst',
'allpagessubmit' => 'Lass',
'allpagesprefix' => 'Säite mat Prefix weisen:',
'allpagesbadtitle' => 'Den Titel vun dëser Säit ass net valabel oder hat en Interwiki-Prefix. Et ka sinn datt een oder méi Zeechen drasinn, déi net an Titele benotzt kënne ginn.',
'allpages-bad-ns' => 'Den Nummraum „$1“ gëtt et net op {{SITENAME}}.',
'allpages-hide-redirects' => 'Viruleedunge verstoppen',

# SpecialCachedPage
'cachedspecial-viewing-cached-ttl' => 'Dir gesitt eng Versioun aus dem Tëschespäicher (cache) vun dëser Säit, déi bis zu $1 al ka sinn.',
'cachedspecial-viewing-cached-ts' => 'Dir gesitt eng Versioun vun dëser Säit aus dem Tëschespäicher (cache), déi eventuell net méi aktuell ass.',
'cachedspecial-refresh-now' => 'Déi rezentst weisen.',

# Special:Categories
'categories' => 'Kategorien',
'categoriespagetext' => 'Dës {{PLURAL:$1|Kategorie huet|Kategorien hu}} Säiten oder Medien.
[[Special:UnusedCategories|Netbenotzt Kategorië]] ginn hei net gewisen.
Kuckt och [[Special:WantedCategories|Gewënscht Kategorien]].',
'categoriesfrom' => 'Weis Kategorien ugefaang bei:',
'special-categories-sort-count' => 'No der Zuel zortéieren',
'special-categories-sort-abc' => 'alphabetesch zortéieren',

# Special:DeletedContributions
'deletedcontributions' => 'Geläschte Kontributiounen',
'deletedcontributions-title' => 'Geläschte Kontributiounen',
'sp-deletedcontributions-contribs' => 'Kontributiounen',

# Special:LinkSearch
'linksearch' => 'Extern Linke sichen',
'linksearch-pat' => 'Sich-Critère:',
'linksearch-ns' => 'Nummraum:',
'linksearch-ok' => 'Sichen',
'linksearch-text' => '"Wildcards" wéi zum Beispill "*.example.com" kënne benotzt ginn.
Et muss mindestens en Top-Level-Domaine ugi ginn, wéi z. Bsp. ".org".<br />
Ënnerstëtzte Protekoller: <code>$1</code> (http:// gëtt benotzt wann näischt spezifizéiert gëtt).',
'linksearch-line' => '$1 verlinkt vun $2',
'linksearch-error' => 'Wildcards (*,?) kënnen nëmmen am Ufank vum Host-Numm benotzt ginn.',

# Special:ListUsers
'listusersfrom' => "D'Benotzer weisen, ugefaange bei:",
'listusers-submit' => 'Weis',
'listusers-noresult' => 'Kee Benotzer fonnt.',
'listusers-blocked' => '(gespaart)',

# Special:ActiveUsers
'activeusers' => 'Lëscht vun den aktive Benotzer',
'activeusers-intro' => 'Dëst ass eng Lëscht vun de Benotzer déi op iergend eng Manéier an de leschten $1 {{PLURAL:$1|Dag|Deeg}} aktiv waren.',
'activeusers-count' => '$1 {{PLURAL:$1|Ännerung|Ännerungen}} {{PLURAL:$3|gëschter|an de leschten $3 Deeg}}',
'activeusers-from' => 'Benotzer weisen, ugefaang bäi:',
'activeusers-hidebots' => 'Botte verstoppen',
'activeusers-hidesysops' => 'Administrateure verstoppen',
'activeusers-noresult' => 'Keng Benotzer fonnt.',

# Special:Log/newusers
'newuserlogpage' => 'Logbuch vun den neien Umeldungen',
'newuserlogpagetext' => "Dëst ass d'Lescht vun de Benotzernimm déi ugeluecht goufen.",

# Special:ListGroupRights
'listgrouprights' => 'Rechter vun de Benotzergruppen',
'listgrouprights-summary' => 'Dëst ass eng Lëscht vun den op dëser Wiki definéierte Benotzergruppen an den domat verbonnene Rechter.
Et ginn [[{{MediaWiki:Listgrouprights-helppage}}|zousätzlech Informatiounen]] iwwer individuell Benotzerrechter.',
'listgrouprights-key' => '* <span class="listgrouprights-granted">Recht dat zouerkannt gouf</span>
* <span class="listgrouprights-revoked">Recht dat ofgeholl gouf</span>',
'listgrouprights-group' => 'Grupp',
'listgrouprights-rights' => 'Rechter',
'listgrouprights-helppage' => 'Help:Grupperechter',
'listgrouprights-members' => '(Lëscht vun de Memberen)',
'listgrouprights-addgroup' => 'Kann {{PLURAL:$2|dës Grupp|dës Gruppen}} derbäisetzen: $1',
'listgrouprights-removegroup' => 'Kann {{PLURAL:$2|dëse Gruppe|dës Gruppen}} ewechhuelen: $1',
'listgrouprights-addgroup-all' => 'Kann all Gruppen derbäisetzen',
'listgrouprights-removegroup-all' => 'Ka Benotzer aus alle Gruppen eraushuelen',
'listgrouprights-addgroup-self' => "Däerf {{PLURAL:$2|de Grupp|d'Gruppe}} bäi säin eegene Benotzerkont derbäisetzen: $1",
'listgrouprights-removegroup-self' => "Däerf {{PLURAL:$2|de Grupp|d'Gruppe}} vu sengem eegene Benotzerkont ewechhuelen: $1",
'listgrouprights-addgroup-self-all' => 'däerf all Gruppe bäi säin eegene Benotzerkont derbäisetzen',
'listgrouprights-removegroup-self-all' => 'Däerf all Gruppe vu sengem eegene Benotzerkont ewechhuelen',

# E-mail user
'mailnologin' => 'Keng E-Mailadress',
'mailnologintext' => 'Dir musst [[Special:UserLogin|ugemellt]] sinn an eng gëlteg E-Mail Adress an Äre [[Special:Preferences|Astellungen]] aginn hunn, fir engem anere Benotzer eng E-Mail ze schécken.',
'emailuser' => 'Dësem Benotzer eng E-Mail schécken',
'emailuser-title-target' => '{{GENDER:$1|Dëser Benotzerin|Dësem Benotzer}} eng Mail schécken',
'emailuser-title-notarget' => 'Dem Benotzer eng E-Mail schécken',
'emailpage' => 'Dem Benotzer eng E-Mail schécken',
'emailpagetext' => 'Dir kënnt mat dësem Formulaire {{GENDER:$1|dësem Benotzer}} en E-Mail-Message schécken.
D\'E-Mailadress, déi Dir an [[Special:Preferences|Ären Astellungen]] aginn hutt, steet an der "From" Adress vun der Mail, sou datt den Destinataire Iech direkt äntwerte kann.',
'usermailererror' => 'E-Mail-Objet mellt deen heite Feeler:',
'defemailsubject' => '{{SITENAME}} E-Mail vum Benotzer "$1"',
'usermaildisabled' => 'Benotzer E-Mail ausgeschalt',
'usermaildisabledtext' => 'Dir kënnt op dëser Wiki anere Benotzer keng E-Mail schécken',
'noemailtitle' => 'Keng E-Mailadress',
'noemailtext' => 'Dëse Benotzer huet keng valabel E-Mailadress uginn.',
'nowikiemailtitle' => 'Keng E-Mail erlaabt',
'nowikiemailtext' => 'Dëse Benotzer wëllt keng E-Maile vun anere Benotzer kréien.',
'emailnotarget' => 'Et gëtt keen oder just een net valabele Benotzernumm fir den Empfänger.',
'emailtarget' => 'Gitt de Benotzernumm vum Empfänger an',
'emailusername' => 'Benotzernumm:',
'emailusernamesubmit' => 'Späicheren',
'email-legend' => 'Engem anere(n) {{SITENAME}}-Benotzer eng E-Mail schécken',
'emailfrom' => 'Vum:',
'emailto' => 'Fir:',
'emailsubject' => 'Sujet:',
'emailmessage' => 'Message:',
'emailsend' => 'Schécken',
'emailccme' => 'Eng E-Mailkopie vun der Noriicht fir mech',
'emailccsubject' => 'Kopie vun denger Noriicht un $1: $2',
'emailsent' => 'E-Mail geschéckt',
'emailsenttext' => 'Är E-Mail gouf fortgeschéckt.',
'emailuserfooter' => 'Dës E-Mail gouf vum $1 dem $2 geschéckt dobäi gouf d\'Funktioun "Benotzer E-Mail" op {{SITENAME}} benotzt.',

# User Messenger
'usermessage-summary' => 'Benoriichtegung hannerloossen.',
'usermessage-editor' => 'Benoriichtegungs-System',

# Watchlist
'watchlist' => 'Meng Iwwerwaachungslëscht',
'mywatchlist' => 'Meng Iwwerwaachungslëscht',
'watchlistfor2' => 'Vum $1 $2',
'nowatchlist' => 'Är Iwwerwaachungslëscht ass eidel.',
'watchlistanontext' => "Dir musst $1 fir Säiten op ärer Iwwerwaachungslëscht ze gesinn oder z'änneren.",
'watchnologin' => 'Net ageloggt',
'watchnologintext' => "Dir musst [[Special:UserLogin|ugemellt]] sinn, fir Är Iwwerwaachungslëscht z'änneren.",
'addwatch' => "Op d'Iwwerwaachungslëscht derbäisetzen",
'addedwatchtext' => "D'Säit \"[[:\$1]]\" gouf op är [[Special:Watchlist|Iwwerwaachtungslëscht]] gesat. All weider Ännerungen op dëser Säit an/oder der Diskussiounssäit ginn hei opgelëscht, an d'Säit gesäit '''fettgedréckt''' bei de [[Special:RecentChanges|rezenten Ännerungen]] aus, fir se méi séier erëmzefannen.

Wann dir dës Säit net méi iwwerwaache wëllt, klickt op \"Net méi iwwerwaachen\" uewen op der Säit.",
'removewatch' => 'Vun der Iwwerwaachungslëscht erofhuelen',
'removedwatchtext' => 'D\'Säit "[[:$1]]" gouf vun [[Special:Watchlist|ärer Iwwerwaachungslëscht]] erofgeholl.',
'watch' => 'Iwwerwaachen',
'watchthispage' => 'Dës Säit iwwerwaachen',
'unwatch' => 'Net méi iwwerwaachen',
'unwatchthispage' => 'Net méi iwwerwaachen',
'notanarticle' => 'Keng Säit',
'notvisiblerev' => 'Versioun gouf geläscht',
'watchnochange' => 'Keng vun Ären iwwerwaachte Säite gouf während der ugewisener Zäit verännert.',
'watchlist-details' => "{{PLURAL:$1|1 Säit|$1 Säiten}} sinn op ärer Iwwerwaachungsklëscht (d'Diskussiounssäite net matgezielt).",
'wlheader-enotif' => '* E-Mail-Bescheed ass aktivéiert.',
'wlheader-showupdated' => "* Säiten déi zënter ärer leschter Visite geännert goufen, si '''fett''' geschriwwen",
'watchmethod-recent' => 'Rezent Ännerunge ginn op iwwerwaacht Säiten iwwerpréift',
'watchmethod-list' => 'Iwwerwaachte Säite ginn op rezent Ännerungen iwwerpréift',
'watchlistcontains' => 'Op ärer Iwwerwaachungslëscht $1 {{PLURAL:$1|steet $1 Säit|stinn $1 Säiten}}.',
'iteminvalidname' => "Problem mat dem Objet '$1', ongëltegen Numm ...",
'wlnote' => "Hei {{PLURAL:$1|ass déi lescht Ännerung|sinn déi lescht '''$1''' Ännerunge}} vun {{PLURAL:$2|der leschter Stonn|de leschte(n) '''$2''' Stonnen}}, Stand: $3 ëm $4 Auer.",
'wlshowlast' => "D'Ännerunge vun de leschte(n) $1 Stonnen, $2 Deeg oder $3 (an de leschten 30 Deeg) weisen.",
'watchlist-options' => 'Optioune vun der Iwwerwaachungslëscht',

# Displayed when you click the "watch" button and it is in the process of watching
'watching' => 'Iwwerwaachen …',
'unwatching' => 'Net méi iwwerwaachen …',
'watcherrortext' => 'Beim Ännere vun den Astellunge vun der Iwwerwaachungslëscht fir "$1" ass e Feeler geschitt.',

'enotif_mailer' => '{{SITENAME}} E-Mail-Informatiounssystem',
'enotif_reset' => 'All Säiten als besicht markéieren',
'enotif_newpagetext' => 'Dëst ass eng nei Säit.',
'enotif_impersonal_salutation' => '{{SITENAME}}-Benotzer',
'changed' => 'geännert',
'created' => 'gemaach',
'enotif_subject' => '[{{SITENAME}}] D\'Säit "$PAGETITLE" gouf vum $PAGEEDITOR $CHANGEDORCREATED',
'enotif_lastvisited' => 'All Ännerungen op ee Bléck: $1',
'enotif_lastdiff' => 'Kuckt $1 fir dës Ännerung.',
'enotif_anon_editor' => 'Anonyme Benotzer $1',
'enotif_body' => 'Léiwe $WATCHINGUSERNAME,

D\'{{SITENAME}}-Säit "$PAGETITLE" gouf vum $PAGEEDITOR den $PAGEEDITDATE $CHANGEDORCREATED. Aktuell Versioun: $PAGETITLE_URL

$NEWPAGE

Resumé vum Mataarbechter: $PAGESUMMARY $PAGEMINOREDIT

Den Editeur kontaktéieren:
E-Mail: $PAGEEDITOR_EMAIL
Wiki: $PAGEEDITOR_WIKI

Et gi soulaang keng weider Maile geschéckt, bis Dir d\'Säit nees emol besicht hutt.
Op Ärer Iwwerwaachungslëscht kënnt Dir all Benoorichtigungsmarkeren zesummen zrécksetzen.


             Äre frëndleche {{SITENAME}} Benoriichtigungssystem

--

Fir d\'Astellungen op ären E-Mailbenoriichtigungen z\'änneren, besicht w.e.g.
{{canonicalurl:{{#special:Preferences}}}}


Fir d\'Astellungen vun ärer Iwwerwaachungslëscht z\'änneren, besicht w.e.g.
{{canonicalurl:Special:Watchlist/edit}}


Fir d\'Säit vun Ärer Iwwerwaachungslëscht erofzehuelen, gitt w.e.g. op
$UNWATCHURL

Reaktiounen a méi Hëllef:
{{canonicalurl:{{MediaWiki:Helppage}}}}',

# Delete
'deletepage' => 'Säit läschen',
'confirm' => 'Confirméieren',
'excontent' => "Inhalt war: '$1'",
'excontentauthor' => "Op der Säit stoung: '$1' (An als eenzegen dru geschriwwen hat de Benotzer '[[Special:Contributions/$2|$2]]').",
'exbeforeblank' => "Den Inhalt virum Läsche war: '$1'",
'exblank' => "D'Säit war eidel",
'delete-confirm' => 'Läsche vu(n) "$1"',
'delete-legend' => 'Läschen',
'historywarning' => "'''Opgepasst:''' Déi Säit déi Dir läsche wëllt huet en Historique mat ongeféier $1 {{PLURAL:$1|Versioun|Versiounen}}:",
'confirmdeletetext' => "Dir sidd am Gaang, eng Säit mat hirem kompletten Historique vollstänneg aus der Datebank ze läschen.
W.e.g. confirméiert, datt Dir dëst wierklech wëllt, datt Dir d'Konsequenze verstitt, an datt dat Ganzt am Aklang mat de [[{{MediaWiki:Policy-url}}|Richtlinne]] geschitt.",
'actioncomplete' => 'Aktioun ofgeschloss',
'actionfailed' => 'Aktioun huet net fonctionnéiert',
'deletedtext' => '"$1" gouf geläscht. Kuckt $2 fir eng Lëscht vun de Säiten déi viru Kuerzem geläscht goufen.',
'dellogpage' => 'Läschlëscht',
'dellogpagetext' => 'Hei fannt dir eng Lëscht mat rezent geläschte Säiten. All Auerzäiten sinn déi vum Server.',
'deletionlog' => 'Läschlëscht',
'reverted' => 'Op déi Versioun virdrun zréckgesat',
'deletecomment' => 'Grond:',
'deleteotherreason' => 'Aneren/ergänzende Grond:',
'deletereasonotherlist' => 'Anere Grond',
'deletereason-dropdown' => '* Heefegst Grënn fir eng Säit ze läschen
** Wonsch vum Auteur
** Verletzung vun engem Copyright
** Vandalismus',
'delete-edit-reasonlist' => 'Läschgrënn änneren',
'delete-toobig' => "Dës Säit huet e laangen Historique, méi wéi $1 {{PLURAL:$1|Versioun|Versiounen}}.
D'Läsche vun esou Säite gouf limitéiert fir ongewollte Stéierungen op {{SITENAME}} ze verhënneren.",
'delete-warning-toobig' => "Dës Säit huet eng laang Versiounsgeschicht, méi wéi $1 {{PLURAL:$1|Versioun|Versiounen}}.
D'Läschen dovun kann zu Stéierungen am Funktionnement vun {{SITENAME}} féieren;
dës Aktioun soll mat Vierssiicht gemaach ginn.",

# Rollback
'rollback' => 'Ännerungen zrécksetzen',
'rollback_short' => 'Zrécksetzen',
'rollbacklink' => 'Zrécksetzen',
'rollbacklinkcount' => '{{PLURAL:$1|Eng Ännerung|$1 Ännerungen}} zerécksetzen',
'rollbacklinkcount-morethan' => 'méi wéi {{PLURAL:$1|Eng Ännerung|$1 Ännerungen}} zerécksetzen',
'rollbackfailed' => 'Zrécksetzen huet net geklappt',
'cantrollback' => 'Lescht Ännerung kann net zréckgesat ginn. De leschten Auteur ass deen eenzegen Auteur vun dëser Säit.',
'alreadyrolled' => 'Déi lescht Ännerung vun der Säit [[:$1]] vum [[User:$2|$2]] ([[User talk:$2|talk]]{{int:pipe-separator}}[[Special:Contributions/$2|{{int:contribslink}}]]);; kann net zeréckgesat ginn;
een Aneren huet dëst entweder scho gemaach oder nei Ännerungen agedroen.

Déi lescht Ännerung vun der Säit ass vum [[User:$3|$3]] ([[User talk:$3|Diskussioun]]{{int:pipe-separator}}[[Special:Contributions/$3|{{int:contribslink}}]]).',
'editcomment' => "De Resumé vun der Ännerung war: \"''\$1''\".",
'revertpage' => 'Ännerunge vum [[Special:Contributions/$2|$2]] ([[User talk:$2|Diskussioun]]) zréckgesat op déi lescht Versioun vum [[User:$1|$1]]',
'revertpage-nouser' => 'Zréckgesaten Ännerungen vum (Benotzernummewechgeholl) op déilescht Versioun vum [[User:$1|$1]]',
'rollback-success' => "D'Ännerunge vum $1 goufen zréckgesat op déi lescht Versioun vum $2.",

# Edit tokens
'sessionfailure-title' => 'Setzungsfeeler',
'sessionfailure' => 'Et schéngt e Problem mat ärer Loginséance ze ginn;
Dës Aktioun gouf aus Sécherheetsgrënn ofgebrach, fir ze verhënneren datt är Séance piratéiert ka ginn.
Klickt w.e.g. op "Zréck" a lued déi Säit vun där Dir komm sidd nei, a versicht et dann nach eng Kéier.',

# Protect
'protectlogpage' => 'Protectiouns-Logbuch',
'protectlogtext' => "Dëst ass d'Lëscht vun de Säitespären.
Kuckt d'[[Special:ProtectedPages|Lëscht vun de gespaarte Säite]] fir eng Lëscht vun den aktuelle Säitespären.",
'protectedarticle' => 'huet "[[$1]]" gespaart',
'modifiedarticleprotection' => 'huet d\'Protectioun vun "[[$1]]" geännert',
'unprotectedarticle' => 'huet d\'Spär vu(n) "[[$1]]" opgehuewen',
'movedarticleprotection' => 'huet de Säiteschutz vun "[[$2]]" op "[[$1]]" geännert',
'protect-title' => 'Ännerung vun der Protectioun vu(n) „$1“',
'protect-title-notallowed' => 'Den Niveau vun der Protectioun vu(n) "$1" weisen',
'prot_1movedto2' => '[[$1]] gouf op [[$2]] geréckelt',
'protect-badnamespace-title' => 'Nummraum deen net gespaart ka ginn',
'protect-badnamespace-text' => 'Säiten an dësem Nummraum kënnen net gespaart ginn.',
'protect-legend' => "Confirméiert d'Protectioun",
'protectcomment' => 'Grond:',
'protectexpiry' => 'Dauer vun der Spär:',
'protect_expiry_invalid' => "D'Dauer déi Dir uginn hutt ass ongëlteg.",
'protect_expiry_old' => "D'Spärzäit läit an der Vergaangenheet.",
'protect-unchain-permissions' => "D'Spär vu weidere Spär-Optioune ophiewen",
'protect-text' => "Hei kënnt Dir de Protectiounsstatus fir d'Säit '''$1''' kucken an änneren.",
'protect-locked-blocked' => "Dir kënnt den Niveau vun der Säite-Protectioun net änneren, well Äre Benotzerkont gespaart ass.
Hei sinn déi aktuell Säite-Protectiouns-Astellungen fir d'Säit '''$1''':",
'protect-locked-dblock' => "Den Niveau vun der Proectioun vun der Säit kann net geänenert ginn, well d'Datebank gespaart ass.
Hei sinn déi aktuell Astellungen fir d'Säit '''$1''':",
'protect-locked-access' => "Dir hutt net déi néideg Rechter fir de Protectiouns-Niveau vun dëser Säit z'änneren.
Hei sinn déi aktuell Astellunge fir d'Säit '''$1''':",
'protect-cascadeon' => "Dës Säit ass elo gespaart well si an déi folgend {{PLURAL:$1|Säit|Säiten}} agebonn ass déi duerch eng Kaskadespär gespaart {{PLURAL:$1|ass|sinn}}. De Protectiounsniveau ka fir dës Säit geännert ginn, dat huet awer keen Afloss op d'Kaskadespär.",
'protect-default' => 'All Benotzer erlaben',
'protect-fallback' => 'Eng "$1"-Autorisatioun gëtt gebraucht.',
'protect-level-autoconfirmed' => 'Spär fir nei an net ugemellte Benotzer',
'protect-level-sysop' => 'Nëmmen Administrateuren',
'protect-summary-cascade' => 'Protectioun a Kaskaden',
'protect-expiring' => 'bis $1 (UTC)',
'protect-expiring-local' => 'bis $1',
'protect-expiry-indefinite' => 'net definéiert',
'protect-cascade' => "Kaskade-Spär – alleguerten d'Schablounen déi an dës Säit agebonne si ginn och gespaart.",
'protect-cantedit' => "Dir kënnt d'Spär vun dëser Säit net änneren, well Dir net déi néideg Rechter hutt fir déi Säit z'änneren.",
'protect-othertime' => 'Aner Zäit:',
'protect-othertime-op' => 'aner Zäit',
'protect-existing-expiry' => 'Enn vun der Säitespär: $2 ëm $3 Auer',
'protect-otherreason' => 'Aneren/zousätzleche Grond:',
'protect-otherreason-op' => 'Anere Grond',
'protect-dropdown' => '*Déi heefegst Grënn fir eng Säit ze spären
** Weblink-Spam
** Permanenten Ännerungskonflikt
** Dacks benotzte Schablounen
** Säit déi dacks besicht gëtt',
'protect-edit-reasonlist' => 'Grënn vun der Protectioun änneren',
'protect-expiry-options' => '1 Stonn:1 hour,1 Dag:1 day,1 Woch:1 week,2 Wochen:2 weeks,1 Mount:1 month,3 Méint:3 months,6 Méint:6 months,1 Joer:1 year,onbegrenzt:infinite',
'restriction-type' => 'Berechtigung:',
'restriction-level' => 'Niveau vun de Limitatiounen:',
'minimum-size' => 'Mindestgréisst',
'maximum-size' => 'Maximalgréisst:',
'pagesize' => '(Byten)',

# Restrictions (nouns)
'restriction-edit' => 'Änneren',
'restriction-move' => 'réckelen',
'restriction-create' => 'Uleeën',
'restriction-upload' => 'Eroplueden',

# Restriction levels
'restriction-level-sysop' => 'ganz gespaart',
'restriction-level-autoconfirmed' => 'hallef-gespaart (nëmmen ugemellte Benotzer déi net nei sinn)',
'restriction-level-all' => 'alleguerten',

# Undelete
'undelete' => 'Geläschte Säite restauréieren',
'undeletepage' => 'Geläschte Säite kucken a restauréieren',
'undeletepagetitle' => "'''Op dëser Lëscht sti geläschte Versioune vun [[:$1]]'''.",
'viewdeletedpage' => 'Geläschte Säite weisen',
'undeletepagetext' => "Dës {{PLURAL:$1|Säit gouf |Säite goufe}} geläscht mä sinn nach ëmmer am Archiv a kënne vun Administrateure restauréiert ginn. D'Archiv gëtt periodesch eidel gemaach.",
'undelete-fieldset-title' => 'Versioune restauréieren',
'undeleteextrahelp' => "Fir d'Säit komplett mat alle Versiounen ze restauréieren, markéiert keng vun den eenzelne Casë mat engem Krop a klickt op '''''{{int:undeletebtn}}'''''.
Fir nëmmen eng bestëmmte Versioun vun der Säit ze restauréieren, markéiert d'Case vun der gewënschter Versioun mat engem Krop, a klickt duerno op '''''{{int:undeletebtn}}'''''.",
'undeleterevisions' => '{{PLURAL:$1|1 Versioun|$1 Versiounen}} archivéiert',
'undeletehistory' => 'Wann Dir dës Säit restauréiert, ginn och all déi al Versioune restauréiert.
Wann zënter dem Läschen eng nei Säit mat dem selwechten Numm ugeluecht gouf, ginn déi restauréiert Versioune chronologesch an den Historique agedroen.',
'undeleterevdel' => "D'Restauratioun gëtt net gemaach wann dëst dozou féiert datt déi aktuell Versioun vun der Säit oder vum Fichier deelweis geläscht gëtt.
An esou Fäll däerf déi neiste Versioun net markéiert ginn oder déi neiste geläschte Versioun muss nees ugewise ginn.",
'undeletehistorynoadmin' => "Dës Säit gouf geläscht. De Grond fir d'Läsche gesitt der ënnen, zesumme mat der Iwwersiicht vun den eenzele Versioune vun der Säit an hiren Auteuren. Déi verschidden Textversioune kënnen awer just vun Administrateure gekuckt a restauréiert ginn.",
'undelete-revision' => 'Geläschte Versioun vu(n) $1 (Versioun vum $4 um $5 Auer) vum $3:',
'undeleterevision-missing' => "Ongëlteg oder Versioun déi feelt. Entweder ass de Link falsch oder d'Versioun gouf aus dem Archiv restauréiert oder geläscht.",
'undelete-nodiff' => 'Et si keng méi al Versiounen do.',
'undeletebtn' => 'Restauréieren',
'undeletelink' => 'weisen/restauréieren',
'undeleteviewlink' => 'weisen',
'undeletereset' => 'Ofbriechen',
'undeleteinvert' => 'Auswiel ëmdréinen',
'undeletecomment' => 'Grond:',
'undeletedrevisions' => '$1 {{PLURAL:$1|Versioun gouf|$1 Versioune goufe}} restauréiert',
'undeletedrevisions-files' => '{{PLURAL:$1|1 Versioun|$1 Versiounen}} a(n) {{PLURAL:$2|1 Fichier|$2 Fichiere}} goufe restauréiert',
'undeletedfiles' => '$1 {{PLURAL:$1|Fichier gouf|Fichiere goufe}} restauréiert',
'cannotundelete' => "D'Restauratioun huet net fonctionnéiert:
$1",
'undeletedpage' => "'''$1''' gouf restauréiert.

Am [[Special:Log/delete|Läsch-Logbuch]] fannt Dir déi geläscht a restauréiert Säiten.",
'undelete-header' => 'Kuckt [[Special:Log/delete|Läschlescht]] fir rezent geläschte Säiten.',
'undelete-search-title' => 'Geläschte Säite sichen',
'undelete-search-box' => 'Sichen no geläschte Säiten',
'undelete-search-prefix' => 'Weis Säiten déi esou ufänken:',
'undelete-search-submit' => 'Sichen',
'undelete-no-results' => 'Et goufen am Archiv keng Säite fonnt déi op är Sich passen.',
'undelete-filename-mismatch' => "D'Dateiversioun vum $1 konnt net restauréiert ginn: De Fichier gouf net fonnt.",
'undelete-bad-store-key' => "D'Versioun vum Fichier mat dem Zäitstempel $1 konnt net restauréiert ginn: De Fichier war scho virum Läschen net méi do.",
'undelete-cleanup-error' => 'Feeler beim Läsche vun der onbenotzter Archiv-Versioun $1.',
'undelete-missing-filearchive' => 'De Fichier mat der Archiv-ID $1 kann net restauréiert ginn, well en net an der Datebank ass. Méiglecherweis gouf e scho restauréiert.',
'undelete-error' => 'Feeler beim Restauréiere vun der Säit',
'undelete-error-short' => 'Feeler beim Restauréiere vum Fichier: $1',
'undelete-error-long' => 'Beim Restauréiere vun engem Fichier goufe Feeler fonnt:

$1',
'undelete-show-file-confirm' => '!Sidd Dir sécher, datt dir eng geläschte Versioun vum Fichier „<nowiki>$1</nowiki>“ vum $2 ëm $3 Auer gesi wëllt?',
'undelete-show-file-submit' => 'Jo',

# Namespace form on various pages
'namespace' => 'Nummraum:',
'invert' => 'Auswiel ëmdréinen',
'tooltip-invert' => 'Klickt dës Këscht fir Ännerungen am erausgesichten Nummraum (an den associéierten Nummraim wa se markéiert sinn) ze verstoppen.',
'namespace_association' => 'Associéierten Nummraum',
'tooltip-namespace_association' => 'Dës Këscht uklicke fir den Diskussiouns oder den associéierten Nummraum mat dem erausgesichten Nummraum matanzebezéien',
'blanknamespace' => '(Haapt)',

# Contributions
'contributions' => 'Kontributioune vum Benotzer',
'contributions-title' => 'Kontributioune vum $1',
'mycontris' => 'Meng Kontributiounen',
'contribsub2' => 'Fir $1 ($2)',
'nocontribs' => 'Et goufe keng Ännerunge fonnt, déi dëse Kritèren entspriechen.',
'uctop' => '(aktuell)',
'month' => 'Vum Mount (a virdrun):',
'year' => 'Vum Joer (a virdrun):',

'sp-contributions-newbies' => 'Nëmme Kontributioune vun neie Mataarbechter weisen',
'sp-contributions-newbies-sub' => 'Fir déi Nei',
'sp-contributions-newbies-title' => 'Kontributioune vun neie Benotzer',
'sp-contributions-blocklog' => 'Spärlescht',
'sp-contributions-deleted' => 'geläschte Benotzer-Kontributiounen',
'sp-contributions-uploads' => 'Eropgeluede Fichieren',
'sp-contributions-logs' => 'Logbicher',
'sp-contributions-talk' => 'diskutéieren',
'sp-contributions-userrights' => 'Verwaltung vun de Benotzerrechter',
'sp-contributions-blocked-notice' => 'Dëse Benotzer ass elo gespaart. Déi lescht Entrée am Läsch-Logbuch steet als Referenz hei ënnendrënner:',
'sp-contributions-blocked-notice-anon' => "Dës IP-Adress ass elo gespaart.
Ënnendrënner steet déi lescht Aschreiwung an d'Spärlëscht:",
'sp-contributions-search' => 'No Kontributioune sichen',
'sp-contributions-username' => 'IP-Adress oder Benotzernumm:',
'sp-contributions-toponly' => 'Nëmmen Ännerunge weisen déi déi lescht Versioun sinn',
'sp-contributions-submit' => 'Sichen',

# What links here
'whatlinkshere' => 'Linken op dës Säit',
'whatlinkshere-title' => 'Säiten, déi mat "$1" verlinkt sinn',
'whatlinkshere-page' => 'Säit:',
'linkshere' => "Déi folgend Säite linken op '''[[:$1]]''':",
'nolinkshere' => "Keng Säit ass mat '''[[:$1]]''' verlinkt.",
'nolinkshere-ns' => "Keng Säite linken op '''[[:$1]]''' am gewielten Nummraum.",
'isredirect' => 'Viruleedung',
'istemplate' => 'an dëser Säit dran',
'isimage' => 'Link op de Fichier',
'whatlinkshere-prev' => '{{PLURAL:$1|vireg|vireg $1}}',
'whatlinkshere-next' => '{{PLURAL:$1|nächsten|nächst $1}}',
'whatlinkshere-links' => '← Linken',
'whatlinkshere-hideredirs' => 'Viruleedunge $1',
'whatlinkshere-hidetrans' => 'Agebonne Schabloune $1',
'whatlinkshere-hidelinks' => 'Linken $1',
'whatlinkshere-hideimages' => 'Linken op Fichiere $1',
'whatlinkshere-filters' => 'Filteren',

# Block/unblock
'autoblockid' => 'Automatesch Spär #$1',
'block' => 'Benotzer spären',
'unblock' => "D'Spär vum Benotzer ophiewen",
'blockip' => 'Benotzer spären',
'blockip-title' => 'Benotzer spären',
'blockip-legend' => 'Benotzer spären',
'blockiptext' => 'Benotzt dëse Formulaire fir eng spezifesch IP-Adress oder e Benotzernumm ze spären. Dëst soll nëmmen am Fall vu Vandalismus gemaach ginn, en accordance mat den [[{{MediaWiki:Policy-url}}|interne Richlinen]]. Gitt e spezifesche Grond un (zum Beispill Säite wou Vandalismus virgefall ass).',
'ipadressorusername' => 'IP-Adress oder Benotzernumm:',
'ipbexpiry' => 'Gültegkeet:',
'ipbreason' => 'Grond:',
'ipbreasonotherlist' => 'Anere Grond',
'ipbreason-dropdown' => "*Heefeg Ursaache fir Benotzer ze spären:
**Bewosst falsch Informatiounen an eng oder méi Säite gesat
**Ouni Grond Inhalt vu Säite geläscht
**Spam-Verknëppunge mat externe Säiten
**Topereien an d'Säite gesat
**Beleidegt oder bedréit aner Mataarbechter
**Mëssbrauch vu verschiddene Benotzernimm
**Net akzeptabele Benotzernumm",
'ipb-hardblock' => 'Verhënneren datt ageloggte Benotzer vun dëser IP-Adress aus Ännerunge maache kënnen',
'ipbcreateaccount' => 'Opmaache vun engem Benotzerkont verhënneren',
'ipbemailban' => 'Verhënneren datt de Benotzer E-Maile verschéckt',
'ipbenableautoblock' => 'Automatesch déi lescht IP-Adress spären déi vun dësem Benotzer benotzt gouf, an all IP-Adresse vun denen dëse Benotzer versicht Ännerunge virzehuelen',
'ipbsubmit' => 'Dës IP-Adress resp dëse Benotzer spären',
'ipbother' => 'Aner Dauer:',
'ipboptions' => '2 Stonnen:2 hours,1 Dag:1 day,3 Deeg:3 days,1 Woch:1 week,2 Wochen:2 weeks,1 Mount:1 month,3 Méint:3 months,6 Méint:6 months,1 Joer:1 year,onbegrenzt:infinite',
'ipbotheroption' => 'Aner Dauer',
'ipbotherreason' => 'Aneren oder zousätzleche Grond:',
'ipbhidename' => 'Benotzernumm op Lëschten a bei Ännerunge verstoppen',
'ipbwatchuser' => 'Dësem Benotzer seng Benotzer- an Diskussiouns-Säit iwwerwaachen',
'ipb-disableusertalk' => "Dëse Benotzer dorun hënnere fir seng eegen Diskussiounssäit z'änneren esou laang wéi et gespaart ass",
'ipb-change-block' => 'De Benotzer mat dese Parameteren nees spären',
'ipb-confirm' => 'Spär confirméieren',
'badipaddress' => "D'IP-Adress huet dat falscht Format.",
'blockipsuccesssub' => 'Gouf gespaart',
'blockipsuccesstext' => "[[Special:Contributions/$1|$1]] gouf gespaart. <br />

Kuckt d'[[Special:BlockList|Spär-Lëscht]] fir all Spären nozekucken.",
'ipb-blockingself' => 'Dir sidd am gaang Iech selwer ze spären! Sidd Dir sécher datt Dir dat maache wëllt?',
'ipb-confirmhideuser' => 'Dir sidd am gaang e Benotzer ze späre mat der Fonctioun "Benotzer verstoppen" ageschalt. Dëst hëlt den Numm vum Benotzer aus alle Lëschten a Logbicher eraus. Sidd Dir sécher datt Dir dat maache wëllt?',
'ipb-edit-dropdown' => 'Spärgrënn änneren',
'ipb-unblock-addr' => 'Spär vum $1 ophiewen',
'ipb-unblock' => 'Spär vun enger IP-Adress oder engem Benotzer ophiewen',
'ipb-blocklist' => 'Kuckt aktuell Spären',
'ipb-blocklist-contribs' => 'Kontributioune fir $1',
'unblockip' => 'Spär vum Benotzer ophiewen',
'unblockiptext' => 'Benotzt dëse Formulaire fir enger IP-Adress oder engem Benotzer seng Spär opzehiewen.',
'ipusubmit' => 'Des Spär ophiewen',
'unblocked' => "D'Spär fir de [[User:$1|Benotzer $1]] gouf opgehuewen",
'unblocked-range' => "D'Spär vum $1 gouf opgehuewen",
'unblocked-id' => "D'Spär $1 gouf opgehuewen",
'blocklist' => 'Gespaarte Benotzer',
'ipblocklist' => 'Gespaarte Benotzer',
'ipblocklist-legend' => 'No engem gespaarte Benotzer sichen',
'blocklist-userblocks' => 'Benotzerspäre verstoppen',
'blocklist-tempblocks' => 'Temporär Späre verstoppen',
'blocklist-addressblocks' => 'Eenzel IP-Späre verstoppen',
'blocklist-rangeblocks' => 'Späre vu ganzen IP-Beräicher verstoppen',
'blocklist-timestamp' => 'Zäitstempel',
'blocklist-target' => 'Zil',
'blocklist-expiry' => 'Spär bis',
'blocklist-by' => 'Gespaart vum Administrateur',
'blocklist-params' => 'Parameter vun der Spär',
'blocklist-reason' => 'Grond',
'ipblocklist-submit' => 'Sichen',
'ipblocklist-localblock' => 'Lokal Spär',
'ipblocklist-otherblocks' => 'Aner {{PLURAL:$1|Spär|Spären}}',
'infiniteblock' => 'onbegrenzt',
'expiringblock' => 'bis den $1 ëm $2',
'anononlyblock' => 'nëmmen anonym Benotzer',
'noautoblockblock' => 'déi automatesch Spär ass deaktivéiert',
'createaccountblock' => 'Opmaache vu Benotzerkonte gespaart',
'emailblock' => 'E-Maile schécke gespaart',
'blocklist-nousertalk' => 'däerf seng eegen Diskussiounssäit net ännereen',
'ipblocklist-empty' => "D'Spärlëscht ass eidel.",
'ipblocklist-no-results' => 'Déi gesichten IP-Adress respektiv de gesichte Benotzer ass net gespaart.',
'blocklink' => 'spären',
'unblocklink' => 'Spär ophiewen',
'change-blocklink' => 'Spär änneren',
'contribslink' => 'Kontributiounen',
'emaillink' => 'Mail schécken',
'autoblocker' => 'Dir sidd automatesch gespaart well dir eng IP Adress mam "[[User:$1|$1]]" deelt.
De Grond dee fir d\'Spär vum $1 ugi gouf ass: "$2".',
'blocklogpage' => 'Spärlëscht',
'blocklog-showlog' => "Dëse Benotzer war virdru gespaart. D'Lëscht vun de Späre ass als Referenz hei ënnendrënner:",
'blocklog-showsuppresslog' => "Dëse Benotzer war virdru gespaart a verstoppt. D'Logbuch vun de Suppressiounen steet als Referenz hei ënnendrënner:",
'blocklogentry' => '"[[$1]]" gespaart fir $2 $3',
'reblock-logentry' => "huet d'Spär vum [[$1]] bis den $2 $3 geännert",
'blocklogtext' => "Dëst ass eng Lëscht vu Spären a vu Spären déi opgehuewe goufen.
Automatesch gespaarten IP-Adresse sinn hei net opgelëscht.
Kuckt d'[[Special:BlockList|Spärlëscht]] fir déi aktuell Spären.",
'unblocklogentry' => "huet d'Spär vum $1 opgehuewen",
'block-log-flags-anononly' => 'Nëmmen anonym Benotzer',
'block-log-flags-nocreate' => 'Schafe vu Benotzerkonte gespaart',
'block-log-flags-noautoblock' => 'Autoblock deaktivéiert',
'block-log-flags-noemail' => 'E-Mail gespaart',
'block-log-flags-nousertalk' => 'däerf seng Diskussiounssäiten net änneren',
'block-log-flags-angry-autoblock' => 'erweidert automatesch Spär aktivéiert',
'block-log-flags-hiddenname' => 'Benotzernumm verstoppt',
'range_block_disabled' => 'Dem Administrateur seng Fähegkeet fir ganz Adressberäicher ze spären ass ausser Kraaft.',
'ipb_expiry_invalid' => "D'Dauer déi Dir uginn hutt ass ongülteg.",
'ipb_expiry_temp' => 'Verstoppt Späre vu Benotzernimm solle permanent sinn.',
'ipb_hide_invalid' => 'Dëse Benotzerkont kann net geläscht ginn; et ka sinn datt zevill Ännerunge vun deem Benotzer gemaach goufen.',
'ipb_already_blocked' => '"$1" ass scho gespaart.',
'ipb-needreblock' => "$1 ass scho gespaart. Wëllt Dir d'Parametere vun der Spär änneren?",
'ipb-otherblocks-header' => 'Aner  {{PLURAL:$1|Spär|Spären}}',
'unblock-hideuser' => "D'Spär vun dësem Benotzer kann net vun Iech opgehuewe gi well dee Benotzernumm verstoppt gouf.",
'ipb_cant_unblock' => "Feeler: D'Nummer vun der Spär $1 gouf net fonnt. D'Spär gouf waarscheinlech schonn opgehuewen.",
'ipb_blocked_as_range' => "Feeler: D'IP-Adress $1 gouf net direkt gespaart an déi Spär kann dofir och net opghuewe ginn.
Si ass awer als Deel vun der Rei $2 gespaart, an dës Spär kann opgehuewe ginn.",
'ip_range_invalid' => 'Ongëltegen IP Block.',
'ip_range_toolarge' => 'Späre vu Beräicher déi méi grouss wéi /$1 si sinn net erlaabt.',
'blockme' => 'Spär mech',
'proxyblocker' => 'Proxy blocker',
'proxyblocker-disabled' => 'Dës Funktioun ass ausgeschalt.',
'proxyblockreason' => 'Är IP-Adress gouf gespaart, well si een oppene Proxy ass. Kontaktéiert w.e.g. ären Internet-Provider oder ärs Systemadministrateuren und informéiert si iiwwer dëses méigleche Sécherheetsprobleem.',
'proxyblocksuccess' => 'Gemaach.',
'sorbsreason' => 'Är IP Adress steet als oppene Proxy an der schwaarzer Lëscht (DNSBL) déi vu {{SITENAME}} benotzt gëtt.',
'sorbs_create_account_reason' => 'Är IP-Adress steet als oppene Proxy an der schwaarzer Lëscht déi op {{SITENAME}} benotzt gëtt. DIr kënnt keen neie Benotzerkont opmaachen.',
'cant-block-while-blocked' => 'Dir däerft keng aner Benotzer spären, esou lang wéi dir selwer gespaart sidd.',
'cant-see-hidden-user' => "De Benotzer deen Dir versicht ze spären ass scho gespaart a verstoppt. Well Dir d'Recht ''Hideuser'' net hutt kënnt Dir dëse Benotzer net gesinn an dem Benotzer seng Spär net änneren.",
'ipbblocked' => 'Dir kënnt keng aner Benotzer spären oder hir Spär ophiewen well Dir selwer gespaart sidd',
'ipbnounblockself' => 'Dir kënnt Är Spär net selwer ophiewen',

# Developer tools
'lockdb' => 'Datebank spären',
'unlockdb' => 'Spär vun der Datebank ophiewen',
'lockdbtext' => "Wann d'Datebank gespaart ass, ka kee Benotzer Säiten änneren, seng Astellungen änneren, seng Iwwerwaachungslëscht änneren, an all aner Aarbecht, déi op d'Datebank zréckgräift.
W.e.g. confirméiert, datt dir dëst wierklech maache wëllt, an datt dir d'Spär ewechhuelt soubal d'Maintenance-Aarbechten eriwwer sinn.",
'unlockdbtext' => "D'Ophiewe vun der Spär vun der Datebank léisst et erëm zou datt all Benotzer Säiten änneren, hir Astellungen an hir Iwwerwaachungslëscht veränneren an all aner Operatiounen déi Ännerungen an der Datebank erfuederen.

Confirméiert w.e.g datt et dat ass wat Dir maache wëllt.",
'lockconfirm' => "Jo, ech wëll d'Datebank wierklech spären.",
'unlockconfirm' => "Jo, ech well d'Spär vun der Datebank wirklech ophiewen.",
'lockbtn' => 'Datebank spären',
'unlockbtn' => 'Spär vun der Datebank ophiewen',
'locknoconfirm' => "Dir hutt d'Confirmatiounskëscht net ugeklickt.",
'lockdbsuccesssub' => "D'Datebank ass elo gespaart",
'unlockdbsuccesssub' => "D'Spär vun der Datebank gouf opgehuewen",
'lockdbsuccesstext' => "D'{{SITENAME}}-Datebank gouf gespaart. <br />
Denkt drun [[Special:UnlockDB|d'Spär erëm ewechzehuele]] soubaal d'Maintenance-Aarbechte fäerdeg sinn.",
'unlockdbsuccesstext' => "D'Spär vun der Datebank ass opgehuewen.",
'lockfilenotwritable' => "De Fichier mat de Späre vun der Datebank kann net geännert ginn.
Fir d'Datebank ze spären oder fir d'Spär opzehiewen muss dëse Fichier vum Webserver geännert kënne ginn.",
'databasenotlocked' => "D'Datebank ass net gespaart.",
'lockedbyandtime' => '(vum $1 de(n) $2 ëm $3 Auer)',

# Move page
'move-page' => 'Réckel $1',
'move-page-legend' => 'Säit réckelen',
'movepagetext' => "Wann dir dëse Formulaire benotzt, réckelt dir eng komplett Säit mat hirem Historique op en neien Numm.
Den alen Titel déngt als Viruleedung op déi nei Säit.
Dir kënnt Viruleedungen déi op déi al Säit ginn automatesch aktualiséieren.
Wann Dir dat net maacht, da vergewëssert iech datt keng [[Special:DoubleRedirects|duebel]] oder [[Special:BrokenRedirects|futtis Viruleedungen]] am Spill sinn.
Dir sidd responsabel datt d'Linke weiderhinn dohinner pointéieren, wou se hi sollen.

Beuecht w.e.g. datt d'Säit '''net''' geréckelt gëtt, wann et schonns eng Säit mat deem Titel gëtt, ausser déi ass eidel, ass eng Viruleedung oder huet keen Historique.
Dëst bedeit datt dir eng Säit ëmbenenne kënnt an datt dir keng Säit iwwerschreiwe kënnt, déi et schonns gëtt.

'''OPGEPASST!'''
Dëst kann en drastesche Changement fir eng populär Säit bedeiten;
verstitt w.e.g. d'Konsequenze vun ärer Handlung éier Dir d'Säit réckelt.",
'movepagetext-noredirectfixer' => "Wann Dir dëse Formulaire benotzt, réckelt dir eng komplett Säit mat hirem Historique op en neien Numm.
Den alen Titel gëtt eng Viruleedung op den neien Titel.
Dir kënnt Viruleedungen déi op déi al Säit ginn automatesch aktualiséieren.
Vergewëssert Iech datt keng [[Special:DoubleRedirects|duebel]] oder [[Special:BrokenRedirects|futtis Viruleedungen]] am Spill sinn.
Dir sidd responsabel datt d'Linke weider dohinner pointéieren, wou se hi sollen.

Denkt w.e.g. drun datt d'Säit '''net''' geréckelt gëtt, wann et schonns eng Säit mat deem Titel gëtt, ausser déi ass eidel, ass eng Viruleedung oder huet keen Historique.
Dëst bedeit datt dir eng Säit zréck op deen Numm dee se virdrun hat ëmbenenne kënnt wann Dir e Feeler maacht an datt Dir keng Säit iwwerschreiwe kënnt, déi et schonns gëtt.

'''OPGEPASST!'''
Dëst kann en drastesche Changement fir eng populär Säit sinn;
verstitt w.e.g. d'Konsequenze vun ärer Handlung éier Dir dëst maacht.",
'movepagetalktext' => "D'assoziéiert Diskussiounssäit, am Fall wou  eng do ass, gëtt automatesch matgeréckelt, '''ausser:'''
*D'Säit gëtt an een anere Nummraum geréckelt.
*Et gëtt schonn eng Diskussiounssäit mat dësem Numm, oder
*Dir klickt d'Këschtchen ënnendrënner net un.

An deene Fäll musst Dir d'Diskussiounssäit manuell réckelen oder fusionéieren.",
'movearticle' => 'Säit réckelen:',
'moveuserpage-warning' => "'''Opgepasst:''' Dir sidd am gaang eng Benotzersäit ze réckelen. Denkt w.e.g. dorunn datt just d'Säit geréckelt gëtt an datt de Benotzer ''net'' ëmbenannt gëtt.",
'movenologin' => 'Net ageloggt',
'movenologintext' => 'Dir musst e registréierte Benotzer an [[Special:UserLogin|ageloggt]] sinn, fir eng Säit ze réckelen.',
'movenotallowed' => 'Dir hutt net déi néideg Rechter fir Säiten ze réckelen.',
'movenotallowedfile' => "Dir hutt net d'Recht fir Fichieren ze réckelen.",
'cant-move-user-page' => 'Dir hutt net déi néideg Rechter fir Benotzerhaaptsäiten ze réckelen.',
'cant-move-to-user-page' => "Dir hutt net d'Recht fir eng Säit op eng Benotzersäit (ausser op eng Ënnersäit vun enger Benotzersäit) ze réckelen.",
'newtitle' => 'Op den neien Titel:',
'move-watch' => 'Dës Säit iwwerwaachen',
'movepagebtn' => 'Säit réckelen',
'pagemovedsub' => 'Gouf geréckelt',
'movepage-moved' => "'''D'Säit \"\$1\" gouf op \"\$2\" geréckelt.'''",
'movepage-moved-redirect' => 'Et gouf eng Viruleedung ugeluecht.',
'movepage-moved-noredirect' => "D'Uleeë vun enger Viruleedung gouf ënnerdréckt.",
'articleexists' => 'Eng Säit mat dësem Numm gëtt et schonns, oder den Numm deen Dir gewielt hutt gëtt net akzeptéiert.
Wielt w.e.g. en aneren Numm.',
'cantmove-titleprotected' => "Dir kënnt keng Säit op dës Plaz réckelen, well deen neien Titel fir d'Uleeë gespaart ass.",
'talkexists' => "D'Säit selwer gouf erfollegräich geréckelt, mee d'Diskussiounssäit konnt net mat eriwwergeholl gi well et schonns eng ënnert deem neien Titel gëtt. W.e.g. setzt dës manuell zesummen.",
'movedto' => 'geréckelt op',
'movetalk' => 'Déi associéiert Diskussiounssäit matréckelen',
'move-subpages' => 'Ënnersäite (bis zu $1) réckelen',
'move-talk-subpages' => 'Ënnersäite vun der Diskussiounssäit (bis zu $1), matréckelen',
'movepage-page-exists' => "D'Säit $1 gëtt et schonn a kann net automatesch iwwerschriwwe ginn.",
'movepage-page-moved' => "D'Säit $1 gouf op $2 geréckelt.",
'movepage-page-unmoved' => "D'Säit $1 konnt net op $2 geréckelt ginn.",
'movepage-max-pages' => 'Déi Maximalzuel vu(n) $1 {{PLURAL:$1|Säit gouf|Säite goufe}} gouf geréckelt. All déi aner Säite kënnen net automatesch geréckelt ginn.',
'movelogpage' => 'Réckellëscht',
'movelogpagetext' => 'Dëst ass eng Lëscht vun alle geréckelte Säiten.',
'movesubpage' => '{{PLURAL:$1|Ënnersäit|Ënnersäiten}}',
'movesubpagetext' => 'Dës Säit huet $1 {{PLURAL:$1|Ënnersäit|Ënnersäiten}} déi hei ënnendrënner stinn.',
'movenosubpage' => 'Dës Säit huet keng Ënnersäiten.',
'movereason' => 'Grond:',
'revertmove' => 'zréck réckelen',
'delete_and_move' => 'Läschen a réckelen',
'delete_and_move_text' => '== Läsche vun der Destinatiounssäit néideg ==
D\'Säit "[[:$1]]" existéiert schonn. 
Wëll Dir se läsche fir d\'Réckelen ze erméiglechen?',
'delete_and_move_confirm' => "Jo, läsch d'Säit",
'delete_and_move_reason' => 'Geläscht fir Plaz ze maache fir "[[$1]]" heihin ze réckelen',
'selfmove' => 'Source- an Destinatiounsnumm sinn dselwecht; eng Säit kann net op sech selwer geréckelt ginn.',
'immobile-source-namespace' => 'Säite am Nummraum: $1 kënnen net geréckelt ginn',
'immobile-target-namespace' => 'Säite kënnen net an den Nummraum: $1 geréckelt ginn',
'immobile-target-namespace-iw' => 'En Interwiki-Link ass kee gëltegt Zil beim Réckele vun enger Säit.',
'immobile-source-page' => 'Dës Säit kann net geréckelt ginn.',
'immobile-target-page' => 'Kann net op de Bestëmmungs-titel geréckelt ginn.',
'imagenocrossnamespace' => 'Fichiere kënnen net an aner Nummraim geréckelt ginn',
'nonfile-cannot-move-to-file' => '"Keng Fichiere" kënnen net an den {{ns:file}}-Nummraum geréckelt ginn',
'imagetypemismatch' => 'Déi nei Dateierweiderung ass net mat dem Fichier kompatibel',
'imageinvalidfilename' => 'Den Numm vum Zil-Fichier ass ongëlteg',
'fix-double-redirects' => 'All Viruleedungen déi op den Originaltitel weisen aktualiséieren',
'move-leave-redirect' => 'Viruleedung uleeën',
'protectedpagemovewarning' => "'''OPGEPASST:''' Dës Säit gouf gespaart esou datt nëmme Benotzer mat Administreurs-Rechter se réckele kënnen. Déi lescht Zeil aus de Logbicher fannt Dir zu Ärer Informatioun hei ënnendrënner.",
'semiprotectedpagemovewarning' => "'''OPGEPASST:''' Dës Säit gouf gespaart esou datt nëmme konfirméiert Benotzer se réckele kënnen. Déi lescht Zeil aus de Logbicher fannt Dir zu Ärer Informatioun hei ënnendrënner.",
'move-over-sharedrepo' => '== De Fichier gëtt et ==
[[:$1]] gëtt et op engem gedeelte Repertoire. Wann dir e Fichier op dësen Titel réckelt dann ass dee gedeelte Fichier net méi accessibel.',
'file-exists-sharedrepo' => 'Den Numm vum Fichier deen dir erausgesicht hutt gëtt schonn op engem gemeinsame Repertoire benotzt.
Sicht Iech w.e.g. en aneren Numm.',

# Export
'export' => 'Säiten exportéieren',
'exporttext' => "Dir kënnt den Text an den Historique vun enger bestëmmter Säit, oder engem Set vu Säiten, an XML agepakt, exportéieren, déi dann an eng aner Wiki mat MediaWiki Software importéiert gi mat Hëllef vun der [[Special:Import|Import-Säit]].

Fir eng Säit z'exportéieren, gitt den Titel an d'Textkëscht heidrënner an, een Titel pro Linn, a wielt aus op Dir nëmmen déi aktuell Versioun oder all Versioune mam ganzen Historique exportéiere wëllt.

Wann nëmmen déi aktuell Versioun exportéiert soll ginn, kënnt Dir och e Link benotze wéi z.B [[{{#Special:Export}}/{{MediaWiki:Mainpage}}]] fir d'\"[[{{MediaWiki:Mainpage}}]]\".",
'exportall' => 'All Säiten Exportéieren',
'exportcuronly' => 'Nëmmen déi aktuell Versioun exportéieren an net de ganzen Historique',
'exportnohistory' => "----
'''Hiwäis:''' Den Export vu komplette Versiounshistoriquen ass aus Performancegrënn bis op weideres net méiglech.",
'exportlistauthors' => 'Fir all Säit eng komplett Lëscht vun deenen déi un der Säit matgeschafft hunn drasetzen',
'export-submit' => 'Exportéieren',
'export-addcattext' => 'Säiten aus Kategorie derbäisetzen:',
'export-addcat' => 'Derbäisetzen',
'export-addnstext' => 'Säiten aus Nummraum derbäisetzen:',
'export-addns' => 'Derbäisetzen',
'export-download' => 'Als XML-Datei späicheren',
'export-templates' => 'Inklusiv Schablounen',
'export-pagelinks' => 'Verlinkte Säiten mat exportéieren, bis zu enger Déift vun:',

# Namespace 8 related
'allmessages' => 'All Systemmessagen',
'allmessagesname' => 'Numm',
'allmessagesdefault' => 'Standardtext',
'allmessagescurrent' => 'Aktuellen Text',
'allmessagestext' => "Dëst ass eng Lëscht vun alle '''Messagen am MediaWiki:Nummraum, déi vun der MediaWiki-Software benotzt ginn.
Besicht w.e.g. [//www.mediawiki.org/wiki/Localisation MediaWiki Localisatioun] an [//translatewiki.net translatewiki.net] wann Dir wëllt bei de MediaWiki Iwwersetzunge matschaffen.",
'allmessagesnotsupportedDB' => "Dës Säit kann net benotzt gi well '''\$wgUseDatabaseMessages''' ausgeschalt ass.",
'allmessages-filter-legend' => 'Filter',
'allmessages-filter' => 'Filter nom ugepassten Zoustand:',
'allmessages-filter-unmodified' => 'Net geännert',
'allmessages-filter-all' => 'Alleguer',
'allmessages-filter-modified' => 'Geännert',
'allmessages-prefix' => 'Nom Prefix filteren:',
'allmessages-language' => 'Sprooch:',
'allmessages-filter-submit' => 'Lass',

# Thumbnails
'thumbnail-more' => 'vergréisseren',
'filemissing' => 'Fichier feelt',
'thumbnail_error' => 'Feeler beim Erstelle vun der Miniatur: $1',
'djvu_page_error' => 'DjVu-Säit baussent dem Säiteberäich',
'djvu_no_xml' => 'Den XML ka fir den DjVu-Fichier net ofgeruff ginn',
'thumbnail-temp-create' => "Den temporäre Fichier fir d'Minitaurbild konnt net ugeluecht ginn",
'thumbnail-dest-create' => "D'Miniatur bild konnt net do gespäichert gi wou dat virgesinn ass",
'thumbnail_invalid_params' => 'Ongëlteg Miniatur-Parameter',
'thumbnail_dest_directory' => 'Den Zilepertoire konnt net ugeluecht ginn.',
'thumbnail_image-type' => 'Bildtyp gëtt net ënnerstëtzt',
'thumbnail_gd-library' => "D'Konfiguratioun vun der GD-Bibliothéik (GD library) ass net komplett: D'Fonctioun $1 feelt",
'thumbnail_image-missing' => 'De Fichier schengt ze feelen: $1',

# Special:Import
'import' => 'Säiten importéieren',
'importinterwiki' => 'Transwiki-Import',
'import-interwiki-text' => "Sicht eng Wiki an e Säitentitel eraus fir z'importéieren.
D'Versiounsdatumen an d'Benotzernimm bleiwen dobäi erhalen.
All Transwiki-Import-Aktioune ginn am [[Special:Log/import|Import-Logbuch]] protokolléiert.",
'import-interwiki-source' => 'Quelle Wiki/Säit:',
'import-interwiki-history' => "Importéier all d'Versioune vun dëser Säit",
'import-interwiki-templates' => 'Mat alle Schablounen',
'import-interwiki-submit' => 'Import',
'import-interwiki-namespace' => 'Zil-Nummraum:',
'import-upload-filename' => 'Numm vum Fichier:',
'import-comment' => 'Bemierkung:',
'importtext' => 'Exportéiert de Fichier w.e.g vun der Source-Wiki mat der [[Special:Export|Export-Fonctioun]].
Späichert en op Ärem Computer of a luet en hei nees erop.',
'importstart' => 'Importéier Säiten …',
'import-revision-count' => '$1 {{PLURAL:$1|Versioun|Versiounen}}',
'importnopages' => "Et gëtt keng Säiten fir z'importéieren.",
'imported-log-entries' => "$1 {{PLURAL:$1|Entrée|Entréeën}} an d'Logbuch importéiert.",
'importfailed' => 'Importatioun huet net fonctionnéiert: <nowiki>$1</nowiki>',
'importunknownsource' => 'Onbekannt Importquell',
'importcantopen' => 'De Fichier dee sollt importéiert gi konnt net opgemaach ginn',
'importbadinterwiki' => 'Falschen Interwiki-Link',
'importnotext' => 'Eidel oder keen Text',
'importsuccess' => 'Den Import ass fäerdeg!',
'importhistoryconflict' => 'Et gëtt Konflikter am Historique vun de Versiounen, (méiglecherweis gouf dës Säit virdrun importéiert).',
'importnosources' => 'Fir den Transwiki-Import si keng Quellen definéiert an et ass net méiglech fir Säite mat alle Versiounen aus dem Transwiki-Tëschespäicher eropzelueden.',
'importnofile' => 'Et gouf keen importéierte Fichier eropgelueden',
'importuploaderrorsize' => "D'Eropluede vum importéierte Fichier huet net fonctionnéiert. De Fichier ass méi grouss wéi maximal erlaabt.",
'importuploaderrorpartial' => "D'Eropluede vum Fichier huet net geklappt. De Fichier gouf nëmmen deelweis eropgelueden.",
'importuploaderrortemp' => "D'Eropluede vum Fichier huet net fonctionnéiert. En temporäre Repertoire feelt.",
'import-parse-failure' => 'Feeler bei engem XML-Import',
'import-noarticle' => "Keng Säit fir z'importéieren!",
'import-nonewrevisions' => "All d'Versioune goufe scho virdrunn importéiert.",
'xml-error-string' => '$1 an der Zeil $2, Spalt $3, (Byte $4): $5',
'import-upload' => 'XML-Daten importéieren',
'import-token-mismatch' => "D'Date vun ärer Sessioun si verluer gaang. Versicht et w.e.g. nach eemol.",
'import-invalid-interwiki' => 'Aus der Wiki déi Dir uginn hutt kann näischt importéiert ginn.',
'import-error-edit' => 'D\'Säit "$1" gouf net importéiert well Dir se net änneren däerft.',
'import-error-create' => 'D\'Säit "$1" gouf net importéiert well Dir se net uleeën däerft.',
'import-error-interwiki' => 'D\'Säit  "$1" gouf net importéiert well deen Numm fir extern Linken (Interwiki) reservéiert ass.',
'import-error-special' => 'D\'Säit "$1" gouf net importéiert well se zu engem speziellen Nummraum gehéiert an deem et keng Säite gëtt.',
'import-error-invalid' => 'D\'Säit "$1" gouf net importéiert well hiren Numm net valabel ass.',
'import-options-wrong' => 'Falsch {{PLURAL:$2|Optioun|Optiounen}}: <nowiki>$1</nowiki>',
'import-rootpage-invalid' => 'Déi Basis-Säit déi Dir uginn hutt ass kee valabelen Titel.',
'import-rootpage-nosubpage' => 'Am Nummraum "$1" vun der Basis-Säit si keng Ënnersäiten erlaabt.',

# Import log
'importlogpage' => 'Lëscht vun den Säitenimporten',
'importlogpagetext' => 'Administrativen Import vu Säite mam Historique vun den Ännerungen aus anere Wikien.',
'import-logentry-upload' => 'huet [[$1]] vun engem Fichier duerch Eroplueden importéiert',
'import-logentry-upload-detail' => '$1 {{PLURAL:$1|Versioun|Versiounen}}',
'import-logentry-interwiki' => 'huet $1 importéiert (Transwiki)',
'import-logentry-interwiki-detail' => '$1 {{PLURAL:$1|Versioun|Versioune}} vum $2',

# JavaScriptTest
'javascripttest' => 'JavaScript-Test',
'javascripttest-title' => '$1-Tester ginn elo gemaach',
'javascripttest-pagetext-noframework' => 'Dës Säit ass fir Java-Script-Tester reservéiert.',
'javascripttest-pagetext-unknownframework' => 'Onbekannten Test-Framework "$1".',
'javascripttest-qunit-intro' => "Kuckt d'[$1 Dokumentatioun vun den Tester] op mediawiki.org",

# Tooltip help for the actions
'tooltip-pt-userpage' => 'Är Benotzersäit',
'tooltip-pt-anonuserpage' => 'Benotzersäit vun der IP-Adress vun där aus Dir den Ament Ännerunge maachtt',
'tooltip-pt-mytalk' => 'Är Diskussiounssäit',
'tooltip-pt-anontalk' => "Diskussioun iwwer d'Ännerungen déi vun dëser IP-Adress aus gemaach gi sinn",
'tooltip-pt-preferences' => 'Meng Astellungen',
'tooltip-pt-watchlist' => 'Lëscht vu Säiten, bei deenen Dir op Ännerungen oppasst',
'tooltip-pt-mycontris' => 'Lëscht vun Äre Kontributiounen',
'tooltip-pt-login' => 'Sech umelle gëtt gäre gesinn, Dir musst et awer net maachen.',
'tooltip-pt-anonlogin' => 'Et wier gutt, Dir géift Iech aloggen, och wann et keng Musse-Saach ass.',
'tooltip-pt-logout' => 'Ofmellen',
'tooltip-ca-talk' => 'Diskussioun iwwer de Säiteninhalt',
'tooltip-ca-edit' => 'Dës Säit ka geännert ginn. Maacht vun der Méiglechkeet Gebrauch fir ze "kucken ouni ofzespäicheren" a kuckt ob alles an der Rei ass ier der ofspäichert.',
'tooltip-ca-addsection' => 'En neien Abschnitt ufänken.',
'tooltip-ca-viewsource' => 'Dës Säit ass gespaart. Nëmmen de Quelltext ka gewise ginn.',
'tooltip-ca-history' => 'Vireg Versioune vun dëser Säit',
'tooltip-ca-protect' => 'Dës Säit spären',
'tooltip-ca-unprotect' => "D'Spär vun dëser Säit änneren",
'tooltip-ca-delete' => 'Dës Säit läschen',
'tooltip-ca-undelete' => 'Dës Säit restauréieren',
'tooltip-ca-move' => 'Dës Säit réckelen',
'tooltip-ca-watch' => 'Dës Säit op Är Iwwerwaachungslëscht bäisetzen',
'tooltip-ca-unwatch' => 'Dës Säit vun der Iwwerwaachungslëscht erofhuelen',
'tooltip-search' => 'Op {{SITENAME}} sichen',
'tooltip-search-go' => 'Direkt op genee déi Säit goen, wann et se gëtt.',
'tooltip-search-fulltext' => 'No Säite sichen, an deenen dësen Text dran ass',
'tooltip-p-logo' => "Besicht d'Haaptsäit",
'tooltip-n-mainpage' => "Besicht d'Haaptsäit",
'tooltip-n-mainpage-description' => "Besicht d'Haaptsäit",
'tooltip-n-portal' => 'Iwwer de Portal, wat Dir maache kënnt, wou wat ze fannen ass',
'tooltip-n-currentevents' => "D'Aktualitéit a wat derhannert ass",
'tooltip-n-recentchanges' => 'Lëscht vun de rezenten Ännerungen op {{SITENAME}}.',
'tooltip-n-randompage' => 'Zoufälleg Säit',
'tooltip-n-help' => 'Hëllefsäiten weisen.',
'tooltip-t-whatlinkshere' => 'Lëscht vun alle Säiten, déi heihi linken',
'tooltip-t-recentchangeslinked' => 'Rezent Ännerungen op Säiten, déi von hei verlinkt sinn',
'tooltip-feed-rss' => 'RSS-Feed fir dës Säit',
'tooltip-feed-atom' => 'Atom-Feed fir dës Säit',
'tooltip-t-contributions' => 'Lëscht vun de Kontributioune vun dësem Benotzer',
'tooltip-t-emailuser' => 'Dësem Benotzer eng E-Mail schécken',
'tooltip-t-upload' => 'Biller oder Mediefichieren eroplueden',
'tooltip-t-specialpages' => 'Lëscht vun alle Spezialsäiten',
'tooltip-t-print' => 'Versioun vun dëser Säit fir auszedrécken',
'tooltip-t-permalink' => 'Permanente Link op dës Versioun vun dëser Säit',
'tooltip-ca-nstab-main' => 'Contenu vun der Säit weisen',
'tooltip-ca-nstab-user' => 'Benotzersäit weisen',
'tooltip-ca-nstab-media' => 'Mediesäit weisen',
'tooltip-ca-nstab-special' => 'Dëst ass eng Spezialsäit. Si kann net geännert ginn.',
'tooltip-ca-nstab-project' => 'Portalsäit weisen',
'tooltip-ca-nstab-image' => 'Billersäit weisen',
'tooltip-ca-nstab-mediawiki' => 'Systemmessage weisen',
'tooltip-ca-nstab-template' => 'Schabloun weisen',
'tooltip-ca-nstab-help' => 'Hëllefssäite weisen',
'tooltip-ca-nstab-category' => 'Kategoriesäit weisen',
'tooltip-minoredit' => 'Dës Ännerung als kleng markéieren.',
'tooltip-save' => 'Ännerunge späicheren',
'tooltip-preview' => 'Kuckt är Ännerungen ouni ofzespäicheren, Benotzt dëst w.e.g. virum späicheren!',
'tooltip-diff' => 'Weist wéi eng Ännerungen Dir beim Text gemaach hutt.',
'tooltip-compareselectedversions' => "D'Ënnerscheeder op dëser Säit tëscht den zwou gewielte Versioune weisen.",
'tooltip-watch' => 'Dës Säit op Är Iwwerwaachungslëscht bäisetzen',
'tooltip-watchlistedit-normal-submit' => 'Säiten erofhuelen',
'tooltip-watchlistedit-raw-submit' => 'Iwwerwaachungslëscht aktualiséieren',
'tooltip-recreate' => "D'Säit nees uleeën, obwuel se geläscht gi war.",
'tooltip-upload' => 'Mam eroplueden ufänken',
'tooltip-rollback' => '"Zrécksetzen" mécht all Ännerunge vum leschten "Auteur" an engem Klick nees réckgängeg.',
'tooltip-undo' => '"Zréck" setzt dës Ännerung zréck a mécht den Ännerungsformulaire am Modus "kucken ouni ofzespäicheren" op.
Erlaabt et e Grond an de Resumé derbäizesetzen.',
'tooltip-preferences-save' => 'Astellunge späicheren',
'tooltip-summary' => 'Gitt e kuerze Resumé an',

# Stylesheets
'common.css' => "/* Dës CSS huet nëmmen Afloss op de Skin ''Chick''  */",
'standard.css' => "/* Dës CSS huet nëmmen Afloss op de Skin ''Klassesch''  */",
'nostalgia.css' => "/* Dës CSS huet nëmmen Afloss op de Skin ''Nostalgie''  */",
'cologneblue.css' => "/* Dës CSS huet nëmmen Afloss op de Skin ''Köln Blo''  */",
'monobook.css' => "/* Dës CSS huet nëmmen Afloss op de Skin ''Monobook''  */",
'myskin.css' => "/* Dës CSS huet nëmmen Afloss op de Skin ''MySkin''  */",
'chick.css' => '/* Dës CSS huet nëmmen Afloss op de Skin "Chick" */',
'simple.css' => "/* Dës CSS huet nëmmen Afloss op de Skin ''Einfach''  */",
'modern.css' => "/* Dës CSS huet nëmmen Afloss op de Skin ''Modern''  */",

# Scripts
'common.js' => '/* All JavaScript hei gëtt fir all Benotzer beim Luede vun all Säit gelueden. */',

# Metadata
'notacceptable' => "De Wiki-Server kann d'Donnéeë net an engem Format liwweren déi vun ärem Apparat geliest kënne ginn.",

# Attribution
'anonymous' => '{{PLURAL:$1|Anonyme Benotzer|Anonym Benotzer}} op {{SITENAME}}',
'siteuser' => '{{SITENAME}}-Benotzer $1',
'anonuser' => 'Anonyme(n) {{SITENAME}}-Benotzer $1',
'lastmodifiedatby' => "Dës Säit gouf den $1 ëm $2 Auer vum $3 fir d'lescht geännert.",
'othercontribs' => 'Op der Basis vun der Aarbecht vum $1',
'others' => 'anerer',
'siteusers' => '{{SITENAME}} {{PLURAL:$2|Benotzer|Benotzer}} $1',
'anonusers' => '{{PLURAL:$2|Anonyme(n)|Anonym}} {{SITENAME}}-Benotzer $1',
'creditspage' => 'Quellen',
'nocredits' => "Fir dës Säit si keng Informatiounen iwwert d'Mataarbechter vun der Säit disponibel.",

# Spam protection
'spamprotectiontitle' => 'Spamfilter',
'spamprotectiontext' => "D'Säit déi dir späichere wollt gouf vum Spamfilter gespaart.
Dëst warscheinlech duerch en externe Link den op der schwaarzer Lëscht (blacklist) vun den externe Säite steet.",
'spamprotectionmatch' => "'''Dësen Text gouf vum Spamfilter fonnt: ''$1'''''",
'spambot_username' => 'Botz vum Spam duerch MediaWiki',
'spam_reverting' => 'Déi lescht Versioun ouni Linken op $1 restauréieren.',
'spam_blanking' => 'An alle Versioune ware Linken op $1, et ass elo alles gebotzt.',
'spam_deleting' => 'All Versioune mat Linken op $1 gi geläscht',

# Info page
'pageinfo-title' => 'Informatioun iwwer "$1"',
'pageinfo-not-current' => 'Pardon, et ass onméiglech dës Informatioun fir al Versiounen ze weisen.',
'pageinfo-header-basic' => 'Basisinformatiounen',
'pageinfo-header-edits' => 'Historique vun den Ännerungen',
'pageinfo-header-restrictions' => 'Spär vun der Säit',
'pageinfo-header-properties' => 'Eegeschafte vun der Säit',
'pageinfo-display-title' => 'Titel dee gewise gëtt',
'pageinfo-default-sort' => 'Standard-Zortéierschlëssel',
'pageinfo-length' => 'Gréisst vun der Säit (a Bytes)',
'pageinfo-article-id' => 'ID (Nummer) vun der Säit',
'pageinfo-language' => 'Sprooch vum Inhalt vun der Säit',
'pageinfo-views' => 'Zuel vun de Kéieren déi dës Säit gekuckt gouf',
'pageinfo-watchers' => "Zuel vun de Benotzer déi d'Säit iwwerwaachen",
'pageinfo-redirects-name' => 'Viruleedungen op dës Säit',
'pageinfo-subpages-name' => 'Ënnersäite vun dëser Säit',
'pageinfo-subpages-value' => '$1 ($2 {{PLURAL:$2|Viruleedung|Viruleedungen}}; $3 {{PLURAL:$3|Ënnersäit|Ënnersäiten}})',
'pageinfo-firstuser' => '1. Auteur vun der Säit',
'pageinfo-firsttime' => 'Datum vum Uleeë vun der Säit',
'pageinfo-lastuser' => 'Leschte Benotzer deen eppes geännert huet',
'pageinfo-lasttime' => 'Datum vun der leschter Ännerung',
'pageinfo-edits' => 'Gesamtzuel vun den Ännerungen',
'pageinfo-authors' => 'Gesamtzuel vun de verschiddenen Auteuren',
'pageinfo-recent-edits' => 'Zuel vun de rezenten Ännerungen (an de leschten $1)',
'pageinfo-recent-authors' => 'Zuel vun de verschiddenen Auteuren',
'pageinfo-magic-words' => '{{PLURAL:$1|Magescht Wuert|Magesch Wierder}} ($1)',
'pageinfo-hidden-categories' => 'Verstoppte {{PLURAL:$1|Kategorie|Kategorien}} ($1)',
'pageinfo-templates' => 'Agebonne {{PLURAL:$1|Schabloun|Schabloune}} ($1)',
'pageinfo-toolboxlink' => "Informatiounen iwwert d'Säit",
'pageinfo-redirectsto' => 'Viruleedung op',
'pageinfo-redirectsto-info' => 'Informatioun',
'pageinfo-contentpage' => 'Als Säit mat Inhalt gezielt',
'pageinfo-contentpage-yes' => 'Jo',
'pageinfo-protect-cascading-yes' => 'Jo',

# Skin names
'skinname-standard' => 'Klassesch',
'skinname-nostalgia' => 'Nostalgie',
'skinname-cologneblue' => 'Köln Blo',
'skinname-monobook' => 'MonoBook',
'skinname-myskin' => 'MySkin',
'skinname-chick' => 'Chick',
'skinname-simple' => 'Einfach',
'skinname-modern' => 'Modern',

# Patrolling
'markaspatrolleddiff' => 'Als nogekuckt markéieren',
'markaspatrolledtext' => 'Dës Säit als nogekuckt markéieren',
'markedaspatrolled' => 'ass als nogekuckt markéiert',
'markedaspatrolledtext' => 'Déi gewielt Versioun vu(n) [[:$1]] gouf als nogekuckt markéiert.',
'rcpatroldisabled' => 'Rezent Ännerungskontroll ausgeschalt.',
'rcpatroldisabledtext' => "D'Kontroll vun de leschten Ännerungen ass elo ausgeschalt.",
'markedaspatrollederror' => 'Kann net als "nogekuckt" markéiert ginn.',
'markedaspatrollederrortext' => 'Dir musst eng Säitenännerung auswielen.',
'markedaspatrollederror-noautopatrol' => 'Dir däerft Är eegen Ännerungen net als nogekuckt markéieren.',

# Patrol log
'patrol-log-page' => 'Logbuch vun den iwwerkuckte Versiounen',
'patrol-log-header' => "Dëst ass d'Logbuch vun den nogekuckte Versiounen.",
'log-show-hide-patrol' => 'Kontroll-Logbuch $1',

# Image deletion
'deletedrevision' => 'Al, geläschte Versioun $1',
'filedeleteerror-short' => 'Feeler beim Läsche vum Fichier: $1',
'filedeleteerror-long' => 'Bäim Läsche vum Fichier si Feeler festgestallt ginn:

$1',
'filedelete-missing' => 'De Fichier "$1" kann net geläscht ginn, well et en net gëtt.',
'filedelete-old-unregistered' => 'Déi Versioun vum Fichier déi Dir uginn hutt "$1" gëtt et an der Datebank net.',
'filedelete-current-unregistered' => 'De Fichier "$1" ass net an der Datebank.',
'filedelete-archive-read-only' => 'Op den Archiv-Repertoire „$1“ ka vum Webserver aus näischt geschriwwe ginn.',

# Browsing diffs
'previousdiff' => '← Méi al Ännerung',
'nextdiff' => 'Méi nei Ännerung →',

# Media information
'mediawarning' => "'''Warnung:''' Dës Zort vu Fichier kann e béiswëllege Programmcode enthalen.
Duerch d'Opmaache vum Fichier kann Äre System beschiedegt ginn.",
'imagemaxsize' => "Maximal Gréisst fir Biller:<br />''(fir Billerbeschreiwungssäiten)''",
'thumbsize' => 'Gréisst vun der Miniatur:',
'widthheightpage' => '$1 × $2, $3 {{PLURAL:$3|Säit|Säiten}}',
'file-info' => 'Fichiersgréisst: $1, MIME-Typ: $2',
'file-info-size' => '$1 × $2 Pixel, Fichiersgréisst: $3, MIME-Typ: $4',
'file-info-size-pages' => '$1 × $2 Pixelen, Gréisst vum Fichier: $3, MIME Typ: $4, $5 {{PLURAL:$5|Säit|Säiten}}',
'file-nohires' => 'Et gëtt keng méi héich Opléisung.',
'svg-long-desc' => 'SVG-Fichier, Basisgréisst: $1 × $2 Pixel, Gréisst vum Fichier: $3',
'svg-long-desc-animated' => 'Animéierten SVG-Fichier, Basisgréisst $1 x $2 Pixel, Gréisst vum Fichier: $3',
'show-big-image' => 'Voll Opléisung',
'show-big-image-preview' => 'Gréisst vun dësem Preview: $1.',
'show-big-image-other' => 'Aner {{PLURAL:$2|Opléisung|Opléisungen}}: $1.',
'show-big-image-size' => '$1 × $2 Pixel',
'file-info-gif-looped' => 'endlos Schleef',
'file-info-gif-frames' => '$1 {{PLURAL:$1|Bild|Biller}}',
'file-info-png-looped' => 'endlos Schleef',
'file-info-png-repeat' => 'gouf $1 {{PLURAL:$1|mol|mol}} gespillt',
'file-info-png-frames' => '$1 {{PLURAL:$1|Frame|Framen}}',
'file-no-thumb-animation' => "''''Informatioun: Wéinst technesche Limitatioune sinn d'Miniatur-Biller vun dësem Fichier net animéiert.'''",

# Special:NewFiles
'newimages' => 'Gallerie vun den neie Biller',
'imagelisttext' => "Hei ass eng Lëscht vu(n) '''$1''' {{PLURAL:$1|Fichier|Fichieren}}, zortéiert $2.",
'newimages-summary' => 'Dës Spezialsäit weist eng Lëscht mat de Fichieren déi als lescht eropgeluede goufen.',
'newimages-legend' => 'Filter',
'newimages-label' => 'Numm vum Fichier (oder en Deel dovun):',
'showhidebots' => '($1 Botten)',
'noimages' => 'Keng Biller fonnt.',
'ilsubmit' => 'Sichen',
'bydate' => 'no Datum',
'sp-newimages-showfrom' => 'Nei Biller weisen, ugefaang den $1 ëm $2',

# Video information, used by Language::formatTimePeriod() to format lengths in the above messages
'seconds' => '{{PLURAL:$1|enger Sekonn|$1 Sekonnen}}',
'minutes' => '{{PLURAL:$1|enger Minutt|$1 Minutten}}',
'hours' => '{{PLURAL:$1|enger Stonn|$1 Stonnen}}',
'days' => '{{PLURAL:$1|engem Dag|$1 Deeg}}',
'ago' => 'viru(n) $1',

# Bad image list
'bad_image_list' => 'Format:

Nëmmen Zeilen, déi mat engem * ufänken, ginn ausgewäert. Als éischt no dem * muss ee Link op een net gewënscht Bild stoen.
Duerno sti Linken déi Ausnamen definéieren, an deenen hirem Kontext dat Bild awer opdauchen däerf.',

# Metadata
'metadata' => 'Metadaten',
'metadata-help' => 'An dësem Fichier si weider Informatiounen, déi normalerweis vun der Digitalkamera oder dem benotzte Scanner kommen. Wann de Fichier nodréiglech geännert gouf, kann et sinn datt eenzel Detailer net mat dem aktuelle Fichier iwwereneestëmmen.',
'metadata-expand' => 'Weis detailléiert Informatiounen',
'metadata-collapse' => 'Verstopp detailléiert Informatiounen',
'metadata-fields' => "D'Bild-Meta-Felder aus dëser Lëscht ginn op Bildbeschreiwungssäite gewise wann d'Metadatentafel zesummegeklappt ass.
Déi aner sinn am Standard verstoppt.
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
'exif-imagewidth' => 'Breet',
'exif-imagelength' => 'Längt',
'exif-bitspersample' => 'Bite pro Faarfkomponent',
'exif-compression' => 'Aart vun der Kompressioun',
'exif-photometricinterpretation' => 'Pixelzesummesetzung',
'exif-orientation' => 'Kameraausriichtung',
'exif-samplesperpixel' => 'Zuel vun de Komponenten',
'exif-planarconfiguration' => 'Datenausriichtung',
'exif-ycbcrsubsampling' => 'Subsampling-Taux vun Y bis C',
'exif-ycbcrpositioning' => 'Y an C Positionéierung',
'exif-xresolution' => 'Horizontal Opléisung',
'exif-yresolution' => 'Vertikal Opléisung',
'exif-stripoffsets' => 'Plaz wou de Fichier vum Bild gespäichert ass',
'exif-rowsperstrip' => 'Zuel vun den Zeile pro Strëpp',
'exif-stripbytecounts' => 'Byte pro kompriméiert Strëpp',
'exif-jpeginterchangeformat' => 'Offset zou JPEG SOI',
'exif-jpeginterchangeformatlength' => 'Gréisst vun de JPEG-Daten a Byten',
'exif-whitepoint' => 'Manuell mat Miessung',
'exif-primarychromaticities' => 'Faarwe vun de primäre Faarwen',
'exif-ycbcrcoefficients' => 'YCbCr-Koeffizienten',
'exif-referenceblackwhite' => 'Schwaarz/Wäiss-Referenzpunkten',
'exif-datetime' => 'Späicherzäitpunkt',
'exif-imagedescription' => 'Numm vum Bild',
'exif-make' => 'Fabrikant',
'exif-model' => 'Modell',
'exif-software' => 'Benotzte Software',
'exif-artist' => 'Auteur',
'exif-copyright' => "Droits d'auteur",
'exif-exifversion' => 'Exif-Versioun',
'exif-flashpixversion' => 'Ënnerstëtzte Flashpix-Versioun',
'exif-colorspace' => 'Faarfraum',
'exif-componentsconfiguration' => 'Bedeitung vun eenzelne Komponenten',
'exif-compressedbitsperpixel' => 'Kompriméiert Bite pro Pixel',
'exif-pixelydimension' => 'Breet vum Bild',
'exif-pixelxdimension' => 'Héicht vum Bild',
'exif-usercomment' => 'Bemierkunge vum Benotzer',
'exif-relatedsoundfile' => 'Tounfichier deen dozou gehéiert',
'exif-datetimeoriginal' => 'Erfaassungszäitpunkt',
'exif-datetimedigitized' => 'Digitaliséierungszäitpunkt',
'exif-subsectime' => 'Späicherzäitpunkt (1/100 s)',
'exif-subsectimeoriginal' => 'Erfaassungszäitpunkt (1/100 s)',
'exif-subsectimedigitized' => 'Digitaliséirungszäitpunkt (1/100 s)',
'exif-exposuretime' => 'Beliichtungsdauer',
'exif-exposuretime-format' => '$1 Sekonnen ($2)',
'exif-fnumber' => 'Blend',
'exif-exposureprogram' => 'Beliichtungsprogramm',
'exif-spectralsensitivity' => 'Spectral Sensitivitéit',
'exif-isospeedratings' => 'Film- oder Sensorempfindlechkeet (ISO)',
'exif-shutterspeedvalue' => 'APEX Beliichtungszäit',
'exif-aperturevalue' => 'APEX Blendewäert',
'exif-brightnessvalue' => 'APEX Hellegkeet',
'exif-exposurebiasvalue' => 'Beliichtungsvirgab',
'exif-maxaperturevalue' => 'Gréisste Blend',
'exif-subjectdistance' => 'Distanz zum Sujet',
'exif-meteringmode' => 'Miessmethod',
'exif-lightsource' => 'Liichtquell',
'exif-flash' => 'Blëtz',
'exif-focallength' => 'Brennwäit',
'exif-subjectarea' => 'Beräich',
'exif-flashenergy' => 'Blëtzstäerkt',
'exif-focalplanexresolution' => 'Sensoropléisung horizontal',
'exif-focalplaneyresolution' => 'Sensoropléisung vertikal',
'exif-focalplaneresolutionunit' => 'Eenheet vun der Sensoropléisung',
'exif-subjectlocation' => 'Motivstanduert',
'exif-exposureindex' => 'Beliichtungsindex',
'exif-sensingmethod' => 'Miessmethod',
'exif-filesource' => 'Quell vum Fichier',
'exif-scenetype' => 'Typ vun der Szeen',
'exif-customrendered' => 'Benotzerdefinéiert Bildveraarbechtung',
'exif-exposuremode' => 'Beliichtungsmodus',
'exif-whitebalance' => 'Wäissofgläich',
'exif-digitalzoomratio' => 'Digitalzoom',
'exif-focallengthin35mmfilm' => 'Brennwäit (Klengbildäquivalent)',
'exif-scenecapturetype' => 'Aart vun der Opnam',
'exif-gaincontrol' => 'Verstäerkung',
'exif-contrast' => 'Kontrast',
'exif-saturation' => 'Saturatioun',
'exif-sharpness' => 'Schäerft',
'exif-devicesettingdescription' => 'Beschreiwung vun den Astellunge vum Apparat',
'exif-subjectdistancerange' => 'Motivdistanz',
'exif-imageuniqueid' => 'Bild-ID',
'exif-gpsversionid' => 'Versioun vum GPS-Tag',
'exif-gpslatituderef' => 'nördlech oder südlech Breet',
'exif-gpslatitude' => 'Geografesch Breet',
'exif-gpslongituderef' => 'östlech oder westlech geografesch Längt',
'exif-gpslongitude' => 'Geografesch Längt',
'exif-gpsaltituderef' => 'Referenzhéicht',
'exif-gpsaltitude' => 'Héicht',
'exif-gpstimestamp' => 'GPS-Zäit',
'exif-gpssatellites' => "Satelitten déi fir d'Moosse benotzt goufen",
'exif-gpsstatus' => 'Status vum Empfänger',
'exif-gpsmeasuremode' => 'Moossmethod',
'exif-gpsdop' => 'Prezisioun vun der Miessung',
'exif-gpsspeedref' => 'Eenheet vun der Vitesse',
'exif-gpsspeed' => 'Vitesse vum GPS-Empfänger',
'exif-gpstrackref' => "Referenz fir d'Bewegungsrichtung",
'exif-gpstrack' => 'Bewegungsrichtung',
'exif-gpsimgdirectionref' => "Referenz fir d'Ausriichtung vum Bild",
'exif-gpsimgdirection' => 'Bildrichtung',
'exif-gpsmapdatum' => 'Geodäteschen Datum benotzt',
'exif-gpsdestlatituderef' => "Referenz fir d'Breet",
'exif-gpsdestlatitude' => 'Breet',
'exif-gpsdestlongituderef' => "Referenz fir d'Längt",
'exif-gpsdestlongitude' => 'Längt',
'exif-gpsdestbearingref' => "Referenz fir d'Motivrichtung",
'exif-gpsdestbearing' => 'Richtung vum Motiv',
'exif-gpsdestdistanceref' => "Referenz fir d'Distanz bis bäi den Objet (vun der Foto)",
'exif-gpsdestdistance' => 'Motivdistanz',
'exif-gpsprocessingmethod' => 'Numm vun der GPS-Prozedur-Method',
'exif-gpsareainformation' => 'Numm vun der GPS-Géigend',
'exif-gpsdatestamp' => 'GPS-Datum',
'exif-gpsdifferential' => 'GPS-Differentialverbesserung',
'exif-jpegfilecomment' => 'Bemierkung zum JPEG-Fichier',
'exif-keywords' => 'Stéchwierder',
'exif-worldregioncreated' => "Welt-Regioun an där d'Bild gemaach gouf",
'exif-countrycreated' => "Land an deem d'Bild gemaach gouf",
'exif-countrycodecreated' => "Code fir d'Land an deem d'Bild gemaach gouf",
'exif-provinceorstatecreated' => "Provënz oder Staat an deem d'Bild gemaach gouf",
'exif-citycreated' => "Stad an där d'Bild gemaach gouf",
'exif-sublocationcreated' => "Deel vun der Stad an deem d'Bild gemaach gouf",
'exif-worldregiondest' => 'Gewise Welt-Regioun',
'exif-countrydest' => 'Gewisent Land',
'exif-countrycodedest' => 'Code vum gewisene Land',
'exif-provinceorstatedest' => 'Gewise Provënz oder Deel vun engem Land',
'exif-citydest' => 'Gewise Stad',
'exif-sublocationdest' => 'Gewisenen Deel vun der Stad',
'exif-objectname' => 'Kuerzen Titel',
'exif-specialinstructions' => 'Besonnesch Instruktiounen',
'exif-headline' => 'Iwwerschrëft',
'exif-source' => 'Quell',
'exif-editstatus' => 'Redaktionnelle Statut vum Bild',
'exif-urgency' => 'Urgence',
'exif-fixtureidentifier' => 'Numm vun der Rubrik',
'exif-locationdest' => 'Gewise Plaz',
'exif-locationdestcode' => 'Code fir déi gewise Plaz',
'exif-objectcycle' => 'Zäit vum Dag fir deen dëse Fichier geduecht ass',
'exif-contact' => 'Kontaktinformatioun',
'exif-writer' => 'Auteur',
'exif-languagecode' => 'Sprooch',
'exif-iimversion' => 'IIM-Versioun',
'exif-iimcategory' => 'Kategorie',
'exif-iimsupplementalcategory' => 'Zousätzlech Kategorien',
'exif-datetimeexpires' => 'Net benotzen nom',
'exif-datetimereleased' => 'Erausginn den',
'exif-originaltransmissionref' => "Geo-Code vun der Plaz vu wou d'Foto iwwermëttelt gouf",
'exif-identifier' => 'Identifiant',
'exif-lens' => 'Objektiv dat benotzt gouf',
'exif-serialnumber' => 'Seriennummer vun der Kamera',
'exif-cameraownername' => 'Besëtzer vun der Kamera',
'exif-label' => 'Etiquette',
'exif-datetimemetadata' => 'Datum vun der leschter Ännerung vun de Metadaten',
'exif-nickname' => 'Informellen Numm vum Bild',
'exif-rating' => 'Bewäertung (vu 5)',
'exif-rightscertificate' => 'Zertifikat vun der Gestioun vun de Rechter',
'exif-copyrighted' => 'Copyright Status',
'exif-copyrightowner' => "Titulaire vun den Droits d'auteur",
'exif-usageterms' => 'Benotzungsbedingungen',
'exif-webstatement' => 'Omline Copyright Deklaratioun',
'exif-licenseurl' => 'URL vum Copyright (Lizenz)',
'exif-morepermissionsurl' => 'Alternativ Lizenzinformatiounen',
'exif-attributionurl' => 'Wann dëst Wierk weiderbenotzt gëtt, da linkt w.e.g. op',
'exif-preferredattributionname' => 'Wann dëst Wierk weiderbenotzt gëtt, da nennt w.e.g.',
'exif-pngfilecomment' => 'Bemierkung zum PNG-Fichier',
'exif-disclaimer' => 'Limitatioun vun der Responsabilitéit',
'exif-contentwarning' => 'Warnung iwwer den Inhalt',
'exif-giffilecomment' => 'Bemierkung zum GIF-Fichier',
'exif-intellectualgenre' => 'Typ vum Element',
'exif-subjectnewscode' => 'Code vum Sujet',
'exif-organisationinimage' => 'Organisatioun um Bild',
'exif-personinimage' => 'Persoun um Bild',
'exif-originalimageheight' => 'Héicht vum Bild virum Ofschneiden',
'exif-originalimagewidth' => 'Breet vum Bild virum Ofschneiden',

# EXIF attributes
'exif-compression-1' => 'Onkompriméiert',

'exif-copyrighted-true' => 'Duerch Copyright geschützt',
'exif-copyrighted-false' => 'Ëffentlechen Domaine',

'exif-unknowndate' => 'Onbekannten Datum',

'exif-orientation-1' => 'Normal',
'exif-orientation-2' => 'Horizontal gedréit',
'exif-orientation-3' => 'Ëm 180° gedréit',
'exif-orientation-4' => 'Vertikal gedréit',
'exif-orientation-5' => "90° géint d'Richtung vun den Zäre vun der Auer gedréint a vertikal ëmgedréint",
'exif-orientation-6' => "Ëm 90° an d'Richtung vun den Zäre vun der Auer gedréint",
'exif-orientation-7' => '90° an der Richtung vun den Zäre vun der Auer gedréint a vertikal ëmgedréint',
'exif-orientation-8' => "Ëm 90° géint d'Richtung vun den Zäre vun der Auer gedréint",

'exif-planarconfiguration-1' => 'Graffe Format',
'exif-planarconfiguration-2' => 'Planare Format',

'exif-colorspace-65535' => 'Net kalibréiert',

'exif-componentsconfiguration-0' => 'Gëtt et net',

'exif-exposureprogram-0' => 'Onbekannt',
'exif-exposureprogram-1' => 'Manuell',
'exif-exposureprogram-2' => 'Standardprogramm',
'exif-exposureprogram-3' => 'Zäitautomatik',
'exif-exposureprogram-4' => 'Blendenautomatik',
'exif-exposureprogram-5' => 'Kreative Programm (optiméiert fir Déifteschärft)',
'exif-exposureprogram-6' => 'Action-Programm (optiméiert fir kuerz Beliichtungszäiten)',
'exif-exposureprogram-7' => 'Portrait-Programm (fir Fotoe vun no mat engem net-scharfen Hannergrond)',
'exif-exposureprogram-8' => 'Landschaftsopnamen',

'exif-subjectdistance-value' => '$1 Meter',

'exif-meteringmode-0' => 'Onbekannt',
'exif-meteringmode-1' => 'Duerchschnëttlech',
'exif-meteringmode-2' => 'An der Mëtt zentréiert',
'exif-meteringmode-3' => 'Spotmiessung',
'exif-meteringmode-4' => 'Méifachspotmiessung',
'exif-meteringmode-5' => 'Modell',
'exif-meteringmode-6' => 'Bilddeel',
'exif-meteringmode-255' => 'Onbekannt',

'exif-lightsource-0' => 'Onbekannt',
'exif-lightsource-1' => 'Dageslut',
'exif-lightsource-2' => 'Fluoreszéierend',
'exif-lightsource-3' => 'Tungsten (Liicht wéi vun enger elektrescher Bir)',
'exif-lightsource-4' => 'Blëtz',
'exif-lightsource-9' => 'Schéint Wieder',
'exif-lightsource-10' => 'Wollekeg',
'exif-lightsource-11' => 'Schiet',
'exif-lightsource-12' => 'Dagesliicht fluoreszéiert (D 5700 – 7100 K)',
'exif-lightsource-13' => 'Dageswäiss fluoreszéierend (N 4600 – 5400K)',
'exif-lightsource-14' => 'Kill wäiss fluoreséierent (W 3900 – 4500K)',
'exif-lightsource-15' => 'Wäiss fluoreszéierent (WW 3200 – 3700K)',
'exif-lightsource-17' => 'Standardluucht A',
'exif-lightsource-18' => 'Standardluucht B',
'exif-lightsource-19' => 'Standardluucht C',
'exif-lightsource-24' => 'ISO Studio Konschtliicht',
'exif-lightsource-255' => 'Aner Liichtquell',

# Flash modes
'exif-flash-fired-0' => 'Ouni Blëtz',
'exif-flash-fired-1' => 'mat Blëtz',
'exif-flash-return-0' => "keng Fonctioun fir d'Reflexioun vum Blëtz festzestellen",
'exif-flash-return-2' => 'keng Reflexioun vum Blëtz festgestallt',
'exif-flash-return-3' => 'Reflexioun vum Blëtz festgestallt',
'exif-flash-mode-1' => 'erzwongene Blëtz',
'exif-flash-mode-2' => 'De Blëtz war ausgeschalt',
'exif-flash-mode-3' => 'Automatik',
'exif-flash-function-1' => 'Ouni Blëtzfonctioun',
'exif-flash-redeye-1' => 'Reduktioun vun de rouden Aen',

'exif-focalplaneresolutionunit-2' => 'Zoll/Inchen',

'exif-sensingmethod-1' => 'Ondefinéiert',
'exif-sensingmethod-2' => 'Een-Chip-Faarfsensor',
'exif-sensingmethod-3' => 'Zwee-Chip-Faarfsensor',
'exif-sensingmethod-4' => 'Dräi-Chip-Faarfsensor',
'exif-sensingmethod-5' => 'Sequentielle raimleche Farwsensor',
'exif-sensingmethod-7' => 'Dräilineare Sensor',
'exif-sensingmethod-8' => 'Sequentielle lineare Farwsensor',

'exif-filesource-3' => 'Digital Kamera',

'exif-scenetype-1' => "D'Bild gouf photograféiert",

'exif-customrendered-0' => 'Standard',
'exif-customrendered-1' => 'Benotzerdefinéiert',

'exif-exposuremode-0' => 'Automatesch Beliichtung',
'exif-exposuremode-1' => 'Manuell Beliichtung',
'exif-exposuremode-2' => 'Beliichtungsserie',

'exif-whitebalance-0' => 'Automatesche Wäissofgläich',
'exif-whitebalance-1' => 'Manuelle Wäissofgläich',

'exif-scenecapturetype-0' => 'Standard',
'exif-scenecapturetype-1' => 'Landschaft',
'exif-scenecapturetype-2' => 'Portrait',
'exif-scenecapturetype-3' => 'Nuetszeen',

'exif-gaincontrol-0' => 'Keng',
'exif-gaincontrol-1' => 'Kleng',
'exif-gaincontrol-2' => 'High Gain up',
'exif-gaincontrol-3' => 'Low gain down',
'exif-gaincontrol-4' => 'High gain down',

'exif-contrast-0' => 'Normal',
'exif-contrast-1' => 'Schwaach',
'exif-contrast-2' => 'Staark',

'exif-saturation-0' => 'Normal',
'exif-saturation-1' => 'Niddreg Saturatioun',
'exif-saturation-2' => 'Héich',

'exif-sharpness-0' => 'Normal',
'exif-sharpness-1' => 'Douce',
'exif-sharpness-2' => 'Staark',

'exif-subjectdistancerange-0' => 'Onbekannt',
'exif-subjectdistancerange-1' => 'Makro',
'exif-subjectdistancerange-2' => 'No',
'exif-subjectdistancerange-3' => 'wäit ewech',

# Pseudotags used for GPSLatitudeRef and GPSDestLatitudeRef
'exif-gpslatitude-n' => 'nërdlech Breet',
'exif-gpslatitude-s' => 'südlech Breet',

# Pseudotags used for GPSLongitudeRef and GPSDestLongitudeRef
'exif-gpslongitude-e' => 'ëstlech Längt',
'exif-gpslongitude-w' => 'westlech Längt',

# Pseudotags used for GPSAltitudeRef
'exif-gpsaltitude-above-sealevel' => '$1 {{plural:$1|Meter|Meter}} iwwer dem Niveau vum Mier',
'exif-gpsaltitude-below-sealevel' => '$1 {{plural:$1|Meter|Meter}} ënner dem Niveau vum Mier',

'exif-gpsstatus-a' => 'Miessung am gaang',
'exif-gpsstatus-v' => 'Interoperabilitéit vu der Miessung',

'exif-gpsmeasuremode-2' => '2-dimensional Miessung',
'exif-gpsmeasuremode-3' => '3-dimensional Miessung',

# Pseudotags used for GPSSpeedRef
'exif-gpsspeed-k' => 'Kilometer pro Stonn',
'exif-gpsspeed-m' => 'Meile pro Stonn',
'exif-gpsspeed-n' => 'Kniet',

# Pseudotags used for GPSDestDistanceRef
'exif-gpsdestdistance-k' => 'Kilometer',
'exif-gpsdestdistance-m' => 'Meilen',
'exif-gpsdestdistance-n' => 'Nautesch Meilen',

'exif-gpsdop-excellent' => 'Exzellent ($1)',
'exif-gpsdop-good' => 'Gutt ($1)',
'exif-gpsdop-moderate' => 'Mëttel ($1)',
'exif-gpsdop-fair' => 'Ongeféier ($1)',
'exif-gpsdop-poor' => 'Schwaach ($1)',

'exif-objectcycle-a' => 'Nëmme moies',
'exif-objectcycle-p' => 'Nëmmen owes',
'exif-objectcycle-b' => 'Esouwuel moies wéi owes',

# Pseudotags used for GPSTrackRef, GPSImgDirectionRef and GPSDestBearingRef
'exif-gpsdirection-t' => 'Tatsächlech Richtung',
'exif-gpsdirection-m' => 'Magnéitesch Richtung',

'exif-ycbcrpositioning-1' => 'Zentréiert',

'exif-dc-contributor' => 'Bedeelegt',
'exif-dc-date' => 'Datum(en)',
'exif-dc-publisher' => 'Editeur',
'exif-dc-relation' => 'Verbonne Medien',
'exif-dc-rights' => 'Rechter',
'exif-dc-source' => 'Ursprong vum Fichier',
'exif-dc-type' => 'Medientyp',

'exif-rating-rejected' => 'Refuséiert',

'exif-isospeedratings-overflow' => 'Méi grouss wéi 65535',

'exif-iimcategory-ace' => 'Konscht, Kultur an Ënnerhalung',
'exif-iimcategory-clj' => 'Kriminalitéit a Recht',
'exif-iimcategory-dis' => 'Katastrofen an Akzidenter',
'exif-iimcategory-fin' => 'Economie a Geschäft',
'exif-iimcategory-edu' => 'Formatioun',
'exif-iimcategory-evn' => 'Ëmwelt',
'exif-iimcategory-hth' => 'Gesondheet',
'exif-iimcategory-hum' => 'Interessen',
'exif-iimcategory-lab' => 'Aarbecht',
'exif-iimcategory-lif' => 'Lifestyle a Fräizäit',
'exif-iimcategory-pol' => 'Politik',
'exif-iimcategory-rel' => 'Relioun a Glawen',
'exif-iimcategory-sci' => 'Wëssenschaft an Technologie',
'exif-iimcategory-soi' => 'Sozial Themen',
'exif-iimcategory-spo' => 'Sport',
'exif-iimcategory-war' => 'Krich, Konflikt an Onrou',
'exif-iimcategory-wea' => 'Wieder',

'exif-urgency-normal' => 'Normal ($1)',
'exif-urgency-low' => 'Niddreg ($1)',
'exif-urgency-high' => 'Héich ($1)',
'exif-urgency-other' => 'Benotzerdefinéiert Prioritéit ($1)',

# External editor support
'edit-externally' => 'Dëse Fichier mat engem externe Programm änneren',
'edit-externally-help' => "(Fir gewuer ze gi wéi dat genee geet liest d'[//www.mediawiki.org/wiki/Manual:External_editors Installatiounsinstruktiounen].)",

# 'all' in various places, this might be different for inflected languages
'watchlistall2' => 'all',
'namespacesall' => 'all',
'monthsall' => 'all',
'limitall' => 'all',

# E-mail address confirmation
'confirmemail' => 'E-Mailadress confirméieren',
'confirmemail_noemail' => 'Dir hutt keng gëlteg E-Mail-Adress an Äre [[Special:Preferences|Benotzerastellungen]] agedro.',
'confirmemail_text' => "Ier Dir d'E-Mailfunktioune vun {{SITENAME}} benotze kënnt musst dir als éischt Är E-Mailadress confirméieren. Dréckt w.e.g. de Knäppchen hei ënnendrënner fir eng Confirmatiouns-E-Mail op déi Adress ze schécken déi Dir uginn hutt. An där E-Mail steet e Link mat engem Code, deen dir dann an Ärem Browser opmaache musst fir esou ze bestätegen, datt Är Adress och wierklech existéiert a valabel ass.",
'confirmemail_pending' => 'Dir krut schonn e Confirmatiouns-Code per E-Mail geschéckt. Wenn Dir Äre Benotzerkont eréischt elo kuerz opgemaach hutt, da gedëllegt Iech nach e puer Minutten bis Är E-Mail ukomm ass, ier Dir een neie Code ufrot.',
'confirmemail_send' => 'Confirmatiouns-E-Mail schécken',
'confirmemail_sent' => 'Confirmatiouns-E-Mail gouf geschéckt.',
'confirmemail_oncreate' => "E Confirmatiouns-Code gouf op Är E-Mail-Adress geschéckt.
Dëse Code gëtt fir d'Umeldung net gebraucht. Dir braucht en awer bei der Aktivéierung vun den E-Mail-Funktiounen bannert der Wiki.",
'confirmemail_sendfailed' => '{{SITENAME}} konnt är Confirmatiouns-E-Mail net schécken.
Iwwerpréift w.e.g. är E-Mailadress op ongëlteg Zeechen.

Feelermeldung vum Mailserver: $1',
'confirmemail_invalid' => "Ongëltege Confirmatiounscode. Eventuell ass d'Gëltegkeetsdauer vum Code ofgelaf.",
'confirmemail_needlogin' => 'Dir musst iech $1, fir är E-Mailadress ze confirméieren.',
'confirmemail_success' => 'Är E-Mailadress gouf confirméiert. Där kënnt iech elo aloggen an a vollem Ëmfang vun der Wiki profitéieren.',
'confirmemail_loggedin' => 'Är E-Mailadress gouf elo confirméiert.',
'confirmemail_error' => 'Et ass eppes falsch gelaf bäim Späichere vun ärer Confirmatioun.',
'confirmemail_subject' => 'Confirmatioun vun der E-Mailadress fir {{SITENAME}}',
'confirmemail_body' => 'E Benotzer, waarscheinlech dir selwer, hutt mat der IP Adress $1 de Benotzerkont "$2" um Site {{SITENAME}} opgemaach.

Fir ze bestätegen, datt dee Kont iech wierklech gehéiert a fir d\'E-Mail-Funktiounen um Site {{SITENAME}} z\'aktivéieren, maacht w.e.g. dëse Link an ärem Browser op:
$3

Wann dir dëse Benotzerkont *net* opgemaach hutt, maacht w.e.g. dëse Link an ärem Browser op fir d\'E-Mailconfirmation z\'annulléieren:

$5

Sollt et sech net ëm äre Benotzerkont handelen, da maacht de Link *net* op. De Confirmatiounscode ass gëlteg bis de(n) $4.',
'confirmemail_body_changed' => 'E Benotzer, wahrscheinlech Dir selwer, vun der IP-Adress $1,
huet d\'E-Mailadress vum Benotzerkont "$2" op dës Adress op {{SITENAME}} geännert.

Fir ze confirméieren datt dëse Benotzerkont Iech wierklech gehéiert a fir d\'E-Mailfonctiounen op {{SITENAME}} ze reaktivéieren, maacht dës Link an Ärem Browser op:

$3

Wann de Benotzerkont Iech *net* gehéiert, da klickt op dëse Link fir d\'Confirmatioun vun der E-Mailadress auszeschalten:

$5

Dëse Confirmatiouns-Code leeft den $4 of.',
'confirmemail_body_set' => 'Iergendeen, wahrscheinlech Dir selwer, vun der IP-Adress $1,
huet d\'E-Mailadress vum Benotzerkont "$2" op dës Adress op {{SITENAME}} geännert.

Fir ze confirméieren datt dëse Benotzerkont Iech wierklech gehéiert a fir d\'E-Mailfonctiounen op {{SITENAME}} ze reaktivéieren, maacht dës Link an Ärem Browser op:

$3

Wann de Benotzerkont Iech *net* gehéiert, da klickt op dëse Link fir d\'Confirmatioun vun der E-Mailadress auszeschalten:

$5

Dëse Confirmatiouns-Code leeft den $4 of.',
'confirmemail_invalidated' => 'Confirmatioun vun der E-Mailadress annulléiert',
'invalidateemail' => "Annulléier d'E-Mailconfirmation",

# Scary transclusion
'scarytranscludedisabled' => '[Interwiki-Abannung ass ausgeschalt]',
'scarytranscludefailed' => "[D'Siche no der Schabloun fir $1 huet net funktionéiert]",
'scarytranscludefailed-httpstatus' => "[D'Oprufe vun der Schabloun $1: HTTP $2 huet net fonctionnéiert]",
'scarytranscludetoolong' => "[D'URL ass ze laang]",

# Delete conflict
'deletedwhileediting' => "'''Opgepasst''': Dës Säit gouf geläscht nodeems datt dir ugefaangen hutt se z'änneren!",
'confirmrecreate' => "De Benotzer [[User:$1|$1]] ([[User talk:$1|Diskussioun]]) huet dës Säit geläscht, nodeems datt där ugefaangen hutt drun ze schaffen. D'Begrënnung war: ''$2'' Bestätegt w.e.g., datt Dir dës Säit wierklich erëm nei opmaache wëllt.",
'confirmrecreate-noreason' => 'De Benotzer [[User:$1|$1]] ([[User talk:$1|Diskussioun]]) huet dës Säit geläscht, nodeems datt Dir ugefaangen hutt drun ze schaffen. Confirméiert w.e.g., datt Dir dës Säit wierklech erëm nei opmaache wëllt.',
'recreate' => 'Erëm uleeën',

# action=purge
'confirm_purge_button' => 'OK',
'confirm-purge-top' => 'Dës Säit aus dem Server-Cache läschen?',
'confirm-purge-bottom' => "Mécht de Cache vun enger Säit eidel a forcéiert d'Uweise vun der aktueller Versioun.",

# action=watch/unwatch
'confirm-watch-button' => 'OK',
'confirm-watch-top' => 'Dës Säit op Är Iwwerwaachungslëscht bäisetzen?',
'confirm-unwatch-button' => 'OK',
'confirm-unwatch-top' => 'Dës Säit vun Ärer Iwwerwaachungslëscht erofhuelen?',

# Multipage image navigation
'imgmultipageprev' => '← Vireg Säit',
'imgmultipagenext' => 'nächst Säit →',
'imgmultigo' => 'Lass!',
'imgmultigoto' => "Géi op d'Säit $1",

# Table pager
'ascending_abbrev' => 'erop',
'descending_abbrev' => 'erof',
'table_pager_next' => 'Nächst Säit',
'table_pager_prev' => 'Vireg Säit',
'table_pager_first' => 'Éischt Säit',
'table_pager_last' => 'Lescht Säit',
'table_pager_limit' => '$1 Objete pro Säit weisen',
'table_pager_limit_label' => 'Objete pro Säit:',
'table_pager_limit_submit' => 'Lass',
'table_pager_empty' => 'Keng Resultater',

# Auto-summaries
'autosumm-blank' => "D'Säit gouf eidel gemaach",
'autosumm-replace' => "Säitinhalt gëtt ersat duerch '$1'",
'autoredircomment' => 'Virugeleet op [[$1]]',
'autosumm-new' => "Säit ugeluecht mat: '$1'",

# Live preview
'livepreview-loading' => 'Lueden…',
'livepreview-ready' => 'Lueden … Fäerdeg!',
'livepreview-failed' => "Live-Preview huet net fonctionéiert! Benotzt w.e.g. d'Fonctioun ''Kucken ouni ofzespäicheren''.",
'livepreview-error' => "Verbindung net méiglech: $1 „$2“.
Benotzt w.e.g. d'Funktioun fir déi nach net gespäichert Versioun ze kucken (Kucken ouni ofzespäicheren).",

# Friendlier slave lag warnings
'lag-warn-normal' => 'Ännerunge vun {{PLURAL:$1|der leschter Sekonn|de leschte(n) $1 Sekonnen}} kënnen an dëser Lëscht net gewise ginn.',
'lag-warn-high' => 'Duerch eng héich Serverbelaaschtung kënne Verännerungen déi viru manner wéi $1 {{PLURAL:$1|Sekonn|Sekonne}} gemaach goufen, net an dëser Lëscht ugewise ginn.',

# Watchlist editor
'watchlistedit-numitems' => "Op Ärer Iwwerwaachungslëscht {{PLURAL:$1|steet 1 Säit|stinn $1 Säiten}}, ouni d'Diskussiounssäiten.",
'watchlistedit-noitems' => 'Är Iwwerwaachungslëscht ass eidel.',
'watchlistedit-normal-title' => 'Iwwerwaachungslëscht änneren',
'watchlistedit-normal-legend' => 'Säite vun der Iwwerwaachungslëscht erofhuelen',
'watchlistedit-normal-explain' => 'D\'Säite vun ärer Iwwerwaachungslëscht ginn drënner gewisen.
Fir eng Säit erofzehuelen, klickt op d\'Haischen niewendrun a klickt duerno op "{{int:Watchlistedit-normal-submit}}".
Dir kënnt och [[Special:EditWatchlist/raw|déi net formatéiert Iwwerwaachungslëscht änneren]].',
'watchlistedit-normal-submit' => 'Säiten erofhuelen',
'watchlistedit-normal-done' => '{{PLURAL:$1|1 Säit gouf|$1 Säite goufe}} vun ärer Iwwerwaachungslëscht erofgeholl:',
'watchlistedit-raw-title' => 'Iwwerwaachungslëscht onformatéiert änneren',
'watchlistedit-raw-legend' => 'Iwwerwaachungslëscht onformatéiert änneren',
'watchlistedit-raw-explain' => "D'Säite vun Ärer Iwwerwaachungslëscht ginn hei drënner gewisen a kënne geännert ginn andeems der d'Säiten op d'Lëscht derbäisetze oder erofhuelt; eng Säit pro Linn.
Wann Dir fäerdeg sidd, klickt \"{{int:Watchlistedit-raw-submit}}\".
Dir kënnt och [[Special:EditWatchlist|de Standard Editeur benotzen]].",
'watchlistedit-raw-titles' => 'Säiten:',
'watchlistedit-raw-submit' => 'Iwwerwaachungslëscht aktualiséieren',
'watchlistedit-raw-done' => 'Är Iwwerwaachungslëscht gouf aktualiséiert.',
'watchlistedit-raw-added' => '{{PLURAL:$1|1 Säit gouf|$1 Säite goufen}} derbäigesat:',
'watchlistedit-raw-removed' => '{{PLURAL:$1|1 Säit gouf|$1 Säite goufen}} erausgeholl:',

# Watchlist editing tools
'watchlisttools-view' => 'Iwwerwaachungslëscht: Ännerungen',
'watchlisttools-edit' => 'Iwwerwaachungslëscht weisen an änneren',
'watchlisttools-raw' => 'Net-formatéiert Iwwerwaachungslëscht änneren',

# Signatures
'signature' => '[[{{ns:user}}:$1|$2]] ([[{{ns:user_talk}}:$1|Diskussioun]])',

# Core parser functions
'unknown_extension_tag' => 'Onbekannten Erweiderungs-Tag "$1"',
'duplicate-defaultsort' => '\'\'\'Opgepasst:\'\'\' Den Zortéierschlëssel "$2" iwwerschreift de viregen Standard-Zortéierschlëssel "$1".',

# Special:Version
'version' => 'Versioun',
'version-extensions' => 'Installéiert Erweiderungen',
'version-specialpages' => 'Spezialsäiten',
'version-parserhooks' => 'Parser-Erweiderungen',
'version-variables' => 'Variabelen',
'version-antispam' => 'Spam-Preventioun',
'version-skins' => 'Skins/Layout',
'version-other' => 'Aner',
'version-mediahandlers' => 'Medien-Ënnerstëtzung',
'version-hooks' => 'Klameren',
'version-extension-functions' => 'Funktioune vun den Erweiderungen',
'version-parser-extensiontags' => "Parser-Erweiderungen ''(Taggen)''",
'version-parser-function-hooks' => 'Parser-Funktiounen',
'version-hook-name' => 'Numm vun der Klamer',
'version-hook-subscribedby' => 'Opruff vum',
'version-version' => '(Versioun $1)',
'version-license' => 'Lizenz',
'version-poweredby-credits' => "Dës Wiki fonctionnéiert mat '''[//www.mediawiki.org/ MediaWiki]''', Copyright © 2001-$1 $2.",
'version-poweredby-others' => 'anerer',
'version-license-info' => "MediaWiki ass fräi Software; Dir kënnt se weiderginn an/oder s'änneren ënnert de Bedingungen vun der GNU-General Public License esou wéi se vun der Free Softare Foundation publizéiert ass; entweder ënner der Versioun 2 vun der Lizenz, oder (no Ärem Choix) enger spéiderer Versioun.

MediaWiki gëtt verdeelt an der Hoffnung datt se nëtzlech ass, awer OUNI IERGENDENG GARANTIE; ouni eng implizit Garantie vu Commercialisatioun oder Eegnung fir e bestëmmte Gebrauch. Kuckt d'GPU Geral Public License fir méi Informatiounen.

Dir misst eng [{{SERVER}}{{SCRIPTPATH}}/COPYING Kopie vun der GNU General Public License] mat dësem Programm kritt hunn; wann net da schreift der Free Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA oder [//www.gnu.org/licenses/old-licenses/gpl-2.0.html liest se online].",
'version-software' => 'Installéiert Software',
'version-software-product' => 'Produkt',
'version-software-version' => 'Versioun',
'version-entrypoints' => 'URLe vun Agangspunkten',
'version-entrypoints-header-entrypoint' => 'Agangspunkt',
'version-entrypoints-header-url' => 'URL',

# Special:FilePath
'filepath' => 'Pad bei de Fichier',
'filepath-page' => 'Fichier:',
'filepath-submit' => 'Lass',
'filepath-summary' => 'Op dëser Spezialsäit kënnt Dir de komplette Pad vun der aktueller Versioun vun engem Fichier direkt offroen.
Den ugefrote Fichier gëtt direkt gewise respektiv mat enger verbonner Applikatioun gestart.',

# Special:FileDuplicateSearch
'fileduplicatesearch' => 'No duebele Fichiere sichen',
'fileduplicatesearch-summary' => "Sichen no Doublone vu Fichieren op der Basis vun hirem ''Hash-Wäert''.",
'fileduplicatesearch-legend' => 'No engem Doublon sichen',
'fileduplicatesearch-filename' => 'Numm vum Fichier:',
'fileduplicatesearch-submit' => 'Sichen',
'fileduplicatesearch-info' => '$1 × $2 Pixel<br />Gréisst vum Fichier: $3<br />MIME Typ: $4',
'fileduplicatesearch-result-1' => 'De Fichier "$1" huet keen identeschen Doublon.',
'fileduplicatesearch-result-n' => 'De Fichier "$1" huet {{PLURAL:$2|1 identeschen Doublon|$2 identesch Doublonen}}.',
'fileduplicatesearch-noresults' => 'Et gouf kee Fichier mam Numm "$1" fonnt.',

# Special:SpecialPages
'specialpages' => 'Spezialsäiten',
'specialpages-note' => '----
* Normal Spezialsäiten.
* <span class="mw-specialpagerestricted">Spezialsäite fir Benotzer mat méi Rechter.</span>
* <span class="mw-specialpagecached">Spezialsäiten aus dem Tëschespäicher (ka vereelst sinn).</span>',
'specialpages-group-maintenance' => 'Maintenance-Rapporten',
'specialpages-group-other' => 'Aner Spezialsäiten',
'specialpages-group-login' => 'Aloggen / Benotzerkont uleeën',
'specialpages-group-changes' => 'Rezent Ännerungen a Lëschten',
'specialpages-group-media' => 'Medie-Rapporten an eropgeluede Fichieren',
'specialpages-group-users' => 'Benotzer a Rechter',
'specialpages-group-highuse' => 'Dacks benotzte Säiten',
'specialpages-group-pages' => 'Lëschte vu Säiten',
'specialpages-group-pagetools' => 'Handwierksgeschir fir Säiten',
'specialpages-group-wiki' => 'Systemdaten an Handwierksgeschir',
'specialpages-group-redirects' => 'Spezialsäiten déi viruleeden',
'specialpages-group-spam' => 'Handwierksgeschir géint de Spam',

# Special:BlankPage
'blankpage' => 'Eidel Säit',
'intentionallyblankpage' => 'Dës Säit ass absichtlech eidel. Si gëtt fir Benchmarking an Ähnleches benotzt.',

# External image whitelist
'external_image_whitelist' => "#Dës Zeil genee esou loosse wéi se ass<pre>
#Schreift hei ënnendrënner Fragmenter vu regulären Ausdréck (just den Deel zwëschen den // aginn)
#Dës gi mat den URLe vu Biller aus externe Quelle verglach
#Wann d'Resultat positiv ass, gëtt d'Bild gewisen, soss gëtt d'Bild just als Link gewisen
#Zeilen, déi mat engem # ufänken, ginn als Bemierkung behandelt
#Et gëtt en Ënnerscheed tëschent groussen a klenge Buschtawe gemaach

#All regulär Ausdréck ënner dëser Zeil androen. Dës Zeil genee esou loosse wéi se ass</pre>",

# Special:Tags
'tags' => 'Valabel Ännerungsmarkéierungen',
'tag-filter' => '[[Special:Tags|Markéierungs]]-Filter:',
'tag-filter-submit' => 'Filter',
'tags-title' => 'Markéierungen',
'tags-intro' => 'Op dëser Säit stinn all déi Taggen, déi vun dëser Software fir Ännerungen unzeweise benotzt ginn, an hir Bedeitung.',
'tags-tag' => 'Numm vun der Markéierung',
'tags-display-header' => 'Opzielungen op den Ännerungslëschten',
'tags-description-header' => 'Ganz Beschreiwung vun der Bedeitung',
'tags-hitcount-header' => 'Markéiert Ännerungen',
'tags-edit' => 'änneren',
'tags-hitcount' => '$1 {{PLURAL:$1|Ännerung|Ännerungen}}',

# Special:ComparePages
'comparepages' => 'Säite vergläichen',
'compare-selector' => 'Versioune vu Säite vergläichen',
'compare-page1' => 'Säit 1',
'compare-page2' => 'Säit 2',
'compare-rev1' => 'Versioun 1',
'compare-rev2' => 'Versioun 2',
'compare-submit' => 'Vergläichen',
'compare-invalid-title' => 'Den Titel deen Dir uginn hutt ass net valabel.',
'compare-title-not-exists' => 'Den Titel deen Dir uginn hutt gëtt et net.',
'compare-revision-not-exists' => "D'Versioun déi Dir uginn hutt gëtt et net.",

# Database error messages
'dberr-header' => 'Dës Wiki huet e Problem',
'dberr-problems' => 'Pardon! Dëse Site huet technesch Schwieregkeeten.',
'dberr-again' => 'Versicht e puer Minutten ze waarden an dann nei ze lueden.',
'dberr-info' => '(Den Datebank-Server kann net erreecht ginn: $1)',
'dberr-usegoogle' => 'An der Tëschenzäit kënnt Dir probéiere mam Google ze sichen.',
'dberr-outofdate' => 'Denkt drunn, datt de Sichindex vun eisen Inhalte méiglecherweis net aktuell ass.',
'dberr-cachederror' => 'Dëst ass eng tëschegespäichert Kopie vun der gefroter Säit, a si kann eventuell net aktuell sinn.',

# HTML forms
'htmlform-invalid-input' => 'Et gëtt Problemer mat de Wäerter déi Dir aginn hutt.',
'htmlform-select-badoption' => 'De Wäert deen Dir aginn hutt ass keng valabel Optioun.',
'htmlform-int-invalid' => 'De Wäert deen Dir aginn hutt ass keng ganz Zuel.',
'htmlform-float-invalid' => 'De Wäert deen Dir uginn hutt ass keng Zuel.',
'htmlform-int-toolow' => 'De Wäert deen Dir uginn hutt ass ënnert dem Minimum vu(n) $1',
'htmlform-int-toohigh' => 'De Wäert deen Dir uginn hutt ass iwwert dem Maximum vu(n) $1',
'htmlform-required' => 'Dëse Wäert ass verlaangt',
'htmlform-submit' => 'Späicheren',
'htmlform-reset' => 'Ännerungen zrécksetzen',
'htmlform-selectorother-other' => 'Anerer',

# SQLite database support
'sqlite-has-fts' => "$1 ënnerstëtzt d'Volltextsich",
'sqlite-no-fts' => "$1 ënnerstëtzt d'Volltextsich net",

# New logging system
'logentry-delete-delete' => "$1 huet d'Säit $3 geläscht",
'logentry-delete-restore' => "$1 huet d'Säit $3 restauréiert",
'logentry-delete-event' => "$1 huet d'Visibilitéit vun {{PLURAL:$5|engem Evenement|$5 Evenementer}} am Logbuch op $3:$4 geännert",
'logentry-delete-event-legacy' => "$1 huet d'Visibilitéit vun Elementer am Log op $3 geännert",
'logentry-delete-revision-legacy' => "$1 huet d'Visibilitéit vu Versioune vun der Säit $3 geännert",
'logentry-suppress-delete' => "$1 huet d'Säit $3 ewechgeholl",
'logentry-suppress-event-legacy' => "$1 huet diskret d'Visibilitéit vun Elementer am Log op $3 geännert",
'logentry-suppress-revision-legacy' => "$1 huet diskret d'Visibilitéit vu Versioune vun der Säit $3 geännert",
'revdelete-content-hid' => 'Inhalt verstoppt',
'revdelete-summary-hid' => 'Resumé vun der Ännerung verstoppt',
'revdelete-uname-hid' => 'Benotzernumm verstoppt',
'revdelete-content-unhid' => 'Inhalt net verstoppt',
'revdelete-summary-unhid' => 'Resumé vun der Ännerung net verstoppt',
'revdelete-uname-unhid' => 'Benotzernumm net verstoppt',
'revdelete-restricted' => 'Limitatioune fir Administrateuren ageschalt',
'revdelete-unrestricted' => 'Limitatioune fir Administrateuren opgehuewen',
'logentry-move-move' => "$1 huet d'Säit $3 op $4 geréckelt",
'logentry-move-move-noredirect' => "$1 huet d'Säit $3 op $4 geréckelt ouni eng Viruleedung unzeleeën",
'logentry-move-move_redir' => "$1 huet d'Säit $3 op $4 geréckelt an dobäi gouf eng Viruleedung iwwerschriwwen",
'logentry-move-move_redir-noredirect' => "$1 huet d'Säit $3 op $4 geréckelt an dobäi gouf eng Viruleedung iwwerschriwwen an et et gouf keng nei Viruleedung ugeluecht",
'logentry-patrol-patrol' => "$1 huet d'Versioun $4 vun der Säit $3 als nogekuckt markéiert",
'logentry-patrol-patrol-auto' => "$1 huet d'Versioun $4 vun der Säit $3 automatesch als nogekuckt markéiert",
'logentry-newusers-newusers' => '$1  huet e Benotzerkont ugeluecht',
'logentry-newusers-create' => '$1  huet e Benotzerkont ugeluecht',
'logentry-newusers-create2' => '$1 huet ee Benotzerkont ugeluecht $3',
'logentry-newusers-autocreate' => 'De Benotzerkont $1 gouf automatesch ugeluecht',
'newuserlog-byemail' => "d'Passwuert gouf per E-Mail geschéckt",

# Feedback
'feedback-bugornote' => 'Wann Dir bereet sidd fir en technesche Problem am Detail ze beschreiwen da [$1 mellt w.e.g. e Feeler (Bug)].
Soss kënnt Dir den einfache Formulär hei drënner benotzen. Är Bemierkung gëtt op d\'Säit "[$3 $2]" derbäigesat, zesumme mat Ärem Benotzernumm an dem Numm vum Browser deen Dir benotzt.',
'feedback-subject' => 'Sujet:',
'feedback-message' => 'Message:',
'feedback-cancel' => 'Ofbriechen',
'feedback-submit' => 'Feedback schécken',
'feedback-adding' => "Feedback gëtt bäi d'Säit derbäigesat...",
'feedback-error1' => 'Feeler: Resultat vum API gouf net erkannt',
'feedback-error2' => "Feeler: D'Ännerung gouf net gespäichert",
'feedback-error3' => 'Feeler: Keng Äntwert vum API',
'feedback-thanks' => 'Merci! Äre Feedback gouf op der Säit "[$2 $1]" gespäichert.',
'feedback-close' => 'Fäerdeg',
'feedback-bugcheck' => 'Super! Kuckt just no ob et net ee vun de schonns [$1 bekannte Feeler] ass.',
'feedback-bugnew' => 'Ech hunn et nogekuckt. Den neie Bug mellen',

# Search suggestions
'searchsuggest-search' => 'Sichen',
'searchsuggest-containing' => 'mat ...',

# API errors
'api-error-badaccess-groups' => 'Et ass Iech net erlaabt fir Fichieren op dës Wiki eropzelueden.',
'api-error-badtoken' => 'Interne Feeler: falschen Token.',
'api-error-copyuploaddisabled' => "D'Eroplueden iwwer eng URL ass op dësem Server desaktivéiert.",
'api-error-duplicate' => 'Et gëtt schonn {{PLURAL:$1|[$2 en anere Fichier]|[$2 aner Fichiere]}} mat dem selwechten Inhalt op dem Site',
'api-error-duplicate-archive' => 'Et gouf schonn {{PLURAL:$1| [een anere Fichier]|[$2 aner Fichieren]}} op dem Site mat deemselwechten Inhalt, {{PLURAL:$1|e gouf was|se goufen}} awer geläscht.',
'api-error-duplicate-archive-popup-title' => '{{PLURAL:$1|Duebele Fichier, dee scho geläscht gouf|Duebel Fichieren, déi scho geläscht goufen}}',
'api-error-duplicate-popup-title' => '{{PLURAL:$1|Duebele Fichier|Duebel Fichieren}}',
'api-error-empty-file' => 'De Fichier deen Dir geschéckt hutt war eidel.',
'api-error-emptypage' => 'Et ass net erlaabt nei, eidel Säiten unzeleeën.',
'api-error-fetchfileerror' => 'Interne Feeler: beim Opruffe vum Fichier huet eppes net fonctionnéiert.',
'api-error-fileexists-forbidden' => 'E Fichier mam Numm "$1" gëtt et schonn an e kann net iwwerschriwwe ginn.',
'api-error-fileexists-shared-forbidden' => 'E Fichier mam Numm "$1" gëtt et schonn am gedeelte Repertoire an e kann net iwwerschriwwe ginn.',
'api-error-file-too-large' => 'De Fichier deen Dir geschéckt hutt war ze grouss.',
'api-error-filename-tooshort' => 'Den Numm vum Fichier ass ze kuerz.',
'api-error-filetype-banned' => 'Dësen Typ vu Fichier ass net zougelooss.',
'api-error-filetype-banned-type' => "$1 {{PLURAL:$4|ass e Fichiersformat deen net erlaabt ass|si Fichiersformater déi net erlaabt sinn}}. Erlaabt {{PLURAL:$3|ass de Fichiersformat|sinn d'Fichiersformater}}: $2.",
'api-error-filetype-missing' => "D'Erweiderung vum Fichier feelt.",
'api-error-hookaborted' => "D'Ännerung déi Dir versicht hutt ze maachen ass duerch en 'extension-hook' ofgebrach ginn.",
'api-error-http' => 'Interne Feeler: net méiglech sech op de Server ze connectéieren.',
'api-error-illegal-filename' => 'Den Numm vum Fichier ass net erlaabt.',
'api-error-internal-error' => 'Interne Feeler: Et ass eppes schif gaang beim Verschaffe vum eropgeluedene Fichier op der Wiki.',
'api-error-invalid-file-key' => 'Interne Feeler: de Fichier gouf op der temporärer Späicherplaz net fonnt.',
'api-error-missingparam' => 'Interne Feeler: E vun de Parameter feelt an der Ufro.',
'api-error-missingresult' => "Interne Feeler: et konnt net festgestallt ginn ob d'Kopie eppes ginn ass.",
'api-error-mustbeloggedin' => 'Dir musst ageloggt si fir Fichieren eropzelueden.',
'api-error-mustbeposted' => 'An dëser Software ass e Feeler; se benotzt net déi richteg HTTP-Method.',
'api-error-noimageinfo' => "D'Eroplueden huet fonctionnéiert, awer de Server huet eis keng Informatiounen iwwer de Fichier ginn.",
'api-error-nomodule' => "Interne Feeler: de Modul fir d'Eroplueden ass net agestallt.",
'api-error-ok-but-empty' => 'Interne Feeler: keng Äntwert vum Server.',
'api-error-overwrite' => "D'Iwwerschreiwe vun engem Fichier ass net erlaabt.",
'api-error-stashfailed' => 'Interne Feeler: de Server konnt den temporäre Fichier net späicheren.',
'api-error-timeout' => 'De Server huet net bannen där Zäit geäntwert déi virgesinn ass.',
'api-error-unclassified' => 'En onbekannte Feeler ass geschitt',
'api-error-unknown-code' => 'Onbekannte Feeler: "$1"',
'api-error-unknown-error' => 'Interne Feeler: beim Versuch fir Äre Fichier eropzelueden ass eppes schif gaang',
'api-error-unknown-warning' => 'Onbekannte Warnung: $1',
'api-error-unknownerror' => 'Onbekannte Feeler: "$1".',
'api-error-uploaddisabled' => "D'Eroplueden ass op dëser Wiki ausgeschalt.",
'api-error-verification-error' => 'Dëse Fichier kéint korrupt sinn, oder en huet eng falsch Erweiderung.',

# Durations
'duration-seconds' => '$1 {{PLURAL:$1|Sekonn|Sekonnen}}',
'duration-minutes' => '$1 {{PLURAL:$1|Minutt|Minutten}}',
'duration-hours' => '$1 {{PLURAL:$1|Stonn|Stonnen}}',
'duration-days' => '$1 {{PLURAL:$1|Dag|Deeg}}',
'duration-weeks' => '$1 {{PLURAL: $1|Woch|Wochen}}',
'duration-years' => '$1 {{PLURAL:$1|Joer|Joer}}',
'duration-decades' => '$1 {{PLURAL:$1|Joerzéngt|Joerzéngten}}',
'duration-centuries' => '$1 {{PLURAL:$1|Joerhonnert|Joerhonnerten}}',
'duration-millennia' => '$1 {{PLURAL:$1|Millenaire|Millenairen}}',

);
