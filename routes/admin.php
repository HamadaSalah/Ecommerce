<?php

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ 
        Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function() {
            Config::set('auth.defines', 'admin'); 
            Route::get('/login','AdminAuth@login');
            Route::post('/dologin','AdminAuth@dologin')->name('dologin');
            Route::get('/logout','AdminAuth@logout');
            Route::get('/forget_pass', 'AdminAuth@forget_pass');
            Route::get('/index','AdminAuth@index');

            // End Before Go to MiddleWare
            Route::group([], function() {
                Route::resource('admin', 'AdminController');
                Route::get('admin/useronly', 'AdminController@useronly');
                Route::get('/index', 'AdminAuth@index');
                Route::get('/getdata', 'AdminController@getdata')->name('admin.getdata');
                Route::get('/settings', 'settingsController@edit')->name('admin.settings.edit');
                Route::post('/settings', 'settingsController@update')->name('admin.settings.update');
                Route::resource('admin', 'AdminController');
                Route::resource('country', 'CountriesController');
                Route::resource('city', 'CitiesController');
                Route::resource('state', 'StateController');
                Route::resource('department', 'DepartmentsController');
                Route::resource('trademark', 'TradeMarkController');
                Route::resource('manufact', 'ManufactsController');
                Route::resource('shippings', 'ShippingController');
                Route::resource('products', 'ProductsController');

            });
        });
        
    });
    






