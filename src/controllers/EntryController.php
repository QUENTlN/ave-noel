<?php


namespace App\controllers;


class EntryController
{
    public function login()
    {
        require_once('../src/views/entry/login.php');
    }

    public function register()
    {
        require_once('../src/views/entry/register.php');
    }
}