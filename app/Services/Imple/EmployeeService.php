<?php


namespace App\Services\Imple;


use App\Employee;
use App\Repositories\EmployeeRepositoryInterface;
use App\Services\EmployeeServiceInterface;

class EmployeeService implements EmployeeServiceInterface
{
    protected $employeeRepo;

    public function __construct(EmployeeRepositoryInterface $employeeRepo)
    {
        $this->employeeRepo = $employeeRepo;
    }

    public function getAll()
    {
        return $this->employeeRepo->getAll();
    }

    public function add($request)
    {
        $employee = new Employee();
        $employee->name = $request->name;
        $employee->dob = $request->dob;
        $employee->gender = $request->gender;
        $employee->phone = $request->phone;
        $employee->socialID = $request->socialID;
        $employee->email = $request->email;
        $employee->address = $request->address;
        $employee->group_id = $request->group_id;
        return $this->employeeRepo->save($employee);
    }

    public function delete($id)
    {
        $employee = $this->employeeRepo->findEmployeeById($id);
        $this->employeeRepo->delete($employee);
    }

    public function edit($id, $request)
    {

        $employee = $this->employeeRepo->findEmployeeById($id);
        $employee->name = $request->name;
        $employee->dob = $request->dob;
        $employee->gender = $request->gender;
        $employee->phone = $request->phone;
        $employee->socialID = $request->socialID;
        $employee->email = $request->email;
        $employee->address = $request->address;
        $employee->group_id = $request->group_id;
        return $this->employeeRepo->save($employee);


    }

    public function findEmployeeById($id)
    {
        return $this->employeeRepo->findEmployeeById($id);
    }

    public function search($request)
    {
        $obj = $request->get('search');
        return $this->employeeRepo->search($obj);
    }
}
