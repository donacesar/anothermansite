<?php


echo "<pre>";

print_r($_SERVER);

echo "</pre>";
die;


//  Если надо захэшировать новый пароль используем это

$password = '123';

echo password_hash($password, PASSWORD_DEFAULT);
