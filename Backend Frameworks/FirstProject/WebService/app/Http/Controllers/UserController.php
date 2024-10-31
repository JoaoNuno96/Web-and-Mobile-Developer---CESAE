<?php

namespace App\Http\Controllers;

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

    private function getCesaeInfo()
    {
        $cesaeInfo =
        [
            "name" => "Cesae",
            "address" => "Rua Ciriaco Cardoso 186, 415-212 Porto",
            "email" => "cease@cease.pt"
        ];

        return $cesaeInfo;
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



}
