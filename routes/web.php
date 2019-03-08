<?php

Route::get('/', function () {
    return redirect()->route('customers.index');
});

//Route::get('customers/search', 'CustomersController@index')->name('customers.search');
Route::resource('customers', 'CustomersController');
