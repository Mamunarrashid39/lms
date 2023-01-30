<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EcommerceController;

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

Route::get('/',[EcommerceController::class,'index'])->name('home');
Route::get('/product-category',[EcommerceController::class,'categoryProduct'])->name('product-category');
Route::get('/product-detail',[EcommerceController::class,'categoryDetail'])->name('product-detail');
