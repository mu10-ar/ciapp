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
     public function getpatientRecord(){
        return $this->where('user_role',4)->findall();
    }
     public function getUserRecord($id){
        return $this->where('user_role',$id)->findall();
    }
    //  public function getAlluser(){
    //     return $this->where('user_role',6)->findall();
    // }
     public function getAlluser(){
        return $this->where('user_role',6)->orWhere('user_role',7)->orWhere('user_role',5)->findall();
    }



     public function getRow($id){
        return $this->where('id',$id)->first();
    }
    
    public function deleteUser($id){
        return $this->delete($id);
    }
    public function auth($email,$password,$userrole)
    {
       return $this->where('email',$email)->where('password',$password)->where('user_role',$userrole)->first();
    }
    public function getuserid($id)      
    {
        return $this->where('id',$id)->first();
    }

   
    
}

?>