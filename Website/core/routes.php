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
            'method' => 'ZakelijkeloginGet'
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
        '/zakelijkeregister' => [
            'controller' => 'ZakelijkeRegisterController',
            'method' => 'index'
        ],
        '/Faq' => [
            'controller' => 'VeelgesteldeVragenContoller',
            'method' => 'index'
        ],
        '/nieuwsbrief' => [
            'controller' => 'NieuwsbriefController',
            'method' => 'index'
        ],
        '/onzepartners' => [
            'controller' => 'OnzepartnersController',
            'method' => 'index'
        ],
        '/profile' => [
            'controller' => 'ProfileController',
            'method' => 'index'
        ],
        '/admin' => [
            'controller' => 'AdminLoginController',
            'method' => 'index'
        ],
        '/dashboard' => [
            'controller' => 'DashboardController',
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
        '/products/create' => [
            'controller' => 'AdminProductController',
            'method' => 'create'
        ],
        '/users/create' => [
            'controller' => 'AdminUsersController',
            'method' => 'create'
        ],
        '/orders' => [
            'controller' => 'AdminOrderController',
            'method' => 'index'
        ],
        '/order' => [
            'controller' => 'AdminOrderController',
            'method' => 'show'
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
        '/login' => [
            'controller' => 'LoginController',
            'method' => 'login3'
        ],
        '/order/update' => [
            'controller' => 'AdminOrderController',
            'method' => 'update'
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
        '/ZakelijkeRegister' => [
            'controller' =>'ZakelijkeRegisterController',
            'method' => 'ZakelijkeRegister'
        ],
        '/zakelijkeregister' => [
            'controller' => 'ZakelijkeRegisterController',
            'method' => 'zakelijkeregister'
        ],
        '/Zakelijkelogin' => [
            'controller' => 'ZakelijkeLoginController',
            'method' => 'zakelijkelogin'
        ],
        '/admin' => [
            'controller' => 'AdminLoginController',
            'method' => 'login'
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