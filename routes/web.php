<?php

use App\Http\Controllers\JabatanController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\ProfileController;
use App\Http\Livewire\CreateKaryawan;
use App\Http\Livewire\UploadPhoto;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware('auth')->group(function(){
    Route::get('/upload', UploadPhoto::class);

    Route::controller(JabatanController::class)->group(function(){
        Route::get('/jabatan/tampil', 'tampil');
        Route::get('/jabatan/buat', 'buat');
        Route::post('/jabatan', 'simpan');
        Route::delete('/jabatan/{id}', 'hapus')->name('hapus jabatan');
        Route::get('/jabatan/{id}/ubah', 'ubah')->name('ubah jabatan');
        Route::put('/jabatan/{id}', 'update')->name('update jabatan');
    });

    Route::get('/karyawan/performa', [KaryawanController::class, 'performa']);
    
    Route::resource('/karyawan', KaryawanController::class);
   
    Route::get('/karyawan/create', CreateKaryawan::class);
});