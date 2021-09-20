<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'ADMIN'
        ];
        echo view('components/header', $data);
        echo view('components/sidebar');
        echo view('components/topbar');
        echo view('admin/index');
        echo view('components/footer');
        echo view('pages/home');
    }
}