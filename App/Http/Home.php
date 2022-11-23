<?php

namespace App\Http;

class Home
{
    public function __construct()
    {
        $banner = "Home Page";
        require_once 'Public/template/header.php';
        require_once 'Public/paginas/home.php';        
        require_once 'Public/template/footer.php';
    }

    public function home()
    {
    }
}