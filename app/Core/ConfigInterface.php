<?php

namespace App\Core;

interface ConfigInterface {
    public function __get(string $name);
}