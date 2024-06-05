<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;


Route::get('api/produk', [ApiController::class, 'index']);
Route::get('api/list', [ApiController::class, 'getProduct']);

