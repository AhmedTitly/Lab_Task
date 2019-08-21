<?php


Route::get('/', 'WelcomeController@index')->name('welcome.index');

Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify')->name('login.verify');

Route::get('/registration', 'RegistrationController@index')->name('registration.index');
Route::post('/registration', 'RegistrationController@store');

Route::get('/logout', 'LogoutController@index')->name('logout.index');

Route::group(['middleware' => 'usersession'], function () {

Route::get('/adminHome/profile', 'AdminController@profile')->name('admin.profile');
Route::post('/adminHome/profile', 'AdminController@updateProfile');	

Route::get('/adminHome', 'AdminController@index')->name('admin.index');
Route::get('/adminHome/userList', 'AdminController@userList')->name('admin.userList');

Route::get('/adminHome/create', 'AdminController@create')->name('admin.create');
Route::post('/adminHome/create', 'AdminController@store');

Route::get('/adminHome/userList/edit/{id}', 'AdminController@edit')->name('admin.edit');
Route::post('/adminHome/userList/edit/{id}', 'AdminController@update');

Route::get('/adminHome/userList/delete/{id}', 'AdminController@delete')->name('admin.delete');
Route::post('/adminHome/userList/delete/{id}', 'AdminController@destroy');

Route::get('/employerHome', 'EmployerController@index')->name('employer.index');

Route::get('/employerHome/profile', 'EmployerController@profile')->name('employer.profile');
Route::post('/employerHome/profile', 'EmployerController@updateProfile');	


Route::get('/employerHome/createPlace', 'EmployerController@createPlace')->name('employer.createPlace');
Route::post('/employerHome/createPlace', 'EmployerController@storePlace');

Route::get('/employerHome/placeList', 'EmployerController@placeList')->name('employer.placeList');

Route::get('/employerHome/placeList/productEdit/{id}', 'EmployerController@placeEdit')->name('employer.productEdit');
Route::post('/employerHome/placeList/productEdit/{id}', 'EmployerController@placeUpdate');

Route::get('/employerHome/placeList/productDelete/{id}', 'EmployerController@placeDelete')->name('employer.placeDelete');

Route::get('/userHome', 'UserController@index')->name('user.index');

Route::get('/search','SearchController@index')->name('search.index');
	Route::get('/searchValue','SearchController@search');



 });