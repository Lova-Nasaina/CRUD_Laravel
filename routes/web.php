<?php

use App\Http\Controllers\ProductController;
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

Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/postProduct', [ProductController::class,'store'])->name('product.store');

Route::get('/edit/{id}', [ProductController::class,'edit'])->name('product.edit');
Route::put('/saveEdit/{id}', [ProductController::class,'saveEdit']);

Route::delete('/delete/{id}', [ProductController::class,'delete']);
