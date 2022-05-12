<?php

namespace App\Validation;


Interface ValidationInterface 
{
    public function __construct (string $name, string $value);

    public function validate(): string;
}
