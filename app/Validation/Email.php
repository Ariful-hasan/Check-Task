<?php

namespace App\Validation;

use App\Validation\ValidationInterface;

class Email implements ValidationInterface {

    public function __construct(protected string $name, protected string $value)
    {
        
    }

    public function validate(): string
    {
        if (!filter_var($this->value, FILTER_VALIDATE_EMAIL)){
            return "$this->name is not a valid email!";
        }

        return "";
    }
}