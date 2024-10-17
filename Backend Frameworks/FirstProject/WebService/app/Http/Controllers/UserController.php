<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
