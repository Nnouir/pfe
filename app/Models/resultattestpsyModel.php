<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class resultattestpsyModel extends Model
{
    protected $table      = 'resultattestpsy';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
   // protected $useSoftDeletes = true;

    protected $allowedFields = ['id_candidat','id_testpsy','note'];
   
   
}
?>