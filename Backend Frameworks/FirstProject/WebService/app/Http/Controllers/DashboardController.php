<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashHome()
    {
        return view("dashboard.dash-home");
    }
}
