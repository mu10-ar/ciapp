<?php
namespace App\models;
use CodeIgniter\Model;
class bedModel extends Model{
    protected $table ='beds';
    protected $primaryKey ='bed_id';
    protected $allowedFields=[
        'department_id',
        'description',
        'status'
       
    ];
    public function getAvailableBeds()
    {
       return $this->where('status',1)->orderBy('bed_id', 'desc')->findall();
    }
   







}