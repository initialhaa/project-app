<?php

use App\Http\Controllers\API\KategoriBeritaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('berita', [KategoriBeritaController::class, 'listKategoriBerita']);
Route::get('/ading', [KategoriBeritaController::class, 'index']);