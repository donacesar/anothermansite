<?php


namespace Models;


class LogOut
{
    public function __construct()
    {
        include __DIR__ . '/../../config.php';
        unset($_COOKIE[COOCKIE_NAME]);
        setcookie(COOCKIE_NAME, null);
    }
}