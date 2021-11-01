<?php
namespace App\models;
use CodeIgniter\Model;
class LoginModel extends Model{
    protected $table ='users';
    protected $primaryKey ='id';

    public function auth($email,$password,$userrole)
    {
       return $this->where('email',$email)->where('password',$password)->where('user_role',$userrole)->first();
    }

    public function CheckEmail($email)
    {
       return $this->where('email',$email)->first();
    }

    public function CheckPassword($password)
    {
       return $this->where('password',$password)->first();
    }

    public function CheckUserRole($userrole)
    {
       return $this->where('user_role',$userrole)->first();
    }

   
    
}

?>