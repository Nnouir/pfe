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
        
     
   
      
       
                 
                
                 
                $userModel = new \App\Models\languecandidatModel ();
               
               foreach($_POST["langue"]as $langue){
            
                 $ddb = array(
                    
                  'id_candidat'=> $id_candidat,
                  'id_langue'=>  $langue);
                
                 $user = $userModel ->insert($ddb);  
                    
                 /*var_dump( $user );*/}
                          $userModel = new \App\Models\competencecandidatModel ();
               
                          foreach($_POST["competence"]as $competence){
                       
                            $ddb = array(
                               
                             'id_candidat'=> $id_candidat,
                             'id_competence'=>  $competence,
                             'experience'=> $this->request->getVar('experience'));
                            $user = $userModel ->insert($ddb);     
                            /* var_dump(  $user );*/}
                            $this-> score($id_candidat);
                            echo '<h1>'.'Thank you for your registration'.'</h1>';
                            
      
    } // enfd index



   public function score($id_candidat)
    {  
      /*$userModel = new \App\Models\OffreModel ();
      $id_offre= $this->request->getVar('id_offre');*/
     
      $userModel = new \App\Models\candidatModel ();
    
      $data=  $userModel->find($id_candidat);
      /*var_dump($data);*/
      $userModel = new \App\Models\DiplomeModel ();
    
      $diplome=  $userModel->find();
      
       /* var_dump($diplome);*/
      

      $userModel = new \App\Models\SexeModel  ();
       $psexe= $userModel->select('sexe.*')->where('sexe',$data['sexe'])->where('id_offre',$data['id_offre'])->first();
       $tot_point_sexe=0;
       if(!empty( $psexe)){
        $tot_point_sexe=$psexe['points'] ;}
            
       /*var_dump( $psexe);*/

                     $userModel = new \App\Models\AgeModel  ();
                     $page= $userModel->select('age.*')->where(" id_offre='".$data['id_offre']."' and `min`<='".$data['age']."' and `max` >='".$data['age']."' ")->first();
                     $tot_point_age=0;
                     if(!empty( $page)){
                      $tot_point_age=$page['point'] ;}
                     
                     /* var_dump( $page);*/
                  $userModel = new \App\Models\NiveauModel  ();
                     $petude= $userModel->select('etude.*')->where('id_offre',$data['id_offre'])->where('niveau',$data['niveau'])->first();
                    
                     /*var_dump( $petude);*/

                     $userModel = new \App\Models\PlangueModel  ();
                     $plangue= $userModel->select('plangue.*')->where('id_offre',$data['id_offre'])->find();
                    /* var_dump( $plangue);*/
                    foreach ( $plangue as $pdg){
                      $plangue['id_langue']=$pdg;
                        
                     /* var_dump( $pdg);*/
              
                        }
                           
                     $userModel = new \App\Models\languecandidatModel ();
       
        $langcand=  $userModel->where('id_candidat',$data['id_candidat'])->find();
        $plangueModel = new \App\Models\PlangueModel ();
       
      $tot_point_langue=0;
        foreach ( $langcand as $pdg){

          $plangue= $plangueModel->select('plangue.*')->where('id_offre',$data['id_offre'])->where('id_langue',$pdg['id_langue'])->first();
          if(!empty( $plangue)){
            $tot_point_langue+=$plangue['points'];}
           
         
      }
     
    

      
        
    
                     $userModel = new \App\Models\CompetenceModel  ();
                     $pcompetence= $userModel->select('competence.*')->where('id_offre',$data['id_offre'])->first();
                   

                    $userModel = new \App\Models\competencecandidatModel ();
                    $compcand=  $userModel->where('id_candidat',$data['id_candidat'])->find();
                    $pcompetenceModel = new \App\Models\CompetenceModel ();
                 
                  $tot_point_co=0;
                    foreach ( $compcand as $pd){
           
                      $pcompetence=  $pcompetenceModel->select('competence.*')->where(" id_offre='".$data['id_offre']."' and `min`<='".$pd['experience']."' and `max` >='".$pd['experience']."' ")->where('id_competence',$pd['id_competence'])->first();
                     if(empty( $pcompetence)){
                     echo '';}
                     else{
                      $tot_point_co+=$pcompetence['points'];
                     
                    }
                  }
                  
     $userModel = new \App\Models\detailscoreModel ();
    
      $array = [
        'page'=>  $tot_point_age,
        'plangue' => $tot_point_langue,
        'psexe' =>  $tot_point_sexe,
        'petude' =>  $petude['points'] ,
        'pcompetence' => $tot_point_co,
        'id_offre'=>  $data['id_offre'],
        'id_candidat'=> $id_candidat,
        'scoretotal'=> $tot_point_age+$tot_point_langue+ $tot_point_sexe+$petude['points'] +$tot_point_co
        ];
     $id  = $userModel ->insert($array);
    
        
    }//end score
   
} //end class
?>
