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
    <form action="feedback.php" method="post" class="center-block form-feedback">
        <h2 class="center-block">Обратная связь</h2>
        <div class="form-group">
            <label for="name">ФИО</label>
            <input type="text" class="form-control" name="name" id="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" required>
        </div>
        <div class="form-group">
            <label for="message">Сообщение</label>
            <textarea  class="form-control textarea" rows="5" name="message" id="message" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Отправить</button>
    </form>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="../js/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../js/bootstrap.min.js"></script>
</body>
</html>