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
                             'expérience'=> $this->request->getVar('expérience'));
                            $user = $userModel ->insert($ddb);     
                                     var_dump($ddb );}

                         /* $bi = array(
                     
                            'id_compétence'=> $this->request->getvar('listcomp') ,
                           );
                           $user = $userModel ->insert($bi);     
                                    var_dump($bi );*/

   /* $userModel = new \App\Models\NiveauModel   ();
      
      
              $dj = array(
               
                'niveau'=> $this->request->getvar('service') ,
               );
               $user = $userModel ->insert($dj);     
                        var_dump($dj );
                
                        $userModel = new \App\Models\SexeModel   ();
             $array = array(
                 
                   'sexe'=>  'M',
                   'sexe'=>  $this->request->getVar('flexRadioDefault'));
                   $user = $userModel ->insert($array);
                   var_dump($array);
                    $sj= array(
                    'sexe'=> 'F',
                    'sexe'=>  $this->request->getVar('flexRadioDefault'));
                    $user = $userModel ->insert($sj);
                    var_dump( $user);
                    $userModel = new \App\Models\PlangueModel   ();
      
      
                    $ddb = array(
                     
                      'id_langue'=> $this->request->getvar('listlang') ,
                     );
                     $user = $userModel ->insert($ddb);     
                              var_dump($ddb );
     return view('formulaire',$data);*/
    }
   
}
?>
