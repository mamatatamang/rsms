<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function addUser(Request $request)
    {
        $validator = $this->validate($request, [

            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|unique:users|email|max:25',
            'contact' => 'required|max:10|min:6',
            'tempaddress' => 'required',
            'permaddress' => 'required',
            'username' => 'required|unique:users|max:20',
            'password' => 'required|max:15|min:6',
            'c_password' => 'required|same:password',
        ]);

        User::create([
            'fname' => $request->input('fname'),
            'lname' => $request->input('lname'),
            'email' => $request->input('email'),
            'contact' => $request->input('contact'),
            'tempaddress' => $request->input('tempaddress'),
            'permaddress' => $request->input('permaddress'),
            'role' => $request->input('role'),
            'username' => $request->input('username'),
            'password' => bcrypt($request->input('password')),
        ]);

        return redirect()->route('register')->with('info', 'Account successfully created');

    }

    // public function loginUser(Request $request)
    // {
    //     $validator = $this->validate($request, [

    //         'username' => 'required',
    //         // 'password' => 'readdir()quired',
    //     ]);
    //     $username = $request->input('username');
    //     $password = bcrypt($request->input('password'));
    //     // dd($password);
    //     $authentication = Auth::attempt([
    //         'username' => $username,
    //         'password' => $password,
    //     ]);

    //     dd($authentication);
    // }

    public function loginUser(Request $request)
    {
        if (!Auth::attempt($request->only(['username', 'password']))) {
            return 'login failed';
        }
        $role = $row = User::where('username', '=', $request->input('username'))->get();
        foreach ($role as $roles) {
            $user_role = $roles['role'];
        }

        if ($user_role == 'admin') {
            return 'Hello Admin';
        } elseif ($user_role == 'staff') {
            return 'Hello staff';
        } else {
            return 'Hello Manager';

        }

    }
}
