<?php

    namespace App\Controllers\Admin;
    use Exception;
    use App\Controllers\BaseController;
    use App\Models\AdminModel;

    class Autenticacao extends BaseController {
        // responsavel por redirecionar o user parra a tela de login
        public function login(){
        if(session()->has("id_adm")){
            return redirect()->to(base_url("admin/produto"));
        }
            return view("/admin");
        }

        public function sair(){
            $session = session();
            $session->destroy();
            return redirect()->to(base_url("admin"));
        }
        //inciar sessão do user
        public function logar()
        {
            try {
                $email = $this->request->getPost("email");
                $senha = $this->request->getPost("senha");
                $adminModel = new AdminModel();
                $id_adm = $adminModel->logar($email, $senha);
                session()->set("id_adm", $id_adm);
                return redirect()->to(base_url("admin/produto"));
            } catch (Exception $erro) {
                session()->setFlashdata("aviso-login", $erro->getMessage());
                return redirect()->to(base_url("/admin"));
            }
        }
        
        public function salvar(){
            $nome = $this->request->getPost("nome");
            $email = $this->request->getPost("email");
            $senha = $this->request->getPost("senha");
            
            $adminModel = new AdminModel();

            $buscaEmail = $adminModel->where("email", $email)->first();

            if(!$buscaEmail){
                if($adminModel->cadastrar($nome,$email,$senha)){
                    session()->setFlashdata("tipo","success");
                    session()->setFlashdata("aviso","Sucesso ao cadastar");
                } else {
                    session()->setFlashdata("tipo","danger");
                    session()->setFlashdata("aviso","Erro ao cadastar");
                }
            }else{
                session()->setFlashdata("tipo","danger");
                session()->setFlashdata("aviso","Já existe");
            }
            
            return redirect()->to(base_url('/admin'));
        } 
}
?>
