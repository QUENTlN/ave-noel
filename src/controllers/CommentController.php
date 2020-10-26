<?php


namespace App\controllers;


use App\models\Comment;
use App\repository\CommentRepository;

class CommentController
{
    public function create()
    {
        if (isset($_POST['idClient'])){
            $comment = new Comment();
            $comment->setIdClient($_POST['idClient']);
            $comment->setIdPost($_POST['idPost']);
            $comment->setContent($_POST['content']);
            $comment->setCreatedAt(date('Y-m-d H:i:s'));
            CommentRepository::create($comment);
            header('location:index.php?controller=post&post='.$comment->getIdPost());
        }else{
            header('location:index.php');
        }
    }

    public function update()
    {
        if (isset($_POST['idComment'])){
            $comment = new Comment();
            $comment->setId($_POST['idComment']);
            $comment->setIdPost($_POST['idPost']);
            $comment->setContent($_POST['content']);
            $comment->setUpdatedAt(date('Y-m-d H:i:s'));
            CommentRepository::update($comment);
            header('Location: index.php?controller=post&post='.$comment->getIdPost());
        }else{
            header('location:index.php');
        }
    }

    public function delete()
    {
        if (isset($_POST['idComment'])) {
            $comment = new Comment();
            $comment->setId($_POST['idComment']);
            $comment->setIdPost($_POST['idPost']);
            $comment->setDeletedAt(date('Y-m-d H:i:s'));
            CommentRepository::delete($comment);
            header('Location: index.php?controller=post&post='.$comment->getIdPost());
        }else{
            header('Location: index.php');
        }
    }
}