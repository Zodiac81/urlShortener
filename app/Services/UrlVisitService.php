<?php

namespace App\Services;

use App\Foundation\BaseService;
use App\Repositories\UrlVisitRepository;

class UrlVisitService extends BaseService
{
    public function __construct(UrlVisitRepository $repository)
    {
        parent::__construct($repository);
    }
}
