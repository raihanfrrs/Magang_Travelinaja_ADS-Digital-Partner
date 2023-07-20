<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('authentication.view_login');
    }

    public function cekLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $kredensial = $request->only('username', 'password');

        $checkUser = User::where('username', $request->username)->first();

        if (empty($checkUser)) {
            return back()->withErrors([
                'username' => 'Wrong username or password!'
            ])->onlyInput('username');
        }

        if (Auth::attempt($kredensial)) {
            $request->session()->regenerate();

            $user = Auth::user();

            if ($user) {
                return redirect()->intended('/')->with([
                    'case' => 'default',
                    'position' => 'center',
                    'type' => 'success',
                    'message' => 'Berhasil Masuk!'
                ]);
            }

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'username' => 'Wrong username or password!'
        ])->onlyInput('username');
    }
}
