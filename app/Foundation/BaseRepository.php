<?php

namespace App\Foundation;

use App\Contracts\RepositoryInterface;
use Illuminate\Database\Eloquent\Model;
class BaseRepository implements RepositoryInterface
{
    /**
     * @var string
     */
    protected $modelClass = Model::class;

    /**
     * @param $model
     */
    public function __construct($model)
    {
        $this->modelClass = $model;
    }

    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->modelClass;
    }

    /**
     * @param array $data
     * @return void
     */
    public function create(array $data): void
    {
        $this->getModel()::create($data);
    }

    /**
     * @param array $with
     * @return mixed
     */
    public function getWith(array $with): mixed
    {
        return $this->getModel()::with($with)->get();
    }

    /**
     * @param array $with
     * @param array $where
     * @return mixed
     */
    public function getWithWhereSingle(array $with, array $where): mixed
    {
        return $this->getModel()::with($with)->where($where)->first();
    }
}
