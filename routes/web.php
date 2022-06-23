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


Route::get('/', 'indexController@Home')->name('home');

// Route::get('/job_details/{id}', 'Backend\employerController@index')->name('job_details'); 

 Route::get('/job-details/{link}','Backend\jobController@jobDetails')->name('job_details');



 Route::group(['prefix' => 'ajax'], function() {

    Route::get('saveJob', 'ajaxController@getSaveJob')->name('getSaveJob'); 

    Route::get('apply-job', 'ajaxController@saveApply_job')->name('apply-job'); 

});




Route::get('employers/register', 'Backend\employerController@index')->name('register_employer'); 

Route::get('employers_info', 'Backend\employerController@info_employer')->name('employers_info');

Route::get('/employers-info-list','Backend\employerInfoController@index')->name('employers-info-list');


Route::group(['prefix' => 'employer','middleware' => 'checklogin'], function() {



    Route::get('/apply', 'Backend\employerController@user_apply')->name('user_apply'); 


    Route::post('updateEmployer', 'Backend\employerController@updateEmployer')->name('updateEmployer');


    Route::get('/index','Backend\employerController@viewIndex')->name('index_employer');  

    Route::get('/form', function () {
        return view('frontend.form_recruit');
    })->name('form_recruit'); 

    Route::post('register-field', 'Backend\employerController@registerEmployer')->name('employer-register');

    Route::get('logout', 'Backend\employerController@logout')->name('employer-logout');

});

Route::get('user/user-dashboard', 'userController@dashBoard')->middleware('checklogin')->name('user-dashboard');

Route::post('user', 'Backend\UserLoginController@registerUser')->name('register');

Route::post('user/login', 'Backend\UserLoginController@loginUser')->name('login-user');

Route::post('user/profice/{action}', 'Backend\applicationController@updateApplication')->name('postProfile');

Route::post('employer/login', 'Backend\employerController@postLoginEmployer')->name('loginEmployer');

Route::post('employer/postJob', 'Backend\employerController@postJob')->name('postJob');




   









