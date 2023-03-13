<?php

require('dbconnect.php');
require('components/header1.php');

if ($_SESSION['username']){
    require('components/question_add_dell.php');

    if ($_POST['id_meeting']){

        $result = $conn->query("INSERT INTO question(id_meeting, text)
             VALUES ('".$_POST['id_meeting']."','".$_POST['text']."')");
        echo ('<p class="error1">Вопрос создан!</p>');
    }

    if ($_POST['del_text']){
        $del = $_POST['del_text'];
        $result = $conn->query("SELECT * FROM question WHERE id='$del'");
        if ($row = $result->fetch()){
            $conn->query("DELETE FROM question WHERE question.id='$del'");
            echo ('<p class="error1">Вопрос удалён!</p>');}
        else echo ('<p class="error1">Вопрос не найден!</p>');
    }
}

$sql = "SELECT house.address, meeting.date , question.text, meeting.id, question.id FROM house, meeting, question WHERE house.id=meeting.id_house && meeting.id = question.id_meeting ORDER BY meeting.id";

if($result = $conn->query($sql))
{
    echo "<table><tr><th>№ вопроса</th><th>Адрес</th><th>Дата</th><th>Вопрос для решения</th></tr>";
    foreach($result as $row){
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["address"] . "</td>";
        echo "<td>" . $row["date"] . "</td>";
        echo "<td>" . $row["text"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else
{
    echo "Ошибка: " . $conn->error;
}