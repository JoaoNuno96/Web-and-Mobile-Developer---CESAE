<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class Task extends Controller
{

    public function getAllTask()
    {
        $tasks = DB::table("task")
        ->join("users","user_fk","=","users.id")
        ->select("task.*", "users.name as userName")
        ->get();

        // dd($tasks);

        return view("task.allTask",compact("tasks"));
    }
}
