<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    protected $redirectTo = '/staff/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('staff.auth:staff');
    }

    /**
     * Show the Staff dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('staff.sample');
    }

    public function profile() {
        return view('staff.profile');
    }

    public function students() {
        return view('staff.students');
    }

}