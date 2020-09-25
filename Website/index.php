<?php

require 'controllers/HomeController.php';
require 'controllers/AboutController.php';
require 'controllers/ContactController.php';

require 'core/Router.php';

$router = new Router();
require 'core/routes.php';
$router->direct();

