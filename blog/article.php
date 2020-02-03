<?php 
	error_reporting(E_ALL);
?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>news</title>
	</head>
	<body>
	
		<?php
			$name = $_GET['id'];
		
			// file_exists -- Проверить наличие указанного файла или каталога
			if($name != '' && file_exists("data/$name") && is_file("data/$name")) {
				$text = file_get_contents("data/$name");
				echo "<h1>$name</h1>";
				echo "<div>$text</div>";
			} else {
				echo '
					<h1>404</h1>
					<hr>
					<a href="post.php">post</a><br>
				';
			}
		?>
		<hr>
		<a href="post.php">post</a><br>
		<a href="add.php">add</a>
		
	</body>
</html>