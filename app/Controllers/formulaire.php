<?php

namespace App\Controllers;

class formulaire extends BaseController
{
    public function index($id)
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
                       $userModel = new \App\Models\CompetenceModel  ();
                       $cj= $userModel->where('id_offre',$id)->find();
                    
                       $data['listcomp']=$cj;
                      
                     
                       
                      /* $userModel = new \App\Models\LagModel(); 
                       $users= $userModel->findAll();*/
                       $userModel = new \App\Models\PlangueModel();
                       $user = $userModel-> select('Plangue.*,langue.titre as namelang')->join('langue', 'Plangue.id_langue = langue.id and Plangue.id_offre='.$id)->find();
                     
                       $data['listlang']=$user;
                       $userModel = new \App\Models\DiplomeModel();
                       $users = $userModel->select('diplome.*')
                                      ->findAll();
                                      $data['listdip']=$users;
                     /*  $userModel = new \App\Models\SexeModel(); 
                       $users = $userModel->select('Sexe.*')->where('Sexe.id_offre ','offre.id') ->find();
                       $data = ['Sexe'=> $users,'ajout'=>$erros ?? null];*/
                            
                             $data['id_offre']=$id; 
                             
                          return view('formulaire',$data);
                             
     
       
        
        
    }
    

}


?>