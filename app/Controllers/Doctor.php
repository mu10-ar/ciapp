<?php

namespace App\Controllers;

use App\models\UserModel;
use App\models\DepartmentModel;

class Doctor extends BaseController
{

     
    public function index()
    
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
               'firstname'=> 'required',
               'lastname'=> 'required',
                'email'=> 'required|valid_email|is_unique[users.email]',
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
                'department_name' => $this->request->getPost('department_name'),
                'birthday' => $this->request->getPost('birthday'),
                'blood_group' => $this->request->getPost('blood_group'),
                'user_role'=>  $this->request->getPost('user_role')
                
            ]);
             $success =true;
              return  redirect()->to('doctorslist');
           }
           else {
                  $data['validation']=$this->validator;
           }
           

            
           

        }
        $department=new DepartmentModel();
        $data['department']=$department->getDepartmentRecord();
        
        



          echo view('partials/sidebar',$data);
         echo view('doctor/adddoctor');
         
         echo view('partials/footer');
      
    }

     public function doctorslist()
    {
         $session=session();
        if (!$session->get('logged_in')) {
           return redirect()->to(base_url().'/login');
             
        }
        
        $users=new UserModel();
         $data['users']=$users->getDoctorRecord();
         echo view('partials/sidebar',$data);
         echo view('doctor/doctorslist');
         echo view('partials/footer');
                

    }


    public function deleteuser($id){
        $session=session();
        if (!$session->get('logged_in')) {
           return redirect()->to(base_url().'/login');
             
        }
       

        $users=new UserModel();
        $data['checking']=$users->getUserRecord($id);
        $users->deleteUser($id);
        


        
        return redirect()->to(base_url('/doctorslist'));
            

    }






    public function updateuser($id)
    
    {
        $session=session();
        if (!$session->get('logged_in')) {
           return redirect()->to(base_url().'/login');
             
        }
                $data=[];
                helper('form');
                $model= new UserModel ();
                $user=$model->getRow($id);
                $data['user']=$user;
               

        if( $this->request->getMethod()=='post'){
               $input=$this->validate([
               'firstname'=> 'required',
               'lastname'=> 'required',
               'email'=> 'required|valid_email',
                

               ]);

               
           
        
             
           if ($input==true) {
               
                    $model= new UserModel();
                    $model->update($id,[
                         'firstname'=> $this->request->getPost('firstname'),
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
                'user_role'=>  $this->request->getPost('user_role')
                    ]);
                    $userrole=$this->request->getVar('user_role');
                 
                    
                    
               
           }
           else {
                         $data['validation']=$this->validator;
                    }
        }
        
        $department=new DepartmentModel();
        $data['department']=$department->getDepartmentRecord();


        echo view('partials/sidebar',$data);
         echo view('doctor/updatedoctor');
         echo view('partials/footer');

      
        
            

    }

    public function userprofile($id)
    {

        $session=session();
        if (!$session->get('logged_in')) {
           return redirect()->to(base_url().'/login');
             
        }
        $users=new UserModel();
        $data['user']=$users->getRow($id);
        
         
        echo view('partials/sidebar',$data);
         echo view('doctor/profile.php');
         echo view('partials/footer');
    }

    

    
}