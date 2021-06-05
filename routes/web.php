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
Route::get('/add_progres',[App\Http\Controllers\MhsController::class, 'add_progres'])->name('add_progres');
Route::post('/upload_file', [App\Http\Controllers\MhsController::class, 'upload_file'])->name('upload_file');
Route::post('/add_progres/storee',[App\Http\Controllers\MhsController::class, 'storee'])->name('storee');


// admin kampus
Route::get('/home_kmps', [App\Http\Controllers\MhsController::class, 'home_kmps'])->name('kmps_home');
Route::get('/dataMhs_kmps', [App\Http\Controllers\MhsController::class, 'dataMhs_kmps'])->name('kmps_dataMhs');

Route::get('/lihat/{id}', [App\Http\Controllers\MhsController::class, 'lihat'])->name('lihat');
// Route::get('/tampil',[App\Http\Controllers\MhsController::class, 'tampil'])->name('tampil');
Route::get('/dataMhs_kmps/cari', [App\Http\Controllers\MhsController::class, 'cari'])->name('cari');

//admin pt
Route::get('/home_pt', [App\Http\Controllers\MhsController::class, 'home_pt'])->name('pt_home');
Route::get('/selesai_pt', [App\Http\Controllers\MhsController::class, 'selesai_pt'])->name('pt_selesai');
Route::get('/ready_pt', [App\Http\Controllers\MhsController::class, 'ready_pt'])->name('pt_ready');
Route::get('/mhs_pt', [App\Http\Controllers\MhsController::class, 'mhs_pt'])->name('pt_mhs');

Route::get('/edit_pt/{id}',[App\Http\Controllers\MhsController::class, 'edit_pt'])->name('edit_pt');
Route::post('/update_pt',[App\Http\Controllers\MhsController::class, 'update_pt'])->name('update_pt');
Route::delete('/ready_pt/destroy/{dtug}',[App\Http\Controllers\MhsController::class, 'destroy_pt'])->name('destroy_pt');
Route::get('/add_pt',[App\Http\Controllers\MhsController::class, 'add_pt'])->name('add_pt');
Route::post('/add_pt/store',[App\Http\Controllers\MhsController::class, 'store'])->name('store');

Route::get('/nilai/{id}',[App\Http\Controllers\MhsController::class, 'nilai'])->name('nilai');
Route::post('/nilai/stornilai',[App\Http\Controllers\MhsController::class, 'stornilai'])->name('stornilai');