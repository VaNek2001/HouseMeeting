<section class="QAD-CD">
    <section class="QAD-Create-Dell">
        <div class="q-add-dell-create">
            <h1 class="q-ad-create">Добавление вопроса</h1>
            <form method="post" action="..\question.php" enctype="multipart/form-data">
                <?php
                $sql = "SELECT * FROM meeting";
                echo "<label for='id1'>№ собрания: </label>";
                echo "<select name='id_meeting' id='id1'>";
                if($result = $conn->query($sql))
                {
                    foreach($result as $row)
                        echo "<option value='" . $row["id"] . "'>" . $row["id"] . "</option>";
                    echo "</select>";
                } else echo "Ошибка: " . $conn->error;
                ?>
                <p>
                    <label for="id2">Текст вопроса: </label>
                    <input type="text" name="text" id="id2">
                </p>
                <p><input type="submit" value="СОЗДАТЬ"></p>
            </form>
        </div>
    </section>


    <section class="QAD-C-D">
        <div class="container">
            <h1 class="catalog-title">Удаление вопроса</h1>
            <form method="post" action="..\question.php" enctype="multipart/form-data">
                <p>
                    <label for="id1">№ вопроса:</label>
                    <input type="text" name="del_text" id="id1">
                </p>
                <p><input type="submit" value="УДАЛИТЬ"></p>
            </form>
        </div>
    </section>
</section>


