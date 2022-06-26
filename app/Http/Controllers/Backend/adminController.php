<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\admin;
use App\User;
use App\Models\job;

use App\Models\employ_info;

use App\Models\apply_job;
use DB;
use Auth;
use App\Models\application;

class adminController extends Controller
{
    public function login()
    {
         if(Auth::guard('admin')->check()){
            return view('admin.listUv');

        }
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

     public function ListEmployer()
    {
        return view('admin.employer_list');
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
       
        return redirect(route('admin login'))->with('success', 'Đăng ký thành công');

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

    public function logout()
    {
        Auth::guard('admin')->logout();
        
        return redirect(route('admin login'));
    }

    public function remove_user(Request $request)
    {
        $id = $request->id;
        $user = User::find($id);
        $user->delete();

    }

    public function viewCv($id)
    {
        $data_cv = application::findOrFail($id);

        $email = (User::find($id))->email;

        return view('user.cv', compact('data_cv','email'));
    }

    public function showJob(Request $request)
    {
        $id = $request->id;
        $job = job::where('employer_id', $id)->get();
        return view('ajax.job_employ', compact('job'));



    }

    public function showApplyJob(Request $request)
    {
        $id = $request->id;
        $job_id = job::where('employer_id', $id)->get()->pluck('id')->toArray();

        $apply_job = apply_job::whereIn('job_id', $job_id)->get();
        return view('ajax.job_employ', compact('apply_job'));



    }

    public function removeEmploy($id)
    {
        $employ = employ_info::findOrFail($id);
        $delete = $employ->delete();
        return redirect()->back();
    }    
}
