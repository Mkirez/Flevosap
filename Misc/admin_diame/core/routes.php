<?php
$router->define([
    'GET' => [
        '/admin' => [
            'controller' => 'AdminLoginController',
            'method' => 'index'
        ],
        '/' => [
            'controller' => 'HomeController',
            'method' => 'index'
        ],
        '/logout' => [
            'controller' => 'AdminLogoutController',
            'method' => 'index'
        ],
        '/users' => [
            'controller' => 'AdminUsersController',
            'method' => 'index'
        ],
        '/products' => [
            'controller' => 'AdminProductController',
            'method' => 'index'
        ]
    ],
    'POST' => [
        '/admin' => [
            'controller' => 'AdminLoginController',
            'method' => 'login'
        ],
        '/register' => [
            'controller' => 'RegisterController',
            'method' => 'register'
        ],
        '/users' => [
            'controller' => 'AdminUsersController',
            'method' => 'index'
        ],
        '/products' => [
            'controller' => 'AdminProductController',
            'method' => 'index'
        ],
    ],
    'DELETE' => [
        '/users?=id2' => [
            'controller' => 'AdminUsersController',
            'method' => 'delete'
        ],
        '/products?=id2' => [
            'controller' => 'AdminProductController',
            'method' => 'delete'
        ]
    ]
]);