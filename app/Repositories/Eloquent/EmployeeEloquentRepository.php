<?php


namespace App\Repositories\Eloquent;


use App\Employee;
use App\Repositories\EmployeeRepositoryInterface;

class EmployeeEloquentRepository implements EmployeeRepositoryInterface
{
    protected $employee;

    public function __construct(Employee $employee)
    {
        $this->employee = $employee;
    }

    public function getAll()
    {
        return $this->employee->paginate(10);
    }

    public function save($obj)
    {
        $obj->save();
    }

    public function findEmployeeById($id)
    {
        return $this->employee->findOrFail($id);
    }

    public function edit($obj)
    {
        $obj->edit();
    }

    public function delete($obj)
    {
        $obj->delete();
    }

    public function search($obj)
    {
        return $this->employee->where('name', 'LIKE', "%$obj%")->paginate(10);
    }
}
