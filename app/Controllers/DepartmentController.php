<?php

namespace App\Controllers;
use App\models\DepartmentModel;
use CodeIgniter\Session\Session;

class DepartmentController extends BaseController
{

       public function index()
    {
      $session = \Config\Services::session();
      $data['session'] = $session;

         $session=session();
        if (!$session->get('logged_in')) {
           return redirect()->to(base_url().'/login');
             
        }
            

        $department=new DepartmentModel();
         $data['department']=$department->getDepartmentRecord();
         echo view('partials/sidebar',$data);
         echo view('department/departmentlist');
         echo view('partials/footer');
                

    }


    public function createDepartment()
    {

       $session=session();
        if (!$session->get('logged_in')) {
           return redirect()->to(base_url().'/login');
             
        }



          helper('form');
        if ($this->request->getMethod()=='post') 
           {

            $department= new DepartmentModel;
               $department->save([
                'department_name'=> $this->request->getPost('department_name'),
                'department_description' => $this->request->getPost('department_description'),
                
            ]);
            $session->setFlashdata('success', 'Department Added, Data Saved Successfully');
             $success =true;
              return  redirect()->to('department');
           }
           
       
          echo view('partials/sidebar');
         echo view('department/createdepartment');
         echo view('partials/footer'); 
      
    }



    public function updatedepartment($id){

       $session=session();
        if (!$session->get('logged_in')) {
           return redirect()->to(base_url().'/login');
             
        }

            $departments= new DepartmentModel;
            $data['department']= $departments->getDeparmentRow($id);
         

            

          helper('form');
        if ($this->request->getMethod()=='post') 
           {

            $department= new DepartmentModel;
               $department->update($id,[
                'department_name'=> $this->request->getPost('department_name'),
                'department_description' => $this->request->getPost('department_description'),
                
            ]);
            $session->setFlashdata('success', '  Department Updated Successfully');
             $success =true;
              return  redirect()->to('department');
           }
           
       
         


             echo view('partials/sidebar',$data);
         echo view('department/updatedepartment');
         echo view('partials/footer'); 

            


    }
    

    public function deleteDepartment($id)
    {
       $session=session();
        if (!$session->get('logged_in')) {
           return redirect()->to(base_url().'/login');
             
        }
    
      $department = new DepartmentModel();
      $deleted= $department->delete($id);
      if ($deleted) {
         $session->setFlashdata('success', ' You deleted Department Record successfully');
        return redirect()->to('department');
          # code...
      }
    }





    
   
}