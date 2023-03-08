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
        '/admin' => [[['_route' => 'app_admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/adminy' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
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
        '/comment' => [[['_route' => 'app_comment_index', '_controller' => 'App\\Controller\\CommentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/comment/new' => [[['_route' => 'app_comment_new', '_controller' => 'App\\Controller\\CommentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/num/media' => [[['_route' => 'app_num_media_index', '_controller' => 'App\\Controller\\NumMediaController::index'], null, ['GET' => 0], null, true, false, null]],
        '/num/media/new' => [[['_route' => 'app_num_media_new', '_controller' => 'App\\Controller\\NumMediaController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/article/(?'
                    .'|view_content/([^/]++)(*:202)'
                    .'|article/([^/]++)(*:226)'
                    .'|([^/]++)(?'
                        .'|(*:245)'
                        .'|/edit(*:258)'
                        .'|(*:266)'
                    .')'
                    .'|ArticlePdf/([^/]++)(*:294)'
                    .'|likeArticle/([^/]++)(*:322)'
                    .'|dislikeArticle/([^/]++)(*:353)'
                .')'
                .'|/c(?'
                    .'|ategorie/(?'
                        .'|([^/]++)(?'
                            .'|(*:390)'
                            .'|/edit(*:403)'
                        .')'
                        .'|categorie/([^/]++)(*:430)'
                        .'|([^/]++)(*:446)'
                    .')'
                    .'|omment/([^/]++)(?'
                        .'|(*:473)'
                        .'|/edit(*:486)'
                        .'|(*:494)'
                    .')'
                .')'
                .'|/num/media/([^/]++)(?'
                    .'|(*:526)'
                    .'|/edit(*:539)'
                    .'|(*:547)'
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
        202 => [[['_route' => 'view_article_content', '_controller' => 'App\\Controller\\ArticleController::view_article_content'], ['id'], null, null, false, true, null]],
        226 => [[['_route' => 'article_show', '_controller' => 'App\\Controller\\ArticleController::showf'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        245 => [[['_route' => 'app_article_show', '_controller' => 'App\\Controller\\ArticleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        258 => [[['_route' => 'app_article_edit', '_controller' => 'App\\Controller\\ArticleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        266 => [[['_route' => 'app_article_delete', '_controller' => 'App\\Controller\\ArticleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        294 => [[['_route' => 'app_PdfArticle', '_controller' => 'App\\Controller\\ArticleController::impressionPDF'], ['id'], null, null, false, true, null]],
        322 => [[['_route' => 'article_like', '_controller' => 'App\\Controller\\ArticleController::likeArticle'], ['id'], null, null, false, true, null]],
        353 => [[['_route' => 'article_dislike', '_controller' => 'App\\Controller\\ArticleController::dislikeArticle'], ['id'], null, null, false, true, null]],
        390 => [[['_route' => 'app_categorie_show', '_controller' => 'App\\Controller\\CategorieController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        403 => [[['_route' => 'app_categorie_edit', '_controller' => 'App\\Controller\\CategorieController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        430 => [[['_route' => 'categorie_show', '_controller' => 'App\\Controller\\CategorieController::showf'], ['id'], null, null, false, true, null]],
        446 => [[['_route' => 'app_categorie_delete', '_controller' => 'App\\Controller\\CategorieController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        473 => [[['_route' => 'app_comment_show', '_controller' => 'App\\Controller\\CommentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        486 => [[['_route' => 'app_comment_edit', '_controller' => 'App\\Controller\\CommentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        494 => [[['_route' => 'app_comment_delete', '_controller' => 'App\\Controller\\CommentController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        526 => [[['_route' => 'app_num_media_show', '_controller' => 'App\\Controller\\NumMediaController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        539 => [[['_route' => 'app_num_media_edit', '_controller' => 'App\\Controller\\NumMediaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        547 => [
            [['_route' => 'app_num_media_delete', '_controller' => 'App\\Controller\\NumMediaController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
