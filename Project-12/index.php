<html>
    <head>
        <meta charset="UTF-8">
        <title>Project-12</title>
    </head>
    <body>       
        <div class="result">
            <form action="index.php" method="post" name="project12">
                <div class="form-group">
                    <label for="">Введите N: </label>
                    <input type="text" name="sqr-n">
                </div><br>
                <input type="submit" name="button" value="Отправить">
            </form>

            <?php
            /* Дано натуральное число n. Вычислить: 11 + 22 + .. + nn. 
               Вывести на экран квадраты этих чисел, а также сумму квадратов этих чисел.
            */
                if (isset($_POST['button'])) {
                    $n = $_POST["sqr-n"];
                    for($i = 1; $i <= $n; $i++){
	                $kvr = pow($i, $i);
	                $sum += $kvr;
	                echo  "$i<sup>$i</sup> = ".$kvr."<br/>";
                    }
                    echo "<br>"."Сумма всех чисел = ".$sum;
                }
            ?>
        </div> 
    </body>
</html>






