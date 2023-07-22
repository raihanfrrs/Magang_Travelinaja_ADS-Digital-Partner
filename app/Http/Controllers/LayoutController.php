<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LayoutController extends Controller
{
    public function index()
    {
        if (!Auth::check() || auth()->user()->level == 'client') {
            return view('welcome-client', [
                'countries' => Country::all(),
                'heros' => Country::limit(4)->get()
            ]);
        } elseif (auth()->user()->level == 'admin') {
            return view('welcome-admin');
        }
    }
}
