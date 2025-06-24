<?php

namespace App\Controllers;

use App\Kernel\Controller\Conrtoller;

class HomeController extends Conrtoller
{
    public function index(): void
    {
        $this->view('home');
    }
}
