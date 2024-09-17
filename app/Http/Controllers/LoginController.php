<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function login_proses(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $data = [
            'username' => $request->username,
            'password' => $request->password
        ];
        if (Auth::attempt($data)) {
            return redirect()->route('');
        } else {
            return redirect()->route('login')->with('failed', 'Email atau Password Salah');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('succes', 'Kamu Berhasil Logout');
    }
}
