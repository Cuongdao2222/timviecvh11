<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\employ_info;

use DB;

class employerController extends Controller
{
    protected function employDetails($link)
    {
        $findID = employ_info::where('links', $link)->first();

        if(empty($findID)){
            return abort('404');
        }
        $id_employ = $findID->id;



        $data = DB::table('job')->join('employ_info', 'employ_info.employ_id', '=', 'job.employer_id')->where('employ_info.id', $id_employ)->select('job.id','job.title', 'job.salary', 'job.link', 'employ_info.name', 'employ_info.links')->get();
       

        return view('frontend.employ-detail-job', compact('data', 'findID'));
    }
}
