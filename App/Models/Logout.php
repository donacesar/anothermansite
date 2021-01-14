<?php


namespace App\Models;


//Сбрасываем Куки
class Logout
{
    public function __construct()
    {
        include __DIR__ . '/../../config.php';
        unset($_COOKIE[COOCKIE_NAME]);
        setcookie(COOCKIE_NAME, null);
    }
}