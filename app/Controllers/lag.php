<?php

namespace App\Controllers;

class lag extends BaseController
{
    public function index()
    {
       
        
        $userModel = new \App\Models\lagModel();
        
 
         if ($this->request->getMethod() == 'post') { 

            $rules = ['titre' => 'required',];

           

            if (!$this->validate($rules)) {$erros=$this->validator; }
                //return view('la', [
                   // "validation" => $this->validator,
                ///]);

            
            
            else {
        
                $rj = [
                    'titre' =>  $this->request->getVar('titre')];
                $user = $userModel ->insert($rj);
             var_dump($user);
                // Stroing session values
            


    }}
    $users = $userModel->findAll();
        
  
        $data = ['lang' => $users,'ajout'=>$erros];
        
    return view('la',$data);
        
    }
    
    public function delete($id)
    { 
        $userModel = new \App\Models\lagModel();
        
        $userModel->where('id',$id)->delete();
        return redirect()->to(site_url('rh/langue'));
      
    }
  
    public function fer($id) {
        $userModel = new \App\Models\lagModel();
       $fa= $userModel->find($id);
       echo $fa['titre'];
    }
    public function update() 
    { 
        $userModel = new \App\Models\lagModel();
        if ($this->request->getMethod() == 'post') { 

        $rules = [
            'titre2' => 'required',
            
        ];

       

        if (!$this->validate($rules)) {
$erros=$this->validator;
            //return view('la', [
               // "validation" => $this->validator,
            ///]);

        } 
        
        else {
    
            $rj = [
                'titre' =>  $this->request->getVar('titre2'),
                  ];
            $user = $userModel ->update( $this->request->getVar('tire'),$rj);
        
            // Stroing session values
        


} 

    }
    return redirect()->to(site_url('rh/langue'));
}
}

?>