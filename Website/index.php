<?php
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



/**
 * Controllers
 */
require 'controllers/HomeController.php';
require 'controllers/AboutController.php';
require 'controllers/ContactController.php';

require 'core/Router.php';

$router = new Router();
require 'core/routes.php';
$router->direct();

