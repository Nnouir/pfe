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
     $users = $userModel->select('offre.*,users.name as namertech,u2.name as namerpsy')->join('users', 'offre.id_resptech = users.id')->join('users as u2', 'offre.id_resppsych= u2.id')->find();
     $data = ['offre' => $users,'ajout'=>$erros ?? null];
     return view('off',$data);}
    
    
public function add()
 {
$userModel = new \App\Models\OffreModel();
        if ($this->request->getMethod() == 'post') { 
           $rules = ['titre3' => 'required',];

        if (!$this->validate($rules)) {$erros=$this->validator; } 
            
        else {$rj = [ 'titre3' =>  $this->request->getVar('titre3')];
                $user = $userModel ->insert($rj);
                var_dump($user);} } 
   
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
    public function update($id) {
$userModel = new \App\Models\OffreModel();
       $users= $userModel->find($id);

$userModel = new \App\Models\UserModel();
       $user = $userModel->where('role','RTECH')
                ->findAll();
       $usere = $userModel->where('role','RPSY')
                ->findAll();

$userModel = new \App\Models\DiplomeModel();
      $diplôme = $userModel->findAll();

$userModel = new \App\Models\NiveauModel();
      $niv = $userModel->where('id_offre',$id)->find();
      foreach ($niv as $id_diplome=> $pdip){
      $dj [$pdip['niveau']]= $pdip['points'];}

$userModel = new \App\Models\lagModel ();
       $langue = $userModel->findAll();

$userModel = new \App\Models\PlangueModel();
      $da= $userModel->where('id_offre',$id)->find();
      foreach ($da as $id_diplome=> $plang){
      $pl [$plang['id_langue']]= $plang['points'];}

$userModel = new \App\Models\SexeModel();
      $sexef= $userModel->where('sexe','F')->where('id_offre',$id)->first();
      $sexem= $userModel->where('sexe','M')->where('id_offre',$id)->first();

$userModel = new \App\Models\CompetenceModel();
      $cj= $userModel->where('id_offre',$id)->find();
      
$userModel = new \App\Models\AgeModel(); 
         $aj= $userModel->where('id_offre',$id)->find();       
$data = ['offre' => $users,'listrtech'=>$user,'listrpsy'=>$usere,'listniveau'=>$diplôme,'listlang'=>$langue,'niv'=>$dj,'lang'=>$pl,'sexf'=>$sexef,'sexm'=>$sexem,'compe'=>$cj,'age'=>$aj];
      var_dump($cj);
      return view('up',$data);
 }//end update
   
 
    public function delete($id)
    {
      $userModel = new \App\Models\OffreModel();
      
      $userModel->where('id_offre',$id)->delete();
      return redirect()->to(site_url('rh/offre'));
    
  }//end delete
      
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

}// end class


?>