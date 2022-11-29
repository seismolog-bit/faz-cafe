<?php

use Illuminate\Support\Facades\Route;

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
})->name('index');

Auth::routes();

Route::group(['namespace' => 'App\Http\Controllers'], function()
{

    Route::group(['middleware' => ['auth']], function() 
    {
        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    });

    Route::middleware(['auth', 'permission'])->name('admin.')->prefix('admin')->group(function()
    {
        Route::resource('orders', Admin\OrderController::class);
        Route::resource('order-items', Admin\OrderItemController::class);
        Route::resource('products', Admin\ProductController::class);
        Route::resource('product-categories', Admin\ProductCategoryController::class);
        Route::resource('inventories', Admin\InventoryController::class);
        Route::resource('putaways', Admin\PutawayController::class);
        Route::resource('putaway-items', Admin\PutawayItemController::class);
        Route::resource('receivings', Admin\ReceivingController::class);
        Route::resource('reveicing-items', Admin\ReceivingItemController::class);
        Route::resource('rejects', Admin\RejectController::class);
        Route::resource('reject-items', Admin\RejectItemController::class);
        Route::resource('tables', Admin\TableController::class);
        Route::resource('users', Admin\UserController::class);
        Route::get('users/{user}/activate/', [App\Http\Controllers\Admin\UserController::class, 'activate'])->name('users.activate');
        Route::resource('roles', Admin\RolesController::class);
        Route::resource('permissions', Admin\PermissionsController::class);
    });
});
