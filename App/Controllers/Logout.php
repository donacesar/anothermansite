<?php


namespace App\Controllers;


use App\Controller;

class Logout extends Controller
{
    public function actionIndex()
    {
        $logOut = new \App\Models\Logout();
        header('Location: ?ctrl=Login&action=Index');
    }
}