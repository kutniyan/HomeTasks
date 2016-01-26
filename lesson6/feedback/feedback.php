<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Обратная связь</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.css" rel="stylesheet">

    <!-- main style -->
    <link href="../css/style.css" rel="stylesheet">
</head>
<body>

<div class="container">
<?php
$arErrors = array();
foreach ($_REQUEST as $key => $item) {//Проверяем поля на пустоту
    if(empty($item)){
        $arErrors[] = "Поле $key не заполнено!";
    }
}

if(empty($arErrors)) {//если нет ошибок то отправляем email
    $adminEmail = "sourceitphp@yandex.ru";//почта администратора
    //заголовки письма
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";
    $headers .= 'From: PHP LESSONS <' . $adminEmail . '>\r\n';

    //текст отправляемый администротору
    $textAdmin = "Пользователь " . $_REQUEST['name'] . " в форме обратной связи написал:<br>" . $_REQUEST['message'];

    //текст отправляемый пользователю
    $textUser = "Добрый день, " . $_REQUEST['name'] . "!<br> Ваше обращение принято. Текст Вашего обращения: <br>" . $_REQUEST['message'];
    mail($adminEmail,"Новое сообщение обратной связи", $textAdmin, $headers);
    mail($_REQUEST['email'], "Обратная связь", $textUser, $headers);
    ?>
    <div class="alert alert-success" role="alert">
        Ваша заяка принята!
        <a href="/lesson6/feedback/" class="btn btn-success">Назад</a>
    </div>
    <?php
}else{//выводим ошибки
    foreach ($arErrors as $arError):?>
        <div class="alert alert-danger" role="alert"><?php echo $arError;?></div>
        <a href="/lesson6/feedback/" class="btn btn-success">Назад</a>
    <?php endforeach;
}?>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="../js/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../js/bootstrap.min.js"></script>
</body>
</html>
