<?php

class PageController {
	public function home() {
		// receives the request
		// delegate it
		// return a response
		$users = App::get('query')->selectAll('users');
		require 'views/index.view.php';
	}

	public function about() {
		require 'views/about.view.php';
	}

	public function contact() {
		require 'views/contact.view.php';
	}
}