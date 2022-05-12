<?php

namespace App\Validation;

use App\Validation\ValidationInterface;

class Validation {

    public ValidationInterface $validationInterface;

    public function __construct(ValidationInterface $validationInterface)
    {
        $this->validationInterface = $validationInterface;
    }

    public function validate(): string
    {
       return $this->validationInterface->validate();
    }
}