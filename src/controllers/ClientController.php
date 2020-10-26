<?php


namespace App\controllers;


use App\repository\ClientRepository;
use App\repository\CommentRepository;
use App\repository\PostRepository;

class ClientController
{
    public function show()
    {
        $posts = PostRepository::getPostsOfClient($_GET['idClient']);
        $client = ClientRepository::read($_GET['idClient']);
        require_once('../src/views/client/posts.php');
    }
}