<?php
require_once('connection.php');

if (isset($_GET['controller'])) {
    $controller = $_GET['controller'];
    if (isset($_GET['action'])) {
        $action = $_GET['action'];
    } else {
        $action = "show";
    }
} else {
    $controller = 'home';
}

require_once('views/layout.php');
