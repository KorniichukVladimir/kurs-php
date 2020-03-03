<?php

/* 
 название
 значение
 срок истечения
 путь
 домен 
 */
 
  // setcookie('название', 'значение', срок);
  
  if(isset($_COOKIE['entry'])) {
	 $t = $_COOKIE['entry'];
 } else {
	 $t = time();
	 setcookie('entry', $t, time() + 3600 * 24 * 365);
 }
 
 if((time() - $t) < 100) {
	 echo 'sale';
 } else {
	 echo 'No sale';
 } 
 
/* session_start();


$ages
 
 // session_start — Стартует новую сессию, либо возобновляет существующую
/*  setcookie('login', 'admin', time() + 3600 * 24 * 365);
 setcookie('pass', 'gdfdfdv', time() + 3600 * 24 * 365);
 
 echo '<pre>';
 print_r($_COOKIE);
 echo '</pre>'; */
 
 ?>