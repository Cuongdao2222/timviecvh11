<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\job;

use DB;





class filterController extends Controller
{
    public function filter(Request $request)
    {

        $datas = trim($request->keyword);

        $job = DB::table('employer_registers')->join('job', 'employer_registers.id', '=', 'job.employer_id')->join('employ_info', 'employer_registers.id', '=', 'employ_info.employ_id')->where('job.title','LIKE', '%'. $datas .'%')->OrWhere('employ_info.name', 'LIKE', '%' . $datas . '%')->get();

        return view('frontend.filter', compact('job'));


    }
}
