<?php

$config = [
	'database' => [
		'connection' => 'mysql:host=127.0.0.1',
		'dbname' => 'mytodo',
		'username' => 'root',
		'password' => '123mysql321',
		'options' => [
			PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
		]
	]
];

return $config;