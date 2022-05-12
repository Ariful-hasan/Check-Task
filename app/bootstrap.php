<?php

require_once __DIR__ . '../../vendor/autoload.php';

use App\Core\App;
use App\Core\Config;
use App\Route\Router;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

new App(new Config($_ENV));


/**
 * register all routes
 */
$router = new Router();

$router
    ->get('/', [App\Controllers\HomeController::class, 'index']);

$router->resolve($_SERVER['REQUEST_URI'], strtolower($_SERVER['REQUEST_METHOD']));