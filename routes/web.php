<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\GudangController;
use App\Http\Controllers\ShipperController;
use App\Models\Barang;
use App\Models\Gudang;
use App\Models\Shipper;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/admin', function () {
    return redirect('/admin');
});

Route::get('/shipper/deleteAll', [ShipperController::class, 'deleteAll'])->name('shipper.deleteAll');
Route::get('/barang/deleteAll', [BarangController::class, 'deleteAll'])->name('barang.deleteAll');
Route::get('/gudang/deleteAll', [GudangController::class, 'deleteAll'])->name('gudang.deleteAll');
Route::get('/Shipper/checkseat', [ShipperController::class, 'checkSeat'])->name('shipper.checkSeat');

Auth::routes();

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    // Route::get('/barang/create', [BarangController::class, 'create'])->name('barang.create');
    Route::get('/settings', [SettingController::class, 'index'])->name('settings.index');
    Route::post('/settings', [SettingController::class, 'store'])->name('settings.store');
    Route::resource('products', ShipperController::class);
    Route::resource('shipper', ShipperController::class);
    Route::resource('customers', BarangController::class);
    Route::resource('barang', BarangController::class);
    Route::resource('orders', OrderController::class);
    Route::resource('gudang', GudangController::class);



    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart', [CartController::class, 'store'])->name('cart.store');
    Route::post('/cart/change-qty', [CartController::class, 'changeQty']);
    Route::delete('/cart/delete', [CartController::class, 'delete']);
    Route::delete('/cart/empty', [CartController::class, 'empty']);
});
// Route::group(['middleware' => 'checkUserRole'], function () {
//     Route::get('/shipper/create', [ShipperController::class, 'create'])->name('shipper.create');
//     Route::get('/shipper/deleteAll', [ShipperController::class, 'deleteAll'])->name('shipper.deleteAll');
// });
