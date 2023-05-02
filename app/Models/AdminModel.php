<?php

namespace App\Models;

use CodeIgniter\Model;
use Exception;

class AdminModel extends Model
{
    protected $table            = 'adm';
    protected $primaryKey       = 'id_adm';
    protected $useAutoIncrement = true;
    protected $allowedFields = ["nome", "email", "senha"];

    public function cadastrar($nome,$email,$senha){
        // checar se ja existe usuario cadastrado

        // criar hash da senha
        $hash = password_hash($senha, PASSWORD_DEFAULT);
        return $this->save(["nome" => $nome, "email" => $email, "senha" => $hash]);
    }

    public function logar($email, $senha){
        $admin = $this->db->query("SELECT id_adm, nome, senha 
            FROM admin WHERE email=?", [$email])->getFirstRow("array");

        if(!$admin){
            throw new Exception("Senha incorreta ou usuário não encontrado");
        }

        if(!password_verify($senha, $admin["senha"])){
            throw new Exception("Senha incorreta ou usuário não encontrado");
        }

        return $admin["id_adm"];

    }
    
}
