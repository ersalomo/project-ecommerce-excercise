<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ProdcutController;


Route::prefix('admin')->name("admin.")->group(function () {
    Route::middleware(["guest:admin"])->group(function () {
        Route::view('login', 'admin/pages/auth/login')->name("login");
    });
    Route::middleware(["auth:admin"])->group(function () {
        Route::view('home-admin', 'admin.pages.admin-dashboard')->name("home-admin");
        Route::view('profile-admin', 'admin.pages.profile-admin')->name("profile-admin");
        Route::view('list-products', 'admin.pages.data.list-products')->name('list-products');
        Route::view('data-carts', 'admin.pages.data.data-carts')->name('data-carts');
        Route::view('data-transactions', 'admin.pages.data.data_transaction')->name('data-transactions');
        Route::view('detail-transactions', 'admin.pages.data.list-detail-trans')->name('detail-transaction');
        Route::view('users', 'admin.users.data-users')->name('all-users');
        Route::post('logout', [AdminController::class, 'logout'])->name('logout');
        Route::post('updateImage', [ProdcutController::class, 'changeProfilePicture'])->name('updateImage');
        Route::post('addProductImage', [ProdcutController::class, 'addProduct'])->name('addProduct');
    });
});
