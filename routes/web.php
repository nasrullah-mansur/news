<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;

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


// Route::middleware(['auth'])->prefix('admin')->group(function (){});

// ADMIN ROUTES;
Route::prefix('admin')->group(function (){
    // CATEGORY;
    Route::get('/category', [CategoryController::class, 'index'])->name('admin.category.index');
    Route::get('/category/get', [CategoryController::class, 'getCategories'])->name('categories.get');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('categories.store');
    Route::post('/category/{id}/delete', [CategoryController::class, 'delete'])->name('categories.delete');
    Route::get('/category/{id}', [CategoryController::class, 'show'])->name('admin.category.show');
    Route::post('/category/{id}/update', [CategoryController::class, 'update'])->name('admin.category.update');
});
