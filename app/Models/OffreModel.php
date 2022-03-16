<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class OffreModel extends Model
{
    protected $table      = "offre";
    protected $primaryKey = 'id_offre';
    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
   // protected $useSoftDeletes = true;

    protected $allowedFields = ['id_rh','id_resptech','id_resppsych','titre','description','domaine','duree','dateD'];
   
   
}
?>