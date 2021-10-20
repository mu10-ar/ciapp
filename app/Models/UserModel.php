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
        'specialist',
        'department_name'

    ];
    public function getDoctorRecord(){
        return $this->where('user_role',2)->findall();
    }

     public function getNurseRecord(){
        return $this->where('user_role',3)->findall();
    }
     public function getUserRecord($id){
        return $this->where('user_role',$id)->findall();
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