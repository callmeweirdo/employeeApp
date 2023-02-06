<?php
namespace App\Models;
use CodeIgniter\Model;

class EmployeeModel extends Model{
    protected $table = "employees";
    protected $allowedFields = ['full_name', 'email', 'mobile', 'salary', 'department', 'doj', 'dor', 'is_active'];

    public function getAll(){
        return $this->findAll();
    }

}

?>