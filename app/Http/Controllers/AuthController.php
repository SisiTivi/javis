<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    //login function
    public function login(Request $request)
    {
        // validasi input
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string'
        ]);

        // login jika berhasil
        if (Auth::attempt($credentials)) {
            // buat sesssion
            $request->session()->regenerate();
            // redirect jika login sukses
            return redirect()->intended(route('index'));
        }
        // jika error
        return back()->withErrors([
            'email' => 'email atau password salah'
        ]);
    }

    // buat akun
    public function register(Request $request)
    {
        // validasi input
        $validated = $request->validate([
            'email' => 'email|required|unique:users,email',
            'password' => 'string|required|min:8|confirmed'
        ]);

        // masukkan kedalam database
        User::create([
            'email' => strtolower($validated['email']),
            'password' => hash::make($validated['password'])
        ]);

        // redirect jika sukses
        return redirect()->route('login')->with('success', 'Create User success');
    }

    // logout
    public function logout(Request $request)
    {
        // log out user
        Auth::logout();

        // hapus session
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // redirect jika sukses
        return redirect()->route('login');
    }
}
