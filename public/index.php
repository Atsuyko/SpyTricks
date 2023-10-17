<?php

use Router\Router;

require '../vendor/autoload.php';

// Création variable globale pour appeler les vues
define('VIEWS', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);

// Création variable globale pour connexion BDD
define('DB_NAME', 'spytricks');
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PWD', '');

$router = new Router($_GET['url']);

$router->get('/', 'App\Controllers\HomeController@index');

$router->get('/mission', 'App\Controllers\MissionController@index');
$router->get('/mission/:code', 'App\Controllers\MissionController@show');

$router->run();
