<?php

require_once __DIR__ . '../../vendor/autoload.php';

use App\Core\App;
use App\Core\Config;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

new App(new Config($_ENV));