<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function getIndex()
    {
        return view('welcome');
    }

    /**
     * Show the application Homepage
     *
     * @return \Illuminate\View\View
     */
    public function home()
    {
        return view('welcome');
    }
}
