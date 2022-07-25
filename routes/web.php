<?php

use App\Http\Controllers\BidangController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\SeksiController;
use App\Http\Controllers\KontenController;

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
    return view('login');
});

// Route::get('/', function () {
//     return view('main');
// });

Route::get('/dashboard', [Dashboard::class, 'index'] );

Route::get('/bidang', [BidangController::class, 'index'] );
Route::get('/tambahbidang', [BidangController::class, 'create'] );
Route::post('/storebidang', [BidangController::class, 'store'] );
Route::get('/editbidang{id}', [BidangController::class, 'edit'] );
Route::put('/updatebidang{id}', [BidangController::class, 'update'] );
Route::delete('/hapusbidang{id}', [BidangController::class, 'destroy'] );


Route::get('/seksi', [SeksiController::class, 'index']);
Route::get('/tambahseksi', [SeksiController::class, 'create'] );
Route::post('/storeseksi', [SeksiController::class, 'store'] );
Route::get('/editseksi{id}', [SeksiController::class, 'edit'] );
Route::put('/updateseksi{id}', [SeksiController::class, 'update'] );
Route::delete('/hapusseksi{id}', [SeksiController::class, 'destroy'] );

Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/tambahpegawai', [PegawaiController::class, 'create'] );






Route::get('/konten', [KontenController::class, 'index'] );
Route::get('/tambahkonten', [KontenController::class, 'create'] );
Route::get('/detailkonten', [KontenController::class, 'detail'] );
Route::post('/storekonten', [KontenController::class, 'store'] );
Route::get('/editkonten{id}', [KontenController::class, 'edit'] );
Route::put('/updatekonten{id}', [KontenController::class, 'update'] );
Route::delete('/hapuskonten{id}', [KontenController::class, 'destroy'] );