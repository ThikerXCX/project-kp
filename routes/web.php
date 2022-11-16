<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
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

Route::middleware('auth')->prefix('/admin')->group(function(){
    //dashboard
    Route::get('/dashboard', [DashboardController::class,'index'])->name('admin.dashboard');
    //category
    Route::get('/category', [CategoryController::class,'index'])->name('admin.category');
    Route::delete('/category/delete/{id}', [CategoryController::class,'destroy']);
    //logout
    Route::post('logout',LogoutController::class)->name('admin.logout');
});