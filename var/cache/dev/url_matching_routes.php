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
        '/blog' => [[['_route' => 'app_blog', '_controller' => 'App\\Controller\\BlogController::index'], null, null, null, false, false, null]],
        '/commentaire/admin' => [[['_route' => 'app_commentaire_index', '_controller' => 'App\\Controller\\CommentaireController::index'], null, ['GET' => 0], null, false, false, null]],
        '/commentaire/admin/new' => [[['_route' => 'app_commentaire_new', '_controller' => 'App\\Controller\\CommentaireController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/media' => [[['_route' => 'app_media_index', '_controller' => 'App\\Controller\\MediaController::index'], null, ['GET' => 0], null, true, false, null]],
        '/media/new' => [[['_route' => 'app_media_new', '_controller' => 'App\\Controller\\MediaController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/post' => [[['_route' => 'app_post_index', '_controller' => 'App\\Controller\\PostController::index'], null, ['GET' => 0], null, true, false, null]],
        '/post/admin' => [[['_route' => 'app_post_index_admin', '_controller' => 'App\\Controller\\PostController::index_admin'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/post/admin/new' => [[['_route' => 'app_post_new', '_controller' => 'App\\Controller\\PostController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/post/addPostJson/new' => [[['_route' => 'addPostJson', '_controller' => 'App\\Controller\\PostController::addPostJson'], null, null, null, false, false, null]],
        '/search' => [[['_route' => 'search', '_controller' => 'App\\Controller\\SearchController::search'], null, null, null, false, false, null]],
        '/signup' => [[['_route' => 'app_signup', '_controller' => 'App\\Controller\\SignupController::index'], null, null, null, false, false, null]],
        '/signup/addUser' => [[['_route' => 'app_signup_addUser', '_controller' => 'App\\Controller\\SignupController::addUser'], null, null, null, false, false, null]],
        '/topic/admin' => [[['_route' => 'app_topic_index', '_controller' => 'App\\Controller\\TopicController::index'], null, ['GET' => 0], null, false, false, null]],
        '/topic/admin/new' => [[['_route' => 'app_topic_new', '_controller' => 'App\\Controller\\TopicController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/wehealth' => [[['_route' => 'app_wehealth', '_controller' => 'App\\Controller\\WehealthController::index'], null, null, null, false, false, null]],
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
                .'|/commentaire/(?'
                    .'|([^/]++)(*:193)'
                    .'|admin/([^/]++)/(?'
                        .'|edit(*:223)'
                        .'|delete(*:237)'
                    .')'
                .')'
                .'|/media/([^/]++)(?'
                    .'|(*:265)'
                    .'|/edit(*:278)'
                    .'|(*:286)'
                .')'
                .'|/post/(?'
                    .'|admin/([^/]++)/(?'
                        .'|edit(*:326)'
                        .'|d(?'
                            .'|elete(*:343)'
                            .'|islike(*:357)'
                        .')'
                        .'|like(*:370)'
                    .')'
                    .'|([^/]++)(*:387)'
                    .'|AllPostJson(*:406)'
                    .'|updatePostJson/([^/]++)(*:437)'
                    .'|deletePostJson/([^/]++)(*:468)'
                .')'
                .'|/topic/(?'
                    .'|admin/([^/]++)/(?'
                        .'|edit(*:509)'
                        .'|delete(*:523)'
                    .')'
                    .'|([^/]++)(*:540)'
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
        193 => [[['_route' => 'app_commentaire_show', '_controller' => 'App\\Controller\\CommentaireController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        223 => [[['_route' => 'app_commentaire_edit', '_controller' => 'App\\Controller\\CommentaireController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        237 => [[['_route' => 'app_commentaire_delete', '_controller' => 'App\\Controller\\CommentaireController::delete'], ['id'], ['GET' => 0, 'DELETE' => 1], null, false, false, null]],
        265 => [[['_route' => 'app_media_show', '_controller' => 'App\\Controller\\MediaController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        278 => [[['_route' => 'app_media_edit', '_controller' => 'App\\Controller\\MediaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        286 => [[['_route' => 'app_media_delete', '_controller' => 'App\\Controller\\MediaController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        326 => [[['_route' => 'app_post_edit_admin', '_controller' => 'App\\Controller\\PostController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        343 => [[['_route' => 'app_post_delete', '_controller' => 'App\\Controller\\PostController::delete'], ['id'], ['GET' => 0, 'DELETE' => 1], null, false, false, null]],
        357 => [[['_route' => 'app_post_dislike', '_controller' => 'App\\Controller\\PostController::dislike'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        370 => [[['_route' => 'app_post_like', '_controller' => 'App\\Controller\\PostController::like'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        387 => [[['_route' => 'app_post_show', '_controller' => 'App\\Controller\\PostController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        406 => [[['_route' => 'listPosts', '_controller' => 'App\\Controller\\PostController::getPosts'], [], ['GET' => 0], null, false, false, null]],
        437 => [[['_route' => 'updatePostJson', '_controller' => 'App\\Controller\\PostController::updatePostJson'], ['id'], null, null, false, true, null]],
        468 => [[['_route' => 'deletePostJson', '_controller' => 'App\\Controller\\PostController::deletePostJson'], ['id'], null, null, false, true, null]],
        509 => [[['_route' => 'app_topic_edit', '_controller' => 'App\\Controller\\TopicController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        523 => [[['_route' => 'app_topic_delete', '_controller' => 'App\\Controller\\TopicController::delete'], ['id'], ['GET' => 0, 'DELETE' => 1], null, false, false, null]],
        540 => [
            [['_route' => 'app_topic_show', '_controller' => 'App\\Controller\\TopicController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
