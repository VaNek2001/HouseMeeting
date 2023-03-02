<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>ССМД</title>
    <link href="style.css" rel="stylesheet">
</head>

<h1 class="zagolovok-profil">Профиль</h1>
<section class="profile-photo">
    <section class="profile-photo-otdel">
        <?php
        $flagProfil = 1;
        echo ('<div class="profile-avatar-img"><img class="profile-avatar" app="'.$_SESSION['is_picture_url'].'" alt="Task picture"></div>
        <a class="profile-chenge-avatar">Изменить аватар</a>
        <a href="deleteava.php" class="profile-delete-avatar">Удалить аватар</a>')
        ?>
    </section>

</section>