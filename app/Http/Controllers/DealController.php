<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DealController extends Controller
{
    public function index()
    {
        return view('client.deals.index');
    }
}
