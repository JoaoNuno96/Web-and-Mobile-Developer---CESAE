<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class UserController extends Controller
{

    public function allUsers()
    {
        return view('users.all_user');
    }

    public function addUsers()
    {
        return view('users.addUsers');
    }

    public function sendHome()
    {
        return $this->getCesaeInfo();
    }

    public function insertUser()
    {
        DB::table("users")
            ->insert([
                "name" => "joao",
                "email" => "joao@teste.pt",
                "nif" => "2455351453",
                "address" => "Rua do nabo",
                "password" => "12346"
            ]);

        return Response::Json("sucesso");
    }

    public function updateUser()
    {
        DB::table("user")
            ->where("name", "joao")
            ->update([
                "email" => "joaonuno@teste.pt"
            ]);

            return Response::Json("sucesso");
    }

    public function updateOrInsertUser()
    {
        DB::table("user")
            ->updateOrInsert(
                [
                    "email" => "Pedro@gmail.com",
                    "password" => "pedro12345"
                ],
                [
                    "name" => "pedro",
                    "updated_at" => now()
                ]
            );
    }

    public function delete()
    {
        db::table('users')
        ->where('id', 5)
        ->delete();

    }

    public function users()
    {
        $cesaeInfo = $this->getCesaeInfo();
        $users = $this-> getAllUsersFromArray();
        /*dd($users);*/
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

        return back();
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

    private function getAllUsersFromArray(){
        return DB::table("users")
        ->get();
     }

     private function getCesaeInfo(){
        return $cesaeInfo = [
             'name' => 'Cesae',
             'address' => 'Rua Ciríaco Cardoso 186, 4150-212 Porto',
             'email' => 'cesae@cesae.pt'
         ];
     }



}
