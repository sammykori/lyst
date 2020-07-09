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
    return view('welcome');
});

Auth::routes(['register'=> false]);
Route::get('home/export', 'HomeController@export');
Route::get('dealers/export', 'DealersController@export');
Route::get('bwa/export', 'BwaController@export');
Route::get('cellular/export', 'CellularController@export');
Route::get('fixed/export', 'FixedController@export');
Route::get('umts/export', 'UmtsController@export');
Route::get('igl/export', 'IglController@export');
Route::get('terrest/export', 'TerrestController@export');
Route::get('virtual/export', 'VirtualController@export');
Route::get('iwcl/export', 'IwclController@export');
Route::get('infras/export', 'InfrasController@export');
Route::get('ich/export', 'IchController@export');
Route::get('vas/export', 'VasController@export');
Route::get('submarine/export', 'SubmarineController@export');

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('dealers', 'DealersController');
Route::resource('fixed', 'FixedController');
Route::resource('cellular', 'CellularController');
Route::resource('umts', 'UmtsController');
Route::resource('bwa', 'BwaController');
Route::resource('igl', 'IglController');
Route::resource('terrest', 'TerrestController');
Route::resource('virtual', 'VirtualController');
Route::resource('iwcl', 'IwclController');
Route::resource('submarine', 'SubmarineController');
Route::resource('infras', 'InfrasController');
Route::resource('ich', 'IchController');
Route::resource('vas', 'VasController');


Route::post('dealers/revoke','DealersController@revoke')->name('dealers.revoke');
Route::post('fixed/revoke','FixedController@revoke')->name('dealers.revoke');

//excel exports


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

