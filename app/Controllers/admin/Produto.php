<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProdutoModel;

class Produto extends BaseController
{
    public function index()
    {
        $produtos = new ProdutoModel;

        return view("produto", $produtos->findAll());
    }

    public function cadastrar(){
        $modelProduto = new ProdutoModel();
        $dadosEnviados = $this->request->getPost();
        if($modelProduto->save($dadosEnviados)){
            return "produto cadastrado";
        }else{
            return "falha ao cadastrar o produto";
        }
    }

    public function remover($id){
        $modelProduto = new ProdutoModel();
        if($produtoModel->delete($id)){
            return "Sucesso";
        }else 
        return "erro";
    }
}
