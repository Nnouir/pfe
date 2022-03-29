<?php

namespace App\Controllers;

class offretech extends BaseController
{
    public function index()
    { 


        $userModel = new \App\Models\OffreModel();
        if ($this->request->getMethod() == 'post') { 
           $rules = ['titre3' => 'required',];

        if (!$this->validate($rules)) {$erros=$this->validator; } 
            
        else {$rj = [ 'titre3' =>  $this->request->getVar('titre3')];
                $user = $userModel ->insert($rj);
                   var_dump($user);}
                // Stroing session values
            } 
$userModel = new \App\Models\OffreModel();
     $id_offre= $this->request->getVar('id_offre'); 
     $users = $userModel->select('offre.*')->where('id_resptech',session()->get('id'))->find();
     $data = ['offre' => $users,'ajout'=>$erros];
     
   
 $userModel = new \App\Models\testtech ();
         $rj = [
        'id_offre'=>  $id_offre,
         'test'=>  $this->request->getVar('test'),
          ]; 
          $fa= $userModel->where('id_offre',$id_offre)->first();
          if (empty($fa)){
         $idoffre = $userModel ->insert($rj);}
            else{$idoffre = $userModel ->update($fa['id'],$rj);}          
     return view('offtech',$data);
   }

   public function fer($id) {
      $userModel = new \App\Models\testtech ();
     $fa= $userModel->where('id_offre',$id)->first();
     echo $fa['test'];;
  }

     



        
    }// end class


    ?>