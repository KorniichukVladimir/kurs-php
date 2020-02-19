<?php
 
 session_start();
 
 //$_SESSION['article'] = ['1111', '1112', '1113'];
 //echo $_SESSION['name'];
 if (!isset($_SESSION['auth'])) {
	 header('location: form.php');
	 exit();
 }
  
 ?>
 Hello World
 <a href="form.php">Exit</a>