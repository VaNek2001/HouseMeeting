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
                    echo ('<li><a href="product_add.php">Добавить продукт</a></li>');
                }

                echo ('<a href="meeting.php">Собрания</a>');
                echo ('<a href="question.php">Вопросы</a>');

                echo ('<li><a href="profil.php" > <h0 class="profil-name">'.$_SESSION['username'].'</h0>
                        <style>
                        .round {
                                border-radius: 100px;
                                box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
                                }
                        .profil-name {
                            padding-left: 20px;
                            padding-right: 10px;
                        }
                        </style>
                        <img class="round" src="'.$_SESSION['is_picture_url'].'" alt="Task picture" height="60px" width="60px"></a></li>');
                echo ('<button class="outButton"><a href="/logout">Выйти</a></button>');
            }
            else {
                echo ('<a href="meeting.php">Собрания</a>');
                echo ('<button class="vhdReg"><a href="/form">Войти</a></button>');
                echo ('<button class="vhdReg"><a href="reg.php">Регистрация</a></button>');

                require('message.php');
            }
            ?>

        </ul>
    </nav>
</header>