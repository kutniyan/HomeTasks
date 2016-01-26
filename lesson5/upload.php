<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
ini_set('safe_mode', 0);
var_dump($_FILES);

$uploaddir = 'images/';
$uploadfile = $uploaddir . basename($_FILES['photo']['name']);

if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile)) {
    echo "Файл корректен и был успешно загружен.\n";
} else {
    echo "Возможная атака с помощью файловой загрузки!\n";
}?>
<img src="<?php echo $uploadfile?>" alt="">
</body>
</html>
