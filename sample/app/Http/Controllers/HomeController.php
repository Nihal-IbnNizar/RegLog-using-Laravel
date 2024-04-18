<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function main()
    {
        return view('login');
    }
    function register()
    {
        return view('home');
    }
}
