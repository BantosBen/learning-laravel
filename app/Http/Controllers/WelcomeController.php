<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //

    public function index()
    {
        $people = ['Angatia', 'Benson', 'Pesh', 'Wanjiku', 'Mugo'];
        $name = "Bantos Ben";
        return view('welcome')->with('name', $name)->with('people', $people);
    }
}