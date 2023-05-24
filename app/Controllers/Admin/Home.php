<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        return view('admin/login');
    }

    public function portifolio()
    {
        return view('portifolio');
    }

    public function produtos()
    {
        return view('produtos');
    }

    public function empresa()
    {
        return view('empresa');
    }
    
    public function contato()
    {
        return view('contato');
    }
    
    public function login()
    {
        return view('login');
    }
 
}
