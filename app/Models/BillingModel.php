<?php
namespace App\models;
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
}