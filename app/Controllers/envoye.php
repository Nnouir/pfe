<?php

namespace App\Controllers;

class envoye extends BaseController
{
    public function index()
    {
      $userModel = new \App\Models\OffreModel ();
         $rj = [
        'titre'=>  $this->request->getVar('titre'),
        'description' =>  $this->request->getVar('description'),
        'id_rh' =>   session()-> get('id'),  
        'id_resppsych' =>  $this->request->getVar('id_resppsych') ,
        'id_resptech'=>  $this->request->getVar('id_resptech') ,
        'domaine' =>  $this->request->getVar('domaine') , 
        'duree' =>  $this->request->getVar('duree'), 
        'dateD'=> date('Y-m-d') ]; 
         $idoffre = $userModel ->insert($rj);
                        var_dump( $idoffre );
      
       
           
      $userModel = new \App\Models\NiveauModel   ();
        $arr  =  $this->request->getVar('pointdiplome');
        foreach ($arr as $id_diplome=> $pdip) {
              $dj = array(
                'id_offre'=>  $idoffre,
                'niveau'=> $id_diplome,
                'points'=>  $pdip);
               $user = $userModel ->insert($dj);     
                        var_dump($user );}
                
         
                        
         
      $userModel = new \App\Models\PlangueModel();
          $arr  =  $this->request->getVar('pointslang');
          foreach ($arr as $id_langue=> $plang) {
              $lj = array(
              'id_langue'=> $id_langue,          
              'id_offre'=>  $idoffre,
              'points'=>  $plang );
             $user = $userModel ->insert($lj);
             var_dump( $user); }    
                                 


              
      $userModel = new \App\Models\SexeModel   ();
             $array = array(
                   'id_offre'=>  $idoffre,
                   'sexe'=>  'M',
                   'points'=>  $this->request->getVar('m'));
                   $user = $userModel ->insert($array);
                   var_dump($array);
                    $sj= array(
                    'id_offre'=>  $idoffre,
                    'sexe'=> 'F',
                    'points'=>  $this->request->getVar('f'));
                    $user = $userModel ->insert($sj);
                    var_dump( $user);
                   

      
       $userModel = new \App\Models\CompetenceModel  ();
          $arra  =  $this->request->getVar('group-a');
         foreach ($arra as $id_competence => $pcom) {
           $cj= array(
            'id_offre'=>  $idoffre,
            'min'=> $pcom['competence-min'],
            'max'=> $pcom['competence-max'],
            'titre'=> $pcom['competence_titre'],
            'points'=> $pcom['point']);
            $user = $userModel ->insert($cj);
            var_dump(  $user);}
           
           
        
      $userModel = new \App\Models\AgeModel   ();
         $ag  =  $this->request->getVar('group-a');
         foreach ($ag as $id_age => $page) {
           $aj =array(
            'id_offre'=>  $idoffre,
            'min'=> $page['age-min'],
            'max'=> $page['age-max'],
            'points'=> $page['point']);
               $user = $userModel ->insert($aj);
               var_dump($user);}
               
       
          
            
               return redirect()->to(site_url('rh/offre'));   
                       
                      
                     
                                                
            
            
            
}//end function
}//end classe


?>