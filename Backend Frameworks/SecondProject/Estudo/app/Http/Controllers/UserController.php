<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
            #new user
            $source = "./db/users.txt";

            $file = fopen($source,"a");

            if($source)
            {
                $sentence = $_POST["name"] . "/" . $_POST["email"] . "/" . $_POST["senha"] . PHP_EOL;

                fwrite($file,$sentence);

                fclose($file);
            }

        }

        return view("user.user-addNew");
    }

    public function remove()
    {
        return view("user.user-remove");
    }

    public function showList()
    {

        $listaUtilizadores = $this->UsersList();

        $indices = ["nome","email","senha"];

        return view("user.user-view-all", compact("listaUtilizadores","indices"));
    }

    private function User()
    {
    }

    private function UsersList()
    {
        $source = "./db/users.txt";

        $arr = [];
        $arrSecond = [];
        $arrNew = [];

        $file = fopen($source,"r");

        if($file)
        {
            while(!feof($file))
            {
                $line = fgets($file);
                $arr[] = $line;
            }
        }
        fclose($file);

        foreach($arr as $key => $value)
        {
            $n = explode("/",$value);
            $arrSecond[] = $n;
        }

        //$this->reviewArr($arrSecond);


        array_pop($arrSecond);

        foreach($arrSecond as $user)
        {
           $user["2"] = substr($user["2"],0,strlen($user["2"]) - 2);
           //dd($user["2"]);
           $arrNew[] = $user;
        }

        //dd($arrNew);

        return $arrNew;

    }


}
