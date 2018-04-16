<?php

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

/* Front-end routes */
Route::get('/', 'HomeController@index')->name('home');
Route::get('/nos-produits', 'PageController@products')->name('products');
Route::get('/service-traiteur', 'PageController@service')->name('service');
Route::get('/a-propos', 'PageController@about')->name('about');
Route::get('/nous-contacter', 'PageController@contact')->name('contact');

/* Back-end routes */
Route::group(['prefix' => 'backboulish', 'middleware' => 'auth.admin'], function() {
    Route::resource('/nos-produits','ProductsController')->name('admin.products');
    Route::resource('/categories','CategoriesController')->name('admin.categories');
    Route::resource('/plats-du-jour','MealsController')->name('admin.meals');
    Route::resource('/promos','DiscountsController')->name('admin.discounts');
    Route::resource('/promos','DiscountsController')->name('admin.discounts');
});

