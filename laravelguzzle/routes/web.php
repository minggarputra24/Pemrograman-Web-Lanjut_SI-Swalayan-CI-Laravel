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

Route::middleware('auth')->group(function () {

Route::get('/swalayan/dashboard', 'SwalayanController@dashboard');

Route::get('/swalayan/kasir','SwalayanController@kasir');

Route::get('/swalayan/barang','SwalayanController@barang');

Route::get('/swalayan/penjualan','SwalayanController@penjualan');

Route::get('/swalayan/penjualan/add', 'SwalayanController@penjualanAdd');

Route::post('/swalayan/save', 'SwalayanController@penjualanSave');

Route::get('/swalayan/penjualan/edit/{kdpenjualan}', 'SwalayanController@penjualanEdit');

Route::post('/swalayan/update', 'SwalayanController@penjualanUpdate');

Route::get('/swalayan/penjualan/delete/{kdpenjualan}', 'SwalayanController@penjualanDelete');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
