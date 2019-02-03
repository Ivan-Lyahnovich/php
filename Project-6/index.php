<html>
    <head>
        <meta charset="UTF-8">
        <title>Project-6</title>
    </head>
    <body>       
        <div class="result">
            <form action="index.php" method="post" name="project6">
                <div class="form-group">
                  <label for="">Введите ФИО:</label>
                  <input type="text" name="fio">
                </div><br>
                <input type="submit" name="button" value="Отправить">
            </form>

            <?php
            /* Вашим заданием будет создание сокращенного варианта ФИО. 
               Например, вводим: Иванов Иван Петрович, а в результате должны получить: Иванов И. П.
            */
                if (isset($_POST['button'])) {
                    $fio = $_POST["fio"];
                    echo '<b>Ваше полное ФИО:</b> ', $fio;
                    echo '<br>';
                    $fio = explode(" ", $_POST['fio']);
                    $family = $fio[0];
                    $name = mb_substr($fio[1], 0, 1).".";
                    $patronymic = mb_substr($fio[2], 0, 1).".";
                    echo "<b>Фамилия и инициалы:</b> ".$family." ".$name." ".$patronymic;
                }
            ?>
        </div> 
    </body>
</html>