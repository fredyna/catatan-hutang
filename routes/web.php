<?php

use App\Http\Controllers\CatatanHutangController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/catatan-hutang', [CatatanHutangController::class, 'index'])->name('catatan-hutang.index');
Route::get('/catatan-hutang/create', [CatatanHutangController::class, 'create'])->name('catatan-hutang.create');
Route::post('/catatan-hutang', [CatatanHutangController::class, 'store'])->name('catatan-hutang.store');
Route::get('/catatan-hutang/{id}', [CatatanHutangController::class, 'edit'])->name('catatan-hutang.edit');
Route::put('/catatan-hutang/{id}', [CatatanHutangController::class, 'update'])->name('catatan-hutang.update');
Route::delete('/catatan-hutang/{id}', [CatatanHutangController::class, 'destroy'])->name('catatan-hutang.destroy');
