<?php

namespace App\Controllers;
class rh extends BaseController
{
    public function index()

    
    
    {echo $this->request->getVar('email');
       echo $this->request->getVar('password');

       $userModel = new \App\Models\UserModel();
        
        $users = $userModel->where('email',$this->request->getVar('email'))
                        ->where('password',$this->request->getVar('password'))
                   ->findAll();
   var_dump($users); 
    }  
    
    public function login()
    {$userModel = new \App\Models\UserModel();
        $data = [];
       

        if ($this->request->getMethod() == 'post') {

            $rules = [
                'email' => 'required',
                'password' => 'required',
            ];

            $errors = [
                'password' => [
                    'validateUser' => "Email or Password didn't match",
                ],
            ];

            if (!$this->validate($rules, $errors)) {

                return view('login', [
                    "validation" => $this->validator,
                ]);

            } 
            
            else {
        

                $user = $userModel ->where('email', $this->request->getVar('email'))
                ->where('password',$this->request->getVar('password'))
                 ->first();

                // Stroing session values
             if(empty($user))
             {$data = ['erros' => 'not found '];

                echo view('login', $data);
             return view('login');
             }

else{
                $this->setUserSession($user);

                // Redirecting to dashboard after login
               
                if($user['role'] == "admin"){

                    return redirect()->to(base_url('admin'));

                }elseif($user['role'] == "RH"){

                    return redirect()->to(base_url('rh/dachbourd'));
                }
                elseif($user['role'] == "RTECH"){

                   return redirect()->to(base_url('rhtech/dachbourd'));
                }
                elseif($user['role'] == "RPSY"){

                    return redirect()->to(base_url('rhpsy/dachbourd'));
                }
            }
            }
        }
        //return view('login');
    }private function setUserSession($user)
    {
        $data = [
            'id' => $user['id'],
            'name' => $user['name'],
            'password' => $user['password'],
            'email' => $user['email'],
            "role" => $user['role'],
        ];

        session()->set($data);
        return true;
    }

    

    
         
}
?>
