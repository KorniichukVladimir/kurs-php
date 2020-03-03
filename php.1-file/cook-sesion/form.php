<?php
 session_start();
 
/* if (isset($_POST['name'])) {
	 $_SESSION['name'] = $_POST['name'];
 } else {
	 $_SESSION['name'] = '';
 } */
 
 if (count($_POST) > 0 ) {
	 if ($_POST['login'] == 'admin' && $_POST['pass'] == 'qwerty') {
		 $_SESSION['auth'] = true;
		 header('Location: a.php');
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
<input type="checkbox" id="save"><label for="save">Save me</label><br>
<input type="submit" value="Send">
</form>
<a href="a.php">AAAAAAAA</a>
