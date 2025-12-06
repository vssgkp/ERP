<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('template/header');
        echo view('template/topmenu');
        echo view('template/sidemenu');
        echo view('template/content');
        echo view('template/footer');
    }

    public function tab()
    {
        echo view('template/header');
        echo view('template/topmenu');
        echo view('template/sidemenu');
        echo view('template/iframe');
        echo view('template/footer');
    }
}
