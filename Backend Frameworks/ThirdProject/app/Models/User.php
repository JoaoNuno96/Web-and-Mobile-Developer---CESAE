<?php

namespace App\Models;

class User
{

    public $nome;
    public $email;
    public $senha;

    public function __construct($n,$e,$s)
    {
        $this->nome = $n;
        $this->email = $e;
        $this->senha = $s;
    }

}

?>
