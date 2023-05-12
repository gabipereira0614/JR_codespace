<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProdutoModel;

class Produto extends BaseController
{
    public function index()
    {
        $produtos = new ProdutoModel;
        $data["produtos"]=$produtos->findall();

        return view("produtos", $data);
    }
}
