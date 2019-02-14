<?php

namespace App\Controllers;
use App\Core\Request;
use App\Core\App;

class PagesController 
{
	public function home() 
	{
		return view('index');
	}

	public function contact() 
	{
		return view("contact");
	}

	public function about() 
	{
		$company = "Laracasts";

		return view("about", ['company' => $company]);
	}

	public function tasks() 
	{
		$tasks = App::get('database')->selectAll('todos');
		if(Request::method() === 'POST') 
		{
			$task = [
			'description' => $_POST['description'],
			'completed' => $_POST['completed']
			];
			if($task['description'] !== NULL && $task['completed'] !== NULL) {
				$app['database']->insert('todos', $task);
			}
			header("Refresh:0");
		}
		return view("tasks", ['tasks' => $tasks]);
	}
}