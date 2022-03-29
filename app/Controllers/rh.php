<?php
namespace App\Controllers;
class rh extends BaseController
{ 
public function login()
{$userModel = new \App\Models\UserModel();
 $data = [];
 if ($this->request->getMethod() == 'post') {
                    $rules = [ 'email' => 'required',
                   'password' => 'required', ];
                    $errors = [ 'password' => ['validateUser' => "Email or Password didn't match", ],];
 if (!$this->validate($rules, $errors)) { return view('login', ["validation" => $this->validator, ]); } 
 else { $user = $userModel ->where('email', $this->request->getVar('email'))
                ->where('password',$this->request->getVar('password'))
                 ->first();
              // Stroing session values
              if(empty($user)){$data = ['erros' => 'not found '];
                  echo view('login', $data);
                  return view('login');}
              else{ $this->setUserSession($user);
             // Redirecting to dashboard after login
                if($user['role'] == "admin"){return redirect()->to(base_url('admin'));}
                elseif($user['role'] == "RH"){return redirect()->to(base_url('rh/dachbourd'));}
                elseif($user['role'] == "RTECH"){return redirect()->to(base_url('rhtech/dachbourd'));}
                elseif($user['role'] == "RPSY"){ return redirect()->to(base_url('rhpsy/dachbourd'));} }
      }
                                                }
 }//end login

 private function setUserSession($user)
{ $data = [ 'id' => $user['id'],
            'name' => $user['name'],
            'password' => $user['password'],
            'email' => $user['email'],
            "role" => $user['role'],];
        session()->set($data);
        return true;}

public function profil()
    {$userModel = new \App\Models\UserModel();  
    if ($this->request->getMethod() == 'post') { 
        $rules = ['email' => 'required','password' => 'required'];
     if (!$this->validate($rules)) {$erros=$this->validator; } 
     else {$rj = [ 'email' =>  $this->request->getVar('email'),
                   'password' =>  $this->request->getVar('password')];
           $users = $userModel ->insert($rj);
             var_dump($users);}
                                               }
    return view('profil',array("erros"=>$erros,"user"=>$user));
    }//end profil

 public function update()
{ $userModel = new \App\Models\UserModel();  
    if ($this->request->getMethod() == 'post') { 
                          $rules = ['email' => 'required','password' => 'required'];
                  
    if (!$this->validate($rules)) {$erros=$this->validator;
                           return view('profil', [ "validation" => $this->validator, ]); } 
                           
    else {$user = $userModel->where('id', session()-> get('id') )
                          ->where('password',$this->request->getVar('password'))
                           ->first();
    if(empty($user)){$data = ['erros' => 'not found '];
                          return view('profil',$data); }
    else{ if($this->request->getVar('newpassword')==$this->request->getVar('confirmpassword')){
        $userModel = new \App\Models\UserModel(); 
                          $id= session()-> get('id') ;
                          $rj = ['password' => $this->request->getVar('newpassword'), 
                          'email' => $this->request->getVar('email')  ];
                          $profil = $userModel ->update($id,$rj);
                          var_dump( $rj);
                          return redirect()->to(site_url('rh/dachbourd'));}
             else{$data = ['erros' => 'incorrect '];
                return view('profil',$data);}             
                        }
         }
                                                  } 
}//end update
    
public function signout()
    {
        session()->destroy();
        return redirect()->to(site_url('/login'));
    }
         
}//end classe
?>
