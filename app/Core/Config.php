<?php

namespace App\Core;

use App\Core\ConfigInterface;

class Config implements ConfigInterface {

    protected array $config = [];

    public function __construct(array $_env)
    {
        $this->config = [
            'db' => [
                [
                    'driver' => $_env['DB_DRIVER'],
                    'host' => $_env['DB_HOST'],
                    'dbname' => $_env['DB_NAME'],
                    'user' => $_env['DB_USER'],
                    'password' => $_env['DB_PASSWORD'],
                ]
            ]
        ];
    }

    public function __get(string $name)
    {
        return $this->config[$name] ?? null;
    }

}