<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Instructor;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class InstructorController extends Controller
{
    function create(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:instructors,email',
            'password' => 'required|min:8|max:30',
            'password_confirmation' => 'required|min:8|max:30|same:password'
        ]);

        $instructor = new Instructor();
        $instructor->name = $request->name;
        $instructor->email = $request->email;
        $instructor->password = $request->password;//encrypt in model, not here
        $save = $instructor->save();

        if($save){
            return redirect()->route('instructor.login')->with('success', 'You are signed up successfully');
        }else {
            return redirect()->back()->with('fail', 'Something went wrong, fail to sign up.');
        }
    }

    function check(Request $request){
        $request->validate([
            'email' => 'required|email|exists:instructors,email',
            'password' => 'required|min:8|max:30',
        ],[
            'email.exists'=>'This email is not exists on instructor record'
        ]);

        $creds = $request->only('email', 'password');

        if(Auth::guard('instructor')->attempt($creds)) {
            return redirect()->route('instructor.dashboard');
        }else {
            return redirect()->route('instructor.login')->with('fail', 'Incorrect credentials');
        }
    }

    function logout() {
        Auth::guard('instructor')->logout();
        return redirect('/');
    }
    
}
