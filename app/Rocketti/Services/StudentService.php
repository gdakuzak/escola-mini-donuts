<?php

namespace App\Rocketti\Services;

use App\Rocketti\Contracts\ServiceContract;
use App\Rocketti\Repositories\StudentRepository;

class StudentService implements ServiceContract
{
     /**
     * @var StudentRepository
     */
    private $repository;

     /**
     * @var StudentRepository
     */
    private $studentRepository;

    /**
     * Student Service constructor.
     * @param StudentRepository $studentRepository
     */
    public function __construct(StudentRepository $studentRepository)
    {
        $this->repository = $studentRepository;
    }

    /**
     * @return mixed
     */
    public function renderList()
    {
        return $this->repository->getAll();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function renderEdit($id)
    {
        return $this->repository->getById($id);
    }

    /**
     * @param $id
     * @param $data
     * @return mixed
     */
    public function buildUpdate($id, $data)
    {
        return $this->repository->update($id, $data);
    }

    /**
     * @param $data
     * @return mixed
     */
    public function buildInsert($data)
    {
        return $this->repository->create($data);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function buildDelete($id)
    {
        return $this->repository->delete($id);
    }
}