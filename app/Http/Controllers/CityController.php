<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use App\Models\Deal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class CityController extends Controller
{
    public function index()
    {
        return view('admin.master.city.index');
    }

    public function add()
    {
        return view('admin.master.city.add-city', [
            'countries' => Country::all()
        ]);
    }

    public function store(Request $request)
    {
        try {
            $validatedData = Validator::make($request->all(), [
                'name' => 'required|min:2|max:255|unique:cities',
                'country_id' => 'required',
                'day' => 'required|numeric',
                'price' => 'required|numeric',
                'image' => 'image|file|max:2048',
            ])->validate();
        
            if ($request->file('image')) {
                $validatedData['image'] = $request->file('image')->store('city-image');
            }

            $validatedData['slug'] = slug($request->name);
        
            City::create($validatedData);

            $avg_price = City::select(City::raw('AVG(price) as avg_price'))->where('country_id', $request->country_id)->first();

            Country::whereId($request->country_id)->update(['avg_price' => $avg_price->avg_price]);
        
            return redirect()->intended('/city/add')->with([
                'flash-type' => 'sweetalert',
                'case' => 'default',
                'position' => 'center',
                'type' => 'success',
                'message' => 'Add City Success!'
            ]);
        } catch (ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            return back()->withInput()->with([
                'flash-type' => 'sweetalert',
                'case' => 'default',
                'position' => 'center',
                'type' => 'error',
                'message' => 'Add City Failed!'
            ]);
        }
    }

    public function edit(City $city)
    {
        return view('admin.master.city.edit-city', [
            'city' => $city,
            'countries' => Country::all()
        ]);
    }

    public function update(Request $request, City $city)
    {
        try {
            $rules = [
                'name' => 'required|min:2|max:255|unique:cities,name,' . $city->id,
                'country_id' => 'required',
                'day' => 'required|numeric',
                'price' => 'required|numeric',
                'image' => 'image|file|max:2048',
            ];

            $validatedData = Validator::make($request->all(), $rules)->validate();

            if ($request->file('image')) {
                if ($city->image) {
                    Storage::delete($city->image);
                }
                $validatedData['image'] = $request->file('image')->store('city-image');
            }

            $validatedData['slug'] = slug($request->name);

            $city->update($validatedData);

            $avg_price = City::select(City::raw('AVG(price) as avg_price'))->where('country_id', $request->country_id)->first();

            Country::whereId($request->country_id)->update(['avg_price' => $avg_price->avg_price]);

            return redirect('/city')->with([
                'flash-type' => 'sweetalert',
                'case' => 'default',
                'position' => 'center',
                'type' => 'success',
                'message' => 'Update City Success!'
            ]);
        } catch (ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            return back()->withInput()->with([
                'flash-type' => 'sweetalert',
                'case' => 'default',
                'position' => 'center',
                'type' => 'error',
                'message' => 'Update City Failed!'
            ]);
        }
    }

    public function show(City $city)
    {
        return view('admin.master.city.show-city', [
            'city' => $city
        ]);
    }

    public function destroy(City $city)
    {
        try {
            $city->delete();

            Deal::where('city_id', $city->id)->delete();
        
            return redirect()->intended('/city')->with([
                'flash-type' => 'sweetalert',
                'case' => 'default',
                'position' => 'center',
                'type' => 'success',
                'message' => 'Delete City Success!'
            ]);
        } catch (\Exception $e) {
            return back()->withInput()->with([
                'flash-type' => 'sweetalert',
                'case' => 'default',
                'position' => 'center',
                'type' => 'error',
                'message' => 'Delete City Failed!'
            ]);
        }
    }

    public function dataCity()
    {
        return DataTables::of(City::all())
        ->addColumn('country', function ($model) {
            return view('admin.master.city.data-country', compact('model'))->render();
        })
        ->addColumn('price', function ($model) {
            return view('admin.master.city.data-price', compact('model'))->render();
        })
        ->addColumn('action', function ($model) {
            return view('admin.master.city.form-action', compact('model'))->render();
        })
        ->rawColumns(['country', 'price', 'action'])
        ->make(true);
    }
}
