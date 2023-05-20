<?php

namespace App\Models;

use CodeIgniter\Model;

class NovidadeModel extends Model
{
    protected $table            = 'novidades';
    protected $primaryKey       = 'idnovidade';
    protected $useAutoIncrement = true;

    protected $allowedFields = ["texto","imagem"];

    public function saveAs($arr) {
        $builder = $this->db->table("novidades");
        $builder->insert($arr);

        return true;
    }

    public function getlastNovidade() {
        $builder = $this->db->table("novidades N");
        $builder->select();
        $builder->orderBy("N.idnovidade","DESC");
        $builder->limit(1);
        $query = $builder->get();
        return $query->getResultArray();
    }
}
