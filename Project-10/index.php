<html>
    <head>
        <meta charset="UTF-8">
        <title>Project-10</title>
    </head>
    <body>       
        <div class="result">
            <form action="index.php" method="post" name="project10">
                <div class="form-group">
                    <label for="">Введите карту:</label>
                    <input type="text" name="card">
                </div>
                <input type="submit" name="button" value="Отправить">
            </form>

            <?php
            /* Игральным картам присвоены следующие порядковые номера в зависимости от 
               их достоинства: "валет" - 11, "дама" - 12, "король" - 13, "туз" - 14. 
               Порядковые номера остальных карт соответствуют их названиям
               ("семерка", "восмерка" и т. д.). Вам нужно разработать программу, 
               которая выводила достоинство карты по заданному номеру, 
               который будет вводит пользователь.
            */
                if (isset($_POST['button'])) {
                    $i = $_POST ['card'];
                    switch ($i) {
                    case 6:
                      $card = 'шестерка';
                      break;
                    case 7:
                      $card = 'семерка';
                      break;
                    case 8:
                      $card = 'восьмерка';
                      break;
                    case 9:
                      $card = 'девятка';
                      break;
                    case 10:
                      $card = 'десятка';
                      break;
                    case 11:
                      $card = 'валет';
                      break;
                    case 12:
                      $card = 'дама';
                      break;
                    case 13:
                      $card = 'король';
                      break;
                    case 14:
                      $card = 'туз';
                      break;
                    }
                    if (isset($card)) {
                        echo 'Номеру ', $i, ' соответствует карта «', $card, '»';
                    } else {
                        echo 'Карта введена неверно';
                    }
                }
            ?>
        </div> 
    </body>
</html>


