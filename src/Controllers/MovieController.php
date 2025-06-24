<?php

namespace App\Controllers;

use App\Kernel\Controller\Conrtoller;

class MovieController extends Conrtoller
{
    public function index(): void
    {
        $this->view('movies');

    }
}
