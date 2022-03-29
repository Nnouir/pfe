<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class candidatModel extends Model
{
    protected $table      = 'candidat';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
   // protected $useSoftDeletes = true;

<<<<<<< Updated upstream
    protected $allowedFields = ['nom','age','adresse','num_tel','linkedin','id_offre','niveau','sexe','specialite'];
}
?>
=======
    protected $allowedFields = ['nom','age','adresse','num_tel','linkedin','id_offre'];
}
>>>>>>> Stashed changes
