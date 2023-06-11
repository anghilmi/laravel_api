<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

//untuk read
Route::get('/produk',[ProdukApiController::class,'listProduk']);
Route::get('/produk/{id}',[ProdukApiController::class,'tampilProduk']);
//untuk create
// Route::get('/produk/create',[ProdukApiController::class,'tambahProduk']);
Route::post('/produk',[ProdukApiController::class,'simpanProduk']);
//untuk edit/update
// Route::get('/produk/edit',[ProdukApiController::class,'editProduk']);
Route::put('/produk/{id}',[ProdukApiController::class,'updateProduk']);
//untuk delete
Route::delete('/produk/{id}',[ProdukApiController::class,'hapusProduk']);




