<?php


namespace Core;

use App\controllers;


class Router
{
    const CONTROLLERS = array(
        'home' => ['show'],
        'entry' => ['login', 'register'],
        'contact' => ['show'],
        'post' => ['show']
    );

    private $controller;
    private $action;


    function __construct($controller, $action)
    {
        if (array_key_exists($controller, self::CONTROLLERS)) {
            $this->controller = $controller;
            if (in_array($action, self::CONTROLLERS[$controller])) {
                $this->action = $action;
            } else {
                $this->action = self::CONTROLLERS[$controller][0];
            }
        } else {
            $this->controller = 'home';
            $this->action = 'show';
        }
    }

    function call()
    {
        switch ($this->controller) {
            case 'home':
                $controller = new \App\controllers\HomeController();
                break;
            case 'entry':
                $controller = new \App\controllers\EntryController();
                break;
            case 'contact':
                $controller = new \App\controllers\ContactController();
                break;
            case 'post':
                // we need the model to query the database later in the controller
                //require_once('models/post.php');
                $controller = new \App\controllers\PostController();
                break;
        }

        $controller->{$this->action}();
    }
}