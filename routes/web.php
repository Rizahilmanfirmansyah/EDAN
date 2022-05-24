<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaisController;

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

Route::get('/1', function () {
    return view('template');
});

Route::resource('pegawais', PegawaisController::class);

Route::get('/ok', function(){
    return view('main');
});

Route::get('/coba', function(){
    return view('cobian');

});

Route::get('/search', [PegawaisController::class, 'search'])->name('search');



Route::delete('/delete/{id}',[PegawaisController::class,'delete'])->name('delete');



