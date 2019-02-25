<?php

namespace App\Http\Controllers\Chairperson;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    protected $redirectTo = '/chairperson/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('chairperson.auth:chairperson');
    }

    /**
     * Show the Chairperson dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('chairperson.home');
    }

}