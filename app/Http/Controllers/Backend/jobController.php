<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\job;

class jobController extends Controller
{
    public function jobDetails($link, $id)
    {

        $findID = job::findOrFail($id);

        $data = job::find($findID->id);

        $meta =  $data->title;

        return view('frontend.job_details', compact('data', 'meta'));
    }
}
