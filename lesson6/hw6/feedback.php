<?
function calculate(){

    global $discounts;

    $country = $_REQUEST['country'];
    $days = $_REQUEST['days'];
    if (isset($_REQUEST['checkbox'])){
        $checkbox = $_REQUEST['checkbox'];
    }

    $price = "400";
    $cost = $price*$days;

    foreach($discounts as $key => $value){
        if($key == $country){
            $cost = $cost*(1+$value/100);
        }
    }

    if ($checkbox == 'on'){
        $cost *=0.95;
    }

    if ((!empty($_REQUEST['country'])) and (!empty($_REQUEST['days']))){
        echo "<br> ВАШ ТУР: <br> Страна: ", $country, "<br>", "Длительность (дней): ",$days,"<br>", "Стоимость (грн): ", $cost;
    }
}

calculate();
?>