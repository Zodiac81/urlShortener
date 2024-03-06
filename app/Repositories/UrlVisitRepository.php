<?php

namespace App\Repositories;

use App\Foundation\BaseRepository;
use App\Models\UrlVisit;

class UrlVisitRepository extends BaseRepository
{
    public function __construct()
    {
        parent::__construct(UrlVisit::class);
    }
}
