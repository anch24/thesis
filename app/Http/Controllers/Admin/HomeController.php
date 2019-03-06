<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    protected $redirectTo = '/admin/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin.auth:admin');
    }

    /**
     * Show the Admin dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('admin.home');
    }

    public function course() {
        return view('admin.course');
    }

    public function class() {
        return view('admin.class');
    }

    public function students() {
        return view('admin.students');
    }

    public function staff() {
        return view('admin.staff');
    }

    public function instructor() {
        return view('admin.instructor');
    }

    public function chairperson() {
        return view('admin.chairperson');
    }
    
    public function profile() {
        return view('admin.profile');
    }

}