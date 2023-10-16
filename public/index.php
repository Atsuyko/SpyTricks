<?php

use Router\Router;

require '../vendor/autoload.php';

$router = new Router($_GET['url']);

$router->get('/', 'App\Controllers\MissionController@index');
$router->get('/mission/:code', 'App\Controllers\MissionController@show');

$router->run();
