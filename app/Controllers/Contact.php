<?php
namespace App\Controllers;

class Contact extends BaseController
{
    public function index()
    {
        echo view('template/header');
        echo view('template/topmenu');
        echo view('template/sidemenu');
        echo view('contact/contact');
        echo view('template/footer');
    }
}

?>