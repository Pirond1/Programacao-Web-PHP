<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

// chamar a controller de api
// Route::apiResource('items', ItemController::class);

// chamar a controller de api
Route::prefix('items')->name('items.')->group(function() {
    // rota de listar
    Route::get('/', [ItemController::class, 'index'])
        ->name('index'); // GET /api/items
    // rota de criar
    Route::post('/', [ItemController::class, 'store'])
        ->name('store');
    // rota de buscar um valor
    Route::get('{id}', [ItemController::class, 'show'])
        ->name('show');
    // rota de atualizar
    Route::put('{id}', [ItemController::class, 'update'])
        ->name('update');
    // rota de patch (atualizar parcial)
    // Route::path('{item}', [ItemController::class, 'update'])
    //     ->name('patch');
    // rota de remover
    Route::delete('{id}', [ItemController::class, 'delete'])
        ->name('delete');
});