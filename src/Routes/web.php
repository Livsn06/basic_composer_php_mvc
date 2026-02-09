<?php

use App\Controllers\AboutController;
use App\Controllers\HomeController;
use App\Controllers\PortalController;
use App\Router;

$router = new Router();
$router->get('/', HomeController::class, 'index');
$router->get('/portal', PortalController::class, 'index');
$router->get('/about', AboutController::class, 'index');
$router->dispatch();
