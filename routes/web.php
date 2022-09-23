<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\admin\galeriController;
use App\Http\Controllers\FE\HomepageController;
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

// route::group(['middleware' => ['auth']], function(){

Route::get('/', function() {
        return view('welcome');
    });

Auth::routes();
// Route::get('home', function() {
//         return view('/home');
//  })->middleware('role:admin');

// Route::get('/', function() {
//      return view('dashboard');
// })->middleware('role:user');

    Route::get('/', 'App\Http\Controllers\FE\DashboardController@index')->name('dashboard');
    Route::get('/galeri', 'App\Http\Controllers\FE\GaleriController@index')->name('galeri');
    Route::get('/produk', 'App\Http\Controllers\FE\ProdukController@index')->name('produk');
    Route::get('/detailProduk/{id}', 'App\Http\Controllers\FE\detailProdukController@index')->name('detailProduk');
    Route::get('/keranjang', 'App\Http\Controllers\FE\KeranjangController@index')->name('keranjang');
    Route::post('/keranjang', 'App\Http\Controllers\FE\KeranjangController@store')->name('keranjangStore');
    Route::get('/checkout/{id}', 'App\Http\Controllers\FE\KeranjangCheckOutController@index')->name('checkout');
    Route::get('/pesan/{id}', 'App\Http\Controllers\FE\KeranjangCheckOutController@create')->name('pesan');
    Route::post('/pesanAll/{id}', 'App\Http\Controllers\FE\KeranjangCheckOutController@createAll')->name('pesanAll');
    Route::get('/detailpembayaran/{id}', 'App\Http\Controllers\FE\KeranjangCheckOutController@show')->name('detailbayar');
    Route::get('/pembayaran', 'App\Http\Controllers\FE\PembayaranController@index')->name('pembayaran');
    Route::post('/pesan/{id}', 'App\Http\Controllers\FE\PembayaranController@update')->name('bayar');

    // Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
    Route::resource('/admin/galeri', 'App\Http\Controllers\admin\galeriController');
    Route::resource('/admin/produk', 'App\Http\Controllers\admin\produkController');
    Route::resource('admin/pesanan', 'App\Http\Controllers\admin\pesananController');
    Route::get('admin/validasi/{id}', 'App\Http\Controllers\FE\PembayaranController@validasi')->name('validasi');
    Route::resource('admin/user', 'App\Http\Controllers\admin\userController');
    Route::resource('admin/laporan', 'App\Http\Controllers\admin\laporanController');
    Route::group(['prefix'=>'/admin','middleware'=>['auth','admin']],function(){
            Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    });



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
