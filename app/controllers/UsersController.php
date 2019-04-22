<?php

namespace App\Controllers;

use App\Core\App;

class UsersController {
	public function index() {
		$users = App::get('query')->selectAll('users');
		return view('users', compact('users'));
	}

	public function store() {
		$data = [
			'name' => $_POST['name'],
		];
		
		App::get('query')->insert('users', $data);
		header('Location: /users');
	}
}