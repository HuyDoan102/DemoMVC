<?php 

require "core/Autoload.php";
require "core/bootstrap.php";

new core\Autoload;
use core\{Router, Request};


// $rou = new core\Router;


Router::load('app/routes.php')->direct(Request::uri(), Request::method());

// Router::load("app/routes.php")->direct(Request::uri(), Request::method());
// Router::load("app/routes.php");


