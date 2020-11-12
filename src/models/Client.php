<?php

namespace App\models;

class Client
{
    private $id;
    private $username;
    private $name;
    private $lastname;
    private $mail;
    private $password;
    private $avatarPath;
    private $isAdmin;
    private $isWriter;
    private $lastConnectionAt;
    private $isFollowingNewsletter;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Client
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     * @return Client
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return Client
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     * @return Client
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @param mixed $mail
     * @return Client
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     * @return Client
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAvatarPath()
    {
        return $this->avatarPath;
    }

    /**
     * @param mixed $avatarPath
     * @return Client
     */
    public function setAvatarPath($avatarPath)
    {
        $this->avatarPath = $avatarPath;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsAdmin()
    {
        return $this->isAdmin;
    }

    /**
     * @param mixed $isAdmin
     * @return Client
     */
    public function setIsAdmin($isAdmin)
    {
        $this->isAdmin = $isAdmin;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsWriter()
    {
        return $this->isWriter;
    }

    /**
     * @param mixed $isWriter
     * @return Client
     */
    public function setIsWriter($isWriter)
    {
        $this->isWriter = $isWriter;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLastConnectionAt()
    {
        return $this->lastConnectionAt;
    }

    /**
     * @param mixed $lastConnectionAt
     * @return Client
     */
    public function setLastConnectionAt($lastConnectionAt)
    {
        $this->lastConnectionAt = $lastConnectionAt;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsFollowingNewsletter()
    {
        return $this->isFollowingNewsletter;
    }

    /**
     * @param mixed $isFollowingNewsletter
     * @return Client
     */
    public function setIsFollowingNewsletter($isFollowingNewsletter)
    {
        $this->isFollowingNewsletter = $isFollowingNewsletter;
        return $this;
    }

}