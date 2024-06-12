<?php
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BarangController;
 
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
 

//menampikan semua kategori
Route::get('kategori',[KategoriController::class, 'getAPIKategori']);

//create kategori
Route::post('kategori', [KategoriController::class, 'createAPIKategori']);

//update kategori
Route::put('kategori/{id}',[KategoriController::class, 'updateAPIKategori']);

//menampilkan salah satu kategori
Route::get('kategori/{id}',[KategoriController::class, 'showAPIKategori']);

//delete kategori
Route::delete('kategori/{id}',[KategoriController::class, 'deleteAPIKategori']);


//barang
Route::get('barang', [BarangController::class, 'getAPIBarang']);

Route::get('barang/{id}',[BarangController::class, 'showAPIBarang']);

Route::put('barang/{id}',[BarangController::class, 'updateAPIBarang']);


