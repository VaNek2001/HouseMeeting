<?php

require('dbconnect.php');
require('components/header.php');

$sql = "SELECT house.address, meeting.date , question.text FROM house, meeting, question WHERE house.id=meeting.id_house && meeting.id = question.id_meeting && house.id = 1";

if($result = $conn->query($sql))
{
    echo "<table><tr><th>Адрес</th><th>Дата</th><th>Вопрос для решения</th></tr>";
    foreach($result as $row){
        echo "<tr>";
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