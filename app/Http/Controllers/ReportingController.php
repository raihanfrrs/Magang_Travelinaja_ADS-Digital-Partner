<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ReportingController extends Controller
{
    public function reservation_index()
    {
        return view('admin.reporting.reservation.index');
    }

    public function dataReservation()
    {
        return DataTables::of(Reservation::all())
        ->addColumn('city', function ($model) {
            return view('admin.reporting.reservation.data-city', compact('model'))->render();
        })
        ->addColumn('grand_total', function ($model) {
            return view('admin.reporting.reservation.data-grand-total', compact('model'))->render();
        })
        ->addColumn('until', function ($model) {
            return view('admin.reporting.reservation.data-until', compact('model'))->render();
        })
        ->rawColumns(['city', 'grand_total', 'country'])
        ->make(true);
    }
}
