<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin() {
        return view('auth.login');
    }

    public function showRegister() {
        return view('auth.register');
    }

    public function register(Request $request) {
        $request->validate([
            'username' => 'required|unique:admins',
            'password' => 'required',
        ]);

        Admin::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect()->route('login')->with('success', 'Registration successful!');
    }

    public function login(Request $request) {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $admin = Admin::where('username', $request->username)->first();

        if ($admin && ($request->password ===$admin->password)) {
            session(['admin' => $admin]);
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['Invalid username or password']);
    }

    public function logout() {
        session()->forget('admin');
        return redirect()->route('login');
    }
}
