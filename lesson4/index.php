<?php
ini_set('display_errors', 1);
//require("functions.php");
require_once("functions.php");

//include ("functions.php");
//include_once ("functions.php");

$str = "1234567890qwertyuiopQWERTYUIOP";

echo get_password($str, 10);

echo "<br>------------------------------------------------------<br>";


$password = generate_password($str, 15);

echo $password;

echo "<br>------------------------------------------------------<br>";

if(function_exists('generate_password')){
    echo generate_password($str, 13);
}else{
    echo "error";
}

echo "<br>------------------------------------------------------<br>";



if(!function_exists('hello')){
    function hello(){
        echo "HELLO";
    }
}else{
    echo 'hello() difined<br>';
    hello();
}

echo "<br>------------------------------------------------------<br>";

$my_print();

echo "<br>------------------------------------------------------<br>";
$str = "1234567890qwertyuiopQWERTYUIOP";

$funcName = 'generate_password';
echo $funcName,"<br>";
echo $funcName($str);

echo "<br>------------------------------------------------------<br>";
/**
 * @param $array - массив данных
 * @param $index - индекс массива
 * @param $callback - функция обработки
 */
function get_data_first($array, $index, $lalala){//возвращает первый элемент массива и вызывает колбэк в которы пердает этот элемент
    $element = $array[$index];
    $lalala($element);
}

$myArray = array(12, 345, 567, 6786, 324);

get_data_first($myArray, 1, function($el){
    var_dump($el);
});

echo "<br>------------------------------------------------------<br>";

uasort($myArray, function($a, $b, $c){
   if($a < $b || $a < $c){
       return -1;
   }else{
       return 1;
   }
});

var_dump($myArray);

echo '<br>---------------------------------------------------<br>';
function walk(&$array, $callback){
    foreach($array as &$item){
        $item = $callback($item);
    }
}

$arNumbers = array(1,2,3,4,5,6,7,8,9);

walk($arNumbers, function($value){
    return pow($value, 2);
});

var_dump($arNumbers);

$arNumbers1 = array(1,2,3,4,5,6,7,8,9);

walk($arNumbers1, function($value){
    return pow($value, 3);
});

var_dump($arNumbers1);


$arNumbers2 = array(1,2,3,4,5,6,7,8,9);
walk($arNumbers2, function($value){
    return $value + 1;
});

var_dump($arNumbers2);

$arNumbers2 = array(1,2,3,4,5,6,7,8,9);


function increment($value){
    return $value + 1;
}

walk($arNumbers2, 'increment');

var_dump($arNumbers2);


/*echo "<br>------------------------------------------------------<br>";
function($a, $b){
    if($a < $b){
        return -1;
    }else{
        return 1;
    }
}*/

