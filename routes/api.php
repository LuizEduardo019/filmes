<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CatalogApiController;

Route::get('/catalog', [CatalogApiController::class, 'index']);
Route::post('/store',[CatalogApiController::class, 'store']);
Route::post('/store/movie', [CatalogApiController::class, 'store']);

