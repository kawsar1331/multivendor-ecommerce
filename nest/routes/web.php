<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\CategoryController;


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

Route::controller(FrontendController::class)->group(function() {
    Route::get('/', 'index')->name('index');
    Route::get('/blog-category-list', 'blogCateList')->name('blogCateList');
    Route::get('/blog-post-right', 'blogPostRight')->name('blogPostRight');
    Route::get('/shop-cart', 'shopCart')->name('shopCart');
    Route::get('/shop-checkout', 'shopCheckout')->name('shopCheckout');
    Route::get('/shop-compare', 'shopCompare')->name('shopCompare');
    Route::get('/shop-wishlist', 'shopWishlist')->name('shopWishlist');
    Route::get('/shop-grid-left', 'shopGridLeft')->name('shopGridLeft');
    Route::get('/shop-invoice', 'shopInvoice')->name('shopInvoice');
    Route::get('/shop-product-full', 'shopProFull')->name('shopProFull');
    Route::get('/vendor-details', 'vendorDetails')->name('vendorDetails');
    Route::get('/vendor-guide', 'vendorGuide')->name('vendorGuide');
    Route::get('/vendor-grid', 'vendorGrid')->name('vendorGrid');
});


Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Route::controller(BackendController::class)->group(function() {
//     Route::get('/login-page', 'loginpage')->name('loginpage');

// });
Route::controller(AdminController::class)->group(function() {
    Route::get('/admin-logout', 'adminlogout')->name('adminlogout');
});

// Category Routing
Route::controller(CategoryController::class)->group(function() {
    Route::get('/manage-category', 'index')->name('manageCategory');
    Route::post('/add-category', 'store');
    Route::get('/show-category', 'show');
    Route::get('/delete-category/{id}', 'destroy');
    Route::get('/edit-category/{id}', 'edit');
    Route::post('/update-category/{id}', 'update');
});

