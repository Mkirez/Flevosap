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
            'method' => 'AddUser'
        ],
        '/products' => [
            'controller' => 'AdminProductController',
            'method' => 'AddProduct'
        ],
    ],
    'DELETE' => [
        '/users' => [
            'controller' => 'AdminUsersController',
            'method' => 'delete'
        ],
        '/products' => [
            'controller' => 'AdminProductController',
            'method' => 'delete'
        ]
    ],
    'UPDATE' => [
        '/admineditusers' => [
            'controller' => 'EditorController',
            'method' => 'Update'
        ],
        '/admineditproducts' => [
            'controller' => 'EditorController',
            'method' => 'Update'
        ]
    ]
]);