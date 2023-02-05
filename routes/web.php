<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('prodi')->group(function () {
    Route::get('/',
    [ProdiController::class,'index'])->name('prodis.index');
    Route::post('/create{prodi}',
    [ProdiController::class,'store'])->name('prodis.store');
    Route::get('/create{prodi}',
    [ProdiController::class,'store'])->name('prodis.store');

});
