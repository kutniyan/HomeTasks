<?php

$email = $_REQUEST['email'];

$text = "Привет ".$_REQUEST['name']."!<br>";
$text .= "ВЫ оставили заявку на нашем сайте.<br>Текст заявки:<br> ".$_REQUEST['message'];
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= 'From: Feedback <e.nakoneschniy@gmail.com>\r\n';

echo json_encode(mail($email,"Feedback", $text, $headers));