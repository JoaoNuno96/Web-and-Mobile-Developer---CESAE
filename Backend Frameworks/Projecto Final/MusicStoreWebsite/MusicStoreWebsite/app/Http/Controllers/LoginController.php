<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login()
    {
        if(Auth::check())
        {
            return redirect()->route("home");
        }
        else
        {
            return view("login.login");
        }

    }

        //criacao de user admin == SEEDING MANUAL
        public function userAdminCreate()
        {
            DB::table("users")
            ->insert([
                "name" => "admin",
                "email" => "admin@teste.pt",
                "password" => Hash::make(123456),
                "user_type" => 2
            ]);

            return view("/");
        }

        //criacao de user test == SEEDING MANUAL
        public function userTestCreate()
        {
            DB::table("users")
            ->insert([
                "name" => "test",
                "email" => "test@teste.pt",
                "password" => Hash::make(123456),
                "user_type" => 1
            ]);

            return view("/");
        }

}
