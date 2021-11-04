<?php
namespace App\models;
use CodeIgniter\Model;
class SallaryModel extends Model{
    protected $table ='sallary';
    protected $primaryKey ='transaction_id';
    protected $allowedFields=[
        'employee_id',
        'sallary_month',
        'amount'
          
    ];
            function getSallaries()       
                        {
                            return $this->orderby('transaction_id','desc')->findall();
                        } 
}