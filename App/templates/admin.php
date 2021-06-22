<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="lt-ie9 lt-ie8 lt-ie7" lang="ru"> <![endif]-->
<!--[if IE 7]>
<html class="lt-ie9 lt-ie8" lang="ru"> <![endif]-->
<!--[if IE 8]>
<html class="lt-ie9" lang="ru"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="ru"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1.0, minimum-scale=1.0">

    <title>Admin</title>
    <link rel="stylesheet" href="/css/style2.css">
    <link rel="icon" href="" type="image/x-icon">
    <link rel="shortcut icon" href="" type="image/x-icon">
</head>
<body>
<div class="wrapper">
    <header class="header">
        <div class="container">
            <div class="header__body">
                <a href="?ctrl=Admin&action=Index" class="header__logo">
                    <img src="/img/logo.png" alt="" >
                </a>

                <div class="header__burger">
                    <span></span>
                </div>
                <nav class="header__menu">
                    <ul class="header__list">
                        <li><a href="" class="header__link">Новости</a>
                        </li>
                        <li>
                            <a href="" class="header__link">Фото</a>
                        </li>
                        <li>
                            <a href="" class="header__link">Видео</a>
                        </li>
                        <li>
                            <a href="" class="header__link">Музыка</a>
                        </li>
                        <li>
                            <a href="?ctrl=Admin&action=Index" class="header__link">Админ</a>
                        </li>
                        <li>
                            <a href="?ctrl=Logout&action=Index" class="header__link"><?php echo $CurrentAdmin . ':'; ?>Logout</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>


    </header>
    <section class="section">
        <h1>Панель Админки</h1>

    </section>
</div>
<!--подключаем jQuery-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<!--Подключаем файл JS-->
<script src="/js/script.js"></script>

</body>
</html>
