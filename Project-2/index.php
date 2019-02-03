<html>
    <head>
        <meta charset="UTF-8">
        <title>Project-2</title>
    </head>
    <body>
        <div class="result">
            <form action="index.php" method="post" name="project2">
                <div class="form-group">
                    <label for="">Введите число:</label>
                    <input type="text" name="num1">
                </div><br>
                <div class="form-group">
                    <label for="">Введите число для поиска вхождений:</label>
                    <input type="text" name="num2">
                </div><br>
                <input type="submit" name="post-button2" value="Отправить">
            </form>

            <?php
            /* Вам нужно разработать программу, которая считала бы количество вхождений 
               какой-нибуть выбранной вами цифры в выбранном вами числе. 
               Например: цифра 5 в числе 442158755745 встречается 4 раза
            */
                if (isset($_POST['post-button2'])) {
                    $num1 = $_POST["num1"];
                    $num2 = $_POST["num2"];
                    echo '<b>Количество вхождений:</b> ', substr_count($num1, $num2);
                }
            ?>
        </div>
    </body>
</html>

