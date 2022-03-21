<?php

namespace App\Controllers;

class update extends BaseController
{
    public function index()
    {
      $userModel = new \App\Models\OffreModel ();
        $id_offre= $this->request->getVar('id_offre');
      $rj = [
        'titre'=>  $this->request->getVar('titre'),
        'description' =>  $this->request->getVar('description'),
        'id_rh' =>   session()-> get('id'),  
        'id_resppsych' =>  $this->request->getVar('id_resppsych') ,
        'id_resptech'=>  $this->request->getVar('id_resptech') ,
        'domaine' =>  $this->request->getVar('domaine') , 
        'duree' =>  $this->request->getVar('duree') ]; 
         $idoffre = $userModel ->update( $id_offre,$rj);
                        var_dump( $idoffre);
      
       
           
     $userModel = new \App\Models\NiveauModel   ();
        $arr  =  $this->request->getVar('pointdiplome');
        $userModel->where('id_offre',$id_offre)->delete();
        foreach ($arr as $id_diplome=> $pdip) {
              $dj = array(
                'id_offre'=>  $id_offre,
                'niveau'=> $id_diplome,
                'points'=>  $pdip);
               $user = $userModel ->insert($dj);     
                        var_dump($user );}
                
         
                        
         
      $userModel = new \App\Models\PlangueModel();
          $arr  =  $this->request->getVar('pointslang');
          $userModel->where('id_offre',$id_offre)->delete();
          foreach ($arr as $id_langue=> $plang) {
              $lj = array(
              'id_langue'=> $id_langue,          
              'id_offre'=>  $id_offre,
              'points'=>  $plang );
             $user = $userModel ->insert($lj);
             var_dump( $user); }    
                                 


              
      $userModel = new \App\Models\SexeModel   ();
      $userModel->where('id_offre',$id_offre)->delete();
             $array = array(
                   'id_offre'=>  $id_offre,
                   'sexe'=>  'M',
                   'points'=>  $this->request->getVar('m'));
                   $user = $userModel ->insert($array);
                   var_dump($array);
                    $sj= array(
                    'id_offre'=>  $id_offre,
                    'sexe'=> 'F',
                    'points'=>  $this->request->getVar('f'));
                    $user = $userModel ->insert($sj);
                    var_dump( $user);
                   

      
       $userModel = new \App\Models\CompetenceModel  ();
       $userModel->where('id_offre',$id_offre)->delete();
          $arra  =  $this->request->getVar('group-a');
         foreach ($arra as $id_competence => $pcom) {
           $cj= array(
            'id_offre'=>  $id_offre,
            'min'=> $pcom['competence-min'],
            'max'=> $pcom['competence-max'],
            'titre'=> $pcom['competence_titre'],
            'points'=> $pcom['point']);
            $user = $userModel ->insert($cj);
            var_dump(  $user);}
           
           
        
      $userModel = new \App\Models\AgeModel   ();
      $userModel->where('id_offre',$id_offre)->delete();
         $ag  =  $this->request->getVar('group-a');
         foreach ($ag as $id_age => $page) {
           $aj =array(
            'id_offre'=>  $id_offre,
            'min'=> $page['age-min'],
            'max'=> $page['age-max'],
            'points'=> $page['point']);
               $user = $userModel ->insert($aj);
               var_dump($user);}
               
       
             
               return redirect()->to(site_url('rh/offre'));  



               }//end function
}//end classe


?>