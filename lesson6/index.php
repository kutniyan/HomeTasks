<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form id="feedback" method="post">
        <p><input type="text" name="name" placeholder="Имя"></p>
        <p><input type="email" name="email" placeholder="Email"></p>
        <p><textarea name="message" cols="30" rows="10"></textarea></p>
        <p><input type="submit" name="send" value="Отправить"></p>
    </form>

    <script src="js/jquery.js"></script>
    <script type="text/javascript">
        $(function(){
            $('#feedback').submit(function(e){
                e.preventDefault();
                var formData = $(this).serializeArray();
                console.log(formData);
                $.ajax({
                    url: "feedback.php",
                    type: 'post',
                    data: formData,
                    success: function(res){
                        if(res) alert('Ваша заявка принята!');
                        else alert('Что-то пошло не так!');
                    }
                });
            });
        });
    </script>
</body>
</html>