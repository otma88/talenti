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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');
Route::get('/talenti', 'TalentiController@index')->name('talenti');
Route::get('/clanstvo', 'ClanstvoController@index')->name('clanstvo');
Route::get('/novosti', 'NovostiController@index')->name('novosti');
Route::get('/audicije-i-poslovi', 'PosloviController@index')->name('audicije-i-poslovi');
Route::get('/talenti/{id}', 'TalentiController@show')->name('talent');


Route::prefix('admin')->group(function() {
  Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
  Route::get('/', 'AdminController@index')->name('admin.dashboard');
  Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
});
//Route::resource('/admin/users', 'AdminUsersController');
