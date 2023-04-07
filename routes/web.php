<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

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
Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
});


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('home');
Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/details', function () {
    return view('details');
})->name('details');

Route::controller(AuthController::class)->group(function () {
    Route::get('categories', 'index');
    Route::get('categories/{category}', 'show');
    Route::middleware('auth:web')->group(function (){
        Route::post('logout', 'logout');
        Route::post('refresh', 'refresh');
        Route::group(['controller' => CategoryController::class ,'prefix' => 'dashboard'], function () {
            Route::get('', 'index');
            Route::post('', 'store')->middleware(['permission:add category']);
            Route::put('/{category}', 'update')->middleware(['permission:edit category']);
            Route::delete('/{category}', 'destroy')->middleware(['permission:delete category'])->name('category.destroy');
        });
        Route::group(['controller' => ProductController::class, 'prefix' => 'products'], function () {
            Route::post('', 'store')->middleware(['permission:add product']);
            Route::put('/{product}', 'update')->middleware(['permission:edit product']);
            Route::delete('/{product}', 'destroy')->middleware(['permission:delete product']);
        });
        Route::group(['controller' => UserController::class, 'prefix' => 'users'], function () {
            Route::get('', 'index')->middleware(['permission:view profile']);
            Route::put('updateNameEmail/{user}', 'updateNameEmail');
            Route::put('updatePassword', 'updatePassword');
            Route::delete('', 'destroy');
        });

        Route::group(['controller' => RoleController::class], function() {
            Route::post('assign-role/{id}', 'assignRole')->middleware('permission:manage roles');
            Route::post('remove-role/{id}', 'removeRole')->middleware('permission:manage roles');
        });

    });
});