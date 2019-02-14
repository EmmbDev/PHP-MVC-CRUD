<?php

namespace App\Controllers;
use App\Core\App;

class UsersController
{

	public function delete() 
	{
		App::get('database')->delete('users', ['name' => $_POST['name']
			]);
		redirect('users');
	}
	public function store() 
	{
		App::get('database')->insert('users', [
			'name' => $_POST['name']
		]);
		redirect('users');
	}
	public function index() 
	{
		$users = App::get('database')->selectAll('users');	
		// view is defined in bootstrap which is included in the index.php file
		// we call view from the index.php file so we have to pass users as an argument
		return view("users", compact('users'));// or ['users' => $users]
		/*
		Can also handy for debugging, to quickly show a bunch of variables and their values:
		print_r(compact(explode(' ', 'count acw cols coldepth')));
		gives
		Array
		(
			[count] => 70
			[acw] => 9
			[cols] => 7
			[coldepath] => 10
		)
		*/
	}
}