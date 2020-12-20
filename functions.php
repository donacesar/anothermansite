<?php
///*require __DIR__ . '/config.php';
//
////проверка введенных логина и пароля
////если неверно пишем в error.log
//function auth($login, $pass)
//{
//    $login = $_POST['login'];
//    $pass = $_POST['password'];
//    if (empty($login) || empty($pass)) {
//        wrongLog($login, $pass);
//        return false;
//    }
//    $dbh = new PDO(DB_PATH, DB_LOGIN, DB_PASSWORD);
//    $sth = $dbh->prepare('SELECT * FROM admins WHERE login=:login');
//    $sth->execute([':login' => $login]);
//    $data = $sth->fetch();
//    if (!empty($data)) {
//        if (password_verify($pass, $data['password'])) {
//            adminLog($login);
//            return $data['id'];
//        }
//
//    }
//    wrongLog($login, $pass);
//    return false;
//}
//
////
//function saveAdminSession($admin, $hash)
//{
//    $dbh = new PDO(DB_PATH, DB_LOGIN, DB_PASSWORD);
//    $sth = $dbh->prepare('INSERT INTO admin_sessions (admin_id, hash) VALUES (:admin_id, :hash)');
//
//    return $sth->execute([':admin_id' => $admin, ':hash' => $hash]);
//}
//
//function getCurrentAdmin()
//{
//    $hash = $_COOKIE[COOCKIE_NAME] ?? null;
//    if (empty($hash)) {
//        return null;
//    }
//
//    $dbh = new PDO(DB_PATH, DB_LOGIN, DB_PASSWORD);
//    $sth = $dbh->prepare('SELECT * FROM admin_sessions WHERE hash=:hash');
//    $sth->execute([':hash' => $hash]);
//    $data = $sth->fetch();
//    if (empty($data)) {
//        return null;
//    }
//
//    $sth = $dbh->prepare('SELECT * FROM admins WHERE id=:id');
//    $sth->execute([':id' => $data['admin_id']]);
//    $arr = $sth->fetch();
//    adminLog($arr['login']);
//    return $arr;
//}
//
////логгирование неверного входа
//function wrongLog($login, $password)
//{
//    $ip = $_SERVER['REMOTE_ADDR'];
//    $date = date('[Y-m-d H:i:s]');
//    $str = '#' . $ip . '#' . 'Login: ' . $login . '#' . 'Password: ' . $password . '#' . $date . PHP_EOL . PHP_EOL;
//    file_put_contents(WRONG_LOG, $str, FILE_APPEND | LOCK_EX);
//
//}
//
////логгирование сессии администратора
//function adminLog($login)
//{
//    $ip = $_SERVER['REMOTE_ADDR'];
//    $date = date('[Y-m-d H:i:s]');
//    $str = '# ' . $ip . ' # ' . $login . ' #' . $date . PHP_EOL . PHP_EOL;
//    file_put_contents(ADMIN_LOG, $str, FILE_APPEND | LOCK_EX);
//}*/
