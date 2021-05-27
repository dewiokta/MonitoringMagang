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

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// mhs
Route::get('/home_mhs', [App\Http\Controllers\MhsController::class, 'home_mhs'])->name('mhsHome');
Route::get('/selesai_mhs', [App\Http\Controllers\MhsController::class, 'selesai_mhs'])->name('mhsSelesai');
Route::get('/ready_mhs', [App\Http\Controllers\MhsController::class, 'ready_mhs'])->name('mhsReady');

// admin kampus
Route::get('/home_kmps', [App\Http\Controllers\MhsController::class, 'home_kmps'])->name('kmps_home');
Route::get('/dataMhs_kmps', [App\Http\Controllers\MhsController::class, 'dataMhs_kmps'])->name('kmps_dataMhs');

//admin pt
Route::get('/home_pt', [App\Http\Controllers\MhsController::class, 'home_pt'])->name('pt_home');
Route::get('/selesai_pt', [App\Http\Controllers\MhsController::class, 'selesai_pt'])->name('pt_selesai');
Route::get('/ready_pt', [App\Http\Controllers\MhsController::class, 'ready_pt'])->name('pt_ready');
Route::get('/mhs_pt', [App\Http\Controllers\MhsController::class, 'mhs_pt'])->name('pt_mhs');

Route::get('/edit_pt/{id}',[App\Http\Controllers\MhsController::class, 'edit_pt'])->name('edit_pt');
Route::post('/update_pt',[App\Http\Controllers\MhsController::class, 'update_pt'])->name('update_pt');