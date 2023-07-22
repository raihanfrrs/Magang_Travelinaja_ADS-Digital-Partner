<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('client.about.index', [
            'cities' => City::all()
        ]);
    }

    public function show(Country $country)
    {
        return view('client.about.index', [
            'cities' => City::where('country_id', $country->id)->get(),
            'country' => $country
        ]);
    }
}
