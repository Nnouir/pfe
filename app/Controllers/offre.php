<?php

namespace App\Controllers;

class offre extends BaseController
{
    public function index()
    {   $userModel = new \App\Models\OffreModel();
        if ($this->request->getMethod() == 'post') { 
           $rules = ['titre3' => 'required',];

        if (!$this->validate($rules)) {$erros=$this->validator; } 
            
        else {$rj = [ 'titre3' =>  $this->request->getVar('titre3')];
                $user = $userModel ->insert($rj);
                   var_dump($user);}
                // Stroing session values
            } 
     $userModel = new \App\Models\OffreModel(); 
     $users = $userModel->select('offre.*,users.name as namertech,u2.name as namerpsy')->join('users', 'offre.id_resptech = users.id')->join('users as u2', 'offre.id_resppsych= u2.id')
           ->find();
     $data = ['offre' => $users,'ajout'=>$erros];
      
         
          return view('off',$data);}
    
    
public function add()
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
   
$userModel = new \App\Models\UserModel();
 $users = $userModel->where('role','RTECH')
                ->findAll();
                $data['listrtech']=$users;


                
$users = $userModel->where('role','RPSY')
                    ->findAll();
                    $data['listrpsy']=$users;


$userModel = new \App\Models\DiplomeModel();
$diplôme = $userModel->findAll();
         $data['listniveau']=$diplôme;


$userModel = new \App\Models\lagModel ();
$langue = $userModel->findAll();
         $data['listlang']=$langue;
        
        
        
 return view('add_offre',$data);
           
     
    
    
  



    }//end add

}// end class


?>