<?php
function get_password($pattern, $len){
    $pass = substr(str_shuffle($pattern),0, $len);
    return $pass;
}

function generate_password($pattern, $len = 6){
    return substr(str_shuffle($pattern),0, $len);
}

function hello(){
    echo "HELLO WORLD";
}

$my_print = function (){
    echo 'my_print';
};