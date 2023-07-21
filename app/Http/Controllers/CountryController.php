<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class CountryController extends Controller
{
    public function index()
    {
        return view('admin.master.country.index');
    }

    public function add()
    {
        return view('admin.master.country.add-country');
    }

    public function store(Request $request)
    {
        try {
            $validatedData = Validator::make($request->all(), [
                'name' => 'required|min:2|max:255|unique:countries',
                'continent' => 'required|min:2|max:255',
                'population' => 'required|numeric',
                'territory' => 'required',
                'image' => 'image|file|max:2048',
            ])->validate();
        
            if ($request->file('image')) {
                $validatedData['image'] = $request->file('image')->store('country-image');
            }

            $validatedData['slug'] = slug($request->name);
        
            Country::create($validatedData);
        
            return redirect()->intended('/country/add')->with([
                'flash-type' => 'sweetalert',
                'case' => 'default',
                'position' => 'center',
                'type' => 'success',
                'message' => 'Add Country Success!'
            ]);
        } catch (ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            return back()->withInput()->with([
                'flash-type' => 'sweetalert',
                'case' => 'default',
                'position' => 'center',
                'type' => 'error',
                'message' => 'Add Country Failed!'
            ]);
        }
    }

    public function edit(Country $country)
    {
        return view('admin.master.country.edit-country', [
            'country' => $country
        ]);
    }

    public function update(Request $request, Country $country)
    {
        try {
            $rules = [
                'name' => 'required|min:2|max:255|unique:countries,name,' . $country->id,
                'continent' => 'required',
                'population' => 'required|numeric',
                'territory' => 'required',
                'image' => 'image|file|max:2048',
            ];

            $validatedData = Validator::make($request->all(), $rules)->validate();

            if ($request->file('image')) {
                if ($country->image) {
                    Storage::delete($country->image);
                }
                $validatedData['image'] = $request->file('image')->store('country-image');
            }

            $validatedData['slug'] = slug($request->name);

            $country->update($validatedData);

            return redirect('/country')->with([
                'flash-type' => 'sweetalert',
                'case' => 'default',
                'position' => 'center',
                'type' => 'success',
                'message' => 'Update Country Success!'
            ]);
        } catch (ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            return back()->withInput()->with([
                'flash-type' => 'sweetalert',
                'case' => 'default',
                'position' => 'center',
                'type' => 'error',
                'message' => 'Update Country Failed!'
            ]);
        }
    }

    public function dataCountry()
    {
        return DataTables::of(Country::all())
        ->addColumn('avg_price', function ($model) {
            return view('admin.master.country.data-avg-price', compact('model'))->render();
        })
        ->addColumn('action', function ($model) {
            return view('admin.master.country.form-action', compact('model'))->render();
        })
        ->rawColumns(['action'])
        ->make(true);
    }
}