<?php

namespace App\Controllers;

class candida extends BaseController
{
    public function index($id)
    {
         
$userModel = new \App\Models\candidatModel(); 
     $users = $userModel-> select('candidat.*,detailscore.scoretotal')->join('detailscore', 'candidat.id = detailscore.id_candidat and candidat.id_offre='.$id)
  ->where('passetesttech','non')->where('passetestpsy','non')->where('candidat.id_offre',$id)->find();
  $userstsch = $userModel-> select('candidat.*,detailscore.scoretotal')->join('detailscore', 'candidat.id = detailscore.id_candidat and candidat.id_offre='.$id)
  ->where('passetesttech','oui')->where('passetestpsy','non')->where('candidat.id_offre',$id)->find();
  $userspsy = $userModel-> select('candidat.*,detailscore.scoretotal')->join('detailscore', 'candidat.id = detailscore.id_candidat and candidat.id_offre='.$id)
  ->where('passetesttech','oui')->where('passetestpsy','oui')->where('candidat.id_offre',$id)->find();
  $data = ['offre' => $users,'userstsch' => $userstsch,'userspsy' => $userspsy,'id_offre'=>$id,'ajout'=>$erros ?? null];
               
          
       return view('cand',$data);
    }
    public function  updatcandida()
    {   $userModel = new \App\Models\candidatModel();
        $id_offre= $this->request->getVar('id_offre'); 
        $arr  =  $this->request->getVar('testtech');
        if (!empty($arr)){
        foreach ($arr as  $pdip) {
         $cj= array( 
         
         'passetesttech'=>'oui'); 
            $idoffre = $userModel ->update($pdip,$cj);}}
            
            return redirect()->to(site_url('rh/numbrecandidat/'.$id_offre));}
         
         public function updatetech(){ 
            
            $id_offre= $this->request->getVar('id_offre'); 
            $userModel = new \App\Models\candidatModel();
            $arr  =  $this->request->getVar('testpsy');
            $action= $this->request->getVar('action');
            if (!empty($arr)){
            foreach ($arr as  $pdip) {
                if($action=='test' ){
             $cj= array( 
             
             'passetestpsy'=>'oui'); }
             else{$cj= array( 
                'passetesttech'=>'non'); }
                $idoffre = $userModel ->update($pdip,$cj);}}
              
                return redirect()->to(site_url('rh/numbrecandidat/'.$id_offre));}
             
             public function envoyertech()
             {    
                  
                 $userModel = new \App\Models\candidatModel();
                 $id_offre= $this->request->getVar('id_offre'); 
                 $arr  =  $this->request->getVar('valide');
                 if (!empty($arr)){
                 foreach ($arr as  $pdip) {
                  $cj= array( 
                  
                  'passetestpsy'=>'non'); 
                     $idoffre = $userModel ->update($pdip,$cj);
                     echo($id_offre);}}
                     return redirect()->to(site_url('rh/numbrecandidat/'.$id_offre));}
                  
             
    public function profil($id_condidat)
    {
        $userModel = new \App\Models\candidatModel(); 
        $users = $userModel->find($id_condidat);
        $userModel = new \App\Models\OffreModel();
        $offre = $userModel->where('id_offre',$users['id_offre'])->first();
        $userModel = new \App\Models\languecandidatModel ();

        $langue = $userModel-> select('languecandidat.*,langue.titre as namelang')->join('langue', 'languecandidat.id_langue = langue.id and languecandidat.id_candidat='.$id_condidat)->find();
        $userModel = new \App\Models\competencecandidatModel ();
        $competence = $userModel-> select('competencecandidat.*,competence.titre as namecomp')->join('competence', 'competencecandidat.id_competence = competence.id_competence and competencecandidat.id_candidat='.$id_condidat)->find();
        $userModel = new \App\Models\DiplomeModel();
        $diplome =$userModel-> select('diplome.* ')->join('candidat', 'diplome.id= candidat.niveau and candidat.id='.$id_condidat)->find();
        $userModel = new \App\Models\detailscoreModel();             
        $score = $userModel->where('id_candidat',$id_condidat)->first();
        $userModel = new \App\Models\resultattesttechModel();             
        $restechnique = $userModel->where('id_candidat',$id_condidat)->first();
        $userModel = new \App\Models\testtech();
        $testtechi = $userModel->where('id_offre',$users['id_offre'])->first();
        $userModel = new \App\Models\resultattestpsyModel();             
        $respsy = $userModel->where('id_candidat',$id_condidat)->first();
        $userModel = new \App\Models\testpsy();
        $testpsych = $userModel->where('id_offre',$users['id_offre'])->first();
        $data = ['users' => $users,'offre'=>$offre,'langue'=>$langue,'competence'=>$competence,'diplome'=>$diplome,'score'=>$score,'restechnique'=>$restechnique,'respsy'=>$respsy,'testtechi'=>$testtechi,'testpsych'=>$testpsych,'ajout'=>$erros ?? null];
       
              
        return view('profcandid',$data); 
    }
}
?>