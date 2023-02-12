<?php
require "dbconnect.php";

$resource = Container::getFileUploader()->delete($_SESSION['is_picture_url']);

$result = $conn->query("UPDATE users SET users.picture_url = NULL WHERE picture_url = '".$_SESSION['is_picture_url']."'");