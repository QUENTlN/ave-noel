<?php

namespace App\repository;

use App\config\Db;
use App\models\Client;

class ClientRepository
{

    public static function create($client)
    {
        $database = new Db();
        $connection = $database->checkConnection();

        $result = $connection->prepare('INSERT INTO client(id, username, mail, lastname, firstname, password, isadmin, iswriter, avatar_path, is_following_newsletter) VALUES (null,:username,:mail,:lastname,:firstname,:password,:isAdmin,:isWriter,:avatarPath,:isFollowingNewsletter)');
        $result->bindValue(':username', $client->getUsername(), \PDO::PARAM_STR);
        $result->bindValue(':mail', $client->getUsername(), \PDO::PARAM_STR);
        $result->bindValue(':lastname', $client->getLastname(), \PDO::PARAM_STR);
        $result->bindValue(':firstname', $client->getName(), \PDO::PARAM_STR);
        $result->bindValue(':password', password_hash($client->getPassword(), PASSWORD_BCRYPT), \PDO::PARAM_STR);
        $result->bindValue(':isAdmin', 0, \PDO::PARAM_STR);
        $result->bindValue(':isWriter', 0, \PDO::PARAM_STR);
        $result->bindValue(':avatarPath', "default-avatar.png", \PDO::PARAM_STR);
        $result->bindValue(':isFollowingNewsletter', $client->getIsFollowingNewsletter(), \PDO::PARAM_STR);
        $result->execute();
    }

    public static function read($idClient)
    {
        $database = new Db();
        $connection = $database->checkConnection();

        $result = $connection->prepare('SELECT * FROM client WHERE id = :idClient');
        $result->bindValue(':idClient', $idClient, \PDO::PARAM_INT);
        $result->execute();
        $clientDb = $result->fetch();
        $client = new Client();
        $client->setId($clientDb['id']);
        $client->setUsername($clientDb['username']);
        $client->setMail($clientDb['mail']);
        $client->setLastname($clientDb['lastname']);
        $client->setName($clientDb['firstname']);
        if ($clientDb['isadmin'] == 1) {
            $client->setIsAdmin(true);
        } else {
            $client->setIsAdmin(false);
        }
        if ($clientDb['iswriter'] == 1) {
            $client->setIsWriter(true);
        } else {
            $client->setIsWriter(false);
        }
        $client->setAvatarPath($clientDb['avatar_path']);
        $client->setLastConnectionAt($clientDb['last_connection_at']);
        if ($clientDb['is_following_newsletter'] == 1) {
            $client->setIsFollowingNewsletter(true);
        } else {
            $client->setIsFollowingNewsletter(false);
        }
        return $client;
    }

    public static function isAddressAlreadyUsed($email)
    {
        $database = new Db();
        $connection = $database->checkConnection();

        $result = $connection->prepare('SELECT COUNT(*) FROM client WHERE mail = :eMail');
        $result->bindValue(':eMail', $email, \PDO::PARAM_STR);
        $result->execute();

        if ($result->fetchColumn() > 0) {
            return true;
        }
        return false;
    }

    public static function isUsernameAlreadyUsed($username)
    {
        $database = new Db();
        $connection = $database->checkConnection();

        $result = $connection->prepare('SELECT COUNT(*) FROM client WHERE username = :username');
        $result->bindValue(':username', $username, \PDO::PARAM_STR);
        $result->execute();

        if ($result->fetchColumn() > 0) {
            return true;
        }
        return false;
    }

    public static function isCorrectLogin($client)
    {
        $database = new Db();
        $connection = $database->checkConnection();

        $result = $connection->prepare('SELECT password FROM client WHERE mail = :mail');
        $result->bindValue(':mail', $client->getMail(), \PDO::PARAM_STR);
        $result->execute();
        return password_verify($client->getPassword(), $result->fetchColumn());
    }

    public static function getIdClientByMail($mail)
    {

        $database = new Db();
        $connection = $database->checkConnection();

        $result = $connection->prepare('SELECT id FROM client WHERE mail = :mail ');
        $result->bindValue(':mail', $mail, \PDO::PARAM_STR);
        $result->execute();
        return $result->fetchColumn();
    }

    public static function updateLastConnectionAt($idClient)
    {
        $database = new Db();
        $connection = $database->checkConnection();

        $result = $connection->prepare('UPDATE client SET last_connection_at = :lastConnnectionAt WHERE id = :id');
        $result->bindValue(':lastConnnectionAt', date('Y-m-d H:i:s'), \PDO::PARAM_STR);
        $result->bindValue(':id', $idClient, \PDO::PARAM_INT);
        $result->execute();
    }
}