<?php

namespace App\Http;

class Login
{
    private $conn;

    public function __construct()
    {
        require_once 'App/Src/Conexo.php';
        $this->conn = $conn;
    }

    public function index()
    {
        $msg = "Mensagem repassada do controller para a view.";
        require_once "Public/paginas/login.php";
    }
}