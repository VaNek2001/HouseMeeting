<?php

$surname = $_POST['surname'];
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$login = $_POST['login'];
$password = $_POST['password'];

$password = md5($pass."thisisforhabr"); // Создаем хэш из пароля

$mysql = $conn;

$result = $mysql->query("INSERT INTO users(`surname`, `name`, `lastname`, `email`, `login`, `password`)
	VALUES('$surname', '$name', '$lastname', '$email', '$login', '$password')");
$mysql->close();


?>