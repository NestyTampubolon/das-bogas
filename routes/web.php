<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\CafeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\GalleryController;

use App\Http\Controllers\DaftarProdukController;
use App\Http\Controllers\DaftarLayananController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index']);
Route::get('/produk', [ProdukController::class, 'index']);
Route::get('/layanan', [LayananController::class, 'index']);
Route::get('/cafe', [CafeController::class, 'index']);
Route::get('/gallery', [GalleryController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);



// ADMIN
Route::get('/daftarproduk', [DaftarProdukController::class, 'index']);
Route::get('/daftarlayanan', [DaftarLayananController::class, 'index']);
Route::get('/daftarlayanan/tambah', [DaftarLayananController::class, 'tambah']);
Route::post('daftarlayanan/store', [DaftarLayananController::class, 'store'])->name('daftarlayanan.store');
Route::get('/daftarlayanan/edit/{id_layanan}', [DaftarLayananController::class, 'edit']);
Route::post('daftarlayanan/update/{id_layanan}', [DaftarLayananController::class, 'update'])->name('daftarlayanan.update');
Route::get('daftarlayanan/delete/{id_layanan}', [DaftarLayananController::class, 'delete'])->name('daftarlayanan.delete');