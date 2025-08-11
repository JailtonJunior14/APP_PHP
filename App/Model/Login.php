<?php

namespace App\Model;

use App\Dao\LoginDAO;

final class Login 
{
    public $id, $email, $senha, $nome;

    public function logar() : ?Login
    {
        return new LoginDAO()->autenticar($this);
    }
}