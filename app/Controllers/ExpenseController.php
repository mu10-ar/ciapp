<?php

namespace App\Controllers;

use App\models\AppointmentModel;
use App\models\bedModel;
use App\models\ExpenseModel;
use App\models\IncomeModel;
use App\models\LoginModel;
use App\models\PrescriptionModel;
use App\models\UserModel;

class ExpenseController extends BaseController
{

    public function addexpense()
    {
     
        $session=session();
        if (!$session->get('logged_in')) {
            return redirect()->to(base_url().'/login');
             
        }

        if ($this->request->getMethod()=='post') {
            $expense=new ExpenseModel();

        $input=$this->validate([
               'expense_amount'=> 'required',
               'expense_source'=> 'required',
               'expense_description'=> 'required',
           
               

           ]);


           
           
           if ($input==true) {
               
               $expense->save([
                'expense_amount'=> $this->request->getPost('expense_amount'),
                'expense_source' => $this->request->getPost('expense_source'),
                'expense_description' => $this->request->getPost('expense_description'),
           
                
                
            ]);
            $session->setFlashdata('success', ' event Added Successfully');
              return  redirect()->to(base_url().'/expenselist');
           }
           else {
                  $data['validation']=$this->validator;
              
           } 

        }
        echo view('partials/sidebar');
        echo view('accounts/expense');
        echo view('partials/footer');
      




    }
    public function expenselist()
    { $session=session();
        if (!$session->get('logged_in')) {
            return redirect()->to(base_url().'/login');
             
        }
        $expense= new ExpenseModel();
        $data['expense']=$expense->getexpense();


        echo view('partials/sidebar',$data);
        echo view('accounts/expenseslist');
        echo view('partials/footer');
    }

    public function deleteexpense($id)           
    {
        $session=session();
            if (!$session->get('logged_in')) {
                return redirect()->to(base_url().'/login');
                 
            }
            $expense= new ExpenseModel()
            ;
            $expense->delete($id);
            return  redirect()->to(base_url().'/expenselist');
    }


    public function editexpense($id)
    {
        $data=[];
     
        $session=session();
        if (!$session->get('logged_in')) {
            return redirect()->to(base_url().'/login');
             
        }

        if ($this->request->getMethod()=='post') {
            $expense=new ExpenseModel();

        $input=$this->validate([
            'expense_amount'=> 'required',
            'expense_source'=> 'required',
            'expense_description'=> 'required',
           
               

           ]);


           
           
           if ($input==true) {
               
               $expense->update($id,[
                'expense_amount'=> $this->request->getPost('expense_amount'),
                'expense_source' => $this->request->getPost('expense_source'),
                'expense_description' => $this->request->getPost('expense_description'),
           
                
                
            ]);
            $session->setFlashdata('success', ' expense updated  Successfully');
              return  redirect()->to(base_url().'/expenselist');
           }
           else {
                  $data['validation']=$this->validator;
              
           } 

        }
        $singleincome=new ExpenseModel();
        $data['expense']=$singleincome->getsingleexpense($id);
      
        
        echo view('partials/sidebar',$data);
        echo view('accounts/editexpense');
        echo view('partials/footer');
      




    }
    public function budget()
    {$data=[];
        $totalexpense=0;
        $totalincome=0;
        $income=new IncomeModel();
        $expense=new ExpenseModel();
        $income=$income->getincome();
        $expense=$expense->getexpense();
        foreach ($expense as $expense) {
            $totalexpense=$totalexpense+$expense['expense_amount'];
        }
        foreach ($income as $income) {
            $totalincome=$totalincome+$income['income_amount'];
        }


        echo view('partials/sidebar',$data);
        
        echo "<h3> total income is </h3>".$totalincome;
        echo"<br><br><br><br>";
        echo "<h3> total expense is </h3>".$totalexpense;
        echo"<br><br><br><br>";
        echo "<h3> net income is </h3>".$totalincome-$totalexpense;

        

        echo view('partials/footer');
    }


}



