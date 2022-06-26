<?php

Route::get('login', 'adminController@login')->name('admin login'); 

Route::post('post-login', 'adminController@loginAdminUser')->name('post-login-admin');

Route::get('register', 'adminController@regiterView')->name('admin-view-register'); 

Route::post('post-register', 'adminController@registerUser')->name('post-register-admin');

Route::group(['middleware' => 'checkad'], function() {

	Route::get('list-user', 'adminController@index')->name('list-user'); 

	
	Route::get('Listboard', 'adminController@Listboard')->name('admin-view-Listboard'); 

	Route::get('employerlistboard', 'adminController@ListEmployer')->name('admin-list-employer'); 

});

Route::get('logout', 'adminController@logout')->name('admin-logout');


