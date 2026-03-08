<?php

namespace App\Http\Controllers;

use App\Services\Api\V1\HashService;
use App\Services\Api\V1\LinkService;
use Illuminate\Http\RedirectResponse;

class HashRedirectController extends Controller
{
    public function __construct(
        private LinkService $linkService
    )
    {
    }

    /**
     * Маршрут сокращенной ссылки.
     *
     * Перейдите по данному маршруту, чтобы перейти на исходный адрес.
     *
     * @return RedirectResponse
     */
    public function index(): RedirectResponse
    {
        $hash = request()->route('hash');
        $link = $this->linkService->getLinkFromHash($hash);
        return redirect()->away($link);
    }
}
