<?php

use App\Http\Controllers\admin\BrandController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\client\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('client.index');

Route::get('/adminpanel', function (){
    return view('admin.home');
});



Route::prefix('/adminpanel/categories')->name('categories.')->group(function (){
    Route::get('', [CategoryController::class, 'index'])->name('index');
    Route::get('/create', [CategoryController::class, 'create'])->name('create');
    Route::post('', [CategoryController::class, 'store'])->name('store');
    Route::get('/{category}/edit', [CategoryController::class, 'edit'])->name('edit');
    Route::patch('/{category}', [CategoryController::class, 'update'])->name('update');
    Route::delete('/{category}', [CategoryController::class, 'destroy'])->name('destroy');
});

Route::get('/adminpanel/brands', [BrandController::class, 'index'])->name('brands.index');
Route::get('/adminpanel/brands/create', [BrandController::class, 'create'])->name('brands.create');
Route::post('/adminpanel/brands', [BrandController::class, 'store'])->name('brands.store');
Route::get('/adminpanel/brands/{brand}/edit', [BrandController::class, 'edit'])->name('brands.edit');
Route::patch('/adminpanel/brands/{brand}', [BrandController::class, 'update'])->name('brands.update');
Route::delete('/adminpanel/brands/{brand}', [BrandController::class, 'destroy'])->name('brands.destroy');
