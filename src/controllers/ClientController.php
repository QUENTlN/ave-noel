<?php


namespace App\controllers;


class ClientController
{
    public function show()
    {
        $post = ClientRepository::read($_GET['post']);
        $comments = CommentRepository::getPost($post->getId());
        require_once('../src/views/post/post.php');
    }
}