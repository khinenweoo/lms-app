<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function create(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|max:30',
            'password_confirmation' => 'required|min:8|max:30|same:password'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = \Hash::make($request->password);
        $save = $user->save();

        if($save){
            return redirect()->route('user.login')->with('success', 'You are signed up successfully');
        }else {
            return redirect()->back()->with('fail', 'Something went wrong, fail to sign up.');
        }
    }

    function check(Request $request){
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:8|max:30',
        ],[
            'email.exists'=>'This email is not exists on users database'
        ]);

        $creds = $request->only('email', 'password');

        if(Auth::guard('web')->attempt($creds)) {
            return redirect()->route('user.home');
        }else {
            return redirect()->route('user.login')->with('fail', 'Incorrect credentials');
        }
    }

    function logout() {
        Auth::guard('web')->logout();
        return redirect('/');
    }
}
