<?php


namespace App\Controllers;


use App\Controller;
class Photo extends Controller
{
    protected function actionIndex()
    {
        $this->view->display(__DIR__ . '/../templates/photo.php');
    }

}