<?php

use App\Http\Controllers\ProdutoController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [ProdutoController::class, 'index']);
Route::get('/produtos/{id}/edit', [ProdutoController::class, 'edit']);
Route::post('/produtos', [ProdutoController::class, 'store']);
Route::put('/produtos/{id}', [ProdutoController::class, 'update']);
Route::delete('/produtos/{id}', [ProdutoController::class, 'destroy']);
