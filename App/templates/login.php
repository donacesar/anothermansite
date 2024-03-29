<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>
<html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>
<html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="ru"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=0.78, user-scalable=no, viewport-fit=cover">
    <title>Login</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="icon" href="" type="image/x-icon">
    <link rel="shortcut icon" href="" type="image/x-icon">
</head>
<body>

<form method="post" action="?ctrl=Auth&action=Index" class="login">
    <p>
        <label for="login">Логин:</label>
        <input type="text" name="login" id="login" value="" autofocus>
    </p>

    <p>
        <label for="password">Пароль:</label>
        <input type="password" name="password" id="password" value="">
    </p>

    <p class="login-submit">
        <button type="submit" class="login-button">Войти</button>
    </p>
</form>
</body>
</html>