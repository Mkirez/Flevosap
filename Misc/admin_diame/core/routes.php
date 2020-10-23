<?php
$router->define([
    'GET' => [
        '/admin' => [
            'controller' => 'AdminLoginController',
            'method' => 'index'
        ],
        '/dashboard' => [
            'controller' => 'DashboardController',
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
        ],
        '/admineditusers' => [
            'controller' => 'UserEditorController',
            'method' => 'index'
        ],
        '/admineditproducts' => [
            'controller' => 'ProductEditorController',
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
        '/admineditusers' => [
            'controller' => 'UserEditorController',
            'method' => 'editUser'
        ],
        '/admineditproducts' => [
            'controller' => 'ProductEditorController',
            'method' => 'editProduct'
        ]
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
            'controller' => 'UserEditorController',
            'method' => 'editUser'
        ],
        '/admineditproducts' => [
            'controller' => 'ProductEditorController',
            'method' => 'editProduct'
        ]
    ],

]);