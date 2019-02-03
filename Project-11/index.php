<html>
    <head>
        <meta charset="UTF-8">
        <title>Project-11</title>
    </head>
    <body>       
        <div class="result">
            <form action="index.php" method="post" name="project11">
                <div class="form-group">
                    <label for="">Введите год:</label>
                    <input type="text" name="year">
                </div>
                <input type="submit" name="button" value="Отправить">    
            </form>

            <?php
            /* Составить программу, которая бы по заданному числу выводила 
               его название по китайском календаре. Заданное число не может быть меньше 1924. 
            */
                if (isset($_POST['button'])) {
                $year = $_POST["year"];
                function getYear($current) {
                  $start = 1924;
                  if ($current < $start) return false;
                  return array(
                    "Крыса","Бык","Тигр","Кролик","Дракон","Змея",
                    "Лошадь","Коза/Овца","Обезьяна","Петух","Собака","Свинья"
                  ) [($current - $start) % 12];
                }
                if ($year > 1924) {
                  echo $year, ' год в китайском календаре соответствует животному «', getYear($year), '».';
                  } else {
                    echo 'Вы ввели неверный год';
                  }
                }
            ?>
        </div> 
    </body>
</html>




