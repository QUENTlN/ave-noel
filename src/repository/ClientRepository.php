<?php

class ClientRepository{
    public function getClients(){
        $database = new Database();
        $connection = $database->getConnection();

        $result = $connection->query('SELECT * FROM client');
        return $result->fetchAll();
    }
}