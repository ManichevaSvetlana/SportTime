<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;


class LoginAdminController extends Controller
{

	public function _construct(){
		$this->middleware('guest:admin', ['except' => 'logout']);
	}
	public function showLoginForm(){
		return view('admin.loginadmin');
	}
	public function login(Request $request){
		$this->validate($request,[
			'email'=>'required|email',
			'password'=>'required|min:6'
		]);

		if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password],$request->remember)){
			return redirect()->intended(route('admin'));
			$this->middleware('guest')->except('logout');
		}
		return redirect('admin/login')->withInput( $request->only('email', 'remember') );;
	}
	
}
