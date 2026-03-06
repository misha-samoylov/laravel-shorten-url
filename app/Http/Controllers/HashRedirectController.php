<?php

namespace App\Http\Controllers;

use App\Models\Link;

class HashRedirectController
{
    public function index()
    {
        $route = request()->route('hash');
        $redirect = Link::where('hash', $route)->first();

        return redirect()->away($redirect->redirect);
    }
}
