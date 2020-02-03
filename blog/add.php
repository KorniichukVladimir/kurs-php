<?php

if( count($_POST) > 0){
     // post
	 
	 // trim — Удаляет пробелы (или другие символы) из начала и конца строки
	$title = trim($_POST['title']);
	$content = trim($_POST['content']);
	
	// strip_tags — Удаляет теги HTML и PHP из строки
	if(empty($title)) {
		// empty — Проверяет, пуста ли переменная
		echo 'Заголовок не может бить пустим';
	} elseif(file_exists("data/$title")) {
		// file_exists -- Проверить наличие указанного файла или каталога
		echo 'Статья с таким заголовком уже существует';
	} elseif(ctype_digit($title)) {
		// is_numeric — Проверяет, является ли переменная числом или строкой, содержащей число
		// ctype_digit — Проверяет наличие цифровых символов в строке
		echo 'Заголовок не должен местить числа';
	} elseif(strlen($content) < 10 ) {
		// strlen — Возвращает длину строки
		echo 'Новость не может местить меньше 10-ти символов';
	} else {
		file_put_contents("data/$title", $content);
		header("Location: post.php");
		exit();
	}
}else{
	//get
	$title = '';
	$content = '';
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
			<input type="text" name="title" value="<?= $title ?>"><br>
			Content file<br>
			<textarea name="content"><?= $content ?></textarea><br><br>
			<input type="submit" value="Save"><br>
		</form>
		<hr>
		<a href="post.php">post</a><br>
		
	</body>
</html>