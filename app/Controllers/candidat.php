<?php

namespace App\Controllers;

class candidat extends BaseController
{
  public function index()
    {  $userModel = new \App\Models\OffreModel ();
      $id_offre= $this->request->getVar('id_offre');
     
     $userModel = new \App\Models\candidatModel ();
      $id_offre= $this->request->getVar('id_offre');
      $data = [
     'nom'=>  $this->request->getvar('name'),
     'age' =>  $this->request->getvar('age'),
     'adresse' =>  $this->request->getvar('adresse') ,  
     'num_tel' =>  $this->request->getvar('phone') ,
     'niveau'=> $this->request->getvar('service') ,
     'email' =>  $this->request->getvar('email') , 
     'linkedin' =>  $this->request->getvar('linkedln'), 
     'specialite'=>$this->request->getvar('specialite'), 
     'sexe'=>  $this->request->getVar('flexRadioDefault'),
     'id_offre'=>  $id_offre];
     $id_candidat = $userModel ->insert($data);
     var_dump($data);
   $userModel = new \App\Models\languecandidatModel ();
               
               foreach($_POST["langue"]as $langue){
            
                 $ddb = array(
                    
                  'id_candidat'=> $id_candidat,
                  'id_langue'=>  $langue);
                
                 $user = $userModel ->insert($ddb);     
                          var_dump($ddb );}
                          $userModel = new \App\Models\competencecandidatModel ();
               
                          foreach($_POST["competence"]as $competence){
                       
                            $ddb = array(
                               
                             'id_candidat'=> $id_candidat,
                             'id_competence'=>  $competence,
                             'experience'=> $this->request->getVar('experience'));
                            $user = $userModel ->insert($ddb);     
                                     var_dump($ddb );}

                      
    }
   
}
?>
