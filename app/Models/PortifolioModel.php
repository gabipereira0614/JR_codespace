<?php

namespace App\Models;

use CodeIgniter\Model;

class PortifolioModel extends Model
{
   protected $table             ='portifolio';
   protected $primaryKey        ='idportifolio';
   protected $useAutoIncrement  = true;

   protected $allowedFields = ["imagem"];

   public function saveAs($arr) {
    $builder = $this->db->table("portifolio");
    $builder->insert($arr);

    return true;
}
}
