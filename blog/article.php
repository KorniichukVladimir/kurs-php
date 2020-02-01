 <!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>news</title>
	</head>
	<body>
	
		<?php
			$name = $_GET['id'];
			$text = file_get_contents("data/$name");
			

			echo "<h1>$name</h1>";
			echo "<div>$text</div>";
		?>
		<hr>
		<a href="post.php">post</a><br>
		<a href="add.php">add</a>
		
	</body>
</html>