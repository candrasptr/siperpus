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

// Page Guest
Route::get('/', 'GuestController@home');
Route::get('/home', 'GuestController@index');
Route::get('daftarbuku', 'GuestController@daftarbuku')->name('daftarbuku');
Route::get('daftarbuku/kategori/{kategori}', 'GuestController@kategori')->name('kategoribuku');
Route::get('Detailbuku/{buku}', 'GuestController@showbuku')->name('guest.showbuku');
Route::get('/daftarbuku', 'GuestController@daftarbuku')->name('daftarbuku');
Route::get('/salam', 'GuestController@salam');
Route::get('/pinjambuku', 'GuestController@pinjambuku');
Route::get('/loginuser', 'GuestController@loginuser');
Route::get('/regisuser', 'GuestController@regisuser');
Route::get('/bukuonline', 'GuestController@bukuonline');
Route::get('/myprofile', 'GuestController@myprofile');
Route::get('/about', 'GuestController@about');
Route::get('/showbukuguest', 'GuestController@showbukuguest');



//LOGIN
Route::group(['middleware' => 'SudahLoginMiddleware'], function() {
    Route::get('/petugas','otentikasi\OtentikasiController@index')->name('login');
    Route::post('login','otentikasi\OtentikasiController@login')->name('login');
});

// PAGE ADMIN
Route::group(['middleware' => 'CheckLoginMiddleware'], function() {
    Route::get('/dashboard', 'DashboardController@index');
    Route::get('/regis', 'AdminController@regis');
    Route::get('/showbuku', 'BukuController@showbuku');
    // buku tamu
    Route::resource('bukutamu', 'TamuController');
    // buku
    Route::resource('buku', 'BukuController');
    // kategori
    Route::resource('kategori','KategoriController');
    // ruangan
    Route::resource('ruangan', 'RuanganController');
    // laporan
    Route::get('/laporan', 'LaporanController@index')->name('laporan');
    // petugas
    Route::resource('admin', 'AdminController');
    Route::get('autocomplete', 'AdminController@autocomplete')->name('autocomplete');
    route::get('/inputdata','AdminController@inputdata');
    // transaksi
    Route::resource('transaksi','TransaksiController');
    route::get('inputtransaksi','TransaksiController@inputtransaksi')->name('inputtransaksi');
    route::get('transaksi/selesai/{transaksi}','TransaksiController@transaksiselesai')->name('transaksi.selesai');
    Route::get('/edittransaksi', 'AdminController@edittransaksi');
    Route::get('/showtran', 'AdminController@showtran');
    //logout
    Route::get('logout','otentikasi\OtentikasiController@logout')->name('logout');

});














