<?php
namespace App\models;
use CodeIgniter\Model;
class AppointmentModel extends Model{
    protected $table ='appointments';
    protected $primaryKey ='appointment_id';
    protected $allowedFields=[
        'department_name',
        'appointment_date',
        'patient_id',
        'problem',
        'status',
        'doctor_id'
    ];

    public function getAppointmentrecord(){
        $session=session();
        return $this->orderBy('appointment_id','DESC')->Where('status','0')->where('doctor_id',$session->get('user_id'))->findAll();
    }
    public function getschedule(){
        $session=session();
        return $this->orderBy('appointment_id','DESC')->Where('status','1')->where('doctor_id',$session->get('user_id'))->findAll();
    }
    public function getAppointmentNumber(){
        $session=session();
        return $this->orderBy('appointment_id','DESC')->findAll();
    }


   public function getDoctorRecord(){
        return $this->where('user_role',2)->findall();
    }
   public function getappointment($id){
        return $this->where('appointment_id',$id)->findall();
    }

    
     public function getpatientRecord(){
        return $this->where('user_role',4)->findall();
    }

   
    
}