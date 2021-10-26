<?php
namespace App\models;
use CodeIgniter\Model;
class PrescriptionModel extends Model{
    protected $table ='prescriptions';
    protected $primaryKey ='prescription_id';
    protected $allowedFields=[
        'patient_id',
        'blood_pressure',
        'weight',
        'date',
        'medicine',
        'medicine_days',
        'diagnosis',
        'diagnosis_instruction',
        'visiting_fee',
        'patient_notes',    
    ];
            function getAllPrescription()       
                        {
                            return $this->orderby('prescription_id','desc')->findall();
                        }
            function getMyPrescription()       
                        {
                            $session=session();
                            return $this->orderby('prescription_id','desc')->where('patient_id',$session->get('user_id'))->first();
                        }
            function getSinglePrescription($id)       
                        {
                            return $this->where('patient_id',$id)->find();
                        }





































    public function getDepartmentRecord(){
        return $this->orderBy('department_id','DESC')->findAll();
    }



     public function getDeparmentRow($id){
        return $this->where('department_id',$id)->first();
    }
    
    public function deleteDepartment($id){
        return $this->delete($id);
    }

   
    
}