<html>
    <head>
        <meta charset="UTF-8">
        <title>Project-8</title>
    </head>
    <body>       
        <div class="result">
            <form action="index.php" method="post" name="project8">
                <div class="form-group">
                    <label for="">Введите минуту:</label>
                    <input type="text" name="minute">
                </div>
                <input type="submit" name="button" value="Отправить">
             </form>

            <?php
            /* Работа светофора запрограммирована таким образом: с начала каждого часа, 
               в течении трех минут горит зеленый сигнал, следующие две минуты горит красный, 
               дальше в течении трех минут - зеленый и т. д. Вам нужно разработать программу, 
               которая по введенному числу определяла какого цвета сейчас горит сигнал.
            */
                if (isset($_POST['button'])) {
                    $minute = $_POST["minute"];
                    function svetofor($minute) {
                        if($minute%5>=1 && $minute%5<=3) return "зелёный";
                        else if ($minute>0) return "красный";
                        else return 'никакой';
                    }
                    echo 'В ', $minute, ' мин. будет ', svetofor($minute), ' цвет';
                }
            ?>
        </div> 
    </body>
</html>

