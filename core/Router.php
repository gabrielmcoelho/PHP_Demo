<?php

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
			return $this->routes[$requestMethod][$uri];
		}
		throw new Exception('No route defined for this URI');
	}

}