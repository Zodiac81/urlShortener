<?php

namespace App\Repositories;

use App\Foundation\BaseRepository;
use App\Models\Url;

class UrlRepository extends BaseRepository
{
    public function __construct()
    {
        parent::__construct(Url::class);
    }
}
