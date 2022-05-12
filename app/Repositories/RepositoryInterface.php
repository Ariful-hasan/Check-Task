<?php

namespace App\Repositories;

use App\Model\BaseModel;

interface RepositoryInterface {

    public function __construct(BaseModel $baseModel);

    public function create();
}