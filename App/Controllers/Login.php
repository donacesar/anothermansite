<?php


namespace App\Controllers;


use App\Controller;

class Login extends Controller
{
    protected function actionIndex()
    {
        $this->view->display(__DIR__ . '/../templates/login.php');
    }
}