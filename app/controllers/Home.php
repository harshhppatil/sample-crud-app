<?php

class Home extends Controller
{
    public function __construct()
    {
        // You can load models here if needed
        // $this->userModel = $this->model('User');
    }

    public function index()
    {
        $data = [
            'title' => 'Welcome to Sample CRUD App',
            'description' => 'Simple MVC framework for CRUD operations'
        ];

        $this->view('home/index', $data);
    }
}
