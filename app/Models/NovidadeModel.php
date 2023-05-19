<?php

namespace App\Models;

use CodeIgniter\Model;

class NovidadeModel extends Model
{
    protected $table            = 'novidades';
    protected $primaryKey       = 'idnovidade';
    protected $useAutoIncrement = true;

    protected $allowedFields = ["texto"];
}
