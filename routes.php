<?php

// $router->define([
// 	'' => 'controllers/index.php',
// 	'about' => 'controllers/about.php',
// 	'about/culture' => 'controllers/about-culture.php',
// 	'contact' => 'controllers/contact.php',
// 	'names' => 'controllers/add-name.php'
// ]);

$router->define('GET', '', 'controllers/index.php');
$router->define('GET', 'about', 'controllers/about.php');
$router->define('GET', 'about/culture', 'controllers/about-culture.php');
$router->define('GET', 'contact', 'controllers/contact.php');
$router->define('POST', 'names', 'controllers/add-name.php');