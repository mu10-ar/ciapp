<?php

namespace App\Controllers;

use App\models\DepartmentModel;
use App\models\UserModel;

class User extends BaseController
{


    public function index()
    {
        $session = \Config\Services::session();
                    $data['session'] = $session;
                    
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to(base_url() . '/login');
        }

        echo view('partials/sidebar');
        echo view('doctor/dashboard');
        echo view('partials/footer');
    }



    public function adduser()
    {
        $data = [];
        $session = session();
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to(base_url() . '/login');
        }
        if ($session->get('user_role') == 4) {
            return redirect()->to(base_url() . '/login');
        }

        helper('form');
        if ($this->request->getMethod() == 'post') {
            $users = new UserModel();


            $input = $this->validate([
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
                    'rules'=>'required|valid_email',
                    'errors'=>[ 
                        'required'=>'please provide your email',
                        'valid_email'=>'Please enter a valid Email'
                    
 
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
         'specialist '=> [
                    'rules'=>'required|permit_empty|alpha_numeric_space',
                    'errors'=>[ 
                        'required'=>"Please select your blood group",
                        'alpha_numeric_space'=>"special characters not allowed"
                    ]],
         'designation '=> [
                    'rules'=>'required|permit_empty|alpha_numeric_space',
                    'errors'=>[ 
                        'required'=>"Please select your blood group",
                        'alpha_numeric_space'=>"special characters not allowed"
                    ]],
         'career_title '=> [
                    'rules'=>'required|permit_empty|alpha_numeric_space',
                    'errors'=>[ 
                        'required'=>"Please select your blood group",
                        'alpha_numeric_space'=>"special characters not allowed"
                        
                    ]],
                
 
            ]);


          




            if ($input == true) {

                $users->save([
                    'firstname' => $this->request->getPost('firstname'),
                    'lastname' => $this->request->getPost('lastname'),
                    'email' => $this->request->getPost('email'),
                    'password' => $this->request->getPost('password'),
                    'address' => $this->request->getPost('address'),
                    'specialist' => $this->request->getPost('specialist'),
                    'mobile_no' => $this->request->getPost('mobile_no'),
                    'sex' => $this->request->getPost('sex'),
                    'designation' => $this->request->getPost('designation'),
                    'department_name' => $this->request->getPost('department_name'),
                    'birthday' => $this->request->getPost('birthday'),
                    'blood_group' => $this->request->getPost('blood_group'),
                    'user_role' =>  $this->request->getPost('user_role')

                ]);
                $session->setFlashdata('Success','User Added Successfullu');
                return  redirect()->to('employeelist');
            } else {
                $data['validation'] = $this->validator;
            }
        }


        $department = new DepartmentModel();
        $data['department'] = $department->getDepartmentRecord();

        echo view('partials/sidebar', $data);
        echo view('humanresources/addemployee');
        echo view('partials/footer');
    }
    public function employeelist()
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to(base_url() . '/login');
        }

        $users = new UserModel();
        $data['users'] = $users->getAlluser();

        echo view('partials/sidebar', $data);
        echo view('humanresources/employeelist');
        echo view('partials/footer');
    }

    public function deleteemployee($id)
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to(base_url() . '/login');
        }
        if ($session->get('user_role') == 4) {
            return redirect()->to(base_url() . '/login');
        }


        $users = new UserModel();
        $data['checking'] = $users->getUserRecord($id);
        $users->deleteUser($id);




        return redirect()->to(base_url('employeelist'));
    }



    public function updateEmployee($id)
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to(base_url() . '/login');
        }
        if ($session->get('user_role') == 4) {
            return redirect()->to(base_url() . '/login');
        }
        $data = [];
        helper('form');
        $model = new UserModel();
        $user = $model->getRow($id);
        $data['user'] = $user;


        if ($this->request->getMethod() == 'post') {
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
                    'rules'=>'required|valid_email',
                    'errors'=>[ 
                        'required'=>'please provide your email',
                        'valid_email'=>'Please enter a valid Email'
                    
 
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
         'specialist '=> [
                    'rules'=>'permit_empty|alpha_numeric_space',
                    'errors'=>[ 
                       
                        'alpha_numeric_space'=>"special characters not allowed"
                    ]],
         'designation '=> [
                    'rules'=>'permit_empty|alpha_numeric_space',
                    'errors'=>[ 
                       
                        'alpha_numeric_space'=>"special characters not allowed"
                    ]],
         'career_title '=> [
                    'rules'=>'permit_empty|alpha_numeric_space',
                    'errors'=>[ 
                       
                        'alpha_numeric_space'=>"special characters not allowed"
                        
                    ]],
                
 
            ]);




            if ($input == true) {

                $model = new UserModel();
                $model->update($id, [
                    'firstname' => $this->request->getPost('firstname'),
                    'lastname' => $this->request->getPost('lastname'),
                    'email' => $this->request->getPost('email'),
                    'address' => $this->request->getPost('address'),
                    'specialist' => $this->request->getPost('specialist'),
                    'mobile_no' => $this->request->getPost('mobile_no'),
                    'sex' => $this->request->getPost('sex'),
                    'designation' => $this->request->getPost('designation'),
                    'department_name' => $this->request->getPost('department_name'),
                    'birthday' => $this->request->getPost('birthday'),
                    'blood_group' => $this->request->getPost('blood_group'),
                    'user_role' =>  $this->request->getPost('user_role')
                ]);
                $userrole = $this->request->getVar('user_role');
                // $session->setFlashdata('success','winner winner chicken dinner , record updated');
                //    if ($userrole==3) {
                return  redirect()->to(base_url('employeelist'));
                //    }



            } else {
                $data['validation'] = $this->validator;
            }
        }

        $department = new DepartmentModel();
        $data['department'] = $department->getDepartmentRecord();


        echo view('partials/sidebar', $data);
        echo view('humanresources/updateemployee');
        echo view('partials/footer');
    }

    public function norecord()
    {
        echo view('partials/sidebar');
        echo view('errors/norecord');
        echo view('partials/footer');
    }
}