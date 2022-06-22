<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function login()
    {
        return view('frontend.homes');
    }

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

    public function loginAdminUser(Request $request)
    {
         
        $email =  strip_tags(trim($request->emails), '@') ;

        $password = $request->passwords;

        $check  =   DB::table('users')->where('email', $email)->first();

        if(!empty($check)){

            $data = [
                'email' => $email,
                'password' => $password,
            ];

            if (Auth::attempt($data)) {

                if(!empty($request->index)){

                    return redirect()->back();

                }
                else{
                    // return redirect(route('user-dashboard'));
                    echo "Đăng nhập thành công";
                }

            } else {
                
                return redirect()->back()->with('error', 'Đăng nhập thất bại xin kiểm tra mật khẩu');
            }

        }
        else{
            return redirect()->back()->with('error', 'Sai email hoặc sai mật khẩu, vui lòng kiểm tra lại');
        }

    }
}
