<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Requests\Api\V1\StoreLinkRequest;
use App\Http\Resources\Api\V1\IndexLinkResource;
use App\Http\Resources\Api\V1\StoreLinkResource;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Services\Api\V1\HashService;
use App\Repositories\LinkRepository;

class LinksController
{
    public function __construct(
        private HashService $hashService,
        private LinkRepository $linkRepository
    )
    {
    }

    public function index(): JsonResource
    {
        $data = $this->linkRepository->findAll();
        return IndexLinkResource::collection($data);
    }

    public function store(StoreLinkRequest $request): JsonResource
    {
        $link = $this->linkRepository->create([
            'hash' => $this->hashService->hash(),
            'redirect' => $request->validated()['redirect'],
        ]);

        return new StoreLinkResource($link);
    }
}
