<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ProdutoModel;

class Produto extends BaseController
{
    public function index($id = 0)
    {
        $produtoModel = new ProdutoModel();
        $data["produtos"]= $produtoModel->findall();
        return view("admin/produtos", $data);
    }

    public function salvar(){
        $modelProduto = new ProdutoModel();
        $dadosEnviados = $this->request->getPost();

        $regras =[
            'nome_produto'=>'required|min_length[2]',
            'preco'=>'required|decimal',
        ];

        $mensagem =[
            'nome_produto'=>[
                'required'=>'o nome e necessario',
                'min_length[2]'=>'o nome precisa ser valido'
            ],
              'preco'=>[
                'required'=>'o preco e necessario',
                'decimal'=>'digite um preco valido'
              ]
            ];

            if($this->validate($regras,$mensagem)){
        if($modelProduto->save($dadosEnviados)){
            session()->setFlashdata("tipo", "success");
            session()->setFlashdata("mensagem","Salvo com sucesso");
        }else{
            session()->setFlashdata("tipo","danger");
            session()->setFlashdata("mensagem","Erro ao Salvar");
        }
        return redirect()->to("/admin/produto");
    }else{
        session()->setFlashdata("validacao",$this->validator);
        session()->setFlashdata("produto",$dadosEnviados);
        return redirect()->to("/admin/produto");
        
    }
  }
    public function deletar($id)
    {
        
       
        if($produtoModel->delete($id)){
            session()->setFlashdata("tipo", "success");
            session()->setFlashdata("mensagem","Item exluído com sucesso");
        } else {
            session()->setFlashdata("tipo","danger");
            session()->setFlashdata("mensagem","Erro ao excluír");
        }
        return redirect()->to("/admin/produto");
    }
    
    
}
?>