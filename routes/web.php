<?php


Route::get('/', 'WelcomeController@index')->name('welcome.index');

Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify')->name('login.verify');

Route::get('/registration', 'RegistrationController@index')->name('registration.index');
Route::post('/registration', 'RegistrationController@store');

Route::get('/logout', 'LogoutController@index')->name('logout.index');


Route::get('/adminHome', 'AdminController@index')->name('admin.index');
Route::get('/adminHome/userList', 'AdminController@userList')->name('admin.userList');

Route::group(['middleware' => 'usersession'], function () {

});