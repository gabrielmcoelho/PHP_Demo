<?php 

$tasks = $app['query']->selectAll('tasks');

require 'views/index.view.php';