<?php

require_once __DIR__ . '/app/bootstrap.php';

use App\Core\App;
use App\Validation\Validator;


/**
 * test only
 */

 //db connection done.
$db = App::db();
var_dump($db);

//validation done.
$requests = [
    [
        'name' => 'Email',
        'value' => 'arif@',
        'rules' => REQUIRED.'|'.EMAIL
    ],

    [
        'name' => 'Numeric',
        'value' => 123,
        'rules' => REQUIRED.'|'.NUMERIC
    ],

    [
        'name' => 'Required',
        'value' => 'asas',
        'rules' => REQUIRED
    ]
];

$errors = [];
try {
    $errors = Validator::validate($requests);
} catch (\Throwable $th) {
    echo $th->getMessage().' - '.$th->getCode();
}
print_r($errors);