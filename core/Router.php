<?php

namespace App\Core;

class Router {

	protected $routes = [
		'GET' => [],
		'POST' => []
	];

	public static function load($file)
	{
		$router = new self;
		require $file;
		return $router;
	}

	public function define($requestMethod, $uri, $controller) {
		$this->routes[$requestMethod][$uri] = $controller;
	}

	public function direct($uri, $requestMethod) {
		if (array_key_exists($uri, $this->routes[$requestMethod])) {
			return $this->callAction(
				...explode('@', $this->routes[$requestMethod][$uri])
			);
		}
		throw new Exception('No route defined for this URI');
	}

	protected function callAction($controller, $action) {
		$controller = "App\\Controllers\\{$controller}";
		$controller = new $controller;
		if(!method_exists($controller, $action)){
			throw new Exception(
				"{$controller} does not respond to the {$action} action."
			);
		}
		return $controller->$action();
	}

}