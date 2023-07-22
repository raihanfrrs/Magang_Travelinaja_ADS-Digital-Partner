<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Deal;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Models\TempReservation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

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

    public function show(City $city)
    {
        if (Auth::check()) {
            return view('client.reservation.index', [
                'cities' => City::all(),
                'cited' => $city
            ]);
        }
    }

    public function show_deal(City $city)
    {
        if (Auth::check()) {
            return view('client.reservation.index', [
                'cities' => City::all(),
                'cited' => $city,
                'deal' => 'deal'
            ]);
        }
    }

    public function store(Request $request)
    {
        try {
            $rules = [
                'name' => 'required|min:2|max:255',
                'phone' => 'required|numeric',
                'email' => 'required|min:5|max:255|email:dns',
                'guest' => 'required|numeric',
                'check_in' => 'required|date',
                'city_id' => 'required',
            ];

            $validatedData = Validator::make($request->all(), $rules)->validate();

            if (isset($request->deal)) {
                if ($request->deal == $request->city_id) {
                    $deal = Deal::where('city_id', $request->city_id)->first();

                    $validatedData['user_id'] = auth()->user()->id;
                    $validatedData['grand_total'] = $deal->price * $request->guest;
                }
            } else {
                $city = City::where('id', $request->city_id)->first();

                $validatedData['user_id'] = auth()->user()->id;
                $validatedData['grand_total'] = $city->price * $request->guest;
            }

            $temp = TempReservation::create($validatedData);

            return redirect('/reservation/checkout/'.$temp->id)->with([
                'flash-type' => 'sweetalert',
                'case' => 'default',
                'position' => 'center',
                'type' => 'success',
                'message' => 'Reservation Success!'
            ]);
        } catch (ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            dd($e);
            return back()->withInput()->with([
                'flash-type' => 'sweetalert',
                'case' => 'default',
                'position' => 'center',
                'type' => 'error',
                'message' => 'Reservation Failed!'
            ]);
        }
    }

    public function checkout(TempReservation $checkout)
    {
        return view('client.reservation.checkout', [
            'checkout' => $checkout
        ]);
    }

    public function payment(TempReservation $checkout)
    {
        try {
            $checkouts['user_id'] = $checkout->user_id;
            $checkouts['city_id'] = $checkout->city_id;
            $checkouts['name'] = $checkout->name;
            $checkouts['phone'] = $checkout->phone;
            $checkouts['email'] = $checkout->email;
            $checkouts['guest'] = $checkout->guest;
            $checkouts['grand_total'] = $checkout->grand_total;
            $checkouts['check_in'] = $checkout->check_in;

            $reservation = Reservation::create($checkouts);

            $checkout->delete();

            return redirect('reservation/checkout/'.$reservation->id.'/invoice')->with([
                'flash-type' => 'sweetalert',
                'case' => 'default',
                'position' => 'center',
                'type' => 'success',
                'message' => 'Checkout Success!'
            ]);
        } catch (ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            return back()->withInput()->with([
                'flash-type' => 'sweetalert',
                'case' => 'default',
                'position' => 'center',
                'type' => 'error',
                'message' => 'Checkout Failed!'
            ]);
        }
    }

    public function invoice(Reservation $checkout)
    {
        return view('client.reservation.checkout', [
            'checkout' => $checkout,
            'status' => 'acc'
        ]);
    }
}
