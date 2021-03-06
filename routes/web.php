<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/home', 'HomeController@index');

Route::get('/contact', 'ContactController@index')->name('contact.index');
Route::post('/contact', 'ContactController@send')->name('contact.send');

Route::get('/download', 'ShopController@index')->name('shop.index');
Route::get('/order/{id}', 'ShopController@index')->name('shop.order');

Route::get('/services', 'ServicesController@index')->name('services.index');
Route::get('/support', 'SupportController@index')->name('support.index');

Route::get('/portal', 'PortalController@index')->name('portal.index');

Route::get('/payments', 'PaymentsController@index')->name('payments.index');

Route::get('/tickets', 'TicketsController@index')->name('tickets.index');
Route::get('/tickets/create', 'TicketsController@create')->name('tickets.create');
Route::get('/tickets/edit/{id}', 'PortalController@index')->name('tickets.edit');
Route::get('/tickets/close/{id}', 'PortalController@close')->name('tickets.close');
Route::get('/tickets/delete/{id}', 'PortalController@delete')->name('tickets.close');


Route::get('/settings', 'PortalController@index')->name('settings.index');
