<?php
namespace App\models;
use CodeIgniter\Model;
class DoctorModel extends Model{
    protected $table ='users';
    protected $primaryKey ='id';
    protected $allowedFields=[
        'firstname',
        'lastname',
        'email',
        'password',
        'address'
    ];
    public function getRecord(){
        return $this->orderBy('id','DESC')->findAll();
    }



     public function getRow($id){
        return $this->where('id',$id)->first();
    }
    
    public function deleteUser($id){
        return $this->delete($id);
    }

   
    
}

?>