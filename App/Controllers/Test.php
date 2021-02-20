<?php


namespace App\Controllers;


use App\Controller;

class Test extends Controller
{

    protected function actionIndex()
    {

        $this->view->display(__DIR__ . '/../templates/test.php');
    }

}

