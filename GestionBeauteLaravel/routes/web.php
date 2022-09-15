<?php

use App\Http\Controllers\ProductContoller;
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
route::resource('products', ProductContoller::class);

// Route::get("/products", [ProductContoller::class, 'index'])->name('products.index'); Route::get("/products/create", [ProductContoller::class, 'create'])->name('0products.create');
// Route::post("/products", [ProductContoller::class, 'save'])->name('products.save');
// Route::get("/products/{id}", [ProductContoller::class, 'details'])->name("details");
// Route::put("/products/{id}", [ProductContoller::class, 'update']); //patch, put
// Route::get("/products/{id}/edit", [ProductContoller::class, 'edit']);
// Route::delete("/products/{id}", [ProductContoller::class, 'destroy']);
