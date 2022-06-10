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

    Route::get('/register', 'Backend\employerController@index')->name('register_employer'); 



    Route::get('/index', function () {
        return view('frontend.index_employer');
    })->name('index_employer');  

     Route::get('/form', function () {
        return view('frontend.form_recruit');
    })->name('form_recruit'); 

    Route::post('register-field', 'Backend\employerController@registerEmployer')->name('employer-register');

    Route::get('logout', 'Backend\employerController@logout')->name('employer-logout');

});


Route::post('user', 'Backend\UserLoginController@registerUser')->name('register');

Route::post('user/login', 'Backend\UserLoginController@loginUser')->name('login');

Route::post('employer/login', 'Backend\employerController@postLoginEmployer')->name('loginEmployer');

Route::post('employer/postJob', 'Backend\employerController@postJob')->name('postJob');






