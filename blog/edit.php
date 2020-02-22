<?php 

	session_start();

	 if (!isset($_SESSION['auth'])) {
		 header('location: auth.php');
		 exit();
	 }

	if (count($_POST) > 0) {


	} else {

	}
?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>edit</title>
	</head>
	<body>
		<form method="post">
			Name file<br>
			<input type="text" name="title" value="<?= $title ?>"><br>
			Content file<br>
			<textarea name="content"><?= $content ?></textarea><br><br>
			<input type="submit" value="Save"><br>
		</form>
		<hr>
		<a href="post.php">post</a><br>
		
	</body>
</html>