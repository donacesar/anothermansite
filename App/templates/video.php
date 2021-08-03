<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!--    <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
    <link rel="stylesheet" href="/css/style2.css">
    <title>ВИДЕО</title>
    <link rel="icon" href="/favicon.png" type="image/x-icon">
</head>
<body>

<div class="wrapper">
    <header class="header">
        <div class="container">
            <div class="header__body">
                <a href="" class="header__logo">
                    <img src="/img/logo.png" alt="" >
                </a>
                <div class="header__burger">
                    <span></span>
                </div>
                <nav class="header__menu">
                    <ul class="header__list">
                        <li><a href="/" class="header__link">Новости</a>
                        </li>
                        <li>
                            <a href="?ctrl=Photo&action=Index" class="header__link">Фото</a>
                        </li>
                        <li>
                            <a href="?ctrl=Video&action=Index" class="header__link  menu__active">Видео</a>
                        </li>
                        <li>
                            <a href="" class="header__link onclick="document.location.reload(true)">RESET</a>
                        </li>
                        <li>
                            <a href="" class="header__link">Организаторам</a>
                        </li>
                        <li>
                            <a href="?ctrl=Admin&action=Index" class="header__link">Админ</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <div class="content">
        <div class="container">

            <div class="content__video">
                <iframe width="560" height="315"  src="https://www.youtube.com/embed/z4ofXxf-Uso" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            </div>
            <div class="content__video">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/rOitFHGdluw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            </div>
        </div>

    </div>
</div>

<!--подключаем jQuery-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<!--Подключаем файл JS-->
<script src="/js/script.js"></script>


</body>

</html>

