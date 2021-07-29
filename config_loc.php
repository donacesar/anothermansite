<?php
const COOCKIE_NAME = 'MYSESSID';

const DB_PATH = 'mysql:host = 192.168.2.58; dbname=anotherman';
const DB_LOGIN = 'mysql';
const DB_PASSWORD = 'mysql';

//лог неправлильного пароля
const WRONG_LOG = __DIR__ . '/log/wrong.log';
// лог сессий администратора
const ADMIN_LOG = __DIR__ . '/log/admin.log';