<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\employer_register;
use Auth;

class employerController extends Controller
{
    public function registerEmployer(Request $request)
    {
        $input = $request->all();
        $employer_register = new employer_register();

        if(!empty($input['password'])){

            $input['password'] = bcrypt($input['password']);

        }
        $employer_register->create($input);

        return redirect()->back()->with('success', 'Bạn đã đăng ký thành công vui lòng đăng nhập'); 
      

    }

    public function postLoginEmployer(Request $request)
    {
        $arr = [
            'email' => $request->email,
            'password' => $request->password,
        ];


         if (Auth::guard('employer_register')->attempt($arr)) {

             return redirect()->back()->with('success', 'bạn đã đăng nhập thành công
                '); 
      
            //..code tùy chọn
            //đăng nhập thành công thì hiển thị thông báo đăng nhập thành công
        } else {

            return redirect()->back()->with('success', 'tài khoản hoặc mặt khẩu chưa chính xác'); 
            //...code tùy chọn
            //đăng nhập thất bại hiển thị đăng nhập thất bại
        }
    }
}
