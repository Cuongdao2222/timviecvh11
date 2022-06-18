<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\job; 

class employerInfoController extends Controller
{
    public function index()
    {
        $id = Auth::guard('employer_register')->user()->id;
        $job = job::where('employer_id', $id)->get();

        return view('frontend.jobs_employ_list',compact('job'));
    }
}
