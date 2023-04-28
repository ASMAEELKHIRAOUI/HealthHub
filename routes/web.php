<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
// use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/search', [ProductController::class, 'search'])->name('product.search');


Route::group(['middleware' => ['auth']], function () {
    Route::resource('roles', RoleController::class);
    // Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
});


Auth::routes();

// Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'statistics'])->middleware(['permission:add category'])->name('dashboard');
// Route::get('/cart', function () {
//     return view('cart');
// })->name('cart');

Route::get('/', [ProductController::class, 'index'])->name('welcome');
Route::get('details/{product}', [ProductController::class, 'details'])->name('product.details');
Route::get('orders/orderdetails/{order}', [OrderController::class, 'details'])->name('order.details');
Route::get('checkout', [CartController::class, 'index'])->name('checkout');
Route::get('cart', [CartController::class, 'index'])->name('cart');


Route::controller(AuthController::class)->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'statistics'])->middleware(['permission:add category'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::get('categories', 'index');
    Route::get('categories/{category}', 'show');
    Route::middleware('auth:web')->group(function () {
        Route::group(['controller' => BrandController::class, 'prefix' => 'brands'], function () {
            Route::get('', 'index')->name('brand.index');
            Route::post('', 'store')->middleware(['permission:add brand'])->name('brand.store');
            Route::get('/{brand}', 'edit')->middleware(['permission:edit brand'])->name('brand.edit');
            Route::put('/{brand}', 'update')->middleware(['permission:edit brand'])->name('brand.update');
            Route::delete('/{brand}', 'destroy')->middleware(['permission:delete brand'])->name('brand.destroy');
        });
        Route::group(['controller' => CategoryController::class, 'prefix' => 'categories'], function () {
            Route::get('', 'index')->name('category.index');
            Route::post('', 'store')->middleware(['permission:add category'])->name('category.store');
            Route::get('/{category}', 'edit')->middleware(['permission:edit category'])->name('category.edit');
            Route::put('/{category}', 'update')->middleware(['permission:edit category'])->name('category.update');
            Route::delete('/{category}', 'destroy')->middleware(['permission:delete category'])->name('category.destroy');
        });
        Route::group(['controller' => OrderController::class], function () {
            Route::get('orders', 'index')->name('order.index');
            Route::post('orders', 'store')->middleware(['permission:add order'])->name('order.store');
            Route::get('/{order}', 'edit')->middleware(['permission:edit order'])->name('order.edit');
            Route::put('/{order}', 'update')->middleware(['permission:edit order'])->name('order.update');
            Route::delete('/{order}', 'destroy')->middleware(['permission:delete order'])->name('order.destroy');
        });
        Route::group(['controller' => ProductController::class, 'prefix' => 'products'], function () {
            Route::get('', 'index')->name('product.index');
            Route::post('', 'store')->middleware(['permission:add product'])->name('product.store');
            Route::get('/{product}', 'edit')->middleware(['permission:edit product'])->name('product.edit');
            Route::put('/{product}', 'update')->middleware(['permission:edit product'])->name('product.update');
            Route::delete('/{product}', 'destroy')->middleware(['permission:delete product'])->name('product.destroy');
            Route::get('category/{filter}','filterCategory')->name('filterCategory');
        });
        Route::group(['controller' => CartController::class], function () {
            Route::post('cart', 'store')->name('cart.store');
            Route::delete('cart/{cart}', 'destroy')->name('cart.destroy');
        });

        Route::group(['controller' => RoleController::class], function () {
            Route::post('assign-role/{id}', 'assignRole')->middleware('permission:manage roles');
            Route::post('remove-role/{id}', 'removeRole')->middleware('permission:manage roles');
        });
    });
});

