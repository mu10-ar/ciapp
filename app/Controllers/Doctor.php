<?php

namespace App\Controllers;

use App\models\DoctorModel;

class Doctor extends BaseController
{

     
    public function index()
    
    { 
        
        helper('form');
        if ($this->request->getMethod()=='post') {
            $users=new DoctorModel();

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
        
        $users=new DoctorModel();
         $data['users']=$users->getRecord();
         echo view('partials/sidebar',$data);
         echo view('doctor/doctorslist');
         echo view('partials/footer');
                

    }


    public function deleteuser($id){
        echo "hello";

        $users=new DoctorModel();
        $users->deleteUser($id);
         return  redirect()->to('doctorslist');
            

    }






    public function updateuser($id)
    
    {
                $data=[];
                helper('form');
                $model= new DoctorModel ();
                $user=$model->getRow($id);
                $data['user']=$user;
               

        if( $this->request->getMethod()=='post'){
               $input=$this->validate([
               'firstname'=> 'required',
               'lastname'=> 'required',
               'email'=> 'required|valid_email',
                

           ]);
           var_dump($input);
        
             
           if ($input==true) {
               
                    $model= new DoctorModel();
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

    
}