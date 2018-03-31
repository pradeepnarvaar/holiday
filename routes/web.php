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

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/user', function () {
    return view('admin.users.user');
});
Route::get('/shoping', function () {
    return view('admin.shoping');
});
Route::get('/product', function () {
    return view('admin.products.product');
});
Route::get('/membership', function () {
    return view('admin.membership.usermember');
});

Route::get('/add', function () {
    return view('admin.add');
});
Route::get('/booking', function () {
    return view('admin.book_details.booking');
});

//Route::group(['middleware'=>'auth'], function(){
   // Route::get('dashboard', array('as'=>'dashboard', 'uses'=>'DashboardController@getDashboard'));
//});
//Route::get('dashboard', array('as'=>'dashboard', 'uses'=>'DashboardController@getDashboard'));

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
