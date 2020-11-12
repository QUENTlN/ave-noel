<?php

namespace App\repository;

use App\config\Db;
use App\models\Post;

class PostRepository
{
    public static function getPosts()
    {
        $database = new Db();
        $connection = $database->checkConnection();

        $result = $connection->prepare('SELECT * FROM post WHERE deleted_at IS NULL');
        $result->execute();
        $posts = [];
        foreach ($result->fetchAll() as $line) {
            $post = new Post();

            $post->setId($line['id']);
            $post->setIdClient($line['id_client']);
            $post->setContent(preg_replace('/(.{1,300}).*/i', '${1}...', $line['content']));
            $post->setTitle($line['title']);
            $post->setSubject($line['subject']);
            $post->setCreatedAt($line['created_at']);
            $post->setUpdatedAt($line['updated_at']);
            $post->setDeletedAt($line['deleted_at']);
            $client = $connection->prepare('SELECT username FROM client WHERE id = :idClient');
            $client->bindValue(':idClient', $post->getIdClient(), \PDO::PARAM_INT);
            $client->execute();
            $post->setUsername($client->fetchColumn());

            $posts[] = $post;
        }
        return $posts;
    }

    public static function getPostsOfClient($idClient)
    {
        $database = new Db();
        $connection = $database->checkConnection();

        $result = $connection->prepare('SELECT * FROM post WHERE deleted_at IS NULL AND id_client = :idClient');
        $result->bindValue(':idClient', $idClient, \PDO::PARAM_INT);
        $result->execute();
        $posts = [];
        foreach ($result->fetchAll() as $line) {
            $post = new Post();

            $post->setId($line['id']);
            $post->setIdClient($line['id_client']);
            $post->setContent(preg_replace('/(.{1,300}).*/i', '${1}...', $line['content']));
            $post->setTitle($line['title']);
            $post->setSubject($line['subject']);
            $post->setCreatedAt($line['created_at']);
            $post->setUpdatedAt($line['updated_at']);
            $post->setDeletedAt($line['deleted_at']);
            $client = $connection->prepare('SELECT username FROM client WHERE id = :idClient');
            $client->bindValue(':idClient', $post->getIdClient(), \PDO::PARAM_INT);
            $client->execute();
            $post->setUsername($client->fetchColumn());

            $posts[] = $post;
        }
        return $posts;
    }

    public static function create($post)
    {
        $database = new Db();
        $connection = $database->checkConnection();
        $result = $connection->prepare('INSERT INTO post(id, id_client, content, title, subject, created_at, updated_at, deleted_at) VALUES (null, :idClient,:content,:title,:subject,:createdAt,null,null)');
        $result->bindValue(':idClient', $post->getIdClient(), \PDO::PARAM_INT);
        $result->bindValue(':content', $post->getContent(), \PDO::PARAM_STR);
        $result->bindValue(':title', $post->getTitle(), \PDO::PARAM_STR);
        $result->bindValue(':subject', $post->getSubject(), \PDO::PARAM_STR);
        $result->bindValue(':createdAt', $post->getCreatedAt(), \PDO::PARAM_STR);
        $result->execute();
    }


    public static function read($id_post)
    {
        $database = new Db();
        $connection = $database->checkConnection();

        $result = $connection->prepare('SELECT * FROM post WHERE id = :idPost AND deleted_at IS NULL');
        $result->bindValue(':idPost', $id_post, \PDO::PARAM_INT);
        $result->execute();
        $postDb = $result->fetch();

        if ($postDb) {
            $post = new Post();
            $post->setId($postDb['id']);
            $post->setIdClient($postDb['id_client']);
            $post->setContent($postDb['content']);
            $post->setTitle($postDb['title']);
            $post->setSubject($postDb['subject']);
            $post->setCreatedAt($postDb['created_at']);
            $post->setUpdatedAt($postDb['updated_at']);
            $post->setDeletedAt($postDb['deleted_at']);
            $client = $connection->prepare('SELECT username FROM client WHERE id = :idClient');
            $client->bindValue(':idClient', $post->getIdClient(), \PDO::PARAM_INT);
            $client->execute();
            $post->setUsername($client->fetchColumn());

            return $post;
        }
    }

    public static function update($post)
    {
        $database = new Db();
        $connection = $database->checkConnection();
        $result = $connection->prepare('UPDATE post SET content = :content, title = :title, subject = :subject, updated_at = :updatedAt WHERE id = :id ');
        $result->bindValue(':id', $post->getId(), \PDO::PARAM_INT);
        $result->bindValue(':content', $post->getContent(), \PDO::PARAM_STR);
        $result->bindValue(':title', $post->getTitle(), \PDO::PARAM_STR);
        $result->bindValue(':subject', $post->getSubject(), \PDO::PARAM_STR);
        $result->bindValue(':updatedAt', $post->getUpdatedAt(), \PDO::PARAM_STR);
        $result->execute();
    }

    public static function delete($post)
    {
        $database = new Db();
        $connection = $database->checkConnection();
        $result = $connection->prepare('UPDATE post SET deleted_at = :deletedAt WHERE id = :id ');
        $result->bindValue(':id', $post->getId(), \PDO::PARAM_INT);
        $result->bindValue(':deletedAt', $post->getDeletedAt(), \PDO::PARAM_STR);
        $result->execute();
    }

    public static function isTheAuthor($idClient, $idPost)
    {
        $database = new Db();
        $connection = $database->checkConnection();

        $result = $connection->prepare('SELECT COUNT(*) FROM post WHERE id = :idPost AND id_client = :idClient');
        $result->bindValue(':idPost', $idPost, \PDO::PARAM_INT);
        $result->bindValue(':idClient', $idClient, \PDO::PARAM_INT);
        $result->execute();
        if ($result->fetchColumn() == 1) {
            return true;
        }
        return false;
    }
}