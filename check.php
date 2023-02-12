<?php

require('dbconnect.php');

if ($file = fopen($_FILES['filename']['tmp_name'], 'r+')){
    //получение расширения
    $ext = explode('.', $_FILES["filename"]["name"]);
    $ext = $ext[count($ext) - 1];
    $filename = 'file' . rand(100000, 999999) . '.' . $ext;

    $resource = Container::getFileUploader()->store($file, $filename);
    $picture_url = $resource['ObjectURL'];
}
else
{
    $picture_url = '/assets/calendar.png';
}

$surname = $_POST['surname'];
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$id_house = $_POST['address'];
$login = $_POST['login'];
$password = $_POST['password'];

$password = md5($password); // Создаем хэш из пароля

$result = $conn->query("INSERT INTO users(surname, name, lastname, email, id_house, login, password, picture_url)
	VALUES('$surname', '$name', '$lastname', '$email', '$id_house', '$login', '$password', '$picture_url')");


?>