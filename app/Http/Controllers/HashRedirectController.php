<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use App\Models\Link;

class HashRedirectController extends Controller
{
    public function index(): RedirectResponse
    {
        $route = request()->route('hash');
        $link = Link::where('hash', $route)->first();

        return redirect()->away($link->redirect);
    }
}
