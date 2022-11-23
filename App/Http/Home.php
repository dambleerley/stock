<?php

namespace App\Http;

class Home
{
    public function index()
    {
        $msg = "Mensagem repassada do controller para a view.";
        require_once "Public/paginas/home.php";
    }
}