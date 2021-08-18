<?php

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

Route::get('adminpanel/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('adminpanel/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('adminpanel/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('adminpanel/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::patch('adminpanel/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
Route::delete('adminpanel/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
