<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/articles' => [[['_route' => 'app_all_articles', '_controller' => 'App\\Controller\\ArticleController::showAllArticles'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/check-login' => [[['_route' => 'app_check_login', '_controller' => 'App\\Controller\\SecurityController::checkLogin'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/user/([^/]++)/article/new(*:68)'
                .'|/article(?'
                    .'|s/user/([^/]++)(*:101)'
                    .'|/(?'
                        .'|edit/([^/]++)(*:126)'
                        .'|delete/([^/]++)(*:149)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        68 => [[['_route' => 'app_article_new', '_controller' => 'App\\Controller\\ArticleController::addArticle'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        101 => [[['_route' => 'app_articles_by_user', '_controller' => 'App\\Controller\\ArticleController::showArticlesByUser'], ['id'], ['GET' => 0], null, false, true, null]],
        126 => [[['_route' => 'app_article_edit', '_controller' => 'App\\Controller\\ArticleController::editArticle'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        149 => [
            [['_route' => 'app_article_delete', '_controller' => 'App\\Controller\\ArticleController::deleteArticle'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
