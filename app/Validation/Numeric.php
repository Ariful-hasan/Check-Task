<?php

namespace App\Validation;

use App\Validation\ValidationInterface;

class Numeric implements ValidationInterface {

    public function __construct(protected string $name, protected string $value)
    {
        
    }

    public function validate(): string
    {
        if (!is_numeric($this->value)) {
            return "$this->name is not a numeric field!";
        }

        return "";
    }
}