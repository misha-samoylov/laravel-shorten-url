<?php

namespace App\Http\Controllers;

use App\Repositories\LinkRepository;
use Illuminate\Http\RedirectResponse;

class HashRedirectController extends Controller
{
    public function __construct(
        private LinkRepository $linkRepository
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
        $route = request()->route('hash');
        $link = $this->linkRepository->getRedirectByHash($route);

        return redirect()->away($link->redirect);
    }
}
