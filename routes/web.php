<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeriesController;

Route::get('/', function () {
    return redirect('/series');
});

/*
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
*/

Route::resource('series', SeriesController::class)
// O método resource() é usado para criar rotas RESTful para um controlador de recurso.
    ->only([
        'index', 'create', 'store'
    ]);
// O método only() é usado para especificar quais métodos do controlador devem ser registrados como rotas.
Route::post('/series/destroy/{id}', SeriesController::class, 'destroy')
    ->name('series.destroy');