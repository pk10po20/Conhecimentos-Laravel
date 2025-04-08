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
    Route::delete('/series/destroy/{id}', [SeriesController::class, 'destroy'])
        ->name('series.destroy');
*/
    // O método resource() é usado para criar rotas RESTful para um controlador de recurso.
Route::resource('/series', SeriesController::class)
        ->except(['show']);
    
    /*
        ->only(['index', 'create', 'store', 'destroy', 'edit', 'update']);
    
        O método only() é usado para especificar quais métodos do controlador devem ser registrados como rotas.
    
        To open server in browser: php -S 127.0.0.1:8080 -t public 
    */