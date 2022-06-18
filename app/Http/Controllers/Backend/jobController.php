<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\job;

class jobController extends Controller
{
    public function jobDetails($link)
    {

        $findID = job::where('link', $link)->first();

        if(empty($findID)){
            abort('404');
        }

        $data = job::find($findID->id);
        return view('frontend.job_details', compact('data'));
    }
}
