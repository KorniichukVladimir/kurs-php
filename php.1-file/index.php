<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Files</title>
</head>
<body>
<h1>lessons 1, time: 01:30</h1>

<?php 

 /* echo "<pre>";
  print_r($_SERVER); 
 echo "</pre>"; */
 
 $info = [
 date("Y-m-d H:i:s"),
 $_SERVER['REQUEST_URI'],
 $_SERVER['HTTP_REFERER'],
 $_SERVER['SERVER_ADDR'],
 $_SERVER['HTTP_USER_AGENT']
 ];
 
 $to_save = implode('-||-', $info);
 
 /* базовий метод */
 
/* 
r - read (прочитать)
r+ - read & write
w - write (создать и записать)
w+ - write & read
a - append (добавить)
a+ - append & read 
*/

/* добавления в файл данные */
 /* 1 вариант */
 /* $f = fopen('logo.txt', 'a+');
 fwrite($f, $to_save . "\n");
 fclose($f); */
 
 /* 2 вариант */
 file_put_contents('logo.txt', $to_save . "\n", FILE_APPEND);

 ?>
 
 
</body>
</html>