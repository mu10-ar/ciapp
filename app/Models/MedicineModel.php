<?php
namespace App\models;
use CodeIgniter\Model;
class MedicineModel extends Model{
    protected $table ='medicine';
    protected $primaryKey ='medicine_id';
    protected $allowedFields=[
        'medicine_name',
        'medicine_category',
        'medicine_price',
        'medicine_stock',
        'manufactured_by'
       

    ];

    public function getMedicine()
    {
       return $this->orderBy('medicine_id','DESC')->findAll();
    }

     public function getRow($id){
        return $this->where('medicine_id',$id)->first();
    }
}