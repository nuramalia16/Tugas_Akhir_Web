<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    //
    public function index() {
        // $cars = Car::orderBy('Plat', 'desc')->get();
        $payment = Payment::all();

        return view('payment.index', compact('payment'));
     }

}
