<?php 

return [

	'database' => [
		'name' => 'task',
		'username' => 'root',
		'password' => 'huy',
		'connection' => 'mysql:host=127.0.0.1',
		'options' => [
			PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
		]
	]
];