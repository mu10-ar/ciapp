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
    public function getCaseStudy(){
        return $this->join('users','id=patient_id')->findall();
    }
    public function getCaseStudySingle($id){
        return $this->join('users','id=patient_id')->where('case_study_id',$id)->first();
    }
  



   
    
}