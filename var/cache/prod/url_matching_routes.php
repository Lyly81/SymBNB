<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/login' => [[['_route' => 'account_login', '_controller' => 'App\\Controller\\AccountController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'account_logout', '_controller' => 'App\\Controller\\AccountController::logout'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'account_register', '_controller' => 'App\\Controller\\AccountController::register'], null, null, null, false, false, null]],
        '/account/profile' => [[['_route' => 'account_profile', '_controller' => 'App\\Controller\\AccountController::profile'], null, null, null, false, false, null]],
        '/account/password-update' => [[['_route' => 'account_password', '_controller' => 'App\\Controller\\AccountController::updatePassword'], null, null, null, false, false, null]],
        '/account' => [[['_route' => 'account_index', '_controller' => 'App\\Controller\\AccountController::myAccount'], null, null, null, false, false, null]],
        '/ads' => [[['_route' => 'ads_index', '_controller' => 'App\\Controller\\AdController::index'], null, null, null, false, false, null]],
        '/ads/new' => [[['_route' => 'ads_create', '_controller' => 'App\\Controller\\AdController::create'], null, null, null, false, false, null]],
        '/salut' => [[['_route' => 'hello_base', '_controller' => 'App\\Controller\\HomeController::hello'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'homepage', '_controller' => 'App\\Controller\\HomeController::home'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/ads/([^/]++)(?'
                    .'|/(?'
                        .'|edit(*:31)'
                        .'|delete(*:44)'
                    .')'
                    .'|(*:52)'
                .')'
                .'|/bonjour(?'
                    .'|/([^/]++)/age(?:/([^/]++))?(*:98)'
                    .'|(?:/([^/]++))?(*:119)'
                .')'
                .'|/user/([^/]++)(*:142)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        31 => [[['_route' => 'ads_edit', '_controller' => 'App\\Controller\\AdController::edit'], ['slug'], null, null, false, false, null]],
        44 => [[['_route' => 'ads_delete', '_controller' => 'App\\Controller\\AdController::delete'], ['slug'], null, null, false, false, null]],
        52 => [[['_route' => 'ads_show', '_controller' => 'App\\Controller\\AdController::show'], ['slug'], null, null, false, true, null]],
        98 => [[['_route' => 'hello', 'prenom' => 'anonyme', 'age' => 0, '_controller' => 'App\\Controller\\HomeController::hello'], ['prenom', 'age'], null, null, false, true, null]],
        119 => [[['_route' => 'hello_prenom', 'prenom' => 'anonyme', '_controller' => 'App\\Controller\\HomeController::hello'], ['prenom'], null, null, false, true, null]],
        142 => [
            [['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::index'], ['slug'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
