<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

define('ROOT',dirname(__FILE__));

require_once(ROOT . '/Components/Router.php');
require_once(ROOT . '/Components/DB.php');

$router = new Router();
$router->run();

include_once ROOT . '/views/header/header.php';
include_once ROOT . '/views/main.php';


