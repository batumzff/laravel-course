<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // // Seleect All Cars
        // $cars = Car::get();

        // // Select Published Cars
        // $cars = Car::where('published_at', '!=', null)->get();

        // // Select the first car
        // $car = Car::where('published_at', '!=', null)->first();

        $car = Car::orderBy('published_at', 'desc')->limit(2)->get();

        dump($car);

        return view('home.index');
    }
}
