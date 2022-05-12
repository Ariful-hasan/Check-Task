<?php

namespace App\Controllers;

use App\Controllers\BaseController;


/**
 * PostController
 * for blog post
 */
class PostController extends BaseController {

    public array $request;

    public function __construct()
    {
        $this->request = $_REQUEST;
    }
    
    /**
     * setBlogValidationRule
     *
     * @return array
     */
    public function setBlogValidationRule(): array
    {
        return $requests = [
            [
                'name' => 'title',
                'value' => $this->request['title'],
                'rules' => REQUIRED
            ],[
                'name' => 'post',
                'value' => $this->request['post'],
                'rules' => REQUIRED
            ]
        ];
    }
    
    /**
     * index
     * 
     * @return view as string
     */
    public function index(): string
    {        
        /**
         * implementing leter
         */
        //return view('filename', [data]);
        return "blog list";
    }

    public function create()
    {
        $errors = $this->validator->validate($this->setBlogValidationRule());

        if (!empty($errors)) {
            return $errors;
        }

        
    }
}