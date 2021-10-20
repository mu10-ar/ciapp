<?php

namespace App\Controllers;
use App\models\MedicineModel;


class MedicineController extends BaseController
{

     
    public function addmedicine()
    {
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
               'manufactured_by'=> 'required',
               

           ]);


           
           
           if ($input==true) {
               
               $users->save([
                'medicine_name'=> $this->request->getPost('medicine_name'),
                'medicine_category' => $this->request->getPost('medicine_category'),
                'medicine_price' => $this->request->getPost('medicine_price'),
                'medicine_stock' => $this->request->getPost('medicine_stock'),
                'manufactured_by' => $this->request->getPost('manufactured_by')
                
                
            ]);
             
              return  redirect()->to('medicinelist');
           }
           else {
                  $data['validation']=$this->validator;
                  var_dump($input);
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
        
          echo view('partials/sidebar');
         echo view('medicine/medicinelist');
         echo view('partials/footer');
      
       
       
      
    }
   
}