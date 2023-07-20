<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LayoutController extends Controller
{
    public function index()
    {
        if (!Auth::check() || auth()->user()->level == 'client') {
            return view('welcome-client', [
                'data' => 'data'
            ]);
        } elseif (auth()->user()->level == 'admin') {
            return view('welcome-admin');
        }
    }
}
