<?php

namespace App\Models;

use CodeIgniter\Model;

class NovidadeModel extends Model
{
    protected $table            = 'novidade';
    protected $primaryKey       = 'id_novidade';
    protected $useAutoIncrement = true;

    protected $allowedFields = ["texto","imagem"];
}
