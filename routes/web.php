<?php

use App\Http\Controllers\SeasonsController;
use App\Http\Controllers\SeriesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/series');
});

Route::resource('/series',SeriesController::class)->except(['show']);

Route::get('/series/{series}/seasons', [SeasonsController::class, 'index'])->name('seasons.index');

#^^^^ Esse código substitui o de baixo

#Route::controller(SeriesController::class)->group(function() {
#    Route::get('/series', 'index')->name('series.index');
#    Route::get('/series/create', 'create')->name('series.create');
#    Route::post('/series/salvar', 'store')->name('series.store');
#});



