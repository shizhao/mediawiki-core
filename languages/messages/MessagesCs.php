<?php
/** Czech (česky)
 *
 * See MessagesQqq.php for message documentation incl. usage of parameters
 * To improve a translation please visit http://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Chmee2
 * @author Danny B.
 * @author Dontlietome7
 * @author Helix84
 * @author Jachym
 * @author Jezevec
 * @author Jkjk
 * @author Kaganer
 * @author Kuvaly
 * @author Li-sung
 * @author Martin Kozák
 * @author Matěj Grabovský
 * @author Mercy
 * @author Michawiki
 * @author Mormegil
 * @author Mr. Richard Bolla
 * @author Ragimiri
 * @author Reaperman
 * @author Spiffyk
 * @author Tchoř
 * @author Urhixidur
 * @author Utar
 * @author Vks
 * @author לערי ריינהארט
 */

$fallback8bitEncoding = 'cp1250';

$namespaceNames = array(
	NS_MEDIA            => 'Média',
	NS_SPECIAL          => 'Speciální',
	NS_TALK             => 'Diskuse',
	NS_USER             => 'Uživatel',
	NS_USER_TALK        => 'Diskuse_s_uživatelem',
	NS_PROJECT_TALK     => 'Diskuse_k_{{grammar:3sg|$1}}',
	NS_FILE             => 'Soubor',
	NS_FILE_TALK        => 'Diskuse_k_souboru',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'Diskuse_k_MediaWiki',
	NS_TEMPLATE         => 'Šablona',
	NS_TEMPLATE_TALK    => 'Diskuse_k_šabloně',
	NS_HELP             => 'Nápověda',
	NS_HELP_TALK        => 'Diskuse_k_nápovědě',
	NS_CATEGORY         => 'Kategorie',
	NS_CATEGORY_TALK    => 'Diskuse_ke_kategorii',
);

$namespaceAliases = array(
    'Uživatel_diskuse'      => NS_USER_TALK,      # old literal translation backward compatibility
    'Uživatelka_diskuse'    => NS_USER_TALK,      # female complement to old literal translation style
    '$1_diskuse'            => NS_PROJECT_TALK,   # old literal translation backward compatibility
    'Soubor_diskuse'        => NS_FILE_TALK,      # old literal translation backward compatibility
    'MediaWiki_diskuse'     => NS_MEDIAWIKI_TALK, # old literal translation backward compatibility
    'Šablona_diskuse'       => NS_TEMPLATE_TALK,  # old literal translation backward compatibility
    'Nápověda_diskuse'      => NS_HELP_TALK,      # old literal translation backward compatibility
    'Kategorie_diskuse'     => NS_CATEGORY_TALK,  # old literal translation backward compatibility
);

$namespaceGenderAliases = array(
    NS_USER      => array( 'male' => 'Uživatel', 'female' => 'Uživatelka' ),
    NS_USER_TALK => array( 'male' => 'Diskuse_s_uživatelem', 'female' => 'Diskuse_s_uživatelkou' ),
);

$specialPageAliases = array(
	'Activeusers'               => array( 'Aktivní_uživatelé', 'Aktivni_uzivatele' ),
	'Allmessages'               => array( 'Všechna_hlášení', 'Všechny_zprávy', 'Vsechna_hlaseni', 'Vsechny_zpravy' ),
	'Allpages'                  => array( 'Všechny_stránky', 'Vsechny_stranky' ),
	'Ancientpages'              => array( 'Nejstarší_stránky', 'Staré_stránky', 'Stare_stranky' ),
	'Blankpage'                 => array( 'Prázdná_stránka' ),
	'Block'                     => array( 'Blokování', 'Blokovani', 'Blokovat_uživatele', 'Blokovat_IP', 'Blokovat_uzivatele' ),
	'Blockme'                   => array( 'Zablokuj_mě', 'Zablokuj_me' ),
	'Booksources'               => array( 'Zdroje_knih' ),
	'BrokenRedirects'           => array( 'Přerušená_přesměrování', 'Prerusena_presmerovani' ),
	'Categories'                => array( 'Kategorie' ),
	'ChangeEmail'               => array( 'Změna_emailu', 'Zmena_emailu' ),
	'ChangePassword'            => array( 'Změna_hesla', 'Zmena_hesla', 'Resetovat_heslo' ),
	'Confirmemail'              => array( 'Potvrdit_e-mail' ),
	'Contributions'             => array( 'Příspěvky', 'Prispevky' ),
	'CreateAccount'             => array( 'Vytvořit_účet', 'Vytvorit_ucet' ),
	'Deadendpages'              => array( 'Slepé_stránky', 'Slepe_stranky' ),
	'DeletedContributions'      => array( 'Smazané_příspěvky', 'Smazane_prispevky' ),
	'Disambiguations'           => array( 'Rozcestníky', 'Rozcestniky' ),
	'DoubleRedirects'           => array( 'Dvojitá_přesměrování', 'Dvojita_presmerovani' ),
	'Emailuser'                 => array( 'E-mail' ),
	'Export'                    => array( 'Exportovat_stránky' ),
	'Fewestrevisions'           => array( 'Stránky_s_nejméně_editacemi', 'Stranky_s_nejmene_editacemi', 'Stránky_s_nejmenším_počtem_editací' ),
	'FileDuplicateSearch'       => array( 'Hledání_duplicitních_souborů', 'Hledani_duplicitnich_souboru' ),
	'Filepath'                  => array( 'Cesta_k_souboru' ),
	'Import'                    => array( 'Importovat_stránky' ),
	'Invalidateemail'           => array( 'Zneplatnit_e-mail', 'Zrušit_potvrzení_e-mailu' ),
	'BlockList'                 => array( 'Blokovaní_uživatelé', 'Blokovani_uzivatele' ),
	'LinkSearch'                => array( 'Hledání_odkazů', 'Hledani_odkazu' ),
	'Listadmins'                => array( 'Seznam_správců', 'Seznam_spravcu' ),
	'Listbots'                  => array( 'Seznam_botů', 'Seznam_botu' ),
	'Listfiles'                 => array( 'Seznam_souborů', 'Seznam_souboru' ),
	'Listgrouprights'           => array( 'Seznam_uživatelských_práv', 'Seznam_uzivatelskych_prav' ),
	'Listredirects'             => array( 'Seznam_přesměrování', 'Seznam_presmerovani' ),
	'Listusers'                 => array( 'Uživatelé', 'Uzivatele', 'Seznam_uživatelů', 'Seznam_uzivatelu' ),
	'Lockdb'                    => array( 'Zamknout_databázi', 'Zamknout_databazi' ),
	'Log'                       => array( 'Protokolovací_záznamy', 'Protokoly', 'Protokol', 'Protokolovaci_zaznamy' ),
	'Lonelypages'               => array( 'Sirotčí_stránky', 'Sirotci_stranky' ),
	'Longpages'                 => array( 'Nejdelší_stránky', 'Nejdelsi_stranky' ),
	'MergeHistory'              => array( 'Sloučení_historie', 'Slouceni_historie', 'Sloučit_historii' ),
	'MIMEsearch'                => array( 'Hledání_podle_MIME', 'Hledani_podle_MIME', 'Hledat_podle_MIME_typu' ),
	'Mostcategories'            => array( 'Stránky_s_nejvíce_kategoriemi', 'Stranky_s_nejvice_kategoriemi', 'Stránky_s_nejvyšším_počtem_kategorií' ),
	'Mostimages'                => array( 'Nejpoužívanější_soubory', 'Nejpouzivanejsi_soubory' ),
	'Mostlinked'                => array( 'Nejodkazovanější_stránky', 'Nejodkazovanejsi_stranky' ),
	'Mostlinkedcategories'      => array( 'Nejpoužívanější_kategorie', 'Nejpouzivanejsi_kategorie' ),
	'Mostlinkedtemplates'       => array( 'Nejpoužívanější_šablony', 'Nejpouzivanejsi_sablony' ),
	'Mostrevisions'             => array( 'Stránky_s_nejvíce_editacemi', 'Stranky_s_nejvice_editacemi', 'Stránky_s_nejvyšším_počtem_editací' ),
	'Movepage'                  => array( 'Přesunout_stránku' ),
	'Mycontributions'           => array( 'Mé_příspěvky', 'Me_prispevky' ),
	'Mypage'                    => array( 'Moje_stránka', 'Moje_stranka' ),
	'Mytalk'                    => array( 'Moje_diskuse' ),
	'Newimages'                 => array( 'Nové_obrázky', 'Galerie_nových_obrázků', 'Nove_obrazky' ),
	'Newpages'                  => array( 'Nové_stránky', 'Nove_stranky', 'Nejnovější_stránky', 'Nejnovejsi_stranky' ),
	'Popularpages'              => array( 'Nejnavštěvovanější_stránky', 'Nejnavstevovanejsi_stranky' ),
	'Preferences'               => array( 'Nastavení', 'Nastaveni' ),
	'Protectedpages'            => array( 'Zamčené_stránky', 'Zamcene_stranky' ),
	'Protectedtitles'           => array( 'Zamčené_názvy', 'Zamcene_nazvy', 'Stránky_které_nelze_vytvořit' ),
	'Randompage'                => array( 'Náhodná_stránka', 'Nahodna_stranka' ),
	'Randomredirect'            => array( 'Náhodné_přesměrování', 'Nahodne_presmerovani' ),
	'Recentchanges'             => array( 'Poslední_změny', 'Posledni_zmeny' ),
	'Recentchangeslinked'       => array( 'Související_změny', 'Souvisejici_zmeny' ),
	'Revisiondelete'            => array( 'Smazat_revizi' ),
	'Search'                    => array( 'Hledání', 'Hledani' ),
	'Shortpages'                => array( 'Nejkratší_stránky', 'Nejkratsi_stranky' ),
	'Specialpages'              => array( 'Speciální_stránky', 'Specialni_stranky' ),
	'Statistics'                => array( 'Statistika', 'Statistiky' ),
	'Tags'                      => array( 'Značky', 'Znacky' ),
	'Unblock'                   => array( 'Odblokování', 'Odblokovani' ),
	'Uncategorizedcategories'   => array( 'Nekategorizované_kategorie', 'Nekategorizovane_kategorie' ),
	'Uncategorizedimages'       => array( 'Nekategorizované_soubory', 'Nekategorizovane_soubory' ),
	'Uncategorizedpages'        => array( 'Nekategorizované_stránky', 'Nekategorizovane_stranky' ),
	'Uncategorizedtemplates'    => array( 'Nekategorizované_šablony', 'Nekategorizovane_sablony' ),
	'Undelete'                  => array( 'Smazané_stránky', 'Smazane_stranky' ),
	'Unlockdb'                  => array( 'Odemknout_databázi', 'Odemknout_databazi' ),
	'Unusedcategories'          => array( 'Nepoužívané_kategorie', 'Nepouzivane_kategorie' ),
	'Unusedimages'              => array( 'Nepoužívané_soubory', 'Nepouzivane_soubory' ),
	'Unusedtemplates'           => array( 'Nepoužívané_šablony', 'Nepouzivane_sablony' ),
	'Unwatchedpages'            => array( 'Nesledované_stránky' ),
	'Upload'                    => array( 'Načíst_soubor', 'Nacist_soubor', 'Načíst_obrázek' ),
	'Userlogin'                 => array( 'Přihlásit', 'Prihlasit' ),
	'Userlogout'                => array( 'Odhlásit', 'Odhlasit' ),
	'Userrights'                => array( 'Uživatelská_práva', 'Správa_uživatelů', 'Uzivatelska_prava' ),
	'Version'                   => array( 'Verze' ),
	'Wantedcategories'          => array( 'Chybějící_kategorie', 'Požadované_kategorie', 'Pozadovane_kategorie' ),
	'Wantedfiles'               => array( 'Chybějící_soubory', 'Požadované_soubory', 'Pozadovane_soubory' ),
	'Wantedpages'               => array( 'Chybějící_stránky', 'Požadované_stránky', 'Pozadovane_stranky' ),
	'Wantedtemplates'           => array( 'Chybějící_šablony', 'Požadované_šablony', 'Pozadovane_sablony' ),
	'Watchlist'                 => array( 'Sledované_stránky', 'Sledovane_stranky' ),
	'Whatlinkshere'             => array( 'Co_odkazuje_na', 'Odkazuje_sem' ),
	'Withoutinterwiki'          => array( 'Bez_interwiki', 'Stránky_bez_interwiki_odkazů' ),
);

$magicWords = array(
	'redirect'                  => array( '0', '#PŘESMĚRUJ', '#REDIRECT' ),
	'notoc'                     => array( '0', '__BEZOBSAHU__', '__NOTOC__' ),
	'nogallery'                 => array( '0', '__BEZGALERIE__', '__NOGALLERY__' ),
	'forcetoc'                  => array( '0', '__VŽDYOBSAH__', '__FORCETOC__' ),
	'toc'                       => array( '0', '__OBSAH__', '__TOC__' ),
	'noeditsection'             => array( '0', '__BEZEDITOVATČÁST__', '__NOEDITSECTION__' ),
	'currentmonth'              => array( '1', 'AKTUÁLNÍMĚSÍC', 'AKTUÁLNÍMĚSÍC2', 'CURRENTMONTH', 'CURRENTMONTH2' ),
	'currentmonth1'             => array( '1', 'AKTUÁLNÍMĚSÍC1', 'CURRENTMONTH1' ),
	'currentmonthname'          => array( '1', 'AKTUÁLNÍMĚSÍCJMÉNO', 'CURRENTMONTHNAME' ),
	'currentmonthnamegen'       => array( '1', 'AKTUÁLNÍMĚSÍCGEN', 'CURRENTMONTHNAMEGEN' ),
	'currentmonthabbrev'        => array( '1', 'AKTUÁLNÍMĚSÍCZKR', 'CURRENTMONTHABBREV' ),
	'currentday'                => array( '1', 'AKTUÁLNÍDEN', 'CURRENTDAY' ),
	'currentday2'               => array( '1', 'AKTUÁLNÍDEN2', 'CURRENTDAY2' ),
	'currentdayname'            => array( '1', 'AKTUÁLNÍDENJMÉNO', 'CURRENTDAYNAME' ),
	'currentyear'               => array( '1', 'AKTUÁLNÍROK', 'CURRENTYEAR' ),
	'currenttime'               => array( '1', 'AKTUÁLNÍČAS', 'CURRENTTIME' ),
	'currenthour'               => array( '1', 'AKTUÁLNÍHODINA', 'CURRENTHOUR' ),
	'localmonth'                => array( '1', 'MÍSTNÍMĚSÍC', 'MÍSTNÍMĚSÍC2', 'LOCALMONTH', 'LOCALMONTH2' ),
	'localmonth1'               => array( '1', 'MÍSTNÍMĚSÍC1', 'LOCALMONTH1' ),
	'localmonthname'            => array( '1', 'MÍSTNÍMĚSÍCJMÉNO', 'LOCALMONTHNAME' ),
	'localmonthnamegen'         => array( '1', 'MÍSTNÍMĚSÍCGEN', 'LOCALMONTHNAMEGEN' ),
	'localmonthabbrev'          => array( '1', 'MÍSTNÍMĚSÍCZKR', 'LOCALMONTHABBREV' ),
	'localday'                  => array( '1', 'MÍSTNÍDEN', 'LOCALDAY' ),
	'localday2'                 => array( '1', 'MÍSTNÍDEN2', 'LOCALDAY2' ),
	'localdayname'              => array( '1', 'MÍSTNÍDENJMÉNO', 'LOCALDAYNAME' ),
	'localyear'                 => array( '1', 'MÍSTNÍROK', 'LOCALYEAR' ),
	'localtime'                 => array( '1', 'MÍSTNÍČAS', 'LOCALTIME' ),
	'localhour'                 => array( '1', 'MÍSTNÍHODINA', 'LOCALHOUR' ),
	'numberofpages'             => array( '1', 'POČETSTRAN', 'NUMBEROFPAGES' ),
	'numberofarticles'          => array( '1', 'POČETČLÁNKŮ', 'NUMBEROFARTICLES' ),
	'numberoffiles'             => array( '1', 'POČETSOUBORŮ', 'NUMBEROFFILES' ),
	'numberofusers'             => array( '1', 'POČETUŽIVATELŮ', 'NUMBEROFUSERS' ),
	'numberofactiveusers'       => array( '1', 'POČETAKTIVNÍCHUŽIVATELŮ', 'NUMBEROFACTIVEUSERS' ),
	'numberofedits'             => array( '1', 'POČETEDITACÍ', 'NUMBEROFEDITS' ),
	'pagename'                  => array( '1', 'NÁZEVSTRANY', 'PAGENAME' ),
	'pagenamee'                 => array( '1', 'NÁZEVSTRANYE', 'PAGENAMEE' ),
	'namespace'                 => array( '1', 'JMENNÝPROSTOR', 'NAMESPACE' ),
	'namespacee'                => array( '1', 'JMENNÝPROSTORE', 'NAMESPACEE' ),
	'talkspace'                 => array( '1', 'DISKUSNÍPROSTOR', 'TALKSPACE' ),
	'talkspacee'                => array( '1', 'DISKUSNÍPROSTORE', 'TALKSPACEE' ),
	'subjectspace'              => array( '1', 'ČLÁNEKPROSTOR', 'SUBJECTSPACE', 'ARTICLESPACE' ),
	'subjectspacee'             => array( '1', 'ČLÁNEKPROSTORE', 'SUBJECTSPACEE', 'ARTICLESPACEE' ),
	'fullpagename'              => array( '1', 'PLNÝNÁZEVSTRANY', 'FULLPAGENAME' ),
	'fullpagenamee'             => array( '1', 'PLNÝNÁZEVSTRANYE', 'FULLPAGENAMEE' ),
	'subpagename'               => array( '1', 'NÁZEVPODSTRANY', 'SUBPAGENAME' ),
	'subpagenamee'              => array( '1', 'NÁZEVPODSTRANYE', 'SUBPAGENAMEE' ),
	'basepagename'              => array( '1', 'NÁZEVNADSTRANY', 'BASEPAGENAME' ),
	'basepagenamee'             => array( '1', 'NÁZEVNADSTRANYE', 'BASEPAGENAMEE' ),
	'talkpagename'              => array( '1', 'NÁZEVDISKUSE', 'TALKPAGENAME' ),
	'talkpagenamee'             => array( '1', 'NÁZEVDISKUSEE', 'TALKPAGENAMEE' ),
	'subjectpagename'           => array( '1', 'NÁZEVČLÁNKU', 'SUBJECTPAGENAME', 'ARTICLEPAGENAME' ),
	'subjectpagenamee'          => array( '1', 'NÁZEVČLÁNKUE', 'SUBJECTPAGENAMEE', 'ARTICLEPAGENAMEE' ),
	'subst'                     => array( '0', 'VLOŽIT:', 'SUBST:' ),
	'msgnw'                     => array( '0', 'VLOŽITNW:', 'MSGNW:' ),
	'img_thumbnail'             => array( '1', 'náhled', 'thumbnail', 'thumb' ),
	'img_manualthumb'           => array( '1', 'náhled=$1', 'thumbnail=$1', 'thumb=$1' ),
	'img_right'                 => array( '1', 'vpravo', 'right' ),
	'img_left'                  => array( '1', 'vlevo', 'left' ),
	'img_none'                  => array( '1', 'žádné', 'none' ),
	'img_width'                 => array( '1', '$1pixelů', '$1px' ),
	'img_center'                => array( '1', 'střed', 'center', 'centre' ),
	'img_framed'                => array( '1', 'rám', 'framed', 'enframed', 'frame' ),
	'img_frameless'             => array( '1', 'bezrámu', 'frameless' ),
	'img_page'                  => array( '1', 'strana=$1', 'strana $1', 'page=$1', 'page $1' ),
	'img_border'                => array( '1', 'okraj', 'border' ),
	'sitename'                  => array( '1', 'NÁZEVWEBU', 'SITENAME' ),
	'ns'                        => array( '0', 'JMENNÝPROSTOR:', 'NS:' ),
	'localurl'                  => array( '0', 'MÍSTNÍURL:', 'LOCALURL:' ),
	'localurle'                 => array( '0', 'MÍSTNÍURLE:', 'LOCALURLE:' ),
	'servername'                => array( '0', 'NÁZEVSERVERU', 'SERVERNAME' ),
	'grammar'                   => array( '0', 'SKLOŇUJ:', 'GRAMMAR:' ),
	'notitleconvert'            => array( '0', '__BEZKONVERZENADPISU__', '__NOTITLECONVERT__', '__NOTC__' ),
	'nocontentconvert'          => array( '0', '__BEZKONVERZEOBSAHU__', '__NOCONTENTCONVERT__', '__NOCC__' ),
	'currentweek'               => array( '1', 'AKTUÁLNÍTÝDEN', 'CURRENTWEEK' ),
	'currentdow'                => array( '1', 'AKTUÁLNÍDENTÝDNE', 'CURRENTDOW' ),
	'localweek'                 => array( '1', 'MÍSTNÍTÝDEN', 'LOCALWEEK' ),
	'localdow'                  => array( '1', 'MÍSTNÍDENTÝDNE', 'LOCALDOW' ),
	'revisionid'                => array( '1', 'IDREVIZE', 'REVISIONID' ),
	'revisionday'               => array( '1', 'DENREVIZE', 'REVISIONDAY' ),
	'revisionday2'              => array( '1', 'DENREVIZE2', 'REVISIONDAY2' ),
	'revisionmonth'             => array( '1', 'MĚSÍCREVIZE', 'REVISIONMONTH' ),
	'revisionyear'              => array( '1', 'ROKREVIZE', 'REVISIONYEAR' ),
	'revisiontimestamp'         => array( '1', 'KÓDČASUREVIZE', 'REVISIONTIMESTAMP' ),
	'plural'                    => array( '0', 'PLURÁL:', 'PLURAL:' ),
	'fullurl'                   => array( '0', 'PLNÉURL:', 'FULLURL:' ),
	'fullurle'                  => array( '0', 'PLNÉURLE:', 'FULLURLE:' ),
	'lcfirst'                   => array( '0', 'PRVNÍMALÉ:', 'LCFIRST:' ),
	'ucfirst'                   => array( '0', 'PRVNÍVELKÉ:', 'UCFIRST:' ),
	'lc'                        => array( '0', 'MALÁ:', 'LC:' ),
	'uc'                        => array( '0', 'VELKÁ:', 'UC:' ),
	'displaytitle'              => array( '1', 'ZOBRAZOVANÝNADPIS', 'DISPLAYTITLE' ),
	'newsectionlink'            => array( '1', '__LINKPŘIDATKOMENTÁŘ__', '__NEWSECTIONLINK__' ),
	'currentversion'            => array( '1', 'VERZESOFTWARE', 'CURRENTVERSION' ),
	'urlencode'                 => array( '0', 'ENKÓDOVATURL:', 'URLENCODE:' ),
	'anchorencode'              => array( '0', 'ENKÓDOVATNADPIS', 'ANCHORENCODE' ),
	'currenttimestamp'          => array( '1', 'AKTUÁLNÍKÓDČASU', 'CURRENTTIMESTAMP' ),
	'localtimestamp'            => array( '1', 'MÍSTNÍKÓDČASU', 'LOCALTIMESTAMP' ),
	'language'                  => array( '0', '#JAZYK:', '#LANGUAGE:' ),
	'contentlanguage'           => array( '1', 'JAZYKOBSAHU', 'CONTENTLANGUAGE', 'CONTENTLANG' ),
	'pagesinnamespace'          => array( '1', 'STRÁNEKVEJMENNÉMPROSTORU:', 'PAGESINNAMESPACE:', 'PAGESINNS:' ),
	'numberofadmins'            => array( '1', 'POČETSPRÁVCŮ', 'NUMBEROFADMINS' ),
	'formatnum'                 => array( '0', 'FORMÁTUJČÍSLO', 'FORMATNUM' ),
	'padleft'                   => array( '0', 'ZAROVNATVLEVO', 'PADLEFT' ),
	'padright'                  => array( '0', 'ZAROVNATVPRAVO', 'PADRIGHT' ),
	'special'                   => array( '0', 'speciální', 'special' ),
	'defaultsort'               => array( '1', 'KLÍČŘAZENÍ:', 'DEFAULTSORT:', 'DEFAULTSORTKEY:', 'DEFAULTCATEGORYSORT:' ),
	'filepath'                  => array( '0', 'CESTAKSOUBORU', 'FILEPATH:' ),
	'tag'                       => array( '0', 'značka', 'tag' ),
	'hiddencat'                 => array( '1', '__SKRÝTKAT__', '__HIDDENCAT__' ),
	'pagesincategory'           => array( '1', 'STRÁNEKVKATEGORII', 'STRÁNEKVKAT', 'PAGESINCATEGORY', 'PAGESINCAT' ),
	'pagesize'                  => array( '1', 'VELIKOSTSTRÁNKY', 'PAGESIZE' ),
	'index'                     => array( '1', '__INDEXOVAT__', '__INDEX__' ),
	'noindex'                   => array( '1', '__NEINDEXOVAT__', '__NOINDEX__' ),
	'staticredirect'            => array( '1', '__STATICKÉPŘESMĚROVÁNÍ__', '__STATICREDIRECT__' ),
	'protectionlevel'           => array( '1', 'ÚROVEŇZAMČENÍ', 'PROTECTIONLEVEL' ),
);

/**
 * Date formats list for Special:Preferences
 * see $dateFormats for definitions
 */
$datePreferences =  array(
	'ČSN basic dt',
	'ČSN padded dt',
	'ČSN basic td',
	'ČSN padded td',
	'PČP dt',
	'PČP td',
	'ISO dt',
);

/**
 * Default date format to be used
 */
$defaultDateFormat = 'ČSN basic dt';

/**
 * Date formats definitions
 *
 * ČSN - Česká státní norma 01 6910 / Czech state norm 01 6910; numeral representation, basic = 1-12(31), padded = 01-12(31)
 * PČP - Pravidla českého pravopisu / The rules of Czech ortography (ISBN 80-200-0475-0); verbal representation
 * ISO - ISO 8601:2004 - Data elements and interchange formats -- Information interchange -- Representation of dates and times
 * dt - date, time order
 * td - time, date order
 */
$dateFormats = array(
	'ČSN basic dt time' => 'H:i',
	'ČSN basic dt date' => 'j. n. Y',
	'ČSN basic dt both' => 'j. n. Y, H:i',

	'ČSN padded dt time' => 'H:i',
	'ČSN padded dt date' => 'd.m.Y',
	'ČSN padded dt both' => 'd.m.Y, H:i',

	'ČSN basic td time' => 'H:i',
	'ČSN basic td date' => 'j. n. Y',
	'ČSN basic td both' => 'H:i, j. n. Y',

	'ČSN padded td time' => 'H:i',
	'ČSN padded td date' => 'd.m.Y',
	'ČSN padded td both' => 'H:i, d.m.Y',

	'PČP dt time' => 'H.i',
	'PČP dt date' => 'j. xg Y',
	'PČP dt both' => 'j. xg Y, H.i',

	'PČP td time' => 'H.i',
	'PČP td date' => 'j. xg Y',
	'PČP td both' => 'H.i, j. xg Y',

	'ISO dt time' => 'xnH:xni:xns',
	'ISO dt date' => 'xnY-xnm-xnd',
	'ISO dt both' => 'xnY-xnm-xnd"T"xnH:xni:xns',
);

/**
 * Default list of book sources
 * Hledání knihy podle ISBN
 */
$bookstoreList = array(
	'Národní knihovna'          => 'http://aleph.nkp.cz/F/?func=find-a&find_code=ISN&request=$1',
	'Státní technická knihovna' => 'http://www.stk.cz/cgi-bin/dflex/CZE/STK/BROWSE?A=01&V=$1',
	'inherit' => true,
);

/**
 * Regular expression matching the "link trail", e.g. "ed" in [[Toast]]ed, as
 * the first group, and the remainder of the string as the second group.
 */
# Písmena, která se mají objevit jako část odkazu ve formě '[[jazyk]]y' atd:
$linkTrail = '/^([a-záčďéěíňóřšťúůýž]+)(.*)$/sDu';

$separatorTransformTable = array( ',' => "\xc2\xa0", '.' => ',' );

$messages = array(
# User preference toggles
'tog-underline' => 'Podtrhávat odkazy:',
'tog-justify' => 'Zarovnat odstavce do bloku',
'tog-hideminor' => 'Skrýt malé editace v posledních změnách',
'tog-hidepatrolled' => 'Skrýt patrolované editace v posledních změnách',
'tog-newpageshidepatrolled' => 'Skrýt patrolované stránky ze seznamu nových stránek',
'tog-extendwatchlist' => 'Na seznamu sledovaných stránek zobrazovat všechny změny, ne jen tu poslední',
'tog-usenewrc' => 'V posledních změnách a sledovaných stránkách seskupovat změny podle stránek (vyžaduje JavaScript)',
'tog-numberheadings' => 'Automaticky číslovat nadpisy',
'tog-showtoolbar' => 'Zobrazit panel nástrojů (vyžaduje JavaScript)',
'tog-editondblclick' => 'Editovat dvojklikem (JavaScript)',
'tog-editsection' => 'Zapnout možnost editace části stránky pomocí odkazu [editovat]',
'tog-editsectiononrightclick' => 'Zapnout možnost editace části stránky pomocí kliknutí pravým tlačítkem na nadpisy stránky (JavaScript)',
'tog-showtoc' => 'Zobrazovat obsah (na stránkách s více než třemi nadpisy)',
'tog-rememberpassword' => 'Zapamatovat si mé přihlášení v tomto prohlížeči (maximálně $1 {{PLURAL:$1|den|dny|dní}})',
'tog-watchcreations' => 'Přidávat mnou založené stránky a načtené soubory ke sledovaným',
'tog-watchdefault' => 'Přidávat mnou editované stránky a soubory ke sledovaným',
'tog-watchmoves' => 'Přidávat mnou přesouvané stránky a soubory mezi sledované',
'tog-watchdeletion' => 'Přidávat stránky a soubory, které smažu, mezi sledované',
'tog-minordefault' => 'Označit editaci implicitně jako malá editace',
'tog-previewontop' => 'Zobrazovat náhled před editačním oknem (ne za ním)',
'tog-previewonfirst' => 'Zobrazit při první editaci náhled',
'tog-nocache' => 'Vypnout cachování v prohlížeči',
'tog-enotifwatchlistpages' => 'Poslat e-mail při změně sledované stránky nebo souboru',
'tog-enotifusertalkpages' => 'Poslat e-mail při změně mé diskusní stránky',
'tog-enotifminoredits' => 'Posílat e-maily i při malých editacích stránek a souborů',
'tog-enotifrevealaddr' => 'Prozradit mou e-mailovou adresu v upozorňujících e-mailech',
'tog-shownumberswatching' => 'Zobrazovat počet sledujících uživatelů',
'tog-oldsig' => 'Stávající podpis:',
'tog-fancysig' => 'Používat v podpisu wikitext (bez automatického odkazu)',
'tog-externaleditor' => 'Implicitně používat externí editor (pouze pro pokročilé, vyžaduje speciální nastavení počítače; [//www.mediawiki.org/wiki/Manual:External_editors další informace])',
'tog-externaldiff' => 'Implicitně používat externí porovnávací program (pouze pro pokročilé, vyžaduje speciální nastavení počítače; [//www.mediawiki.org/wiki/Manual:External_editors další informace])',
'tog-showjumplinks' => 'Používat odkazy „skočit na“ pro vyšší přístupnost',
'tog-uselivepreview' => 'Používat rychlý náhled (JavaScript) (Experimentální)',
'tog-forceeditsummary' => 'Upozornit, když nevyplním shrnutí editace',
'tog-watchlisthideown' => 'Na seznamu sledovaných stránek skrýt moje editace',
'tog-watchlisthidebots' => 'Na seznamu sledovaných stránek skrýt editace botů',
'tog-watchlisthideminor' => 'Na seznamu sledovaných stránek skrýt malé editace',
'tog-watchlisthideliu' => 'Na seznamu sledovaných stránek skrýt editace přihlášených uživatelů',
'tog-watchlisthideanons' => 'Na seznamu sledovaných stránek skrýt editace nepřihlášených uživatelů',
'tog-watchlisthidepatrolled' => 'Skrýt patrolované editace ve sledovaných stránkách',
'tog-ccmeonemails' => 'Zasílat mi kopie e-mailů, které pošlu jiným uživatelům',
'tog-diffonly' => 'Nezobrazovat obsah stránky pod rozdílem verzí',
'tog-showhiddencats' => 'Zobrazit skryté kategorie',
'tog-noconvertlink' => 'Vypnout konverzi názvů',
'tog-norollbackdiff' => 'Po vrácení změny nezobrazovat porovnání rozdílů',

'underline-always' => 'Vždy',
'underline-never' => 'Nikdy',
'underline-default' => 'Podle nastavení prohlížeče nebo vzhledu',

# Font style option in Special:Preferences
'editfont-style' => 'Druh písma v editačním poli:',
'editfont-default' => 'Podle nastavení prohlížeče',
'editfont-monospace' => 'Neproporcionální písmo',
'editfont-sansserif' => 'Bezpatkové písmo',
'editfont-serif' => 'Patkové písmo',

# Dates
'sunday' => 'neděle',
'monday' => 'pondělí',
'tuesday' => 'úterý',
'wednesday' => 'středa',
'thursday' => 'čtvrtek',
'friday' => 'pátek',
'saturday' => 'sobota',
'sun' => 'ne',
'mon' => 'po',
'tue' => 'út',
'wed' => 'st',
'thu' => 'čt',
'fri' => 'pá',
'sat' => 'so',
'january' => 'leden',
'february' => 'únor',
'march' => 'březen',
'april' => 'duben',
'may_long' => 'květen',
'june' => 'červen',
'july' => 'červenec',
'august' => 'srpen',
'september' => 'září',
'october' => 'říjen',
'november' => 'listopad',
'december' => 'prosinec',
'january-gen' => 'ledna',
'february-gen' => 'února',
'march-gen' => 'března',
'april-gen' => 'dubna',
'may-gen' => 'května',
'june-gen' => 'června',
'july-gen' => 'července',
'august-gen' => 'srpna',
'september-gen' => 'září',
'october-gen' => 'října',
'november-gen' => 'listopadu',
'december-gen' => 'prosince',
'jan' => '1.',
'feb' => '2.',
'mar' => '3.',
'apr' => '4.',
'may' => '5.',
'jun' => '6.',
'jul' => '7.',
'aug' => '8.',
'sep' => '9.',
'oct' => '10.',
'nov' => '11.',
'dec' => '12.',

# Categories related messages
'pagecategories' => '{{PLURAL:$1|Kategorie|Kategorie|Kategorie}}',
'category_header' => 'Stránky v kategorii „$1“',
'subcategories' => 'Podkategorie',
'category-media-header' => 'Soubory v kategorii „$1“',
'category-empty' => "''Tato kategorie neobsahuje žádné stránky či soubory.''",
'hidden-categories' => '{{PLURAL:$1|Skrytá kategorie|Skryté kategorie|Skryté kategorie}}',
'hidden-category-category' => 'Skryté kategorie',
'category-subcat-count' => '{{PLURAL:$2|V této kategorii je pouze následující podkategorie.|{{PLURAL:$1|Zobrazuje se jedna podkategorie|Zobrazují se $1 podkategorie|Zobrazuje se $1 podkategorií}} z celkového počtu $2 podkategorií v této kategorii.|{{PLURAL:$1|Zobrazuje se jedna podkategorie|Zobrazují se $1 podkategorie|Zobrazuje se $1 podkategorií}} z celkového počtu $2 podkategorií v této kategorii.}}',
'category-subcat-count-limited' => 'Tato kategorie obsahuje {{PLURAL:$1|následující podkategorii|následující $1 podkategorie|následujících $1 podkategorií}}.',
'category-article-count' => '{{PLURAL:$2|V této kategorii je pouze následující stránka.|{{PLURAL:$1|Zobrazuje se jedna stránka|Zobrazují se $1 stránky|Zobrazuje se  $1 stránek}} z celkového počtu $2 stránek v této kategorii.|{{PLURAL:$1|Zobrazuje se jedna stránka|Zobrazují se $1 stránky|Zobrazuje se $1 stránek}} z celkového počtu $2 stránek v této kategorii.}}',
'category-article-count-limited' => 'Tato kategorie obsahuje {{PLURAL:$1|následující stránku|následující $1 stránky|následujících $1 stránek}}.',
'category-file-count' => '{{PLURAL:$2|V této kategorii je pouze následující soubor.|{{PLURAL:$1|Zobrazuje se jeden soubor|Zobrazují se $1 soubory|Zobrazuje se  $1 souborů}} z celkového počtu $2 souborů v této kategorii.|{{PLURAL:$1|Zobrazuje se jedna soubor|Zobrazují se $1 soubory|Zobrazuje se $1 souborů}} z celkového počtu $2 souborů v této kategorii.}}',
'category-file-count-limited' => 'Tato kategorie obsahuje {{PLURAL:$1|následující soubor|následující $1 soubory|následujících $1 souborů}}.',
'listingcontinuesabbrev' => 'pokrač.',
'index-category' => 'Indexované stránky',
'noindex-category' => 'Neindexované stránky',
'broken-file-category' => 'Stránky s odkazy na neexistující soubory',

'about' => 'Úvod',
'article' => 'Obsahová stránka',
'newwindow' => '(otevře se v novém okně)',
'cancel' => 'Storno',
'moredotdotdot' => 'Další…',
'mypage' => 'Moje stránka',
'mytalk' => 'Moje diskuse',
'anontalk' => 'Diskuse k této IP adrese',
'navigation' => 'Navigace',
'and' => '&#32;a',

# Cologne Blue skin
'qbfind' => 'Hledání',
'qbbrowse' => 'Listování',
'qbedit' => 'Editování',
'qbpageoptions' => 'Tato stránka',
'qbmyoptions' => 'Moje volby',
'qbspecialpages' => 'Speciální stránky',
'faq' => 'Často kladené otázky',
'faqpage' => 'Project:Často kladené otázky',

# Vector skin
'vector-action-addsection' => 'Přidat téma',
'vector-action-delete' => 'Smazat',
'vector-action-move' => 'Přesunout',
'vector-action-protect' => 'Zamknout',
'vector-action-undelete' => 'Obnovit',
'vector-action-unprotect' => 'Změnit zámek',
'vector-simplesearch-preference' => 'Zapnout zjednodušené vyhledávání (pouze vzhled Vektor)',
'vector-view-create' => 'Založit',
'vector-view-edit' => 'Editovat',
'vector-view-history' => 'Zobrazit historii',
'vector-view-view' => 'Číst',
'vector-view-viewsource' => 'Zobrazit zdrojový kód',
'actions' => 'Akce',
'namespaces' => 'Jmenné prostory',
'variants' => 'Varianty',

'errorpagetitle' => 'Chyba',
'returnto' => 'Návrat na stránku „$1“.',
'tagline' => 'Z {{grammar:2sg|{{SITENAME}}}}',
'help' => 'Nápověda',
'search' => 'Hledat',
'searchbutton' => 'Hledat',
'go' => 'Jít na',
'searcharticle' => 'Jít na',
'history' => 'Historie stránky',
'history_short' => 'Historie',
'updatedmarker' => 'změněno od poslední návštěvy',
'printableversion' => 'Verze k tisku',
'permalink' => 'Trvalý odkaz',
'print' => 'Vytisknout',
'view' => 'Zobrazit',
'edit' => 'Editovat',
'create' => 'Vytvořit',
'editthispage' => 'Editovat stránku',
'create-this-page' => 'Vytvořit tuto stránku',
'delete' => 'Smazat',
'deletethispage' => 'Smazat stránku',
'undelete_short' => 'Obnovit $1 {{PLURAL:$1|verzi|verze|verzí}}',
'viewdeleted_short' => 'Zobrazit {{PLURAL:$1|smazanou editaci|$1 smazané editace|$1 smazaných editací}}',
'protect' => 'Zamknout',
'protect_change' => 'změnit',
'protectthispage' => 'Zamknout stránku',
'unprotect' => 'Změnit zámek',
'unprotectthispage' => 'Změnit zámek této stránky',
'newpage' => 'Nová stránka',
'talkpage' => 'Diskusní stránka',
'talkpagelinktext' => 'diskuse',
'specialpage' => 'Speciální stránka',
'personaltools' => 'Osobní nástroje',
'postcomment' => 'Nová sekce',
'articlepage' => 'Prohlédnout si stránku',
'talk' => 'Diskuse',
'views' => 'Zobrazení',
'toolbox' => 'Nástroje',
'userpage' => 'Prohlédnout si uživatelovu stránku',
'projectpage' => 'Prohlédnout si stránku projektu',
'imagepage' => 'Prohlédnout si stránku o souboru',
'mediawikipage' => 'Prohlédnout si text rozhraní',
'templatepage' => 'Prohlédnout si šablonu',
'viewhelppage' => 'Prohlédnout si stránku nápovědy',
'categorypage' => 'Prohlédnout si stránku kategorie',
'viewtalkpage' => 'Prohlédnout si diskusi',
'otherlanguages' => 'V jiných jazycích',
'redirectedfrom' => '(Přesměrováno z $1)',
'redirectpagesub' => 'Přesměrování',
'lastmodifiedat' => 'Stránka byla naposledy editována $1 v $2.',
'viewcount' => 'Stránka byla zobrazena {{PLURAL:$1|jedenkrát|$1krát|$1krát}}.',
'protectedpage' => 'Zamčená stránka',
'jumpto' => 'Přejít na:',
'jumptonavigation' => 'navigace',
'jumptosearch' => 'hledání',
'view-pool-error' => 'Promiňte, servery jsou momentálně přetíženy.
Tuto stránku si právě prohlíží příliš mnoho uživatelů.
Před tím, než ji zkusíte načíst znovu, chvíli počkejte.

$1',
'pool-timeout' => 'Při čekání na zámek vypršel časový limit',
'pool-queuefull' => 'Fronta ve fondu je plná',
'pool-errorunknown' => 'Neznámá chyba',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage) and the disambiguation template definition (see disambiguations).
'aboutsite' => 'O&nbsp;{{grammar:6sg|{{SITENAME}}}}',
'aboutpage' => 'Project:{{SITENAME}}',
'copyright' => 'Obsah je dostupný pod $1.',
'copyrightpage' => '{{ns:project}}:Autorské právo',
'currentevents' => 'Aktuality',
'currentevents-url' => 'Project:Aktuality',
'disclaimers' => 'Vyloučení odpovědnosti',
'disclaimerpage' => 'Project:Vyloučení odpovědnosti',
'edithelp' => 'Pomoc při editování',
'edithelppage' => 'Help:Jak editovat stránku',
'helppage' => 'Help:Obsah',
'mainpage' => 'Hlavní strana',
'mainpage-description' => 'Hlavní strana',
'policy-url' => 'Project:Pravidla',
'portal' => 'Portál {{grammar:2sg|{{SITENAME}}}}',
'portal-url' => 'Project:Portál {{grammar:2sg|{{SITENAME}}}}',
'privacy' => 'Ochrana osobních údajů',
'privacypage' => 'Project:Ochrana osobních údajů',

'badaccess' => 'Nedostatečná oprávnění',
'badaccess-group0' => 'Nemáte oprávnění k provedení požadované činnosti.',
'badaccess-groups' => 'Požadovanou činnost smějí provádět jen uživatelé ve {{PLURAL:$2|skupině|skupinách}} $1.',

'versionrequired' => 'Vyžadováno MediaWiki verze $1',
'versionrequiredtext' => 'Pro použití této stránky je vyžadováno MediaWiki verze $1. Vizte [[Special:Version|stránku verze]].',

'ok' => 'OK',
'pagetitle' => '$1 – {{SITENAME}}',
'retrievedfrom' => 'Citováno z „$1“',
'youhavenewmessages' => 'Máte $1 ($2).',
'newmessageslink' => 'nové zprávy',
'newmessagesdifflink' => 'rozdíl oproti předchozí verzi',
'youhavenewmessagesfromusers' => 'Máte $1 od {{PLURAL:$3|jiného uživatele|$3 jiných uživatelů}} ($2).',
'youhavenewmessagesmanyusers' => 'Máte $1 od mnoha dalších uživatelů ($2).',
'newmessageslinkplural' => '{{PLURAL:$1|novou zprávu|nové zprávy}}',
'newmessagesdifflinkplural' => 'poslední {{PLURAL:$1|změna|změny}}',
'youhavenewmessagesmulti' => 'Na $1 máte nové zprávy',
'editsection' => 'editovat',
'editold' => 'editovat',
'viewsourceold' => 'zobrazit zdroj',
'editlink' => 'editovat',
'viewsourcelink' => 'ukázat zdroj',
'editsectionhint' => 'Editace části $1',
'toc' => 'Obsah',
'showtoc' => 'zobrazit',
'hidetoc' => 'skrýt',
'collapsible-collapse' => 'Sbalit',
'collapsible-expand' => 'Rozbalit',
'thisisdeleted' => 'Prohlédnout nebo obnovit $1?',
'viewdeleted' => 'Zobrazit $1?',
'restorelink' => '{{PLURAL:$1|smazanou editaci|$1 smazané editace|$1 smazaných editací}}',
'feedlinks' => 'Kanály:',
'feed-invalid' => 'Neplatný typ kanálu.',
'feed-unavailable' => 'Kanály nejsou dostupné.',
'site-rss-feed' => 'RSS kanál {{grammar:2sg|$1}}.',
'site-atom-feed' => 'Atom kanál {{grammar:2sg|$1}}.',
'page-rss-feed' => 'RSS kanál stránky „$1“',
'page-atom-feed' => 'Atom kanál stránky „$1“',
'red-link-title' => '$1 (stránka neexistuje)',
'sort-descending' => 'Seřadit sestupně',
'sort-ascending' => 'Seřadit vzestupně',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main' => 'Stránka',
'nstab-user' => 'Uživatelova stránka',
'nstab-media' => 'Soubor',
'nstab-special' => 'Speciální stránka',
'nstab-project' => 'Stránka projektu',
'nstab-image' => 'Soubor',
'nstab-mediawiki' => 'Hlášení',
'nstab-template' => 'Šablona',
'nstab-help' => 'Nápověda',
'nstab-category' => 'Kategorie',

# Main script and global functions
'nosuchaction' => 'Neznámý úkon',
'nosuchactiontext' => 'Činnost („action“) uvedená v URL je neplatná.
Zřejmě jste se překlepli při zadávání adresy nebo jste klikli na chybný odkaz.
Může se ale jednat také o chybu {{GRAMMAR:2sg|{{SITENAME}}}}.',
'nosuchspecialpage' => 'Neexistující speciální stránka',
'nospecialpagetext' => '<strong>Zadali jste neplatnou speciální stránku.</strong>

Zkuste se podívat na [[Special:SpecialPages|seznam všech existujících speciálních stránek]].',

# General errors
'error' => 'Chyba',
'databaseerror' => 'Databázová chyba',
'dberrortext' => 'Při dotazu do databáze došlo k syntaktické chybě.
Příčinou může být chyba v programu.
Poslední dotaz byl:
<blockquote><code>$1</code></blockquote>
z funkce „<code>$2</code>“.
Databáze vrátila chybu „<samp>$3: $4</samp>“.',
'dberrortextcl' => 'Při dotazu do databáze došlo k syntaktické chybě.
Poslední dotaz byl:
„$1“
z funkce „$2“.
Databáze vrátila chybu „$3: $4“',
'laggedslavemode' => 'Upozornění: Stránka nemusí být zcela aktuální.',
'readonly' => 'Databáze je uzamčena',
'enterlockreason' => 'Udejte důvod zamčení, včetně odhadu, za jak dlouho dojde k odemčení.',
'readonlytext' => 'Databáze je nyní uzamčena, takže nelze ukládat nové doplňky a změny. Důvodem je pravděpodobně pravidelná údržba, po které se vše vrátí do normálního stavu.

Správce serveru, který databázi zamkl, poskytl toto zdůvodnění: $1',
'missing-article' => 'V databázi nebyl nalezen požadovaný text stránky „$1“ $2.

Toto je obvykle způsobeno tím, že jste následovali zastaralý odkaz na rozdíl verzí nebo historickou verzi stránky, jež byla smazána.

Pokud toto není váš případ, možná jste nalezli chybu v software. Prosíme, ohlaste to [[Special:ListUsers/sysop|správcům]] spolu s URL této stránky.',
'missingarticle-rev' => '(číslo revize: $1)',
'missingarticle-diff' => '(Rozdíl: $1, $2)',
'readonly_lag' => 'Databáze byla automaticky dočasně uzamčena kvůli zpoždění ostatních databázových serverů oproti hlavnímu',
'internalerror' => 'Vnitřní chyba',
'internalerror_info' => 'Vnitřní chyba: $1',
'fileappenderrorread' => 'Během přidávání se nepodařilo přečíst „$1“.',
'fileappenderror' => 'Nepodařilo se připojit „$1“ k „$2“.',
'filecopyerror' => 'Nebylo možné zkopírovat soubor  „$1“ na „$2“.',
'filerenameerror' => 'Nebylo možné přejmenovat soubor „$1“ na „$2“.',
'filedeleteerror' => 'Nebylo možné smazat soubor „$1“.',
'directorycreateerror' => 'Nelze vytvořit adresář „$1“.',
'filenotfound' => 'Nebylo možné najít soubor „$1“.',
'fileexistserror' => 'Nelze uložit do souboru „$1“: soubor existuje',
'unexpected' => 'Neočekávaná hodnota: "$1"="$2".',
'formerror' => 'Chyba: nebylo možné odeslat formulář',
'badarticleerror' => 'Tento úkon nelze použít na tuto stránku.',
'cannotdelete' => 'Nebylo možné smazat stránku nebo soubor „$1“.
Možná už byl(a) smazán(a) někým jiným.',
'cannotdelete-title' => 'Stránku „$1“ nelze smazat',
'delete-hook-aborted' => 'Smazání bylo bez bližšího vysvětlení zrušeno přípojným bodem.',
'badtitle' => 'Neplatný název',
'badtitletext' => 'Požadovaný název stránky byl neplatný, prázdný nebo obsahoval nesprávnou předponu mezijazykového či interwiki odkazu. Možná obsahoval znaky, které v názvu nejsou dovoleny.',
'perfcached' => 'Následující data jsou z cache a nemusí být plně aktuální. Cache může obsahovat maximálně {{PLURAL:$1|jeden výsledek|$1 výsledky|$1 výsledků}}.',
'perfcachedts' => 'Následující data jsou z cache, která byla naposledy aktualizována $1. Cache může obsahovat maximálně {{PLURAL:$4|jeden výsledek|$4 výsledky|$4 výsledků}}.',
'querypage-no-updates' => 'Aktualizace této stránky je vypnuta. Data nyní nebudou obnovována.',
'wrong_wfQuery_params' => 'Nesprávné parametry do wfQuery()<br />
Funkce: $1<br />
Dotaz: $2',
'viewsource' => 'Zobrazit zdroj',
'viewsource-title' => 'Zobrazení zdroje stránky $1',
'actionthrottled' => 'Akce byla pozastavena',
'actionthrottledtext' => 'Vzhledem k protispamovým opatřením nemůžete požadovanou akci provádět příliš častokrát v krátké době. Zkuste to znovu za několik minut.',
'protectedpagetext' => 'Tato stránka byla zamčena, takže ji nelze editovat.',
'viewsourcetext' => 'Můžete si prohlédnout a zkopírovat zdrojový kód této stránky:',
'viewyourtext' => "Můžete si prohlédnout a zkopírovat zdrojový kód '''vašich změn''' této stránky:",
'protectedinterface' => 'Tato stránka obsahuje text softwarového rozhraní a je zamčena kvůli prevenci zneužití.
Pro přidávání a změny překladů pro všechny wiki použijte [//translatewiki.net/ translatewiki.net], projekt pro lokalizaci MediaWiki.',
'editinginterface' => "'''Upozornění:''' Editujete stránku, která definuje texty rozhraní.
Změny této stránky ovlivní vzhled uživatelského rozhraní všem uživatelům této wiki.
Pro přidávání a změny překladů pro všechny wiki použijte [//translatewiki.net/ translatewiki.net], projekt pro lokalizaci MediaWiki.",
'sqlhidden' => '(SQL dotaz skryt)',
'cascadeprotected' => 'Tato stránka je zamčena, neboť je vložena do {{PLURAL:$1|následující stránky zamčené|následujících stránek zamčených|následujících stránek zamčených}} kaskádovým zámkem:
$2',
'namespaceprotected' => "Nemáte povoleno editovat stránky ve jmenném prostoru '''$1'''.",
'customcssprotected' => 'Nemáte povoleno editovat tuto stránku s CSS, protože obsahuje osobní nastavení jiného uživatele.',
'customjsprotected' => 'Nemáte povoleno editovat tuto stránku s JavaScriptem, protože obsahuje osobní nastavení jiného uživatele.',
'ns-specialprotected' => 'Stránky ve jmenném prostoru {{ns:special}} nelze editovat.',
'titleprotected' => "Stránku s tímto názvem nelze založit, protože název zamknul uživatel [[User:$1|$1]] s odůvodněním: ''$2''.",
'filereadonlyerror' => "Nelze změnit soubor „$1“, protože úložiště souborů „$2“ je momentálně pouze pro čtení.

Správce serveru, který úložiště zamkl, poskytl toto zdůvodnění: „''$3''“.",
'invalidtitle-knownnamespace' => 'Neplatný název se jmenným prostorem „$2“ a textem „$3“',
'invalidtitle-unknownnamespace' => 'Neplatný název s neznámým číslem jmenného prostoru $1 a textem „$2“',
'exception-nologin' => 'Nejste přihlášen(a)',
'exception-nologin-text' => 'Tato stránka nebo akce vyžaduje, abyste byli na této wiki přihlášeni.',

# Virus scanner
'virus-badscanner' => "Špatná konfigurace: neznámý antivirový program: ''$1''",
'virus-scanfailed' => 'prověřování selhalo (kód $1)',
'virus-unknownscanner' => 'neznámý antivirus:',

# Login and logout pages
'logouttext' => "'''Nyní jste odhlášeni.'''

Můžete pokračovat v anonymním prohlížení a editaci {{grammar:2sg|{{SITENAME}}}}, nebo se můžete <span class='plainlinks'>[$1 znovu přihlásit]</span> jako stejný či jiný uživatel.
Uvědomte si, že některé stránky se mohou i nadále zobrazovat, jako byste byli dosud přihlášeni, pokud nevymažete cache prohlížeče.",
'welcomecreation' => '== Vítejte, $1! ==
Váš účet byl úspěšně vytvořen.
Nezapomeňte si upravit své [[Special:Preferences|nastavení {{grammar:2sg|{{SITENAME}}}}]].',
'yourname' => 'Uživatelské jméno:',
'yourpassword' => 'Vaše heslo',
'yourpasswordagain' => 'Zopakujte heslo:',
'remembermypassword' => 'Zapamatovat si mé přihlášení na tomto počítači (maximálně $1 {{PLURAL:$1|den|dny|dní}})',
'securelogin-stick-https' => 'Zůstat po přihlášení připojen přes HTTPS',
'yourdomainname' => 'Vaše doména',
'password-change-forbidden' => 'Na této wiki nemůžete měnit hesla.',
'externaldberror' => 'Buď nastala chyba externí autentizační databáze, nebo nemáte dovoleno měnit svůj externí účet.',
'login' => 'Přihlaste se',
'nav-login-createaccount' => 'Přihlášení / vytvoření účtu',
'loginprompt' => 'K přihlášení do {{grammar:2sg|{{SITENAME}}}} musíte mít povoleny cookies.',
'userlogin' => 'Přihlášení / vytvoření účtu',
'userloginnocreate' => 'Přihlášení',
'logout' => 'Odhlásit se',
'userlogout' => 'Odhlášení',
'notloggedin' => 'Nejste přihlášen(a)',
'nologin' => "Dosud nemáte účet? '''$1'''.",
'nologinlink' => 'Zaregistrujte se',
'createaccount' => 'Vytvořit nový účet',
'gotaccount' => "Už jste registrováni? '''$1'''.",
'gotaccountlink' => 'Přihlaste se',
'userlogin-resetlink' => 'Zapomněli jste přihlašovací údaje?',
'createaccountmail' => 'pomocí e-mailu',
'createaccountreason' => 'Důvod:',
'badretype' => 'Vámi napsaná hesla nesouhlasí.',
'userexists' => 'Zadané uživatelské jméno se již používá.
Zvolte si prosím jiné jméno.',
'loginerror' => 'Chyba při přihlašování',
'createaccounterror' => 'Nepodařilo se vytvořit uživatelský účet: $1',
'nocookiesnew' => 'Uživatelský účet byl vytvořen, ale nejste přihlášeni. {{SITENAME}} používá cookies k přihlášení uživatelů. Vy máte cookies vypnuty. Prosím zapněte je a přihlaste se znovu s vaším novým uživatelským jménem a heslem.',
'nocookieslogin' => '{{SITENAME}} používá cookies k přihlášení uživatelů. Vy máte cookies vypnuty. Prosím zapněte je a zkuste znovu.',
'nocookiesfornew' => 'Uživatelský účet nebyl založen, neboť jsme nebyli schopni potvrdit jeho původ.
Ujistěte se, že máte povoleny cookies, obnovte tuto stránku a zkuste to znovu.',
'noname' => 'Musíte uvést jméno svého účtu.',
'loginsuccesstitle' => 'Přihlášení uspělo',
'loginsuccess' => 'Nyní jste přihlášen na {{grammar:6sg|{{SITENAME}}}} jako uživatel „$1“.',
'nosuchuser' => 'Neexistuje uživatel se jménem „$1“. U uživatelských jmen se rozlišují malá/velká písmena. Zkontrolujte zápis, nebo si [[Special:UserLogin/signup|vytvořte nový účet]].',
'nosuchusershort' => 'Neexistuje uživatel se jménem „$1“. Zkontrolujte zápis.',
'nouserspecified' => 'Musíte zadat uživatelské jméno.',
'login-userblocked' => 'Tento uživatel je zablokován. Přihlášení není dovoleno.',
'wrongpassword' => 'Vámi uvedené heslo nesouhlasí. Zkuste to znovu.',
'wrongpasswordempty' => 'Bylo zadáno prázdné heslo. Zkuste to znovu.',
'passwordtooshort' => 'Heslo musí být dlouhé nejméně $1 {{PLURAL:$1|znak|znaky|znaků}}.',
'password-name-match' => 'Vaše heslo nesmí být stejné jako uživatelské jméno.',
'password-login-forbidden' => 'Použití tohoto uživatelského jména a hesla byla zakázáno.',
'mailmypassword' => 'Poslat e-mailem nové heslo',
'passwordremindertitle' => 'Nové dočasné heslo na {{grammar:4sg|{{SITENAME}}}}',
'passwordremindertext' => 'Někdo (patrně vy, z IP adresy $1) požádal, abychom o nové heslo
pro přihlášení do {{grammar:2sg|{{SITENAME}}}} ($4). Uživateli „$2“ bylo
proto nastaveno dočasné heslo „$3“. Pokud jste to byl(a) vy, můžete se
nyní přihlásit a zvolit si nové heslo. Platnost tohoto dočasného hesla
vyprší za {{PLURAL:$5|jeden den|$5 dny|$5 dní}}.

Pokud jste o změnu hesla nežádal(a) nebo jste si na původní heslo již
vzpomněl(a) a už ho změnit nechcete, můžete tuto zprávu ignorovat
a používat staré heslo.',
'noemail' => 'Uživatel „$1“ nemá zaregistrovanou e-mailovou adresu.',
'noemailcreate' => 'Musíte uvést platnou e-mailovou adresu',
'passwordsent' => 'Dočasné heslo bylo zasláno na e-mailovou adresu registrovanou pro „$1“. Přihlaste se, prosím, znovu, jakmile ho obdržíte.',
'blocked-mailpassword' => 'Vaší IP adrese byla zablokována možnost editace, a současně s tím je zablokována funkce pro zaslání nového hesla.',
'eauthentsent' => 'Potvrzovací e-mail byl zaslán na zadanou adresu.
Před tím, než vám na tuto adresu budou moci být zasílány další zprávy, následujte instrukce v e-mailu, abyste potvrdili, že tato adresa skutečně patří vám.',
'throttled-mailpassword' => 'Heslo již bylo jednou zasláno během uplynulých $1 hodin.
Heslo může být zasláno jen jednou za $1 {{PLURAL:$1|hodinu|hodiny|hodin}}.',
'mailerror' => 'Chyba při zasílání e-mailu: $1',
'acct_creation_throttle_hit' => 'Uživatelé přicházející z vaší IP adresy už dnes vytvořili $1 {{PLURAL:$1|účet|účty|účtů}}, což je dovolené maximum. Proto v tuto chvíli není dovoleno z této IP adresy další účty zakládat.',
'emailauthenticated' => 'Vaše e-mailová adresa byla ověřena dne $2 v $3.',
'emailnotauthenticated' => 'Vaše e-mailová adresa dosud nebyla ověřena a e-mailové funkce do té doby nejsou dostupné.',
'noemailprefs' => 'Pro zprovoznění následujících možností musíte zadat svou e-mailovou adresu.',
'emailconfirmlink' => 'Podvrďte svou e-mailovou adresu',
'invalidemailaddress' => 'Zadaná e-mailová adresa nemůže být přijata, neboť nemá správný formát. Zadejte platnou e-mailovou adresu nebo obsah tohoto pole vymažte.',
'cannotchangeemail' => 'U uživatelských účtů na této wiki nelze měnit e-mailové adresy.',
'emaildisabled' => 'Tento server nemůže odesílat e-maily.',
'accountcreated' => 'Účet vytvořen',
'accountcreatedtext' => 'Uživatelský účet $1 byl vytvořen.',
'createaccount-title' => 'Vytvoření účtu na {{grammar:6sg|{{SITENAME}}}}',
'createaccount-text' => 'Někdo vytvořil na {{grammar:6sg|{{SITENAME}}}} ($4) účet s vaší e-mailovou adresou.
Jméno účtu: „$2“
Heslo: „$3“
Měli byste se co nejdřív přihlásit a změnit si heslo.

Pokud byl účet vytvořen omylem, považujte tuto zprávu za bezpředmětnou.',
'usernamehasherror' => 'Uživatelské jméno nemůže obsahovat znak mřížka (#)',
'login-throttled' => 'Provedli jste příliš mnoho pokusů o přihlášení.
Počkejte chvíli, než to zkusíte znovu.',
'login-abort-generic' => 'Vaše přihlášení se nezdařilo – přerušeno',
'loginlanguagelabel' => 'Jazyk: $1',
'suspicious-userlogout' => 'Váš požadavek na odhlášení byl odmítnut, neboť to vypadá, že ho poslal rozbitý prohlížeč nebo cachující proxy.',

# E-mail sending
'php-mail-error-unknown' => 'Neznámá chyba v PHP funkci mail()',
'user-mail-no-addy' => 'Pokus o odeslání e-mailu bez e-mailové adresy',

# Change password dialog
'resetpass' => 'Změna hesla',
'resetpass_announce' => 'Přihlašujete se dočasným heslem zaslaným e-mailem. Přihlášení lze dokončit po nastavení nového trvalého hesla.',
'resetpass_text' => '<!-- Sem přidejte text -->',
'resetpass_header' => 'Změna hesla',
'oldpassword' => 'Staré heslo:',
'newpassword' => 'Nové heslo:',
'retypenew' => 'Napište znovu nové heslo',
'resetpass_submit' => 'Nastavit heslo a přihlásit se',
'resetpass_success' => 'Vaše heslo bylo úspěšně změněno. Probíhá přihlašování…',
'resetpass_forbidden' => 'Hesla nelze změnit.',
'resetpass-no-info' => 'K této stránce mají přímý přístup jen přihlášení uživatelé.',
'resetpass-submit-loggedin' => 'Změnit heslo',
'resetpass-submit-cancel' => 'Storno',
'resetpass-wrong-oldpass' => 'Nesprávné dočasné nebo aktuální heslo.
Možná jste si již úspěšně heslo změnili, nebo jste si vyžádali nové dočasné heslo.',
'resetpass-temp-password' => 'Dočasné heslo:',

# Special:PasswordReset
'passwordreset' => 'Reset hesla',
'passwordreset-text' => 'Pro obdržení e-mailu s připomenutím detailů vašeho účtu vyplňte tento formulář.',
'passwordreset-legend' => 'Znovu nastavit heslo',
'passwordreset-disabled' => 'Znovunastavení hesla je na této wiki zakázáno.',
'passwordreset-pretext' => '{{PLURAL:$1||Zadejte jeden z údajů níže}}',
'passwordreset-username' => 'Uživatelské jméno:',
'passwordreset-domain' => 'Doména:',
'passwordreset-capture' => 'Prohlédnout si výsledný e-mail?',
'passwordreset-capture-help' => 'Pokud zaškrtnete toto políčko, bude e-mail (s dočasným heslem) kromě zaslání uživateli zobrazen i vám.',
'passwordreset-email' => 'E-mailová adresa:',
'passwordreset-emailtitle' => 'Informace k účtu na {{grammar:6sg|{{SITENAME}}}}',
'passwordreset-emailtext-ip' => 'Někdo (patrně vy, z IP adresy $1) zažádal o připomenutí informací k vašemu
účtu na {{grammar:6sg|{{SITENAME}}}} ($4). K této adrese {{PLURAL:$3|je přiřazen následující účet|jsou přiřazeny následující účty}}:

$2

{{PLURAL:$3|Toto dočasné heslo|Tato dočasná hesla}} vyprší {{PLURAL:$5|za jeden den|za $5 dny|za $5 dnů}}.
Nyní byste se měl(a) přihlásit a zvolit si nové heslo. Pokud tento požadavek
poslal někdo jiný nebo jste si na své staré heslo vzpomněl(a), a nechcete ho
tedy změnit, můžete tuto zprávu ignorovat a nadále používat původní heslo.',
'passwordreset-emailtext-user' => '{{gender:$1|Uživatel|Uživatelka|Uživatel}} $1 {{grammar:2sg|{{SITENAME}}}} {{gender:$1|zažádal|zažádala|zažádal}} o připomenutí informací k vašemu
účtu na {{grammar:6sg|{{SITENAME}}}} ($4). K této adrese {{PLURAL:$3|je přiřazen následující účet|jsou přiřazeny následující účty}}:

$2

{{PLURAL:$3|Toto dočasné heslo|Tato dočasná hesla}} vyprší {{PLURAL:$5|za jeden den|za $5 dny|za $5 dnů}}.
Nyní byste se měl(a) přihlásit a zvolit si nové heslo. Pokud tento požadavek
poslal někdo jiný nebo jste si na své staré heslo vzpomněl(a), a nechcete ho
tedy změnit, můžete tuto zprávu ignorovat a nadále používat původní heslo.',
'passwordreset-emailelement' => 'Uživatelské jméno: $1
Dočasné heslo: $2',
'passwordreset-emailsent' => 'E-mail s heslem byl odeslán.',
'passwordreset-emailsent-capture' => 'Byl vygenerován připomínací e-mail, který je zobrazen níže.',
'passwordreset-emailerror-capture' => 'Byl vygenerován připomínací e-mail, který je zobrazen níže, ale nepodařilo se ho odeslat uživateli: $1',

# Special:ChangeEmail
'changeemail' => 'Změna e-mailové adresy',
'changeemail-header' => 'Změna e-mailové adresy k účtu',
'changeemail-text' => 'Vyplněním tohoto formuláře si změníte e-mailovou adresu. Pro potvrzení změny budete muset zadat své heslo.',
'changeemail-no-info' => 'K této stránce mají přímý přístup jen přihlášení uživatelé.',
'changeemail-oldemail' => 'Stávající e-mailová adresa:',
'changeemail-newemail' => 'Nová e-mailová adresa:',
'changeemail-none' => '(žádná)',
'changeemail-submit' => 'Změnit e-mail',
'changeemail-cancel' => 'Storno',

# Edit page toolbar
'bold_sample' => 'Tučný text',
'bold_tip' => 'Tučný text',
'italic_sample' => 'Kurzíva',
'italic_tip' => 'Kurzíva',
'link_sample' => 'Název odkazu',
'link_tip' => 'Vnitřní odkaz',
'extlink_sample' => 'http://www.example.com Titulek odkazu',
'extlink_tip' => 'Externí odkaz (nezapomeňte na předponu http://)',
'headline_sample' => 'Text nadpisu',
'headline_tip' => 'Nadpis druhé úrovně',
'nowiki_sample' => 'Sem vložte neformátovaný text',
'nowiki_tip' => 'Ignorovat formátování wiki',
'image_sample' => 'Příklad.jpg',
'image_tip' => 'Vložený soubor',
'media_sample' => 'Příklad.ogg',
'media_tip' => 'Odkaz na mediální soubor',
'sig_tip' => 'Váš podpis s datem a časem',
'hr_tip' => 'Vodorovná čára (používejte střídmě)',

# Edit pages
'summary' => 'Shrnutí editace:',
'subject' => 'Předmět/nadpis:',
'minoredit' => 'Tato změna je malá editace.',
'watchthis' => 'Sledovat tuto stránku',
'savearticle' => 'Uložit změny',
'preview' => 'Náhled',
'showpreview' => 'Ukázat náhled',
'showlivepreview' => 'Rychlý náhled',
'showdiff' => 'Ukázat změny',
'anoneditwarning' => "'''Varování:''' Nejste přihlášen(a). Vaše IP adresa bude zveřejněna v historii této stránky.",
'anonpreviewwarning' => "''Nejste přihlášen(a). Uložením zveřejníte svou IP adresu v historii této stránky.''",
'missingsummary' => "'''Připomenutí:''' Nezadali jste shrnutí editace. Pokud ještě jednou kliknete na Uložit změny, bude vaše editace zapsána bez shrnutí.",
'missingcommenttext' => 'Zadejte komentář',
'missingcommentheader' => "'''Připomenutí:''' Nezadali jste předmět/nadpis pro tento komentář.
Pokud ještě jednou kliknete na „{{int:savearticle}}“, bude vaše editace zapsána i bez toho.",
'summary-preview' => 'Náhled shrnutí:',
'subject-preview' => 'Náhled předmětu/nadpisu:',
'blockedtitle' => 'Uživatel zablokován',
'blockedtext' => "Vaší IP adrese či uživatelskému jménu byla zablokována možnost editace.'''

Zablokování provedl{{gender:$1||a}} $1.
Udaným důvodem bylo ''$2''.

* Začátek blokování: $8
* Zablokování vyprší: $6
* Blokovaný uživatel: $7

Pokud chcete zablokování prodiskutovat, můžete kontaktovat {{gender:$1|uživatele|uživatelku}} $1 či jiného [[{{MediaWiki:Grouppage-sysop}}|správce]].
Uvědomte si, že nemůžete použít nabídku „Poslat e-mail“, jestliže nemáte ve svém [[Special:Preferences|nastavení]] uvedenu platnou e-mailovou adresu nebo pokud vám byla tato možnost zakázána.
Vaše IP adresa je $3 a&nbsp;identifikační číslo bloku je #$5; tyto údaje uvádějte ve všech dotazech na správce.",
'autoblockedtext' => "Vaše IP adresa byla automaticky zablokována, protože ji používal jiný uživatel, kterého zablokoval $1.
Udaný důvod blokování:

:''$2''

* Začátek blokování: $8
* Konec blokování: $6
* Původně blokovaný uživatel: $7

Zablokování můžete prodiskutovat se správcem $1 nebo některým z dalších [[{{MediaWiki:Grouppage-sysop}}|správců]].

Uvědomte si však, že funkci „Poslat e-mail tomuto uživateli“ nemůžete použít, pokud nemáte ve svém [[Special:Preferences|nastavení]] zadaný platný e-mail a nebylo vám zablokováno jeho užívání.

Vaše současná IP adresa je $3, číslo vašeho zablokování je #$5.
Prosíme, uveďte tyto údaje při komunikaci se správci.",
'blockednoreason' => 'důvod nebyl zadán',
'whitelistedittext' => 'Pro editaci se musíte $1.',
'confirmedittext' => 'Pro editaci stránek je vyžadováno potvrzení vaší e-mailové adresy. Na stránce [[Special:Preferences|nastavení]] zadejte a nechte potvrdit svou e-mailovou adresu.',
'nosuchsectiontitle' => 'Sekce nenalezena',
'nosuchsectiontext' => 'Pokoušíte se editovat neexistující sekci.
Možná byla přesunuta či smazána, zatímco jste si stránku {{GENDER:|prohlížel|prohlížela|prohlíželi}}.',
'loginreqtitle' => 'Vyžadováno přihlášení',
'loginreqlink' => 'přihlásit',
'loginreqpagetext' => 'K prohlížení jiných stránek se musíte $1.',
'accmailtitle' => 'Heslo odesláno.',
'accmailtext' => 'Náhodně vygenerované heslo pro uživatele [[User talk:$1|$1]] bylo odesláno na $2.

Heslo tohoto nového účtu bude možné po přihlášení změnit na [[Special:ChangePassword|stránce pro změnu hesla]].',
'newarticle' => '(Nový)',
'newarticletext' => "Následovali jste odkaz na stránku, která dosud neexistuje.
Pokud ji chcete vytvořit, napište text do rámečku níže a stiskněte tlačítko ''Uložit změny''. Další rady najdete v [[{{MediaWiki:Helppage}}|nápovědě]].
Pokud jste zde omylem, stiskněte ve svém prohlížeči tlačítko ''Zpět''.",
'anontalkpagetext' => "----''Toto je diskusní stránka anonymního uživatele, který si dosud nevytvořil účet nebo ho nepoužívá. K&nbsp;jeho identifikaci proto musíme používat číselnou IP adresu. Takovou IP adresu může sdílet několik uživatelů. Pokud jste anonymní uživatel a&nbsp;máte za to, že jsou vám adresovány irelevantní komentáře, prosíme, [[Special:UserLogin/signup|vytvořte si účet]] nebo [[Special:UserLogin|se přihlaste]], vyhnete se tím budoucí záměně s&nbsp;jinými anonymními uživateli.''",
'noarticletext' => 'Tato stránka zatím neobsahuje žádný text.
Můžete [[Special:Search/{{PAGENAME}}|zkusit tento název vyhledat]] na jiných stránkách, <span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} prohlédnout si příslušné protokolovací záznamy] nebo [{{fullurl:{{FULLPAGENAME}}|action=edit}} tuto stránku založit]</span>.',
'noarticletext-nopermission' => 'Tato stránka zatím neobsahuje žádný text.
Můžete [[Special:Search/{{PAGENAME}}|zkusit tento název vyhledat]] na jiných stránkách nebo <span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} si prohlédnout příslušné protokolovací záznamy]</span>, ale na založení této stránky nemáte oprávnění.',
'missing-revision' => 'Revize #$1 stránky s názvem „{{PAGENAME}}“ neexistuje.

Toto je obvykle způsobeno tím, že jste následovali zastaralý odkaz historickou verzi stránky, jež byla smazána.
Podrobnosti mohou být uvedeny v [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} knize smazaných stránek].',
'userpage-userdoesnotexist' => 'Uživatelský účet „<nowiki>$1</nowiki>“ není zaregistrován. Zkontrolujte zda skutečně chcete vytvořit či editovat tuto stránku.',
'userpage-userdoesnotexist-view' => 'Uživatelský účet „$1“ není zaregistrován.',
'blocked-notice-logextract' => 'Tento uživatel je momentálně zablokován.
Zde je pro přehled zobrazen nejnovější záznam z knihy zablokování:',
'clearyourcache' => "'''Poznámka:''' Po uložení musíte smazat cache vašeho prohlížeče, jinak změny neuvidíte.
* '''Firefox / Safari:''' Při kliknutí na ''Aktualizovat'' držte ''Shift'' nebo stiskněte ''Ctrl-F5'' nebo ''Ctrl-R'' (na Macu ''⌘-R'').
* '''Google Chrome:''' Stiskněte ''Ctrl-Shift-R'' (na Macu ''⌘-Shift-R'').
* '''Internet Explorer:''' Při kliknutí na ''Aktualizovat'' držte ''Ctrl'' nebo stiskněte ''Ctrl-F5''.
* '''Opera:''' Smažte obsah cache v menu ''Nástroje → Nastavení''.",
'usercssyoucanpreview' => "'''Tip:''' Použijte tlačítko „{{int:showpreview}}“ k testování vašeho nového CSS před uložením.",
'userjsyoucanpreview' => "'''Tip:''' Použijte tlačítko „{{int:showpreview}}“ k testování vašeho nového JavaScriptu před uložením.",
'usercsspreview' => "'''Pamatujte, že si prohlížíte jen náhled vašeho uživatelského CSS.'''
'''Zatím nebylo uloženo!'''",
'userjspreview' => "'''Pamatujte, že testujete a prohlížíte pouze náhled vašeho uživatelského JavaScriptu, dosud nebyl uložen!'''",
'sitecsspreview' => "'''Pamatujte, že si prohlížíte jen náhled tohoto CSS.'''
'''Zatím nebylo uloženo!'''",
'sitejspreview' => "'''Pamatujte, že testujete a prohlížíte pouze náhled tohoto JavaScriptu.'''
'''Dosud nebyl uložen!'''",
'userinvalidcssjstitle' => "'''Varování:''' Vzhled „$1“ neexistuje. Nezapomeňte, že uživatelské .css a .js soubory používají malá písmena, např. {{ns:user}}:{{BASEPAGENAME}}/vector.css, nikoli {{ns:user}}:{{BASEPAGENAME}}/Vector.css.",
'updated' => '(Změna uložena)',
'note' => "'''Poznámka:'''&nbsp;",
'previewnote' => "'''Pamatujte, že toto je pouze náhled.'''
Změny zatím nebyly uloženy!",
'continue-editing' => 'Přejít k editačnímu poli',
'previewconflict' => 'Tento náhled ukazuje text tak, jak bude vypadat po uložení stránky.',
'session_fail_preview' => "'''Váš požadavek se nepodařilo zpracovat kvůli ztrátě dat z relace.
Zkuste to prosím znovu.
Pokud se tento problém bude opakovat, zkuste se [[Special:UserLogout|odhlásit]] a znovu přihlásit.'''",
'session_fail_preview_html' => "'''Váš požadavek se nepodařilo zpracovat kvůli ztrátě dat z relace.'''

''Jelikož má {{SITENAME}} zapnuto používání neomezeného HTML, náhled se kvůli prevenci proti útokům JavaScriptem nezobrazuje.''

'''Pokud jde o zamýšlenou editaci, zkuste to prosím znovu. Pokud se tento problém bude opakovat, zkuste se [[Special:UserLogout|odhlásit]] a znovu přihlásit.'''",
'token_suffix_mismatch' => "'''Vaše editace byla odmítnuta, protože Váš prohlížeč komolí některé znaky v editovaném textu.
Editace byla odmítnuta, aby se zabránilo poškození textu stránky.
Toto se může někdy stát pokud používáte chybující webový anonymizér.'''",
'edit_form_incomplete' => "'''Část editačního formuláře nedorazila na server; překontrolujte úplnost změn a zkuste to znovu.'''",
'editing' => 'Editace stránky $1',
'creating' => 'Vytváření $1',
'editingsection' => 'Editace stránky $1 (část)',
'editingcomment' => 'Editace stránky $1 (nová sekce)',
'editconflict' => 'Editační konflikt: $1',
'explainconflict' => "Někdo změnil stránku po započetí vaší editace.
Výše vidíte aktuální text stránky.
Vaše změny jsou uvedeny dole.
Musíte sloučit své změny se stávajícím textem.
'''Pouze''' výše uvedený text zůstane uchován po kliknutí na „{{int:savearticle}}“.",
'yourtext' => 'Váš text',
'storedversion' => 'Uložená verze',
'nonunicodebrowser' => "'''UPOZORNĚNÍ: Váš prohlížeč není schopen pracovat se znaky Unicode. Abyste mohli tuto stránku bezpečně editovat, je použita pomůcka: všechny znaky mimo ASCII jsou zobrazeny v hexadecimálních kódech.'''",
'editingold' => "'''VAROVÁNÍ: Nyní editujete zastaralou verzi této stránky. Když ji uložíte, všechny pozdější změny se ztratí.'''",
'yourdiff' => 'Rozdíly',
'copyrightwarning' => "Všechny příspěvky do {{grammar:2sg|{{SITENAME}}}} jsou zveřejňovány podle $2 (podrobnosti najdete na $1).
Pokud si nepřejete, aby váš text byl nemilosrdně upravován a volně šířen, pak ho do {{grammar:2sg|{{SITENAME}}}} neukládejte.<br />
Uložením příspěvku se zavazujete, že je vaším dílem nebo je zkopírován ze zdrojů, které nejsou chráněny autorským právem (tzv. <em>public domain</em>).
'''NEVKLÁDEJTE DÍLA CHRÁNĚNÁ AUTORSKÝM PRÁVEM BEZ DOVOLENÍ!'''",
'copyrightwarning2' => "Uvědomte si, že všechny příspěvky do {{grammar:2sg|{{SITENAME}}}} mohou být ostatními uživateli upraveny, pozměněny či odstraněny. Pokud si nepřejete, aby váš text byl nemilosrdně upravován, pak ho do {{grammar:2sg|{{SITENAME}}}} neukládejte.<br />
Uložením příspěvku se zavazujete, že je vaším dílem nebo je zkopírován ze zdrojů, které nejsou chráněny autorským právem (tzv. <em>public domain</em>), podrobnosti najdete na $1. '''Nekopírujte díla chráněná autorským právem bez dovolení!'''",
'longpageerror' => "'''Chyba: Pokoušíte se uložit text o velikosti {{PLURAL:$1|$1 KiB}}, přičemž dovolené maximum je {{PLURAL:$2|$2 KiB}}.'''
Vaše změna nemůže být uložena.",
'readonlywarning' => "'''VAROVÁNÍ: Databáze byla uzamčena kvůli údržbě, takže nebudete moci uložit své změny. Můžete si okopírovat text do souboru a uložit ho na později.'''

Správce serveru, který databázi zamkl, poskytl toto zdůvodnění: $1",
'protectedpagewarning' => "'''Varování: Tato stránka byla zamčena, takže ji mohou editovat pouze správci.'''
Níže je pro přehled zobrazen nejnovější protokolovací záznam:",
'semiprotectedpagewarning' => "'''Poznámka:''' Tato stránka byla zamčena, takže ji mohou editovat pouze registrovaní uživatelé.
Níže je pro přehled zobrazen nejnovější protokolovací záznam:",
'cascadeprotectedwarning' => "'''Varování:''' Tato stránka byla zamčena, takže ji mohou editovat pouze správci. Je vložena na následující, kaskádním zámkem  {{PLURAL:$1|zamčenou, stránku|zamčené, stránky|zamčené, stránky}}:",
'titleprotectedwarning' => "'''Varování: Tato stránka byla uzamčena, takže k jejímu založení jsou potřeba [[Special:ListGroupRights|zvláštní oprávnění]].'''
Níže je pro přehled zobrazen nejnovější protokolovací záznam:",
'templatesused' => '{{PLURAL:$1|Šablona použitá|Šablony použité}} na této stránce:',
'templatesusedpreview' => '{{PLURAL:$1|Šablona použitá|Šablony použité}} v tomto náhledu:',
'templatesusedsection' => '{{PLURAL:$1|Šablona použitá|Šablony použité}} v této části stránky:',
'template-protected' => '(zamčena)',
'template-semiprotected' => '(polozamčena)',
'hiddencategories' => 'Tato stránka je zařazena {{PLURAL:$1|v jedné skryté kategorii|ve $1 skrytých kategoriích|v $1 skrytých kategoriích}}:',
'edittools' => '<!-- Tento text bude zobrazen pod formuláři pro editaci stránek a načítání souborů. -->',
'nocreatetitle' => 'Vytváření nových stránek je omezeno',
'nocreatetext' => 'Na {{grammar:6sg|{{SITENAME}}}} je možnost vytváření nových stránek omezena.
Můžete se vrátit a editovat již existující stránku, nebo [[Special:UserLogin|se přihlásit či se registrovat]].',
'nocreate-loggedin' => 'Nemáte povoleno zakládat nové stránky.',
'sectioneditnotsupported-title' => 'Editace sekcí není podporována',
'sectioneditnotsupported-text' => 'Na této editační stránce není podporována editace jedné sekce.',
'permissionserrors' => 'Chyba povolení',
'permissionserrorstext' => 'Nemáte povoleno toto provést z {{PLURAL:$1|následujícího důvodu|následujících důvodů|následujících důvodů}}:',
'permissionserrorstext-withaction' => 'Z {{PLURAL:$1|následujícího důvodu|následujících důvodů}} nemáte oprávnění $2:',
'recreate-moveddeleted-warn' => "'''Upozornění: Pokoušíte se znovuzaložit stránku, která byla v minulosti smazána.'''

Zvažte, zda je vhodné v editaci této stránky pokračovat.
Níže vidíte soupis přesunů a smazání této stránky:",
'moveddeleted-notice' => 'Tato stránka byla smazána.
Podrobnosti si můžete prohlédnout v níže zobrazeném seznamu provedených přesunů a smazání této stránky.',
'log-fulllog' => 'Zobrazit všechny záznamy',
'edit-hook-aborted' => 'Editace byla bez bližšího vysvětlení zrušena přípojným bodem.',
'edit-gone-missing' => 'Stránku se nepodařilo aktualizovat.
Zřejmě byla smazána.',
'edit-conflict' => 'Editační konflikt.',
'edit-no-change' => 'Vaše editace byla ignorována, protože nedošlo k žádné změně textu.',
'edit-already-exists' => 'Nepodařilo se vytvořit novou stránku, protože již existuje.',
'defaultmessagetext' => 'Výchozí text hlášení',
'content-failed-to-parse' => 'Nepodařilo se zpracovat data $2 do modelu $1: $3',
'invalid-content-data' => 'Obsažená data jsou chybná',
'content-not-allowed-here' => 'Obsah typu $1 není na stránce [[$2]] dovolen.',

# Content models
'content-model-wikitext' => 'wikitext',
'content-model-text' => 'čistý text',
'content-model-javascript' => 'JavaScript',
'content-model-css' => 'CSS',

# Parser/template warnings
'expensive-parserfunction-warning' => 'Varování: Tato stránka obsahuje příliš mnoho volání výkonnostně náročných funkcí parseru.

Povolený limit je $2, v současné chvíli však {{PLURAL:$1|zde jedno volání je|zde jsou $2 volání|zde je $2 volání}}.',
'expensive-parserfunction-category' => 'Stránky s příliš mnoho voláními náročných funkcí parseru',
'post-expand-template-inclusion-warning' => 'Varování: Objem vkládaných šablon je příliš velký.
Některé šablony nebudou vloženy.',
'post-expand-template-inclusion-category' => 'Stránky překračující povolenou velikost vložených šablon',
'post-expand-template-argument-warning' => 'Varování: Tato stránka obsahuje alespoň jeden argument šablony, který je po rozbalení příliš velký.
Tyto argumenty byly vynechány.',
'post-expand-template-argument-category' => 'Stránky obsahující vynechané argumenty šablon',
'parser-template-loop-warning' => 'Nalezena smyčka šablon: [[$1]]',
'parser-template-recursion-depth-warning' => 'Překročen limit hloubky rekurzivního vkládání šablon ($1)',
'language-converter-depth-warning' => 'Překročen limit vnoření u jazykové konverze ($1)',
'node-count-exceeded-category' => 'Stránky překračující počet uzlů',
'node-count-exceeded-warning' => 'Stránka překročila počet uzlů',
'expansion-depth-exceeded-category' => 'Stránky překračující hloubku expanze',
'expansion-depth-exceeded-warning' => 'Stránka překročila hloubku expanze',
'parser-unstrip-loop-warning' => 'Detekováno zacyklení unstrip',
'parser-unstrip-recursion-limit' => 'Překročen limit rekurze unstrip ($1)',
'converter-manual-rule-error' => 'Detekována chyba v pravidlech manuální jazykové konverze',

# "Undo" feature
'undo-success' => 'Editace může být zrušena. Zkontrolujte a pak potvrďte změny zobrazené níže.',
'undo-failure' => 'Editace nemohla být zrušena kvůli konfliktu mezilehlých editací.',
'undo-norev' => 'Tuto editaci není možné vrátit, protože neexistuje nebo byla smazána.',
'undo-summary' => 'Zrušena verze $1 od uživatele [[Special:Contributions/$2|$2]] ([[User talk:$2|diskuse]])',

# Account creation failure
'cantcreateaccounttitle' => 'Nelze vytvořit uživatelský účet',
'cantcreateaccount-text' => "Zakládání nových účtů z této IP adresy ('''$1''') bylo zablokováno uživatelem [[User:$3|$3]].

$3 uvádí toto zdůvodnění: ''$2''",

# History pages
'viewpagelogs' => 'Zobrazit protokolovací záznamy k této stránce',
'nohistory' => 'O této stránce neexistuje historie editací.',
'currentrev' => 'Aktuální verze',
'currentrev-asof' => 'Aktuální verze z $1',
'revisionasof' => 'Verze z $1',
'revision-info' => 'Verze z $1; $2',
'previousrevision' => '← Starší verze',
'nextrevision' => 'Novější verze →',
'currentrevisionlink' => 'zobrazit aktuální verzi',
'cur' => 'teď',
'next' => 'násl',
'last' => 'předchozí',
'page_first' => 'první',
'page_last' => 'poslední',
'histlegend' => '(teď) = rozdíly oproti nynější verzi, (předchozí) = rozdíly oproti předchozí verzi, <b>m</b> = malá editace',
'history-fieldset-title' => 'Procházení historie',
'history-show-deleted' => 'Pouze smazané',
'histfirst' => 'Nejstarší',
'histlast' => 'Nejnovější',
'historysize' => '({{PLURAL:$1|1 bajt|$1 bajty|$1 bajtů}})',
'historyempty' => '(prázdné)',

# Revision feed
'history-feed-title' => 'Historie editací',
'history-feed-description' => 'Historie editací této stránky',
'history-feed-item-nocomment' => '$1 v $2',
'history-feed-empty' => 'Požadovaná stránka neexistuje.
Mohla být smazána či přejmenována.
Zkuste [[Special:Search|hledání]].',

# Revision deletion
'rev-deleted-comment' => '(shrnutí editace odstraněno)',
'rev-deleted-user' => '(uživatelské jméno odstraněno)',
'rev-deleted-event' => '(záznam odstraněn)',
'rev-deleted-user-contribs' => '[uživatelské jméno nebo IP adresa odstraněny – editace v příspěvcích skryta]',
'rev-deleted-text-permission' => "Tato revize byla '''smazána'''.
Podrobnosti mohou být uvedeny v [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} knize smazaných stránek].",
'rev-deleted-text-unhide' => "Tato revize byla '''smazána'''.
Podrobnosti mohou být uvedeny v [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} knize smazaných stránek].
Pokud chcete, můžete si přesto [$1 tuto revizi prohlédnout].",
'rev-suppressed-text-unhide' => "Tato revize byla '''utajena'''.
Podrobnosti mohou být uvedeny v [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} záznamu utajení].
Pokud chcete, můžete si přesto [$1 tuto revizi prohlédnout].",
'rev-deleted-text-view' => "Tato revize byla '''smazána'''.
Můžete si ji prohlédnout; podrobnosti jsou uvedeny v [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} knize smazaných stránek].",
'rev-suppressed-text-view' => "Tato revize byla '''utajena'''.
Můžete si ji prohlédnout; podrobnosti jsou uvedeny v [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} knize utajení].",
'rev-deleted-no-diff' => "Tento rozdíl si nemůžete prohlédnout, protože jedna z&nbsp;revizí byla '''smazána'''.
Podrobnosti mohou být uvedeny v&nbsp;[{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} knize smazaných stránek].",
'rev-suppressed-no-diff' => "Tento rozdíl si nemůžete prohlédnout, protože jedna z revizí byla '''smazána'''.",
'rev-deleted-unhide-diff' => "Jedna z revizí k tomuto porovnání byla '''smazána'''.
Podrobnosti mohou být uvedeny v [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} knize smazaných stránek].
Pokud chcete, můžete si přesto [$1 tuto revizi prohlédnout].",
'rev-suppressed-unhide-diff' => "Jedna z revizí k tomuto porovnání byla '''utajena'''.
Podrobnosti mohou být uvedeny v [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} záznamu utajení].
Pokud chcete, můžete si přesto [$1 tuto revizi prohlédnout].",
'rev-deleted-diff-view' => "Jedna z revizí k tomuto porovnání byla '''smazána'''.
Můžete si toto porovnání prohlédnout; podrobnosti jsou uvedeny v [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} knize smazaných stránek].",
'rev-suppressed-diff-view' => "Jedna z revizí k tomuto porovnání byla '''utajena'''.
Můžete si toto porovnání prohlédnout; podrobnosti jsou uvedeny v [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} knize utajení].",
'rev-delundel' => 'skrýt/zobrazit',
'rev-showdeleted' => 'zobrazit',
'revisiondelete' => 'Smazat/obnovit revize',
'revdelete-nooldid-title' => 'Nezadána revize',
'revdelete-nooldid-text' => 'Nezvolili jste revize, na které chcete tuto funkci použít.',
'revdelete-nologtype-title' => 'Nebyl určen typ protokolu',
'revdelete-nologtype-text' => '{{GENDER:|Neurčil|Neurčila|Neurčili}} jste knihu protokolovacích záznamů, na které se má operace provést.',
'revdelete-nologid-title' => 'Neplatný protokolovací záznam',
'revdelete-nologid-text' => 'Buď jste nezadali cílový záznam v protokolu nebo zadaný záznam neexistuje.',
'revdelete-no-file' => 'Uvedený soubor neexistuje.',
'revdelete-show-file-confirm' => 'Určitě si chcete prohlédnout smazanou revizi souboru „<nowiki>$1</nowiki>“ z $2, $3?',
'revdelete-show-file-submit' => 'Ano',
'revdelete-selected' => "'''{{PLURAL:$2|Vybraná|Vybrané}} revize stránky [[:$1]]:'''",
'logdelete-selected' => "'''{{PLURAL:$1|Vybraná protokolovaná událost|Vybrané protokolované události}}:'''",
'revdelete-text' => "'''Smazané verze a události budou nadále zobrazeny v historii stránky a protokolovacích záznamech, ale některé jejich části nebudou veřejně dostupné.'''
Ostatní správci {{GRAMMAR:2sg|{{SITENAME}}}} si budou moci skrytý obsah prohlížet a pomocí stejného rozhraní jej také obnovit,
pokud nebyla nastavena další omezení.",
'revdelete-confirm' => 'Prosím potvrďte, že to opravdu chcete učinit, že si uvědomujete důsledky a že je to v souladu s [[{{MediaWiki:Policy-url}}|pravidly]].',
'revdelete-suppress-text' => "Utajování by se mělo používat '''pouze''' v následujících případech:
* Potenciálně pomlouvačné informace
* Nevhodné osobní údaje
*: ''adresy bydliště a telefonní čísla, rodná čísla apod.''",
'revdelete-legend' => 'Nastavit omezení k revizi',
'revdelete-hide-text' => 'Skrýt text revize',
'revdelete-hide-image' => 'Skrýt obsah souboru',
'revdelete-hide-name' => 'Skrýt událost a cíl',
'revdelete-hide-comment' => 'Skrýt editační komentář',
'revdelete-hide-user' => 'Skrýt uživatelské jméno/IP adresu',
'revdelete-hide-restricted' => 'Utajit data i před správci',
'revdelete-radio-same' => '(neměnit)',
'revdelete-radio-set' => 'Ano',
'revdelete-radio-unset' => 'Ne',
'revdelete-suppress' => 'Utajit data i před správci',
'revdelete-unsuppress' => 'Odstranit omezení na vrácené verze',
'revdelete-log' => 'Důvod:',
'revdelete-submit' => 'Aplikovat na {{PLURAL:$1|zvolenou revizi|zvolené revize}}',
'revdelete-success' => "'''Viditelnost revize úspěšně nastavena.'''",
'revdelete-failure' => "'''Nepodařilo se nastavit viditelnost revize:'''
$1",
'logdelete-success' => "'''Viditelnost události úspěšně nastavena.'''",
'logdelete-failure' => "'''Nepodařilo se nastavit viditelnost protokolu:'''
$1",
'revdel-restore' => 'Změnit viditelnost',
'revdel-restore-deleted' => 'smazané revize',
'revdel-restore-visible' => 'viditelné revize',
'pagehist' => 'Historie stránky',
'deletedhist' => 'Smazaná historie',
'revdelete-hide-current' => 'Chyba při skrývání položky z $1 $2: jedná se o současnou revizi.
Tu nelze skrýt.',
'revdelete-show-no-access' => 'Chyba při zobrazování položky z $1 $2: je vyžadováno zvláštní oprávnění.
Nemáte k ní přístup.',
'revdelete-modify-no-access' => 'Chyba při změně položky z $1 $2: je vyžadováno zvláštní oprávnění.
Nemáte k ní přístup.',
'revdelete-modify-missing' => 'Chyba při změně položky s ID $1: položka nenalezena v databázi!',
'revdelete-no-change' => "'''Upozornění:''' položka z $1 $2 už měla viditelnost nastavenou tak, jak bylo požadováno.",
'revdelete-concurrent-change' => 'Chyba při změně položky z $1 $2: zdá se, že mezitím její stav změnil někdo jiný.
Prohlédněte si protokolovací záznamy.',
'revdelete-only-restricted' => 'Chyba skrývání položky z $2 $1: Nemůžete položky pouze skrýt před správci, aniž byste současně vybrali i některou z dalších možností utajení.',
'revdelete-reason-dropdown' => '*Obvyklé důvody smazání
** Porušení autorských práv
** Nevhodné komentáře nebo osobní údaje
** Nevhodné uživatelské jméno
** Potenciálně pomlouvačné údaje',
'revdelete-otherreason' => 'Jiný/další důvod:',
'revdelete-reasonotherlist' => 'Jiný důvod',
'revdelete-edit-reasonlist' => 'Editovat důvody smazání',
'revdelete-offender' => 'Autor revize:',

# Suppression log
'suppressionlog' => 'Záznam utajení',
'suppressionlogtext' => 'Toto je seznam mazání a blokování zahrnující skrytí obsahu i před správci.
Vizte též [[Special:BlockList|seznam všech probíhajících bloků]].',

# History merging
'mergehistory' => 'Slučování historií stránek',
'mergehistory-header' => 'Tato stránka Vám umožní sloučit historii verzí jedné zdrojové stránky s novější stránkou.
Ujistěte se, že tato změna udrží souvislost a posloupnost verzí v historii.',
'mergehistory-box' => 'Sloučení verzí dvou stránek:',
'mergehistory-from' => 'Zdrojová stránka:',
'mergehistory-into' => 'Cílová stránka:',
'mergehistory-list' => 'Historie slučitelných editací',
'mergehistory-merge' => 'Následující verze stránky [[:$1|$1]] lze sloučit do stránky [[:$2|$2]]. Přepínačem vyberete verzi, která určí, že pouze tato a starší editace budou sloučeny. Použitím navigačních odkazů se tento výběr zruší.',
'mergehistory-go' => 'Zobrazit slučitelné editace',
'mergehistory-submit' => 'Sloučit verze',
'mergehistory-empty' => 'Nelze sloučit žádnou verzi.',
'mergehistory-success' => '$3 {{PLURAL:$3|verze|verze|verzí}} stránky [[:$1]] {{PLURAL:$3|byla úspěšně sloučena|byly úspěšně sloučeny|bylo úspěšně sloučeno}} do stránky [[:$2]].',
'mergehistory-fail' => 'Sloučení historií nelze provést. Překontrolujte zadané stránky a jejich historii.',
'mergehistory-no-source' => 'Zdrojová stránka $1 neexistuje.',
'mergehistory-no-destination' => 'Cílová stránka $1 neexistuje.',
'mergehistory-invalid-source' => 'Zdrojová stránka musí mít platný název.',
'mergehistory-invalid-destination' => 'Cílová stránka musí mít platný název.',
'mergehistory-autocomment' => 'Sloučena stránka [[:$1]] do stránky [[:$2]]',
'mergehistory-comment' => 'Sloučena stránka [[:$1]] do stránky [[:$2]]: $3',
'mergehistory-same-destination' => 'Zdrojová a cílová stránka se nemůžou shodovat',
'mergehistory-reason' => 'Důvod:',

# Merge log
'mergelog' => 'Kniha slučování',
'pagemerge-logentry' => 'slučuje stránku [[$1]] se stránkou [[$2]] (verze do $3)',
'revertmerge' => 'Zrušit sloučení',
'mergelogpagetext' => 'Níže je seznam nejnovějších sloučení historie jedné stránky s jinou.',

# Diffs
'history-title' => '$1: Historie verzí',
'difference-title' => '$1: Porovnání verzí',
'difference-title-multipage' => '$1 a $2: Porovnání stránek',
'difference-multipage' => '(Rozdíly mezi stránkami)',
'lineno' => 'Řádka $1:',
'compareselectedversions' => 'Porovnat vybrané verze',
'showhideselectedversions' => 'Zobrazit/skrýt vybrané revize',
'editundo' => 'zrušit editaci',
'diff-multi' => '({{PLURAL:$1|Není zobrazena 1 mezilehlá verze|Nejsou zobrazeny $1 mezilehlé verze|Není zobrazeno $1 mezilehlých verzí}} od {{PLURAL:$2|1 uživatele|$2 uživatelů}}.)',
'diff-multi-manyusers' => '(Není zobrazeno $1 mezilehlých verzí od více než $2 {{PLURAL:$2|uživatele|uživatelů}}.)',
'difference-missing-revision' => '{{PLURAL:$2|Jedna z revizí|$2 revize|$2 revizí}} k požadovanému porovnání ($1) {{PLURAL:$2|neexistuje|neexistují|neexistuje}}.

Toto je obvykle způsobeno tím, že jste následovali zastaralý odkaz historickou verzi stránky, jež byla smazána.
Podrobnosti mohou být uvedeny v [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} knize smazaných stránek].',

# Search results
'searchresults' => 'Výsledky hledání',
'searchresults-title' => 'Výsledky hledání „$1“',
'searchresulttext' => 'Pro více informací o tom, jak hledat na {{grammar:6sg|{{SITENAME}}}}, se podívejte do [[{{MediaWiki:Helppage}}|nápovědy]].',
'searchsubtitle' => "Hledáno '''[[:$1]]''' ([[Special:Prefixindex/$1|seznam stránek začínajících „$1“]]{{int:pipe-separator}}[[Special:WhatLinksHere/$1|seznam stránek odkazujících na „$1“]])",
'searchsubtitleinvalid' => 'Hledáno „$1“',
'toomanymatches' => 'Požadavku odpovídá příliš mnoho záznamů, zkuste jiný dotaz.',
'titlematches' => 'Stránky s odpovídajícím názvem',
'notitlematches' => 'Žádné stránky názvem neodpovídají.',
'textmatches' => 'Stránky s odpovídajícím textem',
'notextmatches' => 'Žádné stránky textem neodpovídají.',
'prevn' => '$1 {{PLURAL:$1|předchozí|předchozí|předchozích}}',
'nextn' => '$1 {{PLURAL:$1|následující|následující|následujících}}',
'prevn-title' => '{{PLURAL:$1|Předchozí výsledek|Předchozí $1 výsledky|Předchozích $1 výsledků}}',
'nextn-title' => '{{PLURAL:$1|Následující výsledek|Následující $1 výsledky|Následujících $1 výsledků}}',
'shown-title' => 'Zobrazit $1 {{PLURAL:$1|výsledek|výsledky|výsledků}} na stránku',
'viewprevnext' => 'Ukázat ($1 {{int:pipe-separator}} $2) ($3).',
'searchmenu-legend' => 'Možnosti hledání',
'searchmenu-exists' => "'''Na této wiki existuje stránka nazvaná „[[:$1]]“.'''",
'searchmenu-new' => "'''Vytvořte na této wiki stránku „[[:$1]]“!'''",
'searchhelp-url' => 'Help:Obsah',
'searchmenu-prefix' => '[[Special:PrefixIndex/$1|Zobrazit stránky, jejichž název začíná „$1“]]',
'searchprofile-articles' => 'Články',
'searchprofile-project' => 'Nápověda a projektové stránky',
'searchprofile-images' => 'Multimédia',
'searchprofile-everything' => 'Všechno',
'searchprofile-advanced' => 'Rozšířené',
'searchprofile-articles-tooltip' => 'Prohledávat: $1',
'searchprofile-project-tooltip' => 'Prohledávat: $1',
'searchprofile-images-tooltip' => 'Hledat obrázky a další soubory',
'searchprofile-everything-tooltip' => 'Prohledávat veškerý obsah (včetně diskusních stránek)',
'searchprofile-advanced-tooltip' => 'Nastavit jmenné prostory, ve kterých se má hledat',
'search-result-size' => '$1 ({{PLURAL:$2|1 slovo|$2 slova|$2 slov}})',
'search-result-category-size' => '{{PLURAL:$1|1 položka|$1 položky|$1 položek}} ({{PLURAL:$2|1 podkategorie|$2 podkategorie|$2 podkategorií}}, {{PLURAL:$3|1 soubor|$3 soubory|$3 souborů}})',
'search-result-score' => 'Relevantnost: $1 %',
'search-redirect' => '(přesměrování $1)',
'search-section' => '(část $1)',
'search-suggest' => 'Mysleli jste: $1',
'search-interwiki-caption' => 'Sesterské projekty',
'search-interwiki-default' => 'Výsledky z $1:',
'search-interwiki-more' => '(více)',
'search-relatedarticle' => 'Související',
'mwsuggest-disable' => 'Vypnout ajaxové napovídání',
'searcheverything-enable' => 'Hledat ve všech jmenných prostorech',
'searchrelated' => 'související',
'searchall' => 'vše',
'showingresults' => 'Zobrazuji <strong>$1</strong> {{PLURAL:$1|výsledek|výsledky|výsledků}} počínaje od <strong>$2</strong>.',
'showingresultsnum' => 'Zobrazuji <strong>$3</strong> {{PLURAL:$3|výsledek|výsledky|výsledků}} počínaje od <strong>$2</strong>.',
'showingresultsheader' => "{{PLURAL:$5|Výsledek '''$1''' z '''$3'''|Výsledky '''$1–$2''' z '''$3'''}} pro '''$4'''",
'nonefound' => "'''Poznámka''': Standardně se hledá jen v některých jmenných prostorech.
Pokud na začátek dotazu přidáte ''all:'', bude se hledat všude (včetně diskusí, šablon atd.), případně místo toho napište název požadovaného jmenného prostoru.",
'search-nonefound' => 'Na váš dotaz nebyly nalezeny žádné výsledky.',
'powersearch' => 'Hledání',
'powersearch-legend' => 'Rozšířené vyhledávání',
'powersearch-ns' => 'Hledat ve jmenných prostorech:',
'powersearch-redir' => 'Vypsat přesměrování',
'powersearch-field' => 'Vyhledat',
'powersearch-togglelabel' => 'Zaškrtnout:',
'powersearch-toggleall' => 'Všechno',
'powersearch-togglenone' => 'Nic',
'search-external' => 'Externí hledání',
'searchdisabled' => '<p>Omlouváme se. Plnotextové vyhledávání je dočasně nedostupné. Zatím můžete zkusit vyhledávání Googlem; je ale možné, že jeho výsledky nemusí být aktuální.</p>',

# Quickbar
'qbsettings' => 'Nastavení lišty nástrojů',
'qbsettings-none' => 'Žádný',
'qbsettings-fixedleft' => 'Leží vlevo',
'qbsettings-fixedright' => 'Leží vpravo',
'qbsettings-floatingleft' => 'Plovoucí vlevo',
'qbsettings-floatingright' => 'Plovoucí vpravo',
'qbsettings-directionality' => 'Pevný v závislosti na směrovosti vašeho písma',

# Preferences page
'preferences' => 'Nastavení',
'mypreferences' => 'Nastavení',
'prefs-edits' => 'Počet editací:',
'prefsnologin' => 'Nejste přihlášen(a)!',
'prefsnologintext' => 'Pokud chcete měnit uživatelská nastavení, musíte se <span class="plainlinks">[{{fullurl:{{#Special:UserLogin}}|returnto=$1}} přihlásit]</span>.',
'changepassword' => 'Změna hesla',
'prefs-skin' => 'Vzhled',
'skin-preview' => 'Náhled',
'datedefault' => 'Implicitní',
'prefs-beta' => 'Funkce z betaverze',
'prefs-datetime' => 'Datum a čas',
'prefs-labs' => 'Funkce z Labs',
'prefs-user-pages' => 'Uživatelské stránky',
'prefs-personal' => 'Údaje o uživateli',
'prefs-rc' => 'Poslední změny',
'prefs-watchlist' => 'Sledované stránky',
'prefs-watchlist-days' => 'Počet dní zobrazených ve sledovaných stránkách:',
'prefs-watchlist-days-max' => 'Maximálně $1 {{PLURAL:$1|den|dny|dní}}',
'prefs-watchlist-edits' => 'Počet editací zobrazených ve zdokonalených sledovaných stránkách:',
'prefs-watchlist-edits-max' => 'Maximum: 1000',
'prefs-watchlist-token' => 'Klíč k seznamu sledovaných stránek:',
'prefs-misc' => 'Různé',
'prefs-resetpass' => 'Změnit heslo',
'prefs-changeemail' => 'Změnit e-mail',
'prefs-setemail' => 'Nastavit e-mailovou adresu',
'prefs-email' => 'Nastavení e-mailu',
'prefs-rendering' => 'Vzhled',
'saveprefs' => 'Uložit nastavení',
'resetprefs' => 'Vrátit původní nastavení',
'restoreprefs' => 'Obnovit všechna výchozí nastavení',
'prefs-editing' => 'Editace',
'prefs-edit-boxsize' => 'Velikost editačního okna:',
'rows' => 'Řádky',
'columns' => 'Sloupce',
'searchresultshead' => 'Vyhledávání',
'resultsperpage' => 'Počet výsledků na stránku:',
'stub-threshold' => 'Limit pro formátování odkazu jako <a href="#" class="stub">pahýl</a> (v bajtech):',
'stub-threshold-disabled' => 'Vypnuto',
'recentchangesdays' => 'Počet dní zobrazených v posledních změnách:',
'recentchangesdays-max' => 'Maximálně $1 {{PLURAL:$1|den|dny|dní}}',
'recentchangescount' => 'Počet implicitně zobrazovaných záznamů:',
'prefs-help-recentchangescount' => 'Týká se posledních změn, historie stránek a protokolovacích záznamů.',
'prefs-help-watchlist-token' => 'Pokud do tohoto pole vyplníte tajný klíč, bude vytvořen RSS kanál vašich sledovaných stránek.
Kdokoli, kdo bude tento klíč znát, pak bude moci váš seznam sledovaných stránek číst, takže dbejte na bezpečnost.
Můžete použít tuto náhodně vygenerovanou hodnotu: $1',
'savedprefs' => 'Vaše nastavení bylo uloženo.',
'timezonelegend' => 'Časové pásmo:',
'localtime' => 'Místní čas:',
'timezoneuseserverdefault' => 'Použít časové pásmo wiki ($1)',
'timezoneuseoffset' => 'Jiné (zadejte posun)',
'timezoneoffset' => 'Posun¹:',
'servertime' => 'Čas na serveru:',
'guesstimezone' => 'Načíst z prohlížeče',
'timezoneregion-africa' => 'Afrika',
'timezoneregion-america' => 'Amerika',
'timezoneregion-antarctica' => 'Antarktida',
'timezoneregion-arctic' => 'Arktida',
'timezoneregion-asia' => 'Asie',
'timezoneregion-atlantic' => 'Atlantský oceán',
'timezoneregion-australia' => 'Austrálie',
'timezoneregion-europe' => 'Evropa',
'timezoneregion-indian' => 'Indický oceán',
'timezoneregion-pacific' => 'Tichý oceán',
'allowemail' => 'Povolit e-mail od ostatních uživatelů',
'prefs-searchoptions' => 'Vyhledávání',
'prefs-namespaces' => 'Jmenné prostory',
'defaultns' => 'Nebo hledat v těchto jmenných prostorech:',
'default' => 'implicitní',
'prefs-files' => 'Soubory',
'prefs-custom-css' => 'Vlastní CSS',
'prefs-custom-js' => 'Vlastní JS',
'prefs-common-css-js' => 'Sdílené CSS/JS pro všechny styly:',
'prefs-reset-intro' => 'Pomocí této stránky můžete všechna nastavení vrátit na implicitní hodnoty.
Tuto operaci nelze vrátit zpět.',
'prefs-emailconfirm-label' => 'Ověření e-mailu:',
'prefs-textboxsize' => 'Velikost editačního okna',
'youremail' => 'Vaše e-mailová adresa:',
'username' => 'Uživatelské jméno:',
'uid' => 'Uživatelské ID:',
'prefs-memberingroups' => 'Člen {{PLURAL:$1|skupiny|skupin}}:',
'prefs-registration' => 'Čas registrace:',
'yourrealname' => 'Vaše skutečné jméno:',
'yourlanguage' => 'Jazyk rozhraní:',
'yourvariant' => 'Varianta jazyka obsahu:',
'prefs-help-variant' => 'Vámi preferovaná varianta nebo pravopis, jak se mají na této wiki zobrazovat obsahové stránky.',
'yournick' => 'Podpis:',
'prefs-help-signature' => 'Komentáře v diskusích by se měly podepisovat pomocí „<nowiki>~~~~</nowiki>“, což se změní na váš podpis a aktuální čas.',
'badsig' => 'Chybný podpis, zkontrolujte syntaxi HTML.',
'badsiglength' => 'Váš podpis je příliš dlouhý. Musí být kratší než $1 {{PLURAL:$1|znak|znaky|znaků}}.',
'yourgender' => 'Pohlaví:',
'gender-unknown' => 'Neurčeno',
'gender-male' => 'Mužské',
'gender-female' => 'Ženské',
'prefs-help-gender' => 'Volitelné: používáno softwarem pro správné oslovování v závislosti na pohlaví. Tato informace je veřejná.',
'email' => 'E-mail',
'prefs-help-realname' => 'Skutečné jméno (volitelné): pokud ho zadáte, bude použito pro označení autorství vaší práce.',
'prefs-help-email' => 'Uvedení e-mailu není povinné, ale umožní zaslání nového hesla v případě, že své heslo zapomenete.',
'prefs-help-email-others' => 'Také můžete dovolit ostatním uživatelům vás prostřednictvím uživatelské stránky kontaktovat, aniž by byla vaše adresa prozrazena.',
'prefs-help-email-required' => 'Je vyžadována e-mailová adresa.',
'prefs-info' => 'Základní údaje',
'prefs-i18n' => 'Lokalizace',
'prefs-signature' => 'Podpis',
'prefs-dateformat' => 'Formát data',
'prefs-timeoffset' => 'Časový posun',
'prefs-advancedediting' => 'Rozšířené možnosti',
'prefs-advancedrc' => 'Rozšířené možnosti',
'prefs-advancedrendering' => 'Rozšířené možnosti',
'prefs-advancedsearchoptions' => 'Rozšířené možnosti',
'prefs-advancedwatchlist' => 'Rozšířené možnosti',
'prefs-displayrc' => 'Možnosti zobrazení',
'prefs-displaysearchoptions' => 'Možnosti zobrazení',
'prefs-displaywatchlist' => 'Možnosti zobrazení',
'prefs-diffs' => 'Porovnání verzí',

# User preference: e-mail validation using jQuery
'email-address-validity-valid' => 'E-mailová adresa vypadá platně',
'email-address-validity-invalid' => 'Zadejte platnou e-mailovou adresu',

# User rights
'userrights' => 'Správa uživatelských skupin',
'userrights-lookup-user' => 'Spravovat uživatelské skupiny',
'userrights-user-editname' => 'Zadejte uživatelské jméno:',
'editusergroup' => 'Upravit uživatelské skupiny',
'editinguser' => "Úprava práv uživatele '''[[User:$1|$1]]''' $2",
'userrights-editusergroup' => 'Upravit uživatelské skupiny',
'saveusergroups' => 'Uložit uživatelské skupiny',
'userrights-groupsmember' => 'Člen skupin:',
'userrights-groupsmember-auto' => 'Automaticky člen skupin:',
'userrights-groups-help' => 'Můžete měnit skupiny, do nichž je uživatel zařazen.
* Zaškrtnuté políčko znamená, že uživatel je v dané skupině.
* Nezaškrtnuté políčko značí, že uživatel v dané skupině není.
* Hvězdička (*) znamená, že nemůžete danou skupinu odstranit, jakmile ji přidáte, nebo naopak.',
'userrights-reason' => 'Důvod:',
'userrights-no-interwiki' => 'Nemáte povoleno měnit uživatelská práva na jiných wiki.',
'userrights-nodatabase' => 'Databáze $1 neexistuje nebo není místní.',
'userrights-nologin' => 'Musíte se [[Special:UserLogin|přihlásit]] k účtu správce, abyste mohli měnit uživatelská práva.',
'userrights-notallowed' => 'Váš účet nemá oprávnění měnit uživatelská práva.',
'userrights-changeable-col' => 'Skupiny, které můžete měnit',
'userrights-unchangeable-col' => 'Skupiny, které nemůžete měnit',

# Groups
'group' => 'Skupina:',
'group-user' => 'Uživatelé',
'group-autoconfirmed' => 'Automaticky schválení uživatelé',
'group-bot' => 'Boti',
'group-sysop' => 'Správci',
'group-bureaucrat' => 'Byrokraté',
'group-suppress' => 'Dohlížitelé',
'group-all' => '(všichni)',

'group-user-member' => '{{GENDER:$1|uživatel|uživatelka|uživatel}}',
'group-autoconfirmed-member' => 'automaticky {{GENDER:$1|schválený uživatel|schválená uživatelka|schválený uživatel}}',
'group-bot-member' => '{{GENDER:$1|bot|botka|bot}}',
'group-sysop-member' => '{{GENDER:$1|správce|správkyně|správce}}',
'group-bureaucrat-member' => '{{GENDER:$1|byrokrat|byrokratka|byrokrat}}',
'group-suppress-member' => '{{GENDER:$1|dohlížitel|dohlížitelka|dohlížitel}}',

'grouppage-user' => '{{ns:project}}:Uživatelé',
'grouppage-autoconfirmed' => '{{ns:project}}:Automaticky schválení uživatelé',
'grouppage-bot' => '{{ns:project}}:Boti',
'grouppage-sysop' => '{{ns:project}}:Správci',
'grouppage-bureaucrat' => '{{ns:project}}:Byrokraté',
'grouppage-suppress' => '{{ns:project}}:Dohlížitelé',

# Rights
'right-read' => 'Čtení stránek',
'right-edit' => 'Editace stránek',
'right-createpage' => 'Zakládání stránek (které nejsou diskusní)',
'right-createtalk' => 'Zakládání diskusních stránek',
'right-createaccount' => 'Vytváření nových uživatelských účtů',
'right-minoredit' => 'Označování editací jako malé',
'right-move' => 'Přesouvání stránek',
'right-move-subpages' => 'Přesouvání stránek i s jejich podstránkami',
'right-move-rootuserpages' => 'Přesouvání kořenových uživatelských stránek',
'right-movefile' => 'Přesouvání souborů',
'right-suppressredirect' => 'Nevytváření přesměrování po přesunu stránky',
'right-upload' => 'Nahrávání souborů',
'right-reupload' => 'Přepisování existujících souborů',
'right-reupload-own' => 'Přepisování souborů nahraných sám sebou',
'right-reupload-shared' => 'Nahrávání lokálních souborů k potlačení těch ve sdíleném úložišti',
'right-upload_by_url' => 'Nahrávání souborů z URL adres',
'right-purge' => 'Vyčištění vyrovnávací paměti stránky bez potvrzovacího dialogu',
'right-autoconfirmed' => 'Editace polozamčených stránek',
'right-bot' => 'Být považován za automatický proces',
'right-nominornewtalk' => 'Nevypisování oznámení o nové zprávě po malých úpravách diskusní stránky',
'right-apihighlimits' => 'Používání vyšších limitů v API dotazech',
'right-writeapi' => 'Používání zapisovacího API',
'right-delete' => 'Mazání stránek',
'right-bigdelete' => 'Mazání stránek s dlouhou historií',
'right-deletelogentry' => 'Mazání a obnovování jednotlivých protokolovacích záznamů',
'right-deleterevision' => 'Mazání a obnovování konkrétních revizí stránky',
'right-deletedhistory' => 'Zobrazování smazaných položek v historii bez odpovídajícího textu',
'right-deletedtext' => 'Prohlížení smazaného textu a rozdílů mezi smazanými verzemi',
'right-browsearchive' => 'Vyhledávání ve smazaných stránkách',
'right-undelete' => 'Obnovování smazaných stránek',
'right-suppressrevision' => 'Prohlížení a obnovování revizí skrytých před správci',
'right-suppressionlog' => 'Prohlížení skrytých protokolovacích záznamů',
'right-block' => 'Blokování možnosti editace ostatním uživatelům',
'right-blockemail' => 'Blokování možnosti poslat e-mail',
'right-hideuser' => 'Blokování uživatelského jména a jeho skrytí',
'right-ipblock-exempt' => 'Obcházení blokování IP adres, jejich rozsahů a autobloků',
'right-proxyunbannable' => 'Obcházení automatického blokování proxy serverů',
'right-unblockself' => 'Odblokování sebe sama',
'right-protect' => 'Měnění úrovně zámku a editace zamčených stránek',
'right-editprotected' => 'Editace zamčených stránek (bez kaskádového zámku)',
'right-editinterface' => 'Editace zpráv uživatelského rozhraní',
'right-editusercssjs' => 'Editace CSS a JS souborů jiných uživatelů',
'right-editusercss' => 'Editace CSS souborů jiných uživatelů',
'right-edituserjs' => 'Editace JS souborů jiných uživatelů',
'right-rollback' => 'Rychlý revert úprav posledního uživatele editujícího danou stránku',
'right-markbotedits' => 'Označování revertů jako editace bota',
'right-noratelimit' => 'Imunita vůči rychlostním limitům',
'right-import' => 'Import stránek z jiných wiki',
'right-importupload' => 'Import stránek nahráním souboru',
'right-patrol' => 'Označování úprav jako prověřené',
'right-autopatrol' => 'Automatické označování editací jako prověřených',
'right-patrolmarks' => 'Zobrazování patrolovacích značek v Posledních změnách',
'right-unwatchedpages' => 'Zobrazování seznamu nesledovaných stránek',
'right-mergehistory' => 'Slučování historií stránek',
'right-userrights' => 'Nastavování práv ostatním uživatelům',
'right-userrights-interwiki' => 'Nastavování práv ostatním uživatelům na jiných wiki',
'right-siteadmin' => 'Zamykání a odemykání databáze',
'right-override-export-depth' => 'Exportovat stránky včetně odkazovaných stránek až do hloubky 5',
'right-sendemail' => 'Odesílání e-mailů ostatním uživatelům',
'right-passwordreset' => 'Prohlížení e-mailů pro znovunastavení hesla',

# User rights log
'rightslog' => 'Kniha práv uživatelů',
'rightslogtext' => 'Toto je záznam změn uživatelských práv.',
'rightslogentry' => 'změnil pro $1 zařazení ve skupinách z $2 na $3',
'rightslogentry-autopromote' => 'byl automaticky povýšen z $2 na $3',
'logentry-rights-rights' => '$1 {{GENDER:$2|změnil|změnila}} členství $3 ve skupinách z $4 na $5',
'logentry-rights-rights-legacy' => '$1 {{GENDER:$2|změnil|změnila}} členství $3 ve skupinách',
'logentry-rights-autopromote' => '$1 {{GENDER:$2|byl automaticky povýšen|byla automaticky povýšena}} z $4 na $5',
'rightsnone' => '(žádné)',

# Associated actions - in the sentence "You do not have permission to X"
'action-read' => 'přečíst tuto stránku',
'action-edit' => 'upravit tuto stránku',
'action-createpage' => 'vytvářet stránky',
'action-createtalk' => 'vytvářet diskusní stránky',
'action-createaccount' => 'vytvořit tento uživatelský účet',
'action-minoredit' => 'označit tuto editaci jako malou',
'action-move' => 'přesunout tuto stránku',
'action-move-subpages' => 'přesunout tuto stránku a její podstránky',
'action-move-rootuserpages' => 'přesouvat kořenové uživatelské stránky',
'action-movefile' => 'přesunout tento soubor',
'action-upload' => 'nahrát tento soubor',
'action-reupload' => 'přepsat tento existující soubor',
'action-reupload-shared' => 'upřednostnit tento soubor před souborem ze sdíleného úložiště',
'action-upload_by_url' => 'nahrát tento soubor z URL adresy',
'action-writeapi' => 'používat API pro zápis',
'action-delete' => 'smazat tuto stránku',
'action-deleterevision' => 'smazat tuto revizi',
'action-deletedhistory' => 'zobrazit historii smazaných revizí této stránky',
'action-browsearchive' => 'hledat smazané stránky',
'action-undelete' => 'obnovit tuto stránku',
'action-suppressrevision' => 'zkontrolovat a obnovit tuto skrytou revizi',
'action-suppressionlog' => 'prohlížet si tento skrytý protokolovací záznam',
'action-block' => 'znemožnit tomuto uživateli editování',
'action-protect' => 'změnit úrovně ochrany této stránky',
'action-rollback' => 'rychle revertovat úpravy posledního uživatele editujícího danou stránku',
'action-import' => 'importovat tuto stránku z jiné wiki',
'action-importupload' => 'importovat tuto stránku z nahraného souboru',
'action-patrol' => 'označit úpravy ostatních jako zhlédnuté',
'action-autopatrol' => 'označit vlastní úpravy jako zhlédnuté',
'action-unwatchedpages' => 'zobrazit seznam nesledovaných stránek',
'action-mergehistory' => 'sloučit historii této stránky',
'action-userrights' => 'upravovat práva všech uživatelů',
'action-userrights-interwiki' => 'upravovat práva uživatelů na jiných wiki',
'action-siteadmin' => 'zamykat nebo odemykat databázi',
'action-sendemail' => 'posílat e-maily',

# Recent changes
'nchanges' => '$1 {{PLURAL:$1|změna|změny|změn}}',
'recentchanges' => 'Poslední změny',
'recentchanges-legend' => 'Možnosti posledních změn',
'recentchanges-summary' => 'Sledujte poslední změny na {{grammar:6sg|{{SITENAME}}}} na této stránce.',
'recentchanges-feed-description' => 'Na tomto kanále sledujte poslední změny na {{grammar:6sg|{{SITENAME}}}}.',
'recentchanges-label-newpage' => 'Touto editací byla založena nová stránka',
'recentchanges-label-minor' => 'Toto je malá editace',
'recentchanges-label-bot' => 'Tuto editaci provedl bot',
'recentchanges-label-unpatrolled' => 'Tato změna dosud nebyla prověřena',
'rcnote' => 'Níže {{plural:$1|je poslední|jsou poslední|je posledních}} <strong>$1</strong> {{plural:$1|změna|změny|změn}} za {{PLURAL:$2|poslední|poslední|posledních}} <strong>$2</strong> {{plural:$2|den|dny|dnů}} před $4, $5.',
'rcnotefrom' => 'Níže {{PLURAL:$1|je|jsou|je}} nejvýše <b>$1</b> {{PLURAL:$1|změna|změny|změn}} od <b>$2</b>.',
'rclistfrom' => 'Ukázat nové změny, počínaje od $1',
'rcshowhideminor' => '$1 malé editace',
'rcshowhidebots' => '$1 roboty',
'rcshowhideliu' => '$1 registrované uživatele',
'rcshowhideanons' => '$1 anonymní uživatele',
'rcshowhidepatr' => '$1 prověřené editace',
'rcshowhidemine' => '$1 moje editace',
'rclinks' => 'Ukázat $1 posledních změn během posledních $2 dnů<br />
$3',
'diff' => 'rozdíl',
'hist' => 'historie',
'hide' => 'skrýt',
'show' => 'ukázat',
'minoreditletter' => 'm',
'newpageletter' => 'N',
'boteditletter' => 'b',
'number_of_watching_users_pageview' => '[$1 {{PLURAL:$1|sledující uživatel|sledující uživatelé|sledujících uživatelů}}]',
'rc_categories' => 'Omezit na kategorie (oddělené „|“)',
'rc_categories_any' => 'Všechny',
'rc-change-size-new' => '$1 {{PLURAL:$1|bajt|bajty|bajtů}} po změně',
'newsectionsummary' => 'Nová sekce /* $1 */',
'rc-enhanced-expand' => 'Zobrazit detaily (vyžaduje JavaScript)',
'rc-enhanced-hide' => 'Skrýt detaily',
'rc-old-title' => 'původně vytvořena jako „$1“',

# Recent changes linked
'recentchangeslinked' => 'Související změny',
'recentchangeslinked-feed' => 'Související změny',
'recentchangeslinked-toolbox' => 'Související změny',
'recentchangeslinked-title' => 'Související změny pro stránku „$1“',
'recentchangeslinked-noresult' => 'V zadaném období nebyly na odkazovaných stránkách provedeny žádné změny.',
'recentchangeslinked-summary' => "Níže je seznam nedávných změn stránek odkazovaných ze zadané stránky (nebo patřících do dané kategorie). Vaše [[Special:Watchlist|sledované stránky]] jsou '''zvýrazněny'''.",
'recentchangeslinked-page' => 'Název stránky:',
'recentchangeslinked-to' => 'Zobrazit změny na stránkách odkazujících na zadanou stránku',

# Upload
'upload' => 'Načíst soubor',
'uploadbtn' => 'Načíst soubor',
'reuploaddesc' => 'Vrátit se k načtení.',
'upload-tryagain' => 'Uložit upravený popis souboru',
'uploadnologin' => 'Nejste přihlášen(a)',
'uploadnologintext' => 'Pro načtení souboru se musíte [[Special:UserLogin|přihlásit]].',
'upload_directory_missing' => 'Adresář pro nahrávání souborů ($1) chybí a webový server ho nedokáže vytvořit.',
'upload_directory_read_only' => 'Do adresáře pro načítané soubory ($1) nemá webserver právo zápisu.',
'uploaderror' => 'Při načítání došlo k chybě',
'upload-recreate-warning' => "'''Upozornění: Soubor pod tímto názvem byl dříve smazán či přejmenován.'''

Zde je pro přehled zobrazen soupis mazání a přesunů této stránky:",
'uploadtext' => "Níže uvedený formulář slouží k načtení souborů. Již načtené soubory si můžete prohlížet a hledat pomocí [[Special:FileList|seznamu načtených souborů]], každé načtení se také zaznamenává do [[Special:Log/upload|knihy načtení]], smazání jsou v [[Special:Log/delete|knize smazaných stránek]].

Pro vložení obrázku do stránky použijte jeden z následujících způsobů zápisu:
* '''<code><nowiki>[[</nowiki>{{ns:file}}<nowiki>:Soubor.jpg]]</nowiki></code>''' do stránky vloží celý obrázek,
* '''<code><nowiki>[[</nowiki>{{ns:file}}<nowiki>:Soubor.png|thumb|left|Popisek]]</nowiki></code>''' vloží náhled v rámečku zarovnaném na levý okraj, s popiskem „Popisek“,
* '''<code><nowiki>[[</nowiki>{{ns:media}}<nowiki>:Soubor.ogg]]</nowiki></code>''' vloží přímý odkaz na soubor, aniž by se zobrazoval ve stránce.",
'upload-permitted' => 'Povolené formáty souborů: $1.',
'upload-preferred' => 'Upřednostňované formáty souborů: $1.',
'upload-prohibited' => 'Zakázané formáty souborů: $1.',
'uploadlog' => 'kniha nahrávek',
'uploadlogpage' => 'Kniha nahrávek',
'uploadlogpagetext' => 'Níže najdete seznam nejnovějších souborů.',
'filename' => 'Soubor',
'filedesc' => 'Popis',
'fileuploadsummary' => 'Popis:',
'filereuploadsummary' => 'Změny v souboru:',
'filestatus' => 'Autorská práva:',
'filesource' => 'Zdroj:',
'uploadedfiles' => 'Načtené soubory',
'ignorewarning' => 'Ignorovat varování a načíst soubor.',
'ignorewarnings' => 'Ignorovat všechna varování',
'minlength1' => 'Jméno souboru musí mít alespoň jeden znak.',
'illegalfilename' => 'Název souboru "$1" obsahuje znaky, které nejsou povoleny v názvech stránek. Prosím přejmenujte soubor a zkuste jej nahrát znovu.',
'filename-toolong' => 'Jména souborů nemohou být delší než 240 bajtů.',
'badfilename' => 'Jméno souboru bylo změněno na „$1“.',
'filetype-mime-mismatch' => 'Přípona souboru „.$1“ neodpovídá rozpoznanému MIME typu souboru ($2).',
'filetype-badmime' => 'Není povoleno načítat soubory MIME typu „$1“.',
'filetype-bad-ie-mime' => 'Nelze načíst tento soubor, neboť Internet Explorer by ho považoval za „$1“, což je nedovolený a potenciálně nebezpečný typ souboru.',
'filetype-unwanted-type' => "„.$1“''' je nežádoucí formát souborů. {{plural:$3|Upřednostňovaný formát souborů je|Upřednostňované formáty souborů jsou}} $2.",
'filetype-banned-type' => "'''„.$1“''' {{PLURAL:$4|je nedovolený formát souborů|jsou nedovolené formáty souborů}}.
{{PLURAL:$3|Povolený formát souborů je|Povolené formáty souborů jsou}} $2.",
'filetype-missing' => 'Soubor nemá příponu (např. ".jpg").',
'empty-file' => 'Načtený soubor je prázdný.',
'file-too-large' => 'Načtený soubor je příliš velký.',
'filename-tooshort' => 'Název souboru je příliš krátký.',
'filetype-banned' => 'Tento typ souboru je zakázán.',
'verification-error' => 'Soubor nevyhověl při ověřování.',
'hookaborted' => 'Požadovaná úprava byla zamítnuta některým rozšířením.',
'illegal-filename' => 'Tento název souboru není dovolen.',
'overwrite' => 'Není dovoleno přepsat existující soubor.',
'unknown-error' => 'Došlo k neznámé chybě.',
'tmp-create-error' => 'Nepodařilo se vytvořit dočasný soubor.',
'tmp-write-error' => 'Chyba při zápisu do dočasného souboru.',
'large-file' => 'Doporučuje se, aby délka souboru nepřesahovala $1, tento soubor má $2.',
'largefileserver' => 'Velikost tohoto souboru překračuje limit nastavený na serveru.',
'emptyfile' => 'Soubor, který jste vložili, se zdá být prázdný. Mohl to způsobit překlep v názvu souboru. Prosím zkontrolujte, zda jste opravdu chtěli vložit tento soubor.',
'windows-nonascii-filename' => 'Tato wiki nepodporuje názvy souborů obsahující zvláštní znaky.',
'fileexists' => 'Soubor s tímto jménem již existuje, prosím podívejte se na <strong>[[:$1]]</strong>, pokud nevíte jistě, zda chcete tento soubor nahradit.
[[$1|thumb]]',
'filepageexists' => 'Popisná stránka pro soubor s tímto jménem již byla na <strong>[[:$1]]</strong> založena, avšak odpovídající soubor dosud neexistuje.
Shrnutí, které zde uvedete, se na popisné stránce nezobrazí.
Pokud tam chcete své shrnutí zobrazit, budete muset příslušnou stránku editovat ručně. [[$1|thumb]]',
'fileexists-extension' => 'Již existuje soubor s podobným jménem: [[$2|thumb]]
* Jméno načítaného souboru: <strong>[[:$1]]</strong>
* Jméno existujícího souboru: <strong>[[:$2]]</strong>
Vyberte jiné jméno.',
'fileexists-thumbnail-yes' => "Tento soubor je zřejmě obrázek ve zmenšené velikosti ''(náhled)''. [[$1|thumb]]
Zkontrolujte soubor <strong>[[:$1]]</strong>.
Pokud je zmiňovaný soubor větší, ale jinak stejný, není potřeba zvlášť načítat jeho zmenšenou verzi.",
'file-thumbnail-no' => "Jméno souboru začíná na <strong>$1</strong>.
Možná to je obrázek ve zmenšené velikosti ''(náhled)''.
Načtěte soubor v plném rozlišením, pokud je k dispozici, nebo změňte jméno souboru.",
'fileexists-forbidden' => 'Soubor s tímto názvem již existuje a není dovoleno ho přepsat.
Pokud chcete přesto soubor načíst, vraťte se a zvolte jiný název.
[[File:$1|thumb|center|$1]]',
'fileexists-shared-forbidden' => 'Soubor s tímto názvem již existuje ve sdíleném úložišti. Pokud přesto chcete váš soubor načíst, vraťte se a zvolte jiný název. [[File:$1|thumb|center|$1]]',
'file-exists-duplicate' => 'Tento soubor je duplikát {{PLURAL:$1|následujícího souboru|následujících souborů}}:',
'file-deleted-duplicate' => 'Identický soubor k tomuto ([[:$1]]) byl již dříve smazán. Před tím, než soubor znovu nahrajete, byste měli zkontrolovat záznamy o předchozím smazání.',
'uploadwarning' => 'Upozornění k načítání',
'uploadwarning-text' => 'Prosíme, upravte popis souboru níže a zkuste to znovu.',
'savefile' => 'Uložit soubor',
'uploadedimage' => 'načítá „[[$1]]“',
'overwroteimage' => 'načtena nová verze "[[$1]]"',
'uploaddisabled' => 'Načítání souborů vypnuto.',
'copyuploaddisabled' => 'Načítání souborů prostřednictvím URL je vypnuto.',
'uploadfromurl-queued' => 'Váš požadavek na načtení souboru byl uložen do fronty.',
'uploaddisabledtext' => 'Načítání souborů je vypnuto.',
'php-uploaddisabledtext' => 'V PHP je vypnuto načítání souborů. Prosím, zkontrolujte nastavení file_uploads.',
'uploadscripted' => 'Tento soubor obsahuje HTML nebo kód skriptu, který by mohl být prohlížečem chybně interpretován.',
'uploadvirus' => 'Tento soubor obsahuje virus! Podrobnosti: $1',
'uploadjava' => 'Tento soubor je ZIP, který obsahuje javový soubor .class.
Načítání javových souborů není dovoleno, neboť by mohly umožnit obcházení bezpečnostních omezení.',
'upload-source' => 'Zdrojový soubor',
'sourcefilename' => 'Jméno zdrojového souboru:',
'sourceurl' => 'Zdrojové URL:',
'destfilename' => 'Cílové jméno:',
'upload-maxfilesize' => 'Maximální dovolená velikost souboru: $1',
'upload-description' => 'Popis souboru',
'upload-options' => 'Možnosti načtení',
'watchthisupload' => 'Sledovat tento soubor',
'filewasdeleted' => 'Soubor stejného jména byl již dříve načten a posléze smazán. Podrobnosti obsahuje $1.',
'filename-bad-prefix' => "Jméno souboru, který načítáte, začíná na '''„$1“''', což je nevhodné jméno, obvykle automaticky přiřazované digitálním fotoaparátem. Zvolte jméno, která váš soubor lépe popíše.",
'filename-prefix-blacklist' => ' #<!-- tuto řádku ponechte beze změny --> <pre>
# Používá se následující syntaxe:
#   * Cokoli od znaku „#“ až do konce řádky je komentář
#   * Každá neprázdná řádka je prefix typických jmen souborů automaticky generovaných digitálními fotoaparáty
CIMG # Casio
DSC_ # Nikon
DSCF # Fuji
DSCN # Nikon
DUW # některé mobilní telefony
IMG # obecné
JD # Jenoptik
MGP # Pentax
PICT # různé
 #</pre> <!-- tuto řádku ponechte beze změny -->',
'upload-success-subj' => 'Načtení úspěšně provedeno!',
'upload-success-msg' => 'Soubor vámi načtený z [$2] je dostupný na [[:{{ns:file}}:$1]]',
'upload-failure-subj' => 'Problém s načítaným souborem',
'upload-failure-msg' => 'U souboru vámi načítaného z [$2] se vyskytl problém:

$1',
'upload-warning-subj' => 'Upozornění k načítání',
'upload-warning-msg' => 'Při vašem načítání souboru z [$2] nastal problém. Pokud ho chcete vyřešit, můžete se vrátit do [[Special:Upload/stash/$1|načítacího formuláře]].',

'upload-proto-error' => 'Neplatný protokol',
'upload-proto-error-text' => 'Nahrání vzdáleného souboru vyžaduje zadání URLs začínající na <code>http://</code> nebo <code>ftp://</code>.',
'upload-file-error' => 'Vnitřní chyba',
'upload-file-error-text' => 'Při vytváření dočasného souboru na serveru nastala vnitřní chyba.
Kontaktuje prosím [[Special:ListUsers/sysop|správce]].',
'upload-misc-error' => 'Neznámá chyba',
'upload-misc-error-text' => 'Neznámá chyba se vyskytla během nahrávání souboru.  Zkontrolujte zda je URL platná a přístupné a zkuste to znovu.  Pokud se chyba znovu objeví, kontaktuje administrátora systému.',
'upload-too-many-redirects' => 'URL obsahovalo příliš mnoho přesměrování',
'upload-unknown-size' => 'Neznámá velikost',
'upload-http-error' => 'Došlo k chybě HTTP: $1',
'upload-copy-upload-invalid-domain' => 'Načítání kopírováním není dostupné z této domény.',

# File backend
'backend-fail-stream' => 'Soubor $1 nelze streamovat.',
'backend-fail-backup' => 'Soubor $1 nelze zazálohovat.',
'backend-fail-notexists' => 'Soubor $1 neexistuje.',
'backend-fail-hashes' => 'Nelze získat hashe souborů pro porovnání.',
'backend-fail-notsame' => 'Odlišný soubor $1 už existuje.',
'backend-fail-invalidpath' => '$1 je neplatná cesta k místu uložení.',
'backend-fail-delete' => 'Soubor $1 nelze smazat.',
'backend-fail-alreadyexists' => 'Soubor $1 už existuje.',
'backend-fail-store' => 'Soubor $1 nelze uložit v $2.',
'backend-fail-copy' => 'Soubor $1 nelze kopírovat do $2.',
'backend-fail-move' => 'Soubor $1 nelze přesunout do $2.',
'backend-fail-opentemp' => 'Dočasný soubor nelze otevřít.',
'backend-fail-writetemp' => 'Do dočasného souboru nelze zapisovat.',
'backend-fail-closetemp' => 'Dočasný soubor nelze zavřít.',
'backend-fail-read' => 'Soubor $1 nelze číst.',
'backend-fail-create' => 'Nepodařilo se zapsat do souboru $1.',
'backend-fail-maxsize' => 'Nepodařilo se zapsat do souboru $1, protože je větší než {{PLURAL:$2|$2 bajt|$2 bajty|$2 bajtů}}.',
'backend-fail-readonly' => 'Koncový úložný systém „$1“ je momentálně pouze pro čtení. Udaným důvodem je: „$2“',
'backend-fail-synced' => 'Soubor „$1“ je v interních koncových úložných systémech v nekonzistentním stavu',
'backend-fail-connect' => 'Nepodařilo se připojit ke koncovému úložnému systému „$1“.',
'backend-fail-internal' => 'V koncovém úložném systému „$1“ došlo k neznámé chybě.',
'backend-fail-contenttype' => 'Nelze určit typ obsahu souboru k uložení do „$1“.',
'backend-fail-batchsize' => 'Koncový úložný systém přijal dávku s $1 {{PLURAL:souborovou operací|souborovými operacemi}}; maximum je {{PLURAL:$2|$2}}.',
'backend-fail-usable' => 'Nepodařilo se zapsat do souboru „$1“ kvůli nedostatečným oprávněním nebo chybějícím adresářům/kontejnerům.',

# File journal errors
'filejournal-fail-dbconnect' => 'Nelze se připojit k žurnálové databázi pro koncový úložný systém „$1“.',
'filejournal-fail-dbquery' => 'Nepodařilo se aktualizovat žurnálovou databázi pro koncový úložný systém „$1“.',

# Lock manager
'lockmanager-notlocked' => 'Soubor „$1“ nelze odemknout, neboť není zamčen.',
'lockmanager-fail-closelock' => 'Soubor se zámkem pro „$1“ nelze zavřít.',
'lockmanager-fail-deletelock' => 'Soubor se zámkem pro „$1“ nelze smazat.',
'lockmanager-fail-acquirelock' => 'Zámek pro „$1“ nelze získat.',
'lockmanager-fail-openlock' => 'Soubor se zámkem pro „$1“ nelze otevřít.',
'lockmanager-fail-releaselock' => 'Zámek pro „$1“ nelze uvolnit.',
'lockmanager-fail-db-bucket' => 'Nelze navázat spojení s dostatečným počtem databází zámků v bloku $1.',
'lockmanager-fail-db-release' => 'Uzamčení databáze $1 nelze uvolnit.',
'lockmanager-fail-svr-acquire' => 'Nepodařilo se získat zámek serveru $1.',
'lockmanager-fail-svr-release' => 'Uzamčení serveru $1 nelze uvolnit.',

# ZipDirectoryReader
'zip-file-open-error' => 'Při otevírání souboru ke kontrole ZIP došlo k chybě.',
'zip-wrong-format' => 'Dodaný soubor není ve formátu ZIP.',
'zip-bad' => 'Soubor je poškozený nebo jinak nečitelný ZIP.
Nelze náležitě zkontrolovat jeho bezpečnost.',
'zip-unsupported' => 'Soubor je ZIP, ale používá funkce, které MediaWiki nepodporuje.
Nelze náležitě zkontrolovat jeho bezpečnost.',

# Special:UploadStash
'uploadstash' => 'Skrýš načtených souborů',
'uploadstash-summary' => 'Tato stránka nabízí přístup k načteným (nebo právě načítaným) souborům, které dosud nejsou zveřejněny na wiki. Tyto soubory se nezobrazí nikomu kromě uživatele, který je načetl.',
'uploadstash-clear' => 'Vymazat soubory ve skrýši',
'uploadstash-nofiles' => 'Ve skrýši nemáte žádné soubory.',
'uploadstash-badtoken' => 'Operace se nezdařila, možná vypršela platnost vašeho oprávnění k editaci. Zkuste to znovu.',
'uploadstash-errclear' => 'Soubory se nepodařilo vymazat.',
'uploadstash-refresh' => 'Aktualizovat seznam souborů',
'invalid-chunk-offset' => 'Neplatný posun bloku',

# img_auth script messages
'img-auth-accessdenied' => 'Přístup odepřen',
'img-auth-nopathinfo' => 'Chybí PATH_INFO.
Váš server není nastaven tak, aby tuto informaci poskytoval.
Možná funguje pomocí CGI a img_auth na něm nemůže fungovat.
Vizte https://www.mediawiki.org/wiki/Manual:Image_Authorization.',
'img-auth-notindir' => 'Požadovaná cesta nespadá pod nakonfigurovaný adresář s načtenými soubory.',
'img-auth-badtitle' => 'Z „$1“ nelze vytvořit platný název stránky.',
'img-auth-nologinnWL' => 'Nejste přihlášen(a) a „$1“ není na bílé listině.',
'img-auth-nofile' => 'Soubor „$1“ neexistuje.',
'img-auth-isdir' => 'Pokoušíte se zobrazit adresář „$1“.
Dovolen je pouze přístup k souborům.',
'img-auth-streaming' => 'Přenáší se „$1“.',
'img-auth-public' => 'Pomocí img_auth.php se poskytují soubory na soukromých wiki.
Tato wiki je nastavena jako veřejná.
Z bezpečnostních důvodů je img_auth.php vypnuto.',
'img-auth-noread' => 'Uživatel nemá oprávnění ke čtení „$1“.',
'img-auth-bad-query-string' => 'URL obsahuje neplatný dotaz.',

# HTTP errors
'http-invalid-url' => 'Neplatné URL: $1',
'http-invalid-scheme' => 'URL používající schéma „$1“ nejsou podporována',
'http-request-error' => 'Neznámá chyba při odesílání požadavku.',
'http-read-error' => 'Chyba při čtení HTTP.',
'http-timed-out' => 'Čas pro HTTP požadavek vypršel.',
'http-curl-error' => 'Chyba při čtení z URL: $1',
'http-host-unreachable' => 'Nepodařilo se kontaktovat URL',
'http-bad-status' => 'Při provádění HTTP požadavku nastal problém: $1 $2',

# Some likely curl errors. More could be added from <http://curl.haxx.se/libcurl/c/libcurl-errors.html>
'upload-curl-error6' => 'Z URL nelze číst',
'upload-curl-error6-text' => 'Ze zadané URL nelze číst.  Zkontrolujte ža URL je správně napsané a server je dostupný',
'upload-curl-error28' => 'Čas pro nahrání vypršel',
'upload-curl-error28-text' => 'Serveru dlouho neodpovídá. Zkontrolujte, že server je dostupný, počkejte chvíli a zkuste to znovu.',

'license' => 'Licence:',
'license-header' => 'Licence',
'nolicense' => 'Bez udání licence',
'license-nopreview' => '(Náhled není dostupný)',
'upload_source_url' => ' (platné, veřejně přístupné URL)',
'upload_source_file' => ' (soubor ve vašem počítači)',

# Special:ListFiles
'listfiles-summary' => 'Tato speciální stránka zobrazuje všechny načtené soubory.
Při filtrování podle uživatele se zobrazují jen soubory, u kterých tento uživatel načetl aktuální verzi.',
'listfiles_search_for' => 'Hledat soubor podle názvu:',
'imgfile' => 'soubor',
'listfiles' => 'Seznam souborů',
'listfiles_thumb' => 'Náhled',
'listfiles_date' => 'Datum',
'listfiles_name' => 'Název',
'listfiles_user' => 'Uživatel',
'listfiles_size' => 'Velikost (bajtů)',
'listfiles_description' => 'Popis',
'listfiles_count' => 'Verze',

# File description page
'file-anchor-link' => 'Soubor',
'filehist' => 'Historie souboru',
'filehist-help' => 'Kliknutím na datum a čas se zobrazí tehdejší verze souboru.',
'filehist-deleteall' => 'smazat vše',
'filehist-deleteone' => 'smazat',
'filehist-revert' => 'vrátit zpět',
'filehist-current' => 'současná',
'filehist-datetime' => 'Datum a čas',
'filehist-thumb' => 'Náhled',
'filehist-thumbtext' => 'Náhled verze z $1',
'filehist-nothumb' => 'Bez náhledu',
'filehist-user' => 'Uživatel',
'filehist-dimensions' => 'Rozměry',
'filehist-filesize' => 'Velikost souboru',
'filehist-comment' => 'Komentář',
'filehist-missing' => 'Soubor chybí',
'imagelinks' => 'Využití souboru',
'linkstoimage' => 'Na soubor {{PLURAL:$1|odkazuje tato stránka|odkazují tyto $1 stránky|odkazuje těchto $1 stránek}}:',
'linkstoimage-more' => 'Na tento soubor {{PLURAL:$1|odkazuje více stránek|odkazují více než $1 stránky|odkazuje více než $1 stránek}}.
Následující seznam zobrazuje pouze {{PLURAL:$1|tu první|první $1|prvních $1}}.
Můžete si prohlédnout [[Special:WhatLinksHere/$2|úplný seznam]].',
'nolinkstoimage' => 'Na tento soubor neodkazuje žádná stránka.',
'morelinkstoimage' => 'Zobrazit [[Special:WhatLinksHere/$1|další odkazy]] na tento soubor.',
'linkstoimage-redirect' => '$1 (přesměrování) $2',
'duplicatesoffile' => '{{plural:$1|Následující soubor je duplikát|Následující $1 soubory jsou duplikáty|Následujících $1 souborů jsou duplikáty}} tohoto souboru ([[Special:FileDuplicateSearch/$2|podrobnosti]]):',
'sharedupload' => 'Tento soubor pochází z {{grammar:2sg|$1}} a mohou ho používat ostatní projekty.',
'sharedupload-desc-there' => 'Tento soubor pochází z {{grammar:2sg|$1}} a mohou ho používat ostatní projekty.
Více informací obsahuje jeho [$2 tamější stránka s popisem souboru].',
'sharedupload-desc-here' => 'Tento soubor pochází z {{grammar:2sg|$1}} a mohou ho používat ostatní projekty.
Níže jsou zobrazeny informace, které obsahuje jeho [$2 tamější stránka s popisem souboru].',
'sharedupload-desc-edit' => 'Tento soubor pochází z {{grammar:2sg|$1}} a mohou ho používat ostatní projekty.
Možná spíše chcete upravit [$2 tamější stránku s popisem souboru].',
'sharedupload-desc-create' => 'Tento soubor pochází z {{grammar:2sg|$1}} a mohou ho používat ostatní projekty.
Možná spíše chcete upravit [$2 tamější stránku s popisem souboru].',
'filepage-nofile' => 'Soubor s tímto názvem neexistuje.',
'filepage-nofile-link' => 'Soubor s tímto názvem neexistuje, ale můžete [$1 ho načíst].',
'uploadnewversion-linktext' => 'Načíst novou verzi tohoto souboru',
'shared-repo-from' => 'z {{grammar:2sg|$1}}',
'shared-repo' => 'sdíleného úložiště',
'filepage.css' => '/* Zde uvedené CSS se vkládá na stránky s popisem souboru, včetně cizích klientských wiki */',
'upload-disallowed-here' => 'Tento soubor nemůžete přepsat.',

# File reversion
'filerevert' => 'Vrátit zpět $1',
'filerevert-legend' => 'Vrátit zpět soubor',
'filerevert-intro' => "Vracíte zpět '''[[Media:$1|$1]]''' na [$4 verzi z $3 $2].",
'filerevert-comment' => 'Důvod:',
'filerevert-defaultcomment' => 'Navrácena verze nahraná v $2 dne $1.',
'filerevert-submit' => 'Vrátit zpět',
'filerevert-success' => "Soubor '''[[Media:$1|$1]]''' byl vrácen zpět na [$4 verzi z $3 $2].",
'filerevert-badversion' => 'Není dostupná předchozí verze tohoto souboru s odpovídající časovou značkou.',

# File deletion
'filedelete' => 'Smazání souboru $1',
'filedelete-legend' => 'Smazat soubor',
'filedelete-intro' => "Chystáte se smazat soubor '''[[Media:$1|$1]]''' i s celou historií.",
'filedelete-intro-old' => "Chystáte se smazat verzi souboru '''[[Media:$1|$1]]''' z [$4 $3 $2].",
'filedelete-comment' => 'Důvod:',
'filedelete-submit' => 'Smazat',
'filedelete-success' => "Soubor '''$1''' byl smazán.",
'filedelete-success-old' => "Verze souboru '''[[Media:$1|$1]]''' z $3 $2 byla smazána.",
'filedelete-nofile' => "Soubor '''$1''' neexistuje.",
'filedelete-nofile-old' => "Neexistuje archivní verze souboru '''$1''' s udávanými atributy.",
'filedelete-otherreason' => 'Jiný/další důvod:',
'filedelete-reason-otherlist' => 'Jiný důvod',
'filedelete-reason-dropdown' => '*Obvyklé důvody smazání
** Porušení autorských práv
** Nadbytečná kopie',
'filedelete-edit-reasonlist' => 'Editovat důvody smazání',
'filedelete-maintenance' => 'Mazání a obnovování souborů je kvůli údržbě dočasně vypnuto.',
'filedelete-maintenance-title' => 'Soubor nelze smazat',

# MIME search
'mimesearch' => 'Hledání podle MIME typu',
'mimesearch-summary' => 'Tato stránka umožňuje filtrovat soubory podle MIME typu.<br />
Vstup: <code>typ obsahu/podtyp</code>, např. <code>image/jpeg</code>.',
'mimetype' => 'MIME typ:',
'download' => 'stažení',

# Unwatched pages
'unwatchedpages' => 'Nesledované stránky',

# List redirects
'listredirects' => 'Seznam přesměrování',

# Unused templates
'unusedtemplates' => 'Nepoužívané šablony',
'unusedtemplatestext' => 'Tato stránka obsahuje seznam všech stran ve jmenném prostoru {{ns:template}}, které nejsou vloženy do žádné jiné strany. Před jejich smazáním nezapomeňte zkontrolovat ostatní odkazy.',
'unusedtemplateswlh' => 'ostatní odkazy',

# Random page
'randompage' => 'Náhodná stránka',
'randompage-nopages' => 'V {{PLURAL:$2|následujícím jmenném prostoru|následujících jmenných prostorech}} nejsou žádné stránky: $1.',

# Random redirect
'randomredirect' => 'Náhodné přesměrování',
'randomredirect-nopages' => 'Ve jmenném prostoru „$1“ nejsou žádná přesměrování.',

# Statistics
'statistics' => 'Statistika',
'statistics-header-pages' => 'Statistika stránek',
'statistics-header-edits' => 'Statistika editací',
'statistics-header-views' => 'Statistika zobrazení',
'statistics-header-users' => 'O uživatelích',
'statistics-header-hooks' => 'Další statistiky',
'statistics-articles' => 'Obsahové stránky',
'statistics-pages' => 'Stránky',
'statistics-pages-desc' => 'Všechny stránky na wiki včetně diskusí, přesměrování apod.',
'statistics-files' => 'Načtené soubory',
'statistics-edits' => 'Počet editací od založení wiki',
'statistics-edits-average' => 'Průměrný počet editací na stránku',
'statistics-views-total' => 'Celkový počet zobrazení',
'statistics-views-total-desc' => 'Zobrazení neexistujících a speciálních stránek se nepočítají',
'statistics-views-peredit' => 'Počet zobrazení na editaci',
'statistics-users' => 'Registrovaní [[Special:ListUsers|uživatelé]]',
'statistics-users-active' => 'Aktivní uživatelé',
'statistics-users-active-desc' => 'Uživatelé, kteří v {{plural:$1|posledním dni|posledních $1 dnech}} provedli nějakou operaci',
'statistics-mostpopular' => 'Nejčtenější stránky',

'disambiguations' => 'Stránky odkazující na rozcestníky',
'disambiguationspage' => 'Template:Rozcestník',
'disambiguations-text' => "Následující stránky obsahují nejméně jeden odkaz na '''rozcestník'''.
Asi by místo toho měly odkazovat na konkrétnější stránku.<br />
Stránka je považována za rozcestník, pokud používá některou ze šablon odkazovaných na [[MediaWiki:Disambiguationspage]].",

'doubleredirects' => 'Dvojitá přesměrování',
'doubleredirectstext' => 'Na této stránce je seznam přesměrování vedoucích na další přesměrování.
Každý řádek obsahuje odkaz na první a druhé přesměrování a k tomu cíl druhého přesměrování, který obvykle ukazuje jméno „skutečné“ cílové stránky, na kterou by mělo první přesměrování odkazovat.
<del>Přeškrtnuté</del> položky již byly vyřešeny.',
'double-redirect-fixed-move' => 'Stránka [[$1]] byla přesunuta, nyní přesměrovává na [[$2]]',
'double-redirect-fixed-maintenance' => 'Oprava dvojitého přesměrování z [[$1]] na [[$2]].',
'double-redirect-fixer' => 'Opravář přesměrování',

'brokenredirects' => 'Přerušená přesměrování',
'brokenredirectstext' => 'Tato přesměrování vedou na neexistující stránky:',
'brokenredirects-edit' => 'editovat',
'brokenredirects-delete' => 'smazat',

'withoutinterwiki' => 'Stránky bez mezijazykových odkazů (interwiki)',
'withoutinterwiki-summary' => 'Tyto stránky neobsahují žádný mezijazykový odkaz:',
'withoutinterwiki-legend' => 'Prefix',
'withoutinterwiki-submit' => 'Zobrazit',

'fewestrevisions' => 'Stránky s nejméně verzemi',

# Miscellaneous special pages
'nbytes' => '$1 {{PLURAL:$1|bajt|bajty|bajtů}}',
'ncategories' => '$1 {{PLURAL:$1|kategorie|kategorie|kategorií}}',
'ninterwikis' => '$1 {{PLURAL:$1|mezijazykový odkaz|mezijazykové odkazy|mezijazykových odkazů}}',
'nlinks' => '$1 {{PLURAL:$1|odkaz|odkazy|odkazů}}',
'nmembers' => '$1 {{PLURAL:$1|stránka|stránky|stránek}}',
'nrevisions' => '$1 {{PLURAL:$1|revize|revize|revizí}}',
'nviews' => '$1 {{PLURAL:$1|návšteva|návštevy|návštev}}',
'nimagelinks' => 'Použit na $1 {{PLURAL:$1|stránce|stránkách}}',
'ntransclusions' => 'použita na $1 {{PLURAL:$1|stránce|stránkách}}',
'specialpage-empty' => 'Tomuto požadavku neodpovídají žádné záznamy.',
'lonelypages' => 'Sirotčí stránky',
'lonelypagestext' => 'Následující stránky nejsou odkazovány z jiných stránek na {{grammar:6sg|{{SITENAME}}}} ani do nich vloženy.',
'uncategorizedpages' => 'Nekategorizované stránky',
'uncategorizedcategories' => 'Nekategorizované kategorie',
'uncategorizedimages' => 'Nekategorizované soubory',
'uncategorizedtemplates' => 'Nekategorizované šablony',
'unusedcategories' => 'Nepoužívané kategorie',
'unusedimages' => 'Nepoužívané soubory',
'popularpages' => 'Nejnavštěvovanější stránky',
'wantedcategories' => 'Chybějící kategorie',
'wantedpages' => 'Chybějící stránky',
'wantedpages-badtitle' => 'Výsledky obsahují neplatný název: $1',
'wantedfiles' => 'Chybějící soubory',
'wantedfiletext-cat' => 'Následující soubory se používají, ale neexistují. Soubory ze vzdálených úložišť zde mohou být uvedeny, přestože existují. Taková falešná pozitiva budou zobrazena <del>přeškrtnutě</del>. Stránky, které vkládají neexistující soubory, jsou navíc uvedeny v [[:$1]].',
'wantedfiletext-nocat' => 'Následující soubory se používají, ale neexistují. Soubory ze vzdálených úložišť zde mohou být uvedeny, přestože existují. Taková falešná pozitiva budou zobrazena <del>přeškrtnutě</del>.',
'wantedtemplates' => 'Chybějící šablony',
'mostlinked' => 'Nejodkazovanější stránky',
'mostlinkedcategories' => 'Nejpoužívanější kategorie',
'mostlinkedtemplates' => 'Nejvkládanější šablony',
'mostcategories' => 'Stránky s nejvyšším počtem kategorií',
'mostimages' => 'Nejpoužívanější soubory',
'mostinterwikis' => 'Stránky s nejvyšším počtem mezijazykových odkazů',
'mostrevisions' => 'Stránky s nejvíce revizemi',
'prefixindex' => 'Seznam stránek dle začátku názvu',
'prefixindex-namespace' => 'Seznam stránek dle začátku názvu (jmenný prostor $1)',
'shortpages' => 'Nejkratší stránky',
'longpages' => 'Nejdelší stránky',
'deadendpages' => 'Slepé stránky',
'deadendpagestext' => 'Následující stránky neodkazují na žádnou jinou stránku {{grammar:2sg|{{SITENAME}}}}.',
'protectedpages' => 'Zamčené stránky',
'protectedpages-indef' => 'Pouze zámky na neurčito',
'protectedpages-cascade' => 'Pouze kaskádové zámky',
'protectedpagestext' => 'Následující stránky jsou zamčeny nebo polozamčeny pro editaci nebo přesun:',
'protectedpagesempty' => 'Žádná stránka není zamčena s těmito parametry.',
'protectedtitles' => 'Zamčené názvy stránek',
'protectedtitlestext' => 'Následující názvy jsou zamčeny a nelze na nich zakládat stránky',
'protectedtitlesempty' => 'S těmito parametry nejsou zamčeny žádné názvy.',
'listusers' => 'Uživatelé',
'listusers-editsonly' => 'Zobrazit pouze uživatele s editacemi',
'listusers-creationsort' => 'Seřadit podle data registrace',
'usereditcount' => '$1 {{PLURAL:$1|editace|editace|editací}}',
'usercreated' => '{{GENDER:$3|Registrován|Registrována|Registrován(a)}} $1 v $2',
'newpages' => 'Nejnovější stránky',
'newpages-username' => 'Uživatelské jméno:',
'ancientpages' => 'Nejdéle needitované stránky',
'move' => 'Přesunout',
'movethispage' => 'Přesunout stránku',
'unusedimagestext' => 'Následující soubory existují, ale nejsou vloženy do žádné stránky.
Uvědomte si, že jiné webové stránky mohou na soubor odkazovat pomocí přímého URL, takže zde mohou být uvedeny soubory, které se aktivně používají.',
'unusedcategoriestext' => 'Následující stránky kategorií existují, avšak žádná stránka ani jiná kategorie je nepoužívá.',
'notargettitle' => 'Bez cílové stránky',
'notargettext' => 'Této funkci musíte určit cílovou stránku nebo uživatele.',
'nopagetitle' => 'Neexistuje cílová stránka',
'nopagetext' => 'Cílová stránka, kterou jste specifikovali, neexistuje.',
'pager-newer-n' => '{{PLURAL:$1|1 novější|$1 novější|$1 novějších}}',
'pager-older-n' => '{{PLURAL:$1|1 starší|$1 starší|$1 starších}}',
'suppress' => 'Dozor',
'querypage-disabled' => 'Tato speciální stránka je z výkonnostních důvodů vypnuta.',

# Book sources
'booksources' => 'Zdroje knih',
'booksources-search-legend' => 'Vyhledat knižní zdroje',
'booksources-go' => 'Vyhledat',
'booksources-text' => 'Níže je seznam odkazů na servery prodávající knihy, nebo které mohou mít další informace o knihách, které hledáte.',
'booksources-invalid-isbn' => 'Zadané ISBN se zdá být neplatné. Zkontrolujte jej s originálním zdrojem.',

# Special:Log
'specialloguserlabel' => 'Původce:',
'speciallogtitlelabel' => 'Cíl (název nebo uživatel):',
'log' => 'Protokolovací záznamy',
'all-logs-page' => 'Všechny veřejné záznamy',
'alllogstext' => 'Společné zobrazení všech dostupných protokolovacích záznamů pro {{grammar:4sg|{{SITENAME}}}}.
Zobrazení můžete zúžit výběrem typu záznamu, uživatelského jména (záleží na velikosti písmen) nebo dotčené stránky (také záleží na velikosti písmen).',
'logempty' => 'Protokol neobsahuje žádný odpovídající záznam.',
'log-title-wildcard' => 'Hledat názvy začínající na tento text',
'showhideselectedlogentries' => 'Ukázat/skrýt vybrané záznamy',

# Special:AllPages
'allpages' => 'Všechny stránky',
'alphaindexline' => 'od $1 do $2',
'nextpage' => 'Další stránka ($1)',
'prevpage' => 'Předchozí stránka ($1)',
'allpagesfrom' => 'Zobrazit stránky počínaje od:',
'allpagesto' => 'Zobrazit stránky do:',
'allarticles' => 'Všechny stránky',
'allinnamespace' => 'Všechny stránky (jmenný prostor $1)',
'allnotinnamespace' => 'Všechny stránky (mimo jmenný prostor $1)',
'allpagesprev' => 'Předchozí',
'allpagesnext' => 'Následující',
'allpagessubmit' => 'Přejít',
'allpagesprefix' => 'Zobrazit stránky začínající na:',
'allpagesbadtitle' => 'Zadaný název stránky nebyl platný nebo obsahoval předponu mezijazykového či interwiki odkazu. Možná obsahoval znaky, které v názvu nejsou dovoleny.',
'allpages-bad-ns' => '{{SITENAME}} nemá jmenný prostor "$1".',
'allpages-hide-redirects' => 'Skrýt přesměrování',

# SpecialCachedPage
'cachedspecial-viewing-cached-ttl' => 'Prohlížíte si cachovanou verzi této stránky, která může být až $1 stará.',
'cachedspecial-viewing-cached-ts' => 'Prohlížíte si cachovanou verzi této stránky, která nemusí být zcela aktuální.',
'cachedspecial-refresh-now' => 'Zobrazit nejnovější.',

# Special:Categories
'categories' => 'Kategorie',
'categoriespagetext' => 'Následující kategorie {{PLURAL:$1|obsahuje|obsahují}} stránky nebo soubory.
Nezobrazují se tu [[Special:UnusedCategories|nepoužívané kategorie]].
Podívejte se také na [[Special:WantedCategories|žádané kategorie]].',
'categoriesfrom' => 'Zobrazit kategorie počínaje od:',
'special-categories-sort-count' => 'seřadit podle počtu',
'special-categories-sort-abc' => 'seřadit abecedně',

# Special:DeletedContributions
'deletedcontributions' => 'Smazané editace uživatele',
'deletedcontributions-title' => 'Smazané editace uživatele',
'sp-deletedcontributions-contribs' => 'příspěvky',

# Special:LinkSearch
'linksearch' => 'Hledání externích odkazů',
'linksearch-pat' => 'Vyhledávací vzor:',
'linksearch-ns' => 'Jmenný prostor:',
'linksearch-ok' => 'Hledat',
'linksearch-text' => 'Lze používat zástupné znaky, např. „*.wikipedia.org“.
Povinná je přinejmenším doména nejvyššího řádu, např. „*.org“.<br />
Podporované protokoly: <code>$1</code> (pokud není protokol uveden, použije se http://).',
'linksearch-line' => '$2 odkazuje na $1',
'linksearch-error' => 'Zástupné znaky lze použít jen na začátku doménového jména.',

# Special:ListUsers
'listusersfrom' => 'Zobrazit uživatele počínaje od:',
'listusers-submit' => 'Ukázat',
'listusers-noresult' => 'Nenalezen žádný uživatel.',
'listusers-blocked' => '({{GENDER:$1|zablokován|zablokována|zablokován}})',

# Special:ActiveUsers
'activeusers' => 'Seznam aktivních uživatelů',
'activeusers-intro' => 'Toto je seznam uživatelů, kteří byli nějak aktivní v {{plural:$1|posledním dni|posledních $1 dnech}}.',
'activeusers-count' => '$1 {{PLURAL:$1|editace|editace|editací}} během {{PLURAL:$3|posledního dne|posledních $3 dnů}}',
'activeusers-from' => 'Zobrazit uživatele počínaje od:',
'activeusers-hidebots' => 'Skrýt roboty',
'activeusers-hidesysops' => 'Skrýt správce',
'activeusers-noresult' => 'Nenalezen žádný uživatel.',

# Special:Log/newusers
'newuserlogpage' => 'Kniha nových uživatelů',
'newuserlogpagetext' => 'Toto je záznam nově zaregistrovaných uživatelů.',

# Special:ListGroupRights
'listgrouprights' => 'Práva skupin uživatelů',
'listgrouprights-summary' => 'Toto je seznam uživatelských skupin definovaných na této wiki a&nbsp;jejich přístupových práv.

[[{{MediaWiki:Listgrouprights-helppage}}|Podrobné informace o&nbsp;jednotlivých právech]]',
'listgrouprights-key' => '* <span class="listgrouprights-granted">Udělená práva</span>
* <span class="listgrouprights-revoked">Odebraná práva</span>',
'listgrouprights-group' => 'Skupina',
'listgrouprights-rights' => 'Práva',
'listgrouprights-helppage' => 'Help:Práva skupiny',
'listgrouprights-members' => '(seznam členů)',
'listgrouprights-addgroup' => 'Přidávání uživatelů do {{PLURAL:$2|skupiny|skupin}} $1',
'listgrouprights-removegroup' => 'Vyřazování uživatelů ze {{PLURAL:$2|skupiny|skupin}} $1',
'listgrouprights-addgroup-all' => 'Přidávání uživatelů do libovolné skupiny',
'listgrouprights-removegroup-all' => 'Vyřazování uživatelů z libovolné skupiny',
'listgrouprights-addgroup-self' => 'Přidání svého účtu do {{PLURAL:$2|skupiny|skupin}} $1',
'listgrouprights-removegroup-self' => 'Vyřazení svého účtu ze {{PLURAL:$2|skupiny|skupin}} $1',
'listgrouprights-addgroup-self-all' => 'Přidání svého účtu do libovolné skupiny',
'listgrouprights-removegroup-self-all' => 'Vyřazení svého účtu z libovolné skupiny',

# E-mail user
'mailnologin' => 'Bez odesílací adresy',
'mailnologintext' => 'Pokud chcete posílat e-maily jiným uživatelům, musíte se [[Special:UserLogin|přihlásit]] a mít platnou e-mailovou adresu ve svém [[Special:Preferences|nastavení]].',
'emailuser' => 'Poslat e-mail',
'emailuser-title-target' => 'Poslat e-mail {{GENDER:$1|tomuto uživateli|této uživatelce}}',
'emailuser-title-notarget' => 'Poslat e-mail uživateli',
'emailpage' => 'Poslat e-mail',
'emailpagetext' => 'Pomocí níže zobrazeného formuláře můžete {{GENDER:$1|tomuto uživateli|této uživatelce}} poslat zprávu e-mailem.
E-mailová adresa, kterou máte uvedenu v [[Special:Preferences|nastavení]], se objeví jako adresa odesílatele pošty, aby vám adresát mohl odpovědět přímo.',
'usermailererror' => 'Chyba poštovního programu:',
'defemailsubject' => 'E-mail z {{grammar:2sg|{{SITENAME}}}} od {{gender:$1|uživatele|uživatelky|uživatele}} „$1“',
'usermaildisabled' => 'Posílání e-mailů je vypnuto',
'usermaildisabledtext' => 'Nemáte oprávnění odesílat e-maily ostatním uživatelům této wiki',
'noemailtitle' => 'Bez e-mailové adresy',
'noemailtext' => 'Tento uživatel nezadal platnou e-mailovou adresu.',
'nowikiemailtitle' => 'E-mail není povolen',
'nowikiemailtext' => 'Tento uživatel si nepřeje dostávat e-maily od ostatních uživatelů.',
'emailnotarget' => 'Neexistující nebo neplatné uživatelské jméno příjemce.',
'emailtarget' => 'Zadejte uživatelské jméno příjemce',
'emailusername' => 'Uživatelské jméno:',
'emailusernamesubmit' => 'Odeslat',
'email-legend' => 'Odeslání e-mailu jinému uživateli {{GRAMMAR:2sg|{{SITENAME}}}}',
'emailfrom' => 'Od:',
'emailto' => 'Komu:',
'emailsubject' => 'Předmět:',
'emailmessage' => 'Zpráva:',
'emailsend' => 'Odeslat',
'emailccme' => 'Poslat kopii zprávy na můj e-mail',
'emailccsubject' => 'Kopie Vaší zprávy pro uživatele $1: $2',
'emailsent' => 'Zpráva odeslána',
'emailsenttext' => 'Váš e-mail byl odeslán.',
'emailuserfooter' => 'Tento e-mail byl odeslán z {{grammar:2sg|{{SITENAME}}}} pomocí funkce „Poslat e-mail“; odeslal ho uživatel $1 uživateli $2',

# User Messenger
'usermessage-summary' => 'Doručena zpráva od systému.',
'usermessage-editor' => 'Systémový poslíček',

# Watchlist
'watchlist' => 'Sledované stránky',
'mywatchlist' => 'Sledované stránky',
'watchlistfor2' => '{{GENDER:$1|Uživatele|Uživatelky|Uživatele}} $1 $2',
'nowatchlist' => 'Na svém seznamu sledovaných stránek nemáte žádné položky.',
'watchlistanontext' => 'Pro prohlížení či úpravu seznamu sledovaných stránek se musíte $1.',
'watchnologin' => 'Nejste přihlášen(a)',
'watchnologintext' => 'Pro sledování stránek se musíte [[Special:UserLogin|přihlásit]].',
'addwatch' => 'Přidat do sledovaných stránek',
'addedwatchtext' => 'Stránka „[[:$1]]“ byla přidána mezi stránky, které [[Special:Watchlist|sledujete]]. Budoucí změny této stránky se objeví <b>tučně</b> v [[Special:RecentChanges|seznamu posledních změn]], aby bylo snadnější si jí povšimnout. Pokud budete později chtít stránku ze seznamu sledovaných smazat, klikněte na „Nesledovat tuto stránku“ v liště nástrojů.',
'removewatch' => 'Vyřadit ze sledovaných stránek',
'removedwatchtext' => 'Stránka „[[:$1]]“ byla vyřazena z vašeho [[Special:Watchlist|seznamu sledovaných stránek]].',
'watch' => 'Sledovat',
'watchthispage' => 'Sledovat tuto stránku',
'unwatch' => 'Nesledovat',
'unwatchthispage' => 'Nesledovat tuto stránku',
'notanarticle' => 'Toto není stránka',
'notvisiblerev' => 'Verze byla smazána',
'watchnochange' => 'Žádná ze sledovaných položek nebyla editována v době, která je zobrazena.',
'watchlist-details' => 'Na svém seznamu sledovaných stránek máte $1 {{PLURAL:$1|stránku|stránky|stránek}}, nepočítají se diskusní stránky.',
'wlheader-enotif' => '* Upozorňování e-mailem je zapnuto.',
'wlheader-showupdated' => "* Stránky, které se změnily od vaší poslední návštěvy, jsou zobrazeny '''tučně'''",
'watchmethod-recent' => 'hledají se sledované stránky mezi posledními změnami',
'watchmethod-list' => 'hledají se nejnovější editace sledovaných stránek',
'watchlistcontains' => 'Na svém seznamu sledovaných stránek máte $1 {{PLURAL:$1|položku|položky|položek}}.',
'iteminvalidname' => 'Problém s položkou „$1“, neplatný název…',
'wlnote' => "Níže {{PLURAL:$1|je poslední změna|jsou poslední '''$1''' změny|je posledních '''$1''' změn}} za {{PLURAL:$2|poslední hodinu|poslední '''$2''' hodiny|posledních '''$2''' hodin}} do $4, $3.",
'wlshowlast' => 'Ukázat posledních $1 hodin $2 dnů $3',
'watchlist-options' => 'Možnosti sledovaných stránek',

# Displayed when you click the "watch" button and it is in the process of watching
'watching' => 'Přidávám na seznam sledovaných stránek…',
'unwatching' => 'Odebírám ze seznamu sledovaných stránek…',
'watcherrortext' => 'Při změně sledování stránky „$1“ došlo k chybě.',

'enotif_mailer' => 'Zasílač hlášení {{grammar:2sg|{{SITENAME}}}}',
'enotif_reset' => 'Označit vše jako navštívené',
'enotif_newpagetext' => 'Toto je nová stránka.',
'enotif_impersonal_salutation' => 'Uživatel {{grammar:2sg|{{SITENAME}}}}',
'changed' => 'upravil',
'created' => 'vytvořil',
'enotif_subject' => '$PAGEEDITOR upravil stránku $PAGETITLE na {{grammar:6sg|{{SITENAME}}}}.',
'enotif_lastvisited' => 'Vizte $1 pro seznam všech změn od minulé návštěvy.',
'enotif_lastdiff' => 'Tuto změnu vizte na $1 .',
'enotif_anon_editor' => 'anonymní uživatel $1',
'enotif_body' => 'Vážený uživateli $WATCHINGUSERNAME,

Ve $PAGEEDITDATE $CHANGEDORCREATED $PAGEEDITOR stránku $PAGETITLE, vizte aktuální verzi na $PAGETITLE_URL .

$NEWPAGE

Shrnutí editace: $PAGESUMMARY $PAGEMINOREDIT

Uživatele, který změnu provedl, můžete kontaktovat:
e-mailem: $PAGEEDITOR_EMAIL
na wiki: $PAGEEDITOR_WIKI

Dokud stránku nenavštívíte, nebudou vám zasílána další oznámení o změnách této stránky.
Případně si můžete vynulovat příznaky ve svém seznamu sledovaných stránek.

	S pozdravem váš zasílač hlášení {{grammar:2sg|{{SITENAME}}}}

--
Změnit nastavení e-mailových oznámení můžete na
{{canonicalurl:{{#special:Preferences}}}}

Nastavení sledovaných stránek může změnit na
{{canonicalurl:Special:Watchlist/edit}}

Stránku můžete ze svých sledovaných vyřadit na
$UNWATCHURL

Rady a kontakt:
{{canonicalurl:{{MediaWiki:Helppage}}}}',

# Delete
'deletepage' => 'Smazat stránku',
'confirm' => 'Potvrdit',
'excontent' => 'obsah byl: „$1“',
'excontentauthor' => 'obsah byl: „$1“ (a jediným přispěvatelem byl „[[Special:Contributions/$2|$2]]“)',
'exbeforeblank' => 'obsah před vyprázdněním byl: „$1“',
'exblank' => 'stránka byla prázdná',
'delete-confirm' => 'Smazání stránky „$1“',
'delete-legend' => 'Smazat',
'historywarning' => "'''Varování:''' Stránka, kterou chcete smazat, má historii se zhruba $1 {{plural:$1|revizí|revizemi}}:",
'confirmdeletetext' => 'Chystáte se smazat stránku s celou její historií. Prosím potvrďte, že to opravdu chcete učinit, že si uvědomujete důsledky a že je to v souladu s [[{{MediaWiki:Policy-url}}|pravidly]].',
'actioncomplete' => 'Provedeno',
'actionfailed' => 'Operace se nezdařila',
'deletedtext' => 'Stránka nebo soubor „$1“ byla smazána. $2 zaznamenává poslední smazání.',
'dellogpage' => 'Kniha smazaných stránek',
'dellogpagetext' => 'Zde je seznam posledních smazaných stránek.',
'deletionlog' => 'Kniha smazaných stránek',
'reverted' => 'Obnovení předchozí verze',
'deletecomment' => 'Důvod:',
'deleteotherreason' => 'Jiný/další důvod:',
'deletereasonotherlist' => 'Jiný důvod',
'deletereason-dropdown' => '*Obvyklé důvody smazání
** Na žádost autora
** Porušení autorských práv
** Vandalismus',
'delete-edit-reasonlist' => 'Editovat důvody smazání',
'delete-toobig' => 'Tato stránka má velkou historii editací, přes $1 {{plural:$1|verzi|verze|verzí}}. Mazání takových stránek je omezeno, aby se předešlo nechtěnému narušení {{grammar:2sg|{{SITENAME}}}}.',
'delete-warning-toobig' => 'Tato stránka má velkou historii editací, přes $1 {{plural:$1|verzi|verze|verzí}}. Mazání takových stránek může narušit databázové operace {{grammar:2sg|{{SITENAME}}}}; postupujte opatrně.',

# Rollback
'rollback' => 'Vrátit zpět editace',
'rollback_short' => 'Vrátit zpět',
'rollbacklink' => 'vrácení zpět',
'rollbacklinkcount' => 'vrácení $1 {{PLURAL:$1|editace|editací}} zpět',
'rollbacklinkcount-morethan' => 'vrácení více než $1 {{PLURAL:$1|editace|editací}} zpět',
'rollbackfailed' => 'Nešlo vrátit zpět',
'cantrollback' => 'Nelze vrátit zpět poslední editaci, neboť poslední přispěvatel je jediným autorem této stránky.',
'alreadyrolled' => 'Nelze vrátit zpět poslední editaci [[:$1]] od uživatele [[User:$2|$2]] ([[User talk:$2|diskuse]]{{int:pipe-separator}}[[Special:Contributions/$2|{{int:contribslink}}]]), protože někdo jiný již stránku editoval nebo vrátil tuto změnu zpět.

Poslední editaci této stránky provedl(a) [[User:$3|$3]] ([[User talk:$3|diskuse]]{{int:pipe-separator}}[[Special:Contributions/$3|{{int:contribslink}}]]).',
'editcomment' => "Shrnutí editace bylo: ''„$1“''.",
'revertpage' => 'Editace uživatele „[[Special:Contributions/$2|$2]]“ ([[User talk:$2|diskuse]]) vráceny do předchozího stavu, jehož autorem je „[[User:$1|$1]]“',
'revertpage-nouser' => 'Editace uživatele (uživatelské jméno skryto) vráceny do předchozího stavu, jehož autorem je „[[User:$1|$1]]“',
'rollback-success' => 'Editace uživatele $1 byla vrácena na poslední verzi od uživatele $2.',

# Edit tokens
'sessionfailure-title' => 'Chyba sezení',
'sessionfailure' => 'Zřejmě je nějaký problém s vaším přihlášením;
vámi požadovaná činnost byla stornována jako prevence před neoprávněným přístupem.
Stiskněte tlačítko „zpět“, obnovte stránku, ze které jste přišli a zkuste činnost znovu.',

# Protect
'protectlogpage' => 'Kniha zamčení',
'protectlogtext' => 'Níže je uveden seznam všech změn zámků stránek.
Můžete si prohlédnout též [[Special:ProtectedPages|seznam aktuálně platných zámků]].',
'protectedarticle' => 'zamyká „[[$1]]“',
'modifiedarticleprotection' => 'mění zámek stránky „[[$1]]“',
'unprotectedarticle' => 'odemyká „[[$1]]“',
'movedarticleprotection' => 'nastavení zámků přesunuto z „[[$2]]“ na „[[$1]]“',
'protect-title' => 'Zamyká se „$1“',
'protect-title-notallowed' => 'Zobrazení zámků na „$1“',
'prot_1movedto2' => 'Stránka [[$1]] přemístěna na stránku [[$2]]',
'protect-badnamespace-title' => 'Nezamykatelný jmenný prostor',
'protect-badnamespace-text' => 'Stránky v tomto jmenném prostoru nelze zamykat.',
'protect-legend' => 'Potvrdit zamčení',
'protectcomment' => 'Důvod:',
'protectexpiry' => 'Čas vypršení:',
'protect_expiry_invalid' => 'Čas vypršení je chybný.',
'protect_expiry_old' => 'Čas vypršení již minul.',
'protect-unchain-permissions' => 'Zpřístupnit další nastavení zámku',
'protect-text' => "Zde si můžete prohlédnout či změnit nastavení zámků stránky '''$1'''.",
'protect-locked-blocked' => "Nemůžete měnit nastavení zámků pokud jste zablokován. Současné nastavení pro tuto stránku je: '''$1''':",
'protect-locked-dblock' => "Nastavení zámků nejde změnit kvůli zamčení databáze.
Současné nastavení pro tuto stránku je: '''$1''':",
'protect-locked-access' => "Tento účet nemá povoleno měnit nastavení zámků.
Současné nastavení pro tuto stránku je: '''$1''':",
'protect-cascadeon' => 'Tato stránka je právě zamčena, protože je vložena do {{PLURAL:$1|následující stránky zamčené|následujících stránek zamčených|následujících stránek zamčených}} kaskádovým zámkem. Můžete změnit zámky pro tuto stránku, ale nebude to mít žádný vliv na kaskádové zamčení.',
'protect-default' => 'Povolit všem',
'protect-fallback' => 'Vyžaduje oprávnění „$1“',
'protect-level-autoconfirmed' => 'Zakázat novým a neregistrovaným uživatelům',
'protect-level-sysop' => 'Pouze správci',
'protect-summary-cascade' => 'kaskádový',
'protect-expiring' => 'vyprší $1 (UTC)',
'protect-expiring-local' => 'vyprší $1',
'protect-expiry-indefinite' => 'do odvolání',
'protect-cascade' => 'Zamknout stránky vložené do této stránky (kaskádový zámek)',
'protect-cantedit' => 'Nemůžete měnit nastavení zámků této stránky, protože nemáte povoleno tuto stránku editovat.',
'protect-othertime' => 'Jiný čas vypršení:',
'protect-othertime-op' => 'jiný čas',
'protect-existing-expiry' => 'Současný čas vypršení: $2, $3',
'protect-otherreason' => 'Jiný/další důvod:',
'protect-otherreason-op' => 'Jiný důvod',
'protect-dropdown' => '*Obvyklé důvody zamčení
** Opakovaný vandalismus
** Vkládání reklamních externích odkazů
** Editační válka
** Často používaná stránka',
'protect-edit-reasonlist' => 'Editace seznamu důvodů zamčení',
'protect-expiry-options' => '1 hodina:1 hour,1 den:1 day,1 týden:1 week,2 týdny:2 weeks,1 měsíc:1 month,3 měsíce:3 months,6 měsíců:6 months,1 rok:1 year,do odvolání:infinite',
'restriction-type' => 'Omezení:',
'restriction-level' => 'Úroveň omezení:',
'minimum-size' => 'Min. velikost',
'maximum-size' => 'Max. velikost:',
'pagesize' => '(bajtů)',

# Restrictions (nouns)
'restriction-edit' => 'Editace',
'restriction-move' => 'Přesunutí',
'restriction-create' => 'Vytvoření',
'restriction-upload' => 'Načtení souboru',

# Restriction levels
'restriction-level-sysop' => 'zamčeno',
'restriction-level-autoconfirmed' => 'polozamčeno',
'restriction-level-all' => 'kterákoliv úroveň',

# Undelete
'undelete' => 'Smazané stránky',
'undeletepage' => 'Prohlédnout si a obnovit smazanou stránku',
'undeletepagetitle' => "'''Níže jsou smazané verze stránky [[:$1]]'''.",
'viewdeletedpage' => 'Zobrazení smazané stránky',
'undeletepagetext' => '{{PLURAL:$1|Následující stránka byla smazána, ale je dosud v archivu, takže je možno ji obnovit|Následující $1 stránky byly smazány, ale jsou dosud v archivu, takže je možno je obnovit|Následujících $1 stránek bylo smazáno, ale jsou dosud v archivu, takže je možno je obnovit}}.
Archiv může být pravidelně vyprazdňován.',
'undelete-fieldset-title' => 'Obnovit revize',
'undeleteextrahelp' => "Pokud chcete obnovit kompletní historii stránky, ponechte všechny čtverečky nezaškrtnuté a klikněte na '''''{{int:undeletebtn}}'''''.
Pro částečné obnovení zaškrtněte čtverečky u obnovovaných revizí a klikněte na '''''{{int:undeletebtn}}'''''.",
'undeleterevisions' => '$1 {{PLURAL:$1|verze je archivována|verze jsou archivovány|verzí je archivováno}}',
'undeletehistory' => 'Pokud stránku obnovíte, budou  v historii obnoveny všechny verze. Pokud byla vytvořena nová stránka se stejným jménem jako smazaná, obnovené verze se zapíší na starší místo v historii novější stránky.',
'undeleterevdel' => 'Obnovení nebude provedeno, pokud by vedlo k částečnému odstranění aktuální verze stránky. V takovém případě musíte odznačit nebo odkrýt nejnovější smazanou verzi.',
'undeletehistorynoadmin' => 'Tato stránka byla smazána. Důvod smazání je uveden níže, spolu s informacemi o uživatelích, kteří tuto stránku před smazáním editovali. Samotný text stránky je dostupný pouze správcům.',
'undelete-revision' => 'Smazaná verze stránky $1 (z $4 dne $5) od uživatele $3:',
'undeleterevision-missing' => 'Nesprávná nebo chybějící revize. Možná máte špatný odkaz, nebo revize byla obnovena či odstraněna z archivu.',
'undelete-nodiff' => 'Nebyla nalezena žádná předchozí verze.',
'undeletebtn' => 'Obnovit',
'undeletelink' => 'prohlédnout/obnovit',
'undeleteviewlink' => 'prohlédnout',
'undeletereset' => 'Resetovat',
'undeleteinvert' => 'Invertovat výběr',
'undeletecomment' => 'Důvod:',
'undeletedrevisions' => '{{PLURAL:$1|Obnovena $1 verze|Obnoveny $1 verze|Obnoveno $1 verzí}}',
'undeletedrevisions-files' => '{{PLURAL:$1|Obnovena jedna verze|Obnoveny $1 verze|Obnoveno $1 verzí}} a $2 {{PLURAL:$2|soubor|soubory|souborů}}.',
'undeletedfiles' => '{{PLURAL:$1|obnoven $1 soubor|obnoveny $1 soubory|obnoveno $1 souborů}}',
'cannotundelete' => 'Obnovení se nezdařilo:
$1',
'undeletedpage' => "'''$1 byla obnovena'''

Záznam o posledních mazáních a obnoveních najdete v [[Special:Log/delete|knize smazaných stránek]].",
'undelete-header' => 'Vizte nedávno smazané stránky v [[Special:Log/delete|knize smazaných stránek]].',
'undelete-search-title' => 'Hledání smazaných stránek',
'undelete-search-box' => 'Hledání smazaných stránek',
'undelete-search-prefix' => 'Zobraz stránky začínající na:',
'undelete-search-submit' => 'Hledat',
'undelete-no-results' => 'Dotazu žádné smazané stránky neodpovídají.',
'undelete-filename-mismatch' => 'Nelze obnovit verzi souboru s časovou značkou $1: jméno souboru neodpovídá',
'undelete-bad-store-key' => 'Nelze obnovit verzi souboru s časovou značkou $1: soubor před smazáním chyběl.',
'undelete-cleanup-error' => 'Chyba při mazání nepoužívaného archivního souboru „$1“.',
'undelete-missing-filearchive' => 'Nepodařilo se obnovit soubor archivu s identifikací $1 , protože není v databázi. Možná již byl obnoven.',
'undelete-error' => 'Chyba při obnovování stránky',
'undelete-error-short' => 'Chyba při obnovování souboru: $1',
'undelete-error-long' => 'Vyskytla se chyba při obnovování souboru:

$1',
'undelete-show-file-confirm' => 'Určitě si chcete prohlédnout smazanou revizi souboru „<nowiki>$1</nowiki>“ z $2, $3?',
'undelete-show-file-submit' => 'Ano',

# Namespace form on various pages
'namespace' => 'Jmenný prostor:',
'invert' => 'Obrátit výběr',
'tooltip-invert' => 'Zaškrtnutím tohoto políčka skryjete změny stránek ve zvoleném jmenném prostoru (a souvisejícím jmenném prostoru, pokud je zaškrtnuto)',
'namespace_association' => 'Související jmenný prostor',
'tooltip-namespace_association' => 'Zaškrtnutím tohoto políčka zahrnete i diskusní či obsahový jmenný prostor příslušný k vybranému jmennému prostoru',
'blanknamespace' => '(Hlavní)',

# Contributions
'contributions' => 'Příspěvky uživatele',
'contributions-title' => 'Příspěvky uživatele $1',
'mycontris' => 'Mé příspěvky',
'contribsub2' => '$1 ($2)',
'nocontribs' => 'Nenalezeny žádné změny vyhovující kritériím.',
'uctop' => ' (aktuální)',
'month' => 'Do měsíce:',
'year' => 'Do roku:',

'sp-contributions-newbies' => 'Zobrazit příspěvky nově založených účtů',
'sp-contributions-newbies-sub' => 'Noví uživatelé',
'sp-contributions-newbies-title' => 'Příspěvky nových uživatelů',
'sp-contributions-blocklog' => 'kniha zablokování',
'sp-contributions-deleted' => 'smazané editace uživatele',
'sp-contributions-uploads' => 'načtené soubory',
'sp-contributions-logs' => 'protokolovací záznamy',
'sp-contributions-talk' => 'diskuse',
'sp-contributions-userrights' => 'správa uživatelských práv',
'sp-contributions-blocked-notice' => 'Tento uživatel je momentálně zablokován. Zde je pro přehled zobrazen nejnovější záznam z knihy zablokování:',
'sp-contributions-blocked-notice-anon' => 'Tato IP adresa je momentálně zablokována.
Zde je pro přehled zobrazen nejnovější záznam z knihy zablokování:',
'sp-contributions-search' => 'Zobrazení příspěvků',
'sp-contributions-username' => 'IP adresa nebo uživatelské jméno:',
'sp-contributions-toponly' => 'Zobrazit pouze aktuální revize',
'sp-contributions-submit' => 'Zobrazit',

# What links here
'whatlinkshere' => 'Odkazuje sem',
'whatlinkshere-title' => 'Stránky odkazující na „$1“',
'whatlinkshere-page' => 'Strana:',
'linkshere' => "Na '''[[:$1]]''' odkazují tyto stránky:",
'nolinkshere' => "Žádná stránka na '''[[:$1]]''' neodkazuje.",
'nolinkshere-ns' => "Ve zvoleném jmenném prostoru na '''[[:$1]]''' neodkazuje žádná stránka.",
'isredirect' => 'přesměrování',
'istemplate' => 'vložení',
'isimage' => 'vložení souboru',
'whatlinkshere-prev' => '{{PLURAL:$1|předchozí|předchozí $1|předchozích $1}}',
'whatlinkshere-next' => '{{PLURAL:$1|následující|následující $1|následujících $1}}',
'whatlinkshere-links' => '← odkazy',
'whatlinkshere-hideredirs' => '$1 přesměrování',
'whatlinkshere-hidetrans' => '$1 vložení',
'whatlinkshere-hidelinks' => '$1 odkazy',
'whatlinkshere-hideimages' => '$1 vložení souboru',
'whatlinkshere-filters' => 'Filtry',

# Block/unblock
'autoblockid' => 'Autoblok #$1',
'block' => 'Zablokovat uživatele',
'unblock' => 'Odblokovat uživatele',
'blockip' => 'Zablokovat uživatele',
'blockip-title' => 'Blokovat uživatele',
'blockip-legend' => 'Zablokovat uživatele',
'blockiptext' => 'Tento formulář slouží k zablokování editací z konkrétní IP adresy nebo uživatelského jména.
Toto by mělo být používáno jen v souladu s [[{{MediaWiki:Policy-url}}|pravidly]].
Udejte přesný důvod níže (například ocitujte, které stránky byly poškozeny).',
'ipadressorusername' => 'IP adresa nebo uživatelské jméno:',
'ipbexpiry' => 'Čas vypršení:',
'ipbreason' => 'Důvod:',
'ipbreasonotherlist' => 'Jiný důvod',
'ipbreason-dropdown' => '*Časté důvody blokování
** Vkládání klamných informací
** Odstraňování obsahu stránek
** Vkládání reklamních externích odkazů
** Vkládání nesmyslů
** Zastrašování nebo vyhrožování
** Zneužívání více účtů
** Nevhodné uživatelské jméno',
'ipb-hardblock' => 'Zabránit přihlášeným uživatelům editovat z této IP adresy',
'ipbcreateaccount' => 'Nedovolit registraci nových uživatelů',
'ipbemailban' => 'Bránit uživateli v posílání e-mailů',
'ipbenableautoblock' => 'Automaticky blokovat IP adresy používané tímto uživatelem',
'ipbsubmit' => 'Zablokovat',
'ipbother' => 'Jiný čas vypršení:',
'ipboptions' => '2 hodiny:2 hours,1 den:1 day,3 dny:3 days,1 týden:1 week,2 týdny:2 weeks,1 měsíc:1 month,3 měsíce:3 months,6 měsíců:6 months,1 rok:1 year,do odvolání:infinite',
'ipbotheroption' => 'jiný',
'ipbotherreason' => 'Jiný/další důvod:',
'ipbhidename' => 'Skrýt uživatelské jméno u editací a v seznamech',
'ipbwatchuser' => 'Sledovat uživatelskou a diskusní stranu tohoto uživatele',
'ipb-disableusertalk' => 'Zabránit tomuto uživateli editovat vlastní uživatelskou diskusi po dobu zablokování',
'ipb-change-block' => 'Znovu zablokovat uživatele s tímto nastavením',
'ipb-confirm' => 'Potvrdit zablokování',
'badipaddress' => 'Neplatná IP adresa',
'blockipsuccesssub' => 'Zablokování uspělo',
'blockipsuccesstext' => '„[[Special:Contributions/$1|$1]]“ je {{GENDER:$1|zablokován|zablokována}}.<br />
Můžete si prohlédnout [[Special:BlockList|seznam zablokovaných uživatelů]].',
'ipb-blockingself' => 'Chystáte se zablokovat {{gender:|sám|sama|sami}} sebe! Jste si {{gender:|jist|jista|jisti}}, že to chcete udělat?',
'ipb-confirmhideuser' => 'Chystáte se zablokovat uživatele se zapnutou volbou „skrýt uživatelské jméno“. To způsobí, že jméno uživatele zmizí ze všech seznamů a protokolovacích záznamů. Jste si {{gender:|jist|jista|jisti}}, že to chcete udělat?',
'ipb-edit-dropdown' => 'Editace seznamu důvodů zablokování',
'ipb-unblock-addr' => 'Odblokovat uživatele nebo IP $1',
'ipb-unblock' => 'Odblokovat uživatele nebo IP adresu',
'ipb-blocklist' => 'Zobrazit probíhající bloky',
'ipb-blocklist-contribs' => 'Příspěvky uživatele $1',
'unblockip' => 'Odblokovat uživatele',
'unblockiptext' => 'Tímto formulářem je možno obnovit právo blokované IP adresy či uživatele opět přispívat do {{grammar:2sg|{{SITENAME}}}}.',
'ipusubmit' => 'Odblokovat',
'unblocked' => '{{GENDER:$1|||Uživatel}} [[User:$1|$1]] {{GENDER:$1|byl odblokován|byla odblokována|byl odblokován}}',
'unblocked-range' => '$1 bylo odblokováno',
'unblocked-id' => 'Blok $1 byl zrušen',
'blocklist' => 'Zablokovaní uživatelé',
'ipblocklist' => 'Zablokovaní uživatelé',
'ipblocklist-legend' => 'Hledat zablokovaného uživatele',
'blocklist-userblocks' => 'Skrýt zablokované účty',
'blocklist-tempblocks' => 'Skrýt dočasná zablokování',
'blocklist-addressblocks' => 'Skrýt blokování jedné IP adresy',
'blocklist-rangeblocks' => 'Skrýt blokování rozsahů',
'blocklist-timestamp' => 'Datum a čas',
'blocklist-target' => 'Cíl',
'blocklist-expiry' => 'Vypršení',
'blocklist-by' => 'Blokující správce',
'blocklist-params' => 'Parametry zablokování',
'blocklist-reason' => 'Důvod',
'ipblocklist-submit' => 'Hledat',
'ipblocklist-localblock' => 'Místní zablokování',
'ipblocklist-otherblocks' => '{{PLURAL:$1|Jiné zablokování|Jiná zablokování}}',
'infiniteblock' => 'do odvolání',
'expiringblock' => 'do $1, $2',
'anononlyblock' => 'jen anonymové',
'noautoblockblock' => 'bez autoblokování',
'createaccountblock' => 'vytváření účtů zablokováno',
'emailblock' => 'e-mail blokován',
'blocklist-nousertalk' => 'nemůže editovat svou diskusní stránku',
'ipblocklist-empty' => 'Seznam probíhajících bloků je prázdný.',
'ipblocklist-no-results' => 'Požadovaná IP adresa nebo uživatelské jméno není blokováno.',
'blocklink' => 'zablokovat',
'unblocklink' => 'uvolnit',
'change-blocklink' => 'změnit blok',
'contribslink' => 'příspěvky',
'emaillink' => 'poslat e-mail',
'autoblocker' => 'Byli jste automaticky zablokováni, protože sdílíte IP adresu s uživatelem „[[User:$1|$1]]“. Důvod zablokování tohoto uživatele: „$2“',
'blocklogpage' => 'Kniha zablokování',
'blocklog-showlog' => '{{GENDER:$1|Tento uživatel byl dříve blokován.|Tato uživatelka byla dříve blokována.|Tento uživatel byl dříve blokován.}}
Zde je pro přehled zobrazen výpis z knihy zablokování:',
'blocklog-showsuppresslog' => 'Tento uživatel byl zablokován a skryt. Zde je pro přehled zobrazen výpis záznamu utajení:',
'blocklogentry' => 'blokuje „[[$1]]“ s časem vypršení $2 $3',
'reblock-logentry' => 'mění nastavení bloku „[[$1]]“ s časem vypršení $2 $3',
'blocklogtext' => 'Toto je kniha úkonů blokování a odblokování uživatelů.
Automaticky blokované IP adresy nejsou vypsány.
Vizte též [[Special:BlockList|seznam všech probíhajících bloků]].',
'unblocklogentry' => 'odblokovává „$1“',
'block-log-flags-anononly' => 'pouze anonymní uživatelé',
'block-log-flags-nocreate' => 'vytváření účtů zablokováno',
'block-log-flags-noautoblock' => 'automatické blokování vypnuto',
'block-log-flags-noemail' => 'e-maily zablokovány',
'block-log-flags-nousertalk' => 'nemůže editovat svou diskusní stránku',
'block-log-flags-angry-autoblock' => 'rozšířené automatické blokování zapnuto',
'block-log-flags-hiddenname' => 'uživatelské jméno skryto',
'range_block_disabled' => 'Blokování rozsahů IP adres je zakázáno.',
'ipb_expiry_invalid' => 'Neplatný čas vypršení.',
'ipb_expiry_temp' => 'Blokování skrytých uživatelských jmen by měla být trvalá.',
'ipb_hide_invalid' => 'Tento účet nelze utajit; možná má příliš mnoho editací.',
'ipb_already_blocked' => '„$1“ již je zablokován.',
'ipb-needreblock' => '$1 je již zablokován(a). Chcete změnit nastavení bloku?',
'ipb-otherblocks-header' => '{{PLURAL:$1|Jiné zablokování|Jiná zablokování}}',
'unblock-hideuser' => 'Tohoto uživatele nemůžete odblokovat, protože jeho uživatelské jméno bylo skryto.',
'ipb_cant_unblock' => 'Chyba: Blokování s ID $1 nebylo nalezeno. Uživatel již možná byl odblokován.',
'ipb_blocked_as_range' => 'Chyba: IP adresa $1 není blokována přímo a tak ji nelze odblokovat. Je částí zablokovaného rozsahu $2, který může být odblokován.',
'ip_range_invalid' => 'Neplatný IP rozsah.',
'ip_range_toolarge' => 'Blokování rozsahů větších než /$1 není dovoleno.',
'blockme' => 'Zablokuj mě',
'proxyblocker' => 'Blokování proxy serverů',
'proxyblocker-disabled' => 'Tato funkce je vypnuta.',
'proxyblockreason' => 'Vaše IP adresa byla zablokována, protože funguje jako otevřený proxy server. Kontaktujte svého poskytovatele internetového připojení nebo technickou podporu a informujte je o tomto vážném bezpečnostním problému.',
'proxyblocksuccess' => 'Hotovo.',
'sorbsreason' => 'Vaše IP adresa je uvedena na seznamu DNSBL jako otevřený proxy server.',
'sorbs_create_account_reason' => 'Vaše IP adresa je uvedena na seznamu DNSBL jako otevřený proxy server. Z této adresy si nemůžete založit účet',
'cant-block-while-blocked' => 'Nemůžete blokovat jiné uživatele, když jste zablokován(a).',
'cant-see-hidden-user' => 'Uživatel, kterého se snažíte blokovat, už byl zablokován a skryt. Jelikož nemáte oprávnění hideuser, nemůžete si nastavení bloku tohoto uživatele prohlédnout ani ho změnit.',
'ipbblocked' => 'Nemůžete blokovat nebo odblokovávat jiné uživatele, {{GENDER:|sám|sama|sám}} jste {{GENDER:|zablokován|zablokována|zablokován}}',
'ipbnounblockself' => 'Nemáte dovoleno odblokovat {{GENDER:|sám|sama|sám}} sebe',

# Developer tools
'lockdb' => 'Zamknout databázi',
'unlockdb' => 'Odemknout databázi',
'lockdbtext' => 'Pokud zamknete databázi, znemožníte ostatním editovat, upravovat nastavení, sledované stránky apod. Potvrďte, že to opravdu chcete udělat a že odemknete databázi hned po opravách.',
'unlockdbtext' => 'Pokud odemknete databázi, umožníte ostatním editovat, upravovat nastavení, sledované stránky apod. Potvrďte, že to opravdu chcete udělat.',
'lockconfirm' => 'Ano, opravdu chci zamknout databázi.',
'unlockconfirm' => 'Ano, opravdu chci odemknout databázi.',
'lockbtn' => 'Zamknout databázi',
'unlockbtn' => 'Odemknout databázi',
'locknoconfirm' => 'Nebylo zaškrtnuto políčko potvrzení.',
'lockdbsuccesssub' => 'Databáze uzamčena',
'unlockdbsuccesssub' => 'Databáze odemčena',
'lockdbsuccesstext' => 'Databáze {{grammar:2sg|{{SITENAME}}}} byla úspěšně uzamčena.
<br />Nezapomeňte ji po dokončení údržby [[Special:UnlockDB|odemknout]].',
'unlockdbsuccesstext' => 'Databáze {{grammar:2sg|{{SITENAME}}}} je odemčena.',
'lockfilenotwritable' => 'Do souboru zámku databáze nelze zapisovat. Pro zamčení či odemčení databáze musí mít webový server právo zápisu do tohoto souboru.',
'databasenotlocked' => 'Databáze není uzamčena.',
'lockedbyandtime' => '({{gender:$1|zamkl|zamkla|zamkl}} $1 $2 v $3)',

# Move page
'move-page' => 'Přesunout „$1“',
'move-page-legend' => 'Přesunout stránku',
'movepagetext' => "Použitím tohoto formuláře změníte název stránky a přesunete i celou její historii na nový název.
Původní název se stane přesměrováním na nový název.
Přesměrování na původní název můžete nechat aktualizovat automaticky.
Pokud nenecháte, nezapomeňte poté zkontrolovat [[Special:DoubleRedirects|dvojitá]] nebo [[Special:BrokenRedirects|přerušená]] přesměrování.
Je na vaší zodpovědnosti zajistit, aby odkazy stále vedly tam, kam mají.

Stránku '''není možno''' přejmenovat, pokud pod cílovým názvem již nějaká stránka existuje, s výjimkou situace, kdy je cílová stránka prázdná nebo je přesměrováním na tuto stránku a nemá žádnou historii editací.
To znamená, že stránku můžete přesunout zpět na původní název, pokud uděláte chybu, a že nemůžete přepsat existující stránku.

'''Upozornění!'''
Přejmenování oblíbené stránky může být drastická a nečekaná změna; ujistěte se, prosím, že chápete důsledky svého kroku před tím, než změnu provedete.",
'movepagetext-noredirectfixer' => "Použitím tohoto formuláře změníte název stránky a přesunete i celou její historii na nový název.
Původní název se stane přesměrováním na nový název.
Nezapomeňte poté zkontrolovat [[Special:DoubleRedirects|dvojitá]] nebo [[Special:BrokenRedirects|přerušená]] přesměrování.
Je na vaší zodpovědnosti zajistit, aby odkazy stále vedly tam, kam mají.

Stránku '''není možno''' přejmenovat, pokud pod cílovým názvem již nějaká stránka existuje, s výjimkou situace, kdy je cílová stránka prázdná nebo je přesměrováním na tuto stránku a nemá žádnou historii editací.
To znamená, že stránku můžete přesunout zpět na původní název, pokud uděláte chybu, a že nemůžete přepsat existující stránku.

'''Upozornění!'''
Přejmenování oblíbené stránky může být drastická a nečekaná změna; ujistěte se, prosím, že chápete důsledky svého kroku před tím, než změnu provedete.",
'movepagetalktext' => "Přidružená diskusní stránka, pokud existuje, bude automaticky přesunuta společně se stránkou, '''pokud:'''
* Dosud neexistuje neprázdná diskusní stránka pod novým jménem a
* nezrušíte křížek ve formuláři.

V těchto případech musíte přesunout nebo sloučit stránky manuálně, jestliže si to přejete.",
'movearticle' => 'Přesunout stránku:',
'moveuserpage-warning' => "'''Upozornění:''' Chystáte se přesunout uživatelskou stránku. Uvědomte si prosím, že bude přesunuta pouze tato stránka, ale uživatel ''nebude'' přejmenován.",
'movenologin' => 'Nejste přihlášen(a)!',
'movenologintext' => 'Pro přesouvání stránek se musíte [[Special:UserLogin|přihlásit]].',
'movenotallowed' => 'Nemáte oprávnění k přesunu stránek.',
'movenotallowedfile' => 'Nemáte právo přesouvat soubory',
'cant-move-user-page' => 'Nemáte oprávnění přesouvat uživatelské stránky.',
'cant-move-to-user-page' => 'Nemáte oprávnění přesouvat na uživatelskou stránku (pouze na podstránku uživatelské stránky).',
'newtitle' => 'Na nový název:',
'move-watch' => 'Sledovat tuto stránku',
'movepagebtn' => 'Přesunout stránku',
'pagemovedsub' => 'Úspěšně přesunuto',
'movepage-moved' => "'''Stránka „$1“ byla přesunuta na „$2“'''",
'movepage-moved-redirect' => 'Bylo vytvořeno přesměrování.',
'movepage-moved-noredirect' => 'Přesměrování nebylo vytvořeno.',
'articleexists' => 'Takto nazvaná stránka již existuje, nebo Vámi zvolený název je neplatný. Zvolte jiný název.',
'cantmove-titleprotected' => 'Stránku nelze přesunout na zadané místo, protože název je uzamčen proti vytváření',
'talkexists' => 'Stránka byla přesunuta úspěšně, ale diskusní stránka přesunuta být nemohla, neboť pod novým názvem již nějaká stránka existuje. Proveďte prosím ruční sloučení.',
'movedto' => 'přesunuto na',
'movetalk' => 'Přesunout příslušnou diskusní stránku',
'move-subpages' => 'Přesunout i podstránky (maximálně $1)',
'move-talk-subpages' => 'Přesunout i podstránky diskusní stránky (maximálně $1)',
'movepage-page-exists' => 'Stránka $1 již existuje a nemůže být automaticky přepsána.',
'movepage-page-moved' => 'Stránka $1 byla přesunuta na $2.',
'movepage-page-unmoved' => 'Stránka $1 nemůže být přesunuta na $2.',
'movepage-max-pages' => '{{PLURAL:$1|Byla přesunuta maximálně povolená jedna stránka|Byly přesunuty maximálně povolené $1 stránky|Bylo přesunuto maximálně povolených $1 stránek}}, více jich už automaticky přesunuto nebude.',
'movelogpage' => 'Kniha přesunů',
'movelogpagetext' => 'Toto je záznam všech přesunů stránek.',
'movesubpage' => '{{PLURAL:$1|Podstránka|Podstránky}}',
'movesubpagetext' => 'Tato stránka má $1 {{plural:$1|podstránku uvedenou|podstránky vypsané|podstránek vypsaných}} níže.',
'movenosubpage' => 'Tato stránka nemá žádné podstránky.',
'movereason' => 'Důvod:',
'revertmove' => 'vrátit',
'delete_and_move' => 'Smazat a přesunout',
'delete_and_move_text' => '==Je potřeba smazání==

Cílová stránka „[[:$1]]“ již existuje. Přejete si ji smazat pro uvolnění místa pro přesun?',
'delete_and_move_confirm' => 'Ano, smazat cílovou stránku',
'delete_and_move_reason' => 'Smazáno pro umožnění přesunu z „[[$1]]“',
'selfmove' => 'Původní a nový název jsou stejné; nelze stránku přesunout na sebe samu.',
'immobile-source-namespace' => 'Stránky ve jmenném prostoru „$1“ nelze přesouvat',
'immobile-target-namespace' => 'Stránky nelze přesouvat do jmenného prostoru „$1“',
'immobile-target-namespace-iw' => 'Mezijazykový odkaz není validní cíl při přesouvání stránky.',
'immobile-source-page' => 'Tuto stránku nelze přesouvat.',
'immobile-target-page' => 'Stránku nelze přesunout na zadaný název.',
'bad-target-model' => 'Požadovaný cíl používá jiný model obsahu. Nelze převést $1 na $2.',
'imagenocrossnamespace' => 'Nelze přesunout mimo jmenný prostor Soubor:',
'nonfile-cannot-move-to-file' => 'Do jmenného prostoru {{ns:file}} nelze přesouvat stránky nepřináležející k souboru',
'imagetypemismatch' => 'Nová přípona souboru neodpovídá jeho typu',
'imageinvalidfilename' => 'Název cílového souboru není platný',
'fix-double-redirects' => 'Opravit všechna přesměrování směřující na původní název',
'move-leave-redirect' => 'Ponechat přesměrování',
'protectedpagemovewarning' => "'''Varování:''' Tato stránka byla zamčena, takže ji mohou přesouvat pouze správci.
Níže je pro přehled zobrazen nejnovější protokolovací záznam:",
'semiprotectedpagemovewarning' => "'''Poznámka:''' Tato stránka byla zamčena, takže ji mohou přesouvat pouze registrovaní uživatelé.
Níže je pro přehled zobrazen nejnovější protokolovací záznam:",
'move-over-sharedrepo' => '== Soubor existuje ==
[[:$1]] existuje ve sdíleném úložišti. Přesun souboru na tento název způsobí potlačení sdíleného souboru.',
'file-exists-sharedrepo' => 'Vybrané jméno souboru je již používáno ve sdíleném úložišti.
Prosíme, vyberte jiné jméno.',

# Export
'export' => 'Exportovat stránky',
'exporttext' => 'Můžete exportovat text a historii editací některé stránky nebo sady stránek zabalené v XML. Výsledný soubor lze naimportovat do jiné wiki, která běží na software MediaWiki, pomocí [[Special:Import|importovací stránky]].

Do níže uvedeného editačního pole zadejte názvy stránek, které chcete exportovat; každý řádek jeden název. Zvolte také, zda se mají exportovat i starší verze stránky včetně informací v historii editací, nebo jen aktuální verze s informací o poslední editaci.

V druhém případě můžete také používat přímý odkaz, např. pomocí [[{{#Special:Export}}/{{MediaWiki:Mainpage}}]] se vyexportuje „[[{{MediaWiki:Mainpage}}]]“.',
'exportall' => 'Exportovat všechny stránky',
'exportcuronly' => 'Zahrnout jen současnou verzi, ne plnou historii',
'exportnohistory' => "----
'''Poznámka:''' export plných historií prostřednictvím tohoto formuláře byl z výkonnostních důvodů zakázán.",
'exportlistauthors' => 'U každé stránky vypsat úplný seznam přispěvatelů',
'export-submit' => 'Exportovat',
'export-addcattext' => 'Přidat stránky z kategorie:',
'export-addcat' => 'Přidat',
'export-addnstext' => 'Přidat stránky z jmenného prostoru:',
'export-addns' => 'Přidat',
'export-download' => 'Nabídnout uložení jako soubor',
'export-templates' => 'Zahrnout šablony',
'export-pagelinks' => 'Zahrnout odkazované stránky až do hloubky:',

# Namespace 8 related
'allmessages' => 'Všechna systémová hlášení',
'allmessagesname' => 'Označení hlášení',
'allmessagesdefault' => 'Původní text',
'allmessagescurrent' => 'Aktuální text',
'allmessagestext' => 'Toto je seznam všech hlášení dostupných ve jmenném prostoru MediaWiki.
Pokud si přejete přispívat k lokalizaci softwaru MediaWiki, navštivte [//www.mediawiki.org/wiki/Localisation lokalizační stránku na mediawiki.org] a [//translatewiki.net server translatewiki.net].',
'allmessagesnotsupportedDB' => '{{ns:special}}:AllMessages není podporováno, neboť wgUseDatabaseMessages je vypnuto.',
'allmessages-filter-legend' => 'Filtr',
'allmessages-filter' => 'Filtr podle stavu:',
'allmessages-filter-unmodified' => 'Neupraveno',
'allmessages-filter-all' => 'Vše',
'allmessages-filter-modified' => 'Upraveno',
'allmessages-prefix' => 'Filtr podle začátku názvu:',
'allmessages-language' => 'Jazyk:',
'allmessages-filter-submit' => 'Použít',

# Thumbnails
'thumbnail-more' => 'Zvětšit',
'filemissing' => 'Chybějící soubor',
'thumbnail_error' => 'Chyba při vytváření náhledu: $1',
'djvu_page_error' => 'Stránka DjVu mimo rozsah',
'djvu_no_xml' => 'Vytvoření XML pro soubor DjVu se nezdařilo.',
'thumbnail-temp-create' => 'Dočasný soubor náhledu nelze vytvořit.',
'thumbnail-dest-create' => 'Náhled nelze uložit na dané místo.',
'thumbnail_invalid_params' => 'Neplatný parametr náhledu',
'thumbnail_dest_directory' => 'Nelze vytvořit cílový adresář',
'thumbnail_image-type' => 'Nepodporovaný typ obrázku',
'thumbnail_gd-library' => 'Neúplná konfigurace knihovny GD: chybí funkce $1',
'thumbnail_image-missing' => 'Soubor patrně chybí: $1',

# Special:Import
'import' => 'Import stránek',
'importinterwiki' => 'Import mezi wiki',
'import-interwiki-text' => 'Pro import zvolte zdrojovou wiki a název stránky. Data revizí a jména autorů budou zachována. Všechny importy se zaznamenávají do [[Special:Log/import|knihy importů]].',
'import-interwiki-source' => 'Zdrojová wiki/stránka:',
'import-interwiki-history' => 'Zkopírovat všechny historické verze této stránky',
'import-interwiki-templates' => 'Zahrnout všechny šablony',
'import-interwiki-submit' => 'Importovat',
'import-interwiki-namespace' => 'Cílový jmenný prostor:',
'import-interwiki-rootpage' => 'Cílová kořenová stránka (nepovinné):',
'import-upload-filename' => 'Jméno souboru:',
'import-comment' => 'Zdůvodnění:',
'importtext' => 'Prosím exportujte soubor ze zdrojové wiki pomocí [[Special:Export|exportního nástroje]].
Uložte jej na svůj disk a nahrajte ho sem.',
'importstart' => 'Stránky se importují…',
'import-revision-count' => '$1 {{PLURAL:$1|revize|revize|revizí}}',
'importnopages' => 'Není co importovat.',
'imported-log-entries' => '{{PLURAL:$1|Naimportován 1 protokolovací záznam|Naimportovány $1 protokolovací záznamy|Naimportováno $1 protokolovacích záznamů}}.',
'importfailed' => 'Import selhal: $1',
'importunknownsource' => 'Neznámý typ zdroje importu',
'importcantopen' => 'Nepodařilo se otevřít importní soubor',
'importbadinterwiki' => 'Neplatný interwiki odkaz',
'importnotext' => 'Prázdný nebo žádný text',
'importsuccess' => 'Import skončil!',
'importhistoryconflict' => 'Existuje konflikt mezi historiemi verzí. Možná, že tato stránka byla již importována dříve.',
'importnosources' => 'Nebyly definovány žádné zdroje pro import mezi wiki a přímé načítání historie je vypnuto.',
'importnofile' => 'Nebyl načten importní soubor.',
'importuploaderrorsize' => 'Nepodařilo se načíst importní soubor. Soubor je větší než povolená velikost.',
'importuploaderrorpartial' => 'Nepodařilo se načíst importní soubor. Soubor byl načten jen částečně.',
'importuploaderrortemp' => 'Nepodařilo se načíst importní soubor. Není k dispozici dočasná složka.',
'import-parse-failure' => 'Chyba při importu XML',
'import-noarticle' => 'Není určena žádná stránka na import!',
'import-nonewrevisions' => 'Všechny verze již byly dříve importovány.',
'xml-error-string' => '$1 na řádku $2, sloupec $3 (bajt $4): $5',
'import-upload' => 'Importovat XML data',
'import-token-mismatch' => 'Ztratila se data relace. Zkuste to znovu.',
'import-invalid-interwiki' => 'Ze zadané wiki nelze importovat.',
'import-error-edit' => 'Stránka „$1“ se nenaimportovala, protože nemáte oprávnění ji editovat.',
'import-error-create' => 'Stránka „$1“ se nenaimportovala, protože nemáte oprávnění ji založit.',
'import-error-interwiki' => 'Stránka „$1“ se neimportuje, protože její název je vyhrazen pro externí odkazy (interwiki).',
'import-error-special' => 'Stránka „$1“ se neimportuje, protože patří do speciálního jmenného prostoru, do kterého stránky nepatří.',
'import-error-invalid' => 'Stránka „$1“ se neimportuje, protože její název je neplatný.',
'import-options-wrong' => '{{PLURAL:$2|Chybná volba|Chybné volby}}: <nowiki>$1</nowiki>',
'import-rootpage-invalid' => 'Zadaný název kořenové stránky je neplatný.',
'import-rootpage-nosubpage' => 'Ve jmenném prostoru „$1“ kořenové stránky nejsou dovoleny podstránky.',

# Import log
'importlogpage' => 'Kniha importů',
'importlogpagetext' => 'Na této stránce se zobrazují správcovské importy stránek včetně historie editací z jiných wiki.',
'import-logentry-upload' => 'naimportoval [[$1]] načtením souboru',
'import-logentry-upload-detail' => '$1 {{PLURAL:$1|revizi|revize|revizí}}',
'import-logentry-interwiki' => 'přenesl $1',
'import-logentry-interwiki-detail' => '$1 {{PLURAL:$1|revizi|revize|revizí}} z $2',

# JavaScriptTest
'javascripttest' => 'Testování JavaScriptu',
'javascripttest-title' => 'Spouštějí se testy v $1',
'javascripttest-pagetext-noframework' => 'Tato stránka je vyhrazena pro spouštění testů JavaScriptu.',
'javascripttest-pagetext-unknownframework' => 'Neznámá testovací knihovna „$1“.',
'javascripttest-pagetext-frameworks' => 'Zvolte jednu z následujících testovacích knihoven: $1',
'javascripttest-pagetext-skins' => 'Zvolte vzhled, pod kterým se mají testy spustit:',
'javascripttest-qunit-intro' => 'Vizte [$1 dokumentaci testování] na mediawiki.org',
'javascripttest-qunit-heading' => 'Sada testů JavaScriptu v MediaWiki pomocí QUnit',

# Tooltip help for the actions
'tooltip-pt-userpage' => 'Vaše uživatelská stránka',
'tooltip-pt-anonuserpage' => 'Uživatelská stránka pro IP adresu, ze které editujete',
'tooltip-pt-mytalk' => 'Vaše diskusní stránka',
'tooltip-pt-anontalk' => 'Diskuse o editacích provedených z této IP adresy',
'tooltip-pt-preferences' => 'Moje nastavení',
'tooltip-pt-watchlist' => 'Seznam stránek, jejichž změny sleduji',
'tooltip-pt-mycontris' => 'Seznam vašich příspěvků',
'tooltip-pt-login' => 'Doporučujeme vám přihlásit se, ovšem není to povinné.',
'tooltip-pt-anonlogin' => 'Doporučujeme vám přihlásit se, ovšem není to povinné.',
'tooltip-pt-logout' => 'Odhlásit se',
'tooltip-ca-talk' => 'Diskuse ke stránce',
'tooltip-ca-edit' => 'Tuto stránku můžete editovat. Prosíme použijte tlačítko Ukázat náhled před uložením.',
'tooltip-ca-addsection' => 'Začít novou sekci',
'tooltip-ca-viewsource' => 'Tato stránka je zamčena. Můžete si prohlédnout její zdrojový kód.',
'tooltip-ca-history' => 'Starší verze této stránky.',
'tooltip-ca-protect' => 'Zamknout tuto stránku.',
'tooltip-ca-unprotect' => 'Změnit zámek této stránky.',
'tooltip-ca-delete' => 'Smazat tuto stránku.',
'tooltip-ca-undelete' => 'Obnovit editace této stránky provedené před jejím smazáním.',
'tooltip-ca-move' => 'Přesunout tuto stránku',
'tooltip-ca-watch' => 'Přidat tuto stránku mezi sledované',
'tooltip-ca-unwatch' => 'Vyjmout tuto stránku ze sledovaných',
'tooltip-search' => 'Prohledat tuto wiki',
'tooltip-search-go' => 'Jít na stránku s tímto názvem, pokud existuje',
'tooltip-search-fulltext' => 'Hledat stránky s tímto textem',
'tooltip-p-logo' => 'Hlavní strana',
'tooltip-n-mainpage' => 'Navštívit Hlavní stranu',
'tooltip-n-mainpage-description' => 'Přejít na hlavní stranu',
'tooltip-n-portal' => 'O projektu, jak můžete pomoci, kde hledat',
'tooltip-n-currentevents' => 'Informace o aktuálních událostech',
'tooltip-n-recentchanges' => 'Seznam posledních změn na této wiki',
'tooltip-n-randompage' => 'Přejít na náhodně vybranou stránku',
'tooltip-n-help' => 'Místo, kde najdete pomoc',
'tooltip-t-whatlinkshere' => 'Seznam všech wikistránek, které sem odkazují',
'tooltip-t-recentchangeslinked' => 'Nedávné změny stránek, na které je odkazováno',
'tooltip-feed-rss' => 'RSS kanál pro tuto stránku',
'tooltip-feed-atom' => 'Atom kanál pro tuto stránku',
'tooltip-t-contributions' => 'Prohlédnout si seznam příspěvků tohoto uživatele',
'tooltip-t-emailuser' => 'Poslat e-mail tomuto uživateli',
'tooltip-t-upload' => 'Nahrát obrázky či jiná multimédia',
'tooltip-t-specialpages' => 'Seznam všech speciálních stránek',
'tooltip-t-print' => 'Tato stránka v podobě vhodné k tisku',
'tooltip-t-permalink' => 'Trvalý odkaz na tuto verzi této stránky',
'tooltip-ca-nstab-main' => 'Zobrazit obsahovou stránku',
'tooltip-ca-nstab-user' => 'Zobrazit uživatelovu stránku',
'tooltip-ca-nstab-media' => 'Zobrazit stránku souboru',
'tooltip-ca-nstab-special' => 'Toto je speciální stránka, kterou nelze editovat.',
'tooltip-ca-nstab-project' => 'Zobrazit stránku o wiki.',
'tooltip-ca-nstab-image' => 'Zobrazit stránku obrázku.',
'tooltip-ca-nstab-mediawiki' => 'Zobrazit systémovou zprávu.',
'tooltip-ca-nstab-template' => 'Zobrazit šablonu.',
'tooltip-ca-nstab-help' => 'Zobrazit stránku nápovědy.',
'tooltip-ca-nstab-category' => 'Zobrazit kategorii.',
'tooltip-minoredit' => 'Označit změnu jako malou editaci',
'tooltip-save' => 'Uložit vaše změny',
'tooltip-preview' => 'Zobrazit náhled vašich změn; prosíme, zobrazte si ho před uložením!',
'tooltip-diff' => 'Zobrazit, jaké změny jste v textu provedli',
'tooltip-compareselectedversions' => 'Podívat se na rozdíly mezi dvěma vybranými verzemi této stránky.',
'tooltip-watch' => 'Přidat stránku do seznamu sledovaných',
'tooltip-watchlistedit-normal-submit' => 'Odstranit položky',
'tooltip-watchlistedit-raw-submit' => 'Aktualizovat seznam sledovaných stránek',
'tooltip-recreate' => 'Obnovit stánku i když byla smazána',
'tooltip-upload' => 'Odesílání souboru',
'tooltip-rollback' => '„Vrácení zpět“ jedním kliknutím zruší všechny editace provedené posledním uživatelem.',
'tooltip-undo' => '„Zrušit editaci“ otevře okno editace, které neobsahuje změny provedené v rušené editaci. Je možné doplnit zdůvodnění do shrnutí editace.',
'tooltip-preferences-save' => 'Uložit nastavení',
'tooltip-summary' => 'Zadejte stručné shrnutí',

# Stylesheets
'common.css' => '/* Zde uvedené CSS bude ovlivňovat všechny styly */',
'standard.css' => '/* Zde uvedené CSS bude ovlivňovat pouze styl „Klasický“  */',
'nostalgia.css' => '/* Zde uvedené CSS bude ovlivňovat pouze styl „Nostalgie“  */',
'cologneblue.css' => '/* Zde uvedené CSS bude ovlivňovat pouze styl „Kolínská modř“  */',
'monobook.css' => '/* Zde uvedené CSS bude ovlivňovat pouze styl „Monobook“ */',
'myskin.css' => '/* Zde uvedené CSS bude ovlivňovat pouze styl „Můj vzhled“ */',
'chick.css' => '/* Zde uvedené CSS bude ovlivňovat pouze styl „Kuře“ */',
'simple.css' => '/* Zde uvedené CSS bude ovlivňovat pouze styl „Jednoduchý“ */',
'modern.css' => '/* Zde uvedené CSS bude ovlivňovat pouze styl „Moderní“ */',
'vector.css' => '/* Zde uvedené CSS bude ovlivňovat pouze styl „Vektor“ */',
'print.css' => '/* Zde uvedené CSS bude ovlivňovat tiskový výstup */',
'handheld.css' => '/* Zde uvedené CSS bude ovlivňovat přenosná zařízení vycházející ze stylu nastaveného v proměnné $wgHandheldStyle */',
'noscript.css' => '/* Zde uvedené CSS bude ovlivňovat uživatele s vypnutým JavaScriptem */',
'group-autoconfirmed.css' => '/* Zde uvedené CSS bude ovlivňovat pouze automaticky schválené uživatele */',
'group-bot.css' => '/* Zde uvedené CSS bude ovlivňovat pouze boty */',
'group-sysop.css' => '/* Zde uvedené CSS bude ovlivňovat pouze správce */',
'group-bureaucrat.css' => '/* Zde uvedené CSS bude ovlivňovat pouze byrokraty */',

# Scripts
'common.js' => '/* Zde uvedený JavaScript bude použit pro všechny uživatele při načtení každé stránky.  */',
'standard.js' => '/* JavaScript pro uživatele používající vzhled „Klasický“ */',
'nostalgia.js' => '/* JavaScript pro uživatele používající vzhled „Nostalgie“  */',
'cologneblue.js' => '/* JavaScript pro uživatele používající vzhled „Kolínská modř“  */',
'monobook.js' => '/* JavaScript pro uživatele používající vzhled MonoBook */',
'myskin.js' => '/* JavaScript pro uživatele používající vzhled „Můj vzhled“ */',
'chick.js' => '/* JavaScript pro uživatele používající vzhled „Kuře“ */',
'simple.js' => '/* JavaScript pro uživatele používající vzhled „Jednoduchý“ */',
'modern.js' => '/* JavaScript pro uživatele používající vzhled „Moderní“ */',
'vector.js' => '/* JavaScript pro uživatele používající vzhled „Vektor“ */',
'group-autoconfirmed.js' => '/* Zde uvedený JavaScript bude použit pouze pro automaticky schválené uživatele */',
'group-bot.js' => '/* Zde uvedený JavaScript bude použit pouze pro boty */',
'group-sysop.js' => '/* Zde uvedený JavaScript bude použit pouze pro správce */',
'group-bureaucrat.js' => '/* Zde uvedený JavaScript bude použit pouze pro byrokraty */',

# Metadata
'notacceptable' => 'Tento wiki server není schopen poskytnout data ve formátu, který by váš klient byl schopen přečíst.',

# Attribution
'anonymous' => 'anonymní {{PLURAL:$1|uživatel|uživatelé|uživatelé}} {{GRAMMAR:2sg|{{SITENAME}}}}',
'siteuser' => 'uživatel {{grammar:2sg|{{SITENAME}}}} $1',
'anonuser' => 'anonymní uživatel {{grammar:2sg|{{SITENAME}}}} $1',
'lastmodifiedatby' => 'Tuto stránku naposledy {{GENDER:$4|změnil|změnila|změnil}} $3 v $2, $1.',
'othercontribs' => 'Do textu {{PLURAL:$2|přispěl|přispěli}} $1.',
'others' => 'další',
'siteusers' => '{{PLURAL:$2|uživatel|uživatelé|uživatelé}} {{grammar:2sg|{{SITENAME}}}} $1',
'anonusers' => 'anonymní {{PLURAL:$2|uživatel|uživatelé}} {{grammar:2sg|{{SITENAME}}}} $1',
'creditspage' => 'Zásluhy za stránku',
'nocredits' => 'K této stránce neexistuje informace o zásluhách.',

# Spam protection
'spamprotectiontitle' => 'Protispamový filtr',
'spamprotectiontext' => 'Stránka, kterou jste se pokusil(a) uložit, byla zablokována protispamovým filtrem. Pravděpodobnou příčinou je odkaz na externí stránku, která je na černé listině.',
'spamprotectionmatch' => 'Následující text spustil náš filtr proti spamu: $1',
'spambot_username' => 'Systémový čistič spamu',
'spam_reverting' => 'Revert na poslední verzi neobsahující odkazy na $1',
'spam_blanking' => 'Všechny verze obsahovaly odkazy na $1, vyprázdněno',
'spam_deleting' => 'Všechny verze obsahovaly odkazy na $1, smazáno',

# Info page
'pageinfo-title' => 'Informace o stránce „$1“',
'pageinfo-not-current' => 'Informace bohužel nelze zobrazit pro starší verze.',
'pageinfo-header-basic' => 'Základní údaje',
'pageinfo-header-edits' => 'Historie editací',
'pageinfo-header-restrictions' => 'Zámek stránky',
'pageinfo-header-properties' => 'Vlastnosti stránky',
'pageinfo-display-title' => 'Zobrazovaný název',
'pageinfo-default-sort' => 'Výchozí klíč řazení',
'pageinfo-length' => 'Velikost stránky (v bajtech)',
'pageinfo-article-id' => 'ID stránky',
'pageinfo-language' => 'Jazyk obsahu stránky',
'pageinfo-robot-policy' => 'Nastavení pro vyhledávače',
'pageinfo-robot-index' => 'Indexovatelná',
'pageinfo-robot-noindex' => 'Neindexovatelná',
'pageinfo-views' => 'Počet zobrazení',
'pageinfo-watchers' => 'Počet sledujících',
'pageinfo-redirects-name' => 'Přesměrování na tuto stránku',
'pageinfo-subpages-name' => 'Podstránky této stránky',
'pageinfo-subpages-value' => '$1 ($2 {{PLURAL:$2|přesměrování}}; $3 {{PLURAL:$3|nepřesměrování}})',
'pageinfo-firstuser' => 'Zakladatel stránky',
'pageinfo-firsttime' => 'Datum založení stránky',
'pageinfo-lastuser' => 'Nejnovější editor',
'pageinfo-lasttime' => 'Datum nejnovější editace',
'pageinfo-edits' => 'Celkový počet editací',
'pageinfo-authors' => 'Celkový počet různých autorů',
'pageinfo-recent-edits' => 'Počet nedávných ($1) editací',
'pageinfo-recent-authors' => 'Nedávný počet různých autorů',
'pageinfo-magic-words' => '{{PLURAL:$1|Kouzelné slovo|Kouzelná slova}} ($1)',
'pageinfo-hidden-categories' => '{{PLURAL:$1|Skrytá|Skryté}} kategorie ($1)',
'pageinfo-templates' => '{{PLURAL:$1|Použitá šablona|Použité šablony}} ($1)',
'pageinfo-toolboxlink' => 'Informace o stránce',
'pageinfo-redirectsto' => 'Přesměrovává na',
'pageinfo-redirectsto-info' => 'info',
'pageinfo-contentpage' => 'Stránka se počítá do obsahu',
'pageinfo-contentpage-yes' => 'Ano',
'pageinfo-protect-cascading' => 'Kaskádový zámek',
'pageinfo-protect-cascading-yes' => 'Ano',
'pageinfo-protect-cascading-from' => 'Zámky pocházejí z kaskádových zámků na',

# Skin names
'skinname-standard' => 'Klasický',
'skinname-nostalgia' => 'Nostalgie',
'skinname-cologneblue' => 'Kolínská modř',
'skinname-myskin' => 'Můj vzhled',
'skinname-chick' => 'Kuře',
'skinname-simple' => 'Jednoduchý',
'skinname-modern' => 'Moderní',
'skinname-vector' => 'Vektor',

# Patrolling
'markaspatrolleddiff' => 'Označit jako prověřené',
'markaspatrolledtext' => 'Označit tuto stránku jako prověřenou',
'markedaspatrolled' => 'Označeno jako prověřené',
'markedaspatrolledtext' => 'Vybraná verze stránky [[:$1]] byla označena jako prověřená.',
'rcpatroldisabled' => 'Hlídka posledních změn vypnuta',
'rcpatroldisabledtext' => 'Hlídka posledních změn je momentálně vypnuta.',
'markedaspatrollederror' => 'Nelze označit za prověřené',
'markedaspatrollederrortext' => 'Musíte zvolit revizi, která má být označena jako prověřená.',
'markedaspatrollederror-noautopatrol' => 'Nemáte dovoleno označovat vlastní editace jako prověřené.',

# Patrol log
'patrol-log-page' => 'Kniha prověřených editací',
'patrol-log-header' => 'Toto je kniha prověřených verzí.',
'log-show-hide-patrol' => '$1 knihu záznamů patroly',

# Image deletion
'deletedrevision' => 'Smazána stará revize $1',
'filedeleteerror-short' => 'Chyba při mazání souboru: $1',
'filedeleteerror-long' => 'Vyskytla se chyba při mazání souboru:

$1',
'filedelete-missing' => 'Soubor „$1“ nelze smazat, protože neexistuje.',
'filedelete-old-unregistered' => 'Určená verze souboru „$1“ není v databázi.',
'filedelete-current-unregistered' => 'Určený soubor „$1“ není v databázi.',
'filedelete-archive-read-only' => 'Do archivního adresáře „$1“ nemůže webový server psát.',

# Browsing diffs
'previousdiff' => '← Porovnání se starší verzí',
'nextdiff' => 'Porovnání s novější verzí →',

# Media information
'mediawarning' => "'''Upozornění''': Tento typ souboru může obsahovat škodlivý kód.
Otevřením souboru můžete ohrozit svůj počítač.",
'imagemaxsize' => "Maximální velikost obrázku:<br />
''(na stránce s popisem souboru)''",
'thumbsize' => 'Velikost náhledu:',
'widthheightpage' => '$1 × $2, $3 {{PLURAL:$3|stránka|stránky|stránek}}',
'file-info' => 'velikost souboru: $1, MIME typ: $2',
'file-info-size' => '$1 × $2 pixelů, velikost souboru: $3, MIME typ: $4',
'file-info-size-pages' => '$1 × $2 pixelů, velikost souboru: $3, MIME typ: $4, $5 {{PLURAL:$5|stránka|stránky|stránek}}',
'file-nohires' => 'Větší rozlišení není k dispozici.',
'svg-long-desc' => 'soubor SVG, nominální rozměr: $1 × $2 pixelů, velikost souboru: $3',
'svg-long-desc-animated' => 'Animovaný soubor SVG, nominální rozměr: $1 × $2 pixelů, velikost souboru: $3',
'show-big-image' => 'Obrázek ve vyšším rozlišení',
'show-big-image-preview' => 'Velikost tohoto náhledu: $1.',
'show-big-image-other' => '{{PLURAL:$2|Jiné|Jiná}} rozlišení: $1.',
'show-big-image-size' => '$1 × $2 pixelů',
'file-info-gif-looped' => 've smyčce',
'file-info-gif-frames' => '$1 {{PLURAL:$1|snímek|snímky|snímků}}',
'file-info-png-looped' => 've smyčce',
'file-info-png-repeat' => 'opakováno $1{{PLURAL:$1|krát|krát}}',
'file-info-png-frames' => '$1 {{PLURAL:$1|snímek|snímky|snímků}}',
'file-no-thumb-animation' => "'''Poznámka: Kvůli technickým omezením nebudou náhledy tohoto souboru animované.'''",
'file-no-thumb-animation-gif' => "'''Poznámka: Kvůli technickým omezením nebudou náhledy obrázků GIF ve vysokém rozlišení, jako je tento, animované.'''",

# Special:NewFiles
'newimages' => 'Galerie nových souborů',
'imagelisttext' => "Níže je {{plural:$1|jeden soubor|seznam '''$1'''&nbsp;souborů seřazených $2|seznam '''$1'''&nbsp;souborů seřazených $2}}.",
'newimages-summary' => 'Na této speciální stránce se zobrazují poslední načtené soubory.',
'newimages-legend' => 'Filtr',
'newimages-label' => 'Název souboru (nebo jeho část):',
'showhidebots' => '($1 roboty)',
'noimages' => 'Není co zobrazit.',
'ilsubmit' => 'Hledat',
'bydate' => 'podle data',
'sp-newimages-showfrom' => 'Zobrazit nové soubory počínaje od $2, $1',

# Video information, used by Language::formatTimePeriod() to format lengths in the above messages
'seconds' => '{{PLURAL:$1|$1 sekunda|$1 sekundy|$1 sekund}}',
'minutes' => '{{PLURAL:$1|$1 minuta|$1 minuty|$1 minut}}',
'hours' => '{{PLURAL:$1|$1 hodina|$1 hodiny|$1 hodin}}',
'days' => '{{PLURAL:$1|$1 den|$1 dny|$1 dní}}',
'ago' => 'před 
$1',

# Bad image list
'bad_image_list' => 'Tato stránka má následující formát:

Obsahuje pouze seznam s odrážkami (řádka začíná s *). První odkaz na řádce musí být odkaz na soubor, kterému se zakazuje zobrazování na stránkách. Všechny další odkazy na řádce jsou považovány za výjimky, tedy stránky na kterých se obrázek může zobrazit.',

# Metadata
'metadata' => 'Metadata',
'metadata-help' => 'Tento soubor obsahuje dodatečné informace, poskytnuté zřejmě digitálním fotoaparátem nebo scannerem, kterým byl pořízen. Pokud byl soubor od té doby změněn, některé údaje mohou být neplatné.',
'metadata-expand' => 'Zobrazit podrobnosti',
'metadata-collapse' => 'Skrýt podrobnosti',
'metadata-fields' => 'Položky metadat obrázků uvedené v této zprávě budou na stránce s popisem vypsána vždy. Pro zobrazení ostatních bude třeba kliknout na „zobrazit podrobnosti“.
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
'exif-imagewidth' => 'Šířka',
'exif-imagelength' => 'Výška',
'exif-bitspersample' => 'Bitů na složku',
'exif-compression' => 'Druh komprese',
'exif-photometricinterpretation' => 'Barevný prostor',
'exif-orientation' => 'Orientace',
'exif-samplesperpixel' => 'Počet složek',
'exif-planarconfiguration' => 'Uspořádání dat',
'exif-ycbcrsubsampling' => 'Poměr podvzorkování Y ku C',
'exif-ycbcrpositioning' => 'Umístění Y a C',
'exif-xresolution' => 'Rozlišení obrázku na šířku',
'exif-yresolution' => 'Rozlišení obrázku na výšku',
'exif-stripoffsets' => 'Umístění dat obrázku',
'exif-rowsperstrip' => 'Počet řádků na pás',
'exif-stripbytecounts' => 'Počet bajtů na komprimovaný pás',
'exif-jpeginterchangeformat' => 'Ofset k JPEG SOI',
'exif-jpeginterchangeformatlength' => 'Počet bajtů JPEG dat',
'exif-whitepoint' => 'Chroma bílého bodu',
'exif-primarychromaticities' => 'Chroma primárních barev',
'exif-ycbcrcoefficients' => 'Koeficienty matice pro transformaci barevných prostorů',
'exif-referenceblackwhite' => 'Světlost referenčního černého a bílého bodu',
'exif-datetime' => 'Datum a čas vytvoření obrázku',
'exif-imagedescription' => 'Název obrázku',
'exif-make' => 'Značka fotoaparátu',
'exif-model' => 'Model fotoaparátu',
'exif-software' => 'Použitý software',
'exif-artist' => 'Autor',
'exif-copyright' => 'Držitel autorských práv',
'exif-exifversion' => 'Verze Exif',
'exif-flashpixversion' => 'Podporovaná verze Flashpix',
'exif-colorspace' => 'Barevný prostor',
'exif-componentsconfiguration' => 'Význam jednotlivých složek',
'exif-compressedbitsperpixel' => 'Komprimační režim',
'exif-pixelydimension' => 'Šířka obrázku',
'exif-pixelxdimension' => 'Výška obrázku',
'exif-usercomment' => 'Uživatelské poznámky',
'exif-relatedsoundfile' => 'Související zvukový soubor',
'exif-datetimeoriginal' => 'Datum a čas pořízení obrázku',
'exif-datetimedigitized' => 'Datum a čas digitalizace',
'exif-subsectime' => 'zlomky sekundy pro DateTime',
'exif-subsectimeoriginal' => 'zlomky sekundy pro DateTimeOriginal',
'exif-subsectimedigitized' => 'zlomky sekundy pro DateTimeDigitized',
'exif-exposuretime' => 'Expozice',
'exif-exposuretime-format' => '$1 s ($2)',
'exif-fnumber' => 'Clona',
'exif-exposureprogram' => 'Expoziční program',
'exif-spectralsensitivity' => 'Spektrální citlivost',
'exif-isospeedratings' => 'Nastavení ISO citlivosti',
'exif-shutterspeedvalue' => 'Expoziční čas (APEX)',
'exif-aperturevalue' => 'Clona (APEX)',
'exif-brightnessvalue' => 'Jas (APEX)',
'exif-exposurebiasvalue' => 'Změna expozice',
'exif-maxaperturevalue' => 'Nejmenší clona',
'exif-subjectdistance' => 'Vzdálenost k předmětu',
'exif-meteringmode' => 'Způsob měření',
'exif-lightsource' => 'Světelný zdroj',
'exif-flash' => 'Blesk',
'exif-focallength' => 'Ohnisková vzdálenost',
'exif-subjectarea' => 'Umístění předmětu',
'exif-flashenergy' => 'Výkon blesku',
'exif-focalplanexresolution' => 'X rozlišení ohniskové roviny',
'exif-focalplaneyresolution' => 'Y rozlišení ohniskové roviny',
'exif-focalplaneresolutionunit' => 'Jednotka rozlišení ohniskové roviny',
'exif-subjectlocation' => 'Umístění předmětu',
'exif-exposureindex' => 'Expoziční index',
'exif-sensingmethod' => 'Senzor',
'exif-filesource' => 'Zdroj souboru',
'exif-scenetype' => 'Druh scény',
'exif-customrendered' => 'Uživatelské zpracování',
'exif-exposuremode' => 'Expoziční režim',
'exif-whitebalance' => 'Vyvážení bílé',
'exif-digitalzoomratio' => 'Digitální zoom',
'exif-focallengthin35mmfilm' => 'Ekvivalent ohniskové délky pro 35mm film',
'exif-scenecapturetype' => 'Druh scény',
'exif-gaincontrol' => 'Úprava světlosti',
'exif-contrast' => 'Kontrast',
'exif-saturation' => 'Sytost',
'exif-sharpness' => 'Ostrost',
'exif-devicesettingdescription' => 'Popis nastavení zařízení',
'exif-subjectdistancerange' => 'Vzdálenost k předmětu',
'exif-imageuniqueid' => 'Unikátní ID obrázku',
'exif-gpsversionid' => 'Verze GPS tagu',
'exif-gpslatituderef' => 'Severní/jižní zeměpisná šířka',
'exif-gpslatitude' => 'Zeměpisná šířka',
'exif-gpslongituderef' => 'Východní/západní zeměpisná délka',
'exif-gpslongitude' => 'Zeměpisná délka',
'exif-gpsaltituderef' => 'Nad/podmořská výška/hloubka',
'exif-gpsaltitude' => 'Nadmořská výška',
'exif-gpstimestamp' => 'GPS čas (podle atomových hodin)',
'exif-gpssatellites' => 'Satelity použité pro měření',
'exif-gpsstatus' => 'Stav přijímače',
'exif-gpsmeasuremode' => 'Režim měření',
'exif-gpsdop' => 'Přesnost měření',
'exif-gpsspeedref' => 'Jednotka rychlosti',
'exif-gpsspeed' => 'Rychlost GPS přijímače',
'exif-gpstrackref' => 'Reference pro směr pohybu',
'exif-gpstrack' => 'Směr pohybu',
'exif-gpsimgdirectionref' => 'Reference pro orientaci obrázku',
'exif-gpsimgdirection' => 'Orientace obrázku',
'exif-gpsmapdatum' => 'Použitý geodetický systém',
'exif-gpsdestlatituderef' => 'Severní/jižní zeměpisná šířka předmětu',
'exif-gpsdestlatitude' => 'Zeměpisná šířka předmětu',
'exif-gpsdestlongituderef' => 'Východní/západní zeměpisná délka předmětu',
'exif-gpsdestlongitude' => 'Zeměpisná délka předmětu',
'exif-gpsdestbearingref' => 'Reference pro směr k předmětu',
'exif-gpsdestbearing' => 'Směr k předmětu',
'exif-gpsdestdistanceref' => 'Jednotka vzdálenosti k předmětu',
'exif-gpsdestdistance' => 'Vzdálenost k předmětu',
'exif-gpsprocessingmethod' => 'Označení metody zpracování GPS dat',
'exif-gpsareainformation' => 'Označení GPS oblasti',
'exif-gpsdatestamp' => 'Datum podle GPS',
'exif-gpsdifferential' => 'Diferenciální korekce GPS',
'exif-jpegfilecomment' => 'Poznámky ze souboru JPEG',
'exif-keywords' => 'Klíčová slova',
'exif-worldregioncreated' => 'Část světa, ve které byl snímek pořízen',
'exif-countrycreated' => 'Země, ve které byl snímek pořízen',
'exif-countrycodecreated' => 'Kód země, ve které byl snímek pořízen',
'exif-provinceorstatecreated' => 'Provincie nebo stát, kde byl snímek pořízen',
'exif-citycreated' => 'Město, ve kterém byl snímek pořízen',
'exif-sublocationcreated' => 'Část města, ve které byl snímek pořízen',
'exif-worldregiondest' => 'Zobrazená část světa',
'exif-countrydest' => 'Zobrazená země',
'exif-countrycodedest' => 'Kód zobrazené země',
'exif-provinceorstatedest' => 'Zobrazená provincie nebo stát',
'exif-citydest' => 'Zobrazené město',
'exif-sublocationdest' => 'Zobrazená část města',
'exif-objectname' => 'Krátký název',
'exif-specialinstructions' => 'Zvláštní pokyny',
'exif-headline' => 'Nadpis',
'exif-credit' => 'Zdroj/poskytovatel',
'exif-source' => 'Zdroj',
'exif-editstatus' => 'Redakční stav obrázku',
'exif-urgency' => 'Spěšnost',
'exif-fixtureidentifier' => 'Název pořadu',
'exif-locationdest' => 'Zobrazené místo',
'exif-locationdestcode' => 'Kód zobrazeného místa',
'exif-objectcycle' => 'Denní doba, pro kterou je soubor určen',
'exif-contact' => 'Kontaktní údaje',
'exif-writer' => 'Autor popisu',
'exif-languagecode' => 'Jazyk',
'exif-iimversion' => 'Verze IIM',
'exif-iimcategory' => 'Kategorie',
'exif-iimsupplementalcategory' => 'Doplňkové kategorie',
'exif-datetimeexpires' => 'Nepoužívat po',
'exif-datetimereleased' => 'K použití od',
'exif-originaltransmissionref' => 'Kód pro dohledání původního přenosu',
'exif-identifier' => 'Identifikátor',
'exif-lens' => 'Použitý objektiv',
'exif-serialnumber' => 'Sériové číslo přístroje',
'exif-cameraownername' => 'Majitel přístroje',
'exif-label' => 'Štítek',
'exif-datetimemetadata' => 'Datum poslední úpravy metadat',
'exif-nickname' => 'Neformální název obrázku',
'exif-rating' => 'Hodnocení (1–5)',
'exif-rightscertificate' => 'Certifikát řízení práv',
'exif-copyrighted' => 'Stav autorských práv',
'exif-copyrightowner' => 'Držitel autorských práv',
'exif-usageterms' => 'Podmínky užití',
'exif-webstatement' => 'Online informace o autorských právech',
'exif-originaldocumentid' => 'Unikátní ID původního dokumentu',
'exif-licenseurl' => 'URL licence',
'exif-morepermissionsurl' => 'Informace o jiném licencování',
'exif-attributionurl' => 'Pokud užíváte toto dílo, uveďte odkaz',
'exif-preferredattributionname' => 'Pokud užíváte toto dílo, uveďte jako autora',
'exif-pngfilecomment' => 'Poznámky ze souboru PNG',
'exif-disclaimer' => 'Vyloučení odpovědnosti',
'exif-contentwarning' => 'Upozornění k obsahu',
'exif-giffilecomment' => 'Poznámky ze souboru GIF',
'exif-intellectualgenre' => 'Typ položky',
'exif-subjectnewscode' => 'Kód tématu',
'exif-scenecode' => 'IPTC kód záběru',
'exif-event' => 'Zobrazená událost',
'exif-organisationinimage' => 'Zobrazená organizace',
'exif-personinimage' => 'Zobrazená osoba',
'exif-originalimageheight' => 'Výška obrázku před oříznutím',
'exif-originalimagewidth' => 'Šířka obrázku před oříznutím',

# EXIF attributes
'exif-compression-1' => 'Nekomprimovaný',
'exif-compression-2' => '1-rozměrné modifikované Huffmanovo kódování délky běhu CCITT Group 3',
'exif-compression-3' => 'Kódování faxů CCITT Group 3',
'exif-compression-4' => 'Kódování faxů CCITT Group 4',

'exif-copyrighted-true' => 'Chráněno autorským právem',
'exif-copyrighted-false' => 'Volné dílo',

'exif-unknowndate' => 'neznámé datum',

'exif-orientation-1' => 'Normální',
'exif-orientation-2' => 'Vodorovně převráceno',
'exif-orientation-3' => 'Otočeno o 180°',
'exif-orientation-4' => 'Svisle převráceno',
'exif-orientation-5' => 'Otočeno o 90° proti směru hodinových ručiček a svisle převráceno',
'exif-orientation-6' => 'Otočeno o 90° proti směru hodinových ručiček',
'exif-orientation-7' => 'Otočeno o 90° ve směru hodinových ručiček a svisle převráceno',
'exif-orientation-8' => 'Otočeno o 90° po směru hodinových ručiček',

'exif-planarconfiguration-1' => 'chunky',
'exif-planarconfiguration-2' => 'planar',

'exif-colorspace-65535' => 'Nekalibrováno',

'exif-componentsconfiguration-0' => 'neexistuje',

'exif-exposureprogram-0' => 'Neuvedeno',
'exif-exposureprogram-1' => 'Ruční',
'exif-exposureprogram-2' => 'Normální',
'exif-exposureprogram-3' => 'Priorita clony',
'exif-exposureprogram-4' => 'Priorita závěrky',
'exif-exposureprogram-5' => 'Kreativní (lepší hloubka ostrosti)',
'exif-exposureprogram-6' => 'Akce (rychlejší závěrka)',
'exif-exposureprogram-7' => 'Portrét (detailní fotografie s neostrým pozadím)',
'exif-exposureprogram-8' => 'Krajina (fotografie krajiny s ostrým pozadím)',

'exif-subjectdistance-value' => '$1 m',

'exif-meteringmode-0' => 'Není známo',
'exif-meteringmode-1' => 'Průměrové',
'exif-meteringmode-2' => 'Vážený průměr',
'exif-meteringmode-3' => 'Bodové',
'exif-meteringmode-4' => 'Zónové',
'exif-meteringmode-5' => 'Vzorkové',
'exif-meteringmode-6' => 'Částečné',
'exif-meteringmode-255' => 'Jiné',

'exif-lightsource-0' => 'Není známo',
'exif-lightsource-1' => 'Denní světlo',
'exif-lightsource-2' => 'Fluorescenční',
'exif-lightsource-3' => 'Žárovka',
'exif-lightsource-4' => 'Blesk',
'exif-lightsource-9' => 'Jasno',
'exif-lightsource-10' => 'Zamračeno',
'exif-lightsource-11' => 'Stín',
'exif-lightsource-12' => 'Zářivka denní světlo (D 5700 – 7100K)',
'exif-lightsource-13' => 'Zářivka bílé denní světlo (N 4600 – 5400K)',
'exif-lightsource-14' => 'Zářivka studená bílá (W 3900 – 4500K)',
'exif-lightsource-15' => 'Bílá zářivka (WW 3200 – 3700K)',
'exif-lightsource-17' => 'Standardní osvětlení A',
'exif-lightsource-18' => 'Standardní osvětlení B',
'exif-lightsource-19' => 'Standardní osvětlení C',
'exif-lightsource-24' => 'ISO studiová žárovka',
'exif-lightsource-255' => 'Jiný světelný zdroj',

# Flash modes
'exif-flash-fired-0' => 'Blesk nebyl použit',
'exif-flash-fired-1' => 'Blesk byl použit',
'exif-flash-return-0' => 'funkce pro rozpoznání odrazů blesku není k dispozici',
'exif-flash-return-2' => 'odraz blesku nebyl zaznamenán',
'exif-flash-return-3' => 'byl zaznamenán odraz blesku',
'exif-flash-mode-1' => 'vynucené použití blesku',
'exif-flash-mode-2' => 'použití blesku zakázáno',
'exif-flash-mode-3' => 'automatický režim',
'exif-flash-function-1' => 'Blesk není k dispozici',
'exif-flash-redeye-1' => 'režim potlačení jevu červených očí',

'exif-focalplaneresolutionunit-2' => 'in',

'exif-sensingmethod-1' => 'Není známo',
'exif-sensingmethod-2' => 'Jednočipový plošný senzor',
'exif-sensingmethod-3' => 'Dvoučipový plošný senzor',
'exif-sensingmethod-4' => 'Tříčipový plošný senzor',
'exif-sensingmethod-5' => 'Sekvenční plošný senzor',
'exif-sensingmethod-7' => 'Trilineární senzor',
'exif-sensingmethod-8' => 'Sekvenční lineární senzor',

'exif-filesource-3' => 'Digitální fotoaparát',

'exif-scenetype-1' => 'Přímo fotografováno',

'exif-customrendered-0' => 'Běžné zpracování',
'exif-customrendered-1' => 'Uživatelské zpracování',

'exif-exposuremode-0' => 'Automatická expozice',
'exif-exposuremode-1' => 'Ruční expozice',
'exif-exposuremode-2' => 'Bracketing',

'exif-whitebalance-0' => 'Automatické vyvážení bílé',
'exif-whitebalance-1' => 'Ruční vyvážení bílé',

'exif-scenecapturetype-0' => 'Standardní',
'exif-scenecapturetype-1' => 'Na šířku',
'exif-scenecapturetype-2' => 'Na výšku',
'exif-scenecapturetype-3' => 'Noční scéna',

'exif-gaincontrol-0' => 'Žádná',
'exif-gaincontrol-1' => 'Mírné zvýšení jasu',
'exif-gaincontrol-2' => 'Výrazné zvýšení jasu',
'exif-gaincontrol-3' => 'Mírné snížení jasu',
'exif-gaincontrol-4' => 'Výrazné snížení jasu',

'exif-contrast-0' => 'Normální',
'exif-contrast-1' => 'Měkký',
'exif-contrast-2' => 'Tvrdý',

'exif-saturation-0' => 'Normální',
'exif-saturation-1' => 'Nízká sytost',
'exif-saturation-2' => 'Vysoká sytost',

'exif-sharpness-0' => 'Normální',
'exif-sharpness-1' => 'Měkká',
'exif-sharpness-2' => 'Tvrdá',

'exif-subjectdistancerange-0' => 'Není známo',
'exif-subjectdistancerange-1' => 'Makro',
'exif-subjectdistancerange-2' => 'Detail',
'exif-subjectdistancerange-3' => 'Pohled zdálky',

# Pseudotags used for GPSLatitudeRef and GPSDestLatitudeRef
'exif-gpslatitude-n' => 'Severní šířka',
'exif-gpslatitude-s' => 'Jižní šířka',

# Pseudotags used for GPSLongitudeRef and GPSDestLongitudeRef
'exif-gpslongitude-e' => 'Východní délka',
'exif-gpslongitude-w' => 'Západní délka',

# Pseudotags used for GPSAltitudeRef
'exif-gpsaltitude-above-sealevel' => '$1 {{PLURAL:$1|metr|metry|metrů}} nad mořem',
'exif-gpsaltitude-below-sealevel' => '$1 {{PLURAL:$1|metr|metry|metrů}} pod úrovní moře',

'exif-gpsstatus-a' => 'Probíhá měření',
'exif-gpsstatus-v' => 'Měření mimo provoz',

'exif-gpsmeasuremode-2' => 'Dvourozměrné měření',
'exif-gpsmeasuremode-3' => 'Trojrozměrné měření',

# Pseudotags used for GPSSpeedRef
'exif-gpsspeed-k' => 'km/h',
'exif-gpsspeed-m' => 'mph',
'exif-gpsspeed-n' => 'kt',

# Pseudotags used for GPSDestDistanceRef
'exif-gpsdestdistance-k' => 'Kilometry',
'exif-gpsdestdistance-m' => 'Míle',
'exif-gpsdestdistance-n' => 'Námořní míle',

'exif-gpsdop-excellent' => 'Výtečná ($1)',
'exif-gpsdop-good' => 'Dobrá ($1)',
'exif-gpsdop-moderate' => 'Střední ($1)',
'exif-gpsdop-fair' => 'Ucházející ($1)',
'exif-gpsdop-poor' => 'Špatná ($1)',

'exif-objectcycle-a' => 'Pouze dopoledne',
'exif-objectcycle-p' => 'Pouze odpoledne',
'exif-objectcycle-b' => 'Dopoledne i odpoledne',

# Pseudotags used for GPSTrackRef, GPSImgDirectionRef and GPSDestBearingRef
'exif-gpsdirection-t' => 'Pravý kurs',
'exif-gpsdirection-m' => 'Magnetický kurs',

'exif-ycbcrpositioning-1' => 'Uprostřed',
'exif-ycbcrpositioning-2' => 'U sebe',

'exif-dc-contributor' => 'Přispěvatelé',
'exif-dc-coverage' => 'Místní nebo časový rozsah média',
'exif-dc-date' => 'Datum (data)',
'exif-dc-publisher' => 'Vydavatel',
'exif-dc-relation' => 'Související média',
'exif-dc-rights' => 'Práva',
'exif-dc-source' => 'Zdrojové médium',
'exif-dc-type' => 'Typ média',

'exif-rating-rejected' => 'Vyřazeno',

'exif-isospeedratings-overflow' => 'Větší než 65535',

'exif-iimcategory-ace' => 'Kultura, umění a zábava',
'exif-iimcategory-clj' => 'Zločin a právo',
'exif-iimcategory-dis' => 'Nehody a neštěstí',
'exif-iimcategory-fin' => 'Ekonomika a obchod',
'exif-iimcategory-edu' => 'Vzdělávání',
'exif-iimcategory-evn' => 'Životní prostředí',
'exif-iimcategory-hth' => 'Zdraví',
'exif-iimcategory-hum' => 'Lidské záliby',
'exif-iimcategory-lab' => 'Práce',
'exif-iimcategory-lif' => 'Volný čas a životní styl',
'exif-iimcategory-pol' => 'Politika',
'exif-iimcategory-rel' => 'Víra a náboženství',
'exif-iimcategory-sci' => 'Věda a technika',
'exif-iimcategory-soi' => 'Sociální problematika',
'exif-iimcategory-spo' => 'Sport',
'exif-iimcategory-war' => 'Války, konflikty a nepokoje',
'exif-iimcategory-wea' => 'Počasí',

'exif-urgency-normal' => 'Normální ($1)',
'exif-urgency-low' => 'Nízká ($1)',
'exif-urgency-high' => 'Vysoká ($1)',
'exif-urgency-other' => 'Uživatelsky definovaná ($1)',

# External editor support
'edit-externally' => 'Editovat tento soubor v externím programu',
'edit-externally-help' => '(Více informací najdete v [//www.mediawiki.org/wiki/Manual:External_editors nápovědě pro nastavení].)',

# 'all' in various places, this might be different for inflected languages
'watchlistall2' => 'všechny',
'namespacesall' => 'všechny',
'monthsall' => 'všechny',
'limitall' => 'vše',

# E-mail address confirmation
'confirmemail' => 'Potvrzení e-mailové adresy',
'confirmemail_noemail' => 'Ve svém [[Special:Preferences|uživatelském nastavení]] jste nezadali platnou e-mailovou adresu.',
'confirmemail_text' => 'Tato wiki vyžaduje, abyste před využíváním některých funkcí potvrdili svoji e-mailovou adresu. Kliknutím na tlačítko níže odešlete potvrzovací e-mail na vámi uvedenou adresu. Tento e-mail obsahuje odkaz a potvrzovací kód; zobrazením odkazované stránky ve svém internetovém prohlížeči potvrdíte, že zadaná adresa je platná.',
'confirmemail_pending' => 'Potvrzovací kód vám byl již zaslán na váš e-mail.
Pokud jste si účet založili před chvílí, zkuste na doručení kódu několik minut počkat, než požádáte o nový.',
'confirmemail_send' => 'Odeslat potvrzovací kód',
'confirmemail_sent' => 'Potvrzovací e-mail byl odeslán',
'confirmemail_oncreate' => 'Na vaši e-mailovou adresu byl zaslán potvrzovací kód.
Tento kód není zapotřebí k přihlášení, ale budete ho potřebovat k aktivaci některých funkcí založených na využití e-mailu.',
'confirmemail_sendfailed' => '{{GRAMMAR:3sg|{{SITENAME}}}} se nepodařilo odeslat potvrzovací e-mail. Zkontrolujte, zda e-mailová adresa neobsahuje chybné znaky.

Poštovní program hlásí: $1',
'confirmemail_invalid' => 'Neplatný potvrzovací kód. Možná již vypršela platnost kódu.',
'confirmemail_needlogin' => 'Pro potvrzení své e-mailové adresy se musíte $1.',
'confirmemail_success' => 'Vaše e-mailová adresa byla potvrzena. Nyní se můžete přihlásit a používat wiki.',
'confirmemail_loggedin' => 'Vaše e-mailová adresa byla potvrzena.',
'confirmemail_error' => 'Nepodařilo se uložit vaše potvrzení.',
'confirmemail_subject' => 'Potvrzení e-mailové adresy pro {{grammar:4sg|{{SITENAME}}}}',
'confirmemail_body' => 'Někdo (patrně vy, z IP adresy $1) si registroval účet se jménem "$2" a touto e-mailovou adresou na {{grammar:6sg|{{SITENAME}}}}.

Pokud si přejete aktivovat e-mailové funkce na {{grammar:6sg|{{SITENAME}}}}, tak pro potvrzení, že tato adresa opravdu patří vám, přejděte svým internetovým prohlížečem na následující adresu:

$3

Pokud jste o toto potvrzení *nežádali*, klikněte na následující odkaz, čímž potvrzení zrušíte:

$5

Platnost tohoto potvrzovacího kódu vyprší $4.',
'confirmemail_body_changed' => 'Někdo (patrně vy, z IP adresy $1)
změnil e-mailovou adresu k účtu "$2" na {{grammar:6sg|{{SITENAME}}}} na tuto adresu.

Pokud si přejete aktivovat e-mailové funkce na {{grammar:6sg|{{SITENAME}}}},
tak pro potvrzení, že tato adresa opravdu patří vám, přejděte svým
internetovým prohlížečem na následující adresu:

$3

Pokud jste o toto potvrzení *nežádali*, klikněte na následující odkaz,
čímž potvrzení zrušíte:

$5

Platnost tohoto potvrzovacího kódu vyprší $4.',
'confirmemail_body_set' => 'Někdo (patrně vy, z IP adresy $1) nastavil e-mailovou adresu
účtu „$2“ na {{grammar:6sg|{{SITENAME}}}} na tuto adresu.

Pokud si přejete znovu aktivovat e-mailové funkce na
{{grammar:6sg|{{SITENAME}}}}, tak pro potvrzení, že tato adresa opravdu
patří vám, přejděte svým internetovým prohlížečem na následující adresu:

$3

Pokud vám tento účet *nepatří*, klikněte na následující
odkaz, čímž potvrzení zrušíte:

$5

Platnost tohoto potvrzovacího kódu vyprší $4.',
'confirmemail_invalidated' => 'Potvrzení e-mailové adresy bylo zrušeno',
'invalidateemail' => 'Zrušit potvrzení e-mailové adresy',

# Scary transclusion
'scarytranscludedisabled' => '[Vkládání šablon mezi wiki je vypnuto]',
'scarytranscludefailed' => '[Nepodařilo se načíst šablonu pro $1]',
'scarytranscludefailed-httpstatus' => '[Nepodařilo se načíst šablonu pro $1: HTTP $2]',
'scarytranscludetoolong' => '[Příliš dlouhé URL]',

# Delete conflict
'deletedwhileediting' => "'''Upozornění''': V průběhu vaší editace byla tato stránka smazána!",
'confirmrecreate' => 'Uživatel [[User:$1|$1]] ([[User talk:$1|diskuse]]) tuto stránku smazal poté, co jste začali editovat, s odůvodněním:
: „$2“
Opravdu si přejete znovu tuto stránku založit?',
'confirmrecreate-noreason' => '{{gender:$1|Uživatel|Uživatelka|Uživatel}} [[User:$1|$1]] ([[User talk:$1|diskuse]]) {{gender:$1|smazal|smazala|smazal}} tuto stránku poté, co jste {{gender:|začal|začala|začali}} s editací. Potvrďte, zda chcete stránku skutečně znovu založit.',
'recreate' => 'Znovu založit',

# action=purge
'confirm_purge_button' => 'OK',
'confirm-purge-top' => 'Aktualizovat cachovanou verzi této stránky?',
'confirm-purge-bottom' => 'Aktualizace stránky vymaže cache a vynutí zobrazení nejaktuálnější verze.',

# action=watch/unwatch
'confirm-watch-button' => 'OK',
'confirm-watch-top' => 'Přidat tuto stránku mezi sledované?',
'confirm-unwatch-button' => 'OK',
'confirm-unwatch-top' => 'Vyjmout tuto stránku ze sledovaných?',

# Separators for various lists, etc.
'autocomment-prefix' => '–&#32;',
'ellipsis' => '…',
'percent' => '$1&nbsp;%',

# Multipage image navigation
'imgmultipageprev' => '← předchozí stránka',
'imgmultipagenext' => 'následující stránka →',
'imgmultigo' => 'Jít!',
'imgmultigoto' => 'Jít na stranu $1',

# Table pager
'ascending_abbrev' => 'vzest.',
'descending_abbrev' => 'sest.',
'table_pager_next' => 'Následující stránka',
'table_pager_prev' => 'Předchozí stránka',
'table_pager_first' => 'První stránka',
'table_pager_last' => 'Poslední stránka',
'table_pager_limit' => 'Zobrazit $1 položek na stránku',
'table_pager_limit_label' => 'Položek na stránce:',
'table_pager_limit_submit' => 'Zobrazit',
'table_pager_empty' => 'Nic nebylo nalezeno',

# Auto-summaries
'autosumm-blank' => 'Stránka vyprázdněna',
'autosumm-replace' => 'Obsah stránky nahrazen textem „$1“',
'autoredircomment' => 'Přesměrování na [[$1]]',
'autosumm-new' => 'Založena nová stránka: $1',

# Size units
'size-kilobytes' => '$1 KB',

# Live preview
'livepreview-loading' => 'Nahrávám…',
'livepreview-ready' => 'Nahrávám… Připraven!',
'livepreview-failed' => 'Rychlý náhled není dostupný! Použijte normální náhled.',
'livepreview-error' => 'Neúspěšné spojení: $1 "$2". Použijte normální náhled.',

# Friendlier slave lag warnings
'lag-warn-normal' => 'Změny za {{PLURAL:$1|poslední sekundu|poslední $1 sekundy|posledních $1 sekund}} nemusí být v tomto seznamu zobrazeny.',
'lag-warn-high' => 'Protože je databázový server právě mimořádně vytížen, nemusí být změny za {{PLURAL:$1|poslední sekundu|poslední $1 sekundy|posledních $1 sekund}} v tomto seznamu zobrazeny.',

# Watchlist editor
'watchlistedit-numitems' => 'Váš seznam sledovaných stránek obsahuje (mimo diskusních stránek) {{PLURAL:$1|1 položku|$1 položky|$1 položek}}.',
'watchlistedit-noitems' => 'Váš seznam sledovaných stránek neobsahuje žádnou položku.',
'watchlistedit-normal-title' => 'Editace seznamu sledovaných stránek',
'watchlistedit-normal-legend' => 'Odstranění položek ze seznamu sledovaných stránek',
'watchlistedit-normal-explain' => 'Položky vašeho seznamu sledovaných stránek jsou zobrazeny níže.
Stránku můžete ze seznamu odstranit tak, že zaškrtnete její políčko a kliknete na tlačítko „{{int:Watchlistedit-normal-submit}}“.
Také můžete [[Special:EditWatchlist/raw|editovat seznam v textové podobě]].',
'watchlistedit-normal-submit' => 'Odstranit položky',
'watchlistedit-normal-done' => '{{PLURAL:$1|Byla odstraněna 1 položka|Byly odstraněny $1 položky|Bylo odstraněno $1 položek}} z Vašeho seznamu sledovaných stránek:',
'watchlistedit-raw-title' => 'Textový režim editace seznamu',
'watchlistedit-raw-legend' => 'Editace textového souboru sledovaných stránek',
'watchlistedit-raw-explain' => 'Položky na vašem seznamu sledovaných stránek jsou zobrazeny níže. Můžete je přidávat, odstraňovat či měnit v zobrazeném seznamu – jedna řádka je jedna položka.
Pro uložení změn stiskněte tlačítko „{{int:Watchlistedit-raw-submit}}“.
Seznam editovaných stránek můžete také [[Special:EditWatchlist|editovat ve standardním editoru]].',
'watchlistedit-raw-titles' => 'Položky:',
'watchlistedit-raw-submit' => 'Aktualizovat seznam',
'watchlistedit-raw-done' => 'Seznam vašich sledovaných stránek byl aktualizován.',
'watchlistedit-raw-added' => '{{PLURAL:$1|Byla přidána 1 položka|Byly přidány $1 položky|Bylo přidáno $1 položek}}:',
'watchlistedit-raw-removed' => '{{PLURAL:$1|Byla odstraněna položka|Byly odstraněny $1 položky|Bylo odstraněno $1 položek}}:',

# Watchlist editing tools
'watchlisttools-view' => 'Zobrazit změny sledovaných stránek',
'watchlisttools-edit' => 'Zobrazit a editovat seznam sledovaných stránek',
'watchlisttools-raw' => 'Editovat textový soubor sledovaných stránek',

# Iranian month names
'iranian-calendar-m1' => 'Farvardín',
'iranian-calendar-m2' => 'Ordíbehešt',
'iranian-calendar-m3' => 'Chordád',
'iranian-calendar-m4' => 'Tír',
'iranian-calendar-m5' => 'Mordád',
'iranian-calendar-m6' => 'Šahrívár',
'iranian-calendar-m9' => 'Ázár',
'iranian-calendar-m10' => 'Dej',
'iranian-calendar-m11' => 'Bahmán',

# Hijri month names
'hijri-calendar-m1' => 'muharram',
'hijri-calendar-m2' => 'safar',
'hijri-calendar-m3' => "rabí' al-avval",
'hijri-calendar-m4' => "rabí'ath-thání",
'hijri-calendar-m5' => 'džumádá l-úlá',
'hijri-calendar-m6' => 'džumádá l-áchira',
'hijri-calendar-m7' => 'radžab',
'hijri-calendar-m8' => "ša'bán",
'hijri-calendar-m9' => 'ramadán',
'hijri-calendar-m10' => 'šauvál',
'hijri-calendar-m11' => "dhú l-ka'da",
'hijri-calendar-m12' => 'dhú l-hidždža',

# Hebrew month names
'hebrew-calendar-m1' => 'tišri',
'hebrew-calendar-m2' => 'chešvan',
'hebrew-calendar-m3' => 'kislev',
'hebrew-calendar-m4' => 'tevet',
'hebrew-calendar-m5' => 'švat',
'hebrew-calendar-m6' => 'adar',
'hebrew-calendar-m6a' => 'adar I',
'hebrew-calendar-m6b' => 'adar II',
'hebrew-calendar-m7' => 'nisan',
'hebrew-calendar-m8' => 'ijar',
'hebrew-calendar-m9' => 'sivan',
'hebrew-calendar-m10' => 'tamuz',
'hebrew-calendar-m11' => 'av',
'hebrew-calendar-m12' => 'elul',
'hebrew-calendar-m1-gen' => 'tišri',
'hebrew-calendar-m2-gen' => 'chešvanu',
'hebrew-calendar-m3-gen' => 'kislevu',
'hebrew-calendar-m4-gen' => 'tevetu',
'hebrew-calendar-m5-gen' => 'švatu',
'hebrew-calendar-m6-gen' => 'adaru',
'hebrew-calendar-m6a-gen' => 'adaru I',
'hebrew-calendar-m6b-gen' => 'adaru II',
'hebrew-calendar-m7-gen' => 'nisanu',
'hebrew-calendar-m8-gen' => 'ijaru',
'hebrew-calendar-m9-gen' => 'sivanu',
'hebrew-calendar-m10-gen' => 'tamuzu',
'hebrew-calendar-m11-gen' => 'avu',
'hebrew-calendar-m12-gen' => 'elulu',

# Signatures
'signature' => '[[{{ns:user}}:$1|$2]] ([[{{ns:user_talk}}:$1|diskuse]])',

# Core parser functions
'unknown_extension_tag' => 'Neznámá značka rozšíření: „$1“',
'duplicate-defaultsort' => 'Upozornění: Implicitní klíč řazení (DEFAULTSORTKEY) „$2“ přepisuje dříve nastavenou hodnotu „$1“.',

# Special:Version
'version' => 'Verze',
'version-extensions' => 'Nainstalovaná rozšíření',
'version-specialpages' => 'Speciální stránky',
'version-parserhooks' => 'Přípojné body parseru',
'version-variables' => 'Proměnné',
'version-antispam' => 'Ochrana proti spamu',
'version-skins' => 'Vzhledy',
'version-other' => 'Jiné',
'version-mediahandlers' => 'Obsluha médií',
'version-hooks' => 'Přípojné body',
'version-extension-functions' => 'Rozšiřující funkce',
'version-parser-extensiontags' => 'Přidané syntaktické značky',
'version-parser-function-hooks' => 'Funkce parseru',
'version-hook-name' => 'Název přípojného bodu',
'version-hook-subscribedby' => 'Volán z',
'version-version' => '(Verze $1)',
'version-license' => 'Licence',
'version-poweredby-credits' => "Tato wiki běží na '''[//www.mediawiki.org/ MediaWiki]''', copyright © 2001–$1 $2.",
'version-poweredby-others' => 'další',
'version-credits-summary' => 'Následujícím lidem bychom rádi poděkovali za jejich příspěvky [[Special:Version|MediaWiki]].',
'version-license-info' => 'MediaWiki je svobodný software; můžete jej šířit nebo modifikovat podle podmínek GNU General Public License, vydávané Free Software Foundation; buď verze 2 této licence anebo (podle vašeho uvážení) kterékoli pozdější verze.

MediaWiki je distribuována v naději, že bude užitečná, avšak BEZ JAKÉKOLI ZÁRUKY; neposkytují se ani odvozené záruky PRODEJNOSTI anebo VHODNOSTI PRO URČITÝ ÚČEL. Podrobnosti se dočtete v textu GNU General Public License.

[{{SERVER}}{{SCRIPTPATH}}/COPYING Kopii GNU General Public License] jste měli obdržet spolu s tímto programem, pokud ne, napište na Free Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA nebo [//www.gnu.org/licenses/old-licenses/gpl-2.0.html si ji přečtěte online].',
'version-software' => 'Nainstalovaný software',
'version-software-product' => 'Název',
'version-software-version' => 'Verze',
'version-entrypoints' => 'URL vstupních bodů',
'version-entrypoints-header-entrypoint' => 'Vstupní bod',
'version-entrypoints-header-url' => 'URL',
'version-entrypoints-articlepath' => '[https://www.mediawiki.org/wiki/Manual:$wgArticlePath Cesta k článkům]',
'version-entrypoints-scriptpath' => '[https://www.mediawiki.org/wiki/Manual:$wgScriptPath Cesta ke skriptům]',

# Special:FilePath
'filepath' => 'Cesta k souboru',
'filepath-page' => 'Soubor:',
'filepath-submit' => 'Přejít',
'filepath-summary' => 'Tato speciální stránka vrátí úplnou cestu k souboru.
Obrázky se zobrazí v plném rozlišení, jiné typy souborů se otevřenou v přiřazených programech.',

# Special:FileDuplicateSearch
'fileduplicatesearch' => 'Hledání duplicitních souborů',
'fileduplicatesearch-summary' => 'Hledání duplicitních souborů podle jejich hašů.',
'fileduplicatesearch-legend' => 'Hledání duplikátů',
'fileduplicatesearch-filename' => 'Jméno souboru:',
'fileduplicatesearch-submit' => 'Hledat',
'fileduplicatesearch-info' => '(rozměr: $1 × $2 pixelů, velikost souboru: $3, MIME typ: $4)',
'fileduplicatesearch-result-1' => 'Soubor „$1“ nemá žádný identický duplikát.',
'fileduplicatesearch-result-n' => 'Soubor „$1“ má {{PLURAL:$2|jeden identický duplikát|$2 identické duplikáty|$2 identických duplikátů}}.',
'fileduplicatesearch-noresults' => 'Žádný soubor s názvem „$1“ nebyl nalezen.',

# Special:SpecialPages
'specialpages' => 'Speciální stránky',
'specialpages-note' => '----
* Normální speciální stránky
* <span class="mw-specialpagerestricted">Speciální stránky s&nbsp;vyhrazeným přístupem</span>
* <span class="mw-specialpagecached">Speciální stránky z&nbsp;cache (mohou být zastaralé)</span>',
'specialpages-group-maintenance' => 'Údržba',
'specialpages-group-other' => 'Ostatní',
'specialpages-group-login' => 'Přihlášení / vytvoření účtu',
'specialpages-group-changes' => 'Poslední změny a záznamy',
'specialpages-group-media' => 'Média',
'specialpages-group-users' => 'Uživatelé a skupiny',
'specialpages-group-highuse' => 'Často používané stránky',
'specialpages-group-pages' => 'Seznamy stránek',
'specialpages-group-pagetools' => 'Nástroje ke stránkám',
'specialpages-group-wiki' => 'Informace a nástroje k celé wiki',
'specialpages-group-redirects' => 'Přesměrovávací speciální stránky',
'specialpages-group-spam' => 'Protispamové nástroje',

# Special:BlankPage
'blankpage' => 'Prázdná stránka',
'intentionallyblankpage' => 'Tato stránka je úmyslně prázdná. Používá se na měření výkonnosti atd.',

# External image whitelist
'external_image_whitelist' => ' #Tuto řádku ponechte beze změny.<pre>
#Níže uveďte fragmenty regulárních výrazů (pouze část mezi //).
#Tyto výrazy se aplikují na URL vkládaných externích obrázků.
#Ty, které vyhoví, se zobrazí jako obrázek; ostatní pouze jako externí odkaz.
#Řádky začínající znakem # se považují za komentáře.
#Na velikosti písmen nezáleží.

#Všechny regulární výrazy uveďte nad touto řádkou. Tuto řádku ponechte beze změny.</pre>',

# Special:Tags
'tags' => 'Platné značky pro změny',
'tag-filter' => 'Filtr podle [[Special:Tags|značek]]:',
'tag-filter-submit' => 'Filtrovat',
'tags-title' => 'Značky',
'tags-intro' => 'Tato stránka obsahuje seznam značek, kterými může software označovat jednotlivé editace, a jejich významy.',
'tags-tag' => 'Název značky',
'tags-display-header' => 'Zobrazení na seznamech změn',
'tags-description-header' => 'Úplný popis významu',
'tags-hitcount-header' => 'Označené změny',
'tags-edit' => 'editovat',
'tags-hitcount' => '$1 {{PLURAL:$1|změna|změny|změn}}',

# Special:ComparePages
'comparepages' => 'Porovnání stránek',
'compare-selector' => 'Porovnání revizí stránek',
'compare-page1' => 'Stránka 1',
'compare-page2' => 'Stránka 2',
'compare-rev1' => 'Revize 1',
'compare-rev2' => 'Revize 2',
'compare-submit' => 'Porovnat',
'compare-invalid-title' => 'Zadaný název je neplatný.',
'compare-title-not-exists' => 'Zadaný název neexistuje.',
'compare-revision-not-exists' => 'Zadaná revize neexistuje.',

# Database error messages
'dberr-header' => 'Tato wiki má nějaké potíže',
'dberr-problems' => 'Promiňte! Tento server má v tuto chvíli technické problémy.',
'dberr-again' => 'Zkuste několik minut počkat a poté znovu načíst stránku.',
'dberr-info' => '(Nelze navázat spojení s databázovým serverem: $1)',
'dberr-usegoogle' => 'Mezitím můžete zkusit hledat pomocí Google.',
'dberr-outofdate' => 'Uvědomte si, že jejich vyhledávací index našeho obsahu může být zastaralý.',
'dberr-cachederror' => 'Následující stránka je kopie z cache a nemusí být aktuální.',

# HTML forms
'htmlform-invalid-input' => 'Některé vámi zadané údaje jsou chybné',
'htmlform-select-badoption' => 'Vámi uvedená hodnota není platná možnost.',
'htmlform-int-invalid' => 'Uvedená hodnota není celé číslo.',
'htmlform-float-invalid' => 'Uvedená hodnota není číslo.',
'htmlform-int-toolow' => 'Vámi zadaná hodnota je menší než dovolené minimum $1',
'htmlform-int-toohigh' => 'Vámi zadaná hodnota je větší než dovolené maximum $1',
'htmlform-required' => 'Tato položka je povinná',
'htmlform-submit' => 'Odeslat',
'htmlform-reset' => 'Vrátit změny',
'htmlform-selectorother-other' => 'Jiná hodnota',

# SQLite database support
'sqlite-has-fts' => '$1 s podporou plnotextového vyhledávání',
'sqlite-no-fts' => '$1 bez podpory plnotextového vyhledávání',

# New logging system
'logentry-delete-delete' => '$1 smazal stránku $3',
'logentry-delete-restore' => '$1 obnovil stránku $3',
'logentry-delete-event' => '$1 změnil viditelnost {{PLURAL:$5|protokolovacího záznamu|$5 protokolovacích záznamů}} ke stránce $3: $4',
'logentry-delete-revision' => '$1 změnil viditelnost {{PLURAL:$5|revize|$5 revizí}} na stránce $3: $4',
'logentry-delete-event-legacy' => '$1 změnil viditelnost protokolovacích záznamů ke stránce $3',
'logentry-delete-revision-legacy' => '$1 změnil viditelnost revizí na stránce $3',
'logentry-suppress-delete' => '$1 utajil stránku $3',
'logentry-suppress-event' => '$1 utajeně změnil viditelnost {{PLURAL:$5|protokolovacího záznamu|$5 protokolovacích záznamů}} ke stránce $3: $4',
'logentry-suppress-revision' => '$1 utajeně změnil viditelnost {{PLURAL:$5|revize|$5 revizí}} na stránce $3: $4',
'logentry-suppress-event-legacy' => '$1 utajeně změnil viditelnost protokolovacích záznamů ke stránce $3',
'logentry-suppress-revision-legacy' => '$1 utajeně změnil viditelnost revizí na stránce $3',
'revdelete-content-hid' => 'skryt obsah',
'revdelete-summary-hid' => 'skryto shrnutí editace',
'revdelete-uname-hid' => 'skryto uživatelské jméno',
'revdelete-content-unhid' => 'odkryt obsah',
'revdelete-summary-unhid' => 'odkryto shrnutí editace',
'revdelete-uname-unhid' => 'odkryto uživatelské jméno',
'revdelete-restricted' => 'omezení správců použito',
'revdelete-unrestricted' => 'omezení správců odstraněno',
'logentry-move-move' => '$1 přesunul stránku $3 na $4',
'logentry-move-move-noredirect' => '$1 přesunul stránku $3 na $4 bez založení přesměrování',
'logentry-move-move_redir' => '$1 přesunul stránku $3 na $4 s výměnou přesměrování',
'logentry-move-move_redir-noredirect' => '$1 přesunul stránku $3 na $4 místo přesměrování bez založení přesměrování',
'logentry-patrol-patrol' => '$1 označil revizi $4 stránky $3 jako prověřenou',
'logentry-patrol-patrol-auto' => '$1 automaticky označil revizi $4 stránky $3 jako prověřenou',
'logentry-newusers-newusers' => '$1 založil uživatelský účet',
'logentry-newusers-create' => '$1 založil uživatelský účet',
'logentry-newusers-create2' => '$1 založil uživatelský účet $3',
'logentry-newusers-autocreate' => 'Automaticky byl založen účet $1',
'newuserlog-byemail' => 'heslo zasláno e-mailem',

# Feedback
'feedback-bugornote' => 'Pokud dokážete podrobně popsat technický problém, můžete [$1 nahlásit chybu].
Jinak můžete využít jednoduchý formulář níže. Váš komentář bude přidán na stránku „[$3 $2]“ spolu s vaším uživatelským jménem a informací o tom, jaký prohlížeč používáte.',
'feedback-subject' => 'Předmět:',
'feedback-message' => 'Zpráva:',
'feedback-cancel' => 'Storno',
'feedback-submit' => 'Odeslat komentář',
'feedback-adding' => 'Komentář se přidává na stránku…',
'feedback-error1' => 'Chyba: Nerozpoznaný výsledek z API',
'feedback-error2' => 'Chyba: Editace se nezdařila',
'feedback-error3' => 'Chyba: API nevrátilo žádnou odpověď',
'feedback-thanks' => 'Děkujeme! Váš komentář byl přidat na stránku „[$2 $1]“.',
'feedback-close' => 'Hotovo',
'feedback-bugcheck' => 'Skvělé! Jen zkontrolujte, zda se nejedná o jednu z [$1 už známých chyb].',
'feedback-bugnew' => 'Zkontroloval(a) jsem to. Chci ohlásit novou chybu.',

# Search suggestions
'searchsuggest-search' => 'Hledat',
'searchsuggest-containing' => 'obsahující…',

# API errors
'api-error-badaccess-groups' => 'Nemáte povoleno nahrávat soubory na tuto wiki.',
'api-error-badtoken' => 'Vnitřní chyba: špatný token.',
'api-error-copyuploaddisabled' => 'Načítání z URL je na tomto severu zakázáno.',
'api-error-duplicate' => 'Na této wiki již {{PLURAL:$1|existuje [$2 jiný soubor]|existují [$2 jiné soubory]}} se shodným obsahem',
'api-error-duplicate-archive' => '[$2 {{PLURAL:$1|Soubor|Soubory}}] se stejným obsahem již zde dříve {{PLURAL:$1|byl|byly}}, ale {{PLURAL:$1|byl smazán|byly smazány}}.',
'api-error-duplicate-archive-popup-title' => 'Duplicitní {{PLURAL:$1|soubor, který byl|soubory, které byly}} smazány',
'api-error-duplicate-popup-title' => 'Duplicitní {{PLURAL:$1|soubor|soubory}}',
'api-error-empty-file' => 'Načtený soubor je prázdný.',
'api-error-emptypage' => 'Zakládání prázdných stránek není dovoleno.',
'api-error-fetchfileerror' => 'Vnitřní chyba: došlo k chybě při stahování souboru.',
'api-error-fileexists-forbidden' => 'Soubor s názvem „$1“ už existuje a nelze ho přepsat.',
'api-error-fileexists-shared-forbidden' => 'Soubor s názvem „$1“ už existuje ve sdíleném úložišti a nelze ho přepsat.',
'api-error-file-too-large' => 'Načtený soubor je příliš velký.',
'api-error-filename-tooshort' => 'Název souboru je příliš krátký.',
'api-error-filetype-banned' => 'Tento typ souboru je zakázán.',
'api-error-filetype-banned-type' => '$1 {{PLURAL:$4|je nedovolený formát souborů|jsou nedovolené formáty souborů}}. {{PLURAL:$3|Povolený formát souborů je|Povolené formáty souborů jsou}} $2.',
'api-error-filetype-missing' => 'Tento soubor nemá příponu.',
'api-error-hookaborted' => 'Zamýšlená úprava byla zakázána rozšiřujícím modulem.',
'api-error-http' => 'Vnitřní chyba: nepodařilo se připojit k serveru.',
'api-error-illegal-filename' => 'Tento název souboru není dovolen.',
'api-error-internal-error' => 'Vnitřní chyba: došlo k chybě při zpracování vašeho načteného souboru.',
'api-error-invalid-file-key' => 'Vnitřní chyba: soubor nebyl nalezen v dočasném úložišti.',
'api-error-missingparam' => 'Vnitřní chyba: chybí parametry požadavku.',
'api-error-missingresult' => 'Vnitřní chyba: nelze určit, zda kopírování bylo úspěšné.',
'api-error-mustbeloggedin' => 'K načtení souborů musíte být přihlášen.',
'api-error-mustbeposted' => 'Vnitřní chyba: požadavek musí být prostřednictvím HTTP POST.',
'api-error-noimageinfo' => 'Načtení bylo úspěšné, ale server neposkytl o souboru žádné informace.',
'api-error-nomodule' => 'Interní chyba: není nastaven načítací modul.',
'api-error-ok-but-empty' => 'Interní chyba: ze serveru nepřišla odpověď.',
'api-error-overwrite' => 'Není dovoleno přepsat existující soubor.',
'api-error-stashfailed' => 'Vnitřní chyba: serveru se nepodařilo uložit dočasný soubor.',
'api-error-timeout' => 'Server neodpověděl v očekávaném čase.',
'api-error-unclassified' => 'Došlo k neznámé chybě',
'api-error-unknown-code' => 'Neznámá chyba: „$1“',
'api-error-unknown-error' => 'Vnitřní chyba: došlo k chybě při pokusu o načtení souboru.',
'api-error-unknown-warning' => 'Neznámé varování: $1',
'api-error-unknownerror' => 'Neznámá chyba: „$1“.',
'api-error-uploaddisabled' => 'Načítání souborů je na této wiki vypnuto.',
'api-error-verification-error' => 'Soubor je možná poškozen nebo má špatnou příponu.',

# Durations
'duration-seconds' => '$1 {{PLURAL:$1|sekunda|sekundy|sekund}}',
'duration-minutes' => '$1 {{PLURAL:$1|minuta|minuty|minut}}',
'duration-hours' => '$1 {{PLURAL:$1|hodina|hodiny|hodin}}',
'duration-days' => '$1 {{PLURAL:$1|den|dny|dní}}',
'duration-weeks' => '$1 {{PLURAL:$1|týden|týdny|týdnů}}',
'duration-years' => '$1 {{PLURAL:$1|rok|roky|let}}',
'duration-decades' => '$1 {{PLURAL:$1|dekáda|dekády|dekád}}',
'duration-centuries' => '$1 {{PLURAL:$1|století}}',
'duration-millennia' => '$1 {{PLURAL:$1|tisíciletí}}',

);
