<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\UniversitasController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
//Route::get('/universitas', function () {
//    dd(universitas::all());
//    return view('universitas.index');
//});

Route::prefix('/mahasiswa')->name('mahasiswa.')->group(function () {
    Route::get('/index', [MahasiswaController::class, 'index'])->name('index');
    Route::get('/create', [MahasiswaController::class, 'create'])->name('create');
    Route::post('/store', [MahasiswaController::class, 'store'])->name('store');
    Route::get('/edit/{mahasiswa}', [MahasiswaController::class, 'edit'])->name('edit');
    Route::post('/update/{mahasiswa}', [MahasiswaController::class, 'update'])->name('update');
    Route::delete('/delete/{mahasiswa}', [MahasiswaController::class, 'delete'])->name('delete');
});
Route::prefix('/universitas')->name('universitas.')->group(function () {
    Route::get('/index', [UniversitasController::class, 'index'])->name('index');
    Route::get('/create', [UniversitasController::class, 'create'])->name('create');
    Route::post('/store', [UniversitasController::class, 'store'])->name('store');
    Route::get('/edit/{universitas}', [UniversitasController::class, 'edit'])->name('edit');
    Route::post('/update/{universitas}', [UniversitasController::class, 'update'])->name('update');
    Route::delete('/delete/{universitas}', [UniversitasController::class, 'delete'])->name('delete');
});
