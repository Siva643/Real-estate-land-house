<?php

use App\Http\Controllers\productadd;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\HomeController;

// use App\Http\Controllers\DashboardController;

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

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/',[HomeController::class,'index']);
Route::get('admin/index', function () {
    return view('productadd.create');
});
Route::get('admin/home', function () {
    return view('admin.home ');
});
// Route::get('/dashboard', [DashboardController::class, 'index']);
// Route::get('/', [DashboardController::class, 'index']);

//route barang
// Route::resource('/barang', BarangController::class);
/* Product add */
Route::get('/productadd',[productadd::class,'index']);
Route::post('/create',[productadd::class,'create'])->name('create');
Route::get('/read',[productadd::class,'read']);
Route::get('edit/{id}',[productadd::class,'edit']);
Route::post('update/{id}',[productadd::class,'update']);
Route::get('delete/{id}',[productadd::class,'delete']);

Route::get('signin',[HomeController::class,'login'])->name('login');



    