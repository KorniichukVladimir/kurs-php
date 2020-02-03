<?php

if( count($_POST) > 0){
     //post
	$title = $_POST['title'];
	$content = $_POST['content'];
	
	// strlen — Возвращает длину строки
	// trim — Удаляет пробелы (или другие символы) из начала и конца строки
	// strip_tags — Удаляет теги HTML и PHP из строки
	if(strlen($title) > 1){
		$title = trim(strip_tags($title));
		file_put_contents("data/$title", $content);
		header("Location: post.php");
	}
	
	
}else{
	//get
}

?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>forma</title>
	</head>
	<body>
	
		<form method="post">
			Name file<br>
			<input type="text" name="title"><br>
			Content file<br>
			<textarea name="content"></textarea><br>
			<input type="submit" value="Save"><br>
		</form>
		<hr>
		<a href="post.php">post</a><br>
		<a href="article.php">article</a>
		
	</body>
</html>