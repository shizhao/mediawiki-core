<?php
/** Turkish (Türkçe)
 *
 * See MessagesQqq.php for message documentation incl. usage of parameters
 * To improve a translation please visit http://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author 82-145
 * @author Bekiroflaz
 * @author BetelgeuSeginus
 * @author Bilalokms
 * @author Bombola
 * @author Cekli829
 * @author Dbl2010
 * @author Don Alessandro
 * @author Emperyan
 * @author Erdemaslancan
 * @author Erkan Yilmaz
 * @author Fryed-peach
 * @author Goktr001
 * @author Hanberke
 * @author Hcagri
 * @author Hedda Gabler
 * @author Ijon
 * @author Incelemeelemani
 * @author Joseph
 * @author Kaganer
 * @author Karduelis
 * @author Katpatuka
 * @author Khutuck
 * @author LuCKY
 * @author Mach
 * @author Manco Capac
 * @author Metal Militia
 * @author Mirzali
 * @author Mskyrider
 * @author Myildirim2007
 * @author Nazif İLBEK
 * @author Reedy
 * @author Runningfridgesrule
 * @author Sadrettin
 * @author Srhat
 * @author Stultiwikia
 * @author Suelnur
 * @author Szoszv
 * @author Tarikozket
 * @author Tarkovsky
 * @author Universal Life
 * @author Urhixidur
 * @author Uğur Başak
 * @author Vito Genovese
 * @author Vugar 1981
 * @author לערי ריינהארט
 */

$namespaceNames = array(
	NS_MEDIA            => 'Ortam',
	NS_SPECIAL          => 'Özel',
	NS_TALK             => 'Tartışma',
	NS_USER             => 'Kullanıcı',
	NS_USER_TALK        => 'Kullanıcı_mesaj',
	NS_PROJECT_TALK     => '$1_tartışma',
	NS_FILE             => 'Dosya',
	NS_FILE_TALK        => 'Dosya_tartışma',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'MediaWiki_tartışma',
	NS_TEMPLATE         => 'Şablon',
	NS_TEMPLATE_TALK    => 'Şablon_tartışma',
	NS_HELP             => 'Yardım',
	NS_HELP_TALK        => 'Yardım_tartışma',
	NS_CATEGORY         => 'Kategori',
	NS_CATEGORY_TALK    => 'Kategori_tartışma',
);

$namespaceAliases = array(
	'Medya'              => NS_MEDIA,
	'Resim'              => NS_FILE,
	'Resim_tartışma'     => NS_FILE_TALK,
	'MedyaViki'          => NS_MEDIAWIKI,
	'MedyaViki_tartışma' => NS_MEDIAWIKI_TALK,
);

$specialPageAliases = array(
	'Activeusers'               => array( 'AktifKullanıcılar', 'EtkinKullanıcılar' ),
	'Allmessages'               => array( 'Tümİletiler', 'TümMesajlar' ),
	'Allpages'                  => array( 'TümSayfalar' ),
	'Ancientpages'              => array( 'EskiSayfalar' ),
	'Badtitle'                  => array( 'KötüBaşlık', 'BozukBaşlık' ),
	'Blankpage'                 => array( 'BoşSayfa' ),
	'Block'                     => array( 'Engelle', 'IPEngelle' ),
	'Blockme'                   => array( 'BeniEngelle' ),
	'Booksources'               => array( 'KitapKaynakları' ),
	'BrokenRedirects'           => array( 'BozukYönlendirmeler' ),
	'Categories'                => array( 'Kategoriler', 'Ulamlar' ),
	'ChangeEmail'               => array( 'E-postaDeğiştir' ),
	'ChangePassword'            => array( 'ParolaDeğiştir', 'ParolaSıfırla' ),
	'ComparePages'              => array( 'SayfaKarşılaştır' ),
	'Confirmemail'              => array( 'E-postaDoğrula' ),
	'Contributions'             => array( 'Katkılar' ),
	'CreateAccount'             => array( 'HesapOluştur' ),
	'Deadendpages'              => array( 'BağlantısızSayfalar' ),
	'DeletedContributions'      => array( 'SilinenKatkılar' ),
	'Disambiguations'           => array( 'AnlamAyrımı', 'AnlamAyrım' ),
	'DoubleRedirects'           => array( 'ÇiftYönlendirmeler' ),
	'EditWatchlist'             => array( 'İzlemeListesiDüzenle' ),
	'Emailuser'                 => array( 'E-postaGönder' ),
	'Export'                    => array( 'DışaAktar', 'DışarıAktar' ),
	'Fewestrevisions'           => array( 'EnAzRevizyon' ),
	'FileDuplicateSearch'       => array( 'KopyaDosyaArama', 'ÇiftDosyaArama' ),
	'Filepath'                  => array( 'DosyaYolu', 'DosyaKonumu' ),
	'Import'                    => array( 'İçeAktar', 'İçeriAktar' ),
	'Invalidateemail'           => array( 'E-postaDoğrulamaİptal' ),
	'JavaScriptTest'            => array( 'JavaScriptTesti' ),
	'BlockList'                 => array( 'EngelListesi', 'IPEngelListesi', 'EngelListele' ),
	'LinkSearch'                => array( 'BağArama', 'BağlantıArama' ),
	'Listadmins'                => array( 'HizmetliListele', 'YöneticiListele', 'HizmetliListesi', 'YöneticiListesi' ),
	'Listbots'                  => array( 'BotListele', 'BotListesi' ),
	'Listfiles'                 => array( 'DosyaListesi', 'DosyaListele', 'ResimListesi', 'ResimListele' ),
	'Listgrouprights'           => array( 'GrupHaklarıListesi', 'GrupHaklarıListele', 'KullanıcıGrupHakları' ),
	'Listredirects'             => array( 'YönlendirmeListesi', 'YönlendirmeListele' ),
	'Listusers'                 => array( 'KullanıcıListesi', 'KullanıcıListele' ),
	'Lockdb'                    => array( 'DBKilitle', 'VeritabanıKilitle' ),
	'Log'                       => array( 'Günlük', 'Günlükler', 'Kayıt', 'Kayıtlar' ),
	'Lonelypages'               => array( 'YalnızSayfalar' ),
	'Longpages'                 => array( 'UzunSayfalar' ),
	'MergeHistory'              => array( 'GeçmişBirleştir' ),
	'MIMEsearch'                => array( 'MIMEArama' ),
	'Mostcategories'            => array( 'EnFazlaKategorili' ),
	'Mostimages'                => array( 'EnÇokBağlantıVerilenDosyalar' ),
	'Mostinterwikis'            => array( 'EnFazlaİnterviki' ),
	'Mostlinked'                => array( 'EnÇokBağlantıVerilenSayfalar' ),
	'Mostlinkedcategories'      => array( 'EnÇokBağlantıVerilenKategoriler' ),
	'Mostlinkedtemplates'       => array( 'EnÇokBağlantıVerilenŞablonlar' ),
	'Mostrevisions'             => array( 'EnÇokRevizyon' ),
	'Movepage'                  => array( 'SayfaTaşı' ),
	'Mycontributions'           => array( 'Katkılarım' ),
	'Mypage'                    => array( 'Sayfam', 'BenimSayfam', 'KullanıcıSayfam' ),
	'Mytalk'                    => array( 'MesajSayfam', 'İletiSayfam' ),
	'Myuploads'                 => array( 'Yüklemelerim' ),
	'Newimages'                 => array( 'YeniDosyalar', 'YeniResimler' ),
	'Newpages'                  => array( 'YeniSayfalar' ),
	'PasswordReset'             => array( 'ParolaSıfırlama' ),
	'PermanentLink'             => array( 'KalıcıBağ' ),
	'Popularpages'              => array( 'PopülerSayfalar' ),
	'Preferences'               => array( 'Tercihler', 'Ayarlar' ),
	'Prefixindex'               => array( 'ÖnekDizini' ),
	'Protectedpages'            => array( 'KorunanSayfalar' ),
	'Protectedtitles'           => array( 'KorunanBaşlıklar' ),
	'Randompage'                => array( 'Rastgele', 'RastgeleSayfa' ),
	'Randomredirect'            => array( 'RastgeleYönlendirme' ),
	'Recentchanges'             => array( 'SonDeğişiklikler' ),
	'Recentchangeslinked'       => array( 'İlgiliDeğişiklikler' ),
	'Revisiondelete'            => array( 'RevizyonSil' ),
	'Search'                    => array( 'Ara', 'Arama' ),
	'Shortpages'                => array( 'KısaSayfalar' ),
	'Specialpages'              => array( 'ÖzelSayfalar' ),
	'Statistics'                => array( 'İstatistikler' ),
	'Tags'                      => array( 'Etiketler' ),
	'Unblock'                   => array( 'EngeliKaldır', 'EngelKaldır' ),
	'Uncategorizedcategories'   => array( 'KategorisizKategoriler' ),
	'Uncategorizedimages'       => array( 'KategorisizDosyalar' ),
	'Uncategorizedpages'        => array( 'KategorisizSayfalar' ),
	'Uncategorizedtemplates'    => array( 'KategorisizŞablonlar' ),
	'Undelete'                  => array( 'GeriGetir' ),
	'Unlockdb'                  => array( 'DBKilidiAç', 'VeritabanıKilidiAç' ),
	'Unusedcategories'          => array( 'KullanılmayanKategoriler' ),
	'Unusedimages'              => array( 'KullanılmayanDosyalar' ),
	'Unusedtemplates'           => array( 'KullanılmayanŞablonlar' ),
	'Unwatchedpages'            => array( 'İzlenmeyenSayfalar' ),
	'Upload'                    => array( 'Yükle' ),
	'UploadStash'               => array( 'ZulaYükle', 'ZulaYükleme' ),
	'Userlogin'                 => array( 'KullanıcıOturumuAçma', 'KullanıcıGiriş' ),
	'Userlogout'                => array( 'KullanıcıOturumuKapatma', 'KullanıcıÇıkış' ),
	'Userrights'                => array( 'KullanıcıHakları' ),
	'Version'                   => array( 'Sürüm', 'Versiyon' ),
	'Wantedcategories'          => array( 'İstenenKategoriler' ),
	'Wantedfiles'               => array( 'İstenenDosyalar' ),
	'Wantedpages'               => array( 'İstenenSayfalar' ),
	'Wantedtemplates'           => array( 'İstenenŞablonlar' ),
	'Watchlist'                 => array( 'İzlemeListesi' ),
	'Whatlinkshere'             => array( 'SayfayaBağlantılar' ),
	'Withoutinterwiki'          => array( 'İntervikisiz' ),
);

$magicWords = array(
	'redirect'                  => array( '0', '#YÖNLENDİRME', '#YÖNLENDİR', '#REDIRECT' ),
	'notoc'                     => array( '0', '__İÇİNDEKİLERYOK__', '__NOTOC__' ),
	'nogallery'                 => array( '0', '__GALERİYOK__', '__NOGALLERY__' ),
	'forcetoc'                  => array( '0', '__İÇİNDEKİLERZORUNLU__', '__FORCETOC__' ),
	'toc'                       => array( '0', '__İÇİNDEKİLER__', '__TOC__' ),
	'noeditsection'             => array( '0', '__DEĞİŞTİRYOK__', '__DÜZENLEMEYOK__', '__NOEDITSECTION__' ),
	'currentmonth'              => array( '1', 'MEVCUTAY', 'MEVCUTAY2', 'GÜNCELAY', 'GÜNCELAY2', 'CURRENTMONTH', 'CURRENTMONTH2' ),
	'currentmonth1'             => array( '1', 'MEVCUTAY1', 'GÜNCELAY1', 'CURRENTMONTH1' ),
	'currentmonthname'          => array( '1', 'MEVCUTAYADI', 'GÜNCELAYADI', 'CURRENTMONTHNAME' ),
	'currentmonthnamegen'       => array( '1', 'MEVCUTAYADIİYELİK', 'GÜNCELAYADIİYELİK', 'CURRENTMONTHNAMEGEN' ),
	'currentmonthabbrev'        => array( '1', 'MEVCUTAYKISALTMASI', 'GÜNCELAYKISALTMASI', 'CURRENTMONTHABBREV' ),
	'currentday'                => array( '1', 'MEVCUTGÜN', 'GÜNCELGÜN', 'CURRENTDAY' ),
	'currentday2'               => array( '1', 'MEVCUTGÜN2', 'GÜNCELGÜN2', 'CURRENTDAY2' ),
	'currentdayname'            => array( '1', 'MEVCUTGÜNADI', 'GÜNCELGÜNADI', 'CURRENTDAYNAME' ),
	'currentyear'               => array( '1', 'MEVCUTYIL', 'GÜNCELYIL', 'CURRENTYEAR' ),
	'currenttime'               => array( '1', 'MEVCUTZAMAN', 'GÜNCELZAMAN', 'CURRENTTIME' ),
	'currenthour'               => array( '1', 'MEVCUTSAAT', 'GÜNCELSAAT', 'CURRENTHOUR' ),
	'localmonth'                => array( '1', 'YERELAY', 'YERELAY2', 'LOCALMONTH', 'LOCALMONTH2' ),
	'localmonth1'               => array( '1', 'YERELAY1', 'LOCALMONTH1' ),
	'localmonthname'            => array( '1', 'YERELAYADI', 'LOCALMONTHNAME' ),
	'localmonthnamegen'         => array( '1', 'YERELAYADIİYELİK', 'LOCALMONTHNAMEGEN' ),
	'localmonthabbrev'          => array( '1', 'YERELAYKISALTMASI', 'LOCALMONTHABBREV' ),
	'localday'                  => array( '1', 'YERELGÜN', 'LOCALDAY' ),
	'localday2'                 => array( '1', 'YERELGÜN2', 'LOCALDAY2' ),
	'localdayname'              => array( '1', 'YERELGÜNADI', 'LOCALDAYNAME' ),
	'localyear'                 => array( '1', 'YERELYIL', 'LOCALYEAR' ),
	'localtime'                 => array( '1', 'YERELZAMAN', 'LOCALTIME' ),
	'localhour'                 => array( '1', 'YERELSAAT', 'LOCALHOUR' ),
	'numberofpages'             => array( '1', 'SAYFASAYISI', 'NUMBEROFPAGES' ),
	'numberofarticles'          => array( '1', 'MADDESAYISI', 'NUMBEROFARTICLES' ),
	'numberoffiles'             => array( '1', 'DOSYASAYISI', 'NUMBEROFFILES' ),
	'numberofusers'             => array( '1', 'KULLANICISAYISI', 'NUMBEROFUSERS' ),
	'numberofactiveusers'       => array( '1', 'AKTİFKULLANICISAYISI', 'ETKİNKULLANICISAYISI', 'NUMBEROFACTIVEUSERS' ),
	'numberofedits'             => array( '1', 'DEĞİŞİKLİKSAYISI', 'NUMBEROFEDITS' ),
	'numberofviews'             => array( '1', 'GÖRÜNTÜLEMESAYISI', 'NUMBEROFVIEWS' ),
	'pagename'                  => array( '1', 'SAYFAADI', 'PAGENAME' ),
	'pagenamee'                 => array( '1', 'SAYFAADIU', 'PAGENAMEE' ),
	'namespace'                 => array( '1', 'ADALANI', 'İSİMALANI', 'NAMESPACE' ),
	'namespacee'                => array( '1', 'ADALANIU', 'İSİMALANIU', 'NAMESPACEE' ),
	'namespacenumber'           => array( '1', 'ADALANINUMARASI', 'NAMESPACENUMBER' ),
	'talkspace'                 => array( '1', 'TARTIŞMAALANI', 'TARTIŞMABOŞLUĞU', 'TALKSPACE' ),
	'talkspacee'                => array( '1', 'TARTIŞMAALANIU', 'TARTIŞMABOŞLUĞUU', 'TALKSPACEE' ),
	'subjectspace'              => array( '1', 'KONUALANI', 'MADDEALANI', 'KONUBOŞLUĞU', 'MADDEBOŞLUĞU', 'SUBJECTSPACE', 'ARTICLESPACE' ),
	'subjectspacee'             => array( '1', 'KONUALANIU', 'MADDEALANIU', 'KONUBOŞLUĞUU', 'MADDEBOŞLUĞUU', 'SUBJECTSPACEE', 'ARTICLESPACEE' ),
	'fullpagename'              => array( '1', 'TAMSAYFAADI', 'FULLPAGENAME' ),
	'fullpagenamee'             => array( '1', 'TAMSAYFAADIU', 'FULLPAGENAMEE' ),
	'subpagename'               => array( '1', 'ALTSAYFAADI', 'SUBPAGENAME' ),
	'subpagenamee'              => array( '1', 'ALTSAYFAADIU', 'SUBPAGENAMEE' ),
	'basepagename'              => array( '1', 'ÜSTSAYFAADI', 'BASEPAGENAME' ),
	'basepagenamee'             => array( '1', 'ÜSTSAYFAADIU', 'BASEPAGENAMEE' ),
	'talkpagename'              => array( '1', 'TARTIŞMASAYFASIADI', 'TALKPAGENAME' ),
	'talkpagenamee'             => array( '1', 'TARTIŞMASAYFASIADIU', 'TALKPAGENAMEE' ),
	'subjectpagename'           => array( '1', 'KONUSAYFASIADI', 'MADDESAYFASIADI', 'SUBJECTPAGENAME', 'ARTICLEPAGENAME' ),
	'subjectpagenamee'          => array( '1', 'KONUSAYFASIADIU', 'MADDESAYFASIADIU', 'SUBJECTPAGENAMEE', 'ARTICLEPAGENAMEE' ),
	'msg'                       => array( '0', 'MSJ:', 'İLT:', 'MSG:' ),
	'subst'                     => array( '0', 'YK:', 'YERİNEKOY:', 'KOPYALA:', 'AKTAR:', 'YAPIŞTIR:', 'SUBST:' ),
	'safesubst'                 => array( '0', 'GÜVENLİYERİNEKOY:', 'GÜVENLİKOPYALA:', 'GÜVENLİAKTAR:', 'GÜVENLİYAPIŞTIR:', 'SAFESUBST:' ),
	'msgnw'                     => array( '0', 'MSJYN:', 'İLTYN:', 'MSGNW:' ),
	'img_thumbnail'             => array( '1', 'küçükresim', 'küçük', 'thumbnail', 'thumb' ),
	'img_manualthumb'           => array( '1', 'küçükresim=$1', 'küçük=$1', 'thumbnail=$1', 'thumb=$1' ),
	'img_right'                 => array( '1', 'sağ', 'right' ),
	'img_left'                  => array( '1', 'sol', 'left' ),
	'img_none'                  => array( '1', 'yok', 'none' ),
	'img_width'                 => array( '1', '$1pik', '$1piksel', '$1px' ),
	'img_center'                => array( '1', 'orta', 'center', 'centre' ),
	'img_framed'                => array( '1', 'çerçeveli', 'çerçeve', 'framed', 'enframed', 'frame' ),
	'img_frameless'             => array( '1', 'çerçevesiz', 'frameless' ),
	'img_page'                  => array( '1', 'sayfa=$1', 'sayfa $1', 'page=$1', 'page $1' ),
	'img_upright'               => array( '1', 'dikey', 'dikey=$1', 'dikey $1', 'upright', 'upright=$1', 'upright $1' ),
	'img_border'                => array( '1', 'sınır', 'border' ),
	'img_baseline'              => array( '1', 'tabançizgisi', 'altçizgi', 'baseline' ),
	'img_sub'                   => array( '1', 'alt', 'sub' ),
	'img_super'                 => array( '1', 'üst', 'üs', 'super', 'sup' ),
	'img_top'                   => array( '1', 'tavan', 'tepe', 'top' ),
	'img_text_top'              => array( '1', 'metin-tavan', 'metin-tepe', 'text-top' ),
	'img_middle'                => array( '1', 'merkez', 'middle' ),
	'img_bottom'                => array( '1', 'taban', 'bottom' ),
	'img_text_bottom'           => array( '1', 'metin-taban', 'text-bottom' ),
	'img_link'                  => array( '1', 'bağlantı=$1', 'link=$1' ),
	'img_class'                 => array( '1', 'sınıf=$1', 'class=$1' ),
	'int'                       => array( '0', 'İNT:', 'INT:' ),
	'sitename'                  => array( '1', 'SİTEADI', 'SITENAME' ),
	'ns'                        => array( '0', 'AA:', 'AB:', 'NS:' ),
	'nse'                       => array( '0', 'AAU:', 'ABU:', 'NSE:' ),
	'localurl'                  => array( '0', 'YERELURL:', 'LOCALURL:' ),
	'localurle'                 => array( '0', 'YERELURLU:', 'LOCALURLE:' ),
	'articlepath'               => array( '0', 'MADDEYOLU', 'ARTICLEPATH' ),
	'pageid'                    => array( '0', 'SAYFANO', 'PAGEID' ),
	'server'                    => array( '0', 'SUNUCU', 'SERVER' ),
	'servername'                => array( '0', 'SUNUCUADI', 'SERVERNAME' ),
	'scriptpath'                => array( '0', 'BETİKYOLU', 'SCRIPTPATH' ),
	'stylepath'                 => array( '0', 'BİÇEMYOLU', 'STYLEPATH' ),
	'grammar'                   => array( '0', 'DİLBİLGİSİ:', 'GRAMER:', 'GRAMMAR:' ),
	'gender'                    => array( '0', 'CİNSİYET:', 'GENDER:' ),
	'notitleconvert'            => array( '0', '__BAŞLIKDÖNÜŞÜMÜYOK__', '__BDY__', '__NOTITLECONVERT__', '__NOTC__' ),
	'nocontentconvert'          => array( '0', '__İÇERİKDÖNÜŞÜMÜYOK__', '__İDY__', '__NOCONTENTCONVERT__', '__NOCC__' ),
	'currentweek'               => array( '1', 'MEVCUTHAFTA', 'GÜNCELHAFTA', 'CURRENTWEEK' ),
	'currentdow'                => array( '1', 'MEVCUTHAFTANINGÜNÜ', 'GÜNCELHAFTANINGÜNÜ', 'CURRENTDOW' ),
	'localweek'                 => array( '1', 'YERELHAFTA', 'LOCALWEEK' ),
	'localdow'                  => array( '1', 'YERELHAFTANINGÜNÜ', 'LOCALDOW' ),
	'revisionid'                => array( '1', 'SÜRÜMNU', 'SÜRÜMNO', 'REVİZYONNU', 'REVİZYONNO', 'REVISIONID' ),
	'revisionday'               => array( '1', 'SÜRÜMGÜNÜ', 'REVISIONDAY' ),
	'revisionday2'              => array( '1', 'SÜRÜMGÜNÜ2', 'REVISIONDAY2' ),
	'revisionmonth'             => array( '1', 'SÜRÜMAYI', 'REVISIONMONTH' ),
	'revisionmonth1'            => array( '1', 'SÜRÜMAYI1', 'REVISIONMONTH1' ),
	'revisionyear'              => array( '1', 'SÜRÜMYILI', 'REVISIONYEAR' ),
	'revisiontimestamp'         => array( '1', 'SÜRÜMZAMANBİLGİSİ', 'REVISIONTIMESTAMP' ),
	'revisionuser'              => array( '1', 'SÜRÜMKULLANICI', 'REVISIONUSER' ),
	'plural'                    => array( '0', 'ÇOĞUL:', 'PLURAL:' ),
	'fullurl'                   => array( '0', 'TAMURL:', 'FULLURL:' ),
	'fullurle'                  => array( '0', 'TAMURLU:', 'FULLURLE:' ),
	'canonicalurl'              => array( '0', 'KURALLIURL:', 'CANONICALURL:' ),
	'canonicalurle'             => array( '0', 'KURALLIURLU:', 'CANONICALURLE:' ),
	'lcfirst'                   => array( '0', 'KHİLK:', 'LCFIRST:' ),
	'ucfirst'                   => array( '0', 'BHİLK:', 'UCFIRST:' ),
	'lc'                        => array( '0', 'KH:', 'LC:' ),
	'uc'                        => array( '0', 'BH:', 'UC:' ),
	'raw'                       => array( '0', 'HAM:', 'RAW:' ),
	'displaytitle'              => array( '1', 'BAŞLIKGÖSTER', 'DISPLAYTITLE' ),
	'newsectionlink'            => array( '1', '__YENİBAŞLIKBAĞLANTISI__', '__NEWSECTIONLINK__' ),
	'nonewsectionlink'          => array( '1', '__YENİBAŞLIKBAĞLANTISIYOK__', '__NONEWSECTIONLINK__' ),
	'currentversion'            => array( '1', 'MEVCUTSÜRÜM', 'GÜNCELSÜRÜM', 'CURRENTVERSION' ),
	'urlencode'                 => array( '0', 'URLKODLAMA:', 'URLENCODE:' ),
	'anchorencode'              => array( '0', 'ÇENGELKODLAMA:', 'ANCHORENCODE' ),
	'currenttimestamp'          => array( '1', 'MEVCUTZAMANBİLGİSİ', 'GÜNCELZAMANBİLGİSİ', 'CURRENTTIMESTAMP' ),
	'localtimestamp'            => array( '1', 'YERELZAMANBİLGİSİ', 'LOCALTIMESTAMP' ),
	'directionmark'             => array( '1', 'YÖNİŞARETİ:', 'DIRECTIONMARK', 'DIRMARK' ),
	'language'                  => array( '0', '#DİL:', '#LİSAN:', '#LANGUAGE:' ),
	'contentlanguage'           => array( '1', 'İÇERİKDİLİ', 'İÇERİKLİSANI', 'CONTENTLANGUAGE', 'CONTENTLANG' ),
	'pagesinnamespace'          => array( '1', 'İSİMALANINDAKİSAYFALAR', 'İADAKİSAYFALAR', 'PAGESINNAMESPACE:', 'PAGESINNS:' ),
	'numberofadmins'            => array( '1', 'HİZMETLİSAYISI', 'NUMBEROFADMINS' ),
	'formatnum'                 => array( '0', 'BİÇİMNUM', 'FORMATNUM' ),
	'padleft'                   => array( '0', 'DOLSOL', 'PADLEFT' ),
	'padright'                  => array( '0', 'DOLSAĞ', 'PADRIGHT' ),
	'special'                   => array( '0', 'özel', 'special' ),
	'speciale'                  => array( '0', 'özelu', 'speciale' ),
	'defaultsort'               => array( '1', 'VARSAYILANSIRALA:', 'VARSAYILANSIRALAMAANAHTARI:', 'VARSAYILANKATEGORİSIRALA:', 'DEFAULTSORT:', 'DEFAULTSORTKEY:', 'DEFAULTCATEGORYSORT:' ),
	'filepath'                  => array( '0', 'DOSYAYOLU:', 'DOSYA_YOLU:', 'FILEPATH:' ),
	'tag'                       => array( '0', 'etiket', 'tag' ),
	'hiddencat'                 => array( '1', '__GİZLİKAT__', '__GİZLİKATEGORİ__', '__HIDDENCAT__' ),
	'pagesincategory'           => array( '1', 'KATEGORİDEKİSAYFALAR', 'KATTAKİSAYFALAR', 'PAGESINCATEGORY', 'PAGESINCAT' ),
	'pagesize'                  => array( '1', 'SAYFABOYUTU', 'PAGESIZE' ),
	'index'                     => array( '1', '__DİZİN__', '__ENDEKS__', '__INDEX__' ),
	'noindex'                   => array( '1', '__DİZİNYOK__', '__ENDEKSYOK__', '__NOINDEX__' ),
	'numberingroup'             => array( '1', 'GRUPTAKİSAYI', 'GRUBUNSAYISI', 'NUMBERINGROUP', 'NUMINGROUP' ),
	'staticredirect'            => array( '1', '__STATİKYÖNLENDİRME__', '__SABİTYÖNLENDİRME__', '__STATICREDIRECT__' ),
	'protectionlevel'           => array( '1', 'KORUMASEVİYESİ', 'PROTECTIONLEVEL' ),
	'formatdate'                => array( '0', 'biçimtarih', 'tarihbiçimi', 'formattarihi', 'tarihformatı', 'formatdate', 'dateformat' ),
	'url_path'                  => array( '0', 'YOL', 'PATH' ),
	'url_wiki'                  => array( '0', 'VİKİ', 'WIKI' ),
	'url_query'                 => array( '0', 'SORGU', 'QUERY' ),
	'defaultsort_noerror'       => array( '0', 'hatayok', 'hatasız', 'noerror' ),
	'pagesincategory_all'       => array( '0', 'tüm', 'all' ),
	'pagesincategory_pages'     => array( '0', 'sayfalar', 'pages' ),
	'pagesincategory_subcats'   => array( '0', 'altkategoriler', 'subcats' ),
	'pagesincategory_files'     => array( '0', 'dosyalar', 'files' ),
);

$separatorTransformTable = array( ',' => '.', '.' => ',' );
$linkTrail = '/^([a-zÇĞçğİıÖöŞşÜüÂâÎîÛû]+)(.*)$/sDu';

$messages = array(
# User preference toggles
'tog-underline' => 'Bağlantıların altını çiz:',
'tog-justify' => 'Paragrafları iki yana yasla',
'tog-hideminor' => 'Son değişiklikler sayfasında küçük değişiklikleri gizle',
'tog-hidepatrolled' => 'Son değişikliklerde gözden geçirilen düzenlemeleri gizle',
'tog-newpageshidepatrolled' => 'Kontrol edilmiş sayfaları yeni sayfalar listesinde gizle',
'tog-extendwatchlist' => 'İzleme listesini sadece en son değil, tüm değişiklikleri göstermek için genişlet',
'tog-usenewrc' => 'Son değişiklikler sayfasındaki ve izleme listesindeki değişiklikleri gruplandırma (JavaScript gerektirir)',
'tog-numberheadings' => 'Başlıkları otomatik numaralandır',
'tog-showtoolbar' => 'Düzenleme yaparken araç çubuğunu göster (JavaScript gerektirir)',
'tog-editondblclick' => 'Çift tıklayarak sayfaları düzenle (JavaScript gerektirir)',
'tog-editsection' => 'Bölümleri [{{int:Editsection}}] bağlantıları ile düzenlemeyi etkinleştir',
'tog-editsectiononrightclick' => 'Bölüm başlığına sağ tıklayarak bölümleri düzenleyebilme olanağı ver (JavaScript gerektirir)',
'tog-showtoc' => 'İçindekiler tablosunu göster (3 taneden fazla başlığı olan sayfalar için)',
'tog-rememberpassword' => 'Girişimi bu tarayıcıda hatırla (en fazla $1 {{PLURAL:$1|gün|gün}} için)',
'tog-watchcreations' => 'Açtığım sayfaları ve yüklediğim dosyaları izleme listeme ekle',
'tog-watchdefault' => 'Düzenleme yaptığım sayfaları ve dosyaları izleme listeme ekle',
'tog-watchmoves' => 'Taşıdığım sayfaları ve dosyaları izleme listeme ekle',
'tog-watchdeletion' => 'Sildiğim sayfaları ve dosyaları izleme listeme ekle',
'tog-minordefault' => 'Varsayılan olarak bütün düzenlemeleri küçük olarak işaretle',
'tog-previewontop' => 'Ön izlemeyi düzenleme kutusunun üstünde göster',
'tog-previewonfirst' => 'İlk düzenlemede ön izlemeyi göster',
'tog-nocache' => 'Tarayıcı sayfalarını önbelleğe almayı devre dışı bırak',
'tog-enotifwatchlistpages' => 'İzleme listemdeki bir sayfanın ya da dosyanın değiştirilmesi durumunda bana e-posta gönder',
'tog-enotifusertalkpages' => 'Kullanıcı mesaj sayfamda değişiklik olduğunda bana e-posta gönder',
'tog-enotifminoredits' => 'Sayfalardaki ve dosyalardaki küçük değişikliklerde bana e-posta gönder',
'tog-enotifrevealaddr' => 'E-posta adresimi bildiri postalarımda göster.',
'tog-shownumberswatching' => 'İzleyen kullanıcı sayısını göster',
'tog-oldsig' => 'Mevcut imza:',
'tog-fancysig' => 'İmzaya vikimetin muamelesi yap (otomatik bir bağlantı olmadan)',
'tog-externaleditor' => 'Varsayılan olarak harici düzenleyici kullan (deneyimli kullanıcılar içindir ve bilgisayarınızda özel ayarlar gerektirir. [//www.mediawiki.org/wiki/Manual:External_editors Ayrıntılı bilgi için tıklayın.])',
'tog-externaldiff' => 'Varsayılan olarak harici karşılaştırıcı kullan (deneyimli kullanıcılar içindir ve bilgisayarınızda özel ayarlar gerektirir. [//www.mediawiki.org/wiki/Manual:External_editors Ayrıntılı bilgi için tıklayın.])',
'tog-showjumplinks' => '"{{int:jumpto}}" erişilebilirlik bağlantısı etkinleştir',
'tog-uselivepreview' => 'Canlı ön izlemeyi kullan (JavaScript gerektirir ve özellik deneme aşamasındadır)',
'tog-forceeditsummary' => 'Özeti boş bıraktığımda beni uyar',
'tog-watchlisthideown' => 'İzleme listemden düzenlemelerimi gizle',
'tog-watchlisthidebots' => 'İzleme listemden bot değişikliklerini gizle',
'tog-watchlisthideminor' => 'İzleme listemden küçük değişiklikleri gizle',
'tog-watchlisthideliu' => 'İzleme listemde, kayıtlı kullanıcılar tarafından yapılan değişiklikleri gösterme',
'tog-watchlisthideanons' => 'İzleme listemde, anonim kullanıcılar tarafından yapılan değişiklikleri gizle',
'tog-watchlisthidepatrolled' => 'İzleme listesinde kontrol edilmiş değişiklikleri gizle',
'tog-ccmeonemails' => 'Diğer kullanıcılara gönderdiğim e-postaların kopyalarını bana da gönder',
'tog-diffonly' => 'Sayfa içeriğini sürüm farklarının altında gösterme',
'tog-showhiddencats' => 'Gizli kategorileri göster',
'tog-noconvertlink' => 'Bağlantı başlığı dönüştürmesini devre dışı bırakma',
'tog-norollbackdiff' => 'Geridönüş uygulandıktan sonra değişikliği atla',

'underline-always' => 'Daima',
'underline-never' => 'Asla',
'underline-default' => 'Tarayıcı varsayılanı',

# Font style option in Special:Preferences
'editfont-style' => 'Düzenleme alanının yazı tipi:',
'editfont-default' => 'Tarayıcı varsayılanı',
'editfont-monospace' => 'Sabit aralıklı yazı tipi',
'editfont-sansserif' => 'Çıkıntısız (Sans-serif) yazı tipi',
'editfont-serif' => 'Çıkıntılı (serif) yazı tipi',

# Dates
'sunday' => 'Pazar',
'monday' => 'Pazartesi',
'tuesday' => 'Salı',
'wednesday' => 'Çarşamba',
'thursday' => 'Perşembe',
'friday' => 'Cuma',
'saturday' => 'Cumartesi',
'sun' => 'Paz',
'mon' => 'Pzt',
'tue' => 'Sal',
'wed' => 'Çrş',
'thu' => 'Prş',
'fri' => 'Cum',
'sat' => 'Cts',
'january' => 'Ocak',
'february' => 'Şubat',
'march' => 'Mart',
'april' => 'Nisan',
'may_long' => 'Mayıs',
'june' => 'Haziran',
'july' => 'Temmuz',
'august' => 'Ağustos',
'september' => 'Eylül',
'october' => 'Ekim',
'november' => 'Kasım',
'december' => 'Aralık',
'january-gen' => 'Ocak',
'february-gen' => 'Şubat',
'march-gen' => 'Mart',
'april-gen' => 'Nisan',
'may-gen' => 'Mayıs',
'june-gen' => 'Haziran',
'july-gen' => 'Temmuz',
'august-gen' => 'Ağustos',
'september-gen' => 'Eylül',
'october-gen' => 'Ekim',
'november-gen' => 'Kasım',
'december-gen' => 'Aralık',
'jan' => 'Oca',
'feb' => 'Şub',
'mar' => 'Mar',
'apr' => 'Nis',
'may' => 'May',
'jun' => 'Haz',
'jul' => 'Tem',
'aug' => 'Ağu',
'sep' => 'Eyl',
'oct' => 'Eki',
'nov' => 'Kas',
'dec' => 'Ara',

# Categories related messages
'pagecategories' => '{{PLURAL:$1|Kategori|Kategoriler}}',
'category_header' => '"$1" kategorisindeki sayfalar',
'subcategories' => 'Alt kategoriler',
'category-media-header' => '"$1" kategorisindeki dosyalar',
'category-empty' => "''Bu kategoride henüz herhangi bir sayfa ya da dosya bulunmamaktadır.''",
'hidden-categories' => '{{PLURAL:$1|Gizli kategori|Gizli kategoriler}}',
'hidden-category-category' => 'Gizli kategoriler',
'category-subcat-count' => '{{PLURAL:$2|Bu kategori sadece aşağıdaki alt kategoriyi içermektedir.|Bu kategoride aşağıdaki {{PLURAL:$1|alt kategori|$1 alt kategorisi}} dahil $2 alt kategorisi vardır.}}',
'category-subcat-count-limited' => 'Bu kategori aşağıdaki {{PLURAL:$1|alt kategoriye|$1 alt kategoriye}} sahiptir.',
'category-article-count' => '{{PLURAL:$2|Bu kategori sadece aşağıdaki sayfayı içermektedir.|Toplam $2 taneden, aşağıdaki {{PLURAL:$1|sayfa|$1 sayfa}} bu kategoridedir.}}',
'category-article-count-limited' => 'Bu kategoride {{PLURAL:$1|sayfa|$1 sayfa}} bulunmaktadır.',
'category-file-count' => '{{PLURAL:$2|Bu kategori sadece aşağıdaki dosyayı içerir.|Toplam $2 taneden, aşağıdaki {{PLURAL:$1|dosya|$1 dosya}} bu kategoridedir.}}',
'category-file-count-limited' => 'Aşağıdaki {{PLURAL:$1|dosya|$1 dosya}} mevcut kategoridedir.',
'listingcontinuesabbrev' => '(devam)',
'index-category' => 'Dizinli sayfalar',
'noindex-category' => 'Dizinli olmayan sayfalar',
'broken-file-category' => 'Bozuk dosya bağlantıları içeren sayfalar',

'about' => 'Hakkında',
'article' => 'Madde',
'newwindow' => '(yeni bir pencerede açılır)',
'cancel' => 'İptal',
'moredotdotdot' => 'Daha...',
'mypage' => 'sayfam',
'mytalk' => 'Mesaj sayfam',
'anontalk' => "Bu IP'nin iletileri",
'navigation' => 'Gezinti',
'and' => '&#32;ve',

# Cologne Blue skin
'qbfind' => 'Bul',
'qbbrowse' => 'Tara',
'qbedit' => 'Değiştir',
'qbpageoptions' => 'Bu sayfa',
'qbmyoptions' => 'Sayfalarım',
'qbspecialpages' => 'Özel sayfalar',
'faq' => 'SSS',
'faqpage' => 'Project:SSS',

# Vector skin
'vector-action-addsection' => 'Konu ekle',
'vector-action-delete' => 'Sil',
'vector-action-move' => 'Taşı',
'vector-action-protect' => 'Koru',
'vector-action-undelete' => 'Silinmeyi geri al',
'vector-action-unprotect' => 'Korumayı değiştir',
'vector-simplesearch-preference' => 'Gelişmiş arama önerilerini etkinleştir (Sadece Vector görünümü için)',
'vector-view-create' => 'Oluştur',
'vector-view-edit' => 'Düzenle',
'vector-view-history' => 'Geçmişi gör',
'vector-view-view' => 'Oku',
'vector-view-viewsource' => 'Kaynağı gör',
'actions' => 'Eylemler',
'namespaces' => 'Ad alanları',
'variants' => 'Türevler',

'errorpagetitle' => 'Hata',
'returnto' => '$1 sayfasına geri dön.',
'tagline' => '{{SITENAME}} sitesinden',
'help' => 'Yardım',
'search' => 'Ara',
'searchbutton' => 'Ara',
'go' => 'Git',
'searcharticle' => 'Git',
'history' => 'Sayfa geçmişi',
'history_short' => 'Geçmiş',
'updatedmarker' => 'son ziyaretimden sonra güncellenmiş',
'printableversion' => 'Yazdırılabilir sürüm',
'permalink' => 'Kalıcı bağlantı',
'print' => 'Yazdır',
'view' => 'Görüntüle',
'edit' => 'Düzenle',
'create' => 'Oluştur',
'editthispage' => 'Bu sayfayı değiştir',
'create-this-page' => 'Bu sayfayı oluştur',
'delete' => 'Sil',
'deletethispage' => 'Bu sayfayı sil',
'undelete_short' => '$1 değişikliği geri getir',
'viewdeleted_short' => '{{PLURAL:$1|bir silinmiş değişiklik|$1 silinmiş değişiklikleri}} görüntüle.',
'protect' => 'Korumaya al',
'protect_change' => 'değiştir',
'protectthispage' => 'Sayfayı koruma altına al',
'unprotect' => 'Korumayı değiştir',
'unprotectthispage' => 'Bu sayfanın korumasını değiştir',
'newpage' => 'Yeni sayfa',
'talkpage' => 'Tartışma sayfası',
'talkpagelinktext' => 'Mesaj',
'specialpage' => 'Özel sayfa',
'personaltools' => 'Kişisel araçlar',
'postcomment' => 'Yeni bölüm',
'articlepage' => 'İçerik sayfasını gör',
'talk' => 'Tartışma',
'views' => 'Görünümler',
'toolbox' => 'Araçlar',
'userpage' => 'Kullanıcı sayfasını görüntüle',
'projectpage' => 'Proje sayfasına bak',
'imagepage' => 'Dosya sayfasını görüntüle',
'mediawikipage' => 'Mesaj sayfasını göster',
'templatepage' => 'Şablon sayfasını görüntüle',
'viewhelppage' => 'Yardım sayfasına bak',
'categorypage' => 'Kategori sayfasını göster',
'viewtalkpage' => 'Tartışma sayfasına git',
'otherlanguages' => 'Diğer dillerde',
'redirectedfrom' => '($1 sayfasından yönlendirildi)',
'redirectpagesub' => 'Yönlendirme sayfası',
'lastmodifiedat' => 'Bu sayfa son olarak $1, $2 tarihinde güncellenmiştir.',
'viewcount' => 'Bu sayfaya {{PLURAL:$1|bir|$1 }} defa erişilmiş.',
'protectedpage' => 'Korumalı sayfa',
'jumpto' => 'Atla:',
'jumptonavigation' => 'kullan',
'jumptosearch' => 'ara',
'view-pool-error' => 'Üzgünüz, sunucular şu anda aşırı yüklendi.
Birçok kullanıcı bu sayfayı görüntülemeye çalışıyor.
Lütfen bu sayfaya  tekrar erişmeyi denemeden önce biraz bekleyin.

$1',
'pool-timeout' => 'Kilit için zaman bitimi bekleniyor',
'pool-queuefull' => 'Havuz sırası dolu',
'pool-errorunknown' => 'Bilinmeyen hata',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage) and the disambiguation template definition (see disambiguations).
'aboutsite' => '{{SITENAME}} hakkında',
'aboutpage' => 'Project:Hakkında',
'copyright' => 'İçerik $1 altındadır.',
'copyrightpage' => '{{ns:project}}:Telif hakları',
'currentevents' => 'Güncel olaylar',
'currentevents-url' => 'Project:Güncel olaylar',
'disclaimers' => 'Sorumluluk reddi',
'disclaimerpage' => 'Project:Genel sorumluluk reddi',
'edithelp' => 'Nasıl değiştirilir?',
'edithelppage' => 'Help:Sayfa nasıl değiştirilir',
'helppage' => 'Help:İçindekiler',
'mainpage' => 'Ana Sayfa',
'mainpage-description' => 'Ana sayfa',
'policy-url' => 'Project:Politika',
'portal' => 'Topluluk portali',
'portal-url' => 'Project:Topluluk portali',
'privacy' => 'Gizlilik ilkesi',
'privacypage' => 'Project:Gizlilik ilkesi',

'badaccess' => 'İzin hatası',
'badaccess-group0' => 'Bu işlemi yapma yetkiniz yok.',
'badaccess-groups' => 'Yapmak istediğiniz işlem, sadece {{PLURAL:$2|şu gruptaki|şu gruplardaki}} kullanıcılar tarafından yapılabilir: $1',

'versionrequired' => "MediaWiki'nin $1 sürümü gerekiyor",
'versionrequiredtext' => "Bu sayfayı kullanmak için MediaWiki'nin $1 sürümü gerekmektedir. [[Special:Version|Sürüm sayfasına]] bakınız.",

'ok' => 'TAMAM',
'pagetitle-view-mainpage' => '{{SITENAME}}',
'retrievedfrom' => '"$1" adresinden alındı.',
'youhavenewmessages' => 'Yeni $1 var ($2).',
'newmessageslink' => 'mesajınız',
'newmessagesdifflink' => 'son değişiklik',
'youhavenewmessagesfromusers' => '{{PLURAL:$3|Başka bir kullanıcıdan|$3 kullanıcıdan}} $1 var. ($2)',
'youhavenewmessagesmanyusers' => 'Birçok kullanıcıdan $1 var. ($2)',
'newmessageslinkplural' => '{{PLURAL:$1|yeni mesajınız|yeni mesajlarınız}}',
'newmessagesdifflinkplural' => 'son {{PLURAL:$1|değişiklik|değişiklikler}}',
'youhavenewmessagesmulti' => "$1'de yeni mesajınız var.",
'editsection' => 'düzenle',
'editold' => 'değiştir',
'viewsourceold' => 'kaynağı gör',
'editlink' => 'değiştir',
'viewsourcelink' => 'kaynağı gör',
'editsectionhint' => 'Değiştirilen bölüm: $1',
'toc' => 'Konu başlıkları',
'showtoc' => 'göster',
'hidetoc' => 'gizle',
'collapsible-collapse' => 'Daralt',
'collapsible-expand' => 'Genişlet',
'thisisdeleted' => '$1 görmek veya geri getirmek istermisiniz?',
'viewdeleted' => '$1 gör?',
'restorelink' => '{{PLURAL:$1|bir silinmiş değişikliği|$1 silinmiş değişikliği}}',
'feedlinks' => 'Besleme:',
'feed-invalid' => 'Hatalı besleme tipi.',
'feed-unavailable' => 'Sendikalaşma özet akışları geçerli değil.',
'site-rss-feed' => '$1 RSS Aboneliği',
'site-atom-feed' => '$1 Atom beslemesi',
'page-rss-feed' => '"$1" RSS Beslemesi',
'page-atom-feed' => '"$1" Atom beslemesi',
'feed-atom' => 'Atom',
'feed-rss' => 'RSS',
'red-link-title' => '$1 (sayfa mevcut değil)',
'sort-descending' => 'Azalan sıralama',
'sort-ascending' => 'Artan sıralama',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main' => 'Madde',
'nstab-user' => 'Kullanıcı sayfası',
'nstab-media' => 'Medya sayfası',
'nstab-special' => 'Özel sayfa',
'nstab-project' => 'Proje sayfası',
'nstab-image' => 'Dosya',
'nstab-mediawiki' => 'Mesaj',
'nstab-template' => 'Şablon',
'nstab-help' => 'Yardım sayfası',
'nstab-category' => 'Kategori',

# Main script and global functions
'nosuchaction' => 'Böyle bir eylem yok',
'nosuchactiontext' => "URL tarafından tanımlanan eylem geçersiz.
URL'yi yanlış yazmış olabilir, ya da doğru olmayan bir bağlantıyı takip etmiş olabilirsiniz.
Bu, {{SITENAME}} sitesindeki bir hatayı da belirtebilir.",
'nosuchspecialpage' => 'Bu isimde bir özel sayfa yok',
'nospecialpagetext' => 'Bulunmayan bir özel sayfaya girdiniz. Varolan tüm özel sayfaları [[Special:SpecialPages|özel sayfalar]] sayfasında görebilirsiniz.',

# General errors
'error' => 'Hata',
'databaseerror' => 'Veritabanı hatası',
'dberrortext' => 'Bir veritabanı sorgusu sözdizimi hatası oluştu.
Bu yazılımdaki bir hatadan kaynaklanabilir.
"<tt>$2</tt>" işlevinden denenen son sorgulama:
<blockquote><tt>$1</tt></blockquote>.
Veritabanının rapor ettiği hata "<tt>$3: $4</tt>".',
'dberrortextcl' => 'Veritabanı sorgu sözdizimi hatası oluştu.
Son yapılan veritabanı sorgusu:
"$1"
Kullanılan fonksiyon "$2".
Veritabanının verdiği hata mesajı "$3: $4"',
'laggedslavemode' => 'Uyarı: Sayfa son güncellemeleri içermeyebilir.',
'readonly' => 'Veritabanı kilitlendi',
'enterlockreason' => 'Koruma için bir neden belirtin. Korumanın ne zaman kaldırılacağına dair tahmini bir tarih eklemeyi unutmayın.',
'readonlytext' => 'Veritabanı olağan bakım/onarım çalışmaları sebebiyle, geçici olarak giriş ve değişiklik yapmaya kapatılmıştır. Kısa süre sonra normale dönecektir.

Veritabanını kilitleyen operatörün açıklaması: $1',
'missing-article' => 'Veritabanında bulunması istenen "$1" $2 adlı sayfaya ait metin bulunamadı.

Bu durum, genellikle silinmiş bir sayfanın geçmiş bir sürümüne yönlendirilmekten kaynaklanır.

Eğer neden bu değilse yazılımda bir hata ile karşılaşmış olabilirsiniz.
Lütfen URL\'yi not ederek bunu bir [[Special:ListUsers/sysop|hizmetliye]] iletin.',
'missingarticle-rev' => '(revizyon#: $1)',
'missingarticle-diff' => '(Fark: $1, $2)',
'readonly_lag' => 'Yedek sunucular ana sunucu ile güncellemeye çalışırken veritabanı otomatik olarak kilitlendi.',
'internalerror' => 'Yazılım hatası',
'internalerror_info' => 'İç hata: $1',
'fileappenderrorread' => 'Ekleme yapılırken "$1" okunamadı.',
'fileappenderror' => '"$1" dosyası "$2" dosyasına eklenemiyor.',
'filecopyerror' => '"$1"  "$2" dosyasına kopyalanamıyor.',
'filerenameerror' => '"$1" dosyasının ismi "$2" olarak değiştirilemedi.',
'filedeleteerror' => '"$1" dosyası silinemedi.',
'directorycreateerror' => '"$1" dizini oluşturulamadı',
'filenotfound' => '"$1" dosyası bulunamadı.',
'fileexistserror' => '"$1" dosyasına yazılamadı: dosya zaten mevcut',
'unexpected' => 'beklenmeyen değer: "$1"="$2".',
'formerror' => 'Hata: Form gönderilemiyor',
'badarticleerror' => 'Yapmak istediğiniz işlem geçersizdir.',
'cannotdelete' => '"$1" sayfa ya da dosyası silinemedi.
Başka bir kullanıcı tarafından silinmiş olabilir.',
'cannotdelete-title' => '"$1" sayfasını silemezsiniz',
'delete-hook-aborted' => 'Silme işlemi kanca tarafından durduruldu. 
Hiçbir açıklama yapılmadı.',
'badtitle' => 'Geçersiz başlık',
'badtitletext' => 'Girilen sayfa adı ya hatalı ya boş ya da diller arası bağlantı veya vikiler arası bağlantı içerdiğinden geçerli değil. Başlıklarda kullanılması yasak olan bir ya da daha çok karakter içeriyor olabilir.',
'perfcached' => 'Aşağıdaki veriler önbellekten alınmıştır ve güncel olmayabilir. Önbellekte en fazla {{PLURAL:$1|bir sonuç|$1 sonuç}} mevcut.',
'perfcachedts' => 'Aşağıdaki veri önbelleklenmiştir, son güncelleme tarihi: $1. Önbellekte en fazla {{PLURAL:$1|bir sonuç|$4 sonuç}} mevcut.',
'querypage-no-updates' => 'Şu an için güncellemeler devre dışı bırakıldı. Buradaki veri hemen yenilenmeyecektir.',
'wrong_wfQuery_params' => 'wfQuery() ye yanlış parametre<br />
Fonksiyon: $1<br />
Sorgu: $2',
'viewsource' => 'Kaynağı gör',
'viewsource-title' => '$1 sayfasının kaynağını görüntüle',
'actionthrottled' => 'Eylem kısılmışdır',
'actionthrottledtext' => 'Anti-spam önlemleri nedeniyle, bir eylemi kısa bir zaman aralığında çok defa yapmanız kısıtlandı, ve siz sınırı aşmış bulunmaktasınız.
Lütfen birkaç dakika sonra yeniden deneyin.',
'protectedpagetext' => 'Bu sayfa değişiklik yapılmaması için koruma altına alınmıştır.',
'viewsourcetext' => 'Bu sayfanın kaynağını görebilir ve kopyalayabilirsiniz:',
'viewyourtext' => "Bu sayfaya '''yaptığınız değişikliklerin''' kaynağını görünteleyip kopyalayabilirsiniz:",
'protectedinterface' => "Bu sayfa yazılım için arayüz metni sağlamaktadır ve kötüye kullanımı önlemek için korumaya alınmıştır. Eklemek ya da bütün vikilerdeki çevirileri değiştirmek için lütfen MediaWiki yerelleştirme projesi [//translatewiki.net/ translatewiki.net]'i kullanın.",
'editinginterface' => "'''UYARI:''' Wiki yazılımı için arayüz sağlamakta kullanılan bir sayfayı değiştirmektesiniz. Bu sayfadaki değişiklikler kullanıcı arayüzünü diğer kullanıcılar için de değiştirecektir. Çeviriler için, lütfen [//translatewiki.net/wiki/Main_Page?setlang=tr translatewiki.net]'yi kullanarak MediaWiki yerelleştirme projesini dikkate alınız.",
'sqlhidden' => '(SQL gizli sorgu)',
'cascadeprotected' => 'Bu sayfa değişiklik yapılması engellenmiştir, çünkü  "kademeli" seçeneği aktif hale getirilerek koruma altına alınan {{PLURAL:$1|sayfada|sayfada}} kullanılmaktadır:
$2',
'namespaceprotected' => "'''$1''' alandındaki sayfaları düzenlemeye izniniz bulunmamaktadır.",
'customcssprotected' => 'Bu sayfayı değiştirmeye yetkiniz bulunmamaktadır, çünkü bu sayfa başka bir kullanıcının kişisel ayarlarını içermektedir.',
'customjsprotected' => 'Bu Java Script sayfasını değiştirmeye yetkiniz bulunmamaktadır, çünkü bu sayfa başka bir kullanıcının kişisel ayarlarını içermektedir.',
'ns-specialprotected' => '{{ns:special}} alanadı içindeki sayfalar değiştirilemez.',
'titleprotected' => "[[User:$1|$1]] tarafından oluşturulması engellenmesi için bu sayfa koruma altına alınmıştır.
Verilen sebep: ''$2''.",
'invalidtitle-knownnamespace' => '"$2" alan adı için "$3" metni geçersiz bir başlık',
'exception-nologin' => 'Giriş yapılmamış',
'exception-nologin-text' => 'Bu sayfa ya da eylem için bu vikide oturum açmış olmanız gerekir.',

# Virus scanner
'virus-badscanner' => "Yanlış ayarlama: bilinmeyen virüs tarayıcı: ''$1''",
'virus-scanfailed' => 'tarama başarısız (kod $1)',
'virus-unknownscanner' => 'bilinmeyen antivürüs:',

# Login and logout pages
'logouttext' => "'''Oturumu kapattınız.'''

Şimdi anonim olarak {{SITENAME}} sitesini kullanmaya devam edebilirsiniz ya da aynı kullanıcı adıyla ya da ister başka bir kullanıcı adıyla <span class='plainlinks'>[$1 yeniden oturum açabilirsiniz]</span>.
Tarayıcınızın önbelleğini temizleyene kadar bazı sayfalar sanki hâlâ oturumunuz açıkmış gibi görünebilir.",
'welcomecreation' => '== Hoş geldin, $1! ==

Hesabınız açıldı.
[[Special:Preferences|{{SITENAME}} tercihlerinizi]] değiştirmeyi unutmayın.',
'yourname' => 'Kullanıcı adı:',
'yourpassword' => 'Parola:',
'yourpasswordagain' => 'Parolayı yeniden yaz:',
'remembermypassword' => 'Girişimi bu tarayıcıda hatırla (en fazla $1 {{PLURAL:$1|gün|gün}} için)',
'securelogin-stick-https' => "Giriş yaptıktan sonra HTTPS'e bağlı kal",
'yourdomainname' => 'Alan adınız:',
'password-change-forbidden' => 'Bu vikide parolanızı değiştiremezsiniz.',
'externaldberror' => 'Ya doğrulama veritabanı hatası var ya da kullanıcı hesabınızı güncellemeye yetkiniz yok.',
'login' => 'Oturum aç',
'nav-login-createaccount' => 'Oturum aç / hesap oluştur',
'loginprompt' => '{{SITENAME}} sitesinde oturum açabilmek için çerezleri etkinleştirmeniz gerekmektedir.',
'userlogin' => 'Oturum aç / hesap oluştur',
'userloginnocreate' => 'Giriş yap',
'logout' => 'Oturumu kapat',
'userlogout' => 'Oturumu kapat',
'notloggedin' => 'Oturum açık değil',
'nologin' => "Kayıtlı değil misiniz? '''$1'''",
'nologinlink' => 'Hesap oluşturun',
'createaccount' => 'Hesap oluştur',
'gotaccount' => "Çoktan kayıt oldunuz mu? '''$1'''.",
'gotaccountlink' => 'Oturum açın',
'userlogin-resetlink' => 'Giriş bilgilerinizi mi unuttunuz?',
'createaccountmail' => 'e-posta ile',
'createaccountreason' => 'Sebep:',
'badretype' => 'Girdiğiniz şifreler birbirleriyle uyuşmuyor.',
'userexists' => 'Girdiğiniz kullanıcı adı zaten kullanımda.
Lütfen farklı bir kullanıcı adı seçiniz.',
'loginerror' => 'Oturum açma hatası.',
'createaccounterror' => 'Hesap oluşturulamıyor: $1',
'nocookiesnew' => 'Kullanıcı hesabı oluşturuldu ama oturum açamadınız.
Oturum açmak için {{SITENAME}} çerezleri kullanır.
Çerez kullanımı devredışı.
Lütfen çerez kullanımını açınız ve yeni kullanıcı adınız ve şifrenizle oturum açınız.',
'nocookieslogin' => '{{SITENAME}} sitesinde oturum açabilmek için çerezlerinizin açık olması gerekiyor. Sizin çerezleriniz kapalı. Lütfen açınız ve bir daha deneyiniz.',
'nocookiesfornew' => 'Kullanıcı hesabı oluşturulamadı, sorunun kaynağını da tespit edemedik.
Çerezlerin açık olduğundan emin olun ve bu sayfayı yeniden yükleyip tekrar deneyin.',
'noname' => 'Geçerli bir kullanıcı adı girmediniz.',
'loginsuccesstitle' => 'Oturum açıldı',
'loginsuccess' => "'''{{SITENAME}} üzerinde \"\$1\" kullanıcı adıyla oturum açtınız.'''",
'nosuchuser' => '"$1" adında bir kullanıcı bulunmamaktadır.
Kullanıcı adları büyük-küçük harf duyarlıdır.
Yazılışı kontrol edin veya [[Special:UserLogin/signup|yeni bir hesap açın]].',
'nosuchusershort' => '"$1" adında bir kullanıcı bulunmamaktadır. Yazılışı kontrol edin.',
'nouserspecified' => 'Bir kullanıcı adı belirtmek zorundasınız.',
'login-userblocked' => 'Bu kullanıcı engellenmiş. Giriş yapmaya izin verilmiyor.',
'wrongpassword' => 'Parolayı yanlış girdiniz. Lütfen tekrar deneyiniz.',
'wrongpasswordempty' => 'Boş parola girdiniz. Lütfen tekrar deneyiniz.',
'passwordtooshort' => 'Parolalar en az {{PLURAL:$1|1 karakter|$1 karakter}} uzunluğunda olmalı.',
'password-name-match' => 'Şifreniz kullanıcı adınızdan farklı olmalıdır.',
'password-login-forbidden' => 'Bu kullanıcı adı ve şifre kullanımı yasaklanmıştır',
'mailmypassword' => 'Bana e-posta ile yeni parola gönder',
'passwordremindertitle' => '{{SITENAME}} için yeni geçici şifre',
'passwordremindertext' => 'Birisi (muhtemelen siz, $1 IP adresinden) {{SITENAME}} ($4) için yeni bir parola gönderilmesi istedi. "$2" kullanıcısına geçici olarak "$3" parolası oluşturuldu. Eğer bu sizin isteğiniz ise, oturum açıp yeni bir parola oluşturmanız gerekmektedir. Geçici parolanızın süresi {{PLURAL:$5|1 gün|$5 gün}} içinde dolacaktır.

Parola değişimini siz istemediyseniz veya parolanızı hatırladıysanız ve artık parolanızı değiştirmek istemiyorsanız; bu mesajı önemsemeyerek eski parolanızı kullanmaya devam edebilirsiniz.',
'noemail' => '"$1" adlı kullanıcıya kayıtlı bir e-posta adresi yok.',
'noemailcreate' => 'Geçerli bir e-posta adresi sağlamalısınız',
'passwordsent' => '"$1" adına kayıtlı e-posta adresine yeni bir parola gönderildi. Oturumu, lütfen, iletiyi aldıktan sonra açın.',
'blocked-mailpassword' => 'Siteye erişiminiz engellenmiş olduğundan, yeni şifre gönderilme işlemi yapılamamaktadır.',
'eauthentsent' => 'Kaydedilen adrese onay kodu içeren bir e-posta gönderildi.
E-postadaki yönerge uygulanıp adresin size ait olduğu onaylanmadıkça başka e-posta gönderilmeyecek.',
'throttled-mailpassword' => 'Parola hatırlatıcı son {{PLURAL:$1|bir saat|$1 saat}} içinde zaten gönderildi.
Hizmeti kötüye kullanmayı önlemek için, her {{PLURAL:$1|bir saatte|$1 saatte}} sadece bir parola hatırlatıcısı gönderilecektir.',
'mailerror' => 'E-posta gönderim hatası: $1',
'acct_creation_throttle_hit' => 'Sizin IP adresinizi kullanarak bu vikiyi ziyaret edenler son günde {{PLURAL:$1|1 hesap|$1 hesap}} oluşturdu, bu sayı bu zaman aralığında izin verilen azami sayıdır.
Sonuç olarak, bu IP adresini kullanan ziyaretçiler şu anda daha fazla hesap açamazlar.',
'emailauthenticated' => 'E-posta adresiniz $2 $3 tarihinde doğrulandı.',
'emailnotauthenticated' => 'E-posta adresiniz henüz onaylanmadı.
Aşağıdaki işlevlerin hiçbiri için e-posta gönderilmeyecektir.',
'noemailprefs' => 'Bu özelliklerin çalışması için bir e-posta adresi belirtiniz.',
'emailconfirmlink' => 'E-posta adresinizi doğrulayın',
'invalidemailaddress' => 'Geçersiz bir formatta yazıldığından dolayı bu e-posta adresi kabul edilemez.
Lütfen geçerli bir formatta e-posta adresi yazın veya bu bölümü boş bırakın.',
'cannotchangeemail' => 'Hesabın e-posta adresi bu wiki üzerinden değiştirilemez.',
'emaildisabled' => 'Bu siteden e-posta gönderemezsiniz.',
'accountcreated' => 'Hesap açıldı',
'accountcreatedtext' => '$1 için bir kullanıcı hesabı açıldı.',
'createaccount-title' => '{{SITENAME}} için yeni kullanıcı hesabı oluşturulması',
'createaccount-text' => 'Birisi {{SITENAME}} sitesinde ($4) sizin e-posta adresinizi kullarak, şifresi "$3" olan, "$2" isimli bir hesap oluşturdu.

Siteye giriş yapmalı ve parolanızı değiştirmelisiniz.

Eğer kullanıcı hesabını yanlışlıkla oluşturmuş iseniz, bu mesajı yoksayabilirsiniz.',
'usernamehasherror' => 'Kullanıcı adı karma karakterler içeremez',
'login-throttled' => 'Yakın zamanda çok fazla oturum açma denemesinde bulundunuz.
Lütfen tekrar denemeden önce bekleyin.',
'login-abort-generic' => 'Girişiniz başarısız - iptal edilmiş',
'loginlanguagelabel' => 'Dil: $1',
'suspicious-userlogout' => 'Çıkış isteğiniz reddedildi çünkü bozuk bir tarayıcı ya da önbellekli vekil tarafından gönerilmiş gibi görünüyor.',

# E-mail sending
'php-mail-error-unknown' => "PHP's mail() fonksiyonunda bilinmeyen hata",
'user-mail-no-addy' => 'Bir e-posta adresi olmadan e-posta göndermeye çalıştı.',

# Change password dialog
'resetpass' => 'Parolayı değiştir',
'resetpass_announce' => 'Size gönderilen muvakkat bir parola ile oturum açtınız.
Girişi bitirmek için, burada yeni bir parola yazın:',
'resetpass_text' => '<!-- Metini buraya ekleyin -->',
'resetpass_header' => 'Hesap şifresini değiştir',
'oldpassword' => 'Eski parola',
'newpassword' => 'Yeni parola',
'retypenew' => 'Yeni parolayı tekrar girin',
'resetpass_submit' => 'Şifreyi ayarlayın ve oturum açın',
'resetpass_success' => 'Parolanız başarıyla değiştirildi! 
Şimdi oturumunuz açılıyor...',
'resetpass_forbidden' => 'Parolalar değiştirilememektedir',
'resetpass-no-info' => 'Bu sayfaya doğrudan erişmek için oturum açmanız gereklidir.',
'resetpass-submit-loggedin' => 'Parolayı değiştir',
'resetpass-submit-cancel' => 'İptal',
'resetpass-wrong-oldpass' => 'Geçersiz geçici veya güncel şifre.
Şifrenizi zaten başarıyla değiştirdiniz ya da yeni bir geçici şifre istediniz.',
'resetpass-temp-password' => 'Geçici parola:',

# Special:PasswordReset
'passwordreset' => 'Parola sıfırlama',
'passwordreset-text' => 'Hesap bilgilerinizin e-posta ile hatırlatılması için bu formu doldurunuz.',
'passwordreset-legend' => 'Şifreyi sıfırla',
'passwordreset-disabled' => 'Parola sıfırlamaları bu wiki üzerinde devre dışı bırakıldı.',
'passwordreset-pretext' => '{{PLURAL:$1||Aşağıdaki verilerden birini girin}}',
'passwordreset-username' => 'Kullanıcı adı:',
'passwordreset-domain' => 'Domain:',
'passwordreset-capture' => 'Sonuç e-postasını görüntüle?',
'passwordreset-capture-help' => 'Bu kutuyu işaretlerseniz, e-posta (geçici şifre ile) size ve yanı sıra kullanıcıya gönderiliyor.',
'passwordreset-email' => 'E-posta adresi:',
'passwordreset-emailtitle' => '{{SITENAME}} hesap detayları',
'passwordreset-emailtext-ip' => 'Birisi, (muhtemelen siz, $1 IP adresinden) {{SITENAME}} ($4) için hesap bilgilerinizin 
hatırlatılmasını istedi. Aşağıdaki kullanıcı {{PLURAL:$3|hesabı|hesapları}} bu e-posta adresiyle ilişkili:

$2

{{PLURAL:$3|Bu geçici şifre|Bu geçici şifreler}} {{PLURAL:$5|bir gün|$5  gün}} geçerlidir.
Bu geçici parola ile giriş yapın ve yeni bir şifre seçin. Şifre değişimini siz istemediyseniz veya şifrenizi hatırladıysanız ve artık şifrenizi değiştirmek istemiyorsanız; bu iletiyi önemsemeyerek eski şifrenizi kullanmaya devam edebilirsiniz.',
'passwordreset-emailtext-user' => '$1 adlı kullanıcı, {{SITENAME}} ($4) için hesap bilgilerinizin hatırlatılmasını istedi. Aşağıdaki kullanıcı {{PLURAL:$3|hesabı|hesapları}} bu e-posta adresiyle ilişkili:

$2

{{PLURAL:$3|Bu geçici şifre|Bu geçici şifreler}} {{PLURAL:$5|bir gün|$5  gün}} geçerlidir.
Bu geçici parola ile giriş yapın ve yeni bir şifre seçin. Bu talep bir başkasına aitse veya şifrenizi hatırladıysanız ve artık şifrenizi değiştirmek istemiyorsanız; bu iletiyi önemsemeyerek eski şifrenizi kullanmaya devam edebilirsiniz.',
'passwordreset-emailelement' => 'Kullanıcı adı: $1
Geçici şifre: $2',
'passwordreset-emailsent' => 'Hatırlatma e-postası gönderildi.',
'passwordreset-emailsent-capture' => 'Aşağıda gözüktüğü gibi bir hatırlatma e-postası gönderilmiştir.',
'passwordreset-emailerror-capture' => 'Aşağıda gözüktüğü gibi bir hatırlatma e-postası oluşturulmuştur ancak $1 adlı kullanıcıya gönderilememiştir.',

# Special:ChangeEmail
'changeemail' => 'E-posta adresini değiştir',
'changeemail-header' => 'Hesabın e-posta adresini değiştirin',
'changeemail-text' => 'E-posta adresinizi değiştirmek için bu formu doldurun. Değişikliği onaylamak için parolanızı girmeniz gerekecektir.',
'changeemail-no-info' => 'Bu sayfaya doğrudan ulaşabilmek için oturum açmış olmalısınız.',
'changeemail-oldemail' => 'Mevcut E-posta adresi:',
'changeemail-newemail' => 'Yeni E-posta adresi:',
'changeemail-none' => '(yok)',
'changeemail-submit' => "E-posta'yı değiştir",
'changeemail-cancel' => 'İptal',

# Edit page toolbar
'bold_sample' => 'Kalın yazı',
'bold_tip' => 'Kalın yazı',
'italic_sample' => 'Eğik yazı',
'italic_tip' => 'Eğik yazı',
'link_sample' => 'Bağlantı başlığı',
'link_tip' => 'İç bağlantı',
'extlink_sample' => 'http://www.example.com adres açıklaması',
'extlink_tip' => 'Dış bağlantı (Adresin önüne http:// koymayı unutmayın)',
'headline_sample' => 'Başlık metni',
'headline_tip' => '2. seviye başlık',
'nowiki_sample' => 'Biçimlendirilmeyecek metni buraya girin',
'nowiki_tip' => 'viki formatlamasını devre dışı bırak',
'image_sample' => 'Örnek.jpg',
'image_tip' => 'Gömülü dosya',
'media_sample' => 'Örnek.ogg',
'media_tip' => 'Dosya bağlantısı',
'sig_tip' => 'İmzanız ve zaman',
'hr_tip' => 'Yatay çizgi (çok sık kullanmayın)',

# Edit pages
'summary' => 'Özet:',
'subject' => 'Konu/başlık:',
'minoredit' => 'Küçük değişiklik',
'watchthis' => 'Bu sayfayı izle',
'savearticle' => 'Sayfayı kaydet',
'preview' => 'Önizleme',
'showpreview' => 'Önizlemeyi göster',
'showlivepreview' => 'Canlı ön izleme',
'showdiff' => 'Değişiklikleri göster',
'anoneditwarning' => "'''Uyarı:''' Oturum açmadınız.
IP adresiniz sayfanın değişiklik geçmişine kaydedilecektir.",
'anonpreviewwarning' => "''Giriş yapmadınız. Kaydederseniz, sayfanın değişiklik geçmişine IP adresiniz yazılır.''",
'missingsummary' => "'''Uyarı:''' Herhangi bir özet yazmadın.
Kaydet tuşuna tekrar basarsan sayfa özetsiz kaydedilecek.",
'missingcommenttext' => 'Lütfen aşağıda bir açıklama yazınız.',
'missingcommentheader' => "'''Hatırlatma:''' Bu yorum için bir konu/başlık sunmadınız. Eğer \"{{int: savearticle}}\" tuşuna tekrar basarsanız, değişikliğiniz konu/başlık olmadan kaydedilecektir.",
'summary-preview' => 'Ön izleme özeti:',
'subject-preview' => 'Konu/Başlık ön izlemesi:',
'blockedtitle' => 'Kullanıcı erişimi engellendi.',
'blockedtext' => '\'\'\'Kullanıcı adı veya IP adresiniz engellenmiştir.\'\'\'

Sizi engelleyen hizmetli: $1.<br />
Engelleme sebebi: \'\'$2\'\'.

* Engellenmenin başlangıcı: $8
* Engellenmenin bitişi: $6
* Engellenme süresi: $7

Belirtilen nedene göre engellenmenizin uygun olmadığını düşünüyorsanız, $1 ya da başka bir [[{{MediaWiki:Grouppage-sysop}}|hizmetli]] ile bu durumu görüşebilirsiniz. [[Special:Preferences|Tercihlerim]] kısmında geçerli bir e-posta adresi girmediyseniz "Kullanıcıya e-posta gönder" özelliğini kullanamazsınız, tercihlerinize e-posta adresinizi eklediğinizde e-posta gönderme hakkına sahip olacaksınız.
<br />Şu anki IP adresiniz $3, engellenme numaranız #$5.
<br />Bir hizmetliden durumunuz hakkında bilgi almak istediğinizde veya herhangi bir sorguda bu bilgiler gerekecektir, lütfen not ediniz.',
'autoblockedtext' => 'IP adresiniz otomatik olarak engellendi, çünkü $1 tarafından engellenmiş başka bir kullanıcı tarafından kullanılmaktaydı.
Belirtilen sebep şudur:

:\'\'$2\'\'

* Engellemenin başlangıcı: $8
* Engellemenin bitişi: $6
* Bloke edilmesi istenen: $7

Engelleme hakkında tartışmak için $1 ile veya diğer [[{{MediaWiki:Grouppage-sysop}}|hizmetlilerden]] biriyle irtibata geçebilirsiniz.

Not, [[Special:Preferences|kullanıcı tercihlerinize]] geçerli bir e-posta adresi kaydetmediyseniz  "kullanıcıya e-posta gönder" özelliğinden faydalanamayabilirsiniz ve bu özelliği kullanmaktan engellenmediniz.

Şu anki IP numaranız $3 ve engellenme ID\'niz #$5.
Lütfen yapacağınız herhangi bir sorguda yukarıdaki bütün detayları bulundurun.',
'blockednoreason' => 'sebep verilmedi',
'whitelistedittext' => 'Değişiklik yapabilmek için $1.',
'confirmedittext' => 'Sayfa değiştirmeden önce e-posta adresinizi onaylamalısınız. Lütfen [[Special:Preferences|tercihler]] kısmından e-postanızı ekleyin ve onaylayın.',
'nosuchsectiontitle' => 'Bölüm bulunamadı',
'nosuchsectiontext' => 'Bulunmayan bir konu başlığını değiştirmeyi denediniz.
Siz sayfayı görüntülerken taşınmış veya silinmiş olabilir.',
'loginreqtitle' => 'Oturum açmanız gerekiyor',
'loginreqlink' => 'oturum aç',
'loginreqpagetext' => 'Diğer sayfaları görmek için $1 olmalısınız.',
'accmailtitle' => 'Parola gönderildi.',
'accmailtext' => "[[User talk:$1|$1]] için rastgele oluşturulan parola $2 adresine gönderildi.

Bu yeni hesap için parola, giriş yapıldıktan sonra ''[[Special:ChangePassword|parolayı değiştir]]'' bölümünde değiştirilebilir.",
'newarticle' => '(Yeni)',
'newarticletext' => "Henüz varolmayan bir sayfaya konulmuş bir bağlantıya tıkladınız.
Sayfayı oluşturmak için aşağıdaki metin kutusunu kullanın. ([[{{MediaWiki:Helppage}}|yardım sayfasına]] bakınız).
Buraya yanlışlıkla geldiyseniz tarayıcınızın '''geri''' tuşuna tıklayın.",
'anontalkpagetext' => "----''Bu sayfa henüz bir kullanıcı hesabı oluşturmamış veya hesabını kullanmayan bir anonim kullanıcının mesaj sayfasıdır. Bu nedenle bu kişiyi belirtmek için rakamsal IP adresini kullanmak zorundayız. Bu gibi IP adresleri birçok kullanıcı tarafından paylaşılabilir. Eğer siz de bir anonim kullanıcıysanız ve size sizin ilginiz olmayan iletiler geliyorsa, lütfen diğer anonim kullanıcılarla olabilecek olan karmaşayı önlemek için [[Special:UserLogin/signup|bir hesap edinin]] veya [[Special:UserLogin|oturum açın]].''",
'noarticletext' => 'Bu sayfa şu anda boştur.
Bu başlığı [[Special:Search/{{PAGENAME}}|diğer sayfalarda arayabilir]],
<span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} ilgili kayıtları arayabilir],
ya da bu sayfayı [{{fullurl:{{FULLPAGENAME}}|action=edit}} değiştirebilirsiniz]</span>.',
'noarticletext-nopermission' => 'Bu sayfa şu anda boştur. 
Bu başlığı [[Special:Search/{{PAGENAME}}|diğer sayfalarda arayabilir]] ya da <span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} ilgili kayıtları tarayabilirsiniz].</span>',
'userpage-userdoesnotexist' => '"<nowiki>$1</nowiki>" kullanıcı hesabı kayıtlı değil. Bu sayfayı oluşturmak/değiştirmek istiyorsanız lütfen kontrol edin.',
'userpage-userdoesnotexist-view' => '"$1" kullanıcı hesabı kayıtlı değil.',
'blocked-notice-logextract' => 'Bu kullanıcı şuanda engellenmiş.
Son engelleme günlüğü girdisi referans için aşağıda sağlanmıştır:',
'clearyourcache' => "'''Not:''' Kaydettikten sonra değişiklikleri görmek için tarayıcınızın önbelleğini temizlemeniz gerekebilir.
* '''Firefox / Safari:''' ''Shift'' tuşuna basılıyken \"Yeniden yükle\"'ye tıklayın ya da \"Ctrl-F5\" ya da ''Ctrl-R'' yapın (Mac için '⌘-R'').
* '''Google Chrome:''' ''Ctrl-Shift-R'''ye basın. (Mac için ''⌘-Shift-R'')
* '''Internet Explorer:''' ''Ctrl'' basılıyken ''Yenile'''ye tıklayın ya da ''Ctrl-F5'' yapın.
* '''Opera:''' ''Araçlar → Tercihler'''den önbelliği temizleyin.",
'usercssyoucanpreview' => "'''İpucu:''' Kaydetmeden önce \"{{int:showpreview}}\"e tıklayarak yeni CSSinizi deneyin.",
'userjsyoucanpreview' => "'''İpucu:''' Kaydetmeden önce \"{{int:showpreview}}\"e tıklayarak yeni JavaScript'inizi test edin.",
'usercsspreview' => "'''Sadece kullanıcı CSS dosyanızın önizlemesini görüyorsun.''' '''Kullanıcı CSS dosyası henüz kaydolmadı!'''",
'userjspreview' => "'''Sadece test ediyorsun ya da önizleme görüyorsun - kullanıcı JavaScript'i henüz kaydolmadı.'''",
'sitecsspreview' => "'''Sadece kullanıcı CSS dosyanızın önizlemesini görüyorsunuz.''' 
'''Henüz kaydedilmedi!'''",
'sitejspreview' => "'''Sadece kullanıcı JavaScript kod dosyanızın önizlemesini görüyorsunuz.''' 
'''Henüz kaydedilmedi!'''",
'userinvalidcssjstitle' => "''Uyarı:''' \"\$1\" adıyla bir tema yoktur. tema-adı.css ve .js dosyalarının adları küçük harf ile yazması gerek, yani {{ns:user}}:Temel/'''V'''ector.css değil, {{ns:user}}:Temel/'''v'''ector.css.",
'updated' => '(Güncellendi)',
'note' => "'''Not: '''",
'previewnote' => "'''Bunun yalnızca bir ön izleme olduğunu unutmayın.'''
Yaptığınız değişiklikler henüz kaydedilmedi!",
'continue-editing' => 'Düzenlemeye devam et',
'previewconflict' => 'Bu önizleme metin düzenleme kutucuğunun üstünde, maddenin eğer değişikliklerinizi kaydetmeyi seçerseniz nasıl görüneceğini yansıtır.',
'session_fail_preview' => 'Özür dileriz. Oturum açılması ile ilgili veri kaybından kaynaklı değişikliğinizi kaydedemedik. Lütfen tekrar deneyiniz. Eğer bu yöntem işe yaramazsa oturumu kapatıp tekrar sisteme geri giriş yapınız.',
'session_fail_preview_html' => "'''Üzgünüz! Oturum verisinin kaybolmasından dolayı düzenlemenizi işleme geçiremeyeceğiz.'''

''Çünkü {{SITENAME}} sitesinde raw HTML etkindir, önizleme JavaScript saldırılarına önlem olarak gizlenmiştir.''

'''Eğer bu haklı bir düzenleme girişimiyse, lütfen yeniden deneyin. Eğer hala çalışmazsa, [[Special:UserLogout|çıkış yapıp]] yeniden oturum açmayı deneyin.'''",
'token_suffix_mismatch' => "'''Değişikliğiniz geri çevrildi çünkü alıcınız düzenleme kutucuğundaki noktalama işaretlerini bozdu.
Değişikliğiniz, sayfa metninde bozulmayı önlemek için geri çevrildi.
Eğer sorunlu bir web-tabanlı anonim proksi servisi kullanıyorsanız bu olay bazen gerçekleşebilir.'''",
'edit_form_incomplete' => "'''Değişiklik formu için bazı sunuculara erişilemedi; yaptığınız değişiklikler bozulmamıştır, gözden geçirip tekrar deneyiniz.'''",
'editing' => '"$1" sayfasını değiştirmektesiniz',
'creating' => 'Oluşturuluyor $1',
'editingsection' => '"$1" sayfasında bölüm değiştirmektesiniz',
'editingcomment' => '$1 değiştiriliyor (yeni bölüm)',
'editconflict' => 'Değişiklik çakışması: $1',
'explainconflict' => "Siz sayfayı değiştirirken başka biri de değişiklik yaptı.
Yukarıdaki yazı sayfanın şu anki halini göstermektedir.
Sizin değişiklikleriniz alta gösterilmiştir. Son değişiklerinizi yazının içine eklemeniz gerekecektir.
\"{{int:savearticle}}\"e bastığınızda '''sadece''' yukarıdaki yazı kaydedilecektir.",
'yourtext' => 'Sizin metniniz',
'storedversion' => 'Kaydedilmiş metin',
'nonunicodebrowser' => "'''UYARI: Tarayıcınız unicode uyumlu değil.
Sayfaları güvenle değiştirmenize izin vermek için: ASCII olmayan karakterler değiştirme kutusunda onaltılık kodlar olarak görünecektir.'''",
'editingold' => "'''DİKKAT: Sayfanın eski bir sürümünde değişiklik yapmaktasınız.
Kaydettiğinizde bu tarihli sürümden günümüze kadar olan değişiklikler yok olacaktır.'''",
'yourdiff' => 'Karşılaştırma',
'copyrightwarning' => "'''Lütfen dikkat:''' {{SITENAME}} sitesine yapılan bütün katkılar $2 sözleşmesi kapsamındadır (ayrıntılar için $1'a bakınız).
Yaptığınız katkının başka katılımcılar tarafından acımasızca değiştirilmesini ve sınırsızca başka yerlere dağıtılmasını istemiyorsanız, katkıda bulunmayınız.<br />
Ayrıca buraya katkıda bulunarak, bu katkının kendiniz tarafından yazıldığına ya da kamuya açık bir kaynaktan ya da başka bir özgür/ücretsiz kaynaktan kopyalandığına güvence vermiş oluyorsunuz. '''Buraya, telif sahibinin izni olmadan telif hakkı ile korunan eserleri eklemeyiz! '''",
'copyrightwarning2' => 'Lütfen, {{SITENAME}} sitesine bulunacağınız tüm katkıların diğer üyeler tarafından düzenlenebileceğini, değiştirilebileceğini ya da silinebileceğini hatırlayın. Yazılarınızın merhametsizce değiştirilebilmesine rıza göstermiyorsanız buraya katkıda bulunmayın. <br />
Ayrıca bu ekleyeceğiniz yazıyı sizin yazdığınızı ya da serbest kopyalama izni veren bir kaynaktan kopyaladığınızı bize taahhüt etmektesiniz (ayrıntılar için referans: $1).',
'longpageerror' => "'''Hata: Girdiğiniz metnin uzunluğu kabul edilebilir en fazla uzunluk olan {{PLURAL:$2|bir kilobayt|$2 kilobayt}}tan fazladır ve {{PLURAL:$1|bir kilobayt|$1 kilobayt}} büyüklüğündedir.'''
Değişikliğiniz kaydedilemez.",
'readonlywarning' => "'''DİKKAT: Bakım nedeni ile veritabanı şu anda kilitlidir. Bu sebeple değişiklikleriniz şu anda kaydedilememektedir. Yazdıklarınızı başka bir editöre alıp saklayabilir ve daha sonra tekrar buraya getirip kaydedebilirsiniz'''

Kilitleyen hizmetli şu açıklamayı eklemiştir: $1",
'protectedpagewarning' => "'''Uyarı: Bu sayfa koruma altına alınmıştır ve yalnızca hizmetli olanlar tarafından değiştirilebilir.'''
Son günlük girdisi referans amaçlı aşağıda verilmiştir:",
'semiprotectedpagewarning' => "'''Not:''' Bu sayfa sadece kayıtlı kullanıcı olanlar tarafından değiştirilebilir.
Son günlük girdisi referans amaçlı aşağıda verilmiştir:",
'cascadeprotectedwarning' => "'''UYARI:''' Bu sayfa sadece hizmetlilik yetkileri olan kullanıcıların değişiklik yapabileceği şekilde koruma altına alınmıştır. Çünkü  \"kademeli\" seçeneği aktif hale getirilerek koruma altına alınan {{PLURAL:\$1|sayfada|sayfada}} kullanılmaktadır:",
'titleprotectedwarning' => "'''Uyarı: Bu sayfa [[Special:ListGroupRights|özel hakları]] olanların oluşturabilmeleri için kilitlenmiştir.'''
Son günlük girdisi referans amaçlı aşağıda verilmiştir:",
'templatesused' => 'Bu sayfada kullanılan {{PLURAL:$1|şablon|şablonlar}}:',
'templatesusedpreview' => 'Bu önizlemede kullanılan {{PLURAL:$1|şablon|şablonlar}}:',
'templatesusedsection' => 'Bu bölümde kullanılan {{PLURAL:$1|şablon|şablonlar}}:',
'template-protected' => '(korumada)',
'template-semiprotected' => '(yarı-korumada)',
'hiddencategories' => 'Bu sayfa {{PLURAL:$1|1 gizli kategoriye|$1 gizli kategoriye}} mensuptur:',
'edittools' => '<!-- Buradaki metin düzenleme ve yükleme formlarının altında gösterilecektir. -->',
'nocreatetitle' => 'Sayfa oluşturulması sınırlandı',
'nocreatetext' => '{{SITENAME}}, yeni sayfa oluşturulabilmesini engelledi.
Geri giderek varolan sayfayı değiştirebilirsiniz ya da kayıtlı iseniz [[Special:UserLogin|oturum açabilir]], değilseniz [[Special:UserLogin|kayıt olabilirsiniz]].',
'nocreate-loggedin' => 'Yeni sayfalar oluşturmaya yetkiniz yok.',
'sectioneditnotsupported-title' => 'Bölüm değiştirmesi desteklenmiyor',
'sectioneditnotsupported-text' => 'Bölüm değiştirmesi bu sayfada desteklenmiyor.',
'permissionserrors' => 'İzin hataları',
'permissionserrorstext' => 'Aşağıdaki {{PLURAL:$1|sebep|sebepler}}den dolayı, bunu yapmaya yetkiniz yok:',
'permissionserrorstext-withaction' => 'Aşağıdaki {{PLURAL:$1|neden|nedenler}}den dolayı $2 yetkiniz yok:',
'recreate-moveddeleted-warn' => "'''Uyarı: Daha önceden silinmiş bir sayfayı tekrar oluşturuyorsunuz.'''

Sayfayı değiştirmeye devam etmenin uygun olup olmadığını düşünmelisiniz.
Sayfanın silme ve taşıma kaydı kolaylık için burada verilmiştir:",
'moveddeleted-notice' => 'Bu sayfa silinmiş.
Sayfanın silme ve taşıma kaydı referans için aşağıda verilmiştir.',
'log-fulllog' => 'Tam günlüğü gör',
'edit-hook-aborted' => 'Değişiklik çengelle durduruldu.
Bir açıklama verilmedi.',
'edit-gone-missing' => 'Sayfa güncellenemiyor.
Silinmiş görünüyor.',
'edit-conflict' => 'Değişiklik çakışması.',
'edit-no-change' => 'Değişikliğiniz yoksayıldı, çünkü metinde bir değişiklik yapılmadı.',
'edit-already-exists' => 'Yeni sayfa oluşturulamıyor.
Sayfa zaten mevcut.',
'defaultmessagetext' => 'Varsayılan mesaj metni',
'invalid-content-data' => 'Geçersiz içerik verisi',
'content-not-allowed-here' => '"$1" içeriğine, [[$2]] sayfasında izin verilmemekte.',

# Content models
'content-model-wikitext' => 'vikimetin',
'content-model-text' => 'düz metin',
'content-model-javascript' => 'JavaScript',
'content-model-css' => 'CSS',

# Parser/template warnings
'expensive-parserfunction-warning' => 'Uyarı: Bu sayfa çok fazla zengin derleyici fonksiyonu çağrısı içeriyor.

Bu $2 çağrıdan az olmalı, şu anda {{PLURAL:$1|1 çağrı var|$1 çağrı var}}.',
'expensive-parserfunction-category' => 'Çok fazla zengin derleyici fonksiyonu çağrısına sahip sayfalar',
'post-expand-template-inclusion-warning' => "'''Uyarı''': Şablon içeriği çok büyük.
Bazı şablonlar eklenemeyecek.",
'post-expand-template-inclusion-category' => 'Şablon içerme büyüklüğü sınırı aşılan sayfalar',
'post-expand-template-argument-warning' => "'''Uyarı:''' Bu sayfa çok fazla genişleme boyutuna sahip en az bir şablon değişkeni içeriyor.
Bu değişkenler atlandı.",
'post-expand-template-argument-category' => 'Geçersiz şablon değiştirgenleri içeren sayfalar',
'parser-template-loop-warning' => 'Şablon düğümü tespit edildi: [[$1]]',
'parser-template-recursion-depth-warning' => 'Şablon özyineleme yoğunluğu sınırı aşıldı ($1)',
'language-converter-depth-warning' => 'Dil çevirici derinlik sınırı aşıldı ($1)',
'node-count-exceeded-category' => 'Düğüm sayısı aşılan sayfalar',
'node-count-exceeded-warning' => 'Sayfa düğüm sayımı aşıldı',
'expansion-depth-exceeded-category' => 'Genişleme derinliği aşılan sayfalar',
'expansion-depth-exceeded-warning' => 'Sayfa genişletme derinliği aşıldı',
'parser-unstrip-loop-warning' => 'Yineleme döngüsü algılandı',

# "Undo" feature
'undo-success' => 'Bu değişiklik geri alınabilir. Lütfen aşağıdaki karşılaştırmayı kontrol edin, gerçekten bu değişikliği yapmak istediğinizden emin olun ve sayfayı kaydederek bir önceki değişikliği geriye alın.',
'undo-failure' => 'Değişikliklerin çakışması nedeniyle geri alma işlemi başarısız oldu.',
'undo-norev' => 'Değişiklik geri alınamaz çünkü ya silinmiş ya da varolmamaktadır.',
'undo-summary' => '$1 değişikliği [[Special:Contributions/$2|$2]] ([[User talk:$2|mesaj]]) tarafından geri alındı.',

# Account creation failure
'cantcreateaccounttitle' => 'Hesap açılamıyor',
'cantcreateaccount-text' => "Bu IP adresinden ('''$1''') kullanıcı hesabı oluşturulması [[User:$3|$3]] tarafından engellenmiştir.

$3 tarafından verilen sebep ''$2''",

# History pages
'viewpagelogs' => 'Bu sayfa ile ilgili kayıtları göster',
'nohistory' => 'Bu sayfanın geçmiş sürümü yok.',
'currentrev' => 'Güncel sürüm',
'currentrev-asof' => '$1 itibarı ile sayfanın şu anki hâli',
'revisionasof' => '$1 tarihindeki hâli',
'revision-info' => '$2 tarafından oluşturulmuş $1 tarihli sürüm',
'previousrevision' => '← Önceki hâli',
'nextrevision' => 'Sonraki hali →',
'currentrevisionlink' => 'en güncel halini göster',
'cur' => 'fark',
'next' => 'sonraki',
'last' => 'son',
'page_first' => 'ilk',
'page_last' => 'son',
'histlegend' => "Fark seçimi: Karşılaştırmayı istediğiniz 2 sürümün önündeki daireleri işaretleyip, \"{{int:Compareselectedversions}}\" düğmesine basın.<br />
Tanımlar: '''({{int:cur}})''' = son revizyon ile arasındaki fark, '''({{int:last}})''' = bir önceki revizyon ile arasındaki fark, '''{{int:minoreditletter}}''' = küçük değişiklik.",
'history-fieldset-title' => 'Geçmişe gözat',
'history-show-deleted' => 'Sadece silinenler',
'histfirst' => 'En eski',
'histlast' => 'En yeni',
'historysize' => '({{PLURAL:$1|1 bayt|$1 bayt}})',
'historyempty' => '(boş)',

# Revision feed
'history-feed-title' => 'Değişiklik geçmişi',
'history-feed-description' => 'Viki üzerindeki bu sayfanın değişiklik geçmişi.',
'history-feed-item-nocomment' => "$1, $2'de",
'history-feed-empty' => 'İstediğiniz sayfa bulunmamaktadır.
Sayfa vikiden silinmiş ya da ismi değiştirilmiş olabilir.
Konu ile alakalı diğer sayfaları bulmak için [[Special:Search|vikide arama yapmayı]] deneyin.',

# Revision deletion
'rev-deleted-comment' => '(düzenleme özeti silindi)',
'rev-deleted-user' => '(kullanıcı adı silindi)',
'rev-deleted-event' => '(kayıt işlemi silindi)',
'rev-deleted-user-contribs' => '[kullanıcı adı veya IP adresi çıkarıldı - değişiklik katkılardan gizlendi]',
'rev-deleted-text-permission' => "Bu sayfa revizyonu '''silinmiş'''.
[{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} Silme kayıtlarında] ayrıntıları bulunabilir.",
'rev-deleted-text-unhide' => "Bu sayfa revizyonu '''silinmiş'''.
[{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} Silme kayıtlarında] ayrıntıları bulunabilir.
Bir hizmetli olarak eğer devam ederseniz [$1 bu revizyonu hala görebilirsiniz].",
'rev-suppressed-text-unhide' => "Bu sayfa revizyonu '''bastırılmış'''.
[{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} Durdurma kayıtlarında] ayrıntıları bulunabilir.
Bir hizmetli olarak eğer devam ederseniz [$1 bu revizyonu hala görebilirsiniz].",
'rev-deleted-text-view' => "Bu sayfa revizyonu '''silinmiş'''.
Bir hizmetli olarak sayfayı görebilirsiniz; [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} silme kayıtlarında] ayrıntılar bulunabilir.",
'rev-suppressed-text-view' => "Bu sayfa revizyonu '''bastırılmış'''.
Bir hizmetli olarak sayfayı görebilirsiniz; [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} durdurma kayıtlarında] ayrıntılar bulunabilir.",
'rev-deleted-no-diff' => "Bu sayfa değişikliğini göremezsiniz çünkü revizyonlardan biri '''silinmiş'''.
[{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} Silme günlüğünde] ayrıntılar bulunabilir.",
'rev-suppressed-no-diff' => "Bu farkı göremezsiniz çünkü revizyonlardan birisi '''silinmiş'''.",
'rev-deleted-unhide-diff' => "Bu değişikliğinin revizyonlarından birisi '''silinmiş'''.
[{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} Silme günlüğünde] ayrıntılar bulunabilir.
Bir hizmetli olarak eğer devam ederseniz [$1 bu değişikliği hala görebilirsiniz].",
'rev-suppressed-unhide-diff' => "Bu değişikliğinin revizyonlarından birisi '''bastırılmış'''.
[{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} durdurma günlüğünde] ayrıntılar bulunabilir.
Bir hizmetli olarak eğer devam ederseniz [$1 bu değişikliği hala görebilirsiniz].",
'rev-deleted-diff-view' => "Bu değişikliğinin revizyonlarından birisi '''silinmiş'''.
Bir hizmetli olarak bu değişikliği görebilirsiniz; [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} silme günlüğünde] ayrıntılar bulunabilir.",
'rev-suppressed-diff-view' => "Bu değişikliğinin revizyonlarından birisi '''bastırılmış'''.
Bir hizmetli olarak bu değişikliği görebilirsiniz; [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} durdurma günlüğünde] ayrıntılar bulunabilir.",
'rev-delundel' => 'göster/gizle',
'rev-showdeleted' => 'göster',
'revisiondelete' => 'Sürümleri sil/geri getir',
'revdelete-nooldid-title' => 'Hedef sürüm geçersiz',
'revdelete-nooldid-text' => 'Bu fonksiyonu uygulamak için belirli hedef değişiklik veya değişikileriniz yok. Sunulmuş olan revizyon mevcut değil, veya mevcut revizyonu gizlemeye çalışıyorsunuz.',
'revdelete-nologtype-title' => 'Hiçbir kayıt tipi verilmedi',
'revdelete-nologtype-text' => 'Bu işlemi devreye sokmak için bir kayıt tipi belirtmediniz.',
'revdelete-nologid-title' => 'Geçersiz günlük girdisi',
'revdelete-nologid-text' => 'Bu fonksiyonu uygulamak için hiçbir kayıt tipi belirtilmedi veya belirtilen kayıt tipi mevcut değil.',
'revdelete-no-file' => 'Belirtilen dosya mevcut değil.',
'revdelete-show-file-confirm' => '"<nowiki>$1</nowiki>" dosyasının $2 $3 tarihli silinmiş bir revizyonunu görmek istediğinize emin misiniz?',
'revdelete-show-file-submit' => 'Evet',
'revdelete-selected' => "'''[[:$1]] sayfasının {{PLURAL:$2|seçili değişikliği|seçili değişiklikleri}}:'''",
'logdelete-selected' => "'''{{PLURAL:$1|Seçili kayıt olayı|Seçili kayıt olayları}}:'''",
'revdelete-text' => "'''Silinen revizyonlar ve olaylar hala sayfa geçmişinde ve günlüklerde görünecektir, fakat içeriğin parçaları umumi olarak erişilemeyecektir.'''
{{SITENAME}} sitesindeki diğer hizmetliler gizli içeriğe erişebilir ve ilave kısıtlamalar ayarlanmadıysa bu arayüz ile geri getirebilir.",
'revdelete-confirm' => 'Lütfen, bunu yapmak istediğinizi , sonuçlarını anladığınızı, ve bunu [[{{MediaWiki:Policy-url}}|ilkelere]] göre yapıyor olduğunuzu onaylayın.',
'revdelete-suppress-text' => "Saklama '''sadece''' aşağıdaki durumlar için kullanılmalıdır:
* Uygunsuz kişisel bilgi
*: ''ev adresleri ve telefon numaraları, sosyal güvenlik numaraları, vs.''",
'revdelete-legend' => 'Görünürlük kısıtlamaları ayarla',
'revdelete-hide-text' => 'Değişiklik yazısını gizle',
'revdelete-hide-image' => 'Dosya içeriğini gizle',
'revdelete-hide-name' => 'Olayı ve hedefi gizle',
'revdelete-hide-comment' => 'Özeti gösterme',
'revdelete-hide-user' => 'Değişikliği yapan kullanıcı adını/IP adresi gizle',
'revdelete-hide-restricted' => 'Verileri hizmetlilerle birlikte diğerlerinden de sakla',
'revdelete-radio-same' => '(değiştirme)',
'revdelete-radio-set' => 'Evet',
'revdelete-radio-unset' => 'Hayır',
'revdelete-suppress' => 'Verileri hem diğerlerinden hem de hizmetlilerden gizle',
'revdelete-unsuppress' => 'Geri döndürülmüş revizyonlardaki kısıtlamaları kaldır',
'revdelete-log' => 'Neden:',
'revdelete-submit' => 'Seçilen {{PLURAL:$1|sürüme|sürümlere}} uygula',
'revdelete-success' => "'''Revizyon görünürlüğü başarıyla güncellendi.'''",
'revdelete-failure' => "'''Revizyon görünürlüğü güncellenemiyor:'''
$1",
'logdelete-success' => "'''Günlük görünürlüğü başarıyla ayarlandı.'''",
'logdelete-failure' => "'''Günlük görünürlüğü ayarlanamadı:'''
$1",
'revdel-restore' => 'görünürlüğü değiştir',
'revdel-restore-deleted' => 'silinmiş revizyonlar',
'revdel-restore-visible' => 'görünür revizyonlar',
'pagehist' => 'Sayfa geçmişi',
'deletedhist' => 'Silinmiş geçmiş',
'revdelete-hide-current' => '$2 $1 tarihli öğe gizlenirken hata: bu güncel revizyon.
Gizlenemez.',
'revdelete-show-no-access' => '$2 $1 tarihli öğe gösterilirken hata: bu öğe "kısıtlı" olarak işaretlenmiş.
Erişiminiz yok.',
'revdelete-modify-no-access' => '$2 $1 tarihli öğe değiştirilirken hata: bu öğe "kısıtlı" olarak işaretlenmiş.
Erişiminiz yok.',
'revdelete-modify-missing' => "$1 ID'li öğe değiştirilirken hata: veritabanında kayıp!",
'revdelete-no-change' => "'''Uyarı:'''  $2 $1 tarihli öğe için zaten görünürlük ayarı istenmiş.",
'revdelete-concurrent-change' => '$2 $1 tarihli öğe değiştirilirken hata: öğenin durumu siz değiştirmeye çalışırken bir başkası tarafından değiştirilmiş görünüyor.
Lütfen günlükleri kontrol edin.',
'revdelete-only-restricted' => '$2 $1 tarihli öğe gizlenirken hata: Öğeleri, diğer gizleme seçeneklerinden birini seçmeden, hizmetli görünümden bastıramazsınız.',
'revdelete-reason-dropdown' => '*Genel silme nedenleri
** Telif hakkı ihlali
** Sakıncalı yorum veya kişisel bilgi 
** Sakıncalı kullanıcı adı
** Muhtemel iftira niteliğinde bilgiler',
'revdelete-otherreason' => 'Diğer/ek sebep:',
'revdelete-reasonotherlist' => 'Diğer sebep',
'revdelete-edit-reasonlist' => 'Silme nedenlerini değiştir',
'revdelete-offender' => 'Revizyon yazarı:',

# Suppression log
'suppressionlog' => 'Gizleme kayıtları',
'suppressionlogtext' => 'Aşağıdaki, hizmetlilerden gizlenen içerik içeren silinmelerin ve engellemelerin listesidir.
Şu anda işlevsel olan yasak ve engellemelerin listesi için [[Special:BlockList|IP engelleme listesine]] bakın.',

# History merging
'mergehistory' => 'Sayfa geçmişlerini takas et.',
'mergehistory-header' => 'Bu sayfa, bir kaynak sayfanın geçmiş revizyonlarını yeni bir sayfaya birleştirmenize olanak sağlar.
Bu değişikliğin geçmişe ait sayfa devamlılığını devam ettirdiğinden emin olun.',
'mergehistory-box' => 'İki sayfanın revizyonlarını birleştir:',
'mergehistory-from' => 'Kaynak sayfa:',
'mergehistory-into' => 'Hedef sayfa:',
'mergehistory-list' => 'Birleştirilebilir değişiklik geçmişi',
'mergehistory-merge' => '[[:$1]] için aşağıdaki revizyonlar [[:$2]] ile birleştirilebilir.
Sadece belirtilen zamanda ve öncesinde oluşturulan revizyonları birleştirmek için radyo düğmesi sütununu kullanın.
Gezinti bağlantılarının bu sütunu sıfırlayacağını unutmayın.',
'mergehistory-go' => 'Birleştirilebilir değişikilikleri göster',
'mergehistory-submit' => 'Revizyonları birleştir',
'mergehistory-empty' => 'Hiçbir sürüm birleştirilemez.',
'mergehistory-success' => '[[:$1]] sayfasının $3 {{PLURAL:$3|revizyonu|revizyonu}} başarıyla [[:$2]] içine birleştirildi.',
'mergehistory-fail' => 'Geçmiş birleştirmesi gerçekleştirlemiyor, lütfen sayfa ve zaman parametrelerini yeniden kontrol edin.',
'mergehistory-no-source' => 'Kaynak sayfa $1 bulunmamaktadır.',
'mergehistory-no-destination' => 'Hedef sayfa $1 bulunmamaktadır.',
'mergehistory-invalid-source' => 'Kaynak sayfanın geçerli bir başlığı olmalı.',
'mergehistory-invalid-destination' => 'Hedef sayfanın geçerli bir ismi olmalı.',
'mergehistory-autocomment' => '[[:$1]], [[:$2]] sayfasına birleştirildi',
'mergehistory-comment' => '[[:$1]] ile [[:$2]] birleştirildi: $3',
'mergehistory-same-destination' => 'Kaynak ve hedef sayfaları aynı olamaz',
'mergehistory-reason' => 'Sebep:',

# Merge log
'mergelog' => 'Birleştirme kaydı',
'pagemerge-logentry' => "[[$1]] ile [[$2]] birleştirildi ($3'e kadar olan revizyonlar)",
'revertmerge' => 'Ayır',
'mergelogpagetext' => 'Aşağıdaki liste, sayfaların geçmiş versiyonlarının birbirleriyle en son birleştirilmelerini içerir',

# Diffs
'history-title' => '"$1" sayfasının geçmişi',
'difference-title' => '"$1" sayfasının sürümleri arasındaki fark',
'difference-title-multipage' => '"$1" ile "$2" sayfaları arasındaki fark',
'difference-multipage' => '(Sayfalar arasındaki fark)',
'lineno' => '$1. satır:',
'compareselectedversions' => 'Seçilen sürümleri karşılaştır',
'showhideselectedversions' => 'Seçili sürümleri göster/gizle',
'editundo' => 'geri al',
'diff-multi' => '({{PLURAL:$2|Bir kullanıcı|$2 kullanıcı}} tarafından yapılan {{PLURAL:$1|bir ara revizyon|$1 ara revizyon}} gösterilmiyor)',
'diff-multi-manyusers' => '($2 kullancıdan fazla {{PLURAL:$2|kullanıcı|kullanıcı}} tarafından yapılan {{PLURAL:$1|bir ara revizyon|$1 ara revizyon}} gösterilmiyor)',

# Search results
'searchresults' => 'Arama sonuçları',
'searchresults-title' => '"$1" için arama sonuçları',
'searchresulttext' => '{{SITENAME}} içinde arama yapmak konusunda bilgi almak için [[{{MediaWiki:Helppage}}|{{int:help}}]] sayfasına bakabilirsiniz.',
'searchsubtitle' => '\'\'\'[[:$1]]\'\'\' için aradınız. ([[Special:Prefixindex/$1|"$1" ile başlayan tüm sayfalar]]{{int:pipe-separator}}[[Special:WhatLinksHere/$1|"$1"\' sayfasına bağlantısı olan tüm sayfalar]])',
'searchsubtitleinvalid' => 'Aranan: "$1"',
'toomanymatches' => 'Çok fazla eşleşme döndü, lütfen başka bir sorgu seçin',
'titlematches' => 'Madde adı eşleşiyor',
'notitlematches' => 'Hiçbir başlıkta bulunamadı',
'textmatches' => 'Sayfa metni eşleşiyor',
'notextmatches' => 'Hiçbir sayfada bulunamadı',
'prevn' => 'önceki {{PLURAL:$1|$1}}',
'nextn' => 'sonraki {{PLURAL:$1|$1}}',
'prevn-title' => 'Önceki $1 {{PLURAL:$1|sonuç|sonuç}}',
'nextn-title' => 'Sonraki $1 {{PLURAL:$1|sonuç|sonuç}}',
'shown-title' => 'Sayfa başına $1 {{PLURAL:$1|sonuç|sonuç}} göster',
'viewprevnext' => '($1 {{int:pipe-separator}} $2) ($3) gör',
'searchmenu-legend' => 'Arama seçenekleri',
'searchmenu-exists' => "'''Bu vikide \"[[:\$1]]\" adında bir sayfa mevcut'''",
'searchmenu-new' => "'''Bu vikide \"[[:\$1]]\" sayfasını oluştur!'''",
'searchhelp-url' => 'Help:İçindekiler',
'searchmenu-prefix' => '[[Special:PrefixIndex/$1|Bu ön ekle sayfalara göz at]]',
'searchprofile-articles' => 'İçerik sayfaları',
'searchprofile-project' => 'Yardım ve proje sayfaları',
'searchprofile-images' => 'Çokluortam',
'searchprofile-everything' => 'Her şey',
'searchprofile-advanced' => 'Gelişmiş',
'searchprofile-articles-tooltip' => '$1 içinde ara',
'searchprofile-project-tooltip' => '$1 içinde ara',
'searchprofile-images-tooltip' => 'Dosya ara',
'searchprofile-everything-tooltip' => 'Tüm içerikte ara (tartışma sayfaları dahil)',
'searchprofile-advanced-tooltip' => 'Özel ad alanlarında ara',
'search-result-size' => '$1 ({{PLURAL:$2|1 kelime|$2 kelime}})',
'search-result-category-size' => '{{PLURAL:$1|1 üye|$1 üye}} ({{PLURAL:$2|1 altkategori|$2 altkategori}}, {{PLURAL:$3|1 dosya|$3 dosya}})',
'search-result-score' => 'Uygunluk: $1%',
'search-redirect' => '($1 sayfasından yönlendirme)',
'search-section' => '($1 bölümü)',
'search-suggest' => 'Bunu mu demek istediniz: $1',
'search-interwiki-caption' => 'Kardeş projeler',
'search-interwiki-default' => '$1 sonuçlar:',
'search-interwiki-more' => '(daha çok)',
'search-relatedarticle' => 'ilgili',
'mwsuggest-disable' => 'AJAX önerilerini devre dışı bırak',
'searcheverything-enable' => 'Tüm ad alanlarında ara',
'searchrelated' => 'ilgili',
'searchall' => 'hepsi',
'showingresults' => "$2. sonuçtan başlayarak {{PLURAL:$1|'''1''' sonuç |'''$1''' sonuç }} aşağıdadır:",
'showingresultsnum' => "'''$2''' sonuçtan başlayarak {{PLURAL:$3|'''1''' sonuç|'''$3''' sonuç}} aşağıdadır:",
'showingresultsheader' => "'''$4''' için {{PLURAL:$5|'''$3''' sonuçtan '''$1'''i|'''$1 - $2''' arası '''$3''' sonuç}}",
'nonefound' => "'''Not''': Sadece bazı alan adları varsayılan olarak aranır.
Aramanızın başına '''all:''' önekini ekleyerek tüm içeriği aramayı (tartışma sayfalarını, şablonları vb. kapsayacak şekilde) deneyin veya önek olarak istenilen alan adını kullanın.",
'search-nonefound' => 'Sorguyla eşleşen bir sonuç yok.',
'powersearch' => 'Gelişmiş arama',
'powersearch-legend' => 'Gelişmiş arama',
'powersearch-ns' => 'Ad alanlarında ara:',
'powersearch-redir' => 'Yönlendirmeleri listele',
'powersearch-field' => 'Ara:',
'powersearch-togglelabel' => 'Seç:',
'powersearch-toggleall' => 'Hepsi',
'powersearch-togglenone' => 'Hiçbiri',
'search-external' => 'Dış arama',
'searchdisabled' => '{{SITENAME}} sitesinde arama yapma geçici olarak durdurulmuştur. Bu arada Google kullanarak {{SITENAME}} içinde arama yapabilirsiniz. Arama sitelerinde dizinlerin biraz eski kalmış olabileceğini göz önünde bulundurunuz.',

# Quickbar
'qbsettings' => 'Hızlı erişim sütun ayarları',
'qbsettings-none' => 'Hiçbiri',
'qbsettings-fixedleft' => 'Sola sabitlendi',
'qbsettings-fixedright' => 'Sağa sabitlendi',
'qbsettings-floatingleft' => 'Sola yaslanıyor',
'qbsettings-floatingright' => 'Sağa yaslanıyor',
'qbsettings-directionality' => 'Sabit, dilinizin komut dosyasının yönüne bağlı',

# Preferences page
'preferences' => 'Tercihler',
'mypreferences' => 'Tercihlerim',
'prefs-edits' => 'Değişiklik sayısı:',
'prefsnologin' => 'Oturum açık değil',
'prefsnologintext' => 'Kullanıcı tercihlerinizi ayarlamak için <span class="plainlinks">[{{fullurl:{{#Special:UserLogin}}|returnto=$1}} giriş yapmalısınız]</span>.',
'changepassword' => 'Parolayı değiştir',
'prefs-skin' => 'Görünüm',
'skin-preview' => 'Önizleme',
'datedefault' => 'Tercih yok',
'prefs-beta' => 'Beta özellikleri',
'prefs-datetime' => 'Tarih ve saat',
'prefs-labs' => 'Lab özellikleri',
'prefs-user-pages' => 'Kullanıcı sayfaları',
'prefs-personal' => 'Kullanıcı bilgileri',
'prefs-rc' => 'Son değişiklikler',
'prefs-watchlist' => 'İzleme listesi',
'prefs-watchlist-days' => 'İzleme listesinde görüntülenecek gün sayısı:',
'prefs-watchlist-days-max' => 'en fazla $1 {{PLURAL:$1|gün|gün}}',
'prefs-watchlist-edits' => 'Genişletilmiş izleme listesinde gösterilecek değişiklik sayısı:',
'prefs-watchlist-edits-max' => 'En fazla sayı: 1000',
'prefs-watchlist-token' => 'İzleme listesi nişanı:',
'prefs-misc' => 'Diğer ayarlar',
'prefs-resetpass' => 'Parolayı değiştir',
'prefs-changeemail' => "E-posta'yı değiştir",
'prefs-setemail' => 'E-posta adresini ayarlayın',
'prefs-email' => 'E-posta seçenekleri',
'prefs-rendering' => 'Görünüm',
'saveprefs' => 'Kaydet',
'resetprefs' => 'Ayarları ilk durumuna getir',
'restoreprefs' => 'Tüm varsayılan ayarları geri yükle',
'prefs-editing' => 'Sayfa yazma alanı',
'prefs-edit-boxsize' => 'Değiştirme penceresinin boyutu.',
'rows' => 'Satır',
'columns' => 'Sütun',
'searchresultshead' => 'Arama',
'resultsperpage' => 'Sayfada gösterilecek bulunan madde sayısı',
'stub-threshold' => '<a href="#" class="stub">Taslak bağlantısı</a> formatı için baraj (bayt):',
'stub-threshold-disabled' => 'Devre dışı',
'recentchangesdays' => 'Son değişikliklerde gösterilecek günler:',
'recentchangesdays-max' => '(en fazla $1 {{PLURAL:$1|gün|gün}})',
'recentchangescount' => 'Varsayılan olarak gösterilecek değişiklik sayısı:',
'prefs-help-recentchangescount' => 'Bu, son değişiklikleri, sayfa geçmişlerini ve günlükleri içerir.',
'prefs-help-watchlist-token' => 'Bu alanı gizli bir anahtarla doldurmak, izleme listeniz için bir RSS beslemesi oluşturur.
Bu alandaki anahtarı bilen herkes izleme listenizi okuyabilir, bu yüzden güvenli bir değer seçin.
Kullanabileceğiniz rastgele-üretilmiş bir değer: $1',
'savedprefs' => 'Tercihleriniz kaydedildi.',
'timezonelegend' => 'Zaman dilimi:',
'localtime' => 'Yerel saat:',
'timezoneuseserverdefault' => 'Viki varsayılanını kullanın ($1)',
'timezoneuseoffset' => 'Diğer (ofset belirtin)',
'timezoneoffset' => 'Ofset¹:',
'servertime' => 'Sunucu saati:',
'guesstimezone' => 'Tarayıcınız sizin yerinize doldursun',
'timezoneregion-africa' => 'Afrika',
'timezoneregion-america' => 'Amerika',
'timezoneregion-antarctica' => 'Antartika',
'timezoneregion-arctic' => 'Arktik',
'timezoneregion-asia' => 'Asya',
'timezoneregion-atlantic' => 'Atlantik Okyanusu',
'timezoneregion-australia' => 'Avustralya',
'timezoneregion-europe' => 'Avrupa',
'timezoneregion-indian' => 'Hint Okyanusu',
'timezoneregion-pacific' => 'Pasifik Okyanusu',
'allowemail' => 'Diğer kullanıcılar bana e-posta atabilsin',
'prefs-searchoptions' => 'Arama',
'prefs-namespaces' => 'İsim alanları',
'defaultns' => 'Aksi halde bu ad alanlarında ara:',
'default' => 'varsayılan',
'prefs-files' => 'Dosyalar',
'prefs-custom-css' => 'Özel CSS',
'prefs-custom-js' => 'Özel JS',
'prefs-common-css-js' => 'Tüm kaplamalar için paylaşılan CSS/JS:',
'prefs-reset-intro' => 'Bu sayfayı tercihlerinizi site varsayılanına döndürmek için kullanabilirsiniz. Bu geri alınamaz.',
'prefs-emailconfirm-label' => 'E-posta doğrulaması:',
'prefs-textboxsize' => 'Değiştirme penceresinin boyutu',
'youremail' => 'E-posta:',
'username' => 'Kullanıcı adı:',
'uid' => 'Kayıt numarası:',
'prefs-memberingroups' => '{{PLURAL:$1|Grup|Grup}} üyesi:',
'prefs-registration' => 'Kayıt zamanı:',
'yourrealname' => 'Gerçek adınız:',
'yourlanguage' => 'Dil:',
'yourvariant' => 'İçerik dili türevi:',
'prefs-help-variant' => 'Bu vikinin içeriğini görüntülemek için tercih ettiğiniz varyant veya ortografi.',
'yournick' => 'İmzalarda gözükmesini istediğiniz isim',
'prefs-help-signature' => 'Tartışma sayfalarındaki yorumlar "<nowiki>~~~~</nowiki>" ile imzalanmalıdır, bu imzanıza ve zaman damgasına dönüştürülür.',
'badsig' => 'Geçersiz ham imza; HTML etiketlerini kontrol edin.',
'badsiglength' => 'İmzanız çok uzun.
$1 {{PLURAL:$1|karakterin|karakterin}} altında olmalı.',
'yourgender' => 'Cinsiyet:',
'gender-unknown' => 'Belirtilmemiş',
'gender-male' => 'Erkek',
'gender-female' => 'Bayan',
'prefs-help-gender' => 'İsteğe bağlı: Yazılım tarafından doğru cinsiyet adreslemesi için kullanılır. Bu bilgi umumi olacaktır.',
'email' => 'E-posta',
'prefs-help-realname' => '* Gerçek isim (isteğe bağlı): eğer gerçek isminizi vermeyi seçerseniz, çalışmanızı size atfederken kullanılacaktır.',
'prefs-help-email' => 'E-posta adresi isteğe bağlıdır; ancak eğer parolanızı unutursanız e-posta adresinize yeni parola gönderilmesine olanak sağlar.',
'prefs-help-email-others' => 'Ayrıca kullanıcı sayfanızdaki bir bağlantı yoluyla diğer kullanıcıların size e-posta atmasına izin vermeyi seçebilirsiniz.
Diğer kullanıcılar sizinle bu yolla iletişime geçtiğinde e-posta adresiniz açıklanmaz.',
'prefs-help-email-required' => 'E-posta adresi gerekmektedir.',
'prefs-info' => 'Temel bilgiler',
'prefs-i18n' => 'Uluslararasılaştırma',
'prefs-signature' => 'İmza',
'prefs-dateformat' => 'Tarih biçemi',
'prefs-timeoffset' => 'Zaman ofseti',
'prefs-advancedediting' => 'Gelişmiş seçenekler',
'prefs-advancedrc' => 'Gelişmiş seçenekler',
'prefs-advancedrendering' => 'Gelişmiş seçenekler',
'prefs-advancedsearchoptions' => 'Gelişmiş seçenekler',
'prefs-advancedwatchlist' => 'Gelişmiş seçenekler',
'prefs-displayrc' => 'Görüntü seçenekleri',
'prefs-displaysearchoptions' => 'Görüntüleme seçenekleri',
'prefs-displaywatchlist' => 'Görüntüleme seçenekleri',
'prefs-diffs' => 'Farklar',

# User preference: e-mail validation using jQuery
'email-address-validity-valid' => 'E-posta adresi geçerli görünüyor',
'email-address-validity-invalid' => 'Geçerli bir e-posta adresi girin',

# User rights
'userrights' => 'Kullanıcı hakları yönetimi',
'userrights-lookup-user' => 'Kullanıcı gruplarını düzenle',
'userrights-user-editname' => 'Kullanıcı adı giriniz:',
'editusergroup' => 'Kullanıcı grupları düzenle',
'editinguser' => "'''[[User:$1|$1]]'''  $2 kullanıcısının yetkilerini değiştirmektesiniz",
'userrights-editusergroup' => 'Kullanıcı grupları düzenle',
'saveusergroups' => 'Kullanıcı grupları kaydet',
'userrights-groupsmember' => 'İçinde olduğu gruplar:',
'userrights-groupsmember-auto' => 'Saklı olarak içinde olduğu gruplar:',
'userrights-groups-help' => 'Bu kullanıcının içinde olduğu grupları değiştirebilirsiniz:
* Seçili bir kutu, kullanıcının o gruba dahil olduğu anlamına gelir
* Seçilmemiş bir kutu, kullanıcının o grupta olmadığı anlamına gelir.
* *, grubu bir kez oluşturduktan sonra silemeceğinizi belirtir, ya da karşılıklı olarak.',
'userrights-reason' => 'Neden:',
'userrights-no-interwiki' => 'Diğer vikilerdeki kullanıcıların izinlerini değiştirmeye yetkiniz yok.',
'userrights-nodatabase' => '$1 veritabanı mevcut veya bölgesel değil',
'userrights-nologin' => 'Kullanıcı haklarını atamak için hizmetli hesabı ile [[Special:UserLogin|giriş yapmanız gerekir]].',
'userrights-notallowed' => 'Hesabınızın kullanıcı hakları eklemek veya kaldırmak için izni yok.',
'userrights-changeable-col' => 'Değiştirebildiğiniz gruplar',
'userrights-unchangeable-col' => 'Değiştirebilmediğiniz gruplar',

# Groups
'group' => 'Grup:',
'group-user' => 'Kullanıcılar',
'group-autoconfirmed' => 'Otomatik onaylanmış kullanıcılar',
'group-bot' => 'Botlar',
'group-sysop' => 'Hizmetliler',
'group-bureaucrat' => 'Bürokratlar',
'group-suppress' => 'Gözetmenler',
'group-all' => '(hepsi)',

'group-user-member' => '{{GENDER:$1|kullanıcı}}',
'group-autoconfirmed-member' => '{{GENDER:$1|otomatik onaylanmış kullanıcı}}',
'group-bot-member' => '{{GENDER:$1|bot}}',
'group-sysop-member' => '{{GENDER:$1|hizmetli}}',
'group-bureaucrat-member' => '{{GENDER:$1|bürokrat}}',
'group-suppress-member' => '{{GENDER:$1|gözetmen}}',

'grouppage-user' => '{{ns:project}}:Kullanıcılar',
'grouppage-autoconfirmed' => '{{ns:project}}:Otomatik onaylanmış kullanıcılar',
'grouppage-bot' => '{{ns:project}}:Botlar',
'grouppage-sysop' => '{{ns:project}}:Hizmetliler',
'grouppage-bureaucrat' => '{{ns:project}}:Bürokratlar',
'grouppage-suppress' => '{{ns:project}}:Gözetmen',

# Rights
'right-read' => 'Sayfaları oku',
'right-edit' => 'Sayfaları değiştir',
'right-createpage' => 'Sayfa oluştur (tartışma sayfası olmayan)',
'right-createtalk' => 'Tartışma sayfaları oluştur',
'right-createaccount' => 'Yeni kullanıcı hesapları yarat',
'right-minoredit' => 'Değişikliklerini küçük olarak kaydet',
'right-move' => 'Sayfaları taşı',
'right-move-subpages' => 'Sayfaları altsayfalarıyla beraber taşı',
'right-move-rootuserpages' => 'Kök kullanıcı sayfalarını taşı',
'right-movefile' => 'Dosyaları taşı',
'right-suppressredirect' => 'Bir sayfayı taşırken eski isimden yönlendirme oluşturma',
'right-upload' => 'Dosyaları yükle',
'right-reupload' => 'Mevcut dosyaların üstüne yaz',
'right-reupload-own' => 'Kendisinin yüklediği bir dosyanın üzerine yaz',
'right-reupload-shared' => 'Paylaşılan ortam deposundaki dosyaları yerel olarak geçersiz kıl',
'right-upload_by_url' => 'Bir URL adresinden dosya yükle',
'right-purge' => 'Doğrulama yapmadan bir sayfa için site belleğini temizle',
'right-autoconfirmed' => 'Yarı-korunumlu sayfaları değiştir',
'right-bot' => 'Otomatik bir işlem gibi muamele gör',
'right-nominornewtalk' => 'Kullanıcı tartışma sayfalarında yaptığı küçük değişiklikler kullanıcıya yeni mesaj bildirimiyle bildirilmez',
'right-apihighlimits' => 'API sorgularında yüksek sınır kullan',
'right-writeapi' => 'API yaz kullanımı',
'right-delete' => 'Sayfaları sil',
'right-bigdelete' => 'Uzun tarihli sayfaları sil',
'right-deleterevision' => 'Sayfaların belirli revizyonlarını sil ve geri yükle',
'right-deletedhistory' => 'Silinmiş geçmiş girdilerini gör, ilgili metinleri olmadan',
'right-deletedtext' => 'Silinmiş metni ve silinmiş revizyonlar arasındaki değişiklikleri gör',
'right-browsearchive' => 'Silinen sayfaları ara',
'right-undelete' => 'Bir sayfanın silinmesini geri al',
'right-suppressrevision' => 'Sysoplardan gizlenmiş revizyonları gözden geçir ve geri yükle',
'right-suppressionlog' => 'Özel günlükleri gör',
'right-block' => 'Diğer kullanıcıların değişiklik yapmalarını engelle',
'right-blockemail' => 'Bir kullanıcının e-posta göndermesini engelle',
'right-hideuser' => 'Bir kullanıcı adını engelle, genelden gizleyerek',
'right-ipblock-exempt' => 'IP engellemelerini atla, otomatik engelle ve aralık engellemeleri',
'right-proxyunbannable' => 'Proxylerin otomatik engellemelerini atla',
'right-unblockself' => 'Kendi engellemesini kaldır',
'right-protect' => 'Koruma seviyelerini değiştir ve korumalı sayfalarda değişiklik yap',
'right-editprotected' => 'Korumalı sayfalarda değişiklik yap (korumayı basamaklamadan)',
'right-editinterface' => 'Kullanıcı arayüzünü değiştirmek',
'right-editusercssjs' => 'Diğer kullanıcıların CSS ve JS dosyalarında değişiklik yap',
'right-editusercss' => 'Diğer kullanıcıların CSS dosyalarında değişiklik yap',
'right-edituserjs' => 'Diğer kullanıcıların JS dosyalarında değişiklik yap',
'right-rollback' => 'Belirli bir sayfayı değiştiren son kullanıcının değişikliklerini hızlıca geri döndür',
'right-markbotedits' => 'Geri döndürülen değişiklikleri, bot değişiklikleri olarak işaretle',
'right-noratelimit' => 'Derecelendirme sınırlamalarından etkilenme',
'right-import' => 'Diğer vikilerden sayfaları içeri aktar',
'right-importupload' => 'Bir dosya yüklemesinden sayfaları içeri aktar',
'right-patrol' => 'Diğerlerinin değişikliklerini kontrol edilmiş olarak işaretle',
'right-autopatrol' => 'Kişinin kendi değişikliklerinin otomatikman denetlendi olarak işaretlenmiş olması',
'right-patrolmarks' => 'Son değişiklikler gözleme işaretlerini gör',
'right-unwatchedpages' => 'İzlenmeyen sayfaların bir listesini gör',
'right-mergehistory' => 'Sayfalarının tarihlerini birleştir',
'right-userrights' => 'Tüm kullanıcı haklarını değiştirmek',
'right-userrights-interwiki' => 'Diğer vikilerdeki kullanıcıların kullanıcı haklarını değiştir',
'right-siteadmin' => 'Veritabanını kilitle ve kilidi aç',
'right-override-export-depth' => "Sayfaları, derinlik 5'e kadar bağlantılı sayfalarla beraber, dışa aktar",
'right-sendemail' => 'Diğer kullanıcılara e-posta gönder',
'right-passwordreset' => 'Parola sıfırlama e-postalarını görür',

# User rights log
'rightslog' => 'Kullanıcı hakları kayıtları',
'rightslogtext' => 'Kullanıcı hakları değişiklikleri kayıtları.',
'rightslogentry' => '$1 adlı kullanıcının yetkileri $2 iken $3 olarak değiştirildi',
'rightslogentry-autopromote' => '$2 otomatik olarak yükseltilerek $3 yapıldı.',
'rightsnone' => '(hiçbiri)',

# Associated actions - in the sentence "You do not have permission to X"
'action-read' => 'bu sayfayı okumaya',
'action-edit' => 'bu sayfayı değiştirmeye',
'action-createpage' => 'sayfa oluşturmaya',
'action-createtalk' => 'tartışma sayfası oluşturmaya',
'action-createaccount' => 'bu kullanıcı hesabını oluşturmaya',
'action-minoredit' => 'bu değişikliği küçük olarak işaretlemeye',
'action-move' => 'bu sayfayı taşımaya',
'action-move-subpages' => 'bu sayfayı ve altsayfalarını taşımaya',
'action-move-rootuserpages' => 'kök kullanıcı sayfalarını taşımaya',
'action-movefile' => 'bu dosyayı taşımaya',
'action-upload' => 'bu dosyayı yüklemeye',
'action-reupload' => 'bu mevcut dosyanın üzerine yazmaya',
'action-reupload-shared' => 'paylaşılan bir depoda bu dosyayı geçersiz kılmaya',
'action-upload_by_url' => 'bir URL adresinden bu dosyayı yüklemeye',
'action-writeapi' => 'API yaz kullanmaya',
'action-delete' => 'bu sayfayı silmeye',
'action-deleterevision' => 'bu revizyonu silmeye',
'action-deletedhistory' => 'bu sayfanın silinme geçmişini görmeye',
'action-browsearchive' => 'silinen sayfaları aramaya',
'action-undelete' => 'bu sayfanın silme işlemini geri almaya',
'action-suppressrevision' => 'bu gizli revizyonu gözden geçirip geri yüklemeye',
'action-suppressionlog' => 'bu özel günlüğü görmeye',
'action-block' => 'bu kullanıcının değişiklik yapmasını engellemeye',
'action-protect' => 'bu sayfa için koruma düzeylerini değiştirmeye',
'action-rollback' => 'Belirli bir sayfayı değiştiren son kullanıcının değişikliklerini hızlıca geri döndür',
'action-import' => 'bu sayfayı bir başka vikiden içeri aktarmaya',
'action-importupload' => 'bu sayfayı bir dosya yüklemesinden içeri aktarmaya',
'action-patrol' => 'diğerlerinin değişikliğini gözlenmiş olarak işaretlemeye',
'action-autopatrol' => 'değişikliğinizi gözlenmiş olarak işaretlemeye',
'action-unwatchedpages' => 'izlenmeyen sayfalar listesini görmeye',
'action-mergehistory' => 'bu sayfanın geçmişini birleştirmeye',
'action-userrights' => 'tüm kullanıcıların haklarını değiştirmeye',
'action-userrights-interwiki' => 'diğer vikilerde kullanıcıların, kullanıcı haklarını değiştirmeye',
'action-siteadmin' => 'veritabanını kilitleyip açmaya',
'action-sendemail' => 'e-posta gönder',

# Recent changes
'nchanges' => '$1 {{PLURAL:$1|değişiklik|değişiklik}}',
'recentchanges' => 'Son değişiklikler',
'recentchanges-legend' => 'Son değişiklikler seçenekleri',
'recentchanges-summary' => 'Yapılan en son değişiklikleri bu sayfadan izleyin.',
'recentchanges-feed-description' => "Bu beslemede, viki'de yapılan en son değişiklikleri takip edin.",
'recentchanges-label-newpage' => 'Bu değişiklik yeni bir sayfa oluşturdu',
'recentchanges-label-minor' => 'Bu küçük bir değişiklik',
'recentchanges-label-bot' => 'Bu değişiklik bir bot tarafından yapıldı',
'recentchanges-label-unpatrolled' => 'Bu değişiklik henüz gözlenmemiş',
'rcnote' => "$4 tarihi ve saat $5 itibarı ile, son {{PLURAL:$2|1 günde|'''$2''' günde}} yapılan, {{PLURAL:$1|'''1''' değişiklik|'''$1''' değişiklik}}, aşağıdadır.",
'rcnotefrom' => "'''$2''' tarihinden itibaren yapılan değişiklikler aşağıdadır (en fazla <b>$1</b> tanesi gösterilmektedir).",
'rclistfrom' => '$1 tarihinden itibaren yeni değişiklikleri göster',
'rcshowhideminor' => 'Küçük değişiklikleri $1',
'rcshowhidebots' => 'botları $1',
'rcshowhideliu' => 'Kayıtlı kullanıcıları $1',
'rcshowhideanons' => 'Anonim kullanıcıları $1',
'rcshowhidepatr' => 'İzlenmiş değişiklikleri $1',
'rcshowhidemine' => 'Değişikliklerimi $1',
'rclinks' => 'Son $2 günde yapılan son $1 değişikliği göster;<br /> $3',
'diff' => 'fark',
'hist' => 'geçmiş',
'hide' => 'gizle',
'show' => 'göster',
'minoreditletter' => 'k',
'newpageletter' => 'Y',
'boteditletter' => 'b',
'number_of_watching_users_pageview' => '[$1 izlenilen {{PLURAL:$1|kullanıcı|kullanıcı}}]',
'rc_categories' => 'Kategorilere sınırla ("|" ile ayır)',
'rc_categories_any' => 'Herhangi',
'rc-change-size-new' => '$1 {{PLURAL:$1|bayt|bayt}} değişiklikten sonra',
'newsectionsummary' => '/* $1 */ yeni başlık',
'rc-enhanced-expand' => 'Ayrıntıları göster (JavaScript gerekir)',
'rc-enhanced-hide' => 'Ayrıntıları gizle',
'rc-old-title' => 'ilk olarak oluşturulan "$1"',

# Recent changes linked
'recentchangeslinked' => 'İlgili değişiklikler',
'recentchangeslinked-feed' => 'İlgili değişiklikler',
'recentchangeslinked-toolbox' => 'İlgili değişiklikler',
'recentchangeslinked-title' => '"$1" ile ilişkili değişiklikler',
'recentchangeslinked-noresult' => 'Verilen dönemde bağlantılı sayfalarda değişiklik yok.',
'recentchangeslinked-summary' => "Aşağıdaki liste, belirtilen sayfaya (ya da belirtilen kategorinin üyelerine) bağlantı veren sayfalarda yapılan son değişikliklerin listesidir.
[[Special:Watchlist|İzleme listenizdeki]] sayfalar '''kalın''' olarak belirtilmiştir.",
'recentchangeslinked-page' => 'Sayfa adı:',
'recentchangeslinked-to' => 'Belirtilen sayfadan verilenler yerine, sayfaya verilen bağlantıları göster.',

# Upload
'upload' => 'Dosya yükle',
'uploadbtn' => 'Dosya yükle',
'reuploaddesc' => 'Yükleme formuna geri dön.',
'upload-tryagain' => 'Değiştirilmiş dosya açıklamasını gönder',
'uploadnologin' => 'Oturum açık değil',
'uploadnologintext' => 'Dosya yükleyebilmek için [[Special:UserLogin|oturum aç]]manız gerekiyor.',
'upload_directory_missing' => 'Yükleme dizini ($1) kayıp ve websunucusu tarafından oluşturulamıyor.',
'upload_directory_read_only' => 'Dosya yükleme dizinine ($1) web sunucusunun yazma izni yok.',
'uploaderror' => 'Yükleme hatası',
'upload-recreate-warning' => "'''Uyarı: Bu adı taşıyan bir dosya silindi veya taşındı.'''

Bu sayfanın silme ve taşıma günlüğü kolaylık için burada sağlanmıştır:",
'uploadtext' => "Dosya yüklemek için aşağıdaki formu kullanın.
Önceden yüklenmiş dosyaları görmek ya da aramak için [[Special:FileList|yüklenmiş dosyalar listesine]] bakın, (tekrar) yüklenenler [[Special:Log/upload|yükleme günlüğü]]nde, silinenler [[Special:Log/delete|silinme günlüğü]]nde tutulumaktadır.

Bir sayfaya dosya koymak için bağlantınızda aşağıdaki formlardan birini kullanın;
* Dosyanın tam sürümünü kullanmak için: '''<code><nowiki>[[</nowiki>{{ns:file}}<nowiki>:Dosya.jpg]]</nowiki></code>'''
* Sol kenarda bir kutu içinde, altında tanım olarak 'alt metin' ile, 200 piksel genişiğindeki sürümü kullanmak için: '''<code><nowiki>[[</nowiki>{{ns:file}}<nowiki>:Dosya.png|200px|thumb|left|alt metin]]</nowiki></code>'''
* Dosyayı göstermeden, dosyaya direk bağlantı vermek için: '''<code><nowiki>[[</nowiki>{{ns:media}}<nowiki>:Dosya.ogg]]</nowiki></code>'''",
'upload-permitted' => 'İzin verilen dosya türleri: $1.',
'upload-preferred' => 'Tercih edilen dosya türleri: $1.',
'upload-prohibited' => 'Yasaklanan dosya türleri: $1.',
'uploadlog' => 'yükleme kaydı',
'uploadlogpage' => 'Dosya yükleme kaydı',
'uploadlogpagetext' => 'Aşağıda en son eklenen [[Special:NewFiles|dosyaların bir listesi]] bulunmaktadır.',
'filename' => 'Dosya adı',
'filedesc' => 'Açıklama',
'fileuploadsummary' => 'Özet:',
'filereuploadsummary' => 'Dosya değişiklikleri:',
'filestatus' => 'Telif hakkı durumu:',
'filesource' => 'Kaynak:',
'uploadedfiles' => 'Yüklenen dosyalar',
'ignorewarning' => 'Uyarıyı önemsemeyip dosyayı yükle',
'ignorewarnings' => 'Uyarıyı önemseme',
'minlength1' => 'Dosya adı en az bir harften oluşmalıdır.',
'illegalfilename' => '"$1" dosya adı bazı kullanılmayan karekterler içermektedir. Lütfen, yeni bir dosya adıyla tekrar deneyin.',
'filename-toolong' => 'Dosya isimleri 240 bayttan uzun olamaz',
'badfilename' => 'Görüntü dosyasının ismi "$1" olarak değiştirildi.',
'filetype-mime-mismatch' => '".$1" dosya uzantısının, ($2) dosyasının MIME türüyle uyuşmadığı tespit edildi.',
'filetype-badmime' => '"$1" MIME tipindeki dosyaların yüklenmesine izin verilmez.',
'filetype-bad-ie-mime' => 'Bu dosya yüklenemez; çünkü Internet Explorer bunu, izin verilmeyen ve potansiyel zararlı dosya türü olan "$1" olarak tespit etmektedir.',
'filetype-unwanted-type' => "'''\".\$1\"''' istenmeyen bir dosya türüdür.  Önerilen {{PLURAL:\$3|dosya türü|dosya türleri}} \$2.",
'filetype-banned-type' => '\'\'\'".$1"\'\'\' {{PLURAL:$4|izin verilen bir dosya türü değil|izin verilen bir dosya türü değil}}. İzin verilen {{PLURAL:$3|dosya türü|dosya türleri}} $2.',
'filetype-missing' => 'Dosyanın hiçbir uzantısı yok (".jpg" gibi).',
'empty-file' => 'Gönderdiğiniz dosya boştu.',
'file-too-large' => 'Gönderdiğiniz dosya çok büyük.',
'filename-tooshort' => 'Dosya adı çok kısa.',
'filetype-banned' => 'Bu tür dosyalar yasaklanmıştır.',
'verification-error' => 'Bu dosya, dosya doğrulamasını geçemedi.',
'hookaborted' => 'Yapmaya çalıştığınız değişiklik bir uzantı çengeliyle iptal edildi.',
'illegal-filename' => 'Dosya adına izin verilmiyor.',
'overwrite' => 'Varolan dosyanın üzerine yazmaya izin verilmiyor.',
'unknown-error' => 'Bilinmeyen bir hata oluştu.',
'tmp-create-error' => 'Geçici dosya oluşturulamadı.',
'tmp-write-error' => 'Geçici dosya yazılırken hata.',
'large-file' => 'Dosyaların $1 boyutundan daha büyük olmaması önerilmektedir;
bu dosyanın boyutu $2.',
'largefileserver' => 'Bu dosyanın uzunluğu sunucuda izin verilenden daha büyüktür.',
'emptyfile' => 'Yüklediğiniz dosya boş görünüyor. Bunun sebebi dosya adındaki bir yazım hatası olabilir. Lütfen dosyayı gerçekten yüklemek isteyip istemediğinizden emin olun.',
'windows-nonascii-filename' => 'Bu viki dosya isimlerinde özel karakter kullanımını desteklemiyor',
'fileexists' => 'Bu isimde bir dosya mevcut.
Eğer değiştirmekten emin değilseniz ilk önce <strong>[[:$1]]</strong> dosyasına bir gözatın.
[[$1|thumb]]',
'filepageexists' => 'Bu dosya için açıklama sayfası <strong>[[:$1]]</strong> adresinde zaten oluşturulmuş, fakat bu isimde bir dosya şu anda mevcut değil.
Gireceğiniz özet açıklama sayfasında görünmeyecektir.
Özetinizin orada görünmesi için, bunu elle değiştirmelisiniz.
[[$1|küçük resim]]',
'fileexists-extension' => 'Benzer isimle başka bir dosya mevcut: [[$2|thumb]]
* Yüklenilen dosyanın adı: <strong>[[:$1]]</strong>
* Varolan dosyanın adı: <strong>[[:$2]]</strong>
Lütfen başka bir isim seçin',
'fileexists-thumbnail-yes' => "Bu dosya, bir resmi küçültülmüş sürümü gibi görünüyor ''(thumbnail)''. [[$1|thumb]]
Lütfen <strong>[[:$1]]</strong> dosyasını kontrol edin .
Eğer kontrol edilen dosya ile özgün boyutundaki aynı dosyaysa fazladan küçük resim yüklemeye gerek yoktur.",
'file-thumbnail-no' => "Bu dosyanın adı <strong>$1</strong> ile başlıyor.
Bu başka bir resim küçültülmüş sürümüne benziyor ''(thumbnail)''
Eğer sizde bu resmin tam çöznürlükteki sürümü varsa onu yükleyin, aksi takdirde lütfen dosya adını değiştirin.",
'fileexists-forbidden' => 'Bu isimde bir dosya zaten var, ve üzerine yazılamıyor.
Dosyanızı yinede yüklemek istiyorsanız, lütfen geri dönüp yeni bir isim kullanın. [[File:$1|thumb|center|$1]]',
'fileexists-shared-forbidden' => 'Bu isimde bir dosya ortak havuzda zaten mevcut.
Dosyanızı yinede yüklemek istiyorsanız, lütfen geri gidip yeni bir isim kullanın. [[File:$1|thumb|center|$1]]',
'file-exists-duplicate' => 'Bu dosya aşağıdaki {{PLURAL:$1|dosyanın|dosyaların}} kopyasıdır:',
'file-deleted-duplicate' => 'Bu dosyanın özdeşi olan başka bir dosya ([[:$1]]) daha önceden silindi. Bu dosyayı yeniden yüklemeden önce diğer dosyanın silme kayıtlarını kontrol etmelisiniz.',
'uploadwarning' => 'Yükleme uyarısı',
'uploadwarning-text' => 'Lütfen aşağıdaki dosya açıklamasını değiştirin ve tekrar deneyin.',
'savefile' => 'Dosyayı kaydet',
'uploadedimage' => 'Yüklenen: "[[$1]]"',
'overwroteimage' => '"[[$1]]" resminin yeni sürümü yüklenmiştir',
'uploaddisabled' => 'Geçici olarak şu anda herhangi bir dosya yüklenmez. Biraz sonra bir daha deneyiniz.',
'copyuploaddisabled' => 'URL ile yükleme devre dışı.',
'uploadfromurl-queued' => 'Yüklemeniz sıraya alınmıştır.',
'uploaddisabledtext' => 'Dosya yüklemeleri devredışı bırakılmıştır.',
'php-uploaddisabledtext' => 'PHP dosyası yüklemeleri devre dışıdır. Lütfen file_uploads ayarını kontrol edin.',
'uploadscripted' => 'Bu dosya bir internet tarayıcısı tarafından hatalı çevrilebilecek bir HTML veya script kodu içermektedir.',
'uploadvirus' => 'Bu dosya virüslüdür! Detayları: $1',
'uploadjava' => 'Dosya, bir Java .classdosyası içeren bir ZIP dosyasıdır.
Java dosyalarının yüklenmesine izin verilmemektedir, zira güvenlik kısıtlamalarının atlanmasına neden olabilmektedirler.',
'upload-source' => 'Kaynak dosyası',
'sourcefilename' => 'Yüklemek istediğiniz dosya:',
'sourceurl' => 'Kaynak URL:',
'destfilename' => 'Hedef dosya adı:',
'upload-maxfilesize' => 'En fazla dosya boyutu: $1',
'upload-description' => 'Dosya açıklaması',
'upload-options' => 'Yükleme seçenekleri',
'watchthisupload' => 'Bu dosyayı izle',
'filewasdeleted' => 'Bu isimde bir dosya yakın zamanda yüklendi ve ardından hizmetliler tarafından silindi. Dosyayı yüklemeden önce, $1 sayfasına bir göz atınız.',
'filename-bad-prefix' => "Yüklemekte olduğunuz dosyanın adı, genel olarak dijital kameralar tarafından otomatik olarak ekelenen ve açıklayıcı olmayan '''\"\$1\"''' ile başlamaktadır.
Lütfen dosyanız için daha açıklayıcı bir isim seçin.",
'filename-prefix-blacklist' => ' #<!-- leave this line exactly as it is --> <pre>
# Syntax is as follows:
#   * Everything from a "#" character to the end of the line is a comment
#   * Every non-blank line is a prefix for typical file names assigned automatically by digital cameras
CIMG # Casio
DSC_ # Nikon
DSCF # Fuji
DSCN # Nikon
DUW # some mobile phones
IMG # generic
JD # Jenoptik
MGP # Pentax
PICT # misc.
 #</pre> <!-- leave this line exactly as it is -->',
'upload-success-subj' => 'Yükleme başarılı',
'upload-success-msg' => '[$2] yüklemeniz başarılı oldu. Yüklemeniz burada mevcut: [[:{{ns:file}}:$1]]',
'upload-failure-subj' => 'Yükleme sorunu',
'upload-failure-msg' => '[$2] adresinden yapılan yüklemenizle ilgili bir sorun var:

$1',
'upload-warning-subj' => 'Yükleme uyarısı',
'upload-warning-msg' => '[$2] yüklemenizde bir sorun oluştu. Sorunu düzeltmek için [[Special:Upload/stash/$1|yükleme formuna]] geri dönebilirsiniz.',

'upload-proto-error' => 'Hatalı protokol',
'upload-proto-error-text' => "Uzaktan yükleme, <code>http://</code> veya <code>ftp://</code> ile başlayan URL'ler gerektirmektedir.",
'upload-file-error' => 'Dahili hata',
'upload-file-error-text' => 'Sunucuda geçici dosya oluşturma girişimi sırasında bir iç hata meydana geldi.
Lütfen bir [[Special:ListUsers/sysop|yonetici]]yle iletişime geçin.',
'upload-misc-error' => 'Bilinmeyen yükleme hatası',
'upload-misc-error-text' => 'Yükleme sırasında bilinmeyen bir hata meydana geldi.
Lütfen bağlantının geçerli ve ulaşılabilir olduğunu doğrulayın ve yeniden deneyin.
Eğer sorun tekrarlanırsa, bir [[Special:ListUsers/sysop|hizmetli]] ile temasa geçin',
'upload-too-many-redirects' => 'URL çok fazla yönlendirme içeriyor',
'upload-unknown-size' => 'Bilinmeyen boyut',
'upload-http-error' => 'Bir HTTP hatası oluştu: $1',

# File backend
'backend-fail-stream' => '$1 dosyası okunamadı.',
'backend-fail-notexists' => '$1 dosyası mevcut değil.',
'backend-fail-invalidpath' => '"$1" geçerli bir depolama yolu değil.',
'backend-fail-delete' => '"$1" dosyası silinemedi.',
'backend-fail-alreadyexists' => '"$1" dosyası zaten mevcut.',
'backend-fail-copy' => '"$1" dosyası, "$2" dosyasına kopyalanamadı.',
'backend-fail-move' => '"$1" dosyası, "$2" dosyasına taşınamadı.',
'backend-fail-opentemp' => 'Geçici dosya açılamadı.',
'backend-fail-writetemp' => 'Geçici dosya oluşturulamadı.',
'backend-fail-closetemp' => 'Geçici dosya kapanamadı.',
'backend-fail-read' => '$1 dosyası okunamadı.',
'backend-fail-create' => '$1 dosyası yazılamadı.',

# ZipDirectoryReader
'zip-file-open-error' => 'Dosya ZIP denetimleri için açılırken bir hata ile karşılaşıldı.',
'zip-wrong-format' => 'Belirtilen dosya ZIP dosyası değil.',
'zip-bad' => 'Dosya bozuk ya da başka bir nedenden dolayı okunamayan bir ZIP dosyası.
Güvenlik denetimi uygun şekilde gerçekleştirilemiyor.',
'zip-unsupported' => 'Dosya, MediaWiki tarafından desteklenmeyen ZIP özelliklerine sahip bir ZIP dosyası.
Güvenlik denetimi uygun bir şekilde gerçekleştirilemiyor.',

# Special:UploadStash
'uploadstash' => 'Geçici düzenlenebilir yükleme yap',
'uploadstash-summary' => "Bu sayfa yüklenmiş(veya yüklenmekte olan) ama henüz viki'de yayınlanmamış dosyalara erişmeyi sağlar. Bu dosyalar sadece yükleyeni tarafından görülebilir.",
'uploadstash-clear' => 'Geçici düzenlenebilir dosyaları sil',
'uploadstash-nofiles' => 'Hiç geçici düzenlenebilir dosyanız yok.',
'uploadstash-badtoken' => 'İşlemin gerçekleştirilmesi başarısız oldu, muhtemelen düzenleme yetkileriniz zaman aşımına uğradı. Yeniden deneyin.',
'uploadstash-errclear' => 'Dosyaların silinmesi başarısız oldu.',
'uploadstash-refresh' => 'Dosya listelerini yenile',
'invalid-chunk-offset' => 'Geçersiz öbek ofset',

# img_auth script messages
'img-auth-accessdenied' => 'Erişim engellendi',
'img-auth-nopathinfo' => 'Eksik PATH_INFO.
Sunucunuz bu bilgiyi geçirmek için ayarlanmamış.
CGI-tabanlı olabilir ve img_auth desteklenmiyor olabilir.
https://www.mediawiki.org/wiki/Manual:Image_Authorization sayfasına bakın.',
'img-auth-notindir' => 'İstenen yol yapılandırılmış yükleme dizininde değil.',
'img-auth-badtitle' => '"$1" ile geçerli bir başlık yapılamıyor.',
'img-auth-nologinnWL' => 'Giriş yapmadınız ve "$1" beyaz listede değil.',
'img-auth-nofile' => '"$1" dosyası mevcut değil.',
'img-auth-isdir' => '"$1" dizinine erişmeye çalışıyorsunuz.
Sadece dosya erişimine izin veriliyor.',
'img-auth-streaming' => '"$1" oynatılıyor.',
'img-auth-public' => "img_auth.php'nin fonksiyonu özel bir vikiden dosyaları çıkarmaktır.
Bu viki genel bir viki olarak ayarlanmış.
En uygun güvenlik için, img_auth.php devre dışı bırakıldı.",
'img-auth-noread' => 'Kullanıcının "$1" dosyasını okumaya erişimi yok.',
'img-auth-bad-query-string' => "URL'de geçersiz bir sorgu dizesi vardır.",

# HTTP errors
'http-invalid-url' => 'Geçersiz URL: $1',
'http-invalid-scheme' => '"$1" şemasına sahip URLler desteklenmiyor',
'http-request-error' => 'HTTP isteği bilinmeyen bir nedenle başarısız oldu.',
'http-read-error' => 'HTTP okuma hatası.',
'http-timed-out' => 'HTTP isteği zaman aşımına uğradı.',
'http-curl-error' => 'URL alınırken hata: $1',
'http-host-unreachable' => "URL'ye ulaşılamıyor.",
'http-bad-status' => 'HTTP isteği sırasında bir sorun oluştu: $1 $2',

# Some likely curl errors. More could be added from <http://curl.haxx.se/libcurl/c/libcurl-errors.html>
'upload-curl-error6' => "URL'ye ulaşılamadı",
'upload-curl-error6-text' => "Belirtilen URL'ye erişilemiyor.
Lütfen URL'nin doğru ve sitenin açık olduğunu kontrol edin.",
'upload-curl-error28' => 'Yüklemede zaman aşımı',
'upload-curl-error28-text' => 'Bu sitenin yanıt vermesi çok uzun sürüyor.
Lütfen sitenin açık olduğunu kontrol edin, kısa bir süre bekleyin ve yeniden deneyin.
Sitenin daha az meşgul olduğu bir zamanda denemek daha iyi olabilir.',

'license' => 'Lisans:',
'license-header' => 'Lisanslama',
'nolicense' => 'Hiçbirini seçme',
'license-nopreview' => '(Önizleme etkin değil)',
'upload_source_url' => ' (geçerli, herkesin ulaşabileceği bir URL)',
'upload_source_file' => ' (bilgisayarınızdaki bir dosya)',

# Special:ListFiles
'listfiles-summary' => 'Bu özel sayfa yüklenilen tüm dosyaları gösterir. 
Kullanıcı tarafından filtrelendiğinde, sadece o kullanıcı dosyanın en son sürümünü yüklediği dosyalar gösterilir.',
'listfiles_search_for' => 'Medya adı ara:',
'imgfile' => 'dosya',
'listfiles' => 'Dosya listesi',
'listfiles_thumb' => 'Küçük resim',
'listfiles_date' => 'Tarih',
'listfiles_name' => 'Ad',
'listfiles_user' => 'Kullanıcı',
'listfiles_size' => 'Boyut (bayt)',
'listfiles_description' => 'Tanım',
'listfiles_count' => 'Sürümler',

# File description page
'file-anchor-link' => 'Dosya',
'filehist' => 'Dosya geçmişi',
'filehist-help' => 'Dosyanın herhangi bir zamandaki hâli için ilgili tarih/saat kısmına tıklayın.',
'filehist-deleteall' => 'Hepsini sil',
'filehist-deleteone' => 'sil',
'filehist-revert' => 'geri al',
'filehist-current' => 'şimdiki',
'filehist-datetime' => 'Tarih/Saat',
'filehist-thumb' => 'Küçük resim',
'filehist-thumbtext' => '$1 tarihindeki sürümün küçültülmüş hâli',
'filehist-nothumb' => 'Küçük resim yok',
'filehist-user' => 'Kullanıcı',
'filehist-dimensions' => 'Boyutlar',
'filehist-filesize' => 'Dosya boyutu',
'filehist-comment' => 'Açıklama',
'filehist-missing' => 'Dosya kayıp',
'imagelinks' => 'Dosya kullanımı',
'linkstoimage' => 'Bu görüntü dosyasına bağlantısı olan {{PLURAL:$1|sayfa|$1 sayfa}}:',
'linkstoimage-more' => "$1'den fazla {{PLURAL:$1|sayfa|sayfa}} bu dosyaya bağlantı veriyor.
Sıradaki liste sadece bu dosyaya bağlantı veren {{PLURAL:$1|ilk dosyayı|ilk $1 dosyayı}} gösteriyor.
[[Special:WhatLinksHere/$2|Tam bir liste]] mevcuttur.",
'nolinkstoimage' => 'Bu dosyaya bağlantı veren bir sayfa yok.',
'morelinkstoimage' => 'Bu dosyaya [[Special:WhatLinksHere/$1|daha fazla bağlantıları]] gör.',
'linkstoimage-redirect' => '$1 (dosya yönlendirme) $2',
'duplicatesoffile' => 'Şu {{PLURAL:$1|dosya|$1 dosya}}, bu dosyanın kopyası ([[Special:FileDuplicateSearch/$2|daha fazla ayrıntı]]):',
'sharedupload' => 'Bu dosya $1 deposundan ve diğer projelerde kullanılıyor olabilir.',
'sharedupload-desc-there' => 'Bu dosya $1 deposundan ve diğer projeler tarafından kullanılıyor olabilir. Daha fazla bilgi için lütfen [$2 dosya açıklama sayfasına] bakın.',
'sharedupload-desc-here' => 'Bu dosya $1 deposundan ve diğer projeler tarafından kullanılıyor olabilir.
Aşağıda [$2 dosya açıklama sayfasındaki] açıklama gösteriliyor.',
'filepage-nofile' => 'Bu isimde bir dosya yok.',
'filepage-nofile-link' => 'Bu isimde bir dosya yok, ama siz [$1 yükleyebilirsiniz].',
'uploadnewversion-linktext' => 'Dosyanın yenisini yükleyin',
'shared-repo-from' => "$1'dan",
'shared-repo' => 'ortak bir havuz',

# File reversion
'filerevert' => '$1 dosyasını eski haline döndür',
'filerevert-legend' => 'Dosyayı eski haline döndür',
'filerevert-intro' => "'''[[Media:$1|$1]]''' medyasının [$4 $3, $2 tarihli sürüm]ünü geri getiriyorsunuz.",
'filerevert-comment' => 'Neden:',
'filerevert-defaultcomment' => '$2, $1 tarihli sürüme geri döndürüldü',
'filerevert-submit' => 'Eski haline döndür',
'filerevert-success' => "'''[[Media:$1|$1]]''' dosyası [$4 $3, $2 tarihli sürüme] geri döndürüldü.",
'filerevert-badversion' => 'Bu dosyanın verilen zaman bilgisine sahip önceki bir yerel sürümü yok.',

# File deletion
'filedelete' => 'Sil $1',
'filedelete-legend' => 'Dosya sil',
'filedelete-intro' => "'''[[Media:$1|$1]]''' dosyasını tüm geçmişiyle birlikte silmek üzeresiniz.",
'filedelete-intro-old' => "'''[[Media:$1|$1]]''' dosyasının [$4 $3, $2] tarihli sürümünü siliyorsunuz.",
'filedelete-comment' => 'Neden:',
'filedelete-submit' => 'sil',
'filedelete-success' => "'''$1''' silindi.",
'filedelete-success-old' => "'''[[Media:$1|$1]]''' dosyasının $3, $2 tarihli sürümü silindi.",
'filedelete-nofile' => "'''$1''' mevcut değildir.",
'filedelete-nofile-old' => "'''$1''' için belirtilen niteliklerde arşivlenmiş bir sürüm yok.",
'filedelete-otherreason' => 'Diğer/ilave gerekçe:',
'filedelete-reason-otherlist' => 'Başka neden',
'filedelete-reason-dropdown' => '*Genel silme gerekçeleri
** Telif hakları ihlali
** Çift/kopya dosya',
'filedelete-edit-reasonlist' => 'Silme nedenlerini değiştir',
'filedelete-maintenance' => 'Dosyaların silinmesi ve geri getirilmesi bakım süresince geçici olarak devre dışı bırakıldı.',
'filedelete-maintenance-title' => 'Dosya silinemiyor',

# MIME search
'mimesearch' => 'MIME araması',
'mimesearch-summary' => 'Bu sayfa, MIME türü dosyaların süzülmesini sağlar. Girdi: içeriktürü/alttürü, e.g. <code>resim/jpeg</code>.',
'mimetype' => 'MIME türü:',
'download' => 'yükle',

# Unwatched pages
'unwatchedpages' => 'İzlenmeyen sayfalar',

# List redirects
'listredirects' => 'Yönlendirmeleri listele',

# Unused templates
'unusedtemplates' => 'Kullanılmayan şablonlar',
'unusedtemplatestext' => 'Bu sayfa, {{ns:template}} alan adında bulunan ve diğer sayfalara eklenmemiş olan sayfaları listeler. Şablonlara olan diğer bağlantıları da kontrol etmeden silmeyiniz.',
'unusedtemplateswlh' => 'diğer bağlantılar',

# Random page
'randompage' => 'Rastgele sayfa',
'randompage-nopages' => 'Şu {{PLURAL:$2|ad alanında|ad alanlarında}} hiç bir sayfa yok: $1.',

# Random redirect
'randomredirect' => 'Rastgele yönlendirme',
'randomredirect-nopages' => '"$1" ad alanında hiç bir yönlendirme yok.',

# Statistics
'statistics' => 'İstatistikler',
'statistics-header-pages' => 'Sayfa istatistikleri',
'statistics-header-edits' => 'Değişiklik istatistikleri',
'statistics-header-views' => 'Görüntüleme istatistikleri',
'statistics-header-users' => 'Kullanıcı istatistikleri',
'statistics-header-hooks' => 'Diğer istatistikler',
'statistics-articles' => 'Maddeler',
'statistics-pages' => 'Sayfalar',
'statistics-pages-desc' => "Viki'deki tüm sayfalar, tartışma sayfaları, yönlendirmeler vs.",
'statistics-files' => 'Yüklenmiş dosyalar',
'statistics-edits' => '{{SITENAME}} kurulduğundan beri yapılan sayfa değişiklikleri',
'statistics-edits-average' => 'Her sayfadaki ortalama değişiklik',
'statistics-views-total' => 'Toplam görüntüleme',
'statistics-views-total-desc' => 'Varolmayan ve özel sayfaların görüntülenmeleri dahil edilmemiştir.',
'statistics-views-peredit' => 'Değişiklik başına görüntüleme',
'statistics-users' => 'Kayıtlı [[Special:ListUsers|kullanıcılar]]',
'statistics-users-active' => 'Aktif kullanıcılar',
'statistics-users-active-desc' => 'Son {{PLURAL:$1|gün|$1 günde}} çalışma yapan kullanıcılar',
'statistics-mostpopular' => 'En çok ziyaret edilen sayfalar',

'disambiguations' => 'Anlam ayrım sayfalarına bağlantısı olan sayfalar',
'disambiguationspage' => 'Template:Anlam ayrımı',
'disambiguations-text' => 'İlk satırda yer alan sayfalar bir anlam ayrım sayfasına iç bağlantı olduğunu gösterir. İkinci sırada yer alan sayfalar anlam ayrım sayfalarını gösterir. <br />Burada [[MediaWiki:Disambiguationspage]] tüm anlam ayrım şablonlarına bağlantılar verilmesi gerekmektedir.',

'doubleredirects' => 'Çift yönlendirmeler',
'doubleredirectstext' => 'Bu sayfa diğer yönlendirme sayfalarına yönlendirme yapan sayfaları listeler.
Her satırın içerdiği bağlantılar; birinci ve ikinci yönlendirme, ayrıca ikinci yönlendirmenin hedefi, ki bu genelde birinci yönlendirmenin göstermesi gereken "gerçek" hedef sayfasıdır.
<del>Üstü çizili</del> girdiler çözülmüştür.',
'double-redirect-fixed-move' => '[[$1]] taşındı, artık [[$2]] sayfasına yönlendiriyor',
'double-redirect-fixed-maintenance' => '[[$1]] - [[$2]] yapılan çift yönlendirme düzeltiliyor.',
'double-redirect-fixer' => 'Yönlendirme tamircisi',

'brokenredirects' => 'Boş yönlendirmeler',
'brokenredirectstext' => 'Aşağıdaki yönlendirmeler varolmayan sayfalara bağlantı veriyor:',
'brokenredirects-edit' => 'değiştir',
'brokenredirects-delete' => 'sil',

'withoutinterwiki' => 'Diğer dillere bağlantısı olmayan sayfalar',
'withoutinterwiki-summary' => 'Aşağıda listelenen sayfalar diğer dillere bağlantı içermemektedir:',
'withoutinterwiki-legend' => 'Önek',
'withoutinterwiki-submit' => 'Göster',

'fewestrevisions' => 'En az düzenleme yapılmış sayfalar',

# Miscellaneous special pages
'nbytes' => '$1 {{PLURAL:$1|bayt|bayt}}',
'ncategories' => '{{PLURAL:$1|kategori|kategoriler}}',
'nlinks' => '$1 {{PLURAL:$1|bağlantı|bağlantılar}}',
'nmembers' => '{{PLURAL:$1|üye|üye}}',
'nrevisions' => '{{PLURAL:$1|değişiklik|değişiklikler}}',
'nviews' => '$1 {{PLURAL:$1|görünüm|görünüm}}',
'nimagelinks' => '$1 {{PLURAL:$1|sayfada|sayfada}} kullanılıyor',
'ntransclusions' => '$1 {{PLURAL:$1|sayfada|sayfada}} kullanılıyor',
'specialpage-empty' => 'Bu rapor için hiç sonuç yok.',
'lonelypages' => 'Kendisine hiç bağlantı olmayan sayfalar',
'lonelypagestext' => 'Aşağıdaki sayfalara {{SITENAME}} sitesindeki diğer sayfalardan bağlantı verilmemiş ya da çapraz dahil edilmemişler.',
'uncategorizedpages' => 'Kategorisiz sayfalar',
'uncategorizedcategories' => 'Kategorisiz kategoriler',
'uncategorizedimages' => 'Kategorisiz dosyalar',
'uncategorizedtemplates' => 'Kategorisiz şablonlar',
'unusedcategories' => 'Kullanılmayan kategoriler',
'unusedimages' => 'Kullanılmayan dosyalar',
'popularpages' => 'Popüler sayfalar',
'wantedcategories' => 'İstenen kategoriler',
'wantedpages' => 'İstenen sayfalar',
'wantedpages-badtitle' => 'Sonuç kümesinde geçersiz başlık: $1',
'wantedfiles' => 'İstenen dosyalar',
'wantedtemplates' => 'İstenen şablonlar',
'mostlinked' => 'Kendisine en fazla bağlantı verilmiş sayfalar',
'mostlinkedcategories' => 'En çok maddeye sahip kategoriler',
'mostlinkedtemplates' => 'En çok kullanılan şablonlar',
'mostcategories' => 'En fazla kategoriye bağlanmış sayfalar',
'mostimages' => 'En çok bağlantı verilmiş dosyalar',
'mostinterwikis' => "En çok interwiki'ye sahip sayfalar",
'mostrevisions' => 'En çok değişikliğe uğramış sayfalar',
'prefixindex' => 'Önek ile tüm sayfalar',
'shortpages' => 'Kısa sayfalar',
'longpages' => 'Uzun sayfalar',
'deadendpages' => 'Başka sayfalara bağlantısı olmayan sayfalar',
'deadendpagestext' => 'Aşağıdaki sayfalar, {{SITENAME}} sitesinde diğer sayfalara bağlantı vermiyor.',
'protectedpages' => 'Koruma altındaki sayfalar',
'protectedpages-indef' => 'Sadece süresiz korumalar',
'protectedpages-cascade' => 'Sadece ardışık korumalar',
'protectedpagestext' => 'Aşağıdaki sayfalar koruma altına alınmıştır',
'protectedpagesempty' => 'Şu anda, bu parametrelerle korunan hiç bir sayfa yok.',
'protectedtitles' => 'Korunan başlıklar',
'protectedtitlestext' => 'Aşağıdaki başlıklar oluşturulmaya karşı korumalıdır',
'protectedtitlesempty' => 'Şu anda, bu parametrelerle korunan hiç bir başlık yok.',
'listusers' => 'Kullanıcı listesi',
'listusers-editsonly' => 'Sadece değişiklik yapan kullanıcıları göster',
'listusers-creationsort' => 'Oluşturma tarihine göre sırala',
'usereditcount' => '$1 {{PLURAL:$1|değişiklik|değişiklik}}',
'usercreated' => "$1 tarihinde $2'de {{GENDER:$3|oluşturuldu}}.",
'newpages' => 'Yeni sayfalar',
'newpages-username' => 'Kullanıcı adı:',
'ancientpages' => 'En son değişiklik tarihi en eski olan maddeler',
'move' => 'Taşı',
'movethispage' => 'Sayfayı taşı',
'unusedimagestext' => 'Aşağıdaki dosyalar mevcuttur ancak herhangi bir sayfada gömülü değildir.
Lütfen unutmayın ki, diğer web siteleri bir dosyaya doğrudan bir URL ile bağlantı verebilir, ve bu yüzden etkin kullanımda olmasa bile hala burada listenebilir.',
'unusedcategoriestext' => 'Aşağıda bulunan kategoriler mevcut olduğu halde, hiçbir madde ya da kategori tarafından kullanılmıyor.',
'notargettitle' => 'Hedef yok',
'notargettext' => 'Bu fonksiyonu uygulamak için bir hedef sayfası ya da kullanıcısı belirtmediniz.',
'nopagetitle' => 'Böyle bir hedef sayfası yok',
'nopagetext' => 'Belirttiğiniz hedef sayfası mevcut değil.',
'pager-newer-n' => '$1 daha yeni',
'pager-older-n' => '$1 daha eski',
'suppress' => 'Gözetim',
'querypage-disabled' => 'Bu özel sayfa, performansa dayalı nedenlerle devre dışı bırakılır.',

# Book sources
'booksources' => 'Kaynak kitaplar',
'booksources-search-legend' => 'Kitap kaynaklarını ara',
'booksources-go' => 'Git',
'booksources-text' => 'Aşağıdaki, yeni ve kullanılmış kitap satan diğer sitelere bağlantıların listesidir, ve aradığınız kitaplar hakkında daha fazla bilgiye sahip olabilirler:',
'booksources-invalid-isbn' => 'Verilen ISBN geçersiz gibi görünüyor; orijinal kaynaktan kopyalama hataları için kontrol edin.',

# Special:Log
'specialloguserlabel' => 'Kullanıcı:',
'speciallogtitlelabel' => 'Hedef (başlık ya da kullanıcı):',
'log' => 'Kayıtlar',
'all-logs-page' => 'Tüm umumi kayıtlar',
'alllogstext' => '{{SITENAME}} için mevcut tüm günlüklerin birleşik gösterimi.
Günlük tipini, kullanıcı adını (büyük-küçük harf duyarlı), ya da etkilenen sayfayı (yine büyük-küçük harf duyarlı) seçerek görünümü daraltabilirsiniz.',
'logempty' => 'Kayıtlarda eşleşen bilgi yok.',
'log-title-wildcard' => 'Bu metinle başlayan başlıklar ara',

# Special:AllPages
'allpages' => 'Tüm sayfalar',
'alphaindexline' => '$1 sayfasından $2 sayfasına kadar',
'nextpage' => 'Sonraki sayfa ($1)',
'prevpage' => 'Önceki sayfa ($1)',
'allpagesfrom' => 'Listelemeye başlanılacak harfler:',
'allpagesto' => 'Şununla biten sayfaları görüntüle:',
'allarticles' => 'Tüm maddeler',
'allinnamespace' => 'Tüm sayfalar ($1 sayfaları)',
'allnotinnamespace' => 'Tüm sayfalar ($1 alanında olmayanlar)',
'allpagesprev' => 'Önceki',
'allpagesnext' => 'Sonraki sayfa',
'allpagessubmit' => 'Getir',
'allpagesprefix' => 'Buraya yazdığınız harflerle başlayan sayfaları listeleyin:',
'allpagesbadtitle' => 'Girilen sayfa ismi diller arası bağlantı ya da vikiler arası bağlantı içerdiğinden geçerli değil. Başlıklarda kullanılması yasak olan bir ya da daha çok karakter içeriyor olabilir.',
'allpages-bad-ns' => '{{SITENAME}} sitesinde "$1" ad alanı yok.',
'allpages-hide-redirects' => 'Yönlendirmeleri gizle',

# SpecialCachedPage
'cachedspecial-refresh-now' => 'En son görünüm.',

# Special:Categories
'categories' => 'Kategoriler',
'categoriespagetext' => "Aşağıdaki {{PLURAL:$1|kategori|kategoriler}} sayfa veya ortam içerir.
[[Special:UnusedCategories|Kullanılmayan kategoriler]] burada gösterilmemektedir.
Ayrıca [[Special:WantedCategories|İstenen kategoriler]]'e bakınız.",
'categoriesfrom' => 'Şununla başlayan kategorileri görüntüle:',
'special-categories-sort-count' => 'sayılarına göre sırala',
'special-categories-sort-abc' => 'alfabetik olarak sırala',

# Special:DeletedContributions
'deletedcontributions' => 'Silinen kullanıcı katkıları',
'deletedcontributions-title' => 'Silinen kullanıcı katkıları',
'sp-deletedcontributions-contribs' => 'katkılar',

# Special:LinkSearch
'linksearch' => 'Dış bağlantı arama',
'linksearch-pat' => 'Motif ara:',
'linksearch-ns' => 'Ad alanı:',
'linksearch-ok' => 'Ara',
'linksearch-text' => '"*.wikipedia.org" gibi jokerler kullanılabilir.
En az bir üst-seviye alan gerekir, örneğin "*.org".<br />
Desteklenen iletişim kuralları: <code>$1</code> (bunların hiçbirini aramanıza eklemeyin).',
'linksearch-line' => "$1'e $2'den bağlantı verilmiş",
'linksearch-error' => 'Jokerler sadece ana makine adının başında görünebilir.',

# Special:ListUsers
'listusersfrom' => 'Şununla başlayan kullanıcıları görüntüle:',
'listusers-submit' => 'Göster',
'listusers-noresult' => 'Kullanıcı bulunamadı.',
'listusers-blocked' => '(engellenmiş)',

# Special:ActiveUsers
'activeusers' => 'Aktif kullanıcı listesi',
'activeusers-intro' => 'Bu, son $1 {{PLURAL:$1|günde|günde}} bir çeşit etkinlik göstermiş kullanıcıların listesidir.',
'activeusers-count' => 'Son {{PLURAL:$3|günde|$3 günde}} $1 {{PLURAL:$1|değişiklik|değişiklik}}',
'activeusers-from' => 'Şununla başlayan kullanıcıları görüntüle:',
'activeusers-hidebots' => 'Botları gizle',
'activeusers-hidesysops' => 'Yöneticileri gizle',
'activeusers-noresult' => 'Kullanıcı bulunamadı.',

# Special:Log/newusers
'newuserlogpage' => 'Yeni kullanıcı kayıtları',
'newuserlogpagetext' => 'En son kaydolan kullanıcı kayıtları.',

# Special:ListGroupRights
'listgrouprights' => 'Kullanıcı grubu hakları',
'listgrouprights-summary' => 'Aşağıdaki bu vikide tanımlanan kullanıcı gruplarının, ilgili erişim haklarıyla birlikte listesidir.
Bireysel haklarla ilgili [[{{MediaWiki:Listgrouprights-helppage}}|daha fazla bilgi]] olabilir.',
'listgrouprights-key' => '* <span class="listgrouprights-granted">Verilen hak</span>
* <span class="listgrouprights-revoked">Geri alınan hak</span>',
'listgrouprights-group' => 'grup',
'listgrouprights-rights' => 'Haklar',
'listgrouprights-helppage' => 'Help:Grup hakları',
'listgrouprights-members' => '(üyelerin listesi)',
'listgrouprights-addgroup' => '{{PLURAL:$2|Grup|Grup}} ekleyebilir: $1',
'listgrouprights-removegroup' => '{{PLURAL:$2|Grubu|Grupları}} kaldırabilir: $1',
'listgrouprights-addgroup-all' => 'Tüm grupları ekleyebilir',
'listgrouprights-removegroup-all' => 'Tüm grupları kaldırabilir',
'listgrouprights-addgroup-self' => 'Kendi hesabına {{PLURAL:$2|grup|gruplar}} ekleyebilir: $1',
'listgrouprights-removegroup-self' => 'Kendi hesabından {{PLURAL:$2|grup|grupları}} çıkarabilir: $1',
'listgrouprights-addgroup-self-all' => 'Kendi hesabına tüm grupları ekleyebilir',
'listgrouprights-removegroup-self-all' => 'Kendi hesabından tüm grupları çıkarabilir',

# E-mail user
'mailnologin' => 'Gönderi adresi yok.',
'mailnologintext' => 'Diğer kullanıcılara e-posta gönderebilmeniz için [[Special:UserLogin|oturum aç]]malısınız ve [[Special:Preferences|tercihler]] sayfasında geçerli bir e-posta adresiniz olmalı.',
'emailuser' => 'Bu kullanıcıya e-posta gönder',
'emailuser-title-target' => 'Bu {{GENDER:$1|kullanıcıya}} e-posta gönder',
'emailuser-title-notarget' => 'Kullanıcı e-posta',
'emailpage' => 'Kullanıcıya e-posta gönder',
'emailpagetext' => 'Bu kullanıcıya e-posta mesajı göndermek için aşağıdaki formu kullanabilirsiniz.
[[Special:Preferences|Kullanıcı tercihlerinizde]] girdiğiniz e-posta adresiniz, e-postanın "From (Kimden)" adresinde görünecektir, bu yüzden alıcı size direk cevap verebilecektir.',
'usermailererror' => 'E-posta hizmeti hata verdi:',
'defemailsubject' => '"$1" kullanıcısından {{SITENAME}} e-postası',
'usermaildisabled' => 'Kullanıcı e-postası devre dışı',
'usermaildisabledtext' => 'Bu vikide diğer kullanıcılara e-posta gönderemezsiniz',
'noemailtitle' => 'e-posta adresi yok',
'noemailtext' => 'Bu kullanıcı geçerli bir e-posta adresi belirtmemiş.',
'nowikiemailtitle' => 'E-postalara izin verilmiyor',
'nowikiemailtext' => 'Bu kullanıcı, diğer kullanıcılardan e-posta almamayı tercih etti.',
'emailnotarget' => 'Alıcı için varolmayan veya geçersiz kullanıcı adı.',
'emailtarget' => 'Alıcının kullanıcı adını giriniz',
'emailusername' => 'Kullanıcı Adı:',
'emailusernamesubmit' => 'Gönder',
'email-legend' => 'Diğer {{SITENAME}} kullanıcısına e-posta gönder',
'emailfrom' => 'Kimden:',
'emailto' => 'Kime:',
'emailsubject' => 'Konu:',
'emailmessage' => 'E-posta:',
'emailsend' => 'Gönder',
'emailccme' => 'Mesajın bir kopyasını da bana gönder.',
'emailccsubject' => "$1'e gönderdiğiniz mesajın kopyası: $2",
'emailsent' => 'E-posta gönderildi',
'emailsenttext' => 'E-postanız gönderildi.',
'emailuserfooter' => 'Bu e-posta $1 tarafından $2 kullanıcısına, {{SITENAME}} sitesindeki "Kullanıcıya e-posta gönder" fonksiyonu ile gönderilmiştir.',

# User Messenger
'usermessage-summary' => 'Sistem mesajı bırakın.',
'usermessage-editor' => 'Sistem habercisi',

# Watchlist
'watchlist' => 'İzleme listem',
'mywatchlist' => 'İzleme listem',
'watchlistfor2' => '$1 için $2',
'nowatchlist' => 'İzleme listesinde hiçbir madde bulunmuyor.',
'watchlistanontext' => 'Lütfen izleme listenizdeki maddeleri görmek ya da değiştirmek için $1.',
'watchnologin' => 'Oturum açık değil.',
'watchnologintext' => 'İzleme listenizi değiştirebilmek için [[Special:UserLogin|oturum açmalısınız]].',
'addwatch' => 'İzleme listesine ekle',
'addedwatchtext' => '"<nowiki>$1</nowiki>" adlı sayfa [[Special:Watchlist|izleme listenize]] kaydedildi.

Gelecekte, bu sayfaya ve ilgili tartışma sayfasına yapılacak değişiklikler burada listelenecektir.

Kolayca seçilebilmeleri için de [[Special:RecentChanges|son değişiklikler listesi]] başlığı altında koyu harflerle listeleneceklerdir.

Sayfayı izleme listenizden çıkarmak istediğinizde "sayfayı izlemeyi durdur" bağlantısına tıklayabilirsiniz.',
'removewatch' => 'İzleme listesinden kaldır',
'removedwatchtext' => '"[[:$1]]" sayfası [[Special:Watchlist|izleme listenizden]] silinmiştir.',
'watch' => 'İzle',
'watchthispage' => 'Sayfayı izle',
'unwatch' => 'İzleme',
'unwatchthispage' => 'Sayfa izlemeyi durdur',
'notanarticle' => 'İçerik sayfası değil',
'notvisiblerev' => 'Revizyon silinmiş',
'watchnochange' => 'İzleme listenizdeki sayfaların hiçbiri, gösterilen zaman aralığında güncellenmemiş.',
'watchlist-details' => 'Tartışma sayfaları hariç {{PLURAL:$1|$1 sayfa|$1 sayfa}} izleme listenizdedir.',
'wlheader-enotif' => '* E-posta ile haber verme açılmıştır.',
'wlheader-showupdated' => "* Son ziyaretinizden sonraki sayfa değişiklikleri '''kalın yazıyla''' gösterilmiştir.",
'watchmethod-recent' => 'izlediğiniz sayfalarda yapılan son değişiklikler kontrol ediliyor',
'watchmethod-list' => 'izlediğiniz sayfalarda yapılan son değişiklikler kontrol ediliyor',
'watchlistcontains' => 'İzleme listenizde $1 tane {{PLURAL:$1|sayfa|sayfa}} var.',
'iteminvalidname' => "'$1' öğesi ile sorun, geçersiz isim...",
'wlnote' => "$3 saat $4 itibariyle son {{PLURAL:$2|bir saatte|'''$2''' saatte}} yapılan {{PLURAL:$1|son değişiklik|son '''$1''' değişiklik}} aşağıdadır.",
'wlshowlast' => 'Son $1 saati $2 günü göster $3',
'watchlist-options' => 'İzleme listesi seçenekleri',

# Displayed when you click the "watch" button and it is in the process of watching
'watching' => 'İzleniyor...',
'unwatching' => 'İzlenmiyor...',
'watcherrortext' => 'İzleme listesi ayarlarınızı "$1" için değiştirirken bir hata oluştu.',

'enotif_mailer' => '{{SITENAME}} Bildirim Postası',
'enotif_reset' => 'Tüm sayfaları ziyaret edilmiş olarak işaretle',
'enotif_newpagetext' => 'Yeni bir sayfa.',
'enotif_impersonal_salutation' => '{{SITENAME}} kullanıcı',
'changed' => 'değiştirildi',
'created' => 'oluşturuldu',
'enotif_subject' => '{{SITENAME}} sayfası $PAGETITLE, $PAGEEDITOR tarafından $CHANGEDORCREATED',
'enotif_lastvisited' => "Son ziyaretinizden bu yana olan tüm değişiklikleri görmek için $1'e bakın.",
'enotif_lastdiff' => 'Bu değişikliği görmek için, $1 sayfasına bakınız.',
'enotif_anon_editor' => 'anonim kullanıcı $1',
'enotif_body' => 'Sayın $WATCHINGUSERNAME,

{{SITENAME}} bünyesindeki $PAGETITLE başlıklı sayfa $PAGEEDITDATE tarihinde $PAGEEDITOR tarafından $CHANGEDORCREATED. Sayfanın son haline $PAGETITLE_URL adresinden ulaşabilirsiniz.

$NEWPAGE

Değişikliği yapan kullanıcının açıklaması: $PAGESUMMARY $PAGEMINOREDIT

Sayfayı değiştiren kullanıcıya erişim bilgileri:
E-posta: $PAGEEDITOR_EMAIL
Viki: $PAGEEDITOR_WIKI

Bahsi geçen sayfayı ziyaret edinceye kadar sayfayla ilgili başka değişiklik bildirimi gönderilmeyecektir. İzleme listenizdeki tüm sayfalar bildirim durumlarını sıfırlayabilirsiniz.

              {{SITENAME}} sitesinin uyarı sistemi.

--
İzleme listesi ayarlarınızı değiştirmek için:
{{canonicalurl:{{#special:EditWatchlist}}}}

Sayfayı izleme listenizden silmek için:
$UNWATCHURL

Geri bildirim ve daha fazla yardım için:
{{canonicalurl:{{MediaWiki:Helppage}}}}',

# Delete
'deletepage' => 'Sayfayı sil',
'confirm' => 'Onayla',
'excontent' => "eski içerik: '$1'",
'excontentauthor' => "eski içerik: '$1' ('[[Special:Contributions/$2|$2]]' katkıda bulunmuş olan tek kullanıcı)",
'exbeforeblank' => "Silinmeden önceki içerik: '$1'",
'exblank' => 'sayfa içeriği boş',
'delete-confirm' => '"$1" sil',
'delete-legend' => 'sil',
'historywarning' => "'''Uyarı:''' Silmek üzere olduğunuz sayfanın yaklaşık olarak $1 {{PLURAL:$1|sürüme|sürüme}} sahip bir geçmişi var:",
'confirmdeletetext' => 'Bu sayfayı veya dosyayı tüm geçmişi ile birlikte veritabanından kalıcı olarak silmek üzeresiniz.
Bu işlemden kaynaklı doğabilecek sonuçların farkında iseniz ve işlemin [[{{MediaWiki:Policy-url}}|Silme kurallarına]] uygun olduğuna eminseniz, işlemi onaylayın.',
'actioncomplete' => 'İşlem tamamlandı',
'actionfailed' => 'İşlem başarısız oldu',
'deletedtext' => '"$1" silindi.
Yakın zamanda silinenleri görmek için: $2.',
'dellogpage' => 'Silme kayıtları',
'dellogpagetext' => 'Aşağıdaki liste son silme kayıtlarıdır.',
'deletionlog' => 'silme kayıtları',
'reverted' => 'Önceki sürüm geri getirildi',
'deletecomment' => 'Neden:',
'deleteotherreason' => 'Diğer/ilave neden:',
'deletereasonotherlist' => 'Diğer nedenler',
'deletereason-dropdown' => '*Genel silme gerekçeleri
** Sayfayı oluşturan kullanıcının isteği
** Telif hakkı ihlali
** Vandalizm',
'delete-edit-reasonlist' => 'Silme nedenlerini değiştir',
'delete-toobig' => 'Bu sayfa, $1 {{PLURAL:$1|tane değişiklik|tane değişiklik}} ile çok uzun bir geçmişe sahiptir.
Böyle sayfaların silinmesi, {{SITENAME}} sitesini bozmamak için sınırlanmaktadır.',
'delete-warning-toobig' => 'Bu sayfanın büyük bir değişiklik geçmişi var, $1 {{PLURAL:$1|revizyonun|revizyonun}} üzerinde.
Bunu silmek {{SITENAME}} işlemlerini aksatabilir;
dikkatle devam edin.',

# Rollback
'rollback' => 'değişiklikleri geri al',
'rollback_short' => 'geri al',
'rollbacklink' => 'geridöndür',
'rollbackfailed' => 'geri alma işlemi başarısız',
'cantrollback' => 'Sayfaya son katkıda bulunan kullanıcı, sayfaya katkıda bulunmuş tek kişi olduğu için, değişiklikler geri alınamıyor.',
'alreadyrolled' => '[[User:$2|$2]] ([[User talk:$2|Talk]]{{int:pipe-separator}}[[Special:Contributions/$2|{{int:contribslink}}]]) tarafından [[:$1]] sayfasında yapılmış son değişiklik geriye alınamıyor;
başka biri sayfada değişiklik yaptı ya da sayfayı geriye aldı.

Son değişikliği yapan: [[User:$3|$3]] ([[User talk:$3|Talk]]{{int:pipe-separator}}[[Special:Contributions/$3|{{int:contribslink}}]]).',
'editcomment' => "Değişiklik özeti: \"''\$1''\" idi.",
'revertpage' => '[[Special:Contributions/$2|$2]] [[User talk:$2|mesaj]] tarafından yapılan değişiklikler geri alınarak, [[User:$1|$1]] tarafından değiştirilmiş önceki sürüm geri getirildi.',
'revertpage-nouser' => '(kullanıcı adı çıkarılmış) tarafından yapılan değişiklikler [[User:$1|$1]] tarafından yapılan son revizyona geri alındı',
'rollback-success' => '$1 tarafından yapılan değişiklikler geri alınarak;
$2 tarafından değiştirilmiş önceki sürüme geri dönüldü.',

# Edit tokens
'sessionfailure-title' => 'Oturum başarısızlığı',
'sessionfailure' => 'Giriş oturumunuzla ilgili bir sorun var gibi görünüyor;
bu eylem, oturum gaspına karşı önlem olarak iptal edildi.
Lütfen "geri" gidin ve geldiğiniz sayfayı yeniden yükleyin, sonra tekrar deneyin.',

# Protect
'protectlogpage' => 'Koruma kayıtları',
'protectlogtext' => 'Aşağıdaki, sayfa korumalarına değişikliklerin bir listesidir.
Şu anda uygulanan sayfa korumaları için [[Special:ProtectedPages|koruma altına alınmış sayfalar listesine]] bakabilirsiniz.',
'protectedarticle' => '"[[$1]]" koruma altında alındı',
'modifiedarticleprotection' => '"[[$1]]" için koruma düzeyi değiştirildi',
'unprotectedarticle' => 'koruma kaldırıldı: "[[$1]]"',
'movedarticleprotection' => 'koruma ayarları "[[$2]]" sayfasından "[[$1]]" sayfasına taşındı',
'protect-title' => '"$1" için bir koruma seviyesi seçiniz',
'protect-title-notallowed' => '"$1" için koruma seviyesini görüntüleyin',
'prot_1movedto2' => '[[$1]] sayfasının yeni adı: [[$2]]',
'protect-badnamespace-text' => 'Bu ad alanındaki sayfalar korunamaz.',
'protect-legend' => 'Korumayı onayla',
'protectcomment' => 'Sebep:',
'protectexpiry' => 'Bitiş tarihi:',
'protect_expiry_invalid' => 'Geçersiz bitiş tarihi.',
'protect_expiry_old' => 'Geçmişteki son kullanma zamanı.',
'protect-unchain-permissions' => 'İleriki koruma seçeneklerinin kilidini kaldır',
'protect-text' => "'''$1''' sayfasının koruma durumunu buradan görebilir ve değiştirebilirsiniz.",
'protect-locked-blocked' => "Engellenmiş iken koruma seviyelerini değiştiremezsiniz.
'''$1''' sayfasının şu anki ayarları:",
'protect-locked-dblock' => "Aktif veritabanı kilidinden dolayı koruma seviyeleri değiştirilemez.
'''$1''' sayfası için şu anki ayarlar:",
'protect-locked-access' => "Kullanıcı hesabınız sayfanın koruma düzeylerini değiştirme yetkisine sahip değil.
'''$1''' sayfasının geçerli ayarları şunlardır:",
'protect-cascadeon' => 'Bu sayfa, kademeli koruma aktif hale getirilmiş aşağıdaki {{PLURAL:$1|$1 sayfada|$1 sayfada}} kullanıldığı için şu an koruma altındadır.
Bu sayfanın koruma seviyesini değiştirebilirsiniz; ancak bu kademeli korumaya etki etmeyecektir.',
'protect-default' => 'Tüm kullanıcılara izin ver',
'protect-fallback' => '"$1" izni gerektir',
'protect-level-autoconfirmed' => 'Yeni ve kayıtlı olmayan kullanıcıları engelle',
'protect-level-sysop' => 'sadece hizmetliler',
'protect-summary-cascade' => 'kademeli',
'protect-expiring' => 'bitiş tarihi $1 (UTC)',
'protect-expiring-local' => '$1 tarihinde bitiyor',
'protect-expiry-indefinite' => 'süresiz',
'protect-cascade' => 'Bu sayfada kullanılan tüm sayfaları korumaya al (kademeli koruma)',
'protect-cantedit' => 'Bu sayfanın koruma düzeyini değiştiremezsiniz; çünkü bunu yapmaya yetkiniz yok.',
'protect-othertime' => 'Farklı zaman:',
'protect-othertime-op' => 'farklı zaman',
'protect-existing-expiry' => 'Mevcut bitiş zamanı: $3, $2',
'protect-otherreason' => 'Diğer/ilave gerekçe:',
'protect-otherreason-op' => 'Diğer gerekçe',
'protect-dropdown' => '*Genel koruma gerekçeleri
** Aşırı vandalizm
** Aşırı spam
** Değişiklik savaşı
** Yüksek trafiğe sahip sayfa',
'protect-edit-reasonlist' => 'Koruma nedenlerini değiştir',
'protect-expiry-options' => '1 saat:1 hour,1 gün:1 day,1 hafta:1 week,2 hafta:2 weeks,1 ay:1 month,3 ay:3 months,6 ay:6 months,1 yıl:1 year,Süresiz:infinite',
'restriction-type' => 'İzin:',
'restriction-level' => 'Kısıtlama düzeyi:',
'minimum-size' => 'En küçük boyut',
'maximum-size' => 'En büyük boyut:',
'pagesize' => '(bayt)',

# Restrictions (nouns)
'restriction-edit' => 'değiştir',
'restriction-move' => 'Taşı',
'restriction-create' => 'Oluştur',
'restriction-upload' => 'Yükle',

# Restriction levels
'restriction-level-sysop' => 'Tam koruma',
'restriction-level-autoconfirmed' => 'Yarı koruma',
'restriction-level-all' => 'Herhangi bir düzey',

# Undelete
'undelete' => 'Silinmiş sayfaları göster',
'undeletepage' => 'Sayfanın silinmiş sürümlerine göz at ve geri getir.',
'undeletepagetitle' => "'''Aşağıdaki, [[:$1|$1]] sayfasının silinmiş revizyonlarından oluşuyor'''.",
'viewdeletedpage' => 'Silinen sayfalara bak',
'undeletepagetext' => 'Aşağıdaki {{PLURAL:$1|sayfa|$1 sayfa}} silinmiştir ama hala arşivdedir ve geri getirilebilir.
Arşiv düzenli olarak temizlenebilir.',
'undelete-fieldset-title' => 'Revizyonları geri yükle',
'undeleteextrahelp' => "Sayfalarla birlikte geçmişi geri getirmek için onay kutularına dokunmadan '''Geri getir!''' tuşuna tıklayın. Sayfanın geçmişini ayrı ayrı getirmek için geri getirmek istediğiniz değişikliklerin onay kutularını seçip '''Geri getir!''' tuşuna tıklayın. Seçilen onay kutularını ve neden alanını sıfırlamak için '''Vazgeç''' tuşuna tıklayın.",
'undeleterevisions' => '$1 {{PLURAL:$1|revizyon|revizyon}} arşivlendi',
'undeletehistory' => 'Eğer sayfayı geri getirirseniz, tüm revizyonlar geçmişe geri getirilecektir.
Silindikten sonra aynı isimle yeni bir sayfa oluşturulmuşsa, geri gelen revizyonlar varolan sayfanın geçmişinde görünecektir.',
'undeleterevdel' => 'Eğer üst sayfada sonuçlanacaksa ya da dosya revizyonu kısmen silinmiş ise, silmeyi geri alma uygulanamaz.
Böyle durumlarda, en yeni silinen revizyonu seçmemeli ya da gizlemesini kaldırmalısınız.',
'undeletehistorynoadmin' => 'Bu madde silinmiştir. Silinme sebebi ve silinme öncesinde maddeyi düzenleyen kullanıcıların detayları aşağıdaki özette verilmiştir. Bu silinmiş sürümlerin metinleri ise sadece hizmetliler tarafından görülebilir.',
'undelete-revision' => '$3 tarafından $1 sayfasının silinmiş revizyonu ($4 tarihinden beri, $5 saatinde):',
'undeleterevision-missing' => 'Geçersiz veya kayıp revizyon.
Revizyon onarılmış veya arşivden silinmiş olabilir ya da sahip olduğunuz bağlantı yanlıştır.',
'undelete-nodiff' => 'Önceki bir revizyon bulunamadı.',
'undeletebtn' => 'Geri getir!',
'undeletelink' => 'görüntüle/geri getir',
'undeleteviewlink' => 'görüntüle',
'undeletereset' => 'Vazgeç',
'undeleteinvert' => 'Seçimi ters çevir',
'undeletecomment' => 'Neden:',
'undeletedrevisions' => 'Toplam {{PLURAL:$1|1 kayıt|$1 kayıt}} geri getirildi.',
'undeletedrevisions-files' => '{{PLURAL:$1|1 revizyon|$1 revizyon}} ve {{PLURAL:$2|1 dosya|$2 dosya}} eski konumuna getirildi',
'undeletedfiles' => '{{PLURAL:$1|1 dosya|$1 dosya}} geri getirildi.',
'cannotundelete' => 'Sayfayı ya da medyayı sizden önce bir başka kullanıcı geri getirdiğinden dolayı sizin geri getirme işleminiz geçersiz.',
'undeletedpage' => "'''$1 sayfası geri getirildi'''

Önceki silme ve geri getirme işlemleri için [[Special:Log/delete|silme kayıtları]]na bakınız.",
'undelete-header' => 'Daha önce silinmiş sayfaları görmek için bakınız: [[Special:Log/delete|silme kayıtları]].',
'undelete-search-title' => 'Silinen sayfaları ara',
'undelete-search-box' => 'Silinmiş sayfaları ara',
'undelete-search-prefix' => 'Şununla başlayan sayfaları göster:',
'undelete-search-submit' => 'Ara',
'undelete-no-results' => 'Silme arşivinde birbiriyle eşleşen hiçbir sayfaya rastlanmadı.',
'undelete-filename-mismatch' => '$1 zaman bilgisine sahip dosya revizyonunun silinmesi geri alınamıyor: dosya adı uyuşmuyor',
'undelete-bad-store-key' => '$1 zaman bilgisine sahip dosya revizyonunun silinmesi geri alınamıyor: dosya silinmeden önce kayboldu.',
'undelete-cleanup-error' => 'Kullanılmayan "$1" arşiv dosyasını silerken hata.',
'undelete-missing-filearchive' => 'Dosya arşiv IDsi $1 geri getirilemiyor çünkü veritabanında değil.
Daha önceden silinmesi geri alınmış olabilir.',
'undelete-error' => 'Sayfa silinemiyor hatası',
'undelete-error-short' => 'Bu dosyanın silinmesini geri alırken hata çıktı: $1',
'undelete-error-long' => 'Bu dosyanın silinmesini geri alırken hatalar çıktı:

$1',
'undelete-show-file-confirm' => '"<nowiki>$1</nowiki>" dosyasının $2 $3 tarihli silinmiş bir revizyonunu görmek istediğinize emin misiniz?',
'undelete-show-file-submit' => 'Evet',

# Namespace form on various pages
'namespace' => 'Ad alanı:',
'invert' => 'Seçili haricindekileri göster',
'namespace_association' => 'İlişkili ad alanı',
'blanknamespace' => '(Ana)',

# Contributions
'contributions' => 'Kullanıcının katkıları',
'contributions-title' => '$1 için kullanıcı katkıları',
'mycontris' => 'Katkılarım',
'contribsub2' => '$1 ($2)',
'nocontribs' => 'Bu kriterlere uyan değişiklik bulunamadı',
'uctop' => '(son)',
'month' => 'Ay:',
'year' => 'Yıl:',

'sp-contributions-newbies' => 'Sadece yeni kullanıcıların katkılarını göster',
'sp-contributions-newbies-sub' => 'Yeni kullanıcılar için',
'sp-contributions-newbies-title' => 'Yeni hesaplar için kullanıcı katkıları',
'sp-contributions-blocklog' => 'Engel kaydı',
'sp-contributions-deleted' => 'silinen kullanıcı katkıları',
'sp-contributions-uploads' => 'yüklenenler',
'sp-contributions-logs' => 'kayıtlar',
'sp-contributions-talk' => 'mesaj',
'sp-contributions-userrights' => 'kullanıcı hakları yönetimi',
'sp-contributions-blocked-notice' => 'Bu kullanıcı engellenmiştir. Referans için en son engellenme kaydı aşağıda belirtilmiştir:',
'sp-contributions-blocked-notice-anon' => 'Bu IP adresi şu anda engellenmiş.
Son engelleme günlüğü girdisi kaynak amacıyla aşağıda verilmiştir:',
'sp-contributions-search' => 'Katkıları ara',
'sp-contributions-username' => 'IP adresi veya kullanıcı adı:',
'sp-contributions-toponly' => 'Sadece son revizyon olan değişiklikleri göster',
'sp-contributions-submit' => 'Ara',

# What links here
'whatlinkshere' => 'Sayfaya bağlantılar',
'whatlinkshere-title' => '"$1" maddesine bağlantı veren sayfalar',
'whatlinkshere-page' => 'Sayfa:',
'linkshere' => "'''[[:$1]]''' sayfasına bağlantısı olan sayfalar:",
'nolinkshere' => "'''[[:$1]]''' sayfasına bağlantı veren sayfa yok.",
'nolinkshere-ns' => "Seçilen ad alanında hiçbir sayfa '''[[:$1]]''' sayfasına bağlanmıyor.",
'isredirect' => 'yönlendirme sayfası',
'istemplate' => 'dönüştürülme',
'isimage' => 'dosya bağlantısı',
'whatlinkshere-prev' => '{{PLURAL:$1|önceki|önceki $1}}',
'whatlinkshere-next' => '{{PLURAL:$1|sonraki|sonraki $1}}',
'whatlinkshere-links' => '← bağlantılar',
'whatlinkshere-hideredirs' => 'Yönlendirmeleri $1',
'whatlinkshere-hidetrans' => 'Dönüştürmeleri $1',
'whatlinkshere-hidelinks' => 'Bağlantıları $1',
'whatlinkshere-hideimages' => 'Resim bağlantılarını $1',
'whatlinkshere-filters' => 'Süzgeçler',

# Block/unblock
'autoblockid' => 'Otomatik engelleme #$1',
'block' => 'Kullanıcıyı engelle',
'unblock' => 'Kullanıcının engelini kaldır',
'blockip' => 'Kullanıcıyı engelle',
'blockip-title' => 'Kullanıcıyı engelle',
'blockip-legend' => 'Kullanıcıyı engelle',
'blockiptext' => "Aşağıdaki formu kullanarak belli bir IP'nin veya kayıtlı kullanıcının değişiklik yapmasını engelleyebilirsiniz. Bu sadece vandalizmi engellemek için ve [[{{MediaWiki:Policy-url}}|kurallara]] uygun olarak yapılmalı. Aşağıya mutlaka engelleme ile ilgili bir açıklama yazınız. (örnek: -Şu- sayfalarda vandalizm yapmıştır).",
'ipadressorusername' => 'IP adresi veya kullanıcı adı',
'ipbexpiry' => 'Bitiş süresi',
'ipbreason' => 'Neden:',
'ipbreasonotherlist' => 'Başka neden',
'ipbreason-dropdown' => '*Genel engelleme nedenleri
** Yanlış bilgi eklemek
** Sayfalardan içeriği çıkarmak
** Dış sitelere spam bağlantı vermek
** Sayfalara mantıksız/anlaşılmaz sözler eklemek
** Tehditvari davranış/Taciz
** Birden fazla hesabı kötüye kullanmak
** Kabul edilemez kullanıcı adı',
'ipb-hardblock' => 'Bu IP adresindeki oturum açmış kullanıcıların değişiklik yapmasını önle',
'ipbcreateaccount' => 'Hesap oluşturulmasına engel ol',
'ipbemailban' => 'Kullanıcının e-posta göndermesine engel ol',
'ipbenableautoblock' => 'Bu kullanıcı tarafından kullanılan son IP adresini ve değişiklik yapmaya çalıştığı sonraki IP adreslerini otomatik olarak engelle',
'ipbsubmit' => 'Bu kullanıcıyı engelle',
'ipbother' => 'Farklı zaman',
'ipboptions' => '2 saat:2 hours,1 gün:1 day,3 gün:3 days,1 hafta:1 week,2 hafta:2 weeks,1 ay:1 month,3 ay:3 months,6 ay:6 months,1 yıl:1 year,süresiz:infinite',
'ipbotheroption' => 'farklı',
'ipbotherreason' => 'Başka/ek sebepler:',
'ipbhidename' => 'Kullanıcı adını katkılarda ve listelerde gizle',
'ipbwatchuser' => 'Bu kullanıcının kullanıcı ve tartışma sayfalarını izle',
'ipb-disableusertalk' => 'Bu kullanıcının engelliyken kendi mesaj sayfasında değişiklik yapmasını önle',
'ipb-change-block' => 'Bu ayarlarla kullanıcıyı yeniden engelle',
'ipb-confirm' => 'Engeli onayla',
'badipaddress' => 'Geçersiz IP adresi',
'blockipsuccesssub' => 'IP adresi engelleme işlemi başarılı oldu',
'blockipsuccesstext' => '[[Special:Contributions/$1|$1]] engellendi.
<br />Engellemeleri gözden geçirmek için [[Special:BlockList|IP adresi engellenenler]] listesine bakınız.',
'ipb-blockingself' => 'Kendinizi engellemek üzeresiniz! Bunu yapmak istediğinizden emin misiniz?',
'ipb-confirmhideuser' => '"Kullanıcıyı gizle" seçiliyken bir kullanıcı engellemek üzeresiniz. Bu, kullanıcının adını tüm listeler ile günlük girişlerinde bastıracaktır. Bunu yapmak istediğinizden emin misiniz?',
'ipb-edit-dropdown' => 'Engelleme nedenleri düzenle',
'ipb-unblock-addr' => '$1 için engellemeyi kaldır',
'ipb-unblock' => 'Engellemeyi kaldır',
'ipb-blocklist' => 'Mevcut olan engellemeleri göster',
'ipb-blocklist-contribs' => '$1 için katkılar',
'unblockip' => 'Kullanıcının engellemesini kaldır',
'unblockiptext' => 'Daha önceden engellenmiş bir IP adresine ya da kullanıcı adına yazma erişimini geri vermek için aşağıdaki formu kullanın.',
'ipusubmit' => 'Bu engellemeyi kaldır',
'unblocked' => '[[User:$1|$1]] - engelleme kaldırıldı',
'unblocked-range' => '$1 engeli kaldırıldı',
'unblocked-id' => '$1 engeli çıkarıldı',
'blocklist' => 'Engellenmiş kullanıcılar',
'ipblocklist' => 'Engellenmiş kullanıcılar',
'ipblocklist-legend' => 'Engellenen kullanıcı ara',
'blocklist-userblocks' => 'Hesap engellemelerini gizle',
'blocklist-tempblocks' => 'Geçici engellemeleri gizle',
'blocklist-addressblocks' => 'Tek IP engellemelerini gizle',
'blocklist-timestamp' => 'Tarih damgası',
'blocklist-target' => 'Hedef',
'blocklist-expiry' => 'Bitiş tarihi',
'blocklist-by' => 'Engeli koyan hizmetli',
'blocklist-params' => 'Engel parametreleri',
'blocklist-reason' => 'Gerekçe',
'ipblocklist-submit' => 'Ara',
'ipblocklist-localblock' => 'Yerel engelleme',
'ipblocklist-otherblocks' => 'Diğer {{PLURAL:$1|engelleme|engellemeler}}',
'infiniteblock' => 'Süresiz',
'expiringblock' => '$1 $2 tarihinde doluyor',
'anononlyblock' => 'sadece anonim',
'noautoblockblock' => 'otomatik engelleme devre dışı bırakıldı',
'createaccountblock' => 'hesap açımı engellendi',
'emailblock' => 'e-posta engellendi',
'blocklist-nousertalk' => 'kendi tartışma sayfasını değiştiremez',
'ipblocklist-empty' => 'Engelleme listesi boş.',
'ipblocklist-no-results' => 'İstenen IP adresi ya da kullanıcı adı engellenmedi.',
'blocklink' => 'engelle',
'unblocklink' => 'engeli kaldır',
'change-blocklink' => 'engeli değiştir',
'contribslink' => 'katkılar',
'emaillink' => 'e-posta gönder',
'autoblocker' => 'Otomatik olarak engellendiniz çünkü yakın zamanda IP adresiniz "[[User:$1|$1]]" kullanıcısı tarafından  kullanılmıştır. $1 isimli kullanıcının engellenmesi için verilen sebep: "\'\'\'$2\'\'\'"',
'blocklogpage' => 'Engel kaydı',
'blocklog-showlog' => 'Bu kullanıcı daha önceden engellenmiş.
Engelleme günlüğü referans için aşağıda sağlanmıştır:',
'blocklog-showsuppresslog' => 'Bu kullanıcı daha önceden engellenmiş ve gizlenmiş.
Gizleme günlüğü referans için aşağıda sağlanmıştır:',
'blocklogentry' => ', [[$1]] kullanıcısını engelledi, engelleme süresi: $2 $3',
'reblock-logentry' => '[[$1]] için bitiş tarihi $2 $3 olmak üzere engelleme ayarlarını değiştirdi',
'blocklogtext' => 'Burada kullanıcı erişimine yönelik engelleme ya da engelleme kaldırma kayıtları listelenmektedir. Otomatik  IP adresi engellemeleri listeye dahil değildir. Şu anda erişimi durdurulmuş kullanıcıları [[Special:BlockList|IP engelleme listesi]] sayfasından görebilirsiniz.',
'unblocklogentry' => '$1 kullanıcının engellemesi kaldırıldı',
'block-log-flags-anononly' => 'sadece anonim kullanıcılar',
'block-log-flags-nocreate' => 'hesap yaratımı engellendi',
'block-log-flags-noautoblock' => 'Otomatik engelleme iptal edildi',
'block-log-flags-noemail' => 'e-posta engellendi',
'block-log-flags-nousertalk' => 'kendi tartışma sayfasını değiştiremez',
'block-log-flags-angry-autoblock' => 'gelişmiş oto-engelleme devrede',
'block-log-flags-hiddenname' => 'kullanıcı adı gizli',
'range_block_disabled' => 'Hizmetliler için aralık engellemesi oluşturma yeteneği devre dışı.',
'ipb_expiry_invalid' => 'Geçersiz bitiş zamanı.',
'ipb_expiry_temp' => 'Gizli kullanıcı adı engellemeleri kalıcı olmalı.',
'ipb_hide_invalid' => 'Kullanıcı hesabı gizlenemiyor; çok fazla değişikliği olabilir.',
'ipb_already_blocked' => '"$1" zaten engellenmiş',
'ipb-needreblock' => '$1 zaten engellenmiş. Ayarları değiştirmek istiyor musunuz?',
'ipb-otherblocks-header' => 'Diğer {{PLURAL:$1|engelleme|engellemeler}}',
'unblock-hideuser' => 'Kullanıcı adı gizlenmiş olduğu için bu kullanıcının engelini kaldıramazsınız.',
'ipb_cant_unblock' => 'Hata: Engelleme IDsi $1 bulunamadı.
Engelleme kaldırılmış olabilir.',
'ipb_blocked_as_range' => 'Hata: $1 IP adresi doğrudan engellenmemiş ve engelleme kaldırılamaz.
Ancak, bu adres $2 aralığının parçası olarak engellenmiş, aralık engellemesini kaldırabilirsiniz.',
'ip_range_invalid' => 'Geçersiz IP aralığı.',
'ip_range_toolarge' => '/$1 bloktan daha büyük aralık bloklarına izin verilmez.',
'blockme' => 'Beni engelle',
'proxyblocker' => 'Proxy engelleyici',
'proxyblocker-disabled' => 'Bu işlev devre dışı bırakıldı.',
'proxyblockreason' => 'IP adresiniz açık bir proxy olduğu için engellendi.
Lütfen İnternet sevis sağlayınız ile ya da teknik destek ile irtibat kurun ve bu ciddi güvenlik probleminden haberdar edin.',
'proxyblocksuccess' => 'Tamamlanmıştır.',
'sorbsreason' => "IP adresiniz, {{SITENAME}} sitesi tarafından kullanılan DNSBL'de açık proxy olarak listelenmiş.",
'sorbs_create_account_reason' => "IP adresiniz {{SITENAME}} sitesi tarafından kullanılan DNSBL'de açık proxy olarak listelenmiş.
Hesap oluşturamazsınız",
'cant-block-while-blocked' => 'Siz engelliyken başka kullanıcıları engelleyemezsiniz.',
'cant-see-hidden-user' => 'Engellemek istediğiniz kullanıcı zaten engellenmiş ve gizlenmiş. Kullanıcıgizle yetkiniz olmadığı için, kullanıcının engellenmesini göremez ya da değiştiremezsiniz.',
'ipbblocked' => 'Diğer kullanıcıları engelleyemez ya da engellemesini kaldıramazsınız, çünkü kendiniz engellenmişsiz',
'ipbnounblockself' => 'Kendi engellemenizi kaldırmanıza izniniz yok',

# Developer tools
'lockdb' => 'Veritabanı kilitli',
'unlockdb' => 'Veritabanı kilitini aç',
'lockdbtext' => 'Veritabanını kilitlemek; tüm kullanıcıların sayfaları, tercihlerini ve izleme listelerini değiştirmelerini ve veritabanında değişiklik gerektiren diğer şeyleri askıya alır.
Lütfen yapmak istediğinizin bu olduğunu ve bakım işleriniz bittiğinde veritabanını açacağınızı teyit edin.',
'unlockdbtext' => 'Veritabanının kilidini açmak; tüm kullanıcılara sayfaları, tercihlerini ve izleme listelerini değiştirmelerini ve veritabanında değişiklik gerektiren diğer şeyleri yapabilme yeteneğini geri verir.
Lütfen yapmak istediğinizin bu olduğunu teyit edin.',
'lockconfirm' => 'Evet, veritabanını kilitlemeyi gerçekten istiyorum.',
'unlockconfirm' => 'Evet, veritabanının kilidini açmak istediğimden eminim.',
'lockbtn' => 'Veritabanı kilitli',
'unlockbtn' => 'Veritabanın kilidi kaldır',
'locknoconfirm' => 'Onay kutusunu seçmediniz.',
'lockdbsuccesssub' => 'Veritabanı kilitlendi',
'unlockdbsuccesssub' => 'Veritabanı kiliti açıldı.',
'lockdbsuccesstext' => 'Veritabanı kilitlendi.<br />
Bakımın işleriniz bittiğinde veritabanının [[Special:UnlockDB|kilidini açmayı]] unutmayın.',
'unlockdbsuccesstext' => 'Veritanı kilidi açıldı.',
'lockfilenotwritable' => 'Veritabanı kilitleme dosyası yazılabilir değil.
Bu, veritabanını kilitleyip açabilmek için, web sunucusu tarafından yazılabilir olmalıdır.',
'databasenotlocked' => 'Veritabanı kilitli değil.',
'lockedbyandtime' => '({{GENDER:$1|$1}} tarafından $2 $3 itibariyle)',

# Move page
'move-page' => '$1 taşınıyor',
'move-page-legend' => 'İsim değişikliği',
'movepagetext' => "Aşağıdaki form kullanılarak sayfanın adı değiştirilir. Beraberinde tüm geçmiş kayıtları da yeni isme aktarılır. Eski isim yeni isme yönlendirme hâline dönüşür. Otomatik olarak eski başlığa yönlendirmeleri güncelleyebilirsiniz. Bu işlemi otomatik yapmak istemezseniz tüm [[Special:DoubleRedirects|çift]] veya [[Special:BrokenRedirects|geçersiz]] yönlendirmeleri kendiniz düzeltmeniz gerekecek. Yapacağınız bu değişikllikle tüm bağlantıların olması gerektiği gibi çalıştığından sizin sorumlu olduğunuzu unutmayınız.

Eğer yeni isimde bir madde zaten varsa isim değişikliği '''yapılmayacaktır'''. Ayrıca, isim değişikliğinden pişman olursanız değişikliği geri alabilir ve başka hiçbir sayfaya da dokunmamış olursunuz.

'''UYARI!'''
Bu değişim popüler bir sayfa için beklenmeyen sonuçlar doğurabilir; lütfen değişikliği yapmadan önce olabilecekleri göz önünde bulundurun.",
'movepagetext-noredirectfixer' => "Aşağıdaki formu doldurmak bir sayfayı yeniden adlandırır, tüm geçmişini yeni ada taşır.
Eski başlık yeni başlığa bir yönlendirme sayfası olur.
[[Special:DoubleRedirects|Çift]] ya da [[Special:BrokenRedirects|nozuk yönlendirmeler]] sayfalarını kontrol edin.
Bağlantıların gitmeleri gereken yerlere gittiklerinden emin olmak sizin sorumluluğunuzdadır.

Yeni başlıkta mevcut bir sayfa varsa, boş yada bir yönlendirme olmadıkça ve değişiklik geçmişi bulunmadıkça, sayfa '''taşınmayacaktır'''.
Bu şu anlama gelir, bir sayfayı yanlışlık yaparsanız sayfayı eski adıyla yeniden adlandırabilirsiniz, bu mevcut sayfanın üzerine yazmaz.

'''Uyarı!'''
Bu popüler bir sayfa için etkili ve beklenmedik bir değişiklik olabilir;
Lütfen onaylamadan önce bunun sonuçlarını anladığınızdan emin olun.",
'movepagetalktext' => "İlişikteki tartışma sayfası da (eğer varsa) otomatik olarak yeni isme taşınacaktır. Ama şu durumlarda '''taşınmaz''':

*Alanlar arası bir taşıma ise, (örnek: \"Project:\" --> \"Help:\")
*Yeni isimde bir tartışma sayfası zaten var ise,
*Alttaki kutucuğu seçmediyseniz.

Bu durumlarda sayfayı kendiniz aktarmalısınız.",
'movearticle' => 'Eski isim',
'moveuserpage-warning' => "'''Uyarı:''' Bir kullanıcı sayfasını taşımak üzeresiniz. Lütfen sadece sayfanın taşınacağına, ancak kullanıcının yeniden ''adlandırılmayacağına'' dikkat edin.",
'movenologin' => 'Sistemde değilsiniz.',
'movenologintext' => 'Sayfanın adını değiştirebilmek için kayıtlı ve [[Special:UserLogin|sisteme]] giriş yapmış olmanız gerekmektedir.',
'movenotallowed' => 'Sayfaları taşımaya izniniz yok.',
'movenotallowedfile' => 'Sayfaları taşımaya izniniz yok.',
'cant-move-user-page' => 'Kullanıcı sayfalarını taşımaya izniniz yok (altsayfalardan başka).',
'cant-move-to-user-page' => 'Bir sayfayı, bir kullanıcı sayfasına taşımaya izniniz yok (bir kullanıcı altsayfası dışında).',
'newtitle' => 'Yeni isim',
'move-watch' => 'Bu sayfayı izle',
'movepagebtn' => 'İsmi değiştir',
'pagemovedsub' => 'İsim değişikliği tamamlandı.',
'movepage-moved' => '\'\'\'"$1",  "$2" sayfasına taşındı\'\'\'',
'movepage-moved-redirect' => 'Bir yönlendirme oluşturuldu.',
'movepage-moved-noredirect' => 'Bir yönlendirme oluşturulması bastırıldı.',
'articleexists' => 'Bu isimde bir sayfa bulunmakta veya seçmiş olduğunuz isim geçersizdir.
Lütfen başka bir isim deneyiniz.',
'cantmove-titleprotected' => 'Bir sayfayı bu konuma taşıyamazsınız, çünkü yeni başlığın oluşturulması korunuyor',
'talkexists' => "'''Sayfanın kendisi başarıyla taşındı, ancak tartışma sayfası taşınamadı çünkü taşınacağı isimde zaten bir sayfa vardı. Lütfen sayfanın içeriğini diğer sayfaya kendiniz taşıyın.'''",
'movedto' => 'taşındı:',
'movetalk' => 'Varsa "tartışma" sayfasını da aktar.',
'move-subpages' => 'Altsayfaları taşı ($1 sayfaya kadar)',
'move-talk-subpages' => 'Tartışma sayfasının altsayfalarını taşı ($1 sayfaya kadar)',
'movepage-page-exists' => '$1 maddesi zaten var olmaktadır, ve otomatikman yeniden yazılamaz.',
'movepage-page-moved' => '$1 sayfası $2 sayfasına taşındı.',
'movepage-page-unmoved' => '$1 sayfası $2 başlığına taşınamıyor.',
'movepage-max-pages' => 'En fazla $1 {{PLURAL:$1|sayfa|sayfa}} taşındı ve daha fazlası otomatik olarak taşınamaz.',
'movelogpage' => 'Taşıma kaydı',
'movelogpagetext' => 'Aşağıda bulunan liste adı değiştirilmiş sayfaları gösterir.',
'movesubpage' => '{{PLURAL:$1|Subpage|Alt sayfalar}}',
'movesubpagetext' => 'Bu sayfanın aşağıda gösterilen $1 {{PLURAL:$1|altsayfası|altsayfası}} vardır.',
'movenosubpage' => 'Bu sayfanın altsayfası yoktur.',
'movereason' => 'Neden:',
'revertmove' => 'geri al',
'delete_and_move' => 'Sil ve taşı',
'delete_and_move_text' => '==Silinmesi gerekiyor==

"[[:$1]]" isimli bir sayfa zaten mevcut. O sayfayı silerek, isim değişikliğini gerçekleştirmeye devam etmek istiyor musunuz?',
'delete_and_move_confirm' => 'Evet, sayfayı sil',
'delete_and_move_reason' => '[[$1]] sayfasının isim değişikliğinin gerçekleşmesi için silindi.',
'selfmove' => 'Olmasını istediğiniz isim ile mevcut isim aynı. Değişiklik mümkün değil.',
'immobile-source-namespace' => '"$1" ad alanında sayfalar taşınamıyor',
'immobile-target-namespace' => 'Sayfalar "$1" ad alanına taşınamıyor',
'immobile-target-namespace-iw' => 'Vikilerarası bağlantı, sayfa taşıması için geçerli bir hedef değil.',
'immobile-source-page' => 'Bu sayfanın adı değiştirilemez.',
'immobile-target-page' => 'Bu hedef başlığına taşınamaz.',
'imagenocrossnamespace' => 'Dosya, dosyalar için olmayan ad alanına taşınamaz',
'nonfile-cannot-move-to-file' => 'Dosya olmayanlar, dosya ad alanına taşınamaz',
'imagetypemismatch' => 'Yeni dosya eklentisi tipiyle eşleşmiyor',
'imageinvalidfilename' => 'Hedef dosya adı geçersiz',
'fix-double-redirects' => 'Orijinal başlığa işaret eden yönlendirmeleri güncelle',
'move-leave-redirect' => 'Arkada bir yönlendirme bırak',
'protectedpagemovewarning' => "'''Uyarı:''' Bu sayfa kilitlenmiş, sadece hizmetli ayrıcalıklarına sahip kullanıcılar taşıyabilir.
Son günlük girdisi referans amaçlı aşağıda verilmiştir:",
'semiprotectedpagemovewarning' => "'''Not:''' Bu sayfa kilitlenmiş, sadece kayıtlı kullanıcılar taşıyabilir.
Son günlük girdisi referans amaçlı aşağıda verilmiştir:",
'move-over-sharedrepo' => '== Dosya mevcut ==
[[:$1]] paylaşılmış havuzda mevcut. Bir dosyayı bu başlığa taşımak paylaşılmış dosyanın üstüne gelecektir.',
'file-exists-sharedrepo' => 'Seçilen isim paylaşılmış bir havuzda zaten mevcut.
Lütfen başka bir isim seçin.',

# Export
'export' => 'Sayfaları dışa aktar',
'exporttext' => 'Belirli bir sayfa ya da sayfa takımının metni ve değiştirme geçmişini XML ile sarılı olarak dışa aktarabilirsiniz.
Bu, MedyaViki kullanan başka bir vikide [[Special:Import|içe aktarım sayfası]] ile içe aktarılabilir.

Sayfaları dışa aktarmak için, başlıkları aşağıdaki metin kutusuna girin, her satıra bir tane, ve eski sürümlerle beraber şimdiki sürümü, sayfa geçmişi satırlarını, ya da son değişiklik bilgisiyle beraber güncel sürümü isteyip istemediğinizi belirtin.

Sonuncu durumda, bir link de kullanabilirsiniz, ör: "[[{{MediaWiki:Mainpage}}]]" sayfası için [[{{#Special:Export}}/{{MediaWiki:Mainpage}}]].',
'exportall' => 'Tüm sayfaları dışa aktar',
'exportcuronly' => 'Geçmiş sürümleri almadan sadece son sürümü al',
'exportnohistory' => "----
'''Not:''' Sayfaların tüm geçmişini bu formla dışa aktarmak, performans nedenlerinden ötürü devre dışı bırakılmıştır.",
'export-submit' => 'Aktar',
'export-addcattext' => 'Aşağıdaki kategoriden maddeler ekle:',
'export-addcat' => 'Ekle',
'export-addnstext' => 'Sayfaları ad alanından ekle:',
'export-addns' => 'Ekle',
'export-download' => 'Farklı kaydet',
'export-templates' => 'Şablonları dahil et',
'export-pagelinks' => 'Bağlı sayfaları içerecek derinlik:',

# Namespace 8 related
'allmessages' => 'Sistem iletileri',
'allmessagesname' => 'Ad',
'allmessagesdefault' => 'Varsayılan mesaj metni',
'allmessagescurrent' => 'Kullanımdaki metin',
'allmessagestext' => 'Bu liste  MediaWiki ad alanında mevcut olan sistem mesajlarının listesidir.
Genel MediaWiki yerelleştirmesine katkıda bulunmak isterseniz, lütfen [//www.mediawiki.org/wiki/Localisation MediaWiki Yerelleştirmesi] ve [//translatewiki.net translatewiki.net] sayfalarını ziyaret edin.',
'allmessagesnotsupportedDB' => "'''\$wgUseDatabaseMessages''' kapalı olduğu için '''{{ns:special}}:Allmessages''' kullanıma açık değil.",
'allmessages-filter-legend' => 'Filtre',
'allmessages-filter' => 'Özelleştirme durumuna göre filtrele:',
'allmessages-filter-unmodified' => 'Değiştirilmemiş',
'allmessages-filter-all' => 'Hepsi',
'allmessages-filter-modified' => 'Değiştirilmiş',
'allmessages-prefix' => 'Önek ile filtrele:',
'allmessages-language' => 'Dil:',
'allmessages-filter-submit' => 'Git',

# Thumbnails
'thumbnail-more' => 'Büyüt',
'filemissing' => 'Dosya bulunmadı',
'thumbnail_error' => 'Küçük resim oluşturmada hata: $1',
'djvu_page_error' => 'DjVu sayfası kapsamdışı',
'djvu_no_xml' => 'DjVu dosyası için XML alınamıyor',
'thumbnail_invalid_params' => 'Geçersiz küçük resim parametreleri',
'thumbnail_dest_directory' => 'Hedef dizini oluşturulamıyor',
'thumbnail_image-type' => 'Görüntü türü desteklenmiyor',
'thumbnail_gd-library' => 'Eksik GD kütüphanesi yapılandırması: kayıp fonksiyon $1',
'thumbnail_image-missing' => 'Dosya kayıp gibi görünüyor: $1',

# Special:Import
'import' => 'Sayfaları aktar',
'importinterwiki' => 'Vikilerarası içe aktarım',
'import-interwiki-text' => 'İçe aktarmak için bir viki ve sayfa başlığı seçin.
Revizyon tarihleri ve yazarların isimleri korunacaktır.
Bütün vikilerarası içe aktarım eylemleri [[Special:Log/import|içe aktarım günlüğünde]] kaydedilmektedir.',
'import-interwiki-source' => 'Kaynak viki/sayfa:',
'import-interwiki-history' => 'Sayfanın tüm geçmiş sürümlerini kopyala',
'import-interwiki-templates' => 'Tüm şablonları içer',
'import-interwiki-submit' => 'Import',
'import-interwiki-namespace' => 'Hedef ad alanı:',
'import-interwiki-rootpage' => 'Hedeflenen kaynak sayfası (isteğe bağlı):',
'import-upload-filename' => 'Dosya adı:',
'import-comment' => 'Yorum:',
'importtext' => 'Lütfen dosyayı [[Special:Export|dışa aktarım yardımcı yazılımıyla]] kaynak vikiden dışa aktarın.
Bilgisayarınıza kaydedin ve buraya yükleyin.',
'importstart' => 'Sayfalar aktarmaktadır...',
'import-revision-count' => '$1 {{PLURAL:$1|revizyon|revizyon}}',
'importnopages' => 'Aktarılacak dosya yok.',
'imported-log-entries' => '$1 {{PLURAL:$1|günlük girdisi|günlük girdisi}} içe aktardı.',
'importfailed' => '$1 aktarımı başarısız',
'importunknownsource' => 'Bilinmeyen içeri aktarım kaynak türü',
'importcantopen' => 'İçeri aktarma dosyası açılamadı',
'importbadinterwiki' => 'Yanlış interwiki bağlantısı',
'importnotext' => 'Boş ya da metin yok',
'importsuccess' => 'Aktarma sonuçlandı!',
'importhistoryconflict' => 'Çakışan geçmiş revizyonu mevcut (bu sayfa daha önceden içe aktarılmış olabilir)',
'importnosources' => 'Hiç vikilerarası içe aktarım kaynağı tanımlanmamış ve doğrudan geçmiş yüklemeleri devre dışı.',
'importnofile' => 'Bir aktarım dosyası yüklenmedi.',
'importuploaderrorsize' => 'İçe aktarılmış dosyanın yüklenmesi başarısız oldu.
Dosya, izin verilen yükleme boyutundan büyük.',
'importuploaderrorpartial' => 'İçe aktarılmış dosyanın yüklenmesi başarısız oldu.
Dosyanın sadece bir kısmı yüklendi.',
'importuploaderrortemp' => 'İçe aktarılan dosyanın yüklenmesi başarısız oldu.
Geçici dosya kayıp.',
'import-parse-failure' => 'XML içeri aktarma derlemesi başarısız',
'import-noarticle' => 'İçe aktarılacak sayfa yok!',
'import-nonewrevisions' => 'Tüm revizyonlar önceden içe aktarılmış.',
'xml-error-string' => '$2 satırında, $3 sütununda $1 (bayt $4): $5',
'import-upload' => 'XML bilgileri yükle',
'import-token-mismatch' => 'Oturum verisi kaybı. Lütfen yeniden deneyin.',
'import-invalid-interwiki' => 'Belirtilen vikiden içe aktarım yapılamaz.',

# Import log
'importlogpage' => 'Aktarım günlüğü',
'importlogpagetext' => 'Diğer vikilerden sayfaların değişiklik geçmişiyle idari içe aktarımları.',
'import-logentry-upload' => '[[$1]] dosya yüklemesiyle içe aktarıldı',
'import-logentry-upload-detail' => '$1 {{PLURAL:$1|revizyon|revizyon}}',
'import-logentry-interwiki' => '$1 transvikileşmiş',
'import-logentry-interwiki-detail' => '$2 sayfasından $1 {{PLURAL:$1|revizyon|revizyon}}',

# JavaScriptTest
'javascripttest' => 'JavaScript denemesi',

# Tooltip help for the actions
'tooltip-pt-userpage' => 'Kullanıcı sayfanız',
'tooltip-pt-anonuserpage' => 'The user page for the ip you',
'tooltip-pt-mytalk' => 'Mesaj sayfanız',
'tooltip-pt-anontalk' => 'Bu IP adresinden yapılmış değişiklikleri tartış',
'tooltip-pt-preferences' => 'Tercihleriniz (ayarlarınız)',
'tooltip-pt-watchlist' => 'Değişiklikler için izlemeye aldığınız sayfaların listesi',
'tooltip-pt-mycontris' => 'Katkılarınızın listesi',
'tooltip-pt-login' => 'Oturum açmanızı tavsiye ederiz; ancak zorunda değilsiniz',
'tooltip-pt-anonlogin' => 'Oturum açmanızı tavsiye ederiz; ancak zorunda değilsiniz',
'tooltip-pt-logout' => 'Sistemden çık',
'tooltip-ca-talk' => 'İçerik ile ilgili tartışma',
'tooltip-ca-edit' => 'Bu sayfayı değiştirebilirsiniz. Lütfen kaydetmeden önce önizleme düğmesini kullanın.',
'tooltip-ca-addsection' => 'Yeni bir altbaşlık aç',
'tooltip-ca-viewsource' => 'Bu sayfa koruma altında. Sadece kaynağını görebilirsiniz.',
'tooltip-ca-history' => 'Bu sayfanın geçmiş sürümleri',
'tooltip-ca-protect' => 'Bu sayfayı koru',
'tooltip-ca-unprotect' => 'Bu sayfanın korumasını değiştir',
'tooltip-ca-delete' => 'Bu sayfayı sil',
'tooltip-ca-undelete' => 'Sayfayı silinmeden önceki haline geri getirin',
'tooltip-ca-move' => 'Bu sayfayı taşı',
'tooltip-ca-watch' => 'Bu sayfayı izleme listenize ekleyin',
'tooltip-ca-unwatch' => 'Bu sayfayı izleme listenizden çıkarın',
'tooltip-search' => '{{SITENAME}} içinde ara',
'tooltip-search-go' => 'Eğer varsa, tam bu addaki bir sayfaya git',
'tooltip-search-fulltext' => 'Sayfalarda bu metni ara',
'tooltip-p-logo' => 'Ana sayfa',
'tooltip-n-mainpage' => 'Ana sayfaya git',
'tooltip-n-mainpage-description' => 'Ana sayfaya git',
'tooltip-n-portal' => 'Proje hakkında, neler yapabilirsiniz, ne nerdedir',
'tooltip-n-currentevents' => 'Güncel olaylarla ilgili son bilgiler',
'tooltip-n-recentchanges' => 'Vikide yapılmış son değişikliklerin listesi',
'tooltip-n-randompage' => 'Rastgele bir maddeye gidin',
'tooltip-n-help' => 'Yardım almak için',
'tooltip-t-whatlinkshere' => 'Bu sayfaya bağlantı vermiş tüm viki sayfalarının listesi',
'tooltip-t-recentchangeslinked' => 'Bu sayfadan bağlantı verilen sayfalardaki son değişiklikler',
'tooltip-feed-rss' => 'Bu sayfa için RSS beslemesi',
'tooltip-feed-atom' => 'Bu sayfa için atom beslemesi',
'tooltip-t-contributions' => 'Kullanıcının katkılarının listesini gör',
'tooltip-t-emailuser' => 'Bu kullanıcıya e-posta gönder',
'tooltip-t-upload' => 'Dosya yükle',
'tooltip-t-specialpages' => 'Tüm özel sayfaların listesi',
'tooltip-t-print' => 'Bu sayfanın basılmaya uygun sürümü',
'tooltip-t-permalink' => 'Sayfanın bu sürümüne kalıcı bağlantı',
'tooltip-ca-nstab-main' => 'İçerik sayfasını göster',
'tooltip-ca-nstab-user' => 'Kullanıcı sayfasını göster',
'tooltip-ca-nstab-media' => 'Medya sayfasını göster',
'tooltip-ca-nstab-special' => 'Bu özel sayfa olduğu için üzerinde değişiklik yapamazsınız.',
'tooltip-ca-nstab-project' => 'Proje sayfasını göster',
'tooltip-ca-nstab-image' => 'Dosya sayfasını göster',
'tooltip-ca-nstab-mediawiki' => 'Sistem mesajını göster',
'tooltip-ca-nstab-template' => 'Şablonu göster',
'tooltip-ca-nstab-help' => 'Yardım sayfasını görmek için tıklayın',
'tooltip-ca-nstab-category' => 'Kategori sayfasını göster',
'tooltip-minoredit' => 'Küçük değişiklik olarak işaretle',
'tooltip-save' => 'Değişiklikleri kaydet',
'tooltip-preview' => 'Değişikliklerinizi gözden geçirin, lütfen kaydetmeden önce bunu kullanın!',
'tooltip-diff' => 'Metin üzerinde yaptığınız değişiklikleri gösterir',
'tooltip-compareselectedversions' => 'Bu sayfanın seçilmiş iki sürümü arasındaki farkları gör.',
'tooltip-watch' => 'Sayfayı izleme listenize ekleyin',
'tooltip-watchlistedit-normal-submit' => 'Başlıkları kaldır',
'tooltip-watchlistedit-raw-submit' => 'İzleme listesini güncelle',
'tooltip-recreate' => 'Silinmiş olmasına rağmen sayfayı geri getir',
'tooltip-upload' => 'Yüklemeyi başlat',
'tooltip-rollback' => '"Geridöndür" tek tıklamayla bu sayfaya son katkı yapanın değişikliklerini geri alır',
'tooltip-undo' => '"Geri al" bu değişikliği geri alır ve değişiklik formunu önizleme modunda açar.Özete bir sebep eklemeye olanak tanır.',
'tooltip-preferences-save' => 'Tercihleri kaydet',
'tooltip-summary' => 'Kısa bir özet girin',

# Stylesheets
'common.css' => '/* Buraya konulacak CSS kodu tüm temalarda etkin olur */',
'monobook.css' => '/* Buraya konulacak CSS kodu tüm Monobook teması kullanan tüm kullanıcılarda etkin olur */',

# Scripts
'common.js' => '/* Buraya konulacak JavaScript kodu sitedeki her kullanıcı için her sayfa yüklendiğinde çalışacaktır */',

# Metadata
'notacceptable' => 'Bu viki sunucusu istemcinizin okuyabileceği formatta bir veri sağlayamıyor.',

# Attribution
'anonymous' => '{{SITENAME}} sitesinin anonim {{PLURAL:$1|kullanıcısı|kullanıcıları}}',
'siteuser' => '{{SITENAME}} kullanıcısı $1',
'anonuser' => '{{SITENAME}} anonim kullanıcısı $1',
'lastmodifiedatby' => 'Sayfa en son $3 tarafından $2, $1 tarihinde değiştirildi.',
'othercontribs' => '$1 tarafından yapılan çalışma baz alınmıştır.',
'others' => 'diğerleri',
'siteusers' => '{{SITENAME}} {{PLURAL:$2|kullanıcısı|kullanıcıları}} $1',
'anonusers' => '{{SITENAME}} anonim {{PLURAL:$2|kullanıcısı|kullanıcıları}} $1',
'creditspage' => 'Sayfa künyesi',
'nocredits' => 'Bu sayfa için künye bilgisi mevcut değil.',

# Spam protection
'spamprotectiontitle' => 'Spam karşı koruma filtresi',
'spamprotectiontext' => 'Kaydetmek istediğiniz sayfa spam filtresi tarafından blok edildi. Büyük ihtimalle kara-listedeki bir dış bağlantıdan kaynaklanmaktadır.',
'spamprotectionmatch' => 'Spam süzgecimizi harekete geçiren metin: $1',
'spambot_username' => 'Medyaviki spam temizleme',
'spam_reverting' => '$1 ile bağlantı içermeyen son sürüme geri dönülüyor',
'spam_blanking' => 'Tüm revizyonlar $1 sayfasına bağlantı içeriyor, boşaltılıyor',

# Info page
'pageinfo-title' => 'Bilgi için "$1"',
'pageinfo-header-basic' => 'Temel bilgiler',
'pageinfo-header-edits' => 'Düzenleme geçmişi',
'pageinfo-header-restrictions' => 'Sayfa koruması',
'pageinfo-header-properties' => 'Sayfa özellikleri',
'pageinfo-display-title' => 'Görüntülenen başlık',
'pageinfo-default-sort' => 'Varsayılan sıralama anahtarı',
'pageinfo-length' => 'Sayfa uzunluğu (bayt cinsinden)',
'pageinfo-article-id' => 'Sayfa ID',
'pageinfo-robot-policy' => 'Arama motoru durumu',
'pageinfo-robot-index' => 'İndekslenebilir',
'pageinfo-robot-noindex' => 'İndekslenemez',
'pageinfo-views' => 'Görüntülenme sayısı',
'pageinfo-watchers' => 'Sayfanın izleyici sayısı',
'pageinfo-redirects-name' => 'Bu sayfaya yönlendirmeler',
'pageinfo-redirects-value' => '$1',
'pageinfo-subpages-name' => 'Bu sayfanın alt sayfaları',
'pageinfo-firstuser' => 'Sayfa oluşturucu',
'pageinfo-firsttime' => 'Sayfa oluşturulma tarihi',
'pageinfo-lastuser' => 'En son düzenleyici',
'pageinfo-lasttime' => 'Son düzenleme tarihi',
'pageinfo-edits' => 'Düzenleme sayısı',
'pageinfo-authors' => 'Farklı yazar sayısı',
'pageinfo-recent-edits' => 'Son zamanlardaki düzenlemeler (son $1)',
'pageinfo-recent-authors' => 'Farklı yazarların son sayısı',
'pageinfo-magic-words' => 'Sihirli {{PLURAL:$1|kelimeler|kelimeler}} ($1)',
'pageinfo-hidden-categories' => 'Gizli {{PLURAL:$1|kategori|kategoriler}} ($1)',
'pageinfo-templates' => 'Görüntülenen {{PLURAL:$1|şablon|şablonlar}} ($1)',
'pageinfo-toolboxlink' => 'Sayfa bilgisi',
'pageinfo-redirectsto' => 'Yönlendirilen',
'pageinfo-redirectsto-info' => 'bilgi',
'pageinfo-contentpage' => 'Bir içerik sayfası sayılır',
'pageinfo-contentpage-yes' => 'Evet',
'pageinfo-protect-cascading-yes' => 'Evet',

# Skin names
'skinname-standard' => 'Klasik',
'skinname-nostalgia' => 'Nostaljik',
'skinname-chick' => 'Şık',
'skinname-simple' => 'Basit',
'skinname-modern' => 'Modern',

# Patrolling
'markaspatrolleddiff' => 'Kontrol edilmiş olarak işaretle',
'markaspatrolledtext' => 'Kontrol edilmiş olarak işaretle',
'markedaspatrolled' => 'Kontrol edildi',
'markedaspatrolledtext' => '[[:$1]] için seçili revizyon gözden geçirilmiş olarak işaretlendi.',
'rcpatroldisabled' => 'Son Değişiklikler Gözetimi devre dışı bırakıldı',
'rcpatroldisabledtext' => 'Son Değişiklikler Gözetimi özelliği şuanda devre dışı.',
'markedaspatrollederror' => 'Kontrol edilmedi',
'markedaspatrollederrortext' => 'Gözlenmiş olarak işaretlemek için bir revizyon belirtmelisiniz.',
'markedaspatrollederror-noautopatrol' => 'Kendi değişikliklerinizi kontrol edilmiş olarak işaretleyemezsiniz.',

# Patrol log
'patrol-log-page' => 'Kontrol kaydı',
'patrol-log-header' => 'Bu gözlenmiş revizyonların günlüğüdür.',
'log-show-hide-patrol' => 'Gözetim günlüğünü $1',

# Image deletion
'deletedrevision' => '$1 sayılı eski sürüm silindi.',
'filedeleteerror-short' => '$1 dosyanın silinmesinde hata oldu',
'filedeleteerror-long' => 'Dosyayı silerken hatalarla karşılaşıldı:

$1',
'filedelete-missing' => '"$1" dosyası silinemiyor, çünkü mevcut değil.',
'filedelete-old-unregistered' => 'Belirtilen dosya revizyonu "$1" veritabanında yok.',
'filedelete-current-unregistered' => 'Belirtilen dosya "$1" veritabanında yok.',
'filedelete-archive-read-only' => '"$1" arşiv dizini websunucusu tarafından yazılabilir değil.',

# Browsing diffs
'previousdiff' => '← Önceki değişiklik',
'nextdiff' => 'Sonraki değişiklik →',

# Media information
'mediawarning' => "'''Uyarı''': Bu dosya türü kötü niyetli kodlar içerebilir.
Bunu çalıştırmak, sisteminizi tehlikeye atabilir.",
'imagemaxsize' => "Resim boyutu sınırı:<br />''(dosya açıklama sayfaları için)''",
'thumbsize' => 'Küçük boyut:',
'widthheightpage' => '$1 × $2, $3 {{PLURAL:$3|sayfa|sayfa}}',
'file-info' => 'dosya boyutu: $1, MIME tipi: $2',
'file-info-size' => '$1 × $2 piksel, dosya boyutu: $3, MIME tipi: $4',
'file-info-size-pages' => '$1 × $2 piksel, dosya boyutu: $3, MIME tipi: $4, $5 {{PLURAL:$5|sayfa|sayfa}}',
'file-nohires' => 'Daha yüksek çözünürlük yok.',
'svg-long-desc' => 'SVG dosyası, sözde $1 × $2 piksel, dosya boyutu: $3',
'show-big-image' => 'Tam çözünürlük',
'show-big-image-preview' => 'Ön izleme boyutu: $1.',
'show-big-image-other' => 'Diğer {{PLURAL:$2|çözünürlük|çözünürlükleri}}: $1.',
'show-big-image-size' => '$1 × $2 piksel',
'file-info-gif-looped' => 'döngüye girdi',
'file-info-gif-frames' => '$1 {{PLURAL:$1|kare|kare}}',
'file-info-png-looped' => 'döngüye girdi',
'file-info-png-repeat' => '$1 {{PLURAL:$1|defa|defa}} oynatıldı',
'file-info-png-frames' => '$1 {{PLURAL:$1|frame|frames}}',

# Special:NewFiles
'newimages' => 'Yeni dosya galerisi',
'imagelisttext' => "Aşağıdaki liste '''$2''' göre dizilmiş {{PLURAL:$1|adet dosyayı|adet dosyayı}} göstermektedir.",
'newimages-summary' => 'Bu özel sayfa, en son yüklenen dosyaları göstermektedir.',
'newimages-legend' => 'Filtre',
'newimages-label' => 'Dosya adı (ya da bir parçası):',
'showhidebots' => '(botları $1)',
'noimages' => 'Görecek bir şey yok.',
'ilsubmit' => 'Ara',
'bydate' => 'kronolojik sırayla',
'sp-newimages-showfrom' => '$1, $2 tarihi itibarı ile yeni dosyaları göster',

# Video information, used by Language::formatTimePeriod() to format lengths in the above messages
'video-dims' => '$1, $2×$3',
'seconds-abbrev' => '$1sn',
'minutes-abbrev' => '$1dk.',
'hours-abbrev' => '$1s',
'seconds' => '{{PLURAL:$1|$1 saniye|$1 saniye}}',
'minutes' => '{{PLURAL:$1|$1 dakika|$1 dakika}}',
'hours' => '{{PLURAL:$1|$1 saat|$1 saat}}',
'days' => '{{PLURAL:$1|$1 gün|$1 gün}}',
'ago' => '$1 önce',

# Bad image list
'bad_image_list' => 'Biçim aşağıdaki gibidir:

Sadece liste öğeleri (* ile başlayan satırlar) dikkate alınmaktadır.
Satırdaki ilk bağlantı, kötü dosyaya giden bir bağlantı olmalıdır.
Takip eden bağlantılar istisna olarak kabul edilmektedir. Örneğin: dosya, sayfada satır içinde görünebilir.',

# Variants for Tajiki language
'variantname-tg' => 'tg',

# Metadata
'metadata' => 'Üstveri',
'metadata-help' => 'Bu dosyada, muhtemelen fotoğraf makinası ya da tarayıcı tarafından eklenmiş ek bilgiler mevcuttur. Eğer dosyada sonradan değişiklik yapıldıysa, bazı bilgiler yeni değişikliğe göre eski kalmış olabilir.',
'metadata-expand' => 'Ayrıntıları göster',
'metadata-collapse' => 'Ayrıntıları gösterme',
'metadata-fields' => 'Bu sayfada listelenen EXIF metadata alanları resim görüntü sayfalarında metadata tablosu gizlendiğinde kullanılır.
Diğerleri varsayılan olarak gizlenecektir.
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
'exif-imagewidth' => 'Genişlik',
'exif-imagelength' => 'Yükseklik',
'exif-bitspersample' => 'Bits per component',
'exif-compression' => 'Sıkıştırma planı',
'exif-photometricinterpretation' => 'Piksel bileşimi',
'exif-orientation' => 'Yönlendirme',
'exif-samplesperpixel' => 'Sayı bileşenleri',
'exif-planarconfiguration' => 'Veri düzeni',
'exif-ycbcrsubsampling' => 'Y-C alt örnekleme oranı',
'exif-ycbcrpositioning' => 'Y ve C yerleştirme',
'exif-xresolution' => 'Yatay çözünürlük',
'exif-yresolution' => 'Dikey çözünürlük',
'exif-stripoffsets' => 'Resim veri konumu',
'exif-rowsperstrip' => 'Number of rows per strip',
'exif-stripbytecounts' => 'Bytes per compressed strip',
'exif-jpeginterchangeformat' => 'Offset to JPEG SOI',
'exif-jpeginterchangeformatlength' => 'Bytes of JPEG data',
'exif-whitepoint' => 'Beyaz nokta kromatiği',
'exif-primarychromaticities' => 'Chromaticities of primarities',
'exif-ycbcrcoefficients' => 'Renk aralığı dönüştürme matris katsayısı',
'exif-referenceblackwhite' => 'Pair of black and white reference values',
'exif-datetime' => 'Dosya değişiklik tarihi ve zamanı',
'exif-imagedescription' => 'Resim başlığı',
'exif-make' => 'Kamera markası',
'exif-model' => 'Kamera modeli',
'exif-software' => 'Yazılım',
'exif-artist' => 'Yaratıcısı',
'exif-copyright' => 'Telif hakkı sahibi',
'exif-exifversion' => 'Exif sürümü',
'exif-flashpixversion' => 'Desteklenen Flashpix sürümü',
'exif-colorspace' => 'Renk aralığı',
'exif-componentsconfiguration' => 'Her bileşenin anlamı',
'exif-compressedbitsperpixel' => 'Resim sıkıştırma biçimi',
'exif-pixelydimension' => 'Resim genişliği',
'exif-pixelxdimension' => 'Resim yüksekliği',
'exif-usercomment' => 'Kullanıcı yorumu',
'exif-relatedsoundfile' => 'İlişkin ses dosyası',
'exif-datetimeoriginal' => 'Orjinal yaratma zamanı',
'exif-datetimedigitized' => 'Dijitalleştirme zamanı',
'exif-subsectime' => 'Alt-ikinci zaman',
'exif-subsectimeoriginal' => 'Orjinal alt-ikinci zaman',
'exif-subsectimedigitized' => 'Dijitalize alt-ikinci zaman',
'exif-exposuretime' => 'Çekim süresi',
'exif-exposuretime-format' => '$1 saniye ($2)',
'exif-fnumber' => 'F numarası',
'exif-fnumber-format' => 'f/$1',
'exif-exposureprogram' => 'Poz programı',
'exif-spectralsensitivity' => 'Spektral duyarlılık',
'exif-isospeedratings' => 'ISO hız derecesi',
'exif-shutterspeedvalue' => 'APEX deklanşör hızı',
'exif-aperturevalue' => 'APEX açıklığı',
'exif-brightnessvalue' => 'APEX parlaklığı',
'exif-exposurebiasvalue' => 'Poz eğilim değeri',
'exif-maxaperturevalue' => 'Maksimum açıklık değeri',
'exif-subjectdistance' => 'Özne uzaklığı',
'exif-meteringmode' => 'Ölçüm kipi',
'exif-lightsource' => 'Işık kaynağı',
'exif-flash' => 'Flaş',
'exif-focallength' => 'Mercek odak uzaklığı',
'exif-focallength-format' => '$1 mm',
'exif-subjectarea' => 'Özne alanı',
'exif-flashenergy' => 'Flaş düzeyi',
'exif-focalplanexresolution' => 'Odaksal düzey X çözünürlüğü',
'exif-focalplaneyresolution' => 'Odaksal düzey Y çözünürlüğü',
'exif-focalplaneresolutionunit' => 'Odaksal düzey çözünürlük ünitesi',
'exif-subjectlocation' => 'Özne konumu',
'exif-exposureindex' => 'Poz dizini',
'exif-sensingmethod' => 'Algılama metodu',
'exif-filesource' => 'Dosya kaynağı',
'exif-scenetype' => 'Sahne tipi',
'exif-customrendered' => 'Özel resim işlemi',
'exif-exposuremode' => 'Pozlama',
'exif-whitebalance' => 'Beyaz denge',
'exif-digitalzoomratio' => 'Yakınlaştırma oranı',
'exif-focallengthin35mmfilm' => "35 mm'lik filmde odak uzaklığı",
'exif-scenecapturetype' => 'Sahne yakalama tipi',
'exif-gaincontrol' => 'Sahne kontrolü',
'exif-contrast' => 'Karşıtlık',
'exif-saturation' => 'Doygunluk',
'exif-sharpness' => 'Keskinlik',
'exif-devicesettingdescription' => 'Aygıt ayar tanımları',
'exif-subjectdistancerange' => 'Özne mesafe menzili',
'exif-imageuniqueid' => 'Resim özel kimliği',
'exif-gpsversionid' => 'GPS sürümü',
'exif-gpslatituderef' => 'Kuzey veya güney enlemi',
'exif-gpslatitude' => 'Enlem',
'exif-gpslongituderef' => 'Doğu veya batı boylamı',
'exif-gpslongitude' => 'Boylam',
'exif-gpsaltituderef' => 'Yükseklik kaynağı',
'exif-gpsaltitude' => 'Yükseklik',
'exif-gpstimestamp' => 'GPS zamanı (atom saati)',
'exif-gpssatellites' => 'Ölçmek için kullandığı uydular',
'exif-gpsstatus' => 'Alıcı konumu',
'exif-gpsmeasuremode' => 'Ölçüm kipi',
'exif-gpsdop' => 'Ölçüm işlemi',
'exif-gpsspeedref' => 'Hız birimi',
'exif-gpsspeed' => 'GPS alıcı hızı',
'exif-gpstrackref' => 'Reference for direction of movement',
'exif-gpstrack' => 'Kontrol mekanizması',
'exif-gpsimgdirectionref' => 'Reference for direction of image',
'exif-gpsimgdirection' => 'Resim yönü',
'exif-gpsmapdatum' => 'Geodetic survey data used',
'exif-gpsdestlatituderef' => 'Reference for latitude of destination',
'exif-gpsdestlatitude' => 'Latitude destination',
'exif-gpsdestlongituderef' => 'Reference for longitude of destination',
'exif-gpsdestlongitude' => 'Longitude of destination',
'exif-gpsdestbearingref' => 'Reference for bearing of destination',
'exif-gpsdestbearing' => 'Bearing of destination',
'exif-gpsdestdistanceref' => 'Reference for distance to destination',
'exif-gpsdestdistance' => 'Distance to destination',
'exif-gpsprocessingmethod' => 'Name of GPS processing method',
'exif-gpsareainformation' => 'GPS alan adı',
'exif-gpsdatestamp' => 'GPS zamanı',
'exif-gpsdifferential' => 'GPS differential correction',
'exif-jpegfilecomment' => 'JPEG dosyası yorumu',
'exif-keywords' => 'Anahtar kelimeler',
'exif-countrycreated' => 'Resmin alındığı ülke',
'exif-citycreated' => 'Resmin alındığı şehir',
'exif-worldregiondest' => 'Gösterilen bölge',
'exif-countrydest' => 'Gösterilen ülke',
'exif-countrycodedest' => 'Gösterilen ülke kodu',
'exif-citydest' => 'Gösterilen Şehir',
'exif-objectname' => 'Kısa başlık',
'exif-specialinstructions' => 'Özel talimatlar',
'exif-headline' => 'Başlık',
'exif-credit' => 'Sağlayıcı',
'exif-source' => 'Kaynak',
'exif-urgency' => 'Aciliyet',
'exif-fixtureidentifier' => 'Fikstür adı',
'exif-contact' => 'İletişim bilgileri',
'exif-writer' => 'Yazar',
'exif-languagecode' => 'Dil',
'exif-iimversion' => 'IIM sürümü',
'exif-iimcategory' => 'Kategori',
'exif-datetimeexpires' => 'Bu tarihten sonra kullanmayın:',
'exif-identifier' => 'Tanımlayıcı',
'exif-lens' => 'Kullanılan objektif',
'exif-serialnumber' => 'Kameranın seri numarası',
'exif-cameraownername' => 'Kameranın sahibi',
'exif-label' => 'Etiket',
'exif-nickname' => 'Görüntünün resmî olmayan adı',
'exif-rating' => 'Oylama (5 üzerinden)',
'exif-copyrighted' => 'Telif hakkı durumu',
'exif-copyrightowner' => 'Telif hakkı sahibi',
'exif-usageterms' => 'Kullanım şartları',
'exif-webstatement' => 'Çevrimiçi telif hakkı bildirimi',
'exif-licenseurl' => 'Telif hakkı lisansı için URL',
'exif-morepermissionsurl' => 'Alternatif lisans bilgileri',
'exif-attributionurl' => 'Bu çalışmayı yeniden kullanırken lütfen bağlantı verin',
'exif-pngfilecomment' => 'PNG dosyası yorumu',
'exif-disclaimer' => 'Sorumluluk reddi',
'exif-contentwarning' => 'İçerik uyarısı',
'exif-giffilecomment' => 'GIF dosyası yorumu',
'exif-intellectualgenre' => 'Öğe türü',
'exif-subjectnewscode' => 'Konu kodu',
'exif-event' => 'Adı geçen olay',
'exif-organisationinimage' => 'Organizasyon gösterilmiştir',
'exif-personinimage' => 'Adı geçen kişi',
'exif-originalimageheight' => 'Resmin kırpılmadan önceki yükseliği',
'exif-originalimagewidth' => 'Resmin kırpılmadan önceki genişliği',

# EXIF attributes
'exif-compression-1' => 'Sıkıştırılmamış',
'exif-compression-6' => 'JPEG',

'exif-copyrighted-true' => 'Telif hakkı',
'exif-copyrighted-false' => 'Kamu malı',

'exif-photometricinterpretation-2' => 'RGB',
'exif-photometricinterpretation-6' => 'YCbCr',

'exif-unknowndate' => 'Bilinmeyen zaman',

'exif-orientation-1' => 'Normal',
'exif-orientation-2' => 'Yatay çevirme',
'exif-orientation-3' => '180° döndürülmüş',
'exif-orientation-4' => 'Dikey çevirme',
'exif-orientation-5' => '90° döndürülmüş (sola doğru) ve dikey çevirme',
'exif-orientation-6' => '90° döndürülmüş (saat yönünün tersine)',
'exif-orientation-7' => '90° döndürülmüş (saat yönünde) ve dikey çevirme',
'exif-orientation-8' => '90° döndürülmüş (saat yönünde)',

'exif-planarconfiguration-1' => 'chunky format',
'exif-planarconfiguration-2' => 'Düzlemsel biçim',

'exif-xyresolution-i' => '$1 dpi',
'exif-xyresolution-c' => '$1 dpc',

'exif-colorspace-1' => 'sRGB',
'exif-colorspace-65535' => 'Fotoğrafta renk ayarı yapılmamış.',

'exif-componentsconfiguration-0' => 'Var olmayan',
'exif-componentsconfiguration-1' => 'Y',
'exif-componentsconfiguration-2' => 'Cb',
'exif-componentsconfiguration-3' => 'Cr',
'exif-componentsconfiguration-4' => 'R',
'exif-componentsconfiguration-5' => 'G',
'exif-componentsconfiguration-6' => 'B',

'exif-exposureprogram-0' => 'Tanımlanmadı',
'exif-exposureprogram-1' => 'Manuel (elle)',
'exif-exposureprogram-2' => 'Normal program',
'exif-exposureprogram-3' => 'Açıklık önceliği',
'exif-exposureprogram-4' => 'Denklanşör önceliği',
'exif-exposureprogram-5' => 'Yaratıcı program',
'exif-exposureprogram-6' => 'Hareket programı (hızlı hareketler içeren sahneleri çekmek için)',
'exif-exposureprogram-7' => 'Portre modu (arka planları bulanıklaştırıp nesneyi netleştirerek çeker)',
'exif-exposureprogram-8' => 'Peyzaj kipi (yalnızca uzaktaki bir nesneye odaklanır)',

'exif-subjectdistance-value' => '$1 metre',

'exif-meteringmode-0' => 'Bilinmiyor',
'exif-meteringmode-1' => 'Orta',
'exif-meteringmode-2' => 'Merkez ağırlıklı',
'exif-meteringmode-3' => 'Noktalı',
'exif-meteringmode-4' => 'Çok noktalı',
'exif-meteringmode-5' => 'Desenli',
'exif-meteringmode-6' => 'Kısmi',
'exif-meteringmode-255' => 'Diğer',

'exif-lightsource-0' => 'Bilinmiyor',
'exif-lightsource-1' => 'Gün ışığı',
'exif-lightsource-2' => 'Floresan',
'exif-lightsource-3' => 'Akkor ışık',
'exif-lightsource-4' => 'Flaş',
'exif-lightsource-9' => 'Açık hava',
'exif-lightsource-10' => 'Bulutlu',
'exif-lightsource-11' => 'Gölgeli',
'exif-lightsource-12' => 'Gün ışığı floresan  (D 5700 – 7100K)',
'exif-lightsource-13' => 'Gün ışığı beyaz floresan (N 4600 – 5400K)',
'exif-lightsource-14' => 'Doğal beyaz floresan (W 3900 – 4500K)',
'exif-lightsource-15' => 'Beyaz floresan (WW 3200 – 3700K)',
'exif-lightsource-17' => 'A tipi standart ışık',
'exif-lightsource-18' => 'B tipi standart ışık',
'exif-lightsource-19' => 'C tipi standart ışık',
'exif-lightsource-20' => 'D55',
'exif-lightsource-21' => 'D65',
'exif-lightsource-22' => 'D75',
'exif-lightsource-23' => 'D50',
'exif-lightsource-24' => 'ISO stüdyo volframı',
'exif-lightsource-255' => 'Diğer ışık kaynakları',

# Flash modes
'exif-flash-fired-0' => 'Flaş patlamadı',
'exif-flash-fired-1' => 'Flaş patladı',
'exif-flash-return-0' => 'Dönen ışık modu kapalı',
'exif-flash-return-2' => 'Dönen ışık yok',
'exif-flash-return-3' => 'Dönen ışık tespit edildi',
'exif-flash-mode-1' => 'Zorunlu flaş patladı',
'exif-flash-mode-2' => 'Zorunlu flaş kapalı',
'exif-flash-mode-3' => 'Otomatik kip',
'exif-flash-function-1' => 'Flaş kapalı',
'exif-flash-redeye-1' => 'Kırmızı göz azaltma kipi',

'exif-focalplaneresolutionunit-2' => 'inç',

'exif-sensingmethod-1' => 'Tanımsız',
'exif-sensingmethod-2' => 'Tek çip renkli algılama sensörü',
'exif-sensingmethod-3' => 'İki çip renkli algılama sensörü',
'exif-sensingmethod-4' => 'Üç çip renkli algılama sensörü',
'exif-sensingmethod-5' => 'Ardışık, renkli algılama sensörü',
'exif-sensingmethod-7' => 'Üç çizgili algılayıcı',
'exif-sensingmethod-8' => 'Aritmetik, renkli algılama sensörü',

'exif-filesource-3' => 'Dijital fotoğraf makinesi',

'exif-scenetype-1' => 'Hemen fotoğraflama',

'exif-customrendered-0' => 'Normal işlem',
'exif-customrendered-1' => 'Özel işlem',

'exif-exposuremode-0' => 'Otomatik pozlama',
'exif-exposuremode-1' => 'Manuel pozlama',
'exif-exposuremode-2' => 'Otomatik kenetleme',

'exif-whitebalance-0' => 'Otomatik beyaz denge',
'exif-whitebalance-1' => 'Manuel beyaz denge',

'exif-scenecapturetype-0' => 'Standart',
'exif-scenecapturetype-1' => 'Manzara',
'exif-scenecapturetype-2' => 'Portre',
'exif-scenecapturetype-3' => 'Gece çekimi',

'exif-gaincontrol-0' => 'Hiçbiri',
'exif-gaincontrol-1' => 'Low gain up',
'exif-gaincontrol-2' => 'High gain up',
'exif-gaincontrol-3' => 'Low gain down',
'exif-gaincontrol-4' => 'High gain down',

'exif-contrast-0' => 'Normal',
'exif-contrast-1' => 'Yumuşak',
'exif-contrast-2' => 'Sert',

'exif-saturation-0' => 'Normal',
'exif-saturation-1' => 'Düşük doygunluk',
'exif-saturation-2' => 'Yüksek doygunluk',

'exif-sharpness-0' => 'Normal',
'exif-sharpness-1' => 'Yumuşak',
'exif-sharpness-2' => 'Sert',

'exif-subjectdistancerange-0' => 'Bilinmiyor',
'exif-subjectdistancerange-1' => 'Makro (yakın çekim)',
'exif-subjectdistancerange-2' => 'Kapalı görünüm',
'exif-subjectdistancerange-3' => 'Uzak görünüm',

# Pseudotags used for GPSLatitudeRef and GPSDestLatitudeRef
'exif-gpslatitude-n' => 'Kuzey enlemi',
'exif-gpslatitude-s' => 'Güney enlemi',

# Pseudotags used for GPSLongitudeRef and GPSDestLongitudeRef
'exif-gpslongitude-e' => 'Doğu boylamı',
'exif-gpslongitude-w' => 'Batı boylamı',

# Pseudotags used for GPSAltitudeRef
'exif-gpsaltitude-above-sealevel' => 'Deniz seviyesinden $1 {{PLURAL:$1|metre|metre}} yukarıda',
'exif-gpsaltitude-below-sealevel' => 'Deniz seviyesinden $1 {{PLURAL:$1|metre|metre}} aşağıda',

'exif-gpsstatus-a' => 'Ölçüm devam ediyor',
'exif-gpsstatus-v' => 'Ölçüm işlerliği',

'exif-gpsmeasuremode-2' => '2-boyutlu ölçüm',
'exif-gpsmeasuremode-3' => '3-boyutlu ölçüm',

# Pseudotags used for GPSSpeedRef
'exif-gpsspeed-k' => 'km/s',
'exif-gpsspeed-m' => 'Mil/saat',
'exif-gpsspeed-n' => 'Deniz mili',

# Pseudotags used for GPSDestDistanceRef
'exif-gpsdestdistance-k' => 'Kilometre',
'exif-gpsdestdistance-m' => 'Mil',
'exif-gpsdestdistance-n' => 'Deniz mili',

'exif-gpsdop-excellent' => 'Harika ($1)',
'exif-gpsdop-good' => 'İyi ($1)',
'exif-gpsdop-moderate' => 'Ne iyi ne kötü ($1)',
'exif-gpsdop-fair' => 'İdare eder ($1)',
'exif-gpsdop-poor' => 'Yetersiz ($1)',

'exif-objectcycle-a' => 'Sadece sabah',
'exif-objectcycle-p' => 'Sadece akşam',
'exif-objectcycle-b' => 'Gece ve gündüz',

# Pseudotags used for GPSTrackRef, GPSImgDirectionRef and GPSDestBearingRef
'exif-gpsdirection-t' => 'Gerçek yönü',
'exif-gpsdirection-m' => 'Manyetik yönü',

'exif-ycbcrpositioning-1' => 'Ortalanmış',

'exif-dc-contributor' => 'Katkıda bulunanlar',
'exif-dc-coverage' => 'Medyanın konumsal ya da zamansal kapsamı',
'exif-dc-date' => 'Tarih(ler)',
'exif-dc-publisher' => 'Yayımcı',
'exif-dc-relation' => 'İlgili medya',
'exif-dc-rights' => 'Haklar',
'exif-dc-source' => 'Kaynak medya',
'exif-dc-type' => 'Medya türü',

'exif-rating-rejected' => 'Reddedildi',

'exif-isospeedratings-overflow' => "65535'den büyüktür",

'exif-iimcategory-ace' => 'Sanat, kültür ve eğlence',
'exif-iimcategory-clj' => 'Suç ve hukuk',
'exif-iimcategory-dis' => 'Afetler ve kazalar',
'exif-iimcategory-fin' => 'Ekonomi ve iş',
'exif-iimcategory-edu' => 'Eğitim',
'exif-iimcategory-evn' => 'Çevre',
'exif-iimcategory-hth' => 'Sağlık',
'exif-iimcategory-hum' => 'İnsan ilgisi',
'exif-iimcategory-lab' => 'Çalışma',
'exif-iimcategory-lif' => 'Yaşam tarzı ve eğlence',
'exif-iimcategory-pol' => 'Siyaset',
'exif-iimcategory-rel' => 'Din ve inanç',
'exif-iimcategory-sci' => 'Bilim ve teknoloji',
'exif-iimcategory-soi' => 'Sosyal konular',
'exif-iimcategory-spo' => 'Spor',
'exif-iimcategory-war' => 'Savaş, çatışma ve kargaşa',
'exif-iimcategory-wea' => 'Hava',

'exif-urgency-normal' => 'Normal ( $1 )',
'exif-urgency-low' => 'Düşük ( $1 )',
'exif-urgency-high' => 'Yüksek ( $1 )',
'exif-urgency-other' => 'Kullanıcı tanımlı öncelik ($1)',

# External editor support
'edit-externally' => 'Dosyayı harici bir uygulamayla değiştirin.',
'edit-externally-help' => '(Daha fazla bilgi için metadaki [//www.mediawiki.org/wiki/Manual:External_editors dış uygulama ayarları] (İngilizce) sayfasına bakabilirsiniz)',

# 'all' in various places, this might be different for inflected languages
'watchlistall2' => 'Hepsini göster',
'namespacesall' => 'hepsi',
'monthsall' => 'hepsi',
'limitall' => 'tümü',

# E-mail address confirmation
'confirmemail' => 'E-posta adresini onayla',
'confirmemail_noemail' => '[[Special:Preferences|Kullanıcı tercihlerinizde]] tanımlanmış uygun bir e-posta adresiniz yok.',
'confirmemail_text' => "Viki'nin e-posta işlevlerini kullanmabilmek için, önce e-posta adresinizin doğrulanması gerekiyor.
Adresinize onay e-postası göndermek için aşağıdaki butonu tıklayın.
Gönderilecek iletide adresinizi onaylamak için tarayıcınızla erişebileceğiniz, onay kodu içeren bir bağlantı olacak;
linki tarayıcınıda açın ve e-posta adresinizin geçerliliğini doğrulayın.",
'confirmemail_pending' => 'Bir doğrulama kodu size zaten e-postalandı;
Eğer hesabınızı yeni oluşturduysanız, yeni bir kod istemeye çalışmadan önce gelmesini biraz beklemeyi isteyebilirsiniz.',
'confirmemail_send' => 'Onay kodu gönder',
'confirmemail_sent' => 'Onay e-postası gönderildi.',
'confirmemail_oncreate' => 'Bir doğrulama kodu e-posta adresinize gönderildi.
Giriş yapmak için bu kod gerekli değildir, ancak bu vikideki herhangi bir e-posta tabanlı özelliği devreye sokmak için bunu sağlamak zorundasınız.',
'confirmemail_sendfailed' => '{{SITENAME}} Onay maili gönderemedi. Geçersiz karakterler olabilir adresi kontrol edin

Mail yazılımı iade etti:$1',
'confirmemail_invalid' => 'Geçersiz onay kodu. Onay kodunun son kullanma tarihi geçmiş olabilir.',
'confirmemail_needlogin' => 'E-posta adresinizi onaylamak için önce $1 yapmalısınız.',
'confirmemail_success' => "E-posta adresiniz doğrulandı. [[Special:UserLogin|Oturum açıp]] Viki'nin keyfini çıkarabilirsiniz.",
'confirmemail_loggedin' => 'E-posta adresiniz onaylandı.',
'confirmemail_error' => 'Onayınız bilinmeyen bir hata nedeniyle kaydedilemedi.',
'confirmemail_subject' => '{{SITENAME}} e-posta adres onayı.',
'confirmemail_body' => 'Birisi, muhtemelen siz, $1 IP adresinden,
{{SITENAME}} sitesinde bu e-posta adresi ile $2 hesabını açtı.

Bu hesabın gerçekten size ait olduğunu onaylamak ve {{SITENAME}} sitesindeki
e-posta işlevlerini aktif hale getirmek için aşağıdakı bağlantıyı tarayıcınızda açın.

$3

Eğer hesabı siz *açmadıysanız*, e-posta adresi doğrulamasını
iptal etmek için aşağıdaki bağlantıyı takip edin:

$5

Bu onay kodu $4 tarihine kadar geçerli olacak.',
'confirmemail_body_changed' => 'Birisi, muhtemelen siz, $1 IP adresinden,
{{SITENAME}} sitesinde "$2" hesabı için e-posta adresini değiştirdi.

Bu hesabın gerçekten size ait olduğunu onaylamak ve {{SITENAME}} sitesindeki
e-posta işlevlerini tekrar aktif hale getirmek için aşağıdakı bağlantıyı tarayıcınızda açın.:

$3

Eğer hesap size ait *değilse*, e-posta adresi doğrulamasını
iptal etmek için aşağıdaki bağlantıyı takip edin:

$5

Bu onay kodu $4 tarihine kadar geçerli olacak.',
'confirmemail_body_set' => 'Birisi $1 IP adresiyle {{SITENAME}} sitesinde "$2" kullanıcı hesabının e-posta adresi olarak bu e-posta adresini belirtti.

Eğer bu işlemi yapan sizseniz ve {{SITENAME}} sitesindeki e-posta işlevlerini tekrar aktif etmek istiyorsanız alttaki bağlantıyı tarayıcınızda açmanız gerekiyor:

$3

Eğer bu işlemi yapan siz değilseniz ve böyle bir üyeliğiniz yoksa e-posta onay işlemini iptal etmek için alttaki bağlantıyı tarayıcınızda açmanız gerekiyor:

$5

Bu onay kodu $4 tarihine kadar geçerlidir.',
'confirmemail_invalidated' => 'E-posta adresi doğrulaması iptal edildi',
'invalidateemail' => 'E-posta doğrulamasını iptal et',

# Scary transclusion
'scarytranscludedisabled' => '[Vikilerarası çapraz ekleme devre dışı]',
'scarytranscludefailed' => '[$1 için şablon alımı başarısız oldu]',
'scarytranscludetoolong' => '[URL çok uzun]',

# Delete conflict
'deletedwhileediting' => "'''Uyarı''': Bu sayfa siz değişiklik yapmaya başladıktan sonra silinmiş!",
'confirmrecreate' => "Bu sayfayı [[User:$1|$1]] ([[User talk:$1|mesaj]]) kullanıcısı siz sayfada değişiklik yaparken silmiştir, nedeni:
: ''$2''
Sayfayı baştan açmak isityorsanız, lütfen onaylayın.",
'confirmrecreate-noreason' => '[[User:$1|$1]] ([[User talk:$1|mesaj]]) adlı kullanıcı, siz değişiklik yapmaya başladıktan sonra bu sayfayı sildi. Lütfen bu sayfayı gerçekten yeniden oluşturmak istediğinizi onaylayın.',
'recreate' => 'Canlandır',

'unit-pixel' => 'px',

# action=purge
'confirm_purge_button' => 'Tamam',
'confirm-purge-top' => 'Sayfa önbelleği temizlensin mi?',
'confirm-purge-bottom' => 'Bir sayfayı tasfiye etmek önbelleği temizler ve en güncel sürümün görünmesine zorlar.',

# action=watch/unwatch
'confirm-watch-button' => 'TAMAM',
'confirm-watch-top' => 'Bu sayfayı izleme listenize ekleyin',
'confirm-unwatch-button' => 'TAMAM',
'confirm-unwatch-top' => 'Bu sayfayı izleme listenizden çıkarın',

# Separators for various lists, etc.
'percent' => '%$1',

# Multipage image navigation
'imgmultipageprev' => '← önceki sayfa',
'imgmultipagenext' => 'sonraki sayfa →',
'imgmultigo' => 'Git!',
'imgmultigoto' => '$1 sayfasına git',

# Table pager
'ascending_abbrev' => 'küçükten büyüğe',
'descending_abbrev' => 'azalan',
'table_pager_next' => 'Sonraki sayfa',
'table_pager_prev' => 'Önceki sayfa',
'table_pager_first' => 'İlk',
'table_pager_last' => 'Son',
'table_pager_limit' => 'Her sayfada $1 nesne göster',
'table_pager_limit_label' => 'Sayfa başına öğe:',
'table_pager_limit_submit' => 'Git',
'table_pager_empty' => 'Sonuç yok',

# Auto-summaries
'autosumm-blank' => 'Sayfayı boşalttı',
'autosumm-replace' => "Sayfa içeriği '$1' ile değiştiriliyor",
'autoredircomment' => '[[$1]] sayfasına yönlendirildi',
'autosumm-new' => "Sayfa oluşturdu, içeriği: '$1'",

# Live preview
'livepreview-loading' => 'Yükleniyor...',
'livepreview-ready' => 'Yükleniyor...  Tamam!',
'livepreview-failed' => 'Canlı önizleme başarısız! Normal önizlemeyi deneyin.',
'livepreview-error' => 'Bağlantı başarısız: $1 "$2".
Normal önizlemeyi deneyin.',

# Friendlier slave lag warnings
'lag-warn-normal' => '$1 {{PLURAL:$1|saniyeden|saniyeden}} yeni değişiklikler bu listede görünmeyebilir.',
'lag-warn-high' => 'Veritabanı sunucusundaki aşırı gecikmeden dolayı, $1 {{PLURAL:$1|saniyeden|saniyeden}} yeni değişiklikler bu listede görünmeyebilir.',

# Watchlist editor
'watchlistedit-numitems' => 'İzleme sayfanızda {{PLURAL:$1|1 başlık|$1 başlık}} var, tartışma sayfaları hariç.',
'watchlistedit-noitems' => 'İzleme listeniz hiçbir başlık içermemektedir.',
'watchlistedit-normal-title' => 'İzleme listesini düzenle',
'watchlistedit-normal-legend' => 'İzleme listesinden başlıkları kaldır',
'watchlistedit-normal-explain' => 'İzleme listenizdeki başlıklar aşağıda gösterilmiştir.
Bir başlığı çıkarmak için, yanındaki kutucuğu işaretleyin ve "{{int:Watchlistedit-normal-submit}}" düğmesine tıklayın.
[[Special:EditWatchlist/raw|Satır listesini]] de düzenleyebilirsiniz.',
'watchlistedit-normal-submit' => 'Başlıkları kaldır',
'watchlistedit-normal-done' => '{{PLURAL:$1|1 başlık|$1 başlık}} izleme listenizden çıkarıldı:',
'watchlistedit-raw-title' => 'Ham izleme listesini düzenle',
'watchlistedit-raw-legend' => 'Ham izleme listesini düzenle',
'watchlistedit-raw-explain' => 'İzleme listenizdeki başlıklar aşağıda gösterilmektedir. Her satırda bir başlık olmak üzere, başlıkları ekleyerek ya da silerek listeyi düzenleyebilirsiniz.
Bittiğinde "{{int:Watchlistedit-raw-submit}}"ye tıklayınız.
Ayrıca [[Special:EditWatchlist|standart düzenleme sayfasını]] da kullanabilirsiniz.',
'watchlistedit-raw-titles' => 'Başlıklar:',
'watchlistedit-raw-submit' => 'İzleme listesini güncelle',
'watchlistedit-raw-done' => 'İzleme listeniz güncellendi.',
'watchlistedit-raw-added' => '{{PLURAL:$1|1 başlık|$1 başlık}} eklendi:',
'watchlistedit-raw-removed' => '{{PLURAL:$1|1 başlık|$1 başlık}} silindi:',

# Watchlist editing tools
'watchlisttools-view' => 'İlgili değişiklikleri göster',
'watchlisttools-edit' => 'İzleme listesini gör ve düzenle',
'watchlisttools-raw' => 'Ham izleme listesini düzenle',

# Hijri month names
'hijri-calendar-m1' => 'Muharrem',
'hijri-calendar-m8' => 'Şaban',
'hijri-calendar-m9' => 'Ramazan',
'hijri-calendar-m10' => 'Şevval',

# Signatures
'signature' => '[[{{ns:user}}:$1|$2]] ([[{{ns:user_talk}}:$1|mesaj]])',

# Core parser functions
'unknown_extension_tag' => 'Bilinmeyen eklenti etiketi "$1"',
'duplicate-defaultsort' => '\'\'\'Uyarı:\'\'\' Varsayılan "$2" sınıflandırma anahtarı, önceki "$1" sınıflandırma anahtarını geçersiz kılıyor.',

# Special:Version
'version' => 'Sürüm',
'version-extensions' => 'Yüklü ekler',
'version-specialpages' => 'Özel sayfalar',
'version-parserhooks' => 'Derleyici çengelleri',
'version-variables' => 'Değişkenler',
'version-antispam' => 'Yığın mesaj (spam) önleme',
'version-skins' => 'Görünümler',
'version-other' => 'Diğer',
'version-mediahandlers' => 'Ortam işleyiciler',
'version-hooks' => 'Çengeller',
'version-extension-functions' => 'Ek fonksiyonları',
'version-parser-extensiontags' => 'Derleyici eklenti etiketleri',
'version-parser-function-hooks' => 'Derleyici fonksiyon çengelleri',
'version-hook-name' => 'Çengel adı',
'version-hook-subscribedby' => 'Abone olan',
'version-version' => '(Sürüm $1)',
'version-license' => 'Lisans',
'version-poweredby-credits' => "Bu wiki '''[//www.mediawiki.org/ MediaWiki]''' programı kullanılarak oluşturulmuştur, telif © 2001-$1 $2.",
'version-poweredby-others' => 'diğerleri',
'version-license-info' => "MediaWiki özgür bir yazılımdır; MediaWiki'yi, Özgür Yazılım Vakfı tarafından yayımlanmış olan GNU Genel Kamu Lisansının 2. veya (seçeceğiniz) daha sonraki bir sürümünün koşulları altında yeniden dağıtabilir ve/veya değiştirebilirsiniz.

MediaWiki yazılımı faydalı olacağı ümidiyle dağıtılmaktadır; ancak kastedilen SATILABİLİRLİK veya BELİRLİ BİR AMACA UYGUNLUK garantisi hariç HİÇBİR GARANTİSİ YOKTUR. Daha fazla ayrıntı için GNU Genel Kamu Lisansı'na bakınız.

Bu programla birlikte [{{SERVER}}{{SCRIPTPATH}}/COPYING GNU Genel Kamu Lisansının bir kopyasını] da edinmiş olmalısınız; eğer edinmediyseniz, Free Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA adresine yazın veya [//www.gnu.org/licenses/old-licenses/gpl-2.0.html lisansı çevrim içi olarak okuyun].",
'version-software' => 'Yüklü yazılım',
'version-software-product' => 'Ürün',
'version-software-version' => 'Versiyon',
'version-entrypoints' => "Giriş noktası URL'leri",
'version-entrypoints-header-entrypoint' => 'Giriş noktası',
'version-entrypoints-header-url' => 'URL',

# Special:FilePath
'filepath' => 'Dosyanın konumu',
'filepath-page' => 'Dosya adı:',
'filepath-submit' => 'Git',
'filepath-summary' => 'Bu özel sayfa bir dosya için tam yolu getirir.
Resimler tam çözünürlükte görüntülenir, diğer dosya tipleri ilgili programlarıyla doğrudan başlatılır.',

# Special:FileDuplicateSearch
'fileduplicatesearch' => 'Benzer dosyaları ara',
'fileduplicatesearch-summary' => 'Sağlama değeri tabanında benzer dosyaları ara.',
'fileduplicatesearch-legend' => 'Bir benzerini ara',
'fileduplicatesearch-filename' => 'Dosya adı:',
'fileduplicatesearch-submit' => 'Ara',
'fileduplicatesearch-info' => '$1 × $2 piksel<br />Dosya boyutu: $3<br />MIME tipi: $4',
'fileduplicatesearch-result-1' => '"$1" dosyasının özdeş benzeri yok.',
'fileduplicatesearch-result-n' => '"$1" dosyasının {{PLURAL:$2|1 özdeş benzeri|$2 özdeş benzeri}} var.',
'fileduplicatesearch-noresults' => '"$1" isminde hiç dosya bulunamadı.',

# Special:SpecialPages
'specialpages' => 'Özel sayfalar',
'specialpages-note' => '----
* Normal özel sayfalar.
* <span class="mw-specialpagerestricted">Kısıtlı özel sayfalar.</span>
* <span class="mw-specialpagecached">Önbelleğe alınan özel sayfalar (eskimiş olabilir)</span>',
'specialpages-group-maintenance' => 'Bakım raporları',
'specialpages-group-other' => 'Diğer özel sayfalar',
'specialpages-group-login' => 'Oturum aç / hesap edin',
'specialpages-group-changes' => 'Son değişiklikler ve kayıtlar',
'specialpages-group-media' => 'Dosya raporları ve yüklemeler',
'specialpages-group-users' => 'Kullanıcılar ve hakları',
'specialpages-group-highuse' => 'Çok kullanılan sayfalar',
'specialpages-group-pages' => 'Sayfaların listeleri',
'specialpages-group-pagetools' => 'Sayfa araçları',
'specialpages-group-wiki' => 'Viki bilgiler ve araçlar',
'specialpages-group-redirects' => 'Yönlendirmeli özel sayfalar',
'specialpages-group-spam' => 'Spam araçları',

# Special:BlankPage
'blankpage' => 'Boş sayfa',
'intentionallyblankpage' => 'Bu sayfa özellikle boştur.',

# External image whitelist
'external_image_whitelist' => ' #Bu satırı olduğu gibi bırakın<pre>
#Düzenli ifade parçalarını (sadece // arasında kalan kısmı) aşağıya ekleyin
#Bunlar harici (hotlink) resimlerin URLleri ile eşlenecektir
#Eşleşenler resim olarak görünecek, aksi takdirde sadece resme bir bağlantı görünecektir
# # ile başlayan satırlar yorum olarak muamele görecektir
#Büyük-küçük harf duyarsızdır

#Bütün düzenli ifade parçalarını bu satırın üstüne ekleyin. Bu satırı olduğu gibi bırakın</pre>',

# Special:Tags
'tags' => 'Geçerli değişiklik etiketleri',
'tag-filter' => '[[Special:Tags|Etiket]] süzgeci:',
'tag-filter-submit' => 'Süzgeç',
'tags-title' => 'Etiketler',
'tags-intro' => 'Bu sayfa, yazılımın bir değişikliği işaretleyebileceği etiketleri ve bunların anlamlarını listeler.',
'tags-tag' => 'Etiket adı',
'tags-display-header' => 'Değişiklik listelerindeki görünüm',
'tags-description-header' => 'Anlamının tam açıklaması',
'tags-hitcount-header' => 'Etiketli değişiklikler',
'tags-edit' => 'değiştir',
'tags-hitcount' => '$1 {{PLURAL:$1|değişiklik|değişiklik}}',

# Special:ComparePages
'comparepages' => 'Sayfaları karşılaştır',
'compare-selector' => 'Sayfa sürümlerini karşılaştır',
'compare-page1' => 'Sayfa 1',
'compare-page2' => 'Sayfa 2',
'compare-rev1' => 'Sürüm 1',
'compare-rev2' => 'Sürüm 2',
'compare-submit' => 'Karşılaştır',
'compare-invalid-title' => 'Belirttiğiniz başlık geçersiz.',
'compare-title-not-exists' => 'Belirttiğiniz başlık mevcut değil.',
'compare-revision-not-exists' => 'Belirttiğiniz sürüm mevcut değil.',

# Database error messages
'dberr-header' => 'Bu vikinin bir sorunu var',
'dberr-problems' => 'Üzgünüz! Bu site teknik zorluklar yaşıyor.',
'dberr-again' => 'Bir kaç dakika bekleyip tekrar yüklemeyi deneyin.',
'dberr-info' => '(Veritabanı sunucusuyla irtibat kurulamıyor: $1)',
'dberr-usegoogle' => 'Bu zaman zarfında Google ile aramayı deneyebilirsiniz.',
'dberr-outofdate' => 'İçeriğimizin onların dizinlerinde güncel olmayabileceğini dikkate alın.',
'dberr-cachederror' => 'Aşağıdaki istenen sayfanın önbellekteki bir kopyasıdır, ve güncel olmayabilir.',

# HTML forms
'htmlform-invalid-input' => 'Girdinizin bir kısmıyla ilgili sorunlar var',
'htmlform-select-badoption' => 'Belirttiğiniz değer geçerli bir seçenek değil.',
'htmlform-int-invalid' => 'Belirttiğiniz değer bir tamsayı değil.',
'htmlform-float-invalid' => 'Belirttiğiniz değer bir sayı değil.',
'htmlform-int-toolow' => "Belirttiğiniz değer asgari $1'in altında",
'htmlform-int-toohigh' => "Belirttiğiniz değer azami $1'in üstünde",
'htmlform-required' => 'Bu değer gereklidir',
'htmlform-submit' => 'Gönder',
'htmlform-reset' => 'Değişiklikleri geri al',
'htmlform-selectorother-other' => 'Diğer',

# SQLite database support
'sqlite-has-fts' => '$1 tam-metin arama desteği ile',
'sqlite-no-fts' => '$1 tam-metin arama desteği olmaksızın',

# New logging system
'logentry-delete-delete' => '$1 $3 sayfasını sildi',
'logentry-delete-restore' => '$1 $3 sayfasını geri getirdi',
'logentry-delete-revision' => '$1 $3: $4 sayfasında {{PLURAL:$5|bir sürümün|$5 sürümün}} görünürlüğünü değiştirdi',
'logentry-delete-revision-legacy' => '$1 $3 sayfasındaki sürümlerin görünürlüğünü değiştirdi',
'logentry-suppress-revision' => '$1 $3: $4 sayfasında {{PLURAL:$5|bir sürümün|$5 sürümün}} görünürlüğünü gizlice değiştirdi',
'logentry-suppress-revision-legacy' => '$1 $3 sayfasındaki sürümlerin görünürlüğünü değiştirdi',
'revdelete-content-hid' => 'Gizli içerik',
'revdelete-summary-hid' => 'değişiklik özeti gizlenmiş',
'revdelete-uname-hid' => 'kullanıcı adı gizli',
'revdelete-content-unhid' => 'içerik gösterildi',
'revdelete-summary-unhid' => 'değişiklik özeti gösterildi',
'revdelete-uname-unhid' => 'kullanıcı adı gösterildi',
'revdelete-restricted' => 'hizmetliler için uygulanmış kısıtlamalar',
'revdelete-unrestricted' => 'hizmetliler için kaldırılmış kısıtlamalar',
'logentry-move-move' => '$1 $3 sayfasını $4 sayfasına taşıdı',
'logentry-move-move-noredirect' => '$1 $3 sayfasını $4 sayfasına yönlendirme olmaksızın taşıdı',
'logentry-move-move_redir' => '$1 $3 sayfasını $4 sayfasına yönlendirme üzerinden taşıdı',
'logentry-patrol-patrol-auto' => '$1 $3 sayfasını $4 sürümü ile kontrol etti',
'logentry-newusers-newusers' => '$1 kullanıcı hesabı oluşturdu',
'logentry-newusers-create' => '$1 kullanıcı hesabı oluşturdu',
'logentry-newusers-create2' => '$1 kullanıcı hesabı oluşturdu $3',
'logentry-newusers-autocreate' => '$1 hesabı otomatik olarak oluşturuldu',
'newuserlog-byemail' => 'e-posta yoluyla şifre gönderilmiştir',

# Feedback
'feedback-subject' => 'Konu:',
'feedback-message' => 'Mesaj:',
'feedback-cancel' => 'İptal',
'feedback-submit' => 'Geribildirimi Gönder',
'feedback-adding' => 'Sayfaya geribildirim ekleniyor...',
'feedback-error1' => 'Hata: Bilinmeyen API sonucu',
'feedback-error2' => 'Hata: Düzenleme başarısız oldu',
'feedback-error3' => "Hata: API'den yanıt yok",
'feedback-thanks' => 'Teşekkürler! Görüşleriniz "[$2 $1]" sayfasında paylaşılmıştır.',
'feedback-close' => 'Tamamlandı',
'feedback-bugcheck' => 'Harika! Sadece [bilinen $1 hatalarından] olmadığını kontrol et.',
'feedback-bugnew' => 'Kontrol ettim. Yeni hata bildir',

# Search suggestions
'searchsuggest-search' => 'Ara',
'searchsuggest-containing' => 'içeren...',

# API errors
'api-error-badaccess-groups' => 'Bu wiki için dosya yüklemenize izin verilmiyor.',
'api-error-badtoken' => 'İç hata: Bozuk simge.',
'api-error-duplicate-popup-title' => 'Çift {{PLURAL:$1|dosya|dosya}}',
'api-error-empty-file' => 'Gönderdiğiniz dosya boş.',
'api-error-emptypage' => 'Yeni, boş bir sayfa oluşturmaya izin verilmez.',
'api-error-fetchfileerror' => 'İç hata: Dosya alınırken bir hata oluştu.',
'api-error-fileexists-forbidden' => '"$1" adıyla bir dosya zaten mevcut dolayısıyla üzerine yazamazsınız.',
'api-error-file-too-large' => 'Gönderdiğiniz dosya çok büyük.',
'api-error-filename-tooshort' => 'Dosya adı çok kısa.',
'api-error-filetype-banned' => 'Bu dosya biçimi yasaklanmıştır.',
'api-error-filetype-banned-type' => '$1 {{PLURAL:$4|izin verilen bir dosya türü değil|izin verilen bir dosya türü değil}}. İzin verilen {{PLURAL:$3|dosya türü|dosya türleri}} $2.',
'api-error-filetype-missing' => 'Dosya uzantısı eksik.',
'api-error-hookaborted' => 'Yapmaya çalıştığınız değişiklik bir eklenti tarafından iptal edildi.',
'api-error-http' => 'İç hata: sunucu ile bağlantı kurulamıyor.',
'api-error-illegal-filename' => 'Bu dosya adına izin verilmiyor.',
'api-error-internal-error' => "İç hata: Wiki'ye yükleme yapma işleminizde bir şeyler ters gitti.",
'api-error-invalid-file-key' => 'İç hata: geçici depolama dosyası bulunamadı.',
'api-error-missingparam' => 'İç hata: İstenilen parametreler eksik.',
'api-error-missingresult' => 'İç hata: Kopyalamanın başarılı olup olmadığı belirlenemedi.',
'api-error-mustbeloggedin' => 'Dosya yükleyebilmek için oturum açmanız gereklidir.',
'api-error-mustbeposted' => 'İç hata: İstek HTTP POST gerektiriyor.',
'api-error-noimageinfo' => 'Yükleme başarılı oldu, ancak sunucu, bize dosya hakkında herhangi bir bilgi vermedi.',
'api-error-nomodule' => 'İç hata: Yükleme modülü ayarı yapılmadı.',
'api-error-ok-but-empty' => 'İç hata: Sunucu yanıt vermiyor.',
'api-error-overwrite' => 'Varolan dosyanın üzerine yazmaya izin verilmiyor.',
'api-error-stashfailed' => 'İç hata: Sunucu, geçici dosyaları kaybetti.',
'api-error-timeout' => 'Sunucu beklenen süre içinde yanıt vermedi.',
'api-error-unclassified' => 'Bilinmeyen bir hata oluştu.',
'api-error-unknown-code' => 'Bilinmeyen hata: "$1"',
'api-error-unknown-error' => 'İç hata: Dosya yüklemeye çalışırken bir şeyler ters gitti.',
'api-error-unknown-warning' => 'Bilinmeyen uyarı: $1',
'api-error-unknownerror' => 'Bilinmeyen hata: "$1".',
'api-error-uploaddisabled' => 'Yükleme bu vikide devre dışı bırakılmıştır.',
'api-error-verification-error' => 'Dosya bozuk veya yanlış uzantıya sahip olabilir.',

# Durations
'duration-seconds' => '$1 {{PLURAL:$1|saniye|saniye}}',
'duration-minutes' => '$1 {{PLURAL:$1|dakika|dakika}}',
'duration-hours' => '$1 {{PLURAL:$1|saat|saat}}',
'duration-days' => '$1 {{PLURAL:$1|gün|gün}}',
'duration-weeks' => '$1 {{PLURAL:$1|hafta|hafta}}',
'duration-years' => '$1 {{PLURAL:$1|yıl|yıl}}',
'duration-decades' => '$1 {{PLURAL:$1|on yıl|on yıl}}',
'duration-centuries' => '$1 {{PLURAL:$1|yüzyıl|yüzyıl}}',
'duration-millennia' => '$1 {{PLURAL:$1|bin yıl|bin yıl}}',

);
