<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function login_proses(Request $request)
    {
        // Validasi input
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Log request masuk
        Log::info('Login attempt', ['username' => $request->username]);

        // Cek kredensial login
        $credentials = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        // Proses autentikasi
        if (Auth::attempt($credentials)) {
            // Jika login berhasil, log keberhasilan dan redirect ke dashboard
            Log::info('Login successful', ['username' => $request->username]);
            return redirect()->intended('dashboard');
        } else {
            // Jika login gagal, log kegagalan dan redirect ke halaman login dengan pesan error
            Log::warning('Login failed', ['username' => $request->username]);
            return redirect()->route('login')->with('failed', 'Username atau Password salah');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('succes', 'Kamu Berhasil Logout');
    }
}
