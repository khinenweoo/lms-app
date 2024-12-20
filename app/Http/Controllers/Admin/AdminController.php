<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function check(Request $request){
        $request->validate([
            'email' => 'required|email|exists:admins,email',
            'password' => 'required|min:8|max:30',
        ],[
            'email.exists'=>'This email is not exists on admins record'
        ]);

        $creds = $request->only('email', 'password');

        if(Auth::guard('admin')->attempt($creds)) {
            return redirect()->route('admin.dashboard');
        }else {
            return redirect()->route('admin.login')->with('fail', 'Incorrect credentials');
        }
    }

    function logout() {
        Auth::guard('admin')->logout();
        return redirect('/');
    }
}
