<?php
namespace App\models;
use CodeIgniter\Model;
class UserModel extends Model{
    protected $table ='users';
    protected $primaryKey ='id';
    protected $allowedFields=[
        'firstname',
        'lastname',
        'email',
        'password',
        'address',
        'specialist',
        'mobile_no',
        'sex',
        'designation',
        'birthday',
        'blood_group',
        'user_role',
        'specialist'

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
    public function auth($email,$password)
    {
       return $this->where('email',$email)->where('password',$password)->first();
    }

   
    
}

?>