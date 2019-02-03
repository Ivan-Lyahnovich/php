<html>
    <head>
        <meta charset="UTF-8">
        <title>Project-4</title>
    </head>
    <body>       
        <div class="result">
            <?php
            /*создать массив, наполнить его случайными значениями (можно использовать функцию rand),
              найти максимальное и минимальное значение массива и поменять их местами.
            */
                $arr = array();
                echo 'Основной массив: ';
                for ($i=0;$i<10;$i++) {
                    $arr[]=rand(1,100);
                    echo $arr[$i].' | ';
                };
                $max = array_search(max($arr),$arr);
                $min = array_search(min($arr),$arr);
                echo '<br>Изменённый массив: ';
                list($arr[$max], $arr[$min]) = array($arr[$min], $arr[$max]);
                for ($i=0;$i<10;$i++)
                    echo $arr[$i].' | ';
            ?>
        </div> 
    </body>
</html>