<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\City;
use App\Models\Country;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{

    public function contact() {
        $countries = Country::all();
        return view('contact', ['countries' => $countries]);
    }
    
    public function getStates(Request $request) {
        if (!empty($request->country_id)) {
            $states = State::where('country_id', $request->country_id)->orderBy('name', 'ASC')->get();
            return response()->json([
                'status' => true,
                'states' => $states
            ]);
        } else {
            return response()->json([
                'status' => false,
                'states' => []
            ]);
        }
    }
    
    public function getCities(Request $request) {
        if (!empty($request->state_id)) {
            $cities = City::where('state_id', $request->state_id)->orderBy('name', 'ASC')->get();
            return response()->json([
                'status' => true,
                'cities' => $cities
            ]);
        } else {
            return response()->json([
                'status' => false,
                'cities' => []
            ]);
        }
    }

    public function sendmail(Request $request) {
        try {
            $mailData = [
                'service' => $request->service,
                'name' => $request->name,
                'email' => $request->email,
                'country' => $request->country,
                'state' => $request->state,
                'city' => $request->city,
                'phone' => $request->phone,
                'message' => $request->message
            ];
    
            Mail::to('akgoswami086@gmail.com')->send(new ContactMail($mailData));
    
            return response()->json([
                'status' => true,
                'message' => 'Thank you for showing your interest. Our team will get back to you soon'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'There was an error sending your message. Please try again later.',
                'error' => $e->getMessage()
            ]);
        }
    }
    
    
    
    
}