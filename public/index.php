<?php

use Router\Router;

require '../vendor/autoload.php';

// Creating global variable to call views
define('VIEWS', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);
define('SCRIPT', dirname($_SERVER['SCRIPT_NAME']) . DIRECTORY_SEPARATOR);

// Global variable creation for BDD connection
define('DB_NAME', 'spytricks');
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PWD', '');

$router = new Router($_GET['url']);

$router->get('/', 'App\Controllers\HomeController@index');

$router->get('/mission', 'App\Controllers\MissionController@index');
$router->get('/mission/:code', 'App\Controllers\MissionController@show');
$router->post('/mission/delete/:code', 'App\Controllers\MissionController@delete');
$router->get('/mission/edit/:code', 'App\Controllers\MissionController@edit');
$router->post('/mission/edit/:code', 'App\Controllers\MissionController@update');
$router->get('/mission/create', 'App\Controllers\MissionController@createGet');
$router->post('/mission/create', 'App\Controllers\MissionController@createPost');

$router->get('/admin', 'App\Controllers\AdminController@index');
$router->post('/admin/delete/:id', 'App\Controllers\AdminController@delete');
$router->get('/admin/edit/:id', 'App\Controllers\AdminController@edit');
$router->post('/admin/edit/:id', 'App\Controllers\AdminController@update');
$router->get('/admin/create', 'App\Controllers\AdminController@createGet');
$router->post('/admin/create', 'App\Controllers\AdminController@createPost');

$router->get('/agent', 'App\Controllers\AgentController@index');
$router->post('/agent/delete/:id', 'App\Controllers\AgentController@delete');
$router->get('/agent/edit/:id', 'App\Controllers\AgentController@edit');
$router->post('/agent/edit/:id', 'App\Controllers\AgentController@update');
$router->get('/agent/create', 'App\Controllers\AgentController@createGet');
$router->post('/agent/create', 'App\Controllers\AgentController@createPost');

$router->get('/contact', 'App\Controllers\ContactController@index');
$router->post('/contact/delete/:code', 'App\Controllers\ContactController@delete');
$router->get('/contact/edit/:code', 'App\Controllers\ContactController@edit');
$router->post('/contact/edit/:code', 'App\Controllers\ContactController@update');
$router->get('/contact/create', 'App\Controllers\ContactController@createGet');
$router->post('/contact/create', 'App\Controllers\ContactController@createPost');

$router->get('/country', 'App\Controllers\CountryController@index');
$router->post('/country/delete/:id', 'App\Controllers\CountryController@delete');
$router->get('/country/edit/:id', 'App\Controllers\CountryController@edit');
$router->post('/country/edit/:id', 'App\Controllers\CountryController@update');
$router->get('/country/create', 'App\Controllers\CountryController@createGet');
$router->post('/country/create', 'App\Controllers\CountryController@createPost');

$router->get('/hideout', 'App\Controllers\HideoutController@index');
$router->post('/hideout/delete/:code', 'App\Controllers\HideoutController@delete');
$router->get('/hideout/edit/:code', 'App\Controllers\HideoutController@edit');
$router->post('/hideout/edit/:code', 'App\Controllers\HideoutController@update');
$router->get('/hideout/create', 'App\Controllers\HideoutController@createGet');
$router->post('/hideout/create', 'App\Controllers\HideoutController@createPost');

$router->get('/speciality', 'App\Controllers\SpecialityController@index');
$router->post('/speciality/delete/:id', 'App\Controllers\SpecialityController@delete');
$router->get('/speciality/edit/:id', 'App\Controllers\SpecialityController@edit');
$router->post('/speciality/edit/:id', 'App\Controllers\SpecialityController@update');
$router->get('/speciality/create', 'App\Controllers\SpecialityController@createGet');
$router->post('/speciality/create', 'App\Controllers\SpecialityController@createPost');

$router->get('/target', 'App\Controllers\TargetController@index');
$router->post('/target/delete/:code', 'App\Controllers\TargetController@delete');
$router->get('/target/edit/:code', 'App\Controllers\TargetController@edit');
$router->post('/target/edit/:code', 'App\Controllers\TargetController@update');
$router->get('/target/create', 'App\Controllers\TargetController@createGet');
$router->post('/target/create', 'App\Controllers\TargetController@createPost');

try {
  $router->run();
} catch (\Exception $e) {
  echo $e->getMessage();
}
