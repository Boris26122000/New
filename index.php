<?php
ini_set('display_errors',1);
error_reporting(E_ERROR);
define('ROOT',dirname(__FILE__));
require ROOT . '/vendor/autoload.php';

use app\components\Router;

$router = new Router();
$router->run();




