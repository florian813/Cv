<?php

/** Initialisation de l'autoloading et du router ******************************/

require('src/Autoloader.php');
Autoloader::register();
session_start();

$router = new router\Router(basename(__DIR__));

/** Définition des routes *****************************************************/

// GET "/"
$router->get('/', 'controller\IndexController@index');

//GET CV
$router->get('/c', 'controller\CvController@cv');

// Erreur 404
$router->whenNotFound('controller\ErrorController@error');

//route /login
$router->post('/account/login','controller\AccountController@login');

//route /signin
$router->post('/signin','controller\AccountController@signin');

$router->get('/apropos','controller\AproposController@apropos');
/** Ecoute des requêtes entrantes *********************************************/

$router->listen();
