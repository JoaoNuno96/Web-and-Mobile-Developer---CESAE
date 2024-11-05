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
        return view('utils.home');
    }

    public function Welcome()
    {
        return view('welcome');
    }

    public function anotations()
    {
        $greetings = $this->getAllGrets();

        $userInfo = [
            "name" => "joao",
            "email" => "joao@teste.pt"
        ];

        $info = $this->getCourseInfo();

        $uC = new UserController();
        $courseInfo = $uC->sendHome();

        $array = $this->getAllUSersFromArray();
        return view('utils.class_anotations', compact("greetings","userInfo","info","courseInfo","array"));
    }

    public function WelcomeUser($name)
    {
        return "<h1>Hello $name </h1>";
    }

    private function getAllUSersFromArray(){

        return $users = [
            ['id' => 1, 'name' => 'Sara', 'email' => 'Sara@gmail.com'],
            ['id' => 2, 'name' => 'Dr Anablea', 'email' => 'Anabela@gmail.com'],
            ['id' => 3, 'name' => 'Bruno', 'email' => 'Sara@Bruno.com'],
            ['id' => 4, 'name' => 'Alex', 'email' => 'Alex@gmail.com'],
        ];

    }
}
