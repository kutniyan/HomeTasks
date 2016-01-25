<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Расчет стоимости тура</title>

</head>
<body>

	<? $discounts = array('Турция' => "5", 'Египет' => "3", 'Италия' => "15", 'Испания' => "12", 'Куба' => "8"); ?>

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
			<input type="text"name="days" size="1" maxlength="2" placeholder="<?=$_REQUEST['days']?>">
		</p>
		
		<p>Если Вы студент, нажмите, чтобы получить скидку -5%
			<input type="checkbox" name="checkbox" value="on">
		</p>
        
        <button type="submit" >Рассчитать стоимость</button>
		<button type="reset" >Сброс</button>
    </form>

	<? function calculate(){
		
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
</body>
</html>