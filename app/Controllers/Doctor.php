<?php

namespace App\Controllers;

use App\models\UserModel;

class Doctor extends BaseController
{

     
    public function index()
    
    { 
        
        helper('form');
        if ($this->request->getMethod()=='post') {
            $users=new UserModel();

        $input=$this->validate([
               'firstname'=> 'required',
               'lastname'=> 'required',
               'email'=> 'required|valid_email',
               'password'=> 'required|min_length[10]'

           ]);

           
           
           if ($input==true) {
               $users->save([
                'firstname'=> $this->request->getPost('firstname'),
                'lastname' => $this->request->getPost('lastname'),
                'email' => $this->request->getPost('email'),
                'password' => $this->request->getPost('password'),
                'address' => $this->request->getPost('address')
            ]);
             $success =true;
              return  redirect()->to('doctorslist');
           }
           

            
           

        }



          echo view('partials/sidebar');
         echo view('doctor/adddoctor');
         echo view('partials/footer');
      
    }

     public function doctorslist()
    {
        
        $users=new UserModel();
         $data['users']=$users->getRecord();
         echo view('partials/sidebar',$data);
         echo view('doctor/doctorslist');
         echo view('partials/footer');
                

    }


    public function deleteuser($id){
       

        $users=new UserModel();
        $users->deleteUser($id);
         return  redirect()->to('doctorslist');
            

    }






    public function updateuser($id)
    
    {
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
        $users=new UserModel();
        $data['user']=$users->getRow($id);
        
         
        echo view('partials/sidebar',$data);
         echo view('doctor/profile.php');
         echo view('partials/footer');
    }

    

    
}