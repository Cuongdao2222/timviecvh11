<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\application;

class userController extends Controller
{
    public function register()
    {
       return view('frontend.registerClientUser');
    }

    public function dashBoard()
    {
        
        return view('frontend.user-dashboard');
    }

    public function myProFile()
    {
        return view('frontend.list-board');
    }

    public function workSave()
    {
         return view('frontend.work-save');
    }

    public function workApply()
    {
         return view('frontend.work-apply');
    }

    public function notification()
    {
        return view('frontend.notification');
    }

    public function registerUser()
    {
        return view('frontend.registerClientUser');
    }

    public function viewCv($id)
    {
        $data_cv = application::findOrFail($id);

        return view('user.cv', compact('data_cv'));
    }

    public function upload_cv_pdf(Request $request)
    {

        $validatedData = $request->validate([
            'file' => 'required|max:4096|mimes:pdf,png'
            
        ]);
        

        $name = $request->file('file')->getClientOriginalName();

         $path = $reques->file('file')->storeAs('files', $name, 'public');


        // $path = $request->file('file')->store('public/files');


        // $save = new File;

        // $save->name = $name;
        // $save->path = $path;
    }


    
     // Route::get('/my-profile', function () {
    //     return view('frontend.list-board');
    // })->name('my-profile');

    // Route::get('/work-save', function () {
    //     return view('frontend.work-save');
    // })->name('work-save');

    // Route::get('/work-apply', function () {
    //     return view('frontend.work-apply');
    // })->name('work-apply');

    // Route::get('/notification-user', function () {
    //     return view('frontend.notification');
    // })->name('notification-user');



}
