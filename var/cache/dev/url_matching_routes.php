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
        '/admin' => [[['_route' => 'appadmin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/calendar' => [[['_route' => 'app_admin', '_controller' => 'App\\Controller\\AdminController::index1'], null, null, null, false, false, null]],
        '/blog' => [[['_route' => 'app_blog', '_controller' => 'App\\Controller\\BlogController::index'], null, null, null, false, false, null]],
        '/evennement' => [[['_route' => 'app_evennement_index', '_controller' => 'App\\Controller\\EvennementController::index'], null, ['GET' => 0], null, true, false, null]],
        '/evennement/new' => [[['_route' => 'app_evennement_new', '_controller' => 'App\\Controller\\EvennementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/evennementfront' => [[['_route' => 'app_evennementfront_index', '_controller' => 'App\\Controller\\EvennementfrontController::index'], null, ['GET' => 0], null, true, false, null]],
        '/evennementfront/myevents' => [[['_route' => 'app_myevennement_index', '_controller' => 'App\\Controller\\EvennementfrontController::myevents'], null, ['GET' => 0], null, false, false, null]],
        '/evennementfront/search' => [[['_route' => 'event_search', '_controller' => 'App\\Controller\\EvennementfrontController::search'], null, null, null, false, false, null]],
        '/evennementfront/sortByDescDate' => [[['_route' => 'sort_by_desc_date', '_controller' => 'App\\Controller\\EvennementfrontController::sortDescDate'], null, null, null, false, false, null]],
        '/evennementfront/sortByAscDate' => [[['_route' => 'sort_by_asc_date', '_controller' => 'App\\Controller\\EvennementfrontController::sortAscDate'], null, null, null, false, false, null]],
        '/facture' => [[['_route' => 'app_facture_index', '_controller' => 'App\\Controller\\FactureController::index'], null, ['GET' => 0], null, true, false, null]],
        '/facture/new' => [[['_route' => 'app_facture_new', '_controller' => 'App\\Controller\\FactureController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/signup' => [[['_route' => 'app_signup', '_controller' => 'App\\Controller\\SignupController::index'], null, null, null, false, false, null]],
        '/signup/addUser' => [[['_route' => 'app_signup_addUser', '_controller' => 'App\\Controller\\SignupController::addUser'], null, null, null, false, false, null]],
        '/video' => [[['_route' => 'app_video_index', '_controller' => 'App\\Controller\\VideoController::index'], null, ['GET' => 0], null, true, false, null]],
        '/video/new' => [[['_route' => 'app_video_new', '_controller' => 'App\\Controller\\VideoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/api/([^/]++)/edit(*:187)'
                .'|/evennement(?'
                    .'|/([^/]++)(?'
                        .'|(*:221)'
                        .'|/edit(*:234)'
                        .'|(*:242)'
                    .')'
                    .'|front/(?'
                        .'|participer/([^/]++)(*:279)'
                        .'|([^/]++)/showevent(*:305)'
                    .')'
                .')'
                .'|/facture/(?'
                    .'|([^/]++)(?'
                        .'|(*:338)'
                        .'|/edit(*:351)'
                        .'|(*:359)'
                    .')'
                    .'|p(?'
                        .'|ayer/([^/]++)(*:385)'
                        .'|rintfacture/(\\d+)(*:410)'
                    .')'
                .')'
                .'|/video/([^/]++)(?'
                    .'|(*:438)'
                    .'|/edit(*:451)'
                    .'|(*:459)'
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
        187 => [[['_route' => 'api_event_edit', '_controller' => 'App\\Controller\\AdminController::majEvent'], ['id'], ['PUT' => 0], null, false, false, null]],
        221 => [[['_route' => 'app_evennement_show', '_controller' => 'App\\Controller\\EvennementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        234 => [[['_route' => 'app_evennement_edit', '_controller' => 'App\\Controller\\EvennementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        242 => [[['_route' => 'app_evennement_delete', '_controller' => 'App\\Controller\\EvennementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        279 => [[['_route' => 'app_evennement_front_participer', '_controller' => 'App\\Controller\\EvennementfrontController::participer'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        305 => [[['_route' => 'app_evennement_showevent', '_controller' => 'App\\Controller\\EvennementfrontController::showEventDetails'], ['id'], ['GET' => 0], null, false, false, null]],
        338 => [[['_route' => 'app_facture_show', '_controller' => 'App\\Controller\\FactureController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        351 => [[['_route' => 'app_facture_edit', '_controller' => 'App\\Controller\\FactureController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        359 => [[['_route' => 'app_facture_delete', '_controller' => 'App\\Controller\\FactureController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        385 => [[['_route' => 'add_facture', '_controller' => 'App\\Controller\\FactureController::addFacture'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        410 => [[['_route' => 'print_facture', '_controller' => 'App\\Controller\\FactureController::exportFacturePDF'], ['id'], null, null, false, true, null]],
        438 => [[['_route' => 'app_video_show', '_controller' => 'App\\Controller\\VideoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        451 => [[['_route' => 'app_video_edit', '_controller' => 'App\\Controller\\VideoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        459 => [
            [['_route' => 'app_video_delete', '_controller' => 'App\\Controller\\VideoController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
