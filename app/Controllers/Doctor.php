<?php

namespace App\Controllers;

use App\models\UserModel;

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
              return  redirect()->to('doctorslist');
           }
           else {
                  $data['validation']=$this->validator;
           }
           

            
           

        }
        



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
         $data['users']=$users->getRecord();
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
        $users->deleteUser($id);
         return  redirect()->to('doctorslist');
            

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
                    
                        'address' => $this->request->getPost('address')
                    ]);
                    // $session->setFlashdata('success','winner winner chicken dinner , record updated');
                    return  redirect()->to(base_url('/doctorslist'));
                    
               
           }
        }
        


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