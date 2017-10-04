<?php 

use core\App;
use core\database\{Connection, QueryBuilder};

function view($name, $data = [])
{
	extract($data);
	return require "app/views/{$name}.view.php";
}

function redirect($path)
{
	return header("Location: /{$path}");
}

App::bind('config', require "config.php");

App::bind('database', new QueryBuilder(
	Connection::make(App::get('config')['database'])
));

//khi bien $data = [] co nghia neu ham view k0 co tham so $data thi mac dinh la rong