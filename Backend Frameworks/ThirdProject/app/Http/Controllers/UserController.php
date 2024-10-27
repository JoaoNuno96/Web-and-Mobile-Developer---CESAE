<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ListUsers;
use App\Models\User;
use GuzzleHttp\Psr7\Response;

class UserController extends Controller
{
    //IR VIEW ADD
    public function add()
    {
        return view("user.user-add");
    }

    //ADICIONAR UM NOVO UTILIZADOR
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

    //REMOVER APRESENTAR LISTA
    public function showList()
    {
        $listaUtilizadores = $this->receiveData();

        $indices = ["nome","email","senha","X"];

        return view("user.user-view-all", compact("listaUtilizadores","indices"));
    }

    //REMOVER UM UTILIZADOR DE BASE DE DADOS
    public function removeUser($id)
    {
        DB::table("user")
        ->where("id", $id)
        ->delete();

        return view("user.user-remove");
    }

    //RECEBER DADOS BASE DE DADOS
    private function receiveData()
    {
        return DB::table("user")
            ->get();
    }

    //VERIFICAR UTILIZADOR PELO ID
    private function verifyUser($id)
    {
        return DB::table("user")
        ->where("id", $id)
        ->delete();
    }

}
