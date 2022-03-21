<?php

namespace App\Controllers;

class formulaire extends BaseController
{
    public function index()
    {
       /* $userModel = new \App\Models\CandidatModel ()
        $rj = [
       'nom'=>  $this->request->getVar('nom'),
       'age' =>  $this->request->getVar('description'),
       'adresse' =>   session()-> get('adresse'),  
       'num_tel' =>  $this->request->getVar('num_tel') ,
       'email'=>  $this->request->getVar('email') ,
       'linkedin' =>  $this->request->getVar('domaine') , 
      
        
      ]; 
        $idoffre = $userModel ->insert($rj);
                       var_dump( $idoffre );*/
                       $userModel = new \App\Models\CompetenceModel(); 
                       $users = $userModel->select('competence.*')->where('competence.id_offre ','offre.id') ->find();
                       $data = ['offre'=> $users,'ajout'=>$erros ?? null];
                       
                       $userModel = new \App\Models\LagModel(); 
                       $users = $userModel->select('langue.*')->where('langue.id_offre ','offre.id') ->find();
                       $data = ['lag'=> $users,'ajout'=>$erros ?? null];
                       
                        
                          
                          
                          return view('formulaire',$data);
                             
     
       
        
        
    }
    

}


?>