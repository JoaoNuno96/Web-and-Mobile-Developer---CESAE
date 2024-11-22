<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SigninController extends Controller
{
    public function signin()
    {
        return view("signin.signIn");
    }

    public function test(Request $request)
    {
        dd($request->all());
    }
}
