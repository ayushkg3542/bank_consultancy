<?php

namespace App\Http\Controllers;

use App\Mail\HomeContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function home(){
        return view('home');
    }

    public function homesendMail(Request $request) {
        // dd($request->all());
        try {
            $mailData = [
                'service' => $request->service,
                'name' => $request->name,
                'email' => $request->email,
                'country' => $request->country,
                'phone' => $request->phone,
                'message' => $request->message
            ];
            // dd($mailData);

    
            Mail::to('akgoswami086@gmail.com')->send(new HomeContactMail($mailData));
    
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


    public function homeloan(){
        return view('services.homeloan');
    }

    public function personalLoan(){
        return view('services.personalLoan');
    }

    public function againstProperty(){
        return view('services.againstProperty');
    }

    
    public function businessLoan(){
        return view('services.businessLoan');
    }

    public function capital(){
        return view('services.capital');
    }

    public function about(){
        return view('about');
    }



    public function homeloanemi(){
        return view('emicalculator.homeloanemi');
    }
    
    public function personalloanemi(){
        return view('emicalculator.personalLoanemi');
    }

    public function capitalemi(){
        return view('emicalculator.capitalemi');
    }

    public function businessLoanemi(){
        return view('emicalculator.businessLoanemi');
    }
    public function propertyLoanemi(){
        return view('emicalculator.propertyemi');
    }
}
