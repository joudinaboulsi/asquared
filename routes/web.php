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

Route::get('/admin', 'HomeController@index')->name('home');
// clients
Route::get('/clients','ClientsController@index')->name('clients');
Route::get('/create-client','ClientsController@create')->name('clients.create');
Route::post('/store-client','ClientsController@store')->name('clients.store');
Route::get('/edit-client-{id}','ClientsController@edit')->name('clients.edit');
Route::post('/update-client-{id}','ClientsController@update')->name('clients.update');
Route::delete('/delete-client-{id}','ClientsController@delete')->name('clients.delete');

// Portfolio

Route::get('/portfolio','PortfolioController@index')->name('portfolio');
Route::get('/create-portfolio','PortfolioController@create')->name('portfolio.create');
Route::post('/store-portfolio','PortfolioController@store')->name('portfolio.store');
Route::get('/edit-portfolio-{id}','PortfolioController@edit')->name('portfolio.edit');
Route::post('/update-portfolio-{id}','PortfolioController@update')->name('portfolio.update');
Route::delete('/delete-portfolio-{id}','PortfolioController@delete')->name('portfolio.delete');

// Categories
Route::get('/categories','CategoryController@index')->name('categories');
Route::get('/category-create','CategoryController@create')->name('categories.create');
Route::post('/category-store','CategoryController@store')->name('categories.store');
Route::get('/category-edit-{id}','CategoryController@edit')->name('categories.edit');
Route::post('/category-update-{id}','CategoryController@update')->name('categories.update');
Route::delete('/category-delete-{id}','CategoryController@delete')->name('categories.delete');



// sections pages
Route::get('/sections','SectionPagesController@index')->name('sections');
Route::post('/sections-update-{id}','SectionPagesController@update')->name('sections.update');

// home 
Route::get('/home','HomeCmsController@index')->name('homeCms');
Route::post('/home-update-{id}','HomeCmsController@update')->name('homeCms.update');

// about
Route::get('/about','AboutController@index')->name('about');
Route::post('/about-update-{id}','AboutController@update')->name('about.update');

// settings
Route::get('/settings','AdminController@settings')->name('settings');
Route::post('/settings-update-{id}','AdminController@update')->name('settings.update');

// seo
Route::get('/seo-page','AdminController@index')->name('seo');
Route::post('/seo-page-update-{id}','AdminController@update_seo')->name('seo.update');

Route::get('/', [
    'as' => 'home_path',
    'uses' => 'PagesController@home'
]);
Auth::routes();
Auth::routes(['register' => false]);
//Contact us Page
Route::post('/', [
    'as' => 'home_path',
    'uses' => 'PagesController@getFormContactUs'
]);


