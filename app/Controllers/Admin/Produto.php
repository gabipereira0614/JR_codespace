<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ProdutoModel;
use App\Models\MarcaModel;

class Produto extends BaseController
{
    public function index()
    {
        $data["produtos"]=123;
        return view("admin/produtos",$data);
    }
    public function deletar($id)
    {
        
        $produtoModel = new ProdutoModel();
        if($produtoModel->delete($id)){
            session()->setFlashdata("tipo", "success");
            session()->setFlashdata("mensagem","Item exluído com sucesso");
        } else {
            session()->setFlashdata("tipo","danger");
            session()->setFlashdata("mensagem","Erro ao excluír");
        }
        return redirect()->to("/admin/produto");
    }
    
    public function salvar(){
        $modelProduto = new ProdutoModel();
        $dadosEnviados = $this->request->getPost();

        $regras =[
            'preco'=>'required|decimal',
            'nome'=>'required|min_length[2]',
            'fkmarca'=>'required'
        ];

        $mensagem =[
            'preco'=>[
                'required'=>'o preco e necessario',
                'decimal'=>'digite um preco valido'
            ],
            'nome'=>[
                'required'=>'o nome e necessario',
                'min_length[2]'=>'o nome precisa ser valido'
            ],
            'fkmarca'=>[
                'required'=>'a marca e obrigatoria'
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
}
?>