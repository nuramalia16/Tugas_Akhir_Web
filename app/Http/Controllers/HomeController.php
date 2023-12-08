<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cars = Car::orderBy('Plat', 'desc')->get();

        return view('admin.home', compact('cars'));
    }

    public function indexuser() { 
        $car = Car::orderBy('Plat', 'desc')->get();

        return view('user.home', compact('car'));
    }
}
