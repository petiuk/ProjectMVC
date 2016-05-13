<?php
namespace n9engine;
use APP\Controllers;
class Route
{
	static function init()
	{
		$route = explode('/', $_SERVER['REQUEST_URI']);
		$controller = 'default';
		$action = 'index';
		if(!empty($route[1])) {
			$controller = $route[1];
		}
		if(!empty($route[2])) {
			$action = $route[2];
		}
		$controller = strtolower($controller).'Controller';
		if(file_exists(APP.'/controllers/'.$controller.'.php')) {
			include_once APP.'/controllers/'.$controller.'.php';
		} else {
            $controller = 'errorsController';
            include_once APP.'/controllers/'.$controller.'.php';
        }
		$controller = 'App\\Controllers\\'.$controller;
        $controllerObj = new $controller;
		if(method_exists($controllerObj, $action)) {
			$controllerObj->$action();
        } else {
            $controllerObj->notFound();
        } 
	}
}