<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use DB;

class indexController extends Controller
{
    public function Home()
    {
        $job= DB::table('employer_registers')->join('job', 'employer_registers.id', '=', 'job.employer_id')->join('employ_info', 'employer_registers.id', '=', 'employ_info.employ_id')->paginate(8);

        return view('frontend.index_list_job', compact('job'));
    }
    
}
