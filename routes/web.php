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
    return view('frontend.homes');
})->name('home');




Route::group(['prefix' => 'user','middleware' => 'checklogin'], function() {

   
    Route::get('/register-client-user', function () {
        return view('frontend.registerClientUser');
    })->name('registerClientUser');


    Route::get('/user-dashboard', function () {
        return view('frontend.user-dashboard');
    })->name('user-dashboard');

    Route::get('/my-profile', function () {
        return view('frontend.list-board');
    })->name('my-profile');

    Route::get('/work-save', function () {
        return view('frontend.work-save');
    })->name('work-save');

    Route::get('/work-apply', function () {
        return view('frontend.work-apply');
    })->name('work-apply');

    Route::get('/notification-user', function () {
        return view('frontend.notification');
    })->name('notification-user');

});

Route::group(['prefix' => 'employer','middleware' => 'checklogin'], function() {

    Route::get('/register', function () {
        return view('frontend.employer-register');
    })->name('register_employer');  
    Route::post('register-field', 'Backend\employerController@registerEmployer')->name('employer-register');

});


Route::post('user', 'Backend\UserLoginController@registerUser')->name('register');

Route::post('user/login', 'Backend\UserLoginController@loginUser')->name('login');




