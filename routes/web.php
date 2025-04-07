<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeriesController;

Route::get('/', function () {
    return redirect('/series');
});


Route::controller( SeriesController::class)->group(function () {
    // O método group() é usado para agrupar rotas que compartilham o mesmo prefixo ou middleware.
    
    Route::get('/series','index')
        ->name('series.index');
    // O método name() é usado para nomear a rota, o que facilita a referência a ela em outros lugares do código.
    
    Route::get('/series/create','create')
        ->name('series.create');

    Route::post('/series/salvar','store')
        ->name('series.store');
});
