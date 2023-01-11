<?php

use App\Http\Controllers\Resource\BarangmasukController;
use App\Http\Controllers\Resource\BarangkeluarController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Resource\loginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\Resource\ProdukController;
use App\Http\Controllers\HistoryController;
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
Route::get('/', [DashboardController::class,'index'])->middleware('guest');

// Route::get('/produk', [ProdukController::class,'index']);
// Route::get('/produk',[ProdukController::class,'index'])->name('produk')->middleware('guest');
Route::resource('/produk', ProdukController::class)->middleware('auth');
route::get('/produk/{produk:id}', [ProdukController::class,'barangmasuk']);
route::get('/produk/keluar/{produk:id}', [ProdukController::class,'barangkeluar']);
Route::resource('/BarangMasuk', BarangmasukController::class);
// Route::get('/total', [BarangmasukController::class,'total']);
Route::resource('/BarangKeluar', BarangkeluarController::class);
// Route::resource('/history', HistoryController::class);
route::get('/history/{produk:id}', [ProdukController::class,'history']);
Route::get('/findKabupatenName', [ProdukController::class, 'findKabupatenName']);

// Route::get('/produk', [ProdukController::class,'index']);
// Route::post('/produk', [ProdukController::class,'store'])->name('produk.store');


Route::get('/Admin', [DashboardAdminController::class,'index'])->middleware('auth');

Route::get('/login', [loginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [loginController::class, 'authenticate']);
Route::post('/logout', [loginController::class, 'logout']);