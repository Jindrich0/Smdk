<?php

use App\Http\Controllers\FilmsController;
use Illuminate\Support\Facades\Route;

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

Route::get('films', [FilmsController::class, 'index'])->name('films.index');
Route::post('films', [FilmsController::class, 'store'])->name('films.store');
Route::get('films/create', [FilmsController::class, 'create'])->name('films.create');
Route::get('films/{films}/edit', [FilmsController::class, 'edit'])->name('films.edit');
Route::put('films/{films}', [FilmsController::class, 'update'])->name('films.update');
Route::delete('films/{films}', [FilmsController::class, 'destroy'])->name('films.destroy');
Route::get('films/{films}/show', [FilmsController::class, 'show'])->name('films.show');
