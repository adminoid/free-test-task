<?php

require 'vendor/autoload.php';

session_start();

//use App\SQLiteConnection;


use App\Router;

$router = new Router();
$router->runController();

session_destroy();
