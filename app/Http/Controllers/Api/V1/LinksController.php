<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Requests\Api\V1\StoreLinkRequest;
use App\Http\Resources\Api\V1\IndexLinkResource;
use App\Http\Resources\Api\V1\StoreLinkResource;
use App\Models\Link;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

class LinksController
{
    public function index(): JsonResource
    {
        $data = Link::all();
        return IndexLinkResource::collection($data);
    }

    public function store(StoreLinkRequest $request): JsonResource
    {
        $link = Link::create([
            'hash' => md5(Str::orderedUuid()),
            'redirect' => request('redirect')
        ]);

        return new StoreLinkResource($link);
    }
}
