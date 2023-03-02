<?php

use Dotenv\Dotenv;
use Framework\Container;

if ( file_exists(dirname(__FILE__).'/vendor/autoload.php') ) {
    require_once dirname(__FILE__).'/vendor/autoload.php';
}
if (file_exists(".env"))
{
    $dotenv = Dotenv::createImmutable(__DIR__);
    $dotenv->load();
    echo "Окружение загружено<p>";
}
else {
    echo "Ошибка хагрузки ENV<br>";
}
Container::getApp()->run();


exit();

require('dbconnect.php');
require ('auth.php');
require('components/header.php');
require ('components/main.php');