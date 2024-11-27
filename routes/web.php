<?php

use App\Http\Controllers\MovieController;
use App\Models\Movie;
use Illuminate\Support\Facades\Route;

Route::get('/', [MovieController::class, 'showAllMovie'])->name('home.view');

Route::get('/Insert', [MovieController::class, 'insertMovie'])->name('insertMovie.view');

Route::post('movie/store',[MovieController::class,'store'])->name('movie.store');
Route::delete('/movie/delete/{id}',[MovieController::class,'deleteMovie'])->name('movie.delete');
