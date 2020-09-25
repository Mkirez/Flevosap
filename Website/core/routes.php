<?php
$router->define([
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
    ]
]);