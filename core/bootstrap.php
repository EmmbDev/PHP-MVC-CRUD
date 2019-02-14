<?php

use App\Core\App;

App::bind('config', require './config.php');
App::bind('database', new QueryBuilder(Connection::Make(
	App::get('config')['database'])
	)
);

function view($name, $data = []) 
{
	extract($data);
	// extract takes an associative array and creates variables out of it; 
	// example: ['description' => 'defualt'] after extract $description = 'default';
	return require "app/views/{$name}.view.php";
}

function redirect($path) 
{
	header("Location: /{$path}");
}

