<?php
namespace App\models;
use CodeIgniter\Model;
class AppointmentModel extends Model{
    protected $table ='appointments';
    protected $primaryKey ='appointment_id';
    protected $allowedFields=[
        'department_name',
        'doctor_name',
        'appointment_date',
        'id',
        'problem',
    ];

    public function getAppointmentrecord(){
        return $this->orderBy('appointment_id','DESC')->findAll();
    }


   public function getDoctorRecord(){
        return $this->where('user_role',2)->findall();
    }

    
     public function getpatientRecord(){
        return $this->where('user_role',4)->findall();
    }

   
    
}