<?php

namespace App\Http\Controllers\Web;

use App\Foundation\BaseWebController;
use App\Services\UrlService;
use App\Services\UrlVisitService;
use Carbon\Carbon;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;

class UrlVisitController extends BaseWebController
{
    public function __construct(protected UrlService $urlService, protected UrlVisitService $visitService)
    {
    }

    /**
     * @param string $shortUrl
     * @return \Illuminate\Foundation\Application|Redirector|RedirectResponse|Application
     */
    public function shortUrlRedirect(string $shortUrl): \Illuminate\Foundation\Application|Redirector|RedirectResponse|Application
    {
        $data = $this->urlService->getWithWhereSingle([], ['short_url_token' => $shortUrl]);

        if(!$data || !$this->urlService->urlValidation($data) ) {
            abort(404);
        }

        $this->store($data->id);

        return redirect($data->original_url);
    }

    /**
     * @param int $id
     * @return void
     */
    public function store(int $id): void
    {
        $this->visitService->create([
            'url_id'     => $id,
            'visited_at' => Carbon::now()
        ]);
    }
}
