<?php
namespace App\models;
use CodeIgniter\Model;
class DepartmentModel extends Model{
    protected $table ='departments';
    protected $primaryKey ='department_id';
    protected $allowedFields=[
        'department_name',
        'department_description'
    ];
    public function getDepartmentRecord(){
        return $this->orderBy('department_id','DESC')->findAll();
    }



     public function getDeparmentRow($id){
        return $this->where('department_id',$id)->first();
    }
    
    public function deleteDepartment($id){
        return $this->delete($id);
    }

   
    
}