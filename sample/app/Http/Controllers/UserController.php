<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function register(Request $REQ)
    {
        $incomingfield = $REQ->validate([
            "name" => ["required", "min:2", "max:8"],
            "email" => ["required", Rule::unique("users", "email")],
            "password" => ["required", "confirmed"]
        ]);
        User::create($incomingfield);
        return view("login");
    }
    function loginmain(){
        return view('login');
    }
    function login(Request $REQ)
    {
        $incomingfield = $REQ->validate([
            "email" => "required",
            "password" => "required"
        ]);
        $name = $REQ->input("email");
        if (Auth::attempt($incomingfield)) {
            return view("dashboard", ["name" => $name]);
        }
        return ("Unable to Login");
    }
}
