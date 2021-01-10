<?php


namespace App\Controllers;


use App\Controller;
class Start extends Controller
{
    protected function actionIndex()
    {
        $this->view->display(__DIR__ . '/../templates/start.php');
    }

}