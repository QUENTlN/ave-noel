<?php


namespace App\repository;


use App\config\Db;
use App\models\Comment;

class CommentRepository
{
    public static function getComments($idPost)
    {
        $database = new Db();
        $connection = $database->checkConnection();

        $result = $connection->prepare('SELECT * FROM comment WHERE id_post = :idPost AND deleted_at IS NULL');
        $result->bindValue(':idPost', $idPost, \PDO::PARAM_INT);
        $result->execute();
        $comments = [];
        foreach ($result->fetchAll() as $line) {
            $comment = new Comment();

            $comment->setId($line['id']);
            $comment->setIdClient($line['id_client']);
            $comment->setIdPost($line['id_post']);
            $comment->setContent($line['content']);
            $comment->setCreatedAt($line['created_at']);
            $comment->setUpdatedAt($line['updated_at']);
            $comment->setDeletedAt($line['deleted_at']);
            $client = $connection->prepare('SELECT username, avatar_path FROM client WHERE id = :idClient');
            $client->bindValue(':idClient', $comment->getIdClient(), \PDO::PARAM_INT);
            $client->execute();
            $client = $client->fetch();
            $comment->setUsername($client['username']);
            $comment->setAvatarPath($client['avatar_path']);

            $comments[] = $comment;
        }
        return $comments;
    }

    public static function create($comment)
    {
        $database = new Db();
        $connection = $database->checkConnection();
        $result = $connection->prepare('INSERT INTO comment(id, id_client, id_post, content, created_at) VALUES (null, :idClient, :idPost, :content, :createdAt)');
        $result->bindValue(':idClient', $comment->getIdClient(), \PDO::PARAM_INT);
        $result->bindValue(':idPost', $comment->getIdPost(), \PDO::PARAM_INT);
        $result->bindValue(':content', $comment->getContent(), \PDO::PARAM_STR);
        $result->bindValue(':createdAt', $comment->getCreatedAt(), \PDO::PARAM_STR);
        $result->execute();
    }

    public static function update($comment)
    {
        $database = new Db();
        $connection = $database->checkConnection();
        $result = $connection->prepare('UPDATE comment SET content = :content, updated_at = :updatedAt WHERE id = :id');
        $result->bindValue(':id', $comment->getId(), \PDO::PARAM_INT);
        $result->bindValue(':content', $comment->getContent(), \PDO::PARAM_STR);
        $result->bindValue(':updatedAt', $comment->getUpdatedAt(), \PDO::PARAM_STR);
        $result->execute();
    }

    public static function delete($comment)
    {
        $database = new Db();
        $connection = $database->checkConnection();
        $result = $connection->prepare('UPDATE comment SET deleted_at = :deletedAt WHERE id = :id ');
        $result->bindValue(':id', $comment->getId(), \PDO::PARAM_INT);
        $result->bindValue(':deletedAt', $comment->getDeletedAt(), \PDO::PARAM_STR);
        $result->execute();
    }
}