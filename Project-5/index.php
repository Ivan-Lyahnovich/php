<html>
    <head>
        <meta charset="UTF-8">
        <title>Project-5</title>
    </head>
    <body>       
        <div class="result">
            <?php
            /*Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (ф-я rand). 
              Далее, вычислить произведение тех элементов, которые больше ноля и у которых 
              парные индексы. После вывести на экран элементы, которые больше ноля и 
              у которых не парный индекс.
            */
                $arr = array();
                $arr2 = array();
                $proizv = 1;
                for ($i = 0 ; $i <= 10; $i++){
                    $arr[] = mt_rand(1,100);
                }
                echo '<b>Изначальный массив:</b> <pre>';
                print_r( $arr );
                echo  '</pre>';
                echo '<b>Массив с парными индексами:</b> <pre>';
                for($i=0; $i<count($arr); $i=$i+2){
                    if ($arr[$i] > 0) {
                        $proizv = $proizv * $arr[$i];
                    }
                  echo $arr[$i], ' | ';
                }
                echo  '</pre>';
                echo 'Проивзедение массива с парными индексами: ', $proizv;
                echo '<br><br><b>Элементы с непарными индексами:</b> <pre>';
                for($i=1; $i<count($arr); $i=$i+2){
                    if ($arr[$i] > 0) {
                        echo $arr[$i], ' | ';
                    }
                }
                echo '</pre>';
            ?>
        </div> 
    </body>
</html>