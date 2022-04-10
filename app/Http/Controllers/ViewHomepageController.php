<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewHomepageController extends Controller
{
    /**
     * Show the application Homepage
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('welcome');
    }
}