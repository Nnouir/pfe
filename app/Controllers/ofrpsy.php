<?php

namespace App\Controllers;

class ofrpsy extends BaseController
{
    public function index()
    {$userModel = new \App\Models\OffreModel();
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
     $users = $userModel->select('offre.*')->where('id_resppsych',session()->get('id'))->find();
     $data = ['offre' => $users,'ajout'=>$erros];
     $userModel = new \App\Models\testpsy ();
     $rj = [
    'id_offre'=>  $id_offre,
     'test'=>  $this->request->getVar('test'),
      ]; 
      $fa= $userModel->where('id_offre',$id_offre)->first();
      if (empty($fa)){
     $idoffre = $userModel ->insert($rj);}
        else{$idoffre = $userModel ->update($fa['id'],$rj);}          
        return view('offpsy',$data); }


  

  
        public function fer($id) {
            $userModel = new \App\Models\testpsy ();
           $fa= $userModel->where('id_offre',$id)->first();
           echo $fa['test'];;
          }//end fer
              
          public function candidapsy($id) {
            $userModel = new \App\Models\candidatModel();
            $candModel = new \App\Models\resultattestpsyModel(); 
            $cand = $userModel-> select('candidat.*')
            ->where('passetesttech','oui')->where('passetestpsy','oui')->where('candidat.id_offre',$id)->find();
            foreach($cand as  $pdip){
               $fa= $candModel->where('id_candidat',$pdip['id'])->first();
            
            if(!empty($fa)){ $userspsy[] =array_merge($pdip,$fa); }
            else{ $userspsy[] =$pdip;}
               
              
                 
            } 
            $data = ['userspsy' => $userspsy,'id_offre'=>$id,'ajout'=>$erros ?? null];
            return view('candpsy',$data);
         }//end candidapsy
         
         

        
}// end class


?>