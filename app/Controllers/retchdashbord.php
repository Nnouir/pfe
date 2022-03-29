<?php
namespace App\Controllers;

class retchdashbord extends BaseController
{
    public function index()
    {
       
        
              echo view ('techdashboard');
              $data = [
                'page_title' => 'Your title',
            ];
            
        }
    

}


?>