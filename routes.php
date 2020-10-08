<?php
function call($controller, $action)
{
    require_once('controllers/' . $controller . '_controller.php');

    switch ($controller) {
        case 'home':
            $controller = new HomeController();
            break;
        case 'entry':
            $controller = new EntryController();
            break;
        case 'contact':
            $controller = new ContactController();
            break;
        case 'post':
            // we need the model to query the database later in the controller
            //require_once('models/post.php');
            $controller = new PostController();
            break;
    }

    $controller->{$action}();
}

// we're adding an entry for the new controller and its actions
$controllers = array(
    'home' => ['show'],
    'entry' => ['login', 'register'],
    'contact' => ['show'],
    'post' => ['show']
);

if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
        call($controller, $action);
    } else {
        call('home', 'error');
    }
} else {
    call('home', 'error');
}
