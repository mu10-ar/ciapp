<?php

namespace App\Controllers;
use App\models\UserModel;
use App\models\DepartmentModel;

class Patient extends BaseController
{

       public function addpatient()
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
              return  redirect()->to('patientlist');
           }
           else {
                  $data['validation']=$this->validator;
           }
        }
        $department=new DepartmentModel();
        $data['department']=$department->getDepartmentRecord();
          echo view('partials/sidebar',$data);
         echo view('patient/addpatient');
         echo view('partials/footer');
    }
    


     public function patientlist()
    { $session=session();
        if (!$session->get('logged_in')) {
           return redirect()->to(base_url().'/login');
             
        }
        
        $users=new UserModel();
         $data['users']=$users->getpatientRecord();
         echo view('partials/sidebar',$data);
         echo view('patient/patientlist');
         echo view('partials/footer');
      
       
       
      
    }

    
    function updatepatient($id)
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
                   
                    // $session->setFlashdata('success','winner winner chicken dinner , record updated');
                //    if ($userrole==3) {
                       return  redirect()->to(base_url('patientlist'));
                //    }
                    
                    
               
           }
           else {
                         $data['validation']=$this->validator;
                    }
        }
        
        $department=new DepartmentModel();
        $data['department']=$department->getDepartmentRecord();
          echo view('partials/sidebar',$data);
         echo view('patient/updatepatient');
         echo view('partials/footer');
    }




    public function deletepatient($id)
    {
         $session=session();
        if (!$session->get('logged_in')) {
           return redirect()->to(base_url().'/login');
             
        }
       

        $users=new UserModel();
        $data['checking']=$users->getUserRecord($id);
        $users->deleteUser($id);
        


        
        return redirect()->to(base_url('patientlist'));
    }

   
}