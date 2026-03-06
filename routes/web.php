<?php

use App\Http\Controllers\HashRedirectController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/{hash}', [HashRedirectController::class, 'index']);
