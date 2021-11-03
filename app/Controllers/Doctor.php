<?php

namespace App\Controllers;

use App\models\UserModel;
use App\models\DepartmentModel;

class Doctor extends BaseController
{


    public function index()

    {
        $session = \Config\Services::session();
        $data['session'] = $session;

        $data = [];
        $session = session();
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to(base_url() . '/login');
        }

        helper('form');
        if ($this->request->getMethod() == 'post') {
            $users = new UserModel();


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
                    'rules' => 'required|valid_email|is_unique[users.email]',
                    'errors' => [
                        'required' => 'please provide your email',
                        'valid_email' => 'Please enter a valid Email',
                        'is_unique' => 'This Email is Already Registered'

                    ]
                ],
                'password' => [
                    'rules' => 'required|min_length[10]',
                    'errors' => [
                        'required' => 'Create an Passwrod',
                        'min_length' => 'Your Password is too Shot'


                    ]
                ],
                'address' => [
                    'rules' => 'required|max_length[255]|alpha_numeric_space',
                    'errors' => [
                        'required' => 'Please provide your address',
                        'max_length' => 'Your Password is too Shot',
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
                    ]
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
                ],


            ]);




            if ($input == true) {

                $users->save([
                    'firstname' => $this->request->getPost('firstname'),
                    'lastname' => $this->request->getPost('lastname'),
                    'email' => $this->request->getPost('email'),
                    'password' => $this->request->getPost('password'),
                    'address' => $this->request->getPost('address'),
                    'specialist' => $this->request->getPost('specialist'),
                    'career_title' => $this->request->getPost('career_title'),
                    'mobile_no' => $this->request->getPost('mobile_no'),
                    'sex' => $this->request->getPost('sex'),
                    'designation' => $this->request->getPost('designation'),
                    'department_name' => $this->request->getPost('department_name'),
                    'birthday' => $this->request->getPost('birthday'),
                    'blood_group' => $this->request->getPost('blood_group'),
                    'user_role' =>  $this->request->getPost('user_role')

                ]);
               
            
                 $session->setFlashdata('success', 'Doctor Added, Data Saved Successfully');
                return  redirect()->to('doctorslist');
            } else {
                $data['validation'] = $this->validator;
            }
        }
        $department = new DepartmentModel();
        $data['department'] = $department->getDepartmentRecord();



        echo view('partials/sidebar', $data);
        echo view('doctor/adddoctor');

        echo view('partials/footer');
    }

    public function doctorslist()
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to(base_url() . '/login');
        }

        $users = new UserModel();
        $data['users'] = $users->getDoctorRecord();
        echo view('partials/sidebar', $data);
        echo view('doctor/doctorslist');
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
        return redirect()->to(base_url()."/doctorslist");
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
                    'career_title' => $this->request->getPost('career_title'),
                    'mobile_no' => $this->request->getPost('mobile_no'),
                    'sex' => $this->request->getPost('sex'),
                    'designation' => $this->request->getPost('designation'),
                    'department_name' => $this->request->getPost('department_name'),
                    'birthday' => $this->request->getPost('birthday'),
                    'blood_group' => $this->request->getPost('blood_group'),
                   
                ]);
                $session->setFlashdata('success', ' Updated Record successfully');
                return redirect()->to(base_url()."/doctorslist");


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

    public function userprofile($id)
    {

        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to(base_url() . '/login');
        }
        $users = new UserModel();
        $data['user'] = $users->getRow($id);


        echo view('partials/sidebar', $data);
        echo view('doctor/profile.php');
        echo view('partials/footer');
    }

    public function doctorscategory($id)
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to(base_url() . '/login');
        }

        $users = new UserModel();
        $data['users'] = $users->getSpecialDoctorRecord($id);
        echo view('partials/sidebar', $data);
        echo view('doctor/doctorslist');
        echo view('partials/footer');
    }
    
}
