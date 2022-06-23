<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\admin;
use App\User;
use DB;
use Auth;

class adminController extends Controller
{
    public function login()
    {
        return view('frontend.homes');
    }

    public function regiterView()
    {
        return view('admin.register');
    }

    public function Listboard()
    {
        return view('admin.listUv');
    }

    public function registerUser(Request $request)
    {
        $input = $request->All();

        $user = new admin();

        if(!empty($input['password'])){
           $input['password'] =  bcrypt($input['password']);
        }
        $user->name = $input['name'];
        $user->email = $input['email'];
        $user->password = $input['password'];
        $user->save();
       
        return redirect()->back()->with('success', 'Đăng ký thành công');

    }

    public function loginAdminUser(Request $request)
    {

        $email =  strip_tags(trim($request->emails), '@') ;

        $password = $request->passwords;

        $check  =   DB::table('admins')->where('email', $email)->first();

        if(!empty($check)){
            $data = [
                'email' => $email,
                'password' => $password,
            ];

            if (Auth::guard('admin')->attempt($data)) {

                return redirect(route('admin-view-Listboard'));
                   
            } else {
                
                return redirect()->back()->with('error', 'Đăng nhập thất bại xin kiểm tra mật khẩu');
            }

        }
        else{
            return redirect()->back()->with('error', 'Sai email hoặc sai mật khẩu, vui lòng kiểm tra lại');
        }

    }

   
}
