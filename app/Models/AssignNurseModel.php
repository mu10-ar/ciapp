<?php
namespace App\models;
use CodeIgniter\Model;
class AssignNurseModel extends Model{
    protected $table ='assign_nurse';
    protected $primaryKey ='assign_id';
    protected $allowedFields=[
        'patient_id',
        'nurse_id',
        'notes'
       
    ];
    public function getAssignedRecord()
    {
       return $this->orderBy('assign_id', 'desc')->findall();
    }
}