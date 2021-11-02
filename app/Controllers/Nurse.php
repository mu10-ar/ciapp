<?php

namespace App\Controllers;

use App\models\AssignNurseModel;
use App\models\UserModel;
use App\models\DepartmentModel;
use App\models\NotificationModel;

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



    public function updateuser($id)

    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to(base_url() . '/login');
        }
        $data = [];
        helper('form');
        $model = new UserModel();
        $user = $model->getRow($id);
        $data['user'] = $user;


        if ($this->request->getMethod() == 'post') {
            $input = $this->validate([
                'firstname' => [
                    'rules' => 'required|alpha_space',
                    'errors' => [
                        'required' => 'name must be filled',
                        'alpha_space' => 'name can contain only letters'
                    ]
                ],
                'lastname' => [
                    'rules' => 'required|alpha_space',
                    'errors' => [
                        'required' => 'last name must be filled',
                        'alpha_space' => 'name can contain only letters'
                    ]
                ],
                'email' => [
                    'rules' => 'required|valid_email',
                    'errors' => [
                        'required' => 'please provide your email',
                        'valid_email' => 'Please enter a valid Email'
                      

                    ]
                ],
            
               
                'address' => [
                    'rules' => 'required|max_length[255]|alpha_numeric_space',
                    'errors' => [
                        'required' => 'Please provide your address',
                        'max_length' => 'Your Address is to long',
                        'alpha_numeric_space' => "Address Can't Contain Special Characters`"


                    ]
                ],
                'specialist' => [
                    'rules' => 'alpha_numeric_space|permit_empty',
                    'errors' => [
                        'alpha_numeric_space' => "please insert your specialization"
                    ]
                ],
                'career_title' => [
                    'rules' => 'alpha_numeric_space|permit_empty',
                    'errors' => [
                        'alpha_numeric_space' => "please insert career title"
                    ]
                ],
                'designation' => [
                    'rules' => 'alpha_numeric_space|permit_empty',
                    'errors' => [
                        'alpha_numeric_space' => "please insert your designation"
                    ],
               
                'sex' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => "Please select your gender"
                    ]
                ],
                'department_name' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => "Please select your department"
                    ]
                ],
                'birthday' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => "Please select your Date od Birth"
                    ]
                ],
                'blood_group ' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => "Please select your blood group"
                    ]
                ]

            ]]);


               
           
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
                   
                ]);
                $session->setFlashdata('success', ' Updated Record successfully');
                return redirect()->to(base_url()."/nurselist");


            } else {
                $data['validation'] = $this->validator;
            }
        }

        $department = new DepartmentModel();
        $data['department'] = $department->getDepartmentRecord();


        echo view('partials/sidebar', $data);
        echo view('doctor/updatedoctor');
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

    public function deleteuser($id)
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to(base_url() . '/login');
        }


        $users = new UserModel();
        $data['checking'] = $users->getUserRecord($id);

        $users->deleteUser($id);
        $session->setFlashdata('success', ' REcord deleted successfully');
        return redirect()->to(base_url()."/nurselist");
    }
    public function assignnurse()
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to(base_url() . '/login');
        }
        $user=new UserModel();
        $data['patient']=$user->getpatientRecord();
        $data['nurse']=$user->getNurseRecord();

        if ($this->request->getMethod() == 'post') {
            $input = $this->validate([
                'patient_id' => "required", 
                'nurse_id' => "required", 
                  

            ]);


               
           
            if ($input == true) {

                $model = new AssignNurseModel();
                $model->save( [
                    'nurse_id' => $this->request->getPost('nurse_id'),
                    'patient_id' => $this->request->getPost('patient_id'),
                    'notes' => $this->request->getPost('notes'),
                  
                   
                ]);
                $notification = new NotificationModel();
                $notification->save([
                    'message' => 'a nurse has assigned to you <a class="text-primary" href="profile/'.$this->request->getPost('nurse_id').'"> click to view</a>',
                    'user_id' => $this->request->getPost('patient_id')
                ]);
                $notification->save([
                    'message' => 'you have been assigned to a patient <a class="text-primary" href="profile/'.$this->request->getPost('patient').'"> click to view</a>',
                    'user_id' => $this->request->getPost('patient_id')
                ]);
                $session->setFlashdata('success', ' Nurse Assigned successfully');
                return redirect()->to(base_url()."/assignednurse");


            } else {
                $data['validation'] = $this->validator;
                var_dump($input);
            }
        }


        echo view('partials/sidebar',$data);
        echo view('nurse/assignnurse');
        echo view('partials/footer');
        
    }

    public function assignednurse()
    {
        $session=session();
        if (!$session->get('logged_in')) {
           return redirect()->to(base_url().'/login');
             
        }
         $department=new DepartmentModel();
        $data['department']=$department->getDepartmentRecord();
        
        $users=new AssignNurseModel();
         $data['users']=$users->getAssignedRecord();
         echo view('partials/sidebar',$data);
         echo view('nurse/assignednurse');
         echo view('partials/footer');
    }

    public function unassign($id)
    {$session = session();
      $model = new AssignNurseModel();
      $model->delete($id);
      $session->setFlashdata('success', ' Nurse UnAssigned successfully');
                return redirect()->to(base_url()."/assignednurse");

    }
}