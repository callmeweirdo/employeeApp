<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\EmployeeModel;

class Home extends BaseController
{
    public function index()
    {
        $model = new EmployeeModel();
        if ($this->request->getGet("query")) {
            $query = $this->request->getGet('query');
            $data['employees'] = $model->like("full_name", $query)->getAll();
        } else {
            $data['employees'] = $model->getAll();
        }
        $data['pageTitle'] = "Employees";

        return view("home.php", $data);
    }


    public function hello()
    {
        $model = new EmployeeModel();
        $data['employees'] = $model->getAll();
        return view("hello.php", $data);
    }

    public function add()
    {
        $model = new EmployeeModel();
        if ($this->request->getMethod() == "post" && $this->validate([
            "full_name" => "required",
            "email" => "required"
        ])) {
            $save = $model->save([
                "full_name" => $this->request->getPost("full_name"),
                "email" => $this->request->getPost("email"),
                "mobile" => $this->request->getPost("mobile"),
                "department" => $this->request->getPost("department"),
                "salary" => $this->request->getPost("salary"),
                "doj" => $this->request->getPost("doj"),
                "dor" => $this->request->getPost("dor"),
                "is_active" => $this->request->getPost("is_active")
            ]);

            if ($save) {
                $data['status'] = "Employee Added Successfully";
            }
        };




        $data['pageTitle'] = "Add Employee";
        return view("add.php", $data);
    }

    public function update($id)
    {
        $model = new EmployeeModel();
        if ($this->request->getMethod() == "post" && $this->validate([
            "full_name" => "required",
            "email" => "required"
        ])) {
            $save = $model->update($id, [
                "full_name" => $this->request->getPost("full_name"),
                "email" => $this->request->getPost("email"),
                "mobile" => $this->request->getPost("mobile"),
                "department" => $this->request->getPost("department"),
                "salary" => $this->request->getPost("salary"),
                "doj" => $this->request->getPost("doj"),
                "dor" => $this->request->getPost("dor"),
                "is_active" => $this->request->getPost("is_active")
            ]);

            if ($save) {
                $data['status'] = "Employee Updated Successfully";
            }
        };

        $data["emp"] = $model->find($id);

        $data['pageTitle'] = "Update Employee";
        return view("update.php", $data);
    }

    public function delete($id)
    {
        $model = new EmployeeModel();
        $model->delete($id);
        return redirect()->to(site_url());
    }
}
