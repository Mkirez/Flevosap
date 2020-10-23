<?php

//Exclude File extensions from routes
if (preg_match('/\.(?:png|jpg|jpeg|gif|css|min.js|js)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // serve the requested resource as-is.
}

ini_set('display_errors', 1);

session_start();

/**
 * Config ( Base )
 */
require "core/config.php";

/**
 * Models
 */
require 'models/BaseModel.php';
require 'models/UserModel.php';
require 'models/CartModel.php';
require 'models/CartProductModel.php';
require 'models/ProductModel.php';
require 'models/ProductInfoModel.php';
require 'models/ppzakelijkmodel.php';
require 'models/OrderModel.php';
require 'models/OrderRuleModel.php';

/**
 * Controllers
 */
require 'controllers/HomeController.php';
require 'controllers/AboutController.php';
require 'controllers/ContactController.php';
require 'controllers/RegisterController.php';
require 'controllers/LoginController.php';
require 'controllers/CartController.php';
require 'controllers/CheckoutController.php';
require 'controllers/LogoutController.php';
require 'controllers/ProductpageController.php';
require 'controllers/ppzakelijkcontroller.php';
require 'controllers/ZakelijkeLoginController.php';
require 'controllers/ZakelijkeRegisterController.php';
require 'core/Router.php';


if(!isset($_SESSION['cart'])){
    $cart = new CartModel(null);
    $_SESSION['cart'] = serialize($cart);
}


$router = new Router();
require 'core/routes.php';
$router->direct();

