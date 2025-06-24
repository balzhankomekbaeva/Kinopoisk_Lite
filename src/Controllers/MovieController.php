<?php

namespace App\Controllers;

use App\Kernel\Controller\Conrtoller;

class MovieController extends Conrtoller
{
    public function index(): void
    {
        $this->view('movies');

    }

    public function add(): void
    {
        $this->view('admin/movies/add');
    }

    public function store(): void
    {
        dd('store');
    }
}
