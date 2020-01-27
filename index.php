<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
define('ROOT',dirname(__FILE__));
require ROOT . '/vendor/autoload.php';

require_once(ROOT . '/Components/Router.php');
require_once(ROOT . '/Components/DB.php');

$router = new Router();
$router->run();




