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




GET /customers

GET /customers/create

POST /customers

GET /customers/{id}/edit

GET /customers/{id}

PATCH /customers/{id}

DELETE /customers/{id}

*/

Route::get('/', 'CustomersController@dashboard')->name('dashboard');

Route::get('/customers', 'CustomersController@index')->name('show');

Route::get('/customers/create', 'CustomersController@create')->name('create');

Route::post('/customers', 'CustomersController@store');