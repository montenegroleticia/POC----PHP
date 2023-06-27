<?php

require_once 'vendor/autoload.php';
require_once 'src/Routes/UserRoute.php';

use Bramus\Router\Router;

$router = new Router();

\Routes\UserRoute::defineRoutes($router);

$router->run();
