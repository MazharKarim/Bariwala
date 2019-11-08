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
    return view('login');
});

Route::get('/admin', function () {
    return view('adminPanel');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/user', function () {
    $notice=DB::table('notices')->get();
    $users=DB::table('tenants')->get();
    return view('userPanel',compact('notice'),compact('users'));
});

Route::get('/user/profile', function () {
    return view('user.profile');
});

Route::get('/login', function () {
    return view('login');
});


Route::get('/unitDetails', 'adminController@unitDetails');
Route::get('/addUser', 'adminController@addUser');
Route::get('/memberList', 'adminController@memberList');
Route::get('/bills', 'adminController@bills');
Route::get('/payment', 'adminController@payment');
Route::get('/complains', 'adminController@complains');
Route::get('/notice', 'adminController@notice');
Route::get('/helpLine', 'adminController@helpLine');


Route::get('/user/bills', 'userController@bills');
Route::get('/user/payment', 'userController@payment');
Route::get('/user/complains', 'userController@complains');
Route::get('/user/notice', 'userController@notice');
Route::get('/user/helpLine', 'userController@helpLine');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::post('/storeUser', 'dataController@storeUser')->name('storeUser');
Route::post('/createNotice', 'dataController@createNotice')->name('createNotice');
Route::post('/createComplain', 'dataController@createComplain')->name('createComplain');
