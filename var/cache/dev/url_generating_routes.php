<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'app_article_new' => [['id'], ['_controller' => 'App\\Controller\\ArticleController::addArticle'], [], [['text', '/article/new'], ['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
    'app_articles_by_user' => [['id'], ['_controller' => 'App\\Controller\\ArticleController::showArticlesByUser'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/articles/user']], [], [], []],
    'app_article_edit' => [['id'], ['_controller' => 'App\\Controller\\ArticleController::editArticle'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/article/edit']], [], [], []],
    'app_article_delete' => [['id'], ['_controller' => 'App\\Controller\\ArticleController::deleteArticle'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/article/delete']], [], [], []],
    'app_all_articles' => [[], ['_controller' => 'App\\Controller\\ArticleController::showAllArticles'], [], [['text', '/articles']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_check_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::checkLogin'], [], [['text', '/check-login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
];
