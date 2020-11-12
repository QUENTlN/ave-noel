<?php


namespace App\controllers;


use App\models\Client;
use App\repository\ClientRepository;
use App\config\Session;

class EntryController
{
    private $session;

    public function __construct()
    {
        if (!isset($this->session)) {
            $this->session = new Session;
        }
    }

    public function login()
    {
        if(isset($_COOKIE["rememberMe"])){
            header('Location: index.php?controller=entry&action=checkLogin');
        }
        if (!isset($_SESSION['session_validity'])) {
            require_once('../src/views/entry/login.php');
        } else {
            header('Location: index.php?controller=home');
        }
    }

    public function register()
    {
        if (!isset($_SESSION['session_validity'])) {
            require_once('../src/views/entry/register.php');
        } else {
            header('Location: index.php?controller=home');
        }
    }

    public function checkLogin()
    {
        if ((isset($_POST['email']) && isset($_POST['password'])) || (isset($_COOKIE['email']) && isset($_COOKIE['password']))) {
            if (isset($_POST['email']) && isset($_POST['password'])){
                $email = $_POST['email'];
                $password = $_POST['password'];
            }else{
                $email = $_COOKIE['email'];
                $password = $_COOKIE['password'];
            }
            $client = new Client();
            $client->setMail($email);
            $client->setPassword($password);
            if (ClientRepository::isCorrectLogin($client)) {
                if(isset($_POST['rememberMe'])){
                    setcookie("rememberMe", true, strtotime('+7 days'));
                    setcookie("email", $client->getMail(), strtotime('+7 days'));
                    setcookie("password", $client->getPassword(), strtotime('+7 days'));
                }
                $idClient = ClientRepository::getIdClientByMail($client->getMail());
                $client = ClientRepository::read($idClient);
                ClientRepository::updateLastConnectionAt($idClient);
                $_SESSION["session_validity"] = true;
                $_SESSION["id"] = $client->getId();
                $_SESSION["username"] = $client->getUsername();
                $_SESSION["firstname"] = $client->getName();
                $_SESSION["lastname"] = $client->getLastname();
                $_SESSION["mail"] = $client->getMail();
                $_SESSION["avatarPath"] = $client->getAvatarPath();
                $_SESSION["isAdmin"] = $client->getIsAdmin();
                $_SESSION["isWriter"] = $client->getIsWriter();
                header('Location: index.php');
            } else {
                $this->session->set('error', "Mot de passe ou identifiant incorrect");
                header('Location: index.php?controller=entry&action=login');
            }
        } else {
            header('Location: index.php');
        }
    }

    public function logout()
    {
        if (isset($_SESSION["session_validity"])) {
            session_destroy();
            unset($_COOKIE['rememberMe']);
            unset($_COOKIE['email']);
            unset($_COOKIE['password']);
            header('Location: index.php?controller=home');
        }
    }

    public function checkRegister()
    {
        if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password-confirm']) && isset($_POST['username'])) {
            if ($_POST['password'] === $_POST['password-confirm']) {
                if (!ClientRepository::isAddressAlreadyUsed($_POST['email'])) {
                    if (!ClientRepository::isUsernameAlreadyUsed($_POST['username'])) {
                        $client = new Client();
                        $client->setUsername($_POST['username']);
                        $client->setMail($_POST['email']);
                        $client->setPassword($_POST['password']);
                        $client->setLastname($_POST['lastname']);
                        $client->setName($_POST['name']);
                        if (isset($_POST['isFollowingNewsletter'])) {
                            $client->setIsFollowingNewsletter(1);
                        } else {
                            $client->setIsFollowingNewsletter(0);
                        }
                        ClientRepository::create($client);
                        header('Location: index.php?controller=home');
                    } else {
                        $this->session->set('error', "ce pseudo est déjà utlisé pour un autre compte");
                        header('Location: index.php?controller=entry&action=register');
                    }
                } else {
                    $this->session->set('error', "l'adresse mail est déjà utlisé pour un autre compte");
                    header('Location: index.php?controller=entry&action=register');
                }
            } else {
                $this->session->set('error', "les mots de passe ne sont pas identiques");
                header('Location: index.php?controller=entry&action=register');
            }
        } else {
            header('Location: index.php?controller=entry&action=register');
        }
    }
}