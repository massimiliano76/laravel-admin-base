<?php

namespace ByteNet\LaravelAdminBase\app\Http\Controllers;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('bytenet.auth');
    }

    /**
     * Show the admin dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        $title = trans('bytenet-admin-base::base.dashboard'); // set the page title

        return view('bytenet-admin-base::dashboard', compact('title'));
    }
}
