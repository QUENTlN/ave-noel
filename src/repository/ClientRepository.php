<?php

namespace App\repository;

use App\config\Db;

class ClientRepository{
    public function getClients(){
        $database = new Database();
        $connection = $database->checkConnection();

        $result = $connection->query('SELECT * FROM client');
        return $result->fetchAll();
    }
}