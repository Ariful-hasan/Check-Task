<?php

namespace App\Repositories;

use App\Model\Blog;

class BlogRepository implements RepositoryInterface {

    protected Blog $blog;

    public function __construct(Blog $blog)
    {
        $this->blog = $blog;
    }

    public function create()
    {
        
    }
}