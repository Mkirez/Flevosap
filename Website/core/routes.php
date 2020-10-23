<?php
$router->define([
    'GET' => [
        '/' => [ #DONE
            'controller' => 'HomeController',
            'method' => 'index'
        ],
        '/about' => [ #ToDo Check deze pagina
            'controller' => 'AboutController',
            'method' => 'index'
        ],
        '/contact' => [ #ToDo Check deze pagina
            'controller' => 'ContactController',
            'method' => 'index'
        ],
        '/login' => [ #Done
            'controller' => 'LoginController',
            'method' => 'index'
        ],
        '/register' => [ #Done
            'controller' => 'RegisterController',
            'method' => 'index'
        ],
        '/cart' => [
            'controller' => 'CartController',
            'method' => 'index'
        ],
        '/cart/add' => [
            'controller' => 'CartController',
            'method' => 'add_product'
        ],
        '/cart/remove' => [
            'controller' => 'CartController',
            'method' => 'remove_product'
        ],
        '/checkout' => [
            'controller' => 'CheckoutController',
            'method' => 'index'
        ],
        '/shop' => [
            'controller' => 'ProductpageController',
            'method' => 'index'
        ],
        '/ProductImage' => [
            'controller' => 'ProductpageController',
            'method' => 'getProductImage'
        ],
        '/product/info' => [
            'controller' => 'ProductpageController',
            'method' => 'product_info'
        ],
        '/logout' => [
            'controller' => 'LogoutController',
            'method' => 'logout'
        ],
        '/Productpagezakelijk' => [
            'controller' => 'ppzakelijkcontroller',
            'method' => 'index'

        ],
        '/Zakelijkelogin' => [
            'controller' => 'ZakelijkeLoginController',
            'method' => 'ZakelijkeloginGet'
        ],
        '/test' => [
            'controller' => 'ProductpageController',
            'method' => 'test'
        ],
        '/shop/peer' => [
            'controller' => 'ProductpageController',
            'method' => 'peer'
        ],
        '/shop/appels' => [
            'controller' => 'ProductpageController',
            'method' => 'appels'
        ],
        '/ZakelijkeRegister' => [
            'controller' =>'ZakelijkeRegisterController',
            'method' => 'index'
        ],


    ],

    'POST' => [
        '/login' => [
            'controller' => 'LoginController',
            'method' => 'login3'
        ],
        '/cart/update' => [
            'controller' => 'CartController',
            'method' => 'update_product'
        ],
        '/contact' => [
            'controller' => 'ContactController',
            'method' => 'contact'
        ],
        '/register' => [
            'controller' => 'RegisterController',
            'method' => 'register'
        ],
        
        '/Zakelijkelogin' => [
            'controller' => 'ZakelijkeLoginController',
            'method' => 'Zakelijkelogin'
        ],
        '/ZakelijkeRegister' => [
            'controller' =>'ZakelijkeRegisterController',
            'method' => 'ZakelijkeRegister'
        ],

    ]
]);