<?php

namespace App\src\config\Db;

class Db {
    const DB_HOST = 'mysql:host=localhost;dbname=ave-noel';
    const DB_USER = 'root';
    const DB_PASSWORD = '';

    public function getConnection(){

        try{
            $connection = new PDO(self::DB_HOST,self::DB_USER, self::DB_PASSWORD);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $connection;

        } catch (Exception $exception){
            die('Database connection failed: ' . $exception->getMessage());
        }
    }
}
