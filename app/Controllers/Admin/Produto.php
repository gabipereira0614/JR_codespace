<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ProdutoModel;

class Produto extends BaseController
{
    public function index($id = 0)
    {
        $produtoModel = new ProdutoModel();
        $data['produtos'] = $produtoModel->findall();

        if ($id != 0) {
            $produtos = $produtoModel->find($id);
            if (!$produtos) {
                session()->setFlashdata("tipo", "danger");
                session()->setFlashdata("mensagem", "produto não encontrado!");
                return redirect()->to(base_url("/admin/produto"));
            }
            $data["produto"] = $produtos;
        }
        return view("/admin/produtos", $data);
    }


    public function salvar()
    {
        $modelProduto = new ProdutoModel();
        $dadosEnviados = $this->request->getPost();


        $regras = [
            'nome_produto' => 'required|min_length[2]',
            'preco' => 'required|decimal',
        ];

        $mensagem = [
            'nome_produto' => [
                'required' => 'o nome e necessario',
                'min_length[2]' => 'o nome precisa ser valido'
            ],
            'preco' => [
                'required' => 'o preco e necessario',
                'decimal' => 'digite um preco valido'
            ]
        ];

        session()->setFlashdata("validacao", $this->validator);
        session()->setFlashdata("produto", $dadosEnviados);

        $alterarImagem = true;

        if (is_numeric($dadosEnviados["id_produto"])) {
            $produtoAtual = $modelProduto->find($dadosEnviados["id_produto"]);

            if ($this->request->getFile('imagem')->getSize() == 0) {

                $dadosEnviados["imagem"] = $produtoAtual["imagem"];
                $alterarImagem = false;
            } else {
                unlink(ROOTPATH . "\\public\\uploads\\produtos\\" . $produtoAtual["imagem"]);
            }
        }

        if ($alterarImagem) {
            $imagem = $this->request->getFile('imagem');
            
            $nomeAleatorio = uniqid();

            $imagemRedimensionada = \Config\Services::image();

            $imagemRedimensionada->withFile($imagem);

            $imagemRedimensionada->resize(150, 150, true);

            $imagemRedimensionada->save("./uploads/produtos/$nomeAleatorio.jpeg");

            $dadosEnviados["imagem"] = "$nomeAleatorio.jpeg";
        }
        if($modelProduto->save($dadosEnviados)){
            session()->setFlashdata("tipo", "success");
            session()->setFlashdata("mensagem","Salvo com sucesso");
        }else{
            session()->setFlashdata("tipo","danger");
            session()->setFlashdata("mensagem","Erro ao Salvar");
        }
        return redirect()->to("/admin/produto");
    }



    public function deletar($id)
    {
        $produtoModel =  new ProdutoModel();
        $produto = $produtoModel->find($id);

        $produtoModel = new ProdutoModel();
        if ($produtoModel->delete($id)) {
            session()->setFlashdata("tipo", "success");
            session()->setFlashdata("mensagem", "produto exluído com sucesso");
        } else {
            session()->setFlashdata("tipo", "danger");
            session()->setFlashdata("mensagem", "Erro ao excluír");
        }
        return redirect()->to(base_url("/admin/produto"));
    }
}
