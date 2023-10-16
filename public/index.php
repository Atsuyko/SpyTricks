<?php

use Router\Router;

require '../vendor/autoload.php';

// Création variable globale pour appeler les vues
define('VIEWS', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);

$router = new Router($_GET['url']);

$router->get('/', 'App\Controllers\MissionController@index');
$router->get('/mission/:code', 'App\Controllers\MissionController@show');

$router->run();
