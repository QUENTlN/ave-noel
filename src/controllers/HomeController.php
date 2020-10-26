<?php


namespace App\controllers;

use App\repository\ClientRepository;
use App\repository\PostRepository;

class HomeController
{
    public function show()
    {
        $posts = PostRepository::getPosts();
        require_once('../src/views/home/home.php');
    }
}