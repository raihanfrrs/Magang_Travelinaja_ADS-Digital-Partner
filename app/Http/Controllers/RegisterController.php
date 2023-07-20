<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('authentication.view_register');
    }

    public function store(Request $request)
    {
        try {
            $validateData = $request->validate([
                'username' => 'required|min:2|max:255|unique:users',
                'password' => 'required'
            ]);

            $validateData['level'] = 'client';
            $validateData['password'] = bcrypt($validateData['password']);

            if (User::create($validateData)) {
                return redirect()->intended('/sign-in')->with([
                    'case' => 'default',
                    'position' => 'center',
                    'type' => 'success',
                    'message' => 'Sign-up Success!'
                ]);
            }
        } catch (\Illuminate\Validation\ValidationException $exception) {
            return redirect()->back()->withErrors($exception->errors())->with([
                'case' => 'default',
                'position' => 'center',
                'type' => 'error',
                'message' => 'Sign-up Failed!'
            ]);
        }
    }
}
