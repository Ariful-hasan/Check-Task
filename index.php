<?php

// require_once __DIR__ . '/app/bootstrap.php';

// use App\Core\App;
// use App\Validation\Validator;


/**
 * test only
 */

 //db connection done.
// $db = App::db();
// var_dump($db);

//validation done.
$requests = [
    [
        'name' => 'Email',
        'value' => 'arif@',
        'rules' => 'required'
    ],

    [
        'name' => 'Numeric',
        'value' => 123,
        'rules' => 'required'
    ],

    [
        'name' => 'Required',
        'value' => 'asas',
        'rules' => 'required'
    ]
];

// $errors = [];
// try {
//     $errors = Validator::validate($requests);
// } catch (\Throwable $th) {
//     echo $th->getMessage().' - '.$th->getCode();
// }
// print_r($errors);

 function getFieldNames()
{
    global $requests;
    $fields = [];
    $values = [];
    $data = [];
    if (!empty($requests)) {
        foreach ($requests as $request) {
            $fields[] = $request['name'];
            $data[] = $request['value'];
            
            $values[] = "?";
        }
    }
    
    $query = " (". implode("," ,$fields). ") ";
    $query .= " VALUES (". implode("," ,$values). ") ";


    var_dump($data);die;
    var_dump($query);die;


}

// getFieldNames();

$cond = ["id" => 1, "title" => "sds"];

foreach ($cond as $key => $value) {
    var_dump($key);
    var_dump($value);
}