<?php

namespace App\Controllers;

use App\models\UserModel;
use App\models\DepartmentModel;

class Nurse extends BaseController
{

     
    public function addnurse()
    {
    

        $data=[];
        $session=session();
        $session=session();
        if (!$session->get('logged_in')) {
           return redirect()->to(base_url().'/login');
             
        }
        
        helper('form');
        if ($this->request->getMethod()=='post') {
            $users=new UserModel();

        $input=$this->validate([
               'firstname'=> [
                   'rules'=>'required|alpha_space',
                   'errors'=>[ 
                       'required'=>'name must be filled',
                       'alpha_space'=>'name can contain only letters'
                   ]],
        'lastname'=> [
                   'rules'=>'required|alpha_space',
                   'errors'=>[ 
                       'required'=>'last name must be filled',
                       'alpha_space'=>'name can contain only letters'
                 ]],
        'email'=> [
                   'rules'=>'required|valid_email|is_unique[users.email]',
                   'errors'=>[ 
                       'required'=>'please provide your email',
                       'valid_email'=>'Please enter a valid Email',
                       'is_unique'=>'This Email is Already Registered'

                   ]],
        'password'=> [
                   'rules'=>'required|min_length[10]',
                   'errors'=>[ 
                       'required'=>'Create an Passwrod',
                       'min_length'=>'Your Password is too Shot'
                      

                   ]],
        'address'=> [
                   'rules'=>'required|max_length[255]|alpha_numeric_space',
                   'errors'=>[ 
                       'required'=>'Please provide your address',
                       'max_length'=>'Your Password is too Shot',
                       'alpha_numeric_space'=>"Address Can't Contain Special Characters`"
                      

                   ]],
        'sex'=> [
                   'rules'=>'required',
                   'errors'=>[ 
                       'required'=>"Please select your gender"
                   ]],
         'department_name'=> [
                   'rules'=>'required',
                   'errors'=>[ 
                       'required'=>"Please select your department"
                   ]],
        'birthday'=> [
                   'rules'=>'required',
                   'errors'=>[ 
                       'required'=>"Please select your Date od Birth"
                   ]],
        'blood_group '=> [
                   'rules'=>'required',
                   'errors'=>[ 
                       'required'=>"Please select your blood group"
                   ]],
               

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
                'department_name' => $this->request->getPost('department_name'),
                'user_role'=>  $this->request->getPost('user_role')
                
            ]);
            $session->setFlashdata('success', ' Nurse Added Successfully');
              return  redirect()->to(base_url().'/nurselist');
           }
           else {
                  $data['validation']=$this->validator;
           }
           

            
           

        }
        
 $department=new DepartmentModel();
        $data['department']=$department->getDepartmentRecord();


          echo view('partials/sidebar',$data);
         echo view('nurse/addnurse');
         echo view('partials/footer');
      
    }




     public function nurselist()
    {
         $session=session();
        if (!$session->get('logged_in')) {
           return redirect()->to(base_url().'/login');
             
        }
         $department=new DepartmentModel();
        $data['department']=$department->getDepartmentRecord();
        
        $users=new UserModel();
         $data['users']=$users->getNurseRecord();
         echo view('partials/sidebar',$data);
         echo view('nurse/nurselist');
         echo view('partials/footer');
                

    }
}