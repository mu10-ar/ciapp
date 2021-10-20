<?php
namespace App\models;
use CodeIgniter\Model;
class UserModel extends Model{
    protected $table ='users';
    protected $primaryKey ='id';
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
}