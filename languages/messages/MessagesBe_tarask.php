<?php
/** Belarusian (Taraškievica orthography) (беларуская (тарашкевіца)‎)
 *
 * See MessagesQqq.php for message documentation incl. usage of parameters
 * To improve a translation please visit http://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Cesco
 * @author Crt
 * @author EugeneZelenko
 * @author Jim-by
 * @author Kaganer
 * @author Red Winged Duck
 * @author Renessaince
 * @author Wizardist
 * @author Zedlik
 * @author Тест
 */

$fallback = 'be';

$namespaceNames = array(
	NS_MEDIA            => 'Мэдыя',
	NS_SPECIAL          => 'Спэцыяльныя',
	NS_TALK             => 'Абмеркаваньне',
	NS_USER             => 'Удзельнік',
	NS_USER_TALK        => 'Гутаркі_ўдзельніка',
	NS_PROJECT_TALK     => 'Абмеркаваньне_{{GRAMMAR:родны|$1}}',
	NS_FILE             => 'Файл',
	NS_FILE_TALK        => 'Абмеркаваньне_файла',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'Абмеркаваньне_MediaWiki',
	NS_TEMPLATE         => 'Шаблён',
	NS_TEMPLATE_TALK    => 'Абмеркаваньне_шаблёну',
	NS_HELP             => 'Дапамога',
	NS_HELP_TALK        => 'Абмеркаваньне_дапамогі',
	NS_CATEGORY         => 'Катэгорыя',
	NS_CATEGORY_TALK    => 'Абмеркаваньне_катэгорыі',
);

$namespaceAliases = array(
	'Удзельніца' => NS_USER,
	'Гутаркі ўдзельніцы' => NS_USER_TALK,
	'Абмеркаваньне_$1' => NS_PROJECT_TALK,
	'Выява' => NS_FILE,
	'Абмеркаваньне выявы' => NS_FILE_TALK,
);

$specialPageAliases = array(
	'Allmessages'               => array( 'Сыстэмныя_паведамленьні' ),
	'Allpages'                  => array( 'Усе_старонкі' ),
	'Ancientpages'              => array( 'Найстарэйшыя_старонкі' ),
	'Block'                     => array( 'Блякаваньне' ),
	'BrokenRedirects'           => array( 'Некарэктныя_перанакіраваньні' ),
	'Categories'                => array( 'Катэгорыі' ),
	'ChangePassword'            => array( 'Зьмяніць_пароль', 'Ачысьціць_пароль' ),
	'Contributions'             => array( 'Унёсак' ),
	'CreateAccount'             => array( 'Стварыць_рахунак' ),
	'Deadendpages'              => array( 'Тупіковыя_старонкі' ),
	'DeletedContributions'      => array( 'Выдалены_ўнёсак' ),
	'Disambiguations'           => array( 'Неадназначнасьці' ),
	'DoubleRedirects'           => array( 'Двайныя_перанакіраваньні' ),
	'Emailuser'                 => array( 'Даслаць_ліст' ),
	'Export'                    => array( 'Экспарт' ),
	'Filepath'                  => array( 'Шлях_да_файла' ),
	'Import'                    => array( 'Імпарт' ),
	'LinkSearch'                => array( 'Пошук_вонкавых_спасылак' ),
	'Listadmins'                => array( 'Сьпіс_адміністратараў' ),
	'Listbots'                  => array( 'Сьпіс_робатаў' ),
	'Listfiles'                 => array( 'Сьпіс_файлаў' ),
	'Listredirects'             => array( 'Сьпіс_перанакіраваньняў' ),
	'Listusers'                 => array( 'Сьпіс_удзельнікаў' ),
	'Log'                       => array( 'Журналы_падзеяў' ),
	'Lonelypages'               => array( 'Старонкі-сіраціны' ),
	'Longpages'                 => array( 'Доўгія_старонкі' ),
	'MergeHistory'              => array( 'Гісторыя_аб\'яднаньняў' ),
	'Mycontributions'           => array( 'Мой_унёсак' ),
	'Mypage'                    => array( 'Мая_старонка' ),
	'Mytalk'                    => array( 'Мае_размовы' ),
	'Newimages'                 => array( 'Новыя_файлы' ),
	'Newpages'                  => array( 'Новыя_старонкі' ),
	'Popularpages'              => array( 'Папулярныя_старонкі' ),
	'Protectedpages'            => array( 'Абароненыя_старонкі' ),
	'Protectedtitles'           => array( 'Забароненыя_старонкі' ),
	'Randompage'                => array( 'Выпадковая_старонка' ),
	'Randomredirect'            => array( 'Выпадковае_перанакіраваньне' ),
	'Recentchanges'             => array( 'Апошнія_зьмены' ),
	'Search'                    => array( 'Пошук' ),
	'Shortpages'                => array( 'Кароткія_старонкі' ),
	'Specialpages'              => array( 'Спэцыяльныя_старонкі' ),
	'Statistics'                => array( 'Статыстыка' ),
	'Uncategorizedcategories'   => array( 'Некатэгарызаваныя_катэгорыі' ),
	'Uncategorizedimages'       => array( 'Некатэгарызаваныя_файлы' ),
	'Uncategorizedpages'        => array( 'Некатэгарызаваныя_старонкі' ),
	'Uncategorizedtemplates'    => array( 'Некатэгарызаваныя_шаблёны' ),
	'Upload'                    => array( 'Загрузка' ),
	'Version'                   => array( 'Вэрсія' ),
	'Wantedcategories'          => array( 'Запатрабаваныя_катэгорыі' ),
	'Wantedfiles'               => array( 'Запатрабаваныя_файлы' ),
	'Wantedpages'               => array( 'Запатрабаваныя_старонкі', 'Некарэктныя_спасылкі' ),
	'Wantedtemplates'           => array( 'Запатрабаваныя_шаблёны' ),
	'Watchlist'                 => array( 'Сьпіс_назіраньня' ),
	'Whatlinkshere'             => array( 'Спасылкі_на_старонку' ),
);

$magicWords = array(
	'redirect'                  => array( '0', '#перанакіраваньне', '#REDIRECT' ),
	'notoc'                     => array( '0', '__БЯЗЬ_ЗЬМЕСТУ__', '__NOTOC__' ),
	'nogallery'                 => array( '0', '__БЕЗ_ГАЛЕРЭІ__', '__NOGALLERY__' ),
	'forcetoc'                  => array( '0', '__ЗЬМЕСТ_ПРЫМУСАМ__', '__FORCETOC__' ),
	'toc'                       => array( '0', '__ЗЬМЕСТ__', '__TOC__' ),
	'noeditsection'             => array( '0', '__БЕЗ_РЭДАГАВАНЬНЯ_СЭКЦЫІ__', '__NOEDITSECTION__' ),
	'currentmonth'              => array( '1', 'БЯГУЧЫ_МЕСЯЦ', 'CURRENTMONTH', 'CURRENTMONTH2' ),
	'currentmonthname'          => array( '1', 'НАЗВА_БЯГУЧАГА_МЕСЯЦА', 'CURRENTMONTHNAME' ),
	'currentmonthnamegen'       => array( '1', 'НАЗВА_БЯГУЧАГА_МЕСЯЦА_Ў_РОДНЫМ_СКЛОНЕ', 'CURRENTMONTHNAMEGEN' ),
	'currentmonthabbrev'        => array( '1', 'СКАРОЧАНАЯ_НАЗВА_БЯГУЧАГА_МЕСЯЦА', 'CURRENTMONTHABBREV' ),
	'currentday'                => array( '1', 'БЯГУЧЫ_ДЗЕНЬ', 'CURRENTDAY' ),
	'currentday2'               => array( '1', 'БЯГУЧЫ_ДЗЕНЬ_2', 'CURRENTDAY2' ),
	'currentdayname'            => array( '1', 'НАЗВА_БЯГУЧАГА_ДНЯ', 'CURRENTDAYNAME' ),
	'currentyear'               => array( '1', 'БЯГУЧЫ_ГОД', 'CURRENTYEAR' ),
	'currenttime'               => array( '1', 'БЯГУЧЫ_ЧАС', 'CURRENTTIME' ),
	'currenthour'               => array( '1', 'БЯГУЧАЯ_ГАДЗІНА', 'CURRENTHOUR' ),
	'localmonth'                => array( '1', 'ЛЯКАЛЬНЫ_МЕСЯЦ', 'LOCALMONTH', 'LOCALMONTH2' ),
	'localmonthname'            => array( '1', 'НАЗВА_ЛЯКАЛЬНАГА_МЕСЯЦА', 'LOCALMONTHNAME' ),
	'localmonthnamegen'         => array( '1', 'НАЗВА_ЛЯКАЛЬНАГА_МЕСЯЦА_Ў_РОДНЫМ_СКЛОНЕ', 'LOCALMONTHNAMEGEN' ),
	'localmonthabbrev'          => array( '1', 'СКАРОЧАНАЯ_НАЗВА_ЛЯКАЛЬНАГА_МЕСЯЦА', 'LOCALMONTHABBREV' ),
	'localday'                  => array( '1', 'ЛЯКАЛЬНЫ_ДЗЕНЬ', 'LOCALDAY' ),
	'localday2'                 => array( '1', 'ЛЯКАЛЬНЫ_ДЗЕНЬ_2', 'LOCALDAY2' ),
	'localdayname'              => array( '1', 'НАЗВА_ЛЯКАЛЬНАГА_ДНЯ', 'LOCALDAYNAME' ),
	'localyear'                 => array( '1', 'ЛЯКАЛЬНЫ_ГОД', 'LOCALYEAR' ),
	'localtime'                 => array( '1', 'ЛЯКАЛЬНЫ_ЧАС', 'LOCALTIME' ),
	'localhour'                 => array( '1', 'ЛЯКАЛЬНАЯ_ГАДЗІНА', 'LOCALHOUR' ),
	'numberofpages'             => array( '1', 'КОЛЬКАСЬЦЬ_СТАРОНАК', 'NUMBEROFPAGES' ),
	'numberofarticles'          => array( '1', 'КОЛЬКАСЬЦЬ_АРТЫКУЛАЎ', 'NUMBEROFARTICLES' ),
	'numberoffiles'             => array( '1', 'КОЛЬКАСЬЦЬ_ФАЙЛАЎ', 'NUMBEROFFILES' ),
	'numberofusers'             => array( '1', 'КОЛЬКАСЬЦЬ_УДЗЕЛЬНІКАЎ', 'NUMBEROFUSERS' ),
	'numberofactiveusers'       => array( '1', 'КОЛЬКАСЬЦЬ_АКТЫЎНЫХ_УДЗЕЛЬНІКАЎ', 'NUMBEROFACTIVEUSERS' ),
	'numberofedits'             => array( '1', 'КОЛЬКАСЬЦЬ_РЭДАГАВАНЬНЯЎ', 'NUMBEROFEDITS' ),
	'numberofviews'             => array( '1', 'КОЛЬКАСЬЦЬ_ПРАГЛЯДАЎ', 'NUMBEROFVIEWS' ),
	'pagename'                  => array( '1', 'НАЗВА_СТАРОНКІ', 'PAGENAME' ),
	'pagenamee'                 => array( '1', 'НАЗВА_СТАРОНКІ_2', 'PAGENAMEE' ),
	'namespace'                 => array( '1', 'ПРАСТОРА_НАЗВАЎ', 'NAMESPACE' ),
	'namespacee'                => array( '1', 'ПРАСТОРА_НАЗВАЎ_2', 'NAMESPACEE' ),
	'talkspace'                 => array( '1', 'ПРАСТОРА_НАЗВАЎ_АБМЕРКАВАНЬНЯ', 'TALKSPACE' ),
	'talkspacee'                => array( '1', 'ПРАСТОРА_НАЗВАЎ_АБМЕРКАВАНЬНЯ_2', 'TALKSPACEE' ),
	'subjectspace'              => array( '1', 'ПРАСТОРА_НАЗВАЎ_ПРАДМЕТУ', 'ПРАСТОРА_НАЗВАЎ_АРТЫКУЛА', 'SUBJECTSPACE', 'ARTICLESPACE' ),
	'subjectspacee'             => array( '1', 'ПРАСТОРА_НАЗВАЎ_ПРАДМЕТУ_2', 'ПРАСТОРА_НАЗВАЎ_АРТЫКУЛА_2', 'SUBJECTSPACEE', 'ARTICLESPACEE' ),
	'fullpagename'              => array( '1', 'ПОЎНАЯ_НАЗВА_СТАРОНКІ', 'FULLPAGENAME' ),
	'fullpagenamee'             => array( '1', 'ПОЎНАЯ_НАЗВА_СТАРОНКІ_2', 'FULLPAGENAMEE' ),
	'subpagename'               => array( '1', 'НАЗВА_ПАДСТАРОНКІ', 'SUBPAGENAME' ),
	'subpagenamee'              => array( '1', 'НАЗВА_ПАДСТАРОНКІ_2', 'SUBPAGENAMEE' ),
	'basepagename'              => array( '1', 'НАЗВА_БАЗАВАЙ_СТАРОНКІ', 'BASEPAGENAME' ),
	'basepagenamee'             => array( '1', 'НАЗВА_БАЗАВАЙ_СТАРОНКІ_2', 'BASEPAGENAMEE' ),
	'talkpagename'              => array( '1', 'НАЗВА_СТАРОНКІ_АБМЕРКАВАНЬНЯ', 'TALKPAGENAME' ),
	'talkpagenamee'             => array( '1', 'НАЗВА_СТАРОНКІ_АБМЕРКАВАНЬНЯ_2', 'TALKPAGENAMEE' ),
	'subjectpagename'           => array( '1', 'НАЗВА_СТАРОНКІ_ПРАДМЕТУ', 'НАЗВА_СТАРОНКІ_АРТЫКУЛА', 'SUBJECTPAGENAME', 'ARTICLEPAGENAME' ),
	'subjectpagenamee'          => array( '1', 'НАЗВА_СТАРОНКІ_ПРАДМЕТУ_2', 'НАЗВА_СТАРОНКІ_АРТЫКУЛА_2', 'SUBJECTPAGENAMEE', 'ARTICLEPAGENAMEE' ),
	'msg'                       => array( '0', 'ПАВЕДАМЛЕНЬНЕ:', 'MSG:' ),
	'subst'                     => array( '0', 'ПАДСТАНОЎКА:', 'SUBST:' ),
	'msgnw'                     => array( '0', 'ПАВЕДАМЛЕНЬНЕ_БЯЗЬ_ВІКІ:', 'MSGNW:' ),
	'img_thumbnail'             => array( '1', 'значак', 'міні', 'мініяцюра', 'thumbnail', 'thumb' ),
	'img_manualthumb'           => array( '1', 'значак=$1', 'міні=$1', 'мініяцюра=$1', 'thumbnail=$1', 'thumb=$1' ),
	'img_right'                 => array( '1', 'справа', 'right' ),
	'img_left'                  => array( '1', 'зьлева', 'злева', 'left' ),
	'img_none'                  => array( '1', 'няма', 'none' ),
	'img_width'                 => array( '1', '$1пкс', '$1px' ),
	'img_center'                => array( '1', 'цэнтар', 'цэнтр', 'center', 'centre' ),
	'img_framed'                => array( '1', 'рамка', 'безрамкі', 'framed', 'enframed', 'frame' ),
	'img_page'                  => array( '1', 'старонка=$1', 'старонка $1', 'page=$1', 'page $1' ),
	'img_top'                   => array( '1', 'зьверху', 'top' ),
	'img_middle'                => array( '1', 'пасярэдзіне', 'middle' ),
	'img_bottom'                => array( '1', 'зьнізу', 'bottom' ),
	'img_link'                  => array( '1', 'спасылка=$1', 'link=$1' ),
	'sitename'                  => array( '1', 'НАЗВА_САЙТУ', 'SITENAME' ),
	'ns'                        => array( '0', 'ПН:', 'NS:' ),
	'localurl'                  => array( '0', 'ЛЯКАЛЬНЫ_АДРАС:', 'LOCALURL:' ),
	'localurle'                 => array( '0', 'ЛЯКАЛЬНЫ_АДРАС_2:', 'LOCALURLE:' ),
	'server'                    => array( '0', 'СЭРВЭР', 'SERVER' ),
	'servername'                => array( '0', 'НАЗВА_СЭРВЭРА', 'SERVERNAME' ),
	'scriptpath'                => array( '0', 'ШЛЯХ_ДА_СКРЫПТА', 'SCRIPTPATH' ),
	'grammar'                   => array( '0', 'ГРАМАТЫКА:', 'GRAMMAR:' ),
	'gender'                    => array( '0', 'ПОЛ:', 'GENDER:' ),
	'notitleconvert'            => array( '0', '__НЕ_КАНВЭРТАВАЦЬ_НАЗВУ__', '__NOTITLECONVERT__', '__NOTC__' ),
	'nocontentconvert'          => array( '0', '__НЕ_КАНВЭРТАВАЦЬ_ТЭКСТ__', '__NOCONTENTCONVERT__', '__NOCC__' ),
	'currentweek'               => array( '1', 'БЯГУЧЫ_ТЫДЗЕНЬ', 'CURRENTWEEK' ),
	'currentdow'                => array( '1', 'БЯГУЧЫ_ДЗЕНЬ_ТЫДНЯ', 'CURRENTDOW' ),
	'localweek'                 => array( '1', 'ЛЯКАЛЬНЫ_ТЫДЗЕНЬ', 'LOCALWEEK' ),
	'localdow'                  => array( '1', 'ЛЯКАЛЬНЫ_ДЗЕНЬ_ТЫДНЯ', 'LOCALDOW' ),
	'revisionid'                => array( '1', 'ID_ВЭРСІІ', 'REVISIONID' ),
	'revisionday'               => array( '1', 'ДЗЕНЬ_ВЭРСІІ', 'REVISIONDAY' ),
	'revisionday2'              => array( '1', 'ДЗЕНЬ_ВЭРСІІ_2', 'REVISIONDAY2' ),
	'revisionmonth'             => array( '1', 'МЕСЯЦ_ВЭРСІІ', 'REVISIONMONTH' ),
	'revisionyear'              => array( '1', 'ГОД_ВЭРСІІ', 'REVISIONYEAR' ),
	'revisiontimestamp'         => array( '1', 'МОМАНТ_ЧАСУ_ВЭРСІІ', 'REVISIONTIMESTAMP' ),
	'plural'                    => array( '0', 'МНОЖНЫ_ЛІК:', 'PLURAL:' ),
	'fullurl'                   => array( '0', 'ПОЎНЫ_АДРАС:', 'FULLURL:' ),
	'fullurle'                  => array( '0', 'ПОЎНЫ_АДРАС_2:', 'FULLURLE:' ),
	'lcfirst'                   => array( '0', 'ПЕРШАЯ_ЛІТАРА_МАЛАЯ:', 'LCFIRST:' ),
	'ucfirst'                   => array( '0', 'ПЕРШАЯ_ЛІТАРА_ВЯЛІКАЯ:', 'UCFIRST:' ),
	'lc'                        => array( '0', 'МАЛЫМІ_ЛІТАРАМІ:', 'LC:' ),
	'uc'                        => array( '0', 'ВЯЛІКІМІ_ЛІТАРАМІ:', 'UC:' ),
	'raw'                       => array( '0', 'НЕАПРАЦАВАНЫ:', 'RAW:' ),
	'displaytitle'              => array( '1', 'ПАКАЗВАЦЬ_НАЗВУ', 'DISPLAYTITLE' ),
	'rawsuffix'                 => array( '1', 'Н', 'R' ),
	'newsectionlink'            => array( '1', '__СПАСЫЛКА_НА_НОВУЮ_СЭКЦЫЮ__', '__NEWSECTIONLINK__' ),
	'currentversion'            => array( '1', 'БЯГУЧАЯ_ВЭРСІЯ', 'CURRENTVERSION' ),
	'currenttimestamp'          => array( '1', 'МОМАНТ_ЧАСУ', 'CURRENTTIMESTAMP' ),
	'localtimestamp'            => array( '1', 'ЛЯКАЛЬНЫ_МОМАНТ_ЧАСУ', 'LOCALTIMESTAMP' ),
	'directionmark'             => array( '1', 'СЫМБАЛЬ_НАПРАМКУ_ПІСЬМА', 'DIRECTIONMARK', 'DIRMARK' ),
	'language'                  => array( '0', '#МОВА:', '#LANGUAGE:' ),
	'contentlanguage'           => array( '1', 'МОВА_ЗЬМЕСТУ', 'CONTENTLANGUAGE', 'CONTENTLANG' ),
	'pagesinnamespace'          => array( '1', 'КОЛЬКАСЬЦЬ_СТАРОНАК_У_ПРАСТОРЫ_НАЗВАЎ:', 'PAGESINNAMESPACE:', 'PAGESINNS:' ),
	'numberofadmins'            => array( '1', 'КОЛЬКАСЬЦЬ_АДМІНІСТРАТАРАЎ', 'NUMBEROFADMINS' ),
	'formatnum'                 => array( '0', 'ФАРМАТАВАЦЬ_ЛІК', 'FORMATNUM' ),
	'defaultsort'               => array( '1', 'САРТЫРОЎКА_ПА_ЗМОЎЧВАНЬНІ:', 'КЛЮЧ_САРТЫРОЎКІ_ПА_ЗМОЎЧВАНЬНІ:', 'САРТЫРОЎКА_Ў_КАТЭГОРЫІ_ПА_ЗМОЎЧВАНЬНІ:', 'DEFAULTSORT:', 'DEFAULTSORTKEY:', 'DEFAULTCATEGORYSORT:' ),
	'filepath'                  => array( '0', 'ШЛЯХ_ДА_ФАЙЛА:', 'FILEPATH:' ),
	'tag'                       => array( '0', 'тэг', 'tag' ),
	'hiddencat'                 => array( '1', '__СХАВАЦЬ_КАТЭГОРЫЮ__', '__HIDDENCAT__' ),
	'pagesincategory'           => array( '1', 'КОЛЬКАСЬЦЬ_СТАРОНАК_У_КАТЭГОРЫІ', 'PAGESINCATEGORY', 'PAGESINCAT' ),
	'pagesize'                  => array( '1', 'ПАМЕР_СТАРОНКІ', 'PAGESIZE' ),
	'staticredirect'            => array( '1', '__СТАТЫЧНАЕ_ПЕРАНАКІРАВАНЬНЕ__', '__STATICREDIRECT__' ),
);

$bookstoreList = array(
	'OZ.by' => 'http://oz.by/search.phtml?what=books&isbn=$1',
	'Amazon.com' => 'http://www.amazon.com/exec/obidos/ISBN=$1'
);

$datePreferences = array(
	'default',
	'dmy',
	'ISO 8601',
);

$defaultDateFormat = 'dmy';

$dateFormats = array(
	'dmy time' => 'H:i',
	'dmy date' => 'j xg Y',
	'dmy both' => 'H:i, j xg Y',
);

$separatorTransformTable = array(
	',' => "\xc2\xa0", # nbsp
	'.' => ','
);

$linkTrail = '/^([абвгґджзеёжзійклмнопрстуўфхцчшыьэюяćčłńśšŭźža-z]+)(.*)$/sDu';

$imageFiles = array(
	'button-bold'     => 'be-tarask/button_bold.png',
	'button-italic'   => 'be-tarask/button_italic.png',
	'button-link'     => 'be-tarask/button_link.png',
);

$messages = array(
# User preference toggles
'tog-underline' => 'Падкрэсьліваць спасылкі:',
'tog-justify' => 'Выраўноўваць тэкст па шырыні старонкі',
'tog-hideminor' => 'Хаваць дробныя зьмены ў сьпісе апошніх зьменаў',
'tog-hidepatrolled' => 'Хаваць патруляваныя зьмены ў сьпісе апошніх зьменаў',
'tog-newpageshidepatrolled' => 'Хаваць патруляваныя старонкі ў сьпісе новых старонак',
'tog-extendwatchlist' => 'Пашырыць сьпіс назіраньня, каб ён паказваў усе зьмены, а ня толькі апошнія',
'tog-usenewrc' => 'Групаваць зьмены старонкі ў сьпісах апошніх зьменаў і назіраньняў (патрабуе JavaScript)',
'tog-numberheadings' => 'Аўтаматычная нумарацыя загалоўкаў',
'tog-showtoolbar' => 'Паказваць панэль інструмэнтаў рэдагаваньня (патрабуе JavaScript)',
'tog-editondblclick' => 'Рэдагаваць старонкі па падвойным пстрыку (JavaScript)',
'tog-editsection' => 'Дазволіць рэдагаваньне асобных сэкцыяў па спасылках [рэдагаваць]',
'tog-editsectiononrightclick' => 'Рэдагаваць сэкцыі па правым пстрыку на загалоўку (патрабуе JavaScript)',
'tog-showtoc' => 'Паказваць зьмест (для старонак з больш як 3 разьдзеламі)',
'tog-rememberpassword' => 'Запомніць мяне ў гэтым браўзэры (ня больш за $1 {{PLURAL:$1|дзень|дні|дзён}})',
'tog-watchcreations' => 'Дадаваць у мой сьпіс назіраньня створаныя мной старонкі і загружаныя файлы',
'tog-watchdefault' => 'Дадаваць у мой сьпіс назіраньня старонкі і файлы, якія я рэдагаваў',
'tog-watchmoves' => 'Дадаваць у мой сьпіс назіраньня перанесеныя мною старонкі і файлы',
'tog-watchdeletion' => 'Дадаваць у мой сьпіс назіраньня старонкі і файлы, якія я выдаляю',
'tog-minordefault' => 'Па змоўчаньні пазначаць усе зьмены дробнымі',
'tog-previewontop' => 'Паказваць папярэдні прагляд старонкі над полем рэдагаваньня',
'tog-previewonfirst' => 'Папярэдні прагляд пры першым рэдагаваньні',
'tog-nocache' => 'Адключыць кэшаваньне старонак у браўзэры',
'tog-enotifwatchlistpages' => 'Паведамляць мне праз электронную пошту пра зьмены старонак і файлаў у маім сьпісе назіраньня',
'tog-enotifusertalkpages' => 'Паведамляць праз электронную пошту пра зьмены маёй старонкі гутарак',
'tog-enotifminoredits' => 'Паведамляць праз электронную пошту таксама пра дробныя зьмены старонак і файлаў',
'tog-enotifrevealaddr' => 'Не хаваць мой адрас электроннай пошты ў паведамленьнях',
'tog-shownumberswatching' => 'Паказваць колькасьць назіральнікаў',
'tog-oldsig' => 'Цяперашні подпіс:',
'tog-fancysig' => 'Апрацоўваць подпіс як вікі-тэкст (без аўтаматычнай спасылкі)',
'tog-externaleditor' => 'Выкарыстоўваць вонкавы рэдактар па змоўчваньні (толькі для адмыслоўцаў, патрабуе спэцыяльных наладак на вашым кампутары. [//www.mediawiki.org/wiki/Manual:External_editors Падрабязнасьці.])',
'tog-externaldiff' => 'Выкарыстоўваць вонкавую праграму параўнаньня вэрсіяў па змоўчваньні (толькі для адмыслоўцаў, патрабуе спэцыяльных наладак на вашым кампутары. [//www.mediawiki.org/wiki/Manual:External_editors Падрабязнасьці.])',
'tog-showjumplinks' => 'Актываваць дапаможныя спасылкі «перайсьці да»',
'tog-uselivepreview' => 'Выкарыстоўваць хуткі папярэдні прагляд (патрабуе JavaScript) (экспэрымэнтальна)',
'tog-forceeditsummary' => 'Папярэджваць пра адсутнасьць кароткага апісаньня зьменаў',
'tog-watchlisthideown' => 'Хаваць мае праўкі ў сьпісе назіраньня',
'tog-watchlisthidebots' => 'Хаваць праўкі робатаў у сьпісе назіраньня',
'tog-watchlisthideminor' => 'Хаваць дробныя праўкі ў сьпісе назіраньня',
'tog-watchlisthideliu' => 'Хаваць праўкі зарэгістраваных удзельнікаў у сьпісе назіраньня',
'tog-watchlisthideanons' => 'Хаваць праўкі ананімаў у сьпісе назіраньня',
'tog-watchlisthidepatrolled' => 'Хаваць патруляваныя праўкі ў сьпісе назіраньня',
'tog-ccmeonemails' => 'Дасылаць мне копіі лістоў, якія я дасылаю іншым удзельнікам',
'tog-diffonly' => 'Не паказваць зьмест старонкі пад параўнаньнем зьменаў',
'tog-showhiddencats' => 'Паказваць схаваныя катэгорыі',
'tog-noconvertlink' => 'Забараніць канвэртацыю назваў спасылак',
'tog-norollbackdiff' => 'Не паказваць зьмены пасьля выкарыстаньня функцыі адкату',

'underline-always' => 'Заўсёды',
'underline-never' => 'Ніколі',
'underline-default' => 'Паводле браўзэра або афармленьня',

# Font style option in Special:Preferences
'editfont-style' => 'Стыль шрыфту ў полі рэдагаваньня:',
'editfont-default' => 'Паводле браўзэра',
'editfont-monospace' => 'Роўнашырокі шрыфт',
'editfont-sansserif' => 'Шрыфт без засечак',
'editfont-serif' => 'Шрыфт з засечкамі',

# Dates
'sunday' => 'нядзеля',
'monday' => 'панядзелак',
'tuesday' => 'аўторак',
'wednesday' => 'серада',
'thursday' => 'чацьвер',
'friday' => 'пятніца',
'saturday' => 'субота',
'sun' => 'Нд',
'mon' => 'Пн',
'tue' => 'Аў',
'wed' => 'Ср',
'thu' => 'Чц',
'fri' => 'Пт',
'sat' => 'Сб',
'january' => 'студзень',
'february' => 'люты',
'march' => 'сакавік',
'april' => 'красавік',
'may_long' => 'травень',
'june' => 'чэрвень',
'july' => 'ліпень',
'august' => 'жнівень',
'september' => 'верасень',
'october' => 'кастрычнік',
'november' => 'лістапад',
'december' => 'сьнежань',
'january-gen' => 'студзеня',
'february-gen' => 'лютага',
'march-gen' => 'сакавіка',
'april-gen' => 'красавіка',
'may-gen' => 'траўня',
'june-gen' => 'чэрвеня',
'july-gen' => 'ліпеня',
'august-gen' => 'жніўня',
'september-gen' => 'верасьня',
'october-gen' => 'кастрычніка',
'november-gen' => 'лістапада',
'december-gen' => 'сьнежня',
'jan' => 'сту',
'feb' => 'лют',
'mar' => 'сак',
'apr' => 'кра',
'may' => 'тра',
'jun' => 'чэр',
'jul' => 'ліп',
'aug' => 'жні',
'sep' => 'вер',
'oct' => 'кас',
'nov' => 'ліс',
'dec' => 'сьн',

# Categories related messages
'pagecategories' => '{{PLURAL:$1|Катэгорыя|Катэгорыі|Катэгорыі}}',
'category_header' => 'Старонкі ў катэгорыі «$1»',
'subcategories' => 'Падкатэгорыі',
'category-media-header' => 'Файлы ў катэгорыі «$1»',
'category-empty' => "''Гэтая катэгорыя ня ўтрымлівае ні старонак, ні файлаў.''",
'hidden-categories' => '{{PLURAL:$1|Схаваная катэгорыя|Схаваныя катэгорыі}}',
'hidden-category-category' => 'Схаваныя катэгорыі',
'category-subcat-count' => '{{PLURAL:$2|Гэтая катэгорыя зьмяшчае наступную падкатэгорыю.|Гэтая катэгорыя зьмяшчае {{PLURAL:$1|наступную $1 падкатэгорыю|наступныя $1 падкатэгорыі|наступныя $1 падкатэгорыяў}} з $2 агулам.}}',
'category-subcat-count-limited' => 'У гэтай катэгорыі $1 {{PLURAL:$1|падкатэгорыя|падкатэгорыі|падкатэгорыяў}}.',
'category-article-count' => '{{PLURAL:$2|Гэтая катэгорыя ўтрымлівае толькі адну старонку.|{{PLURAL:$1|Паказаная $1 старонка|Паказаныя $1 старонкі|Паказаныя $1 старонак}} гэтай катэгорыі з $2.}}',
'category-article-count-limited' => 'У гэтай катэгорыі $1 {{PLURAL:$1|старонка|старонкі|старонак}}.',
'category-file-count' => '{{PLURAL:$2|Гэтая катэгорыя ўтрымлівае толькі адзін файл.|{{PLURAL:$1|Паказаны $1 файл|Паказаныя $1 файлы|Паказаныя $1 файлаў}} гэтай катэгорыі з $2.}}',
'category-file-count-limited' => 'У гэтай катэгорыі $1 {{PLURAL:$1|файл|файлы|файлаў}}.',
'listingcontinuesabbrev' => ' (працяг)',
'index-category' => 'Індэксаваныя старонкі',
'noindex-category' => 'Неіндэксаваныя старонкі',
'broken-file-category' => 'Старонкі зь няслушнымі спасылкамі на файлы',

'about' => 'Апісаньне',
'article' => 'Старонка зьместу',
'newwindow' => '(адкрываецца ў новым акне)',
'cancel' => 'Скасаваць',
'moredotdotdot' => 'Далей…',
'mypage' => 'Мая старонка',
'mytalk' => 'Мае гутаркі',
'anontalk' => 'Гутаркі для гэтага IP-адрасу',
'navigation' => 'Навігацыя',
'and' => '&#32;і',

# Cologne Blue skin
'qbfind' => 'Знайсьці',
'qbbrowse' => 'Праглядзець',
'qbedit' => 'Рэдагаваць',
'qbpageoptions' => 'Гэтая старонка',
'qbmyoptions' => 'Мае старонкі',
'qbspecialpages' => 'Спэцыяльныя старонкі',
'faq' => 'Частыя пытаньні',
'faqpage' => 'Project:Частыя пытаньні',

# Vector skin
'vector-action-addsection' => 'Дадаць тэму',
'vector-action-delete' => 'Выдаліць',
'vector-action-move' => 'Перанесьці',
'vector-action-protect' => 'Абараніць',
'vector-action-undelete' => 'Аднавіць',
'vector-action-unprotect' => 'Зьмяніць абарону',
'vector-simplesearch-preference' => 'Уключыць спрошчанае поле пошуку (толькі для афармленьня «Вэктар»)',
'vector-view-create' => 'Стварыць',
'vector-view-edit' => 'Рэдагаваць',
'vector-view-history' => 'Паказаць гісторыю',
'vector-view-view' => 'Чытаць',
'vector-view-viewsource' => 'Паказаць крыніцу',
'actions' => 'Дзеяньні',
'namespaces' => 'Прасторы назваў',
'variants' => 'Варыянты',

'errorpagetitle' => 'Памылка',
'returnto' => 'Вярнуцца да старонкі «$1».',
'tagline' => 'Зьвесткі з {{GRAMMAR:родны|{{SITENAME}}}}',
'help' => 'Дапамога',
'search' => 'Пошук',
'searchbutton' => 'Пошук',
'go' => 'Старонка',
'searcharticle' => 'Старонка',
'history' => 'Гісторыя старонкі',
'history_short' => 'Гісторыя',
'updatedmarker' => 'абноўлена з часу майго апошняга наведваньня',
'printableversion' => 'Вэрсія для друку',
'permalink' => 'Сталая спасылка',
'print' => 'Друкаваць',
'view' => 'Прагляд',
'edit' => 'Рэдагаваць',
'create' => 'Стварыць',
'editthispage' => 'Рэдагаваць гэтую старонку',
'create-this-page' => 'Стварыць гэтую старонку',
'delete' => 'Выдаліць',
'deletethispage' => 'Выдаліць гэтую старонку',
'undelete_short' => 'Аднавіць $1 {{PLURAL:$1|рэдагаваньне|рэдагаваньні|рэдагаваньняў}}',
'viewdeleted_short' => 'Паказаць $1 {{PLURAL:$1|выдаленае рэдагаваньне|выдаленыя рэдагаваньні|выдаленых рэдагаваньняў}}',
'protect' => 'Абараніць',
'protect_change' => 'зьмяніць',
'protectthispage' => 'Абараніць гэтую старонку',
'unprotect' => 'Зьмяніць абарону',
'unprotectthispage' => 'Зьмяніць абарону старонкі',
'newpage' => 'Новая старонка',
'talkpage' => 'Абмеркаваць гэтую старонку',
'talkpagelinktext' => 'гутаркі',
'specialpage' => 'Спэцыяльная старонка',
'personaltools' => 'Асабістыя прылады',
'postcomment' => 'Новая сэкцыя',
'articlepage' => 'Паказаць старонку зьместу',
'talk' => 'Абмеркаваньне',
'views' => 'Прагляды',
'toolbox' => 'Інструмэнты',
'userpage' => 'Паказаць старонку ўдзельніка',
'projectpage' => 'Паказаць старонку праекту',
'imagepage' => 'Паказаць старонку файла',
'mediawikipage' => 'Паказаць старонку паведамленьня',
'templatepage' => 'Паказаць старонку шаблёну',
'viewhelppage' => 'Паказаць старонку дапамогі',
'categorypage' => 'Паказаць старонку катэгорыі',
'viewtalkpage' => 'Паказаць абмеркаваньне',
'otherlanguages' => 'На іншых мовах',
'redirectedfrom' => '(Перанакіравана з «$1»)',
'redirectpagesub' => 'Старонка-перанакіраваньне',
'lastmodifiedat' => 'Гэтая старонка апошні раз рэдагавалася $1 году ў $2.',
'viewcount' => 'Гэтую старонку праглядалі $1 {{PLURAL:$1|раз|разы|разоў}}.',
'protectedpage' => 'Абароненая старонка',
'jumpto' => 'Перайсьці да:',
'jumptonavigation' => 'навігацыі',
'jumptosearch' => 'пошуку',
'view-pool-error' => 'Прабачце, у цяперашні момант сэрвэры перагружаныя.
Занадта шмат удзельнікаў спрабуюць праглядзець гэтую старонку.
Калі ласка, пачакайце і паспрабуйце зайсьці пазьней.

$1',
'pool-timeout' => 'Скончыўся час чаканьня блякаваньня',
'pool-queuefull' => 'Чарга запытаў поўная',
'pool-errorunknown' => 'Невядомая памылка',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage) and the disambiguation template definition (see disambiguations).
'aboutsite' => 'Пра {{GRAMMAR:вінавальны|{{SITENAME}}}}',
'aboutpage' => 'Project:Пра {{GRAMMAR:вінавальны|{{SITENAME}}}}',
'copyright' => 'Зьмест даступны на ўмовах $1.',
'copyrightpage' => '{{ns:project}}:Аўтарскія правы',
'currentevents' => 'Актуальныя падзеі',
'currentevents-url' => 'Project:Актуальныя падзеі',
'disclaimers' => 'Адмова ад адказнасьці',
'disclaimerpage' => 'Project:Адмова ад адказнасьці',
'edithelp' => 'Дапамога ў рэдагаваньні',
'edithelppage' => 'Help:Рэдагаваньне',
'helppage' => 'Help:Зьмест',
'mainpage' => 'Галоўная старонка',
'mainpage-description' => 'Галоўная старонка',
'policy-url' => 'Project:Правілы',
'portal' => 'Суполка',
'portal-url' => 'Project:Суполка',
'privacy' => 'Правілы адносна прыватнасьці',
'privacypage' => 'Project:Правілы адносна прыватнасьці',

'badaccess' => 'Памылка доступу',
'badaccess-group0' => 'Вам не дазволена выканаць запытанае Вамі дзеяньне.',
'badaccess-groups' => 'Запытанае Вамі дзеяньне дазволенае толькі ўдзельнікам {{PLURAL:$2|з групы|адной з групаў:}} $1.',

'versionrequired' => 'Патрабуецца MediaWiki вэрсіі $1',
'versionrequiredtext' => 'Для карыстаньня гэтай старонкай патрабуецца MediaWiki вэрсіі $1.
Глядзіце [[Special:Version|інфармацыю пра вэрсію]].',

'ok' => 'Добра',
'pagetitle' => '$1 — {{SITENAME}}',
'retrievedfrom' => 'Атрымана з «$1»',
'youhavenewmessages' => 'Вы атрымалі $1 ($2).',
'newmessageslink' => 'новыя паведамленьні',
'newmessagesdifflink' => 'апошняя зьмена',
'youhavenewmessagesfromusers' => 'Вы атрымалі $1 ад {{PLURAL:$3|іншага ўдзельніка|$3 удзельнікаў}} ($2).',
'youhavenewmessagesmanyusers' => 'Вы атрымалі $1 ад некалькіх удзельнікаў ($2).',
'newmessageslinkplural' => '{{PLURAL:$1|новае паведамленьне|новыя паведамленьні}}',
'newmessagesdifflinkplural' => '{{PLURAL:$1|апошняя зьмена|апошнія зьмены}}',
'youhavenewmessagesmulti' => 'Вы атрымалі новыя паведамленьні на $1',
'editsection' => 'рэдагаваць',
'editold' => 'рэдагаваць',
'viewsourceold' => 'паказаць крыніцу',
'editlink' => 'рэдагаваць',
'viewsourcelink' => 'паказаць крыніцу',
'editsectionhint' => 'Рэдагаваць сэкцыю «$1»',
'toc' => 'Зьмест',
'showtoc' => 'паказаць',
'hidetoc' => 'схаваць',
'collapsible-collapse' => 'Згарнуць',
'collapsible-expand' => 'Разгарнуць',
'thisisdeleted' => 'Праглядзець ці аднавіць $1?',
'viewdeleted' => 'Паказаць $1?',
'restorelink' => '$1 {{PLURAL:$1|выдаленую зьмену|выдаленыя зьмены|выдаленых зьменаў}}',
'feedlinks' => 'Стужка:',
'feed-invalid' => 'Памылковы тып стужкі.',
'feed-unavailable' => 'Стужкі не працуюць',
'site-rss-feed' => '$1 — RSS-стужка',
'site-atom-feed' => '$1 — Atom-стужка',
'page-rss-feed' => '«$1» — RSS-стужка',
'page-atom-feed' => '«$1» — Atom-стужка',
'red-link-title' => '$1 (старонка не існуе)',
'sort-descending' => 'Сартаваць па зьмяншэньні',
'sort-ascending' => 'Сартаваць па ўзрастаньні',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main' => 'Старонка',
'nstab-user' => 'Старонка {{GENDER:{{BASEPAGENAME}}|ўдзельніка|ўдзельніцы}}',
'nstab-media' => 'Мэдыя',
'nstab-special' => 'Спэцыяльная старонка',
'nstab-project' => 'Старонка праекту',
'nstab-image' => 'Файл',
'nstab-mediawiki' => 'Паведамленьне',
'nstab-template' => 'Шаблён',
'nstab-help' => 'Старонка дапамогі',
'nstab-category' => 'Катэгорыя',

# Main script and global functions
'nosuchaction' => 'Няма такога дзеяньня',
'nosuchactiontext' => 'Дзеяньне, пазначанае праз URL, зьяўляецца няслушным.
Магчыма Вы ўвялі няслушны URL, ці перайшлі па няслушнай спасылцы.
Гэта можа быць і памылкай у праграмным забесьпячэньні {{GRAMMAR:родны|{{SITENAME}}}}.',
'nosuchspecialpage' => 'Такой спэцыяльнай старонкі не існуе',
'nospecialpagetext' => '<strong>Спэцыяльная старонка, да якой Вы зьвярнуліся, не існуе.</strong>

Сьпіс дзейных спэцыяльных старонак можна знайсьці на [[Special:SpecialPages|{{int:specialpages}}]].',

# General errors
'error' => 'Памылка',
'databaseerror' => 'Памылка базы зьвестак',
'dberrortext' => 'Выяўленая памылка сынтаксісу ў звароце да базы зьвестак.
Магчыма, гэта памылка праграмнага забесьпячэньня.
Апошні запыт да базы:
<blockquote><code>$1</code></blockquote>
адбыўся з функцыі «<code>$2</code>».
База зьвестак вярнула памылку «<samp>$3: $4</samp>».',
'dberrortextcl' => 'Выяўлена памылка сынтаксісу ў звароце да базы зьвестак.
Апошні запыт да базы:
«$1»
адбыўся з функцыі «$2».
База зьвестак вярнула памылку «$3: $4»',
'laggedslavemode' => 'Увага: старонка можа ня ўтрымліваць апошніх зьменаў.',
'readonly' => 'База зьвестак заблякаваная',
'enterlockreason' => 'Пазначце прычыну блякаваньня і вызначаны час разблякаваньня',
'readonlytext' => 'База зьвестак заблякаваная для дадаваньня новых старонак і іншых зьменаў, верагодна з прычыны тэхнічнага абслугоўваньня, пасьля якога будзе адноўлена звычайная праца.

Адміністратар, які заблякаваў базу зьвестак, пакінуў наступнае тлумачэньне: $1',
'missing-article' => 'У базе зьвестак ня знойдзены тэкст старонкі «$1» $2.

Звычайна гэта адбываецца ў выпадку пераходу па састарэлай розьніцы альбо спасылцы гісторыі старонкі, якая была выдаленая.

Калі справа ня ў гэтым, верагодна Вы знайшлі памылку ў праграмным забесьпячэньні.
Калі ласка, паведаміце пра гэта [[Special:ListUsers/sysop|адміністратару]], пазначыўшы URL.',
'missingarticle-rev' => '(вэрсія № $1)',
'missingarticle-diff' => '(Розьніца: $1, $2)',
'readonly_lag' => 'База зьвестак была аўтаматычна заблякаваная да выкананьня рэплікацыі галоўнай базы зьвестак з другаснымі',
'internalerror' => 'Унутраная памылка',
'internalerror_info' => 'Унутраная памылка: $1',
'fileappenderrorread' => 'Немагчыма прачытаць «$1» пад час дапаўненьня.',
'fileappenderror' => 'Не атрымалася далучыць «$1» да «$2».',
'filecopyerror' => 'Немагчыма cкапіяваць файл «$1» у «$2».',
'filerenameerror' => 'Немагчыма перайменаваць файл «$1» у «$2».',
'filedeleteerror' => 'Немагчыма выдаліць файл «$1».',
'directorycreateerror' => 'Немагчыма стварыць дырэкторыю «$1».',
'filenotfound' => 'Немагчыма знайсьці файл «$1».',
'fileexistserror' => 'Немагчыма запісаць у файл «$1»: файл існуе',
'unexpected' => 'Нечаканае значэньне: «$1»=«$2».',
'formerror' => 'Памылка: не атрымалася адаслаць зьвесткі формы',
'badarticleerror' => 'Гэтае дзеяньне немагчыма выканаць на гэтай старонцы.',
'cannotdelete' => 'Немагчыма выдаліць старонку альбо файл «$1». Магчыма, яна ўжо выдаленая кімсьці іншым.',
'cannotdelete-title' => 'Немагчыма выдаліць старонку «$1»',
'delete-hook-aborted' => 'Выдаленьне скасаванае працэдурай-перахопнікам.
Тлумачэньняў не было.',
'badtitle' => 'Няслушная назва',
'badtitletext' => 'Запытаная назва старонкі няслушная ці пустая, альбо няслушна ўказаная міжмоўная ці інтэрвікі-назва. Яна можа ўтрымліваць сымбалі, якія нельга ўжываць у назвах.',
'perfcached' => 'Наступныя зьвесткі кэшаваныя і могуць быць састарэлымі. У кэшы {{PLURAL:$1|даступны|даступныя}} ня больш за $1 {{PLURAL:$1|вынік|вынікі|вынікаў}}.',
'perfcachedts' => 'Наступныя зьвесткі кэшаваныя і апошні раз былі абноўленыя $1. У кэшы {{PLURAL:$4|даступны|даступныя}} ня больш за $4 {{PLURAL:$4|вынік|вынікі|вынікаў}}.',
'querypage-no-updates' => 'Абнаўленьні гэтай старонкі цяпер адключаныя. Зьвесткі ня будуць абнаўляцца.',
'wrong_wfQuery_params' => 'Няслушныя парамэтры для wfQuery()<br />
Функцыя: $1<br />
Запыт: $2',
'viewsource' => 'Паказаць крыніцу',
'viewsource-title' => 'Прагляд крыніцы для $1',
'actionthrottled' => 'Дзеяньне прытрыманае',
'actionthrottledtext' => 'У межах барацьбы са спамам Вы абмежаваныя ў надта частым выкананьні гэтага дзеяньня за кароткі прамежак часу, і Вы перавысілі гэтае абмежаваньне. Калі ласка, паспрабуйце яшчэ раз празь некалькі хвілінаў.',
'protectedpagetext' => 'Рэдагаваньне гэтай старонкі забароненае.',
'viewsourcetext' => 'Вы можаце праглядаць і капіяваць крынічны тэкст гэтай старонкі:',
'viewyourtext' => "Вы можаце праглядзець і скапіяваць крынічны тэкст '''вашых рэдагаваньняў''' на гэтую старонку:",
'protectedinterface' => 'Гэтая старонка ўтрымлівае інтэрфэйснае паведамленьне праграмнага забесьпячэньня, і яе зьмена забаронена. Каб дадаць ці зьмяніць пераклад ва ўсіх праектах, зьвярніцеся на [//translatewiki.net/ translatewiki.net], праект для перакладу MediaWiki.',
'editinginterface' => "'''Увага:''' Вы рэдагуеце старонку, якая ўтрымлівае сыстэмнае паведамленьне MediaWiki.
Яе зьмена паўплывае на вонкавы выгляд інтэрфэйсу іншых удзельнікаў у гэтай вікі.
Каб дадаць ці зьмяніць пераклад ва ўсіх праектах, зьвярніцеся на [//translatewiki.net/wiki/Main_Page?setlang=be-tarask translatewiki.net] — праект для лякалізацыі MediaWiki.",
'sqlhidden' => '(SQL-запыт схаваны)',
'cascadeprotected' => 'Гэтая старонка абароненая ад рэдагаваньня, таму што яна ўключаная ў {{PLURAL:$1|наступную старонку, якая была абароненая|наступныя старонкі, якія былі абароненыя}} з актывізаванай опцыяй «каскаднай абароны»:
$2',
'namespaceprotected' => "Вы ня маеце правоў на рэдагаваньне старонак у прасторы назваў '''$1'''.",
'customcssprotected' => 'Вы ня маеце правоў на рэдагаваньне гэтай CSS-старонкі, таму што яна ўтрымлівае пэрсанальныя налады іншага ўдзельніка.',
'customjsprotected' => 'Вы ня маеце правоў на рэдагаваньне гэтай старонкі JavaScript, таму што яна ўтрымлівае пэрсанальныя налады іншага ўдзельніка.',
'ns-specialprotected' => 'Немагчыма рэдагаваць спэцыяльныя старонкі.',
'titleprotected' => "Стварэньне старонкі з такой назвай было забароненае ўдзельнікам [[User:$1|$1]].
Прычына забароны: ''$2''.",
'filereadonlyerror' => 'Немагчыма зьмяніць файл «$1», бо файлавае сховішча «$2» знаходзіцца ў рэжыме толькі для чытаньня

Адміністратар, які абмежаваў доступ, пазначыў прычыну: «$3».',
'invalidtitle-knownnamespace' => 'Няслушная назва ў прасторы «$2»: «$3»',
'invalidtitle-unknownnamespace' => 'Няслушная назва ў невядомай прасторы $1: «$2»',
'exception-nologin' => 'Вы не ўвайшлі ў сыстэму',
'exception-nologin-text' => 'Гэтая старонка ці дзеяньне патрабуе, каб вы ўвайшлі ў сыстэму.',

# Virus scanner
'virus-badscanner' => "Няслушная канфігурацыя: невядомы антывірусны сканэр: ''$1''",
'virus-scanfailed' => 'памылка сканаваньня (код $1)',
'virus-unknownscanner' => 'невядомы антывірус:',

# Login and logout pages
'logouttext' => "'''Вы выйшлі з сыстэмы.'''

Вы можаце працягваць працу ў {{GRAMMAR:месны|{{SITENAME}}}} ананімна, альбо можаце <span class='plainlinks'>[$1 ўвайсьці ў сыстэму]</span> як той жа альбо іншы ўдзельнік.
Некаторыя старонкі могуць паказвацца, быццам Вы ўсё яшчэ ў сыстэме. Каб гэтага пазьбегнуць, трэба ачысьціць кэш браўзэра.",
'welcomecreation' => '== Вітаем, $1! ==
Ваш рахунак быў створаны.
Не забудзьцеся зьмяніць Вашыя [[Special:Preferences|налады ў {{GRAMMAR:месны|{{SITENAME}}}}]].',
'yourname' => 'Імя ўдзельніка:',
'yourpassword' => 'Пароль:',
'yourpasswordagain' => 'Паўтарыце пароль:',
'remembermypassword' => 'Запомніць мяне на гэтым кампутары (ня больш за $1 {{PLURAL:$1|дзень|дні|дзён}})',
'securelogin-stick-https' => 'Утрымліваць злучэньне праз HTTPS пасьля ўваходу ў сыстэму',
'yourdomainname' => 'Ваш дамэн:',
'password-change-forbidden' => 'Вы ня можаце зьмяняць паролі ў гэтай вікі.',
'externaldberror' => 'Адбылася памылка аўтэнтыфікацыі з дапамогай вонкавай базы зьвестак, ці Вам не дазволена абнаўляць свой рахунак.',
'login' => 'Увайсьці',
'nav-login-createaccount' => 'Уваход / стварэньне рахунку',
'loginprompt' => 'Вы павінны дазволіць cookie для ўваходу ў {{GRAMMAR:вінавальны|{{SITENAME}}}}.',
'userlogin' => 'Увайсьці ў сыстэму',
'userloginnocreate' => 'Увайсьці',
'logout' => 'Выйсьці',
'userlogout' => 'Выйсьці',
'notloggedin' => 'Вы не ўвайшлі ў сыстэму',
'nologin' => "Ня маеце рахунку? '''$1'''.",
'nologinlink' => 'Стварыць рахунак',
'createaccount' => 'Стварыць рахунак',
'gotaccount' => "Ужо маеце рахунак? '''$1'''.",
'gotaccountlink' => 'Увайдзіце',
'userlogin-resetlink' => 'Забыліся пра зьвесткі для ўваходу?',
'createaccountmail' => 'па электроннай пошце',
'createaccountreason' => 'Прычына:',
'badretype' => 'Уведзеныя Вамі паролі не супадаюць.',
'userexists' => 'Уведзенае Вамі імя ўдзельніка ўжо выкарыстоўваецца кімсьці іншым. 
Калі ласка, выберыце іншае імя.',
'loginerror' => 'Памылка ўваходу',
'createaccounterror' => 'Немагчыма стварыць рахунак: $1',
'nocookiesnew' => 'Рахунак быў створаны, але ў сыстэму Вы не ўвайшлі.
{{SITENAME}} выкарыстоўвае cookie для ўваходу ў сыстэму.
У Вашым браўзэры cookies адключаныя.
Калі ласка, дазвольце іх, а потым ўвайдзіце з новым іменем удзельніка і паролем.',
'nocookieslogin' => '{{SITENAME}} выкарыстоўвае cookie для ўваходу ў сыстэму.
У Вашым браўзэры cookie адключаныя.
Калі ласка, уключыце іх і паспрабуйце яшчэ раз.',
'nocookiesfornew' => 'Рахунак удзельніка ня быў створаны, таму што мы не змаглі пацьвердзіць яго крыніцу. 
Упэўніце, што ў Вас уключаныя закладкі (cookies), перазагрузіце гэтую старонку і паспрабуйце зноў.',
'noname' => 'Вы пазначылі няслушнае імя ўдзельніка.',
'loginsuccesstitle' => 'Пасьпяховы ўваход у сыстэму',
'loginsuccess' => "'''Цяпер Вы ўвайшлі ў {{GRAMMAR:вінавальны|{{SITENAME}}}} як «$1».'''",
'nosuchuser' => 'Удзельніка «$1» не існуе.
Вялікія і малыя літары адрозьніваюцца ў імёнах удзельнікаў.
Праверце напісаньне альбо [[Special:UserLogin/signup|стварыце новы рахунак]].',
'nosuchusershort' => 'Удзельніка зь іменем «$1» не існуе. Праверце напісаньне.',
'nouserspecified' => 'Вы мусіце пазначыць імя ўдзельніка.',
'login-userblocked' => '{{GENDER:$1|Гэты ўдзельнік заблякаваны|Гэтая ўдзельніца заблякаваная}}. Уваход у сыстэму забаронены.',
'wrongpassword' => 'Уведзены няслушны пароль. Калі ласка, паспрабуйце яшчэ раз.',
'wrongpasswordempty' => 'Быў уведзены пусты пароль. Калі ласка, паспрабуйце яшчэ раз.',
'passwordtooshort' => 'Паролі павінны ўтрымліваць ня менш за $1 {{PLURAL:$1|сымбаль|сымбалі|сымбаляў}}.',
'password-name-match' => 'Ваш пароль павінен адрозьнівацца ад Вашага імя ўдзельніка.',
'password-login-forbidden' => 'Выкарыстаньне гэтага імя ўдзельніка і пароля было забароненае.',
'mailmypassword' => 'Даслаць новы пароль па электроннай пошце',
'passwordremindertitle' => 'Новы часовы пароль для {{GRAMMAR:родны|{{SITENAME}}}}',
'passwordremindertext' => 'Нехта (магчыма Вы, з IP-адрасу $1) запытаў нас даслаць новы пароль для {{GRAMMAR:родны|{{SITENAME}}}} ($4). Для ўдзельніка «$2» быў створаны часовы пароль і ён цяпер «$3». Калі гэта была Вашая ініцыятыва, Вам трэба ўвайсьці ў сыстэму і адразу зьмяніць пароль. Тэрмін дзеяньня Вашага часовага паролю — $5 {{PLURAL:$5|дзень|дні|дзён}}.

Калі гэты запыт адправіў нехта іншы, альбо Вы ўзгадалі свой пароль і ўжо не жадаеце яго зьмяніць, Вы можаце праігнараваць гэты ліст і працягваць карыстацца старым паролем.',
'noemail' => '{{GENDER:$1|Удзельнік «$1» не пазначыў|Удзельніца «$1» не пазначыла}} ніякага адрасу электроннай пошты.',
'noemailcreate' => 'Вы павінны пазначыць слушны адрас электроннай пошты',
'passwordsent' => 'Новы пароль быў дасланы на адрас электроннай пошты ўдзельніка «$1».
Калі ласка, увайдзіце ў сыстэму пасьля яго атрыманьня.',
'blocked-mailpassword' => 'З Вашага IP-адрасу забароненыя рэдагаваньні, а таму таксама для прадухіленьня шкоды недаступная функцыя аднаўленьня паролю.',
'eauthentsent' => 'Пацьверджаньне было дасланае на пазначаны адрас электроннай пошты.
У лісьце ўтрымліваюцца інструкцыі, па выкананьні якіх, Вы зможаце пацьвердзіць, што адрас сапраўды належыць Вам, і на гэты адрас будзе дасылацца пошта адсюль.',
'throttled-mailpassword' => 'Напамін паролю ўжо быў дасланы на працягу {{PLURAL:$1|апошняй $1 гадзіны|апошніх $1 гадзінаў|апошніх $1 гадзінаў}}.
Для прадухіленьня злоўжываньняў, напамін будзе дасылацца не часьцей аднаго разу за $1 {{PLURAL:$1|гадзіну|гадзіны|гадзінаў}}.',
'mailerror' => 'Памылка пры адпраўцы электроннай пошты: $1',
'acct_creation_throttle_hit' => 'Наведвальнікі гэтай вікі, якія карысталіся Вашым ІР-адрасам, ужо стварылі $1 {{PLURAL:$1|рахунак у|рахункі ў|рахункаў у}} апошнія дні, што перавышае максымальную дазволеную колькасьць за гэты пэрыяд.
У выніку, наведвальнікі, якія карыстаюцца гэтым ІР-адрасам, ня могуць стварыць зараз болей рахункаў.',
'emailauthenticated' => 'Ваш адрас электроннай пошты быў пацьверджаны $2 у $3.',
'emailnotauthenticated' => 'Ваш адрас электроннай пошты яшчэ не пацьверджаны.
Электронная пошта для наступных магчымасьцяў дасылацца ня будзе.',
'noemailprefs' => 'Пазначце адрас электроннай пошты ў Вашых наладах, каб актывізаваць гэтыя магчымасьці.',
'emailconfirmlink' => 'Пацьвердзіць Ваш адрас электроннай пошты',
'invalidemailaddress' => 'Уведзены адрас электроннай пошты не адпавядае фармату адрасоў электроннай пошты.
Увядзіце слушны адрас электроннай пошты ці ачысьціце гэтае поле.',
'cannotchangeemail' => 'Электронная пошта рахунку ня можа быць зьмененая ў {{GRAMMAR:месны|{{SITENAME}}}}.',
'emaildisabled' => 'Гэты сайт ня можа адсылаць электронныя лісты.',
'accountcreated' => 'Рахунак створаны',
'accountcreatedtext' => 'Рахунак удзельніка для $1 быў створаны.',
'createaccount-title' => 'Стварэньне рахунку ў {{GRAMMAR:месны|{{SITENAME}}}}',
'createaccount-text' => 'Нехта стварыў рахунак «$2» у {{GRAMMAR:месны|{{SITENAME}}}} ($4) для Вашага адрасу электроннай пошты. Пароль для гэтага рахунку — «$3». Вам трэба ўвайсьці і зьмяніць Ваш пароль зараз.

Вы можаце праігнараваць гэты ліст, калі гэты рахунак быў створаны памылкова.',
'usernamehasherror' => 'Імя ўдзельніка ня можа ўтрымліваць сымбаль #',
'login-throttled' => 'Вы зрабілі занадта шмат спробаў уваходу ў сыстэму.
Калі ласка, пачакайце, перад тым, як паспрабаваць ізноў.',
'login-abort-generic' => 'Не атрымалася ўвайсьці ў сыстэму, скасавана',
'loginlanguagelabel' => 'Мова: $1',
'suspicious-userlogout' => 'Ваш запыт на выхад з сыстэмы быў адхілены, таму што выглядае, што ён быў дасланы пашкоджаным браўзэрам альбо кэшаваным проксі-сэрвэрам.',

# E-mail sending
'php-mail-error-unknown' => 'Узьнікла невядомая памылка ў функцыі PHP mail()',
'user-mail-no-addy' => 'Спроба даслаць электронны ліст без адрасу дастаўкі',

# Change password dialog
'resetpass' => 'Зьмяніць пароль',
'resetpass_announce' => 'Вы ўвайшлі з дапамогай часовага паролю, дасланага праз электронную пошту.
Для завяршэньня ўваходу ў сыстэму Вы мусіце ўвесьці тут новы пароль:',
'resetpass_header' => 'Зьмяніць пароль рахунку',
'oldpassword' => 'Стары пароль:',
'newpassword' => 'Новы пароль:',
'retypenew' => 'Паўтарыце новы пароль:',
'resetpass_submit' => 'Наставіць пароль і увайсьці',
'resetpass_success' => 'Ваш пароль быў пасьпяхова зьменены! Выконваецца ўваход у сыстэму…',
'resetpass_forbidden' => 'Пароль ня можа быць зьменены',
'resetpass-no-info' => 'Для непасрэднага доступу да гэтай старонкі Вам неабходна ўвайсьці ў сыстэму.',
'resetpass-submit-loggedin' => 'Зьмяніць пароль',
'resetpass-submit-cancel' => 'Скасаваць',
'resetpass-wrong-oldpass' => 'Няслушны часовы альбо цяперашні пароль.
Магчыма Вы ўжо пасьпяхова зьмянілі Ваш пароль альбо запыталі новы часовы пароль.',
'resetpass-temp-password' => 'Часовы пароль:',

# Special:PasswordReset
'passwordreset' => 'Ачыстка паролю',
'passwordreset-text' => 'Запоўніце гэтую форму, каб атрымаць напамін праз электронную пошту пра Вашыя зьвесткі для ўваходу.',
'passwordreset-legend' => 'Ачысьціць пароль',
'passwordreset-disabled' => 'Магчымасьць ачысткі паролю была забароненая ў {{GRAMMAR:месны|{{SITENAME}}}}.',
'passwordreset-pretext' => '{{PLURAL:$1||Увядзіце ніжэй частку зьвестак}}',
'passwordreset-username' => 'Імя ўдзельніка:',
'passwordreset-domain' => 'Дамэн:',
'passwordreset-capture' => 'Паказаць канчатковы электронны ліст?',
'passwordreset-capture-help' => 'Калі Вы пазначыце гэтае поле, электронны ліст (з часовым паролем), будзе паказаны Вам як толькі ён будзе дасланы ўдзельніку.',
'passwordreset-email' => 'Адрас электроннай пошты:',
'passwordreset-emailtitle' => 'Падрабязнасьці рахунку ў {{GRAMMAR:месны|{{SITENAME}}}}',
'passwordreset-emailtext-ip' => 'Нехта (магчыма Вы, з IP-адрасу $1) зрабіў запыт на атрыманьне падрабязнасьцяў Вашага рахунку ў {{GRAMMAR:месны|{{SITENAME}}}} ($4). {{PLURAL:$3|Наступны рахунак удзельніка зьвязаны|Наступныя рахункі удзельнікаў зьвязаныя}} з гэтым адрасам электроннай пошты:

$2

{{PLURAL:$3|Гэты часовы пароль будзе|Гэтыя часовыя паролі будуць}} дзейнічаць $5 {{PLURAL:|дзень|дні|дзён}}.
Цяпер Вам неабходна ўвайсьці і выбраць новы пароль. Калі нехта іншы зрабіў гэты запыт,
ці Вы ўспомнілі Ваш пачатковы пароль, які ня хочаце мяняць,
Вы можаце праігнараваць гэтае паведамленьне, і працягваць выкарыстоўваць стары пароль.',
'passwordreset-emailtext-user' => 'Удзельнік $1 зрабіў запыт на атрыманьне падрабязнасьцяў Вашага рахунку ў {{GRAMMAR:месны|{{SITENAME}}}} ($4). {{PLURAL:$3|Наступны рахунак удзельніка зьвязаны|Наступныя рахункі удзельнікаў зьвязаныя}} з гэтым адрасам электроннай пошты:

$2

{{PLURAL:$3|Гэты часовы пароль будзе|Гэтыя часовыя паролі будуць}} дзейнічаць $5 {{PLURAL:|дзень|дні|дзён}}.
Цяпер Вам неабходна ўвайсьці і выбраць новы пароль. Калі нехта іншы зрабіў гэты запыт,
ці Вы ўспомнілі Ваш пачатковы пароль, які ня хочаце мяняць,
Вы можаце праігнараваць гэтае паведамленьне, і працягваць выкарыстоўваць стары пароль.',
'passwordreset-emailelement' => 'Імя ўдзельніка: $1
Часовы пароль: $2',
'passwordreset-emailsent' => 'Напамін быў дасланы па электроннай пошце.',
'passwordreset-emailsent-capture' => 'Электронны ліст з напамінам быў дасланы, што паказана ніжэй.',
'passwordreset-emailerror-capture' => 'Электронны ліст з напамінам быў створаны, што паказана ніжэй, але адбылася памылка адпраўкі ўдзельніку: $1',

# Special:ChangeEmail
'changeemail' => 'Зьмяніць адрас электроннай пошты',
'changeemail-header' => 'Зьмена адрасу электроннай пошты для рахунку',
'changeemail-text' => 'Запоўніце гэтую форму для зьмены адрасу Вашай электроннай пошты. Вам неабходна будзе ўвесьці Ваш пароль для пацьверджаньня зьмены.',
'changeemail-no-info' => 'Для непасрэднага доступу да гэтай старонкі Вам неабходна ўвайсьці ў сыстэму.',
'changeemail-oldemail' => 'Цяперашні адрас электроннай пошты:',
'changeemail-newemail' => 'Новы адрас электроннай пошты:',
'changeemail-none' => '(няма)',
'changeemail-submit' => 'Зьмяніць адрас электроннай пошты',
'changeemail-cancel' => 'Скасаваць',

# Edit page toolbar
'bold_sample' => 'Тоўсты тэкст',
'bold_tip' => 'Тоўсты тэкст',
'italic_sample' => 'Курсіўны тэкст',
'italic_tip' => 'Курсіўны тэкст',
'link_sample' => 'Загаловак спасылкі',
'link_tip' => 'Унутраная спасылка',
'extlink_sample' => 'http://www.example.com загаловак спасылкі',
'extlink_tip' => 'Вонкавая спасылка (не забывайцеся пачынаць з http:// )',
'headline_sample' => 'Тэкст загалоўку',
'headline_tip' => 'Загаловак 2-га ўзроўню',
'nowiki_sample' => 'Устаўце сюды нефарматаваны тэкст',
'nowiki_tip' => 'Ігнараваць вікі-фарматаваньне',
'image_sample' => 'Прыклад.jpg',
'image_tip' => 'Укладзены файл',
'media_sample' => 'Прыклад.ogg',
'media_tip' => 'Спасылка на файл',
'sig_tip' => 'Ваш подпіс і момант часу',
'hr_tip' => 'Гарызантальная лінія (не выкарыстоўвайце часта)',

# Edit pages
'summary' => 'Кароткае апісаньне зьменаў:',
'subject' => 'Тэма/назва:',
'minoredit' => 'Гэта дробная праўка',
'watchthis' => 'Назіраць за гэтай старонкай',
'savearticle' => 'Захаваць старонку',
'preview' => 'Папярэдні прагляд',
'showpreview' => 'Праглядзець',
'showlivepreview' => 'Хуткі папярэдні прагляд',
'showdiff' => 'Паказаць зьмены',
'anoneditwarning' => "'''Папярэджаньне:''' Вы не ўвайшлі ў сыстэму. Ваш IP-адрас будзе запісаны ў гісторыі гэтай старонкі.",
'anonpreviewwarning' => "''Вы не ўвайшлі ў сыстэму. Падчас захаваньня Ваш IP-адрас будзе дададзены ў гісторыю рэдагаваньняў старонкі.''",
'missingsummary' => "'''Напамін:''' Вы не пазначылі кароткае апісаньне зьменаў.
Калі Вы націсьніце кнопку «Запісаць» яшчэ раз, Вашае рэдагаваньне будзе запісанае без апісаньня.",
'missingcommenttext' => 'Калі ласка, увядзіце камэнтар ніжэй.',
'missingcommentheader' => "'''Напамін:''' Вы не пазначылі загаловак камэнтара.
Калі Вы націсьніце кнопку «{{int:savearticle}}» яшчэ раз, Ваш камэнтар захаваецца бяз тэмы.",
'summary-preview' => 'Папярэдні прагляд апісаньня:',
'subject-preview' => 'Папярэдні прагляд загалоўку:',
'blockedtitle' => 'Удзельнік заблякаваны',
'blockedtext' => "'''Ваш рахунак ўдзельніка ці IP-адрас быў заблякаваны.'''

Блякаваньне выканаў $1.
Прычына гэтага: ''$2''.

* Пачатак блякаваньня: $8
* Сканчэньне блякаваньня: $6
* Быў заблякаваны: $7

Вы можаце скантактавацца з $1 ці адным зь іншых [[{{MediaWiki:Grouppage-sysop}}|адміністратараў]], каб абмеркаваць блякаваньне. Заўважце, што Вы ня зможаце ўжыць магчымасьць «даслаць ліст па электроннай пошце», пакуль не пазначыце сапраўдны адрас электроннай пошты ў Вашых [[Special:Preferences|наладах]], і калі гэта Вам не было забаронена.
Ваш IP-адрас — $3, ідэнтыфікатар блякаваньня — #$5.
Калі ласка, улучайце ўсю вышэйпададзеную інфармацыю ва ўсе запыты, што Вы будзеце рабіць.",
'autoblockedtext' => "Ваш IP-адрас быў аўтаматычна заблякаваны, таму што ён ужываўся іншым удзельнікам, які быў заблякаваны $1.
Прычына гэтага:

:''$2''

* Блякаваньне пачалося: $8
* Блякаваньне скончыцца: $6
* Быў заблякаваны: $7

Вы можаце скантактавацца з $1 ці з адным зь іншых [[{{MediaWiki:Grouppage-sysop}}|адміністратараў]], каб абмеркаваць блякаваньне.

Заўважце, што Вы ня зможаце ужываць магчымасьць «даслаць ліст праз электронную пошту», пакуль ня будзе пазначаны дзейны адрас электроннай пошты ў Вашых [[Special:Preferences|наладах удзельніка]], і калі гэта Вам не было забаронена.

Ваш цяперашні IP-адрас — $3, ідэнтыфікатар блякаваньня — #$5.
Калі ласка, улучайце ўсю вышэйпададзеную інфармацыю ва ўсе запыты, што Вы будзеце рабіць.",
'blockednoreason' => 'прычына не пазначана',
'whitelistedittext' => 'Вам трэба $1, каб рэдагаваць старонкі.',
'confirmedittext' => 'Вы мусіце пацьвердзіць Ваш адрас электроннай пошты перад рэдагаваньнем старонак. Калі ласка, пазначце і пацьвердзіце адрас электроннай пошты праз Вашы [[Special:Preferences|налады]].',
'nosuchsectiontitle' => 'Немагчыма знайсьці сэкцыю',
'nosuchsectiontext' => 'Вы спрабуеце рэдагаваць сэкцыю, якой не існуе.
Яна магла быць перанесена, альбо выдалена пад час Вашага прагляду старонкі.',
'loginreqtitle' => 'Патрабуецца ўваход у сыстэму',
'loginreqlink' => 'ўвайсьці',
'loginreqpagetext' => 'Вы мусіце $1, каб праглядаць іншыя старонкі.',
'accmailtitle' => 'Пароль адасланы.',
'accmailtext' => "Выпадковым чынам створаны пароль для [[User talk:$1|$1]] быў адасланы па адрасе $2.

Пароль для гэтага новага рахунку можа быць зьменены на старонцы ''[[Special:ChangePassword|зьмены паролю]]'' пасьля ўваходу.",
'newarticle' => '(Новая)',
'newarticletext' => "Вы прыйшлі па спасылцы на старонку, якая яшчэ не існуе.
Каб стварыць яе, напішыце тэкст у полі ніжэй (глядзіце [[{{MediaWiki:Helppage}}|старонку дапамогі]] для дадатковай інфармацыі).
Калі Вы трапілі сюды памылкова, націсьніце '''назад''' у вашым браўзэры.",
'anontalkpagetext' => "----''Гэта старонка гутарак ананімнага ўдзельніка, які яшчэ не стварыў сабе рахунак альбо не ўжывае яго. Таму мы вымушаныя ўжываць лічбавы IP-адрас дзеля ягонай ідэнтыфікацыі. Адзін IP-адрас можа выкарыстоўвацца некалькімі ўдзельнікамі. Калі Вы — ананімны ўдзельнік і лічыце, што атрымалі не прызначаныя Вам камэнтары, калі ласка, [[Special:UserLogin/signup|стварыце рахунак]] альбо [[Special:UserLogin|увайдзіце ў сыстэму]], каб у будучыні пазьбегнуць магчымай блытаніны зь іншымі ананімнымі ўдзельнікамі.''",
'noarticletext' => 'Цяпер тэкст на гэтай старонцы адсутнічае.
Вы можаце [[Special:Search/{{PAGENAME}}|пашукаць гэтую назву]] ў іншых старонках, <span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} пашукаць у адпаведных журналах падзеяў]
альбо [{{fullurl:{{NAMESPACE}}:{{PAGENAME}}|action=edit}} рэдагаваць гэтую старонку]</span>.',
'noarticletext-nopermission' => 'Цяпер на гэтай старонцы тэкст адсутнічае.
Вы можаце [[Special:Search/{{PAGENAME}}|пашукаць назву гэтай старонкі]] на іншых старонках, альбо <span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} пашукаць зьвязаныя запісы ў журналах]</span>, але ў вас няма дазволу ствараць гэтую старонку.',
'missing-revision' => 'Вэрсія старонкі №$1 з назвай «{{PAGENAME}}» не існуе.

Звычайна гэта здараецца з-за перахода па састарэлай спасылцы на старонку, якая была выдаленая.
Падрабязнасьці можна знайсьці ў [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} журнале выдаленьняў].',
'userpage-userdoesnotexist' => 'Рахунак удзельніка «<nowiki>$1</nowiki>» не зарэгістраваны. Калі ласка, удакладніце, ці жадаеце Вы стварыць/рэдагаваць гэтую старонку.',
'userpage-userdoesnotexist-view' => 'Рахунак «$1» ня створаны.',
'blocked-notice-logextract' => 'Гэты ўдзельнік у дадзены момант заблякаваны.
Апошні запіс з журналу блякаваньняў пададзены ніжэй для даведкі:',
'clearyourcache' => "'''Заўвага:''' Каб пабачыць зьмены пасьля захаваньня, Вам можа спатрэбіцца ачысьціць кэш Вашага браўзэра. 
* '''Firefox / Safari:''' Трымайце ''Shift'' і націсьніце ''Reload'', ці націсьніце ''Ctrl-F5'' ці ''Ctrl-R'' (''⌘-R'' на Mac)
* '''Google Chrome:''' Націсьніце ''Ctrl-Shift-R'' (''⌘-Shift-R'' на Mac)
* '''Internet Explorer:''' Трымайце ''Ctrl'' і націсьніце ''Refresh'', ці націсьніце ''Ctrl-F5''
* '''Opera:''' Ачысьціце кэш праз ''Tools → Preferences''",
'usercssyoucanpreview' => "'''Падказка:''' выкарыстоўвайце кнопку «{{int:showpreview}}», каб паспрабаваць новы код CSS перад тым як яго запісаць.",
'userjsyoucanpreview' => "'''Падказка:''' выкарыстоўвайце кнопку «{{int:showpreview}}», каб паспрабаваць новы код JavaScript перад тым, як яго запісаць.",
'usercsspreview' => "'''Памятайце, што гэта толькі папярэдні прагляд Вашага CSS. Ён яшчэ не запісаны!'''",
'userjspreview' => "'''Памятайце, што гэта толькі папярэдні прагляд Вашага JavaScript, ён яшчэ не запісаны!'''",
'sitecsspreview' => "'''Памятайце, што гэта толькі папярэдні прагляд гэтага CSS.'''
'''Ён яшчэ не захаваны!'''",
'sitejspreview' => "'''Памятайце, што гэта толькі папярэдні прагляд гэтага коду JavaScript.'''
'''Ён яшчэ не захаваны!'''",
'userinvalidcssjstitle' => "'''Папярэджаньне:''' няма тэмы афармленьня «$1».
Памятайце, што ўласныя старонкі .css і .js павінны мець назву, якая складаецца з малых літараў, напрыклад, {{ns:user}}:Хтосьці/vector.css, а не {{ns:user}}:Хтосьці/Vector.css.",
'updated' => '(Абноўлена)',
'note' => "'''Заўвага: '''",
'previewnote' => "'''Гэта толькі папярэдні прагляд.'''
Вашыя зьмены яшчэ не былі захаваныя!",
'continue-editing' => 'Перайсьці да рэдагаваньня',
'previewconflict' => 'Гэта папярэдні прагляд тэксту зь верхняга вакна рэдагаваньня, так ён будзе выглядаць, калі Вы вырашыце яго захаваць.',
'session_fail_preview' => "'''Не атрымалася захаваць Вашую праўку праз тое, што былі страчаныя зьвесткі пра сэсію.
Калі ласка, паспрабуйце яшчэ раз. Калі памылка ня зьнікне, паспрабуйце [[Special:UserLogout|выйсьці з сыстэмы]] і ўвайсьці ізноў.'''",
'session_fail_preview_html' => "'''Не атрымалася захаваць Вашую праўку праз тое, што былі страчаныя зьвесткі пра сэсію.'''

''Таму што ў {{GRAMMAR:месны|{{SITENAME}}}} дазволена выкарыстоўваць чысты HTML, папярэдні прагляд быў адключаны для засьцярогі ад атакаў праз JavaScript.''

'''Калі гэта сапраўдная спроба рэдагаваньня, калі ласка, паспрабуйце яшчэ раз. Калі гэта не дапамагае, паспрабуйце [[Special:UserLogout|выйсьці з сыстэмы]] і ўвайсьці ізноў.'''",
'token_suffix_mismatch' => "'''Вашае рэдагаваньне было адхіленае, таму што Ваш кліент ня можа апрацоўваць знакі пунктуацыі ў акне рэдагаваньня.
Рэдагаваньне было скасаванае для таго, каб пазьбегнуць зьнішчэньня тэксту старонкі.
Такія памылкі здараюцца, калі Вы выкарыстоўваеце ананімны проксі-сэрвэр, які ўтрымлівае памылкі.'''",
'edit_form_incomplete' => "'''Некаторыя часткі формы рэдагаваньня не дасягнулі сэрвэра. Упэўніцеся, што Вашыя рэдагаваньні не пашкоджаныя і паспрабуйце зноў.'''",
'editing' => 'Рэдагаваньне: $1',
'creating' => 'Стварэньне «$1»',
'editingsection' => 'Рэдагаваньне: $1 (сэкцыя)',
'editingcomment' => 'Рэдагаваньне: $1 (новая сэкцыя)',
'editconflict' => 'Канфлікт рэдагаваньня: $1',
'explainconflict' => "Нехта зьмяніў старонку падчас Вашага рэдагаваньня.
У верхнім тэкставым акне знаходзіцца цяперашні зьмест старонкі.
Вашыя зьмены паказаныя ў ніжнім акне.
Вам трэба перанесьці Вашыя зьмены ў цяперашні тэкст.
Калі Вы націсьніце «{{int:savearticle}}», будзе захаваны '''толькі''' тэкст верхняга вакна.",
'yourtext' => 'Ваш тэкст',
'storedversion' => 'Захаваная вэрсія',
'nonunicodebrowser' => "'''ПАПЯРЭДЖАНЬНЕ: Ваш браўзэр не працуе з кадаваньнем UTF-8 (Unicode).
У выніку гэтага ўсе сымбалі ня ўключаныя ў ASCII будуць замененыя на іх шаснаццаткавыя коды.'''",
'editingold' => "'''ПАПЯРЭДЖАНЬНЕ: Вы рэдагуеце састарэлую вэрсію гэтай старонкі.
Калі Вы паспрабуеце захаваць яе, любыя зьмены, зробленыя пасьля гэтай вэрсіі, будуць страчаныя.'''",
'yourdiff' => 'Адрозьненьні',
'copyrightwarning' => "Калі ласка, зьвярніце ўвагу на тое, што ўсе дадаткі і зьмены ў {{GRAMMAR:месны|{{SITENAME}}}} разглядаюцца як выдадзеныя ў адпаведнасьці з умовамі ліцэнзіі $2 (глядзіце падрабязнасьці на $1). Калі Вы супраць таго, каб Вашыя матэрыялы неабмежавана рэдагавалася і распаўсюджвалася, не дадавайце іх.<br />
Вы таксама абавязуецеся, што Ваш матэрыял напісаны асабіста Вамі або зьяўляецца грамадзкім набыткам, альбо ўзяты з падобных вольных крыніцаў.
'''НЕЛЬГА БЕЗ ДАЗВОЛУ ДАДАВАЦЬ МАТЭРЫЯЛЫ, АБАРОНЕНЫЯ АЎТАРСКІМ ПРАВАМ!'''",
'copyrightwarning2' => "Калі ласка, заўважце, што ўвесь унёсак ў {{GRAMMAR:вінавальны|{{SITENAME}}}} можа рэдагавацца, зьмяняцца і выдаляцца іншымі ўдзельнікамі.
Калі Вы з гэтым ня згодныя, калі ласка, не зьмяшчайце сюды Вашыя тэксты.<br />
Разьмяшчэньнем тут тэкстаў, Вы дэкляруеце, што Вы зьяўляецеся іх аўтарам, ці Вы скапіявалі іх з крыніцы, якая дазваляе вольнае выкарыстаньне сваіх тэкстаў (дзеля падрабязнасьцяў глядзіце $1).

'''КАЛІ ЛАСКА, НЕ ЗЬМЯШЧАЙЦЕ ТУТ БЕЗ ДАЗВОЛУ МАТЭРЫЯЛЫ, ЯКІЯ АХОЎВАЮЦЦА АЎТАРСКІМ ПРАВАМ!'''",
'longpageerror' => "'''Памылка: Аб’ём тэксту, які Вы спрабуеце запісаць складае $1 {{PLURAL:$1|кілябайт|кілябайты|кілябайтаў}}, што болей устаноўленага абмежаваньня на $2 {{PLURAL:$2|кілябайт|кілябайты|кілябайтаў}}.'''
Старонка ня можа быць захаваная.",
'readonlywarning' => "'''ПАПЯРЭДЖАНЬНЕ: База зьвестак была заблякаваная для тэхнічнага абслугоўваньня, таму немагчыма зараз захаваць Вашыя зьмены.
Вы можаце скапіяваць тэкст у файл на Вашым кампутары, а пазьней захаваць сюды.'''

Адміністратар, які заблякаваў базу зьвестак, прапанаваў наступнае тлумачэньне: $1",
'protectedpagewarning' => "'''Папярэджаньне: Гэтая старонка была абароненая, таму толькі адміністратары могуць рэдагаваць яе.'''
Апошні запіс з журнала пададзены ніжэй для даведкі:",
'semiprotectedpagewarning' => "'''Заўвага:''' Гэтая старонка была абароненая, і рэдагаваць яе могуць толькі зарэгістраваныя ўдзельнікі.
Апошні запіс з журнала пададзены ніжэй для даведкі:",
'cascadeprotectedwarning' => "'''Папярэджаньне:''' Гэтая старонка абароненая, толькі ўдзельнікі з правамі адміністратараў могуць рэдагаваць яе, таму што яна ўключаная ў {{PLURAL:$1|наступную каскадна-абароненую старонку|наступныя каскадна-абароненыя старонкі}}:",
'titleprotectedwarning' => "'''Папярэджаньне: гэтая старонка была абароненая і для яе стварэньня патрабуюцца [[Special:ListGroupRights|адпаведныя правы]].'''
Апошні запіс з журнала пададзены ніжэй для даведкі:",
'templatesused' => 'На гэтай старонцы {{PLURAL:$1|выкарыстаны наступны шаблён|выкарыстаныя наступныя шаблёны}}:',
'templatesusedpreview' => 'У гэтым папярэднім праглядзе {{PLURAL:$1|выкарыстаны наступны шаблён|выкарыстаныя наступныя шаблёны}}:',
'templatesusedsection' => 'У гэтай сэкцыі {{PLURAL:$1|выкарыстаны наступны шаблён|выкарыстаныя наступныя шаблёны}}:',
'template-protected' => '(абаронены)',
'template-semiprotected' => '(часткова абароненая)',
'hiddencategories' => 'Гэтая старонка належыць $1 {{PLURAL:$1|схаванай катэгорыі|схаваным катэгорыям|схаваным катэгорыям}}:',
'nocreatetitle' => 'Стварэньне старонак абмежаванае',
'nocreatetext' => 'У {{GRAMMAR:месны|{{SITENAME}}}} абмежаванае стварэньне новых старонак.
Вы можаце вярнуцца і рэдагаваць існуючую старонку, альбо [[Special:UserLogin|ўвайсьці ў сыстэму ці стварыць рахунак]].',
'nocreate-loggedin' => 'Вы ня маеце дазволу на стварэньне новых старонак.',
'sectioneditnotsupported-title' => 'Рэдагаваньне сэкцыяў не падтрымліваецца',
'sectioneditnotsupported-text' => 'Рэдагаваньне сэкцыяў не падтрымліваецца ў гэтай старонцы рэдагаваньня',
'permissionserrors' => 'Памылкі дазволаў',
'permissionserrorstext' => 'Вы ня маеце дазволу на гэтае дзеяньне па {{PLURAL:$1|наступнай прычыне|наступных прычынах}}:',
'permissionserrorstext-withaction' => 'Вы ня маеце дазволу на $2 па {{PLURAL:$1|наступнай прычыне|наступных прычынах}}:',
'recreate-moveddeleted-warn' => "'''Увага: Вы ствараеце старонку, якая раней была выдаленая.'''

Упэўніцеся, што стварэньне гэтай старонкі неабходнае.
Ніжэй пададзеныя журналы выдаленьняў і пераносаў гэтай старонкі:",
'moveddeleted-notice' => 'Гэта старонка была выдаленая. Журналы выдаленьняў і пераносаў для гэтай старонкі пададзеныя ніжэй.',
'log-fulllog' => 'Паказаць журнал цалкам',
'edit-hook-aborted' => 'Рэдагаваньне скасаванае працэдурай-перахопнікам.
Тлумачэньняў не было.',
'edit-gone-missing' => 'Немагчыма абнавіць старонку.
Падобна, што яна была выдаленая.',
'edit-conflict' => 'Канфлікт рэдагаваньняў.',
'edit-no-change' => 'Вашае рэдагаваньне было праігнараванае, таму што ў тэкст не былі ўнесеныя зьмены.',
'edit-already-exists' => 'Немагчыма стварыць новую старонку.
Яна ўжо існуе.',
'defaultmessagetext' => 'Перадвызначаны тэкст паведамленьня',
'content-failed-to-parse' => 'Зьмест «$2» не адпавядае тыпу $1: $3.',
'invalid-content-data' => 'Няслушныя зьвесткі',
'content-not-allowed-here' => 'Зьмест тыпу «$1» на старонцы [[$2]] не дазволены',

# Content models
'content-model-wikitext' => 'вікі-тэкст',
'content-model-text' => 'просты тэкст',
'content-model-javascript' => 'JavaScript',
'content-model-css' => 'CSS',

# Parser/template warnings
'expensive-parserfunction-warning' => 'Папярэджаньне: гэтая старонка ўтрымлівае зашмат працаёмістых зваротаў да функцыяў парсэра.

Павінна быць ня болей за $2 {{PLURAL:$2|зварот|звароты|зваротаў}}, а цяпер ўтрымліваецца {{PLURAL:$1|$1 зварот|$1 звароты|$1 зваротаў}}.',
'expensive-parserfunction-category' => 'Старонкі, якія ўтрымліваюць зашмат працаёмістых зваротаў да функцыяў парсэра',
'post-expand-template-inclusion-warning' => 'Папярэджаньне: Памер уключаемых шаблёнаў занадта вялікі.
Некаторыя шаблёны ня будуць уключаныя.',
'post-expand-template-inclusion-category' => 'Старонкі, у якіх перавышаны дапушчальны памер уключаных шаблёнаў',
'post-expand-template-argument-warning' => 'Увага: Гэтая старонка ўтрымлівае прынамсі адзін парамэтар шаблёна, які мае занадта вялікі выгляд у разгорнутым выглядзе.
Гэтыя парамэтры былі прапушчаныя.',
'post-expand-template-argument-category' => 'Старонкі, у якіх прапушчаныя парамэтры шаблёнаў',
'parser-template-loop-warning' => 'Выяўлены цыкль у шаблёнах: [[$1]]',
'parser-template-recursion-depth-warning' => 'Перавышана мяжа глыбіні рэкурсіі шаблёнаў ($1)',
'language-converter-depth-warning' => 'Перавышанае абмежаваньне глыбіні канвэртару варыянтаў мовы ($1)',
'node-count-exceeded-category' => 'Старонкі зь перавышанай колькасьцю вузлоў',
'node-count-exceeded-warning' => 'Старонка перавысіла дазволеную колькасьць вузлоў',
'expansion-depth-exceeded-category' => 'Старонкі зь перавышанай глыбінёй уключэньня',
'expansion-depth-exceeded-warning' => 'Старонка перавысіла дазволеную глыбіню ўключэньняў',
'parser-unstrip-loop-warning' => 'Вызначаная незачыненая пятля',
'parser-unstrip-recursion-limit' => 'Перавышанае абмежаваньне глыбіні рэкурсіі ($1)',
'converter-manual-rule-error' => 'Знойдзеная памылка ў ручным правіле моўнага канвэртара',

# "Undo" feature
'undo-success' => 'Рэдагаваньне можа быць адмененае. Калі ласка, параўнайце адрозьненьні паміж вэрсіямі, каб упэўніцца, што гэта адпаведныя зьмены, а потым запішыце зьмены для сканчэньня рэдагаваньня.',
'undo-failure' => 'Рэдагаваньне ня можа быць скасаванае праз канфлікт паміж папярэднімі рэдагаваньнямі.',
'undo-norev' => 'Рэдагаваньне ня можа быць адмененае, таму што яно не існуе альбо было выдаленае.',
'undo-summary' => 'Скасаваньне праўкі $1 удзельніка [[Special:Contributions/$2|$2]] ([[User talk:$2|гутаркі]])',

# Account creation failure
'cantcreateaccounttitle' => 'Немагчыма стварыць рахунак',
'cantcreateaccount-text' => "Стварэньне рахункаў з гэтага IP-адрасу ('''$1''') было заблякаванае [[User:$3|$3]].

Прычына блякаваньня пададзеная $3: ''$2''",

# History pages
'viewpagelogs' => 'Паказаць журналы падзеяў для гэтай старонкі',
'nohistory' => 'Гісторыя зьменаў для гэтай старонкі адсутнічае.',
'currentrev' => 'Цяперашняя вэрсія',
'currentrev-asof' => 'Цяперашняя вэрсія на $1',
'revisionasof' => 'Вэрсія ад $1',
'revision-info' => 'Вэрсія ад $1, аўтар $2',
'previousrevision' => '← Папярэдняя вэрсія',
'nextrevision' => 'Наступная вэрсія →',
'currentrevisionlink' => 'Цяперашняя вэрсія',
'cur' => 'цяп',
'next' => 'наступная',
'last' => 'папярэдняя',
'page_first' => 'першая',
'page_last' => 'апошняя',
'histlegend' => 'Параўнаньне: пазначце кропкамі дзьве вэрсіі для параўнаньня і націсьніце enter альбо кнопку ўнізе.<br />
Тлумачэньне: (цяп) = адрозьненьні ад цяперашняй вэрсіі, (папярэдняя) = адрозьненьні ад папярэдняй вэрсіі, д = дробная праўка.',
'history-fieldset-title' => 'Пошук у гісторыі',
'history-show-deleted' => 'Толькі выдаленыя',
'histfirst' => 'найстарэйшыя',
'histlast' => 'найнавейшыя',
'historysize' => '($1 {{PLURAL:$1|байт|байты|байтаў}})',
'historyempty' => '(пуста)',

# Revision feed
'history-feed-title' => 'Гісторыя зьменаў',
'history-feed-description' => 'Гісторыя зьменаў гэтай старонкі',
'history-feed-item-nocomment' => '$1 у $2',
'history-feed-empty' => 'Запатрабаванай старонкі не існуе.
Магчыма, яна была выдаленая альбо яе перанесьлі.
Паспрабуйце [[Special:Search|пашукаць]] падобныя старонкі.',

# Revision deletion
'rev-deleted-comment' => '(апісаньне зьменаў выдаленае)',
'rev-deleted-user' => '(імя ўдзельніка выдаленае)',
'rev-deleted-event' => '(запіс з журнала падзеяў выдалены)',
'rev-deleted-user-contribs' => '[імя ўдзельніка альбо IP-адрас выдалены — рэдагаваньне схаванае з унёску]',
'rev-deleted-text-permission' => "Гэтая вэрсія старонкі была '''выдаленая'''.
Магчыма, падрабязнасьці могуць быць знойдзеныя ў [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} журнале выдаленьняў].",
'rev-deleted-text-unhide' => "Гэтая вэрсія старонкі была '''выдаленая'''.
Падрабязнасьці могуць быць знойдзеныя ў [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} журнале выдаленьняў].
Вы можаце [$1 праглядзець гэтую вэрсію], калі жадаеце.",
'rev-suppressed-text-unhide' => "Гэтая вэрсія старонкі была '''схаваная'''.
Падрабязнасьці могуць быць знойдзеныя ў [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} журнале хаваньняў].
Вы можаце [$1 праглядзець гэтую вэрсію], калі жадаеце.",
'rev-deleted-text-view' => "Гэтая вэрсія старонкі была '''выдаленая'''.
Падрабязнасьці могуць быць знойдзеныя ў [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} журнале выдаленьняў].",
'rev-suppressed-text-view' => "Гэтая вэрсія старонкі была '''схаваная'''.
Вы можаце яе праглядзець; падрабязнасьці могуць быць знойдзеныя ў  [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} журнале хаваньняў].",
'rev-deleted-no-diff' => "Вы ня можаце праглядаць гэтую розьніцу паміж вэрсіямі, таму што адна з вэрсіяў была '''выдаленая'''.
Магчыма, падрабязнасьці могуць быць знойдзеныя ў [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} журнале выдаленьняў].",
'rev-suppressed-no-diff' => "Вы ня можаце праглядзець гэтую розьніцу, таму што адна з вэрсіяў была '''выдаленая'''.",
'rev-deleted-unhide-diff' => "Адна з вэрсіяў гэтай старонкі была '''выдаленая'''.
Падрабязнасьці могуць быць знойдзеныя ў [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} журнале выдаленьняў].
Вы можаце праглядзець [$1 розьніцу паміж вэрсіямі], калі жадаеце.",
'rev-suppressed-unhide-diff' => "Адна з вэрсіяў гэтага параўнаньня была '''схаваная'''.
Падрабязнасьці могуць быць знойдзеныя ў [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} журнале хаваньняў].
Вы можаце [$1 паглядзець гэту розьніцу], калі жадаеце.",
'rev-deleted-diff-view' => "Адна з вэрсіяў гэтага параўнаньня была '''выдаленая'''.
Вы можаце праглядзець гэтую розьніцу паміж вэрсіямі. Падрабязнасьці могуць быць знойдзеныя ў [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} журнале выдаленьняў].",
'rev-suppressed-diff-view' => "Адна з вэрсіяў гэтага параўнаньня была '''схаваная'''.
Вы можаце праглядзець гэтую розьніцу паміж вэрсіямі; падрабязнасьці могуць быць знойдзеныя ў [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} журнале хаваньняў].",
'rev-delundel' => 'паказаць/схаваць',
'rev-showdeleted' => 'паказаць',
'revisiondelete' => 'Выдаліць/аднавіць вэрсіі',
'revdelete-nooldid-title' => 'Ня выбрана мэтавая вэрсія',
'revdelete-nooldid-text' => 'Вы ня выбралі мэтавую вэрсію (ці вэрсіі) для выкананьня гэтай функцыі, выбранай вэрсіі не існуе альбо Вы спрабуеце схаваць цяперашнюю вэрсію.',
'revdelete-nologtype-title' => 'Ня ўказаны тып журнала',
'revdelete-nologtype-text' => 'Вы не пазначылі тып журнала, у якім будзе выконвацца гэта дзеяньне.',
'revdelete-nologid-title' => 'Няслушны запіс у журнале',
'revdelete-nologid-text' => 'Вы не пазначылі запіс у журнале для выкананьня гэтай функцыі, альбо выбраны запіс не існуе.',
'revdelete-no-file' => 'Пазначаны файл не існуе.',
'revdelete-show-file-confirm' => 'Вы ўпэўненыя, што жадаеце паглядзець выдаленую вэрсію файла «<nowiki>$1</nowiki>» ад $2 $3?',
'revdelete-show-file-submit' => 'Так',
'revdelete-selected' => "'''{{PLURAL:$2|Выбраная вэрсія|Выбраныя вэрсіі}} старонкі [[:$1]]:'''",
'logdelete-selected' => "'''{{PLURAL:$1|Выбраны запіс|Выбраныя запісы}} журнала падзеяў:'''",
'revdelete-text' => "'''Выдаленыя вэрсіі і падзеі будуць паказвацца ў гісторыі старонкі і журналах, але частка іх зьместу ня будзе даступная для звычайных удзельнікаў.'''
Іншыя адміністратары {{GRAMMAR:родны|{{SITENAME}}}} будуць мець магчымасьць прагляду зьместу і аднаўленьня старонкі праз гэты інтэрфэйс, калі ня будуць уведзеныя дадатковыя абмежаваньні.",
'revdelete-confirm' => 'Калі ласка, пацьвердзіце, што Вы сапраўды жадаеце зрабіць гэта, разумееце наступствы і робіце гэта ў адпаведнасьці з [[{{MediaWiki:Policy-url}}|правіламі]].',
'revdelete-suppress-text' => "Схаваньні могуць выкарыстоўвацца '''толькі''' ў наступных выпадках:
* Раскрыцьцё асабістых зьвестак
*: ''хатнія адрасы, тэлефонныя нумары, нумары пашпартоў і г.д.''",
'revdelete-legend' => 'Усталяваць абмежаваньні бачнасьці',
'revdelete-hide-text' => 'Схаваць тэкст вэрсіі',
'revdelete-hide-image' => 'Схаваць зьмест файла',
'revdelete-hide-name' => 'Схаваць дзеяньне і мэту',
'revdelete-hide-comment' => 'Схаваць кароткае апісаньне зьменаў',
'revdelete-hide-user' => 'Схаваць імя/IP-адрас удзельніка',
'revdelete-hide-restricted' => 'Ужываць гэтыя абмежаваньні таксама і для адміністратараў',
'revdelete-radio-same' => '(не зьмяняць)',
'revdelete-radio-set' => 'Так',
'revdelete-radio-unset' => 'Не',
'revdelete-suppress' => 'Схаваць зьвесткі ад адміністратараў як і ад іншых удзельнікаў',
'revdelete-unsuppress' => 'Зьняць абмежаваньні з адноўленых вэрсіяў',
'revdelete-log' => 'Прычына:',
'revdelete-submit' => 'Ужыць для {{PLURAL:$1|выбранай вэрсіі|выбраных вэрсіяў}}',
'revdelete-success' => "'''Бачнасьць вэрсіі пасьпяхова абноўленая.'''",
'revdelete-failure' => "'''Немагчыма абнавіць бачнасьць вэрсіі:'''
$1",
'logdelete-success' => "'''Бачнасьць падзеі пасьпяхова зьмененая.'''",
'logdelete-failure' => "'''Немагчыма ўстанавіць бачнасьць у журнале:'''
$1",
'revdel-restore' => 'Зьмяніць бачнасьць',
'revdel-restore-deleted' => 'выдаленыя вэрсіі',
'revdel-restore-visible' => 'бачныя вэрсіі',
'pagehist' => 'Гісторыя старонкі',
'deletedhist' => 'Выдаленая гісторыя',
'revdelete-hide-current' => 'Памылка хаваньня запісу ад $2 $1: гэта цяперашняя вэрсія.
Запіс ня можа быць схаваны.',
'revdelete-show-no-access' => 'Памылка паказу запісу ад $2 $1: гэты запіс быў пазначаны як «абмежаваны».
Вы ня маеце да яго доступу.',
'revdelete-modify-no-access' => 'Памылка зьмены запісу ад $2 $1: гэты запіс быў пазначаны як «абмежаваны».
Вы ня маеце да яго доступу.',
'revdelete-modify-missing' => 'Памылка мадыфікацыі запісу з ідэнтыфікатарам $1: запіс не існуе ў базе зьвестак!',
'revdelete-no-change' => "'''Папярэджаньне:''' запіс ад $2 $1 ужо мае запатрабаваныя налады бачнасьці.",
'revdelete-concurrent-change' => 'Памылка зьмены запісу ад $2 $1: яго статус быў зьменены кімсьці іншым, пакуль Вы спрабавалі яго зьмяніць.
Калі ласка, праверце журналы.',
'revdelete-only-restricted' => 'Памылка хаваньня запісаў элемэнтаў $2, $1: Вы ня можаце схаваць запісы ад прагляду адміністратарамі бяз выбару адной зь іншых наладаў хаваньня.',
'revdelete-reason-dropdown' => '* Агульныя прычыны выдаленьня
** Парушэньне аўтарскіх правоў
** Інфармацыя, якая парушае прыватнасьць
** Недапушчальнае імя ўдзельніка
** Патэнцыйна паклёпніцкія зьвесткі',
'revdelete-otherreason' => 'Іншая/дадатковая прычына:',
'revdelete-reasonotherlist' => 'Іншая прычына',
'revdelete-edit-reasonlist' => 'Рэдагаваць прычыны выдаленьня',
'revdelete-offender' => 'Аўтар вэрсіі:',

# Suppression log
'suppressionlog' => 'Журнал схаваньняў',
'suppressionlogtext' => 'Ніжэй пададзены сьпіс выдаленьняў і блякаваньняў, схаваных нават ад адміністратараў.
Глядзіце [[Special:BlockList|сьпіс блякаваньняў]], каб паглядзець сьпіс цяперашніх блякаваньняў.',

# History merging
'mergehistory' => 'Аб’яднаць гісторыі старонак',
'mergehistory-header' => "Гэтая старонка дазваляе аб'яднаць гісторыю рэдагаваньняў адной старонкі з гісторыяй іншай, новай старонкі.
Упэўніцеся, што гэтыя зьмены не парушаць пасьлядоўнасьць гісторыі старонкі.",
'mergehistory-box' => 'Аб’яднаць гісторыі рэдагаваньняў дзьвюх старонак:',
'mergehistory-from' => 'Крынічная старонка:',
'mergehistory-into' => 'Мэтавая старонка:',
'mergehistory-list' => "Гісторыя рэдагаваньняў, якую магчыма аб'яднаць",
'mergehistory-merge' => "Наступныя вэрсіі [[:$1]] можна аб'яднаць у [[:$2]].
Карыстайцеся кнопкамі для аб'яднаньня толькі выбранага дыяпазону рэдагаваньняў.
Заўважце, што выкарыстаньне навігацыйных спасылак выдаліць зьвесткі ў гэтым слупку.",
'mergehistory-go' => "Паказаць вэрсіі, якія магчыма аб'яднаць",
'mergehistory-submit' => "Аб'яднаць гісторыі рэдагаваньняў",
'mergehistory-empty' => "Няма гісторыі рэдагаваньняў, якую магчыма аб'яднаць.",
'mergehistory-success' => '$3 {{PLURAL:$3|вэрсія|вэрсіі|вэрсіяў}} з [[:$1]] пасьпяхова аб’яднаныя ў [[:$2]].',
'mergehistory-fail' => "Не атрымалася аб'яднаць гісторыі старонак. Калі ласка, праверце парамэтры старонкі і часу.",
'mergehistory-no-source' => 'Не існуе крынічнай старонкі $1.',
'mergehistory-no-destination' => 'Не існуе мэтавай старонкі $1.',
'mergehistory-invalid-source' => 'Крынічная старонка мусіць мець карэктную назву.',
'mergehistory-invalid-destination' => 'Мэтавая старонка мусіць мець карэктную назву.',
'mergehistory-autocomment' => "Гісторыя [[:$1]] аб'яднаная ў [[:$2]]",
'mergehistory-comment' => "Гісторыя [[:$1]] аб'яднаная ў [[:$2]]: $3",
'mergehistory-same-destination' => 'Крынічная і мэтавая старонкі ня могуць супадаць',
'mergehistory-reason' => 'Прычына:',

# Merge log
'mergelog' => 'Журнал аб’яднаньняў',
'pagemerge-logentry' => 'аб’яднаная [[$1]] ў [[$2]] (гісторыя рэдагаваньняў да $3)',
'revertmerge' => 'Разьяднаць',
'mergelogpagetext' => "Ніжэй знаходзіцца сьпіс апошніх аб'яднаньняў гісторыяў старонак.",

# Diffs
'history-title' => '$1 — гісторыя зьменаў',
'difference-title' => '$1: розьніца паміж вэрсіямі',
'difference-title-multipage' => '«$1» і «$2» — розьніца паміж старонкамі',
'difference-multipage' => '(Розьніца паміж старонкамі)',
'lineno' => 'Радок $1:',
'compareselectedversions' => 'Параўнаць выбраныя вэрсіі',
'showhideselectedversions' => 'Паказаць/схаваць вызначаныя вэрсіі',
'editundo' => 'скасаваць',
'diff-multi' => '($1 {{PLURAL:$1|прамежная вэрсія|прамежныя вэрсіі|прамежных вэрсіяў}} $2 {{PLURAL:$2|удзельніка|удзельнікаў|удзельнікаў}} {{PLURAL:$1|не паказаная|не паказаныя|не паказаныя}})',
'diff-multi-manyusers' => '($1 {{PLURAL:$1|прамежная вэрсія|прамежныя вэрсіі|прамежных вэрсіяў}} $2 {{PLURAL:$2|удзельніка|удзельнікаў|удзельнікаў}} {{PLURAL:$1|не паказаная|не паказаныя|не паказаныя}})',
'difference-missing-revision' => '{{PLURAL:$2|Адна вэрсія|$2 вэрсіі}} з гэтымі адрозьненьнямі ($1) {{PLURAL:$2|не была|не былі}} знойдзеныя.

Звычайна гэта здараецца з-за перахода па састарэлай спасылцы на старонку, якая была выдаленая.
Падрабязнасьці можна знайсьці ў [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} журнале выдаленьняў].',

# Search results
'searchresults' => 'Вынікі пошуку',
'searchresults-title' => 'Вынікі пошуку для «$1»',
'searchresulttext' => 'Для атрыманьня больш падрабязнай інфармацыі пра пошук у {{GRAMMAR:месны|{{SITENAME}}}}, глядзіце [[{{MediaWiki:Helppage}}|{{int:help}}]].',
'searchsubtitle' => "Па запыце '''[[:$1]]''' ([[Special:Prefixindex/$1|усе старонкі, якія пачынаюцца з «$1»]]{{int:pipe-separator}}[[Special:WhatLinksHere/$1|усе старонкі, якія спасылаюцца на «$1»]])",
'searchsubtitleinvalid' => "Па запыце '''$1'''",
'toomanymatches' => 'Знойдзена зашмат супадзеньняў з запытам, калі ласка, паспрабуйце зьмяніць запыт',
'titlematches' => 'Супадзеньні ў назвах старонак',
'notitlematches' => 'Супадзеньні ў назвах старонак ня знойдзеныя',
'textmatches' => 'Супадзеньні ў тэкстах старонак',
'notextmatches' => 'Супадзеньні ў тэкстах старонак ня знойдзеныя',
'prevn' => '{{PLURAL:$1|папярэдняя|папярэднія|папярэднія}} $1',
'nextn' => '{{PLURAL:$1|наступная|наступныя|наступныя}} $1',
'prevn-title' => '{{PLURAL:$1|Папярэдні $1 вынік|Папярэднія $1 вынікі|Папярэднія $1 вынікаў}}',
'nextn-title' => '{{PLURAL:$1|Наступны $1 вынік|Наступныя $1 вынікі|Наступныя $1 вынікаў}}',
'shown-title' => 'Паказваць $1 {{PLURAL:$1|вынік|вынікі|вынікаў}} на старонцы',
'viewprevnext' => 'Паказаць ($1 {{int:pipe-separator}} $2) ($3)',
'searchmenu-legend' => 'Налады пошуку',
'searchmenu-exists' => "* Старонка '''[[$1]]'''",
'searchmenu-new' => "'''Стварыць старонку «[[:$1|$1]]» у {{GRAMMAR:месны|{{SITENAME}}}}!'''",
'searchhelp-url' => 'Help:Зьмест',
'searchmenu-prefix' => '[[Special:PrefixIndex/$1|Праглядзець старонкі з гэтым прэфіксам]]',
'searchprofile-articles' => 'Старонкі са зьместам',
'searchprofile-project' => 'Старонкі дапамогі і праекту',
'searchprofile-images' => 'Мультымэдыя',
'searchprofile-everything' => 'Усё',
'searchprofile-advanced' => 'Пашыраны',
'searchprofile-articles-tooltip' => 'Пошук у $1',
'searchprofile-project-tooltip' => 'Пошук у $1',
'searchprofile-images-tooltip' => 'Пошук файлаў',
'searchprofile-everything-tooltip' => 'Шукаць усюды (уключна са старонкамі абмеркаваньня)',
'searchprofile-advanced-tooltip' => 'Шукаць у дадатковых прасторах назваў',
'search-result-size' => '$1 ($2 {{PLURAL:$2|слова|словы|словаў}})',
'search-result-category-size' => '$1 {{PLURAL:$1|элемэнт|элемэнты|элемэнтаў}} ($2 {{PLURAL:$2|падкатэгорыя|падкатэгорыі|падкатэгорыяў}}, $3 {{PLURAL:|файл|файлы|файлаў}})',
'search-result-score' => 'Адпаведнасьць: $1%',
'search-redirect' => '(перанакіраваньне $1)',
'search-section' => '(сэкцыя $1)',
'search-suggest' => 'Магчыма, вы мелі на ўвазе: $1',
'search-interwiki-caption' => 'Сумежныя праекты',
'search-interwiki-default' => 'вынікі з $1:',
'search-interwiki-more' => '(яшчэ)',
'search-relatedarticle' => 'Зьвязаны',
'mwsuggest-disable' => 'Адключыць AJAX-падказкі',
'searcheverything-enable' => 'Шукаць ва ўсіх прасторах назваў',
'searchrelated' => 'зьвязаны',
'searchall' => 'усе',
'showingresults' => "Ніжэй {{PLURAL:$1|паданы|паданыя|паданыя}} да '''$1''' {{PLURAL:$1|выніку|вынікаў|вынікаў}}, пачынаючы з #<b>$2</b>.",
'showingresultsnum' => "Ніжэй паказаны сьпіс з '''$3''' {{PLURAL:$3|выніка|вынікаў|вынікаў}}, пачынаючы ад № '''$2'''.",
'showingresultsheader' => "{{PLURAL:$5|Вынік '''$1''' з '''$3'''|Вынікі '''$1 - $2''' з '''$3'''}} для '''$4'''",
'nonefound' => "'''Увага''': Па змоўчваньні пошук вядзецца не ва ўсіх прасторах назваў. Трэба дапісаць да запыту ''усе:'' каб шукаць па ўсім зьмесьце (уключаючы абмеркаваньні, шаблёны і г.д.) альбо дадаць да запыту неабходную прастору назваў.",
'search-nonefound' => 'Супадзеньняў па запыце ня знойдзена.',
'powersearch' => 'Удасканалены пошук',
'powersearch-legend' => 'Удасканалены пошук',
'powersearch-ns' => 'Шукаць у прасторах назваў:',
'powersearch-redir' => 'Паказваць перанакіраваньні',
'powersearch-field' => 'Шукаць',
'powersearch-togglelabel' => 'Пазначыць:',
'powersearch-toggleall' => 'Усе',
'powersearch-togglenone' => 'Нічога',
'search-external' => 'Вонкавы пошук',
'searchdisabled' => 'Функцыя пошуку ў {{GRAMMAR:месны|{{SITENAME}}}} адключаная.
Вы можаце пашукаць з дапамогай Google, але заўважце, што там інфармацыя пра старонкі {{GRAMMAR:родны|{{SITENAME}}}} можа быць састарэлай.',

# Quickbar
'qbsettings' => 'Панэль хуткага доступу',
'qbsettings-none' => 'Не паказваць',
'qbsettings-fixedleft' => 'Замацаваная зьлева',
'qbsettings-fixedright' => 'Замацаваная справа',
'qbsettings-floatingleft' => 'Рухомая зьлева',
'qbsettings-floatingright' => 'Плавае справа',
'qbsettings-directionality' => 'Замацаваная, у залежнасьці ад накірунку напісаньня ў Вашай мове',

# Preferences page
'preferences' => 'Налады',
'mypreferences' => 'Налады',
'prefs-edits' => 'Колькасьць рэдагаваньняў:',
'prefsnologin' => 'Вы не ўвайшлі ў сыстэму',
'prefsnologintext' => 'Вам трэба <span class="plainlinks">[{{fullurl:{{#Special:UserLogin}}|returnto=$1}} ўвайсьці ў сыстэму]</span>, каб зьмяняць свае налады.',
'changepassword' => 'Зьмяніць пароль',
'prefs-skin' => 'Афармленьне',
'skin-preview' => 'Папярэдні прагляд',
'datedefault' => 'Па змоўчаньні',
'prefs-beta' => 'Тэставыя магчымасьці',
'prefs-datetime' => 'Дата і час',
'prefs-labs' => 'Экспэрымэнтальныя магчымасьці',
'prefs-user-pages' => 'Старонкі ўдзельніка',
'prefs-personal' => 'Асабістыя зьвесткі',
'prefs-rc' => 'Апошнія зьмены',
'prefs-watchlist' => 'Сьпіс назіраньня',
'prefs-watchlist-days' => 'Колькасьць дзён для паказу ў сьпісе назіраньня:',
'prefs-watchlist-days-max' => '(максымальна $1 {{PLURAL:$1|дзень|дні|дзён}})',
'prefs-watchlist-edits' => 'Колькасьць рэдагаваньняў для паказу ў пашыраным сьпісе назіраньня:',
'prefs-watchlist-edits-max' => 'Максымальная колькасьць: 1000',
'prefs-watchlist-token' => 'Сакрэтны ключ сьпісу назіраньня:',
'prefs-misc' => 'Рознае',
'prefs-resetpass' => 'Зьмяніць пароль',
'prefs-changeemail' => 'Зьмяніць адрас электроннай пошты',
'prefs-setemail' => 'Устанавіць адрас электроннай пошты',
'prefs-email' => 'Налады электроннай пошты',
'prefs-rendering' => 'Выгляд',
'saveprefs' => 'Захаваць',
'resetprefs' => 'Скінуць',
'restoreprefs' => 'Скінуць да перадвызначаных наладаў',
'prefs-editing' => 'Рэдагаваньне',
'prefs-edit-boxsize' => 'Памер акна рэдагаваньня.',
'rows' => 'Радкоў:',
'columns' => 'Слупкоў:',
'searchresultshead' => 'Пошук',
'resultsperpage' => 'Колькасьць вынікаў на старонцы:',
'stub-threshold' => 'Максымальны памер старонкі для паказу спасылак <a href="#" class="stub">як на накід</a> (у байтах):',
'stub-threshold-disabled' => 'Выключаны',
'recentchangesdays' => 'Колькасьць дзён для паказу ў апошніх зьменах:',
'recentchangesdays-max' => '(максымальна $1 {{PLURAL:$1|дзень|дні|дзён}})',
'recentchangescount' => 'Колькасьць рэдагаваньняў для паказу па змоўчваньні:',
'prefs-help-recentchangescount' => 'Гэта датычыцца апошніх зьменах, гісторый старонак і журналаў.',
'prefs-help-watchlist-token' => 'Запаўненьне гэтага поля сакрэтным ключом створыць RSS-стужку для Вашага сьпісу назіраньня.
Кожны, хто ведае ключ у гэтым полі, зможа чытаць Ваш сьпіс назіраньня, таму выбірайце сакрэтнае значэньне.
Тут Вы зможаце выкарыстоўваць выпадковае значэньне: $1',
'savedprefs' => 'Вашыя налады былі захаваныя.',
'timezonelegend' => 'Часавы пояс:',
'localtime' => 'Мясцовы час:',
'timezoneuseserverdefault' => 'Выкарыстоўваць стандартныя налады {{GRAMMAR:родны|{{SITENAME}}}} ($1)',
'timezoneuseoffset' => 'Іншы (пазначце розьніцу ў часе)',
'timezoneoffset' => 'Розьніца¹:',
'servertime' => 'Час на сэрвэры:',
'guesstimezone' => 'Запоўніць з браўзэра',
'timezoneregion-africa' => 'Афрыка',
'timezoneregion-america' => 'Амэрыка',
'timezoneregion-antarctica' => 'Антарктыда',
'timezoneregion-arctic' => 'Арктыка',
'timezoneregion-asia' => 'Азія',
'timezoneregion-atlantic' => 'Атлянтычны акіян',
'timezoneregion-australia' => 'Аўстралія',
'timezoneregion-europe' => 'Эўропа',
'timezoneregion-indian' => 'Індыйскі акіян',
'timezoneregion-pacific' => 'Ціхі акіян',
'allowemail' => 'Дазволіць атрыманьне лістоў ад іншых удзельнікаў і ўдзельніц',
'prefs-searchoptions' => 'Пошук',
'prefs-namespaces' => 'Прасторы назваў',
'defaultns' => 'Інакш шукаць у наступных прасторах назваў:',
'default' => 'па змоўчваньні',
'prefs-files' => 'Файлы',
'prefs-custom-css' => 'Індывідуальны CSS',
'prefs-custom-js' => 'Індывідуальны JS',
'prefs-common-css-js' => 'Агульны CSS/JS для ўсіх афармленьняў:',
'prefs-reset-intro' => 'Вы можаце выкарыстоўваць гэтую старонку для замены Вашых наладаў на налады сайта па змоўчваньні.
Гэтае дзеяньне не можа быць адмененае.',
'prefs-emailconfirm-label' => 'Пацьверджаньне адрасу электроннай пошты:',
'prefs-textboxsize' => 'Памеры акна рэдагаваньня',
'youremail' => 'Адрас электроннай пошты:',
'username' => 'Імя ўдзельніка/ўдзельніцы:',
'uid' => 'ID удзельніка/ўдзельніцы:',
'prefs-memberingroups' => 'Удзельнік {{PLURAL:$1|групы|групаў}}:',
'prefs-registration' => 'Час рэгістрацыі:',
'yourrealname' => 'Сапраўднае імя:',
'yourlanguage' => 'Мова інтэрфэйсу:',
'yourvariant' => 'Варыянт мовы зьместу:',
'prefs-help-variant' => 'Выбраны Вамі альфабэт ці артаграфія для паказу старонак зьместу {{GRAMMAR:родны|{{SITENAME}}}}.',
'yournick' => 'Подпіс:',
'prefs-help-signature' => 'Камэнтары на старонцы абмеркаваньня павінны быць падпісаны праз даданьне сымбаляў «<nowiki>~~~~</nowiki>», якія будуць пераўтвораны ў Ваш подпіс і цяперашні час.',
'badsig' => 'Няслушны неапрацаваны подпіс; праверце HTML-тэгі.',
'badsiglength' => 'Ваш подпіс занадта доўгі.
Подпіс мусіць быць не даўжэй за $1 {{PLURAL:$1|сымбаль|сымбалі|сымбаляў}}.',
'yourgender' => 'Пол:',
'gender-unknown' => 'не пазначаны',
'gender-male' => 'мужчынскі',
'gender-female' => 'жаночы',
'prefs-help-gender' => 'Неабавязковая: выкарыстоўваецца ў паведамленьнях праграмнага забесьпячэньня, якія  залежаць ад полу ўдзельніка/ўдзельніцы. Гэта інфармацыя будзе агульнадаступнай.',
'email' => 'Электронная пошта',
'prefs-help-realname' => 'Сапраўднае імя паведамляць неабавязкова.
Калі Вы яго пазначыце, яно будзе выкарыстоўвацца для пазначэньня Вашай працы.',
'prefs-help-email' => 'Адрас электроннай пошты неабавязковы, але ён дае магчымасьць даслаць Вам пароль, калі Вы забылі яго.',
'prefs-help-email-others' => 'Вы можаце таксама дазволіць іншым удзельнікам кантактаваць з Вамі праз Вашую асабістую старонку гутарак безь неабходнасьці раскрыцьця адрасу электроннай пошты.',
'prefs-help-email-required' => 'Патрабуецца адрас электроннай пошты.',
'prefs-info' => 'Асноўныя зьвесткі',
'prefs-i18n' => 'Інтэрнацыяналізацыя',
'prefs-signature' => 'Подпіс',
'prefs-dateformat' => 'Фармат даты',
'prefs-timeoffset' => 'Розьніца ў часе',
'prefs-advancedediting' => 'Дадатковыя налады',
'prefs-advancedrc' => 'Дадатковыя налады',
'prefs-advancedrendering' => 'Дадатковыя налады',
'prefs-advancedsearchoptions' => 'Дадатковыя налады',
'prefs-advancedwatchlist' => 'Дадатковыя налады',
'prefs-displayrc' => 'Налады паказу',
'prefs-displaysearchoptions' => 'Налады паказу',
'prefs-displaywatchlist' => 'Налады паказу',
'prefs-diffs' => 'Розьніцы вэрсіяў',

# User preference: e-mail validation using jQuery
'email-address-validity-valid' => 'Выглядае слушна',
'email-address-validity-invalid' => 'Неабходны слушны адрас!',

# User rights
'userrights' => 'Кіраваньне правамі ўдзельнікаў і ўдзельніц',
'userrights-lookup-user' => 'Кіраваньне групамі ўдзельнікаў і ўдзельніц',
'userrights-user-editname' => 'Увядзіце імя ўдзельніка:',
'editusergroup' => 'Рэдагаваць групы ўдзельнікаў і ўдзельніц',
'editinguser' => "Зьмена правоў {{GENDER:$1|удзельніка|удзельніцы}} '''[[User:$1|$1]]''' $2",
'userrights-editusergroup' => 'Рэдагаваць групы ўдзельнікаў і ўдзельніц',
'saveusergroups' => 'Захаваць групы ўдзельнікаў і ўдзельніц',
'userrights-groupsmember' => 'Уваходзіць у:',
'userrights-groupsmember-auto' => 'Няяўны чалец:',
'userrights-groups-help' => 'Тут можна зьмяняць групы, да якіх належыць гэты ўдзельнік:
* Адзначанае поле побач з назвай групы пазначае прыналежнасьць удзельніка да групы.
* Пустое поле азначае, што ўдзельнік не належыць да групы.
* Знак * азначае, што Вы ня зможаце выдаліць удзельніка з групы, калі дададзіце яго да яе, і наадварот.',
'userrights-reason' => 'Прычына:',
'userrights-no-interwiki' => 'Вы ня маеце дазволу зьмяняць правы ўдзельнікаў іншых вікаў.',
'userrights-nodatabase' => 'Базы зьвестак $1 не існуе альбо яна не зьяўляецца лякальнай.',
'userrights-nologin' => 'Вы павінны [[Special:UserLogin|ўвайсьці ў сыстэму]] як адміністратар, каб прызначаць правы ўдзельнікам.',
'userrights-notallowed' => 'Ваш рахунак ня мае права прызначаць ці выдаляць правы ўдзельнікам.',
'userrights-changeable-col' => 'Групы, якія Вы можаце мяняць',
'userrights-unchangeable-col' => 'Групы, якія Вы ня можаце мяняць',

# Groups
'group' => 'Група:',
'group-user' => 'Удзельнікі',
'group-autoconfirmed' => 'Аўтаматычна пацьверджаныя ўдзельнікі',
'group-bot' => 'Робаты',
'group-sysop' => 'Адміністрацыя',
'group-bureaucrat' => 'Бюракраты',
'group-suppress' => 'Рэвізоры',
'group-all' => '(усе)',

'group-user-member' => '{{GENDER:$1|удзельнік|удзельніца}}',
'group-autoconfirmed-member' => '{{GENDER:$1|аўтаматычна пацьверджаны ўдзельнік|аўтаматычна пацьверджаная ўдзельніца}}',
'group-bot-member' => 'робат',
'group-sysop-member' => '{{GENDER:$1|адміністратар|адміністратарка}}',
'group-bureaucrat-member' => '{{GENDER:$1|бюракрат|бюракратка}}',
'group-suppress-member' => '{{GENDER:$1|рэвізор|рэвізорка}}',

'grouppage-user' => '{{ns:project}}:Удзельнікі',
'grouppage-autoconfirmed' => '{{ns:project}}:Аўтаматычна пацьверджаныя ўдзельнікі',
'grouppage-bot' => '{{ns:project}}:Робаты',
'grouppage-sysop' => '{{ns:project}}:Адміністрацыя',
'grouppage-bureaucrat' => '{{ns:project}}:Бюракраты',
'grouppage-suppress' => '{{ns:project}}:Рэвізоры',

# Rights
'right-read' => 'прагляд старонак',
'right-edit' => 'рэдагаваньне старонак',
'right-createpage' => 'стварэньне старонак (акрамя старонак абмеркаваньняў)',
'right-createtalk' => 'стварэньне старонак абмеркаваньня',
'right-createaccount' => 'стварэньне новых рахункаў удзельніка',
'right-minoredit' => 'пазначэньне рэдагаваньняў як дробныя',
'right-move' => 'перанос старонак',
'right-move-subpages' => 'перанос старонак разам зь іх падстаронкамі',
'right-move-rootuserpages' => 'Перанос карэнных старонак удзельнікаў',
'right-movefile' => 'перайменаваньне файлаў',
'right-suppressredirect' => 'не ствараць перанакіраваньне са старой назвы пасьля пераносу старонкі',
'right-upload' => 'загрузка файлаў',
'right-reupload' => 'перазапіс існуючых файлаў',
'right-reupload-own' => 'перазапіс уласных існуючых файлаў',
'right-reupload-shared' => 'перазапіс файлаў з агульнага сховішча лякальнымі',
'right-upload_by_url' => 'загрузка файлаў з URL-адрасу',
'right-purge' => 'ачыстка кэшу старонак бяз запыту пацьверджаньня',
'right-autoconfirmed' => 'рэдагаваньне часткова абароненых старонак',
'right-bot' => 'лічыцца аўтаматычным працэсам',
'right-nominornewtalk' => 'не паведамляць удзельнікам пра новыя паведамленьні на іх старонках гутарак, калі зробленыя там праўкі былі дробнымі',
'right-apihighlimits' => 'Менш абмежаваньняў на выкананьне API-запытаў',
'right-writeapi' => 'выкарыстаньне API для запісаў',
'right-delete' => 'выдаленьне старонак',
'right-bigdelete' => 'Выдаленьне старонак зь вялікімі гісторыямі',
'right-deletelogentry' => 'Выдаленьне і аднаўленьне асобных запісаў журналу',
'right-deleterevision' => 'выдаленьне і аднаўленьне асобных вэрсіяў старонак',
'right-deletedhistory' => 'прагляд выдаленай гісторыі старонак без доступу да выдаленага тэксту',
'right-deletedtext' => 'прагляд выдаленага тэксту і зьменаў паміж выдаленымі вэрсіямі старонак',
'right-browsearchive' => 'пошук выдаленых старонак',
'right-undelete' => 'аднаўленьне старонак',
'right-suppressrevision' => 'прагляд і аднаўленьне вэрсіяў, схаваных ад адміністратараў',
'right-suppressionlog' => 'прагляд прыватных журналаў',
'right-block' => 'блякаваньне іншых удзельнікаў ад рэдагаваньняў',
'right-blockemail' => 'блякаваньне іншых ўдзельнікаў ад дасылкі электроннай пошты',
'right-hideuser' => 'блякаваньне рахунку ўдзельніка і яго хаваньне',
'right-ipblock-exempt' => 'абход блякаваньняў IP-адрасоў, аўта-блякаваньняў і блякаваньняў дыяпазонаў',
'right-proxyunbannable' => 'абход аўтаматычных блякаваньняў проксі',
'right-unblockself' => 'разблякаваньне самога сябе',
'right-protect' => 'зьмена ўзроўню абароны старонак і рэдагаваньне абароненых старонак',
'right-editprotected' => 'рэдагаваньне абароненых старонак (без каскаднай абароны)',
'right-editinterface' => 'рэдагаваньне інтэрфэйса карыстальніка',
'right-editusercssjs' => 'рэдагаваньне CSS і JS файлаў іншых удзельнікаў',
'right-editusercss' => 'рэдагаваньне CSS файлаў іншых удзельнікаў',
'right-edituserjs' => 'рэдагаваньне JS файлаў іншых удзельнікаў',
'right-rollback' => 'хуткі адкат правак апошняга ўдзельніка, які рэдагаваў старонку',
'right-markbotedits' => 'пазначэньне адкатаў як рэдагаваньне робатам',
'right-noratelimit' => 'няма абмежаваньняў па хуткасьці',
'right-import' => 'імпарт старонак зь іншых вікі',
'right-importupload' => 'імпарт старонак праз загрузку файлаў',
'right-patrol' => 'пазначэньне рэдагаваньняў як «патруляваныя»',
'right-autopatrol' => 'аўтаматычнае пазначэньне рэдагаваньняў як «патруляваных»',
'right-patrolmarks' => 'прагляд пазначэньняў пра патруляваньне ў апошніх зьменах',
'right-unwatchedpages' => 'прагляд сьпісу старонак, за якімі ніхто не назірае',
'right-mergehistory' => 'аб’яднаньне гісторыі старонак',
'right-userrights' => 'рэдагаваньне правоў усіх удзельнікаў',
'right-userrights-interwiki' => 'рэдагаваньне правоў удзельнікаў у іншых вікі',
'right-siteadmin' => 'блякаваньне і разблякаваньне базы зьвестак',
'right-override-export-depth' => 'экспартаваньне старонак, уключаючы зьвязаныя старонкі з глыбінёй да 5',
'right-sendemail' => 'адпраўка электронных лістоў іншым удзельнікам',
'right-passwordreset' => 'прагляд электронных лістоў з ачысткай паролю',

# User rights log
'rightslog' => 'Журнал правоў удзельнікаў',
'rightslogtext' => 'Гэта журнал зьменаў правоў удзельнікаў.',
'rightslogentry' => 'зьменена прыналежнасьць $1 з групы $2 да $3',
'rightslogentry-autopromote' => 'быў аўтаматычна падвышаны з $2 да $3',
'logentry-rights-autopromote' => '$1 {{GENDER:$1|быў аўтаматычна пераведзены|была аўтаматычна пераведзеная}} з групы $4 ў $5',
'rightsnone' => '(няма)',

# Associated actions - in the sentence "You do not have permission to X"
'action-read' => 'чытаньне гэтай старонкі',
'action-edit' => 'рэдагаваньне гэтай старонкі',
'action-createpage' => 'стварэньне старонак',
'action-createtalk' => 'стварэньне старонак абмеркаваньняў',
'action-createaccount' => 'стварэньне гэтага рахунку ўдзельніка',
'action-minoredit' => 'пазначэньне гэтай праўкі як дробнай',
'action-move' => 'перанос гэтай старонкі',
'action-move-subpages' => 'перанос гэтай старонкі і яе падстаронак',
'action-move-rootuserpages' => 'перанос карэнных старонак удзельнікаў',
'action-movefile' => 'перайменаваць гэты файл',
'action-upload' => 'загрузку гэтага файла',
'action-reupload' => 'перазапіс гэтага файла',
'action-reupload-shared' => 'перакрыцьцё гэтага файла ў агульным сховішчы',
'action-upload_by_url' => 'загрузку гэтага файла з URL-адрасу',
'action-writeapi' => 'выкарыстаньне API для запісаў',
'action-delete' => 'выдаленьне гэтай старонкі',
'action-deleterevision' => 'выдаленьне гэтай вэрсіі',
'action-deletedhistory' => 'прагляд выдаленай гісторыі гэтай старонкі',
'action-browsearchive' => 'пошук выдаленых старонак',
'action-undelete' => 'аднаўленьне гэтай старонкі',
'action-suppressrevision' => 'прагляд і аднаўленьне гэтай схаванай вэрсіі',
'action-suppressionlog' => 'прагляд гэтага прыватнага журнала',
'action-block' => 'блякаваньне гэтага ўдзельніка ад рэдагаваньняў',
'action-protect' => 'зьмену ўзроўню абароны гэтай старонкі',
'action-rollback' => 'хуткі адкат рэдагаваньняў апошняга ўдзельніка, які рэдагаваў старонку',
'action-import' => 'імпарт гэтай старонкі зь іншай вікі',
'action-importupload' => 'імпарт гэтай старонкі праз загрузку файла',
'action-patrol' => 'пазначэньне чужых рэдагаваньняў як «патруляваныя»',
'action-autopatrol' => 'пазначэньне ўласных рэдагаваньняў як «патруляваныя»',
'action-unwatchedpages' => 'прагляд сьпісу старонак, за якімі ніхто не назірае',
'action-mergehistory' => "аб'яднаньне гісторыі гэтай старонкі",
'action-userrights' => 'рэдагаваньне правоў усіх удзельнікаў',
'action-userrights-interwiki' => 'рэдагаваньне правоў удзельнікаў у іншых вікі',
'action-siteadmin' => 'блякаваньне і разблякаваньне базы зьвестак',
'action-sendemail' => 'адпраўку электронных лістоў іншым удзельнікам',

# Recent changes
'nchanges' => '$1 {{PLURAL:$1|зьмена|зьмены|зьменаў}}',
'recentchanges' => 'Апошнія зьмены',
'recentchanges-legend' => 'Налады апошніх зьменаў',
'recentchanges-summary' => 'Сачыце за апошнімі зьменамі ў {{GRAMMAR:месны|{{SITENAME}}}} на гэтай старонцы.',
'recentchanges-feed-description' => 'Сачыце за апошнімі зьменамі ў {{GRAMMAR:месны|{{SITENAME}}}} праз гэтую стужку.',
'recentchanges-label-newpage' => 'Гэтым рэдагаваньнем была створаная новая старонка',
'recentchanges-label-minor' => 'Гэтае рэдагаваньне — дробнае',
'recentchanges-label-bot' => 'Гэтае рэдагаваньне зробленае робатам',
'recentchanges-label-unpatrolled' => 'Гэтае рэдагаваньне яшчэ не было адпатруляванае',
'rcnote' => "Ніжэй {{PLURAL:$1|пададзена '''$1''' апошняя зьмена|пададзеныя '''$1''' апошнія зьмены|пададзеныя '''$1''' апошніх зьменаў}} за {{PLURAL:$2|апошні '''$2''' дзень|апошнія '''$2''' дні|апошнія '''$2''' дзён}}, па стане на $5, $4.",
'rcnotefrom' => "Ніжэй знаходзяцца зьмены з '''$2''' (да '''$1''' на старонку).",
'rclistfrom' => 'Паказаць зьмены з $1',
'rcshowhideminor' => '$1 дробныя праўкі',
'rcshowhidebots' => '$1 робатаў',
'rcshowhideliu' => '$1 зарэгістраваных',
'rcshowhideanons' => '$1 ананімаў',
'rcshowhidepatr' => '$1 патруляваныя праўкі',
'rcshowhidemine' => '$1 мае праўкі',
'rclinks' => 'Паказаць апошнія $1 зьменаў за мінулыя $2 дзён<br />$3',
'diff' => 'розьн',
'hist' => 'гіст',
'hide' => 'Схаваць',
'show' => 'Паказаць',
'minoreditletter' => 'д',
'newpageletter' => 'Н',
'boteditletter' => 'р',
'number_of_watching_users_pageview' => '[$1 {{PLURAL:$1|назіральнік|назіральнікі|назіральнікаў}}]',
'rc_categories' => 'Абмежаваць катэгорыямі (разьдзяляйце знакам «|»)',
'rc_categories_any' => 'Усе',
'rc-change-size-new' => '$1 {{PLURAL:$1|байт|байта|байтаў}} пасьля зьмены',
'newsectionsummary' => '/* $1 */ новая сэкцыя',
'rc-enhanced-expand' => 'Паказаць падрабязнасьці (патрабуе JavaScript)',
'rc-enhanced-hide' => 'Схаваць падрабязнасьці',
'rc-old-title' => 'зь першапачатковай назвай «$1»',

# Recent changes linked
'recentchangeslinked' => 'Зьвязаныя праўкі',
'recentchangeslinked-feed' => 'Зьвязаныя праўкі',
'recentchangeslinked-toolbox' => 'Зьвязаныя праўкі',
'recentchangeslinked-title' => 'Зьвязаныя праўкі для «$1»',
'recentchangeslinked-noresult' => 'Не было ніякіх зьменаў на зьвязаных старонках за вызначаны пэрыяд.',
'recentchangeslinked-summary' => "Гэта сьпіс апошніх зьменаў старонак, на якія спасылаецца азначаная старонка (ці ўсіх старонак, якія належаць азначанай катэгорыі).
Старонкі з [[Special:Watchlist|Вашага сьпісу назіраньня]] пазначаныя '''тлустым шрыфтам'''.",
'recentchangeslinked-page' => 'Назва старонкі:',
'recentchangeslinked-to' => 'Замест гэтага паказваць зьмены на старонках, што спасылаюцца на гэтую старонку',

# Upload
'upload' => 'Загрузіць файл',
'uploadbtn' => 'Загрузіць файл',
'reuploaddesc' => 'Скасаваць загрузку і вярнуцца да формы загрузкі',
'upload-tryagain' => 'Даслаць зьмененае апісаньне файла',
'uploadnologin' => 'Вы не ўвайшлі ў сыстэму',
'uploadnologintext' => 'Вам трэба [[Special:UserLogin|ўвайсьці ў сыстэму]] для загрузкі файлаў.',
'upload_directory_missing' => 'Загрузачная дырэкторыя ($1) адсутнічае і ня можа быць створаная сэрвэрам.',
'upload_directory_read_only' => 'Сэрвэр ня мае правоў на запіс у дырэкторыю загружаных файлаў ($1).',
'uploaderror' => 'Памылка загрузкі',
'upload-recreate-warning' => "'''Увага: файл з такой назвай быў выдалены альбо перанесены.'''

Журнал выдаленьняў і пераносаў гэтай старонкі для зручнасьці пададзены тут:",
'uploadtext' => "Ужывайце форму ніжэй для загрузкі файлаў.
Каб паглядзець ці адшукаць раней загружаныя файлы, глядзіце [[Special:FileList|сьпіс загружаных файлаў]], загрузкі таксама запісваюцца ў [[Special:Log/upload|журнал загрузак]], а выдаленьні — у [[Special:Log/delete|журнал выдаленьняў]].

Каб улучыць файл у старонку, ужывайце адзін з наступных варыянтаў:
* '''<code><nowiki>[[</nowiki>{{ns:file}}<nowiki>:File.jpg]]</nowiki></code>''' для поўнай вэрсіі файла
* '''<code><nowiki>[[</nowiki>{{ns:file}}<nowiki>:File.png|200px|thumb|left|Подпіс да выявы]]</nowiki></code>''' для выявы шырынёй 200 піксэляў у рамцы і тэкстам «Подпіс да выявы» ў якасьці подпісу
* '''<code><nowiki>[[</nowiki>{{ns:media}}<nowiki>:File.ogg]]</nowiki></code>''' для простай спасылкі на файл безь яго адлюстраваньня.",
'upload-permitted' => 'Дазволеныя тыпы файлаў: $1.',
'upload-preferred' => 'Пажаданыя тыпы файлаў: $1.',
'upload-prohibited' => 'Забароненыя тыпы файлаў: $1.',
'uploadlog' => 'журнал загрузак',
'uploadlogpage' => 'Журнал загрузак',
'uploadlogpagetext' => 'Сьпіс апошніх загружаных файлаў.',
'filename' => 'Назва файла',
'filedesc' => 'Апісаньне',
'fileuploadsummary' => 'Апісаньне:',
'filereuploadsummary' => 'Зьмены ў файле:',
'filestatus' => 'Умовы распаўсюджаньня і выкарыстаньня:',
'filesource' => 'Крыніца:',
'uploadedfiles' => 'Загружаныя файлы',
'ignorewarning' => 'Праігнараваць папярэджаньне і захаваць файл',
'ignorewarnings' => 'Ігнараваць усе папярэджаньні',
'minlength1' => 'Назва файла павінна ўтрымліваць хаця б адзін сымбаль.',
'illegalfilename' => 'Назва файла «$1» зьмяшчае сымбалі, якія нельга выкарыстоўваць у назвах старонак. Калі ласка, зьмяніце назву файла і паспрабуйце загрузіць яго зноў.',
'filename-toolong' => 'Назвы файлаў ня могуць быць даўжэй 240 байтаў.',
'badfilename' => 'Назва файла была зьмененая на «$1».',
'filetype-mime-mismatch' => 'Пашырэньне файла «.$1» не адпавядае выяўленаму MIME-тыпу файла ($2).',
'filetype-badmime' => 'Загрузка файлаў тыпу MIME «$1» забароненая.',
'filetype-bad-ie-mime' => 'Немагчыма загрузіць гэты файл, таму што Internet Explorer вызначыў яго як «$1», што азначае, што тып гэтага файла забаронены і патэнцыяльна небясьпечны.',
'filetype-unwanted-type' => "'''«.$1»''' — непажаданы тып файла.
{{PLURAL:$3|Пажаданым тыпам файла зьяўляецца|Пажаданымі тыпамі файлаў зьяўляюцца}} $2.",
'filetype-banned-type' => "'''«.$1»''' — {{PLURAL:$4|забаронены тып файлаў|забароненыя тыпы файлаў}}.
{{PLURAL:$3|Дазволены тып файлаў|Дазволеныя тыпы файлаў}}: $2.",
'filetype-missing' => 'Файл ня мае пашырэньня (напрыклад, «.jpg»).',
'empty-file' => 'Дасланы Вамі файл пусты.',
'file-too-large' => 'Дасланы Вамі файл занадта вялікі.',
'filename-tooshort' => 'Назва файла занадта кароткая.',
'filetype-banned' => 'Гэты тып файла забаронены.',
'verification-error' => 'Гэты файл не прайшоў вэрыфікацыю.',
'hookaborted' => 'Прапанаваная Вамі зьмена была адхіленая апрацоўшчыкам пашырэньня.',
'illegal-filename' => 'Недазволеная назва файла.',
'overwrite' => 'Замена існуючага файла забароненая.',
'unknown-error' => 'Узьнікла невядомая памылка.',
'tmp-create-error' => 'Немагчыма стварыць часовы файл.',
'tmp-write-error' => 'Памылка запісу часовага файла.',
'large-file' => 'Рэкамэндаваны памер файлаў — ня болей $1;
памер гэтага файла — $2.',
'largefileserver' => 'Памер гэтага файла перавышае максымальна дазволены.',
'emptyfile' => 'Загружаны файл, здаецца, пусты. Магчыма гэты адбылося з-за памылкі ў назьве файла.
Удакладніце, ці Вы сапраўды жадаеце загрузіць гэты файл.',
'windows-nonascii-filename' => '{{SITENAME}} не падтрымлівае назвы файлаў з спэцыяльнымі сымбалямі.',
'fileexists' => 'Файл з такой назвай ужо існуе.
Калі ласка, праверце <strong>[[:$1]]</strong>, калі Вы ня ўпэўненыя, што жадаеце яго замяніць.
[[$1|thumb]]',
'filepageexists' => 'Старонка апісаньня для гэтага файла ўжо існуе як <strong>[[:$1]]</strong>, але файла з такой назвай няма.
Апісаньне якое Вы дадалі ня зьявіцца на старонцы апісаньня.
Каб яно там зьявілася, Вам трэба рэдагаваць яе самастойна.
[[$1|thumb]]',
'fileexists-extension' => 'Файл з падобнай назвай ужо існуе: [[$2|thumb]]
* Назва загружанага файла: <strong>[[:$1]]</strong>
* Назва існуючага файла: <strong>[[:$2]]</strong>
Калі ласка, выбярыце іншую назву.',
'fileexists-thumbnail-yes' => "Верагодна файл зьяўляецца паменшанай копіяй ''(мініятурай)''. [[$1|thumb]]
Калі ласка, праверце файл <strong>[[:$1]]</strong>.
Калі правераны файл зьяўляецца той жа выявай, то загрузка мініятуры ня мае сэнсу.",
'file-thumbnail-no' => "Назва файла пачынаецца з <strong>$1</strong>.
Верагодна гэта паменшаная копія выявы ''(мініятура)''.
Калі Вы маеце гэтую выяву ў поўным памеры, загрузіце яе, альбо зьмяніце назву файла.",
'fileexists-forbidden' => 'Файл з такой назвай ужо існуе і ня можа быць перапісаны.
Калі ласка, вярніцеся назад і загрузіце гэты файл з новай назвай. [[File:$1|thumb|center|$1]]',
'fileexists-shared-forbidden' => 'Файл з такой назвай ужо існуе ў агульным сховішчы файлаў.
Калі Вы жадаеце загрузіць Ваш файл, вярніцеся назад і загрузіце гэты файл з новай назвай. [[File:$1|thumb|center|$1]]',
'file-exists-duplicate' => 'Гэты файл дублюе {{PLURAL:$1|наступны файл|наступныя файлы}}:',
'file-deleted-duplicate' => 'Падобны файл ([[:$1]]) ужо выдаляўся. Калі ласка, паглядзіце гісторыю выдаленьняў гэтага файла перад яго паўторнай загрузкай.',
'uploadwarning' => 'Папярэджаньне',
'uploadwarning-text' => 'Калі ласка, зьмяніце апісаньне файла ніжэй і паспрабуйце ізноў.',
'savefile' => 'Захаваць файл',
'uploadedimage' => 'загружаная «[[$1]]»',
'overwroteimage' => 'загружаная новая вэрсія «[[$1]]»',
'uploaddisabled' => 'Загрузка файлаў забароненая',
'copyuploaddisabled' => 'Загрузка праз URL-адрас адключаная.',
'uploadfromurl-queued' => 'Ваша загрузка далучаная да чаргі.',
'uploaddisabledtext' => 'Загрузка файлаў забароненая.',
'php-uploaddisabledtext' => 'Загрузка файлаў была адключаная ў парамэтрах канфігурацыі PHP. Калі ласка, праверце значэньне парамэтра «file_uploads».',
'uploadscripted' => 'Гэты файл утрымлівае HTML-код альбо скрыпт, які можа памылкова апрацоўвацца браўзэрам.',
'uploadvirus' => 'Файл утрымлівае вірус! Падрабязнасьці: $1',
'uploadjava' => 'Файл зьяўляецца ZIP-архівам, які зьмяшчае .class-файл Java.
Загрузка Java-файлаў забароненая ў мэтах бясьпекі.',
'upload-source' => 'Крынічны файл',
'sourcefilename' => 'Пачатковая назва файла:',
'sourceurl' => 'URL-адрас крыніцы:',
'destfilename' => 'Канчатковая назва файла:',
'upload-maxfilesize' => 'Максымальны памер файла: $1',
'upload-description' => 'Апісаньне файла',
'upload-options' => 'Налады загрузкі',
'watchthisupload' => 'Назіраць за гэтым файлам',
'filewasdeleted' => 'Файл з такой назвай загружаўся, але быў выдалены.
Вам трэба праверыць $1 перад новай загрузкай.',
'filename-bad-prefix' => "Назва файла, які Вы загружаеце, пачынаецца з '''«$1»'''. Падобныя бессэнсоўныя назвы звычайна ствараюцца аўтаматычна лічбавымі фотаапаратамі. Калі ласка, абярыце больш зразумелую назву для Вашага файла.",
'upload-success-subj' => 'Загрузка пасьпяхова скончылася',
'upload-success-msg' => 'Вашая загрузка з [$2] была пасьпяховая. Яна даступная тут: [[:{{ns:file}}:$1]]',
'upload-failure-subj' => 'Праблема загрузкі',
'upload-failure-msg' => 'Узьнікла праблема пад час Вашай загрузкі з [$2]:

$1',
'upload-warning-subj' => 'Папярэджаньне загрузкі',
'upload-warning-msg' => 'Узьнікла праблема з Вашай загрузкай з [$2]. Вы можаце вярнуцца на [[Special:Upload/stash/$1|форму загрузкі]] для вырашэньня гэтай праблемы.',

'upload-proto-error' => 'Няслушны пратакол',
'upload-proto-error-text' => 'Аддаленая загрузка файлаў патрабуе URL-адрас, які пачынаецца з <code>http://</code> альбо <code>ftp://</code>.',
'upload-file-error' => 'Унутраная памылка',
'upload-file-error-text' => 'Адбылася ўнутраная памылка пад час спробы стварыць часовы файл на сэрвэры.
Калі ласка, зьвярніцеся да [[Special:ListUsers/sysop|сыстэмнага адміністратара]].',
'upload-misc-error' => 'Невядомая памылка загрузкі',
'upload-misc-error-text' => 'Адбылася невядомая памылка пад час загрузкі.
Калі ласка, упэўніцеся, што URL-адрас слушны, і паспрабуйце ізноў.
Калі памылка паўтарыцца, зьвярніцеся да [[Special:ListUsers/sysop|сыстэмнага адміністратара]].',
'upload-too-many-redirects' => 'URL-адрас утрымлівае зашмат перанакіраваньняў',
'upload-unknown-size' => 'Невядомы памер',
'upload-http-error' => 'Узьнікла памылка HTTP: $1',
'upload-copy-upload-invalid-domain' => 'Капіяваньне загрузак не дазволенае ў гэтым дамэне.',

# File backend
'backend-fail-stream' => 'Немагчыма накіраваць файл $1.',
'backend-fail-backup' => 'Немагчыма зрабіць рэзэрвовую копію файла $1.',
'backend-fail-notexists' => 'Файл $1 не існуе.',
'backend-fail-hashes' => 'Немагчыма атрымаць хэшы файлаў для параўнаньня.',
'backend-fail-notsame' => 'Неідэнтыфікаваны файл ужо існуе $1.',
'backend-fail-invalidpath' => '$1 не зьяўляецца слушным шляхам да сховішча.',
'backend-fail-delete' => 'Немагчыма выдаліць файл $1.',
'backend-fail-alreadyexists' => 'Файл $1 ужо існуе.',
'backend-fail-store' => 'Немагчыма захаваць файл $1 у $2.',
'backend-fail-copy' => 'Немагчыма скапіяваць файл $1 у $2.',
'backend-fail-move' => 'Немагчыма перанесьці файл $1 у $2.',
'backend-fail-opentemp' => 'Немагчыма адкрыць часовы файл.',
'backend-fail-writetemp' => 'Немагчыма запісаць часовы файл.',
'backend-fail-closetemp' => 'Немагчыма закрыць часовы файл.',
'backend-fail-read' => 'Немагчыма прачытаць файл $1.',
'backend-fail-create' => 'Немагчыма запісаць файл $1.',
'backend-fail-maxsize' => 'Не атрымалася запісаць файл $1, бо яго памер перавышае {{PLURAL:$2|$2 байт|$2 байта|$2 байтаў}}.',
'backend-fail-readonly' => 'Сэрвэр сховішча «$1» у рэжыме толькі чытаньня. Прычына: «$2»',
'backend-fail-synced' => 'Стан файла «$1» адрозьніваецца ад стану на ўнутраным сэрвэры сховішча',
'backend-fail-connect' => 'Немагчыма далучыцца да сэрвэра сховішча «$1».',
'backend-fail-internal' => 'Узьнікла невядомая памылка на сэрвэры сховішча «$1».',
'backend-fail-contenttype' => 'Немагчыма вызначыць тып зьместу файла, які мусіць быць захаваны ў «$1».',
'backend-fail-batchsize' => 'Cховішча атрымала блёк з $1 {{PLURAL:$1|файлавай апэрацыі|файлавых апэрацыяў|файлавых апэрацыяў}}; абмежаваньне складае $2 {{PLURAL:$2|апэрацыю|апэрацыі|апэрацыяў}}.',
'backend-fail-usable' => 'Не атрымалася прачытаць ці запісаць файл «$1» з-за недастачы правоў ці адсутнасьці дырэкторыяў або кантэйнэраў.',

# File journal errors
'filejournal-fail-dbconnect' => 'Не атрымалася злучыцца з базай зьвестак журнала для сховішча «$1».',
'filejournal-fail-dbquery' => 'Не атрымалася абнавіць базу зьвестак журнала для сховішча «$1».',

# Lock manager
'lockmanager-notlocked' => 'Немагчыма разблякаваць «$1», які не заблякаваны.',
'lockmanager-fail-closelock' => 'Немагчыма закрыць файл блякаваньня для «$1».',
'lockmanager-fail-deletelock' => 'Немагчыма выдаліць файл блякаваньня для «$1».',
'lockmanager-fail-acquirelock' => 'Немагчыма здабыць блякаваньне для «$1».',
'lockmanager-fail-openlock' => 'Немагчыма адкрыць файл блякаваньня для «$1».',
'lockmanager-fail-releaselock' => 'Немагчыма зьняць блякаваньне для «$1».',
'lockmanager-fail-db-bucket' => 'Немагчыма скантактавацца з дастатковай колькасьцю базаў блякавньняў на ўчастку $1.',
'lockmanager-fail-db-release' => 'Немагчыма зьняць блякаваньні для базы зьвестак $1.',
'lockmanager-fail-svr-acquire' => 'Немагчыма запытаць блякаваньні на сэрвэры $1.',
'lockmanager-fail-svr-release' => 'Немагчыма зьняць блякаваньні для сэрвэра $1.',

# ZipDirectoryReader
'zip-file-open-error' => 'Падчас адкрыцьця файла для праверкі архіву адбылася памылка.',
'zip-wrong-format' => 'Пазначаны файл не зьяўляецца ZIP-архівам.',
'zip-bad' => 'ZIP-файл пашкоджаны ці ня можа быць прачытаны.
Немагчыма праверыць яго бясьпечнасьць.',
'zip-unsupported' => 'Гэты ZIP-файл выкарыстоўвае магчымасьці, якія MediaWiki не падтрымлівае.
Немагчыма праверыць яго бясьпечнасьць.',

# Special:UploadStash
'uploadstash' => 'Схаваная загрузка',
'uploadstash-summary' => 'Гэтая старонка прадстаўляе доступ да файлаў, якія загружаныя (ці знаходзяцца ў працэсе загрузкі), але яшчэ не апублікаваныя ў {{GRAMMAR:месны|{{SITENAME}}}}. Гэтыя файлы нябачныя нікому, акрамя ўдзельнікаў, якія іх загрузілі.',
'uploadstash-clear' => 'Ачысьціць схаваныя файлы',
'uploadstash-nofiles' => 'Вы ня маеце схаваных файлаў.',
'uploadstash-badtoken' => 'Немагчыма выканаць гэтае дзеяньне, верагодна скончыўся тэрмін дзеяньня Вашага дазволу на рэдагаваньне. Паспрабуйце зноў.',
'uploadstash-errclear' => 'Немагчыма ачысьціць файлы.',
'uploadstash-refresh' => 'Абнавіць сьпіс файлаў.',
'invalid-chunk-offset' => 'Няслушнае зрушэньне фрагмэнту',

# img_auth script messages
'img-auth-accessdenied' => 'Доступ забаронены',
'img-auth-nopathinfo' => 'Адсутнічае PATH_INFO.
Ваш сэрвэр не ўстаноўлены на пропуск гэтай інфармацыі.
Магчма, ён працуе праз CGI і не падтрымлівае img_auth.
Глядзіце https://www.mediawiki.org/wiki/Manual:Image_Authorization.',
'img-auth-notindir' => 'Неабходнага шляху няма ў дырэкторыі загрузкі, пазначанай у канфігурацыі.',
'img-auth-badtitle' => 'Немагчыма стварыць слушную назву з «$1».',
'img-auth-nologinnWL' => 'Вы не ўвайшлі ў сыстэму, а «$1» не знаходзіцца ў белым сьпісе.',
'img-auth-nofile' => 'Файл «$1» не існуе.',
'img-auth-isdir' => 'Вы спрабуеце атрымаць доступ да дырэкторыі «$1».
Дазволены толькі доступ да файлаў.',
'img-auth-streaming' => 'Перадача струменя «$1».',
'img-auth-public' => 'Функцыя img_auth.php ужываецца для файла выхаду з прыватнай вікі.
Гэта вікі ўсталявана як публічная вікі.
Для найлепшай бясьпекі img_auth.php выключана.',
'img-auth-noread' => 'Удзельнік ня мае доступу на чытаньне «$1».',
'img-auth-bad-query-string' => 'URL-адрас утрымлівае няслушны радок запыту.',

# HTTP errors
'http-invalid-url' => 'Няслушны URL-адрас: $1',
'http-invalid-scheme' => 'URL-адрасы схемы «$1» не падтрымліваюцца',
'http-request-error' => 'HTTP-запыт не атрымаўся ў выніку невядомай памылкі.',
'http-read-error' => 'Памылка чытаньня HTTP.',
'http-timed-out' => 'Скончыўся час чаканьня HTTP-запыту.',
'http-curl-error' => 'Памылка выбаркі URL-адрасу: $1',
'http-host-unreachable' => 'Немагчыма дасягнуць URL-адрас',
'http-bad-status' => 'Адбылася памылка пад час выкананьня HTTP-запыту: $1 $2',

# Some likely curl errors. More could be added from <http://curl.haxx.se/libcurl/c/libcurl-errors.html>
'upload-curl-error6' => 'Немагчыма дасягнуць URL-адрас',
'upload-curl-error6-text' => 'Немагчыма адкрыць пазначаны URL-адрас.
Калі ласка, упэўніцеся, што адрас слушны і сайт працуе.',
'upload-curl-error28' => 'Ліміт часу загрузкі скончыўся',
'upload-curl-error28-text' => 'Сайт доўга не адказвае.
Калі ласка, упэўніцеся што сайт працуе, і празь некаторы час паспрабуйце яшчэ раз.
Вы можаце паспрабаваць пад час меншай загрузкі сайта.',

'license' => 'Ліцэнзія:',
'license-header' => 'Ліцэнзія',
'nolicense' => 'Ня выбраная',
'license-nopreview' => '(Прагляд недаступны)',
'upload_source_url' => ' (слушны, агульнадаступны URL-адрас)',
'upload_source_file' => ' (файл на Вашым кампутары)',

# Special:ListFiles
'listfiles-summary' => 'На гэтай спэцыяльнай старонцы паказаныя ўсе загружаныя файлы.
Падчас фільтрацыі па ўдзельніку, паказваюцца толькі файлы, апошнія вэрсіі якіх загрузіў удзельнік.',
'listfiles_search_for' => 'Пошук па назьве файла:',
'imgfile' => 'файл',
'listfiles' => 'Сьпіс файлаў',
'listfiles_thumb' => 'Мініятура',
'listfiles_date' => 'Дата',
'listfiles_name' => 'Назва',
'listfiles_user' => 'Удзельнік',
'listfiles_size' => 'Памер',
'listfiles_description' => 'Апісаньне',
'listfiles_count' => 'Вэрсіі',

# File description page
'file-anchor-link' => 'Файл',
'filehist' => 'Гісторыя файла',
'filehist-help' => 'Націсьніце на дату/час, каб паглядзець, як тады выглядаў файл.',
'filehist-deleteall' => 'выдаліць усе',
'filehist-deleteone' => 'выдаліць',
'filehist-revert' => 'вярнуць',
'filehist-current' => 'цяперашняя',
'filehist-datetime' => 'Дата і час',
'filehist-thumb' => 'Мініятура',
'filehist-thumbtext' => 'Мініятура вэрсіі ад $1',
'filehist-nothumb' => 'Няма мініятуры',
'filehist-user' => 'Удзельнік',
'filehist-dimensions' => 'Памеры',
'filehist-filesize' => 'Памер файла',
'filehist-comment' => 'Камэнтар',
'filehist-missing' => 'Файл адсутнічае',
'imagelinks' => 'Выкарыстаньне файла',
'linkstoimage' => '{{PLURAL:$1|Наступная старонка спасылаецца|Наступныя старонкі спасылаюцца}} на гэты файл:',
'linkstoimage-more' => 'Больш чым $1 {{PLURAL:$1|старонка спасылаецца|старонкі спасылаюцца|старонак спасылаюцца}} на гэты файл.
У гэтым сьпісе толькі $1 {{PLURAL:$1|спасылка|спасылкі|спасылак}} на гэты файл.
Даступны таксама [[Special:WhatLinksHere/$2|поўны сьпіс]].',
'nolinkstoimage' => 'Ніводная старонка не спасылаецца на гэты файл.',
'morelinkstoimage' => 'Паказаць [[Special:WhatLinksHere/$1|болей спасылак]] на гэты файл.',
'linkstoimage-redirect' => '$1 (перанакіраваньне на файл) $2',
'duplicatesoffile' => '{{PLURAL:$1|Наступны файл дублюе|Наступныя файлы дублююць}} гэты файл ([[Special:FileDuplicateSearch/$2|падрабязнасьці]]):',
'sharedupload' => 'Гэты файл паходзіць з $1 і можа выкарыстоўвацца іншымі праектамі.',
'sharedupload-desc-there' => 'Гэты файл паходзіць з $1 і можа выкарыстоўвацца іншымі праектамі.
Калі ласка, глядзіце падрабязнасьці на [$2 старонцы апісаньня файла].',
'sharedupload-desc-here' => 'Гэты файл паходзіць з $1 і можа выкарыстоўвацца іншымі праектамі.
Апісаньне са [$2 старонкі апісаньня файла] пададзенае ніжэй.',
'sharedupload-desc-edit' => 'Гэты файл паходзіць з $1 і можа  выкарыстоўвацца іншымі праектамі.
Калі спатрэбіцца, вы можаце зьмяніць апісаньне файла на [$2 адпаведнай старонцы].',
'sharedupload-desc-create' => 'Гэты файл паходзіць з $1 і можа выкарыстоўвацца іншымі праектамі.
Калі спатрэбіцца, вы можаце зьмяніць апісаньне на [$2 адпаведнай старонцы].',
'filepage-nofile' => 'Файл з гэтай назвай не існуе.',
'filepage-nofile-link' => 'Файл з гэтай назвай не існуе, але Вы можаце [$1 загрузіць яго].',
'uploadnewversion-linktext' => 'Загрузіць новую вэрсію гэтага файла',
'shared-repo-from' => '$1',
'shared-repo' => 'агульнага сховішча',
'shared-repo-name-wikimediacommons' => 'Вікісховішча',
'upload-disallowed-here' => 'Вы ня можаце перазапісаць гэты файл.',

# File reversion
'filerevert' => 'Вярнуць $1',
'filerevert-legend' => 'Вярнуць папярэднюю вэрсію файла',
'filerevert-intro' => "Вы вяртаеце '''[[Media:$1|$1]]''' да [вэрсіі $4 ад $3, $2].",
'filerevert-comment' => 'Прычына:',
'filerevert-defaultcomment' => 'Вернутая вэрсія ад $2, $1',
'filerevert-submit' => 'Вярнуць',
'filerevert-success' => "'''[[Media:$1|$1]]''' быў вернуты да [вэрсіі $4 ад $3, $2].",
'filerevert-badversion' => 'Не існуе папярэдняй лякальнай вэрсіі гэтага файла з пазначанай датай.',

# File deletion
'filedelete' => 'Выдаліць $1',
'filedelete-legend' => 'Выдаліць файл',
'filedelete-intro' => "Вы выдаляеце файл '''[[Media:$1|$1]]''' з усёй яго гісторыяй.",
'filedelete-intro-old' => "Вы выдаляеце вэрсію '''[[Media:$1|$1]]''' ад [$4 $3, $2].",
'filedelete-comment' => 'Прычына:',
'filedelete-submit' => 'Выдаліць',
'filedelete-success' => "'''$1''' выдалены.",
'filedelete-success-old' => "Вэрсія '''[[Media:$1|$1]]''' ад $3, $2 была выдаленая.",
'filedelete-nofile' => "Файл '''$1''' не існуе.",
'filedelete-nofile-old' => "Не існуе архіўнай вэрсіі '''$1''' з пазначанымі атрыбутамі.",
'filedelete-otherreason' => 'Іншая/дадатковая прычына:',
'filedelete-reason-otherlist' => 'Іншая прычына',
'filedelete-reason-dropdown' => '* Звычайныя прычыны выдаленьня
** парушэньне аўтарскіх правоў
** файл-дублікат',
'filedelete-edit-reasonlist' => 'Рэдагаваць прычыны выдаленьня',
'filedelete-maintenance' => 'Выдаленьне і аднаўленьне файлаў часова забароненае па прычыне падтрымкі.',
'filedelete-maintenance-title' => 'Немагчыма выдаліць файл',

# MIME search
'mimesearch' => 'Пошук па MIME',
'mimesearch-summary' => 'Гэта старонка дазваляе адбор файлаў па іх MIME-тыпе.
Фармат уводу: тып_зьместу/падтып, напрыклад, <code>image/jpeg</code>.',
'mimetype' => 'Тып MIME:',
'download' => 'загрузіць',

# Unwatched pages
'unwatchedpages' => 'Старонкі, за якімі ніхто не назірае',

# List redirects
'listredirects' => 'Сьпіс перанакіраваньняў',

# Unused templates
'unusedtemplates' => 'Шаблёны, якія не выкарыстоўваюцца',
'unusedtemplatestext' => 'На гэтай старонцы зьмешчаны сьпіс усіх старонак прасторы назваў «{{ns:template}}», якія ня ўключаныя ў іншыя старонкі.
Не забывайцеся праверыць іншыя спасылкі на шаблёны перад іх выдаленьнем.',
'unusedtemplateswlh' => 'іншыя спасылкі',

# Random page
'randompage' => 'Выпадковая старонка',
'randompage-nopages' => 'Няма старонак у {{PLURAL:$2|наступнай прасторы|наступных прасторах}} назваў: $1.',

# Random redirect
'randomredirect' => 'Выпадковае перанакіраваньне',
'randomredirect-nopages' => 'У прасторы назваў «$1» няма перанакіраваньняў.',

# Statistics
'statistics' => 'Статыстыка',
'statistics-header-pages' => 'Статыстыка старонак',
'statistics-header-edits' => 'Статыстыка рэдагаваньняў',
'statistics-header-views' => 'Статыстыка праглядаў',
'statistics-header-users' => 'Статыстыка ўдзелу',
'statistics-header-hooks' => 'Іншая статыстыка',
'statistics-articles' => 'Колькасьць старонак са зьместам',
'statistics-pages' => 'Колькасьць старонак',
'statistics-pages-desc' => 'Усе старонкі ў вікі, улучна з абмеркаваньнямі, перанакіраваньнямі і г.д.',
'statistics-files' => 'Колькасьць загружаных файлаў',
'statistics-edits' => 'Агульная колькасьць рэдагаваньняў',
'statistics-edits-average' => 'Сярэдняя колькасьць рэдагаваньняў на старонку',
'statistics-views-total' => 'Агульная колькасьць праглядаў',
'statistics-views-total-desc' => 'Прагляды неіснуючых старонак і спэцыяльных старонак не ўлічаныя',
'statistics-views-peredit' => 'Колькасьць праглядаў на рэдагаваньне',
'statistics-users' => '[[Special:ListUsers|Зарэгістраваныя ўдзельнікі]]',
'statistics-users-active' => 'Актыўныя ўдзельнікі',
'statistics-users-active-desc' => 'Удзельнікі, якія выканалі нейкае дзеяньне цягам {{PLURAL:$1|апошняга $1 дня|апошніх $1 дзён|апошніх $1 дзён}}',
'statistics-mostpopular' => 'Найпапулярнейшыя старонкі',

'disambiguations' => 'Старонкі, якія спасылаюцца на старонкі-неадназначнасьці',
'disambiguationspage' => 'Template:Неадназначнасьць',
'disambiguations-text' => "Наступныя старонкі спасылаюцца на '''старонкі-неадназначнасьці'''.
Замест гэтага, яны павінны спасылацца на пэўныя старонкі.<br />
Старонка лічыцца шматзначнай, калі яна ўтрымлівае шаблён назва якога знаходзіцца на старонцы [[MediaWiki:Disambiguationspage]]",

'doubleredirects' => 'Двайныя перанакіраваньні',
'doubleredirectstext' => 'На гэтай старонцы пададзены сьпіс перанакіраваньняў на іншыя перанакіраваньні. Кожны радок утрымлівае спасылкі на першае і другое перанакіраваньне, а таксама мэтавую старонку другога перанакіраваньня, якая звычайна зьяўляецца «сапраўднай» мэтавай старонкай, куды павіннае спасылацца першае перанакіраваньне.
<del>Закрэсьленыя</del> элемэнты былі выпраўленыя.',
'double-redirect-fixed-move' => '[[$1]] была перанесеная, яна цяпер перанакіроўвае на [[$2]]',
'double-redirect-fixed-maintenance' => 'Выпраўленьне падвойнага перанакіраваньня з [[$1]] на [[$2]].',
'double-redirect-fixer' => 'Выпраўленьне перанакіраваньняў',

'brokenredirects' => 'Некарэктныя перанакіраваньні',
'brokenredirectstext' => 'Наступныя перанакіраваньні спасылаюцца на неіснуючыя старонкі:',
'brokenredirects-edit' => 'рэдагаваць',
'brokenredirects-delete' => 'выдаліць',

'withoutinterwiki' => 'Старонкі без спасылак на іншыя моўныя вэрсіі',
'withoutinterwiki-summary' => 'Наступныя старонкі ня ўтрымліваюць спасылак на іншамоўныя вэрсіі:',
'withoutinterwiki-legend' => 'Прэфікс',
'withoutinterwiki-submit' => 'Паказаць',

'fewestrevisions' => 'Старонкі з найменшай колькасьцю рэдагаваньняў',

# Miscellaneous special pages
'nbytes' => '$1 {{PLURAL:$1|байт|байты|байтаў}}',
'ncategories' => '$1 {{PLURAL:$1|катэгорыя|катэгорыі|катэгорыяў}}',
'ninterwikis' => '$1 {{PLURAL:$1|інтэрвікі|інтэрвікі}}',
'nlinks' => '$1 {{PLURAL:$1|спасылка|спасылкі|спасылак}}',
'nmembers' => '$1 {{PLURAL:$1|элемэнт|элемэнты|элемэнтаў}}',
'nrevisions' => '$1 {{PLURAL:$1|вэрсія|вэрсіі|вэрсіяў}}',
'nviews' => '$1 {{PLURAL:$1|прагляд|прагляды|праглядаў}}',
'nimagelinks' => 'Выкарыстоўваецца на $1 {{PLURAL:$1|старонцы|старонках|старонках}}',
'ntransclusions' => 'выкарыстоўваецца на $1 {{PLURAL:$1|старонцы|старонках|старонках}}',
'specialpage-empty' => 'Гэтая старонка — пустая.',
'lonelypages' => 'Старонкі-сіраціны',
'lonelypagestext' => 'На наступныя старонкі няма спасылак і яны ня ўлучаныя ў іншыя старонкі {{GRAMMAR:родны|{{SITENAME}}}}.',
'uncategorizedpages' => 'Некатэгарызаваныя старонкі',
'uncategorizedcategories' => 'Некатэгарызаваныя катэгорыі',
'uncategorizedimages' => 'Некатэгарызаваныя файлы',
'uncategorizedtemplates' => 'Некатэгарызаваныя шаблёны',
'unusedcategories' => 'Катэгорыі, якія не выкарыстоўваюцца',
'unusedimages' => 'Файлы, якія не выкарыстоўваюцца',
'popularpages' => 'Папулярныя старонкі',
'wantedcategories' => 'Запатрабаваныя катэгорыі',
'wantedpages' => 'Запатрабаваныя старонкі',
'wantedpages-badtitle' => 'Няслушная назва сярод вынікаў: $1',
'wantedfiles' => 'Запатрабаваныя файлы',
'wantedfiletext-cat' => 'Наступныя файлы выкарыстоўваюцца, але іх няма. Файлы са зьнешніх сховішчаў могуць знаходзіцца ў сьпісе без уліку іх існаваньня. Любыя такія няслушныя ўваходжаньні будуць <del>выкрасьленыя</del>. Дадаткова, старонкі, якія ўбудоўваюць неіснуючыя файлы прыведзеныя на [[:$1]].',
'wantedfiletext-nocat' => 'Наступныя файлы выкарыстоўваюцца, але іх няма. Файлы са зьнешніх сховішчаў могуць знаходзіцца ў сьпісе без уліку іх існаваньня. Любыя такія няслушныя ўваходжаньні будуць <del>выкрасьленыя</del>.',
'wantedtemplates' => 'Запатрабаваныя шаблёны',
'mostlinked' => 'Старонкі, на якія найчасьцей спасылаюцца',
'mostlinkedcategories' => 'Катэгорыі з найбольшай колькасьцю старонак',
'mostlinkedtemplates' => 'Шаблёны, якія найчасьцей выкарыстоўваюцца',
'mostcategories' => 'Старонкі з найбольшай колькасьцю катэгорыяў',
'mostimages' => 'Файлы, на якія найчасьцей спасылаюцца',
'mostinterwikis' => 'Старонкі з найбольшай колькасьцю інтэрвікі',
'mostrevisions' => 'Старонкі з найбольшай колькасьцю рэдагаваньняў',
'prefixindex' => 'Усе старонкі з пачаткам назваў',
'prefixindex-namespace' => 'Усе старонкі з прэфіксам (прастора назваў $1)',
'shortpages' => 'Кароткія старонкі',
'longpages' => 'Доўгія старонкі',
'deadendpages' => 'Тупіковыя старонкі',
'deadendpagestext' => 'Наступныя старонкі не спасылаюцца на іншыя старонкі {{GRAMMAR:родны|{{SITENAME}}}}.',
'protectedpages' => 'Абароненыя старонкі',
'protectedpages-indef' => 'Толькі бестэрміновыя абароны',
'protectedpages-cascade' => 'Толькі каскадныя абароны',
'protectedpagestext' => 'Наступныя старонкі абароненыя ад пераносаў і рэдагаваньняў',
'protectedpagesempty' => 'Цяпер няма абароненых старонак з пазначанымі парамэтрамі.',
'protectedtitles' => 'Забароненыя старонкі',
'protectedtitlestext' => 'Стварэньне наступных старонак забароненае',
'protectedtitlesempty' => 'Цяпер няма абароненых назваў з пазначанымі парамэтрамі.',
'listusers' => 'Сьпіс удзельнікаў і ўдзельніц',
'listusers-editsonly' => 'Паказаць толькі ўдзельнікаў, якія маюць рэдагаваньні',
'listusers-creationsort' => 'Адсартаваць па даце стварэньня',
'usereditcount' => '$1 {{PLURAL:$1|рэдагаваньне|рэдагаваньні|рэдагаваньняў}}',
'usercreated' => '{{GENDER:$3|}}Створаны $1 у $2',
'newpages' => 'Новыя старонкі',
'newpages-username' => 'Імя ўдзельніка/ўдзельніцы:',
'ancientpages' => 'Найстарэйшыя старонкі',
'move' => 'Перанесьці',
'movethispage' => 'Перанесьці гэтую старонку',
'unusedimagestext' => 'Наступныя файлы існуюць, але не выкарыстоўваюцца ні на адной старонцы.
Калі ласка, заўважце, што іншыя сайты могуць спасылацца на гэты файл празь непасрэдную спасылку (URL), і ён можа актыўна выкарыстоўвацца нягледзячы на знаходжаньне ў гэтым сьпісе.',
'unusedcategoriestext' => 'Існуюць наступныя катэгорыі, якія ня ўтрымліваюць старонак ці іншых катэгорыяў.',
'notargettitle' => 'Не пазначаная мэта',
'notargettext' => 'Вы не пазначылі мэтавую старонку альбо ўдзельніка для гэтага дзеяньня.',
'nopagetitle' => 'Мэтавая старонка не існуе',
'nopagetext' => 'Пазначанай мэтавай старонкі не існуе.',
'pager-newer-n' => '$1 {{PLURAL:$1|навейшая|навейшыя|навейшых}}',
'pager-older-n' => '$1 {{PLURAL:$1|старэйшая|старэйшыя|старэйшых}}',
'suppress' => 'Рэвізаваць',
'querypage-disabled' => 'Гэта спэцыяльная старонка адключаная для падвышэньня прадукцыйнасьці',

# Book sources
'booksources' => 'Пошук кніг',
'booksources-search-legend' => 'Пошук кніг',
'booksources-isbn' => 'ISBN:',
'booksources-go' => 'Паказаць',
'booksources-text' => 'Ніжэй знаходзіцца сьпіс спасылак на іншыя сайты, якія прадаюць новыя і патрыманыя кнігі, і могуць таксама мець інфармацыю пра кнігі, якія Вы шукаеце:',
'booksources-invalid-isbn' => 'Пададзены няслушны ISBN; праверце, магчыма ўзьніклі памылкі пры пераносе нумару з арыгінальнай крыніцы.',

# Special:Log
'specialloguserlabel' => 'Выканаўца:',
'speciallogtitlelabel' => 'Мэта (назва ці удзельнік):',
'log' => 'Журналы падзеяў',
'all-logs-page' => 'Усе публічныя журналы падзеяў',
'alllogstext' => 'Сумесны паказ усіх журналаў падзеяў {{GRAMMAR:родны|{{SITENAME}}}}.
Вы можаце адфільтраваць вынікі па тыпе журналу, удзельніку ці старонцы.',
'logempty' => 'Падобных запісаў у журнале няма.',
'log-title-wildcard' => 'Шукаць назвы, якія пачынаюцца з гэтага тэксту',
'showhideselectedlogentries' => 'Паказаць/схаваць выбраныя запісы ў журнале',

# Special:AllPages
'allpages' => 'Усе старонкі',
'alphaindexline' => 'ад $1 да $2',
'nextpage' => 'Наступная старонка ($1)',
'prevpage' => 'Папярэдняя старонка ($1)',
'allpagesfrom' => 'Паказаць старонкі, пачынаючы з:',
'allpagesto' => 'Паказаць старонкі да:',
'allarticles' => 'Усе старонкі',
'allinnamespace' => 'Усе старонкі (прастора назваў: $1)',
'allnotinnamespace' => 'Усе старонкі (не ў прасторы назваў $1)',
'allpagesprev' => 'Папярэднія',
'allpagesnext' => 'Наступныя',
'allpagessubmit' => 'Паказаць',
'allpagesprefix' => 'Паказаць старонкі, назвы якіх пачынаюцца з:',
'allpagesbadtitle' => 'Пададзеная назва старонкі была няслушная ці пачыналася зь міжмоўнай ці міжвікі спасылкі. Яна яшчэ можа ўтрымліваць сымбалі, якія ня могуць ужывацца ў назвах.',
'allpages-bad-ns' => '{{SITENAME}} ня мае прасторы назваў «$1».',
'allpages-hide-redirects' => 'Схаваць перанакіраваньні',

# SpecialCachedPage
'cachedspecial-viewing-cached-ttl' => 'Вы праглядаеце закэшаваную вэрсію старонкі, якая магла быць абноўленая $1 таму.',
'cachedspecial-viewing-cached-ts' => 'Вы праглядаеце закэшаваную вэрсію старонкі, якая можа быць неактуальнай.',
'cachedspecial-refresh-now' => 'Пабачыць апошнюю вэрсію.',

# Special:Categories
'categories' => 'Катэгорыі',
'categoriespagetext' => '{{PLURAL:$1|Наступная катэгорыя зьмяшчае|Наступныя катэгорыі зьмяшчаюць}} старонкі і/альбо мэдыяфайлы.
Тут не паказаныя [[Special:UnusedCategories|катэгорыі, якія не выкарыстоўваюцца]].
Глядзіце таксама [[Special:WantedCategories|сьпіс запатрабаваных катэгорыяў]].',
'categoriesfrom' => 'Паказаць катэгорыі, пачынаючы з:',
'special-categories-sort-count' => 'сартаваць паводле колькасьці',
'special-categories-sort-abc' => 'сартаваць паводле альфабэту',

# Special:DeletedContributions
'deletedcontributions' => 'Выдалены ўнёсак удзельніка',
'deletedcontributions-title' => 'Выдалены ўнёсак удзельніка',
'sp-deletedcontributions-contribs' => 'унёсак',

# Special:LinkSearch
'linksearch' => 'Пошук вонкавых спасылках',
'linksearch-pat' => 'Узор для пошуку:',
'linksearch-ns' => 'Прастора назваў:',
'linksearch-ok' => 'Шукаць',
'linksearch-text' => 'Можна ўжываць сымбалі падстаноўкі, напрыклад, «*.wikipedia.org».<br />
Неабходны дамэн першага ўзроўню, напрыклад, «*.org».<br />
Пратаколы, якія падтрымліваюцца: <code>$1</code> (дапомна http://, калі пратакол не пазначаны).',
'linksearch-line' => 'Спасылка на $1 з $2',
'linksearch-error' => 'Сымбалі падстаноўкі могуць ужывацца толькі ў пачатку адрасоў.',

# Special:ListUsers
'listusersfrom' => 'Паказаць удзельнікаў, пачынаючы з:',
'listusers-submit' => 'Паказаць',
'listusers-noresult' => 'Удзельнікі ня знойдзеныя.',
'listusers-blocked' => '({{GENDER:$1|заблякаваны|заблякаваная}})',

# Special:ActiveUsers
'activeusers' => 'Сьпіс актыўных удзельнікаў',
'activeusers-intro' => 'Гэта сьпіс удзельнікаў, якія былі актыўнымі на працягу $1 {{PLURAL:$1|апошняга дня|апошніх дзён|апошніх дзён}}.',
'activeusers-count' => '$1 {{PLURAL:$1|рэдагаваньне|рэдагаваньні|рэдагаваньняў}} за $3 {{PLURAL:$3|апошні дзень|апошнія дні|апошніх дзён}}',
'activeusers-from' => 'Паказваць ўдзельнікаў, пачынаючы з:',
'activeusers-hidebots' => 'Схаваць робатаў',
'activeusers-hidesysops' => 'Схаваць адміністратараў',
'activeusers-noresult' => 'Удзельнікі ня знойдзеныя.',

# Special:Log/newusers
'newuserlogpage' => 'Журнал стварэньня рахункаў',
'newuserlogpagetext' => 'Гэта журнал стварэньня рахункаў удзельнікаў і ўдзельніц.',

# Special:ListGroupRights
'listgrouprights' => 'Правы групаў удзельнікаў',
'listgrouprights-summary' => 'Ніжэй пададзены сьпіс групаў удзельнікаў {{GRAMMAR:родны|{{SITENAME}}}}, разам зь іх правамі.
Таксама можна паглядзець [[{{MediaWiki:Listgrouprights-helppage}}|дадатковую інфармацыю]] пра асабістыя правы.',
'listgrouprights-key' => '* <span class="listgrouprights-granted">Прызначаныя правы</span>
* <span class="listgrouprights-revoked">Адабраныя правы</span>',
'listgrouprights-group' => 'Група',
'listgrouprights-rights' => 'Правы',
'listgrouprights-helppage' => 'Help:Правы групаў удзельнікаў',
'listgrouprights-members' => '(сьпіс удзельнікаў групы)',
'listgrouprights-addgroup' => 'можа дадаваць {{PLURAL:$2|групу|групы}}: $1',
'listgrouprights-removegroup' => 'можа выдаляць {{PLURAL:$2|групу|групы}}: $1',
'listgrouprights-addgroup-all' => 'можа дадаваць усе групы',
'listgrouprights-removegroup-all' => 'можа выдаляць усе групы',
'listgrouprights-addgroup-self' => 'Можа дадаць уласны рахунак да {{PLURAL:$2|групы|групаў}}: $1',
'listgrouprights-removegroup-self' => 'Можа выдаліць уласны рахунак з {{PLURAL:$2|групы|групаў}}: $1',
'listgrouprights-addgroup-self-all' => 'Можа дадаць уласны рахунак да ўсіх груп',
'listgrouprights-removegroup-self-all' => 'Можа выдаліць уласны рахунак з ўсіх груп',

# E-mail user
'mailnologin' => 'Няма адрасу атрымальніка',
'mailnologintext' => 'Вам неабходна [[Special:UserLogin|ўвайсьці ў сыстэму]] і мець пацьверджаны адрас электроннай пошты ў Вашых [[Special:Preferences|наладах]], каб дасылаць лісты іншым удзельнікам.',
'emailuser' => 'Даслаць ліст',
'emailuser-title-target' => 'Адправіць гэта па электроннай пошце {{GENDER:$1|гэтаму ўдзельніку|гэтай удзельніцы}}',
'emailuser-title-notarget' => 'Даслаць ліст ўдзельніку ці ўдзельніцы па электроннай пошце',
'emailpage' => 'Даслаць ліст ўдзельніку ці ўдзельніцы па электроннай пошце',
'emailpagetext' => 'Вы можаце выкарыстаць форму ніжэй, каб даслаць {{GENDER:$1|гэтаму ўдзельніку|гэтай удзельніцы}} ліст па электроннай пошце.
Адрас электроннай пошты, які Вы пазначалі ў [[Special:Preferences|сваіх наладах]], будзе пазначаны ў полі ліста «Ад», і {{GENDER:$1|ўдзельнік|ўдзельніца}} зможа даслаць на гэты адрас адказ.',
'usermailererror' => 'Пры адсыланьні пошты адбылася памылка:',
'defemailsubject' => 'Ліст з {{GRAMMAR:родны|{{SITENAME}}}} ад {{GENDER:$1|удзельніка|удзельніцы}} «$1»',
'usermaildisabled' => 'Электронная пошта ўдзельніка адключаная',
'usermaildisabledtext' => 'Вы ня можаце дасылаць электронныя лісты іншым удзельнікам {{GRAMMAR:родны|{{SITENAME}}}}',
'noemailtitle' => 'Адрас электроннай пошты адсутнічае',
'noemailtext' => 'Гэты удзельнік не пазначыў слушны адрас электроннай пошты.',
'nowikiemailtitle' => 'Атрыманьне лістоў па электроннай пошце забароненае',
'nowikiemailtext' => 'Гэты ўдзельнік не дазволіў атрымліваць лісты па электроннай пошце ад іншых удзельнікаў.',
'emailnotarget' => 'Неіснуючае ці няслушнае імя атрымальніка.',
'emailtarget' => 'Увядзіце імя атрымальніка',
'emailusername' => 'Імя ўдзельніка:',
'emailusernamesubmit' => 'Даслаць',
'email-legend' => 'Даслаць ліст электроннай пошты іншаму ўдзельніку {{GRAMMAR:родны|{{SITENAME}}}}',
'emailfrom' => 'Ад:',
'emailto' => 'Да:',
'emailsubject' => 'Тэма:',
'emailmessage' => 'Паведамленьне:',
'emailsend' => 'Даслаць',
'emailccme' => 'Даслаць мне копію ліста.',
'emailccsubject' => 'Копія Вашага ліста да $1: $2',
'emailsent' => 'Ліст адасланы',
'emailsenttext' => 'Ваш ліст быў адасланы.',
'emailuserfooter' => 'Гэты ліст быў дасланы ўдзельнікам $1 да ўдзельніка $2 з дапамогай функцыі «Даслаць ліст» праекту {{SITENAME}}.',

# User Messenger
'usermessage-summary' => 'Паведамленьне пра выхад з сыстэмы.',
'usermessage-editor' => 'Дастаўка сыстэмных паведамленьняў',

# Watchlist
'watchlist' => 'Мой сьпіс назіраньня',
'mywatchlist' => 'Сьпіс назіраньня',
'watchlistfor2' => 'Для $1 $2',
'nowatchlist' => 'Ваш сьпіс назіраньня пусты.',
'watchlistanontext' => 'Вам патрэбна $1, каб праглядаць альбо рэдагаваць сьпіс назіраньня.',
'watchnologin' => 'Вы не ўвайшлі ў сыстэму',
'watchnologintext' => 'Вам неабходна [[Special:UserLogin|ўвайсьці ў сыстэму]], каб зьмяніць Ваш сьпіс назіраньня.',
'addwatch' => 'Дадаць ў сьпіс назіраньня',
'addedwatchtext' => "Старонка «[[:$1]]» была дададзеная да Вашага [[Special:Watchlist|сьпісу назіраньня]].
Наступныя зьмены ў гэтай старонцы і зьвязанай зь ёю старонцы абмеркаваньняў будуць бачныя там, а ў [[Special:RecentChanges|сьпісе апошніх зьменаў]] старонка будзе выглядаць '''тлустай''', каб зьмены было лягчэй заўважыць.",
'removewatch' => 'Выдаліць са сьпісу назіраньня',
'removedwatchtext' => 'Старонка «[[:$1]]» была выдаленая з [[Special:Watchlist|Вашага сьпісу назіраньня]].',
'watch' => 'Назіраць',
'watchthispage' => 'Назіраць за гэтай старонкай',
'unwatch' => 'Не назіраць',
'unwatchthispage' => 'Перастаць назіраць',
'notanarticle' => 'Не старонка зьместу',
'notvisiblerev' => 'Вэрсія была выдаленая',
'watchnochange' => 'Нічога з Вашага сьпісу назіраньня не зьмянілася за паказаны пэрыяд.',
'watchlist-details' => 'У Вашым сьпісе назіраньня $1 {{PLURAL:$1|старонка|старонкі|старонак}} за выключэньнем старонак абмеркаваньня.',
'wlheader-enotif' => '* Дасылка паведамленьняў па электроннай пошце ўключаная.',
'wlheader-showupdated' => "* Старонкі, якія былі зьмененыя пасьля Вашага апошняга візыту, вылучаныя '''тоўстым''' шрыфтам",
'watchmethod-recent' => 'прагляд апошніх зьменаў у старонках са сьпісу назіраньня',
'watchmethod-list' => 'прагляд старонак са сьпісу назіраньня дзеля апошніх зьменах',
'watchlistcontains' => 'Ваш сьпіс назіраньня зьмяшчае $1 {{PLURAL:$1|старонка|старонкі|старонак}}.',
'iteminvalidname' => 'Праблема з элемэнтам «$1», няслушная назва…',
'wlnote' => "Ніжэй {{PLURAL:$1|паказаная '''$1''' апошняя зьмена|паказаныя '''$1''' апошнія зьмены|паказаныя '''$1''' апошніх зьменаў}} за '''$2''' {{PLURAL:$2|гадзіну|гадзіны|гадзінаў}}, па стане на $3, $4.",
'wlshowlast' => 'Паказаць: за апошнія $1 гадзінаў, $2 дзён, $3',
'watchlist-options' => 'Налады сьпісу назіраньня',

# Displayed when you click the "watch" button and it is in the process of watching
'watching' => 'Дадаецца ў сьпіс назіраньня…',
'unwatching' => 'Выдаляецца са сьпісу назіраньня…',
'watcherrortext' => 'Узьнікла памылка падчас зьмены Вашага сьпісу назіраньня для «$1».',

'enotif_mailer' => 'Служба паштовага апавяшчэньня {{GRAMMAR:родны|{{SITENAME}}}}',
'enotif_reset' => 'Пазначыць усе старонкі як прагледжаныя',
'enotif_newpagetext' => 'Гэта новая старонка.',
'enotif_impersonal_salutation' => 'Удзельнік {{GRAMMAR:родны|{{SITENAME}}}}',
'changed' => 'зьмененая',
'created' => 'створаная',
'enotif_subject' => 'Старонка {{GRAMMAR:родны|{{SITENAME}}}} $PAGETITLE была $CHANGEDORCREATED ўдзельнікам $PAGEEDITOR',
'enotif_lastvisited' => 'Глядзіце на $1 усе апошнія зьмены, якія адбыліся пасьля Вашага апошняга наведваньня.',
'enotif_lastdiff' => 'Глядзіце $1, каб пабачыць гэтую зьмену.',
'enotif_anon_editor' => 'ананімны ўдзельнік $1',
'enotif_body' => 'Шаноўны $WATCHINGUSERNAME,


Старонка $PAGETITLE {{GRAMMAR:родны|{{SITENAME}}}} была $CHANGEDORCREATED $PAGEEDITDATE $PAGEEDITOR, глядзіце цяперашнюю вэрсію на $PAGETITLE_URL.

$NEWPAGE

Кароткае апісаньне зьменаў: $PAGESUMMARY $PAGEMINOREDIT

Зьвязацца з аўтарам:
электронная пошта: $PAGEEDITOR_EMAIL
вікі-старонка: $PAGEEDITOR_WIKI

Паведамленьні ня будуць дасылацца ў выпадку паўторных рэдагаваньняў, пакуль Вы не наведаеце гэтую старонку.
Вы можаце пазначыць сьцяжкі дасылкі паведамленьняў для ўсіх старонках назіраньня Вашага сьпісу назіраньня.

             Сыстэма паведамленьняў {{GRAMMAR:родны|{{SITENAME}}}}

--
Каб зьмяніць налады абвяшчэньня праз электронную пошту, наведайце:
{{canonicalurl:{{#special:Preferences}}}}

Каб зьмяніць налады сьпісу назіраньня, наведайце:
{{canonicalurl:{{#special:Preferences}}}}

Каб выдаліць старонку з Вашага сьпісу назіраньня, наведайце:
$UNWATCHURL

Зваротная сувязь і дапамога:
{{canonicalurl:{{MediaWiki:Helppage}}}}',

# Delete
'deletepage' => 'Выдаліць старонку',
'confirm' => 'Пацьвердзіць',
'excontent' => 'колішні зьмест: «$1»',
'excontentauthor' => "зьмест быў: «$1» (і адзіным аўтарам быў '[[Special:Contributions/$2|$2]]')",
'exbeforeblank' => 'зьмест да ачысткі: «$1»',
'exblank' => 'старонка была пустая',
'delete-confirm' => 'Выдаліць «$1»',
'delete-legend' => 'Выдаліць',
'historywarning' => "'''Папярэджаньне''': старонка, якую Вы зьбіраецеся выдаліць, мае гісторыю з прыкладна $1 {{PLURAL:$1|вэрсіі|вэрсіяў|вэрсіяў}}:",
'confirmdeletetext' => 'Зараз Вы выдаліце старонку разам з усёй гісторыяй зьменаў.
Калі ласка, пацьвердзіце, што Вы зьбіраецеся гэта зрабіць і што Вы разумееце ўсе наступствы, а таксама робіце гэта ў адпаведнасьці з [[{{MediaWiki:Policy-url}}|правіламі]].',
'actioncomplete' => 'Дзеяньне выкананае',
'actionfailed' => 'Дзеяньне ня выкананае',
'deletedtext' => '«$1» была выдаленая.
Запісы пра выдаленыя старонкі зьмяшчаюцца ў $2.',
'dellogpage' => 'Журнал выдаленьняў',
'dellogpagetext' => 'Сьпіс апошніх выдаленьняў.',
'deletionlog' => 'журнал выдаленьняў',
'reverted' => 'Вернутая да папярэдняй вэрсіі',
'deletecomment' => 'Прычына:',
'deleteotherreason' => 'Іншая/дадатковая прычына:',
'deletereasonotherlist' => 'Іншая прычына',
'deletereason-dropdown' => '* Агульныя прычыны выдаленьня
** Запыт аўтара/аўтаркі
** Парушэньне аўтарскіх правоў
** Вандалізм',
'delete-edit-reasonlist' => 'Рэдагаваць прычыны выдаленьня',
'delete-toobig' => 'Гэтая старонка мае доўгую гісторыю рэдагаваньняў, болей за $1 {{PLURAL:$1|вэрсію|вэрсіі|вэрсіяў}}.
Выдаленьне такіх старонак было забароненае, каб пазьбегнуць праблемаў у працы {{GRAMMAR:родны|{{SITENAME}}}}.',
'delete-warning-toobig' => 'Гэтая старонка мае доўгую гісторыю рэдагаваньняў, больш за $1 {{PLURAL:$1|вэрсію|вэрсіі|вэрсіяў}}.
Яе выдаленьне можа выклікаць праблемы ў працы базы зьвестак {{GRAMMAR:родны|{{SITENAME}}}}; будзьце асьцярожны.',

# Rollback
'rollback' => 'Адкаціць рэдагаваньні',
'rollback_short' => 'Адкат',
'rollbacklink' => 'адкат',
'rollbacklinkcount' => 'адкаціць $1 {{PLURAL:$1|рэдагаваньне|рэдагаваньні|рэдагаваньняў}}',
'rollbacklinkcount-morethan' => 'адкаціць больш за $1 {{PLURAL:$1|рэдагаваньне|рэдагаваньні|рэдагаваньняў}}',
'rollbackfailed' => 'Памылка адкату',
'cantrollback' => 'Немагчыма адкаціць зьмену; апошні рэдактар — адзіны аўтар гэтай старонкі.',
'alreadyrolled' => 'Немагчыма адкаціць апошнюю зьмену [[:$1]], якую {{GENDER:$2|зрабіў|зрабіла}} [[User:$2|$2]] ([[User talk:$2|гутаркі]]{{int:pipe-separator}}[[Special:Contributions/$2|{{int:contribslink}}]]); нехта іншы ўжо зьмяніў старонку альбо адкаціў зьмены.

Апошнія зьмены зробленыя [[User:$3|$3]] ([[User talk:$3|гутаркі]]{{int:pipe-separator}}[[Special:Contributions/$3|{{int:contribslink}}]]).',
'editcomment' => "Кароткае апісаньне зьменаў было: «''$1''».",
'revertpage' => 'Рэдагаваньні [[Special:Contributions/$2|$2]] ([[User talk:$2|гутаркі]]) скасаваныя да папярэдняй вэрсіі [[User:$1|$1]]',
'revertpage-nouser' => 'Рэдагаваньні (імя ўдзельніка выдаленае) скасаваныя да папярэдняй вэрсіі [[User:$1|$1]]',
'rollback-success' => 'Адмененыя рэдагаваньні $1;
вернутая папярэдняя вэрсія $2.',

# Edit tokens
'sessionfailure-title' => 'Памылка сэсіі',
'sessionfailure' => 'Магчыма ўзьніклі праблемы ў Вашым цяперашнім сэансе працы;
гэта дзеяньне было скасавана для прадухіленьня перахопу сэансу.
Калі ласка, націсьніце «назад» і перазагрузіце старонку, зь якой Вы прыйшлі, і паспрабуйце ізноў.',

# Protect
'protectlogpage' => 'Журнал абаронаў',
'protectlogtext' => 'Ніжэй пададзены сьпіс зьменаў абароны старонкі.
Глядзіце [[Special:ProtectedPages|сьпіс абароненых старонак на цяперашні момант]].',
'protectedarticle' => 'абароненая «[[$1]]»',
'modifiedarticleprotection' => 'зьменены ўзровень абароны старонкі «[[$1]]»',
'unprotectedarticle' => 'зьнятая абарона з «[[$1]]»',
'movedarticleprotection' => 'перанесеныя налады абароны з «[[$2]]» на «[[$1]]»',
'protect-title' => 'Абарона «$1»',
'protect-title-notallowed' => 'Прагляд узроўню абароны «$1»',
'prot_1movedto2' => '[[$1]] перанесеная ў [[$2]]',
'protect-badnamespace-title' => 'Прастора назваў, у якой немагчыма абараняць старонкі',
'protect-badnamespace-text' => 'Старонкі ў гэтай прасторы назваў ня могуць быць абароненыя.',
'protect-legend' => 'Пацьверджаньне абароны',
'protectcomment' => 'Прычына:',
'protectexpiry' => 'Тэрмін:',
'protect_expiry_invalid' => 'Няслушны час сканчэньня абароны.',
'protect_expiry_old' => 'Тэрмін абароны прайшоў.',
'protect-unchain-permissions' => 'Выкарыстоўваць дадатковыя налады абароны',
'protect-text' => "Тут можна паглядзець і зьмяніць узровень абароны старонкі '''$1'''.",
'protect-locked-blocked' => "Вы ня можаце зьмяняць узровень абароны, пакуль Вы заблякаваны.
Цяперашнія налады для старонкі '''$1''':",
'protect-locked-dblock' => "Узровень абароны ня можа быць зьменены, таму што база зьвестак заблякаваная.
Цяперашнія налады для старонкі '''$1''':",
'protect-locked-access' => "Вы ня маеце правоў для зьмены ўзроўню абароны старонкі.
Цяперашнія налады для старонкі '''$1''':",
'protect-cascadeon' => 'Гэтая старонка часова абароненая, таму што яна ўключаная ў {{PLURAL:$1|наступную старонку, якая абароненая|наступныя старонкі, якія абароненыя|наступныя старонкі, якія абароненыя}} каскаднай абаронай.
Вы можаце зьмяніць узровень абароны, але гэта не паўплывае на каскадную абарону.',
'protect-default' => 'Дазволіць усім удзельнікам',
'protect-fallback' => 'Патрэбны дазвол «$1»',
'protect-level-autoconfirmed' => 'Блякаваць новых і ананімных удзельнікаў',
'protect-level-sysop' => 'Толькі адміністратары',
'protect-summary-cascade' => 'каскадная',
'protect-expiring' => 'сканчаецца $1 (UTC)',
'protect-expiring-local' => 'канчаецца $1',
'protect-expiry-indefinite' => 'бестэрмінова',
'protect-cascade' => 'Абараняць старонкі, якія ўключаныя ў гэтую старонку (каскадная абарона)',
'protect-cantedit' => 'Вы ня можаце зьмяніць узровень абароны гэтай старонкі, таму што Вы ня маеце дазволу на яе рэдагаваньне.',
'protect-othertime' => 'Іншы тэрмін:',
'protect-othertime-op' => 'іншы тэрмін',
'protect-existing-expiry' => 'Наяўны час сканчэньня: $3, $2',
'protect-otherreason' => 'Іншая/дадатковая прычына:',
'protect-otherreason-op' => 'Іншая прычына',
'protect-dropdown' => '*Звычайныя прычыны абароны
** Часты вандалізм
** Празьмерны спам
** Непрадуктыўная вайна рэдагаваньняў
** Папулярная старонка',
'protect-edit-reasonlist' => 'Рэдагаваць прычыны абароны',
'protect-expiry-options' => '1 гадзіна:1 hour,1 дзень:1 day,1 тыдзень:1 week,2 тыдні:2 weeks,1 месяц:1 month,3 месяцы:3 months,6 месяцаў:6 months,1 год:1 year,назаўсёды:infinite',
'restriction-type' => 'Дазвол:',
'restriction-level' => 'Узровень абмежаваньня:',
'minimum-size' => 'Мінімальны памер',
'maximum-size' => 'Максымальны памер:',
'pagesize' => '(у байтах)',

# Restrictions (nouns)
'restriction-edit' => 'Рэдагаваньне',
'restriction-move' => 'Перанос',
'restriction-create' => 'Стварэньне',
'restriction-upload' => 'Загрузка',

# Restriction levels
'restriction-level-sysop' => 'поўнасьцю абароненая',
'restriction-level-autoconfirmed' => 'часткова абароненая',
'restriction-level-all' => 'усе ўзроўні',

# Undelete
'undelete' => 'Паказаць выдаленыя старонкі',
'undeletepage' => 'Прагляд і аднаўленьне выдаленых старонак',
'undeletepagetitle' => "'''Ніжэй паданыя выдаленыя вэрсіі [[:$1|$1]]'''.",
'viewdeletedpage' => 'Паказаць выдаленыя старонкі',
'undeletepagetext' => '{{PLURAL:$1|Наступная старонка была выдаленая, але яна знаходзяцца ў архіве і можа быць адноўленая|Наступныя старонкі былі выдаленыя, але яны знаходзяцца ў архіве і могуць быць адноўленыя}}.
Архіў пэрыядычна чысьціцца.',
'undelete-fieldset-title' => 'Аднавіць вэрсіі',
'undeleteextrahelp' => "Для поўнага аднаўленьня гісторыі рэдагаваньня старонкі, пакіньце ўсе адзнакі нявызначнымі і націсьніце '''''{{int:undeletebtn}}'''''.
Для частковага аднаўленьня, пазначце тыя вэрсіі старонкі, якія трэба аднавіць і націсьніце '''''{{int:undeletebtn}}'''''.",
'undeleterevisions' => 'У архіве $1 {{PLURAL:$1|вэрсія|вэрсіі|вэрсіяў}}',
'undeletehistory' => 'Калі Вы адновіце старонку, будуць адноўленыя ўсе яе вэрсіі разам з журналам падзеяў.
Калі пасьля выдаленьня была створаная новая старонка з такой жа назвай, адноўленыя вэрсіі зьявяцца ў гісторыі перад новымі вэрсіямі.',
'undeleterevdel' => 'Аднаўленьня не адбудзецца, калі ў яго выніку будзе выдаленая апошняя вэрсія старонкі ці файла.
У гэтым выпадку, Вам трэба зьняць адзнакі, ці паказаць апошнія выдаленыя вэрсіі.',
'undeletehistorynoadmin' => 'Гэтая старонка была выдаленая.
Прычына выдаленьня пададзена ніжэй, разам са зьвесткамі ўдзельніка, які рэдагаваў старонку перад выдаленьнем.
Тэкст выдаленай старонкі могуць глядзець толькі адміністратары.',
'undelete-revision' => 'Выдаленая вэрсія $1 (ад $5 $4) ўдзельніка $3:',
'undeleterevision-missing' => 'Некарэктная ці неіснуючая вэрсія.
Верагодна Вы карысталіся няслушнай спасылкай, альбо, магчыма, вэрсія была выдаленая з архіву.',
'undelete-nodiff' => 'Папярэдняя вэрсія ня знойдзеная.',
'undeletebtn' => 'Аднавіць',
'undeletelink' => 'паглядзець/аднавіць',
'undeleteviewlink' => 'паказаць',
'undeletereset' => 'Скінуць',
'undeleteinvert' => 'Адваротны выбар',
'undeletecomment' => 'Прычына:',
'undeletedrevisions' => '{{PLURAL:$1|адноўленая $1 вэрсія|адноўленыя $1 вэрсіі|адноўленыя $1 вэрсіяў}}',
'undeletedrevisions-files' => 'адноўленыя $1 {{PLURAL:$1|вэрсія|вэрсіі|вэрсіяў}} і $2 {{PLURAL:$2|файл|файлы|файлаў}}',
'undeletedfiles' => '{{PLURAL:$1|адноўлены $1 файл|адноўленыя $1 файлы|адноўленыя $1 файлаў}}',
'cannotundelete' => 'Памылка аднаўленьня:
$1',
'undeletedpage' => "'''Старонка $1 была адноўленая'''

Глядзіце [[Special:Log/delete|журнал выдаленьняў]] для прагляду апошніх выдаленьняў і аднаўненьняў.",
'undelete-header' => 'Глядзіце [[Special:Log/delete|журнал выдаленьняў]] для прагляду апошніх выдаленьняў.',
'undelete-search-title' => 'Пошук выдаленых старонак',
'undelete-search-box' => 'Пошук выдаленых старонак',
'undelete-search-prefix' => 'Паказаць старонкі, назвы якіх пачынаюцца з:',
'undelete-search-submit' => 'Паказаць',
'undelete-no-results' => 'У архіве выдаленьняў ня знойдзеныя адпаведныя старонкі.',
'undelete-filename-mismatch' => 'Немагчыма аднавіць вэрсію файла з датай $1: несупадзеньне назвы файла',
'undelete-bad-store-key' => 'Немагчыма аднавіць вэрсію файла з датай $1: файл адсутнічаў да выдаленьня.',
'undelete-cleanup-error' => 'Памылка выдаленьня архіўнага файла «$1», які не выкарыстоўваўся.',
'undelete-missing-filearchive' => 'Немагчыма аднавіць файл з ідэнтыфікатарам $1, таму што ён адсутнічае ў базе зьвестак.
Магчыма ён быў ужо адноўлены.',
'undelete-error' => 'Памылка аднаўленьня старонкі',
'undelete-error-short' => 'Памылка аднаўленьня файла: $1',
'undelete-error-long' => 'Пад час аднаўленьня файла адбыліся памылкі:

$1',
'undelete-show-file-confirm' => 'Вы ўпэўненыя, што жадаеце паглядзець выдаленую вэрсію файла «<nowiki>$1</nowiki>» ад $2 $3?',
'undelete-show-file-submit' => 'Так',

# Namespace form on various pages
'namespace' => 'Прастора назваў:',
'invert' => 'Адваротны выбар',
'tooltip-invert' => 'Пазначце гэтае поле каб схаваць зьмены ў старонках з выбранай прасторы назваў (і зьвязнай прасторы назваў, калі пазначана)',
'namespace_association' => 'Зьвязаная прастора назваў',
'tooltip-namespace_association' => 'Пазначце гэтае поле каб уключыць простору назваў абмеркаваньняў (альбо прадметную), зьвязаных з выбранай прасторай назваў',
'blanknamespace' => '(Асноўная)',

# Contributions
'contributions' => 'Унёсак',
'contributions-title' => 'Унёсак {{GENDER:$1|удзельніка|удзельніцы}} $1',
'mycontris' => 'Мой унёсак',
'contribsub2' => 'Для $1 ($2)',
'nocontribs' => 'Ня знойдзена зьменаў, якія адпавядаюць гэтым крытэрыям.',
'uctop' => ' (апошняя)',
'month' => 'Ад месяца (і раней):',
'year' => 'Ад году (і раней):',

'sp-contributions-newbies' => 'Паказаць унёсак толькі з новых рахункаў',
'sp-contributions-newbies-sub' => 'Унёсак пачынаючых',
'sp-contributions-newbies-title' => 'Унёсак удзельнікаў з новых рахункаў',
'sp-contributions-blocklog' => 'журнал блякаваньняў',
'sp-contributions-deleted' => 'выдалены ўнёсак удзельніка',
'sp-contributions-uploads' => 'загрузкі',
'sp-contributions-logs' => 'журналы падзеяў',
'sp-contributions-talk' => 'гутаркі',
'sp-contributions-userrights' => 'кіраваньне правамі ўдзельнікаў і ўдзельніц',
'sp-contributions-blocked-notice' => '{{GENDER:$1|Гэты ўдзельнік у дадзены момант заблякаваны|Гэтая ўдзельніца ў дадзены момант заблякаваная}}. Апошні запіс з журнала блякаваньняў пададзены ніжэй для даведкі:',
'sp-contributions-blocked-notice-anon' => 'Гэты IP-адрас у дадзены момант заблякаваны.
Апошні запіс з журнала блякаваньняў пададзены ніжэй для даведкі:',
'sp-contributions-search' => 'Пошук унёску',
'sp-contributions-username' => 'IP-адрас альбо імя ўдзельніка/ўдзельніцы:',
'sp-contributions-toponly' => 'Паказваць толькі зьмены, якія зьяўляюцца апошнімі вэрсіямі',
'sp-contributions-submit' => 'Шукаць',

# What links here
'whatlinkshere' => 'Спасылкі на старонку',
'whatlinkshere-title' => 'Старонкі, якія спасылаюцца на $1',
'whatlinkshere-page' => 'Старонка:',
'linkshere' => "Наступныя старонкі спасылаюцца на '''[[:$1]]''':",
'nolinkshere' => "Ніводная старонка не спасылаецца на '''[[:$1]]'''.",
'nolinkshere-ns' => "Ніводная старонка не спасылаецца на '''[[:$1]]''' з выбранай прасторы назваў.",
'isredirect' => 'старонка-перанакіраваньне',
'istemplate' => 'уключэньне',
'isimage' => 'спасылка на файл',
'whatlinkshere-prev' => '{{PLURAL:$1|папярэдняя|папярэднія|папярэднія}} $1',
'whatlinkshere-next' => '{{PLURAL:$1|наступная|наступныя|наступныя}} $1',
'whatlinkshere-links' => '← спасылкі',
'whatlinkshere-hideredirs' => '$1 перанакіраваньні',
'whatlinkshere-hidetrans' => '$1 уключэньні',
'whatlinkshere-hidelinks' => '$1 спасылкі',
'whatlinkshere-hideimages' => '$1 спасылкі на выявы',
'whatlinkshere-filters' => 'Фільтры',

# Block/unblock
'autoblockid' => 'Аўтаматычнае блякаваньне №$1',
'block' => 'Заблякаваць удзельніка',
'unblock' => 'Разблякаваць удзельніка',
'blockip' => 'Блякаваньне ўдзельніка ці ўдзельніцы',
'blockip-title' => 'Блякаваньне ўдзельніка ці ўдзельніцы',
'blockip-legend' => 'Заблякаваць удзельніка',
'blockiptext' => 'Наступная форма дазваляе заблякаваць магчымасьць рэдагаваньня з пэўнага IP-адрасу альбо імя ўдзельніка. Гэта трэба рабіць толькі дзеля прадухіленьня вандалізму і згодна з [[{{MediaWiki:Policy-url}}|правіламі]]. Пазначце ніжэй дакладную прычыну (напрыклад, пералічыце асобныя старонкі, на якіх былі парушэньні).',
'ipadressorusername' => 'IP-адрас альбо імя ўдзельніка/ўдзельніцы:',
'ipbexpiry' => 'Тэрмін:',
'ipbreason' => 'Прычына:',
'ipbreasonotherlist' => 'Іншая прычына',
'ipbreason-dropdown' => '* Агульныя прычыны блякаваньняў
** Даданьне ілжывай інфармацыі
** Выдаленьне зьместу старонак
** Спам
** Даданьне бязглузьдзіцы
** Абразы/пагрозы
** Злоўжываньне некалькімі рахункамі
** Недапушчальнае імя ўдзельніка',
'ipb-hardblock' => 'Забараніць увайшоўшым удзельнікам рэдагаваць з гэтага IP-адрасу',
'ipbcreateaccount' => 'Забараніць стварэньне рахункаў',
'ipbemailban' => 'Забараніць удзельніку дасылаць лісты па электроннай пошце',
'ipbenableautoblock' => 'Аўтаматычна блякаваць апошні IP-адрас гэтага ўдзельніка, і ўсіх наступных IP-адрасоў зь якіх ён будзе спрабаваць рэдагаваць',
'ipbsubmit' => 'Заблякаваць гэтага ўдзельніка',
'ipbother' => 'Іншы тэрмін:',
'ipboptions' => '2 гадзіны:2 hours,1 дзень:1 day,3 дні:3 days,1 тыдзень:1 week,2 тыдні:2 weeks,1 месяц:1 month,3 месяцы:3 months,6 месяцаў:6 months,1 год:1 year,назаўсёды:infinite',
'ipbotheroption' => 'іншы',
'ipbotherreason' => 'Іншая/дадатковая прычына:',
'ipbhidename' => 'Схаваць імя ўдзельніка ў рэдагаваньнях і сьпісах',
'ipbwatchuser' => 'Назіраць за старонкай удзельніка і яго гутаркамі',
'ipb-disableusertalk' => 'Забараніць удзельніку рэдагаваньне ўласнай старонкі гутарак падчас блякаваньня',
'ipb-change-block' => 'Зьмяніць парамэтры блякаваньня',
'ipb-confirm' => 'Пацьвердзіць блякаваньне',
'badipaddress' => 'Некарэктны IP-адрас',
'blockipsuccesssub' => 'Блякаваньне пасьпяховае',
'blockipsuccesstext' => '[[Special:Contributions/$1|$1]] {{GENDER:$1|быў заблякаваны|была заблякаваная}}.<br />
Глядзіце [[Special:BlockList|сьпіс блякаваньняў]] дзеля іх перагляду.',
'ipb-blockingself' => 'Вы зьбіраецеся заблякаваць самога сябе! Вы ўпэўнены, што жадаеце гэта зрабіць?',
'ipb-confirmhideuser' => 'Вы зьбіраецеся заблякаваць удзельніка са статусам «схаваны». Гэтае дзеяньне прывядзе да таго, што яго імя зьявіцца ва ўсіх сьпісах і журналах уваходу. Вы ўпэўнены, што жадаеце гэта зрабіць?',
'ipb-edit-dropdown' => 'Рэдагаваць прычыны блякіровак',
'ipb-unblock-addr' => 'Разблякаваць $1',
'ipb-unblock' => 'Разблякаваць рахунак ўдзельніка ці IP-адрас',
'ipb-blocklist' => 'Паказаць існуючыя блякаваньні',
'ipb-blocklist-contribs' => 'Унёсак $1',
'unblockip' => 'Разблякаваць удзельніка',
'unblockiptext' => 'Карыстайцеся пададзенай ніжэй формай для аднаўленьня магчымасьці рэдагаваньня для раней заблякаванага IP-адрасу альбо рахунку ўдзельніка.',
'ipusubmit' => 'Зьняць гэта блякаваньне',
'unblocked' => '[[User:$1|$1]] быў разблякаваны.',
'unblocked-range' => '$1 быў разблякаваны',
'unblocked-id' => 'Блякаваньне $1 зьнятае',
'blocklist' => 'Заблякаваныя ўдзельнікі',
'ipblocklist' => 'Заблякаваныя ўдзельнікі',
'ipblocklist-legend' => 'Пошук заблякаванага ўдзельніка',
'blocklist-userblocks' => 'Схаваць блякаваньні рахункаў',
'blocklist-tempblocks' => 'Схаваць часовыя блякаваньні',
'blocklist-addressblocks' => 'Схаваць блякаваньні асобных IP-адрасоў',
'blocklist-rangeblocks' => 'хаваньне блякаваньняў дыяпазонаў',
'blocklist-timestamp' => 'Дата/час',
'blocklist-target' => 'Мэта',
'blocklist-expiry' => 'Сканчаецца',
'blocklist-by' => 'Адміністратар, які заблякаваў',
'blocklist-params' => 'Парамэтры блякаваньня',
'blocklist-reason' => 'Прычына',
'ipblocklist-submit' => 'Шукаць',
'ipblocklist-localblock' => 'Лякальнае блякаваньне',
'ipblocklist-otherblocks' => '{{PLURAL:$1|Іншае блякаваньне|Іншыя блякаваньні}}',
'infiniteblock' => 'назаўсёды',
'expiringblock' => 'канчаецца $1 $2',
'anononlyblock' => 'толькі ананімаў',
'noautoblockblock' => 'аўтаматычнае блякаваньне адключанае',
'createaccountblock' => 'стварэньне рахунку заблякаванае',
'emailblock' => 'дасылка лістоў забароненая',
'blocklist-nousertalk' => 'ня можа рэдагаваць уласную старонку гутарак',
'ipblocklist-empty' => 'Сьпіс блякаваньняў пусты.',
'ipblocklist-no-results' => 'Паданы IP-адрас альбо імя ўдзельніка не заблякаваныя.',
'blocklink' => 'заблякаваць',
'unblocklink' => 'разблякаваць',
'change-blocklink' => 'зьмяніць блякаваньне',
'contribslink' => 'унёсак',
'emaillink' => 'даслаць ліст',
'autoblocker' => "Вы аўтаматычна заблякаваныя, таму што Ваш IP-адрас нядаўна ўжываўся «[[User:$1|$1]]». Прычына блякаваньня $1 наступная: «'''$2'''»",
'blocklogpage' => 'Журнал блякаваньняў',
'blocklog-showlog' => 'Гэты ўдзельнік ужо заблякаваны. Журнал блякаваньняў пададзены ніжэй:',
'blocklog-showsuppresslog' => 'Гэты ўдзельнік ужо заблякаваны і схаваны. Журнал хаваньняў пададзены ніжэй:',
'blocklogentry' => 'заблякаваны [[$1]] на тэрмін: $2 $3',
'reblock-logentry' => 'зьмененыя парамэтры блякаваньня для [[$1]] на тэрмін: з $2 да $3',
'blocklogtext' => 'Гэта журнал уліку блякаваньняў і разблякаваньняў удзельнікаў.
Аўтаматычна заблякаваныя IP-адрасы не пазначаныя.
Глядзіце [[Special:BlockList|сьпіс блякаваньняў]], каб пабачыць дзейныя ў гэты момант блякаваньні.',
'unblocklogentry' => 'разблякаваны $1',
'block-log-flags-anononly' => 'толькі ананімныя ўдзельнікі',
'block-log-flags-nocreate' => 'стварэньне рахункаў забароненае',
'block-log-flags-noautoblock' => 'аўтаматычнае блякаваньне адключанае',
'block-log-flags-noemail' => 'электронная пошта заблякаваная',
'block-log-flags-nousertalk' => 'ня можа рэдагаваць уласную старонку гутарак',
'block-log-flags-angry-autoblock' => 'уключанае палепшанае аўтаблякаваньне',
'block-log-flags-hiddenname' => 'імя ўдзельніка схаванае',
'range_block_disabled' => 'Адміністратарам забаронена блякаваць дыяпазоны.',
'ipb_expiry_invalid' => 'Няслушны тэрмін блякаваньня.',
'ipb_expiry_temp' => 'Блякаваньні са схаваньнем імя ўдзельніка павінны быць бестэрміновымі.',
'ipb_hide_invalid' => 'Немагчыма схаваць гэты рахунак; верагодна зь яго зроблена зашмат рэдагаваньняў.',
'ipb_already_blocked' => '«$1» ужо заблякаваны',
'ipb-needreblock' => '$1 ужо заблякаваны. Вы жадаеце зьмяніць парамэтры?',
'ipb-otherblocks-header' => '{{PLURAL:$1|Іншае блякаваньне|Іншыя блякаваньні}}',
'unblock-hideuser' => 'Вы ня можаце разблякаваць гэтага ўдзельніка, таму што яго імя было схаванае.',
'ipb_cant_unblock' => 'Памылка: ID блякаваньня $1 ня знойдзена. Верагодна яно было ўжо зьнятае.',
'ipb_blocked_as_range' => 'Памылка: IP-адрас $1 быў заблякаваны наўпрост і ня можа быць разблякаваны.
Тым ня менш, ён належыць да дыяпазону $2, які можа быць разблякаваны.',
'ip_range_invalid' => 'Некарэктны дыяпазон IP-адрасоў.',
'ip_range_toolarge' => 'Блякаваньні дыяпазонаў, большых за /$1, не дазволеныя.',
'blockme' => 'Заблякуйце мяне',
'proxyblocker' => 'Блякаваньне проксі',
'proxyblocker-disabled' => 'Гэта функцыя выключаная.',
'proxyblockreason' => "Ваш IP-адрас быў заблякаваны таму што ён належыць адкрытаму проксі.
Калі ласка, зьвяжыцеся з Вашым Інтэрнэт-правайдарам альбо са службай тэхнічнай падтрымкі і паведаміце ім пра гэтую сур'ёзную праблему бясьпекі.",
'proxyblocksuccess' => 'Зроблена.',
'sorbsreason' => 'Ваш IP-адрас знаходзіцца ў сьпісе адкрытых проксі ў DNSBL, якім карыстаецца {{SITENAME}}.',
'sorbs_create_account_reason' => 'Ваш IP-адрас знаходзіцца ў сьпісе адкрытых проксі ў DNSBL, якім карыстаецца {{SITENAME}}.
Вы ня зможаце стварыць рахунак',
'cant-block-while-blocked' => 'Вы ня можаце блякаваць іншых удзельнікаў, пакуль Вы самі заблякаваныя.',
'cant-see-hidden-user' => 'Удзельнік, якога Вы спрабуеце заблякаваць, ужо заблякаваны і схаваны. З-за таго, што Вы ня маеце правоў хаваньня ўдзельнікаў, Вы ня можаце бачыць альбо зьмяняць блякаваньне удзельніка.',
'ipbblocked' => 'Вы ня можаце блякаваць ці раблякоўваць іншых удзельнікаў, таму што заблякаваныя самі',
'ipbnounblockself' => 'Вы ня можаце раблякоўваць сябе',

# Developer tools
'lockdb' => 'Заблякаваць базу зьвестак',
'unlockdb' => 'Разблякаваць базу зьвестак',
'lockdbtext' => 'Блякаваньне базы зьвестак прыпыніць для ўсіх удзельнікаў магчымасьць рэдагаваць старонкі, зьмяняць налады, рэдагаваць сьпісы назіраньня, і іншыя дзеяньні, якія патрабуюць доступ да базы зьвестак.
Калі ласка, пацьвердзіце, што гэта тое, што Вы зьбіраецеся зрабіць, і што Вы здыміце блякаваньне базы зьвестак, адразу пасьля сканчэньня абслугоўваньня.',
'unlockdbtext' => 'Разблякаваньне базы зьвестак адновіць для ўсіх удзельнікаў магчымасьць рэдагаваць старонкі, зьмяняць налады, рэдагаваць сьпісы назіраньня, і іншыя дзеяньні, якія патрабуюць доступ да базы зьвестак.
Калі ласка, пацьвердзіце, што гэта тое, што Вы зьбіраецеся зрабіць.',
'lockconfirm' => 'Так, я сапраўды жадаю заблякаваць базу зьвестак.',
'unlockconfirm' => 'Так, я сапраўды жадаю разблякаваць базу зьвестак.',
'lockbtn' => 'Заблякаваць базу зьвестак',
'unlockbtn' => 'Разблякаваць базу зьвестак',
'locknoconfirm' => 'Вы не пазначылі пацьверджаньне.',
'lockdbsuccesssub' => 'База зьвестак заблякаваная',
'unlockdbsuccesssub' => 'База зьвестак разблякаваная',
'lockdbsuccesstext' => 'База зьвестак была заблякаваная.<br />
Не забудзьцеся [[Special:UnlockDB|зьняць блякаваньне]] пасьля сканчэньня абслугоўваньня.',
'unlockdbsuccesstext' => 'База зьвестак была разблякаваная.',
'lockfilenotwritable' => 'Немагчыма запісаць у файл блякаваньняў базы зьвестак.
Блякаваньне ці разблякаваньне базы зьвестак патрабуе, каб вэб-сэрвэр меў дазвол на запіс у гэты файл.',
'databasenotlocked' => 'База зьвестак не заблякаваная.',
'lockedbyandtime' => '($1 $2 у $3)',

# Move page
'move-page' => 'Перанесьці $1',
'move-page-legend' => 'Перанесьці старонку',
'movepagetext' => "З дапамогай гэтай формы Вы можаце зьмяніць назву і гісторыю старонкі.
Старая назва будзе перанакіроўваць на новую.
Вы можаце аўтаматычна абнавіць перанакіраваньні на першапачатковую назву.
Калі вы адмовіцеся, упэўніцеся ў адсутнасьці [[Special:DoubleRedirects|падвойных]] ці [[Special:BrokenRedirects|няслушных перанакіраваньняў]].
Адказнасьць за дакладнасьць спасылак ляжыць на тым, хто перанёс старонку.

Заўважце, што старонка '''ня будзе''' перанесеная, калі пад новай назвай ужо існуе іншая старонка, за выключэньнем выпадкаў, калі яна пустая альбо зьяўляецца перанакіраваньнем і ня мае гісторыі рэдагаваньняў. Гэта азначае, што існуе магчымасьць адмяніць зьмену назвы, калі Вы памыліліся, але не магчыма выдаліць існую старонку.

'''ПАПЯРЭДЖАНЬНЕ!'''
Зьмена назвы можа прывесьці да нечаканых зьменаў папулярных старонак;
калі ласка, упэўніцеся, што Вы разумееце наступствы такіх зьменаў.",
'movepagetext-noredirectfixer' => "Скарыстаўшыся гэтай формай, Вы перанесяце старонку з усёй гісторыяй зьменаў да новай назвы.
Старонка са старой назвай будзе перанакіроўваць на старонку з новай.
Калі ласка, праверце існаваньне [[Special:DoubleRedirects|падвоеных]] і [[Special:BrokenRedirects|няслушных перанакіраваньняў]].
Вы адказныя за тое, каб спасылкі працягвалі весьці туды, куды яны павінны.

Заўважце, калі ласка, што старонка '''ня будзе''' перанесеная, калі ўжо існуе старонка з новай назвай, акрамя выпадкаў, калі яна пустая ці зьмяшчае перанакіраваньне, а таксама ня мае папярэдняй гісторыі рэдагаваньняў.
Гэта значыць, што Вы можаце перанесьці старонку назад, калі зробіце памылку, але ня можаце выпадкова перазапісаць існуючую старонку.

'''Папярэджаньне!'''
Перанос можа быць маштабным і нечаканым для ''папулярных'' старонак.
Упэўніцеся, калі ласка, што Вы разумееце ўсе магчымыя наступствы пераносу.",
'movepagetalktext' => "Старонка абмеркаваньня будзе перанесеная разам з асноўнай старонкай, '''за выключэньнем:'''
* Не пустая старонка абмеркаваньня ўжо існуе пад новай назвай, альбо
* Вы не паставілі адзнаку ў полі ніжэй.

У такіх выпадках Вы можаце перанесьці ці аб’яднаць старонку абмеркаваньня самастойна.",
'movearticle' => 'Перанесьці старонку:',
'moveuserpage-warning' => "'''Папярэджаньне:''' Вы зьбіраецеся перанесьці старонку ўдзельніка. Калі ласка заўважце, што старонка будзе перанесеная, але імя ўдзельніка ''ня'' будзе зьмененае.",
'movenologin' => 'Вы не ўвайшлі ў сыстэму',
'movenologintext' => 'Вам неабходна [[Special:UserLogin|ўвайсьці ў сыстэму]], каб перанесьці старонкі.',
'movenotallowed' => 'Вы ня маеце дазволу на перанос старонак.',
'movenotallowedfile' => 'Вы ня маеце правоў на перайменаваньне файлаў.',
'cant-move-user-page' => 'Вы ня маеце правоў для пераносу старонак удзельнікаў (апрача падстаронак).',
'cant-move-to-user-page' => 'Вы ня маеце правоў для пераносу старонкі ў прастору ўдзельніка (апрача падстаронак).',
'newtitle' => 'Новая назва:',
'move-watch' => 'Назіраць за гэтай старонкай',
'movepagebtn' => 'Перанесьці старонку',
'pagemovedsub' => 'Пасьпяховы перанос',
'movepage-moved' => "'''Старонка «$1» была перанесеная ў «$2»'''",
'movepage-moved-redirect' => 'Перанакіраваньне было створана.',
'movepage-moved-noredirect' => 'Перанакіраваньне не было створанае.',
'articleexists' => 'Старонка з такой назвай ужо існуе, альбо абраная Вамі назва недапушчальная. Калі ласка, абярыце іншую назву.',
'cantmove-titleprotected' => 'Немагчыма перанесьці старонку, таму што новая назва знаходзіцца ў сьпісе забароненых',
'talkexists' => "'''Старонка пасьпяхова перанесеная, але не атрымалася перанесьці старонку абмеркаваньня, таму што старонка з такой назвай ужо існуе. Калі ласка, аб'яднайце тэксты самастойна.'''",
'movedto' => 'перанесеная ў',
'movetalk' => 'Перанесьці таксама старонку абмеркаваньня',
'move-subpages' => 'Перанесьці ўсе падстаронкі (да $1)',
'move-talk-subpages' => 'Перанесьці ўсе падстаронкі старонкі абмеркаваньня (да $1)',
'movepage-page-exists' => 'Старонка $1 ужо існуе і ня можа быць перапісана аўтаматычна.',
'movepage-page-moved' => 'Старонка $1 перанесеная ў $2.',
'movepage-page-unmoved' => 'Старонка $1 ня можа быць перанесеная ў $2.',
'movepage-max-pages' => '$1 {{PLURAL:$1|старонка была перанесеная|старонкі былі перанесеныя|старонак былі перанесеныя}} — гэта дазволены максымум, больш аўтаматычных пераносаў ня будзе.',
'movelogpage' => 'Журнал пераносаў',
'movelogpagetext' => 'Ніжэй пададзены сьпіс перанесеных старонак.',
'movesubpage' => '{{PLURAL:$1|Падстаронка|Падстаронкі}}',
'movesubpagetext' => 'Гэтая старонка мае $1 {{PLURAL:$1|падстаронку|падстаронкі|падстаронак}}, {{PLURAL:$1|якая паказаная ніжэй|якія паказаныя ніжэй}}.',
'movenosubpage' => 'Гэтая старонка ня мае падстаронак.',
'movereason' => 'Прычына:',
'revertmove' => 'адкат',
'delete_and_move' => 'Выдаліць і перанесьці',
'delete_and_move_text' => '==Патрабуецца выдаленьне==
Мэтавая старонка «[[:$1]]» ужо існуе.
Ці жадаеце Вы яе выдаліць, каб вызваліць месца для пераносу?',
'delete_and_move_confirm' => 'Так, выдаліць старонку',
'delete_and_move_reason' => 'Выдаленая, каб вызваліць месца для пераносу «[[$1]]»',
'selfmove' => 'Крынічная і мэтавая назвы супадаюць;
немагчыма перанесьці старонку саму на сябе.',
'immobile-source-namespace' => 'Немагчыма пераносіць старонкі ў прасторы назваў «$1»',
'immobile-target-namespace' => 'Немагчыма пераносіць старонкі ў прастору назваў «$1»',
'immobile-target-namespace-iw' => 'Інтэрвікі-спасылка — няслушная назва для пераносу старонкі.',
'immobile-source-page' => 'Гэтую старонку нельга пераносіць.',
'immobile-target-page' => 'Немагчыма перанесьці старонку пад гэтую назву.',
'bad-target-model' => 'Выніковая старонка выкарыстоўвае іншы тып зьместу. Немагчыма пераўтварыць $1 у $2.',
'imagenocrossnamespace' => 'Нельга перанесьці файл у ня-файлавую прастору назваў',
'nonfile-cannot-move-to-file' => 'Нельга перанесьці ня файл у прастору назваў файлаў',
'imagetypemismatch' => 'Новае пашырэньне файла не адпавядае яго тыпу',
'imageinvalidfilename' => 'Няслушная назва мэтавага файла',
'fix-double-redirects' => 'Абнавіць усе перанакіраваньні на першапачатковую назву',
'move-leave-redirect' => 'Пакінуць перанакіраваньне',
'protectedpagemovewarning' => "'''Папярэджаньне:''' Гэтая старонка была абароненая, і яе могуць пераносіць толькі ўдзельнікі з правамі адміністратара.
Апошні запіс з журнала пададзены ніжэй для даведкі:",
'semiprotectedpagemovewarning' => "'''Заўвага:''' Гэта старонка была абароненая, і яе могуць пераносіць толькі зарэгістраваныя ўдзельнікі.
Апошні запіс з журнала пададзены ніжэй для даведкі:",
'move-over-sharedrepo' => '== Файл існуе ==

[[:$1]] існуе ў агульным сховішчы. Перайменаваньне файла ў гэтую назву закрые агульны файл.',
'file-exists-sharedrepo' => 'Выбраная назва файла ўжо выкарыстоўваецца ў агульным сховішчы.
Калі ласка, выберыце іншую назву.',

# Export
'export' => 'Экспартаваць старонкі',
'exporttext' => 'Вы можаце экспартаваць тэкст і гісторыю рэдагаваньняў асобнай старонкі ці набору старонак у XML-фармаце.
Гэта потым можа быць імпартаванае ў іншую вікі, якая выкарыстоўвае MediaWiki праз [[Special:Import|старонку імпартаваньня]].

Каб экспартаваць старонкі, увядзіце назвы старонак у тэкставае поле ніжэй, адну назву ў адзін радок, і абярыце жадаеце Вы цяперашнюю вэрсію разам з усімі папярэднімі вэрсіямі і гісторыяй рэдагаваньняў, ці толькі цяперашнюю вэрсію з інфармацыяй пра апошняе рэдагаваньне.

У апошнім выпадку Вы можаце таксама скарыстацца спасылкай, напрыклад, [[{{#Special:Export}}/{{MediaWiki:Mainpage}}]] для «[[{{MediaWiki:Mainpage}}]]».',
'exportall' => 'Экспартаваць усе старонкі',
'exportcuronly' => 'Экспартаваць толькі цяперашнюю вэрсію, бяз поўнай гісторыі',
'exportnohistory' => "----
'''Заўвага:''' экспартаваньне поўнай гісторыі старонак з дапамогай гэтай формы было адключанае праз прычыны прадукцыйнасьці сыстэмы.",
'exportlistauthors' => 'Дадае поўны сьпіс аўтараў для кожнай старонкі',
'export-submit' => 'Экспартаваць',
'export-addcattext' => 'Дадаць старонкі з катэгорыі:',
'export-addcat' => 'Дадаць',
'export-addnstext' => 'Дадаць старонкі з прасторы назваў:',
'export-addns' => 'Дадаць',
'export-download' => 'Захаваць як файл',
'export-templates' => 'Разам з шаблёнамі',
'export-pagelinks' => 'Уключыць зьвязаныя старонкі да глыбіні:',

# Namespace 8 related
'allmessages' => 'Сыстэмныя паведамленьні',
'allmessagesname' => 'Назва',
'allmessagesdefault' => 'Тэкст па змоўчаньні',
'allmessagescurrent' => 'Цяперашні тэкст',
'allmessagestext' => 'Сьпіс усіх сыстэмных паведамленьняў, якія існуюць у прасторы назваў MediaWiki.
Калі ласка, наведайце [//www.mediawiki.org/wiki/Localisation старонку пра лякалізацыю MediaWiki] і [//translatewiki.net translatewiki.net], калі Вы жадаеце ўдзельнічаць у перакладзе MediaWiki.',
'allmessagesnotsupportedDB' => "'''{{ns:special}}:AllMessages''' не падтрымліваецца, таму што адключанае '''\$wgUseDatabaseMessages'''.",
'allmessages-filter-legend' => 'Фільтар',
'allmessages-filter' => 'Фільтар па стане зьменаў:',
'allmessages-filter-unmodified' => 'Ня зьмененыя',
'allmessages-filter-all' => 'Усе',
'allmessages-filter-modified' => 'Зьмененыя',
'allmessages-prefix' => 'Фільтар па прэфіксе:',
'allmessages-language' => 'Мова:',
'allmessages-filter-submit' => 'Паказаць',

# Thumbnails
'thumbnail-more' => 'Павялічыць',
'filemissing' => 'Файл адсутны',
'thumbnail_error' => 'Памылка стварэньня мініятуры: $1',
'djvu_page_error' => 'Старонка DjVu па-за прамежкам',
'djvu_no_xml' => 'Немагчыма атрымаць XML для DjVu-файла',
'thumbnail-temp-create' => 'Немагчыма стварыць часовы файл мініятуры',
'thumbnail-dest-create' => 'Немагчыма захаваць мініятуру ў месцы прызначэньня',
'thumbnail_invalid_params' => 'Няслушныя парамэтры мініятуры',
'thumbnail_dest_directory' => 'Немагчыма стварыць мэтавую дырэкторыю',
'thumbnail_image-type' => 'Тып выявы не падтрымліваецца',
'thumbnail_gd-library' => 'Няпоўная канфігурацыя бібліятэкі GD: няма функцыі $1',
'thumbnail_image-missing' => 'Верагодна няма файла $1',

# Special:Import
'import' => 'Імпартаваць старонкі',
'importinterwiki' => 'Імпартаваньне зь іншых вікі',
'import-interwiki-text' => 'Абярыце вікі і назву старонкі для імпартаваньня.
Даты зьменаў і імёны аўтараў будуць захаваныя.
Усе дзеяньні імпартаваньня паміж вікі запісваюцца ў [[Special:Log/import|журнал імпартаваньняў]].',
'import-interwiki-source' => 'Крынічная вікі/старонка:',
'import-interwiki-history' => 'Капіяваць гісторыю старонкі цалкам',
'import-interwiki-templates' => 'Уключыць усе шаблёны',
'import-interwiki-submit' => 'Імпартаваць',
'import-interwiki-namespace' => 'Мэтавая прастора назваў:',
'import-interwiki-rootpage' => 'Мэтавая карнявая старонка (неабавязкова):',
'import-upload-filename' => 'Назва файла:',
'import-comment' => 'Камэнтар:',
'importtext' => 'Калі ласка, экспартуйце файл з крынічнай вікі з дапамогай [[Special:Export|прылады экспарту]].
Захавайце яго на свой кампутар, а потым загрузіце сюды.',
'importstart' => 'Імпартаваньне старонак…',
'import-revision-count' => '$1 {{PLURAL:$1|вэрсія|вэрсіі|вэрсіяў}}',
'importnopages' => 'Няма старонак для імпартаваньня.',
'imported-log-entries' => '{{PLURAL:$1|Імпартаваны $1 запіс журнала|Імпартаваныя $1 запісы журнала|Імпартаваныя $1 запісаў журнала}}.',
'importfailed' => 'Немагчыма імпартаваць: $1',
'importunknownsource' => 'Невядомы тып крыніцы імпарту',
'importcantopen' => 'Немагчыма адкрыць файл імпарту',
'importbadinterwiki' => 'Няслушная спасылка на іншую моўную вэрсію',
'importnotext' => 'Тэкст адсутнічае',
'importsuccess' => 'Імпартаваньне скончанае!',
'importhistoryconflict' => 'Канфлікт вэрсіяў у гісторыі рэдагаваньняў (магчыма, гэтую старонку імпартавалі раней)',
'importnosources' => 'Крыніцы імпарту паміж вікі не былі вызначаныя і наўпроставая загрузка гісторыі адключаная.',
'importnofile' => 'Файл для імпартаваньня ня быў загружаны.',
'importuploaderrorsize' => 'Не атрымалася загрузіць файл імпартаваньня.
Памер файла болей за дазволены для загрузкі.',
'importuploaderrorpartial' => 'Не атрымалася загрузіць файл імпартаваньня.
Ён быў загружаны толькі часткова.',
'importuploaderrortemp' => 'Немагчыма загрузіць файл імпартаваньня.
Не стае часовай дырэкторыі.',
'import-parse-failure' => 'Памылка разбору XML пры імпартаваньні',
'import-noarticle' => 'Няма старонкі для імпартаваньня!',
'import-nonewrevisions' => 'Усе вэрсіі былі імпартаваныя раней.',
'xml-error-string' => '$1 у радку $2, пазыцыі $3 (байт $4): $5',
'import-upload' => 'Загрузіць XML-зьвесткі',
'import-token-mismatch' => 'Страчаныя зьвесткі сэсіі. Калі ласка, паспрабуйце ізноў.',
'import-invalid-interwiki' => 'Немагчыма імпартаваць з вызначанай вікі.',
'import-error-edit' => 'Старонка «$1» не імпартаваная, бо Вы ня маеце правоў на яе рэдагаваньне.',
'import-error-create' => 'Старонка «$1» не імпартаваная, бо Вы ня маеце правоў на яе стварэньне.',
'import-error-interwiki' => 'Старонка «$1» не была імпартаваная, таму што гэтая назва зарэзэрваваная для інтэрвікі.',
'import-error-special' => 'Старонка «$1» не была імпартаваная, таму што яна належыць да спэцыяльнай прасторы назваў, старонкі ў якой не дазволеныя.',
'import-error-invalid' => 'Старонка «$1» не была імпартаваная з-за няслушнасьці назвы.',
'import-options-wrong' => '{{PLURAL:$2|Няслушная налада|Няслушныя налады}}: <nowiki>$1</nowiki>',
'import-rootpage-invalid' => 'Пазначаная назва карнявой старонкі няслушная.',
'import-rootpage-nosubpage' => 'Падстаронкі ў прасторы назваў «$1» карнявой старонкі не дазволеныя.',

# Import log
'importlogpage' => 'Журнал імпартаваньняў',
'importlogpagetext' => 'Імпартаваньне адміністратарамі старонак з гісторыяй зьменаў зь іншых вікі.',
'import-logentry-upload' => 'імпартавана [[$1]] праз загрузку файла',
'import-logentry-upload-detail' => '$1 {{PLURAL:$1|вэрсія|вэрсіі|вэрсіяў}}',
'import-logentry-interwiki' => 'імпартавана зь іншай вікі $1',
'import-logentry-interwiki-detail' => '$1 {{PLURAL:$1|вэрсія|вэрсіі|вэрсіяў}} з $2',

# JavaScriptTest
'javascripttest' => 'Тэставаньне JavaScript',
'javascripttest-title' => 'Праводзіцца тэставаньне $1',
'javascripttest-pagetext-noframework' => 'Гэтая старонка трымаецца для правядзеньня тэстаў JavaScript.',
'javascripttest-pagetext-unknownframework' => 'Невядомая бібліятэка тэставаньня «$1».',
'javascripttest-pagetext-frameworks' => 'Калі ласка, выберыце адну з прапанаваных бібліятэка тэставаньня: $1',
'javascripttest-pagetext-skins' => 'Выберыце афармленьне для тэставаньня:',
'javascripttest-qunit-intro' => 'Глядзіце [$1 дакумэнтацыю па тэставаньні] на mediawiki.org.',
'javascripttest-qunit-heading' => 'Набор QUnit-тэстаў для MediaWiki JavaScript',

# Tooltip help for the actions
'tooltip-pt-userpage' => 'Ваша старонка ўдзельніка',
'tooltip-pt-anonuserpage' => 'Старонка ўдзельніка для IP-адрасу, зь якога Вы рэдагуеце',
'tooltip-pt-mytalk' => 'Ваша старонка гутарак',
'tooltip-pt-anontalk' => 'Старонка гутарак пра рэдагаваньні, зробленыя з гэтага IP-адрасу',
'tooltip-pt-preferences' => 'Вашыя налады',
'tooltip-pt-watchlist' => 'Сьпіс старонак, за зьменамі якіх Вы назіраеце',
'tooltip-pt-mycontris' => 'Ваш унёсак',
'tooltip-pt-login' => 'Вас запрашаюць увайсьці, хаця гэта і неабавязкова.',
'tooltip-pt-anonlogin' => 'Уваход у сыстэму вітаецца, хаця ён не абавязковы.',
'tooltip-pt-logout' => 'Выйсьці',
'tooltip-ca-talk' => 'Абмеркаваньне зьместу старонкі',
'tooltip-ca-edit' => 'Вы можаце рэдагаваць гэтую старонку. Калі ласка, ужывайце кнопку прагляду перад захаваньнем.',
'tooltip-ca-addsection' => 'Пачаць новую сэкцыю',
'tooltip-ca-viewsource' => 'Гэтая старонка абароненая. 
Але можна паглядзець яе крынічны тэкст',
'tooltip-ca-history' => 'Мінулыя вэрсіі гэтай старонкі.',
'tooltip-ca-protect' => 'Абараніць гэтую старонку',
'tooltip-ca-unprotect' => 'Зьмяніць абарону старонкі',
'tooltip-ca-delete' => 'Выдаліць гэтую старонку',
'tooltip-ca-undelete' => 'Аднавіць рэдагаваньні, зробленыя да выдаленьня гэтай старонкі',
'tooltip-ca-move' => 'Перанесьці гэтую старонку',
'tooltip-ca-watch' => 'Дадаць гэтую старонку ў Ваш сьпіс назіраньня',
'tooltip-ca-unwatch' => 'Выдаліць гэтую старонку з Вашага сьпісу назіраньня',
'tooltip-search' => 'Шукаць у {{GRAMMAR:месны|{{SITENAME}}}}',
'tooltip-search-go' => 'Перайсьці да старонкі з гэтай назвай, калі старонка існуе',
'tooltip-search-fulltext' => 'Шукаць гэты тэкст на старонках',
'tooltip-p-logo' => 'Наведаць галоўную старонку',
'tooltip-n-mainpage' => 'Наведаць галоўную старонку',
'tooltip-n-mainpage-description' => 'Наведаць галоўную старонку',
'tooltip-n-portal' => 'Пра праект, што Вы можаце зрабіць, дзе што знайсьці',
'tooltip-n-currentevents' => 'Атрымаць інфармацыю пра актуальныя падзеі',
'tooltip-n-recentchanges' => 'Сьпіс апошніх зьменаў у {{GRAMMAR:месны|{{SITENAME}}}}.',
'tooltip-n-randompage' => 'Паказаць выпадковую старонку',
'tooltip-n-help' => 'Месца, каб пра ўсё даведацца.',
'tooltip-t-whatlinkshere' => 'Сьпіс усіх старонак, якія спасылаюцца на гэтую',
'tooltip-t-recentchangeslinked' => 'Апошнія зьмены ў старонках, на якія спасылаецца гэтая старонка',
'tooltip-feed-rss' => 'RSS-стужка для гэтай старонкі',
'tooltip-feed-atom' => 'Atom-стужка для гэтай старонкі',
'tooltip-t-contributions' => 'Паказаць унёсак гэтага удзельніка/гэтай удзельніцы',
'tooltip-t-emailuser' => 'Даслаць ліст гэтаму ўдзельніку/гэтай удзельніцы па электроннай пошце',
'tooltip-t-upload' => 'Загрузіць файл',
'tooltip-t-specialpages' => 'Сьпіс усіх спэцыяльных старонак',
'tooltip-t-print' => 'Вэрсія гэтай старонкі для друку',
'tooltip-t-permalink' => 'Сталая спасылка на гэтую вэрсію старонкі',
'tooltip-ca-nstab-main' => 'Паказаць зьмест старонкі',
'tooltip-ca-nstab-user' => 'Паказаць старонку ўдзельніка',
'tooltip-ca-nstab-media' => 'Паказаць старонку мэдыяфайла',
'tooltip-ca-nstab-special' => 'Гэта спэцыяльная старонка, і Вы ня можаце яе рэдагаваць',
'tooltip-ca-nstab-project' => 'Паказаць старонку праекту',
'tooltip-ca-nstab-image' => 'Паказаць старонку файла',
'tooltip-ca-nstab-mediawiki' => 'Паказаць сыстэмнае паведамленьне',
'tooltip-ca-nstab-template' => 'Паказаць шаблён',
'tooltip-ca-nstab-help' => 'Паказаць старонку дапамогі',
'tooltip-ca-nstab-category' => 'Паказаць старонку катэгорыі',
'tooltip-minoredit' => 'Пазначыць гэтую зьмену як дробную',
'tooltip-save' => 'Захаваць Вашы зьмены',
'tooltip-preview' => 'Праглядзець Вашы зьмены. Калі ласка, выкарыстоўвайце гэтую магчымасьць перад тым, як захаваць старонку!',
'tooltip-diff' => 'Паказаць зробленыя Вамі зьмены ў тэксьце.',
'tooltip-compareselectedversions' => 'Пабачыць розьніцу паміж дзьвюма абранымі вэрсіямі гэтай старонкі.',
'tooltip-watch' => 'Дадаць гэтую старонку ў Ваш сьпіс назіраньня',
'tooltip-watchlistedit-normal-submit' => 'Выдаліць пазначаныя старонкі',
'tooltip-watchlistedit-raw-submit' => 'Абнавіць сьпіс назіраньня',
'tooltip-recreate' => 'Аднавіць старонку, ня гледзячы на тое, што яна была выдаленая',
'tooltip-upload' => 'Пачаць загрузку',
'tooltip-rollback' => '«Адкат» вяртае рэдагаваньні папярэдняга ўдзельніка адным клікам.',
'tooltip-undo' => '«Скасаваць» — скасоўвае гэтае рэдагаваньне і адкрывае акно рэдагаваньня ў рэжыме прагляду.
Дазваляе дадаваць прычыну адкату ў апісаньне зьменаў.',
'tooltip-preferences-save' => 'Захаваць налады',
'tooltip-summary' => 'Увядзіце кароткае апісаньне',

# Metadata
'notacceptable' => 'Вікі-сэрвэр ня можа адлюстраваць зьвесткі ў выглядзе, які здольны прачытаць Ваш браўзэр.',

# Attribution
'anonymous' => '{{PLURAL:$1|Ананімны ўдзельнік ці ўдзельніца|Ананімныя ўдзельнікі і ўдзельніцы}} {{GRAMMAR:родны|{{SITENAME}}}}',
'siteuser' => 'Удзельнік/удзельніца {{GRAMMAR:родны|{{SITENAME}}}} $1',
'anonuser' => 'Ананімны ўдзельнік {{GRAMMAR:родны|{{SITENAME}}}} $1',
'lastmodifiedatby' => 'Гэтую старонку апошні раз рэдагаваў $3 $2, $1.',
'othercontribs' => 'На аснове працы $1.',
'others' => 'іншыя',
'siteusers' => '{{PLURAL:$2|Удзельнік|Удзельнікі}} {{GRAMMAR:родны|{{SITENAME}}}} $1',
'anonusers' => '{{PLURAL:$2|Ананімны ўдзельнік|Ананімныя ўдзельнікі}} {{GRAMMAR:родны|{{SITENAME}}}} $1',
'creditspage' => 'Падзякі',
'nocredits' => 'Няма інфармацыі пра аўтараў гэтай старонкі.',

# Spam protection
'spamprotectiontitle' => 'Фільтар для абароны ад спаму',
'spamprotectiontext' => 'Старонка, якую Вы жадаеце захаваць, была заблякаваная спам-фільтрам.
Верагодна яна ўтрымлівае спасылку на вонкавы сайт.',
'spamprotectionmatch' => 'Спам-фільтар даслаў наступнае паведамленьне: $1',
'spambot_username' => 'Чыстка спаму MediaWiki',
'spam_reverting' => 'Адкат да апошняй вэрсіі без спасылак на $1',
'spam_blanking' => 'Усе вэрсіі ўтрымліваюць спасылкі на $1, чыстка',
'spam_deleting' => 'Усе вэрсіі ўтрымлівалі спасылкі на $1, выдаляем',

# Info page
'pageinfo-title' => 'Інфармацыя пра «$1»',
'pageinfo-not-current' => 'Даруйце, мы ня можам падаць гэтыя зьвесткі для старых вэрсіяў.',
'pageinfo-header-basic' => 'Асноўныя зьвесткі',
'pageinfo-header-edits' => 'Рэдагаваньні',
'pageinfo-header-restrictions' => 'Абарона старонкі',
'pageinfo-header-properties' => 'Уласьцівасьці старонкі',
'pageinfo-display-title' => 'Загаловак для адлюстраваньня',
'pageinfo-default-sort' => 'Перадвызначаны ключ сартаваньня',
'pageinfo-length' => 'Памер старонкі (у байтах)',
'pageinfo-article-id' => 'Ідэнтыфікатар старонкі',
'pageinfo-language' => 'Мова зьместу старонкі',
'pageinfo-robot-policy' => 'Індэксацыя пашукавікамі',
'pageinfo-robot-index' => 'Індэксуецца',
'pageinfo-robot-noindex' => 'Не індэксуецца',
'pageinfo-views' => 'Колькасьць праглядаў',
'pageinfo-watchers' => 'Колькасьць назіральнікаў і назіральніц',
'pageinfo-redirects-name' => 'Перанакіраваньняў на гэтую старонку',
'pageinfo-subpages-name' => 'Колькасьць падстаронак',
'pageinfo-subpages-value' => '$1 ($2 {{PLURAL:$2|перанакіраваньне|перанакіраваньні|перанакіраваньняў}}; $3 {{PLURAL:$3|звычайная|звычайныя|звычайных}})',
'pageinfo-firstuser' => 'Стваральнік старонкі',
'pageinfo-firsttime' => 'Дата стварэньня',
'pageinfo-lastuser' => 'Апошні рэдактар',
'pageinfo-lasttime' => 'Дата апошняга рэдагаваньня',
'pageinfo-edits' => 'Колькасьць рэдагаваньняў',
'pageinfo-authors' => 'Колькасьць аўтараў',
'pageinfo-recent-edits' => 'Колькасьць апошніх рэдагаваньняў (за $1)',
'pageinfo-recent-authors' => 'Колькасьць апошніх аўтараў',
'pageinfo-magic-words' => '{{PLURAL:$1|Магічнае слова|Магічныя словы}} ($1)',
'pageinfo-hidden-categories' => '{{PLURAL:$1|Схаваная катэгорыя|Схаваныя катэгорыі}} ($1)',
'pageinfo-templates' => '{{PLURAL:$1|Шаблён|Шаблёны}} ($1)',
'pageinfo-toolboxlink' => 'Зьвесткі пра старонку',
'pageinfo-redirectsto' => 'Перанакіроўвае на',
'pageinfo-redirectsto-info' => 'інфармацыя',
'pageinfo-contentpage' => 'Лічыцца артыкулам',
'pageinfo-contentpage-yes' => 'Так',
'pageinfo-protect-cascading' => 'Адсюль пачынаецца каскадная абарона',
'pageinfo-protect-cascading-yes' => 'Так',
'pageinfo-protect-cascading-from' => 'Каскадная абароная пачынаецца з',

# Skin names
'skinname-standard' => 'Клясычнае',
'skinname-nostalgia' => 'Настальгія',
'skinname-cologneblue' => 'Кёльнскі смутак',
'skinname-monobook' => 'Монакніга',
'skinname-myskin' => 'MySkin',
'skinname-chick' => 'Цыпа',
'skinname-simple' => 'Простае',
'skinname-modern' => 'Сучаснае',
'skinname-vector' => 'Вэктар',

# Patrolling
'markaspatrolleddiff' => 'Пазначыць як «патруляваную»',
'markaspatrolledtext' => 'Пазначыць гэтую старонку як «патруляваную»',
'markedaspatrolled' => 'Пазначаная як «патруляваная»',
'markedaspatrolledtext' => 'Выбраная вэрсія [[:$1]] пазначаная як «патруляваная».',
'rcpatroldisabled' => 'Патруляваньне апошніх зьменаў адключанае',
'rcpatroldisabledtext' => 'Магчымасьць патруляваньня апошніх зьменаў цяпер адключаная.',
'markedaspatrollederror' => 'Немагчыма пазначыць як «патруляваную»',
'markedaspatrollederrortext' => 'Вы мусіце абраць вэрсію, каб пазначыць яе «патруляванай».',
'markedaspatrollederror-noautopatrol' => 'Вам не дазволена пазначаць Вашыя ўласныя зьмены як «патруляваныя».',

# Patrol log
'patrol-log-page' => 'Журнал патруляваньняў',
'patrol-log-header' => 'Гэта журнал патруляваных вэрсіяў.',
'log-show-hide-patrol' => '$1 журнал патруляваньняў',

# Image deletion
'deletedrevision' => 'Выдаленая старая вэрсія $1',
'filedeleteerror-short' => 'Памылка выдаленьня файла: $1',
'filedeleteerror-long' => 'У часе выдаленьня файла ўзьніклі наступныя памылкі:

$1',
'filedelete-missing' => 'Немагчыма выдаліць файл «$1», таму што ён не існуе.',
'filedelete-old-unregistered' => 'Пазначанай вэрсіі файла «$1» няма ў базе зьвестак.',
'filedelete-current-unregistered' => 'Пазначанага файла «$1» няма ў базе зьвестак.',
'filedelete-archive-read-only' => 'Архіўная дырэкторыя «$1» не даступная для запісу вэб-сэрвэра.',

# Browsing diffs
'previousdiff' => '← Папярэдняя зьмена',
'nextdiff' => 'Наступная зьмена →',

# Media information
'mediawarning' => "'''Папярэджаньне''': гэты тып файл можа ўтрымліваць зламысны код. Яго выкананьне можа нашкодзіць вашай сыстэме.",
'imagemaxsize' => "Абмежаваньне памеру выяваў: <br />''(для старонак апісаньня файлаў)''",
'thumbsize' => 'Памер паменшанай вэрсіі выявы:',
'widthheightpage' => '$1 × $2, $3 {{PLURAL:$3|старонка|старонкі|старонак}}',
'file-info' => 'памер файла: $1, тып MIME: $2',
'file-info-size' => '$1 × $2 {{PLURAL:$2|піксэль|піксэлі|піксэляў}}, памер файла: $3, тып MIME: $4',
'file-info-size-pages' => '$1 × $2 піксэлаў, памер файла: $3, MIME-тып: $4, $5 {{PLURAL:$5|старонка|старонкі|старонак}}',
'file-nohires' => 'Няма вэрсіі зь лепшым разрозьненьнем.',
'svg-long-desc' => 'SVG-файл, намінальна $1 × $2 {{PLURAL:$2|піксэл|піксэлы|піксэлаў}}, памер файла: $3.',
'svg-long-desc-animated' => 'Анімаваны SVG-файл, намінальна $1 × $2 {{PLURAL:$2|піксэл|піксэлы|піксэлаў}}, памер файла: $3',
'show-big-image' => 'Найлепшае разрозьненьне',
'show-big-image-preview' => 'Памер прагляду: $1.',
'show-big-image-other' => '{{PLURAL:$2|Іншае разрозьненьне|Іншыя разрозьненьні}}: $1.',
'show-big-image-size' => '$1 × $2 піксэлаў',
'file-info-gif-looped' => 'паўтараючыся',
'file-info-gif-frames' => '$1 {{PLURAL:$1|кадар|кадры|кадраў}}',
'file-info-png-looped' => 'паўтараючыся',
'file-info-png-repeat' => 'паўтораны $1 {{PLURAL:$1|раз|разы|разоў}}',
'file-info-png-frames' => '$1 {{PLURAL:$1|кадар|кадры|кадраў}}',
'file-no-thumb-animation' => "'''Заўвага: з-за тэхнічных абмежаваньняў мініятуры гэтага файла ня будуць анімаваныя.'''",
'file-no-thumb-animation-gif' => "'''Заўвага: з-за тэхнічных абмежаваньняў мініятуры GIF-выяваў высокага разрозьненьня ствараюцца без анімацыі.'''",

# Special:NewFiles
'newimages' => 'Галерэя новых файлаў',
'imagelisttext' => "Ніжэй пададзены сьпіс з '''$1''' {{PLURAL:$1|файла|файлаў|файлаў}}, адсартаваных $2.",
'newimages-summary' => 'Гэтая спэцыяльная старонка паказвае нядаўна загружаныя файлы.',
'newimages-legend' => 'Фільтар',
'newimages-label' => 'Назва файла (альбо яе частка):',
'showhidebots' => '($1 робатаў)',
'noimages' => 'Выявы адсутнічаюць.',
'ilsubmit' => 'Шукаць',
'bydate' => 'па даце',
'sp-newimages-showfrom' => 'Паказаць новыя файлы, загружаныя пазьней за $2, $1',

# Video information, used by Language::formatTimePeriod() to format lengths in the above messages
'seconds-abbrev' => '$1 с',
'minutes-abbrev' => '$1 хв',
'hours-abbrev' => '$1 г',
'days-abbrev' => '$1 дз',
'seconds' => '$1 {{PLURAL:$1|сэкунда|сэкунды|сэкундаў}}',
'minutes' => '$1 {{PLURAL:$1|хвіліна|хвіліны|хвілінаў}}',
'hours' => '$1 {{PLURAL:$1|гадзіна|гадзіны|гадзінаў}}',
'days' => '$1 {{PLURAL:$1|дзень|дні|дзён}}',
'ago' => '$1 таму',

# Bad image list
'bad_image_list' => 'Фармат наступны:

Разглядаюцца толькі элемэнты сьпісу (радкі, якія пачынаюцца з *). Першая спасылка ў радку мусіць быць спасылкай на кепскую выяву. Усе наступныя спасылкі ў тым жа радку будуць разглядацца як выключэньні, напрыклад, старонкі, дзе можа зьяўляцца выява.',

# Metadata
'metadata' => 'Мэтазьвесткі',
'metadata-help' => 'Гэты файл утрымлівае дадатковую інфармацыю, хутчэй за ўсё дададзеную зь лічбавай фотакамэры ці сканэра.
Калі файл рэдагаваўся пасьля стварэньня, то частка зьвестак можа не адпавядаць зьмененаму файлу.',
'metadata-expand' => 'Паказаць падрабязнасьці',
'metadata-collapse' => 'Схаваць падрабязнасьці',
'metadata-fields' => 'Палі мэта-зьвестак выявы з гэтага сьпісу будуць паказаныя на старонцы выявы, калі табліца мэта-зьвестак будзе згорнутая.
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
'exif-imagewidth' => 'Шырыня',
'exif-imagelength' => 'Вышыня',
'exif-bitspersample' => 'Глыбіня колеру',
'exif-compression' => 'Мэтад сьцісканьня',
'exif-photometricinterpretation' => 'Колеравая мадэль',
'exif-orientation' => 'Арыентацыя кадра',
'exif-samplesperpixel' => 'Колькасьць колеравых кампанэнтаў',
'exif-planarconfiguration' => 'Прынцып арганізацыі зьвестак',
'exif-ycbcrsubsampling' => 'Суадносіны памераў кампанэнтаў Y і C',
'exif-ycbcrpositioning' => 'Парадак разьмяшчэньня кампанэнтаў Y і C',
'exif-xresolution' => 'Гарызантальнае разрозьненьне',
'exif-yresolution' => 'Вэртыкальнае разрозьненьне',
'exif-stripoffsets' => 'Разьмяшчэньне блёку зьвестак',
'exif-rowsperstrip' => 'Колькасьць радкоў у блёку',
'exif-stripbytecounts' => 'Памер сьціснутага блёку',
'exif-jpeginterchangeformat' => 'Разьмяшчэньне пачатку блёку JPEG SOI',
'exif-jpeginterchangeformatlength' => 'Байты JPEG-зьвестак',
'exif-whitepoint' => 'Колернасьць белага пункту',
'exif-primarychromaticities' => 'Колернасьць асноўных колераў',
'exif-ycbcrcoefficients' => 'Каэфіцыенты пераўтварэньня колеравай прасторы',
'exif-referenceblackwhite' => 'Становішча белага і чорнага пунктаў',
'exif-datetime' => 'Дата і час зьмены файла',
'exif-imagedescription' => 'Назва выявы',
'exif-make' => 'Вытворца фотаапарата',
'exif-model' => 'Мадэль фотаапарата',
'exif-software' => 'Праграмнае забесьпячэньне',
'exif-artist' => 'Аўтар',
'exif-copyright' => 'Уласьнік аўтарскіх правоў',
'exif-exifversion' => 'Вэрсія Exif',
'exif-flashpixversion' => 'Вэрсія Flashpix, якая падтрымліваецца',
'exif-colorspace' => 'Колеравая прастора',
'exif-componentsconfiguration' => 'Канфігурацыя колеравых кампанэнтаў',
'exif-compressedbitsperpixel' => 'Глыбіня колеру пасьля сьцісканьня',
'exif-pixelydimension' => 'Шырыня выявы',
'exif-pixelxdimension' => 'Вышыня выявы',
'exif-usercomment' => 'Камэнтары карыстальніка',
'exif-relatedsoundfile' => 'Датычны аўдыё-файл',
'exif-datetimeoriginal' => 'Дата і час утварэньня зьвестак',
'exif-datetimedigitized' => 'Дата і час лічбаваньня',
'exif-subsectime' => 'Доля сэкундаў часу зьмяненьня файла',
'exif-subsectimeoriginal' => 'Долі сэкундаў арыгінальнага часу',
'exif-subsectimedigitized' => 'Долі сэкундаў часу лічбаваньня',
'exif-exposuretime' => 'Час насьвятленьня',
'exif-exposuretime-format' => '$1 сэк ($2)',
'exif-fnumber' => 'Лік дыяфрагмы',
'exif-exposureprogram' => 'Праграма насьвятленьня',
'exif-spectralsensitivity' => 'Спэктральная адчувальнасьць',
'exif-isospeedratings' => 'Сьветаадчувальнасьць ISO',
'exif-shutterspeedvalue' => 'Вытрымка',
'exif-aperturevalue' => 'Дыяфрагма',
'exif-brightnessvalue' => 'Яркасьць',
'exif-exposurebiasvalue' => 'Кампэнсацыя насьвятленьня',
'exif-maxaperturevalue' => 'Мінімальны лік дыяфрагмы',
'exif-subjectdistance' => "Адлегласьць да аб'екту",
'exif-meteringmode' => 'Лад вымярэньня насьвятленьня',
'exif-lightsource' => 'Крыніца сьвятла',
'exif-flash' => 'Успышка',
'exif-focallength' => "Фокусная адлегласьць аб'ектыва",
'exif-focallength-format' => '$1 мм',
'exif-subjectarea' => "Плошча аб'екту",
'exif-flashenergy' => 'Энэргія бліску',
'exif-focalplanexresolution' => 'Разрозьненьне ў фокуснай плоскасьці па восі X',
'exif-focalplaneyresolution' => 'Разрозьненьне ў фокуснай плоскасьці па восі Y',
'exif-focalplaneresolutionunit' => 'Адзінка разрозьненьня фокуснай плоскасьці',
'exif-subjectlocation' => "Месцазнаходжаньне аб'екту",
'exif-exposureindex' => 'Індэкс насьвятленьня',
'exif-sensingmethod' => 'Тып сэнсару',
'exif-filesource' => 'Крыніца файла',
'exif-scenetype' => 'Тып сцэны',
'exif-customrendered' => 'Дадатковая апрацоўка',
'exif-exposuremode' => 'Лад насьвятленьня',
'exif-whitebalance' => 'Балянс белага',
'exif-digitalzoomratio' => 'Каэфіцыент лічбавага павелічэньня',
'exif-focallengthin35mmfilm' => 'Эквівалентная фокусная адлегласьць (для 35 мм стужкі)',
'exif-scenecapturetype' => 'Тып сцэны пры здымцы',
'exif-gaincontrol' => 'Падвышэньне яркасьці',
'exif-contrast' => 'Кантраст',
'exif-saturation' => 'Насычанасьць',
'exif-sharpness' => 'Рэзкасьць',
'exif-devicesettingdescription' => 'Апісаньне наладаў прыстасаваньня',
'exif-subjectdistancerange' => "Адлегласьць да аб'екту",
'exif-imageuniqueid' => 'Унікальны ідэнтыфікатар выявы',
'exif-gpsversionid' => 'Вэрсія блёку GPS-інфармацыі',
'exif-gpslatituderef' => 'Паўночная ці паўднёвая шырата',
'exif-gpslatitude' => 'Шырата',
'exif-gpslongituderef' => 'Усходняя ці заходняя даўгата',
'exif-gpslongitude' => 'Даўгата',
'exif-gpsaltituderef' => 'Пункт адліку вышыні',
'exif-gpsaltitude' => 'Вышыня',
'exif-gpstimestamp' => 'Час GPS (атамны гадзіньнік)',
'exif-gpssatellites' => 'Спадарожнікі, ужытыя для вымярэньня',
'exif-gpsstatus' => 'Статус прымача',
'exif-gpsmeasuremode' => 'Лад вымярэньня',
'exif-gpsdop' => 'Дакладнасьць вымярэньня',
'exif-gpsspeedref' => 'Адзінка вымярэньня хуткасьці',
'exif-gpsspeed' => 'Хуткасьць руху GPS-прымача',
'exif-gpstrackref' => 'Тып азімуту GPS-прымача',
'exif-gpstrack' => 'Кірунак руху',
'exif-gpsimgdirectionref' => 'Тып азімуту выявы',
'exif-gpsimgdirection' => 'Кірунак выявы',
'exif-gpsmapdatum' => 'Скарыстаная геадэзічная сыстэма каардынатаў',
'exif-gpsdestlatituderef' => "Пункт адліку шыраты аб'екту",
'exif-gpsdestlatitude' => "Шырата аб'екту",
'exif-gpsdestlongituderef' => "Пункт адліку даўгаты аб'екту",
'exif-gpsdestlongitude' => "Даўгата аб'екту",
'exif-gpsdestbearingref' => "Тып пэленгу аб'екту",
'exif-gpsdestbearing' => "Пэленг аб'екту",
'exif-gpsdestdistanceref' => "Пункт адліку адлегласьці да аб'екту",
'exif-gpsdestdistance' => "Адлегласьць да аб'екту",
'exif-gpsprocessingmethod' => 'Назва мэтаду вылічэньня GPS',
'exif-gpsareainformation' => 'Назва GPS-зоны',
'exif-gpsdatestamp' => 'Дата GPS',
'exif-gpsdifferential' => 'Дыфэрэнцыяльная папраўка GPS',
'exif-jpegfilecomment' => 'Камэнтар да JPEG-файла',
'exif-keywords' => 'Ключавыя словы',
'exif-worldregioncreated' => 'Рэгіён сьвету, дзе была зробленая выява',
'exif-countrycreated' => 'Краіна, дзе была зробленая выява',
'exif-countrycodecreated' => 'Код краіны, дзе была зробленая выява',
'exif-provinceorstatecreated' => 'Вобласьць, правінцыя ці штат, дзе была зробленая выява',
'exif-citycreated' => 'Горад, дзе была зробленая выява',
'exif-sublocationcreated' => 'Раён гораду, дзе была зробленая выява',
'exif-worldregiondest' => 'Паказаны рэгіён сьвету',
'exif-countrydest' => 'Паказаная краіна',
'exif-countrycodedest' => 'Код паказанай краіны',
'exif-provinceorstatedest' => 'Паказаная вобласьць, правінцыя ці штат',
'exif-citydest' => 'Паказаны горад',
'exif-sublocationdest' => 'Паказаны раён гораду',
'exif-objectname' => 'Кароткая назва',
'exif-specialinstructions' => 'Спэцыяльныя інструкцыі',
'exif-headline' => 'Загаловак',
'exif-credit' => 'Падаўшы выяву',
'exif-source' => 'Крыніца',
'exif-editstatus' => 'Рэдакцыйны статус выявы',
'exif-urgency' => 'Тэрміновасьць',
'exif-fixtureidentifier' => 'Назва слупка',
'exif-locationdest' => 'Паказанае месца',
'exif-locationdestcode' => 'Код паказанага месца',
'exif-objectcycle' => 'Час дня, для якога ўласьцівае мэдыя',
'exif-contact' => 'Кантактная інфармацыя',
'exif-writer' => 'Аўтар',
'exif-languagecode' => 'Мова',
'exif-iimversion' => 'Вэрсія IIM',
'exif-iimcategory' => 'Катэгорыя',
'exif-iimsupplementalcategory' => 'Дадатковыя катэгорыі',
'exif-datetimeexpires' => 'Не выкарыстоўваць пасьля',
'exif-datetimereleased' => 'Апублікаванае',
'exif-originaltransmissionref' => 'Код месца пачатковай перадачы',
'exif-identifier' => 'Ідэнтыфікатар',
'exif-lens' => 'Выкарыстаны аб’ектыў',
'exif-serialnumber' => 'Сэрыйны нумар фотакамэры',
'exif-cameraownername' => 'Уласьнік фотакамэры',
'exif-label' => 'Метка',
'exif-datetimemetadata' => 'Дата апошняй зьмены мэта-зьвестак',
'exif-nickname' => 'Нефармальная назва выявы',
'exif-rating' => 'Адзнака (да 5)',
'exif-rightscertificate' => 'Сэртыфікат кіраваньня правамі',
'exif-copyrighted' => 'Статус аўтарскіх правоў',
'exif-copyrightowner' => 'Уласьнік аўтарскіх правоў',
'exif-usageterms' => 'Умовы выкарыстаньня',
'exif-webstatement' => 'Зьвесткі пра аўтарскія правы анляйн',
'exif-originaldocumentid' => 'Унікальны ідэнтыфікатар ці арыгінальны дакумэнт',
'exif-licenseurl' => 'URL-адрас аўтарскай ліцэнзіі',
'exif-morepermissionsurl' => 'Інфармацыя пра ўмовы карыстаньня на ўмовах іншых ліцэнзіяў',
'exif-attributionurl' => 'Выкарыстоўваючы гэтую працу, калі ласка, спасылайцеся на',
'exif-preferredattributionname' => 'Выкарыстоўваючы гэтую працу, калі ласка, пазначайце аўтара',
'exif-pngfilecomment' => 'Камэнтар да PNG-файла',
'exif-disclaimer' => 'Адмова ад адказнасьці',
'exif-contentwarning' => 'Папярэджаньне пра зьмест',
'exif-giffilecomment' => 'Камэнтар да GIF-файла',
'exif-intellectualgenre' => 'Тып элемэнту',
'exif-subjectnewscode' => 'Код тэмы',
'exif-scenecode' => 'Код сцэны IPTC',
'exif-event' => 'Паказаная падзея',
'exif-organisationinimage' => 'Паказаная арганізацыя',
'exif-personinimage' => 'Паказаная асоба',
'exif-originalimageheight' => 'Вышыня выявы да кадраваньня',
'exif-originalimagewidth' => 'Шырыня выявы да кадраваньня',

# EXIF attributes
'exif-compression-1' => 'Нясьціснуты',
'exif-compression-2' => 'CCITT Група 3 аднамернае абноўленае кадаваньне адлегласьці Хафмана',
'exif-compression-3' => 'CCITT Група 3 факсымільнае кадаваньне',
'exif-compression-4' => 'CCITT Група 4 факсымільнае кадаваньне',

'exif-copyrighted-true' => 'Ахоўваецца аўтарскім правам',
'exif-copyrighted-false' => 'Грамадзкі набытак',

'exif-unknowndate' => 'Невядомая дата',

'exif-orientation-1' => 'Звычайная',
'exif-orientation-2' => 'Адлюстраваная па гарызанталі',
'exif-orientation-3' => 'Павернутая на 180°',
'exif-orientation-4' => 'Адлюстраваная па вэртыкалі',
'exif-orientation-5' => 'Павернутая на 90° супраць руху гадзіньнікавай стрэлкі і адлюстраваная вэртыкальна',
'exif-orientation-6' => 'Павернутая на 90° супраць руху гадзіньнікавай стрэлкі',
'exif-orientation-7' => 'Павернутая на 90° па руху гадзіньнікавай стрэлкі і адлюстраваная вэртыкальна',
'exif-orientation-8' => 'Павернутая на 90° па руху гадзіньнікавай стрэлкі',

'exif-planarconfiguration-1' => 'фармат «chunky»',
'exif-planarconfiguration-2' => 'фармат «planar»',

'exif-xyresolution-i' => '$1 пунктаў на цалю',
'exif-xyresolution-c' => '$1 пунктаў на сантымэтар',

'exif-colorspace-65535' => 'Некалібраванае',

'exif-componentsconfiguration-0' => 'не існуе',

'exif-exposureprogram-0' => 'Ня вызначана',
'exif-exposureprogram-1' => 'Ручны лад',
'exif-exposureprogram-2' => 'Праграмны лад',
'exif-exposureprogram-3' => 'Прыярытэт дыяфрагмы',
'exif-exposureprogram-4' => 'Прыярытэт затвора',
'exif-exposureprogram-5' => 'Творчы лад (перавага глыбіні рэзкасьці)',
'exif-exposureprogram-6' => 'Лад руху (перавага хуткасьці затвора)',
'exif-exposureprogram-7' => 'Партрэтны лад (здымкі ў набліжэньня, з фонам ня ў фокусе)',
'exif-exposureprogram-8' => 'Пэйзажны лад (для здымкаў краявідаў, з фонам у фокусе)',

'exif-subjectdistance-value' => '$1 мэтры',

'exif-meteringmode-0' => 'Невядома',
'exif-meteringmode-1' => 'Сярэдні',
'exif-meteringmode-2' => 'Сярэдне-ўзважаны',
'exif-meteringmode-3' => 'Кропкавы',
'exif-meteringmode-4' => 'Шматкропкавы',
'exif-meteringmode-5' => 'Матрычны',
'exif-meteringmode-6' => 'Частковы',
'exif-meteringmode-255' => 'Іншы',

'exif-lightsource-0' => 'Невядомая',
'exif-lightsource-1' => 'Дзённае сьвятло',
'exif-lightsource-2' => 'Люмінісцэнтная',
'exif-lightsource-3' => 'Вальфрам (лямпа накальваньня)',
'exif-lightsource-4' => 'Успышка',
'exif-lightsource-9' => "Выдатнае надвор'е",
'exif-lightsource-10' => "Хмарнае надвор'е",
'exif-lightsource-11' => 'Цень',
'exif-lightsource-12' => 'Лямпа дзённага сьвятла (D 5700 – 7100K)',
'exif-lightsource-13' => 'Лямпа дзённага сьвятла (N 4600 – 5400K)',
'exif-lightsource-14' => 'Лямпа дзённага сьвятла (W 3900 – 4500K)',
'exif-lightsource-15' => 'Лямпа дзённага сьвятла (WW 3200 – 3700K)',
'exif-lightsource-17' => 'Стандартнае асьвятленьне A',
'exif-lightsource-18' => 'Стандартнае асьвятленьне B',
'exif-lightsource-19' => 'Стандартнае асьвятленьне C',
'exif-lightsource-24' => 'студыйная лямпа стандарту ISO',
'exif-lightsource-255' => 'Іншая крыніца сьвятла',

# Flash modes
'exif-flash-fired-0' => 'Успышка не спрацавала',
'exif-flash-fired-1' => 'Успышка спрацавала',
'exif-flash-return-0' => 'бяз функцыі папярэдняй успышкі',
'exif-flash-return-2' => 'адваротны імпульс папярэдняй успышкі не атрыманы',
'exif-flash-return-3' => 'адваротны імпульс папярэдняй успышкі атрыманы',
'exif-flash-mode-1' => 'прымусовая ўспышка',
'exif-flash-mode-2' => 'прымусовае падаўленьне ўспышкі',
'exif-flash-mode-3' => 'аўтаматычны рэжым',
'exif-flash-function-1' => 'Без успышкі',
'exif-flash-redeye-1' => 'рэжым памяншэньня эфэкту чырвоных вачэй',

'exif-focalplaneresolutionunit-2' => 'цаляў',

'exif-sensingmethod-1' => 'Нявызначаны',
'exif-sensingmethod-2' => 'Аднакрысталічны матрычны колеравы сэнсар',
'exif-sensingmethod-3' => 'Двухкрысталічны матрычны колеравы сэнсар',
'exif-sensingmethod-4' => 'Трохкрысталічны матрычны колеравы сэнсар',
'exif-sensingmethod-5' => 'Каляровы матрычны сэквэнцыйны сэнсар',
'exif-sensingmethod-7' => 'Трохлінейны сэнсар',
'exif-sensingmethod-8' => 'Лінейны сэнсар з пасьлядоўнай зьменай колеру',

'exif-filesource-3' => 'Лічбавы фотаапарат',

'exif-scenetype-1' => 'Непасрэдна сфатаграфаваная выява',

'exif-customrendered-0' => 'Звычайны працэс',
'exif-customrendered-1' => 'Нестандартны працэс',

'exif-exposuremode-0' => 'Аўтаматычны лад насьвятленьня',
'exif-exposuremode-1' => 'Ручная наладка парамэтраў насьвятленьня',
'exif-exposuremode-2' => 'Брэкетынг',

'exif-whitebalance-0' => 'Аўтаматычны балянс белага',
'exif-whitebalance-1' => 'Ручны балянс белага',

'exif-scenecapturetype-0' => 'Стандартны',
'exif-scenecapturetype-1' => 'Ляндшафт',
'exif-scenecapturetype-2' => 'Партрэт',
'exif-scenecapturetype-3' => 'Начны здымак',

'exif-gaincontrol-0' => 'Няма',
'exif-gaincontrol-1' => 'Невялікае павелічэньне',
'exif-gaincontrol-2' => 'Значнае павелічэньне',
'exif-gaincontrol-3' => 'Невялікае памяншэньне',
'exif-gaincontrol-4' => 'Значнае памяншэньне',

'exif-contrast-0' => 'Звычайны',
'exif-contrast-1' => 'Мяккі',
'exif-contrast-2' => 'Значнае павышэньне',

'exif-saturation-0' => 'Звычайная',
'exif-saturation-1' => 'Невялікая насычанасьць',
'exif-saturation-2' => 'Вялікая насычанасьць',

'exif-sharpness-0' => 'Звычайная',
'exif-sharpness-1' => 'Мяккая',
'exif-sharpness-2' => 'Значнае павышэньне',

'exif-subjectdistancerange-0' => 'Невядомы',
'exif-subjectdistancerange-1' => 'Макраздымка',
'exif-subjectdistancerange-2' => 'Выгляд зблізку',
'exif-subjectdistancerange-3' => 'Выгляд здалёку',

# Pseudotags used for GPSLatitudeRef and GPSDestLatitudeRef
'exif-gpslatitude-n' => 'паўночнай шыраты',
'exif-gpslatitude-s' => 'паўднёвай шыраты',

# Pseudotags used for GPSLongitudeRef and GPSDestLongitudeRef
'exif-gpslongitude-e' => 'усходняй даўгаты',
'exif-gpslongitude-w' => 'заходняй даўгаты',

# Pseudotags used for GPSAltitudeRef
'exif-gpsaltitude-above-sealevel' => '$1 {{PLURAL:$1|мэтар|мэтры|мэтраў}} над узроўнем мора',
'exif-gpsaltitude-below-sealevel' => '$1 {{PLURAL:$1|мэтар|мэтры|мэтраў}} ніжэй за ўзровень мора',

'exif-gpsstatus-a' => 'Адбываецца вымярэньне',
'exif-gpsstatus-v' => 'Ацэнка магчымасьці ўзаемадзеяньня сетак',

'exif-gpsmeasuremode-2' => 'Вымярэньне двухмерных каардынатаў',
'exif-gpsmeasuremode-3' => 'Вымярэньне трохмерных каардынатаў',

# Pseudotags used for GPSSpeedRef
'exif-gpsspeed-k' => 'Кілямэтраў за гадзіну',
'exif-gpsspeed-m' => 'міляў за гадзіну',
'exif-gpsspeed-n' => 'вузлоў',

# Pseudotags used for GPSDestDistanceRef
'exif-gpsdestdistance-k' => 'Кілямэтраў',
'exif-gpsdestdistance-m' => 'Міляў',
'exif-gpsdestdistance-n' => 'Марскіх міляў',

'exif-gpsdop-excellent' => 'Выдатная ($1)',
'exif-gpsdop-good' => 'Добрая ($1)',
'exif-gpsdop-moderate' => 'Сярэдняя ($1)',
'exif-gpsdop-fair' => 'Прыймальная ($1)',
'exif-gpsdop-poor' => 'Дрэнная ($1)',

'exif-objectcycle-a' => 'Толькі ўранку',
'exif-objectcycle-p' => 'Толькі ўвечары',
'exif-objectcycle-b' => 'Уранку і ўвечары',

# Pseudotags used for GPSTrackRef, GPSImgDirectionRef and GPSDestBearingRef
'exif-gpsdirection-t' => 'Сапраўдны накірунак',
'exif-gpsdirection-m' => 'магнітны кірунак',

'exif-ycbcrpositioning-1' => 'Цэнтраваны',
'exif-ycbcrpositioning-2' => 'Сумяшчоныя',

'exif-dc-contributor' => 'Аўтары',
'exif-dc-coverage' => 'Прасторавыя ці часавыя абмежаваньні мэдыя',
'exif-dc-date' => 'Дата(ы)',
'exif-dc-publisher' => 'Выдавецтва',
'exif-dc-relation' => 'Зьвязаныя мэдыя',
'exif-dc-rights' => 'Правы',
'exif-dc-source' => 'Крынічнае мэдыя',
'exif-dc-type' => 'Тып мэдыя',

'exif-rating-rejected' => 'Адхіленае',

'exif-isospeedratings-overflow' => 'Больш за 65535',

'exif-iimcategory-ace' => 'Мастацтва, культура і забавы',
'exif-iimcategory-clj' => 'Крымінал і права',
'exif-iimcategory-dis' => 'Катастрофы і здарэньні',
'exif-iimcategory-fin' => 'Эканоміка і бізнэс',
'exif-iimcategory-edu' => 'Адукацыя',
'exif-iimcategory-evn' => 'Навакольнае асяродзьдзе',
'exif-iimcategory-hth' => 'Здароўе',
'exif-iimcategory-hum' => 'Зацікаўленасьці',
'exif-iimcategory-lab' => 'Праца',
'exif-iimcategory-lif' => 'Стыль жыцьця і вольны час',
'exif-iimcategory-pol' => 'Палітыка',
'exif-iimcategory-rel' => 'Рэлігія і вера',
'exif-iimcategory-sci' => 'Навука і тэхналёгіі',
'exif-iimcategory-soi' => 'Сацыяльныя праблемы',
'exif-iimcategory-spo' => 'Спорт',
'exif-iimcategory-war' => 'Вайна, канфлікты і беспарадкі',
'exif-iimcategory-wea' => 'Надвор’е',

'exif-urgency-normal' => 'Звычайная ($1)',
'exif-urgency-low' => 'Нізкая ($1)',
'exif-urgency-high' => 'Высокая ($1)',
'exif-urgency-other' => 'Прыярытэт вызначаны карыстальнікам ($1)',

# External editor support
'edit-externally' => 'Рэдагаваць гэты файл з выкарыстаньнем вонкавай праграмы',
'edit-externally-help' => '(Глядзіце падрабязнасьці ў [//www.mediawiki.org/wiki/Manual:External_editors інструкцыі па наладцы] (па-ангельску))',

# 'all' in various places, this might be different for inflected languages
'watchlistall2' => 'усё',
'namespacesall' => 'усе',
'monthsall' => 'усе',
'limitall' => 'усе',

# E-mail address confirmation
'confirmemail' => 'Пацьвердзіць адрас электроннай пошты',
'confirmemail_noemail' => 'Вы не пазначылі слушны адрас электроннай пошты ў Вашых [[Special:Preferences|наладах удзельніка]].',
'confirmemail_text' => '{{SITENAME}} патрабуе, каб Вы пацьвердзілі Ваш адрас электроннай пошты перад ўжываньнем магчымасьцяў электроннай пошты. Актывізуйце кнопку ніжэй, каб даслаць ліст з пацьверджаньнем на Ваш адрас. Ліст будзе ўтрымліваць спасылку з кодам; загрузіце спасылку ў Вашым браўзэры, каб пацьвердзіць, што Ваш адрас электроннай пошты зьяўляецца слушным.',
'confirmemail_pending' => 'Код пацьверджаньня ужо быў дасланы Вам праз электронную пошту; калі Вы нядаўна стварылі рахунак, Вам варта пачакаць код некалькі хвілінаў перад спробай запыту новага коду.',
'confirmemail_send' => 'Даслаць код пацьверджаньня',
'confirmemail_sent' => 'Ліст для пацьверджаньня дасланы.',
'confirmemail_oncreate' => 'Код пацьверджаньня быў адпраўлены на Ваш адрас электроннай пошты. Гэты код не патрэбны, каб увайсьці, але Вам трэба будзе падаць яго перад ужываньнем магчымасьцяў, заснаваных на электроннай пошце, у {{GRAMMAR:месны|{{SITENAME}}}}.',
'confirmemail_sendfailed' => '{{SITENAME}} ня можа даслаць пацьвярджальны ліст. Праверце адрас на наяўнасьць няслушных сымбаляў.

Адказ паштовага сэрвэра: $1',
'confirmemail_invalid' => 'Няслушны код пацьверджаньня. Магчыма, скончыўся яго тэрмін дзеяньня.',
'confirmemail_needlogin' => 'Вам трэба $1, каб пацьвердзіць Ваш адрас электроннай пошты.',
'confirmemail_success' => 'Ваш адрас электроннай пошты быў пацьверджаны. Зараз Вы можаце ўвайсьці.',
'confirmemail_loggedin' => 'Ваш адрас электроннай пошты быў пацьверджаны.',
'confirmemail_error' => 'Нешта пайшло ня так у часе захаваньня вашага пацьверджаньня.',
'confirmemail_subject' => '{{SITENAME}}: Пацьверджаньне адрасу электроннай пошты',
'confirmemail_body' => 'Нехта, магчыма Вы, з IP-адрасу $1, стварыў рахунак «$2» з гэтым адрасам электроннай пошты ў праекце {{SITENAME}}.

Каб пацьвердзіць, што гэты рахунак належыць Вам і актывізаваць магчымасьці электроннай пошты ў {{GRAMMAR:месны|{{SITENAME}}}}, адкрыйце гэтую спасылку у Вашым браўзэры:

$3

Калі рахунак стварылі *ня* Вы, адкрыйце наступную спасылку для таго, каб не пацьвердзіць адрас электроннай пошты.

$5

Код дзейнічае да $4.',
'confirmemail_body_changed' => 'Нехта, магчыма Вы, з IP-адрасу $1, зьмяніў адрас электроннай пошты рахунку «$2» у праекце {{SITENAME}}.

Каб пацьвердзіць, што гэты рахунак належыць Вам і актывізаваць магчымасьці электроннай пошты ў {{GRAMMAR:месны|{{SITENAME}}}} зноў, перайдзіце па наступнай спасылцы ў Вашым браўзэры:

$3

Калі рахунак належыць *ня* Вам, перайдзіце па наступнай спасылцы для таго, каб скасаваць пацьверджаньне адрасу электроннай пошты:

$5

Код пацьверджаньня зьяўляецца дзейсным да $4.',
'confirmemail_body_set' => 'Нехта, магчыма Вы, з IP-адраса $1,
устанавіў адрас электроннай пошты для рахунку «$2» у {{GRAMMAR:месны|{{SITENAME}}}}.

Каб пацьвердзіць, што гэты рахунак сапраўды належыць Вам, і каб актывізаваць новы магчымасьці электроннай пошты ў {{GRAMMAR:месны|{{SITENAME}}}}, адкрыйце гэтую спасылку у Вашым браўзэры:

$3

Калі рахунак Вам *не* належыць, перайдзіце па гэтай спасылцы
каб скасаваць пацьверджаньне па электроннай пошце:

$5

Гэты код пацьверджаньня дзейнічае да $4.',
'confirmemail_invalidated' => 'Пацьверджаньне адрасу электроннай пошты адмененае',
'invalidateemail' => 'Скасаваць пацьверджаньне адрасу электроннай пошты',

# Scary transclusion
'scarytranscludedisabled' => '[Улучэньне інтэрвікі было адключанае]',
'scarytranscludefailed' => '[Памылка атрыманьня шаблёну $1]',
'scarytranscludefailed-httpstatus' => '[Памылка атрыманьня шаблёну $1: HTTP $2]',
'scarytranscludetoolong' => '[Занадта даўгі URL-адрас]',

# Delete conflict
'deletedwhileediting' => "'''Увага''': Гэтая старонка была выдаленая пасьля таго, як Вы пачалі яе рэдагаваньне!",
'confirmrecreate' => "{{GENDER:$1|Удзельнік|Удзельніца}} [[User:$1|$1]] ([[User talk:$1|гутаркі]]) {{GENDER:$1|выдаліў|выдаліла}} гэтую старонку, перад тым як Вы пачалі яе рэдагаваць, з прычыны:
: ''$2''
Калі ласка, пацьвердзіце, што Вы сапраўды жадаеце стварыць нанава гэтую старонку.",
'confirmrecreate-noreason' => '{{GENDER:$1|Удзельнік|Удзельніца}} [[User:$1|$1]] ([[User talk:$1|гутаркі]]) {{GENDER:$1|выдаліў|выдаліла}} гэтую старонку, пасьля таго як Вы пачалі яе рэдагаваць. Калі ласка, пацьвердзіце, што Вы сапраўды жадаеце стварыць гэтую старонку ізноў.',
'recreate' => 'Стварыць ізноў',

'unit-pixel' => 'пкс',

# action=purge
'confirm_purge_button' => 'Добра',
'confirm-purge-top' => 'Ачысьціць кэш гэтай старонкі?',
'confirm-purge-bottom' => 'Ачыстка кэшу старонкі прывядзе да адлюстраваньня яе апошняй вэрсіі.',

# action=watch/unwatch
'confirm-watch-button' => 'Добра',
'confirm-watch-top' => 'Дадаць гэтую старонку ў Ваш сьпіс назіраньня?',
'confirm-unwatch-button' => 'Добра',
'confirm-unwatch-top' => 'Выдаліць гэтую старонку з Вашага сьпісу назіраньня?',

# Multipage image navigation
'imgmultipageprev' => '← папярэдняя старонка',
'imgmultipagenext' => 'наступная старонка →',
'imgmultigo' => 'Перайсьці!',
'imgmultigoto' => 'Перайсьці на старонку $1',

# Table pager
'ascending_abbrev' => 'узраст.',
'descending_abbrev' => 'зьмянш.',
'table_pager_next' => 'Наступная старонка',
'table_pager_prev' => 'Папярэдняя старонка',
'table_pager_first' => 'Першая старонка',
'table_pager_last' => 'Апошняя старонка',
'table_pager_limit' => 'Паказваць $1 элемэнтаў на старонцы',
'table_pager_limit_label' => 'Запісаў на старонку:',
'table_pager_limit_submit' => 'Перайсьці',
'table_pager_empty' => 'Вынікаў няма',

# Auto-summaries
'autosumm-blank' => 'Выдалены ўвесь зьмест старонкі',
'autosumm-replace' => "Старонка замененая на '$1'",
'autoredircomment' => 'Перанакіроўвае на [[$1]]',
'autosumm-new' => "Створана старонка са зьместам '$1'",

# Size units
'size-bytes' => '$1 б',
'size-kilobytes' => '$1 кб',
'size-megabytes' => '$1 Мб',
'size-gigabytes' => '$1 Гб',
'size-terabytes' => '$1 ТБ',
'size-petabytes' => '$1 ПБ',
'size-exabytes' => '$1 ЭБ',
'size-zetabytes' => '$1 ЗБ',
'size-yottabytes' => '$1 ЁБ',

# Live preview
'livepreview-loading' => 'Загрузка…',
'livepreview-ready' => 'Загрузка… Гатова!',
'livepreview-failed' => 'Немагчыма ўжыць хуткі папярэдні прагляд!
Паспрабуйце ўжыць звычайны папярэдні прагляд.',
'livepreview-error' => 'Немагчыма далучыцца да: $1 «$2».
Паспрабуйце ўжыць звычайны папярэдні прагляд.',

# Friendlier slave lag warnings
'lag-warn-normal' => 'Зьмены, зробленыя меней чым $1 {{PLURAL:$1|сэкунду|сэкунды|сэкундаў}} таму, могуць ня трапіць у гэты сьпіс.',
'lag-warn-high' => 'У выніку значнага адставаньня ў сынхранізацыі сэрвэраў базаў зьвестак зьмены, зробленыя раней за $1 {{PLURAL:$1|сэкунду|сэкунды|сэкундаў}} таму, могуць быць не паказаныя ў гэтым сьпісе.',

# Watchlist editor
'watchlistedit-numitems' => 'Ваш сьпіс назіраньня ўтрымлівае $1 {{PLURAL:$1|запіс|запісы|запісаў}}, без уліку старонак абмеркаваньня.',
'watchlistedit-noitems' => 'Ваш сьпіс назіраньня пусты.',
'watchlistedit-normal-title' => 'Рэдагаваньне сьпісу назіраньня',
'watchlistedit-normal-legend' => 'Выдаленьне старонак са сьпісу назіраньня',
'watchlistedit-normal-explain' => 'Ніжэй паданыя старонкі з Вашага сьпісу назіраньня.
Для выдаленьня старонкі са сьпісу пазначце адпаведныя пазыцыі і націсьніце кнопку «{{int:Watchlistedit-normal-submit}}».
Таксама Вы можаце [[Special:EditWatchlist/raw|рэдагаваць нефарматаваны сьпіс назіраньня]].',
'watchlistedit-normal-submit' => 'Выдаліць са сьпісу',
'watchlistedit-normal-done' => '$1 {{PLURAL:$1|запіс быў выдалены|запісы былі выдаленыя|запісаў былі выдаленыя}} з Вашага сьпісу назіраньня:',
'watchlistedit-raw-title' => 'Рэдагаваць нефарматаваны сьпіс назіраньня',
'watchlistedit-raw-legend' => 'Рэдагаваць нефарматаваны сьпіс назіраньня',
'watchlistedit-raw-explain' => 'Ніжэй пададзены сьпіс старонак Вашага сьпісу назіраньня, і Вы можаце яго рэдагаваць, дадаючы і выдаляючы радкі з назвамі старонак;
адна назва старонкі ў радку.
Пасьля заканчэньня рэдагаваньня, націсьніце «{{int:Watchlistedit-raw-submit}}».
Таксама Вы можаце [[Special:EditWatchlist|выкарыстаць стандартны інтэрфэйс рэдагаваньня]].',
'watchlistedit-raw-titles' => 'Назвы:',
'watchlistedit-raw-submit' => 'Абнавіць сьпіс назіраньня',
'watchlistedit-raw-done' => 'Ваш сьпіс назіраньня быў абноўлены.',
'watchlistedit-raw-added' => '$1 {{PLURAL:$1|запіс быў дададзены|запісы былі дададзеныя|запісаў былі дададзеныя}}:',
'watchlistedit-raw-removed' => '$1 {{PLURAL:$1|запіс быў выдалены|запісы былі выдаленыя|запісаў былі выдаленыя}}:',

# Watchlist editing tools
'watchlisttools-view' => 'Паказаць зьмены ў старонках зь сьпісу',
'watchlisttools-edit' => 'Праглядзець альбо рэдагаваць сьпіс назіраньня',
'watchlisttools-raw' => 'Рэдагаваць як тэкст',

# Signatures
'signature' => '[[{{ns:user}}:$1|$2]] ([[{{ns:user_talk}}:$1|гутаркі]])',
'timezone-utc' => 'UTC',

# Core parser functions
'unknown_extension_tag' => 'Невядомы тэг пашырэньня «$1»',
'duplicate-defaultsort' => 'Папярэджаньне: Ключ сартыроўкі па змоўчваньні «$2» замяняе папярэдні ключ сартыроўкі па змоўчваньні «$1».',

# Special:Version
'version' => 'Вэрсія',
'version-extensions' => 'Усталяваныя пашырэньні',
'version-specialpages' => 'Спэцыяльныя старонкі',
'version-parserhooks' => 'Працэдуры-перахопнікі парсэра',
'version-variables' => 'Зьменныя',
'version-antispam' => 'Абарона ад спаму',
'version-skins' => 'Афармленьні',
'version-api' => 'API',
'version-other' => 'Іншыя',
'version-mediahandlers' => 'Апрацоўшчыкі мэдыя',
'version-hooks' => 'Працэдуры-перахопнікі',
'version-extension-functions' => 'Функцыі пашырэньняў',
'version-parser-extensiontags' => 'Тэгі пашырэньняў парсэра',
'version-parser-function-hooks' => 'Перахопнікі функцыяў парсэра',
'version-hook-name' => 'Назва працэдуры-перахопніка',
'version-hook-subscribedby' => 'Падпісаны на',
'version-version' => '(Вэрсія $1)',
'version-svn-revision' => '(r$2)',
'version-license' => 'Ліцэнзія',
'version-poweredby-credits' => "{{SITENAME}} працуе на праграмным забесьпячэньні '''[//www.mediawiki.org/ MediaWiki]''', copyright © 2001-$1 $2.",
'version-poweredby-others' => 'іншыя',
'version-credits-summary' => 'Нам вельмі хацелася б адзначыць наступных асобаў, што зрабілі ўнёсак у [[Special:Version|MediaWiki]].',
'version-license-info' => 'MediaWiki зьяўляецца вольным праграмным забесьпячэньнем, якое Вы можаце распаўсюджваць і/ці зьмяняць на ўмовах ліцэнзіі GNU General Public License вэрсіі 2 ці болей позьняй, апублікаванай Фундацыяй вольнага праграмнага забесьпячэньня (Free Software Foundation).

MediaWiki распаўсюджваецца з надзеяй, што будзе карысным, але БЕЗ АНІЯКІХ ГАРАНТЫЯЎ, нават без меркаваных гарантыяў КАМЭРЦЫЙНАЙ КАШТОЎНАСЬЦІ ці ПРЫДАТНАСЬЦІ ДА ПЭЎНАЙ МЭТЫ. Глядзіце ліцэнзію GNU General Public License для болей падрабязных зьвестак.

Вы мусілі атрымаць [{{SERVER}}{{SCRIPTPATH}}/COPYING копію GNU General Public License] разам з гэтым праграмным забесьпячэньнем. Калі не, напішыце Free Software Foundation, Inc. па адрасе 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA, альбо прачытайце [//www.gnu.org/licenses/old-licenses/gpl-2.0.html он-лайн копію ліцэнзіі].',
'version-software' => 'Усталяванае праграмнае забесьпячэньне',
'version-software-product' => 'Прадукт',
'version-software-version' => 'Вэрсія',
'version-entrypoints' => 'Уваходныя адрасы',
'version-entrypoints-header-entrypoint' => 'Пункт уваходу',
'version-entrypoints-header-url' => 'URL',
'version-entrypoints-articlepath' => '[https://www.mediawiki.org/wiki/Manual:$wgArticlePath Шлях да артыкула]',
'version-entrypoints-scriptpath' => '[https://www.mediawiki.org/wiki/Manual:$wgScriptPath Пуць да скрыпту]',

# Special:FilePath
'filepath' => 'Шлях да файла',
'filepath-page' => 'Файл:',
'filepath-submit' => 'Перайсьці',
'filepath-summary' => 'Гэтая спэцыяльная старонка вяртае поўны шлях да файла.
Выявы паказаныя ў поўным выглядзе, астатнія тыпы файлаў адкрываюцца прыпісанымі да іх праграмамі.',

# Special:FileDuplicateSearch
'fileduplicatesearch' => 'Пошук дублікатаў файлаў',
'fileduplicatesearch-summary' => 'Пошук аднолькавых файлаў на падставе іх хэшаў.',
'fileduplicatesearch-legend' => 'Пошук аднолькавых файлаў',
'fileduplicatesearch-filename' => 'Назва файла:',
'fileduplicatesearch-submit' => 'Шукаць',
'fileduplicatesearch-info' => '$1 × $2 піксэляў<br />Памер файла: $3<br />Тып MIME: $4',
'fileduplicatesearch-result-1' => 'Файл «$1» ня мае ідэнтычных копіяў.',
'fileduplicatesearch-result-n' => 'Файл «$1» мае $2 {{PLURAL:$2|ідэнтычную копію|ідэнтычныя копіі|ідэнтычных копіяў}}.',
'fileduplicatesearch-noresults' => 'Файл з назвай «$1» ня знойдзены.',

# Special:SpecialPages
'specialpages' => 'Спэцыяльныя старонкі',
'specialpages-note' => '----
* Звычайныя спэцыяльныя старонкі.
* <strong class="mw-specialpagerestricted">Спэцыяльныя старонкі з абмежаваным доступам.</strong>
* <span class="mw-specialpagecached">Кэшаваныя спэцыяльныя старонкі (могуць быць састарэлымі).</span>',
'specialpages-group-maintenance' => 'Тэхнічныя справаздачы',
'specialpages-group-other' => 'Іншыя спэцыяльныя старонкі',
'specialpages-group-login' => 'Уваход / стварэньне рахунку',
'specialpages-group-changes' => 'Апошнія зьмены і журналы падзеяў',
'specialpages-group-media' => 'Справаздачы пра мэдыяфайлы і загрузка',
'specialpages-group-users' => 'Удзельнікі і правы',
'specialpages-group-highuse' => 'Частаўжываныя старонкі',
'specialpages-group-pages' => 'Сьпісы старонак',
'specialpages-group-pagetools' => 'Інструмэнты для старонак',
'specialpages-group-wiki' => 'Зьвесткі пра вікі і прылады',
'specialpages-group-redirects' => 'Спэцыяльныя старонкі-перанакіраваньні',
'specialpages-group-spam' => 'Інструмэнты для барацьбы са спамам',

# Special:BlankPage
'blankpage' => 'Пустая старонка',
'intentionallyblankpage' => 'Гэтая старонка наўмысна пакінутая пустой',

# External image whitelist
'external_image_whitelist' => ' #Пакіньце гэты радок такім, які ён ёсьць<pre>
#Зьмясьціце часткі рэгулярных выразаў (толькі частку якая знаходзіцца паміж //) ніжэй
#Яны будуць суаднесеныя з URL-адрасамі вонкавых выяваў
#Тыя, якія будуць пасаваць будуць паказвацца як выявы, астатнія толькі як спасылкі
#Радкі, пазначаныя #, лічыцца камэнтарамі
#Рэгістар сымбаляў ня ўлічваецца

#Зьмясьціце ўсе часткі рэгулярных выразаў над гэтым радком. Сам радок пакіньце ў такім жа выглядзе</pre>',

# Special:Tags
'tags' => 'Слушныя тэгі зьменаў',
'tag-filter' => 'Фільтар [[Special:Tags|тэгаў]]:',
'tag-filter-submit' => 'Фільтар',
'tags-title' => 'Тэгі',
'tags-intro' => 'На гэтай старонцы знаходзіцца сьпіс тэгаў, якімі праграмнае забесьпячэньне можа пазначыць рэдагаваньне, і іх значэньне.',
'tags-tag' => 'Назва тэга',
'tags-display-header' => 'Новыя запісы ў сьпісе зьменаў',
'tags-description-header' => 'Поўнае апісаньне значэньня',
'tags-hitcount-header' => 'Пазначаныя зьмены',
'tags-edit' => 'рэдагаваць',
'tags-hitcount' => '$1 {{PLURAL:$1|зьмена|зьмены|зьменаў}}',

# Special:ComparePages
'comparepages' => 'Параўнаньне старонак',
'compare-selector' => 'Параўнаньне вэрсіяў старонак',
'compare-page1' => 'Старонка 1',
'compare-page2' => 'Старонка 2',
'compare-rev1' => 'Вэрсія 1',
'compare-rev2' => 'Вэрсія 2',
'compare-submit' => 'Параўнаць',
'compare-invalid-title' => 'Пазначаная няслушная назва.',
'compare-title-not-exists' => 'Пазначаная старонка не існуе.',
'compare-revision-not-exists' => 'Пазначаная вэрсія не існуе.',

# Database error messages
'dberr-header' => 'Гэтая вікі не функцыянуе спраўна',
'dberr-problems' => 'Прабачце! На гэтым сайце ўзьніклі тэхнічныя цяжкасьці.',
'dberr-again' => 'Паспрабуйце пачакаць некалькі хвілінаў і абнавіць.',
'dberr-info' => '(Немагчыма злучыцца з сэрвэрам базы зьвестак: $1)',
'dberr-usegoogle' => 'Вы можаце пакуль паспрабаваць пашукаць праз Google.',
'dberr-outofdate' => 'Увага, індэксы нашага зьместу могуць быць састарэлымі.',
'dberr-cachederror' => 'Наступная старонка была загружана з кэшу і можа быць састарэлай.',

# HTML forms
'htmlform-invalid-input' => 'Узьніклі праблемы з некаторымі з Вашых уваходных зьвестак',
'htmlform-select-badoption' => 'Значэньне, якое Вы выбралі, не зьяўляецца слушным.',
'htmlform-int-invalid' => 'Значэньне, якое Вы выбралі, не зьяўляецца цэлым лікам.',
'htmlform-float-invalid' => 'Значэньне, якое Вы выбралі, не зьяўляецца лікам.',
'htmlform-int-toolow' => 'Значэньне, якое вы выбралі, менш за $1',
'htmlform-int-toohigh' => 'Значэньне, якое Вы выбралі, больш за $1',
'htmlform-required' => 'Гэтае значэньне — неабходнае',
'htmlform-submit' => 'Захаваць',
'htmlform-reset' => 'Адмяніць зьмены',
'htmlform-selectorother-other' => 'Іншае',

# SQLite database support
'sqlite-has-fts' => '$1 з падтрымкай поўнатэкстнага пошуку',
'sqlite-no-fts' => '$1 без падтрымкі поўнатэкстнага пошуку',

# New logging system
'logentry-delete-delete' => '$1 выдаліў старонку $3',
'logentry-delete-restore' => '$1 аднавіў старонку $3',
'logentry-delete-event' => '$1 зьмяніў бачнасьць $5 {{PLURAL:$5|падзеі ў журнале|падзеяў у журнале|падзеяў у журнале}} на $3: $4',
'logentry-delete-revision' => '$1 зьмяніў бачнасьць $5 {{PLURAL:$5|вэрсіі|вэрсіяў|вэрсіяў}} старонкі $3: $4',
'logentry-delete-event-legacy' => '$1 зьмяніў бачнасьць падзеяў у журнале на $3',
'logentry-delete-revision-legacy' => '$1 зьмяніў бачнасьць вэрсіяў старонкі $3',
'logentry-suppress-delete' => '$1 схаваў старонку $3',
'logentry-suppress-event' => '$1 прыхавана зьмяніў бачнасьць $5 {{PLURAL:$5|падзеі ў журнале|падзеяў у журнале|падзеяў у журнале}} на $3: $4',
'logentry-suppress-revision' => '$1 прыхавана зьмяніў бачнасьць $5 {{PLURAL:$5|вэрсіі|вэрсіяў|вэрсіяў}} старонкі $3: $4',
'logentry-suppress-event-legacy' => '$1 прыхавана зьмяніў бачнасьць падзеяў у журнале на $3',
'logentry-suppress-revision-legacy' => '$1 прыхавана зьмяніў бачнасьць вэрсіяў старонкі $3',
'revdelete-content-hid' => 'зьмест схаваны',
'revdelete-summary-hid' => 'апісаньне рэдагаваньня схаванае',
'revdelete-uname-hid' => 'імя ўдзельніка схаванае',
'revdelete-content-unhid' => 'зьмест адкрыты',
'revdelete-summary-unhid' => 'апісаньне рэдагаваньня адкрытае',
'revdelete-uname-unhid' => 'імя ўдзельніка адкрытае',
'revdelete-restricted' => 'ужыць абмежаваньні для адміністратараў',
'revdelete-unrestricted' => 'зьнятыя абмежаваньні для адміністратараў',
'logentry-move-move' => '$1 перанёс старонку $3 у $4',
'logentry-move-move-noredirect' => '$1 перанёс старонку $3 у $4 без пакінутага перанакіраваньня',
'logentry-move-move_redir' => '$1 перанёс старонку $3 у $4 паўзьверх перанакіраваньня',
'logentry-move-move_redir-noredirect' => '$1 перанёс старонку $3 у $4 паўзьверх перанакіраваньня без пакінутага перанакіраваньня',
'logentry-patrol-patrol' => '$1 пазначыў вэрсію $4 старонкі $3 як правераную',
'logentry-patrol-patrol-auto' => '$1 аўтаматычна пазначыў вэрсію $4 старонкі $3 як правераную',
'logentry-newusers-newusers' => '$1 стварыў рахунак',
'logentry-newusers-create' => '$1 стварыў рахунак',
'logentry-newusers-create2' => '$1 стварыў рахунак $3',
'logentry-newusers-autocreate' => 'Рахунак $1 быў створаны аўтаматычна',
'newuserlog-byemail' => 'Пароль адасланы па электроннай пошце',

# Feedback
'feedback-bugornote' => 'Калі Вы гатовы падрабязна апісаць тэхнічную праблему, калі ласка [$1 паведаміце пра памылку]. 
У адваротным выпадку, Вы можаце выкарыстоўваць простую форму пададзеную ніжэй. Ваш камэнтар будзе дададзены на старонку «[$3 $2]», разам з Вашым іменем удзельніка і выкарыстоўваемым браўзэрам.',
'feedback-subject' => 'Тэма:',
'feedback-message' => 'Паведамленьне:',
'feedback-cancel' => 'Скасаваць',
'feedback-submit' => 'Даслаць водгук',
'feedback-adding' => 'Даданьне водгуку на старонку…',
'feedback-error1' => 'Памылка: невядомы вынік з API',
'feedback-error2' => 'Памылка рэдагаваньня',
'feedback-error3' => 'Памылка: няма адказу ад API',
'feedback-thanks' => 'Дзякуй! Ваш водгук быў разьмешчаны на старонцы «[$2 $1]».',
'feedback-close' => 'Выканана',
'feedback-bugcheck' => 'Выдатна! Толькі праверце, магчыма гэтыя памылкі ўжо [$1 вядомыя].',
'feedback-bugnew' => 'Я праверыў. Гэта новая памылка',

# Search suggestions
'searchsuggest-search' => 'Пошук',
'searchsuggest-containing' => 'утрымлівае...',

# API errors
'api-error-badaccess-groups' => 'У Вас няма дазволу загружаць файлы ў гэтую вікі.',
'api-error-badtoken' => 'Унутраная памылка: няслушны ключ.',
'api-error-copyuploaddisabled' => 'Загрузка з URL-адрасу забароненая на гэтым сэрвэры.',
'api-error-duplicate' => 'Ужо {{PLURAL:$1|існуе [$2 іншы файл]|існуюць [$2 іншыя файлы]}} з такім жа зьместам.',
'api-error-duplicate-archive' => 'Раней на сайце {{PLURAL:$1|ўжо быў [$2 файл]|былі [$2 файлы]}} з дакладна такім жа зьместам, але {{PLURAL:$1|ён быў выдалены|яны былі выдаленыя}}.',
'api-error-duplicate-archive-popup-title' => 'Дублікаты {{PLURAL:$1|файла, які ўжо быў выдалены|файлаў, якія ўжо былі выдаленыя}}',
'api-error-duplicate-popup-title' => '{{PLURAL:$1|Ідэнтычны файл|Ідэнтычныя файлы}}',
'api-error-empty-file' => 'Дасланы Вамі файл быў пусты.',
'api-error-emptypage' => 'Стварэньне новых пустых старонак забаронена.',
'api-error-fetchfileerror' => 'Унутраная памылка: падчас атрыманьня файла штосьці здарылася.',
'api-error-fileexists-forbidden' => 'Файл з назвай «$1» ужо існуе і ня можа быць перазапісаны.',
'api-error-fileexists-shared-forbidden' => 'Файл з назвай «$1» ужо існуе ў супольным сховішчы файлаў і ня можа быць перазапісаны.',
'api-error-file-too-large' => 'Дасланы Вамі файл занадта вялікі.',
'api-error-filename-tooshort' => 'Назва файла занадта кароткая.',
'api-error-filetype-banned' => 'Гэты тып файла забаронены.',
'api-error-filetype-banned-type' => '$1 — {{PLURAL:$4|забаронены тып файлаў|забароненыя тыпы файлаў}}. {{PLURAL:$3|Дазволены тып файлаў|Дазволеныя тыпы файлаў}}: $2.',
'api-error-filetype-missing' => 'У файла няма пашырэньня.',
'api-error-hookaborted' => 'Прапанаваная Вамі зьмена была адхіленая апрацоўшчыкам пашырэньня.',
'api-error-http' => 'Унутраная памылка: немагчыма далучыцца да сэрвэра.',
'api-error-illegal-filename' => 'Недазволеная назва файла.',
'api-error-internal-error' => 'Унутраная памылка: падчас апрацоўкі Вашага файла штосьці здарылася.',
'api-error-invalid-file-key' => 'Унутраная памылка: ня быў знойдзены часовы файл.',
'api-error-missingparam' => 'Унутраная памылка: запыт бракуе парамэтраў.',
'api-error-missingresult' => 'Унутраная памылка: немагчыма вызначыць, ці пасьпяхова зробленае капіяваньне.',
'api-error-mustbeloggedin' => 'Для загрузкі файлаў неабходна ўвайсьці ў сыстэму.',
'api-error-mustbeposted' => 'Памылка гэтага праграмнага забесьпячэньня; яно не выкарыстоўвае слушны HTTP-мэтад.',
'api-error-noimageinfo' => 'Файл загружаны, але сэрвэр ня даў пра яго ніякай інфармацыі.',
'api-error-nomodule' => 'Унутраная памылка: ня выбраны модуль загрузкі.',
'api-error-ok-but-empty' => 'Унутраная памылка: няма адказу ад сэрвэра.',
'api-error-overwrite' => 'Замена існуючага файла забароненая.',
'api-error-stashfailed' => 'Унутраная памылка: сэрвэр ня змог захаваць часовы файл.',
'api-error-timeout' => 'Сэрвэр не адказаў у чаканы тэрмін.',
'api-error-unclassified' => 'Узьнікла невядомая памылка',
'api-error-unknown-code' => 'Невядомая памылка: «$1».',
'api-error-unknown-error' => 'Унутраная памылка: падчас загрузкі файла здарылася штосьці невядомае.',
'api-error-unknown-warning' => 'Невядомае папярэджаньне: $1',
'api-error-unknownerror' => 'Невядомая памылка: «$1».',
'api-error-uploaddisabled' => 'Загрузка ў гэтую вікі адключаная.',
'api-error-verification-error' => 'Гэты файл можа быць пашкоджаны, ці мае няслушнае пашырэньне.',

# Durations
'duration-seconds' => '$1 {{PLURAL:$1|сэкунда|сэкунды|сэкундаў}}',
'duration-minutes' => '$1 {{PLURAL:$1|хвіліна|хвіліны|хвілінаў}}',
'duration-hours' => '$1 {{PLURAL:$1|гадзіна|гадзіны|гадзінаў}}',
'duration-days' => '$1 {{PLURAL:$1|дзень|дні|дзён}}',
'duration-weeks' => '$1 {{PLURAL:$1|тыдзень|тыдні|тыдняў}}',
'duration-years' => '$1 {{PLURAL:$1|год|гады|гадоў}}',
'duration-decades' => '$1 {{PLURAL:$1|дзесяцігодзьдзе|дзесяцігодзьдзі|дзесяцігодзьдзяў}}',
'duration-centuries' => '$1 {{PLURAL:$1|стагодзьдзе|стагодзьдзі|стагодзьдзяў}}',
'duration-millennia' => '$1 {{PLURAL:$1|тысячагодзьдзе|тысячагодзьдзі|тысячагодзьдзяў}}',

);
