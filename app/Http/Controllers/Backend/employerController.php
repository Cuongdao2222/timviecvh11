<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\employer_register;
use App\Models\job; 
use Auth;
use Illuminate\Support\Facades\Validator;

class employerController extends Controller
{

    public function index()
    {
        if(!Auth::guard('employer_register')->check()){
            return view('frontend.employer-register');
        }
        else{
            return redirect(route('index_employer'));
        }  
    }

    public function viewIndex()
    {
        $id = Auth::guard('employer_register')->user()->id;
        $job = job::where('employer_id', $id)->get()->count();

        return view('frontend.index_employer', compact('job'));
    }

    public function logout()
    {
        Auth::guard('employer_register')->logout();
        
        return redirect(route('register_employer'));
    }
    public function registerEmployer(Request $request)
    {

         $messages = [
            'required' => 'Trường :attribute bắt buộc nhập.',
            'email'    => 'Trường :attribute phải có định dạng email',
            'unique'    => ':attribute đã tồn tại xin kiểm tra lại',
        ];
         $validator = Validator::make($request->all(), [
            'email' => 'required|unique:employer_registers',
           
        ], $messages);

      
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }
       

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

             return redirect(route('index_employer'));
      
            //..code tùy chọn
            //đăng nhập thành công thì hiển thị thông báo đăng nhập thành công
        } else {

            return redirect()->back()->with('success', 'tài khoản hoặc mặt khẩu chưa chính xác'); 
            //...code tùy chọn
            //đăng nhập thất bại hiển thị đăng nhập thất bại
        }
    }

    public function postJob(Request $request)
    {
        
        $input['title'] = $request->job_title;
        $input['code']  =  $request->job_code;
        $input['detail']  =  $request->job_desc;
        $input['requirements'] = $request->job_req;
        $input['career'] = [$request->INDUSTRY_ID][0][0];
        $input['address'] = [$request->LOCATION_ID][0][0];
        $input['salary'] = $request->salary_from.' '.$request->job_salaryunit.'-'.$request->salary_to;
        $input['deadline'] = $request->JOB_LASTDATE; 
        $input['employer_id'] = Auth::guard('employer_register')->id();
        $job = new job();
        $job->create($input);

        return redirect(route('index_employer'));
       
            
    }
}
