<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public function showGreeting()
    {
        $name = "John";
        return view('greet', compact('name'));
    }
}
