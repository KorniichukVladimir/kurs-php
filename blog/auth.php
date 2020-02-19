<?php
 session_start();
 
 if (count($_POST) > 0 ) {
	 if ($_POST['login'] == 'admin' && $_POST['pass'] == 'qwerty') {
		 $_SESSION['auth'] = true;
		 header('Location: post.php');
		 exit();
	 }
 } else {
	 unset($_SESSION['auth']);
 }
 
?>

<form method="post">
<label for="login">Login</label><br>
<input type="text" name="login" id="login"><br>
<label for="password">Password</label><br>
<input type="password" name="pass" id="password"><br>
<input type="checkbox" id="save" name="checkbox" checked><label for="save">Save me</label><br>
<input type="submit" value="Send">
</form>
<a href="post.php">post</a>

  if(isset($_COOKIE['entry'])) {
	 $t = $_COOKIE['entry'];
 } else {
	 $t = time();
	 setcookie('entry', $t, time() + 3600 * 24 * 365);
 }