<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaisController;
use App\Http\Controllers\PerizinanController;
use App\Http\Controllers\mencoba;


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

Route::resource('perizinan', PerizinanController::class);

Route::get('/ok', function(){
    return view('main');
});

Route::get('/coba', function(){
    return view('cobian');

});

Route::get('/home', function(){
    return view('template.home');

});

Route::get('/search', [PegawaisController::class, 'search'])->name('search');

Route::delete('/delete/{id}',[PegawaisController::class,'delete'])->name('delete');

Route::get('/yoi', [mencoba::class, 'index'])->name('welcome');

Route::get('/foo', function () {
    Artisan::call('storage:link');
});

Route::get('/cuti', [PegawaisController::class, 'cuti']);

Route::get('/createcuti', [PegawaisController::class, 'createcuti']);

Route::post('/tambahcuti', [PegawaisController::class, 'storecuti']);

Route::delete('/del/{id}',[PerizinanController::class, 'delete'])->name('delete');







