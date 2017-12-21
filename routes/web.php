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
    return redirect('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/changePassword','HomeController@showChangePasswordForm');
Route::post('changepassword','HomeController@changepassword');
Route::post('article/{id}','ArticleController@uploadImages');
Route::resource('role','RoleController');
Route::resource('user','UserController');
Route::resource('article','ArticleController');
Route::get('contactus','ContactusController@create');
Route::post('contactus/store','ContactusController@store');
