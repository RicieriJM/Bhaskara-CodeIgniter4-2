<?php

namespace App\Models;

use CodeIgniter\Model;

class bhaskaraModel extends Model
{
    protected $table      = 'calculo';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['a', 'b', 'c', 'delta','x1','x2'];
}

?>