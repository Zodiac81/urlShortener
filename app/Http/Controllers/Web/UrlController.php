<?php

namespace App\Http\Controllers\Web;

use App\Foundation\BaseWebController;
use App\Http\Requests\UrlRequest;
use App\Services\UrlService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;

class UrlController extends BaseWebController
{
    public function __construct(protected UrlService $service)
    {
    }

    /**
     * @return View|\Illuminate\Foundation\Application|Factory|Redirector|Application|RedirectResponse
     */
    public function index(): View|\Illuminate\Foundation\Application|Factory|Redirector|Application|RedirectResponse
    {
        $shortUrls = $this->service->getWith(['visits']);
        return view('pages.index', compact('shortUrls'));
    }

    /**
     * @param UrlRequest $request
     * @return RedirectResponse
     */
    public function store(UrlRequest $request): RedirectResponse
    {
        $this->service->create($request->validated());
        return redirect()->route('url.index')->with('success', 'Short url link generate successfully');
    }
}
