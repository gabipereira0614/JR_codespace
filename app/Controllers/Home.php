<?php

namespace App\Controllers;

use App\Models\NovidadeModel;

class Home extends BaseController
{
    public function index()
    {
        $modelNovidade = new NovidadeModel();
        $data['novidade'] = $modelNovidade->getlastNovidade();
        return view('home',$data);
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
    public function cadastro(){
        return view ('cadastro');
    }
}
