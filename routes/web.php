<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\LaporanController;
use App\Models\Laporan;

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

Route::get('/Dashboard', function () {
    return view('Dashboard');
});

Route::get('/Tabel', function () {
    return view('Tabel');
});

Route::get('/edit', function () {
    return view('edit');
});

use App\Http\Controllers\DanaController;

Route::resource('danas', DanaController::class);

Route::get('/tabel',[LaporanController::class,'index'])->name('Tabel');

Route::get('/tabel', [LaporanController::class, 'edit'])->name('edit');
Route::get('/data/create', [LaporanController::class, 'create'])->name('data.create');
Route::post('/data', [LaporanController::class, 'store'])->name('data.store');

Route::get('/Laporan/cetak', [LaporanController::class, 'cetak'])->name('cetak');