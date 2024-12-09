<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$route['default_controller'] = 'Accueil';
$route['connexion/client'] = 'Connexion/client';
$route['connexion/agent'] = 'Connexion/agent';
$route['connexion/creation'] = 'Connexion/creation';
