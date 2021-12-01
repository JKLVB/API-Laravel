<?php

use App\Http\Controllers\UsuariosController;
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

Route::prefix('usuarios')->group(function(){
    Route::get('/', [UsuariosController::class, 'index'])->name('usuarios-index');
    Route::get('/create', [UsuariosController::class, 'create'])->name('usuarios-create');
    Route::post('/', [UsuariosController::class, 'store'])->name('usuarios-store');
    Route::get('/{id}/edit', [UsuariosController::class, 'edit'])->where('id', '[0-9]+')->name('usuarios-edit');
    Route::put('/{id}', [UsuariosController::class, 'update'])->where('id', '[0-9]+')->name('usuarios-update');
    Route::delete('/{id}', [UsuariosController::class, 'destroy'])->where('id', '[0-9]+')->name('usuarios-destroy');
});

Route::fallback(function(){
    return abort(404);
});