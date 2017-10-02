<?php

namespace core;

use app\controllers;

class Router {

	protected $routes = [];

	public static function load($file)
	{
		// echo "Hello Router";
		$router = new static;//khai bao router thanh 1 class?
		require $file;
		return $router;
	}

	public function get($uri, $controller)
	{
		$this->routes['GET'][$uri] = $controller;
	}

	public function post($uri, $controller)
	{
		$this->routes['POST'][$uri] = $controller;
	}

	// ham kiem tra method get hay post co trong mang routes va goi controller de run
	public function direct($uri, $requestType)
 	{
 		if(array_key_exists($uri, $this->routes[$requestType]))
 		{
 			//PageController@home
 			return $this->callAction(
 				...explode('@', $this->routes[$requestType][$uri]) 
 				);
 		}
 		throw new Exception("No route defined for this URI.");
	}

	protected function callAction($controller, $action)
	{
		$controller = "app\\controllers\\{$controller}";
		if(!method_exists($controller, $action)) {
			throw new Exception(
				"{$controller} dose not respone to the {$action} action."
			);
			
		}
		return (new $controller)->$action();
	}
}
