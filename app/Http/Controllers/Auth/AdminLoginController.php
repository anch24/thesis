<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
   	
   	public function __construct() {
		$this->middleware('guest:admin');
	}

	public function username() {
		return 'username'
	}

    public function showLoginForm() {
    	return view('admin.login');
    }

    public function login(Request $request) {
    	//Validate the form data
    	$this->validate($request, [
    		'username' => 'required|email|unique:accounts_admins',
    		'password' => 'required|min:6'
    	]);

    	//Attempt to log the user in
    	if (Auth::guard('admin')->attempt(['email' => $request->username, 'password' => $request->password], $request->remember)) {
    		//If the successful, then redirect to their intended location
    		return redirect()->intended(route('admin.dashboard'));
    	}

    	//If unsuccessful, then redirect back to the login with the form data
    	return redirect()->back()->withInput($request->only('email', 'remember'));
    }
}
