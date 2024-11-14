<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;

class UserController extends Controller
{

    public function allUsers()
    {

        return view('users.all_user');
    }

    public function sendHome()
    {
        return $this->getCesaeInfo();
    }

    public function form()
    {
        return view("users.form");
    }

    public function add(Request $request)
    {

        $request->validate([
            "name" => "string|required|max:20",
            "email" => "email|required|unique:users",
            "senha" => "min:6|required"
        ]);

        User::insert([
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->senha),
            "user_type" => 1
        ]);

        return redirect()->route("users.all")->with("Message","Contacto adicionado com sucesso");
    }

    public function updateUser(Request $request)
    {
        $request->validate([
            "name" => "string|required|max:20",
            "email" => "email|required",
            "password" => "min:6|required"
        ]);

        DB::table("users")
        ->where( "id", $request->user)
        ->update([
            "name" => $request->name,
            "email" => $request->email,
            "address" => $request->morada
        ]);

        return redirect()->route("users.all")->with("update","Utilizador atualizado");

    }

    public function delete()
    {
        db::table('users')
        ->where('id', 5)
        ->delete();

    }

    public function users()
    {
        $search = request()->query("search") ? request()->query("search") : "";

        $searchNova = (isset($_GET["search"])) ? $_GET["search"] : "";

        // dd(isset($_GET["search"]));

        $cesaeInfo = $this->getCesaeInfo();

        $users = $this-> getAllUsersFromArray($search);

        return view('users.all_user', compact('cesaeInfo','users'));
    }

    public function viewUser($id)
    {
        $user = $this->getUserFromDatabase($id);

        return view("users.user_show",compact("user"));
    }


    public function removeUser($id)
    {
        $this->removeUserTaskFromDatabase($id);
        $this->removeUserFromDatabase($id);

        return redirect()->route("users.all")->with("remove_user","Contacto removido com sucesso");
    }

    private function getUserFromDatabase($id)
    {
        return DB::table("users")->where("id",$id)->first();
    }

    private function removeUserFromDatabase($id)
    {
        DB::table("users")->where("id",$id)->delete();
    }

    private function removeUserTaskFromDatabase($id)
    {
        DB::table("task")->where("user_fk",$id)->delete();
    }

    private function getAllUsersFromArray($search){

        $users = DB::table("users");

        if($search)
        {
            $users = $users->where("name", "LIKE" , "%{$search}%");
            $users = $users->orWhere("email", $search);
        }

        $users = $users->get();


        return $users;
     }

     private function getCesaeInfo(){
        return $cesaeInfo = [
             'name' => 'Cesae',
             'address' => 'Rua Ciríaco Cardoso 186, 4150-212 Porto',
             'email' => 'cesae@cesae.pt'
         ];
     }



}
