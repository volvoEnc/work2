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

Route::prefix('admin')->group(function () {

    /*
     * Маршруты для работы с заказми
     */

    Route::get('/orders', 'admin\OrderController@index')->name('admin.home');
    Route::get('/order/{id}/{status}', 'admin\OrderController@status')->name('admin.order.status');

    /*
     * Маршруты для всех видов категорий.
     * Main - Основные категории
     * Group - Группы категорий
     * All - Категории
     *
     * Group и Main имеют маршруты ../add/ и ../remove/ - добавление эл.вложенности.
     * Маршурт show - служит как для создания новой категории, так и для показа существующей
     */

    // All

    Route::get('/categories/all', 'admin\CategoriesController@index_all')->name('admin.categories.all.index');
    Route::get('/categories/all/restore', 'admin\CategoriesController@restore_all')->name('admin.categories.all.index.restore');
    Route::get('/categories/all/update', 'admin\CategoriesController@update_all')->name('admin.categories.all.index.update');

    // Group

    Route::get('/categories/group', 'admin\CategoriesController@index_group')->name('admin.categories.group.index');
    Route::get('/categories/group/create', 'admin\CategoriesController@create_group')->name('admin.categories.group.create');
    Route::post('/categories/group/store', 'admin\CategoriesController@store_group')->name('admin.categories.group.store');
    Route::get('/categories/group/{id}', 'admin\CategoriesController@show_group')->name('admin.categories.group.show');
    Route::get('/categories/group/{id}/add/{id_item}', 'admin\CategoriesController@add_categories_to_group')->name('admin.categories.group.add');
    Route::get('/categories/group/{id}/remove/{id_item}', 'admin\CategoriesController@remove_categories_to_group')->name('admin.categories.group.remove');
    Route::post('/categories/group/{id}/update', 'admin\CategoriesController@update_group')->name('admin.categories.group.update');

    // Main

    Route::get('/categories/main', 'admin\CategoriesController@index_main')->name('admin.categories.main.index');
    Route::get('/categories/main/create', 'admin\CategoriesController@create_main')->name('admin.categories.main.create');
    Route::post('/categories/main/store', 'admin\CategoriesController@store_main')->name('admin.categories.main.store');
    Route::get('/categories/main/{id}', 'admin\CategoriesController@show_main')->name('admin.categories.main.show');
    Route::get('/categories/main/{id}/add/{id_item}', 'admin\CategoriesController@add_categories_to_main')->name('admin.categories.main.add');
    Route::get('/categories/main/{id}/remove{id_item}', 'admin\CategoriesController@remove_categories_to_main')->name('admin.categories.main.remove');
    Route::post('/categories/main/{id}/update', 'admin\CategoriesController@update_main')->name('admin.categories.main.update');



    /*
     * Маршруты для работы с контентом сайта
     */

    // FAQ

    Route::get('/faq', 'admin\FaqController@index')->name('admin.site.faq.index');
    Route::get('/faq/create', 'admin\FaqController@create')->name('admin.site.faq.create');
    Route::get('/faq/{id}', 'admin\FaqController@show')->name('admin.site.faq.show');
    Route::get('/faq/remove/{id}', 'admin\FaqController@remove')->name('admin.site.faq.remove');
    Route::post('/faq', 'admin\FaqController@store')->name('admin.site.faq.store');
    Route::post('/faq/update/{id}', 'admin\FaqController@update')->name('admin.site.faq.update');

    // INFO

    Route::get('/info', 'admin\SiteController@show')->name('admin.site.info.show');
    Route::post('/info/update/social', 'admin\SiteController@update_social')->name('admin.site.info.update.social');
    Route::post('/info/update/links', 'admin\SiteController@update_links')->name('admin.site.info.update.links');

    // Other
    Route::get('/exit', 'admin\AdminController@exit')->name('admin.exit');
});

Route::get('/', 'HomeController@show')->name('home');
Route::get('/order/{id}', 'OrderController@show')->name('order.info');
