<?php

// $router->define([
// 	'' => 'controllers/index.php',
// 	'about' => 'controllers/about.php',
// 	'about/culture' => 'controllers/about-culture.php',
// 	'contact' => 'controllers/contact.php',
// 	'names' => 'controllers/add-name.php'
// ]);

$router->define('GET', '', 'PagesController@home');
$router->define('GET', 'about', 'PagesController@about');
$router->define('GET', 'contact', 'PagesController@contact');
$router->define('GET', 'users', 'UsersController@index');
$router->define('POST', 'users', 'UsersController@store');