<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AdminController;

/** Accueil */
Route::get('/', [HomeController::class, 'index'])->name('home');

/** Produits */
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product');

//Route::get('/products', [ProductController::class, 'index'])->name('product.index');

Route::resource('admin/products', ProductController::class)->except(['show'])->middleware(['auth', 'is_admin']);


/** Panier */
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::get('/cart/count', [CartController::class, 'count']);
Route::patch('/cart/update', [CartController::class, 'update'])->name('cart.update');
Route::delete('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');

/** Commande */
Route::get('/checkout', [OrderController::class, 'checkout'])->name('order.checkout');
Route::post('/order', [OrderController::class, 'store'])->name('order.store');
Route::get('/order/confirmation/{id}', [OrderController::class, 'confirmation'])->name('order.confirmation');

/** Admin */
Route::middleware(['auth', 'is_admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::resource('/products', ProductController::class)->except(['show']);
    Route::get('/orders', [AdminController::class, 'orders'])->name('admin.orders');
    Route::patch('/orders/{id}/status', [AdminController::class, 'updateStatus'])->name('admin.orders.updateStatus');
     Route::resource('products', ProductController::class)->except(['show']);
});
