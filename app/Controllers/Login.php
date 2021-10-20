<?php

namespace App\Controllers;
use App\models\UserModel;


class Login extends BaseController
{
      

     
    public function index()
    { 
        $session=session();
                $user= new UserModel();
        if ($this->request->getMethod()=='post') {
             $email = $this->request->getVar('email');
             $password = $this->request->getVar('password');
            $data= $user->auth($email,$password);
            // var_dump($data);
            if ($data) {
                $session=session();
                
                $userdata=[
                    'logged_in'=>true
                ];
                $session->set($userdata);


                var_dump($session->get('logged_in'));          
            }else {
                echo "Wrong password";
            }
            if ($session->get('logged_in')==true) {
                return redirect()->to(base_url());
            }
        } 

    }   

public function Logout()
{   $session=session();
    $session->destroy();
    return redirect()->to('/login');
}
    
   
}