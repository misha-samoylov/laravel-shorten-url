<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use App\Services\Api\V1\LinkService;

class RedirectController extends Controller
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
        return redirect()->to($link);
    }
}
