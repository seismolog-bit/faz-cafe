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
        // Route::resource('orders', Admin\OrderController::class);
        Route::get('orders', [App\Http\Controllers\Admin\OrderController::class, 'index'])->name('orders.index');
        Route::get('orders/create', [App\Http\Controllers\Admin\OrderController::class, 'create'])->name('orders.create');
        Route::post('orders/store', [App\Http\Controllers\Admin\OrderController::class, 'store'])->name('orders.store');
        Route::get('orders/{order}', [App\Http\Controllers\Admin\OrderController::class, 'show'])->name('orders.show');
        Route::get('orders/create/activate', [App\Http\Controllers\Admin\OrderController::class, 'create_activate'])->name('orders.create.create_activate');
        // Route::post('orders/create/confirmation', [App\Http\Controllers\Admin\OrderController::class, 'create_confirmation'])->name('orders.create_confirmation');
        Route::post('orders/create/validation', [App\Http\Controllers\Admin\OrderController::class, 'create_validation'])->name('orders.create.create_validation');

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

        // Settings 
        Route::resource('tables', Admin\TableController::class);
        Route::resource('cards', Admin\CardController::class);

        // Users 
        Route::resource('users', Admin\UserController::class);
        Route::get('users/{user}/activate/', [App\Http\Controllers\Admin\UserController::class, 'activate'])->name('users.activate');
        Route::resource('roles', Admin\RolesController::class);
        Route::resource('permissions', Admin\PermissionsController::class);
    });
});
