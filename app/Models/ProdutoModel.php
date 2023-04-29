<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdutoModel extends Model
{
    protected $table            = 'produto';
    protected $primaryKey       = 'idproduto';
    protected $useAutoIncrement = true;

    protected $allowedFields = ["nome", "qtd_produto", "preco"];


    public function getProdutos(){

        $builder = $this->db->table("produto p");
        $builder->select("p.*, ip.imagem");
        $builder->join("imagem_produto ip", "ip.fkproduto=p.id_produto");
        $builder->orderBy("p.id_produto");
        $query = $builder->get();
        return $query->getResult();
    }

}


