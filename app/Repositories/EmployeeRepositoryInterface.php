<?php


namespace App\Repositories;


interface EmployeeRepositoryInterface
{
    public function getAll();

    public function save($obj);

    public function findEmployeeById($id);

    public function delete($obj);

    public function edit($obj);

    public function search($obj);
}
