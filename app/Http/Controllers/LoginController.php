<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function loginUser(Request $request)
    {
        $validator = [
            'email' => $request->email,
            'password' => $request->password
        ];



        if ($validator->fails()) {
            return redirect('login')->withErrors($validator)->withInput();
        }
    }
}