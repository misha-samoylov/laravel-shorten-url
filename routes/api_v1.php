<?php

use App\Http\Controllers\Api\V1\LinksController;

Route::apiResource('links', LinksController::class)->only([
    'index', 'store'
]);;
