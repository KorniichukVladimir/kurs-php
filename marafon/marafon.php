<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php</title>
</head>

<body>

<!-- оператори-->
<?php
//$h = date('H');
//
//  if ($h <= 6) {
//    $c = 0;
//  } elseif ($h > 6 && $h <= 12) {
//    $c = 1;
//  } elseif ($h > 12 && $h <= 18) {
//      $c = 2;
//  } elseif ($h > 18 && $h <= 24) {
//      $c = 3;
//  } else {
//      $c = 0;
//  }
//
//?>

<!--масив-->
<?php
//$arry = ['Moscow', 'Kiev', 'Borispol', 'Bilorus'];
//
//$arr[4] = 'hello'; // добавить сточку четвертим елементом масива
//
//for($i = 0; $i < count($arry); $i++) {
//    echo $arry[$i] . '<br>';
//}
//
//?>

<!--асоціативний масив-->
<?php
//$arr = [
//    'Ukraine' => 'Kiev',
//    'Russia' => 'Moscow',
//    'English' => 'London',
//    'China' => 'Beijing'
//];
//
////echo $arr['China'];
//
//foreach($arr as $key => $value){
//    echo "$key - $value<br>";
//}
//
//?>

<!--вложені масиви-->
<?php
//$arr = [
//    'Ukraine' => ['Kiev', 'Kharkov', 'Lvov', 'Chernigov'],
//    'Russia' => ['Moscow', 'Novosebirsk'],
//    'English' => ['London', 'Marsel', 'Lion'],
//    'China' => ['Beijing', 'Hikino']
//];
//
////echo $arr['China'];
//
//echo "<ul>";
//foreach ($arr as $key => $value) {
//echo "<li>";
//    echo $key;
//echo "<ol>";
//    foreach ($value as $item) {
//               echo "<li>$item</li>";
//
//    }
//echo "</ol></li>";
//}
//echo "</ul>";
//
//?>

<!--form-->
<?php
//if (count($_POST) > 0) {
//    $name = trim($_POST['name']);
//    $phone = trim($_POST['phone']);
//    $dt = date('Y-m-d H:i:s');
//
//    if (strlen($name) < 2) {
//        $msg = 'Name not slims';
//    } elseif (!is_numeric($phone)) {
//        $msg = 'Number not';
//    } elseif (strlen($phone) < 7) {
//        $msg = 'Number not';
//    } else {
//        mail("vkornijschuk@gmail.com", "korniichuk.cc.ua", "$dt $name $phone");
//        file_put_contents('document/mail.txt', "$dt-||-$name-||-$phone\n", FILE_APPEND);
//        $msg = 'Your message send';
//    }
//
//} else {
//    $name = '';
//    $phone = '';
//    $msg = 'Write input';
//}
//?>

<?//= $msg; ?>

<!--<form method="post">-->
<!--    Name<br>-->
<!--    <input type="text" name="name" value="--><?//= $name; ?><!--"><br>-->
<!--    Number<br>-->
<!--    <input type="text" name="phone" value="--><?//= $phone; ?><!--">-->
<!--    <input type="submit" value="Send">-->
<!--</form>-->

</body>
</html>