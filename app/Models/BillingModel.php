<?php
namespace App\models;

use App\Controllers\Patient;
use CodeIgniter\Model;
class BillingModel extends Model{
    protected $table ='bill';
    protected $primaryKey ='bill_id';
    protected $allowedFields=[
        'date',
        'status',
        'patient_id',
        'services',
        'services_description',
        'paid',
        'price', 
    ];

    public function billview($id)
    {
        return  $this->where('patient_id',$id)->where('status',0)->findall();
    }
    public function paidbillview($id)
    {
        return  $this->where('patient_id',$id)->where('status',1)->findall();
    }
}