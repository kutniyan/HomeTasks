<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Расчет стоимости тура</title>

</head>
<body>

	<?
	$path = 'file.txt';
	if (file_exists($path)) {
		$FileStrings = file($path);
		foreach($FileStrings as $Strings){
			$ArStr = explode(':',$Strings);
			$discounts[$ArStr[0]] = $ArStr[1];
		}
	} else {
		echo "<br>The file $path does not exist<br>";
	}

	//$discounts = array('Турция' => "5", 'Египет' => "3", 'Италия' => "15", 'Испания' => "12", 'Куба' => "8"); ?>

    <form action="feedback.php" method="post" id="index">
	
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

	<div id="res"></div>

	<script src="js/jquery.js"></script>
	<script type="text/javascript">
		$(function(){
			$('#index').submit(function(e){
				e.preventDefault();
				var formData = $(this).serializeArray();
				console.log(formData);
				$.ajax({
					url: "feedback.php",
					type: 'post',
					data: formData,
					datatype: 'html',
					success: function(res){
						$('#res').html(res);
					}
				});
			});
		});
	</script>

</body>
</html>