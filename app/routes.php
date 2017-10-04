<?php 

$router->get("", "HomeController@index");
$router->get("about", "HomeController@about");
$router->get("contact", "HomeController@contact");

$router->get("tasks", "TaskController@index");

$router->post("tasks/insert", "TaskController@store");
$router->post("task/delete", "TaskController@delete");
$router->get("task/show", "TaskController@show");
$router->post("task/edit", "TaskController@edit");
