<?php
$router->define([
    'GET' => [
        '/admin' => [
            'controller' => 'LoginController',
            'controller' => 'AdminLoginController',
            'method' => 'index'
        ],
        '/logout' => [
            'controller' => 'LogoutController',
            'method' => 'index'
        ],
        '/login' => [
            'controller' => 'LoginController',
            'method' => 'index'
        ],
        '/' => [
            'controller' => 'AdminController',
            'method' => 'index'
        ],
        '/adminlogout' => [
            'controller' => 'AdminLogoutController',
            'method' => 'index'
        ],
    ],
    'POST' => [
        '/login' => [
            'controller' => 'LoginController',
            'method' => 'login'
        ],
        '/admin' => [
            'controller' => 'LoginController',
            'controller' => 'AdminLoginController',
            'method' => 'login'
        ],
    ]
]);