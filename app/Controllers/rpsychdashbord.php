<?php
namespace App\Controllers;

class rpsychdashbord extends BaseController
{
    public function index()
    {
       
        
              echo view ('pshydashboard');
              $data = [
                'page_title' => 'Your title',
            ];
            
        }
    

}


?>