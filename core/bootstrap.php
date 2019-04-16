<?php

App::bind('config', require 'config.php');

App::bind('query', new QueryBuilder(
	Connection::make(App::get('config')['database'])
));

