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
        'bill',
        'department_name'

    ];
    public function getDoctorRecord(){
        return $this->where('user_role',2)->findall();
    }
    public function getSpecialDoctorRecord($id){
        return $this->where('user_role',2)->where('specialist',$id)->findall();
    }

     public function getNurseRecord(){
        return $this->where('user_role',3)->findall();
    }
     public function getpatientRecord(){
        return $this->where('user_role',4)->findall();
    }
     public function getPatientNumber(){
        return $this->where('user_role',4)->findall();
    }
     public function getDoctorNumber(){
        return $this->where('user_role',2)->findall();
    }
     public function getNurseNumber(){
        return $this->where('user_role',3)->findall();
    }
  
     public function getBillRecord(){
        return $this->where('user_role',4)->where('bill',1)->findall();
    }
     public function getPaidBillRecord(){
        return $this->where('user_role',4)->where('bill',2  )->findall();
    }
     public function getUserRecord($id){
        return $this->where('user_role',$id)->findall();
    }
    //  public function getAlluser(){
    //     return $this->where('user_role',6)->findall();
    // }
     public function getAlluser(){
        return $this->where('user_role',6)->orWhere('user_role',7)->orWhere('user_role',8)->orWhere('user_role',5)->findall();
    }
     public function getAll(){
        return $this->where('user_role',1)->orWhere('user_role',2)->orWhere('user_role',3)->orWhere('user_role',5)->orWhere('user_role',6)->orWhere('user_role',7)->orWhere('user_role',8)->findall();
    }



     public function getRow($id){
        return $this->where('id',$id)->first();
    }
    
    public function deleteUser($id){
        return $this->delete($id);
    }
   
    public function getuserid($id)      
    {
        return $this->where('id',$id)->first();
    }

    public function getAllUserRecord(){
        return $this->orderBy('id','DESC')->findAll();
    }

   
    
}

?>