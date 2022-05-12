<?php

namespace App\Validation;

use App\Validation\Validation;
use App\Validation\Email;
use App\Validation\Numeric;
use App\Validation\Required;

class Validator {

    public static function validate (array $requests = []): array
    {
        $errors = [];

        if (empty($requests)){
            throw new \Exception('Empty validation arguments.');
        }

        foreach ($requests as $request) 
        {
            $rules = explode("|", $request[RULES]);

            foreach ($rules as $rule) 
            {
                $error = "";

                if ($rule === EMAIL) 
                {
                    $error = (new Validation(new Email($request[NAME], $request[VALUE])))->validate();
                } 
                elseif ($rule === NUMERIC)
                {
                    $error = (new Validation(new Numeric($request[NAME], $request[VALUE])))->validate();
                }
                elseif ($rule === REQUIRED)
                {
                    $error = (new Validation(new Required($request[NAME], $request[VALUE])))->validate();
                }

                if ($error)
                    $errors[$request[NAME]][ERRORS][] = $error;
            }
        }

        return $errors;
    }
}