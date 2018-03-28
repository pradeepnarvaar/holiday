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

Route::get('/', function () {
    return view('admin.login');
});
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