<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ListUsers;
use App\Models\User;

class UserController extends Controller
{
    public function add()
    {
        return view("user.user-add");
    }

    public function addNewUser()
    {
        if(isset($_POST["name"]))
        {
            DB::table("user")
                ->insert([
                    "name" => $_POST["name"],
                    "email" => $_POST["email"],
                    "senha" => $_POST["senha"]
                ]);
        }

        return view("user.user-addNew");
    }

    public function showList()
    {

        $listaUtilizadores = $this->receiveData();

        //dd($listaUtilizadores);

        $indices = ["nome","email","senha","X"];

        return view("user.user-view-all", compact("listaUtilizadores","indices"));
    }

    public function remove(Request $request)
    {
        $email = $request->input('email');

        $verifiedE = $this->verifyId($email);
        dd($email);

        return view("user.user-remove");
    }

    private function receiveData()
    {
        return DB::table("user")
            ->get();
    }

    private function verifyId($email)
    {
        return DB::table("user")
            ->where("email", $email)
            ->get();
    }





}