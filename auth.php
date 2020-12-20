<?php
require __DIR__ . '/autoload.php';

$login = $_POST['login'];
$password = $_POST['password'];
$auth = new \Models\Auth($login, $password);
$adminID = $auth->tryAuth();
if (false === $adminID) {
    header('Location: /login.php');
    die;
}
$adminSession = new \Models\AdminSession($adminID);
header('Location: /admin.php');
