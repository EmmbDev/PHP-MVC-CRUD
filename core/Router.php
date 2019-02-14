<?php

namespace App\Core;

class Router {
	protected $routes = [
		'GET' => [],
		'POST' => [],
	];

	public function get($uri, $controller) {
		$this->routes['GET'][$uri] = $controller;
	}

	public function post($uri, $controller) {
		$this->routes['POST'][$uri] = $controller;
	}

	public function define($routes) {
		$this->routes = $routes;
	}

	public function direct($uri, $requestType) {
		// example.com/about/culture
		if (array_key_exists($uri, $this->routes[$requestType])) {
			// ... array as function arguments ['var', 'bla'] -> 'var', 'bla'
			return $this->callAction(...explode("@", $this->routes[$requestType][$uri]));
		}

		throw new Exception("No route defined for this URI");
	}

	public static function load($file) {
		$router = new static; // or 'new self' - create instance of self 
		// clever one
		require $file;
		return $router;
	}

	protected function callAction($controller, $action) 
	{
		$controller = "App\\Controllers\\{$controller}";
		$controller = new $controller;

		if(! method_exists($controller, $action)) 
		{
			throw new Exception(
				"{$controller} does not respond to the {$action} action."
			);
		} 
		// we can create object from string containing class name by new $controller
		// so we do with method $action is a string and we use $action() to call method with this name
		return $controller->$action();
	}

}