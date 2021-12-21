<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KatalogController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('katalog',[KatalogController::class,'index']);
Route::post('katalog',[KatalogController::class,'create']);
Route::put('/katalog/{id}',[KatalogController::class,'update']);
Route::delete('katalog/{id}',[KatalogController::class,'delete']);