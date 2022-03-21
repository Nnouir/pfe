<?php

namespace App\Controllers;

class post extends BaseController
{
    public function index()
    { 
      
     
         
     $userModel = new \App\Models\OffreModel(); 
     $users = $userModel-> find();
     $data = ['offre'=> $users,'ajout'=>$erros ?? null];
     
      
        
        
        return view('afficherpost',$data);
           
     
    
    
  



    }//end add

}// end class


?>