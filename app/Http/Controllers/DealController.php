<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Deal;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class DealController extends Controller
{
    public function index()
    {
        return view('client.deals.index', [
            'deals' => Deal::all()
        ]);
    }

    public function deal()
    {
        return view('admin.master.deals.index');
    }

    public function add()
    {
        return view('admin.master.deals.add-deals', [
            'cities' => City::all()
        ]);
    }

    public function store(Request $request)
    {
        try {
            $validatedData = Validator::make($request->all(), [
                'city_id' => 'required',
                'day' => 'required|numeric',
                'price' => 'required|numeric',
                'until' => 'required|date',
            ])->validate();
        
            Deal::create($validatedData);
        
            return redirect()->intended('/deal/add')->with([
                'flash-type' => 'sweetalert',
                'case' => 'default',
                'position' => 'center',
                'type' => 'success',
                'message' => 'Add Deal Success!'
            ]);
        } catch (ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            return back()->withInput()->with([
                'flash-type' => 'sweetalert',
                'case' => 'default',
                'position' => 'center',
                'type' => 'error',
                'message' => 'Add Deal Failed!'
            ]);
        }
    }

    public function edit(Deal $deal)
    {
        return view('admin.master.deals.edit-deals', [
            'deal' => $deal,
            'cities' => City::all()
        ]);
    }

    public function update(Request $request, Deal $deal)
    {
        try {
            $rules = [
                'city_id' => 'required',
                'day' => 'required|numeric',
                'price' => 'required|numeric',
                'until' => 'required|date',
            ];

            $validatedData = Validator::make($request->all(), $rules)->validate();

            $deal->update($validatedData);

            return redirect('/deal')->with([
                'flash-type' => 'sweetalert',
                'case' => 'default',
                'position' => 'center',
                'type' => 'success',
                'message' => 'Update Deal Success!'
            ]);
        } catch (ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            return back()->withInput()->with([
                'flash-type' => 'sweetalert',
                'case' => 'default',
                'position' => 'center',
                'type' => 'error',
                'message' => 'Update Deal Failed!'
            ]);
        }
    }

    public function destroy(Deal $deal)
    {
        try {
            $deal->delete();
        
            return redirect()->intended('/deal')->with([
                'flash-type' => 'sweetalert',
                'case' => 'default',
                'position' => 'center',
                'type' => 'success',
                'message' => 'Delete Deal Success!'
            ]);
        } catch (\Exception $e) {
            return back()->withInput()->with([
                'flash-type' => 'sweetalert',
                'case' => 'default',
                'position' => 'center',
                'type' => 'error',
                'message' => 'Delete Deal Failed!'
            ]);
        }
    }

    public function dataDeal()
    {
        return DataTables::of(Deal::all())
        ->addColumn('city', function ($model) {
            return view('admin.master.deals.data-city', compact('model'))->render();
        })
        ->addColumn('price', function ($model) {
            return view('admin.master.deals.data-price', compact('model'))->render();
        })
        ->addColumn('until', function ($model) {
            return view('admin.master.deals.data-until', compact('model'))->render();
        })
        ->addColumn('action', function ($model) {
            return view('admin.master.deals.form-action', compact('model'))->render();
        })
        ->rawColumns(['city', 'until', 'action'])
        ->make(true);
    }
}
