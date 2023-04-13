<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;

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
Route::view('/user', 'user/tambah');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/user', [UserController::class, 'user'])->name('user');
Route::get('/user/hapus/{id}',[UserController::class, 'hapus'])->name('hapus');
Route::get(
    '/user/tambah',
    [App\Http\Controllers\UserController::class, 'tambah']
)->name('tambah_user');
Route::get('/transaksi',[App\Http\Controllers\TransaksiController::class, 'tambah_transaksi'])->name('tambah_transaksi');