<?php

use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;


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
    Alert::success('Success Title', 'Success Message');
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('dealers', 'DealersController');
Route::resource('fixed', 'FixedController');


Route::post('dealers/revoke','DealersController@revoke')->name('dealers.revoke');
Route::post('fixed/revoke','FixedController@revoke')->name('dealers.revoke');

Route::prefix('admin')->group(function(){
    Route::get('/login', 'Auth\AdminLoginController@showLogin')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/users', 'AdminController@usersIndex');
    Route::delete('/users/delete/{id}', 'AdminController@usersDelete');
    Route::post('/users/store', 'AdminController@usersStore');
    Route::get('/services', 'AdminController@serviceIndex');
    Route::delete('/services/delete/{id}', 'AdminController@serviceDelete');
    Route::post('/services/store', 'AdminController@serviceStore');

});

