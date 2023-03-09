<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin/admin' => [[['_route' => 'appadmin', '_controller' => 'App\\Controller\\AdminController::indexx'], null, null, null, false, false, null]],
        '/admin/calendar' => [[['_route' => 'app_admin', '_controller' => 'App\\Controller\\AdminController::index1'], null, null, null, false, false, null]],
        '/adminy' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/login' => [
            [['_route' => 'app_login', '_controller' => 'App\\Controller\\AppsecurityController::login'], null, null, null, false, false, null],
            [['_route' => 'app_security_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null],
        ],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\AppsecurityController::logout'], null, null, null, false, false, null]],
        '/article' => [[['_route' => 'app_article_index', '_controller' => 'App\\Controller\\ArticleController::index'], null, ['GET' => 0], null, true, false, null]],
        '/article/json/getAll' => [[['_route' => 'app_article_index_json', '_controller' => 'App\\Controller\\ArticleController::index_JSON'], null, ['GET' => 0], null, false, false, null]],
        '/article/json/new' => [[['_route' => 'create_article', '_controller' => 'App\\Controller\\ArticleController::createArticleAction'], null, ['GET' => 0], null, false, false, null]],
        '/article/json/edit' => [[['_route' => 'create_article_edit', '_controller' => 'App\\Controller\\ArticleController::editArticleAction'], null, ['GET' => 0], null, false, false, null]],
        '/article/new' => [[['_route' => 'app_article_new', '_controller' => 'App\\Controller\\ArticleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/article/json/delete' => [[['_route' => 'app_article_delete_JSON', '_controller' => 'App\\Controller\\ArticleController::delete_JSON'], null, ['GET' => 0], null, false, false, null]],
        '/blog' => [[['_route' => 'app_blog', '_controller' => 'App\\Controller\\BlogController::index'], null, null, null, false, false, null]],
        '/categorie' => [[['_route' => 'app_categorie_index', '_controller' => 'App\\Controller\\CategorieController::index'], null, ['GET' => 0], null, true, false, null]],
        '/categorie/new' => [[['_route' => 'app_categorie_new', '_controller' => 'App\\Controller\\CategorieController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/categorie/json/getAll' => [[['_route' => 'app_categorie_index_json', '_controller' => 'App\\Controller\\CategorieController::index_JSON'], null, ['GET' => 0], null, false, false, null]],
        '/coach' => [[['_route' => 'app_coach_index', '_controller' => 'App\\Controller\\CoachController::index'], null, ['GET' => 0], null, true, false, null]],
        '/coach/coach/new' => [[['_route' => 'app_coach_new', '_controller' => 'App\\Controller\\CoachController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/comment' => [[['_route' => 'app_comment_index', '_controller' => 'App\\Controller\\CommentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/comment/new' => [[['_route' => 'app_comment_new', '_controller' => 'App\\Controller\\CommentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/evennement' => [[['_route' => 'app_evennement_index', '_controller' => 'App\\Controller\\EvennementController::index'], null, ['GET' => 0], null, true, false, null]],
        '/evennement/new' => [[['_route' => 'app_evennement_new', '_controller' => 'App\\Controller\\EvennementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/evennementfront' => [[['_route' => 'app_evennementfront_index', '_controller' => 'App\\Controller\\EvennementfrontController::index'], null, ['GET' => 0], null, true, false, null]],
        '/evennementfront/myevents' => [[['_route' => 'app_myevennement_index', '_controller' => 'App\\Controller\\EvennementfrontController::myevents'], null, ['GET' => 0], null, false, false, null]],
        '/evennementfront/search' => [[['_route' => 'event_search', '_controller' => 'App\\Controller\\EvennementfrontController::search'], null, null, null, false, false, null]],
        '/evennementfront/sortByDescDate' => [[['_route' => 'sort_by_desc_date', '_controller' => 'App\\Controller\\EvennementfrontController::sortDescDate'], null, null, null, false, false, null]],
        '/evennementfront/sortByAscDate' => [[['_route' => 'sort_by_asc_date', '_controller' => 'App\\Controller\\EvennementfrontController::sortAscDate'], null, null, null, false, false, null]],
        '/facture' => [[['_route' => 'app_facture_index', '_controller' => 'App\\Controller\\FactureController::index'], null, ['GET' => 0], null, true, false, null]],
        '/facture/new' => [[['_route' => 'app_facture_new', '_controller' => 'App\\Controller\\FactureController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/num/media' => [[['_route' => 'app_num_media_index', '_controller' => 'App\\Controller\\NumMediaController::index'], null, ['GET' => 0], null, true, false, null]],
        '/num/media/new' => [[['_route' => 'app_num_media_new', '_controller' => 'App\\Controller\\NumMediaController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/patient' => [[['_route' => 'app_patient_index', '_controller' => 'App\\Controller\\PatientController::index'], null, ['GET' => 0], null, true, false, null]],
        '/patient/patient/new' => [[['_route' => 'app_patient_new', '_controller' => 'App\\Controller\\PatientController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/post' => [[['_route' => 'app_post_index', '_controller' => 'App\\Controller\\PostController::index'], null, ['GET' => 0], null, true, false, null]],
        '/post/new' => [[['_route' => 'app_post_new', '_controller' => 'App\\Controller\\PostController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/professionnel/sante' => [[['_route' => 'app_professionnel_sante_index', '_controller' => 'App\\Controller\\ProfessionnelSanteController::index'], null, ['GET' => 0], null, true, false, null]],
        '/professionnel/sante/new' => [[['_route' => 'app_professionnel_sante_new', '_controller' => 'App\\Controller\\ProfessionnelSanteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/registration' => [[['_route' => 'registration', '_controller' => 'App\\Controller\\RegistrationController::index'], null, null, null, false, false, null]],
        '/security' => [[['_route' => 'app_security', '_controller' => 'App\\Controller\\SecurityController::index'], null, null, null, false, false, null]],
        '/signup' => [[['_route' => 'app_signup', '_controller' => 'App\\Controller\\SignupController::index'], null, null, null, false, false, null]],
        '/signup/addUser' => [[['_route' => 'app_signup_addUser', '_controller' => 'App\\Controller\\SignupController::addUser'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/video' => [[['_route' => 'app_video_index', '_controller' => 'App\\Controller\\VideoController::index'], null, ['GET' => 0], null, true, false, null]],
        '/video/new' => [[['_route' => 'app_video_new', '_controller' => 'App\\Controller\\VideoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_wehealth', '_controller' => 'App\\Controller\\WehealthController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/a(?'
                    .'|dmin/(?'
                        .'|user/([^/]++)/block(*:201)'
                        .'|api/([^/]++)/edit(*:226)'
                    .')'
                    .'|rticle/(?'
                        .'|view_content/([^/]++)(*:266)'
                        .'|article/([^/]++)(*:290)'
                        .'|([^/]++)(?'
                            .'|(*:309)'
                            .'|/edit(*:322)'
                            .'|(*:330)'
                        .')'
                        .'|ArticlePdf/([^/]++)(*:358)'
                        .'|likeArticle/([^/]++)(*:386)'
                        .'|dislikeArticle/([^/]++)(*:417)'
                    .')'
                .')'
                .'|/c(?'
                    .'|ategorie/(?'
                        .'|([^/]++)(?'
                            .'|(*:455)'
                            .'|/edit(*:468)'
                        .')'
                        .'|categorie/([^/]++)(*:495)'
                        .'|([^/]++)(*:511)'
                    .')'
                    .'|o(?'
                        .'|ach/coach/(?'
                            .'|([^/]++)(?'
                                .'|(*:548)'
                                .'|/edit(*:561)'
                            .')'
                            .'|delete/([^/]++)(*:585)'
                        .')'
                        .'|mment/([^/]++)(?'
                            .'|(*:611)'
                            .'|/edit(*:624)'
                            .'|(*:632)'
                        .')'
                    .')'
                .')'
                .'|/evennement(?'
                    .'|/([^/]++)(?'
                        .'|(*:669)'
                        .'|/edit(*:682)'
                        .'|(*:690)'
                    .')'
                    .'|front/(?'
                        .'|participer/([^/]++)(*:727)'
                        .'|([^/]++)/showevent(*:753)'
                    .')'
                .')'
                .'|/facture/(?'
                    .'|([^/]++)(?'
                        .'|(*:786)'
                        .'|/edit(*:799)'
                        .'|(*:807)'
                    .')'
                    .'|p(?'
                        .'|ayer/([^/]++)(*:833)'
                        .'|rintfacture/(\\d+)(*:858)'
                    .')'
                .')'
                .'|/num/media/([^/]++)(?'
                    .'|(*:890)'
                    .'|/edit(*:903)'
                    .'|(*:911)'
                .')'
                .'|/p(?'
                    .'|atient/patient/(?'
                        .'|([^/]++)(?'
                            .'|(*:954)'
                            .'|/edit(*:967)'
                        .')'
                        .'|delete/([^/]++)(*:991)'
                    .')'
                    .'|ost/([^/]++)(?'
                        .'|(*:1015)'
                        .'|/edit(*:1029)'
                        .'|(*:1038)'
                    .')'
                    .'|rofessionnel/sante/([^/]++)(?'
                        .'|(*:1078)'
                        .'|/edit(*:1092)'
                        .'|(*:1101)'
                    .')'
                .')'
                .'|/user/(?'
                    .'|show/([^/]++)(*:1134)'
                    .'|([^/]++)/edit(*:1156)'
                    .'|delete/([^/]++)(*:1180)'
                    .'|blockUser/([^/]++)(*:1207)'
                    .'|u(?'
                        .'|nblockUser/([^/]++)(*:1239)'
                        .'|sers/([^/]++)/unblock(*:1269)'
                    .')'
                .')'
                .'|/video/([^/]++)(?'
                    .'|(*:1298)'
                    .'|/edit(*:1312)'
                    .'|(*:1321)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        201 => [[['_route' => 'admin_block_user', '_controller' => 'App\\Controller\\AdminController::blockUser'], ['id'], null, null, false, false, null]],
        226 => [[['_route' => 'api_event_edit', '_controller' => 'App\\Controller\\AdminController::majEvent'], ['id'], ['PUT' => 0], null, false, false, null]],
        266 => [[['_route' => 'view_article_content', '_controller' => 'App\\Controller\\ArticleController::view_article_content'], ['id'], null, null, false, true, null]],
        290 => [[['_route' => 'article_show', '_controller' => 'App\\Controller\\ArticleController::showf'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        309 => [[['_route' => 'app_article_show', '_controller' => 'App\\Controller\\ArticleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        322 => [[['_route' => 'app_article_edit', '_controller' => 'App\\Controller\\ArticleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        330 => [[['_route' => 'app_article_delete', '_controller' => 'App\\Controller\\ArticleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        358 => [[['_route' => 'app_PdfArticle', '_controller' => 'App\\Controller\\ArticleController::impressionPDF'], ['id'], ['POST' => 0, 'GET' => 1], null, false, true, null]],
        386 => [[['_route' => 'article_like', '_controller' => 'App\\Controller\\ArticleController::likeArticle'], ['id'], null, null, false, true, null]],
        417 => [[['_route' => 'article_dislike', '_controller' => 'App\\Controller\\ArticleController::dislikeArticle'], ['id'], null, null, false, true, null]],
        455 => [[['_route' => 'app_categorie_show', '_controller' => 'App\\Controller\\CategorieController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        468 => [[['_route' => 'app_categorie_edit', '_controller' => 'App\\Controller\\CategorieController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        495 => [[['_route' => 'categorie_show', '_controller' => 'App\\Controller\\CategorieController::showf'], ['id'], null, null, false, true, null]],
        511 => [[['_route' => 'app_categorie_delete', '_controller' => 'App\\Controller\\CategorieController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        548 => [[['_route' => 'app_coach_show', '_controller' => 'App\\Controller\\CoachController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        561 => [[['_route' => 'app_coach_edit', '_controller' => 'App\\Controller\\CoachController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        585 => [[['_route' => 'app_coach_delete', '_controller' => 'App\\Controller\\CoachController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        611 => [[['_route' => 'app_comment_show', '_controller' => 'App\\Controller\\CommentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        624 => [[['_route' => 'app_comment_edit', '_controller' => 'App\\Controller\\CommentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        632 => [[['_route' => 'app_comment_delete', '_controller' => 'App\\Controller\\CommentController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        669 => [[['_route' => 'app_evennement_show', '_controller' => 'App\\Controller\\EvennementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        682 => [[['_route' => 'app_evennement_edit', '_controller' => 'App\\Controller\\EvennementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        690 => [[['_route' => 'app_evennement_delete', '_controller' => 'App\\Controller\\EvennementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        727 => [[['_route' => 'app_evennement_front_participer', '_controller' => 'App\\Controller\\EvennementfrontController::participer'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        753 => [[['_route' => 'app_evennement_showevent', '_controller' => 'App\\Controller\\EvennementfrontController::showEventDetails'], ['id'], ['GET' => 0], null, false, false, null]],
        786 => [[['_route' => 'app_facture_show', '_controller' => 'App\\Controller\\FactureController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        799 => [[['_route' => 'app_facture_edit', '_controller' => 'App\\Controller\\FactureController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        807 => [[['_route' => 'app_facture_delete', '_controller' => 'App\\Controller\\FactureController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        833 => [[['_route' => 'add_facture', '_controller' => 'App\\Controller\\FactureController::addFacture'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        858 => [[['_route' => 'print_facture', '_controller' => 'App\\Controller\\FactureController::exportFacturePDF'], ['id'], null, null, false, true, null]],
        890 => [[['_route' => 'app_num_media_show', '_controller' => 'App\\Controller\\NumMediaController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        903 => [[['_route' => 'app_num_media_edit', '_controller' => 'App\\Controller\\NumMediaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        911 => [[['_route' => 'app_num_media_delete', '_controller' => 'App\\Controller\\NumMediaController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        954 => [[['_route' => 'app_patient_show', '_controller' => 'App\\Controller\\PatientController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        967 => [[['_route' => 'app_patient_edit', '_controller' => 'App\\Controller\\PatientController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        991 => [[['_route' => 'app_patient_delete', '_controller' => 'App\\Controller\\PatientController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1015 => [[['_route' => 'app_post_show', '_controller' => 'App\\Controller\\PostController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1029 => [[['_route' => 'app_post_edit', '_controller' => 'App\\Controller\\PostController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1038 => [[['_route' => 'app_post_delete', '_controller' => 'App\\Controller\\PostController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1078 => [[['_route' => 'app_professionnel_sante_show', '_controller' => 'App\\Controller\\ProfessionnelSanteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1092 => [[['_route' => 'app_professionnel_sante_edit', '_controller' => 'App\\Controller\\ProfessionnelSanteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1101 => [[['_route' => 'app_professionnel_sante_delete', '_controller' => 'App\\Controller\\ProfessionnelSanteController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1134 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1156 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1180 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1207 => [[['_route' => 'app_user_blockUser', '_controller' => 'App\\Controller\\UserController::blockUser'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1239 => [[['_route' => 'app_user_unblockUser', '_controller' => 'App\\Controller\\UserController::unblockUser'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1269 => [[['_route' => 'admin_unblock_user', '_controller' => 'App\\Controller\\UserController::unblockUser'], ['id'], null, null, false, false, null]],
        1298 => [[['_route' => 'app_video_show', '_controller' => 'App\\Controller\\VideoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1312 => [[['_route' => 'app_video_edit', '_controller' => 'App\\Controller\\VideoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1321 => [
            [['_route' => 'app_video_delete', '_controller' => 'App\\Controller\\VideoController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
