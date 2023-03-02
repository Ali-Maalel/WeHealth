<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/fc-load-events' => [[['_route' => 'fc_load_events', '_controller' => 'CalendarBundle\\Controller\\CalendarController::loadAction'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/dashboards' => [[['_route' => 'app_admin', '_controller' => 'App\\Controller\\AdminController::index1'], null, null, null, false, false, null]],
        '/blog' => [[['_route' => 'app_blog', '_controller' => 'App\\Controller\\BlogController::index'], null, null, null, false, false, null]],
        '/evennement' => [[['_route' => 'app_evennement_index', '_controller' => 'App\\Controller\\EvennementController::index'], null, ['GET' => 0], null, true, false, null]],
        '/evennement/new' => [[['_route' => 'app_evennement_new', '_controller' => 'App\\Controller\\EvennementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/evennementfront' => [[['_route' => 'app_evennementfront_index', '_controller' => 'App\\Controller\\EvennementfrontController::index'], null, ['GET' => 0], null, true, false, null]],
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
                .'|/evennement/([^/]++)(?'
                    .'|(*:192)'
                    .'|/edit(*:205)'
                    .'|(*:213)'
                .')'
                .'|/video/([^/]++)(?'
                    .'|(*:240)'
                    .'|/edit(*:253)'
                    .'|(*:261)'
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
        192 => [[['_route' => 'app_evennement_show', '_controller' => 'App\\Controller\\EvennementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        205 => [[['_route' => 'app_evennement_edit', '_controller' => 'App\\Controller\\EvennementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        213 => [[['_route' => 'app_evennement_delete', '_controller' => 'App\\Controller\\EvennementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        240 => [[['_route' => 'app_video_show', '_controller' => 'App\\Controller\\VideoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        253 => [[['_route' => 'app_video_edit', '_controller' => 'App\\Controller\\VideoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        261 => [
            [['_route' => 'app_video_delete', '_controller' => 'App\\Controller\\VideoController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
