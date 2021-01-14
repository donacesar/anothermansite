<?php


namespace App\Controllers;


use App\Controller;

class Admin extends Controller
{
    protected function actionIndex()
    {
        $admin = new \App\Models\Admin();
        $CurrentAdmin = $admin->getCurrentAdmin();
        if ($CurrentAdmin == null) {
            header('Location: ?ctrl=Login&action=Index');
        }
        $this->view->display(__DIR__ . '/../templates/admin.php');
    }
}