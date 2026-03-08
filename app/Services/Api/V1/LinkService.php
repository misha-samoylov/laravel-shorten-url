<?php

namespace App\Services\Api\V1;

use App\Repositories\LinkRepository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class LinkService
{
    public function __construct(
        private HashService $hashService,
        private LinkRepository $linkRepository
    )
    {
    }

    /**
     * Получить все сокращенные ссылки.
     *
     * @return Collection
     */
    public function getAllLinks(): Collection
    {
        return $this->linkRepository->findAll();
    }

    /**
     * Сохранить ссылку.
     *
     * @param string $link
     * @return Model
     */
    public function storeLink(string $link): Model
    {
        return $this->linkRepository->create([
            'hash' => $this->hashService->hash(),
            'redirect' => $link,
        ]);
    }

    /**
     * Получить ссылку по хэшу.
     *
     * @param string $hash
     * @return Model|null
     */
    public function getLinkFromHash(string $hash): ?string
    {
        return $this->linkRepository->getRedirectByHash($hash)->redirect ?? null;
    }
}
