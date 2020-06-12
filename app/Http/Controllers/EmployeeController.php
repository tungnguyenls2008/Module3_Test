<?php

namespace App\Http\Controllers;

use App\Group;
use App\Http\Requests\EmployeeRequest;
use App\Services\EmployeeServiceInterface;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    protected $employee;

    public function __construct(EmployeeServiceInterface $employeeService)
    {
        $this->employee = $employeeService;
    }

    public function index()
    {
        $employees = $this->employee->getAll();
        return view('employee.index', compact('employees'));
    }

    public function create()
    {
        $groups = Group::all();
        return view('employee.create', compact('groups'));
    }

    public function store(EmployeeRequest $request)
    {
        $this->employee->add($request);
        return redirect()->route('employees.index');
    }

    public function edit($id)
    {
        $employee = $this->employee->findEmployeeById($id);
        $groups = Group::all();
        return view('employee.edit', compact('employee', 'groups'));
    }

    public function update(EmployeeRequest $request, $id)
    {
        $this->employee->edit($id, $request);
        return redirect()->route('employees.index');
    }

    public function destroy($id)
    {
        $this->employee->delete($id);
        return redirect()->route('employees.index');
    }

    public function search(Request $request)
    {
        $employees = $this->employee->search($request);
        return view('employee.index', compact('employees'));
    }
}
