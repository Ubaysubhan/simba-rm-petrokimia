<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Resource\loginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Resource\ProdukController;
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
Route::get('/', [DashboardController::class,'index']);

// Route::get('/produk', [ProdukController::class,'index']);
// Route::get('/produk',[ProdukController::class,'index'])->name('produk')->middleware('guest');
// Route::resource('/produk',ProdukController::class)->name('produk.store');
Route::get('/produk', [ProdukController::class,'index']);
Route::post('/produk', [ProdukController::class,'store'])->name('produk.store');




Route::get('/history', function () {
    return view('resource.history');
});


Route::get('/BarangMasuk', function () {
    return view('resource.masuk');
});

Route::get('/BarangKeluar', function () {
    return view('resource.keluar');
});

Route::get('/Admin', function () {
    return view('resource.DashboardAdmin');
});

Route::get('/login', [loginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [loginController::class, 'authenticate']);
Route::post('/logout', [loginController::class, 'logout']);