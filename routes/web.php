<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Public Website Routes
|--------------------------------------------------------------------------
*/

// Home
Route::get('/', [App\Http\Controllers\UserController::class, "index"])->name('index');

// Shop / Products (Public)
Route::get('/products', [App\Http\Controllers\ProductController::class, "index"])->name('products');
Route::get("/products/{id}", [App\Http\Controllers\ProductController::class, "show"])->name("products.show");


// Cart
// Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
// Route::post('/cart/add/{product}', [CartController::class, 'add'])->name('cart.add');
// Route::delete('/cart/remove/{product}', [CartController::class, 'remove'])->name('cart.remove');

// // Checkout / Orders (Customer)
// Route::middleware('auth')->group(function () {
//     Route::get('/checkout', [OrderController::class, 'checkout'])->name('checkout');
//     Route::post('/order/place', [OrderController::class, 'store'])->name('order.store');
//     Route::get('/orders', [OrderController::class, 'history'])->name('orders.history');
// });


/*
|--------------------------------------------------------------------------
| Dashboard Routes (Admin / Seller)
|--------------------------------------------------------------------------
*/

Route::prefix('dashboard')
 // ->middleware(['auth'])
 ->name('dashboard.')
->group(function () {
    Route::get(("/"), [App\Http\Controllers\Dashboard\DashboardController::class, "index"])->name("index");
});
