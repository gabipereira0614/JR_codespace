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