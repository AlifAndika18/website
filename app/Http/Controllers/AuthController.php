<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('login'); // login.blade.php
    }

    public function login(Request $request)
    {
        $user = DB::table('login')->where([
            ['username', '=', $request->username],
            ['password', '=', $request->password]
        ])->first();

        if ($user) {
            session(['username' => $user->username]);
            return redirect()->route('project.create');
        } else {
            return back()->with('error', 'Login gagal. Username atau password salah.');
        }
    }

    public function logout()
    {
        session()->forget('username');
        return redirect('/login');
    }
}
