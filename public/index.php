<?php

use App\Controllers\Error;

require __DIR__ . '/../autoload.php';

$url = $_SERVER['REQUEST_URI'];
$ctrl = $_GET['ctrl'] ?: 'Start';
$action = $_GET['action'] ?: 'Index';

try {
    $controller = \App\FrontController::getController($ctrl);
} catch (\App\Exceptions\Core $e) {
    $error = new Error('Ошибка 404 : ' . $e->getMessage());
    $error->action('Index');
    die;
}
//$controller = \App\FrontController::getController($ctrl);

try {
    $controller->action($action);
} catch (App\Exceptions\Core $e) {
    echo 'Возникло исключение приложения ' . $e->getMessage();
}// catch (\App\Exceptions\Db $e) {

    /*$errors = $e->getTrace();
    $controller = new \App\Controllers\Error();
    $controller->actionPrepare($e);
    $controller->action('Index');*/

