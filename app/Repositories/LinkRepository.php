<?php

namespace App\Repositories;
use App\Models\Link;
use Illuminate\Database\Eloquent\Model;

class LinkRepository extends BaseRepository
{
    public function __construct(
        protected Link $link
    )
    {
        parent::__construct($this->link);
    }

    public function getRedirectByHash(string $hash): ?Model
    {
        return $this->model->where('hash', $hash)->first();
    }
}
