<?php

require"../bootstrap.php";

use app\classes\Layout;
use app\classes\Routes;
use app\classes\Uri;


$routes = [
    '/' => 'controllers/index',
    '/create_user' => 'controllers/create_user',
    '/user_store' => 'controllers/user_store',
    '/user_update' => 'controllers/user_update',
    '/user_edit' => 'controllers/user_edit',
];

$uri = Uri::load();

$layout = new Layout;

require Routes::load($routes, $uri);
 
require $layout->master('layout');
 
