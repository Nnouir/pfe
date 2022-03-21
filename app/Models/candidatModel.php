<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class CompetenceModel extends Model
{
    protected $table      = 'candidat';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
   // protected $useSoftDeletes = true;

    protected $allowedFields = ['nom','age','adresse','num_tel','photo de profil','linkedin','id_offre'];
   