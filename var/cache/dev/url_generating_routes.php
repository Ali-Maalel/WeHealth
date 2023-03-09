<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'appadmin' => [[], ['_controller' => 'App\\Controller\\AdminController::index'], [], [['text', '/admin']], [], [], []],
    'app_admin' => [[], ['_controller' => 'App\\Controller\\AdminController::index1'], [], [['text', '/calendar']], [], [], []],
    'api_event_edit' => [['id'], ['_controller' => 'App\\Controller\\AdminController::majEvent'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api']], [], [], []],
    'app_blog' => [[], ['_controller' => 'App\\Controller\\BlogController::index'], [], [['text', '/blog']], [], [], []],
    'app_evennement_index' => [[], ['_controller' => 'App\\Controller\\EvennementController::index'], [], [['text', '/evennement/']], [], [], []],
    'app_evennement_new' => [[], ['_controller' => 'App\\Controller\\EvennementController::new'], [], [['text', '/evennement/new']], [], [], []],
    'app_evennement_show' => [['id'], ['_controller' => 'App\\Controller\\EvennementController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/evennement']], [], [], []],
    'app_evennement_edit' => [['id'], ['_controller' => 'App\\Controller\\EvennementController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/evennement']], [], [], []],
    'app_evennement_delete' => [['id'], ['_controller' => 'App\\Controller\\EvennementController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/evennement']], [], [], []],
    'app_evennementfront_index' => [[], ['_controller' => 'App\\Controller\\EvennementfrontController::index'], [], [['text', '/evennementfront/']], [], [], []],
    'app_myevennement_index' => [[], ['_controller' => 'App\\Controller\\EvennementfrontController::myevents'], [], [['text', '/evennementfront/myevents']], [], [], []],
    'app_evennement_front_participer' => [['id'], ['_controller' => 'App\\Controller\\EvennementfrontController::participer'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/evennementfront/participer']], [], [], []],
    'event_search' => [[], ['_controller' => 'App\\Controller\\EvennementfrontController::search'], [], [['text', '/evennementfront/search']], [], [], []],
    'sort_by_desc_date' => [[], ['_controller' => 'App\\Controller\\EvennementfrontController::sortDescDate'], [], [['text', '/evennementfront/sortByDescDate']], [], [], []],
    'sort_by_asc_date' => [[], ['_controller' => 'App\\Controller\\EvennementfrontController::sortAscDate'], [], [['text', '/evennementfront/sortByAscDate']], [], [], []],
    'app_evennement_showevent' => [['id'], ['_controller' => 'App\\Controller\\EvennementfrontController::showEventDetails'], [], [['text', '/showevent'], ['variable', '/', '[^/]++', 'id', true], ['text', '/evennementfront']], [], [], []],
    'app_facture_index' => [[], ['_controller' => 'App\\Controller\\FactureController::index'], [], [['text', '/facture/']], [], [], []],
    'app_facture_new' => [[], ['_controller' => 'App\\Controller\\FactureController::new'], [], [['text', '/facture/new']], [], [], []],
    'app_facture_show' => [['id'], ['_controller' => 'App\\Controller\\FactureController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/facture']], [], [], []],
    'app_facture_edit' => [['id'], ['_controller' => 'App\\Controller\\FactureController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/facture']], [], [], []],
    'app_facture_delete' => [['id'], ['_controller' => 'App\\Controller\\FactureController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/facture']], [], [], []],
    'add_facture' => [['id'], ['_controller' => 'App\\Controller\\FactureController::addFacture'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/facture/payer']], [], [], []],
    'print_facture' => [['id'], ['_controller' => 'App\\Controller\\FactureController::exportFacturePDF'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/facture/printfacture']], [], [], []],
    'app_signup' => [[], ['_controller' => 'App\\Controller\\SignupController::index'], [], [['text', '/signup']], [], [], []],
    'app_signup_addUser' => [[], ['_controller' => 'App\\Controller\\SignupController::addUser'], [], [['text', '/signup/addUser']], [], [], []],
    'app_video_index' => [[], ['_controller' => 'App\\Controller\\VideoController::index'], [], [['text', '/video/']], [], [], []],
    'app_video_new' => [[], ['_controller' => 'App\\Controller\\VideoController::new'], [], [['text', '/video/new']], [], [], []],
    'app_video_show' => [['id'], ['_controller' => 'App\\Controller\\VideoController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/video']], [], [], []],
    'app_video_edit' => [['id'], ['_controller' => 'App\\Controller\\VideoController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/video']], [], [], []],
    'app_video_delete' => [['id'], ['_controller' => 'App\\Controller\\VideoController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/video']], [], [], []],
    'app_wehealth' => [[], ['_controller' => 'App\\Controller\\WehealthController::index'], [], [['text', '/wehealth']], [], [], []],
];
