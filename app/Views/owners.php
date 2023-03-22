<?php require 'app/views/header.php'?>

<h1 style="margin: 3% 1px 1% 7%">Владельцы</h1>

<table class="table table-hover" style="width: 70%; margin: auto; text-align: center">
    <thead>
    <tr>
        <th scope="col">№</th>
        <th scope="col">ФИО</th>
        <th scope="col">id квартиры в БД</th>
        <th scope="col">Доля в праве</th>
        <?php if ($data['user']) {
        echo('<th scope="col">Действие</th>');
    }?>

    </tr>
    </thead>
    <tbody>

    <?php
    foreach($data['owners'] as $owner){
        echo "<tr>";
        echo "<th scope='row' class='align-middle'>" . $owner->id . "</th>";
        echo "<td class='align-middle'>" . $owner->full_name . "</td>";
        echo "<td class='align-middle'>" . $owner->id_flat . "</td>";
        echo "<td class='align-middle'>" . $owner->fraction . "</td>";

        if ($data['user']) {
            echo "<td><a href='deleteroom.php' class='btn btn-danger'> Удалить</a></td>";
            echo "</tr>";
        }

    }
    ?>
    </tbody>
</table>