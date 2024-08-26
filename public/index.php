<?php

define('APP_START', microtime(true));

require_once('./bootstrap/app.php');

use route\Router;
use request\Requisition;
        

$router = new Router();

$router->get('/', '\app\controllers\IndexController@indexAction');

$router->set404('\app\controllers\Error@notFound');

$router->run();
?>