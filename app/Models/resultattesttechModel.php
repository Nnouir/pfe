<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class resultattesttechModel extends Model
{
    protected $table      = 'resultattesttech';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
   // protected $useSoftDeletes = true;

    protected $allowedFields = ['id_candidat','id_testtech','note'];
   
   
}
?>