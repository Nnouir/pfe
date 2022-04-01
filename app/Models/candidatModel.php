<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class candidatModel extends Model
{
    protected $table      = 'candidat';
    protected $primaryKey = 'id_candidat';
    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
   // protected $useSoftDeletes = true;



    protected $allowedFields = ['nom','age','adresse','num_tel','linkedin','id_offre','adresse','email','niveau','sexe','specialite','passetesttech','passetestpsy'];

}
?>
