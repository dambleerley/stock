<?php

$str = 'mysql:host=localhost;dbname=stock';
$user = 'master';
$pass = '2468';

try
{
    $conn = new pdo($str,$user,$pass);
}
catch(Exception $e)
{
    echo $e->getMessage();
}