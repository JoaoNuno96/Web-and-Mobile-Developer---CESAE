<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JornalController extends Controller
{
    public function Index()
    {
        return view("Jornal.jornal");
    }
}
