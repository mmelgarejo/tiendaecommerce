<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/', WelcomeController::class)->name('welcome');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('categories/{category}', [CategoryController::class, 'show'])->name('category.show');

Route::get('products/{product}', [ProductController::class, 'show'])->name('product.show');

Route::get('admin', [AdminController::class, 'index'])->middleware('can:admin.home')->name('admin.index');

// Rutas de Users

Route::get('admin/users', [AdminController::class, 'listUsers'])->name('user.list');

Route::get('admin/users/{user}/edit', [AdminController::class, 'editUsers'])->name('user.edit');

Route::put('admin/users/{user}', [AdminController::class, 'updateUsers'])->name('user.update');

// Rutas de Productos

Route::get('admin/products', [ProductController::class, 'list'])->name('product.list');

Route::get('admin/products/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');

Route::get('admin/products/{product}', [ProductController::class, 'showAdmin'])->name('admin.product.show');

