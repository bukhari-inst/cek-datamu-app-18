<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function pdpb()
    {
        echo view('components/header');
        echo view('components/sidebar');
        echo view('components/topbar');
        echo view('pages/info/pdpb');
        echo view('components/footer');
    }

    public function dpb()
    {
        echo view('components/header');
        echo view('components/sidebar');
        echo view('components/topbar');
        echo view('pages/info/dpb');
        echo view('components/footer');
    }

    public function kenapaPdpb()
    {
        echo view('components/header');
        echo view('components/sidebar');
        echo view('components/topbar');
        echo view('pages/info/kenapaPdpb');
        echo view('components/footer');
    }
}