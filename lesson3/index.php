<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lesson 3</title>
</head>
<body>
<?php
    $a = 9;
    $b = 11;
    $c = 10;

    if($a < $b){
        echo 'а меньше b';
    }elseif($a == $b){
        echo 'а равно b';
    }else{
        echo 'a больше b';
    }

    echo "<br>----------------------------------------------------------------<br>";

    if($a < $c && $b < $c){
        echo "а и b меньше c";
    }else{
        echo "а и b не меньше c";
    }

    echo "<br>----------------------------------------------------------------<br>";

    if($a < $c || $b < $c){
        echo "а или b меньше c";
    }else{
        echo "а или b не меньше c";
    }

    echo "<br>----------------------------------------------------------------<br>";

    if(($a < $c && $b > $c) || $b < $c){
        echo "а или b меньше c";
    }else{
        echo "а или b не меньше c";
    }

    echo "<br>----------------------------------------------------------------<br>";

    $index = 2;

    switch($index){
        case 2:
            echo "index = 2 <br>";
            break;
        case 13:
            echo "index = 13 <br>";
            break;
        case 4:
            echo "index = 4 <br>";
            break;

        default: echo "default"; break;
    }

    echo "<br>----------------------------------------------------------------<br>";

    $index = 2;

    switch($index){
        case 2:
            echo "index = 2 <br>";
            //break;
        case 13:
            echo "index = 13 <br>";
            //break;
        case 4:
            echo "index = 4 <br>";
            break;

        default: echo "default"; break;
    }

    echo "<br>----------------------------------------------------------------<br>";

    $index = 222;

    switch($index){
        case 2:
            echo "index = 2 <br>";
        break;
        case 13:
            echo "index = 13 <br>";
        break;
        case 4:
            echo "index = 4 <br>";
        break;

        default: echo "default<br>"; break;
    }

    echo "<br>----------------------------------------------------------------<br>";

    $index = 21;

    switch($index){
        case $index < 22:
            echo "$index < 22 <br>";
            break;
        case $index == 22:
            echo "$index == 22 <br>";
            break;
        case $index > 22:
            echo "$index > 22 <br>";
            break;

        default: echo "default<br>"; break;
    }

    echo "<br>----------------------------------------------------------------<br>";

    $n = 10;
    $i = 1;
    while($i <= $n){
        echo $i," ";
        $i++;
    }

    echo "<br>----------------------------------------------------------------<br>";

    $n = 10;
    $i = 1;
    while($i <= $n){
        if($i%2 == 0)
            echo $i, " ";
        $i++;
    }

    echo "<br>----------------------------------------------------------------<br>";

    $n = 10;
    $i = 1;

    do{
        echo $i, " ";
        $i++;
    }while($i <= $n);

    echo "<br>----------------------------------------------------------------<br>";

    $n = 10;

    for($i = 1; $i <= $n; $i++){
        echo $i, " ";
    }

    echo "<br>----------------------------------------------------------------<br>";

    $arNumbers = array(1, 2, 3, 4, 5, 6);

    var_dump($arNumbers);

    echo "<br>----------------------------------------------------------------<br>";

    $arStrings = array('qwerty', 'weerrr', 'werwerew');

    var_dump($arStrings);

    echo "<br>----------------------------------------------------------------<br>";

    $arStrings = array('gggg' => 233, 13 => 'weerrr',  2222 => 'werwerew');

    var_dump($arStrings);

    echo "<br>----------------------------------------------------------------<br>";

    $arAssoc = array(
        "ID" => 12,
        'NAME' => 'Vasya',
        'EMAIL' => 'vasya@mail.ru',
        'FAMILY' => array(
            array(
                'NAME' => 'Petya',
                'AGE' => 23
            ),
            array(
                'NAME' => 'Ivan',
                'AGE' => 33
            )
        )
    );

    var_dump($arAssoc);

    echo $arAssoc['NAME'], '<br>';

    echo $arAssoc['FAMILY'][0]['NAME'], '<br>';
    echo $arAssoc['FAMILY'][1]['NAME'], '<br>';

    echo "<br>----------------------------------------------------------------<br>";

    $arAssoc = array(
        "ID" => 12,
        'NAME' => 'Vasya',
        'EMAIL' => 'vasya@mail.ru',
        'FAMILY' => array(
            array(
                'NAME' => 'Petya',
                'AGE' => 23
            ),
            array(
                'NAME' => 'Ivan',
                'AGE' => 33
            )
        )
    );

    $arAssoc['FAMILY'][] = array('NAME' => 'Olga', 'AGE' => 26);
    $arAssoc['FAMILY'][0]['AGE'] = 24;

    var_dump($arAssoc);

    echo "<br>----------------------------------------------------------------<br>";

    $arPeople[] = array('NAME' => 'Kolya', 'AGE' => 23);
    $arPeople[] = array('NAME' => 'Evgeniy', 'AGE' => 22);
    var_dump($arPeople);

    echo "<br>----------------------------------------------------------------<br>";
    unset($arPeople);
    $arPeople[] = array('NAME' => 'Kolya', 'AGE' => 23);
    $arPeople[] = array('NAME' => 'Evgeniy', 'AGE' => 22);


    unset($arPeople[0]);
    var_dump($arPeople);

    echo "<br>----------------------------------------------------------------<br>";

    unset($arPeople);
    $arPeople[] = array('NAME' => 'Kolya', 'AGE' => 23);
    $arPeople[] = array('NAME' => 'Evgeniy', 'AGE' => 22);

    echo "<pre>";
    print_r($arPeople);
    echo "</pre>";

    echo "<br>----------------------------------------------------------------<br>";

    $arAssoc = array(
        "ID" => 12,
        'NAME' => 'Vasya',
        'EMAIL' => 'vasya@mail.ru',
        'FAMILY' => array(
            array(
                'NAME' => 'Petya',
                'AGE' => 23
            ),
            array(
                'NAME' => 'Ivan',
                'AGE' => 33
            )
        )
    );

    foreach($arAssoc['FAMILY'] as  $arPeople){
        echo $arPeople['NAME'],"<br>";
    }

    echo "<br>----------------------------------------------------------------<br>";

    $arAssoc = array(
        "ID" => 12,
        'NAME' => 'Vasya',
        'EMAIL' => 'vasya@mail.ru',
        'FAMILY' => array(
            array(
                'NAME' => 'Petya',
                'AGE' => 23
            ),
            array(
                'NAME' => 'Ivan',
                'AGE' => 33
            )
        )
    );

    foreach($arAssoc['FAMILY'] as $key => $arPeople){
        $arAssoc['FAMILY'][$key]['AGE'] = 333;
    }

    var_dump($arAssoc);

    echo "<br>----------------------------------------------------------------<br>";

    $arAssoc = array(
        "ID" => 12,
        'NAME' => 'Vasya',
        'EMAIL' => 'vasya@mail.ru',
        'FAMILY' => array(
            array(
                'NAME' => 'Petya',
                'AGE' => 23
            ),
            array(
                'NAME' => 'Ivan',
                'AGE' => 33
            )
        )
    );

    foreach($arAssoc['FAMILY'] as &$arPeople){
        $arPeople['AGE'] = 363;
    }

    var_dump($arAssoc);

?>
</body>
</html>
