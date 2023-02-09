<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>ССМД</title>
    <link href="style.css" rel="stylesheet">
</head>

<body>
<header class="site-header">
    <nav class="site-navigation">
        <a class="logo-link" href="index.php">
            <img src="img/home_logo.jpg" width="62" height="62" alt="Логотип сайта">
        </a>
        <ul class="navigation-list">

            <?php
            if ($_SESSION['username']) {
                if ($_SESSION['admin']) {
                    echo ('<li><a href="product_add.php">Добавить продукт</a></li>');;
                }

                echo ('<li><a href="meeting.php">Собрания</a></li>');
                echo ('<li><a href="question.php">Вопросы</a></li>');

                echo ('<li><a href="index.php?logout=1">'.$_SESSION['username'].' \→ </a></li>');
            }
            else {
                echo ('<li class="list-text"><a href="meeting.php">Собрания</a></li>');
                echo ('<li><button class="vhdReg"><a href="login.php">Войти</a></button></li>');
                echo ('<li><button class="vhdReg"><a href="reg.php">Регистрация</a></button></li>');

                require('message.php');
            }
            ?>

        </ul>
    </nav>
</header>