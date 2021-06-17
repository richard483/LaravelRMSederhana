<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MakananController;
use App\Http\Controllers\BahanBakuController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [MakananController::class, 'index']);
Route::post('/main', [MakananController::class, 'store'])->name('makanan.create');
Route::get('/main', [MakananController::class, 'listFood'])->name('makanan.list');
Route::get('/main/edit/{id}', [MakananController::class, 'edit']) -> name('makanan.edit');
Route::patch('/main/{id}', [MakananController::class, 'update'])->name('makanan.update');
Route::delete('/main/{id}', [MakananController::class, 'delete'])->name('makanan.delete');
Route::get('/main/bahan_baku', [BahanBakuController::class, 'create'])->name('bahan_baku.create');
Route::post('/main/bahan_baku/store', [BahanBakuController::class, 'store'])->name('bahan_baku.store');
Route::get('/main/bahan_baku/list', [BahanBakuController::class, 'listBahan'])->name('bahan_baku.list');
Route::get('/main/bahan_baku/{id}', [BahanBakuController::class, 'info'])->name('bahan_baku.info');
Route::delete('/main/bahan_baku/{id}', [BahanBakuController::class, 'delete'])->name('bahan_baku.delete');
Route::get('/main/bahan_baku/edit/{id}', [BahanBakuController::class, 'edit']) -> name('bahan_baku.edit');
Route::patch('/main/bahan_baku/{id}', [BahanBakuController::class, 'update'])->name('bahan_baku.update');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'admin'])->group(function(){
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
});