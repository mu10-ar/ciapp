<?php

namespace App\Controllers;

use App\models\AppointmentModel;
use App\models\bedModel;
use App\models\LoginModel;
use App\models\PrescriptionModel;
use App\models\UserModel;

class Home extends BaseController
{

     
    public function index()
    {
     
        $session=session();
        if (!$session->get('logged_in')) {
            return redirect()->to(base_url().'/login');
             
        }
        $data=[];
        $patient= new UserModel();
        $doctor= new UserModel();
        $nurse= new UserModel();
        $prescription= new PrescriptionModel();
        $appointment= new AppointmentModel();
        $bed= new bedModel();
        $data['patient']=count($patient->getPatientNumber());
        $data['bed']=count($bed->getBedNumber());
        $data['doctor']=count($doctor->getDoctorNumber());
        $data['nurse']=count($nurse->getNurseNumber());
        $data['prescription']=count($prescription->getPrescriptionNumber());
        $data['appointment']=count($appointment->getAppointmentNumber());
      

        $users = new UserModel();
        $data['users'] = $users->getDoctorRecord();

         echo view('partials/sidebar',$data);
         if($session->get('user_role')==4){
            echo view('doctor/doctorslist');
         }else {
            echo view('doctor/dashboard');
         }
         
         echo view('partials/footer');
      
       
       
      
    }

    public function login()
    {
        
        $session=session();

        $user= new LoginModel();
        $session->logged_in=false;
        $data=[];
        $data['password_error']=false;
        $data['email_error']=false;
        if ($this->request->getMethod()=='post') {
             $email = $this->request->getVar('email');
             $password = $this->request->getVar('password');
             $userrole = $this->request->getVar('user_role');
            $data['password_error']=$user->CheckPassword( $password);
            $data['email_error']=$user->CheckPassword( $email);
            $data['user_role_error']=$user->CheckPassword( $userrole);

            if ( !$data['password_error']) {
                
                $data['password_error']=true;
            }
          

            if (!$data['email_error']) {
                
                $data['email_error']=true;
            }
            

         




            $data['all']= $user->auth($email,$password,$userrole);
            // var_dump($data);
            if ($data['all']) {
                $session=session();
                
                $userdata=[
                    'logged_in'=>true,
                    'user_role'=>$userrole,
                    'user_id'=>$data['all']['id']
                ];
                $session->set($userdata);
         
            }
            
            if ($session->get('logged_in')==true) {
                return redirect()->to(base_url());
            }
        } 


         echo view('login/login',$data);
         
       
    }
   
}
