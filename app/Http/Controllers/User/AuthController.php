<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  Request  $request
     * @return view
     */
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

    /**
     * Check user to authenticate
     *
     * @param  Request  $request
     * @return view
     */
    function check(Request $request){
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:8|max:30',
        ],[
            'email.exists'=>'This email is not exists on users database'
        ]);

        $creds = $request->only('email', 'password');
        $authSuccess = Auth::guard('web')->attempt($creds, $request->has('remember'));

        if($authSuccess) {
            return redirect()->route('user.home');
        }else {
            return redirect()->route('user.login')->with('fail', 'Login failed. Account not found.');
        }
    }

    /**
     * Log the user out of the application.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\Response
     */
    function logout() {
        Auth::guard('web')->logout();
        return redirect('/');
    }
}
