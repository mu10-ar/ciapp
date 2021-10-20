<?php

namespace App\Controllers;

use App\models\UserModel;

class Nurse extends BaseController
{

     
    public function addnurse()
    {
        $session=session();
        if (!$session->get('logged_in')) {
            return redirect()->to(base_url().'/login');
             
        }

         
        helper('form');
        if ($this->request->getMethod()=='post') 
        {
                    $users=new UserModel();

                $input=$this->validate([
                    'firstname'=> 'required',
                    'user-role'=> 'required',
                    'firstname'=> 'required',
                    'lastname'=> 'required',
                    'email'=> 'required|valid_email',
                    'password'=> 'required|min_length[10]',
               

                    ]);

                    if ($input==true) {
                        
                        $users->save([
                            'firstname'=> $this->request->getPost('firstname'),
                            'lastname' => $this->request->getPost('lastname'),
                        'email' => $this->request->getPost('email'),
                        'password' => $this->request->getPost('password'),
                        'address' => $this->request->getPost('address'),
                        'specialist' => $this->request->getPost('specialist'),
                        'mobile_no' => $this->request->getPost('mobile_no'),
                        'sex' => $this->request->getPost('sex'),
                        'designation' => $this->request->getPost('designation'),
                        'department' => $this->request->getPost('department'),
                        'birthday' => $this->request->getPost('birthday'),
                        'blood_group' => $this->request->getPost('blood_group'),
                        'user_role'=>  $this->request->getPost('user_role')
                
            ]);
             $success =true;
              return  redirect()->to('nurselist');
           }
                    else {
                            $data['validation']=$this->validator;
                    }
           
                }

        
          echo view('partials/sidebar');
         echo view('nurse/addnurse');
         echo view('partials/footer');
      
       
               
      
    }




     public function nurselist()
    {
         $session=session();
        if (!$session->get('logged_in')) {
           return redirect()->to(base_url().'/login');
             
        }
        
        $users=new UserModel();
         $data['users']=$users->getNurseRecord();
         echo view('partials/sidebar',$data);
         echo view('nurse/nurselist');
         echo view('partials/footer');
                

    }
}