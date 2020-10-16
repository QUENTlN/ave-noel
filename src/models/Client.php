<?php

namespace App\src\models\Client;

use App\src\config\Db;

class Client
{
    private int $id;
    private String $name;
    private String $lastname;
    private String $email;
    private String $password;
    private String $avatarPath;
    private boolean $isAdmin;
    private \DateTime $lastConnection;

    public function __construct($id, $name, $lastname, $email, $password, $avatarPath, $isAdmin, $lastConnection)
    {
        $this->id = $id;
        $this->name = $name;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->password = $password;
        $this->avatarPath = $avatarPath;
        $this->isAdmin = $isAdmin;
        $this->lastConnection = $lastConnection;
    }
}