<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


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

Route::post('actionlogout', [AuthController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');


Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard')->middleware('auth');

Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard-admin')->middleware('auth');
Route::get('/input-data', [AdminController::class, 'inputData'])->name('input-data')->middleware('auth');

Route::post('/penduduk/store', [AdminController::class, 'store'])->name('penduduk.store')->middleware('auth');

Route::get('/penduduk/edit/{id}', [AdminController::class, 'edit'])->name('penduduk.edit')->middleware('auth');

Route::post('/penduduk/update/{id}', [AdminController::class, 'update'])->name('penduduk.update');

Route::get('/penduduk/delete/{id}', [AdminController::class, 'delete'])->name('penduduk.delete')->middleware('auth');
