<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListBarangController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/user/{id}', function ($id) {
    return 'User dengan ID ' . $id;
});

//Route::prefix('admin')->group(function () {

  //  Route::get('/dashboard', function () {
    //    return 'Admin Dashboard';
    //});

    //Route::get('/users', function () {
      //  return 'Admin Users';
   // });

//});

//Route::get('/listbarang/{id}/{nama}', function($id, $nama){
  //  return view('list_barang', compact('id', 'nama'));
//});

//Route::get('/listbarang/{id}/{nama}', [ListBarangController::class, 'tampilkan']);

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\AdminController;

// LOGIN
Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'prosesLogin']);

// MAHASISWA
Route::get('/mahasiswa/dashboard', [MahasiswaController::class, 'dashboard']);
Route::get('/mahasiswa/krs', [MahasiswaController::class, 'krs']);
Route::get('/mahasiswa/khs', [MahasiswaController::class, 'khs']);

// DOSEN
Route::get('/dosen/dashboard', [DosenController::class, 'dashboard']);
Route::get('/dosen/matkul', [DosenController::class, 'matkul']);
Route::get('/dosen/kelas/{matkul}', [DosenController::class, 'kelas']);
Route::get('/dosen/input-nilai', [DosenController::class, 'inputNilai']);

// ADMIN
Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
Route::get('/admin/dosen', [AdminController::class, 'dosen']);
Route::get('/admin/mahasiswa', [AdminController::class, 'mahasiswa']);
Route::get('/admin/matkul', [AdminController::class, 'matkul']);