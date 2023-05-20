<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PortifolioModel;

class Portifolio extends BaseController
{
    public function index($id = 0)
    {
        $portifolioModel = new PortifolioModel();
        $data['portifolios'] = $portifolioModel->findall();

        if ($id != 0) {
            $portifolios = $portifolioModel->find($id);
            if (!$portifolios) {
                session()->setFlashdata("tipo", "danger");
                session()->setFlashdata("mensagem", "produto não encontrado!");
                return redirect()->to(base_url("/admin/portifolio"));
            }
            $data["portifolio"] = $portifolios;
        }
        return view("/admin/portifolio", $data);
    }
    public function salvar()
    {
        $modelPortifolio = new PortifolioModel();
        $dadosEnviados = $this->request->getPost();
        $alterarImagem = true;

        if (is_numeric($dadosEnviados["idportifolio"])) {
            return "ok";
            $imagemAtual = $modelPortifolio->find($dadosEnviados["idportifolio"]);

            if ($this->request->getFile('imagem')->getSize() == 0) {

                $dadosEnviados["imagem"] = $imagemAtual["imagem"];
                $alterarImagem = false;
            } else {
                unlink(ROOTPATH . "\\public\\uploads\\portifolio\\" . $imagemAtual["imagem"]);
            }
        }

        if ($alterarImagem) {
            $imagem = $this->request->getFile('imagem');

            $nomeAleatorio = uniqid();

            $imagemRedimensionada = \Config\Services::image();

            $imagemRedimensionada->withFile($imagem);

            $imagemRedimensionada->resize(150, 150, true);

            $imagemRedimensionada->save("./uploads/portifolio/$nomeAleatorio.jpeg");

            $dadosEnviados["imagem"] = "$nomeAleatorio.jpeg";
        }

        if ($modelPortifolio->save($dadosEnviados)) {
            session()->setFlashdata("tipo", "success");
            session()->setFlashdata("mensagem", "Salvo com sucesso");
        } else {
            session()->setFlashdata("tipo", "danger");
            session()->setFlashdata("mensagem", "Erro ao salvar");
        }
        return redirect()->to(base_url("/admin/portifolio"));
    }
    public function deletar($id)
    {


        $portifolioModel =  new PortifolioModel();
        $portifolio = $portifolioModel->find($id);
        $deletarArquivo = ROOTPATH . "public\\uploads\\portifolio\\" . $portifolio["imagem"];
        if (file_exists($deletarArquivo)) {
            unlink($deletarArquivo);
        }
        $produtoModel = new PortifolioModel();
        if ($portifolioModel->delete($id)) {
            session()->setFlashdata("tipo", "success");
            session()->setFlashdata("mensagem", "produto exluído com sucesso");
        } else {
            session()->setFlashdata("tipo", "danger");
            session()->setFlashdata("mensagem", "Erro ao excluír");
        }
        return redirect()->to(base_url("/admin/portifolio"));
    }
}
