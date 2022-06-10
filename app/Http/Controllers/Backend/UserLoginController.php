<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\register;
use App\User;
use App\Models\application;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class UserLoginController extends Controller
{
    public function registerUser(Request $request)
    {
        $input = $request->All();

        $user = new User();

        if(!empty($input['password'])){
           $input['password'] =  bcrypt($input['password']);
        }
        $user->name = $input['name'];
        $user->email = $input['email'];
        $user->password = $input['password'];

        $user->save();
        $application = new application();
        $application->users_id =  $user->id;
        $application->save();

        return redirect()->back()->with('success', 'Đăng ký thành công');

    }


    public function loginUser(Request $request)
    {
         
       $email =  strip_tags(trim($request->emails), '@') ;

        $password = $request->passwords;

        $check  =   DB::table('user')->where('email', $email)->first();

        if(!empty($check)){

            $data = [
                'email' => $email,
                'password' => $password,
            ];

            if (Auth::attempt($data)) {

                return redirect(route('user-dashboard'));

            } else {
                
                return redirect()->back()->with('error', 'Đăng nhập thất bại xin kiểm tra mật khẩu');
            }

        }
        else{
            return redirect()->back()->with('error', 'Sai email hoặc sai mật khẩu, vui lòng kiểm tra lại');
        }


    }
}
