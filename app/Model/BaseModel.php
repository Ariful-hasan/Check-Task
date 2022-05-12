<?php

namespace App\Model;

use App\Core\App;

abstract class BaseModel {

    protected string $tableName;

    protected array $fillable;

    public function __construct(protected $db)
    {
        $this->db = App::db();
    }

    public function create()
    {
        $query = ""
    }
}