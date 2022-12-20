<section class="MAD-CD">
    <section class="MAD-Create-Dell">
        <div class="meeting-add-dell-create">
            <h1 class="meeting-ad-create">Создать новое собрание</h1>
            <form method="post" action="..\meeting.php" enctype="multipart/form-data">
                <p>
                    <label for="id1">Дата для собрания: </label>
                    <input type="date" name="date_meeting" id="id1">
                </p>

                <?php
                $sql = "SELECT * FROM house";
                echo "<label for='id2'>Адрес дома: </label>";
                echo "<select name='address' id='id2'>";
                if($result = $conn->query($sql))
                {
                    foreach($result as $row)
                        echo "<option value='" . $row["id"] . "'>" . $row["address"] . "</option>";
                    echo "</select>";
                } else echo "Ошибка123: " . $conn->error;
                ?>

                <p><input type="submit" value="СОЗДАТЬ"></p>
            </form>
        </div>
    </section>

    <section class="MAD-C-D">
        <div class="m-a-c-d">
            <h1 class="mad-acd">Удалить собрание</h1>
            <form method="post" action="..\meeting.php" enctype="multipart/form-data">
                <p>
                    <label for="id1">№ собрания: </label>
                    <input type="text" name="del_meeting" id="id1">
                </p>
                <p><input type="submit" value="УДАЛИТЬ"></p>
            </form>
        </div>
    </section>
</section>

