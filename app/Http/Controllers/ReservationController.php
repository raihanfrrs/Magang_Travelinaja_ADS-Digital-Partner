<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return view('client.reservation.index', [
                'cities' => City::all()
            ]);
        }
    }
}
