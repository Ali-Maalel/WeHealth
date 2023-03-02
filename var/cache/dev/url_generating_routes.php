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
    'admin_block_user' => [['id'], ['_controller' => 'App\\Controller\\AdminController::blockUser'], [], [['text', '/block'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/user']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\AppsecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\AppsecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'app_blog' => [[], ['_controller' => 'App\\Controller\\BlogController::index'], [], [['text', '/blog']], [], [], []],
    'app_coach_index' => [[], ['_controller' => 'App\\Controller\\CoachController::index'], [], [['text', '/coach/']], [], [], []],
    'app_coach_new' => [[], ['_controller' => 'App\\Controller\\CoachController::new'], [], [['text', '/coach/coach/new']], [], [], []],
    'app_coach_show' => [['id'], ['_controller' => 'App\\Controller\\CoachController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/coach/coach']], [], [], []],
    'app_coach_edit' => [['id'], ['_controller' => 'App\\Controller\\CoachController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/coach/coach']], [], [], []],
    'app_coach_delete' => [['id'], ['_controller' => 'App\\Controller\\CoachController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/coach/coach/delete']], [], [], []],
    'app_patient_index' => [[], ['_controller' => 'App\\Controller\\PatientController::index'], [], [['text', '/patient/']], [], [], []],
    'app_patient_new' => [[], ['_controller' => 'App\\Controller\\PatientController::new'], [], [['text', '/patient/patient/new']], [], [], []],
    'app_patient_show' => [['id'], ['_controller' => 'App\\Controller\\PatientController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/patient/patient']], [], [], []],
    'app_patient_edit' => [['id'], ['_controller' => 'App\\Controller\\PatientController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/patient/patient']], [], [], []],
    'app_patient_delete' => [['id'], ['_controller' => 'App\\Controller\\PatientController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/patient/patient/delete']], [], [], []],
    'app_post_index' => [[], ['_controller' => 'App\\Controller\\PostController::index'], [], [['text', '/post/']], [], [], []],
    'app_post_new' => [[], ['_controller' => 'App\\Controller\\PostController::new'], [], [['text', '/post/new']], [], [], []],
    'app_post_show' => [['id'], ['_controller' => 'App\\Controller\\PostController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/post']], [], [], []],
    'app_post_edit' => [['id'], ['_controller' => 'App\\Controller\\PostController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/post']], [], [], []],
    'app_post_delete' => [['id'], ['_controller' => 'App\\Controller\\PostController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/post']], [], [], []],
    'app_professionnel_sante_index' => [[], ['_controller' => 'App\\Controller\\ProfessionnelSanteController::index'], [], [['text', '/professionnel/sante/']], [], [], []],
    'app_professionnel_sante_new' => [[], ['_controller' => 'App\\Controller\\ProfessionnelSanteController::new'], [], [['text', '/professionnel/sante/new']], [], [], []],
    'app_professionnel_sante_show' => [['id'], ['_controller' => 'App\\Controller\\ProfessionnelSanteController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/professionnel/sante']], [], [], []],
    'app_professionnel_sante_edit' => [['id'], ['_controller' => 'App\\Controller\\ProfessionnelSanteController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/professionnel/sante']], [], [], []],
    'app_professionnel_sante_delete' => [['id'], ['_controller' => 'App\\Controller\\ProfessionnelSanteController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/professionnel/sante']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_verify_email' => [[], ['_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], [], [['text', '/verify/email']], [], [], []],
    'app_security' => [[], ['_controller' => 'App\\Controller\\SecurityController::index'], [], [['text', '/security']], [], [], []],
    'app_signup' => [[], ['_controller' => 'App\\Controller\\SignupController::index'], [], [['text', '/signup']], [], [], []],
    'app_signup_addUser' => [[], ['_controller' => 'App\\Controller\\SignupController::addUser'], [], [['text', '/signup/addUser']], [], [], []],
    'app_user_index' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/user/']], [], [], []],
    'app_user_new' => [[], ['_controller' => 'App\\Controller\\UserController::new'], [], [['text', '/user/new']], [], [], []],
    'app_user_show' => [['id'], ['_controller' => 'App\\Controller\\UserController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user/show']], [], [], []],
    'app_user_edit' => [['id'], ['_controller' => 'App\\Controller\\UserController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
    'app_user_delete' => [['id'], ['_controller' => 'App\\Controller\\UserController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user/delete']], [], [], []],
    'app_user_blockUser' => [['id'], ['_controller' => 'App\\Controller\\UserController::blockUser'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user/blockUser']], [], [], []],
    'app_user_unblockUser' => [['id'], ['_controller' => 'App\\Controller\\UserController::unblockUser'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user/unblockUser']], [], [], []],
    'admin_unblock_user' => [['id'], ['_controller' => 'App\\Controller\\UserController::unblockUser'], [], [['text', '/unblock'], ['variable', '/', '[^/]++', 'id', true], ['text', '/user/users']], [], [], []],
    'app_wehealth' => [[], ['_controller' => 'App\\Controller\\WehealthController::index'], [], [['text', '/wehealth']], [], [], []],
];
