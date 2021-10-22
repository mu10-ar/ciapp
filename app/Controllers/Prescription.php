<?php

namespace App\Controllers;

use App\models\CaseStudyModel;
use App\models\UserModel;

class Prescription extends BaseController
{

     
    public function addcasestudy()
    {
        $data=[];
        $session=session();
        if (!$session->get('logged_in')) {
            return redirect()->to(base_url().'/login');
             
        }


 helper('form');
        if ($this->request->getMethod()=='post') {
            $casestudy=new CaseStudyModel();
            

        $input=$this->validate([
               'patient_id'=> 'required|is_unique[case_study.patient_id]'
               
               

           ]);


           
           
           if ($input==true) {
               
               $casestudy->save([
                'patient_id'=> $this->request->getPost('patient_id'),
                'tendency_bleed' => $this->request->getPost('tendency_bleed'),
                'food_allergies' => $this->request->getPost('food_allergies'),
                'heart_disease' => $this->request->getPost('heart_disease'),
                'high_bp' => $this->request->getPost('high_bp'),
                'diabetic' => $this->request->getPost('diabetic'),
                'surgery' => $this->request->getPost('surgery'),
                'accident' => $this->request->getPost('accident'),
                'others' => $this->request->getPost('others'),
                'family_medical_history' => $this->request->getPost('family_medical_history'),
              
                'current_medication' => $this->request->getPost('current_medication'),
                'pragnency'=>  $this->request->getPost('pragnency'),
                'breast_feeding'=>  $this->request->getPost('breast_feeding'),
                'health_insurance'=>  $this->request->getPost('health_insurance'),
                'low_income'=>  $this->request->getPost('low_income'),
                'reference'=>  $this->request->getPost('reference')
                
                
                
                
            ]);
             $success =true;
              return  redirect()->to('casestudylist');
           }
           else {
                  $data['validation']=$this->validator;
           }
           

            
           

        }



        $patient= new UserModel();
        $data['patient']=$patient->getpatientRecord();
          echo view('partials/sidebar',$data);
         echo view('prescription/addcasestudy');
         echo view('partials/footer');
      
       
       
      
    }

    public function caseStudylist()
    {$data=[];
         $casestudy= new CaseStudyModel();
         $data['casestudy']=$casestudy->getCaseStudy();
         

  
  echo view('partials/sidebar',$data);
         echo view('prescription/casestudylist');
         echo view('partials/footer');

    }

    public function editcasestudy($id)
    {
        $casestudy= new CaseStudyModel();
        $data['casestudy']=$casestudy->getCaseStudySingle($id);


        helper('form');
        if ($this->request->getMethod()=='post') {
            $casestudy=new CaseStudyModel();
            

        $input=$this->validate([
               'patient_id'=> 'required'
               
               

           ]);


           
           
           if ($input==true) {
               
               $casestudy->update($id,[
                'patient_id'=> $this->request->getPost('patient_id'),
                'tendency_bleed' => $this->request->getPost('tendency_bleed'),
                'food_allergies' => $this->request->getPost('food_allergies'),
                'heart_disease' => $this->request->getPost('heart_disease'),
                'high_bp' => $this->request->getPost('high_bp'),
                'diabetic' => $this->request->getPost('diabetic'),
                'surgery' => $this->request->getPost('surgery'),
                'accident' => $this->request->getPost('accident'),
                'others' => $this->request->getPost('others'),
                'family_medical_history' => $this->request->getPost('family_medical_history'),
              
                'current_medication' => $this->request->getPost('current_medication'),
                'pragnency'=>  $this->request->getPost('pragnency'),
                'breast_feeding'=>  $this->request->getPost('breast_feeding'),
                'health_insurance'=>  $this->request->getPost('health_insurance'),
                'low_income'=>  $this->request->getPost('low_income'),
                'reference'=>  $this->request->getPost('reference')
                
                
                
                
            ]);
             $success =true;
              return  redirect()->to('casestudylist');
           }
           else {
                  $data['validation']=$this->validator;
           }
           

            
           

        }
        
          echo view('partials/sidebar',$data);
         echo view('prescription/editcasestudy');
         echo view('partials/footer');
    }

    public function deletecasestudy($id)

    {
     $casestudy=new CaseStudyModel();
     $casestudy->delete($id);
     return redirect()->to(base_url().'/scasestudylist');}
}