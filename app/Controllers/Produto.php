<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProdutoModel;

class Produto extends BaseController
{
    public function index()
    {
        $produtos = new ProdutoModel;

        return json_encode($produtos->getProdutos);
    }
}
