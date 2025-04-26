<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TwitterController;
Route::get('/twitter', [TwitterController::class, 'index']);



Route::get('/', function () {
    return view('welcome');
});
