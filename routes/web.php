<?php

use App\Http\Controllers\Admin\BreakingNewsController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\FooterController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\LanguageController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SocialController;
use App\Http\Controllers\Admin\ThemeController;
use App\Http\Controllers\Admin\TranslationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\WizardController;
use App\Http\Controllers\Front\FrontController;
use App\Models\Admin\Comment;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware('auth')->group(function (){
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
});

require __DIR__.'/auth.php';


// ADMIN ROUTES;
Route::prefix('admin')->middleware('auth')->group(function (){

    // THEME;
    Route::get('/theme/setting', [ThemeController::class, 'edit'])->name('theme.edit');
    Route::post('/theme/update', [ThemeController::class, 'update'])->name('theme.update');

    // USERS;
    Route::get('/users', [UserController::class, 'index'])->name('users');
    Route::get('/users/get-users', [UserController::class, 'GetUsers'])->name('users.GetUsers');
    Route::get('/users/{id}', [UserController::class, 'show'])->name('user.show');
    Route::post('/users/store', [UserController::class, 'store'])->name('new.user.store');
    Route::post('/user/delete', [UserController::class, 'destroy'])->name('user.delete');

    // PROFILE;
    Route::get('/profile/{name}',[ProfileController::class, 'profile'])->name('view.profile');
    Route::get('/password/reset',[ProfileController::class, 'password_reset'])->name('my.password.reset');
    Route::post('/password/reset',[ProfileController::class, 'password_update'])->name('my.password.update');
    Route::get('/profile/{id}/edit',[ProfileController::class, 'edit'])->name('my.profile.edit');
    Route::post('/profile/update',[ProfileController::class, 'update'])->name('my.profile.update');

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

    // BREAKING NEWS;
    Route::get('/breaking-news', [BreakingNewsController::class, 'index'])->name('admin.breaking.index');
    Route::get('/breaking-news/all', [BreakingNewsController::class, 'all_breaking'])->name('admin.breaking.all');
    Route::get('/breaking-news/create', [BreakingNewsController::class, 'create'])->name('admin.breaking.create');
    Route::post('/breaking-news/store', [BreakingNewsController::class, 'store'])->name('admin.breaking.store');
    Route::get('/breaking-news/{id}/edit', [BreakingNewsController::class, 'edit'])->name('admin.breaking.edit');
    Route::post('/breaking-news/{id}/update', [BreakingNewsController::class, 'update'])->name('admin.breaking.update');
    Route::get('/breaking-news/{id}/destroy', [BreakingNewsController::class, 'destroy'])->name('admin.breaking.destroy');

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


    // GALLERY;
    Route::get('/gallery/images', [GalleryController::class, 'images'])->name('gallery.images');
    Route::get('/gallery/videos', [GalleryController::class, 'videos'])->name('gallery.videos');

    // MENU;
    Route::get('/menu', [MenuController::class, 'index'])->name('menu.index');
    Route::get('/menu/main-menu', [MenuController::class, 'mainMenuEdit'])->name('menu.mainMenu.edit');
    Route::get('/menu/footer-menu', [MenuController::class, 'footerMenuEdit'])->name('menu.footerMenu.edit');
    Route::post('/menu/main-menu', [MenuController::class, 'mainMenuUpdate'])->name('menu.mainMenu.update');
    Route::post('/menu/footer-menu', [MenuController::class, 'footerMenuUpdate'])->name('menu.footerMenu.update');

    // PAGES;
    Route::get('/pages', [PageController::class, 'all'])->name('admin.page');

    Route::get('/page/index', [PageController::class, 'index_edit'])->name('page.index.edit');
    Route::post('/page/index', [PageController::class, 'index_update'])->name('page.index.update');

    Route::get('/page/privacy-policy', [PageController::class, 'privacy_policy_edit'])->name('page.privacy_policy.edit');
    Route::post('/page/privacy-policy', [PageController::class, 'privacy_policy_update'])->name('page.privacy_policy.update');

    Route::get('/page/request-add', [PageController::class, 'request_add_edit'])->name('page.request_add.edit');
    Route::post('/page/request-add', [PageController::class, 'request_add_update'])->name('page.request_add.update');

    Route::get('/page/cookies', [PageController::class, 'cookies_edit'])->name('page.cookies.edit');
    Route::post('/page/cookies', [PageController::class, 'cookies_update'])->name('page.cookies.update');

    Route::get('/page/faq', [PageController::class, 'faq_edit'])->name('page.faq.edit');
    Route::post('/page/faq', [PageController::class, 'faq_update'])->name('page.faq.update');

    Route::get('/page/contact', [PageController::class, 'contact_edit'])->name('page.contact.edit');
    Route::post('/page/contact', [PageController::class, 'contact_update'])->name('page.contact.update');

    // CONTACT;
    Route::get('/user/contact/contact-form', [ContactController::class, 'index'])->name('contact.index');
    Route::get('/user/contact/contact-form/all-contact', [ContactController::class, 'contact_all'])->name('contact.contact.all');
    Route::get('/user/contact/{id}/reply', [ContactController::class, 'contact_reply'])->name('contact.reply');
    Route::post('/user/contact/reply', [ContactController::class, 'reply_send'])->name('contact.reply.send');
    Route::post('/contact/contact/{id}/delete', [ContactController::class, 'destroy'])->name('contact.contact.delete');


    // COMMENT;
    Route::get('/comment/all', [CommentController::class, 'index'])->name('admin.comment.index');
    Route::get('/comment/comment/all-comment', [CommentController::class, 'comment_all'])->name('admin.comment.all');
    Route::get('/comment/comment/{id}', [CommentController::class, 'view'])->name('admin.comment.view');
    Route::get('/comment/comment/{id}/delete', [CommentController::class, 'destroy'])->name('admin.comment.destroy');
    Route::post('/comment/comment/{id}/delete', [CommentController::class, 'delete'])->name('admin.comment.delete');


});



// FRONT ROUTE;
Route::get('/', [FrontController::class, 'index'])->name('front.index');
Route::get('/news/{slug}', [FrontController::class, 'singleNews'])->name('single.news');
Route::post('/comment/store', [CommentController::class, 'store'])->name('comment.store');
Route::get('/news/category/{slug}', [FrontController::class, 'category'])->name('front.category');

Route::get('/privacy-policy', [FrontController::class, 'privacy'])->name('front.privacy');
Route::get('/cookies', [FrontController::class, 'cookies'])->name('front.cookies');
Route::get('/contact', [FrontController::class, 'contact'])->name('front.contact');
Route::get('/request-add', [FrontController::class, 'request_add'])->name('front.request.add');

// CONTACT;
Route::post('/user/contact', [ContactController::class, 'store'])->name('user.contact');




// LANGUAGE;
Route::get('/primary-language', [LanguageController::class, 'ActiveLanguage'])->name('change.lang');
Route::get('/secondary-language', [LanguageController::class, 'DeActiveLanguage'])->name('lang.forgot');
