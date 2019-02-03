<html>
    <head>
        <meta charset="UTF-8">
        <title>Project-9</title>
    </head>
    <body>       
        <div class="result">
            <form action="index.php" method="post" name="project9">
                <div class="form-group">
                    <label for="">Введите год:</label>
                    <input type="text" name="year">
                </div>
                <input type="submit" name="button" value="Отправить">
            </form>

            <?php
            /* Вам нужно разработать программу, которая проверяла бы введенное пользователем число 
               (год). Число может быть в диапазоне от 1 до 9999.
            */
                if (isset($_POST['button'])) {
                $year = $_POST["year"];
                    if (($year > 1) && ($year < 9999)) {
                        if ( $year % 4 == 0 ) {
                            echo 'Bисокосный год';
                        } else {
                            echo 'Не високосный год';
                        }
                    }
                }
            ?>
        </div> 
    </body>
</html>

