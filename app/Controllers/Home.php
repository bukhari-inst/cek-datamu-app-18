<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('components/header');
        echo view('components/sidebar');
        echo view('components/topbar');
        echo view('pages/home/index');
        echo view('components/footer');
    }
}