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
    'app_blog' => [[], ['_controller' => 'App\\Controller\\BlogController::index'], [], [['text', '/blog']], [], [], []],
    'app_discussion' => [[], ['_controller' => 'App\\Controller\\DiscussionController::index'], [], [['text', '/discussion']], [], [], []],
    'app_post_index' => [[], ['_controller' => 'App\\Controller\\PostController::index'], [], [['text', '/post/']], [], [], []],
    'app_post_new' => [[], ['_controller' => 'App\\Controller\\PostController::new'], [], [['text', '/post/new']], [], [], []],
    'app_post_show' => [['id'], ['_controller' => 'App\\Controller\\PostController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/post']], [], [], []],
    'app_post_edit' => [['id'], ['_controller' => 'App\\Controller\\PostController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/post']], [], [], []],
    'app_post_delete' => [['id'], ['_controller' => 'App\\Controller\\PostController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/post']], [], [], []],
    'app_signup' => [[], ['_controller' => 'App\\Controller\\SignupController::index'], [], [['text', '/signup']], [], [], []],
    'app_signup_addUser' => [[], ['_controller' => 'App\\Controller\\SignupController::addUser'], [], [['text', '/signup/addUser']], [], [], []],
    'app_wehealth' => [[], ['_controller' => 'App\\Controller\\WehealthController::index'], [], [['text', '/wehealth']], [], [], []],
];
