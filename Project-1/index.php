
<html>
<head>
    <meta charset="UTF-8">
    <title>Project-1</title>
</head>
<body> 
    
<div class="result">
    <form action="index.php" method="post" name="project-1">
        <label for="">Введите число:</label>
        <input type="text" name="number">
        <input type="submit" name="post-button" value="Отправить">
    </form>
                
    <?php  
    /* Вам нужно разработать программу, которая считала бы сумму цифр числа введенного пользователем.
       Например: есть число 123, то программа должна вычислить сумму цифр 1, 2, 3, т. е. 6.
    */
        if (isset($_POST['post-button'])) {
            $number = $_POST["number"];           
            $summ = 0;
            $number = str_split($number);
            for ($i=0; $i<count($number); $i++)         
                $summ += $number[$i];
                echo '<b>Сумма числа:</b> ', $summ;               
        }        
    ?>
</div>
    
</body>
</html>          