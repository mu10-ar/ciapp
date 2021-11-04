<?php
namespace App\models;


use CodeIgniter\Model;
class DispatchMedicineModel extends Model{
    protected $table ='dispatched_medicine';
    protected $primaryKey ='dispatch_id';
    protected $allowedFields=[
       
        'qty', 
        'medicine_id', 
        'patient_id', 
        'price', 
    ];
}