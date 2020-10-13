<?php
$router->define([
    'GET' => [
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
<<<<<<< Updated upstream
         '/logout' => [
            'controller' => 'LogoutController',
            'method' => 'index'
        ],
=======

         '/Productpagezakelijk' => [
            'controller' => 'ppzakelijkcontroller',
            'method' => 'index'

         ],
        '/ProductImage' => [
            'controller' => 'ppzakelijkcontroller',
            'method' => 'getProductImage'
>>>>>>> Stashed changes
    ],
],

    'POST' => [
        '/login' => [
            'controller' => 'LoginController',
            'method' => 'login'
        ],
        '/register' => [
            'controller' => 'RegisterController',
            'method' => 'register'
        ],
    ]
]);