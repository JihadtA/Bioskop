<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BioskopController;
use App\Http\Controllers\TiketController;
use App\Http\Controllers\FilmController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layout.master');
});

Route::get('film', [FilmController::class, 'index'])->name('film.index');

Route::get('bioskop', [BioskopController::class, 'index'])->name('bioskop.index');
// Route::get('bioskop/autocomplete', [BioskopController::class, 'autocomplete'])->name('bioskop.autocomplete');
Route::get('bioskop/create', [BioskopController::class, 'create'])->name('bioskop.create');
Route::resource('bioskop', BioskopController::class);

Route::get('tiket', [TiketController::class, 'index'])->name('tiket.index');
// Route::get('tiket/autocomplete', [TiketController::class, 'autocomplete'])->name('tiket.autocomplete');
Route::get('tiket/create', [TiketController::class, 'create'])->name('tiket.create');
Route::resource('tiket', TiketController::class);