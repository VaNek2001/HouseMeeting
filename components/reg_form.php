<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>ССМД</title>
    <link href="style.css" rel="stylesheet">
</head>

<section class="form">
    <section class="container">
        <h1 class="catalog-title"><a href="meeting.php">ССМД</a></h1>
        <a class="reg_title">Регистрация</a>
        <form method="post" action="check.php" enctype="multipart/form-data">

            <p><input type="file" name="filename"> </p>

            <p class="logPass"> <input  type="text" name="surname" placeholder="Фамилия" id="surname"> </p>

            <p class="logPass"> <input  type="text" name="name" placeholder="Имя" id="name"> </p>

            <p class="logPass"> <input  type="text" name="lastname" placeholder="Отчество" id="lastname"> </p>

            <p class="logPass"> <input  type="text" name="email" placeholder="Email" id="email"> </p>

            <?php
            $sql = "SELECT * FROM house";
            echo "<section class='sel2'><div class='sel2-1'><a>Адрес:</a><select name='address' id='id2'>";
            if($result = $conn->query($sql))
            {
                foreach($result as $row)
                    echo "<option value='" . $row["id"] . "'>" . $row["address"] . "</option>";
                echo "</select>";
            } else echo "Ошибка123: " . $conn->error;
            ?>

            </section>

            <p class="logPass"> <input  type="text" name="login" placeholder="Логин" id="login"> </p>

            <p class="logPass"> <input  type="password" name="password" placeholder="Пароль" id="password"> </p>

            <p class="vhd"><input class="reg_btn" type="submit" value="Зарегистрироваться"></p>

        </form>
    </div>
</section>
</section>

<div class="form-text2">
    <li class="list-text"><a>Уже зарегистрировались?</a></li>
    <li class="list-text2"><a href="login.php">Войти</a></li>
</div>


