<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <form action="hw2+.php" method="post">
        Введите целое число <input type=text name="number"><br>
        <input type=submit name="submit" value="Преобразовать">
    </form>
</body>

</html>

<?php
    //Получаем число из формы, хорошо бы еще провести проверку введенных данных, но пока не знаю как
    $n = $_POST['number'];
    echo 'Вы ввели десятичное число: '." $n<br>";

    $numbers=array();
    $k=0;

    for ( $i=0; $n>=1; $i++) {
        if ($n % 2 != 0) {$numbers[$i]=1;}
        else {$numbers[$i]=0;}
        $n = $n/2 - ($n%2)/2;
        $k=$k+1;
    }

    echo 'Ему соответствует двоичное число: ';
    for ( ; $k>=0; $k--) {
        echo "$numbers[$k]";
    }

?>
