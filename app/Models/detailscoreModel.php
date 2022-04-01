<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class detailscoreModel extends Model
{
    protected $table      = 'detailscore';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
   // protected $useSoftDeletes = true;

    protected $allowedFields = ['page','plangue','psexe','petude','pcompetence','id_offre','id_candidat','scoretotal'];
}
?>
