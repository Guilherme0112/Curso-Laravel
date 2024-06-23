<?php

use App\Http\Controllers\usersController;
use Illuminate\Support\Facades\Route;

//Route::get('/curso', [usersController::class, 'index']);

Route::prefix('')->group(function(){
    Route::get('/', [usersController::class, 'index'])->name('curso-index');
    Route::get('/create', [usersController::class, 'create'])->name('curso-create');
    Route::post('/', [usersController::class, 'store'])->name('curso-store');
    Route::get('/{id}/edit', [usersController::class, 'edit'])->where('id', '[0-9]+')->name('curso-edit');
    Route::put('/{id}', [usersController::class, 'update'])->where('id', '[0-9]+')->name('curso-update');
    Route::delete('/{id}', [usersController::class, 'destroy'])->where('id', '[0-9]+')->name('curso-destroy');
});

Route::fallback(function(){
    return "Erro!";
});