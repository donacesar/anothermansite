<?php
const COOCKIE_NAME = 'MYSESSID';
const DB_PATH = 'mysql:host = localhost; dbname=anotherman';
const DB_LOGIN = 'root';
const DB_PASSWORD = '';

//лог неправлильного пароля
const WRONG_LOG = __DIR__ . '/log/wrong.log';
// лог сессий администратора
const ADMIN_LOG = __DIR__ . '/log/admin.log';