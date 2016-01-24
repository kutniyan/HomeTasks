<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Расчет стоимости тура</title>

</head>
<body>

	<? $discounts = array('Турция' => "4", 'Египет' => "3", 'Италия' => "10"); ?>

    <form action="" method="post">
	
		<p>Выберите страну:
			<select name="country">
				<?foreach($discounts as $key => $value):
					if($key == $_REQUEST['country']):?>
						<option selected="selected" value="<?=$key?>"><?=$key?></option>
					<?else:?>
						<option value="<?=$key?>"><?=$key?></option>
					<? endif;
				endforeach; ?>
			</select>
		</p>
		
		<p>Введите количество дней:
			<input type="text"name="days" size="1" maxlength="2">
		</p>
		
		<p>Если Вы студент, нажмите, чтобы получить скидку -5%
			<input type="checkbox" name="checkbox" value="on">
		</p>
        
        <button type="submit" >Рассчитать стоимость</button>
		<button type="reset" >Сброс</button>
    </form>

	<? function calculate(){
		//$discounts = array('Турция' => "4", 'Египет' => "3", 'Италия' => "10");

		$country = $_REQUEST['country'];
		$days = $_REQUEST['days'];

		if (isset($_REQUEST['checkbox'])){
			$checkbox = $_REQUEST['checkbox'];
		}
		else {$checkbox = 'off';}

		$price = "400";
		$cost = $price*$days;

		switch ($country) {
			case "Турция":
				$cost = $cost*(1+$discounts['Турция']/100);
				break;
			case "Египет":
				$cost = $cost*(1+$discounts['Египет']/100);
				break;
			case "Италия":
				$cost = $cost*(1+$discounts['Италия']/100);
				break;
		}

		if ($checkbox = 'on'){
			$cost = $cost*0.95;
		}
		echo "<br> ВАШ ТУР: <br> Страна: ", $country, "<br>", "Длительность (дней): ",$days,"<br>", "Стоимость (грн): ", $cost;
	}

	calculate();
	?>
</body>
</html>