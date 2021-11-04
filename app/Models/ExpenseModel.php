<?php
namespace App\models;
use CodeIgniter\Model;
class ExpenseModel extends Model{
    protected $table ='expense';
    protected $primaryKey ='expense_id';
    protected $allowedFields=[
        'expense_source',
        'expense_amount',
        'expense_description',
        
       

    ];


    function getexpense()       
                        {
                            return $this->orderby('expense_id','desc')->findall();
                        } 
    function getsingleexpense($id)       
                        {
                            return $this->orderby('expense_id','desc')->where('expense_id',$id)->findall();
                        } 
}