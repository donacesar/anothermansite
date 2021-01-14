<?php

namespace App\Controllers;

use App\Controller;
use App\Models\AdminSession;

class Auth extends Controller
{
    protected function actionIndex()
    {
        $login = $_POST['login'];
        $password = $_POST['password'];
        $auth = new \App\Models\Auth($login, $password);
        $adminID = $auth->tryAuth();
        if (false === $adminID) {
            header('Location: ?ctrl=Login&action=Index');
            die;
        }
        $adminSession = new AdminSession($adminID);
        header('Location: ?ctrl=Admin&action=Index');
        die;
    }
}