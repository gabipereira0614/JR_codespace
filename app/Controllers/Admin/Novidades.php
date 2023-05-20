<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\NovidadeModel;

class Novidades extends BaseController{
    public function index(){
        return view('admin/novidades');
    }
    public function salvar(){
        $modelNovidade = new NovidadeModel();
        $dadosEnviados = $this->request->getPost();

        $alterarImagem = true;

        if (is_numeric($dadosEnviados["idnovidade"])) {
            return "ok";
            $novidadeAtual = $modelNovidade->find($dadosEnviados["idnovidade"]);

            if ($this->request->getFile('imagem')->getSize() == 0) {

                $dadosEnviados["imagem"] = $novidadeAtual["imagem"];
                $alterarImagem = false;
            } else {
                unlink(ROOTPATH . "\\public\\uploads\\novidades\\" . $novidadeAtual["imagem"]);
            }
        }

        if ($alterarImagem) {
            $imagem = $this->request->getFile('imagem');
            
            $nomeAleatorio = uniqid();

            $imagemRedimensionada = \Config\Services::image();

            $imagemRedimensionada->withFile($imagem);

            $imagemRedimensionada->resize(150, 150, true);

            $imagemRedimensionada->save("./uploads/novidades/$nomeAleatorio.jpeg");

            $dadosEnviados["imagem"] = "$nomeAleatorio.jpeg";
        }

   
        if($modelNovidade->save($dadosEnviados)){
            session()->setFlashdata("tipo", "success");
            session()->setFlashdata("mensagem", "Salvo com sucesso");

        }else{
            session()->setFlashdata("tipo", "danger");
            session()->setFlashdata("mensagem", "Erro ao salvar");
        }
        return redirect()->to(base_url("/admin/novidades"));
    }
}

?>