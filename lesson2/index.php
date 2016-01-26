<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
//это функция
define("PI", 3.1415927);
const EX = 222;

echo PI, "<br>", EX, "<br>", __FILE__ ;

$pi = 3.1415927;

echo "<br>", $pi;

$userName = "Vasya";
$user_name = "Vasya";

$var = null;
echo $var, "<br>";

echo "<br>----------------------------------------------------<br>";

$int = 34;

echo gettype($pi), "<br>";

echo gettype($userName), "<br>";

echo gettype($var), "<br>";

echo gettype(PI), "<br>";

$t = 3.14;
echo "t = $t -- ",gettype($t),"<br>";
settype($t,"string");
echo "t = $t -- ",gettype($t),"<br>";

echo "<br>----------------------------------------------------<br>";

$t = 3.14;
$tmp = (string) $t;
echo "tmp = $tmp -- ".gettype($tmp)."<br>";
$tmp = (int) $t;
echo "tmp = $tmp -- ".gettype($tmp)."<br>";
$tmp = (double) $t;
echo "tmp = $tmp -- ".gettype($tmp)."<br>";
$tmp = (bool) $t;
echo "tmp = $tmp -- ".gettype($tmp)."<br>";
echo "t = $t -- ".gettype($t);

echo "<br>----------------------------------------------------<br>";
$t = "Всем";        // переменной t присваиваем значение "Всем"
$$t="привет!";// $Всем = "привет";  Переменной "Всем" присваиваем значение "привет!"

echo "$$t ".$$t."<br>";
echo "$t ${$t}<br>";
echo "$t $Всем";

echo "<br>----------------------------------------------------<br>";

$t1 = 96;
$t2 = &$t1;
echo "t1 = $t1; t2 = $t2<br>";
$t1 = 315;
echo "t1 = $t1; t2 = $t2 <br>";

echo "<br>----------------------------------------------------<br>";

$index = 10;
//echo $index++, "<br>";
echo (integer)($index/2), "<br>";
echo $index%8, "<br>";

echo "<br>----------------------------------------------------<br>";

$a = "Всем";
$b = $a." привет!";
echo $b.$a."<br>";

echo "<br>----------------------------------------------------<br>";

$a = 13;
$b = '13';

$res = $a == $b;//true
$res1 = $a === $b;//false
$lalala;

echo isset($lalala);//true
echo empty($lalala);//false

//echo "a = $a <br>";

//echo 'a = $a <br>';

echo "<br>----------------------------------------------------<br>";

function add (&$a, $b){
    $a += $b;
    $b += $b;
}

$af = 10;
$bf = 6;

echo "af = $af; bf = $bf";
add ($af, $bf);

echo "<br>После вызова функции:<br>";

echo "af = $af; bf = $bf";

echo "<br>----------------------------------------------------<br>";

function ФИО(){
    return array ("Иванов", "Иван", "Иванович");
}

list ($фамилия, $имя, $отчество) = ФИО();

echo "<table>";

echo "<tr><td>фамилия: <td>$фамилия";

echo "<tr><td>имя: <td>$имя";

echo "<tr><td>отчество: <td>$отчество</table>";


