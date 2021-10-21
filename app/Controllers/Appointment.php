<?php

namespace App\Controllers;

use App\models\AppointmentModel;
use App\models\DepartmentModel;
use App\models\UserModel;

class Appointment extends BaseController
{

     
    public function addappointment()
    {
        
        $data=[];
        $session=session();
        
        if (!$session->get('logged_in')) {
           return redirect()->to(base_url().'/login');
             
        }
        
        helper('form');
        if ($this->request->getMethod()=='post') {
            $appointment=new AppointmentModel();
            

        $input=$this->validate([
               'doctor_name'=> 'required',
               'id'=> 'required',
                'appointment_date'=> 'required',
                'problem'=> 'required',
                'department_name'=> 'required',
               

           ]);


           
           
           if ($input==true) {
               
               $appointment->save([
                'doctor_name'=> $this->request->getPost('doctor_name'),
                'id' => $this->request->getPost('id'),
                'department_name' => $this->request->getPost('department_name'),
                'appointment_date' => $this->request->getPost('appointment_date'),
                'problem' => $this->request->getPost('problem'),
                
                
            ]);
             $success =true;
              return  redirect()->to('appointments');
           }
           else {
                  $data['validation']=$this->validator;
           }
           

            
           

        }
        $department=new DepartmentModel();
        $data['department']=$department->getDepartmentRecord();
        $doctor=new UserModel();
        $data['doctor']=$doctor->getDoctorRecord();
        $patient= new UserModel();
        $data['patient']=$patient->getpatientRecord();
       

        
        



          echo view('partials/sidebar',$data);
         echo view('appointment/addappointment');
         
         echo view('partials/footer');
       
       
      
    }


     public function appointments()
    {
        $session=session();
        if (!$session->get('logged_in')) {
            return redirect()->to(base_url().'/login');
             
        }
        $appointment= new AppointmentModel();
        $data['appointment']=$appointment->getAppointmentrecord();
        
          echo view('partials/sidebar',$data);
         echo view('appointment/appointmentlist');
         echo view('partials/footer');
      
       
       
      
    }

    public function editappointment($id)
    {

         
         $data=[];
        $session=session();
        
        if (!$session->get('logged_in')) {
           return redirect()->to(base_url().'/login');
             
        }
         
        helper('form');
        if ($this->request->getMethod()=='post') {
            $appointment=new AppointmentModel();
            

        $input=$this->validate([
               'doctor_name'=> 'required',
               'id'=> 'required',
                'appointment_date'=> 'required',
                'problem'=> 'required',
                'department_name'=> 'required',
               

           ]);


           
           
           if ($input==true) {
               
               $appointment->update($id,[
                'doctor_name'=> $this->request->getPost('doctor_name'),
                'id' => $this->request->getPost('id'),
                'department_name' => $this->request->getPost('department_name'),
                'appointment_date' => $this->request->getPost('appointment_date'),
                'problem' => $this->request->getPost('problem'),
                
                
            ]);
             $success =true;
              return  redirect()->to('appointments');
           }
           else {
                  $data['validation']=$this->validator;
           }
        }
           

         $appointment= new AppointmentModel();
         $data['appointment']=$appointment->getappointment($id);
           $department=new DepartmentModel();
        $data['department']=$department->getDepartmentRecord();
        $doctor=new UserModel();
        $data['doctor']=$doctor->getDoctorRecord();
        $patient= new UserModel();
        $data['patient']=$patient->getpatientRecord();
        
        

          echo view('partials/sidebar',$data);
         echo view('appointment/editappointment');
         echo view('partials/footer');
    }


     public function deleteappointment($id)
    {
        $appointment= new AppointmentModel();
        $appointment->delete($id);
        return redirect()->to(base_url('/appointments')); 
    }


}