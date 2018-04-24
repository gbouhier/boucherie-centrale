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
Route::get('/', 'PagesController@home')->name('home');
Route::get('/nos-produits', 'PagesController@products')->name('products');
Route::get('/service-traiteur', 'PagesController@services')->name('services');
Route::get('/a-propos', 'PagesController@about')->name('about');
Route::get('/nous-contacter', 'PagesController@contact')->name('contact');

/* Back-end routes */
Route::prefix('admin')->group(function() {
    // Route::resource('/nos-produits','ProductsController')->name('admin.products');
    // Route::resource('/nos-services','ServicesController')->name('admin.services');
    // Route::resource('/plats-du-jour','MealsController')->name('admin.meals');
    // Route::resource('/promos','DiscountsController')->name('admin.discounts');
    Route::get('/nos-categories', 'CategoriesController@index');
    Route::post('/create-product-category', 'CategoriesController@store')->name('admin.category.create');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
