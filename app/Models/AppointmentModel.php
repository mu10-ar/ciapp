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
   

   
    
}