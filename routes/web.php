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
Route::group(['middleware' => 'web'], function () {
    // Frontend
    Route::auth();

   Route::get('/home', 'HomeController@index');

    Route::resource('posts', 'PostController');

    //Backend
    // Controllers Within The "App\Http\Controllers\Admin" Namespace
    // Matches The "/admin/ControllerName" URL
    Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'adminProtect'], function()
    {
        Route::get('booking', 'BookingController@index');
    });
});


Route::get('/role','RolesController@index')->name('index');
Route::get('/member','MembersController@index')->name('index');
Route::get('/location','LocationsController@index')->name('index');

Route::get('/adminuser','AdminController@index')->name('index');
Route::get('/adminuser/add-admin','AdminController@create')->name('create');
Route::get('/adminuser/edit-admin/{id}','AdminController@edit')->name('edit');

Route::get('/payment','PaymentController@index')->name('index');
Route::get('/holiday-request-get-all-details','HolidayController@index')->name('index');

Route::get('/voucher','VoucherController@index')->name('index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/chatting', 'ChatController@index')->name('index');
