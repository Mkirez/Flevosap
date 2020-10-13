<?php
$router->define([
    'GET' => [
        '/admin' => [
            'controller' => 'LoginController',
            'method' => 'index'
        ],
        '/' => [
            'controller' => 'HomeController',
            'method' => 'index'
        ],
        // '/login' => [
        //     'controller' => 'LoginController',
        //     'method' => 'index'
        // ],
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
        ]
    ],
    'POST' => [
        '/admin' => [
            'controller' => 'LoginController',
            'method' => 'login'
        ],
        '/register' => [
            'controller' => 'RegisterController',
            'method' => 'register'
        ],
    ]
]);