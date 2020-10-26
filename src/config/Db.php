<?php

namespace App\config;

use \PDO;

class Db {
    const DB_HOST = 'mysql:host=localhost;dbname=avenoel';
    const DB_USER = 'root';
    const DB_PASSWORD = '';

    private $connection;

    public function getConnection(){

        try{
            $this->connection = new PDO(self::DB_HOST,self::DB_USER, self::DB_PASSWORD);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->connection;

        } catch (Exception $exception){
            die('Database connection failed: ' . $exception->getMessage());
        }
    }

    public function checkConnection(){
        if (!isset($this->connection)){
            return $this->getConnection();
        }
        return $this->connection;
    }
}
