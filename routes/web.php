<?php

use Illuminate\Support\Facades\Artisan;
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

Route::get('/', [App\Http\Controllers\Public\PublicController::class, 'index'])->name('index');
Route::get('/table-time', [App\Http\Controllers\Public\PublicController::class, 'table_time'])->name('table-time');
Route::get('/fetch_order',[App\Http\Controllers\Public\PublicController::class,'fetch_order'])->name('fetch_order');

Route::get('/o/{card}', [App\Http\Controllers\Public\CardController::class, 'show'])->name('card.show');

Auth::routes();

Route::get('/clear', function() {

    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('route:clear');

    return "Cleared!";

});

Route::get('delivery-test', function () {
    event(new App\Events\DeliveryEvent(1));
    return "Event has been sent!";
});

Route::group(['namespace' => 'App\Http\Controllers'], function()
{

    Route::group(['middleware' => ['auth']], function() 
    {
        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    });

    // Route::middleware(['auth', 'permission'])->name('admin.')->prefix('admin')->group(function()
    Route::middleware(['auth'])->name('admin.')->prefix('admin')->group(function()
    {   
        // Cart 
        Route::get('carts', [App\Http\Controllers\Admin\CartController::class, 'index'])->name('carts.index');
        Route::get('carts/process', [App\Http\Controllers\Admin\CartController::class, 'process'])->name('carts.process');
        Route::post('carts/store', [App\Http\Controllers\Admin\CartController::class, 'store'])->name('carts.store');
        Route::post('carts/{cart}/update', [App\Http\Controllers\Admin\CartController::class, 'update'])->name('carts.update');
        Route::post('carts/destroy', [App\Http\Controllers\Admin\CartController::class, 'destroy'])->name('carts.destroy');
        Route::post('carts/clear', [App\Http\Controllers\Admin\CartController::class, 'clear'])->name('carts.clear');
        Route::post('carts/checkout', [App\Http\Controllers\Admin\CartController::class, 'checkout'])->name('carts.checkout');


        // Route::resource('orders', Admin\OrderController::class);
        Route::get('orders', [App\Http\Controllers\Admin\OrderController::class, 'index'])->name('orders.index');
        Route::get('orders/active', [App\Http\Controllers\Admin\OrderController::class, 'index_active'])->name('orders.index_active');
        Route::get('orders/create', [App\Http\Controllers\Admin\OrderController::class, 'create'])->name('orders.create');
        Route::post('orders/store', [App\Http\Controllers\Admin\OrderController::class, 'store'])->name('orders.store');
        Route::get('orders/{order}', [App\Http\Controllers\Admin\OrderController::class, 'show'])->name('orders.show');
        Route::get('orders/{order}/edit', [App\Http\Controllers\Admin\OrderController::class, 'edit'])->name('orders.edit');
        Route::get('orders/{order}/checkout', [App\Http\Controllers\Admin\OrderController::class, 'checkout'])->name('orders.checkout');
        Route::get('orders/{order}/receipt', [App\Http\Controllers\Admin\OrderController::class, 'receipt'])->name('orders.receipt');
        Route::patch('orders/{order}/finish', [App\Http\Controllers\Admin\OrderController::class, 'finish'])->name('orders.finish');
        Route::get('orders/create/activate', [App\Http\Controllers\Admin\OrderController::class, 'create_activate'])->name('orders.create.create_activate');
        Route::get('orders/create/cart', [App\Http\Controllers\Admin\OrderController::class, 'create_cart'])->name('orders.create.create_cart');
        // Route::post('orders/create/confirmation', [App\Http\Controllers\Admin\OrderController::class, 'create_confirmation'])->name('orders.create_confirmation');
        Route::post('orders/create/validation', [App\Http\Controllers\Admin\OrderController::class, 'create_validation'])->name('orders.create.create_validation');
        Route::post('orders/{order}/update-table', [App\Http\Controllers\Admin\OrderController::class, 'update_table'])->name('orders.update-table');
        Route::delete('orders/{order}', [App\Http\Controllers\Admin\OrderController::class, 'destroy'])->name('orders.destroy');

        Route::resource('order-items', Admin\OrderItemController::class);

        Route::get('cooks', [App\Http\Controllers\Admin\CookStatus::class, 'index'])->name('cooks.index');
        Route::post('cooks/{cooks}/update', [App\Http\Controllers\Admin\CookStatus::class, 'update'])->name('cooks.update');
        Route::post('cooks/{cooks}/cooking', [App\Http\Controllers\Admin\CookStatus::class, 'cooking'])->name('cooks.cooking');
        Route::get('cooks/delivery', [App\Http\Controllers\Admin\CookStatus::class, 'delivery'])->name('cooks.delivery');
        Route::post('cooks/{cooks}/finish', [App\Http\Controllers\Admin\CookStatus::class, 'finish'])->name('cooks.finish');
        Route::get('/cooks/fetch_item_order',[App\Http\Controllers\Admin\CookStatus::class,'fetch_item_order'])->name('cooks.fetch_item_order');
        Route::get('/cooks/fetch_item_delivery',[App\Http\Controllers\Admin\CookStatus::class,'fetch_item_delivery'])->name('cooks.fetch_item_delivery');

        Route::resource('products', Admin\ProductController::class);
        Route::resource('product-categories', Admin\ProductCategoryController::class);
        Route::resource('inventories', Admin\InventoryController::class);
        Route::resource('putaways', Admin\PutawayController::class);
        Route::get('putaways/{cooks}/invoice', [App\Http\Controllers\Admin\PutawayController::class, 'invoice'])->name('putaways.invoice');
        Route::resource('putaway-items', Admin\PutawayItemController::class);

        Route::resource('receivings', Admin\ReceivingController::class);
        Route::get('receivings/{cooks}/invoice', [App\Http\Controllers\Admin\ReceivingController::class, 'invoice'])->name('receivings.invoice');
        Route::resource('reveicing-items', Admin\ReceivingItemController::class);
        Route::resource('items', Admin\ItemController::class);

        // Settings 
        Route::resource('tables', Admin\TableController::class);
        Route::get('tables/{tables}/lamp', [App\Http\Controllers\Admin\TableController::class, 'lamp'])->name('tables.lamp');

        Route::resource('cards', Admin\CardController::class);

        // Users 
        Route::resource('users', Admin\UserController::class);
        Route::get('users/{user}/activate/', [App\Http\Controllers\Admin\UserController::class, 'activate'])->name('users.activate');
        Route::resource('roles', Admin\RolesController::class);
        Route::resource('permissions', Admin\PermissionsController::class);

        // Laporan transaksi
        Route::get('report-orders', [App\Http\Controllers\Admin\ReportOrderController::class, 'index'])->name('report-orders.index');
        Route::get('report-orders/{order}', [App\Http\Controllers\Admin\ReportOrderController::class, 'show'])->name('report-orders.show');
        
        Route::get('report-order-items', [App\Http\Controllers\Admin\ReportOrderItemController::class, 'index'])->name('report-order-items.index');
    });
});
