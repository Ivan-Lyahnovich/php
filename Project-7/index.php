<html>
    <head>
        <meta charset="UTF-8">
        <title>Project-7</title>
    </head>
    <body>       
        <div class="result">
            <form action="index.php" method="post" name="project7">
                <div class="form-group">
                    <label for="">Введите градусы:</label>
                    <input type="text" name="degrees">
                </div><br>
                <input type="submit" name="button" value="Отправить">
            </form>

            <?php
            /* Разработайте программу, которая определяла количество прошедших часов 
               по введенным пользователем градусах. Введенное число может быть от 0 до 360.
            */
                if (isset($_POST['button'])) {
                    $degrees = (int)$_POST["degrees"];
                    if ($degrees>=0 && $degrees<=360) {
                        echo 'Прошло ', (int)($degrees*2 / 60), ' часов ', fmod($degrees*2, 60), ' минут';
                    } else {
                        echo 'Введены некорректное значение';
                    }
                }
            ?>
        </div> 
    </body>
</html>

