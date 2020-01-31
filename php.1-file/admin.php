<?php 
$str = file_get_contents('logo.txt');
$arr = explode("\n", $str);

echo "<pre>";
print_r($arr);
echo "</pre>";


/* var_dump($str); */
?>