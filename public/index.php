<?php
require_once "../vendor/autoload.php";

session_start();

$router = new App\config\Router();
$router->call();

