<?php

namespace App\Controllers;

use App\models\CaseStudyModel;
use App\models\NotificationModel;
use App\models\PrescriptionModel;
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
            'patient_id'=> [
                'rules'=>'required|is_unique[case_study.patient_id]',
                'errors'=>[ 
                    'required'=>'please select the patient',
                    'is_unique'=>'case study for this user already exists'
                    
                ]]
               
               

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
            $patient=$this->request->getPost('patient_id');

            $notification = new NotificationModel();
                $notification->save([
                    'message' => 'A case study has Benn Addes to your Profile <a class="text-primary" href="mycasestudy/'.$patient.'"> click to view</a>',
                    'user_id' => $this->request->getPost('patient_id')
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
    {
        $session=session();
        if (!$session->get('logged_in')) {
            return redirect()->to(base_url().'/login');
             
        }
        
        
        $data=[];
         $casestudy= new CaseStudyModel();
         $data['casestudy']=$casestudy->getCaseStudy();
         

  
  echo view('partials/sidebar',$data);
         echo view('prescription/casestudylist');
         echo view('partials/footer');

    }

    public function editcasestudy($id)
    { $session=session();
        if (!$session->get('logged_in')) {
            return redirect()->to(base_url().'/login');
             
        }
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

    { $session=session();
        if (!$session->get('logged_in')) {
            return redirect()->to(base_url().'/login');
             
        }
     $casestudy=new CaseStudyModel();
     $casestudy->delete($id);
     return redirect()->to(base_url().'/casestudylist');}











     public function casestudyinfo($id)
     {
        $session=session();
        if (!$session->get('logged_in')) {
            return redirect()->to(base_url().'/login');
             
        }
         
        $data=[];
        $casestudy= new CaseStudyModel();
        $data['casestudy']=$casestudy->getCaseStudySingle($id);



       
         echo view('partials/sidebar',$data);
         echo view('prescription/casestudyinfo');
         echo view('partials/footer');
     }








      public function addprescription()
     {
        $session=session();
        if (!$session->get('logged_in')) {
           return redirect()->to(base_url().'/login');
             
        }
                $data=[];
                helper('form');
        if( $this->request->getMethod()=='post'){
               $input=$this->validate([
                'patient_id'=> [
                   'rules'=>'required',
                   'errors'=>[ 
                       'required'=>'Please choose the Patient'
                      
                   ]],
        'blood_pressure'=> [
                   'rules'=>'required',
                   'errors'=>[ 
                       'required'=>'please enter patient`s Blood Pressure'
                       
                 ]],
        'date'=> [
                   'rules'=>'required',
                   'errors'=>[ 
                       'required'=>'please provide date',
                      
 

                

        ]]]);

               
           
        
             
           if ($input==true) {
               
                    $model= new PrescriptionModel();
                    $model->save([
                         'patient_id'=> $this->request->getPost('patient_id'),
                'blood_pressure' => $this->request->getPost('blood_pressure'),
                'weight' => $this->request->getPost('weight'),
                'date' => $this->request->getPost('date'),
                'medicine' => $this->request->getPost('medicine'),
                'medicine_days' => $this->request->getPost('medicine_days'),
                'diagnosis' => $this->request->getPost('diagnosis'),
                'diagnosis_instruction' => $this->request->getPost('diagnosis_instruction'),
                'visiting_fee' => $this->request->getPost('visiting_fee'),
                'patient_notes' => $this->request->getPost('patient_notes'),
                
                    ]);

                    redirect()->to(base_url()."/prescriptionlist");
                    
                 
                    
                    
               
           }
           else {
                         $data['validation']=$this->validator;
                    }
        }      
        $patient= new UserModel();
        $data['patient']=$patient->getpatientRecord();
         echo view('partials/sidebar',$data);
         echo view('prescription/addprescription');
         echo view('partials/footer');
     }



     public function prescriptionlist()
     {
         $data=[];
         $prescrption= new PrescriptionModel();
         $data['prescription']=$prescrption->getAllPrescription();
         


        echo view('partials/sidebar',$data);
        echo view('prescription/prescriptionlist');
        echo view('partials/footer');
     }

     public function delete($id)
     {
         $prescription= new PrescriptionModel();
         $prescription->delete($id);
         return redirect()->to(base_url()."/prescriptionlist");
     }

     public function myprescription($id)
     {
        $data=[];
        $prescrption= new PrescriptionModel();
        $data['prescription']=$prescrption->getSinglePrescription($id);
        if ($data['prescription']==null) {
            return redirect()->to(base_url()."/norecord");
        }
    


       echo view('partials/sidebar',$data);
       echo view('prescription/myprescription');
       echo view('partials/footer'); 
     }

     public function mycasestudy($id)
     {
         $casestudy = new CaseStudyModel();
         $data['casestudy']= $casestudy->mycasestudy($id);
         if ($data['casestudy']==null) {
            return redirect()->to(base_url()."/norecord");
        }
        
         echo view('partials/sidebar',$data);
         echo view('prescription/casestudyinfo');
         echo view('partials/footer');


     }
}