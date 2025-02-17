<?php
/** Swiss German (Alemannisch)
 *
 * See MessagesQqq.php for message documentation incl. usage of parameters
 * To improve a translation please visit http://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Als-Chlämens
 * @author Als-Holder
 * @author Geitost
 * @author Hendergassler
 * @author J. 'mach' wust
 * @author Kaganer
 * @author MaxSem
 * @author Melancholie
 * @author MichaelFrey
 * @author Purodha
 * @author Remember the dot
 * @author Spacebirdy
 * @author Strommops
 * @author The Evil IP address
 * @author Urhixidur
 * @author לערי ריינהארט
 * @author 80686
 */

$fallback = 'de';

$specialPageAliases = array(
	'Allmessages'               => array( 'Alli_Nochrichte' ),
	'Allpages'                  => array( 'Alli_Syte' ),
	'Ancientpages'              => array( 'Veralteti_Syte' ),
	'Badtitle'                  => array( 'Nit-gültige_Sytename' ),
	'Blankpage'                 => array( 'Läärsyte' ),
	'Block'                     => array( 'Sperre' ),
	'Blockme'                   => array( 'Proxy-Sperre' ),
	'Booksources'               => array( 'ISBN-Suech' ),
	'BrokenRedirects'           => array( 'Kaputti_Wyterlaitige' ),
	'Categories'                => array( 'Kategorie' ),
	'ChangeEmail'               => array( 'E-Mai-Adräss_ändere' ),
	'ChangePassword'            => array( 'Passwort_ändre' ),
	'ComparePages'              => array( 'Syte_verglyyche' ),
	'Confirmemail'              => array( 'E-Mail_bstetige' ),
	'Contributions'             => array( 'Byytreeg' ),
	'CreateAccount'             => array( 'Benutzerchonto_aaleege' ),
	'Deadendpages'              => array( 'Sackgassesyte' ),
	'DeletedContributions'      => array( 'Gleschti_Byytreeg' ),
	'Disambiguations'           => array( 'Begriffschlärigsverwyys' ),
	'DoubleRedirects'           => array( 'Doppleti_Wyterlaitige' ),
	'EditWatchlist'             => array( 'Bearbeitigslischt_bearbeite' ),
	'Emailuser'                 => array( 'E-Mail' ),
	'Export'                    => array( 'Exportiere' ),
	'Fewestrevisions'           => array( 'Syte_wo_am_wenigschte_bearbeitet_sin' ),
	'FileDuplicateSearch'       => array( 'Datei-Duplikat-Suech' ),
	'Filepath'                  => array( 'Dateipfad' ),
	'Import'                    => array( 'Importiere' ),
	'Invalidateemail'           => array( 'E-Mail_nit_bstetige' ),
	'BlockList'                 => array( 'Gsperrti_IP' ),
	'LinkSearch'                => array( 'Suech_no_Links' ),
	'Listadmins'                => array( 'Ammanne' ),
	'Listbots'                  => array( 'Bötli' ),
	'Listfiles'                 => array( 'Dateie' ),
	'Listgrouprights'           => array( 'Grupperächt' ),
	'Listredirects'             => array( 'Wyterleitige' ),
	'Listusers'                 => array( 'Benutzerlischte' ),
	'Lockdb'                    => array( 'Datebank_sperre' ),
	'Log'                       => array( 'Logbuech' ),
	'Lonelypages'               => array( 'Verwaisti_Syte' ),
	'Longpages'                 => array( 'Langi_Syte' ),
	'MergeHistory'              => array( 'Versionsgschichte_zämefiere' ),
	'MIMEsearch'                => array( 'MIME-Suech' ),
	'Mostcategories'            => array( 'Syte_wo_am_meischte_kategorisiert_sin' ),
	'Mostimages'                => array( 'Dateie_wo_am_meischte_brucht_wäre' ),
	'Mostlinked'                => array( 'Syte_wo_am_meischte_druff_verlinkt_isch' ),
	'Mostlinkedcategories'      => array( 'Kategorie_wo_am_meischte_brucht_wäre' ),
	'Mostlinkedtemplates'       => array( 'Vorlage_wo_am_meischte_brucht_wäre' ),
	'Mostrevisions'             => array( 'Syte_wo_am_meischte_bearbeitet_sin' ),
	'Movepage'                  => array( 'Verschiebe' ),
	'Mycontributions'           => array( 'Myyni_Byytreeg' ),
	'Mypage'                    => array( 'Myyni_Benutzersyte' ),
	'Mytalk'                    => array( 'Myyni_Diskussionssyte' ),
	'Myuploads'                 => array( 'Dateie_wonni_uffeglade_han' ),
	'Newimages'                 => array( 'Neji_Dateie' ),
	'Newpages'                  => array( 'Neji_Syte' ),
	'PasswordReset'             => array( 'Passwort_zruggsetze' ),
	'PermanentLink'             => array( 'Permalink' ),
	'Popularpages'              => array( 'Beliebteschti_Syte' ),
	'Preferences'               => array( 'Ystellige' ),
	'Prefixindex'               => array( 'Vorsilbeverzeichnis' ),
	'Protectedpages'            => array( 'Gschitzti_Syte' ),
	'Protectedtitles'           => array( 'Gsperrti_Titel' ),
	'Randompage'                => array( 'Zuefelligi_Syte' ),
	'Randomredirect'            => array( 'Zuefelligi_Wyterleitig' ),
	'Recentchanges'             => array( 'Letschti_Änderige' ),
	'Recentchangeslinked'       => array( 'Änderige_an_verlinkte_Syte' ),
	'Revisiondelete'            => array( 'Versionsleschig' ),
	'Search'                    => array( 'Suech' ),
	'Shortpages'                => array( 'Churzi_Syte' ),
	'Specialpages'              => array( 'Spezialsyte' ),
	'Statistics'                => array( 'Statischtik' ),
	'Tags'                      => array( 'Markierige' ),
	'Unblock'                   => array( 'Freigee' ),
	'Uncategorizedcategories'   => array( 'Kategorie_wo_nit_kategorisiert_sin' ),
	'Uncategorizedimages'       => array( 'Dateie_wo_nit_kategorisiert_sin' ),
	'Uncategorizedpages'        => array( 'Syte_wo_nit_kategorisiert_sin' ),
	'Uncategorizedtemplates'    => array( 'Vorlage_wo_nit_kategorisiert_sin' ),
	'Undelete'                  => array( 'Widerhärstelle' ),
	'Unlockdb'                  => array( 'Sperrig_vu_dr_Datebank_ufhebe' ),
	'Unusedcategories'          => array( 'Kategorie_wo_nit_brucht_wäre' ),
	'Unusedimages'              => array( 'Dateie_wo_nit_brucht_wäre' ),
	'Unusedtemplates'           => array( 'Vorlage_wo_nit_brucht_wäre' ),
	'Unwatchedpages'            => array( 'Syte_wu_nit_beobachtet_wäre' ),
	'Upload'                    => array( 'Uffelade' ),
	'Userlogin'                 => array( 'Amälde' ),
	'Userlogout'                => array( 'Abmälde' ),
	'Userrights'                => array( 'Benutzerrächt' ),
	'Wantedcategories'          => array( 'Kategorie_wo_gwinscht_sin' ),
	'Wantedfiles'               => array( 'Dateie_wo_fähle' ),
	'Wantedpages'               => array( 'Syte_wo_gwinscht_sin' ),
	'Wantedtemplates'           => array( 'Vorlage_wo_fähle' ),
	'Watchlist'                 => array( 'Beobachtigslischte' ),
	'Whatlinkshere'             => array( 'Was_verwyyst_do_druff?' ),
	'Withoutinterwiki'          => array( 'Ohni_Interwiki' ),
);

$magicWords = array(
	'displaytitle'              => array( '1', 'SYTETITEL', 'SEITENTITEL', 'DISPLAYTITLE' ),
);

$linkTrail = '/^([äöüßa-z]+)(.*)$/sDu';

$messages = array(
# User preference toggles
'tog-underline' => 'Links unterstryche',
'tog-justify' => 'Tekscht als Blocksatz',
'tog-hideminor' => 'Keini «chlyni Änderige» aazeige',
'tog-hidepatrolled' => 'Vum Fäldhieter aagluegti Änderige in dr „Letschte Änderige“ usblände',
'tog-newpageshidepatrolled' => 'Aagluegti Syten uf dr Lischt „Neiji Syte“ verstecke',
'tog-extendwatchlist' => 'Beobachtungslischte erwytere go alli Änderige aazeige, nit numme di letschte',
'tog-usenewrc' => 'Sytebezogeni Gruppierig bi dr «letschte Änderige» un uf dr Beobachtigslischte  (brucht JavaScript)',
'tog-numberheadings' => 'Überschrifte outomatisch numeriere',
'tog-showtoolbar' => 'Editier-Wärchzüüg aazeige',
'tog-editondblclick' => 'Syte ändere mit Doppelklick i d Syte (JavaScript)',
'tog-editsection' => 'Links aazeige für ds Bearbeite vo einzelnen Absätz',
'tog-editsectiononrightclick' => 'Einzelni Absätz ändere mit Rächtsclick (Javascript)',
'tog-showtoc' => 'Inhaltsverzeichnis aazeige bi Artikle mit meh als drei Überschrifte',
'tog-rememberpassword' => 'Mit däm Browser duurhaft aamälde (Maximal fir $1 {{PLURAL:$1|Tag|Täg}})',
'tog-watchcreations' => 'Sälber gmachti Sytene un uffegladeni Dateie automatisch  beobachte',
'tog-watchdefault' => 'Sälber gändereti Syte un Dateie automatisch beobachte',
'tog-watchmoves' => 'Sälber verschobeni Sytene un Dateie automatisch beobachte',
'tog-watchdeletion' => 'Sälber gleschti Sytene un Dateie automatisch beobachte',
'tog-minordefault' => 'Alli dyni Änderigen als «chlyni Änderige» markiere',
'tog-previewontop' => 'Vorschou vor em Editierfänschter aazeige',
'tog-previewonfirst' => 'Vorschou aazeige bim erschten Editiere',
'tog-nocache' => 'Syte-Cache vum Browser deaktiviere',
'tog-enotifwatchlistpages' => 'Schick mer e Mail, wänn e Syte oder e Datei gänderet wird, wun i beobachte due',
'tog-enotifusertalkpages' => 'Benachrichtigungsmails bi Änderigen a dyne Benutzersyte',
'tog-enotifminoredits' => 'Au bi chlaine Änderige an Syte oder Dateie ne Mail schicke',
'tog-enotifrevealaddr' => 'Dyni E-Mail-Adrässe wird i Benachrichtigungsmails zeigt',
'tog-shownumberswatching' => 'Aazahl Benutzer aazeige, wo ne Syten am Aaluege sy (i den Artikelsyte, i de «letschten Änderigen» und i der Beobachtigslischte)',
'tog-oldsig' => 'Vorschau vu dr Unterschrift:',
'tog-fancysig' => 'Signatur as Wikitext behandle (ohni automatischi Vergleichig)',
'tog-externaleditor' => 'Externe Editor als Standard bruche (nume fir Experte, doderzue brucht s speziälli Yystellige uf em Computer. [//www.mediawiki.org/wiki/Manual:External_editors Wyteri Informatione doderzue.])',
'tog-externaldiff' => 'Extern Programm fir Versionsunterschid als Standard bruche (nume fir Experte, doderzue brucht s speziälli Yystellige uf em Computer. [//www.mediawiki.org/wiki/Manual:External_editors Wyteri Informatione doderzue.])',
'tog-showjumplinks' => '«Wächsle-zu»-Links ermügleche',
'tog-uselivepreview' => 'Live-Vorschau bruche (JavaScript) (experimentell)',
'tog-forceeditsummary' => 'Sag mer s, wänn i s Zämmefassigsfeld läär loss',
'tog-watchlisthideown' => 'Eigeni Änderige uf d Beobachtigslischt usblände',
'tog-watchlisthidebots' => 'Bot-Änderige in d Beobachtigslischt usblende',
'tog-watchlisthideminor' => 'Chlyni Änderige nit in de Beobachtigslischte aazeige',
'tog-watchlisthideliu' => 'Bearbeitige vu aagmäldete Benutzer usblände',
'tog-watchlisthideanons' => 'Bearbeitige vu anonyme Benutzer (IP-Adresse) usblände',
'tog-watchlisthidepatrolled' => 'vum Fäldhieter aagluegti Änderige in dr Beobachtigslischt usblände',
'tog-ccmeonemails' => 'Schick mr Kopie vo de E-Mails, won i andere schick.',
'tog-diffonly' => 'Numme Versionsunterschiid aazeige, ohni d Syte',
'tog-showhiddencats' => 'Zeig di versteckte Kategorie',
'tog-noconvertlink' => 'Konvertierig vum Titel deaktiviere',
'tog-norollbackdiff' => 'Unterschid noch em Zrucksetze unterdrucke',

'underline-always' => 'immer',
'underline-never' => 'nie',
'underline-default' => 'Browser-Vorystellig',

# Font style option in Special:Preferences
'editfont-style' => 'Schriftfamilie fir dr Text im Bearbeitigsfänschter:',
'editfont-default' => 'Browserstandard',
'editfont-monospace' => 'Schrift mit ere feschte Zeichebreiti',
'editfont-sansserif' => 'Serifelosi Groteskschrift',
'editfont-serif' => 'Schrift mit Serife',

# Dates
'sunday' => 'Sunntig',
'monday' => 'Mäntig',
'tuesday' => 'Zischtig',
'wednesday' => 'Mittwuche',
'thursday' => 'Dunschtig',
'friday' => 'Fritig',
'saturday' => 'Samschtig',
'sun' => 'Sun',
'mon' => 'Män',
'tue' => 'Zys',
'wed' => 'Mit',
'thu' => 'Dun',
'fri' => 'Fri',
'sat' => 'Sam',
'january' => 'Jänner',
'february' => 'Februar',
'march' => 'März',
'april' => 'April',
'may_long' => 'Mai',
'june' => 'Juni',
'july' => 'Juli',
'august' => 'Ougschte',
'september' => 'Septämber',
'october' => 'Oktober',
'november' => 'Novämber',
'december' => 'Dezämber',
'january-gen' => 'Jänner',
'february-gen' => 'Februar',
'march-gen' => 'März',
'april-gen' => 'April',
'may-gen' => 'Mai',
'june-gen' => 'Juni',
'july-gen' => 'Juli',
'august-gen' => 'Augschte',
'september-gen' => 'Septämber',
'october-gen' => 'Oktober',
'november-gen' => 'Novämber',
'december-gen' => 'Dezämber',
'jan' => 'Jan.',
'feb' => 'Feb.',
'mar' => 'Mär.',
'apr' => 'Apr.',
'may' => 'Mei',
'jun' => 'Jun.',
'jul' => 'Jul.',
'aug' => 'Aug.',
'sep' => 'Sep.',
'oct' => 'Okt.',
'nov' => 'Nov.',
'dec' => 'Dez.',

# Categories related messages
'pagecategories' => '{{PLURAL:$1|Kategori|Kategorie}}',
'category_header' => 'Artikel in de Kategori "$1"',
'subcategories' => 'Unterkategorie',
'category-media-header' => 'Medie in dr Kategori „$1“',
'category-empty' => "''Die Kategori het im Momänt kaini Syte oder Medie.''",
'hidden-categories' => '{{PLURAL:$1|Versteckti Kategori|Versteckti Kategorie}}',
'hidden-category-category' => 'Versteckti Kategorie',
'category-subcat-count' => '{{PLURAL:$2|Die Kategori het die Unterkategorie:|{{PLURAL:$1|Die Unterkategori isch eini vu insgsamt $2 Unterkategorie in däre Kategori:|S wäre $1 vu insgsamt $2 Unterkategorie in däre Kategori aazeigt:}}}}',
'category-subcat-count-limited' => 'Die Kategorie het die {{PLURAL:$1|Unterkategori|$1 Unterkategorie}}:',
'category-article-count' => '{{PLURAL:$2|In däre Kategorie het s die Syte:|{{PLURAL:$1|Die Syte isch eini vu insgsamt $2 Syte in däre Kategori:|S wäre $1 vu insgsamt $2 Syte in däre Kategori aazeigt:}}}}',
'category-article-count-limited' => 'In däre Kategori het s die {{PLURAL:$1|Syte|$1 Syte}}:',
'category-file-count' => '{{PLURAL:$2|In däre Kategori het s die Datei:|{{PLURAL:$1|Die Datei isch eini vu insgsamt $2 Dateie in däre Kategori:|S wäre $1 vu insgsamt $2 Dateie in däre Kategori aazeigt:}}}}',
'category-file-count-limited' => 'In däre Kategori het s die {{PLURAL:$1|Datei|$1 Dateie}}:',
'listingcontinuesabbrev' => '(Forts.)',
'index-category' => 'Verzeichneti Syte',
'noindex-category' => 'Syte wu nit verzeichnet sin',
'broken-file-category' => 'Syte mit kaputtige Dateilink',

'about' => 'Iber',
'article' => 'Inhaltssyte',
'newwindow' => '(imene nöie Fänschter)',
'cancel' => 'Abbräche',
'moredotdotdot' => 'Meh …',
'mypage' => 'Myyni Syte',
'mytalk' => 'Myyni Diskussionsyte',
'anontalk' => 'Diskussionssyste vo sellere IP',
'navigation' => 'Navigation',
'and' => '&#32;un',

# Cologne Blue skin
'qbfind' => 'Finde',
'qbbrowse' => 'Blättre',
'qbedit' => 'Ändere',
'qbpageoptions' => 'Sytenoptione',
'qbmyoptions' => 'Ystellige',
'qbspecialpages' => 'Spezialsytene',
'faq' => 'Froge, wo vilmol gstellt wäre',
'faqpage' => 'Project:FAQ',

# Vector skin
'vector-action-addsection' => 'Abschnitt zuefiege',
'vector-action-delete' => 'Lesche',
'vector-action-move' => 'Verschiebe',
'vector-action-protect' => 'Schitze',
'vector-action-undelete' => 'Widerhärstelle',
'vector-action-unprotect' => 'Syteschutz ändere',
'vector-simplesearch-preference' => 'Vereifachti Suechvorschleg aktiviere (nume Vector)',
'vector-view-create' => 'Aalege',
'vector-view-edit' => 'Bearbeite',
'vector-view-history' => 'Versionsgschicht',
'vector-view-view' => 'Läse',
'vector-view-viewsource' => 'Quälltext aaluege',
'actions' => 'Aktione',
'namespaces' => 'Namensryym',
'variants' => 'Variante',

'errorpagetitle' => 'Fähler',
'returnto' => 'Zruck zur Syte $1.',
'tagline' => 'Us {{SITENAME}}',
'help' => 'Hilf',
'search' => 'Suech',
'searchbutton' => 'Suech',
'go' => 'Site',
'searcharticle' => 'Sueche',
'history' => 'Versione',
'history_short' => 'Versione/Autore',
'updatedmarker' => '(gändret syt mym letschte Bsuech)',
'printableversion' => 'Druck-Aasicht',
'permalink' => 'Bschtändigi URL',
'print' => 'Drucke',
'view' => 'Aaluege',
'edit' => 'Ändere',
'create' => 'Erstelle',
'editthispage' => 'Syte bearbeite',
'create-this-page' => 'Die Syte afange',
'delete' => 'Lesche',
'deletethispage' => 'Syte lösche',
'undelete_short' => '{{PLURAL:$1|1 Version|$1 Versione}} widerherstelle',
'viewdeleted_short' => '{{PLURAL:$1|ei gleschti Änderig|$1 gleschti Ändrige}} aaluege',
'protect' => 'Schütze',
'protect_change' => 'ändere',
'protectthispage' => 'Artikel schütze',
'unprotect' => 'Syteschutz ändere',
'unprotectthispage' => 'Syteschutz ändere',
'newpage' => 'Nöji Syte',
'talkpage' => 'Iber die Syte dischputiere',
'talkpagelinktext' => 'Diskussion',
'specialpage' => 'Spezialsyte',
'personaltools' => 'Persönlichi Wärkzüg',
'postcomment' => 'Neje Abschnitt',
'articlepage' => 'Syte',
'talk' => 'Diskussion',
'views' => 'Wievylmol agluegt',
'toolbox' => 'Wärkzügkäschtli',
'userpage' => 'Benutzersyte',
'projectpage' => 'Projektsyte azeige',
'imagepage' => 'Dateisyte',
'mediawikipage' => 'Inhaltssyte aazeige',
'templatepage' => 'Vorlagesyte aazeige',
'viewhelppage' => 'D Hilf aazeige',
'categorypage' => 'Kategoriesyte aazeige',
'viewtalkpage' => 'Diskussion',
'otherlanguages' => 'Anderi Sproche',
'redirectedfrom' => '(Witergleitet vun $1)',
'redirectpagesub' => 'Umgleiteti Syte',
'lastmodifiedat' => 'Letschti Änderig vo dere Syte: $2, $1<br />',
'viewcount' => 'Die Syte isch {{PLURAL:$1|eimol|$1 Mol}} bsuecht wore.',
'protectedpage' => 'Gschützti Syte',
'jumpto' => 'Gump zue:',
'jumptonavigation' => 'Navigation',
'jumptosearch' => 'Suech',
'view-pool-error' => 'Excusez, d Server sin zur Zyt iberlaschtet.
S versueche grad zvyl Benutzer die Syte aazluege.
Bitte wart e paar Minute, voreb Du s nomol versuechsch.

$1',
'pool-timeout' => '
Di maximal Wartezyt fir e Lock isch umme',
'pool-queuefull' => 'D Warteschlang isch voll',
'pool-errorunknown' => 'Nit bekannte Fähler',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage) and the disambiguation template definition (see disambiguations).
'aboutsite' => 'Über {{GRAMMAR:akkusativ|{{SITENAME}}}}',
'aboutpage' => 'Project:Über {{UCFIRST:{{GRAMMAR:akkusativ|{{SITENAME}}}}}}',
'copyright' => 'Der Inhalt vo dere Syte stoht unter der $1.',
'copyrightpage' => '{{ns:project}}:Copyright',
'currentevents' => 'Aktuelli Mäldige',
'currentevents-url' => 'Project:Aktuelli Termin',
'disclaimers' => 'Impressum',
'disclaimerpage' => 'Project:Impressum',
'edithelp' => 'Rotschläg fir s Bearbeite',
'edithelppage' => 'Help:Ändere',
'helppage' => 'Help:Hilf',
'mainpage' => 'Houptsyte',
'mainpage-description' => 'Houptsyte',
'policy-url' => 'Project:Leitlinie',
'portal' => 'Gmeinschaftsportal',
'portal-url' => 'Project:Gmeinschafts-Portal',
'privacy' => 'Dateschutz',
'privacypage' => 'Project:Dateschutz',

'badaccess' => 'Dyyni Rächt länge nit.',
'badaccess-group0' => 'Du hesch d Berächtigung nit, wu s brucht fir die Aktion.',
'badaccess-groups' => 'Die Aktion isch bschränkt uf Benutzer, wu {{PLURAL:$2|zue dr Gruppe|zue einer vu dr Gruppe}} „$1“ ghere.',

'versionrequired' => 'Version $1 vun MediaWiki wird brucht',
'versionrequiredtext' => 'Version $1 vu MediaWiki wird brucht zum die Syte nutze. Lueg [[Special:Version]]',

'ok' => 'OK',
'retrievedfrom' => 'Vun "$1"',
'youhavenewmessages' => 'Du hesch $1 ($2).',
'newmessageslink' => 'nöji Nachrichte',
'newmessagesdifflink' => 'Unterschid',
'youhavenewmessagesfromusers' => 'Du hesch $1 vu {{PLURAL:$3|eme andere Benutzer|$3 Benutzer}} ($2).',
'youhavenewmessagesmanyusers' => 'Du hesch $1 vu vil Benutzer ($2).',
'newmessageslinkplural' => '{{PLURAL:$1|e neji Nochricht|neji Nochrichte}}',
'newmessagesdifflinkplural' => 'letschti {{PLURAL:$1|Änderig|Änderige}}',
'youhavenewmessagesmulti' => 'Si hen neui Nochrichte: $1',
'editsection' => 'ändere',
'editold' => 'Ändre',
'viewsourceold' => 'Quelltext azeige',
'editlink' => 'bearbeite',
'viewsourcelink' => 'Quälltäxt aaluege',
'editsectionhint' => 'Abschnitt ändere: $1',
'toc' => 'Inhaltsverzeichnis',
'showtoc' => 'ufklappe',
'hidetoc' => 'zueklappe',
'collapsible-collapse' => 'zueklappe',
'collapsible-expand' => 'ufklappe',
'thisisdeleted' => 'Aaluege oder widerherstelle vu $1?',
'viewdeleted' => '$1 aaluege?',
'restorelink' => '{{PLURAL:$1|gleschti Änderig|$1 gleschti Ändrige}}',
'feedlinks' => 'Feed:',
'feed-invalid' => 'Nit giltige Abonnement-Typ.',
'feed-unavailable' => 'S stehn keini Feeds z Verfiegig.',
'site-rss-feed' => 'RSS-Feed fir $1',
'site-atom-feed' => 'Atom-Feed für $1',
'page-rss-feed' => 'RSS-Feed für „$1“',
'page-atom-feed' => 'Atom-Feed fir „$1“',
'red-link-title' => '$1 (Syte git s nit)',
'sort-descending' => 'Abezues sortiere',
'sort-ascending' => 'Ufezues sortiere',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main' => 'Syte',
'nstab-user' => 'Benutzersyte',
'nstab-media' => 'Mediesyte',
'nstab-special' => 'Spezialsyte',
'nstab-project' => 'Projektsyte',
'nstab-image' => 'Bildli',
'nstab-mediawiki' => 'Nochricht',
'nstab-template' => 'Vorlag',
'nstab-help' => 'Hilf',
'nstab-category' => 'Kategorie',

# Main script and global functions
'nosuchaction' => 'Die Aktion git s nit',
'nosuchactiontext' => 'Di Aktion, wu in dr URL aagee isch, isch nit giltig.
Villicht hesch d URL falsch yygee oder bisch eme falsche Link noogange.
Des chennt au ne Fähler aazeige in {{SITENAME}}.',
'nosuchspecialpage' => 'Die Spezialsyte git s nit',
'nospecialpagetext' => '<strong>Die Spezialsyte git s nit.</strong>

Alli verfiegbare Spezialsyte sin in dr [[Special:SpecialPages|Lischt vu Spezialsyte]] z finde.',

# General errors
'error' => 'Fähler',
'databaseerror' => 'Fähler in dr Datebank',
'dberrortext' => 'S isch e Datebankfähler ufträtte.
Dr Grund cha ne e Programmierfähler syy.
Di letscht Datebankabfrog isch
<blockquote><code>$1</code></blockquote>
us dr Funktion „<code>$2</code>“ gsi.
D Datebank het dr Fähler „<samp>$3: $4</samp>“ gmäldet.',
'dberrortextcl' => 'S het e Syntaxfähler gee in dr Abfrog vu dr Datebank.
Di letscht Datebankabfrog isch
„$1“
us dr Funktion „$2“ gsi.
D Datebank het dr Fähler „$3: $4“ gmäldet.',
'laggedslavemode' => 'Warnig: di letschte Änderige wäre u. U. nonig aazeigt!',
'readonly' => 'Datebank isch gsperrt',
'enterlockreason' => 'Bitte gib e Grund y, worum d Datebank soll gsperrt wäre un e Yschätzig wie lang si soll gsperrt blybe',
'readonlytext' => 'D {{SITENAME}}-Datebank isch e Zyd lang gsperrt fir Nejytreg un Änderige. Bitte versuech s speter no mol.

Grund vu dr Sperrig: $1',
'missing-article' => 'Dr Täkscht fir „$1“ $2 isch nit in dr Datebank gfunde wore.

Die Syte isch villicht glescht oder verschobe wore.

Wänn s des nit isch, hesch villicht e Fähler in dr Software gfunde. Bitte mäld des eme [[Special:ListUsers/sysop|Ammann]] un gib d URL derzue aa.',
'missingarticle-rev' => '(Versionsnummere: $1)',
'missingarticle-diff' => '(Unterschid zwische Versione: $1, $2)',
'readonly_lag' => 'D Datebank isch automatisch gperrt wore, wil di verteilte Datebankserver (Sklave) mien mit em Hauptdatebankserver (Meischter) abgliche wäre.',
'internalerror' => 'Interner Fähler',
'internalerror_info' => 'Interne Fähler: $1',
'fileappenderrorread' => '„$1“ het nit chenne gläse wäre bim Aahänke.',
'fileappenderror' => 'Het „$1“ nit an „$2“ chenne anhänke.',
'filecopyerror' => 'D Datei $1 het nit no $2 chenne kopiert wäre.',
'filerenameerror' => 'D Datei "$1" het nit in "$2" umgnennt werre kinne.',
'filedeleteerror' => 'Datei "$1" het nit glöscht werre kinne.',
'directorycreateerror' => 'S Verzeichnis „$1“ het nit chenne aaglait wäre.',
'filenotfound' => 'Datei "$1" isch nit gfunde worre.',
'fileexistserror' => 'In d Datei „$1“ het nit chenne gschribe wäre, wel s die Datei scho git.',
'unexpected' => 'Wärt, wu nit erwartet woren isch: „$1“=„$2“.',
'formerror' => 'Fähler: Ds Formular het nid chönne verarbeitet wärde',
'badarticleerror' => 'D Aktion konn uf denne Artikel nit ongwendet werre.',
'cannotdelete' => 'D Syte oder d Datei „$1“ cha nit glescht wäre. Si isch villicht scho vu eber anderem glescht wore.',
'cannotdelete-title' => 'Syte „$1“ cha nit glescht wäre',
'delete-hook-aborted' => 'D Leschig isch ohni Erchlärung dur e Schnittstell abbroche wore.',
'badtitle' => 'Ugültiger Titel',
'badtitletext' => 'Dr Titel vu dr agforderte Syte isch nit giltig gsi, leer, oder e nit giltig Sprochgleich vun eme andre Wiki.',
'perfcached' => 'Die Informatione chemme us em Zwischespycher un sin derwyl villicht nit aktuäll. Maximal {{PLURAL:$1|ei Ergebnis isch|$1 Ergebnis sin}} im Cache verfiegbar.',
'perfcachedts' => 'Die Date stamme us em Zwischespycher un sin am $1 s letscht Mol aktualisiert wore. Maximal {{PLURAL:$4|ei Ergebnis isch|$4 Ergebnis sin}} im Zwischespycher verfiegbar.',
'querypage-no-updates' => "'''D Aktualisierigsfunktion fir die Syte isch im Momänt deaktiviert. D Date wäre vorerscht nit ernejert.'''",
'wrong_wfQuery_params' => 'Falschi Parameter fir wfQuery()<br />
Funktion: $1<br />
Abfrog: $2',
'viewsource' => 'Quelltext aaluege',
'viewsource-title' => 'Quälltext vu $1 aaluege',
'actionthrottled' => 'Aktionsaazahl limitiert',
'actionthrottledtext' => 'As Schutz vor Spam cha die Aktion im e churze Zytabstand nume begränzt durgfiert wäre. Du bisch ebe an die Gränz cho. Bitte versuech s in e paar Minute non emol.',
'protectedpagetext' => 'Die Syte isch fir s Bearbeite gsperrt.',
'viewsourcetext' => 'Quelltext vo dere Syte:',
'viewyourtext' => "Du chasch dr Quälltext vu '''Dyre Bearbeitig''' vu däre Syte aaluege un kopiere:",
'protectedinterface' => 'In däre Syte het s Text fir s Sproch-Interface vu dr Software un si isch gsperrt, zum Missbruch z verhindre.',
'editinginterface' => "'''Obacht:''' Du bisch e Syten am Verändere, wu zum User.Interface ghert. Wänn Du die Syte veränderesch, no änderet sich s User-Interface au fir di andere Benutzer vu däm Wiki. Fir Ibersetzige lueg bitte, eb Du doodefir s [//translatewiki.net/wiki/Main_Page?setlang=gsw Translatewiki] witt bruuche, s MediaWiki-Lokalisierigsprojäkt.",
'sqlhidden' => '(SQL-Abfrog verschteckt)',
'cascadeprotected' => 'Die Syte isch fir s Bearbeite gsperrt. Si isch yybunde in {{PLURAL:$1|die Syte, wu do chunnt|die Syte, wu do chemme}} , wu mit ere Kaskadesperroption gschitzt {{PLURAL:$1|isch|sin}}:
$2',
'namespaceprotected' => "Du hesch kei Berächtigung, die Syte im '''$1'''-Namensruum z bearbeite.",
'customcssprotected' => 'Du bisch nid berächtigt, die Syte mit CSS z bearbeite, wel si zue dr persenlige Yystellige vun eme andere Benutzer ghert.',
'customjsprotected' => 'Du bisch nid berächtigt, die Javaskript-Syte z bearbeite, wel si zue dr persenlige Yystellige vun eme andere Benutzer ghert.',
'ns-specialprotected' => 'Spezialsyte chenne nid bearbeitet wäre.',
'titleprotected' => "E Syte mit däm Name cha nid aaglait wäre.
Die Sperri isch dur [[User:$1|$1]] yygrichtet wore mit dr Begrindig ''„$2“''.",
'filereadonlyerror' => 'D Datei „$1“ cha nit gänderet wäre, wel uf s Dateirepositorium „$2“ nume Läsezuegriff megli isch.

Dr Administrator, wu dr Schrybzuegriff gsperrt het, het dää Grund aagee: „$3“.',
'invalidtitle-knownnamespace' => 'Nit-gültige Titel mit Namensruum „$2“ un Text „$3“',
'invalidtitle-unknownnamespace' => 'Ungültige Titel mit unbekannte Namensruumnummer $1 un Text „$2“',
'exception-nologin' => 'Nit aagmäldet',
'exception-nologin-text' => 'Fir die Syte oder Aktion muesch aagmäldet syy.',

# Virus scanner
'virus-badscanner' => "Fählerhafti Konfiguration: Virescanner, wu nid bekannt isch: ''$1''",
'virus-scanfailed' => 'Scan het nid funktioniert (code $1)',
'virus-unknownscanner' => 'Virescanner, wu nid bekannt isch:',

# Login and logout pages
'logouttext' => "'''Du bisch jetz abgmäldet.'''

Du chasch {{SITENAME}} wyter anonym bruche, oder Du chasch di <span class='plainlinks'>[$1 wider aamälde]</span> mit em glyche oder eme andere Benutzername.

Ochat: s cha syy, ass bstimmti Syte eso aazeigt wäre, wie wänn Du allno aagmäldet wärsch, bis Du dr Zwischespycher vu Dyym Browser glescht hesch.",
'welcomecreation' => '==Willcho, $1!==
Dyy Benutzerkonto isch aaglait wore.
Vergiss nid, dyni [[Special:Preferences|{{SITENAME}}-Yystellige]] aazpasse.',
'yourname' => 'Dyy Benutzername',
'yourpassword' => 'Passwort:',
'yourpasswordagain' => 'Passwort no mol yygee:',
'remembermypassword' => 'Uf däm Computer duurhaft aamälde (Maximal fir $1 {{PLURAL:$1|Tag|Täg}})',
'securelogin-stick-https' => 'Noch em Aamälde mit HTTPS verbunde blybe',
'yourdomainname' => 'Dyyni Domäne',
'password-change-forbidden' => 'Du chasch uf däm Wiki kei Passwerter ändere.',
'externaldberror' => 'Entwäder s lit e Fähler bi dr externe Authentifizierung vor, oder Du derfsch Dyy extern Benutzerkonto nid aktualisiere.',
'login' => 'Aamälde',
'nav-login-createaccount' => 'Aamälde / Konto aalege',
'loginprompt' => '<small>Für di bir {{SITENAME}} aazmälde, muesch Cookies erloube!</small>',
'userlogin' => 'Aamälde/Konto aalege',
'userloginnocreate' => 'Aamälde',
'logout' => 'Abmälde',
'userlogout' => 'Abmälde',
'notloggedin' => 'Nit aagmäldet',
'nologin' => "No kei Benutzerkonto? '''$1'''.",
'nologinlink' => '»Konto aaleege«',
'createaccount' => 'Nöis Benutzerkonto aalege',
'gotaccount' => "Du häsch scho a Konto? '''$1'''",
'gotaccountlink' => '»Login fir Benutzer, wu scho aagmäldet sin«',
'userlogin-resetlink' => 'Hesch Dyy Aamäldedate vergässe?',
'createaccountmail' => 'iber E-Mail',
'createaccountreason' => 'Grund:',
'badretype' => 'Di beidi Passwörter stimme nid zämme.',
'userexists' => 'Dä Benutzername git s scho.
Bitte nimm e andere.',
'loginerror' => 'Fähler bir Aamäldig',
'createaccounterror' => 'Het s Benutzerkonto nit chenne aalege: $1',
'nocookiesnew' => 'Dr Benutzerzuegang isch aaglait wore, aber Du bisch nid yygloggt. {{SITENAME}} brucht fir die Funktion Cookies, bitte tue die aktiviere un logg Di derno mit Dyynem neje Benutzername un em Passwort, wu drzue ghert, yy.',
'nocookieslogin' => '{{SITENAME}} brucht Cookies fir e Aamäldig. Du hesch d Cookies deaktiviert. Aktivier si bitte un versuech s no mol.',
'nocookiesfornew' => 'S Benutzerkonto isch nit aagleit wore, wel d Datehärchumft nit het chenne uusgmacht wäre.
S mueß sichergstellt syy, ass Cookies aktiviert sin. Derno ddie Syte nomol lade un s wider versueche.',
'noname' => 'Du muesch e Benutzername aagee.',
'loginsuccesstitle' => 'Aamäldig erfolgrych',
'loginsuccess' => "'''Du bisch jetz als \"\$1\" bi {{SITENAME}} aagmäldet.'''",
'nosuchuser' => 'Dr Benutzername "$1" git s nit.

Iberprief d Schrybwys, oder mäld Di as [[Special:UserLogin/signup|neje Benutzer aa]].',
'nosuchusershort' => 'S git kei Benutzername „$1“. Bitte iberprief d Schrybwys.',
'nouserspecified' => 'Bitte gib e Benutzername yy.',
'login-userblocked' => 'Dää Benutzer isch gsperrt. Aamäldig nit erlaubt.',
'wrongpassword' => 'Des Passwort isch falsch (oder fählt). Bitte versuech s nomol.',
'wrongpasswordempty' => 'Du hesch vergässe dyy Passwort yyzgee. Bitte versuech s nomol.',
'passwordtooshort' => 'Passwerter mien zmindescht {{PLURAL:$1|1 Zeiche|$1 Zeiche}} haa.',
'password-name-match' => 'Dyy Passwort muess sich vu Dyynem Benutzername unterscheide.',
'password-login-forbidden' => 'D Verwändig vu däm Benutzernamen un Passwort isch verbotte.',
'mailmypassword' => 'Es nöis Passwort schicke',
'passwordremindertitle' => 'Nei Passwort fir {{SITENAME}}',
'passwordremindertext' => 'Ebber mit dr IP-Adress $1 het e nej Passwort fir d Aamäldig bi {{SITENAME}} ($4) aagfordert, wahrschyyns Du sälber.

S automatisch generiert Passwort fir dr Benutzer "$2" heisst jetz: "$3"

Du sottsch dich jetzt aamälde un s Passwort ändere.
Des Passwort lauft ab in {{PLURAL:$5|eim Tag|$5 Täg}}.


Bitte ignorier die E-Mail, wänn Du s nid sälber aagforderet hesch. S alt Passwort blybt wyter giltig.',
'noemail' => 'Dr Benutzer "$1" het kei E-Mail-Adräss aagee.',
'noemailcreate' => 'Du muesch e giltigi E-Mail-Adräss aagee',
'passwordsent' => 'E temporär Passwort isch an d E-Mail-Adräss vum Benutzer "$1" gschickt wore.
Bitte mäld Di dodemit aa, wänn s iberchu hesch.',
'blocked-mailpassword' => 'Die IP-Adräss, wu vu Dir verwändet wird, isch fir s Ändre vu Syte gsperrt
Zum Missbruuch z verhindere, isch au d Megligkeit gsperrt wore, e nej Passwort aazfordere.',
'eauthentsent' => 'E Bstätigungs-Mail isch an die Adräss gschickt wore, wu Du aagee hesch.

Voreb ass no mee Mails iber d {{SITENAME}}-Mailfunktion an die Adräss gschickt wäre, muesch d Inschtruktione in däm Mail befolge, zum bstätige, ass es wirkli Dyys isch.',
'throttled-mailpassword' => 'In dr letschte {{PLURAL:$1|Stund|$1 Stunde}} isch scho ne nej Passwort aagforderet wore. Zum Missbruch vu däre Funktion z verhindere, cha nume {{PLURAL:$1|eimol in dr Stund|alli $1 Stunde}} e nej Passwort aageforderet wäre.',
'mailerror' => 'Fähler bim Sende vun de Mail: $1',
'acct_creation_throttle_hit' => 'Bsuecher vu däm Wiki, wu Dyyni IP-Adräss bruuche, hän innerhalb vum letschte Tag {{PLURAL:$1|1 Benutzerkonto|$1 Benutzerkonte}} aagleit. Des isch di maximal Aazahl, wu in däm Zytruum erlaubt isch.

Bsuecher, wu die IP-Adräss bruuche, chenne im Momänt kei Benutzerkonte meh aalege.',
'emailauthenticated' => 'Di E-Mail-Adräss isch am $2 um $3 Uhr bschtätigt worde.',
'emailnotauthenticated' => 'Dyni E-Mail-Adräss isch nonig bstätigt. Wäg däm gehn di erwyterete E-Mail-Funktione nonig.
Fir d Bstätigung muesch em Link nogoh, wu Dir gschickt woren isch. Du chasch au e neie sonig Link aafordere:',
'noemailprefs' => 'Du hesch kei E-Mail-Adrässen aaggä, drum sy di folgende Funktione nid müglech.',
'emailconfirmlink' => 'E-Poscht-Adräss bstätige',
'invalidemailaddress' => 'Diä E-Mail-Adress isch nit akzeptiert worre, wil s ä ugültigs Format ghet het.
Bitte gib ä neiji Adress in nem gültige Format ii, odr tue s Feld leere.',
'cannotchangeemail' => 'E-Mail-Adrässe chönne in däm Wiki nit gänderet werde.',
'emaildisabled' => 'Iber die Websyte chenne kei E-Mail verschickt wäre.',
'accountcreated' => 'S Benutzerkonto isch aagleit wore.',
'accountcreatedtext' => 'S Benutzerkonto $1 isch aagleit wore.',
'createaccount-title' => 'Aalege vum e Benutzerkonto fir {{SITENAME}}',
'createaccount-text' => 'Fir Dii isch e Benutzerkonto "$2" uf {{SITENAME}} ($4) aaglait wore. S Passwort fir "$2" , wu automatisch generiert woren isch, isch "$3". Du sottsch Di jetz aamälde un s Passwort ändere.

Wänn s Benutzerkonto us Versäh aaglait woren isch, chasch die Nochricht ignoriere.',
'usernamehasherror' => 'In Benutzernäme derf s kei Rautezeiche din haa',
'login-throttled' => 'Du hesch z vilmol vergebli versuecht, Di aazmälde. Bitte wart, voreb Du s non emol versuechsch.',
'login-abort-generic' => 'Dyy Aamäldig isch nit erfolgryych gsii – Abbroche',
'loginlanguagelabel' => 'Sproch: $1',
'suspicious-userlogout' => 'Dyy Versuech di abzmälde isch abbroche wore, wel s uusgsäh het, wie wänn s vun eme bschedigte Browser oder eme Cacheproxy uus gsändet woren isch.',

# E-mail sending
'php-mail-error-unknown' => 'Nit bekannte Fähler mit dr Funktion mail() vu PHP',
'user-mail-no-addy' => 'Es isch versuecht worde e E-Mail ohni Angab vunere E-Mail-Adräss z verschigge.',

# Change password dialog
'resetpass' => 'Passwort fir s Benutzerkonto ändere oder zrucksetze',
'resetpass_announce' => 'Aamäldig mit em Code, wu per Mail zuegschickt woren isch. Zum d Aamäldig abzschliesse, muesch jetz e nej Passwort wehle.',
'resetpass_text' => '<!-- Tue do dr Text ergänze -->',
'resetpass_header' => 'Passwort zrucksetze',
'oldpassword' => 'Alts Passwort',
'newpassword' => 'Nöis Passwort',
'retypenew' => 'Nöis Passwort (es zwöits Mal)',
'resetpass_submit' => 'Passwort ibermittle un aamälde',
'resetpass_success' => 'Dyy Passwort isch erfolgryych gänderet wore. Jetz chunnt d Aamäldig …',
'resetpass_forbidden' => 'S Passwort cha nid gänderet wäre.',
'resetpass-no-info' => 'Du muesch Di aamälde zum uf die Syte diräkt zuegryfe z chenne.',
'resetpass-submit-loggedin' => 'Passwort ändere',
'resetpass-submit-cancel' => 'Abbräche',
'resetpass-wrong-oldpass' => 'S temporär oder aktuäll Passwort isch nimi giltig.
Villicht hesch Dyy Passwort scho gänderet oder e nej temporär Passwort aagforderet.',
'resetpass-temp-password' => 'Temporär Passwort:',

# Special:PasswordReset
'passwordreset' => 'Passwort zruggsetze',
'passwordreset-text' => 'Bitte des Formular uusfille, ass De E-Mail e Erinnerig zue dr Aamäldeinformatione vu Dyym Benutzerkonto iberchunnsch.',
'passwordreset-legend' => 'Passwort zrucksetze',
'passwordreset-disabled' => 'S Zrucksetze vu Passwerter isch in däm Wiki deaktiviert wore.',
'passwordreset-pretext' => '{{PLURAL:$1||Gib eis vu däne Daten aa}}',
'passwordreset-username' => 'Benutzername:',
'passwordreset-domain' => 'Domain:',
'passwordreset-capture' => 'Die E-Mail aaluege?',
'passwordreset-capture-help' => 'Wänn du des Chäschtli aachrüüzesch, no wird die E-Mail (mit em temporäre Passwort) dir aazeigt, un au em Benutzer zuegschiggt.',
'passwordreset-email' => 'E-Mail-Adräss:',
'passwordreset-emailtitle' => 'Benutzerkontoinformationen uf {{SITENAME}}',
'passwordreset-emailtext-ip' => 'Eber mit dr IP-Adresse $1, wahrschyns Du sälber, het e Erinnerig an Dyyni Benutzerkonteninformatione fir {{SITENAME}} aagforderet ($4). {{PLURAL:$3|Des Benutzerkonto isch|Die Benutzerkonte sin}} mit däre E-Mail-Adräss verchnipft:

$2

{{PLURAL:$3|Des temporär Passwort lauft|Die temporäre Passwerter laufe}} in {{PLURAL:$5|eim Tag|$5 Täg}} ab.
Du sottsch di aamälden un e nej Passwort vergee. Wänn eber ander die Aafrog gstellt het oder Du di wider an Dyy alt Passwort chasch erinnere un s nimi wettsch ändere, chasch die Nochricht ignorieren un alsfurt Dyy alt Passwort bruche.',
'passwordreset-emailtext-user' => 'Benutzer $1 uf {{SITENAME}} het e Erinnerig an Dyyni Benutzerkonteninformatione fir {{SITENAME}} aagforderet ($4). {{PLURAL:$3|Des Benutzerkonto isch|Die Benutzerkonte sin}} mit däre E-Mail-Adräss verchnipft:

$2

{{PLURAL:$3|Des temporär Passwort lauft|Die temporäre Passwerter laufe}} in {{PLURAL:$5|eim Tag|$5 Täg}} ab.
Du sottsch di aamälden un e nej Passwort vergee. Wänn eber ander die Aafrog gstellt het oder Du di wider an Dyy alt Passwort chasch erinnere un s nimi wettsch ändere, chasch die Nochricht ignorieren un alsfurt Dyy alt Passwort bruche.',
'passwordreset-emailelement' => 'Benutzername: $1
Temporär Passwort: $2',
'passwordreset-emailsent' => 'E Erinnerig isch per E-Mail verschickt wore.',
'passwordreset-emailsent-capture' => 'E Erinnerigsmail isch abgschiggt worde, un isch unte aazeigt.',
'passwordreset-emailerror-capture' => 'Die Erinnerigsmail, wo unte aazeigt isch, isch generiert worde, aber de Versand aa de Benutzer isch gschyyteret: $1',

# Special:ChangeEmail
'changeemail' => 'E-Mail-Adräss ändre',
'changeemail-header' => 'D E-Mail-Adräss vo däm Chonto ändre',
'changeemail-text' => 'Füll des Formular ganz uss, zume dyni E-Mail-Adräss ändre. Du muesch dyn Passwort aagee, zum die Änderig z bstätige.',
'changeemail-no-info' => 'Du muesch aagmolde sy zum uff die Syte diräkt zuegryfe z chönne.',
'changeemail-oldemail' => 'Aktuelli E-Mail-Adräss',
'changeemail-newemail' => 'Nöii E-Mail-Adräss:',
'changeemail-none' => '(nyt)',
'changeemail-submit' => 'E-Mail Adräss ändre',
'changeemail-cancel' => 'Abbräche',

# Edit page toolbar
'bold_sample' => 'fetti Schrift',
'bold_tip' => 'Fetti Schrift',
'italic_sample' => 'kursiv gschribe',
'italic_tip' => 'Kursiv gschribe',
'link_sample' => 'Stichwort',
'link_tip' => 'Interne Link',
'extlink_sample' => 'http://www.example.com Linktekscht',
'extlink_tip' => 'Externer Link (http:// beachte)',
'headline_sample' => 'Abschnitts-Überschrift',
'headline_tip' => 'Überschrift Äbeni 2',
'nowiki_sample' => 'Doo nit-formatierte Text yygee',
'nowiki_tip' => 'Wiki-Formatierige ignoriere',
'image_sample' => 'Byschpil.jpg',
'image_tip' => 'Bildverwys',
'media_sample' => 'Byschpil.ogg',
'media_tip' => 'Dateie-Link',
'sig_tip' => 'Dyni Signatur mit Zytagab',
'hr_tip' => 'Horizontali Linie (sparsam verwende)',

# Edit pages
'summary' => 'Zämmefassig:',
'subject' => 'Beträff:',
'minoredit' => 'Numen es birebitzeli gänderet',
'watchthis' => 'Dä Artikel beobachte',
'savearticle' => 'Syte spychere',
'preview' => 'Vorschou',
'showpreview' => 'Vorschau aaluege',
'showlivepreview' => 'Live-Vorschau',
'showdiff' => 'Zeig Änderige',
'anoneditwarning' => "'''Warnig:''' Si sin nit aagmäldet. Ihri IP-Adrässe wird in de Gschicht vo däm Artikel gspeicheret.",
'anonpreviewwarning' => "''Du bisch nit aagmäldet. Bim Spychere wird Dyy IP-Adräss yydrait in d Versionsgschicht vu däre Syte.''",
'missingsummary' => "'''Obacht:''' Du hesch kei Zämefassig aagee. Wenn du nomol uf Spychere drucksch, wird d Änderung ohni gspychert.",
'missingcommenttext' => 'Bitte gib Dyy Kommentar unte yy.',
'missingcommentheader' => "'''ACHTIG:''' Du hesch kei Iberschrift im Fäld „Betreff:“ yygee. Wänn nomol uf „{{int:savearticle}}“ drucksch, wird Dyyni Bearbeitig ohni Iberschrift gspicheret.",
'summary-preview' => 'Vorschou vor Zämefassig:',
'subject-preview' => 'Vorschau vum Betreff:',
'blockedtitle' => 'Benutzer isch gsperrt.',
'blockedtext' => "'''Dyy Benutzername oder Dyyni IP-Adräss isch gsperrt wore.'''

D Sperrig isch vu $1 uusgfiert wore.
As Grund isch ''$2'' aagee wore.

* Aafang vu dr Sperrig: $8
* Ändi vu dr Sperrig: $6
* Sperrig betrifft: $7

Du chasch $1 oder e andere [[{{MediaWiki:Grouppage-sysop}}|Ammann]] kontaktiere go dischpetiere iber die Sperrig.
Du chasch d „E-Mail an dää Benutzer“-Funktion nit bruche, solang kei giltigi E-Mail-Adräss in Dyyne [[Special:Preferences|Benutzerkonto-Yystellige]] yydrait isch, oder solang die Funktion fir Di gsperrt isch.
Dyy aktuälli IP-Adräss isch $3, un d Sperr-ID isch #$5.
Bitte fieg in jedi Aafrog, wu du stellsch, alli Information yy.",
'autoblockedtext' => "Dyyni IP-Adräss isch automatisch gsperrt wore, wel si vu me andere Benutzer brucht woren isch, wu dur $1 gsperrt woren isch.
As Grund isch aagee wore:

:''$2''

* Aafang vu dr Sperri: $8
* Änd vu dr Sperri: $6
* Sperre betrifft: $7

Du chasch $1 oder ein vu dr andre [[{{MediaWiki:Grouppage-sysop}}|Ammanne]] kontaktiere, zum iber die Sperri z diskutiere.

Du chasch d „E-Mail an dää Benutzer“-Funktion nit nutze, solange kei giltigi E-Mail-Adräss in Dyne  [[Special:Preferences|Benutzerkonto-Yystellige]] yytrait isch oder die Funktion fir di gsperrt woren isch.

Dyy aktuäll IP-Adräss isch $3, un d Sperr-ID isch $5.
Bitte fieg alli Informatione jedere Aafrog zue, wu Du stellsch.",
'blockednoreason' => 'kei Begrindig aagee',
'whitelistedittext' => 'Du muesch Di $1 zum Artikel bearbeite.',
'confirmedittext' => 'Si mien Ihri E-Mail-Adräss zerscht bstätige, voreb Si Syte chenne ändere. Bitte setze Si in [[Special:Preferences|Ihre Iistellige]] Ihri E-Mail-Adräss yy un len Si si priefe.',
'nosuchsectiontitle' => 'Abschnitt nit gfunde',
'nosuchsectiontext' => 'Du hesch versuecht e Abschnitt z bearbeite, wu s nid git.
S cha syy, ass er verschoben oder glescht woren isch, derwylscht Du d Syte aagluegt hesch.',
'loginreqtitle' => 'S brucht d Aamäldig.',
'loginreqlink' => 'aamälde',
'loginreqpagetext' => 'Du muesch Di $1, zum Syte chenne läse.',
'accmailtitle' => 'S Passwort isch verschickt worre.',
'accmailtext' => 'E zuefällig generiert Passwort fir [[User talk:$1|$1]] isch an $2 gschickt wore.

S Passwort fir des nej Benutzerkonto cha uf dr Spezialsyte „[[Special:ChangePassword|Passwort ändere]]“ gänderet wäre.',
'newarticle' => '(Nej)',
'newarticletext' => "Du bisch eme Link nogange zuen ere Syte, wu s nid git.
Zum die Syte aalege, chasch do in däm Chaschte unte aafange schrybe (lueg [[{{MediaWiki:Helppage}}|Hilfe]] fir meh Informatione).
Wänn do nid hesch welle aane goh, no druck in Dyynem Browser uf '''Zruck'''.",
'anontalkpagetext' => "----''Des isch e Diskussionssyte vun eme anonyme Benutzer, wu kei Zuegang aagleit het oder wu ne nit bruucht. Sälleweg mien mir di numerisch IP-Adräss bruuche zum ihn oder si z identifiziere. So ne IP-Adräss cha au vu mehrere Benutzer teilt wäre. Wenn Du ne anonyme Benutzer bisch un s Gfiel hesch, ass do irrelevanti Kommentar an di grichtet wäre, derno [[Special:UserLogin/signup|leg e Konto aa]] oder [[Special:UserLogin|mäld di aa]] zum in Zuekumft Verwirrige mit andere anonyme Benutzer z vermyyde.''",
'noarticletext' => 'Uf däre Syte het s no kei Täxt. Du chasch uf andere Syte [[Special:Search/{{PAGENAME}}|dä Yytrag sueche]], <span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} dr Logbuechyytrag sueche, wo dezue ghert],
oder [{{fullurl:{{FULLPAGENAME}}|action=edit}} die Syte bearbeite]</span>.',
'noarticletext-nopermission' => 'In däre Syte het s zur Zyt no kei Text.
Du chasch dää Titel uf andre Syte [[Special:Search/{{PAGENAME}}|sueche]]
oder <span class="plainlinks">in dr zuegherige [{{fullurl:{{#special:Log}}|page={{FULLPAGENAMEE}}}} Logbiecher sueche].</span> Du derfsch aber die Syte nit aalege.',
'missing-revision' => 'D Version $1 vu dr Syte mit Name „{{PAGENAME}}“ git s nit.

Dää Fähler chunnt normalerwyys dur e veraltete Link zue dr Versionsgschicht vun ere Syte, wu in dr Zwischezyt glescht woren isch.
Einzelheite chasch im [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} Lesch-Logbuech] bschaue.',
'userpage-userdoesnotexist' => 'S Benutzerkonto „<nowiki>$1</nowiki>“ git s nit. Bitte prief, eb Du die Syte wirkli wit aalege/bearbeite.',
'userpage-userdoesnotexist-view' => 'S Benutzerkonto „$1“ isch nit registriert.',
'blocked-notice-logextract' => 'Dää Benutzer isch zur Zyt gsperrt.
As Information chunnt do ne aktuälle Uuszug us em Benutzersperr-Logbuech:',
'clearyourcache' => "'''Hiiwys:''' Noch em Spycheremuesch no dr Browser-Zwischespycher lääre go d Änderige sää.
* '''Firefox/ Safari:''' ''Umschaltig'' drucken un glychzytig ''Aktualisiere'' aaklicken oder entwäder ''Strg+F5'' oder ''Strg+R'' (''Befehlstaste-R'' uf em Mac) drucke
* '''Google Chrome:''' ''Umschaltig+Strg+R'' (''Befählstaschte-R'' uf em Mac) drucke
* '''Internet Explorer:''' ''Strg+F5'' drucken oder ''Strg'' drucken un glychzytig ''Aktualisiere'' aaklicke
* '''Opera:''' ''Extra → Internetspure lesche … → Individuäll Uuswahl → Dr komplett Cache lesche''",
'usercssyoucanpreview' => "'''Tipp:''' Nimm dr „{{int:showpreview}}”-Chnopf, zum Dyy nej CSS vor em Spichere z teschte.",
'userjsyoucanpreview' => "'''Tipp:''' „Nimm dr {{int:showpreview}}”-Chnopf, zum Dyy nej JS vor em Spichere z teschte.",
'usercsspreview' => "== Vorschau vu Dyynem Benutzer-CSS. ==
'''Wichtig:''' Noch em Spichere muesch Dyynem Browser sage, ass er die nej Version ladet:

'''Mozilla:''' ''Strg-Shift-R'', '''IE:''' ''Strg-F5'', '''Safari:''' ''Cmd-Shift-R'', '''Konqueror:''' ''F5''.",
'userjspreview' => "== Vorschau vu Dyynem Benutzer-Javascript. ==
'''Gib acht:''' Noch em Spychere muesch Dyy Browser aawyse di nej Version z lade: '''Mozilla:''' ''Strg-Shift-R'', '''IE:''' ''Strg-F5'', '''Safari:''' ''Cmd-Shift-R'', '''Konqueror:''' ''F5''.",
'sitecsspreview' => "'''Obacht: Du luegsch nume ne Vorschau vu däm CSS aa.'''
'''S isch nonig gspycheret wore!'''",
'sitejspreview' => "'''Obacht: Du luegsch nume ne Vorschau vu däm JavaScript aa.'''
'''S isch nonig gspycheret wore!'''",
'userinvalidcssjstitle' => "'''Achtig:''' D Skin „$1“ git s nid. Dänk dra, ass benutzerspezifischi .css- und .js-Syte mit eme Chleibuechstabe mien aafange, also z B. ''{{ns:user}}:Mustermann/vector.css'' statt ''{{ns:user}}:Mustermann/Vector.css''.",
'updated' => '(Gänderet)',
'note' => "'''Obacht: '''",
'previewnote' => "'''Das isch numen e Vorschau und nonig gspycheret!'''
Die Syte isch nonig gspycheret wore!",
'continue-editing' => 'Wyter bearbeite',
'previewconflict' => 'Die Vorschau zeigt dr Inhalt vum obere Täxtfäld. Eso siht dr Artikel us, wän Du jetz uf Spychere drucksch.',
'session_fail_preview' => "'''Dyyni Bearbeitig het nid chenne gspycheret wäre, wel Sitzigsdate verlore gange sin.
Bitte versuech s nomol. Derzue drucksch unter däre Täxtvorschau nomol uf „Syte spychere“.
Wänn s Problem blybt, [[Special:UserLogout|mäld Di ab]] un derno wider aa.'''",
'session_fail_preview_html' => "'''Dyyni Bearbeitig het nid chenne gspycheret wäre, wel Sitzigsdate verlore gange sin.'''

''Wel in {{SITENAME}} s Spychere vun ere reine HTML aktiviert isch, isch d Vorschau usbländet wore, zum JavaScript-Attacke z verhindere.''

'''
Bitte versuech s nomol. Derzue drucksch unter däre Täxtvorschau nomol uf „Syte spicherne“.
Wänn s Problem blybt, [[Special:UserLogout|mäld Di ab]] un derno wider aa.'''",
'token_suffix_mismatch' => "'''Dyyni Bearbeitig isch zruckgwise wore, wel Dyy Browser Zeiche im Bearbeite-Token verstimmlet het.
S Spichere cha dr Inhalt vu dr Syte hii mache. Des git s e mänkmol, wänn eber e anonyme Proxy-Dienscht brucht, wu Fähler macht.'''",
'edit_form_incomplete' => "'''Dr Inhalt vum Bearbeitigsformular isch nit vollständig zum Server chuu. Bitte prief Dyy Bearbeitigen uf Vollständigkeit un versuech s nomol.'''",
'editing' => 'Bearbeite vo «$1»',
'creating' => 'Am Aalege vu „$1“',
'editingsection' => 'Bearbeite vo «$1» (Absatz)',
'editingcomment' => 'Bearbeite vu $1 (Neje Abschnitt)',
'editconflict' => 'Bearbeitigs-Konflikt: «$1»',
'explainconflict' => "Öpper anders het dä Artikel gänderet, wo du ne sälber am Ändere bisch gsy.
Im obere Tekschtfäld steit der jitzig Artikel.
Im untere Tekschtfält stöh dyni Änderige.
Bitte überträg dyni Änderigen i ds obere Tekschtfäld.
We du «{{int:savearticle}}» drücksch, de wird '''nume''' der Inhalt vom obere Tekschtfäld gspycheret.",
'yourtext' => 'Dyy Täxt',
'storedversion' => 'Gspychereti Version',
'nonunicodebrowser' => "'''Obacht:''' Dyy Browser cha Unicode-Zeiche nid richtig verschaffe. Bitte verwänd e andere Browser zum Syte bearbeite.",
'editingold' => "'''Obacht: Du bisch en alti Version vo däm Artikel am Bearbeite.
Alli nöiere Versione wärden überschribe, we du uf «Syte spychere» drücksch.'''",
'yourdiff' => 'Unterschid',
'copyrightwarning' => "'''Bitte <big>kopier kener Internetsyte</big>, wo nid dyner eigete sy, bruuch <big>kener urhäberrächtlech gschützte Wärch</big> ohni Erloubnis vor Copyright-Inhaberschaft!'''<br />
Hiemit gisch du zue, das du dä Tekscht '''sälber gschribe''' hesch, das der Tekscht Allgmeinguet ('''public domain''') isch, oder das der '''Copyright-Inhaberschaft''' iri '''Zuestimmig''' het 'gä. Falls dä Tekscht scho nöumen anders isch veröffentlecht worde, de schryb das bitte uf d Diskussionssyte.
<i>Bis dir bewusst, dass alli {{SITENAME}}-Byträg outomatisch under der „$2“ stöh (für Details vgl. $1). We du nid wosch, das anderi dy Bytrag chöu veränderen u wyterverbreite, de drück nid uf „Syte spychere“.</i>",
'copyrightwarning2' => "Dängge Si dra, dass alli Änderige {{GRAMMAR:dativ {{SITENAME}}}} vo andere Benutzer wider gänderet oder glöscht chönne wärde. Wenn Si nit wänn, dass ander Lüt an Ihrem Tekscht ummedoktere denn schicke Si ihn jetz nit ab.<br />
Si verspräche uns usserdäm, dass Si des alles selber gschribe oder vo nere Quälle kopiert hen, wo Public Domain odr sunscht frei isch (lueg $1 für Details).
'''SETZE SI DO OHNI ERLAUBNIS KEINI URHEBERRÄCHTLICH GSCHÜTZTI WÄRK INE!'''",
'longpageerror' => "'''Fähler: Dä Täxt, wu Du spychere wit, isch {{PLURAL:$1|ei Kilobyte|$1 Kilobyte}} groß. Des isch greßer wie s erlaubt Maximum vu {{PLURAL:$2|eim Kilobyte|$2 Kilobyte}}.''' S Spychere isch nit megli.",
'readonlywarning' => "'''Achtung: Die Datebank isch fir Wartigsarbete gesperrt. Wäge däm chenne Dyyni Änderige im Momänt nid gspicheret wäre.
Sichere de Täxt bitte lokal uf Dyynem Computer un versuech speter nomol, d Änderige z ibertrage.'''

Grund fir d Sperri: $1",
'protectedpagewarning' => "'''WARNIG: Die Syten isch gsperrt wore, ass si nume Benutzer mit Administrator-Rächt chenne verändere.'''
As Referänz wird do dr letscht Logbuechyytrag aagee:",
'semiprotectedpagewarning' => "'''Obacht''': Die Syte isch halb gsperrt, ass si nume vu aagmäldete Benutzer cha bearbeitet wäre.
As Referänz wird do dr letscht Logbuechyytrag aagee:",
'cascadeprotectedwarning' => "'''ACHTIG: Die Syte isch gsperrt. Wäg däm cha si nume vu Benutzer mit Ammannerächt bearbeitet wäre. Si isch in die {{PLURAL:$1|Syte|Syte}} yybunde, wu mit ere Kaskadesperroption gschitzt {{PLURAL:$1|isch|sin}}:'''",
'titleprotectedwarning' => "'''Obacht: S Aalege vu däre Syte isch gsperrt. Wäg däm bruucht mer [[Special:ListGroupRights|bstimmti Rächt]] go si aalege.'''
As Referänz wird do dr letscht Logbuechyytrag aagee:",
'templatesused' => '{{PLURAL:$1|Vorlag, wu in däm Artikel brucht wird|Vorlage, wu in däm Artikel brucht wäre}}:',
'templatesusedpreview' => '{{PLURAL:$1|Vorlag, wu in däre Vorschau brucht wird|Vorlage, wu in däre Vorschau brucht wäre}}:',
'templatesusedsection' => '{{PLURAL:$1|Vorlag, wu in däm Abschnitt brucht wird|Vorlage, wu in däm Abschnitt brucht wäre}}:',
'template-protected' => '(schrybgschützt)',
'template-semiprotected' => '(schrybgschitzt fir Benutzer, wo nit aagmäldet oder nei sin)',
'hiddencategories' => 'Die Syte ghert zue {{PLURAL:$1|einere versteckte Kategori|$1 versteckte Kategorie}}:',
'edittools' => '<!-- Dää Text wird unter em "Ändere"-Formular un bim "Uffelade"-Formular aagzeigt. -->',
'nocreatetitle' => 'S Aalege vu neje Syte isch yygschränkt.',
'nocreatetext' => "Uf {{SITENAME}} isch d Erstellig vo nöue Syten ygschränkt.
Du chasch nur Syten ändere, wo's scho git, oder muesch di [[Special:UserLogin|amälde]].",
'nocreate-loggedin' => 'Du bisch nid berächtigt, neji Syte aazlege.',
'sectioneditnotsupported-title' => 'Abschnitt bearbeite wird nit unterstitzt',
'sectioneditnotsupported-text' => 'Abschnitt bearbeite wird uf däre Syte nit unterstitzt.',
'permissionserrors' => 'Berächtigungsfähler',
'permissionserrorstext' => 'Du bisch nid berächtigt, die Aktion uszfiere. {{PLURAL:$1|Grund|Grind}}:',
'permissionserrorstext-withaction' => 'Du bisch nit berächtigt, $2.
{{PLURAL:$1|Grund|Grind}}:',
'recreate-moveddeleted-warn' => "'''Obacht: Du bisch e Syten am aalege, wo scho emol glescht woren isch.'''

Bitte iberprief, eb s sinnvoll isch, mit em Bearbeite wyter z mache.
Zue Dyyre Information sihsch do s Lesch-Logbuech vo däre Syte:",
'moveddeleted-notice' => 'Die Syte isch glescht wore. Do chunnt e Uuszuug us em Lesch-Logbuech fir die Syte.',
'log-fulllog' => 'Voll Logbuech aaluege',
'edit-hook-aborted' => 'D Bearbeitig isch ohni Erchlärung dur e Schnittstell abbroche wore.',
'edit-gone-missing' => 'D Syte het nid chenne aktalisiert wäre.
Si isch schyns glescht wore.',
'edit-conflict' => 'Bearbeitigskonflikt.',
'edit-no-change' => 'Dyyni Bearbeitig isch ignoriert wore, wel kei Änderig am Täxt gmacht woren isch.',
'edit-already-exists' => 'Di nej Syte het nid chenne aaglait wäre, wel s si scho git.',
'defaultmessagetext' => 'Standardtext',
'content-failed-to-parse' => 'Parse vum Inhalt $2 fir Modell $1 fählgschlaa: $3',
'invalid-content-data' => 'Uugiltigi Inhaltsdate',
'content-not-allowed-here' => 'Dr Inhalt „$1“ isch uf dr Syte [[$2]] nit erlaubt',

# Content models
'content-model-wikitext' => 'Wikitext',
'content-model-text' => 'Klartext',
'content-model-javascript' => 'JavaScript',
'content-model-css' => 'CSS',

# Parser/template warnings
'expensive-parserfunction-warning' => 'Achtig: In däre Syte het s z vyyl Ufruef vu ufwändige Parserfunktione.

S {{PLURAL:$2|derf nid meh wie ein Ufruef|derfe nid meh wie $1 Ufruef}} gee.',
'expensive-parserfunction-category' => 'Syte, wu ufwändigi Parserfunktione z vyylmol ufruefe',
'post-expand-template-inclusion-warning' => 'Warnig: D Gressi vu yybundene Vorlage isch z gross, e Teil Vorlage chenne nid yybunde wäre.',
'post-expand-template-inclusion-category' => 'Syte, wu d maximal Gressi vu dr yybundene Vorlage iberschritte isch',
'post-expand-template-argument-warning' => 'Warnig: In däre Syte het s zmindescht ei Argumänt in ere Vorlag, wu z gross isch, wänn s expandiert isch. Die Argumänt wäre ignoriert.',
'post-expand-template-argument-category' => 'Syte, wu s ignorierti Vorlageargumänt din het',
'parser-template-loop-warning' => 'Vorlagelätsch entdeckt: [[$1]]',
'parser-template-recursion-depth-warning' => 'Vorlagerekursionstiefegränz iberschritte ($1)',
'language-converter-depth-warning' => 'Gränz vu dr Sprochkonvertertiefi iberschritte ($1)',
'node-count-exceeded-category' => 'Syte, wo d Chnotezaal überschritte hen',
'node-count-exceeded-warning' => 'Die Syte het d Chnotepunktzaal überschritte.',
'expansion-depth-exceeded-category' => 'Syte, wo d Expansionsdiefi überschritte hen',
'expansion-depth-exceeded-warning' => 'Die Syte het d Expansionsdiefi überschritte.',
'parser-unstrip-loop-warning' => 'Zirkelbezug festgstellt',
'parser-unstrip-recursion-limit' => 'Rekursionsgränz bim Ufflöse überschritte ($1)',
'converter-manual-rule-error' => 'Bi dr manuälle Sprochkonvertierigsregle isch e Fähler entdeckt wore.',

# "Undo" feature
'undo-success' => 'Zum die Änderig ruckgängig z mache, kontrollier bitte d Bearbeitig in dr Verglichsaasicht un druck derno uf „Syte spichere“.',
'undo-failure' => 'D Änderig het nid chenne ruckgängig gmacht wäre, wel dää Abschnitt mittlerwyli gänderet woren isch.',
'undo-norev' => 'D Bearbeitig het nid chenne ruckgängig gmacht wäre, wel si nid vorhande oder glescht isch.',
'undo-summary' => 'D Änderig $1 vu [[Special:Contributions/$2|$2]] ([[User talk:$2|Diskussion]]) isch ruckgängig gmacht wore.',

# Account creation failure
'cantcreateaccounttitle' => 'Benutzerkonto cha nid aagleit wäre.',
'cantcreateaccount-text' => "S Aalege vu me Benutzerkonto vu dr IP-Adräss '''($1)''' isch dur [[User:$3|$3]] gsperrt wore.

Grund vu dr Sperri: ''$2''",

# History pages
'viewpagelogs' => 'Logbüecher für die Syten azeige',
'nohistory' => 'S git kei Versionsgschicht fir die Syte.',
'currentrev' => 'Itzigi Version',
'currentrev-asof' => 'Aktuälli Version vu $1',
'revisionasof' => 'Version vo $1',
'revision-info' => 'Alti Bearbeitig vom $1 dür $2',
'previousrevision' => '← Vorderi Version',
'nextrevision' => 'Nächschti Version →',
'currentrevisionlink' => 'Itzigi Version',
'cur' => 'Jetz',
'next' => 'Nächschti',
'last' => 'vorane',
'page_first' => 'Afang',
'page_last' => 'Ändi',
'histlegend' => 'Du chasch zwei Versionen uswähle und verglyche.<br />
Erklärig: (aktuell) = Underschid zu jetz,
(vorane) = Underschid zur alte Version, <strong>K</strong> = chlyni Änderig',
'history-fieldset-title' => 'Suech in dr Versionsgschicht',
'history-show-deleted' => 'nume gleschti Versione',
'histfirst' => 'Eltischti',
'histlast' => 'Nöischti',
'historysize' => '({{PLURAL:$1|1 Byte|$1 Bytes}})',
'historyempty' => '(läär)',

# Revision feed
'history-feed-title' => 'Versionsgschicht',
'history-feed-description' => 'Versionsgschicht fir die Syte in {{SITENAME}}',
'history-feed-item-nocomment' => '$1 um $2',
'history-feed-empty' => 'Di aagforderet Syte git s nid. Villicht isch si glescht oder verschobe wore. [[Special:Search|Suech]] {{SITENAME}} fir neji Syte, wu passe.',

# Revision deletion
'rev-deleted-comment' => '(Zämmefassig uusegnuh)',
'rev-deleted-user' => '(Benutzername uusegnuh)',
'rev-deleted-event' => '(Logbuechaktion uusegnuh)',
'rev-deleted-user-contribs' => '[Benutzername oder IP-Adräss uusegnuu - Bearbeitig in dr Byytragslischt versteckt]',
'rev-deleted-text-permission' => "Die Version isch '''glescht''' wore.
Information zue dr Leschig un e Begrindig het s im [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} Lesch-Logbuech].",
'rev-deleted-text-unhide' => "Die Version isch '''gelöscht''' worde.
Mee Angabe chasch im [{{fullurl:{{#special:Log}}/delete|page={{FULLPAGENAMEE}}}} Lösch-Logbuech] finde.
Du chasch [$1 die Version allno aaluege], wänn de wottsch.",
'rev-suppressed-text-unhide' => "Die Version isch '''unterdrückt''' worde.
Mee Angabe chasch im [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} Unterdrückigs-Logbuech] finde.
Du chasch [$1 die Version allno aaluege], wänn de wottsch.",
'rev-deleted-text-view' => "Die Version isch '''glescht''' wore.
Du chasch si allno aaluege. Details findsch im [{{fullurl:{{#special:Log}}/delete|page={{FULLPAGENAMEE}}}} Lösch-Logbuech].",
'rev-suppressed-text-view' => "Die Version isch '''unterdruckt''' wore.
Du chasch si allno aaluege; Detail het's im [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} Unterdruckigs-Logbuech].",
'rev-deleted-no-diff' => "Du chasch die Änderig nit aaluege, wel eini vu dr Versione '''glescht''' woren isch.
Villicht het s Detail im [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} Lesch-Logbuech].",
'rev-suppressed-no-diff' => "Du chasch dää Versionsunterschid nit bschaue, wel eini vu dr Versione '''glescht''' woren isch.",
'rev-deleted-unhide-diff' => "Eini vu dr Versione isch '''glescht''' wore.
Details het's im [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} Lesch-Logbuech].
Du chasch [$1 dä Unterschid allno aaluege] wänn Du wytermache witt.",
'rev-suppressed-unhide-diff' => "Eini vu dr Versione vu däne bode isch '''unterdruckt'''.
Einzelheite derzue het's im [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} Unterdruckigs-Logbuech].
Du chasch [$1 dr Unterschid allno aaluege] wänn du witt.",
'rev-deleted-diff-view' => "Eine vu dr Versione vu däm Unterschid isch '''glescht''' wore.
Du chasch dää Unterschid allno aaluege; Details het's im [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} Leschlogbuech].",
'rev-suppressed-diff-view' => "Eine vu dr Versione vu däm Unterschid isch '''unterdruckt''' wore.
Du chasch dää Unterschid allno aaluege; Details het's im [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} Unterdrückigslogbuech].",
'rev-delundel' => 'zeig/versteck',
'rev-showdeleted' => 'zeig',
'revisiondelete' => 'Versione lesche/widerherstelle',
'revdelete-nooldid-title' => 'Kei Version aagee',
'revdelete-nooldid-text' => 'Du hesch entwäder kei Version aagee, wu die Aktion soll usgfiert wäre, die usgwehlt Version git s nid oder Du versuechsch di aktuäll Version z verstecke.',
'revdelete-nologtype-title' => 'Kei Logtyp aagee',
'revdelete-nologtype-text' => 'S isch kei Logtyp fir die Aktion aagee wore.',
'revdelete-nologid-title' => 'Uugiltige Logyytrag',
'revdelete-nologid-text' => 'S isch kei Logtyp usgwählt wore oder dr gwählt Logtyp git s nit.',
'revdelete-no-file' => 'D Datei, wu Du aagee hesch, git s nit.',
'revdelete-show-file-confirm' => 'Bisch sicher, ass Du di glescht Version vu dr Datei „<nowiki>$1</nowiki>“ vum $2 am $3 witt aaluege?',
'revdelete-show-file-submit' => 'Jo',
'revdelete-selected' => "'''{{PLURAL:$2|Usgwehlti Version|Usgwehlti Versione}} vu [[:$1]]:'''",
'logdelete-selected' => "'''{{PLURAL:$1|Usgwehlte Logbuechyytrag|Usgwehlti Logbuechyytreg}}:'''",
'revdelete-text' => "'''Dr Inhalt oder anderi Bstandteil vu gleschte Versione chenne nimi aagluegt wäre, si erschyyne aber alno as Yytreg in dr Versiongschicht.'''
{{SITENAME}}-Ammanne chenne dr Inhalt, wu glescht isch, oder di andre gleschte Bstandteil alno aaluege un au widerherstelle, user s isch feschtgleit, ass d Zuegangsbschränkige au fir Ammanne gälte.",
'revdelete-confirm' => 'Bitte tue bstetige, ass Du vor hesch, des z mache, d Konsequänze drus verstohsch un s machsch in Inbereinstimmig mit dr [[{{MediaWiki:Policy-url}}|Richtlinie]].',
'revdelete-suppress-text' => "Unterdruckige sotte '''nume''' in däne Fäll bruucht wäre:
* Nit aabrochti Informatione
*: ''Adrässe, Telifonnummere, Sozialversicherigsnummere usw.''",
'revdelete-legend' => 'Setze vu dr Sichtbarkeits-Yyschränkige',
'revdelete-hide-text' => 'Täxt vu dr Version versteckle',
'revdelete-hide-image' => 'Bildinhalt versteckle',
'revdelete-hide-name' => 'Logbuech-Aktion versteckle',
'revdelete-hide-comment' => 'Bearbeitigskommentar versteckle',
'revdelete-hide-user' => 'Benutzername/d IP vum Bearbeiter versteckle',
'revdelete-hide-restricted' => 'Date vu Ammanne glyych unterdrucke wie vu andere',
'revdelete-radio-same' => '(nit ändere)',
'revdelete-radio-set' => 'Jo',
'revdelete-radio-unset' => 'Nei',
'revdelete-suppress' => 'Grund vu dr Leschig au vor dr Ammanne versteckle',
'revdelete-unsuppress' => 'Yyschränkige fir di widerhergstellte Versione ufhebe',
'revdelete-log' => 'Grund:',
'revdelete-submit' => 'Uf {{PLURAL:$1|di uusgwehlt Version|usgwehlti Versione}} aawände',
'revdelete-success' => "'''Versionsaasicht erfolgryych aktualisiert.'''",
'revdelete-failure' => "'''Versionssichtbarkeit het nit chenne aktualisiert wäre.'''
$1",
'logdelete-success' => "'''Logbuechaasicht erfolgryych gänderet.'''",
'logdelete-failure' => "'''Logbuchsichtbarkeit cha nit gänderet wäre:'''
$1",
'revdel-restore' => 'Sichtbarkeit ändere',
'revdel-restore-deleted' => 'gleschti Versione',
'revdel-restore-visible' => 'sichtbari Versione',
'pagehist' => 'Versionsgeschicht',
'deletedhist' => 'Gleschti Versione',
'revdelete-hide-current' => 'Fähler bim Verstecke vum Yytrag mit em Datum $2, $1: des isch di aktuäll Version.
Si cha nit versteckt wäre.',
'revdelete-show-no-access' => 'Fähler bim Aazeige vum Yytrag mit em Datum $2, $1: dää Yytrag isch as „yygschränkt“ markiert wore.
Du hesch kei Zuegriff druf.',
'revdelete-modify-no-access' => 'Fähler bim Bearbeite vum Yytrag mit em Datum $2, $1: dää Yytrag isch as „yygschränkt“ markiert wore.
Du hesch kei Zuegriff druf.',
'revdelete-modify-missing' => 'Fähler bim Bearbeite vum Yytrag ID $1: Är fählt in dr Datebank!',
'revdelete-no-change' => "'''Warnig:''' dr Yytrag mit em Datum $2, $1 het scho di gwinscht Sichtbarkeitsyystellige.",
'revdelete-concurrent-change' => 'Fähler bim Bearbeite vum yytrag mit em Datum $2, $1: schyns isch dr Status vu eberem gänderet wore, voreb Du vorghaa hesch, e z bearbeite.
Bitte prief d Logbiecher.',
'revdelete-only-restricted' => 'Fähler bim Uusblände vum Byytrag vum $2, $1: Du chasch kei Yyträg vor Adminischtratore unterdrucke, ohni ass Du au eini vu dr andere Unterdruckigsoptione uusgwehlt hesch.',
'revdelete-reason-dropdown' => '*Gängigi Leschgrind
**Urheberrächtsverletzig
**Falschi Information iber Persone
**Informatione, wu villicht anderi belaidige',
'revdelete-otherreason' => 'Andere/Zuesätzlige Grund:',
'revdelete-reasonotherlist' => 'Andere Grund',
'revdelete-edit-reasonlist' => 'Leschgrind bearbeite',
'revdelete-offender' => 'Versionsautor:',

# Suppression log
'suppressionlog' => 'Oversight-Logbuech',
'suppressionlogtext' => 'Des isch s Logbuech vu dr Oversight-Aktione (Änderige vu dr Sichtbarkeit vu Versione, Bearbeitigskommentar, Benutzernäme un Benutzersperrine).
Lueg uff d [[Special:BlockList|Lischt vo gsperrte IP-Adrässe un Benutzernäme]] für aktuell Sperre.',

# History merging
'mergehistory' => 'Versionsgschichte zämmefiere',
'mergehistory-header' => 'Mit däre Spezialsyte chasch d Versionsgschicht vun ere Ursprungssyte mit dr Versionsgchicht vun ee Ziilsyte zämefiere.
Stell sicher, ass d Versionsgschicht vun eme Artikel historisch korrekt isch.',
'mergehistory-box' => 'Versionsgschichte vu zwoo Syte zämefiere',
'mergehistory-from' => 'Ursprungssyte:',
'mergehistory-into' => 'Ziilsyte:',
'mergehistory-list' => 'Versione, wu zämegfierd chenne wäre',
'mergehistory-merge' => 'Die Versione vu „[[:$1]]“ chenne no „[[:$2]]“ ibertrait wäre. Markier d Version, wu d Versione bis zuen ere solle yyschliessli ibertrage wäre. Bitte gib Acht, ass d Nutzig vu dr Navigationsgleicher d Uuswahl zrucksetzt.',
'mergehistory-go' => 'Zeig d Versione, wu zämegfierd chenne wäre',
'mergehistory-submit' => 'Fier Versione zäme',
'mergehistory-empty' => 'S chenne kei Versione zämegfierd wäre.',
'mergehistory-success' => '{{PLURAL:$3|1 Version|$3 Versione}} vu „[[:$1]]“ isch no „[[:$2]]“ zämegfierd.',
'mergehistory-fail' => 'Zämefierig vu dr Versione nid megli, bitte prief d Syte un d Zytaagobe.',
'mergehistory-no-source' => 'Ursprungssyte „$1“ isch nit vorhande.',
'mergehistory-no-destination' => 'Ziilsyte „$1“ isch nit vorhande.',
'mergehistory-invalid-source' => 'Ursprungssyte muess e giltige Sytename syy.',
'mergehistory-invalid-destination' => 'Ziilsyte muess e giltige Sytename syy.',
'mergehistory-autocomment' => '„[[:$1]]“ zämegfierd no „[[:$2]]“',
'mergehistory-comment' => '„[[:$1]]“ zämegfierd no „[[:$2]]“: $3',
'mergehistory-same-destination' => 'Uusgangs- un Ziilsyte derfe nit di nämlige syy',
'mergehistory-reason' => 'Grund:',

# Merge log
'mergelog' => 'Zämefierigs-Logbuech',
'pagemerge-logentry' => 'het [[$1]] in [[$2]] zämegfierd (Versione bis $3)',
'revertmerge' => 'Zämefierig ruckgängig mache',
'mergelogpagetext' => 'Des isch e Lischt vu dr letschte Zämefierige vu Versionsgschichte.',

# Diffs
'history-title' => '$1: Versionsgschicht',
'difference-title' => '$1: Unterschid zwüsche de Versione',
'difference-title-multipage' => '$1 un $2: Unterschid zwüsche de Syte',
'difference-multipage' => '(Unterschid zwische Syte)',
'lineno' => 'Zyle $1:',
'compareselectedversions' => 'Usgwählti Versione verglyche',
'showhideselectedversions' => 'Uusgwehlti Versione zeige/verstecke',
'editundo' => 'rückgängig',
'diff-multi' => '({{PLURAL:$1|Ei Version|$1 Versione}} vu {{PLURAL:$2|eim Benutzer|$2 Benutzer}}, {{PLURAL:$1|wu derzwische lyt, wird|wu derzwische lige, wäre}} nit aazeigt)',
'diff-multi-manyusers' => '({{PLURAL:$1|Ei Version|$1 Versione}} vu meh {{PLURAL:$2|eim Benutzer|$2 Benutzer}}, {{PLURAL:$1|wu derzwische lyt un nit aazeigt wird|wu derzwische lige un nit aazeigt wäre}})',
'difference-missing-revision' => '{{PLURAL:$2|Ei Version|$2 Versione}} vui däre Unterschidsaazeig ($1) {{PLURAL:$2|isch|sin}} nit gfunde wore.

Dää Fähler chunnt normalerwyys dur e veraltete Link zue dr Versionsgschicht vun ere Syte, wu in dr Zwischezyt glescht woren isch.
Einzelheite chasch im [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} Lesch-Logbuech] bschaue.',

# Search results
'searchresults' => 'Suech-Ergäbnis',
'searchresults-title' => 'Suechergebniss fir „$1“',
'searchresulttext' => 'Für wiiteri Informatione zuem Sueche uff {{SITENAME}} chönne Si mol uff [[{{MediaWiki:Helppage}}|{{int:help}}]] luege.',
'searchsubtitle' => 'Dyyni Suechaafrog: „[[:$1|$1]]“ ([[Special:Prefixindex/$1|alli Syte, wu mit „$1“ aafange]]{{int:pipe-separator}}[[Special:WhatLinksHere/$1|alli Syte, wu uf „$1“ verwyyse]])',
'searchsubtitleinvalid' => 'Für d Suechaafrag «$1»',
'toomanymatches' => 'D Aazahl vu dr Suechergebniss isch z gross, bitte versuech e anderi Abfrog.',
'titlematches' => 'Iberyystimmige mit Sytentitel',
'notitlematches' => 'Kei Iberyystimmige mit Sytetitel',
'textmatches' => 'Iberyystimmige mit Inhalte',
'notextmatches' => 'Kei Iberyystimmige mit Inhalte',
'prevn' => '{{PLURAL:$1|vorige|vorigi $1}}',
'nextn' => '{{PLURAL:$1|nächschte|nächschti $1}}',
'prevn-title' => '{{PLURAL:$1|Vorig Ergebnis|Vorigi $1 Ergebnis}}',
'nextn-title' => '{{PLURAL:$1|Negscht Ergebnis|Negschti $1 Ergebnis}}',
'shown-title' => 'Zeig $1 {{PLURAL:$1|Ergebnis|Ergebnis}} pro Syte',
'viewprevnext' => '($1 {{int:pipe-separator}} $2) aazeige; ($3) uf ds Mal',
'searchmenu-legend' => 'Suechoptione',
'searchmenu-exists' => "* Syte '''[[$1]]'''",
'searchmenu-new' => "'''[[:$1|Leg d Syte ''$1'' in dem Wiki aa!]]'''",
'searchhelp-url' => 'Help:Hilf',
'searchmenu-prefix' => '[[Special:PrefixIndex/$1|Zeige alli Syte, wu mit dem Suechbegriff aafange]]',
'searchprofile-articles' => 'Inhaltssyte',
'searchprofile-project' => 'Hilf- un Projäktsyte',
'searchprofile-images' => 'Multimedia',
'searchprofile-everything' => 'Alles',
'searchprofile-advanced' => 'Erwyteret',
'searchprofile-articles-tooltip' => 'Sueche in $1',
'searchprofile-project-tooltip' => 'Sueche in $1',
'searchprofile-images-tooltip' => 'Noch Bilder sueche',
'searchprofile-everything-tooltip' => 'Gsamte Inhalt dursueche (au d Diskussionssyte)',
'searchprofile-advanced-tooltip' => 'Suech in wytere Namensryym',
'search-result-size' => '$1 ({{PLURAL:$2|1 Wort|$2 Werter}})',
'search-result-category-size' => '{{PLURAL:$1|1 Kategorii|$1 Kategorie}} ({{PLURAL:$2|1 Unterkategorii|$2 Unterkategorie}}, {{PLURAL:$3|1 Datei|$3 Dateie}})',
'search-result-score' => 'Relevanz: $1 %',
'search-redirect' => '(Wyterleitig $1)',
'search-section' => '(Abschnitt $1)',
'search-suggest' => 'Hesch „$1“ gmeint?',
'search-interwiki-caption' => 'Schweschterprojäkt',
'search-interwiki-default' => '$1 Ergebniss:',
'search-interwiki-more' => '(meh)',
'search-relatedarticle' => 'Verwandti',
'mwsuggest-disable' => 'Vorschleg per Ajax deaktiviere',
'searcheverything-enable' => 'In alle Namensryym sueche',
'searchrelated' => 'verwandt',
'searchall' => 'alli',
'showingresults' => "Do {{PLURAL:$1|isch '''1''' Ergebnis|sin '''$1''' Ergebniss}}, s fangt aa mit dr Nummerer '''$2.'''",
'showingresultsnum' => "Do {{PLURAL:$3|isch '''1''' Ergebnis|sin '''$3''' Ergebniss}}, s fangt aa mit dr Nummere '''$2.'''",
'showingresultsheader' => "{{PLURAL:$5|Ergebnis '''$1''' vu '''$3'''|Ergebnis '''$1 - $2''' vu '''$3'''}} fir '''$4'''",
'nonefound' => "'''Hiiwyys:''' S wäre standardmässig nume e Teil Namensryym dursuecht. Setz ''all:'' vor Dyy Suechbegriff go alli Syte (mit Diskussionssyte, Vorlage usw.) dursueche oder diräkt dr Name vum Namensruum, wu sett dursuecht wäre.",
'search-nonefound' => 'Fir Dyyni Suechaafrog sin keini Ergebniss gfunde wore.',
'powersearch' => 'Erwytereti Suechi',
'powersearch-legend' => 'Erwytereti Suech',
'powersearch-ns' => 'Suech in Namensryym:',
'powersearch-redir' => 'Wyterleitige aazeige',
'powersearch-field' => 'Suech no:',
'powersearch-togglelabel' => 'Wehl uus:',
'powersearch-toggleall' => 'Alli',
'powersearch-togglenone' => 'Keini',
'search-external' => 'Externi Suech',
'searchdisabled' => 'D {{SITENAME}}-Suech isch deaktiviert. Du chasch mit Google sueche, s cha aber syy ass dr Suechindex vu Google fir {{SITENAME}} veraltet isch.',

# Quickbar
'qbsettings' => 'Syteleischte',
'qbsettings-none' => 'Keini',
'qbsettings-fixedleft' => 'Links, fescht',
'qbsettings-fixedright' => 'Rächts, fescht',
'qbsettings-floatingleft' => 'Links, in dr Schwebi',
'qbsettings-floatingright' => 'Rächts, in dr Schwebi',
'qbsettings-directionality' => 'Fescht, abhängig vu dr Schrybrichtig vu dr gwehlte Sproch',

# Preferences page
'preferences' => 'Yystellige',
'mypreferences' => 'Ystellige',
'prefs-edits' => 'Aazahl vu dr Bearbeitige:',
'prefsnologin' => 'Nid aagmäldet',
'prefsnologintext' => 'Du muesch <span class="plainlinks">[{{fullurl:{{#Special:UserLogin}}|returnto=$1}} aagmäldet]</span> sy, für Benutzerystellige chönne z ändere',
'changepassword' => 'Passwort ändere',
'prefs-skin' => 'Benutzeroberflechi',
'skin-preview' => 'Vorschou',
'datedefault' => 'kei Aagab',
'prefs-beta' => 'Betafunktione',
'prefs-datetime' => 'Datum un Zyt',
'prefs-labs' => 'Alphafunktione',
'prefs-user-pages' => 'Benutzersyte',
'prefs-personal' => 'Benutzerdate',
'prefs-rc' => 'Letschti Änderige',
'prefs-watchlist' => 'Beobachtigslischte',
'prefs-watchlist-days' => 'Aazahl vu dr Täg, wu d Beobchtigslischt standardmässig soll umfasse:',
'prefs-watchlist-days-max' => 'Maximal {{PLURAL:$1|ei Tag|$1 Täg}}',
'prefs-watchlist-edits' => 'Maximali Zahl vu dr Yyträg:',
'prefs-watchlist-edits-max' => 'Maximali Aazahl: 1000',
'prefs-watchlist-token' => 'Beobachtigslischte-Chännzeiche:',
'prefs-misc' => 'Verschidnigs',
'prefs-resetpass' => 'Passwort ändere',
'prefs-changeemail' => 'E-Mail Adräss ändre',
'prefs-setemail' => 'E-Mail-Adräss festlaie',
'prefs-email' => 'E-Mail-Optione',
'prefs-rendering' => 'Sytedarstellig',
'saveprefs' => 'Änderige spychere',
'resetprefs' => 'Änderige doch nid spychere',
'restoreprefs' => 'Alli Standardyystellige widerhärstelle',
'prefs-editing' => 'Tekscht-Ygab',
'prefs-edit-boxsize' => 'Gressi vum Bearbeitigsfänschter.',
'rows' => 'Zylene',
'columns' => 'Spaltene',
'searchresultshead' => 'Suech-Ergäbnis',
'resultsperpage' => 'Träffer pro Syte',
'stub-threshold' => 'Gleichformatierig <a href="#" class="stub">vu chleine Syte</a> (in Byte):',
'stub-threshold-disabled' => 'Deaktiviert',
'recentchangesdays' => 'Aazahl vu dr Täg, wu d Lischt vu dr  „Letschte Änderige“ standardmässig soll umfasse:',
'recentchangesdays-max' => '(Maximal $1 {{PLURAL:$1|Tag|Täg}})',
'recentchangescount' => 'Aazahl vu Bearbeitige, wu standardmässig aazeigt wäre:',
'prefs-help-recentchangescount' => 'Des umfasst d Lischt vu dr letschte Änderige, d Versionsgschicht un d Logbiecher.',
'prefs-help-watchlist-token' => 'S Uusfille vu däm Fäld mit eme gheime Schlissel generiert e RSS-Feed fir Dyy Beobachtigslischt.
E jede, wu dää Schlissel chännt, chaa Dyy Beobachtigslischt bschaue. Wehl wäge däm e sichere Wärt.
Do het s e zuefellig generierte Wärt, wu du chasch bruche: $1',
'savedprefs' => 'Dyni Ystellige sy gspycheret worde.',
'timezonelegend' => 'Zytzone:',
'localtime' => 'Ortszyt:',
'timezoneuseserverdefault' => 'Standardzyt vum Server bruche ($1)',
'timezoneuseoffset' => 'Anderi (Unterschiid aagee)',
'timezoneoffset' => 'Unterschiid¹',
'servertime' => 'Aktuälli Serverzyt:',
'guesstimezone' => 'Vom Browser la ysetze',
'timezoneregion-africa' => 'Afrika',
'timezoneregion-america' => 'Amerika',
'timezoneregion-antarctica' => 'Antarktis',
'timezoneregion-arctic' => 'Arktis',
'timezoneregion-asia' => 'Asie',
'timezoneregion-atlantic' => 'Atlantische Ozean',
'timezoneregion-australia' => 'Auschtralie',
'timezoneregion-europe' => 'Europa',
'timezoneregion-indian' => 'Indische Ozean',
'timezoneregion-pacific' => 'Pazifische Ozean',
'allowemail' => 'andere Benutzer erlaube, dass si Ihne E-Mails chenne schicke',
'prefs-searchoptions' => 'Suechoptione',
'prefs-namespaces' => 'Namensryym',
'defaultns' => 'Sunscht in däne Namensryym sueche:',
'default' => 'Voryystellig',
'prefs-files' => 'Bilder',
'prefs-custom-css' => 'Benutzerdefinierti CSS',
'prefs-custom-js' => 'Benutzerdefiniert JS',
'prefs-common-css-js' => 'Gmeinsam CSS/JS fir alli Skin:',
'prefs-reset-intro' => 'Du chasch die Syte verwände go d Yystellige uf dr Standard zrucksetze.
Des cha nimmi ruckgängig gmacht wäre.',
'prefs-emailconfirm-label' => 'E-Mail-Bstätigung:',
'prefs-textboxsize' => 'Greßi vum Bearbeitigsfänschter',
'youremail' => 'E-Mail-Adräss:',
'username' => 'Benutzername:',
'uid' => 'Benutzer-ID:',
'prefs-memberingroups' => 'Mitglid vu dr {{PLURAL:$1|Benutzergruppe|Benutzergruppe}}:',
'prefs-registration' => 'Aamäldzyt:',
'yourrealname' => 'Echte Name:',
'yourlanguage' => 'Sproch:',
'yourvariant' => 'Sproochvariante vum Inhalt:',
'prefs-help-variant' => 'Dyni bevorzugti Schrybvariante oder Orthographi, wo de Inhalt vo däm Wiki aazeigt drin aazeigt werde söll.',
'yournick' => 'Unterschrift:',
'prefs-help-signature' => 'Byyträg uf Diskussionssyte sotte mit „<nowiki>~~~~</nowiki>“ unterschribe wäre, was derno in d Unterschrift mit eme Zytstämpfel umgwandlet wird.',
'badsig' => 'Dr Syntax vu dr Signatur isch nid giltig; bitte d HTML iberpriefe.',
'badsiglength' => 'Dyyni Unterschrift isch z lang. Si derf hegschtens $1 {{PLURAL:$1|Zeiche|Zeiche}} lang syy.',
'yourgender' => 'Gschlächt:',
'gender-unknown' => 'Kei Aagab',
'gender-male' => 'männlig',
'gender-female' => 'wyyblig',
'prefs-help-gender' => 'Optional: bruucht fir gschlächtsspezifischi Adrässierig dur d Software. Die Information isch effentlig.',
'email' => 'E-Mail',
'prefs-help-realname' => '* <strong>Dyy ächte Name</strong> (optional): Wänn du wetsch, ass Dyyni Änderige uf Dii chenne zruckgfierd wäre.',
'prefs-help-email' => 'D Aagab vun ere E-Mail isch optional, macht aber s Zueschicke vun eme Ersatzpasswort meglig, wänn Du dyy Passwort vergässe hesch.',
'prefs-help-email-others' => 'Mit andere Benutzer chasch au iber d Benutzerdiskussionssyte Kontakt ufneh, ohne dass Du dyy Identitet muesch uffelege.',
'prefs-help-email-required' => 'S brucht e giltigi E-Mail-Adräss.',
'prefs-info' => 'Basisinformatione',
'prefs-i18n' => 'Internationalisierig',
'prefs-signature' => 'Unterschrift',
'prefs-dateformat' => 'Datumsformat',
'prefs-timeoffset' => 'Zytunterschid',
'prefs-advancedediting' => 'Erwytereti Optione',
'prefs-advancedrc' => 'Erwytereti Optione',
'prefs-advancedrendering' => 'Erwytereti Optione',
'prefs-advancedsearchoptions' => 'Erwytereti Optione',
'prefs-advancedwatchlist' => 'Erwytereti Optione',
'prefs-displayrc' => 'Aazeigoptione',
'prefs-displaysearchoptions' => 'Aazeigoptione',
'prefs-displaywatchlist' => 'Aazeigoptione',
'prefs-diffs' => 'Versionsverglych',

# User preference: e-mail validation using jQuery
'email-address-validity-valid' => 'Siht giltig uus',
'email-address-validity-invalid' => 'S brucht e giltigi Adräss!',

# User rights
'userrights' => 'Benutzerrächtsverwaltig',
'userrights-lookup-user' => 'Verwalt d Gruppezuegherigkeit',
'userrights-user-editname' => 'Benutzername:',
'editusergroup' => 'Ändere vo Benutzerrächt',
'editinguser' => "Am Ändere vu dr Benutzerrächt vu '''[[User:$1|$1]]''' $2",
'userrights-editusergroup' => 'Bearbeit d Gruppezuegherigkeit vum Benutzer',
'saveusergroups' => 'Spychere d Gruppezuegherigkeit',
'userrights-groupsmember' => 'Mitgliid vu:',
'userrights-groupsmember-auto' => 'Automatisch Mitglid vu:',
'userrights-groups-help' => 'Du chasch d Gruppezuegherigkeit fir dää Benutzer ändere:
* E markiert Chäschtli bedytet, ass dr Benutzer Mitgliid vu däre Gruppe isch
* E * bedytet, ass Du s Benutzerrächt nit wider chasch zruckneh, wänn s erteilt isch (oder umgchehrt).',
'userrights-reason' => 'Grund:',
'userrights-no-interwiki' => 'Du hesch nit d Berächtigung, Benutzerrächt in andere Wiki z ändere.',
'userrights-nodatabase' => 'D Datebank $1 git s nit oder si isch nit lokal.',
'userrights-nologin' => 'Du muesch Di mit eme Ammanne-Benutzerkonto [[Special:UserLogin|aamälde]], zum Benutzerrächt z ändere.',
'userrights-notallowed' => 'Du hesch nit d Berächtigung zum Benutzerrächt vergee.',
'userrights-changeable-col' => 'Gruppezuegherigkeit, wu Du chasch ändere',
'userrights-unchangeable-col' => 'Gruppezuegherigkeit, wu Du nit chasch ändere',

# Groups
'group' => 'Grupp:',
'group-user' => 'Benutzer',
'group-autoconfirmed' => 'Bstetigti Benutzer',
'group-bot' => 'Bötli',
'group-sysop' => 'Ammanne',
'group-bureaucrat' => 'Bürokrate',
'group-suppress' => 'Oversighter',
'group-all' => '(alli)',

'group-user-member' => '{{GENDER:$1|Benutzer|Benutzeri}}',
'group-autoconfirmed-member' => '{{GENDER:$1|Automatisch bstätigter Benutzer|Automatisch bstätigti Benutzeri}}',
'group-bot-member' => '{{GENDER:$1|Bötli}}',
'group-sysop-member' => '{{GENDER:$1|Ammann|Amtsfrou}}',
'group-bureaucrat-member' => '{{GENDER:$1|Bürokrat|Bürokrati}}',
'group-suppress-member' => '{{GENDER:$1|Oversighter|Oversighterin}}',

'grouppage-user' => '{{ns:project}}:Benutzer',
'grouppage-autoconfirmed' => '{{ns:project}}:Bstetigti Benutzer',
'grouppage-bot' => '{{ns:project}}:Bötli',
'grouppage-sysop' => '{{ns:project}}:Ammanne',
'grouppage-bureaucrat' => '{{ns:project}}:Bürokrate',
'grouppage-suppress' => '{{ns:project}}:Oversighter',

# Rights
'right-read' => 'Syte läse',
'right-edit' => 'Syte bearbeite',
'right-createpage' => 'Syten aalege (usser Diskussionssyte)',
'right-createtalk' => 'Diskussionssyte aalege',
'right-createaccount' => 'Benutzerkonto aalege',
'right-minoredit' => 'Bearbeitige as chly markiere',
'right-move' => 'Syte verschiebe',
'right-move-subpages' => 'Syte verschiebe mitsamt dr Untersyte',
'right-move-rootuserpages' => 'Haupt-Benutzersyte verschiebe',
'right-movefile' => 'Dateie verschiebe',
'right-suppressredirect' => 'Bim Verschiebe s Aalege vun ere Wyterleitig unterdrucke',
'right-upload' => 'Dateie uffelade',
'right-reupload' => 'E Datei, wu s git, iberschryybe',
'right-reupload-own' => 'E Datei iberschryybe, wu mer sälber uffeglade het',
'right-reupload-shared' => 'Lokals Iberschryybe vun ere Datei, wu in eme gmeinsam gnutzte Repositorium vorhanden isch',
'right-upload_by_url' => 'E Datei uffelade vun ere URL-Adräss',
'right-purge' => 'Sytecache lääre ohni Ruckfrog',
'right-autoconfirmed' => 'Halbgschitzti Syte bearbeite',
'right-bot' => 'Behandlig as automatische Prozess',
'right-nominornewtalk' => 'Chleini Bearbeitige an Diskussionssyte fiehre nit zuen ere „Neiji Nochrichte“-Aazeig',
'right-apihighlimits' => 'Hecheri Limit in API-Abfroge',
'right-writeapi' => 'D writeAPI verwände',
'right-delete' => 'Syte lesche',
'right-bigdelete' => 'Syte lesche mit grosse Versionsgschichte',
'right-deletelogentry' => 'Einzelni Logbuech-Yytreg lesche un widerhärstelle',
'right-deleterevision' => 'Lesche un Widerherstelle vu einzelne Versione',
'right-deletedhistory' => 'Gleschti Versione in der Versionsgschicht aaluege, ohni dr zuegherig Text',
'right-deletedtext' => 'Gleschti Text un Versionsunterschid zwische gleschte Versionen aaluege',
'right-browsearchive' => 'Gleschti Syte sueche',
'right-undelete' => 'Syte widerherstelle',
'right-suppressrevision' => 'Versione, wu au vor Ammanne verborge sin, aaluege un widerherstelle',
'right-suppressionlog' => 'Privati Logbiecher aaluege',
'right-block' => 'Benutzer sperre (Schrybrächt)',
'right-blockemail' => 'Benutzer am Verschicke vu E-Mail hindere',
'right-hideuser' => 'E Benutzername sperre un verberge',
'right-ipblock-exempt' => 'Uusnahm vu IP-Sperrine, Autoblock und Rangesperre',
'right-proxyunbannable' => 'Uusnahm vu automatische Proxysperrine',
'right-unblockself' => 'Sich sälber entsperre',
'right-protect' => 'Syteschutzstatus änderen un gschitzti Syte bearbeite',
'right-editprotected' => 'Gschitzti Syte bearbeite (ohni Kaskadeschutz)',
'right-editinterface' => 'Benutzerinterface bearbeite',
'right-editusercssjs' => 'Bearbeite vu CSS- und JS-Dateie vu andere Benutzer',
'right-editusercss' => 'Bearbeite vu CSS-Dateie vu andere Benutzer',
'right-edituserjs' => 'Bearbeite vu JS-Dateie vu andere Benutzer',
'right-rollback' => 'D Bearbeitige vum letschte Benutzer, wu ne einzelni Syte bearbeitet het, schnell zrucksetze',
'right-markbotedits' => 'Schnell zruckgsetzti Bearbeitige as Bot-Bearbeitig markiere',
'right-noratelimit' => 'Kei Bschränkig dur Limit',
'right-import' => 'Syte us andere Wiki importiere',
'right-importupload' => 'Syten iber Dateie importiere',
'right-patrol' => 'Markier Bearbeitige vu Andere as kontrolliert',
'right-autopatrol' => 'Markier eigeni Bearbeitige automatisch as kontrolliert',
'right-patrolmarks' => 'D Kontrollmarkierige in dr letschten Änderige aaluege',
'right-unwatchedpages' => 'D Lischt vu nit beobachtete Syte aaluege',
'right-mergehistory' => 'Versionsgschichte vu Syte zämefiere',
'right-userrights' => 'Benutzerrächt bearbeite',
'right-userrights-interwiki' => 'Benutzerrächt in andere Wiki bearbeite',
'right-siteadmin' => 'Datebank sperre un entsperre',
'right-override-export-depth' => 'Exportier Syte mitsamt dr vergleichte Syte bis zuen ere Tiefi vu 5',
'right-sendemail' => 'E-Mail an anderi Benutzer schicke',
'right-passwordreset' => 'Passwort vun eme Benutzer zruggsetze',

# User rights log
'rightslog' => 'Benutzerrächt-Logbuech',
'rightslogtext' => 'Des ischs Logbuech vun de Änderunge on Bnutzerrechte.',
'rightslogentry' => 'het d Benutzerrächt fir „$1“ vu „$2“ uf „$3“ gänderet',
'rightslogentry-autopromote' => 'd Zueornig zue dr Benutzergruppe isch automatisch vu $2 in $3 gänderet wore',
'rightsnone' => '(keini)',

# Associated actions - in the sentence "You do not have permission to X"
'action-read' => 'die Syte z läse',
'action-edit' => 'die Syte z bearbeite',
'action-createpage' => 'Syten aazlege',
'action-createtalk' => 'Diskussionssyten aazlege',
'action-createaccount' => 'e Benutzerkonto aazlege',
'action-minoredit' => 'die Bearbeitig as chlei z markiere',
'action-move' => 'die Syte z verschiebe',
'action-move-subpages' => 'die Syte un di zuegherige Untersyte z verschiebe',
'action-move-rootuserpages' => 'Haupt-Benutzersyte z verschiebe',
'action-movefile' => 'Die Datei verschiebe',
'action-upload' => 'Dateie uffezlade',
'action-reupload' => 'die vorhandene Datei z iberschryybe',
'action-reupload-shared' => 'die Datei us em gmeinsam gnutzte Repositorium z iberschryybe',
'action-upload_by_url' => 'Dateie vun ere Netzadräss (URL) uffezlade',
'action-writeapi' => 'd writeAPI z verwände',
'action-delete' => 'Syte z lesche',
'action-deleterevision' => 'Versione z lesche',
'action-deletedhistory' => 'd Lischt vu dr gleschte Versione vu däre Syte aazluege',
'action-browsearchive' => 'noch gleschte Syte z sueche',
'action-undelete' => 'die Syte wider herzstelle',
'action-suppressrevision' => 'di versteckt Version aazluege un wider herzstelle',
'action-suppressionlog' => 's privat Logbuech aazluege',
'action-block' => 'dä Benutzer z sperre',
'action-protect' => 'dr Schutzstatus vu Syte z ändere',
'action-rollback' => 'd Änderige vum letschte Bearbeiter vun ere bstimmte Syte schnäll zruckzsetze',
'action-import' => 'Syte us eme andere Wiki z importiere',
'action-importupload' => 'Syte z importiere iber s Uffelade vun ere Datei',
'action-patrol' => 'd Bearbeitige vu andere Benutzer as kontrolliert z markiere',
'action-autopatrol' => 'di eigene Bearbeitige as kontrolliert z markiere',
'action-unwatchedpages' => 'd Lischt vu dr nit beobachtete Syten aazluege',
'action-mergehistory' => 'd Versionegschichte vu Syte zämezfiere',
'action-userrights' => 'Benutzerrächt z ändere',
'action-userrights-interwiki' => 'd Rächt vu Benutzer in andere Wiki z ändere',
'action-siteadmin' => 'd Datebank z sperre oder frejzgee',
'action-sendemail' => 'E-Mail z schicke',

# Recent changes
'nchanges' => '$1 {{PLURAL:$1|Änderig|Änderige}}',
'recentchanges' => 'Letschti Änderige',
'recentchanges-legend' => 'Optione vu dr Aazeig',
'recentchanges-summary' => 'Uf däre Syte chasch di letschte Änderige in däm Wiki aaluege.',
'recentchanges-feed-description' => 'Di letschten Änderige vo {{SITENAME}} i däm Feed abonniere.',
'recentchanges-label-newpage' => 'Die Bearbeitig het e neji Syte aagleit',
'recentchanges-label-minor' => 'Des isch e chleini Änderig',
'recentchanges-label-bot' => 'Die Bearbeitig isch dur e Bott uusgfiert wore',
'recentchanges-label-unpatrolled' => 'Die Bearbeitig isch nonig vun eme Fäldhieter aagluegt wore',
'rcnote' => "Azeigt {{PLURAL:$1|wird '''1''' Änderig|wärde di letschte '''$1''' Änderige}} {{PLURAL:$2|vom letschte Tag|i de letschte '''$2''' Täg}} (Stand: $4, $5)",
'rcnotefrom' => 'Des sin d Ändrige syter <b>$2</b> (bis zem <b>$1</b> zeigt).',
'rclistfrom' => '<small>Nöji Änderige ab $1 aazeige (UTC)</small>',
'rcshowhideminor' => 'Chlynigkeite $1',
'rcshowhidebots' => 'Bots $1',
'rcshowhideliu' => 'Aagmoldene Benützer $1',
'rcshowhideanons' => 'Nid aagmäldete Benutzer $1',
'rcshowhidepatr' => 'Vum Fäldhieter aagluegti Änderige $1',
'rcshowhidemine' => 'Eigeni Änderige $1',
'rclinks' => 'Zeig di letschte $1 Änderige vo de vergangene $2 Täg.<br />$3',
'diff' => 'Unterschid',
'hist' => 'Versione',
'hide' => 'usblände',
'show' => 'yblände',
'minoreditletter' => 'C',
'newpageletter' => 'N',
'boteditletter' => 'B',
'number_of_watching_users_pageview' => '[$1 {{PLURAL:$1|Benutzer, wu beobachtet|Benutzer, wu beobachte}}]',
'rc_categories' => 'Nume Syten us dr Kategorie (trennt mit „|“):',
'rc_categories_any' => 'Alli',
'rc-change-size-new' => '$1 {{PLURAL:$1|Byte|Byte}} no dr Änderig',
'newsectionsummary' => 'Neje Abschnitt /* $1 */',
'rc-enhanced-expand' => 'Detail aazeige (brucht JavaScript)',
'rc-enhanced-hide' => 'Detail verstecke',
'rc-old-title' => 'urspringlig aaglait as „$1“',

# Recent changes linked
'recentchangeslinked' => 'Verlinktes prüefe',
'recentchangeslinked-feed' => 'Verlinktes prüefe',
'recentchangeslinked-toolbox' => 'Verlinktes prüefe',
'recentchangeslinked-title' => 'Änderigen a Sytene, wo „$1“ druf verlinkt',
'recentchangeslinked-noresult' => 'Kener Änderigen a verlinkte Sytenen im usgwählte Zytruum.',
'recentchangeslinked-summary' => "Die Spezialsyte zeigt d Änderige vo allne Syte, wo ei vo dir bestimmti Syte druf verlinkt, bzw. vo allne Syte, wo zu eire vo dir bestimmte Kategorie ghöre.
Sytene, wo zu dyre [[Special:Watchlist|Beobachtigslischte]] ghöre, erschyne '''fett'''.",
'recentchangeslinked-page' => 'Syte:',
'recentchangeslinked-to' => 'Zeig Änderige uf Syte, wu uff die Syte verwyyse',

# Upload
'upload' => 'Datei uffelade',
'uploadbtn' => 'Bild lokal ufelade',
'reuploaddesc' => 'Abbrächen un zrugg zue dr Syte "Uffelade"',
'upload-tryagain' => 'Gändereti Dateibschryybig abschicke',
'uploadnologin' => 'Nit aagmäldet',
'uploadnologintext' => 'Si mien [[Special:UserLogin|aagmäldet syy]], zum Dateie uffelade z chenne.',
'upload_directory_missing' => 'S Upload-Verzeichnis ($1) fählt un het au dur dr Netzserver nit chenne aagleit wäre.',
'upload_directory_read_only' => 'Dr Netzserver het kei Schryybrächt fir s Upload-Verzeichnis ($1).',
'uploaderror' => 'Fähler bim Uffelade',
'upload-recreate-warning' => "'''Warnig: E Datei mit däm Name isch scho mol glescht oder verschobe wore.'''

Do het s e Uuszug us em Lesch- un eme Verschiebigslogbuech:",
'uploadtext' => "Verwänd des Formular unte zum Dateie uffelade.
Zum friejer uffegladeni Dateie aazluege oder z sueche lueg uf dr [[Special:FileList|Lischt vu uffegladene Dateie]],
Weli Dateie uffeglade sin, sihsch im [[Special:Log/upload|Logbuech vu dr uffegladene Dateie]], weli glescht sin im [[Special:Log/delete|Lesch-Logbuech]]

Zum e Datei oder e Bild in ere Syte yyzböue, schryybsch eifach:
* '''<nowiki>[[</nowiki>{{ns:file}}<nowiki>:file.jpg]]</nowiki>''' fir di voll Version vu dr Datei
* '''<nowiki>[[</nowiki>{{ns:file}}<nowiki>:file.png|al text]]</nowiki>''' fir e 200 Pixel grossi Version im e Chaschte mit 'alt text' as Bschrybig
* '''<code><nowiki>[[</nowiki>{{ns:media}}<nowiki>:File.ogg]]</nowiki></code>''' fir e diräkt Link zuer dr Datei ohni ass si aazeigt wird",
'upload-permitted' => 'Dateitype, wu erlaubt sin: $1.',
'upload-preferred' => 'Dateitype, wu bevorzugt sin: $1.',
'upload-prohibited' => 'Dateitype, wu nit erlaubt sin: $1.',
'uploadlog' => 'Datei-Logbuech',
'uploadlogpage' => 'Dateie-Logbuech',
'uploadlogpagetext' => 'Des isch s Logbuech vu dr uffegladene Dateie.
Lueg au d [[Special:NewFiles|Galerii vu neije Dateie]] fir e visuälle Iberblick.',
'filename' => 'Dateiname',
'filedesc' => 'Bschryybig',
'fileuploadsummary' => 'Bschryybig/Quälle:',
'filereuploadsummary' => 'Dateiänderige:',
'filestatus' => 'Urheberrächts-Status:',
'filesource' => 'Quälle:',
'uploadedfiles' => 'Uffegladeni Dateie',
'ignorewarning' => 'Warnig ignoriere un d Datei spychere',
'ignorewarnings' => 'Warnige ignoriere',
'minlength1' => 'Dateinäme mien zmindescht e Buechstab lang syy.',
'illegalfilename' => 'Im Dateiname „$1“ het s zmindescht ei Zeiche, wu nit erlaubt isch. Bitte gib dr Datei e andere Name un versuech nomol si uffezlade.',
'filename-toolong' => 'Dateiname dürfe nit grösser wie 240 Bytes sy.',
'badfilename' => 'Dr Dateiname isch in „$1“ gänderet wore.',
'filetype-mime-mismatch' => 'D Dateierwyterig „.$1“ passt nit zum MIME-Typ ($2).',
'filetype-badmime' => 'Dateie mit em MIME-Typ „$1“ derfe nit uffeglade wäre.',
'filetype-bad-ie-mime' => 'Die Datei cha nit uffeglade wäre, wel dr Internet Explorer si as „$1“ kennt, wu e nit erlaubte, villicht gferlige Dateityp isch.',
'filetype-unwanted-type' => "'''„.$1“''' isch e Dateiformat, wu nit gwinscht isch. Erlaubt {{PLURAL:$3|isch s Dateiformat|sin d Dateiformat}}: $2.",
'filetype-banned-type' => "'''„.$1“''' {{PLURAL:$4|isch e Dateiformat, wu nit erlaubt isch|sin Dateitype, wu nit erlaubt sin}}.
 Erlaubt {{PLURAL:$3|isch s Dateiformat|sin d Dateiformat}} $2.",
'filetype-missing' => 'D Datei, wu soll uffeglade wäre, het kei Erwyterig (z. B. „.jpg“).',
'empty-file' => 'D Datei, wu Du ibertrait hesch, isch läär.',
'file-too-large' => 'D Datei, wu Du ibertrait hesch, isch z groß.',
'filename-tooshort' => 'Dr Dateiname isch z churz.',
'filetype-banned' => 'Dää Dateityp isch gsperrt.',
'verification-error' => 'Die Datei het d Dateipriefig nit bstande.',
'hookaborted' => 'D Änderig, wu Du versuecht hesch, isch wäg eme Erwyterigs-Hooks abbroche wore.',
'illegal-filename' => 'Dr Dateiname isch nit erlaubt.',
'overwrite' => 'S Iberschryybe vun ere Datei, wu s scho git, isch nit erlaubt.',
'unknown-error' => 'S het e nit bekannte Fähler gee.',
'tmp-create-error' => 'E tämporäri Datei het nit chenne aagleit wäre.',
'tmp-write-error' => 'Fähler bim Schryybe vu dr tämporäre Datei',
'large-file' => 'D Dateigressi sott, wänn s goht, nit gresser syy wie $1. Die Datei isch $2 gross.',
'largefileserver' => 'Die Datei isch gresser wie die vum Server yygstellti Maximalgressi.',
'emptyfile' => 'Di uffeglade Datei isch schyyns läär. Dr Grund cha ne Tippfähler im Dateiname syy. Bitte iberprief, eb du die Datei wirkli wit uffelade.',
'windows-nonascii-filename' => 'Des Wiki unterstitzt kei Dateinäme mit Sonderzeiche.',
'fileexists' => 'S git scho ne Datei mit däm Name.
Wänn Du uf "Datei spichere" drucksch, no wird die Datei iberschribe.
Bitte prief <strong>[[:$1]]</strong>, wänn Der nit sicher bisch.
[[$1|thumb]]',
'filepageexists' => 'E Bschryybigssyte isch scho as <strong>[[:$1]]</strong> aagleit wore, s git aber kei Datei mit däm Name.
Die Zämmefassig, wu Du yygee hesch, wird nit uf d Bschryybigssyte ibernuh.
Du muesch d Bschryybigssyte noch em Uffelade vu dr Datei no manuäll bearbeite.
[[$1|thumb]]',
'fileexists-extension' => 'S git scho ne Datei mit eme ähnlige Name: [[$2|thumb]]
* Name vu Datei, wu soll uffeglade were: <strong>[[:$1]]</strong>
* Name vu dr Datei, wu s scho git: <strong>[[:$2]]</strong>
Bitte wehl e andre Name.',
'fileexists-thumbnail-yes' => "Die Datei isch schyyns e Bild mit ere verringerte Gressi ''(thumbnail)''. [[$1|thumb]]
Bitte prief d Datei <strong>[[:$1]]</strong>.
Wänn s Bild in dr Originalgressi isch, no isch s nit netig, ass e extra Vorschaubild uffeglade wird.",
'file-thumbnail-no' => "Dr Dateiname fangt mit <strong>$1</strong> aa. Des wyyst uf e Bild mit ere verringerte Gressi ''(thumbnail)'' hi.
Bitte prief, eb D s Bild in voller Uflesig vorlige hesch un lad derno des unter em Originalname uffe.",
'fileexists-forbidden' => 'S git scho ne Datei mit däm Name. Si cha nit iberschribe wäre. Bitte gang zruck un lad die Datei unter eme andere Name uffe. [[File:$1|thumb|center|$1]]',
'fileexists-shared-forbidden' => 'S git scho ne Datei mit däm Name im Zentrale Mediearchiv.
Wänn Du die Datei einewäg wit uffelade, gang bitte zruck un ändere dr Name.
[[File:$1|thumb|center|$1]]',
'file-exists-duplicate' => 'Die Datei isch e Duplikat vu {{PLURAL:$1|däre Datei|däne $1 Dateie}}:',
'file-deleted-duplicate' => 'E identischi Version vu däre Datei ([[:$1]]) isch friejer scho mol glescht wore. Iberprief s Leschlogbuech, voreb Du si uffeladesch.',
'uploadwarning' => 'Warnig',
'uploadwarning-text' => 'Bitte tue unte d Dateibsschryybig ändere un versuech s nomol.',
'savefile' => 'Datei spychere',
'uploadedimage' => 'het „[[$1]]“ ufeglade',
'overwroteimage' => 'het e neiji Version vu „[[$1]]“ uffeglade',
'uploaddisabled' => 'Uffelade deaktiviert',
'copyuploaddisabled' => 'S Uffelade iber URL isch abschalte wore.',
'uploadfromurl-queued' => 'Dyy Uffeladig isch jetz in dr Warteschlang.',
'uploaddisabledtext' => 'S Uffelade vu Dateie isch deaktiviert.',
'php-uploaddisabledtext' => 'S Uffelade vu PHP-Dateie isch deaktiviert wore. Bitte iberprief d file_uploads-Yystellig.',
'uploadscripted' => 'In däre Datei git s HTML- oder Scriptcode, wu fälschligerwyys vun eme Webbrowser usgfiert chennt were.',
'uploadvirus' => 'In däre Datei het s e Virus! Detail: $1',
'uploadjava' => 'Des isch e ZIP-Datei, wu s e CLASS-Datei vu Java din het.
S Uffelade vu Java-Dateien isch nit gstattet, wel si s Umgoh vu Sicherheitsyyschränkige chennte megli mache.',
'upload-source' => 'Quälldatei',
'sourcefilename' => 'Quälldatei:',
'sourceurl' => 'Quäll-URL:',
'destfilename' => 'Ziilname:',
'upload-maxfilesize' => 'Maximali Dateigressi: $1',
'upload-description' => 'Dateibschryybig',
'upload-options' => 'Optione fir s Uffelade',
'watchthisupload' => 'Die Syte beobachte',
'filewasdeleted' => 'E Datei mit däm Name isch scho mol uffeglade wore un isch in dr Zwischezyt wider glescht wore. Bitte prief zerscht dr Yytrag im $1, voreb Du die Datei wirkli spycheresch.',
'filename-bad-prefix' => "Dr Dateiname fangt mit '''„$1“''' aa. Des isch isch normalerwyys dr Dateiname, wu vun ere Digitalkamera vorgee wird un d Datei nit bschryybt.
Bitte gib dr Datei e Name, wu dr Inhalt besser bschryybt.",
'upload-success-subj' => 'Erfolgryych uffegelade',
'upload-success-msg' => 'Dyyni vu [$2] uffeglade Datei isch jetz do verfiegbar: [[:{{ns:file}}:$1]]',
'upload-failure-subj' => 'Fähler bim Uffelade',
'upload-failure-msg' => 'S het e Probläm gee mit Dyyre vu [$2] uffegladene Datei:

$1',
'upload-warning-subj' => 'Warnig bim Uffelade',
'upload-warning-msg' => 'S het e Probläm gee bim Uffelade vu [$2]. Du chasch zruckgoh zum [[Special:Upload/stash/$1|Ufffeladformular]] go des Probläm lese.',

'upload-proto-error' => 'Falschs Protokoll',
'upload-proto-error-text' => 'D URL muess mit <code>http://</code> oder <code>ftp://</code> aafange.',
'upload-file-error' => 'Interne Fähler',
'upload-file-error-text' => 'Bim Aalege vun ere temporäre Datei uf em Server isch e interne Fähler uftrette.
Bitte informier e [[Special:ListUsers/sysop|Ammann]].',
'upload-misc-error' => 'Nit bekannte Fähler bim Uffelade',
'upload-misc-error-text' => 'Bim Uffelade isch e nit bekannte Fähler uftrette.
Prief d URL uf Fähler un dr Online-Status vu dr Syte un versuech s no mol.
Wänn s Problem alno uftritt, informier e [[Special:ListUsers/sysop|Ammann]].',
'upload-too-many-redirects' => 'In dr URL het s zvyl Wyterleitige',
'upload-unknown-size' => 'Nit bekannti Greßi',
'upload-http-error' => 'E HTTP-Fähler isch ufträtte: $1',
'upload-copy-upload-invalid-domain' => 'As Kopi uffeladbari Dateie sin iber die Domain nit verfiegbar.',

# File backend
'backend-fail-stream' => 'D Datei $1 het nit chenne ibertrait wäre.',
'backend-fail-backup' => 'D Datei $1 het nit chenne gsicheret wäre.',
'backend-fail-notexists' => 'D Datei $1 git s nit.',
'backend-fail-hashes' => 'D Streiwärt vu dr Datei hän nit zum Verglych chenne abgruefe wäre.',
'backend-fail-notsame' => 'S git scho ne Datei $1, wu nit idäntisch isch.',
'backend-fail-invalidpath' => '$1 isch kei giltige Pfad zum Spychere.',
'backend-fail-delete' => 'D Datei $1 het nit glöscht werre kinne.',
'backend-fail-alreadyexists' => 'D Datei „$1“ git s scho.',
'backend-fail-store' => 'D Datei $1 het nit chenne unter em Name $2 gspycheret wäre.',
'backend-fail-copy' => 'D Datei $1 het nit no $2 chenne kopiert wäre.',
'backend-fail-move' => 'D Datei $1 het nit no $2 chenne verschobe wäre.',
'backend-fail-opentemp' => 'Di temporär Datei het nit chenne ufgmacht wäre.',
'backend-fail-writetemp' => 'Di temporär Datei het nit chenne gschribe wäre.',
'backend-fail-closetemp' => 'Di temporär Datei het nit chenne zuegmacht wäre.',
'backend-fail-read' => 'D Datei $1 het nit chenne gläse wäre.',
'backend-fail-create' => 'D Datei $1 het nit chenne gspyycheret wäre.',
'backend-fail-maxsize' => 'D Datei $1 het nit chenne gspycheret wäre, wel si greßer isch wie {{PLURAL:$2|ei Byte|$2 Byte}}.',
'backend-fail-readonly' => 'S Spycher-Backend „$1“ isch zurzyt im Läsemodus. Dr Grund, wu aagee isch, isch: „$2“',
'backend-fail-synced' => 'D Datei „$1“ isch im intärne Spycher-Backend in eme inkonsischtänte Zuestand.',
'backend-fail-connect' => 'S het kei Verbindig chenne härgstellt wäre zum Spycher-Backend „$1“.',
'backend-fail-internal' => 'Im Spycher-Backend „$1“ isch e nit bekannte Fähler ufträtte.',
'backend-fail-contenttype' => 'Dr Inhaltstyp vu dr Datei, wu im Pfad „$1“ gspycheret soll wäre, het nit chenne bstimmt wäre.',
'backend-fail-batchsize' => 'E Bygiverarbeitigsdatei, wu s {{PLURAL:$1|ei Operation|$1 Operatione}} din het, isch an s Spycher-Backend gschickt wore. D Gränz lyt aber bi {{PLURAL:$2|eire Operation|$2 Operatione}}.',
'backend-fail-usable' => 'D Datei „$1“ het nit chönne abgruefe oder gspyycheret werde, entweder wyl kei Verzeichniss vorhande isch oder wyl kei Berächtigung hesch.',

# File journal errors
'filejournal-fail-dbconnect' => 'S het kei Verbindig chenne härgstellt würe zue dr Journaldatebank vum Spycher-Backend „$1“.',
'filejournal-fail-dbquery' => 'D Journaldatebank vum Spycher-Backend „$1“ het nit chenne aktualisiert wäre.',

# Lock manager
'lockmanager-notlocked' => '„$1“ het nit chenne entsperrt wäre, wel s kei Sperrig git.',
'lockmanager-fail-closelock' => 'D Sperrdatei fir „$1“ het nit chenne zuegmacht wäre.',
'lockmanager-fail-deletelock' => 'D Sperrdatei fir „$1“ het nit chenne glescht wäre.',
'lockmanager-fail-acquirelock' => 'D Sperri fir „$1“ het nit chenne abgruefe wäre.',
'lockmanager-fail-openlock' => 'D Sperrdatei fir „$1“ het nit chenne ufgmacht wäre.',
'lockmanager-fail-releaselock' => 'D Sperri fir „$1“ het nit chenne frejgee wäre.',
'lockmanager-fail-db-bucket' => 'Mit em Sammelabruef $1 hän nit gnue Verbindige zue Sperrdatebanke chenne härgstellt wäre.',
'lockmanager-fail-db-release' => 'D Sperrine uf dr Datebank $1 hän nit chenne frejgee wäre.',
'lockmanager-fail-svr-acquire' => 'D Sperrine uf em Server $1 hän nit chenne abgruefe wäre.',
'lockmanager-fail-svr-release' => 'D Sperrine uf em Server $1 hän nit chenne frejgee wäre.',

# ZipDirectoryReader
'zip-file-open-error' => 'S het e Fähler gee bim Ufmache vu dr Datei fir d ZIP-Iberpriefig.',
'zip-wrong-format' => 'D Datei, wu Du aagee hesch, isch kei ZIP-Datei.',
'zip-bad' => 'D Datei isch kaputt oder e ZIP-Datei, wu us andere Grind nit cha gläse wäre.
Si cha wäge däm nit richtig iberprieft wäre.',
'zip-unsupported' => 'Die ZIP-Datei het Komprimierigseigeschafte, wu nit vu MediaWiki unterstitzt wäre.
Si cha wäge däm nit richtig iberprieft wäre.',

# Special:UploadStash
'uploadstash' => 'Vorabspycherig binm Uffelade',
'uploadstash-summary' => 'Die Syte macht dr Zuegriff uf Dateie megli, wu uffeglade wore sin (oder grad uffeglade wäre), wu aber nonig uf em Wiki publiziert wore sin. Die Dateie cha no niemer aaluege, ußer däjenig, wu si uffelade duet.',
'uploadstash-clear' => 'Di vorab gspycherete Dateie uuseneh',
'uploadstash-nofiles' => 'S git keini vorab gspycherete Dateie.',
'uploadstash-badtoken' => 'S Uuseneh vu dr vorab gspycherete Dateien isch fählgschlaa, villicht wel d Sitzigsdaten abglofe sin. Bitte versuech s nomol.',
'uploadstash-errclear' => 'S Uuseneh vu dr vorab gspycherete Dateie isch fählgschlaa.',
'uploadstash-refresh' => 'Lischt vu dr Dateie aktualisiere',
'invalid-chunk-offset' => 'Nit giltige Startpunkt',

# img_auth script messages
'img-auth-accessdenied' => 'Zuegriff verweigeret',
'img-auth-nopathinfo' => 'PATH_INFO fählt.
Dyy Server isch nit derfir yygrichtet, die Information wyterzgee.
S chennt CGI-basiert syy un unterstitzt img_auth nit.
Lueg https://www.mediawiki.org/wiki/Manual:Image_Authorization.',
'img-auth-notindir' => 'Dr gwinscht Pfad isch nit im konfigurierte Uploadverzeichnis.',
'img-auth-badtitle' => 'Giltige Titel vu „$1“ cha nit aagleit wäre.',
'img-auth-nologinnWL' => 'Du bisch nit aagmäldet un „$1“ isch nit in dr wyße Lischt.',
'img-auth-nofile' => 'Datei „$1“ git s nit.',
'img-auth-isdir' => 'Du versuechsch, uf e Verzeichnis „$1“ zuezgryfe.
Nume Dateizuegriff isch erlaubt.',
'img-auth-streaming' => 'Am Lade vu „$1“.',
'img-auth-public' => 'img_auth.php git Dateie vun eme privaten Wiki uus.
Des Wiki isch as effentlig Wiki konfiguriert.
Us Sicherheitsgrinde isch img_auth.php deaktiviert.',
'img-auth-noread' => 'Benutzer derf „$1“ nit läse.',
'img-auth-bad-query-string' => 'D URL wyst e nit giltigi Abfrogzeichnefolg uf.',

# HTTP errors
'http-invalid-url' => 'Nit giltigi URL: $1',
'http-invalid-scheme' => 'URL mit em Schema „$1“ wäre nit unterstitzt',
'http-request-error' => 'Fähler bim Verschicke vu dr Aafrog.',
'http-read-error' => 'Fähler bim Läse vu HTTP.',
'http-timed-out' => 'Uuszyt bim HTTP-Versuech.',
'http-curl-error' => 'Fähler bim Ufsueche vu dr URL: $1',
'http-host-unreachable' => 'URL isch nit z verwitsche',
'http-bad-status' => 'Bi dr HTTP-Aafrog isch e Fähler ufdrätte: $1 $2',

# Some likely curl errors. More could be added from <http://curl.haxx.se/libcurl/c/libcurl-errors.html>
'upload-curl-error6' => 'URL isch nit z verwitsche',
'upload-curl-error6-text' => 'D URL, wu aagee woren isch, isch nit z verwitsche. Prief d URL uf Fähler un dr Online-Status vu dr Syte.',
'upload-curl-error28' => 'Zyt iberschritte bim Uffelade',
'upload-curl-error28-text' => 'D Syte brucht z lang fir e Antwort. Prief, eb d Syte online isch, wart e Rung un versuech s derno nomol. S cha au sinnvoll syy, s speter nomol z versueche.',

'license' => 'Lizänz:',
'license-header' => 'Lizänzierig',
'nolicense' => 'kei Voruswahl',
'license-nopreview' => '(s isch kei Vorschau verfiegbar)',
'upload_source_url' => ' (giltige, effentli zuegänglig URL)',
'upload_source_file' => ' (e Datei uf Dyynem Computer)',

# Special:ListFiles
'listfiles-summary' => 'Die Spezialsyte lischtet alli uffegladene Dateie uf. Wänn noch eme bstimmte Benutzer gfilteret wird, wäre nume die Dateie zeigt, wun er di letschte Version uffeglade het.',
'listfiles_search_for' => 'Suech noch Datei:',
'imgfile' => 'Datei',
'listfiles' => 'Lischte vo Bilder',
'listfiles_thumb' => 'Vorschaubilder',
'listfiles_date' => 'Datum',
'listfiles_name' => 'Name',
'listfiles_user' => 'Benutzer',
'listfiles_size' => 'Gressi',
'listfiles_description' => 'Bschryybig',
'listfiles_count' => 'Versione',

# File description page
'file-anchor-link' => 'Bildli',
'filehist' => 'Dateiversione',
'filehist-help' => 'Klick uf e Zytpunkt zu aazeige, wie s dert usgsäh het.',
'filehist-deleteall' => 'Alli Versione lesche',
'filehist-deleteone' => 'Die Version lesche',
'filehist-revert' => 'zrucksetze',
'filehist-current' => 'aktuell',
'filehist-datetime' => 'Version vom',
'filehist-thumb' => 'Vorschaubild',
'filehist-thumbtext' => 'Vorschaubild fir Version vum $1',
'filehist-nothumb' => 'Kei Vorschaubild vorhande',
'filehist-user' => 'Benutzer',
'filehist-dimensions' => 'Mäß',
'filehist-filesize' => 'Dateigrößi',
'filehist-comment' => 'Kommentar',
'filehist-missing' => 'Datei fählt',
'imagelinks' => 'Verwändig vu dr Datei',
'linkstoimage' => 'Di {{PLURAL:$1|Syte|$1 Sytene}} händ en Link zu dem Bild:',
'linkstoimage-more' => 'Meh as {{PLURAL:$1|ei Syte verwyyst|$1 Syte verwyyse}} uf die Datei.
Die Lischt zeigt nume {{PLURAL:$1|dr erscht Link|di erschte $1 Link}} uf die Datei.
E [[Special:WhatLinksHere/$2|vollständigi Lischt]] isch verfiegbar.',
'nolinkstoimage' => 'Kei Artikel verwändet des Bild.',
'morelinkstoimage' => '[[Special:WhatLinksHere/$1|Meh Links]] fir die Datei.',
'linkstoimage-redirect' => '$1 (Dateiwyterleitig) $2',
'duplicatesoffile' => 'Die {{PLURAL:$1|Datei isch e Duplikat|$1 Dateie sin Duplikat}} vu däre Datei ([[Special:FileDuplicateSearch/$2|meh Detail]]):',
'sharedupload' => 'Die Datei isch vu $1. S cha syy, ass si vu andere Projekt brucht wird.',
'sharedupload-desc-there' => 'Die Datei isch vu $1 un derf vu andere Projäkt bruucht wäre. Lueg uf dr [$2 Dateibschryybigssyte] no wytere Informatione.',
'sharedupload-desc-here' => 'Die Datei isch vu $1 un derf vu andere Projäkt bruucht wäre. D Bschryybig vu dr [$2 Dateibschryybigssyte] wird unten aazeigt.',
'sharedupload-desc-edit' => 'Die Datei stammt us $1 un cha uf andere Projäkt brucht wäre.
Villicht witt d Bschryybig uf dr dertige [$2 Dateibschryybigssyte] bearbeite.',
'sharedupload-desc-create' => 'Die Datei stammt us $1 un cha uf andere Projäkt brucht wäre.
Villicht witt d Bschryybig uf dr dertige [$2 Dateibschryybigssyte] bearbeite.',
'filepage-nofile' => 'S git kei Datei mit däm Name.',
'filepage-nofile-link' => 'S git no kei Datei mit däm Name, aber Du chasch [$1 si ufelade].',
'uploadnewversion-linktext' => 'E nöui Version vo dere Datei ufelade',
'shared-repo-from' => 'vu $1',
'shared-repo' => 'eme gmeinsame Repositorium',
'upload-disallowed-here' => 'Du chasch die Datei nit iberschryybe.',

# File reversion
'filerevert' => 'Zrucksetze vu „$1“',
'filerevert-legend' => 'Datei zrucksetze',
'filerevert-intro' => "Du setzesch d Datei '''[[Media:$1|$1]]''' uf d [$4 Version vum $2, $3 Uhr] zruck.",
'filerevert-comment' => 'Grund:',
'filerevert-defaultcomment' => 'Zruckgsetzt uf d Version vum $1, $2 Uhr',
'filerevert-submit' => 'Zrucksetze',
'filerevert-success' => "'''[[Media:$1|$1]]''' isch uf d [$4 Version vum $2, $3 Uhr] zruckgsetzt wore.",
'filerevert-badversion' => 'S git kei Version vu dr Datei zum Zytpunkt, wu aagee woren isch.',

# File deletion
'filedelete' => 'Lesch „$1“',
'filedelete-legend' => 'Lesch d Datei',
'filedelete-intro' => "Du leschesch d Datei '''„[[Media:$1|$1]]“''' mit dr Versionsgschicht.",
'filedelete-intro-old' => "Du leschesch vu dr Datei '''„[[Media:$1|$1]]“''' d [$4 Version vum $2, $3 Uhr].",
'filedelete-comment' => 'Grund:',
'filedelete-submit' => 'Lesche',
'filedelete-success' => "'''„$1“''' isch glescht wore.",
'filedelete-success-old' => "Vu dr Datei '''„[[Media:$1|$1]]“''' isch d Version vum $2, $3 Uhr glescht wore.",
'filedelete-nofile' => "'''„$1“''' isch nit vorhande.",
'filedelete-nofile-old' => "S git vu '''„$1“''' kei archivierti Version mit Attribut, wu aagee sin.",
'filedelete-otherreason' => 'Andere/zuesätzlige Grund:',
'filedelete-reason-otherlist' => 'Andere Grund',
'filedelete-reason-dropdown' => '* Allgmeini Leschgrind
** Urheberrächtsverletzig
** Duplikat',
'filedelete-edit-reasonlist' => 'Leschgrind bearbeite',
'filedelete-maintenance' => 'S Leschen un Widerhärstelle vu Dateie isch wäge Wartigsarbete e Zytlang deaktiviert.',
'filedelete-maintenance-title' => 'D Datei cha nit glescht wäre.',

# MIME search
'mimesearch' => 'MIME-Suechi',
'mimesearch-summary' => 'Uf däre Spezialsyte chenne d Dateie noch em MIME-Typ gfilteret wäre. In dr Yygob muess es alliwyl dr Medie- un Subtyp din haa: <code>image/jpeg</code> (lueg Bildbschryybigssyte).',
'mimetype' => 'MIME-Typ:',
'download' => 'Abelade',

# Unwatched pages
'unwatchedpages' => 'Unbeobachteti Sytene',

# List redirects
'listredirects' => 'Lischte vo Wyterleitige (Redirects)',

# Unused templates
'unusedtemplates' => 'Nid bruuchti Vorlage',
'unusedtemplatestext' => 'Die Syte lischtet alli Syten im {{ns:template}}-Namensruum uf, wu nit in andere Syte yybunden sin.
Iberprief anderi Link zue dr Vorlage, voreb Du die leschesch.',
'unusedtemplateswlh' => 'Anderi Link',

# Random page
'randompage' => 'Zuefalls-Artikel',
'randompage-nopages' => 'S het kei Syte in {{PLURAL:$2|däm Namensruum|däne Namensryym}}:  $1.',

# Random redirect
'randomredirect' => 'Zuefälligi Wyterleitig',
'randomredirect-nopages' => 'Im Namensruum „$1“ sin kei Wyterleitige vorhande.',

# Statistics
'statistics' => 'Statistik',
'statistics-header-pages' => 'Sytestatischtik',
'statistics-header-edits' => 'Bearbeitigsstatischtik',
'statistics-header-views' => 'Sytenufruefstatischtik',
'statistics-header-users' => 'Benutzer-Statischtik',
'statistics-header-hooks' => 'Anderi Statischtike',
'statistics-articles' => 'Inhaltssyte',
'statistics-pages' => 'Syte',
'statistics-pages-desc' => 'Alli Syten in däm Wiki, mit Diskussionssyte, Wyterleitige usw.',
'statistics-files' => 'Uffegladeni Dateie',
'statistics-edits' => 'Sytebearbeitige',
'statistics-edits-average' => 'Bearbeitige pro Syte im Durchschnitt',
'statistics-views-total' => 'Sytenufruef insgsamt',
'statistics-views-total-desc' => 'Ufruef vu Syte un Spezialsyte, wu s nit git, wäre nit berucksichtigt',
'statistics-views-peredit' => 'Sytenufruef pro Bearbeitig',
'statistics-users' => 'Regischtrierti [[Special:ListUsers|Benutzer]]',
'statistics-users-active' => 'Aktivi Benutzer',
'statistics-users-active-desc' => 'Benutzer mit Bearbeitige {{PLURAL:$1|in dr letschte 24 Stund|in dr letschte $1 Täg}}',
'statistics-mostpopular' => 'Am meischte aagluegti Syte',

'disambiguations' => 'Syte, wu uf Begriffsklärigssyte verlinke',
'disambiguationspage' => 'Template:Begriffsklärig',
'disambiguations-text' => 'Die Syte verwyyse uf e Begriffsklärigs-Syte. Sie sotte aber besser uf d Syte verwyyse, wu eigetli gmeint sin.

E Syte wird as Begriffsklärigs-Syte behandlet, wänn [[MediaWiki:Disambiguationspage]] uf si verwyyst.',

'doubleredirects' => 'Doppleti Wyterleitige (Redirects)',
'doubleredirectstext' => 'Die Lischt zeigt Wyterleitige, wu uf anderi Wyterleitige verwyyse.
In jedere Zyylete het s Link zue dr erschte un dr zwote Wyterleitig un s Ziil vu dr zwote Wyterleitig, wu normalerwys di gwinscht Ziilsyten isch. Do sott eigetli scho di erscht Wyterleitig druf zeige.
<del>Durgstricheni</del> Yytreg sin scho erledigt wore.',
'double-redirect-fixed-move' => 'doppleti Wyterleitig ufglest: [[$1]] → [[$2]]',
'double-redirect-fixed-maintenance' => 'Di dopplet Wyterleitig vu [[$1]] no [[$2]] isch ufglest wore.',
'double-redirect-fixer' => 'DoubleRedirectBot',

'brokenredirects' => 'Kaputti Wyterleitige',
'brokenredirectstext' => 'Die Spezialsyte lischtet Wyterleitige uf, wu zue Artikel fiere, wu s gar nid git:',
'brokenredirects-edit' => 'bearbeite',
'brokenredirects-delete' => 'lesche',

'withoutinterwiki' => 'Sytenen ohni Links zu andere Sprache',
'withoutinterwiki-summary' => 'Die Syte verwyyse nit uf anderi Sprochversione.',
'withoutinterwiki-legend' => 'Vorsilb',
'withoutinterwiki-submit' => 'Zeig',

'fewestrevisions' => 'Syte mit de wenigschte Bearbeitige',

# Miscellaneous special pages
'nbytes' => '$1 {{PLURAL:$1|Byte|Bytes}}',
'ncategories' => '$1 {{PLURAL:$1|Kategori|Kategorie}}',
'ninterwikis' => '{{PLURAL:$1|Ei Interwikilink|$1 Interwikilink}}',
'nlinks' => '$1 {{PLURAL:$1|Link|Links}}',
'nmembers' => '$1 {{PLURAL:$1|Syte|Sytene}}',
'nrevisions' => '$1 {{PLURAL:$1|Revision|Revisione}}',
'nviews' => '$1 {{PLURAL:$1|Betrachtig|Betrachtige}}',
'nimagelinks' => 'Brucht uf $1 {{PLURAL:$1|Syte|Syte}}',
'ntransclusions' => 'brucht uf $1 {{PLURAL:$1|Syte|Syte}}',
'specialpage-empty' => 'In dr Syte het s no kei aktuälli Yytreg.',
'lonelypages' => 'Verwaisti Sytene',
'lonelypagestext' => 'Die Syte wäre nit yybunde oder s wird nit uf si verwiise in {{SITENAME}}.',
'uncategorizedpages' => 'Nit kategorisierte Sytene',
'uncategorizedcategories' => 'Nit kategorisierte Kategorie',
'uncategorizedimages' => 'Nid kategorisierti Dateie',
'uncategorizedtemplates' => 'Nid kategorisierti Vorlage',
'unusedcategories' => 'Nid bruuchti Kategorië',
'unusedimages' => 'Verwaiste Bilder',
'popularpages' => 'Beliebti Artikel',
'wantedcategories' => 'Bruuchti Kategorie, wo s no nid git',
'wantedpages' => 'Artikel, wo fähle',
'wantedpages-badtitle' => 'Nit giltige Titel im Ergebnis: $1',
'wantedfiles' => 'Dateie, wu fähle',
'wantedfiletext-cat' => 'Die Dateie wäre brucht, s git si aber nit. Dateie us främde Repositorie chenne einewäg do ufglischtet syy un wäre <del>durgstriche</del> dargstellt. Zuesätzli wäre Syte, wu s die nit vorhande Datei dinne het, in d [[:$1]] yygordnet.',
'wantedfiletext-nocat' => 'Die Dateie wäre brucht, s git si aber nit. Vorhandeni Dateie us främde Repositorie chenne dp einewäg ufglischtet syy un wäre <del>durgstriche</del> dargstellt.',
'wantedtemplates' => 'Vorlage, wu fähle',
'mostlinked' => 'Syte, wo am meischte druff verwyyse wird',
'mostlinkedcategories' => 'Am meischte verlinkti Kategorië',
'mostlinkedtemplates' => 'Am meischten yybouti Vorlage',
'mostcategories' => 'Sytene mit de meischte Kategorië',
'mostimages' => 'Am meischte verlinkti Dateie',
'mostinterwikis' => 'Syte mit de meischte Interwikilink',
'mostrevisions' => 'Syte mit de meischte Bearbeitige',
'prefixindex' => 'Alli Syte (mit Präfix)',
'prefixindex-namespace' => 'Alli Syte mit Präfix (Nameruum $1)',
'shortpages' => 'Churzi Artikel',
'longpages' => 'Langi Artikel',
'deadendpages' => 'Artikel ohni Links («Sackgasse»)',
'deadendpagestext' => 'Die Syte verwyyse nit zue anderi Syte in {{SITENAME}}.',
'protectedpages' => 'Gschützti Sytene',
'protectedpages-indef' => 'Nume uubschränkt gschitzti Syte zeige',
'protectedpages-cascade' => 'Nume Syte mit Kaskadeschutz',
'protectedpagestext' => 'Die Spezialsyte zeigt alli vor em Verschiebe oder Bearbeite gschitzti Syte.',
'protectedpagesempty' => 'Aktuäll sin kei Syte mit däne Parameter gschitzt.',
'protectedtitles' => 'Gsperrti Titel',
'protectedtitlestext' => 'Die Titel sin gsperrt fir s Neijaalege',
'protectedtitlesempty' => 'Im Momänt sin kei Syte fir s Nejaalege gsperrt mit däne Parameter.',
'listusers' => 'Lischte vo Benutzer',
'listusers-editsonly' => 'Zeig nume Benutzer mit Byytreg',
'listusers-creationsort' => 'Sortiert noch em Datum',
'usereditcount' => '$1 {{PLURAL:$1|Bearbeitig|Bearbeitige}}',
'usercreated' => '{{GENDER:$3|Aagleit}} uf $1 am $2',
'newpages' => 'Nöji Artikel',
'newpages-username' => 'Benutzername:',
'ancientpages' => 'alti Sytene',
'move' => 'Verschiebe',
'movethispage' => 'Artikel verschiebe',
'unusedimagestext' => 'Die Dateie, wu do ufgfiert wäre, gits, si wäre aber uf keire Syte brucht.
Bitte gib Acht, ass anderi Netzsyte die Datei mit ere diräkte URL chenne verlinke. Des wird nit as Verwändig erkannt. Wäge däm wird d Datei do ufgfiert.',
'unusedcategoriestext' => 'Die Spezialsyte zeigt alli lääre Kategorie, d. h. si wäre nit brucht vu andre Syte oder Kategorie.',
'notargettitle' => 'Kei Syte aagee',
'notargettext' => 'Du hesch nit aagee, uf weli Syte die Funktion soll druf aagwändet wäre.',
'nopagetitle' => 'Ziilsyte isch nit vorhande',
'nopagetext' => 'D Ziilsyte, wu aagee isch, isch nit vorhande.',
'pager-newer-n' => '{{PLURAL:$1|nächschte|nächschte $1}}',
'pager-older-n' => '{{PLURAL:$1|vorige|vorige $1}}',
'suppress' => 'Oversight',
'querypage-disabled' => 'Die Spezialsyte isch deaktiviert wore us Leischtigserhaltigs-Grind.',

# Book sources
'booksources' => 'ISBN-Suech',
'booksources-search-legend' => 'Suech no Bezugsquälle fir Biecher',
'booksources-go' => 'Sueche',
'booksources-text' => 'Des isch e Lischt mit Link zue Netzsyte, wu neiji un bruchti Biecher verchaufe. S cha syy, ass es dert au meh Informatione zue dr Biecher git. {{SITENAME}} isch mit keinem vu däne Aabieter gschäftli verbunde.',
'booksources-invalid-isbn' => 'D ISBN isch schyyns falsch. Lueg no Fähler in dr Kopii.',

# Special:Log
'specialloguserlabel' => 'Benutzer, wu des gmacht het:',
'speciallogtitlelabel' => 'Ziil (Titel oder Benutzer):',
'log' => 'Logbiecher',
'all-logs-page' => 'Alli effetligi Logbüecher',
'alllogstext' => 'Kombinierti Aasicht vu alle in {{SITENAME}} gfierte Protokoll.
D Aazeig cha dur d Uuswahl vun eme Protokoll, eme Benutzername oder eme Sytename yygschränkt wäre (Acht gee uf d Gross- un Chleischrybig).',
'logempty' => 'Kei Yyträg gfunde, wu passe.',
'log-title-wildcard' => 'Titel fangt aa mit',
'showhideselectedlogentries' => 'Uusgwehlti Logbuechyytreg aazeige/verstecke',

# Special:AllPages
'allpages' => 'alli Sytene',
'alphaindexline' => 'vo $1 bis $2',
'nextpage' => 'Nächscht Syte ($1)',
'prevpage' => 'Vorderi Syte ($1)',
'allpagesfrom' => 'Syte aazeige vo:',
'allpagesto' => 'Syten aazeige bis:',
'allarticles' => 'alli Artikel',
'allinnamespace' => 'alli Sytene im Namensruum $1',
'allnotinnamespace' => 'alli Sytene, wo nit im $1 Namensruum sin',
'allpagesprev' => 'Füehrigs',
'allpagesnext' => 'nächschts',
'allpagessubmit' => 'gang',
'allpagesprefix' => 'Alli Sytene mit em Präfix:',
'allpagesbadtitle' => 'Dr Sytename, wu yygee hesch, isch nit giltig: Er het entwäder e vorgstellt Sproch-, e Interwiki-Chirzel oder s het ei oder meh Zeiche din, wu in eme Sytename nit derfe brucht wäre.',
'allpages-bad-ns' => 'Dr Namensruum „$1“ isch in {{SITENAME}} nit vorhande.',
'allpages-hide-redirects' => 'Wyterleitige uusblände',

# SpecialCachedPage
'cachedspecial-viewing-cached-ttl' => 'Du siisch d Zwischespycher-Version vu däre Syte, wu bis zue $1 cha alt syy.',
'cachedspecial-viewing-cached-ts' => 'Du siisch d Zwischespycher-Version vu däre Syte, wu villicht nit aktuäll isch.',
'cachedspecial-refresh-now' => 'Aktuälli Version aaluege.',

# Special:Categories
'categories' => 'Kategorie',
'categoriespagetext' => 'In {{PLURAL:$1|däre Kategorii|däne Kategorie}} het s Syte oder Dateie.
[[Special:UnusedCategories|Nit benutzte Kategorie]] wäre do nit ufgfiert.
Lueg au d Lischt vu dr [[Special:WantedCategories|gwinschte Kategorie]].',
'categoriesfrom' => 'Zeig Kategorie ab:',
'special-categories-sort-count' => 'Sortierig no Aazahl',
'special-categories-sort-abc' => 'Sortierig no Alfabet',

# Special:DeletedContributions
'deletedcontributions' => 'Gleschti Bytreg',
'deletedcontributions-title' => 'Gleschti Bytreg',
'sp-deletedcontributions-contribs' => 'Byyträg',

# Special:LinkSearch
'linksearch' => 'Weblinksuechi',
'linksearch-pat' => 'Suechmuschter:',
'linksearch-ns' => 'Namensruum:',
'linksearch-ok' => 'Sueche',
'linksearch-text' => 'Die Spezialsyte macht d Suechi no Syte megli, wu s bstimmti Weblink din het. Doderby chenne Platzhalter wie zem Byschpel <code>*.byschpel.de</code> brucht wäre. S mueß zmindecht ei Top-Level-Domain, z. B. „*.org“. aagee wäre. <br />Unterstitzti Protokoll: <code>$1</code> (Die bitte nit bi dr Suechaafrog aagee.)',
'linksearch-line' => '$1 isch vo $2 verknüpft',
'linksearch-error' => 'Platzhalter chönne numme am Aafang verwändet werre.',

# Special:ListUsers
'listusersfrom' => 'Zeig Benutzer ab:',
'listusers-submit' => 'Zeig',
'listusers-noresult' => 'Kei Benutzer gfunde.',
'listusers-blocked' => '(gsperrt)',

# Special:ActiveUsers
'activeusers' => 'Lischt vu dr aktive Benutzer',
'activeusers-intro' => 'Des isch e Lischt vu Benutzer, wu irgedebis bearbeitet hän {{PLURAL:$1|am letschte Tag|in dr letschte $1 Täg}}.',
'activeusers-count' => '$1 {{PLURAL:$1|Bearbeitig|Bearbeitige}} {{PLURAL:$3|am letschte Tag|in dr letschte $3 Täg}}',
'activeusers-from' => 'Zeig Benutzer ab:',
'activeusers-hidebots' => 'Bötli uusblände',
'activeusers-hidesysops' => 'Ammanne (Administratore) uusblände',
'activeusers-noresult' => 'Kei Benutzer gfunde.',

# Special:Log/newusers
'newuserlogpage' => 'Nejaamäldigs-Logbuech',
'newuserlogpagetext' => 'Des isch e Logbuech fir nej aagleiti Benutzerchonte.',

# Special:ListGroupRights
'listgrouprights' => 'Benutzergruppe-Rächt',
'listgrouprights-summary' => 'Des isch e Liste vu dr Benutzergruppe, wu in däm Wiki definiert sin, un dr Rächt, wu dermit verbunde sin.
Zuesätzligi Informatione iber einzelni Rächt git s [[{{MediaWiki:Listgrouprights-helppage}}|doo]].',
'listgrouprights-key' => '* <span class="listgrouprights-granted">Bewilligt Rächt</span>
* <span class="listgrouprights-revoked">Entzoge Rächt</span>',
'listgrouprights-group' => 'Grupp',
'listgrouprights-rights' => 'Rächt',
'listgrouprights-helppage' => 'Help:Grupperächt',
'listgrouprights-members' => '(Mitgliiderlischt)',
'listgrouprights-addgroup' => 'Cha Benutzer zue {{PLURAL:$2|däre Grupp|däne Gruppe}} zuefiege: $1',
'listgrouprights-removegroup' => 'Cha Benutzer us {{PLURAL:$2|däre Grupp|däne Gruppe}} useneh: $1',
'listgrouprights-addgroup-all' => 'Cha Benutzer zue allene Gruppe zuefiege',
'listgrouprights-removegroup-all' => 'Cha Benutzer us allene Gruppe useneh',
'listgrouprights-addgroup-self' => 'Cha {{PLURAL:$2|e Gruppe|Gruppe}} zum eigene Benutzerkonto zuefiege: $1',
'listgrouprights-removegroup-self' => 'Cha {{PLURAL:$2|e Gruppe|Gruppe}} us em eigene Benutzerkonto useneh: $1',
'listgrouprights-addgroup-self-all' => 'Cha alli Gruppe zum eigene Benutzerkonto zuefiege',
'listgrouprights-removegroup-self-all' => 'Cha alli Gruppe us em eigene Benutzerkonto useneh',

# E-mail user
'mailnologin' => 'Du bisch nid aagmäldet oder hesch keis Mail aaggä',
'mailnologintext' => 'Du muesch [[Special:UserLogin|aagmäldet syy]] un e bstätigti E-Mail-Adräss in Dyyne [[Special:Preferences|Yystellige]] aagee ha, fir dass epper anderem es E-Mail chasch schicke.',
'emailuser' => 'Es Mail schrybe',
'emailuser-title-target' => 'E-Mail an {{GENDER:$1|dää Benutzer|die Benutzeri}} schicke',
'emailuser-title-notarget' => 'E-Mail an Benutzer',
'emailpage' => 'E-Mail an Benutzer',
'emailpagetext' => 'Du chasch im Benutzer mit däm Formular e E-Mail schicke.
As Absender wird d E-Mail-Adräss us Dyyne [[Special:Preferences|Yystellige]] yytrait, ass dr Benutzer Dir cha Antwort gee.',
'usermailererror' => 'S Mail-Objekt het e Fähler zruckgee:',
'defemailsubject' => '{{SITENAME}}-E-Mail vum Benutzer „$1“',
'usermaildisabled' => 'Benutzer-E-Mail abgstellt',
'usermaildisabledtext' => 'Du chasch in däm Wiki kei E-Mail an anderi Benutzer schicke',
'noemailtitle' => 'Kei e-Mail-Adrässe',
'noemailtext' => 'Dää Benutzer het kei bstätigti E-Mail-Adräss aagee oder wet kei E-Mail vo andere Benutzer.',
'nowikiemailtitle' => 'Kei E-Mail Versand mögli',
'nowikiemailtext' => 'De Benutzer möcht kei E-Mails vo andri Benutzer erhalte',
'emailnotarget' => 'Benutzername fir dr Empfang vun ere E-Mail git s nit oder isch nit giltig.',
'emailtarget' => 'Dr Benutzername vum Empfänger yygee',
'emailusername' => 'Benutzername:',
'emailusernamesubmit' => 'Ibertrage',
'email-legend' => 'E-Mail an e andere {{SITENAME}}-Benutzer schicke',
'emailfrom' => 'Vu:',
'emailto' => 'An:',
'emailsubject' => 'Beträff:',
'emailmessage' => 'Nochricht:',
'emailsend' => 'Abschicke',
'emailccme' => 'Schick e Kopii vu dr E-Mail a mii',
'emailccsubject' => 'Kopii vu Dyynere Nochricht an $1: $2',
'emailsent' => 'E-Mail furtgschickt',
'emailsenttext' => 'Dys E-Mail isch verschickt worde.',
'emailuserfooter' => 'Die E-Mail isch vum {{SITENAME}}-Benutzer „$1“ an „$2“ gschickt wore.',

# User Messenger
'usermessage-summary' => 'Systemnochricht gspycheret.',
'usermessage-editor' => 'System-Messenger',

# Watchlist
'watchlist' => 'Beobachtigslischte',
'mywatchlist' => 'Beobachtigslischte',
'watchlistfor2' => 'Fir $1 $2',
'nowatchlist' => 'Du hesch ke Yträg uf dyre Beobachtigslischte.',
'watchlistanontext' => 'Du muesch Di $1 go Dyyni Beobachtungslischt z säh oder go Yytreg uf ere bearbeite.',
'watchnologin' => 'Du bisch nit aagmäldet',
'watchnologintext' => 'Du muesch [[Special:UserLogin|aagmäldet]] syy, zum Dyyni Beobachtigssyte z bearbeite.',
'addwatch' => 'zue de Beobachtigslischte derzue tue',
'addedwatchtext' => "D Syte \"[[:\$1]]\" stoht jetz uf Dyyre [[Special:Watchlist|Beobachtigslischt]].
Neji Änderige an dr Syte oder dr Diskussionssyte drvo chasch jetz dert säh. Usserdem sin die Änderige uf dr [[Special:RecentChanges|letschte Änderige]] '''fett''' gschribe, ass De si schnäller findsch.

Wänn Du d Syte speter wider vu dr Lischt witt stryyche, deno druck eifach uf „{{int:Unwatch}}“.",
'removewatch' => 'Us der Beobachtigsliste usegnuu',
'removedwatchtext' => 'D Syte «[[:$1]]» isch us dyre [[Special:Watchlist|Beobachtigsliste]] glösche worde.',
'watch' => 'Beobachte',
'watchthispage' => 'Die Syte beobachte',
'unwatch' => 'nümm beobachte',
'unwatchthispage' => 'Nimmi beobachte',
'notanarticle' => 'Kei Syte',
'notvisiblerev' => 'Version isch glescht wore',
'watchnochange' => 'Vo den Artikle, wo du beobachtisch, isch im aazeigte Zytruum kene veränderet worde.',
'watchlist-details' => '{{PLURAL:$1|1 Syte wird|$1 Sytene wärde}} beobachtet (Diskussionssyte nid zelt, aber ou beobachtet).',
'wlheader-enotif' => '* Dr E-Mail-Benochrichtigungsdienscht isch aktiviert.',
'wlheader-showupdated' => "* Syte mit Anderige, wu no nit aagluegt sin, sin '''fett''' dargstellt.",
'watchmethod-recent' => 'Iberpriefe vu dr letschte Bearbeitige fir d Beobachtigslischt',
'watchmethod-list' => 'Iberpriefe vu dr Beobachtigslischt no letschte Bearbeitige',
'watchlistcontains' => 'In Dyynere Beobachtigslischt het s $1 {{PLURAL:$1|Syte|Syte}}.',
'iteminvalidname' => 'Probläm mit em Yytrag „$1“, uugiltige Name.',
'wlnote' => "Do {{PLURAL:$1|chunnt di letscht Änderig|chemme di letschte '''$1''' Änderige}} vu dr letschte {{PLURAL:$2|Stund|'''$2''' Stunde}}. Stand: $3, $4 Uhr.",
'wlshowlast' => 'Zeig di letschte $1 Stunde $2 Tage $3',
'watchlist-options' => 'Aazeigoptione',

# Displayed when you click the "watch" button and it is in the process of watching
'watching' => 'Am beobachte …',
'unwatching' => 'Nümm am beobachten …',
'watcherrortext' => 'Bim Ändere vu dr Beobachtigslischtenyystellige fir „$1“ het s e Fähler gee.',

'enotif_mailer' => '{{SITENAME}} E-Mail-Benochrichtigungsdienscht',
'enotif_reset' => 'Alli Syte as aagluegt markiere',
'enotif_newpagetext' => 'Des isch e neiji Syte.',
'enotif_impersonal_salutation' => '{{SITENAME}}-Benutzer',
'changed' => 'gänderet',
'created' => 'aagleit',
'enotif_subject' => 'D {{SITENAME}} Syte $PAGETITLE isch vum $PAGEEDITOR $CHANGEDORCREATED wore.',
'enotif_lastvisited' => '$1 zeigt alli Änderige uf s Mol.',
'enotif_lastdiff' => 'Lueg $1 no däre Änderig.',
'enotif_anon_editor' => 'Anonyme Benutzer $1',
'enotif_body' => 'Liebe/Liebi $WATCHINGUSERNAME,

d {{SITENAME}}-Syte $PAGETITLE isch vum $PAGEEDITOR am $PAGEEDITDATE $CHANGEDORCREATED wore, di aktuell Version isch: $PAGETITLE_URL


$NEWPAGE

Zämmenfassig vum Autor: $PAGESUMMARY $PAGEMINOREDIT
Kontakt zum Autor:
Mail $PAGEEDITOR_EMAIL
Wiki $PAGEEDITOR_WIKI


Es wird kei wyteri Nochricht iber Änderige gschickt, bis Du uf sälli Syte gohsch.
Uf Dyyre Beobachtigssyte chasch d Beobachtigsmarker fir alli Syte zrucksetze, wu Du beobachte tuesch.

             Dyy fryndli {{SITENAME}}-Nochrichtesyschtem

---
Go d Yystellige vu dr E-Mail-Benochrichtigung aapasse, gang uf {{canonicalurl:{{#special:Preferences}}}}

Go d Yystellige vu Dyyre Beobachtigslischte ändere, gang uf {{canonicalurl:{{#special:EditWatchlist}}}}

Go d Syte us Dyyre Beobachtigslischte uuseneh, gang uf $UNWATCHURL

Ruckmäldig un wyteri Hilf: {{canonicalurl:{{MediaWiki:Helppage}}}}',

# Delete
'deletepage' => 'Syte lösche',
'confirm' => 'Bstätige',
'excontent' => "Alter Inhalt: '$1'",
'excontentauthor' => "einzige Inhalt: '$1' (bearbeitet worde nume dür '$2')",
'exbeforeblank' => "Inhalt voreb d Syte gläärt woren isch: '$1'",
'exblank' => 'Syte isch läär gsi',
'delete-confirm' => '„$1“ lesche',
'delete-legend' => 'Lesche',
'historywarning' => "'''Warnig:'''  Die Syte, wu Du wit lesche, het e Versionsgschicht mit schetzigswyys $1 {{PLURAL:$1|Version|Versione}}:",
'confirmdeletetext' => 'Du bisch dra, e Artikel oder e Bild mitsamt dr Versionsgschicht fir immer us der Datebank z lesche.
Bitte bi Dir iber d Konsequänze bewusst, un bi sicher, dass Du Di an unsri [[{{MediaWiki:Policy-url}}|Leitlinie]] haltsch.',
'actioncomplete' => 'Uftrag usgfiert.',
'actionfailed' => 'Aktion fählgschlaa',
'deletedtext' => '«$1» isch glescht wore.
Im $2 het s e Lischt vu dr letschte Leschige.',
'dellogpage' => 'Lösch-Logbuech',
'dellogpagetext' => 'Des isch s Logbuech vu dr gleschte Syte un Dateie.',
'deletionlog' => 'Lösch-Logbuech',
'reverted' => 'Uf e alti Version zruckgsetzt',
'deletecomment' => 'Grund:',
'deleteotherreason' => 'Andere/zuesätzleche Grund:',
'deletereasonotherlist' => 'Andere Grund',
'deletereason-dropdown' => '* Allgmeini Leschgrind
** Wunsch vum Autor
** Urheberrächtsverletzig
** Vandalismus',
'delete-edit-reasonlist' => 'Leschgrind bearbeite',
'delete-toobig' => 'Die Syte het e arg langi Versionsgschicht mit meh as $1 {{PLURAL:$1|Version|Versione}}. S Lesche vu sonige Syte isch yygschränkt wore go verhindere, ass dr Server vu {{SITENAME}} us Versäh zytwys iberlaschtet wird.',
'delete-warning-toobig' => 'Die Syte het e arg langi Versionsgschicht mit meh as $1 {{PLURAL:$1|Version|Versione}}. S Lesche cha dr Datebankbetriib vu {{SITENAME}} stere.',

# Rollback
'rollback' => 'Zrucksetze vu dr Änderige',
'rollback_short' => 'Zrucksetze',
'rollbacklink' => 'Zrüggsetze',
'rollbacklinkcount' => '{{PLURAL:$1|Ei Version|$1 Versione}} zrucksetze',
'rollbacklinkcount-morethan' => 'Meh wie {{PLURAL:$1|ei Version|$1 Versione}} zrucksetze',
'rollbackfailed' => 'S Zrucksetze het nit funktioniert',
'cantrollback' => 'D Änderig cha nit zruckgsetzt wäre, wel s keini friejere Autore git.',
'alreadyrolled' => 'Cha d Änderig uf [[:$1]] wu vu [[User:$2|$2]] ([[User talk:$2|Diskussion]]{{int:pipe-separator}}[[Special:Contributions/$2|{{int:contribslink}}]]) gmacht wore sin, zruckneh, wel e andere Benutzer in dr Zwischenzyt s scho zruckgsetzt het oder suscht ebis an däre Syte gänderet het.

Di letscht Änderig het [[User:$3|$3]] ([[User talk:$3|Diskussion]]{{int:pipe-separator}}[[Special:Contributions/$3|{{int:contribslink}}]]) gmacht.',
'editcomment' => "D Änderigszämmefassig isch: „''$1''“.",
'revertpage' => 'Ruckgängig gmacht zue dr letschte Änderig vo [[Special:Contributions/$2|$2]] ([[User talk:$2|Diskussion]]) mit de letzte Version vo [[User:$1|$1]] widerhergstellt',
'revertpage-nouser' => 'Bearbeitige ruckgängig gmacht vu (Benutzername uusegnuu), letschti Fassig vu [[User:$1|$1]] widerhärgstellt',
'rollback-success' => 'D Änderige vu $1 sin ruckgängig gmacht wore un di letscht Version vu $2 isch widerhärgstellt wore.',

# Edit tokens
'sessionfailure-title' => 'Sitzigsfähler',
'sessionfailure' => 'S het e Probläm mit em Ibertrage vu Dyyne Benutzerdate gee.
Die Aktion isch wäge däm us Sicherheitsgrind abbroche wore go ne falschi Zueornig vu Dyyne Änderige zuen eme andere Benutzer verhindere.
Bitte gang zruck, tue d Syte nej lade un versuech s nomol.',

# Protect
'protectlogpage' => 'Syteschutz-Logbuech',
'protectlogtext' => 'Des isch s Syteschutz-Logbuech.
Lueg d [[Special:ProtectedPages|Lischt vu dr gschitzte Syte]] fir alli zurzyt gschitzte Syte.',
'protectedarticle' => 'het „[[$1]]“ gschitzt',
'modifiedarticleprotection' => 'het dr Schutz vu „[[$1]]“ gänderet',
'unprotectedarticle' => 'het dr Schutz vu „[[$1]]“ ufghebt',
'movedarticleprotection' => 'het dr Syteschutz vu „[[$2]]“ uf „[[$1]]“ ibertrait',
'protect-title' => 'Schutz vu „$1“ ändere',
'protect-title-notallowed' => 'Schutz aaluege vu „$1“',
'prot_1movedto2' => '[[$1]] isch uf [[$2]] verschobe worde.',
'protect-badnamespace-title' => 'Nit-schitzbare Namensruum',
'protect-badnamespace-text' => 'Syte in däm Namensruum chenne nit gschitzt wäre.',
'protect-legend' => 'Syteschutzstatus ändere',
'protectcomment' => 'Grund:',
'protectexpiry' => 'Gsperrt bis:',
'protect_expiry_invalid' => 'Di gwählti Duur isch nid gültig.',
'protect_expiry_old' => 'Di gwählti Duur isch scho vergange.',
'protect-unchain-permissions' => 'Wyteri Schutzoptione frej schalte',
'protect-text' => "Hie chasch der Schutzstatus vor Syte '''$1''' azeigen und ändere.",
'protect-locked-blocked' => "Du chasch dr Syteschutz nit ändere, wel Dyy Benutzerkonto gsperrt isch. Do sin di aktuälle Syteschutz-Yystellige fir d Syte '''„$1“:'''",
'protect-locked-dblock' => "D Datebank isch gsperrt, dr Syteschutz cha wäge däm nit gänderet wäre. Doo sin di aktuälle Syteschutz-Yystellige fir d Syte '''„$1“:'''",
'protect-locked-access' => "Dys Konto het nid di nötige Rächt, für der Schutzstatus z ändere.
Hie sy di aktuelle Schutzystellige vor Syte '''$1''':",
'protect-cascadeon' => 'Die Syten isch gschützt, wil si {{PLURAL:$1|zur folgende Syte|zu de folgende Syte}} ghört, wo derfür e Kaskadesperrig gilt.
Der Schutzstatus vo dere Syte lat sech la ändere, aber das het kei Yfluss uf d Kaskadesperrig.',
'protect-default' => 'Alle Benutzer',
'protect-fallback' => '«$1»-Berächtigung nötig',
'protect-level-autoconfirmed' => 'Neji un nit regischtrierti Benutzer sperre',
'protect-level-sysop' => 'Numme Ammanne',
'protect-summary-cascade' => 'Kaskade',
'protect-expiring' => 'bis $1 (UTC)',
'protect-expiring-local' => 'bis $1',
'protect-expiry-indefinite' => 'uubschränkt',
'protect-cascade' => 'Kaskadesperrig – alli yybundnige Vorlage sy mitgsperrt.',
'protect-cantedit' => 'Du chasch der Schutzstatus vo dere Syte nid ändere, wil du kener Berächtigunge hesch, für se z bearbeite.',
'protect-othertime' => 'Anderi Sperrduur:',
'protect-othertime-op' => 'anderi Sperrduur',
'protect-existing-expiry' => 'Aktuälls Syteschutzänd: $2, $3 Uhr',
'protect-otherreason' => 'Andere/zuesätzlige Grund:',
'protect-otherreason-op' => 'Andere Grund',
'protect-dropdown' => '*Allgmeini Schutzgrind
** Netzgleich-Spam
** Editwar
** Vylmol yybundeni Vorlag
** Syte mit ere hoche Bsuecherzahl',
'protect-edit-reasonlist' => 'Schutzgrind bearbeite',
'protect-expiry-options' => '1 Stund:1 hour,1 Tag:1 day,1 Wuche:1 week,2 Wuche:2 weeks,1 Monet:1 month,3 Monet:3 months,6 Monet:6 months,1 Johr:1 year,Fir immer:infinite',
'restriction-type' => 'Schutzstatus',
'restriction-level' => 'Schutzhöchi:',
'minimum-size' => 'Mindeschtgressi',
'maximum-size' => 'Maximalgressi:',
'pagesize' => '(Bytes)',

# Restrictions (nouns)
'restriction-edit' => 'Bearbeite',
'restriction-move' => 'Verschiebe',
'restriction-create' => 'Aalege',
'restriction-upload' => 'Uffelade',

# Restriction levels
'restriction-level-sysop' => 'gschitzt (nume Ammanne)',
'restriction-level-autoconfirmed' => 'gschitzt (nume aagmäldeti Benutzer, wu nit nej sin)',
'restriction-level-all' => 'alli',

# Undelete
'undelete' => 'Gleschti Syte widerhärstelle',
'undeletepage' => 'Gleschti Syte widerhärstelle',
'undeletepagetitle' => "'''Doo wäre di gleschte Versione vu [[:$1|$1]] aazeigt'''.",
'viewdeletedpage' => 'Gleschti Syte aazeige',
'undeletepagetext' => 'Die {{PLURAL:$1|Syte isch glescht wore un cha|$1 Syte sin glescht wore un chenne}} vu Ammanne widerhärgstellt wäre:',
'undelete-fieldset-title' => 'Widerhärstelle',
'undeleteextrahelp' => '* Go d Syte ganz mit allene Versione widerhärzstelle, wehl kei Version us, gib e Begrindig aa un druck uf „{{int:undeletebtn}}“.
* Mechtsch nume bstimmti Versione widerhärstelle, no wehl die bitte einzeln no dr Markierige us, gib e Begrindig aa un druck derno uf „{{int:undeletebtn}}“..',
'undeleterevisions' => '{{PLURAL:$1|1 Version|$1 Versione}} archiviert',
'undeletehistory' => 'Wänn Du die Syte widerhärstellsch, wäre au alli alte Versione widerhärgstellt.
Wänn syt dr Leschig e neiji Syte mit em glyche Name aagleit woren isch, no wäre di widerhärgstellte Versione chronologisch in d Versionsgschicht yygordnet.',
'undeleterevdel' => 'D Widerhärstellig wird nit durgfiert, wänn di neijscht Version versteckt isch oder s versteckti Teil dinne het.
In däm Fall darf di neijscht Version nit markiert wäre oder ihre Status muess uf normali Version gänderet wäre.',
'undeletehistorynoadmin' => 'Dä Artikel isch glescht wore. Dr Grund fir d Leschig isch in dr Zämmefassig aagee, derzue au Aagaabe zum letschte Benutzer, wu dä Artikel bearbeitet het vor dr Leschig. Dr aktuäll Täxt vum gleschte Artikel isch nume zuegängli fir Ammanne.',
'undelete-revision' => 'Gleschti Version vu $1 (vum $4 am $5 Uhr), $3:',
'undeleterevision-missing' => 'Version isch nit giltig oder fählt. Entwäder isch de Link falsch oder d Version isch us em Archiv widerhärgstellt oder usegnuh wore.',
'undelete-nodiff' => 'Kei vorigi Version vorhande.',
'undeletebtn' => 'Widerhärstelle',
'undeletelink' => 'aaluege/widerhärstelle',
'undeleteviewlink' => 'aaluege',
'undeletereset' => 'Abbräche',
'undeleteinvert' => 'Uswahl umchehre',
'undeletecomment' => 'Grund:',
'undeletedrevisions' => '{{PLURAL:$1|ei Revision|$1 Revisione}} wider zruckgholt.',
'undeletedrevisions-files' => '{{PLURAL:$1|1 Version|$1 Versione}} un {{PLURAL:$2|1 Datei|$2 Dateie}} sin widerhärgstellt wore',
'undeletedfiles' => '{{PLURAL:$1|1 Datei isch|$1 Dateie sin}} widerhärgstellt wore',
'cannotundelete' => 'D Widerhärstellig isch nit gange:

$1',
'undeletedpage' => "'''„$1“''' isch widerhärgstellt wore.

Im [[Special:Log/delete|Lesch-Logbuech]] findsch e Ibersicht vu dr gleschte un widerhärgstellte Syte.",
'undelete-header' => 'Lueg im [[Special:Log/delete|Lesch-Logbuech]] no Syte, wu in dr letschte Zyt glescht wore sin.',
'undelete-search-title' => 'Gleschti Syte sueche',
'undelete-search-box' => 'Suech no gleschte Syte',
'undelete-search-prefix' => 'Zeig d Syte aa, wu aafange mit:',
'undelete-search-submit' => 'Sueche',
'undelete-no-results' => 'Im Archiv isch kei Syte gfunde wore, wu zum Suechbegriff passt.',
'undelete-filename-mismatch' => 'D Dateiversion mit em Zytstämpfel $1 het nit chenne widerhärgstellt wäre: D Dateinäme passe nit zuenand.',
'undelete-bad-store-key' => 'D Dateiversion mit em Zytstämpfel $1 het nit chenne widerhärgstellt wäre: D Datei isch scho vor em Lesche nimmi vorhande gsi.',
'undelete-cleanup-error' => 'Fähler bim Lesche vu dr nit benutzte Archiv-Version $1.',
'undelete-missing-filearchive' => 'D Datei mit dr Archiv-ID $1 cha nit widerhärgstellt wäre, wel si nit in dr Datebank vorhanden isch. Villicht isch si scho widerhärgstellt wore.',
'undelete-error' => 'Bim Widerhärstelle vu dr Syte het s e Fähler gee.',
'undelete-error-short' => 'Fähler bim Widerhärstelle vu dr Datei $1',
'undelete-error-long' => 'S sin Fähler bim Widerhärstelle vun ere Datei feschtgstellt wore:

$1',
'undelete-show-file-confirm' => 'Bisch sicher, ass Du e gleschti Version vu dr Datei „<nowiki>$1</nowiki>“ vum $2, $3 Uhr wit aaluege?',
'undelete-show-file-submit' => 'Jo',

# Namespace form on various pages
'namespace' => 'Namensruum:',
'invert' => 'Uswahl umkehre',
'tooltip-invert' => 'Des Chäschtli aaklicke go Änderige im gwehlte Namensruum un, wänn uusgwehlt, im zuegherige Namensruum uusblände',
'namespace_association' => 'Zuegordnete Namensruum',
'tooltip-namespace_association' => 'Des Chäschtli aaklicke go dr Diskussionsnamensruum oder dr Namesnruum zuesätzlig mityybezie, wu zue Dyre Uuswahl derzue ghert.',
'blanknamespace' => '(Haupt-)',

# Contributions
'contributions' => 'Benutzer-Byträg',
'contributions-title' => 'Benutzerbyytreg vu „$1“',
'mycontris' => 'Myyni Byyträg',
'contribsub2' => 'Für $1 ($2)',
'nocontribs' => 'S sin keini Benutzerbyytreg mit däne Kriterie gfunde wore.',
'uctop' => '(aktuell)',
'month' => 'u Monet:',
'year' => 'bis Jahr:',

'sp-contributions-newbies' => 'Zeig nume Biträg vo neie Benutzer',
'sp-contributions-newbies-sub' => 'vo nöji Benützer',
'sp-contributions-newbies-title' => 'Benutzerbyytreg vu neije Benutzer',
'sp-contributions-blocklog' => 'Sperrlogbuech',
'sp-contributions-deleted' => 'gleschti Bytreg',
'sp-contributions-uploads' => 'Uffegladeni Dateie',
'sp-contributions-logs' => 'Logbiecher',
'sp-contributions-talk' => 'Diskussion',
'sp-contributions-userrights' => 'Benutzerrächtsverwaltig',
'sp-contributions-blocked-notice' => 'Dää Benutzer isch zur Zyt gsperrt. Do chunnt dr aktuäll Yytrag us em Benutzersperr-Logbuech:',
'sp-contributions-blocked-notice-anon' => 'Die IP-Adräss isch zur Zyt gsperrt.
Do chunnt dr aktuäll Yytrag us em Benutzersperr-Logbuech:',
'sp-contributions-search' => 'Suech no Benutzerbiträg',
'sp-contributions-username' => 'IP-Adress oder Benutzername:',
'sp-contributions-toponly' => 'Nume aktuälli Versione zeige',
'sp-contributions-submit' => 'Sueche',

# What links here
'whatlinkshere' => 'Was verwyst do druff?',
'whatlinkshere-title' => 'Sytene, wo uf „$1“ verlinke',
'whatlinkshere-page' => 'Syte:',
'linkshere' => "Die Sytene hen e Link, wu zu '''„[[:$1]]“''' fiere:",
'nolinkshere' => "Kei Artikel verwyyst uf '''„[[:$1]]“'''.",
'nolinkshere-ns' => "Kei Syte verwyyst uf '''„[[:$1]]“''' im gwehlte Namensruum.",
'isredirect' => 'Wyterleitigssyte',
'istemplate' => 'Vorlageybindig',
'isimage' => 'Dateigleich',
'whatlinkshere-prev' => '{{PLURAL:$1|vorder|vorderi $1}}',
'whatlinkshere-next' => '{{PLURAL:$1|nächscht|nächschti $1}}',
'whatlinkshere-links' => '← Links',
'whatlinkshere-hideredirs' => 'Wyterleitige $1',
'whatlinkshere-hidetrans' => 'Vorlageyybindige $1',
'whatlinkshere-hidelinks' => 'Links $1',
'whatlinkshere-hideimages' => 'Dateigleicher $1',
'whatlinkshere-filters' => 'Filter',

# Block/unblock
'autoblockid' => 'Automatischi Sperrig #$1',
'block' => 'Benutzer sperre',
'unblock' => 'Benutzer frejgee',
'blockip' => 'Däm Binutzer d Bearbeitigsrächt furtnee',
'blockip-title' => 'Benutzer sperre',
'blockip-legend' => 'IP-Adräss/Benutzer sperre',
'blockiptext' => 'Nimm des Formular go ne Benutzer oder e IP-Adräss sperre.
Des sott numme erfolge go Vandalismus verhindere un in Ibereinstimmig mit in dr [[{{MediaWiki:Policy-url}}|Leitlinie]]. Bitte gib au ne Grund fi d Sperri aa (z. B. indäm du einzel ni Syte zitiersch, wu vandaliert wore sin).',
'ipadressorusername' => 'IP-Adräss oder Benutzername:',
'ipbexpiry' => 'Sperrduur:',
'ipbreason' => 'Grund:',
'ipbreasonotherlist' => 'Anderi Begrindig',
'ipbreason-dropdown' => '* Allgmeini Sperrgrind
** Lesche vu Syte
** Aalege vu bledsinnige Syte
** Vylfachi Verstess gege d Richtlinie fir Netzgleicher
** Verstoss gege dr Grundsatz „Kei persenligi Aagriff“
* Benutzerspezifischi Sperrgrind
** Uugeignete Benutzername
** Neijaamäldig vun eme uubschränkt gsperrte Benutzer
* IP-spezifischi Sperrgrind
** Proxy, wäge Vandalismus vu einzelne Benutzer lengerfrischtig gsperrt',
'ipb-hardblock' => 'Aagmäldeti Benutzer dra hindere, Bearbeitige unter däre IP-Adräss vorzneh',
'ipbcreateaccount' => 'Aalege vu Benutzerchonte verhindere',
'ipbemailban' => 'E-Mail-Versand sperre',
'ipbenableautoblock' => 'Sperr di aktuäll vu däm Benutzer brucht IP-Adräss un automatisch alli wytere, wun er nimmt go Syte bearbeite oder Benutzerchonte aalege',
'ipbsubmit' => 'IP-Adräss/Benutzer sperre',
'ipbother' => 'Anderi Duur (englisch):',
'ipboptions' => '2 Stunde:2 hours,1 Tag:1 day,3 Täg:3 days,1 Wuche:1 week,2 Wuche:2 weeks,1 Monet:1 month,3 Monet:3 months,6 Monet:6 months,1 Johr:1 year,Fir immer:infinite',
'ipbotheroption' => 'Anderi Duur',
'ipbotherreason' => 'Anderi/zuesätzligi Begrindig:',
'ipbhidename' => 'Benutzername in dr Lischt vu aktive Sperrine un im Benutzerverzeichnis verstecke.',
'ipbwatchuser' => 'Benutzer(diskussions)syte beobachte',
'ipb-disableusertalk' => 'Dää Benutzer dra hindere syy eigeni Diskussionssyte z bearbeite, solang er gsperrt isch',
'ipb-change-block' => 'Nomol sperre mit däne Sperrparameter',
'ipb-confirm' => 'Sperrig bstetige',
'badipaddress' => 'D IP-Adräss het e falsch Format.',
'blockipsuccesssub' => 'Mit Erfolg gsperrt',
'blockipsuccesstext' => 'Dr Benutzer/d IP-Adräss [[Special:Contributions/$1|$1]] isch gsperrt wore.<br />
Go d Sperri ufhebe lueg d [[Special:BlockList|Lisch vu allene aktive Sperrine]].',
'ipb-blockingself' => 'Du bist grad am Sperre vu Dir sälber! Wettsch des wirkli mache?',
'ipb-confirmhideuser' => 'Du bist grad am Sperre vun eme Benutzer im Modus „Benutzer verstecke“. Des fiert derzue, ass dr Benutzername in allne Lischten un Logbiecher unterdruckt wird. Wettsch des wirkli mache?',
'ipb-edit-dropdown' => 'Sperrgrind bearbeite',
'ipb-unblock-addr' => '„$1“ frejgee',
'ipb-unblock' => 'IP-Adräss/Benutzer frejgee',
'ipb-blocklist' => 'Alli aktuälle Sperrine aazeige',
'ipb-blocklist-contribs' => 'Benutzerbyytreg fir „$1“',
'unblockip' => 'IP-Adräss frejgee',
'unblockiptext' => 'Mit däm Formular chasch e IP-Adräss oder e Benutzer frejgee.',
'ipusubmit' => 'Die Sperri useneh',
'unblocked' => '[[User:$1|$1]] isch frejgee wore',
'unblocked-range' => 'D Sperri fir $1 isch ufghobe',
'unblocked-id' => 'Sperr-ID $1 isch freijgee wore',
'blocklist' => 'Gsperrti Benutzer',
'ipblocklist' => 'Gsperrti Benutzer',
'ipblocklist-legend' => 'Suech no eme gsperrte Benutzer',
'blocklist-userblocks' => 'Benutzersperrine uusblände',
'blocklist-tempblocks' => 'Befrischteti Sperrine uusblände',
'blocklist-addressblocks' => 'IP-Sperrine uusblände',
'blocklist-rangeblocks' => 'Beryychssperre ussblände',
'blocklist-timestamp' => 'Zytstämpfel',
'blocklist-target' => 'Ziil',
'blocklist-expiry' => 'Gsperrt bis',
'blocklist-by' => 'Gsperrt vu',
'blocklist-params' => 'Sperrparameter',
'blocklist-reason' => 'Grund',
'ipblocklist-submit' => 'Sueche',
'ipblocklist-localblock' => 'Lokali Sperri',
'ipblocklist-otherblocks' => 'Anderi {{PLURAL:$1|Sperri|Sperrine}}',
'infiniteblock' => 'uubegränzt',
'expiringblock' => 'hert uf am $1 am $2',
'anononlyblock' => 'nume Anonymi',
'noautoblockblock' => 'Autoblock deaktiviert',
'createaccountblock' => 'Aalege vu Benutzerchonte gsperrt',
'emailblock' => 'E-Mail-Versand gsperrt',
'blocklist-nousertalk' => 'derf eigeni Diskussionssyte nit bearbeite',
'ipblocklist-empty' => 'In dr Lischt het s kei Yytreg.',
'ipblocklist-no-results' => 'Di gsuecht IP-Adräss/dr Benutzername isch nit gsperrt.',
'blocklink' => 'D Bearbeitigsrächt furtnee',
'unblocklink' => 'freigä',
'change-blocklink' => 'Sperri ändere',
'contribslink' => 'Byträg',
'emaillink' => 'E-Mail abschicke',
'autoblocker' => 'Automatischi Sperri, wel Du e gmeinsami IP-Adräss mit [[User:$1|Benutzer:$1]] bruchsch. Grund: „$2“.',
'blocklogpage' => 'Sperrigs-Protokoll',
'blocklog-showlog' => 'Dää Benutzer isch schon emol gsperrt wore. S Sperrine-Logbuech git s do as Referänz:',
'blocklog-showsuppresslog' => 'Dää Benutzer isch schon emol gsperrt wore un syyni Bearbeitige sin uusblädet wore. S Uusbländigs-Logbuech git s do as Referänz:',
'blocklogentry' => 'sperrt [[$1]] für d Ziit vo: $2 $3',
'reblock-logentry' => 'het d Sperri fir „[[$1]]“ gänderet fir dr Zytruum: $2 $3',
'blocklogtext' => 'Des isch s Logbuech iber Sperrige un Entsperrige vu Benutzer. Automatisch blockierti IP-Adrässe wäre nit erfasst. Lueg au [[Special:BlockList|Block Lischt]] fir e Lischt vu gsperrte Benutzer.',
'unblocklogentry' => 'het d Sperri vu „$1“ ufghobe',
'block-log-flags-anononly' => 'nume Anonymi',
'block-log-flags-nocreate' => 'Aalege vu Benutzerchonte gsperrt',
'block-log-flags-noautoblock' => 'Autoblock deaktiviert',
'block-log-flags-noemail' => 'E-Mail-Versand gsperrt',
'block-log-flags-nousertalk' => 'derf di eigene Diskussionssyte nit bearbeite',
'block-log-flags-angry-autoblock' => 'erwyterete Autoblock aktiviert',
'block-log-flags-hiddenname' => 'Benutzername versteckt',
'range_block_disabled' => 'D Megligkeit, ganzi Adrässryym z sperre, isch nit aktiviert.',
'ipb_expiry_invalid' => 'D Duur, wu yygee woren isch, isch nit giltig.',
'ipb_expiry_temp' => 'Versteckti Benutzername-Sperrine solle permanent syy.',
'ipb_hide_invalid' => 'S isch nit megli des Benutzerkonto z unterdrucke; villicht het s viili Bearbeitige.',
'ipb_already_blocked' => '„$1“ isch scho gsperrt wore.',
'ipb-needreblock' => '{{GENDER:|De|D|}} „$1“ isch scho gsperrt. Mechtsch d Sperrparameter ändere?',
'ipb-otherblocks-header' => 'Anderi {{PLURAL:$1|Sperri|Sperrine}}',
'unblock-hideuser' => 'Du chasch dää Benutzer nit entsperre, wel syy Benutzername versteckt woren isch.',
'ipb_cant_unblock' => 'Fähler: Sperr-ID $1 nit gfunde. S cha syy, ass d Sperri scho ufghoben isch .',
'ipb_blocked_as_range' => 'Fähler: D IP-Adräss $1 isch as Teil vu dr Beryychssperri $2 indirekt gsperrt. S isch nit megli, nume $1 z entsperre.',
'ip_range_invalid' => 'Uugiltige IP-Adrässberyych.',
'ip_range_toolarge' => 'Adrässberyych, wu greßer sin wie /$1, sin nit erlaubt.',
'blockme' => 'Sperr mi',
'proxyblocker' => 'Proxy blocker',
'proxyblocker-disabled' => 'Die Funktion isch deaktiviert.',
'proxyblockreason' => 'Dyni IP-Adrässe isch gsperrt wore, wel si ne ufige Proxy isch. Bitte kontaktier Dyyn Internet-Provider oder Dyni Systemadministratore un informier si iber des Sicherheitsproblem.',
'proxyblocksuccess' => 'Fertig.',
'sorbsreason' => 'D IP-Adräss isch in dr DNSBL vu {{SITENAME}} as uffige PROXY glischtet.',
'sorbs_create_account_reason' => 'D IP-Adräss isch in dr DNSBL vu {{SITENAME}} as uffige PROXY glischtet. S Aalege vu neije Benutzer isch nit megli.',
'cant-block-while-blocked' => 'Du derfsch kei anderi Benutzer sperre, derwylscht Du sälber gsperrt bisch.',
'cant-see-hidden-user' => 'Dr Benutzer, wu Du versuechsch z sperre, isch scho gsperrt un versteckt wore. Du chasch d Sperri vu däm Benutzer nit säh oder bearbeite, wel du s „hideuser“-Rächt nit hesch.',
'ipbblocked' => 'Du chasch keini andere Benutzer sperre oder entsperre, wel Du sälber gsperrt bisch',
'ipbnounblockself' => 'Du derfsch di nit sälber entsperre',

# Developer tools
'lockdb' => 'D Datebank sperre',
'unlockdb' => 'D Datebank freigää',
'lockdbtext' => 'Durch s Sperre vo dere Datebank werde alli Benutzer devo abghalte Syte z bearbeite, ihri Ystellige z ändre usw. Bitte bstätig dass du des würkli wottsch mache, un dass du d Datebank nooch dynrer Wartig wider freigisch.',
'unlockdbtext' => 'Durch s Entsperre vo dr Datebank chönne alli Benutzer wider Syte bearbeite, ihri Ystellige ändre usw. Bitte bstätig dass du des würkli wottsch mache.',
'lockconfirm' => 'Joo, ich wott d Datebank ächt sperre.',
'unlockconfirm' => 'Joo, ich wott d Datebank freigää.',
'lockbtn' => 'D Datebank sperre',
'unlockbtn' => 'D Datebank freigää',
'locknoconfirm' => 'Du hesch s Bstätigungsfäld nüt markiert.',
'lockdbsuccesssub' => 'D Datebank isch erfolgrych gsperrt worde',
'unlockdbsuccesssub' => 'D Datebank isch erfolgrych freigää worde',
'lockdbsuccesstext' => 'D {{SITENAME}}-Datebank isch gsperrt worde.<br />Bitte vergiss nüt d Datebank [[Special:UnlockDB|wider freizgää]], sobald d Wartung abgschlosse isch.',
'unlockdbsuccesstext' => 'D {{SITENAME}}-Datebank isch freigää worde.',
'lockfilenotwritable' => 'Die Datebank-Sperrdatei cha nüt beschrybe werde. Zume die Datebank chönne Sperre oder Freigää, muess si vum Webserver chönne bschrybe werde.',
'databasenotlocked' => 'D Datebank isch nüt gsperrt.',
'lockedbyandtime' => '(vu $1 am $2 am $3 Uhr)',

# Move page
'move-page' => '„$1“ verschiebe',
'move-page-legend' => 'Artikel verschiebe',
'movepagetext' => 'Mit däm Formular chasch du en Artikel verschiebe, u zwar mit syre komplette Versionsgschicht. Der alt Titel leitet zum nöie wyter, aber Links ufen alt Titel blyben unveränderet.',
'movepagetext-noredirectfixer' => "Mit däm Formular unte chasch e Syte umnänne, indäm Du si mitsamt allene Versione uf e neje Titel verschiebsch.
Dr alt Titel leitet derno zum neje wyter.
Stell sicher, ass Du im Aaschluss alli [[Special:DoubleRedirects|dopplete]] oder [[Special:BrokenRedirects|kaputtige Wyterleitige]] iberpriefsch.
Du bisch derfir verantwortli, ass Link wyter uf s korräkt Ziil verwyyse.

D Syte wird '''nit''' verschobe, wänn s scho ne Syte git mit em vorgsähne Titel, ußer sälli isch läär oder e Wyterletig ohni ne Versionsgschicht.
Des bedytet, ass Du d Umnännig chasch ruckgängig mache, wänn Du ne Fähler gmacht hesch. Du chasch aber kei Syte iberschryybe.

'''Warnig!'''
D Verschiebig cha großi un nit erwarteti Folge haa fir hyfig bsuechti Syte.
Du sottsch wäge däm d Konsequänze verstande haa, voreb Du jetz wytermachsch.",
'movepagetalktext' => "D Diskussionssyte wird mitverschobe, '''ussert:'''
*Du verschiebsch d Syten i nen andere Namensruum, oder
*es git scho ne Diskussionssyte mit däm Namen oder
*du wählsch unte d Option, se nid z verschiebe.

I söttigne Fäll müessti d Diskussionssyten allefalls vo Hand kopiert wärde.",
'movearticle' => 'Artikel verschiebe',
'moveuserpage-warning' => "'''Warnig:''' Du bis am Verschiebe vun ere Benutzersyte. Bitte gib Achtig, ass doderdur nume die Syte verschobe wird, aber dr Benutzer '''nit''' umgnännt wird.",
'movenologin' => 'Du bisch nid aagmäldet',
'movenologintext' => 'Du muesch e regischtrierte Benutzer syy un Di [[Special:UserLogin|aamälde]] go die Syte verschiebe.',
'movenotallowed' => 'Du derfsch kei Syte verschiebe.',
'movenotallowedfile' => 'Du derfsch kei Dateie verschiebe.',
'cant-move-user-page' => 'Du derfsch kei Benutzersyte verschiebe (mit Usnaam vo Untersyte).',
'cant-move-to-user-page' => 'Du derfsch kei Syte uf e Benutzersyte verschiebe (mit Usnaam vo Untersyte).',
'newtitle' => 'Zum nöie Titel',
'move-watch' => 'Die Syte beobachte',
'movepagebtn' => 'Artikel verschiebe',
'pagemovedsub' => 'Verschiebig erfolgrych',
'movepage-moved' => '\'\'\'"$1" isch verschobe wore uf "$2"\'\'\'',
'movepage-moved-redirect' => 'E Wyterleitig isch aagleit wore.',
'movepage-moved-noredirect' => 'D Erstellig vonere Wyterleitig isch unterdruggt worde.',
'articleexists' => 'E Syte mit däm Name git s scho oder de Name isch nid giltig. Bitte nimm en andere.',
'cantmove-titleprotected' => 'Die Syte het nüt chönne verschobe werde, wyl de nöie Titel gsperrt isch.',
'talkexists' => 'D Syte sälber isch erfolgrych verschobe worde, nid aber d Diskussionssyte, wil s under em nöue Titel scho eini het gä. Bitte setz se vo Hand zäme.',
'movedto' => 'verschoben uf',
'movetalk' => 'Diskussionssyte nach Müglechkeit mitverschiebe',
'move-subpages' => 'Untersyte verschiebe (bis $1)',
'move-talk-subpages' => 'Untersyte vu dr Diskussionssyte verschiebe (bis $1)',
'movepage-page-exists' => 'D Syte „$1“ gits scho un cha nüt automatisch überschribe werde.',
'movepage-page-moved' => 'D Syte „$1“ isch uf „$2“ verschobe worde.',
'movepage-page-unmoved' => 'D Syte „$1“ het nüt chönne uf „$2“ verschobe werde.',
'movepage-max-pages' => 'D Maximalaazaal vo $1 {{PLURAL:$1|Syte|Syte}} isch verschobe worde. Mee chönne automatisch nüt verschobe werde.',
'movelogpage' => 'Verschiebigs-Logbuech',
'movelogpagetext' => 'Des isch e Lischte mit allene Syte wo verschobe worde sin.',
'movesubpage' => '{{PLURAL:$1|Untersyte|Untersyte}}',
'movesubpagetext' => 'Die Syte het $1 {{PLURAL:$1|Untersyte|Untersyte}}.',
'movenosubpage' => 'Die Syte het kei Untersyte.',
'movereason' => 'Grund:',
'revertmove' => 'Zrugg verschiebe',
'delete_and_move' => 'Lösche un Verschiebe',
'delete_and_move_text' => '== D Ziilsyte isch scho vorhande, lösche?==

D Syte „[[:$1]]“ gits scho. Wottsch du si lösche, zume Platz zum verschiebe mache?',
'delete_and_move_confirm' => 'D Ziilsyte für d Verschiebig lösche',
'delete_and_move_reason' => 'glöscht, zume Platz für s Verschiebe vo „[[$1]]“ z mache',
'selfmove' => 'Der nöi Artikelname mues en andere sy als der alt!',
'immobile-source-namespace' => 'Syte ussem „$1“-Namensruum chönne nüt verschobe werde',
'immobile-target-namespace' => 'Syte chönne nüt in de „$1“-Namensruum verschobe werde',
'immobile-target-namespace-iw' => 'E Interwiki-Link isch kei gültigs Ziil für e Syteverschiebig.',
'immobile-source-page' => 'Die Syte cha nüt verschobe werde.',
'immobile-target-page' => 'Uf die Ziilsyte cha nüt verschobe werde.',
'bad-target-model' => 'Di gwinsche Ziilsyte brucht e ander Inhaltsmodell. S Inhaltsmodell $1 cha nit in s Inhaltsmodell $2 umgwandlet wäre.',
'imagenocrossnamespace' => 'Dateie chönne nüt ussem {{ns:file}}-Namensruum use verschobe werde',
'nonfile-cannot-move-to-file' => 'Nit-Dateie chenne nit in dr Datei-Namensruum verschobe wäre',
'imagetypemismatch' => 'D nöii Dateierwiiterig passt nüt zu sym Typ',
'imageinvalidfilename' => 'De Name vo dr Ziildatei isch ungültig',
'fix-double-redirects' => 'Alli Wyterleitige, wo uf de alte Titel zeige, aktualisiere',
'move-leave-redirect' => 'E Wyterleitig hinterloo',
'protectedpagemovewarning' => "'''WARNIG:''' Die Syte isch gschitzt wore, ass si nume Benutzer mit Ammannerächt chenne verschiebe.
As Referänz wird do dr letscht Logbuechyytrag aagee:",
'semiprotectedpagemovewarning' => "'''OBACHT:''' Die Syte isch gschitzt wore, ass si nume aagmäldeti Benutzer chenne verschiebe.
As Referänz wird do dr letscht Logbuechyytrag aagee:",
'move-over-sharedrepo' => '==Datei git s==
[[:$1]] git s in ere gmeinsam gnutzte Mediedatebank. S Verschiebe vun ere Datei uf dää Titel iberschrybt di gmeinsam gnutzt Datei.',
'file-exists-sharedrepo' => 'Dr gwehlt Dateiname wird scho in ere gmeinsam gnutzte Mediedatebank brucht.
Bitte wehl e andre Name.',

# Export
'export' => 'Sytenen exportiere',
'exporttext' => 'Du chasch dr Text un d Versionsgschicht vu einzelne Syte in ere XML-Datei exportiere. Die Datei cha derno in e ander MediaWiki-Wiki importiert wäre iber [[Special:Import|Importiere]].
Zum Exportiere trag dr Sytetitel in dr Täxtchaschte unter yy, ei Titel pro Zyyle, un wehl us, eb Du di aktuäll Version mitsamt dr eltere Versione (mit dr Versionsgschicht-Zyyle) oder nume di aktuäll Version mit dr Information iber di letscht Bearbeitig. In däm Fall chasch au e Link fir dr Export verwände, z. B. [[{{#Special:Export}}/{{MediaWiki:Mainpage}}]] fir d Syte "[[{{MediaWiki:Mainpage}}]]".',
'exportall' => 'Alli Syte exportiere',
'exportcuronly' => 'Numme d aktuelli Version vo dr Syte exportiere, statt dr ganze Versionsgschicht',
'exportnohistory' => "----
'''Hywys:''' S Exportiere vo ganzi Versionsgschichte durch des Formular isch us Gründ vo dr Leischtig vum Syschtem abgschaltet worde",
'exportlistauthors' => 'Fir jedi Syte di vollständig Lischt vu dr Bearbeiter derzue tue',
'export-submit' => 'Sytene exportiere',
'export-addcattext' => 'Syte us dere Kategori dezuefüege',
'export-addcat' => 'Dezuefüege',
'export-addnstext' => 'Syte us em Namensruum zuefiege:',
'export-addns' => 'Zuefiege',
'export-download' => 'Als XML-Datei spychere',
'export-templates' => 'Vorlage mit yybinde',
'export-pagelinks' => 'Vergleichti Syten automatisch mit exportiere bis zuen ere Rekursionstiefi vu:',

# Namespace 8 related
'allmessages' => 'Systemnochrichte',
'allmessagesname' => 'Name',
'allmessagesdefault' => 'Standardtext',
'allmessagescurrent' => 'jetzige Tekscht',
'allmessagestext' => 'Des isch e Lischt vu allene meglige Syschtemnochrichte us em MediaWiki Namensruum.
Lueg au uf [//www.mediawiki.org/wiki/Localisation MediaWiki Lokalisierig] un [//translatewiki.net translatewiki.net], wänn Du zue dr MediaWiki-Lokalisierig wit byytrage.',
'allmessagesnotsupportedDB' => "'''{{ns:special}}:Allmessages''' cha nit bruucht wärde will '''\$wgUseDatabaseMessages''' abgschalte isch.",
'allmessages-filter-legend' => 'Filter',
'allmessages-filter' => 'Filter fir dr aapasst Zuestand:',
'allmessages-filter-unmodified' => 'Nit gänderet',
'allmessages-filter-all' => 'Alli',
'allmessages-filter-modified' => 'Gänderet',
'allmessages-prefix' => 'Präfixfilter:',
'allmessages-language' => 'Sproch:',
'allmessages-filter-submit' => 'Gang',

# Thumbnails
'thumbnail-more' => 'Vergreßere',
'filemissing' => 'D Datei fäält',
'thumbnail_error' => 'Fähler bir Härstellig vo re Vorschou: $1',
'djvu_page_error' => 'DjVu-Syte isch uusserhalb vum Sytebereich',
'djvu_no_xml' => 'XML-Date chönne für d DjVu-Datei nüt abgruefe werde',
'thumbnail-temp-create' => 'D Datei fir di temporär Miniaturaasicht het nit chenne aagleit wäre.',
'thumbnail-dest-create' => 'D Miniaturaasicht het nit chenne an däm Ort gspycheret wäre.',
'thumbnail_invalid_params' => 'Ungültigs Thumbnail-Parameter',
'thumbnail_dest_directory' => 'S Ziilverzeichnis cha nüt erstellt werde',
'thumbnail_image-type' => 'Bildtyp wird nit unterstitzt',
'thumbnail_gd-library' => 'Uuvollständigi GD-Library-Konfiguration: Funktion $1 fählt',
'thumbnail_image-missing' => 'Datei fählt schyns: $1',

# Special:Import
'import' => 'Sytene importiere',
'importinterwiki' => 'Transwiki-Import',
'import-interwiki-text' => 'Wääl e Wiki un e Syte zum Importiere us.
S Datum vo dr Bearbeitig un dr Benutzername blybe erhalte.
Alli Transwiki-Import-Aktione werde im [[Special:Log/import|Import-Logbuech]] protokolliert.',
'import-interwiki-source' => 'Quell-Wiki/-Syte:',
'import-interwiki-history' => 'Alli früeneri Versione vo dere Syte importiere',
'import-interwiki-templates' => 'Mit allene Vorlage',
'import-interwiki-submit' => 'Import',
'import-interwiki-namespace' => 'Ziilnamensruum:',
'import-interwiki-rootpage' => 'Ziilstammsyte (optional):',
'import-upload-filename' => 'Dateiname:',
'import-comment' => 'Grund:',
'importtext' => 'Datei iber d Spezialsyte [[Special:Export|Exportfunktion]] us em Quellwiki exportiere.
Die uf em lokale Rächner spychere un derno do uffelade.',
'importstart' => 'Importiere Syte …',
'import-revision-count' => '– {{PLURAL:$1|1 Vérsion|$1 Vérsiona}}',
'importnopages' => 'Es isch kei Syte doo wo mer importiere chönnt.',
'imported-log-entries' => '$1 {{PLURAL:$1|lLogbuechyytrag|Logbuechyytreg}} importiert.',
'importfailed' => 'Dr Import isch misslunge: $1',
'importunknownsource' => 'Importquell isch unbekannt',
'importcantopen' => 'D Importdatei het nit chenne ufgmacht wäre.',
'importbadinterwiki' => 'Falscher Interwiki-Link',
'importnotext' => 'Leer oder kei Teggscht',
'importsuccess' => 'Dr Import isch abgschlosse.',
'importhistoryconflict' => 'Es het scho ältri Versione wo mit dere kollidiere. Es isch mögli dass die Syte scho emool importiert worde isch.',
'importnosources' => 'Für de Transwiki-Import sin kei Quelle definiert worde. Wege dem isch s direkte Ufelade vo Gschichtsversione gsperrt.',
'importnofile' => 'Es isch kei Importdatei ufeglade worde.',
'importuploaderrorsize' => 'S Ufelade vo dr Importdatei isch misslunge. D Datei isch grösser als erlaubt isch.',
'importuploaderrorpartial' => 'S Ufelade vo dr Importdatei isch misslunge. D Datei het numme zum Deil chönne ufeglade werde.',
'importuploaderrortemp' => 'S Ufelade vo dr Importdatei isch misslunge. E temporärs Verzeichnis fäält.',
'import-parse-failure' => 'Fääler bim XML-Import:',
'import-noarticle' => 'Du hesch kei Syte zum importiere aagää!',
'import-nonewrevisions' => 'Es sin scho alli früeneri Versione importiert worde.',
'xml-error-string' => '$1 Zeile $2, Spalte $3, (Byte $4): $5',
'import-upload' => 'XML-Date ufelade',
'import-token-mismatch' => 'D Sitzigsdate sin verlore gange. Bitte versuech es noo emool.',
'import-invalid-interwiki' => 'Us däm Wiki wo du aagää hesch isch kei Import mögli.',
'import-error-edit' => 'Die Syte „$1“ isch nit importiert worde, wyl du nit dezue berächtigt bisch, si z bearbeite.',
'import-error-create' => 'Die Syte „$1“ isch nit importiert worde, wyl du nit dezue berächtigt bisch, si z erstelle.',
'import-error-interwiki' => 'D Syte „$1“ isch nit importiert wore, wel dr Name vun ere fir externi Link (Interwiki) reserviert isch.',
'import-error-special' => 'D Syte „$1“ isch nit importiert wore, wel si zuen eme bsundere Namensruum ghert, wu kei Syte megli sin.',
'import-error-invalid' => 'Syte „$1“ isch nit importiert wore, wel dr Name vun ere nit giltig isch.',
'import-options-wrong' => 'Falschi {{PLURAL:$2|Option|Optione}}: <nowiki>$1</nowiki>',
'import-rootpage-invalid' => 'Dää Stammsytename isch nit giltig.',
'import-rootpage-nosubpage' => 'Im Namensruum „$1“ vu dr Stammsyte sin kei Untersyte erlaubt.',

# Import log
'importlogpage' => 'Import-Logbuech',
'importlogpagetext' => 'Adminischtrativer Import vo Sytene mit Versionsgschichte us anderi Wikis.',
'import-logentry-upload' => '„[[$1]]“ isch vunere Datei importiert worde',
'import-logentry-upload-detail' => '$1 {{PLURAL:$1|Vérsion|Vérsiona}}',
'import-logentry-interwiki' => '„$1“ isch importiert worde (Transwiki)',
'import-logentry-interwiki-detail' => '$1 {{PLURAL:$1|Version|Versione}} vo $2',

# JavaScriptTest
'javascripttest' => 'JavaScript-Tescht',
'javascripttest-title' => '$1-Tescht wäre durgfiert',
'javascripttest-pagetext-noframework' => 'Die Syte isch reserviert fir JavaSkript-Tescht.',
'javascripttest-pagetext-unknownframework' => 'Nit bekannt Framework „$1“.',
'javascripttest-pagetext-frameworks' => 'Bitte eis vu däne Framework uuswehle: $1',
'javascripttest-pagetext-skins' => 'Wehl e Benutzeroberflechi uus fir d Durfierig vu dr Tescht:',
'javascripttest-qunit-intro' => 'Lueg d [$1 Dokumentation zue Tescht] uf mediawiki.org',
'javascripttest-qunit-heading' => 'MediaWiki-JavaSkript-QUnit-Teschter',

# Tooltip help for the actions
'tooltip-pt-userpage' => 'Dyyni Benutzersyte',
'tooltip-pt-anonuserpage' => 'D Benutzersyte vo der IP-Adress wo du mit schaffsch',
'tooltip-pt-mytalk' => 'Dyyni Diskussionssyte',
'tooltip-pt-anontalk' => 'Diskussione über Änderige vo dere IP-Adress',
'tooltip-pt-preferences' => 'Myni Ystellige',
'tooltip-pt-watchlist' => 'Lischte vo de beobachtete Syte.',
'tooltip-pt-mycontris' => 'Lischt vu Dyyne Byyträg',
'tooltip-pt-login' => 'Aamälde',
'tooltip-pt-anonlogin' => 'Mir ermuntre dich zwar dass du dich miteme Benutzerkonto aamääldsch, es isch aber kei Pflicht!',
'tooltip-pt-logout' => 'Abmälde',
'tooltip-ca-talk' => 'Diskussion zum Artikelinhalt',
'tooltip-ca-edit' => 'Syte bearbeite. Bitte vor em Spychere d Vorschou aaluege.',
'tooltip-ca-addsection' => 'Neje Abschnitt aafange',
'tooltip-ca-viewsource' => 'Die Syte isch geschützt. Du chasch der Quelltext aaluege.',
'tooltip-ca-history' => 'Früecheri Versione vo dere Syte.',
'tooltip-ca-protect' => 'Seite beschütze',
'tooltip-ca-unprotect' => 'Syteschutz ändere',
'tooltip-ca-delete' => 'Syten entsorge',
'tooltip-ca-undelete' => 'Sodeli, da isch es wider.',
'tooltip-ca-move' => 'Dür ds Verschiebe gits e nöie Name.',
'tooltip-ca-watch' => 'Tue die Syten uf dyni Beobachtigslischte.',
'tooltip-ca-unwatch' => 'Nim die Syte us dyre Beobachtungslischte furt.',
'tooltip-search' => 'Dürchsuech {{SITENAME}}',
'tooltip-search-go' => 'Gang zunere Syte mit gnau däm Name, falls es eini git.',
'tooltip-search-fulltext' => 'Suech nooch Syte wo de Teggscht dinne hen',
'tooltip-p-logo' => 'Houptsyte',
'tooltip-n-mainpage' => 'Gang uf d Houptsyte',
'tooltip-n-mainpage-description' => 'Uf Hauptsyte goh',
'tooltip-n-portal' => 'Über ds Projekt, was du chasch mache, wo du was findsch',
'tooltip-n-currentevents' => 'Hindergrundinformatione zu aktuellen Ereignis finde',
'tooltip-n-recentchanges' => 'Lischte vo de letschten Änderige i däm Wiki.',
'tooltip-n-randompage' => 'E zuefälligi Syte',
'tooltip-n-help' => 'Ds Ort zum Usefinde.',
'tooltip-t-whatlinkshere' => 'Lischte vo allne Sytene, wo do ane linke',
'tooltip-t-recentchangeslinked' => 'Letschti Änderige vo de Syte, wo vo do verlinkt sin',
'tooltip-feed-rss' => 'RSS-Feed für selli Syte',
'tooltip-feed-atom' => 'Atom-Feed für selli Syte',
'tooltip-t-contributions' => 'Lischte vo de Byträg vo däm Benutzer',
'tooltip-t-emailuser' => 'Schick däm Benutzer e E-Bost',
'tooltip-t-upload' => 'Dateien ufelade',
'tooltip-t-specialpages' => 'Lischte vo allne Spezialsyte',
'tooltip-t-print' => 'E Version vo dere Syte zum Usdrugge.',
'tooltip-t-permalink' => 'E bständige Link uf die Version vo dr Syte',
'tooltip-ca-nstab-main' => 'Artikelinhalt aaluege',
'tooltip-ca-nstab-user' => 'Benutzersyte aaluege',
'tooltip-ca-nstab-media' => 'Mediasyte aaluege',
'tooltip-ca-nstab-special' => 'Sell isch e Spezialsyte, du chasch se nid bearbeite.',
'tooltip-ca-nstab-project' => 'D Projektsyte aaluege',
'tooltip-ca-nstab-image' => 'Die Bildsyten aaluege',
'tooltip-ca-nstab-mediawiki' => 'D Systemmäldige aaluege',
'tooltip-ca-nstab-template' => 'D Vorlag aaluege',
'tooltip-ca-nstab-help' => 'D Hilfssyten aaluege',
'tooltip-ca-nstab-category' => 'D Kategoryesyten aaluege',
'tooltip-minoredit' => 'Die Änderig als chly markiere.',
'tooltip-save' => 'Änderige spychere',
'tooltip-preview' => 'Vorschou vo dynen Änderige. Bitte vor em Spycheren aluege!',
'tooltip-diff' => 'Zeigt a, was du am Tekscht hesch veränderet.',
'tooltip-compareselectedversions' => 'Underschide zwüsche zwo usgwählte Versione vo dere Syten azeige.',
'tooltip-watch' => 'Tue die Syten uf dyni Beobachtigslischte.',
'tooltip-watchlistedit-normal-submit' => 'Yytreg uuseneh',
'tooltip-watchlistedit-raw-submit' => 'D Beobachtigslischt aktualisiere',
'tooltip-recreate' => 'Die Syte nöi erstelle, trotz dass si emool glöscht worren isch.',
'tooltip-upload' => 'Aafange mit ufelade',
'tooltip-rollback' => 'Mach alli letschti Ändrige uf dere Syte, wo vo däm Benutzer gmacht worre sin, ruggängig.',
'tooltip-undo' => 'Mach numme die eint Ändrig rugggängig, un zeig e Vorschau aa. Doodurch chasch in dr Zammefassig e Begründig aagää.',
'tooltip-preferences-save' => 'Yystellige spychere',
'tooltip-summary' => 'Gib e churzi Zämmefassig yy',

# Metadata
'notacceptable' => 'Dr Wiki-Server cha d Date nit im e Format z Verfiegig stelle, wu Dyy Grät cha läse.',

# Attribution
'anonymous' => '{{PLURAL:$1|Anonyme Benutzer|Anonymi Benutzer}} uff {{SITENAME}}',
'siteuser' => '{{SITENAME}}-Benutzer $1',
'anonuser' => 'anonyme {{SITENAME}}-Benutzer $1',
'lastmodifiedatby' => 'Diese Seite wurde zuletzt geändert um $2, $1 von $3.',
'othercontribs' => 'Basiert auf der Arbeit von $1.',
'others' => 'anderi',
'siteusers' => '{{SITENAME}}-{{PLURAL:$2|Benutzer|Benutzer}} $1',
'anonusers' => '{{PLURAL:$2|Anonyme|Anonymi}} {{SITENAME}}-Benutzer $1',
'creditspage' => 'Syteinformatione',
'nocredits' => 'Fir die Syte sin kein Informatione vorhande.',

# Spam protection
'spamprotectiontitle' => 'Spamschutz-Filter',
'spamprotectiontext' => 'D Syte, wu du wit spychere, isch vum Spamschutzfilter blockiert wore. Des lyt wahrschyyns am e Link uf e externi Syte.',
'spamprotectionmatch' => "'''Dää Text isch vum Spamfilter gfunde wore: ''$1'''''",
'spambot_username' => 'MediaWiki Spam-Syyferig',
'spam_reverting' => 'Letschti Version ohni Links zue $1 widerhärgstellt.',
'spam_blanking' => 'In allene Versione het s Links zue $1 gha, sufer gmacht.',
'spam_deleting' => 'Alli Versione mit eme Link zue $1 sin glescht woret.',

# Info page
'pageinfo-title' => 'Informatione zue „$1“',
'pageinfo-not-current' => 'Die Informatione chenne nume fir di nejscht Versions aazeigt wäre.',
'pageinfo-header-basic' => 'Basisinformatione',
'pageinfo-header-edits' => 'Bearbeitige',
'pageinfo-header-restrictions' => 'Syteschutz',
'pageinfo-header-properties' => 'Syteneigeschafte',
'pageinfo-display-title' => 'Aazeigtitel',
'pageinfo-default-sort' => 'Standardsortierkriterium',
'pageinfo-length' => 'Sytelengi (in Byte)',
'pageinfo-article-id' => 'Syten-ID',
'pageinfo-robot-policy' => 'Suechmaschinestatus',
'pageinfo-robot-index' => 'Indizierbar',
'pageinfo-robot-noindex' => 'Nit indizierbar',
'pageinfo-views' => 'Aazahl Sytenufruef',
'pageinfo-watchers' => 'Aazahl vu Beobachter',
'pageinfo-redirects-name' => 'Wyterleitige zue däre Syte',
'pageinfo-subpages-name' => 'Untersyte vu däre Syte',
'pageinfo-subpages-value' => '$1 ($2 {{PLURAL:$2|Wyterleitig|Wyterleitige}}; $3 {{PLURAL:$3|anderi Syte}})',
'pageinfo-firstuser' => 'Aagleit vu',
'pageinfo-firsttime' => 'Aagleit am',
'pageinfo-lastuser' => 'Letschte Bearbeiter',
'pageinfo-lasttime' => 'Datum vu dr letschte Bearbeitig',
'pageinfo-edits' => 'Aazahl Bearbeitige',
'pageinfo-authors' => 'Aazahl vu unterschidlige Autore',
'pageinfo-recent-edits' => 'Aazahl vu dr letschte Bearbeitige (innerhalb vu $1)',
'pageinfo-recent-authors' => 'Aazahl vu unterschidlige Autore',
'pageinfo-magic-words' => '{{PLURAL:$1|Magischs Wort|Magischi Werter}} ($1)',
'pageinfo-hidden-categories' => 'Versteckti {{PLURAL:$1|Kategori|Kategorie}} ($1)',
'pageinfo-templates' => 'Yybundeni {{PLURAL:$1|Vorlag|Vorlage}} ($1)',
'pageinfo-toolboxlink' => 'Informatione zue dr Syte',

# Patrolling
'markaspatrolleddiff' => 'Als patrulyrt markyre',
'markaspatrolledtext' => 'Erschtversion patrulyre',
'markedaspatrolled' => 'As kontrolliert markiert',
'markedaspatrolledtext' => 'Di uusgwehlt Änderig [[:$1]] isch vum Fäldhieter aagluegt wore.',
'rcpatroldisabled' => 'Kontroll vu dr letschte Änderige gsperrt',
'rcpatroldisabledtext' => 'D Kontroll vu dr letschte Änderige isch im Momänt gsperrt.',
'markedaspatrollederror' => 'Markierig as „kontrolliert“ nit megli.',
'markedaspatrollederrortext' => 'Du muesch e Syteänderig uswehle.',
'markedaspatrollederror-noautopatrol' => 'S isch nit erlaubt, eigeni Bearbeitige as kontrolliert z markiere.',

# Patrol log
'patrol-log-page' => 'Kontroll-Logbuech',
'patrol-log-header' => 'Des isch s Kontroll-Logbuech.',
'log-show-hide-patrol' => 'Kontroll-Logbuech $1',

# Image deletion
'deletedrevision' => 'alti Version: $1',
'filedeleteerror-short' => 'Fähler bi dr Datei-Leschig: $1',
'filedeleteerror-long' => 'Bi dr Datei-Leschig sin Fähler feschtgstellt wore:

$1',
'filedelete-missing' => 'D Datei „$1“ cha nit glescht wäre, wel si nit vorhande isch.',
'filedelete-old-unregistered' => 'D Datei-Version „$1“, wu aagee woren isch, isch nit in dr Datebank vorhande.',
'filedelete-current-unregistered' => 'D Datei „$1“, wu aagee woren isch, isch nit in dr Datebank vorhande.',
'filedelete-archive-read-only' => 'S Archiv-Verzeichnis „$1“ cha nit dur dr Webserver bschribe wäre.',

# Browsing diffs
'previousdiff' => '← Vorderi Änderig',
'nextdiff' => 'Nächschti Änderig →',

# Media information
'mediawarning' => "'''Warnig:''' In däre Art Datei chennt s e beswillige Programmcode din ha. Wänn du die Datei uusfiersch, cha s syy, ass Dyy Syschtem bschädigt wird.",
'imagemaxsize' => "Maximali Gressi vu Bilder :<br />'' (uf Bildbschrybigs-Syte)''",
'thumbsize' => 'Bildvorschou-Gröössi:',
'widthheightpage' => '$1 × $2, {{PLURAL:$3|1 Syte|$3 Syte}}',
'file-info' => 'Dateigressi: $1, MIME-Typ: $2',
'file-info-size' => '$1 × $2 Pixel, Dateigrößi: $3, MIME-Typ: $4',
'file-info-size-pages' => '$1 × $2 Pixel, Dateigreßi: $3, MIME-Typ: $4, $5 {{PLURAL:$5|Syte| Syte}}',
'file-nohires' => 'Kei höcheri Uflösig verfüegbar.',
'svg-long-desc' => 'SVG-Datei, Basisgrößi: $1 × $2 Pixel, Dateigrößi: $3',
'svg-long-desc-animated' => 'Animierti SVG-Datei, Basisgreßi $1 × $2 Pixel, Dateigreßi: $3',
'show-big-image' => 'Originalgrößi',
'show-big-image-preview' => 'Greßi vu däre Vorschau: $1.',
'show-big-image-other' => 'Wyteri {{PLURAL:$2|Ufflösig|Ufflösige}}: $1.',
'show-big-image-size' => '$1 × $2 Pixel',
'file-info-gif-looped' => 'Ändlosschlupf',
'file-info-gif-frames' => '$1 {{PLURAL:$1|Ramme|Ramme}}',
'file-info-png-looped' => 'Ändlosschlupf',
'file-info-png-repeat' => 'het $1 {{PLURAL:$1|Mol|Mol}} gspilt',
'file-info-png-frames' => '$1 {{PLURAL:$1|Ramme|Ramme}}',
'file-no-thumb-animation' => "'''Hiiwyys: Wäge tächnische Bschränkige wäre Vorschaubilder vu däre Datei nit animiert.'''",
'file-no-thumb-animation-gif' => "'''Hiiwyys: Wäge tächnische Bschränkige wäre Vorschaubilder vu hochuufgleste GIF-Dateien wie däre nit animiert.'''",

# Special:NewFiles
'newimages' => 'Gallery vo noie Bilder',
'imagelisttext' => "Hie isch e Lischte vo '''$1''' {{PLURAL:$1|Datei|Dateie}}, sortiert $2.",
'newimages-summary' => 'Die Spezialsyte zeigt di zletscht uffegladene Dateie aa.',
'newimages-legend' => 'Filter',
'newimages-label' => 'Dateiname (oder e Teil devu):',
'showhidebots' => '(Bötli $1)',
'noimages' => 'Kei Dateie gfunde.',
'ilsubmit' => 'Suech',
'bydate' => 'noch Datum',
'sp-newimages-showfrom' => 'Zeig neiji Dateie ab $1, $2 Uhr',

# Video information, used by Language::formatTimePeriod() to format lengths in the above messages
'seconds' => '{{PLURAL:$1|1 Sekund|$1 Sekunde}}',
'minutes' => '{{PLURAL:$1|1 Minut|$1 Minute}}',
'hours' => '{{PLURAL:$1|1 Stund|$1 Stunde}}',
'days' => '{{PLURAL:$1|1 Tag|$1 Täg}}',
'ago' => 'vor $1',

# Bad image list
'bad_image_list' => 'Format:

Nume Zylene, wo mit emne * afö, wärde berücksichtigt.
Nach em * mues zersch e Link zuren Unerwünschte Datei cho.
Wyteri Links uf der glyche Zyle wärden als Usnahme behandlet, wo die Datei trotzdäm darff vorcho.',

# Metadata
'metadata' => 'Metadate',
'metadata-help' => "Die Datei het wyteri Informatione, allwäg vor Digitalkamera oder vom Scanner wo se het gschaffe.
We die Datei isch veränderet worde, de cha's sy, das die zuesätzlechi Information für di verändereti Datei nümm richtig zuetrifft.",
'metadata-expand' => 'Erwytereti Details azeige',
'metadata-collapse' => 'Erwytereti Details verstecke',
'metadata-fields' => 'Die Fälder vu dr EXIF-Metadate, wu in däm MediaWiki-Systemtext aagee sin, wäre uf Bildbschrybigssyte mit ere yyklappte Metadatetabälle aazeigt.
Andri wäre standardmäßig nit aazeigt.
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
'exif-imagewidth' => 'Breiti',
'exif-imagelength' => 'Längi',
'exif-bitspersample' => 'Bit pro Farbkomponente',
'exif-compression' => 'Art vu dr Kompression',
'exif-photometricinterpretation' => 'Pixelzämmesetzig',
'exif-orientation' => 'Orientierung',
'exif-samplesperpixel' => 'Aazahl vu dr Komponente',
'exif-planarconfiguration' => 'Dateusrichtig',
'exif-ycbcrsubsampling' => 'Subsampling Rate vu Y bis C',
'exif-ycbcrpositioning' => 'Y un C Positionierig',
'exif-xresolution' => 'Horizontali Uflesig',
'exif-yresolution' => 'Vertikali Uflesig',
'exif-stripoffsets' => 'Bilddate-Versatz',
'exif-rowsperstrip' => 'Aazahl vu dr Zyylete pro Streife',
'exif-stripbytecounts' => 'Bytes pro komprimiertem Streife',
'exif-jpeginterchangeformat' => 'Offset zue JPEG SOI',
'exif-jpeginterchangeformatlength' => 'JPEG-Date in Bytes',
'exif-whitepoint' => 'Manuäll mit Mässig',
'exif-primarychromaticities' => 'Primäri Farbart',
'exif-ycbcrcoefficients' => 'YCbCr-Koeffiziente',
'exif-referenceblackwhite' => 'Schwarz/Wyss-Referenzpinkt',
'exif-datetime' => 'Spycherzytpunkt',
'exif-imagedescription' => 'Bildtitel',
'exif-make' => 'Hersteller',
'exif-model' => 'Modell',
'exif-software' => 'Software',
'exif-artist' => 'Fotograf',
'exif-copyright' => 'Urheberrächt',
'exif-exifversion' => 'Exif-Version',
'exif-flashpixversion' => 'unterstitzti Flashpix-Version',
'exif-colorspace' => 'Farbruum',
'exif-componentsconfiguration' => 'Bedytig vu einzelne Komponente',
'exif-compressedbitsperpixel' => 'Komprimierti Bit pro Pixel',
'exif-pixelydimension' => 'Bildbreiti',
'exif-pixelxdimension' => 'Bildhechi',
'exif-usercomment' => 'Benutzerkommentar',
'exif-relatedsoundfile' => 'Zuegherigi Tondatei',
'exif-datetimeoriginal' => 'Erfassigszytpunkt',
'exif-datetimedigitized' => 'Digitalisierigszytpunkt',
'exif-subsectime' => 'Spycherzytpunkt (1/100 s)',
'exif-subsectimeoriginal' => 'Erfassigszytpunkt (1/100 s)',
'exif-subsectimedigitized' => 'Digitalisierigszytpunkt (1/100 s)',
'exif-exposuretime' => 'Beliechtigsduur',
'exif-exposuretime-format' => '$1 Sekunde ($2)',
'exif-fnumber' => 'F-Wert',
'exif-exposureprogram' => 'Beliechtigsprogramm',
'exif-spectralsensitivity' => 'Spektrali Empfindligkeit',
'exif-isospeedratings' => 'Filmempfindlichkeit (ISO)',
'exif-shutterspeedvalue' => 'APEX-Beliechtigszytwärt',
'exif-aperturevalue' => 'APEX-Bländewärt',
'exif-brightnessvalue' => 'APEX-Hälligkeitswärt',
'exif-exposurebiasvalue' => 'Beliechtigsvorgab',
'exif-maxaperturevalue' => 'Greschti Bländi',
'exif-subjectdistance' => 'Entfärnig',
'exif-meteringmode' => 'Mässverfahre',
'exif-lightsource' => 'Liechtquäll',
'exif-flash' => 'Blitz',
'exif-focallength' => 'Brännwyti',
'exif-subjectarea' => 'Beryych',
'exif-flashenergy' => 'Blitzstärchi',
'exif-focalplanexresolution' => 'Sensor-Uflesig horizontal',
'exif-focalplaneyresolution' => 'Sensor-Uflesig vertikal',
'exif-focalplaneresolutionunit' => 'Einheit vu dr Sensor-Uflesig',
'exif-subjectlocation' => 'Motivstandort',
'exif-exposureindex' => 'Beliechtigsindex',
'exif-sensingmethod' => 'Mässmethod',
'exif-filesource' => 'Quäll vu dr Datei',
'exif-scenetype' => 'Szenetyp',
'exif-customrendered' => 'Benutzerdefinierti Bildverarbeitig',
'exif-exposuremode' => 'Beliechtigsmodus',
'exif-whitebalance' => 'Wyssabglyych',
'exif-digitalzoomratio' => 'Digitalzoom',
'exif-focallengthin35mmfilm' => 'Brännwyti (Chleibildäquivalent)',
'exif-scenecapturetype' => 'Art vu dr Ufnahm',
'exif-gaincontrol' => 'Verstärchig',
'exif-contrast' => 'Kontrascht',
'exif-saturation' => 'Sättigung',
'exif-sharpness' => 'Schärfi',
'exif-devicesettingdescription' => 'Grät-Yystellig',
'exif-subjectdistancerange' => 'Motiventfärnig',
'exif-imageuniqueid' => 'Bild-ID',
'exif-gpsversionid' => 'GPS-Tag-Version',
'exif-gpslatituderef' => 'nerdl. oder sidl. Breiti',
'exif-gpslatitude' => 'Geografischi Breiti',
'exif-gpslongituderef' => 'eschtl. oder weschtl. Längi',
'exif-gpslongitude' => 'Geografischi Längi',
'exif-gpsaltituderef' => 'Bezugshechi',
'exif-gpsaltitude' => 'Hechi',
'exif-gpstimestamp' => 'GPS-Zyt',
'exif-gpssatellites' => 'Satellite, wu fir d Mässig brucht wore sin',
'exif-gpsstatus' => 'Empfängerstatus',
'exif-gpsmeasuremode' => 'Mässverfahre',
'exif-gpsdop' => 'Masspräzision',
'exif-gpsspeedref' => 'Gschwindigkeitseinheit',
'exif-gpsspeed' => 'Gschwindigkeit vum GPS-Empfänger',
'exif-gpstrackref' => 'Referänz fir d Bewegigsrichtig',
'exif-gpstrack' => 'Bewegigsrichtig',
'exif-gpsimgdirectionref' => 'Referänz fir d Usrichtig vum Bild',
'exif-gpsimgdirection' => 'Bildrichtig',
'exif-gpsmapdatum' => 'Geodätisch Datum brucht',
'exif-gpsdestlatituderef' => 'Referänz fir d Breiti',
'exif-gpsdestlatitude' => 'Breiti',
'exif-gpsdestlongituderef' => 'Referänz fir d Längi',
'exif-gpsdestlongitude' => 'Längi',
'exif-gpsdestbearingref' => 'Referänz fir d Motivrichtig',
'exif-gpsdestbearing' => 'Motivrichtig',
'exif-gpsdestdistanceref' => 'Referänz fir d Motiventfärnig',
'exif-gpsdestdistance' => 'Motiventfärnig',
'exif-gpsprocessingmethod' => 'Name vum GPS-Verfahre',
'exif-gpsareainformation' => 'Name vum GPS-Biet',
'exif-gpsdatestamp' => 'GPS-Datum',
'exif-gpsdifferential' => 'GPS-Differentialkorrektur',
'exif-jpegfilecomment' => 'JPEG-Dateikommentar',
'exif-keywords' => 'Schlisselwerter',
'exif-worldregioncreated' => 'Wältregion, wu s Foto ufgnuu woren isch',
'exif-countrycreated' => 'Staat, wu s Foto ufgnuu woren isch',
'exif-countrycodecreated' => 'Code fir dr Staat, wu s Foto ufgnuu woren isch',
'exif-provinceorstatecreated' => 'Provinz oder Gliedstaat, wu s Foto ufgnuu woren isch',
'exif-citycreated' => 'Stadt, wu s Foto ufgnuu woren isch',
'exif-sublocationcreated' => 'Stadtteil, wu s Foto ufgnuu woren isch',
'exif-worldregiondest' => 'Zeigti Wältregione',
'exif-countrydest' => 'Zeigte Staat',
'exif-countrycodedest' => 'Code fir dr zeigt Staat',
'exif-provinceorstatedest' => 'Zeigti Provinz oder zeigte Gliedstaat',
'exif-citydest' => 'Zeigti Stadt',
'exif-sublocationdest' => 'Zeigte Stadtteil',
'exif-objectname' => 'Churztitel',
'exif-specialinstructions' => 'Bsunderi Aawysige',
'exif-headline' => 'Iberschrift',
'exif-credit' => 'Namesnännig/ Vereffetliger',
'exif-source' => 'Quälle',
'exif-editstatus' => 'Redaktionälle Status vum Foto',
'exif-urgency' => 'Dringligkeit',
'exif-fixtureidentifier' => 'Kolumne',
'exif-locationdest' => 'Dargstellte Standort',
'exif-locationdestcode' => 'Code fir dr dargstellte Standort',
'exif-objectcycle' => 'Tageszyt, wu des Medium drfir bstimmt isch',
'exif-contact' => 'Kontaktinformatione',
'exif-writer' => 'Schryber',
'exif-languagecode' => 'Sproch',
'exif-iimversion' => 'IIM-Version',
'exif-iimcategory' => 'Kategorii',
'exif-iimsupplementalcategory' => 'Zuesätzligi Kategorie',
'exif-datetimeexpires' => 'Nit bruche no',
'exif-datetimereleased' => 'Vereffetligt am',
'exif-originaltransmissionref' => 'Code vum Standort wu s Foto uus ibermittlet woren isch',
'exif-identifier' => 'Chännig',
'exif-lens' => 'Brucht Objektiv',
'exif-serialnumber' => 'Serienummere vu dr Kamera',
'exif-cameraownername' => 'Kamerabsitzer',
'exif-label' => 'Bezeichnig',
'exif-datetimemetadata' => 'Datum, wu d Metadate s letscht Mol gänderet wore sin',
'exif-nickname' => 'Gängige Name vum Foto',
'exif-rating' => 'Bewärting (us 5)',
'exif-rightscertificate' => 'Rächtverwaltigszertifikat',
'exif-copyrighted' => 'Urheberrächtsstatus',
'exif-copyrightowner' => 'Urheberrächtsinhaber',
'exif-usageterms' => 'Nutzigsbedingige',
'exif-webstatement' => 'Online-Urheberrächtsaagab',
'exif-originaldocumentid' => 'Eidytigi Chännig vum Orginaldokumänt',
'exif-licenseurl' => 'URL vu dr Urheberrächtsaagab (Lizänz)',
'exif-morepermissionsurl' => 'Alternativi Lizänzinformatione',
'exif-attributionurl' => 'Bi Wyterverwändig vu däm Wärch bitte verlinke uf:',
'exif-preferredattributionname' => 'Bi Wyterverwändig vu däm Wärch, bitte nänne:',
'exif-pngfilecomment' => 'PNG-Dateikommentar',
'exif-disclaimer' => 'Haftigsuusschluss',
'exif-contentwarning' => 'Inhaltswarnig',
'exif-giffilecomment' => 'GIF-Dateikommentar',
'exif-intellectualgenre' => 'Art vum Medium',
'exif-subjectnewscode' => 'Themecode',
'exif-scenecode' => 'IPTC-Aasichtcode',
'exif-event' => 'Dargstellt Ereignis',
'exif-organisationinimage' => 'Dargstellti Organisation',
'exif-personinimage' => 'Dargstellti Person',
'exif-originalimageheight' => 'Bildhechi vor em Zueschnyde',
'exif-originalimagewidth' => 'Bildbreiti vor em Zueschnyde',

# EXIF attributes
'exif-compression-1' => 'Uukomprimiert',
'exif-compression-2' => 'CCITT Gruppe 3 1-dimensionali modifizierti Huffman-Lauflengekodierig',
'exif-compression-3' => 'CCITT Gruppe 3 Faxkodierig',
'exif-compression-4' => 'CCITT Gruppe 4 Faxkodierig',

'exif-copyrighted-true' => 'Gschitzt',
'exif-copyrighted-false' => 'Public Domain',

'exif-unknowndate' => 'Nit bekannt Datum',

'exif-orientation-1' => 'Normal',
'exif-orientation-2' => 'Horizontal gspieglet',
'exif-orientation-3' => 'Um 180° drillt',
'exif-orientation-4' => 'Vertikal gspieglet',
'exif-orientation-5' => 'Gege dr Uhrzeigersinn um 90° drillt un derno vertikal gspieglet',
'exif-orientation-6' => 'Um 90° gege dr Uhrzeigersinn drillt',
'exif-orientation-7' => 'Um 90° im Uhrzeigersinn drillt un derno vertikal gspieglet',
'exif-orientation-8' => 'Um 90° im dr Uhrzeigersinn drillt',

'exif-planarconfiguration-1' => 'Grobformat',
'exif-planarconfiguration-2' => 'Planarformat',

'exif-colorspace-65535' => 'Nit kalibriert',

'exif-componentsconfiguration-0' => 'Git s nit',

'exif-exposureprogram-0' => 'Nit bekannt',
'exif-exposureprogram-1' => 'Manuell',
'exif-exposureprogram-2' => 'Standardprogramm',
'exif-exposureprogram-3' => 'Zytautomatik',
'exif-exposureprogram-4' => 'Bländeautomatik',
'exif-exposureprogram-5' => 'Kreativprogramm (hochi Schärfetiefi bevorzugt)',
'exif-exposureprogram-6' => 'Aktions-Programm (churzi Beliechtigszyt bevorzugt)',
'exif-exposureprogram-7' => 'Porträ-Programm',
'exif-exposureprogram-8' => 'Landschaftsufnahme',

'exif-subjectdistance-value' => '$1 Meter',

'exif-meteringmode-0' => 'Nit bekannt',
'exif-meteringmode-1' => 'Durchschnittlig',
'exif-meteringmode-2' => 'Mittizentriert',
'exif-meteringmode-3' => 'Spot-Mässig',
'exif-meteringmode-4' => 'Mehfach-Spot-Mässig',
'exif-meteringmode-5' => 'Muschter',
'exif-meteringmode-6' => 'Bildteil',
'exif-meteringmode-255' => 'Anderi',

'exif-lightsource-0' => 'Nit bekannt',
'exif-lightsource-1' => 'Tagliecht',
'exif-lightsource-2' => 'Fluoreszierig',
'exif-lightsource-3' => 'Glieilampe',
'exif-lightsource-4' => 'Blitz',
'exif-lightsource-9' => 'Schen Wätter',
'exif-lightsource-10' => 'Wulchig',
'exif-lightsource-11' => 'Schatte',
'exif-lightsource-12' => 'Tagliecht fluoreszierig (D 5700–7100 K)',
'exif-lightsource-13' => 'Tagwyss fluoreszierig (N 4600–5400 K)',
'exif-lightsource-14' => 'Chaltwyss fluoreszierig (W 3900–4500 K)',
'exif-lightsource-15' => 'Wyss fluoreszierig (WW 3200–3700 K)',
'exif-lightsource-17' => 'Standardliecht A',
'exif-lightsource-18' => 'Standardliecht B',
'exif-lightsource-19' => 'Standardliecht C',
'exif-lightsource-24' => 'ISO Studio Chunschtliecht',
'exif-lightsource-255' => 'Anderi Liechtquäll',

# Flash modes
'exif-flash-fired-0' => 'kei Blitz',
'exif-flash-fired-1' => 'Blitz usglest',
'exif-flash-return-0' => 'Blitz schickt kei Date',
'exif-flash-return-2' => 'kei Reflexion vum Blitz feschtgstellt',
'exif-flash-return-3' => 'Reflexion vum Blitz feschtgstellt',
'exif-flash-mode-1' => 'erzwunge Blitze',
'exif-flash-mode-2' => 'Blitz abgstellt',
'exif-flash-mode-3' => 'Automatik',
'exif-flash-function-1' => 'Kei Blitzfunktion',
'exif-flash-redeye-1' => 'Roti-Auge-Reduktion',

'exif-focalplaneresolutionunit-2' => 'Zoll',

'exif-sensingmethod-1' => 'Nit definiert',
'exif-sensingmethod-2' => 'Ei-Chip-Farbsensor',
'exif-sensingmethod-3' => 'Zwee-Chip-Farbsensor',
'exif-sensingmethod-4' => 'Drej-Chip-Farbsensor',
'exif-sensingmethod-5' => 'Farbruum sequenziäll Sensor',
'exif-sensingmethod-7' => 'Trilineare Sensor',
'exif-sensingmethod-8' => 'Farbruum linear sequenziälle Sensor',

'exif-filesource-3' => 'Digitali Standbildkamera',

'exif-scenetype-1' => 'E diräkt fotografiert Bild',

'exif-customrendered-0' => 'Normal',
'exif-customrendered-1' => 'Benutzerdefiniert',

'exif-exposuremode-0' => 'Automatischi Beliechtig',
'exif-exposuremode-1' => 'Manuälli Beliechtig',
'exif-exposuremode-2' => 'Beliechtigzyylete',

'exif-whitebalance-0' => 'Automatisch',
'exif-whitebalance-1' => 'Manuäll',

'exif-scenecapturetype-0' => 'Standard',
'exif-scenecapturetype-1' => 'Landschaft',
'exif-scenecapturetype-2' => 'Porträt',
'exif-scenecapturetype-3' => 'Nachtszene',

'exif-gaincontrol-0' => 'Keini',
'exif-gaincontrol-1' => 'Low gain up',
'exif-gaincontrol-2' => 'High gain up',
'exif-gaincontrol-3' => 'Low gain down',
'exif-gaincontrol-4' => 'High gain down',

'exif-contrast-0' => 'Normal',
'exif-contrast-1' => 'Schwach',
'exif-contrast-2' => 'Starch',

'exif-saturation-0' => 'Normal',
'exif-saturation-1' => 'Niideri Sättigung',
'exif-saturation-2' => 'Hochi Sättigung',

'exif-sharpness-0' => 'Normal',
'exif-sharpness-1' => 'Schwach',
'exif-sharpness-2' => 'Starch',

'exif-subjectdistancerange-0' => 'Nit bekannt',
'exif-subjectdistancerange-1' => 'Makro',
'exif-subjectdistancerange-2' => 'Noch',
'exif-subjectdistancerange-3' => 'Wyt ewäg',

# Pseudotags used for GPSLatitudeRef and GPSDestLatitudeRef
'exif-gpslatitude-n' => 'nerdl. Breiti',
'exif-gpslatitude-s' => 'sidl. Breiti',

# Pseudotags used for GPSLongitudeRef and GPSDestLongitudeRef
'exif-gpslongitude-e' => 'eschtl. Längi',
'exif-gpslongitude-w' => 'weschtl. Längi',

# Pseudotags used for GPSAltitudeRef
'exif-gpsaltitude-above-sealevel' => '$1 {{plural:$1|Meter|Meter}} iber em Meeresspiegel',
'exif-gpsaltitude-below-sealevel' => '$1 {{plural:$1|Meter|Meter}} unter em Meeresspiegel',

'exif-gpsstatus-a' => 'Mässig lauft',
'exif-gpsstatus-v' => 'Interoperabilität vu Mässige',

'exif-gpsmeasuremode-2' => '2-dimensionali Mässig',
'exif-gpsmeasuremode-3' => '3-dimensionali Mässig',

# Pseudotags used for GPSSpeedRef
'exif-gpsspeed-k' => 'km/h',
'exif-gpsspeed-m' => 'mph',
'exif-gpsspeed-n' => 'Chnote',

# Pseudotags used for GPSDestDistanceRef
'exif-gpsdestdistance-k' => 'Kilometer',
'exif-gpsdestdistance-m' => 'Myle',
'exif-gpsdestdistance-n' => 'Seemyle',

'exif-gpsdop-excellent' => 'Uuszeichnet ($1)',
'exif-gpsdop-good' => 'Guet ($1)',
'exif-gpsdop-moderate' => 'Mittel ($1)',
'exif-gpsdop-fair' => 'Akzeptabel ($1)',
'exif-gpsdop-poor' => 'Schwach ($1)',

'exif-objectcycle-a' => 'Nume demorge',
'exif-objectcycle-p' => 'Nume zobe',
'exif-objectcycle-b' => 'Demorge un zobe',

# Pseudotags used for GPSTrackRef, GPSImgDirectionRef and GPSDestBearingRef
'exif-gpsdirection-t' => 'Tatsächligi Richtig',
'exif-gpsdirection-m' => 'Magnetischi Richtig',

'exif-ycbcrpositioning-1' => 'Zäntriert',
'exif-ycbcrpositioning-2' => 'Benochbert',

'exif-dc-contributor' => 'Mitmacher',
'exif-dc-coverage' => 'Ertlige oder zytlige Ramme vum Medium',
'exif-dc-date' => 'Datumsaagabe',
'exif-dc-publisher' => 'Vereffentlige',
'exif-dc-relation' => 'Ähnligi Medie',
'exif-dc-rights' => 'Rächt',
'exif-dc-source' => 'Mediehärchumft',
'exif-dc-type' => 'Medietyp',

'exif-rating-rejected' => 'Abglähnt',

'exif-isospeedratings-overflow' => 'Greßer wie 65535',

'exif-iimcategory-ace' => 'Chunscht, Kultur un Unterhaltig',
'exif-iimcategory-clj' => 'Kriminalitet un Rächt',
'exif-iimcategory-dis' => 'Katastrofen un Uafäll',
'exif-iimcategory-fin' => 'Wirtschaft un Gschäft',
'exif-iimcategory-edu' => 'Bildig',
'exif-iimcategory-evn' => 'Umwält',
'exif-iimcategory-hth' => 'Gsundheit',
'exif-iimcategory-hum' => 'Inträssebiet',
'exif-iimcategory-lab' => 'Arbet',
'exif-iimcategory-lif' => 'Lifestyle un Frejzyt',
'exif-iimcategory-pol' => 'Politik',
'exif-iimcategory-rel' => 'Religion un Glaube',
'exif-iimcategory-sci' => 'Wisseschaft un Tächnologi',
'exif-iimcategory-soi' => 'Soziali Theme',
'exif-iimcategory-spo' => 'Sport',
'exif-iimcategory-war' => 'Chrieg, Konflikt un Uurueje',
'exif-iimcategory-wea' => 'Wätter',

'exif-urgency-normal' => 'Normal ($1)',
'exif-urgency-low' => 'Nider ($1)',
'exif-urgency-high' => 'Hoch ($1)',
'exif-urgency-other' => 'Benutzerdefinierti Prioritet ($1)',

# External editor support
'edit-externally' => 'Die Datei mit emnen externe Programm bearbeite',
'edit-externally-help' => '(Lueg d [//www.mediawiki.org/wiki/Manual:External_editors Installationsaawisige] fir witeri Informatione)',

# 'all' in various places, this might be different for inflected languages
'watchlistall2' => 'alli',
'namespacesall' => 'alli',
'monthsall' => 'alli',
'limitall' => 'alli',

# E-mail address confirmation
'confirmemail' => 'Bstätigung vo Ihre E-Poscht-Adräss',
'confirmemail_noemail' => 'Du hesch in dyne [[Special:Preferences|persönliche Ystellige]] e kei E-Mail-Adress ygää.',
'confirmemail_text' => 'Dermit du di erwyterete Mailfunktione chasch bruuche, muesch du die E-Mail-Adrässe, wo du hesch aaggä, la bestätige. Klick ufe Chnopf unte; das schickt dir es Mail. I däm Mail isch e Link; we du däm Link folgsch, de tuesch dadermit bestätige, das die E-Mail-Adrässe dyni isch.',
'confirmemail_pending' => 'Es isch Dir scho en Code zum Bestätige zuegschiggt worde. Falls du Dyn Konto grad erscht aagleit hesch, muesch villicht noo e weng warte bis d E-Mail ytrifft, bevor du en nöie Code aafordresch.',
'confirmemail_send' => 'Bestätigungs-Mail verschicke',
'confirmemail_sent' => 'Es isch dir es Mail zur Adrässbestätigung gschickt worde.',
'confirmemail_oncreate' => 'En Code isch aa dyni E-Mail-Adress zum bestätige gschiggt worde. Du bruuch de Code zwar nüt zum dich aamälde, er wird aber zum aktiviere vo de E-Mail-Funktione in däm Wiki bruucht.',
'confirmemail_sendfailed' => '{{SITENAME}} het d E-Mail zum bestätige nüt chönne verschigge.
Bitte überprüef d E-Mail-Adress uf ungültigi Zeiche.

Ruggmäldig vum Mailserver: $1',
'confirmemail_invalid' => 'De Bestätigscode isch ungültig. Es isch mögli das er abgloffe isch. In däm Fall chasch probiere d Bestätigung z widerhole.',
'confirmemail_needlogin' => 'Du muesch dich $1, zume dyni E-Mail-Adress bstätige.',
'confirmemail_success' => 'Dyni E-Mail-Adräss isch bstätiget worde. Du chasch di jitz aamälde.',
'confirmemail_loggedin' => 'Dyni E-Mail-Adräss isch jitz bstätigt.',
'confirmemail_error' => 'Öbis isch bim Bestätige vo dynrer E-Mail-Adress schief gloffe.',
'confirmemail_subject' => '{{SITENAME}} E-Mail-Adrässbstätigung',
'confirmemail_body' => 'Salü

{{SITENAME}}-BenutzerIn «$2» — das bisch allwäg Du — het sech vor IP-Adrässen $1 uus mit deren e-Mail-Adrässe bi {{SITENAME}} aagmäldet.

Für z bestätige, das die Adrässe würklech Dir isch, u für Dyni erwytereten e-Mail-Funktionen uf {{SITENAME}} yzschalte, tue bitte dää Link i dym Browser uuf:

$3

Falls du *nid* $2 sötsch sy, de tue bitte de Link unte dra uf, um d e-Mail-Bstätigung abzbreche:

$5

De Bstätigungs-Code isch gültig bis $4.

Fründlechi Grüess',
'confirmemail_body_changed' => 'Eber mit dr IP-Adräss $1, wahrschyns Du sälber,
het d E-Mail-Adräss vum Benutzerkonto „$2“ uf die Adräss gänderet uf {{SITENAME}}.

Go bstetige, ass des Benutzerkonto wirkli Dir ghert
un go d E-Mail-Feature uf {{SITENAME}} reaktiviere, mach de Link in Dyym Browser uf:

$3

Wänn des Konto imfall *nit* Dir ghert, gang däm Link noo
go d E-Mail-Adräss-Bstetigung abbräche:

$5

Dää Bstetigungscode isch giltig bis am $4.',
'confirmemail_body_set' => 'Eber mit dr IP-Adräss $1, wahrschyns Du sälber,
het d E-Mail-Adräss vum Benutzerkonto „$2“ uf die Adräss gänderet uf {{SITENAME}}.

Go bstetige, ass des Benutzerkonto wirkli Dir ghert
un go d E-Mail-Feature uf {{SITENAME}} reaktiviere, mach de Link in Dyym Browser uf:

$3

Wänn des Konto imfall *nit* Dir ghert, gang däm Link noo
go d E-Mail-Adräss-Bstetigung abbräche:

$5

Dää Bstetigungscode isch giltig bis am $4.',
'confirmemail_invalidated' => 'D E-Mail-Adressbestätig isch abbroche worde',
'invalidateemail' => 'S Bestätige vo dr E-Mail-Adress abbreche',

# Scary transclusion
'scarytranscludedisabled' => '[Interwiki-Yybindig isch deaktiviert]',
'scarytranscludefailed' => '[Vorlage-Yybindig fir $1 isch gescheitert]',
'scarytranscludefailed-httpstatus' => '[Vorlagenabruef fählgschlaa fir $1: HTTP  $2]',
'scarytranscludetoolong' => '[URL isch z lang]',

# Delete conflict
'deletedwhileediting' => "'''Obacht''': Die Syte isch glescht wore, nochdäm Du aagfange hesch si z bearbeite!",
'confirmrecreate' => "Benutzer [[User:$1|$1]] ([[User talk:$1|Diskussion]]) het die Syte glescht, nochdäm Du aagfange hesch si z bearbeite.
D Begrindig isch gsi:
:''$2''
Bitte bstätig, ass Du die Syte wirkli wit nej aalege.",
'confirmrecreate-noreason' => 'Benutzer [[User:$1|$1]] ([[User talk:$1|Diskussion]]) het die Syte glescht, nochdäm Du aagfange hesch si z bearbeite. Bitte bstätig, ass Du die Syte wirkli wit nej aalege.',
'recreate' => 'Nomol aalege',

# action=purge
'confirm_purge_button' => 'In Ornig',
'confirm-purge-top' => 'D Zwischespycherig vu dr Syte lesche?',
'confirm-purge-bottom' => 'Läärt dr Cache vun ere Syte un macht, ass di nejscht Version aazeigt wird.',

# action=watch/unwatch
'confirm-watch-button' => 'In Ornig',
'confirm-watch-top' => 'Tue die Syten uf dyni Beobachtigslischte.',
'confirm-unwatch-button' => 'In Ornig',
'confirm-unwatch-top' => 'Nim die Syte us dyre Beobachtungslischte furt.',

# Multipage image navigation
'imgmultipageprev' => '← vorderi Syte',
'imgmultipagenext' => 'nächschti Syte →',
'imgmultigo' => 'Gang!',
'imgmultigoto' => 'Gang uf Syte $1',

# Table pager
'ascending_abbrev' => 'uf',
'descending_abbrev' => 'ab',
'table_pager_next' => 'Näggschti Syte',
'table_pager_prev' => 'Vorderi Syte',
'table_pager_first' => 'Erschti Syte',
'table_pager_last' => 'Letschti Syte',
'table_pager_limit' => 'Zeig $1 Yträg pro Syte aa',
'table_pager_limit_label' => 'Yyträg pro Syte:',
'table_pager_limit_submit' => 'Gang',
'table_pager_empty' => 'Kei Ergebniss',

# Auto-summaries
'autosumm-blank' => 'Die Syte isch gleert worde.',
'autosumm-replace' => "Dr Inhalt vo dr Syte isch ersetzt worde: '$1'",
'autoredircomment' => 'E Wyterleitig uf [[$1]] isch erstellt worde',
'autosumm-new' => "Het Syte aagleit mit '$1'",

# Live preview
'livepreview-loading' => 'Am Lade …',
'livepreview-ready' => 'Am Lade… Fertig!',
'livepreview-failed' => 'Live-Vorschau nit megli! Bitte di normal Vorschau verwände.',
'livepreview-error' => 'Verbindig nit megli: $1 „$2“. Bitte di normal Vorschau verwände.',

# Friendlier slave lag warnings
'lag-warn-normal' => 'Bearbeitige in dr letschte {{PLURAL:$1|Sekund|$1 Sekunde}} wäre in däre Lischt nonig aazeigt.',
'lag-warn-high' => 'Wäg ere hoche Datebank-Uslaschtig wäre d Bearbeitige in dr letschte {{PLURAL:$1|Sekund|$1 Sekunde}} in däre Lischt nonig aazeigt.',

# Watchlist editor
'watchlistedit-numitems' => 'Uf dynrer Beobachtigslischt sin {{PLURAL:$1|ei Ytrag|$1 Yträg}}, Diskussionssyte werde nüt zäält.',
'watchlistedit-noitems' => 'Du hesch kei Syte uf dynrer Beobachtigslischt.',
'watchlistedit-normal-title' => 'D Beobachtigslischt bearbeite',
'watchlistedit-normal-legend' => 'Yträg vo dynrer Beobachtigslischt entferne',
'watchlistedit-normal-explain' => 'Doo unte sihsch d Yytreg uf Dyyre Beobachtigslischt. Zum e Yytrag uusenee muesch s Chäschtli dernäbe markiere un derno ganz unte uf „{{int:Watchlistedit-normal-submit}}“ drucke. Du chasch Dyyni Beobachtigslischt au als [[Special:EditWatchlist/raw|Lischte bearbeite]].',
'watchlistedit-normal-submit' => 'Yträg usenää',
'watchlistedit-normal-done' => '{{PLURAL:$1|ei Ytrag isch|$1 Yträg sin}} vo dynrer Beobachtigslischt entfernt worde:',
'watchlistedit-raw-title' => 'D Beobachtigslischt als Lischte bearbeite',
'watchlistedit-raw-legend' => 'D Beobachtigslischt als Lischte bearbeite',
'watchlistedit-raw-explain' => 'Do unte sihsch d Yytreg uf Dyyre Beobachtigslischt im Lischteformat. Du chasch die Yytreg zyyledewyys uusenee oder zuefiege.
Pro Zyylede isch ei Yytrag erlaubt. Wänn fertig bisch, druck uf „{{int:Watchlistedit-raw-submit}}“.
Du chasch au d [[Special:EditWatchlist|Standard-Bearbeitigssyte]] bruuche.',
'watchlistedit-raw-titles' => 'Yträg:',
'watchlistedit-raw-submit' => 'D Beobachtigslischt aktualisiere',
'watchlistedit-raw-done' => 'Dyni Beobachtigslischt isch aktualisiert worde.',
'watchlistedit-raw-added' => '{{PLURAL:$1|ei Ytrag isch|$1 Yträg sin}} dezuedüü worde:',
'watchlistedit-raw-removed' => '{{PLURAL:$1|ei Ytrag isch|$1 Yträg sin}} usegnoo worde:',

# Watchlist editing tools
'watchlisttools-view' => 'Beobachtigsliste: Änderige',
'watchlisttools-edit' => 'normal bearbeite',
'watchlisttools-raw' => 'imene große Textfäld bearbeite',

# Signatures
'signature' => '[[{{ns:user}}:$1|$2]] ([[{{ns:user_talk}}:$1|Diskussion]])',

# Core parser functions
'unknown_extension_tag' => 'Nit bekannte Extension-Tag „$1“',
'duplicate-defaultsort' => 'Obacht: Dr Sortierigsschlüssel „$2“ iberschrybt dr vorig brucht Schlüssel „$1“.',

# Special:Version
'version' => 'Version',
'version-extensions' => 'Installierti Erwyterige',
'version-specialpages' => 'Spezialsyte',
'version-parserhooks' => 'Parser-Schnittstelle',
'version-variables' => 'Variable',
'version-antispam' => 'Spamschutz',
'version-skins' => 'Benutzeroberflechine',
'version-other' => 'Anders',
'version-mediahandlers' => 'Medie-Handler',
'version-hooks' => "Schnittstelle ''(Hook)''",
'version-extension-functions' => 'Funktionsufruef',
'version-parser-extensiontags' => "Parser-Erwyterige ''(tags)''",
'version-parser-function-hooks' => 'Parser-Funktione',
'version-hook-name' => 'Schnittstellename',
'version-hook-subscribedby' => 'Ufruef vu',
'version-version' => '(Version $1)',
'version-license' => 'Lizänz',
'version-poweredby-credits' => "Die Websyte nutzt '''[//www.mediawiki.org/wiki/MediaWiki/de MediaWiki]''', Copyright © 2001–$1 $2.",
'version-poweredby-others' => 'anderi',
'version-license-info' => 'MediaWiki isch e freji Software, d. h. s cha, no dr Bedingige vu dr GNU General Public-Lizänz, wu vu dr Free Software Foundation vereffentligt woren isch, wyterverteilt un/oder modifiziert wäre. Doderbyy cha d Version 2, oder no eigenem Ermässe, jedi nejeri Version vu dr Lizänz brucht wäre.

Des Programm wird in dr Hoffnig verteilt, ass es nitzli isch, aber OHNI JEDI GARANTI un sogar ohni di impliziert Garanti vun ere MÄRTGÄNGIGKEIT oder EIGNIG FIR E BSTIMMTE ZWÄCK. Doderzue git meh Hiiwys in dr GNU General Public-Lizänz.

E [{{SERVER}}{{SCRIPTPATH}}/COPYING Kopi vu dr GNU General Public-Lizänz] sott zämme mit däm Programm verteilt wore syy. Wänn des nit eso isch, cha ne Kopi bi dr Free Software Foundation Inc., 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA, schriftli aagforderet oder [//www.gnu.org/licenses/old-licenses/gpl-2.0.html online gläse] wäre.',
'version-software' => 'Installierti Software',
'version-software-product' => 'Produkt',
'version-software-version' => 'Version',
'version-entrypoints' => 'Yygangspunkt-URL',
'version-entrypoints-header-entrypoint' => 'Yygangspunkt',
'version-entrypoints-header-url' => 'URL',

# Special:FilePath
'filepath' => 'Dateipfad',
'filepath-page' => 'Datei:',
'filepath-submit' => 'Gang',
'filepath-summary' => 'Mit däre Spezialsyte losst sich dr komplett Pfad vu dr aktuälle Version vun ere Datei ohni Umwäg abfroge.
Di aagfrogt Datei wird diräkt dargstellt bzw. mit dr verchnipfte Aawändig gstartet.',

# Special:FileDuplicateSearch
'fileduplicatesearch' => 'Datei-Duplikat sueche',
'fileduplicatesearch-summary' => 'Suech no Datei-Duplikat uf dr Grundlag vu ihrem Hash-Wärt.',
'fileduplicatesearch-legend' => 'No Duplikat sueche',
'fileduplicatesearch-filename' => 'Dateiname:',
'fileduplicatesearch-submit' => 'Sueche',
'fileduplicatesearch-info' => '$1 × $2 Pixel<br />Dateigressi: $3<br />MIME-Typ: $4',
'fileduplicatesearch-result-1' => 'D Datei „$1“ het kei identischi Duplikat.',
'fileduplicatesearch-result-n' => 'D Datei „$1“ het {{PLURAL:$2|1 identisch Duplikat|$2 identischi Duplikat}}.',
'fileduplicatesearch-noresults' => 'S isch kei Datei mit em Name „$1“ gfunde wore.',

# Special:SpecialPages
'specialpages' => 'Spezialsytene',
'specialpages-note' => '* Reguläri Spezialsyte
* <span class="mw-specialpagerestricted">Zuegriffsbschränkti Spezialsyte</span>
* <span class="mw-specialpagecached">Gecachti Spezialsyte (dr Inhalt ist villicht veraltet.)</span>',
'specialpages-group-maintenance' => 'Wartigslischte',
'specialpages-group-other' => 'Andri Spezialsyte',
'specialpages-group-login' => 'Aamälde/Konto aalege',
'specialpages-group-changes' => 'D letschte Änderige un Logbüecher',
'specialpages-group-media' => 'Medie',
'specialpages-group-users' => 'Benutzer un Rächt',
'specialpages-group-highuse' => 'Syte wo oft bruucht werde',
'specialpages-group-pages' => 'Lischte vo Syte',
'specialpages-group-pagetools' => 'Sytewerchzüüg',
'specialpages-group-wiki' => 'Syschtemdate un Wärchzüüg',
'specialpages-group-redirects' => 'Spezialsyte wo wyterleite',
'specialpages-group-spam' => 'Spam-Wärchzüüg',

# Special:BlankPage
'blankpage' => 'E leeri Syte',
'intentionallyblankpage' => 'Die Syte isch absichtlich leer. Si wird für Benchmarks bruucht.',

# External image whitelist
'external_image_whitelist' => '  #Die Zyylete nit verändere<pre>
#Unte chenne Fragmänt vu reguläre Usdrick (dr Teil zwische dr //) yygee wäre
#Die wäre mit dr URL vu Bilder us externe Quälle vergliche
#E positive Verglyych fiert zue dr Aazeig vum Bild, suscht wird s Bild nume as Link aazeigt
#Zyylete, wu mit eme # aafange, wäre as Kommentar behandlet
#Des isch nit abhängig vum Einzelfall

#Fragmänt vu reguläre Usdrick noch däre Zyylete yytrage. Die Zyylete nit verändere</pre>',

# Special:Tags
'tags' => 'Änderigs-Tag priefe',
'tag-filter' => '[[Special:Tags|Markierigs]]filter:',
'tag-filter-submit' => 'Filter',
'tags-title' => 'Tag',
'tags-intro' => 'Die Syte zeigt alli Tag, wu Bearbeitige mit markiert wäre un derzue d Bedytig vun ene.',
'tags-tag' => 'Markierigsname',
'tags-display-header' => 'Benännig uf dr Änderigslischte',
'tags-description-header' => 'Vollständigi Bschryybig',
'tags-hitcount-header' => 'Markierti Änderige',
'tags-edit' => 'bearbeite',
'tags-hitcount' => '$1 {{PLURAL:$1|Änderig|Änderige}}',

# Special:ComparePages
'comparepages' => 'Syte verglyyche',
'compare-selector' => 'Syteversione verglyyche',
'compare-page1' => 'Syte 1',
'compare-page2' => 'Syte 2',
'compare-rev1' => 'Version 1',
'compare-rev2' => 'Version 2',
'compare-submit' => 'Verglyyche',
'compare-invalid-title' => 'Dr Sytename, wu Du aagee hesch, isch nit giltig',
'compare-title-not-exists' => 'Dr Sytename, wu Du aagee hesch, git s nit.',
'compare-revision-not-exists' => 'Die Version, wu Du aagee hesch, git s nit.',

# Database error messages
'dberr-header' => 'Des Wiki het e Probläm',
'dberr-problems' => 'Excusez! Die Seite het im Momänt tächnischi Schwirigkeite.',
'dberr-again' => 'Wart e paar Minute un lad derno nej.',
'dberr-info' => '(Cha kei Verbindig zum Datebank-Server härstelle: $1)',
'dberr-usegoogle' => 'Du chenntsch in dr Zwischezyt mit Google sueche.',
'dberr-outofdate' => 'Obacht: Dr Suechindex vu unsere Syte chennt veraltet syy.',
'dberr-cachederror' => 'Des isch e Kopii vum Cache vu dr Syte, wu Du aagforderet hesch, un chennt veraltet syy.',

# HTML forms
'htmlform-invalid-input' => 'Mit e Teil Yygabe git s Probläm',
'htmlform-select-badoption' => 'Dr Wärt, wu aagee hesch, isch kei giltigi Option.',
'htmlform-int-invalid' => 'Dr Wärt, wu aagee hesch, isch kei Ganzzahl.',
'htmlform-float-invalid' => 'D Wärt, wu du aagee hesch, isch kei Zahl.',
'htmlform-int-toolow' => 'Dr Wärt, wu aagee hesch, isch unter em Minimum vu $1',
'htmlform-int-toohigh' => 'Dr Wärt, wu aagee hesch, isch iber em Maximum vu $1',
'htmlform-required' => 'Dää Wert wird brucht',
'htmlform-submit' => 'Ibertrage',
'htmlform-reset' => 'Änderige ruckgängig mache',
'htmlform-selectorother-other' => 'Anderi',

# SQLite database support
'sqlite-has-fts' => '$1 mit Unterstitzig vu dr Volltextsuechi',
'sqlite-no-fts' => '$1 ohni Unterstitzig vu dr Volltextsuechi',

# New logging system
'logentry-delete-delete' => '$1 het d Syte $3 glöscht',
'logentry-delete-restore' => '$1 het d Syte $3 wiiderhergstellt',
'logentry-delete-event' => '$1 het die Sichtbarkeit {{PLURAL:$5|vumene Logbuechyytrag|vo $5 Logbuechyyträg}} uff $3: $4 gänderet',
'logentry-delete-revision' => '$1 het die Sichtbarkeit {{PLURAL:$5|vunere Version|vo $5 Versione}} uff $3: $4 gänderet',
'logentry-delete-event-legacy' => '$1 het d Sichtbarkeit vo Logbuechyyträg uff $3 gänderet',
'logentry-delete-revision-legacy' => '$1 het d Sichtbarkeit vo Versione uff $3 gänderet',
'logentry-suppress-delete' => '$1 het d Syte $3 unterdrückt',
'logentry-suppress-event' => '$1 het diskret d Sichtbarkeit {{PLURAL:$5|vumene Logbuechyytrag|vo $5 Logbuechyyträg}} uff $3: $4 gänderet',
'logentry-suppress-revision' => '$1 het diskret d Sichtbarkeit {{PLURAL:$5|vunere Version|vo $5 Versione}} uff $3: $4 gänderet',
'logentry-suppress-event-legacy' => '$1 het d Sichtbarkeit vo Logbuechyyträg diskret uff $3 gänderet',
'logentry-suppress-revision-legacy' => '$1 het diskret d Sichtbarkeit vo Versione uff $3 gänderet',
'revdelete-content-hid' => 'Inhalt versteckt',
'revdelete-summary-hid' => 'Bearbeitigszämmefassig versteckt',
'revdelete-uname-hid' => 'Benutzername versteckt',
'revdelete-content-unhid' => 'Inhalt füregholt',
'revdelete-summary-unhid' => 'Bearbeitigszämmefassig füregholt',
'revdelete-uname-unhid' => 'Benutzername freigee',
'revdelete-restricted' => 'Yyschränkige gälte au fir Ammanne',
'revdelete-unrestricted' => 'Yyschränkige fir Ammanne ufghobe',
'logentry-move-move' => '$1 het d Syte $3 nooch $4 verschobe',
'logentry-move-move-noredirect' => '$1 het d Syte $3 nooch $4 verschobe ohni e Wyterleitig aazlege',
'logentry-move-move_redir' => '$1 het d Syte $3 nooch $4 verschobe un het debi e Wyterleitig überschrybe',
'logentry-move-move_redir-noredirect' => '$1 het d Syte $3 nooch $4 verschobe un het debi e Wyterleitig überschrybe, ohni sälber eini aazlege',
'logentry-patrol-patrol' => '$1 het Version $4 vo Syte $3 als kontrolliert markiert',
'logentry-patrol-patrol-auto' => '$1 het Version $4 vo Syte $3 automatisch als kontrolliert markiert',
'logentry-newusers-newusers' => '$1 het en Benutzerchonto erstellt',
'logentry-newusers-create' => '$1 het en Benutzerchonto erstellt',
'logentry-newusers-create2' => '$1 het en Benutzerchonto $3 erstellt',
'logentry-newusers-autocreate' => 'S Benutzerchonto $1 isch automatisch erstellt worde',
'newuserlog-byemail' => 's Passwort isch per E-Mail gschickt wore',

# Feedback
'feedback-bugornote' => 'Wän Du detailliert e tächnisch Probläm witt bschryybe, no mäld bitte [$1 ne Fähler].
Sunscht chasch au s eifach Formular unte nutze. Dyy Kommentar wird, zämme mit Dyym Benutzername un dr Version vu Dyym Webbrowser un em Betribssyschtem, uf dr Syte „[$3 $2]“ zuegfiegt.',
'feedback-subject' => 'Beträff:',
'feedback-message' => 'Noochricht:',
'feedback-cancel' => 'Abbräche',
'feedback-submit' => 'Ruggmäldig abschigge',
'feedback-adding' => 'Ruggmäldig wird zur Syte dezuegfiegt …',
'feedback-error1' => 'Fäälermäldig: Unbekannts Ergebniss vo de API',
'feedback-error2' => 'Fääler: Bearbeitig fehlgschlo',
'feedback-error3' => 'Fäälermäldig: Kei Antwort vo de API',
'feedback-thanks' => 'Dankschen. Dyy Ruckmäldig isch uf dr Syte „[$2 $1]“ gspycheret wore.',
'feedback-close' => 'Isch gmacht',
'feedback-bugcheck' => 'Schen! Bitte iberprief no, eb s sich doderby nit um e scho [$1 bekannte Fähler] handlet.',
'feedback-bugnew' => 'Ich haa s iberprieft. Dr nej Fähler mälde.',

# Search suggestions
'searchsuggest-search' => 'Suechi',
'searchsuggest-containing' => 'din het s …',

# API errors
'api-error-badaccess-groups' => 'Du derfsch keini Dateie in des Wiki uffelade.',
'api-error-badtoken' => 'Intärne Fähler: Dr Token isch fählerhaft.',
'api-error-copyuploaddisabled' => 'S Uffelade iber e URL isch uf däm Server deaktiviert.',
'api-error-duplicate' => 'S git im Wiki scho {{PLURAL:$1|[$2 ei anderi Datei]|[$2 anderi Dateie]}} mit em glyche Inhalt.',
'api-error-duplicate-archive' => 'Es {{PLURAL:$1|isch scho [$2 e andri Datei]|sin scho [$2 anderi Dateie]}} mit em glyche Inhalt vorhande gsi. {{PLURAL:$1|Si isch|Si sin}} allerdings glöscht worde.',
'api-error-duplicate-archive-popup-title' => 'Doppelti {{PLURAL:$1|Datei, wo scho worde isch|Dateie, wo scho glöscht worde sin}}',
'api-error-duplicate-popup-title' => 'Dopplet vorhandeni {{PLURAL:$1|Datei|Dateie}}',
'api-error-empty-file' => 'D Datei, wu Du uffeglade hesch, isch läär.',
'api-error-emptypage' => 'S isch nit erlaubt, neji lääri Syte aazlege.',
'api-error-fetchfileerror' => 'Intärne Fähler: Bim Abruefe vu dr Datei isch e Fähler ufträtte.',
'api-error-fileexists-forbidden' => 'S git scho ne Datei mit Name „$1“, si cha nit iberschryybe wäre.',
'api-error-fileexists-shared-forbidden' => 'S git scho ne Datei mit Name „$1“ im gmeinsame Dateirepositorium, si cha wäge däm nit iberschrybe wäre.',
'api-error-file-too-large' => 'D Datei, wu Du ibertrait hesch, isch z groß.',
'api-error-filename-tooshort' => 'Dr Dateiname isch z churz.',
'api-error-filetype-banned' => 'Dää Dateityp isch gsperrt.',
'api-error-filetype-banned-type' => '$1 {{PLURAL:$4|isch e Dateiformat, wu nit erlaubt isch|sin Dateitype, wu nit erlaubt sin}}. Erlaubt {{PLURAL:$3|isch s Dateiformat|sin d Dateiformat}} $2.',
'api-error-filetype-missing' => 'D Datei het kei Dateinameerwyterig.',
'api-error-hookaborted' => 'D Änderig, wu Du versuecht hesch, isch wäg eme Erwyterigs-Hooks abbroche wore.',
'api-error-http' => 'Intärne Fähler: S het kei Verbindig zum Server chenne härgstellt wäre.',
'api-error-illegal-filename' => 'Dr Dateiname isch nit erlaubt.',
'api-error-internal-error' => 'Intärne Fähler: E nit bekannte Fähler isch ufträtte bim Uffelade vu dr Datei ins Wiki.',
'api-error-invalid-file-key' => 'Intärne Fähler: D Datei isch nit im temporäre Spycher gfunde wore.',
'api-error-missingparam' => 'Intärne Fähler: Zue dr Aafrog fähle Parameter.',
'api-error-missingresult' => 'Intärne Fähler: S het nit chenne feschtgstellt wäre, eb s Kopiere erfolgryych gsi isch.',
'api-error-mustbeloggedin' => 'Zum Dateie uffelade muesch aagmäldet syy.',
'api-error-mustbeposted' => 'S git e Programmierfähler (s wird di falsch HTTP-Method brucht).',
'api-error-noimageinfo' => 'S Uffelade isch erfolgryych gsi, aber de Server het kei Informatione über d Datei zur Verfiegig gstellt.',
'api-error-nomodule' => 'Intärne Fähler: S isch kei Modul zum Uffelade feschtgleit wore.',
'api-error-ok-but-empty' => 'Intärne Fähler: Dr Server reagiert nit.',
'api-error-overwrite' => 'S Iberschryybe vun ere Datei, wu s scho git, isch nit erlaubt.',
'api-error-stashfailed' => 'Intärne Fähler: Dr Server het kei temporäri Datei chenne spychere.',
'api-error-timeout' => 'Dr Server het kei antwort gee in dr erwartete Zyt.',
'api-error-unclassified' => 'S het e nit bekannte Fähler gee.',
'api-error-unknown-code' => 'Nit bekannte Fähler: „$1“',
'api-error-unknown-error' => 'Intärne Fähler: E nit bekannte Fähler isch ufträtte bim Uffelade vu dr Datei.',
'api-error-unknown-warning' => 'Unbekannti Warnig: $1',
'api-error-unknownerror' => 'Nit bekannte Fähler: „$1“',
'api-error-uploaddisabled' => 'S Uffelade isch in däm Wiki deaktiviert.',
'api-error-verification-error' => 'Die Datei isch entwäder fählerhaft oder si het di falsch Dateinameerwyterig.',

# Durations
'duration-seconds' => '$1 {{PLURAL:$1|Sekund|Sekunde}}',
'duration-minutes' => '$1 {{PLURAL:$1|Minut|Minute}}',
'duration-hours' => '$1 {{PLURAL:$1|Stund|Stunde}}',
'duration-days' => '$1 {{PLURAL:$1|Tag|Täg}}',
'duration-weeks' => '$1 {{PLURAL:$1|Wuche|Wuche}}',
'duration-years' => '$1 {{PLURAL:$1|Johr|Johr}}',
'duration-decades' => '$1 {{PLURAL:$1|Johrzehnt|Johrzeht}}',
'duration-centuries' => '$1 {{PLURAL:$1|Johrhundert|Johrhundert}}',
'duration-millennia' => '$1 {{PLURAL:$1|Jahrtöusert|Jahrtöusert}}',

);
