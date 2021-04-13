<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\FooterController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\SocialController;
use App\Http\Controllers\Admin\TranslationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\WizardController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::middleware('auth')->group(function (){
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
});

require __DIR__.'/auth.php';


// ADMIN ROUTES;
Route::prefix('admin')->middleware('auth')->group(function (){

    // USERS;
    Route::get('/users', [UserController::class, 'index'])->name('users');
    Route::get('/users/get-users', [UserController::class, 'GetUsers'])->name('users.GetUsers');
    Route::get('/users/{id}', [UserController::class, 'show'])->name('user.show');
    Route::post('/users/store', [UserController::class, 'store'])->name('new.user.store');
    Route::post('/user/{id}/delete', [UserController::class, 'destroy'])->name('user.delete');

    // CATEGORY;
    Route::get('/category', [CategoryController::class, 'index'])->name('admin.category.index');
    Route::get('/category/get', [CategoryController::class, 'getCategories'])->name('categories.get');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('categories.store');
    Route::post('/category/{id}/delete', [CategoryController::class, 'delete'])->name('categories.delete');
    Route::get('/category/{id}', [CategoryController::class, 'show'])->name('admin.category.show');
    Route::post('/category/update', [CategoryController::class, 'update'])->name('admin.category.update');

    // NEWS;
    Route::get('/news', [NewsController::class, 'index'])->name('admin.news.index');
    Route::get('/news/all', [NewsController::class, 'GetAllNews'])->name('admin.news.all');
    Route::get('/news/create', [NewsController::class, 'create'])->name('admin.news.create');
    Route::post('/news/store', [NewsController::class, 'store'])->name('admin.news.store');
    Route::get('/news/{id}/edit', [NewsController::class, 'edit'])->name('admin.news.edit');
    Route::put('/news/{id}/update', [NewsController::class, 'update'])->name('admin.news.update');
    Route::post('/news/{id}/delete', [NewsController::class, 'destroy'])->name('admin.news.destroy');
    Route::get('/author/{id}/news', [NewsController::class, 'NewsByAuthor'])->name('admin.author.news');

    // SOCIAL;
    Route::get('/socials', [SocialController::class, 'index'])->name('admin.socials');
    Route::get('/socials/all', [SocialController::class, 'getAllSocial'])->name('admin.social.all');
    Route::post('/socials/store', [SocialController::class, 'store'])->name('admin.social.store');
    Route::get('/socials/edit/{id}', [SocialController::class, 'edit'])->name('admin.social.edit');
    Route::post('/socials/update', [SocialController::class, 'update'])->name('admin.social.update');
    Route::post('/socials/{id}/delete', [SocialController::class, 'destroy'])->name('admin.social.delete');

    // WIZARD;
    Route::get('/wizard', [WizardController::class, 'edit'])->name('admin.wizard.edit');
    Route::post('/wizard/update', [WizardController::class, 'update'])->name('admin.wizard.update');

    // FOOTER;
    Route::get('/footer', [FooterController::class, 'edit'])->name('admin.footer.edit');
    Route::post('/footer/update', [FooterController::class, 'update'])->name('admin.footer.update');

    // TRANSLATION;
    Route::get('/translation', [TranslationController::class, 'edit'])->name('admin.translation.edit');
    Route::post('/translation/update', [TranslationController::class, 'update'])->name('admin.translation.update');

});
