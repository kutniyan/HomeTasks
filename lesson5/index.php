<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lesson 5</title>
</head>
<body>

<form action="" method="post">
    <p>
        <label for="name">Имя</label>
        <input type="text" name="name" id="name" required value="<?php echo $_REQUEST['name']?>">
    </p>
    <p>
        <label for="age">Возраст</label>
        <input type="text" name="age" id="age" required value="<?php echo $_REQUEST['age']?>">
    </p>
    <p><input type="submit" name="send" value="Отправить"></p>
</form>
<?php
    if($_REQUEST['send'] != '') {
        echo "Меня зовут ", $_REQUEST['name'], "<br>";
        echo "Мне ", $_REQUEST['age'], "<br>";
    }
?>


<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="photo" accept="image/jpeg">
    <p><input type="submit" name="upload" value="Загрузить"></p>
</form>
</body>
</html>