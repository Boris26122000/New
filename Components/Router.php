<?php
class Router
{
    private $routes;

    public function __construct()
    {
        $RoutesPath = ROOT.'/config/routes.php';
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
        //echo $uri;

        foreach ($this->routes as $uriPattern => $path)
        {
            if(preg_match("~$uriPattern~", $uri)) {
                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);
                $segments = explode('/', $internalRoute);
/*                var_dump($this->routes);
                var_dump($segments);*/
                $controllerName = array_shift($segments).'Controller';
                $controllerName = ucfirst($controllerName);

                $actionName = 'action'.ucfirst(array_shift($segments));

                $parameters = $segments;
                //var_dump($parameters);
                $controllerFile = ROOT.'/controllers/'.$controllerName.'.php';
                if(file_exists($controllerFile)) {
                    include_once ($controllerFile);
                }

                $controllerObject = new $controllerName;
//                var_dump($actionName);
                $result = call_user_func_array(array($controllerObject, $actionName), $parameters);
                if($result != NULL)
                {
                    break;
                }


                //echo $internalRoute;
            }
        }
    }
}