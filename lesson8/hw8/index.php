<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Расчет стоимости тура</title>

</head>
<body>
	<h2>ЗАДАНИЕ 1</h2>
	<form action="" method="post">
		<p>
			<label for="pathIn">Введите имя входного файла:</label>
			<input type="text" name="pathIn" placeholder="input.txt"
				   value="<?=$_REQUEST['pathIn']?>">
		</p>
		<p>
			<label for="pathOut">Введите имя файла записи результата:</label>
			<input type="text" name="pathOut" placeholder="Например, result.txt"
				   value="<?=$_REQUEST['pathOut']?>">
		</p>
		<p><input type="submit" value="ПУСК"></p>
	</form>

<?
function readAndSum(){
	if (isset($_REQUEST['pathIn']) && isset($_REQUEST['pathOut'])) {
		if ($_REQUEST['pathIn'] != "" && $_REQUEST['pathOut'] != "") {
			$pathIn = $_REQUEST['pathIn'];
			if (file_exists($pathIn)) {
				$ArStrings = file($pathIn);
				$sum = array_sum($ArStrings);
				return $sum;
			} else {
				echo '<br> Входной файл ' . $pathIn . ' не найден<br>';
			}
		} else {
			echo '<br>Вы забыли ввести имя входного файла или(и) файла записи результата<br>';
		}
	}
}

function write(){
	if (readAndSum()!=""){
		//$pathOut = 'result.txt';
		$pathOut = $_REQUEST['pathOut'];
		file_put_contents($pathOut,readAndSum());
		echo "<br> В файл $pathOut записано число ".readAndSum()."<br>";
	}
}

write();
?>

<h2>ЗАДАНИЕ 2</h2>
	<form action="" method="post">
		<p>
			<label for="pathNumbers">Введите имя входного файла с массивом:</label>
			<input type="text" name="pathNumbers" placeholder="array.txt"
				   value="<?=$_REQUEST['pathNumbers']?>">
		</p>
		<p>
			<label for="exp">Введите имя входного файла с показателем степени:</label>
			<input type="text" name="pathExp" placeholder="pow.txt"
				   value="<?=$_REQUEST['pathExp']?>">
		</p>
		<p><input type="submit" value="ПУСК"></p>
	</form>

<?
function read_pow_write(){
	if (isset($_REQUEST['pathNumbers']) && isset($_REQUEST['pathExp'])){
		if ($_REQUEST['pathNumbers'] != "" && $_REQUEST['pathExp'] != ""){
			$pathNumbers = $_REQUEST['pathNumbers'];
			$pathExp = $_REQUEST['pathExp'];
			if(file_exists($pathNumbers) && file_exists($pathExp)){
				$exp = file_get_contents($pathExp);
				//$exp += 0;
				$string = file_get_contents($pathNumbers);
				$array = explode(' ',$string);
				$resString = '';
				foreach($array as $numbers){
					$numbers = pow($numbers,$exp);
					$resString .= "$numbers ";
				}
				$pathRes = 'pow_'.$exp.'.txt';
				file_put_contents($pathRes,$resString);
			}else{
				echo '<br> Файл '.$pathNumbers. ' или '.$pathExp.' не найден<br>';
			}
		}else{
			echo '<br>Вы забыли ввести имя входного файла или(и) файла записи результата<br>';
		}
	}
}
read_pow_write();
?>
</body>
</html>