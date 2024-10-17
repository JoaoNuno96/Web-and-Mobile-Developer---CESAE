<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\UserController;

class HomeController extends Controller
{
    protected function getAllGrets()
    {
        return $greetings = "Hello World!";;
    }

    protected function getCourseInfo()
    {
        $courseInfo =
        [
            "name" => "Web & Mobile Developer",
            "hours" => 950
        ];

        return $courseInfo;
    }

    public function Index()
    {
        $greetings = $this->getAllGrets();

        $userInfo = [
            "name" => "joao",
            "email" => "joao@teste.pt"
        ];

        $info = $this->getCourseInfo();

        $uC = new UserController();
        $courseInfo = $uC->sendHome();

        return view('utils.home', compact("greetings","userInfo","info","courseInfo"));
    }

    public function Welcome()
    {
        return view('welcome');
    }

    public function WelcomeUser($name)
    {
        return "<h1>Hello $name </h1>";
    }
}
