<?php

namespace App\repository;

use App\config\Db;
use App\models\Client;

class ClientRepository{
    public static function read($idClient){
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
        $client->setName($clientDb['name']);
        $client->setIsAdmin($clientDb['isadmin']);
        $client->setAvatarPath($clientDb['avatar_path']);
        $client->setLastConnectionAt($clientDb['last_connection_at']);
        return $client;
    }
}