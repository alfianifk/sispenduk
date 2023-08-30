<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DusunController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::post('actionlogin', [AuthController::class, 'actionlogin'])->name('actionlogin');



Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/articles/{article}', [HomeController::class, 'show']);

Route::middleware('auth')->group(function(){
    Route::post('actionlogout', [AuthController::class, 'actionlogout'])->name('actionlogout');

    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard-admin');
    Route::get('/input-data', [AdminController::class, 'inputData'])->name('input-data');

    Route::post('/penduduk/store', [AdminController::class, 'store'])->name('penduduk.store');

    Route::get('/penduduk/edit/{id}', [AdminController::class, 'edit'])->name('penduduk.edit');

    Route::post('/penduduk/update/{id}', [AdminController::class, 'update'])->name('penduduk.update');

    Route::get('/penduduk/delete/{id}', [AdminController::class, 'delete'])->name('penduduk.delete');

    Route::get('/artikel', [AdminController::class, 'artikel'])->name('artikel');
    Route::get('/tambah-artikel-baru', [AdminController::class, 'tambahArtikel'])->name('tambah-artikel-baru');
    Route::get('/artikel/delete/{id}', [AdminController::class, 'deleteArtikel'])->name('delete-artikel');
    Route::post('/input-artikel', [AdminController::class, 'storeArticle'])->name('input-artikel');

    Route::resource('/dusun', DusunController::class);
    Route::get('/lihat-penduduk/{kk}', [DusunController::class, 'penduduk'])->name('dusun.penduduk');
});