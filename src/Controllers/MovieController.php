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

        $file = $this->request()->file('image');
        dd($file->move('movies'));

        $validation = $this->request()->validate([
            'name' => ['required', 'min:3', 'max:50'],
        ]);

        if (! $validation) {

            foreach ($this->request()->errors() as $field => $errors) {
                $this->session()->set($field, $errors);
            }

            $this->redirect('/admin/movies/add');
        }

        $id = $this->db()->insert('movies', [
            'name' => $this->request()->input('name'),
        ]);

        dd('Success with id: '.$id);

    }
}
