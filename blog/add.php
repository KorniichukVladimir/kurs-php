<?php

if( count($_POST) > 0){
     //post
	$title = $_POST['title'];
	$content = $_POST['content'];
	
	file_put_contents("data/$title", $content);
	header("Location: index.php");
}else{
	//get
}

?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>blog</title>
	</head>
	<body>
		<form method="post">
			Name file<br>
			<input type="text" name="title"><br>
			Content file<br>
			<textarea name="content"></textarea><br>
			<input type="submit" value="Save"><br>
		</form>
	</body>
</html>