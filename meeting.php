<?php

require('dbconnect.php');
require('components/header.php');


if ($_SESSION['username']){
    require('components/meeting_add_dell.php');

    if ($_POST['date_meeting']){

        $result = $conn->query("INSERT INTO meeting(date, id_house)
             VALUES ('".$_POST['date_meeting']."','".$_POST['address']."')");
        echo ('<p class="error1">Собрание создано!</p>');
    }

    if ($_POST['del_meeting']){
        $del_meeting = $_POST['del_meeting'];
        $result = $conn->query("SELECT * FROM meeting WHERE id='$del_meeting'");
        if ($row = $result->fetch()){
            try {
                $sql = "DELETE FROM meeting WHERE meeting.id='$del_meeting'";
                $stmt = $conn->prepare($sql);
                $stmt->bindValue(":userid", $_POST['del_meeting']);
                $stmt->execute();
                echo ('<p class="error1">Собрание удалено!</p>');
            }
            catch (PDOException $e) {
                echo ('<p class="error1">Попытка каскадного удаления!</p>');
            }
        }
        else echo ('<p class="error1">Собрание не найдено!</p>');
    }
}

$sql = "SELECT meeting.id, meeting.date, house.address,house.img FROM house, meeting WHERE house.id=meeting.id_house ORDER BY meeting.id";

if($result = $conn->query($sql))
{
    echo "<table><tr><th>№ собрания</th><th>Дата</th><th>Адрес дома</th><th>Картинка</th></tr>";
    foreach($result as $row){
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["date"] . "</td>";
        echo "<td>" . $row["address"] . "</td>";
        echo "<td >";
        echo '<IMG src="'.$row["img"].'" width="40" height="40">';
        echo "</td>";
        echo "<tr>";
    }
    echo "</table>";
} else
{
    echo "Ошибка: " . $conn->error;
}


