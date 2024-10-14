<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Index()
    {
        return view('utils.home');
    }

    public function Welcome()
    {
        return view('welcome');
    }
}
