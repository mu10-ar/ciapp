<?php
namespace App\models;
use CodeIgniter\Model;
class AssignBedmodel extends Model{
    protected $table ='assigned_bed';
    protected $primaryKey ='assigned_id';
    protected $allowedFields=[
        'patient_id',
        'assigned_bed',
        'description'
       
    ];
    public function getAssignedBed()
    {
       return $this->orderBy('assigned_id', 'desc')->findall();
    }
}