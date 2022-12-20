<?php
session_start();

if ($_POST['login']){
    $result = $conn->query("SELECT * FROM users WHERE login='".$_POST['login']."'");

    if ($row = $result->fetch()){
        if (md5($_POST['password']) == $row['password']){
            $_SESSION['username'] = $_POST['login'];
            $_SESSION['id_auth_user'] = $row['id'];
            $_SESSION['admin'] = $row['is_admin'];
        }
        else{
            $message = 'Неверный логин или пароль';
        }
    }
    else{
        $message = 'Неверный логин или пароль';
    }

}

if ($_GET['logout']){
    session_unset();
}