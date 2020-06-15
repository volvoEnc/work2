<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth.once.basic')->group(function () {
    Route::post('/sync/lenta/products', 'CatalogController@productsSync')->name('sync.lenta.products');
    Route::post('/sync/lenta/prices', 'CatalogController@pricesSync')->name('sync.lenta.prices');
    Route::post('/sync/lenta/stocks', 'CatalogController@amountSync')->name('sync.lenta.stocks');
    Route::post('/sync/lenta/bonuses', 'CatalogController@bonusesSync')->name('sync.lenta.bonuses');
});
