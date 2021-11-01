<?php

namespace App\Controllers;
use App\models\LoginModel;


class Login extends BaseController
{
      

     
    public function index()
    { 
        $session=session();
                $user= new LoginModel();
        if ($this->request->getMethod()=='post') {
             $email = $this->request->getVar('email');
             $password = $this->request->getVar('password');
             $userrole = $this->request->getVar('user_role');
            $data['password_error']=$user->CheckPassword( $password);
            $data['email_error']=$user->CheckEmail( $email);
            $data['user_role_error']=$user->CheckPassword( $userrole);

            $data['all']= $user->auth($email,$password,$userrole);
            // var_dump($data);
            if ($data['all']) {
                $session=session();
                
                $userdata=[
                    'logged_in'=>true,
                    'user_role'=>$userrole,
                    'user_id'=>$data['all']['id']
                ];
                $session->set($userdata);
    
            }else {
                echo view('login/login',$data);
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