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
        '/checkout/status' => [
            'controller' => 'CheckoutController',
            'method' => 'status'
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
            'method' => 'index'
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
        '/zakelijkeregister' => [
            'controller' => 'ZakelijkeRegisterController',
            'method' => 'index'
        ],
    ],

    'POST' => [
        '/login' => [
            'controller' => 'LoginController',
            'method' => 'login'
        ],
        '/cart/update' => [
            'controller' => 'CartController',
            'method' => 'update_product'
        ],
        '/contact' => [
            'controller' => 'ContactController',
            'method' => 'contact'
        ],
        '/checkout' => [
            'controller' => 'CheckoutController',
            'method' => 'CheckOut'
        ],
        '/register' => [
            'controller' => 'RegisterController',
            'method' => 'register'
        ],
        '/zakelijkeregister' => [
            'controller' => 'ZakelijkeRegisterController',
            'method' => 'zakelijkeregister'
        ],
        '/Zakelijkelogin' => [
            'controller' => 'ZakelijkeLoginController',
            'method' => 'zakelijkelogin'
        ]
    ]
]);