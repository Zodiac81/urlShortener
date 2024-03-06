<?php

namespace App\Services;

use App\Foundation\BaseService;
use App\Repositories\UrlRepository;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class UrlService extends BaseService
{
    public function __construct(UrlRepository $repository)
    {
        parent::__construct($repository);
    }

    /**
     * @param Model $model
     * @return bool
     */
    public function urlValidation(Model $model): bool
    {
        if($model->allow_visit == 0 && Carbon::make($model->disabled_at)->gt(Carbon::now())) {
            return true;
        }

        if($model->allow_visit != 0 && $model->allow_visit > $model->visits->count() && Carbon::make($model->disabled_at)->gt(Carbon::now())) {
            return true;
        }
        return false;
    }
}
