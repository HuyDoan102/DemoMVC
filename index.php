<?php 

require "core/Autoload.php";
new core\Autoload;

require "core/bootstrap.php";

use core\Router;
use core\Request;

Router::load('app/routes.php')->direct(Request::uri(), Request::method());


// $task = new app\controllers\TaskController;
// $task->tasks();

// Router::load("app/routes.php")->direct(Request::uri(), Request::method());
// Router::load("app/routes.php");


