<?php

namespace App\Foundation;

use App\Contracts\RepositoryInterface;
class BaseService
{
    /**
     * @param RepositoryInterface $repository
     */
    public function __construct(protected RepositoryInterface $repository)
    {

    }

    /**
     * @param array $data
     */
    public function create(array $data): void
    {
        $this->repository->create($data);
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function getWith(array $data): mixed
    {
        return $this->repository->getWith($data);
    }

    /**
     * @param array $with
     * @param array $where
     * @return mixed
     */
    public function getWithWhereSingle(array $with, array $where): mixed
    {
        return $this->repository->getWithWhereSingle($with, $where);
    }
}
