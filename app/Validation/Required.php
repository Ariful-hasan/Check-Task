<?php

namespace App\Validation;

use App\Validation\ValidationInterface;

class Required implements ValidationInterface {

    public function __construct(protected string $name, protected string $value)
    {
        
    }

    public function validate(): string
    {
        if (strlen($this->value) === 0){
            return "$this->name is a required field!";
        }

        return "";
    }
}