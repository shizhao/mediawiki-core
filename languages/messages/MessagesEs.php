<?php
/** Spanish (español)
 *
 * See MessagesQqq.php for message documentation incl. usage of parameters
 * To improve a translation please visit http://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author -jem-
 * @author Aleator
 * @author Alhen
 * @author Alpertron
 * @author Alvaro qc
 * @author Amire80
 * @author Armando-Martin
 * @author Ascánder
 * @author Baiji
 * @author Bea.miau
 * @author Benfutbol10
 * @author Bengoa
 * @author Bernardom
 * @author Better
 * @author BicScope
 * @author Boivie
 * @author Candalua
 * @author Capmo
 * @author Cerealito
 * @author Ciencia Al Poder
 * @author Clerc
 * @author Crazymadlover
 * @author Cvmontuy
 * @author Dalton2
 * @author Danke7
 * @author David0811
 * @author Dferg
 * @author Diego Grez
 * @author Dmcdevit
 * @author Drini
 * @author Dvortygirl
 * @author Fibonacci
 * @author Fitoschido
 * @author Fluence
 * @author Gustronico
 * @author Hercule
 * @author Icvav
 * @author Imre
 * @author Invadinado
 * @author Jatrobat
 * @author Jens Liebenau
 * @author Jewbask
 * @author Jurock
 * @author Kaganer
 * @author Larjona
 * @author Lin linao
 * @author Linterweb
 * @author Locos epraix
 * @author Mahadeva
 * @author Manuelt15
 * @author Maor X
 * @author McDutchie
 * @author Muro de Aguas
 * @author Omnipaedista
 * @author Orgullomoore
 * @author Paucabot
 * @author PerroVerd
 * @author Pertile
 * @author Piolinfax
 * @author Platonides
 * @author PoLuX124
 * @author Remember the dot
 * @author Richard Wolf VI
 * @author Sanbec
 * @author Savh
 * @author Shirayuki
 * @author Spacebirdy
 * @author Technorum
 * @author The Evil IP address
 * @author Titoxd
 * @author Toniher
 * @author Translationista
 * @author Urhixidur
 * @author VegaDark
 * @author Vivaelcelta
 * @author Waldir
 * @author Wilfredor
 * @author XalD
 * @author XanaG
 * @author לערי ריינהארט
 */

$namespaceNames = array(
	NS_MEDIA            => 'Medio',
	NS_SPECIAL          => 'Especial',
	NS_TALK             => 'Discusión',
	NS_USER             => 'Usuario',
	NS_USER_TALK        => 'Usuario_discusión',
	NS_PROJECT_TALK     => '$1_discusión',
	NS_FILE             => 'Archivo',
	NS_FILE_TALK        => 'Archivo_discusión',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'MediaWiki_discusión',
	NS_TEMPLATE         => 'Plantilla',
	NS_TEMPLATE_TALK    => 'Plantilla_discusión',
	NS_HELP             => 'Ayuda',
	NS_HELP_TALK        => 'Ayuda_discusión',
	NS_CATEGORY         => 'Categoría',
	NS_CATEGORY_TALK    => 'Categoría_discusión',
);

$namespaceAliases = array(
	'Imagen' => NS_FILE,
	'Imagen_Discusión' => NS_FILE_TALK,
);

$namespaceGenderAliases = array(
	NS_USER => array( 'male' => 'Usuario', 'female' => 'Usuaria' ),
	NS_USER_TALK => array( 'male' => 'Usuario_Discusión', 'female' => 'Usuaria_Discusión' ),
);

$specialPageAliases = array(
	'Activeusers'               => array( 'UsuariosActivos' ),
	'Allmessages'               => array( 'TodosLosMensajes' ),
	'Allpages'                  => array( 'Todas', 'Todas_las_páginas' ),
	'Ancientpages'              => array( 'PáginasAntiguas', 'Páginas_antiguas' ),
	'Badtitle'                  => array( 'Título_incorrecto' ),
	'Blankpage'                 => array( 'BlanquearPágina', 'Blanquear_página' ),
	'Block'                     => array( 'Bloquear' ),
	'Blockme'                   => array( 'Bloquearme' ),
	'Booksources'               => array( 'FuentesDeLibros', 'Fuentes_de_libros' ),
	'BrokenRedirects'           => array( 'RedireccionesRotas', 'Redirecciones_rotas' ),
	'Categories'                => array( 'Categorías' ),
	'ChangeEmail'               => array( 'CambiarEmail', 'CambiarCorreo' ),
	'ChangePassword'            => array( 'Cambiar_contraseña', 'CambiarContraseña', 'ResetearContraseña', 'Resetear_contraseña' ),
	'ComparePages'              => array( 'CompararPáginas' ),
	'Confirmemail'              => array( 'ConfirmarEmail', 'Confirmar_correo_electrónico' ),
	'Contributions'             => array( 'Contribuciones' ),
	'CreateAccount'             => array( 'Crear_una_cuenta', 'CrearCuenta' ),
	'Deadendpages'              => array( 'PáginasSinSalida', 'Páginas_sin_salida' ),
	'DeletedContributions'      => array( 'ContribucionesBorradas', 'Contribuciones_Borradas' ),
	'Disambiguations'           => array( 'Desambiguaciones', 'Desambiguación' ),
	'DoubleRedirects'           => array( 'RedireccionesDobles', 'Redirecciones_dobles' ),
	'EditWatchlist'             => array( 'EditarSeguimiento' ),
	'Emailuser'                 => array( 'MandarEmailUsuario' ),
	'Export'                    => array( 'Exportar' ),
	'Fewestrevisions'           => array( 'MenosEdiciones', 'Menos_ediciones' ),
	'FileDuplicateSearch'       => array( 'BuscarArchivosDuplicados', 'Buscar_archivos_duplicados' ),
	'Filepath'                  => array( 'RutaDeArchivo', 'Ruta_de_archivo' ),
	'Import'                    => array( 'Importar' ),
	'Invalidateemail'           => array( 'InvalidarEmail', 'Invalidar_correo_electrónico' ),
	'BlockList'                 => array( 'UsuariosBloqueados', 'Lista_de_usuarios_bloqueados' ),
	'LinkSearch'                => array( 'BúsquedaDeEnlaces', 'Búsqueda_de_enlaces' ),
	'Listadmins'                => array( 'ListaDeAdministradores', 'Lista_de_administradores' ),
	'Listbots'                  => array( 'ListaDeBots', 'Lista_de_bots' ),
	'Listfiles'                 => array( 'ListaImágenes', 'Lista_de_imágenes' ),
	'Listgrouprights'           => array( 'ListaDerechosGrupos', 'Derechos_de_grupos_de_usuarios' ),
	'Listredirects'             => array( 'TodasLasRedirecciones', 'Todas_las_redirecciones' ),
	'Listusers'                 => array( 'ListaUsuarios', 'Lista_de_usuarios' ),
	'Lockdb'                    => array( 'BloquearBasedeDatos', 'Bloquear_base_de_datos' ),
	'Log'                       => array( 'Registro' ),
	'Lonelypages'               => array( 'PáginasHuérfanas', 'Páginas_huérfanas' ),
	'Longpages'                 => array( 'PáginasLargas', 'Páginas_largas' ),
	'MergeHistory'              => array( 'FusionarHistorial', 'Fusionar_historial' ),
	'MIMEsearch'                => array( 'BuscarPorMIME', 'Buscar_por_MIME' ),
	'Mostcategories'            => array( 'MásCategorizadas', 'Más_categorizadas' ),
	'Mostimages'                => array( 'MásImágenes', 'Con_más_imágenes' ),
	'Mostlinked'                => array( 'MásEnlazados', 'Más_enlazados', 'MásEnlazadas' ),
	'Mostlinkedcategories'      => array( 'CategoríasMásUsadas', 'Categorías_más_usadas' ),
	'Mostlinkedtemplates'       => array( 'PlantillasMásUsadas', 'Plantillas_más_usadas' ),
	'Mostrevisions'             => array( 'MásEdiciones', 'Más_ediciones' ),
	'Movepage'                  => array( 'MoverPágina', 'Mover_página' ),
	'Mycontributions'           => array( 'MisContribuciones', 'Mis_contribuciones' ),
	'Mypage'                    => array( 'MiPágina', 'Mi_página' ),
	'Mytalk'                    => array( 'MiDiscusión', 'Mi_discusión' ),
	'Myuploads'                 => array( 'MisArchivosSubidos' ),
	'Newimages'                 => array( 'NuevasImágenes', 'Nuevas_imágenes' ),
	'Newpages'                  => array( 'PáginasNuevas', 'Páginas_nuevas' ),
	'PasswordReset'             => array( 'RestablecerContraseña' ),
	'PermanentLink'             => array( 'EnlacePermanente' ),
	'Popularpages'              => array( 'PáginasMásVisitadas', 'PáginasPopulares', 'Páginas_más_visitadas' ),
	'Preferences'               => array( 'Preferencias' ),
	'Prefixindex'               => array( 'PáginasPorPrefijo', 'Páginas_por_prefijo' ),
	'Protectedpages'            => array( 'PáginasProtegidas', 'Páginas_protegidas' ),
	'Protectedtitles'           => array( 'TítulosProtegidos', 'Títulos_protegidos' ),
	'Randompage'                => array( 'Aleatoria', 'Aleatorio', 'Página_aleatoria' ),
	'Randomredirect'            => array( 'RedirecciónAleatoria', 'Redirección_aleatoria' ),
	'Recentchanges'             => array( 'CambiosRecientes', 'Cambios_recientes' ),
	'Recentchangeslinked'       => array( 'CambiosEnEnlazadas', 'Cambios_en_enlazadas' ),
	'Revisiondelete'            => array( 'BorrarRevisión', 'Borrar_revisión' ),
	'Search'                    => array( 'Buscar' ),
	'Shortpages'                => array( 'PáginasCortas', 'Páginas_cortas' ),
	'Specialpages'              => array( 'PáginasEspeciales', 'Páginas_especiales' ),
	'Statistics'                => array( 'Estadísticas' ),
	'Tags'                      => array( 'Etiquetas' ),
	'Unblock'                   => array( 'Desbloquear' ),
	'Uncategorizedcategories'   => array( 'CategoríasSinCategorizar', 'Categorías_sin_categorizar' ),
	'Uncategorizedimages'       => array( 'ImágenesSinCategorizar', 'Imágenes_sin_categorizar' ),
	'Uncategorizedpages'        => array( 'PáginasSinCategorizar', 'Páginas_sin_categorizar' ),
	'Uncategorizedtemplates'    => array( 'PlantillasSinCategorizar', 'Plantillas_sin_categorizar' ),
	'Undelete'                  => array( 'Restaurar' ),
	'Unlockdb'                  => array( 'DesbloquearBasedeDatos', 'Desbloquear_base_de_datos' ),
	'Unusedcategories'          => array( 'CategoríasSinUso', 'Categorías_sin_uso' ),
	'Unusedimages'              => array( 'ImágenesSinUso', 'Imágenes_sin_uso' ),
	'Unusedtemplates'           => array( 'PlantillasSinUso', 'Plantillas_sin_uso' ),
	'Unwatchedpages'            => array( 'PáginasSinVigilar', 'Páginas_sin_vigilar' ),
	'Upload'                    => array( 'SubirArchivo', 'Subir_archivo' ),
	'Userlogin'                 => array( 'Entrar', 'Entrada_del_usuario' ),
	'Userlogout'                => array( 'Salida_del_usuario', 'Salir' ),
	'Userrights'                => array( 'PermisosUsuarios', 'Permisos_de_usuarios' ),
	'Version'                   => array( 'Versión' ),
	'Wantedcategories'          => array( 'CategoríasRequeridas', 'Categorías_requeridas' ),
	'Wantedfiles'               => array( 'ArchivosRequeridos', 'Archivos_requeridos' ),
	'Wantedpages'               => array( 'PáginasRequeridas', 'Páginas_requeridas' ),
	'Wantedtemplates'           => array( 'PlantillasRequeridas', 'Plantillas_requeridas' ),
	'Watchlist'                 => array( 'Seguimiento', 'Lista_de_seguimiento' ),
	'Whatlinkshere'             => array( 'LoQueEnlazaAquí', 'Lo_que_enlaza_aquí' ),
	'Withoutinterwiki'          => array( 'SinInterwikis', 'Sin_interwikis' ),
);

$magicWords = array(
	'redirect'                  => array( '0', '#REDIRECCIÓN', '#REDIRECCION', '#REDIRECT' ),
	'notoc'                     => array( '0', '__SIN_TDC__', '__NOTDC__', '__NOTOC__' ),
	'nogallery'                 => array( '0', '__SIN_GALERÍA__', '__NOGALERÍA__', '__NOGALERIA__', '__NOGALLERY__' ),
	'forcetoc'                  => array( '0', '__FORZAR_TDC__', '__FORZARTDC__', '__FORZARTOC__', '__FORCETOC__' ),
	'toc'                       => array( '0', '__TDC__', '__TOC__' ),
	'noeditsection'             => array( '0', '__NO_EDITAR_SECCIÓN__', '__NOEDITARSECCIÓN__', '__NOEDITARSECCION__', '__NOEDITSECTION__' ),
	'currentmonth'              => array( '1', 'MESACTUAL', 'MESACTUAL2', 'CURRENTMONTH', 'CURRENTMONTH2' ),
	'currentmonth1'             => array( '1', 'MESACTUAL1', 'CURRENTMONTH1' ),
	'currentmonthname'          => array( '1', 'MESACTUALCOMPLETO', 'NOMBREMESACTUAL', 'CURRENTMONTHNAME' ),
	'currentmonthnamegen'       => array( '1', 'MESACTUALGENITIVO', 'CURRENTMONTHNAMEGEN' ),
	'currentmonthabbrev'        => array( '1', 'MESACTUALABREVIADO', 'CURRENTMONTHABBREV' ),
	'currentday'                => array( '1', 'DÍAACTUAL', 'DIAACTUAL', 'DÍA_ACTUAL', 'DIA_ACTUAL', 'CURRENTDAY' ),
	'currentday2'               => array( '1', 'DÍAACTUAL2', 'DIAACTUAL2', 'DÍA_ACTUAL2', 'DIA_ACTUAL2', 'CURRENTDAY2' ),
	'currentdayname'            => array( '1', 'NOMBREDÍAACTUAL', 'NOMBREDIAACTUAL', 'CURRENTDAYNAME' ),
	'currentyear'               => array( '1', 'AÑOACTUAL', 'AÑO_ACTUAL', 'CURRENTYEAR' ),
	'currenttime'               => array( '1', 'HORA_MINUTOS_ACTUAL', 'HORAMINUTOSACTUAL', 'TIEMPOACTUAL', 'CURRENTTIME' ),
	'currenthour'               => array( '1', 'HORAACTUAL', 'HORA_ACTUAL', 'CURRENTHOUR' ),
	'localmonth'                => array( '1', 'MESLOCAL', 'MESLOCAL2', 'LOCALMONTH', 'LOCALMONTH2' ),
	'localmonth1'               => array( '1', 'MESLOCAL1', 'LOCALMONTH1' ),
	'localmonthname'            => array( '1', 'MESLOCALCOMPLETO', 'NOMBREMESLOCAL', 'LOCALMONTHNAME' ),
	'localmonthnamegen'         => array( '1', 'MESLOCALGENITIVO', 'LOCALMONTHNAMEGEN' ),
	'localmonthabbrev'          => array( '1', 'MESLOCALABREVIADO', 'LOCALMONTHABBREV' ),
	'localday'                  => array( '1', 'DÍALOCAL', 'DIALOCAL', 'LOCALDAY' ),
	'localday2'                 => array( '1', 'DIALOCAL2', 'DÍALOCAL2', 'LOCALDAY2' ),
	'localdayname'              => array( '1', 'NOMBREDIALOCAL', 'NOMBREDÍALOCAL', 'LOCALDAYNAME' ),
	'localyear'                 => array( '1', 'AÑOLOCAL', 'LOCALYEAR' ),
	'localtime'                 => array( '1', 'HORAMINUTOSLOCAL', 'TIEMPOLOCAL', 'LOCALTIME' ),
	'localhour'                 => array( '1', 'HORALOCAL', 'LOCALHOUR' ),
	'numberofpages'             => array( '1', 'NÚMERODEPÁGINAS', 'NUMERODEPAGINAS', 'NUMBEROFPAGES' ),
	'numberofarticles'          => array( '1', 'NÚMERODEARTÍCULOS', 'NUMERODEARTICULOS', 'NUMBEROFARTICLES' ),
	'numberoffiles'             => array( '1', 'NÚMERODEARCHIVOS', 'NUMERODEARCHIVOS', 'NUMBEROFFILES' ),
	'numberofusers'             => array( '1', 'NÚMERODEUSUARIOS', 'NUMERODEUSUARIOS', 'NUMBEROFUSERS' ),
	'numberofactiveusers'       => array( '1', 'NÚMERODEUSUARIOSACTIVOS', 'NUMERODEUSUARIOSACTIVOS', 'NUMBEROFACTIVEUSERS' ),
	'numberofedits'             => array( '1', 'NÚMERODEEDICIONES', 'NUMERODEEDICIONES', 'NUMBEROFEDITS' ),
	'numberofviews'             => array( '1', 'NÚMERODEVISTAS', 'NUMERODEVISTAS', 'NUMBEROFVIEWS' ),
	'pagename'                  => array( '1', 'NOMBREDEPAGINA', 'NOMBREDEPÁGINA', 'PAGENAME' ),
	'pagenamee'                 => array( '1', 'NOMBREDEPAGINAC', 'NOMBREDEPÁGINAC', 'PAGENAMEE' ),
	'namespace'                 => array( '1', 'ESPACIODENOMBRE', 'NAMESPACE' ),
	'namespacee'                => array( '1', 'ESPACIODENOMBREC', 'NAMESPACEE' ),
	'namespacenumber'           => array( '1', 'NÚMERODELESPACIO', 'NAMESPACENUMBER' ),
	'talkspace'                 => array( '1', 'ESPACIODEDISCUSION', 'ESPACIODEDISCUSIÓN', 'TALKSPACE' ),
	'talkspacee'                => array( '1', 'ESPACIODEDISCUSIONC', 'TALKSPACEE' ),
	'subjectspace'              => array( '1', 'ESPACIODEASUNTO', 'ESPACIODETEMA', 'ESPACIODEARTÍCULO', 'ESPACIODEARTICULO', 'SUBJECTSPACE', 'ARTICLESPACE' ),
	'subjectspacee'             => array( '1', 'ESPACIODETEMAC', 'ESPACIODEASUNTOC', 'ESPACIODEARTICULOC', 'ESPACIODEARTÍCULOC', 'SUBJECTSPACEE', 'ARTICLESPACEE' ),
	'fullpagename'              => array( '1', 'NOMBRECOMPLETODEPÁGINA', 'NOMBRECOMPLETODEPAGINA', 'FULLPAGENAME' ),
	'fullpagenamee'             => array( '1', 'NOMBRECOMPLETODEPAGINAC', 'NOMBRECOMPLETODEPÁGINAC', 'FULLPAGENAMEE' ),
	'subpagename'               => array( '1', 'NOMBREDESUBPAGINA', 'NOMBREDESUBPÁGINA', 'SUBPAGENAME' ),
	'subpagenamee'              => array( '1', 'NOMBREDESUBPAGINAC', 'NOMBREDESUBPÁGINAC', 'SUBPAGENAMEE' ),
	'basepagename'              => array( '1', 'NOMBREDEPAGINABASE', 'NOMBREDEPÁGINABASE', 'BASEPAGENAME' ),
	'basepagenamee'             => array( '1', 'NOMBREDEPAGINABASEC', 'NOMBREDEPÁGINABASEC', 'BASEPAGENAMEE' ),
	'talkpagename'              => array( '1', 'NOMBREDEPÁGINADEDISCUSIÓN', 'NOMBREDEPAGINADEDISCUSION', 'NOMBREDEPAGINADISCUSION', 'NOMBREDEPÁGINADISCUSIÓN', 'TALKPAGENAME' ),
	'talkpagenamee'             => array( '1', 'NOMBREDEPÁGINADEDISCUSIÓNC', 'NOMBREDEPAGINADEDISCUSIONC', 'NOMBREDEPAGINADISCUSIONC', 'NOMBREDEPÁGINADISCUSIÓNC', 'TALKPAGENAMEE' ),
	'subjectpagename'           => array( '1', 'NOMBREDEPAGINADETEMA', 'NOMBREDEPÁGINADETEMA', 'NOMBREDEPÁGINADEASUNTO', 'NOMBREDEPAGINADEASUNTO', 'NOMBREDEPAGINADEARTICULO', 'NOMBREDEPÁGINADEARTÍCULO', 'SUBJECTPAGENAME', 'ARTICLEPAGENAME' ),
	'subjectpagenamee'          => array( '1', 'NOMBREDEPAGINADETEMAC', 'NOMBREDEPÁGINADETEMAC', 'NOMBREDEPÁGINADEASUNTOC', 'NOMBREDEPAGINADEASUNTOC', 'NOMBREDEPAGINADEARTICULOC', 'NOMBREDEPÁGINADEARTÍCULOC', 'SUBJECTPAGENAMEE', 'ARTICLEPAGENAMEE' ),
	'msg'                       => array( '0', 'MSJ:', 'MSG:' ),
	'subst'                     => array( '0', 'SUST:', 'FIJAR:', 'SUBST:' ),
	'img_thumbnail'             => array( '1', 'miniaturadeimagen', 'miniatura', 'mini', 'thumbnail', 'thumb' ),
	'img_manualthumb'           => array( '1', 'miniaturadeimagen=$1', 'miniatura=$1', 'thumbnail=$1', 'thumb=$1' ),
	'img_right'                 => array( '1', 'derecha', 'dcha', 'der', 'right' ),
	'img_left'                  => array( '1', 'izquierda', 'izda', 'izq', 'left' ),
	'img_none'                  => array( '1', 'ninguna', 'nada', 'no', 'ninguno', 'none' ),
	'img_center'                => array( '1', 'centro', 'centrado', 'centrada', 'centrar', 'center', 'centre' ),
	'img_framed'                => array( '1', 'marco', 'enmarcado', 'enmarcada', 'framed', 'enframed', 'frame' ),
	'img_frameless'             => array( '1', 'sinmarco', 'sin_enmarcar', 'sinenmarcar', 'frameless' ),
	'img_page'                  => array( '1', 'pagina=$1', 'página=$1', 'pagina_$1', 'página_$1', 'page=$1', 'page $1' ),
	'img_border'                => array( '1', 'borde', 'border' ),
	'img_link'                  => array( '1', 'vínculo=$1', 'vinculo=$1', 'enlace=$1', 'link=$1' ),
	'sitename'                  => array( '1', 'NOMBREDELSITIO', 'SITENAME' ),
	'ns'                        => array( '0', 'EN:', 'NS:' ),
	'localurl'                  => array( '0', 'URLLOCAL', 'LOCALURL:' ),
	'localurle'                 => array( '0', 'URLLOCALC:', 'LOCALURLE:' ),
	'server'                    => array( '0', 'SERVIDOR', 'SERVER' ),
	'servername'                => array( '0', 'NOMBRESERVIDOR', 'SERVERNAME' ),
	'scriptpath'                => array( '0', 'RUTASCRIPT', 'RUTADESCRIPT', 'SCRIPTPATH' ),
	'stylepath'                 => array( '0', 'RUTAESTILO', 'RUTADEESTILO', 'STYLEPATH' ),
	'grammar'                   => array( '0', 'GRAMATICA:', 'GRAMÁTICA:', 'GRAMMAR:' ),
	'gender'                    => array( '0', 'GÉNERO:', 'GENERO:', 'GENDER:' ),
	'notitleconvert'            => array( '0', '__NOCONVERTIRTITULO__', '__NOCONVERTIRTÍTULO__', '__NOCT___', '__NOTITLECONVERT__', '__NOTC__' ),
	'nocontentconvert'          => array( '0', '__NOCONVERTIRCONTENIDO__', '__NOCC___', '__NOCONTENTCONVERT__', '__NOCC__' ),
	'currentweek'               => array( '1', 'SEMANAACTUAL', 'CURRENTWEEK' ),
	'currentdow'                => array( '1', 'DDSACTUAL', 'DIADESEMANAACTUAL', 'DÍADESEMANAACTUAL', 'CURRENTDOW' ),
	'localweek'                 => array( '1', 'SEMANALOCAL', 'LOCALWEEK' ),
	'localdow'                  => array( '1', 'DDSLOCAL', 'DIADESEMANALOCAL', 'DÍADESEMANALOCAL', 'LOCALDOW' ),
	'revisionid'                => array( '1', 'IDDEREVISION', 'IDREVISION', 'IDDEREVISIÓN', 'IDREVISIÓN', 'REVISIONID' ),
	'revisionday'               => array( '1', 'DIADEREVISION', 'DIAREVISION', 'DÍADEREVISIÓN', 'DÍAREVISIÓN', 'REVISIONDAY' ),
	'revisionday2'              => array( '1', 'DIADEREVISION2', 'DIAREVISION2', 'DÍADEREVISIÓN2', 'DÍAREVISIÓN2', 'REVISIONDAY2' ),
	'revisionmonth'             => array( '1', 'MESDEREVISION', 'MESDEREVISIÓN', 'MESREVISION', 'MESREVISIÓN', 'REVISIONMONTH' ),
	'revisionyear'              => array( '1', 'AÑODEREVISION', 'AÑODEREVISIÓN', 'AÑOREVISION', 'AÑOREVISIÓN', 'REVISIONYEAR' ),
	'revisiontimestamp'         => array( '1', 'MARCADEHORADEREVISION', 'MARCADEHORADEREVISIÓN', 'REVISIONTIMESTAMP' ),
	'revisionuser'              => array( '1', 'USUARIODEREVISION', 'USUARIODEREVISIÓN', 'REVISIONUSER' ),
	'fullurl'                   => array( '0', 'URLCOMPLETA:', 'FULLURL:' ),
	'fullurle'                  => array( '0', 'URLCOMPLETAC:', 'FULLURLE:' ),
	'canonicalurl'              => array( '0', 'URLCANONICA:', 'CANONICALURL:' ),
	'canonicalurle'             => array( '0', 'URLCANONICAC:', 'CANONICALURLE:' ),
	'lcfirst'                   => array( '0', 'PRIMEROMINUS;', 'PRIMEROMINÚS:', 'LCFIRST:' ),
	'ucfirst'                   => array( '0', 'PRIMEROMAYUS;', 'PRIMEROMAYÚS:', 'UCFIRST:' ),
	'lc'                        => array( '0', 'MINUS:', 'MINÚS:', 'LC:' ),
	'uc'                        => array( '0', 'MAYUS:', 'MAYÚS:', 'UC:' ),
	'raw'                       => array( '0', 'SINFORMATO', 'SINPUNTOS', 'RAW:' ),
	'displaytitle'              => array( '1', 'MOSTRARTÍTULO', 'MOSTRARTITULO', 'DISPLAYTITLE' ),
	'rawsuffix'                 => array( '1', 'SF', 'R' ),
	'newsectionlink'            => array( '1', '__VINCULARANUEVASECCION__', '__ENLACECREARSECCIÓN__', '__NEWSECTIONLINK__' ),
	'nonewsectionlink'          => array( '1', '__NOVINCULARANUEVASECCION__', '__SINENLACECREARSECCIÓN__', '__NONEWSECTIONLINK__' ),
	'currentversion'            => array( '1', 'VERSIONACTUAL', 'VERSIÓNACTUAL', 'CURRENTVERSION' ),
	'urlencode'                 => array( '0', 'CODIFICARURL:', 'URLENCODE:' ),
	'currenttimestamp'          => array( '1', 'MARCADEHORAACTUAL', 'CURRENTTIMESTAMP' ),
	'localtimestamp'            => array( '1', 'MARCADEHORALOCAL', 'LOCALTIMESTAMP' ),
	'language'                  => array( '0', '#IDIOMA:', '#LANGUAGE:' ),
	'contentlanguage'           => array( '1', 'IDIOMADELCONTENIDO', 'IDIOMADELCONT', 'CONTENTLANGUAGE', 'CONTENTLANG' ),
	'pagesinnamespace'          => array( '1', 'PÁGINASENESPACIO', 'PAGESINNAMESPACE:', 'PAGESINNS:' ),
	'numberofadmins'            => array( '1', 'NÚMEROADMINIISTRADORES', 'NÚMEROADMINS', 'NUMEROADMINS', 'NUMEROADMINISTRADORES', 'NUMERODEADMINISTRADORES', 'NUMERODEADMINS', 'NÚMERODEADMINISTRADORES', 'NÚMERODEADMINS', 'NUMBEROFADMINS' ),
	'formatnum'                 => array( '0', 'FORMATONÚMERO', 'FORMATONUMERO', 'FORMATNUM' ),
	'special'                   => array( '0', 'especial', 'special' ),
	'defaultsort'               => array( '1', 'ORDENAR:', 'CLAVEDEORDENPREDETERMINADO:', 'ORDENDECATEGORIAPREDETERMINADO:', 'ORDENDECATEGORÍAPREDETERMINADO:', 'DEFAULTSORT:', 'DEFAULTSORTKEY:', 'DEFAULTCATEGORYSORT:' ),
	'filepath'                  => array( '0', 'RUTAARCHIVO:', 'RUTARCHIVO:', 'RUTADEARCHIVO:', 'FILEPATH:' ),
	'tag'                       => array( '0', 'etiqueta', 'tag' ),
	'hiddencat'                 => array( '1', '__CATEGORÍAOCULTA__', '__HIDDENCAT__' ),
	'pagesincategory'           => array( '1', 'PÁGINASENCATEGORÍA', 'PÁGINASENCAT', 'PAGSENCAT', 'PAGINASENCATEGORIA', 'PAGINASENCAT', 'PAGESINCATEGORY', 'PAGESINCAT' ),
	'pagesize'                  => array( '1', 'TAMAÑOPÁGINA', 'TAMAÑODEPÁGINA', 'TAMAÑOPAGINA', 'TAMAÑODEPAGINA', 'PAGESIZE' ),
	'index'                     => array( '1', '__INDEXAR__', '__INDEX__' ),
	'noindex'                   => array( '1', '__NOINDEXAR__', '__NOINDEX__' ),
	'numberingroup'             => array( '1', 'NÚMEROENGRUPO', 'NUMEROENGRUPO', 'NUMENGRUPO', 'NÚMENGRUPO', 'NUMBERINGROUP', 'NUMINGROUP' ),
	'staticredirect'            => array( '1', '__REDIRECCIONESTATICA__', '__REDIRECCIÓNESTÁTICA__', '__STATICREDIRECT__' ),
	'protectionlevel'           => array( '1', 'NIVELDEPROTECCIÓN', 'PROTECTIONLEVEL' ),
	'formatdate'                => array( '0', 'formatodefecha', 'formatearfecha', 'formatdate', 'dateformat' ),
);

$datePreferences = false;
$defaultDateFormat = 'dmy';
$dateFormats = array(
	'dmy time' => 'H:i',
	'dmy date' => 'j M Y',
	'dmy both' => 'H:i j M Y',
);

$separatorTransformTable = array( ',' => '.', '.' => ',' );
$linkTrail = '/^([a-záéíóúñ]+)(.*)$/sDu';

$messages = array(
# User preference toggles
'tog-underline' => 'Subrayar enlaces:',
'tog-justify' => 'Justificar los párrafos',
'tog-hideminor' => 'Ocultar las ediciones menores en los cambios recientes',
'tog-hidepatrolled' => 'Ocultar las ediciones patrulladas en los cambios recientes',
'tog-newpageshidepatrolled' => 'Ocultar las páginas patrulladas de la lista de páginas nuevas',
'tog-extendwatchlist' => 'Expandir la lista de seguimiento a todos los cambios, no sólo a los más recientes',
'tog-usenewrc' => 'Agrupar los cambios por página en los cambios recientes y en la lista de seguimiento (requiere JavaScript)',
'tog-numberheadings' => 'Numerar automáticamente los encabezados',
'tog-showtoolbar' => 'Mostrar la barra de edición (requiere JavaScript)',
'tog-editondblclick' => 'Editar las páginas con doble clic (requiere JavaScript)',
'tog-editsection' => 'Habilitar la edición de secciones mediante el enlace [editar]',
'tog-editsectiononrightclick' => 'Habilitar la edición de secciones pulsando el botón derecho en los títulos de secciones (requiere JavaScript)',
'tog-showtoc' => 'Mostrar el índice (para páginas con más de 3 encabezados)',
'tog-rememberpassword' => 'Recordar mi nombre de usuario y contraseña entre sesiones en este navegador (por un máximo de $1 {{PLURAL:$1|día|días}})',
'tog-watchcreations' => 'Añadir las páginas que cree y los archivos que suba a mi lista de seguimento',
'tog-watchdefault' => 'Añadir las páginas y archivos que edite a mi lista de seguimiento',
'tog-watchmoves' => 'Añadir las páginas y archivos que mueva a mi lista de seguimiento',
'tog-watchdeletion' => 'Añadir las páginas y archivos que borre a mi lista de seguimiento',
'tog-minordefault' => 'Marcar todas las ediciones como menores de manera predeterminada',
'tog-previewontop' => 'Mostrar previsualización antes del cuadro de edición',
'tog-previewonfirst' => 'Mostrar previsualización en la primera edición',
'tog-nocache' => 'Desactivar la caché de páginas del navegador',
'tog-enotifwatchlistpages' => 'Enviarme un correo electrónico cuando se modifique una página o un archivo de mi lista de seguimiento',
'tog-enotifusertalkpages' => 'Enviarme un correo electrónico cuando se modifique mi página de discusión',
'tog-enotifminoredits' => 'Notificarme también por correo electrónico los cambios menores de las páginas y archivos',
'tog-enotifrevealaddr' => 'Revelar mi dirección de correo electrónico en los correos de notificación',
'tog-shownumberswatching' => 'Mostrar el número de usuarios que la vigilan',
'tog-oldsig' => 'Firma actual:',
'tog-fancysig' => 'Tratar la firma como wikitexto (sin un enlace automático)',
'tog-externaleditor' => 'Utilizar editor externo por defecto (sólo para expertos: son necesarios ajustes especiales en la computadora; [//www.mediawiki.org/wiki/Manual:External_editors más información])',
'tog-externaldiff' => "Utilizar ''diferencia'' externa por defecto (sólo para expertos: son necesarios ajustes especiales en la computadora; [//www.mediawiki.org/wiki/Manual:External_editors más información])",
'tog-showjumplinks' => 'Habilitar los enlaces de accesibilidad «saltar a»',
'tog-uselivepreview' => 'Usar previsualización en vivo (requiere JavaScript) (experimental)',
'tog-forceeditsummary' => 'Avisarme cuando grabe la página sin introducir un resumen de edición',
'tog-watchlisthideown' => 'Ocultar mis ediciones en la lista de seguimiento',
'tog-watchlisthidebots' => 'Ocultar las ediciones de bots en la lista de seguimiento',
'tog-watchlisthideminor' => 'Ocultar las ediciones menores en la lista de seguimiento',
'tog-watchlisthideliu' => 'Ocultar las ediciones de los usuarios registrados en la lista de seguimiento',
'tog-watchlisthideanons' => 'Ocultar las ediciones de los usuarios anónimos en la lista de seguimiento',
'tog-watchlisthidepatrolled' => 'Ocultar las ediciones patrulladas en la lista de seguimiento',
'tog-ccmeonemails' => 'Recibir copias de los correos que envío a otros usuarios',
'tog-diffonly' => "No mostrar bajo las ''diferencias'' el contenido de la página",
'tog-showhiddencats' => 'Mostrar las categorías escondidas',
'tog-noconvertlink' => 'Desactivar la conversión de título de enlace',
'tog-norollbackdiff' => "Omitir la ''diferencia'' después de revertir",

'underline-always' => 'Siempre',
'underline-never' => 'Nunca',
'underline-default' => 'Aspecto (skin) o navegador predeterminado',

# Font style option in Special:Preferences
'editfont-style' => 'Estilo de tipografía del área de edición:',
'editfont-default' => 'Predeterminado del navegador',
'editfont-monospace' => 'Tipografía monoespaciada',
'editfont-sansserif' => 'Tipografía sans-serif',
'editfont-serif' => 'Tipografía serif',

# Dates
'sunday' => 'domingo',
'monday' => 'lunes',
'tuesday' => 'martes',
'wednesday' => 'miércoles',
'thursday' => 'jueves',
'friday' => 'viernes',
'saturday' => 'sábado',
'sun' => 'dom',
'mon' => 'lun',
'tue' => 'mar',
'wed' => 'mie',
'thu' => 'jue',
'fri' => 'vie',
'sat' => 'sab',
'january' => 'enero',
'february' => 'febrero',
'march' => 'marzo',
'april' => 'abril',
'may_long' => 'mayo',
'june' => 'junio',
'july' => 'julio',
'august' => 'agosto',
'september' => 'septiembre',
'october' => 'octubre',
'november' => 'noviembre',
'december' => 'diciembre',
'january-gen' => 'enero',
'february-gen' => 'febrero',
'march-gen' => 'marzo',
'april-gen' => 'abril',
'may-gen' => 'mayo',
'june-gen' => 'junio',
'july-gen' => 'julio',
'august-gen' => 'agosto',
'september-gen' => 'septiembre',
'october-gen' => 'octubre',
'november-gen' => 'noviembre',
'december-gen' => 'diciembre',
'jan' => 'ene',
'feb' => 'feb',
'mar' => 'mar',
'apr' => 'abr',
'may' => 'may',
'jun' => 'jun',
'jul' => 'jul',
'aug' => 'ago',
'sep' => 'sep',
'oct' => 'oct',
'nov' => 'nov',
'dec' => 'dic',

# Categories related messages
'pagecategories' => '{{PLURAL:$1|Categoría|Categorías}}',
'category_header' => 'Artículos en la categoría «$1»',
'subcategories' => 'Subcategorías',
'category-media-header' => 'Archivos multimedia en la categoría «$1»',
'category-empty' => "''La categoría no contiene actualmente ningún artículo o archivo multimedia.''",
'hidden-categories' => '{{PLURAL:$1|Categoría escondida|Categorías escondidas}}',
'hidden-category-category' => 'Categorías ocultas',
'category-subcat-count' => '{{PLURAL:$2|Esta categoría solo contiene la siguiente subcategoría.|Esta categoría contiene {{PLURAL:$1|la siguiente subcategoría|las siguientes $1 subcategorías}}, de un total de $2.}}',
'category-subcat-count-limited' => 'Esta categoría contiene {{PLURAL:$1|la siguiente subcategoría|las siguientes $1 subcategorías}}.',
'category-article-count' => '{{PLURAL:$2|Esta categoría incluye solamente la siguiente página.|{{PLURAL:$1|La siguiente página página pertenece|Las siguientes $1 páginas pertenecen}} a esta categoría, de un total de $2.}}',
'category-article-count-limited' => '{{PLURAL:$1|La siguiente página pertenece|Las siguientes $1 páginas pertenecen}} a esta categoría.',
'category-file-count' => '{{PLURAL:$2|Esta categoría contiene solamente el siguiente archivo.|{{PLURAL:$1|El siguiente archivo pertenece|Los siguientes $1 archivos pertenecen}} a esta categoría, de un total de $2.}}',
'category-file-count-limited' => '{{PLURAL:$1|El siguiente fichero pertenece|Los siguientes $1 ficheros pertenecen}} a esta categoría.',
'listingcontinuesabbrev' => 'cont.',
'index-category' => 'Páginas indexadas',
'noindex-category' => 'Páginas no indexadas',
'broken-file-category' => 'Páginas con enlaces rotos a archivos',

'about' => 'Acerca de',
'article' => 'Artículo',
'newwindow' => '(se abre en una ventana nueva)',
'cancel' => 'Cancelar',
'moredotdotdot' => 'Más...',
'mypage' => 'Mi página',
'mytalk' => 'Discusión',
'anontalk' => 'Discusión para esta IP',
'navigation' => 'Navegación',
'and' => '&#32;y',

# Cologne Blue skin
'qbfind' => 'Buscar',
'qbbrowse' => 'Navegar',
'qbedit' => 'Editar',
'qbpageoptions' => 'Opciones de página',
'qbmyoptions' => 'Mis páginas',
'qbspecialpages' => 'Páginas especiales',
'faq' => 'Preguntas más frecuentes',
'faqpage' => 'Project:FAQ',

# Vector skin
'vector-action-addsection' => 'Nueva sección',
'vector-action-delete' => 'Borrar',
'vector-action-move' => 'Mover',
'vector-action-protect' => 'Proteger',
'vector-action-undelete' => 'Restaurar',
'vector-action-unprotect' => 'Cambiar protección',
'vector-simplesearch-preference' => 'Activar la barra de búsqueda simplificada (sólo con la apariencia Vector)',
'vector-view-create' => 'Crear',
'vector-view-edit' => 'Editar',
'vector-view-history' => 'Ver historial',
'vector-view-view' => 'Leer',
'vector-view-viewsource' => 'Ver fuente',
'actions' => 'Acciones',
'namespaces' => 'Espacios de nombres',
'variants' => 'Variantes',

'errorpagetitle' => 'Error',
'returnto' => 'Volver a $1.',
'tagline' => 'De {{SITENAME}}',
'help' => 'Ayuda',
'search' => 'Buscar',
'searchbutton' => 'Buscar',
'go' => 'Ir',
'searcharticle' => 'Ir',
'history' => 'Historial',
'history_short' => 'Historial',
'updatedmarker' => 'actualizado desde mi última visita',
'printableversion' => 'Versión para imprimir',
'permalink' => 'Enlace permanente',
'print' => 'Imprimir',
'view' => 'Ver',
'edit' => 'Editar',
'create' => 'Crear',
'editthispage' => 'Editar esta página',
'create-this-page' => 'Crear esta página',
'delete' => 'Borrar',
'deletethispage' => 'Borrar esta página',
'undelete_short' => 'Restaurar {{PLURAL:$1|una edición|$1 ediciones}}',
'viewdeleted_short' => 'Ver {{PLURAL:$1|una edición borrada|$1 ediciones borradas}}',
'protect' => 'Proteger',
'protect_change' => 'cambiar',
'protectthispage' => 'Proteger esta página',
'unprotect' => 'Cambiar protección',
'unprotectthispage' => 'Cambiar la protección de esta página',
'newpage' => 'Página nueva',
'talkpage' => 'Discutir esta página',
'talkpagelinktext' => 'Discusión',
'specialpage' => 'Página especial',
'personaltools' => 'Herramientas personales',
'postcomment' => 'Nueva sección',
'articlepage' => 'Ver artículo',
'talk' => 'Discusión',
'views' => 'Vistas',
'toolbox' => 'Herramientas',
'userpage' => 'Ver página de usuario',
'projectpage' => 'Ver página de proyecto',
'imagepage' => 'Ver página del archivo',
'mediawikipage' => 'Ver página de mensaje',
'templatepage' => 'Ver página de plantilla',
'viewhelppage' => 'Ver página de ayuda',
'categorypage' => 'Ver página de categoría',
'viewtalkpage' => 'Ver discusión',
'otherlanguages' => 'Otros idiomas',
'redirectedfrom' => '(Redirigido desde «$1»)',
'redirectpagesub' => 'Página redirigida',
'lastmodifiedat' => 'Esta página fue modificada por última vez el $1, a las $2.',
'viewcount' => 'Esta página ha sido visitada {{PLURAL:$1|una vez|$1 veces}}.',
'protectedpage' => 'Página protegida',
'jumpto' => 'Saltar a:',
'jumptonavigation' => 'navegación',
'jumptosearch' => 'buscar',
'view-pool-error' => 'Lo sentimos, los servidores están sobrecargados en este momento.
Hay demasiados usuarios que están tratando de ver esta página.
Espera un momento antes de tratar de acceder nuevamente a esta página.

$1',
'pool-timeout' => 'Tiempo limite agotado para el bloqueo',
'pool-queuefull' => 'La cola de trabajo está llena',
'pool-errorunknown' => 'Error desconocido',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage) and the disambiguation template definition (see disambiguations).
'aboutsite' => 'Acerca de {{SITENAME}}',
'aboutpage' => 'Project:Acerca de',
'copyright' => 'El contenido está disponible bajo los términos de la $1.',
'copyrightpage' => '{{ns:project}}:Derechos de autor',
'currentevents' => 'Actualidad',
'currentevents-url' => 'Project:Actualidad',
'disclaimers' => 'Aviso legal',
'disclaimerpage' => 'Project:Limitación general de responsabilidad',
'edithelp' => 'Ayuda de edición',
'edithelppage' => 'Help:Cómo se edita una página',
'helppage' => 'Help:Contenidos',
'mainpage' => 'Página principal',
'mainpage-description' => 'Página principal',
'policy-url' => 'Project:Políticas',
'portal' => 'Portal de la comunidad',
'portal-url' => 'Project:Portal de la comunidad',
'privacy' => 'Política de protección de datos',
'privacypage' => 'Project:Política de protección de datos',

'badaccess' => 'Error de permisos',
'badaccess-group0' => 'No estás autorizado a ejecutar la acción solicitada.',
'badaccess-groups' => 'La acción que has solicitado está restringida a los usuarios {{PLURAL:$2|del grupo|de uno de estos $2 grupos}}: $1.',

'versionrequired' => 'La versión $1 de MediaWiki es necesaria para utilizar esta página',
'versionrequiredtext' => 'Se necesita la versión $1 de MediaWiki para utilizar esta página. Para más información, consultar [[Special:Version|la página de versión]]',

'ok' => 'Aceptar',
'retrievedfrom' => 'Obtenido de «$1»',
'youhavenewmessages' => 'Tienes $1 ($2).',
'newmessageslink' => 'mensajes nuevos',
'newmessagesdifflink' => 'última modificación',
'youhavenewmessagesfromusers' => 'Tienes $1 de {{PLURAL:$3|otro usuario|$3 usuarios}} ($2).',
'youhavenewmessagesmanyusers' => 'Tienes $1 de muchos usuarios ($2).',
'newmessageslinkplural' => '{{PLURAL:$1|un nuevo mensaje|mensajes nuevos}}',
'newmessagesdifflinkplural' => '{{PLURAL:$1|última modificación|últimos cambios}}',
'youhavenewmessagesmulti' => 'Tienes nuevos mensajes en $1',
'editsection' => 'editar',
'editold' => 'editar',
'viewsourceold' => 'ver código fuente',
'editlink' => 'modificar',
'viewsourcelink' => 'ver fuente',
'editsectionhint' => 'Editar sección: $1',
'toc' => 'Contenido',
'showtoc' => 'mostrar',
'hidetoc' => 'ocultar',
'collapsible-collapse' => 'Ocultar',
'collapsible-expand' => 'Mostrar',
'thisisdeleted' => '¿Ver o restaurar $1?',
'viewdeleted' => '¿Deseas ver $1?',
'restorelink' => '{{PLURAL:$1|una edición borrada|$1 ediciones borradas}}',
'feedlinks' => 'Sindicación:',
'feed-invalid' => 'Tipo de subscripción a sindicación de noticias inválida.',
'feed-unavailable' => 'Las fuentes web no están disponibles',
'site-rss-feed' => '$1 Fuente RSS',
'site-atom-feed' => 'Feed Atom de $1',
'page-rss-feed' => 'Canal RSS «$1»',
'page-atom-feed' => 'Canal Atom «$1»',
'red-link-title' => '$1 (la página no existe)',
'sort-descending' => 'Orden descendente',
'sort-ascending' => 'Orden ascendente',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main' => 'Página',
'nstab-user' => 'Usuario',
'nstab-media' => 'Media',
'nstab-special' => 'Página especial',
'nstab-project' => 'Página del proyecto',
'nstab-image' => 'Archivo',
'nstab-mediawiki' => 'Mensaje',
'nstab-template' => 'Plantilla',
'nstab-help' => 'Ayuda',
'nstab-category' => 'Categoría',

# Main script and global functions
'nosuchaction' => 'No existe tal acción',
'nosuchactiontext' => 'La acción especificada en la dirección es inválida.
Es posible que hayas escrito mal la URL o que hayas seguido un enlace incorrecto. Esto también podría indicar un error en el software utilizado en {{SITENAME}}.',
'nosuchspecialpage' => 'No existe esa página especial',
'nospecialpagetext' => '<strong>Ha solicitado una página especial inexistente.</strong>

Puedes ver una lista de las páginas especiales en [[Special:SpecialPages|{{int:specialpages}}]].',

# General errors
'error' => 'Error',
'databaseerror' => 'Error de la base de datos',
'dberrortext' => 'Ha ocurrido un error de sintaxis en una consulta a la base de datos.
Esto puede indicar un error en el software.
La última consulta a la base de datos que se intentó fue:
<blockquote><code>$1</code></blockquote>
dentro de la función "<code>$2</code>".
La base de datos devolvió el error "<samp>$3: $4</samp>".',
'dberrortextcl' => 'Ha ocurrido un error de sintaxis en una consulta a la base de datos.
La última consulta a la base de datos que se intentó fue:
«$1»
desde la función «$2».
Base de datos retornó error «$3: $4».',
'laggedslavemode' => "'''Aviso:''' puede que falten las actualizaciones más recientes en esta página.",
'readonly' => 'Base de datos bloqueada',
'enterlockreason' => 'Explique el motivo del bloqueo, incluyendo una estimación de cuándo se producirá el desbloqueo',
'readonlytext' => 'La base de datos no permite nuevas entradas u otras modificaciones de forma temporal, probablemente por mantenimiento rutinario, tras lo cual volverá a la normalidad.

La explicación dada por el administrador que la bloqueó fue: $1',
'missing-article' => "La base de datos no encuentra el texto de una página que debería hallarse, llamada «$1» $2.

La causa de esto suele deberse a un ''diff'' anacrónico o un enlace al historial de una página que ha sido borrada.

Si no fuera el caso, puedes haber encontrado un fallo en el software.

Por favor, avisa a un [[Special:ListUsers/sysop|administrador]], tomando nota de la URL.",
'missingarticle-rev' => '(n.º de revisión: $1)',
'missingarticle-diff' => '(Dif.: $1, $2)',
'readonly_lag' => 'La base de datos se ha bloqueado temporalmente mientras los servidores se sincronizan.',
'internalerror' => 'Error interno',
'internalerror_info' => 'Error interno: $1',
'fileappenderrorread' => 'No se ha podido leer «$1» durante la anexión.',
'fileappenderror' => 'No se ha podido añadir «$1» a «$2».',
'filecopyerror' => 'No se pudo copiar el archivo «$1» a «$2».',
'filerenameerror' => 'No se pudo renombrar el archivo «$1» a «$2».',
'filedeleteerror' => 'No se pudo borrar el archivo «$1».',
'directorycreateerror' => 'No se pudo crear el directorio «$1».',
'filenotfound' => 'No se pudo encontrar el archivo «$1».',
'fileexistserror' => 'No se pudo escribir en el archivo «$1»: el archivo existe.',
'unexpected' => 'Valor inesperado: «$1»=«$2».',
'formerror' => 'Error: no se pudo enviar el formulario',
'badarticleerror' => 'Esta acción no se puede llevar a cabo en esta página.',
'cannotdelete' => 'La página o archivo «$1» no se pudo borrar.
Puede que ya haya sido borrado por alguien más.',
'cannotdelete-title' => 'No se puede borrar la página «$1»',
'delete-hook-aborted' => 'La modificación que intentaste hacer fue cancelada por un gancho de extensión. No hay explicación disponible.',
'badtitle' => 'Título incorrecto',
'badtitletext' => 'El título de la página solicitada está vacío, no es válido, o es un enlace interidioma o interwiki incorrecto.
Puede que contenga uno o más caracteres que no se pueden usar en los títulos.',
'perfcached' => 'Los siguientes datos provienen de la caché y pueden no estar actualizados. La caché puede contener {{PLURAL:$1|un resultado|$1 resultados}} como máximo.',
'perfcachedts' => 'Los siguientes datos provienen de la caché y su última fecha y hora de actualización es: $1. La caché puede contener {{PLURAL:$4|un resultado|$4 resultados}} como máximo.',
'querypage-no-updates' => 'Actualmente las actualizaciones de esta página están desactivadas. Estos datos no serán actualizados a corto plazo.',
'wrong_wfQuery_params' => 'Parámetros incorrectos para wfQuery()<br />
Función: $1<br />
Consulta: $2',
'viewsource' => 'Ver fuente',
'viewsource-title' => 'Ver el código fuente de «$1»',
'actionthrottled' => 'Acción bloqueada',
'actionthrottledtext' => "Como medida contra el ''spam'', la acción que estás realizando está limitada a un número determinado de veces en un periodo corto de tiempo, y has excedido ese límite. Por favor inténtalo de nuevo en unos minutos.",
'protectedpagetext' => 'Esta página ha sido protegida para evitar su edición.',
'viewsourcetext' => 'Puedes ver y copiar el código fuente de esta página:',
'viewyourtext' => "Puedes ver y copiar el código de '''tus ediciones''' a esta página:",
'protectedinterface' => 'Esta página proporciona el texto de la interfaz del software en este wiki, y está protegida para prevenir el abuso.
Para agregar o cambiar las traducciones para todos los wikis, por favor use [//translatewiki.net/translatewiki.net], el proyecto de localización de MediaWiki.',
'editinginterface' => "'''Aviso:''' Estás editando una página usada para proporcionar el texto de la interfaz para el software. 
Los cambios en esta página afectarán a la apariencia de la interfaz para los demás usuarios de este wiki. 
Para añadir o cambiar las traducciones, por favor considera usar [//translatewiki.net/ translatewiki.net], el proyecto de localización de MediaWiki.",
'sqlhidden' => '(Consulta SQL oculta)',
'cascadeprotected' => 'Esta página ha sido protegida para su edición, porque está incluida en {{PLURAL:$1|la siguiente página|las siguientes páginas}}, que están protegidas con la opción de «cascada»:
$2',
'namespaceprotected' => "No tienes permiso para editar las páginas del espacio de nombres '''$1'''.",
'customcssprotected' => 'No tienes permiso para editar esta página CSS, porque contiene configuraciones personales de otro usuario.',
'customjsprotected' => 'No tienes permiso para editar esta página JavaScript, porque contiene configuraciones personales de otro usuario.',
'ns-specialprotected' => 'Las páginas especiales no se pueden editar',
'titleprotected' => 'Esta página ha sido protegida contra creación por [[User:$1|$1]].
El motivo dado fue: "\'\'$2\'\'".',
'filereadonlyerror' => 'No se puede modificar el archivo "$1" porque el repositorio de archivos "$2" está en modo de sólo lectura.
El administrador que lo ha bloqueado ofrece esta explicación: "$3".',
'invalidtitle-knownnamespace' => 'Título no válido con el espacio de nombres "$2" y el texto "$3"',
'invalidtitle-unknownnamespace' => 'Título no válido con número de espacio de nombres desconocido  $1  y el texto "$2"',
'exception-nologin' => 'No has iniciado sesión',
'exception-nologin-text' => 'Esta página o acción requiere que inicies sesión en este wiki.',

# Virus scanner
'virus-badscanner' => "Error de configuración: Antivirus desconocido: ''$1''",
'virus-scanfailed' => 'Escaneo fallido (código $1)',
'virus-unknownscanner' => 'antivirus desconocido:',

# Login and logout pages
'logouttext' => "'''Ha terminado su sesión.'''

Puedes continuar usando {{SITENAME}} de forma anónima, o puedes <span class='plainlinks'>[$1 iniciar sesión otra vez]</span> con el mismo u otro usuario.
Ten en cuenta que las páginas que tengas abiertas en otras ventanas o pestañas pueden verse como si siguieras identificado hasta que las refresques.",
'welcomecreation' => '== ¡Bienvenido(a), $1! ==

Tu cuenta ha sido creada.
No olvides personalizar [[Special:Preferences|tus preferencias]].',
'yourname' => 'Nombre de usuario:',
'yourpassword' => 'Contraseña:',
'yourpasswordagain' => 'Confirma la contraseña:',
'remembermypassword' => 'Mantenerme conectado en este navegador (hasta $1 {{PLURAL:$1|día|días}})',
'securelogin-stick-https' => 'Permanecer conectado a HTTPS después de iniciar sesión',
'yourdomainname' => 'Dominio',
'password-change-forbidden' => 'No puedes cambiar las contraseñas de este wiki.',
'externaldberror' => 'Hubo un error de autenticación externa de la base de datos o bien no tienes autorización para actualizar tu cuenta externa.',
'login' => 'Iniciar sesión',
'nav-login-createaccount' => 'Iniciar sesión / crear cuenta',
'loginprompt' => "Es necesario habilitar las ''cookies'' en el navegador para registrarse en {{SITENAME}}.",
'userlogin' => 'Iniciar sesión / crear cuenta',
'userloginnocreate' => 'Iniciar sesión',
'logout' => 'Cerrar sesión',
'userlogout' => 'Cerrar sesión',
'notloggedin' => 'No has iniciado sesión',
'nologin' => '¿No tienes una cuenta? $1.',
'nologinlink' => 'Crear una cuenta',
'createaccount' => 'Crear una cuenta',
'gotaccount' => '¿Ya tienes una cuenta? $1.',
'gotaccountlink' => 'Entrar',
'userlogin-resetlink' => '¿Olvidaste tus datos de acceso?',
'createaccountmail' => 'por correo electrónico',
'createaccountreason' => 'Motivo:',
'badretype' => 'Las contraseñas no coinciden.',
'userexists' => 'El nombre de usuario indicado ya está en uso.
Por favor escoge un nombre diferente.',
'loginerror' => 'Error de inicio de sesión',
'createaccounterror' => 'No se pudo crear la cuenta: $1',
'nocookiesnew' => 'La cuenta de usuario ha sido creada, pero no has iniciado sesión.
{{SITENAME}} usa <em>cookies</em> para identificar a los usuarios registrados.
Tu navegador tiene desactivadas las cookies.
Por favor, actívalas e inicia sesión con tu nuevo nombre de usuario y contraseña.',
'nocookieslogin' => '{{SITENAME}} utiliza <em>cookies</em> para la autenticación de usuarios. Las <em>cookies</em> están desactivadas en tu navegador. Por favor, actívalas e inténtalo de nuevo.',
'nocookiesfornew' => 'No se pudo crear la cuenta de usuario, porque no pudimos confirmar su origen.
Asegúrate de que tienes las cookies activadas, luego recarga esta página e inténtalo de nuevo.',
'noname' => 'No se ha especificado un nombre de usuario válido.',
'loginsuccesstitle' => 'Inicio de sesión exitoso',
'loginsuccess' => "'''Has iniciado sesión en {{SITENAME}} como «$1».'''",
'nosuchuser' => 'No existe ningún usuario llamado «$1».
Los nombres de usuario son sensibles a las mayúsculas.
Revisa la ortografía, o [[Special:UserLogin/signup|crea una cuenta nueva]].',
'nosuchusershort' => 'No hay un usuario con el nombre «$1». Comprueba que lo has escrito correctamente.',
'nouserspecified' => 'Debes especificar un nombre de usuario.',
'login-userblocked' => 'Este usuario está bloqueado. Inicio de sesión no permitido.',
'wrongpassword' => 'La contraseña indicada es incorrecta.
Por favor, inténtalo de nuevo.',
'wrongpasswordempty' => 'No has escrito una contraseña.
Por favor, inténtalo de nuevo.',
'passwordtooshort' => 'Las contraseñas deben tener al menos {{PLURAL:$1|1 caracter|$1 caracteres}}.',
'password-name-match' => 'Tu contraseña debe ser diferente de tu nombre de usuario.',
'password-login-forbidden' => 'El uso de este nombre de usuario y contraseña han sido prohibidos.',
'mailmypassword' => 'Enviar una nueva contraseña por correo electrónico',
'passwordremindertitle' => 'Recordatorio de contraseña de {{SITENAME}}',
'passwordremindertext' => 'Alguien (probablemente tú, desde la dirección IP $1) solicitó que te enviáramos una nueva contraseña para tu cuenta en {{SITENAME}} ($4).
Se ha creado la siguiente contraseña temporal para el usuario «$2»: «$3»
Ahora deberías iniciar sesión y cambiar tu contraseña. Tu contraseña temporal expirará en {{PLURAL:$5|un día|$5 días}}.

Si fue otro quien solicitó este mensaje o has recordado tu contraseña y ya no deseas cambiarla, puedes ignorar este mensaje y seguir usando tu contraseña original.',
'noemail' => 'No hay una dirección de correo electrónico registrada para «$1».',
'noemailcreate' => 'Necesitas proveer una dirección de correo electrónico válida',
'passwordsent' => 'Se ha enviado una nueva contraseña al correo electrónico de «$1».
Por favor, identifícate de nuevo tras recibirla.',
'blocked-mailpassword' => 'Tu dirección IP está bloqueada, y no se te permite el uso de la función de recuperación de contraseñas para prevenir abusos.',
'eauthentsent' => 'Se ha enviado un correo electrónico de confirmación a la dirección especificada.
Antes de que se envíe cualquier otro correo a la cuenta tienes que seguir las instrucciones enviadas en el mensaje para así confirmar que la dirección te pertenece.',
'throttled-mailpassword' => 'Ya se ha enviado un recordatorio de password en {{PLURAL:$1|la última hora|las últimas $1 horas}}.
Para evitar los abusos, solo se enviará un recordatorio de password cada {{PLURAL:$1|hora|$1 horas}}.',
'mailerror' => 'Error al enviar correo: $1',
'acct_creation_throttle_hit' => 'Los visitantes a este wiki usando tu dirección IP han creado {{PLURAL:$1|una cuenta|$1 cuentas}} en el último día, lo cual es lo máximo permitido en este periodo de tiempo.
Como resultado, los visitantes usando esta dirección IP no pueden crear más cuentas en este momento.',
'emailauthenticated' => 'Tu dirección de correo electrónico fue autenticada el $2 a $3.',
'emailnotauthenticated' => 'Aún no has confirmado tu dirección de correo electrónico.
Hasta que lo hagas, las siguientes funciones no estarán disponibles.',
'noemailprefs' => 'Especifica una dirección electrónica para habilitar estas características.',
'emailconfirmlink' => 'Confirmar dirección de correo electrónico',
'invalidemailaddress' => 'La dirección electrónica no puede ser aceptada, pues parece que tiene un formato no válido.
Por favor, escribe una dirección en el formato adecuado o deja el campo en blanco.',
'cannotchangeemail' => 'Las direcciones de la correo electrónico de las cuentas de usuario no puedes cambiarse en esta wiki.',
'emaildisabled' => 'Este sitio no puede enviar mensajes de correo electrónico.',
'accountcreated' => 'Cuenta creada',
'accountcreatedtext' => 'La cuenta de usuario para $1 ha sido creada.',
'createaccount-title' => 'Creación de cuenta para {{SITENAME}}',
'createaccount-text' => 'Alguien creó en {{SITENAME}} ($4) una cuenta asociada a este correo electrónico con el nombre «$2».
La contraseña asignada automáticamente es «$3». Por favor entra ahora y cambia tu contraseña.

Puedes ignorar este mensaje si esta cuenta fue creada por error.',
'usernamehasherror' => 'El nombre de usuario no puede contener símbolos de almohadilla/numeral',
'login-throttled' => 'Has intentado demasiadas veces iniciar sesión. Por favor espera antes de intentarlo nuevamente.',
'login-abort-generic' => 'Tu inicio de sesión no fue exitoso - Cancelado',
'loginlanguagelabel' => 'Idioma: $1',
'suspicious-userlogout' => 'Tu solicitud de desconexión ha sido denegada, pues parece haber sido enviada desde un navegador defectuoso o un proxy caché.',

# E-mail sending
'php-mail-error-unknown' => 'Error desconocido en la función mail() de PHP.',
'user-mail-no-addy' => 'Se ha intentado enviar correo electrónico sin una dirección de correo electrónico.',

# Change password dialog
'resetpass' => 'Cambiar la contraseña',
'resetpass_announce' => 'Has iniciado sesión con una contraseña temporal que fue enviada por correo electrónico.
Por favor, introduce una nueva contraseña aquí:',
'resetpass_text' => '<!-- Añada texto aquí -->',
'resetpass_header' => 'Cambiar la contraseña de la cuenta',
'oldpassword' => 'Contraseña antigua:',
'newpassword' => 'Contraseña nueva:',
'retypenew' => 'Confirmar la contraseña nueva:',
'resetpass_submit' => 'Establecer contraseña e iniciar sesión',
'resetpass_success' => 'La contraseña ha sido cambiada con éxito.
Iniciando sesión...',
'resetpass_forbidden' => 'No se pueden cambiar las contraseñas',
'resetpass-no-info' => 'Debes iniciar sesión para acceder directamente a esta página.',
'resetpass-submit-loggedin' => 'Cambiar contraseña',
'resetpass-submit-cancel' => 'Cancelar',
'resetpass-wrong-oldpass' => 'La contraseña antigua no es correcta.
Puede que ya hayas cambiado la contraseña o que hayas pedido una temporal.',
'resetpass-temp-password' => 'Contraseña temporal:',

# Special:PasswordReset
'passwordreset' => 'Restablecimiento de contraseña',
'passwordreset-text' => 'Completa este formulario para recibir un recordatorio por correo electrónico de los detalles de tu cuenta.',
'passwordreset-legend' => 'Restablecer contraseña',
'passwordreset-disabled' => 'Se ha desactivado el restablecimiento de contraseñas en este wiki.',
'passwordreset-pretext' => '{{PLURAL:$1||Introduce uno de los elementos de datos siguientes}}',
'passwordreset-username' => 'Nombre de usuario:',
'passwordreset-domain' => 'Dominio:',
'passwordreset-capture' => '¿Ver el mensaje resultante?',
'passwordreset-capture-help' => 'Si marcas esta casilla, se te mostrará el correo electrónico (con la contraseña temporal) además de enviarse al usuario.',
'passwordreset-email' => 'Dirección de correo electrónico:',
'passwordreset-emailtitle' => 'Detalles de la cuenta en {{SITENAME}}',
'passwordreset-emailtext-ip' => 'Alguien (probablemente tú, desde la dirección IP $1) pidió un recordatorio de tus
datos de cuenta para {{SITENAME}} ($4). {{PLURAL:$3|La siguiente cuenta está asociada|Las siguientes cuentas están asociadas}}
con esta dirección de correo electrónico:

$2

{{PLURAL:$3|Esta contraseña temporal|Estas contraseñas temporales}} expirarán en {{PLURAL:$5|un día|$5 días}}.
Deberías iniciar sesión y establecer una contraseña nueva ahora. Si alguien más hizo este pedido,
o recuerdas tu contraseña original, y no deseas cambiarla, puedes
ignorar este mensaje y continuar usando tu contraseña anterior.',
'passwordreset-emailtext-user' => 'El usuario $1 en {{SITENAME}} pidió un recordatorio de tus datos de cuenta para {{SITENAME}}
($4). {{PLURAL:$3|La siguiente cuenta está asociada|Las siguientes cuentas están asociadas}} con esta dirección de correo electrónico:

$2

{{PLURAL:$3|Esta contraseña temporal|Estas contraseñas temporales}} expirarán en {{PLURAL:$5|un día|$5 días}}.
Deberías iniciar sesión y establecer una contraseña nueva ahora. Si alguien más hizo este pedido,
o recuerdas tu contraseña original, y no deseas cambiarla, puedes
ignorar este mensaje y continuar usando tu contraseña anterior.',
'passwordreset-emailelement' => 'Nombre de usuario: $1
Contraseña temporal: $2',
'passwordreset-emailsent' => 'Se ha enviado un correo electrónico de recordatorio.',
'passwordreset-emailsent-capture' => 'Un recordatorio por correo electrónico ha sido enviado, que se muestra a continuación.',
'passwordreset-emailerror-capture' => 'Un recordatorio por correo electrónico fue generado, que se muestra a continuación, pero el envío al usuario falló: $1',

# Special:ChangeEmail
'changeemail' => 'Cambiar la dirección de correo-e',
'changeemail-header' => 'Cambiar la dirección de correo-e de la cuenta',
'changeemail-text' => 'Rellena este formulario para cambiar tu dirección de correo electrónico. Debes introducir la contraseña para confirmar este cambio.',
'changeemail-no-info' => 'Debes iniciar sesión para acceder directamente a esta página.',
'changeemail-oldemail' => 'Dirección de correo-e actual:',
'changeemail-newemail' => 'Nueva dirección de correo-e:',
'changeemail-none' => '(ninguna)',
'changeemail-submit' => 'Cambiar correo-e',
'changeemail-cancel' => 'Cancelar',

# Edit page toolbar
'bold_sample' => 'Texto en negrita',
'bold_tip' => 'Texto en negrita',
'italic_sample' => 'Texto en cursiva',
'italic_tip' => 'Texto en cursiva',
'link_sample' => 'Título del enlace',
'link_tip' => 'Enlace interno',
'extlink_sample' => 'http://www.ejemplo.com Título del enlace',
'extlink_tip' => 'Enlace externo (recuerda añadir el prefijo http://)',
'headline_sample' => 'Texto de encabezado',
'headline_tip' => 'Encabezado de nivel 2',
'nowiki_sample' => 'Insertar aquí texto sin formato',
'nowiki_tip' => 'Ignorar el formato wiki',
'image_sample' => 'Ejemplo.jpg',
'image_tip' => 'Archivo incrustado',
'media_sample' => 'Ejemplo.ogg',
'media_tip' => 'Enlace a archivo',
'sig_tip' => 'Tu firma con fecha y hora',
'hr_tip' => 'Línea horizontal (utilizar con moderación)',

# Edit pages
'summary' => 'Resumen:',
'subject' => 'Asunto/encabezado:',
'minoredit' => 'Esta es una edición menor',
'watchthis' => 'Vigilar esta página',
'savearticle' => 'Grabar la página',
'preview' => 'Previsualizar',
'showpreview' => 'Mostrar previsualización',
'showlivepreview' => 'Previsualización inmediata',
'showdiff' => 'Mostrar cambios',
'anoneditwarning' => "'''Aviso:''' No has iniciado sesión con una cuenta de usuario.
Tu dirección IP se almacenará en el historial de ediciones de la página.",
'anonpreviewwarning' => "''No has iniciado sesión con una cuenta de usuario. Al guardar los cambios se almacenará tu dirección IP en el historial de edición de la página.''",
'missingsummary' => "'''Atención:''' No has escrito un resumen de edición. Si haces clic nuevamente en «{{int:savearticle}}» tu edición se grabará sin él.",
'missingcommenttext' => 'Por favor, introduce un texto debajo.',
'missingcommentheader' => "'''Recordatorio:''' No has escrito un título para este comentario. Si haces clic nuevamente en \"{{int:savearticle}}\" tu edición se grabará sin él.",
'summary-preview' => 'Previsualización del resumen:',
'subject-preview' => 'Previsualización del tema/título:',
'blockedtitle' => 'El usuario está bloqueado',
'blockedtext' => "'''Tu nombre de usuario o dirección IP ha sido bloqueada.'''

El bloqueo fue hecho por $1.
La razón dada es ''$2''.

* Inicio del bloqueo: $8
* Caducidad del bloqueo: $6
* Bloqueo destinado a: $7

Puedes contactar con $1 u otro [[{{MediaWiki:Grouppage-sysop}}|administrador]] para discutir el bloqueo.
No puedes utilizar la función «enviar correo electrónico a este usuario»  a menos que tengas una dirección de correo electrónico válida registrada en tus [[Special:Preferences|preferencias de usuario]] y que el bloqueo no haya inhabilitado esta función.

Tu dirección IP actual es $3, y el identificador del bloqueo es #$5.
Por favor incluye todos los datos aquí mostrados en cualquier consulta que hagas.",
'autoblockedtext' => "Tu dirección IP ha sido bloqueada automáticamente porque fue utilizada por otro usuario que fue bloqueado por $1.
La razón dada es esta:

:''$2''

* Inicio del bloqueo: $8
* Caducidad del bloqueo: $6
* Bloqueo destinado a: $7

Puedes contactar con $1 o con otro de los [[{{MediaWiki:Grouppage-sysop}}|administradores]] para discutir el bloqueo.

Ten en cuenta que no podrás utilizar la herramienta de «enviar correo electrónico a este usuario» a menos que tengas una dirección de correo electrónico válida registrada en tus [[Special:Preferences|preferencias de usuario]] y que el bloqueo no haya inhabilitado esta función.

Tu actual dirección IP es $3, y el identificador del bloqueo es #$5.
Por favor, incluye todos los datos mostrados aquí en cualquier consulta que hagas.",
'blockednoreason' => 'no se ha especificado el motivo',
'whitelistedittext' => 'Tienes que $1 para editar artículos.',
'confirmedittext' => 'Debes confirmar tu dirección electrónica antes de editar páginas. Por favor, establece y valida una dirección electrónica a través de tus [[Special:Preferences|preferencias de usuario]].',
'nosuchsectiontitle' => 'Sección no encontrada',
'nosuchsectiontext' => 'Has intentado editar una sección que no existe.
Quizá ha sido movida o borrada mientras visitabas la página.',
'loginreqtitle' => 'Es necesario iniciar sesión',
'loginreqlink' => 'iniciar sesión',
'loginreqpagetext' => 'Debes $1 para ver otras páginas.',
'accmailtitle' => 'La contraseña ha sido enviada.',
'accmailtext' => 'Se ha enviado a $2 una contraseña generada aleatoriamente para [[User talk:$1|$1]].

La contraseña para esta nueva cuenta puede cambiarse en [[Special:ChangePassword|la página destinada para ello]] después de haber iniciado sesión.',
'newarticle' => '(Nuevo)',
'newarticletext' => 'Has seguido un enlace a una página que aún no existe.
Para crear esta página, escribe en el campo a continuación. Para más información, consulta la [[{{MediaWiki:Helppage}}|página de ayuda]].
Si llegaste aquí por error, vuelve a la página anterior.',
'anontalkpagetext' => "---- ''Esta es la página de discusión de un usuario anónimo que aún no ha creado una cuenta, o no la usa. Por lo tanto, tenemos que usar su dirección IP para identificarlo. Una dirección IP puede ser compartida por varios usuarios. Si eres un usuario anónimo y crees que se han dirigido a ti con comentarios improcedentes, por favor [[Special:UserLogin/signup|crea una cuenta]] o si ya la tienes [[Special:UserLogin|identifícate]] para evitar confusiones futuras con otros usuarios anónimos.''",
'noarticletext' => 'En este momento no hay texto en esta página.
Puedes [[Special:Search/{{PAGENAME}}|buscar el título de esta página]] en otras páginas,
<span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} buscar en los registros],
o [{{fullurl:{{FULLPAGENAME}}|action=edit}} editar esta página]</span>.',
'noarticletext-nopermission' => 'Actualmente no hay texto en esta página.
Puedes [[Special:Search/{{PAGENAME}}|buscar este título de página]] en otras páginas, o <span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} buscar en los registros relacionados]</span>, pero no tienes permiso para crear esta página.',
'missing-revision' => 'La revisión #$1 de la página «{{PAGENAME}}» no existe.

Esto suele deberse a seguir un enlace obsoleto hacia el historial de una página que ya ha sido borrada.
Los detalles pueden encontrarse en el [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} registro de borrado].',
'userpage-userdoesnotexist' => 'La cuenta de usuario «<nowiki>$1</nowiki>» no está registrada. Por favor comprueba si quieres crear o editar esta página.',
'userpage-userdoesnotexist-view' => 'La cuenta de usuario «$1» no está registrada.',
'blocked-notice-logextract' => 'Este usuario está actualmente bloqueado.
La última entrada del registro de bloqueos se proporciona debajo para mayor referencia:',
'clearyourcache' => "'''Nota:''' después de guardar, quizás necesites refrescar la caché de tu navegador para ver los cambios.
* '''Firefox / Safari:''' Mantén presionada ''Mayús'' mientras pulsas el botón ''Actualizar'', o presiona ''Ctrl+F5'' o ''Ctrl+R'' (''⌘+R'' en Mac)
* '''Google Chrome:''' presiona ''Ctrl+Shift+R'' (''⌘+Mayús+R'' en Mac)
* '''Internet Explorer:''' mantén presionada ''Ctrl'' mientras pulsas ''Actualizar'', o presiona ''Ctrl+F5''
* '''Opera:''' vacía la caché en ''Herramientas → Preferencias''",
'usercssyoucanpreview' => "'''Consejo:''' Usa el botón «{{int:showpreview}}» para probar el nuevo CSS antes de guardarlo.",
'userjsyoucanpreview' => "'''Consejo:''' Usa el botón «{{int:showpreview}}» para probar el nuevo JS antes de guardarlo.",
'usercsspreview' => "'''Recuerda que solo estás previsualizando tu CSS de usuario.'''
'''¡Aún no se ha guardado!'''",
'userjspreview' => "'''¡Recuerda que solo estás previsualizando tu JavaScript de usuario.'''
'''¡Aún no se ha guardado!'''",
'sitecsspreview' => "'''Recuerda que sólo estás previsualizando este CSS'''
'''¡Aún no se ha guardado!'''",
'sitejspreview' => "'''Recuerda que sólo estás previsualizando este código JavaScript.'''
'''¡Aún no se ha guardado!'''",
'userinvalidcssjstitle' => "'''Aviso:''' No existe la skin «$1». Recuerda que las páginas personalizadas ''.css'' y ''.js'' tienen un título en minúsculas. Por ejemplo, {{ns:user}}:Ejemplo/vector.css en vez de {{ns:user}}:Ejemplo/Vector.css.",
'updated' => '(Actualizado)',
'note' => "'''Nota:'''",
'previewnote' => "'''Recuerda que esto es solo una previsualización.'''
¡Tus cambios aún no se han guardado!",
'continue-editing' => 'Ir al área de edición',
'previewconflict' => 'Esta previsualización refleja el texto en el área de edición superior como aparecerá una vez guardados los cambios.',
'session_fail_preview' => "'''Lo sentimos, no pudimos procesar la edición debido a una pérdida de los datos de sesión.'''
Por favor, inténtalo de nuevo.
Si el problema persiste, [[Special:UserLogout|cierra la sesión]] y vuelve a identificarte.",
'session_fail_preview_html' => "'''Lo sentimos, no hemos podido procesar tu cambio debido a una pérdida de datos de sesión.'''

''Puesto que este wiki tiene el HTML puro habilitado, la visión preliminar está oculta para prevenirse contra ataques en JavaScript.''

'''Si éste es un intento legítimo de modificación, por favor, inténtalo de nuevo. Si aún así no funcionase, [[Special:UserLogout|cierra la sesión]] e ingresa de nuevo.'''",
'token_suffix_mismatch' => "'''Tu edición ha sido rechazada porque tu cliente ha mezclado los signos de puntuación en el token de edición.
Se rechazó la edición para evitar que el texto de la página se corrompa.
Esto sucede en ocasiones cuando se usa un servicio de proxy anónimo defectuoso.'''",
'edit_form_incomplete' => "'''Algunas partes del formulario de edición no llegaron al servidor, comprueba que tus ediciones están intactas e inténtalo de nuevo'''.",
'editing' => 'Editando $1',
'creating' => 'Creando la página $1',
'editingsection' => 'Editando $1 (sección)',
'editingcomment' => 'Editando $1 (nueva sección)',
'editconflict' => 'Conflicto de edición: $1',
'explainconflict' => "Alguien más ha cambiado esta página desde que empezaste a editarla.
El área de texto superior contiene el texto de la página como existe actualmente.
Tus cambios se muestran en el área de texto inferior.
Si quieres grabar tus cambios, has de trasladarlos al área superior.
'''Sólo''' el texto en el área de texto superior será grabado cuando pulses «{{int:savearticle}}».",
'yourtext' => 'Tu texto',
'storedversion' => 'Versión almacenada',
'nonunicodebrowser' => "'''Atención: Tu navegador no cumple la norma Unicode.'''
Se ha activado un sistema de edición alternativo que te permitirá editar artículos con seguridad: los caracteres no ASCII aparecerán en la caja de edición como códigos hexadecimales.",
'editingold' => "'''Aviso: Estás editando una versión antigua de esta página.'''
Si la guardas, se perderán los cambios realizados desde esta revisión.",
'yourdiff' => 'Diferencias',
'copyrightwarning' => "Por favor observa que todas las contribuciones a {{SITENAME}} se consideran hechas públicas bajo la $2 (véase $1 para más detalles). Si no deseas la modificación y distribución libre de tu obra, entonces no la pongas aquí.<br />También nos aseguras que tú escribiste esto y te pertenecen de los derechos de autor, o lo copiaste desde el dominio público u otra fuente libre. '''¡No uses escritos con copyright sin permiso!'''",
'copyrightwarning2' => "Por favor, ten en cuenta que todas las contribuciones a {{SITENAME}} pueden ser editadas, modificadas o eliminadas por otros colaboradores. Si no deseas que las modifiquen sin limitaciones y las distribuyan libremente, entonces no las pongas aquí.<br />También nos aseguras que tú escribiste esto y te pertenecen de los derechos de autor, o lo copiaste desde el dominio público u otra fuente libre. (véase $1 para más detalles).
'''¡No uses escritos con copyright sin permiso!'''",
'longpageerror' => "'''Error: El texto que has enviado ocupa {{PLURAL:$1|un kilobyte|$1 kilobytes}}, que excede el máximo de {{PLURAL:$2|un kilobyte|$2 kilobytes}}.''' 
No se lo puede guardar.",
'readonlywarning' => "'''Aviso: La base de datos ha sido bloqueada por cuestiones de mantenimiento, así que no podrás guardar tus modificaciones en este momento.
Puedes copiar y pegar el texto en un archivo y guardarlo para más tarde.'''

El administrador que la bloqueó dio esta explicación: $1",
'protectedpagewarning' => "'''Aviso: Esta página ha sido protegida de manera que solo usuarios con permisos de administrador puedan editarla.'''
A continuación se muestra la última entrada de registro para referencia:",
'semiprotectedpagewarning' => "'''Nota:''' Esta página ha sido protegida para que solo usuarios registrados puedan editarla.
A continuación se provee la última entrada de registro para referencia:",
'cascadeprotectedwarning' => "'''Aviso:''' Esta página está protegida, solo los administradores pueden editarla porque está incluida en  {{PLURAL:$1|la siguiente página protegida|las siguientes páginas protegidas}} en cascada:",
'titleprotectedwarning' => "'''Aviso: Esta página está protegida de modo que se necesitan [[Special:ListGroupRights|derechos especificos]] para crearla.'''
A continuación se muestra la última entrada de registro para referencia:",
'templatesused' => '{{PLURAL:$1|Plantilla usada|Plantillas usadas}} en esta página:',
'templatesusedpreview' => '{{PLURAL:$1|Plantilla usada|Plantillas usadas}} en esta previsualización:',
'templatesusedsection' => '{{PLURAL:$1|Plantilla usada|Plantillas usadas}} en esta sección:',
'template-protected' => '(protegida)',
'template-semiprotected' => '(semiprotegida)',
'hiddencategories' => 'Esta página es un miembro de {{PLURAL:$1|1 categoría oculta|$1 categorías ocultas}}:',
'edittools' => '<!-- Este texto aparecerá bajo los formularios de edición y subida. -->',
'nocreatetitle' => 'Creación de páginas limitada',
'nocreatetext' => '{{SITENAME}} ha restringido la posibilidad de crear nuevas páginas.
Puede volver atrás y editar una página existente, [[Special:UserLogin|identificarte o crear una cuenta]].',
'nocreate-loggedin' => 'No tienes permiso para crear páginas nuevas.',
'sectioneditnotsupported-title' => 'Edición de sección no compatible',
'sectioneditnotsupported-text' => 'La edición de sección no es compatible con esta página.',
'permissionserrors' => 'Errores de permisos',
'permissionserrorstext' => 'No tienes permiso para hacer eso, por {{PLURAL:$1|el siguiente motivo|los siguientes motivos}}:',
'permissionserrorstext-withaction' => 'No tienes permiso para $2, por {{PLURAL:$1|el siguiente motivo|los siguientes motivos}}:',
'recreate-moveddeleted-warn' => "'''Atención: estás volviendo a crear una página que ha sido borrada anteriormente.'''

Deberías considerar si es apropiado continuar editando esta página.
El registro de borrado y traslados para esta página están provistos aquí por conveniencia:",
'moveddeleted-notice' => 'Esta página ha sido borrada.
El registro de borrados y traslados para la página están provistos debajo como referencia.',
'log-fulllog' => 'Ver el registro completo',
'edit-hook-aborted' => 'Edición cancelada por la extensión.
No se aportaron explicaciones.',
'edit-gone-missing' => 'No se pudo actualizar la página.
Parece que ha sido borrada.',
'edit-conflict' => 'Conflicto de edición.',
'edit-no-change' => 'Se ignoró tu revisión, porque no se hizo ningún cambio al texto.',
'edit-already-exists' => 'No se pudo crear una página nueva.
Ya existe.',
'defaultmessagetext' => 'Texto de mensaje predeterminado',
'content-failed-to-parse' => 'No se pudo analizar el contenido $2 del modelo $1: $3',
'invalid-content-data' => 'Datos de contenido inválidos',
'content-not-allowed-here' => 'El contenido "$1" no está permitido en la página [[$2]]',

# Content models
'content-model-wikitext' => 'texto wiki',
'content-model-text' => 'Texto sin formato',
'content-model-javascript' => 'JavaScript',
'content-model-css' => 'CSS',

# Parser/template warnings
'expensive-parserfunction-warning' => 'Aviso: Esta página contiene demasiadas llamadas a funciones sintácticas costosas (#ifexist: y similares)

Tiene {{PLURAL:$1|una llamada|$1 llamadas}}, pero debería tener menos de $2.',
'expensive-parserfunction-category' => 'Páginas con llamadas a funciones sintácticas demasiado costosas',
'post-expand-template-inclusion-warning' => 'Aviso: El tamaño de las plantillas incluidas es muy grande.
Algunas plantillas no serán incluidas.',
'post-expand-template-inclusion-category' => 'Páginas con sobrecarga de plantillas',
'post-expand-template-argument-warning' => 'Aviso: Esta página contiene al menos un parámetro de plantilla que tiene un tamaño de expansión demasiado grande.
Ese o esos parámetros han sido omitidos.',
'post-expand-template-argument-category' => 'Páginas que contienen plantillas con parámetros descartados',
'parser-template-loop-warning' => 'Detectado bucle de plantilla: [[$1]]',
'parser-template-recursion-depth-warning' => 'Se ha excedido el límite de recursión de plantillas ($1)',
'language-converter-depth-warning' => 'El límite de profundidad del convertidor de idioma ha excedido ($1)',
'node-count-exceeded-category' => 'Páginas donde se supera el número de nodos',
'node-count-exceeded-warning' => 'Página que ha superado el número de nodos',
'expansion-depth-exceeded-category' => 'Páginas donde se supera la profundidad de expansión',
'expansion-depth-exceeded-warning' => 'Página que ha superado la profundidad de expansión',
'parser-unstrip-loop-warning' => 'Se ha detectado un bucle "unstrip"',
'parser-unstrip-recursion-limit' => 'Se ha superado el límite de recursión de "unstrip" ($1)',
'converter-manual-rule-error' => 'Error detectado en la regla de conversión manual del lenguaje',

# "Undo" feature
'undo-success' => 'La edición puede deshacerse. Antes de deshacer la edición, comprueba la siguiente comparación para verificar que realmente es lo que quieres hacer, y entonces guarda los cambios para así deshacer la edición.',
'undo-failure' => 'No se puede deshacer la edición ya que otro usuario ha realizado una edición intermedia.',
'undo-norev' => 'La edición no puede ser deshecha porque no existe o ha sido borrada.',
'undo-summary' => 'Deshecha la revisión $1 de [[Special:Contributions/$2|$2]] ([[User talk:$2|disc.]])',

# Account creation failure
'cantcreateaccounttitle' => 'No se puede crear la cuenta',
'cantcreateaccount-text' => "La creación de cuentas desde esta dirección IP ('''$1''') ha sido bloqueada por [[User:$3|$3]].

El motivo dado por $3 es ''$2''",

# History pages
'viewpagelogs' => 'Ver los registros de esta página',
'nohistory' => 'No hay historial de ediciones para esta página.',
'currentrev' => 'Revisión actual',
'currentrev-asof' => 'Última revisión de $1',
'revisionasof' => 'Revisión de $1',
'revision-info' => 'Revisión a fecha de $1; $2',
'previousrevision' => '← Revisión anterior',
'nextrevision' => 'Revisión siguiente →',
'currentrevisionlink' => 'Revisión actual',
'cur' => 'act',
'next' => 'sig',
'last' => 'ant',
'page_first' => 'primeras',
'page_last' => 'últimas',
'histlegend' => "Selección de diferencias: marca los selectores de las versiones a comparar y pulsa ''enter'' o el botón de abajo.<br />
Leyenda: (act) = diferencias con la versión actual,
(prev) = diferencias con la versión previa, M = edición menor",
'history-fieldset-title' => 'Buscar en el historial',
'history-show-deleted' => 'Solo ediciones ocultadas',
'histfirst' => 'Primeras',
'histlast' => 'Últimas',
'historysize' => '({{PLURAL:$1|1 byte|$1 bytes}})',
'historyempty' => '(vacío)',

# Revision feed
'history-feed-title' => 'Historial de revisiones',
'history-feed-description' => 'Historial de revisiones para esta página en el wiki',
'history-feed-item-nocomment' => '$1 en $2',
'history-feed-empty' => 'La página solicitada no existe.
Puede haber sido borrada del wiki o renombrada.
Prueba a [[Special:Search|buscar en el wiki]] nuevas páginas relevantes.',

# Revision deletion
'rev-deleted-comment' => '(resumen de edición eliminado)',
'rev-deleted-user' => '(nombre de usuario eliminado)',
'rev-deleted-event' => '(entrada borrada)',
'rev-deleted-user-contribs' => '[nombre de usuario o dirección IP eliminada - edición ocultada de la lista de contribuciones]',
'rev-deleted-text-permission' => "Esta revisión de la página ha sido '''borrada'''.
Puede haber detalles en el [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} registro de borrados].",
'rev-deleted-text-unhide' => "Esta revisión de la página ha sido '''borrada'''.
Puede haber más detalles en el [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} registro de borrados].
Como administrador todavía puedes [$1 ver esta revisión] si así lo deseas.",
'rev-suppressed-text-unhide' => "Esta revisión de la página ha sido '''suprimida'''.
Puede haber más detalles en el [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} registro de supresiones].
Como administrador podrá seguir [$1 viendo esta revisión] si desea continuar.",
'rev-deleted-text-view' => "Esta revisión de la página ha sido '''borrada'''.
Aún tiene la posibilidad de verla; puede ampliar los detalles en el [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} registro de borrados].",
'rev-suppressed-text-view' => "Esta revisión de la página ha sido '''suprimida'''.
Aún tiene la posibilidad de verla; puede ampliar los detalles en el [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} registro de supresiones].",
'rev-deleted-no-diff' => "No puedes ver esta diferencia porque una de las revisiones ha sido '''borrada'''.
Puedes encontrar más detalles en el [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} registro de borrados].",
'rev-suppressed-no-diff' => "No puedes ver esta diferencia porque una de las revisiones ha sido '''borrada'''.",
'rev-deleted-unhide-diff' => "Una de las revisiones de esta diferencia ha sido '''borrada'''.
Puede ampliar los detalles en el [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} registro de borrados].
Aún puede [$1 ver este cambio] si así lo desea.",
'rev-suppressed-unhide-diff' => "Una de las revisiones de esta diferencia ha sido '''suprimida'''.
Puede haber detalles en el [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} registro de supresiones].
Aún puede [$1 ver esta diferencia] si desea así lo desea.",
'rev-deleted-diff-view' => "Una de las revisiones de esta diferencia ha sido '''borrada'''.
Aún tiene la posibilidad de verla; puede ampliar los detalles en el [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} registro de borrados].",
'rev-suppressed-diff-view' => "Una de las revisiones de esta diferencia ha sido '''suprimida'''.
Aún tiene la posibilidad de verla; puede ampliar los detalles en el [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} registro de supresiones].",
'rev-delundel' => 'mostrar/ocultar',
'rev-showdeleted' => 'mostrar',
'revisiondelete' => 'Borrar/restaurar revisiones',
'revdelete-nooldid-title' => 'No hay revisión destino',
'revdelete-nooldid-text' => 'No se ha especificado una revisión o revisiones destino sobre las que realizar esta función.',
'revdelete-nologtype-title' => 'ningún nombre dado',
'revdelete-nologtype-text' => 'No has especificado ningún nombre para ejecutar esta acción.',
'revdelete-nologid-title' => 'Entrada de registro inválida',
'revdelete-nologid-text' => 'Tampoco has especificado un objetivo de eventos para ejecutar esta función o la entrada especificada no existe.',
'revdelete-no-file' => 'El fichero especificado no existe.',
'revdelete-show-file-confirm' => '¿Realmente deseas ver la revisión borrada del archivo "<nowiki>$1</nowiki>" del $2 a las $3?',
'revdelete-show-file-submit' => 'Sí',
'revdelete-selected' => "'''{{PLURAL:$2|Revisión seleccionada|Revisiones seleccionadas}} de [[:$1]]:'''",
'logdelete-selected' => "'''{{PLURAL:$1|Seleccionado un evento|Seleccionados eventos}}:'''",
'revdelete-text' => "Las revisiones borradas aún aparecerán en el historial de la página y en los registros, pero sus contenidos no serán accesibles al público.'''
Otros administradores de {{SITENAME}} aún podrán acceder al contenido oculto y podrán deshacer el borrado a través de la misma interfaz, a menos que se establezcan restricciones adicionales.",
'revdelete-confirm' => 'Por favor confirma que deseas realizar la operación, que entiendes las consecuencias y que estás ejecutando dicha acción acorde con [[{{MediaWiki:Policy-url}}|las políticas]].',
'revdelete-suppress-text' => "La herramienta de supresión '''sólo''' debería usarse en los siguientes casos:
* Información potencialmente injuriosa o calumniante.
* Información personal inapropiada, tal como:
*: ''nombres, domicilios, números de teléfono, números de la seguridad social e información análoga.",
'revdelete-legend' => 'Establecer restricciones de revisión:',
'revdelete-hide-text' => 'Ocultar el texto de la revisión',
'revdelete-hide-image' => 'Ocultar el contenido del archivo',
'revdelete-hide-name' => 'Ocultar acción y objetivo',
'revdelete-hide-comment' => 'Ocultar el resumen de edición',
'revdelete-hide-user' => 'Ocultar el nombre/IP del editor',
'revdelete-hide-restricted' => 'Suprimir datos a los administradores así como al resto',
'revdelete-radio-same' => '(no cambiar)',
'revdelete-radio-set' => 'Sí',
'revdelete-radio-unset' => 'No',
'revdelete-suppress' => 'Suprimir datos a los administradores así como al resto',
'revdelete-unsuppress' => 'Eliminar restricciones de revisiones restauradas',
'revdelete-log' => 'Motivo:',
'revdelete-submit' => 'Aplicar a {{PLURAL:$1|la revisión seleccionada|las revisiones seleccionadas}}',
'revdelete-success' => "'''La visibilidad de revisiones ha sido cambiada correctamente.'''",
'revdelete-failure' => "'''La visibilidad de la revisión no pudo ser establecida:'''
$1",
'logdelete-success' => 'Visibilidad de eventos cambiada correctamente.',
'logdelete-failure' => "'''La visibilidad del registro no pudo ser ajustada:'''
$1",
'revdel-restore' => 'cambiar visibilidad',
'revdel-restore-deleted' => 'revisiones borradas',
'revdel-restore-visible' => 'revisiones visibles',
'pagehist' => 'Historial de la página',
'deletedhist' => 'Historial borrado',
'revdelete-hide-current' => 'Error al ocultar el objeto de fecha $1 a las $2: es la revisión actual.
No puede ser ocultada.',
'revdelete-show-no-access' => 'Error mostrando el objeto de fecha $2, $1: este objeto ha sido marcado como "restringido".
No tiene acceso a él.',
'revdelete-modify-no-access' => 'Error modificando el objeto de fecha $2, $1: este objeto ha sido marcado como "restringido".
No tiene acceso a él.',
'revdelete-modify-missing' => 'Error modificando el objeto ID $1: ¡no se encuentra en la base de datos!',
'revdelete-no-change' => "'''Atención:''' la revisión de fecha $1 a las $2 ya tiene las restricciones de visibilidad solicitadas.",
'revdelete-concurrent-change' => 'Error modificando el objeto de fecha $2, $1: su estado parece haber sido cambiado por alguien más cuando tratabas de modificarlo. Por favor verifica los registros.',
'revdelete-only-restricted' => 'Error ocultando el item de fecha $2, $1: no puedes suprimir elementos de vista de los administradores sin seleccionar asímismo una de las otras opciones de visibilidad.',
'revdelete-reason-dropdown' => '*Razones de borrado comunes
** Violación a los derechos de autor
** Comentario o información personal inapropiados
** Nombre de usuario inapropiado
** Información potencialmente injuriosa o calumniante',
'revdelete-otherreason' => 'Otra/adicional razón:',
'revdelete-reasonotherlist' => 'Otra razón',
'revdelete-edit-reasonlist' => 'Editar razones de borrado',
'revdelete-offender' => 'Autor de la revisión:',

# Suppression log
'suppressionlog' => 'Registro de supresiones',
'suppressionlogtext' => 'A continuación hay una lista con los borrados y bloqueos cuyo contenido se encuentra oculto para los administradores.
Véase la [[Special:BlockList|lista de bloqueos]] que incluye las prohibiciones y bloqueos actualmente operativos.',

# History merging
'mergehistory' => 'Fusionar historiales de páginas',
'mergehistory-header' => 'Esta página te permite fusionar revisiones del historial de una página origen en otra más reciente.
Asegúrate de que esto mantendrá la continuidad histórica de la página.',
'mergehistory-box' => 'Fusionar los historiales de dos páginas:',
'mergehistory-from' => 'Página origen:',
'mergehistory-into' => 'Página destino:',
'mergehistory-list' => 'Historial de ediciones fusionable',
'mergehistory-merge' => 'Las siguientes revisiones de [[:$1]] pueden fusionarse en [[:$2]].
Usa la columna de casillas para fusionar sólo las revisiones creadas en y antes de la fecha especificada.
Nota que usar los enlaces de navegación borrará las selecciones de esta columna.',
'mergehistory-go' => 'Mostrar ediciones fusionables',
'mergehistory-submit' => 'Fusionar revisiones',
'mergehistory-empty' => 'No hay revisiones fusionables.',
'mergehistory-success' => '$3 {{PLURAL:$3|revisión|revisiones}} de [[:$1]] fusionadas de forma exitosa en [[:$2]].',
'mergehistory-fail' => 'No se puede realizar la fusión de historiales, por favor revisa la página y los parámetros de tiempo.',
'mergehistory-no-source' => 'La página origen $1 no existe.',
'mergehistory-no-destination' => 'La página destino $1 no existe.',
'mergehistory-invalid-source' => 'La página origen debe tener un título válido.',
'mergehistory-invalid-destination' => 'La página de destino ha de tener un título válido.',
'mergehistory-autocomment' => 'Fusionando [[:$1]] en [[:$2]]',
'mergehistory-comment' => 'Fusionando [[:$1]] en [[:$2]]: $3',
'mergehistory-same-destination' => 'Las páginas de origen y destino no pueden ser la misma',
'mergehistory-reason' => 'Razón:',

# Merge log
'mergelog' => 'Registro de fusiones',
'pagemerge-logentry' => 'fusionó [[$1]] en [[$2]] (revisiones hasta $3)',
'revertmerge' => 'Deshacer fusión',
'mergelogpagetext' => 'Debajo está una lista de las fusiones más recientes de historial de una página en otra.',

# Diffs
'history-title' => 'Historial de revisiones para «$1»',
'difference-title' => 'Diferencia entre revisiones de «$1»',
'difference-title-multipage' => 'Diferencia entre las páginas «$1» y «$2»',
'difference-multipage' => '(Diferencia entre las páginas)',
'lineno' => 'Línea $1:',
'compareselectedversions' => 'Comparar versiones seleccionadas',
'showhideselectedversions' => 'Mostrar/ocultar versiones seleccionadas',
'editundo' => 'deshacer',
'diff-multi' => '(No se {{PLURAL:$1|muestra una edición intermedia realizada|muestran $1 ediciones intermedias realizadas}} por {{PLURAL:$2|un usuario|$2 usuarios}})',
'diff-multi-manyusers' => '(No se {{PLURAL:$1|muestra una edición intermedia|muestran $1 ediciones intermedias}} de {{PLURAL:$2|un usuario|$2 usuarios}})',
'difference-missing-revision' => 'No {{PLURAL:$2|se ha encontrado|se han encontrado}} {{PLURAL:$2|una revisión|$2 revisiones}} de esta diferencia ($1).

Esto suele deberse a seguir un enlace obsoleto hacia una página que ya ha sido borrada.
Los detalles pueden encontrarse en el [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} registro de borrado].',

# Search results
'searchresults' => 'Resultados de la búsqueda',
'searchresults-title' => 'Resultados de la búsqueda de «$1»',
'searchresulttext' => 'Para más información acerca de las búsquedas en {{SITENAME}}, consulta la [[{{MediaWiki:Helppage}}|{{int:help}}]].',
'searchsubtitle' => 'Has buscado \'\'\'[[:$1]]\'\'\' ([[Special:Prefixindex/$1|todas las páginas que empiezan por "$1"]] {{int:pipe-separator}} [[Special:WhatLinksHere/$1|todas las páginas que enlazan con «$1»]])',
'searchsubtitleinvalid' => "Has buscado '''$1'''",
'toomanymatches' => 'Se han obtenido muchos resultados; por favor intenta una consulta diferente',
'titlematches' => 'Coincidencias de título de artículo',
'notitlematches' => 'No hay coincidencias de título de artículo',
'textmatches' => 'Coincidencias de texto de artículo',
'notextmatches' => 'No hay coincidencias de texto de artículo',
'prevn' => '{{PLURAL:$1|$1}} previas',
'nextn' => '{{PLURAL:$1|$1}} siguientes',
'prevn-title' => '$1 {{PLURAL:$1|resultado|resultados}} previos',
'nextn-title' => 'Próximos $1 {{PLURAL:$1|resultado|resultados}}',
'shown-title' => 'Mostrar $1 {{PLURAL:$1|resultado|resultados}} por página',
'viewprevnext' => 'Ver ($1 {{int:pipe-separator}} $2) ($3).',
'searchmenu-legend' => 'Opciones de búsqueda',
'searchmenu-exists' => "'''Hay una página llamada \"[[:\$1]]\" en esta wiki.'''",
'searchmenu-new' => "'''¡Crea la página «[[:$1]]» en este wiki!'''",
'searchhelp-url' => 'Help:Ayuda',
'searchmenu-prefix' => '[[Special:PrefixIndex/$1|Otras páginas con este prefijo]]',
'searchprofile-articles' => 'Páginas de contenido',
'searchprofile-project' => 'Páginas de ayuda y de proyecto',
'searchprofile-images' => 'Multimedia',
'searchprofile-everything' => 'Todo',
'searchprofile-advanced' => 'Avanzado',
'searchprofile-articles-tooltip' => 'Buscar en $1',
'searchprofile-project-tooltip' => 'Buscar en $1',
'searchprofile-images-tooltip' => 'Buscar archivos',
'searchprofile-everything-tooltip' => 'Buscar en todo el contenido (incluyendo páginas de discusión)',
'searchprofile-advanced-tooltip' => 'Buscar en espacios de nombres personalizados',
'search-result-size' => '$1 ({{PLURAL:$2|1 palabra|$2 palabras}})',
'search-result-category-size' => '{{PLURAL:$1|1 miembro|$1 miembros}} ({{PLURAL:$2|1 subcategoría|$2 subcategorías}}, {{PLURAL:$3|1 fichero|$3 ficheros}})',
'search-result-score' => 'Relevancia: $1%',
'search-redirect' => '(redirige desde $1)',
'search-section' => '(sección $1)',
'search-suggest' => 'Quizás quieres buscar: $1',
'search-interwiki-caption' => 'Proyectos hermanos',
'search-interwiki-default' => 'Resultados de $1:',
'search-interwiki-more' => '(más)',
'search-relatedarticle' => 'Relacionado',
'mwsuggest-disable' => 'Desactivar AJAX al realizar búsquedas',
'searcheverything-enable' => 'Buscar en todos los espacios de nombres',
'searchrelated' => 'relacionado',
'searchall' => 'todos',
'showingresults' => "Abajo se {{PLURAL:$1|muestra '''1''' resultado|muestran hasta '''$1''' resultados}} comenzando por el n.º '''$2'''.",
'showingresultsnum' => "Abajo se {{PLURAL:$3|muestra '''1''' resultado|muestran los '''$3''' resultados}} comenzando por el n.º '''$2'''.",
'showingresultsheader' => "{{PLURAL:$5|Resultado '''$1''' de '''$3'''|Resultados '''$1-$2''' de '''$3'''}} para '''$4'''",
'nonefound' => "'''Nota''': De manera predeterminada solo se busca en algunos espacios de nombres.
Prueba a usar el prefijo ''all:'' para buscar en todo el contenido (incluyendo páginas de discusión, plantillas, etc.) o usa el espacio de nombres que quieras como prefijo.",
'search-nonefound' => 'No hay resultados que cumplan los criterios de búsqueda.',
'powersearch' => 'Búsqueda avanzada',
'powersearch-legend' => 'Búsqueda avanzada',
'powersearch-ns' => 'Buscar en los espacios de nombres:',
'powersearch-redir' => 'Listar redirecciones',
'powersearch-field' => 'Buscar',
'powersearch-togglelabel' => 'Seleccionar:',
'powersearch-toggleall' => 'Todos',
'powersearch-togglenone' => 'Ninguno',
'search-external' => 'Búsqueda externa',
'searchdisabled' => 'Las búsquedas en {{SITENAME}} están temporalmente desactivadas.
Mientras tanto puedes buscar mediante Google, pero ten en cuenta que sus índices relativos a {{SITENAME}} pueden estar desactualizados.',

# Quickbar
'qbsettings' => 'Quickbar',
'qbsettings-none' => 'Ninguna',
'qbsettings-fixedleft' => 'Fija a la izquierda',
'qbsettings-fixedright' => 'Fija a la derecha',
'qbsettings-floatingleft' => 'Flotante a la izquierda',
'qbsettings-floatingright' => 'Flotante a la derecha',
'qbsettings-directionality' => 'Fijos, dependiendo de la direccionalidad de la escritura de su idioma',

# Preferences page
'preferences' => 'Preferencias',
'mypreferences' => 'Preferencias',
'prefs-edits' => 'Cantidad de ediciones:',
'prefsnologin' => 'No has iniciado sesión',
'prefsnologintext' => 'Necesitas <span class="plainlinks">[{{fullurl:{{#Special:UserLogin}}|returnto=$1}} iniciar sesión]</span> para establecer las preferencias del usuario.',
'changepassword' => 'Cambiar contraseña',
'prefs-skin' => 'Skin',
'skin-preview' => 'Previsualizar',
'datedefault' => 'Sin preferencia',
'prefs-beta' => 'Características de prueba',
'prefs-datetime' => 'Fecha y hora',
'prefs-labs' => 'Características de los laboratorios',
'prefs-user-pages' => 'Páginas de usuario',
'prefs-personal' => 'Perfil de usuario',
'prefs-rc' => 'Cambios recientes',
'prefs-watchlist' => 'Seguimiento',
'prefs-watchlist-days' => 'Número de días a mostrar en la lista de seguimiento:',
'prefs-watchlist-days-max' => 'Máximo $1 {{PLURAL:$1|día|días}}',
'prefs-watchlist-edits' => 'Número de ediciones a mostrar en la lista expandida:',
'prefs-watchlist-edits-max' => 'Máximo: 1000',
'prefs-watchlist-token' => 'Ficha de lista de seguimiento:',
'prefs-misc' => 'Miscelánea',
'prefs-resetpass' => 'Cambiar contraseña',
'prefs-changeemail' => 'Cambiar correo-e',
'prefs-setemail' => 'Establecer una dirección de correo-e',
'prefs-email' => 'Opciones de correo electrónico',
'prefs-rendering' => 'Apariencia',
'saveprefs' => 'Guardar',
'resetprefs' => 'Limpiar cambios sin guardar',
'restoreprefs' => 'Restaurar la configuración predeterminada',
'prefs-editing' => 'Edición',
'prefs-edit-boxsize' => 'Tamaño de la ventana de edición.',
'rows' => 'Filas:',
'columns' => 'Columnas:',
'searchresultshead' => 'Búsquedas',
'resultsperpage' => 'Resultados por página:',
'stub-threshold' => 'Límite para formato de <a href="#" class="stub">enlace a esbozo</a> (bytes):',
'stub-threshold-disabled' => 'Desactivado',
'recentchangesdays' => 'Días a mostrar en cambios recientes:',
'recentchangesdays-max' => '(máximo {{PLURAL:$1|un día|$1 días}})',
'recentchangescount' => 'Número de ediciones a mostrar de manera predeterminada:',
'prefs-help-recentchangescount' => 'Esto incluye cambios recientes, historiales de página, y registros.',
'prefs-help-watchlist-token' => 'Rellenar este campo con una clave secreta generará un canal RSS para tu lista de seguimiento.
Cualquiera que conozca la clave en este campo será capaz de leer tu lista de seguimiento, así que escoge un valor seguro. Aquí hay un valor generado aleatoriamente que puedes usar: $1',
'savedprefs' => 'Tus preferencias han sido guardadas.',
'timezonelegend' => 'Zona horaria:',
'localtime' => 'Hora local:',
'timezoneuseserverdefault' => 'Usar la hora del servidor ($1)',
'timezoneuseoffset' => 'Otra (especifica la diferencia horaria)',
'timezoneoffset' => 'Diferencia¹:',
'servertime' => 'Hora del servidor:',
'guesstimezone' => 'Rellenar a partir de la hora del navegador',
'timezoneregion-africa' => 'África',
'timezoneregion-america' => 'América',
'timezoneregion-antarctica' => 'Antártica',
'timezoneregion-arctic' => 'Ártico',
'timezoneregion-asia' => 'Asia',
'timezoneregion-atlantic' => 'Océano Atlántico',
'timezoneregion-australia' => 'Australia',
'timezoneregion-europe' => 'Europa',
'timezoneregion-indian' => 'Océano Índico',
'timezoneregion-pacific' => 'Océano Pacífico',
'allowemail' => 'Aceptar correo electrónico de otros usuarios',
'prefs-searchoptions' => 'Buscar',
'prefs-namespaces' => 'Espacios de nombres',
'defaultns' => 'Buscar en estos espacios de nombres por defecto:',
'default' => 'por defecto',
'prefs-files' => 'Archivos',
'prefs-custom-css' => 'CSS personalizado',
'prefs-custom-js' => 'JavaScript personalizado',
'prefs-common-css-js' => 'CSS/JS compartido para todas las skins:',
'prefs-reset-intro' => 'Puedes usar esta página para restaurar tus preferencias a las predeterminadas del sitio.
Esto no se puede deshacer.',
'prefs-emailconfirm-label' => 'Confirmación de correo electrónico:',
'prefs-textboxsize' => 'Tamaño de la página de edición',
'youremail' => 'Correo electrónico:',
'username' => 'Nombre de usuario:',
'uid' => 'ID de usuario:',
'prefs-memberingroups' => 'Miembro {{PLURAL:$1|del grupo|de los grupos}}:',
'prefs-registration' => 'Hora de registro:',
'yourrealname' => 'Nombre real:',
'yourlanguage' => 'Idioma:',
'yourvariant' => 'Variante lingüística del contenido:',
'prefs-help-variant' => 'Tu variante u ortografía preferida para mostrar las páginas de contenido de este wiki.',
'yournick' => 'Nueva firma:',
'prefs-help-signature' => 'Los comentarios en páginas de discusión deberían firmarse con «<nowiki>~~~~</nowiki>», que se convertirá en tu firma con fecha y hora.',
'badsig' => 'El código de tu firma no es válido; comprueba las etiquetas HTML.',
'badsiglength' => 'La firma es muy larga. Debe contener un máximo de {{PLURAL:$1|un carácter|$1 caracteres}}.',
'yourgender' => 'Género:',
'gender-unknown' => 'Sin especificar',
'gender-male' => 'Masculino',
'gender-female' => 'Femenino',
'prefs-help-gender' => 'Opcional: empleado para que sea usado correctamente el género por parte del software. Esta información será pública.',
'email' => 'Correo electrónico',
'prefs-help-realname' => 'El nombre real es opcional. Si decides proporcionarlo, se usará para dar atribución a tu trabajo.',
'prefs-help-email' => 'La dirección de correo electrónico es opcional, pero es necesaria para el restablecimiento de tu contraseña, en caso de que la olvides.',
'prefs-help-email-others' => 'También puedes permitir que otros usuarios te contacten por correo a través de un enlace en tus páginas de usuario y de discusión.
Tu dirección de correo no se revela cuando otros usuarios te contactan.',
'prefs-help-email-required' => 'Es necesario proporcionar una dirección de correo electrónico.',
'prefs-info' => 'Información básica',
'prefs-i18n' => 'Internacionalización',
'prefs-signature' => 'Firma',
'prefs-dateformat' => 'Formato de fecha',
'prefs-timeoffset' => 'Diferencia horaria',
'prefs-advancedediting' => 'Opciones avanzadas',
'prefs-advancedrc' => 'Opciones avanzadas',
'prefs-advancedrendering' => 'Opciones avanzadas',
'prefs-advancedsearchoptions' => 'Opciones avanzadas',
'prefs-advancedwatchlist' => 'Opciones avanzadas',
'prefs-displayrc' => 'Opciones de mostrado',
'prefs-displaysearchoptions' => 'Opciones de visualización',
'prefs-displaywatchlist' => 'Opciones de visualización',
'prefs-diffs' => 'Diferencias',

# User preference: e-mail validation using jQuery
'email-address-validity-valid' => 'La dirección de correo electrónico parece ser válida',
'email-address-validity-invalid' => 'Introduce una dirección de correo válida',

# User rights
'userrights' => 'Configuración de permisos de usuarios',
'userrights-lookup-user' => 'Configurar grupos de usuarios',
'userrights-user-editname' => 'Escriba un nombre de usuario:',
'editusergroup' => 'Modificar grupos de usuarios',
'editinguser' => "Cambiando los derechos del usuario '''[[User:$1|$1]]''' $2",
'userrights-editusergroup' => 'Modificar grupos de usuarios',
'saveusergroups' => 'Guardar grupos de usuarios',
'userrights-groupsmember' => 'Miembro de:',
'userrights-groupsmember-auto' => 'Miembro implícito de:',
'userrights-groups-help' => 'Puedes modificar los grupos a los que pertenece {{GENDER:$1|este usuario|esta usuaria}}:
* Un recuadro marcado significa que {{GENDER:$1|el usuario|la usuaria}} está en ese grupo.
* Un recuadro no marcado significa que {{GENDER:$1|el usuario|la usuaria}} no está en ese grupo.
* Un * indica que no podrás eliminar el grupo una vez que lo agregues, o viceversa.',
'userrights-reason' => 'Motivo:',
'userrights-no-interwiki' => 'No tienes permiso para editar los grupos a los que pertenece un usuario en otros wikis.',
'userrights-nodatabase' => 'La base de datos $1 no existe o no es local.',
'userrights-nologin' => 'Debes [[Special:UserLogin|iniciar sesión]] con una cuenta de administrador para poder editar los grupos de los usuarios.',
'userrights-notallowed' => 'Tu cuenta no tiene permiso para añadir o retirar permisos de usuario.',
'userrights-changeable-col' => 'Grupos que puedes cambiar',
'userrights-unchangeable-col' => 'Grupos que no puedes cambiar',

# Groups
'group' => 'Grupo:',
'group-user' => 'Usuarios',
'group-autoconfirmed' => 'Usuarios autoconfirmados',
'group-bot' => 'Bots',
'group-sysop' => 'Administradores',
'group-bureaucrat' => 'Burócratas',
'group-suppress' => 'Supresores de ediciones',
'group-all' => '(todos)',

'group-user-member' => '{{GENDER:$1|usuario|usuaria}}',
'group-autoconfirmed-member' => '{{GENDER:$1|usuario autoconfirmado|usuaria autoconfirmada}}',
'group-bot-member' => 'bot',
'group-sysop-member' => '{{GENDER:$1|administrador|administradora}}',
'group-bureaucrat-member' => 'burócrata',
'group-suppress-member' => '{{GENDER:$1|supresor|supresora}} de ediciones',

'grouppage-user' => '{{ns:project}}:Usuarios',
'grouppage-autoconfirmed' => '{{ns:project}}:Usuarios autoconfirmados',
'grouppage-bot' => '{{ns:project}}:Bots',
'grouppage-sysop' => '{{ns:project}}:Administradores',
'grouppage-bureaucrat' => '{{ns:project}}:Burócratas',
'grouppage-suppress' => '{{ns:project}}:Supresores de ediciones',

# Rights
'right-read' => 'Leer páginas',
'right-edit' => 'Editar páginas',
'right-createpage' => 'Crear páginas que no sean páginas de discusión',
'right-createtalk' => 'Crear páginas de discusión',
'right-createaccount' => 'Crear cuentas de usuario nuevas',
'right-minoredit' => 'Marcar ediciones como «menores»',
'right-move' => 'Trasladar páginas',
'right-move-subpages' => 'Trasladar páginas con sus subpáginas',
'right-move-rootuserpages' => 'Mover páginas del usuario raíz',
'right-movefile' => 'Mover archivos',
'right-suppressredirect' => 'No crear redirecciones de las páginas fuente  al trasladar páginas',
'right-upload' => 'Subir archivos',
'right-reupload' => 'Subir una nueva versión de un archivo existente',
'right-reupload-own' => 'Subir una nueva versión de un archivo creado por uno mismo',
'right-reupload-shared' => 'Sobreescribir localmente ficheros del repositorio multimedia',
'right-upload_by_url' => 'Subir un archivo a traves de un URL',
'right-purge' => 'Purgar la caché en el servidor sin tener que dar confirmación',
'right-autoconfirmed' => 'Editar páginas semiprotegidas',
'right-bot' => 'Ser tratado como un programa automático',
'right-nominornewtalk' => 'No accionar el aviso de nuevos mensajes al realizar ediciones menores de páginas de discusión',
'right-apihighlimits' => 'Tener límites más altos de peticiones a través del API',
'right-writeapi' => 'Hacer uso del API para escribir',
'right-delete' => 'Borrar páginas',
'right-bigdelete' => 'Borrar páginas con historiales grandes',
'right-deletelogentry' => 'Borrar y recuperar entradas de registro específicas',
'right-deleterevision' => 'Borrar y restaurar revisiones específicas de páginas',
'right-deletedhistory' => 'Ver el historial de páginas borradas, sin el texto asociado',
'right-deletedtext' => 'Ver texto borrado y cambios entre revisiones borradas',
'right-browsearchive' => 'Buscar páginas borradas',
'right-undelete' => 'Restaurar una página',
'right-suppressrevision' => 'Revisar y restaurar revisiones escondidas por administradores',
'right-suppressionlog' => 'Ver registros privados',
'right-block' => 'Bloquear a otros usuarios para que no editen',
'right-blockemail' => 'Bloquear a un usuario para que no pueda mandar correos electrónicos',
'right-hideuser' => 'Bloquear un nombre de usuario, haciéndolo invisible',
'right-ipblock-exempt' => 'Pasar por encima de bloqueos de IPs, auto-bloqueos y bloqueos de rangos.',
'right-proxyunbannable' => 'Pasar por encima de bloqueos automáticos de proxies',
'right-unblockself' => 'Desbloquearse',
'right-protect' => 'Cambiar niveles de protección y editar páginas protegidas',
'right-editprotected' => 'Editar páginas protegidas (sin la protección «en cascada»)',
'right-editinterface' => 'Editar la interfaz de usuario',
'right-editusercssjs' => 'Editar las páginas de CSS y JS de otros usuarios',
'right-editusercss' => 'Editar las páginas de CSS de otros usuarios',
'right-edituserjs' => 'Editar las páginas de JS de otros usuarios',
'right-rollback' => 'Revertir rápidamente las ediciones del último usuario que modificó una página en particular',
'right-markbotedits' => 'Marcar ediciones deshechas como ediciones de un bot',
'right-noratelimit' => 'No afectado por límites de frecuencia',
'right-import' => 'Importar páginas desde otras wikis',
'right-importupload' => 'Importar páginas de un archivo subido',
'right-patrol' => 'Marcar ediciones de otros como patrulladas',
'right-autopatrol' => 'Marcar como patrulladas sus ediciones automáticamente',
'right-patrolmarks' => 'Ver las marcas de patrullaje de cambios recientes',
'right-unwatchedpages' => 'Ver una lista de páginas no vigiladas',
'right-mergehistory' => 'Fusionar historiales',
'right-userrights' => 'Modificar todos los derechos de usuario',
'right-userrights-interwiki' => 'Modificar los derechos de usuarios en otros wikis',
'right-siteadmin' => 'Bloquear y desbloquear la base de datos',
'right-override-export-depth' => 'Exporta páginas incluyendo aquellas enlazadas hasta una profundidad de 5',
'right-sendemail' => 'Enviar un correo electrónico a otros usuarios',
'right-passwordreset' => 'Ver os correos electrónicos de restablecimiento de contraseñas',

# User rights log
'rightslog' => 'Cambios de perfil de usuario',
'rightslogtext' => 'Este es un registro de cambios en los permisos de usuarios.',
'rightslogentry' => 'modificó los grupos a los que pertenece $1: de $2 a $3',
'rightslogentry-autopromote' => 'fue promovido automáticamente desde $2 a $3',
'logentry-rights-rights' => '$1 modificó la pertenencia a grupos para $3, de $4 a $5',
'logentry-rights-rights-legacy' => '$1 ha cambiado la pertenencia a grupos de $3',
'logentry-rights-autopromote' => '$1 fue promocionado automáticamente de $4 a $5',
'rightsnone' => '(ninguno)',

# Associated actions - in the sentence "You do not have permission to X"
'action-read' => 'leer esta página',
'action-edit' => 'modificar esta página',
'action-createpage' => 'crear páginas',
'action-createtalk' => 'crear páginas de discusión',
'action-createaccount' => 'crear esta cuenta de usuario',
'action-minoredit' => 'marcar este cambio como menor',
'action-move' => 'mover esta página',
'action-move-subpages' => 'mover esta página y sus subpáginas',
'action-move-rootuserpages' => 'mover páginas del usuario raíz',
'action-movefile' => 'mover este archivo',
'action-upload' => 'subir este archivo',
'action-reupload' => 'reemplazar este archivo existente',
'action-reupload-shared' => 'reemplazar este archivo existente en un depósito compartido',
'action-upload_by_url' => 'subir este archivo desde una dirección URL',
'action-writeapi' => 'utilizar el API de escritura',
'action-delete' => 'borrar esta página',
'action-deleterevision' => 'borrar esta revisión',
'action-deletedhistory' => 'ver el historial borrado de esta página',
'action-browsearchive' => 'buscar páginas borradas',
'action-undelete' => 'recuperar esta página',
'action-suppressrevision' => 'revisar y restaurar esta revisión escondida',
'action-suppressionlog' => 'ver este registro privado',
'action-block' => 'bloquear a este usuario para que no edite',
'action-protect' => 'cambiar los niveles de protección para esta página',
'action-rollback' => 'revertir rápidamente las ediciones del último usuario que modificó una página en particular',
'action-import' => 'importar esta página desde otro wiki',
'action-importupload' => 'importar esta página mediante la carga de un archivo',
'action-patrol' => 'marcar ediciones de otros como patrulladas',
'action-autopatrol' => 'marcar como patrulladas tus propias ediciones',
'action-unwatchedpages' => 'ver la lista de páginas no vigiladas',
'action-mergehistory' => 'fusionar el historial de esta página',
'action-userrights' => 'modificar todos los derechos de usuario',
'action-userrights-interwiki' => 'modificar los derechos de usuarios en otros wikis',
'action-siteadmin' => 'bloquear o desbloquear la base de datos',
'action-sendemail' => 'enviar correos electrónicos',

# Recent changes
'nchanges' => '$1 {{PLURAL:$1|cambio|cambios}}',
'recentchanges' => 'Cambios recientes',
'recentchanges-legend' => 'Opciones sobre cambios recientes',
'recentchanges-summary' => 'Sigue los cambios más recientes de la wiki en esta página.',
'recentchanges-feed-description' => 'Realiza un seguimiento de los cambios más recientes en el wiki en este canal.',
'recentchanges-label-newpage' => 'Esta edición creó una nueva página',
'recentchanges-label-minor' => 'Esta es una edición menor',
'recentchanges-label-bot' => 'Esta edición fue realizada por un robot',
'recentchanges-label-unpatrolled' => 'Esta edición todavía no se ha patrullado',
'rcnote' => "Debajo {{PLURAL:$1|hay '''1''' cambio efectuado|están los últimos '''$1''' cambios efectuados}} en  {{PLURAL:$2|el último día|los últimos '''$2''' días}}, hasta el $4, $5.",
'rcnotefrom' => 'A continuación se muestran los cambios desde <b>$2</b> (hasta <b>$1</b>).',
'rclistfrom' => 'Mostrar nuevos cambios desde $1',
'rcshowhideminor' => '$1 ediciones menores',
'rcshowhidebots' => '$1 bots',
'rcshowhideliu' => '$1 usuarios registrados',
'rcshowhideanons' => '$1 usuarios anónimos',
'rcshowhidepatr' => '$1 ediciones patrulladas',
'rcshowhidemine' => '$1 mis ediciones',
'rclinks' => 'Ver los últimos $1 cambios en los últimos $2 días.<br />$3',
'diff' => 'dif',
'hist' => 'hist',
'hide' => 'Ocultar',
'show' => 'mostrar',
'minoreditletter' => 'm',
'newpageletter' => 'N',
'boteditletter' => 'b',
'number_of_watching_users_pageview' => '[$1 {{PLURAL:$1|usuario|usuarios}} vigilando]',
'rc_categories' => 'Limitar a las categorías (separadas por «|»)',
'rc_categories_any' => 'Cualquiera',
'rc-change-size-new' => '$1 {{PLURAL:$1|byte|bytes}} después del cambio',
'newsectionsummary' => 'Nueva sección: /* $1 */',
'rc-enhanced-expand' => 'Mostrar detalles (requiere JavaScript)',
'rc-enhanced-hide' => 'Ocultar detalles',
'rc-old-title' => 'originalmente creado como "$1"',

# Recent changes linked
'recentchangeslinked' => 'Cambios relacionados',
'recentchangeslinked-feed' => 'Cambios relacionados',
'recentchangeslinked-toolbox' => 'Cambios relacionados',
'recentchangeslinked-title' => 'Cambios relacionados con «$1»',
'recentchangeslinked-noresult' => 'No hubo cambios en las páginas enlazadas durante el periodo indicado.',
'recentchangeslinked-summary' => "Esta página es una lista de los últimos cambios en las páginas enlazadas desde una página (o en las pertenecientes a una categoría). Las páginas que están en tu [[Special:Watchlist|lista de seguimiento]] aparecen en '''negrita'''.",
'recentchangeslinked-page' => 'Nombre de la página:',
'recentchangeslinked-to' => 'Muestra los cambios recientes en lugar de la página indicada',

# Upload
'upload' => 'Subir un archivo',
'uploadbtn' => 'Subir un archivo',
'reuploaddesc' => 'Regresar al formulario para subir.',
'upload-tryagain' => 'Envíe la descripción del archivo modificado',
'uploadnologin' => 'No has iniciado sesión',
'uploadnologintext' => 'Tienes que [[Special:UserLogin|iniciar sesión]] para poder subir archivos.',
'upload_directory_missing' => 'El directorio de subida de archivos ($1) no existe, y no puede ser creado por el servidor.',
'upload_directory_read_only' => 'El servidor web no puede escribir en el directorio de subida de archivos ($1).',
'uploaderror' => 'Error al intentar subir archivo',
'upload-recreate-warning' => "'''Aviso: Un archivo con ese nombre ha sido eliminado o renombrado.'''

A continuación se muestra el registro de borrados y traslados de esta página:",
'uploadtext' => "Utiliza el siguiente formulario para subir archivos.
Para ver o buscar archivos subidos con anterioridad, ve a la [[Special:FileList|lista de archivos subidos]].
Los archivos subidos quedarán registrados además en el [[Special:Log/upload|registro de archivos subidos]] y los borrados en el [[Special:Log/delete|registro de borrados]].

Para incluir un archivo en una página, usa un enlace como los mostrados a continuación:
* '''<code><nowiki>[[</nowiki>{{ns:file}}<nowiki>:File.jpg]]</nowiki></code>''' para usar el fichero en tamaño completo
* '''<code><nowiki>[[</nowiki>{{ns:file}}<nowiki>:File.png|200px|thumb|left|texto descriptivo]]</nowiki></code>''' para una versión de 200 píxeles de ancho en una caja en el margen izquierdo con 'texto descriptivo' como descripción
* '''<code><nowiki>[[</nowiki>{{ns:media}}<nowiki>:File.ogg]]</nowiki></code>''' para enlazar directamente al fichero sin mostrarlo.",
'upload-permitted' => 'Tipos de archivo permitidos: $1.',
'upload-preferred' => 'Tipos de archivo preferidos: $1.',
'upload-prohibited' => 'Tipos de archivo prohibidos: $1.',
'uploadlog' => 'registro de subidas',
'uploadlogpage' => 'Subidas de archivos',
'uploadlogpagetext' => 'Abajo hay una lista de los últimos archivos subidos.
Mira la [[Special:NewFiles|galería de archivos nuevos]] para una descripción visual',
'filename' => 'Nombre del archivo',
'filedesc' => 'Sumario',
'fileuploadsummary' => 'Descripción:',
'filereuploadsummary' => 'Cambios de archivo:',
'filestatus' => 'Estado de copyright:',
'filesource' => 'Fuente:',
'uploadedfiles' => 'Archivos subidos',
'ignorewarning' => 'Ignorar aviso y guardar de todos modos',
'ignorewarnings' => 'Ignorar cualquier aviso',
'minlength1' => 'Los nombres de archivo deben tener al menos una letra.',
'illegalfilename' => 'El nombre de archivo «$1» contiene caracteres que no están permitidos en títulos de páginas. Por favor, renombra el archivo e intenta volver a subirlo.',
'filename-toolong' => 'Los nombres de archivo no pueden tener más de 240 bytes.',
'badfilename' => 'El nombre de la imagen se ha cambiado a «$1».',
'filetype-mime-mismatch' => 'La extensión de archivo «.$1» no coincide con el tipo detectado de MIME del archivo ($2).',
'filetype-badmime' => 'No se permite subir archivos de tipo MIME «$1».',
'filetype-bad-ie-mime' => 'No se puede subir este archivo porque Internet Explorer podría considerarlo como «$1», que es un tipo de archivo no permitido y potencialmente peligroso.',
'filetype-unwanted-type' => "'''«.$1»''' no está entre los tipos de fichero aconsejados.
{{PLURAL:$3|El único tipo aconsejado es|Los tipos aconsejados son}} $2.",
'filetype-banned-type' => '\'\'\'".$1"\'\'\' {{PLURAL:$4|no es un tipo de archivo permitido|no son tipos de archivos permitidos}}.
{{PLURAL:$3|El tipo de archivo permitido es|Los tipos de archivos permitidos son}} $2.',
'filetype-missing' => 'El archivo no tiene extensión (como «.jpg»).',
'empty-file' => 'El archivo que enviaste estaba vacío.',
'file-too-large' => 'El archivo que enviste era demasiado grande.',
'filename-tooshort' => 'El nombre de archivo es demasiado corto.',
'filetype-banned' => 'El tipo de archivo está prohibido.',
'verification-error' => 'Este archivo no pasó la verificación de archivos.',
'hookaborted' => 'La modificación que ha intentado realizar fue cancelada por un adicional de extensión.',
'illegal-filename' => 'El nombre de archivo no está permitido.',
'overwrite' => 'Sobrescribir un archivo existente no está permitido.',
'unknown-error' => 'Ocurrió un error desconocido.',
'tmp-create-error' => 'No se pudo crear archivo temporal.',
'tmp-write-error' => 'Error al escribir archivo temporal.',
'large-file' => 'Se recomienda que los archivos no sean mayores de $1; este archivo ocupa $2.',
'largefileserver' => 'El tamaño de este archivo es mayor del que este servidor admite por configuración.',
'emptyfile' => 'El archivo que has intentado subir parece estar vacío; por favor, verifica que realmente se trate del archivo que intentabas subir.',
'windows-nonascii-filename' => 'Este wiki no admite nombres de archivo con caracteres especiales.',
'fileexists' => 'Ya existe un archivo con este nombre, por favor comprueba <strong>[[:$1]]</strong> si no estás seguro de querer cambiarlo.
[[$1|thumb]]',
'filepageexists' => 'La página de descripción de este archivo ya ha sido creada en <strong>[[:$1]]</strong>, pero no existe actualmente ningún fichero con este nombre.
El resumen que ha ingresado no aparecerá en la página de descripción. Para que el sumario aparezca, deberá editarlo manualmente.
[[$1|thumb]]',
'fileexists-extension' => 'Existe un archivo con un nombre similar: [[$2|thumb]]
* Nombre del archivo que se está subiendo: <strong>[[:$1]]</strong>
* Nombre del archivo ya existente: <strong>[[:$2]]</strong>
Por favor, elige un nombre diferente.',
'fileexists-thumbnail-yes' => "El archivo parece ser una imagen de tamaño reducido ''(thumbnail)''. [[$1|thumb]]
Por favor comprueba el archivo <strong>[[:$1]]</strong>.
Si el archivo comprobado es la misma imagen a tamaño original no es necesario subir un thumbnail más.",
'file-thumbnail-no' => "El nombre del archivo comienza con <strong>$1</strong>.
Parece ser una imagen de tamaño reducido ''(thumbnail)''.
Si tiene esta imagen a toda resolución súbala, si no, por favor cambie el nombre del archivo.",
'fileexists-forbidden' => 'Ya existe un archivo con este nombre, y no puede ser grabado encima de otro. Si quiere subir su archivo de todos modos, por favor vuelva atrás y utilice otro nombre. [[File:$1|thumb|center|$1]]',
'fileexists-shared-forbidden' => 'Ya existe un archivo con este nombre en el repositorio compartido.
Si todavía quiere subir su archivo, por favor, regrese a la página anterior y use otro nombre. [[File:$1|thumb|center|$1]]',
'file-exists-duplicate' => 'Este archivo es un duplicado {{PLURAL:$1|del siguiente|de los siguientes}}:',
'file-deleted-duplicate' => 'Un archivo idéntico a este ([[:$1]]) ha sido borrado con anterioridad. Debes comprobar el historial de borrado del archivo ante de volver a subirlo.',
'uploadwarning' => 'Advertencia de subida de archivo',
'uploadwarning-text' => 'Por favor, modifique la descripción del archivo abajo indicada e inténtelo de nuevo.',
'savefile' => 'Guardar archivo',
'uploadedimage' => 'subió «[[$1]]»',
'overwroteimage' => 'subió una nueva versión de «[[$1]]»',
'uploaddisabled' => 'Subida de archivos deshabilitada',
'copyuploaddisabled' => 'Carga por URL deshabilitada.',
'uploadfromurl-queued' => 'Tu carga ha sido enviada a la cola.',
'uploaddisabledtext' => 'No es posible subir archivos.',
'php-uploaddisabledtext' => 'La subida de archivos está deshabilitada en PHP. Por favor compruebe <code>file_uploads</code> en php.ini.',
'uploadscripted' => 'Este archivo contiene script o código HTML que puede ser interpretado erróneamente por un navegador web.',
'uploadvirus' => '¡El archivo contiene un virus!
Detalles: $1',
'uploadjava' => 'El archivo es un ZIP que contiene un archivo .class de Java.
No se permite subir archivos Java, porque pueden causar que se puedan saltar restricciones de seguridad.',
'upload-source' => 'Archivo origen',
'sourcefilename' => 'Nombre del archivo origen:',
'sourceurl' => 'Dirección original:',
'destfilename' => 'Nombre del archivo de destino:',
'upload-maxfilesize' => 'Tamaño máximo del archivo: $1',
'upload-description' => 'Descripción de archivo',
'upload-options' => 'Opciones de carga',
'watchthisupload' => 'Vigilar este archivo',
'filewasdeleted' => 'Un archivo con este nombre se subió con anterioridad y posteriormente ha sido borrado. Deberías revisar el $1 antes de subirlo de nuevo.',
'filename-bad-prefix' => "El nombre del archivo que estás subiendo comienza por '''«$1»''', un nombre nada descriptivo de su contenido. Es un típico nombre de los que asignan automáticamente las cámaras digitales.

Por favor, elige un nombre más descriptivo.",
'filename-prefix-blacklist' => ' #<!-- deja esta línea exactamente como está --> <pre>
# La sintaxis de esta página es la siguiente:
#   * Todo texto que se encuentre después del carácter "#" hasta el final de la línea se tratará como un comentario y será ignorado
#   * Cualquier línea que no esté en blanco será interpretada como un prefijo típico en nombres de archivo que suelen asignar automáticamente las cámaras digitales
CIMG # Casio
DSC_ # Nikon
DSCF # Fuji
DSCN # Nikon
DUW # algunos teléfonos móviles / celulares
IMG # genérico
JD # Jenoptik
MGP # Pentax
PICT # misc.
 #</pre> <!-- deja esta línea exactamente como está -->',
'upload-success-subj' => 'Subida con éxito',
'upload-success-msg' => 'Tu carga de [$2] fue exitosa. Está disponible aquí: [[:{{ns:file}}:$1]]',
'upload-failure-subj' => 'Problema en la carga',
'upload-failure-msg' => 'Hubo un problema durante la carga desde [$2]:

$1',
'upload-warning-subj' => 'Alerta de carga',
'upload-warning-msg' => 'Hubo un problema con tu carga de [$2]. Puedes regresar al [[Special:Upload/stash/$1|formulario de carga]] para corregir este problema.',

'upload-proto-error' => 'Protocolo incorrecto',
'upload-proto-error-text' => 'Para subir archivos desde otra página la URL debe comenzar por <code>http://</code> o <code>ftp://</code>.',
'upload-file-error' => 'Error interno al subir el archivo',
'upload-file-error-text' => 'Ha ocurrido un error interno mientras se intentaba crear un fichero temporal en el servidor. Por favor, contacta con un [[Special:ListUsers/sysop|administrador del sistema]].',
'upload-misc-error' => 'Error desconocido en la subida',
'upload-misc-error-text' => 'Ha ocurrido un error durante la subida. Por favor verifica que la URL es válida y accesible e inténtalo de nuevo. Si el problema persiste, contacta con un [[Special:ListUsers/sysop|administrador del sistema]].',
'upload-too-many-redirects' => 'La URL contenía demasiadas redirecciones',
'upload-unknown-size' => 'Tamaño desconocido',
'upload-http-error' => 'Ha ocurrido un error HTTP: $1',
'upload-copy-upload-invalid-domain' => 'No se pueden realizar cargas remotas desde este dominio.',

# File backend
'backend-fail-stream' => 'No se pudo transmitir el archivo «$1».',
'backend-fail-backup' => 'No pudo hacer copia de seguridad del archivo «$1».',
'backend-fail-notexists' => 'El archivo  $1  no existe.',
'backend-fail-hashes' => 'No se pudieron obtener los hashes de los ficheros para compararlos.',
'backend-fail-notsame' => 'Ya existe un fichero distinto en $1.',
'backend-fail-invalidpath' => '$1 no es una ruta de almacenamiento válida',
'backend-fail-delete' => 'No se pudo borrar el archivo «$1».',
'backend-fail-alreadyexists' => 'El archivo  $1  ya existe.',
'backend-fail-store' => 'No se pudo almacenar el archivo $1 en $2.',
'backend-fail-copy' => 'No se pudo copiar el archivo $1 a $2.',
'backend-fail-move' => 'No se pudo mover el archivo $1 a $2.',
'backend-fail-opentemp' => 'No se pudo crear archivo temporal.',
'backend-fail-writetemp' => 'No se pudo escribir en el archivo temporal.',
'backend-fail-closetemp' => 'No se pudo cerrar el archivo temporal.',
'backend-fail-read' => 'No se pudo leer el archivo «$1».',
'backend-fail-create' => 'No se pudo escribir el archivo $1.',
'backend-fail-maxsize' => 'No se pudo escribir el archivo $1 porque es mayor de {{PLURAL:$2|un byte|$2 bytes}}.',
'backend-fail-readonly' => 'El servidor (back-end) de almacenamiento "$1" está actualmente en estado de sólo lectura. La razón aducida fue: "$2"',
'backend-fail-synced' => 'El archivo "$1" se encuentra en un estado incoherente dentro de los servidores (backends) de almacenamiento interno',
'backend-fail-connect' => 'No se pudo conectar al servidor (backend) de almacenamiento "$1".',
'backend-fail-internal' => 'Se ha producido un error desconocido en el servidor (backend) de almacenamiento "$1".',
'backend-fail-contenttype' => 'No se pudo determinar el tipo de contenido del archivo a guardar en " $1 ".',
'backend-fail-batchsize' => 'El servidor (back-end) de almacenamiento ha suministrado un lote de $1 {{PLURAL:$1|operación|operaciones}} de archivo; el límite es de $2 {{PLURAL:$2|operación|operaciones}}.',
'backend-fail-usable' => 'No se pudo leer o escribir el archivo "$1" debido a permisos insuficientes o directorios/contenedores desaparecidos.',

# File journal errors
'filejournal-fail-dbconnect' => 'No se pudo conectar a la base de datos del registro del sistema de almacenamiento "$1".',
'filejournal-fail-dbquery' => 'No se pudo actualizar la base de datos del registro del sistema de almacenamiento "$1".',

# Lock manager
'lockmanager-notlocked' => 'No se pudo desbloquear "$1": no se encontraba bloqueado.',
'lockmanager-fail-closelock' => 'No se pudo cerrar la referencia para el archivo de bloqueo de "$1".',
'lockmanager-fail-deletelock' => 'No se pudo eliminar el archivo de bloqueo para "$1".',
'lockmanager-fail-acquirelock' => 'No pudo adquirir el bloqueo para "$1".',
'lockmanager-fail-openlock' => 'No se pudo abrir el archivo de bloqueo para "$1".',
'lockmanager-fail-releaselock' => 'No se pudo liberar el bloqueo de "$1".',
'lockmanager-fail-db-bucket' => 'No se pudo contactar con las suficientes bases de datos del conjunto $1.',
'lockmanager-fail-db-release' => 'No se pudieron liberar los bloqueos registrados en la base de datos $1.',
'lockmanager-fail-svr-acquire' => 'No se pudieron obtener bloqueos en el servidor $1.',
'lockmanager-fail-svr-release' => 'No se pudieron liberar los bloqueos registrados en el servidor $1.',

# ZipDirectoryReader
'zip-file-open-error' => 'Se encontró un error al abrir el archivo ZIP para su comprobación.',
'zip-wrong-format' => 'El archivo especificado no es un archivo ZIP.',
'zip-bad' => 'El archivo es un ZIP dañado o que no se puede leer.
No se puede comprobar su seguridad.',
'zip-unsupported' => 'El archivo es un archivo que utiliza características ZIP no compatibles con MediaWiki.
No puede comprobarse adecuadamente su seguridad.',

# Special:UploadStash
'uploadstash' => 'Ficheros escondidos',
'uploadstash-summary' => 'Esta página da acceso a los ficheros enviados (o que están en el proceso de envío) pero que aún no han sido publicados en la wiki. Estos ficheros no son visibles para nadie, excepto para el usuario que los envió.',
'uploadstash-clear' => 'Borrar los ficheros escondidos',
'uploadstash-nofiles' => 'No tienes archivos escondidos.',
'uploadstash-badtoken' => 'No fue posible ejecutar esa operación, tal vez porque sus credenciales de edición expiraron. Reinténtelo.',
'uploadstash-errclear' => 'El borrado de los archivos no tuvo éxito.',
'uploadstash-refresh' => 'Actualizar la lista de archivos',
'invalid-chunk-offset' => 'Desplazamiento inválido del fragmento',

# img_auth script messages
'img-auth-accessdenied' => 'Acceso denegado',
'img-auth-nopathinfo' => 'Falta PATH_INFO.
El servidor no está configurado para proporcionar esta información.
Es posible que esté basado en CGI y que no sea compatible con img_auth.
Consulte https://www.mediawiki.org/wiki/Manual:Image_Authorization.',
'img-auth-notindir' => 'Ruta solicitad no esá en el directorio de cargas configurado',
'img-auth-badtitle' => 'Incapaz de construir un título válido de «$1».',
'img-auth-nologinnWL' => 'No has iniciado sesión y «$1» no está en la lista blanca.',
'img-auth-nofile' => 'El archivo «$1» no existe.',
'img-auth-isdir' => 'Estás tratando de acceder a un directorio «$1».
Solo se permite el acceso a los archivos.',
'img-auth-streaming' => 'Streaming «$1».',
'img-auth-public' => 'La función de img_auth.php es mostrar archivos desde una wiki privada.
Esta wiki está configurada como pública.
Para óptima seguridad, img_auth.php está desactivado.',
'img-auth-noread' => 'El usuario no tiene acceso para leer «$1».',
'img-auth-bad-query-string' => 'La dirección URL tiene una cadena de consulta no válida.',

# HTTP errors
'http-invalid-url' => 'URL inválida: $1',
'http-invalid-scheme' => 'Las URLs con el esquema «$1» no son compatibles.',
'http-request-error' => 'La solicitud HTTP falló debido a un error desconocido.',
'http-read-error' => 'Error de lectura HTTP.',
'http-timed-out' => 'La solicitud HTTP ha expirado.',
'http-curl-error' => 'Error al recuperar el URL: $1',
'http-host-unreachable' => 'No fue posible acceder a la URL.',
'http-bad-status' => 'Ha habido un problema durante la solicitud HTTP: $1 $2',

# Some likely curl errors. More could be added from <http://curl.haxx.se/libcurl/c/libcurl-errors.html>
'upload-curl-error6' => 'No se pudo alcanzar la URL',
'upload-curl-error6-text' => 'La URL no pudo ser alcanzada. Por favor comprueba que la URL es correcta y el sitio web está funcionando.',
'upload-curl-error28' => 'Tiempo de espera excedido',
'upload-curl-error28-text' => 'La página tardó demasiado en responder. Por favor, comprueba que el servidor está funcionando, espera un poco y vuelva a intentarlo. Quizás desees intentarlo en otro momento de menos carga.',

'license' => 'Licencia:',
'license-header' => 'Licencia',
'nolicense' => 'Ninguna seleccionada',
'license-nopreview' => '(Previsualización no disponible)',
'upload_source_url' => ' (una URL válida y accesible públicamente)',
'upload_source_file' => ' (un archivo en tu disco)',

# Special:ListFiles
'listfiles-summary' => 'Esta página especial muestra todos los archivos subidos.
Cuando es filtrado por el usuario, sólo los archivos cargados por el usuario se muestran en su versión más reciente.',
'listfiles_search_for' => 'Buscar por nombre de imagen:',
'imgfile' => 'archivo',
'listfiles' => 'Lista de archivos',
'listfiles_thumb' => 'Miniatura',
'listfiles_date' => 'Fecha',
'listfiles_name' => 'Nombre',
'listfiles_user' => 'Usuario',
'listfiles_size' => 'Tamaño (bytes)',
'listfiles_description' => 'Descripción',
'listfiles_count' => 'Versiones',

# File description page
'file-anchor-link' => 'Archivo',
'filehist' => 'Historial del archivo',
'filehist-help' => 'Haz clic sobre una fecha/hora para ver el
archivo a esa fecha.',
'filehist-deleteall' => 'borrar todo',
'filehist-deleteone' => 'borrar',
'filehist-revert' => 'revertir',
'filehist-current' => 'act',
'filehist-datetime' => 'Fecha y hora',
'filehist-thumb' => 'Miniatura',
'filehist-thumbtext' => 'Miniatura de la versión de $1',
'filehist-nothumb' => 'Sin miniatura',
'filehist-user' => 'Usuario',
'filehist-dimensions' => 'Dimensiones',
'filehist-filesize' => 'Tamaño',
'filehist-comment' => 'Comentario',
'filehist-missing' => 'No se encuentra el archivo',
'imagelinks' => 'Usos del archivo',
'linkstoimage' => '{{PLURAL:$1|La siguiente página enlaza|Las siguientes páginas enlazan}} a este archivo:',
'linkstoimage-more' => 'Hay más de {{PLURAL:$1|una página que enlaza|$1 páginas que enlazan}} con este archivo.

La lista siguiente sólo muestra {{PLURAL:$1|la primera página que enlaza|las primeras $1 páginas que enlazan}} con este archivo.
También puedes consultar la [[Special:WhatLinksHere/$2|lista completa]].',
'nolinkstoimage' => 'No hay páginas que enlacen a esta imagen.',
'morelinkstoimage' => 'Vea [[Special:WhatLinksHere/$1|más enlaces]] a este archivo.',
'linkstoimage-redirect' => '$1 (archivo de redirección) $2',
'duplicatesoffile' => '{{PLURAL:$1|El siguiente archivo es un duplicado|Los siguientes $1 archivos son duplicados}} de éste ([[Special:FileDuplicateSearch/$2|más detalles]]):',
'sharedupload' => 'Este archivo es de $1 y puede ser usado por otros proyectos.',
'sharedupload-desc-there' => 'Este archivo es de $1 y puede ser usado por otros proyectos.
Por favor mira la [$2 página de descripción del archivo] para información adicional.',
'sharedupload-desc-here' => 'Este archivo es de $1 y puede ser usado por otros proyectos.
La descripción en su [$2 página de descripción del archivo] está mostrada debajo.',
'sharedupload-desc-edit' => 'Este archivo es de $1 y puede ser utilizado por otros proyectos.
Tal vez desee editar la descripción de su [$2  página de descripción del archivo] allí.',
'sharedupload-desc-create' => 'Este archivo es de $1 y puede ser utilizado por otros proyectos.
Tal vez desee editar la descripción de su [$2 página de descripción del archivo] allí.',
'filepage-nofile' => 'No existe ningún archivo con este nombre.',
'filepage-nofile-link' => 'No existe ningún archivo con este nombre, pero puedes [$1 subirlo].',
'uploadnewversion-linktext' => 'Subir una nueva versión de este archivo',
'shared-repo-from' => 'de $1',
'shared-repo' => 'un repositorio compartido',
'filepage.css' => '/* Los estilos CSS colocados aquí se incluirán en las páginas de descripción de archivos, incluso en los wikis externos que incluyan estas páginas */',
'upload-disallowed-here' => 'No puedes sobrescribir este archivo.',

# File reversion
'filerevert' => 'Revertir $1',
'filerevert-legend' => 'Reversión de archivos',
'filerevert-intro' => "Estás revirtiendo '''[[Media:$1|$1]]''' a la [$4 versión del $2 a las $3].",
'filerevert-comment' => 'Motivo:',
'filerevert-defaultcomment' => 'Revertido a la versión subida el $1 a las $2',
'filerevert-submit' => 'Revertir',
'filerevert-success' => "'''[[Media:$1|$1]]''' ha sido revertido a la [$4 versión del $2 a las $3].",
'filerevert-badversion' => 'No existe version local previa de este archivo con esa marca de tiempo.',

# File deletion
'filedelete' => 'Borrar $1',
'filedelete-legend' => 'Borrar archivo',
'filedelete-intro' => "Estás borrando el archivo '''[[Media:$1|$1]]''' así como todo su historial.",
'filedelete-intro-old' => "Estás borrando la versión de '''[[Media:$1|$1]]''' del [$4 $2 a las $3].",
'filedelete-comment' => 'Motivo:',
'filedelete-submit' => 'Eliminar',
'filedelete-success' => "'''$1''' ha sido borrado.",
'filedelete-success-old' => "La version de '''[[Media:$1|$1]]''' del $2 a las $3 ha sido borrada.",
'filedelete-nofile' => "'''$1''' no existe.",
'filedelete-nofile-old' => "No existe una versión guardada de '''$1''' con los atributos especificados.",
'filedelete-otherreason' => 'Otra razón:',
'filedelete-reason-otherlist' => 'Otra razón',
'filedelete-reason-dropdown' => '*Razones de borrado habituales
** Violación de copyright
** Archivo duplicado',
'filedelete-edit-reasonlist' => 'Edita los motivos del borrado',
'filedelete-maintenance' => 'Borrado y restauración de archivos temporalmente deshabilitados durante el mantenimiento.',
'filedelete-maintenance-title' => 'No se puede eliminar el archivo',

# MIME search
'mimesearch' => 'Búsqueda MIME',
'mimesearch-summary' => 'Esta página permite el filtrado de ficheros por su tipo MIME.
Entrada: contenttype/subtype, p. ej. <code>image/jpeg</code>.',
'mimetype' => 'Tipo MIME:',
'download' => 'descargar',

# Unwatched pages
'unwatchedpages' => 'Páginas no vigiladas',

# List redirects
'listredirects' => 'Lista de redirecciones',

# Unused templates
'unusedtemplates' => 'Plantillas sin uso',
'unusedtemplatestext' => 'Aquí se enumeran todas las páginas en el espacio de nombres {{ns:template}} que no están incluidas en otras páginas. Recuerda mirar lo que enlaza a las plantillas antes de borrarlas.',
'unusedtemplateswlh' => 'otros enlaces',

# Random page
'randompage' => 'Página aleatoria',
'randompage-nopages' => 'No hay páginas en los siguientes {{PLURAL:$2|espacio de nombre|espacios de nombre}}: $1.',

# Random redirect
'randomredirect' => 'Ir a una redirección cualquiera',
'randomredirect-nopages' => 'No hay redirecciones en el espacio de nombres «$1».',

# Statistics
'statistics' => 'Estadísticas',
'statistics-header-pages' => 'Estadísticas de páginas',
'statistics-header-edits' => 'Estadísticas de ediciones',
'statistics-header-views' => 'Estadísticas de visitas',
'statistics-header-users' => 'Estadísticas de usuario',
'statistics-header-hooks' => 'Otras estadísticas',
'statistics-articles' => 'Páginas de contenido',
'statistics-pages' => 'Páginas',
'statistics-pages-desc' => 'Todas las páginas en el wiki, incluyendo páginas de discusión, redirecciones, etc.',
'statistics-files' => 'Ficheros subidos',
'statistics-edits' => 'Ediciones en páginas desde que {{SITENAME}} fue instalado',
'statistics-edits-average' => 'Media de ediciones por página',
'statistics-views-total' => 'Visitas totales',
'statistics-views-total-desc' => 'No se incluyen accesos a páginas no existentes ni páginas especiales',
'statistics-views-peredit' => 'Visitas por edición',
'statistics-users' => '[[Special:ListUsers|Usuarios]] registrados',
'statistics-users-active' => 'Usuarios activos',
'statistics-users-active-desc' => 'Usuarios que han ejecutado una acción en {{PLURAL:$1|el último día|los últimos $1 días}}',
'statistics-mostpopular' => 'Páginas más vistas',

'disambiguations' => 'Páginas que enlazan con páginas de desambiguación',
'disambiguationspage' => 'Template:Desambiguación',
'disambiguations-text' => "Las siguientes páginas contienen al menos un enlace a una '''página de desambiguación'''.
En lugar de ello deberían enlazar a una página más apropiada.<br />
Una página es considerada página de desambiguación si utiliza la plantilla que está enlazada desde [[MediaWiki:Disambiguationspage]].",

'doubleredirects' => 'Redirecciones dobles',
'doubleredirectstext' => 'Esta página contiene una lista de páginas que redirigen a otras páginas de redirección.
Cada fila contiene enlaces a la segunda y tercera redirección, así como la primera línea de la segunda redirección, en la que usualmente se encontrará el artículo «real» al que la primera redirección debería apuntar.
Las entradas <del>tachadas</del> han sido resueltas.',
'double-redirect-fixed-move' => '[[$1]] ha sido trasladado, ahora es una redirección a [[$2]]',
'double-redirect-fixed-maintenance' => 'Corrigiendo la doble redirección desde [[$1]] a [[$2]].',
'double-redirect-fixer' => 'Corrector de redirecciones',

'brokenredirects' => 'Redirecciones incorrectas',
'brokenredirectstext' => 'Las siguientes redirecciones enlazan a páginas que no existen:',
'brokenredirects-edit' => 'editar',
'brokenredirects-delete' => 'borrar',

'withoutinterwiki' => 'Páginas sin interwikis',
'withoutinterwiki-summary' => 'Las siguientes páginas no enlazan a versiones en otros idiomas:',
'withoutinterwiki-legend' => 'Prefijo',
'withoutinterwiki-submit' => 'Mostrar',

'fewestrevisions' => 'Artículos con menos ediciones',

# Miscellaneous special pages
'nbytes' => '$1 {{PLURAL:$1|byte|bytes}}',
'ncategories' => '$1 {{PLURAL:$1|categoría|categorías}}',
'ninterwikis' => '$1 {{PLURAL:$1|interwiki|interwikis}}',
'nlinks' => '$1 {{PLURAL:$1|enlace|enlaces}}',
'nmembers' => '$1 {{PLURAL:$1|artículo|artículos}}',
'nrevisions' => '$1 {{PLURAL:$1|revisión|revisiones}}',
'nviews' => '$1 {{PLURAL:$1|vista|vistas}}',
'nimagelinks' => 'Usado en {{PLURAL:$1|una página|$1 páginas}}',
'ntransclusions' => 'usado en {{PLURAL:$1|una página|$1 páginas}}',
'specialpage-empty' => 'Esta página está vacía.',
'lonelypages' => 'Páginas huérfanas',
'lonelypagestext' => 'Las siguientes páginas no están enlazadas ni transcluídas en otras páginas de {{SITENAME}}.',
'uncategorizedpages' => 'Páginas sin categorizar',
'uncategorizedcategories' => 'Categorías sin categorizar',
'uncategorizedimages' => 'Imágenes sin categorizar',
'uncategorizedtemplates' => 'Plantillas sin categorizar',
'unusedcategories' => 'Categorías sin uso',
'unusedimages' => 'Imágenes sin uso',
'popularpages' => 'Páginas populares',
'wantedcategories' => 'Categorías requeridas',
'wantedpages' => 'Páginas requeridas',
'wantedpages-badtitle' => 'Título inválido en conjunto de resultados: $1',
'wantedfiles' => 'Ficheros requeridos',
'wantedfiletext-cat' => 'Los siguientes archivos están en uso, pero no existen. Es posible que algunos de ellos estén almacenados en repositorios externos y se hayan incluido aquí por error; dichas entradas aparecen <del>tachadas</del>. De igual manera, las páginas que incluyen archivos inexistentes se enumeran en [[:$1]].',
'wantedfiletext-nocat' => 'Los siguientes archivos están en uso, pero no existen. Es posible que algunos de ellos estén almacenados en repositorios externos y se hayan incluido aquí por error; dichas entradas aparecen <del>tachadas</del>.',
'wantedtemplates' => 'Plantillas requeridas',
'mostlinked' => 'Artículos más enlazados',
'mostlinkedcategories' => 'Categorías más enlazadas',
'mostlinkedtemplates' => 'Plantillas más enlazadas',
'mostcategories' => 'Páginas con más categorías',
'mostimages' => 'Imágenes más usadas',
'mostinterwikis' => 'Páginas con más interwikis',
'mostrevisions' => 'Artículos con más ediciones',
'prefixindex' => 'Todas las páginas con prefijo',
'prefixindex-namespace' => 'Todas las páginas con el prefijo (espacio de nombres $1)',
'shortpages' => 'Páginas cortas',
'longpages' => 'Páginas largas',
'deadendpages' => 'Páginas sin salida',
'deadendpagestext' => 'Las siguientes páginas no enlazan a otras páginas de {{SITENAME}}.',
'protectedpages' => 'Páginas protegidas',
'protectedpages-indef' => 'Sólo protecciones indefinidas',
'protectedpages-cascade' => 'Sólo protecciones en cascada',
'protectedpagestext' => 'Las siguientes páginas están protegidas para su edición o traslado',
'protectedpagesempty' => 'Actualmente no hay ninguna página protegida con esos parámetros.',
'protectedtitles' => 'Títulos protegidos',
'protectedtitlestext' => 'Los siguientes títulos están protegidos, por lo que no se pueden crear',
'protectedtitlesempty' => 'Actualmente no existen entradas protegidas con esos parámetros.',
'listusers' => 'Lista de usuarios',
'listusers-editsonly' => 'Muestra sólo usuarios con ediciones',
'listusers-creationsort' => 'Ordenado por fecha de creación',
'usereditcount' => '$1 {{PLURAL:$1|edición|ediciones}}',
'usercreated' => '{{GENDER:$3|Registrado|Registrada}} el $1 a las $2',
'newpages' => 'Páginas nuevas',
'newpages-username' => 'Nombre de usuario',
'ancientpages' => 'Artículos más antiguos',
'move' => 'Trasladar',
'movethispage' => 'Trasladar esta página',
'unusedimagestext' => 'Los siguientes archivos existen pero no están insertados en ninguna página.
Por favor note que otros sitios web pueden vincular a un archivo con un URL directo, y por tanto pueden ser listados aquí a pesar de estar en uso activo.',
'unusedcategoriestext' => 'Las siguientes categorías han sido creadas, pero ningún artículo o categoría las utiliza.',
'notargettitle' => 'No hay página objetivo',
'notargettext' => 'Especifique sobre qué página desea llevar a cabo esta acción.',
'nopagetitle' => 'No existe la página destino',
'nopagetext' => 'La página destino que ha especificado no existe.',
'pager-newer-n' => '{{PLURAL:$1|1 siguiente|$1 siguientes}}',
'pager-older-n' => '{{PLURAL:$1|1 anterior|$1 anteriores}}',
'suppress' => 'Supresor de ediciones',
'querypage-disabled' => 'Esta página especial está deshabilitada por motivos de rendimiento.',

# Book sources
'booksources' => 'Fuentes de libros',
'booksources-search-legend' => 'Buscar fuentes de libros',
'booksources-go' => 'Ir',
'booksources-text' => 'Abajo hay una lista de enlaces a otros sitios que venden libros nuevos y usados, puede que contengan más información sobre los libros que estás buscando.',
'booksources-invalid-isbn' => 'El número de ISBN no parece ser válido; comprueba los errores copiándolo de la fuente original.',

# Special:Log
'specialloguserlabel' => 'Usuario:',
'speciallogtitlelabel' => 'Objetivo (título o usuario):',
'log' => 'Registros',
'all-logs-page' => 'Todos los registros públicos',
'alllogstext' => 'Vista combinada de todos los registros de {{SITENAME}}.
Puedes filtrar la vista seleccionando un tipo de registro, el nombre del usuario o la página afectada. Se distinguen mayúsculas de minúsculas.',
'logempty' => 'No hay elementos en el registro con esas condiciones.',
'log-title-wildcard' => 'Buscar títulos que empiecen con este texto',
'showhideselectedlogentries' => 'Mostrar u ocultar las entradas seleccionadas del registro',

# Special:AllPages
'allpages' => 'Todas las páginas',
'alphaindexline' => '$1 a $2',
'nextpage' => 'Siguiente página ($1)',
'prevpage' => 'Página anterior ($1)',
'allpagesfrom' => 'Mostrar páginas que empiecen por:',
'allpagesto' => 'Mostrar páginas terminadas con:',
'allarticles' => 'Todos los artículos',
'allinnamespace' => 'Todas las páginas (espacio de nombres $1)',
'allnotinnamespace' => 'Todas las páginas que no están en el espacio de nombres $1',
'allpagesprev' => 'Anterior',
'allpagesnext' => 'Siguiente',
'allpagessubmit' => 'Mostrar',
'allpagesprefix' => 'Mostrar páginas con el prefijo:',
'allpagesbadtitle' => 'El título dado era inválido o tenía un prefijo de enlace inter-idioma o inter-wiki. Puede contener uno o más caracteres que no se pueden usar en títulos.',
'allpages-bad-ns' => '{{SITENAME}} no tiene un espacio de nombres llamado «$1».',
'allpages-hide-redirects' => 'Ocultar redirecciones',

# SpecialCachedPage
'cachedspecial-viewing-cached-ttl' => 'Usted está viendo una versión en caché de esta página, que puede tener hasta  $1 días de antigüedad.',
'cachedspecial-viewing-cached-ts' => 'Está viendo una versión en caché de esta página, que puede no estar completamente actualizada.',
'cachedspecial-refresh-now' => 'Ver lo más reciente.',

# Special:Categories
'categories' => 'Categorías',
'categoriespagetext' => 'Las siguientes {{PLURAL:$1|categoría contiene|categorías contienen}} páginas o medios.
No se muestran aquí las [[Special:UnusedCategories|categorías sin uso]].
Véase también las [[Special:WantedCategories|categorías requeridas]].',
'categoriesfrom' => 'Mostrar categorías que empiecen por:',
'special-categories-sort-count' => 'ordenar por conteo',
'special-categories-sort-abc' => 'ordenar alfabéticamente',

# Special:DeletedContributions
'deletedcontributions' => 'Contribuciones borradas de usuario',
'deletedcontributions-title' => 'Contribuciones borradas de usuario',
'sp-deletedcontributions-contribs' => 'contribuciones',

# Special:LinkSearch
'linksearch' => 'Enlaces externos',
'linksearch-pat' => 'Patrón de búsqueda:',
'linksearch-ns' => 'Espacio de nombre:',
'linksearch-ok' => 'Buscar',
'linksearch-text' => 'Se pueden usar caracteres comodín como "*.wikipedia.org".
Es necesario, por lo menos, un dominio de alto nivel, por ejemplo "*.org".<br />
Protocolos soportados: <code>$1</code> (si no se especidica ninguno, el protocolo por defecto es http://).',
'linksearch-line' => '$1 enlazado desde $2',
'linksearch-error' => 'Los comodines sólo pueden aparecer al principio del nombre de sitio.',

# Special:ListUsers
'listusersfrom' => 'Mostrar usuarios que empiecen por:',
'listusers-submit' => 'Mostrar',
'listusers-noresult' => 'No se encontró al usuario.',
'listusers-blocked' => '({{GENDER:$1|bloqueado|bloqueada}})',

# Special:ActiveUsers
'activeusers' => 'Lista de usuarios activos',
'activeusers-intro' => 'Esta es una lista de usuarios que han tenido alguna actividad en los últimos $1 {{PLURAL:$1|día|días}}.',
'activeusers-count' => '$1 {{PLURAL:$1|edición|ediciones}} en los últimos {{PLURAL:$3|día|$3 días}}',
'activeusers-from' => 'Mostrando a los usuarios empezando por:',
'activeusers-hidebots' => 'Ocultar robots',
'activeusers-hidesysops' => 'Ocultar administradores',
'activeusers-noresult' => 'No se encontraron usuarios.',

# Special:Log/newusers
'newuserlogpage' => 'Registro de creación de usuarios',
'newuserlogpagetext' => 'Este es un registro de creación de usuarios.',

# Special:ListGroupRights
'listgrouprights' => 'Permisos del grupo de usuarios',
'listgrouprights-summary' => 'La siguiente es una lista de los grupos de usuario definidos en esta wiki y de sus privilegios de acceso asociados.
Puede haber información adicional sobre privilegios individuales en [[{{MediaWiki:Listgrouprights-helppage}}]]',
'listgrouprights-key' => '* <span class="listgrouprights-granted">Derecho concedido</span>
* <span class="listgrouprights-revoked">Derecho revocado</span>',
'listgrouprights-group' => 'Grupo',
'listgrouprights-rights' => 'Derechos',
'listgrouprights-helppage' => 'Help:Derechos de grupos',
'listgrouprights-members' => '(ver los miembros de este grupo)',
'listgrouprights-addgroup' => 'Agregar {{PLURAL:$2|grupo|grupos}}: $1',
'listgrouprights-removegroup' => 'Eliminar {{PLURAL:$2|grupo|grupos}}: $1',
'listgrouprights-addgroup-all' => 'Agregar todos los grupos',
'listgrouprights-removegroup-all' => 'Eliminar todos los grupos',
'listgrouprights-addgroup-self' => 'Agregar {{PLURAL:$2|grupo|grupos}} a tu propia cuenta: $1',
'listgrouprights-removegroup-self' => 'Eliminar {{PLURAL:$2|grupo|grupos}} de tu propia cuenta: $1',
'listgrouprights-addgroup-self-all' => 'Agregar todos los grupos a tu propia cuenta',
'listgrouprights-removegroup-self-all' => 'Eliminar todos los grupos de tu propia cuenta',

# E-mail user
'mailnologin' => 'Ninguna dirección de envio',
'mailnologintext' => 'Debes [[Special:UserLogin|iniciar sesión]] y tener una dirección electrónica válida en tus [[Special:Preferences|preferencias]] para enviar un correo electrónico a otros usuarios.',
'emailuser' => 'Enviar correo electrónico a este usuario',
'emailuser-title-target' => 'Enviar un correo electrónico a {{GENDER:$1|este usuario|esta usuaria}}',
'emailuser-title-notarget' => 'Enviar un correo electrónico al usuario',
'emailpage' => 'Correo electrónico a usuario',
'emailpagetext' => 'Puedes usar el formulario de abajo para enviar un correo electrónico a {{GENDER:$1|este usuario|esta usuaria}}.
La dirección de correo electrónico que indicaste en [[Special:Preferences|tus preferencias de usuario]] aparecerá en el campo "Remitente" o "De" para que el destinatario pueda responderte.',
'usermailererror' => 'El sistema de correo devolvió un error:',
'defemailsubject' => 'Correo electrónico enviado por el usuario «$1» desde {{SITENAME}}',
'usermaildisabled' => 'Correo electrónico del usuario deshabilitado',
'usermaildisabledtext' => 'No puedes enviar correos electrónicos a otros usuarios en esta wiki',
'noemailtitle' => 'No hay dirección de correo electrónico',
'noemailtext' => 'Este usuario no ha especificado una dirección de correo electrónico válida.',
'nowikiemailtitle' => 'correos electrónicos no permitidos',
'nowikiemailtext' => 'Este usuario ha elegido no recibir correos electrónicos de otros usuarios.',
'emailnotarget' => 'Nombre de usuario no existente o no válido para el destinatario.',
'emailtarget' => 'Introduce el nombre de usuario del destinatario',
'emailusername' => 'Nombre de usuario:',
'emailusernamesubmit' => 'Enviar',
'email-legend' => 'Enviar un correo electrónico a otro usuario de {{SITENAME}}',
'emailfrom' => 'De:',
'emailto' => 'Para:',
'emailsubject' => 'Asunto:',
'emailmessage' => 'Mensaje:',
'emailsend' => 'Enviar',
'emailccme' => 'Enviarme una copia de mi mensaje.',
'emailccsubject' => 'Copia de tu mensaje a $1: $2',
'emailsent' => 'Correo electrónico enviado',
'emailsenttext' => 'Se ha enviado tu mensaje de correo electrónico.',
'emailuserfooter' => 'Este correo electrónico fue enviado por $1 a $2 a través de la función «Enviar correo electrónico a este usuario» en {{SITENAME}}.',

# User Messenger
'usermessage-summary' => 'Dejando un mensaje de sistema.',
'usermessage-editor' => 'Mensajero del sistema',

# Watchlist
'watchlist' => 'Lista de seguimiento',
'mywatchlist' => 'Lista de seguimiento',
'watchlistfor2' => 'Para $1 $2',
'nowatchlist' => 'No tienes ninguna página en tu lista de seguimiento.',
'watchlistanontext' => 'Para ver o editar las entradas de tu lista de seguimiento es necesario $1.',
'watchnologin' => 'No has iniciado sesión',
'watchnologintext' => 'Debes [[Special:UserLogin|iniciar sesión]] para modificar tu lista de seguimiento.',
'addwatch' => 'Añadir a la lista de seguimiento',
'addedwatchtext' => "La página «[[:$1]]» ha sido añadida a tu [[Special:Watchlist|lista de seguimiento]]. Los cambios futuros en esta página y en su página de discusión asociada se indicarán ahí, y la página aparecerá '''en negritas''' en la [[Special:RecentChanges|lista de cambios recientes]] para hacerla más fácil de detectar.",
'removewatch' => 'Quitar de la lista de seguimiento',
'removedwatchtext' => 'La página «[[:$1]]» ha sido eliminada de tu [[Special:Watchlist|lista de seguimiento]].',
'watch' => 'Vigilar',
'watchthispage' => 'Vigilar esta página',
'unwatch' => 'Dejar de vigilar',
'unwatchthispage' => 'Dejar de vigilar',
'notanarticle' => 'No es un artículo',
'notvisiblerev' => 'La última revisión de un usuario diferente ha sido borrada',
'watchnochange' => 'Ninguno de los artículos de tu lista de seguimiento fue editado en el periodo de tiempo mostrado.',
'watchlist-details' => '{{PLURAL:$1|$1 página|$1 páginas}} en su lista de seguimiento, sin contar las de discusión.',
'wlheader-enotif' => '* La notificación por correo electrónico está activada.',
'wlheader-showupdated' => "* Las páginas modificadas desde su última visita aparecen en '''negrita'''",
'watchmethod-recent' => 'revisando cambios recientes en páginas vigiladas',
'watchmethod-list' => 'revisando las páginas vigiladas en busca de cambios recientes',
'watchlistcontains' => 'Tu lista de seguimiento posee $1 {{PLURAL:$1|página|páginas}}.',
'iteminvalidname' => "Problema con el artículo '$1', nombre inválido...",
'wlnote' => "A continuación {{PLURAL:$1|se muestra el último cambio|se muestran los últimos '''$1''' cambios}} en {{PLURAL:$2|la última hora|las últimas '''$2''' horas}} a fecha de $4 $3.",
'wlshowlast' => 'Ver los cambios de las últimas $1 horas, $2 días  $3',
'watchlist-options' => 'Opciones de la lista de seguimiento',

# Displayed when you click the "watch" button and it is in the process of watching
'watching' => 'Vigilando...',
'unwatching' => 'Eliminando de la lista de seguimiento...',
'watcherrortext' => 'Ocurrió un error al cambiar la configuración de tu lista de seguimiento para «$1».',

'enotif_mailer' => 'Notificación por correo de {{SITENAME}}',
'enotif_reset' => 'Marcar todas las páginas como visitadas',
'enotif_newpagetext' => 'Se trata de una nueva página.',
'enotif_impersonal_salutation' => 'usuario de {{SITENAME}}',
'changed' => 'modificada',
'created' => 'creada',
'enotif_subject' => 'La página $PAGETITLE de {{SITENAME}} ha sido $CHANGEDORCREATED por $PAGEEDITOR',
'enotif_lastvisited' => 'Consulta $1 para ver todos los cambios realizados desde tu última visita.',
'enotif_lastdiff' => 'Consulta $1 para ver este cambio.',
'enotif_anon_editor' => 'usuario anónimo $1',
'enotif_body' => 'Estimado/a $WATCHINGUSERNAME,

La página de {{SITENAME}} $PAGETITLE ha sido $CHANGEDORCREATED el $PAGEEDITDATE por el usuario $PAGEEDITOR.
La versión actual se encuentra en $PAGETITLE_URL

$NEWPAGE

El resumen de edición es: $PAGESUMMARY $PAGEMINOREDIT

Contacta al editor:
Correo electrónico: $PAGEEDITOR_EMAIL
Wiki: $PAGEEDITOR_WIKI

No habrá otras notificaciones en caso de cambios adicionales, a menos que visites esta página nuevamente.
También puedes reestablecer las notificaciones para todas tus páginas vigiladas en tu página de vigilancia.

             El sistema de notificación de {{SITENAME}}.

--
Para cambiar las opciones de tu lista de seguimiento, visita:
{{canonicalurl:{{#special:EditWatchlist}}}}

Para borrar la página de tu lista de seguimiento visita:
$UNWATCHURL

Retroalimentación y asistencia adicional:
{{canonicalurl:{{MediaWiki:Helppage}}}}',

# Delete
'deletepage' => 'Borrar esta página',
'confirm' => 'Confirmar',
'excontent' => 'el contenido era: «$1»',
'excontentauthor' => 'el contenido era: «$1» (y el único autor fue «[[Special:Contributions/$2|$2]]»)',
'exbeforeblank' => 'El contenido antes de blanquear era: «$1»',
'exblank' => 'la página estaba vacía',
'delete-confirm' => 'Borrar «$1»',
'delete-legend' => 'Borrar',
'historywarning' => "'''Aviso:''' La página que estás a punto de borrar tiene un historial de aproximadamente $1 {{PLURAL:$1|revisión|revisiones}}:",
'confirmdeletetext' => 'Estás a punto de borrar una página en forma permanente, así como todo su historial.
Por favor, confirma que realmente quieres hacer eso, que entiendes las
consecuencias, y que lo estás haciendo de acuerdo con [[{{MediaWiki:Policy-url}}|las políticas]].',
'actioncomplete' => 'Acción completada',
'actionfailed' => 'Acción fallida',
'deletedtext' => '«$1» ha sido borrado.
Véase $2 para un registro de los borrados recientes.',
'dellogpage' => 'Registro de borrados',
'dellogpagetext' => 'A continuación se muestra una lista de los borrados más recientes.',
'deletionlog' => 'registro de borrados',
'reverted' => 'Revertido a una revisión anterior',
'deletecomment' => 'Motivo:',
'deleteotherreason' => 'Otro motivo:',
'deletereasonotherlist' => 'Otro motivo',
'deletereason-dropdown' => '*Razones comunes de borrado
** A petición del mismo autor
** Violación de copyright
** Vandalismo',
'delete-edit-reasonlist' => 'Editar razones de borrado',
'delete-toobig' => 'Esta página tiene un historial muy grande, con más de $1 {{PLURAL:$1|revisión|revisiones}}. Borrar este tipo de páginas ha sido restringido para prevenir posibles problemas en {{SITENAME}}.',
'delete-warning-toobig' => 'Esta página tiene un historial de más de $1 {{PLURAL:$1|revisión|revisiones}}. Eliminarla puede perturbar las operaciones de la base de datos de {{SITENAME}}. Ten cuidado al borrar.',

# Rollback
'rollback' => 'Revertir ediciones',
'rollback_short' => 'Revertir',
'rollbacklink' => 'revertir',
'rollbacklinkcount' => 'revertir $1 {{PLURAL:$1|edición|ediciones}}',
'rollbacklinkcount-morethan' => 'revertir más de $1 {{PLURAL:$1|edición|ediciones}}',
'rollbackfailed' => 'No se pudo revertir',
'cantrollback' => 'No se puede revertir la edición;
el último colaborador es el único autor de esta página.',
'alreadyrolled' => 'No se puede revertir la última edición de [[:$1]] hecha por [[User:$2|$2]] ([[User talk:$2|discusión]]{{int:pipe-separator}}[[Special:Contributions/$2|{{int:contribslink}}]]);
alguien más ya ha editado o revertido esa página.

La última edición fue hecha por [[User:$3|$3]] ([[User talk:$3|discusión]]{{int:pipe-separator}}[[Special:Contributions/$3|{{int:contribslink}}]]).',
'editcomment' => "El resumen de la edición fue: ''«$1»''.",
'revertpage' => 'Revertidos los cambios de [[Special:Contributions/$2|$2]] ([[User talk:$2|disc.]]) a la última edición de [[User:$1|$1]]',
'revertpage-nouser' => 'Revertidas ediciones hechas por (nombre de usuario eliminado) a la última revisión hecha por [[User:$1|$1]]',
'rollback-success' => 'Revertidas las ediciones de $1; recuperada la última versión de $2.',

# Edit tokens
'sessionfailure-title' => 'Error de sesión',
'sessionfailure' => 'Parece que hay un problema con tu sesión;
esta acción ha sido cancelada como medida de precaución contra secuestros de sesión.
Por favor, pulsa «Atrás», recarga la página de la que viniste e inténtalo de nuevo.',

# Protect
'protectlogpage' => 'Registro de protección',
'protectlogtext' => 'Abajo se presenta una lista de protección y desprotección de página.
Véase [[Special:ProtectedPages|la lista de páginas protegidas]] para ver las protecciones activas en páginas.',
'protectedarticle' => 'protegió «[[$1]]»',
'modifiedarticleprotection' => 'cambió el nivel de protección de «[[$1]]»',
'unprotectedarticle' => 'desprotegió «[[$1]]»',
'movedarticleprotection' => 'cambiadas protecciones de «[[$2]]» a «[[$1]]»',
'protect-title' => 'Cambiando el nivel de protección de «$1»',
'protect-title-notallowed' => 'Ver el nivel de protección de «$1»',
'prot_1movedto2' => 'heredando la protección al trasladar [[$1]] a [[$2]]',
'protect-badnamespace-title' => 'Espacio de nombres no protegible',
'protect-badnamespace-text' => 'Las páginas de este espacio de nombres no pueden ser protegidas',
'protect-legend' => 'Confirmar protección',
'protectcomment' => 'Motivo:',
'protectexpiry' => 'Caducidad:',
'protect_expiry_invalid' => 'Tiempo de caducidad incorrecto.',
'protect_expiry_old' => 'El tiempo de expiración está en el pasado.',
'protect-unchain-permissions' => 'Desbloquear opciones de protección adicionales',
'protect-text' => "Puedes ver y modificar el nivel de protección de la página '''$1'''.",
'protect-locked-blocked' => "No puede cambiar los niveles de protección estando bloqueado. A continuación se muestran las opciones actuales de la página '''$1''':",
'protect-locked-dblock' => "Los niveles de protección no se pueden cambiar debido a un bloqueo activo de la base de datos.
A continuación se muestran las opciones actuales de la página '''$1''':",
'protect-locked-access' => "Su cuenta no tiene permiso para cambiar los niveles de protección de una página.
A continuación se muestran las opciones actuales de la página '''$1''':",
'protect-cascadeon' => 'Actualmente esta página está protegida porque está incluida en {{PLURAL:$1|la siguiente página|las siguientes páginas}}, que tienen activada la opción de protección en cascada. Puedes cambiar el nivel de protección de esta página, pero no afectará a la protección en cascada.',
'protect-default' => 'Permitir todos los usuarios',
'protect-fallback' => 'Necesita el permiso «$1»',
'protect-level-autoconfirmed' => 'Bloquear usuarios nuevos y no registrados',
'protect-level-sysop' => 'Solo administradores',
'protect-summary-cascade' => 'en cascada',
'protect-expiring' => 'caduca el $1 (UTC)',
'protect-expiring-local' => 'caduca el $1',
'protect-expiry-indefinite' => 'indefinido',
'protect-cascade' => 'Protección en cascada - proteger todas las páginas incluidas en ésta.',
'protect-cantedit' => 'No puedes cambiar el nivel de protección porque no tienes permiso para hacer ediciones.',
'protect-othertime' => 'Especificar caducidad:',
'protect-othertime-op' => 'otra (especificar)',
'protect-existing-expiry' => 'Fecha de caducidad actual: $2 a las $3',
'protect-otherreason' => 'Otra razón:',
'protect-otherreason-op' => 'Otra razón',
'protect-dropdown' => '*Razones de protección habituales
**Vandalismo excesivo
**Spam excesivo
**Guerra de ediciones
**Página muy visitada',
'protect-edit-reasonlist' => 'Editar las razones de protección',
'protect-expiry-options' => '1 hora:1 hour,1 día:1 day,1 semana:1 week,2 semanas:2 weeks,1 mes:1 month,3 meses:3 months,6 meses:6 months,1 año:1 year,para siempre:infinite',
'restriction-type' => 'Permiso:',
'restriction-level' => 'Nivel de restricción:',
'minimum-size' => 'Tamaño mínimo',
'maximum-size' => 'Tamaño máximo:',
'pagesize' => '(bytes)',

# Restrictions (nouns)
'restriction-edit' => 'Editar',
'restriction-move' => 'Pueden trasladar',
'restriction-create' => 'Crear',
'restriction-upload' => 'Subir',

# Restriction levels
'restriction-level-sysop' => 'completamente protegida',
'restriction-level-autoconfirmed' => 'semiprotegida',
'restriction-level-all' => 'cualquier nivel',

# Undelete
'undelete' => 'Restaurar una página borrada',
'undeletepage' => 'Ver y restaurar páginas borradas',
'undeletepagetitle' => "'''Las siguientes son las revisiones borradas de [[:$1|$1]]'''.",
'viewdeletedpage' => 'Ver páginas borradas',
'undeletepagetext' => '{{PLURAL:$1|La siguiente página ha sido borrada pero aún está en el archivo y puede ser restaurada.|Las siguientes $1 páginas han sido borradas pero aún están en el archivo y pueden ser restauradas.}}
Puede que el archivo se limpie periódicamente.',
'undelete-fieldset-title' => 'Restaurar revisiones',
'undeleteextrahelp' => "Para restaurar todo el historial de la página, deja todas las casillas sin seleccionar y pulsa '''''{{int:undeletebtn}}'''''. Para realizar una restauración selectiva, marca las revisiones a ser restauradas y pulsa '''''{{int:undeletebtn}}'''''.",
'undeleterevisions' => '$1 {{PLURAL:$1|revisión|revisiones}} archivadas',
'undeletehistory' => 'Si restauras una página, todas sus revisiones serán restauradas al historial.
Si una nueva página con el mismo nombre ha sido creada desde que se borró la original, las versiones restauradas aparecerán como historial anterior, y la revisión actual de la página actual no se reemplazará automáticamente.',
'undeleterevdel' => 'No se deshará el borrado si éste resulta en el borrado parcial de la última revisión de la página. En tal caso, desmarque o muestre las revisiones borradas más recientes. Las revisiones de archivos que no tiene permitido ver no se restaurarán.',
'undeletehistorynoadmin' => 'El artículo ha sido borrado. La razón de su eliminación se indica abajo en el resumen, así como los detalles de las ediciones realizadas antes del borrado. El texto completo del artículo está disponible sólo para usuarios con permisos de administrador.',
'undelete-revision' => 'Edición borrada de $1 (fechada $4, a $5) por $3:',
'undeleterevision-missing' => 'Revisión no válida o perdida. Puede deberse a un enlace incorrecto,
o a que la revisión haya sido restaurada o eliminada del archivo.',
'undelete-nodiff' => 'No existe una revisión previa.',
'undeletebtn' => 'Restaurar',
'undeletelink' => 'ver/restaurar',
'undeleteviewlink' => 'ver',
'undeletereset' => 'Cancelar',
'undeleteinvert' => 'Invertir selección',
'undeletecomment' => 'Razón:',
'undeletedrevisions' => '{{PLURAL:$1|Una edición restaurada|$1 ediciones restauradas}}',
'undeletedrevisions-files' => '$1 {{PLURAL:$1|ediciones restauradas y $2 archivo restaurado|ediciones y $2 archivos restaurados}}',
'undeletedfiles' => '$1 {{PLURAL:$1|archivo restaurado|archivos restaurados}}',
'cannotundelete' => 'Hubo un error durante la restauración:
$1',
'undeletedpage' => "'''Se ha restaurado $1'''

Consulta el [[Special:Log/delete|registro de borrados]] para ver una lista de los últimos borrados y restauraciones.",
'undelete-header' => 'En el [[Special:Log/delete|registro de borrados]] se listan las páginas eliminadas.',
'undelete-search-title' => 'Buscar páginas borradas',
'undelete-search-box' => 'Buscar páginas borradas',
'undelete-search-prefix' => 'Mostrar páginas que empiecen por:',
'undelete-search-submit' => 'Buscar',
'undelete-no-results' => 'No se encontraron páginas borradas para ese criterio de búsqueda.',
'undelete-filename-mismatch' => 'No se puede restaurar la versión con marca de tiempo $1: No concuerda el nombre de fichero',
'undelete-bad-store-key' => 'No se puede restaurar la versión con marca de tiempo $1: el fichero fue omitido antes del borrado.',
'undelete-cleanup-error' => 'Error al borrar el archivo no utilizado "$1".',
'undelete-missing-filearchive' => 'No se ha podido restaurar el archivo de ID $1 debido a que no está en la base de datos.
Puede que ya haya sido restaurado.',
'undelete-error' => 'Error restaurando la página',
'undelete-error-short' => 'Error restaurando archivo: $1',
'undelete-error-long' => 'Se encontraron errores mientras se restauraba el archivo:

$1',
'undelete-show-file-confirm' => '¿Estás seguro que quieres ver una revisión borrada del archivo «<nowiki>$1</nowiki>» del $2 a las $3?',
'undelete-show-file-submit' => 'Sí',

# Namespace form on various pages
'namespace' => 'Espacio de nombres:',
'invert' => 'Invertir selección',
'tooltip-invert' => 'Marca esta casilla para ocultar los cambios a las páginas dentro del espacio de nombres seleccionado (y el espacio de nombres asociado si está activada)',
'namespace_association' => 'Espacio de nombres asociado',
'tooltip-namespace_association' => 'Marca esta casilla para incluir también el espacio de nombres de discusión asociado con el espacio de nombres seleccionado',
'blanknamespace' => '(Principal)',

# Contributions
'contributions' => 'Contribuciones {{GENDER:{{BASEPAGENAME}}|del usuario|de la usuaria}}',
'contributions-title' => 'Contribuciones {{GENDER:$1|del usuario|de la usuaria}} $1',
'mycontris' => 'Mis contribuciones',
'contribsub2' => '$1 ($2)',
'nocontribs' => 'No se encontraron cambios que cumplieran estos criterios.',
'uctop' => '(última edición)',
'month' => 'Desde el mes (y anterior):',
'year' => 'Desde el año (y anterior):',

'sp-contributions-newbies' => 'Mostrar solo las contribuciones de usuarios nuevos',
'sp-contributions-newbies-sub' => 'Para cuentas nuevas',
'sp-contributions-newbies-title' => 'Contribuciones de usuarios nuevos',
'sp-contributions-blocklog' => 'registro de bloqueos',
'sp-contributions-deleted' => 'contribuciones de usuario borradas',
'sp-contributions-uploads' => 'subidas',
'sp-contributions-logs' => 'registros',
'sp-contributions-talk' => 'discusión',
'sp-contributions-userrights' => 'administración de derechos de usuarios',
'sp-contributions-blocked-notice' => 'Este usuario está actualmente bloqueado. La última entrada del registro de bloqueos es presentada debajo para mayor referencia:',
'sp-contributions-blocked-notice-anon' => 'Esta dirección IP se encuentra actualmente bloqueada.
A continuación se muestra la última entrada del registro de bloqueos para mayor referencia.',
'sp-contributions-search' => 'Buscar contribuciones',
'sp-contributions-username' => 'Dirección IP o nombre de usuario:',
'sp-contributions-toponly' => 'Solo mostrar últimas ediciones de página',
'sp-contributions-submit' => 'Buscar',

# What links here
'whatlinkshere' => 'Lo que enlaza aquí',
'whatlinkshere-title' => 'Páginas que enlazan con «$1»',
'whatlinkshere-page' => 'Página:',
'linkshere' => "Las siguientes páginas enlazan a '''[[:$1]]''':",
'nolinkshere' => "Ninguna página enlaza con '''[[:$1]]'''.",
'nolinkshere-ns' => "Ninguna página enlaza con '''[[:$1]]''' en el espacio de nombres elegido.",
'isredirect' => 'página redirigida',
'istemplate' => 'inclusión',
'isimage' => 'Enlace de imagen',
'whatlinkshere-prev' => '{{PLURAL:$1|previa|previas $1}}',
'whatlinkshere-next' => '{{PLURAL:$1|siguiente|siguientes $1}}',
'whatlinkshere-links' => '← enlaces',
'whatlinkshere-hideredirs' => '$1 redirecciones',
'whatlinkshere-hidetrans' => '$1 inclusiones',
'whatlinkshere-hidelinks' => '$1 enlaces',
'whatlinkshere-hideimages' => '$1 enlaces a archivos',
'whatlinkshere-filters' => 'Filtros',

# Block/unblock
'autoblockid' => 'Bloqueo automático #$1',
'block' => 'Bloquear usuario',
'unblock' => 'Desbloquear usuario',
'blockip' => 'Bloquear usuario',
'blockip-title' => 'Bloquear usuario',
'blockip-legend' => 'Bloquear usuario',
'blockiptext' => 'Usa el siguiente formulario para bloquear el acceso de escritura desde una dirección IP específica o nombre de usuario.
Esto debería hacerse sólo para prevenir vandalismos, y de acuerdo a las [[{{MediaWiki:Policy-url}}|políticas]].
Explica la razón específica del bloqueo (por ejemplo, citando las páginas en particular que han sido objeto de vandalismo).',
'ipadressorusername' => 'Dirección IP o nombre de usuario:',
'ipbexpiry' => 'Caducidad:',
'ipbreason' => 'Motivo:',
'ipbreasonotherlist' => 'Otra razón',
'ipbreason-dropdown' => '*Motivos comunes de bloqueo
** Añadir información falsa
** Eliminar contenido de las páginas
** Publicitar enlaces a otras páginas web
** Añadir basura a las páginas
** Comportamiento intimidatorio u hostil
** Abuso de múltiples cuentas
** Nombre de usuario inaceptable',
'ipb-hardblock' => 'Impedir que los usuarios identificados editen desde esta dirección IP',
'ipbcreateaccount' => 'Prevenir la creación de cuentas de usuario',
'ipbemailban' => 'Prevenir que el usuario envíe correo electrónico',
'ipbenableautoblock' => 'Bloquear automáticamente la dirección IP usada por este usuario y cualquier IP posterior desde la cual intente editar',
'ipbsubmit' => 'Bloquear a este usuario',
'ipbother' => 'Especificar caducidad',
'ipboptions' => '2 horas:2 hours,1 día:1 day,3 días:3 days,1 semana:1 week,2 semanas:2 weeks,1 mes:1 month,3 meses:3 months,6 meses:6 months,1 año:1 year,para siempre:infinite',
'ipbotheroption' => 'otro',
'ipbotherreason' => 'Otra razón:',
'ipbhidename' => 'Ocultar nombre de usuario de ediciones y listas',
'ipbwatchuser' => 'Vigilar las páginas de usuario y de discusión de este usuario',
'ipb-disableusertalk' => 'Impedir que este usuario edite su propia página de discusión mientras esté bloqueado',
'ipb-change-block' => 'Rebloquear al usuario con estos datos',
'ipb-confirm' => 'Confirmar bloqueo',
'badipaddress' => 'La dirección IP no tiene el formato correcto.',
'blockipsuccesssub' => 'Bloqueo realizado con éxito',
'blockipsuccesstext' => '"[[Special:Contributions/$1|$1]]" ha sido bloqueado.<br />
Véase la [[Special:BlockList|lista de bloqueos]] para revisarlo.',
'ipb-blockingself' => '¡Estás a punto de bloquearte a ti mismo!  ¿Estás seguro de que quieres hacerlo?',
'ipb-confirmhideuser' => 'Estás a punto de bloquear un usuario con la opción de supresión activada. Esto suprimirá el nombre de usuario en todas las listas y entradas de registro. ¿Estás seguro de que deseas proceder?',
'ipb-edit-dropdown' => 'Editar motivo del bloqueo',
'ipb-unblock-addr' => 'Desbloquear $1',
'ipb-unblock' => 'Desbloquear un usuario o una IP',
'ipb-blocklist' => 'Ver bloqueos vigentes',
'ipb-blocklist-contribs' => 'Contribuciones de $1',
'unblockip' => 'Desbloquear usuario',
'unblockiptext' => 'Use el formulario a continuación para devolver los permisos de escritura a una dirección IP que ha sido bloqueada.',
'ipusubmit' => 'Desactivar este bloqueo',
'unblocked' => '[[User:$1|$1]] ha sido {{GENDER:$1|desbloqueado|desbloqueada}}',
'unblocked-range' => '$1 ha sido desbloqueado',
'unblocked-id' => 'Se ha eliminado el bloqueo $1',
'blocklist' => 'Usuarios bloqueados',
'ipblocklist' => 'Usuarios bloqueados',
'ipblocklist-legend' => 'Encontrar a un usuario bloqueado',
'blocklist-userblocks' => 'Ocultar bloqueos de cuenta',
'blocklist-tempblocks' => 'Ocultar bloqueos temporales',
'blocklist-addressblocks' => 'Ocultar bloqueos de una sola dirección IP',
'blocklist-rangeblocks' => 'Ocultar bloqueos de rango',
'blocklist-timestamp' => 'Marca de tiempo',
'blocklist-target' => 'Destino',
'blocklist-expiry' => 'Caduca',
'blocklist-by' => 'Administrador bloqueante',
'blocklist-params' => 'Parámetros de bloqueo',
'blocklist-reason' => 'Motivo',
'ipblocklist-submit' => 'Buscar',
'ipblocklist-localblock' => 'Bloqueo local',
'ipblocklist-otherblocks' => 'Otros {{PLURAL:$1|bloqueo| bloqueos}}',
'infiniteblock' => 'infinito',
'expiringblock' => 'expira el $1 a las $2',
'anononlyblock' => 'sólo anón.',
'noautoblockblock' => 'bloqueo automático deshabilitado',
'createaccountblock' => 'creación de cuenta bloqueada',
'emailblock' => 'correo electrónico bloqueado',
'blocklist-nousertalk' => 'no puede editar su propia página de discusión',
'ipblocklist-empty' => 'La lista de bloqueos está vacía.',
'ipblocklist-no-results' => 'El nombre de usuario o IP indicado no está bloqueado.',
'blocklink' => 'bloquear',
'unblocklink' => 'desbloquear',
'change-blocklink' => 'cambiar bloqueo',
'contribslink' => 'contribuciones',
'emaillink' => 'enviar correo electrónico',
'autoblocker' => 'Has sido bloqueado automáticamente porque tu dirección IP ha sido usada recientemente por «[[User:$1|$1]]». La razón dada para bloquear a «[[User:$1|$1]]» fue «$2».',
'blocklogpage' => 'Registro de bloqueos',
'blocklog-showlog' => 'Este usuario ha sido bloqueado previamente. Debajo se provee el registro de bloqueos para mayor referencia:',
'blocklog-showsuppresslog' => 'Este usuario ha sido bloqueado y ocultado. Se provee el registro de supresiones para más detalle:',
'blocklogentry' => 'bloqueó a [[$1]] $3 durante un plazo de $2',
'reblock-logentry' => 'cambió el bloqueo para  [[$1]] con una caducidad de $2 $3',
'blocklogtext' => 'Esto es un registro de acciones de bloqueo y desbloqueo de usuarios.
Las direcciones IP bloqueadas automáticamente no aparecen aquí.
Consulta la [[Special:BlockList|lista de bloqueos]] para ver la lista de bloqueos y prohibiciones de operar en vigor.',
'unblocklogentry' => 'desbloqueó a $1',
'block-log-flags-anononly' => 'sólo anónimos',
'block-log-flags-nocreate' => 'desactivada la creación de cuentas',
'block-log-flags-noautoblock' => 'bloqueo automático desactivado',
'block-log-flags-noemail' => 'correo electrónico deshabilitado',
'block-log-flags-nousertalk' => 'no puede editar su propia página de discusión',
'block-log-flags-angry-autoblock' => 'autobloqueo avanzado habilitado',
'block-log-flags-hiddenname' => 'nombre de usuario oculto',
'range_block_disabled' => 'La facultad de administrador de crear bloqueos por rangos está deshabilitada.',
'ipb_expiry_invalid' => 'El tiempo de caducidad no es válido.',
'ipb_expiry_temp' => 'Los bloqueos a nombres de usuario ocultos deben ser permanentes.',
'ipb_hide_invalid' => 'Incapaz de suprimir esta cuenta; puede tener muchas ediciones.',
'ipb_already_blocked' => '"$1" ya se encuentra bloqueado.',
'ipb-needreblock' => '$1 ya está bloqueado. ¿Quieres cambiar el bloqueo?',
'ipb-otherblocks-header' => '{{PLURAL:$1|Otro bloqueo|Otros bloqueos}}',
'unblock-hideuser' => 'No se puede desbloquear a este usuario, porque su nombre de usuario está oculto.',
'ipb_cant_unblock' => "'''Error''': Número ID $1 de bloqueo no encontrado. Pudo haber sido desbloqueado ya.",
'ipb_blocked_as_range' => 'Error: la dirección IP $1 no está bloqueada directamente y no puede ser desbloqueada.
Sin embargo, está bloqueada como parte del rango $2, que puede ser desbloqueado.',
'ip_range_invalid' => 'El rango de IP no es válido.',
'ip_range_toolarge' => 'Los bloqueos de rango superiores a /$1 no están permitidos.',
'blockme' => 'Bloquearme',
'proxyblocker' => 'Bloqueador de proxies',
'proxyblocker-disabled' => 'Esta función está desactivada.',
'proxyblockreason' => 'Su dirección IP ha sido bloqueada porque es un proxy abierto. Por favor, contacte con su proveedor de servicios de Internet o con su servicio de asistencia técnica e infórmeles de este grave problema de seguridad.',
'proxyblocksuccess' => 'Hecho.',
'sorbsreason' => 'Su dirección IP está listada como proxy abierto en DNSBL.',
'sorbs_create_account_reason' => 'Su dirección IP está listada como proxy abierto en DNSBL. No puede crear una cuenta',
'cant-block-while-blocked' => 'No puedes bloquear a otros usuarios mientras estás bloqueado.',
'cant-see-hidden-user' => 'El usuario que está intentando bloquear ya ha sido bloqueado y oculto. Puesto que usted no tiene el derecho hideuser, usted no puede ver o editar los bloqueos del usuario.',
'ipbblocked' => 'No puedes bloquear o desbloquear a otros usuarios porque estás bloqueado',
'ipbnounblockself' => 'No puedes desbloquearte',

# Developer tools
'lockdb' => 'Bloquear la base de datos',
'unlockdb' => 'Desbloquear la base de datos',
'lockdbtext' => 'El bloqueo de la base de datos impedirá a todos los usuarios editar páginas, cambiar sus preferencias, modificar sus listas de seguimiento y cualquier otra función que requiera realizar cambios en la base de datos. Por favor, confirme que ésto es precisamente lo que quiere hacer y que desbloqueará la base de datos tan pronto haya finalizado las operaciones de mantenimiento.',
'unlockdbtext' => 'El desbloqueo de la base de datos permitirá a todos los usuarios editar páginas, cambiar sus preferencias, modificar sus listas de seguimiento y cualesquiera otras funciones que impliquen modificar la base de datos. Por favor, confirme que esto es precisamente lo que quiere hacer.',
'lockconfirm' => 'Sí, realmente quiero bloquear la base de datos.',
'unlockconfirm' => 'Sí, realmente quiero desbloquear la base de datos.',
'lockbtn' => 'Bloquear la base de datos',
'unlockbtn' => 'Desbloquear la base de datos',
'locknoconfirm' => 'No ha confirmado lo que desea hacer.',
'lockdbsuccesssub' => 'El bloqueo se ha realizado con éxito',
'unlockdbsuccesssub' => 'El desbloqueo se ha realizado con éxito',
'lockdbsuccesstext' => 'La base de datos de {{SITENAME}} ha sido bloqueada.
<br />Recuerde retirar el bloqueo después de completar las tareas de mantenimiento.',
'unlockdbsuccesstext' => 'La base de datos de {{SITENAME}} ha sido desbloqueada.',
'lockfilenotwritable' => 'El archivo-cerrojo de la base de datos no tiene permiso de escritura. Para bloquear o desbloquear la base de datos, este archivo tiene que ser escribible por el servidor web.',
'databasenotlocked' => 'La base de datos no está bloqueada.',
'lockedbyandtime' => '(por {{GENDER:$1|$1}} el $2 a las $3)',

# Move page
'move-page' => 'Trasladar $1',
'move-page-legend' => 'Renombrar página',
'movepagetext' => "Usando el siguiente formulario se renombrará una página, moviendo todo su historial al nuevo nombre.
El título anterior se convertirá en una redirección al nuevo título.
Los enlaces al antiguo título de la página no se cambiarán.
Asegúrate de no dejar [[Special:DoubleRedirects|redirecciones dobles]] o [[Special:BrokenRedirects|rotas]].
Tú eres responsable de hacer que los enlaces sigan apuntando a donde se supone que deberían hacerlo.

Recuerda que la página '''no''' será renombrada si ya existe una página con el nuevo título, a no ser que sea una página vacía o una redirección sin historial.
Esto significa que podrás renombrar una página a su título original si has cometido un error, pero que no podrás sobrescribir una página existente.

'''¡Aviso!'''
Este puede ser un cambio drástico e inesperado para una página popular;
por favor, asegúrate de entender las consecuencias del procedimiento antes de seguir adelante.",
'movepagetext-noredirectfixer' => "Usando el siguiente formulario se renombrará una página, moviendo todo su historial al nuevo nombre.
El título anterior se convertirá en una redirección al nuevo título.
Asegúrate de no dejar [[Special:DoubleRedirects|redirecciones dobles]] o [[Special:BrokenRedirects|rotas]].
Tú eres responsable de hacer que los enlaces sigan apuntando adonde se supone que deberían hacerlo.

Recuerda que la página '''no''' será renombrada si ya existe una página con el nuevo título, a no ser que sea una página vacía o una redirección sin historial.
Esto significa que podrás renombrar una página a su título original si has cometido un error, pero que no podrás sobrescribir una página existente.

'''¡Aviso!'''
Este puede ser un cambio drástico e inesperado para una página popular;
por favor, asegúrate de entender las consecuencias del procedimiento antes de seguir adelante.",
'movepagetalktext' => "La página de discusión asociada, si existe, será renombrada automáticamente '''a menos que:'''
*Esté moviendo la página entre espacios de nombres diferentes,
*Una página de discusión no vacía ya exista con el nombre nuevo, o
*No actives la opción «Renombrar la página de discusión también».

En estos casos, deberás trasladar manualmente el contenido de la página de discusión.",
'movearticle' => 'Renombrar página',
'moveuserpage-warning' => "'''Aviso:''' estás a punto de mover una página de usuario. Ten en cuenta que solo será trasladada la página; el usuario '''no''' será renombrado.",
'movenologin' => 'No has iniciado sesión',
'movenologintext' => 'Es necesario ser usuario registrado y [[Special:UserLogin|haber iniciado sesión]] para renombrar una página.',
'movenotallowed' => 'No tienes permiso para mover páginas.',
'movenotallowedfile' => 'No tienes permiso para mover archivos.',
'cant-move-user-page' => 'No tienes permiso para mover páginas de usuario (excepto subpáginas).',
'cant-move-to-user-page' => 'No tienes permiso para mover una página a una página de usuario (excepto a subpáginas de usuario).',
'newtitle' => 'A título nuevo:',
'move-watch' => 'Vigilar páginas de origen y destino',
'movepagebtn' => 'Renombrar página',
'pagemovedsub' => 'Renombrado realizado con éxito',
'movepage-moved' => "'''«$1» ha sido trasladado a «$2».'''",
'movepage-moved-redirect' => 'Se ha creado una redirección.',
'movepage-moved-noredirect' => 'Se ha suprimido la creación de la redirección.',
'articleexists' => 'Ya existe una página con ese nombre, o el nombre que has escogido no es válido.
Por favor, elige otro nombre.',
'cantmove-titleprotected' => 'No puedes mover la página a esta ubicación, porque el nuevo título ha sido protegido para evitar su creación.',
'talkexists' => 'La página fue renombrada con éxito, pero la discusión no se pudo mover porque ya existe una en el título nuevo. Por favor incorpora sus contenidos manualmente.',
'movedto' => 'renombrado a',
'movetalk' => 'Renombrar la página de discusión asociada',
'move-subpages' => 'Intentar trasladar las subpáginas (hasta $1)',
'move-talk-subpages' => 'Intentar trasladar las subpáginas de discusión (hasta $1)',
'movepage-page-exists' => 'La página $1 ya existe, por lo que no puede ser renombrada automáticamente.',
'movepage-page-moved' => 'La página $1 ha sido trasladada a $2.',
'movepage-page-unmoved' => 'La página $1 no se ha podido trasladar a $2.',
'movepage-max-pages' => 'Se {{PLURAL:$1|ha trasladado un máximo de una página|han trasladado un máximo de $1 páginas}}, y no se van a mover más automáticamente.',
'movelogpage' => 'Registro de traslados',
'movelogpagetext' => 'Abajo se encuentra una lista de páginas trasladadas.',
'movesubpage' => '{{PLURAL:$1|Subpágina|Subpáginas}}',
'movesubpagetext' => 'Esta página tiene {{PLURAL:$1|la siguiente subpágina|las siguientes $1 subpáginas}}:',
'movenosubpage' => 'Esta página no tiene subpáginas.',
'movereason' => 'Motivo:',
'revertmove' => 'revertir',
'delete_and_move' => 'Borrar y trasladar',
'delete_and_move_text' => '==Se necesita borrado==

La página de destino ("[[:$1]]") ya existe. ¿Quiere borrarla para permitir al traslado?',
'delete_and_move_confirm' => 'Sí, borrar la página',
'delete_and_move_reason' => 'Borrada para trasladar [[$1]]',
'selfmove' => 'Los títulos de origen y destino son los mismos;
no se puede trasladar una página sobre sí misma.',
'immobile-source-namespace' => 'No se pueden trasladar páginas en el espacio de nombres «$1»',
'immobile-target-namespace' => 'No se puede trasladar páginas al espacio de nombres «$1»',
'immobile-target-namespace-iw' => 'Un enlace interwiki no es un destino válido para trasladar una página.',
'immobile-source-page' => 'Esta página no se puede renombrar.',
'immobile-target-page' => 'No se puede trasladar a tal título.',
'bad-target-model' => 'El destino deseado utiliza un modelo diferente de contenido. No se puede realizar la conversión de $1 a $2.',
'imagenocrossnamespace' => 'No se puede trasladar el fichero a otro espacio de nombres',
'nonfile-cannot-move-to-file' => 'No es posible mover un no-archivo al espacio de nombres de archivo',
'imagetypemismatch' => 'La nueva extensión de archivo no corresponde con su tipo',
'imageinvalidfilename' => 'El nombre del fichero de destino no es válido',
'fix-double-redirects' => 'Actualizar las redirecciones que apuntan al título original',
'move-leave-redirect' => 'Dejar una redirección',
'protectedpagemovewarning' => "'''Advertencia:''' Esta página ha sido bloqueada de tal manera que solamente usuarios con privilegios de administrador puedan trasladarla.
A continuación se muestra la última entrada de registro para referencia:",
'semiprotectedpagemovewarning' => "'''Nota:''' Esta página ha sido bloqueada para que  solamente usuarios registrados pueden moverla.
A continuación se muestra la última entrada de registro para referencia:",
'move-over-sharedrepo' => '== El archivo existe ==
[[:$1]] existe en un repositorio compartido. Mover el archivo a este título invalidará el archivo compartido.',
'file-exists-sharedrepo' => 'El nombre de archivo elegido ya está siendo usado en un repositorio compartido.
Por favor, elige otro nombre.',

# Export
'export' => 'Exportar páginas',
'exporttext' => 'Puedes exportar el texto y el historial de ediciones de una página en particular o de un conjunto de páginas a un texto XML. En el futuro, este texto podría importarse en otro wiki que ejecutase MediaWiki a través de [[Special:Import|importar página]].

Para exportar páginas, escribe los títulos en la caja de texto de abajo, un título por línea, y selecciona si quieres la versión actual junto a las versiones anteriores, con las líneas del historial, o sólo la versión actual con la información sobre la última edición.

En el último caso también puedes usar un enlace, por ejemplo [[{{#Special:Export}}/{{MediaWiki:Mainpage}}]] para la página "[[{{MediaWiki:Mainpage}}]]".',
'exportall' => 'Exportar todas las páginas',
'exportcuronly' => 'Incluye sólo la revisión actual, no el historial de revisiones al completo.',
'exportnohistory' => "----
'''Nota:''' Exportar el historial completo de páginas a través de este formulario ha sido deshabilitado debido a problemas de rendimiento del servidor.",
'exportlistauthors' => 'Incluir una lista completa de colaboradores para cada página',
'export-submit' => 'Exportar',
'export-addcattext' => 'Añadir páginas desde la categoría:',
'export-addcat' => 'Añadir',
'export-addnstext' => 'Agregar páginas del nombre del sitio:',
'export-addns' => 'Agregar',
'export-download' => 'Guardar como archivo',
'export-templates' => 'Incluir plantillas',
'export-pagelinks' => 'Incluir páginas enlazadas a una profundidad de:',

# Namespace 8 related
'allmessages' => 'Todos los mensajes de MediaWiki',
'allmessagesname' => 'Nombre',
'allmessagesdefault' => 'Texto predeterminado',
'allmessagescurrent' => 'Texto actual',
'allmessagestext' => 'Esta es una lista de mensajes del sistema disponibles en el espacio de nombres MediaWiki:
Por favor visita [//www.mediawiki.org/wiki/Localisation Localización MediaWiki] y [//translatewiki.net translatewiki.net] si deseas contribuir con la localización genérica MediaWiki.',
'allmessagesnotsupportedDB' => "Esta página no está disponible porque '''\$wgUseDatabaseMessages''' está deshabilitado.",
'allmessages-filter-legend' => 'Filtro',
'allmessages-filter' => 'Filtrar por estado de personalización:',
'allmessages-filter-unmodified' => 'Sin modificar',
'allmessages-filter-all' => 'Todos',
'allmessages-filter-modified' => 'Modificados',
'allmessages-prefix' => 'Filtrar por prefijo:',
'allmessages-language' => 'Idioma:',
'allmessages-filter-submit' => 'Ir',

# Thumbnails
'thumbnail-more' => 'Aumentar',
'filemissing' => 'Falta archivo',
'thumbnail_error' => 'Error al crear miniatura: $1',
'djvu_page_error' => 'Página DjVu fuera de rango',
'djvu_no_xml' => 'Imposible obtener XML para el archivo DjVu',
'thumbnail-temp-create' => 'No se ha podido crear el archivo temporal de la miniatura',
'thumbnail-dest-create' => 'No se ha podido guardar la miniatura',
'thumbnail_invalid_params' => 'Parámetros del thumbnail no válidos',
'thumbnail_dest_directory' => 'Incapaz de crear el directorio de destino',
'thumbnail_image-type' => 'Tipo de imagen no contemplado',
'thumbnail_gd-library' => 'Configuración de la librería GD incompleta: falta la función $1',
'thumbnail_image-missing' => 'El fichero parece no existir: $1',

# Special:Import
'import' => 'Importar páginas',
'importinterwiki' => 'Importación transwiki',
'import-interwiki-text' => 'Selecciona un wiki y un título de página para importar.
Las fechas de revisiones y los nombres de editores se preservarán.
Todas las importaciones transwiki se registran en el [[Special:Log/import|registro de importaciones]].',
'import-interwiki-source' => 'Wiki o página origen:',
'import-interwiki-history' => 'Copiar todas las versiones históricas para esta página',
'import-interwiki-templates' => 'Incluir todas las plantillas',
'import-interwiki-submit' => 'Importar',
'import-interwiki-namespace' => 'Espacio de nombres de destino:',
'import-interwiki-rootpage' => 'Página raíz del destino (opcional):',
'import-upload-filename' => 'Nombre de archivo:',
'import-comment' => 'Comentario:',
'importtext' => 'Por favor, exporta el archivo desde el wiki de origen usando la [[Special:Export|herramienta de exportación]], guárdalo en tu disco y súbelo aquí.',
'importstart' => 'Importando páginas...',
'import-revision-count' => '$1 {{PLURAL:$1|revisión|revisiones}}',
'importnopages' => 'No hay páginas que importar.',
'imported-log-entries' => 'Importados $1 {{PLURAL:$1|entradas de registro|entradas de registro}}.',
'importfailed' => 'La importación ha fallado: $1',
'importunknownsource' => 'Tipo de fuente de importación desconocida',
'importcantopen' => 'No se pudo importar el archivo',
'importbadinterwiki' => 'Enlace interwiki anómalo',
'importnotext' => 'Vacío o sin texto',
'importsuccess' => '¡La importación se ha realizado con éxito!',
'importhistoryconflict' => 'Existen revisiones en conflicto en el historial (puede que se haya importado esta página antes)',
'importnosources' => 'No hay fuentes de importación transwiki y no está permitido subir directamente el historial.',
'importnofile' => 'No se subieron archivos de importación.',
'importuploaderrorsize' => 'Falló la carga del archivo de importaciones.
Su tamaño es superior al máximo permitido.',
'importuploaderrorpartial' => 'Falló la subida del fichero de importación.
Se subió sólo parcialmente.',
'importuploaderrortemp' => 'Falló la subida del fichero de importación.
No hay un directorio temporal.',
'import-parse-failure' => 'Error de lectura al importar XML',
'import-noarticle' => '¡No hay páginas para importar!',
'import-nonewrevisions' => 'Todas las revisiones fueron previamente importadas.',
'xml-error-string' => '$1 en la línea $2, col $3 (byte $4): $5',
'import-upload' => 'Subir datos XML',
'import-token-mismatch' => 'Pérdida de datos de sesión. Por favor, inténtalo de nuevo.',
'import-invalid-interwiki' => 'No se puede importar de la wiki especificada.',
'import-error-edit' => 'La página $1 no se importó porque no tienes permisos para editarla.',
'import-error-create' => 'La página «$1» no se importó porque no tienes permisos para crearla.',
'import-error-interwiki' => 'La página "$1" no se ha importado porque su nombre está reservado para la vinculación externa (interwikis).',
'import-error-special' => 'La página "$1" no se ha importado porque pertenece a un espacio de nombres especial que no admite páginas.',
'import-error-invalid' => 'La página "$1" no se ha importado porque su nombre no es válido.',
'import-options-wrong' => '{{PLURAL:$2|Opción errónea|Opciones erróneas}}: <nowiki>$1</nowiki>',
'import-rootpage-invalid' => 'La página raíz dada es un título inválido.',
'import-rootpage-nosubpage' => 'El espacio de nombres "$1" de la página raíz no permite subpáginas.',

# Import log
'importlogpage' => 'Registro de importaciones',
'importlogpagetext' => 'Importaciones administrativas de páginas con historial desde otros wikis.',
'import-logentry-upload' => 'importó [[$1]] por subida de archivo',
'import-logentry-upload-detail' => '$1 {{PLURAL:$1|revisión|revisiones}}',
'import-logentry-interwiki' => 'transwikificada $1',
'import-logentry-interwiki-detail' => '$1 {{PLURAL:$1|revisión|revisiones}} desde $2',

# JavaScriptTest
'javascripttest' => 'Pruebas de JavaScript',
'javascripttest-title' => 'Pruebas de $1 en ejecución',
'javascripttest-pagetext-noframework' => 'Esta página está reservada para ejecutar pruebas de JavaScript.',
'javascripttest-pagetext-unknownframework' => 'Marco de pruebas desconocido "$1".',
'javascripttest-pagetext-frameworks' => 'Por favor, seleccione uno de los marcos de pruebas siguientes: $1',
'javascripttest-pagetext-skins' => 'Elija un aspecto (skin) para ejecutar las pruebas:',
'javascripttest-qunit-intro' => 'Consulte la [$1 documentación sobre las pruebas] en mediawiki.org.',
'javascripttest-qunit-heading' => 'Conjunto de pruebas MediaWiki JavaScript QUnit',

# Tooltip help for the actions
'tooltip-pt-userpage' => 'Tu página de {{gender:|usuario|usuaria}}',
'tooltip-pt-anonuserpage' => 'La página de usuario de la IP desde la que editas',
'tooltip-pt-mytalk' => 'Tu página de discusión',
'tooltip-pt-anontalk' => 'Discusión sobre ediciones hechas desde esta dirección IP',
'tooltip-pt-preferences' => 'Tus preferencias',
'tooltip-pt-watchlist' => 'Lista de páginas cuyos cambios vigilas',
'tooltip-pt-mycontris' => 'Lista de tus contribuciones',
'tooltip-pt-login' => 'Te recomendamos iniciar sesión, sin embargo no es obligatorio',
'tooltip-pt-anonlogin' => 'Te invitamos a registrarte, aunque no es obligatorio',
'tooltip-pt-logout' => 'Salir de la sesión',
'tooltip-ca-talk' => 'Discusión acerca del artículo',
'tooltip-ca-edit' => 'Puedes editar esta página. Utiliza el botón de previsualización antes de guardar',
'tooltip-ca-addsection' => 'Inicia una nueva sección',
'tooltip-ca-viewsource' => 'Esta página está protegida.
Puedes ver su código fuente',
'tooltip-ca-history' => 'Versiones anteriores de esta página y sus autores',
'tooltip-ca-protect' => 'Proteger esta página',
'tooltip-ca-unprotect' => 'Cambiar protección de esta página',
'tooltip-ca-delete' => 'Borrar esta página',
'tooltip-ca-undelete' => 'Restaurar las ediciones hechas a esta página antes de que fuese borrada',
'tooltip-ca-move' => 'Mover esta página',
'tooltip-ca-watch' => 'Añadir esta página a su lista de seguimiento',
'tooltip-ca-unwatch' => 'Borrar esta página de su lista de seguimiento',
'tooltip-search' => 'Buscar en {{SITENAME}}',
'tooltip-search-go' => 'Ir al artículo con este nombre exacto si existe',
'tooltip-search-fulltext' => 'Busca este texto en las páginas',
'tooltip-p-logo' => 'Visitar la página principal',
'tooltip-n-mainpage' => 'Visitar la página principal',
'tooltip-n-mainpage-description' => 'Visitar la página principal',
'tooltip-n-portal' => 'Acerca del proyecto, lo que puedes hacer, dónde encontrar información',
'tooltip-n-currentevents' => 'Información de contexto sobre acontecimientos actuales',
'tooltip-n-recentchanges' => 'Lista de cambios recientes en el wiki',
'tooltip-n-randompage' => 'Cargar una página al azar',
'tooltip-n-help' => 'El lugar para aprender',
'tooltip-t-whatlinkshere' => 'Lista de todas las páginas del wiki que enlazan aquí',
'tooltip-t-recentchangeslinked' => 'Cambios recientes en las páginas que enlazan con ésta',
'tooltip-feed-rss' => 'Sindicación RSS de esta página',
'tooltip-feed-atom' => 'Sindicación Atom de esta página',
'tooltip-t-contributions' => 'Lista de contribuciones de este usuario',
'tooltip-t-emailuser' => 'Enviar un mensaje de correo a este usuario',
'tooltip-t-upload' => 'Subir imágenes o archivos multimedia',
'tooltip-t-specialpages' => 'Lista de todas las páginas especiales',
'tooltip-t-print' => 'Versión imprimible de esta página',
'tooltip-t-permalink' => 'Enlace permanente a esta versión de la página',
'tooltip-ca-nstab-main' => 'Ver el artículo',
'tooltip-ca-nstab-user' => 'Ver la página de usuario',
'tooltip-ca-nstab-media' => 'Ver la página de multimedia',
'tooltip-ca-nstab-special' => 'Esta es una página especial, no se puede editar la página en sí',
'tooltip-ca-nstab-project' => 'Ver la página de proyecto',
'tooltip-ca-nstab-image' => 'Ver la página de la imagen',
'tooltip-ca-nstab-mediawiki' => 'Ver el mensaje de sistema',
'tooltip-ca-nstab-template' => 'Ver la plantilla',
'tooltip-ca-nstab-help' => 'Ver la página de ayuda',
'tooltip-ca-nstab-category' => 'Ver la página de categoría',
'tooltip-minoredit' => 'Marcar este cambio como menor',
'tooltip-save' => 'Guardar los cambios',
'tooltip-preview' => 'Previsualiza los cambios realizados. ¡Por favor, hazlo antes de grabar!',
'tooltip-diff' => 'Muestra los cambios que ha introducido en el texto.',
'tooltip-compareselectedversions' => 'Ver las diferencias entre las dos versiones seleccionadas de esta página.',
'tooltip-watch' => 'Añadir esta página a su lista de seguimiento',
'tooltip-watchlistedit-normal-submit' => 'Borrar páginas',
'tooltip-watchlistedit-raw-submit' => 'Actualizar lista de seguimiento',
'tooltip-recreate' => 'Recupera una página que ha sido borrada',
'tooltip-upload' => 'Empieza la subida',
'tooltip-rollback' => '«Revertir» revierte todas las ediciones del último usuario con un solo clic.',
'tooltip-undo' => '«Deshacer» revierte la edición seleccionada y abre la página de edición en el modo de previsualización.
Permite añadir una razón al resumen de edición.',
'tooltip-preferences-save' => 'Guardar las preferencias',
'tooltip-summary' => 'Introduce un breve resumen',

# Stylesheets
'common.css' => '/* Los estilos CSS definidos aquí aplicarán a todas las pieles (skins) */',
'standard.css' => '/* Los estilos CSS colocados aquí se aplicarán para todos los usuarios que usen la piel Standard */',
'nostalgia.css' => '/* Los estilos CSS colocados aquí se aplicarán para todos los usuarios que usen la piel Nostalgia */',
'cologneblue.css' => '/* Los estilos CSS colocados aquí se aplicarán para todos los usuarios que usen la piel Cologne Blue */',
'monobook.css' => '/* Los estilos CSS colocados aquí se aplicarán para todos los usuarios que usen la piel MonoBook */',
'myskin.css' => '/* Los estilos CSS colocados aquí se aplicarán para todos los usuarios que usen la piel MySkin */',
'chick.css' => '/* Los estilos CSS colocados aquí se aplicarán para todos los usuarios que usen la piel Chick */',
'simple.css' => '/* Los estilos CSS colocados aquí se aplicarán para todos los usuarios que usen la piel Simple */',
'modern.css' => '/* Los estilos CSS colocados aquí se aplicarán para todos los usuarios que usen la piel Modern */',
'vector.css' => '/* Los estilos CSS colocados aquí se aplicarán para todos los usuarios que usen la piel Vector */',
'print.css' => '/* Los estilos CSS colocados aquí afectarán la impresión */',
'handheld.css' => '/* Los estilos CSS colocados aquí afectarán a los dispositivos móviles basados en las pieles configuradas en $wgHandheldStyle */',
'noscript.css' => '/* Los estilos CSS colocados aquí se aplicarán a los usuarios que hayan desactivado el JavaScript en su navegador */',
'group-autoconfirmed.css' => '/* Los estilos CSS colocados aquí se aplicarán para todos los usuarios del grupo Usuarios autoconfirmados */',
'group-bot.css' => '/* Los estilos CSS colocados aquí se aplicarán para todos los usuarios del grupo Bots */',
'group-sysop.css' => '/* Los estilos CSS colocados aquí se aplicarán para todos los usuarios del grupo Administradores */',
'group-bureaucrat.css' => '/* Los estilos CSS colocados aquí se aplicarán para todos los usuarios del grupo Burócratas */',

# Scripts
'common.js' => '/* Cualquier código JavaScript escrito aquí se cargará para todos los usuarios en cada carga de página */',
'standard.js' => '/* Cualquier código JavaScript escrito aquí se cargará para todos los usuarios que usen la piel Estandar */',
'nostalgia.js' => '/* Cualquier código JavaScript escrito aquí se cargará para todos los usuarios que usen la piel Nostalgia. */',
'cologneblue.js' => '/* Cualquier código JavaScript escrito aquí se cargará para todos los usuarios que usen la piel Colonia azul */',
'monobook.js' => '/* El código JavaScript que se ponga aquí será cargado por los usuarios de la piel MonoBook */',
'myskin.js' => '/* Cualquier código JavaScript escrito aquí se cargará para todos los usuarios que usen la piel Mi piel */',
'chick.js' => '/* Cualquier código JavaScript escrito aquí se cargará para todos los usuarios que usen la piel Pollito */',
'simple.js' => '/* Cualquier código JavaScript escrito aquí se cargará para todos los usuarios que usen la piel Simple */',
'modern.js' => '/* Cualquier código JavaScript escrito aquí se cargará para todos los usuarios que usen la piel Moderna */',
'vector.js' => '/* Cualquier código JavaScript escrito aquí se cargará para todos los usuarios que usen la piel Vector */',
'group-autoconfirmed.js' => '/* Cualquier código JavaScript escrito aquí se cargará para todos los usuarios del grupo Usuarios autoconfirmados */',
'group-bot.js' => '/* Cualquier código JavaScript escrito aquí se cargará para todos los usuarios del grupo Bots */',
'group-sysop.js' => '/* Cualquier código JavaScript escrito aquí se cargará para todos los usuarios del grupo Administradores */',
'group-bureaucrat.js' => '/* Cualquier código JavaScript escrito aquí se cargará para todos los usuarios del grupo Burócratas */',

# Metadata
'notacceptable' => 'El servidor wiki no puede proveer los datos en un formato que su cliente (navegador) pueda entender.',

# Attribution
'anonymous' => '{{PLURAL:$1|Usuario anónimo|Usuarios anónimos}} de {{SITENAME}}',
'siteuser' => '{{GENDER:$1|Usuario|Usuaria}} $1 de {{SITENAME}}',
'anonuser' => '{{SITENAME}} usuario anónimo $1',
'lastmodifiedatby' => 'Esta página fue modificada por última vez en $2, $1 por $3.',
'othercontribs' => 'Basado en el trabajo de $1.',
'others' => 'otros',
'siteusers' => '{{PLURAL:$2|Usuario|Usuarios}} $1 de {{SITENAME}}',
'anonusers' => '{{SITENAME}} {{PLURAL:$2|usuario|usuarios}} anónimos $1',
'creditspage' => 'Créditos de la página',
'nocredits' => 'No hay información de créditos para esta página.',

# Spam protection
'spamprotectiontitle' => 'Filtro de protección contra spam',
'spamprotectiontext' => 'La página que quería guardar fue bloqueada por el filtro de spam.
Esto podría estar causado por un enlace a un sitio externo incluido en la lista negra.',
'spamprotectionmatch' => 'El siguiente texto es el que activó nuestro filtro de spam: $1',
'spambot_username' => 'Limpieza de spam de MediaWiki',
'spam_reverting' => 'Revirtiendo a la última versión que no contenga enlaces a $1',
'spam_blanking' => 'Todas las revisiones contienen enlaces a $1, blanqueando',
'spam_deleting' => 'Todas las revisiones que contienen enlaces a $1, en proceso de eliminación',

# Info page
'pageinfo-title' => 'Información para «$1»',
'pageinfo-not-current' => 'Lo sentimos, no es posible mostrar esta información para las revisiones antiguas.',
'pageinfo-header-basic' => 'Información básica',
'pageinfo-header-edits' => 'Historial de ediciones',
'pageinfo-header-restrictions' => 'Protección de página',
'pageinfo-header-properties' => 'Propiedades de página',
'pageinfo-display-title' => 'Visualizar el título',
'pageinfo-default-sort' => 'Criterio de ordenación predeterminado',
'pageinfo-length' => 'Longitud de la página (en bytes)',
'pageinfo-article-id' => 'Identificador ID de la página',
'pageinfo-language' => 'Idioma de la página',
'pageinfo-robot-policy' => 'Estado del motor de búsqueda',
'pageinfo-robot-index' => 'Indexable',
'pageinfo-robot-noindex' => 'No indexable',
'pageinfo-views' => 'Número de vistas',
'pageinfo-watchers' => 'Número de usuarios que vigilan la página',
'pageinfo-redirects-name' => 'Redirecciones a esta página',
'pageinfo-redirects-value' => '$1',
'pageinfo-subpages-name' => 'Subpáginas de esta página',
'pageinfo-subpages-value' => '$1 ($2 {{PLURAL:$2|redirección|redirecciones}}; $3 {{PLURAL:$3|no-redirección|no-redirecciones}})',
'pageinfo-firstuser' => 'Creador de la página',
'pageinfo-firsttime' => 'Fecha de creación de la página',
'pageinfo-lastuser' => 'Último editor',
'pageinfo-lasttime' => 'Fecha de la última edición',
'pageinfo-edits' => 'Número total de ediciones',
'pageinfo-authors' => 'Número total de autores distintos',
'pageinfo-recent-edits' => 'Número de ediciones recientes (en los últimos $1)',
'pageinfo-recent-authors' => 'Número de autores distintos recientes',
'pageinfo-magic-words' => '{{PLURAL:$1|Palabra mágica|Palabras mágicas}} ($1)',
'pageinfo-hidden-categories' => '{{PLURAL:$1|Categoría oculta|Categorías ocultas}} ($1)',
'pageinfo-templates' => '{{PLURAL:$1|plantilla incluida|plantillas incluidas}} ($1)',
'pageinfo-toolboxlink' => 'Información de la página',
'pageinfo-redirectsto' => 'Redirige a',
'pageinfo-redirectsto-info' => 'Información',
'pageinfo-contentpage' => 'Contado como página de contenido',
'pageinfo-contentpage-yes' => 'Sí',
'pageinfo-protect-cascading' => 'Protecciones en serie activadas',
'pageinfo-protect-cascading-yes' => 'Sí',
'pageinfo-protect-cascading-from' => 'Protecciones en serie activadas',

# Skin names
'skinname-standard' => 'Estándar',
'skinname-nostalgia' => 'Nostalgia',
'skinname-cologneblue' => 'Colonia azul',
'skinname-monobook' => 'MonoBook',
'skinname-myskin' => 'Mi piel',
'skinname-chick' => 'Pollito',
'skinname-simple' => 'Simple',
'skinname-modern' => 'Moderna',
'skinname-vector' => 'Vector',

# Patrolling
'markaspatrolleddiff' => 'Marcar como revisado',
'markaspatrolledtext' => 'Marcar este artículo como revisado',
'markedaspatrolled' => 'Marcado como revisado',
'markedaspatrolledtext' => 'La revisión seleccionada de [[:$1|$1]] ha sido marcada como revisada.',
'rcpatroldisabled' => 'Revisión de los Cambios Recientes deshabilitada',
'rcpatroldisabledtext' => 'La capacidad de revisar los Cambios Recientes está deshabilitada en este momento.',
'markedaspatrollederror' => 'No se puede marcar como patrullada',
'markedaspatrollederrortext' => 'Debes especificar una revisión para marcarla como patrullada.',
'markedaspatrollederror-noautopatrol' => 'No tienes permisos para marcar tus propios cambios como revisados.',

# Patrol log
'patrol-log-page' => 'Registro de revisiones',
'patrol-log-header' => 'Este es un registro de revisiones patrulladas.',
'log-show-hide-patrol' => '$1 registro de patrullaje',

# Image deletion
'deletedrevision' => 'Borrada revisión antigua $1',
'filedeleteerror-short' => 'Se produjo un error al borrar el archivo: $1',
'filedeleteerror-long' => 'Se han producido errores mientras se borraba el archivo:

$1',
'filedelete-missing' => 'No se pudo borrar el archivo "$1" porque no existe.',
'filedelete-old-unregistered' => 'La revisión de archivo "$1" no está en la base de datos.',
'filedelete-current-unregistered' => 'El archivo «$1» no existe en la base de datos.',
'filedelete-archive-read-only' => 'El servidor web no logra escribir en el directorio archivo "$1".',

# Browsing diffs
'previousdiff' => '← Edición anterior',
'nextdiff' => 'Edición siguiente →',

# Media information
'mediawarning' => "'''Atención''': Este fichero puede contener código malicioso.
Ejecutarlo podría comprometer la seguridad de su equipo.",
'imagemaxsize' => "Límite de tamaño de imagen:<br />''(para páginas de descripción de archivo)''",
'thumbsize' => 'Tamaño de las vistas en miniatura:',
'widthheight' => '$1 × $2',
'widthheightpage' => '$1 × $2, $3 {{PLURAL:|página|páginas}}',
'file-info' => 'tamaño de archivo: $1; tipo MIME: $2',
'file-info-size' => '$1 × $2 píxeles; tamaño de archivo: $3; tipo MIME: $4',
'file-info-size-pages' => '$1 × $2 píxeles, tamaño de archivo: $3, tipo MIME: $4, $5 {{PLURAL:$5|página|páginas}}',
'file-nohires' => 'No disponible a mayor resolución.',
'svg-long-desc' => 'archivo SVG, nominalmente $1 × $2 píxeles, tamaño de archivo: $3',
'svg-long-desc-animated' => 'Archivo SVG animado, nominalmente de $1 × $2 píxeles, tamaño del archivo: $3',
'show-big-image' => 'Resolución original',
'show-big-image-preview' => 'Tamaño de esta previsualización: $1.',
'show-big-image-other' => '{{PLURAL:$2|Otra resolución|Otras resoluciones}}: $1.',
'show-big-image-size' => '$1 × $2 píxeles',
'file-info-gif-looped' => 'bucleado',
'file-info-gif-frames' => '$1 {{PLURAL:$1|frame|frames}}',
'file-info-png-looped' => 'bucleado',
'file-info-png-repeat' => 'reproducido $1 {{PLURAL:$1|vez|veces}}',
'file-info-png-frames' => '$1 {{PLURAL:$1|marco|marcos}}',
'file-no-thumb-animation' => "'''Nota: debido a limitaciones técnicas, las miniaturas de este archivo no están animadas.'''",
'file-no-thumb-animation-gif' => "'''Nota: Debido a limitaciones técnicas, las miniaturas de imágenes GIF de alta resolución como esta no están animadas.'''",

# Special:NewFiles
'newimages' => 'Galería de imágenes nuevas',
'imagelisttext' => "Debajo hay una lista de '''$1''' {{PLURAL:$1|imagen|imágenes}} ordenadas $2.",
'newimages-summary' => 'Esta página especial muestra una galería de los últimos ficheros subidos.',
'newimages-legend' => 'Nombre del fichero',
'newimages-label' => 'Nombre del fichero (o una parte):',
'showhidebots' => '($1 bots)',
'noimages' => 'No hay nada que ver.',
'ilsubmit' => 'Buscar',
'bydate' => 'por fecha',
'sp-newimages-showfrom' => 'Mostrar nuevas imágenes empezando por $2, $1',

# Video information, used by Language::formatTimePeriod() to format lengths in the above messages
'seconds-abbrev' => '$1s',
'minutes-abbrev' => '$1m',
'hours-abbrev' => '$1h',
'days-abbrev' => '$1d',
'seconds' => '{{PLURAL:$1|un segundo|$1 segundos}}',
'minutes' => '{{PLURAL:$1|un minuto|$1 minutos}}',
'hours' => '{{PLURAL:$1|una hora|$1 horas}}',
'days' => '{{PLURAL:$1|un día|$1 días}}',
'ago' => 'hace $1',

# Bad image list
'bad_image_list' => 'El formato es el siguiente:

Solo se reconocen elementos de lista (líneas que comienzan con «*»).
El primer enlace de cada línea debe ser un enlace al archivo que se quiere bloquear.
Todos los demás enlaces en la misma línea se tomarán como excepciones (es decir, páginas donde sí se puede usar el archivo).',

# Metadata
'metadata' => 'Metadatos',
'metadata-help' => 'Este archivo contiene información adicional (metadatos), probablemente añadida por la cámara digital, el escáner o el programa usado para crearlo o digitalizarlo. Si el archivo ha sido modificado desde su estado original, pueden haberse perdido algunos detalles.',
'metadata-expand' => 'Mostrar datos detallados',
'metadata-collapse' => 'Ocultar datos detallados',
'metadata-fields' => 'Los campos de metadatos que se listan en este mensaje se mostrarán en la página de descripción de la imagen aún cuando la tabla de metadatos esté plegada.
Existen otros campos que se mantendrán ocultos por defecto.
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
'exif-imagewidth' => 'Anchura',
'exif-imagelength' => 'Altura',
'exif-bitspersample' => 'Bits por componente',
'exif-compression' => 'Esquema de compresión',
'exif-photometricinterpretation' => 'Composición de pixel',
'exif-orientation' => 'Orientación',
'exif-samplesperpixel' => 'Número de componentes',
'exif-planarconfiguration' => 'Distribución de datos',
'exif-ycbcrsubsampling' => 'Razón de submuestreo de Y a C',
'exif-ycbcrpositioning' => 'Posicionamientos Y y C',
'exif-xresolution' => 'Resolución horizontal',
'exif-yresolution' => 'Resolución vertical',
'exif-stripoffsets' => 'Localización de datos de imagen',
'exif-rowsperstrip' => 'Número de filas por banda',
'exif-stripbytecounts' => 'Bytes por banda comprimida',
'exif-jpeginterchangeformat' => 'Desplazamiento al JPEG SOI',
'exif-jpeginterchangeformatlength' => 'Bytes de datos JPEG',
'exif-whitepoint' => 'Cromacidad de punto blanco',
'exif-primarychromaticities' => 'Cromacidades primarias',
'exif-ycbcrcoefficients' => 'Coeficientes de la matriz de transformación de espacio de color',
'exif-referenceblackwhite' => 'Pareja de valores blanco y negro de referencia',
'exif-datetime' => 'Fecha y hora de modificación del archivo',
'exif-imagedescription' => 'Título de la imagen',
'exif-make' => 'Fabricante de la cámara',
'exif-model' => 'Modelo de cámara',
'exif-software' => 'Software usado',
'exif-artist' => 'Autor',
'exif-copyright' => 'Titular de los derechos de autor',
'exif-exifversion' => 'Versión Exif',
'exif-flashpixversion' => 'Versión admitida de Flashpix',
'exif-colorspace' => 'Espacio de color',
'exif-componentsconfiguration' => 'Significado de cada componente',
'exif-compressedbitsperpixel' => 'Modo de compresión de la imagen',
'exif-pixelydimension' => 'Ancho de la imagen',
'exif-pixelxdimension' => 'Altura de la imagen',
'exif-usercomment' => 'Comentarios de usuario',
'exif-relatedsoundfile' => 'Archivo de audio relacionado',
'exif-datetimeoriginal' => 'Fecha y hora de la generación de los datos',
'exif-datetimedigitized' => 'Fecha y hora de la digitalización',
'exif-subsectime' => 'Fecha y hora (precisión por debajo del segundo)',
'exif-subsectimeoriginal' => 'Fecha y hora de la generación de los datos (precisión por debajo del segundo)',
'exif-subsectimedigitized' => 'Fecha y hora de la digitalización (precisón por debajo del segundo)',
'exif-exposuretime' => 'Tiempo de exposición',
'exif-exposuretime-format' => '$1 seg ($2)',
'exif-fnumber' => 'Número F',
'exif-exposureprogram' => 'Programa de exposición',
'exif-spectralsensitivity' => 'Sensibilidad espectral',
'exif-isospeedratings' => 'Calificación de velocidad ISO',
'exif-shutterspeedvalue' => 'Velocidad de obturación APEX',
'exif-aperturevalue' => 'Apertura APEX',
'exif-brightnessvalue' => 'Brillo APEX',
'exif-exposurebiasvalue' => 'Sesgo de exposición',
'exif-maxaperturevalue' => 'Valor máximo de apertura',
'exif-subjectdistance' => 'Distancia al sujeto',
'exif-meteringmode' => 'Modo de medición',
'exif-lightsource' => 'Fuente de luz',
'exif-flash' => 'Flash',
'exif-focallength' => 'Longitud focal de la lente',
'exif-subjectarea' => 'Área del sujeto',
'exif-flashenergy' => 'Energía del flash',
'exif-focalplanexresolution' => 'Resolución X del plano focal',
'exif-focalplaneyresolution' => 'Resolución Y del plano focal',
'exif-focalplaneresolutionunit' => 'Unidad de resolución del plano focal',
'exif-subjectlocation' => 'Localización del sujeto',
'exif-exposureindex' => 'Índice de exposición',
'exif-sensingmethod' => 'Método de sensor',
'exif-filesource' => 'Fuente de archivo',
'exif-scenetype' => 'Tipo de escena',
'exif-customrendered' => 'Procesador personalizado de imagen',
'exif-exposuremode' => 'Modo de exposición',
'exif-whitebalance' => 'Balance de blanco',
'exif-digitalzoomratio' => 'Razón de zoom digital',
'exif-focallengthin35mmfilm' => 'Longitud focal en película de 35 mm',
'exif-scenecapturetype' => 'Tipo de captura de escena',
'exif-gaincontrol' => 'Control de escena',
'exif-contrast' => 'Contraste',
'exif-saturation' => 'Saturación',
'exif-sharpness' => 'Agudeza',
'exif-devicesettingdescription' => 'Descripción de los ajustes del dispositivo',
'exif-subjectdistancerange' => 'Rango de distancia al sujeto',
'exif-imageuniqueid' => 'ID único de imagen',
'exif-gpsversionid' => 'Versión de la etiqueta GPS',
'exif-gpslatituderef' => 'Latitud norte o sur',
'exif-gpslatitude' => 'Latitud',
'exif-gpslongituderef' => 'Longitud este u oeste',
'exif-gpslongitude' => 'Longitud',
'exif-gpsaltituderef' => 'Refencia de altitud',
'exif-gpsaltitude' => 'Altitud',
'exif-gpstimestamp' => 'Tiempo GPS (reloj atómico)',
'exif-gpssatellites' => 'Satélites usados para la medición',
'exif-gpsstatus' => 'Estado del receptor',
'exif-gpsmeasuremode' => 'Modo de medición',
'exif-gpsdop' => 'Precisión de medición',
'exif-gpsspeedref' => 'Unidad de velocidad',
'exif-gpsspeed' => 'Velocidad del receptor GPS',
'exif-gpstrackref' => 'Referencia para la dirección del movimiento',
'exif-gpstrack' => 'Dirección del movimiento',
'exif-gpsimgdirectionref' => 'Referencia de la dirección de imágen',
'exif-gpsimgdirection' => 'Dirección de imagen',
'exif-gpsmapdatum' => 'Utilizados datos de medición geodésica',
'exif-gpsdestlatituderef' => 'Referencia para la latitud del destino',
'exif-gpsdestlatitude' => 'Destino de latitud',
'exif-gpsdestlongituderef' => 'Referencia para la longitud del destino',
'exif-gpsdestlongitude' => 'Longitud del destino',
'exif-gpsdestbearingref' => 'Referencia para la orientación al destino',
'exif-gpsdestbearing' => 'Orientación del destino',
'exif-gpsdestdistanceref' => 'Referencia para la distancia al destino',
'exif-gpsdestdistance' => 'Distancia al destino',
'exif-gpsprocessingmethod' => 'Nombre del método de procesado GPS',
'exif-gpsareainformation' => 'Nombre de la área GPS',
'exif-gpsdatestamp' => 'Fecha GPS',
'exif-gpsdifferential' => 'Corrección diferencial de GPS',
'exif-jpegfilecomment' => 'Comentario de archivo JPEG',
'exif-keywords' => 'Palabras clave',
'exif-worldregioncreated' => 'Región del mundo en la que se tomó la imagen',
'exif-countrycreated' => 'País en el que se tomó la imagen',
'exif-countrycodecreated' => 'Código para el país en el que la imagen fue tomada',
'exif-provinceorstatecreated' => 'Provincia o estado en el que la imagen fue tomada',
'exif-citycreated' => 'Ciudad en la que se tomó la imagen',
'exif-sublocationcreated' => 'Región de la ciudad en la que la foto fue tomada',
'exif-worldregiondest' => 'Región del mundo mostrada',
'exif-countrydest' => 'País mostrado',
'exif-countrycodedest' => 'Código de país mostrado',
'exif-provinceorstatedest' => 'Provincia o estado mostrado',
'exif-citydest' => 'Ciudad mostrada',
'exif-sublocationdest' => 'Región de la ciudad mostrada',
'exif-objectname' => 'Título breve',
'exif-specialinstructions' => 'Instrucciones especiales',
'exif-headline' => 'Encabezado',
'exif-credit' => 'Crédito/proveedor',
'exif-source' => 'Fuente',
'exif-editstatus' => 'Estado editorial de la imagen',
'exif-urgency' => 'Urgencia',
'exif-fixtureidentifier' => 'Nome del elemento habitual',
'exif-locationdest' => 'Ubicación mostrada',
'exif-locationdestcode' => 'Código de la ubicación mostrada',
'exif-objectcycle' => 'Hora del día para la cual está destinado este archivo',
'exif-contact' => 'Información de contacto',
'exif-writer' => 'Escritor',
'exif-languagecode' => 'Idioma',
'exif-iimversion' => 'Versión IIM',
'exif-iimcategory' => 'Categoría',
'exif-iimsupplementalcategory' => 'Categorías suplementarias',
'exif-datetimeexpires' => 'No usar después de',
'exif-datetimereleased' => 'Lanzado el',
'exif-originaltransmissionref' => 'Código de ubicación de transmisión original',
'exif-identifier' => 'Identificador',
'exif-lens' => 'Lente utilizada',
'exif-serialnumber' => 'Número de serie de la cámara',
'exif-cameraownername' => 'Propietario de la cámara',
'exif-label' => 'Etiqueta',
'exif-datetimemetadata' => 'Fecha en la cual fueron modificados por última vez los metadatos',
'exif-nickname' => 'Nombre informal de la imagen',
'exif-rating' => 'Valoración (sobre 5)',
'exif-rightscertificate' => 'Certificado de gestión de derechos',
'exif-copyrighted' => 'Estado de copyright',
'exif-copyrightowner' => 'Titular del copyright',
'exif-usageterms' => 'Términos de uso',
'exif-webstatement' => 'Declaración de derechos de autor en línea',
'exif-originaldocumentid' => 'Id. único del documento original',
'exif-licenseurl' => 'URL para la licencia de copyright',
'exif-morepermissionsurl' => 'Información de licencia alternativa',
'exif-attributionurl' => 'Cuando reutilices este trabajo, por favor enlaza a',
'exif-preferredattributionname' => 'Al volver a utilizar este trabajo, por favor da crédito',
'exif-pngfilecomment' => 'Comentario de archivo PNG',
'exif-disclaimer' => 'Aviso legal',
'exif-contentwarning' => 'Advertencia de contenido',
'exif-giffilecomment' => 'Comentario de archivo GIF',
'exif-intellectualgenre' => 'Tipo de elemento',
'exif-subjectnewscode' => 'Código de asunto',
'exif-scenecode' => 'Código de escena IPTC',
'exif-event' => 'Evento representado',
'exif-organisationinimage' => 'Organización representada',
'exif-personinimage' => 'Persona representada',
'exif-originalimageheight' => 'Altura de la imagen antes de que fuera recortada',
'exif-originalimagewidth' => 'Ancho de la imagen antes de que fuera recortada',

# EXIF attributes
'exif-compression-1' => 'Sin comprimir',
'exif-compression-2' => 'CCITT Group 3 1-Dimensional Modified Huffman run length encoding',
'exif-compression-3' => 'Codificación de fax CCITT grupo 3',
'exif-compression-4' => 'Codificación de fax CCITT grupo 4',

'exif-copyrighted-true' => 'Con derechos de autor',
'exif-copyrighted-false' => 'Dominio público',

'exif-unknowndate' => 'Fecha desconocida',

'exif-orientation-1' => 'Normal',
'exif-orientation-2' => 'Volteada horizontalmente',
'exif-orientation-3' => 'Rotada 180°',
'exif-orientation-4' => 'Volteada verticalmente',
'exif-orientation-5' => 'Rotada 90° CCW y volteada verticalmente',
'exif-orientation-6' => 'Rotada 90° a la izquierda',
'exif-orientation-7' => 'Rotada 90° CW y volteada verticalmente',
'exif-orientation-8' => 'Rotada 90° a la derecha',

'exif-planarconfiguration-1' => 'formato panorámico',
'exif-planarconfiguration-2' => 'formato plano',

'exif-colorspace-65535' => 'Sin calibrar',

'exif-componentsconfiguration-0' => 'no existe',

'exif-exposureprogram-0' => 'No definido',
'exif-exposureprogram-1' => 'Manual',
'exif-exposureprogram-2' => 'Programa normal',
'exif-exposureprogram-3' => 'Prioridad de apertura',
'exif-exposureprogram-4' => 'Prioridad de obturador',
'exif-exposureprogram-5' => 'Programa creativo (con prioridad a la profundidad de campo)',
'exif-exposureprogram-6' => 'Programa de acción (alta velocidad de obturador)',
'exif-exposureprogram-7' => 'Modo retrato (para primeros planos con el fondo desenfocado)',
'exif-exposureprogram-8' => 'Modo panorama (para fotos panorámicas con el fondo enfocado)',

'exif-subjectdistance-value' => '$1 metros',

'exif-meteringmode-0' => 'Desconocido',
'exif-meteringmode-1' => 'Media',
'exif-meteringmode-2' => 'Promedio centrado',
'exif-meteringmode-3' => 'Puntual',
'exif-meteringmode-4' => 'Multipunto',
'exif-meteringmode-5' => 'Patrón',
'exif-meteringmode-6' => 'Parcial',
'exif-meteringmode-255' => 'Otro',

'exif-lightsource-0' => 'Desconocido',
'exif-lightsource-1' => 'Luz diurna',
'exif-lightsource-2' => 'Fluorescente',
'exif-lightsource-3' => 'Tungsteno (luz incandescente)',
'exif-lightsource-4' => 'Flash',
'exif-lightsource-9' => 'Buen tiempo',
'exif-lightsource-10' => 'Tiempo nublado',
'exif-lightsource-11' => 'Penumbra',
'exif-lightsource-12' => 'Fluorescente de luz diurna (D 5700 – 7100K)',
'exif-lightsource-13' => 'Fluorescente de día soleado (N 4600 – 5400K)',
'exif-lightsource-14' => 'Fluorescente blanco frío (W 3900 – 4500K)',
'exif-lightsource-15' => 'Fluroescente blanco (WW 3200 – 3700K)',
'exif-lightsource-17' => 'Luz estándar A',
'exif-lightsource-18' => 'Luz estándar B',
'exif-lightsource-19' => 'Luz estándar C',
'exif-lightsource-24' => 'Tungsteno de estudio ISO',
'exif-lightsource-255' => 'Otra fuente de luz',

# Flash modes
'exif-flash-fired-0' => 'No se disparó el flash',
'exif-flash-fired-1' => 'Flash disparado',
'exif-flash-return-0' => 'no hay función de detección del retorno de la luz estroboscópica',
'exif-flash-return-2' => 'no se detectó retorno de luz estroboscópica',
'exif-flash-return-3' => 'detectado retorno de luz estroboscópica',
'exif-flash-mode-1' => 'disparo de flash forzado',
'exif-flash-mode-2' => 'disparo de flash anulado',
'exif-flash-mode-3' => 'modo automático',
'exif-flash-function-1' => 'Modo sin flash',
'exif-flash-redeye-1' => 'modo de reducción de ojos rojos',

'exif-focalplaneresolutionunit-2' => 'pulgadas',

'exif-sensingmethod-1' => 'No definido',
'exif-sensingmethod-2' => 'Sensor de área de color de un chip',
'exif-sensingmethod-3' => 'Sensor de área de color de dos chips',
'exif-sensingmethod-4' => 'Sensor de área de color de tres chips',
'exif-sensingmethod-5' => 'Sensor de área secuencial de color',
'exif-sensingmethod-7' => 'Sensor trilineal',
'exif-sensingmethod-8' => 'Sensor lineal secuencial de color',

'exif-filesource-3' => 'Cámara digital',

'exif-scenetype-1' => 'Una imagen directamente fotografiada',

'exif-customrendered-0' => 'Proceso normal',
'exif-customrendered-1' => 'Proceso personalizado',

'exif-exposuremode-0' => 'Exposición automática',
'exif-exposuremode-1' => 'Exposición manual',
'exif-exposuremode-2' => 'Auto bracket',

'exif-whitebalance-0' => 'Balance de blanco automático',
'exif-whitebalance-1' => 'Balance de blanco manual',

'exif-scenecapturetype-0' => 'Estándar',
'exif-scenecapturetype-1' => 'Paisaje',
'exif-scenecapturetype-2' => 'Retrato',
'exif-scenecapturetype-3' => 'Escena nocturna',

'exif-gaincontrol-0' => 'Ninguna',
'exif-gaincontrol-1' => 'Bajo aumento de ganancia',
'exif-gaincontrol-2' => 'Alto aumento de ganancia',
'exif-gaincontrol-3' => 'Baja disminución de ganancia',
'exif-gaincontrol-4' => 'Alta disminución de ganancia',

'exif-contrast-0' => 'Normal',
'exif-contrast-1' => 'Suave',
'exif-contrast-2' => 'Duro',

'exif-saturation-0' => 'Normal',
'exif-saturation-1' => 'Baja saturación',
'exif-saturation-2' => 'Alta saturación',

'exif-sharpness-0' => 'Normal',
'exif-sharpness-1' => 'Suave',
'exif-sharpness-2' => 'Dura',

'exif-subjectdistancerange-0' => 'Desconocida',
'exif-subjectdistancerange-1' => 'Macro',
'exif-subjectdistancerange-2' => 'Vista cercana',
'exif-subjectdistancerange-3' => 'Vista lejana',

# Pseudotags used for GPSLatitudeRef and GPSDestLatitudeRef
'exif-gpslatitude-n' => 'Latitud norte',
'exif-gpslatitude-s' => 'Latitud sur',

# Pseudotags used for GPSLongitudeRef and GPSDestLongitudeRef
'exif-gpslongitude-e' => 'Longitud este',
'exif-gpslongitude-w' => 'Longitud oeste',

# Pseudotags used for GPSAltitudeRef
'exif-gpsaltitude-above-sealevel' => '$1 {{PLURAL:$1|metro|metros}} sobre el nivel del mar',
'exif-gpsaltitude-below-sealevel' => '$1 {{PLURAL:$1|metro|metros}} bajo el nivel del mar',

'exif-gpsstatus-a' => 'Medida en progreso',
'exif-gpsstatus-v' => 'Interoperabilidad de medida',

'exif-gpsmeasuremode-2' => 'Medición bidimensional',
'exif-gpsmeasuremode-3' => 'Medición tridimensional',

# Pseudotags used for GPSSpeedRef
'exif-gpsspeed-k' => 'Kilómetros por hora',
'exif-gpsspeed-m' => 'Millas por hora',
'exif-gpsspeed-n' => 'Nudos',

# Pseudotags used for GPSDestDistanceRef
'exif-gpsdestdistance-k' => 'Kilómetros',
'exif-gpsdestdistance-m' => 'Millas',
'exif-gpsdestdistance-n' => 'Millas náuticas',

'exif-gpsdop-excellent' => 'Excelente ($1)',
'exif-gpsdop-good' => 'Bueno ( $1 )',
'exif-gpsdop-moderate' => 'Moderado ($1)',
'exif-gpsdop-fair' => 'Pasable ($1)',
'exif-gpsdop-poor' => 'Pobre ( $1 )',

'exif-objectcycle-a' => 'Sólo por la mañana',
'exif-objectcycle-p' => 'Sólo por el atardecer',
'exif-objectcycle-b' => 'Tanto por la mañana y por la tarde',

# Pseudotags used for GPSTrackRef, GPSImgDirectionRef and GPSDestBearingRef
'exif-gpsdirection-t' => 'Dirección real',
'exif-gpsdirection-m' => 'Dirección magnética',

'exif-ycbcrpositioning-1' => 'Centrado',
'exif-ycbcrpositioning-2' => 'Co-localizados',

'exif-dc-contributor' => 'Colaboradores',
'exif-dc-coverage' => 'Ámbito espacial o temporal del medio',
'exif-dc-date' => 'Fecha(s)',
'exif-dc-publisher' => 'Editorial',
'exif-dc-relation' => 'Medios relacionados',
'exif-dc-rights' => 'Derechos',
'exif-dc-source' => 'Medios de origen',
'exif-dc-type' => 'Tipo de medio',

'exif-rating-rejected' => 'Rechazado',

'exif-isospeedratings-overflow' => 'Más de 65535',

'exif-iimcategory-ace' => 'Arte, cultura y entretenimiento',
'exif-iimcategory-clj' => 'Crimen y ley',
'exif-iimcategory-dis' => 'Desastres y accidentes',
'exif-iimcategory-fin' => 'Economía y negocios',
'exif-iimcategory-edu' => 'Educación',
'exif-iimcategory-evn' => 'Medio ambiente',
'exif-iimcategory-hth' => 'Salud',
'exif-iimcategory-hum' => 'Interés humano',
'exif-iimcategory-lab' => 'Trabajo',
'exif-iimcategory-lif' => 'Estilo de vida y ocio',
'exif-iimcategory-pol' => 'Política',
'exif-iimcategory-rel' => 'Religión y creencias',
'exif-iimcategory-sci' => 'Ciencia y tecnología',
'exif-iimcategory-soi' => 'Cuestiones sociales',
'exif-iimcategory-spo' => 'Deportes',
'exif-iimcategory-war' => 'Guerra, conflictos y disturbios',
'exif-iimcategory-wea' => 'Clima',

'exif-urgency-normal' => 'Normal ($1)',
'exif-urgency-low' => 'Bajo ($1)',
'exif-urgency-high' => 'Alto ($1)',
'exif-urgency-other' => 'Prioridad definida por el usuario ($1)',

# External editor support
'edit-externally' => 'Editar este archivo usando una aplicación externa',
'edit-externally-help' => '(Lee las [//www.mediawiki.org/wiki/Manual:External_editors instrucciones de configuración] -en inglés- para más información)',

# 'all' in various places, this might be different for inflected languages
'watchlistall2' => 'todos',
'namespacesall' => 'todos',
'monthsall' => 'todos',
'limitall' => 'Todos',

# E-mail address confirmation
'confirmemail' => 'Confirmar dirección de correo electrónico',
'confirmemail_noemail' => 'No tienes una dirección de correo electrónico válida en tus [[Special:Preferences|preferencias de usuario]].',
'confirmemail_text' => '{{SITENAME}} requiere la validación de tu dirección de correo antes de usarlo. Pulsa el botón de abajo para enviar la confirmación.
El correo incluirá un enlace con un código. Introdúcelo para confirmar la validez de tu dirección.',
'confirmemail_pending' => 'Ya se te ha enviado un código de confirmación; si creaste una cuenta recientemente, puede que tengas que esperar unos minutos para que te llegue antes de intentar pedir un nuevo código.',
'confirmemail_send' => 'Envíar el código de confimación.',
'confirmemail_sent' => 'Confirmación de correo enviada.',
'confirmemail_oncreate' => 'Se ha enviado un código de confirmación a tu dirección de correo electrónico.
Este código no es necesario para iniciar sesión, pero necesitarás proporcionarlo antes de activar cualquier función basada en correo electrónico en el wiki.',
'confirmemail_sendfailed' => 'No fue posible enviar el correo de confirmación. Por favor, comprueba la validez de la dirección de correo.

El servidor indicó el error: $1',
'confirmemail_invalid' => 'Código de confirmación incorrecto. El código debe haber expirado.',
'confirmemail_needlogin' => 'Necesitas $1 para confirmar tu dirección electrónica.',
'confirmemail_success' => 'Su dirección de correo ha sido confirmada
Ahora puedes [[Special:UserLogin|identificarte]] y colaborar en el wiki.',
'confirmemail_loggedin' => 'Tu dirección de correo electrónico ha sido confirmada.',
'confirmemail_error' => 'Algo salió mal al guardar su confirmación.',
'confirmemail_subject' => 'confirmación de la dirección de correo de {{SITENAME}}',
'confirmemail_body' => 'Alguien, probablemente usted mismo, ha registrado desde la dirección IP $1 la cuenta "$2" en {{SITENAME}}, utilizando esta dirección de correo.

Para confirmar que esta cuenta realmente le pertenece y activar el correo en {{SITENAME}}, siga este enlace:

$3

Si la cuenta *no* es suya, siga este otro enlace para cancelar la confirmación de la dirección de correo:

$5

El código de confirmación expirará en $4.',
'confirmemail_body_changed' => 'Alguien, probablemente tú,
ha modificado la dirección de correo electrónico asociado a la cuenta "$2" hacia esta en {{SITENAME}}, desde la dirección IP $1.

Para confirmar que esta cuenta realmente te pertenece y reactivar las funciones de correo electrónico en {{SITENAME}}, abre este enlace en su navegador:

$3

Si la cuenta *no* te pertenece, sigue el siguiente enlace para cancelar la confirmación:

$5

Este código de confirmación expirará el $4.',
'confirmemail_body_set' => 'Alguien, probablemente tu desde la dirección IP $1,
ha cambiado la dirección de correo electrónico de la cuenta $2 a esta dirección en {{SITENAME}}.

Para confirmar que esta cuenta realmente te pertenece y reactivar las capacidades del correo electrónico en {{SITENAME}}, abre este enlace en tu navegador:

$3

Si la cuenta *no* te pertenece sigue entonces este otro enlace para cancelar la confirmación del correo electrónico:

$5

Este código de confirmación caducará el $4.',
'confirmemail_invalidated' => 'La confirmación de la dirección de correo electrónico ha sido cancelada',
'invalidateemail' => 'Cancelar confirmación de correo electrónico',

# Scary transclusion
'scarytranscludedisabled' => '[Transclusión interwiki está deshabilitada]',
'scarytranscludefailed' => '[Obtención de plantilla falló para $1]',
'scarytranscludefailed-httpstatus' => '[Error de recuperación de plantilla para $1: HTTP $2]',
'scarytranscludetoolong' => '[El URL es demasiado largo]',

# Delete conflict
'deletedwhileediting' => "'''Aviso''': ¡Esta página fue borrada después de que usted empezara a editar!",
'confirmrecreate' => "El usuario [[User:$1|$1]] ([[User talk:$1|disc.]]) borró esta página después de que comenzaste a editarla, por el motivo:
: ''$2''
Confirma que realmente quieres volver a crear esta página.",
'confirmrecreate-noreason' => 'El usuario [[User:$1|$1]] ([[User talk:$1|discusión]]) borró esta página después de que comenzaras a editarla. Por favor confirma que realmente quieres recrear esta página.',
'recreate' => 'Crear de nuevo',

# action=purge
'confirm_purge_button' => 'Aceptar',
'confirm-purge-top' => '¿Limpiar la caché de esta página?',
'confirm-purge-bottom' => 'Purgar una página limpia la caché y fuerza a que aparezca la versión más actual.',

# action=watch/unwatch
'confirm-watch-button' => 'Aceptar',
'confirm-watch-top' => '¿Añadir esta página a tu lista de seguimiento?',
'confirm-unwatch-button' => 'Aceptar',
'confirm-unwatch-top' => '¿Quitar esta página de tu lista de seguimiento?',

# Separators for various lists, etc.
'comma-separator' => ',&#32;',

# Multipage image navigation
'imgmultipageprev' => '← página anterior',
'imgmultipagenext' => 'siguiente página →',
'imgmultigo' => '¡Ir!',
'imgmultigoto' => 'Ir a la página $1',

# Table pager
'ascending_abbrev' => 'asc',
'descending_abbrev' => 'desc',
'table_pager_next' => 'Página siguiente',
'table_pager_prev' => 'Página anterior',
'table_pager_first' => 'Primera página',
'table_pager_last' => 'Última página',
'table_pager_limit' => 'Mostrar $1 elementos por página',
'table_pager_limit_label' => 'Elementos por página:',
'table_pager_limit_submit' => 'Ir',
'table_pager_empty' => 'No hay resultados',

# Auto-summaries
'autosumm-blank' => 'Página blanqueada',
'autosumm-replace' => 'Página reemplazada por «$1»',
'autoredircomment' => 'Página redirigida a [[$1]]',
'autosumm-new' => 'Página creada con «$1»',

# Live preview
'livepreview-loading' => 'Cargando…',
'livepreview-ready' => 'Cargando… ¡Listo!',
'livepreview-failed' => '¡La previsualización al vuelo falló!
Prueba la previsualización normal.',
'livepreview-error' => 'No se pudo conectar:  $1  «$2».
Intenta usar la previsualización normal.',

# Friendlier slave lag warnings
'lag-warn-normal' => 'Los cambios realizados en {{PLURAL:$1|el último segundo|los últimos $1 segundos}} podrían no mostrarse en esta lista.',
'lag-warn-high' => 'Debido a una alta latencia el servidor de base de datos, los cambios realizados en {{PLURAL:$1|el último segundo|los últimos $1 segundos}} podrían no mostrarse en esta lista.',

# Watchlist editor
'watchlistedit-numitems' => 'Tu lista de seguimiento tiene {{PLURAL:$1|una página |$1 páginas}}, excluyendo las páginas de discusión.',
'watchlistedit-noitems' => 'Tu lista de seguimiento está vacía.',
'watchlistedit-normal-title' => 'Editar lista de seguimiento',
'watchlistedit-normal-legend' => 'Borrar títulos de la lista de seguimiento',
'watchlistedit-normal-explain' => 'A continuación se listan las páginas en tu lista de seguimiento.
Para quitar un título, marca la casilla junto a él, y pulsa «{{int:Watchlistedit-normal-submit}}».
También puedes [[Special:EditWatchlist/raw|editar la lista en crudo]].',
'watchlistedit-normal-submit' => 'Borrar páginas',
'watchlistedit-normal-done' => '{{PLURAL:$1|1 página ha sido borrada|$1 páginas han sido borradas}} de tu lista de seguimiento:',
'watchlistedit-raw-title' => 'Editar lista de seguimiento en crudo',
'watchlistedit-raw-legend' => 'Editar tu lista de seguimiento en modo texto',
'watchlistedit-raw-explain' => 'A continuación se listan las páginas en tu lista de seguimiento. Esta lista puede editarse añadiendo o eliminando líneas de la lista;
un título por línea.
Cuando acabes, pulsa «{{int:Watchlistedit-raw-submit}}».
También puedes [[Special:EditWatchlist|usar el editor estándar]].',
'watchlistedit-raw-titles' => 'Páginas:',
'watchlistedit-raw-submit' => 'Actualizar lista de seguimiento',
'watchlistedit-raw-done' => 'Tu lista de seguimiento se ha actualizado.',
'watchlistedit-raw-added' => '{{PLURAL:$1|Se ha añadido una página|Se han añadido $1 páginas}}:',
'watchlistedit-raw-removed' => '{{PLURAL:$1|Una página ha sido borrada|$1 páginas han sido borradas}}:',

# Watchlist editing tools
'watchlisttools-view' => 'Ver cambios',
'watchlisttools-edit' => 'Ver y editar tu lista de seguimiento',
'watchlisttools-raw' => 'Editar lista de seguimiento en crudo',

# Signatures
'signature' => '[[{{ns:user}}:$1|$2]] ([[{{ns:user_talk}}:$1|discusión]])',

# Core parser functions
'unknown_extension_tag' => 'Etiqueta desconocida «$1»',
'duplicate-defaultsort' => "'''Atención:''' La clave de ordenamiento predeterminada «$2» anula la clave de ordenamiento anterior «$1».",

# Special:Version
'version' => 'Versión',
'version-extensions' => 'Extensiones instaladas',
'version-specialpages' => 'Páginas especiales',
'version-parserhooks' => 'Extensiones del analizador sintáctico',
'version-variables' => 'Variables',
'version-antispam' => 'Prevención de spam',
'version-skins' => 'Pieles',
'version-other' => 'Otro',
'version-mediahandlers' => 'Manejadores multimedia',
'version-hooks' => 'Extensiones',
'version-extension-functions' => 'Funciones de extensiones',
'version-parser-extensiontags' => 'Etiquetas de extensiones sintácticas',
'version-parser-function-hooks' => 'Extensiones de funciones sintácticas',
'version-hook-name' => 'Nombre de la extensión',
'version-hook-subscribedby' => 'Suscrito por',
'version-version' => '(Versión $1)',
'version-license' => 'Licencia',
'version-poweredby-credits' => "Este wiki funciona gracias a '''[//www.mediawiki.org/ MediaWiki]''', copyright © 2001-$1 $2.",
'version-poweredby-others' => 'otros',
'version-credits-summary' => 'Queremos reconocer a las siguientes personas por su contribución a [[Special:Version|MediaWiki]].',
'version-license-info' => 'MediaWiki es software libre; puedes redistribuírlo y/o modificarlo bajo los términos de la Licencia General Pública GNU publicada por la Fundación del Software Libre; ya sea la versión 2 de la licencia, o (a tu elección) cualquier versión posterior.

MediaWiki es distribuído con la esperanza de que será útil, pero SIN NINGUNA GARANTÍA; ni siquiera con la garantía implícita de COMERCIALIZACIÓN ó ADAPTACIÓN A UN PROPÓSITO PARTICULAR. Véase la Licencia Pública General GNU para mayores detalles.

Has recibido [{{SERVER}}{{SCRIPTPATH}}/COPYING una copia de la Licencia Pública General GNU] junto a este programa; si no es así, escríbale a la Fundación del Software Libre, Inc., Calle Franklin 51, Quinto Piso, Boston, MA 02110-1301, EE.UU. ó [//www.gnu.org/licenses/old-licenses/gpl-2.0.html léela en línea].',
'version-software' => 'Software instalado',
'version-software-product' => 'Producto',
'version-software-version' => 'Versión',
'version-entrypoints' => 'URL del punto de entrada',
'version-entrypoints-header-entrypoint' => 'Punto de entrada',
'version-entrypoints-header-url' => 'Dirección URL',
'version-entrypoints-articlepath' => '[https://www.mediawiki.org/wiki/Manual:$wgArticlePath Ruta del artículo]',
'version-entrypoints-scriptpath' => '[https://www.mediawiki.org/wiki/Manual:$wgScriptPath Ruta de la secuencia de comandos (script)]',

# Special:FilePath
'filepath' => 'Ruta de archivo',
'filepath-page' => 'Archivo:',
'filepath-submit' => 'Ir',
'filepath-summary' => 'Esta página devuelve la ruta completa de un archivo.
Las imágenes se muestran en resolución máxima, otros tipos de archivo se inician directamente con su programa asociado.',

# Special:FileDuplicateSearch
'fileduplicatesearch' => 'Búsqueda de archivos duplicados',
'fileduplicatesearch-summary' => 'Búsqueda de archivos duplicados en base a su valor hash.',
'fileduplicatesearch-legend' => 'Busca duplicados',
'fileduplicatesearch-filename' => 'Nombre del fichero:',
'fileduplicatesearch-submit' => 'Buscar',
'fileduplicatesearch-info' => '$1 × $2 píxeles<br />Tamaño: $3<br />Tipo MIME: $4',
'fileduplicatesearch-result-1' => 'El archivo «$1» no tiene duplicados idénticos.',
'fileduplicatesearch-result-n' => 'El archivo «$1» tiene {{PLURAL:$2|1 duplicado idéntico|$2 duplicados idénticos}}.',
'fileduplicatesearch-noresults' => 'Ningún archivo con el nombre «$1» encontrado.',

# Special:SpecialPages
'specialpages' => 'Páginas especiales',
'specialpages-note' => '----
* Páginas especiales normales
* <span class="mw-specialpagerestricted">Páginas especiales restringidas.</span>
* <span class="mw-specialpagecached">Páginas especiales en caché (podrían ser obsoletas).</span>',
'specialpages-group-maintenance' => 'Reportes de mantenimiento',
'specialpages-group-other' => 'Otras páginas especiales',
'specialpages-group-login' => 'Iniciar sesión / Crear cuenta',
'specialpages-group-changes' => 'Cambios recientes y registros',
'specialpages-group-media' => 'Páginas sobre archivos',
'specialpages-group-users' => 'Usuarios y permisos',
'specialpages-group-highuse' => 'Páginas sobre usos',
'specialpages-group-pages' => 'Listas de páginas',
'specialpages-group-pagetools' => 'Herramientas de páginas',
'specialpages-group-wiki' => 'Herramientas y datos del wiki',
'specialpages-group-redirects' => 'Búsquedas y redirecciones',
'specialpages-group-spam' => 'Herramientas anti-SPAM',

# Special:BlankPage
'blankpage' => 'Página vacía',
'intentionallyblankpage' => 'Esta pagina está en blanco de manera intencionada.',

# External image whitelist
'external_image_whitelist' => ' #Deja esta línea exactamente como está<pre>
#Colocar fragmentos de expresiones regulares (sólo la parte que va entre los //) debajo
#Estos coincidirán con los URLs de las imágenes externas (hotlinked)
#Aquellos que coincidan serán mostrados como imágenes, de lo contrario solamente un vínculo a la imagen será mostrada
#Las líneas que empiezan por «#» se consideran comentarios
#Esta es insensible a las mayúsculas

#Colocar todos los fragmentos regex arriba de esta línea. Deja esta línea exactamente como está</pre>',

# Special:Tags
'tags' => 'Cambio de etiquetas válida',
'tag-filter' => 'Filtro de [[Special:Tags|etiquetas]]:',
'tag-filter-submit' => 'Filtro',
'tags-title' => 'Etiquetas',
'tags-intro' => 'Esta página lista las etiquetas con las que el software puede marcar una edición y su significado.',
'tags-tag' => 'Nombre de etiqueta',
'tags-display-header' => 'Apariencia de la lista de cambios',
'tags-description-header' => 'Descripción completa de significado',
'tags-hitcount-header' => 'Cambios etiquetados',
'tags-edit' => 'editar',
'tags-hitcount' => '$1 {{PLURAL:$1|cambio|cambios}}',

# Special:ComparePages
'comparepages' => 'Comparar páginas',
'compare-selector' => 'Comparar revisiones de página',
'compare-page1' => 'Página 1',
'compare-page2' => 'Página 2',
'compare-rev1' => 'Revisión 1',
'compare-rev2' => 'Revisión 2',
'compare-submit' => 'Comparar',
'compare-invalid-title' => 'El título especificado es inválido.',
'compare-title-not-exists' => 'El título especificado no existe.',
'compare-revision-not-exists' => 'La revisión especificada no existe.',

# Database error messages
'dberr-header' => 'Este wiki tiene un problema',
'dberr-problems' => 'Lo sentimos.
Este sitio está experimentando dificultades técnicas.',
'dberr-again' => 'Prueba a recargar dentro de unos minutos.',
'dberr-info' => '(No se puede contactar con la base de datos del servidor: $1)',
'dberr-usegoogle' => 'Mientras tanto puedes probar buscando a través de Google.',
'dberr-outofdate' => 'Ten en cuenta que su índice de nuestro contenido puede estar desactualizado.',
'dberr-cachederror' => 'La siguiente es una página guardada de la página solicitada, y puede no estar actualizada.',

# HTML forms
'htmlform-invalid-input' => 'Hay problemas con alguno de los datos que has ingresado',
'htmlform-select-badoption' => 'El valor que especificaste no es una opción válida.',
'htmlform-int-invalid' => 'El valor que especificaste no es un entero.',
'htmlform-float-invalid' => 'El valor que ha especificado no es un número.',
'htmlform-int-toolow' => 'El valor que especificaste está debajo del mínimo de $1',
'htmlform-int-toohigh' => 'El valor que especificaste está arriba del máximo de $1',
'htmlform-required' => 'Este valor es obligatorio',
'htmlform-submit' => 'Enviar',
'htmlform-reset' => 'Deshacer cambios',
'htmlform-selectorother-other' => 'Otro',

# SQLite database support
'sqlite-has-fts' => '$1 con soporte para búsqueda de texto completo',
'sqlite-no-fts' => '$1 sin soporte para búsqueda de texto completo',

# New logging system
'logentry-delete-delete' => '$1 borró la página «$3»',
'logentry-delete-restore' => '$1 restauró la página «$3»',
'logentry-delete-event' => '$1 modificó la visibilidad de {{PLURAL:$5|un evento del registro|$5 eventos del registro}} en $3: $4',
'logentry-delete-revision' => '$1 modificó la visibilidad de {{PLURAL:$5|una edición|$5 ediciones}} en la página $3: $4',
'logentry-delete-event-legacy' => '$1 modificó la visibilidad de los eventos del registro en $3',
'logentry-delete-revision-legacy' => '$1 modificó la visibilidad de las ediciones en la página $3',
'logentry-suppress-delete' => '$1 borró (restricciones para administradores aplicadas) la página $3',
'logentry-suppress-event' => '$1 modificó secretamente la visibilidad de {{PLURAL:$5|un evento del registro|$5 eventos del registro}} en $3: $4',
'logentry-suppress-revision' => '$1 modificó secretamente la visibilidad de {{PLURAL:$5|una edición|$5 ediciones}} en la página $3: $4',
'logentry-suppress-event-legacy' => '$1 modificó secretamente la visibilidad de los eventos del registro en $3',
'logentry-suppress-revision-legacy' => '$1 modificó secretamente la visibilidad de las ediciones en la página $3',
'revdelete-content-hid' => 'contenido oculto',
'revdelete-summary-hid' => 'resumen de edición oculto',
'revdelete-uname-hid' => 'nombre de usuario oculto',
'revdelete-content-unhid' => 'contenido mostrado',
'revdelete-summary-unhid' => 'resumen de edición mostrado',
'revdelete-uname-unhid' => 'nombre de usuario mostrado',
'revdelete-restricted' => 'restricciones para administradores aplicadas',
'revdelete-unrestricted' => 'restricciones para administradores eliminadas',
'logentry-move-move' => '$1 movió la página $3 a $4',
'logentry-move-move-noredirect' => '$1 movió la página $3 a $4 sin dejar una redirección',
'logentry-move-move_redir' => '$1 movió la página $3 a $4 sobre una redirección',
'logentry-move-move_redir-noredirect' => '$1 movió la página $3 a $4 sobre una redirección, sin dejar redirección',
'logentry-patrol-patrol' => '$1 marcó la edición $4 de la página $3 como patrullada',
'logentry-patrol-patrol-auto' => '$1 marcó automáticamente la edición $4 de la página $3 como patrullada',
'logentry-newusers-newusers' => '$1 creó una cuenta de usuario',
'logentry-newusers-create' => '$1 creó una cuenta de usuario',
'logentry-newusers-create2' => '$1 creó una cuenta de usuario $3',
'logentry-newusers-autocreate' => 'La cuenta $1 fue creada automáticamente',
'newuserlog-byemail' => 'contraseña enviada por correo electrónico',

# Feedback
'feedback-bugornote' => 'Si estás preparado para describir en detalle un problema técnico, [$1 informa de un bug] por favor.

En otro caso, puedes usar el siguiente formulario. Tu comentario será añadido a la página [$3 $2], junto con tu nombre de usuario y el navegador que usas.',
'feedback-subject' => 'Asunto:',
'feedback-message' => 'Mensaje:',
'feedback-cancel' => 'Cancelar',
'feedback-submit' => 'Enviar comentarios',
'feedback-adding' => 'Añadiendo comentarios a la página...',
'feedback-error1' => 'Error: No se reconoce resultado de API',
'feedback-error2' => 'Error: Falló la edición',
'feedback-error3' => 'Error: No hay respuesta de la API',
'feedback-thanks' => '¡Gracias! Su comentario ha sido anotado en la página [$2  $1].',
'feedback-close' => 'Hecho',
'feedback-bugcheck' => '¡Perfecto! Únicamente comprueba que no sea un [$1 fallo conocido].',
'feedback-bugnew' => 'Lo he comprobado. Informar de un nuevo fallo.',

# Search suggestions
'searchsuggest-search' => 'Buscar',
'searchsuggest-containing' => 'que contiene...',

# API errors
'api-error-badaccess-groups' => 'No puedes cargar archivos en este wiki.',
'api-error-badtoken' => 'Error interno: Símbolo incorrecto.',
'api-error-copyuploaddisabled' => 'La subida por URL está desactivada en este servidor.',
'api-error-duplicate' => 'Ya existe{{PLURAL:$1| [$2 otro archivo]|[$2 n otros archivos]}} en el sitio con el mismo contenido.',
'api-error-duplicate-archive' => 'Ya {{PLURAL:$1|existía [$2 otro archivo]|existían [$2 otros archivos]}} en el sitio con el mismo contenido, pero {{PLURAL:$1|fue|fueron}} {{PLURAL:$1|eliminado|eliminados}}.',
'api-error-duplicate-archive-popup-title' => '{{PLURAL:$1|Archivo|Archivos}} {{PLURAL:$1|duplicado|duplicados}} que ya se han eliminado',
'api-error-duplicate-popup-title' => '{{PLURAL:$1|Archivo|Archivos}} {{PLURAL:$1|duplicado|duplicados}}',
'api-error-empty-file' => 'El archivo que enviaste estaba vacío.',
'api-error-emptypage' => 'No se pueden crear páginas nuevas que estén vacías.',
'api-error-fetchfileerror' => 'Error interno: Algo salió mal mientras se obtenía el archivo.',
'api-error-fileexists-forbidden' => 'Ya existe el archivo "$1" y no se puede sobreescribir.',
'api-error-fileexists-shared-forbidden' => 'Ya existe "$1" en el repositorio de archivos compartidos y no se puede sobreescribir.',
'api-error-file-too-large' => 'El archivo que enviaste era demasiado grande.',
'api-error-filename-tooshort' => 'El nombre de archivo es demasiado corto.',
'api-error-filetype-banned' => 'Este tipo de archivo está prohibido.',
'api-error-filetype-banned-type' => '$1 {{PLURAL:$4|no es un tipo de archivo permitido|no son tipos de archivos permitidos}}. {{PLURAL:$3|El tipo de archivo permitido es|Los tipos de archivos permitidos son}} $2.',
'api-error-filetype-missing' => 'El archivo no tiene extensión de archivo.',
'api-error-hookaborted' => 'La modificación que intentaste hacer fue cancelada por un gancho de extensión.',
'api-error-http' => 'Error interno: No se puede conectar al servidor.',
'api-error-illegal-filename' => 'El nombre de archivo no está permitido.',
'api-error-internal-error' => 'Error interno: Algo salió mal al procesar tu subida en el wiki.',
'api-error-invalid-file-key' => 'Error interno: No se encontró el archivo en el almacenamiento temporal.',
'api-error-missingparam' => 'Error interno: Faltan parámetros en la solicitud.',
'api-error-missingresult' => 'Error interno: No se pudo determinar si la copia tuvo éxito.',
'api-error-mustbeloggedin' => 'Debes iniciar sesión para subir archivos.',
'api-error-mustbeposted' => 'Error interno: La solicitud requiere HTTP POST.',
'api-error-noimageinfo' => 'La carga se realizó correctamente, pero el servidor no nos dio ninguna información sobre el archivo.',
'api-error-nomodule' => 'Error interno: No hay un módulo de carga configurado.',
'api-error-ok-but-empty' => 'Error interno: No hay respuesta del servidor.',
'api-error-overwrite' => 'No se permite sobrescribir un archivo existente.',
'api-error-stashfailed' => 'Error interno: El servidor no pudo almacenar el archivo temporal.',
'api-error-timeout' => 'El servidor no respondió en el plazo previsto.',
'api-error-unclassified' => 'Ocurrió un error desconocido.',
'api-error-unknown-code' => 'Error desconocido: «$1»',
'api-error-unknown-error' => 'Error interno: Algo salió mal al intentar cargar el archivo.',
'api-error-unknown-warning' => 'Advertencia desconocida: $1',
'api-error-unknownerror' => 'Error desconocido: «$1».',
'api-error-uploaddisabled' => 'Las subidas están desactivadas en este wiki.',
'api-error-verification-error' => 'Este archivo puede estar dañado, o tiene una extensión incorrecta.',

# Durations
'duration-seconds' => '$1 {{PLURAL:$1|segundo|segundos}}',
'duration-minutes' => '$1 {{PLURAL:$1|minuto|minutos}}',
'duration-hours' => '$1 {{PLURAL:$1|hora|horas}}',
'duration-days' => '$1 {{PLURAL:$1|día|días}}',
'duration-weeks' => '$1 {{PLURAL:$1|semana|semanas}}',
'duration-years' => '$1 {{PLURAL: $1|año|años}}',
'duration-decades' => '$1 {{PLURAL:$1|década|décadas}}',
'duration-centuries' => '$1 {{PLURAL:$1|siglo|siglos}}',
'duration-millennia' => '$1 {{PLURAL:$1|milenio|milenios}}',

);
