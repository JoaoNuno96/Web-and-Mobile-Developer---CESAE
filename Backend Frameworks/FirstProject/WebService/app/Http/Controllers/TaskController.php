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

    public function removeTask($id)
    {
        $this->removeTaskProcess($id);

        return redirect()->route("task.all")->with("task_removido","Tarefa removida com sucesso");
    }

    public function taskView($id,$userName)
    {
        $task = $this->getSingleTask($id);

        $users = $this->getUsers();

        return view("task.viewSingleTask", compact("task","users"));
    }

    public function updateForm($id,$taskUser)
    {
        $task = $this->getSingleTask($id);
        return view("");

    }

    private function removeTaskProcess($id)
    {
        DB::table("task")
        ->where("id",$id)
        ->delete();
    }

    private function getSingleTask($item)
    {
        return DB::table("task")
        ->where("task.id",$item)
        ->first();
    }

    private function getUsers()
    {
        return DB::table("users")
        ->get();
    }

    private function getUserFromUsername($username)
    {
        return DB::table("users")
        ->where("name",$username)
        ->first();
    }
}
//
