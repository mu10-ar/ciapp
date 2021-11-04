<?php
namespace App\models;
use CodeIgniter\Model;
class IncomeModel extends Model{
    protected $table ='income';
    protected $primaryKey ='income_id';
    protected $allowedFields=[
        'income_source',
        'income_amount',
        'income_description',
        
       

    ];


    function getincome()       
                        {
                            return $this->orderby('income_id','desc')->findall();
                        } 
    function getsingleincome($id)       
                        {
                            return $this->orderby('income_id','desc')->where('income_id',$id)->first();
                        } 
}