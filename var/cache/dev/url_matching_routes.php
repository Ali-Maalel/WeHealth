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
        '/discussion' => [[['_route' => 'app_discussion_index', '_controller' => 'App\\Controller\\DiscussionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/discussion/new' => [[['_route' => 'app_discussion_new', '_controller' => 'App\\Controller\\DiscussionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/api/medicaments/liste' => [[['_route' => 'api_list', '_controller' => 'App\\Controller\\APIController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/Medicaments/ajout' => [[['_route' => 'api_ajout', '_controller' => 'App\\Controller\\APIController::addMedicaments'], null, ['POST' => 0], null, false, false, null]],
        '/medicaments' => [[['_route' => 'app_medicaments_index', '_controller' => 'App\\Controller\\MedicamentsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/medicaments/new' => [[['_route' => 'app_medicaments_new', '_controller' => 'App\\Controller\\MedicamentsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/ordenance/api' => [[['_route' => 'app_ordenance_api', '_controller' => 'App\\Controller\\OrdenanceApiController::index'], null, null, null, false, false, null]],
        '/ordenance' => [[['_route' => 'app_ordenance_index', '_controller' => 'App\\Controller\\OrdenanceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/ordenance/new' => [[['_route' => 'app_ordenance_new', '_controller' => 'App\\Controller\\OrdenanceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/post' => [[['_route' => 'app_post_index', '_controller' => 'App\\Controller\\PostController::index'], null, ['GET' => 0], null, true, false, null]],
        '/post/new' => [[['_route' => 'app_post_new', '_controller' => 'App\\Controller\\PostController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/question' => [[['_route' => 'question', '_controller' => 'App\\Controller\\QuestionController::index'], null, null, null, false, false, null]],
        '/Patient/poserQuestion' => [[['_route' => 'poserQuestion', '_controller' => 'App\\Controller\\QuestionController::PoserUneQuestion'], null, null, null, false, false, null]],
        '/Patient/ListerQuestion' => [[['_route' => 'ListerQuestion', '_controller' => 'App\\Controller\\QuestionController::ListerQuestion'], null, null, null, false, false, null]],
        '/Medecin/ListerQuestion/Med' => [[['_route' => 'ListerQuestionMed', '_controller' => 'App\\Controller\\QuestionController::afficherQuestions'], null, null, null, false, false, null]],
        '/reponse' => [[['_route' => 'reponse', '_controller' => 'App\\Controller\\ReponseController::index'], null, null, null, false, false, null]],
        '/signup' => [[['_route' => 'app_signup', '_controller' => 'App\\Controller\\SignupController::index'], null, null, null, false, false, null]],
        '/signup/addUser' => [[['_route' => 'app_signup_addUser', '_controller' => 'App\\Controller\\SignupController::addUser'], null, null, null, false, false, null]],
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
                .'|/discussion/(?'
                    .'|([^/]++)(?'
                        .'|(*:195)'
                        .'|/edit(*:208)'
                        .'|(*:216)'
                    .')'
                    .'|new/([^/]++)(*:237)'
                .')'
                .'|/api/Medicaments/(?'
                    .'|lire/([^/]++)(*:279)'
                    .'|editer/([^/]++)(*:302)'
                    .'|supprimer/([^/]++)(*:328)'
                .')'
                .'|/medicaments/([^/]++)(?'
                    .'|(*:361)'
                    .'|/edit(*:374)'
                    .'|(*:382)'
                .')'
                .'|/ordenance/(?'
                    .'|([^/]++)(?'
                        .'|(*:416)'
                        .'|/edit(*:429)'
                        .'|(*:437)'
                    .')'
                    .'|printordonnance/([^/]++)(*:470)'
                .')'
                .'|/post/([^/]++)(?'
                    .'|(*:496)'
                    .'|/edit(*:509)'
                    .'|(*:517)'
                .')'
                .'|/Patient/(?'
                    .'|supprimerQuestion([^/]++)(*:563)'
                    .'|modifierQuestion/([^/]++)(*:596)'
                    .'|ListerReponses/([^/]++)(*:627)'
                .')'
                .'|/Medecin/(?'
                    .'|RepondreQuestion/([^/]++)(*:673)'
                    .'|afficherReponses/([^/]++)(*:706)'
                    .'|supprimerReponse/([^/]++)(*:739)'
                    .'|modifierReponse/([^/]++)(*:771)'
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
        195 => [[['_route' => 'app_discussion_show', '_controller' => 'App\\Controller\\DiscussionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        208 => [[['_route' => 'app_discussion_edit', '_controller' => 'App\\Controller\\DiscussionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        216 => [[['_route' => 'app_discussion_delete', '_controller' => 'App\\Controller\\DiscussionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        237 => [[['_route' => 's_show', '_controller' => 'App\\Controller\\DiscussionController::showf'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        279 => [[['_route' => 'api_Medicaments', '_controller' => 'App\\Controller\\APIController::getMedicament'], ['id'], ['GET' => 0], null, false, true, null]],
        302 => [[['_route' => 'api_edit', '_controller' => 'App\\Controller\\APIController::editMedicaments'], ['id'], ['PUT' => 0], null, false, true, null]],
        328 => [[['_route' => 'api_supprime', '_controller' => 'App\\Controller\\APIController::removeMedicaments'], ['id'], ['DELETE' => 0], null, false, true, null]],
        361 => [[['_route' => 'app_medicaments_show', '_controller' => 'App\\Controller\\MedicamentsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        374 => [[['_route' => 'app_medicaments_edit', '_controller' => 'App\\Controller\\MedicamentsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        382 => [[['_route' => 'app_medicaments_delete', '_controller' => 'App\\Controller\\MedicamentsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        416 => [[['_route' => 'app_ordenance_show', '_controller' => 'App\\Controller\\OrdenanceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        429 => [[['_route' => 'app_ordenance_edit', '_controller' => 'App\\Controller\\OrdenanceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        437 => [[['_route' => 'app_ordenance_delete', '_controller' => 'App\\Controller\\OrdenanceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        470 => [[['_route' => 'print_ordonnance', '_controller' => 'App\\Controller\\OrdenanceController::ordenancePDF'], ['id'], null, null, false, true, null]],
        496 => [[['_route' => 'app_post_show', '_controller' => 'App\\Controller\\PostController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        509 => [[['_route' => 'app_post_edit', '_controller' => 'App\\Controller\\PostController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        517 => [[['_route' => 'app_post_delete', '_controller' => 'App\\Controller\\PostController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        563 => [[['_route' => 'supprimerQuestion', '_controller' => 'App\\Controller\\QuestionController::SupprimerQuestion'], ['id'], null, null, false, true, null]],
        596 => [[['_route' => 'modifierQuestion', '_controller' => 'App\\Controller\\QuestionController::modifierQuestion'], ['id'], null, null, false, true, null]],
        627 => [[['_route' => 'ListerReponses', '_controller' => 'App\\Controller\\ReponseController::ListerReponses'], ['id'], null, null, false, true, null]],
        673 => [[['_route' => 'RepondreQuestion', '_controller' => 'App\\Controller\\ReponseController::RepondreQuestion'], ['id'], null, null, false, true, null]],
        706 => [[['_route' => 'afficherReponses', '_controller' => 'App\\Controller\\ReponseController::AfficherMesReponses'], ['id'], null, null, false, true, null]],
        739 => [[['_route' => 'supprimerReponse', '_controller' => 'App\\Controller\\ReponseController::SupprimerReponse'], ['id'], null, null, false, true, null]],
        771 => [
            [['_route' => 'modifierReponse', '_controller' => 'App\\Controller\\ReponseController::modifierReponse'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
