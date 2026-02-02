<?php

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\ProductController;
use App\Http\Controllers\ProductController as ControllersProductController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Public Website Routes
|--------------------------------------------------------------------------
*/

// Home
Route::get('/', [App\Http\Controllers\UserController::class, "index"])->name('index');

// Shop / Products (Public)
Route::get('/products', [ControllersProductController::class, "index"])->name('products');
Route::get("/products/{id}", [ControllersProductController::class, "show"])->name("products.show");


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
    Route::get(("/"), [DashboardController::class, "index"])->name("index");

        // Products CRUD
        Route::get('/products', [ProductController::class, 'index'])->name('products.index'); // List all products
        Route::get('/products/create', [ProductController::class, 'create'])->name('products.create'); // Form to create
        Route::post('/products', [ProductController::class, 'store'])->name('products.store'); // Store new product
        Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit'); // Edit product
        Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update'); // Update product
        Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy'); // Delete product


});
