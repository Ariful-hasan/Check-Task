<?php

require_once __DIR__ . '/app/bootstrap.php';

use App\Core\App;


/**
 * test only
 */
$db = App::db();
var_dump($db);