<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function show() {
        return view('register');
    }

    public function registerUser(Request $request) {
        // $request->validate([
        //     'email' => 'required|email|ends_with:@gmail.com',
        //     'username' => 'required|min:5|max:50',
        //     'password' => 'required|min:5|max:255|confirmed',
        //     'password_confirmation' => 'required'
        // ]);
        
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|ends_with:@gmail.com',
            'username' => 'required|min:5|max:50',
            'password' => 'required|min:5|max:255|confirmed',
            'password_confirmation' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('register')->withErrors($validator)->withInput();
        }
    }
}
