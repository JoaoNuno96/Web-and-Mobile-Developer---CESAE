<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function home()
    {
        return view("home.home");
    }

    public function dash()
    {
        return view("home.dash");
    }
}
