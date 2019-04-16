<?php

$data = [
	'name' => $_POST['name'],
];
App::get('query')->insert('users', $data);

header('Location: /');