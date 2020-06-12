<?php


namespace App\Services;


interface EmployeeServiceInterface
{
    public function getAll();

    public function add($request);

    public function delete($id);

    public function edit($id, $request);

    public function findEmployeeById($id);

    public function search($request);
}
