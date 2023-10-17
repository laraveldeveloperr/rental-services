<?php
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\BlogsController;
use App\Http\Controllers\Frontend\BronsController;
use App\Http\Controllers\Frontend\CarListingController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\GalleryController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\SearchController;
use App\Http\Controllers\Frontend\ServicesController;

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Auth::routes();

/*
|------------------------------------------------------------------------------------
| Admin
|------------------------------------------------------------------------------------
*/
    Route::group(['prefix' => ADMIN, 'as' => ADMIN . '.', 'middleware'=>['auth', 'User_role:10']], function () {
        Route::get('/', 'DashboardController@index')->name('dash');
        
        Route::get('/{shortened}/set-locale', 'DashboardController@set_locale')->name('set-locale');
        
        Route::resource('users', 'UserController');
        Route::resource('roles', 'RolesController');
        Route::post('roles/set-permission', 'RolesController@set_permission')->name('roles.set-permission');

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
        Route::get('car-gallery/{car_id}', 'CarsGalleryController@index')->name('car-gallery');
        Route::post('gallery-upload', 'CarsGalleryController@upload')->name('gallery-upload');
        Route::any('gallery-delete/{imageId}', 'CarsGalleryController@destroy')->name('gallery-delete');

        Route::resource('discounts', 'DiscountsController');
        Route::resource('brons', 'BronsController');
        Route::resource('blogs', 'BlogsController');
        Route::resource('call-requests', 'CallRequestsController');
        Route::resource('services', 'ServicesController');
        
        Route::resource('faqs', 'SiteFaqsController');
        Route::resource('car-faqs', 'CarsFaqsController');
        Route::resource('site-comments', 'SiteCommentsController');
        Route::resource('car-comments', 'CarCommentsController');
        
        //messages
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
            Route::resource('slides', 'SlidesController');
            Route::resource('languages', 'LanguagesController');
            Route::get('languages/{shortened}/translations', 'LanguagesController@show')->name('get-translations');
            Route::post('update-translations', 'LanguagesController@update_translations')->name('update-translations');
            Route::get('general-settings', 'GeneralSettingsController@index')->name('general-settings.index');
            Route::get('page-design', 'PageDesignController@index')->name('page-design.index');
            Route::put('page-design/{id}/update', 'PageDesignController@update')->name('page-design.update');
            Route::post('general-settings/store', 'GeneralSettingsController@store')->name('general-settings.store');
        });
    });

    Route::middleware(['setLanguage'])->group(function () {

    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/change-lang/{lang}', [HomeController::class, 'change_lang'])->name('change-lang');

    Route::get('car-listing', [CarListingController::class, 'index'])->name('car-listing');
    Route::get('{id}/car-details', [CarListingController::class, 'car_details'])->name('car-details');

    Route::post('/search', [SearchController::class, 'search'])->name('search');

    Route::get('services', [ServicesController::class, 'index'])->name('services');
    Route::get('service-details/{slug}', [ServicesController::class, 'show'])->name('services.show');
    Route::get('about', [AboutController::class, 'index'])->name('about');
    Route::get('privacy-policy', [AboutController::class, 'privacy_policy'])->name('privacy-policy');
    Route::get('gallery', [GalleryController::class, 'index'])->name('gallery');
    Route::get('blogs', [BlogsController::class, 'index'])->name('blogs');
    Route::get('blog-details/{slug}', [BlogsController::class, 'show'])->name('blogs.show');
    Route::post('request-a-call', [HomeController::class, 'call_request'])->name('request-a-call');

    Route::get('contact', [ContactController::class, 'index'])->name('contact');

    Route::get('models-by-brand-id/{brand_id}', 'ModelsController@getModelsByBrand');

    Route::post('reserve', [BronsController::class, 'reserve'])->name('reserve');

    Route::get('/user/login',function(){
        return "User Login Page";
    });
});
