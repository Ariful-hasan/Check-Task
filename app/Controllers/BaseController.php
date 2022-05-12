<?php

namespace App\Controllers;

use App\Validation\Validator;

class BaseController {

    public function __construct(protected Validator $validator)
    {
        
    }
}