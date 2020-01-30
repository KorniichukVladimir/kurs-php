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
<h1>lessons 1, time: 27:00</h1>

<!--
r - read (прочитать)
r+ - read & write
w - write (создать и записать)
w+ - write & read
a - append (добавить)
a+ - append & read
-->

<!--read file-->
<?php
//
//$f = fopen('document/1.txt', 'r');
//
//$length = filesize('document/1.txt');
//
//$str1 = fread($f, $length);
//
//echo nl2br($str1);
//
//fclose($f);
//
//?>


<!--write file-->
<?php
$app = date('Y-m-d H:i:s') . "-||-Vladimir-||-0986209717\n";
$f = fopen('document/apps.txt', 'a');
fwrite($f, $app);
fclose($f);
?>




</body>
</html>