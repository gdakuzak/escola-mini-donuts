<?php

namespace App\Rocketti\Services;

use App\Rocketti\Contracts\ServiceContract;
use App\Rocketti\Repositories\StudentGuardianRepository;

class StudentGuardianService implements ServiceContract
{
     /**
     * @var StudentGuardianRepository
     */
    private $repository;

     /**
     * @var StudentGuardianRepository
     */
    private $studentGuardianRepository;

    /**
     * StudentGuardian Service constructor.
     * @param StudentGuardianRepository $studentGuardianRepository
     */
    public function __construct(StudentGuardianRepository $studentGuardianRepository)
    {
        $this->repository = $studentGuardianRepository;
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