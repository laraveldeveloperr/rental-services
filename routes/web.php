<?php

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Auth::routes();

/*
|------------------------------------------------------------------------------------
| Admin
|------------------------------------------------------------------------------------
*/
Route::group(['prefix' => ADMIN, 'as' => ADMIN . '.', 'middleware'=>['auth', 'Role:10']], function () {
    Route::get('/', 'DashboardController@index')->name('dash');
    
    Route::get('/{shortened}/set-locale', 'DashboardController@set_locale')->name('set-locale');
    
    Route::resource('users', 'UserController');
    Route::resource('brands', 'BrandsController');
    Route::resource('models', 'ModelsController');
    Route::resource('ban-types', 'BanTypesController');
    Route::resource('fuels', 'FuelsController');
    Route::resource('gears', 'GearsController');
    Route::resource('transmissions', 'TransmissionsController');
    Route::resource('engines', 'EnginesController');
    Route::resource('properties', 'PropertiesController');
    Route::resource('colors', 'ColorsController');
    Route::resource('cars', 'CarsController');
    Route::resource('discounts', 'DiscountsController');
    Route::resource('brons', 'BronsController');
    Route::resource('blogs', 'BlogsController');
    Route::resource('faqs', 'SiteFaqsController');
    Route::resource('car-faqs', 'CarsFaqsController');
    Route::resource('site-comments', 'SiteCommentsController');
    Route::resource('car-comments', 'CarCommentsController');
    Route::resource('messages', 'MessagesController');
    Route::get('sent-messages', 'MessagesController@sent')->name('sent-messages');
    Route::get('starred-messages', 'MessagesController@starred')->name('starred-messages');
    Route::get('draft-messages', 'MessagesController@draft')->name('draft-messages');
    Route::get('deleted-messages', 'MessagesController@deleted')->name('deleted-messages');
    Route::get('messages/update-info/{message_id}/{fill_type}', 'MessagesController@update_info')->name('update-messages');
    Route::post('messages/mark-as-read', 'MessagesController@mark_as_read')->name('messages.mark-as-read');
    Route::post('messages/mark-as-unread', 'MessagesController@mark_as_unread')->name('messages.mark-as-unread');
    Route::post('messages/restore-selected', 'MessagesController@restore_selected')->name('messages.restore-selected');
    Route::post('messages/delete-selected', 'MessagesController@delete_selected')->name('messages.delete-selected');
    Route::post('messages/destroy-selected', 'MessagesController@destroy_selected')->name('messages.destroy-selected');
    
    Route::get('brons/{bron_id}/invoice', 'BronsController@invoice_download');
    //get models by brand id'
    Route::get('models-by-brand-id/{brand_id}', 'ModelsController@getModelsByBrand');
    //get cars by model id'
    Route::get('cars-by-model-id/{model_id}', 'CarsController@getCarssByModel');
    //change bron status
    Route::post('change-bron-status', 'BronsController@changeStatus');

    Route::group(['prefix'=>'settings'], function(){
        Route::resource('languages', 'LanguagesController');
        Route::get('languages/{lang_id}/translations', 'LanguagesController@show')->name('get-translations');
        Route::get('general-settings', 'GeneralSettingsController@index')->name('general-settings.index');
        Route::post('general-settings/store', 'GeneralSettingsController@store')->name('general-settings.store');
    });
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('/user/login',function(){
    return "User Login Page";
});
