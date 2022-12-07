<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

Route::middleware('guest')->group(function(){
    Route::get('/admin', [LoginController::class,'index'])->name('login');
    Route::post('/admin', [LoginController::class,'store']);
});

Route::middleware(['has_role','auth'])->prefix('/admin')->group(function(){
    //logout
    Route::post('logout',LogoutController::class)->name('admin.logout');

    //dashboard
    Route::get('/dashboard', [DashboardController::class,'index'])->name('admin.dashboard');

    //category
    Route::get('/category', [CategoryController::class,'index'])->name('admin.category');
    Route::post('/category',[CategoryController::class,'create'])->name('category.create');
    Route::put('/category/{id}/update',[CategoryController::class,'update'])->name('category.update');
    Route::get('/category/{category:slug}',[CategoryController::class,'show']);
    Route::delete('/category/delete/{id}', [CategoryController::class,'destroy']);

    // brand
    Route::get('/brand', [BrandController::class,'index'])->name('admin.brand');
    Route::post('/brand', [BrandController::class,'create'])->name('brand.create');
    Route::delete('/brand/delete/{id}', [BrandController::class,'destroy']);
    Route::get('/brand/{brand:slug}',[BrandController::class,'show']);
    Route::put('/brand/{id}/update',[BrandController::class,'update'])->name('brand.update');

    // Product
    Route::get('/product',[ProductController::class,'index'])->name('admin.product');
    Route::post('/product',[ProductController::class,'store'])->name('product.create');
    Route::delete('/product/delete/{id}', [ProductController::class,'destroy']);
    Route::get('/product/spek/{product:slug}',[ProductController::class,'spek']);
    Route::get('/product/{product:slug}',[ProductController::class,'show']);
    Route::put('/product/{id}/update',[ProductController::class,'update'])->name('product.update');

    //user
    Route::get('/user',[UserController::class,'index'])->name('admin.user');
    Route::post('/user',[UserController::class,'store'])->name('user.create');
    Route::get('/user/{user:id}',[UserController::class,'show']);
    Route::put('/user/{id}/update',[UserController::class,'update'])->name('user.update');
    Route::delete('/user/delete/{id}', [UserController::class,'destroy']);

});