<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function getlogin(){
        return view('auth.login');
    }
    public function postlogin(Request $request){
        // dd($request->all());
        $rules=[
            'email'=>'required|email',
            'password'=>'required'
        ];
        $messages=[
            'email.required'=>'Bạn cần nhập email',
            'email.email'=>'Bạn cần nhập đúng định dạng email',
            'password.required'=>'Bạn cần nhập mật khẩu'

        ];
        $validator=Validator::make($request->all(),$rules,$messages);
        if($validator->fails()){
            return redirect('login')->withErrors($validator);
        }else{
            $email = $request->input('email');
            $password = $request->input('password');
            if(Auth::attempt(['email'=>$email,'password'=>$password])){
                return redirect('admin/users');
            }else{
                Session::flash('error','Email hoặc mật khẩu không đúng');
                redirect('login');
            }
           }
    }
    public function getlogout(){
        Auth::logout();
       return redirect('login');
    }
}
