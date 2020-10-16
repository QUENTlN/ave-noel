<?php


namespace App\controllers;


class HomeController
{
    public function show()
    {
        require_once('src/views/home/home.php');
    }
}