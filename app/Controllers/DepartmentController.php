<?php

namespace App\Controllers;
use App\models\DepartmentModel;


class DepartmentController extends BaseController
{

     
       public function index()
    {
        
        $department=new DepartmentModel();
         $data['department']=$department->getDepartmentRecord();
         echo view('partials/sidebar',$data);
         echo view('department/departmentlist');
         echo view('partials/footer');
                

    }


    public function createDepartment()
    {




          helper('form');
        if ($this->request->getMethod()=='post') 
           {

            $department= new DepartmentModel;
               $department->save([
                'department_name'=> $this->request->getPost('department_name'),
                'department_description' => $this->request->getPost('department_description'),
                
            ]);
             $success =true;
              return  redirect()->to('department');
           }
           
       
          echo view('partials/sidebar');
         echo view('department/createdepartment');
         echo view('partials/footer'); 
      
    }



    public function updatedepartment($id){

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
             $success =true;
              return  redirect()->to('department');
           }
           
       
         


             echo view('partials/sidebar',$data);
         echo view('department/updatedepartment');
         echo view('partials/footer'); 

            


    }
    

    public function deleteDepartment($id)
    {
      $department = new DepartmentModel();
      $deleted= $department->delete($id);
      if ($deleted) {

        return redirect()->to('department');
          # code...
      }
    }





    
   
}