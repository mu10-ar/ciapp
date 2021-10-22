<?php
namespace App\models;
use CodeIgniter\Model;
class CaseStudyModel extends Model{
    protected $table ='case_study';
    protected $primaryKey ='case_study_id';
    protected $allowedFields=[
        'patient_id',
        'tendency_bleed',
        'food_allergies',
        'heart_disease',
        'high_bp',
        'diabetic',
        'surgery',
        'accident',
        'others',
        'family_medical_history',
        'current_medication',
        'pragnency',
        'breast_feeding',
        'health_insurance',
        'low_income',
        'reference'
        
                 
        
    ];
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