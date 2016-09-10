<?php

namespace ByteNet\LaravelAdminBase\app\Http\Controllers;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    protected $data = []; // the information we send to the view

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
        $this->data['title'] = trans('bytenet::base.dashboard'); // set the page title

        return view('bytenet::dashboard', $this->data);
    }
}
