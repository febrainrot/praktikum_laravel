<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MataKuliahController; // Tambahkan ini
use App\Models\Mahasiswa;                      // Tambahkan ini
use App\Models\MataKuliah;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $totalMahasiswa = Mahasiswa::count();
    $totalMK = MataKuliah::count();
    return view('dashboard', compact('totalMahasiswa', 'totalMK'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    Route::resource('mahasiswa', MahasiswaController::class);
    Route::resource('matakuliah', MataKuliahController::class)->names('MataKuliah');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
