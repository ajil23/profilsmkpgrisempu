<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\JurusanController;
use App\Models\Artikel;
use App\Models\Guru;
use Illuminate\Support\Facades\Auth;
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
    $dataartikel = Artikel::all();
    $dataguru = Guru::all();
    return view('welcome', compact('dataartikel', 'dataguru'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Jurusan
Route::get('/jurusan', [JurusanController::class, 'index'])->name('jurusan.read');
Route::get('/jurusan/add', [JurusanController::class, 'add'])->name('jurusan.create');
Route::post('/jurusan/store', [JurusanController::class, 'store'])->name('jurusan.store');
Route::get('/jurusan/edit/{id}', [JurusanController::class, 'edit'])->name('jurusan.edit');
Route::post('/jurusan/update/{id}', [JurusanController::class, 'update'])->name('jurusan.update');
Route::get('/jurusan/delete/{id}', [JurusanController::class, 'delete'])->name('jurusan.delete');

// Fasilitas
Route::get('/fasilitas', [FasilitasController::class, 'index'])->name('fasilitas.read');
Route::get('/fasilitas/add', [FasilitasController::class, 'add'])->name('fasilitas.create');
Route::post('/fasilitas/store', [FasilitasController::class, 'store'])->name('fasilitas.store');
Route::get('/fasilitas/edit/{id}', [FasilitasController::class, 'edit'])->name('fasilitas.edit');
Route::post('/fasilitas/update/{id}', [FasilitasController::class, 'update'])->name('fasilitas.update');
Route::get('/fasilitas/delete/{id}', [FasilitasController::class, 'delete'])->name('fasilitas.delete');

// Guru
Route::get('/guru', [GuruController::class, 'index'])->name('guru.read');
Route::get('/guru/add', [GuruController::class, 'add'])->name('guru.create');
Route::post('/guru/store', [GuruController::class, 'store'])->name('guru.store');
Route::get('/guru/edit/{id}', [GuruController::class, 'edit'])->name('guru.edit');
Route::post('/guru/update/{id}', [GuruController::class, 'update'])->name('guru.update');
Route::get('/guru/delete/{id}', [GuruController::class, 'delete'])->name('guru.delete');

// Artikel
Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel.read');
Route::get('/artikel/add', [ArtikelController::class, 'add'])->name('artikel.create');
Route::post('/artikel/store', [ArtikelController::class, 'store'])->name('artikel.store');
Route::get('/artikel/edit/{id}', [ArtikelController::class, 'edit'])->name('artikel.edit');
Route::post('/artikel/update/{id}', [ArtikelController::class, 'update'])->name('artikel.update');
Route::get('/artikel/delete/{id}', [ArtikelController::class, 'delete'])->name('artikel.delete');
Route::get('/artikel/detail/{id}', [ArtikelController::class, 'detail'])->name('artikel.detail');