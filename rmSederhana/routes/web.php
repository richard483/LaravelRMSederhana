<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MakananController;

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