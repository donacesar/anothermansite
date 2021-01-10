<?php


namespace App\Controllers;


use App\Controller;

class Error extends Controller
{
    protected $message;
    public function __construct($message)
    {
        parent::__construct();
        $this->message = $message;
    }

    protected function actionIndex()
    {
        $this->view->message = $this->message;
        $this->view->display(__DIR__ . '/../templates/error.php');
    }
}