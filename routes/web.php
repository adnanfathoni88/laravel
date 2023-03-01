<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MatkulController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
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


Route::get('/home', function () {
    return view('home', [
        'nama' => 'Adnan',
        'role' => 'admin',
        'user' => ['adnan', 'fathoni', 'messi', 'ronaldo', 'vosko']
    ]);
});

// route login
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/destroy', [AuthController::class, 'destroy']);
Route::post('/login', [AuthController::class, 'authenticate']);

// route mahasiswa
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/mahasiswa/{id}', [MahasiswaController::class, 'show']);
Route::post('/mahasiswa', [MahasiswaController::class, 'store']);
Route::get('/add-mahasiswa', [MahasiswaController::class, 'create']);
Route::get('/edit-mahasiswa/{id}', [MahasiswaController::class, 'edit']);
Route::put('/update-mahasiswa/{id}', [MahasiswaController::class, 'update']);
Route::get('/delete-mahasiswa/{id}', [MahasiswaController::class, 'delete']);

// route kelas
Route::get('/kelas', [KelasController::class, 'index']);
Route::get('/kelas/{id}', [KelasController::class, 'show']);

// route matkul
Route::get('/matkul', [MatkulController::class, 'index']);
Route::get('/matkul/{id}', [MatkulController::class, 'show']);

// route dosen
Route::get('/dosen', [DosenController::class, 'index']);
Route::get('/dosen/{id}', [DosenController::class, 'show']);
