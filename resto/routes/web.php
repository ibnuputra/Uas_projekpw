<?php

// Manggil Controller
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TampilanController;
use App\Models\KategoriProduk;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Bikin routing tampilan awal
Route::get('/', [TampilanController::class, 'index']);


// Bikin routing untuk amanin data
Route::group(['middleware' => ['auth']], function () {

    // Bikin routing untuk after_registrasi
    Route::get('/after_register', function () {
        return view('after_register');
    });

    // bikin route grup baru untuk admin/manager
    Route::group(['middleware' => ['auth', 'peran:admin-manager']], function () {
        // Bikin routing ke halaman dashboard pake controller
        Route::get('/dashboard', [DashboardController::class, 'index']);
        // Bikin routing ke halaman produk
        Route::get('/produk', [ProdukController::class, 'index']);
        // Bikin routing ke halaman form tambah data menggunakan create 
        Route::get('/produk/create', [ProdukController::class, 'create']);
        // Bikin routing ke fungsi store
        Route::post('/produk/store', [ProdukController::class, 'store']);
        // Bikin routing untuk form edit
        Route::get('/produk/edit/{id}', [ProdukController::class, 'edit']);
        // Bikin routing untuk validasi data edit update
        Route::put('/produk/update/{id}', [ProdukController::class, 'update']);
        // Bikin routing untuk delete data
        Route::get('/produk/delete/{id}', [ProdukController::class, 'destroy']);

        // Kategori
        // Bikin routing ke halaman produk
        Route::get('/kategori', [KategoriController::class, 'index']);
        // Bikin routing ke halaman form tambah data menggunakan create 
        Route::get('/kategori/create', [KategoriController::class, 'create']);
        // Bikin routing ke fungsi store
        Route::post('/kategori/store', [KategoriController::class, 'store']);
        // Bikin routing untuk form edit
        Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit']);
        // Bikin routing untuk validasi data edit update
        Route::put('/kategori/update/{id}', [KategoriController::class, 'update']);
        // Bikin routing untuk delete data
        Route::get('/kategori/delete/{id}', [KategoriController::class, 'destroy']);
    });
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
