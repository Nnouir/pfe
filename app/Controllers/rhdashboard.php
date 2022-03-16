<?php

namespace App\Controllers;

class rhdashboard extends BaseController
{
    public function index()
    {
       
        
              echo view ('dashboard');
              $data = [
                'page_title' => 'Your title',
            ];
    
            //echo view('header');
            //echo view('menu');
            //echo view('content', $data);
            //echo view('footer');
           
        
        
    }
    

}


?>
