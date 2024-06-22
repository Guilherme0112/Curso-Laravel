<?php

use App\Http\Controllers\usersController;
use Illuminate\Support\Facades\Route;

//Route::get('/curso', [usersController::class, 'index']);

Route::prefix('cursos')->group(function(){
    Route::get('/', [usersController::class, 'index'])->name('curso-index');
    Route::get('/create', [usersController::class, 'create'])->name('curso-create');
    Route::post('/', [usersController::class, 'store'])->name('curso-store');
});

Route::fallback(function(){
    return "Erro!";
});