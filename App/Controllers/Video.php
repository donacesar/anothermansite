<?php


namespace App\Controllers;

use App\Controller;
class Video extends Controller
{
    protected function actionIndex()
    {
        $this->view->display(__DIR__ . '/../templates/video.php');
    }

}