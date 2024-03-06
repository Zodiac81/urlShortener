<?php

namespace App\Contracts;

interface RepositoryInterface
{
    /**
     * @param array $with
     * @return mixed
     */
    public function getWith(array $with): mixed;

    /**
     * @param array $with
     * @param array $where
     * @return mixed
     */
    public function getWithWhereSingle(array $with, array $where): mixed;

    /**
     * @param array $data
     * @return void
     */
    public function create(array $data): void;

}
