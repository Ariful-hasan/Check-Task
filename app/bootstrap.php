<?php

require_once __DIR__ . '../../vendor/autoload.php';

use App\Core\App;
use App\Core\Config;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

new App(new Config($_ENV));


// (new App(
//     ['db_config' => [
//         'driver' => $_ENV['DB_DRIVER'],
//         'host' => $_ENV['DB_HOST'],
//         'dbname' => $_ENV['DB_NAME'],
//         'user' => $_ENV['DB_USER'],
//         'password' => $_ENV['DB_PASSWORD'],
//         ]
//     ]
// ));