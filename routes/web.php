<?php

use App\Http\Controllers\BidangController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;

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
