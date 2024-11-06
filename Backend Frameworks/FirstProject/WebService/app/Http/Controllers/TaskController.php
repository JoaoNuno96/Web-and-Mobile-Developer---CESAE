<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class TaskController extends Controller
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

    public function form()
    {
        $users = $this->getUsers();

        return view("task.form",compact("users"));
    }

    public function add(Request $request)
    {
        // dd($request->all());
        $request->validate([
            "tarefa" => "string|required",
            "descricao" => "string|required",
        ]);

        DB::table("task")
        ->insert([
            "name" => $request->tarefa,
            "description" => $request->descricao,
            "user_fk" => $request->user
        ]);

        return redirect()->route("task.all")->with("task_message","Tarefa adicionada com sucesso");
    }

    private function getUsers()
    {
        return DB::table("users")
        ->get();
    }
}
//
