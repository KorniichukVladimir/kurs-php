 <!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>List news</title>
	</head>
	<body>
		<?php
			$name = $_GET['id'];
			$text = file_get_contents("data/$name");
			echo "<h1>$name</h1>";
			echo "<div>$text</div>";
		?>
		<a href="index.php">end</a>
	</body>
</html>