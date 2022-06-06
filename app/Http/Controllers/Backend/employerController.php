<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\employer_register;

class employerController extends Controller
{
    public function registerEmployer(Request $request)
    {
        $input = $request->all();
        $employer_register = new employer_register();
        $employer_register->create($input);
        echo "thành công";


    }
}
