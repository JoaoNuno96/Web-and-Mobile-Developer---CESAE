<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        //UserSeeder
        // DB::table("users")->insert([
        //     "name" => Str::random(10),
        //     "email" => Str::random(5) . "@gmail.com",
        //     "password" => Hash::make("password"),
        // ]);

        User::factory()
        ->count(50)
        ->create();


    }
}
