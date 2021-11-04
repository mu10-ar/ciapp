<?php

namespace App\Controllers;

use App\models\BillingModel;
use App\models\DispatchMedicineModel;
use App\models\MedicineModel;
use App\models\UserModel;

class MedicineController extends BaseController
{

     
    public function addmedicine()
    {
        
        $session = \Config\Services::session();
        $data['session'] = $session;

        $session=session();
        if (!$session->get('logged_in')) {
            return redirect()->to(base_url().'/login');
             
        }

         helper('form');
        if ($this->request->getMethod()=='post') {
            $users=new MedicineModel();

        $input=$this->validate([
               'medicine_name'=> 'required',
               'medicine_category'=> 'required',
               'medicine_price'=> 'required',
               'medicine_stock'=> 'required',
               'manufactured_by'=> 'required'
               

           ]);


           
           
           if ($input==true) {
               
               $users->save([
                'medicine_name'=> $this->request->getPost('medicine_name'),
                'medicine_category' => $this->request->getPost('medicine_category'),
                'medicine_price' => $this->request->getPost('medicine_price'),
                'medicine_stock' => $this->request->getPost('medicine_stock'),
                'manufactured_by' => $this->request->getPost('manufactured_by')
                
                
            ]);
            $session->setFlashdata('success', ' Medicine Added Successfully');
              return  redirect()->to('medicinelist');
           }
           else {
                  $data['validation']=$this->validator;
              
           }
           

            
           

        }
        
        

        
          echo view('partials/sidebar');
         echo view('medicine/addmedicine');
         echo view('partials/footer');
      
       
       
      
    }

    public function medicinelist()
    {
         $session=session();
        if (!$session->get('logged_in')) {
           return redirect()->to(base_url().'/login');
             
        }
        
        $medicine=new MedicineModel();
         $data['medicine']=$medicine->getMedicine();
         echo view('partials/sidebar',$data);
         echo view('medicine/medicinelist');
         echo view('partials/footer');
       
       
      
    }

    public function editmedicine($id)
    {
        $session=session();
        if (!$session->get('logged_in')) {
           return redirect()->to(base_url().'/login');
             
        }

        
         helper('form');
        if ($this->request->getMethod()=='post') {
            $medicine=new MedicineModel();

        $input=$this->validate([
               'medicine_name'=> 'required',
               'medicine_category'=> 'required',
               'medicine_price'=> 'required',
               'medicine_stock'=> 'required',
               'manufactured_by'=> 'required'
               

           ]);


           
           
           if ($input==true) {
               
               $medicine->update($id,[
                'medicine_name'=> $this->request->getPost('medicine_name'),
                'medicine_category' => $this->request->getPost('medicine_category'),
                'medicine_price' => $this->request->getPost('medicine_price'),
                'medicine_stock' => $this->request->getPost('medicine_stock'),
                'manufactured_by' => $this->request->getPost('manufactured_by')
                
                
            ]);
            $session->setFlashdata('success', '  Medicine Stock Updated Successfully');
             
              return  redirect()->to('medicinelist');
            // echo "hello";
           }
           else {
                  $data['validation']=$this->validator;
              
           }
           

            
           

        }
        
        $medicine=new MedicineModel();
         $data['medicine']=$medicine->getRow($id);
         echo view('partials/sidebar',$data);
         echo view('medicine/editmedicine');
         echo view('partials/footer');
    }

    public function deletemedicine($id)
    {
        $session=session();
        if (!$session->get('logged_in')) {
            return redirect()->to(base_url().'/login');
             
        }
        $medicine=new MedicineModel();
         $data['medicine']=$medicine->getRow($id);
         $medicine->delete($id);
         $session->setFlashdata('success', '  Medicine Record Deleted Successfully');
         return redirect()->to(base_url()."/medicinelist");  
        
    }

    public function viewmedicine($id)
    {
        $session=session();
        if (!$session->get('logged_in')) {
            return redirect()->to(base_url().'/login');
             
        }
        $medicine=new MedicineModel();
         $data['medicine']=$medicine->getRow($id);
        
         echo view('partials/sidebar',$data);
         echo view('medicine/viewmedicine');
         echo view('partials/footer'); 
         
    }
    public function dispatch()
    {
        $session=session();
        if (!$session->get('logged_in')) {
           return redirect()->to(base_url().'/login');
             
        }
                $data=[];
                helper('form');
                
                   
        if( $this->request->getMethod()=='post'){
               $input=$this->validate([
                'qty'=> 'required',
                'patient_id'=> 'required',
                'medicine_id'=> 'required'
                
               ]);

                   if ($input==true) {
               
                    $dispatch= new DispatchMedicineModel();
                    $medicinePrice=new MedicineModel();
                    $id=$this->request->getPost('medicine_id');
                    $qty=$this->request->getPost('qty');
                    $medicinePrice=$medicinePrice->getRow($id);
                    $price=$qty*$medicinePrice['medicine_price'];
                    $bill =new BillingModel();
                    $bill->save([
                        'status'=> 0,
                        'price'=> $price,
                        'services'=> $medicinePrice['medicine_name'],
                        'services_description'=> "qty ".$this->request->getPost('qty'),
                        'patient_id'=> $this->request->getPost('patient_id'),
                       


                    ]);            
                    $dispatch->save([
                'medicine_id' => $this->request->getPost('medicine_id'),
                'patient_id' => $this->request->getPost('patient_id'),
                'qty' => $this->request->getPost('qty'),
                'price' => $this->request->getPost('qty')*$medicinePrice['medicine_price'],
                    ]);
                    
                 
                    
                    return redirect()->to(base_url()."/dispatchlist");
               
           }
           else {
                         $data['validation']=$this->validator;
                    }
        }
        
        $medicine=new MedicineModel();
        $data['medicine']=$medicine->getMedicine();
        $user=new UserModel();
        $data['patient']=$user->getpatientRecord();
         echo view('partials/sidebar',$data);
         echo view('medicine/dispatchmedicine');
         echo view('partials/footer'); 
         
    }
   
}