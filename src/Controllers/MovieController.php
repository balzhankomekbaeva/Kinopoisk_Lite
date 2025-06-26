<?php

namespace App\Controllers;

use App\Kernel\Controller\Conrtoller;
use App\Kernel\Validator\Validator;

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
        $data = ['name' => 'Balzhana'];
        $rules = ['name' => ['required', 'min:3', 'max:255']];

        $validator = new Validator;
        dd($validator->validate($data, $rules), $validator->errors());
        dd($this->request()->input('name'));
    }
}
