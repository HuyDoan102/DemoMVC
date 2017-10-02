<?php 

// use core\App;

function view($name, $data = [])
{
	extract($data);
	return require "app/views/{$name}.view.php";
}
/*App::bind('config', require "config.php");

App::bind('database', new QueryBuilder(
	Connection::make(App::get('config')['database'])
));*/

//khi bien $data = [] co nghia neu ham view k0 co tham so $data thi mac dinh la rong