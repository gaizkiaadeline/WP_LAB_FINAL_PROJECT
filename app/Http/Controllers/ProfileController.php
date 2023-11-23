<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('profile.index', ['user' => auth()->user()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // public function update(Request $request, $id)
    public function update(Request $request)
    {
        $user = Auth::user();

        $rules = [
            'username' => 'required|min:5|max:50',
            'email' => 'nullable|email|ends_with:@gmail.com',
            'phone' => 'nullable|digits:12',
            'address' => 'nullable|min:5',
            'current_password' => 'required|password',
            'new_password' => 'nullable|min:5|max:255',
            'confirm_password' => 'nullable|min:5|same:new_password',
            'profile_picture' => 'nullable|mimes:jpg,png,jpeg',
        ];

        $request->validate($rules);

        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->address = $request->input('address');

        // handle new password
        // if ($request->has('new_password')) {
        //     $user->password = bcrypt($request->input('new_password'));
        // }

        // if ($request->hasFile('profile_picture')) {
        //     $image = $request->file('profile_picture');
        //     $imageName = time() . '.' . $image->getClientOriginalExtension();
        //     $image->move(public_path('profile_pictures'), $imageName);
        //     $user->profile_picture = 'profile_pictures/' . $imageName;
        // }

        $user->save();

        return redirect()->route('profile')->with('success', 'Profile updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}