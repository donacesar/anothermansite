<?php

namespace App;

use App\Exceptions\Core;

class FrontController
{
    public static function getController($controller)
    {
        $controllerName = '\\App\\Controllers\\' . $controller;
        $filePath = __DIR__ . '/Controllers/' . $controller . '.php';
        //return new $controllerName();
        if (file_exists($filePath)) {
            return new $controllerName();
        } else {
            throw new \App\Exceptions\Core('лажовый контроллер');
        }
    }
}