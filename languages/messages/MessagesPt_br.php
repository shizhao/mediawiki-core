<?php
/** Brazilian Portuguese (português do Brasil)
 *
 * See MessagesQqq.php for message documentation incl. usage of parameters
 * To improve a translation please visit http://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Alcali
 * @author Alchimista
 * @author Bani
 * @author Brion
 * @author BrunaaAa
 * @author Brunoy Anastasiya Seryozhenko
 * @author Capmo
 * @author Carla404
 * @author Chicocvenancio
 * @author Crazymadlover
 * @author Daemorris
 * @author Danielsouzat
 * @author Diego Queiroz
 * @author Eduardo.mps
 * @author Emufarmers
 * @author Everton137
 * @author Francisco Leandro
 * @author GKnedo
 * @author Giro720
 * @author GoEThe
 * @author Hamilton Abreu
 * @author Helder.wiki
 * @author Jaideraf
 * @author Jesielt
 * @author Jorge Morais
 * @author Kaganer
 * @author Leonardo.stabile
 * @author LeonardoG
 * @author Lijealso
 * @author Luckas Blade
 * @author Malafaya
 * @author ManoDbo
 * @author McDutchie
 * @author MetalBrasil
 * @author Pedroca cerebral
 * @author Ppena
 * @author Rafael Vargas
 * @author Raylton P. Sousa
 * @author Rodrigo Calanca Nishino
 * @author Sir Lestaty de Lioncourt
 * @author Teles
 * @author TheGabrielZaum
 * @author Urhixidur
 * @author Vuln
 * @author Waldir
 * @author Yves Marques Junqueira
 * @author לערי ריינהארט
 * @author 555
 */

$fallback = 'pt';

$namespaceNames = array(
	NS_MEDIA            => 'Mídia',
	NS_SPECIAL          => 'Especial',
	NS_TALK             => 'Discussão',
	NS_USER             => 'Usuário',
	NS_USER_TALK        => 'Usuário_Discussão',
	NS_PROJECT_TALK     => '$1_Discussão',
	NS_FILE             => 'Arquivo',
	NS_FILE_TALK        => 'Arquivo_Discussão',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'MediaWiki_Discussão',
	NS_TEMPLATE         => 'Predefinição',
	NS_TEMPLATE_TALK    => 'Predefinição_Discussão',
	NS_HELP             => 'Ajuda',
	NS_HELP_TALK        => 'Ajuda_Discussão',
	NS_CATEGORY         => 'Categoria',
	NS_CATEGORY_TALK    => 'Categoria_Discussão',
);

$namespaceAliases = array(
	'Imagem' => NS_FILE,
	'Imagem_Discussão' => NS_FILE_TALK,
	'Ficheiro' => NS_FILE,
	'Ficheiro_Discussão' => NS_FILE_TALK,
);

$namespaceGenderAliases = array(
	NS_USER => array( 'male' => 'Usuário', 'female' => 'Usuária' ),
	NS_USER_TALK => array( 'male' => 'Usuário_Discussão', 'female' => 'Usuária_Discussão' ),
);

$defaultDateFormat = 'dmy';

$dateFormats = array(

	'dmy time' => 'H"h"i"min"',
	'dmy date' => 'j "de" F "de" Y',
	'dmy both' => 'H"h"i"min" "de" j "de" F "de" Y',

);

$separatorTransformTable = array( ',' => "\xc2\xa0", '.' => ',' );

$specialPageAliases = array(
	'Activeusers'               => array( 'Usuários_ativos' ),
	'Allmessages'               => array( 'Todas_as_mensagens', 'Todas_mensagens' ),
	'Allpages'                  => array( 'Todas_as_páginas', 'Todos_os_artigos', 'Todas_páginas', 'Todos_artigos' ),
	'Ancientpages'              => array( 'Páginas_inativas', 'Artigos_inativos' ),
	'Badtitle'                  => array( 'Título_inválido' ),
	'Blankpage'                 => array( 'Página_em_branco' ),
	'Block'                     => array( 'Bloquear', 'Bloquear_IP', 'Bloquear_utilizador', 'Bloquear_usuário' ),
	'Blockme'                   => array( 'Bloquear-me', 'Auto-bloqueio' ),
	'Booksources'               => array( 'Fontes_de_livros' ),
	'BrokenRedirects'           => array( 'Redirecionamentos_quebrados' ),
	'Categories'                => array( 'Categorias' ),
	'ChangePassword'            => array( 'Trocar_senha', 'Repor_senha' ),
	'ComparePages'              => array( 'Comparar_páginas' ),
	'Confirmemail'              => array( 'Confirmar_e-mail', 'Confirmar_email' ),
	'Contributions'             => array( 'Contribuições' ),
	'CreateAccount'             => array( 'Criar_conta' ),
	'Deadendpages'              => array( 'Páginas_sem_saída', 'Artigos_sem_saída' ),
	'DeletedContributions'      => array( 'Contribuições_eliminadas', 'Edições_eliminadas' ),
	'Disambiguations'           => array( 'Páginas_de_desambiguação', 'Desambiguar', 'Desambiguações' ),
	'DoubleRedirects'           => array( 'Redirecionamentos_duplos' ),
	'EditWatchlist'             => array( 'Editar_lista_de_páginas_vigiadas' ),
	'Emailuser'                 => array( 'Contatar_usuário', 'Contactar_usuário', 'Contactar_utilizador' ),
	'Export'                    => array( 'Exportar' ),
	'Fewestrevisions'           => array( 'Páginas_com_menos_edições', 'Artigos_com_menos_edições', 'Artigos_menos_editados' ),
	'FileDuplicateSearch'       => array( 'Busca_de_arquivos_duplicados', 'Busca_de_ficheiros_duplicados' ),
	'Filepath'                  => array( 'Diretório_de_arquivo', 'Diretório_de_ficheiro' ),
	'Import'                    => array( 'Importar' ),
	'Invalidateemail'           => array( 'Invalidar_e-mail' ),
	'BlockList'                 => array( 'Registro_de_bloqueios', 'IPs_bloqueados', 'Utilizadores_bloqueados', 'Usuários_bloqueados', 'Registo_de_bloqueios' ),
	'LinkSearch'                => array( 'Pesquisar_links' ),
	'Listadmins'                => array( 'Lista_de_administradores', 'Administradores', 'Admins', 'Lista_de_admins' ),
	'Listbots'                  => array( 'Lista_de_robôs', 'Bots', 'Lista_de_bots' ),
	'Listfiles'                 => array( 'Lista_de_arquivos', 'Lista_de_imagens', 'Lista_de_ficheiros' ),
	'Listgrouprights'           => array( 'Listar_privilégios_de_grupos' ),
	'Listredirects'             => array( 'Lista_de_redirecionamentos', 'Redirecionamentos' ),
	'Listusers'                 => array( 'Lista_de_usuários', 'Lista_de_utilizadores' ),
	'Lockdb'                    => array( 'Bloquear_banco_de_dados', 'Bloquear_a_base_de_dados' ),
	'Log'                       => array( 'Registro', 'Registos', 'Registros', 'Registo' ),
	'Lonelypages'               => array( 'Páginas_órfãs', 'Artigos_órfãos', 'Páginas_sem_afluentes', 'Artigos_sem_afluentes' ),
	'Longpages'                 => array( 'Páginas_longas', 'Artigos_extensos' ),
	'MergeHistory'              => array( 'Fundir_históricos', 'Fundir_edições' ),
	'MIMEsearch'                => array( 'Busca_MIME' ),
	'Mostcategories'            => array( 'Páginas_com_mais_categorias', 'Artigos_com_mais_categorias' ),
	'Mostimages'                => array( 'Imagens_com_mais_afluentes', 'Ficheiros_com_mais_afluentes', 'Arquivos_com_mais_afluentes' ),
	'Mostlinked'                => array( 'Páginas_com_mais_afluentes', 'Artigos_com_mais_afluentes' ),
	'Mostlinkedcategories'      => array( 'Categorias_com_mais_afluentes' ),
	'Mostlinkedtemplates'       => array( 'Predefinições_com_mais_afluentes' ),
	'Mostrevisions'             => array( 'Páginas_com_mais_edições', 'Artigos_com_mais_edições' ),
	'Movepage'                  => array( 'Mover_página', 'Mover', 'Mover_artigo' ),
	'Mycontributions'           => array( 'Minhas_contribuições', 'Minhas_edições' ),
	'Mypage'                    => array( 'Minha_página' ),
	'Mytalk'                    => array( 'Minha_discussão' ),
	'Newimages'                 => array( 'Arquivos_novos', 'Imagens_novas', 'Ficheiros_novos' ),
	'Newpages'                  => array( 'Páginas_novas', 'Artigos_novos' ),
	'Popularpages'              => array( 'Páginas_populares', 'Artigos_populares' ),
	'Preferences'               => array( 'Preferências' ),
	'Prefixindex'               => array( 'Índice_de_prefixo', 'Índice_por_prefixo' ),
	'Protectedpages'            => array( 'Páginas_protegidas', 'Artigos_protegidos' ),
	'Protectedtitles'           => array( 'Títulos_protegidos' ),
	'Randompage'                => array( 'Aleatória', 'Aleatório', 'Página_aleatória', 'Artigo_aleatório' ),
	'Randomredirect'            => array( 'Redirecionamento_aleatório' ),
	'Recentchanges'             => array( 'Mudanças_recentes', 'Recentes' ),
	'Recentchangeslinked'       => array( 'Mudanças_relacionadas', 'Novidades_relacionadas' ),
	'Revisiondelete'            => array( 'Eliminar_edição', 'Eliminar_revisão', 'Apagar_edição', 'Apagar_revisão' ),
	'Search'                    => array( 'Busca', 'Buscar', 'Procurar', 'Pesquisar', 'Pesquisa' ),
	'Shortpages'                => array( 'Páginas_curtas', 'Artigos_curtos' ),
	'Specialpages'              => array( 'Páginas_especiais' ),
	'Statistics'                => array( 'Estatísticas' ),
	'Tags'                      => array( 'Etiquetas' ),
	'Unblock'                   => array( 'Desbloquear' ),
	'Uncategorizedcategories'   => array( 'Categorias_sem_categorias' ),
	'Uncategorizedimages'       => array( 'Arquivos_sem_categorias', 'Imagens_sem_categorias', 'Ficheiros_sem_categorias' ),
	'Uncategorizedpages'        => array( 'Páginas_sem_categorias', 'Artigos_sem_categorias' ),
	'Uncategorizedtemplates'    => array( 'Predefinições_não_categorizadas', 'Predefinições_sem_categorias' ),
	'Undelete'                  => array( 'Restaurar', 'Restaurar_páginas_eliminadas', 'Restaurar_artigos_eliminados' ),
	'Unlockdb'                  => array( 'Desbloquear_banco_de_dados', 'Desbloquear_a_base_de_dados' ),
	'Unusedcategories'          => array( 'Categorias_não_utilizadas', 'Categorias_sem_uso' ),
	'Unusedimages'              => array( 'Arquivos_sem_uso', 'Arquivos_não_utilizados', 'Imagens_sem_uso', 'Imagens_não_utilizadas', 'Ficheiros_sem_uso', 'Ficheiros_não_utilizados' ),
	'Unusedtemplates'           => array( 'Predefinições_sem_uso', 'Predefinições_não_utilizadas' ),
	'Unwatchedpages'            => array( 'Páginas_não-vigiadas', 'Páginas_não_vigiadas', 'Artigos_não-vigiados', 'Artigos_não_vigiados' ),
	'Upload'                    => array( 'Carregar_arquivo', 'Carregar_imagem', 'Carregar_ficheiro', 'Enviar' ),
	'Userlogin'                 => array( 'Autenticar-se', 'Entrar', 'Login' ),
	'Userlogout'                => array( 'Sair', 'Logout' ),
	'Userrights'                => array( 'Privilégios', 'Direitos', 'Estatutos' ),
	'Version'                   => array( 'Versão', 'Sobre' ),
	'Wantedcategories'          => array( 'Categorias_pedidas', 'Categorias_em_falta', 'Categorias_inexistentes' ),
	'Wantedfiles'               => array( 'Arquivos_pedidos', 'Arquivos_em_falta', 'Ficheiros_em_falta', 'Imagens_em_falta' ),
	'Wantedpages'               => array( 'Páginas_pedidas', 'Páginas_em_falta', 'Artigos_em_falta', 'Artigos_pedidos' ),
	'Wantedtemplates'           => array( 'Predefinições_pedidas', 'Predefinições_em_falta' ),
	'Watchlist'                 => array( 'Páginas_vigiadas', 'Artigos_vigiados', 'Vigiados' ),
	'Whatlinkshere'             => array( 'Páginas_afluentes', 'Artigos_afluentes' ),
	'Withoutinterwiki'          => array( 'Páginas_sem_interwikis', 'Artigos_sem_interwikis' ),
);

$magicWords = array(
	'redirect'                  => array( '0', '#REDIRECIONAMENTO', '#REDIRECT' ),
	'notoc'                     => array( '0', '__SEMTDC__', '__SEMSUMÁRIO__', '__NOTOC__' ),
	'nogallery'                 => array( '0', '__SEMGALERIA__', '__NOGALLERY__' ),
	'forcetoc'                  => array( '0', '__FORCARTDC__', '__FORCARSUMARIO__', '__FORÇARTDC__', '__FORÇARSUMÁRIO__', '__FORCETOC__' ),
	'toc'                       => array( '0', '__TDC__', '__SUMARIO__', '__SUMÁRIO__', '__TOC__' ),
	'noeditsection'             => array( '0', '__NAOEDITARSECAO__', '__NÃOEDITARSEÇÃO__', '__SEMEDITARSEÇÃO__', '__SEMEDITARSECAO__', '__NOEDITSECTION__' ),
	'currentmonth'              => array( '1', 'MESATUAL', 'MESATUAL2', 'CURRENTMONTH', 'CURRENTMONTH2' ),
	'currentmonth1'             => array( '1', 'MESATUAL1', 'CURRENTMONTH1' ),
	'currentmonthname'          => array( '1', 'NOMEDOMESATUAL', 'CURRENTMONTHNAME' ),
	'currentmonthabbrev'        => array( '1', 'MESATUALABREV', 'MESATUALABREVIADO', 'ABREVIATURADOMESATUAL', 'CURRENTMONTHABBREV' ),
	'currentday'                => array( '1', 'DIAATUAL', 'CURRENTDAY' ),
	'currentday2'               => array( '1', 'DIAATUAL2', 'CURRENTDAY2' ),
	'currentdayname'            => array( '1', 'NOMEDODIAATUAL', 'CURRENTDAYNAME' ),
	'currentyear'               => array( '1', 'ANOATUAL', 'CURRENTYEAR' ),
	'currenttime'               => array( '1', 'HORARIOATUAL', 'CURRENTTIME' ),
	'currenthour'               => array( '1', 'HORAATUAL', 'CURRENTHOUR' ),
	'localmonth'                => array( '1', 'MESLOCAL', 'LOCALMONTH', 'LOCALMONTH2' ),
	'localmonth1'               => array( '1', 'MESLOCAL1', 'LOCALMONTH1' ),
	'localmonthname'            => array( '1', 'NOMEDOMESLOCAL', 'LOCALMONTHNAME' ),
	'localmonthabbrev'          => array( '1', 'MESLOCALABREV', 'MESLOCALABREVIADO', 'ABREVIATURADOMESLOCAL', 'LOCALMONTHABBREV' ),
	'localday'                  => array( '1', 'DIALOCAL', 'LOCALDAY' ),
	'localday2'                 => array( '1', 'DIALOCAL2', 'LOCALDAY2' ),
	'localdayname'              => array( '1', 'NOMEDODIALOCAL', 'LOCALDAYNAME' ),
	'localyear'                 => array( '1', 'ANOLOCAL', 'LOCALYEAR' ),
	'localtime'                 => array( '1', 'HORARIOLOCAL', 'LOCALTIME' ),
	'localhour'                 => array( '1', 'HORALOCAL', 'LOCALHOUR' ),
	'numberofpages'             => array( '1', 'NUMERODEPAGINAS', 'NÚMERODEPÁGINAS', 'NUMBEROFPAGES' ),
	'numberofarticles'          => array( '1', 'NUMERODEARTIGOS', 'NÚMERODEARTIGOS', 'NUMBEROFARTICLES' ),
	'numberoffiles'             => array( '1', 'NUMERODEARQUIVOS', 'NÚMERODEARQUIVOS', 'NUMBEROFFILES' ),
	'numberofusers'             => array( '1', 'NUMERODEUSUARIOS', 'NÚMERODEUSUÁRIOS', 'NUMBEROFUSERS' ),
	'numberofactiveusers'       => array( '1', 'NUMERODEUSUARIOSATIVOS', 'NÚMERODEUSUÁRIOSATIVOS', 'NUMBEROFACTIVEUSERS' ),
	'numberofedits'             => array( '1', 'NUMERODEEDICOES', 'NÚMERODEEDIÇÕES', 'NUMBEROFEDITS' ),
	'numberofviews'             => array( '1', 'NUMERODEEXIBICOES', 'NÚMERODEEXIBIÇÕES', 'NUMBEROFVIEWS' ),
	'pagename'                  => array( '1', 'NOMEDAPAGINA', 'NOMEDAPÁGINA', 'PAGENAME' ),
	'pagenamee'                 => array( '1', 'NOMEDAPAGINAC', 'NOMEDAPÁGINAC', 'PAGENAMEE' ),
	'namespace'                 => array( '1', 'DOMINIO', 'DOMÍNIO', 'ESPACONOMINAL', 'ESPAÇONOMINAL', 'NAMESPACE' ),
	'namespacee'                => array( '1', 'DOMINIOC', 'DOMÍNIOC', 'ESPACONOMINALC', 'ESPAÇONOMINALC', 'NAMESPACEE' ),
	'talkspace'                 => array( '1', 'PAGINADEDISCUSSAO', 'PÁGINADEDISCUSSÃO', 'TALKSPACE' ),
	'talkspacee'                => array( '1', 'PAGINADEDISCUSSAOC', 'PÁGINADEDISCUSSÃOC', 'TALKSPACEE' ),
	'subjectspace'              => array( '1', 'PAGINADECONTEUDO', 'PAGINADECONTEÚDO', 'SUBJECTSPACE', 'ARTICLESPACE' ),
	'subjectspacee'             => array( '1', 'PAGINADECONTEUDOC', 'PAGINADECONTEÚDOC', 'SUBJECTSPACEE', 'ARTICLESPACEE' ),
	'fullpagename'              => array( '1', 'NOMECOMPLETODAPAGINA', 'NOMECOMPLETODAPÁGINA', 'FULLPAGENAME' ),
	'fullpagenamee'             => array( '1', 'NOMECOMPLETODAPAGINAC', 'NOMECOMPLETODAPÁGINAC', 'FULLPAGENAMEE' ),
	'subpagename'               => array( '1', 'NOMEDASUBPAGINA', 'NOMEDASUBPÁGINA', 'SUBPAGENAME' ),
	'subpagenamee'              => array( '1', 'NOMEDASUBPAGINAC', 'NOMEDASUBPÁGINAC', 'SUBPAGENAMEE' ),
	'basepagename'              => array( '1', 'NOMEDAPAGINABASE', 'NOMEDAPÁGINABASE', 'BASEPAGENAME' ),
	'basepagenamee'             => array( '1', 'NOMEDAPAGINABASEC', 'NOMEDAPÁGINABASEC', 'BASEPAGENAMEE' ),
	'talkpagename'              => array( '1', 'NOMEDAPAGINADEDISCUSSAO', 'NOMEDAPÁGINADEDISCUSSÃO', 'TALKPAGENAME' ),
	'talkpagenamee'             => array( '1', 'NOMEDAPAGINADEDISCUSSAOC', 'NOMEDAPÁGINADEDISCUSSÃOC', 'TALKPAGENAMEE' ),
	'subjectpagename'           => array( '1', 'NOMEDAPAGINADECONTEUDO', 'NOMEDAPÁGINADECONTEÚDO', 'SUBJECTPAGENAME', 'ARTICLEPAGENAME' ),
	'subjectpagenamee'          => array( '1', 'NOMEDAPAGINADECONTEUDOC', 'NOMEDAPÁGINADECONTEÚDOC', 'SUBJECTPAGENAMEE', 'ARTICLEPAGENAMEE' ),
	'img_thumbnail'             => array( '1', 'miniaturadaimagem', 'miniatura', 'thumbnail', 'thumb' ),
	'img_manualthumb'           => array( '1', 'miniaturadaimagem=$1', 'miniatura=$1', 'thumbnail=$1', 'thumb=$1' ),
	'img_right'                 => array( '1', 'direita', 'right' ),
	'img_left'                  => array( '1', 'esquerda', 'left' ),
	'img_none'                  => array( '1', 'nenhum', 'none' ),
	'img_center'                => array( '1', 'centro', 'center', 'centre' ),
	'img_framed'                => array( '1', 'commoldura', 'comborda', 'framed', 'enframed', 'frame' ),
	'img_frameless'             => array( '1', 'semmoldura', 'semborda', 'frameless' ),
	'img_page'                  => array( '1', 'página=$1', 'página $1', 'page=$1', 'page $1' ),
	'img_upright'               => array( '1', 'superiordireito', 'superiordireito=$1', 'superiordireito $1', 'upright', 'upright=$1', 'upright $1' ),
	'img_border'                => array( '1', 'borda', 'border' ),
	'img_baseline'              => array( '1', 'linhadebase', 'baseline' ),
	'img_top'                   => array( '1', 'acima', 'top' ),
	'img_middle'                => array( '1', 'meio', 'middle' ),
	'img_bottom'                => array( '1', 'abaixo', 'bottom' ),
	'img_link'                  => array( '1', 'ligação=$1', 'link=$1' ),
	'sitename'                  => array( '1', 'NOMEDOSITE', 'NOMEDOSÍTIO', 'NOMEDOSITIO', 'SITENAME' ),
	'server'                    => array( '0', 'SERVIDOR', 'SERVER' ),
	'servername'                => array( '0', 'NOMEDOSERVIDOR', 'SERVERNAME' ),
	'scriptpath'                => array( '0', 'CAMINHODOSCRIPT', 'SCRIPTPATH' ),
	'gender'                    => array( '0', 'GENERO', 'GÊNERO', 'GENDER:' ),
	'notitleconvert'            => array( '0', '__SEMCONVERTERTITULO__', '__SEMCONVERTERTÍTULO__', '__SEMCT__', '__NOTITLECONVERT__', '__NOTC__' ),
	'nocontentconvert'          => array( '0', '__SEMCONVERTERCONTEUDO__', '__SEMCONVERTERCONTEÚDO__', '__SEMCC__', '__NOCONTENTCONVERT__', '__NOCC__' ),
	'currentweek'               => array( '1', 'SEMANAATUAL', 'CURRENTWEEK' ),
	'currentdow'                => array( '1', 'DIADASEMANAATUAL', 'CURRENTDOW' ),
	'localweek'                 => array( '1', 'SEMANALOCAL', 'LOCALWEEK' ),
	'localdow'                  => array( '1', 'DIADASEMANALOCAL', 'LOCALDOW' ),
	'revisionid'                => array( '1', 'IDDAREVISAO', 'IDDAREVISÃO', 'REVISIONID' ),
	'revisionday'               => array( '1', 'DIADAREVISAO', 'DIADAREVISÃO', 'REVISIONDAY' ),
	'revisionday2'              => array( '1', 'DIADAREVISAO2', 'DIADAREVISÃO2', 'REVISIONDAY2' ),
	'revisionmonth'             => array( '1', 'MESDAREVISAO', 'MÊSDAREVISÃO', 'REVISIONMONTH' ),
	'revisionyear'              => array( '1', 'ANODAREVISAO', 'ANODAREVISÃO', 'REVISIONYEAR' ),
	'revisionuser'              => array( '1', 'USUARIODAREVISAO', 'USUÁRIODAREVISÃO', 'REVISIONUSER' ),
	'fullurl'                   => array( '0', 'URLCOMPLETO:', 'FULLURL:' ),
	'fullurle'                  => array( '0', 'URLCOMPLETOC:', 'FULLURLE:' ),
	'lcfirst'                   => array( '0', 'PRIMEIRAMINUSCULA:', 'PRIMEIRAMINÚSCULA:', 'LCFIRST:' ),
	'ucfirst'                   => array( '0', 'PRIMEIRAMAIUSCULA:', 'PRIMEIRAMAIÚSCULA:', 'UCFIRST:' ),
	'lc'                        => array( '0', 'MINUSCULA', 'MINÚSCULA', 'MINUSCULAS', 'MINÚSCULAS', 'LC:' ),
	'uc'                        => array( '0', 'MAIUSCULA', 'MAIÚSCULA', 'MAIUSCULAS', 'MAIÚSCULAS', 'UC:' ),
	'displaytitle'              => array( '1', 'EXIBETITULO', 'EXIBETÍTULO', 'DISPLAYTITLE' ),
	'newsectionlink'            => array( '1', '__LINKDENOVASECAO__', '__LINKDENOVASEÇÃO__', '__LIGACAODENOVASECAO__', '__LIGAÇÃODENOVASEÇÃO__', '__NEWSECTIONLINK__' ),
	'nonewsectionlink'          => array( '1', '__SEMLINKDENOVASECAO__', '__SEMLINKDENOVASEÇÃO__', '__SEMLIGACAODENOVASECAO__', '__SEMLIGAÇÃODENOVASEÇÃO__', '__NONEWSECTIONLINK__' ),
	'currentversion'            => array( '1', 'REVISAOATUAL', 'REVISÃOATUAL', 'CURRENTVERSION' ),
	'urlencode'                 => array( '0', 'CODIFICAURL:', 'URLENCODE:' ),
	'anchorencode'              => array( '0', 'CODIFICAANCORA:', 'CODIFICAÂNCORA:', 'ANCHORENCODE' ),
	'language'                  => array( '0', '#IDIOMA:', '#LANGUAGE:' ),
	'contentlanguage'           => array( '1', 'IDIOMADOCONTEUDO', 'IDIOMADOCONTEÚDO', 'CONTENTLANGUAGE', 'CONTENTLANG' ),
	'pagesinnamespace'          => array( '1', 'PAGINASNOESPACONOMINAL', 'PÁGINASNOESPAÇONOMINAL', 'PAGINASNODOMINIO', 'PÁGINASNODOMÍNIO', 'PAGESINNAMESPACE:', 'PAGESINNS:' ),
	'numberofadmins'            => array( '1', 'NUMERODEADMINISTRADORES', 'NÚMERODEADMINISTRADORES', 'NUMBEROFADMINS' ),
	'defaultsort'               => array( '1', 'ORDENACAOPADRAO', 'ORDENAÇÃOPADRÃO', 'ORDEMPADRAO', 'ORDEMPADRÃO', 'DEFAULTSORT:', 'DEFAULTSORTKEY:', 'DEFAULTCATEGORYSORT:' ),
	'filepath'                  => array( '0', 'CAMINHODOARQUIVO', 'FILEPATH:' ),
	'hiddencat'                 => array( '1', '__CATEGORIAOCULTA__', '__CATOCULTA__', '__HIDDENCAT__' ),
	'pagesincategory'           => array( '1', 'PAGINASNACATEGORIA', 'PÁGINASNACATEGORIA', 'PAGINASNACAT', 'PÁGINASNACAT', 'PAGESINCATEGORY', 'PAGESINCAT' ),
	'pagesize'                  => array( '1', 'TAMANHODAPAGINA', 'TAMANHODAPÁGINA', 'PAGESIZE' ),
	'index'                     => array( '1', '__INDEXAR__', '__INDEX__' ),
	'noindex'                   => array( '1', '__NAOINDEXAR__', '__NÃOINDEXAR__', '__NOINDEX__' ),
	'numberingroup'             => array( '1', 'NUMERONOGRUPO', 'NÚMERONOGRUPO', 'NUMBERINGROUP', 'NUMINGROUP' ),
	'staticredirect'            => array( '1', '__REDIRECIONAMENTOESTATICO__', '__REDIRECIONAMENTOESTÁTICO__', '__STATICREDIRECT__' ),
	'protectionlevel'           => array( '1', 'NIVELDEPROTECAO', 'NÍVELDEPROTEÇÃO', 'PROTECTIONLEVEL' ),
	'url_path'                  => array( '0', 'CAMINHO', 'PATH' ),
);

$messages = array(
# User preference toggles
'tog-underline' => 'Sublinhar links:',
'tog-justify' => 'Justificar parágrafos',
'tog-hideminor' => 'Ocultar edições menores nas mudanças recentes',
'tog-hidepatrolled' => 'Ocultar edições patrulhadas nas mudanças recentes',
'tog-newpageshidepatrolled' => 'Ocultar páginas patrulhadas da lista de páginas novas',
'tog-extendwatchlist' => 'Expandir a lista de páginas vigiadas para mostrar todas as alterações aplicáveis, não apenas as mais recentes',
'tog-usenewrc' => 'Agrupar alterações por páginas nas mudanças recentes e páginas vigiadas (requer JavaScript)',
'tog-numberheadings' => 'Auto-numerar cabeçalhos',
'tog-showtoolbar' => 'Mostrar barra de edição (JavaScript)',
'tog-editondblclick' => 'Editar páginas quando houver clique duplo (JavaScript)',
'tog-editsection' => 'Ativar a edição de seções com links [editar]',
'tog-editsectiononrightclick' => 'Habilitar edição de seção por clique com o botão direito no título da seção (JavaScript)',
'tog-showtoc' => 'Mostrar Tabela de Conteúdos (para páginas com mais de três cabeçalhos)',
'tog-rememberpassword' => 'Recordar os meus dados neste navegador (por no máximo $1 {{PLURAL:$1|dia|dias}})',
'tog-watchcreations' => 'Adicionar as páginas e arquivos que eu criar às minhas páginas vigiadas',
'tog-watchdefault' => 'Adicionar as páginas e arquivos que eu editar às minhas páginas vigiadas',
'tog-watchmoves' => 'Adicionar as páginas e arquivos que eu mover às minhas páginas vigiadas',
'tog-watchdeletion' => 'Adicionar as páginas e arquivos que eu eliminar às minhas páginas vigiadas',
'tog-minordefault' => 'Marcar todas as edições como secundárias, por padrão',
'tog-previewontop' => 'Mostrar previsão antes da caixa de edição',
'tog-previewonfirst' => 'Mostrar previsão na primeira edição',
'tog-nocache' => 'Desativar o cache de páginas do navegador',
'tog-enotifwatchlistpages' => 'Notificar-me por e-mail quando uma página ou arquivo vigiado for alterado',
'tog-enotifusertalkpages' => 'Receber e-mail quando a minha página de discussão for editada',
'tog-enotifminoredits' => 'Notificar-me por e-mail também sobre edições menores de páginas ou arquivos',
'tog-enotifrevealaddr' => 'Revelar o meu endereço de email nas notificações',
'tog-shownumberswatching' => 'Mostrar o número de usuários que estão vigiando',
'tog-oldsig' => 'Assinatura existente:',
'tog-fancysig' => 'Tratar assinatura como wikitexto (sem link automático)',
'tog-externaleditor' => 'Utilizar editor externo por padrão (apenas para usuários avançados; requer configurações adicionais em seu computador. [//www.mediawiki.org/wiki/Manual:External_editors Mais informações.])',
'tog-externaldiff' => 'Utilizar comparador de versões externo por padrão (apenas para usuários avançados; requer configurações adicionais em seu computador. [//www.mediawiki.org/wiki/Manual:External_editors Mais informações.])',
'tog-showjumplinks' => 'Ativar links de acessibilidade "ir para"',
'tog-uselivepreview' => 'Utilizar pré-visualização em tempo real (JavaScript) (Experimental)',
'tog-forceeditsummary' => 'Avisar-me ao introduzir um sumário vazio',
'tog-watchlisthideown' => 'Ocultar as minhas edições da lista de páginas vigiadas',
'tog-watchlisthidebots' => 'Ocultar edições automatizadas por bots da lista de páginas vigiadas',
'tog-watchlisthideminor' => 'Ocultar edições menores da lista de páginas vigiadas',
'tog-watchlisthideliu' => 'Ocultar edições de usuários autenticados da lista de páginas vigiadas',
'tog-watchlisthideanons' => 'Ocultar edições de usuários anônimos da lista de páginas vigiadas',
'tog-watchlisthidepatrolled' => 'Ocultar edições patrulhadas na lista de páginas vigiadas',
'tog-ccmeonemails' => 'Receber cópias de e-mails que eu enviar a outros usuários',
'tog-diffonly' => 'Não mostrar o conteúdo da página ao comparar duas edições',
'tog-showhiddencats' => 'Exibir categorias ocultas',
'tog-noconvertlink' => 'Desabilitar conversão de títulos de links',
'tog-norollbackdiff' => 'Omitir diferenças depois de desfazer edições em bloco',

'underline-always' => 'Sempre',
'underline-never' => 'Nunca',
'underline-default' => 'Padrão do navegador',

# Font style option in Special:Preferences
'editfont-style' => 'Estilo da fonte para a região de edição:',
'editfont-default' => 'Padrão do navegador',
'editfont-monospace' => 'Fonte mono-espaçada',
'editfont-sansserif' => 'Fonte sem serifa',
'editfont-serif' => 'Serifada',

# Dates
'sunday' => 'domingo',
'monday' => 'segunda-feira',
'tuesday' => 'terça-feira',
'wednesday' => 'quarta-feira',
'thursday' => 'quinta-feira',
'friday' => 'sexta-feira',
'saturday' => 'sábado',
'sun' => 'dom',
'mon' => 'seg',
'tue' => 'ter',
'wed' => 'qua',
'thu' => 'qui',
'fri' => 'sex',
'sat' => 'sáb',
'january' => 'janeiro',
'february' => 'fevereiro',
'march' => 'março',
'april' => 'abril',
'may_long' => 'maio',
'june' => 'junho',
'july' => 'julho',
'august' => 'agosto',
'september' => 'setembro',
'october' => 'outubro',
'november' => 'novembro',
'december' => 'dezembro',
'january-gen' => 'janeiro',
'february-gen' => 'fevereiro',
'march-gen' => 'março',
'april-gen' => 'abril',
'may-gen' => 'maio',
'june-gen' => 'junho',
'july-gen' => 'julho',
'august-gen' => 'agosto',
'september-gen' => 'setembro',
'october-gen' => 'outubro',
'november-gen' => 'novembro',
'december-gen' => 'dezembro',
'jan' => 'jan.',
'feb' => 'fev.',
'mar' => 'mar.',
'apr' => 'abr.',
'may' => 'maio',
'jun' => 'jun.',
'jul' => 'jul.',
'aug' => 'ago.',
'sep' => 'set.',
'oct' => 'out.',
'nov' => 'nov.',
'dec' => 'dez.',

# Categories related messages
'pagecategories' => '{{PLURAL:$1|Categoria|Categorias}}',
'category_header' => 'Páginas na categoria "$1"',
'subcategories' => 'Subcategorias',
'category-media-header' => 'Multimídia na categoria "$1"',
'category-empty' => "''No momento esta categoria não possui nenhuma página ou arquivo multimídia.''",
'hidden-categories' => '{{PLURAL:$1|Categoria oculta|Categorias ocultas}}',
'hidden-category-category' => 'Categorias ocultas',
'category-subcat-count' => '{{PLURAL:$2|Esta categoria possui apenas a subcategoria a seguir.|Há, nesta categoria {{PLURAL:$1|uma subcategoria|$1 subcategorias}} (dentre um total de $2).}}',
'category-subcat-count-limited' => 'Esta categoria possui {{PLURAL:$1|a seguinte sub-categoria|as $1 sub-categorias a seguir}}.',
'category-article-count' => '{{PLURAL:$2|Esta categoria possui apenas a página a seguir.|Há, nesta categoria, {{PLURAL:$1|a página a seguir|as $1 páginas a seguir}} (dentre um total de $2).}}',
'category-article-count-limited' => 'Há, nesta categoria, {{PLURAL:$1|a página a seguir|as $1 páginas a seguir}}.',
'category-file-count' => '{{PLURAL:$2|Esta categoria possui apenas o arquivo a seguir.|Há, nesta categoria, {{PLURAL:$1|o arquivo a seguir|os $1 seguintes arquivos}} (dentre um total de $2.)}}',
'category-file-count-limited' => 'Nesta categoria há {{PLURAL:$1|um arquivo|$1 arquivos}}.',
'listingcontinuesabbrev' => 'cont.',
'index-category' => 'Páginas indexadas',
'noindex-category' => 'Páginas não indexadas',
'broken-file-category' => 'Páginas com links inválidos para arquivos',

'about' => 'Sobre',
'article' => 'Página de conteúdo',
'newwindow' => '(abre em uma nova janela)',
'cancel' => 'Cancelar',
'moredotdotdot' => 'Mais...',
'mypage' => 'Minha página',
'mytalk' => 'Minha discussão',
'anontalk' => 'Discussão para este IP',
'navigation' => 'Navegação',
'and' => '&#32;e',

# Cologne Blue skin
'qbfind' => 'Procurar',
'qbbrowse' => 'Navegar',
'qbedit' => 'Editar',
'qbpageoptions' => 'Esta página',
'qbmyoptions' => 'Minhas páginas',
'qbspecialpages' => 'Páginas especiais',
'faq' => 'FAQ',
'faqpage' => 'Project:FAQ',

# Vector skin
'vector-action-addsection' => 'Adicionar tópico',
'vector-action-delete' => 'Eliminar',
'vector-action-move' => 'Mover',
'vector-action-protect' => 'Proteger',
'vector-action-undelete' => 'Restaurar',
'vector-action-unprotect' => 'Alterar a proteção',
'vector-simplesearch-preference' => 'Ativar barra simplificada de buscas (apenas no skin Vector)',
'vector-view-create' => 'Criar',
'vector-view-edit' => 'Editar',
'vector-view-history' => 'Ver histórico',
'vector-view-view' => 'Ler',
'vector-view-viewsource' => 'Ver código-fonte',
'actions' => 'Ações',
'namespaces' => 'Espaços nominais',
'variants' => 'Variantes',

'errorpagetitle' => 'Erro',
'returnto' => 'Retornar para $1.',
'tagline' => 'De {{SITENAME}}',
'help' => 'Ajuda',
'search' => 'Pesquisar',
'searchbutton' => 'Pesquisar',
'go' => 'Ir',
'searcharticle' => 'Ir',
'history' => 'Histórico da página',
'history_short' => 'Histórico',
'updatedmarker' => 'atualizado desde a minha última visita',
'printableversion' => 'Versão para impressão',
'permalink' => 'Link permanente',
'print' => 'Imprimir',
'view' => 'Ver',
'edit' => 'Editar',
'create' => 'Criar',
'editthispage' => 'Editar esta página',
'create-this-page' => 'Iniciar esta página',
'delete' => 'Eliminar',
'deletethispage' => 'Eliminar esta página',
'undelete_short' => 'Restaurar {{PLURAL:$1|uma edição|$1 edições}}',
'viewdeleted_short' => 'Ver {{PLURAL:$1|uma edição eliminada|$1 edições eliminadas}}',
'protect' => 'Proteger',
'protect_change' => 'alterar',
'protectthispage' => 'Proteger esta página',
'unprotect' => 'Alterar a proteção',
'unprotectthispage' => 'Alterar a proteção desta página',
'newpage' => 'Página nova',
'talkpage' => 'Dialogar sobre esta página',
'talkpagelinktext' => 'disc',
'specialpage' => 'Página especial',
'personaltools' => 'Ferramentas pessoais',
'postcomment' => 'Nova seção',
'articlepage' => 'Ver página de conteúdo',
'talk' => 'Discussão',
'views' => 'Visualizações',
'toolbox' => 'Ferramentas',
'userpage' => 'Ver página de usuário',
'projectpage' => 'Ver página de projeto',
'imagepage' => 'Ver página do arquivo',
'mediawikipage' => 'Ver página de mensagens',
'templatepage' => 'Ver página de predefinições',
'viewhelppage' => 'Ver página de ajuda',
'categorypage' => 'Ver página de categorias',
'viewtalkpage' => 'Ver discussão',
'otherlanguages' => 'Em outros idiomas',
'redirectedfrom' => '(Redirecionado de $1)',
'redirectpagesub' => 'Página de redirecionamento',
'lastmodifiedat' => 'Esta página foi modificada pela última vez às $2 de $1.',
'viewcount' => 'Esta página foi acessada {{PLURAL:$1|uma vez|$1 vezes}}.',
'protectedpage' => 'Página protegida',
'jumpto' => 'Ir para:',
'jumptonavigation' => 'navegação',
'jumptosearch' => 'pesquisa',
'view-pool-error' => 'Desculpe-nos, os servidores estão sobrecarregados neste momento.
Muitos usuários estão tentando ver esta página.
Aguarde um instante antes de tentar acessar esta página novamente.

$1',
'pool-timeout' => 'Tempo limite de espera para o bloqueio excedido',
'pool-queuefull' => 'A pool queue está cheia',
'pool-errorunknown' => 'Erro desconhecido',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage) and the disambiguation template definition (see disambiguations).
'aboutsite' => 'Sobre {{SITENAME}}',
'aboutpage' => 'Project:Sobre',
'copyright' => 'Conteúdo disponível sob $1.',
'copyrightpage' => '{{ns:project}}:Direitos_de_autor',
'currentevents' => 'Eventos atuais',
'currentevents-url' => 'Project:Eventos atuais',
'disclaimers' => 'Exoneração de responsabilidade',
'disclaimerpage' => 'Project:Aviso_geral',
'edithelp' => 'Ajuda de edição',
'edithelppage' => 'Help:Editar',
'helppage' => 'Help:Conteúdos',
'mainpage' => 'Página principal',
'mainpage-description' => 'Página principal',
'policy-url' => 'Project:Políticas',
'portal' => 'Portal comunitário',
'portal-url' => 'Project:Portal comunitário',
'privacy' => 'Política de privacidade',
'privacypage' => 'Project:Política_de_privacidade',

'badaccess' => 'Erro de permissão',
'badaccess-group0' => 'Você não está autorizado a executar a ação requisitada.',
'badaccess-groups' => 'A ação que você tentou executar está limitada a usuários {{PLURAL:$2|do grupo|de um dos seguintes grupos}}: $1.',

'versionrequired' => 'É necessária a versão $1 do MediaWiki',
'versionrequiredtext' => 'Esta página requer a versão $1 do MediaWiki para ser utilizada.
Veja a [[Special:Version|página sobre a versão do sistema]].',

'ok' => 'OK',
'retrievedfrom' => 'Disponível em "$1"',
'youhavenewmessages' => 'Você tem $1 ($2).',
'newmessageslink' => 'novas mensagens',
'newmessagesdifflink' => 'última alteração',
'youhavenewmessagesfromusers' => 'Você tem $1 de {{PLURAL:$3|outro usuário|outros usuários}} ($2)',
'youhavenewmessagesmanyusers' => 'Você tem $1 de muitos usuários ($2).',
'newmessageslinkplural' => '{{PLURAL:$1|uma mensagem nova|mensagens novas}}',
'newmessagesdifflinkplural' => '{{PLURAL:$1|última alteração|últimas alterações}}',
'youhavenewmessagesmulti' => 'Você tem novas mensagens em $1',
'editsection' => 'editar',
'editold' => 'editar',
'viewsourceold' => 'ver código-fonte',
'editlink' => 'editar',
'viewsourcelink' => 'ver código-fonte',
'editsectionhint' => 'Editar seção: $1',
'toc' => 'Conteúdo',
'showtoc' => 'exibir',
'hidetoc' => 'ocultar',
'collapsible-collapse' => 'Ocultar',
'collapsible-expand' => 'Expandir',
'thisisdeleted' => 'Ver ou restaurar $1?',
'viewdeleted' => 'Ver $1?',
'restorelink' => '{{PLURAL:$1|uma edição eliminada|$1 edições eliminadas}}',
'feedlinks' => 'Feed:',
'feed-invalid' => 'Tipo inválido de inscrição de feeds.',
'feed-unavailable' => 'Os "feeds" não se encontram disponíveis',
'site-rss-feed' => 'Feed RSS $1',
'site-atom-feed' => 'Feed Atom $1',
'page-rss-feed' => 'Feed RSS de "$1"',
'page-atom-feed' => 'Feed Atom de "$1"',
'red-link-title' => '$1 (página inexistente)',
'sort-descending' => 'Ordenar por ordem descendente',
'sort-ascending' => 'Ordenar por ordem ascendente',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main' => 'Página',
'nstab-user' => 'Página d{{GENDER:{{#titleparts:{{PAGENAME}}|1|1}}|o usuário|a usuária|e usuário(a)}}',
'nstab-media' => 'Página de mídia',
'nstab-special' => 'Página especial',
'nstab-project' => 'Página do projeto',
'nstab-image' => 'Arquivo',
'nstab-mediawiki' => 'Mensagem',
'nstab-template' => 'Predefinição',
'nstab-help' => 'Página de ajuda',
'nstab-category' => 'Categoria',

# Main script and global functions
'nosuchaction' => 'Ação inexistente',
'nosuchactiontext' => 'A ação especificada pela URL é inválida.
Você deve ter se enganado ao digitar a URL, ou acessou um link incorreto.
Isso também pode indicar um erro no software usado no sítio {{SITENAME}}.',
'nosuchspecialpage' => 'Esta página especial não existe',
'nospecialpagetext' => '<strong>Você requisitou uma página especial inválida.</strong>

Uma lista de páginas especiais válidas poderá ser encontrada em [[Special:SpecialPages|{{int:specialpages}}]].',

# General errors
'error' => 'Erro',
'databaseerror' => 'Erro no banco de dados',
'dberrortext' => 'Ocorreu um erro de sintaxe na busca no banco de dados.
Isto pode indicar um bug no software.
A última tentativa de busca no banco de dados foi:
<blockquote><code>$1</code></blockquote>
na função "<code>$2</code>".
O banco de dados retornou o erro "<samp>$3: $4</samp>".',
'dberrortextcl' => 'Ocorreu um erro de sintaxe de busca no banco de dados.
A última tentativa de busca no banco de dados foi:
"$1"
na função "$2".
O banco de dados retornou o erro "$3: $4".',
'laggedslavemode' => 'Aviso: a página poderá não conter atualizações recentes.',
'readonly' => 'Banco de dados disponível no modo "somente leitura"',
'enterlockreason' => 'Entre com um motivo para trancá-lo, incluindo uma estimativa de quando poderá novamente ser destrancado',
'readonlytext' => 'O banco de dados da {{SITENAME}} está atualmente bloqueado para novas entradas e outras modificações, provavelmente por uma manutenção rotineira; mais tarde voltará ao normal.

Quem fez o bloqueio oferece a seguinte explicação: $1',
'missing-article' => 'O banco de dados não encontrou o texto de uma página que deveria ter encontrado, com o nome "$1" $2.

Isso normalmente é causado ao acessar um link de diferença (dif) desatualizado ou para o histórico de uma página que foi apagada.

Se este não for o caso, você pode ter encontrado um defeito (bug) no software.
Anote a URL e reporte o ocorrido a um [[Special:ListUsers/sysop|administrador]].',
'missingarticle-rev' => '(revisão#: $1)',
'missingarticle-diff' => '(Dif.: $1, $2)',
'readonly_lag' => 'O banco de dados foi automaticamente bloqueado enquanto os servidores secundários se sincronizam com o principal',
'internalerror' => 'Erro interno',
'internalerror_info' => 'Erro interno: $1',
'fileappenderrorread' => 'Não foi possível ler "$1" durante a anexação.',
'fileappenderror' => 'Não foi possível adicionar "$1" a "$2".',
'filecopyerror' => 'Não foi possível copiar o arquivo "$1" para "$2".',
'filerenameerror' => 'Não foi possível renomear o arquivo "$1" para "$2".',
'filedeleteerror' => 'Não foi possível eliminar o arquivo "$1".',
'directorycreateerror' => 'Não foi possível criar o diretório "$1".',
'filenotfound' => 'Não foi possível encontrar o arquivo "$1".',
'fileexistserror' => 'Não foi possível gravar no arquivo "$1": ele já existe',
'unexpected' => 'Valor não esperado: "$1"="$2".',
'formerror' => 'Erro: Não foi possível enviar o formulário',
'badarticleerror' => 'Esta ação não pode ser realizada nesta página.',
'cannotdelete' => 'Não foi possível eliminar a página ou arquivo $1.
É possível que ele já tenha sido eliminado por outra pessoa.',
'cannotdelete-title' => 'Não é possível excluir a página " $1 "',
'delete-hook-aborted' => 'A eliminação foi cancelada por um "hook".
Não foi dada nenhuma explicação.',
'badtitle' => 'Título inválido',
'badtitletext' => 'O título de página solicitado era inválido, vazio, ou um link interlínguas ou interwikis incorreto.
Talvez contenha um ou mais caracteres que não podem ser usados em títulos.',
'perfcached' => "Os seguintes dados encontram-se armazenados na ''cache'' e podem não estar atualizados. No máximo {{PLURAL:$1|um resultado está disponível|$1 resultados estão disponíveis}} na ''cache''.",
'perfcachedts' => "Os seguintes dados encontram-se armazenados no ''cache'' e foram atualizados as $1. No máximo {{PLURAL:$4|um resultado está disponível|$4 resultados estão disponíveis}} no ''cache''.",
'querypage-no-updates' => 'Momentaneamente as atualizações para esta página estão desativadas. Por enquanto, os dados aqui presentes não poderão ser atualizados.',
'wrong_wfQuery_params' => 'Parâmetros incorretos para wfQuery()<br />
Função: $1<br />
Consulta: $2',
'viewsource' => 'Ver código-fonte',
'viewsource-title' => 'Exibir código-fonte para $1',
'actionthrottled' => 'Ação controlada',
'actionthrottledtext' => 'Como medida "anti-spam", você se encontra impedido de realizar esta operação muitas vezes em um curto espaço de tempo; você já excedeu esse limite.
Tente novamente em alguns minutos.',
'protectedpagetext' => 'Esta página foi protegida contra novas edições.',
'viewsourcetext' => 'Você pode ver e copiar o código desta página:',
'viewyourtext' => "Pode ver e copiar o código fonte '''das suas edições''' nesta página:",
'protectedinterface' => 'Esta página fornece texto de interface ao software e encontra-se trancada para prevenir abusos.',
'editinginterface' => "'''Aviso:''' Você se encontra prestes a editar uma página que é utilizada para fornecer texto de interface ao software. Alterações nesta página irão afetar a aparência da interface de usuário para outros usuários. Para traduções, considere utilizar a [//translatewiki.net/wiki/Main_Page?setlang=pt-br translatewiki.net], um projeto destinado para a tradução do MediaWiki.",
'sqlhidden' => '(Consulta SQL em segundo-plano)',
'cascadeprotected' => 'Esta página foi protegida contra edições por estar incluída {{PLURAL:$1|na página listada|nas páginas listadas}} a seguir, ({{PLURAL:$1|página essa que está protegida|páginas essas que estão protegidas}} com a opção de "proteção progressiva" ativada):
$2',
'namespaceprotected' => "Você não possui permissão para editar páginas no espaço nominal '''$1'''.",
'customcssprotected' => 'Você não tem permissão para editar esta página CSS, porque ele contém configurações pessoais de outro usuário.',
'customjsprotected' => 'Você não tem permissão para editar esta página de JavaScript, porque ele contém configurações pessoais de outro usuário.',
'ns-specialprotected' => 'Não é possível editar páginas especiais',
'titleprotected' => "Este título foi protegido, para que não seja criado.
Quem o protegeu foi [[User:$1|$1]], com a justificativa: ''$2''.",
'filereadonlyerror' => 'Não é possível modificar o arquivo "$1" porque o repositório do arquivo "$2" está em modo somente leitura.

O administrador que bloqueou ofereceu a seguinte explicação: "$3".',
'invalidtitle-knownnamespace' => 'Título inválido para o espaço nominal "$2" e texto "$3"',
'invalidtitle-unknownnamespace' => 'Título inválido para o espaço nominal de número desconhecido ($1) e texto "$2"',
'exception-nologin' => 'Não está autenticado',
'exception-nologin-text' => 'Esta página ou ação requer que você esteja autenticado neste wiki.',

# Virus scanner
'virus-badscanner' => "Má configuração: antivírus desconhecido: ''$1''",
'virus-scanfailed' => 'a verificação falhou (código $1)',
'virus-unknownscanner' => 'antivírus desconhecido:',

# Login and logout pages
'logouttext' => "'''Agora você encontra-se desautenticado.'''

É possível continuar usando {{SITENAME}} anonimamente ou <span class='plainlinks'>[$1 autenticar-se novamente]</span> com o mesmo nome de usuário ou com um nome diferente.
Note que algumas páginas podem continuar sendo exibidas como se você ainda estivesse autenticado até que você limpe a ''cache'' do seu navegador.",
'welcomecreation' => '== Bem-vindo(a), $1! ==
A sua conta foi criada.
Não se esqueça de personalizar as suas [[Special:Preferences|preferências no wiki {{SITENAME}}]].',
'yourname' => 'Nome de usuário:',
'yourpassword' => 'Senha:',
'yourpasswordagain' => 'Redigite sua senha',
'remembermypassword' => 'Lembrar meu login neste navegador (por no máximo $1 {{PLURAL:$1|dia|dias}})',
'securelogin-stick-https' => 'Permanecer conectado ao HTTPS após a autenticação',
'yourdomainname' => 'Seu domínio:',
'password-change-forbidden' => 'Você não pode alterar senhas nessa wiki.',
'externaldberror' => 'Ocorreu ou um erro no banco de dados durante a autenticação ou não lhe é permitido atualizar a sua conta externa.',
'login' => 'Autenticar-se',
'nav-login-createaccount' => 'Entrar / criar conta',
'loginprompt' => 'É necessário estar com cookies ativados para poder autenticar-se no wiki {{SITENAME}}.',
'userlogin' => 'Entrar / criar conta',
'userloginnocreate' => 'Entrar',
'logout' => 'Sair',
'userlogout' => 'Desconectar',
'notloggedin' => 'Não autenticado',
'nologin' => 'Não possui uma conta? $1.',
'nologinlink' => 'Criar uma conta',
'createaccount' => 'Criar conta',
'gotaccount' => "Já possui uma conta? '''$1'''.",
'gotaccountlink' => 'Autenticar-se',
'userlogin-resetlink' => 'Esqueceu-se do seu nome de usuário ou da senha?',
'createaccountmail' => 'por e-mail',
'createaccountreason' => 'Razão:',
'badretype' => 'As senhas que você digitou não são iguais.',
'userexists' => 'O nome de usuário fornecido já está em uso.
Escolha um nome diferente.',
'loginerror' => 'Erro de autenticação',
'createaccounterror' => 'Não foi possível criar a conta: $1',
'nocookiesnew' => "A conta do usuário foi criada, mas você não foi autenticado.
{{SITENAME}} utiliza ''cookies'' para autenticar os usuários.
Você tem os ''cookies'' desativados no seu navegador.
Por favor ative-os, depois autentique-se com o seu novo nome de usuário e a sua senha.",
'nocookieslogin' => 'Você tem os <i>cookies</i> desativados no seu navegador, e a {{SITENAME}} utiliza <i>cookies</i> para ligar os usuários às suas contas. Por favor os ative e tente novamente.',
'nocookiesfornew' => 'A conta de usuário não foi criada porque não foi possível confirmar a sua origem.
Certifique-se de que tem os cookies ativados, recarregue esta página e tente novamente.',
'noname' => 'Você não colocou um nome de usuário válido.',
'loginsuccesstitle' => 'Login bem sucedido',
'loginsuccess' => "'''Agora você está {{GENDER:autenticado|autenticada}} ao wiki {{SITENAME}} como \"\$1\"'''.",
'nosuchuser' => 'Não existe nenhum usuário com o nome "$1".
Os nomes de usuário são sensíveis a letras maiúsculas.
Verifique o que foi digitado ou [[Special:UserLogin/signup|crie uma nova conta]].',
'nosuchusershort' => 'Não existe um usuário com o nome "$1". Verifique o nome que introduziu.',
'nouserspecified' => 'Você precisa especificar um nome de usuário.',
'login-userblocked' => 'Este usuário está bloqueado. Entrada proibida.',
'wrongpassword' => 'A senha que introduziu é inválida. Por favor, tente novamente.',
'wrongpasswordempty' => 'Foi fornecida uma senha em branco.
Tente novamente.',
'passwordtooshort' => 'As senhas devem ter no mínimo {{PLURAL:$1|1 caractere|$1 caracteres}}.',
'password-name-match' => 'A sua senha deve ser diferente do seu nome de usuário.',
'password-login-forbidden' => 'O uso deste nome de usuário e senha foi desautorizado.',
'mailmypassword' => 'Enviar uma nova senha por e-mail',
'passwordremindertitle' => 'Nova senha temporária em {{SITENAME}}',
'passwordremindertext' => 'Alguém (provavelmente você, a partir do endereço de IP $1) solicitou uma nova senha para {{SITENAME}} ($4). Foi criada uma senha temporária para o usuário "$2", sendo ela "$3". Se esta era sua intenção, você precisará se autenticar e escolher uma nova senha agora.
A sua senha temporária expirará em {{PLURAL:$5|um dia|$5 dias}}.

Se foi outra pessoa quem fez este pedido, ou se você já lembrou a sua senha, e não quer mais alterá-la, você pode ignorar esta mensagem e continuar utilizando sua senha antiga.',
'noemail' => 'Não há um endereço de e-mail associado ao usuário "$1".',
'noemailcreate' => 'Você precisa fornecer um endereço de e-mail válido',
'passwordsent' => 'Uma nova senha está sendo enviada para o endereço de e-mail registrado para "$1".
Por favor, reconecte-se ao recebê-lo.',
'blocked-mailpassword' => 'O seu endereço de IP foi bloqueado de editar e, portanto, não será possível utilizar o lembrete de senha (para serem evitados envios abusivos a outras pessoas).',
'eauthentsent' => 'Uma mensagem de confirmação foi enviada para o endereço de e-mail fornecido.
Antes de qualquer outro e-mail ser enviado para a sua conta, você precisará seguir as instruções da mensagem, de modo a confirmar que a conta é mesmo sua.',
'throttled-mailpassword' => 'Um lembrete de senha já foi enviado {{PLURAL:$1|na última hora|nas últimas $1 horas}}.
Para prevenir abusos, apenas um lembrete poderá ser enviado a cada {{PLURAL:$1|hora|$1 horas}}.',
'mailerror' => 'Erro a enviar o email: $1',
'acct_creation_throttle_hit' => 'Visitantes deste wiki utilizando o seu endereço IP criaram {{PLURAL:$1|1 conta|$1 contas}} no último dia, o que é o máximo permitido neste período de tempo.
Como resultado, visitantes que usam este endereço IP não podem criar mais nenhuma conta no momento.',
'emailauthenticated' => 'O seu endereço de e-mail foi autenticado às $3 de $2.',
'emailnotauthenticated' => 'O seu endereço de e-mail ainda não foi autenticado. Não lhe será enviado nenhum e-mail sobre nenhuma das seguintes funcionalidades.',
'noemailprefs' => 'Especifique um endereço de e-mail para que os seguintes recursos funcionem.',
'emailconfirmlink' => 'Confirme o seu endereço de e-mail',
'invalidemailaddress' => "O endereço de ''e-mail'' não pode ser aceite devido a talvez possuir um formato inválido. Por favor, introduza um endereço bem formatado ou esvazie o campo.",
'cannotchangeemail' => 'A conta de e-mail não pode ser alterada neste wiki.',
'emaildisabled' => 'Este site não tem como enviar e-mails.',
'accountcreated' => 'Conta criada',
'accountcreatedtext' => 'A conta de usuário para $1 foi criada.',
'createaccount-title' => 'Criação de conta em {{SITENAME}}',
'createaccount-text' => 'Alguém criou uma conta de nome $2 para o seu endereço de email no wiki {{SITENAME}} ($4), tendo como senha "$3".
Você deve se autenticar e alterar sua senha.

Ignore esta mensagem caso a conta tenha sido criada por engano.',
'usernamehasherror' => 'Nome de usuário não pode conter o símbolo de cardinal (#).',
'login-throttled' => 'Você fez tentativas demais de se autenticar com esta conta recentemente.
Por favor aguarde antes de tentar novamente.',
'login-abort-generic' => 'A sua autenticação não teve êxito - Abortada',
'loginlanguagelabel' => 'Idioma: $1',
'suspicious-userlogout' => 'Sua solicitação para sair foi negada porque aparentemente foi enviada por um navegador danificado ou por um servidor proxy com cache.',

# E-mail sending
'php-mail-error-unknown' => 'Erro desconhecido na função mail() do PHP',
'user-mail-no-addy' => 'Tentou enviar uma mensagem sem um endereço de e-mail.',

# Change password dialog
'resetpass' => 'Alterar senha',
'resetpass_announce' => 'Você foi autenticado através de uma senha temporária. Para prosseguir, será necessário definir uma nova senha.',
'resetpass_text' => '<!-- Adicionar texto aqui -->',
'resetpass_header' => 'Alterar a senha da conta',
'oldpassword' => 'Senha antiga',
'newpassword' => 'Nova senha',
'retypenew' => 'Reintroduza a nova senha',
'resetpass_submit' => 'Definir senha e entrar',
'resetpass_success' => 'Sua senha foi alterada com sucesso! Autenticando-se...',
'resetpass_forbidden' => 'As senhas não podem ser alteradas',
'resetpass-no-info' => 'Você precisa estar autenticado para acessar esta página diretamente.',
'resetpass-submit-loggedin' => 'Alterar senha',
'resetpass-submit-cancel' => 'Cancelar',
'resetpass-wrong-oldpass' => 'Senha temporária ou atual inválida.
Você pode já ter alterado com sucesso a sua senha, ou solicitado uma nova senha temporária.',
'resetpass-temp-password' => 'Senha temporária:',

# Special:PasswordReset
'passwordreset' => 'Redefinir senha',
'passwordreset-text' => 'Preencha este formulário para recuperar os dados da sua conta pelo e-mail.',
'passwordreset-legend' => 'Reiniciar a senha',
'passwordreset-disabled' => 'Redefinições de senha foram desabilitadas nesta wiki.',
'passwordreset-pretext' => '{{PLURAL:$1||Introduza um dos dados abaixo}}',
'passwordreset-username' => 'Nome de usuário:',
'passwordreset-domain' => 'Domínio:',
'passwordreset-capture' => 'Ver o e-mail resultante?',
'passwordreset-capture-help' => 'Se marcar esta caixa, o e-mail (com a senha temporária) será-lhe mostrado, além de ser enviado para o usuário.',
'passwordreset-email' => 'Endereço de e-mail:',
'passwordreset-emailtitle' => 'Detalhes da conta em {{SITENAME}}',
'passwordreset-emailtext-ip' => 'Alguém (provavelmente você, a partir do endereço IP $1)
solicitou um lembrete dos seus detalhes de conta para {{SITENAME}} ($4).
{{PLURAL:$3|A seguinte conta está associada|As seguintes contas estão associadas}} a este e-mail:

$2

{{PLURAL:$3|Esta senha temporária vai|Essas senhas temporárias vão}} expirar em {{PLURAL:$5|um dia|$5 dias}}.
Você deve efetuar login e escolher uma nova senha agora.
Se você conseguir lembrar da senha, ignore este e-mail e continue
usando sua senha anterior. Caso contrário, prossiga com as instruções
disponíveis no link.',
'passwordreset-emailtext-user' => 'O usuário $1 da {{SITENAME}} pediu a recuperação dos detalhes da sua conta na {{SITENAME}} ($4). {{PLURAL:$3|A seguinte conta está associada|As seguintes contas estão associadas}} a este e-mail:

$2

{{PLURAL:$3|Esta senha temporária irá|Estas senhas temporárias irão}} expirar dentro de {{PLURAL:$5|um dia|$5 dias}}. Deve autenticar-se e escolher uma senha nova agora. Se este pedido não foi feito por si, ou se entretanto se recordou da sua senha original e já não deseja alterá-la, pode ignorar esta mensagem e continuar a usar a senha antiga.',
'passwordreset-emailelement' => 'Usuário: $1
Senha temporária: $2',
'passwordreset-emailsent' => 'Foi enviado um e-mail de lembrete.',
'passwordreset-emailsent-capture' => 'Foi enviado um e-mail de lembrete, que é mostrado abaixo.',
'passwordreset-emailerror-capture' => 'Foi gerado o lembrete de e-mail mostrado abaixo, contudo falhou o envio para o usuário: $1',

# Special:ChangeEmail
'changeemail' => 'Alterar o endereço de e-mail',
'changeemail-header' => 'Alterar o endereço de e-mail da conta',
'changeemail-text' => 'Preencha este formulário para alterar o endereço de e-mail. Para confirmar esta alteração terá de introduzir a sua senha.',
'changeemail-no-info' => 'Para aceder diretamente a esta página você tem de estar autenticado.',
'changeemail-oldemail' => 'Endereço de e-mail atual:',
'changeemail-newemail' => 'Novo endereço de e-mail:',
'changeemail-none' => '(nenhum)',
'changeemail-submit' => 'Alterar e-mail',
'changeemail-cancel' => 'Cancelar',

# Edit page toolbar
'bold_sample' => 'Texto em negrito',
'bold_tip' => 'Texto em negrito',
'italic_sample' => 'Texto em itálico',
'italic_tip' => 'Texto em itálico',
'link_sample' => 'Título do link',
'link_tip' => 'Link interno',
'extlink_sample' => 'http://www.example.com título do link',
'extlink_tip' => 'Link externo (lembre-se do prefixo http://)',
'headline_sample' => 'Conteúdo do cabeçalho',
'headline_tip' => 'Seção de nível 2',
'nowiki_sample' => 'Inserir texto não-formatado aqui',
'nowiki_tip' => 'Ignorar a formatação wiki',
'image_sample' => 'Exemplo.jpg',
'image_tip' => 'Arquivo embutido',
'media_sample' => 'Exemplo.ogg',
'media_tip' => 'Link para o arquivo',
'sig_tip' => 'Sua assinatura, com hora e data',
'hr_tip' => 'Linha horizontal (use de forma moderada)',

# Edit pages
'summary' => 'Sumário:',
'subject' => 'Assunto/cabeçalho:',
'minoredit' => 'Marcar como edição menor',
'watchthis' => 'Vigiar esta página',
'savearticle' => 'Salvar página',
'preview' => 'Pré-visualização',
'showpreview' => 'Mostrar previsão',
'showlivepreview' => 'Pré-visualização em tempo real',
'showdiff' => 'Mostrar alterações',
'anoneditwarning' => "'''Atenção''': Você não se encontra autenticado.
O seu endereço de IP será registrado no histórico de edições desta página.",
'anonpreviewwarning' => "''Você não está logado. Gravar registará o seu endereço IP no histórico de edições desta página.''",
'missingsummary' => "'''Lembrete:''' Você não introduziu um sumário de edição. Se clicar novamente em Salvar, a sua edição será salva sem um sumário.",
'missingcommenttext' => 'Por favor, introduzida um comentário abaixo.',
'missingcommentheader' => "'''Lembrete:''' Você não introduziu um assunto/título para este comentário.
Se você clicar novamente \"{{int:savearticle}}\", a sua edição será salva sem um assunto/título.",
'summary-preview' => 'Previsão de sumário:',
'subject-preview' => 'Previsão do assunto/título:',
'blockedtitle' => 'O usuário está bloqueado',
'blockedtext' => "'''O seu nome de usuário ou endereço de IP foi bloqueado.'''

O bloqueio foi realizado por \$1.
O motivo apresentado foi ''\$2''.

* Início do bloqueio: \$8
* Expiração do bloqueio: \$6
* Destino do bloqueio: \$7

Você pode contatar \$1 ou outro [[{{MediaWiki:Grouppage-sysop}}|administrador]] para discutir sobre o bloqueio.

Você só poderá utilizar a funcionalidade \"Contatar usuário\" se um endereço de ''e-mail'' válido estiver especificado em suas [[Special:Preferences|preferências de usuário]] e você não tiver sido bloqueado de utilizar tal recurso.
O seu endereço de IP atual é \$3 e a ID de bloqueio é #\$5.
Por favor, inclua todos os detalhes acima em quaisquer tentativas de esclarecimento.",
'autoblockedtext' => 'O seu endereço de IP foi bloqueado de forma automática, uma vez que foi utilizado recentemente por outro usuário, o qual foi bloqueado por $1.
O motivo apresentado foi:

:\'\'$2\'\'

* Início do bloqueio: $8
* Expiração do bloqueio: $6
* Destino do bloqueio: $7

Você pode contatar $1 ou outro [[{{MediaWiki:Grouppage-sysop}}|administrador]] para discutir sobre o bloqueio.

Note que não poderá utilizar a funcionalidade "Contatar usuário" se não possuir uma conta nesta wiki ({{SITENAME}}) com um endereço de \'\'e-mail\'\' válido indicado nas suas [[Special:Preferences|preferências de usuário]] ou se tiver sido bloqueado de utilizar tal recurso.

Seu endereço de IP no momento é $3 e sua ID de bloqueio é #$5.
Por favor, inclua tais dados em qualquer tentativa de esclarecimentos que for realizar.',
'blockednoreason' => 'sem motivo especificado',
'whitelistedittext' => 'Você precisa $1 para poder editar páginas.',
'confirmedittext' => 'Você precisa confirmar o seu endereço de e-mail antes de começar a editar páginas.
Por favor, introduza um e valide-o através das suas [[Special:Preferences|preferências de usuário]].',
'nosuchsectiontitle' => 'Não foi possível encontrar a seção',
'nosuchsectiontext' => 'Você tentou editar uma seção que não existe.
Ela pode ter sido movida ou removido enquanto você estava vendo a página.',
'loginreqtitle' => 'Autenticação Requerida',
'loginreqlink' => 'autenticar-se',
'loginreqpagetext' => 'É necessário $1 para poder visualizar outras páginas.',
'accmailtitle' => 'Senha enviada.',
'accmailtext' => "Uma senha gerada aleatoriamente para [[User talk:$1|$1]] foi enviada para $2.

A senha para esta nova conta pode ser alterada na página ''[[Special:ChangePassword|de troca de senha]]'', após a autenticação.",
'newarticle' => '(Nova)',
'newarticletext' => "Você seguiu um link para uma página que ainda não existe.
Para criá-la, comece escrevendo na caixa abaixo (veja [[{{MediaWiki:Helppage}}|a página de ajuda]] para mais informações).
Se você chegou aqui por engano, clique no botão '''voltar''' do seu navegador.",
'anontalkpagetext' => "---- ''Esta é a página de discussão para um usuário anônimo que ainda não criou uma conta ou que não a usa, de forma que temos de utilizar o endereço de IP para identificá-lo(a). Tal endereço de IP pode ser compartilhado por vários usuários. Se você é um usuário anônimo e acha que comentários irrelevantes foram direcionados a você, por gentileza, [[Special:UserLogin/signup|crie uma conta]] ou [[Special:UserLogin|autentique-se]], a fim de evitar futuras confusões com outros usuários anônimos.''",
'noarticletext' => 'No momento, não há conteúdo nesta página.
Você pode [[Special:Search/{{PAGENAME}}|pesquisar pelo título desta página]] em outras páginas, <span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} buscar por registros relacionados],
ou [{{fullurl:{{FULLPAGENAME}}|action=edit}} criar esta página]</span>.',
'noarticletext-nopermission' => 'No momento, não há conteúdo nesta página
Você pode [[Special:Search/{{PAGENAME}}|pesquisar pelo título desta página]] em outras páginas,
ou <span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} buscar por registros relacionados] </span>. Note que, no entanto, você não tem permissão para criar esta página.',
'missing-revision' => 'A revisão #$1 da página denominada "{{PAGENAME}}" não existe.

Isto é geralmente causado por seguir um link de histórico desatualizado para uma página que foi eliminada.
Os detalhes podem ser encontrados no [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} registo de eliminação].',
'userpage-userdoesnotexist' => 'A conta "<nowiki>$1</nowiki>" não se encontra registrada.
Verifique se deseja mesmo criar/editar esta página.',
'userpage-userdoesnotexist-view' => 'A conta de usuário "$1" não está registrada.',
'blocked-notice-logextract' => 'Este usuário está atualmente bloqueado.
O registro de bloqueio mais recente é fornecido abaixo, para referência:',
'clearyourcache' => "Nota:''' Depois de salvar, você terá de limpar o ''cache'' do seu navegador para ver as alterações.
* '''Firefox / Safari:''' pressione ''Shift'' enquanto clica em ''Recarregar'', ou pressione ''Ctrl-F5'' ou ''Ctrl-R'' (''Command-R'' para Mac);
* '''Google Chrome:''' pressione ''Ctrl-Shift-R'' (''Command-Shift-R'' em um Mac)
* '''Internet Explorer:''' pressione ''Ctrl'' enquanto clica em ''Recarregar'' ou pressione ''Ctrl-F5'';
* '''Opera:''' limpe o ''cache'' em ''Ferramentas → Preferências'' (''Tools → Preferences'')",
'usercssyoucanpreview' => "'''Dica:''' Utilize o botão \"{{int:showpreview}}\" para testar seu novo CSS antes de salvar.",
'userjsyoucanpreview' => "'''Dica:''' Utilize o botão \"{{int:showpreview}}\" para testar seu novo JavaScript antes de salvar.",
'usercsspreview' => "'''Lembre-se de que você está apenas previsualizando o seu CSS particular.'''
'''Ele ainda não foi salvo!'''",
'userjspreview' => "'''Lembre-se que está apenas testando/prevendo o seu JavaScript particular e que ele ainda não foi salvo!'''",
'sitecsspreview' => "'''Lembre-se de que você está apenas previsualizando este CSS.'''
'''Ele ainda não foi salvo!'''",
'sitejspreview' => "''Lembre-se de que você está apenas previsualizando este código JavaScript.'''
'''Ele ainda não foi salvo!'''",
'userinvalidcssjstitle' => "'''Aviso:''' Não existe um tema \"\$1\". Lembre-se que as páginas .css e  .js utilizam um título em minúsculas, exemplo: {{ns:user}}:Alguém/vector.css aposto a {{ns:user}}:Alguém/Vector.css.",
'updated' => '(Atualizado)',
'note' => "'''Nota:'''",
'previewnote' => "'''Lembre-se de que isto é apenas uma previsão.'''
Suas alterações ainda não foram salvas!",
'continue-editing' => 'Continuar editando',
'previewconflict' => 'Esta previsão reflete o texto que está na área de edição acima e como ele aparecerá se você escolher salvar.',
'session_fail_preview' => "'''Pedimos desculpas, mas não foi possível processar a sua edição devido à perda de dados da sua sessão.
Por favor tente novamente.
Caso continue não funcionando, tente [[Special:UserLogout|sair]] e voltar a entrar na sua conta.'''",
'session_fail_preview_html' => "'''Desculpe-nos! Não foi possível processar a sua edição devido a uma perda de dados de sessão.'''

''Como o projeto {{SITENAME}} possui HTML bruto ativo, a previsão não será exibida, como uma precaução contra ataques por JavaScript.''

'''Se esta é uma tentativa de edição legítima, por favor tente novamente.
Caso continue não funcionando, tente [[Special:UserLogout|desautenticar-se]] e voltar a entrar na sua conta.'''",
'token_suffix_mismatch' => "'''A sua edição foi rejeitada uma vez que seu software de navegação mutilou os sinais de pontuação do sinal de edição. A edição foi rejeitada para evitar perdas no texto da página.
Isso acontece ocasionalmente quando se usa um serviço de proxy anonimizador mal configurado.'''",
'edit_form_incomplete' => "'''Algumas partes do formulário de edição não chegaram ao servidor; verifique que a sua edição continua intacta e tente novamente, por favor.'''",
'editing' => 'Editando $1',
'creating' => 'Criando $1',
'editingsection' => 'Editando $1 (seção)',
'editingcomment' => 'Editando $1 (nova seção)',
'editconflict' => 'Conflito de edição: $1',
'explainconflict' => "Alguém mudou a página enquanto você a estava editando.
A área de texto acima mostra o texto original.
Suas mudanças são mostradas na área abaixo.
Você terá que mesclar suas modificações no texto existente.
'''SOMENTE''' o texto na área acima será salvo quando você pressionar \"{{int:savearticle}}\".",
'yourtext' => 'Seu texto',
'storedversion' => 'Versão guardada',
'nonunicodebrowser' => "'''AVISO: O seu navegador não é compatível com as especificações unicode.'''
Um contorno terá de ser utilizado para permitir que você possa editar as páginas com segurança: os caracteres não-ASCII aparecerão na caixa de edição no formato de códigos hexadecimais.",
'editingold' => "'''CUIDADO: Você está editando uma revisão desatualizada desta página.'''
Se você salvá-la, todas as mudanças feitas a partir desta revisão serão perdidas.",
'yourdiff' => 'Diferenças',
'copyrightwarning' => "Por favor, note que todas as suas contribuições em {{SITENAME}} são consideradas como lançadas nos termos da licença $2 (veja $1 para detalhes). Se não deseja que o seu texto seja inexoravelmente editado e redistribuído de tal forma, não o envie.<br />
Você está, ao mesmo tempo, garantindo-nos que isto é algo escrito por você mesmo ou algo copiado de uma fonte de textos em domínio público ou similarmente de teor livre.
'''NÃO ENVIE TRABALHO PROTEGIDO POR DIREITOS AUTORAIS SEM A DEVIDA PERMISSÃO!'''",
'copyrightwarning2' => "Por favor, note que todas as suas contribuições em {{SITENAME}} podem ser editadas, alteradas ou removidas por outros contribuidores. Se você não deseja que o seu texto seja inexoravelmente editado, não o envie.<br />
Você está, ao mesmo tempo, a garantir-nos que isto é algo escrito por si, ou algo copiado de alguma fonte de textos em domínio público ou similarmente de teor livre (veja $1 para detalhes).
'''NÃO ENVIE TRABALHO PROTEGIDO POR DIREITOS DE AUTOR SEM A DEVIDA PERMISSÃO!'''",
'longpageerror' => "'''Erro: O texto que submeteu ocupa {{PLURAL:$1|um kilobyte|$1 kilobytes}}, que excede o máximo de {{PLURAL:$2|um kilobyte|$2 kilobytes}}.'''
A página não pode ser salva.",
'readonlywarning' => "'''Aviso: A base de dados foi bloqueada para manutenção, por isso você não poderá salvar a sua edição neste momento.'''
Pode, no entanto, copiar o seu texto num editor externo e guardá-lo para posterior envio.

Quem bloqueou o banco de dados forneceu a seguinte justificativa: $1",
'protectedpagewarning' => "'''Atenção: Esta página foi protegida para que apenas usuários com privilégios de administrador possam editá-la.'''
A última entrada no histórico é fornecida abaixo como referência:",
'semiprotectedpagewarning' => "'''Nota:''' Esta página foi protegida, sendo que apenas usuários registrados poderão editá-la.
A última entrada no histórico é fornecida abaixo para referência:",
'cascadeprotectedwarning' => "'''Atenção:''' Esta página se encontra protegida; apenas {{int:group-sysop}} podem editá-la, uma vez que se encontra incluída {{PLURAL:\$1|na seguinte página protegida|nas seguintes páginas protegidas}} com a \"proteção progressiva\":",
'titleprotectedwarning' => "'''Atenção: esta página foi protegida; [[Special:ListGroupRights|privilégios específicos]] são necessários para criá-la.'''
A última entrada no histórico é fornecida abaixo como referência:",
'templatesused' => '{{PLURAL:$1|Predefinição usada|Predefinições usadas}} nesta página:',
'templatesusedpreview' => '{{PLURAL:$1|Predefinição usada|Predefinições usadas}} nesta previsão:',
'templatesusedsection' => '{{PLURAL:$1|Predefinição utilizada|Predefinições utilizadas}} nesta seção:',
'template-protected' => '(protegida)',
'template-semiprotected' => '(semi-protegida)',
'hiddencategories' => 'Esta página pertence a {{PLURAL:$1|uma categoria oculta|$1 categorias ocultas}}:',
'edittools' => '<!-- O texto aqui disponibilizado será exibido abaixo dos formulários de edição e de envio de arquivos. -->',
'nocreatetitle' => 'A criação de páginas se encontra limitada',
'nocreatetext' => '{{SITENAME}} tem restringida a habilidade de criar novas páginas.
Volte à tela anterior e edite uma página já existente, ou [[Special:UserLogin|autentique-se ou crie uma conta]].',
'nocreate-loggedin' => 'Você não possui permissão para criar novas páginas.',
'sectioneditnotsupported-title' => 'Edição por seções não suportada',
'sectioneditnotsupported-text' => 'Edição por seções não suportada nesta página.',
'permissionserrors' => 'Erros de permissões',
'permissionserrorstext' => 'Você não possui permissão de fazer isso, {{PLURAL:$1|pelo seguinte motivo|pelos seguintes motivos}}:',
'permissionserrorstext-withaction' => 'Você não possui permissão para $2, {{PLURAL:$1|pelo seguinte motivo|pelos motivos a seguir}}:',
'recreate-moveddeleted-warn' => "'''Atenção: Você está recriando uma página já eliminada em outra ocasião.'''

Considere se é realmente adequado continuar editando esta página.
Os registros de eliminação e de movimentação desta página são exibidos a seguir, para sua comodidade:",
'moveddeleted-notice' => 'Esta página foi eliminada.
Os registros de eliminação e de movimentação para esta página estão disponibilizados abaixo, para referência.',
'log-fulllog' => 'Ver registro detalhado',
'edit-hook-aborted' => "Edição abortada por ''hook''.
Ele não deu nenhuma explicação.",
'edit-gone-missing' => 'Não foi possível atualizar a página.
Ela parece ter sido eliminada.',
'edit-conflict' => 'Conflito de edição.',
'edit-no-change' => 'A sua edição foi ignorada, uma vez que o texto não sofreu alterações.',
'edit-already-exists' => 'Não foi possível criar uma nova página.
Ela já existia.',
'defaultmessagetext' => 'Texto da mensagem padrão',

# Parser/template warnings
'expensive-parserfunction-warning' => 'Aviso: Esta página contém muitas chamadas a funções do analisador "parser".

Deveria ter menos de $2 {{PLURAL:$2|chamada|chamadas}}. Neste momento {{PLURAL:$1|há $1 chamada|existem $1 chamadas}}.',
'expensive-parserfunction-category' => 'Páginas com muitas chamadas a funções do analisador "parser"',
'post-expand-template-inclusion-warning' => "'''Aviso''': a soma do tamanho de inclusão de predefinições é muito grande.
Algumas predefinições não serão processadas.",
'post-expand-template-inclusion-category' => 'Páginas onde a soma do tamanho de inclusão de predefinições é excedido',
'post-expand-template-argument-warning' => 'Aviso: Esta página contém pelo menos um argumento de predefinição com um tamanho muito grande.
Estes argumentos foram omitidos.',
'post-expand-template-argument-category' => 'Páginas com omissões de argumentos em predefinições',
'parser-template-loop-warning' => 'Ciclo de predefinições detectado: [[$1]]',
'parser-template-recursion-depth-warning' => 'O limite de profundidade de recursividade de predefinição foi ultrapassado ($1)',
'language-converter-depth-warning' => 'O limite de profundidade do conversor de línguas excedeu a ($1)',
'node-count-exceeded-category' => 'Páginas em que o total de nós é excedido',
'node-count-exceeded-warning' => 'A página excedeu o total de nós',
'expansion-depth-exceeded-category' => 'Páginas em que a profundidade de expansão é excedida',
'expansion-depth-exceeded-warning' => 'A página excedeu a profundidade de expansão',
'parser-unstrip-loop-warning' => 'Foi detectado um ciclo infinito unstrip',
'parser-unstrip-recursion-limit' => 'Limite de recursão do unstrip excedido ($1)',
'converter-manual-rule-error' => 'Erro detectado na regra de conversão de língua manual',

# "Undo" feature
'undo-success' => 'A edição pôde ser desfeita. Por gentileza, verifique o comparativo a seguir para se certificar de que é isto que deseja fazer, salvando as alterações após ter terminado de revisá-las.',
'undo-failure' => 'A edição não pôde ser desfeita devido a alterações intermediárias conflitantes.',
'undo-norev' => 'A edição não pôde ser desfeita porque não existe ou foi apagada.',
'undo-summary' => 'Desfeita a edição $1 de [[Special:Contributions/$2|$2]] ([[User talk:$2|Discussão]])',

# Account creation failure
'cantcreateaccounttitle' => 'Não é possível criar uma conta',
'cantcreateaccount-text' => "Este IP ('''$1''') foi bloqueado de criar novas contas por [[User:$3|$3]].

A justificativa apresentada por $3 foi ''$2''",

# History pages
'viewpagelogs' => 'Ver registros para esta página',
'nohistory' => 'Não há histórico de revisões para esta página.',
'currentrev' => 'Revisão atual',
'currentrev-asof' => 'Edição atual tal como às $1',
'revisionasof' => 'Edição das $1',
'revision-info' => 'Edição feita às $1 por $2',
'previousrevision' => '← Edição anterior',
'nextrevision' => 'Versão posterior →',
'currentrevisionlink' => 'ver versão atual',
'cur' => 'atu',
'next' => 'prox',
'last' => 'ult',
'page_first' => 'primeira',
'page_last' => 'última',
'histlegend' => "Como selecionar: marque as caixas de seleção das versões que deseja comparar e pressione enter ou clique no botão na parte inferior do formulário.<br />
Legenda: '''({{int:cur}})''' = diferenças em relação a última versão, '''({{int:last}})''' = diferenças em relação a versão anterior, '''{{int:minoreditletter}}''' = edição menor.",
'history-fieldset-title' => 'Navegar pelo histórico',
'history-show-deleted' => 'Apenas as eliminadas',
'histfirst' => 'Mais antigas',
'histlast' => 'Mais recentes',
'historysize' => '({{PLURAL:$1|1 byte|$1 bytes}})',
'historyempty' => '(vazio)',

# Revision feed
'history-feed-title' => 'Histórico de revisão',
'history-feed-description' => 'Histórico de revisões para esta página neste wiki',
'history-feed-item-nocomment' => '$1 em $2',
'history-feed-empty' => 'A página requisitada não existe.
Poderá ter sido eliminada do wiki ou renomeada.
Tente [[Special:Search|pesquisar no wiki]] por páginas relevantes.',

# Revision deletion
'rev-deleted-comment' => '(resumo da edição suprimido)',
'rev-deleted-user' => '(nome de usuário removido)',
'rev-deleted-event' => '(entrada removida)',
'rev-deleted-user-contribs' => '[nome de usuário ou endereço de IP eliminado - edição ocultada das contribuições]',
'rev-deleted-text-permission' => "Esta revisão desta página foi '''eliminada'''.
Podem existir mais detalhes no [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} registro de eliminações].",
'rev-deleted-text-unhide' => "Esta revisão desta página foi '''removida'''.
Poderá haver detalhes no [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} registro de eliminação].
Você ainda pode [$1 ver esta revisão] se deseja prosseguir.",
'rev-suppressed-text-unhide' => "Esta revisão desta página foi '''removida'''.
Poderá haver detalhes no [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} registro de eliminação].
Você ainda pode [$1 ver esta revisão] se deseja prosseguir.",
'rev-deleted-text-view' => "A revisão desta página foi '''eliminada'''.
Você pode visualizá-la; pode haver detalhes no [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} registro de eliminação].",
'rev-suppressed-text-view' => "A revisão desta página foi '''eliminada'''.
Você pode visualizá-la; podem existir mais detalhes no [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} registro de eliminação].",
'rev-deleted-no-diff' => "Você não pode ver estas diferenças porque uma das revisões foi '''eliminada'''.
Poderá haver detalhes no [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} registro de eliminação].",
'rev-suppressed-no-diff' => "Você não pode ver esta comparação porque uma das revisões foi '''eliminada'''.",
'rev-deleted-unhide-diff' => "Uma das revisões desta diferença entre revisões foi '''eliminada'''.
Podem existir mais detalhes no [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} registro de eliminações].
Pode mesmo assim [$1 ver estas diferenças] se deseja prosseguir.",
'rev-suppressed-unhide-diff' => "Uma das revisões desta diferença entre revisões foi '''suprimida'''.
Podem existir mais detalhes no [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} registro de supressões].
Pode mesmo assim [$1 ver estas diferenças] se deseja prosseguir.",
'rev-deleted-diff-view' => "Uma das revisões desta diferença entre revisões foi '''eliminada'''.
Você pode ver a diferença entre revisões; podem existir mais detalhes no [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} registro de eliminações].",
'rev-suppressed-diff-view' => "Uma das revisões desta comparação foi '''suprimida''''.
Você pode ver esta comparação; detalhes podem ser encontrados no [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} registro de supressão].",
'rev-delundel' => 'exibir/ocultar',
'rev-showdeleted' => 'exibir',
'revisiondelete' => 'Eliminar/restaurar edições',
'revdelete-nooldid-title' => 'Nenhuma revisão selecionada',
'revdelete-nooldid-text' => 'Você ou não especificou uma(s) edição(ões) de destino, a edição especificada não existe ou, ainda, você está tentando ocultar a edição atual.',
'revdelete-nologtype-title' => 'Tipo de registro não especificado',
'revdelete-nologtype-text' => 'Você não especificou um tipo de registro sobre o qual executar esta ação.',
'revdelete-nologid-title' => 'Entrada de registro inválida',
'revdelete-nologid-text' => 'Você não especificou um evento de registro alvo para executar esta função ou a entrada especificada não existe.',
'revdelete-no-file' => 'O arquivo especificado não existe.',
'revdelete-show-file-confirm' => 'Tem a certeza de que quer visualizar uma revisão eliminada do arquivo "<nowiki>$1</nowiki>" de $2 em $3?',
'revdelete-show-file-submit' => 'Sim',
'revdelete-selected' => "'''{{PLURAL:$2|Edição selecionada|Edições selecionadas}} de [[:$1]]:'''",
'logdelete-selected' => "'''{{PLURAL:$1|Evento de registro selecionado|Eventos de registro selecionados}}:'''",
'revdelete-text' => "'''Revisões eliminadas e eventos continuarão aparecendo no histórico da página e nos registros, apesar de o seu conteúdo textual estar inacessível ao público.'''
Outros administradores no {{SITENAME}} continuarão podendo acessar ao conteúdo escondido e restaurá-lo através desta mesma ''interface'', a menos que uma restrição adicional seja definida.",
'revdelete-confirm' => 'Por favor confirme que pretende executar esta ação, que compreende as suas consequências e que o faz em concordância com as [[{{MediaWiki:Policy-url}}|políticas e recomendações]].',
'revdelete-suppress-text' => "A supressão deverá ser usada '''apenas''' para os seguintes casos:
* Informação pessoal inapropriada
*: ''endereços de domicílio e números de telefone, números da segurança social, etc''",
'revdelete-legend' => 'Definir restrições de visualização',
'revdelete-hide-text' => 'Ocultar texto da edição',
'revdelete-hide-image' => 'Ocultar conteúdos do arquivo',
'revdelete-hide-name' => 'Ocultar ação e alvo',
'revdelete-hide-comment' => 'Ocultar o sumário de edição',
'revdelete-hide-user' => 'Ocultar nome de usuário/IP do editor',
'revdelete-hide-restricted' => 'Suprimir dados de administradores assim como de outros',
'revdelete-radio-same' => '(não altere)',
'revdelete-radio-set' => 'Sim',
'revdelete-radio-unset' => 'Não',
'revdelete-suppress' => 'Suprimir dados de administradores, bem como de outros',
'revdelete-unsuppress' => 'Remover restrições das edições restauradas',
'revdelete-log' => 'Motivo:',
'revdelete-submit' => 'Aplicar {{PLURAL:$1|à revisão selecionada|à revisões selecionadas}}',
'revdelete-success' => "'''A visibilidade da revisão foi definida com sucesso.'''",
'revdelete-failure' => "'''A visibilidade da revisão não foi atualizada:'''
$1",
'logdelete-success' => "'''Visibilidade de evento definida com sucesso.'''",
'logdelete-failure' => "'''A visibilidade do registro não pôde ser estabelecida:'''
$1",
'revdel-restore' => 'alterar visibilidade',
'revdel-restore-deleted' => 'edições eliminadas',
'revdel-restore-visible' => 'edições visíveis',
'pagehist' => 'Histórico da página',
'deletedhist' => 'Histórico de eliminações',
'revdelete-hide-current' => 'Erro ao ocultar o item datado de $2, $1: esta é a revisão atual.
Não pode ser ocultada.',
'revdelete-show-no-access' => 'Erro ao mostrar o item datado de $2, $1: este item foi marcado como "restrito".
Você não tem acesso a ele.',
'revdelete-modify-no-access' => 'Erro ao modificar o item datado de $2, $1: este item foi marcado como "restrito".
Você não tem acesso a ele.',
'revdelete-modify-missing' => 'Erro ao modificar o item ID $1: está faltando na base de dados!',
'revdelete-no-change' => "'''Aviso:''' o item datado de $2, $1 já possui as configurações de visualização requeridas.",
'revdelete-concurrent-change' => 'Erro ao modificar o item datado de $2, $1: o seu estado parece ter sido alterado por outra pessoa enquanto você tentava modificá-lo.
Por favor, verifique os registros.',
'revdelete-only-restricted' => 'Erro ao ocultar o item de $2 às $1: você não pode impedir que itens sejam visualizados por administradores sem também selecionar uma das outras opções de visibilidade.',
'revdelete-reason-dropdown' => '*Razões comuns para eliminação
** Violação de direitos de autor
** Comentário ou informação pessoal inapropriada
** Nome de usuário impróprio
** Informação potencialmente difamatória',
'revdelete-otherreason' => 'Outro motivo/motivo adicional:',
'revdelete-reasonotherlist' => 'Outro motivo',
'revdelete-edit-reasonlist' => 'Editar motivos de eliminação',
'revdelete-offender' => 'Autor da revisão:',

# Suppression log
'suppressionlog' => 'Registro de supressões',
'suppressionlogtext' => 'Abaixo está uma lista das eliminações e bloqueios envolvendo conteúdo ocultado por administradores.
Veja a [[Special:BlockList|lista de bloqueios]] para uma lista de banimentos e bloqueios em efeito neste momento.',

# History merging
'mergehistory' => 'Fundir histórico de páginas',
'mergehistory-header' => 'A partir desta página é possível fundir históricos de edições de uma página em outra.
Certifique-se de que tal alteração manterá a continuidade das ações.',
'mergehistory-box' => 'Fundir revisões de duas páginas:',
'mergehistory-from' => 'Página de origem:',
'mergehistory-into' => 'Página de destino:',
'mergehistory-list' => 'Histórico de edições habilitadas para fusão',
'mergehistory-merge' => 'As edições de [[:$1]] a seguir poderão ser fundidas em [[:$2]]. Utilize a coluna de botões de opção para fundir apenas as edições feitas entre o intervalo de tempo especificado. Note que ao utilizar os links de navegação esta coluna será retornada a seus valores padrão.',
'mergehistory-go' => 'Exibir edições habilitadas a serem fundidas',
'mergehistory-submit' => 'Fundir edições',
'mergehistory-empty' => 'Não existem edições habilitadas a serem fundidas.',
'mergehistory-success' => '$3 {{PLURAL:$3|revisão|revisões}} de [[:$1]] fundidas em [[:$2]] com sucesso.',
'mergehistory-fail' => 'Não foi possível fundir os históricos; por gentileza, verifique a página e os parâmetros de tempo.',
'mergehistory-no-source' => 'A página de origem ($1) não existe.',
'mergehistory-no-destination' => 'A página de destino ($1) não existe.',
'mergehistory-invalid-source' => 'A página de origem precisa ser um título válido.',
'mergehistory-invalid-destination' => 'A página de destino precisa ser um título válido.',
'mergehistory-autocomment' => '[[:$1]] fundido em [[:$2]]',
'mergehistory-comment' => '[[:$1]] fundido em [[:$2]]: $3',
'mergehistory-same-destination' => 'As páginas de origem e de destino não podem ser as mesmas',
'mergehistory-reason' => 'Motivo:',

# Merge log
'mergelog' => 'Registro de fusão de históricos',
'pagemerge-logentry' => '[[$1]] foi fundida em [[$2]] (até a edição $3)',
'revertmerge' => 'Desfazer fusão',
'mergelogpagetext' => 'Segue-se um registro das mais recentes fusões de históricos de páginas.',

# Diffs
'history-title' => 'Histórico de edições de "$1"',
'difference-title' => 'Mudanças entre as edições de "$1"',
'difference-title-multipage' => 'Mudanças entre as páginas "$1" e "$2"',
'difference-multipage' => '(Diferenças entre páginas)',
'lineno' => 'Linha $1:',
'compareselectedversions' => 'Compare as versões selecionadas',
'showhideselectedversions' => 'Exibir/ocultar edições selecionadas',
'editundo' => 'desfazer',
'diff-multi' => '({{PLURAL:$1|Uma edição intermediária|$1 edições intermediárias}} de {{PLURAL:$2|um usuário|$2 usuários}} {{PLURAL:$1|não apresentada|não apresentadas}})',
'diff-multi-manyusers' => '({{PLURAL:$1|Uma edição intermediária|$1 edições intermediárias}} de mais de {{PLURAL:$2|um usuário|$2 usuário}} não {{PLURAL:$1|apresentada|apresentadas}})',
'difference-missing-revision' => '{{PLURAL:$2|Uma revisão|$2 revisões}} desta diferença ($1) não {{PLURAL:$2|foi encontrada|foram encontradas}}.

Isto é geralmente causado por seguir um link de histórico desatualizado para uma página que foi eliminada.
Os detalhes podem ser encontrados no [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} registo de eliminação].',

# Search results
'searchresults' => 'Resultados da pesquisa',
'searchresults-title' => 'Resultados da pesquisa por "$1"',
'searchresulttext' => 'Para mais informações de como pesquisar na {{SITENAME}}, consulte [[{{MediaWiki:Helppage}}|{{int:help}}]].',
'searchsubtitle' => 'Você pesquisou por \'\'\'[[:$1]]\'\'\' ([[Special:Prefixindex/$1|páginas iniciadas por "$1"]]{{int:pipe-separator}}[[Special:WhatLinksHere/$1|páginas que apontam para "$1"]])',
'searchsubtitleinvalid' => 'Você pesquisou por "$1"',
'toomanymatches' => 'Foram retornados muitos resultados. Por favor, tente um filtro de pesquisa diferente',
'titlematches' => 'Resultados nos títulos das páginas',
'notitlematches' => 'Nenhum título de página coincide',
'textmatches' => 'Resultados nos textos das páginas',
'notextmatches' => 'Não foi possível localizar, no conteúdo das páginas, o termo pesquisado',
'prevn' => '{{PLURAL:$1|anterior|$1 anteriores}}',
'nextn' => '{{PLURAL:$1|próximo|próximos $1}}',
'prevn-title' => '$1 {{PLURAL:$1|resultado anterior|resultados anteriores}}',
'nextn-title' => '{{PLURAL:$1|próximo|próximos}} $1 {{PLURAL:$1|resultado|resultados}}',
'shown-title' => 'Mostrar $1 {{PLURAL:$1|resultado|resultados}} por página',
'viewprevnext' => 'Ver ($1 {{int:pipe-separator}} $2) ($3).',
'searchmenu-legend' => 'Opções de pesquisa',
'searchmenu-exists' => "'''Há uma página com o nome \"[[:\$1]]\" nesta wiki'''",
'searchmenu-new' => "'''Criar a página \"[[:\$1|\$1]]\" nesta wiki!'''",
'searchhelp-url' => 'Help:Conteúdos',
'searchmenu-prefix' => '[[Special:PrefixIndex/$1|Navegue pelas páginas com este prefixo]]',
'searchprofile-articles' => 'Páginas de conteúdo',
'searchprofile-project' => 'Ajuda e páginas de projeto',
'searchprofile-images' => 'Multimídia',
'searchprofile-everything' => 'Tudo',
'searchprofile-advanced' => 'Avançado',
'searchprofile-articles-tooltip' => 'Pesquisar em $1',
'searchprofile-project-tooltip' => 'Pesquisar em $1',
'searchprofile-images-tooltip' => 'Pesquisar arquivos',
'searchprofile-everything-tooltip' => 'Pesquisar em todo o conteúdo (incluindo páginas de discussão)',
'searchprofile-advanced-tooltip' => 'Personalizar os espaços nominais onde pesquisar',
'search-result-size' => '$1 ({{PLURAL:$2|1 palavra|$2 palavras}})',
'search-result-category-size' => '{{PLURAL:$1|1 membro|$1 membros}} ({{PLURAL:$2|1 subcategoria|$2 subcategorias}}, {{PLURAL:$3|1 arquivo|$3 arquivos}})',
'search-result-score' => 'Relevância: $1%',
'search-redirect' => '(redirecionamento de $1)',
'search-section' => '(seção $1)',
'search-suggest' => 'Você quis dizer: $1',
'search-interwiki-caption' => 'Projetos irmãos',
'search-interwiki-default' => 'Resultados de $1:',
'search-interwiki-more' => '(mais)',
'search-relatedarticle' => 'Relacionado',
'mwsuggest-disable' => 'Desativar sugestões AJAX',
'searcheverything-enable' => 'Procurar em todos os espaços nominais',
'searchrelated' => 'relacionados',
'searchall' => 'todos',
'showingresults' => "A seguir {{PLURAL:$1|é mostrado '''um''' resultado|são mostrados até '''$1''' resultados}}, iniciando no '''$2'''º.",
'showingresultsnum' => "A seguir {{PLURAL:$3|é mostrado '''um''' resultado|são mostrados '''$3''' resultados}}, iniciando com o '''$2'''º.",
'showingresultsheader' => "{{PLURAL:$5|Resulado '''$1''' de '''$3'''|Resultados '''$1 - $2''' de '''$3'''}} para '''$4'''",
'nonefound' => "'''Nota''': apenas alguns espaços nominais são pesquisados por padrão.
Tente utilizar o prefixo ''all:'' em sua busca, para pesquisar por todos os conteúdos deste wiki (inclusive páginas de discussão, predefinições etc), ou mesmo, utilizando o espaço nominal desejado como prefixo.",
'search-nonefound' => 'Não há resultados que correspondam à consulta.',
'powersearch' => 'Pesquisa avançada',
'powersearch-legend' => 'Pesquisa avançada',
'powersearch-ns' => 'Pesquisar nos espaços nominais:',
'powersearch-redir' => 'Listar redirecionamentos',
'powersearch-field' => 'Pesquisar',
'powersearch-togglelabel' => 'Selecionar:',
'powersearch-toggleall' => 'Todos',
'powersearch-togglenone' => 'Nenhum',
'search-external' => 'Pesquisa externa',
'searchdisabled' => 'A busca em {{SITENAME}} se encontra desativada.
Você poderá pesquisar através do Google enquanto isso.
Note que os índices do sistema de busca externo poderão conter referências desatualizadas a {{SITENAME}}.',

# Quickbar
'qbsettings' => 'Configurações da Barra Rápida',
'qbsettings-none' => 'Nenhuma',
'qbsettings-fixedleft' => 'Fixo à esquerda',
'qbsettings-fixedright' => 'Fixo à direita',
'qbsettings-floatingleft' => 'Flutuando à esquerda',
'qbsettings-floatingright' => 'Flutuando à direita',
'qbsettings-directionality' => 'Fixado, dependendo da direcionalidade do seu alfabeto e da sua língua',

# Preferences page
'preferences' => 'Preferências',
'mypreferences' => 'Minhas preferências',
'prefs-edits' => 'Número de edições:',
'prefsnologin' => 'Não autenticado',
'prefsnologintext' => 'É necessário estar <span class="plainlinks">[{{fullurl:{{#Special:UserLogin}}|returnto=$1}} autenticado]</span> para definir as suas preferências.',
'changepassword' => 'Alterar senha',
'prefs-skin' => 'Tema',
'skin-preview' => 'Pré-visualização',
'datedefault' => 'Sem preferência',
'prefs-beta' => 'Características beta',
'prefs-datetime' => 'Data e hora',
'prefs-labs' => 'Características de laboratório',
'prefs-user-pages' => 'Páginas de usuário',
'prefs-personal' => 'Perfil de usuário',
'prefs-rc' => 'Mudanças recentes',
'prefs-watchlist' => 'Lista de páginas vigiadas',
'prefs-watchlist-days' => 'Dias a mostrar na lista de páginas vigiadas:',
'prefs-watchlist-days-max' => 'Máximo $1 {{PLURAL:$1|dia|dias}}',
'prefs-watchlist-edits' => 'Número de edições mostradas na lista de páginas vigiadas expandida:',
'prefs-watchlist-edits-max' => 'Número máximo: 1000',
'prefs-watchlist-token' => 'Senha para a lista de páginas vigiadas:',
'prefs-misc' => 'Diversos',
'prefs-resetpass' => 'Alterar senha',
'prefs-changeemail' => 'Alterar e-mail',
'prefs-setemail' => 'Definir um endereço de e-mail',
'prefs-email' => 'Opções de email',
'prefs-rendering' => 'Aparência',
'saveprefs' => 'Salvar',
'resetprefs' => 'Eliminar as alterações não-salvas',
'restoreprefs' => 'Restaurar todas as configurações padrão',
'prefs-editing' => 'Opções de edição',
'prefs-edit-boxsize' => 'Tamanho da janela de edição.',
'rows' => 'Linhas:',
'columns' => 'Colunas:',
'searchresultshead' => 'Pesquisar',
'resultsperpage' => 'Resultados por página:',
'stub-threshold' => 'Links para páginas de conteúdo aparecerão <a href="#" class="stub">desta forma</a> se elas possuírem menos de (bytes):',
'stub-threshold-disabled' => 'Desabilitado',
'recentchangesdays' => 'Dias a serem exibidos nas Mudanças recentes:',
'recentchangesdays-max' => '(máximo: $1 {{PLURAL:$1|dia|dias}})',
'recentchangescount' => 'Número de edições a serem exibidas por padrão:',
'prefs-help-recentchangescount' => 'Isto inclui mudanças recentes, histórico de páginas e registros.',
'prefs-help-watchlist-token' => "O preenchimento deste campo com uma senha secreta irá gerar um ''feed'' RSS para a sua lista de páginas vigiadas.
Qualquer um que conheça a senha deste campo será capaz de ler sua lista de páginas vigiadas, então escolha um valor seguro.
Eis um valor gerado aleatoriamente que você pode usar: $1",
'savedprefs' => 'As suas preferências foram salvas.',
'timezonelegend' => 'Fuso horário:',
'localtime' => 'Horário local:',
'timezoneuseserverdefault' => 'Utilizar padrão do wiki ($1)',
'timezoneuseoffset' => 'Outro (especifique diferença horária)',
'timezoneoffset' => 'Diferença horária¹',
'servertime' => 'Horário do servidor:',
'guesstimezone' => 'Preencher a partir do navegador',
'timezoneregion-africa' => 'África',
'timezoneregion-america' => 'América',
'timezoneregion-antarctica' => 'Antártida',
'timezoneregion-arctic' => 'Ártico',
'timezoneregion-asia' => 'Ásia',
'timezoneregion-atlantic' => 'Oceano Atlântico',
'timezoneregion-australia' => 'Austrália',
'timezoneregion-europe' => 'Europa',
'timezoneregion-indian' => 'Oceano Índico',
'timezoneregion-pacific' => 'Oceano Pacífico',
'allowemail' => 'Permitir que outros usuários me enviem e-mails',
'prefs-searchoptions' => 'Busca',
'prefs-namespaces' => 'Espaços nominais',
'defaultns' => 'Caso contrário pesquisar nestes espaços nominais:',
'default' => 'padrão',
'prefs-files' => 'Arquivos',
'prefs-custom-css' => 'CSS personalizada',
'prefs-custom-js' => 'JS personalizado',
'prefs-common-css-js' => 'CSS/JS partilhado por todos os temas:',
'prefs-reset-intro' => 'Você pode usar esta página para restaurar as suas preferências para os valores predefinidos do sítio.
Esta ação não pode ser desfeita.',
'prefs-emailconfirm-label' => 'Confirmação do e-mail:',
'prefs-textboxsize' => 'Tamanho da janela de edição',
'youremail' => 'Seu e-mail:',
'username' => 'Nome de usuário:',
'uid' => 'Número de identificação:',
'prefs-memberingroups' => 'Membro {{PLURAL:$1|do grupo|dos grupos}}:',
'prefs-registration' => 'Hora de registro:',
'yourrealname' => 'Nome verdadeiro:',
'yourlanguage' => 'Língua:',
'yourvariant' => 'Variante da língua de conteúdo:',
'prefs-help-variant' => 'A sua variante preferida ou ortografia para mostrar no conteúdo das páginas deste wiki.',
'yournick' => 'Assinatura:',
'prefs-help-signature' => 'Ao inserir comentários em páginas de discussão, assine-os colocando quatro tiles (<nowiki>~~~~</nowiki>) no fim dos comentários. Ao salvar, estes serão convertidos na sua assinatura mais a data e a hora da edição.',
'badsig' => 'Assinatura inválida; verifique o código HTML utilizado.',
'badsiglength' => 'A sua assinatura é muito longa.
Ela deve ter menos de $1 {{PLURAL:$1|caractere|caracteres}}.',
'yourgender' => 'Gênero:',
'gender-unknown' => 'Não especificado',
'gender-male' => 'Masculino',
'gender-female' => 'Feminino',
'prefs-help-gender' => 'Opcional: usado para endereçamento correto pelo software baseado no sexo. Esta informação será pública.',
'email' => 'E-mail',
'prefs-help-realname' => 'O fornecimento de seu nome verdadeiro é opcional.
Caso decida fornecê-lo, este será utilizado para dar-lhe crédito pelo seu trabalho.',
'prefs-help-email' => 'O endereço de correio eletrônico é opcional, mas será necessário para recriar sua senha caso esqueça a antiga.',
'prefs-help-email-others' => 'Você também pode optar por permitir que outros entrem em contato com você através de sua página de usuário ou de discussão sem ter de revelar seus dados pessoais.',
'prefs-help-email-required' => 'O endereço de e-mail é requerido.',
'prefs-info' => 'Informações básicas',
'prefs-i18n' => 'Internacionalização',
'prefs-signature' => 'Assinatura',
'prefs-dateformat' => 'Formato de data',
'prefs-timeoffset' => 'Desvio horário',
'prefs-advancedediting' => 'Opções avançadas',
'prefs-advancedrc' => 'Opções avançadas',
'prefs-advancedrendering' => 'Opções avançadas',
'prefs-advancedsearchoptions' => 'Opções avançadas',
'prefs-advancedwatchlist' => 'Opções avançadas',
'prefs-displayrc' => 'Opções de exibição',
'prefs-displaysearchoptions' => 'Opções de exibição',
'prefs-displaywatchlist' => 'Opções de exibição',
'prefs-diffs' => 'Diferenças',

# User preference: e-mail validation using jQuery
'email-address-validity-valid' => 'Parece válido',
'email-address-validity-invalid' => 'Forneça um endereço de e-mail válido',

# User rights
'userrights' => 'Gestão de privilégios de usuários',
'userrights-lookup-user' => 'Administrar grupos de usuários',
'userrights-user-editname' => 'Forneça um nome de usuário:',
'editusergroup' => 'Editar grupos de usuários',
'editinguser' => "Modificando privilégios do usuário '''[[User:$1|$1]]''' $2",
'userrights-editusergroup' => 'Editar grupos do usuário',
'saveusergroups' => 'Salvar grupos do usuário',
'userrights-groupsmember' => 'Membro de:',
'userrights-groupsmember-auto' => 'Membro implícito de:',
'userrights-groups-help' => 'É possível alterar os grupos em que este usuário se encontra:
* Uma caixa de seleção selecionada significa que o usuário se encontra no grupo.
* Uma caixa de seleção desselecionada significa que o usuário não se encontra no grupo.
* Um * indica que não pode remover o grupo depois de o adicionar, ou vice-versa.',
'userrights-reason' => 'Motivo:',
'userrights-no-interwiki' => 'Você não tem permissão para alterar privilégios de usuários em outros wikis.',
'userrights-nodatabase' => 'O banco de dados $1 não existe ou não é um banco de dados local.',
'userrights-nologin' => 'Você precisa [[Special:UserLogin|autenticar-se]] como um administrador para especificar os privilégios de usuário.',
'userrights-notallowed' => 'A sua conta não tem permissão para adicionar ou remover privilégios a usuários.',
'userrights-changeable-col' => 'Grupos que pode alterar',
'userrights-unchangeable-col' => 'Grupos que não pode alterar',

# Groups
'group' => 'Grupo:',
'group-user' => 'Usuários',
'group-autoconfirmed' => 'Usuários auto-confirmados',
'group-bot' => 'Robôs',
'group-sysop' => 'Administradores',
'group-bureaucrat' => 'Burocratas',
'group-suppress' => 'Oversights',
'group-all' => '(todos)',

'group-user-member' => '{{GENDER:$1|usuário|usuária}}',
'group-autoconfirmed-member' => '{{GENDER:$1|usuário autoconfirmado|usuária autoconfirmada}}',
'group-bot-member' => 'robô',
'group-sysop-member' => '{{GENDER:$1|administrador|administradora}}',
'group-bureaucrat-member' => 'burocrata',
'group-suppress-member' => '{{GENDER:$1|supressor|supressora}}',

'grouppage-user' => '{{ns:project}}:Usuários',
'grouppage-autoconfirmed' => '{{ns:project}}:Auto-confirmados',
'grouppage-bot' => '{{ns:project}}:Robôs',
'grouppage-sysop' => '{{ns:project}}:Administradores',
'grouppage-bureaucrat' => '{{ns:project}}:Burocratas',
'grouppage-suppress' => '{{ns:project}}:Oversight',

# Rights
'right-read' => 'Ler páginas',
'right-edit' => 'Editar páginas',
'right-createpage' => 'Criar páginas (que não sejam páginas de discussão)',
'right-createtalk' => 'Criar páginas de discussão',
'right-createaccount' => 'Criar novas contas de usuário',
'right-minoredit' => 'Marcar edições como menores',
'right-move' => 'Mover páginas',
'right-move-subpages' => 'Mover páginas com as suas subpáginas',
'right-move-rootuserpages' => 'Mover páginas raiz de usuários',
'right-movefile' => 'Mover arquivos',
'right-suppressredirect' => 'Não criar um redirecionamento do nome antigo quando uma página é movida',
'right-upload' => 'Enviar arquivos',
'right-reupload' => 'Sobrescrever um arquivo existente',
'right-reupload-own' => 'Sobrescrever um arquivo existente enviado pelo mesmo usuário',
'right-reupload-shared' => 'Sobrescrever localmente arquivos no repositório partilhado de mídias',
'right-upload_by_url' => 'Enviar um arquivo por um URL',
'right-purge' => 'Carregar a cache de uma página no site sem página de confirmação',
'right-autoconfirmed' => 'Editar páginas semi-protegidas',
'right-bot' => 'Ser tratado como um processo automatizado',
'right-nominornewtalk' => 'Não ter o aviso de novas mensagens despoletado quando são feitas edições menores a páginas de discussão',
'right-apihighlimits' => 'Usar limites superiores em consultas (queries) via API',
'right-writeapi' => 'Uso da API de escrita',
'right-delete' => 'Eliminar páginas',
'right-bigdelete' => 'Eliminar páginas com histórico grande',
'right-deletelogentry' => 'Eliminar e restaurar entradas específicas de registos',
'right-deleterevision' => 'Eliminar e restaurar revisões específicas de páginas',
'right-deletedhistory' => 'Ver entradas de histórico eliminadas, sem o texto associado',
'right-deletedtext' => 'Ver texto removido e alterado entre revisões removidas',
'right-browsearchive' => 'Buscar páginas eliminadas',
'right-undelete' => 'Restaurar páginas',
'right-suppressrevision' => 'Rever e restaurar edições indisponíveis a administradores',
'right-suppressionlog' => 'Ver registros privados',
'right-block' => 'Impedir outros usuários de editarem',
'right-blockemail' => 'Impedir um usuário de enviar email',
'right-hideuser' => 'Bloquear um nome de usuário, escondendo-o do público',
'right-ipblock-exempt' => 'Contornar bloqueios de IP, automáticos e de intervalo',
'right-proxyunbannable' => 'Contornar bloqueios automáticos de proxies',
'right-unblockself' => 'Desbloquearem-se a si próprios',
'right-protect' => 'Mudar níveis de proteção e editar páginas protegidas',
'right-editprotected' => 'Editar páginas protegidas (sem proteção em cascata)',
'right-editinterface' => 'Editar a interface de usuário',
'right-editusercssjs' => 'Editar os arquivos CSS e JS de outros usuários',
'right-editusercss' => 'Editar os arquivos CSS de outros usuários',
'right-edituserjs' => 'Editar os arquivos JS de outros usuários',
'right-rollback' => 'Reverter rapidamente o último usuário que editou uma página em particular',
'right-markbotedits' => 'Marcar edições revertidas como edições de bot',
'right-noratelimit' => 'Não afetado pelos limites de velocidade de operação',
'right-import' => 'Importar páginas de outros wikis',
'right-importupload' => 'Importar páginas de um arquivo carregado',
'right-patrol' => 'Marcar edições como patrulhadas',
'right-autopatrol' => 'Ter edições automaticamente marcadas como patrulhadas',
'right-patrolmarks' => 'Usar funcionalidades de patrulhagem das mudanças recentes',
'right-unwatchedpages' => 'Ver uma lista de páginas não vigiadas',
'right-mergehistory' => 'Fundir o histórico de páginas',
'right-userrights' => 'Editar todos os direitos de usuário',
'right-userrights-interwiki' => 'Editar direitos de usuário de usuários outros sites wiki',
'right-siteadmin' => 'Bloquear e desbloquear o banco de dados',
'right-override-export-depth' => 'Exportar páginas incluindo páginas ligadas até uma profundidade de 5',
'right-sendemail' => 'Enviar email a outros usuários',
'right-passwordreset' => 'Ver todos os e-mails de reposição de senhas',

# User rights log
'rightslog' => 'Registro de privilégios de usuário',
'rightslogtext' => 'Este é um registro de mudanças nos privilégios de usuários.',
'rightslogentry' => 'alterou os grupos de privilégios {{GENDER:$1|do usuário|da usuária|de usuário para}} $1 (de $2 para $3)',
'rightslogentry-autopromote' => 'foi automaticamente promovido de $2 para $3',
'rightsnone' => '(nenhum)',

# Associated actions - in the sentence "You do not have permission to X"
'action-read' => 'ler esta página',
'action-edit' => 'editar esta página',
'action-createpage' => 'criar páginas',
'action-createtalk' => 'criar páginas de discussão',
'action-createaccount' => 'criar esta conta de usuário',
'action-minoredit' => 'marcar esta edição como uma edição menor',
'action-move' => 'mover esta página',
'action-move-subpages' => 'mover esta página e suas subpáginas',
'action-move-rootuserpages' => 'mover páginas raiz de usuários',
'action-movefile' => 'mover este arquivo',
'action-upload' => 'enviar este arquivo',
'action-reupload' => 'sobrescrever o arquivo existente',
'action-reupload-shared' => 'sobrescrever este arquivo em um repositório compartilhado',
'action-upload_by_url' => 'enviar este arquivo a partir de um URL',
'action-writeapi' => 'utilizar o modo de escrita da API',
'action-delete' => 'excluir esta página',
'action-deleterevision' => 'eliminar esta revisão',
'action-deletedhistory' => 'ver o histórico de edições eliminadas desta página',
'action-browsearchive' => 'pesquisar páginas eliminadas',
'action-undelete' => 'restaurar esta página',
'action-suppressrevision' => 'rever e restaurar esta edição oculta',
'action-suppressionlog' => 'ver este registro privado',
'action-block' => 'impedir que este usuário edite',
'action-protect' => 'alterar os níveis de proteção desta página',
'action-rollback' => 'Reverter rapidamente as edições do último usuário que editou uma página em particular',
'action-import' => 'importar esta página a partir de outro wiki',
'action-importupload' => 'importar esta página através do carregamento de um arquivo',
'action-patrol' => 'marcar as edições de outros usuários como patrulhadas',
'action-autopatrol' => 'ter suas edições marcadas como patrulhadas',
'action-unwatchedpages' => 'ver a lista de páginas não-vigiadas',
'action-mergehistory' => 'fundir o histórico de edições desta página',
'action-userrights' => 'editar todos os privilégios de usuário',
'action-userrights-interwiki' => 'editar privilégios de usuários de outros wikis',
'action-siteadmin' => 'bloquear ou desbloquear o banco de dados',
'action-sendemail' => 'enviar e-mails',

# Recent changes
'nchanges' => '$1 {{PLURAL:$1|alteração|alterações}}',
'recentchanges' => 'Mudanças recentes',
'recentchanges-legend' => 'Opções das mudanças recentes',
'recentchanges-summary' => 'Acompanhe nesta página as mudanças mais recentes deste wiki.',
'recentchanges-feed-description' => 'Acompanhe neste feed as mudanças mais recentes do wiki.',
'recentchanges-label-newpage' => 'Esta edição criou uma nova página',
'recentchanges-label-minor' => 'Esta é uma edição menor',
'recentchanges-label-bot' => 'Esta edição foi feita por um bot',
'recentchanges-label-unpatrolled' => 'Esta edição ainda não foi patrulhada',
'rcnote' => "A seguir {{PLURAL:$1|está listada '''uma''' alteração ocorrida|estão listadas '''$1''' alterações ocorridas}} {{PLURAL:$2|no último dia|nos últimos '''$2''' dias}}, a partir das $5 de $4.",
'rcnotefrom' => "Seguem as alterações desde as '''$4''' de '''$3''' (limitadas a '''$1''').",
'rclistfrom' => 'Mostrar as novas alterações a partir das $1',
'rcshowhideminor' => '$1 edições menores',
'rcshowhidebots' => '$1 bots',
'rcshowhideliu' => '$1 usuários registrados',
'rcshowhideanons' => '$1 usuários anônimos',
'rcshowhidepatr' => '$1 edições patrulhadas',
'rcshowhidemine' => '$1 minhas edições',
'rclinks' => 'Exibir as $1 alterações recentes feitas nos últimos $2 dias<br />$3',
'diff' => 'dif',
'hist' => 'hist',
'hide' => 'Ocultar',
'show' => 'Exibir',
'minoreditletter' => 'm',
'newpageletter' => 'N',
'boteditletter' => 'b',
'number_of_watching_users_pageview' => '[{{PLURAL:$1|$1 usuário|$1 usuários}} vigiando]',
'rc_categories' => 'Limite para categorias (separar com "|")',
'rc_categories_any' => 'Qualquer',
'rc-change-size-new' => '$1 {{PLURAL:$1|byte|bytes}} após alterações',
'newsectionsummary' => '/* $1 */ nova seção',
'rc-enhanced-expand' => 'Exibir detalhes (requer JavaScript)',
'rc-enhanced-hide' => 'Ocultar detalhes',
'rc-old-title' => 'criado originalmente como "$1"',

# Recent changes linked
'recentchangeslinked' => 'Alterações relacionadas',
'recentchangeslinked-feed' => 'Alterações relacionadas',
'recentchangeslinked-toolbox' => 'Alterações relacionadas',
'recentchangeslinked-title' => 'Alterações relacionadas com "$1"',
'recentchangeslinked-noresult' => 'Não ocorreram alterações em páginas relacionadas no intervalo de tempo especificado.',
'recentchangeslinked-summary' => "Esta página lista alterações feitas recentemente em páginas com links a uma em específico (ou de membros de uma categoria especificada).
Páginas de sua [[Special:Watchlist|lista de páginas vigiadas]] são exibidas em '''negrito'''.",
'recentchangeslinked-page' => 'Nome da página:',
'recentchangeslinked-to' => 'Visualizar as alterações nas páginas vinculadas à página especificada ao invés disso',

# Upload
'upload' => 'Enviar arquivo',
'uploadbtn' => 'Enviar arquivo',
'reuploaddesc' => 'Cancelar o envio e retornar ao formulário de upload',
'upload-tryagain' => 'Enviar descrição de arquivo modificada',
'uploadnologin' => 'Não autenticado',
'uploadnologintext' => 'É necessário estar [[Special:UserLogin|autenticado]] para enviar arquivos.',
'upload_directory_missing' => 'O diretório de upload ($1) não existe e não pôde ser criado pelo servidor.',
'upload_directory_read_only' => 'O diretório de upload ($1) não tem permissões de escrita para o servidor.',
'uploaderror' => 'Erro ao enviar arquivo',
'upload-recreate-warning' => "'''Aviso: Um arquivo com este nome foi eliminado ou movido.'''

Para sua conveniência, segue o registro de eliminação e de movimentação:",
'uploadtext' => "Use o formulário abaixo para enviar arquivos.
Para ver ou pesquisar arquivos já enviados, consulte a [[Special:FileList|lista de arquivos enviados]]. Re-envios também são registrados no [[Special:Log/upload|registro de uploads]]; eliminações no [[Special:Log/delete|registro de eliminações]]

Para incluir o arquivo em uma página, use um link em um dos seguintes formatos:
* '''<code><nowiki>[[</nowiki>{{ns:file}}<nowiki>:Arquivo.jpg]]</nowiki></code>''' para utilizar a versão completa do arquivo;
* '''<code><nowiki>[[</nowiki>{{ns:file}}<nowiki>:Arquivo.png|200px|thumb|left|texto]]</nowiki></code>''' para utilizar uma renderização de 200 pixels dentro de uma caixa posicionada à margem esquerda, contendo 'texto' como descrição;
* '''<code><nowiki>[[</nowiki>{{ns:media}}<nowiki>:Arquivo.ogg]]</nowiki></code>''' para um link direto ao arquivo sem que ele seja exibido.",
'upload-permitted' => 'Tipos de arquivos permitidos: $1.',
'upload-preferred' => 'Tipos de arquivos preferidos: $1.',
'upload-prohibited' => 'Tipos de arquivo proibidos: $1.',
'uploadlog' => 'registro de uploads',
'uploadlogpage' => 'Registro de uploads',
'uploadlogpagetext' => 'Segue listagem dos uploads de arquivos mais recentes.
A [[Special:NewFiles|galeria de arquivos novos]] oferece uma listagem mais visual.',
'filename' => 'Nome do arquivo',
'filedesc' => 'Descrição do arquivo',
'fileuploadsummary' => 'Sumário:',
'filereuploadsummary' => 'Alterações no arquivo:',
'filestatus' => 'Status dos direitos autorais:',
'filesource' => 'Fonte:',
'uploadedfiles' => 'Arquivos enviados',
'ignorewarning' => 'Ignorar aviso e salvar mesmo assim.',
'ignorewarnings' => 'Ignorar todos os avisos',
'minlength1' => 'Os nomes de arquivos precisam ter pelo menos uma letra.',
'illegalfilename' => 'O arquivo "$1" possui caracteres que não são permitidos em títulos de páginas.
Renomeie o arquivo e tente enviar novamente.',
'filename-toolong' => 'Os nomes dos arquivos não podem ter mais de 240 bytes.',
'badfilename' => 'O nome do arquivo foi alterado para "$1".',
'filetype-mime-mismatch' => 'A extensão ".$1" não corresponde ao tipo MIME do arquivo ($2).',
'filetype-badmime' => 'Arquivos de tipo MIME "$1" não estão autorizados a serem enviados.',
'filetype-bad-ie-mime' => 'Este arquivo não pode ser carregado porque o Internet Explorer o detectaria como "$1", que é um tipo de arquivo não permitido e potencialmente perigoso.',
'filetype-unwanted-type' => "'''\".\$1\"''' não é um tipo de arquivo desejado.
{{PLURAL:\$3|O tipo preferível é|Os tipos preferíveis são}} \$2.",
'filetype-banned-type' => '\'\'\'".$1"\'\'\' {{PLURAL:$4|não é um tipo de arquivo permitido|não são tipos de arquivos permitidos}}.
{{PLURAL:$3|O tipo de arquivo permitido é|Os tipos de arquivos permitidos são}} $2.',
'filetype-missing' => 'O arquivo não possui uma extensão (como, por exemplo, ".jpg").',
'empty-file' => 'O arquivo que você enviou estava vazio.',
'file-too-large' => 'O arquivo que você enviou era muito grande.',
'filename-tooshort' => 'O nome do arquivo é curto demais.',
'filetype-banned' => 'Este tipo de arquivo é proibido.',
'verification-error' => 'Este arquivo não passou pela verificação de arquivos.',
'hookaborted' => 'A modificação que você tentou realizar foi abortada por uma extensão.',
'illegal-filename' => 'Nome de arquivo não permitido.',
'overwrite' => 'Não é permitido sobrescrever um arquivo já existente.',
'unknown-error' => 'Ocorreu um erro desconhecido.',
'tmp-create-error' => 'Não foi possível criar o arquivo temporário.',
'tmp-write-error' => 'Erro ao alterar arquivo temporário.',
'large-file' => 'É recomendável que os arquivos não sejam maiores que $1;
este possui $2.',
'largefileserver' => 'Este arquivo é maior do que o servidor está configurado para permitir.',
'emptyfile' => 'O arquivo enviado para estar vazio.
Isso pode ocorrer devido a um erro de digitação no nome do arquivo.
Verifique se você realmente deseja enviar este arquivo.',
'windows-nonascii-filename' => 'O wiki não aceita nomes de arquivos com caracteres especiais.',
'fileexists' => 'Já existe um arquivo com este nome.
Verifique <strong>[[:$1]]</strong> caso não tenha certeza se deseja alterar o arquivo atual.
[[$1|thumb]]',
'filepageexists' => 'A página de descrição deste arquivo já foi criada em <strong>[[:$1]]</strong>, mas atualmente não existe nenhum arquivo com este nome.
O sumário que você inseriu não aparecerá na página de descrição.
Para que ele apareça, será necessário editá-lo manualmente.
[[$1|thumb]]',
'fileexists-extension' => 'Já existe um arquivo com nome similar: [[$2|thumb]]
* Nome do arquivo que está sendo enviado: <strong>[[:$1]]</strong>
* Nome do arquivo existente: <strong>[[:$2]]</strong>
Escolha um nome diferente.',
'fileexists-thumbnail-yes' => "O arquivo parece ser uma imagem de tamanho reduzido (''miniatura'', ou ''thumbnail'').
[[$1|thumb]]
Verifique o arquivo <strong>[[:$1]]</strong>.
Se o arquivo enviado é o mesmo do de tamanho original, não é necessário enviar uma versão adicional em miniatura.",
'file-thumbnail-no' => "O nome do arquivo começa com <strong>$1</strong>.
Isso faz parecer se tratar de uma imagem de tamanho reduzido (''miniatura'', ou ''thumbnail'').
Se você tem esta imagem em sua resolução completa, envie-a no lugar desta. Caso contrário, altere o nome de arquivo.",
'fileexists-forbidden' => 'Já existe um arquivo com este nome e ele não pode ser sobrescrito.
Se ainda pretende enviar seu arquivo, volte e use um novo nome.
[[File:$1|thumb|center|$1]]',
'fileexists-shared-forbidden' => 'Já existe um arquivo com este nome no repositório de arquivos compartilhados.
Se você ainda quer enviar seu arquivo, volte e use um novo nome.
[[File:$1|thumb|center|$1]]',
'file-exists-duplicate' => 'Este arquivo é uma duplicata do seguinte {{PLURAL:$1|arquivo|arquivos}}:',
'file-deleted-duplicate' => 'Um arquivo idêntico a este ([[:$1]]) foi eliminado anteriormente.
Verifique o histórico de eliminação de tal arquivo antes de tentar re-enviar.',
'uploadwarning' => 'Aviso de envio',
'uploadwarning-text' => 'Modifique a descrição do arquivo abaixo e tente novamente.',
'savefile' => 'Salvar arquivo',
'uploadedimage' => 'enviou "[[$1]]"',
'overwroteimage' => 'enviou uma nova versão de "[[$1]]"',
'uploaddisabled' => 'Envio de arquivos desativado.',
'copyuploaddisabled' => 'O upload por URL encontra-se desativado.',
'uploadfromurl-queued' => 'O seu upload foi adicionado à fila.',
'uploaddisabledtext' => 'O envio de arquivos encontra-se desativado.',
'php-uploaddisabledtext' => 'O envio de arquivos via PHP está desativado.
Verifique a configuração file_uploads.',
'uploadscripted' => 'Este arquivo contém HTML ou código que pode ser erroneamente interpretado por um navegador web.',
'uploadvirus' => 'O arquivo contém vírus!
Detalhes: $1',
'uploadjava' => 'Este é um arquivo ZIP que contém um arquivo .class de Java.
Não é permitido o upload de arquivos Java já que eles podem contornar as restrições de segurança.',
'upload-source' => 'Arquivo de origem',
'sourcefilename' => 'Nome do arquivo de origem:',
'sourceurl' => 'URL de origem:',
'destfilename' => 'Nome do arquivo de destino:',
'upload-maxfilesize' => 'Tamanho máximo do arquivo: $1',
'upload-description' => 'Descrição do arquivo',
'upload-options' => 'Opções de envio',
'watchthisupload' => 'Vigiar este arquivo',
'filewasdeleted' => 'Um arquivo com este nome foi enviado anteriormente e eliminado.
Verifique o $1 antes de enviar novamente.',
'filename-bad-prefix' => "O nome do arquivo que você está enviando começa com '''\"\$1\"''', um nome pouco esclarecedor, comumente associado de forma automática por câmeras digitais.
Escolha um nome de arquivo mais explicativo.",
'filename-prefix-blacklist' => ' #<!-- deixe esta linha exatamente como está --> <pre>
# A sintaxe é a seguinte:
#   * Tudo a partir do caractere "#" até ao fim da linha é um comentário
#   * Todas as linhas não vazias são um prefixo para nomes de arquivos típicos atribuídos automaticamente por câmaras digitais
CIMG # Casio
DSC_ # Nikon
DSCF # Fuji
DSCN # Nikon
DUW # alguns telefones móveis
IMG # genérico
JD # Jenoptik
MGP # Pentax
PICT # misc.
 #</pre> <!-- deixe esta linha exatamente como está -->',
'upload-success-subj' => 'Enviado com sucesso',
'upload-success-msg' => 'O envio feito a partir de [$2] foi bem sucedido. Ele está disponível aqui: [[:{{ns:file}}:$1]]',
'upload-failure-subj' => 'Problema no envio',
'upload-failure-msg' => 'Ocorreu um problema com envio a partir de [$2]:

$1',
'upload-warning-subj' => 'Aviso de envio',
'upload-warning-msg' => 'Houve um problema com o envio a partir de [$2]. Retorne ao [[Special:Upload/stash/$1|formulário]] para corrigir este problema.',

'upload-proto-error' => 'Protocolo incorreto',
'upload-proto-error-text' => 'O envio de arquivos remotos requer endereços (URLs) que iniciem com <code>http://</code> ou <code>ftp://</code>.',
'upload-file-error' => 'Erro interno',
'upload-file-error-text' => 'Ocorreu um erro interno ao tentar criar um arquivo temporário no servidor.
Entre em contato com um [[Special:ListUsers/sysop|administrador]].',
'upload-misc-error' => 'Erro desconhecido ao enviar',
'upload-misc-error-text' => 'Ocorreu um erro desconhecido durante o envio.
Verifique se o endereço (URL) é válido e acessível e tente novamente.
Caso o problema persista, procure um [[Special:ListUsers/sysop|administrador]].',
'upload-too-many-redirects' => 'A URL contém redirecionamentos demais',
'upload-unknown-size' => 'Tamanho desconhecido',
'upload-http-error' => 'Ocorreu um erro HTTP: $1',
'upload-copy-upload-invalid-domain' => 'Não é possível realizar envios remotos neste domínio.',

# File backend
'backend-fail-stream' => 'Não foi possível transmitir o arquivo  $1.',
'backend-fail-backup' => 'Não foi possível fazer backup do arquivo  $1 .',
'backend-fail-notexists' => 'O arquivo $1 não existe.',
'backend-fail-hashes' => 'Não foi possível obter os hashes do arquivo para comparação.',
'backend-fail-notsame' => 'Já existe um arquivo não idêntico em $1 .',
'backend-fail-invalidpath' => '$1 não é um caminho válido de armazenamento.',
'backend-fail-delete' => 'Não foi possível excluir o arquivo $1.',
'backend-fail-alreadyexists' => 'O arquivo $1 já existe.',
'backend-fail-store' => 'Não foi possível armazenar o arquivo $1 em $2.',
'backend-fail-copy' => 'Não foi possível copiar o arquivo $1 para $2.',
'backend-fail-move' => 'Não é possível mover o arquivo $1 para $2.',
'backend-fail-opentemp' => 'Não foi possível abrir o arquivo temporário.',
'backend-fail-writetemp' => 'Não foi possível gravar no arquivo temporário.',
'backend-fail-closetemp' => 'Não foi possível fechar o arquivo temporário.',
'backend-fail-read' => 'Não foi possível ler o arquivo $1.',
'backend-fail-create' => 'Não foi possível criar ou alterar o arquivo $1.',
'backend-fail-maxsize' => 'Não foi possível criar ou alterar o arquivo $1 por ele ser maior que {{PLURAL:$2|1 byte|$2 bytes}}.',
'backend-fail-readonly' => 'O servidor de armazenamento "$1" está atualmente no modo "somente leitura". A razão dada foi: "$2"',
'backend-fail-synced' => 'O arquivo "$1" está em um estado inconsistente dentro do sistema de armazenamento interno',
'backend-fail-connect' => 'Não foi possível se conectar com o servidor de armazenamento "$1".',
'backend-fail-internal' => 'Ocorreu um erro desconhecido no servidor de armazenamento "$1".',
'backend-fail-contenttype' => 'Não foi possível determinar o tipo de conteúdo do arquivo para armazenar em "$1".',
'backend-fail-batchsize' => 'O servidor de armazenamento retornou um conjunto de $1 {{PLURAL:$1|operação|operações}} de arquivo, enquanto seu limite é de $2 {{PLURAL:$1|operação|operações}}.',
'backend-fail-usable' => 'Não foi possível salvar o arquivo $1 devido a permissões insuficientes a diretórios ou repositórios inexistentes.',

# File journal errors
'filejournal-fail-dbconnect' => 'Não foi possível se conectar ao banco de dados de registros do sistema de armazenamento "$1".',
'filejournal-fail-dbquery' => 'Não foi possível atualizar o banco de dados de registros do sistema de armazenamento "$1".',

# Lock manager
'lockmanager-notlocked' => 'Não foi possível desbloquear "$1" por ele não se encontrar bloqueado.',
'lockmanager-fail-closelock' => 'Não foi possível encerrar a referência de bloqueio para "$1".',
'lockmanager-fail-deletelock' => 'Não foi possível eliminar a referência de bloqueio para "$1".',
'lockmanager-fail-acquirelock' => 'Não foi possível obter uma referência de bloqueio para "$1".',
'lockmanager-fail-openlock' => 'Não foi possível abrir a referência de bloqueio para "$1".',
'lockmanager-fail-releaselock' => 'Não foi possível liberar o bloqueio para "$1".',
'lockmanager-fail-db-bucket' => 'Não foi possível contatar suficientemente bloqueio das bases de dados no bucket $1 .',
'lockmanager-fail-db-release' => 'Não foi possível liberar os bloqueios para "$1".',
'lockmanager-fail-svr-acquire' => 'Não foi possível obter bloqueios no servidor $1.',
'lockmanager-fail-svr-release' => 'Não foi possível liberar os bloqueios do servidor "$1".',

# ZipDirectoryReader
'zip-file-open-error' => 'Foi encontrado um erro ao abrir o arquivo ZIP para verificação.',
'zip-wrong-format' => 'O arquivo especificado não é um arquivo ZIP.',
'zip-bad' => 'O arquivo ZIP se encontra corrompido ou não é legível.
A sua segurança não pode ser devidamente verificada.',
'zip-unsupported' => 'Este arquivo ZIP usa funcionalidades ZIP não suportadas pelo MediaWiki.
A sua segurança não pode ser devidamente verificada.',

# Special:UploadStash
'uploadstash' => 'Arquivos escondidos',
'uploadstash-summary' => 'Esta página dá acesso aos arquivos enviados (ou que estão no processo de envio) mas que ainda não foram publicados no wiki. Estes arquivos não são visíveis para ninguém, exceto para o usuário que os enviou.',
'uploadstash-clear' => 'Apagar os arquivos escondidos',
'uploadstash-nofiles' => 'Você não tem nenhum arquivo escondido.',
'uploadstash-badtoken' => 'Não foi possível executar essa operação, talvez porque as suas credenciais de edição expiraram. Tente novamente.',
'uploadstash-errclear' => 'Não foi possível apagar os arquivos.',
'uploadstash-refresh' => 'Atualizar a lista de arquivos',
'invalid-chunk-offset' => 'Deslocamento de fragmento inválido',

# img_auth script messages
'img-auth-accessdenied' => 'Acesso negado',
'img-auth-nopathinfo' => 'PATH_INFO em falta.
O seu servidor não está configurado para passar esta informação.
Pode ser baseado em CGI e não consegue suportar img_auth.
Consulte a documentação em [//www.mediawiki.org/wiki/Manual:Image_Authorization Image Authorization].',
'img-auth-notindir' => 'O caminho solicitado não está no diretório configurado para envios.',
'img-auth-badtitle' => 'Não é possível criar um título válido a partir de "$1".',
'img-auth-nologinnWL' => 'Você não está logado e "$1" não está na lista branca.',
'img-auth-nofile' => 'Arquivo "$1" não existe.',
'img-auth-isdir' => 'Você está tentando acessar o diretório "$1".
Somente acesso ao arquivo é permitido.',
'img-auth-streaming' => "Realizando ''streaming'' de \"\$1\".",
'img-auth-public' => 'A img_auth.php produz arquivos a partir de um wiki privado.
Este wiki está configurado como um wiki público.
Para melhor segurança, o img_auth.php está desativado.',
'img-auth-noread' => 'Usuário não tem acesso para ler "$1".',
'img-auth-bad-query-string' => 'A URL tem um texto de consulta inválido.',

# HTTP errors
'http-invalid-url' => 'URL inválida: $1',
'http-invalid-scheme' => 'URLs que iniciam com o prefixo "$1" não são aceitas.',
'http-request-error' => 'A requisição HTTP falhou devido a um erro desconhecido.',
'http-read-error' => 'Erro de leitura HTTP.',
'http-timed-out' => 'Esgotado o tempo de espera da requisição HTTP.',
'http-curl-error' => 'Erro ao requisitar a URL: $1',
'http-host-unreachable' => 'Não foi possível atingir a URL.',
'http-bad-status' => 'Ocorreu um problema durante a requisição HTTP: $1 $2',

# Some likely curl errors. More could be added from <http://curl.haxx.se/libcurl/c/libcurl-errors.html>
'upload-curl-error6' => 'Não foi possível acessar a URL',
'upload-curl-error6-text' => 'Não foi possível acessar o endereço (URL) fornecido. Por gentileza, se certifique que o endereço foi fornecido corretamente e de que o site esteja acessível.',
'upload-curl-error28' => 'Tempo limite para o envio do arquivo excedido',
'upload-curl-error28-text' => 'O site demorou muito tempo para responder. Por gentileza, verifique se o site está acessível, aguarde alguns momentos e tente novamente. Talvez você deseje fazer nova tentativa em um horário menos congestionado.',

'license' => 'Licenciamento:',
'license-header' => 'Licenciamento',
'nolicense' => 'Nenhuma selecionada',
'license-nopreview' => '(Previsão não disponível)',
'upload_source_url' => ' (um URL válido, publicamente acessível)',
'upload_source_file' => ' (um arquivo no seu computador)',

# Special:ListFiles
'listfiles-summary' => 'Esta página especial mostra todos os arquivos carregados.
Por padrão, os últimos arquivos carregados são mostrados no topo da lista.
Um clique sobre um cabeçalho de coluna altera a ordenação.',
'listfiles_search_for' => 'Pesquisar por nome de mídia:',
'imgfile' => 'arquivo',
'listfiles' => 'Lista de arquivo',
'listfiles_thumb' => 'Miniatura',
'listfiles_date' => 'Data',
'listfiles_name' => 'Nome',
'listfiles_user' => 'Usuário',
'listfiles_size' => 'Tamanho',
'listfiles_description' => 'Descrição',
'listfiles_count' => 'Versões',

# File description page
'file-anchor-link' => 'Arquivo',
'filehist' => 'Histórico do arquivo',
'filehist-help' => 'Clique em uma data/horário para ver como o arquivo estava em um dado momento.',
'filehist-deleteall' => 'eliminar todas',
'filehist-deleteone' => 'eliminar',
'filehist-revert' => 'restaurar',
'filehist-current' => 'atual',
'filehist-datetime' => 'Data/Horário',
'filehist-thumb' => 'Miniatura',
'filehist-thumbtext' => 'Miniatura da versão das $1',
'filehist-nothumb' => 'Miniatura indisponível',
'filehist-user' => 'Usuário',
'filehist-dimensions' => 'Dimensões',
'filehist-filesize' => 'Tamanho do arquivo',
'filehist-comment' => 'Comentário',
'filehist-missing' => 'Arquivo faltando',
'imagelinks' => 'Uso do arquivo',
'linkstoimage' => '{{PLURAL:$1|A página|As $1 páginas}} a seguir tem link para este arquivo:',
'linkstoimage-more' => 'Mais de $1 {{PLURAL:$1|página|páginas}} tem algum link para este arquivo.
A lista a seguir mostra apenas {{PLURAL:$1|o primeiro link|os $1 primeiros links}} para este arquivo.
Uma [[Special:WhatLinksHere/$2|listagem completa]] está disponível.',
'nolinkstoimage' => 'Nenhuma página contém links para este arquivo.',
'morelinkstoimage' => 'Ver [[Special:WhatLinksHere/$1|mais links]] para este arquivo.',
'linkstoimage-redirect' => '$1 (redirecionamento de arquivo) $2',
'duplicatesoffile' => '{{PLURAL:$1|O seguinte arquivo é duplicado|Os seguintes arquivos são duplicados}} deste arquivo ([[Special:FileDuplicateSearch/$2|mais detalhes]]):',
'sharedupload' => 'Este arquivo é do $1 e pode ser usado por outros projetos.',
'sharedupload-desc-there' => 'Este arquivo é do $1 e pode ser utilizado por outros projetos.
Por favor veja a [$2 página de descrição do arquivo] para mais informações.',
'sharedupload-desc-here' => 'Este arquivo é do $1 e pode ser utilizado por outros projetos.
Sua [$2 página de descrição de arquivo] é reproduzida abaixo.',
'sharedupload-desc-edit' => 'Este arquivo é do $1 e pode ser utilizado por outros projetos.
Talvez você deseje editar a descrição na sua [$2 página de descrição de arquivo] por lá.',
'sharedupload-desc-create' => 'Este arquivo é do $1 e pode ser utilizado por outros projetos.
Talvez você deseje editar a descrição na sua [$2 página de descrição de arquivo] por lá.',
'filepage-nofile' => 'Não existe nenhum arquivo com esse nome.',
'filepage-nofile-link' => 'Não existe nenhum arquivo com este nome, mas você pode [$1 carregá-lo].',
'uploadnewversion-linktext' => 'Enviar uma nova versão deste arquivo',
'shared-repo-from' => 'de $1',
'shared-repo' => 'um repositório compartilhado',
'upload-disallowed-here' => 'Infelizmente você não pode substituir essa imagem.',

# File reversion
'filerevert' => 'Reverter $1',
'filerevert-legend' => 'Reverter arquivo',
'filerevert-intro' => '<span class="plainlinks">Você está revertendo \'\'\'[[Media:$1|$1]]\'\'\' para a [$4 versão de $2 - $3].</span>',
'filerevert-comment' => 'Motivo:',
'filerevert-defaultcomment' => 'Revertido para a versão de $1 - $2',
'filerevert-submit' => 'Reverter',
'filerevert-success' => '<span class="plainlinks">\'\'\'[[Media:$1|$1]]\'\'\' foi revertida para a [$4 versão de $2 - $3].</span>',
'filerevert-badversion' => 'Não há uma versão local anterior deste arquivo no período de tempo especificado.',

# File deletion
'filedelete' => 'Eliminar $1',
'filedelete-legend' => 'Eliminar arquivo',
'filedelete-intro' => "Você está prestes a eliminar o arquivo '''[[Media:$1|$1]]''' junto com todo o seu histórico.",
'filedelete-intro-old' => '<span class="plainlinks">Você se encontra prestes a eliminar a versão de \'\'\'[[Media:$1|$1]]\'\'\' tal como se encontrava em [$4 $3, $2].</span>',
'filedelete-comment' => 'Motivo:',
'filedelete-submit' => 'Eliminar',
'filedelete-success' => "'''$1''' foi eliminado.",
'filedelete-success-old' => "A versão de '''[[Media:$1|$1]]''' tal como $3, $2 foi eliminada.",
'filedelete-nofile' => "'''$1''' não existe.",
'filedelete-nofile-old' => "Não há nenhuma versão de '''$1''' em arquivo com os parâmetros especificados.",
'filedelete-otherreason' => 'Outro/motivo adicional:',
'filedelete-reason-otherlist' => 'Outro motivo',
'filedelete-reason-dropdown' => '*Motivos comuns para eliminação
** Violação de direitos de autor
** Arquivo duplicado',
'filedelete-edit-reasonlist' => 'Editar motivos de eliminação',
'filedelete-maintenance' => 'Eliminação e restauro de arquivos estão temporariamente desativados durante manutenção.',
'filedelete-maintenance-title' => 'Não é possível excluir o arquivo',

# MIME search
'mimesearch' => 'Pesquisa MIME',
'mimesearch-summary' => 'Esta página possibilita que os arquivos sejam filtrados a partir de seu tipo MIME. Sintaxe de busca: tipo/subtipo (por exemplo, <code>image/jpeg</code>).',
'mimetype' => 'tipo MIME:',
'download' => 'download',

# Unwatched pages
'unwatchedpages' => 'Páginas não vigiadas',

# List redirects
'listredirects' => 'Listar redirecionamentos',

# Unused templates
'unusedtemplates' => 'Predefinições não utilizadas',
'unusedtemplatestext' => 'Esta página lista todas as páginas no espaço nominal {{ns:template}} que não estão incluídas em uma outra página. Lembre-se de conferir se há outros links para as predefinições antes de apaga-las.',
'unusedtemplateswlh' => 'outros links',

# Random page
'randompage' => 'Página aleatória',
'randompage-nopages' => 'Não há páginas {{PLURAL:$2|no seguinte espaço nominal|nos seguintes espaços nominais}}: $1.',

# Random redirect
'randomredirect' => 'Redirecionamento aleatório',
'randomredirect-nopages' => 'Não há redirecionamentos no espaço nominal "$1".',

# Statistics
'statistics' => 'Estatísticas',
'statistics-header-pages' => 'Estatísticas de páginas',
'statistics-header-edits' => 'Estatísticas de edições',
'statistics-header-views' => 'Ver estatísticas',
'statistics-header-users' => 'Estatísticas dos usuários',
'statistics-header-hooks' => 'Outras estatísticas',
'statistics-articles' => 'Páginas de conteúdo',
'statistics-pages' => 'Páginas',
'statistics-pages-desc' => 'Todas as páginas no wiki, incluindo páginas de discussão, redirecionamentos, etc.',
'statistics-files' => 'Arquivos carregados',
'statistics-edits' => 'Edições de página desde que {{SITENAME}} foi instalado',
'statistics-edits-average' => 'Média de edições por página',
'statistics-views-total' => 'Total de visualizações',
'statistics-views-total-desc' => 'Visualizações de páginas não existentes e páginas especiais não estão incluídas',
'statistics-views-peredit' => 'Visualizações por edição',
'statistics-users' => '[[Special:ListUsers|Usuários]] registrados',
'statistics-users-active' => 'Usuários ativos',
'statistics-users-active-desc' => 'Usuários que efetuaram uma ação {{PLURAL:$1|no último dia|nos últimos $1 dias}}',
'statistics-mostpopular' => 'Páginas mais visitadas',

'disambiguations' => 'Páginas com links para páginas de desambiguação',
'disambiguationspage' => 'Template:disambig',
'disambiguations-text' => 'As páginas a seguir ligam a "páginas de desambiguação" ao invés de aos tópicos adequados.<br />
Uma página é considerada como de desambiguação se utilizar uma predefinição que esteja definida em [[MediaWiki:Disambiguationspage]]',

'doubleredirects' => 'Redirecionamentos duplos',
'doubleredirectstext' => 'Esta página lista as páginas que redirecionam para outros redirecionamentos.
Cada linha contém links para o primeiro e o segundo redirecionamentos, juntamente com o alvo do segundo redirecionamento, que é geralmente a verdadeira página de destino, para a qual o primeiro redirecionamento deveria apontar.
Entradas <del>riscadas</del> foram resolvidas.',
'double-redirect-fixed-move' => '[[$1]] foi movido e agora é um redirecionamento para [[$2]]',
'double-redirect-fixed-maintenance' => 'Corrigindo redirecionamento duplo de [[$1]] para [[$2]].',
'double-redirect-fixer' => 'Corretor de redirecionamentos',

'brokenredirects' => 'Redirecionamentos quebrados',
'brokenredirectstext' => 'Os seguintes redirecionamentos ligam para páginas inexistentes:',
'brokenredirects-edit' => 'editar',
'brokenredirects-delete' => 'eliminar',

'withoutinterwiki' => 'Páginas sem interwikis de idiomas',
'withoutinterwiki-summary' => 'As seguintes páginas não possuem links para versões em outros idiomas:',
'withoutinterwiki-legend' => 'Prefixo',
'withoutinterwiki-submit' => 'Exibir',

'fewestrevisions' => 'Páginas de conteúdo com menos edições',

# Miscellaneous special pages
'nbytes' => '$1 {{PLURAL:$1|byte|bytes}}',
'ncategories' => '$1 {{PLURAL:$1|categoria|categorias}}',
'ninterwikis' => '$1 {{PLURAL:$1|interwiki|Interwikis}}',
'nlinks' => '$1 {{PLURAL:$1|link|links}}',
'nmembers' => '$1 {{PLURAL:$1|membro|membros}}',
'nrevisions' => '$1 {{PLURAL:$1|revisão|revisões}}',
'nviews' => '$1 {{PLURAL:$1|visita|visitas}}',
'nimagelinks' => 'Utilizada em $1 {{PLURAL:$1|página|páginas}}',
'ntransclusions' => 'usada {{PLURAL:$1|numa página|em $1 páginas}}',
'specialpage-empty' => 'Atualmente não há dados a serem exibidos nesta página.',
'lonelypages' => 'Páginas órfãs',
'lonelypagestext' => 'As seguintes páginas não recebem links nem são incluídas em outras páginas do {{SITENAME}}.',
'uncategorizedpages' => 'Páginas não categorizadas',
'uncategorizedcategories' => 'Categorias não categorizadas',
'uncategorizedimages' => 'Imagens não categorizadas',
'uncategorizedtemplates' => 'Predefinições não categorizadas',
'unusedcategories' => 'Categorias não utilizadas',
'unusedimages' => 'Arquivos não utilizados',
'popularpages' => 'Páginas populares',
'wantedcategories' => 'Categorias pedidas',
'wantedpages' => 'Páginas pedidas',
'wantedpages-badtitle' => 'Título inválido no conjunto de resultados: $1',
'wantedfiles' => 'Arquivos pedidos',
'wantedfiletext-cat' => 'Os seguintes arquivos são usados, mas não existem. Arquivos de repositórios externos podem acabar sendo listados apesar de existirem. Esses falsos positivos aparecerão <del>riscados</del>. As páginas que incluem arquivos inexistentes são listadas em [[:$1]].',
'wantedfiletext-nocat' => 'Os seguintes arquivos são usados, mas não existem. Arquivos de repositórios externos podem acabar sendo listados apesar de existirem. Esses falsos positivos aparecerão <del>riscados</del>.',
'wantedtemplates' => 'Predefinições pedidas',
'mostlinked' => 'Páginas com mais afluentes',
'mostlinkedcategories' => 'Categorias com mais membros',
'mostlinkedtemplates' => 'Predefinições com mais afluentes',
'mostcategories' => 'Páginas de conteúdo com mais categorias',
'mostimages' => 'Imagens com mais afluentes',
'mostinterwikis' => 'Páginas com mais interwikis',
'mostrevisions' => 'Páginas de conteúdo com mais revisões',
'prefixindex' => 'Todas as páginas com prefixo',
'prefixindex-namespace' => 'Todas as páginas com prefixo (espaço nominal $1)',
'shortpages' => 'Páginas curtas',
'longpages' => 'Páginas longas',
'deadendpages' => 'Páginas sem saída',
'deadendpagestext' => 'As seguintes páginas não contêm links para outras páginas no wiki {{SITENAME}}.',
'protectedpages' => 'Páginas protegidas',
'protectedpages-indef' => 'Proteções infinitas apenas',
'protectedpages-cascade' => 'Apenas proteções progressivas',
'protectedpagestext' => 'As seguintes páginas encontram-se protegidas contra edições ou movimentações',
'protectedpagesempty' => 'Neste momento, nenhuma das páginas está protegida com estes parâmetros.',
'protectedtitles' => 'Títulos protegidos',
'protectedtitlestext' => 'Os títulos a seguir encontram-se protegidos contra criação',
'protectedtitlesempty' => 'Neste momento, nenhum dos títulos está protegido com estes parâmetros.',
'listusers' => 'Lista de usuários',
'listusers-editsonly' => 'Mostrar apenas usuários com edições',
'listusers-creationsort' => 'Ordenar por data de criação',
'usereditcount' => '$1 {{PLURAL:$1|edição|edições}}',
'usercreated' => '{{GENDER:$3|Criado|Criada}} em $1 às $2',
'newpages' => 'Páginas novas',
'newpages-username' => 'Nome de usuário:',
'ancientpages' => 'Páginas mais antigas',
'move' => 'Mover',
'movethispage' => 'Mover esta página',
'unusedimagestext' => 'Os seguintes arquivos existem mas não são embutidos em nenhuma página.
Por favor note que outros websites podem apontar para um arquivo através de um URL direto e, por isso, podem estar a ser listadas aqui, mesmo estando em uso.',
'unusedcategoriestext' => 'As seguintes categorias existem, embora nenhuma página ou categoria faça uso delas.',
'notargettitle' => 'Sem alvo',
'notargettext' => 'Você não especificou uma página alvo ou um usuário para executar esta função.',
'nopagetitle' => 'Página alvo não existe',
'nopagetext' => 'A página alvo especificada não existe.',
'pager-newer-n' => '{{PLURAL:$1|posterior|$1 posteriores}}',
'pager-older-n' => '{{PLURAL:$1|1 anterior|$1 anteriores}}',
'suppress' => 'Supervisor',
'querypage-disabled' => 'Esta página especial está desativada para não prejudicar o desempenho.',

# Book sources
'booksources' => 'Fontes bibliográficas',
'booksources-search-legend' => 'Procurar fontes bibliográficas',
'booksources-go' => 'Ir',
'booksources-text' => 'É exibida a seguir uma listagem de links para outros sites que vendem livros novos e usados e que possam possuir informações adicionais sobre os livros que você está pesquisando:',
'booksources-invalid-isbn' => 'O número ISBN fornecido não parece ser válido; verifique se houve erros ao copiar da fonte original.',

# Special:Log
'specialloguserlabel' => 'Executor:',
'speciallogtitlelabel' => 'Destino (título ou usuário):',
'log' => 'Registros',
'all-logs-page' => 'Todos os registros públicos',
'alllogstext' => 'Exibição combinada de todos registros disponíveis para o {{SITENAME}}.
Você pode diminuir a lista escolhendo um tipo de registro, um nome de usuário (sensível a maiúsculas e minúsculas), ou uma página afetada (também sensível a maiúsculas e minúsculas).',
'logempty' => 'Nenhum item idêntico no registro.',
'log-title-wildcard' => 'Procurar por títulos que sejam iniciados com o seguinte texto',
'showhideselectedlogentries' => 'Exibir/ocultar os itens de registros selecionados',

# Special:AllPages
'allpages' => 'Todas as páginas',
'alphaindexline' => 'De $1 até $2',
'nextpage' => 'Próxima página ($1)',
'prevpage' => 'Página anterior ($1)',
'allpagesfrom' => 'Primeira página na listagem:',
'allpagesto' => 'Última página na listagem:',
'allarticles' => 'Todas as páginas',
'allinnamespace' => 'Todas as páginas (espaço nominal $1)',
'allnotinnamespace' => 'Todas as páginas (excepto as do espaço nominal $1)',
'allpagesprev' => 'Anterior',
'allpagesnext' => 'Próximo',
'allpagessubmit' => 'Ir',
'allpagesprefix' => 'Exibir páginas com o prefixo:',
'allpagesbadtitle' => 'O título de página fornecido encontrava-se inválido ou tinha um prefixo interlíngua ou inter-wiki. Ele poderá conter um ou mais caracteres que não podem ser utilizados em títulos.',
'allpages-bad-ns' => '{{SITENAME}} não possui o espaço nominal "$1".',
'allpages-hide-redirects' => 'Ocultar redirecionamentos',

# SpecialCachedPage
'cachedspecial-viewing-cached-ttl' => 'Você está visualizando uma versão de cache desta página que pode ser de $1 atrás.',
'cachedspecial-viewing-cached-ts' => 'Você está visualizando uma versão de cache desta página que pode estar desatualizada.',
'cachedspecial-refresh-now' => 'Ver a mais recente.',

# Special:Categories
'categories' => 'Categorias',
'categoriespagetext' => '{{PLURAL:$1|A seguinte categoria contém|As seguintes contém}} páginas ou mídia.
[[Special:UnusedCategories|Categorias não utilizadas]] não são mostradas aqui.
Veja também [[Special:WantedCategories|categorias pedidas]].',
'categoriesfrom' => 'Listar categorias começando por:',
'special-categories-sort-count' => 'ordenar por contagem',
'special-categories-sort-abc' => 'ordenar alfabeticamente',

# Special:DeletedContributions
'deletedcontributions' => 'Contribuições de usuário eliminadas',
'deletedcontributions-title' => 'Contribuições de usuário eliminadas',
'sp-deletedcontributions-contribs' => 'contribuições',

# Special:LinkSearch
'linksearch' => 'Pesquisa de links externos',
'linksearch-pat' => 'Procurar padrão:',
'linksearch-ns' => 'Espaço nominal:',
'linksearch-ok' => 'Pesquisar',
'linksearch-text' => 'É possível usar caracteres curinga, como "*.wikipedia.org".
É necessário, pelo menos, um domínio de nível superior, por exemplo "*.org".<br />
Protocolos suportados: <code>$1</code> (não adicionado nenhum desses em sua pesquisa).',
'linksearch-line' => '$2 possui links para $1',
'linksearch-error' => "\"Caracteres mágicos\" (''wildcards'') só podem ser usados no início do endereço.",

# Special:ListUsers
'listusersfrom' => 'Mostrar usuários começando em:',
'listusers-submit' => 'Exibir',
'listusers-noresult' => 'Não foram encontrados usuários para a forma pesquisada.',
'listusers-blocked' => '({{GENDER:$1|bloqueado|bloqueada}})',

# Special:ActiveUsers
'activeusers' => 'Lista de usuários ativos',
'activeusers-intro' => 'Esta é uma lista de usuários com algum tipo de atividade nos últimos $1 {{PLURAL:$1|dia|dias}}.',
'activeusers-count' => '$1 {{PLURAL:$1|edição|edições}} {{PLURAL:$3|no último dia|nos últimos $3 dias}}',
'activeusers-from' => 'Mostrar usuários começando em:',
'activeusers-hidebots' => 'Esconder robôs',
'activeusers-hidesysops' => 'Esconder administradores',
'activeusers-noresult' => 'Nenhum usuário encontrado.',

# Special:Log/newusers
'newuserlogpage' => 'Registro de criação de usuários',
'newuserlogpagetext' => 'Este é um registro de novas contas de usuário',

# Special:ListGroupRights
'listgrouprights' => 'Privilégios de grupo de usuários',
'listgrouprights-summary' => 'O que segue é uma lista dos grupos de usuários definidos neste wiki, com os seus privilégios de acessos associados.
Pode haver [[{{MediaWiki:Listgrouprights-helppage}}|informações adicionais]] sobre privilégios individuais.',
'listgrouprights-key' => '* <span class="listgrouprights-granted">Privilégio concedido</span>
* <span class="listgrouprights-revoked">Privilégio revogado</span>',
'listgrouprights-group' => 'Grupo',
'listgrouprights-rights' => 'Privilégios',
'listgrouprights-helppage' => 'Help:Privilégios de grupo',
'listgrouprights-members' => '(lista de membros)',
'listgrouprights-addgroup' => 'Podem adicionar {{PLURAL:$2|grupo|grupos}}: $1',
'listgrouprights-removegroup' => 'Podem remover {{PLURAL:$2|grupo|grupos}}: $1',
'listgrouprights-addgroup-all' => 'Podem adicionar todos os grupos',
'listgrouprights-removegroup-all' => 'Podem remover todos os grupos',
'listgrouprights-addgroup-self' => 'Pode adicionar {{PLURAL:$2|grupo|grupos}} à própria conta: $1',
'listgrouprights-removegroup-self' => 'Pode remover {{PLURAL:$2|grupo|grupos}} da própria conta: $1',
'listgrouprights-addgroup-self-all' => 'Pode adicionar todos os grupos à própria conta',
'listgrouprights-removegroup-self-all' => 'Pode remover todos os grupos da própria conta',

# E-mail user
'mailnologin' => 'Nenhum endereço de envio',
'mailnologintext' => 'Necessita de estar [[Special:UserLogin|autenticado]] e de possuir um endereço de e-mail válido nas suas [[Special:Preferences|preferências]] para poder enviar um e-mail a outros usuários.',
'emailuser' => 'Enviar-lhe um e-mail',
'emailpage' => 'Contactar usuário',
'emailpagetext' => 'Você pode usar o formulário abaixo para enviar uma mensagem por correio eletrônico para este usuário.
O endereço eletrônico que você inseriu em [[Special:Preferences|suas preferências de usuário]] irá aparecer como o endereço do remetente da mensagem, então o destinatário poderá responder diretamente para você.',
'usermailererror' => 'Erro no email:',
'defemailsubject' => 'E-mail do usuário "$1" da {{SITENAME}}',
'usermaildisabled' => 'O e-mail do usuário foi desativado',
'usermaildisabledtext' => 'Você não tem como enviar e-mails a outros usuários deste wiki.',
'noemailtitle' => 'Sem endereço de e-mail',
'noemailtext' => 'Este usuário não especificou um endereço de e-mail válido.',
'nowikiemailtitle' => 'E-mail não permitido',
'nowikiemailtext' => 'Este usuário optou por não receber e-mail de outros usuários.',
'emailnotarget' => 'O nome do destinatário não existe ou é inválido.',
'emailtarget' => 'Insira o nome de usuário do destinatário',
'emailusername' => 'Nome de usuário:',
'emailusernamesubmit' => 'Enviar',
'email-legend' => 'Enviar uma mensagem eletrônica para outro usuário da {{SITENAME}}',
'emailfrom' => 'De:',
'emailto' => 'Para:',
'emailsubject' => 'Assunto:',
'emailmessage' => 'Mensagem:',
'emailsend' => 'Enviar',
'emailccme' => 'Enviar ao meu e-mail uma cópia de minha mensagem.',
'emailccsubject' => 'Cópia de sua mensagem para $1: $2',
'emailsent' => 'E-mail enviado',
'emailsenttext' => 'Sua mensagem foi enviada.',
'emailuserfooter' => 'Este e-mail foi enviado por $1 para $2 através da opção de "contactar usuário" da {{SITENAME}}.',

# User Messenger
'usermessage-summary' => 'Deixar mensagem de sistema.',
'usermessage-editor' => 'Mensagens de sistema',

# Watchlist
'watchlist' => 'Páginas vigiadas',
'mywatchlist' => 'Páginas vigiadas',
'watchlistfor2' => 'Para $1 $2',
'nowatchlist' => 'A sua lista de páginas vigiadas não possui títulos.',
'watchlistanontext' => 'Por favor $1 para ver ou editar os itens na sua lista de páginas vigiadas.',
'watchnologin' => 'Não está autenticado',
'watchnologintext' => 'Você precisa estar [[Special:UserLogin|autenticado]] para modificar a sua lista de páginas vigiadas.',
'addwatch' => 'Adicionar às páginas vigiadas',
'addedwatchtext' => "A página \"[[:\$1]]\" foi adicionada à sua [[Special:Watchlist|lista de páginas vigiadas]].
Modificações futuras em tal página e páginas de discussão a ela associadas serão listadas lá, e a página aparecerá em '''negrito''' na [[Special:RecentChanges|lista de mudanças recentes]], para que você possa encontrá-la com maior facilidade.",
'removewatch' => 'Remover das páginas vigiadas',
'removedwatchtext' => 'A página "[[:$1]]" foi removida de sua [[Special:Watchlist|lista de páginas vigiadas]].',
'watch' => 'Vigiar',
'watchthispage' => 'Vigiar esta página',
'unwatch' => 'Desinteressar-se',
'unwatchthispage' => 'Parar de vigiar esta página',
'notanarticle' => 'Não é uma página de conteúdo',
'notvisiblerev' => 'Edição eliminada',
'watchnochange' => 'Nenhuma das páginas vigiadas foi editada no período exibido.',
'watchlist-details' => '{{PLURAL:$1|$1 página|$1 páginas}} na sua lista de páginas vigiadas, excluindo páginas de discussão.',
'wlheader-enotif' => '* A notificação por email encontra-se ativada.',
'wlheader-showupdated' => "* As páginas modificadas desde a sua última visita são mostradas em '''negrito'''",
'watchmethod-recent' => 'verificando edições recentes para as páginas vigiadas',
'watchmethod-list' => 'verificando páginas vigiadas para edições recentes',
'watchlistcontains' => 'Sua lista de páginas vigiadas contém $1 {{PLURAL:$1|página|páginas}}.',
'iteminvalidname' => "Problema com item '$1', nome inválido...",
'wlnote' => "A seguir {{PLURAL:$1|está a última alteração ocorrida|estão as últimas '''$1''' alterações ocorridas}} {{PLURAL:$2|na última hora|nas últimas '''$2''' horas}} a partir de $3, $4.",
'wlshowlast' => 'Ver últimas $1 horas $2 dias $3',
'watchlist-options' => 'Opções da lista de páginas vigiadas',

# Displayed when you click the "watch" button and it is in the process of watching
'watching' => 'Vigiando...',
'unwatching' => 'Deixando de vigiar...',
'watcherrortext' => 'Ocorreu um erro ao alterar a configuração da sua lista de páginas vigiadas para "$1".',

'enotif_mailer' => '{{SITENAME}} Email de Notificação',
'enotif_reset' => 'Marcar todas páginas como visitadas',
'enotif_newpagetext' => 'Esta é uma página nova.',
'enotif_impersonal_salutation' => 'Usuário do projeto "{{SITENAME}}"',
'changed' => 'alterada',
'created' => 'criada',
'enotif_subject' => '{{SITENAME}}: A página $PAGETITLE foi $CHANGEDORCREATED por $PAGEEDITOR',
'enotif_lastvisited' => 'Consulte $1 para todas as alterações efetuadas desde a sua última visita.',
'enotif_lastdiff' => 'Acesse $1 para ver esta alteração.',
'enotif_anon_editor' => 'usuário anônimo $1',
'enotif_body' => 'Caro(a) $WATCHINGUSERNAME,


A página $PAGETITLE da {{SITENAME}} foi $CHANGEDORCREATED a $PAGEEDITDATE por $PAGEEDITOR; consulte $PAGETITLE_URL para ver a versão atual.

$NEWPAGE

Resumo da edição: $PAGESUMMARY $PAGEMINOREDIT

Contate o editor:
e-mail: $PAGEEDITOR_EMAIL
wiki: $PAGEEDITOR_WIKI

Até que visite esta página, você não receberá mais notificações das alterações futuras.
Você pode também reativar as notificações para todas páginas na sua lista de páginas vigiadas.

O seu sistema de notificação amigável da {{SITENAME}}

--
Para alterar as suas preferências das notificações por correio electrónico, visite
{{canonicalurl:{{#special:Preferences}}}}

Para alterar as suas preferências das páginas vigiadas, visite
{{canonicalurl:{{#special:EditWatchlist}}}}

Para retirar a página da lista de páginas vigiadas, visite
$UNWATCHURL

Para comentários e pedidos de ajuda:
{{canonicalurl:{{MediaWiki:Helppage}}}}',

# Delete
'deletepage' => 'Eliminar página',
'confirm' => 'Confirmar',
'excontent' => "o conteúdo era: '$1'",
'excontentauthor' => 'o conteúdo era: "$1" (e o único editor era "[[Special:Contributions/$2|$2]]")',
'exbeforeblank' => "o conteúdo antes de esvaziar era: '$1'",
'exblank' => 'página esvaziada',
'delete-confirm' => 'Eliminar "$1"',
'delete-legend' => 'Eliminar',
'historywarning' => "'''Atenção:''' A página que você está prestes a eliminar possui um histórico com aproximadamente $1 {{PLURAL:$1|revisão|revisões}}:",
'confirmdeletetext' => 'Encontra-se prestes a eliminar permanentemente uma página ou uma imagem e todo o seu histórico.
Por favor, confirme que possui a intenção de fazer isto, que compreende as consequências e que encontra-se a fazer isto de acordo com as [[{{MediaWiki:Policy-url}}|políticas]] do projeto.',
'actioncomplete' => 'Ação concluída',
'actionfailed' => 'Falha na ação',
'deletedtext' => '"$1" foi eliminada.
Consulte $2 para um registro de eliminações recentes.',
'dellogpage' => 'Registro de eliminação',
'dellogpagetext' => 'Abaixo uma lista das eliminações mais recentes.',
'deletionlog' => 'registro de eliminação',
'reverted' => 'Revertido para versão anterior',
'deletecomment' => 'Motivo:',
'deleteotherreason' => 'Justificativa adicional:',
'deletereasonotherlist' => 'Outro motivo',
'deletereason-dropdown' => '* Motivos de eliminação comuns
** Pedido do autor
** Violação de direitos de autor
** Vandalismo',
'delete-edit-reasonlist' => 'Editar motivos de eliminação',
'delete-toobig' => 'Esta página possui um longo histórico de edições, com mais de $1 {{PLURAL:$1|edição|edições}}.
A eliminação de tais páginas foi restrita, a fim de se evitarem problemas acidentais em {{SITENAME}}.',
'delete-warning-toobig' => 'Esta página possui um longo histórico de edições, com mais de $1 {{PLURAL:$1|edição|edições}}.
Eliminá-la poderá causar problemas na base de dados de {{SITENAME}};
prossiga com cuidado.',

# Rollback
'rollback' => 'Reverter edições',
'rollback_short' => 'Reverter',
'rollbacklink' => 'reverter',
'rollbacklinkcount' => 'reverter $1 {{PLURAL:$1|edição|edições}}',
'rollbacklinkcount-morethan' => 'reverter mais de $1 {{PLURAL:$1|edição|edições}}',
'rollbackfailed' => 'A reversão falhou',
'cantrollback' => 'Não foi possível reverter a edição; o último contribuidor é o único autor desta página',
'alreadyrolled' => 'Não foi possível reverter a última edição de [[:$1]] por [[User:$2|$2]] ([[User talk:$2|discussão]]{{int:pipe-separator}}[[Special:Contributions/$2|{{int:contribslink}}]]);
alguém já editou ou reverteu a página.

A última edição da página foi feita por [[User:$3|$3]] ([[User talk:$3|discussão]]{{int:pipe-separator}}[[Special:Contributions/$3|{{int:contribslink}}]]).',
'editcomment' => "O sumário de edição era: \"''\$1''\".",
'revertpage' => 'Foram revertidas as edições de [[Special:Contributions/$2|$2]] ([[User talk:$2|disc]]) para a última versão por [[User:$1|$1]]',
'revertpage-nouser' => 'Revertidas as edições de (nome de usuário removido) para a última revisão por [[User:$1|$1]]',
'rollback-success' => 'Foram revertidas as edições de $1, com o conteúdo passando a estar como na última edição de $2.',

# Edit tokens
'sessionfailure-title' => 'Erro de sessão',
'sessionfailure' => 'Foram detetados problemas com a sua sessão;
Esta ação foi cancelada como medida de proteção contra a intercepção de sessões.
Experimente usar o botão "Voltar" e atualizar a página de onde veio e tente novamente.',

# Protect
'protectlogpage' => 'Registro de proteção',
'protectlogtext' => 'Encontra-se abaixo o registro de proteção e desproteção de páginas.
Consulte a [[Special:ProtectedPages|lista de páginas protegidas]] para ver as páginas que se encontram protegidas neste momento.',
'protectedarticle' => 'protegeu "[[$1]]"',
'modifiedarticleprotection' => 'alterou o nível de proteção para "[[$1]]"',
'unprotectedarticle' => 'removeu a proteção de "[[$1]]"',
'movedarticleprotection' => 'moveu as configurações de proteção de "[[$2]]" para "[[$1]]"',
'protect-title' => 'Protegendo "$1"',
'protect-title-notallowed' => 'Ver o nível de proteção de "$1"',
'prot_1movedto2' => '[[$1]] foi movido para [[$2]]',
'protect-badnamespace-title' => 'Espaço de nomes não-protegidos',
'protect-badnamespace-text' => 'As páginas presentes nesse espaço de nomes não se pode proteger',
'protect-legend' => 'Confirmar proteção',
'protectcomment' => 'Motivo:',
'protectexpiry' => 'Expiração',
'protect_expiry_invalid' => 'O tempo de expiração fornecido é inválido.',
'protect_expiry_old' => 'O tempo de expiração fornecido se situa no passado.',
'protect-unchain-permissions' => 'Desbloquear opções adicionais de proteção',
'protect-text' => "Você pode, nesta página, alterar o nível de proteção para '''$1'''.",
'protect-locked-blocked' => "Você não poderá alterar os níveis de proteção enquanto estiver bloqueado. Esta é a configuração atual para a página '''$1''':",
'protect-locked-dblock' => "Não é possível alterar os níveis de proteção, uma vez que a base de dados se encontra trancada.
Esta é a configuração atual para a página '''$1''':",
'protect-locked-access' => "Sua conta não possui permissões para alterar os níveis de proteção de uma página.
Esta é a configuração atual para a página '''$1''':",
'protect-cascadeon' => 'Esta página encontra-se protegida, uma vez que se encontra incluída {{PLURAL:$1|na página listada a seguir, protegida|nas páginas listadas a seguir, protegidas}} com a "proteção progressiva" ativada. Você poderá alterar o nível de proteção desta página, mas isso não afetará a "proteção progressiva".',
'protect-default' => 'Permitir todos os usuários',
'protect-fallback' => 'É necessário o privilégio de "$1"',
'protect-level-autoconfirmed' => 'Bloquear usuários novos e não registrados',
'protect-level-sysop' => 'Apenas administradores',
'protect-summary-cascade' => 'p. progressiva',
'protect-expiring' => 'expira em $1 (UTC)',
'protect-expiring-local' => 'expira $1',
'protect-expiry-indefinite' => 'tempo indefinido',
'protect-cascade' => '"Proteção progressiva" - proteja quaisquer páginas que estejam incluídas nesta.',
'protect-cantedit' => 'Você não pode alterar o nível de proteção desta página uma vez que você não se encontra habilitado a editá-la.',
'protect-othertime' => 'Outra duração:',
'protect-othertime-op' => 'outra duração',
'protect-existing-expiry' => 'A proteção atual expirará às $3 de $2',
'protect-otherreason' => 'Outro motivo/motivo adicional:',
'protect-otherreason-op' => 'Outro motivo',
'protect-dropdown' => "*Motivos comuns para proteção
** Vandalismo excessivo
** Inserção excessiva de ''spams''
** Guerra de edições improdutiva
** Página bastante acessada",
'protect-edit-reasonlist' => 'Editar motivos de proteções',
'protect-expiry-options' => '1 hora:1 hour,1 dia:1 day,1 semana:1 week,2 semanas:2 weeks,1 mês:1 month,3 meses:3 months,6 meses:6 months,1 ano:1 year,indefinido:infinite',
'restriction-type' => 'Permissão:',
'restriction-level' => 'Nível de restrição:',
'minimum-size' => 'Tam. mínimo',
'maximum-size' => 'Tam. máximo:',
'pagesize' => '(bytes)',

# Restrictions (nouns)
'restriction-edit' => 'Editar',
'restriction-move' => 'Mover',
'restriction-create' => 'Criar',
'restriction-upload' => 'Carregar',

# Restriction levels
'restriction-level-sysop' => 'totalmente protegida',
'restriction-level-autoconfirmed' => 'semi-protegida',
'restriction-level-all' => 'qualquer nível',

# Undelete
'undelete' => 'Ver páginas eliminadas',
'undeletepage' => 'Ver e restaurar páginas eliminadas',
'undeletepagetitle' => "'''Seguem-se as edições eliminadas de [[:$1]]'''.",
'viewdeletedpage' => 'Ver páginas eliminadas',
'undeletepagetext' => '{{PLURAL:$1|A seguinte página foi eliminada|As $1 páginas seguintes foram eliminadas}}, mas ainda {{PLURAL:$1|permanece|permanecem}} no arquivo e poderem ser restauradas.
O arquivo pode ser limpo periodicamente.',
'undelete-fieldset-title' => 'Restaurar edições',
'undeleteextrahelp' => "Para restaurar o histórico de edições completo desta página, desmarque todas as caixas de seleção e clique '''''{{int:undeletebtn}}'''''.
Para efectuar uma restauração seletiva, marque as caixas correspondentes às edições que pretende restaurar e clique '''''{{int:undeletebtn}}'''''.",
'undeleterevisions' => '$1 {{PLURAL:$1|edição disponível|edições disponíveis}}',
'undeletehistory' => 'Se restaurar a página, todas as revisões serão restauradas para o histórico.
Se uma nova página foi criada com o mesmo nome desde a eliminação, as edições restauradas aparecerão no histórico anterior.',
'undeleterevdel' => 'O restauro não será executado se resultar na remoção parcial da versão mais recente da página ou arquivo.
Em tais casos, deverá desselecionar ou reverter a ocultação da versão apagada mais recente.',
'undeletehistorynoadmin' => 'Esta página foi eliminada. O motivo de eliminação é apresentado no súmario abaixo, junto dos detalhes do usuário que editou esta página antes de eliminar. O texto atual destas edições eliminadas encontra-se agora apenas disponível para administradores.',
'undelete-revision' => 'Edição eliminada da página $1 (das $5 de $4), por $3:',
'undeleterevision-missing' => 'Edição inválida ou não encontrada. Talvez você esteja com um link incorreto ou talvez a edição foi restaurada ou removida dos arquivos.',
'undelete-nodiff' => 'Não foram encontradas edições anteriores.',
'undeletebtn' => 'Restaurar',
'undeletelink' => 'ver/restaurar',
'undeleteviewlink' => 'visualizar',
'undeletereset' => 'Limpar',
'undeleteinvert' => 'Inverter seleção',
'undeletecomment' => 'Motivo:',
'undeletedrevisions' => '$1 {{PLURAL:$1|edição restaurada|edições restauradas}}',
'undeletedrevisions-files' => '$1 {{PLURAL:$2|edição restaurada|edições restauradas}} e $2 {{PLURAL:$2|arquivo restaurado|arquivos restaurados}}',
'undeletedfiles' => '{{PLURAL:$1|arquivo restaurado|$1 arquivos restaurados}}',
'cannotundelete' => 'Restauração falhada; alguém talvez já restaurou a página.',
'undeletedpage' => "'''$1 foi restaurada'''

Consulte o [[Special:Log/delete|registro de eliminações]] para um registro das eliminações e restaurações mais recentes.",
'undelete-header' => 'Veja o [[Special:Log/delete|registro de deleções]] para as páginas recentemente eliminadas.',
'undelete-search-title' => 'Pesquisar páginas eliminadas',
'undelete-search-box' => 'Pesquisar páginas eliminadas',
'undelete-search-prefix' => 'Exibir páginas que iniciem com:',
'undelete-search-submit' => 'Pesquisar',
'undelete-no-results' => 'Não foram encontradas edições relacionadas com o que foi buscado no arquivo de edições eliminadas.',
'undelete-filename-mismatch' => 'Não foi possível restaurar a versão do arquivo de $1: nome de arquivo não combina',
'undelete-bad-store-key' => 'Não foi possível restaurar a versão do arquivo de $1: já não existia antes da eliminação.',
'undelete-cleanup-error' => 'Erro ao eliminar o arquivo não utilizado "$1".',
'undelete-missing-filearchive' => 'Não é possível restaurar o arquivo de ID $1, uma vez que ele não se encontra na base de dados. Isso pode significar que já tenha sido restaurado.',
'undelete-error' => 'Erro ao restaurar a página',
'undelete-error-short' => 'Erro ao restaurar arquivo: $1',
'undelete-error-long' => 'Foram encontrados erros ao tentar restaurar o arquivo:

$1',
'undelete-show-file-confirm' => 'Você tem certeza de que deseja visualizar um versão eliminada do arquivo "<nowiki>$1</nowiki>" das $3 de $2?',
'undelete-show-file-submit' => 'Sim',

# Namespace form on various pages
'namespace' => 'Espaço nominal:',
'invert' => 'Inverter seleção',
'tooltip-invert' => 'Marque esta caixa para esconder as alterações a páginas no espaço nominal selecionado (e no espaço nominal associado, se escolheu fazê-lo)',
'namespace_association' => 'Espaço nominal associado',
'tooltip-namespace_association' => 'Marque esta caixa para incluir também o espaço nominal de conteúdo ou de discussão associado à sua seleção',
'blanknamespace' => '(Principal)',

# Contributions
'contributions' => 'Contribuições {{GENDER:{{BASEPAGENAME}}|do usuário|da usuária}}',
'contributions-title' => 'Contribuições {{GENDER:$1|do usuário|da usuária}} $1',
'mycontris' => 'Minhas contribuições',
'contribsub2' => 'Para $1 ($2)',
'nocontribs' => 'Não foram encontradas mudanças com este critério.',
'uctop' => '(atual)',
'month' => 'Mês (inclusive anteriores):',
'year' => 'Ano (inclusive anteriores):',

'sp-contributions-newbies' => 'Mostrar apenas as contribuições das novas contas',
'sp-contributions-newbies-sub' => 'Para contas novas',
'sp-contributions-newbies-title' => 'Contribuições de contas novas',
'sp-contributions-blocklog' => 'Registro de bloqueios',
'sp-contributions-deleted' => 'contribuições eliminadas',
'sp-contributions-uploads' => 'envios',
'sp-contributions-logs' => 'registros',
'sp-contributions-talk' => 'disc',
'sp-contributions-userrights' => 'gerenciamento de privilégios de usuários',
'sp-contributions-blocked-notice' => 'Este usuário atualmente está bloqueado. O registro de bloqueio mais recente é fornecido abaixo para referência:',
'sp-contributions-blocked-notice-anon' => 'Este endereço IP encontra-se bloqueado.
Segue, para referência, a entrada mais recente no registro de bloqueios:',
'sp-contributions-search' => 'Navegar pelas contribuições',
'sp-contributions-username' => 'Endereço de IP ou usuário:',
'sp-contributions-toponly' => 'Mostrar somente as edições que sejam a última alteração',
'sp-contributions-submit' => 'Pesquisar',

# What links here
'whatlinkshere' => 'Páginas afluentes',
'whatlinkshere-title' => 'Páginas que têm links para "$1"',
'whatlinkshere-page' => 'Página:',
'linkshere' => "As seguintes páginas possuem links para '''[[:$1]]''':",
'nolinkshere' => "Não há links para '''[[:$1]]'''.",
'nolinkshere-ns' => "Não há links para '''[[:$1]]''' no espaço nominal selecionado.",
'isredirect' => 'página de redirecionamento',
'istemplate' => 'transclusão',
'isimage' => 'link para o arquivo',
'whatlinkshere-prev' => '{{PLURAL:$1|anterior|$1 anteriores}}',
'whatlinkshere-next' => '{{PLURAL:$1|próximo|próximos $1}}',
'whatlinkshere-links' => '← links',
'whatlinkshere-hideredirs' => '$1 redirecionamentos',
'whatlinkshere-hidetrans' => '$1 transclusões',
'whatlinkshere-hidelinks' => '$1 links',
'whatlinkshere-hideimages' => '$1 links de imagens',
'whatlinkshere-filters' => 'Filtros',

# Block/unblock
'autoblockid' => 'Autobloqueio #$1',
'block' => 'Bloquear usuário',
'unblock' => 'Desbloquear usuário',
'blockip' => 'Bloquear usuário',
'blockip-title' => 'Bloquear usuário',
'blockip-legend' => 'Bloquear usuário',
'blockiptext' => 'Utilize o formulário abaixo para bloquear o acesso à escrita de um endereço específico de IP ou nome de usuário.
Isto só deve ser feito para prevenir vandalismo, e de acordo com a [[{{MediaWiki:Policy-url}}|política]]. Preencha com um motivo específico a seguir (por exemplo, citando páginas que sofreram vandalismo).',
'ipadressorusername' => 'Endereço de IP ou nome de usuário:',
'ipbexpiry' => 'Expiração:',
'ipbreason' => 'Motivo:',
'ipbreasonotherlist' => 'Outro motivo',
'ipbreason-dropdown' => '*Razões comuns para um bloqueio
** Inserindo informações falsas
** Removendo o conteúdo de páginas
** Fazendo "spam" de sítios externos
** Inserindo conteúdo sem sentido/incompreensível nas páginas
** Comportamento intimidador/inoportuno
** Uso abusivo de contas múltiplas
** Nome de usuário inaceitável',
'ipb-hardblock' => 'Impedir que usuários autenticados editem a partir deste endereço IP',
'ipbcreateaccount' => 'Prevenir criação de conta de usuário',
'ipbemailban' => 'Impedir usuário de enviar e-mail',
'ipbenableautoblock' => 'Bloquear automaticamente o endereço de IP mais recente usado por este usuário e todos os IPs subseqüentes dos quais ele tentar editar',
'ipbsubmit' => 'Bloquear este usuário',
'ipbother' => 'Outro período:',
'ipboptions' => '2 horas:2 hours,1 dia:1 day,3 dias:3 days,1 semana:1 week,2 semanas:2 weeks,1 mês:1 month,3 meses:3 months,6 meses:6 months,1 ano:1 year,indefinido:infinite',
'ipbotheroption' => 'outro',
'ipbotherreason' => 'Outro motivo/motivo adicional:',
'ipbhidename' => 'Ocultar nome de usuário em edições e listas',
'ipbwatchuser' => 'Vigiar a página de usuário e a página de discussão deste usuário',
'ipb-disableusertalk' => 'Impedir que este usuário edite a sua página de discussão enquanto estiver bloqueado',
'ipb-change-block' => 'Bloquear o usuário novamente com estes parâmetros',
'ipb-confirm' => 'Confirmar bloqueio',
'badipaddress' => 'Endereço de IP inválido',
'blockipsuccesssub' => 'Bloqueio bem sucedido',
'blockipsuccesstext' => '[[Special:Contributions/$1|$1]] foi {{GENDER:$1|bloqueado|bloqueada}}.<br />
Consulte a [[Special:BlockList|lista de bloqueios]].',
'ipb-blockingself' => 'Você está prestes a bloquear-se a si próprio. Você tem a certeza de que pretende fazê-lo?',
'ipb-confirmhideuser' => 'Você está prestes a bloquear um utilizador com "Ocultar nome de utilizador/IP" ativado. Isto irá suprimir o nome do usuário de todas as listas e entradas dos registos. Tem a certeza de que pretende fazê-lo?',
'ipb-edit-dropdown' => 'Editar motivos de bloqueio',
'ipb-unblock-addr' => 'Desbloquear $1',
'ipb-unblock' => 'Desbloquear um usuário ou endereço de IP',
'ipb-blocklist' => 'Ver bloqueios em vigência',
'ipb-blocklist-contribs' => 'Contribuições de $1',
'unblockip' => 'Desbloquear usuário',
'unblockiptext' => 'Utilize o formulário a seguir para restaurar o acesso à escrita para um endereço de IP ou usuário previamente bloqueado.',
'ipusubmit' => 'Remover este bloqueio',
'unblocked' => '[[User:$1|$1]] foi desbloqueado',
'unblocked-range' => '$1 foi desbloqueado',
'unblocked-id' => 'O bloqueio de $1 foi removido com sucesso',
'blocklist' => 'Usuários bloqueados',
'ipblocklist' => 'Usuários bloqueados',
'ipblocklist-legend' => 'Procurar por um usuário bloqueado',
'blocklist-userblocks' => 'Esconder bloqueios de contas',
'blocklist-tempblocks' => 'Esconder bloqueios temporários',
'blocklist-addressblocks' => 'Esconder bloqueios de IP único',
'blocklist-rangeblocks' => 'Ocultar bloqueios de faixas',
'blocklist-timestamp' => 'Data e hora',
'blocklist-target' => 'Destinatário',
'blocklist-expiry' => 'Expira',
'blocklist-by' => 'Administrador que realizou o bloqueio',
'blocklist-params' => 'Parâmetros do bloqueio',
'blocklist-reason' => 'Motivo',
'ipblocklist-submit' => 'Pesquisar',
'ipblocklist-localblock' => 'Bloqueio local',
'ipblocklist-otherblocks' => '{{PLURAL:$1|Outro bloqueio|Outros bloqueios}}',
'infiniteblock' => 'infinito',
'expiringblock' => 'expira em $1 às $2',
'anononlyblock' => 'anôn. apenas',
'noautoblockblock' => 'bloqueio automático desabilitado',
'createaccountblock' => 'criação de conta de usuário bloqueada',
'emailblock' => 'impedido de enviar e-mail',
'blocklist-nousertalk' => 'impossibilitado de editar a própria página de discussão',
'ipblocklist-empty' => 'A lista de bloqueios encontra-se vazia.',
'ipblocklist-no-results' => 'O endereço de IP ou nome de usuário procurado não se encontra bloqueado.',
'blocklink' => 'bloquear',
'unblocklink' => 'desbloquear',
'change-blocklink' => 'alterar bloqueio',
'contribslink' => 'contribs',
'emaillink' => 'enviar um e-mail',
'autoblocker' => 'Você foi automaticamente bloqueado, pois partilha um endereço de IP com "[[User:$1|$1]]". O motivo apresentado foi: "$2".',
'blocklogpage' => 'Registro de bloqueio',
'blocklog-showlog' => 'Este usuário já foi bloqueado anteriormente.
O registro de bloqueio é fornecido abaixo, para referência:',
'blocklog-showsuppresslog' => 'O usuário foi bloqueado e ocultado anteriormente.
O registro de supressão é fornecido abaixo para referência:',
'blocklogentry' => 'bloqueou "[[$1]]" por $2. $3',
'reblock-logentry' => 'modificou parâmetros de bloqueio de [[$1]] com expiração em $2. $3',
'blocklogtext' => 'Este é um registro de ações de bloqueio e desbloqueio.
Endereços IP sujeitos a bloqueio automático não são listados.
Consulte a [[Special:BlockList|lista de bloqueios]] para obter a lista de bloqueios e banimentos em efeito neste momento.',
'unblocklogentry' => 'desbloqueou $1',
'block-log-flags-anononly' => 'apenas usuários anônimos',
'block-log-flags-nocreate' => 'criação de contas desabilitada',
'block-log-flags-noautoblock' => 'bloqueio automático desabilitado',
'block-log-flags-noemail' => 'impedido de enviar e-mail',
'block-log-flags-nousertalk' => 'impossibilitado de editar a própria página de discussão',
'block-log-flags-angry-autoblock' => 'autobloqueio melhorado ativado',
'block-log-flags-hiddenname' => 'nome de usuário oculto',
'range_block_disabled' => 'A funcionalidade de bloquear gamas de IPs encontra-se desativada.',
'ipb_expiry_invalid' => 'Tempo de expiração inválido.',
'ipb_expiry_temp' => 'Bloqueios com nome de usuário ocultado devem ser permanentes.',
'ipb_hide_invalid' => 'Não foi possível suprimir esta conta; ela poderá ter demasiadas edições.',
'ipb_already_blocked' => '"$1" já se encontra bloqueado',
'ipb-needreblock' => '$1 já se encontra bloqueado. Deseja alterar as configurações?',
'ipb-otherblocks-header' => '{{PLURAL:$1|Outro bloqueio|Outros bloqueios}}',
'unblock-hideuser' => 'Você não pode desbloquear este usuário, porque o nome de usuário dele foi ocultado.',
'ipb_cant_unblock' => 'Erro: Bloqueio com ID $1 não encontrado. Poderá já ter sido desbloqueado.',
'ipb_blocked_as_range' => 'Erro: O IP $1 não se encontra bloqueado de forma direta, não podendo ser desbloqueado deste modo. Se encontra bloqueado como parte do "range" $2, o qual pode ser desbloqueado.',
'ip_range_invalid' => 'Gama de IPs inválida.',
'ip_range_toolarge' => 'Intervalos de bloqueio maiores do que /$1 não são permitidos',
'blockme' => 'Bloquear-me',
'proxyblocker' => 'Bloqueador de proxy',
'proxyblocker-disabled' => 'Esta função está desabilitada.',
'proxyblockreason' => 'O seu endereço de IP foi bloqueado por ser um proxy público. Por favor contacte o seu fornecedor do serviço de Internet ou o apoio técnico e informe-os deste problema de segurança grave.',
'proxyblocksuccess' => 'Concluído.',
'sorbsreason' => 'O seu endereço IP encontra-se listado como proxy aberto pela DNSBL utilizada por {{SITENAME}}.',
'sorbs_create_account_reason' => 'O seu endereço de IP encontra-se listado como proxy aberto na DNSBL utilizada por {{SITENAME}}. Você não pode criar uma conta',
'cant-block-while-blocked' => 'Você não pode bloquear outros usuários enquanto estiver bloqueado.',
'cant-see-hidden-user' => 'O usuário que você está tentando bloquear já está bloqueado ou oculto. Como você não possui privilégio de ocultar usuários, você não pode ver ou editar o bloqueio desse usuário.',
'ipbblocked' => 'Não é possível que você bloqueie ou desbloqueie outros usuários, já que você se encontra bloqueado',
'ipbnounblockself' => 'Não é permitido que você se desbloqueie',

# Developer tools
'lockdb' => 'Trancar banco de dados',
'unlockdb' => 'Desbloquear a base de dados',
'lockdbtext' => 'Trancar o banco de dados suspenderá a habilidade de todos os usuários de editarem páginas, mudarem suas preferências, lista de páginas vigiadas e outras coisas que requerem mudanças na base de dados.<br />
Por favor, confirme que você realmente pretende fazer isso e que vai destrancar a base de dados quando a manutenção estiver concluída.',
'unlockdbtext' => 'Desbloquear a base de dados vai restaurar a habilidade de todos os usuários de editarem páginas, mudarem suas preferências, alterarem suas listas de páginas vigiadas e outras coisas que requerem mudanças na base de dados.
Por favor, confirme que realmente pretende fazer isso.',
'lockconfirm' => 'Sim, eu realmente desejo bloquear a base de dados.',
'unlockconfirm' => 'Sim, eu realmente desejo desbloquear a base de dados.',
'lockbtn' => 'Bloquear base de dados',
'unlockbtn' => 'Desbloquear base de dados',
'locknoconfirm' => 'Você não selecionou a caixa de confirmação.',
'lockdbsuccesssub' => 'Bloqueio bem sucedido',
'unlockdbsuccesssub' => 'Desbloqueio bem sucedido',
'lockdbsuccesstext' => 'A base de dados da {{SITENAME}} foi bloqueada.
<br />Lembre-se de remover o bloqueio após a manutenção.',
'unlockdbsuccesstext' => 'O banco de dados foi desbloqueado.',
'lockfilenotwritable' => 'O arquivo de bloqueio da base de dados não pode ser escrito. Para bloquear ou desbloquear a base de dados, este precisa de poder ser escrito pelo servidor Web.',
'databasenotlocked' => 'A base de dados não encontra-se bloqueada.',
'lockedbyandtime' => '(por $1 em $2 às $3)',

# Move page
'move-page' => 'Mover $1',
'move-page-legend' => 'Mover página',
'movepagetext' => "Utilizando o seguinte formulário você poderá renomear uma página, movendo todo o histórico para o novo título. O título anterior será transformado em um redirecionamento para o novo.

Links para as páginas antigas não serão mudados; certifique-se de verificar por redirecionamentos quebrados ou duplos. Você é responsável por certificar-se que os links continuam apontando para onde eles deveriam apontar.

Note que a página '''não''' será movida se já existir uma página com o novo título, a não ser que ele esteja vazio ou seja um redirecionamento e não tenha histórico de edições. Isto significa que pode renomear uma página de volta para o nome que tinha anteriormente se cometer algum engano e que não pode sobrescrever uma página.

<b>CUIDADO!</b>
Isto pode ser uma mudança drástica e inesperada para uma página popular; por favor, tenha certeza de que compreende as consequências da mudança antes de prosseguir.",
'movepagetext-noredirectfixer' => "Usando o formulário abaixo, você irá alterar o nome de uma página e moverá todo o histórico desta para o nome novo.
A página antiga será transformada numa página de redirecionamento para a nova.
Verifique a existência de [[Special:DoubleRedirects|redirecionamentos duplos]] ou [[Special:BrokenRedirects|quebrados]].
É sua responsabilidade certificar-se de que os links continuam a apontar para onde eles deveriam apontar.

Note que a página '''não''' será movida se já existir uma página com o nome novo, a menos que esta página esteja vazia ou seja uma página de redirecionamento e não tenha um histórico de edições.
Isto significa que, se você cometer um engano, poderá alterar o nome da página movida de volta para o seu nome original; e que não pode sobrescrever o conteúdo de uma página existente.

'''Aviso!'''
Para páginas populares, esta operação pode representar uma mudança drástica e inesperada;
certifique-se de que compreende as consequências da operação antes de continuar.",
'movepagetalktext' => "A página de \"discussão\" associada, se existir, será automaticamente movida, '''a não ser que:'''
*Uma página de discussão com conteúdo já exista sob o novo título, ou
*Você não marque a caixa abaixo.

Nestes casos, você terá que mover ou mesclar a página manualmente, se assim desejar.",
'movearticle' => 'Mover página',
'moveuserpage-warning' => "'''Aviso:''' Você irá mover uma página de usuário. Note que apenas a página será movida, ''sem'' alterar o nome do usuário.",
'movenologin' => 'Não autenticado',
'movenologintext' => 'Você precisa ser um usuário registrado e [[Special:UserLogin|autenticado]] para poder mover uma página.',
'movenotallowed' => 'Você não possui permissão para mover páginas.',
'movenotallowedfile' => 'Você não possui permissão para mover arquivos.',
'cant-move-user-page' => 'Você não possui permissão de mover páginas principais de usuários.',
'cant-move-to-user-page' => 'Você não tem permissão para mover uma página para uma página de usuários (exceto para uma subpágina de usuário).',
'newtitle' => 'Para novo título',
'move-watch' => 'Vigiar esta página',
'movepagebtn' => 'Mover página',
'pagemovedsub' => 'Página movida com sucesso',
'movepage-moved' => '\'\'\'"$1" foi movida para "$2"\'\'\'',
'movepage-moved-redirect' => 'Um redirecionamento foi criado.',
'movepage-moved-noredirect' => 'A criação de um redirecionamento foi suprimida.',
'articleexists' => 'Uma página com este título já existe, ou o título que escolheu é inválido.
Por favor, escolha outro nome.',
'cantmove-titleprotected' => 'Você não pode mover uma página para tal denominação uma vez que o novo título se encontra protegido contra criação',
'talkexists' => "'''A página em si foi movida com sucesso. No entanto, a página de discussão não foi movida, uma vez que já existia uma com este título. Por favor, mescle-as manualmente.'''",
'movedto' => 'movido para',
'movetalk' => 'Mover também a página de discussão associada.',
'move-subpages' => 'Mover subpáginas (até $1)',
'move-talk-subpages' => 'Mover subpáginas da página de discussão (até $1)',
'movepage-page-exists' => 'A página $1 já existe e não pode ser substituída.',
'movepage-page-moved' => 'A página $1 foi movida para $2',
'movepage-page-unmoved' => 'A página $1 não pôde ser movida para $2.',
'movepage-max-pages' => 'O limite de $1 {{PLURAL:$1|página movida|páginas movidas}} foi atingido; não será possível mover mais páginas de forma automática.',
'movelogpage' => 'Registro de movimento',
'movelogpagetext' => 'Abaixo encontra-se uma lista de páginas movidas.',
'movesubpage' => '{{PLURAL:$1|Subpágina|Subpáginas}}',
'movesubpagetext' => 'Esta página tem $1 {{PLURAL:$1|subpágina mostrada|subpáginas mostradas}} abaixo.',
'movenosubpage' => 'Esta página não tem subpáginas.',
'movereason' => 'Motivo:',
'revertmove' => 'reverter',
'delete_and_move' => 'Eliminar e mover',
'delete_and_move_text' => '==Eliminação necessária==
A página de destino ("[[:$1]]") já existe. Deseja eliminá-la de modo a poder mover?',
'delete_and_move_confirm' => 'Sim, eliminar a página',
'delete_and_move_reason' => 'Eliminada para mover "[[$1]]"',
'selfmove' => 'O título fonte e o título destinatário são os mesmos; não é possível mover uma página para ela mesma.',
'immobile-source-namespace' => 'Não é possível mover páginas no espaço nominal "$1"',
'immobile-target-namespace' => 'Não é possível mover páginas para o espaço nominal "$1"',
'immobile-target-namespace-iw' => 'Uma ligação interwiki não é um destino válido para uma movimentação de página.',
'immobile-source-page' => 'Esta página não pode ser movida.',
'immobile-target-page' => 'Não é possível mover para esse título de destino.',
'imagenocrossnamespace' => 'Não é possível mover imagem para espaço nominal que não de imagens',
'nonfile-cannot-move-to-file' => 'Não é possível mover não arquivos para espaço nominal de arquivos',
'imagetypemismatch' => 'A extensão do novo arquivo não corresponde ao seu tipo',
'imageinvalidfilename' => 'O nome do arquivo alvo é inválido',
'fix-double-redirects' => 'Atualizar todos os redirecionamentos que apontem para o título original',
'move-leave-redirect' => 'Criar um redirecionamento',
'protectedpagemovewarning' => "'''Atenção:''' Esta página foi protegida de modo que apenas usuários com privilégio de administrador possam movê-la.
A última entrada no histórico é fornecida abaixo para referência:",
'semiprotectedpagemovewarning' => "''Nota:''' Esta página foi protegida de modo que apenas usuários registrados possam movê-la.
A última entrada no histórico é fornecida abaixo para referência:",
'move-over-sharedrepo' => '=== Arquivo existente ===
[[:$1]] existe em um repositório compartilhado. Mover um arquivo para este título irá sobrescrever o arquivo compartilhado.',
'file-exists-sharedrepo' => 'O nome de arquivo escolhido já está em uso em um repositório compartilhado.
Por favor, escolha outro nome.',

# Export
'export' => 'Exportar páginas',
'exporttext' => 'Você pode exportar o texto e o histórico de edições, ou de uma página em particular ou de um conjunto de páginas, para um arquivo XML.
A partir disso, será possível importar esse conteúdo em outro wiki que utilize o software MediaWiki através da [[Special:Import|página de importações]].

Para exportar páginas, insira os títulos na caixa de texto abaixo, um título por linha; selecione entre a edição atual acompanhada das edições anteriores e respectivo histórico de edições ou entre apenas a última edição e suas respectivas informações.

Para o último caso, é possível obter o XML a partir de um link direto (por exemplo, [[{{#Special:Export}}/{{MediaWiki:Mainpage}}]] para a edição mais recente da página "[[{{MediaWiki:Mainpage}}]]").',
'exportall' => 'Exportar todas as páginas',
'exportcuronly' => 'Incluir apenas a revisão atual, não o histórico inteiro',
'exportnohistory' => "----
'''Nota:''' a exportação do histórico completo das páginas através deste formulário foi desativada devido a questões de performance.",
'exportlistauthors' => 'Incluir uma lista completa dos colaboradores de cada página',
'export-submit' => 'Exportar',
'export-addcattext' => 'Adicionar à listagem páginas da categoria:',
'export-addcat' => 'Adicionar',
'export-addnstext' => 'Adicionar páginas do domínio:',
'export-addns' => 'Adicionar',
'export-download' => 'Oferecer para salvar como um arquivo',
'export-templates' => 'Incluir predefinições',
'export-pagelinks' => 'Incluir páginas ligadas até uma profundidade de:',

# Namespace 8 related
'allmessages' => 'Todas as mensagens de sistema',
'allmessagesname' => 'Nome',
'allmessagesdefault' => 'Texto padrão',
'allmessagescurrent' => 'Texto atual',
'allmessagestext' => 'Esta é uma lista de todas as mensagens de sistema disponíveis no espaço nominal {{ns:mediawiki}}.
Acesse [//www.mediawiki.org/wiki/Localisation MediaWiki Localisation] e [//translatewiki.net translatewiki.net] caso deseje contribuir para traduções do MediaWiki feitas para uso geral.',
'allmessagesnotsupportedDB' => "Esta página não pode ser utilizada, uma vez que '''\$wgUseDatabaseMessages''' foi desativado.",
'allmessages-filter-legend' => 'Filtro',
'allmessages-filter' => 'Filtrar por estado de personalização:',
'allmessages-filter-unmodified' => 'Não modificadas',
'allmessages-filter-all' => 'Todas',
'allmessages-filter-modified' => 'Modificadas',
'allmessages-prefix' => 'Filtrar por prefixo:',
'allmessages-language' => 'Língua:',
'allmessages-filter-submit' => 'Ir',

# Thumbnails
'thumbnail-more' => 'Ampliar',
'filemissing' => 'arquivo não encontrado',
'thumbnail_error' => 'Erro ao criar miniatura: $1',
'djvu_page_error' => 'página DjVu inacessível',
'djvu_no_xml' => 'Não foi possível acessar o XML do arquivo DjVU',
'thumbnail-temp-create' => 'Não foi possível criar o arquivo temporário de miniatura',
'thumbnail-dest-create' => 'Não foi possível salvar a miniatura no destino',
'thumbnail_invalid_params' => 'Parâmetros de miniatura inválidos',
'thumbnail_dest_directory' => 'Não foi possível criar o diretório de destino',
'thumbnail_image-type' => 'Tipo de imagem não suportado',
'thumbnail_gd-library' => 'Configuração da biblioteca GD incompleta: função $1 não encontrada',
'thumbnail_image-missing' => 'Arquivo aparentemente inexistente: $1',

# Special:Import
'import' => 'Importar páginas',
'importinterwiki' => 'Importação transwiki',
'import-interwiki-text' => 'Selecione um wiki e um título de página para importar.
As datas das edições e os seus editores serão mantidos.
Todas as ações de importação transwiki são registradas no [[Special:Log/import|Registro de importações]].',
'import-interwiki-source' => 'Wiki/página fonte:',
'import-interwiki-history' => 'Copiar todas as edições para esta página',
'import-interwiki-templates' => 'Incluir todas as predefinições',
'import-interwiki-submit' => 'Importar',
'import-interwiki-namespace' => 'Domínio de destino:',
'import-interwiki-rootpage' => 'Página raiz de destino (opcional):',
'import-upload-filename' => 'Nome do arquivo:',
'import-comment' => 'Comentário:',
'importtext' => 'Por favor, exporte o arquivo do wiki de origem utilizando a página especial [[Special:Export|exportação de páginas]].
Salve o arquivo no seu computador e importe-o aqui.',
'importstart' => 'Importando páginas...',
'import-revision-count' => '{{PLURAL:$1|uma edição|$1 edições}}',
'importnopages' => 'Não existem páginas a importar.',
'imported-log-entries' => '{{PLURAL:$1|Importado|Importados}} $1 {{PLURAL:$1|entradas de log|entradas de log}}.',
'importfailed' => 'A importação falhou: $1',
'importunknownsource' => 'Tipo de fonte de importação desconhecida',
'importcantopen' => 'Não foi possível abrir o arquivo de importação',
'importbadinterwiki' => 'Ligação de interwiki incorreta',
'importnotext' => 'Vazio ou sem texto',
'importsuccess' => 'Importação completa!',
'importhistoryconflict' => 'Existem conflitos de edições no histórico (talvez esta página já foi importada antes)',
'importnosources' => 'Não foram definidas fontes de importação transwiki e o carregamento direto de históricos encontra-se desativado.',
'importnofile' => 'Nenhum arquivo de importação foi carregado.',
'importuploaderrorsize' => 'O envio do arquivo a ser importado falhou. O arquivo é maior do que o tamanho máximo permitido para upload.',
'importuploaderrorpartial' => 'O envio do arquivo a ser importado falhou. O arquivo foi recebido parcialmente.',
'importuploaderrortemp' => 'O envio do arquivo a ser importado falhou. Não há um diretório temporário.',
'import-parse-failure' => 'Falha ao importar dados XML',
'import-noarticle' => 'Sem páginas para importar!',
'import-nonewrevisions' => 'Todas as edições já haviam sido importadas.',
'xml-error-string' => '$1 na linha $2, coluna $3 (byte $4): $5',
'import-upload' => 'Enviar dados em XML',
'import-token-mismatch' => 'Perda dos dados da sessão. Por favor tente novamente.',
'import-invalid-interwiki' => 'Não é possível importar do wiki especificado.',
'import-error-edit' => 'A página "$1" não foi importada porque você não tem permissão para editá-la.',
'import-error-create' => 'A página "$1" não foi importada porque você não tem permissão para criá-la.',
'import-error-interwiki' => 'A página "$1" não pôde ser importada pois seu nome está reservado para um link interwik.',
'import-error-special' => 'A página "$1" não pôde ser importada porque ela pertence a um espaço nominal especial que não suporta páginas.',
'import-error-invalid' => 'A página "$1" não pôde ser importada por seu nome ser inválido.',
'import-rootpage-invalid' => 'A página raiz dada é um título inválido.',

# Import log
'importlogpage' => 'Registro de importações',
'importlogpagetext' => 'Importações administrativas de páginas com a preservação do histórico de edição de outros wikis.',
'import-logentry-upload' => 'importou [[$1]] através de arquivo de importação',
'import-logentry-upload-detail' => '{{PLURAL:$1|uma edição|$1 edições}}',
'import-logentry-interwiki' => 'transwiki $1',
'import-logentry-interwiki-detail' => '{{PLURAL:$1|$1 edição|$1 edições}} de $2',

# JavaScriptTest
'javascripttest' => 'Teste de JavaScript',
'javascripttest-title' => 'Executando testes para $1',
'javascripttest-pagetext-noframework' => 'Esta página é exclusiva para testes de JavaScript.',
'javascripttest-pagetext-unknownframework' => 'A estrutura de testes "$1" é desconhecida.',
'javascripttest-pagetext-frameworks' => 'Escolha uma das seguintes estruturas de teste: $1',
'javascripttest-pagetext-skins' => 'Escolha o tema para executar os testes:',
'javascripttest-qunit-intro' => 'Veja a [$1 documentação de testes] no mediawiki.org.',
'javascripttest-qunit-heading' => 'Suíte de ferramentas de teste JavaScript QUnit para MediaWiki',

# Tooltip help for the actions
'tooltip-pt-userpage' => 'Sua página de usuário',
'tooltip-pt-anonuserpage' => 'A página de usuário para o ip com o qual você está editando',
'tooltip-pt-mytalk' => 'Sua página de discussão',
'tooltip-pt-anontalk' => 'Discussão sobre edições deste endereço de ip',
'tooltip-pt-preferences' => 'Suas configurações',
'tooltip-pt-watchlist' => 'Lista de alterações nas páginas que você está monitorando',
'tooltip-pt-mycontris' => 'Listagem de suas contribuições',
'tooltip-pt-login' => 'Você é encorajado a autenticar-se, apesar disso não ser obrigatório.',
'tooltip-pt-anonlogin' => 'Você é encorajado a autenticar-se, apesar disso não ser obrigatório.',
'tooltip-pt-logout' => 'Sair',
'tooltip-ca-talk' => 'Discussão sobre o conteúdo da página',
'tooltip-ca-edit' => 'Você pode editar esta página. Use o botão "Mostrar previsão" antes de salvar.',
'tooltip-ca-addsection' => 'Iniciar uma nova seção',
'tooltip-ca-viewsource' => 'Esta página está protegida.
Você pode, no entanto, visualiar seu código-fonte.',
'tooltip-ca-history' => 'Edições anteriores desta página.',
'tooltip-ca-protect' => 'Proteger esta página',
'tooltip-ca-unprotect' => 'Alterou a proteção desta página',
'tooltip-ca-delete' => 'Apagar esta página',
'tooltip-ca-undelete' => 'Restaurar edições feitas a esta página antes da eliminação',
'tooltip-ca-move' => 'Mover esta página',
'tooltip-ca-watch' => 'Adicionar esta página à sua lista de páginas vigiadas',
'tooltip-ca-unwatch' => 'Remover esta página da lista de páginas vigiadas',
'tooltip-search' => 'Pesquisar em {{SITENAME}}',
'tooltip-search-go' => 'Ir a uma página com este exato nome, caso exista',
'tooltip-search-fulltext' => 'Procurar páginas que contenham este texto',
'tooltip-p-logo' => 'Acessar a página principal',
'tooltip-n-mainpage' => 'Acessar a página principal',
'tooltip-n-mainpage-description' => 'Acessar a página principal',
'tooltip-n-portal' => 'Sobre o projeto, o que se pode fazer e onde achar as coisas',
'tooltip-n-currentevents' => 'Encontre informações sobre acontecimentos atuais',
'tooltip-n-recentchanges' => 'A lista de mudanças recentes desta wiki.',
'tooltip-n-randompage' => 'Acessar uma página de forma aleatória',
'tooltip-n-help' => 'Lugar específico para obter ajuda quanto ao ambiente.',
'tooltip-t-whatlinkshere' => 'Lista de todas as páginas que possuem links para esta',
'tooltip-t-recentchangeslinked' => 'Mudanças recentes nas páginas para as quais esta possui links',
'tooltip-feed-rss' => 'Feed RSS desta página',
'tooltip-feed-atom' => 'Feed Atom desta página',
'tooltip-t-contributions' => 'Ver as contribuições deste usuário',
'tooltip-t-emailuser' => 'Enviar um e-mail a este usuário',
'tooltip-t-upload' => 'Enviar arquivos',
'tooltip-t-specialpages' => 'Lista de páginas especiais',
'tooltip-t-print' => 'Versão para impressão desta página',
'tooltip-t-permalink' => 'Link permanente para esta versão desta página',
'tooltip-ca-nstab-main' => 'Ver a página de conteúdo',
'tooltip-ca-nstab-user' => 'Ver a página de usuário',
'tooltip-ca-nstab-media' => 'Ver a página de mídia',
'tooltip-ca-nstab-special' => 'Esta é uma página especial. Não é possível editar seu conteúdo de forma direta.',
'tooltip-ca-nstab-project' => 'Ver a página de projeto',
'tooltip-ca-nstab-image' => 'Ver a página de arquivo',
'tooltip-ca-nstab-mediawiki' => 'Ver a mensagem de sistema',
'tooltip-ca-nstab-template' => 'Ver a predefinição',
'tooltip-ca-nstab-help' => 'Ver a página de ajuda',
'tooltip-ca-nstab-category' => 'Ver a página descritiva da categoria',
'tooltip-minoredit' => 'Marcar esta alteração como uma edição menor',
'tooltip-save' => 'Salva as suas alterações',
'tooltip-preview' => 'Prevê as alterações feitas por você. Antes de salvar, use para ver se está tudo como esperado!',
'tooltip-diff' => 'Visualizar as alterações que você fez no texto',
'tooltip-compareselectedversions' => 'Ver o que há de diferente entre as duas versões selecionadas desta página.',
'tooltip-watch' => 'Adicionar esta página à sua lista de páginas vigiadas',
'tooltip-watchlistedit-normal-submit' => 'Remover títulos',
'tooltip-watchlistedit-raw-submit' => 'Atualizar a lista de páginas vigiadas',
'tooltip-recreate' => 'Recriar a página apesar de ter sido eliminada',
'tooltip-upload' => 'Iniciar o carregamento',
'tooltip-rollback' => '"{{int:rollbacklink}}" reverte, com apenas um clique, as edições do último editor desta página.',
'tooltip-undo' => '"desfazer" reverte esta edição e apresenta a página de edição no modo de previsão.
Permite colocar uma justificativa no sumário da edição.',
'tooltip-preferences-save' => 'Salvar preferências',
'tooltip-summary' => 'Forneça um breve resumo',

# Stylesheets
'common.css' => '/** o código CSS colocado aqui será aplicado a todos os temas */',
'monobook.css' => '/* o código CSS colocado aqui terá efeito nos usuários do tema Monobook */',

# Scripts
'common.js' => '/* Códigos JavaScript aqui colocados serão carregados por todos aqueles que acessarem alguma página deste wiki */',
'standard.js' => '/* Qualquer JavaScript aqui colocado afetará os usuários do skin Clássico */',
'nostalgia.js' => '/* Qualquer JavaScript aqui colocado afetará os usuários do skin Nostalgia */',
'cologneblue.js' => '/* Qualquer JavaScript aqui colocado afetará os usuários do skin Azul colonial */',
'monobook.js' => '/* Qualquer JavaScript aqui colocado afetará os usuários do skin MonoBook */',
'myskin.js' => '/* Qualquer JavaScript aqui colocado afetará os usuários do skin MySkin */',
'chick.js' => '/* Qualquer JavaScript aqui colocado afetará os usuários do skin Chique */',
'simple.js' => '/* Qualquer JavaScript aqui colocado afetará os usuários do skin Simples */',
'modern.js' => '/* Qualquer JavaScript aqui colocado afetará os usuários do skin Moderno */',
'vector.js' => '/* Qualquer JavaScript aqui colocado afetará os usuários do skin Vector */',

# Metadata
'notacceptable' => 'O servidor não pode fornecer os dados em um formato que o seu cliente possa ler.',

# Attribution
'anonymous' => '{{PLURAL:$1|Usuário anônimo|Usuários anônimos}} da {{SITENAME}}',
'siteuser' => '{{GENDER:$2|um utilizador|uma utilizadora|um utilizador}} da {{SITENAME}} ($1)',
'anonuser' => 'usuário anônimo $1 da {{SITENAME}}',
'lastmodifiedatby' => 'Esta página foi modificada pela última vez às $2 de $1 por $3.',
'othercontribs' => 'Baseado no trabalho de $1.',
'others' => 'outros',
'siteusers' => '{{PLURAL:$2|um usuário|$2 usuários}} da {{SITENAME}} ($1)',
'anonusers' => '{{PLURAL:$2|usuário anônimo|usuários anônimos}} da {{SITENAME}} ($1)',
'creditspage' => 'Créditos da página',
'nocredits' => 'Não há informações disponíveis sobre os créditos desta página.',

# Spam protection
'spamprotectiontitle' => 'Filtro de proteção contra spam',
'spamprotectiontext' => "A página que deseja salvar foi bloqueada pelo filtro de spam.
Tal bloqueio foi provavelmente causado por uma ligação para um ''website'' externo que conste na lista negra.",
'spamprotectionmatch' => 'O seguinte texto ativou o filtro de spam: $1',
'spambot_username' => 'MediaWiki limpeza de spam',
'spam_reverting' => 'Revertendo para a última versão que não contém links para $1',
'spam_blanking' => 'Todas revisões contendo links para $1, limpando',
'spam_deleting' => 'Eliminada por todas as suas edições conterem links para $1',

# Info page
'pageinfo-title' => 'Informações sobre "$1"',
'pageinfo-header-basic' => 'Informação básica',
'pageinfo-header-edits' => 'Histórico de edições',
'pageinfo-header-restrictions' => 'Proteção da página',
'pageinfo-header-properties' => 'Propriedades da página',
'pageinfo-display-title' => 'Exibir título',
'pageinfo-length' => 'Tamanho da página (em bytes)',
'pageinfo-article-id' => 'ID da página',
'pageinfo-robot-policy' => 'Status do mecanismo de pesquisa',
'pageinfo-robot-index' => 'Indexável',
'pageinfo-robot-noindex' => 'Não indexável',
'pageinfo-views' => 'Número de visitas',
'pageinfo-watchers' => 'Número de vigilantes da página',
'pageinfo-redirects-name' => 'Redireciona para esta página',
'pageinfo-subpages-name' => 'Subpáginas desta página',
'pageinfo-subpages-value' => '$1 ($2 {{PLURAL:$2|redirecionamento|redirecionamentos}}; $3 {{PLURAL:$3|não-redirecionamento|não-redirecionamentos}})',
'pageinfo-firstuser' => 'Criador da página',
'pageinfo-firsttime' => 'Data de criação da página',
'pageinfo-lastuser' => 'Último editor',
'pageinfo-lasttime' => 'Data da última edição',
'pageinfo-edits' => 'Número total de edições',
'pageinfo-authors' => 'Número total de autores distintos',
'pageinfo-recent-edits' => 'Número de edições recentes (nos últimos $1)',
'pageinfo-recent-authors' => 'Número recente de autores distintos',
'pageinfo-magic-words' => '{{PLURAL:$1|Palavra mágica|Palavras mágicas}} ($1)',
'pageinfo-hidden-categories' => '{{PLURAL:$1|Categoria oculta|Categorias ocultas}} ($1)',
'pageinfo-templates' => '{{PLURAL:$1|predefinição transcluída|predefinições transcluídas}}',
'pageinfo-toolboxlink' => 'Informações da página',
'pageinfo-redirectsto' => 'Redirecionar para',
'pageinfo-redirectsto-info' => 'informações',
'pageinfo-contentpage' => 'Contado como uma página de conteúdo',
'pageinfo-contentpage-yes' => 'Sim',
'pageinfo-protect-cascading' => 'Proteção em cascata ativada',
'pageinfo-protect-cascading-yes' => 'Sim',

# Skin names
'skinname-standard' => 'Clássico',
'skinname-nostalgia' => 'Nostalgia',
'skinname-cologneblue' => 'Azul colonial',
'skinname-monobook' => 'MonoBook',
'skinname-myskin' => 'MySkin',
'skinname-chick' => 'Chique',
'skinname-simple' => 'Simples',
'skinname-modern' => 'Moderno',

# Patrolling
'markaspatrolleddiff' => 'Marcar como patrulhada',
'markaspatrolledtext' => 'Marcar esta página como patrulhada',
'markedaspatrolled' => 'Marcado como verificado',
'markedaspatrolledtext' => 'A revisão selecionada de [[:$1]] foi marcada como patrulhada.',
'rcpatroldisabled' => 'Edições verificadas nas Mudanças Recentes desativadas',
'rcpatroldisabledtext' => 'A funcionalidade de Edições verificadas nas Mudanças Recentes está atualmente desativada.',
'markedaspatrollederror' => 'Não é possível marcar como verificado',
'markedaspatrollederrortext' => 'Você precisa de especificar uma revisão para poder marcar como verificado.',
'markedaspatrollederror-noautopatrol' => 'Você não está autorizado a marcar suas próprias edições como edições patrulhadas.',

# Patrol log
'patrol-log-page' => 'Registro de edições patrulhadas',
'patrol-log-header' => 'Este é um registro de edições patrulhadas.',
'log-show-hide-patrol' => '$1 registro de edições patrulhadas',

# Image deletion
'deletedrevision' => 'Apagou a versão antiga $1',
'filedeleteerror-short' => 'Erro ao eliminar arquivo: $1',
'filedeleteerror-long' => 'Foram encontrados erros ao tentar eliminar o arquivo:

$1',
'filedelete-missing' => 'Não é possível eliminar "$1" já que o arquivo não existe.',
'filedelete-old-unregistered' => 'A revisão de arquivo especificada para "$1" não se encontra na base de dados.',
'filedelete-current-unregistered' => 'O arquivo "$1" não se encontra na base de dados.',
'filedelete-archive-read-only' => 'O servidor web não é capaz de fazer alterações no diretório "$1".',

# Browsing diffs
'previousdiff' => '← Edição anterior',
'nextdiff' => 'Edição posterior →',

# Media information
'mediawarning' => "'''Aviso''': Este tipo de arquivo pode conter código malicioso.
Executá-lo poderá comprometer a segurança do seu sistema.",
'imagemaxsize' => "Limite de tamanho de imagem:<br />''(para páginas de descrição de arquivos)''",
'thumbsize' => 'Tamanho de miniaturas:',
'widthheightpage' => '$1 × $2, $3 {{PLURAL:$3|página|páginas}}',
'file-info' => 'tamanho: $1, tipo MIME: $2',
'file-info-size' => '$1 × $2 pixels, tamanho: $3, tipo MIME: $4',
'file-info-size-pages' => '$1 × $2 pixels, tamanho do arquivo: $3, tipo MIME: $4, $5 {{PLURAL:$5|página|páginas}}',
'file-nohires' => 'Sem resolução maior disponível.',
'svg-long-desc' => 'arquivo SVG, de $1 × $2 pixels, tamanho: $3',
'show-big-image' => 'Resolução original',
'show-big-image-preview' => 'Tamanho desta previsualização: $1.',
'show-big-image-other' => '{{PLURAL:$2|Outra resolução|Outras resoluções}}: $1.',
'show-big-image-size' => '$1 × $2 pixels',
'file-info-gif-looped' => 'cíclico',
'file-info-gif-frames' => '$1 {{PLURAL:$1|quadro|quadros}}',
'file-info-png-looped' => 'cíclico',
'file-info-png-repeat' => 'tocado $1 {{PLURAL:$1|vez|vezes}}',
'file-info-png-frames' => '$1 {{PLURAL:$1|quadro|quadros}}',

# Special:NewFiles
'newimages' => 'Galeria de novos arquivos',
'imagelisttext' => "É exibida a seguir uma listagem {{PLURAL:$1|de '''um''' arquivo organizado|de '''$1''' arquivos organizados}} por $2.",
'newimages-summary' => 'Esta página especial mostra os arquivos mais recentemente enviados',
'newimages-legend' => 'Filtrar',
'newimages-label' => 'Nome de arquivo (ou parte dele):',
'showhidebots' => '($1 robôs)',
'noimages' => 'Nada para ver.',
'ilsubmit' => 'Pesquisar',
'bydate' => 'por data',
'sp-newimages-showfrom' => 'Mostrar novos arquivos a partir das $2 de $1',

# Video information, used by Language::formatTimePeriod() to format lengths in the above messages
'seconds' => '{{PLURAL:$1|um segundo|$1 segundos}}',
'minutes' => '{{PLURAL:$1|um minuto|$1 minutos}}',
'hours' => '{{PLURAL:$1|uma hora|$1 horas}}',
'days' => '{{PLURAL:$1|um dia|$1 dias}}',
'ago' => '$1 atrás',

# Bad image list
'bad_image_list' => 'O formato é o seguinte:

Só são reconhecidos elementos na forma de lista (linhas começadas por *).
O primeiro link em cada linha deve direcionar para o arquivo que se pretende bloquear.
Quaisquer outros links nessa mesma linha são considerados exceções (ou seja, páginas onde o arquivo pode estar presente).',

# Metadata
'metadata' => 'Metadados',
'metadata-help' => 'Este arquivo contém dados adicionais, provavelmente adicionados pela câmera digital ou scanner utilizado para criar ou digitalizá-lo.
Caso o arquivo tenha sofrido alterações, alguns detalhes poderão ser diferentes do que o arquivo atual é.',
'metadata-expand' => 'Mostrar detalhes adicionais',
'metadata-collapse' => 'Esconder detalhes restantes',
'metadata-fields' => 'Os campos de metadados de imagens listados nesta mensagem serão incluídos na página de descrição da imagem quando a tabela de metadados estiver recolhida.
Por padrão, outros campos estarão ocultos.
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
'exif-imagewidth' => 'Largura',
'exif-imagelength' => 'Altura',
'exif-bitspersample' => 'Bits por componente',
'exif-compression' => 'Esquema de compressão',
'exif-photometricinterpretation' => 'Composição pixel',
'exif-orientation' => 'Orientação',
'exif-samplesperpixel' => 'Número de componentes',
'exif-planarconfiguration' => 'Arranjo de dados',
'exif-ycbcrsubsampling' => 'Porcentagem de submistura do canal amarelo para o ciano',
'exif-ycbcrpositioning' => 'Posicionamento Y e C',
'exif-xresolution' => 'Resolução horizontal',
'exif-yresolution' => 'Resolução vertical',
'exif-stripoffsets' => 'Localização de dados da imagem',
'exif-rowsperstrip' => 'Número de linhas por tira',
'exif-stripbytecounts' => 'Bytes por tira comprimida',
'exif-jpeginterchangeformat' => 'Desvio para SOI de JPEG',
'exif-jpeginterchangeformatlength' => 'Bytes de dados JPEG',
'exif-whitepoint' => 'Cromaticidade do ponto branco',
'exif-primarychromaticities' => 'Cromaticidades primárias',
'exif-ycbcrcoefficients' => 'Coeficientes da matriz de transformação do espaço de cores',
'exif-referenceblackwhite' => 'Par de valores de referência de preto e branco',
'exif-datetime' => 'Data e hora de modificação do arquivo',
'exif-imagedescription' => 'Título',
'exif-make' => 'Fabricante da câmara',
'exif-model' => 'Modelo da câmara',
'exif-software' => 'Software utilizado',
'exif-artist' => 'Autor',
'exif-copyright' => 'Licença',
'exif-exifversion' => 'Versão Exif',
'exif-flashpixversion' => 'Versão de Flashpix suportada',
'exif-colorspace' => 'Espaço de cor',
'exif-componentsconfiguration' => 'Significado de cada componente',
'exif-compressedbitsperpixel' => 'Modo de compressão de imagem',
'exif-pixelydimension' => 'Largura da imagem',
'exif-pixelxdimension' => 'Altura da imagem',
'exif-usercomment' => 'Comentários de usuários',
'exif-relatedsoundfile' => 'arquivo áudio relacionado',
'exif-datetimeoriginal' => 'Data e hora de geração de dados',
'exif-datetimedigitized' => 'Data e hora de digitalização',
'exif-subsectime' => 'Subsegundos DataHora',
'exif-subsectimeoriginal' => 'Subsegundos DataHoraOriginal',
'exif-subsectimedigitized' => 'Subsegundos DataHoraDigitalizado',
'exif-exposuretime' => 'Tempo de exposição',
'exif-exposuretime-format' => '$1 seg ($2)',
'exif-fnumber' => 'Número F',
'exif-exposureprogram' => 'Programa de exposição',
'exif-spectralsensitivity' => 'Sensibilidade espectral',
'exif-isospeedratings' => 'Taxa de velocidade ISO',
'exif-shutterspeedvalue' => 'Velocidade do obturador (APEX)',
'exif-aperturevalue' => 'Abertura APEX',
'exif-brightnessvalue' => 'Brilho',
'exif-exposurebiasvalue' => 'Polarização de exposição',
'exif-maxaperturevalue' => 'Abertura máxima',
'exif-subjectdistance' => 'Distância do sujeito',
'exif-meteringmode' => 'Modo de medição',
'exif-lightsource' => 'Fonte de luz',
'exif-flash' => 'Flash',
'exif-focallength' => 'Comprimento de foco da lente',
'exif-subjectarea' => 'Área de sujeito',
'exif-flashenergy' => 'Energia do flash',
'exif-focalplanexresolution' => 'Resolução do plano focal X',
'exif-focalplaneyresolution' => 'Resolução do plano focal Y',
'exif-focalplaneresolutionunit' => 'Unidade de resolução do plano focal',
'exif-subjectlocation' => 'Localização de sujeito',
'exif-exposureindex' => 'Índice de exposição',
'exif-sensingmethod' => 'Método de sensação',
'exif-filesource' => 'Fonte do arquivo',
'exif-scenetype' => 'Tipo de cena',
'exif-customrendered' => 'Processamento de imagem personalizado',
'exif-exposuremode' => 'Modo de exposição',
'exif-whitebalance' => 'Balanço do branco',
'exif-digitalzoomratio' => 'Proporção de zoom digital',
'exif-focallengthin35mmfilm' => 'Distância focal em filme de 35 mm',
'exif-scenecapturetype' => 'Tipo de captura de cena',
'exif-gaincontrol' => 'Controlo de cena',
'exif-contrast' => 'Contraste',
'exif-saturation' => 'Saturação',
'exif-sharpness' => 'Nitidez',
'exif-devicesettingdescription' => 'Descrição das configurações do dispositivo',
'exif-subjectdistancerange' => 'Distância de alcance do sujeito',
'exif-imageuniqueid' => 'Identificação única da imagem',
'exif-gpsversionid' => 'Versão de GPS',
'exif-gpslatituderef' => 'Latitude Norte ou Sul',
'exif-gpslatitude' => 'Latitude',
'exif-gpslongituderef' => 'Longitude Leste ou Oeste',
'exif-gpslongitude' => 'Longitude',
'exif-gpsaltituderef' => 'Referência de altitude',
'exif-gpsaltitude' => 'Altitude',
'exif-gpstimestamp' => 'Tempo GPS (relógio atômico)',
'exif-gpssatellites' => 'Satélites utilizados para a medição',
'exif-gpsstatus' => 'Estado do receptor',
'exif-gpsmeasuremode' => 'Modo da medição',
'exif-gpsdop' => 'Precisão da medição',
'exif-gpsspeedref' => 'Unidade da velocidade',
'exif-gpsspeed' => 'Velocidade do receptor GPS',
'exif-gpstrackref' => 'Referência para a direção do movimento',
'exif-gpstrack' => 'Direção do movimento',
'exif-gpsimgdirectionref' => 'Referência para a direção da imagem',
'exif-gpsimgdirection' => 'Direção da imagem',
'exif-gpsmapdatum' => 'Utilizados dados do estudo Geodetic',
'exif-gpsdestlatituderef' => 'Referência para a latitude do destino',
'exif-gpsdestlatitude' => 'Latitude do destino',
'exif-gpsdestlongituderef' => 'Referência para a longitude do destino',
'exif-gpsdestlongitude' => 'Longitude do destino',
'exif-gpsdestbearingref' => 'Referência para o azimute do destino',
'exif-gpsdestbearing' => 'Azimute do destino',
'exif-gpsdestdistanceref' => 'Referência de distância para o destino',
'exif-gpsdestdistance' => 'Distância para o destino',
'exif-gpsprocessingmethod' => 'Nome do método de processamento do GPS',
'exif-gpsareainformation' => 'Nome da área do GPS',
'exif-gpsdatestamp' => 'Data do GPS',
'exif-gpsdifferential' => 'Correção do diferencial do GPS',
'exif-jpegfilecomment' => 'Comentário de arquivo JPEG',
'exif-keywords' => 'Palavras-chave',
'exif-worldregioncreated' => 'Região do mundo onde a fotografia foi tirada',
'exif-countrycreated' => 'País onde a fotografia foi tirada',
'exif-countrycodecreated' => 'Código do país onde a fotografia foi tirada',
'exif-provinceorstatecreated' => 'Província ou estado onde a fotografia foi tirada',
'exif-citycreated' => 'Cidade onde a fotografia foi tirada',
'exif-sublocationcreated' => 'Parte da cidade onde a fotografia foi tirada',
'exif-worldregiondest' => 'Região do mundo fotografada',
'exif-countrydest' => 'País fotografado',
'exif-countrycodedest' => 'Código do país fotografado',
'exif-provinceorstatedest' => 'Província ou estado fotografado',
'exif-citydest' => 'Cidade fotografada',
'exif-sublocationdest' => 'Parte da cidade fotografada',
'exif-objectname' => 'Título curto',
'exif-specialinstructions' => 'Instruções especiais',
'exif-headline' => 'Título',
'exif-credit' => 'Atribuição/Fornecedor',
'exif-source' => 'Fonte',
'exif-editstatus' => 'Estatuto editorial da imagem',
'exif-urgency' => 'Urgência',
'exif-fixtureidentifier' => 'Nome da coluna',
'exif-locationdest' => 'Localização representada',
'exif-locationdestcode' => 'Código da localização representada',
'exif-objectcycle' => 'Período do dia para a qual o conteúdo está direcionado',
'exif-contact' => 'Informações para contato',
'exif-writer' => 'Escritor',
'exif-languagecode' => 'Língua',
'exif-iimversion' => 'Versão IIM',
'exif-iimcategory' => 'Categoria',
'exif-iimsupplementalcategory' => 'Categorias suplementares',
'exif-datetimeexpires' => 'Não utilizar após',
'exif-datetimereleased' => 'Lançado em',
'exif-originaltransmissionref' => 'Código original do local de transmissão',
'exif-identifier' => 'Identificador',
'exif-lens' => 'Lente usada',
'exif-serialnumber' => 'Número de série da câmera',
'exif-cameraownername' => 'Proprietário da câmara',
'exif-label' => 'Etiqueta',
'exif-datetimemetadata' => 'Data da última modificação dos metadados',
'exif-nickname' => 'Nome informal da imagem',
'exif-rating' => 'Classificação (max. 5)',
'exif-rightscertificate' => 'Certificado de gestão de direitos',
'exif-copyrighted' => 'Estado dos direitos autorais',
'exif-copyrightowner' => 'Titular dos direitos autorais',
'exif-usageterms' => 'Termos de uso',
'exif-webstatement' => 'Declaração na internet dos direitos autorais',
'exif-originaldocumentid' => 'Identificação exclusiva do documento original',
'exif-licenseurl' => 'URL da licença',
'exif-morepermissionsurl' => 'Informações para licenciamento alternativo',
'exif-attributionurl' => 'Ao reutilizar esta obra, coloque um link para',
'exif-preferredattributionname' => 'Ao reutilizar esta obra, faça a atribuição a',
'exif-pngfilecomment' => 'Comentário de arquivo PNG',
'exif-disclaimer' => 'Exoneração de responsabilidade',
'exif-contentwarning' => 'Aviso sobre conteúdo',
'exif-giffilecomment' => 'Comentário de arquivo GIF',
'exif-intellectualgenre' => 'Tipo de item',
'exif-subjectnewscode' => 'Código do tema',
'exif-scenecode' => 'Código de cena IPTC',
'exif-event' => 'Evento retratado',
'exif-organisationinimage' => 'Organização retratada',
'exif-personinimage' => 'Pessoa retratada',
'exif-originalimageheight' => 'Altura da imagem antes de ser cortada',
'exif-originalimagewidth' => 'Largura da imagem antes de ser cortada',

# EXIF attributes
'exif-compression-1' => 'Sem compressão',
'exif-compression-2' => 'CCITT Grupo 3 Codificação run length de Huffman modificado unidimensional',
'exif-compression-3' => 'CCITT Grupo 3 codificação de fax',
'exif-compression-4' => 'CCITT Grupo 4 codificação de fax',

'exif-copyrighted-true' => 'Direitos autorais reservados',
'exif-copyrighted-false' => 'Domínio público',

'exif-unknowndate' => 'Data desconhecida',

'exif-orientation-1' => 'Normal',
'exif-orientation-2' => 'Espelhamento horizontal',
'exif-orientation-3' => 'Rotacionado em 180°',
'exif-orientation-4' => 'Espelhamento vertical',
'exif-orientation-5' => 'Rotacionado em 90º em sentido anti-horário e espelhado verticalmente',
'exif-orientation-6' => 'Rodado 90° no sentido anti-horário',
'exif-orientation-7' => 'Rotacionado em 90° no sentido horário e espelhado verticalmente',
'exif-orientation-8' => 'Rodado 90° no sentido horário',

'exif-planarconfiguration-1' => 'formato irregular',
'exif-planarconfiguration-2' => 'formato plano',

'exif-colorspace-65535' => 'Descalibrada',

'exif-componentsconfiguration-0' => 'não existe',

'exif-exposureprogram-0' => 'Não definido',
'exif-exposureprogram-1' => 'Manual',
'exif-exposureprogram-2' => 'Programa normal',
'exif-exposureprogram-3' => 'Prioridade de abertura',
'exif-exposureprogram-4' => 'Prioridade de obturador',
'exif-exposureprogram-5' => 'Programa criativo (com tendência para profundidade de campo)',
'exif-exposureprogram-6' => 'Programa de movimento (tende a velocidade de disparo mais rápida)',
'exif-exposureprogram-7' => 'Modo de retrato (para fotos em <i>closeup</i> com o fundo fora de foco)',
'exif-exposureprogram-8' => 'Modo de paisagem (para fotos de paisagem com o fundo em foco)',

'exif-subjectdistance-value' => '$1 metros',

'exif-meteringmode-0' => 'Desconhecido',
'exif-meteringmode-1' => 'Média',
'exif-meteringmode-2' => 'MédiaPonderadaAoCentro',
'exif-meteringmode-3' => 'Ponto',
'exif-meteringmode-4' => 'MultiPonto',
'exif-meteringmode-5' => 'Padrão',
'exif-meteringmode-6' => 'Parcial',
'exif-meteringmode-255' => 'Outro',

'exif-lightsource-0' => 'Desconhecida',
'exif-lightsource-1' => 'Luz do dia',
'exif-lightsource-2' => 'Fluorescente',
'exif-lightsource-3' => 'Tungsténio (luz incandescente)',
'exif-lightsource-4' => 'Flash',
'exif-lightsource-9' => 'Tempo bom',
'exif-lightsource-10' => 'Tempo nublado',
'exif-lightsource-11' => 'Sombra',
'exif-lightsource-12' => 'Iluminação fluorecente (D 5700 – 7100K)',
'exif-lightsource-13' => 'Iluminação fluorecente branca (N 4600 – 5400K)',
'exif-lightsource-14' => 'Iluminação fluorecente esbranquiçada (W 3900 – 4500K)',
'exif-lightsource-15' => 'Iluminação fluorecente branca (WW 3200 – 3700K)',
'exif-lightsource-17' => 'Padrão de lâmpada A',
'exif-lightsource-18' => 'Padrão de lâmpada B',
'exif-lightsource-19' => 'Padrão de lâmpada C',
'exif-lightsource-24' => 'Tungsténio de estúdio ISO',
'exif-lightsource-255' => 'Outra fonte de luz',

# Flash modes
'exif-flash-fired-0' => 'Flash não disparou',
'exif-flash-fired-1' => 'Flash disparado',
'exif-flash-return-0' => "''strobe'' não encontrou ou detectou nenhuma função",
'exif-flash-return-2' => "''strobe'' não retornou a função detectada",
'exif-flash-return-3' => "''strobe'' retornou a luz detectada",
'exif-flash-mode-1' => 'disparo de flash forçado',
'exif-flash-mode-2' => "disparo de ''flash'' suprimido",
'exif-flash-mode-3' => 'modo automático',
'exif-flash-function-1' => "Sem função de ''flash''",
'exif-flash-redeye-1' => 'modo de redução de olhos vermelhos',

'exif-focalplaneresolutionunit-2' => 'polegadas',

'exif-sensingmethod-1' => 'Indefinido',
'exif-sensingmethod-2' => 'Sensor de áreas de cores de um chip',
'exif-sensingmethod-3' => 'Sensor de áreas de cores de dois chips',
'exif-sensingmethod-4' => 'Sensor de áreas de cores de três chips',
'exif-sensingmethod-5' => 'Sensor de área sequencial de cores',
'exif-sensingmethod-7' => 'Sensor trilinear',
'exif-sensingmethod-8' => 'Sensor linear sequencial de cores',

'exif-filesource-3' => 'Câmara fotográfica digital',

'exif-scenetype-1' => 'Imagem fotografada diretamente',

'exif-customrendered-0' => 'Processo normal',
'exif-customrendered-1' => 'Processo personalizado',

'exif-exposuremode-0' => 'Exposição automática',
'exif-exposuremode-1' => 'Exposição manual',
'exif-exposuremode-2' => 'Bracket automático',

'exif-whitebalance-0' => 'Balanço de brancos automático',
'exif-whitebalance-1' => 'Balanço de brancos manual',

'exif-scenecapturetype-0' => 'Padrão',
'exif-scenecapturetype-1' => 'Paisagem',
'exif-scenecapturetype-2' => 'Retrato',
'exif-scenecapturetype-3' => 'Cena noturna',

'exif-gaincontrol-0' => 'Nenhum',
'exif-gaincontrol-1' => 'Baixo ganho positivo',
'exif-gaincontrol-2' => 'Alto ganho positivo',
'exif-gaincontrol-3' => 'Baixo ganho negativo',
'exif-gaincontrol-4' => 'Alto ganho negativo',

'exif-contrast-0' => 'Normal',
'exif-contrast-1' => 'Suave',
'exif-contrast-2' => 'Alto',

'exif-saturation-0' => 'Normal',
'exif-saturation-1' => 'Baixa saturação',
'exif-saturation-2' => 'Alta saturação',

'exif-sharpness-0' => 'Normal',
'exif-sharpness-1' => 'Fraco',
'exif-sharpness-2' => 'Forte',

'exif-subjectdistancerange-0' => 'Desconhecida',
'exif-subjectdistancerange-1' => 'Macro',
'exif-subjectdistancerange-2' => 'Vista próxima',
'exif-subjectdistancerange-3' => 'Vista distante',

# Pseudotags used for GPSLatitudeRef and GPSDestLatitudeRef
'exif-gpslatitude-n' => 'Latitude Norte',
'exif-gpslatitude-s' => 'Latitude Sul',

# Pseudotags used for GPSLongitudeRef and GPSDestLongitudeRef
'exif-gpslongitude-e' => 'Longitude Leste',
'exif-gpslongitude-w' => 'Longitude Oeste',

# Pseudotags used for GPSAltitudeRef
'exif-gpsaltitude-above-sealevel' => '$1 {{PLURAL:$1|metro|metros}} acima do nível do mar',
'exif-gpsaltitude-below-sealevel' => '$1 {{PLURAL:$1|metro|metros}} abaixo do nível do mar',

'exif-gpsstatus-a' => 'Medição em progresso',
'exif-gpsstatus-v' => 'Interoperabilidade de medição',

'exif-gpsmeasuremode-2' => 'Medição bidimensional',
'exif-gpsmeasuremode-3' => 'Medição tridimensional',

# Pseudotags used for GPSSpeedRef
'exif-gpsspeed-k' => 'Quilómetros por hora',
'exif-gpsspeed-m' => 'Milhas por hora',
'exif-gpsspeed-n' => 'Nós',

# Pseudotags used for GPSDestDistanceRef
'exif-gpsdestdistance-k' => 'Quilômetros',
'exif-gpsdestdistance-m' => 'Milhas',
'exif-gpsdestdistance-n' => 'Milhas náuticas',

'exif-gpsdop-excellent' => 'Excelente ($1)',
'exif-gpsdop-good' => 'Bom ($1)',
'exif-gpsdop-moderate' => 'Satisfatório ($1)',
'exif-gpsdop-fair' => 'Aceitável ($1)',
'exif-gpsdop-poor' => 'Fraco ($1)',

'exif-objectcycle-a' => 'Só de manhã',
'exif-objectcycle-p' => 'Só à tarde/noite',
'exif-objectcycle-b' => 'De manhã e à tarde/noite',

# Pseudotags used for GPSTrackRef, GPSImgDirectionRef and GPSDestBearingRef
'exif-gpsdirection-t' => 'Direção real',
'exif-gpsdirection-m' => 'Direção magnética',

'exif-ycbcrpositioning-1' => 'Centradas',
'exif-ycbcrpositioning-2' => 'Co-localizada',

'exif-dc-contributor' => 'Colaboradores',
'exif-dc-coverage' => 'Âmbito espacial ou temporal do conteúdo',
'exif-dc-date' => 'Data(s)',
'exif-dc-publisher' => 'Editora',
'exif-dc-relation' => 'Conteúdos relacionados',
'exif-dc-rights' => 'Direitos',
'exif-dc-source' => 'Imagem fonte',
'exif-dc-type' => 'Tipo de mídia',

'exif-rating-rejected' => 'Rejeitado',

'exif-isospeedratings-overflow' => 'Maior que 65535',

'exif-iimcategory-ace' => 'Artes, cultura e entretenimento',
'exif-iimcategory-clj' => 'Lei e crime',
'exif-iimcategory-dis' => 'Desastres e acidentes',
'exif-iimcategory-fin' => 'Economia e negócios',
'exif-iimcategory-edu' => 'Educação',
'exif-iimcategory-evn' => 'Meio ambiente',
'exif-iimcategory-hth' => 'Saúde',
'exif-iimcategory-hum' => 'Interesse humano',
'exif-iimcategory-lab' => 'Trabalho',
'exif-iimcategory-lif' => 'Estilo de vida e lazer',
'exif-iimcategory-pol' => 'Política',
'exif-iimcategory-rel' => 'Religião e credo',
'exif-iimcategory-sci' => 'Ciência e tecnologia',
'exif-iimcategory-soi' => 'Questões sociais',
'exif-iimcategory-spo' => 'Esportes',
'exif-iimcategory-war' => 'Guerra, conflitos e agitação social',
'exif-iimcategory-wea' => 'Tempo',

'exif-urgency-normal' => 'Normal ($1)',
'exif-urgency-low' => 'Baixa ($1)',
'exif-urgency-high' => 'Alta ($1)',
'exif-urgency-other' => 'Prioridade definida pelo usuário ($1)',

# External editor support
'edit-externally' => 'Editar este arquivo a partir de um programa externo',
'edit-externally-help' => '(Consulte as [//www.mediawiki.org/wiki/Manual:External_editors instruções de instalação] para maiores informações)',

# 'all' in various places, this might be different for inflected languages
'watchlistall2' => 'todas',
'namespacesall' => 'todos',
'monthsall' => 'todos',
'limitall' => 'todas',

# E-mail address confirmation
'confirmemail' => 'Confirmar endereço de E-mail',
'confirmemail_noemail' => 'Não possui um endereço de e-mail válido indicado nas suas [[Special:Preferences|preferências de usuário]].',
'confirmemail_text' => '{{SITENAME}} requer o seu endereço de e-mail esteja validado antes de utilizar as funcionalidades que requerem um endereço de e-mail.
Ative o botão abaixo para enviar uma confirmação para o seu endereço de e-mail.
A mensagem incluirá um link que contém um código;
acesse o link no seu navegador para confirmar que o seu endereço de e-mail é válido.',
'confirmemail_pending' => 'Um código de confirmação já foi enviado para você; caso tenha criado sua conta recentemente, é recomendável aguardar alguns minutos para o receber antes de tentar pedir um novo código.',
'confirmemail_send' => 'Enviar código de confirmação',
'confirmemail_sent' => 'E-mail de confirmação enviado.',
'confirmemail_oncreate' => 'Foi enviado um código de confirmação para o seu endereço de e-mail.
Tal código não é exigido para que possa se autenticar no sistema, mas será necessário que você o forneça antes de habilitar qualquer ferramenta baseada no uso de e-mail deste wiki.',
'confirmemail_sendfailed' => 'O {{SITENAME}} não pôde enviar o email de confirmação.
Verifique se o seu endereço de e-mail possui caracteres inválidos.

O mailer retornou: $1',
'confirmemail_invalid' => 'Código de confirmação inválido. O código poderá ter expirado.',
'confirmemail_needlogin' => 'Precisa de $1 para confirmar o seu endereço de e-mail.',
'confirmemail_success' => 'O seu endereço de e-mail foi confirmado. Pode agora se ligar.',
'confirmemail_loggedin' => 'O seu endereço de e-mail foi agora confirmado.',
'confirmemail_error' => 'Alguma coisa correu mal ao guardar a sua confirmação.',
'confirmemail_subject' => '{{SITENAME}} confirmação de endereço de e-mail',
'confirmemail_body' => 'Alguém, provavelmente você, com o endereço de IP $1,
registrou uma conta "$2" com este endereço de e-mail em {{SITENAME}}.

Para confirmar que esta conta realmente é sua, e para ativar
as funcionalidades de e-mail em {{SITENAME}},
abra o seguinte endereço no seu navegador:

$3

Se você *não* registrou a conta, siga a seguinte ligação
para cancelar a confirmação do endereço de e-mail:

$5

Este código de confirmação irá expirar em $4.',
'confirmemail_body_changed' => 'Alguém, provavelmente você com o endereço de IP $1,
alterou o endereço de e-mail da conta "$2" para este em {{SITENAME}}.

Para confirmar que esta conta é realmente sua e reativar
as funcionalidades de e-mail em {{SITENAME}},
abra o seguinte link no seu navegador:

$3

Caso a conta *não* lhe pertença, siga o seguinte link
para cancelar a confirmação do endereço de e-mail:

$5

Este código de confirmação irá expirar em $4.',
'confirmemail_body_set' => 'Alguém, provavelmente você com o endereço IP $1,
definiu o endereço de correio eletrónico da conta "$2" para este na {{SITENAME}}.

Para confirmar que esta conta é realmente sua e reativar
as funcionalidades de correio electrónico na {{SITENAME}},
abra o seguinte link no seu browser:

$3

Caso a conta *não* lhe pertença, siga o seguinte link
para cancelar a confirmação do endereço de correio electrónico:

$5

Este código de confirmação irá expirar em $4.',
'confirmemail_invalidated' => 'Confirmação de endereço de e-mail cancelada',
'invalidateemail' => 'Cancelar confirmação de e-mail',

# Scary transclusion
'scarytranscludedisabled' => '[A transclusão de páginas de outros wikis encontra-se desabilitada]',
'scarytranscludefailed' => '[Não foi possível obter a predefinição a partir de $1]',
'scarytranscludetoolong' => '[URL longa demais]',

# Delete conflict
'deletedwhileediting' => "'''Aviso''': Esta página foi eliminada após você ter começado a editar!",
'confirmrecreate' => "O usuário [[User:$1|$1]] ([[User talk:$1|Discussão]]) eliminou esta página após você ter começado a editar, pelo seguinte motivo:
: ''$2''
Por favor, confirme que realmente deseja recriar esta página.",
'confirmrecreate-noreason' => 'O usuário [[User:$1|$1]] ([[User talk:$1|discussão]]) eliminou esta página depois de você ter começado a editá-la. Confirme que deseja recriar a página, por favor.',
'recreate' => 'Recriar',

# action=purge
'confirm_purge_button' => 'OK',
'confirm-purge-top' => 'Limpar a memória cache desta página?',
'confirm-purge-bottom' => "Purgar uma página limpa o ''cache'' e força a sua versão mais recente a aparecer.",

# action=watch/unwatch
'confirm-watch-button' => 'OK',
'confirm-watch-top' => 'Adicionar esta página às suas páginas vigiadas?',
'confirm-unwatch-button' => 'OK',
'confirm-unwatch-top' => 'Remover esta página das páginas vigiadas?',

# Multipage image navigation
'imgmultipageprev' => '← página anterior',
'imgmultipagenext' => 'próxima página →',
'imgmultigo' => 'Ir!',
'imgmultigoto' => 'Ir para a página $1',

# Table pager
'ascending_abbrev' => 'asc',
'descending_abbrev' => 'desc',
'table_pager_next' => 'Próxima página',
'table_pager_prev' => 'Página anterior',
'table_pager_first' => 'Primeira página',
'table_pager_last' => 'Última página',
'table_pager_limit' => 'Mostrar $1 items por página',
'table_pager_limit_label' => 'Itens por página:',
'table_pager_limit_submit' => 'Ir',
'table_pager_empty' => 'Sem resultados',

# Auto-summaries
'autosumm-blank' => 'Limpou toda a página',
'autosumm-replace' => "Página substituída por '$1'",
'autoredircomment' => 'Redirecionando para [[$1]]',
'autosumm-new' => "Criou página com '$1'",

# Live preview
'livepreview-loading' => 'Carregando…',
'livepreview-ready' => 'Carregando… Pronto!',
'livepreview-failed' => 'A previsão instantânea falhou!
Tente a previsão comum.',
'livepreview-error' => 'Falha ao conectar: $1 "$2"
Tente a previsão comum.',

# Friendlier slave lag warnings
'lag-warn-normal' => 'É possível que as alterações que sejam mais recentes do que $1 {{PLURAL:$1|segundo|segundos}} não sejam exibidas nesta lista.',
'lag-warn-high' => 'Devido a sérios problemas de latência no servidor do banco de dados, as alterações mais recentes que $1 {{PLURAL:$1|segundo|segundos}} poderão não ser exibidas nesta lista.',

# Watchlist editor
'watchlistedit-numitems' => 'A sua lista de páginas vigiadas possui {{PLURAL:$1|um título|$1 títulos}}, além das respectivas páginas de discussão.',
'watchlistedit-noitems' => 'A sua lista de páginas vigiadas não possui títulos.',
'watchlistedit-normal-title' => 'Editar lista de páginas vigiadas',
'watchlistedit-normal-legend' => 'Remover títulos da lista de páginas vigiadas',
'watchlistedit-normal-explain' => 'Os títulos das páginas de sua lista de vigiadas são exibidos abaixo.
Para remover um título, marque a caixa ao lado do mesmo e clique "{{int:Watchlistedit-normal-submit}}".
Você pode também [[Special:EditWatchlist/raw|editar a lista de páginas vigiadas em forma de texto]].',
'watchlistedit-normal-submit' => 'Remover Títulos',
'watchlistedit-normal-done' => '{{PLURAL:$1|um título foi removido|$1 títulos foram removidos}} de sua lista de páginas vigiadas:',
'watchlistedit-raw-title' => 'Edição crua da lista de páginas vigiadas',
'watchlistedit-raw-legend' => 'Edição crua da lista de páginas vigiadas',
'watchlistedit-raw-explain' => 'A lista de páginas vigiadas é apresentada abaixo. Você pode adicionar novas linhas ou remover linhas para aumentar ou reduzir a lista, desde que mantenha uma única página por linha.
Quando terminar, clique "{{int:Watchlistedit-raw-submit}}".
Você também pode [[Special:EditWatchlist|editar a lista da maneira convencional]].',
'watchlistedit-raw-titles' => 'Títulos:',
'watchlistedit-raw-submit' => 'Atualizar a lista de páginas vigiadas',
'watchlistedit-raw-done' => 'Sua lista de páginas vigiadas foi atualizada.',
'watchlistedit-raw-added' => '{{PLURAL:$1|Foi adicionado um título|Foram adicionados $1 títulos}}:',
'watchlistedit-raw-removed' => '{{PLURAL:$1|Foi removido um título|Foram removidos $1 títulos}}:',

# Watchlist editing tools
'watchlisttools-view' => 'Ver alterações relevantes',
'watchlisttools-edit' => 'Ver e editar a lista de páginas vigiadas',
'watchlisttools-raw' => 'Edição crua da lista de páginas vigiadas',

# Signatures
'signature' => '[[{{ns:user}}:$1|$2]] ([[{{ns:user_talk}}:$1|discussão]])',

# Core parser functions
'unknown_extension_tag' => '"$1" é uma tag de extensão desconhecida',
'duplicate-defaultsort' => 'Aviso: A chave de ordenação padrão "$2" sobrepõe-se à anterior chave de ordenação padrão "$1".',

# Special:Version
'version' => 'Versão',
'version-extensions' => 'Extensões instaladas',
'version-specialpages' => 'Páginas especiais',
'version-parserhooks' => 'Hooks do analisador (parser)',
'version-variables' => 'Variáveis',
'version-antispam' => 'Prevenção contra spam',
'version-skins' => 'Temas',
'version-other' => 'Diversos',
'version-mediahandlers' => 'Executores de média',
'version-hooks' => 'Hooks',
'version-extension-functions' => 'Funções de extensão',
'version-parser-extensiontags' => 'Etiquetas de extensões de tipo "parser"',
'version-parser-function-hooks' => 'Funções "hooks" de "parser"',
'version-hook-name' => 'Nome do hook',
'version-hook-subscribedby' => 'Subscrito por',
'version-version' => '(Versão $1)',
'version-license' => 'Licença',
'version-poweredby-credits' => "Este é um wiki '''[//www.mediawiki.org/ MediaWiki]''', copyright © 2001-$1 $2.",
'version-poweredby-others' => 'outros',
'version-license-info' => 'O MediaWiki é software livre; pode redistribuí-lo e/ou modificá-lo nos termos da licença GNU General Public License, tal como publicada pela Free Software Foundation; tanto a versão 2 da Licença, como (por opção sua) qualquer versão posterior.

O MediaWiki é distribuído na esperança de que seja útil, mas SEM QUALQUER GARANTIA; inclusive, sem a garantia implícita da POSSIBILIDADE DE SER COMERCIALIZADO ou de ADEQUAÇÂO PARA QUALQUER FINALIDADE ESPECÍFICA. Consulte a licença GNU General Public License para mais detalhes.

Em conjunto com este programa deve ter recebido [{{SERVER}}{{SCRIPTPATH}}/COPYING uma cópia da licença GNU General Public License]; se não a recebeu, peça-a por escrito para Free Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA ou [//www.gnu.org/licenses/old-licenses/gpl-2.0.html leia-a na internet].',
'version-software' => 'Software instalado',
'version-software-product' => 'Produto',
'version-software-version' => 'Versão',
'version-entrypoints' => 'URLs dos pontos de entrada',
'version-entrypoints-header-entrypoint' => 'Ponto de entrada',
'version-entrypoints-header-url' => 'URL',

# Special:FilePath
'filepath' => 'Diretório do arquivo',
'filepath-page' => 'arquivo:',
'filepath-submit' => 'Ir',
'filepath-summary' => 'Esta página especial retorna o endereço completo de um arquivo.
As imagens serão exibidas em sua resolução máxima, outros tipos de arquivos serão abertos diretamente pelos programas associados.',

# Special:FileDuplicateSearch
'fileduplicatesearch' => 'Procurar por arquivos duplicados',
'fileduplicatesearch-summary' => 'Procure por arquivos duplicados tendo por base seu valor "hash".',
'fileduplicatesearch-legend' => 'Procurar por duplicatas',
'fileduplicatesearch-filename' => 'Nome do arquivo:',
'fileduplicatesearch-submit' => 'Pesquisa',
'fileduplicatesearch-info' => '$1 × $2 pixels<br />Tamanho: $3<br />tipo MIME: $4',
'fileduplicatesearch-result-1' => 'O arquivo "$1" não possui cópias idênticas.',
'fileduplicatesearch-result-n' => 'O arquivo "$1" possui {{PLURAL:$2|uma cópia idêntica|$2 cópias idênticas}}.',
'fileduplicatesearch-noresults' => 'Não foi encontrado nenhum arquivo com o nome "$1".',

# Special:SpecialPages
'specialpages' => 'Páginas especiais',
'specialpages-note' => '----
* Páginas especiais normais.
* <span class="mw-specialpagerestricted">Páginas especiais restritas.</span>',
'specialpages-group-maintenance' => 'Relatórios de manutenção',
'specialpages-group-other' => 'Outras páginas especiais',
'specialpages-group-login' => 'Entrar / Criar conta',
'specialpages-group-changes' => 'Mudanças e registros recentes',
'specialpages-group-media' => 'Relatórios de mídias e uploads',
'specialpages-group-users' => 'Usuários e privilégios',
'specialpages-group-highuse' => 'Páginas muito usadas',
'specialpages-group-pages' => 'Listas de páginas',
'specialpages-group-pagetools' => 'Ferramentas de páginas',
'specialpages-group-wiki' => 'Dados e ferramentas sobre este wiki',
'specialpages-group-redirects' => 'Páginas especiais redirecionadas',
'specialpages-group-spam' => 'Ferramentas anti-spam',

# Special:BlankPage
'blankpage' => 'Página em branco',
'intentionallyblankpage' => 'Esta página foi intencionalmente deixada em branco e é usada para medições de performance, etc.',

# External image whitelist
'external_image_whitelist' => " # Deixe esta linha exatamente como ela está <pre>
# Insira uma expressão regular (apenas a parte que vai entre o //) a seguir
# Estas serão casadas com as URLs de imagens externas (''hotlinked'')
# Aquelas que corresponderem serão exibidas como imagens; caso contrário, apenas um link para a imagem será mostrado
# As linhas que começam com # são tratadas como comentários
# Isto não é sensível à capitalização

# Coloque todos os fragmentos de ''regex'' acima dessa linha. Deixe esta linha exatamente como ela está</pre>",

# Special:Tags
'tags' => 'Etiquetas de modificação válidas',
'tag-filter' => 'Filtrar [[Special:Tags|etiquetas]]:',
'tag-filter-submit' => 'Filtrar',
'tags-title' => 'Etiquetas',
'tags-intro' => 'Esta página lista as etiquetas com que o software poderá marcar uma edição, e o seu significado.',
'tags-tag' => 'Nome da etiqueta',
'tags-display-header' => 'Aparência nas listas de modificações',
'tags-description-header' => 'Descrição completa do significado',
'tags-hitcount-header' => 'Modificações etiquetadas',
'tags-edit' => 'editar',
'tags-hitcount' => '$1 {{PLURAL:$1|modificação|modificações}}',

# Special:ComparePages
'comparepages' => 'Comparar páginas',
'compare-selector' => 'Comparar edições da página',
'compare-page1' => 'Página 1',
'compare-page2' => 'Página 2',
'compare-rev1' => 'Edição 1',
'compare-rev2' => 'Edição 2',
'compare-submit' => 'Comparar',
'compare-invalid-title' => 'O título que você especificou é inválido.',
'compare-title-not-exists' => 'O título que você especificou não existe.',
'compare-revision-not-exists' => 'A revisão que você especificou não existe.',

# Database error messages
'dberr-header' => 'Este wiki tem um problema',
'dberr-problems' => 'Desculpe! Este sítio está passando por dificuldades técnicas.',
'dberr-again' => 'Experimente esperar alguns minutos e atualizar.',
'dberr-info' => '(Não foi possível contactar o servidor de base de dados: $1)',
'dberr-usegoogle' => 'Você pode tentar pesquisar no Google entretanto.',
'dberr-outofdate' => 'Note que os seus índices relativos ao nosso conteúdo podem estar desatualizados.',
'dberr-cachederror' => 'A seguinte página é uma cópia em cache da página pedida e pode não ser atual.',

# HTML forms
'htmlform-invalid-input' => 'Existem problemas com alguns dos dados introduzidos',
'htmlform-select-badoption' => 'O valor que você especificou não é uma opção válida.',
'htmlform-int-invalid' => 'O valor que você especificou não é um número inteiro.',
'htmlform-float-invalid' => 'O valor que você especificou não é um número.',
'htmlform-int-toolow' => 'O valor que você especificou está abaixo do mínimo de $1',
'htmlform-int-toohigh' => 'O valor que você especificou está acima do máximo de $1',
'htmlform-required' => 'Este valor é necessário',
'htmlform-submit' => 'Enviar',
'htmlform-reset' => 'Desfazer alterações',
'htmlform-selectorother-other' => 'Outros',

# SQLite database support
'sqlite-has-fts' => '$1 com suporte de pesquisa de texto completo',
'sqlite-no-fts' => '$1 sem suporte de pesquisa de texto completo',

# New logging system
'logentry-delete-delete' => '$1 apagou a página $3',
'logentry-delete-restore' => '$1 restaurou a página $3',
'logentry-delete-event' => '$1 alterou a visibilidade {{PLURAL:$5|de uma entrada|de $5 entradas}} do registro $3: $4',
'logentry-delete-revision' => '$1 alterou a visibilidade {{PLURAL:$5|de uma revisão|das $5 revisões}} em $3: $4',
'logentry-delete-event-legacy' => '$1 alterou a visibilidade de uma entrada em $3',
'logentry-delete-revision-legacy' => '$1 alterou a visibilidade de uma revisão em $3',
'logentry-suppress-delete' => '$1 suprimiu a página $3',
'logentry-suppress-event' => '$1 alterou secretamente a visibilidade {{PLURAL:$5|de uma entrada|das $5 entradas}} em $3: $4',
'logentry-suppress-revision' => '$1 alterou secretamente a visibilidade {{PLURAL:$5|de uma revisão|das $5 revisões}} em $3: $4',
'logentry-suppress-event-legacy' => '$1 alterou secretamente a visibilidade das entradas em $3',
'logentry-suppress-revision-legacy' => '$1 alterou secretamente a visibilidade das revisões em $3',
'revdelete-content-hid' => 'conteúdo oculto',
'revdelete-summary-hid' => 'sumário de edição oculto',
'revdelete-uname-hid' => 'nome de usuário oculto',
'revdelete-content-unhid' => 'conteúdo não oculto',
'revdelete-summary-unhid' => 'sumário de edição não oculto',
'revdelete-uname-unhid' => 'nome de usuário não oculto',
'revdelete-restricted' => 'restrições a administradores aplicadas',
'revdelete-unrestricted' => 'restrições a administradores removidas',
'logentry-move-move' => '$1 moveu página $3 para $4',
'logentry-move-move-noredirect' => '$1 moveu página $3 para $4 sem deixar um redirecionamento',
'logentry-move-move_redir' => '$1 moveu a página $3 para $4 através de um redirecionamento',
'logentry-move-move_redir-noredirect' => '$1 moveu a página $3 para $4 sem um redirecionamento',
'logentry-patrol-patrol' => '$1 marcou a revisão $4 da página $3 como patrulhada',
'logentry-patrol-patrol-auto' => '$1 marcou automaticamente a revisão $4 da página $3 como patrulhada',
'logentry-newusers-newusers' => '$1 criou uma conta de usuário',
'logentry-newusers-create' => '$1 criou uma conta de usuário',
'logentry-newusers-create2' => '$1 criou uma conta de usuário $3',
'logentry-newusers-autocreate' => 'A conta $1 foi criada automaticamente',
'newuserlog-byemail' => 'senha enviada por correio-eletrônico',

# Feedback
'feedback-bugornote' => 'Se você está preparado para descrever detalhadamente um problema técnico, [$1 relate um bug].
Caso contrário, você poderá usar o formulário simplificado a seguir. Seu comentário será adicionado à página "[$3 $2]", junto com o seu nome de usuário e o navegador que estiver usando neste momento.',
'feedback-subject' => 'Assunto:',
'feedback-message' => 'Mensagem:',
'feedback-cancel' => 'Cancelar',
'feedback-submit' => 'Enviar Comentários',
'feedback-adding' => 'Adicionando os comentários na página...',
'feedback-error1' => 'Erro: O resultado da API não foi reconhecido',
'feedback-error2' => 'Erro: A edição falhou',
'feedback-error3' => 'Erro: A API não responde',
'feedback-thanks' => 'Obrigado! O seu comentário foi adicionado à página "[ $2  $1 ]".',
'feedback-close' => 'Feito',
'feedback-bugcheck' => 'Perfeito! Apenas verifique se não é um dos [$1 bugs já conhecidos].',
'feedback-bugnew' => 'Eu verifiquei. Relatar um bug novo',

# Search suggestions
'searchsuggest-search' => 'Pesquisa',
'searchsuggest-containing' => 'contendo...',

# API errors
'api-error-badaccess-groups' => 'Você não tem permissão para enviar arquivos para este wiki.',
'api-error-badtoken' => 'Erro interno: token inválido.',
'api-error-copyuploaddisabled' => 'O upload por URL está desativado neste servidor.',
'api-error-duplicate' => 'Já {{PLURAL:$1|há [$2 outro arquivo]|existem [$2 outros arquivos]}} com o mesmo conteúdo',
'api-error-duplicate-archive' => 'Já {{PLURAL:$1|existiu [$2 outro arquivo]|existiram [$2 outros arquivos]}} neste site com o mesmo conteúdo que, no entanto, {{PLURAL:$1|foi removido|foram removidos}}.',
'api-error-duplicate-archive-popup-title' => 'Duplicata de {{PLURAL:$1|arquivo|arquivos}} que já {{PLURAL:$1|foi apagado|foram apagados}}',
'api-error-duplicate-popup-title' => '{{PLURAL:$1|Arquivo|Arquivos}} em duplicata',
'api-error-empty-file' => 'O arquivo que você enviou está vazio.',
'api-error-emptypage' => 'Não é permitido criar páginas novas vazias.',
'api-error-fetchfileerror' => 'Erro interno: ocorreu um problema indeterminado ao acessar o arquivo.',
'api-error-fileexists-forbidden' => 'Já existe um arquivo com o nome "$1". Não é possível substituí-lo.',
'api-error-fileexists-shared-forbidden' => 'Já existe, no repositório de arquivos partilhados, um arquivo com o nome "$1". Não é possível substituí-lo.',
'api-error-file-too-large' => 'O arquivo que você enviou é muito grande.',
'api-error-filename-tooshort' => 'O nome do arquivo é curto demais.',
'api-error-filetype-banned' => 'Este tipo do arquivo é proibido.',
'api-error-filetype-banned-type' => '$1 {{PLURAL:$4|não é um tipo de arquivo permitido|não são tipos de arquivos permitidos}}. {{PLURAL:$3|O tipo de arquivo permitido é|Os tipos de arquivos permitidos são}} $2.',
'api-error-filetype-missing' => 'Falta a extensão de arquivo.',
'api-error-hookaborted' => 'A modificação que você tentou realizar foi abortada pelo hook de uma extensão.',
'api-error-http' => 'Erro interno: não foi possível conectar ao servidor.',
'api-error-illegal-filename' => 'O nome do arquivo não é permitido.',
'api-error-internal-error' => 'Erro interno: ocorreu algum erro ao processar o arquivo que você enviou ao wiki.',
'api-error-invalid-file-key' => 'Erro interno: o arquivo não foi encontrado no armazenamento temporário.',
'api-error-missingparam' => 'Erro interno: parâmetros em falta no pedido.',
'api-error-missingresult' => 'Erro interno: não foi possível determinar se a cópia foi feita.',
'api-error-mustbeloggedin' => 'Você precisa estar autenticado para enviar arquivos.',
'api-error-mustbeposted' => 'Erro interno: a solicitação requer HTTP POST',
'api-error-noimageinfo' => 'O upload foi concluído, mas o servidor não retornou informações sobre o arquivo.',
'api-error-nomodule' => 'Erro interno: o módulo de upload não está configurado.',
'api-error-ok-but-empty' => 'Erro interno: não há resposta do servidor.',
'api-error-overwrite' => 'Não é permitido sobrescrever um arquivo já existente.',
'api-error-stashfailed' => 'Erro interno: o servidor não conseguiu armazenar o arquivo temporário.',
'api-error-timeout' => 'O servidor não respondeu dentro do tempo esperado.',
'api-error-unclassified' => 'Ocorreu um erro desconhecido',
'api-error-unknown-code' => 'Erro desconhecido: "$1"',
'api-error-unknown-error' => 'Erro interno: ocorreu um erro indeterminado ao tentar enviar o arquivo.',
'api-error-unknown-warning' => 'Aviso desconhecido: $1',
'api-error-unknownerror' => 'Erro desconhecido: "$1".',
'api-error-uploaddisabled' => 'Este wiki está com o upload de arquivos desabilitado.',
'api-error-verification-error' => 'Este arquivo pode estar corrompido ou ter a extensão errada.',

# Durations
'duration-seconds' => '$1 {{PLURAL:$1|segundo|segundos}}',
'duration-minutes' => '$1 {{PLURAL:$1|minuto|minutos}}',
'duration-hours' => '$1 {{PLURAL:$1|hora|horas}}',
'duration-days' => '$1 {{PLURAL:$1|dia|dias}}',
'duration-weeks' => '$1 {{PLURAL:$1|semana|semanas}}',
'duration-years' => '$1 {{PLURAL:$1|ano|anos}}',
'duration-decades' => '$1 {{PLURAL:$1|década|décadas}}',
'duration-centuries' => '$1 {{PLURAL:$1|século|séculos}}',
'duration-millennia' => '$1 {{PLURAL:$1|milênio|milênios}}',

);
