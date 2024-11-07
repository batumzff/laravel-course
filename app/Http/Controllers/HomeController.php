<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index')
        ->with('name', 'Batuhan')
        ->with('surname', 'Muzafferoglu')
        ->with('country', 'tr')
        ->with('job', '<b>Developer<b>')
        ->with('hobbies', ['Tennis', 'Fishing']);
    }
}
