<?php
 
/* Задаем переменные */
$name = htmlspecialchars($_POST["name"]);
$tel = htmlspecialchars($_POST["tel"]);
 

/* Ваш адрес и тема сообщения */
$address = "lex.webzone@gmail.com";
$sub = "FixTeh Обратный звонок";
 
/* Формат письма */
$mes = "Заявка на сайт.\n
Имя: $name
Телефон: $tel
";
 
 

/* Отправляем сообщение, используя mail() функцию */
$from  = "mail@alexlex.top";
if (mail($address, $sub, $mes, 'From:'.$from)) {}
?>