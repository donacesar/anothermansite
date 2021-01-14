<?php

//  Если надо захэшировать новый пароль используем это

$password = '123';

echo password_hash($password, PASSWORD_DEFAULT);
