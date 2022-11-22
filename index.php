<?php

require('dbconnect.php');

$sql = "SELECT * FROM `house`";

if($result = $conn->query($sql))
{
    echo "<table><tr><th>id</th><th>Адрес</th></tr>";
    foreach($result as $row){
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["address"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else
{
    echo "Ошибка: " . $conn->error;
}