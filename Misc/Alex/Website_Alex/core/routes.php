<?php
$router->define([
    'GET' => [
        '/admin' => [
            'controller' => 'LoginController',
            'controller' => 'AdminLoginController',
            'method' => 'index'
        ],
        '/' => [
            'controller' => 'HomeController',
            'method' => 'index'
        ],
        '/about' => [
            'controller' => 'AboutController',
            'method' => 'index'
        ],
        '/contact' => [
            'controller' => 'ContactController',
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
        '/register' => [
            'controller' => 'RegisterController',
            'method' => 'index'
        ],
        '/Productpage' => [
            'controller' => 'ProductpageController',
            'method' => 'index'
        ],
        '/ProductImage' => [
            'controller' => 'ProductpageController',
            'method' => 'getProductImage'
        ],
        '/productinfo' => [
            'controller' => 'ProductInfoController',
            'method' => 'index'
        ],
        '/dashboard' => [
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
        '/register' => [
            'controller' => 'RegisterController',
            'method' => 'register'
        ],
    ]
]);