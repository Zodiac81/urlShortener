<?php

namespace App\Observers;

use App\Helpers\Helper;
use App\Models\Url;

class UrlObserver
{
    /**
     * Handle the Url "created" event.
     */
    public function creating(Url $model): void
    {
        $token = Helper::generateUrlToken();
        $model->short_url_token = $token;
        $model->short_url       = url('') . '/' . $token;
        $model->disabled_at     = Helper::dateTimeFormat($model->disabled_at);
//        $model->disabled_at     = date('Y-m-d h:i:s', strtotime($model->disabled_at));
    }

}
