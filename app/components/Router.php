<?php

namespace app\components;

use app\controllers;

class Router
{
    private $routes;

    public function __construct()
    {
        $RoutesPath = ROOT.'/app/config/routes.php';
        $this->routes = include $RoutesPath;
    }

    private function getUri()
    {
        if(!empty($_SERVER['REQUEST_URI']))
        {
            return trim($_SERVER['REQUEST_URI'],'/');
        }
    }

    public function run()
    {
        $uri = $this->getUri();

        foreach ($this->routes as $uriPattern => $path)
        {
            if(preg_match("~$uriPattern~", $uri)) {
                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);
                $segments = explode('/', $internalRoute);
                $controllerName = array_shift($segments).'Controller';
                $controllerName = ucfirst($controllerName);
                $actionName = 'action'.ucfirst(array_shift($segments));
                $parameters = $segments;
                $controllerFile = ROOT.'/app/controllers/'.$controllerName.'.php';
                if(file_exists($controllerFile)) {
                    include_once $controllerFile;
                }

                $a = 'app' . '\\' . 'controllers'. '\\' . $controllerName;

                $controllerObject = new $a;
                $result = call_user_func_array(array($controllerObject, $actionName), $parameters);
                if($result != NULL)
                {
                    break;
                }
            }
        }
    }
}
