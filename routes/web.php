<?php

use App\Http\Controllers\Admin\CategoryController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


// ADMIN ROUTES;
Route::prefix('admin')->group(function (){
    // CATEGORY;
    Route::get('/category', [CategoryController::class, 'index'])->name('admin.category.index');
    Route::get('/category/get', [CategoryController::class, 'getCategories'])->name('categories.get');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('categories.store');
    Route::post('/category/{id}/delete', [CategoryController::class, 'delete'])->name('categories.delete');
    Route::get('/category/{id}', [CategoryController::class, 'show'])->name('admin.category.show');
    Route::post('/category/update', [CategoryController::class, 'update'])->name('admin.category.update');
});
