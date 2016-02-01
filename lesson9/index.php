<?php
$n = 10;

function natural($n, $a = 1){
    echo $a." ";
    if($a >= $n){
        return;
    }else{
        natural($n, $a + 1);
    }
}

natural($n);

echo "<br>";
function natural1($n,$a=1){
    if($a>$n) {
        return;
    }else {
        natural1($n, $a + 1);
        echo $a." ";
    }
}

natural1($n);

function fact($n){
    if($n < 0){
        return 0;
    }
    if($n == 0){
        return 1;
    }else{
        return $n * fact($n-1);
    }
}
echo "<br>----------------------------------<br>";
echo "Факториал 3 = ", fact(3);

echo "<br>----------------------------------<br>";
echo "Факториал 10 = ", fact(10);

echo "<br>----------------------------------<br>";
echo "Факториал 20 = ", fact(20);

echo "<br>----------------------------------<br>";

$n = 123;
$numb3 = $n % 10;
echo $numb3;
$n = ($n - $numb3)/10;
echo "<br>".$n."<br>";
$numb2 = $n%10;
echo $numb2;
$n = ($n - $numb2)/10;
echo "<br>".$n;

// 3 2 1
//321
$res = $numb3 * 100 + $numb2*10+$n;
echo "<br>",$res,"<br>";


echo "<br>----------------------------------<br>";

function sum_numb($n){
    $num = $n%10;
    $n = ($n - $num)/10;
    if($n < 1){
        return 1;
    }else{
        return $num * sum_numb($n);
    }
}

echo "<br>----------------------------------<br>";

function reverse($n){
    $num = $n%10;
    $n = ($n - $num)/10;
    if($n <= 0){
        return $num;
    }else{
        return reverse($n);
    }
}



$res = reverse(120);

echo $res,"<br>";

echo gettype($res);