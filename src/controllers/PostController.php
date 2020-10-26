<?php


namespace App\controllers;


use App\repository\PostRepository;
use App\repository\CommentRepository;
use App\models\Post;

class PostController
{
    public function show()
    {
        $post = PostRepository::read($_GET['post']);
        $comments = CommentRepository::getComments($post->getId());
        require_once('../src/views/post/post.php');
    }

    public function create(){
        if (isset($_POST['idPost'])){
            $post = new Post();
            $post->setIdClient($_POST['idClient']);
            $post->setContent($_POST['content']);
            $post->setTitle($_POST['title']);
            $post->setSubject($_POST['subject']);
            $post->setCreatedAt(date('Y-m-d H:i:s'));
            PostRepository::create($post);
        }
        header('Location: index.php');
    }

    public function update(){
        if (isset($_POST['idPost'])) {
            $post = new Post();
            $post->setId($_POST['idPost']);
            $post->setContent($_POST['content']);
            $post->setTitle($_POST['title']);
            $post->setSubject($_POST['subject']);
            $post->setUpdatedAt(date('Y-m-d H:i:s'));
            PostRepository::update($post);
            header('Location: index.php?controller=post&post=' . $post->getId());
        }else{
            header('Location: index.php');
        }
    }

    public function delete(){
        if (isset($_POST['idPost'])) {
            $post = new Post();
            $post->setId($_POST['idPost']);
            $post->setDeletedAt(date('Y-m-d H:i:s'));
            PostRepository::delete($post);
        }
        header('Location: index.php');
    }
}