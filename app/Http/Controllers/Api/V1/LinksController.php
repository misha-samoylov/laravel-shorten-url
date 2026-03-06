<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Requests\Api\V1\StoreLinkRequest;
use App\Models\Link;
use Illuminate\Support\Str;

class LinksController
{
    public function index()
    {
        return Link::all();
    }

    public function store(StoreLinkRequest $request)
    {
        Link::create([
            'hash' => Str::random(40),
            'redirect' => request('redirect')
        ]);

        return response()->json(['success' => true]);
    }
}
