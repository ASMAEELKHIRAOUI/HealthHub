<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DashboardController;

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

Route::group(['middleware' => ['auth']], function () {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
});



Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/', [ProductController::class, 'index'])->name('welcome');
Route::get('details/{product}', [ProductController::class, 'details'])->name('product.detail');


Route::controller(AuthController::class)->group(function () {
    // Route::get('categories', 'index');
    Route::get('categories/{category}', 'show');
    Route::middleware('auth:web')->group(function () {
        // Route::group(['controller' => ProductController::class, 'prefix' => 'products'], function () {
        //     Route::get('', 'index')->name('products');
        //     Route::post('', 'store')->middleware(['permission:add product'])->name('products.store');
        //     Route::put('/{product}', 'update')->middleware(['permission:edit product']);
        //     Route::delete('/{product}', 'destroy')->middleware(['permission:delete product'])->name('product.destroy');
        // });
        Route::group(['controller' => BrandController::class, 'prefix' => 'brands'], function () {
            Route::get('', 'index')->name('brands');
            Route::post('', 'store')->middleware(['permission:add brand'])->name('brands.store');
            Route::get('/{brand}', 'edit')->middleware(['permission:edit brand'])->name('brands.edit');
            Route::put('/{brand}', 'update')->middleware(['permission:edit brand'])->name('brands.update');
            Route::delete('/{brand}', 'destroy')->middleware(['permission:delete brand'])->name('brands.destroy');
        });
        Route::group(['controller' => CategoryController::class, 'prefix' => 'categories'], function () {
            Route::get('', 'index')->name('categories');
            Route::post('', 'store')->middleware(['permission:add category'])->name('categories.store');
            Route::get('/{category}', 'edit')->middleware(['permission:edit category'])->name('category.edit');
            Route::put('/{category}', 'update')->middleware(['permission:edit category'])->name('category.update');
            Route::delete('/{category}', 'destroy')->middleware(['permission:delete category'])->name('category.destroy');
        });
        Route::group(['controller' => OrderController::class, 'prefix' => 'orders'], function () {
            Route::get('', 'index')->name('orders');
            Route::post('', 'store')->middleware(['permission:add order']);
            Route::put('/{order}', 'update')->middleware(['permission:edit order']);
            Route::delete('/{order}', 'destroy')->middleware(['permission:delete order'])->name('order.destroy');
        });
        Route::group(['controller' => ProductController::class, 'prefix' => 'dashboard'], function () {
            Route::get('', 'index')->name('products');
            Route::post('', 'store')->middleware(['permission:add product']);
            Route::get('/{product}', 'edit')->middleware(['permission:edit product'])->name('products.edit');
            Route::put('/{product}', 'update')->middleware(['permission:edit product'])->name('products.update');
            Route::delete('/{product}', 'destroy')->middleware(['permission:delete product'])->name('products.destroy');
        });
        Route::group(['controller' => UserController::class, 'prefix' => 'profile'], function () {
            Route::get('', 'index')->middleware(['permission:view profile']);
            Route::put('updateNameEmail/{user}', 'updateNameEmail');
            Route::put('updatePassword', 'updatePassword');
            Route::delete('', 'destroy');
        });

        Route::group(['controller' => RoleController::class], function () {
            Route::post('assign-role/{id}', 'assignRole')->middleware('permission:manage roles');
            Route::post('remove-role/{id}', 'removeRole')->middleware('permission:manage roles');
        });
    });
});
