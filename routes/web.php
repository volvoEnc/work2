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
    Route::get('/orders', 'admin\OrderController@index')->name('admin.home');
    Route::get('/categories/all', 'admin\CategoriesController@index_all')->name('admin.categories.all.index');
    Route::get('/categories/group', 'admin\CategoriesController@index_group')->name('admin.categories.group.index');
    Route::get('/categories/main', 'admin\CategoriesController@index_main')->name('admin.categories.main.index');

    Route::get('/site/footer', 'admin\SiteController@show_footer_settings')->name('admin.site.footer.show');
    Route::get('/site/other', 'admin\SiteController@show_other_settings')->name('admin.site.other.show');
    Route::get('/faq', 'admin\SiteController@show_faq_page')->name('admin.site.faq.show');

    Route::get('/exit', 'admin\AdminController@exit')->name('admin.exit');
});

Route::get('/', 'HomeController@show')->name('home');
